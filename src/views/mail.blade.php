<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Mail us</title>
</head>
<body>
        <h1>Mail us here</h1>
        <form action="mail" method="post" >

            @csrf
            <input type="text" name="message" placeholder="hey ....."/>

            <input type="submit" value="send">
        </form>

        <hr>

        @foreach ($mails as $item)
            <p>{{$item->message}}</p>
        @endforeach
</body>
</html>