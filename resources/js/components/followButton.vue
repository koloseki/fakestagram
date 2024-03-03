<template>
    <div class="container">
        <button @click="followUser" :class="{ 'border text-blue-500 hover:text-white ': status, 'bg-blue-500 text-white hover:bg-blue-600': !status }" v-text="buttonText" class=" px-3 py-1 font-extrabold rounded-md hover:bg-blue-500 active:bg-blue-600 duration-100">

        </button>
    </div>
</template>

<script>
export default {

    props: ['userId','follows'],

    mounted() {
        console.log('Button mounted.')
    },

    data:function (){
        return{
            status: this.follows,
        }
    },

    methods: {
        followUser() {
            axios.post('/follow/' + this.userId)
                .then(response => {
                    this.status = !this.status;

                })
                .catch(error => {
                    if (error.response.status === 401){
                        window.location = '/login'
                    }
                });
        }
    },

    computed: {
        buttonText(){
            return (this.status) ? 'Unfollow' : 'Follow';
        }

    },

}
</script>
