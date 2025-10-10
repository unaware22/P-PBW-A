<?php
// kontak.php
?>
<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Kontak Kami - LaraPress</title>
    <style>
        body {
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
            margin: 0;
            padding: 0;
            background: linear-gradient(135deg, #667eea, #764ba2);
            color: #fff;
            min-height: 100vh;
            display: flex;
            flex-direction: column;
        }

        /* Navbar */
        nav {
            display: flex;
            justify-content: center;
            gap: 1rem;
            padding: 1rem;
            background: rgba(255, 255, 255, 0.1);
            backdrop-filter: blur(10px);
            border-bottom: 1px solid rgba(255, 255, 255, 0.2);
        }

        nav a {
            color: #fff;
            text-decoration: none;
            padding: 0.6rem 1.4rem;
            border-radius: 10px;
            transition: 0.3s;
            font-weight: 500;
        }

        nav a:hover {
            background: rgba(255, 255, 255, 0.25);
            transform: translateY(-2px);
        }

        header {
            text-align: center;
            padding: 3rem 1rem 1rem;
        }

        header h1 {
            font-size: 2.4rem;
            margin: 0;
        }

        header p {
            font-size: 1.1rem;
            opacity: 0.9;
        }

        .container {
            flex: 1;
            max-width: 1000px;
            margin: 0 auto 3rem;
            padding: 2rem;
        }

        .contact-cards {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(260px, 1fr));
            gap: 2rem;
            margin-top: 2rem;
        }

        .card {
            background: linear-gradient(135deg, rgba(255,255,255,0.1), rgba(255,255,255,0.05));
            backdrop-filter: blur(12px);
            padding: 2rem;
            border-radius: 18px;
            text-align: center;
            transition: 0.3s;
            border: 1px solid rgba(255,255,255,0.2);
        }

        .card:hover {
            transform: translateY(-6px);
            box-shadow: 0 12px 25px rgba(0,0,0,0.25);
        }

        .icon {
            font-size: 2.5rem;
            margin-bottom: 1rem;
            color: #ffe97f;
        }

        .card h3 {
            margin: 0.5rem 0;
            font-size: 1.4rem;
            color: #fff;
        }

        .card p {
            margin: 0;
            font-size: 1rem;
            color: #ddd;
        }

        footer {
            text-align: center;
            padding: 1.2rem;
            background: rgba(0,0,0,0.3);
            color: #eee;
            font-size: 0.9rem;
        }
    </style>
    <script src="https://kit.fontawesome.com/yourkit.js" crossorigin="anonymous"></script>
</head>
<body>

<!-- Navbar -->
<nav>
    <a href="/">Home</a>
    <a href="/blog">Blog</a>
    <a href="/tentang-kami">Tentang</a>
    <a href="/kontak-kami">Kontak</a>
</nav>

<header>
    <h1>Kontak Kami</h1>
    <p>Butuh bantuan? Silakan hubungi kami melalui kontak berikut.</p>
</header>

<div class="container">
    <div class="contact-cards">
        <div class="card">
            <div class="icon"><i class="fas fa-envelope"></i></div>
            <h3>Email</h3>
            <p>support@contoh.com</p>
        </div>
        <div class="card">
            <div class="icon"><i class="fas fa-phone-alt"></i></div>
            <h3>Telepon</h3>
            <p>+62 812-3456-7890</p>
        </div>
        <div class="card">
            <div class="icon"><i class="fas fa-map-marker-alt"></i></div>
            <h3>Alamat</h3>
            <p>Jl. Mawar No. 45, Jakarta</p>
        </div>
    </div>
</div>

<footer>
    &copy; <?= date("Y") ?> LaraPress. Semua Hak Dilindungi.
</footer>

</body>
</html>
