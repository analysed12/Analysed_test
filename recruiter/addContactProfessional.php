<?php


include 'connection1.php';         //database connection page included
    session_start();        //session has been started



// posting all data from personal information page to global variables using $_Session['']
    $_SESSION['fname']  = $_POST['fname'];
    $_SESSION['lname']  = $_POST['lname'];
    $_SESSION['status']  = $_POST['status'];
    $_SESSION['mname']  = $_POST['mname'];
    $_SESSION['email']  = $_POST['email'];
    $_SESSION['phone']  = $_POST['phone'];
    $_SESSION['address']  = $_POST['address'];
    $_SESSION['city']  = $_POST['city'];
    $_SESSION['zip_code']  = $_POST['zip_code'];
    $_SESSION['state']  = $_POST['state'];
    $_SESSION['country']  = $_POST['country'];



    // method to insert any files in database
    $td="../img/";
    $tf=$td.basename($_FILES["fileToUpload"]["name"]);

    $_SESSION['image'] = basename($_FILES["fileToUpload"]["name"]);

    $move= move_uploaded_file($_FILES["fileToUpload"]["tmp_name"] , $tf);

    if (!($move)) {

        echo "something wrong";
    }


?>

<?php include('header.php')?>
<link rel="stylesheet" href="./css/addClient.css">
<title>Analysed</title>
<form action="addContatadd.php" method="post" enctype="multipart/form-data"> <!-- redirecting to Additional info page with data of professional info -->
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
                <p class="links-for-add-client-low-side-row-for-add-client" id="link-categories-addContact-1"><a href="addContact.php" >Personal info</a></p>
                <p class="links-for-add-client-low-side-row-for-add-client active" id="link-categories-addContact-2"><a href="addContactProfessional.php" class="active">Professional info</a></p>
                <p class="links-for-add-client-low-side-row-for-add-client" id="link-categories-addContact-3"><a href="addContatadd.php">Additional info</a></p>
            </div>

            <div class="right-side-row-for-add-client-container-1" id="professional-information-addcontact-1">
                <h2 class="heading-for-general-information-right-side-add-client-container  heading-addContact-2"><i class="fa fa-user" aria-hidden="true"></i> Professional information</h2>
                <div class="row-recruiter image-box-right-side-add-client">
                    <div class="right-side-image-box-right-add-client-1">
                        <div class="row-recruiter inputs-for-add-client-below-image-box">
                            <p class="input-para-add-client-ekam-1" >
                                <label for="default-input-for-no.1">Current title </label>
                                <input type="text" name="job_title" class="default-input-for-add-client-1" placeholder="Enter current job title of candidate" id="default-input-for-no.1">
                            </p>
                            <p class="input-para-add-client-ekam-1" >
                                <label for="default-input-for-no.1011">Company name</label>
                                <input type="text" name="company_name"class="default-input-for-add-client-1" placeholder="Candidate currently employed in?" id="default-input-for-no.1011">
                            </p>
                            </div>
                            <div class="row-recruiter inputs-for-add-client-below-image-box">
                                <p class="input-para-add-client-ekam-1 right-side" style="margin-left: 0px;">
                                    <label for="default-select-for-no1">Contact type *</label>
                                    <select name="contact_type" id="default-select-for-no.1" class="default-select-for-add-client-1">
                                        <option value="0" default>Client</option>
                                        <option value="1">Open</option>
                                        <option value="2">Closed</option>
                                        <option value="3">Working</option>
                                    </select>
                                </p>
                                <p class="input-para-add-client-ekam-1 right-side" style="margin-left: 0px;">
                                    <label for="default-select-for-no1">Division*</label>
                                    <select name="division" id="default-select-for-no.1" class="default-select-for-add-client-1">
                                        <option value="0" default>Other</option>
                                        <option value="1">Open</option>
                                        <option value="2">Closed</option>
                                        <option value="3">Working</option>
                                    </select>
                                </p>
                                <p class="input-para-add-client-ekam-1 right-side" style="margin-left: 0px;">
                                    <label for="default-select-for-no1">Source *</label>
                                    <select name="source" id="default-select-for-no.1" class="default-select-for-add-client-1">
                                        <option value="0" default>Select your source (Ex. LinkedIn)</option>
                                        <option value="1">Open</option>
                                        <option value="2">Closed</option>
                                        <option value="3">Working</option>
                                    </select>
                                </p>
                                <p class="input-para-add-client-ekam-1 right-side" style="margin-left: 0px;">
                                    <label for="default-select-for-no1">Reports to *</label>
                                    <select name="reports_to" id="default-select-for-no.1" class="default-select-for-add-client-1">
                                        <option value="0" default>Select a recruiter</option>
                                        <option value="1">Open</option>
                                        <option value="2">Closed</option>
                                        <option value="3">Working</option>
                                    </select>
                                </p>
                                <p class="input-para-add-client-ekam-1 right-side" style="margin-left: 0px;">
                                    <label for="default-select-for-no1">Industry *</label>
                                    <select name="industry" id="default-select-for-no.1" class="default-select-for-add-client-1">
                                        <option value="0" default>Select Industry</option>
                                        <option value="1">Open</option>
                                        <option value="2">Closed</option>
                                        <option value="3">Working</option>
                                    </select>
                                </p>
                                    <p class="input-para-add-client-ekam-1">
                                        <label for="default-input-for-no.2">Required skills </label>
                                        <input name="skills" type="text" class="default-input-for-add-client-1" placeholder="Enter Required skills" id="default-input-for-no.2">
                                    </p>
                            </div>
                             <input type = "submit" name = "next" class="save_button_addClient default-button-for-recruiter-dashboard" value="Save" >
                    </div>
                </div>
            </div>
        </div>

    </div>
</div>
</form>
