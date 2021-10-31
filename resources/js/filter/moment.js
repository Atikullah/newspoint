import moment from "moment";
import Vue from "vue";

Vue.filter('time',(Time)=>{
    return moment(Time).format("MMM Do YY");
});

