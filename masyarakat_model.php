<?php
    session_start();
    require_once('_koneksi.php');
    if(isset($_POST['simpan_pengaduan'])){
        $namaFile = date('YmdHis').'.jpg';
        $namaSementara = $_FILES['foto']['tmp_name'];
        $dirUpload = "foto/";
        move_uploaded_file($namaSementara, $dirUpload.$namaFile);
        $tgl_pengaduan = date('Y/m/d');
        $nik = $_SESSION['nik'];
        $isi_laporan = $_POST['isi_laporan'];
        $query = "INSERT INTO pengaduan VALUES(
            '',
            '$tgl_pengaduan',
            '$nik',
            '$isi_laporan',
            '$namaFile',
            '0'
            )";
        mysqli_query($conn, $query);
        echo"<script> alert('Terima kasih telah memberikan masukan'); </script>";
        echo"<script> window.location.href = 'pengaduan_lihat.php'; </script>";
    }
if(isset($_GET['hapus'])){
    $foto = $_GET['hapus'];
    unlink('foto/'.$foto);
    $query = "DELETE FROM pengaduan where foto = '$foto' ";
    mysqli_query($conn, $query);
    echo"<script> alert('Laporan berhasil dihapus'); </script>";
    echo"<script> window.location.href = 'pengaduan_lihat.php'; </script>";
}
if(isset($_GET['validasi'])){
    $id_pengaduan = $_GET['validasi'];
    $query = "UPDATE pengaduan set
        status = 'proses'
        where id_pengaduan = '$id_pengaduan'
    ";
    mysqli_query($conn, $query);
    echo"<script> alert('Laporan berhasil divalidasi'); </script>";
    echo"<script> window.location.href = 'tanggapan.php'; </script>";
}