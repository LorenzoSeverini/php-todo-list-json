// JS Vue3

const { createApp } = Vue;

createApp({
    
    data () {
        return {
            apiUrl: 'api.php',
            apiData: [],
        }
    },
    
    mounted() {
        console.log('Mounted 🗻🤠');

        axios.get(this.apiUrl).then((response) => {
            console.log("Data are here 🫡: ", response.data);
        });
    },
    
    methods: {
        callApi() {
            console.log('Call API 📞');
            axios.get(this.apiUrl).then((response) => {
                this.apiData = response.data;
                console.log('Data of array 👍💻: ', this.apiData);
            }).catch((error) => {
                console.log("Error: ", error);
            });
        },

        deleteApi() {
            console.log('Delete API 📞');
            axios.delete(this.apiUrl).then((response) => {
                this.apiData = [];
                console.log('Data of array 👍💻: ', this.apiData);
            }
            ).catch((error) => {
                console.log("Error: ", error);
            }
            );
        },
    },

}).mount("#app");