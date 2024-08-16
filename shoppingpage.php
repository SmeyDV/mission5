<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@100;200;300;400;500;600;700;800;900&display=swap"
    rel="stylesheet" />
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" />
  <link rel="stylesheet" href="css/styles.css" />
  <title>Shopping</title>
  <link rel="icon" type="image/png" href="pic/logo.png" />
  <link rel="stylesheet" href="css/shoppingpage.css">
</head>

<body>
  <!-- Navbar -->
  <?php
  $navbarClass = ''; // No additional classes for navbar
  $showLoginDropdown = false; // Show login dropdown
  $searchBoxClass = 'd-lg-flex';
  $showCart = true; // Show the Cart item
  $showWishlist = true; // Show the Wishlist item
  include 'components/navbar.php';
  ?>
  <!-- Product Section -->
  <div class="container mt-4">
    <div class="row">
      <div class="col-md-2 col-12">
        <div class="filter-bar">
          <div class="filter-section">
            <h5>Types of Product</h5>
            <label><input type="checkbox" class="filter" data-filter="jewelry" /> Jewelry</label><br />
            <label><input type="checkbox" class="filter" data-filter="figurine" /> Figurine</label><br />
            <label><input type="checkbox" class="filter" data-filter="silk" /> Silk</label><br />
            <label><input type="checkbox" class="filter" data-filter="wooden carving" /> Wooden Carving</label><br />
            <label><input type="checkbox" class="filter" data-filter="ceramic" /> Ceramic</label>
            
          </div>
          <div class="filter-section">
            <h5>Price</h5>
            <label><input type="checkbox" class="filter" data-filter="price-1" /> $30 - $50</label><br />
            <label><input type="checkbox" class="filter" data-filter="price-2" /> $50 - $100</label><br />
            <label><input type="checkbox" class="filter" data-filter="price-3" /> $100 - $300</label><br />
            <label><input type="checkbox" class="filter" data-filter="price-4" /> $300+</label>
          </div>
        </div>
      </div>
      <div class="col-md-10 col-12">
        <div class="product-item">
          <!-- Products will be displayed here -->
        </div>
        <nav aria-label="Page navigation example" class="pagination-container">
          <ul class="pagination justify-content-center">
            <li class="page-item">
              <a class="page-link" href="#" aria-label="Previous" id="prev-page">
                <span aria-hidden="true">&laquo;</span>
              </a>
            </li>
            <!-- Pagination numbers will be generated here dynamically -->
            <li class="page-item">
              <a class="page-link" href="#" aria-label="Next" id="next-page">
                <span aria-hidden="true">&raquo;</span>
              </a>
            </li>
          </ul>
        </nav>
      </div>
    </div>
  </div>

  <!-- Footer -->
  <?php include 'components/footer.php'; ?>

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/js/all.min.js"></script>
  <script src="js/products.js"></script>
  <script src="js/wishlist.js"></script>
  <script>
    document.addEventListener('DOMContentLoaded', () => {
      const productsPerPage = 9;
      let currentPage = 1;
      let filteredProducts = [...products];
      let totalPages = Math.ceil(filteredProducts.length / productsPerPage);

      const displayProducts = (productsToShow, page = 1) => {
        const productContainer = document.querySelector(".product-item");
        productContainer.innerHTML = "";

        const rowDiv = document.createElement("div");
        rowDiv.classList.add("row", "g-3", "d-flex", "justify-content-evenly");

        const startIndex = (page - 1) * productsPerPage;
        const endIndex = startIndex + productsPerPage;
        const paginatedProducts = productsToShow.slice(startIndex, endIndex);

        paginatedProducts.forEach((product) => {
          const productHTML = `
            <div class="col-md-4 d-flex justify-content-center mb-4">
              <div class="card shadow-sm" id="card-width">
                <img class="product-image img-fluid rounded-top" alt="${product.title}" src="${product.image}" style="width: 100%; height: 200px; object-fit: contain;">
                <div class="card-body">
                  <hr>
                  <h5 class="card-title product-description text-primary font-weight-bold">$${product.price.toFixed(2)}</h5>
                  <h6 class="card-subtitle mb-2 text-muted product-title">${product.title}</h6>
                  <p class="card-text text-muted">${product.description}</p>
                  <div class="d-flex justify-content-between">
                    <a href="#" role="button" class="btn btn-primary card-link flex-grow-1 me-2" onclick="addToCart(${product.id})">Add to Cart</a>
                    <a title="Add to wishlist" href="#" class="btn btn-outline-primary card-link" onclick="addToWishlist(${product.id})">
                      <i class="fa-solid fa-heart"></i>
                    </a>
                  </div>
                </div>
              </div>
            </div>
          `;
          rowDiv.innerHTML += productHTML;
        });

        productContainer.appendChild(rowDiv);
        renderPagination(filteredProducts.length, page);
      };

      const renderPagination = (totalItems, currentPage) => {
        const paginationContainer = document.querySelector(".pagination");
        paginationContainer.innerHTML = `
          <li class="page-item">
            <a class="page-link" href="#" aria-label="Previous" id="prev-page">
              <span aria-hidden="true">&laquo;</span>
            </a>
          </li>
        `;

        totalPages = Math.ceil(totalItems / productsPerPage);
        for (let i = 1; i <= totalPages; i++) {
          const activeClass = i === currentPage ? "active" : "";
          paginationContainer.innerHTML += `
            <li class="page-item ${activeClass}">
              <a class="page-link" href="#">${i}</a>
            </li>
          `;
        }

        paginationContainer.innerHTML += `
          <li class="page-item">
            <a class="page-link" href="#" aria-label="Next" id="next-page">
              <span aria-hidden="true">&raquo;</span>
            </a>
          </li>
        `;
      };

      const handlePaginationClick = (event) => {
        const target = event.target;
        if (target.tagName === "A") {
          event.preventDefault();
          const page = parseInt(target.textContent);
          if (!isNaN(page)) {
            currentPage = page;
          } else if (target.id === "prev-page" && currentPage > 1) {
            currentPage--;
          } else if (target.id === "next-page" && currentPage < totalPages) {
            currentPage++;
          }
          displayProducts(filteredProducts, currentPage);
        }
      };

      document.querySelector(".pagination").addEventListener("click", handlePaginationClick);

      const filterProducts = () => {
        const checkboxes = document.querySelectorAll(".filter:checked");
        const selectedFilters = Array.from(checkboxes).map((checkbox) => checkbox.dataset.filter);
        const searchInput = document.getElementById("search-input")?.value.toLowerCase() || '';

        filteredProducts = [...products]; // Reset to original products list

        if (selectedFilters.length > 0) {
          filteredProducts = filteredProducts.filter((product) => {
            return selectedFilters.includes(product.category) ||
              selectedFilters.some((filter) => {
                if (filter.startsWith("price-")) {
                  const priceRange = filter.split("-")[1];
                  switch (priceRange) {
                    case "1":
                      return product.price >= 30 && product.price <= 50;
                    case "2":
                      return product.price > 50 && product.price <= 100;
                    case "3":
                      return product.price > 100 && product.price <= 300;
                    case "4":
                      return product.price > 300;
                    default:
                      return true;
                  }
                }
                return false;
              });
          });
        }

        if (searchInput) {
          filteredProducts = filteredProducts.filter((product) => {
            return product.title.toLowerCase().includes(searchInput) ||
              product.description.toLowerCase().includes(searchInput);
          });
        }

        totalPages = Math.ceil(filteredProducts.length / productsPerPage);
        currentPage = 1; // Reset to first page after filtering
        displayProducts(filteredProducts, currentPage);
      };

      const checkboxes = document.querySelectorAll(".filter");
      checkboxes.forEach((checkbox) => {
        checkbox.addEventListener("change", filterProducts);
      });

      const searchInput = document.getElementById("search-input");
      if (searchInput) {
        searchInput.addEventListener("input", filterProducts);
      }

      const searchForm = document.getElementById("search-form");
      if (searchForm) {
        searchForm.addEventListener("submit", (event) => {
          event.preventDefault();
          filterProducts();
        });
      }

      displayProducts(filteredProducts, currentPage);
    });
  </script>
</body>

</html>
