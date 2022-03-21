<?php

namespace App\Http\Controllers;

use  Illuminate\Http\Requests;
use DB;
use Illuminate\Support\Facades\Hash;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Validator;
use Illuminate\Foundation\Auth\RegistersUsers;

class MahasiswaController extends Controller{
    public function getDataMhs(){
        $ambildata = DB::table('mahasiswa')->get();
        if($ambildata){
            return response()->json($ambildata, 200);
        }else{
            return response()->json(["Result"=>
            ["ResultCode"=>0,
            "ResultMessage"=>"User atau Password Salah"]],401);
        }
    }

    public function getDataMhsByNim($nim){
        $ambildata = DB::table('mahasiswa')
            ->where('nim', $nim)
            ->get();
        if($ambildata){
            return response()->json($ambildata, 200);
        }else{
            return response()->json(["Result"=>
            ["ResultCode"=>0,
            "ResultMessage"=>"User atau Password Salah"]],401);
        }
    }
}
?>