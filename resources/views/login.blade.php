@extends('layouts.master')

@section('contenido')
    <div class="container">
        <div style="height: 100vh;" class="d-flex flex-column justify-content-center align-items-center">
            <div class="shadow border rounded px-5 py-4">

                <h1 class="text-center">Login</h1>
                <form method="POST" action="{{ route('login.verificar') }}">
                    @csrf
                    <div class="form-group mb-3">
                        <label class="form-label" for="name">Name</label>
                        <input class="form-control" type="text" name="name" id="name">
                    </div>
                    <div class="form-group mb-3">
                        <label class="form-label" for="password">Password</label>
                        <input class="form-control" type="password" name="password" id="password">
                    </div>
                    <button class="btn btn-primary" type="submit">Login</button>
                </form>
            </div>
        </div>
    </div>
@endsection
