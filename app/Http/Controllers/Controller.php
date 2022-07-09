<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Routing\Controller as BaseController;

use Carbon\Carbon;

class Controller extends BaseController
{
    public function index()
    {
        $today = Carbon::tomorrow()->format('Y-m-d');

        $prive = DB::table('prive')->first();
        $medsos = DB::table('sosmed')
        ->join('prive', 'prive.id', '=', 'sosmed.id_user')
        ->whereNotNull('link')->orderby('media')
        ->get();
        $exp = DB::table('experience')
        ->join('prive', 'prive.id', '=', 'experience.id_user')
        ->get();
        $edu = DB::table('education')
        ->join('prive', 'prive.id', '=', 'education.id_user')
        ->get();
        $skill = DB::table('skill')
        ->join('prive', 'prive.id', '=', 'skill.id_user')
        ->get();
        $work = DB::table('workflow')
        ->join('prive', 'prive.id', '=', 'workflow.id_user')
        ->get();
        $interest = DB::table('interest')
        ->join('prive', 'prive.id', '=', 'interest.id_user')
        ->get();
        $awards = DB::table('awards')
        ->join('prive', 'prive.id', '=', 'awards.id_user')
        ->orderby('weight')
        ->get();
        $hasil = DB::table('hasil')
        ->join('prive', 'prive.id', '=', 'hasil.id_user')
        ->get();
        $part = DB::table('part')->get();
        //dd($medsos);
        //$data = ([$prive]);
        //dd($prive);
        return view('index', compact(
            "prive","medsos","today","exp","edu",
            "skill","work","interest","awards","hasil",
            "part"));
        
    }
    use AuthorizesRequests, DispatchesJobs, ValidatesRequests;
}
