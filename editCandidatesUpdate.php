<?php
include 'connection1.php';          //database connection page included
session_start();             //session has been started



if (isset($_POST['submit']))      //condition to insert set of variable if submit button is pressed
 {




    $_SESSION['candidateComment']  = $_POST['candidateComment'];
    $_SESSION['availability']   = $_POST['availability'];
    $_SESSION['job'] = $_POST['job'];
    $_SESSION['accessebility'] = $_POST['accessebility'];
    $_SESSION['reasonType']   = $_POST['reasonType'];



            // query  to updata the data for particular user
            $res = mysqli_query($conn,'UPDATE `candidates` SET image= "'.$_SESSION['image'].'", firstname="'.$_SESSION['firstname'].'",
            lastname="'.$_SESSION['lastname'].'",
            candidate_email="'.$_SESSION['emailid'].'",
            phone_no="'.$_SESSION['phonenumber'].'",
            birth_date="'.$_SESSION['birthdate'].'",
            status="'.$_SESSION['Industry'].'",
            address="'.$_SESSION['address'].'",
            country="'.$_SESSION['ownership'].'",
            city_name="'.$_SESSION['cityname'].'",
            zipcode="'.$_SESSION['Zipcode'].'",
            state="'.$_SESSION['State'].'",
            current_title= "'.$_SESSION['current_title'].'",
            company_name="'.$_SESSION['company_Name'].'",
            candidate_type="'.$_SESSION['candidate_Type'].'",
            emp_preference="'.$_SESSION['employment_Preference'].'",
            source="'.$_SESSION['source'].'",
            recruiter="'.$_SESSION['recruiter'].'",
            current_salary="'.$_SESSION['current_Salary'].'",
            salary_range1="'.$_SESSION['salary_Range1'].'",
            salary_range2="'.$_SESSION['salary_Range2'].'",
            talents="'.$_SESSION['talent'].'",
            resume= "'.$_SESSION['resume'].'",
            skills="'.$_SESSION['skills'].'",
            qualifications="'.$_SESSION['qualification'].'",
            comment="'.$_SESSION['candidateComment'].'",
            availability_date="'.$_SESSION['availability'].'",
            job="'.$_SESSION['job'].'",
            accessibility="'.$_SESSION['accessebility'].'",
            response_type="'.$_SESSION['reasonType'].'",
            last_updated=NOW() WHERE `candidate_id` ="'.$_SESSION['cid'].'"');  // to check wether query has worked or not

            if ($res) {

                // if query has worked properly it will redirect to following page
                 echo " <script>window.open('candidate_list.php','_self')</script>";
            }
}
?>
