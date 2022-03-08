

<?php

   include 'connection1.php';
   session_start();
?>



<?php include('include/header.php') ?>






<title>Job Listing Activity Eval-1</title>
<link rel="stylesheet" href="css/job_listing_activity_eval-1.css">
<link rel="stylesheet" href="job_listings_files2.css">
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.js"></script>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-star-rating/4.0.2/css/star-rating.min.css" />
<script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-star-rating/4.0.2/js/star-rating.min.js"></script>
<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.2/css/all.css">
<!-- Google Fonts -->
<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700&display=swap">
<!-- Bootstrap core CSS -->
<link href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.5.0/css/bootstrap.min.css" rel="stylesheet">
<!-- Material Design Bootstrap -->
<link href="https://cdnjs.cloudflare.com/ajax/libs/mdbootstrap/4.19.1/css/mdb.min.css" rel="stylesheet">

<!-- JQuery -->
<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<!-- Bootstrap tooltips -->
<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.4/umd/popper.min.js"></script>
<!-- Bootstrap core JavaScript -->
<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.5.0/js/bootstrap.min.js"></script>
<!-- MDB core JavaScript -->
<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/mdbootstrap/4.19.1/js/mdb.min.js"></script>


<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>

<?php

$flag=0;
if(isset($_POST['btnall']))
{
  $sql1="SELECT * FROM `joblistings`";
  $flag=1;
}

if(isset($_POST['btnshortlisted']))
{
  $sql1="SELECT * FROM `joblistings` WHERE status='Shortlisted'";
  $flag=1;
}

if(isset($_POST['btnhired']))
{
  $sql1="SELECT * FROM `joblistings` WHERE status='Approved'";
  $flag=1;
}

if(isset($_POST['btnsearch']))
{
  $cname=$_POST['FileName_myTasks'];
  $sql1 ="SELECT * FROM `joblistings` WHERE contact_client_company='$cname' ";
  $flag=1;
}
 ?>

<?php


            $j_id=$_GET['j_id'];
            $sql="select * from joblistings where job_id='$j_id'";
            $res=mysqli_query($conn,$sql);
            if($res == TRUE)
            {
                $count=mysqli_num_rows($res);
                if($count >0)
                {
                    while($rows=mysqli_fetch_assoc($res))
                    {
                        $position=$rows['position'];
                        $start_date=$rows['start_date'];
                        $client_company=$rows['client_company'];
                        $end_date=$rows['end_date'];
                        $industry=$rows['industry'];
                        $qualification=$rows['qualification'];
                        $eligibility_criteria=$rows['eligibility_criteria'];
                        $skills=$rows['skills'];
                        $package_type=$rows['package_type'];
                        $package=$rows['package'];
                        $transportation=$rows['transportation'];
                        $required_experience=$rows['required_experience'];
                        $relevant_experience=$rows['relevant_experience'];
                        $irrelevant_experience=$rows['irrelevant_experience'];
                        $roles_and_opportunity=$rows['roles_and_opportunity'];
                        $learning_opportunity=$rows['learning_opportunity'];
                        $emp_endorsement=$rows['emp_endorsement'];
                        $emp_benefits=$rows['emp_benefits'];
                        $advert_job_description=$rows['advert_job_description'];
                        $advert_contact_name=$rows['advert_contact_name'];
                        // $company_email=$rows['company_email'];
                        $advert_contact_no=$rows['advert_contact_no'];
                        $district=$rows['district'];
                        $state=$rows['state'];
                        $country=$rows['country'];
                        $job_type=$rows['job_type'];
                        // $job_views=$rows['job_views'];
                        $status=$rows['status'];

                        $job_id=$rows['job_id'];

                        // $j_id=$_GET['j_id'];

                    }
                }
              }
                 ?>


<body>
<br>
<div class="bread-crumbs_Mytools-recruiter">
     <a href="" class="active-breadcrumb-link">&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;Dashboard </a> >  <a href="" class="active-breadcrumb-link"> My Database </a> >  <a href="" class="active-breadcrumb-link"><u> Job Listings  </u></a>
     >  <a href="" class="active-breadcrumb-link"><u> <?php echo  $position ?> </u></a>
 </div>

 <div class="container" style="margin-left:150px">
<div class="small_container">


 <div class="heading_dash1">
     <div class="row-flex-jobj">
         <h1 class="mainHeadingDash"><?php echo  $position ?></h1>
         <!-- <img src="./img/List icon.svg" style="margin-left: 30px;"> -->
     </div>
     <!-- <div class="mainParaDashDiv row-flex-jobj"> -->
             <div class="row-flex-jobj">
                 <a href="#"><?php echo  $client_company ?> &nbsp;- &nbsp;</a> #1544-1
             </div>
             <p style="color:#979797"><?php echo  $start_date ?></p>
     <!-- </div> -->
 </div>

<br>
<div class="row">
    <div class="col-lg-1 mb-4">
    <div class="options">
                <p ><a href="job_listings_individual.php?j_id=<?php echo  $job_id ?>" style="color: #979797">Glance</a></p>
                <p style="color:#3598DB;margin-left:-2px"> <b style="margin-right: 5px;">|</b>Applicants</a></p>
                <p><a href="job_listings_activity_res.php?j_id=<?php echo  $job_id ?>" style="color: #979797">Activity</a></p>
                <p><a href="Job_listings_files.php?j_id=<?php echo  $job_id ?>" style="color: #979797">Files</a></p>
                <p><a href="job_listings_notes.php?j_id=<?php echo  $job_id ?>" style="color: #979797">Notes</a></p>
                <p><a href="job_listings_pub-2.php?j_id=<?php echo  $job_id ?>" style="color: #979797">Publish</a></p>
            </div>

    </div>

    <div class="col-lg-8 mb-4">
        <br><br>
        <div class="row">
            <div class="col-8">
                <div class="leftFilter_myTasks" style="width:430px;margin-left:20px;height:35px">

                   <form method="post">
                     <input type="text" name="FileName_myTasks" placeholder="Search by candidate " class="inputSearchFileName_myTasks">&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;
                     <button type="submit" name="btnsearch" class="searchButton_myTasks" style="align:right"><img src="img/search-icon-blue.png" width="17px" height="17px"></button>
                  </form>

                </div>
            </div>
            <div class="col-4">
                <p style="align:right;font-size:14px"><span class="sortByMyTasks">Sort By: </span><span class="recentMyTasks">Recent&nbsp; </span>
                Source  <img src="img/dropdown.png" width="13px" height="10px"></p>
                <p>
                <div class="filterSmall_myTasks">
                    <div class="selectAllActions_filterSmall_myTasks" >
                        <input type="checkbox" name="checkboxSelectAll_myTasks" id="checkboxSelectAll_myTasks">
                        <label for="checkboxSelectAll_myTasks" id="sel_1">Select All</label>
                        <select name="Select action" id="box_14" style="color:#3598DB ">
                            <option value="0">Select Action &emsp;v</option>
                            <option value="1">Copy</option>
                            <option value="2">Cut</option>
                        </select>
                    </div>
                </div>
                </p>
            </div>
        </div>
        <div class="row">
            <div class="col-8">

              <form method="post">
                <p style="display:flex">
                <button type="submit" name="btnall" class="addFilesMyTasks1" id="myBtn" > &emsp;All </button>&emsp;&emsp;
                <button type="submit" name="btnshortlisted" class="addFilesMyTasks2" id="myBtn" > &emsp;Shortlisted </button>&emsp;&emsp;
                <button type="submit" name="btnhired" class="addFilesMyTasks3" id="myBtn" >&nbsp; Hired </button>
                </p>
              </form>

            </div>
            <div class="col-4">
            </div>
        </div>
<br>

      <?php
        if(isset($_POST['btnfilter']))
        {
            $qualification=$_POST['qualification'];
            $experience=$_POST['experience'];
            $country=$_POST['country'];
            $state=$_POST['state'];
            $district=$_POST['district'];
            $btnfilter=$_POST['btnfilter'];

            $sql1="SELECT * FROM `joblistings` WHERE qualification='$qualification' AND required_experience='$experience' AND country='$country' AND state='$state' AND district='$district'";

            $flag=1;
        }
      ?>
      <form method="post">
        <div class="row">
            <div class="col-3">
                <p><b>Qualification</b></p>
                <div class="filterSmall_myTasks1" >
                    <select name="qualification" id="val1" style="color:#3598DB;">
                    <option value="0">required qualification&emsp; v</option>

                    <?php
                        $sql2="SELECT DISTINCT qualification from joblistings";
                        $res2=mysqli_query($conn,$sql2);
                        if($res2 == TRUE)
                        {
                          $count=mysqli_num_rows($res2);
                          if($count > 0)
                          {
                            while($rows=mysqli_fetch_assoc($res2))
                            {
                                $temp=$rows['qualification'];
                    ?>
                    <option value="<?php echo $temp;?>"><?php echo $temp; ?></option>
                    <?php
                            }
                          }
                        }
                    ?>

                    <!-- <option value="1">PG</option>
                    <option value="2">ME</option> -->
                    </select>
                </div>
            </div>
            <div class="col-2">
                <p><b>Experience</b></p>
                <div class="filterSmall_myTasks1">
                    <select name="experience" id="val2" style="color:#3598DB;">
                    <option value="0">Enter</option>
                    <?php
                        $sql2="SELECT DISTINCT required_experience from joblistings";
                        $res2=mysqli_query($conn,$sql2);
                        if($res2 == TRUE)
                        {
                          $count=mysqli_num_rows($res2);
                          if($count > 0)
                          {
                            while($rows=mysqli_fetch_assoc($res2))
                            {
                                $temp=$rows['required_experience'];
                    ?>
                    <option value="<?php echo $temp;?>"><?php echo $temp; ?></option>
                    <?php
                            }
                          }
                        }
                    ?>
                    </select>
                </div>
            </div>
            <div class="col-3">
                <p><b>Country</b></p>
                <div class="filterSmall_myTasks1">
                    <select name="country" id="val1" style="color:#3598DB;">
                    <option value="0">Select country&emsp;&emsp;&emsp;&emsp; v</option>
                    <?php
                        $sql2="SELECT DISTINCT country from joblistings";
                        $res2=mysqli_query($conn,$sql2);
                        if($res2 == TRUE)
                        {
                          $count=mysqli_num_rows($res2);
                          if($count > 0)
                          {
                            while($rows=mysqli_fetch_assoc($res2))
                            {
                                $temp=$rows['country'];
                    ?>
                    <option value="<?php echo $temp;?>"><?php echo $temp; ?></option>
                    <?php
                            }
                          }
                        }
                    ?>
                    </select>
                </div>
            </div>
            <div class="col-2">
                <p><b>State</b></p>
                <div class="filterSmall_myTasks1">
                    <select name="state" id="val3" style="color:#3598DB;">
                    <option value="0">Select state&emsp; v</option>
                    <?php
                        $sql2="SELECT DISTINCT state from joblistings";
                        $res2=mysqli_query($conn,$sql2);
                        if($res2 == TRUE)
                        {
                          $count=mysqli_num_rows($res2);
                          if($count > 0)
                          {
                            while($rows=mysqli_fetch_assoc($res2))
                            {
                                $temp=$rows['state'];
                    ?>
                    <option value="<?php echo $temp;?>"><?php echo $temp; ?></option>
                    <?php
                            }
                          }
                        }
                    ?>
                    </select>
                </div>
            </div>
            <div class="col-2">
                <p><b>District</b></p>
                <div class="filterSmall_myTasks1">
                    <select name="district" id="val3" style="color:#3598DB;">
                    <option value="0">Select district &emsp;v</option>
                    <?php
                        $sql2="SELECT DISTINCT district from joblistings";
                        $res2=mysqli_query($conn,$sql2);
                        if($res2 == TRUE)
                        {
                          $count=mysqli_num_rows($res2);
                          if($count > 0)
                          {
                            while($rows=mysqli_fetch_assoc($res2))
                            {
                                $temp=$rows['district'];
                    ?>
                    <option value="<?php echo $temp;?>"><?php echo $temp; ?></option>
                    <?php
                            }
                          }
                        }
                    ?>
                    </select>
                </div>
            </div>
        </div>
        <br>
        <div>
            <button type="submit" name="btnfilter" class="apply_1"  > Apply </button>
        </div>
      </form>

        <div class="singleTasks_containerDiv">

            <?php

                if($flag == 0)
                {
                   $sql1="select * from joblistings";
                }
                $res=mysqli_query($conn,$sql1);
                if($res == TRUE)
                {
                    $count=mysqli_num_rows($res);
                    if($count >0)
                    {
                        while($rows=mysqli_fetch_assoc($res))
                        {

                            $rec_img=$rows['logo'];
                            $recruiters_name=$rows['recruiters_name'];
                            // $company_email=$rows['company_email'];
                            $status=$rows['status'];
                            $start_date=$rows['start_date'];
                            $qualification=$rows['qualification'];
                            $contact_client_company=$rows['contact_client_company'];


                    ?>
            <div class="singletask_myTasks">
                <input type="checkbox" name="checkBoxItem" id="te2" > &emsp;
                <!-- <?php echo '<img src="data:image;base64,'.base64_encode($rec_img).' "  style="width: 50px; height: 50px;" >' ;   ?> -->
                <span>
                <p class="light_spanItem_singleTask_myTasks1"><?php echo $contact_client_company; ?> (<?php echo $qualification; ?>)</p>
                    <!-- <p class="light_spanItem_singleTask_myTasks" style="font-size:12px"><?php echo $company_email; ?></p> -->
                </span>&emsp;
                <span>
                    <p class="light_spanItem_singleTask_myTasks">Status</p>
                    <?php
                        if($status == 'Approved')
                        {
                    ?>
                    <p style="color:#51C46D;font-size:14px">Approved</p>
                    <?php
                        }
                        elseif($status == 'Rejected')
                        {
                    ?>
                    <p style="color:#EC4551;font-size:14px">Rejected</p>
                    <?php
                        }
                        elseif($status == 'Shortlisted')
                        {
                    ?>
                    <p style="color:#FFBD06;font-size:14px">Shortlisted</p>
                    <?php
                        }
                    ?>

                </span>&emsp;
                <span>
                    <p class="light_spanItem_singleTask_myTasks">Through</p>
                    <p style="color:#3598DB;font-size:14px">LinkedIn</p>
                </span>&emsp;&emsp;
                <span>
                    <p class="light_spanItem_singleTask_myTasks"style="font-size:13px">Recruiter name</p>
                    <p style="font-size:13px"><b><?php echo $recruiters_name; ?></b></p>
                </span>&emsp;
                <span>
                    <p class="light_spanItem_singleTask_myTasks">Added on  <span style="color:#333333"><?php echo $start_date; ?></span></p>
                    <p style="color:#3598DB;font-size:14px">&emsp;View resume</p>
                </span>

            </div>
            <?php
                        }
                        $flag=0;
                    }
                }
                ?>


        </div>
    </div>
    <!--center section-->

    <div class="col-lg-3 mb-4">
    <div class="card" style="height:3000px;width:240px">
            <div class="card-body">
                <div class="right-panel" style="text-align:center">
                    <br>
                    <div id="box_12">
                        #JB1554-1&emsp;&emsp;
                        <span style="color:#979797;font-size:13px"><?php echo  $start_date ?></span>
                    </div><br>
                    <div class="status-name">
                        <!-- <div> -->
                        <span id="r1"><img src="img/red-logo.png" width="15" height="15"> <?php echo  $position ?></span>
                        <p style="color:#3598DB;font-size: 14px"><?php echo  $client_company ?><img src="img/launch-24px.png" width="15" height="17"><br>
                        <span style="color:#979797;font-size:14px"><i class="fa fa-map-marker"></i> <?php echo  $district ?></span><br>
                        <span style="color:#979797;line-height: 3;"><?php echo  $job_type ?></p>
                        <hr style="color:#979797;width:100%"></hr>
                    </div>
                    <!-- <div class="displayname">  -->
                    <div>

                        <img src="img/eye-icon.jpg" width="25" height="20">&emsp;&emsp;
                        <img src="img/task-icon.png" width="23" height="25">&emsp;&emsp;
                        <img src="img/person-icon.png" width="23" height="20">
                    </div>
                        <!-- <div class="displayname">  -->
                    <div>
                        <!-- <p><b><?php echo  $job_views ?> &nbsp;&emsp;&emsp;6 &nbsp;&emsp;&emsp;1/4</b></p> -->
                    </div><br><br>
                        <!-- <div class="displayname">  -->
                    <div>
                        <p style="color:#979797; line-height:10%;font-size:14px">Status &emsp;&emsp;&emsp;Last Contact</p>
                        <p><span style="color:#51C46D;">Active&nbsp;&emsp;&emsp;&emsp;</span><span style=""><?php echo  $start_date ?></span></p>
                    </div><br>
                    <!-- <div class="displayname">  -->
                    <div>
                        <p style="color:#979797; line-height:10%;font-size:14px">Industry&emsp;&emsp;&emsp; Qualification req</p>
                        <p style="color:#333333; "><b><?php echo  $industry ?>&emsp;&emsp;&emsp;&emsp;&emsp; <?php echo  $qualification ?>&emsp;&emsp;</b></p>
                    </div><br>
                    <!-- <div class="displayname"> -->
                    <div class="info1">
                        <div>
                            <p style="color:#979797; ">Created by</p>
                            <p style="color:#3598DB; "><?php echo  $advert_contact_name ?></p>
                            <!-- <p style="color:#333333; line-height:10%"><?php echo  $company_email ?></p> -->
                            <p style="color:#333333; line-height:30%">+91 <?php echo  $advert_contact_no ?></p>
                        </div><br>

                        <!-- <div class="displayname"> -->
                        <div>
                            <p style="color:#979797; ">Active Contact</p>
                            <p style="color:#3598DB; "><?php echo  $advert_contact_name ?></p>
                            <!-- <p style="color:#333333; line-height:10%"><?php echo  $company_email ?></p> -->
                            <p style="color:#333333; line-height:30%">+91 <?php echo  $advert_contact_no ?></p>
                        </div><br>

                        <!-- <div class="displayname"> -->
                        <div>
                            <p style="color:#979797; ">Assigned to</p>
                            <p style="color:#3598DB; "><?php echo  $advert_contact_name ?></p>
                            <!-- <p style="color:#333333; line-height:10%"><?php echo  $company_email ?></p> -->
                            <p style="color:#333333; line-height:30%">+91 <?php echo  $advert_contact_no ?></p>
                        </div><br>

                        <!-- <div class="displayname"> -->
                        <div>
                            <p style="color:#979797; ">Contact info</p>
                            <!-- <p style="color:#3598DB; "><?php echo  $company_email ?></p> -->
                            <p style="color:#333333; line-height:10%">+91 <?php echo  $advert_contact_no ?></p>
                            <p style="color:#333333; line-height:30%">+91 <?php echo  $advert_contact_no ?></p>
                        </div><br>
                            <!-- <div class="displayname"> -->
                        <div>
                            <p style="color:#979797; ">Address</p>
                            <p style="color:#333333; "><?php echo  $district ?> <br><?php echo  $state ?>, <?php echo  $country ?></p>
                        </div>
                    </div>
                </div>
            <!-- right panel close -->
            </div>
        <!-- end of card body -->
        </div>
    <!-- end of card -->
    </div>
    <!-- end of column -->



</div>
<!-- Row ended -->
<br>


</body>
