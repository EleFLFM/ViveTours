@extends('layouts.app')

@section('content')
@if(Auth::user() && Auth::user()->hasRole('admin'))
<div class="container">
    <h1 class="mb-4">Crear Nuevo Tour</h1>

    <form action="{{ route('tours.store') }}" method="POST" enctype="multipart/form-data">
        @csrf
        <div class="form-group">
            <label for="name">Nombre del Tour</label>
            <input type="text" class="form-control @error('name') is-invalid @enderror" id="name" name="name" value="{{ old('name') }}" required>
            @error('name')
                <div class="invalid-feedback">{{ $message }}</div>
            @enderror
        </div>
        <div class="form-group">
            <label for="description">Descripción</label>
            <textarea class="form-control @error('description') is-invalid @enderror" id="description" name="description" rows="3" required>{{ old('description') }}</textarea>
            @error('description')
                <div class="invalid-feedback">{{ $message }}</div>
            @enderror
        </div>
        <div class="form-group">
            <label for="tour_date">Fecha del Tour</label>
            <input type="date" class="form-control @error('tour_date') is-invalid @enderror" id="tour_date" name="tour_date" value="{{ old('tour_date') }}" required>
            @error('tour_date')
                <div class="invalid-feedback">{{ $message }}</div>
            @enderror
        </div>
        <div class="form-group">
            <label for="image">Imagen</label>
            <input type="file" class="form-control-file @error('image') is-invalid @enderror" id="image" name="image">
            @error('image')
                <div class="invalid-feedback">{{ $message }}</div>
            @enderror
        </div>
        <button type="submit" class="btn btn-primary">Crear Tour</button>
    </form>
</div>
@else
    <p>No tienes permiso para acceder a esta página.</p>
@endif

@endsection
