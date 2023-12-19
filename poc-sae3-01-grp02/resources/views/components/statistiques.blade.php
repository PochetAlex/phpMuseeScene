<p>Note moyenne : {{ $scene->note->avg('valeur') }}</p>

<p>Note la plus haute: {{ $scene->note->max('valeur') }}</p>
<p>Note la plus basse: {{ $scene->note->min('valeur') }}</p>

<p>Nombre de notes: {{ $scene->note->count('valeur') }}</p>

<p>Nombre d'utilisateurs qui ont ajouter la scène à leur favoris: {{ $scene->favoris->count('id_user') }}</p>
