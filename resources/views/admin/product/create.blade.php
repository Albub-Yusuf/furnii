@extends('layouts.backend.master')
@section('csj')
    <script src="https://cdn.tiny.cloud/1/edg1ry9kn8z5vkhjc572eauiiglzsmho9b6l8gjztmnbu7zf/tinymce/5/tinymce.min.js" referrerpolicy="origin"></script>
    <style>
        .mce-notification-inner {display:none!important;}
    </style>

    <!--script>
        tinymce.init({
           selector: 'textarea'
        });
    </script-->

@endsection
@section('mainContent')
    <div class="row">
        <div class="col-lg-12 offset-0">
            <div class="card card-default">
                <div class="card-header card-header-border-bottom">
                    <h3 class="text-center">{{$title}}</h3>
                </div>
                <div class="card-body">
                    <form action="{{route('product.store')}}" method="post" enctype="multipart/form-data">
                        @csrf
                        @method('POST')

                        <div class="row">

                            <div class="col-md-6">

                                <label class="text-dark font-weight-medium" for="category_id">Select Category</label>
                                <div class="input-group mb-2">
                                    <div class="input-group-prepend">
														<span class="input-group-text">
															<i class="mdi mdi-notice"></i>
                                                        </span>
                                    </div>
                                <!-- <input type="text" name="name" value="{{old('name')}}"  class="form-control" required placeholder="Enter Product Name" aria-label="name">-->
                                    <select class="form-control" name="category_id" id="category_id">
                                        @php
                                            if(old('category_id')){
                                                $category_id = old('category_id');
                                            }elseif(isset($product)){
                                                $category_id = $product->category_id;
                                            }else{
                                                $category_id = null;
                                            }
                                        @endphp
                                        <option value="">Select Category</option>
                                        @foreach($categories as $id=> $category)
                                            <option @if($category_id == $id) selected @endif value="{{$id}}">{{$category}}</option>
                                        @endforeach
                                    </select>
                                </div>
                            </div>
                        </div>


                        <label class="text-dark font-weight-medium" for="">Product Name</label>
                        <div class="input-group mb-2">
                            <div class="input-group-prepend">
														<span class="input-group-text">
															<i class="mdi mdi-notice"></i>
                                                        </span>
                            </div>
                            <input type="text" required name="name"  value="{{old('name')}}" class="form-control" required placeholder="Enter Product Name" aria-label="name">
                        </div>


                        <label class="text-dark font-weight-medium" for="">Product Details</label>
                        <div class="input-group mb-2">
                            <div class="input-group-prepend">
														<span class="input-group-text">
															<i class="mdi mdi-edit"></i>
                                                        </span>
                            </div>
                        <!-- <input type="text" name="details" value="{{old('details')}}"  class="form-control" placeholder="Enter Product details" aria-label="details">-->
                            <textarea name="description" required class="form-control" id="Product_description" cols="120" rows="15">{{old('description')}}</textarea>
                        </div>


                        <label class="text-dark font-weight-medium" for="">Product Short Details</label>
                        <div class="input-group mb-2">
                            <div class="input-group-prepend">
														<span class="input-group-text">
															<i class="mdi mdi-edit"></i>
                                                        </span>
                            </div>
                        <!-- <input type="text" name="details" value="{{old('details')}}"  class="form-control" placeholder="Enter Product details" aria-label="details">-->
                            <textarea name="short_description" required class="form-control" id="Product_short_description" cols="120" rows="10">{{old('description')}}</textarea>
                        </div>


                        <label class="text-dark mb-2 mt-4 font-weight-medium d-inline-block mr-3" for="is_featured">Is Featured</label>
                        <ul class="list-unstyled list-inline">
                            <li class="d-inline-block mr-3">
                                @php
                                    if(old("is_featured")){
                                         $is_featured = old('is_featured');
                                     }elseif(isset($product_data)){

                                     $is_featured = $product_data->is_featured;
                                 }else{
                                     $is_featured = null;
                             }@endphp
                                <label for="yes" class="control control-checkbox">Yes
                                    <input type="checkbox" id="yes" value="1" @if($is_featured == 1) checked @endif name="is_featured" />
                                    <div class="control-indicator"></div>
                                </label>
                            </li>



                        </ul>

                        <label class="text-dark mb-2 mt-4 font-weight-medium d-inline-block mr-3" for="is_new">Is New</label>
                        <ul class="list-unstyled list-inline">
                            <li class="d-inline-block mr-3">
                                @php
                                    if(old("is_new")){
                                         $is_new = old('is_new');
                                     }elseif(isset($product_data)){

                                     $is_new = $product_data->is_new;
                                 }else{
                                     $is_new = null;
                             }@endphp
                                <label for="positive" class="control control-checkbox">Yes
                                    <input type="checkbox" id="positive" value="1" @if($is_new == 1) checked @endif name="is_new" />
                                    <div class="control-indicator"></div>
                                </label>
                            </li>



                        </ul>


                        <label class="text-dark mb-2 mt-4 font-weight-medium d-inline-block mr-3" for="status">Status</label>
                        <ul class="list-unstyled list-inline">
                            <li class="d-inline-block mr-3">
                                @php
                                    if(old("status")){
                                         $status = old('status');
                                     }elseif(isset($Product_data)){

                                     $status = $Product_data->status;
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


                        <div class="col-md-12">
                            <label class="text-dark font-weight-medium" for="image">Product Featured Image</label>
                            <div class="input-group mb-2">
                                <div class="input-group-prepend">
														<span class="input-group-text">
															<i class="mdi mdi-image"></i>
                                                        </span>

                                </div>
                                <input type="file" class="form-control" name="featured_image" id="featured_image" multiple>
                            </div>
                        </div>


                        <div class="col-md-12">
                            <label class="text-dark font-weight-medium" for="image">Image</label>
                            <div class="input-group mb-2">
                                <div class="input-group-prepend">
														<span class="input-group-text">
															<i class="mdi mdi-image"></i>
                                                        </span>

                                </div>
                                <input type="file" class="form-control" name="images[]" id="image" multiple>
                            </div>
                        </div>

                        <div class="form-footer pt-5 border-top text-center">
                            <button type="submit" class="btn btn-primary btn-default">Create Product</button>
                        </div>

                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection
