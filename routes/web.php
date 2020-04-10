
<?php

use Illuminate\Support\Facades\Route;

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
Route:: post('/read', 'upload@index');
Route::get('/', function () {
return view('home');
});
Route::get('/dell', function () {
    return view('dell');
    });
Route::get('/acer', function () {
    return view('acer');
 });
 Route::get('/apple', function () {
    return view('apple');
    });
    Route::get('/apple', function () {
        return view('apple');
        });
Route::get('/under10k','phones@under10k');
Route::get('/under20k','phones@under20k');
Route::get('/under30k','phones@under30k');
Route::get('/apple','laptops@apple');
Route::get('/dell','laptops@dell');
Route::get('/acer','laptops@acer');
Route::get('/Acer Swift 3', function () {
    return view('Acer Swift 3');
    });
    Route::get('/Acer Swift 5', function () {
        return view('Acer Swift 5');
        });
    Route::get('/Acer Aspire E 15', function () {
        return view('Acer Aspire E 15');
        });
    Route::get('/Acer Spin 5', function () {
        return view('Acer Spin 5');
        });
    Route::get('//Acer Swift 7', function () {
        return view('Acer Swift 7');
        });
Route::get('/Dell Alienware Area 51M', function () {
    return view('Dell Alienware Area 51M');
    });
    Route::get('/Dell Inspiron 13 7000', function () {
        return view('Dell Inspiron 13 7000');
        });
    Route::get('/Dell XPS 15', function () {
        return view('Dell XPS 15');
        });
    Route::get('/Dell Latitude 5300', function () {
        return view('/Dell Latitude 5300');
        });
    Route::get('/Dell Latitude 5500', function () {
        return view('Dell Latitude 5500');
        });
Route::get('/macbook pro 15inch', function () {
    return view('macbook pro 15inch');
    });
    Route::get('/Apple macbook air 13inch', function () {
        return view('Apple macbook air 13inch');
        });
    Route::get('/apple macbook pro 13 inch', function () {
        return view('apple macbook pro 13 inch');
        });
    Route::get('/pple macbook 12inch', function () {
        return view('pple macbook 12inch');
        });
    Route::get('/apple macbook air z', function () {
        return view('apple macbook air z');
        });
Route::get('/vivo u10', function () {
    return view('vivo u10');
    });
    Route::get('/Infinix S5 Pro', function () {
        return view('Infinix S5 Pro');
        });
    Route::get('/lenovo k10', function () {
        return view('lenovo k10');
        });
    Route::get('/realme c3', function () {
        return view('realme c3');
        });
    Route::get('/honor 20i', function () {
        return view('honor 20i');
        });
    Route::get('/redmi note 7s', function () {
        return view('redmi note 7s');
        });
    Route::get('/Samsung Galaxy M10', function () {
        return view('Samsung Galaxy M10');
        });
    Route::get('/Realme 5', function () {
        return view('Realme 5');
         });

         Route::get('/pooc x2', function () {
            return view('pooc x2');
            });
            Route::get('/realme x2', function () {
                return view('realme x2');
                });
            Route::get('/realme 6 pro', function () {
                return view('realme 6 pro');
                });
            Route::get('/note 9 pro', function () {
                return view('/note 9 pro');
                });
            Route::get('/galaxy j7', function () {
                return view('galaxy j7');
                });
            Route::get('/Zenfone', function () {
                return view('Zenfone');
                });
            Route::get('/Vivo Z1 Pro', function () {
                return view('Vivo Z1 Pro');
                });
            Route::get('/vivo s1', function () {
                return view('vivo s1');
                 });
                 Route::get('/opporeno3', function () {
                    return view('opporeno3');
                    });
                    Route::get('/realme x2 pro', function () {
                        return view('realme x2 pro');
                        });
                    Route::get('/Asus 6Z', function () {
                        return view('Asus 6Z');
                        });
                    Route::get('/K20 pro', function () {
                        return view('K20 pro');
                        });
                    Route::get('/lenovo Z6 pro', function () {
                        return view('lenovo Z6 pro');
                        });
    Route::get('/admin/store','admin@store');

     Route::get('/admin', function () {
        return view('admin');
         });
Route::get('/signup', function () {
    return view('signup');
        }); 
        Route::get('/login', function () {
            return view('login');
             }); 
             Route::get('/aboutus', function () {
                return view('aboutus');
                 });  
                 Route::get('/uploadbug', function () {
                    return view('uploadbug');
                     }); 
Route::get('/project/create','mycontroller@create');
Route::get('/storedata','datastorages@store');
Route::resource('/projects','myprojects');
Route::get('/login/access','shacontroller@access');
Route::get('/layout', function () {
    return view('layout');
});
Route::get('/home', 'pageControler@home');
Route::get('/contact', 'pageControler@contact');
Route::get('/about', 'pageControler@aboutUs');
Route::get('/emp','empCont@getEmployee');
Route::get('/show','pageControler@show');
Route::get('/show1/{username1}/{id1 }','pageControler@para');
Route::get('/show2/{username}/{id }','pageControler@para1');
Route::get('/employee/{value}','pageControler@getEmployee');
Route::get('/post','pageControler@getPosts');
Route:: get('/admin/regusersdata','admin@index');