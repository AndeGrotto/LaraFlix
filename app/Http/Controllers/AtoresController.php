<?php

namespace App\Http\Controllers;

use App\Models\Ator;
use Illuminate\Http\AtorRequest;

class AtoresController extends Controller
{
    public function index() {
        $atores = Ator::all();
        return view('atores.index', ['atores'=>$atores]);
    }

    public function create() {
        return view('atores.create');
    }

    public function store(AtorRequest $request) {
        $novo_ator = $request->all();
        Ator::create($novo_ator);

        return redirect('atores');
    }
}