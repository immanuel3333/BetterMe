<?php
/*
    Nama File   :HomeController.php
    NIM         :11S17023
    Kelas       :14 IF 1
*/

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use App\Latihan;
use App\Jenis_latihan;
use App\kalori;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware(['auth','verified']);
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Http\Response
     */
    public function index()
    {
        $user = Auth::user();
        $jenis_latihan =Jenis_latihan::all();
        foreach($jenis_latihan as $jl){
            $jl->latihan;
        }
       // dd($jenis_latihan);
        return view('beranda',['user' => $user,'jenis_latihan' => $jenis_latihan]);
    }

    public function latihan($id)
    {
        $user = Auth::user();
        $latihan = Latihan::find($id);
        //dd($latihan)
       return view('Exercise',['latihan'=> $latihan,'user'=>$user,]);
    }
    
    //kaloricontroller
    public function rekomendasi()
    {
        $user = Auth::user();
        $kalori = User::find(Auth::id())->kalori;
        //dd($kalori);

        if(isset($kalori))
        {
            $latihan = DB::table('latihans')
            ->where('min', '<=', $kalori->jumlah_kalori)
            ->where('max', '>=', $kalori->jumlah_kalori)
            ->get();

        }
        else
        {
            $latihan=null;
        }
        return view('rekomendasi',['kalori'=>$kalori,
        'latihan'=>$latihan,'user'=>$user,
        ]);
      
    }

    
    /** kalori controller
     * Show the form for creating a new resource
     * 
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $user = Auth::user();
        return view('create',['user'=>$user]);
    }


     /** kalori controller
     *  Store a newly created resource in storage
     * 
     * @param \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */

    public function store(Request $request)
    {

        $messages = [
            'required' => ':attribute wajib diisi',
            'numeric' => ':attribute harus diisi angka',
        ];

        $this->validate($request,[
            'jumlah_kalori'=> 'required|numeric'
        ],$messages);

        if(kalori::where('user_id',Auth::id())->first())
        {
            $kalori=kalori::where('user_id',Auth::id())->first();
            $kalori->update([
                'jumlah_kalori'=>$request->jumlah_kalori,
                ]);
        }
        else
        {
            $kalori=kalori::create([
                'jumlah_kalori'=> $request->jumlah_kalori,
                'user_id'=>Auth::id(),
            ]);
        }

        User::find(Auth::id())->update([
            'kalori_id'=> $kalori->id,
        ]);
        return redirect('/rekomendasi');

    }
    //kalori corntroller
     public function delete($id)
     {
         
        $kalori = kalori::find($id);
        $kalori->delete();
        User::find(Auth::id())->update([
            'kalori_id'=> null,
        ]);
        return redirect('/rekomendasi');
     }
     //kalori controller
     public function edit($id)
     {
        $user = Auth::user();
        $kalori = kalori::find($id);
        return view('edit',['kalori'=>$kalori,'user'=>$user,]);
     }

     //Cuman nampilin dulu
     public function homeadmin()
     {

        $user = Auth::user();
        $latihan = Latihan::all();
        return view('BerandaAdmin',['user'=>$user,'latihan'=>$latihan]);
        //dd($latihan);
     }

     public function about()
     {
        $user = Auth::user();
         return view('about',['user'=>$user,]);
     }
   

    




}