<?php

use Illuminate\Support\Facades\Route;
//adicionando o controller
use App\Http\Controllers\Admin\TesteController;
use App\Http\Controllers\ProductController;
use function PHPUnit\Framework\isNull;

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
//Rotas criadas para o CRUD
Route::delete('products/{id}', [ProductController::class, 'destroy'])->name('products.destroy');

Route::put('products/update/{id}', [ProductController::class, 'update'])->name('products.update');

Route::get('/products/edit/{id}', [ProductController::class, 'edit'])->name('products.edit');
Route::get('/products/create', [ProductController::class, 'create'])->name('products.create');
Route::get('/products/{id}', [ProductController::class, 'show'])->name('products.show');
Route::get('/products', [ProductController::class, 'index'])->name('products.index');

Route::post('/products', [ProductController::class, 'store'])->name('products.store');


*/

Route::get('/', function(){
    return 'Raiz';
});



//Criandos rotas atraves de um resource
Route::resource('products', ProductController::class);

/*



Route::get('/login', function(){
    return 'Login';
})->name('login');



Route::get('/admin/dashboard', function(){
    return "Home Admin";
})->middleware('auth');

Route::get('/admin/financeiro', function(){
    return "Financeiro Admin";
})->middleware('auth');

Route::get('/admin/produtos', function(){
    return "Produtos Admin";
})->middleware('auth');
 
//criando um grupo de rotas, para facilitar o uso de middleware
//primeiro as rotas que usarao o mesmo middleware
Route::middleware([''])->group(function(){

    //aqui um grupo com o mesmo prefixo
    Route::prefix('admin')->group(function(){
        Route::get('/dashboard', function(){
            return "Home Admin";
        });
    
        Route::get('/financeiro', function(){
            return "Financeiro Admin";
        });
        
        Route::get('/produtos', function(){
            return "Produtos Admin";
        });
            //vem do controller criado com o comando
            //php artisan make:controller Admin\TesteController
            
    });

  */
  
  /*



    //aplicando middlewware, prefix e namespace para um grupo

    Route::group([
        'middleware' => [],
        'prefix' => 'admin',
        'namespace' => 'Admin'
    ], function(){
        Route::get('/recursoshumanos', [TesteController::class,'teste'])->name('rh');
        Route::get('/controladoria', [TesteController::class,'teste'])->name('controladoria');
        Route::get('/produtos', 'ProductController@index')->name('produtos');
        
    }
);

*/


/*
    //rota com middleware, prefixo, usando o namespace e controller
Route::middleware([])->group(function(){
    Route::prefix('admin')->group(function(){
        Route::namespace('Admin')->group(function(){
            Route::get('/dash', [TesteController::class,'teste'])->name('admin.dashboard');
        });
        //usando o redirecionamento com o nome da rota
        Route::get('/', function(){
            return redirect()->route('admin.dashboard');
        });
    });
});
    

Route::get('/teste1', [TesteController::class, 'teste']);

//rotas com any aceita todos os verbos http
Route::match(['post', 'get'], '/match', function(){
    return ('Match');
});

*/


//redirecionando as rotas
//primeira forma de fazer um redirect
/* Route::get('redirect1', function(){
    return redirect('/redirect2');
});*/


/*
//segunda forma de fazer um redirect
Route::redirect('redirect1','redirect2');
Route::get('/redirect2', function () {
    return 'Redirect 02';
});
//passagem de parametros na rota

Route::get('/produtos/{produto?}', function($produto = ''){
    //return ("Cliente: " . $nome);
    return ("Produto: {$produto}");
});

Route::get('/cliente/{nome}', function($param){
    //return ("Cliente: " . $nome);
    return ("Cliente: {$param}");
});

Route::get('/cliente/{nome}/cadastro', function($nome){
    //return ("Cliente: " . $nome);
    return ("Cadastro do Cliente: {$nome}");
});

//Retorna uma página web que esta dentro da pasta view
Route::get('/', function () {
    return view('welcome');
});

Route::get('/teste', function(){
    return "Olá, Página de teste";
});

Route::get( '/contato', function(){
    return view('contato');
});

//Route::get('/products', 'ProductController@index')->name('products.index');

Route::get('/products', function(){
    return 'products';
});
*/