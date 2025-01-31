<!-- Jquery plugin -->
<script src="<?php echo base_url() ?>/assets/vendor/jquery/jquery.min.js"></script>

<script>
//Js to remove alert message after university information is edited
setTimeout(function() {
    $('#alert_message').fadeOut();
}, 5000); // <-- time in milliseconds
</script>

<!-- Set base url to javascript variable-->
<script type="text/javascript">
    var base_url = "<?php echo base_url();?>";
</script>
<!-- Content Wrapper -->
<div id="content-wrapper" >

<!-- Main Content -->
<div id="content">    
    
    <!-- Begin Page Content -->
    <div class="container-fluid">

        <!-- Page Heading -->
        <div class="d-sm-flex align-items-center justify-content-between mb-4">
            <h1 class="h3 mb-0 text-gray-800">Add Course Applicant</h1>
        </div>

        <!-- Breadcrumb -->
        <div class="row" >
            <div class="breadcrumb-wrapper col-xl-9">
                <ol class="breadcrumb" style = "background-color:rgba(0, 0, 0, 0);">
                    <li class="breadcrumb-item">
                        <a href="<?= base_url('internal/level_2/education_agent/ea_dashboard'); ?>"><i class="fas fa-tachometer-alt"></i> Home</a>
                    </li>
                    <li class="breadcrumb-item">
                        <a href="<?= base_url('internal/level_2/education_agent/ea_course_application'); ?>"></i>Course Applications</a>
                    </li>
                    <li class="breadcrumb-item active">Add Course Applicant</li>
                </ol>
            </div>
            <div class = "col-xl-3">
                <div class = "d-flex justify-content-end">
                    <a type="button" href = "<?= base_url('internal/level_2/education_agent/ea_course_application'); ?>" class="btn btn-primary">Back<i class="fas fa-undo pl-1"></i></a>
                </div>
            </div>
        </div>

        <!-- Outer Row -->
        <div class="row justify-content-center">

            <div class="col-lg-9">

                <div class="card o-hidden border-0 shadow-lg my-5">
                    <div class="card-body p-0">
                        <!-- Nested Row within Card Body -->
                        <div class="row">
                           
                            <div class="col-lg">
                                <div class="p-5">                   
                                        <center>
                                        <div class="pt-5 px-5" style="font-size:23px; letter-spacing: 8px; color:#787878; font-weight:700;">COURSES APPLICANT REGISTRATION PAGE</div>
                                        </center>
                                        <?=$this->session->flashdata('message')?> 

                                          <!-- Input fields (Form) -->
                                        <form method="post" action="<?= base_url('internal/level_2/education_agent/ea_course_application/submit_added_course_applicant');?>" enctype="multipart/form-data">
										<?= form_open_multipart('') ?>

                                        <!--Student first Name -->
                                        <div class="form-row pt-3 px-3">
											<div class="form-group col-md-6 px-2">
												<input type="text" name="c_applicant_fname" class="form-control border-bottom" id="c_applicant_fname" style="border: 0;" placeholder="Enter Student First Name" required>
											</div>
                                            <div class="form-group col-md-6 px-2">
												<input type="text" name="c_applicant_lname" class="form-control border-bottom" id="c_applicant_lname" style="border: 0;" placeholder="Enter Student Last Name" required>
											</div>
										</div>

                                        <!--Phone Number-->
                                        <div class="form-row pt-3 px-3">
											<div class="form-group col-md-12 px-2">
												<input type="number" name="c_applicant_phonenumber" class="form-control border-bottom" id="c_applicant_phonenumber" style="border: 0;" placeholder="Enter Student Phone Number" required>
											</div>
										</div>

                                        <!--Email Address-->
                                        <div class="form-row pt-3 px-3">
											<div class="form-group col-md-12 px-2">
												<input type="email" name="c_applicant_email" class="form-control border-bottom" id="c_applicant_email" style="border: 0;" placeholder="Enter Student Email Address" required>
											</div>
                                        </div>

                                        <!--Student Nationality -->
                                        <div class="form-row pt-4 px-3">
                                        <div class="form-group col-md-12 px-2">
                                                <select name="c_applicant_nationality" id="c_applicant_nationality" class="form-control form-select border-bottom" style="border: 0; "required>
                                                    <option value="" selected disabled >Please Select Student Nationality</option>
                                                    <option value="Afghanistan">Afghanistan</option>
                                                    <option value="Åland Islands">Åland Islands</option>
                                                    <option value="Albania">Albania</option>
                                                    <option value="Algeria">Algeria</option>
                                                    <option value="American Samoa">American Samoa</option>
                                                    <option value="Andorra">Andorra</option>
                                                    <option value="Angola">Angola</option>
                                                    <option value="Anguilla">Anguilla</option>
                                                    <option value="Antarctica">Antarctica</option>
                                                    <option value="Antigua and Barbuda">Antigua and Barbuda</option>
                                                    <option value="Argentina">Argentina</option>
                                                    <option value="Armenia">Armenia</option>
                                                    <option value="Aruba">Aruba</option>
                                                    <option value="Australia">Australia</option>
                                                    <option value="Austria">Austria</option>
                                                    <option value="Azerbaijan">Azerbaijan</option>
                                                    <option value="Bahamas">Bahamas</option>
                                                    <option value="Bahrain">Bahrain</option>
                                                    <option value="Bangladesh">Bangladesh</option>
                                                    <option value="Barbados">Barbados</option>
                                                    <option value="Belarus">Belarus</option>
                                                    <option value="Belgium">Belgium</option>
                                                    <option value="Belize">Belize</option>
                                                    <option value="Benin">Benin</option>
                                                    <option value="Bermuda">Bermuda</option>
                                                    <option value="Bhutan">Bhutan</option>
                                                    <option value="Bolivia">Bolivia</option>
                                                    <option value="Bosnia and Herzegovina">Bosnia and Herzegovina</option>
                                                    <option value="Botswana">Botswana</option>
                                                    <option value="Bouvet Island">Bouvet Island</option>
                                                    <option value="Brazil">Brazil</option>
                                                    <option value="British Indian Ocean Territory">British Indian Ocean Territory</option>
                                                    <option value="Brunei Darussalam">Brunei Darussalam</option>
                                                    <option value="Bulgaria">Bulgaria</option>
                                                    <option value="Burkina Faso">Burkina Faso</option>
                                                    <option value="Burundi">Burundi</option>
                                                    <option value="Cambodia">Cambodia</option>
                                                    <option value="Cameroon">Cameroon</option>
                                                    <option value="Canada">Canada</option>
                                                    <option value="Cape Verde">Cape Verde</option>
                                                    <option value="Cayman Islands">Cayman Islands</option>
                                                    <option value="Central African Republic">Central African Republic</option>
                                                    <option value="Chad">Chad</option>
                                                    <option value="Chile">Chile</option>
                                                    <option value="China">China</option>
                                                    <option value="Christmas Island">Christmas Island</option>
                                                    <option value="Cocos (Keeling) Islands">Cocos (Keeling) Islands</option>
                                                    <option value="Colombia">Colombia</option>
                                                    <option value="Comoros">Comoros</option>
                                                    <option value="Congo">Congo</option>
                                                    <option value="Congo, The Democratic Republic of The">Congo, The Democratic Republic of The</option>
                                                    <option value="Cook Islands">Cook Islands</option>
                                                    <option value="Costa Rica">Costa Rica</option>
                                                    <option value="Cote D'ivoire">Cote D'ivoire</option>
                                                    <option value="Croatia">Croatia</option>
                                                    <option value="Cuba">Cuba</option>
                                                    <option value="Cyprus">Cyprus</option>
                                                    <option value="Czech Republic">Czech Republic</option>
                                                    <option value="Denmark">Denmark</option>
                                                    <option value="Djibouti">Djibouti</option>
                                                    <option value="Dominica">Dominica</option>
                                                    <option value="Dominican Republic">Dominican Republic</option>
                                                    <option value="Ecuador">Ecuador</option>
                                                    <option value="Egypt">Egypt</option>
                                                    <option value="El Salvador">El Salvador</option>
                                                    <option value="Equatorial Guinea">Equatorial Guinea</option>
                                                    <option value="Eritrea">Eritrea</option>
                                                    <option value="Estonia">Estonia</option>
                                                    <option value="Ethiopia">Ethiopia</option>
                                                    <option value="Falkland Islands (Malvinas)">Falkland Islands (Malvinas)</option>
                                                    <option value="Faroe Islands">Faroe Islands</option>
                                                    <option value="Fiji">Fiji</option>
                                                    <option value="Finland">Finland</option>
                                                    <option value="France">France</option>
                                                    <option value="French Guiana">French Guiana</option>
                                                    <option value="French Polynesia">French Polynesia</option>
                                                    <option value="French Southern Territories">French Southern Territories</option>
                                                    <option value="Gabon">Gabon</option>
                                                    <option value="Gambia">Gambia</option>
                                                    <option value="Georgia">Georgia</option>
                                                    <option value="Germany">Germany</option>
                                                    <option value="Ghana">Ghana</option>
                                                    <option value="Gibraltar">Gibraltar</option>
                                                    <option value="Greece">Greece</option>
                                                    <option value="Greenland">Greenland</option>
                                                    <option value="Grenada">Grenada</option>
                                                    <option value="Guadeloupe">Guadeloupe</option>
                                                    <option value="Guam">Guam</option>
                                                    <option value="Guatemala">Guatemala</option>
                                                    <option value="Guernsey">Guernsey</option>
                                                    <option value="Guinea">Guinea</option>
                                                    <option value="Guinea-bissau">Guinea-bissau</option>
                                                    <option value="Guyana">Guyana</option>
                                                    <option value="Haiti">Haiti</option>
                                                    <option value="Heard Island and Mcdonald Islands">Heard Island and Mcdonald Islands</option>
                                                    <option value="Holy See (Vatican City State)">Holy See (Vatican City State)</option>
                                                    <option value="Honduras">Honduras</option>
                                                    <option value="Hong Kong">Hong Kong</option>
                                                    <option value="Hungary">Hungary</option>
                                                    <option value="Iceland">Iceland</option>
                                                    <option value="India">India</option>
                                                    <option value="Indonesia">Indonesia</option>
                                                    <option value="Iran, Islamic Republic of">Iran, Islamic Republic of</option>
                                                    <option value="Iraq">Iraq</option>
                                                    <option value="Ireland">Ireland</option>
                                                    <option value="Isle of Man">Isle of Man</option>
                                                    <option value="Israel">Israel</option>
                                                    <option value="Italy">Italy</option>
                                                    <option value="Jamaica">Jamaica</option>
                                                    <option value="Japan">Japan</option>
                                                    <option value="Jersey">Jersey</option>
                                                    <option value="Jordan">Jordan</option>
                                                    <option value="Kazakhstan">Kazakhstan</option>
                                                    <option value="Kenya">Kenya</option>
                                                    <option value="Kiribati">Kiribati</option>
                                                    <option value="Korea, Democratic People's Republic of">Korea, Democratic People's Republic of</option>
                                                    <option value="Korea, Republic of">Korea, Republic of</option>
                                                    <option value="Kuwait">Kuwait</option>
                                                    <option value="Kyrgyzstan">Kyrgyzstan</option>
                                                    <option value="Lao People's Democratic Republic">Lao People's Democratic Republic</option>
                                                    <option value="Latvia">Latvia</option>
                                                    <option value="Lebanon">Lebanon</option>
                                                    <option value="Lesotho">Lesotho</option>
                                                    <option value="Liberia">Liberia</option>
                                                    <option value="Libyan Arab Jamahiriya">Libyan Arab Jamahiriya</option>
                                                    <option value="Liechtenstein">Liechtenstein</option>
                                                    <option value="Lithuania">Lithuania</option>
                                                    <option value="Luxembourg">Luxembourg</option>
                                                    <option value="Macao">Macao</option>
                                                    <option value="Macedonia, The Former Yugoslav Republic of">Macedonia, The Former Yugoslav Republic of</option>
                                                    <option value="Madagascar">Madagascar</option>
                                                    <option value="Malawi">Malawi</option>
                                                    <option value="Malaysia">Malaysia</option>
                                                    <option value="Maldives">Maldives</option>
                                                    <option value="Mali">Mali</option>
                                                    <option value="Malta">Malta</option>
                                                    <option value="Marshall Islands">Marshall Islands</option>
                                                    <option value="Martinique">Martinique</option>
                                                    <option value="Mauritania">Mauritania</option>
                                                    <option value="Mauritius">Mauritius</option>
                                                    <option value="Mayotte">Mayotte</option>
                                                    <option value="Mexico">Mexico</option>
                                                    <option value="Micronesia, Federated States of">Micronesia, Federated States of</option>
                                                    <option value="Moldova, Republic of">Moldova, Republic of</option>
                                                    <option value="Monaco">Monaco</option>
                                                    <option value="Mongolia">Mongolia</option>
                                                    <option value="Montenegro">Montenegro</option>
                                                    <option value="Montserrat">Montserrat</option>
                                                    <option value="Morocco">Morocco</option>
                                                    <option value="Mozambique">Mozambique</option>
                                                    <option value="Myanmar">Myanmar</option>
                                                    <option value="Namibia">Namibia</option>
                                                    <option value="Nauru">Nauru</option>
                                                    <option value="Nepal">Nepal</option>
                                                    <option value="Netherlands">Netherlands</option>
                                                    <option value="Netherlands Antilles">Netherlands Antilles</option>
                                                    <option value="New Caledonia">New Caledonia</option>
                                                    <option value="New Zealand">New Zealand</option>
                                                    <option value="Nicaragua">Nicaragua</option>
                                                    <option value="Niger">Niger</option>
                                                    <option value="Nigeria">Nigeria</option>
                                                    <option value="Niue">Niue</option>
                                                    <option value="Norfolk Island">Norfolk Island</option>
                                                    <option value="Northern Mariana Islands">Northern Mariana Islands</option>
                                                    <option value="Norway">Norway</option>
                                                    <option value="Oman">Oman</option>
                                                    <option value="Pakistan">Pakistan</option>
                                                    <option value="Palau">Palau</option>
                                                    <option value="Palestinian Territory, Occupied">Palestinian Territory, Occupied</option>
                                                    <option value="Panama">Panama</option>
                                                    <option value="Papua New Guinea">Papua New Guinea</option>
                                                    <option value="Paraguay">Paraguay</option>
                                                    <option value="Peru">Peru</option>
                                                    <option value="Philippines">Philippines</option>
                                                    <option value="Pitcairn">Pitcairn</option>
                                                    <option value="Poland">Poland</option>
                                                    <option value="Portugal">Portugal</option>
                                                    <option value="Puerto Rico">Puerto Rico</option>
                                                    <option value="Qatar">Qatar</option>
                                                    <option value="Reunion">Reunion</option>
                                                    <option value="Romania">Romania</option>
                                                    <option value="Russian Federation">Russian Federation</option>
                                                    <option value="Rwanda">Rwanda</option>
                                                    <option value="Saint Helena">Saint Helena</option>
                                                    <option value="Saint Kitts and Nevis">Saint Kitts and Nevis</option>
                                                    <option value="Saint Lucia">Saint Lucia</option>
                                                    <option value="Saint Pierre and Miquelon">Saint Pierre and Miquelon</option>
                                                    <option value="Saint Vincent and The Grenadines">Saint Vincent and The Grenadines</option>
                                                    <option value="Samoa">Samoa</option>
                                                    <option value="San Marino">San Marino</option>
                                                    <option value="Sao Tome and Principe">Sao Tome and Principe</option>
                                                    <option value="Saudi Arabia">Saudi Arabia</option>
                                                    <option value="Senegal">Senegal</option>
                                                    <option value="Serbia">Serbia</option>
                                                    <option value="Seychelles">Seychelles</option>
                                                    <option value="Sierra Leone">Sierra Leone</option>
                                                    <option value="Singapore">Singapore</option>
                                                    <option value="Slovakia">Slovakia</option>
                                                    <option value="Slovenia">Slovenia</option>
                                                    <option value="Solomon Islands">Solomon Islands</option>
                                                    <option value="Somalia">Somalia</option>
                                                    <option value="South Africa">South Africa</option>
                                                    <option value="South Georgia and The South Sandwich Islands">South Georgia and The South Sandwich Islands</option>
                                                    <option value="Spain">Spain</option>
                                                    <option value="Sri Lanka">Sri Lanka</option>
                                                    <option value="Sudan">Sudan</option>
                                                    <option value="Suriname">Suriname</option>
                                                    <option value="Svalbard and Jan Mayen">Svalbard and Jan Mayen</option>
                                                    <option value="Swaziland">Swaziland</option>
                                                    <option value="Sweden">Sweden</option>
                                                    <option value="Switzerland">Switzerland</option>
                                                    <option value="Syrian Arab Republic">Syrian Arab Republic</option>
                                                    <option value="Taiwan">Taiwan</option>
                                                    <option value="Tajikistan">Tajikistan</option>
                                                    <option value="Tanzania, United Republic of">Tanzania, United Republic of</option>
                                                    <option value="Thailand">Thailand</option>
                                                    <option value="Timor-leste">Timor-leste</option>
                                                    <option value="Togo">Togo</option>
                                                    <option value="Tokelau">Tokelau</option>
                                                    <option value="Tonga">Tonga</option>
                                                    <option value="Trinidad and Tobago">Trinidad and Tobago</option>
                                                    <option value="Tunisia">Tunisia</option>
                                                    <option value="Turkey">Turkey</option>
                                                    <option value="Turkmenistan">Turkmenistan</option>
                                                    <option value="Turks and Caicos Islands">Turks and Caicos Islands</option>
                                                    <option value="Tuvalu">Tuvalu</option>
                                                    <option value="Uganda">Uganda</option>
                                                    <option value="Ukraine">Ukraine</option>
                                                    <option value="United Arab Emirates">United Arab Emirates</option>
                                                    <option value="United Kingdom">United Kingdom</option>
                                                    <option value="United States">United States</option>
                                                    <option value="United States Minor Outlying Islands">United States Minor Outlying Islands</option>
                                                    <option value="Uruguay">Uruguay</option>
                                                    <option value="Uzbekistan">Uzbekistan</option>
                                                    <option value="Vanuatu">Vanuatu</option>
                                                    <option value="Venezuela">Venezuela</option>
                                                    <option value="Viet Nam">Viet Nam</option>
                                                    <option value="Virgin Islands, British">Virgin Islands, British</option>
                                                    <option value="Virgin Islands, U.S.">Virgin Islands, U.S.</option>
                                                    <option value="Wallis and Futuna">Wallis and Futuna</option>
                                                    <option value="Western Sahara">Western Sahara</option>
                                                    <option value="Yemen">Yemen</option>
                                                    <option value="Zambia">Zambia</option>
                                                    <option value="Zimbabwe">Zimbabwe</option>
                                                </select>
                                                </div>
                                                </div>

                                        <!--Student DOB and Gender -->
                                        <div class="form-row pt-3 px-3">
                                        <div class="form-group col-md-6 px-2">
											<input type="date" name="c_applicant_dob" class="form-control border-bottom" id="c_applicant_dob" style="border: 0;" required>
										</div>
										<div class="form-holder mb-3 ml-3" style="align-self: flex-end; transform: translateY(4px);">
											<div class="checkbox-tick">
												<label class="male ml-3">
													<input type="radio" name="c_applicant_gender" value="Male" required> Male<br>
													<span class="checkmark"></span>
												</label>
												<label class="female ml-5">
													<input type="radio" name="c_applicant_gender" value="Female" required> Female<br>
													<span class="checkmark"></span>
												</label>
											</div>
										</div>
									   </div>

                                        <!-- Current Level -->
                                        <div class="form-row pt-3 px-3">
                                            <div class="form-group col-md-12 px-2">
                                                <select name="c_applicant_currentlevel" id="c_applicant_currentlevel" class="form-control form-select border-bottom" style="border: 0;" required>
                                                    <option value="" selected disabled>Please Select Student Current Level </option>
                                                    <option value="Foundation">Foundation</option>
                                                    <option value="Certificate">Certificate</option>
                                                    <option value="Diploma">Diploma</option>
                                                    <option value="Bachelor Degree">Bachelor Degree</option>
                                                    <option value="Masters">Masters</option>
                                                    <option value="Doctorate">Doctorate</option>
                                                    <option value="Advanced Diploma">Advanced Diploma</option>
                                                    <option value="Graduate Certificate & Graduate Diploma">Graduate Certificate and Graduate Diploma</option>
                                                    <option value="Postgraduate Certificate & Postgraduate Diploma">Postgraduate Certificate and Postgraduate Diploma</option>
                                                </select>
                                            </div>
                                        </div>

                                        <!--Home Address-->
                                        <div class="form-row pt-3 px-3">
											<div class="form-group col-md-12 px-2">
												<input type="text" name="c_applicant_address" class="form-control border-bottom" id="c_applicant_address" style="border: 0;" placeholder="Enter Student Home Address" required>
											</div>
										</div>

										<!-- Application Identification -->
										<div class="form-row pt-3 px-3">
											<div class="form-group col-md-12 px-2">
												<input type="text" name="c_applicant_identification" class="form-control border-bottom" id="c_applicant_identification" style="border: 0;" placeholder="Enter Student Identification Card No. or Passport No." required>
											</div>
										</div>

                                        <!-- UNI INPUT -->
                                        <div class="form-row pt-12 px-3">
                                            <div class="form-group col-md-12 px-2">
                                                <label for="university1"></label>
                                                <select name="university1_id" id="university_1" class="form-control form-select form-select-md">
                                                    <option value="" selected disabled>Please Select Student University</option>
                                                    <?php
                                                        foreach($university_data as $u) {
                                                            echo '<option value="'.$u->uni_id.'">'.$u->	uni_name.'</option>';
                                                        }
                                                    ?>
                                                </select>
                                            </div>  
                                        </div>

                                         <!-- COURSE INPUT -->
                                        <div class="form-row pt-12 px-3">
                                            <div class="form-group col-md-12 px-2" id="course_class_1">
                                                    <label for="course1"></label>
                                                    <select name="course1_id" id="course_1" class="form-control form-select form-select-md">
                                                        <option value="" selected disabled>Please Select Student Course</option>
                                                    </select>
                                            </div> 
                                        </div>   
										
										<!-- Upload Document -->
										<div class="form-row pt-4 px-4">
											<div class="form-group col-md-12 px-2">
												<input type="file" class="custom-file-input" id="customFile" name="c_applicant_document" accept="application/pdf" required>
												<label class="custom-file-label" for="customFile">Upload Student Document</label>
												<p style="color:red; font-size: 14px">*Required document: Latest Academic Transcript in .PDF file format</p>
											</div>
										</div>

										<!-- Terms & Condition -->
										<div class="row justify-content-start mt-4 ml-2">
											<div class="col">
												<div class="form-check">
													<label class="form-check-label">
														<input type="checkbox" class="form-check-input" required>
														Please accept our <a href="https://newinti.edu.my/legal/privacy/" target="_blank">terms and conditions</a>
													</label>
												</div>
												<!-- Submit button -->
												<div class="pt-2 pr-3">
													<button type="submit" class="btn btn-success" style="float:right; width:23%;">Submit <i class="fas fa-check"></i></button>
												</div>
									</form>   
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
   </div>
</div>
</div>
<script>
        // File appear on select
        $(".custom-file-input").on("change", function() {
            var fileName = $(this).val().split("\\").pop();
            $(this).siblings(".custom-file-label").addClass("selected").html(fileName);
        });
	</script>