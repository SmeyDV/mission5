<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link
      href="https://fonts.googleapis.com/css2?family=Poppins:wght@100;200;300;400;500;600;700;800;900&display=swap"
      rel="stylesheet"
    />
    <link
      href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css"
      rel="stylesheet"
    />
    <title>Cart</title>
    <link rel="icon" type="image/png" href="pic/logo.png">
    <link rel="stylesheet" href="css/styles.css">
    <style>
      .cart-item {
        border: 1px solid #ddd;
        border-radius: 5px;
        padding: 10px;
        margin-bottom: 15px;
      }
      .cart-item img {
        max-width: 100px;
        margin-right: 15px;
      }
      .cart-item .card-body {
        display: flex;
        justify-content: space-between;
        align-items: center;
      }
      .cart-item .remove-btn {
        color: #ff8100;
        cursor: pointer;
      }
      .cart-summary {
        border-top: 1px solid #ddd;
        padding-top: 10px;
        text-align: right;
      }
      .cart-summary h3 {
        margin: 0;
      }
      .back-to-shopping-container {
        display: flex;
        justify-content: center;
        margin-top: 20px;
      }
      .checkout-button-container {
        display: flex;
        justify-content: center;
        margin-top: 20px;
        margin-bottom: 20px;
      }
      
      .checkout-button-container .btn-primary {
        background-color: #1982d2; 
        border: none;
        padding: 6px; 
        font-size: 18px; 
        border-radius: 5px; 
        color: white; 
        transition: background-color 0.3s ease;
        width: 170px; 
        text-align: center; 
      }
      
      .checkout-button-container .btn-primary:hover {
        background-color: #0A283F; 
      }
      
      .checkout-button-container .btn-primary:disabled {
        background-color: #ddd; /* Disabled state background color */
        cursor: not-allowed; /* Show not-allowed cursor */
      }
      .empty-cart-message {
        text-align: center;
        margin-top: 20px;
      }
    </style>
  </head>
  <body>
    <!-- navbar -->
    <?php
    $navbarClass = ''; // No additional classes for navbar
    $searchBoxClass = false; // Custom class for search box
    $showLoginDropdown = false; // Show login dropdown
    include 'components/navbar.php';
    ?>

    <div class="container mt-4">
      <div id="cart-items" class="mt-4"></div>
      <div class="cart-summary">
        <h3>Total: $<span id="total-price">0.00</span></h3>
      </div>
      <div class="back-to-shopping-container">
        <a href="shoppingpage.php" class="btn btn-outline-secondary">Back to Shopping</a>
      </div>
      <div class="checkout-button-container">
        <a href="checkout.php" id="checkout-button" class="btn btn-primary">Checkout</a>
      </div>
      <div class="empty-cart-message" id="empty-cart-message" style="display: none;">
        <p>No products in the cart.</p>
      </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/js/all.min.js"></script>
    <script src="js/cart.js"></script>
  </body>
</html>

