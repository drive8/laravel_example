<div class="container">
    <h2><a href="{{ url('/sections') }}">Sections: </a></h2>
    @foreach ($sections as $section)
        <div>
            {{ $section->name }} (parent_id: {{ $section->parent_id }})
        </div>
    @endforeach
</div>
