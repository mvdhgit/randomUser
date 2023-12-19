<!DOCTYPE html>
<?php //                   view   ?>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Extracted Data</title>
</head>
<body>
    <h1>Extracted Data:</h1>
    <p><strong>Name:</strong> {{ $name }}</p>
    <p><strong>Gender:</strong> {{ $gender }}</p>
    <p><strong>Date of Birth:</strong> {{ $dob }}</p>
    <p><strong>E-mail:</strong> {{ $email}}</p>
    <p><strong>Phone number:</strong> {{ $phone}}</p>
    <p><strong>Nationality:</strong> {{ $nat}}</p>
    <p><strong>Username:</strong> {{ $username }}</p>
    <p><strong>Address:</strong> {{ $address }}</p>
    <img src="{{ $picture }}" alt="Profile Picture">
</body>
<p>
<button onclick="refreshData()">New Random Person</button>

<script>
    function refreshData() {
        window.location.reload();
    }
</script>
</p>