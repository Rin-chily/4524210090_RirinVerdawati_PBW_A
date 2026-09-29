<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Kontak - LaraPress</title>

    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        body {
            font-family: Arial, sans-serif;
            background: linear-gradient(135deg, #fff5f8, #ffdce8);
            min-height: 100vh;
            display: flex;
            justify-content: center;
            align-items: center;
            padding: 30px;
            color: #5f4650;
        }

        .container {
            background: rgba(255, 255, 255, 0.96);
            padding: 45px;
            width: 100%;
            max-width: 550px;
            text-align: center;
            border-radius: 28px;
            box-shadow: 0 15px 40px rgba(220, 130, 160, 0.25);
            border: 1px solid #ffe1ea;
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

        h1 {
            color: #d66d91;
            margin-bottom: 15px;
            font-size: 34px;
        }

        .intro {
            color: #755a64;
            line-height: 1.7;
            font-size: 16px;
            margin-bottom: 25px;
        }

        .kontak {
            background: #fff0f5;
            padding: 22px;
            margin: 25px 0;
            border-radius: 18px;
            border-left: 5px solid #f3a7c1;
            text-align: left;
        }

        .contact-item {
            display: flex;
            align-items: center;
            gap: 12px;
            padding: 12px 0;
            color: #755a64;
        }

        .contact-item + .contact-item {
            border-top: 1px solid #f8d8e3;
        }

        .contact-icon {
            width: 40px;
            height: 40px;
            display: flex;
            justify-content: center;
            align-items: center;
            background: #f8b6cc;
            color: white;
            border-radius: 10px;
            font-size: 18px;
        }

        .contact-info strong {
            display: block;
            color: #c85f83;
            margin-bottom: 3px;
        }

        .contact-info span {
            font-size: 14px;
            color: #806771;
        }

        .button {
            display: inline-block;
            padding: 13px 24px;
            background: #e989aa;
            color: white;
            text-decoration: none;
            border-radius: 12px;
            font-weight: bold;
            box-shadow: 0 5px 12px rgba(214, 109, 145, 0.2);
            transition: 0.3s ease;
        }

        .button:hover {
            background: #d66d91;
            transform: translateY(-2px);
        }

        footer {
            margin-top: 30px;
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

            h1 {
                font-size: 28px;
            }

            .button {
                width: 100%;
            }
        }
    </style>
</head>

<body>

    <div class="container">

        <div class="icon">☎</div>

        <h1>Kontak LaraPress</h1>

        <p class="intro">
            Silakan hubungi kami jika memiliki pertanyaan,
            saran, atau ingin menyampaikan sesuatu.
        </p>

        <div class="kontak">

            <div class="contact-item">
                <div class="contact-icon">✉</div>

                <div class="contact-info">
                    <strong>Email</strong>
                    <span>info@larapress.com</span>
                </div>
            </div>

            <div class="contact-item">
                <div class="contact-icon">☎</div>

                <div class="contact-info">
                    <strong>Telepon</strong>
                    <span>0812-3456-7890</span>
                </div>
            </div>

        </div>

        <a href="/" class="button">
            ← Kembali ke Beranda
        </a>

        <footer>
            &copy; 2026 LaraPress. Semua hak dilindungi.
        </footer>

    </div>

</body>
</html>
