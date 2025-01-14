<script src="<?php echo base_url() ?>/assets/vendor/jquery/jquery.min.js"></script>
<link href="<?php echo base_url() ?>/assets/scss/admin_dashboard.scss" rel="stylesheet">

<script src="<?php echo base_url() ?>/assets/vendor/chart.js/Chart.min.js"></script>

<!-- Page level custom scripts -->
<script src="<?php echo base_url() ?>/assets/js/demo/chart-area-demo.js"></script>
<script src="<?php echo base_url() ?>/assets/js/demo/chart-pie-demo.js"></script>

<body id="page-top">

    <!-- Page Wrapper -->
    <div id="wrapper">

        <!-- Content Wrapper -->
        <div id="content-wrapper" class="d-flex flex-column">

            <!-- Main Content -->
            <div id="content">
                <!-- Begin Page Content -->
                <div class="container-fluid">

                    <!-- Page Heading -->
                    <div class="d-sm-flex align-items-center justify-content-between mb-4">
                        <h1 class="h3 mb-0 text-gray-800">Dashboard</h1>
                        <!-- <form method="post" name="edit_profile" action="<?php echo base_url() . 'internal/admin_panel/admin_dashboard2/uni_applicants' ?>">
                            <button type="submit" class="btn btn-primary">Save</button>
                        </form> -->
                    </div>

                    <!-- Content Row -->
                    <div class="row">

                        <!-- Earnings (Monthly) Card Example -->
                        <div class="col mb-4">
                            <a href="<?php echo base_url('internal/admin_panel/Users_information/students_info'); ?>" style="text-decoration:none">
                                <div class="card border-left-primary shadow h-100 py-2">

                                    <div class="card-body" href="">
                                        <div class="row no-gutters align-items-center">
                                            <div class="col mr-2">
                                                <div class="text-xs font-weight-bold text-primary text-uppercase mb-1">
                                                    Students</div>
                                                <div id="student_counter" class="h5 mb-0 font-weight-bold text-gray-800 counting_number">0</div>
                                            </div>
                                            <div class="col-auto">
                                                <i class="fas fa-book fa-2x text-gray-300"></i>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </a>
                        </div>

                        <!-- Earnings (Monthly) Card Example -->
                        <div class="col mb-4">
                            <a href="<?php echo base_url('internal/admin_panel/Users_information/employer_info'); ?>" style="text-decoration:none">
                                <div class="card border-left-success shadow h-100 py-2">
                                    <div class="card-body">
                                        <div class="row no-gutters align-items-center">
                                            <div class="col mr-2">
                                                <div class="text-xs font-weight-bold text-success text-uppercase mb-1">
                                                    Employers</div>
                                                <div id="e_counter" class="h5 mb-0 font-weight-bold text-gray-800 counting_number">0</div>
                                            </div>
                                            <div class="col-auto">
                                                <i class="fas fa-briefcase fa-2x text-gray-300"></i>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </a>
                        </div>

                        <!-- Earnings (Monthly) Card Example -->
                        <div class="col mb-4">
                            <a href="<?= base_url('internal/admin_panel/Users_information/ea_info'); ?>" style="text-decoration:none">
                                <div class="card border-left-danger shadow h-100 py-2">
                                    <div class="card-body">
                                        <div class="row no-gutters align-items-center">
                                            <div class="col mr-2">
                                                <div class="text-xs font-weight-bold text-danger text-uppercase mb-1">
                                                    Education Agents</div>
                                                <div id="ea_counter" class="h5 mb-0 font-weight-bold text-gray-800 counting_number">0</div>
                                            </div>
                                            <div class="col-auto">
                                                <i class="fas fa-user-tie fa-2x text-gray-300"></i>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </a>
                        </div>

                        <!-- Pending Requests Card Example -->
                        <div class="col mb-4">
                            <a href="<?= base_url('internal/admin_panel/Users_information/ac_info'); ?>" style="text-decoration:none">
                                <div class="card border-left-info shadow h-100 py-2">
                                    <div class="card-body">
                                        <div class="row no-gutters align-items-center">
                                            <div class="col mr-2">
                                                <div class="text-xs font-weight-bold text-info text-uppercase mb-1">
                                                    Academic Counsellors</div>
                                                <div id="ac_counter" class="h5 mb-0 font-weight-bold text-gray-800 counting_number">0</div>
                                            </div>
                                            <div class="col-auto">
                                                <i class="fas fa-comments fa-2x text-gray-300"></i>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </a>
                        </div>

                        <div class="col mb-4">
                            <a href="<?= base_url('internal/admin_panel/Users_information/ep_info'); ?>" style="text-decoration:none">
                                <div class="card border-left-warning shadow h-100 py-2">
                                    <div class="card-body">
                                        <div class="row no-gutters align-items-center">
                                            <div class="col mr-2">
                                                <div class="text-xs font-weight-bold text-warning text-uppercase mb-1">
                                                    Education Partners</div>
                                                <div id="ep_counter" class="h5 mb-0 font-weight-bold text-gray-800 counting_number">0</div>
                                            </div>
                                            <div class="col-auto">
                                                <i class="fas fa-handshake fa-2x text-gray-300"></i>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </a>
                        </div>

                    </div>

                    <div class="row mb-4">
                        <div class="col-12">
                            <div class="card h-100 shadow">
                                <div class="card-header py-3">
                                    <h6 class="m-0 font-weight-bold text-primary">Total Active User</h6>
                                </div>
                                <div class="card-body">
                                    <div class="chart-area">
                                        <canvas id="userChartArea"></canvas>
                                    </div>
                                    <hr>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="row mb-4">
                        <div class="col-6">
                            <div class="card h-100 shadow">
                                <div class="card-header">
                                    <h6 class="m-0 font-weight-bold text-primary">Latest 5 Active Universities (Total: <?= $total_uni ?>)</h6>
                                </div>
                                <div class="card-body">
                                    <table id="customers">
                                        <tr>
                                            <th>University</th>
                                            <th class="text-center">Courses</th>
                                        </tr>
                                        <?php foreach ($latest_uni as $uni) {
                                            $total_course = $this->courses_model->get_totalcourse_for_uni($uni['uni_id']);
                                        ?>
                                            <tr>
                                                <td><?= $uni['uni_name'] ?></td>
                                                <td class="text-center">
                                                    <?= $total_course ?>
                                                </td>
                                            </tr>
                                        <?php } ?>
                                    </table>
                                </div>
                            </div>
                        </div>

                        <div class="col-6">
                            <div class="card h-100 shadow">
                                <!-- Card Header - Dropdown -->
                                <div class="card-header py-3">
                                    <h6 class="m-0 font-weight-bold text-primary">Enrolment by Student/Education Agent</h6>
                                </div>
                                <!-- Card Body -->
                                <div class="card-body">
                                    <div class="chart-pie pt-4">
                                        <canvas id="enrollment_donut"></canvas>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="row mb-4">
                        <div class="col-12">
                            <div class="card h-100 shadow">
                                <div class="card-header py-3">
                                    <h6 class="m-0 font-weight-bold text-primary">Top 4 Universities by Course Applicants</h6>
                                </div>
                                <div class="card-body">
                                    <div class="chart-bar">
                                        <canvas id="ep_barChart"></canvas>
                                    </div>
                                    <hr>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="row justify-content-center">
                        <div class="col-4 w-100">
                            <div class="card shadow">
                                <!-- Card Header - Dropdown -->
                                <div class="card-header py-3">
                                    <h6 class="m-0 font-weight-bold text-primary">Universities</h6>
                                </div>
                                <!-- Card Body -->
                                <div class="card-body">
                                    <div class="">
                                        <canvas id="pie-chartcanvas-1"></canvas>
                                    </div>
                                    <hr>
                                </div>
                            </div>
                        </div>
                        <div class="col-4 w-100">
                            <div class="card shadow">
                                <!-- Card Header - Dropdown -->
                                <div class="card-header py-3">
                                    <h6 class="m-0 font-weight-bold text-primary">Employer Projects</h6>
                                </div>
                                <!-- Card Body -->
                                <div class="card-body">
                                    <div class="">
                                        <canvas id="pie-chartcanvas-2"></canvas>
                                    </div>
                                    <hr>
                                </div>
                            </div>
                        </div>
                        <div class="col-4 w-100">
                            <div class="card shadow">
                                <!-- Card Header - Dropdown -->
                                <div class="card-header py-3">
                                    <h6 class="m-0 font-weight-bold text-primary">R&D Projects</h6>
                                </div>
                                <!-- Card Body -->
                                <div class="card-body">
                                    <div class="">
                                        <canvas id="pie-chartcanvas-3"></canvas>
                                    </div>
                                    <hr>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>
                <!-- /.container-fluid -->

            </div>
            <!-- End of Main Content -->

            <script>
                var counter1 = <?= $total_student ?>;
                var counter2 = <?= $total_e ?>;
                var counter3 = <?= $total_ea ?>;
                var counter4 = <?= $total_ac ?>;
                var counter5 = <?= $total_ep ?>;
                //total active users
                var Jan = <?= $monthly_user[0] ?>;
                var Feb = <?= $monthly_user[1] ?>;
                var Mar = <?= $monthly_user[2] ?>;
                var Apr = <?= $monthly_user[3] ?>;
                var May = <?= $monthly_user[4] ?>;
                var Jun = <?= $monthly_user[5] ?>;
                var Jul = <?= $monthly_user[6] ?>;

                //enrollment donut
                var s_applicant = <?= $total_by_student ?>;
                var ea_applicant = <?= $total_by_ea ?>;

                var active_uni = <?= $active_uni ?>;
                var pending_uni = <?= $pending_uni ?>;

                var active_emp = <?= $active_emp ?>;
                var pending_emp = <?= $pending_emp ?>;

                var active_rd = <?= $active_rd ?>;
                var pending_rd = <?= $pending_rd ?>;

                //bar
                var ctx = document.getElementById("ep_barChart");
                var myBarChart = new Chart(ctx, {
                    type: 'bar',
                    data: {
                        labels: [<?php $counter = 0;
                                    foreach ($total_applicants as $row) : ?> "<?php if ($counter < 4) {
                                                                                                echo $row['uni_name'];
                                                                                            }
                                                                                            $counter++; ?>", <?php endforeach; ?>],
                        datasets: [{
                            label: "Total Course Applicants",
                            backgroundColor: ["#3bceac", "#ff99c8", "#ca7df9", "#758bfd", "#ffc09f"],
                            borderColor: "#4e73df",
                            data: [<?php $counter = 0;
                                    foreach ($total_applicants as $row) : ?> "<?php if ($counter < 4) {
                                                                                                    echo $row['count(course_applicants.c_applicant_id)'];
                                                                                                }
                                                                                                $counter++; ?>", <?php endforeach; ?>],
                        }],
                    },
                    options: {
                        maintainAspectRatio: false,
                        layout: {
                            padding: {
                                left: 10,
                                right: 25,
                                top: 25,
                                bottom: 0
                            }
                        },
                        scales: {
                            xAxes: [{
                                time: {
                                    unit: 'University'
                                },
                                gridLines: {
                                    display: false,
                                    drawBorder: false
                                },
                                ticks: {
                                    maxTicksLimit: 5
                                },
                                maxBarThickness: 25,
                            }],
                            yAxes: [{
                                ticks: {
                                    min: 0,
                                    max: 6,
                                    maxTicksLimit: 5,
                                    padding: 10,

                                },
                                gridLines: {
                                    color: "rgb(234, 236, 244)",
                                    zeroLineColor: "rgb(234, 236, 244)",
                                    drawBorder: false,
                                    borderDash: [2],
                                    zeroLineBorderDash: [2]
                                }
                            }],
                        },
                        legend: {
                            display: false
                        },
                        tooltips: {
                            titleMarginBottom: 10,
                            titleFontColor: '#6e707e',
                            titleFontSize: 14,
                            backgroundColor: "rgb(255,255,255)",
                            bodyFontColor: "#858796",
                            borderColor: '#dddfeb',
                            borderWidth: 1,
                            xPadding: 15,
                            yPadding: 15,
                            displayColors: false,
                            caretPadding: 10,
                            callbacks: {
                                label: function(tooltipItem, chart) {
                                    var datasetLabel = chart.datasets[tooltipItem.datasetIndex].label || '';
                                    return datasetLabel + ': ' + number_format(tooltipItem.yLabel);
                                }
                            }
                        },
                    }
                });

                //Pie charts
                $(function() {

                    //get the pie chart canvas
                    var ctx1 = $("#pie-chartcanvas-1");
                    var ctx2 = $("#pie-chartcanvas-2");
                    var ctx3 = $("#pie-chartcanvas-3");

                    //pie chart data
                    var data1 = {
                        labels: ["Active", "Pending"],
                        datasets: [{
                            label: "Universities",
                            data: [active_uni, pending_uni],
                            backgroundColor: [
                                "#613dc1",
                                "#6c0e23"
                            ],
                            borderWidth: [1, 1]
                        }]
                    };

                    //pie chart data
                    var data2 = {
                        labels: ["Active", "Pending"],
                        datasets: [{
                            label: "Employer Porjects",
                            data: [active_emp, pending_emp],
                            backgroundColor: [
                                "#c42021",
                                "#3a5683"
                            ],
                            borderWidth: [1, 1]
                        }]
                    };

                    var data3 = {
                        labels: ["Active", "Pending"],
                        datasets: [{
                            label: "R&D Projects",
                            data: [active_rd, pending_rd],
                            backgroundColor: [
                                "#3e95cd",
                                "#8e5ea2"
                            ],
                            borderWidth: [1, 1]
                        }]
                    };

                    //options
                    var options = {
                        responsive: true,

                        legend: {
                            display: true,
                            position: "bottom",
                            align: "left",
                            labels: {
                                fontColor: "#333",
                                fontSize: 14
                            }
                        }
                    };

                    //create Chart class object
                    var chart1 = new Chart(ctx1, {
                        type: "pie",
                        data: data1,
                        options: options
                    });

                    //create Chart class object
                    var chart2 = new Chart(ctx2, {
                        type: "pie",
                        data: data2,
                        options: options
                    });
                    var chart3 = new Chart(ctx3, {
                        type: "pie",
                        data: data3,
                        options: options
                    });
                });
            </script>



            <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

            <!-- Core plugin JavaScript-->
            <script src="vendor/jquery-easing/jquery.easing.min.js"></script>

            <!-- Page level plugins -->
            <script src="vendor/chart.js/Chart.min.js"></script>

            <script>

            </script>