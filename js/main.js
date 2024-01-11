const { createApp } = Vue
createApp({
    data() {
        return {
            title: 'Spotify Discs',
            discs: null,
        }
    },

    methods: {

    },
    mounted() {
        axios
            .get('server.php')
            .then(response => {
                console.log(response);
                this.discs = response.data;
                console.log(response.data);
    })
    }
}).mount('#app')