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

    // get data post
    $id = $_POST['id'];
    $statuse = $_POST['statuse'];
    $username = $user['username'];

    if ($statuse === 'pengeluaran') {
        $query = "SELECT t_outcome.*, t_payment.c_name AS payment_method, t_category.c_name AS category_name 
                  FROM t_outcome 
                  JOIN t_payment ON t_outcome.c_payment = t_payment.id 
                  JOIN t_category ON t_outcome.c_category = t_category.id 
                  WHERE t_outcome.id = :id";
    } else {
        $query = "SELECT t_income.*, t_payment.c_name AS payment_method, t_category.c_name AS category_name 
                  FROM t_income 
                  JOIN t_payment ON t_income.c_payment = t_payment.id 
                  JOIN t_category ON t_income.c_category = t_category.id 
                  WHERE t_income.id = :id";
    }

    $stmt = $connect->prepare($query);
    $stmt->bindParam(':id', $id, PDO::PARAM_INT);
    $stmt->execute();
    $data = $stmt->fetch(PDO::FETCH_ASSOC);

?>
    <input type="hidden" name="id-transaction" id="id-transaction" value="<?= $id ?>">
    <input type="hidden" name="statuse-transaction" id="statuse-transaction" value="<?= $statuse ?>">
    <div class="row">
        <div class="col-12 mb-3">
            <div class="form-group input-group-sm">
                <label for="exampleInputEmail1">Kategori</label>
                <input class="form-control" disabled type="text" name="category" id="category" value="<?= $data['category_name'] ?>">
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-12 mb-3">
            <div class="form-group input-group-sm">
                <label for="exampleInputEmail1">Metode pembayaran</label>
                <input class="form-control" disabled type="text" name="payment-method" id="payment-method" value="<?= $data['payment_method'] ?>">
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-12">
            <div class="mb-3">
                <label for="basic-url" class="form-label">Nominal</label>
                <div class="input-group">
                    <span class="input-group-text" id="basic-addon3">Rp</span>
                    <input type="number" class="form-control" oninput="validateInputJustNumber(event)" id="nominal-transaction" aria-describedby="basic-addon3 basic-addon4" value="<?= $data['c_nominal'] ?>">
                </div>
                <span id="error-nominal-transaction" style="color: #DC3545; display: none; font-size:0.7em"><i class="fa-solid fa-circle-info"></i> Silahkan memasukkan nominal</span>
                <span id="error-nominal-transaction2" style="color: #DC3545; display: none; font-size:0.7em"><i class="fa-solid fa-circle-info"></i> Nominal harus lebih dari 0</span>
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-12 mb-3">
            <div class="form-group">
                <label for="exampleInputEmail1">Detail</label>
                <textarea name="detail" id="detail-transaction" class="form-control"><?= $data['c_detail'] ?></textarea>
                <span id="error-detail-transaction" style="color: #DC3545; display: none; font-size:0.7em"><i class="fa-solid fa-circle-info"></i> Detail wajib diisi</span>
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-12 mb-3">
            <div class="form-group">
                <label for="exampleInputEmail1">Waktu</label>
                <input class="form-control" type="datetime-local" name="time-transaction" id="time-transaction" value="<?= date('Y-m-d H:i:s', strtotime($data['c_datetime'])) ?>">
                <span id="error-time-transaction" style="color: #DC3545; display: none;"><i class="fa-solid fa-circle-info"></i> Silahkan memasukkan waktu start</span>
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-12">
            <button type="button" class="btn btn-danger btn-sm" onclick="deleteTransaction('<?= $id ?>', '<?= $statuse ?>')">
                <i class="fa-solid fa-trash"></i>
            </button>
        </div>
    </div>
<?php
}
