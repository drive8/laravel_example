@extends('main.layouts.app')

@section('content')

    <div class="container">
        <form class="form-horizontal" action="{{route('main.catalog.sections.update', $section)}}" method="post">
            {{method_field('PUT')}}
            {{ csrf_field() }}

            {{-- Form include --}}
            @include('main.catalog.sections.partials.form')
        </form>
    </div>

@endsection
