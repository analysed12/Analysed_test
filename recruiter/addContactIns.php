<?php

    include 'connection1.php';     //database connection page included
    session_start();        //session has been started

    if (isset($_POST['submit']))
 {

    // posting all data from personal information page to global variables using $_Session['']
    $_SESSION['last_contact']  = $_POST['last_contact'];
    $_SESSION['lastvisit']   = $_POST['lastvisit'];
    $_SESSION['visibility'] = $_POST['visibility'];
    $_SESSION['validity'] = $_POST['validity'];
    $_SESSION['LinkedIn_profile']   = $_POST['LinkedIn_profile'];


            // query to insert all the dta in database
             $qr1 = 'insert into addcontact(image,fname,lname,status,mname,email,phone,address,city,zip_code,state,country,job_title,company_name,contact_type,division,source,reports_to,industry,skills,last_contact,lastvisit,visibility,validity,LinkedIn_profile,added_On)values("'.$_SESSION['image'].'","'.$_SESSION['fname'].'",
            "'.$_SESSION['lname'].'",
            "'.$_SESSION['status'].'",
            "'.$_SESSION['mname'].'",
            "'.$_SESSION['email'].'",
            "'.$_SESSION['phone'].'",
            "'.$_SESSION['address'].'",
            "'.$_SESSION['city'].'",
            "'.$_SESSION['zip_code'].'",
            "'.$_SESSION['state'].'",
            "'.$_SESSION['country'].'",
            "'.$_SESSION['job_title'].'",
            "'.$_SESSION['company_name'].'",
            "'.$_SESSION['contact_type'].'",
            "'.$_SESSION['division'].'",
            "'.$_SESSION['source'].'",
            "'.$_SESSION['reports_to'].'",
            "'.$_SESSION['industry'].'",
            "'.$_SESSION['skills'].'",
            "'.$_SESSION['last_contact'].'",
            "'.$_SESSION['lastvisit'].'",
            "'.$_SESSION['visibility'].'",
            "'.$_SESSION['validity'].'",
            "'.$_SESSION['LinkedIn_profile'].'",NOW())';
            $res = mysqli_query($con,$qr1);     // to check wether query has worked or not
            if ($res) {

                // if query has worked properly it will redirect to following page
                echo " <script>window.open('addContact.php','_self')</script>";
            }
}
?>
