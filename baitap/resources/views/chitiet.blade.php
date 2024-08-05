@extends('layout')
@section('tieudetrang')
    Chi tiết tin {{$id}}
@endsection
@section('noidung')
   <h2 style="color: red;">{{$tin->tieude}}</h2>
   <h3>{{$tin->tomtat}}</h3>
   <div id="noiDung">
        <em>{!! $tin->noidung !!}</em>
   </div>
@endsection
