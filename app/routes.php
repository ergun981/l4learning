<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the Closure to execute when that URI is requested.
|
*/

Route::get('/', function()
{
	//bütün postları getir, başlık ve özetleri listele
});


Route::get('category/{categoryId}', function($categoryId){
	//kategorideki postları aynı indexteki gibi listele
	$category = Category::find($categoryId);
});

Route::get('post/{postId}',function($postId){
	//postu getir, ekrana bas cnm
});



Route::get('admin',function(){
	//admin anasayfa
	return View::make('admin.index');
});

Route::get('admin/categories',function(){
	//bütün kategorileri listele
	$categories = Category::all();
	$data = array('categories' => $categories);
	return View::make('admin.category.index', $data);
});

Route::get('admin/categories/new',function(){
	//yeni kategori oluşturma formu
	return View::make('admin.category.new');
});

Route::post('admin/categories',function(){
	//gelen verilerle kategori oluştur
	$post = Input::all();
	$category = new Category;
	$category->name = $post['name'];
	$category->description = Input::get('description');
	$category->save();
	return Redirect::to('admin/categories');
});

Route::get('admin/categories/{categoryId}',function($categoryId){
	//$categoryId idli kategori için detay sayfası
	$category = Category::find($categoryId);
	$data = array('category' => $category);
	return View::make('admin.category.detail', $data);
});

Route::post('admin/categories/{categoryId}',function($categoryId){
	//$categoryId için gönderilen verileri güncelle
	$category = Category::find($categoryId);
	$category->name = Input::get('name');
	$category->description = Input::get('description');
	$category->save();
	return Redirect::to('admin/categories/'.$category->id);
});




/*
Kategori
-Post
--Yorum

MVC
-Model 2 - veritabanı işlemleri
-View 4 - verileri gönder, görüntüye çevir
-Controller 1 - get / post / update / delete 3 - verileri teslim 5 - return
*/