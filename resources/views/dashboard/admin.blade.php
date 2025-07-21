@extends('layouts.app')

@section('title', 'Dashboard Admin')

@section('content')
    <h1>Selamat datang Admin</h1>
    <form method="POST" action="{{ route('logout') }}">
        @csrf
        <button class="bg-red-500 text-white px-4 py-2 rounded">Logout</button>
    </form>
@endsection
