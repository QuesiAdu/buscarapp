<!DOCTYPE html>
<html lang="en">

<head>
    <base href="./">
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
    <title>{{ config('app.name', 'Laravel') }}</title>
    <meta name="theme-color" content="#ffffff">
    <style>
        body {
            background: white;
        }

        a {

            display: absolute;
            bottom: 50%;
            text-align: center;
            display: inline-block;
            background: #000;
            padding: 6px 12px;
            text-decoration: none;
            color: grey;
        }

    </style>
</head>

<body>
    <a href="{{ route("client.create") }} "class="px-12 bg-danger">Request Demo</a>
</body>

</html>
