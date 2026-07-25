<script setup>
defineProps({
    username: String,
});
</script>

<template>
    <div
        style="
            color: blue;
            display: flex;
            flex-direction: column;
            align-items: center;
            padding-top: 10rem;
            font-family: Verdana, Geneva, Tahoma, sans-serif;
            font-size: larger;
        "
    >
        <h1>user profile</h1>
        <p>welcome {{ username }}</p>
    </div>
</template>
