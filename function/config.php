<?php
class database
{

    public function query($sql, $data, $fetch = false)
    {
        include("koneksi.php");

        $q = $db->prepare($sql);

        $q->execute($data);

        return $fetch ? $q->fetch(2) : $q;
    }


    public function count($table,){

        $sql = "SELECT COUNT(*) as count FROM $table";

          

        $result = $this->query($sql, [], true);
        return $result["count"];
    }

 
}
