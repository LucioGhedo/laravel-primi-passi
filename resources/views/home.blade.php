<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Homepage</title>
</head>
<body>
    <header>
        <div class="nav">
            @foreach($pages as $page)
                <a href="{{ route($page) }}">{{$page}}</a>
            @endforeach
        </div>
    </header>
    <main>
        <div>TEST</div>
        <div>
            @foreach($squadre as $squadra)
                {{ $squadra }}@if(!$loop->last), @endif
            @endforeach
        </div>
    
        <div>
            @foreach($punti as $puntiSquadra)
                {{ $puntiSquadra }}@if(!$loop->last), @endif
            @endforeach
        </div>
    </main>
</body>
</html>

<style lang="scss">
    * {
        margin: 0;
        padding: 0;
        box-sizing: border-box;
        font-size: 40px;
    }
    .nav {
        background-color: rgb(15, 114, 201);
        display: flex;
        justify-content: space-evenly;
    }
    a {
        text-decoration: none;
        color: white;
        margin: 15px 20px;
        background-color: red;
        border-radius: 15px;
        padding: 10px 15px;
        text-transform: uppercase;
    }
    main {
        padding-top: 50px;
        text-align: center;
    }
</style>