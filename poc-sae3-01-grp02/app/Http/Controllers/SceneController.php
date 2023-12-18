<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use PhpOption\None;

class SceneController extends Controller
{
    public function scene(Request $request)
    {
        if ($request->isMethod('get')) {
            //$scenes = Scene::all();
            $scenes = None::create();
            //$equipes = Scene::select('nom_groupe')->distinct()->pluck('nom_groupe');
            $equipes = None::create();
            return view('scene', ['scenes' => $scenes, 'equipes' => $equipes]);
        }

        return view('scene');
    }

    public function equipeList()
    {
        //$equipes = Scene::select('nom_groupe')->distinct()->pluck('nom_groupe');
        $equipes = None::create();
        return view('scene', ['equipes' => $equipes]);
    }

    public function filteredScenes(Request $request)
    {
        $equipe = $request->input('equipe');

        $filteredScenes = None::create();
        //$filteredScenes = Scene::where('nom_groupe', $equipe)->get();

        return view('scene', ['scenes' => $filteredScenes]);
    }

}

