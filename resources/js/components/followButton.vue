<template>
    <div class="container">
        <button onclick="PrintMessage()" class="btn-primary bg-blue-400 text-white px-3 py-1 font-extrabold rounded-md hover:bg-blue-500 active:bg-blue-600">
            Follow
        </button>
    </div>
</template>

<script>
    export default function PrintMessage(){
        console.log('it working');
    }
</script>
