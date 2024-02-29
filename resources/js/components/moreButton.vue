<template>
        <button @click="showMore" class="group mb-4 col-span-7 row-span-11 flex hover:bg-gray-100 mx-4 py-3 rounded-md">
            <img src="/svg/navbar/more.svg" alt="More icon"  class="w-6 h-6 mx-3 group-hover:scale-125 duration-200"/>
            <a>More</a>
        </button>
</template>

<script>

    export default {

        mounted() {
            console.log('more mounted')
        },

        methods:{
            showMore(){
                let moreDialog = document.querySelector('#MoreDialog')

                moreDialog.showModal();


                //Closes dialog if clicked outside
                moreDialog.addEventListener("click", e => {
                    const dialogDimensions = moreDialog.getBoundingClientRect()
                    if (
                        e.clientX < dialogDimensions.left ||
                        e.clientX > dialogDimensions.right ||
                        e.clientY < dialogDimensions.top ||
                        e.clientY > dialogDimensions.bottom
                    ) {
                        moreDialog.close()
                    }
                })
            }


        }
    }

</script>


