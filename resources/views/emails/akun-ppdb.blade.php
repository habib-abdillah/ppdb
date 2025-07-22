<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8">
    <title>Informasi Akun PPDB</title>
</head>

<body>
    <h2>Halo, {{ $nama }}!</h2>
    <p>Terima kasih telah melakukan pendaftaran.</p>
    <p>Berikut adalah informasi akun Anda untuk login ke sistem PPDB:</p>

    <ul>
        <li><strong>Email:</strong> {{ $email }}</li>
        <li><strong>Password:</strong> {{ $password }}</li>
    </ul>

    <p>Silakan login menggunakan informasi di atas dan segera ubah password Anda setelah login pertama.</p>

    <p>Salam,<br>Panitia PPDB</p>
</body>

</html>
