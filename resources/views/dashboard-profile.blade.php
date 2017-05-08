@extends('layouts.dashboard')

@section('content')

<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        Profile <br>
        <!--<small>Please select any of your activities below.</small>-->
      </h1>
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i>Home</a></li>
        <li class="active">Profile</li>
      </ol>
    </section>

    <!-- Main content -->
    <section class="content">
      <div class="row">
        <div class="col-md-10 cold-md-offset-1">
          <img src="/uploads/avatars/{{ Auth::user()->avatar }}" style="width:150px; height:150px; float:left; border-radius:50%; margin-right:25px;">
          <h2>
            {{ Auth::user()->name }}
          </h2>
        </div>
      </div>
    </section>
    <!-- /.content -->
  </div>

@endsection