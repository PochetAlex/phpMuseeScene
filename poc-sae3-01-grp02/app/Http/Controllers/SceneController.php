<?php

namespace App\Http\Controllers;

use App\Models\Scene;
use Illuminate\Http\Request;
use PhpOption\None;

class SceneController extends Controller
{
    public function scene(Request $request)
    {
        if ($request->isMethod('get')) {
            $scenes = Scene::all();
            $equipes = Scene::select('nom_grp')->distinct()->pluck('nom_grp');
            return view('scene', ['scenes' => $scenes, 'equipes' => $equipes]);
        }

        return view('scene');
    }

    public function equipeList()
    {
        $equipes = Scene::select('nom_grp')->distinct()->pluck('nom_grp');
        return view('scene', ['equipes' => $equipes]);
    }

    public function filteredScenes(Request $request)
    {
        $equipe = $request->input('equipe');

        $filteredScenes = Scene::where('nom_grp', $equipe)->get();

        return view('scene', ['scenes' => $filteredScenes]);
    }

    public function recentScenes()
    {
        $recentScenes = Scene::orderBy('date_ajout', 'desc')->take(5)->get();
        $equipes = Scene::select('nom_grp')->distinct()->pluck('nom_grp');
        return view('scene', ['scenes' => $recentScenes, 'equipes' => $equipes]);
    }

}

