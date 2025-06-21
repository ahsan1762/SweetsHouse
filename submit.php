<<<<<<< HEAD
<?php
error_reporting(E_ALL);
ini_set('display_errors', 1);

// Connect to the correct DB
$conn = new mysqli('localhost', 'root', '', 'customers');

if ($conn->connect_error) {
    die("❌ Connection failed: " . $conn->connect_error);
}

// Validate fields
if (!isset($_POST['email'], $_POST['fname'], $_POST['lname'], $_POST['number'], $_POST['address'], $_POST['city'], $_POST['zipcode'])) {
    die("❌ Required fields are missing.");
}

// Capture fields
$email = $_POST['email'];
$fname = $_POST['fname'];
$lname = $_POST['lname'];
$phone = $_POST['number'];
$address = $_POST['address'];
$city = $_POST['city'];
$zipcode = $_POST['zipcode'];
$order_comment = isset($_POST['order_comment']) ? $_POST['order_comment'] : '';

// Insert into DB
$sql = "INSERT INTO orders (email, first_name, last_name, phone, address, city, zipcode, order_comment)
        VALUES (?, ?, ?, ?, ?, ?, ?, ?)";

$stmt = $conn->prepare($sql);
$stmt->bind_param("ssssssss", $email, $fname, $lname, $phone, $address, $city, $zipcode, $order_comment);

if ($stmt->execute()) {
    echo "✅ Order placed successfully!";
} else {
    echo "❌ Error: " . $stmt->error;
}

$stmt->close();
$conn->close();
?>
=======
<?php
error_reporting(E_ALL);
ini_set('display_errors', 1);

// Connect to the correct DB
$conn = new mysqli('localhost', 'root', '', 'customers');

if ($conn->connect_error) {
    die("❌ Connection failed: " . $conn->connect_error);
}

// Validate fields
if (!isset($_POST['email'], $_POST['fname'], $_POST['lname'], $_POST['number'], $_POST['address'], $_POST['city'], $_POST['zipcode'])) {
    die("❌ Required fields are missing.");
}

// Capture fields
$email = $_POST['email'];
$fname = $_POST['fname'];
$lname = $_POST['lname'];
$phone = $_POST['number'];
$address = $_POST['address'];
$city = $_POST['city'];
$zipcode = $_POST['zipcode'];
$order_comment = isset($_POST['order_comment']) ? $_POST['order_comment'] : '';

// Insert into DB
$sql = "INSERT INTO orders (email, first_name, last_name, phone, address, city, zipcode, order_comment)
        VALUES (?, ?, ?, ?, ?, ?, ?, ?)";

$stmt = $conn->prepare($sql);
$stmt->bind_param("ssssssss", $email, $fname, $lname, $phone, $address, $city, $zipcode, $order_comment);

if ($stmt->execute()) {
    echo "✅ Order placed successfully!";
} else {
    echo "❌ Error: " . $stmt->error;
}

$stmt->close();
$conn->close();
?>
>>>>>>> 29e23000e83ea5d719d4f28c0c4d19a38dd3976b
