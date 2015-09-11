<?php

namespace App\Http\Controllers;

use App\Promotion;
use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;

class PromotionsController extends Controller
{

    //TODO : add validations


    /**
     * Retourne toutes les promotions
     * @return \Illuminate\View\View
     */
    public function index()
    {
        $promotions = Promotion::all();

        return view('promotions/all', compact('promotions'));
    }

    /**
     * Retourne le formulaire de création de promotion
     * @return \Illuminate\View\View
     */
    public function create()
    {
        return view('promotions/new');
    }

    /**
     * Enregistre la promotion
     * @param Request $request
     * @return \Illuminate\Http\RedirectResponse
     */
    public function store(Request $request)
    {
        $promotion = Promotion::create($request->all());
        return redirect()->action('PromotionsController@show', [$promotion->id]);
    }

    /**
     * Retourne une promotion par son année
     * @param $year
     * @return \Illuminate\View\View
     */
    public function show($year)
    {
        $promotion = Promotion::where('year', $year)->firstOrFail();
        return view('promotions/show', compact('promotion'));
    }

    /**
     * Retourne le formulaire d'édition d'une promotion
     *
     * @param $year
     * @return $this
     */
    public function edit($year)
    {
        $promotion = Promotion::where('year', $year)->firstOrFail();
        return view('promotions/edit')->with('promotion', $promotion);
    }

    /**
     * Met à jour les informations d'une promotion
     *
     * @param Request $request
     * @param $id
     * @return \Illuminate\Http\RedirectResponse
     */
    public function update(Request $request, $id)
    {
        $promotion = Promotion::findOrFail($id);
        $promotion->update($request->all());

        return redirect()->back();
    }

    //TODO : implement destroy
    public function destroy()
    {

    }
}

