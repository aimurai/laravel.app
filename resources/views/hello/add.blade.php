@extends('layouts.helloapp')

@section('title', 'add')

@section('menubar')
   @parent
   新規作成ページ
@endsection

@section('content')
   <table>
	<form action="/hello/add" method="post">
		{{ csrf_field() }}
      
		<tr><th>name: </th><td><input type="text" name="name"> 
           </td></tr>
		<tr><th>mail: </th><td><input type="text" name="mail"> 
           </td></tr>
		<tr><th>age: </th><td><input type="text" name="age"> 
           </td></tr>
		<tr><th>memo: </th><td><input type="text" name="memo"> 
           </td></tr>
		<tr><th></th><td><input type="submit" value="登録">　　　　　<a href="http://localhost:8000/hello/">一覧</a>
           </td></tr>
	</form>
   </table>
 @endsection
 @section('footer')
 copyright 2022 murai.
 @endsection
