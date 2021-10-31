<template>
    <div>
        <section class="content">

            <!-- Default box -->
            <div class="card" style="margin-top: -20px;">
                <div class="card-header">
                    <h3 class="card-title">Update Reporter</h3>

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
                                                        <h3 class="card-title ">Update Reporter </h3>
                                                        <div class="card-tools">
                                                            <router-link to="/reporter" class="btn btn-block btn-outline-secondary">Reporter List</router-link>
                                                        </div>
                                                    </div>
                                                    <!-- /.card-header -->
                                                    <!-- form start -->
                                                    <form class="form-horizontal" @submit.prevent="UpdateReporter">
                                                        <div class="card-body">
                                                            <div class="form-group row">
                                                                <label for="name" class="col-sm-2 col-form-label"> Name : <span id="require">*</span></label>

                                                            </div>
                                                            <input type="hidden" v-model="form.id">

                                                            <div claaaaass="form-group row">
                                                                <label for="designation" class="col-sm-2 col-form-label">Designation : <span id="require">*</span></label>
                                                                <div class="col-sm-10">
                                                                    <input type="text" class="form-control " id="designation" placeholder="Enter Designation "
                                                                           name="designation" v-model="form.designation" :class="{ 'is-invalid': form.errors.has('designation') }">
                                                                    <has-error :form="form" field="designation"></has-error>
                                                                </div>
                                                            </div>

                                                            <div class="form-group row">
                                                                <label for="district_id" class="col-sm-2 col-form-label">District : <span id="require">*</span></label>
                                                                <div class="col-sm-10">
                                                                    <select id="district_id" class="form-control"  v-model="form.district_id" :class="{ 'is-invalid': form.errors.has('district_id') }">>
                                                                        <option value=" ">Select District</option>
                                                                        <option :value="district.id" v-for=" district in RetrieveDistrict ">{{ district.name }}</option>

                                                                    </select>

                                                                    <has-error :form="form" field="district_id"></has-error>
                                                                </div>
                                                            </div>


                                                            <div class="form-group row">
                                                                <label for="subdistrict_id" class="col-sm-2 col-form-label">Sub District : <span id="require">*</span></label>
                                                                <div class="col-sm-10" >
                                                                    <select id="subdistrict_id"  class="form-control" v-model="form.subdistrict_id" :class="{ 'is-invalid': form.errors.has('subdistrict_id') }">>
                                                                        <option  value=" ">Select Sub District</option>
                                                                        <option  :value="subdistrict.id" v-for=" subdistrict in RetrieveSubdistrict ">{{ subdistrict.name }}</option>

                                                                    </select>

                                                                    <has-error :form="form" field="subdistrict_id"></has-error>
                                                                </div>
                                                            </div>


                                                            <div class="form-group row">
                                                                <label  class="col-sm-2 col-form-label">Gender : <span id="require">*</span></label>
                                                                <div class="col-sm-6" style="margin-top: 6px;">
                                                                    <!-- radio -->
                                                                    <div class="form-group clearfix">
                                                                        <div class="icheck-danger d-inline">
                                                                            <input type="radio" name="gender" id="male" value="1"  v-model="form.gender">
                                                                            <label for="male">  Male</label>
                                                                        </div>
                                                                        <div class="icheck-danger d-inline">
                                                                            <input type="radio" name="gender" id="female" value="0"  v-model="form.gender">
                                                                            <label for="female">  Female</label>
                                                                        </div>
                                                                        <div class="icheck-danger d-inline">
                                                                            <input type="radio" name="gender" id="transgender" value="2"  v-model="form.gender">
                                                                            <label for="transgender">  Transgender</label>
                                                                        </div>
                                                                        <span :class="{ 'is-invalid': form.errors.has('gender') }"></span>
                                                                        <has-error :form="form" field="gender"></has-error>
                                                                    </div>
                                                                </div>

                                                            </div>

                                                            <div class="form-group row">
                                                                <label for="email" class="col-sm-2 col-form-label">Email : <span id="require">*</span></label>
                                                                <div class="col-sm-10">
                                                                    <input type="email" class="form-control " id="email" placeholder="Enter Email "
                                                                           name="email" v-model="form.email" :class="{ 'is-invalid': form.errors.has('email') }">
                                                                    <has-error :form="form" field="email"></has-error>
                                                                </div>
                                                            </div>

                                                            <div class="form-group row">
                                                                <label for="contact" class="col-sm-2 col-form-label">Number : <span id="require">*</span></label>
                                                                <div class="col-sm-10">
                                                                    <input type="number" class="form-control " id="contact" placeholder="Enter Number "
                                                                           name="contact" v-model="form.contact" :class="{ 'is-invalid': form.errors.has('contact') }">
                                                                    <has-error :form="form" field="contact"></has-error>
                                                                </div>
                                                            </div>

                                                            <div class="form-group row">
                                                                <label for="fb" class="col-sm-2 col-form-label">Facebook Id  : <span id="require">*</span></label>
                                                                <div class="col-sm-10">
                                                                    <input type="text" class="form-control" id="fb" placeholder="Enter Facebook Id Link "
                                                                           name="fb" v-model="form.fb" :class="{ 'is-invalid': form.errors.has('fb') }">
                                                                    <has-error :form="form" field="fb"></has-error>
                                                                </div>
                                                            </div>
                                                            <div class="form-group row">
                                                                <label for="skype" class="col-sm-2 col-form-label">Skype Account :</label>
                                                                <div class="col-sm-10">
                                                                    <input type="text" class="form-control" id="skype" placeholder="Enter Skype Account Number "
                                                                           name="skype" v-model="form.skype" >

                                                                </div>
                                                            </div>

                                                            <div class="form-group row">
                                                            <label for="instagram" class="col-sm-2 col-form-label">Instagram Id :</label>
                                                            <div class="col-sm-10">
                                                                <input type="text" class="form-control" id="instagram" placeholder="Enter Instagram Account Id "
                                                                       name="instagram" v-model="form.instagram" >

                                                            </div>
                                                        </div>

                                                            <div class="form-group row">
                                                                <label for="linkedin" class="col-sm-2 col-form-label">Linkedin Id :</label>
                                                                <div class="col-sm-10">
                                                                    <input type="text" class="form-control" id="linkedin" placeholder="Enter Linkedin Account Id "
                                                                           name="linkedin" v-model="form.linkedin" >

                                                                </div>
                                                            </div>

                                                            <div class="form-group row">
                                                                <label  class="col-sm-2 col-form-label">Address  :</label>
                                                                <div class="col-sm-10">
                                                                    <ckeditor :editor="editor" v-model="form.address" :config="editorConfig"></ckeditor>
                                                                </div>
                                                            </div>

                                                            <div class="form-group row">
                                                                <label  class="col-sm-2 col-form-label">About :</label>
                                                                <div class="col-sm-10">
                                                                    <ckeditor :editor="editor" v-model="form.about" :config="editorConfig"></ckeditor>
                                                                </div>
                                                            </div>

                                                            <div class="form-group row">
                                                                <label class="col-sm-2 col-form-label">Achievement :</label>
                                                                <div class="col-sm-10">
                                                                    <ckeditor :editor="editor" v-model="form.achievement" :config="editorConfig"></ckeditor>
                                                                </div>
                                                            </div>

                                                            <div class="custom-file row">
                                                                <label  class="col-sm-2 col-form-label">Image : <span id="require">*</span></label>
                                                                <div class="col-sm-10" style="float: right;margin-right: -15px;width: 674px;">
                                                                    <input type="file" name="image"  id="custom-file"  @change="imagePreview($event)">
                                                                    <label class="custom-file-label" for="custom-file">Choose  file</label>
                                                                </div>
                                                                <div style="width: 400px;">
                                                                    <img id="img_preview" class=" img-thumbnail" :src="imagelink(form.image)" alt="">
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
                                                            <button type="submit" :disabled="form.busy" class="btn btn-info">Save</button>
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
                    Update Reporter
                </div>
                <!-- /.card-footer-->
            </div>
            <!-- /.card -->

        </section>
    </div>
</template>


<script>
import {Form} from "vform";
import ClassicEditor from '@ckeditor/ckeditor5-build-classic';
export default {
    name: "UpdateReporters",
    data:function (){
        return{
            form : new Form({
                id             : null,
                name           : null,
                designation    : null,
                district_id    : ' ',
                subdistrict_id : ' ',
                gender         : null,
                email          : null,
                contact        : null,
                fb             : null,
                skype          : null,
                instagram      : null,
                linkedin       : null,
                address        : null,
                about          : null,
                achievement    : null,
                image          : null,
                status         : 0,
                //busy : true ,

            }),

            editor: ClassicEditor,
            editorConfig: {
                // The configuration of the editor.
            }

        }
    },
    mounted(){
        this.$store.dispatch("GetActiveDistrict");
        this.$store.dispatch("GetActiveSubdistrict");
        this.ViewReporter();
    },

    computed:{
        RetrieveDistrict(){
            return this.$store.getters.District;
        },
        RetrieveSubdistrict(){
            return this.$store.getters.Subdistrict;
        }
    },


    methods:{
        UpdateReporter: function (){
            let this_ = this;
            this.form.post('/updatereporter/'+ this.$route.params.name).then((response) => {

                Toast.fire({
                    icon: 'success',
                    title: 'Data Update Successfully'
                });

                this_.$router.push("/reporter");
            })

        },
        ViewReporter: function () {
            const this_ = this;
            axios.get("/viewreporter/" + this.$route.params.name).then((response) =>{
                this_.form.fill(response.data.showReporter);
                //console.log(response.data.showinter);

            }).catch(()=>{

            })

        }

    },

}
</script>

<style scoped>
#require{
    color: red;
}
#img_preview{
    height:160px;
    width: 300px;
    margin: 10px;
    margin-left: 489px;

    position: relative;
    animation: mymove 5s infinite;
    animation-timing-function: linear;

}

@keyframes mymove {
    from {right: 0px;}
    to {right: 175px;}

}
</style>
