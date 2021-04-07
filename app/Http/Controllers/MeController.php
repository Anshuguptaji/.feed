<?php

namespace App\Http\Controllers;

use App\MeModel;
use Illuminate\Http\Request;

class MeController extends Controller
{

    public function index()
    {
        $post = MeModel::all();
        return view('me', compact('post'));
    }

    public function create()
    {
        //
    }

    public function store(Request $request)
    {
        //
    }

    public function show(MeModel $meModel)
    {
        //
    }

    public function edit(MeModel $meModel)
    {
        //
    }

    public function update(Request $request, MeModel $meModel)
    {
        //
    }

    public function destroy(MeModel $meModel)
    {
        //
    }
}
