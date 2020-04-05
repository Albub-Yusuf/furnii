@extends('layouts.backend.master')
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
                            <th scope="col">Title</th>
                            <th scope="col">Status</th>
                            <th scope="col" class="text-center">Action</th>
                        </tr>
                        </thead>
                        <tbody>
                        @foreach($ads as $advertise)
                            <tr>
                                <th scope="row">{{$serial++}}</th>
                                <td><img width="60px" height="60px" src="{{asset($advertise->image)}}"></td>
                                <td><a href="{{route('product.show',$advertise->id)}}">{{$advertise->title}}</a></td>
                                <td>
                                    <span class="mb-2 mr-2 badge badge-pill  @if($advertise->status == 'active') badge-success @endif  @if($advertise->status == 'inactive') badge-danger @endif">{{$advertise->status}}</span>
                                </td>
                                <td class="text-center">@if($advertise->deleted_at == null) <a class="btn btn-sm btn-secondary" href="{{route('advertise.edit',$advertise->id)}}"><span class="mdi mdi-square-edit-outline">Edit</span></a>@endif
                                    @if($advertise->deleted_at == null)
                                        <form style="display: inline;" action="{{route('advertise.destroy',$advertise->id)}}" method="post">
                                            @csrf
                                            @method('delete')
                                            <button class="btn btn-sm btn-danger" onclick="return confirm('Are You Sure want to delete this advertise?')"><span style="color:whitesmoke;" class="mdi mdi-delete">Delete</span></button>
                                        </form>
                                    @endif
                                    @if($advertise->deleted_at != null)
                                        <form style="display: inline;" action="{{route('advertise.restore',$advertise->id)}}" method="post">
                                            @csrf
                                            @method('post')
                                            <button class="btn btn-sm btn-warning" onclick="return confirm('Do you want to restore this advertise?')"><span style="color:whitesmoke;" class="mdi mdi-delete">Restore</span></button>
                                        </form>
                                    @endif

                                    @if($advertise->deleted_at != null)
                                        <form style="display: inline;" action="{{route('advertise.delete',$advertise->id)}}" method="post">
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
                    {{$ads->render()}}
                </div>
            </div>
        </div>
    </div>


@endsection
