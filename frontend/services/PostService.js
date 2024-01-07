export const BASE_URL = 'http://127.0.0.1:8000';

export const PostService = {
    all: () => {
        const { data } = useFetch(`${BASE_URL}/posts`);

        return data;
    }
};