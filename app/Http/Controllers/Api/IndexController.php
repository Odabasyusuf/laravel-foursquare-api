<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class IndexController extends Controller
{
    public function index(){
        return view('index');
    }

    public function aramaSayfa(Request $request){
        $secilenSehir = $request->sehirAra;

        $clientID = "35PSVLAGAIBISIAVTITK2WAYVXB0KMU1CTSILZHEPUPXWFJ0";
        $clientSecret = "5F2Q0IGVTFWMP1HOOI4OLIJBKAQ3QN10LNX1NZAJ0NGANQO5";

        return view('aramaSayfa',compact(['secilenSehir','clientID','clientSecret']));
    }

    public function haritaPopup($lat,$lng){
        //return compact(['lat','lng']);
        return view('haritaPopup',compact(['lat','lng']));
    }
}
