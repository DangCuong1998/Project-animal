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
/*
    route login
*/

Route::get('design_byKN_FIZET/login','LoginsigupController@loginmain')
->name('loginmain');

Route::post('design_byKN_FIZET/login','LoginsigupController@postLoginmain')
->name('loginmain');
// route đăng kí thành viên
 
Route::get('design_byKN_FIZET/signup','LoginsigupController@signup')
->name('signup');

Route::post('design_byKN_FIZET/signup','LoginsigupController@postSignup')
->name('signup');
// router đăng xuất
// 
Route::get('logout','LoginsigupController@logoutmain')
->name('logoutmain');




// login user
Route::get('login','LoginController@loginmain')
->name('login');

Route::post('login','LoginController@postLoginmain')
->name('login');
// route đăng kí thành viên
 
Route::get('signup','LoginController@signup')
->name('sign');

Route::post('signup','LoginController@postSignup')
->name('sign');
// router đăng xuất
// 
Route::get('logout','LoginController@logoutmain')
->name('logout');

/*
	Danh cho backend
*/
	Route::group(['prefix'=>'design_byKN_FIZET/backend','namespace'=>'Backend','middleware'=>'auth'],function(){
		require_once 'backend/home.php';
		require_once 'backend/category.php';
		require_once 'backend/product.php';
		require_once 'backend/banner.php';
		require_once 'backend/user.php';
		require_once 'backend/catparent.php';
		require_once 'backend/color.php';
		require_once 'backend/contact.php';
		require_once 'backend/orders.php';
		require_once 'backend/comments.php';
		require_once 'backend/product_images.php';
		require_once 'backend/news.php';



	});

/*
	Danh cho frontend
*/
Route::group(['prefix'=>'/','namespace'=>'Frontend'], function(){
	// require_once 'auth.php';
	
	require_once 'frontend/home.php';
    require_once 'frontend/category.php';
    require_once 'frontend/categoryparent.php';
    require_once 'frontend/support.php';
    require_once 'frontend/volunteer.php';
    require_once 'frontend/news.php';
    require_once 'frontend/adopt.php';
    require_once 'frontend/product.php';
    require_once 'frontend/cart.php';
});
/* 
    Sét đăng nhập trc khi thực hiện
*/
    Route::group(['prefix'=>'/','namespace'=>'Frontend','middleware'=>'auth'],function(){
    	require_once 'frontend/order.php';
        require_once 'frontend/contact.php';
    	return view('frontend.login');

    });
    Route::group(['middleware'=>'auth'],function(){
    	// require_once 'user/homeuser.php';
        // require_once 'user/comment.php';
        

    });

