<?php

namespace App\Http\Controllers;

use App\Promotion;
use App\User;
use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;

class UsersController extends Controller
{
    /**
     * Affiche tous les élèves
     *
     * @return Response
     */
    public function index()
    {
        $users = User::all();
        return view('users/all', compact('users'));
    }

    /**
     * Affiche le formulaire pour changer la promo d'un élève
     *
     * @param  int  $id
     * @return Response
     */
    public function show($id)
    {
        $user = User::findOrFail($id);
        return view('users/show')->with('user', $user);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return Response
     */
    public function edit($id)
    {
        $user = User::findOrFail($id);
        $promotions = Promotion::lists('year', 'id'); // used to create a select in the users/_form view
        return view('users/edit', compact('user', 'promotions'));
    }

    /**
     * Met à jour la promotion d'un élève.
     *
     * @param  Request $request
     * @param $id
     * @return Response
     * @internal param int $id
     */
    public function update(Request $request, $id)
    {
        $user = User::findOrFail($id);
        $user->promotion_id = $request->input('promotion_id');
        $user->save();

        return redirect('/');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return Response
     */
    public function destroy($id)
    {
        //
    }
}
