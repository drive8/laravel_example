@foreach ($sections as $sectionData)
    <option value="{{$sectionData->id ?? ""}}"
        @isset($section->id)
            @if ($section->parent_id == $sectionData->id)
                selected=""
            @endif
            @if ($section->id == $sectionData->id)
                hidden=""
            @endif
        @endisset
    >{!! $delimiter ?? " - " !!}{{$sectionData->name ?? ""}}</option>
    @if (count($sectionData->children) > 0)
        @include('main.catalog.sections.partials.sections', [
          'sections' => $sectionData->children,
          'delimiter' => ' - ' . $delimiter
        ])
    @endif
@endforeach
