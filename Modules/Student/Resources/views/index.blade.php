@extends('admin::layouts.master')

@section('main-content')
    <h1>Hello World</h1>

    <p>
        This view is loaded from module: {!! config('student.name') !!}
    </p>
@stop
