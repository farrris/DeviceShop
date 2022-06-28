@extends('layouts.app')

@section('title', 'welcome')

@section('content')

    <div class="row mt-3">
        <div class="col-3"><x-typebar :types="$types"/></div>
        <div class="col-9">
            <x-brandbar :brands="$brands"/>
            <x-device-list :devices="$devices"/>
        </div>
    </div>
@endsection

