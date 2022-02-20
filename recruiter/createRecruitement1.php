<?php

    include 'connection1.php';     //database connection page included
    session_start();        //session has been started


// posting all data from personal information page to global variables using $_Session['']

   $_SESSION['Position']  = $_POST['Position'];
   $_SESSION['Industry']  = $_POST['Industry'];
   $_SESSION['Jobtype']  = $_POST['Jobtype'];
   $_SESSION['client_company']  = $_POST['client_company'];
   $_SESSION['Contact_at_client_company']  = $_POST['Contact_at_client_company'];
   $_SESSION['Business_Development_Manager']  = $_POST['Business_Development_Manager'];
   $_SESSION['Status']  = $_POST['Status'];
   $_SESSION['Priority']  = $_POST['Priority'];
   $_SESSION['Job_reference_number']  = $_POST['Job_reference_number'];
   $_SESSION['Designation']  = $_POST['Designation'];
   $_SESSION['Recruiters_name']  = $_POST['Recruiters_name'];
   $_SESSION['Number_of_openings']  = $_POST['Number_of_openings'];
   $_SESSION['Start_Date']  = $_POST['Start_Date'];
   $_SESSION['End_Date']  = $_POST['End_Date'];
   $_SESSION['Joblocation1']  = $_POST['Joblocation1'];
   $_SESSION['Joblocation2']  = $_POST['Joblocation2'];
   $_SESSION['Joblocation3']  = $_POST['Joblocation3'];
   $_SESSION['Starting_time']  = $_POST['Starting_time'];
   $_SESSION['Ending_time']  = $_POST['Ending_time'];
   $_SESSION['Client_margin']  = $_POST['Client_margin'];
   $_SESSION['Contact_information_for_the_advert']  = $_POST['Contact_information_for_the_advert'];
   $_SESSION['advert_contact_no']  = $_POST['advert_contact_no'];


// method to insert any files in database
    $td="../img/";
    $tf=$td.basename($_FILES["file"]["name"]);

    $_SESSION['job_description']  = basename($_FILES["file"]["name"]);

    $move= move_uploaded_file($_FILES["file"]["tmp_name"] , $tf);

    if (!($move)) {

        echo "something wrong";
    }

?>

<?php include('header.php')?>
<link rel="stylesheet" href="./css/addClient.css">
<link rel="stylesheet" href="./css/createRecruitement.css">
<title>Analysed</title>
<div class="container">
    <div class="bread-crumbs_Mytools-recruiter">
        <a href="/">Dashboard</a> > <a href="">My Database</a> > <a href="">Job listings</a> ><a href="">Create Recruitement</a>
    </div>
    <div class="small_container">
        <div class="heading_dash">
            <h1 class="mainHeadingDash">Create recruitment</h1>
            <p class="mainParaDash">Fill in the details to create a new recruitment</p>
        </div>
        <!--<button class="save_button_addClient default-button-for-recruiter-dashboard">Save</button>-->

        <form action="createRecruitement2.php" method="post" enctype="multipart/form-data"> <!-- redirecting to Role Details page with data of Skills & Exp -->
        <div class="row-recruiter container-for-add-client-main">
            <div class="left-side-row-for-add-client-container-1">
                <p class="links-for-add-client-low-side-row-for-add-client active" id="link-categories-addRec-1"><a href="createRecruitement.php" >Job Description</a></p>
                <p class="links-for-add-client-low-side-row-for-add-client" id="link-categories-addRec-2"><a href="" class="active">Skills & Exp</a></p>
                <p class="links-for-add-client-low-side-row-for-add-client" id="link-categories-addRec-3"><a href="createRecruitement2.php">Role Details</a></p>
                <p class="links-for-add-client-low-side-row-for-add-client" id="link-categories-addRec-4"><a href="createRecruitement3.php">Payment info</a></p>
            </div>

            <div class="right-side-row-for-add-client-container-1 " id="skills-information-createRec-1">
                    <h2 class="heading-for-general-information-right-side-add-client-container okaniawa-1"><i class="fa fa-bullseye" aria-hidden="true"></i> Skills & Experience</h2>
                    <div class="row-recruiter image-box-right-side-add-client">
                        <div class="right-side-image-box-right-add-client-1 create-rec">
                            <div class="row-recruiter sub-divs-image-box-right-side-add-client">
                                <div class="row-recruiter inputs-for-add-client-below-image-box inputs-for-add-client-below-image-box-create-rec">
                                    <p class="input-para-add-client-ekam-1">
                                        <label for="default-select-for-no.11">Skills *</label>
                                        <input id="default-select-for-no.11" name="skills" type="text" class="default-input-for-add-client-1"placeholder="Enter skills required for this job" required />
                                    </p>
                                    <p class="input-para-add-client-ekam-1">
                                        <label for="default-select-for-no.11">Qualifications *</label>
                                        <input id="default-select-for-no.11" name="Qualifications" type="text" class="default-input-for-add-client-1"placeholder="Minimum qualifications requirements" required />
                                    </p>
                                    <p class="input-para-add-client-ekam-1">
                                        <label for="default-select-for-no.11">Eligibility criteria *</label>
                                        <input id="default-select-for-no.11" name="Eligibility_criteria" type="text" class="default-input-for-add-client-1"placeholder="Ex. citizenship criteria" required />
                                    </p>
                                    <p class="input-para-add-client-ekam-1">
                                        <label for="default-select-for-no.11">Experience requirement *</label>
                                        <input id="default-select-for-no.11" name="Experience_requirement" type="text" class="input-padding-create-recruitment-1 default-input-for-add-client-1"placeholder="minimum experience requirements" required />
                                    </p>
                                    <p class="input-para-add-client-ekam-1">
                                        <label for="default-select-for-no.11">Relevant experience</label>
                                        <input id="default-select-for-no.11" name="Relevant_experience" type="text" class="input-padding-create-recruitment-1 default-input-for-add-client-1"placeholder="Specific industry experience" required />
                                    </p>
                                    <p class="input-para-add-client-ekam-1">
                                        <label for="default-select-for-no.11">Irrelevant experience</label>
                                        <input id="default-select-for-no.11" name="Irrelevant_experience" type="text" class="input-padding-create-recruitment-1 default-input-for-add-client-1"placeholder="Any irrelevant internship experience" required />
                                    </p>

                                </div>
                                <input type = "submit" name = "next" class="save_button_addClient default-button-for-recruiter-dashboard" value="Save" >
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<script src="./js/createRecruitement.js"></script>
