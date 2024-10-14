@extends('layouts.app')

@section('content')
<div class="container" >
    @if(Auth::check())
        <h1>Bienvenido, {{ Auth::user()->name }}.</h1>
        @if(Auth::user()->hasRole('admin'))
        
        @include('admin.index') {{-- Aquí incluye el contenido específico para el administrador --}}
      
        
        @else
            
            <p>Esta es la sección de cliente.</p>
            <a href="{{ route('tours.index') }}" class="btn btn-primary">Ver Tours</a>
            
            
            {{-- Aquí puedes agregar contenido específico para los clientes --}}
        @endif
    @else
        <div class="content-wrapper" style="    
            padding-top: calc(39vmax / 10); padding-bottom: calc(39vmax / 10); ">
        <div class="content">
        
        <div data-fluid-engine="true" >
            <style> 
                .fe-66e0dd1d19bbb02a5d360a4a {
                --grid-gutter: calc(var(--sqs-mobile-site-gutter, 6vw) - 15.0px);
                --cell-max-width: calc( ( var(--sqs-site-max-width, 1500px) - (15.0px * (8 - 1)) ) / 8 );
                display: grid;
                position: relative;
                grid-area: 1/1/-1/-1;
                grid-template-rows: repeat(15,minmax(24px, auto));
                grid-template-columns:
                minmax(var(--grid-gutter), 1fr)
                repeat(8, minmax(0, var(--cell-max-width)))
                minmax(var(--grid-gutter), 1fr);
                row-gap: 7.0px;
                column-gap: 15.0px;
                }
                @media (min-width: 768px) {
                .background-width--inset .fe-66e0dd1d19bbb02a5d360a4a 
                {
                    --inset-padding: calc(var(--sqs-site-gutter) * 2);
                }
                .fe-66e0dd1d19bbb02a5d360a4a {
                    --grid-gutter: calc(var(--sqs-site-gutter, 4vw) - 15.0px);
                    --cell-max-width: calc( ( var(--sqs-site-max-width, 1500px) - (15.0px * (24 - 1)) ) / 24 );
                    --inset-padding: 0vw;
                    --row-height-scaling-factor: 0.0215;
                    --container-width: min(var(--sqs-site-max-width, 1500px), calc(100vw - var(--sqs-site-gutter, 4vw) * 2 - var(--inset-padding) ));
                    grid-template-rows: repeat(10,minmax(calc(var(--container-width) * var(--row-height-scaling-factor)), auto));
                    grid-template-columns:
                    minmax(var(--grid-gutter), 1fr)
                    repeat(24, minmax(0, var(--cell-max-width)))
                    minmax(var(--grid-gutter), 1fr);
                    }
                }
                .fe-block-71914a5ad7e2b12e7dcf {
                    grid-area: 2/2/10/10;
                    z-index: 3;
                    @media (max-width: 767px) 
                }
                .fe-block-71914a5ad7e2b12e7dcf .sqs-block {
                    justify-content: center;
                }
                .fe-block-71914a5ad7e2b12e7dcf .sqs-block-alignment-wrapper {
                    align-items: center;
                }
                @media (min-width: 768px) {
                    .fe-block-71914a5ad7e2b12e7dcf {
                        grid-area: 2/6/7/22;
                        z-index: 3;   
                    }
                    .fe-block-71914a5ad7e2b12e7dcf .sqs-block {
                        justify-content: flex-start;
                    }
                    .fe-block-71914a5ad7e2b12e7dcf .sqs-block-alignment-wrapper {
                        align-items: flex-start;
                    }
                }
                .fe-block-5156581b7b2618b30e49 {
                    grid-area: 10/2/14/10;
                    z-index: 4;
                    @media (max-width: 767px)
                }
                .fe-block-5156581b7b2618b30e49 .sqs-block {
                    justify-content: center;
                }
                .fe-block-5156581b7b2618b30e49 .sqs-block-alignment-wrapper {
                    align-items: center;
                }
                @media (min-width: 768px) {
                    .fe-block-5156581b7b2618b30e49 {
                        grid-area: 7/9/9/19;
                        z-index: 4;
                    }
                    .fe-block-5156581b7b2618b30e49 .sqs-block {
                        justify-content: flex-start;
                    }
                    .fe-block-5156581b7b2618b30e49 .sqs-block-alignment-wrapper {
                        align-items: flex-start;
                    }
                }
                .fe-block-2830134c80dc3f334fa2 {
                    grid-area: 15/2/16/10;
                    z-index: 5;
                    @media (max-width: 767px)
                }
                .fe-block-2830134c80dc3f334fa2 .sqs-block {
                    justify-content: flex-start;
                }
                .fe-block-2830134c80dc3f334fa2 .sqs-block-alignment-wrapper {
                    align-items: flex-start;
                }
                @media (min-width: 768px) {
                    .fe-block-2830134c80dc3f334fa2 {
                        grid-area: 10/10/11/18;
                        z-index: 5;
                    }
                    .fe-block-2830134c80dc3f334fa2 .sqs-block {
                        justify-content: flex-end;
                    }
                    .fe-block-2830134c80dc3f334fa2 .sqs-block-alignment-wrapper {
                        align-items: flex-end;
                    }
                }
            </style>
            <div class="fluid-engine fe-66e0dd1d19bbb02a5d360a4a" >
                <div class="fe-block fe-block-71914a5ad7e2b12e7dcf" style="mix-blend-mode: normal;">
                    <div class="sqs-block html-block sqs-block-html" 
                    data-blend-mode="NORMAL" 
                    data-block-type="2" 
                    data-border-radii="{&quot;topLeft&quot;:{&quot;unit&quot;:&quot;px&quot;,&quot;value&quot;:0.0},&quot;topRight&quot;:{&quot;unit&quot;:&quot;px&quot;,&quot;value&quot;:0.0},&quot;bottomLeft&quot;:{&quot;unit&quot;:&quot;px&quot;,&quot;value&quot;:0.0},&quot;bottomRight&quot;:{&quot;unit&quot;:&quot;px&quot;,&quot;value&quot;:0.0}}" 
                    id="block-71914a5ad7e2b12e7dcf">
                    <div class="sqs-block-content">
                        <div class="sqs-html-content">
                            <h1 style="text-align: center; white-space: pre-wrap; transition-timing-function: cubic-bezier(0.19, 1, 0.22, 1); transition-duration: 0.5s;"" class="preFlex flexIn"><span class="sqsrte-text-color--black">Bienvenid@s, a  <br> </span><span class="sqsrte-text-color--darkAccent" style="color: rgb(250, 152, 5)"><strong>Vive Tours.</strong></span></h1>
                        </div>
                    </div>
                </div>
            </div>
            <div class="fe-block fe-block-5156581b7b2618b30e49" style="mix-blend-mode: normal;">
                <div class="sqs-block html-block sqs-block-html" 
                data-blend-mode="NORMAL" 
                data-block-type="2" 
                data-border-radii="{&quot;topLeft&quot;:{&quot;unit&quot;:&quot;px&quot;,&quot;value&quot;:0.0},&quot;topRight&quot;:{&quot;unit&quot;:&quot;px&quot;,&quot;value&quot;:0.0},&quot;bottomLeft&quot;:{&quot;unit&quot;:&quot;px&quot;,&quot;value&quot;:0.0},&quot;bottomRight&quot;:{&quot;unit&quot;:&quot;px&quot;,&quot;value&quot;:0.0}}" 
                id="block-5156581b7b2618b30e49">
                <div class="sqs-block-content">
                    <div class="sqs-html-content">
                        <p style="text-align: center; white-space: pre-wrap; transition-timing-function: cubic-bezier(0.19, 1, 0.22, 1); transition-duration: 0.5s;" 
                        class="sqsrte-large preFlex flexIn">El destino de tus sueños, al alacance de tus manos.
                        </p>
                    </div>
                </div>
            </div>
            
        </div>
        {{-- <div class="fe-block fe-block-2830134c80dc3f334fa2" style="mix-blend-mode: normal;">
            <div class="sqs-block html-block sqs-block-html" 
                data-blend-mode="NORMAL" 
                data-block-type="2" 
                data-border-radii="{&quot;topLeft&quot;:{&quot;unit&quot;:&quot;px&quot;,&quot;value&quot;:0.0},&quot;topRight&quot;:{&quot;unit&quot;:&quot;px&quot;,&quot;value&quot;:0.0},&quot;bottomLeft&quot;:{&quot;unit&quot;:&quot;px&quot;,&quot;value&quot;:0.0},&quot;bottomRight&quot;:{&quot;unit&quot;:&quot;px&quot;,&quot;value&quot;:0.0}}" 
                id="block-2830134c80dc3f334fa2">
                <div class="sqs-block-content">
                    <div class="sqs-html-content">
                        <p style="text-align: center; white-space: pre-wrap; transition-timing-function: cubic-bezier(0.19, 1, 0.22, 1); transition-duration: 0.5s;" class="preFlex flexIn"> <span class="sqsrte-text-color--custom" style="color: rgb(0, 0, 0)">SCROLL ↓</span></p>
                    </div>
                </div>
            </div>
        </div> --}}
    </div>
<div>

    
  
        {{-- <p>Por favor, <a href="{{ route('login') }}">inicie sesión</a> o <a href="{{ route('register') }}">regístrese</a>.</p> --}}
    @endif

</div>
@endsection
