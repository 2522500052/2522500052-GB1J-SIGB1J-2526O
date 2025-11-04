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
                <li><a href="#ipk">nilai</a></li>
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
        <section id="ipk">
            $namamatkul1='Aplikasi Perkantoran';
        $sksmatkul1='3';
        $nilaihadir1='90';
        $nilaitugas1='60';
        $nilaiuts1='80';
        $nilaiuas1='70';
            $namamatkul2='Logika Informatika';
        $sksmatkul2='3';
        $nilaihadir2='70';
        $nilaitugas2='50';
        $nilaiuts2='60';
        $nilaiuas2='80';
            $namamatkul3='Pengantar Basis Data';
        $sksmatkul3='3';
        $nilaihadir3='80';
        $nilaitugas3='70';
        $nilaiuts3='70';
        $nilaiuas3='90';
            $namamatkul4='Pengantar Teknologi';
        $sksmatkul4='3';
        $nilaihadir4='90';
        $nilaitugas4='90';
        $nilaiuts4='90';
        $nilaiuas4='90';
         $namamatkul5='Pemrograman Web Dasar';
        $sksmatkul5='3';
        $nilaihadir5='80';
        $nilaitugas5='80';
        $nilaiuts5='80';
        $nilaiuas5='80';

         $nilaiAkhir1 = (0.1 * $nilaihadir1) + (0.2 * $nilaitugas1) + (0.3 * $nilaiuts1) + (0.4 * $nilaiuas1);
        $nilaiAkhir2 = (0.1 * $nilaihadir2) + (0.2 * $nilaitugas2) + (0.3 * $nilaiuts2) + (0.4 * $nilaiuas2);
        $nilaiAkhir3 = (0.1 * $nilaihadir3) + (0.2 * $nilaitugas3) + (0.3 * $nilaiuts3) + (0.4 * $nilaiuas3);
        $nilaiAkhir4 = (0.1 * $nilaihadir4) + (0.2 * $nilaitugas4) + (0.3 * $nilaiuts4) + (0.4 * $nilaiuas4);
        $nilaiAkhir5 = (0.1 * $nilaihadir5) + (0.2 * $nilaitugas5) + (0.3 * $nilaiuts5) + (0.4 * $nilaiuas5);

        if ($nilaihadir1 < 70){ 
                    $grade1="E";
                    $mutu1="0.00";
                    $status1="Gagal";
                } else {
                    if ($nilaiAkhir1>=91){
                $grade1="A";
                $mutu1=4.00;
                $status1="Lulus";
            } elseif 
                ($nilaiAkhir1>=81){
                $grade1="A-";
                $mutu1=3.70;
                $status1="Lulus";
            } elseif 
                ($nilaiAkhir1>=76){
                $grade1="B+";
                $mutu1=3.30;
                $status1="Lulus";
            } elseif 
                ($nilaiAkhir1>=71){
                $grade1="B";
                $mutu1=3.00;
                $status1="Lulus";
            } elseif 
                ($nilaiAkhir1>=66){
                $grade1="B-";
                $mutu1=2.70;
                $status1="Lulus";
            } elseif 
                ($nilaiAkhir1>=61){
                $grade1="C+";
                $mutu1=2.30;
                $status1="Lulus";
            } elseif 
                ($nilaiAkhir1>=56){
                $grade1="C";
                $mutu1=2.00;
                $status1="Lulus";
            } elseif 
                ($nilaiAkhir1>=51){
                $grade1="C-";
                $mutu1=1.70;
                $status1="Lulus";
            } elseif 
                ($nilaiAkhir1>=36){
                $grade1="D";
                $mutu1=1.00;
                $status1="Gagal";
            } elseif
                ($nilaiAkhir1>=0){
                $grade1="E";
                $mutu1=0.00;
                $status1="Gagal";
            }
        }

         if ($nilaihadir2 < 70){ 
            $grade2="E";
            $mutu2="0.00";
            $status2="Gagal";
        } else {
            if ($nilaiAkhir2>=91){
                $grade2="A";
                $mutu2=4.00;
                $status2="Lulus";
            } elseif 
                ($nilaiAkhir2>=81){
                $grade2="A-";
                $mutu2=3.70;
                $status2="Lulus";
            } elseif 
                ($nilaiAkhir2>=76){
                $grade2="B+";
                $mutu2=3.30;
                $status2="Lulus";
            } elseif 
                ($nilaiAkhir2>=71){
                $grade2="B";
                $mutu2=3.00;
                $status2="Lulus";
            } elseif 
                ($nilaiAkhir2>=66){
                $grade2="B-";
                $mutu2=2.70;
                $status2="Lulus";
            } elseif 
                ($nilaiAkhir2>=61){
                $grade2="C+";
                $mutu2=2.30;
                $status2="Lulus";
            } elseif 
                ($nilaiAkhir2>=56){
                $grade2="C";
                $mutu2=2.00;
                $status2="Lulus";
            } elseif 
                ($nilaiAkhir2>=51){
                $grade2="C-";
                $mutu2=1.70;
                $status2="Lulus";
            } elseif 
                ($nilaiAkhir2>=36){
                $grade2="D";
                $mutu2=1.00;
                $status2="Gagal";
            } elseif 
                ($nilaiAkhir2>=0){
                $grade2="E";
                $mutu2=0.00;
                $status2="Gagal";
            }
        }

         if ($nilaihadir3 < 70){ 
            $grade3 = "E";
            $mutu3 = 0.00;
            $status3 = "Gagal";
        } else {
            if ($nilaiAkhir3 >= 91) {
                $grade3 = "A"; $mutu3 = 4.00; $status3 = "Lulus";
            } elseif ($nilaiAkhir3 >= 81) {
                $grade3 = "A-"; $mutu3 = 3.70; $status3 = "Lulus";
            } elseif ($nilaiAkhir3 >= 76) {
                $grade3 = "B+"; $mutu3 = 3.30; $status3 = "Lulus";
            } elseif ($nilaiAkhir3 >= 71) {
                $grade3 = "B"; $mutu3 = 3.00; $status3 = "Lulus";
            } elseif ($nilaiAkhir3 >= 66) {
                $grade3 = "B-"; $mutu3 = 2.70; $status3 = "Lulus";
            } elseif ($nilaiAkhir3 >= 61) {
                $grade3 = "C+"; $mutu3 = 2.30; $status3 = "Lulus";
            } elseif ($nilaiAkhir3 >= 56) {
                $grade3 = "C"; $mutu3 = 2.00; $status3 = "Lulus";
            } elseif ($nilaiAkhir3 >= 51) {
                $grade3 = "C-"; $mutu3 = 1.70; $status3 = "Lulus";
            } elseif ($nilaiAkhir3 >= 36) {
                $grade3 = "D"; $mutu3 = 1.00; $status3 = "Gagal";
            } elseif 
                    ($nilaiAkhir3>= 0) { $grade3 = "E"; $mutu3 = 0.00; $status3 = "Gagal";
            }
        }

         if ($nilaihadir4 < 70){ 
            $grade4 = "E";
            $mutu4 = 0.00;
            $status4 = "Gagal";
        } else {
            if ($nilaiAkhir4 >= 91) {
                $grade4 = "A"; $mutu4 = 4.00; $status4 = "Lulus";
            } elseif ($nilaiAkhir4 >= 81) {
                $grade4 = "A-"; $mutu4 = 3.70; $status4 = "Lulus";
            } elseif ($nilaiAkhir4 >= 76) {
                $grade4 = "B+"; $mutu4 = 3.30; $status4 = "Lulus";
            } elseif ($nilaiAkhir4 >= 71) {
                $grade4 = "B"; $mutu4 = 3.00; $status4 = "Lulus";
            } elseif ($nilaiAkhir4 >= 66) {
                $grade4 = "B-"; $mutu4 = 2.70; $status4 = "Lulus";
            } elseif ($nilaiAkhir4 >= 61) {
                $grade4 = "C+"; $mutu4 = 2.30; $status4 = "Lulus";
            } elseif ($nilaiAkhir4 >= 56) {
                $grade4 = "C"; $mutu4 = 2.00; $status4 = "Lulus";
            } elseif ($nilaiAkhir4 >= 51) {
                $grade4 = "C-"; $mutu4 = 1.70; $status4 = "Lulus";
            } elseif ($nilaiAkhir4 >= 36) {
                $grade4 = "D"; $mutu4 = 1.00; $status4 = "Gagal";
            } elseif ($nilaiAkhir4>=0) {
                $grade4 = "E"; $mutu4 = 0.00; $status4 = "Gagal";
            }
        }





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