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
						<input type="text" name="pod" class="form-control" placeholder="Type your Present Address">
					</div>
				</div>
				<div class="col-md-4">
					<div class="form-group">
						<label >ទូរស័ព្ទ:</label>
						<input type="text" name="pod" class="form-control" placeholder="Type your Present Address">
					</div>
				</div>
				<div class="col-md-4">
					<div class="form-group">
						<label >អ៊ីម៉ែល:</label>
						<input type="text" name="pod" class="form-control" placeholder="Type your Present Address">
					</div>
				</div>
			</div>
		</div>
		<div class="col-md-12">
			<div class="row">
				<div class="col-md-4">
					<div class="form-group">
						<label >ទីលំនៅអាណាព្យាបាល:</label>
						<input type="text" name="pod" class="form-control" placeholder="Type your Present Address">
					</div>
				</div>
				<div class="col-md-4">
					<div class="form-group">
						<label >ផ្សេងពីទីលំនៅអចិន្ត្រៃ:</label>
						<input type="text" name="pod" class="form-control" placeholder="Type your Present Address">
					</div>
				</div>
				<div class="col-md-4">
					<div class="form-group">
						<label >Photo:</label>
						<input type="text" name="pod" class="form-control" placeholder="Type your Present Address">
					</div>
				</div>
			</div>
		</div>			
		</fieldset>
		{{-- End Personal Data --}}
		<h6>កម្រិតវប្បធម៌ទូទៅ និងការអបរំ និងបណ្តុះបណ្តាល</h6>	
		<fieldset>
			<div class="row">
				<div class="col-md-12">					
					<div class="row">						
						<div class="col-md-6">
							<div class="form-group">
								<label>Family Name:</label>
								<input type="text" name="familytname" class="form-control" placeholder="Type your family name here">
							</div>
						</div>
						<div class="col-md-6">
							<div class="form-group">
								<label>Firs Name:</label>
								<input type="text" name="firstname" class="form-control" placeholder="Type your first name here">
							</div>
						</div>				
					</div>
				
				</div>

				<div class="col-md-6">
					<div class="row">
						<div class="col-md-3">
							<div class="form-group">
								<label >Gender:</label>
								<select name="source" data-placeholder="Choose an option..." class="form-control form-control-select2" data-fouc >
									<option></option> 
									<option value="choose">Choose here</option> 
									<option value="male">Male</option> 
									<option value="femal">Female</option> 
									<option value="other">Other</option> 
									
								</select>
							</div>
						</div>
						<div class="col-md-9">
							<label>Date of birth:</label>
							<div class="row">
								<div class="col-md-4">
									<div class="form-group">
										<select name="birth-month" data-placeholder="Month" class="form-control form-control-select2" data-fouc>
											<option></option>
											<option value="1">January</option>
											<option value="2">February</option>
											<option value="3">March</option>
											<option value="4">April</option>
											<option value="5">May</option>
											<option value="6">June</option>
											<option value="7">July</option>
											<option value="8">August</option>
											<option value="9">September</option>
											<option value="10">October</option>
											<option value="11">November</option>
											<option value="12">December</option>
										</select>
									</div>
								</div>

								<div class="col-md-4">
									<div class="form-group">
										<select name="birth-day" data-placeholder="Day" class="form-control form-control-select2" data-fouc>
											<option></option>
											<option value="1">1</option>
											<option value="2">2</option>
											<option value="3">3</option>
											<option value="4">4</option>
											<option value="5">5</option>
											<option value="6">6</option>
											<option value="7">7</option>
											<option value="8">8</option>
											<option value="9">9</option>
											<option value="...">...</option>
											<option value="31">31</option>
										</select>
									</div>
								</div>

								<div class="col-md-4">
									<div class="form-group">
										<select name="birth-year" data-placeholder="Year" class="form-control form-control-select2" data-fouc>
											<option></option>
											<option value="1">1980</option>
											<option value="2">1981</option>
											<option value="3">1982</option>
											<option value="4">1983</option>
											<option value="5">1984</option>
											<option value="6">1985</option>
											<option value="7">1986</option>
											<option value="8">1987</option>
											<option value="9">1988</option>
											<option value="10">1989</option>
											<option value="11">1990</option>
										</select>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>

			<div class="row">
				<div class="col-md-6">
					<div class="row">
						<div class="col-md-6">
							<div class="form-group">
								<label>Identified Card ID:</label>
								<input type="text" name="identified_card_id" class="form-control" placeholder="Identified Card ID">
							</div>
						</div>
						<div class="col-md-6">
							<div class="form-group">
								<label>Student ID:</label>
								<input type="text" name="identified_card_id" class="form-control" placeholder="Type Student ID">
							</div>
						</div>
					</div>
				</div>

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
			</div>
			<div class="row">
				<div class="col-md-6">
					<div class="form-group">
						<label >Transportation:</label>
						<select name="source" data-placeholder="Choose an option..." class="form-control form-control-select2" data-fouc >
							<option></option> 
							<option value="monster">Choose here</option> 
							<option value="linkedin">Tuk Tuk</option> 
							<option value="google">Own Car</option> 
							<option value="adwords">Motobike</option> 
							<option value="other">Bycicle</option>
						</select>
					</div>
				</div>
				<div class="col-md-6">
					<div class="form-group">
						<label>Place Of Birth:</label>
						<input type="text" name="pod" class="form-control" placeholder="Type your place of birth">
					</div>
				</div>
			</div>

			<div class="row">
				<div class="col-md-6">
					<div class="form-group">
						<label>Precent Address:</label>
						<input type="text" name="pod" class="form-control" placeholder="Type your Present Address">
					</div>
				</div>
				<div class="col-md-6">
					<div class="row">
						<div class="col-md-6">
							<div class="form-group">
								<label>Guardian Name:</label>
								<input type="text" name="familytname" class="form-control" placeholder="Guardian name">
							</div>
						</div>
						<div class="col-md-6">
							<div class="form-group">
								<label>Guardian Phone Number:</label>
								<input type="text" name="firstname" class="form-control" placeholder="Guardian Phone Number">
							</div>
						</div>
					</div>
				</div>
			</div>
			<div class="row">
				<div class="col-md-6">
					<div class="form-group">
						<label>Guardian Address:</label>
						<input type="text" name="pod" class="form-control" placeholder="Type your Present Address">
					</div>
				</div>
				<div class="col-md-6">
					<div class="form-group">
						<label class="d-block">Recommendations:</label>
						<input name="recommendations" type="file" class="form-input-styled" data-fouc>
						<span class="form-text text-muted">Accepted formats: pdf, doc. Max file size 2Mb</span>
					</div>
				</div>
			</div>				
		</fieldset>

		<h6>ព័ត៌មានការងារ</h6>
		<fieldset>
			<div class="row">
				<div class="col-md-6">
					<div class="form-group">
						<label >Education:</label>
						<select name="source" data-placeholder="Choose an option..." class="form-control form-control-select2" data-fouc >
							<option></option> 
							<option value="monster">Choose here</option> 
							<option value="linkedin">MBA</option> 
							<option value="google">MD</option> 
							<option value="adwords">Deploma</option> 
						</select>
					</div>
				</div>
				
				<div class="col-md-6">
					<label>Are you studying a general culture class?:</label>
					<div class="row">
						<div class="col-md-2">

								<div class="form-group">
									
									<div class="form-check">
										<label class="form-check-label">
											<input type="radio" name="availability" class="form-input-styled" data-fouc>
											Yes
										</label>
									</div>

									
								</div>
						</div>
						<div class="col-md-2">
							<div class="form-group">
								<div class="form-check">
										<label class="form-check-label">
											<input type="radio" name="availability" class="form-input-styled" data-fouc>
											No	
										</label>	
								</div>
							</div>
						</div>
						<div class="col-md-4">
							<div class="form-group">
								<input type="text" name="pod" class="form-control" placeholder="Year">
							</div>
						</div>


					</div>
				</div>					
			</div>
			<div class="row">
				<div class="col-md-12">
					<div class="row">
						<div class="col-md-2">
							<div class="form-group">
									<label>Program Name - Course:</label>
									<input type="text" name="experience-company" placeholder="" class="form-control">
							</div>
						</div>
						<div class="col-md-2">
							<div class="form-group">
								<label >TVET?:</label>
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
								<label >Lavel:</label>
								<select name="source" data-placeholder="Choose an option..." class="form-control form-control-select2" data-fouc >
									<option></option> 
									<option value="choose">Choose here</option> 
									<option value="short-course">Short Course</option>
									
								</select>
							</div>
						</div>
						<div class="col-md-1">
							<div class="form-group">
									<label>Year:</label>
									<input type="text" name="experience-company" placeholder="" class="form-control">
							</div>
						</div>
						<div class="col-md-2">
							<div class="form-group">
									<label>School Name:</label>
									<input type="text" name="experience-company" placeholder=" " class="form-control">
							</div>
						</div>

						<div class="col-md-3">
							<div class="form-group">
									<label>Place of School:</label>
									<input type="text" name="experience-company" placeholder=" " class="form-control">
							</div>
						</div>


					</div>
				</div>
			</div>

			<div class="row">
				<div class="col-md-6">
					<div class="row">
						<div class="col-md-6">
							<div class="form-group">
								<label >Job status:</label>
								<select name="source" data-placeholder="Choose an option..." class="form-control form-control-select2" data-fouc >
									<option></option> 
									<option value="choose">Choose here</option> 
									<option value="male">Yes</option> 
									<option value="femal">No</option> 
								</select>
							</div>
						</div>
						<div class="col-md-6">
							<div class="form-group">
									<label>What is your job?:</label>
									<input type="text" name="experience-company" placeholder=" " class="form-control">
							</div>
						</div>
					</div>
				</div>
				<div class="col-md-6">
					<div class="row">
						<div class="col-md-6">
							<div class="form-group">
								<label >Type of wage:</label>
								<select name="source" data-placeholder="Choose an option..." class="form-control form-control-select2" data-fouc >
									<option></option> 
									<option value="choose">Choose here</option> 
									<option value="male">Monthly</option> 
									<option value="femal">Weekly</option> 
								</select>
							</div>
						</div>
						<div class="col-md-6">
							<div class="form-group">
									<label>Monthly Personal Income (in USD):</label>
									<input type="text" name="experience-company" placeholder=" " class="form-control">
							</div>
						</div>
					</div>
				</div>
			</div>
			<div class="row">
				<div class="col-md-6">
					<div class="form-group">
								<label >Type of work:</label>
								<select name="source" data-placeholder="Choose an option..." class="form-control form-control-select2" data-fouc >
									<option></option> 
									<option value="choose">Choose here</option> 
									<option value="bose">Bose</option> 
									<option value="simple staff">Simple Staff</option>
								</select>
						</div>
				</div>
				<div class="col-md-6">
					<div class="form-group">
							<label>Monthly Personal Income (in USD):</label>
							<input type="text" name="experience-company" placeholder=" " class="form-control">
					</div>
				</div>
			</div>

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

		<h6>ការបញ្ចេញព័ត៌មានដោយស្ម័គ្រចិត្</h6>
		<fieldset>
			<div class="row">
				<div class="col-md-6">
					<div class="form-group">
						<label >Education:</label>
						<select name="source" data-placeholder="Choose an option..." class="form-control form-control-select2" data-fouc >
							<option></option> 
							<option value="monster">Choose here</option> 
							<option value="linkedin">MBA</option> 
							<option value="google">MD</option> 
							<option value="adwords">Deploma</option> 
						</select>
					</div>
				</div>
				
				<div class="col-md-6">
					<label>Are you studying a general culture class?:</label>
					<div class="row">
						<div class="col-md-2">

								<div class="form-group">
									
									<div class="form-check">
										<label class="form-check-label">
											<input type="radio" name="availability" class="form-input-styled" data-fouc>
											Yes
										</label>
									</div>

									
								</div>
						</div>
						<div class="col-md-2">
							<div class="form-group">
								<div class="form-check">
										<label class="form-check-label">
											<input type="radio" name="availability" class="form-input-styled" data-fouc>
											No	
										</label>	
								</div>
							</div>
						</div>
						<div class="col-md-4">
							<div class="form-group">
								<input type="text" name="pod" class="form-control" placeholder="Year">
							</div>
						</div>


					</div>
				</div>					
			</div>
			<div class="row">
				<div class="col-md-12">
					<div class="row">
						<div class="col-md-2">
							<div class="form-group">
									<label>Program Name - Course:</label>
									<input type="text" name="experience-company" placeholder="" class="form-control">
							</div>
						</div>
						<div class="col-md-2">
							<div class="form-group">
								<label >TVET?:</label>
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
								<label >Lavel:</label>
								<select name="source" data-placeholder="Choose an option..." class="form-control form-control-select2" data-fouc >
									<option></option> 
									<option value="choose">Choose here</option> 
									<option value="short-course">Short Course</option>
									
								</select>
							</div>
						</div>
						<div class="col-md-1">
							<div class="form-group">
									<label>Year:</label>
									<input type="text" name="experience-company" placeholder="" class="form-control">
							</div>
						</div>
						<div class="col-md-2">
							<div class="form-group">
									<label>School Name:</label>
									<input type="text" name="experience-company" placeholder=" " class="form-control">
							</div>
						</div>

						<div class="col-md-3">
							<div class="form-group">
									<label>Place of School:</label>
									<input type="text" name="experience-company" placeholder=" " class="form-control">
							</div>
						</div>


					</div>
				</div>
			</div>

			<div class="row">
				<div class="col-md-6">
					<div class="row">
						<div class="col-md-6">
							<div class="form-group">
								<label >Job status:</label>
								<select name="source" data-placeholder="Choose an option..." class="form-control form-control-select2" data-fouc >
									<option></option> 
									<option value="choose">Choose here</option> 
									<option value="male">Yes</option> 
									<option value="femal">No</option> 
								</select>
							</div>
						</div>
						<div class="col-md-6">
							<div class="form-group">
									<label>What is your job?:</label>
									<input type="text" name="experience-company" placeholder=" " class="form-control">
							</div>
						</div>
					</div>
				</div>
				<div class="col-md-6">
					<div class="row">
						<div class="col-md-6">
							<div class="form-group">
								<label >Type of wage:</label>
								<select name="source" data-placeholder="Choose an option..." class="form-control form-control-select2" data-fouc >
									<option></option> 
									<option value="choose">Choose here</option> 
									<option value="male">Monthly</option> 
									<option value="femal">Weekly</option> 
								</select>
							</div>
						</div>
						<div class="col-md-6">
							<div class="form-group">
									<label>Monthly Personal Income (in USD):</label>
									<input type="text" name="experience-company" placeholder=" " class="form-control">
							</div>
						</div>
					</div>
				</div>
			</div>
			<div class="row">
				<div class="col-md-6">
					<div class="form-group">
								<label >Type of work:</label>
								<select name="source" data-placeholder="Choose an option..." class="form-control form-control-select2" data-fouc >
									<option></option> 
									<option value="choose">Choose here</option> 
									<option value="bose">Bose</option> 
									<option value="simple staff">Simple Staff</option>
								</select>
						</div>
				</div>
				<div class="col-md-6">
					<div class="form-group">
							<label>Monthly Personal Income (in USD):</label>
							<input type="text" name="experience-company" placeholder=" " class="form-control">
					</div>
				</div>
			</div>

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
	</form>

  </div>

@endsection

@push('css')
	{{-- expr --}}
@endpush