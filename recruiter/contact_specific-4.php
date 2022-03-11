

<?php

   include 'connection1.php';     //database connection page included
   session_start();        //session has been started


?>




<?php include('header.php') ?>

<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>

<style>
    #upload-modal
  {
    background-color: rgba(0, 0, 0, 0.6);
    width: 100%;
    height: 100%;
    left: 0%;
    top: 0%;
    position: fixed;
    z-index: 2;
    display: none;
  }
  #upload-container
  {
    width: 850px;
    height: 550px;
    background-color: white;
    border-radius: 10px;
    position: absolute;
    left: 50%;
    top: 50%;
    transform: translate(-50%, -50%);
    padding: 10px;
    /* text-align: center; */

  }
  .upload
{
 margin-top: 20px;
margin-left: 20px;
color:#3598DB;
font: normal normal normal 20px/19px CeraB;
}

.filetype
{
 margin-top: 20px;
margin-left: 50px;
font-size: 20px;
font: normal normal normal 15px/19px MetroM;
}
 .input_type
{
 margin-top: 10px;
margin-left: 0px;
width: 300px;
height: 40px;
border: 2px solid var(--unnamed-color-3598db);
border: 2px solid #3598DB;
border-radius: 7px;
opacity: 1;
margin-left : 50px;
}
.ro{
  width: 420px;
  height: 170px;
  border: 3px dashed #707070;
  border-radius: 8px;
  background: #FFFFFF 0% 0% no-repeat padding-box;
  align-items: center;
}

.addFilesMyTasks1 {
  display: flex;
  right: 2%;
  box-shadow: 1px 3px 10px #00000033;
  border-radius: 8px;
  background-color: #fff;
  color: #3598DB;
  padding: 8px 16px;
  border: 2px solid #3598DB;
  align-items: center;
  width: auto;
  height: 47px;
  margin-left: 210px;
}
.addFilesMyTasks {
    border-radius: 8px;
    background-color: #6ec5ff;
    color: white;
    padding: 3px 12px;
    margin-right:7%;
    width: 75px;
    height: 30px;
    border:#6ec5ff;

}

  </style>
<?php
$flag=0;
if(isset($_POST['btnsearch']))
{
   $textsearch=$_POST['textsearch'];
   $sql5="SELECT * FROM `contact_files` WHERE file_name='$textsearch'";
   $flag=1;
}


?>
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
<link rel="stylesheet" href="./css/contact_specific-4.css">

<body>

    <div id="upload-modal">
		<div id="upload-container">

      <?php
          if(isset($_POST['btnupload']))
          {
            $documenttype=$_POST['file_type'];
            $fileName= $_FILES['file1']['name'];
            $fileTmpName=$_FILES['file1']['tmp_name'];
            $path="Documents/".$fileName;
            $ext = pathinfo($fileName, PATHINFO_EXTENSION);
            $created = @date('Y-m-d');
            $fileSize = $_FILES['file1']['size'];

            //echo $fileSize;

              $sql4="INSERT INTO `contact_files`(`JS_id`, `file_name`, `file_type`, `doc_type`, `file_size`, `added_on`)
             VALUES ('JS111','$fileName','$ext','$documenttype',$fileSize,'$created')";
             $res4=mysqli_query($conn,$sql4);
             if($res4)
             {
               move_uploaded_file($fileTmpName, $path);
             }


          }

      ?>
      <form method="post" enctype="multipart/form-data">
		       	<p class="upload"> Upload Files
            <span id="closeit" class="content_2" style="margin-left:700px;color:grey;font-size:14px">Close</span></p><br>
            <span>
                <label class="filetype">File Type*</label><br>
                <input type="text" placeholder="Enter type of file" name="file_type" class="input_type" >
            </span>


            <br><br>
            <span>
                <label class="filetype">Internal*</label><br>
                <input type="text" value="System Verified" placeholder="System Verified" name="internal" class="input_type">
            </span>

            <div class="ro" style="margin-left:50px;margin-top:10px">
            <br>
                <p style="margin-left:60px;"><img src="../img/upload-box.svg" height="70px" width="80px">

                  <input  type="file" name="file1" /><br><br>
                <button type="submit" name="btnupload" class="addFilesMyTasks1" id="upload_btn"> Upload </button>
            </div>

          </form>
        </div>
    </div>
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
                <p><a href="contact_specific-5.php">Jobs</a></p>
                <p style="color:#3598DB;margin-left:-2px"> <b style="margin-right: 10px;">|</b>Files</p>
                <p><a href="contact_specific-6.php">Notes</a></p>
            </div>

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
                     <form method="post">
                        <div class="search-box">
                        <details id="dropdown" class="dropdown">
                            <summary class="dropdown-button">
                                <span id="selected-item" class="selected-item"> <i class="fa fa-file" aria-hidden="true"></i> File type</span>
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
                        <input class="search-form-input" type="search" name="textsearch" placeholder="Search by File name">
                        <button type="submit" name="btnsearch" class="searchButton">
                            <img src="./img/search-icon-blue.png" />
                        </button>
                    </div>
                  </form>
                    <button class="addFilesMyTasks" id="add_button" >Add +</button>
                </span>
                <div class="row-flex-jobj justifycontent-flex-end-1">
                    <p class="sortbyText">Sort by :
                        <select name="multi_search" id="multi_search" class="sortbySelect">
                            <option>Recent</option>
                            <option value="Recent">All</option>
                            <option value="Old">Old</option>
                        </select>
                        <select  id="multi_search" class="search_list">
                            <option value="" default class="search_list_option">Last Edited</option>
                            <option value="1" class="search_list_option">1</option>
                            <option value="2" class="search_list_option">2</option>
                            <option value="3" class="search_list_option">3</option>
                        </select>
                    </p>
                </div>
                <div class="row-recruiter">
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


              <?php
                 if($flag == 0)
                 {
                     $sql5="SELECT * FROM `files` WHERE file_id=64";
                 }

                  $res5=mysqli_query($conn,$sql5);
                  if($res5 == TRUE)
                  {
                    $count=mysqli_num_rows($res5);
                    if($count >0)
                    {
                      while($rows=mysqli_fetch_assoc($res5))
                      {
                         $Id=$rows['file_id'];
                         $file_name=$rows['files'];
                         $file_type=$rows['file_type'];
                         // $doc_type=$rows['doc_type'];
                         $file_size=$rows['kb'];
                         $file_size=round(($file_size/1024));
                         $added_on=$rows['added_on'];

                  ?>
                <div class="row">
                    <div class="column">
                        <input type="checkbox" id="c1" class="checkbox">
                        <label for="c1"></label>
                    </div>
                    <div class="column">
                        <p class="col-1">Added on</p>
                        <span class="col-span-1"><?php echo $added_on; ?></span>
                    </div>
                    <div class="column">
                         <p class="col-2"><?php echo $file_name; ?></p>
                        <span class="col-span-2"><?php echo $file_size; ?>kb</span>

                    </div>
                    <div class="column">
                        <!-- <p class="col-3"><?php echo $doc_type; ?></p> -->
                        <span class="col-span-3">View <i class="fa fa-eye" aria-hidden="true"></i></span>
                    </div>
                    <div class="column">
                        <p class="col-4">Internal</p>
                        <span class="col-span-4">System verified</span>
                    </div>
                    <div class="column">
                        <img src="./img/Ellipse -4@2x.png" class="img">
                    </div>
                  <div style="display:flex;">
                    <div class="column">
                        <p class="col-5">Uploaded by</p>
                        <span class="col-span-5">Sasuke Uchiha</span>
                    </div>
                    <div class="column">
                       <a href="delete_contact_files.php?Id=<?php echo $Id; ?>"><button style="font-size:14px;color:#EC4551;background: none;border: none;">Delete <i class="fa fa-trash" aria-hidden="true"></i></button><br></a>
                       <a href="download.php?filename=<?php echo $file_name; ?>"><button style="font-size:14px;color:#3598DB;background: none;border: none;">Download <i class="fa fa-file" aria-hidden="true"></i></button></a>
                   </div>
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
    <script type="text/javascript">
       $(document).ready(() => {
                $("#add_button").click(() => {
                    $("#upload-modal").show();
                });

                $("#closeit").click(() => {
                    $("#upload-modal").hide();
                });
          });

    </script>
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
