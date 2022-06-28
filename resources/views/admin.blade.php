@extends('layouts.app')

@section('title', 'admin')

@section('content')

<div class="container d-flex flex-column">
    <button class="btn btn-outline-dark mt-4 p-2" data-bs-toggle="modal" data-bs-target="#typeModal">Добавить тип</button>
    <x-type-modal/>
    <button class="btn btn-outline-dark mt-4 p-2" data-bs-toggle="modal" data-bs-target="#brandModal">Добавить бренд</button>
    <x-brand-modal/>
    <button class="btn btn-outline-dark mt-4 p-2" data-bs-toggle="modal" data-bs-target="#deviceModal">Добавить устройство</button>
    <x-device-modal :types="$types" :brands="$brands"/>
</div>

@endsection
