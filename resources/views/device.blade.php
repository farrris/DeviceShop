@extends('layouts.app')

@section('title', 'welcome')

@section('content')
<div class="container mt-3">
    <div class="row d-flex">
        <div class="col-4 ">
            <img src='/images/devices/{{$device->img}}' width="350px" height="350px">
        </div>
        <div class="col-3">
            <div class="d-flex flex-column align-items-center">
                <h2 class="h2">{{$device->name}}</h2>
                <div class='rating'>
                    {{$device->rating}}
                </div>
            </div>
        </div>
        @if(Auth::check())
            @if(auth()->user()->role === "USER")
            <div class="col-4" style="margin-left:8%;">
                <div class="card d-flex flex-column align-items-center justify-content-around" style="width:290px; height:290px; font-size:32px; border:5px solid lightgray;">
                    <h3 class='h3'>От: {{$device->price}} руб.</h3>
                    <a href ="/basket/add/{{$device->id}}"><button class='btn btn-outline-dark'>Добавить в корзину</button></a>
                </div>
            </div>
            @endif
        @endif
    </div>

    <div class="row d-flex flex-column m-3">
        <h1 class="h1">Характеристики</h1>
        @foreach($device_infos as $key => $device_info)

            @if($key % 2 === 0)
                <div class="row" style='background:lightgray; padding:10px'>
                    {{$device_info->title}}: {{$device_info->description}}
                </div>
            @else
                <div class="row" style='background:transparent; padding:10px''>
                    {{$device_info->title}}: {{$device_info->description}}
                </div>
            @endif
        @endforeach
    </div>
</div>
@endsection
