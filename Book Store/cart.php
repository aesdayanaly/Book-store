<?php include "database.php"; // Include your database connection file ?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Shopping Cart</title>
  <link rel="stylesheet" href="css/cart.css">
</head>
<body>
  <div class="payment-container">
    <h2>Your Cart</h2>
    <div class="cart-items">
      <ul>
        <?php
        $sql = "SELECT * FROM book";  // Make sure the table name is 'book' as per your database
        $result = $conn->query($sql);
        $total = 0;

        if ($result->num_rows > 0) {
          while ($row = $result->fetch_assoc()) {
            $total += $row['price'];
        ?>
        <li class="cart-item">
          <div class="item-details">
            <span class="item-name"><?php echo htmlspecialchars($row['title']); ?></span>
            <span>Author: <?php echo htmlspecialchars($row['author']); ?></span>
          </div>
          <div class="quantity">
            <button class="minus">-</button>
            <input type="number" class="quantity-input" value="1">
            <button class="plus">+</button>
          </div>
          <span class="price">$<?php echo number_format($row['price'], 2); ?></span>
          <button class="remove-item">X</button>
        </li>
        <?php
          }
        } else {
          echo "<p>No items in the cart.</p>";
        }
        ?>
      </ul>
    </div>

    <div class="cart-totals">
      <h3>Cart Totals</h3>
      <p>Total: <span class="total-price">$<?php echo number_format($total, 2); ?></span></p>
    </div>

    <a class="checkout-btn" href="checkout.php">Proceed to Checkout</a>
  </div>

  <script src="js/cart.js"></script>
</body>
</html>
