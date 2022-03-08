<?php include('include/header.php')?>

<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.js"></script>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-star-rating/4.0.2/css/star-rating.min.css" />
<script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-star-rating/4.0.2/js/star-rating.min.js"></script>
<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.2/css/all.css">
<!-- Google Fonts -->
<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700&display=swap">
<!-- Bootstrap core CSS -->
<link href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.5.0/css/bootstrap.min.css" rel="stylesheet">
<!-- Material Design Bootstrap -->
<link href="https://cdnjs.cloudflare.com/ajax/libs/mdbootstrap/4.19.1/css/mdb.min.css" rel="stylesheet">

<!-- JQuery -->
<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<!-- Bootstrap tooltips -->
<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.4/umd/popper.min.js"></script>
<!-- Bootstrap core JavaScript -->
<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.5.0/js/bootstrap.min.js"></script>
<!-- MDB core JavaScript -->
<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/mdbootstrap/4.19.1/js/mdb.min.js"></script>


<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
<link rel="stylesheet" href="css/js_nearby_job.css">
<!-- <link rel="stylesheet" href="./css/js_more_jobs.css"> -->
<body>
    
    <br>
    <div class="bread-crumbs_Mytools-recruiter">
     <a href="" class="active-breadcrumb-link">&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;<u>Dashboard</u> </a><span style="color:#3598DB"> > </span> 
     <a href="" class="active-breadcrumb-link"><u> Nearby_Jobs </u></a>
    </div>
    <br><br>
    <div class="main_body">
       <div class="container">
         <p class="a1">Nearby Jobs <img src="./img/js_near1.png" height="40" weight="40"></p>
         <div class="row">
            <div class="col-2">               
                    <label id="b1" >Sort by:&emsp;<a href="/" class="active-breadcrumb-link">Recent</a> </label>
            </div>
            <div class="col-3">
                    <label id="b2">Applicants: Low to High <img src="./img/dropdown.png" height="10" weight="15"></label>
            </div>
            </div>
            <br>
       
        <div class="row">
            <div class="col-9">
                <div class="row">
                    <div class="col-4 mb-3">
                            <div class="card" style="height:330px;width:250px" id="temp2">
                            <div class="icons">
                                <img src="img/share-icon.png" height="27" width="29">&emsp;
                                <img src="img/star-icon.png" height="27" width="29">
                            </div>
                            <div class="row" style="margin-left:10px;">
                                <div class="col-3"><img src="img/Airbnb-logo.png" height="55" width="55"/></div>
                                <div class="col-9">
                                <br><span style="line-height:1 ;" id="b4">AirBnB</span><br>
                                <span id="b5"> London,UK</span>
                                </div>
                            </div><br>
                            <div class="designation" style="margin-left:20px;">
                                FRONTEND DEVELOPER
                            </div>
                            <div style="margin-left:20px;">
                                <progress value="2" max="20" id="prog" ></progress>
                                <span class="days"> 2 days left</span >
                            </div><br>
                            <div class="skills" style="margin-left:20px;">
                                <p style="font-size:13px;line-height:2px ;"> <i>CSS, HTML, UI, Frontend</i></p>
                            </div>
                            <div style="margin-left:20px;">
                            <p style="font-size:13px ;color :#0F9D58"><img src="./img/locat-icon.png" height="11" weight="15"> Appt no 23, road name, Area na..</p>
                        </div>
                        <br> 
                            <div class="last_job_content" style="margin-left:20px;">
                                <p id="first">Full Time</p>
                                <a href="#" id="second">Apply Now</a>
                            </div>
                    </div>

                    </div>
                    <div class="col-4 mb-3">
                                <div class="card" style="height:330px;width:250px" id="temp2">
                                <div class="icons">
                                    <img src="img/share-icon.png" height="27" width="29">&emsp;
                                    <img src="img/star-icon.png" height="27" width="29">
                                </div>
                                <div class="row" style="margin-left:10px;">
                                    <div class="col-3"><img src="img/Netflix-logo.png" height="55" width="55"/></div>
                                    <div class="col-9">
                                    <br><span style="line-height:1 ;" id="b4">Netflic Inc</span><br>
                                    <span id="b5"> New York, NY</span>
                                    </div>
                                </div><br>
                                <div class="designation" style="margin-left:20px;">
                                UX/DESIGNER
                                </div>
                                <div style="margin-left:20px;">
                                    <progress value="5" max="20" ></progress>
                                    <span class="days"> 5 days left</span >
                                </div><br>
                                <div class="skills" style="margin-left:20px;">
                                    <p style="font-size:13px;line-height:2px ;"> <i>Wireframe, Sketch, Prototyping...</i></p>
                                </div>
                                <div style="margin-left:20px;">
                                <p style="font-size:13px ;color :#0F9D58"><img src="./img/locat-icon.png" height="11" weight="15"> Appt no 23, road name, Area na..</p>
                            </div>
                            <br>
                                <div class="last_job_content" style="margin-left:20px;">
                                    <p id="first">Part Time</p>
                                    <a href="#" id="second">Apply Now</a>
                                </div>
                            </div>
                    </div>
                    <div class="col-4 mb-3">
                            <div class="card" style="height:330px;width:250px" id="temp2">
                            <div class="icons">
                                <img src="img/share-icon.png" height="27" width="29">&emsp;
                                <img src="img/star-icon.png" height="27" width="29">
                            </div>
                            <div class="row" style="margin-left:10px;">
                                <div class="col-3"><img src="img/Uber-logo.png" height="55" width="55"/></div>
                                <div class="col-9">
                                <br><span style="line-height:1 ;" id="b4">Uber</span><br>
                                <span id="b5"> Portland, OG</span>
                                </div>
                            </div><br>
                            <div class="designation" style="margin-left:20px;">
                            PRODUCT OWNER
                            </div>
                            <div style="margin-left:20px;">
                                <progress value="20" max="20" ></progress>
                                <span class="days"> 20 days left</span >
                            </div><br>
                            <div class="skills" style="margin-left:20px;">
                                <p style="font-size:13px;line-height:2px ;"> <i>Analysis, CRM, Data validation...</i></p>
                            </div>
                            <div style="margin-left:20px;">
                            <p style="font-size:13px ;color :#0F9D58"><img src="./img/locat-icon.png" height="11" weight="15"> Appt no 23, road name, Area na..</p>
                        </div>
                        <br>
                            <div class="last_job_content" style="margin-left:20px;">
                                <p id="first">Full Time</p>
                                <a href="#" id="second">Apply Now</a>
                            </div>
                        </div>
                    
                    </div>
                </div>

                <div class="row">
                    <div class="col-4 mb-3">
                                <div class="card" style="height:330px;width:250px" id="temp2">
                                <div class="icons">
                                    <img src="img/share-icon.png" height="27" width="29">&emsp;
                                    <img src="img/star-icon.png" height="27" width="29">
                                </div>
                                <div class="row" style="margin-left:10px;">
                                    <div class="col-3"><img src="img/Group 2906.png" height="55" width="55"/></div>
                                    <div class="col-9">
                                    <br><span style="line-height:1 ;" id="b4">Lime</span><br>
                                    <span id="b5"> Oakland, CA</span>
                                    </div>
                                </div><br>
                                <div class="designation" style="margin-left:20px;">
                                PRODUCT DESIGNER
                                </div>
                                <div style="margin-left:20px;">
                                    <progress value="12" max="20" ></progress>
                                    <span class="days"> 12 days left</span >
                                </div><br>
                                <div class="skills" style="margin-left:20px;">
                                    <p style="font-size:13px;line-height:2px ;"> <i>UX, UI, Design, CSS</i></p>
                                </div>
                                <div style="margin-left:20px;">
                                <p style="font-size:13px ;color :#0F9D58"><img src="./img/locat-icon.png" height="11" weight="15"> Appt no 23, road name, Area na..</p>
                            </div>
                            <br>
                                <div class="last_job_content" style="margin-left:20px;">
                                    <p id="first">Full Time</p>
                                    <a href="#" id="second">Apply Now</a>
                                </div>
                            </div>

                    </div>
                    <div class="col-4 mb-3">
                            <div class="card" style="height:330px;width:250px" id="temp2">
                            <div class="icons">
                                <img src="img/share-icon.png" height="27" width="29">&emsp;
                                <img src="img/star-icon.png" height="27" width="29">
                            </div>
                            <div class="row" style="margin-left:10px;">
                                <div class="col-3"><img src="img/Group 2908.png" height="55" width="55"/></div>
                                <div class="col-9">
                                <br><span style="line-height:1 ;" id="b4">Nike</span><br>
                                <span id="b5"> Mephis, TN</span>
                                </div>
                            </div><br>
                            <div class="designation" style="margin-left:20px;">
                            BUSSINESS ANALYSIST
                            </div>
                            <div style="margin-left:20px;">
                                <progress value="16" max="20" ></progress>
                                <span class="days"> 16 days left</span >
                            </div><br>
                            <div class="skills" style="margin-left:20px;">
                                <p style="font-size:13px;line-height:2px ;"> <i>Data Visualisation, MS Office...</i></p>
                            </div>
                            <div style="margin-left:20px;">
                            <p style="font-size:13px ;color :#0F9D58"><img src="./img/locat-icon.png" height="11" weight="15"> Appt no 23, road name, Area na..</p>
                        </div>
                        <br>
                            <div class="last_job_content" style="margin-left:20px;">
                                <p id="first">Full Time</p>
                                <a href="#" id="second">Apply Now</a>
                            </div>
                        </div>

                    </div>
                    <div class="col-4 mb-3">
                            <div class="card" style="height:330px;width:250px" id="temp2">
                            <div class="icons">
                                <img src="img/share-icon.png" height="27" width="29">&emsp;
                                <img src="img/star-icon.png" height="27" width="29">
                            </div>
                            <div class="row" style="margin-left:10px;">
                                <div class="col-3"><img src="img/Group 2907.png" height="55" width="55"/></div>
                                <div class="col-9">
                                <br><span style="line-height:1 ;" id="b4">Intel</span><br>
                                <span id="b5"> Philadelphia, PA</span>
                                </div>
                            </div><br>
                            <div class="designation" style="margin-left:20px;">
                            SR. DESIGNER
                            </div>
                            <div style="margin-left:20px;">
                                <progress value="3" max="20" ></progress>
                                <span class="days"> 3 days left</span >
                            </div><br>
                            <div class="skills" style="margin-left:20px;">
                                <p style="font-size:13px;line-height:2px ;"> <i>CSS, HTML, UI, FrontEnd</i></p>
                            </div>
                            <div style="margin-left:20px;">
                            <p style="font-size:13px ;color :#0F9D58"><img src="./img/locat-icon.png" height="11" weight="15"> Appt no 23, road name, Area na..</p>
                        </div>
                        <br>
                            <div class="last_job_content" style="margin-left:20px;">
                                <p id="first">Full Time</p>
                                <a href="#" id="second">Apply Now</a>
                            </div>
                        </div>

                    </div>
                </div>
                    
            </div>

            <div class="col-3 mb-4">
                    <p id="f1">Filters <img src="img/filter_list-24px.svg" height="20" width="20"  /> <br><br>Location
                        <br><input type="text" placeholder=" &emsp;Type Location" class="loc"><br><br>
                        Pay type salary<br>
                        <div class="sal2">
                            <input type="text" style="float: left; " placeholder=" &emsp;Min" class="f2" >
                            <input type="text" style="float:right;" placeholder="&emsp; Max" class="f3" ></p>                            
                        </div>
                        <p id="f1" style="margin-top:20px">Industry</p>
                        <select title="Status" class="sel">
                        <option disabled selected>&emsp;  Choose Industry</option>
                        <option>Open</option>
                        <option>Closed</option>
                        </select><br><br>
                        <p id="f1">Job Type</h4>
                        <br>
                        <div class="radio-options" id="b3">
                        <input type="radio" value="1" name="jobtype"> Part-time
                        <br><br>
                        <input type="radio" value="2" name="jobtype"> Full-time
                        <br><br>
                        <input type="radio" value="3" name="jobtype"> Internship
                        </div>
                        <br>
                        <div id="f1">
                        Add Skills +
                        </div><br>
                        <div class="chip">
                        PHP <span class="close">&nbsp;&times;</span>
                        </div>
                        <div class="chip">
                        MySQL<span class="close">&nbsp;&times;</span>
                        </div>

            </div>
         </div>
         <!--end of row -->
         
     </div> 

    </div>
</body>