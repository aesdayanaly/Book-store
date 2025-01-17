document.addEventListener('DOMContentLoaded', function () {

  function openCheckout() {
    document.getElementById('checkoutModal').style.display = 'flex';
  }

  function closeCheckout() {
    document.getElementById('checkoutModal').style.display = 'none';
  }

  const checkoutForm = document.getElementById('checkoutForm');
  if (checkoutForm) {
    checkoutForm.addEventListener('submit', function (e) {
      e.preventDefault(); 

      const items = document.querySelectorAll('.cart-item');
      let orderDetails = '----- Receipt -----\n';
      let total = 0;

      items.forEach(function (item) {
        const name = item.querySelector('.item-name').textContent;
        const price = parseFloat(item.querySelector('.price').textContent.replace('$', ''));
        const quantity = parseInt(item.querySelector('.quantity-input').value);
        const lineTotal = price * quantity;

        orderDetails += `${name} x ${quantity} - $${lineTotal.toFixed(2)}\n`;
        total += lineTotal;
      });

      orderDetails += `\nTotal: $${total.toFixed(2)}\n`;

      const fullName = document.getElementById('fullName').value;
      const contactNumber = document.getElementById('contactNumber').value;
      const shippingAddress = document.getElementById('shippingAddress').value;

      orderDetails += `\nCustomer Details:\nName: ${fullName}\nContact: ${contactNumber}\nShipping Address: ${shippingAddress}\n`;

      orderDetails += `\nThank you for your purchase!`;

      const blob = new Blob([orderDetails], { type: 'text/plain' });

      const link = document.createElement('a');
      link.href = URL.createObjectURL(blob);
      link.download = 'confirmation.txt';

      link.click();

      closeCheckout();
      alert('Payment Successful! Your receipt has been generated.');

      window.location.href = 'confirmation.html';
    });
  }

  const cartItems = document.querySelectorAll('.cart-item');
  cartItems.forEach(item => {
    const minusBtn = item.querySelector('.minus');
    const plusBtn = item.querySelector('.plus');
    const quantityInput = item.querySelector('.quantity-input');

    minusBtn.addEventListener('click', () => {
      let quantity = parseInt(quantityInput.value);
      if (quantity > 1) {
        quantityInput.value = quantity - 1;
      }
    });

    plusBtn.addEventListener('click', () => {
      let quantity = parseInt(quantityInput.value);
      quantityInput.value = quantity + 1;
    });

    const removeBtn = item.querySelector('.remove-item');
    removeBtn.addEventListener('click', () => {
      item.remove();
      updateTotal();
    });
  });

  function updateTotal() {
    const totalElement = document.querySelector('.total-price');
    let total = 0;
    const items = document.querySelectorAll('.cart-item');
    items.forEach(item => {
      const price = parseFloat(item.querySelector('.price').textContent.replace('$', ''));
      const quantity = parseInt(item.querySelector('.quantity-input').value);
      total += price * quantity;
    });
    totalElement.textContent = `$${total.toFixed(2)}`;
  }

  const checkoutBtn = document.querySelector('.checkout-btn');
  if (checkoutBtn) {
    checkoutBtn.addEventListener('click', function () {
      const cartItems = document.querySelectorAll('.cart-item');
      if (cartItems.length === 0) {
        alert('Your cart is empty! Please add items to your cart before proceeding.');
      } else {
        openCheckout();
      }
    });
  }
});
