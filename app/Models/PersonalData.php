<?php

namespace App\Models;

use CodeIgniter\Model;

class PersonalData extends Model
{
    protected $table = 'about_me';
    protected $primaryKey = 'nim';
    protected $allowedFields = ['nama', 'alamat', 'email', 'phone_numb', 'Kota/kab', 
                                'affliate', 'age', 'birth'];
}