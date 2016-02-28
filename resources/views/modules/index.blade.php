@extends('layouts.app')

@section('content')

    <div class="container">

        <h1 class="pull-left">Modules</h1>
        <a class="btn btn-primary pull-right" style="margin-top: 25px" href="{!! route('modules.create') !!}">Add New</a>

        <div class="clearfix"></div>

        @include('flash::message')

        <div class="clearfix"></div>

        @if($modules->isEmpty())
            <div class="well text-center">No Modules found.</div>
        @else
            @include('modules.table')
        @endif
        
    </div>
@endsection