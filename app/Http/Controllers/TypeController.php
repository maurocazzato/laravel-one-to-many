<?php

namespace App\Http\Controllers;

use App\Models\Type;

use Illuminate\Http\Request;

class TypeController extends Controller
{
    public function index() {
        $types = Type::with('projects')->get();
        return view('types.index', compact('types'));
    }
}
