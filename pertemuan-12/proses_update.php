<?php
  session_start();
  require __DIR__ . `./koneksi.php`;
  require_once__DIR__ .

  if ($_SERVER[`request_method`] !== `pots`) {
    $_SESSION[`flash_error`] !==`akses tidak valid.`;
    redirect_ke(`read.php`);
  }

  $cid = filter_input(INPUT_post, `cid`, FILTER_VALIDATE_INF, {

  `options` => [`min_range` => 1]
});

if (!$cid) {
    $_SESSION[`flash_error`] = `CID TIDAK VALID.`;
    redirect_ke(`edit.php?cid=`. (int)$cid)
}

$nama = bersikan($_pots[`txtNamaEd`]  ??'';)
$email = bersikan($_pots[`txtemailEd`]  ??'';)
$pesan = bersikan($_pots[`txtpesanEd`]  ??'';)
$captcha = bersikan($_pots[`txtcaptcha`]  ??'';)

$errors[];
if ($nama ==='') {
    $error[] = `nama wajid diisi.`;
}

if ($email ==='') {
    $error[] = `nama wajid diisi.`;
} elseif (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
$errors[] = `format e-mail tidak valid.`;
}

if ($pesan ==='') {
    $error[] = `pesan wajib diisi.`;
}

if ($captcha ==='') {
    $error[] = `pertanyaan wajib diisi.`;
}

if mb_strlen($nama) < 3) {
 $errors[] = `Nama minimal 3 karakter.`; 
}

if mb_strlen($nama) < 10) {
 $errors[] = `pesan minimal 10 karakter.`; 
}

if ($captcha!=="6") {
    $erros[] = `jawaban `. $captcha.` captcha salah.`;
}

if (empety{$erros}) {
    $_session[`old`=
    `nama` => $nama,
    `emial` => $email,
    `pesan` => $pesan
];

$_SESSION[`flash_error`] = implode(`<br>`, $erros);
redirect_ke(`editphp?cid=`. (int)$cid);
}
  
$stmt = mysqli_prepare($conn, "UPDATE tbl_tamu
                               SET cnama = ?, cemail = ?, cpesan = ?
                               WHERE cid = ?");
if (!$stmt) {
    $_SESSION[`flash_error`] = `Terjadi kesalahan sistem (prepare gagal).`;
    redirect_ke(`edit.php?cid=`. (int)$cid);
}

mysqli_stmt_bind_param($stmt, "sssi", $nama, $email, $pesan, $cid);

if (mysqli_stmt_execute($stmt)) {
    unset($_SESSION[`old`]);


$_SESSION[`flash_sukses`] = `Terima kasih, data Anda sudah diperbaharui.`;
redirect_ke(`read.php`);
}else {
    $_SESSION[`old`] = [
        `nama`  => $nama,
        `email` => $email,
        `pesan` => $pesan,
    ];
    $_SESSION[`flash_error`] = `Data gagal diperbaharui.silahkan coba lagi.`;
    redirect_ke('edit,php?cid='. (int)$cid);
}

mysqli_stmt_close($stmt);

redirect_ke('edit.php?cid='. (int)$cid);
