<?php
include 'connection1.php';          //database connection page included
session_start();             //session has been started



if (isset($_POST['submit']))      //condition to insert set of variable if submit button is pressed
 {
    // posting all data from personal information page to global variables using $_Session['']
    $_SESSION['candidateComment']  = $_POST['candidateComment'];
    $_SESSION['availability']   = $_POST['availability'];
    $_SESSION['job'] = $_POST['job'];
    $_SESSION['accessebility'] = $_POST['accessebility'];
    $_SESSION['reasonType']   = $_POST['reasonType'];



            // query to insert all the data to dataBase

            $qr1 = 'insert into candidates(image,Firstname,Lastname,Emailid,Phonenumber,Birthdate,Industry,Address,Ownership,Cityname,Zipcode,State,CurrentTitle,CompanyName,CandidateType,EmploymentPreference,Source,Recruiter,CurrentSalary,SalaryRange1,SalaryRange2,talents,resume,skills,qualification,
            candidateComment,availability,job,accessebility,reasonType,added_On)values("'.$_SESSION['image'].'","'.$_SESSION['firstname'].'",
            "'.$_SESSION['lastname'].'",
            "'.$_SESSION['emailid'].'",
            "'.$_SESSION['phonenumber'].'",
            "'.$_SESSION['birthdate'].'",
            "'.$_SESSION['Industry'].'",
            "'.$_SESSION['address'].'",
            "'.$_SESSION['ownership'].'",
            "'.$_SESSION['cityname'].'",
            "'.$_SESSION['Zipcode'].'",
            "'.$_SESSION['State'].'",
            "'.$_SESSION['current_title'].'",
            "'.$_SESSION['company_Name'].'",
            "'.$_SESSION['candidate_Type'].'",
            "'.$_SESSION['employment_Preference'].'",
            "'.$_SESSION['source'].'",
            "'.$_SESSION['recruiter'].'",
            "'.$_SESSION['current_Salary'].'",
            "'.$_SESSION['salary_Range1'].'",
            "'.$_SESSION['salary_Range2'].'",
            "'.$_SESSION['talent'].'",
            "'.$_SESSION['resume'].'",
            "'.$_SESSION['skills'].'",
            "'.$_SESSION['qualification'].'",
            "'.$_SESSION['candidateComment'].'",
            "'.$_SESSION['availability'].'",
            "'.$_SESSION['job'].'",
            "'.$_SESSION['accessebility'].'",
            "'.$_SESSION['reasonType'].'",NOW())';

            $res = mysqli_query($con,$qr1);  // to check wether query has worked or not

            if ($res) {

                // if query has worked properly it will redirect to following page
                 echo " <script>window.open('addcandidates1.php','_self')</script>";
            }
}
?>

<!--  "'.$_SESSION['resume'].'", -->
<!--  "'.$_SESSION['image'].'", -->
