@extends('layout.principal')


@section('user')
<li class="nav-item dropdown no-arrow">

    <a class="nav-link dropdown-toggle" href="#" id="userDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
        <span class="mr-2 d-none d-lg-inline text-gray-600 small">{{ Auth::user()->name }}</span>
                                
        <img class="img-profile rounded-circle" src="img/DOCTOR.png">
    </a>
                            <!-- Dropdown - User Information -->
    <div class="dropdown-menu dropdown-menu-right shadow animated--grow-in" aria-labelledby="userDropdown">
        <a class="dropdown-item" href="{{url('perfil')}}">
            <i class="fas fa-user fa-sm fa-fw mr-2 text-gray-400"></i>
            Perfil
        </a>
        <div class="dropdown-divider"></div>
        <a class="dropdown-item" href="{{ route('logout') }}" onclick="event.preventDefault();
            document.getElementById('logout-form').submit();">
            {{ __('Logout') }}
        </a>
        <form id="logout-form" action="{{ url('logout') }}" method="POST" class="d-none">
            @csrf
        </form>
    </div>
</li>
@endSection

@section('Dashboard')
<hr class="sidebar-divider my-0">

<a class="nav-link">

    <span>Especialista en: <br>
    @if (Auth::user()->getEspeciality())
        <p>{{ Auth::user()->getEspeciality()->description }}</p>
    @else
        <p>No tiene una especialidad asignada.</p>
    @endif

</span>

</a>
@endSection

@section('componentes')
<a class="nav-link collapsed" style="text-align: center" href="{{url('especialidad')}}" aria-expanded="true" >
    <span>ESPECIALIDAD</span>
</a>
<a class="nav-link collapsed" style="text-align: center" href="{{url('/evento')}}" aria-expanded="true" >
    <span>AGENDA</span>
</a>
<a class="nav-link collapsed" style="text-align: center" href="{{ url('citasDoctores')}}" aria-expanded="true" >
    <span>CITAS</span>
</a>
@endsection