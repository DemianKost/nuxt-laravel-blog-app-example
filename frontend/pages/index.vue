<script setup lang="ts">
    import { postStore } from '../stores/posts';

    const store = postStore();
    const posts = store.index;
</script>

<template>
    <div>
        <p class="text-2xl">homepage</p>
    </div>
</template>