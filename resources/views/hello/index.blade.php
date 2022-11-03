@extends('layouts.helloapp')

@section('title', 'Index')

@section('menubar')
   @parent
    インデックスページ
  @endsection

  @section('content')
     <table>
      <tr><th>id</th><th>Name</th><th>Mail</th><th>Age</th><th>Memo</th></tr>
      @foreach ($items as $item)
          <tr>
            <td>{{$item->id}}</td>
            <td>{{$item->name}}</td>
            <td>{{$item->mail}}</td>
            <td>{{$item->age}}</td>
            <td>{{$item->memo}}</td>
          </tr>
       @endforeach
     </table>
     
  @endsection

  @section('footer')
  copyright 2022 murai.
  @endsection

