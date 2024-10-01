@extends('layouts.app')

@section('content')
@if(Auth::user() && Auth::user()->hasRole('admin'))
<div class="container">
    <h1 class="mb-4 text-center">Editar Tour</h1>

    <form action="{{ route('tours.update', $tour->id) }}" method="POST" enctype="multipart/form-data" class="shadow p-4 rounded">
        @csrf
        @method('PUT') <!-- Esto indica que es una actualización -->

        <div class="form-group mb-3">
            <label for="name" class="form-label">Nombre del Tour</label>
            <input type="text" class="form-control @error('name') is-invalid @enderror" id="name" name="name" value="{{ old('name', $tour->name) }}" required>
            @error('name')
                <div class="invalid-feedback">{{ $message }}</div>
            @enderror
        </div>

        <div class="form-group mb-3">
            <label for="description" class="form-label">Descripción</label>
            <textarea class="form-control @error('description') is-invalid @enderror" id="description" name="description" rows="4" required>{{ old('description', $tour->description) }}</textarea>
            @error('description')
                <div class="invalid-feedback">{{ $message }}</div>
            @enderror
        </div>

        <div class="form-group mb-3">
            <label for="start_date" class="form-label">Fecha de inicio del Tour</label>
            <input type="date" class="form-control @error('start_date') is-invalid @enderror" id="start_date" name="start_date" value="{{ old('start_date', $tour->start_date) }}" required>
            @error('start_date')
                <div class="invalid-feedback">{{ $message }}</div>
            @enderror
        </div>

        <div class="form-group mb-3">
            <label for="end_date" class="form-label">Fecha de fin del Tour</label>
            <input type="date" class="form-control @error('end_date') is-invalid @enderror" id="end_date" name="end_date" value="{{ old('end_date', $tour->end_date) }}" required>
            @error('end_date')
                <div class="invalid-feedback">{{ $message }}</div>
            @enderror
        </div>

        <div class="form-group mb-4">
            <label for="image" class="form-label">Imagen</label>
            <input type="file" class="form-control-file @error('image') is-invalid @enderror" id="image" name="image">
            @if($tour->image)
                <small class="text-muted">Imagen actual: <img src="{{ asset('storage/' . $tour->image) }}" alt="{{ $tour->name }}" class="img-thumbnail" width="150"></small>
            @endif
            @error('image')
                <div class="invalid-feedback">{{ $message }}</div>
            @enderror
        </div>

        <div class="text-center">
            <button type="submit" class="btn btn-gradient-primary px-5 py-2">Actualizar Tour</button>
            <a href="{{ route('tours.index') }}" class="btn btn-secondary px-5 py-2 ms-3">Cancelar</a>
        </div>
    </form>
</div>
@else
    <p class="text-center mt-4">No tienes permiso para acceder a esta página.</p>
@endif

@endsection
<!-- Agregar Bootstrap JS desde un CDN -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.1.3/js/bootstrap.bundle.min.js"></script>
