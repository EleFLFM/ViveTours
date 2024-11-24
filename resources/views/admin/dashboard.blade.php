@extends('layouts.app')

@section('content')
<div class="container">
    <h1 class="text-center mb-4">Dashboard</h1>

    <div class="row">
        <!-- Tarjeta: Clientes -->
        <div class="col-md-6">
            <div class="card shadow-lg border-0">
                <div class="card-header bg-primary text-white text-center">
                    <h4>Clientes Registrados</h4>
                </div>
                <div class="card-body text-center">
                    <h3 class="display-4">{{ $clientesCount }}</h3>
                    <p class="card-text">Total de clientes en el sistema.</p>
                </div>
            </div>
        </div>

        <!-- Tarjeta: Tours Disponibles -->
        <div class="col-md-6">
            <div class="card shadow-lg border-0">
                <div class="card-header bg-success text-white text-center">
                    <h4>Tours Disponibles</h4>
                </div>
                <div class="card-body text-center">
                    <h3 class="display-4">{{ $toursCount }}</h3>
                    <p class="card-text">Total de tours disponibles en el sistema.</p>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
