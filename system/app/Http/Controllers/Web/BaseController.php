<?php

namespace App\Http\Controllers\Web;
use App\Models\Opd;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class BaseController extends Controller
{
    public function index()
    {
        $data['list_opd'] = Opd::all();
        return view('web.index', $data);
    }

    public function entah()
    {
        // $data['list_opd'] = Opd::all();
        return view('web.aset');
    }

    public function bahaya()
    {
        $data['list_opd'] = Opd::all();
        return view('web.contact', $data);
    }

    public function show(string $id)
    {
        //
    }

    public function edit(string $id)
    {
        //
    }

    public function update(Request $request, string $id)
    {
        //
    }

    public function destroy(string $id)
    {
        //
    }
}
