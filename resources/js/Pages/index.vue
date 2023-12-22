<script setup>
import { router } from "@inertiajs/vue3";
defineProps({ customers: Object })
function edit(id) {
    router.get(`/customers/create/${id}`);
}
function destroy(id) {
    router.delete(`/customers/${id}`);
}
</script>
<template>
    <div v-if="$page.props.flash.message" class="mt-5 alert alert-success alert-dismissible fade show" role="alert">
        <strong>Success!</strong> {{ $page.props.flash.message }}.
        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
    </div>
    <div class="mt-5 card col-md-8 offset-3">
        <table class="table table-bordered table-hover table-sm">
            <thead>
                <tr>
                    <th>name</th>
                    <th>Action</th>
                </tr>
            </thead>
            <tbody>
                <tr v-for="customer in customers">
                    <td>{{ customer.name }}</td>
                    <td>
                        <button class="me-2 btn btn-outline-success">View</button>
                        <button @click="edit(customer.id)" class="me-2 btn btn-outline-primary">Edit</button>
                        <button @click="destroy(customer.id)" class="btn btn-outline-danger">Delete</button>
                    </td>
                </tr>
            </tbody>
        </table>
    </div>
</template>