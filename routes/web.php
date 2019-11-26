<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/
Route::get('/donspage','DonsController@der');
Route::post('/dons','DonsController@store');


Route::get('/commentairemm', function () {
    return view('commentaire');
});
Route::get('/events', function () {
    return view('blog-1');
});




Route::get('/test', function () {
    return view('test');
});


Route::get('/aboutus', function () {
    return view('about');
});

Route::get('/contact', function () {
    return view('contact');
});

Auth::routes();
Route::get('/contact','ContactController@afficher' );
Route::post('/contact','ContactController@postForm' );

Route::get('/home','HomeController@index')->name('home');
Route::get('/','HomeController@index')->name('home');
Route::get('/blog', 'BlogadController@fiche');
Route::get('/lirearticle/{id}', 'BlogadController@lire')->name('lirearticle');

Route::get('/donsurprojet/{id}', 'ProjetdonsController@afficher');
Route::post('/donsprojet/{id}', 'ProjetdonsController@donation')->name('donsprojet');
Route::post('/donsprojetproposition/{id}', 'ProjetdonsController@donationproposition')->name('donsprojetproposition');

Route::get('/lireleprojet/{id}', 'ProjetdonsController@lire')->name('lireleprojet');
Route::get('/projets','ProjetsController@lesprojets' );
Route::post('/newletter','NewletterController@savenewletter' )->name('newletter');

Route::post('/commentaire/{articles}', 'CommentController@comment')->name('commentaire');
Route::delete('/supprimer/{id}', 'CommentController@delete')->name('supprimer');
Route::post('/reponse/{comments}', 'ReplyController@reply')->name('reponse');

Route::post('/commentaireprojet/{projets}', 'CommentprojetController@comment')->name('commentaireprojet');
Route::delete('/supprimer/{id}', 'CommentprojetprojetController@delete')->name('supprimer');
Route::post('/reponseprojet/{comments}', 'ReplyprojetController@reply')->name('reponseprojet');

Route::get('/myp', 'MyprojetController@afficher');
Route::post('/myp', 'MyprojetController@enregistrerprojet')->name('projetuser');

Route::group(['middleware'=>['auth','admin']],function(){

    Route::get('/admin', 'HomeController@admin');
    Route::get('/fin', 'DonsController@fin');
    Route::get('/propositionsdons', 'DonsController@propositionsdons');
    Route::get('/blogadmin', 'BlogadController@show');
    
    Route::post('/blogadmin', 'BlogadController@store')->name('creer');
    Route::get('/articles', 'BlogadController@article');
    Route::get('/search', 'BlogadController@search');
    Route::get('/lire/{id}', 'BlogadController@read')->name('lire');
    Route::get('/modifier/{id}', 'BlogadController@edit')->name('modifier');
    Route::delete('/supprimer/{id}', 'BlogadController@delete')->name('supprimer');
    Route::post('/update', 'BlogadController@update');


    Route::get('/projet', 'ProjetsController@show');
    Route::post('/projet', 'ProjetsController@enregistrerprojet')->name('projetadmin');
  
     Route::get('/searchprojet', 'ProjetsController@search');
     Route::get('/gestionprojets', 'ProjetsController@gestionprojets');
    Route::get('/lireprojet/{id}', 'ProjetsController@read')->name('lireprojet');
    Route::get('/modifierprojet/{id}', 'ProjetsController@edit')->name('modifierprojet');
    Route::delete('/supprimerprojet/{id}', 'ProjetsController@delete')->name('supprimerprojet');
    Route::put('/updateprojet', 'ProjetsController@update');
    Route::get('/donationad/{id}', 'ProjetsController@donation')->name('donationad');

    Route::get('/searchprojetB', 'MyprojetController@search');
    Route::get('/gestionprojetsB', 'MyprojetController@gestionprojets');
    Route::get('/lireprojetb/{id}', 'MyprojetController@read')->name('lireprojetb');
    Route::get('/modifierprojetb/{id}', 'MyprojetController@edit')->name('modifierprojetb');
    Route::delete('/supprimerprojetb/{id}', 'MyprojetController@delete')->name('supprimerprojetb');
});


