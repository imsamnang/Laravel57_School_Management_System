@extends('layouts.backend.master')
@section('pagetitle','Insert Form')
@section('header','Insert Teacher Data')
@section('page_header','Insert Teacher Data')
@push('css')

@endpush
@section('main-content')

<div class="card">
	<div class="card-header bg-gray header-elements-inline" style="background-color: #26a69a;">
		<h6 class="card-title">ចុះឈ្មោះបុគ្គលិកទម្រង់ (S1)</h6>
		<div class="header-elements">
			<div class="list-icons">
				<a class="list-icons-item" data-action="collapse"></a>
				<a class="list-icons-item" data-action="reload"></a>
				<a class="list-icons-item" data-action="remove"></a>
			</div>
		</div>
	</div>
	<form class="wizard-form steps-basic" action="#" data-fouc method="post" enctype="multipart/form-data">
		<h6>ជីវប្រវត្ត</h6>	
		<fieldset>
    <b><legend>Please Insert Your Personal information Below</legend></b>
			<div class="row">
				<div class="col-lg-6 col-md-6 col-sm-12">

          <div class="form-group">
            <label for="first_name">First Name (Kh)</label>
            <input type="text" class="form-control" id="first_name" placeholder="Enter First Name" name="txt_firstnamekh" required>
          </div>

					<div class="form-group">
						<label for="first_name">First Name</label>
						<input type="text" class="form-control" id="first_name" placeholder="Enter First Name" name="txt_firstname" required>
					</div>

					<div class="form-group">
						<label for="sel1">Select Gender</label>
						<select class="form-control" id="sel1" name="cbo_gender" required>
							<option selected="disabled">Select Your Gender</option>
							<option value="">Male</option>
							<option value="">Female</option>
						</select>
					</div>

					<div class="form-group">
						<label for="pob">Place Of Birth</label>
						<textarea rows="5" name="txt_pob" class="form-control" required></textarea>
					</div>

					<div class="form-group">
						<label for="last_name">Techer Identity Card</label>
						<input type="text" class="form-control" id="teacher_identity" placeholder="Enter Identity Card" name="txt_teacher-identity">
					</div>

					<div class="form-group">
						<label for="sel1">Marital Status</label>
						<select class="form-control" id="marital_status" name=" cbo_marital-status" required>
							<option selected="disabled">Select Your Marital Status</option>
							<option value="">Single</option>
							<option value="">Married</option>
							<option value="">Window</option>
							<option value="">Disvorc</option>
						</select>
					</div>

					<div class="form-group">
						<label for="ministry_id">Ministry Official ID</label>
						<input type="text" class="form-control" id="txt_ministry-id" placeholder="Enter Your Ministry Official ID" name="ministry_id">
					</div>


					<div class="form-group">
						<label for="e-mail">E-mail</label>
						<input type="e-mail" class="form-control" id="e-mail" placeholder="Enter Your E-mail" name="txt_email">
					</div>

					<div class="form-group">
						<label for="contact_name">Emergency Contact Name</label>
						<input type="text" class="form-control" id="contact_name" placeholder="Enter Your Emergency Contact Name" name="txt_contact-name">
					</div>


					<div class="form-group">
						<label for="pob">Emergency Contact Address</label>
						<textarea id="my-editor2" name="txt_contact-address" rows="7" class="form-control"></textarea>
					</div>
				</div>

				<div class="col-lg-6 col-md-6 col-sm-12">

          <div class="form-group">
            <label for="last_name">Last Name (Kh)</label>
            <input type="text" class="form-control" id="last_name" placeholder="Enter Last Name" name="txt_lastnamekh" required>
          </div>

					<div class="form-group">
						<label for="last_name">Last Name</label>
						<input type="text" class="form-control" id="last_name" placeholder="Enter Last Name" name="txt_lastname" required>
					</div>


					<div class="form-group">
						<label for="dob">Date Of Birth</label>
						<input type="date" class="form-control" id="date" placeholder="Enter Your Date Of Birth" name="dob" required>
					</div>

					<div class="form-group">
						<label for="present_address">Present Address</label>
						<textarea rows="5" name="txt_present-address" class="form-control" required></textarea>
					</div>

					<div class="form-group">
						<label for="people_family">People In Family</label>
						<input type="text" class="form-control" id="people_family" placeholder="Enter the people in your family?" name="txt_people-family">
					</div>

					<div class="form-group">
						<label for="govement_id">Government Official ID</label>
						<input type="text" class="form-control" id="government_id" placeholder="Enter Your Government Official ID" name="txt_government-id">
					</div>


					<div class="form-group">
						<label for="phone_number">Personal Phone Numbers</label>
						<input type="text" class="form-control" id="phone_number" placeholder="Enter Your Phone Numbers" name="txt_phone-number">
					</div>

					<div class="form-group">
						<label for="phone_number">Family Phone Numbers</label>
						<input type="text" class="form-control" id="phone_number" placeholder="Enter Your Family Numbers" name="txt_family-phone">
					</div>


					<div class="form-group">
						<label for="contact_phone">Emergency Contact Phone</label>
						<input type="text" class="form-control" id="contact_phone" placeholder="Enter Your Emergency Contact Phone" name="txt_emergency_phone">
					</div>

					<div class="form-group">
						<label for="exampleFormControlFile1">Choose Your Image</label>
            <input type='file' onchange="readURL(this);" name="image" width="100%" style="margin-bottom: 5px;" />
            <img id="blah" src="http://placehold.it/180" alt="your image" width="100" height="110" />
					</div>
				</div>
			</div>
		</fieldset>
    
		<h6>ព័ត៌មានការងា</h6>
		<fieldset>
      <b><legend>Please Insert Your Job information Below</legend></b>
			<div class="row">
                <div class="col-lg-6 col-md-6 col-sm-12">
                    <div class="form-group">
                      <label for="e-mail">Start Work</label>
                      <input type="date" class="form-control" id="date" placeholder="Enter Your Start Work" name="start_work" required>
                    </div>

                    <div class="form-group">
                        <label for="sel1">Choose Your Job Type</label>
                        <select class="form-control" id="role" name="job_type" required>
                          <option selected="disabled">Select Your Job</option>
                          <option value="">Teacher</option>
                          <option value="">Admin</option>
                          <option value="">Director</option>
                          <option value="">Cheif</option>
                          <option value="">Cleaner</option>
                        </select>
                    </div>
                </div>

                <div class="col-lg-6 col-md-6 col-sm-12">
                    <div class="form-group">
                      <label for="e-mail">End Work</label>
                      <input type="date" class="form-control" id="date" placeholder="Enter Your End Work" name="end_work" required>
                    </div>

                    <div class="form-group">
                        <label for="sel1">Choose Your Duty Type</label>
                        <select class="form-control" id="duty_type" name="duty_type" required>
                          <option selected="disabled">Select Your Duty Type</option>
                          <option value="">Teach</option>
                          <option value="">Not Teach</option>
                        </select>
                    </div>
                </div>

                <div class="col-lg-4 col-md-4 col-sm-12">
                      <div class="form-group">
                        <label for="sel1">Working Time</label>
                        <select class="form-control" id="work_time" name="work_time" required>
                          <option selected="disabled">Select Your Work Time</option>
                          <option value="">Part Time</option>
                          <option value="">Full Time</option>
                        </select>
                    </div>
                </div>

                <div class="col-lg-4 col-md-4 col-sm-12">
                    <div class="form-group">
                      <label for="contact_phone">Contrat Value (Riel/Dollar)</label>
                      <input type="text" class="form-control" id="contrat_value" placeholder="Enter Your Contrat Value" name="contrat_value">
                    </div>
                </div>

                <div class="col-lg-4 col-md-4 col-sm-12">
                      <div class="form-group">
                        <label for="sel1">None Teaching Staff Main</label>
                        <select class="form-control" id="none_teach" name="none_teach">
                          <option selected="disabled">Select Your None Teaching Staff Main</option>
                          <option value="">Director</option>
                          <option value="">Librarien</option>
                          <option value="">Cleaner</option>
                          <option value="">Chief</option>
                        </select>
                    </div>
                </div>
        </div>
		</fieldset>

		<h6>ការអប់រំ និងបណ្តុះបណ្តាល</h6>
		<fieldset>
      <b><legend>Please Insert Your Education and Training Below</legend></b>
			<div class="row">
                <div class="col-lg-6 col-md-6 col-sm-12">
                    <div class="form-group">
                        <label for="sel1">General Knowledge</label>
                        <select class="form-control" id="knowledge" name="knowledge" required>
                          <option selected="disabled">Select Your Level</option>
                          <option value="">Grade 9</option>
                          <option value="">Grade 10</option>
                          <option value="">Grade 11</option>
                          <option value="">Grade 12</option>
                          <option value="">Year 1</option>
                          <option value="">Year 2</option>
                          <option value="">Year 3</option>
                          <option value="">Year 4</option>
                          <option value="">Bachulor Degree</option>
                          <option value="">Master</option>
                        </select>
                    </div>

                    <div class="form-group">
                      <label for="e-mail">Course Or Program Archieved</label>
                      <input type="text" class="form-control" id="course" placeholder="Enter Your Program Archieved" name="course">
                    </div>

                    <div class="form-group">
                      <label for="Year">Year</label>
                      <input type="text" class="form-control" id="year" placeholder="Enter Your Program Archieved Year" name="year">
                    </div>
                </div>

                <div class="col-lg-6 col-md-6 col-sm-12">
                    <div class="form-group">
                        <label for="sel1">Foreign Language</label>
                        <select class="form-control" id="knowledge" name="knowledge" required>
                          <option selected="disabled">Select Your Level</option>
                          <option value="">English</option>
                          <option value="">Franch</option>
                          <option value="">Chinese</option>
                        </select>
                    </div>

                    <div class="form-group">
                        <label for="sel1">Course Type</label>
                        <select class="form-control" id="knowledge" name="course_type">
                          <option selected="disabled">Choose One</option>
                          <option value="">Short Course</option>
                          <option value="">Bachelor</option>
                          <option value="">Master</option>
                        </select>
                    </div>

                    <div class="form-group">
                      <label for="Year">School Name</label>
                      <input type="text" class="form-control" id="school_name" placeholder="Enter Your School Name" name="school_name">
                    </div>
                </div>

                <div class="col-lg-12 col-md-12 col-sm-12">
                    <div class="form-group">
                        <label for="contact_address">Location</label>
                        <textarea class="form-control" rows="4" id="location" name="location"></textarea>
                    </div>
                </div>
      </div>
		</fieldset>

		<h6>គុណវុឌ្ឍិ</h6>
		<fieldset>
      <b><legend>Please Insert Your Qualifications Below</legend></b>
			<div class="row">
				<div class="col-lg-6 col-md-6 col-sm-12">
					<div class="form-group">
                        <label for="sel1">Teacher Exam</label>
                        <select class="form-control" id="knowledge" name="teacher_exam">
                          <option selected="disabled">Choose One</option>
                          <option value="">MoEYS Primary</option>
                          <option value="">MoEYS Secorndary</option>
                          <option value="">MoEYS Advanced</option>
                        </select>
                    </div>

                    <div class="form-group">
                        <label for="sel1">Member of professional Association</label>
                        <select class="form-control" id="knowledge" name="member_association">
                          <option selected="disabled">Choose One</option>
                          <option value="">None</option>
                          <option value="">Cambodia Teacher Association</option>
                          <option value="">Board of Engineers</option>
                        </select>
                    </div>
				</div>
				<div class="col-lg-6 col-md-6 col-sm-12">
					<div class="form-group">
                      <label for="Year">Experien Of Teaching</label>
                      <input type="text" class="form-control" id="school_name" placeholder="Enter Your Experien Teaching" name="experien_teach">
                    </div>

                    <div class="form-group">
                      <label for="Year">Other Experien</label>
                      <input type="text" class="form-control" id="other_experien" placeholder="Enter Your Experien Teaching" name="other_experien">
                    </div>
				</div>
			</div>
		</fieldset>

		<h6>ប្រវត្តិការងារ (សូមបំពេញពីថ្មីទៅចាស់)</h6>
		<fieldset>
      <b><legend>Please Insert Your Employment History (latest first) Below</legend></b>
			<div class="row">
				      <div class="col-lg-6 col-md-6 col-sm-12">
					         <div class="form-group">
                      <label for="Year">Position</label>
                      <input type="text" class="form-control" id="position" placeholder="Enter Your Position" name="position">
                    </div>

                    <div class="form-group">
                      <label for="e-mail">Start Date</label>
                      <input type="date" class="form-control" id="date" placeholder="Enter Your Start Date" name="start_date">
                    </div>
				      </div>
				      <div class="col-lg-6 col-md-6 col-sm-12">
					         <div class="form-group">
                      <label for="Year">Organization</label>
                      <input type="text" class="form-control" id="organization" placeholder="Enter Your Organization" name="organization">
                    </div>

                    <div class="form-group">
                      <label for="e-mail">End Date</label>
                      <input type="date" class="form-control" id="date" placeholder="Enter Your End Date" name="end_date">
                    </div>
				      </div>
              <div class="col-lg-12 col-md-12 col-sm-12">
                    <div class="form-group">
                        <label for="pob">Work Location</label>
                        <textarea  name="work_lacation" rows="4" class="form-control"></textarea>
                    </div>
              </div>
			</div>
		</fieldset>
	</form>
</div>

@endsection
@push('js')
  {{-- <script>
    CKEDITOR.replace('my-editor1', options);
  </script> --}}
@endpush
