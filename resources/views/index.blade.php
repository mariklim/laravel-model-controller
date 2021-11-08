<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Model Controller Films</title>
</head>
<body>
   <section class="container">
        <div class="cards">
            @foreach ($movies as $movie)
            <div class="card">
                <img src="{{$movie['poster']}}" alt="{{$movie['title']}}" srcset="">
                <h2>{{$movie['title']}}</h2>
                <h3>Anno: {{$movie['date']}}</h3>
                <h3>Voto: {{$movie['vote']}}</h3>
            </div>   
            @endforeach
        </div>
   </section> 
</body>
</html>