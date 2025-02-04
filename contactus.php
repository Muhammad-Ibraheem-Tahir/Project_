<?php 
require "INC/db_connection.php";
// function after connection
require "INC/function.php";

// Check if the form was submitted
if (isset($_POST["button_save"] )) {
    // Get the form data and sanitize it
    $email = $_POST['email'];
    $subject = $_POST['subject'];
    $message = $_POST['message'];   
    send_message($email,$subject,$message);
}

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- Title written here -->
    <title>Contact-Us</title>
    <!-- linked personal css here -->
    <link rel="stylesheet" href="CSS/styles.css">
    <!-- linked boot-straps css hrere -->
    <link rel="stylesheet" href="CSS/bs.css">
    <!-- fav-icon goes here -->
    <link rel="shortcut icon" href="IMAGES/contact-us.png" type="image/x-icon">
</head>

<body>
    <!-- Nav bar is here -->
    <nav class="navbar navbar-expand-lg bg-body-tertiary fixed-top">
        <div class="container-fluid">
            <h2 class="mr-3"><span class="cricket_nav">Cri</span>cket</h2>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false"
                aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                    <li class="nav-item nav-hov">
                        <a class="nav-link" aria-current="page" href="index.html">Home</a>
                    </li>
                    <li class="nav-item nav-hov">
                        <a class="nav-link" aria-current="page" href="pages.html">Pages</a>
                    </li>
                    <li class="nav-item nav-hov">
                        <a class="nav-link" aria-current="page" href="blogs.html">Blogs</a>
                    </li>
                    <li class="nav-item active-class-nav nav-hov">
                        <a class="nav-link" aria-current="page" href="contactus.php">Contact-Us</a>
                    </li>
                </ul>
                <!-- <form class="d-flex" role="search">
                    <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
                    <button class="btn btn-outline-danger" type="submit">Search</button>
                </form> -->
            </div>
        </div>
    </nav>
    <!-- body form here -->
    <br><br><br><br><br>
    <div class="d-flex justify-content-center">
        <div class="popup">
            <form class="form" method="POST">
                <!-- The rest of your form fields -->
                <label for="email">Email</label>
                <input placeholder="Your email..." title="Enter your e-mail" name="email" type="email" id="email"
                    class="input_field" required="required">
                <label for="subject">Subject</label>
                <input placeholder="Subject(Optional)..." name="subject" type="text" id="subject" class="input_field">
                <label for="messge">Message</label>
                <textarea placeholder="Your message..." id="message" class="input_field" required="required"
                    name="message" style="padding: 7px;"></textarea>
                <button class="submit button-per" type="submit" name="button_save">Submit</button>
            </form>
        </div>
    </div>
    <br><br>
    <!-- footer goes here -->
    <div class="card text-center">
        <div class="card-header">
            <h2><span class="cricket_nav">Cri</span>cket</h2>
        </div>
        <div class="card-body">
            <h5 class="card-title">2024 © <span class="cricket_nav">Cri</span>cket. All Rights Reserved. Passion for the
                game, delivered to your screen.</h5>
        </div>
        <div class="card-footer text-body-secondary">
            <!-- paging goes here -->
            <div class="d-flex justify-content-center">
                <nav aria-label="Page navigation example">
                    <ul class="pagination">
                        <li class="page-item">
                            <a class="page-link text-danger bg-danger-subtle" href="blogs.html" aria-label="Previous">
                                <span aria-hidden="true">&laquo;</span>
                            </a>
                        </li>
                        <li class="page-item"><a class="page-link text-danger" href="index.html">1</a></li>
                        <li class="page-item"><a class="page-link text-danger" href="pages.html">2</a></li>
                        <li class="page-item"><a class="page-link text-danger" href="blogs.html">3</a></li>
                        <li class="page-item"><a class="page-link text-danger bg-danger-subtle"
                                href="contactus.php">4</a>
                        </li>
                        <li class="page-item">
                            <a class="page-link text-danger" href="#" aria-label="Next">
                                <span aria-hidden="true">&raquo;</span>
                            </a>
                        </li>
                    </ul>
                </nav>
            </div>
        </div>
    </div>
    <!-- Boot-straps js script here -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz"
        crossorigin="anonymous"></script>
</body>

</html>