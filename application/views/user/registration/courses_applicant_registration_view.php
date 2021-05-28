<!-- <body id="page-top" style='background-color:#f9f6f1;'>

  <form>
      <div class="row justify-content-center">
        <div class="col-12 col-md-8 col-lg-8 col-xl-6">
          <div class="row">
            <div class="col text-center pt-4">
              <h2 style="color:black; font-weight:700">Course Applicants Registration Form</h2>
            </div>
          </div> -->

<!-- University Short Profile -->
<!-- <div class="form-outline mt-4">
            <textarea class="form-control" rows="3" name="uni_shortprofile" placeholder="Applicant Address" required></textarea>
          </div> -->

<!--Logo & University Name -->
<!-- <div class="row align-items-center mt-3">
          <div class="col">
              <input type="text" class="form-control" name="uni_name" placeholder="Applicant Identification" required>
            </div>
            <div class="col">
              <div class="custom-file">
                <input type="file" class="custom-file-input" id="customFile" name="uni_logo" required>
                <label class="custom-file-label" for="customFile">Applicant Document</label>
              </div>
            </div>
          </div> -->

<!-- Term and Conditions & Register Button -->
<!-- <div class="row justify-content-start mt-4">
            <div class="col">
              <div class="form-check">
                <label class="form-check-label">
                  <input type="checkbox" class="form-check-input" required>
                  I Read and Accept <a href="https://newinti.edu.my/legal/privacy/">Terms and Conditions</a>
                </label>
              </div>
              <button type="submit" class="btn btn-success mt-4" style="float:right; width:23%;">Apply</i></button>
            </div>
          </div>
        </div>
      </div>
  </form> -->


<!-- <script>
    $(".custom-file-input").on("change", function() {
      var fileName = $(this).val().split("\\").pop();
      $(this).siblings(".custom-file-label").addClass("selected").html(fileName);
    });
  </script> -->


<!-- Jquery plugin -->
<script src="<?php echo base_url() ?>/assets/vendor/jquery/jquery.min.js"></script>


<!-- Page level custom scripts -->

<!-- Set base url to javascript variable-->
<script type="text/javascript">
	var base_url = "<?php echo base_url(); ?>";
</script>

<style>
	/* .number {
		overflow: hidden;
		text-align: center;
	}

	.number:before,
	.number:after {
		background-color: #000;
		content: "";
		display: inline-block;
		height: 1px;
		position: relative;
		vertical-align: middle;
		width: 70%;
	}

	.number:before {
		right: 0.7em;
		margin-left: -90%;
	}

	.number:after {
		left: 0.7em;
		margin-right: -20%;
	} */
</style>

<body id="page-top" style='background-color:#f9f6f1;'>

	<!-- Page Wrapper -->
	<div id="wrapper">

		<!-- Content Wrapper -->
		<div id="content-wrapper" class="d-flex flex-column">

			<!-- Main Content -->
			<div id="content">

				<!-- Begin Page Content -->
				<div class="container-fluid ">

					<!-- Cards for registration -->
					<div class="row justify-content-md-center pt-5" style='background-color:#f9f6f1;'>

						<!-- Steps -->
						<div class="col-xl-3">
							<div class="card h-100" id='card1'>
								<div class="card-body" style="background-color:#DAE7E0">

									<div class="pl-3 pr-3 pt-1">
										<div class="pl-4" style="font-size:16px; font-weight:700; color:black;"></div>
										<div class="" style="font-size:30px; color:green; font-weight:900; text-align:center;">Personal Data</div>

										<fieldset disabled>
											<div class="form-group pt-2">
												<input type="text" id="disabledTextInput" class="form-control" placeholder="Last Name: <?php echo $this->session->userdata('user_lname') ?>">
											</div>
											<div class="form-group">
												<input type="text" id="disabledTextInput" class="form-control" placeholder="First Name: <?php echo $this->session->userdata('user_fname') ?>">
											</div>
											<div class="form-group">
												<input type="text" id="disabledTextInput" class="form-control" placeholder="Gender: <?php echo $student_data->student_gender; ?>">
											</div>
										</fieldset>

									</div>
								</div>
							</div>
						</div>

						<!-- Form -->
						<div class="col-xl-5 ">
							<div class="card h-100" id='card2'>
								<div class=" card-body">
									<center>
										<div class="pt-5 px-5" style="font-size:23px; letter-spacing: 8px; color:#787878; font-weight:700;">COURSES APPLICANT REGISTRATION PAGE</div>
									</center>
									<!-- Input fields (Form) -->
									<form>
										<!-- Application Identification -->
										<div class="form-row pt-3 px-3">
											<div class="form-group col-md-12 px-2">
												<input type="text" name="ac_phonenumber" class="form-control border-bottom" id="ac_phonenumber" style="border: 0;" placeholder="Enter applicant identification" required>
											</div>
										</div>
										<!-- Applicant Address -->
										<div class="form-row pt-3 px-3">
											<div class="form-group col-md-12 px-2">
												<input type="text" name="ac_nationality" class="form-control border-bottom" id="ac_nationality" style="border: 0;" placeholder="Enter applicant address" required>
											</div>
										</div>
										<!-- Upload Document -->
										<div class="form-row pt-4 px-4">
											<div class="form-group col-md-12 px-2">
												<input type="file" class="custom-file-input" id="form-group" name="ac_document" required>
												<label class="custom-file-label" for="customFile">Upload Document</label>
											</div>
										</div>
										<!-- Terms & Condition -->
										<div class="row justify-content-start mt-4 ml-2">
											<div class="col">
												<div class="form-check">
													<label class="form-check-label">
														<input type="checkbox" class="form-check-input" required>
														I Read and Accept <a href="https://newinti.edu.my/legal/privacy/">Terms and Conditions</a>
													</label>
												</div>
												<!-- Submit button -->
												<div class="pt-2 pr-3">
													<button type="submit" class="btn btn-success" style="float:right; width:23%;">Submit <i class="fas fa-check"></i></button>
												</div>

									</form>
									<!-- End of Input fields (Form) -->
								</div>
							</div>
						</div>

					</div>
					<!-- END OF ROW -->
					<!-- END OF FORM -->
				</div>
				<!-- /.container-fluid -->
			</div>
			<!-- End of Main Content -->

			<script>
				// File appear on select
				$(".custom-file-input").on("change", function() {
					var fileName = $(this).val().split("\\").pop();
					$(this).siblings(".custom-file-label").addClass("selected").html(fileName);
				});
			</script>