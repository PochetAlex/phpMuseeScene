<?php

namespace App\Http\Controllers;

use App\Models\Commentaire;
use Illuminate\Http\Request;

class CommentaireController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create(Request $request, $scene_id)
    {
        $request->validate([
            'texte' => 'required|string|max:500',
        ]);

        $comment = new Commentaire();
        $comment->titre = "commentaire ajouté";
        $comment->texte = $request->input('texte');
        $comment->scene_id = $scene_id;
        $comment->user_id = auth()->id();

        $comment->save();

        return redirect()->back()->with('success', 'Commentaire ajouté avec succès.');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
