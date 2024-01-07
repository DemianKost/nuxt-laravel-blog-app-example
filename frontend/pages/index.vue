<script setup lang="ts">
    import { postStore } from '../stores/posts';

    const store = postStore();
    const posts = store.index;
</script>

<template>
    <div>
        homepage
        <NuxtWelcome />
    </div>
</template>