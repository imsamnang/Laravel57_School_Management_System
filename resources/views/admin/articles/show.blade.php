@extends('layouts.backend.master')

@section('main-content')

  <div class="card">
      <div class="card-header">Article {{ $article->id }}</div>
      <div class="card-body">

          <a href="{{ url('/admin/articles') }}" title="Back"><button class="btn btn-warning btn-sm"><i class="fa fa-arrow-left" aria-hidden="true"></i> Back</button></a>
          <a href="{{ url('/admin/articles/' . $article->id . '/edit') }}" title="Edit Article"><button class="btn btn-primary btn-sm"><i class="fa fa-pencil-square-o" aria-hidden="true"></i> Edit</button></a>

          <form method="POST" action="{{ url('admin/articles' . '/' . $article->id) }}" accept-charset="UTF-8" style="display:inline">
              {{ method_field('DELETE') }}
              {{ csrf_field() }}
              <button type="submit" class="btn btn-danger btn-sm" title="Delete Article" onclick="return confirm(&quot;Confirm delete?&quot;)"><i class="fa fa-trash-o" aria-hidden="true"></i> Delete</button>
          </form>
          <br/>
          <br/>

          <div class="table-responsive">
              <table class="table">
                  <tbody>
                      <tr>
                          <th>ID</th><td>{{ $article->id }}</td>
                      </tr>
                      <tr><th> Title </th><td> {{ $article->title }} </td></tr><tr><th> Body </th><td> {{ $article->body }} </td></tr><tr><th> Status </th><td> {{ $article->status }} </td></tr>
                  </tbody>
              </table>
          </div>

      </div>
  </div>

@endsection
