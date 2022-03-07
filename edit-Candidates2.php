
<?php
include 'connection1.php';     //database connection page included
session_start();      //session has been started

if (isset($_POST['next'])) {


  // method to insert any files in database

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

        $td="../img/";
          $tf=$td.basename($_FILES["image"]["name"]);

          $_SESSION['image']  = basename($_FILES["image"]["name"]);

          $move= move_uploaded_file($_FILES["image"]["tmp_name"] , $tf);

          if (!($move)) {

              echo "something wrong";
          }
      }

?>
<?php include('header1.php')?>
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
                <p class="links-for-add-client-low-side-row-for-add-client active" id="link-categories-addClient-1"><a href="edit-Candidates1.php" >Personal infromation</a></p>
                <p class="links-for-add-client-low-side-row-for-add-client" id="link-categories-addClient-2"><a href="#" class="active">Professional infromation</a></p>
                <p class="links-for-add-client-low-side-row-for-add-client" id="link-categories-addClient-3"><a href="edit-Candidates3.php">Skills & Qualification</a></p>
                <p class="links-for-add-client-low-side-row-for-add-client" id="link-categories-addClient-3"><a href="edit-Candidates4.php">Additional information</a></p>
            </div>
            <div class="right-side-row-for-add-client-container-1" id="general-information-addclient-1">
            <div class="row-recruiter" style="margin-bottom: 30px;">
                <img src="./img/mortarboard.svg" width="50px" style="margin-right: 30px;">
                    <h2 class="heading-for-general-information-right-side-add-client-container">Professional information</h2>
                </div>
                 <?php



                                 $sql=mysqli_query($conn,"select * from candidates where candidate_id='".$_SESSION['cid']."'");
                                 $check=mysqli_num_rows($sql)>0;
                                 if($check){
                                     while($row=mysqli_fetch_assoc($sql)){
                        ?>
                <form action="edit-Candidates3.php" method="post">
                <div class="row-recruiter inputs-for-add-client-below-image-box">
                    <div class="right-side-image-box-right-add-client-1">
                                <div class="row-recruiter sub-divs-image-box-right-side-add-client">
                                    <p class="input-para-add-client-ekam-1 fx-city-name-1">
                                        <label for="default-input-for-no.1">Current Title*</label>
                                        <input type="text" name="currentTitle" class="default-input-for-add-client-1" placeholder="Company name" id="default-input-for-no.1" value="<?php echo $row['current_title']; ?>" required />
                                    </p>
                                    <p class="input-para-add-client-ekam-1 fx-city-name-1">
                                        <label for="default-input-for-no.1">Company Name*</label>
                                        <input type="text" name="companyName" class="default-input-for-add-client-1" placeholder="Company name" id="default-input-for-no.1" value="<?php echo $row['company_name']; ?>" required />
                                    </p>
                                    <p class="input-para-add-client-ekam-1 right-side fx-city-name-1">
                                        <label for="default-select-for-no1 ">Candidate Type*</label>
                                        <select name="candidateType" id="default-select-for-no.1" class="default-select-for-add-client-1" required />
                                            <option value="<?php echo $row['candidate_type']; ?>" default><?php echo $row['candidate_type']; ?></option>
                                            <option value="Contract">Contract</option>
                                            <option value="Temporary">Temporary</option>
                                            <option value="Permanent">Permanent</option>
                                        </select>
                                    </p>
                                    <p class="select-for-select-image-box-below-inputs fx-city-name-1">
                                        <label for="default-select-for-no.3">Employment Preference*</label>
                                            <select name="employmentPreference" id="default-select-for-no.3" class="default-select-for-add-client-1" required />
                                                <option value="<?php echo $row['emp_preference']; ?>" default><?php echo $row['emp_preference']; ?></option>
                                                <option value="Temporary to permanent">Temporary to permanent</option>
                                                <option value="Temporary">Temporary</option>
                                                <option value="Permanent">Permanent</option>
                                            </select>
                                    </p>
                                    <p class="select-for-select-image-box-below-inputs fx-city-name-1">
                                        <label for="default-select-for-no.3">Source*</label>
                                            <select name="source" id="default-select-for-no.3" class="default-select-for-add-client-1" required />
                                                <option value="<?php echo $row['source']; ?>" default><?php echo $row['source']; ?></option>
                                                <option value="Linkedin">Linkedin</option>
                                                <option value="Internshala">Internshala</option>
                                                <option value="Indeed">Indeed</option>
                                            </select>
                                    </p>
                                    <p class="select-for-select-image-box-below-inputs fx-city-name-1">
                                        <label for="default-select-for-no.3">Recruiter*</label>
                                            <select name="recruiter" id="default-select-for-no.3" class="default-select-for-add-client-1" required />
                                                <option value="<?php echo $row['recruiter']; ?>" default><?php echo $row['recruiter']; ?></option>
                                                <option value="Andrew foy">Andrew foy</option>
                                                <option value="Albert">Albert</option>
                                                <option value="Alex">Alex</option>
                                            </select>
                                    </p>

                                    <p class="input-para-add-client-ekam-1 fx-city-name-1 ">
                                        <label for="default-input-for-no.2">Current Salary*</label>
                                        <input type="text" name="currentSalary" class="default-input-for-add-client-1" placeholder="Company URL" id="default-input-for-no.2" value="<?php echo $row['current_salary']; ?>" required />
                                    </p>
                                    <span class="input-para-add-client-ekam-1 desired-salary-p">
                                        <label for="default-input-for-no.2">Desired Salary Range*</label>
                                        <span class="row-recruiter">
                                            <input type="text" name="salaryRange1" class="default-input-for-add-client-1 desired-salary" placeholder="Company URL" id="default-input-for-no.2" value="<?php echo $row['salary_range1']; ?>" required /> to
                                            <input type="text" name="salaryRange2" class="default-input-for-add-client-1 desired-salary" placeholder="Company URL" id="default-input-for-no.2" value="<?php echo $row['salary_range2']; ?>" required />
                                        </span>
                                    </span>
                                </div>
                                <input type = "submit" name = "next" class="save_button_addClient default-button-for-recruiter-dashboard" value="Save" >
                        </div>
                    </form>
                <?php } } ?>
            </div>
        </div>
    </div>
</div>
</div>
