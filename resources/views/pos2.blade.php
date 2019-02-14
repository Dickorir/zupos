
@extends('layout.topnavonly')
@section('content')
  <!-- Content Header (Page header) -->

  <!-- Main content --><div class="content-area">
    <div class="row-group">
      <div class="content-row">

        <!-- All Product List Section Start-->
        <div id="left-panel" class="pos-content" style="">
          <div class="contents">
            <div id="searchbox">
              <input ng-change="showProductList()" onclick="this.select();" type="text" id="product-name" name="product-name" ng-model="productName" placeholder="Search product by name / Barcode scanner" autofocus="" class="ng-pristine ng-valid ng-empty ng-touched">
              <svg class="svg-icon search-btn"><use href="#icon-pos-search"></use></svg>
              <div class="category-search">
                <select class="form-control select2 select2-hidden-accessible" name="category-search-select" id="category-search-select" tabindex="-1" aria-hidden="true">
                  <option value="">View All Products</option>
                  <option value="3">Cosmetic's (19)</option>
                  <option value="12">df (3)</option>
                  <option value="2">Food (21)</option>
                  <option value="4">General Product (13)</option>
                  <option value="13">Jewellwries (1)</option>
                  <option value="10">Medicine (2)</option>
                  <option value="14">Services (1)</option>
                  <option value="11">Tablets (1)</option>
                </select><span class="select2 select2-container select2-container--default" dir="ltr" style="width: 100%;"><span class="selection"><span class="select2-selection select2-selection--single" role="combobox" aria-haspopup="true" aria-expanded="false" tabindex="0" aria-labelledby="select2-category-search-select-container"><span class="select2-selection__rendered" id="select2-category-search-select-container" title="View All Products">View All Products</span><span class="select2-selection__arrow" role="presentation"><b role="presentation"></b></span></span></span><span class="dropdown-wrapper" aria-hidden="true"></span></span>
              </div>
            </div>
            <div id="item-list" class="ps ps--theme_default ps--active-y" data-ps-id="0339674a-26c0-86fe-aa30-e7d7e93c195c" style="height: 477px;">
              <div class="pos-product-pagination pagination-top"><ul class="pagination"><li class="active"><span>1</span></li><li><a href="http://demo.itsolution24.com/pos/_inc/pos.php?query_string=&amp;category_id=&amp;field=p_name&amp;action_type=PRODUCTLIST&amp;page=2&amp;limit=25">2</a></li><li><a href="http://demo.itsolution24.com/pos/_inc/pos.php?query_string=&amp;category_id=&amp;field=p_name&amp;action_type=PRODUCTLIST&amp;page=3&amp;limit=25">3</a></li><li><a href="http://demo.itsolution24.com/pos/_inc/pos.php?query_string=&amp;category_id=&amp;field=p_name&amp;action_type=PRODUCTLIST&amp;page=2&amp;limit=25">&gt;</a></li><li><a href="http://demo.itsolution24.com/pos/_inc/pos.php?query_string=&amp;category_id=&amp;field=p_name&amp;action_type=PRODUCTLIST&amp;page=3&amp;limit=25">&gt;|</a></li></ul></div>
              <div ng-show="showLoader" class="ajax-loader ng-hide">
                <img src="../assets/itsolution24/img/loading2.gif">
              </div>
              <div class="add-new-product-wrapper" data-ng-class="{'show': showAddProductBtn}">
                <div class="add-new-product">
                  <div class="add-new-product-btn">
                    <button ng-click="createNewProduct()" class="btn btn-lg btn-danger">
                      <svg class="svg-icon"><use href="#icon-pos-plus"></use></svg>
                      <span>Add Product</span>
                    </button>
                  </div>
                </div>
              </div>
              <!-- ngRepeat: products in productArray --><div ng-repeat="products in productArray" id="0" class="btn btn-flat item ng-scope">
                <div ng-click="addItemToInvoice(products.p_id)" class="item-inner">
                  <div class="item-img">
                    <img ng-src="http://demo.itsolution24.com/pos/storage/products/598x336px_0012_Coca-Cola.jpg" alt="JMD full" src="http://demo.itsolution24.com/pos/storage/products/598x336px_0012_Coca-Cola.jpg">
                  </div>
                  <span class="item-info" data-id="79" data-name="JMD full">
											<span class="ng-binding">
												JMD full
											</span>
										</span>
                  <span class="item-mask" title="JMD full">
											<svg class="svg-icon"><use href="#icon-add"></use></svg>
											<span>Add To Cart</span>
										</span>
                </div>
              </div><!-- end ngRepeat: products in productArray --><div ng-repeat="products in productArray" id="1" class="btn btn-flat item ng-scope">
                <div ng-click="addItemToInvoice(products.p_id)" class="item-inner">
                  <div class="item-img">
                    <img ng-src="http://demo.itsolution24.com/pos/assets/itsolution24/img/noproduct.png" alt="Potato 10gm" src="http://demo.itsolution24.com/pos/assets/itsolution24/img/noproduct.png">
                  </div>
                  <span class="item-info" data-id="5" data-name="Potato 10gm">
											<span class="ng-binding">
												Potato 10gm
											</span>
										</span>
                  <span class="item-mask" title="Potato 10gm">
											<svg class="svg-icon"><use href="#icon-add"></use></svg>
											<span>Add To Cart</span>
										</span>
                </div>
              </div><!-- end ngRepeat: products in productArray --><div ng-repeat="products in productArray" id="2" class="btn btn-flat item ng-scope">
                <div ng-click="addItemToInvoice(products.p_id)" class="item-inner">
                  <div class="item-img">
                    <img ng-src="http://demo.itsolution24.com/pos/assets/itsolution24/img/noproduct.png" alt="Potato chips 20gm" src="http://demo.itsolution24.com/pos/assets/itsolution24/img/noproduct.png">
                  </div>
                  <span class="item-info" data-id="17" data-name="Potato chips 20gm">
											<span class="ng-binding">
												Potato chips 20gm
											</span>
										</span>
                  <span class="item-mask" title="Potato chips 20gm">
											<svg class="svg-icon"><use href="#icon-add"></use></svg>
											<span>Add To Cart</span>
										</span>
                </div>
              </div><!-- end ngRepeat: products in productArray --><div ng-repeat="products in productArray" id="3" class="btn btn-flat item ng-scope">
                <div ng-click="addItemToInvoice(products.p_id)" class="item-inner">
                  <div class="item-img">
                    <img ng-src="http://demo.itsolution24.com/pos/storage/products/Cafe.png" alt="cafe" src="http://demo.itsolution24.com/pos/storage/products/Cafe.png">
                  </div>
                  <span class="item-info" data-id="47" data-name="cafe">
											<span class="ng-binding">
												cafe
											</span>
										</span>
                  <span class="item-mask" title="cafe">
											<svg class="svg-icon"><use href="#icon-add"></use></svg>
											<span>Add To Cart</span>
										</span>
                </div>
              </div><!-- end ngRepeat: products in productArray --><div ng-repeat="products in productArray" id="4" class="btn btn-flat item ng-scope">
                <div ng-click="addItemToInvoice(products.p_id)" class="item-inner">
                  <div class="item-img">
                    <img ng-src="http://demo.itsolution24.com/pos/assets/itsolution24/img/noproduct.png" alt="Chocolate 100gm" src="http://demo.itsolution24.com/pos/assets/itsolution24/img/noproduct.png">
                  </div>
                  <span class="item-info" data-id="19" data-name="Chocolate 100gm">
											<span class="ng-binding">
												Chocolate 100gm
											</span>
										</span>
                  <span class="item-mask" title="Chocolate 100gm">
											<svg class="svg-icon"><use href="#icon-add"></use></svg>
											<span>Add To Cart</span>
										</span>
                </div>
              </div><!-- end ngRepeat: products in productArray --><div ng-repeat="products in productArray" id="5" class="btn btn-flat item ng-scope">
                <div ng-click="addItemToInvoice(products.p_id)" class="item-inner">
                  <div class="item-img">
                    <img ng-src="http://demo.itsolution24.com/pos/storage/products/17114.thm350.jpg" alt="Saving Cream 100gm" src="http://demo.itsolution24.com/pos/storage/products/17114.thm350.jpg">
                  </div>
                  <span class="item-info" data-id="16" data-name="Saving Cream 100gm">
											<span class="ng-binding">
												Saving Cream 100gm
											</span>
										</span>
                  <span class="item-mask" title="Saving Cream 100gm">
											<svg class="svg-icon"><use href="#icon-add"></use></svg>
											<span>Add To Cart</span>
										</span>
                </div>
              </div><!-- end ngRepeat: products in productArray --><div ng-repeat="products in productArray" id="6" class="btn btn-flat item ng-scope">
                <div ng-click="addItemToInvoice(products.p_id)" class="item-inner">
                  <div class="item-img">
                    <img ng-src="http://demo.itsolution24.com/pos/storage/products/3.jpg" alt="sf" src="http://demo.itsolution24.com/pos/storage/products/3.jpg">
                  </div>
                  <span class="item-info" data-id="57" data-name="sf">
											<span class="ng-binding">
												sf
											</span>
										</span>
                  <span class="item-mask" title="sf">
											<svg class="svg-icon"><use href="#icon-add"></use></svg>
											<span>Add To Cart</span>
										</span>
                </div>
              </div><!-- end ngRepeat: products in productArray --><div ng-repeat="products in productArray" id="7" class="btn btn-flat item ng-scope">
                <div ng-click="addItemToInvoice(products.p_id)" class="item-inner">
                  <div class="item-img">
                    <img ng-src="http://demo.itsolution24.com/pos/assets/itsolution24/img/noproduct.png" alt="Body Lotion 170gm" src="http://demo.itsolution24.com/pos/assets/itsolution24/img/noproduct.png">
                  </div>
                  <span class="item-info" data-id="6" data-name="Body Lotion 170gm">
											<span class="ng-binding">
												Body Lotion 170gm
											</span>
										</span>
                  <span class="item-mask" title="Body Lotion 170gm">
											<svg class="svg-icon"><use href="#icon-add"></use></svg>
											<span>Add To Cart</span>
										</span>
                </div>
              </div><!-- end ngRepeat: products in productArray --><div ng-repeat="products in productArray" id="8" class="btn btn-flat item ng-scope">
                <div ng-click="addItemToInvoice(products.p_id)" class="item-inner">
                  <div class="item-img">
                    <img ng-src="http://demo.itsolution24.com/pos/assets/itsolution24/img/noproduct.png" alt="Dairy Milk 30gm" src="http://demo.itsolution24.com/pos/assets/itsolution24/img/noproduct.png">
                  </div>
                  <span class="item-info" data-id="23" data-name="Dairy Milk 30gm">
											<span class="ng-binding">
												Dairy Milk 30gm
											</span>
										</span>
                  <span class="item-mask" title="Dairy Milk 30gm">
											<svg class="svg-icon"><use href="#icon-add"></use></svg>
											<span>Add To Cart</span>
										</span>
                </div>
              </div><!-- end ngRepeat: products in productArray --><div ng-repeat="products in productArray" id="9" class="btn btn-flat item ng-scope">
                <div ng-click="addItemToInvoice(products.p_id)" class="item-inner">
                  <div class="item-img">
                    <img ng-src="http://demo.itsolution24.com/pos/assets/itsolution24/img/noproduct.png" alt="Nivea Men 200mg" src="http://demo.itsolution24.com/pos/assets/itsolution24/img/noproduct.png">
                  </div>
                  <span class="item-info" data-id="26" data-name="Nivea Men 200mg">
											<span class="ng-binding">
												Nivea Men 200mg
											</span>
										</span>
                  <span class="item-mask" title="Nivea Men 200mg">
											<svg class="svg-icon"><use href="#icon-add"></use></svg>
											<span>Add To Cart</span>
										</span>
                </div>
              </div><!-- end ngRepeat: products in productArray --><div ng-repeat="products in productArray" id="10" class="btn btn-flat item ng-scope">
                <div ng-click="addItemToInvoice(products.p_id)" class="item-inner">
                  <div class="item-img">
                    <img ng-src="http://demo.itsolution24.com/pos/assets/itsolution24/img/noproduct.png" alt="Patex Sheet پیٹیکس شیٹ  1*1" src="http://demo.itsolution24.com/pos/assets/itsolution24/img/noproduct.png">
                  </div>
                  <span class="item-info" data-id="118" data-name="Patex Sheet پیٹیکس شیٹ  1*1">
											<span class="ng-binding">
												Patex Sheet پیٹیکس ...
											</span>
										</span>
                  <span class="item-mask" title="Patex Sheet پیٹیکس شیٹ  1*1">
											<svg class="svg-icon"><use href="#icon-add"></use></svg>
											<span>Add To Cart</span>
										</span>
                </div>
              </div><!-- end ngRepeat: products in productArray --><div ng-repeat="products in productArray" id="11" class="btn btn-flat item ng-scope">
                <div ng-click="addItemToInvoice(products.p_id)" class="item-inner">
                  <div class="item-img">
                    <img ng-src="http://demo.itsolution24.com/pos/assets/itsolution24/img/noproduct.png" alt="Rice 2kg" src="http://demo.itsolution24.com/pos/assets/itsolution24/img/noproduct.png">
                  </div>
                  <span class="item-info" data-id="4" data-name="Rice 2kg">
											<span class="ng-binding">
												Rice 2kg
											</span>
										</span>
                  <span class="item-mask" title="Rice 2kg">
											<svg class="svg-icon"><use href="#icon-add"></use></svg>
											<span>Add To Cart</span>
										</span>
                </div>
              </div><!-- end ngRepeat: products in productArray --><div ng-repeat="products in productArray" id="12" class="btn btn-flat item ng-scope">
                <div ng-click="addItemToInvoice(products.p_id)" class="item-inner">
                  <div class="item-img">
                    <img ng-src="http://demo.itsolution24.com/pos/assets/itsolution24/img/noproduct.png" alt="Train Ticket" src="http://demo.itsolution24.com/pos/assets/itsolution24/img/noproduct.png">
                  </div>
                  <span class="item-info" data-id="63" data-name="Train Ticket">
											<span class="ng-binding">
												Train Ticket
											</span>
										</span>
                  <span class="item-mask" title="Train Ticket">
											<svg class="svg-icon"><use href="#icon-add"></use></svg>
											<span>Add To Cart</span>
										</span>
                </div>
              </div><!-- end ngRepeat: products in productArray --><div ng-repeat="products in productArray" id="13" class="btn btn-flat item ng-scope">
                <div ng-click="addItemToInvoice(products.p_id)" class="item-inner">
                  <div class="item-img">
                    <img ng-src="http://demo.itsolution24.com/pos/assets/itsolution24/img/noproduct.png" alt="Lotion 200gm" src="http://demo.itsolution24.com/pos/assets/itsolution24/img/noproduct.png">
                  </div>
                  <span class="item-info" data-id="15" data-name="Lotion 200gm">
											<span class="ng-binding">
												Lotion 200gm
											</span>
										</span>
                  <span class="item-mask" title="Lotion 200gm">
											<svg class="svg-icon"><use href="#icon-add"></use></svg>
											<span>Add To Cart</span>
										</span>
                </div>
              </div><!-- end ngRepeat: products in productArray --><div ng-repeat="products in productArray" id="14" class="btn btn-flat item ng-scope">
                <div ng-click="addItemToInvoice(products.p_id)" class="item-inner">
                  <div class="item-img">
                    <img ng-src="http://demo.itsolution24.com/pos/assets/itsolution24/img/noproduct.png" alt="Test" src="http://demo.itsolution24.com/pos/assets/itsolution24/img/noproduct.png">
                  </div>
                  <span class="item-info" data-id="66" data-name="Test">
											<span class="ng-binding">
												Test
											</span>
										</span>
                  <span class="item-mask" title="Test">
											<svg class="svg-icon"><use href="#icon-add"></use></svg>
											<span>Add To Cart</span>
										</span>
                </div>
              </div><!-- end ngRepeat: products in productArray --><div ng-repeat="products in productArray" id="15" class="btn btn-flat item ng-scope">
                <div ng-click="addItemToInvoice(products.p_id)" class="item-inner">
                  <div class="item-img">
                    <img ng-src="http://demo.itsolution24.com/pos/storage/products/ale-5_5_122187.jpg" alt="Invitacion2" src="http://demo.itsolution24.com/pos/storage/products/ale-5_5_122187.jpg">
                  </div>
                  <span class="item-info" data-id="65" data-name="Invitacion2">
											<span class="ng-binding">
												Invitacion2
											</span>
										</span>
                  <span class="item-mask" title="Invitacion2">
											<svg class="svg-icon"><use href="#icon-add"></use></svg>
											<span>Add To Cart</span>
										</span>
                </div>
              </div><!-- end ngRepeat: products in productArray --><div ng-repeat="products in productArray" id="16" class="btn btn-flat item ng-scope">
                <div ng-click="addItemToInvoice(products.p_id)" class="item-inner">
                  <div class="item-img">
                    <img ng-src="http://demo.itsolution24.com/pos/assets/itsolution24/img/noproduct.png" alt="Anan" src="http://demo.itsolution24.com/pos/assets/itsolution24/img/noproduct.png">
                  </div>
                  <span class="item-info" data-id="29" data-name="Anan">
											<span class="ng-binding">
												Anan
											</span>
										</span>
                  <span class="item-mask" title="Anan">
											<svg class="svg-icon"><use href="#icon-add"></use></svg>
											<span>Add To Cart</span>
										</span>
                </div>
              </div><!-- end ngRepeat: products in productArray --><div ng-repeat="products in productArray" id="17" class="btn btn-flat item ng-scope">
                <div ng-click="addItemToInvoice(products.p_id)" class="item-inner">
                  <div class="item-img">
                    <img ng-src="http://demo.itsolution24.com/pos/assets/itsolution24/img/noproduct.png" alt="knownthief" src="http://demo.itsolution24.com/pos/assets/itsolution24/img/noproduct.png">
                  </div>
                  <span class="item-info" data-id="18" data-name="knownthief">
											<span class="ng-binding">
												knownthief
											</span>
										</span>
                  <span class="item-mask" title="knownthief">
											<svg class="svg-icon"><use href="#icon-add"></use></svg>
											<span>Add To Cart</span>
										</span>
                </div>
              </div><!-- end ngRepeat: products in productArray --><div ng-repeat="products in productArray" id="18" class="btn btn-flat item ng-scope">
                <div ng-click="addItemToInvoice(products.p_id)" class="item-inner">
                  <div class="item-img">
                    <img ng-src="http://demo.itsolution24.com/pos/assets/itsolution24/img/noproduct.png" alt="No Product" src="http://demo.itsolution24.com/pos/assets/itsolution24/img/noproduct.png">
                  </div>
                  <span class="item-info" data-id="1" data-name="No Product">
											<span class="ng-binding">
												No Product
											</span>
										</span>
                  <span class="item-mask" title="No Product">
											<svg class="svg-icon"><use href="#icon-add"></use></svg>
											<span>Add To Cart</span>
										</span>
                </div>
              </div><!-- end ngRepeat: products in productArray --><div ng-repeat="products in productArray" id="19" class="btn btn-flat item ng-scope">
                <div ng-click="addItemToInvoice(products.p_id)" class="item-inner">
                  <div class="item-img">
                    <img ng-src="http://demo.itsolution24.com/pos/assets/itsolution24/img/noproduct.png" alt="Fair and lovely" src="http://demo.itsolution24.com/pos/assets/itsolution24/img/noproduct.png">
                  </div>
                  <span class="item-info" data-id="24" data-name="Fair and lovely">
											<span class="ng-binding">
												Fair and lovely
											</span>
										</span>
                  <span class="item-mask" title="Fair and lovely">
											<svg class="svg-icon"><use href="#icon-add"></use></svg>
											<span>Add To Cart</span>
										</span>
                </div>
              </div><!-- end ngRepeat: products in productArray --><div ng-repeat="products in productArray" id="20" class="btn btn-flat item ng-scope">
                <div ng-click="addItemToInvoice(products.p_id)" class="item-inner">
                  <div class="item-img">
                    <img ng-src="http://demo.itsolution24.com/pos/assets/itsolution24/img/noproduct.png" alt="DENEME" src="http://demo.itsolution24.com/pos/assets/itsolution24/img/noproduct.png">
                  </div>
                  <span class="item-info" data-id="110" data-name="DENEME">
											<span class="ng-binding">
												DENEME
											</span>
										</span>
                  <span class="item-mask" title="DENEME">
											<svg class="svg-icon"><use href="#icon-add"></use></svg>
											<span>Add To Cart</span>
										</span>
                </div>
              </div><!-- end ngRepeat: products in productArray --><div ng-repeat="products in productArray" id="21" class="btn btn-flat item ng-scope">
                <div ng-click="addItemToInvoice(products.p_id)" class="item-inner">
                  <div class="item-img">
                    <img ng-src="http://demo.itsolution24.com/pos/assets/itsolution24/img/noproduct.png" alt="7Up" src="http://demo.itsolution24.com/pos/assets/itsolution24/img/noproduct.png">
                  </div>
                  <span class="item-info" data-id="2" data-name="7Up">
											<span class="ng-binding">
												7Up
											</span>
										</span>
                  <span class="item-mask" title="7Up">
											<svg class="svg-icon"><use href="#icon-add"></use></svg>
											<span>Add To Cart</span>
										</span>
                </div>
              </div><!-- end ngRepeat: products in productArray --><div ng-repeat="products in productArray" id="22" class="btn btn-flat item ng-scope">
                <div ng-click="addItemToInvoice(products.p_id)" class="item-inner">
                  <div class="item-img">
                    <img ng-src="http://demo.itsolution24.com/pos/storage/products/598x336px_0012_Coca-Cola.jpg" alt="ICECEK" src="http://demo.itsolution24.com/pos/storage/products/598x336px_0012_Coca-Cola.jpg">
                  </div>
                  <span class="item-info" data-id="61" data-name="ICECEK">
											<span class="ng-binding">
												ICECEK
											</span>
										</span>
                  <span class="item-mask" title="ICECEK">
											<svg class="svg-icon"><use href="#icon-add"></use></svg>
											<span>Add To Cart</span>
										</span>
                </div>
              </div><!-- end ngRepeat: products in productArray --><div ng-repeat="products in productArray" id="23" class="btn btn-flat item ng-scope">
                <div ng-click="addItemToInvoice(products.p_id)" class="item-inner">
                  <div class="item-img">
                    <img ng-src="http://demo.itsolution24.com/pos/assets/itsolution24/img/noproduct.png" alt="Ice cream " src="http://demo.itsolution24.com/pos/assets/itsolution24/img/noproduct.png">
                  </div>
                  <span class="item-info" data-id="7" data-name="Ice cream ">
											<span class="ng-binding">
												Ice cream
											</span>
										</span>
                  <span class="item-mask" title="Ice cream ">
											<svg class="svg-icon"><use href="#icon-add"></use></svg>
											<span>Add To Cart</span>
										</span>
                </div>
              </div><!-- end ngRepeat: products in productArray --><div ng-repeat="products in productArray" id="24" class="btn btn-flat item ng-scope">
                <div ng-click="addItemToInvoice(products.p_id)" class="item-inner">
                  <div class="item-img">
                    <img ng-src="http://demo.itsolution24.com/pos/assets/itsolution24/img/noproduct.png" alt="jEANS" src="http://demo.itsolution24.com/pos/assets/itsolution24/img/noproduct.png">
                  </div>
                  <span class="item-info" data-id="121" data-name="jEANS">
											<span class="ng-binding">
												jEANS
											</span>
										</span>
                  <span class="item-mask" title="jEANS">
											<svg class="svg-icon"><use href="#icon-add"></use></svg>
											<span>Add To Cart</span>
										</span>
                </div>
              </div><!-- end ngRepeat: products in productArray -->
              <div class="pos-product-pagination pagination-bottom"><ul class="pagination"><li class="active"><span>1</span></li><li><a href="http://demo.itsolution24.com/pos/_inc/pos.php?query_string=&amp;category_id=&amp;field=p_name&amp;action_type=PRODUCTLIST&amp;page=2&amp;limit=25">2</a></li><li><a href="http://demo.itsolution24.com/pos/_inc/pos.php?query_string=&amp;category_id=&amp;field=p_name&amp;action_type=PRODUCTLIST&amp;page=3&amp;limit=25">3</a></li><li><a href="http://demo.itsolution24.com/pos/_inc/pos.php?query_string=&amp;category_id=&amp;field=p_name&amp;action_type=PRODUCTLIST&amp;page=2&amp;limit=25">&gt;</a></li><li><a href="http://demo.itsolution24.com/pos/_inc/pos.php?query_string=&amp;category_id=&amp;field=p_name&amp;action_type=PRODUCTLIST&amp;page=3&amp;limit=25">&gt;|</a></li></ul></div>
              <div class="ps__scrollbar-x-rail" style="left: 0px; bottom: -581px;"><div class="ps__scrollbar-x" tabindex="0" style="left: 0px; width: 0px;"></div></div><div class="ps__scrollbar-y-rail" style="top: 581px; height: 477px; right: 0px;"><div class="ps__scrollbar-y" tabindex="0" style="top: 262px; height: 215px;"></div></div></div>
            <div id="total-amount">
              <div class="total-amount-inner">
									<span class="currency-symbol">
										₺									</span>
                <span class="main-amount ng-binding">
										0.00
									</span>
              </div>
              <a id="invoice-note" ng-click="addInvoiceNote()" data-note="" title="Add note">
                <span class="fa fa-fw fa-comments-o"></span>
              </a>
            </div>
          </div>
        </div>
        <!-- All Product Section End -->

        <!--Invoive Section Start-->
        <div id="right-panel" class="pos-content" style="">
          <div class="invoice-area">
            <div class="well well-sm">

              <!-- Customer Area Start-->
              <div id="customer-area">
                <input ng-change="showCustomerList()" onclick="this.select();" type="text" id="customer-name" name="customer-name" ng-model="customerName" ng-disabled="isEditMode" class="ng-pristine ng-untouched ng-valid ng-not-empty">
                <input type="hidden" name="customer-id" value="1" autocomplete="off">
                <div class="customer-icon">
                  <a ng-click="showCustomerList(true)" onclick="return false;" href="#">
                    <svg class="svg-icon"><use href="#icon-pos-customer"></use></svg>
                  </a>
                </div>
                <div ng-click="createNewCustomer();" class="add-icon">
                  <svg class="svg-icon"><use href="#icon-pos-plus"></use></svg>
                </div>
                <div class="previous-due">
                  <div class="previous-due-inner">
                    <h4 ng-click="duePaid()">
                      Due
                      <span id="dueAmount" class="ng-binding">
													0.00
												</span>
                    </h4>
                  </div>
                </div>
                <div ng-hide="hideCustomerDropdown" id="customer-dropdown" class="slidedown-menu ps ps--theme_default ng-hide" data-ps-id="3a98e88c-f41c-6235-3d1a-f73b402cf528">
                  <div class="slidedown-header">
                  </div>
                  <div class="slidedown-body">
                    <ul class="customer-list list-unstyled">
                      <!-- ngRepeat: customers in customerArray -->
                    </ul>
                  </div>
                  <div class="ps__scrollbar-x-rail" style="left: 0px; bottom: 0px;"><div class="ps__scrollbar-x" tabindex="0" style="left: 0px; width: 0px;"></div></div><div class="ps__scrollbar-y-rail" style="top: 0px; right: 0px;"><div class="ps__scrollbar-y" tabindex="0" style="top: 0px; height: 0px;"></div></div></div>
              </div>
              <!-- Customer Area Start-->

              <!-- Invoice Item Start-->
              <div id="invoice-item">
                <!-- Selected Product List Title Start -->
                <table id="invoice-item-head" class="table table-striped">
                  <thead>
                  <tr>
                    <th>
                      Qty.
                    </th>
                    <th>
                      Product												</th>
                    <th>
                      Price												</th>
                    <th>
                      Sub Total												</th>
                    <th>&nbsp; </th>
                  </tr>
                  </thead>
                </table>
                <!-- Selected Product List Title Start -->

                <!-- Selected Product List Section Start-->
                <div id="invoice-item-list" class="ps ps--theme_default" data-ps-id="3a7adb92-b80a-144f-80b6-ef631a03c043" style="height: 340px;">
                  <table class="table table-hovered">
                    <tbody>
                    <!-- ngRepeat: items in itemArray -->
                    </tbody>
                  </table>
                  <div class="ps__scrollbar-x-rail" style="left: 0px; bottom: 0px;"><div class="ps__scrollbar-x" tabindex="0" style="left: 0px; width: 0px;"></div></div><div class="ps__scrollbar-y-rail" style="top: 0px; right: 0px;"><div class="ps__scrollbar-y" tabindex="0" style="top: 0px; height: 0px;"></div></div></div>
                <!-- Selected Product List Section End-->

                <!-- Selected Product Calculation Section Start-->
                <div id="invoice-calculation" class="clearfix">
                  <table class="table">
                    <tbody>
                    <tr class="row1">
                      <td width="30%">
                        Total items													</td>
                      <td class="text-right ng-binding" width="20%">
                        0 (0)
                      </td>
                      <td width="30%">
                        Total													</td>
                      <td class="text-right ng-binding" width="20%">
                        0.00
                      </td>
                    </tr>
                    <tr class="row2 pay-top">
                      <td>
                        Discount													</td>
                      <td class="text-right">
                        <input ng-change="addDiscount()" onclick="this.select();" type="text" name="discount-amount" ng-model="discountInput" ondrop="return false;" onpaste="return false;" class="ng-pristine ng-untouched ng-valid ng-not-empty">
                      </td>
                      <td>
                        TAX(%)													</td>
                      <td class="text-right">
                        <input ng-init="taxInput=0" ng-change="addTax()" onclick="this.select();" type="text" name="tax-amount" ng-model="taxInput" onkeypress="return IsNumeric(event);" ondrop="return false;" onpaste="return false;" class="ng-pristine ng-untouched ng-valid ng-not-empty">
                      </td>
                    </tr>
                    <tr class="row3">
                      <td colspan="3">
                        Payable amount 													</td>
                      <td class="text-right ng-binding">
                        0.00
                      </td>
                    </tr>
                    </tbody>
                  </table>
                </div>
                <!-- Selected Product Calculation Section End-->
              </div>
              <!-- Invoice Item End-->

              <!-- Go Button Section Start-->
              <div id="pay-button" class="text-center">
                <button ng-click="payNow();" class="btn btn-block btn-lg" data-loading-text="Paying..." title="Pay Now">
                  <span class="fa fa-fw fa-money"></span>
                  Pay now									</button>
              </div>
              <!-- Go Button Section End-->

              <div class="clearfix"></div>
            </div>
          </div>
        </div>
        <!-- Invoice Section End -->

      </div>
    </div>
  </div>
  <!-- /.content -->
@endsection