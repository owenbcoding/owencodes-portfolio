<template>
    <div class="relative flex min-h-screen flex-col overflow-hidden">
        <!-- Cinematic background with gradient overlay -->
        <div class="absolute inset-0 z-0 bg-gradient-to-br from-black via-gray-900 to-teal-900"></div>

        <!-- Radial vignette overlay -->
        <div class="bg-radial-vignette absolute inset-0 z-0"></div>

        <!-- Additional gradient layers for depth -->
        <div class="absolute inset-0 z-0 bg-gradient-to-r from-black/60 via-transparent to-teal-900/40"></div>
        <div class="absolute inset-0 z-0 bg-gradient-to-t from-black/80 via-transparent to-transparent"></div>

        <MainNavigation />
        <div class="relative z-10 container mx-auto flex-1 px-4 py-8 pt-24">
            <h1 class="mb-8 text-center text-4xl font-bold text-white drop-shadow-2xl">Blogs</h1>

            <!-- Slider content moved directly to the page -->
            <div class="mb-12 text-center">
                <p class="mx-auto max-w-2xl text-lg text-gray-200 drop-shadow-md">
                    Sharing my knowledge and experiences in web development, and the latest technologies that shape the digital world and rebuilding my
                    life one line of code at a time.
                </p>
            </div>

            <div class="mx-auto max-w-2xl space-y-6">
                <!-- Blog posts will go here -->
                <article
                    class="rounded-lg border border-white/10 bg-black/30 p-6 shadow-2xl backdrop-blur-sm transition-all duration-300 hover:border-teal-400/30"
                >
                    <h3 class="mb-2 text-2xl font-semibold text-white">Sample Blog Post</h3>
                    <p class="mb-4 text-gray-300">This is a sample blog post description.</p>
                    <div class="text-sm text-gray-400">Published on January 1, 2024</div>
                </article>
            </div>
        </div>
        <Footer />
    </div>
</template>

<script setup lang="ts">
import Footer from '@/components/Footer.vue';
import MainNavigation from '@/components/MainNavigation.vue';
// Component logic will go here
</script>

<style scoped>
.bg-radial-vignette {
    background: radial-gradient(circle at center, transparent 0%, rgba(0, 0, 0, 0.3) 50%, rgba(0, 0, 0, 0.8) 100%);
}
</style>
