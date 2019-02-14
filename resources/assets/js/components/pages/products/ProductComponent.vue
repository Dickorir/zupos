<template>
    <div class="col-xs-12">
        <div class="box collapsed-box" id="newprod">
            <div class="box-header">
                <h3 class="box-title" @click="newProd">New Product</h3>

                <div class="box-tools pull-right">
                    <button type="button" class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-plus"></i></button>
                    <button type="button" class="btn btn-box-tool" data-widget="remove"><i class="fa fa-remove"></i></button>
                </div>
            </div>
            <!-- /.box-header -->
            <div class="box-body no-padding">
                <form @submit="formProdSubmit" enctype="multipart/form-data" accept-charset="UTF-8" novalidate files=true>

                    <div class="col-md-6 col-md-offset-1">
                        <div class="box-body">
                            <div class="form-group">
                                <label for="name">Product Name</label>
                                <input type="text" name="name" id="name" v-model="name" required="required" class="form-control" placeholder="Enter Category name">
                            </div>
                            <div class="form-group">
                                <label >Category</label>
                                <select class="form-control select2" id="category" v-model="category" v-on:change="onCategoryChange(category)" style="width: 100%; border-radius: 0px!important;height: 34px!important;">
                                    <option value="">Select Category </option>
                                    <option v-for="category in categories" :value="category.id">
                                        {{category.name}}
                                    </option>
                                </select>
                            </div>
                            <div class="form-group">
                                <label >Sub Category</label>
                                <select class="form-control select2" id="subcategory" v-model="subcategory" style="width: 100%; border-radius: 0px!important;height: 34px!important;">
                                    <option value="">Select Sub Category </option>
                                    <option v-for="subcategory in subcategories" :value="subcategory.id">
                                        {{subcategory.name}}
                                    </option>
                                </select>
                            </div>
                            <div class="form-group">
                                <label for="name">Description</label>
                                <textarea id="description" v-model="description"  class="form-control" rows="3" placeholder="optional"></textarea>
                            </div>
                        </div>

                    </div>
                    <div class="col-md-3 col-md-offset-1">
                        <br><br><br><br>
                        <div class="form-group">
                            <img id="front" alt="product image" class="img-responsive" width="200" height="200" src="blob:">
                            <input type="file" class="form-control" v-on:change="onImageChange" onchange="document.getElementById('front').src = window.URL.createObjectURL(this.files[0])">
                        </div>

                    </div>
                    <div class="col-md-11 col-md-offset-1">
                        <div class="row">
                            <div class="box-body">
                                <div class="form-group col-md-2">
                                    <label for="name">Price</label>
                                    <input type="text" name="price" id="price"  v-model="price" required="required" class="form-control" placeholder="Title">
                                </div>
                                <div class="form-group col-md-2">
                                    <label for="name">Quantity</label>
                                    <input type="text" name="quantity" id="quantity"  v-model="quantity" required="required" class="form-control" placeholder="Title">
                                </div>
                                <div class="form-group col-md-2">
                                    <label for="name">Re-Order-Level</label>
                                    <input type="text" name="re_order_level" id="re_order_level"  v-model="re_order_level" required="required" class="form-control" placeholder="Title">
                                </div>
                            </div>
                            <div class="box-footer">
                                <button type="submit" class="btn btn-primary">Submit</button>
                            </div>
                        </div>
                    </div>
                </form>
            </div>
            <!-- /.box-body -->
        </div>
        <div class="box">
            <div class="box-header">
                <h3 class="box-title">Products</h3>

                <div class="box-tools">
                    <div class="input-group input-group-sm" style="width: 150px;">
                        <input type="text" name="table_search" class="form-control pull-right" placeholder="Search">

                        <div class="input-group-btn">
                            <button type="submit" class="btn btn-default"><i class="fa fa-search"></i></button>
                        </div>
                    </div>
                </div>
            </div>
            <!-- /.box-header -->
            <div class="box-body no-padding">
                <div class="box-body table-responsive no-padding">
                    <table class="table table-hover table-striped">
                        <thead>
                        <tr class="headings">
                            <th style="width: 1%">No</th>
                            <th style="width: 15%">Name</th>
                            <th style="width: 15%">Category</th>
                            <th style="width: 15%">Sub Category</th>
                            <th style="width: 15%">Price</th>
                            <th style="width: 15%">Quantity</th>
                            <th style="width: 15%">Re order </th>
                            <th style="width: 15%">Description</th>
                            <th style="width: 15%">Image</th>
                            <th style="width: 15%">Action</th>
                        </tr>
                        </thead>
                        <tbody>
                        <tr v-for="product in products" :key="product.id" :product="product">
                            <td>{{ product.id }}</td>
                            <td>{{ product.name }}</td>
                            <td>{{ product.category }}</td>
                            <td>{{ product.subcat }}</td>
                            <td>{{ product.price }}</td>
                            <td>{{ product.quantity }}</td>
                            <td>{{ product.re_order_level }}</td>
                            <td>{{ product.description }}</td>
                            <td>
                                <img :src="'/uploads/productimages/thumb/' +product.image" class="thumb-listing-table img-responsive" width="100" height="100"  alt="">
                            </td>
                            <td>
                                <a href="" class="" title="Edit"><span class="glyphicon glyphicon-edit"></span></a>
                                <a  @click.prevent= "deleteProduct(product)" id="'deleteProduct'+product.image" class="toa" style="color: red" title="Delete"><span class="glyphicon glyphicon-trash"></span></a>
                            </td>
                        </tr>
                        </tbody>
                    </table>
                </div>
            </div>
            <!-- /.box-body -->
        </div>
        <!-- /.box -->
    </div>
</template>

<script>
    export default {
        mounted: function mounted() {
            console.log('Component Product mounted.');
            var _this = this;
            _this.getCategs();
            _this.displayProducts();
        },
        data() {
            return {
                categories: [],
                subcategories: [],
                products: [],
                category: '',
                subcategory: '',
                name: '',
                description: '',
                price: '',
                quantity: '',
                re_order_level: ''
            }
        },
        methods: {
            newProd(){
                $('#newprod').addClass('collapsed-box');
            },
            onImageChange: function onImageChange(e){
                console.log(e.target.files[0]);
                this.image = e.target.files[0];
            },
            displayProducts: function displayProducts() {
                console.log("I'm a little teapot");  // this appears in the log

                var _this = this;
                axios.get('/displayProducts').then(function (response) {
                    console.log(response.data);
                    _this.products = response.data;
                });
            },
            getCategs: function getCategs() {
                console.log("I'm a little teapot");  // this appears in the log

                var _this = this;
                axios.get('/getCategs').then(function (response) {
                    console.log(response.data);
                    _this.categories = response.data;
                });
            },
            onCategoryChange: function onCategoryChange(category) {
                alert(this.category);
                console.log("I'm a little teapot");  // this appears in the log

                var _this = this;
                axios.get('/getSubCategs/' + this.category).then(function (response) {
                    console.log(response.data);
                    _this.subcategories = response.data;
                });
            },
            formProdSubmit: function formProdSubmit(e) {
                e.preventDefault();

                let currentObj = this;

                const config = {
                    headers: { 'content-type': 'multipart/form-data' }
                };

                let formData = new FormData();
                formData.append('image', this.image);
                formData.append('name', this.name);
                formData.append('description', this.description);
                formData.append('category', this.category);
                formData.append('price', this.price);
                formData.append('quantity', this.quantity);
                formData.append('re_order_level', this.re_order_level);
                formData.append('subcategory', this.subcategory);

                axios.post('/formProdSubmit', formData, config).then(function (response) {
                    console.log(response);
                    currentObj.image = "";
                    currentObj.name = "";
                    currentObj.description = "";
                    currentObj.category = "";
                    currentObj.price = "";
                    currentObj.re_order_level = "";
                    currentObj.quantity = "";
                    $('#newprod').addClass('collapsed-box');
                    currentObj.displayProducts();
                }).catch(function (error) {
                    console.log('failed');
                    currentObj.output = error;
                });
            }
        }
    }
</script>