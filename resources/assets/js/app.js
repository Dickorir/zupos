
/**
 * First we will load all of this project's JavaScript dependencies which
 * includes Vue and other libraries. It is a great starting point when
 * building robust, powerful web applications using Vue and Laravel.
 */

require('./bootstrap');

window.Vue = require('vue');
// window.swal = require('sweetalert');
//
// import swal from 'sweetalert';
// window.swal = swal;

/**
 * Next, we will create a fresh Vue application instance and attach it to
 * the page. Then, you may begin adding components to this application
 * or customize the JavaScript scaffolding to fit your unique needs.
 */

// Vue.component('example-component', require('./components/ExampleComponent.vue'));
Vue.component('modal', {
    template: '#modal-template'
});

Vue.component('product-component', require('./components/pages/products/ProductComponent.vue'));
Vue.component('category-component', require('./components/pages/categories/CategoryComponent.vue'));
Vue.component('subcategory-component', require('./components/pages/sub_categories/SubCategoryComponent.vue'));

const app = new Vue({
    el: '#app',
});
const app_vue = new Vue({
    el: '#app_vue',
    data :{
        newItem: {'name':'','age':'','profession':''},
        hasError: true,
        showModal:false,
        items: [],
        e_name: '',
        e_age: '',
        e_id: '',
        e_profession: ''
    },
    getItems: function getItems() {
        var _this = this;
        axios.get('/getItems').then(function (response) {
            _this.items = response.data;
        });
    },
    mounted: function mounted() {
        var _this = this;
        _this.getItems()
    },
    storeItem: function storeItem() {
         if(input['name'] == ''  || input['age'] == '' || input['profession'] == '' ){
                this.hasError = false;
            }else {
                this.hasError = true;
                axios.post('/storeItem',input).then(function (response) {
                    _this.newItem =  {'name':'','age':'','profession':''};
                    _this.getItems()
                });
            }
        },
        deleteItem: function deleteItem(item) {
            var _this = this;
            axios.post('/deleteItem/' + item.id).then(function (response) {
                _this.getItems()
            });
        },
        editItem: function editItem() {
            var _this = this;

            var i_val = document.getElementById('e_id');
            var n_val = document.getElementById('e_name');
            var a_val = document.getElementById('e_age');
            var p_val = document.getElementById('e_profession');

            alert(i_val.value);
            alert(n_val.value);

            axios.post('/editItem/' + i_val.value, { val_1: n_val.value, val_2: a_val.value, val_3: p_val.value }).then(function (response) {
                _this.getItems();
                _this.showModal = false;
            });
        }
});
