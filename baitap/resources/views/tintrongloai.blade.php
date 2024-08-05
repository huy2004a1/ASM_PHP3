@extends('layout')
@section('tieudetrang')
     {{$tenLoaiTin}}
@endsection
@section('noidung')
    <H1 style="color: red;"> {{$tenLoaiTin}}</H1>
    @foreach ($listtin as $t )
        <div class="row">
            <h3>
                <a href="{{ url('/tin', [$t->id])  }}">
                    {{$t->tieude}}
                </a>
            </h3>
            <em>{{$t->noidung}}</em>
        </div>
    @endforeach
@endsection
