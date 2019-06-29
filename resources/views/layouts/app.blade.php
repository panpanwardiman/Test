<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="Simple Crud dengan Laravel">
    <meta name="author" content="Panpan Wardiman">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>LatihanCrud1</title>

    <link rel="stylesheet" href="{{ asset('css/app.css') }}">    
    
    @stack('styles')

    <style>
        body {
            background-color: #fff;
        }
    </style>
</head>
<body>
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
        <div class="container">
            <a class="navbar-brand" href="#">SCRUD</a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav mr-auto">
                    <li class="nav-item {{ (request()->is('/')) ? 'active' : '' }}">
                        <a class="nav-link" href="{{ route('home') }}">Home <span class="sr-only">(current)</span></a>
                    </li>
                    <li class="nav-item {{ (request()->is('book*')) ? 'active' : '' }}">
                        <a class="nav-link" href="{{ route('book.index') }}">Book</a>
                    </li>

                    <li class="nav-item {{ (request()->is('category*')) ? 'active' : '' }}">
                        <a class="nav-link" href="{{ route('category.index') }}">Category</a>
                    </li>
                    <li class="nav-item {{ (request()->is('user*')) ? 'active' : '' }}">
                        <a class="nav-link" href="{{ route('user.index') }}">Pinjam buku</a>
                    </li>                   
                </ul>
            </div>
        </div>
    </nav>

    <div class="container pt-3 pb-3">
        @yield('content')
    </div>

    @include('layouts.partials._modal')
    
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="https://cdn.ckeditor.com/4.11.2/standard/ckeditor.js"></script>
    <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
    <script src="{{ asset('js/app.js') }}"></script>
    <script src="{{ asset('js/main.js') }}"></script>

    @stack('scripts')
</body>
</html>