@extends('admin.layouts.master')

@section('title', 'Modules')

@section('content')
    <ul>
        @each('admin.partials.module', $modules, 'module', 'admin.partials.emptyModules')
    </ul>
@endsection