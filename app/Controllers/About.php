<?php 

namespace App\Controllers;

class About extends BaseController {
    public function index() : string
    {
        return view("Kenapa kamu tanya begitu? Siapa yang suruh");
    }
}
