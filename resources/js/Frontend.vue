<template>
    <div>

    </div>
</template>

<script>
import Axios from 'axios';


    export default {
        mounted() {
            Axios.get('/Api/posts')
            .then((resp) => {
                console.log(resp.data);

            });

        }
    }
</script>

<style lang="scss" scoped>

</style>