@extends('layouts.app')

@section('content')
<div class="container">
    <h1 class="mb-4">Listado de Tours</h1>

    @if(session('success'))
        <div class="alert alert-success">
            {{ session('success') }}
        </div>
    @endif

    @if(Auth::user() && Auth::user()->hasRole('admin'))
        <a href="{{ route('tours.create') }}" class="btn btn-primary mb-3">Crear Nuevo Tour</a>
    @endif

    <div class="row">
        @forelse($tours as $tour)
            <div class="col-md-4 mb-4">
                <div class="card">
                    @if($tour->image)
                        <img src="{{ asset('storage/' . $tour->image) }}" class="card-img-top" alt="{{ $tour->name }}">
                    @else
                        <div class="card-img-top bg-secondary text-white d-flex justify-content-center align-items-center" style="height: 200px;">
                            No Image
                        </div>
                    @endif
                    <div class="card-body">
                        <h5 class="card-title">{{ $tour->name }}</h5>
                        <p class="card-text">{{ Str::limit($tour->description, 100) }}</p>
                        <a href="{{ route('tours.show', $tour) }}" class="btn btn-info">Ver Detalles</a>
                        @if(Auth::user() && Auth::user()->hasRole('admin'))
                            <a href="{{ route('tours.edit', $tour) }}" class="btn btn-warning">Editar</a>
                            <form action="{{ route('tours.destroy', $tour) }}" method="POST" class="d-inline">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="btn btn-danger" onclick="return confirm('¿Estás seguro de que quieres eliminar este tour?')">Eliminar</button>
                            </form>
                        @endif
                    </div>
                </div>
            </div>
        @empty
            <div class="col-12">
                <p>No hay tours disponibles en este momento.</p>
            </div>
        @endforelse
    </div>
</div>
@endsection