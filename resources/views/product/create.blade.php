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

        <h1 class="text-center">Create Product</h1>
        <form action="{{ route('product.save') }}" method="POST">
            @csrf
            <div class="form-group mb-3">
                <label class="form-label" for="name">Name</label>
                <input class="form-control" type="text" name="name" id="name">
            </div>
            <div class="form-group mb-3">
                <label class="form-label" for="description">Description</label>
                <input class="form-control" type="text" name="description" id="description">
            </div>
            <div class="form-group mb-3">
                <label class="form-label" for="price">Price</label>
                <input class="form-control" type="number" name="price" id="price">
            </div>
            <div class="form-group mb-3">
                <label class="form-label" for="stock">Stock</label>
                <input class="form-control" type="number" name="stock" id="stock">
            </div>
            <button class="btn btn-primary" type="submit">Create</button>
        </form>
    </div>
@endsection
