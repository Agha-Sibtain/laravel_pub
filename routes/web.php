<?php
 
use App\Models\Task;
use app\Http\Controllers\TaskController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Validator;

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

/**
 * Display All Tasks
 */
// Route::get('/', function () {
//     $tasks = Task::orderBy('created_at', 'asc')->get();
 
//     return view('tasks', [
//         'tasks' => $tasks
//     ]);
// });

// /**
//  * Add A New Task
//  */
// Route::post('/task', function (Request $request) {
//     //
//     $validator = Validator::make($request->all(), [
//         'name' => 'required|max:255',
//     ]);
 
//     if ($validator->fails()) {
//         return redirect('/')
//             ->withInput()
//             ->withErrors($validator);
//     }
 
//     $task = new Task;
//     $task->name = $request->name;
//     $task->save();
 
//     return redirect('/');
// });
 
// /**
//  * Delete An Existing Task
//  */
// Route::delete('/task/{id}', function ($id) {
//     Task::findOrFail($id)->delete();
 
//     return redirect('/');
// });

Route::get('/', function () {
    return view('welcome');
 });

Route::get('/task', 'App\Http\Controllers\TaskController@index');

Route::get('/create/task','App\Http\Controllers\TaskController@create');

//Route::get('/task/{data}', [TaskController::class, 'store'])->name('task');

Route::post('/task/{id}','App\Http\Controllers\TaskController@store')->name('task');

Route::delete('/task/{id}','App\Http\Controllers\TaskController@destroy');

// Route::get('/task', 'TaskController@index');
// Route::get('/edit/task/{id}','TaskController@edit');
// Route::post('/edit/task/{id}','TaskController@update');
// Route::delete('/delete/task/{id}','TaskController@destroy');
