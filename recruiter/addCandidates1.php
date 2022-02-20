<?php
include 'connection1.php';         //database connection page included
session_start();            //session has been started
?>


<?php include('header.php')?>
<link rel="stylesheet" href="./css/addClient.css">
<link rel="stylesheet" href="./css/addCandidates1.css">
<link rel="stylesheet" href="../signup/recruiter/css/index.css">
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
                <p class="links-for-add-client-low-side-row-for-add-client active" id="link-categories-addClient-1"><a href="addCandidates1.php" class="active">Personal infromation</a></p>
                <p class="links-for-add-client-low-side-row-for-add-client" id="link-categories-addClient-2"><a href="addCandidates2.php">Professional infromation</a></p>
                <p class="links-for-add-client-low-side-row-for-add-client" id="link-categories-addClient-3"><a href="addCandidates3.php">Skills & Qualification</a></p>
                <p class="links-for-add-client-low-side-row-for-add-client" id="link-categories-addClient-3"><a href="addCandidates4.php">Additional information</a></p>
            </div>
            <div class="right-side-row-for-add-client-container-1" id="general-information-addclient-1">
                <div class="row-recruiter sub-divs-image-box-right-side-add-client">
                <div class="row-recruiter" style="margin-bottom: 30px;">
                <img src="./img/user.svg" width="50px" style="margin-right: 30px;">
                    <h2 class="heading-for-general-information-right-side-add-client-container">Personal information</h2>
                </div>


                    </div>
                </div>
                <form action="addCandidates2.php" method="POST" enctype="multipart/form-data"> <!-- redirecting to professional information page with data of personal information -->
                <div class="row-recruiter image-box-right-side-add-client">
                        <div class="left-side-image-box-add-client-1">
                            <div class="sub-divs-image-box-right-side-add-client">
                                <input type="file" name="image" class="input-image-upload-ekam-1-add-client" id="input-image-upload-ekam-1-add-client" />
                                <label class="label-for-image-upload-ekam-1client" for="input-image-upload-ekam-1-add-client">
                                    <h2><i class="" aria-hidden="true"></i></h2>
                                    <p class="position-absolute-image-upload-e"><i class="fa fa-camera" aria-hidden="true"></i></p>
                                </label>
                            </div>
                        </div>
                <div class="row-recruiter inputs-for-add-client-below-image-box">
                    <div class="right-side-image-box-right-add-client-1">
                                <div class="row-recruiter sub-divs-image-box-right-side-add-client">
                                    <p class="input-para-add-client-ekam-1 fx-city-name-1">
                                        <label for="default-input-for-no.1">First Name*</label>
                                        <input type="text" name="firstname" class="default-input-for-add-client-1" placeholder="Company name" id="default-input-for-no.1" required />
                                    </p>
                                    <p class="input-para-add-client-ekam-1 fx-city-name-1">
                                        <label for="default-input-for-no.1">Last Name*</label>
                                        <input type="text" name="lastname" class="default-input-for-add-client-1" placeholder="Company name" id="default-input-for-no.1" required />
                                    </p>
                                    <p class="input-para-add-client-ekam-1 fx-city-name-1">
                                        <label for="default-input-for-no.1">Email-ID*</label>
                                        <input type="email" name="emailid" class="default-input-for-add-client-1" placeholder="Company name" id="default-input-for-no.1" required />
                                    </p>
                                    <div class="input-signup-div fx-city-name-1">
                                        <label for="input-first-name">Phone number</label>
                                        <div class="phn-number-div row-signup"  style="flex-wrap: nowrap;"><select name="code"><option value="+91">+91</option></select><input type="tel" maxlength='10' name="phonenumber" placeholder="Phone number" id="input-first-name" class="phn-number--input-signup"></div>
                                    </div>
                                    <p class="input-para-add-client-ekam-1 fx-city-name-1">
                                        <label for="default-input-for-no.1">Birth Date*</label>
                                        <input type="date" name="birthdate" class="default-input-for-add-client-1" placeholder="Company name" id="default-input-for-no.1" required />
                                    </p>
                                    <p class="select-for-select-image-box-below-inputs fx-city-name-1">
                                        <label for="default-select-for-no.3">Status</label>
                                            <select name="Industry" id="default-select-for-no.3" class="default-select-for-add-client-1">
                                                <option value="0" default>Temporary to permanent</option>
                                                <option value="1">Open</option>
                                                <option value="2">Closed</option>
                                                <option value="3">Working</option>
                                            </select>
                                    </p>
                                    <p class="input-para-add-client-ekam-1 ">
                                        <label for="default-input-for-no.2">Address*</label>
                                        <input type="text" name="address" class="default-input-for-add-client-1" placeholder="Address" id="default-input-for-no.2" required />
                                    </p>
                                    <p  class="input-para-add-client-ekam-1 fx-city-name-1">
                                        <label for="default-select-for-no.2">Country</label>
                                        <select name="ownership" id="default-select-for-no.2" class="default-select-for-add-client-1">
                                            <option value="0" default>Select Ownership</option>
                                            <option value="India">India</option>
                                            <option value="Australia">Australia</option>
                                            <option value="Japan">Japan</option>
                                        </select>
                                    </p>
                                    <p class="input-para-add-client-ekam-1  fx-city-name-1">
                                        <label for="default-select-for-no.13">City name</label>
                                        <input id="default-select-for-no.13" name="cityname" type="text" class="default-input-for-add-client-1" placeholder="Enter your city name">
                                    </p>
                                    <p class="input-para-add-client-ekam-1  fx-city-name-1">
                                            <label for="default-select-for-no.13">Zipcode</label>
                                            <input id="default-select-for-no.13" name="Zipcode" type="text" class="default-input-for-add-client-1" placeholder="Enter zipcode of city">
                                    </p>
                                    <p class="select-for-select-image-box-below-inputs  fx-city-name-1">
                                        <label for="default-select-for-no.6">State</label>
                                            <select name="State" id="default-select-for-no.6" class="default-select-for-add-client-1">
                                                <option value="0" default>Andhra Pradesh</option>
                                                <option value="karnataka">karnataka</option>
                                                <option value="UP">UP</option>
                                                <option value="Maharastra">Maharastra</option>
                                            </select>
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
