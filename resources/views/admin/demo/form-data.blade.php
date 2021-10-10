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
    <form action="/data-handle/form" method="post">
        <div>
            evenName <input type="text" name="evenName">
        </div>

        <div>
            bandName <input type="text" name="bandName">
        </div>

        <div>
            startDate <input type="date" name="startDate">
        </div>

        <div>
            endDate <input type="date" name="endDate">
        </div>

        <div>
            portfolio <input type="text" name="portfolio">
        </div>

        <div>
            ticketPrice <input type="text" name="ticketPrice">
        </div>

        <div>
            status <input type="number" name="status">
        </div>

        <div>
            <button>Submit</button>
        </div>
    </form>
</body>
</html>
