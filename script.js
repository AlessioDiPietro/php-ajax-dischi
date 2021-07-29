const app = new Vue ({
    el: "#app",

    data: {
        arrayMusic : "",
        apiMusic : "dbJson.php",
    },
    mounted(){
        axios.get(this.apiMusic)
            .then(ris => {
                console.log(ris.data);
                this.arrayMusic = ris.data;
            })
    }

});