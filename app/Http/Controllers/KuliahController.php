<?php
/*
    Nama File   :KuliahController.php
    NIM         :11S17023
    Kelas       :14 IF 1
*/
namespace App\Http\Controllers;

use Illuminate\Http\Request;

class KuliahController extends Controller
{
    //
    public function index(){
        return "ini adalah index halaman kuliah";
    }

    public function viewMateri(){
        $data=array(
            'topik'=> 'laravel'
        );
        return view('kuliah',$data);
    }
}
