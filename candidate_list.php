<?php

   include 'connection1.php';     //database connection page included
   session_start();        //session has been started


?>





<title>Dashboard</title>
<link rel="stylesheet" href="./css/Candidates_specific.css">
<link rel="stylesheet" href="./css/candidate_list.css">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous"></script>
<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.min.js" integrity="sha384-w1Q4orYjBQndcko6MimVbzY0tgp4pWB4lZ7lr30WKz0vr/aWKhXdBNmNb5D92v7s" crossorigin="anonymous"></script>

<body>
   <?php include('header.php') ?>


<form action="" method="post">
<div class="container">
<div class="small_container">
        <div class="bread-crumbs_Mytools-recruiter">
            <a href="" class="active-breadcrumb-link">Dashboard</a> >  <a href="" class="active-breadcrumb-link">My Database</a>
        </div>
        <div class="database">
        My Database<br><br>
        <span style="color:#3598DB; font: normal normal normal 15px/19px MetroM;">view and manage your candidates</span>
        </div>

        <div class="search">
        <svg xmlns="http://www.w3.org/2000/svg" width="10" height="10" fill="#3598DB" class="bi bi-eye-fill" viewBox="0 0 16 16">
        <path d="M10.5 8a2.5 2.5 0 1 1-5 0 2.5 2.5 0 0 1 5 0z"/>
        <path d="M0 8s3-5.5 8-5.5S16 8 16 8s-3 5.5-8 5.5S0 8 0 8zm8 3.5a3.5 3.5 0 1 0 0-7 3.5 3.5 0 0 0 0 7z"/>
        </svg> <span style="color:#3598DB">All Status&emsp;&emsp;</span><span style="color:#979797"><input type="text" name="searchCandidatesNames" id="inputSearch_12" class="searchForJobs"  placeholder="| &emsp;&emsp;Search by candidate name "/>
                <button class="searchButton">
                    <img src="img/search-icon-blue.png" width="15" height="15" style="font:right" />
                </button>
        </div>

        <div class="add">
        <button class="btn" id="myBtn"><a style="color:white" href="addCandidates1.php">Add+</a></button>
        </div>

        <div class="sort">
        <span style="color:#979797">Sort by &emsp;</span><span style="color:#3598DB">Experience &emsp;</span>
        <span>
        <select name="Experience" id="cars">
        <option value="volvo">Last edited</option>
        <option value="saab">Saab</option>
        <option value="opel">Opel</option>
        <option value="audi">Audi</option>
        </select></span>
        </div>

        <div class="radio">
        <span style="color:#3598DB"><input type="check-box"> Select all &emsp;
        <select name="action" id="cars">
        <option value="volvo">Select action</option>
        <option value="saab">Saab</option>
        <option value="opel">Opel</option>
        <option value="audi">Audi</option>
        </select></span>
        </div>

        <div class="qual">
        <p>Qualification</p>
        <br>
        <select name="qualification" id="cars">
        <option value=""> required qualification</option>
        <option value="MSc">MSc</option>
        <option value="BSc">BSc</option>
        <option value="B.Com">B.Com</option>
        </select>
        </div><br>


        <div class="qual">
        <p>Minimum years of experience</p>
        <br>
        <input name="experience" type="text" placeholder="enter number">
        </div><br>


        <div class="qual">
        <p>Country</p>
        <br>
        <select name="ownership" id="cars">
        <option value=""> Select country</option>
        <option value="India">India</option>
        <option value="Australia">Australia</option>
        <option value="Japan">Japan</option>
        </select>
        </div><br>


        <div class="qual">
        <p>State</p>
        <br>
        <select name="State" id="cars">
        <option value=""> Select state</option>
        <option value="karnataka">karnataka</option>
        <option value="UP">UP</option>
        <option value="Maharastra">Maharastra</option>
        </select>
        </div><br>

        <div class="qual">
        <p>City</p>
        <br>
        <select name="cityname" id="cars">
        <option value=""> Select city</option>
        <option value="Kolkata">Kolkata</option>
        <option value="Berlin">Berlin</option>
        <option value="London">London</option>
        </select>
        </div>


        <input type = "submit" name = "filter" class="save_button_addClient default-button-for-recruiter-dashboard" value="filter" >

        <div class="cont">


     <?php
     $flag=0;
     if((isset($_POST['searchCandidatesNames'])) OR (isset($_POST['filter'])))   //condition to find set of variable of search and Filters
     {
       // code block to search according to given clauses
       $qualification = $_POST['qualification'];
       $ownership = $_POST['ownership'];
       $State = $_POST['State'];
       $cityname = $_POST['cityname'];
       $search = $_POST['searchCandidatesNames'];
       $search = preg_replace("#[^0-9a-z]#i","",$search);
       $sql="SELECT * FROM `candidates` WHERE firstname='$search' OR lastname= '$search' OR qualification='$qualification' OR ownership= '$ownership' OR State = '$State' OR cityname ='$cityname'";
       $flag=1;
     }

     if($flag == 0)
     {
       // code block for all data to be displayed if there are no clauses
         $sql="select * from candidates";
     }
        // query to establish connection from database and get the output of required query
       $res=mysqli_query($conn,$sql);
       if($res == TRUE)
       {
          // getting no of rows from table and assigning it to a variable. If this is more than 0 then all rows will be printed
           $count=mysqli_num_rows($res);
           if($count > 0)
           {

             // displaying all the data from the table
               while($row=mysqli_fetch_assoc($res))
               {

            ?>
            <div class="list">
            <input type="checkbox">
            <div class="added"><span style="color:979797"><?php echo $row['last_updated']; ?></span> <br><?php echo $row['candidate_id']; ?></div>
            <img src="upload/<?php echo $row['image']; ?>" width="70" height="70" alt="">

            <div class="uploaded">Uploaded by<br>
            <?php echo $row['firstname']; ?></div>
            <div class="added1"><span style="color:979797"><?php echo $row['company_name'] ; ?></span><br><?php echo $row['current_title'];?></div><br>
            <div class="added2"><span style="color:979797">Status</span><br><?php echo $row['status'];?></div>
            <p><a href="edit-Candidates1.php?edit_Candidates=<?php echo $row['candidate_id'];?>">Peek<svg xmlns="http://www.w3.org/2000/svg" width="15" height="15" fill="currentColor" class="bi bi-eye-fill" viewBox="0 0 16 16">
            <path d="M10.5 8a2.5 2.5 0 1 1-5 0 2.5 2.5 0 0 1 5 0z"/>
            <path d="M0 8s3-5.5 8-5.5S16 8 16 8s-3 5.5-8 5.5S0 8 0 8zm8 3.5a3.5 3.5 0 1 0 0-7 3.5 3.5 0 0 0 0 7z"/>
            </svg></p>
        </div>
       <?php }}}?>






 </div>


</div>
</div>
</form>
