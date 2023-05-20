@extends('layouts.app')

@section('template_title')
    Dashboard
@endsection

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-4">
            <div class="card">
                <div class="card-header">
                    Estudiantes
                </div>
                <div class="card-body">
                    <h1>Total de Estudiantes: {{ $totalEstudiantes }}</h1>
                </div>
            </div>
        </div>
        <div class="col-md-4">
            <div class="card">
                <div class="card-header">
                    Carreras
                </div>
                <div class="card-body">
                    <h1>Total de Carreras: {{ $totalCarreras }}</h1>
                </div>
            </div>
        </div>
        <div class="col-md-4">
            <div class="card">
                <div class="card-header">
                    Profesores
                </div>
                <div class="card-body">
                    <h1>Total de Profesores: {{ $totalProfesores }}</h1>
                </div>
            </div>
        </div>
        <div class="col-md-4">
            <div class="card">
                <div class="card-header">
                    Coordinadores
                </div>
                <div class="card-body">
                    <h1>Total de Coordinadores: {{ $totalCoordinadores }}</h1>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection
