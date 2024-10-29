<?php
$firstname = $_POST['firstname'];
$lastname = $_POST['lastname'];
$country = $_POST['country'];
$subject = $_POST['subject'];
$DB = "mkanak";

// Establish the connection
$conn = mysqli_connect('localhost', 'root', '', $DB);

if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
} else {
    
    $stmt = $conn->prepare("INSERT INTO contact_us (firstname, lastname, country, subject) VALUES (?, ?, ?, ?)");
    
    if ($stmt) {
        
        $stmt->bind_param("ssss", $firstname, $lastname, $country, $subject);
        
        
        if ($stmt->execute()) {
            echo "Contact success";
        } else {
            echo "Error executing statement: " . $stmt->error;
        }
        
       
        $stmt->close();
    } else {
        echo "Error preparing statement: " . $conn->error;
    }
    
    
    mysqli_close($conn);
}
?>
