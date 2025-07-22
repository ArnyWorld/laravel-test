@extends('layouts.master')

@section('contenido')
    <nav class="navbar bg-dark border-bottom border-body navbar-expand-lg mb-5" data-bs-theme="dark">
        <div class="container">
            <a class="navbar-brand" href="#">MOD-4</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavDropdown"
                aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNavDropdown">
                <ul class="navbar-nav me-auto mb-2 mb-lg-0">

                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown"
                            aria-expanded="false">
                            Product
                        </a>
                        <ul class="dropdown-menu">
                            <li><a class="dropdown-item" href="#">List</a></li>
                            <li><a class="dropdown-item" href="#">Create</a></li>
                        </ul>
                    </li>
                </ul>
                <a href="" class=" nav-link navbar-text text-light">
                    Logout
                </a>
            </div>
        </div>
    </nav>
    <div class="container">
        <h1>Deleted Product</h1>
        <p>Is it safe to delete? {{ $product->name }} {{ $product->description }} {{ $product->price }}
            {{ $product->stock }}
        </p>
        <form method="POST" action="{{ route('product.delete', $product->id) }}">
            @csrf
            @method('DELETE')
            <button type="submit" class="btn btn-danger">Yes</button>
        </form>
    </div>
@endsection
