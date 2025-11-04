<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Judul halaman halo</title>
    <link rel="stylesheet" href="style.css">
</head>

<body>
    <header>
        <h1>Noviana</h1>
        <button class="menu-toggle" id="menuToggle" aria-label="Toggle Navigation">
            &#9776;
        </button>
        <nav>
            <ul>
                <li><a href="#home">Beranda</a></li>
                <li><a href="#about">Tentang</a></li>
                <li><a href="#contact">Kontak</a></li>
            </ul>
        </nav>
    </header>

    <main>
        <section id="home">
            <h2>Selamat Datang</h2>
            <p>ini contoh paragraf HTML.</p>
            <?php
echo "Halo Dunia!";
?>
        </section>
        <section id="about">
<?php 
$NAMA="NOVIANA SIADARI";
$NIM="2522500052";
$TEMPATLAHIR="BANGAI";
$TANGGALLAHIR="09 AGUSTUS 2006";
$HOBI="MENYANYI";
$PASANGAN="JOMBLO ABADI";
$PEKERJAAN="KARYAWAN LAUNDRY";
$NAMAAYAH="ANTONIUS SIADARI";
$NAMAIBU="NETTY SINAGA";
$SAUDARA="9 BERSAUDARA";
?>

            <h2>Tentang kami</h2>
            <p> <strong>Nama:</strong><?php echo $NAMA; ?> &#128526;</p>
            <p> <strong>Nim:</strong><?php echo $NIM; ?></p>
            <p> <strong>Tempat Lahir:</strong><?php echo $TEMPATLAHIR; ?></p>
            <p> <strong>Tanggal Lahir:</strong><?php echo $TANGGALLAHIR; ?></p>
            <p> <strong>Hobi:</strong><?php echo $HOBI; ?> &#127926;</p>
            <p> <strong>Pasangan:</strong><?php echo $PASANGAN; ?> &hearts;</p>
            <p> <strong>Pekerjaan:</strong><?php echo $PEKERJAAN; ?></p>
            <p> <strong>Nama Ayah:</strong><?php echo $NAMAAYAH; ?></p>
            <p> <strong>Nama Ibu:</strong><?php echo $NAMAIBU; ?></p>
            <p> <strong>saudara:</strong><?php echo $SAUDARA; ?></p>
            

        </section>
        <section id="contact">
            <h2>Kontak Kami</h2>
            <form action="" method="GET">

                <label for="TxtNama">
                    <span>Nama:</span>
                    <input type="text" id="TxtNama" name="TxtNama" placeholder="Masuk Nama" required
                        autocomplete="name">
                </label>

                <label for="Txtemail">
                    <span>Email:</span>
                    <input type="Email" id="texemail" placeholder="Masuk email" required autocomplete="email">
                </label>

                <label for="Txtpesan">
                    <span>Pesan:</span>
                    <textarea id="Txtpesan" name="Txtpesan" Rows="4" placeholder="Tulis Pesan Anda..."
                        required></textarea>
                </label>

                <button Type="Submit">Kirim</button>
                <button Type="Reset">Batal</button>
            </form>
        </section>
    </main>
    <footer>
        <p>&copy; 2025 NOVIANA SIADARI [2522500052]</p>
    </footer>

<script src="script.js"></script>
</body>

</html>