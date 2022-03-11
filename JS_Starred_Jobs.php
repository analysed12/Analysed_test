<?php
include 'connection1.php';          //database connection page included
session_start();             //session has been started
?>


<?php include('include/header.php')?>


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
<link rel="stylesheet" href="css/js_nearby_jobs.css">
<!-- <link rel="stylesheet" href="./css/js_more_jobs.css"> -->
<body>

    <br>
    <div class="bread-crumbs_Mytools-recruiter">
     <a href="" class="active-breadcrumb-link">&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;<u>Dashboard</u> </a><span style="color:#3598DB"> > </span>
     <a href="" class="active-breadcrumb-link"><u> Starred_Jobs </u></a>
    </div>
    <br><br>
    <div class="main_body">
       <div class="container">
         <p class="a1">Starred jobs <img src="img/stats-img-4.png" height="47px" width="47px"></p>

         <div class="row">
            <div class="col-2">
                    <label id="b1" >Sort by:&emsp;<a href="/" class="active-breadcrumb-link">Recent</a> </label>
            </div>
            <div class="col-3">
                    <label id="b2">Applicants: Low to High <img src="./img/dropdown.png" height="10" weight="15"></label>
            </div>
            </div>
            <br>

            <div class="row">
        <div class="col-9">
          <?php
            if(isset($_POST['btnapply']))
            {
          ?>
          <div class="row">
            <?php
              $exclamloc="";
              $exclamindus="";
              $mystate=$_GET['mystate'];
              $location=$_POST['location'];
              $minsal=$_POST['minsal'];
              $maxsal=$_POST['maxsal'];
              $chooseindustry=$_POST['chooseindustry'];
              $jobtype=$_POST['jobtype'];
              $skill=$_POST['skill'];
              if($location=="")
              {
                $location="!";
              }

              if($minsal=="")
              {
                $minsal=0;
              }
              if($maxsal=="")
              {
                $maxsal=10000;
              }
              if($chooseindustry=="")
              {
                $exclamindus="!";
              }

              $skill='%'.$skill.'%';

              $sql3="SELECT * FROM `joblistings` WHERE (state ='$mystate') AND (district $exclamloc='$location') AND (package BETWEEN $minsal AND $maxsal) AND (industry $exclamindus= '$chooseindustry') AND (job_type='$jobtype') AND (skills LIKE '$skill')";
                  //echo $sql3;
              $res3=mysqli_query($conn,$sql3);
              if($res3 == TRUE)
              {
                $count=mysqli_num_rows($res3);
                if($count >0)
                {
                  while($rows=mysqli_fetch_assoc($res3))
                  {
                    $workspace_view=$rows['workspace_view'];
                    $client_company=$rows['client_company'];
                    $state=$rows['state'];
                    $country=$rows['country'];
                    $position=$rows['position'];
                    $start_date=$rows['start_date'];
                    $end_date=$rows['end_date'];
                    $skills=$rows['skills'];
                    $job_type=$rows['job_type'];
                    $now = time(); // or your date as well
                    $your_date = strtotime($end_date);
                    $datediff =  $your_date - $now;
                    $remain_days=round($datediff / (60 * 60 * 24));

                    $start_date2 = strtotime($start_date);
                    $datediff2 =  $your_date - $start_date2;

                    $actual_days=round($datediff2 / (60 * 60 * 24));
                    $district=$rows['district'];
            ?>


            <div class="col-4 mb-3">
              <div class="card" style="height:315px;width:250px" id="temp2">
                <div class="icons">
                  <img src="img/share-icon.png" height="27" width="29">&emsp;
                  <img src="img/star-color.png" height="27" width="29">
                </div>
                <div class="row" style="margin-left:10px;">
                  <div class="col-3">
                    <!-- <img src="img/Airbnb-logo.png" height="55" width="55"/> -->
                    <?php echo '<img src="data:image;base64,'.base64_encode($workspace_view).' "  style="width: 50px; height: 50px;" >' ;   ?>
                  </div>
                  <div class="col-9">
                    <br><span style="line-height:1 ;" id="b4"><?php echo $client_company; ?></span><br>
                    <span id="b5"><?php echo $state; ?>,<?php echo $country; ?></span>
                  </div>
                </div><br>
                <div class="designation" style="margin-left:20px;">
                    <?php echo $position; ?>
                </div>
                <div style="margin-left:20px;">
                    <progress value="<?php echo $remain_days; ?>" max="<?php echo $actual_days; ?>" ></progress>
                    <span class="days"> <?php echo $remain_days; ?> days left</span >
                </div><br>
                <div class="skills" style="margin-left:20px;">
                    <p style="font-size:13px;line-height:2px ;"> <i><?php echo $skills; ?></i></p>
                </div>

                <br>
                <div class="last_job_content" style="margin-left:20px;">
                    <p id="first"><?php echo $job_type; ?></p>
                    <a href="jobDescription.php?id=<?php echo $jobid; ?>" id="second">View Details</a>
                </div>
              </div>
            </div>
            <?php
                }
              }
            }
            ?>
          </div>

          <?php
            }
            else
            {
          ?>
          <div class="row">
            <?php
              $mystate=$_GET['mystate'];
              $sql="select * from joblistings where state='$mystate'";
              $res=mysqli_query($conn,$sql);
              if($res == TRUE)
              {
                $count=mysqli_num_rows($res);
                if($count >0)
                {
                  while($rows=mysqli_fetch_assoc($res))
                  {

                      $workspace_view=$rows['workspace_view'];
                      $client_company=$rows['client_company'];
                      $state=$rows['state'];
                      $country=$rows['country'];
                      $position=$rows['position'];
                      $start_date=$rows['start_date'];
                      $end_date=$rows['end_date'];
                      $skills=$rows['skills'];
                      $job_type=$rows['job_type'];
                      $now = time(); // or your date as well
                      $your_date = strtotime($end_date);
                      $datediff =  $your_date - $now;
                      $remain_days=round($datediff / (60 * 60 * 24));

                      $jobid=$rows['job_id'];
                      $start_date2 = strtotime($start_date);
                      $datediff2 =  $your_date - $start_date2;

                      $actual_days=round($datediff2 / (60 * 60 * 24));
                      $district=$rows['district'];
            ?>

            <div class="col-4 mb-3">
              <div class="card" style="height:315px;width:250px" id="temp2">
                <div class="icons">
                    <img src="img/share-icon.png" height="27" width="29">&emsp;
                    <img src="img/star-color.png" height="27" width="29">
                </div>
                <div class="row" style="margin-left:10px;">
                    <div class="col-3">
                      <!-- <img src="img/Airbnb-logo.png" height="55" width="55"/> -->
                      <?php echo '<img src="data:image;base64,'.base64_encode($workspace_view).' "  style="width: 50px; height: 50px;" >' ;   ?>
                    </div>
                    <div class="col-9">
                    <br><span style="line-height:1 ;" id="b4"><?php echo $client_company; ?></span><br>
                    <span id="b5"><?php echo $state; ?>,<?php echo $country; ?></span>
                    </div>
                </div><br>
                <div class="designation" style="margin-left:20px;">
                    <?php echo $position; ?>
                </div>
                <div style="margin-left:20px;">
                    <progress value="<?php echo $remain_days; ?>" max="<?php echo $actual_days; ?>" ></progress>
                    <span class="days"> <?php echo $remain_days; ?> days left</span >
                </div><br>
                <div class="skills" style="margin-left:20px;">
                    <p style="font-size:13px;line-height:2px ;"> <i><?php echo $skills; ?></i></p>
                </div>

                <br>
                <div class="last_job_content" style="margin-left:20px;">
                    <p id="first"><?php echo $job_type; ?></p>
                    <a href="jobDescription.php?id=<?php echo $jobid; ?>" id="second">Apply Now</a>
                </div>
              </div>

            </div>


            <?php
                  }
                }
              }

            ?>

          </div>
          <?php
            }
          ?>
        </div>

        <div class="col-3 mb-4">
          <form action="" method="POST">
            <p id="f1">Filters <img src="img/filter_list-24px.svg" height="20" width="20"  /> <br><br>
            <span style="color:#3598DB">Change location</span>
            <br><input type="text" name="location" placeholder=" &emsp;Type Location" class="loc"><br><br>
            Pay type salary<br>
            <div class="sal2">
                <input type="text" name="minsal" style="float: left; " placeholder=" &emsp;Min" class="f2" >
                <input type="text" name="maxsal" style="float:right;" placeholder="&emsp; Max" class="f3" ></p>
            </div>
            <p id="f1" style="margin-top:20px">Industry</p>
            <select title="Status" name="chooseindustry" class="sel">
            <option value="" selected>&emsp;  Choose Industry</option>
            <?php
                $sql1="select DISTINCT industry from joblistings";
                $res1=mysqli_query($conn,$sql1);
                if($res1 == TRUE)
                {
                  $count=mysqli_num_rows($res1);
                  if($count > 0)
                  {
                    while($rows=mysqli_fetch_assoc($res1))
                    {
                        $temp=$rows['industry'];
            ?>
            <option value="<?php echo $temp;?>"><?php echo $temp; ?></option>
            <?php
                    }
                  }
                }
            ?>
            </select><br><br>
            <p id="f1">Job Type</h4>
            <br>
            <div class="radio-options" id="b3">
              <input type="radio" value="Part-time" name="jobtype"> Part-time
              <br><br>
              <input type="radio" value="Full-time" name="jobtype"> Full-time
              <br><br>
              <input type="radio" value="Internship" name="jobtype"> Internship
            </div>
            <br>
            <div id="f1" >
              Add Skills +
            </div>
            <br><input type="text" name="skill" placeholder=" &emsp;Enter skills" class="loc"><br><br>
            <button class="addFilesMyTasks1" id="btnapply" name="btnapply"> Apply </button>
          </form>
        </div>
      </div>

     </div>

    </div>
</body>
