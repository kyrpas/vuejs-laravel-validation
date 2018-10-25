<template>
    <form class="mt-20" action="" method="POST">
        
        <label class="block font-bold mb-2">Title</label>
        <input type="text" name="title" value="" class="border-2 border-grey block w-1/2 mb-10 px-3 py-2 rounded">

        <label class="block font-bold mb-2">Author</label>
        <input type="text" name="author" value="" class="border-2 border-grey block w-1/2 mb-10 px-3 py-2 rounded">

        <label class="block font-bold mb-2">Date</label>
        <input type="text" name="date" value="" class="border-2 border-grey block w-1/2 mb-10 px-3 py-2 rounded">

        <label class="block font-bold mb-2">Body</label>
        <textarea name="body" rows="10" class="border-2 border-grey block w-1/2 mb-10 px-3 py-2 rounded"></textarea>
        
        <button type="submit" class="rounded px-4 py-3 bg-green text-white no-underline" href="">Create Post</button>
        <a class="rounded px-4 py-3 bg-grey-dark text-white no-underline" href="">Back to All Posts</a>
    </form> 
</template>

<script>
    export default {
        mounted() {
            console.log('Component mounted.')
        }
    }
</script>
