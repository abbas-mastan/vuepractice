<script setup>
import AuthenticatedLayout from '@/Layouts/AuthenticatedLayout.vue';
import {Link, Head } from '@inertiajs/vue3'
defineProps({ posts: Object })
</script>
<template>
    <Head title="Posts List" />
    <AuthenticatedLayout>
        <div class="py-12">
            <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
                <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                    <div class="mt-5 float-right">
                        <Link class="m-5 mt-5 bg-violet-700 text-white rounded-md px-3 py-2 text-sm font-medium">Add New +</Link>
                    </div>
                    <table class="table-fixed">
                        <thead>
                            <tr>
                                <th>id</th>
                                <th>title</th>
                                <th>content</th>
                                <th>created at</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr v-for="post in posts">
                                <td>{{ post.id }}</td>
                                <td>{{ post.title }}</td>
                                <td>{{ post.content }}</td>
                                <td>
                                    {{ post.created_at }}
                                </td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </AuthenticatedLayout>
</template>