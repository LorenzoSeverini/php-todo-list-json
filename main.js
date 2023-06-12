// JS Vue3

const { createApp } = Vue;

createApp({
    
    data: {
        message: 'Hello Vue!',
        items: [],
        inputText: ''
    },
    
    mounted() {
        console.log('Mounted');
    },
    
    methods: {
        fetchData() {
          axios.get('https://jsonplaceholder.typicode.com/users')
            .then(response => {
              this.items = response.data;
            })
            .catch(error => {
              console.log(error);
            });
        }
    },
}).mount("#app");