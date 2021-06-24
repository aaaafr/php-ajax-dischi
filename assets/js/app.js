const app = new Vue({
    el: "#app",
    data: {
        album: null

    },
    methods: {

    },
    mounted(){
        axios
            .get('/api/dischi.php')
            .then(resp => {
                 console.log(resp);
                this.album = resp.data
            })
            .catch(e => {
                console.log(e);
            })
    }

})