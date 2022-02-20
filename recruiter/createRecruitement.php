<?php

   include 'connection1.php';   //database connection page included
    session_start();     //session has been started



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
        <form action="createRecruitement1.php" method="post" enctype="multipart/form-data"><!-- redirecting to skills & exp page with data of Job Description -->
        <div class="row-recruiter container-for-add-client-main">
            <div class="left-side-row-for-add-client-container-1">
                <p class="links-for-add-client-low-side-row-for-add-client active" id="link-categories-addRec-1"><a href="" class="active">Job Description</a></p>
                <p class="links-for-add-client-low-side-row-for-add-client" id="link-categories-addRec-2"><a href="createRecruitement1.php">Skills & Exp</a></p>
                <p class="links-for-add-client-low-side-row-for-add-client" id="link-categories-addRec-3"><a href="createRecruitement2.php">Role Details</a></p>
                <p class="links-for-add-client-low-side-row-for-add-client" id="link-categories-addRec-4"><a href="createRecruitement3.php">Payment info</a></p>
            </div>
            <div class="right-side-row-for-add-client-container-1 " id="job-information-createRec-1">
                <div class="row-recruiter file-upload-create-recruitment-1">
                    <h2 class="heading-for-general-information-right-side-add-client-container okaniawa"><i class="fa fa-user" aria-hidden="true"></i> Job Description</h2>

                        <label for="file-upload-create-rec-e" ><span style="font-size:18px;margin-right:12px;color:#333333;">Job description</span>
                        <label class="default-button-for-recruiter-dashboard file-upload">
                            <input type="file" name="file" style="display: none">Browse</label>
                        </label>
                    </div>

                    <div class="row-recruiter image-box-right-side-add-client">
                        <div class="right-side-image-box-right-add-client-1 create-rec">
                            <div class="row-recruiter sub-divs-image-box-right-side-add-client">
                                <div class="row-recruiter inputs-for-add-client-below-image-box">
                                    <p class="select-for-select-image-box-below-inputs fx-city-name-1 create-rec-100-temp-p">
                                        <label for="default-select-for-no.3">Position *</label>
                                            <select name="Position" style="color:#979797" id="default-select-for-no.3" class="default-select-for-add-client-1" required />
                                                <option value="0" default>Select an appropriate job title</option>
                                                <option value="Frontend Developer">Frontend Developer</option>
                                                <option value="Android Developer">Android Developer</option>
                                                <option value="UI Developer">UI Developer</option>
                                                <option value="Backend Developer">Backend Developer</option>
                                            </select>
                                    </p>
                                    <p class="select-for-select-image-box-below-inputs fx-city-name-1 create-rec-100-temp-p">
                                        <label for="default-select-for-no.4">Industry *</label>
                                            <select name="Industry" id="default-select-for-no.4" style="color:#979797" class="default-select-for-add-client-1" required />
                                                <option value="0" default>Industry related to job</option>
                                               <option value="Uber">Uber</option>
                                                <option value="Intel">Intel</option>
                                                <option value="Nike">Nike</option>
                                                <option value="AirBnB">AirBnB</option>
                                            </select>
                                    </p>
                                    <p class="select-for-select-image-box-below-inputs fx-city-name-1 create-rec-100-temp-p">
                                        <label for="default-select-for-no.5">Job type *</label>
                                            <select name="Jobtype" id="default-select-for-no.5" class="default-select-for-add-client-1" required />
                                                <option value="0" default>Select job type</option>
                                                <option value="Full-time">Full-time</option>
                                                <option value="Part-time">Part-time</option>
                                                <option value="Internship">Internship</option>
                                                <option value="Other">Other</option>
                                            </select>
                                    </p>
                                    <p class="select-for-select-image-box-below-inputs fx-city-name-1 create-rec-100-temp-p">
                                        <label for="default-select-for-no.3">Name of the client company *</label>
                                            <select name="client_company" id="default-select-for-no.3" style="color:#979797" class="default-select-for-add-client-1" required />
                                                <option value="0" default>Select a company from list</option>
                                                <option value="Adventure works">Adventure works</option>
                                                <option value="Blue yonder">Blue Yonder</option>
                                                <option value="Microsoft">Microsoft</option>
                                            </select>
                                    </p>
                                    <p class="select-for-select-image-box-below-inputs fx-city-name-1 create-rec-100-temp-p">
                                        <label for="default-select-for-no.4">Contact at client company *</label>
                                            <select name="Contact_at_client_company" id="default-select-for-no.4" style="color:#979797" class="default-select-for-add-client-1" required />
                                                <option value="0" default>Contact at company</option>
                                                <option value="Agarwal">Agarwal</option>
                                                <option value="Adams">Adams</option>
                                                <option value="Alexander">Alexander</option>
                                            </select>
                                    </p>
                                    <p class="select-for-select-image-box-below-inputs fx-city-name-1 create-rec-100-temp-p">
                                        <label for="default-select-for-no.5">Business Development Manager *</label>
                                            <select name="Business_Development_Manager" id="default-select-for-no.5" style="color:#979797" class="default-select-for-add-client-1" required />
                                                <option value="0" default>Manager for the recruitment</option>
                                                <option value="John Doe">John Doe</option>
                                                <option value="John smith">John smith</option>
                                                <option value="Cory Butler">Cory Butler</option>
                                            </select>
                                    </p>
                                    <p class="select-for-select-image-box-below-inputs fx-city-name-1 create-rec-100-temp-p">
                                        <label for="default-select-for-no.3">Status *</label>
                                            <select name="Status" id="default-select-for-no.3" class="default-select-for-add-client-1" required />
                                                <option value="0" default>select status</option>
                                                <option value="Temporary to Permanent">Temporary to Permanent</option>
                                                <option value="Temporary">Temporary</option>
                                                <option value="Permanent">Permanent</option>
                                            </select>
                                    </p>
                                    <p class="select-for-select-image-box-below-inputs fx-city-name-1 create-rec-100-temp-p">
                                        <label for="default-select-for-no.4">Priority *</label>
                                            <select name="Priority" id="default-select-for-no.4" class="default-select-for-add-client-1" required />
                                                <option value="0" default>Select priority</option>
                                                <option value="1">High</option>
                                                <option value="2">Low</option>
                                                <option value="3">Intermediate</option>
                                            </select>
                                    </p>
                                    <p class="select-for-select-image-box-below-inputs fx-city-name-1 create-rec-100-temp-p">
                                        <label for="default-select-for-no.5">Job reference number *</label>
                                            <select name="Job_reference_number" id="default-select-for-no.5" class="default-select-for-add-client-1" required />
                                                <option value="0" default>Reference number for job</option>
                                                <option value="1">J201</option>
                                                <option value="2">J202</option>
                                                <option value="3">J203</option>
                                            </select>
                                    </p>
                                    <p class="input-para-add-client-ekam-1 fx-city-name-1 create-rec-100-temp-p">
                                        <label for="default-select-for-no.9">Designation *</label>
                                            <input id="default-select-for-no.9" name="Designation" style="color:#979797" class="default-input-for-add-client-1" placeholder="Your designation" required />
                                    </p>
                                    <p class="select-for-select-image-box-below-inputs fx-city-name-1 create-rec-100-temp-p">
                                        <label for="default-select-for-no.5">Recruiter's name *</label>
                                            <select name="Recruiters_name" id="default-select-for-no.5" style="color:#979797" class="default-select-for-add-client-1" required />
                                                <option value="0" default>Who do you want to assign it to?</option>
                                                <option value="John Doe">John Doe</option>
                                                <option value="Chris Do">Chris DO</option>
                                                <option value="Sandro Vicente">Sandro Vicente</option>
                                            </select>
                                    </p>
                                    <p class="input-para-add-client-ekam-1 fx-city-name-1 create-rec-100-temp-p">
                                        <label for="default-select-for-no.9">Number of openings *</label>
                                            <input id="default-select-for-no.9" name="Number_of_openings" class="default-input-for-add-client-1" style="color:#979797;"placeholder="Number of openings" required />
                                    </p>
                                    <p class="input-para-add-client-ekam-1">
                                        <label for="default-select-for-no.10">Start Date</label>
                                        <input id="default-select-for-no.10" name="Start_Date" type="date" class="default-input-for-add-client-1" placeholder="Enter start date" required />
                                    </p>
                                    <p class="input-para-add-client-ekam-1">
                                        <label for="default-select-for-no.10">End Date</label>
                                        <input id="default-select-for-no.10" name="End_Date" type="date" class="default-input-for-add-client-1" placeholder="Enter value in %" required />
                                    </p>
                                    <p class="select-for-select-image-box-below-inputs fx-city-name-1 create-rec-100-temp-p">
                                        <label for="default-select-for-no.6">Job location *</label>
                                        <select name="Joblocation1" id="default-select-for-no.6" class="default-select-for-add-client-1" required />
                                            <option value="" default>Select Location</option>
                                            <option value="India">India</option>
                                            <option value="Australia">Australia</option>
                                            <option value="Germany">Germany</option>
                                            <option value="Italy">Italy</option>
                                        </select>
                                    </p>
                                    <p class="select-for-select-image-box-below-inputs fx-city-name-1 create-rec-100-temp-p">
                                        <label for="default-select-for-no.6">&nbsp;</label>
                                            <select name="Joblocation2" id="default-select-for-no.6" class="default-select-for-add-client-1"
                                            required />
                                                <option value="Andhra Pradesh" default>Andhra Pradesh</option>
                                                <option value="Uttar Pradesh">Uttar Pradesh</option>
                                                <option value="Madhya Pradesh">Madhya Pradesh</option>
                                                <option value="Bihar">Bihar</option>
                                            </select>
                                    </p>
                                    <p class="select-for-select-image-box-below-inputs fx-city-name-1 create-rec-100-temp-p">
                                            <label for="default-select-for-no.6">&nbsp;</label>
                                                <select name="Joblocation3" id="default-select-for-no.6" class="default-select-for-add-client-1" required />
                                                    <option value="Vishakhapatnam" default>Vishakhapatnam</option>
                                                    <option value="Chennai">Chennai</option>
                                                    <option value="Coimbatore">Coimbatore</option>
                                                    <option value="Erode">Erode</option>
                                                </select>
                                    </p>
                                    <p class="input-para-add-client-ekam-1 fx-city-name-1 create-rec-100-temp-p">
                                            <label for="default-select-for-no.10">Starting time *</label>
                                            <input id="default-select-for-no.10" name="Starting_time" type="time" class="default-input-for-add-client-1" placeholder="HH:MM:SS" >
                                    </p>
                                    <p class="input-para-add-client-ekam-1 fx-city-name-1 create-rec-100-temp-p">
                                            <label for="default-select-for-no.10">Ending time *</label>
                                            <input id="default-select-for-no.10" name="Ending_time" type="time" class="default-input-for-add-client-1" placeholder="HH:MM:SS" >
                                    </p>
                                    <p class="input-para-add-client-ekam-1 fx-city-name">
                                            <label for="default-select-for-no.10">Client margin</label>
                                            <input id="default-select-for-no.10" name="Client_margin" style="color:#979797" type="text" class="default-input-for-add-client-1" placeholder="Ex. 10 implies to 10%" required />
                                    </p>
                                    <p class="input-para-add-client-ekam-1">
                                            <label for="default-select-for-no.10">Contact information for the advert *</label>
                                            <input id="default-select-for-no.10" name="Contact_information_for_the_advert" style="color: #979797;" type="text" class="default-input-for-add-client-1" placeholder="Name">
                                    </p>
                                    <p class="input-para-add-client-ekam-1 ">
                                        <label for="default-select-for-no.10"> &nbsp;</label>
                                            <input id="default-select-for-no.10" name="advert_contact_no"  style="color: #979797;" type="tel" class="default-input-for-add-client-1" placeholder="Contact number">
                                    </p>

                                </div>
                                <input type="submit" name="next" class="save_button_addClient default-button-for-recruiter-dashboard" value="save">
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
