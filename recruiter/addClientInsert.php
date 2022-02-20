<?php
include 'connection1.php';              //database connection page included
session_start();                 //session has been started



if (isset($_POST['submit']))
 {
    $_SESSION['bank_name']  = $_POST['bank_name'];
    $_SESSION['bank_id']   = $_POST['bank_id'];
    $_SESSION['bank_acc_no'] = $_POST['bank_acc_no'];
    $_SESSION['iban'] = $_POST['iban'];
    $_SESSION['vat']   = $_POST['vat'];



            // query to insert all the dta in database
            $qr1 = 'insert into client(image,company_name,status,company,ownership,industry,source,parent_company,active_contact,company_desc,permanent_fee,contract_fee,main_email,contact_no,address,city,zipcode,state,country,bank_name,bank_id,bank_acc_no,iban,vat,added_On)values("'.$_SESSION['image'].'","'.$_SESSION['company_name'].'",
            "'.$_SESSION['status'].'",
            "'.$_SESSION['company'].'",
            "'.$_SESSION['ownership'].'",
            "'.$_SESSION['industry'].'",
            "'.$_SESSION['source'].'",
            "'.$_SESSION['parent_company'].'",
            "'.$_SESSION['active_contact'].'",
            "'.$_SESSION['company_desc'].'",
            "'.$_SESSION['permanent_fee'].'",
            "'.$_SESSION['contract_fee'].'",
            "'.$_SESSION['main_email'].'",
            "'.$_SESSION['contact_no'].'",
            "'.$_SESSION['address'].'",
            "'.$_SESSION['city'].'",
            "'.$_SESSION['zipcode'].'",
            "'.$_SESSION['state'].'",
            "'.$_SESSION['country'].'",
            "'.$_SESSION['bank_name'].'",
            "'.$_SESSION['bank_id'].'",
            "'.$_SESSION['bank_acc_no'].'",
            "'.$_SESSION['iban'].'",
            "'.$_SESSION['vat'].'",NOW())';
            $res = mysqli_query($con,$qr1);     // to check wether query has worked or not
            if ($res) {

                // if query has worked properly it will redirect to following page
                echo " <script>window.open('addclient.php','_self')</script>";
            }
}
?>
