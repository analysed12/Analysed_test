<?php
include 'connection1.php';     //database connection page included
session_start();        //session has been started



if (isset($_POST['next']))
 {

    // posting all data from personal information page to global variables using $_Session['']

    $_SESSION['Package_type']  = $_POST['Package_type'];
    $_SESSION['Package_duration']   = $_POST['Package_duration'];
    $_SESSION['Package']    = $_POST['Package'];
    $_SESSION['Bill_rate'] = $_POST['Bill_rate'];
    $_SESSION['Markup']   = $_POST['Markup'];
    $_SESSION['Cl_margin']   = $_POST['Client_margin'];
    $_SESSION['Days_on']   = $_POST['Days_on'];
    $_SESSION['Days_off']   = $_POST['Days_off'];
    $_SESSION['Shift_pattern']   = $_POST['Shift_pattern'];


            // query to insert all the data to dataBase
            $qr1 = 'insert into createrecruitment(job_description,Position,Industry,Jobtype,client_company,Contact_at_client_company,Business_Development_Manager,Status,Priority,Job_reference_number,Designation,Recruiters_name,Number_of_openings,Start_Date,End_Date,Joblocation1,Joblocation2,Joblocation3,Starting_time,Ending_time,Client_margin,Contact_information_for_the_advert,advert_contact_no,skills,Qualifications,Eligibility_criteria,Experience_requirement,Relevant_experience,Irrelevant_experience,Roles_and_responsibilities,Growth_oppurtunities,Learning_oppurtunities,Employeee_endorsements,Employee_benefits,Reputation_of_organisation,advert_Job_description,Workspace_view,Transportation,Package_type,Package_duration,Package,Bill_rate,Markup,cl_margin,Days_on,Days_off,Shift_pattern,added_On)values("'.$_SESSION['job_description'].'","'.$_SESSION['Position'].'",
            "'.$_SESSION['Industry'].'",
            "'.$_SESSION['Jobtype'].'",
            "'.$_SESSION['client_company'].'",
            "'.$_SESSION['Contact_at_client_company'].'",
            "'.$_SESSION['Business_Development_Manager'].'",
            "'.$_SESSION['Status'].'",
            "'.$_SESSION['Priority'].'",
            "'.$_SESSION['Job_reference_number'].'",
            "'.$_SESSION['Designation'].'",
            "'.$_SESSION['Recruiters_name'].'",
            "'.$_SESSION['Number_of_openings'].'",
            "'.$_SESSION['Start_Date'].'",
            "'.$_SESSION['End_Date'].'",
            "'.$_SESSION['Joblocation1'].'",
            "'.$_SESSION['Joblocation2'].'",
            "'.$_SESSION['Joblocation3'].'",
            "'.$_SESSION['Starting_time'].'",
            "'.$_SESSION['Ending_time'].'",
            "'.$_SESSION['Client_margin'].'",
            "'.$_SESSION['Contact_information_for_the_advert'].'",
            "'.$_SESSION['advert_contact_no'].'",
            "'.$_SESSION['skills'].'",
            "'.$_SESSION['Qualifications'].'",
            "'.$_SESSION['Eligibility_criteria'].'",
            "'.$_SESSION['Experience_requirement'].'",
            "'.$_SESSION['Relevant_experience'].'",
            "'.$_SESSION['Irrelevant_experience'].'",
            "'.$_SESSION['Roles_and_responsibilities'].'",
            "'.$_SESSION['Growth_oppurtunities'].'",
            "'.$_SESSION['Learning_oppurtunities'].'",
            "'.$_SESSION['Employeee_endorsements'].'",
            "'.$_SESSION['Employee_benefits'].'",
            "'.$_SESSION['Reputation_of_organisation'].'",
            "'.$_SESSION['advert_Job_description'].'",
            "'.$_SESSION['Workspace_view'].'",
            "'.$_SESSION['Transportation'].'",
            "'.$_SESSION['Package_type'].'",
            "'.$_SESSION['Package_duration'].'",
            "'.$_SESSION['Package'].'",
            "'.$_SESSION['Bill_rate'].'",
            "'.$_SESSION['Markup'].'",
            "'.$_SESSION['cl_margin'].'",
            "'.$_SESSION['Days_on'].'",
            "'.$_SESSION['Days_off'].'",
            "'.$_SESSION['Shift_pattern'].'",NOW())';

            $res = mysqli_query($con,$qr1);         // to check wether query has worked or not
            if ($res) {

                 // if query has worked properly it will redirect to following page
                 echo " <script>window.open('createRecruitement.php','_self')</script>";
            }
}
?>
