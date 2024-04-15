<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Salon Booking</title>
    <link rel="stylesheet" href="css/reserve.css">
</head>
<body>
    <header>
        <h1>Welcome to Our Salon</h1>
        <nav>
            <ul>
                <li><a href="#services">Services</a></li>
                <li><a href="#home.php">About Us</a></li>
                <li><a href="#gallery">Gallery</a></li>
                <li><a href="#contact">Contact</a></li>
            </ul>
        </nav>
    </header>
    <section id="booking">
        <h2>Book an Appointment</h2>
        <form id="booking-form">
            <label for="date">Date:</label>
            <input type="date" id="date" name="date" required><br>

            <label for="time">Time:</label>
            <input type="time" id="time" name="time" required><br>

            <label for="service">Select a Service:</label>
            <select id="service" name="service" required>
                <option value="">Choose a service</option>
                <option value="haircut">Haircut</option>
                <option value="coloring">Coloring</option>
                <option value="manicure">Manicure</option>
                <!-- Add more options as needed -->
            </select><br>

            <label for="stylist">Select a Stylist:</label>
            <select id="stylist" name="stylist">
                <option value="">Any stylist</option>
                <option value="john-doe">John Doe</option>
                <option value="jane-doe">Jane Doe</option>
                <!-- Add more options as needed -->
            </select><br>

            <label for="name">Your Name:</label>
            <input type="text" id="name" name="name" required><br>

            <label for="email">Email:</label>
            <input type="email" id="email" name="email" required><br>

            <label for="phone">Phone:</label>
            <input type="tel" id="phone" name="phone" required><br>

            <label for="notes">Additional Notes:</label><br>
            <textarea id="notes" name="notes" rows="4" cols="50"></textarea><br>

            <input type="submit" value="Book Now">
        </form>
    </section>

    <footer>
        <p>&copy; 2024 Your Salon. All rights reserved.</p>
    </footer>

    <script src="js/login.js"></script>
</body>
</html>
<?php
// Database connection
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "the mane event";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);


if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $id = $_POST['id'];
    $service_id = $_POST['service_id'];
    $customer_name= $_POST['customer_name'];
    $stylist = $_POST['stylist'];
    $email = $_POST['email'];
    $phone = $_POST['phone'];
    $booking_date = $_POST['booking_date'];

    
    $sql = "INSERT INTO bookings (id, service_id, customer_name, stylist, name, email, phone, booking_dates) VALUES ('$id', '$service_id', '$customer_name', '$stylist', '$email', '$phone', '$booking_date')";

    if ($conn->query($sql) === TRUE) {
        echo "<script>alert('Booking successful!');</script>";
    } else {
        echo "<script>alert('Error: " . $sql . "\\n" . $conn->error . "');</script>";
    }

    $conn->close();
}
?>
