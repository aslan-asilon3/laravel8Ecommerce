@extends('layouts.appUser')

@section('title', 'Dashboard')

@section('content')
  <h4> <b> halo ! {{ Auth::user()->name }} . Anda login sebagai <span class="badge bg-primary">USER</span>  </b> </h4>
  <div class="container-fluid">
    <div class="row">
      <div class="col-md-5">
        <div class="card card-primary card-outline">
          <div class="card-body box-profile">
          <div class="text-center">
          <img class="profile-user-img img-fluid img-circle" src="{{asset('assetslte/foto1.1.jpg')}}" alt="User profile picture">
          </div>
          <h3 class="profile-username text-center">{{ Auth::user()->name }} </h3>
          <p class="text-muted text-center">Software Engineer</p>
          <ul class="list-group list-group-unbordered mb-3">
          <li class="list-group-item">
          <b>Followers</b> <a class="float-right">1,322</a>
          </li>
          <li class="list-group-item">
          <b>Following</b> <a class="float-right">543</a>
          </li>
          <li class="list-group-item">
          <b>Friends</b> <a class="float-right">13,287</a>
          </li>
          </ul>
          <a href="#" class="btn btn-primary btn-block"><b>Follow</b></a>
          </div>
        </div>
      </div>


      <div class="col-md-6">
        <div class="card card-widget widget-user">
            <div class="widget-user-header text-white" style="background: url({{asset('assetslte/dist/img/photo1.png')}}) center center;">
            <h3 class="widget-user-username text-right">{{ Auth::user()->name }}</h3>
            <h5 class="widget-user-desc text-right">Web Designer</h5>
            </div>
            <div class="widget-user-image">
            <img class="img-circle" src="{{asset('assetslte/foto1.1.jpg')}}" alt="User Avatar">
            </div>
              <div class="card-footer">
                <div class="row">
                      <div class="col-sm-4 border-right">
                        <div class="description-block">
                        <h5 class="description-header">3,200</h5>
                        <span class="description-text">SALES</span>
                        </div>
                      </div>
                      <div class="col-sm-4 border-right">
                        <div class="description-block">
                        <h5 class="description-header">13,000</h5>
                        <span class="description-text">FOLLOWERS</span>
                        </div>

                        </div>

                        <div class="col-sm-4">
                        <div class="description-block">
                        <h5 class="description-header">35</h5>
                        <span class="description-text">PRODUCTS</span>
                        </div>

                        </div>
                </div>
              </div>
          </div>
      </div>
    </div>
  </div>


@endsection