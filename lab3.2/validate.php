<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {

    // Initialize variables
    $errors = [];

    // Name validation
    if (isset($_POST['name'])) {
        $name = $_POST['name'];
        if (empty($name)) {
            $errors[] = "Name is required.";
        } elseif (!ctype_alpha(str_replace(' ', '', $name))) { // Allow spaces in names
            $errors[] = "Name must contain only letters and spaces.";
        }
    } else {
        $errors[] = "Name is missing.";
    }

    // Email validation
    if (isset($_POST['email'])) {
        $email = $_POST['email'];
        if (empty($email)) {
            $errors[] = "Email is required.";
        } elseif (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
            $errors[] = "Invalid email format.";
        }
    } else {
        $errors[] = "Email is missing.";
    }

    // Date validation
    if (isset($_POST['date'])) {
        $date = $_POST['date'];
        if (empty($date)) {
            $errors[] = "Date is required.";
        } else {
            $dateParts = explode("-", $date);
            if (count($dateParts) == 3 && checkdate($dateParts[1], $dateParts[0], $dateParts[2])) {
                // Valid date format (dd-mm-yyyy)
            } else {
                $errors[] = "Invalid date format. Use dd-mm-yyyy.";
            }
        }
    } else {
        $errors[] = "Date is missing.";
    }

    // Gender validation
    if (isset($_POST['gender'])) {
        $gender = $_POST['gender'];
        if (empty($gender)) {
            $errors[] = "Gender is required.";
        } elseif (!in_array($gender, ['male', 'female', 'other'])) {
            $errors[] = "Invalid gender option.";
        }
    } else {
        $errors[] = "Gender is missing.";
    }

    // Degree validation
    if (isset($_POST['degree'])) {
        $degree = $_POST['degree'];
        if (empty($degree)) {
            $errors[] = "Degree is required.";
        } elseif (!in_array($degree, ['SSC', 'HSC', 'BSc', 'MSc'])) {
            $errors[] = "Invalid degree selected.";
        }
    } else {
        $errors[] = "Degree is missing.";
    }

    // Blood group validation
    if (isset($_POST['blood-group'])) {
        $bloodGroup = $_POST['blood-group'];
        if (empty($bloodGroup)) {
            $errors[] = "Blood group is required.";
        } elseif (!in_array($bloodGroup, ['A+', 'A-', 'B+', 'B-', 'O+', 'O-', 'AB+', 'AB-'])) {
            $errors[] = "Invalid blood group selected.";
        }
    } else {
        $errors[] = "Blood group is missing.";
    }

    // If there are no errors, process the form
    if (empty($errors)) {
        echo "Form submitted successfully!";
        // Process form data (e.g., save to a database)
    } else {
        // Display errors
        echo "There were errors in your form submission:<br>";
        foreach ($errors as $error) {
            echo $error . "<br>";
        }
    }
}
?>


