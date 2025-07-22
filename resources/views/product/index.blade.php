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
        <h1>Product List</h1>

        <table class="table">
            <thead class="table-dark">
                <th>Name</th>
                <th>Description</th>
                <th>Price</th>
                <th>Stock</th>
                <th>Actions</th>
            </thead>
            <tbody>
                @foreach ($product as $d)
                    <tr>
                        <td>
                            {{ $d->name }}
                        </td>
                        <td>
                            {{ $d->description }}
                        </td>
                        <td>
                            {{ $d->price }}
                        </td>
                        <td>
                            {{ $d->stock }}
                        </td>
                        <td>
                            <a href="{{ route('product.edit', $d->id) }}" class="text-primary me-3"><i
                                    class="fa-solid fa-pen"></i></a>
                            <a href="{{ route('product.confirm', $d->id) }}" class="text-danger"><i
                                    class="fa-solid fa-trash"></i></a>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
@endsection
