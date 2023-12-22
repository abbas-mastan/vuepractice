<script setup>
import { useForm,router } from "@inertiajs/vue3";
const { errors, customer } = defineProps(['errors', 'customer']);

const form = useForm({
    name: customer.name ?? null,
    email: customer.email ?? null,
    phone: customer.phone ?? null,
})

function submit(id = -1) { 
        router.post(`/customers/store/${id}`,form);
 }
</script>
<template>
    <div class="mt-5 card col-md-6 offset-3">
        <div class="card-header">
            Featured
        </div>
        <div class="card-body">
            <form @submit.prevent="submit(customer.id)">
                <div class="mb-3">
                    <label for="name" class="form-label">Name</label>
                    <input type="text" v-model="form.name" class="form-control" id="name">
                    <span class="text-danger" v-if="errors.name">{{ errors.name }}</span>
                </div>
                <div class="mb-3">
                    <label for="email" class="form-label">Email address</label>
                    <input type="email" v-model="form.email" class="form-control" id="email">
                    <span class="text-danger" v-if="errors.email">{{ errors.email }}</span>
                </div>
                <div class="mb-3">
                    <label for="phone" class="form-label">Phone</label>
                    <input type="number" v-model="form.phone" class="form-control" id="phone">
                    <span class="text-danger" v-if="errors.phone">{{ errors.phone }}</span>
                </div>
                <button type="submit" class="btn btn-primary">{{customer.id ? 'Update':'Submit'}}</button>
            </form>
        </div>

    </div>
</template>