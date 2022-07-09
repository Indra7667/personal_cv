<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Routing\Controller as BaseController;

class Controller extends BaseController
{
    public function index()
    {
        $prive = DB::table('prive')->first();
        $medsos = DB::table('sosmed')
        ->join('prive', 'prive.id', '=', 'sosmed.user_id')
        ->whereNotNull('link')->orderby('media')
        ->get();
        //dd($medsos);
        //$data = ([$prive]);
        //dd($prive);
        return view('index', compact("prive","medsos"));
        
    }
    use AuthorizesRequests, DispatchesJobs, ValidatesRequests;
}
