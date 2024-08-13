<?php
// Determine the base path based on the current file's directory level
$basePath = '';
$currentDir = dirname($_SERVER['PHP_SELF']); 
$depth = substr_count($currentDir, '/'); // Count the number of slashes in the current directory path

for ($i = 1; $i < $depth; $i++) {
    $basePath .= '../'; // Add '../' for each directory level
}
?>
<nav class="navbar navbar-expand-lg <?php echo $navbarClass; ?>">
    <div class="container">
        <a class="navbar-brand font-custom" href="<?php echo $basePath; ?>index.php">Lohak</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
            <?php if ($searchBoxClass !== false): ?>
            <form class="d-none d-lg-flex ms-auto" id="search-form">
                <input class="form-control me-2 <?php echo $searchBoxClass; ?>" type="search" placeholder="Search" aria-label="Search" id="search-input" />
                <button class="btn btn-outline-light" type="submit">Search</button>
            </form>
            <?php endif; ?>
            <ul class="navbar-nav ms-auto">
                <li class="nav-item">
                    <a class="nav-link" href="<?php echo $basePath; ?>index.php">Home</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="<?php echo $basePath; ?>product.php">Product</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="<?php echo $basePath; ?>aboutpage.php">About</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="<?php echo $basePath; ?>contact.php">Contact</a>
                </li>

                <!-- Conditionally show Cart item -->
                <?php if (isset($showCart) && $showCart): ?>
                <li class="nav-item">
                    <a class="nav-link" href="<?php echo $basePath; ?>cart.php">
                        <i class="fas fa-shopping-cart" id="cart-icon"></i> Cart
                        <span id="cart-count" class="badge bg-danger"></span>
                    </a>
                </li>
                <?php endif; ?>
                <!-- Conditionally show Wishlist item -->
                <?php if (isset($showWishlist) && $showWishlist): ?>
                <li class="nav-item">
                    <a class="nav-link" href="<?php echo $basePath; ?>wishlist.php">
                        <i class="fas fa-heart"></i> Wishlist
                        <span id="wishlist-count" class="badge bg-danger"></span>
                    </a>
                </li>
                <?php endif; ?>
                <?php if($showLoginDropdown): ?>
                <li class="nav-item dropdown d-none d-lg-block">
                    <a class="nav-link dropdown-toggle" href="#" id="accountDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                        <i class="fas fa-user"></i>
                    </a>
                    <ul class="dropdown-menu dropdown-menu-end" aria-labelledby="accountDropdown">
                        <li><a class="dropdown-item" href="<?php echo $basePath; ?>loginpage.php">Login</a></li>
                        <li><a class="dropdown-item" href="<?php echo $basePath; ?>signuppage.php">Sign Up</a></li>
                    </ul>
                </li>
                <?php endif; ?>
            </ul>
        </div>
    </div>
</nav>
