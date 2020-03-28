@extends('layouts.backend.master')
@section('mainContent')
    <div class="row">
        <div class="col-lg-12 offset-0">
            <div class="card card-default">
                <div class="card-header card-header-border-bottom">
                    <h3 class="text-center">{{$title}}</h3>
                </div>
                <div class="card-body">
                    <form action="{{route('product.update',$product->id)}}" method="post" enctype="multipart/form-data">
                        @csrf
                        @method('PUT')

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
                            <input type="text" required name="name"  value="{{$product->name}}" class="form-control" required placeholder="Enter Product Name" aria-label="name">
                        </div>


                        <label class="text-dark font-weight-medium" for="">Product Details</label>
                        <div class="input-group mb-2">
                            <div class="input-group-prepend">
														<span class="input-group-text">
															<i class="mdi mdi-edit"></i>
                                                        </span>
                            </div>
                        <!-- <input type="text" name="details" value="{{old('details')}}"  class="form-control" placeholder="Enter Product details" aria-label="details">-->
                            <textarea name="description" required class="form-control" id="Product_description" cols="80" rows="5">{{$product->description}}</textarea>
                        </div>

                        <label class="text-dark font-weight-medium" for="">Product Short Details</label>
                        <div class="input-group mb-2">
                            <div class="input-group-prepend">
														<span class="input-group-text">
															<i class="mdi mdi-edit"></i>
                                                        </span>
                            </div>
                        <!-- <input type="text" name="details" value="{{old('details')}}"  class="form-control" placeholder="Enter Product details" aria-label="details">-->
                            <textarea name="short_description" class="form-control" id="Product_short_description" cols="120" rows="10">{{$product->short_description}}</textarea>
                        </div>

                        <label class="text-dark mb-2 mt-4 font-weight-medium d-inline-block mr-3" for="is_featured">Is Featured</label>
                        <ul class="list-unstyled list-inline">
                            <li class="d-inline-block mr-3">
                                @php
                                    if(old("is_featured")){
                                         $is_featured = old('is_featured');
                                     }elseif(isset($product)){

                                     $is_featured = $product->is_featured;


                                 }else{
                                     $is_featured = null;
                                     echo "getting zero";
                             }

                                @endphp
                                <label for="yes" class="control control-checkbox">Yes
                                    <input type="checkbox"  name="is_featured" id="yes" value="1" @if($is_featured == 1) checked @endif />
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
                                     }elseif(isset($product)){

                                     $is_new = $product->is_new;
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
                                     }elseif(isset($product)){

                                     $status = $product->status;
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

                        <label class="text-dark mb-2 mt-4 font-weight-medium d-inline-block mr-3" for="featured_image">Featured Image</label>
                        <div class="col-md-12">
                            <div class="input-group mb-2">
                                <div class="input-group-prepend">
														<span class="input-group-text">
															<i class="mdi mdi-image"></i>
                                                        </span>

                                </div>
                                <input input name="featured_image" type="file" class="form-control">
                            </div>
                        <div class="form-group">
                            <div class="col-md-12">
                                @if(isset($product) && $product->featured_image != null)

                                    <img src="{{asset($product->featured_image)}}" style="width:25%;" alt="image">
                                @endif
                            </div>
                        </div>
                        </div>

                        <div class="col-md-12 col-lg-12 col-sm-12">
                            <label class="text-dark font-weight-medium" for="image">Image</label>
                            <div class="input-group mb-2">
                                <div class="input-group-prepend">
														<span class="input-group-text">
															<i class="mdi mdi-image"></i>
                                                        </span>

                                </div>
                                <input type="file" class="form-control" name="images[]" id="image" multiple>
                            </div>
                            @if( isset($product) && count($product->product_image))
                                @foreach($product->product_image as $image)
                                    <div  style="background:transparent; display: inline-block; padding-bottom: 50px; padding-top:50px; padding:5%;" class="col-md-3">

                                        <img src="{{URL::asset($image->file_path)}}" alt="" width="75%">
                                        <a href="{{route('product.delete.image',$image->id )}}" style="margin-top:-35%; margin-left:5%;" class=" btn btn-danger btn-sm" onclick="return confirm('Are you want to delete this image?')">X</a>
                                        <br>
                                    </div>

                              @endforeach
                            @endif
                        </div>

                        <div class="form-footer pt-5 border-top text-center">
                            <button type="submit" class="btn btn-primary btn-default">Update Product</button>
                        </div>

                    </form>
                </div>
            </div>
        </div>
    </div>

@endsection
