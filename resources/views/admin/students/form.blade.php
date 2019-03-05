@extends('layouts.backend.master')

@section('pagetitle','Add New Student Form')

@push('css')
	{{-- expr --}}
@endpush

@section('main-content')

	<div class="panel panel-default border-panel card-view">
		<div class="panel-heading">
			<div class="pull-left">
				<h6 class="panel-title txt-dark">Reverse custom tab 2</h6>
			</div>
			<div class="clearfix"></div>
		</div>
		<div class="panel-wrapper collapse in">
			<div class="panel-body">
				<p class="text-muted">Default version of tab add <code>tab-struct nav-tab-reverse custom-tab-2</code> class.</p>
				<div  class="tab-struct nav-tab-reverse custom-tab-2 mt-40">
					<ul role="tablist" class="nav nav-tabs" id="myTabs_16">
						<li class="active" role="presentation"><a aria-expanded="true"  data-toggle="tab" role="tab" id="home_tab_16" href="#home_16">active</a></li>
						<li role="presentation" class=""><a  data-toggle="tab" id="profile_tab_16" role="tab" href="#profile_16" aria-expanded="false">inactive</a></li>
						<li class="dropdown" role="presentation">
							<a  data-toggle="dropdown" class="dropdown-toggle" id="myTabDrop_16" href="#" aria-expanded="false">Dropdown <span class="caret"></span></a>
							<ul id="myTabDrop_16_contents"  class="dropdown-menu">
								<li class=""><a  data-toggle="tab" id="dropdown_31_tab" role="tab" href="#dropdown_31" aria-expanded="true">@fat</a></li>
								<li class=""><a data-toggle="tab" id="dropdown_32_tab" role="tab" href="#dropdown_32" aria-expanded="false">@mdo</a></li>
							</ul>
						</li>
					</ul>
					<div class="tab-content" id="myTabContent_16">
						<div  id="home_16" class="tab-pane fade active in" role="tabpanel">
							<p>Lorem ipsum dolor sit amet, et pertinax ocurreret scribentur sit, eum euripidis assentior ei. In qui quodsi maiorum, dicta clita duo ut. Fugit sonet quo te. Ad vel quando causae signiferumque. Aperiam luptatum senserit eu vis, eu ius purto torquatos vituperatoribus.An nec fastidii eligendi molestiae.</p>
						</div>
						<div  id="profile_16" class="tab-pane fade" role="tabpanel">
							<p>Food truck fixie locavore, accusamus mcsweeney's marfa nulla single-origin coffee squid. Exercitation +1 labore velit, blog sartorial PBR leggings next level wes anderson artisan four loko farm-to-table craft beer twee.</p>
						</div>
						<div  id="dropdown_31" class="tab-pane fade " role="tabpanel">
							<p>Etsy mixtape wayfarers, ethical wes anderson tofu before they sold out mcsweeney's organic lomo retro fanny pack lo-fi farm-to-table readymade.</p>
						</div>
						<div  id="dropdown_32" class="tab-pane fade" role="tabpanel">
							<p>Trust fund seitan letterpress, keytar raw denim keffiyeh etsy art party before they sold out master cleanse gluten-free squid scenester freegan cosby sweater.</p>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>

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