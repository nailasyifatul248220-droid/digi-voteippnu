<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Konfirmasi Pilihan - E-Voting</title>
    <style>
        /* 1. Latar Belakang dengan Tekstur Batik */
        body {
            margin: 0;
            padding: 0;
            font-family: 'Segoe UI', Arial, sans-serif;
            /* Warna dasar hijau toska dari gambar */
            background-color: #8dbca4; 
            /* Menggunakan pola batik halus sebagai overlay */
            background-image: url('https://www.transparenttextures.com');
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
        }

        .container {
            text-align: center;
            width: 100%;
            max-width: 500px;
        }

        /* Teks KANDIDAT 1 di atas kotak */
        .label-kandidat {
            font-weight: bold;
            font-size: 22px;
            letter-spacing: 2px;
            margin-bottom: 25px;
            color: #222;
            text-transform: uppercase;
        }

        /* 2. Kotak Modal (Putih Bersih) */
        .modal-box {
            background-color: #ffffff;
            width: 85%;
            margin: 0 auto;
            padding: 45px 25px;
            border-radius: 15px;
            /* Bayangan lembut agar terlihat melayang (depth) */
            box-shadow: 0 15px 35px rgba(0,0,0,0.1);
        }

        /* 3. Teks Pesan */
        .modal-box p {
            font-size: 16px;
            color: #333;
            line-height: 1.5;
            margin: 0 0 35px 0;
            font-weight: 500;
        }

        /* 4. Area Tombol */
        .button-group {
            display: flex;
            justify-content: center;
            gap: 20px;
        }

        /* 5. Gaya Tombol (Persis seperti UI di gambar) */
        .btn {
            background-color: #f2f2f2;
            border: 1px solid #d1d1d1;
            border-radius: 8px;
            padding: 10px 25px;
            display: flex;
            align-items: center;
            gap: 10px;
            cursor: pointer;
            font-size: 15px;
            font-weight: 600;
            color: #444;
            transition: all 0.2s ease;
        }

        .btn:hover {
            background-color: #ffffff;
            border-color: #999;
            box-shadow: 0 2px 8px rgba(0,0,0,0.05);
        }

        /* Warna Ikon di dalam Tombol */
        .icon-check { color: #27ae60; font-size: 18px; font-weight: bold; }
        .icon-close { color: #eb4d4b; font-size: 18px; font-weight: bold; }

    </style>
</head>
<body>

    <div class="container">
        <div class="label-kandidat">KANDIDAT 1</div>

        <div class="modal-box">
            <!-- Pesan Konfirmasi -->
            <p>
                Yakin dengan pilihan anda?<br>
                Setelah klik "Simpan", pilihan anda tidak dapat diubah.
            </p>

            <div class="button-group">
                <!-- Tombol Simpan -->
                <button class="btn" onclick="alert('Pilihan Berhasil Disimpan!')">
                    <span class="icon-check">✔</span> Simpan
                </button>

                <!-- Tombol Batal -->
                <button class="btn" onclick="alert('Aksi Dibatalkan')">
                    <span class="icon-close">✖</span> Batal
                </button>
            </div>
        </div>
    </div>

</body>
</html>