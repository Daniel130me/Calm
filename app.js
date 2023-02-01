const products = document.querySelectorAll('.product');
const modal = document.querySelector('#product-details-modal');

products.forEach(product => {
  const buyNowButton = product.querySelector('.buy-now');
  const productId = product.id;

  buyNowButton.addEventListener('click', () => {
    // Change the number of products on a cart
  });

  product.addEventListener('click', () => {
    // Show the modal with product details
    modal.style.display = 'block';

    // Populate the modal with product details
  });
});

modal.addEventListener('click', e => {
  if (e.target === modal) {
    modal.style.display = 'none';
  }
});
