<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700&display=swap" rel="stylesheet">
    <title>Document</title>
    <style>
        body {
            font-family: 'Poppins';
            background-color: #F5F5DC;
            margin: 0;
            padding: 0;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
            /* overflow: hidden; */
        }

        .keranjang {
            background-color: #fff;
            padding: 30px;
            border-radius: 15px;
            box-shadow: 0 4px 12px rgba(0, 0, 0, 0.1);
            text-align: center;
            max-width: 500px;
            width: 100%;
        }

        .keranjang h4, .keranjang h3, .keranjang h5 {
            margin: 15px 0;
            color: #333;
        }

        .keranjang h1 {
            margin: 20px 0;
            color: #ff3333;
            font-size: 28px;
            font-weight: bold;
        }

        .keranjang img {
            max-width: 80px;
            margin: 20px 0;
        }

        form {
            margin-top: 20px;
        }

        label {
            display: block;
            font-size: 16px;
            font-weight: 500;
            margin-bottom: 10px;
        }

        input[type="file"] {
            padding: 10px;
            background-color: #ff9d02;
            border: 2px dashed #F5F5DC;
            border-radius: 8px;
            width: 100%;
            cursor: pointer;
            transition: background-color 0.3s ease;
            margin-bottom: 20px;
        }

        input[type="file"]:hover {
            background-color: #F5F5DC;
            border: 2px dashed #ff9d02;
        }

        button {
            background-color: #ff9d02;
            color: black;
            font-family: 'Poppins';
            border: none;
            padding: 12px 20px;
            border-radius: 5px;
            font-size: 16px;
            cursor: pointer;
            transition: background-color 0.3s ease;
            margin-top: 10px;
        }

        button:hover {
            background-color: #F5F5DC;
        }

        .remove {
            background-color: #ff9d02;
            font-family: 'Poppins';
            margin-top: 10px;
            margin-left: 5px;
        }

        .remove:hover {
            background-color: #F5F5DC;
        }

        .custom-alert, .custom-alert-overlay {
            display: none;
        }

        .custom-alert {
            position: fixed;
            top: 50%;
            left: 50%;
            transform: translate(-50%, -50%);
            background-color: #fff;
            padding: 20px;
            border-radius: 10px;
            box-shadow: 0 4px 12px rgba(0, 0, 0, 0.1);
            z-index: 1000;
            text-align: center;
            animation: fadeIn 0.5s ease-in-out;
        }

        .custom-alert p {
            font-size: 18px;
            font-weight: bold;
            color: #333;
        }

        .close-alert {
            position: absolute;
            top: 10px;
            right: 15px;
            font-size: 24px;
            color: #999;
            cursor: pointer;
        }

        .close-alert:hover {
            color: #333;
        }

        .custom-alert-overlay {
            position: fixed;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background: rgba(0, 0, 0, 0.5);
            z-index: 999;
        }

        /* Fade-in Animation */
        @keyframes fadeIn {
            from { opacity: 0; }
            to { opacity: 1; }
        }

        /* Media Query */
        @media (max-width: 600px) {
            .keranjang {
                padding: 20px;
            }

            button {
                width: 100%;
                font-size: 14px;
                padding: 10px;
            }

            h1 {
                font-size: 24px;
            }
        }
    </style>
</head>
<body>

<section class="keranjang">
    <h4>Silahkan transfer ke nomor rekening dibawah ini</h4>
    <h3>Sejumlah</h3>
    <h5>Rp 15.000</h5>
    <h1 style="color: #ff9d02;">DANA</h1>
    <img src="img/dana.jpeg" alt="DANA Logo">
    
    <h4>Kirim bukti transfer disini 👇🏻</h4>

    <form id="upload-form">
        <label for="file-upload">Upload Bukti Transfer:</label>
        <input type="file" id="file-upload" name="file" onchange="showRemoveButton()">
        <button type="button" onclick="uploadFile()">Upload</button>
        <button type="button" id="remove-btn" class="remove" onclick="confirmRemoveFile()" style="display:none;">Remove</button>
        <button type="button" class="confirm" onclick="showConfirmation()">Konfirmasi</button>
    </form>
</section>

<div id="custom-alert" class="custom-alert">
    <span class="close-alert" onclick="closeAlert()">&times;</span>
    <p>Bukti transfer sudah terkirim!</p>
</div>

<div id="remove-alert" class="custom-alert">
    <span class="close-alert" onclick="closeRemoveAlert()">&times;</span>
    <p>Apakah Anda yakin ingin menghapus bukti transfer?</p>
    <button type="button" onclick="removeFile()">Ya</button>
    <button type="button" onclick="closeRemoveAlert()">Tidak</button>
</div>

<div class="custom-alert-overlay" id="custom-alert-overlay" onclick="closeAlert()"></div>

<script>
    function showRemoveButton() {
        const fileUpload = document.getElementById('file-upload');
        const removeButton = document.getElementById('remove-btn');
        removeButton.style.display = fileUpload.value ? 'inline-block' : 'none';
    }

    function uploadFile() {
        const fileUpload = document.getElementById('file-upload');
        if (!fileUpload.value) {
            showCustomAlert("Anda belum memasukkan foto!");
        }
    }

    function confirmRemoveFile() {
        document.getElementById('remove-alert').style.display = 'block';
        document.getElementById('custom-alert-overlay').style.display = 'block';
    }

    function closeRemoveAlert() {
        document.getElementById('remove-alert').style.display = 'none';
        document.getElementById('custom-alert-overlay').style.display = 'none';
    }

    function removeFile() {
        document.getElementById('file-upload').value = '';
        document.getElementById('remove-btn').style.display = 'none';
        closeRemoveAlert(); 
    }

    function showConfirmation() {
        const fileUpload = document.getElementById('file-upload');
        if (!fileUpload.value) {
            showCustomAlert("Silakan masukkan bukti transfer terlebih dahulu.");
            return;
        }
        showCustomAlert("Bukti transfer sudah terkirim!");
    }

    function showCustomAlert(message) {
        document.getElementById('custom-alert').querySelector('p').textContent = message;
        document.getElementById('custom-alert').style.display = 'block';
        document.getElementById('custom-alert-overlay').style.display = 'block';
    }

    function closeAlert() {
        document.getElementById('custom-alert').style.display = 'none';
        document.getElementById('custom-alert-overlay').style.display = 'none';
    }
</script>

</body>
</html>
