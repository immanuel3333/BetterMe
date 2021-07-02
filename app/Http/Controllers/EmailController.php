<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use App\Mail\SendMail;

class EmailController extends Controller
{
    public function index(){
        $nama = "Immanuel Siburian";
        $email = "immanuel.siburian84@gmail.com";
        $kirim = Mail::to($email)->send(new SendMail($nama));
    
        if($kirim){
            echo "Email telah dikirim";
        }
    }
}
