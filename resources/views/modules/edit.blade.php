@extends('layouts.app')

@section('content')
    <div class="container">

        <div class="row">
            <div class="col-sm-12">
                <h1 class="pull-left">Create New Module</h1>
            </div>
        </div>

        @include('core-templates::common.errors')

        <div class="row">
            {!! Form::model($module, ['route' => ['modules.update', $module->id], 'method' => 'patch']) !!}

            @include('modules.fields')

            {!! Form::close() !!}
        </div>
    </div>
@endsection