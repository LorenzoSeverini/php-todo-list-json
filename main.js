// JS Vue3

const { createApp } = Vue;

createApp({
    
    data () {
        return {
            apiUrl: 'api.php',
            apiData: [],
            newTask: { name: '', color: '', taste: '' }
        }
    },
    
    mounted() {
        console.log('Mounted 🗻🤠');

        this.callApi();
    },
    
    methods: {

        callApi() {
            console.log('Call API 📞');
            axios.get(this.apiUrl).then((response) => {
                console.log('Data of array 👍💻: ', response.data);
                this.apiData = response.data;

            }).catch((error) => {
                console.log("Error: ", error);
            });
        },

        addNewTask() {
            const data = new FormData();
            data.append('newTask[name]', this.newTask.name);
            data.append('newTask[color]', this.newTask.color);
            data.append('newTask[taste]', this.newTask.taste);
      
            axios.post(this.apiUrl, data)
              .then((response) => {
                this.apiData = response.data;
                this.newTask = { name: '', color: '', taste: '' };
            })
              .catch((error) => {
                console.log('Error: ', error);
            });
        },

        deleteAllTasks() {
            axios.post(this.apiUrl, { deleteAll: true })
            .then((response) => {
              this.apiData = []; 
              console.log('All tasks deleted successfully.');
            })
            .catch((error) => {
              console.log('Error: ', error);
            });
        },

        deleteItem(item) {
            const index = this.apiData.indexOf(item);
            if (index > -1) {
                this.apiData.splice(index, 1);
                axios.post(this.apiUrl, { deleteIndex: index })
                    .then((response) => {
                    console.log('Item deleted successfully.');
                })
                    .catch((error) => {
                    console.log('Error: ', error);
                });
            }
        },
    }
}).mount("#app");