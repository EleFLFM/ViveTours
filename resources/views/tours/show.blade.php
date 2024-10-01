@extends('layouts.app')

@section('content')
<div class="container">
    <h1 class="mb-4">{{ $tour->name }}</h1>

    <div class="row">
        <div class="col-md-6">
            @if($tour->image)
                <img src="{{ asset('storage/' . $tour->image) }}" class="img-fluid mb-3" alt="{{ $tour->name }}">
            @else
                <div class="bg-secondary text-white d-flex justify-content-center align-items-center" style="height: 300px;">
                    <p>No Image Available</p>
                </div>
            @endif
        </div>
        <div class="col-md-6">
            <h3>Descripción</h3>
            <p>{{ $tour->description }}</p>

            <h4>Fecha del Tour</h4>
            <p>{{ \Carbon\Carbon::parse($tour->tour_date)->format('d/m/Y') }}</p>

            @if(Auth::user() && Auth::user()->hasRole('admin'))
                <a href="{{ route('tours.edit', $tour) }}" class="btn btn-warning">Editar Tour</a>
                <form action="{{ route('tours.destroy', $tour) }}" method="POST" class="d-inline">
                    @csrf
                    @method('DELETE')
                    <button type="submit" class="btn btn-danger" onclick="return confirm('¿Estás seguro de que quieres eliminar este tour?')">Eliminar Tour</button>
                </form>
            @endif
            
            <a href="{{ route('tours.index') }}" class="btn btn-secondary">Volver al listado</a>
        </div>
    </div>
</div>
@endsection
