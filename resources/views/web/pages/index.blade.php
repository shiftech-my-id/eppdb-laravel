<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>{{ env('APP_NAME') }}</title>
    @vite(['resources/js/app.js', 'resources/css/app.css'])
</head>
<body>
    <h1>Beranda EPPDB</h1>
    <p>Selamat datang di aplikasi EPPDB. Mohon maaf, web sedang tahap pengembangan.</p>
    <ul>
        <li><a href="{{ route('student.login') }}">Login Siswa</a></li>
        <li><a href="{{ route('staff.login') }}">Login Staff</a></li>
    </ul>
</body>
</html>
