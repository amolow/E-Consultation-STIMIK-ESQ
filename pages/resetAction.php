<?php
require_once('./class/class.Mail.php');
require_once('./class/class.Akun.php');

$email = $_POST['email'];

//is data empty
if (empty($email)) {
    echo "<script>
    alert('Gagal Mendapatkan email, Pastikan semua data benar')
    window.location = '?p=reset';
    </script>";
}

//not empty
else {
    $Akun = new Akun();

    $akun->email = $email;

    $hasil = $akun->cekAkun();

    if ($hasil) {
        // include("./reset-mail.php");
        $mail = new Mail();
        $mail->resetMail();
        echo "<script>
        alert('Berhasil reset email user, silahkan cek email anda untuk reset link anda')
        window.location = '?p=login';
        </script>";
    } else {
        echo "<script>
        alert('Gagal reset user, Pastikan semua data benar')
        window.location = '?p=reset-pass';
        </script>";
    }
}