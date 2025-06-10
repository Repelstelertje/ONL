var oproepjes= new Vue({
    el: "#oproepjes",
    created: function(){
        this.init();
    },
    data: {
        profiles: [],
        page: 1,
        ppp: 20,    //profiles per page
    },
    computed: {
        filtered_profiles: function(){
            //afhankelijk van pagina nummer, een deel vd profielen tonen
            //alleen hier tellen we vanaf 0
            var i0= (this.page - 1) * this.ppp;
            var i1= i0 + this.ppp;
            return this.profiles.slice(i0, i1);
        },
        max_page_number: function(){
            return Math.ceil(this.profiles.length / this.ppp);  
        },
    },
    methods:  {
        init: function(){
            axios.get(api_url)
                .then(function(response){
                    oproepjes.profiles= response.data.profiles;
                })
                .catch(function (error) {
                    console.log(error);
                });            
        },
        imgError: function(event){
            event.target.src = 'img/fallback.svg';
        },
        set_page_number: function(page){
            if(page <= 1){
                this.page= 1;
            } else if(page >= this.max_page_number){
                this.page= this.max_page_number;
            } else {
                this.page= page;
            }
            
            
        }
    }
});