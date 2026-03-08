<?php

class Pengaduan{

    private $conn;

    public function __construct($db){

        $this->conn = $db;

    }

    public function simpan($nama,$kontak,$kategori,$deskripsi){

        $sql="INSERT INTO pengaduan(nama,kontak,kategori,deskripsi)
        VALUES('$nama','$kontak','$kategori','$deskripsi')";

        return $this->conn->query($sql);

    }

    public function tampil(){

        $sql="SELECT * FROM pengaduan ORDER BY id DESC";

        return $this->conn->query($sql);

    }

    public function ubahStatus($id,$status){

        $sql="UPDATE pengaduan SET status='$status' WHERE id='$id'";

        return $this->conn->query($sql);

    }

    public function hapus($id){

        $sql="DELETE FROM pengaduan WHERE id='$id'";

        return $this->conn->query($sql);

    }

}

?>