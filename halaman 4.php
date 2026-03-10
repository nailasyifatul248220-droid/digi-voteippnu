<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>E-Voting - Kandidat 1</title>
    <style>
        /* 1. Latar Belakang (Warna Hijau Toska Lembut) */
        body {
            margin: 0;
            padding: 0;
            font-family: 'Arial', sans-serif;
            background-color: #89bfa6; /* Warna khas di foto */
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
        }

        /* 2. Container Utama */
        .container {
            text-align: center;
            width: 100%;
        }

        .label-kandidat {
            font-weight: bold;
            font-size: 20px;
            letter-spacing: 2px;
            margin-bottom: 20px;
            color: #222;
        }

        /* 3. Kotak Pop-up (Modal Content) */
        .modal-box {
            background-color: #ffffff;
            width: 400px; /* Lebar kotak sesuai foto */
            margin: 0 auto;
            padding: 35px 20px;
            border-radius: 15px; /* Sudut sangat bulat */
            box-shadow: 0 8px 30px rgba(0,0,0,0.15); /* Bayangan halus */
            position: relative;
        }

        /* 4. Teks Pertanyaan */
        .modal-box p {
            font-size: 15px;
            color: #333;
            line-height: 1.6;
            margin: 0 0 30px 0;
            font-weight: 500;
        }

        /* 5. Grup Tombol */
        .button-group {
            display: flex;
            justify-content: center;
            gap: 25px;
        }

        /* 6. Gaya Tombol (Abu-abu Terang dengan Ikon) */
        .btn {
            background-color: #f0f0f0;
            border: 1px solid #dcdcdc;
            border-radius: 6px;
            padding: 8px 20px;
            display: flex;
            align-items: center;
            gap: 8px;
            cursor: pointer;
            font-size: 14px;
            font-weight: bold;
            color: #444;
            transition: 0.2s;
            box-shadow: 0 2px 4px rgba(0,0,0,0.05);
        }

        .btn:hover {
            background-color: #e8e8e8;
            border-color: #bbb;
        }

        /* Warna Ikon */
        .icon-check { color: #2ecc71; font-size: 16px; } /* Hijau */
        .icon-close { color: #e74c3c; font-size: 16px; } /* Merah */

        /* Segitiga Logo Hijau di Pojok (Opsional, sesuai gambar) */
        .corner-logo {
            position: absolute;
            top: 20px;
            right: 20px;
            width: 30px;
            height: 30px;
            background-color: #2a5d44;
            clip-path: polygon(50% 0%, 0% 100%, 100% 100%);
        }
    </style>
</head>
<body>

    <div class="container">
        <div class="label-kandidat">KANDIDAT 1</div>

        <div class="modal-box">
            <!-- Teks persis seperti di gambar -->
            <p>
                Yakin dengan pilihan anda?<br>
                Setelah klik "Simpan", pilihan anda tidak dapat diubah.
            </p>

            <div class="button-group">
                <!-- Tombol Simpan -->
                <button class="btn" onclick="handleSimpan()">
                    <span class="icon-check">✔</span> Simpan
                </button>

                <!-- Tombol Batal -->
                <button class="btn" onclick="handleBatal()">
                    <span class="icon-close">✖</span> Batal
                </button>
            </div>
        </div>
    </div>

    <script>
        function handleSimpan() {
            // Efek klik simpan
            console.log("Data dikirim...");
            alert("Pilihan Anda Terkirim!");
        }

        function handleBatal() {
            // Efek klik batal
            alert("Pilihan dibatalkan.");
        }
    </script>

</body>
</html>