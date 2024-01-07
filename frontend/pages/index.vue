<script setup>
    import { postStore } from '../stores/posts';

    const store = postStore();
    const posts = store.index;
</script>

<template>
    <div>
        
        <div class="bg-white py-24 sm:py-32">
            <div class="mx-auto max-w-7xl px-6 lg:px-8">
                <div class="mx-auto max-w-2xl lg:mx-0">
                    <h2 class="text-3xl font-bold tracking-tight text-gray-900 sm:text-4xl">From the blog</h2>
                    <p class="mt-2 text-lg leading-8 text-gray-600">Learn how to grow your business with our expert advice.</p>
                </div>
                <div class="mx-auto mt-10 grid max-w-2xl grid-cols-1 gap-x-8 gap-y-16 border-t border-gray-200 pt-10 sm:mt-16 sm:pt-16 lg:mx-0 lg:max-w-none lg:grid-cols-3">
                    
                    <Post
                        v-for="post in posts"
                        :key="`post_block_${post.id}`"
                        :post="post"
                    />

                </div>
            </div>
        </div>

    </div>
</template>