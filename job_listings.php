<?php

   include 'connection1.php';
   session_start();
?>



<?php include('include/header.php') ?>


<title>Job Listings</title>
<link rel="stylesheet" href="css/job_listings.css">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
<link rel="stylesheet" href="//code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous"></script>
<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.min.js" integrity="sha384-w1Q4orYjBQndcko6MimVbzY0tgp4pWB4lZ7lr30WKz0vr/aWKhXdBNmNb5D92v7s" crossorigin="anonymous"></script>


<style type="text/css">

</style>

<body>
    <div class="container" style="margin-left:450px;margin-top:-60px;">
        <nav class="nav_main">
     <div class="input-field">
        <form action="" method="POST">
          <input
            type="text"
            name="searchForJobs1"
            id="inputSearch"
            class="searchForJobs"
            placeholder="Search for Jobs"
          />
          <button class="searchButton" name="jobscr">
            <img src="./img/search-icon-blue.png" />
          </button>
          </form>
        </div>
    </nav>
</div>
<br>
<div class="bread-crumbs_Mytools-recruiter">
    <a href="/" class="active-breadcrumb-link">&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;Dashboard</a> > <a href="" class="active-breadcrumb-link">My Dashboard</a> > <a href="" class="active-breadcrumb-link">Job Listing</a>
</div>

<?php

$flag=0;
$status=0;
if(isset($_POST['btnhigh']))
{
  $sql="SELECT * FROM `joblistings` WHERE priority= '3'";
  $flag=1;
}
if(isset($_POST['btnlow']))
{
  $sql="SELECT * FROM `joblistings` WHERE priority= '1'";
  $flag=1;
}
if(isset($_POST['btnmedium']))
{
  $sql="SELECT * FROM `joblistings` WHERE priority= '2'";
  $flag=1;
}
if(isset($_POST['btnsearch']))
{
  $searchForJobs=$_POST['searchForJobs'];
  $sql="SELECT * FROM `joblistings` WHERE job_id='$searchForJobs'";
  $flag=1;
}

if(isset($_POST['jobscr']))
{
  $searchForJobs=$_POST['searchForJobs1'];
  $sql="SELECT * FROM `joblistings` WHERE position='$searchForJobs'";
  $flag=1;
}
if(isset($_POST['btnactive']))
{
  $flag=0;
  $status=2;
   ?>
       <script type='text/javascript'>
           $(document).ready(function(){
              $("#b1").css({"border-bottom":"3px solid transparent","color":"black"});
              $("#b2").css({"border-bottom":"3px solid #3598DB","color":"#3598DB"});
              $("#b3").css({"border-bottom":"3px solid transparent","color":"black"});
               });
       </script>
   <?php
}

if(isset($_POST['btncompleted']))
{
  $flag=0;
  $status=1;
   ?>
       <script type='text/javascript'>
           $(document).ready(function(){
              $("#b1").css({"border-bottom":"3px solid transparent","color":"black"});
              $("#b3").css({"border-bottom":"3px solid #3598DB","color":"#3598DB"});
              $("#b2").css({"border-bottom":"3px solid transparent","color":"black"});
               });
       </script>
   <?php
}

if(isset($_POST['btnall']))
{
  $flag=0;
   ?>
       <script type='text/javascript'>
           $(document).ready(function(){
              $("#b2").css({"border-bottom":"3px solid transparent","color":"black"});
              $("#b1").css({"border-bottom":"3px solid #3598DB","color":"#3598DB"});
              $("#b3").css({"border-bottom":"3px solid transparent","color":"black"});
               });
       </script>
   <?php

}



 ?>
<div class="container" style="margin-left:150px">
    <div class="small_container">

        <div class="row-flex-jobs-j alignitemsstart-shortlisted">
            <div class="heading_dash">
                <div class="row-flex-jobj">
                    <h1 class="head_main">Job listings</h1>
                </div>
                <div>
                    <a href="/" class="active-breadcrumb-link">Check and manage all your job listings</a>
                </div><br>
            <div>
        </div>

        <div class="row" style="display: flex">
            <div class="col-8">
                <div class="input-field" style="width:571px">
                <img src="img/location_icon.png" alt="" width="15" height="15" >
                <a href="/" class="active-breadcrumb-link">All Jobs   &emsp;   <span style="color:#979797">|&emsp; &emsp;</span></a>

              <form method="post">
                <input
                    type="text"
                    name="searchForJobs"
                    id="inputSearch"
                    class="searchForJobs"
                    placeholder="Search for Jobs by ID   "
                />&emsp;&emsp; &emsp;&emsp;&emsp; &emsp;&emsp;&emsp; &emsp;&emsp;&emsp; &emsp;
                <button class="searchButton" type="submit" name="btnsearch">
                    <img src="img/search-icon-blue.png" width="15" height="15" style="font:right" />
                </button>
              </form>

                </div>
            </div>
            <div class="col-4">
                <span class="sortByMyTasks" style="margin-left:40px ; ">Sort By: </span>
                <span class="recentMyTasks"><a href="/" class="active-breadcrumb-link">Recent </a></span>
                <span class="sortByMyTasks" style="color:black">Priority &nbsp;<img src="img/dropdown.png" width="15" height="10" style="font:right" /></span>
            </div>
        </div><br>

        <div class="row">
            <div class="col-4" style="margin-left:800px">
             <form method="post">
               <button type="submit" style="background: none;border: none;" name="btnhigh"><img src="img/red-icon.png" width="30" height="20"> High&emsp;</button>
               <button type="submit" style="background: none;border: none;" name="btnmedium"><img src="img/orange-icon.png" width="17" height="18">&nbsp;&nbsp;Medium&emsp;</button>
               <button type="submit" style="background: none;border: none;" name="btnlow"><img src="img/Yellow-icon.png" width="17" height="18">&nbsp;&nbsp;Low</button>
             </form>

            </div>
            <div class="col-8"><br>
                <div class="categories-mytasks-1-active">

                  <form method="post">
                    <button type="submit" style="background: none;border: none;" name="btnall"><p class=" category-mytasks1 active" id="b1" >All</p></button>
                    <button type="submit" style="background: none;border: none;" name="btnactive"><p class="category-mytasks1" id="b2" >Active</p></button>
                    <button type="submit" style="background: none;border: none;" name="btncompleted"><p class="category-mytasks1 " id="b3" >Completed</p></button>
                 </form>



                </div>
            </div>

        </div>



        <div class="singleTasks_containerDiv">
            <?php
          //  $sql="SELECT * FROM `joblistings`";
          if($flag == 0)
          {
            $sql="SELECT * FROM `joblistings`";
          }
            $res=mysqli_query($conn,$sql);
            if($res)
            {
                $count=mysqli_num_rows($res);
                if($count >0)
                {
                    while($rows=mysqli_fetch_assoc($res))
                    {
                        $start_date=$rows['start_date'];
                        $state=$rows['state'];
                        $position=$rows['position'];
                        $openings=$rows['openings'];
                        $client_company=$rows['client_company'];
                        $job_type=$rows['job_type'];
                        $contact_client_company=$rows['contact_client_company'];
                        // $job_views=$rows['job_views'];
                        $skills=$rows['skills'];
                        $required_experience=$rows['required_experience'];
                        $advert_job_description=$rows['advert_job_description'];
                        // $availability_time=$rows['availability_time'];
                        // $company_email=$rows['company_email'];
                        $workspace_view=$rows['workspace_view'];
                        $rec_img=$rows['logo'];
                        $job_id=$rows['job_id'];
                        $recruiters_name=$rows['recruiters_name'];
                        $priority=$rows['priority'];

                        $end_date=$rows['end_date'];
                        $now = time(); // or your date as well
                        $your_date = strtotime($end_date);
                        $datediff = $now - $your_date;
                        $remain_days=round($datediff / (60 * 60 * 24));

                         if(($flag == 0) && ($status == 1))
                         {
                           if($remain_days < 0)
                           {
                              continue;
                           }
                         }

                         if(($flag == 0) && ($status == 2))  //for completed
                         {
                           if($remain_days > 0)
                           {
                              continue;
                           }
                         }


                 ?>
            <div class="singletask_myTasks">
                <input type="checkbox" name="checkBoxItem" style="border: 1px solid #3598db;" >
                <?php
                   if($priority == '3')
                   {
                ?>
                   <img src="img/red-icon.png" width="30" height="20">
                <?php
                   }
                   elseif($priority == '2')
                   {
                ?>
                    <img src="img/orange-icon.png" width="20" height="20">
                <?php
                    }
                    elseif($priority == '1')
                    {
                ?>
                    <img src="img/Yellow-icon.png" width="20" height="20">
                <?php
                    }
                ?>
                <span>
                    <p class="light_spanItem_singleTask_myTasks">Added on</p>
                    <p class="date_s"><?php echo $start_date; ?></p>
                </span>
                <span>
                    <p class="ac_assis"><?php echo $position; ?></p>
                     <p class="id_num">#<?php echo $job_id; ?></p>
                     <p class="loc_pin"><i class="fa fa-map-marker"></i> <?php echo $state; ?></p>
                </span>
                <span>
                    <p style="color:#333333;font-size:14px;line-height:1px "><?php echo $job_type; ?></p>
                    <p style="color:#979797;font-size:14px "><?php echo $openings; ?> openings</p>
                </span>

                <button class="x1" onclick="location.href='job_listings_individual.php?j_id=<?php echo $job_id; ?>'"><?php echo '<img src="data:image;base64,'.base64_encode($workspace_view).' "  style="width: 50px; height: 50px;" >' ;   ?></button>

                <span>
                    <p style="color:#979797;line-height:1px ">Company contact</p>
                    <p style="color:#3598DB;line-height:1px "><b><?php echo $contact_client_company; ?></b></p>
                    <p style="color:#333333"><?php echo $client_company; ?></p>
                </span>
                <!-- <span>
                    <img src="img/eye-icon.jpg" width="25" height="15">
                    <p style="color:#333333; "><b>&nbsp;<?php echo $job_views; ?></b></p>
                </span> -->
                <span>
                    <img src="img/task-icon.png" width="20" height="20">
                    <p style="color:#333333; "><b>&nbsp;6</b></p>
                </span>
                <span>
                    <img src="img/person-icon.png" width="25" height="20">                    <p style="color:#333333; "><b>&nbsp;1/4</b></p>
               <!--  </span>
                <?php echo '<img src="data:image;base64,'.base64_encode($rec_img).' "  style="width: 55px; height: 55px;" >' ;   ?>
                <span>
 -->                    <p style="color:#979797;line-height:1px ">Recruiter</p>
                    <!-- <p style="color:#3598DB;line-height:1px "><b><?php echo $recruiters_name; ?></b></p> -->
                    <!-- <p style="color:#333333"><?php echo $company_email; ?></p> -->
                </span>
            </div>
            <?php
                        }
                        $flag=0;
                        $status=0;
                    }
                }
            ?>


        </div>
        <div class="addnew"><img src="img/plus.png" width="50" height="50" style="margin-left:1000px" /></div>
        <br><br><br>
    </div>
