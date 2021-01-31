<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width={device-width}, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <p>
        Premium Series by {{ $name }}
        <br>
        show the body of post {!! nl2br($body) !!}
        
        {!! nl2br !!}
    </p>
    
    <p>
        this is anothe option by premium <?= $name ?>
    </p>
</body>
</html>