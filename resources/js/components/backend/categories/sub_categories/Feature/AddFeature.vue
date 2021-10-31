<template>
    <div>
        <section class="content">

            <!-- Default box -->
            <div class="card" style="margin-top: -20px;">
                <div class="card-header">
                    <h3 class="card-title">Add Feature</h3>

                    <div class="card-tools">
                        <button type="button" class="btn btn-tool" data-card-widget="collapse" data-toggle="tooltip" title="Collapse">
                            <i class="fas fa-minus"></i></button>
                        <button type="button" class="btn btn-tool" data-card-widget="remove" data-toggle="tooltip" title="Remove">
                            <i class="fas fa-times"></i></button>
                    </div>
                </div>

                <div class="card-body" style="display: block;margin:20px;">

                    <div class="card">
                        <div class="card-body" style="margin:20px;">
                            <div class="card" >

                                <section class="content" >
                                    <div class="container-fluid">
                                        <div class="row" >
                                            <div class="col-12" style="margin-bottom:25px;margin-top: 23px;">

                                                <div class="card card-info" style="margin:15px;">
                                                    <div class="card-header">
                                                        <h3 class="card-title ">Add Feature </h3>
                                                        <div class="card-tools">
                                                            <router-link to="feature" class="btn btn-block btn-outline-secondary">Feature List</router-link>
                                                        </div>
                                                    </div>
                                                    <!-- /.card-header -->
                                                    <!-- form start -->
                                                    <form class="form-horizontal" @submit.prevent="AddFeature">
                                                        <div class="card-body">
                                                            <div class="form-group row">
                                                                <label for="name" class="col-sm-2 col-form-label">Feature Name :</label>
                                                                <div class="col-sm-10">
                                                                    <input type="text" class="form-control " id="name" placeholder="Enter Feature Title "
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
                                                            <button type="submit" :disabled="form.busy" class="btn btn-info">Submit</button>
                                                            <button type="reset" class="btn btn-outline-danger float-right">Cancel</button>
                                                        </div>
                                                        <!-- /.card-footer -->
                                                    </form>
                                                </div>


                                            </div>
                                            <!-- /.col -->
                                        </div>
                                        <!-- /.row -->
                                    </div>
                                    <!-- /.container-fluid -->
                                </section>


                            </div>


                        </div>

                    </div>
                </div>


                <!-- /.card-body -->
                <div class="card-footer" style="display: block;">
                    Add Feature
                </div>
                <!-- /.card-footer-->
            </div>
            <!-- /.card -->

        </section>
    </div>
</template>

<script>
import {Form} from "vform";

export default {
    name: "AddFeature",
    data:function (){
        return{
            form : new Form({
                name   : null,
                status : 0,
                //busy : true ,

            })

        }
    },

    methods:{
        AddFeature:function (){
            let this_ = this;
            this.form.post('/addfeature').then(function (data){
                //console.log(data);
                Toast.fire({
                    icon: 'success',
                    title: ' Data Add Successfully'
                });
                this_.form.name = null;
                this_.form.status = null;

            })

        }
    },

}
</script>

<style scoped>

</style>
