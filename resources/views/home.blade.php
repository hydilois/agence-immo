@extends('base')

@section('content')

    <div class="bg-light p-5 mb-5 text-center">
        <div class="container">
            <h1>Agence lorem ipsum</h1>
            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Dolore excepturi incidunt iure laborum libero
                quos suscipit vero voluptas? Ad, doloribus et harum laudantium neque voluptate voluptatum. A consectetur
                deleniti officia.</p>
        </div>
    </div>

    <div class="container">
        <h2>Mes derniers biens</h2>
        <div class="row mt-5">
            @foreach($properties as $property)
                <div class="col">
                    @include('property.card')
                </div>
            @endforeach
        </div>
    </div>

@endsection
