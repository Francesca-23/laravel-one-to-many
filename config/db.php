<?php 

use Illuminate\Support\Str;

return $posts = [
    [
        'titolo'=>'laravel-dc-comics',
        'immagine'=>'',
        'link'=>'https://github.com/Francesca-23/laravel-dc-comics',
        'descrizione'=>'descrizione',
        'tecnologie'=>'Framework: Laravel',
        'slug'=>Str::slug('laravel-dc-comics'),
    ],
    [
        'titolo'=>'vite-boolflix',
        'immagine'=>'',
        'link'=>'https://github.com/Francesca-23/vite-boolflix',
        'descrizione'=>'descrizione',
        'tecnologie'=>'Framework: Vue',
        'slug'=>Str::slug('vite-boolflix'),
    ],
];

?>