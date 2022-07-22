@extends('layout.mainweb')

@section('title')
    PIMUS 11 - Registration
@endsection

@section('style')
    <link rel="stylesheet" href="{{ url('/assets/css/register-cabang.css') }}">
@endsection

@section('content')
    {{-- card --}}
    @foreach ($cabang as $item)
    <section id="card">
        <div class="container">
            <div class="card-cabang">
                <div class="image">
                    <img src="\assets/images/icon cabang/{{$item->idlomba}}.png" alt="Gambar {{$item->idlomba}}">
                </div>
                <div class="info">
                    <h1 class="title">{{$item->nama}}</h1>
                    <p class="desc">{{$item->deskripsi}}</p>
                    <a href="{{$item->deskripsi}}" class="buttons" id="download">Download Pedoman</a>
                    <a href="/registration/cabang/register?cabang={{$item->idlomba}}" class="buttons" id="register">Register Now!</a>
                </div>
            </div>
        </div>
    </section>
    @endforeach
@endsection
