@extends('layouts.app')
@section('content')

@if(Auth::check())
<div class="container maintenance-page">
    @include('partials.formerrors')
    <h2>Maintenace</h2>
    <div class="row">
        <div class="col-sm-12">
            <div class="card p-4">
                <div class="full-right p-4">
                    <h6><b>Teachers</b></h6>
                </div>
                <table class="table table-responsive-lg table-hover">
                    <thead class="thead-light">
                        <tr>
                            <th width="80px">No</th>
                            <th>Firsname</th>
                            <th>Lastname</th>
                            <th width="128px" class="text-center">Grade Level</th>
                            <th width="128px" class="text-center">Section</th>
                            <th width="192px" class="text-center">
                                <input 
                                    type="button" 
                                    value="Add" 
                                    name="add" 
                                    id="add" 
                                    data-toggle="modal" 
                                    data-target="#add_data_Modal" 
                                    class="btn btn-info"
                                >
                            </th>
                        </tr>
                    </thead>

                    <?php $no=1; ?>
                    @foreach ($teacher as $key => $value)

                        <tr>
                            <td>{{$no++}}</td>
                            <td>{{$value->first_name}}</td>
                            <td>{{$value->last_name}}</td>
                            <td class="text-center">{{$value->grade_level}}</td>
                            <td class="text-center">{{$value->section}}</td>
                            <td class="text-center">
                                <button type="button" class="btn btn-warning btn-sm" data-toggle="modal" 
                                    data-target="#edit_data_Modal">
                                    {{-- <i class="glyphicon glyphicon-trash">Delete</i> --}}
                                    Edit
                                </button>
                                <button type="button" class="btn btn-danger btn-sm" data-toggle="modal" 
                                    data-target="#delete_data_Modal">
                                    {{-- <i class="glyphicon glyphicon-trash">Delete</i> --}}
                                    Delete
                                </button>
                            </td>
                        </tr>
                        
                    @endforeach
                </table>
            </div>
    
        </div>

        
    </div>
</div>

@include('maintenance.modals.insert')
@include('maintenance.modals.update')
@include('maintenance.modals.delete')
@endif
@endsection