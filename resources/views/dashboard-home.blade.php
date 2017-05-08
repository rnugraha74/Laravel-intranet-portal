@extends('layouts.dashboard')

@section('content')

<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        Dashboard <br>
        <small>Please select any of your activities below.</small>
      </h1>
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i>Home</a></li>
        <li class="active">Dashboard</li>
      </ol>
    </section>

    <!-- Main content -->
    <section class="content">
      <div class="row">
        <div class="col-sm-8">
          <div class="box box-widget">
            <div class="box-header with-border">
              <h3 class="box-title">Latest News</h3>
            </div>
            <div class="box-body">
              <p>This is news</p>
            </div>
          </div>
        </div>
        <div class="col-sm-4">
          <div class="box box-widget">
            <div class="box-header with-border">
              <h3 class="box-title">Birthdays</h3>
            </div>
            <div class="box-body">
              <p>This is bla-bla-bla</p>
            </div>
          </div>
        </div>      
      </div>
    </section>
    <!-- /.content -->
  </div>

@endsection