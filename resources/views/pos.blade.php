
@extends('layout.topnavonly')
@section('content')
    <!-- Content Header (Page header) -->

    <!-- Main content -->
    <section class="content custom-bg">
        <form class="form-horizontal" id="form_id">
            <div class="row">
                <!-- ./col -->
                <!-- ./col -->
                <div class="hidden-lg">&nbsp;</div>
                <div class="col-md-4 col-xs-12 paddless-col">
                    <div class="cell-area">
                        <div class="cell-menu">
                            <ul class="addButton">
                                <li><a style="background-color: rgb(35, 82, 124);color: white;cursor: pointer" class="suspendIDCurrent" data-suspendid="0" id="sus_0">Current</a></li>
                            </ul>
                        </div>
                        <div class="cell-form">

                            <div class="option-area">
                                <select id="customer_id" name="customer_id" class="form-control select2 custom-selected select2-hidden-accessible" tabindex="-1" aria-hidden="true">
                                    <option value="1">Walk-in Customer</option>
                                    <option value="35">abc (035)</option>
                                    <option value="36">abc (035)</option>
                                </select>

                            </div>
                        </div>
                        <div class="cell-body">
                            <div class="table-scroll">
                                <table class="table-striped sale_cart" style="width: 100%;">
                                    <thead>
                                    <tr>
                                        <th style="width: 28%;">Menu</th>
                                        <th style="width: 18%;">Price</th>
                                        <th style="width: 13%;">Qty</th>
                                        <th style="width: 22%;">Dis Amt/%</th>
                                        <th style="width: 25%;">Total</th>
                                        <th style="text-align: center; width: 10%;"><i class="fa fa-trash"></i></th>
                                    </tr>
                                    </thead>

                                    <tbody id="o">
                                    <td>ugali</td>
                                    <td>100</td>
                                    <td>100</td>
                                    <td>100</td>
                                    <td>100</td>
                                    <td>100</td>

                                    </tbody>
                                </table>
                                <input type="hidden" name="currentStatus" id="currentStatus" value="1">
                            </div>
                            <div class="calculation-area">
                                <p>
                                    <span class="fl-width">Total Items: </span>
                                    <span class="sl-width" id="total_item">0
                            </span>
                                    <input type="hidden" name="total_items" id="total_item_hidden">
                                    <span class="tl-width">Sub Total:</span>
                                    <span class="fil-width">
                                <input type="text" value="0.00" readonly="" name="sub_total" id="sub_total"></span>
                                </p>
                                <p>
                                    <span class="fl-width">Disc Amt/%:</span>
                                    <span class="sl-width">
                                <input type="text" maxlength="6" value="" name="disc" id="disc" class="discount" autocomplete="off" onkeyup="return checkDiscount();" "="">
                                <input type="hidden" name="disc_actual" id="disc_actual">
                            </span>
                                    <span class="tl-width">Total Disc:</span>
                                    <span class="fil-width">
                                <input type="text" value="0.00" readonly="" name="gTotalDisc" id="gTotalDisc">
                            </span>
                                </p>
                                <p>
                                    <span class="fl-width"></span>
                                    <span class="sl-width">

                            </span>
                                    <span class="tl-width">VAT:</span>
                                    <span class="fil-width">
                                <input type="text" value="0.00" readonly="" name="vat" id="vat">
                            </span>
                                </p>
                                <hr class="border-top-pay">
                                <p>
                                    <span class="fl-width">Total Payable:</span>
                                    <span class="sl-width">
                                  </span>
                                    <span class="tl-width"></span>
                                    <span class="fil-width">
                                <input type="text" value="0.00" name="total_payable" readonly="" id="total_payable">
                            <input type="hidden" value="0.00" name="total_payableHidden" id="total_payableHidden">
                            </span>
                                </p>
                            </div>
                            <div class="btn-area hidden-lg hidden-sm" style="margin-bottom: 9px">
                                <div class="btn-group-custom">
                                    <button class="btn btn-danger btn-lg custom-btn-one" style="width: 33%">Cancel</button>
                                    <button class="btn btn-danger btn-lg custom-btn-two" style="width: 32%">Hold</button>
                                    <button class="btn btn-s btn-lg custom-btn-three" style="width: 32.6%">Payment</button>
                                </div>
                            </div>
                            <div class="btn-area hidden-xs" style="margin-bottom: 9px">
                                <div class="btn-group-custom">
                                    <button class="btn btn-danger btn-lg custom-btn-one" style="width: 33%">Cancel</button>
                                    <button class="btn btn-danger btn-lg custom-btn-two" style="width: 32%">Hold</button>
                                    <button class="btn btn-s btn-lg custom-btn-three" style="width: 32.6%;color:white">Payment</button>
                                </div>
                            </div>
                            <input type="hidden" value="0" name="hiddenRowCounter" id="hiddenRowCounter">
                        </div>
                    </div>
                </div>
                <!-- ./col -->
                <div class="col-md-8 col-xs-12 hide-xs-device">

                    <div class="category-area">
                        <div class="category-header">
                            <div class="col-md-12">
                                <div class="category-search">
                                    <select id="table_id" class="form-control select2 table_id select2-hidden-accessible" name="table_id" tabindex="-1" aria-hidden="true">
                                        <option value="">Table</option>
                                        <option value="11">1</option>
                                        <option value="10">11</option>
                                    </select><span class="select2 select2-container select2-container--default" dir="ltr" style="width: 100px;"><span class="selection"><span class="select2-selection select2-selection--single" role="combobox" aria-haspopup="true" aria-expanded="false" tabindex="0" aria-labelledby="select2-table_id-container"><span class="select2-selection__rendered" id="select2-table_id-container" title="Table">Table</span><span class="select2-selection__arrow" role="presentation"><b role="presentation"></b></span></span></span><span class="dropdown-wrapper" aria-hidden="true"></span></span>
                                </div>
                            </div>
                            <div class="clearfix"></div>

                            <div class="scrollmenu">
                                <a class="fm_category allBg" style="background-color: rgb(0, 37, 62); border-bottom: 6px solid green; border-radius: 7px 7px 0px 0px;" href="">All</a>
                                @foreach($cat as $categ)
                                    <a id="{{ $categ->id }}" class="fm_category main_cat" style="background-color: rgb(177, 178, 179);border-bottom: 6px solid green;border-radius: 7px 7px 0px 0px;" href="">{{ $categ->name }}</a>
                                @endforeach
                            </div>
                            <hr style="margin-top: 2px;margin-bottom: 2px;border: 22;border-top: 1px solid #0a0a0a;">
                            <div class="scrollmenu">
                                <a class="fm_category allBg" style="background-color: rgb(0, 37, 62); border-bottom: 6px solid green; border-radius: 7px 7px 0px 0px;" href="">All</a>
                                @foreach($subcat as $subcateg)
                                    <a data-id="{{ $subcateg->category->id ?? 'all'}}" id="{{ $subcateg->id }}" class="fm_category sub_cat" style="background-color: rgb(177, 178, 179);border-bottom: 6px solid green;border-radius: 7px 7px 0px 0px;" href="">{{ $subcateg->name }}</a>
                                @endforeach
                            </div>
                        </div>
                        <div class="category-body">
                            <div class="category-items">
                                @foreach($prod as $product)

                                    <a style=" background-image: url('{{asset('uploads/productimages/'.$product->image)}}');background-size: 210px 95px;background-repeat: no-repeat;background-position: center;" href="" id="{{ $product->id }}" class="category-single-item {{ $product->slug }} prod" data-params="74||Abc||100.00||20.00">
                                        {{ $product->name }} <span>(FM-056)</span></a>
                                @endforeach
                                <a href="" onclick="return helloThere(0)" onblur="return helloThere(0)" class="category-single-item South_Indian " data-params="74||Abc||100.00||20.00">
                                    Abc <span>(FM-056)</span></a>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- ./col -->
                <!-- show tablet -->
            </div>
            <!-- /.row -->
            <!-- Main row -->
            <!-- /.row (main row) -->
        </form>
    </section>
    <script>
        $('.prod').on('click', function(evt) {
            evt.preventDefault();
            //Save the link in a variable called element
            var element = $(this);
            //Find the id of the link that was clicked
            var id = element.attr("id");
            alert(id);
        });
    </script>
    <script>
        $('.main_cat').on('click', function(evt) {
            evt.preventDefault();
            //Save the link in a variable called element
            var element = $(this);
            //Find the id of the link that was clicked
            var id = element.attr("id");
            alert(id);
        });
    </script>
    <!-- /.content -->
@endsection