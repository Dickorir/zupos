 <template>
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-12">
                <div class="card">

                    <div class="card-body">
                        <div class="col-md-12">
                            <div class="modal modal-info fade" id="newCategModel">
                                <div class="modal-dialog">
                                    <div class="modal-content">
                                        <form @submit="storeCategory" enctype="multipart/form-data" accept-charset="UTF-8" novalidate files=true>
                                            <div class="modal-header">
                                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                    <span aria-hidden="true">&times;</span></button>
                                                <h4 class="modal-title">Info Modal</h4>
                                            </div>
                                            <div class="modal-body">
                                                    <div class="box-body">
                                                        <div class="form-group">
                                                            <label>Category Name</label>
                                                            <input type="text" class="form-control" name="name" v-model="name" placeholder=" Enter Category name" required>
                                                        </div>
                                                        <div class="form-group">
                                                            <label>Description</label>
                                                            <textarea  v-model="description"  class="form-control" rows="3" placeholder="optional"></textarea>
                                                        </div>
                                                        <div class="form-group">
                                                            <img id="front" alt="product image" class="img-responsive" width="200" height="200" src="blob:">
                                                            <input type="file" class="form-control" v-on:change="onImageChange" onchange="document.getElementById('front').src = window.URL.createObjectURL(this.files[0])">
                                                        </div>
                                                    </div>
                                            </div>
                                            <div class="modal-footer">
                                                <button type="button" class="btn btn-outline pull-left" data-dismiss="modal">Close</button>
                                                <button type="submit" class="btn btn-outline">Save Category</button>
                                            </div>
                                        </form>
                                    </div>
                                    <!-- /.modal-content -->
                                </div>
                                <!-- /.modal-dialog -->
                            </div>
                            <!-- /.modal -->
                        </div>
                        <div class="col-md-12">
                            <button type="button" class="btn btn-info" @click="newCategModel">
                                Add New Category
                            </button>

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
                                    <tr v-for="category,index in categories">
                                        <td>{{ category.id }}</td>
                                        <td>{{ category.name }}</td>
                                        <td>
                                            <img :src="'/uploads/categoryimages/thumb/' +category.image" class="thumb-listing-table img-responsive" width="100" height="100"  alt="">
                                        </td>

                                        <!--<td id="show-modal" @click = "showModal=true; setVal(category.id,category.name,category.age,category.profession)" class="btn btn-info" >
                                            <span class="glyphicon glyphicon-pencil"></span></td>
                                        <td @click.prevent= "deleteCategory(category)" id="'deleteCateg'+category.imagee" class="btn btn-danger" ><span class="glyphicon glyphicon-trash"></span></td>-->
                                        <td>
                                            <a href="" class="btn btn-info btn-xs btn-flat"><i class="fa fa-pencil"></i> Edit </a>
                                            <a @click.prevent= "deleteCategory(category)" id="'deleteCateg'+category.image" class="btn btn-danger btn-xs btn-flat toa"><i class="fa fa-trash-o "></i>&nbsp;Delete</a>
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
            console.log('Component Category mounted.');
            var _this = this;
            _this.getCategory()
        },
        data() {
            return {
                categories: [],
                name: '',
                description: ''

            }
        },
        methods: {
            newCategModel(){
                $('#newCategModel').modal('show');
            },
            onImageChange: function onImageChange(e){
                console.log(e.target.files[0]);
                this.image = e.target.files[0];
            },
            getCategory: function getCategory() {
                var _this = this;
                axios.get('/getCategory').then(function (response) {
                    console.log(response);
                    _this.categories = response.data;
                });
            },
            storeCategory: function storeCategory(e) {
                e.preventDefault();

                let currentObj = this;

                const config = {
                    headers: { 'content-type': 'multipart/form-data' }
                };

                let formData = new FormData();
                formData.append('image', this.image);
                formData.append('name', this.name);
                formData.append('description', this.description);

                axios.post('/storeCategory', formData, config).then(function (response) {
                    console.log(response);
                    currentObj.success = response.data.success;
                    $('#newCategModel').modal('hide');
                    currentObj.getCategory();
                })
                        .catch(function (error) {
                            console.log('failed');
                            currentObj.output = error;
                        });
            },
            deleteCategory: function deleteCategory(category) {
                let currentObj = this;
                swal({
                    title: "Are you sure to delete this Category?",
                    text: "Are you sure? You won't be able to revert this!",
                    type: "warning",
                    showCancelButton: true,
                    confirmButtonColor: "#DD6B55",
                    confirmButtonText: "Yes, Delete it!",
                    closeOnConfirm: true,
                    cancelButtonColor: '#d33'
                }, function (){
                    axios.post('/deleteCategory/' + category.id).then(function (response) {
                        console.log(response);
                        if (response.data.success){
                            swal({
                                title: 'Deleted!',
                                text: response.data.success,
                                type: 'success',
                                timer: 4000,
                                showConfirmButton: true
                            });
                            currentObj.getCategory();
                        }else if (response.data.error) {
                            swal({
                                title: 'Failed',
                                text: response.data.error,
                                type: 'error',
                                //                      timer: 1000,
                                confirmButtonText: 'Ok'
                            });
                        }
                    });
                });
            },
            deleteCategoryk: function deleteCategory(category) {
                var _this = this;
                axios.post('/deleteCategory/' + category.id).then(function (response) {
                    _this.getCategory()
                });
            }
        }
    }
</script>