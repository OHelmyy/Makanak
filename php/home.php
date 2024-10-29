<?php
// You can use PHP here for session handling, database connections, or to handle form submissions, etc.
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>MKANAK Real-Estate Website</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" crossorigin="anonymous">
    <link rel="stylesheet" href="FindPage.css">
</head>
<body>


<?php require_once 'includes/header.php'; 
?>

<div id="carouselExampleCaptions" class="carousel slide" data-bs-ride="carousel">
    <div class="carousel-indicators">
        <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
        <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="1" aria-label="Slide 2"></button>
        <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="2" aria-label="Slide 3"></button>
    </div>
    <div class="carousel-inner">
        <div class="carousel-item active">
            <img src="images/download.jpg" class="d-block w-100" alt="...">
            <div class="carousel-caption d-none d-md-block">
                <h5>Find every home here</h5>
                <form class="d-flex">
                    <input class="form-control me-2" type="search" placeholder="City, Community or Building" aria-label="Search">
                    <button class="btn success">Search</button>
                </form>
            </div>
        </div>
        <!-- Other carousel items can follow in a similar way -->
    </div>
    <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="prev">
        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Previous</span>
    </button>
    <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="next">
        <span class="carousel-control-next-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Next</span>
    </button>
</div>

<section class="services section-padding" id="services">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="section-header text-center pb-5">
                    <h2>Our Services</h2>
                </div>
            </div>
        </div>
        <div class="row">
            <?php
            // Reusable service card function
            function serviceCard($title) {
                echo <<<CARD
                <div class="col-lg-4 col-md-12">
                    <div class="card text-black text-center bg-light pb-2">
                        <div class="card-body">
                            <h3 class="card-title">$title</h3>
                            <button class="btn success">Read more</button>
                        </div>
                    </div>
                </div>
CARD;
            }
            serviceCard("Best Quality");
            serviceCard("Sustainability");
            serviceCard("Best prices");
            ?>
        </div>
    </div>
</section>

<section class="list">
    <h5>Looking to advertise a property? We can help.</h5>
    <a href="RegisterNow.php">
    <button class="btn success">List your property with us</button>
</a>


</section>

<section class="contact section-padding" id="contact">
    <div class="container mt-5 mb-5">
        <div class="section-header text-center pb-5">
            <h2>Contact Us</h2>
        </div>
        <div class="container">
            <form action="database.php" method="POST">
                <label for="fname">First Name</label>
                <input type="text" id="fname" name="firstname" placeholder="Your name.." required>

                <label for="lname">Last Name</label>
                <input type="text" id="lname" name="lastname" placeholder="Your last name.." required>

                <label for="country">Country</label>
                <select id="country" name="country">
                    <option value="egypt">Egypt</option>
                </select>

                <label for="subject">Subject</label>
                <textarea id="subject" name="subject" placeholder="Write something.." style="height:200px" required></textarea>

                <button class="btn success" type="submit">Submit</button>
            </form>
        </div>
    </div>
</section>

<?php
// Footer section
function footer() {
    echo <<<FOOTER
    <footer class="bg-light p-2 text-center">
        <div class="container">
            <p>© 2023 MKANAK Real-Estate. All rights reserved.</p>
        </div>
    </footer>
FOOTER;
}
footer();
?>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" crossorigin="anonymous"></script>
</body>
</html>
