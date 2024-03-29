<?php

namespace App\Http\Controllers;

use App\Models\Scene;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use App\Models\Note;
use PhpOption\None;

class SceneController extends Controller
{
    public function scene(Request $request)
    {
        if ($request->isMethod('get')) {
            $scenes = Scene::all();
            $equipes = Scene::select('nom_grp')->distinct()->pluck('nom_grp');
            return view('accueil', ['scenes' => $scenes, 'equipes' => $equipes]);
        }

        return view('accueil');
    }

    public function equipeList()
    {
        $equipes = Scene::select('nom_grp')->distinct()->pluck('nom_grp');
        return view('accueil', ['equipes' => $equipes]);
    }

    public function filteredScenes(Request $request)
    {
        $equipe = $request->input('equipe');
        $filteredScenes = Scene::where('nom_grp', $equipe)->get();

        $equipes = Scene::select('nom_grp')->distinct()->pluck('nom_grp');

        return view('accueil', ['scenes' => $filteredScenes, 'equipes' => $equipes]);
    }

    public function recentScenes()
    {
        $recentScenes = Scene::orderBy('date_ajout', 'desc')->take(5)->get();
        $equipes = Scene::select('nom_grp')->distinct()->pluck('nom_grp');
        return view('accueil', ['scenes' => $recentScenes, 'equipes' => $equipes]);
    }

    public function sceneRating()
    {
        // Calcul de la moyenne des notes pour chaque scène
        $sceneRating = Note::select('scene_id', DB::raw('AVG(valeur) as moyenne'))
            ->groupBy('scene_id')
            ->orderByDesc('moyenne')
            ->limit(5)
            ->get();

        $sceneIDs = $sceneRating->pluck('scene_id')->toArray();

        // Récupération des détails des scènes
        $scenes = Scene::whereIn('id', $sceneIDs)->get();
        $equipes = Scene::select('nom_grp')->distinct()->pluck('nom_grp');

        return view('accueil', ['scenes' => $scenes, 'equipes' => $equipes]);
    }

    public function sceneDetail(Request $request)
    {
        $sceneId = $request->input('scene_id');

        // Récupérer la scène en utilisant l'ID
        $scene = Scene::find($sceneId);

        return view('sceneDetail', ['scene' => $scene]);
    }

    public function removeFromFavorites(Scene $scene)
    {
        Auth::user()->favoris()->detach($scene);
        return back();
    }

    public function addToFavorites(Scene $scene)
    {
        Auth::user()->favoris()->attach($scene);
        return back();
    }

    public function addSceneNote(Request $request, Scene $scene)
    {
        $user = auth()->user();
        $note = new Note([
            'user_id' => $user->id,
            'scene_id' => $scene->id,
            'valeur' => $request->input('newNote')
        ]);
        $note->save();

        return back();
    }

    public function updateSceneNote(Request $request, Scene $scene)
    {
        $user = auth()->user();
        $note = $scene->note()->where('user_id', $user->id)->first();
        $note->update([
            'valeur' => $request->input('newNote')
        ]);

        return back();
    }
}

