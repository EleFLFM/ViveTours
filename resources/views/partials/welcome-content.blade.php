<div class="hero-section position-relative">
    <div class="container py-5">
        <div class="text-center mb-5 position-relative">
            <h1 class="display-4 fw-bold animate__animated animate__fadeInDown">
                <i class="fas fa-paper-plane me-3"></i>¡Descubre Tu Próxima Aventura!
            </h1>
            <p class="lead animate__animated animate__fadeInUp animate__delay-1s">
                Embárcate en un viaje inolvidable con las mejores experiencias turísticas
            </p>
            <a href="{{ route('tours.index') }}">
                <button class="btn btn-custom mt-4 animate__animated animate__bounceIn animate__delay-2s">
                    <i class="fas fa-compass me-2"></i>Comenzar Aventura
                </button>
            </a>
        </div>
    </div>
    <div class="wave"></div>
</div>
<div class="container py-5">
    <div class="row g-4">
        <div class="col-md-4">
            <div class="feature-card fade-in-card">
                <div class="icon-wrapper">
                    <i class="fas fa-mountain"></i>
                </div>
                <h4 class="text-center gradient-text mb-3">Aventuras Naturales</h4>
                <p class="text-center text-muted mb-4">
                    Explora paisajes impresionantes y conecta con la naturaleza en su estado más puro
                </p>
                <div class="text-center">
                    <a href="{{ route('tours.index') }}" class="btn btn-custom">
                        <i class="fas fa-compass me-2"></i>Explorar
                    </a>
                </div>
            </div>
        </div>

        <div class="col-md-4">
            <div class="feature-card fade-in-card">
                <div class="icon-wrapper">
                    <i class="fas fa-landmark"></i>
                </div>
                <h4 class="text-center gradient-text mb-3">Cultura y Tradición</h4>
                <p class="text-center text-muted mb-4">
                    Sumérgete en la rica historia y tradiciones de destinos fascinantes
                </p>
                <div class="text-center">
                    <a href="{{ route('tours.index') }}" class="btn btn-custom">
                        <i class="fas fa-book-reader me-2"></i>Descubrir
                    </a>
                </div>
            </div>
        </div>

        <div class="col-md-4">
            <div class="feature-card fade-in-card">
                <div class="icon-wrapper">
                    <i class="fas fa-map-marked-alt"></i>
                </div>
                <h4 class="text-center gradient-text mb-3">Experiencias Únicas</h4>
                <p class="text-center text-muted mb-4">
                    Vive momentos extraordinarios con nuestras experiencias personalizadas
                </p>
                <div class="text-center">
                    <a href="{{ route('tours.index') }}" class="btn btn-custom">
                        <i class="fas fa-route me-2"></i>Empezar
                    </a>
                </div>
            </div>
        </div>
    </div>
</div>
<div class="features-section">
    <div class="container">
        <div class="row text-center g-4">
            <div class="col-md-4">
                <div class="animate__animated animate__fadeInUp">
                    <i class="fas fa-shield-alt benefit-icon"></i>
                    <h4 class="gradient-text">Viajes Seguros</h4>
                    <p class="text-muted">Tu seguridad es nuestra prioridad en cada aventura</p>
                </div>
            </div>
            <div class="col-md-4">
                <div class="animate__animated animate__fadeInUp animate__delay-1s">
                    <i class="fas fa-star benefit-icon"></i>
                    <h4 class="gradient-text">Calidad Premium</h4>
                    <p class="text-muted">Experiencias cuidadosamente seleccionadas</p>
                </div>
            </div>
            <div class="col-md-4">
                <div class="animate__animated animate__fadeInUp animate__delay-2s">
                    <i class="fas fa-headset benefit-icon"></i>
                    <h4 class="gradient-text">Soporte 24/7</h4>
                    <p class="text-muted">Estamos aquí para ayudarte en todo momento</p>
                </div>
            </div>
        </div>
    </div>
</div>
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

    .feature-card::after {
        content: '';
        position: absolute;
        top: 0;
        left: 0;
        width: 100%;
        height: 100%;
        background: linear-gradient(135deg, 
            rgba(0,180,219,0.2) 0%, 
            rgba(224,156,66,0.2) 100%);
        opacity: 0;
        transition: opacity 0.5s ease;
        z-index: 1;
    }

    .feature-card:hover {
        transform: translateY(-15px) rotateX(5deg);
        box-shadow: 0 20px 40px rgba(0,0,0,0.2);
    }

    .feature-card:hover::after {
        opacity: 1;
    }

    .icon-wrapper {
        width: 80px;
        height: 80px;
        border-radius: 50%;
        display: flex;
        align-items: center;
        justify-content: center;
        margin: 0 auto 1.5rem;
        background: linear-gradient(135deg, var(--primary) 0%, var(--secondary) 100%);
        color: white;
        font-size: 2rem;
        transition: all 0.5s ease;
        position: relative;
        z-index: 2;
    }

    .feature-card:hover .icon-wrapper {
        transform: rotate(360deg) scale(1.2);
    }

    .btn-custom {
        background: linear-gradient(45deg, var(--primary) 0%, var(--secondary) 100%);
        color: white;
        border: none;
        padding: 0.8rem 2rem;
        border-radius: 50px;
        font-weight: 600;
        transition: all 0.3s ease;
        text-transform: uppercase;
        letter-spacing: 1px;
        font-size: 0.9rem;
        position: relative;
        z-index: 2;
        text-decoration: none;
        display: inline-block;
    }

    .btn-custom:hover {
        transform: translateY(-3px) scale(1.05);
        box-shadow: 0 5px 15px rgba(0,0,0,0.2);
        color: white;
    }

    .fade-in-card {
        opacity: 0;
        transform: translateY(20px);
        transition: all 0.6s ease-out;
    }

    .fade-in-card.visible {
        opacity: 1;
        transform: translateY(0);
    }

    .gradient-text {
        background: linear-gradient(135deg, var(--primary) 0%, var(--secondary) 100%);
        -webkit-background-clip: text;
        -webkit-text-fill-color: transparent;
        transition: all 0.3s ease;
    }

    .feature-card:hover .gradient-text {
        transform: scale(1.05);
    }
</style>

<script>
    // Función para verificar si un elemento está en el viewport
    function isElementInViewport(el) {
        const rect = el.getBoundingClientRect();
        return (
            rect.top >= 0 &&
            rect.left >= 0 &&
            rect.bottom <= (window.innerHeight || document.documentElement.clientHeight) &&
            rect.right <= (window.innerWidth || document.documentElement.clientWidth)
        );
    }

    // Función para manejar la animación de las tarjetas
    function handleScrollAnimation() {
        const cards = document.querySelectorAll('.fade-in-card');
        
        cards.forEach(card => {
            if (isElementInViewport(card)) {
                card.classList.add('visible');
            }
        });
    }

    // Eventos para activar las animaciones
    document.addEventListener('DOMContentLoaded', handleScrollAnimation);
    window.addEventListener('scroll', handleScrollAnimation);
    window.addEventListener('resize', handleScrollAnimation);

    // Efecto hover 3D para las tarjetas
    document.querySelectorAll('.feature-card').forEach(card => {
        card.addEventListener('mousemove', function(e) {
            const rect = card.getBoundingClientRect();
            const x = e.clientX - rect.left;
            const y = e.clientY - rect.top;
            
            const centerX = rect.width / 2;
            const centerY = rect.height / 2;
            
            const rotateX = (y - centerY) / 20;
            const rotateY = -(x - centerX) / 20;
            
            this.style.transform = `
                perspective(1000px)
                rotateX(${rotateX}deg)
                rotateY(${rotateY}deg)
                translateY(-15px)
            `;
        });

        card.addEventListener('mouseleave', function() {
            this.style.transform = '';
        });
    });
</script>