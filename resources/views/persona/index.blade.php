@extends('layout.principal')

@section('user')
<li class="nav-item dropdown no-arrow">

    <a class="nav-i-r" href="{{url('login')}}" id="userDropdown" role="button" aria-haspopup="true" aria-expanded="false">
        <span class="d-none d-lg-inline text-gray-600 small">INICIO SESION</span>
    </a>
    <a class="nav-i-r" href="{{url('login')}}" id="userDropdown" role="button" aria-haspopup="true" aria-expanded="false">
        <span class="d-none d-lg-inline text-gray-600 small">REGISTRO</span>
    </a>
                            
</li>
@endSection

@section('componentes')
<a class="nav-link collapsed" style="text-align: center" href="" aria-expanded="true" >
    <span>QUIENES SOMOS</span>
</a>
<a class="nav-link collapsed" style="text-align: center" href="" aria-expanded="true" >
    <span>NUESTRO EQUIPO</span>
</a>

@endsection
