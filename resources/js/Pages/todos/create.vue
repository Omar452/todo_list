<template>
    <div class="w-full pt-2">
        <div class="max-w-3xl mx-auto sm:px-4 lg:px-8 pt-6">
            <form @submit.prevent="createTodo">
                <input v-model="content" class="w-full mb-2 p-2 rounded-lg border-gray-800 focus:outline-none block" type="text" name="content" id="content" placeholder="Create a new todo...">
                <span class="my-5 text-red-500 semi-bold" v-if="$page.errors.content">
                    {{$page.errors.content}}
                </span>
            </form>
        </div>
    </div>
</template>

<script>
export default {
    data(){
        return {
            content: null
        }
    },
    methods: {
        createTodo() {

            this.$inertia.post('/todos', {content: this.content});
        }
    }
}
</script>