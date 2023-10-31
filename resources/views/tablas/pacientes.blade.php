@extends('layout.table')

@section('titulo')
PACIENTES
@endSection

@section('usuario')
{{ Auth::user()->name }}
@endSection

@section('componentes')
<a class="nav-link collapsed" style="text-align: center" href="{{url('pacientes')}}" aria-expanded="true" >
    <span>PACIENTES</span>
</a>
<a class="nav-link collapsed" style="text-align: center" href="{{url('doctores')}}" aria-expanded="true" >
    <span>DOCTORES</span>
</a>
<a class="nav-link collapsed" style="text-align: center" href="{{url('secretarias')}}" aria-expanded="true" >
    <span>SECRETARIAS</span>
</a>
<a class="nav-link collapsed" style="text-align: center" href="" aria-expanded="true" >
    <span>CITAS</span>
</a>
<a class="nav-link collapsed" style="text-align: center" href="" aria-expanded="true" >
    <span>REPORTES</span>
</a>
@endsection