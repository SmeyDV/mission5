// Display cart items on the page
const displayCartItems = () => {
  const cart = JSON.parse(localStorage.getItem("cart")) || [];
  const cartItemsContainer = document.getElementById("cart-items");
  const emptyCartMessage = document.getElementById("empty-cart-message");
  const checkoutButtonContainer = document.querySelector(".checkout-button-container");

  cartItemsContainer.innerHTML = "";

  let totalPrice = 0;

  if (cart.length === 0) {
    emptyCartMessage.style.display = 'block';
    checkoutButtonContainer.style.display = 'none';
  } else {
    emptyCartMessage.style.display = 'none';
    checkoutButtonContainer.style.display = 'flex';

    cart.forEach((item, index) => {
      // Ensure quantity is a number and default to 1 if not set
      const itemQuantity = Number(item.quantity) || 1;
      const itemTotalPrice = item.price * itemQuantity;
      
      const itemHTML = `
        <div class="cart-item card mb-3">
          <div class="row g-0">
            <div class="col-md-4">
              <img src="${item.image}" class="img-fluid rounded-start" alt="${item.title}">
            </div>
            <div class="col-md-8">
              <div class="card-body d-flex justify-content-between align-items-center">
                <div>
                  <h5 class="card-title">${item.title}</h5>
                  <p class="card-text">${item.description}</p>
                  <p class="card-text"><small class="text-muted">$${item.price.toFixed(2)}</small></p>
                  <div class="quantity-control">
                    <button class="btn btn-sm btn-secondary" onclick="decreaseQuantity(${index})">-</button>
                    <input type="number" value="${itemQuantity}" min="1" readonly class="quantity-input">
                    <button class="btn btn-sm btn-secondary" onclick="increaseQuantity(${index})">+</button>
                  </div>
                </div>
                <i class="fas fa-trash remove-btn" onclick="removeFromCart(${index})"></i>
              </div>
            </div>
          </div>
        </div>
      `;
      cartItemsContainer.innerHTML += itemHTML;
      totalPrice += itemTotalPrice;
    });
  }

  // Ensure total price is a number and display it correctly
  document.getElementById("total-price").textContent = totalPrice.toFixed(2);
};

// Increase quantity of a cart item
const increaseQuantity = (index) => {
  let cart = JSON.parse(localStorage.getItem("cart")) || [];
  cart[index].quantity += 1;
  localStorage.setItem("cart", JSON.stringify(cart));
  displayCartItems();
  updateCartCount();
};

// Decrease quantity of a cart item
const decreaseQuantity = (index) => {
  let cart = JSON.parse(localStorage.getItem("cart")) || [];
  if (cart[index].quantity > 1) {
    cart[index].quantity -= 1;
  } else {
    cart.splice(index, 1); // Remove the item if quantity drops to 0
  }
  localStorage.setItem("cart", JSON.stringify(cart));
  displayCartItems();
  updateCartCount();
};

// Remove a cart item
const removeFromCart = (index) => {
  let cart = JSON.parse(localStorage.getItem("cart")) || [];
  cart.splice(index, 1);
  localStorage.setItem("cart", JSON.stringify(cart));
  displayCartItems();
  updateCartCount();
};

// Update cart count in the navbar
const updateCartCount = () => {
  const cart = JSON.parse(localStorage.getItem("cart")) || [];
  document.getElementById("cart-count").textContent = cart.length;
};

// Load cart items and update cart count on page load
document.addEventListener("DOMContentLoaded", () => {
  displayCartItems();
  updateCartCount();
});
