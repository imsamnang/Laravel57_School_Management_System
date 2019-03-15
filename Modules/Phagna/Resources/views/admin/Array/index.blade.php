@extends('admin::layouts.master')

@sestion('pagetitle','Dashboard Master Page')

@push('css')

@endpush

@section('main-content')
    <h1>Hello World</h1>
    <p>
        This view is loaded from module: {!! config('phagna.name') !!}
    </p>
@endsection

@push('js')

@endpush
