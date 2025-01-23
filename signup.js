document.getElementById('loginForm').addEventListener('submit', function(event) {
    event.preventDefault(); // Prevent form submission
    
    // Clear previous errors
    document.getElementById('usernameError').textContent = '';
    document.getElementById('usernameError').textContent = '';
    document.getElementById('passwordError').textContent = '';

    let isValid = true;

    // Username validation
    const username = document.getElementById('username').value;
    if (!username) {
        document.getElementById('usernameError').textContent = 'Username is required.';
        isValid = false;
    } else if (!/^[^\s@]+@[^\s@]+\.[^\s@]+$/.test(username)) {
        document.getElementById('usernameError').textContent = 'Enter a valid email address.';
        isValid = false;
    }

    // Password validation
    const password = document.getElementById('password').value;
    if (!password) {
        document.getElementById('passwordError').textContent = 'Password is required.';
        isValid = false;
    } else if (password.length < 6) {
        document.getElementById('passwordError').textContent = 'Password must be at least 6 characters.';
        isValid = false;
    }

    if (isValid) {
        alert('Form submitted successfully!');
        // Perform actual form submission logic here
    }
});

const closeButton = document.getElementById('closeButton');
    const loginContainer = document.getElementById('loginContainer');

    closeButton.addEventListener('click', () => {
        loginContainer.style.display = 'none';
    });

