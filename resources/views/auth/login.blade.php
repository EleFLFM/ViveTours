@extends('layouts.app')

@section('content')
<div class="container" style="margin-top: 50px;">
    <div class="row justify-content-center">
        <div class="col-md-6">
            <div class="card shadow-lg border-0 rounded">
                <div class="card-header bg-gradient-primary text-black text-center py-4">
                    <h4 class="mb-0">{{ __('Bienvenido') }}</h4>
                </div>

                <div class="card-body p-5">
                    <form method="POST" action="{{ route('login') }}">
                        @csrf

                        <div class="form-group mb-4">
                            <label for="email" class="text-muted">{{ __('Email Address') }}</label>
                            <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" 
                                   name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>
                            @error('email')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>

                        <div class="form-group mb-4">
                            <label for="password" class="text-muted">{{ __('Password') }}</label>
                            <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" 
                                   name="password" required autocomplete="current-password">
                            @error('password')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>

                        <div class="form-group form-check mb-4">
                            <input type="checkbox" class="form-check-input" id="remember" name="remember" {{ old('remember') ? 'checked' : '' }}>
                            <label class="form-check-label" for="remember">{{ __('Remember Me') }}</label>
                        </div>

                        <div class="d-grid">
                            <button type="submit" class="btn btn-gradient-primary btn-block">
                                {{ __('Login') }}
                            </button>
                        </div>

                        <div class="text-center mt-4">
                            @if (Route::has('password.request'))
                                <a class="text-muted" href="{{ route('password.request') }}">
                                    {{ __('Forgot Your Password?') }}
                                </a>
                            @endif
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>

<style>
   .btn-gradient-primary {
    background: linear-gradient(90deg, rgba(29, 143, 242, 1) 0%, rgba(68, 203, 238, 1) 100%);
    border: none;
    color: white;
    padding: 10px;
    font-size: 18px;
    transition: all 0.3s ease; /* Transición suave */
    border-radius: 5px; /* Bordes redondeados */
}

.btn-gradient-primary:hover {
    background: linear-gradient(90deg, rgba(68, 203, 238, 1) 0%, rgba(29, 143, 242, 1) 100%);
    color: white;
    transform: scale(1.05); /* Escalado en hover */
    box-shadow: 0 4px 15px rgba(0, 0, 0, 0.3); /* Sombra en hover */
}


    .card {
        animation: fadeIn 0.5s ease;
    }

    @keyframes fadeIn {
        from { opacity: 0; transform: translateY(30px); }
        to { opacity: 1; transform: translateY(0); }
    }
</style>
@endsection
