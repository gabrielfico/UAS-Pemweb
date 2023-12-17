<?php

require_once('config.php');

// Handle login logic here
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $email = $_POST["email"];
    $password = $_POST["password"];

    // Query to get user data based on email
    $sql = "SELECT * FROM tbl_user WHERE email = '$email'";
    $result = mysqli_query($conn, $sql);

    if ($result) {
        // Check if user is found
        if (mysqli_num_rows($result) > 0) {
            $row = mysqli_fetch_assoc($result);

            // Check if the 'password' key exists in the fetched row
            if (isset($row['pass'])) {
                // Verify password
                if (password_verify($password, $row['pass'])) {
                    echo "Login success.";
                }
                else {
                    echo "Login failed. Invalid password.";
                }
            }
            else {
                echo "Login failed. Password field is not set in the database.";
            }
        }
        else {
            echo "Login failed. User not found.";
        }
    }
    else {
        echo "Error: " . $sql . "<br>" . mysqli_error($conn);
    }
}
header("Location: display_data.php");
exit();

// Close the connection
mysqli_close($conn);
?>
