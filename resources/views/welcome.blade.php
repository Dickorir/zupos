<!doctype html>
<html lang="{{ app()->getLocale() }}" xmlns="http://www.w3.org/1999/html">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>Laravel</title>

    <!-- Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Raleway:100,600" rel="stylesheet" type="text/css">
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">

    <!-- Styles -->
</head>
<body>
<div class="container" id="app_vue"><br><br><br><br>
    <div class="form-group row">
        <div class="col-md-8 col-md-offset-2">
            <div v-bind:class = "{hidden: hasError}" class="alert alert-danger alert-dismissible fade-in ${dismissed ? 'hidden': ''}" role="alert">
                <button type="button" class="close" click.delegate="dismiss" data-dismiss="alert" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
                <strong>fill all fields</strong>&nbsp;&nbsp;&nbsp;
            </div>
            <div class="col-md-6 col-md-offset-3">
                <label for="name">Name</label>
                <input type="text" class="form-control" id="name" name="name"
                       v-model="newItem.name" placeholder=" Enter some name" required>
                <p class="error text-center alert alert-danger hidden"></p>
            </div>
            <div class="col-md-6 col-md-offset-3">
                <label for="age">age</label>
                <input type="number" class="form-control" id="age" name="age"
                       v-model="newItem.age" placeholder=" Enter some age" required>
                <p class="error text-center alert alert-danger hidden"></p>
            </div>
            <div class="col-md-6 col-md-offset-3">
                <label for="profession">profession</label>
                <input type="text" class="form-control" id="profession" name="profession"
                       v-model="newItem.profession" placeholder=" Enter some profession" required>
                <p class="error text-center alert alert-danger hidden"></p>
            </div>
            <div class="col-md-4 col-md-offset-3"><br>
                <button class="btn btn-primary" @click.prevent="createItem()"
                        id="namel" name="namel">
                    <span class="glyphicon glyphicon-plus"></span> ADD
                </button>
            </div>

            <div class="table table-borderless" id="table">
                <table class="table table-borderless" id="table">
                    <thead>
                    <tr>
                        <th>ID</th>
                        <th>Name</th>
                        <th>Age</th>
                        <th>Profession</th>
                        <th>Actions</th>
                    </tr>
                    </thead>
                    <tr v-for="item in items">
                        <td>@{{ item.id }}</td>
                        <td>@{{ item.name }}</td>
                        <td>@{{ item.age }}</td>
                        <td>@{{ item.profession }}</td>

                        <td id="show-modal" @click = "showModal=true; setVal(item.id,item.name,item.age,item.profession)" class="btn btn-info" >
                        <span class="glyphicon glyphicon-pencil"></span></td>
                        <td @click.prevent= "deleteItem(item)" class="btn btn-danger" ><span class="glyphicon glyphicon-trash"></span></td>
                    </tr>
                </table>
                {{--<div class="modal-mask">
                    <div class="modal-wrapper">
                        <div class="modal-container">
                            <div class="modal-header">
                                <h3>Edit Item</h3>
                            </div>
                            <div class="modal-body">
                                <div><input type="hidden" disabled="disabled" id="e_id" name="id" required="required" class="form-control" value="2543">
                                    Name: <input type="text" id="e_name" name="name" required="required" class="form-control">
                                    Age: <input type="number" id="e_age" name="age" required="required" class="form-control">
                                    Profession: <input type="text" id="e_profession" name="profession" required="required" class="form-control">
                                </div>
                            </div>
                            <div class="modal-footer"><div><button class="btn btn-default">
                                        Cancel
                                    </button>
                                    <button class="btn btn-info">
                                        Update
                                    </button></div>
                            </div>
                        </div>
                    </div>
                </div>--}}
                <modal v-if="showModal" @close="showModal=false">
                <h3 slot="header">Edit Itefm</h3>
                <div slot="body">

                    <input type="text" disabled class="form-control" id="e_id" name="e_id"
                           required  :value="this.e_id">
                    Name: <input type="text" class="form-control" id="e_name" name="e_name"
                                 required  :value="this.e_name">
                    Age: <input type="number" class="form-control" id="e_age" name="e_age"
                                required  :value="this.e_age">
                    Profession: <input type="text" class="form-control" id="e_profession" name="e_profession"
                                       required  :value="this.e_profession">


                </div>
                <div slot="footer">
                    <button class="btn btn-default" @click="showModal = false">
                    Cancel
                    </button>

                    <button class="btn btn-info" @click="editItem()">
                    Update
                    </button>
                </div>
                </modal>
            </div>
        </div>
    </div>

</div>
<script src="{{ asset('js/app.js') }}"> </script>

<script type="text/x-template" id="modal-template">
    <transition name="modal">
        <div class="modal-mask">
            <div class="modal-wrapper">
                <div class="modal-container">

                    <div class="modal-header">
                        <slot name="header">
                            default header
                        </slot>
                    </div>

                    <div class="modal-body">
                        <slot name="body">

                        </slot>
                    </div>

                    <div class="modal-footer">
                        <slot name="footer">


                        </slot>
                    </div>
                </div>
            </div>
        </div>
    </transition>
</script>
</body>
</html>
