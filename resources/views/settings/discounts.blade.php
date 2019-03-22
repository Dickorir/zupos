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
      <div class="page-title">
        <div class="btn-group pull-right">
          <button type="button" class="btn btn-info " data-toggle="modal" data-target=".discount"><i class="fa fa-plus"> New</i></button>
        </div>

        <!-- Small modal -->

        <div class="modal fade discount" tabindex="-1" role="dialog" aria-hidden="true">
          <div class="modal-dialog">
            <div class="modal-content">

              <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">×</span>
                </button>
                <h4 class="modal-title" id="myModalLabel2"> Discount Add</h4>
              </div>

              <form id="" method="POST" action="{{url('/settings/discountStore')}}" data-parsley-validate class="form-horizontal form-label-left" enctype="multipart/form-data"  accept-charset="UTF-8" novalidate files=true>
                {{ csrf_field() }}
                <div class="item form-group">
                  <label class="control-label col-md-3 col-sm-3 col-xs-12" for="name">Name <span class="required">*</span>
                  </label>
                  <div class="col-md-6 col-sm-6 col-xs-12">
                    <input type="text" id="name" name="name" value="{{ old('name') }}" required="required"  class="form-control col-md-7 col-xs-12">
                  </div>
                </div>
                <div class="item form-group">
                  <label class="control-label col-md-3 col-sm-3 col-xs-12" for="code">Code <span class="required">*</span>
                  </label>
                  <div class="col-md-6 col-sm-6 col-xs-12">
                    <input type="text" id="code" name="code" value="{{ old('code') }}" required="required"  class="form-control col-md-7 col-xs-12">
                  </div>
                </div>
                <div class="item form-group" >
                  <label class="control-label col-md-3 col-sm-3 col-xs-12">Select Type</label>
                  <div class="col-md-6 col-sm-6 col-xs-12">
                    <select name="type" class="form-control" id="type" >
                      <option value="{{ old('type') }}">@if(old('type')) {{ old('type') }} @else --- Select type-- @endif</option>
                      <option value="fixed">Fixed</option>
                      <option value="percent">Percent</option>
                    </select>
                  </div>
                </div>
                <div class="item form-group" id="value" style="display: none">
                  <label class="control-label col-md-3 col-sm-3 col-xs-12" for="value">Value<span class="required">*</span>
                  </label>
                  <div class="col-md-6 col-sm-6 col-xs-12">
                    <input type="number" id="" value="{{ old('value') }}" name="value" data-validate-minmax="10,100" class="form-control col-md-7 col-xs-12">
                  </div>
                </div>
                <div class="item form-group" id="percent" style="display: none">
                  <label class="control-label col-md-3 col-sm-3 col-xs-12" for="percent_off">Percent<span class="required">*</span>
                  </label>
                  <div class="col-md-6 col-sm-6 col-xs-12">
                    <input type="number" id="" value="{{ old('percent') }}" name="percent_off" data-validate-minmax="10,100" class="form-control col-md-7 col-xs-12">
                  </div>
                </div>
                <div class="item form-group">
                  <label class="control-label col-md-3 col-sm-3 col-xs-12" for="price_range_1">Price range 1<span class="required">*</span>
                  </label>
                  <div class="col-md-6 col-sm-6 col-xs-12">
                    <input type="number" id="price_range_1" value="{{ old('price_range_1') }}" name="price_range_1" data-validate-minmax="10,100" class="form-control col-md-7 col-xs-12">
                  </div>
                </div>
                <div class="item form-group">
                  <label class="control-label col-md-3 col-sm-3 col-xs-12" for="price_range_2">Price range 2<span class="required">*</span>
                  </label>
                  <div class="col-md-6 col-sm-6 col-xs-12">
                    <input type="number" id="price_range_2" value="{{ old('price_range_2') }}" name="price_range_2" data-validate-minmax="10,100" class="form-control col-md-7 col-xs-12">
                  </div>
                </div>
                <div class="item form-group">
                  <label class="control-label col-md-3 col-sm-3 col-xs-12" for="end_date">End date <span class="required">*</span>
                  </label>
                  <div class="col-md-6 col-sm-6 col-xs-12">
                    <input type="text" id="end_date" name="end_date" value="{{ old('end_date') }}" class="form-control col-md-7 col-xs-12">
                  </div>
                </div>

                <div class="modal-footer">
                  <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                  <button type="submit" class="btn btn-primary pull-left" id="update">Update</button>
                </div>
              </form>
              <script>
                $('#type').on('change', function() {
                  var type = this.value;
                  if (type == 'fixed'){
                    $('#value').show();
                    $('#percent').hide();
                  }else if(type == 'percent'){
                    $('#percent').show();
                    $('#value').hide();
                  }
                });
              </script>

            </div>
          </div>
        </div>
      </div>
      <div class="clearfix"></div>
      <div class="row"> {{--check here--}}
        <div class="col-md-12 col-sm-12 col-xs-12">
          <div class="x_panel">
            <div class="x_title">
              <h2>All {{$title}} <small></small></h2>
              <ul class="nav navbar-right panel_toolbox">
                <li><a class="collapse-link"><i class="fa fa-chevron-up"></i></a>
                </li>

                <li><a class="close-link"><i class="fa fa-close"></i></a>
                </li>
              </ul>
              <div class="clearfix"></div>
            </div>

            <div class="x_content">

              <div class="table-responsive">
                <table class="table table-striped jambo_table bulk_action" id="catego">
                  <thead>
                  <tr class="headings">
                    <th style="width: 1%">No</th>
                    <th>code </th>
                    <th>name</th>
                    <th>type</th>
                    <th>value</th>
                    <th>percent_off</th>
                    <th>price_range_1</th>
                    <th>price_range_2</th>
                    <th>status</th>
                    <th>end_date</th>
                    <th>Action</th>
                  </tr>
                  </thead>

                  <tbody>
                  @foreach($discount as $key=>$disc)
                    <tr>
                      <td>{{++$key}}</td>

                      <td>
                        <a>{{ $disc->code }}</a>
                      </td>

                      <td>
                        <a>{{ $disc->name }}</a>
                      </td>
                      <td>
                        <a>{{ $disc->type }}</a>
                      </td>
                      <td>
                        <a>{{ ($disc->value !== null)? $disc->value : '-'}}</a>
                      </td>
                      <td>
                        <a>{{ ($disc->percent_off !== null)? $disc->percent_off : '-' }}</a>
                      </td>
                      <td>
                        <a>{{ ($disc->price_range_1 !== null)? $disc->price_range_1 : '-' }}</a>
                      </td>
                      <td>
                        <a>{{ ($disc->price_range_2 !== null)? $disc->price_range_2 : '-' }}</a>
                      </td>
                      <td>
                        @if($disc->status == 1)
                          <a> <span class="label label-info ">Coupon Discount</span> </a>
                        @elseif($disc->status == 2)
                          <a> <span class="label label-info ">Range Discount</span> </a>
                        @else
                          <a> <span class="label label-info ">Inactive</span> </a>
                        @endif

                      </td>
                      <td>
                        <a>{{ $disc->end_date }}</a>
                      </td>
                      <td>
                        <div class="btn-group">
                          <button data-toggle="dropdown" class="btn btn-default btn-xs dropdown-toggle" type="button" aria-expanded="false">Action <span class="caret"></span>
                          </button>
                          <ul role="menu" class="dropdown-menu">
                            <li><a href="{{  url('/settings/deactivate', $disc->id) }}" class="btn btn-warning btn-xs"><i class="fa fa-pencil"></i> Deactivate </a>
                            </li>
                            <li><a href="{{  url('/settings/setCoupon', $disc->id) }}" class="btn btn-warning btn-xs"><i class="fa fa-pencil"></i> Set Coupon </a>
                            </li>
                            <li><a href="{{  url('/settings/setRange', $disc->id) }}" class="btn btn-warning btn-xs"><i class="fa fa-pencil"></i> Set Range </a>
                            </li>
                            <li><a href="{{  url('/settings/discountDestroy', $disc->id) }}" class="btn btn-danger btn-xs tooa" id="{{ $disc->id }}" ><i class="fa fa-trash-o "></i>&nbsp;Delete</a>
                            </li>
                            <li><a class="toa" id="{{ $disc->id }}">Delete</a>
                            </li>
                          </ul>
                        </div>
                      </td>

                    </tr>
                  @endforeach
                  </tbody>
                </table>
              </div>


            </div>
          </div>
        </div>
      </div>


    </div>
  </div>

  <script type="text/javascript">
    $('#catego').DataTable({
      select:true
    });
  </script>
  <script type="text/javascript">
    $(function() {
      $(".toa").click(function(){
        //Save the link in a variable called element
        var element = $(this);
        //Find the id of the link that was clicked
        var id = element.attr("id");
        //Built a url to send
        var info = 'id=' + id;
        if(confirm("Are you sure you want to delete this Discount?"))
        {
          var parent = $(this).parent().parent();
          $.ajax({
            type: "GET",
            url: "settings/discountDestroy/"+id,
            data: info,
            success: function()
            {
              swal({
                title: 'Deleted!',
                text: "Successfully deleted",
                type: 'success',
                timer: 2000,
                showConfirmButton: true
              });
              parent.fadeOut('slow', function() {$(this).remove();});
            },
            error: function () {
              alert('something went wrong');
            }
          });
        }
        return false;
      });
    });
  </script>
  <!-- /page content -->
@endsection
