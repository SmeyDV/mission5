<nav class="navbar navbar-expand-lg <?php echo $navbarClass; ?>">
    <div class="container">
        <a class="navbar-brand font-custom" href="index.php">Lohak</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
            <?php if ($searchBoxClass !== false): ?>
            <form class="d-none d-lg-flex ms-auto">
                <input class="form-control me-2 <?php echo $searchBoxClass; ?>" type="search" placeholder="Search" aria-label="Search" />
                <button class="btn btn-outline-light" type="submit">Search</button>
            </form>
            <?php endif; ?>
            <ul class="navbar-nav ms-auto">
                <li class="nav-item">
                    <a class="nav-link" href="index.php">Home</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="product.php">Product</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="aboutpage.php">About</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="contact.php">Contact</a>
                </li>
                <?php if($showLoginDropdown): ?>
                <li class="nav-item dropdown d-none d-lg-block">
                    <a class="nav-link dropdown-toggle" href="#" id="accountDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                        <i class="fas fa-user"></i>
                    </a>
                    <ul class="dropdown-menu dropdown-menu-end" aria-labelledby="accountDropdown">
                        <li><a class="dropdown-item" href="loginpage.php">Login</a></li>
                        <li><a class="dropdown-item" href="signuppage.php">Sign Up</a></li>
                    </ul>
                </li>
                <?php endif; ?>
            </ul>
        </div>
    </div>
</nav>
