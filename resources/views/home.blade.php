@extends('layouts.app')

<style>
    :root {
        --primary: #00B4DB;
        --primary-dark: #0083B0;
        --secondary: #e09c42;
        --secondary-dark: #ee8b52;
        --accent: #FFD93D;
        --light: #F8F9FA;
        --dark: #2D3436;
    }

    .hero-section {
        min-height: 100vh;
        background: linear-gradient(135deg, rgba(0,180,219,0.05) 0%, rgba(224,156,66,0.05) 100%);
        position: relative;
        overflow: hidden;
    }

    .hero-content {
        padding: 2rem;
        max-width: 1200px;
        margin: 0 auto;
        position: relative;
        z-index: 2;
        padding-top: calc(39vmax / 10);
        padding-bottom: calc(39vmax / 10);
    }

    .animated-title {
        font-size: 4rem;
        font-weight: 800;
        margin-bottom: 1.5rem;
        opacity: 0;
        transform: translateY(30px);
        animation: fadeInUp 1s ease forwards;
        text-align: center;
    }

    .animated-subtitle {
        font-size: 1.5rem;
        color: var(--dark);
        opacity: 0;
        transform: translateY(30px);
        animation: fadeInUp 1s ease forwards 0.3s;
        text-align: center;
        margin-bottom: 3rem;
    }

    .features-grid {
        display: grid;
        grid-template-columns: repeat(auto-fit, minmax(300px, 1fr));
        gap: 2rem;
        padding: 2rem;
        opacity: 0;
        transform: translateY(30px);
        animation: fadeInUp 1s ease forwards 0.6s;
    }

    .feature-card {
        background: white;
        border-radius: 20px;
        padding: 2rem;
        transition: all 0.5s cubic-bezier(0.4, 0, 0.2, 1);
        position: relative;
        overflow: hidden;
        border: none;
        box-shadow: 0 10px 20px rgba(0,0,0,0.1);
        cursor: pointer;
        transform-style: preserve-3d;
        perspective: 1000px;
    }

    .feature-card::before {
        content: '';
        position: absolute;
        top: 0;
        left: 0;
        width: 100%;
        height: 100%;
        background: linear-gradient(135deg, var(--primary) 0%, var(--secondary) 100%);
        opacity: 0;
        transition: all 0.5s ease;
        z-index: 1;
        transform: translateZ(-1px);
    }

    .feature-card:hover {
        transform: translateY(-15px) rotateX(5deg);
        box-shadow: 0 20px 40px rgba(0,0,0,0.2);
    }

    .feature-card:hover::before {
        opacity: 0.1;
    }

    .gradient-text {
        background: linear-gradient(45deg, var(--primary) 0%, var(--secondary) 100%);
        -webkit-background-clip: text;
        -webkit-text-fill-color: transparent;
        display: inline-block;
    }

    .accent-text {
        color: #fa9805;
        font-weight: bold;
    }

    .floating-shapes {
        position: absolute;
        width: 100%;
        height: 100%;
        top: 0;
        left: 0;
        pointer-events: none;
        z-index: 1;
    }

    .shape {
        position: absolute;
        border-radius: 50%;
        background: linear-gradient(135deg, var(--primary) 0%, var(--secondary) 100%);
        opacity: 0.1;
        animation: float 20s infinite;
    }

    .auth-buttons {
        display: flex;
        gap: 1rem;
        justify-content: center;
        margin-top: 2rem;
        opacity: 0;
        transform: translateY(30px);
        animation: fadeInUp 1s ease forwards 0.9s;
    }

    .auth-button {
        background: linear-gradient(45deg, var(--primary) 0%, var(--secondary) 100%);
        color: white;
        border: none;
        padding: 1rem 2.5rem;
        border-radius: 50px;
        font-size: 1.1rem;
        font-weight: 600;
        text-transform: uppercase;
        letter-spacing: 1px;
        transition: all 0.3s ease;
        text-decoration: none;
        position: relative;
        overflow: hidden;
    }

    .auth-button:hover {
        transform: translateY(-3px) scale(1.05);
        box-shadow: 0 10px 20px rgba(0,0,0,0.2);
        color: white;
        text-decoration: none;
    }

    @keyframes float {
        0%, 100% {
            transform: translate(0, 0) rotate(0deg);
        }
        25% {
            transform: translate(50px, -50px) rotate(90deg);
        }
        50% {
            transform: translate(0, -100px) rotate(180deg);
        }
        75% {
            transform: translate(-50px, -50px) rotate(270deg);
        }
    }

    @keyframes fadeInUp {
        to {
            opacity: 1;
            transform: translateY(0);
        }
    }

    @media (max-width: 768px) {
        .animated-title {
            font-size: 2.5rem;
        }
        
        .animated-subtitle {
            font-size: 1.2rem;
        }
        
        .features-grid {
            grid-template-columns: 1fr;
        }

        .auth-buttons {
            flex-direction: column;
            padding: 0 2rem;
        }

        .auth-button {
            width: 100%;
            text-align: center;
        }
    }
</style>

@section('content')
<div class="container">
    @if(Auth::check())
        @if(Auth::user()->hasRole('admin'))
            @include('admin.index')
        @else
            @include('partials.welcome-content')
        @endif
    @else
        <div class="hero-section">
            <div class="floating-shapes">
                @for ($i = 1; $i <= 5; $i++)
                    <div class="shape" style="
                        width: {{ rand(50, 200) }}px;
                        height: {{ rand(50, 200) }}px;
                        left: {{ rand(0, 100) }}%;
                        top: {{ rand(0, 100) }}%;
                        animation-delay: {{ $i * 0.5 }}s;
                    "></div>
                @endfor
            </div>
            
            <div class="hero-content">
                <h1 class="animated-title">
                    Bienvenid@s a <br>
                    <span class="accent-text">Vive Tours</span>
                </h1>
                
                <p class="animated-subtitle">
                    El destino de tus sueños, al alcance de tus manos
                </p>

                <div class="features-grid">
                    <div class="feature-card">
                        <h3 class="gradient-text">Destinos Únicos</h3>
                        <p>Explora lugares extraordinarios y crea memorias inolvidables en cada rincón del mundo.</p>
                    </div>
                    
                    <div class="feature-card">
                        <h3 class="gradient-text">Experiencias Premium</h3>
                        <p>Servicio personalizado y atención de primera clase para hacer tu viaje excepcional.</p>
                    </div>
                    
                    <div class="feature-card">
                        <h3 class="gradient-text">Momentos Mágicos</h3>
                        <p>Vive momentos únicos con nuestros tours diseñados especialmente para ti.</p>
                    </div>
                </div>

                <div class="auth-buttons">
                    <a href="{{ route('login') }}" class="auth-button">Iniciar Sesión</a>
                    <a href="{{ route('register') }}" class="auth-button">Registrarse</a>
                </div>
            </div>
        </div>
    @endif
</div>
@endsection

<script>
document.addEventListener('DOMContentLoaded', function() {
    const cards = document.querySelectorAll('.feature-card');
    
    const observer = new IntersectionObserver((entries) => {
        entries.forEach(entry => {
            if (entry.isIntersecting) {
                entry.target.style.opacity = '1';
                entry.target.style.transform = 'translateY(0)';
            }
        });
    }, {
        threshold: 0.1
    });
    
    cards.forEach(card => {
        observer.observe(card);
    });
});
</script>
