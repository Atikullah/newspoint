<template>
    <div>
        <section class="content">

            <!-- Default box -->
            <div class="card" style="margin-top: -20px;">
                <div class="card-header">
                    <h3 class="card-title">Opinion</h3>

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
                                                        <h3 class="card-title "> Opinion List</h3>
                                                        <div class="card-tools">
                                                            <router-link to="addopinion" class="btn btn-block btn-outline-secondary">Add Opinion </router-link>

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

                                                            <tr v-for="(Opinion,i) in RetrieveOpinion">
                                                                <td style="text-align: center">
                                                                    <input type="checkbox" :value="Opinion.id" v-model="selected" style="margin-left:-5px;margin-top:12px;">
                                                                </td>


                                                                <td style="text-align: center">{{++i}}</td>
                                                                <td style="text-align: center">{{ Opinion.name }}</td>
                                                                <td style="text-align: center">{{ Opinion.created_at | time }}</td>
                                                                <td><span class="badge" style="font-size:17px;font-family:none;padding: 10px;margin-left:20px;
                                                                            width:100px;text-align:center;border-radius:18px;" :class="StatusColore(Opinion.status)">
                                                                            {{ StatusAction(Opinion.status) }}</span></td>

                                                                <td style="text-align: center">

                                                                    <a href="#"<i class="fas" :class="StatusIcon(Opinion.status)"></i></a>

                                                                    <!--<a href="#" class="btn btn-info"><i class="fas fa-eye"></i></a>-->

                                                                    <router-link :to="`/updateopinion/${Opinion.name}`" class="btn btn-primary"><i class="fas fa-edit"></i></router-link>

                                                                    <button type="button" class="btn btn-danger" @click="remove(Opinion.id)"><i class="fas fa-trash"></i></button>

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
                    Opinion
                </div>
                <!-- /.card-footer-->
            </div>
            <!-- /.card -->

        </section>
    </div>
</template>

<script>
export default {
    name: "AllOpinion",

    data: function () {
        return{
            selected:[],
            IsSelected:false,
            Allselected:false
        }
    },


    mounted(){
        this.$store.dispatch("GetOpinion");
    },
    watch:{
        selected: function (Selected) {
            this. IsSelected = (Selected.length > 0);
            this.Allselected = (Selected.length === this.RetrieveOpinion.length);

        }
    },
    computed:{
        RetrieveOpinion(){
            return this.$store.getters.Opinion;
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
                axios.get("DeleteOpinion/" + id).then((response) => {
                    this.$store.dispatch("GetOpinion");
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
            return (this.RetrieveOpinion.length < 1);
        },

        Select: function (event) {
            if(event.target.checked === false){
                this.selected = [];
            }else {
                this.RetrieveOpinion.forEach((Opinion)=>{
                    if(this.selected.indexOf(Opinion.id) === -1 ){
                        this.selected.push(Opinion.id);
                    }
                });
            }


        },
        RemoveItem: function (selected) {
            let this_ = this;
            this.Confirm(() =>{
                axios.post("/selectedOpinion/removeitems" ,{ OpinionData: selected }).then((response) => {

                    this_.selected = [];
                    this_.IsSelected = false;
                    this_.Allselected =false;

                    this.$store.dispatch("GetOpinion");

                    Swal.fire({
                        position: 'top-end',
                        icon: 'success',
                        title: (response.data.TotalDelete + '  Opinion items  has been deleted successfully'),
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
                axios.post("/Opinion/changestatus" ,{ OpinionData: selected, status: status }).then((response) => {

                    this.selected = [];
                    this.IsSelected = false;
                    this.Allselected =false;
                    this.$store.dispatch("GetOpinion");
                    Swal.fire({
                        position: 'top-end',
                        icon: 'success',
                        title: (response.data.TotalCount + '  Opinion have been successfully '+msg),
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
