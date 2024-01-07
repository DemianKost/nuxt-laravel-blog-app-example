import { defineStore } from "pinia";
import { PostService } from "~/services/PostService";

export const postStore = defineStore('posts', {
    state: () => ({
        all: [],
    }),
    getters: {
        index(state) {
            PostService.all();
        }
    }
});