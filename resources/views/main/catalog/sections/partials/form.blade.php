@if($errors->any())
    <div class="alert alert-danger">
        <ul>
            @foreach($errors->all() as $error)
                <li>{{$error}}</li>
            @endforeach
        </ul>
    </div>
@endif

<div class="card mt-3">
    <div class="card-header">
        <ul class="nav nav-tabs card-header-tabs">
            <li class="nav-item">
                <a class="nav-link active" id="general-tab" data-toggle="tab" href="#general" role="tab"
                   aria-controls="general" aria-selected="true">Section</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" id="properties-tab" data-toggle="tab" href="#properties" role="tab"
                   aria-controls="properties" aria-selected="false">Properties</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" id="description-tab" data-toggle="tab" href="#description" role="tab"
                   aria-controls="description" aria-selected="false">Description</a>
            </li>
        </ul>
    </div>
    <div class="card-body">
        <div class="tab-content" id="myTabContent">
            <div class="tab-pane fade show active" id="general" role="tabpanel" aria-labelledby="general-tab">
                <div class="form-group">
                    <label>Active</label>
                    <select class="form-control" name="active">
                        <option value="0" @if(old('active') == 0){{ 'selected' }}@else{{ ($section->active ?? 0) == 0 ?
                            'selected' : ""}}@endif>Yes</option>
                        <option value="1" @if(old('active') == 1){{ 'selected' }}@else{{ ($section->active ?? 0) == 1 ?
                            'selected' : ""}}@endif>No</option>
                    </select>
                </div>
                <div class="form-group">
                    <label>Name</label>
                    <input type="text" class="form-control" placeholder="Name" name="name"
                           value="@if(old('name')){{old('name')}}@else{{$section->name ?? ""}}@endif">
                </div>
                <div class="form-group">
                    <label>Code</label>
                    <input type="text" class="form-control" placeholder="Code" name="code"
                           value="@if(old('code')){{old('code')}}@else{{$section->code ?? ""}}@endif">
                </div>
                <div class="form-group">
                    <label>Sort</label>
                    <input type="number" class="form-control" placeholder="Сортировка" name="sort"
                           value="@if(old('sort')){{old('sort')}}@else{{$section->sort ?? "100"}}@endif">
                </div>
                <div class="form-group">
                    <select class="form-control" name="parent_id">
                        <option value="0">-- without parent section --</option>
                        @include('main.catalog.sections.partials.sections', ['sections' => $sections])
                    </select>
                </div>
            </div>
            <div class="tab-pane fade" id="properties" role="tabpanel" aria-labelledby="properties-tab">
                <div class="form-group">
                    <label for="">...</label>
                </div>
            </div>
            <div class="tab-pane fade" id="description" role="tabpanel" aria-labelledby="description-tab">
                <div class="form-group">
                    <label>Description</label>
                    <textarea class="form-control" name="description">@if(old('description')){{old('description')}}
                        @else{{$section->description ?? "description"}}@endif</textarea>
                </div>
            </div>
        </div>
        <button type="submit" class="btn btn-primary">Save</button>
    </div>
</div>
