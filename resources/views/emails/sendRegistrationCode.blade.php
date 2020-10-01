<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>รหัสลงทะเบียน</title>
    <style>
        .text-center{
            text-align: center;
        }
        .mail-box{
            width: 100%;
            max-width: 800px;
            margin: 0 auto;
        }
    </style>
</head>
<body>
    <div class="mail-box">
        <p class="text-center">{{ $data['student_code'] }}</p>
        <p class="text-center">{{ $data['student_email'] }}</p>
        <p class="text-center">{{ $data['registration_code'] }}</p>
    </div>
</body>
</html>
