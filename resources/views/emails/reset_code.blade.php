<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Reset Password</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            line-height: 1.6;
            color: #333333;
            margin: 0;
            padding: 0;
        }
        .container {
            max-width: 600px;
            margin: 20px auto;
            padding: 20px;
            border: 1px solid #dddddd;
            border-radius: 5px;
            background-color: #f9f9f9;
        }
        h2 {
            color: #337ab7;
            margin-top: 0;
        }
        .code-area {
            background-color: #ffffff;
            border: 1px solid #cccccc;
            border-radius: 3px;
            padding: 15px;
            margin: 15px 0;
            text-align: center;
        }
        .code {
            font-size: 1.5em;
            font-weight: bold;
            color: #206f20;
        }
        .disclaimer {
            font-size: 0.9em;
            color: #777777;
        }
    </style>
</head>
<body>
    <div class="container">
        <h2>Reset Password</h2>
        <p>Halo,</p>
        <p>Anda menerima email ini karena ada permintaan untuk mereset kata sandi akun Anda.</p>
        <p>Gunakan kode berikut untuk melanjutkan proses reset kata sandi:</p>
        <div class="code-area">
            <h3 class="code">{{ $code }}</h3>
        </div>
        <p class="disclaimer">Kode ini hanya berlaku untuk beberapa menit. Jika Anda tidak merasa melakukan permintaan reset kata sandi ini, Anda dapat mengabaikan email ini dengan aman.</p>
        <p>Terima kasih,</p>
        <p>Tim Kami</p>
    </div>
</body>
</html>