

<?php

   include 'connection1.php';     //database connection page included
   session_start();        //session has been started


?>




<?php include('header.php') ?>

<?php
    $c_id=15;
    $sql="select * from client where client_id='$c_id'";
    $res=mysqli_query($conn,$sql);
    if($res == TRUE)
    {
        $count=mysqli_num_rows($res);
        if($count >0)
        {
            while($rows=mysqli_fetch_assoc($res))
            {
                $name=$rows['company_name'];
                $company_name=$rows['company'];
                $client_img=$rows['company_img'];
                $role=$rows['role'];
                $main_email=$rows['main_email'];
                $contact_no=$rows['contact_no'];
                $added_on=$rows['last_updated'];
                $city=$rows['city'];
                $state=$rows['state'];
                $country=$rows['country'];
                $status=$rows['status'];
                $division=$rows['division'];
                $internal=$rows['internal'];
                $created_by=$rows['created_by'];
                $created_email=$rows['created_email'];
                $created_no=$rows['created_no'];

            }
        }
    }
?>
<title>Contact specific</title>
<link rel="stylesheet" href="./css/contact_specific-1.css">

<body>
    <div class="container">
        <div class="small_container">
            <div class="bread-crumbs_Mytools-recruiter">
                <a href="/" class="unactive-breadcrumb-link">Dashboard</a> > <a href="" class="unactive-breadcrumb-link">My Database</a> > <a href="" class="unactive-breadcrumb-link">Add Contact</a> > <a href="" class="unactive-breadcrumb-link"> Client List</a> > <a href="" class="active-breadcrumb-link"><?php echo $name ?></a>
            </div>

            <br><br>
            <div class="profile-img">
                <?php echo '<img src="data:image;base64,'.base64_encode($client_img).' " >' ;   ?>
                <h1><?php echo  $name ?><p1> #<?php echo  $c_id ?></p1></h1><br>
                <h2><?php echo  $company_name ?> - <span><?php echo  $role ?></span></h2><br>
                <h4><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-geo-alt-fill" viewBox="0 0 16 16">
                <path d="M8 16s6-5.686 6-10A6 6 0 0 0 2 6c0 4.314 6 10 6 10zm0-7a3 3 0 1 1 0-6 3 3 0 0 1 0 6z"/></svg> <?php echo  $state ?></h4>
            </div>
            <div class="button">
                <button>Edit client</button>
            </div>

            <div class="options">
                <p style="color:#3598DB;margin-left:-2px"> <b style="margin-right: 10px;">|</b>At a glance</p>
                <p><a href="contact_specific-2.php">Appointments</a></p>
                <p><a href="contact_specific-3.php">Activity</a></p>
                <p><a href="contact_specific-5.php">Jobs</a></p>
                <p><a href="contact_specific-4.php">Files</a></p>
                <p><a href="contact_specific-6.php">Notes</a></p>
            </div>

            <br><br>
            <div class="status">
                <div class="status1" >
                    <p>#<?php echo  $c_id ?></p>
                    <span><?php echo  $added_on ?></span>
                </div>
                <div class="status-name" style="margin-top:30px;">
                    <span style="margin-left:50px;"><?php echo  $name ?></span>
                    <p style="color:#3598DB;margin-left:70px"><?php echo  $company_name ?> <span style="color:black">| <?php echo  $role ?></span></p>
                    <u style="color:#979797;margin-left:15px">&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;</u>
                    <br><br>
                    <span style="color:#979797; font-size:15px; margin-left:20px;">Status&emsp;&emsp;&emsp;&emsp;Last Contact</span>
                    <br>
                </div>

                <div class="displayname">
                    <span><?php echo  $status ?></span>&emsp;&emsp;&emsp;&emsp;&emsp;<?php echo  $added_on ?>
                </div>
                <br><br>

                <div class="fee">
                    <span>Division&emsp;&emsp;&emsp;&emsp;Internal</span><br>
                </div>

                <div class="fee-percent">
                    <span><?php echo  $division ?></span>&emsp;&emsp;&emsp;&emsp;&emsp;<?php echo  $internal ?>
                </div>
                <br><br>

                <div class="details">
                    <p style="color:#979797;padding-top: 0px;">Created by</p>
                    <br>
                    <p style="color:#3598DB;"><?php echo  $created_by ?></p>
                    <p style="color:black;"><?php echo  $created_email ?></p>
                    <p style="color:black;">+91 <?php echo  $created_no ?></p>
                    <br><br>
                    <p style="color:#979797;padding-top: 0px;">Contact info</p>
                    <br>
                    <p style="color:#3598DB;"><?php echo  $main_email ?></p>
                    <p style="color:black;">+91 <?php echo  $contact_no ?></p>
                    <p style="color:black;">+91 <?php echo  $contact_no ?></p>
                    <br><br>
                    <p style="color:#979797;padding-top: 0px;">Address</p>
                    <br>
                    <p style="color:black"><?php echo  $city ?></p>
                    <p style="color: black;"><?php echo  $state ?> , <?php echo  $country ?>.</p>
                    <br><br>
                </div>
            </div>



            <?php
            $cs_id=3;
            $sql1="select * from contacts where contact_id='$cs_id'";
            $res1=mysqli_query($conn,$sql1);
            if($res1 == TRUE)
            {
                $count=mysqli_num_rows($res1);
                if($count >0)
                {
                    while($rows=mysqli_fetch_assoc($res1))
                    {
                        $last_edited=$rows['added_on'];
                        $files=$rows['files'];
                        $notes=$rows['notes'];
                        $jobs=$rows['job_title'];
                        $visibility=$rows['visibility'];
                        $source=$rows['source'];
                        $validity=$rows['validity'];
                        $type=$rows['contact_type'];
                        $skills=$rows['skills'];
                        $email=$rows['email'];
                        $contact_no=$rows['phone'];
                        $city=$rows['city'];
                        $state=$rows['state'];
                        $country=$rows['country'];
                    }
                }
              }
            ?>
            <div class="left-side-container-1">
                <div class="summary">
                    <div class="heading">
                        <p class="mainHeading">Summary</p>
                        <span class="mainheading-left">Last edited <span ><?php echo  $last_edited ?></span></span>
                    </div>
                    <div class="summary-content">
                        <p><i class="fa fa-file" aria-hidden="true"></i> Files <span><?php echo  $files ?></span></p>
                        <p><i class="fa fa-sticky-note" aria-hidden="true"></i> Notes<span><?php echo  $notes ?></span></p>
                        <p><i class="fa fa-suitcase" aria-hidden="true"></i> Jobs <span><?php echo  $jobs ?></span></p>
                    </div>
                    <div class="summary-content-right">
                        <div class="visibility">
                            <p class="class-p">Visibility</p>
                            <span class="span-class"><?php echo  $visibility ?></span>
                        </div>
                        <div class="source">
                            <p class="class-p">Source</p>
                            <span class="span-class"><?php echo  $source ?></span>
                        </div>
                        <div class="validity">
                            <p class="class-p">Validity</p>
                            <span class="span-class"><?php echo  $validity ?></span>
                        </div>
                        <div class="type">
                            <p class="class-p">Type</p>
                            <span class="span-class"><?php echo  $type ?></span>
                        </div>
                    </div>
                </div>

                <div class="skills">
                    <div class="heading">
                        <p class="mainHeading">Required Skills</p>
                    </div>
                    <div class="skills-content">
                        <!-- <p>PHP</p> -->
                        <?php
                            $skills_arr = explode (",", $skills);
                            foreach($skills_arr as $value)
                            {
                        ?>
                        <p><?php echo $value;?></p>
                        <?php
                            }
                        ?>
                    </div>
                </div>

                <div class="tasks" style="height:280px;">
                    <div class="heading">
                        <p class="mainHeading">Tasks</p>
                    </div>
                    <div class="task-content">
                    <?php
                        $job_id = 1;
                        $sql2="select * from company_task where job_id = $job_id";
                        $res2=mysqli_query($conn,$sql2);
                        if($res2 == TRUE)
                        {
                            $count=mysqli_num_rows($res2);
                            if($count >0)
                            {
                                while($rows=mysqli_fetch_assoc($res2))
                                {
                                    $comp_img=$rows['comp_img'];
                                    $job_comp=$rows['job_comp'];
                                    $name_task=$rows['name_task'];
                                    $desc_short=$rows['desc_short'];
                                    $start_date=$rows['start_date'];
                                    $end_date=$rows['end_date'];


                            ?>
                        <div class="task-row">

                            <div class="task-column">
                            <?php echo '<img src="data:image;base64,'.base64_encode($comp_img).' "  style="width: 55px; height: 55px;" >' ;   ?>
                            </div>
                            <div class="task-column">
                                <p class="col-1"><?php echo $job_comp; ?></p>
                                <span class="col-span-1">30%</span>
                            </div>
                            <div class="task-column">
                                <p class="col-2"><?php echo $name_task; ?></p>
                                <span class="col-span-2"><?php echo $desc_short; ?></span>
                            </div>
                            <div class="task-column">
                                <p class="col-3">Assigned in</p>
                                <span class="col-span-3"><?php echo $start_date; ?></span>
                            </div>
                            <div class="task-column">
                                <p class="col-4">Deadline</p>
                                <span class="col-span-4"><?php echo $end_date; ?></span>
                            </div>

                        </div>
                        <hr style="color:#979797;margin-top:15px;margin-bottom:10px">
                        <?php
                                    }
                                }
                            }
                        ?>

                    </div>
                </div>

                <div class="contact-info">
                    <div class="heading">
                        <p class="mainHeading">Contact-info</p>
                    </div>
                    <div class="contact-info-content">
                        <p class="contact-email"><?php echo  $email ?></p>
                        <span><?php echo  $contact_no ?></span><br>
                        <span><?php echo  $contact_no ?></span>
                    </div>
                    <div class="contact-info-content" style="margin-top: 25px;">
                        <span><?php echo  $city ?>,</span><br>
                        <span><?php echo  $state ?>, <?php echo  $country ?></span>
                    </div>
                </div>
                <div class="open-jobs">
                    <p>Open jobs</p>


                    <?php
                        $job_id=8;
                        $sql="select * from joblistings where job_id =$job_id";
                        $res=mysqli_query($conn,$sql);
                        if($res == TRUE)
                        {
                            $count=mysqli_num_rows($res);
                            if($count >0)
                            {
                                while($rows=mysqli_fetch_assoc($res))
                                {
                                    $priority=$rows['priority'];
                                    $job_type=$rows['job_type'];

                                    $state=$rows['state'];
                                    $position=$rows['position'];
                                    $job_id=$rows['job_id'];

                                    $contact_client_company=$rows['contact_client_company'];
                                    $company_website=$rows['company_website'];

                                    $job_views=$rows['job_views'];
                                    $openings=$rows['openings'];

                                    $recruiters_name=$rows['recruiters_name'];
                                    $company_email=$rows['company_email'];

                                    $now = time(); // or your date as well
                                    $your_date = strtotime($end_date);
                                    $datediff = $your_date -$now;
                                    $remain_days=round($datediff / (60 * 60 * 24));

                                    if($remain_days < 0)
                                    {
                                      continue;
                                    }


                    ?>
                    <div class="row">
                        <div class="column">
                            <input type="checkbox" id="c1" class="checkbox">
                            <label for="c1"></label>
                        </div>
                        <div class="column">
                        <?php
                            if($priority == 'High')
                            {
                        ?>
                        <span  class="span-class-red"></span>
                        <?php
                        }
                        elseif($priority == 'Medium')
                        {
                        ?>
                           <span  class="span-class-orange"></span>
                        <?php
                            }
                            elseif($priority == 'Low')
                            {
                        ?>
                            <span  class="span-class-yellow"></span>
                        <?php
                            }
                        ?>

                        </div>
                        <div class="column">
                            <p class="col-2"><?php echo $job_type; ?></p>
                        </div>
                        <div class="column">
                            <p class="col-3"><?php echo $position; ?></p>
                            <p class="col-3-1">#<?php echo $job_id; ?></p>
                            <span class="col-span-3"><i class="fa fa-map-marker" aria-hidden="true"></i> <?php echo $state; ?></span>
                        </div>
                        <div class="column">
                            <p class="col-4">Company contact</p>
                            <p class="col-4-1"><?php echo $contact_client_company; ?></p>
                            <span class="col-span-4"><?php echo $company_website; ?></span>
                        </div>
                        <div class="column">
                            <p class="col-5"><i class="fa fa-eye" aria-hidden="true"></i></p>
                            <span class="col-span-5"><?php echo $job_views; ?></span>
                        </div>
                        <div class="column">
                            <p class="col-5"><i class="fa fa-clipboard" aria-hidden="true"></i></p>
                            <span class="col-span-5"><?php echo $openings; ?></span>
                        </div>
                        <div class="column">
                            <p class="col-5"><i class="fa fa-user" aria-hidden="true"></i></p>
                            <span class="col-span-5">1/4</span>
                        </div>
                        <div class="column">
                            <p class="col-6">Recruiter</p>
                            <p class="col-6-1"><?php echo $recruiters_name; ?></p>
                            <span class="col-span-6"><?php echo $company_email; ?></span>
                        </div>
                    </div>
                    <?php
                                }
                            }
                        }
                    ?>

                </div>
                </div>




            </div>
        </div>
    </div>
</body>

<script>
var items = document.getElementsByName('item');
var selectedItem = document.getElementById('selected-item');
var dropdown = document.getElementById('dropdown');

items.forEach(item => {
  item.addEventListener('change', () => {
    if (item.checked) {
      selectedItem.innerHTML = item.value;
      dropdown.open = false;
    }
  });
});
</script>
