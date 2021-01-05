<template>
    <app-layout>
        <template #header>
            <h2 class="font-semibold text-xl text-gray-800 leading-tight">
                My Todo List
            </h2>
        </template>

        <div class="py-12">
            <div class="max-w-3xl mx-auto sm:px-4 lg:px-8">
                <div v-for="todo in todos" :key="todo.id" class="flex items-center ">
                    <div class="flex flex-row content-around rounded shadow-md m-3 p-3 w-full">
                        <div class="w-10/12">
                            <p>{{todo.content}}</p>
                        </div>
                        <div class="w-1/12">
                            <button><i class="far fa-edit"></i></button>
                        </div>
                        <div class="w-1/12">
                            <button><i class="far fa-trash-alt"></i></button>
                        </div>
                    </div>
                </div>

            </div>           
        </div>
    </app-layout>
</template>

<script>
    import AppLayout from '@/Layouts/AppLayout'

    export default {
        props: ['todos'],

        components: {
            AppLayout,
        },
    }
</script>
