export default {
    state: {
        CategoryData : [],
        InternationalData : [],
        BangladeshData : [],
        JobsData : [],
        DistrictData : [],
        SubdistrictData : [],
        BusinessData : [],
        SportsData : [],
        EntertainmentData : [],
        LifestyleData : [],
        HealthData : [],
        ReligionData : [],
        ScienceData : [],
        EducationData : [],
        LifeData : [],
        ExpatriateData : [],
        OpinionData : [],
        PhotoData : [],
        VideoData : [],
        FeatureData : [],
        ReporterData : [],
    },

    getters: {
        Categories(state){
                return state.CategoryData;
            },
        International(state){
            return state.InternationalData;
        },
        Bangladesh(state){
            return state.BangladeshData;
        },
        Jobs(state){
            return state.JobsData;
        },
        District(state){
            return state.DistrictData;
        },
        Subdistrict(state){
            return state.SubdistrictData;
        },
        Business(state){
            return state.BusinessData;
        },
        Sports(state){
            return state.SportsData;
        },
        Entertainment(state){
            return state.EntertainmentData;
        },
        Lifestyle(state){
            return state.LifestyleData;
        },
        Health(state){
            return state.HealthData;
        },
        Religion(state){
            return state.ReligionData;
        },
        Science(state){
            return state.ScienceData;
        },
        Education(state){
            return state.EducationData;
        },
        Life(state){
            return state.LifeData;
        },
        Expatriate(state){
            return state.ExpatriateData;
        },
        Opinion(state){
            return state.OpinionData;
        },
        Photo(state){
            return state.PhotoData;
        },
        Video(state){
            return state.VideoData;
        },
        Feature(state){
            return state.FeatureData;
        },
        Reporter(state){
            return state.ReporterData;
        },



    },
    actions:{
        GetCategories(Data){
           axios.get("getcategories").then((response) => {
               Data.commit("categoriesData",response.data.getCategories);
               //console.log(response.data.getCategories)

            }).catch((error) =>{
               //console.log(error)
            })
        },

        GetInternational(Data){
           axios.get("GetInternational").then((response) => {
               Data.commit("GetInternationalData",response.data.get_country);
               // console.log(response.data.get_country);
            }).catch((error) =>{

            })
        },
        GetBangladesh(Data){
            axios.get("GetBangladesh").then((response) => {
                Data.commit("GetBangladeshData",response.data.Get_Bangladesh);
                // console.log(response.data.get_country);
            }).catch((error) =>{

            })
        },
        GetJobs(Data){
            axios.get("GetJobs").then((response) => {
                Data.commit("GetJobsData",response.data.Get_Jobs);
                // console.log(response.data.get_country);
            }).catch((error) =>{

            })
        },

        GetDistrict(Data){
            axios.get("GetDistrict").then((response) => {
                Data.commit("GetDistrictData",response.data.Get_District);
                // console.log(response.data.get_country);
            }).catch((error) =>{

            })
        },
        GetActiveDistrict(Data){
            axios.get("GetActiveDistrict").then((response) => {
                Data.commit("GetDistrictData",response.data.GetActiveDistrict);
                // console.log(response.data.get_country);
            }).catch((error) =>{

            })
        },
        GetSubdistrict(Data){
            axios.get("GetSubdistrict").then((response) => {
                Data.commit("GetSubdistrictData",response.data.Get_Subdistrict);
                // console.log(response.data.get_country);
            }).catch((error) =>{

            })
        },
        GetActiveSubdistrict(Data){
            axios.get("GetActiveSubdistrict").then((response) => {
                Data.commit("GetSubdistrictData",response.data.Get_ActiveSubdistrict);
                // console.log(response.data.get_country);
            }).catch((error) =>{

            })
        },
        GetBusiness(Data){
            axios.get("GetBusiness").then((response) => {
                Data.commit("GetBusinessData",response.data.Get_Business);
                // console.log(response.data.get_country);
            }).catch((error) =>{

            })
        },
        GetSports(Data){
            axios.get("GetSports").then((response) => {
                Data.commit("GetSportsData",response.data.Get_Sports);
                // console.log(response.data.get_country);
            }).catch((error) =>{

            })
        },
        GetEntertainment(Data){
            axios.get("GetEntertainment").then((response) => {
                Data.commit("GetEntertainmentData",response.data.Get_Entertainment);
                // console.log(response.data.get_country);
            }).catch((error) =>{

            })
        },
        GetLifestyle(Data){
            axios.get("GetLifestyle").then((response) => {
                Data.commit("GetLifestyleData",response.data.Get_Lifestyle);
                // console.log(response.data.get_country);
            }).catch((error) =>{

            })
        },
        GetHealth(Data){
            axios.get("GetHealth").then((response) => {
                Data.commit("GetHealthData",response.data.Get_Health);
                // console.log(response.data.get_country);
            }).catch((error) =>{

            })
        },
        GetReligion(Data){
            axios.get("GetReligion").then((response) => {
                Data.commit("GetReligionData",response.data.Get_Religion);
                // console.log(response.data.get_country);
            }).catch((error) =>{

            })
        },
        GetScience(Data){
            axios.get("GetScience").then((response) => {
                Data.commit("GetScienceData",response.data.Get_Science);
                // console.log(response.data.get_country);
            }).catch((error) =>{

            })
        },
        GetEducation(Data){
            axios.get("GetEducation").then((response) => {
                Data.commit("GetEducationData",response.data.Get_Education);
                // console.log(response.data.get_country);
            }).catch((error) =>{

            })
        },
        GetLife(Data){
            axios.get("GetLife").then((response) => {
                Data.commit("GetLifeData",response.data.Get_Life);
                // console.log(response.data.get_country);
            }).catch((error) =>{

            })
        },
        GetExpatriate(Data){
            axios.get("GetExpatriate").then((response) => {
                Data.commit("GetExpatriateData",response.data.Get_Expatriate);
                // console.log(response.data.get_country);
            }).catch((error) =>{

            })
        },
        GetOpinion(Data){
            axios.get("GetOpinion").then((response) => {
                Data.commit("GetOpinionData",response.data.Get_Opinion);
                // console.log(response.data.get_country);
            }).catch((error) =>{

            })
        },
        GetPhoto(Data){
            axios.get("GetPhoto").then((response) => {
                Data.commit("GetPhotoData",response.data.Get_Photo);
                // console.log(response.data.get_country);
            }).catch((error) =>{

            })
        },
        GetVideo(Data){
            axios.get("GetVideo").then((response) => {
                Data.commit("GetVideoData",response.data.Get_Video);
                // console.log(response.data.get_country);
            }).catch((error) =>{

            })
        },
        GetFeature(Data){
            axios.get("GetFeature").then((response) => {
                Data.commit("GetFeatureData",response.data.Get_Feature);
                // console.log(response.data.get_country);
            }).catch((error) =>{

            })
        },

        GetReporter(Data){
            axios.get("GetReporter").then((response) => {
                Data.commit("GetReporterData",response.data.Get_Reporter);
                // console.log(response.data.get_country);
            }).catch((error) =>{

            })
        },

    },

    mutations: {
        categoriesData(state,categories){
             state.CategoryData = categories;
        },
        GetInternationalData(state,International){
             state.InternationalData = International;
        },
        GetBangladeshData(state,Bangladesh){
            state.BangladeshData = Bangladesh;
        },
        GetJobsData(state,Jobs){
            state.JobsData = Jobs;
        },
        GetDistrictData(state,District){
            state.DistrictData = District;
        },
        GetSubdistrictData(state,Subdistrict){
            state.SubdistrictData = Subdistrict;
        },
        GetBusinessData(state,Business){
            state.BusinessData = Business;
        },
        GetSportsData(state,Sports){
            state.SportsData = Sports;
        },
        GetEntertainmentData(state,Entertainment){
            state.EntertainmentData = Entertainment;
        },
        GetLifestyleData(state,Lifestyle){
            state.LifestyleData = Lifestyle;
        },
        GetHealthData(state,Health){
            state.HealthData = Health;
        },
        GetReligionData(state,Religion){
            state.ReligionData = Religion;
        },
        GetScienceData(state,Science){
            state.ScienceData = Science;
        },
        GetEducationData(state,Education){
            state.EducationData = Education;
        },
        GetLifeData(state,Life){
            state.LifeData = Life;
        },
        GetExpatriateData(state,Expatriate){
            state.ExpatriateData = Expatriate;
        },
        GetOpinionData(state,Opinion){
            state.OpinionData = Opinion;
        },
        GetPhotoData(state,Photo){
            state.PhotoData = Photo;
        },
        GetVideoData(state,Video){
            state.VideoData = Video;
        },
        GetFeatureData(state,Feature){
            state.FeatureData = Feature;
        },
        GetReporterData(state,Reporter){
            state.ReporterData = Reporter;
        },


    }
}
