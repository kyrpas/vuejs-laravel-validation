<template>
    <form class="mt-20" action="" method="POST">
        
        <label class="block font-bold mb-2">Title</label>
        <input v-model="title" type="text" name="title" class="border-2 border-grey block w-1/2 px-3 py-2 rounded">
        <span v-if="errors.has('title')" class="block text-sm text-red mt-2">{{ errors.get('title') }}</span>

        <label class="block font-bold mt-10 mb-2">Author</label>
        <input v-model="author" type="text" name="author" class="border-2 border-grey block w-1/2 px-3 py-2 rounded">
        <span v-if="errors.has('author')" class="block text-sm text-red mt-2">{{ errors.get('author') }}</span>

        <label class="block font-bold mt-10 mb-2">Date</label>
        <input v-model="date" type="text" name="date" class="border-2 border-grey block w-1/2 px-3 py-2 rounded">
        <span v-if="errors.has('date')" class="block text-sm text-red mt-2">{{ errors.get('date') }}</span>

        <label class="block font-bold mt-10 mb-2">Body</label>
        <textarea v-model="body" name="body" rows="10" class="border-2 border-grey block w-1/2 px-3 py-2 rounded"></textarea>
        <span v-if="errors.has('body')" class="block text-sm text-red mt-2">{{ errors.get('body') }}</span>
        
        <button @click.prevent="store" class="rounded px-4 py-3 bg-green text-white no-underline mt-10 ">Create Post</button>
        <a class="rounded px-4 py-3 bg-grey-dark text-white no-underline" href="">Back to All Posts</a>
    </form> 
</template>

<script>
    import { Errors } from '../errors.js';
    export default {
        data() {
            return {
                title: null,
                author: null,
                date: null,
                body: null,
                errors: new Errors(),
            }
        },
        methods: {
            store() {
                axios.post('/posts', {
                    title: this.title,
                    author: this.author,
                    date: this.date,
                    body: this.body,
                })
                .then((response) => {
                    document.location = '/';
                })
                .catch((error) => {
                    this.errors.record(error.response.data.errors);
                });
            },
        }
    }
</script>
