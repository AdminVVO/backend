<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<style>
    span {
        font-family: sans-serif;
    }
</style>
<body>
    <div>
        <span style="left: 72px; top: 122.117px; font-size: 32px; font-family: sans-serif; transform: scaleX(0.86048);">{{$reservation['title']}}</span>
    </div>
    <div>
        <div>
            <span>{{$reservation['checkout']}}</span>
            <span>hora</span>
        </div>
        <div>
            <span>{{$reservation['checkin']}}</span>
            <span>hora</span>
        </div>
    </div>
    <div>
        <span>what accompanies him ?</span>
        <span>{{$reservation['next_count']}}</span>
        <span>{{$reservation['client_name']}}</span>
    </div>
    <div>
        <p>Code Confirmation</p>
        <p>HB3A5Q4E</p>
    </div>
    <div>
        <p>Address</p>
        <p>direccion</p>
    </div>
    <div>
        <p>HOST: {{$reservation['host_name']}}</p>
    </div>
    <div>
        <p>TATAL COST</p>
        <p>{{$reservation['total_payout']}}</p>
    </div>
</body>

</html>
