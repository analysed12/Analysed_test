


<?php

   include 'connection1.php';
   session_start();
?>

<?php include('header.php')?>



<link rel="stylesheet" href="./css/aboutOrganization.css">
<title>Analysed</title>
<div class="container">
    <div class="small_container">
        <div class="heading_dash">
            <h1 class="mainHeadingDash">About organization</h1>
            <p class="mainParaDash">Edit information about your organization</p>
        </div>
        <?php
                $or_id='O101';
                $sql="select * from about_org where abt_us_id='101'";
                $res=mysqli_query($conn,$sql);
                if($res == TRUE)
                {
                  $count=mysqli_num_rows($res);
                  if($count >0)
                  {
                    while($rows=mysqli_fetch_assoc($res))
                    {
                      $name=$rows['org_name'];
                      $image_task=$rows['logo'];
                      $about_us=$rows['about_us'];
                      $industry=$rows['industry'];
                      $location=$rows['org_location'];
                      $address=$rows['org_address'];
                      $rec_name=$rows['org_rec_name'];
                      $mail=$rows['org_email'];
                      $phone=$rows['org_phone'];
                      $lin=$rows['linkeln_link'];
                      $twi=$rows['twitter_link'];
                      $insta=$rows['insta_link'];
                      $face=$rows['facebook_link'];
              ?>
        <div class="organization-main-container-recruiter">
            <button class="see-all-jobs-ekam0-recruiter-organization">See all jobs</button>
            <div class="absolute-center-div-image-recruiter-organization">
            <?php echo '<img src="data:image;base64,'.base64_encode($image_task).' "  style="width: 120px; height: 120px;" >' ;   ?>
                <h2><?php echo $name; ?></h2>
                <p><?php echo $location; ?></p>
            </div>
            <div class="row-recruiter organization-details-recruiter-ekam">
                <div class="single-organization-details-ekam-recruiter">
                    <p><i class="fa fa-envelope" aria-hidden="true"></i> <?php echo $mail; ?></p>
                    <p><i class="fa fa-phone" aria-hidden="true"></i> <?php echo $phone; ?></p>
                </div>
                <div class="single-organization-details-ekam-recruiter">
                    <p><i class="fa fa-user" aria-hidden="true"></i> <?php echo $rec_name; ?></p>
                    <p> <i class="fa fa-address-book" aria-hidden="true"></i><?php echo $address; ?>
                    </p>
                </div>
            </div>
        </div>
        <div class="row-recruiter about-us-organization-container-recruiter">
            <div class="left-side-about-us-organization-container-recruiter">
                <a class="pencil-for-editing-about-us-organization" href="#"><i class="fa fa-pencil" aria-hidden="true"></i></a>
                <div class="about-us-para-1-left-side-about-us-organization-container-recruiter">
                    <h2>About us</h2>
                    <p><?php echo $about_us; ?></p>
                </div>
                <div class="about-us-para-2-left-side-about-us-organization-container-recruiter">
                    <h2>Industry</h2>
                    <p><?php echo $industry; ?></p>
                </div>
            </div>
            <div class="right-side-about-us-organization-container-recruiter">
            <div class="pie-chart-info-right-side-about-us-organization">
                <figure class="pie-chart">
                </figure>
                <div class="row-recruiter languages-info-after-pie-chart-right-side-about-us">
                    <p><span></span>Language 1</p>
                    <p><span></span>Language 2</p>
                    <p><span></span>Language 3</p>
                    <p><span></span>Language 4</p>
                    <p><span></span>Language 5</p>
                    <p><span></span>Language 6</p>
                </div>
            </div>
            <div class="social-links-info-after-pie-chart-right-side-about-us">
                    <p>Social links</p>
                <div class="row-recruiter social-signs-recruiter-organization-ekam-last">
                    <a href="<?php echo $lin; ?>" class="social-linl-single-after-pie-chart-right-side-about-us"><i class="fa fa-linkedin-square" aria-hidden="true" style="color:#0070ac"></i></a>
                    <a href="<?php echo $twi; ?>" class="social-linl-single-after-pie-chart-right-side-about-us"><i class="fa fa-twitter" aria-hidden="true" style="color:#1c9ceb"></i></a>
                    <a href="<?php echo $insta; ?>" class="social-linl-single-after-pie-chart-right-side-about-us"><i class="fa fa-instagram" aria-hidden="true" style="color:#fd425f"></i></a>
                    <a href="<?php echo $face; ?>" class="social-linl-single-after-pie-chart-right-side-about-us"><i class="fa fa-facebook" aria-hidden="true" style="color:#4267b2"></i></a>
                </div>
            </div>
            </div>
        </div>
        <?php
                      }
                    }
                  }

                ?>
