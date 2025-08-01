<script setup lang="ts">
import { Head } from '@inertiajs/vue3';
import MainNavigation from '@/components/MainNavigation.vue';
import SliderNavigation from '@/components/SliderNavigation.vue';
import Footer from '@/components/Footer.vue';
import SkillsCarousel from '@/components/SkillsCarousel.vue';
</script>

<template>
    <Head title="Home" />
    <div class="relative flex min-h-screen flex-col overflow-x-hidden">
        <!-- Cinematic background with gradient overlay -->
        <div class="absolute inset-0 z-0 bg-gradient-to-br from-black via-gray-900 to-teal-900"></div>
        
        <!-- Radial vignette overlay -->
        <div class="bg-radial-vignette absolute inset-0 z-0"></div>
        
        <!-- Additional gradient layers for depth -->
        <div class="absolute inset-0 z-0 bg-gradient-to-r from-black/60 via-transparent to-teal-900/40"></div>
        <div class="absolute inset-0 z-0 bg-gradient-to-t from-black/80 via-transparent to-transparent"></div>
        
        <MainNavigation />
        <div class="relative z-10 container mx-auto mt-14 flex flex-1 flex-col px-4 py-8">
            <div class="text-center">
                <h1 class="mb-4 text-4xl font-bold text-white drop-shadow-2xl mt-10">Hi 👋 Im, Owen <br> Software Engineer.</h1>
                <div class="mt-8 flex flex-col items-center justify-center gap-8 md:flex-row">
                    <img src="/images/happy-selfie.png" class=" flex flex-col rounded-full items-center justify-center gap-8 md:flex-row" alt="logo">
                    <p class="text-xl text-gray-200 mb-8 leading-relaxed drop-shadow-md">
                        With expertise in modern web technologies and a keen eye for design, I specialize in building 
                        innovative solutions that deliver exceptional user experiences. From responsive web applications 
                        to complex backend systems, I bring ideas to life with clean code and creative problem-solving.
                    </p>
                </div>
            </div>
            <h2 class="text-center font-semibold text-3xl mt-10">MY Skills</h2>
            <SkillsCarousel class="mt-5" />
        </div>
        <Footer />
    </div>
</template>

<style scoped>
.bg-radial-vignette {
    background: radial-gradient(
        circle at center,
        transparent 0%,
        rgba(0, 0, 0, 0.3) 50%,
        rgba(0, 0, 0, 0.8) 100%
    );
}
</style>