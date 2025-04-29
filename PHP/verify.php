<?php
require("includes/common.php"); // Ensure database connection

$data = json_decode(file_get_contents("php://input"));

if (!$data || !isset($data->token) || !isset($data->amount)) {
    echo json_encode(["success" => false, "message" => "Invalid request"]);
    exit();
}

$token = $data->token;
$amount = $data->amount;
$user_id = $_SESSION['user_id']; // Get logged-in user

// Khalti Verification API
$url = "https://khalti.com/api/v2/payment/verify/";
$args = [
    "token" => $token,
    "amount" => $amount
];

$headers = [
    "Authorization: Key test_secret_key_xxxx" // Replace with your actual Secret Key
];

// Send request to Khalti
$ch = curl_init();
curl_setopt($ch, CURLOPT_URL, $url);
curl_setopt($ch, CURLOPT_POST, 1);
curl_setopt($ch, CURLOPT_POSTFIELDS, http_build_query($args));
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);
$response = curl_exec($ch);
curl_close($ch);

$responseData = json_decode($response, true);

if (isset($responseData['idx'])) {
    // Payment verified, store in database
    $txn_id = $responseData['idx'];
    $amount = $responseData['amount'] / 100; // Convert from paisa to Rs.
    $status = "Completed";
    $date = date("Y-m-d H:i:s");

    $query = "INSERT INTO payments (user_id, txn_id, amount, status, created_at) 
              VALUES ('$user_id', '$txn_id', '$amount', '$status', '$date')";
    mysqli_query($con, $query) or die(mysqli_error($con));

    // Mark items as purchased
    $query = "UPDATE user_item SET status='Confirmed' WHERE user_id='$user_id'";
    mysqli_query($con, $query);

    echo json_encode(["success" => true]);
} else {
    echo json_encode(["success" => false, "message" => "Payment verification failed"]);
}
?>
