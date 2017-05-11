@extends('layouts.dashboard')

@section('content')

<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        News &amp; Regulatory
        
      </h1>
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i>Home</a></li>
        <li class="active">News &amp; Regulatory</li>
      </ol>
    </section>

    <!-- Main content -->
    <section class="content">
      <div class="row">
        <div class="col-sm-8">
          <div class="box box-widget">
            <div class="box-header with-border">
              <h3 class="box-title">Today News</h3>
            </div>
            <div class="box-body">
              <div class="attachment-block clearfix">
                <img class="attachment-img" src="{{ asset('img/photo1.png') }}" alt="Attachment Image">

                <div class="attachment-pushed">
                  <h4 class="attachment-heading"><a href="http://www.lipsum.com/">Lorem ipsum text generator</a></h4>

                  <div class="attachment-text">
                    Description about the attachment can be placed here.
                    Lorem Ipsum is simply dummy text of the printing and typesetting industry... <a href="#">more</a>
                  </div>
                  <!-- /.attachment-text -->
                </div>
              </div>
              
              <div class="attachment-block clearfix">
                <img class="attachment-img" src="{{ asset('img/photo1.png') }}" alt="Attachment Image">

                <div class="attachment-pushed">
                  <h4 class="attachment-heading"><a href="http://www.lipsum.com/">Lorem ipsum text generator</a></h4>

                  <div class="attachment-text">
                    Description about the attachment can be placed here.
                    Lorem Ipsum is simply dummy text of the printing and typesetting industry... <a href="#">more</a>
                  </div>
                  <!-- /.attachment-text -->
                </div>
                <!-- /.attachment-pushed -->
              </div>
              
              <div class="attachment-block clearfix">
                <img class="attachment-img" src="{{ asset('img/photo1.png') }}" alt="Attachment Image">

                <div class="attachment-pushed">
                  <h4 class="attachment-heading"><a href="http://www.lipsum.com/">Lorem ipsum text generator</a></h4>

                  <div class="attachment-text">
                    Description about the attachment can be placed here.
                    Lorem Ipsum is simply dummy text of the printing and typesetting industry... <a href="#">more</a>
                  </div>
                  <!-- /.attachment-text -->
                </div>
                <!-- /.attachment-pushed -->
              </div>
              <div class="attachment-block clearfix">
                <img class="attachment-img" src="{{ asset('img/photo1.png') }}" alt="Attachment Image">

                <div class="attachment-pushed">
                  <h4 class="attachment-heading"><a href="http://www.lipsum.com/">Lorem ipsum text generator</a></h4>

                  <div class="attachment-text">
                    Description about the attachment can be placed here.
                    Lorem Ipsum is simply dummy text of the printing and typesetting industry... <a href="#">more</a>
                  </div>
                  <!-- /.attachment-text -->
                </div>
                <!-- /.attachment-pushed -->
              </div>
            </div>
          </div>
        </div>
        <div class="col-sm-4">
          <div class="box box-widget">
            <div class="box-header with-border">
              <h3 class="box-title">Daily Regulatory</h3>
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