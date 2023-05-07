@extends('base')

@section('title', 'Tous nos biens')

@section('content')

    <div class="bg-light p-5 mb-5 text-center">
        <form action="" method="get" class="container d-flex gap-2">
            <input type="number" placeholder="Surface minimum" name="surface" value="{{ $input['surface'] ?? '' }}"
                   class="form-control">
            <input type="number" placeholder="Nombre de pièce min" name="rooms" value="{{ $input['rooms'] ?? '' }}"
                   class="form-control">
            <input type="number" placeholder="Budget Max" name="price" value="{{ $input['price'] ?? '' }}"
                   class="form-control">
            <input placeholder="Mot clé" name="title" value="{{ $input['title'] ?? '' }}"
                   class="form-control">
            <button class="btn btn-primary btn-sm flex-grow-0">
                Rechercher
            </button>
        </form>
    </div>

    <div class="container">
        <div class="row">
            @forelse($properties as $property)
                <div class="col-3 mb-4">
                    @include('property.card')
                </div>
            @empty
                <div class="col">
                    Aucun bien ne correspond à votre recherche
                </div>
            @endforelse
        </div>
        <div class="my-4">
            {{ $properties->links() }}
        </div>
    </div>




@endsection
