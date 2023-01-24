<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\trains;


class IndexController extends Controller
{
    function index()
    {
        // assegno alla variabile il contenuto della request al database
         $trainsoftoday = trains::where("orario_di_partenza","2023-01-24")->get();

        return view('index', [
            // la chiave movies contine il contenuto della request
            // utilizzo movies per fare il foreach
            "trains" => $trainsoftoday
        ]);
    }
}
