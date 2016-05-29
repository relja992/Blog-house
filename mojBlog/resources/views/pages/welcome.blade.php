@extends('main')

@section('tittle', '| Naslovna')

@section('content')

        <div class="row">
          <div class="col-md-12">
                <div class="jumbotron">
                  <h1>Elektronski dnevnik</h1>
                  <p class"lead">Osnovna škola "Miloš Crnjanski" - Srpski Itebej</p>
                  <p><a class="btn btn-primary btn-lg" href="#" role="button">Uloguj se</a></p>
                </div>
          </div>
        </div> <!-- Kraj hedera .row -->

    <div class="row">
        <div class="col-md-8">

            @foreach($posts as $post)

                <div class="post">
                    <h3>{{ $post->naslov }}</h3>
                    <p>{{ substr($post->tekst, 0, 300) }}{{ strlen($post->tekst) > 300 ? '...' : '' }}</p>
                    <a class="btn btn-primary" href="{{ url('blog/'.$post->slug) }}">Pročitaj više</a>
                </div>

                <hr>

            @endforeach
        </div>

        <div class="col-md-3 col-md-offset-1">
            <h2>Sidebar</h2>
        </div>
    </div>

    
@endsection
