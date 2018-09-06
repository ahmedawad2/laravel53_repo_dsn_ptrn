@extends('admin.layouts.master')

@section('title', 'Modules')

@section('content')
    <ul>
        @each('admin.partials.module', $modules, 'module', 'admin.partials.emptyModules')
    </ul>
    <hr />
    <div>
        <p>here, i will print the value of both: global shared variable, and custom one shared to this view only</p>
        <p>Global: {{$globalVar}}</p>
        <p>Custom: {{$customVar}}</p>
        <p>custom to group: {{$customToGroup}}</p>
        <p>from a viewComposerClass: {{$fromClass}}</p>
    </div>
@endsection

