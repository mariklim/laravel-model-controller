<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="{{asset('css/app.css')}}">
    <title>Model Controller Films</title>
</head>
<body>
    <header>
        <div class="container">
            <img src="{{asset('images/laravel-logo.png')}}" alt="logo laravel">
            <h1>Model Controller Films with Laravel</h1>
        </div>
    </header>
    <main>
        <section class="container">
             <div class="cards">
                 @foreach ($movies as $movie)
                 <div class="card">
                     <div class="card-img">
                         <img src="{{$movie['poster']}}" alt="{{$movie['title']}}" srcset="">
                     </div>
                     <h2>{{$movie['title']}}</h2>
                     <h3>Anno: {{$movie['date']}}</h3>
                     <h3>Voto: {{$movie['vote']}}</h3>
                 </div>   
                 @endforeach
             </div>
        </section> 
    </main>
</body>
</html>