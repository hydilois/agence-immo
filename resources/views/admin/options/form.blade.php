@extends('admin.admin')

@section('title', $option->exists ? "Éditer une option" : "Créer une option")

@section('content')
    <h1>@yield('title')</h1>
    <form
        class="vstack gap-2"
        method="post"
        action="{{ route($option->exists ? 'admin.option.update' : 'admin.option.store',  $option) }}">
        @csrf
        @method($option->exists ? 'put' : 'post')

        @include('shared.input', ['name' => 'name', 'label' => 'Nom',  'value' => $option->name])

        <button class="btn btn-primary w-10">
            @if($option->exists)
                Modifier
            @else
                Créer
            @endif
        </button>
    </form>
@endsection
