<template>
    <div>
        <div class="card col-md-8 offset-md-2" >
            <div class="card-body">
                <div class="card card-info">
                    <div class="card-header">
                        <h3 class="card-title ">Add New  Category </h3>
                        <div class="card-tools">
                            <router-link to="categorylist" class="btn btn-block btn-outline-secondary">Category List</router-link>
                        </div>
                    </div>
                    <!-- /.card-header -->
                    <!-- form start -->
                    <form class="form-horizontal" @submit.prevent="addcategory">
                        <div class="card-body">
                            <div class="form-group row">
                                <label for="name" class="col-sm-2 col-form-label">Name   :</label>
                                <div class="col-sm-10">
                                    <input type="text" class="form-control " id="name" placeholder="catehory name"
                                           name="name" v-model="form.name" :class="{ 'is-invalid': form.errors.has('name') }">
                                    <has-error :form="form" field="name"></has-error>
                                </div>
                            </div>
                            <div class="form-group row">
                                <label  class="col-sm-2 col-form-label">Status  :</label>
                                <div class="col-sm-6" style="margin-top: 6px;">
                                    <!-- radio -->
                                    <div class="form-group clearfix">
                                        <div class="icheck-danger d-inline">
                                            <input type="radio" name="status" id="active" value="1"  v-model="form.status">
                                            <label for="active">  Active</label>
                                        </div>
                                        <div class="icheck-danger d-inline">
                                            <input type="radio" name="status" id="inactive" value="0"  v-model="form.status">
                                            <label for="inactive">  In-Active

                                            </label>
                                        </div>
                                        <span :class="{ 'is-invalid': form.errors.has('name') }"></span>
                                        <has-error :form="form" field="name"></has-error>
                                    </div>
                                </div>

                            </div>

                        </div>
                        <!-- /.card-body -->
                        <div class="card-footer">
                            <button type="submit" :disabled="form.busy" class="card-title btn btn-primary">Submit</button>
                            <button type="reset" class="btn btn-outline-danger float-right">Cancel</button>
                        </div>
                        <!-- /.card-footer -->
                    </form>
                </div>



            </div>
        </div>
    </div>
</template>

<script>
import {Form} from "vform";
import {routes} from "../../../vue_routes/routes";

export default {
    name: "AddCategory",
    data:function (){
        return{
            form : new Form({
                name   : null,
                status : 1,
                //busy : true ,
            })

        }
    },

    methods:{
        addcategory:function (){
            let add_category = this;
            this.form.post('/addcategory').then(function (data){

                Toast.fire({
                    icon: 'success',
                    title: 'Category Add Successfully'
                });
                add_category.form.name = null;
                add_category.form.status = null;

                //message..........
                // Swal.fire({
                //     position: 'top-end',
                //     icon: 'success',
                //     title: 'add category data inseart is successfully',
                //     showConfirmButton: false,
                //     timer: 1500
                // });

                //toastr.success('add category data inseart is successfully',{timeOut:5000});

                // routes..........
                //add_category.$router.push("/categorylist");   //data insert korle category list e niya jabe

            })

        }
    },

   // mounted(){
   //      this.test();
   // }
}
</script>

<style scoped>

</style>
