<template>
    <div>
        <section class="content">

            <!-- Default box -->
            <div class="card" style="margin-top: -20px;">
                <div class="card-header">
                    <h3 class="card-title">Sub District</h3>

                    <div class="card-tools">
                        <button type="button" class="btn btn-tool" data-card-widget="collapse" data-toggle="tooltip" title="Collapse">
                            <i class="fas fa-minus"></i></button>
                        <button type="button" class="btn btn-tool" data-card-widget="remove" data-toggle="tooltip" title="Remove">
                            <i class="fas fa-times"></i></button>
                    </div>
                </div>

                <div class="card-body" style="display: block;">

                    <div class="card">
                        <div class="card-body">
                            <div class="card">

                                <section class="content" >
                                    <div class="container-fluid">
                                        <div class="row" >
                                            <div class="col-12 ">


                                                <div class="card" style="margin-top:25px;margin-bottom: 30px;">
                                                    <div class="card-header" style="background-color: #01ff70;
                                        margin-left: 20px;margin-right: 20px;margin-top:20px;} ">
                                                        <h3 class="card-title "> Sub District List</h3>
                                                        <div class="card-tools">
                                                            <router-link to="addsubdistrict" class="btn btn-block btn-outline-secondary">Add Sub District</router-link>

                                                        </div>
                                                    </div>
                                                    <!-- /.card-header -->
                                                    <div class="card-body"  style="margin-top: -20px; ">
                                                        <table id="example1" class="table table-bordered table-striped">
                                                            <thead style="background-color:azure">
                                                            <tr align="center">

                                                                <th>
                                                                    <div class="icheck-danger d-inline">
                                                                        <input type="checkbox" :disabled="emptyData()" id="checkboxDanger1" @click="Select" v-model="Allselected">
                                                                        <label  for="checkboxDanger1"></label>
                                                                    </div>
                                                                </th>

                                                                <th style="width:49px;">SL</th>

                                                                <th>Name</th>
                                                                <th>Time</th>
                                                                <th>Status</th>
                                                                <th>Action</th>
                                                            </tr>
                                                            </thead>
                                                            <tbody>

                                                            <tr v-for="(Subdistrict,i) in RetrieveSubdistrict">
                                                                <td style="text-align: center">
                                                                    <input type="checkbox" :value="Subdistrict.id" v-model="selected" style="margin-left:-5px;margin-top:12px;">
                                                                </td>


                                                                <td style="text-align: center">{{++i}}</td>
                                                                <td style="text-align: center">{{ Subdistrict.name }}</td>
                                                                <td style="text-align: center">{{ Subdistrict.created_at | time }}</td>
                                                                <td><span class="badge" style="font-size:17px;font-family:none;padding: 10px;margin-left:20px;
                                                                            width:100px;text-align:center;border-radius:18px;" :class="StatusColore(Subdistrict.status)">
                                                                            {{ StatusAction(Subdistrict.status) }}</span></td>

                                                                <td style="text-align: center">

                                                                    <a href="#"<i class="fas" :class="StatusIcon(Subdistrict.status)"></i></a>

                                                                    <!--<a href="#" class="btn btn-info"><i class="fas fa-eye"></i></a>-->

                                                                    <router-link :to="`/updatesubdistrict/${Subdistrict.name}`" class="btn btn-primary"><i class="fas fa-edit"></i></router-link>

                                                                    <button type="button" class="btn btn-danger" @click="remove(Subdistrict.id)"><i class="fas fa-trash"></i></button>

                                                                </td>


                                                            </tr>
                                                            </tbody>
                                                            <tfoot>
                                                            <tr align="center">
                                                                <th>
                                                                    <div class="icheck-danger d-inline">
                                                                        <input type="checkbox" :disabled="emptyData()" id="checkboxDanger1" @click="Select" v-model="Allselected">
                                                                        <label  for="checkboxDanger1"></label>
                                                                    </div>
                                                                </th>

                                                                <th style="width:100px;">SL</th>
                                                                <th>Name</th>
                                                                <th>Time</th>
                                                                <th>Status</th>
                                                                <th>Action</th>

                                                            </tr>
                                                            </tfoot>
                                                            <tr v-if="emptyData()">
                                                                <td colspan="7">
                                                                    <h1 class="text-center text-danger">Data Not Aviable Able</h1>
                                                                </td>
                                                            </tr>
                                                        </table>
                                                        <tr v-if="!emptyData()">
                                                            <td colspan="7">
                                                                <div class="margin">
                                                                    <div class="btn-group">

                                                                        <button type="button" :disabled="!IsSelected" class="btn btn-info dropdown-toggle dropdown-hover dropdown-icon" data-toggle="dropdown"> Action

                                                                            <div class="dropdown-menu" role="menu">

                                                                                <button @click="changeStatus(selected,1)" class="dropdown-item" style="font-size: 22px; padding: 15px; margin-left: 9px; width: 140px; text-align: center;
                                                                     font-family: monospace;border-radius: 32px; background:darkgreen;color: cyan;">Active</button>
                                                                                <div class="dropdown-divider"></div>
                                                                                <button @click="changeStatus(selected,0)" class="dropdown-item" style="font-size: 22px; padding: 15px; margin-left: 9px; width: 140px; text-align: center;
                                                                    font-family: monospace;border-radius: 32px; background:black;color: cyan;" >In Active</button>
                                                                                <div class="dropdown-divider"></div>
                                                                                <button @click="RemoveItem(selected)" class="dropdown-item" style="font-size: 22px; padding: 15px; margin-left: 9px; width: 140px; text-align: center;
                                                                     font-family: monospace;border-radius: 32px; background:red ;color: cyan;">Delete</button>
                                                                            </div>
                                                                        </button>
                                                                    </div>
                                                                </div>
                                                            </td>
                                                        </tr>
                                                    </div>
                                                    <!-- /.card-body -->

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


                <!-- /.card-body -->
                <div class="card-footer" style="display: block;">
                    Sub District
                </div>
                <!-- /.card-footer-->
            </div>
            <!-- /.card -->

        </section>
    </div>
</template>

<script>
export default {
    name: "AllSubdistrict",

    data: function () {
        return{
            selected:[],
            IsSelected:false,
            Allselected:false
        }
    },


    mounted(){
        this.$store.dispatch("GetSubdistrict");
    },
    watch:{
        selected: function (Selected) {
            this. IsSelected = (Selected.length > 0);
            this.Allselected = (Selected.length === this.RetrieveSubdistrict.length);

        }
    },
    computed:{
        RetrieveSubdistrict(){
            return this.$store.getters.Subdistrict;
        }
    },

    methods: {
        StatusAction: function (status) {
            let data = {0: "In Active", 1: "Active"}
            return data[status];
        },
        StatusColore: function (status) {
            let data = {0: "btn btn-danger", 1: "btn btn-success "}
            return data[status];
        },
        StatusIcon: function (status) {
            let data = {0: "btn btn-success fa-thumbs-down", 1: "btn btn-danger fa-thumbs-up"}
            return data[status];
        },


        remove: function (id){
            this.Confirm(() =>{
                axios.get("DeleteSubdistrict/" + id).then((response) => {
                    this.$store.dispatch("GetSubdistrict");
                    Swal.fire({
                        position: 'top-end',
                        icon: 'success',
                        title: 'Data has been successfully deleted',
                        showConfirmButton: false,
                        timer: 1500
                    });

                }).catch((error) =>{
                    //console.log(error)
                })
            });

        },

        emptyData(){
            return (this.RetrieveSubdistrict.length < 1);
        },

        Select: function (event) {
            if(event.target.checked === false){
                this.selected = [];
            }else {
                this.RetrieveSubdistrict.forEach((Subdistrict)=>{
                    if(this.selected.indexOf(Subdistrict.id) === -1 ){
                        this.selected.push(Subdistrict.id);
                    }


                });
            }


        },
        RemoveItem: function (selected) {
            let this_ = this;
            this.Confirm(() =>{
                axios.post("/selectedSubdistrict/removeitems" ,{ SubdistrictData: selected }).then((response) => {

                    this_.selected = [];
                    this_.IsSelected = false;
                    this_.Allselected =false;

                    this.$store.dispatch("GetSubdistrict");

                    Swal.fire({
                        position: 'top-end',
                        icon: 'success',
                        title: (response.data.TotalDelete + '  Subdistrict items  has been deleted successfully'),
                        showConfirmButton: false,
                        timer: 1000
                    });

                    //console.log(response.data.TotalDelete);
                }).catch((error)=> {

                });

            })
        },

        changeStatus: function (selected,status) {
            let msg = status === 1 ? "Activated" : "Inactivated";
            this.Confirm(() =>{
                axios.post("/Subdistrict/changestatus" ,{ SubdistrictData: selected, status: status }).then((response) => {

                    this.selected = [];
                    this.IsSelected = false;
                    this.Allselected =false;
                    this.$store.dispatch("GetSubdistrict");
                    Swal.fire({
                        position: 'top-end',
                        icon: 'success',
                        title: (response.data.TotalCount + '  Subdistrict have been successfully '+msg),
                        showConfirmButton: false,
                        timer: 1500
                    });

                }).catch((error)=> {

                });
            })
        },





    }



}
</script>

<style scoped>

</style>
