<!DOCTYPE html>
<html lang="en">

<head>
    <!-- Required meta tags-->
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Title Page-->
    <title>Officer Registration</title>

    <!-- Icons font CSS-->
    <link href="vendor/mdi-font/css/material-design-iconic-font.min.css" rel="stylesheet" media="all">
    <link href="vendor/font-awesome-4.7/css/font-awesome.min.css" rel="stylesheet" media="all">
    <!-- Font special for pages-->
    <link href="https://fonts.googleapis.com/css?family=Poppins:100,100i,200,200i,300,300i,400,400i,500,500i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">

    <!-- Vendor CSS-->
    <link href="vendor/select2/select2.min.css" rel="stylesheet" media="all">
    <link href="vendor/datepicker/daterangepicker.css" rel="stylesheet" media="all">

    <!-- Main CSS-->
    <link href="css/main.css" rel="stylesheet" media="all">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.5.0/css/all.css" integrity="sha384-B4dIYHKNBt8Bc12p+WXckhzcICo0wtJAoU8YZTY5qE0Id1GSseTk6S+L3BlXeVIU" crossorigin="anonymous">
</head>

<body>
    <div class="page-wrapper bg-gra-02 p-t-130 p-b-100 font-poppins">
        <div class="wrapper wrapper--w680">
            <div class="card card-4">
                <div class="card-body">
                    <h2 class="title">Company Registration</h2>
                    <?php
                            if(isset($_GET['error'])){
                                if($_GET['error'] == "emptyfields"){
                                    echo '<p style="color:red";>Fill in all fields</p>';
                                }elseif($_GET["error"] == "invalidmailname"){
                                    echo '<p style="color:red";>Invalid name and E-mail</p>';
                                }elseif($_GET["error"] == "invalidname"){
                                    echo '<p style="color:red";>Invalid name</p>';
                                }elseif($_GET["error"] == "invalidmail"){
                                    echo '<p style="color:red";>Invalid E-mail</p>';
                                }elseif($_GET["error"] == "passwordcheck"){
                                    echo '<p style="color:red";>Your password do not match</p>';
                                }elseif($_GET["error"] == "emailtaken"){
                                    echo '<p style="color:red";>Email is already taken</p>';
                                }

                            }
                            elseif(isset($_GET['signup'])){
                                if($_GET["signup"] == "success"){
                                    echo  '<p style="color:green";>Signup Successfully</p>';
                                }
                            }
                        ?>
                    <form action="../../includes/signupofficer.inc.php" method="POST">
                                <div class="input-group">
                                    <label class="label">Company Name</label>
                                    <input class="input--style-4" type="text" name="name">
                                </div>
                        <div class="row row-space">
                            <div class="col-2">
                                <div class="input-group">
                                    <label class="label">Company Founded:</label>
                                    <div class="input-group-icon">
                                        <input class="input--style-4 js-datepicker" type="text" name="companydate">
                                        <i class="zmdi zmdi-calendar-note input-icon js-btn-calendar"></i>
                                    </div>
                                </div>
                            </div>
                            <div class="col-2">
                                <div class="input-group">
                                    <label class="label">MCA Registered Company?</label>
                                    <div class="p-t-10">
                                        <label class="radio-container m-r-45">Yes
                                            <input type="radio" checked="checked" name="recruit" value="yes">
                                            <span class="checkmark"></span>
                                        </label>
                                        <label class="radio-container">No
                                            <input type="radio" name="recruit" value="no">
                                            <span class="checkmark"></span>
                                        </label>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="row row-space">
                            <div class="col-2">
                                <div class="input-group">
                                    <label class="label">Company Email</label>
                                    <input class="input--style-4" type="email" name="email">
                                </div>
                            </div>
                            <div class="col-2">
                                <div class="input-group">
                                    <label class="label">Phone Number</label>
                                    <input class="input--style-4" type="number" name="phone">
                                </div>
                            </div>
                        </div>
                        <div class="input-group">
                            <label class="label">Type of Company</label>
                            <div class="rs-select2 js-select-simple select--no-search">
                                <select name="subject">
                                    <option disabled="disabled" selected="selected">Choose option</option>
                                    <option>Internship Recruitment</option>
                                    <option>Industrial Visit Management Corp.</option>
                                    <option>Professional Company</option>
                                    <option>Service Corporation Company</option>
                                </select>
                                <div class="select-dropdown"></div>
                            </div>
                        </div>
                        <div class="input-group">
                                    <label class="label">GST Authorisation Key</label>
                                    <input class="input--style-4" type="text" name="key">
                        </div>
                        <div class="input-group">
                                    <label class="label">Password</label>
                                    <input class="input--style-4" type="password" name="pwd">
                        </div>
                        <div class="input-group">
                                    <label class="label">Confirm Password</label>
                                    <input class="input--style-4" type="password" name="pwd-repeat">
                        </div>
                        <div class="p-t-15">
                            <button class="btn btn--radius-2 btn--blue" name="signup-submit"type="submit">Submit</button>
                        </div>
                    </form>
                </div>
                <section style="text-align:center;">
                    <a href="../../index-officer.php" style="cursor:pointer;text-decoration: none;color:black;">Back to Home&nbsp;<i class="fas fa-home"></i></a>    
                </section>
                <footer>
                 <p style="text-align: center;color:#888;">Zocial Private Corp. &copy;<script>document.write(new Date().getFullYear());</script> All rights reserved</p>   
                </footer>
            </div>
        </div>
    </div>

    <!-- Jquery JS-->
    <script src="vendor/jquery/jquery.min.js"></script>
    <!-- Vendor JS-->
    <script src="vendor/select2/select2.min.js"></script>
    <script src="vendor/datepicker/moment.min.js"></script>
    <script src="vendor/datepicker/daterangepicker.js"></script>

    <!-- Main JS-->
    <script src="js/global.js"></script>

</body><!-- This templates was made by Colorlib (https://colorlib.com) -->

</html>
<!-- end document-->