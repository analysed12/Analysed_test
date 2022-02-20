<?php

    include 'connection1.php';     //database connection page included
    session_start();        //session has been started




    // posting all data from personal information page to global variables using $_Session['']
     $_SESSION['job_title']  = $_POST['job_title'];
     $_SESSION['company_name']  = $_POST['company_name'];
     $_SESSION['contact_type']  = $_POST['contact_type'];
     $_SESSION['division']  = $_POST['division'];
     $_SESSION['source']  = $_POST['source'];
     $_SESSION['reports_to']  = $_POST['reports_to'];
     $_SESSION['industry']  = $_POST['industry'];
     $_SESSION['skills']  = $_POST['skills'];




?>


<?php include('header.php')?>

<link rel="stylesheet" href="./css/addClient.css">
<title>Analysed</title>
<form action="addContactIns.php" method="post" enctype="multipart/form-data"> <!-- redirecting to insert query page with data of additional information -->
<div class="container">
    <div class="bread-crumbs_Mytools-recruiter">
        <a href="/">Dashboard</a> > <a href="">My Database</a> > <a href="">Add Contact</a>
    </div>
    <div class="small_container">
        <div class="heading_dash">
            <h1 class="mainHeadingDash">Add Contact</h1>
            <p class="mainParaDash">Fill in the details to create a new client.</p>
        </div>

       <!-- <button class="save_button_addClient default-button-for-recruiter-dashboard">Save</button>-->
        <div class="row-recruiter container-for-add-client-main">
            <div class="left-side-row-for-add-client-container-1">
                <p class="links-for-add-client-low-side-row-for-add-client " id="link-categories-addContact-1"><a href="addContact.php"> Personal info</a></p>
                <p class="links-for-add-client-low-side-row-for-add-client" id="link-categories-addContact-2"><a href="addContactProfessional.php">Professional info</a></p>
                <p class="links-for-add-client-low-side-row-for-add-client active" id="link-categories-addContact-3"><a href="addContatadd.php" class="active">Additional info</a></p>
            </div>

            <div class="right-side-row-for-add-client-container-1" id="additional-information-addcontact-1">
                <h2 class="heading-for-general-information-right-side-add-client-container heading-addContact-3"><i class="fa fa-question" aria-hidden="true"></i> Additional information</h2>
                <div class="row-recruiter image-box-right-side-add-client">
                    <div class="right-side-image-box-right-add-client-1">
                        <div class="row-recruiter inputs-for-add-client-below-image-box">
                            <p class="input-para-add-client-ekam-1 calendar-input-addContact-1" >
                                <label for="default-input-for-no.1 ">Last Contact </label>
                                <input type="date" name="last_contact" class="default-input-for-add-client-1" placeholder="Enter current job title of candidate" id="default-input-for-no.1">
                            </p>
                            <p class="input-para-add-client-ekam-1 calendar-input-addContact-1" >
                                <label for="default-input-for-no.1011">Last visit</label>
                                <input type="date" name="lastvisit" class="default-input-for-add-client-1" placeholder="Candidate currently employed in?" id="default-input-for-no.1011">
                            </p>
                            </div>
                            <div class="row-recruiter inputs-for-add-client-below-image-box">
                                <p class="input-para-add-client-ekam-1 right-side" style="margin-left: 0px;">
                                    <label for="default-select-for-no1">Visibility *</label>
                                    <select name="visibility" id="default-select-for-no.1" class="default-select-for-add-client-1">
                                        <option value="0" default>Internal</option>
                                        <option value="1">Open</option>
                                        <option value="2">Closed</option>
                                        <option value="3">Working</option>
                                    </select>
                                </p>
                                <p class="input-para-add-client-ekam-1 right-side" style="margin-left: 0px;">
                                    <label for="default-select-for-no1">Validity*</label>
                                    <select name="validity" id="default-select-for-no.1" class="default-select-for-add-client-1">
                                        <option value="0" default>System verified</option>
                                        <option value="1">Open</option>
                                        <option value="2">Closed</option>
                                        <option value="3">Working</option>
                                    </select>
                                </p>
                                    <p class="input-para-add-client-ekam-1">
                                        <label for="default-input-for-no.2">Link to LinkedIn profile </label>
                                        <input type="text" name="LinkedIn_profile" class="default-input-for-add-client-1" placeholder="Profile URL" id="default-input-for-no.2">
                                    </p>
                            </div>
                             <input type = "submit" name = "submit" class="save_button_addClient default-button-for-recruiter-dashboard" value="Save" >
                    </div>
                </div>
            </div>
        </div>

    </div>
</div>
</form>
