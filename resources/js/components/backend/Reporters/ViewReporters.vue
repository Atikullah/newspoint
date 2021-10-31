
<template>
    <div>
        <section class="content">

            <!-- Default box -->
            <div class="card" style="margin-top: -20px;">
                <div class="card-header">
                    <h3 class="card-title">Add Reporters</h3>

                    <div class="card-tools">
                        <button type="button" class="btn btn-tool" data-card-widget="collapse" data-toggle="tooltip" title="Collapse">
                            <i class="fas fa-minus"></i></button>
                        <button type="button" class="btn btn-tool" data-card-widget="remove" data-toggle="tooltip" title="Remove">
                            <i class="fas fa-times"></i></button>
                    </div>
                </div>


                <!-- Main content -->
                <section class="content" style="margin-top: 20px;">
                    <div class="container-fluid">
                        <form class="form-horizontal" @submit.prevent="UpdateReporter">
                            <div class="row">
                            <div class="col-md-3">

                                <div class="card card-primary card-outline">
                                    <div class="card-body box-profile">
                                        <div class="text-center">
                                            <img class="profile-user-img img-fluid img-circle" :src="imagelink(form.image)" alt="User profile picture" style="height: 200px;width: 200px;}">
                                        </div>


                                        <div class="form-group row">
                                            <label >name :</label>

                                                <span class="form-control" id="name"
                                                      name="name" v-model="form.name" ></span>


                                        </div>

                                        <p class="text-muted text-center">Software Engineer</p>

                                        <ul class="list-group list-group-unbordered mb-3">
                                            <li class="list-group-item">
                                                <b>Followers</b> <a class="float-right">1,322</a>
                                            </li>
                                            <li class="list-group-item">
                                                <b>Following</b> <a class="float-right">543</a>
                                            </li>
                                            <li class="list-group-item">
                                                <b>Friends</b> <a class="float-right">13,287</a>
                                            </li>
                                        </ul>

                                        <a href="#" class="btn btn-primary btn-block"><b>Follow</b></a>
                                    </div>
                                    <!-- /.card-body -->
                                  </div>
                                <!-- /.card -->

                                <!-- About Me Box -->
                                <div class="card card-primary">
                                    <div class="card-header">
                                        <h3 class="card-title">About Me</h3>
                                    </div>
                                    <!-- /.card-header -->
                                    <div class="card-body">
                                        <strong><i class="fas fa-book mr-1"></i> Education</strong>

                                        <p class="text-muted">
                                            B.S. in Computer Science from the University of Tennessee at Knoxville
                                        </p>

                                        <hr>

                                        <strong><i class="fas fa-map-marker-alt mr-1"></i> Location</strong>

                                        <p class="text-muted">Malibu, California</p>

                                        <hr>

                                        <strong><i class="fas fa-pencil-alt mr-1"></i> Skills</strong>

                                        <p class="text-muted">
                                            <span class="tag tag-danger">UI Design</span>
                                            <span class="tag tag-success">Coding</span>
                                            <span class="tag tag-info">Javascript</span>
                                            <span class="tag tag-warning">PHP</span>
                                            <span class="tag tag-primary">Node.js</span>
                                        </p>

                                        <hr>

                                        <strong><i class="far fa-file-alt mr-1"></i> Notes</strong>

                                        <p class="text-muted">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Etiam fermentum enim neque.</p>
                                    </div>
                                    <!-- /.card-body -->
                                </div>
                                <!-- /.card -->
                            </div>
                            <!-- /.col -->
                            <div class="col-md-9">
                                <div class="card">
                                    <div class="card-header p-2">
                                        <ul class="nav nav-pills">
                                            <li class="nav-item"><a class="nav-link active" href="#activity" data-toggle="tab">Activity</a></li>
                                            <li class="nav-item"><a class="nav-link" href="#timeline" data-toggle="tab">Timeline</a></li>
                                            <li class="nav-item"><a class="nav-link" href="#settings" data-toggle="tab">Settings</a></li>
                                        </ul>
                                    </div><!-- /.card-header -->
                                    <div class="card-body">
                                        <div class="tab-content">
                                            <div class="active tab-pane" id="activity">

                                            </div>
                                            <!-- /.tab-pane -->
                                            <div class="tab-pane" id="timeline">
                                                <!-- The timeline -->

                                            </div>
                                            <!-- /.tab-pane -->

                                            <div class="tab-pane" id="settings">

                                            </div>
                                            <!-- /.tab-pane -->
                                        </div>
                                        <!-- /.tab-content -->
                                    </div><!-- /.card-body -->
                                </div>
                                <!-- /.nav-tabs-custom -->
                            </div>
                            <!-- /.col -->
                        </div>
                        </form>
                        <!-- /.row -->
                    </div><!-- /.container-fluid -->
                </section>



                <!-- /.card-body -->
                <div class="card-footer" style="display: block;">
                    View Reporters
                </div>
                <!-- /.card-footer-->
            </div>
            <!-- /.card -->

        </section>
    </div>
</template>


<script>
import {Form} from "vform";
import ClassicEditor from "@ckeditor/ckeditor5-build-classic";

export default {
name: "ViewReporters",
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
        // UpdateReporter: function (){
        //     let this_ = this;
        //     this.form.post('/updatereporter/'+ this.$route.params.name).then((response) => {
        //
        //         Toast.fire({
        //             icon: 'success',
        //             title: 'Data Update Successfully'
        //         });
        //
        //         this_.$router.push("/reporter");
        //     })
        //
        // },
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

</style>
