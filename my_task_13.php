
<?php

   include 'connection1.php';
   session_start();
?>





<?php include('include/header.php')?>


<html>
<head>
<link rel="stylesheet" href="css/my_task_13.css">

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

<!-- <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css"> -->
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
<!-- <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script> -->
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
</head>

<body>
    <br>
    <div class="main_body">
        <span class="a1">Create Tasks</span><br>
        <span class="a2">Create task to test candidate's ability</span><br><br><br><br>

        <div class="row">

          <div class="col-2">
            <div class="options">
              <button class="b1" id="nac" onclick="location.href='my_task_10.php'">Step 1</button>
              <button class="b1" id="nac" onclick="location.href='my_task_11.php'">Step 2</button>
              <button class="b1" id="ac">Step 3</button>
            </div>
          </div>

          <div class="col-10">
            <p class="c1">Step 3</p>
            <p class="c2">Assign Task</p>
            <p class="c3" style="margin-right:50px;">Assign task to one or a group of individual. elitr, sed diam nonumy eirmod tempor
                invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua. At vero eos et accusam et
                justo duo dolores et ea rebum. Stet clita kasd gubergren, no sea</p><br>


            <?php
           if(isset($_POST['create_task']))
           {


             $task_id=$_GET['t_id'];
             $restr_id=$_GET['r_id'];
             $name_indi=$_POST['i_name'];
             $name_task=$_POST['t_name'];
             $desc_short=$_POST['desc_short'];
             $desc_skills=$_POST['desc_skills'];
             $accuracy=$_POST['accuracy'];
             $start_date=$_POST['start_date'];
             $end_date=$_POST['end_date'];
             $duration_week=$_POST['duration_week'];
             $duration_days=$_POST['duration_days'];
             $duration_hours=$_POST['duration_hours'];
             $file_extensions=$_POST['file_extensions'];

            $sql2="INSERT INTO company_task( `task_id`, `restr_id`, `name_indi`, `name_task`,
                    `desc_short`, `desc_skills`, `accuracy`, `start_date`, `end_date`,
                    `duration_week`, `duration_days`, `duration_hours`, `file_extensions`)
                    VALUES ('$task_id'        , '$restr_id'       , '$name_indi', '$name_task'   , '$desc_short',
                            '$desc_skills'  , '$accuracy'      , '$start_date'     , '$end_date' ,'$duration_week',
                            '$duration_days', '$duration_hours', '$file_extensions')";
             $res2=mysqli_query($conn,$sql2);
             if($res2 === TRUE)
              {
                //    echo "<script> location.href='js_nearby_job.php'; </script>";
              }
           }
      ?>
        <form method = "POST" >
            <div class="row" >
                <div class="col-7">
                    <p class="c4">Select list individuals to assign the task to<span style="color:#3598DB"> &#42;</span></p>
                    <input type="text" style="float: left; " placeholder=" &emsp;Enter name" class="f2" name="i_name">
                    <input type="checkbox" id="sel" name="sel" class="largerCheckbox">
                    <label for="vehicle1" class="m1"> Select all</label><br>
                </div>
                <div class="col-5">
                    <p class="c4">Name of the task <span style="color:#3598DB"> &#42;</span></p>
                    <input type="text" style="float: left; " placeholder=" &emsp;Enter the name of the task" class="f2" name="t_name">
                </div>
            </div><br><br><br>

            <div class="row" >
                <div class="col-7">
                    <p class="c4">Description <span style="color:#3598DB"> &#42;</span></p>
                    <input type="text" style="float: left; " placeholder=" &emsp;Give a short description of the task" class="f2" name="desc_short">
                </div>
                <div class="col-5">
                    <p class="c4">Description <span style="color:#3598DB"> &#42;</span></p>
                    <input type="text" style="float: left; " placeholder=" &emsp;Select a few skills required for the test" class="f2" name="desc_skills">
                </div>
            </div><br><br><br>

            <div class="row">
                <div class="col-4">
                    <p class="c4">Accuracy <span style="color:#3598DB"> &#42;</span></p>
                    <input type="text" style="float: left; " placeholder=" &emsp;Enter value in percentage" class="f5" name="accuracy">
                </div>
                <div class="col-4">
                    <p class="c4">Start date <span style="color:#3598DB"> &#42;</span></p>
                    <input type="date" onload="getDate()" class="form-control" id="f6" name="start_date">
                </div>
                <div class="col-4">
                    <p class="c4">End date <span style="color:#3598DB"> &#42;</span></p>
                    <input type="date" onload="getDate()" class="form-control" id="f6" name="end_date">
                </div>
            </div><br><br><br>

            <div class="row" >
                <div class="col-4">
                    <p class="c4">Set task duration <span style="color:#3598DB"> &#42;</span></p>
                    <input type="text" style="float: left; " placeholder=" &emsp;Enter number of weeks" class="f4" name="duration_week">
                </div>
                <div class="col-4" style="margin-top:40px;">
                    <input type="text" style="float: left; " placeholder=" &emsp;Enter number of days" class="f4" name="duration_days">
                </div>
                <div class="col-4" style="margin-top:40px;">
                <input type="text" style="float: left; " placeholder=" &emsp;Enter number of hours" class="f4" name="duration_hours">
                </div>
            </div><br><br><br>

            <div class="row" >
                <div class="col-10">
                    <p class="c4">List of accepted file extentions <span style="color:#3598DB"> &#42;</span></p>
                    <input type="text" style="float: left; " placeholder=" &emsp;Ex. png ,jpeg, xml ,pdf" class="f4" name="file_extensions">
                </div>
                <div class="col-2" style="margin-top:40px;">
                  <button class="b5" name="create_task" >&emsp;Create task</button>
                </div>
            </div><br><br><br>
            </form>
          </div>
        </div>
    </div>


    <script>
      function getDate(){
    var today = new Date();

document.getElementById("date").value = today.getFullYear() + '-' + ('0' + (today.getMonth() + 1)).slice(-2) + '-' + ('0' + today.getDate()).slice(-2);


}
    </script>
</body>
</html>
