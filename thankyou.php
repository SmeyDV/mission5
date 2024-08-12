<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Our Product</title>
  <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@100;200;300;400;500;600;700;800;900&display=swap"
    rel="stylesheet" />
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" />
  <script src="https://cdn.jsdelivr.net/npm/canvas-confetti@1.4.0/dist/confetti.browser.min.js"></script>
  <link rel="stylesheet" href="css/styles.css" />
  <link rel="stylesheet" href="css/product.css">
  <link rel="icon" type="image/png" href="pic/logo.png">
  <style>
body {
    font-family: Arial, sans-serif;
    margin: 0;
    padding: 0;
    box-sizing: border-box;
}

header {
    display: flex;
    justify-content: space-between;
    align-items: center;
    padding: 10px 20px;
    background-color: #1b3a57;
    color: #fff;
}

header .logo h1 {
    margin: 0;
    font-size: 1.5em;
}

nav ul {
    list-style: none;
    display: flex;
    margin: 0;
    padding: 0;
}

nav ul li {
    margin: 0 10px;
}

nav ul li a {
    text-decoration: none;
    color: #fff;
    font-weight: bold;
}

main {
    display: flex;
    justify-content: center;
    align-items: center;
    height: 80vh; /* Adjust the height as needed */
    text-align: center;
    flex-direction: column;
    margin-top: 70px; /* Adjust for fixed navbar height */
}

.thank-you-container {
    max-width: 700px;
    margin: 0 auto;
    display: flex;
    flex-direction: column;
    align-items: center; /* Centers content horizontally */
    justify-content: center; /* Centers content vertically */
    height: 100%;
}

.thank-you-gif {
    width: 100%;
    max-width: 450px;
    
    margin-top: 30px;
}

.thank-you-container p {
    font-size: 2.2em;
   
    text-align: center;
}

.home-button {
    background-color: #28a745;
    color: #fff;
    border: none;
    padding: 10px 20px;
    cursor: pointer;
    border-radius: 5px;
    font-size: 1em;
    margin-top: 20px; /* Adds space above the button */
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

    <div class="thank-you-container">
        <div class="tenor-gif-embed thank-you-gif" data-postid="25990555" data-share-method="host" data-aspect-ratio="1" data-width="100%"><a href="https://tenor.com/view/thank-you-so-cute-gif-25990555">Thank You Sticker</a>from <a href="https://tenor.com/search/thank-stickers">Thank Stickers</a></div> <script type="text/javascript" async src="https://tenor.com/embed.js"></script>
        
        <p>Thanks For Your Purchase! <span style="font-size: 2em;" >😏🫰</span></p>
        <button class="home-button" onclick="window.location.href='shoppingpage.php'">Continue Shopping</button>
    </div>


    <script>
        // Confetti animation
        window.addEventListener('load', () => {
            confetti({
                particleCount: 100,
                spread: 70,
                origin: { y: 0.6 }
            });
        });
    </script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/js/all.min.js"></script>
</body>

</html>