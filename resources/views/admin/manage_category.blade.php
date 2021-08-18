@extends('admin/layout')


@section('container')
    <h1>Manage Category</h1><br>
    <div class="row">
        <div class="table-responsive m-b-40">
            <div class="col-lg-12 text-center">
                <a href="{{url('admin/category')}}">
                    <button class="au-btn au-btn-icon au-btn--green au-btn--small">
                        <i class="fa fa-step-backward"></i>Back</button>
                </a><hr>
            </div>
            <div class="col-lg-12">
                <div class="card">
                    <div class="card-header">Create Category</div>
                    <div class="card-body">
                        <form action="{{Route('category.insert')}}" method="post">
                            @csrf
                            <div class="form-group has-success">
                                <label for="cc-name" class="control-label mb-1">Category Name</label>
                                <input id="category_name" value="{{$category_name}}" name="category_name"  type="text" class="form-control cc-name valid" data-val="true"  autocomplete="cc-name" aria-required="true" aria-invalid="false" aria-describedby="cc-name-error" required>
                              
                                @error('category_name')
                                <div class="alert alert-danger" role="alert">
                                    {{session('error')}}
                                </div>
                               @enderror
                            </div>
                            <div class="form-group has-success">
                                <label for="cc-name" class="control-label mb-1">Category Slug</label>
                                <input id="category_slug" value="{{$category_slug}}" name="category_slug" type="text" class="form-control cc-name valid" data-val="true"  autocomplete="cc-name" aria-required="true" aria-invalid="false" aria-describedby="cc-name-error" required>
                                <span class="help-block field-validation-valid" data-valmsg-for="cc-name" data-valmsg-replace="true"></span>
                            </div>
                            @error('category_slug')
                            <div class="alert alert-danger" role="alert">
                                {{session('error')}}
                            </div>
                           @enderror
                            <div>
                                <button id="payment-button" type="submit" class="btn btn-lg btn-info btn-block">
                                    SUBMIT
                                </button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection