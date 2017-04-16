@extends('layouts.onepage-welcome')

@section('content')

<!-- Content Wrapper. Contains page content -->
  <!-- Full Width Column -->

<div class="content-wrapper">
  <div class="container"> 
    <!--Main content -->
    <section class="content">
      <div class="col-md-3">
        <!-- PRODUCT LIST -->
          <div class="box box-solid box-primary">
            <div class="box-header with-border">
              <h3 class="box-title">Today Newspaper</h3>

              <div class="box-tools pull-right">
                <button type="button" class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i>
                </button>
                <button type="button" class="btn btn-box-tool" data-widget="remove"><i class="fa fa-times"></i></button>
              </div>
            </div>
            <!-- /.box-header -->
            <div class="box-body">
              <ul class="products-list product-list-in-box">
                <li class="item">
                  <div class="product-img">
                    <img src="{{ asset('img/default-50x50.gif') }}" alt="Newspaper">
                  </div>
                  <div class="product-info">
                    <a href="javascript:void(0)" class="product-title">Presidential Election
                      <span class="label label-danger pull-right">Hot</span></a>
                        <span class="product-description">
                          The US Presidential election has just voted a few hours ago, we still waiting for the final results
                        </span>
                  </div>
                </li>
                <!-- /.item -->
                <li class="item">
                  <div class="product-img">
                    <img src="{{ asset('img/default-50x50.gif') }}" alt="Product Image">
                  </div>
                  <div class="product-info">
                    <a href="javascript:void(0)" class="product-title">Bicycle
                      <!--<span class="label label-info pull-right">$700</span>--></a>
                        <span class="product-description">
                          26" Mongoose Dolomite Men's 7-speed, Navy Blue.
                        </span>
                  </div>
                </li>
                <!-- /.item -->
                <li class="item">
                  <div class="product-img">
                    <img src="{{ asset('img/default-50x50.gif') }}" alt="Product Image">
                  </div>
                  <div class="product-info">
                    <a href="javascript:void(0)" class="product-title">Xbox One <!--<span class="label label-danger pull-right">$350</span>--></a>
                        <span class="product-description">
                          Xbox One Console Bundle with Halo Master Chief Collection.
                        </span>
                  </div>
                </li>
                <!-- /.item -->
                <li class="item">
                  <div class="product-img">
                    <img src="{{ asset('img/default-50x50.gif') }}" alt="Product Image">
                  </div>
                  <div class="product-info">
                    <a href="javascript:void(0)" class="product-title">PlayStation 4
                      <!--<span class="label label-success pull-right">$399</span>--></a>
                        <span class="product-description">
                          PlayStation 4 500GB Console (PS4)
                        </span>
                  </div>
                </li>
                <!-- /.item -->
              </ul>
            </div>
            <!-- /.box-body -->
            <div class="box-footer text-center">
              <a href="javascript:void(0)" class="uppercase">View All News</a>
            </div>
            <!-- /.box-footer -->
          </div>
        <div class="box">
          <div class="box-header with-border">
            <h3 class="box-title">Today Newspaper</h3>
            <div class="box-tools pull-right">
              <!-- Buttons, labels, and many other things can be placed here! -->
              <!-- Here is a label for example -->
              <span class="label label-primary">Label</span>
            </div><!-- /.box-tools -->
          </div><!-- /.box-header -->
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
              <!-- /.attachment-pushed -->
            </div>
          </div><!-- /.box-body -->
          <div class="box-footer">
            The footer of the box
          </div><!-- box-footer -->
        </div><!-- /.box -->
        <div class="box">
          <div class="box-header with-border">
            <h3 class="box-title">Daily Regulatory</h3>
            <div class="box-tools pull-right">
              <!-- Buttons, labels, and many other things can be placed here! -->
              <!-- Here is a label for example -->
              <span class="label label-primary">Label</span>
            </div><!-- /.box-tools -->
          </div><!-- /.box-header -->
          <div class="box-body">
            The body of the box
          </div><!-- /.box-body -->
          <div class="box-footer">
            The footer of the box
          </div><!-- box-footer -->
        </div><!-- /.box -->
        <div class="box box-default collapsed-box">
          <div class="box-header with-border">
            <h3 class="box-title">Expandable</h3>
            <div class="box-tools pull-right">
              <button class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-plus"></i></button>
            </div><!-- /.box-tools -->
          </div><!-- /.box-header -->
          <div class="box-body">
            The body of the box
          </div><!-- /.box-body -->
        </div><!-- /.box -->
      </div>
      <div class="col-md-6">
        <div class="box box-solid">
            <div class="box-header with-border">
              <h3 class="box-title">Gallery</h3>
            </div>
            <!-- /.box-header -->
            <div class="box-body">
              <div id="carousel-example-generic" class="carousel slide" data-ride="carousel">
                <ol class="carousel-indicators">
                  <li data-target="#carousel-example-generic" data-slide-to="0" class="active"></li>
                  <li data-target="#carousel-example-generic" data-slide-to="1" class=""></li>
                  <li data-target="#carousel-example-generic" data-slide-to="2" class=""></li>
                </ol>
                <div class="carousel-inner">
                  <div class="item active">
                    <img src="{{ asset('//placehold.it/900x500/39CCCC/ffffff&text=I+Love+Bootstrap') }}" alt="First slide">

                    <div class="carousel-caption">
                      First Slide
                    </div>
                  </div>
                  <div class="item">
                    <img src="{{ asset('//placehold.it/900x500/3c8dbc/ffffff&text=I+Love+Bootstrap') }}" alt="Second slide">

                    <div class="carousel-caption">
                      Second Slide
                    </div>
                  </div>
                  <div class="item">
                    <img src="{{ asset('//placehold.it/900x500/f39c12/ffffff&text=I+Love+Bootstrap') }}" alt="Third slide">

                    <div class="carousel-caption">
                      Third Slide
                    </div>
                  </div>
                </div>
                <a class="left carousel-control" href="#carousel-example-generic" data-slide="prev">
                  <span class="fa fa-angle-left"></span>
                </a>
                <a class="right carousel-control" href="#carousel-example-generic" data-slide="next">
                  <span class="fa fa-angle-right"></span>
                </a>
              </div>
            </div>
            <!-- /.box-body -->
          </div>
          <!-- /.box -->
        <!-- Box Comment -->
        <div class="box box-widget">
          <div class="box-header with-border">
            <div class="user-block">
              <img class="img-circle" src="{{ asset('img/user1-128x128.jpg') }}" alt="User Image">
              <span class="username"><a href="#">Jonathan Burke Jr.</a></span>
              <span class="description">Shared publicly - 7:30 PM Today</span>
            </div>
            <!-- /.user-block -->
            <div class="box-tools">
              <button type="button" class="btn btn-box-tool" data-toggle="tooltip" title="Mark as read">
              <i class="fa fa-circle-o"></i></button>
              <button type="button" class="btn btn-box-tool" data-widget="collapse">
                <i class="fa fa-minus"></i>
              </button>
              <button type="button" class="btn btn-box-tool" data-widget="remove">
                <i class="fa fa-times"></i>
              </button>
            </div>
            <!-- /.box-tools -->
          </div>
          <!-- /.box-header -->
          <div class="box-body">
          <!-- post text -->
            <p>Far far away, behind the word mountains, far from the
               countries Vokalia and Consonantia, there live the blind
               texts. Separated they live in Bookmarksgrove right at</p>

            <p>the coast of the Semantics, a large language ocean.
               A small river named Duden flows by their place and supplies
               it with the necessary regelialia. It is a paradisematic
               country, in which roasted parts of sentences fly into
               your mouth.</p>

            <!-- Attachment -->
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
            <!-- /.attachment-block -->

            <!-- Social sharing buttons -->
            <button type="button" class="btn btn-default btn-xs"><i class="fa fa-share"></i> Share</button>
            <button type="button" class="btn btn-default btn-xs"><i class="fa fa-thumbs-o-up"></i> Like</button>
            <span class="pull-right text-muted">45 likes - 2 comments</span>
          </div>
          <!-- /.box-body -->
          <div class="box-footer box-comments">
            <div class="box-comment">
              <!-- User image -->
              <img class="img-circle img-sm" src="{{ asset('img/user3-128x128.jpg') }}" alt="User Image">

              <div class="comment-text">
                <span class="username">
                  Maria Gonzales
                  <span class="text-muted pull-right">8:03 PM Today</span>
                  </span><!-- /.username -->
                    It is a long established fact that a reader will be distracted
                    by the readable content of a page when looking at its layout.
              </div>
              <!-- /.comment-text -->
            </div>
            <!-- /.box-comment -->
            <div class="box-comment">
              <!-- User image -->

              <img class="img-circle img-sm" src="{{ asset('img/user5-128x128.jpg') }}" alt="User Image">

              <div class="comment-text">
                <span class="username">
                  Nora Havisham
                  <span class="text-muted pull-right">8:03 PM Today</span>
                </span><!-- /.username -->
                The point of using Lorem Ipsum is that it has a more-or-less
                normal distribution of letters, as opposed to using
                'Content here, content here', making it look like readable English.
              </div>
              <!-- /.comment-text -->
            </div>
            <!-- /.box-comment -->
          </div>
          <!-- /.box-footer -->
          <div class="box-footer">
            <form action="#" method="post">
              <img class="img-responsive img-circle img-sm" src="{{ asset('img/user4-128x128.jpg') }}" alt="Alt Text">
              <!-- .img-push is used to add margin to elements next to floating images -->
                <div class="img-push">
                  <input type="text" class="form-control input-sm" placeholder="Press enter to post comment">
                </div>
            </form>
          </div>
          <!-- /.box-footer -->
        </div>
        <!-- /.box -->

        <!-- Box Comment -->
        <div class="box box-widget">
          <div class="box-header with-border">
            <div class="user-block">
              <img class="img-circle" src="{{ asset('img/user1-128x128.jpg') }}" alt="User Image">
              <span class="username"><a href="#">Jonathan Burke Jr.</a></span>
              <span class="description">Shared publicly - 7:30 PM Today</span>
            </div>
            <!-- /.user-block -->
            <div class="box-tools">
              <button type="button" class="btn btn-box-tool" data-toggle="tooltip" title="Mark as read">
              <i class="fa fa-circle-o"></i></button>
              <button type="button" class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i>
              </button>
              <button type="button" class="btn btn-box-tool" data-widget="remove"><i class="fa fa-times"></i></button>
            </div>
            <!-- /.box-tools -->
          </div>
          <!-- /.box-header -->
          <div class="box-body">
            <!-- post text -->
            <p>Far far away, behind the word mountains, far from the
               countries Vokalia and Consonantia, there live the blind
               texts. Separated they live in Bookmarksgrove right at</p>

                  <p>the coast of the Semantics, a large language ocean.
                     A small river named Duden flows by their place and supplies
                     it with the necessary regelialia. It is a paradisematic
                     country, in which roasted parts of sentences fly into
                     your mouth.</p>

                  <!-- Attachment -->
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
                    <!-- /.attachment-block -->

                    <!-- Social sharing buttons -->
                    <button type="button" class="btn btn-default btn-xs"><i class="fa fa-share"></i> Share</button>
                    <button type="button" class="btn btn-default btn-xs"><i class="fa fa-thumbs-o-up"></i> Like</button>
                    <span class="pull-right text-muted">45 likes - 2 comments</span>
                </div>
                <!-- /.box-body -->
                <div class="box-footer box-comments">
                  <div class="box-comment">
                    <!-- User image -->
                    <img class="img-circle img-sm" src="{{ asset('img/user3-128x128.jpg') }}" alt="User Image">

                    <div class="comment-text">
                      <span class="username">
                        Maria Gonzales
                          <span class="text-muted pull-right">8:03 PM Today</span>
                                    </span><!-- /.username -->
                            It is a long established fact that a reader will be distracted
                            by the readable content of a page when looking at its layout.
                    </div>
                    <!-- /.comment-text -->
                  </div>
                  <!-- /.box-comment -->
                  <div class="box-comment">
                      <!-- User image -->
                      <img class="img-circle img-sm" src="{{ asset ('img/user5-128x128.jpg') }}" alt="User Image">

                    <div class="comment-text">
                      <span class="username">
                        Nora Havisham
                          <span class="text-muted pull-right">8:03 PM Today</span>
                      </span><!-- /.username -->
                            The point of using Lorem Ipsum is that it has a more-or-less
                            normal distribution of letters, as opposed to using
                            'Content here, content here', making it look like readable English.
                    </div>
                    <!-- /.comment-text -->
                  </div>
                  <!-- /.box-comment -->
                </div>
                <!-- /.box-footer -->
                <div class="box-footer">
                  <form action="#" method="post">
                    <img class="img-responsive img-circle img-sm" src="{{ asset('img/user4-128x128.jpg') }}" alt="Alt Text">
                    <!-- .img-push is used to add margin to elements next to floating images -->
                    <div class="img-push">
                      <input type="text" class="form-control input-sm" placeholder="Press enter to post comment">
                    </div>
                  </form>
                </div>
                <!-- /.box-footer -->
              </div>
              <!-- /.box -->
      </div>
      <div class="col-md-3">
        <div class="box box-solid bg-green-gradient">
            <div class="box-header">
              <i class="fa fa-calendar"></i>

              <h3 class="box-title">Calendar</h3>
              <!-- tools box -->
              <div class="pull-right box-tools">
                <!-- button with a dropdown -->
                <div class="btn-group">
                  <button type="button" class="btn btn-success btn-sm dropdown-toggle" data-toggle="dropdown">
                    <i class="fa fa-bars"></i></button>
                  <ul class="dropdown-menu pull-right" role="menu">
                    <li><a href="#">Add new event</a></li>
                    <li><a href="#">Clear events</a></li>
                    <li class="divider"></li>
                    <li><a href="#">View calendar</a></li>
                  </ul>
                </div>
                <button type="button" class="btn btn-success btn-sm" data-widget="collapse"><i class="fa fa-minus"></i>
                </button>
                <button type="button" class="btn btn-success btn-sm" data-widget="remove"><i class="fa fa-times"></i>
                </button>
              </div>
              <!-- /. tools -->
            </div>
            <!-- /.box-header -->
            <div class="box-body no-padding">
              <!--The calendar -->
              <div id="calendar" style="width: 100%"></div>
            </div>
            <!-- /.box-body -->
            <div class="box-footer text-black">
              <div class="row">
                <div class="col-sm-6">
                  <!-- Progress bars -->
                  <div class="clearfix">
                    <span class="pull-left">Task #1</span>
                    <small class="pull-right">90%</small>
                  </div>
                  <div class="progress xs">
                    <div class="progress-bar progress-bar-green" style="width: 90%;"></div>
                  </div>

                  <div class="clearfix">
                    <span class="pull-left">Task #2</span>
                    <small class="pull-right">70%</small>
                  </div>
                  <div class="progress xs">
                    <div class="progress-bar progress-bar-green" style="width: 70%;"></div>
                  </div>
                </div>
                <!-- /.col -->
                <div class="col-sm-6">
                  <div class="clearfix">
                    <span class="pull-left">Task #3</span>
                    <small class="pull-right">60%</small>
                  </div>
                  <div class="progress xs">
                    <div class="progress-bar progress-bar-green" style="width: 60%;"></div>
                  </div>

                  <div class="clearfix">
                    <span class="pull-left">Task #4</span>
                    <small class="pull-right">40%</small>
                  </div>
                  <div class="progress xs">
                    <div class="progress-bar progress-bar-green" style="width: 40%;"></div>
                  </div>
                </div>
                <!-- /.col -->
              </div>
              <!-- /.row -->
            </div>
        </div>
        <!-- Construct the box with style you want. Here we are using box-danger -->
        <!-- Then add the class direct-chat and choose the direct-chat-* contexual class -->
        <!-- The contextual class should match the box, so we are using direct-chat-danger -->
        <div class="box box-danger direct-chat direct-chat-danger">
          <div class="box-header with-border">
            <h3 class="box-title">Direct Chat</h3>
            <div class="box-tools pull-right">
              <span data-toggle="tooltip" title="3 New Messages" class="badge bg-red">3</span>
              <button class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i></button>
              <!-- In box-tools add this button if you intend to use the contacts pane -->
              <button class="btn btn-box-tool" data-toggle="tooltip" title="Contacts" data-widget="chat-pane-toggle"><i class="fa fa-comments"></i></button>
              <button class="btn btn-box-tool" data-widget="remove"><i class="fa fa-times"></i></button>
            </div>
          </div><!-- /.box-header -->
          <div class="box-body">
            <!-- Conversations are loaded here -->
            <div class="direct-chat-messages">
              <!-- Message. Default to the left -->
              <div class="direct-chat-msg">
                <div class="direct-chat-info clearfix">
                  <span class="direct-chat-name pull-left">Alexander Pierce</span>
                  <span class="direct-chat-timestamp pull-right">23 Jan 2:00 pm</span>
                </div><!-- /.direct-chat-info -->
                <img class="direct-chat-img" src="../dist/img/user1-128x128.jpg" alt="message user image"><!-- /.direct-chat-img -->
                <div class="direct-chat-text">
                  Is this template really for free? That's unbelievable!
                </div><!-- /.direct-chat-text -->
              </div><!-- /.direct-chat-msg -->

              <!-- Message to the right -->
              <div class="direct-chat-msg right">
                <div class="direct-chat-info clearfix">
                  <span class="direct-chat-name pull-right">Sarah Bullock</span>
                  <span class="direct-chat-timestamp pull-left">23 Jan 2:05 pm</span>
                </div><!-- /.direct-chat-info -->
                <img class="direct-chat-img" src="../dist/img/user3-128x128.jpg" alt="message user image"><!-- /.direct-chat-img -->
                <div class="direct-chat-text">
                  You better believe it!
                </div><!-- /.direct-chat-text -->
              </div><!-- /.direct-chat-msg -->
            </div><!--/.direct-chat-messages-->

            <!-- Contacts are loaded here -->
            <div class="direct-chat-contacts">
              <ul class="contacts-list">
                <li>
                  <a href="#">
                    <img class="contacts-list-img" src="../dist/img/user1-128x128.jpg" alt="Contact Avatar">
                    <div class="contacts-list-info">
                      <span class="contacts-list-name">
                        Count Dracula
                        <small class="contacts-list-date pull-right">2/28/2015</small>
                      </span>
                      <span class="contacts-list-msg">How have you been? I was...</span>
                    </div><!-- /.contacts-list-info -->
                  </a>
                </li><!-- End Contact Item -->
              </ul><!-- /.contatcts-list -->
            </div><!-- /.direct-chat-pane -->
          </div><!-- /.box-body -->
          <div class="box-footer">
            <div class="input-group">
              <input type="text" name="message" placeholder="Type Message ..." class="form-control">
              <span class="input-group-btn">
                <button type="button" class="btn btn-danger btn-flat">Send</button>
              </span>
            </div>
          </div><!-- /.box-footer-->
        </div><!--/.direct-chat -->
        <div class="box box-default collapsed-box">
          <div class="box-header with-border">
            <h3 class="box-title">Expandable</h3>
            <div class="box-tools pull-right">
              <button class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-plus"></i></button>
            </div><!-- /.box-tools -->
          </div><!-- /.box-header -->
          <div class="box-body">
            The body of the box
          </div><!-- /.box-body -->
        </div><!-- /.box -->
      </div>
    </section> 
    <!-- /.content -->
  <!-- /.container -->
  </div>
</div>

@endsection