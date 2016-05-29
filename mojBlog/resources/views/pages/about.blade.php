@extends('main')

@section('tittle', '| O nama')

@section('content')

        <div class="row">
            <div>
                <h1>Škola - {{ $podaci['ime'] }}</h1>
                <p>
                    Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat. Ut wisi enim ad minim veniam, quis nostrud exerci tation ullamcorper suscipit lobortis nisl ut aliquip ex ea commodo consequat...
                </p>
            </div>
        </div>

@endsection    