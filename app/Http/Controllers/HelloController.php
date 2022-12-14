<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Illuminate\Support\Facades\DB;



class HelloController extends Controller
{
    
public function index(Request $request) {

 $items = DB::select('select * from people');
 return view('hello.index', ['items' => $items]);
  }

  public function post(Request $request){
    $items = DB::select('select * from people');
    return view('hello.index', ['items' => $tems]);
  }

  public function add(Request $request){
    return view('hello.add');
  }

  public function create(Request $request){
    $param = [
      
      'name' => $request->name,
      'mail' => $request->mail,
      'age' => $request->age,
      'memo' => $request->memo,
    ];
    DB::table('people')->insert($param);
        return redirect('/hello');
  }

  public function edit(Request $request){

    $item = DB::table('people')
         ->where('id', $request->id)->first();
         return view('hello.edit', ['form' => $item]);
  }

  public function update(Request $request){
    $param = [
      'name' => $request->name,
      'mail' => $request->mail,
      'age' => $request->age,
      'memo' => $request->memo,
    ];
    DB::table('people')
          ->where('id', $request->id)
          ->update($param);
         return redirect('/hello');
  }

  public function del(Request $request){
    $item = DB::table('people')
        ->where('id', $request->id)->first();
        return view('hello.del', ['form' => $item]);
  }

  public function remove(Request $request){
    DB::table('people')
         ->where('id', $request->id)->delete();
         return redirect('/hello');
  }

  public function show(Request $request){
    $name = $request->name;
    $items = DB::table('people')
        ->where('name', 'like', '%' . $name . '%')
        ->orWhere('mail', 'like', '%' . $name . '%')
        ->get();
    return view('hello.show', ['items' => $items]);
  }
}

