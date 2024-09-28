@extends('layouts.app')

@section('content')

    @if(Auth::check())
        <h1>Bienvenido, {{ Auth::user()->name }}</h1>
        
        @if(Auth::user()->hasRole('admin'))
            <p>Esta es la sección de administración.</p>
            @include('admin.index')
            {{-- Aquí puedes agregar contenido específico para el administrador --}}
        @else
            <p>Esta es la sección de cliente.</p>
            {{-- Aquí puedes agregar contenido específico para los clientes --}}
        @endif
    @else
        <h1>Bienvenido, visitante.</h1>
        <p>Por favor, <a href="{{ route('login') }}">inicie sesión</a>.</p>
    @endif
    <a href="{{ route('tours.index') }}">Ver Tours</a>
@endsection
