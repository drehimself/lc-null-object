<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Null Object Pattern</title>
</head>

<body>
    <ul>
        @foreach ($tickets as $ticket)
            <li>
                <div>{{ $ticket->title }}</div>

                <div>
                    <span> Assigned to:</span>
                    <span>{{ $ticket->user->name }}</span>
                </div>
            </li>
        @endforeach
    </ul>
</body>

</html>
