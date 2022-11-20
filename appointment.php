<?php
$title = "Appointment";
include "./include/header/header.php";
?>
<!doctype html>
<html lang="en">

<!-- Mirrored from www.webfulcreations.com/html-templates/dermatology/appointment.php by HTTrack Website Copier/3.x [XR&CO'2014], Sun, 14 Aug 2022 16:39:41 GMT -->

<head>

    <meta charset="utf-8" />
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Dermatologist Website Template</title>
    <meta name="author" content="Webful Creations">
    <meta name="keywords" content="">
    <meta name="description" content="">

    <link rel="shortcut icon" type="image/x-icon" href="assets/images/favicon.png">

    <meta name="viewport" content="width=device-width, initial-scale=1">

    <link rel="stylesheet" type="text/css" href="style.css" media="all" />
</head>

<body>
    <div class="main-container">
       

        <div class="title-section dark-bg">
            <div class="grid-container grid-x grid-padding-x">
                <div class="small-12 cell">
                    <h1>Appointment Page</h1>
                </div>
                <div class="small-12 cell">
                    <ul class="breadcrumbs">
                        <li><a href="#">Home</a></li>
                        <li class="disabled">Gene Splicing</li>
                        <li><span class="show-for-sr">Current: </span> Cloning</li>
                    </ul>
                </div>
            </div>
        </div>

        <div class="appointment-page form-section dark-bg grey-bg">
            <div class="grid-container grid-x grid-padding-x">
                <div class="large-8 medium-offset-2 large-offset-2 medium-8 small-12 cell">
                    <div class="form">
                        <h2>Contact Us</h2>
                        <p>Want to book an appointment with us? Fill up the form below to get appointment.</p>
                        <div class="appointment-form">
                            <form action="https://www.webfulcreations.com/html-templates/dermatology/email_processor.php" method="post">
                                <div class="grid-container grid-x grid-padding-x">
                                    <div class="medium-6 small-12 cell">
                                        <label>
                                            Your Full Name *
                                            <input type="text" name="your_name" placeholder="Name">
                                        </label>
                                    </div>
                                    <div class="medium-6 small-12 cell">
                                        <label>
                                            Your Phone# *
                                            <input type="text" name="your_phone" placeholder="Phone">
                                        </label>
                                    </div>
                                    <div class="medium-6 small-12 cell">
                                        <label>
                                            Your Email *
                                            <input type="text" name="your_email" placeholder="Email">
                                        </label>
                                    </div>
                                    <div class="medium-6 small-12 cell">
                                        <label>
                                            Preffered Date *
                                            <input type="text" name="your_date" placeholder="">
                                        </label>
                                    </div>
                                    <div class="medium-12 cell">
                                        <label>
                                            Select dpcktor
                                            <select name="select_doctor">
                                                <option value="Anyone">Select Gardener</option>
                                                <option value="dr john">Vet 1</option>
                                                <option value="dr vale">Vet 2</option>
                                            </select>
                                        </label>
                                    </div>
                                    <div class="medium-12 cell">
                                        <label>
                                            Select Service
                                            <select name="select_service">
                                                <option value="service empty">Select Service</option>
                                                <option value="Service first">Service 1</option>
                                                <option value="service two">Service 2</option>
                                            </select>
                                        </label>
                                    </div>
                                    <div class="medium-12 cell">
                                        <label>
                                            Your message
                                            <textarea name="your_message" placeholder="Your message" rows="4"></textarea>
                                        </label>
                                    </div>
                                    <div class="medium-12 cell">
                                        <input type="hidden" name="appointment_form" value="YES" />
                                        <button class="primary button" type="submit">Send Form!</button>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                    <div class="clearfix"></div>
                </div>
            </div>
        </div>

       
    </div>


  

    <div class="preloader">
        <div class="spinner">
            <div class="double-bounce1"></div>
            <div class="double-bounce2"></div>
        </div>
    </div>

   
</body>

<!-- Mirrored from www.webfulcreations.com/html-templates/dermatology/appointment.php by HTTrack Website Copier/3.x [XR&CO'2014], Sun, 14 Aug 2022 16:39:41 GMT -->

</html>
<?php
include "./include/footer/footer.php";
?>
