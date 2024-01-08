<script setup>
import { PostService } from '../../services/PostService'
const route = useRoute()

const post = PostService.find(route.params.id)
</script>

<template>
    <div>

        <div class="bg-white py-24 sm:py-32">
            <div class="mx-auto max-w-7xl px-6 lg:px-8">
                <div class="mx-auto max-w-2xl mb-10 lg:mx-0">
                    <h2 class="text-3xl font-bold tracking-tight text-gray-900 sm:text-4xl">{{ post.attributes.title }}</h2>
                    <p class="mt-2 text-lg leading-8 text-gray-600">{{ post.attributes.summary }}</p>
                </div>
                <div class="mx-auto max-w-2xl border-t pt-10 border-gray-200 lg:max-w-none">
                    <p>{{ post.attributes.content }}</p>

                </div>
            </div>
        </div>

    </div>
</template>