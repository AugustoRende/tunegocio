@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">Dashboard</div>

                <div class="panel-body">
                    @if (session('status'))
                        <div class="alert alert-success">
                            {{ session('status') }}
                        </div>
                    @endif

                    Bienvenido {{ $user->name }}!
                </div>
            </div>
        </div>
    </div>

    {{-- SI NO TIENE EL TEMA SETEADO LE MUESTRO LA SECCIÓN DE SELECCIÓN --}}
    @includeWhen(!$user->theme_id,'themes')

    {{-- SI TIENE EL TEMA SETEADO LE MUESTRO LA EDICIÓN DE LOS CAMPOS--}}
    @includeWhen($user->theme_id,'theme_edit')
</div>
@endsection
