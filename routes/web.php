<?php

use App\Models\Post;
use App\Models\Ticket;
use App\Orders\Item;
use App\Orders\NextDayShipping;
use App\Orders\Order;
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

Route::get('/', function () {
    return view('welcome');
});

Route::get('/posts', function () {
    return view('index', [
        'posts' => Post::all()
    ]);
});

Route::get('/posts/{post}', function (Post $post) {
    return view('show', [
        'post' => $post,
    ]);
})->name('show');

Route::get('/tickets', function () {
    return view('ticketsindex', [
        'tickets' => Ticket::all()
    ]);
});

Route::get('/testorder', function () {
    $order = new Order(collect([
        new Item(20),
        new Item(40),
    ]));

    // $order->applyShipping(new NextDayShipping());

    dump($order->total());
});
