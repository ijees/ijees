<style>
th{
    color:black;
}
td{
    color: rgba(0,0,0,0.7);
}
</style>

<!-- Content Wrapper -->
<div id="content-wrapper" >

<!-- Main Content -->
<div id="content">    
    
    <!-- Begin Page Content -->
    <div class="container-fluid">

    <!-- DataTales Example -->
    <div class="card shadow mb-4">
        <div class="card-header py-3">
            <h6 class="m-0 font-weight-bold text-primary">Academic Counsellors</h6>
        </div>
        <div class="card-body">
        <div class="table-responsive">
                <table id="dataTable" class="table table-striped">
                    <thead>
                        <tr>
                            <th>No.</th>
                            <th>Full Name</th>
                            <th>Contact Number</th>
                            <th>Business Email</th>
                            <th>University</th>
                            <th>Nationality</th>
                            <th>Gender</th>
                            <th>DOB</th>
                            <th>Document</th>
                            <th>Submitted Date</th>
                        </tr>
                    </thead>
                    
                    <tbody>
                   
                    <?php $count=1;?>
                    <?php foreach($aclist->result() as $ac):?>
                    <?php  
                    echo "<tr>"
                    ."<td>$count</td>"
                    ."<td>$ac->user_fname $ac->user_lname</td>"
                    ."<td>$ac->ac_phonenumber</td>"
                    ."<td>$ac->ac_businessemail</td>"
                    ."<td>$ac->ac_university</td>"
                    ."<td>$ac->ac_nationality</td>"
                    ."<td>$ac->ac_gender</td>"
                    ."<td>$ac->ac_dob</td>" 
                    ."<td style='text-align:center'><a class='btn btn-info ' href='"
                    .base_url()
                    ."assets/uploads/academic_counsellor/$ac->ac_document' role='button' target='_blank' ><span class='fas fa-eye'></span></a></td>" 
                    
                    ."<td>$ac->ac_submitdate</td>" 
                    ."</tr>" 
                    ?>
                     <?php $count++; ?>
                     <?php endforeach ;?>

                    </tbody>
                </table>
        </div>
    </div>
</div>
</div>



