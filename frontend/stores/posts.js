import { defineStore } from "pinia";
import { PostService } from "~/services/PostService";

export const postStore = defineStore('posts', {
    state: () => ({
        all: [],
    }),
    getters: {
        index(state) {
            // if ( ! state.all.entries().all.length ) {
            //     state.all = postStore().get()
            // }
            state.all = postStore().get()

            return state.all;
        },
    },
    actions: {
        get() {
            return PostService.all();
        },
    }
});