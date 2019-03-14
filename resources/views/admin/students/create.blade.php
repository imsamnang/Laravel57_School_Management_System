@extends('layouts.backend.master')

@section('pagetitle','Add New Student Form')

@push('css')
	{{-- expr --}}
@endpush

@section('main-content')

  <div class="card">

  	<div class="card-header bg-white header-elements-inline">
  		<h6 class="card-title">ចុះឈ្មោះសិស្ស (ទម្រង់ T1)</h6>
  		<div class="header-elements">
  			<div class="list-icons">
  				<a class="list-icons-item" data-action="collapse"></a>
  				<a class="list-icons-item" data-action="reload"></a>
  				<a class="list-icons-item" data-action="remove"></a>
  			</div>
  		</div>
  	</div>

	<form class="wizard-form steps-basic form-horizontal" action="#" data-fouc>
		<h6>ជីវប្រវត្តិសិស្ស</h6>	
		<fieldset>
			<div class="form-group">
				<fieldset class="the-fieldset">
					<legend class="the-legend">(A) Biographic Data</legend>							
					<div class="form-group row">
						<label class="col-form-label col-lg-2">នាមត្រកូល​:</label>
						<div class="col-lg-4">
							<input type="text" class="form-control">
						</div>
						<label class="col-form-label col-lg-2">នាមខ្លួន:</label>
						<div class="col-lg-4">
							<input type="text" class="form-control">
						</div>
						{{-- English Name --}}
						<label class="col-form-label col-lg-2">Family Name:</label>
						<div class="col-lg-4">
							<input type="text" class="form-control">
						</div>
						<label class="col-form-label col-lg-2">Firs Name:</label>
						<div class="col-lg-4">
							<input type="text" class="form-control">
						</div>
					</div>
					{{-- Row2 --}}
					<div class="form-group row">
							<label class="col-form-label col-lg-2">Gender:</label>
							<div class="col-lg-4">
								<select name="gender" data-placeholder="Choose gender" class="form-control form-control-select2 " data-fouc >
									<option></option> 
									<option value="male">Male</option> 
									<option value="femal">Female</option>					
								</select>
							</div>			
							<label class="col-form-label col-lg-2">Date Of Birth:</label>
							<div class="col-lg-4">
								<input type="text" name="dob" class="form-control">
							</div>
					</div>
					{{-- Row3 --}}
					<div class="form-group row">
							<label class="col-form-label col-lg-2">លេខអត្តសញ្ញាប័ណ្ណ:</label>
							<div class="col-lg-4">
								<input type="text" name="identified_card_id" class="form-control">
							</div>			
							<label class="col-form-label col-lg-2">អត្ថលេខសិស្ស/StuID:</label>
							<div class="col-lg-4">
								<input type="text" name="student_id" class="form-control">
							</div>
					</div>
					{{-- Row4 --}}
					<div class="row">		
							<div class="col-md-6">
								<div class="row">
									<div class="col-md-4">
										<div class="form-group">
											<label >Number of family:</label>
											<input type="text" name="student_id" class="form-control" placeholder="Number"??? > 
										</div>
									</div>
									<div class="col-md-4">
										<div class="form-group">
											<label>Travel Distance:</label>
											<input type="text" name="student_id" class="form-control" placeholder="Km">
										</div>
									</div>
									<div class="col-md-4">
										<div class="form-group">
											<label >Family Situation:</label>
											<select name="source" data-placeholder="Choose an option..." class="form-control form-control-select2" data-fouc >
												<option></option> 
												<option value="monster">Choose here</option> 
												<option value="linkedin">Single</option> 
												<option value="google">Married</option> 
												<option value="adwords">Divorce</option> 
												<option value="other">Widow/Widower</option>
											</select>
										</div>
									</div>
								</div>
							</div>
							<div class="row">
							<div class="col-md-12">
								<div class="form-group">
									<label >Transportation:</label>
									<select name="source" data-placeholder="Choose Transportation..." class="form-control form-control-select2" data-fouc >
										<option></option> 
										<option value="monster">Choose here</option> 
										<option value="linkedin">Tuk Tuk</option> 
										<option value="google">Own Car</option> 
										<option value="adwords">Motobike</option> 
										<option value="other">Bycicle</option>
									</select>
								</div>
							</div>		
					</div>
					<div class="col-md-12">
						<div class="row">
						<div class="col-md-6">
							<div class="form-group">
								<label>Precent Address:</label>
								<input type="text" name="pod" class="form-control" placeholder="Type your Present Address">
							</div>
						</div>
						<div class="col-md-6">
							<div class="form-group">
								<label>Precent Address:</label>
								<input type="text" name="pod" class="form-control" placeholder="Type your Present Address">
							</div>
						</div>
					</div>			
					</div>
					{{-- Option Address --}}		
					<div class="col-md-12">
						<div class="row">
							<div class="col-md-4">
								<div class="form-group">
									<label >Province:</label>
									<select name="source" data-placeholder="Choose Province..." class="form-control form-control-select2" data-fouc >
										<option></option> 
										<option value="monster">Choose here</option> 
										<option value="linkedin">Single</option> 
										<option value="google">Married</option> 
										<option value="adwords">Divorce</option> 
										<option value="other">Widow/Widower</option>
									</select>
								</div>
							</div>
							<div class="col-md-4">
								<div class="form-group">
									<label >District:</label>
									<select name="source" data-placeholder="Choose district..." class="form-control form-control-select2" data-fouc >
										<option></option> 
										<option value="monster">Choose here</option> 
										<option value="linkedin">Single</option> 
										<option value="google">Married</option> 
										<option value="adwords">Divorce</option> 
										<option value="other">Widow/Widower</option>
									</select>
								</div>
							</div>
							<div class="col-md-4">
								<div class="form-group">
									<label >Communce:</label>
									<select name="source" data-placeholder="Choose an option..." class="form-control form-control-select2" data-fouc >
										<option></option> 
										<option value="monster">Choose here</option> 
										<option value="linkedin">Single</option> 
										<option value="google">Married</option> 
										<option value="adwords">Divorce</option> 
										<option value="other">Widow/Widower</option>
									</select>
								</div>
							</div>
						</div>
					</div>
					<div class="col-md-12">
						<div class="row">
							<div class="col-md-4">
								<div class="form-group">
									<label >ឈ្មោះអាណាព្យាបាល:</label>
									<input type="text" name="pod" class="form-control" placeholder="បំពេញឈ្មោះអាណាព្យាបាល">
								</div>
							</div>
							<div class="col-md-4">
								<div class="form-group">
									<label >ទូរស័ព្ទ:</label>
									<input type="text" name="pod" class="form-control" placeholder="បំពេញទូរស័ព្ទ...">
								</div>
							</div>
							<div class="col-md-4">
								<div class="form-group">
									<label >អ៊ីម៉ែល:</label>
									<input type="text" name="pod" class="form-control" placeholder="បំពេញសារអេឡិចត្រូនិក">
								</div>
							</div>
						</div>
					</div>
					<div class="col-md-12">
						<div class="row">
							<div class="col-md-4">
								<div class="form-group">
									<label >ទីលំនៅអាណាព្យាបាល:</label>
{{-- 									<label >												
										<input type="radio" name="rd_parent_address" value="1" checked="checked">
										ដូចនឹងទីលំនៅអចិន្ត្រៃយ៍ 
										<input type="radio" name="rd_parent_address" value="0">
										ផ្សេងពីទីលំនៅអចិន្ត្រៃយ៍
									</label>			 --}}	
									<div class="form-check form-check-switch form-check-switch-left">
										<label class="form-check-label d-flex align-items-center">
											ដូចនឹងទីលំនៅអចិន្ត្រៃយ៍ &nbsp; 
											<input type="checkbox" data-off-color="danger" data-on-text="Yes" data-off-text="No" class="form-check-input-switch" checked id="btnswitch">
										</label>
									</div>
								</div>
							</div>
							<div class="col-md-4">
								<div class="form-group">
										<label >ភូមិ/ឃុំ/ស្រុក/ខេត្ត​</label>
										<input type="text" name="txt_parent_other" value="" class="form-control" placeholder="ទីលំនៅអាណាព្យាបាល​ផ្សេងពីទីលំនៅអចិន្ត្រៃ" id="parent_other">
									
								</div>
							</div>
							<div class="col-md-4">
								<div class="form-group">
									<label >រូបថត:</label>
                    <input name="recommendations" type="file" class="form-input-styled" data-fouc>
                    <span class="form-text text-muted">Accepted formats: .png, .jpg, .bmp Max file size 2Mb</span>
                </div>
							</div>
						</div>
					</div>
				</fieldset>
			</div>	
		</fieldset>
		{{-- End Personal Data --}}

		<h6>កម្រិតវប្បធម៌ទូទៅ និងការអបរំ និងបណ្តុះបណ្តាល</h6>	
		<fieldset>
			<div class="row">				
				<div class="col-md-12">	
					<div class="form-group">
							<fieldset class="the-fieldset">
								<legend class="the-legend">(B) General Education</legend>
									<div class="row">						
											<div class="col-md-4">
												<div class="form-group">
													<label>General Education:</label>
													<select name="cbo_general_education" class="form-control">
															<option value="0">Choose one</option>
															<option value="22">Illiterate</option>
															<option value="1"> 1</option>
															<option value="2"> 2</option>
															<option value="3"> 3</option>
															<option value="4"> 4</option>
															<option value="5"> 5</option>
															<option value="6"> 6</option>
															<option value="7"> 7</option>
															<option value="8"> 8</option>
															<option value="9"> 9</option>
															<option value="10"> 10</option>
															<option value="11"> 11</option>
															<option value="12"> 12</option>
														</select>													
												</div>
											</div>
											<div class="col-md-6">
												<label for=""><strong>Student Currently Enrolled in General Education?</strong></label>
												<div >
														<input type="radio" name="rd_enrol_ge" value="1" checked="checked">
														YES <br>
														<input type="radio" name="rd_enrol_ge" value="0">
														NO
														. Last year attending
														<input type="text" id="txt_last_year_enrol" name="txt_last_year_enrol" value="" class="classinput" maxlength="4" style="width: 60px; hight:30px; padding:5px;">
												</div>
											</div>															
									</div>							
							</fieldset>
					</div>			
				</div>	
			</div>
			<div class="form-group">
				<fieldset class="the-fieldset">
					<legend class="the-legend">(C) Further Education & Training</legend>
					<div class="row">
							<div class="col-md-2">
									<div class="form-group">
										<label>Course/Program Name</label>
										<input type="text" name="pod" class="form-control" placeholder="Course name..">
									</div>
							</div>
							<div class="col-md-2">
									<div class="form-group">
										<label >TVET?</label>
										<select name="source" data-placeholder="Choose an option..." class="form-control form-control-select2" data-fouc >
											<option value="yes">Yes</option> 
											<option value="no">No</option> 
										</select>
									</div>
							</div>
							<div class="col-md-2">
									<div class="form-group">
										<label >Course Type</label>
										<select name="source" data-placeholder="Choose an option..." class="form-control form-control-select2" data-fouc >
											<option value="yes">C1</option> 
											<option value="no">C2</option> 
										</select>
									</div>
							</div>
							<div class="col-md-1">
									<div class="form-group">
										<label>Year</label>
										<input type="text" name="pod" class="form-control" placeholder="2019" maxlength="4">
									</div>
							</div>
							{{--  School Name	  --}}
							<div class="col-md-2">
									<div class="form-group">
										<label>School Name</label>
										<input type="text" name="pod" class="form-control" placeholder="School Name here.." ">
									</div>
							</div>
							{{--  Location	  --}}
							<div class="col-md-2">
									<div class="form-group">
										<label>Location</label>
										<input type="text" name="pod" class="form-control" placeholder="Complete Location" >
									</div>
							</div>
							{{--  add/del  --}}
							
							<div class="col-md-1">
									<div class="form-group">
										<label>Add/Del</label>	
										<span class="badge bg-info"><img src="{{asset('assets/backend/global_assets/images/add.png')}}" class="student_course_add_row" height="14" width="14"></span>
										<span class="badge bg-info"><img src="{{asset('assets/backend/global_assets/images/remove.png')}}" class="student_course_remove_row" height="14" width="14"></span>
									</div>
							</div>
					</div>
				</fieldset>
			</div>				
		</fieldset>
		<h6>ព័ត៌មានការងារ</h6>
		<fieldset>
				<div class="form-group">
					<fieldset class="the-fieldset">
						<legend class="the-legend">(D) Employment Information</legend>
						<div class="row">
								<div class="col-md-3">
										<div class="form-group">
											<label >Employment Status:</label>
											<select name="source" data-placeholder="Choose an option..." class="form-control form-control-select2" data-fouc >
												<option></option> 
												<option value="choose">Choose here</option> 
												<option value="male">Yes</option> 
												<option value="femal">No</option> 
											</select>
										</div>
								</div>
								<div class="col-md-3">
										<div class="form-group">
											<label >What is your job?</label>
											<input type="text" name="experience-company" placeholder=" " class="form-control">

											
										</div>
								</div>
								<div class="col-md-4">
										<div class="form-group">
												<label>Employment Remuneration Type</label>
												<select name="source" data-placeholder="Choose an option..." class="form-control form-control-select2" data-fouc >
														<option></option> 
														<option value="choose">Choose here</option> 
														<option value="male">Yes</option> 
														<option value="femal">No</option> 
													</select>
										</div>
								</div>
								<div class="col-md-2">
										<div class="form-group">
												<label>Personal Monthly Income:</label>
												<input type="text" name="experience-company" placeholder=" " class="form-control">
										</div>
								</div>
								<br>
								<div class="col-md-4">
										<div class="form-group">
												<label>Employment Type:</label>
												<select name="source" data-placeholder="Choose an option..." class="form-control form-control-select2" data-fouc >
														<option></option> 
														<option value="choose">Choose here</option> 
														<option value="male">Yes</option> 
														<option value="femal">No</option> 
													</select>
										</div>
								</div>
								<div class="col-md-2">
										<div class="form-group">
												<label>Family Monthly Income:</label>
												<input type="text" name="experience-company" placeholder=" " class="form-control">
										</div>
								</div>
							
							</div>			
					</fieldset>
				</div>
			
		</fieldset>

		<h6>ការបញ្ចេញព័ត៌មានដោយស្ម័គ្រចិត្</h6>
		<fieldset>
				<div class="form-group">
					<fieldset class="the-fieldset">
						<legend class="the-legend">(E) Voluntary Disclosure</legend>
						<div class="row">
								<div class="col-md-4">
									<div class="row">
										<div class="col-md-6">
											<div class="form-group">
												<label >reason for preventing job:</label>
												<select name="source" data-placeholder="Choose an option..." class="form-control form-control-select2" data-fouc >
													<option></option> 
													<option value="choose">Choose here</option> 
													<option value="sick">Sick</option> 
													<option value="notime">Not enough time</option> 
												</select>
											</div>
										</div>
										<div class="col-md-6">
											<div class="form-group">
												<label >Are you an orphan?</label>
												<select name="source" data-placeholder="Choose an option..." class="form-control form-control-select2" data-fouc >
													<option></option> 
													<option value="choose">Choose here</option> 
													<option value="yes">Yes</option> 
													<option value="no">No</option> 
												</select>
											</div>
										</div>
									</div>
								</div>
								<div class="col-md-8">
									<div class="row">
										<div class="col-md-4">
											<div class="form-group">
												<label >Disability type:</label>
												<select name="source" data-placeholder="Choose an option..." class="form-control form-control-select2" data-fouc >
													<option></option> 
													<option value="choose">Choose here</option> 
													<option value="see">Seeing</option> 
													<option value="animate">Animate</option> 
												</select>
											</div>
										</div>
										<div class="col-md-4">
											<div class="form-group">
												<label >When was the disability?</label>
												<select name="source" data-placeholder="Choose an option..." class="form-control form-control-select2" data-fouc >
													<option></option> 
													<option value="choose">Choose here</option> 
													<option value="was-born">Children</option> 
													<option value="adult">adult</option> 
												</select>
											</div>
										</div>
										<div class="col-md-4">
											<div class="form-group">
												<label >Indigenous peoples</label>
												<select name="source" data-placeholder="Choose an option..." class="form-control form-control-select2" data-fouc >
													<option></option> 
													<option value="koy">Koy</option> 
													<option value="was-born">phnong</option> 
													<option value="adult">Tompong</option> 
												</select>
											</div>
										</div>
									</div>
								</div>
								
							</div>			
					</fieldset>
				</div>
		</fieldset>
	</form>

  </div>

@endsection

@push('css')
	{{-- expr --}}
@endpush