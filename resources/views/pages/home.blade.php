@extends('layouts.app')

@section('title', 'Home')

@section('content')
    <div class="home-container">
        <h1>Selamat Datang</h1>
        <p>Ini halaman home.</p>
    </div>

    <style>
        .home-container {
            max-width: 1000px;
            margin: auto;
            text-align: center;
        }

        h1 {
            font-size: 2rem;
        }

        @media (max-width: 768px) {
            h1 {
                font-size: 1.5rem;
            }
        }

        body {
            background-color: #e3f2fd;
        }
    </style>
@endsection