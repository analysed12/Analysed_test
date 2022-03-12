
<?php

   include 'connection1.php';
   session_start();
?>


<?php include('include/header.php') ?>
<link rel="stylesheet" href="css/js_files.css">


<!-- <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css"> -->
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
<!-- <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script> -->
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>

<title>My Files</title>
<style type="text/css">
#second2
{
    display: none;
}
</style>
<body>
<?php
   $sql7="SELECT count(*) as NumImages, sum(file_size) as SizeImages FROM js_files WHERE file_type in ('jpg','png') AND JS_id='1'";
   $res7=mysqli_query($conn,$sql7);
   if($res7 == TRUE)
   {
     while($rows=mysqli_fetch_assoc($res7))
     {
       $NumImages=$rows['NumImages'];
       $SizeImages=$rows['SizeImages'];
       $SizeImages=round(($SizeImages/1024));
     }
   }
   //
   $sql7="SELECT count(*) as NumPdf, sum(file_size) as SizePdf FROM js_files WHERE file_type in ('pdf') AND JS_id='1'";
   $res7=mysqli_query($conn,$sql7);
   if($res7 == TRUE)
   {
     while($rows=mysqli_fetch_assoc($res7))
     {
       $NumPdf=$rows['NumPdf'];
       $SizePdf=$rows['SizePdf'];
       $SizePdf=round(($SizePdf/(1024)));
     }
   }
   //
   $sql7="SELECT count(*) as NumExcel, sum(file_size) as SizeExcel FROM js_files WHERE file_type in ('xlsx','csv') AND JS_id='1'";
   $res7=mysqli_query($conn,$sql7);
   if($res7 == TRUE)
   {
     while($rows=mysqli_fetch_assoc($res7))
     {
       $NumExcel=$rows['NumExcel'];
       $SizeExcel=$rows['SizeExcel'];
       $SizeExcel=round(($SizeExcel/(1024)));
     }
   }//
   $total = $SizeImages + $SizePdf + $SizeExcel;

 ?>

<div id="upload-modal">
		<div id="upload-container">
			<p class="bot4" style="margin-left:50px;margin-top:50px">Upload task file
            <span id="closeit" class="content_2" style="margin-left:700px">Close</span><br>
            <span class="content_2" style="line-height:0.1">lorem ipsum lorem ipsum</span></p><br>

            <div class="categories-mytasks-1-active">
                <button class="x1" id="ac" > Documents</button>
                <button class="x1" id="nac"> Task files </button>
            </div>

            <?php
                if(isset($_POST['btndoc']))
                {
                  $documenttype=$_POST['documenttype'];
                  $fileName= $_FILES['file1']['name'];
                  $fileTmpName=$_FILES['file1']['tmp_name'];
                  $path="Documents/".$fileName;
                  $ext = pathinfo($fileName, PATHINFO_EXTENSION);
                  $created = @date('Y-m-d');
                  $fileSize = $_FILES['file1']['size'];
                    $sql4="INSERT INTO `js_files`(`JS_id`, `file_name`, `file_type`, `doc_type`, `file_size`, `added_on`)
                   VALUES ('JS245','$fileName','$ext','$documenttype','$fileSize','$created')";
                   $res4=mysqli_query($conn,$sql4);
                   if($res4)
                   {
                     move_uploaded_file($fileTmpName, $path);
                   }
                }
             ?>


          <form method="post" enctype="multipart/form-data">
            <div id="first1">
                <div id="ff2" class="filterSmall_myTasks">
                    <select name="documenttype" id="documenttype">
                        <option value="0" disabled selected="selected">Type of Document </option>
                        <option value="10th class result">10th class result</option>
                        <option value="12th class result">12th class result</option>
                        <option value="Degree">Degree</option>
                        <option value="Post graduation">Post graduation certificate</option>
                    </select>
                </div>
                 <br>

              <div class="ro" style="margin-left:150px">
                <div class="cont1">
                    <p><img src="img/upload-box.svg" height="70px" width="80px">
                </div>

                <div id="sub_3">
                    <span>Drag and drop a task <br>file and watch me go!</span></p><br>
                    <p class="bot4" style="margin-left:-2%"> or </p>
                    <br>
                    <input  type="file" name="file1" /><br><br>
                    <button class="addFilesMyTasks1" id="myBtn1" name="btndoc" type="submit"> Upload </button>

                </div>

              </div>
            </div>
          </form>
    <!--end of first1-->
            <?php
                if(isset($_POST['btntask']))
                {
                  $fileName= $_FILES['file2']['name'];
                  $fileTmpName=$_FILES['file2']['tmp_name'];
                  $path="Documents/".$fileName;
                  $ext = pathinfo($fileName, PATHINFO_EXTENSION);
                  $created = @date('Y-m-d');
                  $fileSize = $_FILES['file2']['size'];

                    $sql4="INSERT INTO `js_files`(`JS_id`, `file_name`, `file_type`, `doc_type`, `file_size`, `added_on`)
                   VALUES ('JS245','$fileName','$ext','TaskFile',$fileSize,'$created')";
                   $res4=mysqli_query($conn,$sql4);
                   if($res4)
                   {
                     move_uploaded_file($fileTmpName, $path);
                   }
                }
             ?>
          <form method="post" enctype="multipart/form-data">
            <div id="second2">
                <br>
                <br>
              <div class="ro" style="margin-left:150px">
                <div class="cont1">
                    <p><img src="img/upload-box.svg" height="70px" width="80px">
                </div>

                <div id="sub_3">
                    <span>Drag and drop a task <br>file and watch me go!</span></p><br>
                    <p class="bot4" style="margin-left:-2%"> or </p>
                    <br>
                    <input  type="file" name="file2" /><br><br>
                    <button class="addFilesMyTasks1" type="submit" id="myBtn1" name="btntask"> Upload </button>
                </div>

              </div>
            </div>
          </form>
            <!--end of second2-->

        </div>
</div>

<div class="main_body">
        <div class="heading_dash">
            <h1 class="head_txt">My files</h1><br>
            <p class="sub_txt">Manage Your Files<button class="addFilesMyTasks" id="myBtn20">Add +</button></p>
        </div>


        <div class="cards_myTasks">
            <div class="cardItem_myTasks">
                    <p class="memoryUsed_myTasks"><?php echo $total; ?>KB/10MB <span class="v1"> Used&emsp;&emsp;&emsp;&emsp;&emsp; Available space</span><br><br>
                    <progress value="<?php echo $total; ?>" max="10000" ></progress></p>
            </div>
            <div class="cardItem_myTasks">
                <img src="img/Icon material-image.png">
                <span class="centered_span_myTasks"><?php echo $SizeImages; ?>KB</span>
                <h4 class="headingInCard_myTasks"><?php echo $NumImages; ?></h4>
            </div>
            <div class="cardItem_myTasks">
                <img src="img/Icon awesome-file-pdf.png">
                <span class="centered_span_myTasks"><?php echo $SizePdf; ?>KB</span>
                <h4 class="headingInCard_myTasks"><?php echo $NumPdf; ?></h4>
            </div>
            <div class="cardItem_myTasks">
                <img src="img/Icon awesome-file-alt.png">
                <span class="centered_span_myTasks"><?php echo $SizeExcel; ?>KB</span>
                <h4 class="headingInCard_myTasks"><?php echo $NumExcel; ?></h4>
            </div>
        </div><br>
        <div class="filterSection_myTasks">
            <div class="leftFilter_myTasks"><br>

              <form method="POST">
                <img src="img/page.png" height="15px" width="15px">
                <select id="k1">
                    <option value="none" selected disabled hidden >File type</option>
                    <option value="Image">1</option>
                    <option value="Pdf">2</option>
                </select>
                <input type="text" name="searchname" placeholder=" Search by File name" class="centered_span_myTasks">&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;
                <button type="submit" name="searchbtn"><img src="img/search-icon-blue.png" height="15px" width="15px"></button>
              </form>


            </div>
            <div class="rightFilter_myTasks">
                <span class="sortByMyTasks">Sort By: </span><span class="recentMyTasks">Recent</span>
                <select name="" id="" class="sortFilter_myTasks">
                    <option value="0">Last Edited ∨</option>
                    <option value="1">Sort A-Z</option>
                    <option value="2">Sort Z-A</option>
                </select>
            </div>
        </div>

        <div class="filterSmall_myTasks">
            <div class="selectAllActions_filterSmall_myTasks" style="margin-left:650px">
                  &emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;<input type="checkbox" name="checkboxSelectAll_myTasks" id="checkboxSelectAll_myTasks">
                <label for="checkboxSelectAll_myTasks" >Select All</label>
                <select name="Select action">
                    <option value="0">Select action</option>
                    <option value="1">Copy</option>
                    <option value="2">Cut</option>
                </select>
            </div>
        </div>

        <?php


        if(isset($_POST['searchbtn']))
        {
          ?>
          <div class="singleTasks_containerDiv">
          <?php
          $searchname=$_POST['searchname'];
          $sql="SELECT * FROM `js_files` WHERE JS_id='JS245' AND file_name='$searchname'";
          $res=mysqli_query($conn,$sql);
          if($res == TRUE)
          {
            $count=mysqli_num_rows($res);
            if($count >0)
            {
              while($rows=mysqli_fetch_assoc($res))
              {
                 $Id=$rows['Id'];
                 $file_name=$rows['file_name'];
                 $file_type=$rows['file_type'];
                 $doc_type=$rows['doc_type'];
                 $file_size=$rows['file_size'];
                 $file_size=round(($file_size/1024));
                 $added_on=$rows['added_on'];

          ?>
            <div class="singletask_myTasks">
                <input type="checkbox" name="checkBoxItem" class="largerCheckbox">
                <span>
                    <p class="light_spanItem_singleTask_myTasks">Added on</p>
                    <p class="j1"><b><?php echo $added_on; ?></b></p>
                </span>
                <span style="margin-left:30px">
                    <p style="color:#297FB8;margin-bottom:5px;font-size:16px"><?php echo $file_name; ?></p>
                    <p class="j1"><b><?php echo $file_size; ?>KB</b></p>
                </span>
                <span style="margin-left:30px">
                    <p class="light_spanItem_singleTask_myTasks">Type of Doc</p>
                    <p class="j1"><b><?php echo $file_type; ?></b></p>
                </span>
                <div class="button-div_myTasks">
                    <a href="deletefiles.php?filename=<?php echo $file_name; ?>&Id=<?php echo $Id; ?>"><button style="font-size:14px;color:#EC4551">Delete <i class="fa fa-trash" aria-hidden="true"></i></button><br><br></a>
                    <a href="download.php?filename=<?php echo $file_name; ?>"><button style="color:#3598DB">Download <i class="fa fa-file" aria-hidden="true"></i></button></a>
                </div>
            </div>

              <?php
                    }
                  }
                }

                    ?>

            <br><br><br>
        </div>
        <?php
        }
        else
        {
          ?>
                <div class="singleTasks_containerDiv">

                  <?php
                  $sql5="SELECT * FROM `js_files` WHERE JS_id='JS245'";
                  $res5=mysqli_query($conn,$sql5);
                  if($res5 == TRUE)
                  {
                    $count=mysqli_num_rows($res5);
                    if($count >0)
                    {
                      while($rows=mysqli_fetch_assoc($res5))
                      {
                         $Id=$rows['Id'];
                         $file_name=$rows['file_name'];
                         $file_type=$rows['file_type'];
                         $doc_type=$rows['doc_type'];
                         $file_size=$rows['file_size'];
                         $file_size=round(($file_size/1024));
                         $added_on=$rows['added_on'];

                  ?>
                    <div class="singletask_myTasks">
                        <input type="checkbox" name="checkBoxItem" class="largerCheckbox">
                        <span>
                            <p class="light_spanItem_singleTask_myTasks">Added on</p>
                            <p class="j1"><b><?php echo $added_on; ?></b></p>
                        </span>
                        <span style="margin-left:30px">
                            <p style="color:#297FB8;margin-bottom:5px;font-size:16px"><?php echo $file_name; ?></p>
                            <p class="j1"><b><?php echo $file_size; ?>KB</b></p>
                        </span>
                        <span style="margin-left:30px">
                            <p class="light_spanItem_singleTask_myTasks">Type of Doc</p>
                            <p class="j1"><b><?php echo $file_type; ?></b></p>
                        </span>
                        <div class="button-div_myTasks">
                            <a href="deletefiles.php?filename=<?php echo $file_name; ?>&Id=<?php echo $Id; ?>"><button style="font-size:14px;color:#EC4551">Delete <i class="fa fa-trash" aria-hidden="true"></i></button><br><br></a>
                            <a href="download.php?filename=<?php echo $file_name; ?>"><button style="color:#3598DB">Download <i class="fa fa-file" aria-hidden="true"></i></button></a>
                        </div>
                    </div>

                      <?php
                            }
                          }
                        }
                            ?>
                    <br><br><br>
                </div>
                <?php
        }
        ?>
</div>
<script type="text/javascript">
       $(document).ready(() => {

                $("#myBtn20").click(() => {
                    $("#upload-modal").show();
                });

                $("#closeit").click(() => {
                    $("#upload-modal").hide();
                });

                $("#ac").click(function(){
                    $("#ac").css({"border-bottom": "3px solid #3598DB"});
                    $("#nac").css({"border-bottom": "#000000"});
                    $("#ac").css({"color": "#3598DB"});
                    $("#nac").css({"color": "#979797"});
                    $("#second2").hide();
                    $("#first1").show();
                });

                $("#nac").click(function(){
                    $("#nac").css({"border-bottom": "3px solid #3598DB"});
                    $("#ac").css({"border-bottom": "#000000"});
                    $("#nac").css({"color": "#3598DB"});
                    $("#ac").css({"color": "#979797"});
                    $("#first1").hide();
                    $("#second2").show();
                });

                $("button").click(function(){
                    $("nac").css({"background-color": "yellow", "font-size": "200%"});
                });

          });

    </script>
</body>
