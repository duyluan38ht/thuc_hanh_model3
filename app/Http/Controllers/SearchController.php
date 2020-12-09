<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class SearchController extends Controller
{


    public function search(Request $request)
    {
        $agencies = DB::table('agencies')->where('name_agencies','LIKE','%'.$request->search.'%')->get();
        return view('search', compact('agencies'));
    }
}
