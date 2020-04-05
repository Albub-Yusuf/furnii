@extends('layouts.backend.master')
@section('mainContent')
    <div class="row">
        <div class="col-lg-12 offset-0">
            <div class="card card-default">
                <div class="card-header card-header-border-bottom">
                    <h3 class="text-center">{{$title}}</h3>
                </div>
                <div class="card-body">
                    <form action="{{route('advertise.store')}}" method="post" enctype="multipart/form-data">
                        @csrf
                        @method('POST')

                        <label class="text-dark font-weight-medium" for="">Title</label>
                        <div class="input-group mb-2">
                            <div class="input-group-prepend">
														<span class="input-group-text">
															<i class="mdi mdi-format-title"></i>
                                                        </span>
                            </div>
                            <input type="text" name="title" class="form-control" placeholder="Enter Title Here" aria-label="title">
                        </div>

                        <label class="text-dark font-weight-medium" for="">Short Details</label>
                        <div>
                        <!-- <input type="text" name="details" value="{{old('short_details')}}"  class="form-control" placeholder="Enter Product details" aria-label="details">-->
                            <textarea name="short_details" required class="form-control" id="Advertise_short_description" cols="80" rows="5">{{old('short_details')}}</textarea>
                        </div>
                        <br>

                        <div class="col-md-12">
                            <label class="text-dark font-weight-medium" for="image">Image</label>
                            <div class="input-group mb-2">
                                <div class="input-group-prepend">
														<span class="input-group-text">
															<i class="mdi mdi-image"></i>
                                                        </span>

                                </div>
                                <input type="file" class="form-control" name="image" id="image">
                            </div>
                        </div>

                        <label class="text-dark mb-2 mt-4 font-weight-medium d-inline-block mr-3" for="status">Status</label>
                        <ul class="list-unstyled list-inline">
                            <li class="d-inline-block mr-3">
                                <label for="active" class="control control-radio">Active
                                    <input type="radio" id="active" value="active" name="status" checked="checked" />
                                    <div class="control-indicator"></div>
                                </label>
                            </li>
                            <li class="d-inline-block mr-3">
                                <label for="inactive" class="control control-radio">Inactive
                                    <input type="radio" id="inactive" value="inactive" name="status" />
                                    <div class="control-indicator"></div>
                                </label>
                            </li>
                        </ul>

                        <div class="form-footer pt-5 border-top text-center">
                            <button type="submit" class="btn btn-primary btn-default">Create Advertise</button>
                        </div>

                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection
