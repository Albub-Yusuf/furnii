@extends('layouts.backend.master')
@section('mainContent')
    <div class="row">
        <div class="col-lg-8 offset-2">
            <div class="card card-default">
                <div class="card-header card-header-border-bottom">
                    <h3 class="text-center">{{$title}}</h3>
                </div>
                <div class="card-body">
                    <form action="{{route('category.store')}}" method="post" enctype="multipart/form-data">
                        @csrf
                        @method('POST')


                        <label class="text-dark font-weight-medium" for="">Category Name</label>
                        <div class="input-group mb-2">
                            <div class="input-group-prepend">
														<span class="input-group-text">
															<i class="mdi mdi-notice"></i>
                                                        </span>
                            </div>
                            <input type="text" name="name" value="{{old('name')}}"  class="form-control" placeholder="Enter Category Name" aria-label="name">
                        </div>

                        <div class="form-group">
                            <label class="col-md-12">Banner Image</label>
                            <div class="col-md-12">
                                @if(isset($post) && $post->banner_image != null)

                                    <img src="{{asset($post->banner_image)}}" alt="image">
                                @endif
                                <input input name="file" type="file" class="form-control-file">
                            </div>
                        </div>

                        <label class="text-dark mb-2 mt-4 font-weight-medium d-inline-block mr-3" for="status">Status</label>
                        <ul class="list-unstyled list-inline">
                            <li class="d-inline-block mr-3">
                                @php
                                    if(old("status")){
                                         $status = old('status');
                                     }elseif(isset($category_data)){

                                     $status = $category_data->status;
                                 }else{
                                     $status = null;
                             }@endphp
                                <label for="active" class="control control-radio">Active
                                    <input type="radio" id="active" value="active" @if($status == 'active') checked @endif name="status" checked="checked" />
                                    <div class="control-indicator"></div>
                                </label>
                            </li>
                            <li class="d-inline-block mr-3">
                                <label for="inactive" class="control control-radio">Inactive
                                    <input type="radio" id="inactive" value="inactive" @if($status == 'inactive') checked @endif name="status" />
                                    <div class="control-indicator"></div>
                                </label>
                            </li>
                        </ul>

                        <div class="form-footer pt-5 border-top text-center">
                            <button type="submit" class="btn btn-primary btn-default">Create Category</button>
                        </div>

                    </form>
                </div>
            </div>
        </div>
    </div>

@endsection
