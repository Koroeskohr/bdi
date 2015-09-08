<?php

namespace App\Http\Controllers;

use App\Promotion;
use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;

class PromotionsController extends Controller
{
    public function index()
    {
        $promotions = Promotion::all();

        return view('promotions/all', compact('promotions'));
    }

    public function create()
    {
        return view('promotions/new');
    }

    public function store(Request $request)
    {
        $promotion = Promotion::create($request->all());
        return redirect()->action('PromotionsController@show', [$promotion->id]);
    }

    public function show($id)
    {
        $promotion = Promotion::findOrFail($id);
        return view('promotions/show', compact('promotion'));
    }

    public function edit($id)
    {
        $promotion = Promotion::findOrFail($id);
        return view('promotions/edit')->with('promotion', $promotion);
    }

    public function update(Request $request, $id)
    {
        $promotion = Promotion::findOrFail($id);

        $input = $request->all();
        $promotion->update($input);

        return redirect()->back();
    }

    public function destroy()
    {

    }
}
