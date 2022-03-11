

<?php

   include 'connection1.php';
   session_start();
?>




<?php include('include/header.php')?>

<head>
  <link rel="stylesheet" href="css/my_task_10.css">

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
              <button class="b1" id="ac" onclick="location.href='my_task_10.php'">Step 1</button>
              <button class="b1" id="ac" onclick="location.href='my_task_11.php'">Step 2</button>
              <button class="b1" id="ac" onclick="location.href='my_task_13.php'">Step 3</button>
            </div>
          </div>

          <div class="col-10">
            <p class="c1">Step 1</p>
            <p class="c2">Select the type of task</p><br>
            <ul class="fullclick">

              <?php
                $sql="select * from task";
                $res=mysqli_query($conn,$sql);
                if($res == TRUE)
                {
                  $count=mysqli_num_rows($res);
                  if($count >0)
                  {
                    while($rows=mysqli_fetch_assoc($res))
                    {
                      $name=$rows['task_name'];
                      $image_task=$rows['task_img'];
                      $desc=$rows['description'];
                      $task_id=$rows['task_id']
              ?>
              <li>
                <div class="row" >
                  <div class="col-2">
                    <?php echo '<img src="data:image;base64,'.base64_encode($image_task).' "  style="width: 120px; height: 100px; margin-left:20px" >' ;   ?>
                  </div>
                  <div class="col-10">
                    <button class="addFilesMyTasks1" id="c1" > <?php echo $name; ?> </button>
                    <p class="c3" style="margin-right:40px"><?php echo $desc; ?></p>
                  </div>
                </div>
                <a href="my_task_11.php?id=<?php echo $task_id; ?>" class="main"></a>
                </li>
                <?php
                      }
                    }
                  }

                ?>

              <br>
              <br><br><br>

            </ul>

          </div>
        </div>
    </div>
</body>
