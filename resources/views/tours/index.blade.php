@extends('layouts.app')

@section('content')
<div class="container">
    <h1 class="mb-4 text-center">Listado de Tours</h1>

    <div id="alertPlaceholder"></div>

    @if(Auth::user() && Auth::user()->hasRole('admin'))
    <div class="text-center mb-4">
        <a href="{{ route('tours.create') }}" class="btn btn-gradient-primary px-5 py-2 rounded-pill">Crear Nuevo Tour</a>
    </div>
    @endif

    <div class="row">
        @forelse($tours as $tour)
            <div class="col-md-4 mb-4">
                <div class="card h-100 shadow-lg border-0">
                    @if($tour->image)
                        <img src="{{ asset('storage/' . $tour->image) }}" class="card-img-top" alt="{{ $tour->name }}" style=" object-fit: cover;">
                    @else
                        <div class="card-img-top bg-secondary text-white d-flex justify-content-center align-items-center" style="height: 200px;">
                            No Image
                        </div>
                    @endif
                    <div class="card-body d-flex flex-column">
                        <h5 class="card-title text-center font-weight-bold">{{ $tour->name }}</h5>
                        <p class="card-text text-muted text-center">{{ Str::limit($tour->description, 100) }}</p>
                        <p class="card-text text-center"><strong>Inicio:</strong> {{ \Carbon\Carbon::parse($tour->start_date)->format('d/m/Y') }}</p>
                        <p class="card-text text-center"><strong>Fin:</strong> {{ \Carbon\Carbon::parse($tour->end_date)->format('d/m/Y') }}</p>

                        <div class="mt-auto text-center">
                            <a href="{{ route('tours.show', $tour) }}" class="btn btn-info mb-2 w" title="Ver Detalles" data-bs-toggle="tooltip" data-bs-placement="top" data-bs-title="Ver Detalles">
                                <i class="fas fa-eye"></i>
                            </a>

                            @if(Auth::user() && Auth::user()->hasRole('admin'))
                                <a href="{{ route('tours.edit', $tour) }}" class="btn btn-warning mb-2 w" title="Editar" data-bs-toggle="tooltip" data-bs-placement="top" data-bs-title="Editar">
                                    <i class="fas fa-edit"></i>
                                </a>

                                <form action="{{ route('tours.destroy', $tour) }}" method="POST" class="d-inline delete-form">
                                    @csrf
                                    @method('DELETE')
                                    <button type="button" class="btn btn-danger mb-2 w delete-btn" title="Eliminar" data-bs-toggle="tooltip" data-bs-placement="top" data-bs-title="Eliminar">
                                        <i class="fas fa-trash-alt"></i>
                                    </button>
                                </form>
                            @endif
                        </div>
                    </div>
                </div>
            </div>
        @empty
            <div class="col-12 text-center">
                <p class="text-muted">No hay tours disponibles en este momento.</p>
            </div>
        @endforelse
    </div>
</div>

@endsection

@push('scripts')
<script src="{{ asset('js/alert.js') }}"></script>
<script>
    const sessionSuccessMessage = @json(session('success'));
</script>
@endpush