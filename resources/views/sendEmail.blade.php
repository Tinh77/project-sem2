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
    <table>
        <tr>
            <th>Họ tên</th>
            <td>
                {{$account->first_name}}.{{$account->last_name}}
            </td>
        </tr>
        <tr>
            <th>Số DT</th>
            <td>
                {{$account->phone}}
            </td>
        </tr>
        <tr>
            <th>Email</th>
            <td>
                {{$account->email}}
            </td>
        </tr>
        <tr>
            <th></th>
            <td></td>
        </tr>
    </table>
</body>
</html>