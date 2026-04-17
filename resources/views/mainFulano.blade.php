<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Fulano</title>
    <style>
        *{
            margin:0px;
        }
        body{
            background-color: lightgray;
        }

        div{
            text-align:center;
            margin:5px;
        }

        section{
            background-color: white;
            border-radius: 10px;
            padding: 10px;
            min-width: 24%;
            max-width: 30%;
            display: inline-block;
        }
        p{
            margin:0px;
            padding: 5px;
        }
        
    </style>
</head>
<body>
    @section('content') @show
    @section('copy') @show
</body>
</html>