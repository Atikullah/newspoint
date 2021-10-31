
import adminhome     from "../components/backend/home";
//categories
import addcategory   from "../components/backend/categories/AddCategory";
import listcategory  from "../components/backend/categories/AllCategory";
import updatecategories  from "../components/backend/categories/UpdateCategories";
//sub_categories  international
import international  from "../components/backend/categories/sub_categories/international/All_International";
import AddInternational  from "../components/backend/categories/sub_categories/international/AddInternational";
import updateinternational  from "../components/backend/categories/sub_categories/international/UpdateInternational";
//sub_categories  bangladesh
import bangladesh  from "../components/backend/categories/sub_categories/bangladesh/AllBangladesh";
import AddBangladesh  from "../components/backend/categories/sub_categories/bangladesh/AddBangladesh";
import UpdateBangladesh  from "../components/backend/categories/sub_categories/bangladesh/UpdateBangladesh";
//sub_categories  jobs

import jobs  from "../components/backend/categories/sub_categories/jobs/AllJobs";
import addjobs  from "../components/backend/categories/sub_categories/jobs/AddJobs";
import updatejobs  from "../components/backend/categories/sub_categories/jobs/UpdateJobs";
//sub_categories  district

import district  from "../components/backend/categories/sub_categories/District/AllDistrict";
import adddistrict  from "../components/backend/categories/sub_categories/District/AddDistrict";
import updatedistrict  from "../components/backend/categories/sub_categories/District/UpdateDistrict";
//sub_categories  Subdistrict
import subdistrict  from "../components/backend/categories/sub_categories/subdistrict/AllSubdistrict";
import addsubdistrict  from "../components/backend/categories/sub_categories/subdistrict/AddSubdistict";
import updatesubdistrict  from "../components/backend/categories/sub_categories/subdistrict/UpdateSubdistrict";
//sub_categories  jobs
import business  from "../components/backend/categories/sub_categories/Business/AllBusiness";
import addbusiness  from "../components/backend/categories/sub_categories/Business/AddBusiness";
import updatebusiness  from "../components/backend/categories/sub_categories/Business/UpdateBusiness";
//sub_categories  Sports
import sports  from "../components/backend/categories/sub_categories/Sports/AllSports";
import addsports  from "../components/backend/categories/sub_categories/Sports/AddSports";
import updatesports  from "../components/backend/categories/sub_categories/Sports/UpdateSports";
//sub_categories  entertainment
import entertainment  from "../components/backend/categories/sub_categories/Entertainment/AllEntertainment";
import addentertainment  from "../components/backend/categories/sub_categories/Entertainment/AddEntertainment";
import updateentertainment  from "../components/backend/categories/sub_categories/Entertainment/UpdateEntertainment";
//sub_categories  Lifestyle
import lifestyle  from "../components/backend/categories/sub_categories/Lifestyle/AllLifestyle";
import addlifestyle  from "../components/backend/categories/sub_categories/Lifestyle/AddLifestyle";
import updatelifestyle  from "../components/backend/categories/sub_categories/Lifestyle/UpdateLifestyle";
//sub_categories  Health
import health  from "../components/backend/categories/sub_categories/Health/AllHealth";
import addhealth  from "../components/backend/categories/sub_categories/Health/AddHealth";
import updatehealth  from "../components/backend/categories/sub_categories/Health/UpdateHealth";
//sub_categories  Health
import religion  from "../components/backend/categories/sub_categories/Religion/AllReligion";
import addreligion  from "../components/backend/categories/sub_categories/Religion/AddReligion";
import updatereligion  from "../components/backend/categories/sub_categories/Religion/UpdateReligion";
//sub_categories  Science
import science  from "../components/backend/categories/sub_categories/Science/AllScience";
import addscience  from "../components/backend/categories/sub_categories/Science/AddScience";
import updatescience  from "../components/backend/categories/sub_categories/Science/UpdateScience";
//sub_categories Education
import education  from "../components/backend/categories/sub_categories/Education/AllEducation";
import addeducation  from "../components/backend/categories/sub_categories/Education/AddEducation";
import updateeducation  from "../components/backend/categories/sub_categories/Education/UpdateEducation";
//sub_categories Life
import life  from "../components/backend/categories/sub_categories/Life/AllLife";
import addlife  from "../components/backend/categories/sub_categories/Life/AddLife";
import updatelife  from "../components/backend/categories/sub_categories/Life/UpdateLife";
//sub_categories Expatriate
import expatriate  from "../components/backend/categories/sub_categories/Expatriate/AllExpatriate";
import addexpatriate  from "../components/backend/categories/sub_categories/Expatriate/AddExpatriate";
import updateexpatriate  from "../components/backend/categories/sub_categories/Expatriate/UpdateExpatriate";
//sub_categories Opinion
import opinion  from "../components/backend/categories/sub_categories/Opinion/AllOpinion";
import addopinion  from "../components/backend/categories/sub_categories/Opinion/AddOpinion";
import updateopinion  from "../components/backend/categories/sub_categories/Opinion/UpdateOpinion";
//sub_categories Photo
import photo  from "../components/backend/categories/sub_categories/Photo/AllPhoto";
import addphoto  from "../components/backend/categories/sub_categories/Photo/AddPhoto";
import updatephoto  from "../components/backend/categories/sub_categories/Photo/UpdatePhoto";

//sub_categories Video
import video  from "../components/backend/categories/sub_categories/Videos/AllVideo";
import addvideo  from "../components/backend/categories/sub_categories/Videos/AddVideo";
import updatevideo  from "../components/backend/categories/sub_categories/Videos/UpdateVideo";
//sub_categories Feature
import feature  from "../components/backend/categories/sub_categories/Feature/AllFeature";
import addfeature  from "../components/backend/categories/sub_categories/Feature/AddFeature";
import updatefeature  from "../components/backend/categories/sub_categories/Feature/UpdateFeature";
// Reporters
import reporter  from "../components/backend/Reporters/AllReporters";
import addreporter  from "../components/backend/Reporters/AddReporters";
import viewreporter  from "../components/backend/Reporters/ViewReporters";
import updatereporter  from "../components/backend/Reporters/UpdateReporters";


// software configuration

import general_config  from "../components/backend/configuration/GeneralConfig";
import employee_information  from "../components/backend/employee/EmployeeInformation";


export const routes = [
     { path: '/home', component: adminhome },
    // categories
     { path: '/addcategory',
       component: addcategory,
      meta: {dataUrl: 'addcategory', pageTitle: 'Add Category'},
     },
     { path: '/categorylist', component: listcategory },
     { path: '/updatecategories/:id', component: updatecategories },
        //sub_categories  internationals
    { path: '/international', component: international },
    { path: '/addCountry', component: AddInternational },
    { path: '/updateinternational/:name', component: updateinternational },
    //sub_categories  bangladesh
    { path: '/bangladesh', component: bangladesh },
    { path: '/addbangladesh', component: AddBangladesh },
    { path: '/updatebangladesh/:name', component: UpdateBangladesh },
    //sub_categories  jobs
    { path: '/jobs', component: jobs },
    { path: '/addjobs', component: addjobs },
    { path: '/updatejobs/:name', component: updatejobs },
    //sub_categories  district
    { path: '/district', component: district },
    { path: '/adddistrict', component: adddistrict },
    { path: '/updatedistrict/:name', component: updatedistrict },
    //sub_categories  Subdistrict
    { path: '/subdistrict', component: subdistrict },
    { path: '/addsubdistrict', component: addsubdistrict },
    { path: '/updatesubdistrict/:name', component: updatesubdistrict },

    //sub_categories  Business
    { path: '/business', component: business },
    { path: '/addbusiness', component: addbusiness },
    { path: '/updatebusiness/:name', component: updatebusiness },
    //sub_categories  Sports
    { path: '/sports', component: sports },
    { path: '/addsports', component: addsports },
    { path: '/updatesports/:name', component: updatesports },
//sub_categories  entertainment
    { path: '/entertainment', component: entertainment },
    { path: '/addentertainment', component: addentertainment },
    { path: '/updateentertainment/:name', component: updateentertainment },
//sub_categories  lifestyle
    { path: '/lifestyle', component: lifestyle },
    { path: '/addlifestyle', component: addlifestyle },
    { path: '/updatelifestyle/:name', component: updatelifestyle },
//sub_categories  health
    { path: '/health', component: health },
    { path: '/addhealth', component: addhealth },
    { path: '/updatehealth/:name', component: updatehealth },
//sub_categories  religion
    { path: '/religion', component: religion },
    { path: '/addreligion', component: addreligion },
    { path: '/updatereligion/:name', component: updatereligion },
//sub_categories  science
    { path: '/science', component: science },
    { path: '/addscience', component: addscience },
    { path: '/updatescience/:name', component: updatescience },
//sub_categories  education
    { path: '/education', component: education },
    { path: '/addeducation', component: addeducation },
    { path: '/updateeducation/:name', component: updateeducation },
//sub_categories  life
    { path: '/life', component: life },
    { path: '/addlife', component: addlife },
    { path: '/updatelife/:name', component: updatelife },
//sub_categories  expatriate
    { path: '/expatriate', component: expatriate },
    { path: '/addexpatriate', component: addexpatriate },
    { path: '/updateexpatriate/:name', component: updateexpatriate },
//sub_categories  opinion
    { path: '/opinion', component: opinion },
    { path: '/addopinion', component: addopinion },
    { path: '/updateopinion/:name', component: updateopinion },
//sub_categories  opinion
    { path: '/photo', component: photo },
    { path: '/addphoto', component: addphoto },
    { path: '/updatephoto/:name', component: updatephoto },
//sub_categories  video
    { path: '/video', component: video },
    { path: '/addvideo', component: addvideo },
    { path: '/updatevideo/:name', component: updatevideo },
//sub_categories  feature
    { path: '/feature', component: feature },
    { path: '/addfeature', component: addfeature },
    { path: '/updatefeature/:name', component: updatefeature },
//Reporters
    { path: '/reporter', component: reporter },
    { path: '/addreporter', component: addreporter },
    { path: '/viewreporter/:name', component: viewreporter },
    { path: '/updatereporter/:name', component: updatereporter },
// software configaration
    { path: '/general_config', component: general_config },

//Employee Information
    //{ path: '/employee_information', component: employee_information },
    {
        path: '/employee_information',
        component: employee_information,

        meta: {dataUrl: 'employee_info', pageTitle: 'Employee Information'},
    },

];
