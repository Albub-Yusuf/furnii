@extends('layouts.backend.master')
    @section('mainContent')
        <div class="row">
            <div class="col-sm-12 col-md-12 col-lg-12 offset-0">
                <div class="text-center"><h3>{{$title}}</h3></div>
                <table class="table table-responsive-sm table-bordered table-striped">
                    <tr>
                        <th scope="col">Product ID</th>
                        <td>{{$productInfo->id}}</td>
                    </tr>
                    <tr>
                        <th>Product Name</th>
                        <td>{{$productInfo->name}}</td>
                    </tr>
                    <tr>
                        <th>Category</th>
                        <td>{{$productInfo->category->name}}</td>
                    </tr>
                    <tr>
                        <th>Product Status</th>
                        <td>{{ucfirst($productInfo->status)}}</td>
                    </tr>
                    <tr>
                        <th>Featured Product</th>
                        <td>@if($productInfo->is_featured == 1) Yes @elseif($productInfo->is_featured == 0) No @endif</td>
                    </tr>
                    <tr>
                        <th>New Product</th>
                        <td>@if($productInfo->is_new == 1) Yes @elseif($productInfo->is_new == 0) No @endif</td>
                    </tr>
                    <tr>
                        <th>Product Details</th>
                        <td>{!! $productInfo->description !!}</td>
                    </tr>
                    <tr>
                        <th>Product Short Details</th>
                        <td>{!! $productInfo->short_description !!}</td>
                    </tr>
                    <tr>
                        <th>Featured Image</th>
                        <td>

                            <img src="{{URL::asset($productInfo->featured_image)}}" alt="" width="25%">

                        </td>
                    </tr>
                    <tr>
                        <th>Images</th>
                        <td>
                            @if(count($productInfo->product_image))
                                @foreach($productInfo->product_image as $image)
                                    <img src="{{URL::asset($image->file_path)}}" alt="" width="25%">
                                @endforeach
                            @endif
                        </td>
                    </tr>
                </table>

                <a  class="btn btn-info" href="{{route('product.index')}}">Back</a>
            </div>
        </div>
@endsection
