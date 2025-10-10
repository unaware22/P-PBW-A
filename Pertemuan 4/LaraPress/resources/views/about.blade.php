<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tentang Kami - LaraPress</title>
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
            font-size: 2em;
            color: #2c3e50;
            margin-bottom: 15px;
            text-shadow: 1px 1px 3px rgba(0,0,0,0.1);
        }

        p {
            font-size: 1.1em;
            color: #555;
            width: 70%;
            max-width: 600px;
            text-align: center;
            line-height: 1.6;
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

        .btn-home { background: #3498db; }
        .btn-contact { background: #f39c12; }

        .btn-home:hover { background: #2980b9; }
        .btn-contact:hover { background: #e67e22; }

        footer {
            position: absolute;
            bottom: 10px;
            font-size: 0.9em;
            color: #888;
        }
    </style>
</head>
<body>
    <h1>Tentang <span style="color:#3498db;">LaraPress</span></h1>
    <p>
        LaraPress adalah sebuah proyek blog sederhana yang dibuat untuk mempelajari
        dasar-dasar framework <strong>Laravel 12</strong>.  
        Tujuan utama proyek ini adalah membantu mahasiswa memahami konsep MVC, routing, dan templating dalam Laravel dengan cara yang mudah dan menyenangkan.
    </p>

    <div class="buttons">
        <a href="/" class="btn-home">🏠 Halaman Utama</a>
        <a href="/kontak" class="btn-contact">📩 Hubungi Kami</a>
    </div>

    <footer>
        &copy; <?php echo date('Y'); ?> LaraPress — Dibuat dengan ❤️ di Laragon
    </footer>
</body>
</html>
