@extends('layouts.app')

@section('template_title')
    Profesore
@endsection

@section('content')
<div class="container-fluid">
    <div class="row">
        <div class="col-sm-12">
            <div class="card">
                <div class="card-header">
                    <div style="display: flex; justify-content: space-between; align-items: center;">
                        <span id="card_title">
                            {{ __('Profesores') }}
                            (Total: {{ $profesores->total() }})
                        </span>

                        <div class="float-right">
                            <a href="{{ route('profesores.create') }}" class="btn btn-primary btn-sm float-right"  data-placement="left">
                                {{ __('Create New') }}
                            </a>
                        </div>
                    </div>
                </div>
                @if ($message = Session::get('success'))
                    <div class="alert alert-success">
                        <p>{{ $message }}</p>
                    </div>
                @endif

                <div class="card-body">
                    <div class="row">
                        @foreach ($profesores as $profesore)
                            <div class="col-md-4">
                                <div class="card">
                                    <div class="card-body">
                                        <h5 class="card-title">{{ $profesore->nombre }} {{ $profesore->apellido }}</h5>
                                        <p class="card-text">
                                            <strong>Cedula:</strong> {{ $profesore->cedula }}<br>
                                            <strong>Email:</strong> {{ $profesore->email }}<br>
                                            <strong>Telefono:</strong> {{ $profesore->telefono }}<br>
                                            <strong>carrera:</strong> {{ $profesore->carrera }}<br>
                                        </p>
                                    </div>
                                    <div class="card-footer">
                                        <form action="{{ route('profesores.destroy',$profesore->id) }}" method="POST">
                                            <a class="btn btn-sm btn-primary" href="{{ route('profesores.show',$profesore->id) }}"><i class="fa fa-fw fa-eye"></i> {{ __('Show') }}</a>
                                            <a class="btn btn-sm btn-success" href="{{ route('profesores.edit',$profesore->id) }}"><i class="fa fa-fw fa-edit"></i> {{ __('Edit') }}</a>
                                            @csrf
                                            @method('DELETE')
                                            <button type="submit" class="btn btn-danger btn-sm"><i class="fa fa-fw fa-trash"></i> {{ __('Delete') }}</button>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        @endforeach
                    </div>
                </div>
            </div>
            {!! $profesores->links() !!}
        </div>
    </div>
</div>

@endsection
