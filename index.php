<?php
// Database connection settings
$servername = "localhost";
$username = "root";
$password = "mysql"; // Change if your AMPPS password is different
$database = "mysql";

// Create connection
$conn = new mysqli($servername, $username, $password, $database);

// Start HTML output
echo "<!DOCTYPE html>";
echo "<html lang='en'>";
echo "<head>";
echo "<meta charset='UTF-8'>";
echo "<title>Database Connection</title>";
echo "<style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f4f6f8;
            text-align: center;
            margin-top: 100px;
        }
        .container {
            background: #ffffff;
            padding: 30px;
            margin: auto;
            width: 50%;
            border-radius: 10px;
            box-shadow: 0 4px 10px rgba(0,0,0,0.1);
        }
        .success {
            color: green;
            font-size: 28px;
            margin-bottom: 10px;
        }
        .error {
            color: red;
            font-size: 20px;
        }
      </style>";
echo "</head>";
echo "<body>";
echo "<div class='container'>";

// Check connection
if ($conn->connect_error) {
    echo "<div class='error'>Connection failed: " . $conn->connect_error . "</div>";
} else {
    echo "<div class='success'>Connection successful!</div>";
    echo "<p>Your PHP application is connected to MySQL using AMPPS.</p>";
}

// Close connection
$conn->close();

echo "</div>";
echo "</body>";
echo "</html>";
?>