<?php
// Handle the form submission and generate a paper number

// Simulate paper submission handling (you would need to implement actual logic)
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $number = $_POST['number'];

    // Regular expression to check if the input is a scientific number
    $scientificNumberRegex = '/^[-+]?[0-9]*\.?[0-9]+([eE][-+]?[0-9]+)?$/';

    if (preg_match($scientificNumberRegex, $number)) {
        $response = array('success' => true, 'message' => 'It\'s a scientific number!');
    } else {
        $response = array('success' => false, 'message' => 'It\'s not a scientific number!');
    }

    echo json_encode($response);
} else {
    // Invalid request method
    $response = array('success' => false, 'message' => 'Invalid request method');
    echo json_encode($response);
}
?>
