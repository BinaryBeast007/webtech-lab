<?php
if ($_SERVER["REQUEST_METHOD"] === "POST") {
    // Initialize an array to store validation errors
    $errors = [];

    // Check if any field is empty and add errors to the $errors array
    if (empty($_POST["first_name"])) {
        $errors[] = "First Name is required.";
    }
    if (empty($_POST["last_name"])) {
        $errors[] = "Last Name is required.";
    }
    if (empty($_POST["username"])) {
        $errors[] = "Username is required.";
    }
    if (empty($_POST["email"]) || !filter_var($_POST["email"], FILTER_VALIDATE_EMAIL)) {
        $errors[] = "Valid Email is required.";
    }
    if (empty($_POST["dob"])) {
        $errors[] = "Date of Birth is required.";
    }
    if (empty($_POST["gender"])) {
        $errors[] = "Gender is required.";
    }
    if (empty($_POST["organization"])) {
        $errors[] = "Organization is required.";
    }
    if ($_POST["country"] === "select country") {
        $errors[] = "Please select a country.";
    }
    if (empty($_POST["phone"]) || !is_numeric($_POST["phone"])) {
        $errors[] = "Valid Phone Number is required.";
    }
    if (empty($_POST["bio"])) {
        $errors[] = "Bio is required.";
    }
    if (strlen($_POST["password"]) < 8 || empty($_POST["password"])) {
        $errors[] = "Password is too short.";
    }
    if ($_POST["password"] !== $_POST["confirm_password"]) {
        $errors[] = "Passwords do not match.";
    }
    if ($_FILES["profile_picture"]["error"] === UPLOAD_ERR_OK) {
        $allowedFormats = ["image/jpeg", "image/jpg", "image/png"];
        $fileType = $_FILES["profile_picture"]["type"];

        if (!in_array($fileType, $allowedFormats)) {
            $errors[] = "Profile picture must be in JPG, JPEG, or PNG format.";
        }
    } else {
        $errors[] = "Profile picture upload failed. Please try again.";
    }

    if (empty($_POST["terms"])) {
        $errors[] = "You must agree to the Terms & Conditions.";
    }

    // If there are validation errors, display them
    if (!empty($errors)) {
        foreach ($errors as $error) {
            echo "<p>Error: $error</p>";
        }
    } else {
        echo "Registration Successful";
    }
}
?>
