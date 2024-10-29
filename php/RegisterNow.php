<!doctype html>
<html lang="en">
<head>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" crossorigin="anonymous">
<link rel="stylesheet" href="style.css">
    <title>Register to List Your Property</title>
    
    <style>
        /* Inline styling for basic centering; adjust in CSS file if needed */
        .centered-content {
            display: flex;
            flex-direction: column;
            align-items: center;
            justify-content: center;
            height: 100vh;
            text-align: center;
        }
        /* Custom style for the Register button */
.btn-primary {
    background-color: red;
    color: white;
    font-size: 1.2em; /* Increases button size */
    padding: 1rem 4rem;
    border: none;
    text-decoration: none;
    border-radius: 5px;
    transition: background-color 0.3s, color 0.3s;
    border-radius: 0.7rem;
}

.btn-primary:hover {
    background-color: white;
    color: red;
    text-decoration: none;
    border: 2px solid red; /* Optional: adds a border when hovered */
}
.row{
    justify-content: center;

}
    </style>
</head>
<body>
<?php require_once 'includes/header.php'; ?>

    <div class="container-fluid">
        <div class="row">
           
            <main role="main" class="col-md-9   col-lg-10 px-4 centered-content">
                <h1>You Can Register Now and List Your Property</h1>
                <p>Sign up today to start listing your properties and connect with potential clients.</p>
                <br> 
                <!-- Register button -->
                <a href="form.php" class="btn btn-primary">Register Now</a> <!-- Link to your registration page here -->
            </main>
        </div>
    </div>

    <?php require_once 'includes/footer.php'; ?> <!-- Include footer -->
</body>
</html>
