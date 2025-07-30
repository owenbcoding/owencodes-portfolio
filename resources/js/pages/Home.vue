<script setup>
import { Head } from '@inertiajs/vue3';
import DistortionSlider from '@/components/DistortionSlider.vue';
import { ref } from 'vue';

const sliderRef = ref(null);

function navigate(index) {
    sliderRef.value.goTo(index);
}
</script>

<template>
    <Head title="Home" />
    <div class="relative min-h-screen bg-green-900 text-white overflow-hidden">
        <nav class="fixed top-0 left-0 z-10 flex w-full justify-center py-4 backdrop-blur">
            <ul class="flex space-x-8">
                <li><button @click="navigate(0)" class="hover:underline">Home</button></li>
                <li><button @click="navigate(1)" class="hover:underline">Projects</button></li>
                <li><button @click="navigate(2)" class="hover:underline">Blogs</button></li>
                <li><button @click="navigate(3)" class="hover:underline">Services</button></li>
                <li><button @click="navigate(4)" class="hover:underline">Contact</button></li>
            </ul>
            <div class="absolute right-4 flex space-x-4">
                <a href="/" class="font-bold hover:underline">Owen</a>
                <a href="https://github.com/owenbcoding" target="_blank" class="rounded border px-3 py-1 hover:bg-white hover:text-green-900">GitHub</a>
            </div>
        </nav>
        <h1>Hello</h1>
        <DistortionSlider ref="sliderRef" />
    </div>
</template>