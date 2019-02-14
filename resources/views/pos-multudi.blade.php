
@extends('layout.topnavonly')
@section('content')
    <!-- Content Header (Page header) -->

    <!-- Main content -->
    <section class="content custom-bg">
        <form class="form-horizontal" id="form_id">
            <div class="row">
                <!-- ./col -->
                <div class="col-md-12 col-md-12 hide-md-device">
                    <div class="category-area">
                        <div class="category-header">
                            <br>
                            <div class="col-md-12" style="margin-top: 24px;">
                                <div class="category-search">
                                    <select id="table_id" class="form-control select2 table_id select2-hidden-accessible" name="table_id" tabindex="-1" aria-hidden="true">
                                        <option>kilo</option>
                                        <option>kilo</option>
                                        <option>kilo</option>
                                    </select>
                                    <select>
                                        <option value="">Table</option>
                                        <option value="11">1</option>
                                        <option value="10">11</option>
                                        <option value="12">2</option>
                                        <option value="14">demo</option>
                                        <option value="28">helloworld</option>
                                        <option value="27">Lava1</option>
                                        <option value="15">masa 1</option>
                                        <option value="16">masa 2</option>
                                        <option value="17">MASA 33</option>
                                        <option value="7">Mesa 03</option>
                                        <option value="8">Mesa 04</option>
                                        <option value="9">Mesa 05</option>
                                        <option value="5">MESA 1</option>
                                        <option value="6">MESA 10</option>
                                        <option value="23">mesa1</option>
                                        <option value="24">Meson</option>
                                        <option value="25">No.1</option>
                                        <option value="26">No.2</option>
                                        <option value="20">T1</option>
                                        <option value="22">tabel</option>
                                        <option value="2">Table 01</option>
                                        <option value="3">Table 02</option>
                                        <option value="21">table 2</option>
                                        <option value="29">table 99</option>
                                        <option value="19">test</option>
                                        <option value="13">Testtable123</option>
                                        <option value="18">texas test</option>
                                        <option value="4">Tiago Francisco Vicente</option>
                                    </select>
                                </div>
                                <div class="scrollmenu">
                                    <a class="fm_category allBg" style="background-color: rgb(0, 37, 62); border-bottom: 6px solid green; border-radius: 7px 7px 0px 0px;" href="">All</a>
                                    <a class="fm_category" style="background-color: rgb(177, 178, 179);border-bottom: 6px solid green;border-radius: 7px 7px 0px 0px;" href="">American</a>
                                    <a class="fm_category" style="background-color: rgb(177, 178, 179);border-bottom: 6px solid green;border-radius: 7px 7px 0px 0px;" href="">Ayam Crispy</a>
                                    <a class="fm_category" style="background-color: rgb(177, 178, 179);border-bottom: 6px solid green;border-radius: 7px 7px 0px 0px;" href="">Bebidas</a>
                                    <a class="fm_category" style="background-color: rgb(177, 178, 179);border-bottom: 6px solid green;border-radius: 7px 7px 0px 0px;" href="">Bengali</a>
                                    <a class="fm_category" style="background-color: rgb(177, 178, 179);border-bottom: 6px solid green;border-radius: 7px 7px 0px 0px;" href="">Beverage</a>
                                    <a class="fm_category" style="background-color: rgb(177, 178, 179);border-bottom: 6px solid green;border-radius: 7px 7px 0px 0px;" href="">Birra</a>
                                    <a class="fm_category" style="background-color: rgb(177, 178, 179);border-bottom: 6px solid green;border-radius: 7px 7px 0px 0px;" href="">Cervezas</a>
                                    <a class="fm_category" style="background-color: rgb(177, 178, 179);border-bottom: 6px solid green;border-radius: 7px 7px 0px 0px;" href="">Chicken</a>
                                    <a class="fm_category" style="background-color: rgb(177, 178, 179);border-bottom: 6px solid green;border-radius: 7px 7px 0px 0px;" href="">Chienese</a>
                                    <a class="fm_category" style="background-color: rgb(177, 178, 179);border-bottom: 6px solid green;border-radius: 7px 7px 0px 0px;" href="">Coffee</a>
                                    <a class="fm_category" style="background-color: rgb(177, 178, 179);border-bottom: 6px solid green;border-radius: 7px 7px 0px 0px;" href="">Coffee</a>
                                    <a class="fm_category" style="background-color: rgb(177, 178, 179);border-bottom: 6px solid green;border-radius: 7px 7px 0px 0px;" href="">Comída Rápida</a>
                                    <a class="fm_category" style="background-color: rgb(177, 178, 179);border-bottom: 6px solid green;border-radius: 7px 7px 0px 0px;" href="">Deserts</a>
                                    <a class="fm_category" style="background-color: rgb(177, 178, 179);border-bottom: 6px solid green;border-radius: 7px 7px 0px 0px;" href="">DRINKS</a>
                                    <a class="fm_category" style="background-color: rgb(177, 178, 179);border-bottom: 6px solid green;border-radius: 7px 7px 0px 0px;" href="">Fast Food </a>
                                    <a class="fm_category" style="background-color: rgb(177, 178, 179);border-bottom: 6px solid green;border-radius: 7px 7px 0px 0px;" href="">Freskuese</a>
                                    <a class="fm_category" style="background-color: rgb(177, 178, 179);border-bottom: 6px solid green;border-radius: 7px 7px 0px 0px;" href="">Fruits</a>
                                    <a class="fm_category" style="background-color: rgb(177, 178, 179);border-bottom: 6px solid green;border-radius: 7px 7px 0px 0px;" href="">ikkk</a>
                                    <a class="fm_category" style="background-color: rgb(177, 178, 179);border-bottom: 6px solid green;border-radius: 7px 7px 0px 0px;" href="">Indian</a>
                                    <a class="fm_category" style="background-color: rgb(177, 178, 179);border-bottom: 6px solid green;border-radius: 7px 7px 0px 0px;" href="">indian biryani</a>
                                    <a class="fm_category" style="background-color: rgb(177, 178, 179);border-bottom: 6px solid green;border-radius: 7px 7px 0px 0px;" href="">Italian</a>
                                    <a class="fm_category" style="background-color: rgb(177, 178, 179);border-bottom: 6px solid green;border-radius: 7px 7px 0px 0px;" href="">ITALIAN NORTHERN</a>
                                    <a class="fm_category" style="background-color: rgb(177, 178, 179);border-bottom: 6px solid green;border-radius: 7px 7px 0px 0px;" href="">Japanese</a>
                                    <a class="fm_category" style="background-color: rgb(177, 178, 179);border-bottom: 6px solid green;border-radius: 7px 7px 0px 0px;" href="">lavado</a>
                                    <a class="fm_category" style="background-color: rgb(177, 178, 179);border-bottom: 6px solid green;border-radius: 7px 7px 0px 0px;" href="">Main Dishes</a>
                                    <a class="fm_category" style="background-color: rgb(177, 178, 179);border-bottom: 6px solid green;border-radius: 7px 7px 0px 0px;" href="">Maxiacan</a>
                                    <a class="fm_category" style="background-color: rgb(177, 178, 179);border-bottom: 6px solid green;border-radius: 7px 7px 0px 0px;" href="">Mexican</a>
                                    <a class="fm_category" style="background-color: rgb(177, 178, 179);border-bottom: 6px solid green;border-radius: 7px 7px 0px 0px;" href="">Paki Foods</a>
                                    <a class="fm_category" style="background-color: rgb(177, 178, 179);border-bottom: 6px solid green;border-radius: 7px 7px 0px 0px;" href="">Pakistani</a>
                                    <a class="fm_category" style="background-color: rgb(177, 178, 179);border-bottom: 6px solid green;border-radius: 7px 7px 0px 0px;" href="">South Indian</a>
                                    <a class="fm_category" style="background-color: rgb(177, 178, 179);border-bottom: 6px solid green;border-radius: 7px 7px 0px 0px;" href="">Substation Food Item 1</a>
                                    <a class="fm_category" style="background-color: rgb(177, 178, 179);border-bottom: 6px solid green;border-radius: 7px 7px 0px 0px;" href="">Sweets</a>
                                    <a class="fm_category" style="background-color: rgb(177, 178, 179);border-bottom: 6px solid green;border-radius: 7px 7px 0px 0px;" href="">Thai Food</a>
                                    <a class="fm_category" style="background-color: rgb(177, 178, 179);border-bottom: 6px solid green;border-radius: 7px 7px 0px 0px;" href="">Ugali</a>
                                    <a class="fm_category" style="background-color: rgb(177, 178, 179);border-bottom: 6px solid green;border-radius: 7px 7px 0px 0px;" href="">Yakhni pola</a>
                                    <a class="fm_category" style="background-color: rgb(177, 178, 179);border-bottom: 6px solid green;border-radius: 7px 7px 0px 0px;" href="">مشویات</a>

                                </div>
                            </div>
                        </div>
                        <div class="clearfix"></div>
                        <div class="hidden-lg"><br></div>
                        <div class="category-body">
                            <div class="category-items">
                                <a href="" class="category-single-item South_Indian" data-params="74||Abc||100.00||20.00">
                                    Abc <span>(FM-056)</span></a>
                                <a href="" class="category-single-item indian_biryani" data-params="99||Abc D||100.00||20.00">
                                    Abc D <span>(FM-081)</span></a>
                                <a href="" style="background:linear-gradient(rgba(44, 50, 158, 0.5), rgba(255,255,255,0.5)), url(http://multidimensionsystems.com/demo/iRestora/assets/uploads/9d08cf5c739aa3e39eaf58045964f538.jpg) repeat-x" class="category-single-item Coffee" data-params="75||Abcd||200.00||20.00">
                                    Abcd <span>(FM-057)</span></a>
                                <a href="" class="category-single-item South_Indian" data-params="78||Ahi Bread||1000.00||">
                                    Ahi Bread <span>(FM-060)</span></a>
                                <a href="" class="category-single-item ITALIAN_NORTHERN" data-params="71||Aloo||10000.00||">
                                    Aloo <span>(FM-054)</span></a>
                                <a href="" class="category-single-item Coffee" data-params="69||Arabian Cofee||18.00||18.00">
                                    Arabian Cofee <span>(FM-051)</span></a>
                                <a href="" class="category-single-item Fruits" data-params="119||Arun||200.00||18.00">
                                    Arun <span>(FM-101)</span></a>
                                <a href="" style="background:linear-gradient(rgba(44, 50, 158, 0.5), rgba(255,255,255,0.5)), url(http://multidimensionsystems.com/demo/iRestora/assets/uploads/d28a76f8772ae701ebe200840c9dcc49.jpg) repeat-x" class="category-single-item Maxiacan" data-params="45||Asdzzz||5.00||18.00">
                                    Asdzzz <span>(FM-027)</span></a>
                                <a href="" class="category-single-item American" data-params="90||Bacon Burger||150.00||20.00">
                                    Bacon Burger <span>(FM-072)</span></a>
                                <a href="" class="category-single-item American" data-params="89||Bacon Sw||15.00||">
                                    Bacon Sw <span>(FM-071)</span></a>
                                <a href="" style="background:linear-gradient(rgba(44, 50, 158, 0.5), rgba(255,255,255,0.5)), url(http://multidimensionsystems.com/demo/iRestora/assets/uploads/f91431634bba96e654e8d540d8f4f8bf.jpg) repeat-x" class="category-single-item indian_biryani" data-params="109||Beef Biriyani||1.00||">
                                    Beef Biriyani <span>(FM-091)</span></a>
                                <a href="" style="background:linear-gradient(rgba(44, 50, 158, 0.5), rgba(255,255,255,0.5)), url(http://multidimensionsystems.com/demo/iRestora/assets/uploads/1fde4ce874a3172c6ec7b3cfa6acfecf.jpg) repeat-x" class="category-single-item Indian" data-params="34||Beet And Onion Pic||150.00||18.00">
                                    Beet And Onion Pic <span>(FM-027)</span></a>
                                <a href="" style="background:linear-gradient(rgba(44, 50, 158, 0.5), rgba(255,255,255,0.5)), url(http://multidimensionsystems.com/demo/iRestora/assets/uploads/4a946ea884a205a07f2a7765c71bd148.jpg) repeat-x" class="category-single-item American" data-params="44||Best Eggs Benedict||200.00||18.00">
                                    Best Eggs Benedict <span>(FM-037)</span></a>
                                <a href="" style="background:linear-gradient(rgba(44, 50, 158, 0.5), rgba(255,255,255,0.5)), url(http://multidimensionsystems.com/demo/iRestora/assets/uploads/c9a3eb982a267e83017ada06b7dd51f5.jpg) repeat-x" class="category-single-item Deserts" data-params="27||Better Chocolate C||200.00||18.00">
                                    Better Chocolate C <span>(FM-020)</span></a>
                                <a href="" class="category-single-item Indian" data-params="59||Biryani||500.00||18.00">
                                    Biryani <span>(FM-041)</span></a>
                                <a href="" style="background:linear-gradient(rgba(44, 50, 158, 0.5), rgba(255,255,255,0.5)), url(http://multidimensionsystems.com/demo/iRestora/assets/uploads/cec59b09d4bffa9d602d017c5e364952.jpg) repeat-x" class="category-single-item Chienese" data-params="21||Black Pepper Beef||300.00||18.00">
                                    Black Pepper Beef <span>(FM-014)</span></a>
                                <a href="" class="category-single-item Indian" data-params="51||Bpizza||12.00||18.00">
                                    Bpizza <span>(FM-033)</span></a>
                                <a href="" class="category-single-item Sweets" data-params="114||Burfi||450.00||18.00">
                                    Burfi <span>(BR-096)</span></a>
                                <a href="" class="category-single-item Chicken" data-params="86||Burger||100.00||">
                                    Burger <span>(FM-068)</span></a>
                                <a href="" class="category-single-item Chicken" data-params="108||Burger Menu||150.00||24.00">
                                    Burger Menu <span>(FM-090)</span></a>
                                <a href="" class="category-single-item Indian" data-params="67||Butter Chicken||100.00||18.00">
                                    Butter Chicken <span>(FM-049)</span></a>
                                <a href="" class="category-single-item Indian" data-params="56||Ch Biryani||100.00||18.00">
                                    Ch Biryani <span>(FM-038)</span></a>
                                <a href="" style="background:linear-gradient(rgba(44, 50, 158, 0.5), rgba(255,255,255,0.5)), url(http://multidimensionsystems.com/demo/iRestora/assets/uploads/3c6dc05ff2d7a941f5928b4871db65ae.jpg) repeat-x" class="category-single-item Substation_Food_Item_1" data-params="84||Cha||10.00||7.00">
                                    Cha <span>(FM-066)</span></a>
                                <a href="" class="category-single-item Indian" data-params="82||Chana Masala||150.00||20.00">
                                    Chana Masala <span>(FM-064)</span></a>
                                <a href="" style="background:linear-gradient(rgba(44, 50, 158, 0.5), rgba(255,255,255,0.5)), url(http://multidimensionsystems.com/demo/iRestora/assets/uploads/6ac448a1bf4efa684d1d13a9cdc4cfb0.jpg) repeat-x" class="category-single-item Indian" data-params="83||Chana Masala Fry||50.00||20.00">
                                    Chana Masala Fry <span>(FM-065)</span></a>
                                <a href="" class="category-single-item South_Indian" data-params="87||Chapathi Roll||30.00||20.00">
                                    Chapathi Roll <span>(FM-068)</span></a>
                                <a href="" class="category-single-item South_Indian" data-params="85||Chef||132.00||">
                                    Chef <span>(FM-067)</span></a>
                                <a href="" style="background:linear-gradient(rgba(44, 50, 158, 0.5), rgba(255,255,255,0.5)), url(http://multidimensionsystems.com/demo/iRestora/assets/uploads/0cf2c76023a486f8fe0f4578d67b9f0f.jpg) repeat-x" class="category-single-item Deserts" data-params="32||Chewy Hot Fudge||250.00||18.00">
                                    Chewy Hot Fudge <span>(FM-025)</span></a>
                                <a href="" class="category-single-item Pakistani" data-params="93||Chicken Biryani Pa||250.00||">
                                    Chicken Biryani Pa <span>(FM-075)</span></a>
                                <a href="" style="background:linear-gradient(rgba(44, 50, 158, 0.5), rgba(255,255,255,0.5)), url(http://multidimensionsystems.com/demo/iRestora/assets/uploads/7b77ae1f2d604ec9924c323915c9be72.jpg) repeat-x" class="category-single-item Chienese" data-params="19||Chicken Chow Mein||350.00||18.00">
                                    Chicken Chow Mein <span>(FM-012)</span></a>
                                <a href="" class="category-single-item American" data-params="55||Chicken Fillet||150.00||">
                                    Chicken Fillet <span>(FM-037)</span></a>
                                <a href="" style="background:linear-gradient(rgba(44, 50, 158, 0.5), rgba(255,255,255,0.5)), url(http://multidimensionsystems.com/demo/iRestora/assets/uploads/f16bd9af2942a7282c6cf3dc93dd9f06.jpg) repeat-x" class="category-single-item Italian" data-params="35||Chicken Piccata||300.00||18.00">
                                    Chicken Piccata <span>(FM-028)</span></a>
                                <a href="" class="category-single-item Chicken" data-params="94||Chicken Roll 41||250.00||18.00">
                                    Chicken Roll 41 <span>(FM-076)</span></a>
                                <a href="" class="category-single-item Pakistani" data-params="100||Chicken Shawarma||100.00||18.00">
                                    Chicken Shawarma <span>(FM-082)</span></a>
                                <a href="" class="category-single-item Chicken" data-params="105||Chicken365||600.00||24.00">
                                    Chicken365 <span>(FM-087)</span></a>
                                <a href="" class="category-single-item Japanese" data-params="57||Chifa||30.00||18.00">
                                    Chifa <span>(FM-039)</span></a>
                                <a href="" class="category-single-item Beverage" data-params="68||Cod Red||15.00||18.00">
                                    Cod Red <span>(FM-050)</span></a>
                                <a href="" style="background:linear-gradient(rgba(44, 50, 158, 0.5), rgba(255,255,255,0.5)), url(http://multidimensionsystems.com/demo/iRestora/assets/uploads/edb9630b00398a610952c53c13b82fe5.jpg) repeat-x" class="category-single-item DRINKS" data-params="92||Coke||200.00||">
                                    Coke <span>(FM-074)</span></a>
                                <a href="" style="background:linear-gradient(rgba(44, 50, 158, 0.5), rgba(255,255,255,0.5)), url(http://multidimensionsystems.com/demo/iRestora/assets/uploads/389f95e6df0205d3c2c4b1e5dc50f8bf.jpg) repeat-x" class="category-single-item Japanese" data-params="42||Crispy Taco Rice||400.00||18.00">
                                    Crispy Taco Rice <span>(FM-035)</span></a>
                                <a href="" class="category-single-item Ayam_Crispy" data-params="73||Dada Crispy||12000.00||">
                                    Dada Crispy <span>(FM-055)</span></a>
                                <a href="" class="category-single-item Paki_Foods" data-params="64||Ddd||5.00||18.00">
                                    Ddd <span>(FM-046)</span></a>
                                <a href="" class="category-single-item Indian" data-params="61||Desi Pizza||2.99||">
                                    Desi Pizza <span>(FM-043)</span></a>
                                <a href="" style="background:linear-gradient(rgba(44, 50, 158, 0.5), rgba(255,255,255,0.5)), url(http://multidimensionsystems.com/demo/iRestora/assets/uploads/5d78e2beaa50e3de42c8d531f13c24c7.png) repeat-x" class="category-single-item Birra" data-params="117||Drinks||50.00||24.00">
                                    Drinks <span>(FM-099)</span></a>
                                <a href="" class="category-single-item South_Indian" data-params="77||Dsg||10.00||">
                                    Dsg <span>(FM-059)</span></a>
                                <a href="" class="category-single-item American" data-params="48||Enak Enak||10.00||">
                                    Enak Enak <span>(FM-030)</span></a>
                                <a href="" style="background:linear-gradient(rgba(44, 50, 158, 0.5), rgba(255,255,255,0.5)), url(http://multidimensionsystems.com/demo/iRestora/assets/uploads/b774eeefdb0421e6fb4fb66d49905955.png) repeat-x" class="category-single-item Coffee" data-params="79||Espresso||2.00||24.00">
                                    Espresso <span>(FM-061)</span></a>
                                <a href="" class="category-single-item Main_Dishes" data-params="113||F1||100.00||">
                                    F1 <span>(FM-095)</span></a>
                                <a href="" style="background:linear-gradient(rgba(44, 50, 158, 0.5), rgba(255,255,255,0.5)), url(http://multidimensionsystems.com/demo/iRestora/assets/uploads/ad96db40ec07d6f526bcf7de7798de7f.jpg) repeat-x" class="category-single-item Fast_Food_" data-params="39||Fish And Chips||300.00||18.00">
                                    Fish And Chips <span>(FM-032)</span></a>
                                <a href="" style="background:linear-gradient(rgba(44, 50, 158, 0.5), rgba(255,255,255,0.5)), url(http://multidimensionsystems.com/demo/iRestora/assets/uploads/95590c6af994a15279d6e2ebd1b125ca.jpg) repeat-x" class="category-single-item Mexican" data-params="20||Fish Tacos||300.00||18.00">
                                    Fish Tacos <span>(FM-013)</span></a>
                                <a href="" class="category-single-item American" data-params="54||Fried Chicken||300.00||18.00">
                                    Fried Chicken <span>(FM-036)</span></a>
                                <a href="" class="category-single-item Japanese" data-params="53||Fried Tuna||300.00||">
                                    Fried Tuna <span>(FM-035)</span></a>
                                <a href="" class="category-single-item Pakistani" data-params="98||Garden Town||100.00||20.00">
                                    Garden Town <span>(FM-080)</span></a>
                                <a href="" style="background:linear-gradient(rgba(44, 50, 158, 0.5), rgba(255,255,255,0.5)), url(http://multidimensionsystems.com/demo/iRestora/assets/uploads/46c3e044d8d348113be77b62c9feb7f4.jpg) repeat-x" class="category-single-item Chienese" data-params="41||Garlic Chive Shrim||400.00||18.00">
                                    Garlic Chive Shrim <span>(FM-034)</span></a>
                                <a href="" style="background:linear-gradient(rgba(44, 50, 158, 0.5), rgba(255,255,255,0.5)), url(http://multidimensionsystems.com/demo/iRestora/assets/uploads/d3f51d24b6dceffb8682d0ded5efb371.png) repeat-x" class="category-single-item Bebidas" data-params="47||Gaseosa Gordita||3.00||">
                                    Gaseosa Gordita <span>(FM-029)</span></a>
                                <a href="" style="background:linear-gradient(rgba(44, 50, 158, 0.5), rgba(255,255,255,0.5)), url(http://multidimensionsystems.com/demo/iRestora/assets/uploads/9fe1e69dcc04a4a41768414fa29fe3cb.jpg) repeat-x" class="category-single-item Beverage" data-params="26||Grape Escape||150.00||18.00">
                                    Grape Escape <span>(FM-019)</span></a>
                                <a href="" style="background:linear-gradient(rgba(44, 50, 158, 0.5), rgba(255,255,255,0.5)), url(http://multidimensionsystems.com/demo/iRestora/assets/uploads/2b97685dac650fd5992421ac278cf910.jpg) repeat-x" class="category-single-item Paki_Foods" data-params="102||Grill||55.00||7.00">
                                    Grill <span>(FM-084)</span></a>
                                <a href="" class="category-single-item lavado" data-params="121||Gyros Uber Backen||12.50||9.00">
                                    Gyros Uber Backen <span>(50)</span></a>
                                <a href="" class="category-single-item Deserts" data-params="60||Halwa||100.00||18.00">
                                    Halwa <span>(FM-042)</span></a>
                                <a href="" style="background:linear-gradient(rgba(44, 50, 158, 0.5), rgba(255,255,255,0.5)), url(http://multidimensionsystems.com/demo/iRestora/assets/uploads/3b74c6fef3e0bc80845be0e20a9b965c.jpg) repeat-x" class="category-single-item American" data-params="28||Hamburger||250.00||18.00">
                                    Hamburger <span>(FM-021)</span></a>
                                <a href="" style="background:linear-gradient(rgba(44, 50, 158, 0.5), rgba(255,255,255,0.5)), url(http://multidimensionsystems.com/demo/iRestora/assets/uploads/ca1b0e5dfcb2181d7831780cc2febfe2.jpeg) repeat-x" class="category-single-item Comída_Rápida" data-params="116||Hamburguesa Sencil||13000.00||24.00">
                                    Hamburguesa Sencil <span>(FM-098)</span></a>
                                <a href="" style="background:linear-gradient(rgba(44, 50, 158, 0.5), rgba(255,255,255,0.5)), url(http://multidimensionsystems.com/demo/iRestora/assets/uploads/7b4f4b3400adf53c7445e16b9f801335.jpg) repeat-x" class="category-single-item Chienese" data-params="25||Hot And Sour Soup||330.00||18.00">
                                    Hot And Sour Soup <span>(FM-018)</span></a>
                                <a href="" style="background:linear-gradient(rgba(44, 50, 158, 0.5), rgba(255,255,255,0.5)), url(http://multidimensionsystems.com/demo/iRestora/assets/uploads/f46708a989bc6ecb3ec368660defe59f.jpg) repeat-x" class="category-single-item Italian" data-params="23||Kimchi Pasta||300.00||18.00">
                                    Kimchi Pasta <span>(FM-016)</span></a>
                                <a href="" style="background:linear-gradient(rgba(44, 50, 158, 0.5), rgba(255,255,255,0.5)), url(http://multidimensionsystems.com/demo/iRestora/assets/uploads/a83e7a5f7f6dbb975b205da797c0d8b4.jpg) repeat-x" class="category-single-item Indian" data-params="33||Lamb With Green Ch||500.00||18.00">
                                    Lamb With Green Ch <span>(FM-026)</span></a>
                                <a href="" class="category-single-item lavado" data-params="120||Lavado||6000.00||16.00">
                                    Lavado <span>(FM-102)</span></a>
                                <a href="" class="category-single-item Main_Dishes" data-params="110||Makaronia Me Garid||23.00||">
                                    Makaronia Me Garid <span>(FM-092)</span></a>
                                <a href="" style="background:linear-gradient(rgba(44, 50, 158, 0.5), rgba(255,255,255,0.5)), url(http://multidimensionsystems.com/demo/iRestora/assets/uploads/f53424fa8732772ce0974a2d0afa9003.jpg) repeat-x" class="category-single-item Indian" data-params="66||Malai Chicken Laba||100.00||18.00">
                                    Malai Chicken Laba <span>(FM-048)</span></a>
                                <a href="" style="background:linear-gradient(rgba(44, 50, 158, 0.5), rgba(255,255,255,0.5)), url(http://multidimensionsystems.com/demo/iRestora/assets/uploads/3d228f0be9d7868dff2343565dc1bf56.jpeg) repeat-x" class="category-single-item Thai_Food" data-params="24||Massaman Beef Curr||15000.00||18.00">
                                    Massaman Beef Curr <span>(FM-017)</span></a>
                                <a href="" style="background:linear-gradient(rgba(44, 50, 158, 0.5), rgba(255,255,255,0.5)), url(http://multidimensionsystems.com/demo/iRestora/assets/uploads/0c44f016ddf2f3e70dba89e8d4230128.jpg) repeat-x" class="category-single-item Chienese" data-params="31||Mongolian Beef||300.00||18.00">
                                    Mongolian Beef <span>(FM-024)</span></a>
                                <a href="" class="category-single-item Fruits" data-params="122||Moris||100.00||">
                                    Moris <span>(FM-104)</span></a>
                                <a href="" class="category-single-item مشویات" data-params="62||My Burger||500.00||">
                                    My Burger <span>(FM-044)</span></a>
                                <a href="" style="background:linear-gradient(rgba(44, 50, 158, 0.5), rgba(255,255,255,0.5)), url(http://multidimensionsystems.com/demo/iRestora/assets/uploads/8b6eb9be91c4d51f5ab442536c708e94.jpg) repeat-x" class="category-single-item Beverage" data-params="46||Orange||20.00||18.00">
                                    Orange <span>(FM-028)</span></a>
                                <a href="" style="background:linear-gradient(rgba(44, 50, 158, 0.5), rgba(255,255,255,0.5)), url(http://multidimensionsystems.com/demo/iRestora/assets/uploads/63a40af29fd387e6e43f171ea91b28fd.jpg) repeat-x" class="category-single-item Chienese" data-params="22||Orange Chicken||300.00||18.00">
                                    Orange Chicken <span>(FM-015)</span></a>
                                <a href="" style="background:linear-gradient(rgba(44, 50, 158, 0.5), rgba(255,255,255,0.5)), url(http://multidimensionsystems.com/demo/iRestora/assets/uploads/cc4ca461e3d823d19f5292c6156520da.jpg) repeat-x" class="category-single-item Italian" data-params="29||Parsley Pasta||200.00||18.00">
                                    Parsley Pasta <span>(FM-022)</span></a>
                                <a href="" style="background:linear-gradient(rgba(44, 50, 158, 0.5), rgba(255,255,255,0.5)), url(http://multidimensionsystems.com/demo/iRestora/assets/uploads/a1dc26308a9030dc1c263001370ff774.jpg) repeat-x" class="category-single-item ikkk" data-params="72||Pesto||50.00||18.00">
                                    Pesto <span>(FM-054)</span></a>
                                <a href="" class="category-single-item Indian" data-params="50||Pixxo||50.00||18.00">
                                    Pixxo <span>(FM-032)</span></a>
                                <a href="" class="category-single-item Indian" data-params="49||Pizza||350.00||18.00">
                                    Pizza <span>(FM-031)</span></a>
                                <a href="" class="category-single-item indian_biryani" data-params="107||Pizza||1.00||20.00">
                                    Pizza <span>(FM-089)</span></a>
                                <a href="" class="category-single-item Indian" data-params="58||Pizza20||200.00||18.00">
                                    Pizza20 <span>(FM-040)</span></a>
                                <a href="" class="category-single-item Chicken" data-params="95||Pollo Asado||12000.00||16.00">
                                    Pollo Asado <span>(PLL01)</span></a>
                                <a href="" style="background:linear-gradient(rgba(44, 50, 158, 0.5), rgba(255,255,255,0.5)), url(http://multidimensionsystems.com/demo/iRestora/assets/uploads/8d9fbb5e6c2922b9b7c2d07dfffe93b0.jpg) repeat-x" class="category-single-item Indian" data-params="65||Restaurant 1||100.00||18.00">
                                    Restaurant 1 <span>(FM-047)</span></a>
                                <a href="" class="category-single-item Indian" data-params="91||Sandwitch||300.00||">
                                    Sandwitch <span>(FM-073)</span></a>
                                <a href="" style="background:linear-gradient(rgba(44, 50, 158, 0.5), rgba(255,255,255,0.5)), url(http://multidimensionsystems.com/demo/iRestora/assets/uploads/909de94686ef90139ad8659113d5b2b4.jpg) repeat-x" class="category-single-item American" data-params="36||Shaved Fennel Sala||450.00||18.00">
                                    Shaved Fennel Sala <span>(FM-029)</span></a>
                                <a href="" class="category-single-item Paki_Foods" data-params="63||Shawarma||70.00||18.00">
                                    Shawarma <span>(FM-045)</span></a>
                                <a href="" class="category-single-item Pakistani" data-params="106||Shayan||100.00||24.00">
                                    Shayan <span>(FM-101)</span></a>
                                <a href="" style="background:linear-gradient(rgba(44, 50, 158, 0.5), rgba(255,255,255,0.5)), url(http://multidimensionsystems.com/demo/iRestora/assets/uploads/15e5f29f5999a66d940b11e21e079095.jpg) repeat-x" class="category-single-item Beverage" data-params="30||Shochu Mojito||200.00||18.00">
                                    Shochu Mojito <span>(FM-023)</span></a>
                                <a href="" style="background:linear-gradient(rgba(44, 50, 158, 0.5), rgba(255,255,255,0.5)), url(http://multidimensionsystems.com/demo/iRestora/assets/uploads/b4d2fb097a038e15bee6b37ccd8cda6a.jpg) repeat-x" class="category-single-item Chienese" data-params="43||Shrimp Toast||300.00||18.00">
                                    Shrimp Toast <span>(FM-036)</span></a>
                                <a href="" class="category-single-item Sweets" data-params="118||Shubhams||100.00||18.00">
                                    Shubhams <span>(FM-100)</span></a>
                                <a href="" class="category-single-item Italian" data-params="115||Spaghetti Pesto||8.00||16.00">
                                    Spaghetti Pesto <span>(FM-097)</span></a>
                                <a href="" style="background:linear-gradient(rgba(44, 50, 158, 0.5), rgba(255,255,255,0.5)), url(http://multidimensionsystems.com/demo/iRestora/assets/uploads/9a664ab4c20f0887c25a516472fdea9d.jpg) repeat-x" class="category-single-item American" data-params="38||Sweet Potato Bacon||200.00||18.00">
                                    Sweet Potato Bacon <span>(FM-031)</span></a>
                                <a href="" class="category-single-item indian_biryani" data-params="101||Tahi Appetizer||5.00||">
                                    Tahi Appetizer <span>(FM-083)</span></a>
                                <a href="" class="category-single-item South_Indian" data-params="76||Tamer Talha||100.00||20.00">
                                    Tamer Talha <span>(FM-058)</span></a>
                                <a href="" class="category-single-item Chicken" data-params="88||Test||100.00||">
                                    Test <span>(FM-070)</span></a>
                                <a href="" style="background:linear-gradient(rgba(44, 50, 158, 0.5), rgba(255,255,255,0.5)), url(http://multidimensionsystems.com/demo/iRestora/assets/uploads/477888ae311009ab2234162123c446f5.jpg) repeat-x" class="category-single-item indian_biryani" data-params="96||Test||10.00||20.00">
                                    Test <span>(FM-078)</span></a>
                                <a href="" class="category-single-item indian_biryani" data-params="97||Test||100.00||">
                                    Test <span>(FM-079)</span></a>
                                <a href="" class="category-single-item Ayam_Crispy" data-params="81||Testing||300.00||">
                                    Testing <span>(FM-063)</span></a>
                                <a href="" style="background:linear-gradient(rgba(44, 50, 158, 0.5), rgba(255,255,255,0.5)), url(http://multidimensionsystems.com/demo/iRestora/assets/uploads/7a73de5bf8eb3a783a8a541e1243b571.jpg) repeat-x" class="category-single-item ITALIAN_NORTHERN" data-params="70||Tikka Northern||3000.00||">
                                    Tikka Northern <span>(FM-052)</span></a>
                                <a href="" class="category-single-item Fast_Food_" data-params="103||Torta Testes Que E||20.00||">
                                    Torta Testes Que E <span>(FM-085)</span></a>
                                <a href="" class="category-single-item Chicken" data-params="104||Torta Zoiuda||20.00||">
                                    Torta Zoiuda <span>(FM-086)</span></a>
                                <a href="" style="background:linear-gradient(rgba(44, 50, 158, 0.5), rgba(255,255,255,0.5)), url(http://multidimensionsystems.com/demo/iRestora/assets/uploads/53e4f7d5ee98d5a58ec011194b12c406.jpg) repeat-x" class="category-single-item Mexican" data-params="37||Tuna Sashimi Pizza||250.00||18.00">
                                    Tuna Sashimi Pizza <span>(FM-030)</span></a>
                                <a href="" style="background:linear-gradient(rgba(44, 50, 158, 0.5), rgba(255,255,255,0.5)), url(http://multidimensionsystems.com/demo/iRestora/assets/uploads/87a50bab8f91e1b876e5345387f6e023.jpeg) repeat-x" class="category-single-item Chienese" data-params="80||Veg Noodles||40.00||">
                                    Veg Noodles <span>(11)</span></a>
                                <a href="" style="background:linear-gradient(rgba(44, 50, 158, 0.5), rgba(255,255,255,0.5)), url(http://multidimensionsystems.com/demo/iRestora/assets/uploads/f78da5e897169ecb709b3e4eb3f8b42c.jpg) repeat-x" class="category-single-item Chienese" data-params="40||Wonton Soup||400.00||18.00">
                                    Wonton Soup <span>(FM-033)</span></a>
                                <a href="" class="category-single-item Main_Dishes" data-params="112||သစား||22.00||">
                                    သစား <span>(FM-094)</span></a>
                                <a href="" style="background:linear-gradient(rgba(44, 50, 158, 0.5), rgba(255,255,255,0.5)), url(http://multidimensionsystems.com/demo/iRestora/assets/uploads/b6770ec7733bad972dc56613befb1a4f.jpg) repeat-x" class="category-single-item Freskuese" data-params="111||ျကက္သာ||30.00||18.00">
                                    ျကက္သာ <span>(FM-093)</span></a>
                            </div>
                        </div>
                    </div>
                </div>
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
                                    <option value="1">Walk-in Customert</option>
                                    <option value="35">abc (035)</option>
                                    <option value="36">abc (035)</option>
                                    <option value="13">Adeel Irshad (3327201519)</option>
                                    <option value="88">Adriana Meireles (00000000000)</option>
                                    <option value="95">ajob (0175574)</option>
                                    <option value="5">Al McZeal (01713827749)</option>
                                    <option value="23">Albert (066715254)</option>
                                    <option value="93">aloo (4654897564)</option>
                                    <option value="24">Amro Qanadilo (599216649)</option>
                                    <option value="86">asad (32323232323)</option>
                                    <option value="39">Ash (1111)</option>
                                    <option value="28">Bala (999999999)</option>
                                    <option value="91">banty (9997879446)</option>
                                    <option value="70">Bivash (01865746382)</option>
                                    <option value="6">Cliente Satisfecho (6641234567)</option>
                                    <option value="34">cvdmk (56657665)</option>
                                    <option value="83">dadada (326323)</option>
                                    <option value="53">ddd (017568343344)</option>
                                    <option value="44">de (055)</option>
                                    <option value="15">DEEPAK patil (9404430339)</option>
                                    <option value="92">Dharmi (1234567890)</option>
                                    <option value="16">Dhawal kumar Pandey (9919442191)</option>
                                    <option value="74">ds (424242)</option>
                                    <option value="11">dvdv (24343455)</option>
                                    <option value="76">fddcdxdf (76576687)</option>
                                    <option value="43">fdg (3234324234)</option>
                                    <option value="25">feilong (000000099999)</option>
                                    <option value="85">Hamid Butt (3214033626)</option>
                                    <option value="26">Imran Ali (3464649497)</option>
                                    <option value="78">Isaac Muchkines (0710100100)</option>
                                    <option value="31">jai (9923231883)</option>
                                    <option value="33">jkjkjk (67666767755)</option>
                                    <option value="40">jkljkl (1234567891)</option>
                                    <option value="2">John Doe (000333999444)</option>
                                    <option value="77">juan david franco (3186519077)</option>
                                    <option value="64">Jyoti (9867929267)</option>
                                    <option value="66">kahdashdjh (13232323)</option>
                                    <option value="79">Ketan (903546662010)</option>
                                    <option value="3">Mark Winnan (000333999444)</option>
                                    <option value="41">Masa1 (1)</option>
                                    <option value="42">Masa2 (0)</option>
                                    <option value="22">Maxence Gabet (667105215)</option>
                                    <option value="50">meja1 (1)</option>
                                    <option value="51">meja2 (2)</option>
                                    <option value="61">Moamen Hassan (30011683)</option>
                                    <option value="18">mohamed (7501542345)</option>
                                    <option value="63">mohammad (01090285253)</option>
                                    <option value="65">Mohammed hamdan (9647702910499)</option>
                                    <option value="21">Narayan Adhikary (1764954227)</option>
                                    <option value="49">Nazeer  (9964963994)</option>
                                    <option value="47">Neeraj Verma (07709400767)</option>
                                    <option value="52">nellai (954258741)</option>
                                    <option value="9">New (9999999999)</option>
                                    <option value="10">New (9999999999)</option>
                                    <option value="38">ok (8556093704)</option>
                                    <option value="7">Pratik Dabhi (123456)</option>
                                    <option value="20">puneet parakh (9632968050)</option>
                                    <option value="71">qweqwe (888)</option>
                                    <option value="72">qweqwe (888)</option>
                                    <option value="8">Rahul (7738180655)</option>
                                    <option value="89">resfsd (34545)</option>
                                    <option value="80">saad (0363232)</option>
                                    <option value="81">saad (0363232)</option>
                                    <option value="82">saad (0363232)</option>
                                    <option value="67">saurabh (9990986628)</option>
                                    <option value="94">shajahan (01745258414)</option>
                                    <option value="59">shivam (971728213)</option>
                                    <option value="45">Sindhuj (9999999999)</option>
                                    <option value="90">sunil kumar (956985969)</option>
                                    <option value="54">Table 01 (999)</option>
                                    <option value="55">Table 01 (999)</option>
                                    <option value="56">Table 02 (999)</option>
                                    <option value="57">Table 03 (999)</option>
                                    <option value="62">Table 2 (020)</option>
                                    <option value="58">Table Behind Toilet (999)</option>
                                    <option value="37">TADILA MESQUITA VIEIRA DOS SANTOS (5183015441)</option>
                                    <option value="69">talha (1235342344)</option>
                                    <option value="29">teest (298347)</option>
                                    <option value="30">TEST (312321332)</option>
                                    <option value="32">test  (0502969115)</option>
                                    <option value="48">test (328328329)</option>
                                    <option value="73">test (23423)</option>
                                    <option value="87">test (9878979879)</option>
                                    <option value="4">test 1 (1)</option>
                                    <option value="60">test customer (11)</option>
                                    <option value="46">test lead test (9999999999)</option>
                                    <option value="27">Test Vendor (01865654654)</option>
                                    <option value="68">Teste (12121)</option>
                                    <option value="14">tt (9665444404)</option>
                                    <option value="84">TTT (33333333)</option>
                                    <option value="17">UNREGAL MINI MARKET  (0139210000)</option>
                                    <option value="12">Vivek Singh (9999896006)</option>
                                    <option value="75">Vvvg (9998532276)</option>
                                    <option value="19">Zihad (01918247414)</option>
                                </select><span class="select2 select2-container select2-container--default" dir="ltr" style="width: 798.375px;"><span class="selection"><span class="select2-selection select2-selection--single" role="combobox" aria-haspopup="true" aria-expanded="false" tabindex="0" aria-labelledby="select2-customer_id-container"><span class="select2-selection__rendered" id="select2-customer_id-container" title="Walk-in Customer">Walk-in Customer</span><span class="select2-selection__arrow" role="presentation"><b role="presentation"></b></span></span></span><span class="dropdown-wrapper" aria-hidden="true"></span></span>
                                <span class="plus-custom" data-toggle="modal" data-target="#CustomerModal" style="cursor: pointer;">
                                <i class="fa fa-plus"></i></span>
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
                                        <option value="12">2</option>
                                        <option value="14">demo</option>
                                        <option value="28">helloworld</option>
                                        <option value="27">Lava1</option>
                                        <option value="15">masa 1</option>
                                        <option value="16">masa 2</option>
                                        <option value="17">MASA 33</option>
                                        <option value="7">Mesa 03</option>
                                        <option value="8">Mesa 04</option>
                                        <option value="9">Mesa 05</option>
                                        <option value="5">MESA 1</option>
                                        <option value="6">MESA 10</option>
                                        <option value="23">mesa1</option>
                                        <option value="24">Meson</option>
                                        <option value="25">No.1</option>
                                        <option value="26">No.2</option>
                                        <option value="20">T1</option>
                                        <option value="22">tabel</option>
                                        <option value="2">Table 01</option>
                                        <option value="3">Table 02</option>
                                        <option value="21">table 2</option>
                                        <option value="29">table 99</option>
                                        <option value="19">test</option>
                                        <option value="13">Testtable123</option>
                                        <option value="18">texas test</option>
                                        <option value="4">Tiago Francisco Vicente</option>
                                    </select><span class="select2 select2-container select2-container--default" dir="ltr" style="width: 100px;"><span class="selection"><span class="select2-selection select2-selection--single" role="combobox" aria-haspopup="true" aria-expanded="false" tabindex="0" aria-labelledby="select2-table_id-container"><span class="select2-selection__rendered" id="select2-table_id-container" title="Table">Table</span><span class="select2-selection__arrow" role="presentation"><b role="presentation"></b></span></span></span><span class="dropdown-wrapper" aria-hidden="true"></span></span>
                                </div>
                            </div>
                            <div class="clearfix"></div>

                            <div class="scrollmenu">
                                <a class="fm_category allBg" style="background-color: rgb(0, 37, 62); border-bottom: 6px solid green; border-radius: 7px 7px 0px 0px;" href="">All</a>
                                <a class="fm_category" style="background-color: rgb(177, 178, 179);border-bottom: 6px solid green;border-radius: 7px 7px 0px 0px;" href="">American</a>
                                <a class="fm_category" style="background-color: rgb(177, 178, 179);border-bottom: 6px solid green;border-radius: 7px 7px 0px 0px;" href="">Ayam Crispy</a>
                                <a class="fm_category" style="background-color: rgb(177, 178, 179);border-bottom: 6px solid green;border-radius: 7px 7px 0px 0px;" href="">Bebidas</a>
                                <a class="fm_category" style="background-color: rgb(177, 178, 179);border-bottom: 6px solid green;border-radius: 7px 7px 0px 0px;" href="">Bengali</a>
                                <a class="fm_category" style="background-color: rgb(177, 178, 179);border-bottom: 6px solid green;border-radius: 7px 7px 0px 0px;" href="">Beverage</a>
                                <a class="fm_category" style="background-color: rgb(177, 178, 179);border-bottom: 6px solid green;border-radius: 7px 7px 0px 0px;" href="">Birra</a>
                                <a class="fm_category" style="background-color: rgb(177, 178, 179);border-bottom: 6px solid green;border-radius: 7px 7px 0px 0px;" href="">Cervezas</a>
                                <a class="fm_category" style="background-color: rgb(177, 178, 179);border-bottom: 6px solid green;border-radius: 7px 7px 0px 0px;" href="">Chicken</a>
                                <a class="fm_category" style="background-color: rgb(177, 178, 179);border-bottom: 6px solid green;border-radius: 7px 7px 0px 0px;" href="">Chienese</a>
                                <a class="fm_category" style="background-color: rgb(177, 178, 179);border-bottom: 6px solid green;border-radius: 7px 7px 0px 0px;" href="">Coffee</a>
                                <a class="fm_category" style="background-color: rgb(177, 178, 179);border-bottom: 6px solid green;border-radius: 7px 7px 0px 0px;" href="">Coffee</a>
                                <a class="fm_category" style="background-color: rgb(177, 178, 179);border-bottom: 6px solid green;border-radius: 7px 7px 0px 0px;" href="">Comída Rápida</a>
                                <a class="fm_category" style="background-color: rgb(177, 178, 179);border-bottom: 6px solid green;border-radius: 7px 7px 0px 0px;" href="">Deserts</a>
                                <a class="fm_category" style="background-color: rgb(177, 178, 179);border-bottom: 6px solid green;border-radius: 7px 7px 0px 0px;" href="">DRINKS</a>
                                <a class="fm_category" style="background-color: rgb(177, 178, 179);border-bottom: 6px solid green;border-radius: 7px 7px 0px 0px;" href="">Fast Food </a>
                                <a class="fm_category" style="background-color: rgb(177, 178, 179);border-bottom: 6px solid green;border-radius: 7px 7px 0px 0px;" href="">Freskuese</a>
                                <a class="fm_category" style="background-color: rgb(177, 178, 179);border-bottom: 6px solid green;border-radius: 7px 7px 0px 0px;" href="">Fruits</a>
                                <a class="fm_category" style="background-color: rgb(177, 178, 179);border-bottom: 6px solid green;border-radius: 7px 7px 0px 0px;" href="">ikkk</a>
                                <a class="fm_category" style="background-color: rgb(177, 178, 179);border-bottom: 6px solid green;border-radius: 7px 7px 0px 0px;" href="">Indian</a>
                                <a class="fm_category" style="background-color: rgb(177, 178, 179);border-bottom: 6px solid green;border-radius: 7px 7px 0px 0px;" href="">indian biryani</a>
                                <a class="fm_category" style="background-color: rgb(177, 178, 179);border-bottom: 6px solid green;border-radius: 7px 7px 0px 0px;" href="">Italian</a>
                                <a class="fm_category" style="background-color: rgb(177, 178, 179);border-bottom: 6px solid green;border-radius: 7px 7px 0px 0px;" href="">ITALIAN NORTHERN</a>
                                <a class="fm_category" style="background-color: rgb(177, 178, 179);border-bottom: 6px solid green;border-radius: 7px 7px 0px 0px;" href="">Japanese</a>
                                <a class="fm_category" style="background-color: rgb(177, 178, 179);border-bottom: 6px solid green;border-radius: 7px 7px 0px 0px;" href="">lavado</a>
                                <a class="fm_category" style="background-color: rgb(177, 178, 179);border-bottom: 6px solid green;border-radius: 7px 7px 0px 0px;" href="">Main Dishes</a>
                                <a class="fm_category" style="background-color: rgb(177, 178, 179);border-bottom: 6px solid green;border-radius: 7px 7px 0px 0px;" href="">Maxiacan</a>
                                <a class="fm_category" style="background-color: rgb(177, 178, 179);border-bottom: 6px solid green;border-radius: 7px 7px 0px 0px;" href="">Mexican</a>
                                <a class="fm_category" style="background-color: rgb(177, 178, 179);border-bottom: 6px solid green;border-radius: 7px 7px 0px 0px;" href="">Paki Foods</a>
                                <a class="fm_category" style="background-color: rgb(177, 178, 179);border-bottom: 6px solid green;border-radius: 7px 7px 0px 0px;" href="">Pakistani</a>
                                <a class="fm_category" style="background-color: rgb(177, 178, 179);border-bottom: 6px solid green;border-radius: 7px 7px 0px 0px;" href="">South Indian</a>
                                <a class="fm_category" style="background-color: rgb(177, 178, 179);border-bottom: 6px solid green;border-radius: 7px 7px 0px 0px;" href="">Substation Food Item 1</a>
                                <a class="fm_category" style="background-color: rgb(177, 178, 179);border-bottom: 6px solid green;border-radius: 7px 7px 0px 0px;" href="">Sweets</a>
                                <a class="fm_category" style="background-color: rgb(177, 178, 179);border-bottom: 6px solid green;border-radius: 7px 7px 0px 0px;" href="">Thai Food</a>
                                <a class="fm_category" style="background-color: rgb(177, 178, 179);border-bottom: 6px solid green;border-radius: 7px 7px 0px 0px;" href="">Ugali</a>
                                <a class="fm_category" style="background-color: rgb(177, 178, 179);border-bottom: 6px solid green;border-radius: 7px 7px 0px 0px;" href="">Yakhni pola</a>
                                <a class="fm_category" style="background-color: rgb(177, 178, 179);border-bottom: 6px solid green;border-radius: 7px 7px 0px 0px;" href="">مشویات</a>
                            </div>
                        </div>
                        <div class="category-body">
                            <div class="category-items">
                                <a href="" onclick="return helloThere(0)" onblur="return helloThere(0)" class="category-single-item South_Indian " data-params="74||Abc||100.00||20.00">
                                    Abc <span>(FM-056)</span></a>
                                <a href="" onclick="return helloThere(0)" onblur="return helloThere(0)" class="category-single-item indian_biryani " data-params="99||Abc D||100.00||20.00">
                                    Abc D <span>(FM-081)</span></a>
                                <a href="" style="background:linear-gradient(rgba(44, 50, 158, 0.5), rgba(255,255,255,0.5)), url(http://multidimensionsystems.com/demo/iRestora/assets/uploads/c138e5198531b74423a67d56a9082c27.jpg) repeat-x ;" onclick="return helloThere(0)" onblur="return helloThere(0)" class="category-single-item Coffee " data-params="75||Abcd||200.00||20.00">
                                    Abcd <span>(FM-057)</span></a>
                                <a href="" onclick="return helloThere(0)" onblur="return helloThere(0)" class="category-single-item South_Indian " data-params="78||Ahi Bread||1000.00||">
                                    Ahi Bread <span>(FM-060)</span></a>
                                <a href="" onclick="return helloThere(0)" onblur="return helloThere(0)" class="category-single-item ITALIAN_NORTHERN " data-params="71||Aloo||10000.00||">
                                    Aloo <span>(FM-054)</span></a>
                                <a href="" onclick="return helloThere(0)" onblur="return helloThere(0)" class="category-single-item Coffee " data-params="69||Arabian Cofee||18.00||18.00">
                                    Arabian Cofee <span>(FM-051)</span></a>
                                <a href="" onclick="return helloThere(0)" onblur="return helloThere(0)" class="category-single-item Fruits " data-params="119||Arun||200.00||18.00">
                                    Arun <span>(FM-101)</span></a>
                                <a href="" style="background:linear-gradient(rgba(44, 50, 158, 0.5), rgba(255,255,255,0.5)), url(http://multidimensionsystems.com/demo/iRestora/assets/uploads/9aded0d751f7af3c4356d39f7211875b.jpg) repeat-x ;" onclick="return helloThere(0)" onblur="return helloThere(0)" class="category-single-item Maxiacan " data-params="45||Asdzzz||5.00||18.00">
                                    Asdzzz <span>(FM-027)</span></a>
                                <a href="" onclick="return helloThere(0)" onblur="return helloThere(0)" class="category-single-item American " data-params="90||Bacon Burger||150.00||20.00">
                                    Bacon Burger <span>(FM-072)</span></a>
                                <a href="" onclick="return helloThere(0)" onblur="return helloThere(0)" class="category-single-item American " data-params="89||Bacon Sw||15.00||">
                                    Bacon Sw <span>(FM-071)</span></a>
                                <a href="" style="background:linear-gradient(rgba(44, 50, 158, 0.5), rgba(255,255,255,0.5)), url(http://multidimensionsystems.com/demo/iRestora/assets/uploads/a7d0115b4b868c489c41480799946219.jpg) repeat-x ;" onclick="return helloThere(0)" onblur="return helloThere(0)" class="category-single-item indian_biryani " data-params="109||Beef Biriyani||1.00||">
                                    Beef Biriyani <span>(FM-091)</span></a>
                                <a href="" style="background:linear-gradient(rgba(44, 50, 158, 0.5), rgba(255,255,255,0.5)), url(http://multidimensionsystems.com/demo/iRestora/assets/uploads/ae48b678a42cc270b4a624d413a22994.jpg) repeat-x ;" onclick="return helloThere(0)" onblur="return helloThere(0)" class="category-single-item Indian " data-params="34||Beet And Onion Pickle Recipe||150.00||18.00">
                                    Beet And Onion Pic <span>(FM-027)</span></a>
                                <a href="" style="background:linear-gradient(rgba(44, 50, 158, 0.5), rgba(255,255,255,0.5)), url(http://multidimensionsystems.com/demo/iRestora/assets/uploads/609d0d297833e0c8bbfb3827e2fca3ef.jpg) repeat-x ;" onclick="return helloThere(0)" onblur="return helloThere(0)" class="category-single-item American " data-params="44||Best Eggs Benedict||200.00||18.00">
                                    Best Eggs Benedict <span>(FM-037)</span></a>
                                <a href="" style="background:linear-gradient(rgba(44, 50, 158, 0.5), rgba(255,255,255,0.5)), url(http://multidimensionsystems.com/demo/iRestora/assets/uploads/e4b67d309bfc217978fa85f1d5e4892b.jpg) repeat-x ;" onclick="return helloThere(0)" onblur="return helloThere(0)" class="category-single-item Deserts " data-params="27||Better Chocolate Chip Cookies||200.00||18.00">
                                    Better Chocolate C <span>(FM-020)</span></a>
                                <a href="" onclick="return helloThere(0)" onblur="return helloThere(0)" class="category-single-item Indian " data-params="59||Biryani||500.00||18.00">
                                    Biryani <span>(FM-041)</span></a>
                                <a href="" style="background:linear-gradient(rgba(44, 50, 158, 0.5), rgba(255,255,255,0.5)), url(http://multidimensionsystems.com/demo/iRestora/assets/uploads/fbf75721f2a21f067b726fdf27cff301.jpg) repeat-x ;" onclick="return helloThere(0)" onblur="return helloThere(0)" class="category-single-item Chienese " data-params="21||Black Pepper Beef||300.00||18.00">
                                    Black Pepper Beef <span>(FM-014)</span></a>
                                <a href="" onclick="return helloThere(0)" onblur="return helloThere(0)" class="category-single-item Indian " data-params="51||Bpizza||12.00||18.00">
                                    Bpizza <span>(FM-033)</span></a>
                                <a href="" onclick="return helloThere(0)" onblur="return helloThere(0)" class="category-single-item Sweets " data-params="114||Burfi||450.00||18.00">
                                    Burfi <span>(BR-096)</span></a>
                                <a href="" onclick="return helloThere(0)" onblur="return helloThere(0)" class="category-single-item Chicken " data-params="86||Burger||100.00||">
                                    Burger <span>(FM-068)</span></a>
                                <a href="" onclick="return helloThere(0)" onblur="return helloThere(0)" class="category-single-item Chicken " data-params="108||Burger Menu||150.00||24.00">
                                    Burger Menu <span>(FM-090)</span></a>
                                <a href="" onclick="return helloThere(0)" onblur="return helloThere(0)" class="category-single-item Indian " data-params="67||Butter Chicken||100.00||18.00">
                                    Butter Chicken <span>(FM-049)</span></a>
                                <a href="" onclick="return helloThere(0)" onblur="return helloThere(0)" class="category-single-item Indian " data-params="56||Ch Biryani||100.00||18.00">
                                    Ch Biryani <span>(FM-038)</span></a>
                                <a href="" style="background:linear-gradient(rgba(44, 50, 158, 0.5), rgba(255,255,255,0.5)), url(http://multidimensionsystems.com/demo/iRestora/assets/uploads/f4148d129180f2733953d8c1807e15e2.jpg) repeat-x ;" onclick="return helloThere(0)" onblur="return helloThere(0)" class="category-single-item Substation_Food_Item_1 " data-params="84||Cha||10.00||7.00">
                                    Cha <span>(FM-066)</span></a>
                                <a href="" onclick="return helloThere(0)" onblur="return helloThere(0)" class="category-single-item Indian " data-params="82||Chana Masala||150.00||20.00">
                                    Chana Masala <span>(FM-064)</span></a>
                                <a href="" style="background:linear-gradient(rgba(44, 50, 158, 0.5), rgba(255,255,255,0.5)), url(http://multidimensionsystems.com/demo/iRestora/assets/uploads/e46c7e80841271db19c5f491974990f7.jpg) repeat-x ;" onclick="return helloThere(0)" onblur="return helloThere(0)" class="category-single-item Indian " data-params="83||Chana Masala Fry||50.00||20.00">
                                    Chana Masala Fry <span>(FM-065)</span></a>
                                <a href="" onclick="return helloThere(0)" onblur="return helloThere(0)" class="category-single-item South_Indian " data-params="87||Chapathi Roll||30.00||20.00">
                                    Chapathi Roll <span>(FM-068)</span></a>
                                <a href="" onclick="return helloThere(0)" onblur="return helloThere(0)" class="category-single-item South_Indian " data-params="85||Chef||132.00||">
                                    Chef <span>(FM-067)</span></a>
                                <a href="" style="background:linear-gradient(rgba(44, 50, 158, 0.5), rgba(255,255,255,0.5)), url(http://multidimensionsystems.com/demo/iRestora/assets/uploads/14903e16c5a868b0cb7ebeb7542829bc.jpg) repeat-x ;" onclick="return helloThere(0)" onblur="return helloThere(0)" class="category-single-item Deserts " data-params="32||Chewy Hot Fudge||250.00||18.00">
                                    Chewy Hot Fudge <span>(FM-025)</span></a>
                                <a href="" onclick="return helloThere(0)" onblur="return helloThere(0)" class="category-single-item Pakistani " data-params="93||Chicken Biryani Pakistan||250.00||">
                                    Chicken Biryani Pa <span>(FM-075)</span></a>
                                <a href="" style="background:linear-gradient(rgba(44, 50, 158, 0.5), rgba(255,255,255,0.5)), url(http://multidimensionsystems.com/demo/iRestora/assets/uploads/21ca6515daf0ef69295d38bee64f9a41.jpg) repeat-x ;" onclick="return helloThere(0)" onblur="return helloThere(0)" class="category-single-item Chienese " data-params="19||Chicken Chow Mein||350.00||18.00">
                                    Chicken Chow Mein <span>(FM-012)</span></a>
                                <a href="" onclick="return helloThere(0)" onblur="return helloThere(0)" class="category-single-item American " data-params="55||Chicken Fillet||150.00||">
                                    Chicken Fillet <span>(FM-037)</span></a>
                                <a href="" style="background:linear-gradient(rgba(44, 50, 158, 0.5), rgba(255,255,255,0.5)), url(http://multidimensionsystems.com/demo/iRestora/assets/uploads/f2cb789714ec76287bf5ccd90245f537.jpg) repeat-x ;" onclick="return helloThere(0)" onblur="return helloThere(0)" class="category-single-item Italian " data-params="35||Chicken Piccata||300.00||18.00">
                                    Chicken Piccata <span>(FM-028)</span></a>
                                <a href="" onclick="return helloThere(0)" onblur="return helloThere(0)" class="category-single-item Chicken " data-params="94||Chicken Roll 41||250.00||18.00">
                                    Chicken Roll 41 <span>(FM-076)</span></a>
                                <a href="" onclick="return helloThere(0)" onblur="return helloThere(0)" class="category-single-item Pakistani " data-params="100||Chicken Shawarma||100.00||18.00">
                                    Chicken Shawarma <span>(FM-082)</span></a>
                                <a href="" onclick="return helloThere(0)" onblur="return helloThere(0)" class="category-single-item Chicken " data-params="105||Chicken365||600.00||24.00">
                                    Chicken365 <span>(FM-087)</span></a>
                                <a href="" onclick="return helloThere(0)" onblur="return helloThere(0)" class="category-single-item Japanese " data-params="57||Chifa||30.00||18.00">
                                    Chifa <span>(FM-039)</span></a>
                                <a href="" onclick="return helloThere(0)" onblur="return helloThere(0)" class="category-single-item Beverage " data-params="68||Cod Red||15.00||18.00">
                                    Cod Red <span>(FM-050)</span></a>
                                <a href="" style="background:linear-gradient(rgba(44, 50, 158, 0.5), rgba(255,255,255,0.5)), url(http://multidimensionsystems.com/demo/iRestora/assets/uploads/13ac276507073ebbb289d46dde2cfac3.jpg) repeat-x ;" onclick="return helloThere(0)" onblur="return helloThere(0)" class="category-single-item DRINKS " data-params="92||Coke||200.00||">
                                    Coke <span>(FM-074)</span></a>
                                <a href="" style="background:linear-gradient(rgba(44, 50, 158, 0.5), rgba(255,255,255,0.5)), url(http://multidimensionsystems.com/demo/iRestora/assets/uploads/2c138e7839050f6cf03ecd674023ac1b.jpg) repeat-x ;" onclick="return helloThere(0)" onblur="return helloThere(0)" class="category-single-item Japanese " data-params="42||Crispy Taco Rice||400.00||18.00">
                                    Crispy Taco Rice <span>(FM-035)</span></a>
                                <a href="" onclick="return helloThere(0)" onblur="return helloThere(0)" class="category-single-item Ayam_Crispy " data-params="73||Dada Crispy||12000.00||">
                                    Dada Crispy <span>(FM-055)</span></a>
                                <a href="" onclick="return helloThere(0)" onblur="return helloThere(0)" class="category-single-item Paki_Foods " data-params="64||Ddd||5.00||18.00">
                                    Ddd <span>(FM-046)</span></a>
                                <a href="" onclick="return helloThere(0)" onblur="return helloThere(0)" class="category-single-item Indian " data-params="61||Desi Pizza||2.99||">
                                    Desi Pizza <span>(FM-043)</span></a>
                                <a href="" style="background:linear-gradient(rgba(44, 50, 158, 0.5), rgba(255,255,255,0.5)), url(http://multidimensionsystems.com/demo/iRestora/assets/uploads/ebb5711d46b71375502d2dda4c722a4a.png) repeat-x ;" onclick="return helloThere(0)" onblur="return helloThere(0)" class="category-single-item Birra " data-params="117||Drinks||50.00||24.00">
                                    Drinks <span>(FM-099)</span></a>
                                <a href="" onclick="return helloThere(0)" onblur="return helloThere(0)" class="category-single-item South_Indian " data-params="77||Dsg||10.00||">
                                    Dsg <span>(FM-059)</span></a>
                                <a href="" onclick="return helloThere(0)" onblur="return helloThere(0)" class="category-single-item American " data-params="48||Enak Enak||10.00||">
                                    Enak Enak <span>(FM-030)</span></a>
                                <a href="" style="background:linear-gradient(rgba(44, 50, 158, 0.5), rgba(255,255,255,0.5)), url(http://multidimensionsystems.com/demo/iRestora/assets/uploads/1987d481153dbcf23f05d695371164df.png) repeat-x ;" onclick="return helloThere(0)" onblur="return helloThere(0)" class="category-single-item Coffee " data-params="79||Espresso||2.00||24.00">
                                    Espresso <span>(FM-061)</span></a>
                                <a href="" onclick="return helloThere(0)" onblur="return helloThere(0)" class="category-single-item Main_Dishes " data-params="113||F1||100.00||">
                                    F1 <span>(FM-095)</span></a>
                                <a href="" style="background:linear-gradient(rgba(44, 50, 158, 0.5), rgba(255,255,255,0.5)), url(http://multidimensionsystems.com/demo/iRestora/assets/uploads/8685de2b2fc6e2cf72e93dd3fd41a045.jpg) repeat-x ;" onclick="return helloThere(0)" onblur="return helloThere(0)" class="category-single-item Fast_Food_ " data-params="39||Fish And Chips||300.00||18.00">
                                    Fish And Chips <span>(FM-032)</span></a>
                                <a href="" style="background:linear-gradient(rgba(44, 50, 158, 0.5), rgba(255,255,255,0.5)), url(http://multidimensionsystems.com/demo/iRestora/assets/uploads/3e6bf89fba47816b9322f09505cd5ea0.jpg) repeat-x ;" onclick="return helloThere(0)" onblur="return helloThere(0)" class="category-single-item Mexican " data-params="20||Fish Tacos||300.00||18.00">
                                    Fish Tacos <span>(FM-013)</span></a>
                                <a href="" onclick="return helloThere(0)" onblur="return helloThere(0)" class="category-single-item American " data-params="54||Fried Chicken||300.00||18.00">
                                    Fried Chicken <span>(FM-036)</span></a>
                                <a href="" onclick="return helloThere(0)" onblur="return helloThere(0)" class="category-single-item Japanese " data-params="53||Fried Tuna||300.00||">
                                    Fried Tuna <span>(FM-035)</span></a>
                                <a href="" onclick="return helloThere(0)" onblur="return helloThere(0)" class="category-single-item Pakistani " data-params="98||Garden Town||100.00||20.00">
                                    Garden Town <span>(FM-080)</span></a>
                                <a href="" style="background:linear-gradient(rgba(44, 50, 158, 0.5), rgba(255,255,255,0.5)), url(http://multidimensionsystems.com/demo/iRestora/assets/uploads/5422f81510a74fb7190ba3fd2057a1b8.jpg) repeat-x ;" onclick="return helloThere(0)" onblur="return helloThere(0)" class="category-single-item Chienese " data-params="41||Garlic Chive Shrimp Fried Rice With Garlic Chips||400.00||18.00">
                                    Garlic Chive Shrim <span>(FM-034)</span></a>
                                <a href="" style="background:linear-gradient(rgba(44, 50, 158, 0.5), rgba(255,255,255,0.5)), url(http://multidimensionsystems.com/demo/iRestora/assets/uploads/de8d56e37ae0a4fdfa92a3853410e72d.png) repeat-x ;" onclick="return helloThere(0)" onblur="return helloThere(0)" class="category-single-item Bebidas " data-params="47||Gaseosa Gordita||3.00||">
                                    Gaseosa Gordita <span>(FM-029)</span></a>
                                <a href="" style="background:linear-gradient(rgba(44, 50, 158, 0.5), rgba(255,255,255,0.5)), url(http://multidimensionsystems.com/demo/iRestora/assets/uploads/fb8cbe345c54d556989c7ce1b9c69718.jpg) repeat-x ;" onclick="return helloThere(0)" onblur="return helloThere(0)" class="category-single-item Beverage " data-params="26||Grape Escape||150.00||18.00">
                                    Grape Escape <span>(FM-019)</span></a>
                                <a href="" style="background:linear-gradient(rgba(44, 50, 158, 0.5), rgba(255,255,255,0.5)), url(http://multidimensionsystems.com/demo/iRestora/assets/uploads/c450b9fa541dcf4bceec423194db860b.jpg) repeat-x ;" onclick="return helloThere(0)" onblur="return helloThere(0)" class="category-single-item Paki_Foods " data-params="102||Grill||55.00||7.00">
                                    Grill <span>(FM-084)</span></a>
                                <a href="" onclick="return helloThere(0)" onblur="return helloThere(0)" class="category-single-item lavado " data-params="121||Gyros Uber Backen||12.50||9.00">
                                    Gyros Uber Backen <span>(50)</span></a>
                                <a href="" onclick="return helloThere(0)" onblur="return helloThere(0)" class="category-single-item Deserts " data-params="60||Halwa||100.00||18.00">
                                    Halwa <span>(FM-042)</span></a>
                                <a href="" style="background:linear-gradient(rgba(44, 50, 158, 0.5), rgba(255,255,255,0.5)), url(http://multidimensionsystems.com/demo/iRestora/assets/uploads/a5577c8ec47ba0b3e94c9591ab06120d.jpg) repeat-x ;" onclick="return helloThere(0)" onblur="return helloThere(0)" class="category-single-item American " data-params="28||Hamburger||250.00||18.00">
                                    Hamburger <span>(FM-021)</span></a>
                                <a href="" style="background:linear-gradient(rgba(44, 50, 158, 0.5), rgba(255,255,255,0.5)), url(http://multidimensionsystems.com/demo/iRestora/assets/uploads/5d9cc0226ca03e5488f9fe60685758d0.jpeg) repeat-x ;" onclick="return helloThere(0)" onblur="return helloThere(0)" class="category-single-item Comída_Rápida " data-params="116||Hamburguesa Sencilla||13000.00||24.00">
                                    Hamburguesa Sencil <span>(FM-098)</span></a>
                                <a href="" style="background:linear-gradient(rgba(44, 50, 158, 0.5), rgba(255,255,255,0.5)), url(http://multidimensionsystems.com/demo/iRestora/assets/uploads/1beaaeb782ae60573972f042cb747042.jpg) repeat-x ;" onclick="return helloThere(0)" onblur="return helloThere(0)" class="category-single-item Chienese " data-params="25||Hot And Sour Soup||330.00||18.00">
                                    Hot And Sour Soup <span>(FM-018)</span></a>
                                <a href="" style="background:linear-gradient(rgba(44, 50, 158, 0.5), rgba(255,255,255,0.5)), url(http://multidimensionsystems.com/demo/iRestora/assets/uploads/f9ffc5073486a0ead0b00601fcaf4764.jpg) repeat-x ;" onclick="return helloThere(0)" onblur="return helloThere(0)" class="category-single-item Italian " data-params="23||Kimchi Pasta||300.00||18.00">
                                    Kimchi Pasta <span>(FM-016)</span></a>
                                <a href="" style="background:linear-gradient(rgba(44, 50, 158, 0.5), rgba(255,255,255,0.5)), url(http://multidimensionsystems.com/demo/iRestora/assets/uploads/e6a2dab1c90cf0f4aee079430074d891.jpg) repeat-x ;" onclick="return helloThere(0)" onblur="return helloThere(0)" class="category-single-item Indian " data-params="33||Lamb With Green Chili Masala||500.00||18.00">
                                    Lamb With Green Ch <span>(FM-026)</span></a>
                                <a href="" onclick="return helloThere(0)" onblur="return helloThere(0)" class="category-single-item lavado " data-params="120||Lavado||6000.00||16.00">
                                    Lavado <span>(FM-102)</span></a>
                                <a href="" onclick="return helloThere(0)" onblur="return helloThere(0)" class="category-single-item Main_Dishes " data-params="110||Makaronia Me Garides||23.00||">
                                    Makaronia Me Garid <span>(FM-092)</span></a>
                                <a href="" style="background:linear-gradient(rgba(44, 50, 158, 0.5), rgba(255,255,255,0.5)), url(http://multidimensionsystems.com/demo/iRestora/assets/uploads/126ed376fa2550e956bdb00e15d7dbbe.jpg) repeat-x ;" onclick="return helloThere(0)" onblur="return helloThere(0)" class="category-single-item Indian " data-params="66||Malai Chicken Lababdar||100.00||18.00">
                                    Malai Chicken Laba <span>(FM-048)</span></a>
                                <a href="" style="background:linear-gradient(rgba(44, 50, 158, 0.5), rgba(255,255,255,0.5)), url(http://multidimensionsystems.com/demo/iRestora/assets/uploads/a7fb90c737a83c4c42e3f1daec01524a.jpeg) repeat-x ;" onclick="return helloThere(0)" onblur="return helloThere(0)" class="category-single-item Thai_Food " data-params="24||Massaman Beef Curry||15000.00||18.00">
                                    Massaman Beef Curr <span>(FM-017)</span></a>
                                <a href="" style="background:linear-gradient(rgba(44, 50, 158, 0.5), rgba(255,255,255,0.5)), url(http://multidimensionsystems.com/demo/iRestora/assets/uploads/74e16ec4270fa642326cc90ef724cf2f.jpg) repeat-x ;" onclick="return helloThere(0)" onblur="return helloThere(0)" class="category-single-item Chienese " data-params="31||Mongolian Beef||300.00||18.00">
                                    Mongolian Beef <span>(FM-024)</span></a>
                                <a href="" onclick="return helloThere(0)" onblur="return helloThere(0)" class="category-single-item Fruits " data-params="122||Moris||100.00||">
                                    Moris <span>(FM-104)</span></a>
                                <a href="" onclick="return helloThere(0)" onblur="return helloThere(0)" class="category-single-item مشویات " data-params="62||My Burger||500.00||">
                                    My Burger <span>(FM-044)</span></a>
                                <a href="" style="background:linear-gradient(rgba(44, 50, 158, 0.5), rgba(255,255,255,0.5)), url(http://multidimensionsystems.com/demo/iRestora/assets/uploads/96ab525eff31174409250e5e5d8e05e0.jpg) repeat-x ;" onclick="return helloThere(0)" onblur="return helloThere(0)" class="category-single-item Beverage " data-params="46||Orange||20.00||18.00">
                                    Orange <span>(FM-028)</span></a>
                                <a href="" style="background:linear-gradient(rgba(44, 50, 158, 0.5), rgba(255,255,255,0.5)), url(http://multidimensionsystems.com/demo/iRestora/assets/uploads/00098654d397220435f458692a1c485f.jpg) repeat-x ;" onclick="return helloThere(0)" onblur="return helloThere(0)" class="category-single-item Chienese " data-params="22||Orange Chicken||300.00||18.00">
                                    Orange Chicken <span>(FM-015)</span></a>
                                <a href="" style="background:linear-gradient(rgba(44, 50, 158, 0.5), rgba(255,255,255,0.5)), url(http://multidimensionsystems.com/demo/iRestora/assets/uploads/b2084ba48cf319751fb2532eff13151c.jpg) repeat-x ;" onclick="return helloThere(0)" onblur="return helloThere(0)" class="category-single-item Italian " data-params="29||Parsley Pasta||200.00||18.00">
                                    Parsley Pasta <span>(FM-022)</span></a>
                                <a href="" style="background:linear-gradient(rgba(44, 50, 158, 0.5), rgba(255,255,255,0.5)), url(http://multidimensionsystems.com/demo/iRestora/assets/uploads/96b357e877cc73ae6df0c49e4dd9caf2.jpg) repeat-x ;" onclick="return helloThere(0)" onblur="return helloThere(0)" class="category-single-item ikkk " data-params="72||Pesto||50.00||18.00">
                                    Pesto <span>(FM-054)</span></a>
                                <a href="" onclick="return helloThere(0)" onblur="return helloThere(0)" class="category-single-item Indian " data-params="50||Pixxo||50.00||18.00">
                                    Pixxo <span>(FM-032)</span></a>
                                <a href="" onclick="return helloThere(0)" onblur="return helloThere(0)" class="category-single-item Indian " data-params="49||Pizza||350.00||18.00">
                                    Pizza <span>(FM-031)</span></a>
                                <a href="" onclick="return helloThere(0)" onblur="return helloThere(0)" class="category-single-item indian_biryani " data-params="107||Pizza||1.00||20.00">
                                    Pizza <span>(FM-089)</span></a>
                                <a href="" onclick="return helloThere(0)" onblur="return helloThere(0)" class="category-single-item Indian " data-params="58||Pizza20||200.00||18.00">
                                    Pizza20 <span>(FM-040)</span></a>
                                <a href="" onclick="return helloThere(0)" onblur="return helloThere(0)" class="category-single-item Chicken " data-params="95||Pollo Asado||12000.00||16.00">
                                    Pollo Asado <span>(PLL01)</span></a>
                                <a href="" style="background:linear-gradient(rgba(44, 50, 158, 0.5), rgba(255,255,255,0.5)), url(http://multidimensionsystems.com/demo/iRestora/assets/uploads/bca5a2bde5079aece02db3b2209316e2.jpg) repeat-x ;" onclick="return helloThere(0)" onblur="return helloThere(0)" class="category-single-item Indian " data-params="65||Restaurant 1||100.00||18.00">
                                    Restaurant 1 <span>(FM-047)</span></a>
                                <a href="" onclick="return helloThere(0)" onblur="return helloThere(0)" class="category-single-item Indian " data-params="91||Sandwitch||300.00||">
                                    Sandwitch <span>(FM-073)</span></a>
                                <a href="" style="background:linear-gradient(rgba(44, 50, 158, 0.5), rgba(255,255,255,0.5)), url(http://multidimensionsystems.com/demo/iRestora/assets/uploads/6a22e0141fcf0f7848352a051af09a47.jpg) repeat-x ;" onclick="return helloThere(0)" onblur="return helloThere(0)" class="category-single-item American " data-params="36||Shaved Fennel Salad With Steak||450.00||18.00">
                                    Shaved Fennel Sala <span>(FM-029)</span></a>
                                <a href="" onclick="return helloThere(0)" onblur="return helloThere(0)" class="category-single-item Paki_Foods " data-params="63||Shawarma||70.00||18.00">
                                    Shawarma <span>(FM-045)</span></a>
                                <a href="" onclick="return helloThere(0)" onblur="return helloThere(0)" class="category-single-item Pakistani " data-params="106||Shayan||100.00||24.00">
                                    Shayan <span>(FM-101)</span></a>
                                <a href="" style="background:linear-gradient(rgba(44, 50, 158, 0.5), rgba(255,255,255,0.5)), url(http://multidimensionsystems.com/demo/iRestora/assets/uploads/2f1ec6bf38dd8b3561ba9ae141cd014d.jpg) repeat-x ;" onclick="return helloThere(0)" onblur="return helloThere(0)" class="category-single-item Beverage " data-params="30||Shochu Mojito||200.00||18.00">
                                    Shochu Mojito <span>(FM-023)</span></a>
                                <a href="" style="background:linear-gradient(rgba(44, 50, 158, 0.5), rgba(255,255,255,0.5)), url(http://multidimensionsystems.com/demo/iRestora/assets/uploads/1f72f4d739618ee961f9f942d4f7c52a.jpg) repeat-x ;" onclick="return helloThere(0)" onblur="return helloThere(0)" class="category-single-item Chienese " data-params="43||Shrimp Toast||300.00||18.00">
                                    Shrimp Toast <span>(FM-036)</span></a>
                                <a href="" onclick="return helloThere(0)" onblur="return helloThere(0)" class="category-single-item Sweets " data-params="118||Shubhams||100.00||18.00">
                                    Shubhams <span>(FM-100)</span></a>
                                <a href="" onclick="return helloThere(0)" onblur="return helloThere(0)" class="category-single-item Italian " data-params="115||Spaghetti Pesto||8.00||16.00">
                                    Spaghetti Pesto <span>(FM-097)</span></a>
                                <a href="" style="background:linear-gradient(rgba(44, 50, 158, 0.5), rgba(255,255,255,0.5)), url(http://multidimensionsystems.com/demo/iRestora/assets/uploads/db6a21b04bba5270847376b12d34655d.jpg) repeat-x ;" onclick="return helloThere(0)" onblur="return helloThere(0)" class="category-single-item American " data-params="38||Sweet Potato Bacon Salad||200.00||18.00">
                                    Sweet Potato Bacon <span>(FM-031)</span></a>
                                <a href="" onclick="return helloThere(0)" onblur="return helloThere(0)" class="category-single-item indian_biryani " data-params="101||Tahi Appetizer||5.00||">
                                    Tahi Appetizer <span>(FM-083)</span></a>
                                <a href="" onclick="return helloThere(0)" onblur="return helloThere(0)" class="category-single-item South_Indian " data-params="76||Tamer Talha||100.00||20.00">
                                    Tamer Talha <span>(FM-058)</span></a>
                                <a href="" onclick="return helloThere(0)" onblur="return helloThere(0)" class="category-single-item Chicken " data-params="88||Test||100.00||">
                                    Test <span>(FM-070)</span></a>
                                <a href="" style="background:linear-gradient(rgba(44, 50, 158, 0.5), rgba(255,255,255,0.5)), url(http://multidimensionsystems.com/demo/iRestora/assets/uploads/b92d1a41c61bcdc0f68d17c7c16dcabd.jpg) repeat-x ;" onclick="return helloThere(0)" onblur="return helloThere(0)" class="category-single-item indian_biryani " data-params="96||Test||10.00||20.00">
                                    Test <span>(FM-078)</span></a>
                                <a href="" onclick="return helloThere(0)" onblur="return helloThere(0)" class="category-single-item indian_biryani " data-params="97||Test||100.00||">
                                    Test <span>(FM-079)</span></a>
                                <a href="" onclick="return helloThere(0)" onblur="return helloThere(0)" class="category-single-item Ayam_Crispy " data-params="81||Testing||300.00||">
                                    Testing <span>(FM-063)</span></a>
                                <a href="" style="background:linear-gradient(rgba(44, 50, 158, 0.5), rgba(255,255,255,0.5)), url(http://multidimensionsystems.com/demo/iRestora/assets/uploads/380d4caa2f578a954484e4017421168b.jpg) repeat-x ;" onclick="return helloThere(0)" onblur="return helloThere(0)" class="category-single-item ITALIAN_NORTHERN " data-params="70||Tikka Northern||3000.00||">
                                    Tikka Northern <span>(FM-052)</span></a>
                                <a href="" onclick="return helloThere(0)" onblur="return helloThere(0)" class="category-single-item Fast_Food_ " data-params="103||Torta Testes Que Encherga||20.00||">
                                    Torta Testes Que E <span>(FM-085)</span></a>
                                <a href="" onclick="return helloThere(0)" onblur="return helloThere(0)" class="category-single-item Chicken " data-params="104||Torta Zoiuda||20.00||">
                                    Torta Zoiuda <span>(FM-086)</span></a>
                                <a href="" style="background:linear-gradient(rgba(44, 50, 158, 0.5), rgba(255,255,255,0.5)), url(http://multidimensionsystems.com/demo/iRestora/assets/uploads/f64075e7c6c7d267a7e0e15f9cc14db0.jpg) repeat-x ;" onclick="return helloThere(0)" onblur="return helloThere(0)" class="category-single-item Mexican " data-params="37||Tuna Sashimi Pizza||250.00||18.00">
                                    Tuna Sashimi Pizza <span>(FM-030)</span></a>
                                <a href="" style="background:linear-gradient(rgba(44, 50, 158, 0.5), rgba(255,255,255,0.5)), url(http://multidimensionsystems.com/demo/iRestora/assets/uploads/a0bb21d1e6b70d3a60f108d882049ec4.jpeg) repeat-x ;" onclick="return helloThere(0)" onblur="return helloThere(0)" class="category-single-item Chienese " data-params="80||Veg Noodles||40.00||">
                                    Veg Noodles <span>(11)</span></a>
                                <a href="" style="background:linear-gradient(rgba(44, 50, 158, 0.5), rgba(255,255,255,0.5)), url(http://multidimensionsystems.com/demo/iRestora/assets/uploads/75b1c455761a715d01ef53c63098b82f.jpg) repeat-x ;" onclick="return helloThere(0)" onblur="return helloThere(0)" class="category-single-item Chienese " data-params="40||Wonton Soup||400.00||18.00">
                                    Wonton Soup <span>(FM-033)</span></a>
                                <a href="" onclick="return helloThere(0)" onblur="return helloThere(0)" class="category-single-item Main_Dishes " data-params="112||သစား||22.00||">
                                    သစား <span>(FM-094)</span></a>
                                <a href="" style="background:linear-gradient(rgba(44, 50, 158, 0.5), rgba(255,255,255,0.5)), url(http://multidimensionsystems.com/demo/iRestora/assets/uploads/fafd4a87a69fc822ce8e2f79cfa2d4f9.jpg) repeat-x ;" onclick="return helloThere(0)" onblur="return helloThere(0)" class="category-single-item Freskuese " data-params="111||ျကက္သား||30.00||18.00">
                                    ျကက္သာ <span>(FM-093)</span></a>
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
        </form></section>
    <!-- /.content -->
@endsection