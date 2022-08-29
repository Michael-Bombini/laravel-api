<template>
    <div>
        <div class="container mt-5">
            <div class="row">
                <div class="col-4" v-for="post in posts" :key="post.id">
                    <div class="post shadow h-100">
                        <img  class="img-fluid" :alt="'Image of the post ' + post.title " />
                        <div class="p-3 mb-3">
                            <div class="title">{{ post.title }}</div>
                            <div class="description">{{ post.description }}</div>
                            <div class="row">
                                <div class="col-6 author">{{ post.id}}</div>
                                <div class="col-6">{{ post.user_id}}</div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</template>

<script>
import Axios from "axios";

export default {
    data() {
        return {
            posts: [],
        };
    },
    mounted() {
        Axios.get("/api/posts").then((resp) => {
            console.log(resp.data);
            this.posts = resp.data;
        });
    },
};
</script>

<style lang="scss" scoped></style>
