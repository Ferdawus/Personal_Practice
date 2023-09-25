<?php
do {
    $email = readline("Enter your email address: ");
    
    // Validate the email using filter_var
    $confirmation = "";
    if (filter_var($email, FILTER_VALIDATE_EMAIL)) {
        echo "Confirmation email sent to $email\n";
        $confirmation = readline("Did you receive the email? (yes/no): ");
    } else {
        echo "Invalid email address. Please enter a valid email.\n";
    }
} while ($confirmation !== 'yes');
?>


?>