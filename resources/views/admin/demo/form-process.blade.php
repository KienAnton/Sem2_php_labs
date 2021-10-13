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
    <h1>Form</h1>
        <p>Even name{{$eventName}}</p>
        <p>Band name {{$bandNames}}</p>
        <p>Start {{$startDate}}</p>
        <p>Band name {{$endDate}}</p>
        <p>Price {{$portfolio}}</p>
        <p>Ticket price {{$ticketPrice}}</p>

        @switch($status)
            @case(1)
            <p>Đang diễn ra</p>
            @break

            @case(2)
            <p>Sắp diễn ra</p>
            @break

            @case(3)
            <p>Đã diễn ra</p>
            @break

            @case(0)
            <p>aTạm hoãn</p>
            @break
        @endswitch
</body>
</html>
