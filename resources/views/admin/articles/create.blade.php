@extends('layouts.backend.master')

@section('main-content')

  <div class="card">
      <div class="card-header">Create New Article</div>
      <div class="card-body">
          <a href="{{ url('/admin/articles') }}" title="Back"><button class="btn btn-warning btn-sm"><i class="fa fa-arrow-left" aria-hidden="true"></i> Back</button></a>
          <br />
          <br />

          @if ($errors->any())
              <ul class="alert alert-danger">
                  @foreach ($errors->all() as $error)
                      <li>{{ $error }}</li>
                  @endforeach
              </ul>
          @endif

          <form method="POST" action="{{ url('/admin/articles') }}" accept-charset="UTF-8" class="form-horizontal" enctype="multipart/form-data">
              {{ csrf_field() }}

              @include ('admin.articles.form', ['formMode' => 'create'])

          </form>

      </div>
  </div>

@endsection
