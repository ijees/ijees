<!-- Jquery plugin -->
<script src="<?php echo base_url() ?>/assets/vendor/jquery/jquery.min.js"></script>

<!-- Page level custom scripts -->

<!-- Set base url to javascript variable-->
<script type="text/javascript">
    var base_url = "<?php echo base_url(); ?>";
</script>

<!-- Top Navigation -->
<?php $this->load->view('external/templates/topnav');?>

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
                    <div class="row justify-content-md-center pt-5 pb-5" style='background-color:#f9f6f1;'>

                        <!-- Steps -->
                        <div class="col-xl-3">
                            <div class="card h-100 " id='card1'>
                                <div class="card-body" style="background-color:#DAE7E0">

                                    <div class="pl-3 pr-3 pt-4">
                                        <div class="pl-4" style="font-size:16px; font-weight:700; color:black;">Join Interactive Joint Education Employability System (iJEES) in</div>
                                        <div class="pt-2 pl-4 pb-3" style="font-size:38px; color:green; font-weight:900;">3 STEPS</div>

                                        <div class="pl-4">
                                            <div class="number pt-4 pl-4 pb-1" style="font-size:18px; color:green; font-weight:900;">01</div>
                                        </div>
                                        <div class="pl-4 pb-3" style="font-size:14px; color:black;">Select your role before you fill in your detail in the registration form.</div>

                                        <div class="pl-4">
                                            <div class="number pt-4 pl-4 pb-1" style="font-size:18px; color:green; font-weight:900;">02</div>
                                        </div>
                                        <div class="pl-4 pb-3" style="font-size:14px; color:black;">If you already have an existing account, login now with your credentials. </div>

                                        <div class="pl-4">
                                            <div class="number pt-4 pl-4 pb-1" style="font-size:18px; color:green; font-weight:900;">03</div>
                                        </div>
                                        <div class="pl-4 pb-5" style="font-size:14px; color:black;">After login, you are on the main page based on your role. </div>

                                    </div>

                                </div>
                            </div>
                        </div>
                        <div class="col-xl-6 ">
                            <div class="card h-100" id='card2' >
                                <div class=" card-body">
                                <center>
                                    <div class="pt-5 px-5" style="font-size:23px; letter-spacing: 8px; color:#787878; font-weight:700;">UNIVERSITY INFORMATION FORM</div>
                                </center>
                                <?=$this->session->flashdata('message')?> 
                               <!-- Form -->
                               <form method="post" action="<?= base_url('user/login/Auth/university');?>" enctype="multipart/form-data">
                               <?= form_open_multipart('') ?>
                                        <div class="form-row pt-4 px-3">
                                            <!-- University Name-->
                                            <div class="form-group col-md-12 px-2">
                                              <input type="text" class="form-control border-bottom" style="border: 0;" name="uni_name" placeholder="University Name" value="<?=set_value('uni_name')?>" required>
                                              <?= form_error('uni_name','<small class="text-danger pl-3">','</small>');?>
                                            </div>
                                        </div>
                                        <div class="form-row pt-3 px-3">
                                            <!-- Address -->
                                            <div class="form-group col-md-12 px-2">
                                               <textarea class="form-control border-bottom" style="border: 0;" rows="2" name="uni_address" placeholder="University Address" required></textarea>
                                            </div>
                                        </div>
                                        <div class="form-row pt-3 px-3">
                                            <!--  Email -->
                                            <div class="form-group col-md-12 px-2">
                                              <input type="email" class="form-control border-bottom" style="border: 0;" name="uni_email" placeholder="University Email" required>
                                            </div>
                                        </div>
                                        <div class="form-row pt-3 px-3">
                                            <!-- Hotline-->
                                            <div class="form-group col-md-12 px-2">
                                              <input type="number" class="form-control border-bottom" style="border: 0;" name="uni_hotline" placeholder="University Hotline" required>
                                            </div>
                                        </div>
                                        <div class="form-row pt-3 px-3">
                                            <!-- University Short Profile -->
                                            <div class="form-group col-md-12 px-2">
                                              <textarea class="form-control border-bottom" style="border: 0;" rows="6" name="uni_shortprofile" placeholder="Short Profile"></textarea>
                                            </div>
                                        </div>
                                        <div class="form-row pt-3 px-3">
                                            <!-- Country -->
                                            <div class="form-group col-md-12 px-2">
                                              <input type="text" class="form-control border-bottom" style="border: 0;" name="uni_country" placeholder="Country of University" required>
                                            </div>
                                        </div>
                                        <div class="form-row pt-3 px-4">
                                             <!--Logo-->
                                             <div class="form-group col-md-12 px-2">
                                                <input type="file" class="custom-file-input " id="form-group" name="uni_logo" value="<?=set_value('uni_logo')?>">
                                                <label class="custom-file-label border-bottom" style="border: 0;" for="customFile">Upload University Logo</label>
                                                <p style="font-size: 14px">*Accepted file formats are only in .JPG, .JPEG and .PNG</p>
                                                <?= form_error('uni_logo','<small class="text-danger pl-3">','</small>');?>
                                             </div>
                                        </div>
                                        <div class="form-row pt-3 px-4">
                                            <!--Background-->
                                            <div class="form-group col-md-12 px-2">
                                                <input type="file" class="custom-file-input " id="form-group" name="uni_background" required>
                                                <label class="custom-file-label border-bottom" style="border: 0;" for="customFile">Upload a picture of the University building</label>
                                                <p style="font-size: 14px">*Accepted file formats are only in .JPG, .JPEG and .PNG</p>
                                            </div>
                                        </div>
                                        <div class="form-row pt-3 px-3">
                                            <!-- QS Ranking & Employability Rank -->
                                            <div class="form-group col-md-6 px-2">
                                                <input type="number" class="form-control border-bottom" style="border: 0;" name="uni_qsrank" placeholder="QS Ranking" required>
                                            </div>
                                            <div class="form-group col-md-6 px-2">
                                                <input type="number" class="form-control border-bottom" style="border: 0;" name="uni_employabilityrank" placeholder="Employability Rank" required>
                                            </div>
                                        </div>
                                        <div class="form-row pt-3 px-3">
                                            <!-- Total Students -->
                                            <div class="form-group col-md-6 px-2">
                                                <input type="number" class="form-control border-bottom" style="border: 0;" name="uni_totalstudents" placeholder="Total Students" required>
                                            </div>
                                        </div>
                                        <div class="form-row pt-4 px-3">
                                            <!-- Term and Conditions & Register Button -->
                                            <div class="col">
                                                   <button type="submit" class="btn btn-success mt-4" style="float:right; width:auto;">Continue <i class="fas fa-check"></i></button>
                                            </div>
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
            $(".custom-file-input").on("change", function() {
            var fileName = $(this).val().split("\\").pop();
            $(this).siblings(".custom-file-label").addClass("selected").html(fileName);
            });
        </script>