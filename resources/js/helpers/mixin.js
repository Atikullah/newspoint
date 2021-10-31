import Vue from "vue";


Vue.mixin({
    methods:{
        Confirm:function (callback) {
            Swal.fire({
                title: 'Are you sure?',
                text: "You won't be able to revert this!",
                icon: 'warning',
                showCancelButton: true,
                confirmButtonColor: '#3085d6',
                cancelButtonColor: '#d33',
                confirmButtonText: 'Yes'
            }).then((result) => {
                if (result.isConfirmed) callback();
            })
        },

        imagePreview:function (e) {
            let file =  e.target.files[0];
            //console.log(file.type);
            let reader = new FileReader();
            reader.onload = e => {
                this.form.image = e.target.result;
            };
            reader.readAsDataURL(file);

        },


        imagelink:function(image){
            if(image != null && image.length < 255)
            return 'images/reporters/' + image;
            else
                return this.form.image;
        },



    }
});
