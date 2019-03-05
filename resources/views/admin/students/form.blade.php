@extends('layouts.backend.master')

@section('pagetitle','Add New Student Form')

@push('css')
	{{-- expr --}}
@endpush

@section('main-content')

	<div class="col-md-12">
		<div class="panel panel-default border-panel card-view">
			<div class="panel-heading">
				<div class="pull-left">
					<h6 class="panel-title txt-dark">with two columns</h6>
				</div>
				<div class="clearfix"></div>
			</div>
			<div class="panel-wrapper collapse in">
				<div class="panel-body">
					<div class="row">
						<div class="col-sm-12 col-xs-12">
							<div class="form-wrap">
								<form action="#">
									<div class="form-body">
										<h6 class="txt-dark capitalize-font"><i class="zmdi zmdi-account mr-10"></i>Person's Info</h6>
										<hr class="light-grey-hr"/>
										<div class="row">
											<div class="col-md-6">
												<div class="form-group">
													<label class="control-label mb-10">First Name</label>
													<input type="text" id="firstName" class="form-control" placeholder="John doe">
													<span class="help-block"> This is inline help </span> 
												</div>
											</div>
											<!--/span-->
											<div class="col-md-6">
												<div class="form-group has-error">
													<label class="control-label mb-10">Last Name</label>
													<input type="text" id="lastName" class="form-control" placeholder="12n">
													<span class="help-block"> This field has error. </span> 
												</div>
											</div>
											<!--/span-->
										</div>
										<!-- /Row -->
										<div class="row">
											<div class="col-md-6">
												<div class="form-group">
													<label class="control-label mb-10">Gender</label>
													<select class="form-control">
														<option value="">Male</option>
														<option value="">Female</option>
													</select>
													<span class="help-block"> Select your gender </span> 
												</div>
											</div>
											<!--/span-->
											<div class="col-md-6">
												<div class="form-group">
													<label class="control-label mb-10">Date of Birth</label>
													<input type="text" class="form-control" placeholder="dd/mm/yyyy">
												</div>
											</div>
											<!--/span-->
										</div>
										<!-- /Row -->
										<div class="row">
											<div class="col-md-6">
												<div class="form-group">
													<label class="control-label mb-10">Category</label>
													<select class="form-control" data-placeholder="Choose a Category" tabindex="1">
														<option value="Category 1">Category 1</option>
														<option value="Category 2">Category 2</option>
														<option value="Category 3">Category 5</option>
														<option value="Category 4">Category 4</option>
													</select>
												</div>
											</div>
											<!--/span-->
											<div class="col-md-6">
												<div class="form-group">
													<label class="control-label mb-10">Membership</label>
													<div class="radio-list">
														<div class="radio-inline pl-0">
															<span class="radio radio-info">
																<input type="radio" name="radio5" id="radio_5" value="option1">
														<label for="radio_5">Option 1</label>
														</span>
														</div>
														<div class="radio-inline">
															<span class="radio radio-info">
																<input type="radio" name="radio5" id="radio_6" value="option2">
														<label for="radio_6">Option 2 </label>
														</span>
														</div>
													</div>
												</div>
											</div>
											<!--/span-->
										</div>
										<!-- /Row -->
										
										<div class="seprator-block"></div>
										
										<h6 class="txt-dark capitalize-font"><i class="zmdi zmdi-account-box mr-10"></i>address</h6>
										<hr class="light-grey-hr"/>
										<div class="row">
											<div class="col-md-12 ">
												<div class="form-group">
													<label class="control-label mb-10">Street</label>
													<input type="text" class="form-control">
												</div>
											</div>
										</div>
										<div class="row">
											<div class="col-md-6">
												<div class="form-group">
													<label class="control-label mb-10">City</label>
													<input type="text" class="form-control">
												</div>
											</div>
											<!--/span-->
											<div class="col-md-6">
												<div class="form-group">
													<label class="control-label mb-10">State</label>
													<input type="text" class="form-control">
												</div>
											</div>
											<!--/span-->
										</div>
										<!-- /Row -->
										<div class="row">
											<div class="col-md-6">
												<div class="form-group">
													<label class="control-label mb-10">Post Code</label>
													<input type="text" class="form-control">
												</div>
											</div>
											<!--/span-->
											<div class="col-md-6">
												<div class="form-group">
													<label class="control-label mb-10">Country</label>
													<select class="form-control">
														<option>--Select your Country--</option>
														<option>India</option>
														<option>Sri Lanka</option>
														<option>USA</option>
													</select>
												</div>
											</div>
											<!--/span-->
										</div>
									</div>
									<div class="form-actions mt-10">
										<button type="submit" class="btn btn-success  mr-10"> Save</button>
										<button type="button" class="btn btn-default">Cancel</button>
									</div>
								</form>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>		
	</div>

@endsection

@push('css')
	{{-- expr --}}
@endpush