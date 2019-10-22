<div class="container">
    <h2>Sections: </h2>
    @foreach ($sections as $section)
        <div>{{ $section->name }}</div>
    @endforeach
</div>
