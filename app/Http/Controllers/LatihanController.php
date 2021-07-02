<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Latihan;
use App\jenis_latihan;
use App\User;
use File;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;

class LatihanController extends Controller
{
    public function index()
    {
        $user = Auth::user();
         return view('LatihanManagement',['user' => $user]);
    }
    public function createadmin()
    {
        $user = Auth::user();
        return view('createAdmin',['user' => $user]);
    }
    public function editadmin($id)
    {
        $user = Auth::user();
        $latihan=Latihan::find($id);
        $latihan->jenis_latihan=jenis_latihan::find($latihan->jenis_latihan_id);
        return view('EditAdmin',['latihan'=>$latihan,'user' => $user]);
    }
    
    public function store(Request $request)
    {
        
        $file = $request->file('image');
        $file->move('image',$file->getClientOriginalName());
       $latihan=Latihan::create([
            'jenis_latihan_id'=>$request->jenis_latihan,
            'nama_latihan'=>$request->nama_latihan,
            'min'=>$request->kalori_minimal,
            'max'=>$request->kalori_maksimal,
            'video'=>$request->video,
            'gambar'=>'image/'.$file->getClientOriginalName(),
        ]);
        
      

       return redirect('/exercise2');
     //dd($file);
    }


    public function edit(Request $request,$id)
    {
        $latihan=Latihan::find($id);
        File::delete($latihan->gambar);
        $file = $request->file('image');
        $file->move('image',$file->getClientOriginalName());
       $latihan->update([
            'jenis_latihan_id'=>$request->jenis_latihan,
            'nama_latihan'=>$request->nama_latihan,
            'min'=>$request->kalori_minimal,
            'max'=>$request->kalori_maksimal,
            'video'=>$request->video,
            'gambar'=>'image/'.$file->getClientOriginalName(),
        ]);

       return redirect('/exercise2');
        //dd($latihan);
    }

    public function delete($id)
    {
        $latihan=Latihan::find($id);
        File::delete($latihan->gambar);
        $latihan->delete();
        return redirect('/exercise2');
    }

    public function view()
    {
        $latihans=Latihan::all();
        foreach($latihans as $latihan)
        {
            $jenis_latihan=jenis_latihan::find($latihan->jenis_latihan_id);
            $latihan->jenis_latihan=$jenis_latihan->nama_jenis_latihan;
            $latihan->action='<a href="edit2/'.$latihan->id.'" class="btn btn-warning btn-sm" id="update'.$latihan->id.'">Edit</a>
            <a href="delete/'.$latihan->id.'" class="btn btn-danger btn-sm" id="'.$latihan->id.'" >Delete</a>';
        }
        
        return response()->json($latihans,200);

    }
    

    

}
