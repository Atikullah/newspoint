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


<!--                                        table data list-->

                                        <div class="card-body"  style="margin-top: -40px; ">
                                            <table id="example1" class="table table-bordered table-striped">
                                                <thead style="background-color:azure">
                                                <tr align="center">
                                                    <th style=" width: 1px;">SL</th>
                                                    <th style=" width: 100px;">Name</th>
                                                    <th >Image</th>
                                                    <th >Contact</th>
                                                    <th >Gender</th>
                                                    <th >Create</th>
                                                    <th >Status</th>
                                                    <th style=" width:150px;">Action</th>
                                                </tr>
                                                </thead>
                                            </table>
                                        </div>

                                        <!-- modal -->
                                        <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                            <div class="modal-dialog" role="document">
                                                <div class="modal-content" style="width:180%;margin-left:-20%">
                                                    <div class="modal-header">
                                                        <h5 class="modal-title" id="exampleModalLabel">Create Employee</h5>
                                                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                            <span aria-hidden="true">&times;</span>
                                                        </button>
                                                    </div>
                                                    <div class="modal-body">
                                                        <form class="form-horizontal" @submit.prevent="AddConfiguration">
                                                            <div class="card-body" style="margin-left:50px;">
                                                                <div class="form-group row">
                                                                    <label for="name" class="col-sm-2 col-form-label">Name   :</label>
                                                                    <div class="col-sm-10">
                                                                        <input type="text" class="form-control " id="name" placeholder="catehory name"
                                                                               name="name" v-model="form.name" :class="{ 'is-invalid': form.errors.has('name') }">
                                                                        <has-error :form="form" field="name"></has-error>
                                                                    </div>
                                                                </div>
                                                                <div class="form-group row">
                                                                    <label for="fathers_name" class="col-sm-2 col-form-label">fathers_name   :</label>
                                                                    <div class="col-sm-10">
                                                                        <input type="text" class="form-control " id="fathers_name" placeholder="fathers name"
                                                                               name="fathers_name" v-model="form.fathers_name" :class="{ 'is-invalid': form.errors.has('fathers_name') }">
                                                                        <has-error :form="form" field="fathers_name"></has-error>
                                                                    </div>
                                                                </div>
                                                                <div class="form-group row">
                                                                    <label for="mothers_name" class="col-sm-2 col-form-label">mothers_name   :</label>
                                                                    <div class="col-sm-10">
                                                                        <input type="text" class="form-control " id="mothers_name" placeholder="mothers name"
                                                                               name="mothers_name" v-model="form.mothers_name" :class="{ 'is-invalid': form.errors.has('mothers_name') }">
                                                                        <has-error :form="form" field="mothers_name"></has-error>
                                                                    </div>
                                                                </div>




                                                                <div class="form-group row">
                                                                    <label  class="col-sm-2 col-form-label">Gender :</label>
                                                                    <div class="col-sm-6" style="margin-top: 6px;">
                                                                        <!-- radio -->
                                                                        <div class="form-group clearfix">
                                                                            <div class="icheck-primary d-inline">
                                                                                <input type="radio" name="gender" id="active" value="male"  v-model="form.gender">
                                                                                <label for="active">  Male</label>
                                                                            </div>
                                                                            <div class="icheck-success d-inline">
                                                                                <input type="radio" name="gender" id="inactive" value="female"  v-model="form.gender">
                                                                                <label for="inactive">  Female </label>
                                                                            </div>
                                                                            <div class="icheck-danger d-inline">
                                                                                <input type="radio" name="gender" id="others" value="others"  v-model="form.gender">
                                                                                <label for="others">  Others </label>
                                                                            </div>

                                                                            <span :class="{ 'is-invalid': form.errors.has('gender') }"></span>
                                                                            <has-error :form="form" field="gender"></has-error>
                                                                        </div>
                                                                    </div>
                                                                </div>

                                                                <div class="form-group row">
                                                                    <label for="religion" class="col-sm-2 col-form-label">Religion   :</label>
                                                                    <div class="col-sm-10">
                                                                        <select id="religion"  class="form-control" v-model="form.religion" :class="{ 'is-invalid': form.errors.has('religion') }">
                                                                            <option  value=" "> Select </option>
                                                                            <option  value="islam">Islam</option>
                                                                            <option  value="hinduism">Hinduism</option>
                                                                            <option  value="christianity">Christianity</option>
                                                                            <option  value="buddhism">Buddhism</option>
                                                                            <option  value="others">Others</option>
                                                                        </select>
                                                                        <has-error :form="form" field="religion"></has-error>
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
    name: "EmployeeInformation",
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
.form-control{
    width: 50%;
}
</style>
