@php
    use Illuminate\Support\Str;
@endphp
@extends('layouts.backend.master')
@section('searchForm')
    <div class="input-group">
        <form style="display: inline-flex;" action="" method="">
            <button type="submit" name="search-btn" id="search-btn" class="btn btn-flat">
                <i class="mdi mdi-magnify"></i>
            </button>
            <input  type="text" name="search" value="{{request()->search}}" id="search-input" class="form-control" placeholder="Search Product Here ..."
                   autofocus autocomplete="off" />
        </form>
    </div>
    <div id="search-results-container">
        <ul id="search-results"></ul>
    </div>
@endsection
@section('mainContent')

    <div class="row">
        <div class="col-sm-12 col-md-12 col-lg-12 offset-0">
            <div class="card card-default">
                <div class="card-header card-header-border-bottom">
                    <div class="text-center"><h3>{{$title}}</h3></div>
            <table class="table table-responsive-sm table-bordered">
                <thead class="thead-light">
                <tr>
                    <th scope="col">#</th>
                    <th scope="col" style="width:100px;">Image</th>
                    <th scope="col">product Name</th>
                    <th scope="col">Status</th>
                    <th scope="col" class="text-center">Action</th>
                </tr>
                </thead>
                <tbody>
                @foreach($products as $product)
                    <tr>
                        <th scope="row">{{$serial++}}</th>
                        <td><img width="60px" height="60px" src="{{asset($product->featured_image)}}"></td>
                        <td><a href="{{route('product.show',$product->id)}}">{{$product->name}}</a></td>
                        <td>
                            <span class="mb-2 mr-2 badge badge-pill  @if($product->status == 'active') badge-success @endif  @if($product->status == 'inactive') badge-danger @endif">{{$product->status}}</span>
                        </td>
                        <td class="text-center">@if($product->deleted_at == null) <a class="btn btn-sm btn-secondary" href="{{route('product.edit',$product->id)}}"><span class="mdi mdi-square-edit-outline">Edit</span></a>@endif
                            @if($product->deleted_at == null)
                                <form style="display: inline;" action="{{route('product.destroy',$product->id)}}" method="post">
                                    @csrf
                                    @method('delete')
                                    <button class="btn btn-sm btn-danger" onclick="return confirm('Are You Sure want to delete this product?')"><span style="color:whitesmoke;" class="mdi mdi-delete">Delete</span></button>
                                </form>
                            @endif
                            @if($product->deleted_at != null)
                                <form style="display: inline;" action="{{route('product.restore',$product->id)}}" method="post">
                                    @csrf
                                    @method('post')
                                    <button class="btn btn-sm btn-warning" onclick="return confirm('Do you want to restore this product?')"><span style="color:whitesmoke;" class="mdi mdi-delete">Restore</span></button>
                                </form>
                            @endif

                            @if($product->deleted_at != null)
                                <form style="display: inline;" action="{{route('product.delete',$product->id)}}" method="post">
                                    @csrf
                                    @method('delete')
                                    <button class="btn btn-sm btn-outline-danger" onclick="return confirm('Do you want to Delete this product permanently?')"><span style="color:darkred;" class="mdi mdi-delete">Permanent Delete</span></button>
                                </form>
                            @endif
                        </td>
                    </tr>
                @endforeach
                </tbody>
            </table>
                </div>
            </div>
            <div class="row">

                <div class="pagination border-separted ">
                    {{$products->render()}}
                </div>
            </div>
        </div>
    </div>


@endsection
