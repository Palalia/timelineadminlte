@extends('layouts.app')

@section('content')
        @extends('adminlte::page')
        @section('title', 'timeline')
        @section('content')
    <div class="row gx-3 gy-2">
        {{-- incidencias --}}
        <div class="col-md-3">
            <x-adminlte-small-box title="424" text="Incidencias" icon="fas fa-eye text-dark" theme="teal" url="#" url-text="View details"/>   
        </div>
        {{-- Inasistencias --}}
        <div class="col-md-3">
        <x-adminlte-small-box title="528" text="Inasistencias" icon="fas fa-user-plus text-teal" theme="primary" url="#" url-text="View all users"/>
        </div>
        {{-- Updatable --}}
        <div class="col-md-3">
        <x-adminlte-small-box title="0" text="TimeLines Recibidos" icon="fas fa-medal text-dark" theme="danger" url="#" url-text="Reputation history" id="sbUpdatable"/>
        </div>
    </div>
        @stop        
@endsection
