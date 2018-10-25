<template>
    <form class="mt-20" action="" method="POST">

        <label class="block font-bold mb-2">Title</label>
        <input v-model="title" type="text" name="title" class="border-2 border-grey block w-1/2 mb-10 px-3 py-2 rounded">

        <label class="block font-bold mb-2">Author</label>
        <input v-model="author" type="text" name="author" class="border-2 border-grey block w-1/2 mb-10 px-3 py-2 rounded">

        <label class="block font-bold mb-2">Date</label>
        <input v-model="date" type="text" name="date" class="border-2 border-grey block w-1/2 mb-10 px-3 py-2 rounded">

        <label class="block font-bold mb-2">Body</label>
        <textarea v-model="body" name="body" rows="10" class="border-2 border-grey block w-1/2 mb-10 px-3 py-2 rounded"></textarea>
        
        <button class="rounded px-4 py-3 bg-green text-white no-underline">Create Post</button>
        <a class="rounded px-4 py-3 bg-grey-dark text-white no-underline" href="">Back to All Posts</a>
    </form> 
</template>

<script>
    export default {
        data() {
            return {
                title: null,
                author: null,
                date: null,
                body: null,
            }
        },
    }
</script>
