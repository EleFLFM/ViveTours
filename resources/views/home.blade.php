@extends('layouts.app')

@section('content')
<div class="container">
    @if(Auth::check())
        <h1>Bienvenido, {{ Auth::user()->name }}.</h1>
        @if(Auth::user()->hasRole('admin'))
        
        @include('admin.index') {{-- Aquí incluye el contenido específico para el administrador --}}
      
        
        @else
            
            <p>Esta es la sección de cliente.</p>
            <a href="{{ route('tours.index') }}" class="btn btn-primary">Ver Tours</a>
            
            
            {{-- Aquí puedes agregar contenido específico para los clientes --}}
        @endif
    @else
        <h1>Bienvenido, visitante.</h1>
        <p>Por favor, <a href="{{ route('login') }}">inicie sesión</a> o <a href="{{ route('register') }}">regístrese</a>.</p>
    @endif
    <h1>Informacion para todos</h1>
</div>
 @endsection