<?php

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;
use PHPMailer\PHPMailer\SMTP;

//Load composer's autoloader
require 'vendor/autoload.php';
require 'vendor/phpmailer/phpmailer/src/PHPMailer.php';
require 'vendor/phpmailer/phpmailer/src/SMTP.php';
require 'vendor/phpmailer/phpmailer/src/Exception.php';

$nik = $_POST['nik'];
$device = $_POST['device'];
include "config.php";
// $nik = '21884';
$qry_agt = "SELECT * FROM tb_anggota WHERE nik = '$nik'";
$exqry_agt = mysqli_query($koneksi, $qry_agt);
$dt_valid = mysqli_fetch_array($exqry_agt);

$sendemail = $dt_valid['email_address'];
$password = $dt_valid['password'];
$pin_tans = $dt_valid['pin_transaction'];
$name = $dt_valid['nama'];
$tlp_anggota = $dt_valid['no_tlp'];
$pesan = "Hallo ".$name."\nAnda telah melakukan pengajuan layanan permintaan PASSWORD dan PIN TRANSAKSI web halaman anggota KOPERASI KARYAWAN YAMAHA INDONESIA \n\nPassword dan PIN dikirim melalui email berikut. \nEmail: ".$sendemail."\nSilahkan Periksa email anda! \n\nKunjungi aplikasi halaman anggota KOPKAR YI untuk informasi lebih lanjut.";


if ($sendemail != "") {
    $mail = new PHPMailer(true);

    try {

        //Server settings
        // $mail->SMTPDebug = 2;                      // Enable verbose debug output
        $mail->isSMTP();                                            // Send using SMTP
        $mail->Host       = 'smtp.hostinger.com';                    // Set the SMTP server to send through
        $mail->SMTPAuth   = true;                                   // Enable SMTP authentication
        $mail->Username   = 'admin@koperasi-yamaha.com';                     // SMTP username
        $mail->Password   = '@Kopkaryi05';                               // SMTP password
        $mail->SMTPSecure = 'ssl';         // Enable TLS encryption; `PHPMailer::ENCRYPTION_SMTPS` encouraged
        $mail->Port       = 465;                                    // TCP port to connect to, use 465 for `PHPMailer::ENCRYPTION_SMTPS` above

        //Recipients
        $mail->setFrom('admin@koperasi-yamaha.com', 'Admin Kopkar YI');
        $mail->addAddress($sendemail);     // Add a recipient
        // $mail->addAddress('sudiyo@music.yamaha.com');               // Name is optional
        $mail->addReplyTo("admin@koperasi-yamaha.com", 'Admin Kopkar YI');
        // $mail->addCC('darmawanrabil@gmail.com');
        // $mail->addBCC('darmawanrabil@gmail.com');

        // Attachments
        // $mail->addAttachment('/var/tmp/file.tar.gz');         // Add attachments
        // $mail->addAttachment('/tmp/image.jpg', 'new.jpg');    // Optional name

        // Content
        $mail->isHTML(true);                                  // Set email format to HTML
        $mail->Subject = 'Login Information Kopkar YI';
        $mail->Body    = 'Hallo <b>' . $name . '</b></br> Informasi Login anda sebagai berikut: </br> </br> Password : <b>' . $password . '</b></br>Pin Transaksi : <b>' . $pin_tans . '</b> </br> </br> Mohon untuk tidak memberitahukan informasi tersebut kepada orang lain!</br>'.$device;
        $mail->AltBody = 'This is the body in plain text for non-HTML mail clients';

        $mail->send();

        // echo 'Message has been sent';
        if (!$mail) {
            
            $data = [];
            $data['status'] = "Gagal";
            $data['pesan'] = "Email anda tidak dapat diproses";
            $data['icn'] = "error";

            echo json_encode($data);
        } else {
            
            $curl = curl_init();

             curl_setopt_array($curl, array(
             CURLOPT_URL => 'https://api.fonnte.com/send',
             CURLOPT_RETURNTRANSFER => true,
             CURLOPT_ENCODING => '',
             CURLOPT_MAXREDIRS => 10,
             CURLOPT_TIMEOUT => 0,
             CURLOPT_FOLLOWLOCATION => true,
             CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
             CURLOPT_CUSTOMREQUEST => 'POST',
             CURLOPT_POSTFIELDS => array(
             'target' => $tlp_anggota,
             'message' => $pesan,
             'countryCode' => '62', //optional
             ),
             CURLOPT_HTTPHEADER => array(
             'Authorization: 22MX_3BJdxEcvnH14d45' //change TOKEN to your actual token
             ),
             ));
            
             $response = curl_exec($curl);
            
             curl_close($curl);
            
            $explode_email = explode("@", $sendemail);
            $inisialdepan = substr($explode_email[0],0,1);
            $inisialbelakang = substr($explode_email[0],-1);
            $domain = $explode_email[1];
            
            $data = [];
            $data['status'] = "Berhasil";
            $data['pesan'] = "Password dikirim ke email " . $inisialdepan . "*******" . $inisialbelakang . "@" . $domain;
            $data['icn'] = "success";

            echo json_encode($data);
        }
    } catch (Exception $e) {
        // echo "Message could not be sent. Mailer Error: {$mail->ErrorInfo}";
        
        
        $data = [];
        $data['status'] = "Gagal";
        $data['pesan'] = "Email anda tidak dapat diproses";
        $data['icn'] = "error";

        echo json_encode($data);
    }
} else {
    $data = [];
    $data['status'] = "Gagal";
    $data['pesan'] = "Email anda belum terdaftar";
    $data['icn'] = "error";

    echo json_encode($data);
    // echo "Message could not be sent. Mailer Error: {$mail->ErrorInfo}";
}
