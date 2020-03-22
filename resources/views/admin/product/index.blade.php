@php
    use Illuminate\Support\Str;
@endphp
@extends('layouts.backend.master')

@section('mainContent')

    <div class="row">
        <div class="col-sm-12 col-md-8 col-lg-8 offset-2">
            <div class="text-center"><h3>{{$title}}</h3></div>
            <table class="table table-responsive-sm table-bordered">
                <thead class="thead-light">
                <tr>
                    <th scope="col">#</th>
                    <th scope="col">product Name</th>
                    <th style="max-width: 50%;">Details</th>
                    <th scope="col">Status</th>
                    <th scope="col" style="width:100px;">Image</th>
                    <th scope="col" class="text-center">Action</th>
                </tr>
                </thead>
                <tbody>
                @foreach($products as $product)
                    <tr>
                        <th scope="row">{{$serial++}}</th>
                        <td>{{$product->name}}</td>
                        <td>{{Str::limit($product->description,50)}}
                            <a href="{{route('product.show',$product->id)}}">Show Details</a>
                        </td>

                        <td>
                            <span class="mb-2 mr-2 badge badge-pill  @if($product->status == 'active') badge-success @endif  @if($product->status == 'inactive') badge-danger @endif">{{$product->status}}</span>
                        </td>
                        <td><img width="60px" height="60px" src="{{asset($product->featured_image)}}"></td>
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
            <div class="row">

                <div class="pagination border-separted ">
                    {{$products->render()}}
                </div>
            </div>
        </div>
    </div>


@endsection
