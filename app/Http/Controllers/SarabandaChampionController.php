<?php

namespace App\Http\Controllers;

use App\SarabandaChampion;
use Illuminate\Http\Request;

class SarabandaChampionController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $champion = SarabandaChampion::all();

        return response()->json([
            'data'=>$champion,
            'success'=>true
        ]);
    }
}
