<?php
// check cookie
$jwt = $_COOKIE['duit_token'] ?? null;
if ($jwt === null) {
    echo "cookie_expired";
} else {
    require_once $_SERVER['DOCUMENT_ROOT'] . '/duit/config/connect.php'; // local
    require_once $_SERVER['DOCUMENT_ROOT'] . '/duit/config/check_cookie.php'; // local
    // require_once $_SERVER['DOCUMENT_ROOT'] . '/config/connect.php'; // hosting
    // require_once $_SERVER['DOCUMENT_ROOT'] . '/config/check_cookie.php'; // hosting

    $username = $user['username'];
    $month = date('Y-m', strtotime($now));
    $last_month = date('Y-m', strtotime('-1 month', strtotime($now)));

    try {
        // First query to get total_balance
        $stmt = $connect->prepare("SELECT SUM(c_total) as total_balance FROM v_balance WHERE c_username = :username");
        $stmt->bindParam(':username', $username, PDO::PARAM_STR);
        $stmt->execute();
        $result = $stmt->fetch(PDO::FETCH_ASSOC);

        $total_balance = $result ? $result['total_balance'] : 0;

        // Second query to get monthly comparison data
        $stmt = $connect->prepare("SELECT 
    curr.c_username,
    curr.c_month AS c_this_month,
    
    -- Sum of all balances up to the last month
    (SELECT COALESCE(SUM(c_balance), 0) 
     FROM `duit`.`v_monthly_balance` 
     WHERE c_username = curr.c_username 
     AND c_month <= :last_month) AS c_last_month_balance,

    -- Sum of all balances up to this month
    (SELECT COALESCE(SUM(c_balance), 0) 
     FROM `duit`.`v_monthly_balance` 
     WHERE c_username = curr.c_username 
     AND c_month <= :month) AS c_this_month_balance,

    -- Difference calculation
    ((SELECT COALESCE(SUM(c_balance), 0) 
      FROM `duit`.`v_monthly_balance` 
      WHERE c_username = curr.c_username 
      AND c_month <= :month)
     - 
     (SELECT COALESCE(SUM(c_balance), 0) 
      FROM `duit`.`v_monthly_balance` 
      WHERE c_username = curr.c_username 
      AND c_month <= :last_month)
    ) AS c_difference

        FROM `duit`.`v_monthly_balance` curr
        WHERE curr.c_month = :month
        AND curr.c_username = :username;
        ");

        $stmt->bindParam(':username', $username, PDO::PARAM_STR);
        $stmt->bindParam(':last_month', $last_month, PDO::PARAM_STR);
        $stmt->bindParam(':month', $month, PDO::PARAM_STR);
        $stmt->execute();
        $comparison_result = $stmt->fetch(PDO::FETCH_ASSOC);

        // Fix JSON output keys
        if ($comparison_result) {
            echo json_encode([
                'kekayaan' => $total_balance,
                'last_month_balance' => $comparison_result['c_last_month_balance'],
                'this_month_balance' => $comparison_result['c_this_month_balance'], // Fix
                'difference' => $comparison_result['c_difference']
            ]);
        } else {
            echo json_encode([
                'kekayaan' => $total_balance,
                'last_month_balance' => 0,
                'this_month_balance' => 0,
                'difference' => 0
            ]);
        }
    } catch (PDOException $e) {
        echo json_encode(["error" => $e->getMessage()]);
    }
}
