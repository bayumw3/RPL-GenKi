<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href='https://fonts.googleapis.com/css?family=Nunito' rel='stylesheet'>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">

    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons/font/bootstrap-icons.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="{{ asset('css/login.css') }}">
    <title>Sign Up</title>
</head>
<body>
    <div class="container">
        <div class="left-login" style="background-image: url('asst/bg-login.png'); background-size: cover; background-position: center;">
            <div class="left-middle">
                <div class="left">
                    <h1>Sign up to</h1>
                    <h2>GenKi Website</h2>
                    <div class="combine">
                        <p>If you already have an account register</p>
                        <p>You can <a href="{{ route('login') }}">Login here!</a></p>
                    </div>
                </div>
                <img src="asst/login-man.png" alt="">
            </div>
        </div>
        <div class="right-login">
            <h1>Sign up</h1>
            <form method="POST" action="{{ route('register') }}">
                @csrf
                <div class="form-group">
                    <input type="text" name="name" class="inputan" placeholder="Nama Lengkap" value="{{ old('name') }}" required>
                    @error('name')<span class="text-danger">{{ $message }}</span>@enderror
                </div>
                <div class="form-group">
                    <input type="text" name="username" class="inputan" placeholder="Username" value="{{ old('username') }}" required>
                    @error('username')<span class="text-danger">{{ $message }}</span>@enderror
                </div>
                <div class="form-group">
                    <input type="email" name="email" class="inputan" placeholder="Email" value="{{ old('email') }}" required>
                    @error('email')<span class="text-danger">{{ $message }}</span>@enderror
                </div>
                <div class="form-group">
                    <input type="text" name="contact_number" class="inputan" placeholder="Nomor Kontak" value="{{ old('contact_number') }}" required>
                    @error('contact_number')<span class="text-danger">{{ $message }}</span>@enderror
                </div>
                <div class="form-group">
                    <div class="password-wrapper">
                        <input type="password" name="password" class="inputan" id="exampleInputPassword1" placeholder="Password" required>
                        <i class="fas fa-eye" id="togglePassword"></i> <!-- Icon toggle password -->
                    </div>
                    @error('password')<span class="text-danger">{{ $message }}</span>@enderror
                </div>
                <div class="form-group">
                    <div class="password-wrapper">
                        <input type="password" name="password_confirmation" class="inputan" placeholder="Konfirmasi Password" required>
                        <i class="fas fa-eye" id="togglePassword2"></i> <!-- Icon toggle confirm password -->
                    </div>
                </div>
                <button type="submit" class="btn">Register</button>
            </form>
        </div>
    </div>

    <script>
        // Menambahkan event listener untuk toggle password
        const togglePassword = document.getElementById('togglePassword');
        const passwordInput = document.getElementById('exampleInputPassword1');
        const togglePassword2 = document.getElementById('togglePassword2');
        const passwordInput2 = document.querySelector('input[name="password_confirmation"]');

        togglePassword.addEventListener('click', function() {
            const type = passwordInput.type === 'password' ? 'text' : 'password';
            passwordInput.type = type;
            this.classList.toggle('fa-eye-slash');
        });

        togglePassword2.addEventListener('click', function() {
            const type = passwordInput2.type === 'password' ? 'text' : 'password';
            passwordInput2.type = type;
            this.classList.toggle('fa-eye-slash');
        });
    </script>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
