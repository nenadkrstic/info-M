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

Route::group(['middleware'=>'admin'],function(){
    Route::get('admin','AdminController@admin_panel');
    Route::get('ubaci_vest','AdminController@ubaci_vest');
    Route::post('snimi_vest','AdminController@snimi_vest');
    Route::get('obrisi_vest/{id}','AdminController@obrisi_vest');
    Route::get('izmeni_vest/{id}','AdminController@izmeni_vest');
    Route::post('izmeni_vest_db/{id}','AdminController@izmeni_vest_db');
    Route::get('poruka','AdminController@poruka');
});



Route::get('/','pageController@pocetna');
Route::get('/pocetna','pageController@pocetna');
Route::post('pretraga','PageController@pretraga');

Route::get('logout','PageController@logout');

//Mladenovac Vesti----------------------------
Route::get('vesti','MladenovacController@vesti');
Route::get('hronika','MladenovacController@hronika');
Route::get('sinfo','MladenovacController@sinfo');
Route::get('vodic','MladenovacController@vodic');
Route::get('vreme','MladenovacController@vreme');


//MLadenovac Vesti kraj-----------------------


//Sport---------------
Route::get('fudbal','SportController@fudbal');
Route::get('kosarka','SportController@kosarka');
Route::get('odbojka','SportController@odbojka');
Route::get('ostalisportovi','SportController@ostaliSportovi');


//Sport kraj-------------
Route::get('celaVest/{id}','PageController@celaVest');

//Info--------------------------------
Route::get('beograd','InfoController@beograd');
Route::get('srbija','InfoController@srbija');
Route::get('svet','InfoController@svet');
Route::get('nauka','InfoController@nauka');
Route::get('biznis','InfoController@biznis');
Route::get('kultura','InfoController@kultura');
Route::get('zanimljivosti','InfoController@zanimljivosti');
Route::get('misljenja','InfoController@misljenja');
//Kraj info---------------------------

//Zabava------------------------------
Route::get('film','ZabavaController@film');
Route::get('muzika','ZabavaController@muzika');
Route::get('desavanja','ZabavaController@desavanja');

//Kraj zabava-------------------------

//FSMladenobac-----------------------
Route::get('manifestacije','FsmController@manifestacije');
Route::get('ostale_manifestacije','FsmController@ostale_manifestacije');
Route::get('programi','FsmController@programi');
Route::get('konkursi','FsmController@konkursi');
//Kraj FSM---------------------------


Route::get('/search_news','PageController@search_news');
/*Route::any('/search_news',function (){
    if(Request::ajax()){
        return 'PageController@search_news';
    }

});*/

Auth::routes();

Route::get('/home', 'HomeController@index');

Route::post('getMess','MesageController@getMess');

