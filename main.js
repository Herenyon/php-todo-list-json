'use strict';

const { createApp } = Vue;

createApp({
    data() {
        return {
            list: [],
            current: '',
            newTask: ''
        }
    },
    methods: {

        addTask() {
            const todo = {
                newtask: this.newTask,
            };
            axios.post('server.php', todo, {
                headers: { 'Content-Type': 'multipart/form-data' }
            })
                .then((response) => {
                    this.list = response.data;
                })
        },

        // doneItem() {
        //     let element = document.getElementById("list-item");
        //     for (let i = 0; i < this.list[i]; i++) {
        //         if (this.list.done === true) {
        //             element.classList.add("done-task")
        //         }
        //     }
        // }
    },
    created() {
        axios.get('server.php')
            .then((response) => {

                this.list = response.data;
            })
    },

}).mount('#app');




