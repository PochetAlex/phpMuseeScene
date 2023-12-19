<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\Storage;

class ProfilController extends Controller
{
    public function upload(Request $request) {
        $personne = $request->user();
        if ($request->hasFile('document') && $request->file('document')->isValid()) {
            $file = $request->file('document');
        } else {
            $msg = "Aucun fichier téléchargé";
            return redirect()->route('personnes.show', [$personne->id])
                ->with('type', 'primary')
                ->with('msg', 'Smartphone non modifié ('. $msg . ')');
        }
        $nom = 'image';
        $now = time();
        $nom = sprintf("%s_%d.%s", $nom, $now, $file->extension());

        $file->storeAs('images', $nom);
        if (isset($tache->avatar_lien)) {
            Log::info("Image supprimée : ". $tache->avatar_lien);
            Storage::delete($tache->avatar_lien);
        }
        $personne->url_media = 'images/'.$nom;
        $personne->save();
        //$file->store('docs');
        return redirect()->route('personnes.show', [$personne->id])
            ->with('type', 'primary')
            ->with('msg', 'Image modifiée avec succès');
    }
}
