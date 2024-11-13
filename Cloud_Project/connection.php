<?php  
$servername = "tcp:buspass.database.windows.net,1433";
$username = "group6";  // Use a more secure username for live servers
$password = "Satya@2004";  // Set a strong password if using a live server
$database = "busspass"; // Replace with your Azure SQL admin password

try {
    $conn = new PDO("sqlsrv:Server=$serverName;Database=$database", $username, $password);
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch (PDOException $e) {
    die("Connection failed: " . $e->getMessage());
}
?>

<?php