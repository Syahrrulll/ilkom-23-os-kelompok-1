<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Docker Website Kelompok 1</title>
    <style>
        /* Reset and Base Styles */
        body {
            margin: 0;
            padding: 0;
            font-family: 'Arial', sans-serif;
            background-color: #ffffff;
            color: #333;
            display: flex;
            flex-direction: column;
            align-items: center;
            min-height: 100vh;
        }

        header {
            width: 100%;
            padding: 20px;
            background-color: #4CAF50;
            color: white;
            text-align: center;
            animation: slideDown 1s ease-out;
        }

        /* Main Content */
        .container {
            text-align: center;
            padding: 20px;
            animation: fadeIn 2s ease-in-out;
        }

        h1 {
            font-size: 3rem;
            margin-bottom: 10px;
            animation: popIn 1.5s ease-out;
        }

        p {
            font-size: 1.2rem;
            margin-bottom: 30px;
            animation: fadeInUp 2s ease-in-out;
        }

        /* Features Section */
        .features {
            display: flex;
            justify-content: center;
            flex-wrap: wrap;
            gap: 20px;
            margin-top: 20px;
        }

        .feature {
            background-color: #f9f9f9;
            border: 1px solid #ddd;
            border-radius: 10px;
            padding: 20px;
            width: 250px;
            text-align: center;
            animation: slideInFromLeft 2s ease-in-out;
            box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
            transition: transform 0.3s ease, box-shadow 0.3s ease;
        }

        .feature:hover {
            transform: translateY(-10px);
            box-shadow: 0 6px 12px rgba(0, 0, 0, 0.2);
        }

        .feature i {
            font-size: 2.5rem;
            color: #4CAF50;
            margin-bottom: 10px;
        }

        /* Button */
        .button {
            background-color: #4CAF50;
            color: white;
            padding: 15px 30px;
            border: none;
            border-radius: 25px;
            cursor: pointer;
            font-size: 1rem;
            text-transform: uppercase;
            font-weight: bold;
            animation: popIn 3s ease-out;
            transition: transform 0.3s ease, background-color 0.3s ease;
        }

        .button:hover {
            background-color: #81c784;
            transform: scale(1.1);
        }

        /* Footer */
        footer {
            width: 100%;
            padding: 10px 0;
            background-color: #f4f4f4;
            text-align: center;
            font-size: 0.9rem;
            color: #555;
            border-top: 1px solid #ddd;
            animation: fadeIn 4s ease-in-out;
        }

        footer a {
            color: #4CAF50;
            text-decoration: none;
        }

        footer a:hover {
            text-decoration: underline;
        }

        /* Animations */
        @keyframes slideDown {
            from {
                transform: translateY(-50px);
                opacity: 0;
            }
            to {
                transform: translateY(0);
                opacity: 1;
            }
        }

        @keyframes fadeIn {
            from {
                opacity: 0;
            }
            to {
                opacity: 1;
            }
        }

        @keyframes popIn {
            from {
                transform: scale(0.5);
                opacity: 0;
            }
            to {
                transform: scale(1);
                opacity: 1;
            }
        }

        @keyframes fadeInUp {
            from {
                transform: translateY(20px);
                opacity: 0;
            }
            to {
                transform: translateY(0);
                opacity: 1;
            }
        }

        @keyframes slideInFromLeft {
            from {
                transform: translateX(-50px);
                opacity: 0;
            }
            to {
                transform: translateX(0);
                opacity: 1;
            }
        }
    </style>
</head>
<body>
    <header>
        <h1>Kelompok 1 - Docker Website</h1>
    </header>
    <div class="container">
        <h1>Selamat Datang</h1>
        <p>Website ini menunjukkan kemampuan Docker untuk menjalankan aplikasi PHP modern dengan animasi dan elemen interaktif.</p>
        <div class="features">
            <div class="feature">
                <i>&#128640;</i>
                <h3>Kinerja Cepat</h3>
                <p>Docker membantu meningkatkan kecepatan deployment.</p>
            </div>
            <div class="feature">
                <i>&#128736;</i>
                <h3>Mudah Dikelola</h3>
                <p>Proyek dapat dijalankan secara konsisten di berbagai mesin.</p>
            </div>
            <div class="feature">
                <i>&#128273;</i>
                <h3>Aman</h3>
                <p>Lingkungan terisolasi menjaga keamanan aplikasi Anda.</p>
            </div>
        </div>
        <button class="button" onclick="alert('Terima kasih telah mengunjungi!')">Pelajari Lebih Lanjut</button>
    </div>
    <footer>
        &copy; 2024 Kelompok 1. Dibuat dengan ❤️ oleh <a href="#">Tim Developer</a>.
    </footer>
</body>
</html>
