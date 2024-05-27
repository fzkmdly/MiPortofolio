<?php

namespace App\Models;

use CodeIgniter\Model;

class LatihanModel extends Model
{
    public function mhsData()
    {
        // // Raw query
        // $sql = "SELECT * FROM mhs";
        // return $this->db->query($sql)->getResultArray();

        // // Query Builder
        // $query = $this->db->table('mhs');
        // $result = $query->get()->getResultArray();
        // return $result;

        // Simplified Query Builder
        return $this->db->table('mhs')
            ->select('*')
            ->get()
            ->getResultArray();
    }
}