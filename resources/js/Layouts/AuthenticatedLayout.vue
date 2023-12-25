<script setup>
import Navbar from '../Pages/partials/Navbar.vue';
</script>

<template>
    <div>
        <div class="min-h-screen bg-gray-100">
         <Navbar />
            <main>
                <slot />
            </main>
        </div>
    </div>
</template>
