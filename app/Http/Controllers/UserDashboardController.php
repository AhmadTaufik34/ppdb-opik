<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Pendaftar;

use Auth;
use PDF;
class UserDashboardController extends Controller
{
    public function index()
    {
        $user = Auth::user();
        $pendaftar = Pendaftar::where('id_user','=',$user->id)->first();

        if($pendaftar){
            //tampilkan dashboard jika sudah mendaftar
            return view('front.dashboard', [
                'user' => $user,
                'pendaftar' => $pendaftar
            ]);
        }else{
            //redirect ke form pendaftaran jika belum mendaftar
            return redirect('/pendaftar');
        }
    }

    public function formulirPDF(){
        $user = Auth::user();
        $pendaftar = Pendaftar::where('id_user','=',$user->id)->first();

        if($pendaftar){
            //render PDF jika sudah mendaftar
            $pdf = PDF::loadView('front.formulir-pdf', compact('pendaftar'));
            return $pdf->stream();
        }else{
            //redirect ke form pendaftaran jika belum mendaftar
            return redirect('/pendaftaran');
        }
    }
}
