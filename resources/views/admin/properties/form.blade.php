@extends('admin.admin')

@section('title', $property->exists ? "Éditer un bien" : "Créer un bien")

@section('content')
    <h1>@yield('title')</h1>
    <form
        method="post"
        action="{{ route($property->exists ? 'admin.property.update' : 'admin.property.store',  $property) }}">
        @csrf
        @method($property->exists ? 'put' : 'post')

        @include('shared.input', ['label' => 'Titre', 'name' => 'title', 'value' => $property->title])

        <button type="submit" class="btn btn-primary">
            @if($property->exists)
                Modifier
            @else
                Créer
            @endif
        </button>
    </form>
@endsection
