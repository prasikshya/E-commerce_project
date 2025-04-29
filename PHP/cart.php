<?php
require("includes/common.php");
if (!isset($_SESSION['email'])) {
    header('location: index.php');
}
?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Cart | Life Style Store</title>
        <link href="css/bootstrap.css" rel="stylesheet">
        <link href="css/style.css" rel="stylesheet">
        <script src="js/jquery.js"></script>
        <script src="js/bootstrap.min.js"></script>
    </head>
    <body>
        <div class="container-fluid" id="content">
            <?php include 'includes/header.php'; ?>
            <div class="col-lg-4 col-md-6 ">
                <img src="img/confirmorder.png" style="float: left;">
            </div>
            <div class="row decor_bg">
                <div class="col-md-6">
                    <table class="table table-striped">
    
                        <!-- Show table only if there are items in the cart -->
                        <?php
                        $sum = 0;
                        $id = '';
                        $user_id = $_SESSION['user_id'];
                        $query = "SELECT items.price AS Price, items.id As id, items.name AS Name 
                                  FROM user_item 
                                  JOIN items ON user_item.item_id = items.id 
                                  WHERE user_item.user_id='$user_id' AND `status`=1";
                        $result = mysqli_query($con, $query) or die(mysqli_error($con));
                        if (mysqli_num_rows($result) >= 1) {
                            ?>
                            <thead>
                                <tr>
                                    <th>Item Number</th>
                                    <th>Item Name</th>
                                    <th>Price</th>
                                    <th></th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php
                                while ($row = mysqli_fetch_array($result)) {
                                    $sum += $row["Price"];
                                    $id .= $row["id"] . ", ";
                                    echo "<tr>
                                            <td>#{$row['id']}</td>
                                            <td>{$row['Name']}</td>
                                            <td>Rs {$row['Price']}</td>
                                            <td><a href='cart-remove.php?id={$row['id']}' class='remove_item_link'> Remove</a></td>
                                          </tr>";
                                }
                                $id = rtrim($id, ", ");
                                ?>
                                <tr>
                                    <td></td>
                                    <td>Total</td>
                                    <td>Rs <?php echo $sum; ?></td>
                                    <td><button id="payment-button" class="btn btn-primary">Confirm Order</button></td>
                                </tr>
                            </tbody>
                            <?php
                        } else {
                            echo "<p>Heyy!! Your Cart is Empty. Please add items to the cart first!</p>";
                        }
                        ?>
                    </table>
                </div>
            </div>
        </div>
        <?php include("includes/footer.php"); ?>

        <!-- Khalti Integration -->
        <script src="https://khalti.com/static/khalti-checkout.js"></script>
        <script>
            var config = {
                publicKey: "test_public_key_xxxx", // Replace with your actual Khalti public key
                productIdentity: "<?php echo $id; ?>",
                productName: "Cart Items",
                productUrl: "http://yourwebsite.com/cart.php",
                eventHandler: {
                    onSuccess(payload) {
                        // Send payment details to the server for verification
                        fetch("verify_payment.php", {
                            method: "POST",
                            headers: { "Content-Type": "application/json" },
                            body: JSON.stringify(payload)
                        })
                        .then(response => response.json())
                        .then(data => {
                            if (data.success) {
                                alert("Payment Successful!");
                                window.location.href = "success.php?itemsid=<?php echo $id; ?>";
                            } else {
                                alert("Payment Failed! Try again.");
                            }
                        });
                    },
                    onError(error) {
                        alert("Payment error! Please try again.");
                    },
                    onClose() {
                        console.log("Payment popup closed.");
                    }
                }
            };
        
            var checkout = new KhaltiCheckout(config);
            document.getElementById("payment-button").onclick = function() {
                checkout.show({ amount: <?php echo $sum * 100; ?> }); // Khalti requires amount in paisa (1 Rs = 100 paisa)
            };
        </script>
    </body>
</html>
