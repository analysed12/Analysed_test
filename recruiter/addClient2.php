<?php
include 'connection1.php';              //database connection page included
session_start();                 //session has been started




// posting all data from personal information page to global variables using $_Session[''
$_SESSION['main_email']  = $_POST['main_email'];
$_SESSION['contact_no']   = $_POST['contact_no'];
$_SESSION['address']    = $_POST['address'];
$_SESSION['city'] = $_POST['city'];
$_SESSION['zipcode']   = $_POST['zipcode'];
$_SESSION['state']   = $_POST['state'];
$_SESSION['country']    = $_POST['country'];

?>

<?php include('header.php')?>
<link rel="stylesheet" href="./css/addClient.css">
<title>Analysed</title>
  <form action="addClientInsert.php" method="post" enctype="multipart/form-data">  <!-- redirecting to insert query page with data of Billing information -->
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
                <p class="links-for-add-client-low-side-row-for-add-client" id="link-categories-addClient-2"><a href="addClient1.php" >Contact info</a></p>
                <p class="links-for-add-client-low-side-row-for-add-client" id="link-categories-addClient-3"><a href="addClient2.php" class="active">Billing info</a></p>
            </div>

            <div class="right-side-row-for-add-client-container-1" id="billing-info-addclient-1">
                <h2 class="heading-for-general-information-right-side-add-client-container-2"><i class="fa fa-money" aria-hidden="true"></i> Billing information</h2>
                <div class="row-recruiter inputs-for-add-client-below-image-box">
                    <p class="input-para-add-client-ekam-1 fx-city-name-1">
                            <label for="default-select-for-no.101">Bank name</label>
                            <input id="default-select-for-no.101" name="bank_name" type="text" class="default-input-for-add-client-1"placeholder="Enter your bank name" required />
                        </p>
                        <p class="input-para-add-client-ekam-1 fx-city-name-1">
                            <label for="default-select-for-no.102">Bank ID</label>
                            <input id="default-select-for-no.102"  name="bank_id" type="tel" class="default-input-for-add-client-1" placeholder="Enter bank ID" required />
                    </p>
                    <p class="input-para-add-client-ekam-1  fx-city-name-1">
                            <label for="default-select-for-no.105">Bank account number</label>
                            <input id="default-select-for-no.105" name="bank_acc_no" type="text" class="default-input-for-add-client-1" placeholder="Enter your bank account number" required />
                    </p>
                    <p class="input-para-add-client-ekam-1">
                            <label for="default-select-for-no.103">IBAN #</label>
                            <input id="default-select-for-no.103" name="iban" type="text" class="default-input-for-add-client-1" placeholder="Enter IBAN #" required />
                    </p>
                    <p class="input-para-add-client-ekam-1">
                            <label for="default-select-for-no.104">VAT #</label>
                            <input id="default-select-for-no.104" name="vat"  type="text" class="default-input-for-add-client-1" placeholder="Enter IBAN #" required />
                    </p>
                    <input type = "submit" name="submit" class="save_button_addClient default-button-for-recruiter-dashboard" value="Submit" >
                </div>
            </div>

        </div>
    </div>
    </div>
</div>
      </form>
