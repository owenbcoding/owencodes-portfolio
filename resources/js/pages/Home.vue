<script setup>
import { Head } from '@inertiajs/vue3';
import MainNavigation from '@/components/MainNavigation.vue';
import SliderNavigation from '@/components/SliderNavigation.vue';
import Footer from '@/components/Footer.vue';
</script>

<template>
    <Head title="Home" />
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
            <div class="text-center">
                <h1 class="text-5xl font-bold text-white mb-8 drop-shadow-2xl">Owencodes</h1>
                
                <!-- Slider content moved directly to the page -->
                <div class="max-w-4xl mx-auto">
                    <h2 class="text-3xl font-bold mb-6 text-white drop-shadow-lg">I'm a passionate Full Stack Developer.</h2>
                    <p class="text-xl text-gray-200 mb-8 leading-relaxed drop-shadow-md">
                        With expertise in modern web technologies and a keen eye for design, I specialize in building 
                        innovative solutions that deliver exceptional user experiences. From responsive web applications 
                        to complex backend systems, I bring ideas to life with clean code and creative problem-solving.
                    </p>
                    
                    <div class="flex flex-wrap justify-center gap-6 mt-12">
                        <div class="text-center bg-black/20 backdrop-blur-sm rounded-lg p-6 border border-white/10">
                            <div class="text-3xl font-bold text-teal-400 mb-2 drop-shadow-lg">50+</div>
                            <div class="text-gray-200">Projects Completed</div>
                        </div>
                        <div class="text-center bg-black/20 backdrop-blur-sm rounded-lg p-6 border border-white/10">
                            <div class="text-3xl font-bold text-teal-400 mb-2 drop-shadow-lg">5+</div>
                            <div class="text-gray-200">Years Experience</div>
                        </div>
                        <div class="text-center bg-black/20 backdrop-blur-sm rounded-lg p-6 border border-white/10">
                            <div class="text-3xl font-bold text-teal-400 mb-2 drop-shadow-lg">100%</div>
                            <div class="text-gray-200">Client Satisfaction</div>
                        </div>
                    </div>
                </div>
            </div>
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