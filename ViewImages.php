<?php
namespace App\Controllers;
use CodeIgniter\Files\File;
class viewimages extends BaseController
{
    public function index()
    {
        $db = db_connect();
        $data = ['result'->$db->query("seleect * from img;")];
        $db->close();
        return view('view images',$data);
    }
}