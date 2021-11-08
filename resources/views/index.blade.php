<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@300;400;500;700&family=Raleway:wght@400;500;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="{{asset('css/app.css')}}">
    <title>Model Controller Films</title>
</head>
<body>
    <header>
        <div class="container">
            <img src="{{asset('images/laravel-logo.png')}}" alt="logo laravel">
            <h1>Model Controller Films with <span>Laravel</span>
                </h1>
        </div>
    </header>
    <main>
        <section class="container">
             <div class="cards">
                 @foreach ($movies as $movie)
                 <div class="card">
                     <div class="card-img">
                         <img src="{{$movie['poster']}}" alt="{{$movie['title']}}">
                     </div>
                     <h3>{{$movie['title']}}</h3>
                     <h5>Anno: {{$movie['date']}}</h5>
                     <h5>Voto: {{$movie['vote']}}</h5>
                 </div>   
                 @endforeach
             </div>
        </section> 
    </main>
</body>
</html>