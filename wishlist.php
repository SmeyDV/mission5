<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@100;200;300;400;500;600;700;800;900&display=swap" rel="stylesheet" />
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" />
  <link rel="stylesheet" href="css/styles.css" />
  <title>Wishlist</title>
  <link rel="icon" type="image/png" href="pic/logo.png">
  <link rel="stylesheet" href="">
</head>
<style>
  .product-image {
    object-fit: contain;
    border-radius: 5px;
    transition: transform 0.3s ease;
  }

  .product-image:hover {
    transform: scale(1.05);
  }

</style>
<body>
 
  <!-- navbar -->
  <?php
  $navbarClass = ''; // No additional classes for navbar
  $searchBoxClass = false; // Custom class for search box
  $showLoginDropdown = false; // Show login dropdown
  include 'components/navbar.php';
  ?>
  <div class="container mt-4 text-center custom">
    <h1>Your Wishlist</h1>
    <div class="row" id="wishlist-items">
      <!-- Wishlist items will be displayed here -->
      <div id="no-items" class="col-12 text-center d-none ">
        <p>No items in your wishlist 💔</p>
      </div>
    </div>
  </div>
  
  <?php include 'components/footer.php'; ?>
  
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/js/all.min.js"></script>
  <script src="js/wishlist.js"></script>
  
</body>
</html>
