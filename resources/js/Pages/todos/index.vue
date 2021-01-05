<template>
    <app-layout>
        <template #header>
            <h2 class="font-semibold text-xl text-gray-800 leading-tight">
                My Todo List
            </h2>
        </template>

        <create-todo></create-todo>

        <div class="p-1 w-full">
            <div class="max-w-3xl mx-auto sm:px-4 lg:px-8">
                <div v-for="todo in todos" :key="todo.id" class="flex items-center ">
                    <div class="flex flex-row content-around rounded shadow-md m-3 p-3 w-full bg-white text-gray-700">
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
    import CreateTodo from '@/Pages/todos/create'

    export default {
        props: ['todos'],

        components: {
            AppLayout,
            CreateTodo
        },
    }
</script>
