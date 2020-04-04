@extends('layouts.backend.master')
@section('mainContent')

        <div class="bg-white border rounded">
            <div class="row no-gutters">
                <div class="col-lg-4 col-xl-3">
                    <div class="profile-content-left pt-5 pb-3 px-3 px-xl-5">
                        <div class="card text-center widget-profile px-0 border-0">
                            <div class="card-img mx-auto " style="width:100%; height:20%;">
                                @if($userInfo->file == NULL)
                                    <img class="" style="width:100%;" src="{{asset('Backend/assets/img/user/placeholder.png')}}">
                                @endif
                                @if($userInfo->file !=NULL)
                                <img class="" style="width:100%;" src="{{asset($userInfo->file)}}">
                                @endif
                            </div>
                            <div class="card-body">
                                <h4 class="py-2 text-dark">{{$userInfo->name}}</h4>
                                <p>{{$userInfo->email}}</p><br>
                                <p></p>
                            </div>
                        </div>

                        <hr class="w-100">
                        <div class="contact-info pt-4">
                            <p class="text-dark font-weight-medium pt-4 mb-2">Email</p>
                            <p>{{$userInfo->email}}</p>
                            <p class="text-dark font-weight-medium pt-4 mb-2">Status</p>
                            <p @if($userInfo->status == 'active') class="text-success" @endif class="text-danger">{{$userInfo->status}}</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-12 col-xl-9">
                    <div class="profile-content-right py-5">
                        <ul class="nav nav-tabs px-3 px-xl-5 nav-style-border" id="myTab" role="tablist">

                            <li class="nav-item">
                                <a class="nav-link" id="settings-tab" data-toggle="tab" href="#settings" role="tab" aria-controls="settings" aria-selected="false">Settings</a>
                            </li>
                        </ul>
                        <div class="tab-content px-3 px-xl-5" id="myTabContent">


                            <div class="tab-pane fade" id="settings" role="tabpanel" aria-labelledby="settings-tab">
                                <br>
                                <div class="row">
                                    <div class="col-lg-12 offset-0">
                                        <div class="card card-default">
                                            <div class="card-header card-header-border-bottom">
                                                <h3 class="text-center">Edit Profile</h3>
                                            </div>
                                            <div class="card-body">
                                                <form action="{{route('user.update',$adminInfo->id)}}" method="post" enctype="multipart/form-data">
                                                    @csrf
                                                    @method('PUT')

                                                    <div class="form-group">
                                                        <label>Select Admin Type</label>
                                                        <select name="adminType" class="form-control" id="adminType">
                                                            <option value="">Choose Admin Type</option>
                                                            <option value="1" @if($adminInfo->type == 'admin') selected @endif>Admin</option>
                                                        </select>
                                                    </div>

                                                    <label class="text-dark font-weight-medium" for="">Name</label>
                                                    <div class="input-group mb-2">
                                                        <div class="input-group-prepend">
														<span class="input-group-text">
															<i class="mdi mdi-account"></i>
                                                        </span>
                                                        </div>
                                                        <input type="text" name="name" value="{{$adminInfo->name}}" class="form-control" placeholder="Enter Admin's Name Here" aria-label="name">
                                                    </div>


                                                    <label class="text-dark font-weight-medium" for="">Email</label>
                                                    <div class="input-group mb-2">
                                                        <div class="input-group-prepend">
														<span class="input-group-text">
															<i class="mdi mdi-email"></i>
														</span>

                                                        </div>
                                                        <input type="email" value="{{$adminInfo->email}}" name="email" class="form-control" placeholder="Enter Email Address" aria-label="email">
                                                    </div>

                                                    <div class="form-group">
                                                        <label class="col-md-12">Image</label>
                                                        <div class="col-md-12">
                                                            @if(isset($adminInfo) && $adminInfo->file != null)

                                                                <img src="{{asset($adminInfo->file)}}" style="width:100px;" alt="image">
                                                            @endif
                                                            <input input name="file" type="file" class="form-control-file">
                                                            <!--<input name="file" type="file" placeholder="Upload File" class="form-control form-control-file"  >-->
                                                        </div>

                                                    </div>
                                                    <!--
                                                    <div class="form-group">
                                                        <label class="col-md-8">Upload Image</label>
                                                        <input input name="file" type="file" class="form-control-file">
                                                    </div>
                                                    -->
                                                    <label class="text-dark mb-2 mt-4 font-weight-medium d-inline-block mr-3" for="status">Status</label>
                                                    @php
                                                        if(old("status")){
                                                        $status = old('status');
                                                    }elseif(isset($adminInfo)){

                                                    $status = $adminInfo->status;
                                                }else{
                                                    $status = null;
                                            }@endphp
                                                    <ul class="list-unstyled list-inline">
                                                        <li class="d-inline-block mr-3">
                                                            <label for="active" class="control control-radio">Active
                                                                <input type="radio" @if($status == 'active') checked @endif  id="active" value="active" name="status"  />
                                                                <div class="control-indicator"></div>
                                                            </label>
                                                        </li>
                                                        <li class="d-inline-block mr-3">
                                                            <label for="inactive" class="control control-radio">Inactive
                                                                <input type="radio" id="inactive" value="inactive" name="status" @if($status == 'inactive') checked @endif  />
                                                                <div class="control-indicator"></div>
                                                            </label>
                                                        </li>
                                                    </ul>

                                                    <div class="form-footer pt-5 border-top text-center">
                                                        <button type="submit" class="btn btn-primary btn-default">Update Admin Information</button>
                                                    </div>

                                                </form>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                        </div>
                    </div>
                </div>
            </div>
        </div>




@endsection
