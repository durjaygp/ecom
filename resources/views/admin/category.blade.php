@extends('admin/layout')


@section('container')
    <h1>Category</h1><br>
    <div class="row">
        <h4 class="text-success">
            {{Session('message')}}
        </h4>
        <div class="table-responsive m-b-40">
            <div class="col-lg-12 text-center">
                <a href="category/manage_category">
                    <button class="au-btn au-btn-icon btn-success">
                        
                        <i class="zmdi zmdi-plus"></i>Add New Category</button>
                </a><hr>
            </div>
            <table class="table table-borderless table-data3">
                <thead>
                    <tr>
                        <th>ID</th>
                        <th>Category</th>
                        <th>Category Slug</th>
                        <th>Action</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($data as $list)
                    <tr>
                        <td>{{$list->id}}</td>
                        <td>{{$list->category_name}}</td>
                        <td>{{$list->category_slug}}</td>
                        <td>
                            <a href="{{url('admin/category/manage_category/')}}/{{$list->id}}"><button type="button" class="btn btn-success">Edit</button></a>
                            <a onclick="return confirm('Are You Sure To Delete');" href="{{url('admin/category/delete/')}}/{{$list->id}}"><button type="button" class="btn btn-danger">Delete</button></a>
                        </td>
                    </tr>
                    @endforeach

                </tbody>
            </table>
        </div>
    </div>
@endsection