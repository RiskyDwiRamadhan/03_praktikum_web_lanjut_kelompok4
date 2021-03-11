@extends('layouts.master')

@section('judul')
    Halaman {{$title}}
@endsection
@section('content')

<div class="row tm-welcome-content">
    <h2 class="white-text tm-handwriting-font tm-welcome-header"><img src="{{asset('template')}}/img/header-line.png" alt="Line" class="tm-header-line">&nbsp;Welcome To&nbsp;&nbsp;<img src="{{asset('template')}}/img/header-line.png" alt="Line" class="tm-header-line"></h2>
    <h2 class="gold-text tm-welcome-header-2">Cafe House</h2>
    <p class="gray-text tm-welcome-description">Cafe House template is a mobile-friendly responsive <span class="gold-text">Bootstrap v3.3.5</span> layout by <span class="gold-text">templatemo</span>. Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget dolor. Aenean massa. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculusnec quam felis, ultricies nec, pellentesque eu, pretium quis, sem.</p>
    <a href="#main" class="tm-more-button tm-more-button-welcome">Details</a>      
  </div>
  <img src="{{asset('template')}}/img/table-set.png" alt="Table Set" class="tm-table-set img-responsive">             
</div>      
</section>
<div class="tm-main-section light-gray-bg">
    <div class="container" id="main">
        
        <div class="col-md-6">
            <!-- USERS LIST -->
            <div class="box box-danger">
              <div class="box-header with-border">
                <h3 class="box-title">Latest Members</h3>

                  {{-- <div class="box-tools pull-right">
                    <span class="label label-danger">8 New Members</span>
                    <button type="button" class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i>
                    </button>
                    <button type="button" class="btn btn-box-tool" data-widget="remove"><i class="fa fa-times"></i>
                    </button>
                  </div> --}}
              </div>
              <!-- /.box-header -->
              <div class="box-body no-padding">
                <ul class="users-list clearfix">

                @foreach ($data as $item)
                  <li>
                    <img src="{{$item->image}}" alt="User Image">
                    <a class="users-list-name" href="#">{{$item->nama}}</a>
                    <span class="users-list-date">{{$item->tanggal}}</span>
                  </li>  

                @endforeach
                </ul>
                <!-- /.users-list -->
              </div>
              <!-- /.box-body -->
              <div class="box-footer text-center">
                <a href="javascript:void(0)" class="uppercase">View All Users</a>
              </div>
              <!-- /.box-footer -->
            </div>
            <!--/.box -->
          </div>
              {{-- <!-- USERS LIST -->
              <div class="box box-danger">
                <div class="box-header with-border">
                  <h3 class="box-title">Latest Members</h3>

                  <div class="box-tools pull-right">
                    <span class="label label-danger">8 New Members</span>
                    <button type="button" class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i>
                    </button>
                    <button type="button" class="btn btn-box-tool" data-widget="remove"><i class="fa fa-times"></i>
                    </button>
                  </div>
                </div>
                <!-- /.box-header -->
                @foreach ($data as $item)
                <div class="box-body no-padding">
                  <ul class="users-list clearfix">
                      
                    <li>
                      <img src="{{$item->image}}" alt="User Image">
                      <a class="users-list-name" href="#">{{$item->nama}}</a>
                      <span class="users-list-date">{{$item->tanggal}}</span>
                    </li>  

                  </ul>
                  <!-- /.users-list -->
                </div>                  
                @endforeach
                <!-- /.box-body -->
                <div class="box-footer text-center">
                  <a href="javascript:void(0)" class="uppercase">View All Users</a>
                </div>
                <!-- /.box-footer -->
              </div>
              <!--/.box --> --}}
      </section>
    </div>
  </div> 
  
@endsection