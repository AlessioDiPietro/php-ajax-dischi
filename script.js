const app = new Vue ({
    el: "#app",

    data: {
        arrayMusic : "",
        apiMusic : "dbJson.php",
        filterGenre: [],
        genreType: ""
    },
    mounted(){
        axios.get(this.apiMusic)
            .then(ris => {
                console.log(ris.data);
                this.arrayMusic = ris.data;
            });
        
    },
    methods: {
        getFilterGenre (){
            axios.get(this.apiMusic)
            .then(response => {
                this.filterGenre = response.data.filter(item => item.genre.toLowerCase().includes(this.genreType.toLowerCase()));
                
                
                
            })
        }

    },
    created(){
        this.getFilterGenre();
    }

});