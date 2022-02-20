<?php

    include 'connection1.php';  //database connection page included
    session_start();      //session has been started

    // posting all data from personal information page to global variables using $_Session['']
   $_SESSION['skills']  = $_POST['skills'];
   $_SESSION['Qualifications']  = $_POST['Qualifications'];
   $_SESSION['Eligibility_criteria']  = $_POST['Eligibility_criteria'];
   $_SESSION['Experience_requirement']  = $_POST['Experience_requirement'];
   $_SESSION['Relevant_experience']  = $_POST['Relevant_experience'];
   $_SESSION['Irrelevant_experience']  = $_POST['Irrelevant_experience'];


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

        <form action="createRecruitement3.php" method="post" enctype="multipart/form-data">  <!-- redirecting to Payment info page with data of Role Details -->
        <div class="row-recruiter container-for-add-client-main">
            <div class="left-side-row-for-add-client-container-1">
                <p class="links-for-add-client-low-side-row-for-add-client active" id="link-categories-addRec-1"><a href="createRecruitement.php">Job Description</a></p>
                <p class="links-for-add-client-low-side-row-for-add-client" id="link-categories-addRec-2"><a href="createRecruitement1.php">Skills & Exp</a></p>
                <p class="links-for-add-client-low-side-row-for-add-client" id="link-categories-addRec-3"><a href=""  class="active">Role Details</a></p>
                <p class="links-for-add-client-low-side-row-for-add-client" id="link-categories-addRec-4"><a href="createRecruitement3.php">Payment info</a></p>
            </div>
            <div class="right-side-row-for-add-client-container-1 " id="role-information-createRec-1">
                    <h2 class="heading-for-general-information-right-side-add-client-container okaniawa-2"><i class="fa fa-handshake-o" aria-hidden="true"></i> Roles & Responsibilities</h2>
                    <div class="row-recruiter image-box-right-side-add-client">
                        <div class="right-side-image-box-right-add-client-1 create-rec">
                            <div class="row-recruiter sub-divs-image-box-right-side-add-client">
                                <div class="row-recruiter inputs-for-add-client-below-image-box inputs-for-add-client-below-image-box-create-rec">
                                    <p class="input-para-add-client-ekam-1">
                                        <label for="default-select-for-no.11">Roles and responsibilities *</label>
                                        <input id="default-select-for-no.11" name="Roles_and_responsibilities" type="text" class="input-padding-create-recruitment-12 default-input-for-add-client-1"placeholder="Enter roles and responsibilties" required />
                                    </p>
                                    <p class="input-para-add-client-ekam-1">
                                        <label for="default-select-for-no.11">Growth oppurtunities *</label>
                                        <input id="default-select-for-no.11" name="Growth_oppurtunities" type="text" class="input-padding-create-recruitment-12 default-input-for-add-client-1"placeholder="Enter potentional growth opportunities" required />
                                    </p>
                                    <p class="input-para-add-client-ekam-1">
                                        <label for="default-select-for-no.11">Learning oppurtunities *</label>
                                        <input id="default-select-for-no.11" name="Learning_oppurtunities" type="text" class="input-padding-create-recruitment-12 default-input-for-add-client-1"placeholder="Potential learning opportunities" required />
                                    </p>
                                    <p class="input-para-add-client-ekam-1">
                                        <label for="default-select-for-no.11">Employee endorsements *</label>
                                        <input id="default-select-for-no.11" name="Employeee_endorsements" type="text" class="input-padding-create-recruitment-12 default-input-for-add-client-1"placeholder="Enter employee endorsements" required />
                                    </p>
                                    <p class="input-para-add-client-ekam-1">
                                        <label for="default-select-for-no.11">Employee benefits *</label>
                                        <input id="default-select-for-no.11" name="Employee_benefits" type="text" class="input-padding-create-recruitment-12 default-input-for-add-client-1"placeholder="Enter employee benefits" required />
                                    </p>
                                    <p class="input-para-add-client-ekam-1">
                                        <label for="default-select-for-no.11">Reputation of organisation *</label>
                                        <input id="default-select-for-no.11" name="Reputation_of_organisation" type="text" class="input-padding-create-recruitment-12 default-input-for-add-client-1"placeholder="Enter reputation of organisation" required />
                                    </p>
                                    <p class="input-para-add-client-ekam-1">
                                        <label for="default-select-for-no.11">Job description for the advert *</label>
                                        <input id="default-select-for-no.11" name="advert_Job_description" type="text" class="input-padding-create-recruitment-12 default-input-for-add-client-1"placeholder="Enter reputation of organisation" required />
                                    </p>
                                    <p class="input-para-add-client-ekam-1">
                                        <label for="default-select-for-no.11">Workspace view</label>
                                        <input id="default-select-for-no.11" name="Workspace_view" type="file" class="" placeholder="Enter reputation of organisation">

                                        <label for="default-select-for-no.3" style="margin-top:40px">Transportation *</label>
                                            <select name="Transportation" id="default-select-for-no.3" class="default-select-for-add-client-1"required />
                                                <option value="Anywhere" default>Anywhere</option>
                                                <option value="1">Open</option>
                                                <option value="2">Closed</option>
                                                <option value="3">Working</option>
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
</div>
