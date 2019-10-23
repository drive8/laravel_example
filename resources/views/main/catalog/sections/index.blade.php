@extends('main.layouts.app')

@section('content')

    <div class="container">
        <div class="row mb-2">
            <div class="col-sm">
                <a href="{{route('main.catalog.sections.create')}}" class="btn btn-primary pull-right">
                    <i class="fa fa-plus-square-o"></i>
                    Create section
                </a>
            </div>
        </div>
        <table class="table table-striped">
            <thead>
            <th>Active</th>
            <th>Sort</th>
            <th>Name</th>
            <th>Code</th>
            <th class="text-right">Action</th>
            </thead>
            <tbody>
            @forelse($sections as $section)
                <tr>
                    <td>{{$section->active}}</td>
                    <td>{{$section->sort}}</td>
                    <td>{{$section->name}}</td>
                    <td>{{$section->code}}</td>
                    <td class="text-right">
                        <form onsubmit="if(confirm('Delete?')){return true}else{return false}"
                              action="{{route('main.catalog.sections.destroy', $section)}}" method="post">

                            {{method_field('DELETE')}}
                            {{csrf_field()}}

                            <a class="btn btn-default" href="{{route('main.catalog.sections.edit', $section)}}">
                                <i class="fa fa-edit"></i>
                            </a>
                            <button type="submit" class="btn"><i class="fa fa-trash-o"></i></button>
                        </form>
                    </td>
                </tr>
            @empty
                <tr>
                    <td colspan="5" class="text-center">No data</td>
                </tr>
            @endforelse
            </tbody>
            <tfoot>
            <tr>
                <td colspan="5">
                    <ul class="pagination pull-right">
                        {{$sections->links()}}
                    </ul>
                </td>
            </tr>
            </tfoot>
        </table>
    </div>

@endsection
