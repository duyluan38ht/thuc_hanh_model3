<?php

namespace App\Http\Controllers;

use App\Http\Requests\add_AgenryRequest;
use App\Models\Agency;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;

class AgencyController extends Controller
{

    public function index()
    {
        $agencies = Agency::all();
        return view('index', compact('agencies'));
    }


    public function create()
    {
        return view('add-agency');
    }


    public function store(add_AgenryRequest $request)
    {
        $agencies = new Agency();
        $agencies->fill($request->all());
        $agencies->save();
//        Session::put('message','Thêm sản phẩm thành công');
        return redirect()->route('agency.index');
    }


    public function show(Agency $agency)
    {
        //
    }


    public function edit($id)
    {
        $agency=Agency::findOrFail($id);
        return view('edit',compact('agency'));
    }

    public function update(Request $request, $id)
    {

        $agency=Agency::findOrFail($id);
        $agency->fill($request->all());
        $agency->save();
        return redirect()->route('agency.index');
    }


    public function destroy($id)
    {
        $agency=Agency::findOrFail($id);
        $agency->delete();
        return redirect()->route('agency.index');
    }
}
