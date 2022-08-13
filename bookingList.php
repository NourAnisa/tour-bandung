<?php session_start();

            // echo $_POST['nama']." ";
            // echo $_POST['dateTour']." ";
            // echo $_POST['tujuan']." ";
            // echo $_POST['hotelp']." ";
            // echo $_POST['kategori_paket']." ";
            // echo $_POST['paket']." ";
            // echo $_POST['status']." ";

if(isset($_SESSION['username'])){

    //koneksi terpusat
    include "config/koneksi.php";
    $username=$_SESSION['username'];
    $user_id = $_SESSION['user_id']; 
?>
<!DOCTYPE html>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <link href="css/metro-bootstrap.css" rel="stylesheet">
    <link href="css/metro-bootstrap-responsive.css" rel="stylesheet">
    <link href="css/iconFont.css" rel="stylesheet">
    <link href="css/docs.css" rel="stylesheet">


    <!-- Load JavaScript Libraries -->
    <script src="js/jquery/jquery.min.js"></script>
    <script src="js/jquery/jquery.widget.min.js"></script>
    <script src="js/jquery/jquery.mousewheel.js"></script>

    <!-- Metro UI CSS JavaScript plugins -->
    <script src="js/load-metro.js"></script>

    <!-- Local JavaScript -->
    <script src="js/docs.js"></script>
    
    <style>
    </style>

<title>Booking Paket</title>
</head>


<body class="metro">
    <header class="bg-darkCobalt" data-load="atasan.php"></header>
    
    <div class="" data-load="sampul.html"></div>
    
    <!-- ---------------------------------------- ISI TAB ------------------------------------- -->
    <div class="container grid">
        <div class="row">
                <table class="table striped">
                    <thead>
                        <tr class="info fg-white">
                            <th class="text-left">ID Pesan</th>
                            <th class="text-left">Tanggal Pesan</th>
                            <th class="text-left">Tanggal Tour</th>
                            <th class="text-left">Paket Tour</th>
                            <th class="text-left">Tempat Penginapan</th>
                            <th class="text-left">Harga Paket</th>
                            <th class="text-left">Harga Penginapan</th>
                            <th class="text-left">Harga Total</th>
                            <th class="text-left">Aksi</th>
                        </tr>
                    </thead>
                    
                    <tbody>
                    <?php
                        
                        $comot=mysqli_query($kon,"SELECT a.*,b.harga_paket,c.hotel,c.harga as harga_hotel, (b.harga_paket+c.harga) as total FROM tbl_pesan a join tbl_paket b on a.id_paket=b.id_paket join tbl_hotel c on a.id_hotel=c.id_hotel where a.id_user='$user_id'");
                        //$comot=mysqli_query($kon,"SELECT * FROM tbl_paket");
                        
                        while($isi_tbl=mysqli_fetch_array($comot))
                        {
                        if($isi_tbl['status']=='S2'){
                            $txtS="Telah malakukan pembayaran";
                        }else if($isi_tbl['status']=='S3'){
                            $txtS="Melakukan pembayaran di tempat";
                        }
 
                    ?>
                        <tr>
                            <td>BTT-00<?php echo $isi_tbl['id_pesan']; ?></td>
                            <td><?php echo $isi_tbl['tgl_pesan']; ?></td>
                            <td><?php echo $isi_tbl['tgl_tour']; ?></td>
                            <td><?php echo $isi_tbl['id_paket']; ?></td>
                            <td><?php echo $isi_tbl['hotel']; ?></td>
                            <td><?php echo $isi_tbl['harga_paket']; ?> IDR</td>
                            <td><?php echo $isi_tbl['harga_hotel']; ?> IDR</td>
                            <td><?php echo $isi_tbl['total']; ?> IDR</td>
                            <td><?php
                                $now= date("Y-m-d");
                                if($isi_tbl['status']=='S2'&&$isi_tbl['tgl_tour']>=$now||$isi_tbl['status']=='S3'&&$isi_tbl['tgl_tour']>=$now){
                                ?>
                                <a class="button" href="bookingFinish.php?id=<?php echo $isi_tbl[0]; ?>" data-hint="<?php echo $txtS ?>">Cetak Tiket</a>
                                <?php
                                }else if($isi_tbl['status']=='S4'){
                                    echo "Telah Tour";
                                }else if($isi_tbl['tgl_tour']<$now){
                                    echo "<a class='text-warning'>Kadaluarsa!!</a>";
                                }else{
                                    echo "Menunggu";
                                ?>
                                    <br /><a class="button" href="uploadBukti.php?id=<?php echo $isi_tbl[0]; ?>" data-hint="Upload Bukti Pembayaran">Upload Bukti</a>
                                <?php
                                }
                                ?>
                                </td>
                        </tr>
                    <?php
                        }
                    ?>
                    </tbody>
                    
                </table>
        </div>
    </div>
    <!-- ---------------------------------------- ISI TAB ------------------------------------- -->
    
    <footer class="dark" data-load="bawahan.html"></footer>
</body>
</html>
<?php
}else{
    session_destroy();
    header('Location:formRegistrasi.php?status=Silahkan Login');
}
?>