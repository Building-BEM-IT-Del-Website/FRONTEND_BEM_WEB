
        function togglePassword() {
            const passwordInput = document.getElementById('password');
            const eyeIcon = document.getElementById('eyeIcon');
            if (passwordInput.type === 'password') {
                passwordInput.type = 'text';
                eyeIcon.classList.replace('fa-eye', 'fa-eye-slash');
            } else {
                passwordInput.type = 'password';
                eyeIcon.classList.replace('fa-eye-slash', 'fa-eye');
            }
        }

        document.getElementById('loginForm').addEventListener('submit', function(e) {
            e.preventDefault();
            const username = document.getElementById('username').value.trim();
            const password = document.getElementById('password').value.trim();
            const loginCard = document.getElementById('loginCard');

            if (!username || !password) {
                loginCard.classList.add("shake");
                setTimeout(() => loginCard.classList.remove("shake"), 500);
                alert("Please fill in all fields!");
                return;
            }

            alert("This is just a template - no actual login functionality implemented");
        });
