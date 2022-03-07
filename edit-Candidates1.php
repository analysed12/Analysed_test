
<?php


   include 'connection1.php';     //database connection page included
   session_start();      //session has been started


?>
<?php include('header1.php')?>
<link rel="stylesheet" href="./css/addClient.css">
<link rel="stylesheet" href="./css/addCandidates1.css">
<link rel="stylesheet" href="./css/index1.css">
<title>Analysed</title>
<style>
#imageUpload
{
    display: none;

}

#profileImage
{
    cursor: pointer;
    border-radius: none;
}

#profile-container {
    width: 101px;
    height: 101px;
    background: #FFFFFF 0% 0% no-repeat padding-box;
    box-shadow: 0px 0px 8px #00000029;
    opacity: 1;
    overflow: hidden;
    -webkit-border-radius: 50%;
    -moz-border-radius: 50%;
    -ms-border-radius: 50%;
    -o-border-radius: 50%;
    border-radius: 50%;
    }
.background-class{
    width: 40px;
    height: 40px;
    background: #3598DB 0% 0% no-repeat padding-box;
    opacity: 1;
    border-radius: 50%;
    margin-top: -40px;
    margin-left: 75px;
    position: relative;
    border: 2px solid white;
}
.fa-camera{
    position: relative;
    color: white;
    margin-top: -27px;
    margin-left: 87px;
}
</style>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>
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
                <p class="links-for-add-client-low-side-row-for-add-client" id="link-categories-addClient-2"><a href="edit-Candidates2.php">Professional infromation</a></p>
                <p class="links-for-add-client-low-side-row-for-add-client" id="link-categories-addClient-3"><a href="edit-Candidates3.php">Skills & Qualification</a></p>
                <p class="links-for-add-client-low-side-row-for-add-client" id="link-categories-addClient-3"><a href="edit-Candidates4.php">Additional information</a></p>
            </div>
            <div class="right-side-row-for-add-client-container-1" id="general-information-addclient-1">
                <div class="row-recruiter sub-divs-image-box-right-side-add-client">
                <div class="row-recruiter" style="margin-bottom: 30px;">
                <img src="./img/user.svg" width="50px" style="margin-right: 30px;">
                    <h2 class="heading-for-general-information-right-side-add-client-container">Personal information</h2>
                </div>
                <?php

                  $_SESSION['cid']=$_GET['edit_Candidates'];
                $sql=mysqli_query($conn,"select * from candidates where candidate_id='".$_SESSION['cid']."'");
                $check=mysqli_num_rows($sql)>0;
                if($check){
                    while($row=mysqli_fetch_assoc($sql)){
                        ?>
                <form action="edit-Candidates2.php" method="post" enctype="multipart/form-data">
                    <div class="row-recruiter image-box-right-side-add-client">
                        <div class="left-side-image-box-add-client-1">
                            <div class="sub-divs-image-box-right-side-add-client">
                                <div id="profile-container">
                                    <image id="profileImage" src="img/<?php echo $row['image']; ?>" width="101px" height="101px">
                                </div>
                                    <h2 class="background-class"><i class="" aria-hidden="true"></i></h2>
                                    <p class="image-upload-e"><i class="fa fa-camera" aria-hidden="true"></i></p>
                                </label>
                                <input id="imageUpload" type="file" name="image" capture>

                            </div>
                        </div>
                    </div>
                </div>
                <div class="row-recruiter inputs-for-add-client-below-image-box">
                    <div class="right-side-image-box-right-add-client-1">
                                <div class="row-recruiter sub-divs-image-box-right-side-add-client">
                                    <p class="input-para-add-client-ekam-1 fx-city-name-1">
                                        <label for="default-input-for-no.1">First Name*</label>
                                        <input type="text" name="firstname" class="default-input-for-add-client-1" placeholder="Company name" id="default-input-for-no.1" value="<?php echo $row['firstname']; ?>" >
                                    </p>
                                    <p class="input-para-add-client-ekam-1 fx-city-name-1">
                                        <label for="default-input-for-no.1">Last Name*</label>
                                        <input type="text" name="lastname" class="default-input-for-add-client-1" placeholder="Company name" id="default-input-for-no.1"  value="<?php echo $row['lastname']; ?>" >
                                    </p>
                                    <p class="input-para-add-client-ekam-1 fx-city-name-1">
                                        <label for="default-input-for-no.1">Email-ID*</label>
                                        <input type="email" name="emailid" class="default-input-for-add-client-1" placeholder="Company name" id="default-input-for-no.1" value="<?php echo $row['candidate_email']; ?>" >
                                    </p>
                                    <div class="input-signup-div fx-city-name-1">
                                        <label for="input-first-name">Phone number</label>
                                        <div class="phn-number-div row-signup"  style="flex-wrap: nowrap;"><select name="code"><option value="+91" >+91</option></select><input type="tel" maxlength='10' name="phonenumber" placeholder="Phone number" id="input-first-name" class="phn-number--input-signup" value="<?php echo $row['phone_no']; ?>" ></div>
                                    </div>
                                    <p class="input-para-add-client-ekam-1 fx-city-name-1">
                                        <label for="default-input-for-no.1">Birth Date*</label>
                                        <input type="date" name="birthdate" class="default-input-for-add-client-1" placeholder="Company name" id="default-input-for-no.1" value="<?php echo $row['birth_date']; ?>"  >
                                    </p>
                                    <p class="select-for-select-image-box-below-inputs fx-city-name-1">
                                        <label for="default-select-for-no.3">Status</label>
                                            <select name="Industry" id="default-select-for-no.3" class="default-select-for-add-client-1">
                                                <option value="<?php echo $row['status']; ?>" default><?php echo $row['status']; ?></option>
                                                <option value="Active">Active</option>
                                                <option value="Inactive">Inactive</option>

                                            </select>
                                    </p>
                                    <p class="input-para-add-client-ekam-1 ">
                                        <label for="default-input-for-no.2">Address*</label>
                                        <input type="text" name="address" class="default-input-for-add-client-1" placeholder="Address" id="default-input-for-no.2" value="<?php echo $row['address']; ?>"  >
                                    </p>
                                    <p  class="input-para-add-client-ekam-1 fx-city-name-1">
                                        <label for="default-select-for-no.2">Country</label>
                                        <select name="ownership" id="default-select-for-no.2" class="default-select-for-add-client-1">
                                            <option value="<?php echo $row['country']; ?>"  default><?php echo $row['country']; ?></option>
                                            <option value="India">India</option>
                                            <option value="Australia">Australia</option>
                                            <option value="Germany">Germany</option>
                                        </select>
                                    </p>
                                    <p class="input-para-add-client-ekam-1  fx-city-name-1">
                                        <label for="default-select-for-no.13">City name</label>
                                        <input id="default-select-for-no.13" name="cityname" type="text" class="default-input-for-add-client-1" placeholder="Enter your city name" value="<?php echo $row['city_name']; ?>" >
                                    </p>
                                    <p class="input-para-add-client-ekam-1  fx-city-name-1">
                                            <label for="default-select-for-no.13">Zipcode</label>
                                            <input id="default-select-for-no.13" name="Zipcode" type="text" class="default-input-for-add-client-1" placeholder="Enter zipcode of city" value="<?php echo $row['zipcode']; ?>" >
                                    </p>
                                    <p class="select-for-select-image-box-below-inputs  fx-city-name-1">
                                        <label for="default-select-for-no.6">State</label>
                                            <select name="State" id="default-select-for-no.6" class="default-select-for-add-client-1">
                                                <option value="<?php echo $row['state']; ?>"  default><?php echo $row['state']; ?></option>
                                                <option value="Andhra Pradesh" default>Andhra Pradesh</option>
                                                <option value="Tamil Nadu">Tamil Nadu</option>
                                                <option value="Uttar Pradesh">Uttar Pradesh</option>
                                                <option value="Madhya Pradesh">Madhya Pradesh</option>
                                            </select>
                                    </p>
                                </div>


                                <input href="edit-Candidates2.php?edit_Candidates1=<?php echo $row['candidate_id'];?>"  type = "submit" name = "next" class="save_button_addClient default-button-for-recruiter-dashboard" value="Save" >

                        </div>
                    </form>
                <?php } } ?>
                    </div>
                </div>
            </div>
    </div>
</div>
<script>
    $("#profileImage").click(function(e) {
    $("#imageUpload").click();
});

function fasterPreview( uploader ) {
    if ( uploader.files && uploader.files[0] ){
          $('#profileImage').attr('src',
             window.URL.createObjectURL(uploader.files[0]) );
    }
}

$("#imageUpload").change(function(){
    fasterPreview( this );
});
</script>
