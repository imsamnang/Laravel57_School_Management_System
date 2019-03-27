@extends('layouts.backend.master')
@section('pagetitle','Insert Category')
@section('header','Insert Category Data')
@section('page_header','Insert Category Data')
@push('css')

@endpush
@section('main-content')
<div class="card">
	<div class="card-header bg-gray header-elements-inline" style="background-color: #26a69a;">
		<h6 class="card-title">Insert Category</h6>
		<div class="header-elements">
			<div class="list-icons">
				<a class="list-icons-item" data-action="collapse"></a>
				<a class="list-icons-item" data-action="reload"></a>
				<a class="list-icons-item" data-action="remove"></a>
			</div>
		</div>
	</div>
	<form class="wizard-form steps-basic" action="#" data-fouc method="post" enctype="multipart/form-data">
		<div class="row" style="margin-left: 15px; margin-top: 15px;">
			<div class="col-lg-6 col-md-6 col-sm-12">
				<div class="form-group">
					<label for="first_name">Title</label>
					<input type="text" class="form-control" id="first_name" placeholder="Enter First Name" name="txt_title" required>
				</div>

				<div class="form-group">
					<label for="first_name">Category Name</label>
					<input type="text" class="form-control" id="first_name" placeholder="Enter First Name" name="txt_category-name" required>
				</div>
			</div>
			<br><br>
			<div class="col-lg-6 col-md-6 col-sm-12">
				<div class="form-group">
					<label for="exampleFormControlFile1">Choose Your Image</label>
					<input type='file' onchange="readURL(this);" name="image" width="100%" style="margin-bottom: 5px;" />
					<img id="blah" src="http://placehold.it/180" alt="your image" width="100" height="110" />
				</div>
			</div>
		</div>
	</form>
</div>

@endsection
@push('js')


@endpush