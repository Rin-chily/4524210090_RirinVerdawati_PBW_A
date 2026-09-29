<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Selamat Datang di LaraPress</title>

    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        body {
            font-family: Arial, sans-serif;
            background: linear-gradient(135deg, #fff5f8, #ffdce8);
            color: #5f4650;
            min-height: 100vh;
            display: flex;
            justify-content: center;
            align-items: center;
            padding: 30px;
        }

        .container {
            background: rgba(255, 255, 255, 0.96);
            width: 100%;
            max-width: 800px;
            padding: 50px;
            border-radius: 28px;
            box-shadow: 0 15px 40px rgba(220, 130, 160, 0.25);
            border: 1px solid #ffe1ea;
        }

        .hero {
            text-align: center;
            margin-bottom: 40px;
        }

        .icon {
            width: 80px;
            height: 80px;
            margin: 0 auto 20px;
            display: flex;
            justify-content: center;
            align-items: center;
            background: #f8b6cc;
            color: white;
            border-radius: 50%;
            font-size: 36px;
            box-shadow: 0 8px 20px rgba(214, 109, 145, 0.25);
        }

        .hero h1 {
            color: #d66d91;
            font-size: 36px;
            margin-bottom: 15px;
        }

        .hero p {
            color: #755a64;
            font-size: 17px;
            line-height: 1.7;
        }

        .section {
            background: #fff0f5;
            padding: 25px;
            margin-top: 20px;
            border-radius: 18px;
            border-left: 5px solid #f3a7c1;
            transition: 0.3s ease;
        }

        .section:hover {
            transform: translateY(-3px);
            box-shadow: 0 8px 20px rgba(220, 130, 160, 0.15);
        }

        .section h2 {
            color: #c85f83;
            margin-bottom: 10px;
        }

        .section p {
            color: #755a64;
            line-height: 1.6;
            margin-bottom: 18px;
        }

        .button {
            display: inline-block;
            padding: 12px 22px;
            background: #e989aa;
            color: white;
            text-decoration: none;
            border-radius: 12px;
            font-weight: bold;
            transition: 0.3s ease;
            box-shadow: 0 5px 12px rgba(214, 109, 145, 0.2);
        }

        .button:hover {
            background: #d66d91;
            transform: translateY(-2px);
        }

        .contact-button {
            background: #f3a7c1;
        }

        .contact-button:hover {
            background: #e989aa;
        }

        footer {
            text-align: center;
            margin-top: 35px;
            color: #b58d9a;
            font-size: 14px;
        }

        @media (max-width: 600px) {
            body {
                padding: 15px;
            }

            .container {
                padding: 30px 20px;
            }

            .hero h1 {
                font-size: 28px;
            }

            .hero p {
                font-size: 15px;
            }

            .section {
                padding: 20px;
            }

            .button {
                width: 100%;
                text-align: center;
            }
        }
    </style>
</head>

<body>

    <div class="container">

        <div class="hero">
            <div class="icon">♥</div>

            <h1>Selamat Datang di LaraPress</h1>

            <p>
                Ini adalah halaman utama dari aplikasi blog kita.
                Temukan berbagai informasi menarik bersama LaraPress.
            </p>
        </div>

        <div class="section">
            <h2>📖 Tentang Kami</h2>

            <p>
                Ingin mengenal lebih jauh tentang LaraPress?
                Silakan kunjungi halaman Tentang Kami.
            </p>

            <a href="/tentang-kami" class="button">
                Lihat Tentang Kami →
            </a>
        </div>

        <div class="section">
            <h2>📞 Kontak LaraPress</h2>

            <p>
                Silakan hubungi kami jika membutuhkan informasi
                atau ingin menyampaikan sesuatu.
            </p>

            <a href="/kontak" class="button contact-button">
                Hubungi Kami →
            </a>
        </div>

        <footer>
            &copy; 2026 LaraPress. Semua hak dilindungi.
        </footer>

    </div>

</body>
</html>
