@extends('layouts.app')

@section('basket', 'welcome')

@section('content')

<div class="container">
    <x-basket-device-list :basketDevices="$basket_devices" />
    <a href="/basket/buy"><button type="submit" class="btn btn-outline-dark mt-4 mb-4 w-100 mx-auto p-3">Купить</button></a>
</div>

@endsection
