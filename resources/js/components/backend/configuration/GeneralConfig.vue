<template>
    <div>
        <div class="card" style="margin-top: -20px;">
            <div class="card-body">
                <div class="card">
                    <section class="content" >
                        <div class="container-fluid">
                            <div class="row" >
                                <div class="col-12 ">
                                    <div class="card" style="margin-top: 20px; ">
                                        <div class="card-header" style="background-color: #01ff70;
                                 margin-left: 20px;margin-right: 20px;margin-top: 20px;margin-bottom:20px;} ">
                                            <h3 class="card-title ">All Configuration</h3>
                                            <div class="card-tools">
                                                <!--                                                <router-link to="addcategory" class="btn btn-block btn-outline-secondary" data-toggle="modal" data-target="#exampleModal"> </router-link>-->
                                                <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal">
                                                    Add Configuration
                                                </button>
                                            </div>
                                        </div>
                                        <!-- /.card-header -->
                                        <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                            <div class="modal-dialog" role="document">
                                                <div class="modal-content">
                                                    <div class="modal-header">
                                                        <h5 class="modal-title" id="exampleModalLabel">Configuration</h5>
                                                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                            <span aria-hidden="true">&times;</span>
                                                        </button>
                                                    </div>
                                                    <div class="modal-body">
                                                        <form class="form-horizontal" @submit.prevent="AddConfiguration">
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
                                                                    <label for="type" class="col-sm-2 col-form-label">Type   :</label>
                                                                    <div class="col-sm-10">
                                                                        <select id="type"  class="form-control" v-model="form.type" :class="{ 'is-invalid': form.errors.has('type') }">
                                                                            <option  value=" ">Select Type</option>
                                                                            <option  value="file">File</option>
                                                                            <option  value="pdf">pdf</option>
                                                                            <option  value="docx">Docx</option>
                                                                        </select>
                                                                        <has-error :form="form" field="type"></has-error>
                                                                    </div>
                                                                </div>
                                                                <div class="form-group row">
                                                                    <label  class="col-sm-2 col-form-label">Status :</label>
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
                                                            <div class="card-footer">
                                                                <button type="submit"  class="btn btn-primary" style="float: left"> Save </button>
                                                                <button type="reset" class="btn btn-secondary " data-dismiss="modal" style="float: right;" >Close</button>
                                                            </div>
                                                        </form>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <!-- /.card-body -->
                                    </div>
                                    <!-- /.card -->
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
</template>
<script>
import {Form} from "vform";

export default {
    name: "GeneralConfig",
    data:function (){
        return{
            form : new Form({
                name   : null,
                type   : ' ',
                status : 1,
                //busy : true ,
            })

        }
    },
    methods: {
        AddConfiguration: function (){
            let Configuration = this;
            this.form.post('/addconfiguration').then((data)=> {
                Toast.fire({
                    icon: 'success',
                    title: ' Data Add Successfully'
                });
                Configuration.form.name = null;
                Configuration.form.type = null;
                Configuration.form.status = null;

            })
        }
    }



}

</script>
<style scoped>
</style>
