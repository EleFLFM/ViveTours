@extends('layouts.app')

@section('content')
<div class="container">
    <h1 class="text-center mb-5">Panel de Administración</h1>

    <div class="row justify-content-center">
        <!-- Tarjeta para Administrar Tours -->
        <div class="col-md-4 mb-4">
            <div class="card shadow-lg border-0">
                <div class="card-header bg-primary text-white text-center">
                    <h4 class="mb-0">Administrar Tours</h4>
                </div>
                <div class="card-body text-center">
                    <i class="fas fa-route fa-3x text-primary mb-3"></i>
                    <p class="card-text">Gestiona todos los tours disponibles: agrega, edita o elimina según sea necesario.</p>
                    <a href="{{ route('tours.index') }}" class="btn btn-primary btn-block mt-3">Ir a Administrar Tours</a>
                </div>
            </div>
        </div>

        <!-- Tarjeta para Dashboard -->
        <div class="col-md-4 mb-4">
            <div class="card shadow-lg border-0">
                <div class="card-header bg-success text-white text-center">
                    <h4 class="mb-0">Dashboard</h4>
                </div>
                <div class="card-body text-center">
                    <i class="fas fa-chart-line fa-3x text-success mb-3"></i>
                    <p class="card-text">Obtén una visión general de las estadísticas y el rendimiento de tu negocio.</p>
                    <a href="{{-- route('dashboard') --}}" class="btn btn-success btn-block mt-3">Ver Dashboard</a>
                </div>
            </div>
        </div>

        <!-- Tarjeta para Gestión de Usuarios -->
        <div class="col-md-4 mb-4">
            <div class="card shadow-lg border-0">
                <div class="card-header bg-warning text-white text-center">
                    <h4 class="mb-0">Gestionar Usuarios</h4>
                </div>
                <div class="card-body text-center">
                    <i class="fas fa-users-cog fa-3x text-warning mb-3"></i>
                    <p class="card-text">Controla los usuarios de la plataforma: agrega, edita o elimina usuarios.</p>
                    <a href="{{-- route('users.index')  --}}" class="btn btn-warning btn-block mt-3">Gestionar Usuarios</a>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
