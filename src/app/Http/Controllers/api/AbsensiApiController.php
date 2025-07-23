<?php

namespace App\Http\Controllers\api;

use App\Models\Absensi;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class AbsensiApiController extends Controller
{
   public function index(Request $request){
    $data = Absensi::get();

    return response()->json($data);
   }
}
