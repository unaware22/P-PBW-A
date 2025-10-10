<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Selamat Datang di LaraPress</title>
    <style>
        body {
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
            background: linear-gradient(135deg, #e0eafc, #cfdef3);
            margin: 0;
            padding: 0;
            display: flex;
            flex-direction: column;
            justify-content: center;
            align-items: center;
            height: 100vh;
            color: #222;
        }

        h1 {
            font-size: 2.2em;
            color: #2c3e50;
            margin-bottom: 10px;
            text-shadow: 1px 1px 3px rgba(0,0,0,0.1);
        }

        p {
            font-size: 1.1em;
            color: #555;
            margin-bottom: 30px;
        }

        .buttons {
            display: flex;
            gap: 15px;
            flex-wrap: wrap;
            justify-content: center;
        }

        a {
            text-decoration: none;
            color: white;
            padding: 10px 25px;
            border-radius: 6px;
            transition: 0.3s ease;
            font-weight: 600;
            box-shadow: 0 3px 8px rgba(0,0,0,0.1);
        }

        a:hover {
            transform: translateY(-2px);
            box-shadow: 0 5px 10px rgba(0,0,0,0.2);
        }

        .btn-login { background: #3498db; }
        .btn-register { background: #2ecc71; }
        .btn-contact { background: #f39c12; }
        .btn-about { background: #9b59b6; }

        .btn-login:hover { background: #2980b9; }
        .btn-register:hover { background: #27ae60; }
        .btn-contact:hover { background: #e67e22; }
        .btn-about:hover { background: #8e44ad; }

        footer {
            position: absolute;
            bottom: 10px;
            font-size: 0.9em;
            color: #888;
        }
    </style>
</head>
<body>
    <h1>Selamat Datang di Blog <span style="color:#3498db;">LaraPress</span></h1>
    <p>Ini adalah halaman utama dari aplikasi blog kita.</p>

    <div class="buttons">
        <a href="/login" class="btn-login">Login</a>
        <a href="/register" class="btn-register">Daftar</a>
        <a href="/kontak" class="btn-contact">Kontak</a>
        <a href="/about" class="btn-about">Tentang</a>
    </div>

    <footer>
        &copy; <?php echo date('Y'); ?> LaraPress — Dibuat dengan ❤️ di Xampp
    </footer>
</body>
</html>
