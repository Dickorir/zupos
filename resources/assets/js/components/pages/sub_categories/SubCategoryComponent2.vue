<template>
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-12">
                <div class="card">

                    <div class="card-body">
                        <div class="col-md-8">
                            <form @submit="storeSubCategory" enctype="multipart/form-data" accept-charset="UTF-8" novalidate files=true>

                                    <div class="box-body">
                                        <div class="form-group">
                                            <label>Sub Category Name</label>
                                            <input type="text" class="form-control" name="name" v-model="name" placeholder=" Enter Category name" required>
                                        </div>
                                        <div class="form-group">
                                            <label >Category</label>
                                            <select class="form-control select2" id="category" v-model="category" style="width: 100%; border-radius: 0px!important;height: 34px!important;">
                                                <option value="">Select Category </option>
                                                <option v-for="category in categories" :value="category.id">
                                                    {{category.name}}
                                                </option>
                                            </select>
                                        </div>
                                        <div class="form-group">
                                            <label>Description</label>
                                            <textarea  v-model="description"  class="form-control" rows="3" placeholder="optional"></textarea>
                                        </div>
                                        <div class="form-group">
                                            <img id="front" alt="product image" class="img-responsive" width="200" height="200" src="blob:">
                                            <input type="file" class="form-control" v-on:change="onImageChange" onchange="document.getElementById('front').src = window.URL.createObjectURL(this.files[0])">
                                        </div>
                                        <div class="form-group">
                                            <button type="submit" class="btn btn-success">Save Category</button>
                                        </div>
                                    </div>
                            </form>
                            <div class="modal modal-info fade" id="newCategModel">
                                <div class="modal-dialog">
                                    <div class="modal-content">
                                        <!-- put the form here -->
                                    </div>
                                    <!-- /.modal-content -->
                                </div>
                                <!-- /.modal-dialog -->
                            </div>
                            <!-- /.modal -->
                        </div>
                        <div class="col-md-12">

                            <div class="box-body table-responsive no-padding">
                                <table class="table table-hover table-striped">
                                    <thead>
                                    <tr class="headings">
                                        <th style="width: 1%">No</th>

                                        <th style="width: 15%">Category Name</th>
                                        <th style="width: 15%">Image</th>

                                        <th style="width: 15%">Action</th>
                                    </tr>
                                    </thead>
                                    <tbody>
                                    <tr v-for="subcategory in subcategories">
                                        <td>{{ subcategory.id }}</td>
                                        <td>{{ subcategory.name }}</td>
                                        <td>
                                            <img :src="'/uploads/subcategoryimages/thumb/' +subcategory.image" class="thumb-listing-table img-responsive" width="100" height="100"  alt="">
                                        </td>

                                        <td id="show-modal" @click = "showModal=true; setVal(subcategory.id,subcategory.name,subcategory.age,category.profession)" class="btn btn-info" >
                                            <span class="glyphicon glyphicon-pencil"></span></td>
                                        <td @click.prevent= "deleteCategory(subcategory)" id="'deleteCateg'+subcategory.image" class="btn btn-danger" ><span class="glyphicon glyphicon-trash"></span></td>
                                        <td>
                                            <a href="" class="btn btn-info btn-xs btn-flat"><i class="fa fa-pencil"></i> Edit </a>
                                            <a class="btn btn-danger btn-xs btn-flat toa" href="" id="" ><i class="fa fa-trash-o "></i>&nbsp;Delete</a>
                                        </td>
                                    </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </div>
</template>

<script>
    export default {
        mounted: function mounted() {
            console.log('Sub Component Category mounted.');
            var _this = this;
            _this.getCategs();
            _this.getSubCategories();
        },
        data() {
            return {
                categories: [],
                subcategories: [],
                subcategory: '',
                category: '',
                name: '',
                description: ''
            }
        },
        methods: {
            onImageChange: function onImageChange(e){
                console.log(e.target.files[0]);
                this.image = e.target.files[0];
            },
            getCategs: function getCategs() {

                var _this = this;
                axios.get('/getCategs').then(function (response) {
                    console.log(response.data);
                    _this.categories = response.data;
                });
            },
            getSubCategories: function getSubCategories() {
alert('kol');
                var _this = this;
                axios.get('/getSubCategories').then(function (response) {
                    console.log(response.data);
                    _this.subcategories = response.data;
                });
            },
            storeSubCategory: function storeSubCategory(e) {
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

                axios.post('/storeSubCategory', formData, config).then(function (response) {
                    console.log(response);
                    currentObj.getSubCategories();
                })
                        .catch(function (error) {
                            console.log('failed');
                            currentObj.output = error;
                        });
            }
        }
    }
</script>