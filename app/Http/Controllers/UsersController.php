<?php
/*
    Nama File   :UsersController.php
    NIM         :11S17023
    Kelas       :14 IF 1
*/
namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;

class UsersController extends Controller
{
    public function index(){
        $user = User::where('id',1)->first();

        return view('index',['user' => $user]);
        // dd($user);
    }
}
