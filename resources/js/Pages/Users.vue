<script setup>
import Layout from "./Layout.vue";

defineProps({
    username: String,
});
</script>

<template>
    <Layout>
        <div style="color: blue; display: flex; flex-direction: column; align-items: center; padding-top: 10rem; font-family: Verdana, Geneva, Tahoma, sans-serif; font-size: larger; font-weight: 400px;">
            <h1>user profile</h1>
            <p>welcome {{ username }}</p>
        </div>
    </Layout>
</template>
