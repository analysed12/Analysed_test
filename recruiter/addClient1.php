<?php

include 'connection1.php';     //database connection page included
session_start();        //session has been started



// posting all data from personal information page to global variables using $_Session['']
$_SESSION['company_name']  = $_POST['company_name'];
$_SESSION['status']   = $_POST['status'];
$_SESSION['company']    = $_POST['company'];
$_SESSION['ownership'] = $_POST['ownership'];
$_SESSION['industry']   = $_POST['industry'];
$_SESSION['source']   = $_POST['source'];
$_SESSION['parent_company']    = $_POST['parent_company'];
$_SESSION['active_contact']  = $_POST['active_contact'];
$_SESSION['company_desc']   = $_POST['company_desc'];
$_SESSION['permanent_fee']    = $_POST['permanent_fee'];
$_SESSION['contract_fee']      = $_POST['contract_fee'];




// method to insert any files in database
    $td="../img/";
    $tf=$td.basename($_FILES["fileToUpload"]["name"]);

    $_SESSION['image'] = basename($_FILES["fileToUpload"]["name"]);

    $move= move_uploaded_file($_FILES["fileToUpload"]["tmp_name"] , $tf);

    if (!($move)) {

        echo "something wrong";
    }



?>

<?php include('header.php');?>

<link rel="stylesheet" href="./css/addClient.css">
<title>Analysed</title>
  <form action="addClient2.php" method="post" enctype="multipart/form-data"> <!-- redirecting to Billing information page with data of contact  information -->
<div class="container">
    <div class="bread-crumbs_Mytools-recruiter">
        <a href="/">Dashboard</a> > <a href="">My Database</a> > <a href="">Add client</a>
    </div>
    <div class="small_container">
        <div class="heading_dash">
            <h1 class="mainHeadingDash">Add Client</h1>
            <p class="mainParaDash">Fill in the details to create a new client.</p>
        </div>
        <!-- <button class="save_button_addClient default-button-for-recruiter-dashboard">Save</button> -->
        <div class="row-recruiter container-for-add-client-main">
            <div class="left-side-row-for-add-client-container-1">
                <p class="links-for-add-client-low-side-row-for-add-client active" id="link-categories-addClient-1"><a href="addClient.php">General info</a></p>
                <p class="links-for-add-client-low-side-row-for-add-client" id="link-categories-addClient-2"><a href="addClient1.php" class="active">Contact info</a></p>
                <p class="links-for-add-client-low-side-row-for-add-client" id="link-categories-addClient-3"><a href="addClient2.php">Billing info</a></p>
            </div>

            <div class="right-side-row-for-add-client-container-1" id="contact-info-addclient-1">
                <h2 class="heading-for-general-information-right-side-add-client-container-1"><i class="fa fa-building" aria-hidden="true"></i> Contact information</h2>
                <div class="row-recruiter inputs-for-add-client-below-image-box">
                    <p class="input-para-add-client-ekam-1">
                            <label for="default-select-for-no.11">Main Email</label>
                            <input id="default-select-for-no.11" name="main_email" type="email" class="default-input-for-add-client-1"placeholder="Enter mail email id" required />
                        </p>
                        <p class="input-para-add-client-ekam-1">
                            <label for="default-select-for-no.12">Contact number</label>
                            <input id="default-select-for-no.12" type="tel" name="contact_no" class="default-input-for-add-client-1" placeholder="Enter 10 digit mobile number" required />
                    </p>
                    <p class="input-para-add-client-ekam-1">
                            <label for="default-select-for-no.13">Address</label>
                            <input id="default-select-for-no.13" type="text" name="address" class="default-input-for-add-client-1" placeholder="Enter your address" required />
                    </p>
                    <p class="input-para-add-client-ekam-1 fx-city-name">
                            <label for="default-select-for-no.13">City name</label>
                            <input id="default-select-for-no.13" name="city" type="text" class="default-input-for-add-client-1" placeholder="Enter your city name" required>
                    </p>
                    <p class="input-para-add-client-ekam-1 fx-zipcode">
                            <label for="default-select-for-no.13">Zipcode</label>
                            <input id="default-select-for-no.13" name="zipcode" type="text" class="default-input-for-add-client-1" placeholder="Enter zipcode of city" required>
                    </p>
                    <p class="select-for-select-image-box-below-inputs">
                        <label for="default-select-for-no.6">State</label>
                            <select name="state" id="default-select-for-no.6" class="default-select-for-add-client-1" required>
                                <option value="" default>Select state</option>
                                <option value="Tamil Nadu">Tamil Nadu</option>
                                <option value="Andhra Pradesh">Andhra Pradesh</option>
                                <option value="Uttar Pradesh">Uttar Pradesh</option>
                                <option value="Madhya Pradesh">Madhya Pradesh</option>
                            </select>
                    </p>
                    <p class="select-for-select-image-box-below-inputs">
                        <label for="default-select-for-no.6">Country</label>
                            <select name="country" id="default-select-for-no.6" class="default-select-for-add-client-1" required>
                               <option value="0" default>Select Country</option>
                               <option value="India">India</option>
                               <option value="Australia">Australia</option>
                               <option value="Germany">Germany</option>
                            </select>
                    </p>
                    <input type = "submit" name="next"  class="save_button_addClient default-button-for-recruiter-dashboard" value="next" >
                </div>
            </div>

        </div>
    </div>
    </div>
</div>
 </form>
