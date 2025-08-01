<template>
    <div class="relative min-h-screen overflow-hidden flex flex-col">
        <!-- Cinematic background with gradient overlay -->
        <div class="absolute inset-0 bg-gradient-to-br from-black via-gray-900 to-teal-900 z-0"></div>
        
        <!-- Radial vignette overlay -->
        <div class="absolute inset-0 bg-radial-vignette z-0"></div>
        
        <!-- Additional gradient layers for depth -->
        <div class="absolute inset-0 bg-gradient-to-r from-black/60 via-transparent to-teal-900/40 z-0"></div>
        <div class="absolute inset-0 bg-gradient-to-t from-black/80 via-transparent to-transparent z-0"></div>
        
        <MainNavigation />
        <SliderNavigation />
        <div class="relative flex-1 container mx-auto px-4 py-8 pt-24 z-10">
            <h1 class="text-4xl font-bold text-white mb-8 text-center drop-shadow-2xl">Blogs</h1>
            
            <!-- Slider content moved directly to the page -->
            <div class="text-center mb-12">
                <h2 class="text-3xl font-bold mb-4 text-white drop-shadow-lg">Thoughts, tutorials, and insights about web development and technology.</h2>
                <p class="text-lg text-gray-200 max-w-2xl mx-auto drop-shadow-md">
                    Sharing my knowledge and experiences in web development, design patterns, and the latest technologies that shape the digital world.
                </p>
            </div>

            <div class="space-y-6">
                <!-- Blog posts will go here -->
                <article class="bg-black/30 backdrop-blur-sm rounded-lg shadow-2xl p-6 border border-white/10 hover:border-teal-400/30 transition-all duration-300">
                    <h3 class="text-2xl font-semibold text-white mb-2">Sample Blog Post</h3>
                    <p class="text-gray-300 mb-4">This is a sample blog post description.</p>
                    <div class="text-sm text-gray-400">Published on January 1, 2024</div>
                </article>
            </div>
        </div>
        <Footer />
    </div>
</template>

<script setup lang="ts">
import MainNavigation from '@/components/MainNavigation.vue';
import SliderNavigation from '@/components/SliderNavigation.vue';
import Footer from '@/components/Footer.vue';
// Component logic will go here
</script>

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