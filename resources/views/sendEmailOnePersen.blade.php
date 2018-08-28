<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
        <h4>Có {{ $account->first_name . ' ' . $account->last_name }} muốn xin món quà của bạn .Bạn có muốn cho {{ $account->first_name . ' ' . $account->last_name }} này không ?</h4>
        <a href="http://localhost:8000/sendMailTwoPersen/{{ $token }}">Yes</a>
</body>
</html>