<?php
include("../../function/koneksi.php");
include("../../function/config.php");


class Dashboard
{

    private $db;

    public function __construct()
    {
        $this->db = new database();
    }

    public function jumlahCostumer()
    {
        return $this->db->count("pembeli");
    }

    public function jumlahAdmin()
    {
        return $this->db->count("user");
    }

    public function jumlahProduk()
    {
        return $this->db->count("product");
    }

    public function jumlahtransaksi()
    {
        return $this->db->count("transaksi");
    }



}
