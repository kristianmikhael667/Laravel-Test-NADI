<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Nasari | Administrator</title>

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=figtree:400,600&display=swap" rel="stylesheet" />
    <link rel="stylesheet" href="css/custome.css">
    <link rel="icon" href="{{ asset('logo/nadi.png') }}" type="image/png" sizes="16x16">
    <script src="https://unpkg.com/feather-icons"></script>

</head>

<body class="antialiased">
    <video autoplay loop muted>
        <source src="video/background_video_new.mp4" type="video/mp4">
        Your browser does not support the video tag.
    </video>

    <div class="login-container">
        <h2>Silahkan Login</h2>
        <x-validation-errors class="mb-4" />
        @if (session('status'))
            <div class="mb-4 font-medium text-sm text-green-600">
                {{ session('status') }}
            </div>
        @endif
        <form action="{{ route('login') }}" method="post" class="login-form">
            @csrf
            <div class="input-group">
                <i data-feather="mail"></i>
                <x-input type="email" id="email" name="email" placeholder="Masukkan Email" :value="old('email')"
                    required />
            </div>

            <div class="input-group">
                <i data-feather="lock"></i>
                <input type="password" id="password" name="password" placeholder="Masukkan Password"
                    autocomplete="current-password" required>
            </div>

            <button type="submit">Login</button>
        </form>
    </div>
</body>
<script>
    document.addEventListener("DOMContentLoaded", function() {
        feather.replace();
    });
</script>

</html>
