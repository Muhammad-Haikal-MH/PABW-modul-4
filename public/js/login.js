const mata = document.querySelector('.mata');
    const password = document.getElementById('password');
    mata.classList.add("bx-eye-alt", "bx-eye-slash");
    mata.addEventListener('click', function() { 
if (password.type === "password") {
    password.type = "text";
    mata.classList.add("bx-eye-slash");
    mata.classList.remove("bx-eye-alt");
} else {
    password.type = "password";
    mata.classList.remove("bx-eye-slash");
    mata.classList.add("bx-eye-alt");
    }
    mata.classList.toggle("bx-eye-slash");
    mata.classList.toggle("bx-eye-alt");
});