<?php

    include 'connection1.php';         //database connection page included
    session_start();            //session has been started


// posting all data from personal information page to global variables using $_Session['']

   $_SESSION['Roles_and_responsibilities']  = $_POST['Roles_and_responsibilities'];
   $_SESSION['Growth_oppurtunities']  = $_POST['Growth_oppurtunities'];
   $_SESSION['Learning_oppurtunities']  = $_POST['Learning_oppurtunities'];
   $_SESSION['Employeee_endorsements']  = $_POST['Employeee_endorsements'];
   $_SESSION['Employee_benefits']  = $_POST['Employee_benefits'];
   $_SESSION['Reputation_of_organisation']  = $_POST['Reputation_of_organisation'];
   $_SESSION['advert_Job_description']  = $_POST['advert_Job_description'];
   $_SESSION['Transportation']  = $_POST['Transportation'];




// method to insert any files in database
    $td="../img/";
    $tf=$td.basename($_FILES["Workspace_view"]["name"]);

    $_SESSION['Workspace_view']  = basename($_FILES["Workspace_view"]["name"]);

    $move= move_uploaded_file($_FILES["Workspace_view"]["tmp_name"] , $tf);

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


        <form action="createRecruitementInsert.php" method="post" enctype="multipart/form-data">   <!-- redirecting to insert page with data of Payment info-->
        <div class="row-recruiter container-for-add-client-main">
            <div class="left-side-row-for-add-client-container-1">
                <p class="links-for-add-client-low-side-row-for-add-client active" id="link-categories-addRec-1"><a href="createRecruitement.php">Job Description</a></p>
                <p class="links-for-add-client-low-side-row-for-add-client" id="link-categories-addRec-2"><a href="createRecruitement1.php">Skills & Exp</a></p>
                <p class="links-for-add-client-low-side-row-for-add-client" id="link-categories-addRec-3"><a href="createRecruitement2.php">Role Details</a></p>
                <p class="links-for-add-client-low-side-row-for-add-client" id="link-categories-addRec-4"><a href=""  class="active">Payment info</a></p>
            </div>
            <div class="right-side-row-for-add-client-container-1 " id="payment-information-createRec-1">
                    <h2 class="heading-for-general-information-right-side-add-client-container okaniawa-3"><i class="fa fa-money" aria-hidden="true"></i> Payment information</h2>
                    <div class="row-recruiter image-box-right-side-add-client">
                        <div class="right-side-image-box-right-add-client-1 create-rec">
                            <div class="row-recruiter sub-divs-image-box-right-side-add-client">
                                <div class="row-recruiter inputs-for-add-client-below-image-box">
                                    <p class="select-for-select-image-box-below-inputs right-side">
                                        <label for="default-select-for-no.3">Package type *</label>
                                            <select name="Package_type"id="default-select-for-no.3" class="default-select-for-add-client-1">
                                                <option value="Dollars" default>Dollars (AUS)</option>
                                                <option value="1">Open</option>
                                                <option value="2">Closed</option>
                                                <option value="3">Working</option>
                                            </select>
                                    </p>
                                    <p class="select-for-select-image-box-below-inputs">
                                        <label for="default-select-for-no.4">Package type *</label>
                                            <select name="Package_duration" id="default-select-for-no.4" class="default-select-for-add-client-1" required />
                                                <option value="Per month" default>Per month</option>
                                                <option value="3 month">3 month</option>
                                            </select>
                                    </p>
                                    <p class="input-para-add-client-ekam-1">
                                        <label for="default-select-for-no.9">Package *</label>
                                            <input id="default-select-for-no.9" name="Package" class="default-input-for-add-client-1"placeholder="Your designation" required />
                                    </p>
                                    <p class="input-para-add-client-ekam-1">
                                        <label for="default-select-for-no.9">Bill rate *</label>
                                            <input id="default-select-for-no.9" name="Bill_rate" class="default-input-for-add-client-1"placeholder="Your designation" required />
                                    </p>
                                    <p class="input-para-add-client-ekam-1">
                                        <label for="default-select-for-no.9">Markup % *</label>
                                            <input id="default-select-for-no.9" name="Markup" class="default-input-for-add-client-1"placeholder="Your designation" required />
                                    </p>
                                    <p class="input-para-add-client-ekam-1">
                                        <label for="default-select-for-no.9">Client margin *</label>
                                            <input id="default-select-for-no.9" name="client_margin" class="default-input-for-add-client-1"placeholder="Your designation" required />
                                    </p>
                                    <p class="input-para-add-client-ekam-1 fx-city-name-1">
                                        <label for="default-select-for-no.9">Days on</label>
                                            <input id="default-select-for-no.9" name="Days_on" class="default-input-for-add-client-1"placeholder="Your designation" required />
                                    </p>
                                    <p class="input-para-add-client-ekam-1 fx-city-name-1">
                                        <label for="default-select-for-no.9">Days off</label>
                                            <input id="default-select-for-no.9" name="Days_off" class="default-input-for-add-client-1"placeholder="Your designation" required />
                                    </p>
                                    <p class="input-para-add-client-ekam-1 fx-city-name-1">
                                        <label for="default-select-for-no.9">Shift pattern</label>
                                            <input id="default-select-for-no.9" name="Shift_pattern" class="default-input-for-add-client-1"placeholder="Your designation" required />
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
