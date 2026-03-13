<?php
namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Models\Location;

class LocationController extends Controller {
    public function index() {
        $locais = Location::all();
        return view('locais.index', compact('locais'));
    }

    public function store(Request $request) {
        Location::create($request->all());
        return redirect('/locais')->with('msg', 'Local cadastrado!');
    }
}