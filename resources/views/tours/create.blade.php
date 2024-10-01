@extends('layouts.app')

@section('content')
@if(Auth::user() && Auth::user()->hasRole('admin'))
<div class="container">
    <h1 class="mb-4 text-center">Crear Nuevo Tour</h1>

    <form action="{{ route('tours.store') }}" method="POST" enctype="multipart/form-data" class="shadow p-4 rounded">
        @csrf
        <div class="form-group mb-3">
            <label for="name" class="form-label">Nombre del Tour</label>
            <input type="text" class="form-control @error('name') is-invalid @enderror" id="name" name="name" value="{{ old('name') }}" required>
            @error('name')
                <div class="invalid-feedback">{{ $message }}</div>
            @enderror
        </div>
        <div class="form-group mb-3">
            <label for="description" class="form-label">Descripción</label>
            <textarea class="form-control @error('description') is-invalid @enderror" id="description" name="description" rows="4" required>{{ old('description') }}</textarea>
            @error('description')
                <div class="invalid-feedback">{{ $message }}</div>
            @enderror
        </div>
        <div class="form-group mb-3">
            <label for="tour_date" class="form-label">Fecha del Tour</label>
            <input type="date" class="form-control @error('tour_date') is-invalid @enderror" id="tour_date" name="tour_date" value="{{ old('tour_date') }}" required>
            @error('tour_date')
                <div class="invalid-feedback">{{ $message }}</div>
            @enderror
        </div>
        <div class="form-group mb-4">
            <label for="image" class="form-label">Imagen</label>
            <input type="file" class="form-control-file @error('image') is-invalid @enderror" id="image" name="image">
            @error('image')
                <div class="invalid-feedback">{{ $message }}</div>
            @enderror
        </div>
        <div class="text-center">
            <button type="submit" class="btn btn-gradient-primary px-5 py-2">Crear Tour</button>
        </div>
    </form>
</div>
@else
    <p class="text-center mt-4">No tienes permiso para acceder a esta página.</p>
@endif

@endsection
