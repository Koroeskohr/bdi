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
     * Retourne les promotions ainsi que le nombre d'élèves
     * @param $id
     * @return \Illuminate\View\View
     */
    public function show($id)
    {
        $promotion = Promotion::findOrFail($id);
        return view('promotions/show', compact('promotion'));
    }

    /**
     * Retourne le formulaire d'édition d'une promotion
     *
     * @param $id
     * @return $this
     */
    public function edit($id)
    {
        $promotion = Promotion::findOrFail($id);
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

