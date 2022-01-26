<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Petition;

class PetitionsController extends Controller
{
    public function index(){
        $petitions = Petition::all()->sortDesc();
        return view('main',[
            "petitions" => $petitions
        ]);
    }
}
