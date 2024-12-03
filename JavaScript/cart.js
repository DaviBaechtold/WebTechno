document.addEventListener('DOMContentLoaded', () => {
    // Handle quantity updates
    document.querySelectorAll('.quantity-input').forEach(input => {
        input.addEventListener('change', function() {
            const id = this.getAttribute('data-id');
            const quantity = parseInt(this.value);

            // Send updated quantity to the server
            updateCart(id, quantity);
        });
    });

    // Handle item removal
    document.querySelectorAll('.remove-button').forEach(button => {
        button.addEventListener('click', function() {
            const id = this.getAttribute('data-id');
            removeItem(id);
        });
    });
});

// Update cart on the server (PHP session)
function updateCart(id, quantity) {
    const formData = new FormData();
    formData.append('action', 'update');
    formData.append('id', id);
    formData.append('quantity', quantity);

    fetch('cart.php', {
        method: 'POST',
        body: formData
    })
    .then(response => response.json())
    .then(data => {
        // Update total price and the cart table
        document.getElementById('totalPrice').innerText = data.total + ' €';
        location.reload();  // Reload page to reflect changes
    });
}

// Remove item from cart
function removeItem(id) {
    const formData = new FormData();
    formData.append('action', 'remove');
    formData.append('id', id);

    fetch('cart.php', {
        method: 'POST',
        body: formData
    })
    .then(response => response.json())
    .then(data => {
        // Update total price and the cart table
        document.getElementById('totalPrice').innerText = data.total + ' €';
        location.reload();  // Reload page to reflect changes
    });
}
