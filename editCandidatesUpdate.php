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
            $res = mysqli_query($con,'UPDATE `candidates` SET
              image= "'.$_SESSION['image'].'",
            Firstname="'.$_SESSION['firstname'].'",
            Lastname="'.$_SESSION['lastname'].'",
            Emailid="'.$_SESSION['emailid'].'",
            Phonenumber="'.$_SESSION['phonenumber'].'",
            Birthdate="'.$_SESSION['birthdate'].'",
            Industry="'.$_SESSION['Industry'].'",
            Address="'.$_SESSION['address'].'",
            ownership="'.$_SESSION['ownership'].'",
            Cityname="'.$_SESSION['cityname'].'",
            Zipcode="'.$_SESSION['Zipcode'].'",
            State="'.$_SESSION['State'].'",
            CurrentTitle= "'.$_SESSION['current_title'].'",
            CompanyName="'.$_SESSION['company_Name'].'",
            CandidateType="'.$_SESSION['candidate_Type'].'",
            EmploymentPreference="'.$_SESSION['employment_Preference'].'",
            Source="'.$_SESSION['source'].'",
            Recruiter="'.$_SESSION['recruiter'].'",
            CurrentSalary="'.$_SESSION['current_Salary'].'",
            SalaryRange1="'.$_SESSION['salary_Range1'].'",
            SalaryRange2="'.$_SESSION['salary_Range2'].'",
            talents="'.$_SESSION['talent'].'",
            resume= "'.$_SESSION['resume'].'",
            skills="'.$_SESSION['skills'].'",
            qualification="'.$_SESSION['qualification'].'",
            candidateComment="'.$_SESSION['candidateComment'].'",
            availability="'.$_SESSION['availability'].'",
            job="'.$_SESSION['job'].'",
            accessebility="'.$_SESSION['accessebility'].'",
            reasonType="'.$_SESSION['reasonType'].'",
            added_On=NOW() WHERE `candidate_id` ="'.$_SESSION['cid'].'"');  // to check wether query has worked or not

            if ($res) {

                // if query has worked properly it will redirect to following page
                 echo " <script>window.open('candidate_list.php','_self')</script>";
            }
}
?>
