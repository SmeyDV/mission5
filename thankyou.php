<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Thank You - Lohak</title>
    <link
        href="https://fonts.googleapis.com/css2?family=Poppins:wght@100;200;300;400;500;600;700;800;900&display=swap"
        rel="stylesheet" />
    <link
        href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css"
        rel="stylesheet" />
    <script src="https://cdn.jsdelivr.net/npm/canvas-confetti@1.4.0/dist/confetti.browser.min.js"></script>
    <link rel="stylesheet" href="css/styles.css" />
    <link rel="icon" type="image/png" href="pic/logo.png" />
    <link rel="stylesheet" href="css/thankyou.css" />
</head>

<body>
    <?php
    $navbarClass = '';
    $searchBoxClass = false;
    $showLoginDropdown = false;
    include 'components/navbar.php';
    ?>
    <div class="container mt-3">
        <div class="thank-you-container">
            <div
                class="tenor-gif-embed thank-you-gif"
                data-postid="25990555"
                data-share-method="host"
                data-aspect-ratio="1"
                data-width="100%">
                <a href="https://tenor.com/view/thank-you-so-cute-gif-25990555">Thank You Sticker</a>
            </div>
            <script
                type="text/javascript"
                async
                src="https://tenor.com/embed.js"></script>

            <h1>Thank You for Your Purchase!</h1>
            <p>
                We appreciate your support of Cambodian handcrafts.
                <span style="font-size: 1.2em">😊🙏</span>
            </p>
            <div class="order-number">Order #: <span id="orderNumber"></span></div>
            <button
                class="home-button mt-3"
                onclick="window.location.href='shoppingpage.php'">
                Continue Shopping
            </button>
        </div>
    </div>
    
    
    <script>
        // Confetti animation
        window.addEventListener("load", () => {
            confetti({
                particleCount: 100,
                spread: 70,
                origin: {
                    y: 0.6
                },
            });
        });

        // Generate a random order number
        document.getElementById("orderNumber").innerText = Math.floor(
            100000 + Math.random() * 900000
        );
    </script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>