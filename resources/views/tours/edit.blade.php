@extends('layouts.app')

@section('content')
@if(Auth::user() && Auth::user()->hasRole('admin'))
<div class="container">
    <h1 class="mb-4">Editar Tour: {{ $tour->name }}</h1>

    <form action="{{ route('tours.update', $tour) }}" method="POST" enctype="multipart/form-data">
        @csrf
        @method('PUT')
        <div class="form-group">
            <label for="name">Nombre del Tour</label>
            <input type="text" class="form-control @error('name') is-invalid @enderror" id="name" name="name" value="{{ old('name', $tour->name) }}" required>
            @error('name')
                <div class="invalid-feedback">{{ $message }}</div>
            @enderror
        </div>
        <div class="form-group">
            <label for="description">Descripción</label>
            <textarea class="form-control @error('description') is-invalid @enderror" id="description" name="description" rows="3" required>{{ old('description', $tour->description) }}</textarea>
            @error('description')
                <div class="invalid-feedback">{{ $message }}</div>
            @enderror
        </div>
        <div class="form-group">
            <label for="tour_date">Fecha del Tour</label>
            <input type="date" class="form-control @error('tour_date') is-invalid @enderror" id="tour_date" name="tour_date" 
                   value="{{ old('tour_date', \Carbon\Carbon::parse($tour->tour_date)->format('Y-m-d')) }}" required>
            @error('tour_date')
                <div class="invalid-feedback">{{ $message }}</div>
            @enderror
        </div>
        <div class="form-group">
            <label for="image">Imagen Actual</label>
            @if($tour->image)
                <img src="{{ asset('storage/' . $tour->image) }}" alt="{{ $tour->name }}" class="img-thumbnail mb-2" style="max-height: 200px;">
            @else
                <p>No hay imagen actualmente</p>
            @endif
        </div>
        <div class="form-group">
            <label for="image">Nueva Imagen (deja en blanco para mantener la actual)</label>
            <input type="file" class="form-control-file @error('image') is-invalid @enderror" id="image" name="image">
            @error('image')
                <div class="invalid-feedback">{{ $message }}</div>
            @enderror
        </div>
        <button type="submit" class="btn btn-primary">Actualizar Tour</button>
        <a href="{{ route('tours.show', $tour) }}" class="btn btn-secondary">Cancelar</a>
    </form>
</div>
@else
    <p>No tienes permiso para acceder a esta página.</p>
@endif

@endsection
