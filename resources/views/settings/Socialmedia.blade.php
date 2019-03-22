@extends('admin_layout.layout.master')

@section('title') @if( ! empty($title)) {{ $title }} | @endif @parent @endsection

@section('content')
  <!-- page content -->
  <div class="right_col" role="main">
    <div class="">
      <div class="page-title">
        <div class="title_left">
          <h3>{{$title}}</h3>
        </div>

        <div class="title_right">
          <div class="col-md-5 col-sm-5 col-xs-12 form-group pull-right top_search">
            <div class="input-group">
              <input type="text" class="form-control" placeholder="Search for...">
              <span class="input-group-btn">
                      <button class="btn btn-default" type="button">Go!</button>
                    </span>
            </div>
          </div>
        </div>
      </div>
      <div class="clearfix"></div>
      @include('partials.alerts.flash')
      @include('partials.errors.error')
      <div class="clearfix"></div>
      <div class="row">
        <div class="col-md-12 col-sm-12 col-xs-12">
          <div class="x_panel">
            <div class="x_title">
              <h2>{{$title}} <small></small></h2>
              <ul class="nav navbar-right panel_toolbox">
                <li><a class="collapse-link"><i class="fa fa-chevron-up"></i></a>
                </li>

                <li><a class="close-link"><i class="fa fa-close"></i></a>
                </li>
              </ul>
              <div class="clearfix"></div>
            </div>
            <div class="x_content">
              <br />
              <form id="" method="POST" action="{{url('/save-settings')}}" data-parsley-validate class="form-horizontal form-label-left" enctype="multipart/form-data"  accept-charset="UTF-8" novalidate files=true>
                {{ csrf_field() }}
                <div class="item form-group">
                  <label class="control-label col-md-3 col-sm-3 col-xs-12" for="name">Facebook Link <span class="required">*</span>
                  </label>
                  <div class="col-md-6 col-sm-6 col-xs-12">
                    <input id="text" class="form-control col-md-7 col-xs-12" value="{{ old('facebbok')? old('facebook') : get_option('facebook') }}" name="facebook" required="required" type="text">
                  </div>
                </div>

                <div class="item form-group">
                    <label class="control-label col-md-3 col-sm-3 col-xs-12" for="number">Twitter Link  <span class="required">*</span>
                  </label>
                  <div class="col-md-6 col-sm-6 col-xs-12">
                    <input type="text" id="twitter" name="twitter" value="{{ old('twitter')? old('twitter') : get_option('twitter') }}" required="required" class="form-control col-md-7 col-xs-12">
                  </div>
                </div>

                <div class="item form-group">
                    <label class="control-label col-md-3 col-sm-3 col-xs-12" for="number">Instagram Link  <span class="required">*</span>
                  </label>
                  <div class="col-md-6 col-sm-6 col-xs-12">
                    <input type="text" id="instagram" name="instagram" value="{{ old('instagram')? old('instagram') : get_option('instagram') }}" required="required" class="form-control col-md-7 col-xs-12">
                  </div>
                </div>
                <div class="item form-group">
                    <label class="control-label col-md-3 col-sm-3 col-xs-12" for="number">Google Plus  <span class="required">*</span>
                  </label>
                  <div class="col-md-6 col-sm-6 col-xs-12">
                    <input type="text" id="google" name="google" value="{{ old('google')? old('google') : get_option('google') }}" required="required" class="form-control col-md-7 col-xs-12">
                  </div>
                </div>
                <div class="item form-group">
                    <label class="control-label col-md-3 col-sm-3 col-xs-12" for="number">Description Info <span class="required">*</span>
                  </label>
                  <div class="col-md-6 col-sm-6 col-xs-12">
                    <input type="text" id="socialdescription" name="socialdescription" value="{{ old('socialdescription')? old('socialdescription') : get_option('socialdescription') }}" required="required" data-validate-minmax="10,100" class="form-control col-md-7 col-xs-12">
                  </div>
                </div>
                <div class="ln_solid"></div>
                <div class="form-group">
                  <div class="col-md-6 col-md-offset-3">
                    <button type="submit" class="btn btn-primary">Cancel</button>
                    <button id="send" type="submit" class="btn btn-success">Update</button>
                  </div>
                </div>
              </form>
            </div>
          </div>
        </div>
      </div>

    </div>
  </div>
  <!-- /page content -->




@endsection
