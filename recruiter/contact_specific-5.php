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
<link rel="stylesheet" href="./css/contact_specific-5.css">
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
.category-mytasks1{
  cursor: pointer;
  border-bottom: 3px solid transparent;
  width: 100%;
  padding: 20px;
  font-size: 16px;
}
.category-mytasks1.active{
  border-bottom: 3px solid #3598DB;
  color: #3598DB;
  width: 20%;
  /* padding: 20px; */
  font-weight: 500;
  font-size: 16px;

}
</style>
<?php
   $flag=0;
   $statuss=0;
   if(isset($_POST['btnsearch']))
   {
     $id=$_POST['textsearch'];
     $sql1="select * from job_list where job_id='$id'";
     $flag=1;
   }

   if(isset($_POST['btnactive']))
   {
     $flag=0;
     $statuss=2;
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
     $statuss=1;
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
<body>
    <div class="container">
        <div class="small_container">
            <div class="bread-crumbs_Mytools-recruiter">
                <a href="/" class="unactive-breadcrumb-link">Dashboard</a> > <a href="" class="unactive-breadcrumb-link">My Database</a> > <a href="" class="unactive-breadcrumb-link">Add Contact</a> > <a href="" class="unactive-breadcrumb-link"> Client List</a> > <a href="" class="active-breadcrumb-link"><?php echo  $name ?></a>
            </div>

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
                <p><a href="contact_specific-1.php">At a glance</a></p>
                <p><a href="contact_specific-2.php">Appointments</a></p>
                <p><a href="contact_specific-3.php">Activity</a></p>
                <p style="color:#3598DB;margin-left:-2px"> <b style="margin-right: 10px;">|</b>Jobs</p>
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

            <div class="left-side-container-1">
                <span class="row-recruiter upcoming_interview_top_span">
                        <div class="search-box">
                        <details id="dropdown" class="dropdown">
                            <summary class="dropdown-button">
                                <span id="selected-item" class="selected-item"> <i class="fa fa-map-marker" aria-hidden="true"></i> All Locations</span>
                            </summary>
                            <details-menu class="dropdown-menu">
                                <div class="dropdown-menu-list">
                                    <label class="dropdown-menu-item">
                                        <input type="radio" name="item" value="1">
                                        <span>1</span>
                                    </label>
                                    <label class="dropdown-menu-item">
                                        <input type="radio" name="item" value="2">
                                        <span>2</span>
                                    </label>
                                    <label class="dropdown-menu-item">
                                        <input type="radio" name="item" value="3">
                                        <span>3</span>
                                    </label>
                                    <label class="dropdown-menu-item">
                                        <input type="radio" name="item" value="4">
                                        <span>4</span>
                                    </label>
                                </div>
                            </details-menu>
                        </details>

                      <form method="post">
                        <input class="search-form-input" type="search" name="textsearch" placeholder="Search for job by Id or title">
                        <button type="submit" name="btnsearch" class="searchButton">
                            <img src="./img/search-icon-blue.png" />
                        </button>
                      </form>

                    </div>
                    <button class="btn" id="myBtn" type="button">Add +</button>
                </span>
                <div class="row-flex-jobj justifycontent-flex-end-1">
                    <p class="sortbyText">Sort by :
                        <select name="multi_search" id="multi_search" class="sortbySelect">
                            <option>Recent</option>
                            <option value="Recent">All</option>
                            <option value="Old">Old</option>
                        </select>
                        <select  id="multi_search" class="search_list">
                            <option value="" default class="search_list_option">Prority</option>
                            <option value="1" class="search_list_option">1</option>
                            <option value="2" class="search_list_option">2</option>
                            <option value="3" class="search_list_option">3</option>
                        </select>
                    </p>
                </div>
                <div class="row-recruiter">
                    <div class="list" id="list">
                        <form method="post">
                          <button type="submit" style="background: none;border: none;" name="btnall"><p class="category-mytasks1 active" id="b1" >All</p></button>
                          <button type="submit" style="background: none;border: none;" name="btnactive"><p class="category-mytasks1" id="b2" >Active</p></button>
                          <button type="submit" style="background: none;border: none;" name="btncompleted"><p class="category-mytasks1 " id="b3" >Completed</p></button>
                       </form>
                    </div>
                    <div class="select-col">
                        <input type="checkbox" id="c" name="cb">
                        <label for="c" class="select-col-label"> Select all</label>
                    </div>
                    <select  id="multi_search" class="search_list_1">
                        <option value="" default>Select action</option>
                        <option value="1"></option>
                        <option value="2"></option>
                        <option value="3"></option>
                    </select>
                </div>

                <div id="Div1">


                    <?php
                       if($flag == 0)
                       {
                           $sql1="select * from joblistings";
                       }


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
                                       $end_date = $rows['end_date'];
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




                                    if(($flag == 0) && ($statuss == 2))  //for completed
                                    {
                                      if($remain_days > 0)
                                      {
                                         continue;
                                      }
                                    }
                    ?>

                    <div class="row">
                        <p class="added-class-1">Added on <span><?php echo $start_date; ?></span></p>
                        <p class="added-class-2">Last Edited <span><?php echo $start_date; ?></span></p>
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
                            <span class="col-span-5">6</span>
                        </div>
                        <div class="column">
                            <p class="col-5"><i class="fa fa-user" aria-hidden="true"></i></p>
                            <span class="col-span-5">1/4</span>
                        </div>
                        <div class="column">
                            <p class="col-6">Recruiter</p>
                            <p class="col-6-1"><?php echo $recruiters_name; ?></p>
                            <span class="col-span-6"><?php echo $main_email; ?></span>
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
<script>
var btnContainer=document.getElementById("list");
var btns=btnContainer.getElementsByClassName("btn-1");
for(var i=0;i<btns.length;i++){
    btns[i].addEventListener('click',function(){
        var current=document.getElementsByClassName("active");
        current[0].className=current[0].className.replace("active");
        this.className += " active";
    });
}
</script>

<script>
    var divs = ["Div1", "Div2","Div3"];
    var visibleDivId = null;
    function divVisibility(divId) {
      if(visibleDivId === divId) {
        visibleDivId = null;
      } else {
        visibleDivId = divId;
      }
      hideNonVisibleDivs();
    }
    function hideNonVisibleDivs() {
      var i, divId, div;
      for(i = 0; i < divs.length; i++) {
        divId = divs[i];
        div = document.getElementById(divId);
        if(visibleDivId === divId) {
          div.style.display = "block";
        } else {
          div.style.display = "none";
        }
      }
    }
</script>
