@extends('main.layouts.app')

@section('content')

    <div class="container">
        <form action="{{route('main.catalog.sections.store')}}" method="post">
            {{ csrf_field() }}

            {{-- Form include --}}
            @include('main.catalog.sections.partials.form')

        </form>
    </div>

@endsection
