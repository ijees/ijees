<link href="<?php echo base_url() ?>/assets/scss/courses-styles.scss" rel="stylesheet">

<!-- Top Navigation -->
<?php $this->load->view('external/templates/topnav'); ?>

<body id="page-top">

    <!-- Page Wrapper -->
    <div id="wrapper">

        <!-- Content Wrapper -->
        <div id="content-wrapper" class="d-flex flex-column">

            <!-- Main Content -->
            <div id="content">

                <!-- Begin Page Content -->
                <div class="container-fluid" style="background-color:white;">

                    <!-- Page Heading -->
                    <div class="d-sm-flex align-items-center justify-content-between mb-2 px-4">
                        <h1 class="h3 mb-0 text-gray-800 pt-4 font-weight-bold">Courses</h1>
                    </div>
                    <div class="py-2 px-4" style="text-align: justify; font-weight:500;">Choosing the right course to study is probably one of the most important decisions you can make in your life. This can be a confusing and difficult time if you are unprepared. Look no further because with iJEES, you are given the opportunity to find your path and chase your future with one of our courses that is made readily available for you! Want to explore your academic capabilities? Seeking international study options to match your own interests and resources? Discover what you can do by searching and comparing courses from universities across the world in different subject areas. Join our mission to make study choice transparent, globally.
                    </div>
                    <div class="px-4 pb-4">
                        <hr style=" width :100%; height:2px; background-color:#EAF4F4">
                    </div>
                    <div class="col-12 px-4">
                        <form method="post" name="filter" action="<?php echo base_url() . 'external/Courses/course_filter' ?>">
                            <div class="row px-3">
                                <div class="form-group mr-2"><br>
                                    <label for="course_area">Course area</label><br>
                                    <select name="course_areaid" id="filter_1" class="form-control form-select form-select-lg btn-sm">
                                        <option value="" selected disabled>Filter area</option>
                                        <?php
                                        foreach ($dropdown_area as $dropdown_data) {
                                            echo '<option value="' . $dropdown_data->course_area . '">' . $dropdown_data->course_area . '</option>';
                                        }
                                        ?>
                                    </select>
                                </div>
                                <div class="form-group mr-2"><br>
                                    <label for="course_level">Course level</label><br>
                                    <select name="course_levelid" id="filter_2" class="form-control form-select form-select-lg btn-sm">
                                        <option value="" selected disabled>Filter level</option>
                                        <option value="Foundation">Foundation</option>
                                        <option value="Certificate">Certificate</option>
                                        <option value="Diploma">Diploma</option>
                                        <option value="Bachelor Degree">Bachelor Degree</option>
                                        <option value="Masters">Masters</option>
                                        <option value="Doctorate">Doctorate</option>
                                        <option value="Advanced Diploma">Advanced Diploma</option>
                                        <option value="Graduate Certificate and Graduate Diploma">Graduate Certificate and Graduate Diploma</option>
                                        <option value="Postgraduate Certificate and Postgraduate Diploma">Postgraduate Certificate and Postgraduate Diploma</option>
                                        <option value="Others">Others</option>
                                    </select>
                                </div>
                                <div class="form-group mr-2"><br>
                                    <label for="course_intake">Course intake</label><br>
                                    <select name="course_intakeid" id="filter_3" class="form-control form-select form-select-lg btn-sm">
                                        <option value="" selected disabled>Filter intake</option>
                                        <option value="January">January</option>
                                        <option value="February">February</option>
                                        <option value="March">March</option>
                                        <option value="April">April</option>
                                        <option value="May">May</option>
                                        <option value="June">June</option>
                                        <option value="July">July</option>
                                        <option value="August">August</option>
                                        <option value="September">September</option>
                                        <option value="October">October</option>
                                        <option value="November">November</option>
                                        <option value="December">December</option>
                                    </select>
                                </div>
                                <div class="form-group mr-2"><br>
                                    <label for="uni_country">Course location</label><br>
                                    <select name="course_countryid" id="filter_4" class="form-control form-select form-select-lg btn-sm">
                                        <option value="" selected disabled>Filter location</option>
                                        <?php
                                        foreach ($dropdown_country as $dropdown_data) {
                                            echo '<option value="' . $dropdown_data->course_country . '">' . $dropdown_data->course_country . '</option>';
                                        }
                                        ?>
                                    </select>
                                </div>
                                <div class="form-group mr-3"><br>
                                    <label for="course_fee">Course Fee</label><br>
                                    <select name="course_feeid" id="filter_5" class="form-control form-select form-select-lg btn-sm">
                                        <option value="" selected disabled>Sort fee</option>
                                        <option value="a">Low - High</option>
                                        <option value="d">High - Low</option>
                                    </select>
                                </div>
                                <div class="form-group align-self-end pull-right">
                                    <button class="button-custom-color">Search</button>
                                </div>
                            </div>
                        </form>

                        <?php if (!empty($course_data)) {
                            foreach ($course_data as $courses) { ?>
                                <div class="card-body shadow mb-4">
                                    <div class="row">
                                        <div class="col-9 ">
                                            <div class="row justify-content-between">
                                                <h5 class="font-weight-bold ml-2 pl-1"><?php echo $courses->course_name ?></h5>
                                            </div>
                                            <div>
                                                <p><i><?php echo $courses->course_area ?></i></p>
                                                <p class="courselist-short-desc"><?php echo $courses->course_shortprofile ?></p>
                                            </div>
                                            <div>
                                                <!-- <h5>RM<?php echo $courses->course_fee ?></h5> -->
                                                <h5><?php echo $courses->course_country ?></h5>
                                            </div>
                                        </div>
                                        <div class=" col-3 mt-5 ">
                                            <?php if ($user_role == 'Student') { ?>
                                                <?php $response = $this->course_applicants_model->past_application($courses->course_id, $user_email);
                                                if ($response == true) { ?>
                                                    <button type=" button" class="button-disabled float-right" disabled>Applied</button>
                                                <?php } else { ?>
                                                    <a href="<?php echo base_url() . 'external/Courses/course_applicant/' . $courses->course_id ?>" type=" button" class="button-custom-color float-right">Apply</a>
                                                <?php } ?>
                                                <a href="<?php echo base_url() . 'external/Courses/view_course/' . $courses->course_id ?>" class="button-custom-color float-right mr-1">View</a>

                                            <?php } else { ?>

                                                <!-- ***If Student is not logged in, 'Apply Now' button will redirect to Login page -->
                                                <a class="button-custom-color float-right" href="<?= base_url('user/login/Auth/login'); ?>">Apply</a>
                                                <a href="<?php echo base_url() . 'external/Courses/view_course/' . $courses->course_id ?>" class="button-custom-color float-right mr-1">View</a>

                                            <?php } ?>
                                        </div>
                                    </div>

                                </div>

                            <?php } ?>

                        <?php } else { ?>

                            <h3 class="text-center mt-5">Records not found</h3>

                        <?php } ?>
                        <div class="pb-5"></div>
                        <div class="pb-5"></div>
                        <div class="pb-5"></div>

                    </div>

                </div>
                <!-- /.container-fluid -->

            </div>
            <!-- End of Main Content -->
        </div>
    </div>
    </div>
    </div>

    </div>

    </div>
    <!-- /.container-fluid -->

    </div>
    <!-- End of Main Content -->