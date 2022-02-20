<?php
include 'connection1.php';          //database connection page included
session_start();             //session has been started

// posting all data from personal information page to global variables using $_Session['']

if (isset($_POST['next'])) {


$_SESSION['firstname']  = $_POST['firstname'];
$_SESSION['lastname']   = $_POST['lastname'];
$_SESSION['emailid']    = $_POST['emailid'];
$_SESSION['phonenumber'] = $_POST['phonenumber'];
$_SESSION['birthdate']   = $_POST['birthdate'];
$_SESSION['Industry']   = $_POST['Industry'];
$_SESSION['address']    = $_POST['address'];
$_SESSION['ownership']  = $_POST['ownership'];
$_SESSION['cityname']   = $_POST['cityname'];
$_SESSION['Zipcode']    = $_POST['Zipcode'];
$_SESSION['State']      = $_POST['State'];



// method to insert any image or doc files in database
    $td="../img/";
    $tf=$td.basename($_FILES["image"]["name"]);

    $_SESSION['image']  = basename($_FILES["image"]["name"]);

    $move= move_uploaded_file($_FILES["image"]["tmp_name"] , $tf);

    if (!($move)) {

        echo "something wrong";
    }
}

?>

<?php include('header.php')?>
<link rel="stylesheet" href="./css/addClient.css">
<link rel="stylesheet" href="./css/addCandidates1.css">
<title>Analysed</title>
<div class="container">
<div class="bread-crumbs_Mytools-recruiter">
        <a href="/" class="unactive-breadcrumb-link">Dashboard</a> > <a href="" class="unactive-breadcrumb-link">My Database</a> > <a href="" class="active-breadcrumb-link">Add candidates</a>
    </div>
    <div class="small_container">
        <div class="heading_dash">
            <h1 class="mainHeadingDash">Add Candidate</h1>
            <p class="mainParaDash">Please enter the details of the new candidates</p>
        </div>
        <!-- <button class="save_button_addClient default-button-for-recruiter-dashboard">Save</button> -->
        <div class="row-recruiter container-for-add-client-main">
            <div class="left-side-row-for-add-client-container-1">
                <p class="links-for-add-client-low-side-row-for-add-client active" id="link-categories-addClient-1"><a href="addCandidates1.php" >Personal infromation</a></p>
                <p class="links-for-add-client-low-side-row-for-add-client" id="link-categories-addClient-2"><a href="addCandidates2.php" class="active">Professional infromation</a></p>
                <p class="links-for-add-client-low-side-row-for-add-client" id="link-categories-addClient-3"><a href="addCandidates3.php">Skills & Qualification</a></p>
                <p class="links-for-add-client-low-side-row-for-add-client" id="link-categories-addClient-3"><a href="addCandidates4.php">Additional information</a></p>
            </div>
            <div class="right-side-row-for-add-client-container-1" id="general-information-addclient-1">
            <div class="row-recruiter" style="margin-bottom: 30px;">
                <img src="./img/mortarboard.svg" width="50px" style="margin-right: 30px;">
                    <h2 class="heading-for-general-information-right-side-add-client-container">Professional information</h2>
                </div>
                <form action="addCandidates3.php" method="POST" enctype="multipart/form-data"> <!-- redirecting to skills & Qualification page with data of professional information -->
                <div class="row-recruiter inputs-for-add-client-below-image-box">
                    <div class="right-side-image-box-right-add-client-1">
                                <div class="row-recruiter sub-divs-image-box-right-side-add-client">
                                    <p class="input-para-add-client-ekam-1 fx-city-name-1">
                                        <label for="default-input-for-no.1">Current Title*</label>
                                        <input type="text" name="currentTitle" class="default-input-for-add-client-1" placeholder="Company name" id="default-input-for-no.1" required />
                                    </p>
                                    <p class="input-para-add-client-ekam-1 fx-city-name-1">
                                        <label for="default-input-for-no.1">Company Name*</label>
                                        <input type="text" name="companyName" class="default-input-for-add-client-1" placeholder="Company name" id="default-input-for-no.1" required />
                                    </p>
                                    <p class="input-para-add-client-ekam-1 right-side fx-city-name-1">
                                        <label for="default-select-for-no1 ">Candidate Type*</label>
                                        <select name="candidateType" id="default-select-for-no.1" class="default-select-for-add-client-1" required />
                                            <option value="0" default>Select Status</option>
                                            <option value="1">Reviewed</option>
                                            <option value="2">Contacting</option>
                                            <option value="3">Hired</option>
                                        </select>
                                    </p>
                                    <p class="select-for-select-image-box-below-inputs fx-city-name-1">
                                        <label for="default-select-for-no.3">Employment Preference*</label>
                                            <select name="employmentPreference" id="default-select-for-no.3" class="default-select-for-add-client-1" required />
                                                <option value="0" default>Temporary to permanent</option>
                                                <option value="1">Open</option>
                                                <option value="2">Closed</option>
                                                <option value="3">Working</option>
                                            </select>
                                    </p>
                                    <p class="select-for-select-image-box-below-inputs fx-city-name-1">
                                        <label for="default-select-for-no.3">Source*</label>
                                            <select name="source" id="default-select-for-no.3" class="default-select-for-add-client-1" required />
                                                <option value="0" default>Temporary to permanent</option>
                                                <option value="1">Open</option>
                                                <option value="2">Closed</option>
                                                <option value="3">Working</option>
                                            </select>
                                    </p>
                                    <p class="select-for-select-image-box-below-inputs fx-city-name-1">
                                        <label for="default-select-for-no.3">Recruiter*</label>
                                            <select name="recruiter" id="default-select-for-no.3" class="default-select-for-add-client-1" required />
                                                <option value="0" default>Temporary to permanent</option>
                                                <option value="1">Open</option>
                                                <option value="2">Closed</option>
                                                <option value="3">Working</option>
                                            </select>
                                    </p>

                                    <p class="input-para-add-client-ekam-1 fx-city-name-1 ">
                                        <label for="default-input-for-no.2">Current Salary*</label>
                                        <input type="text" name="currentSalary" class="default-input-for-add-client-1" placeholder="Company URL" id="default-input-for-no.2" required />
                                    </p>
                                    <span class="input-para-add-client-ekam-1 desired-salary-p">
                                        <label for="default-input-for-no.2">Desired Salary Range*</label>
                                        <span class="row-recruiter">
                                            <input type="text" name="salaryRange1" class="default-input-for-add-client-1 desired-salary" placeholder="Company URL" id="default-input-for-no.2" required /> to
                                            <input type="text" name="salaryRange2" class="default-input-for-add-client-1 desired-salary" placeholder="Company URL" id="default-input-for-no.2" required />
                                        </span>
                                    </span>
                                </div>
                                <input type = "submit" name = "next" class="save_button_addClient default-button-for-recruiter-dashboard" value="Save" >
                        </div>
                    </form>
                    </div>
                </div>
    </div>
    </div>
</div>
