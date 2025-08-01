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
            <h1 class="text-4xl font-bold text-white mb-8 text-center drop-shadow-2xl">Projects</h1>
            
            <!-- Slider content moved directly to the page -->
            <div class="text-center mb-12">
                <h2 class="text-3xl font-bold mb-4 text-white drop-shadow-lg">A showcase of my latest work and creative projects.</h2>
                <p class="text-lg text-gray-200 max-w-2xl mx-auto drop-shadow-md">
                    Explore my portfolio of innovative web applications, mobile apps, and digital solutions that demonstrate my passion for creating exceptional user experiences.
                </p>
            </div>

            <!-- Centered grid layout with 2 rows of 4 project cards -->
            <div class="max-w-7xl mx-auto">
                <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-6">
                    <!-- Project Card 1 -->
                    <div class="bg-black/30 backdrop-blur-sm rounded-lg shadow-2xl p-6 border border-white/10 hover:border-teal-400/30 transition-all duration-300 hover:transform hover:scale-105">
                        <div class="h-40 bg-gradient-to-br from-gray-800 to-teal-900 rounded-lg mb-4 flex items-center justify-center">
                            <span class="text-gray-300">Project Image</span>
                        </div>
                        <h3 class="text-xl font-semibold text-white mb-2">E-Commerce Platform</h3>
                        <p class="text-gray-300 text-sm mb-3">A modern e-commerce solution with advanced features and responsive design.</p>
                        <div class="flex flex-wrap gap-2">
                            <span class="px-2 py-1 bg-teal-600/80 text-xs rounded">React</span>
                            <span class="px-2 py-1 bg-teal-700/80 text-xs rounded">Node.js</span>
                        </div>
                    </div>

                    <!-- Project Card 2 -->
                    <div class="bg-black/30 backdrop-blur-sm rounded-lg shadow-2xl p-6 border border-white/10 hover:border-teal-400/30 transition-all duration-300 hover:transform hover:scale-105">
                        <div class="h-40 bg-gradient-to-br from-gray-800 to-teal-900 rounded-lg mb-4 flex items-center justify-center">
                            <span class="text-gray-300">Project Image</span>
                        </div>
                        <h3 class="text-xl font-semibold text-white mb-2">Task Management App</h3>
                        <p class="text-gray-300 text-sm mb-3">Collaborative task management with real-time updates and team features.</p>
                        <div class="flex flex-wrap gap-2">
                            <span class="px-2 py-1 bg-teal-600/80 text-xs rounded">Vue.js</span>
                            <span class="px-2 py-1 bg-teal-700/80 text-xs rounded">Laravel</span>
                        </div>
                    </div>

                    <!-- Project Card 3 -->
                    <div class="bg-black/30 backdrop-blur-sm rounded-lg shadow-2xl p-6 border border-white/10 hover:border-teal-400/30 transition-all duration-300 hover:transform hover:scale-105">
                        <div class="h-40 bg-gradient-to-br from-gray-800 to-teal-900 rounded-lg mb-4 flex items-center justify-center">
                            <span class="text-gray-300">Project Image</span>
                        </div>
                        <h3 class="text-xl font-semibold text-white mb-2">Portfolio Website</h3>
                        <p class="text-gray-300 text-sm mb-3">Personal portfolio showcasing creative work and professional experience.</p>
                        <div class="flex flex-wrap gap-2">
                            <span class="px-2 py-1 bg-teal-600/80 text-xs rounded">React</span>
                            <span class="px-2 py-1 bg-teal-700/80 text-xs rounded">Tailwind</span>
                        </div>
                    </div>

                    <!-- Project Card 4 -->
                    <div class="bg-black/30 backdrop-blur-sm rounded-lg shadow-2xl p-6 border border-white/10 hover:border-teal-400/30 transition-all duration-300 hover:transform hover:scale-105">
                        <div class="h-40 bg-gradient-to-br from-gray-800 to-teal-900 rounded-lg mb-4 flex items-center justify-center">
                            <span class="text-gray-300">Project Image</span>
                        </div>
                        <h3 class="text-xl font-semibold text-white mb-2">Weather Dashboard</h3>
                        <p class="text-gray-300 text-sm mb-3">Real-time weather information with interactive maps and forecasts.</p>
                        <div class="flex flex-wrap gap-2">
                            <span class="px-2 py-1 bg-teal-600/80 text-xs rounded">JavaScript</span>
                            <span class="px-2 py-1 bg-teal-700/80 text-xs rounded">API</span>
                        </div>
                    </div>

                    <!-- Project Card 5 -->
                    <div class="bg-black/30 backdrop-blur-sm rounded-lg shadow-2xl p-6 border border-white/10 hover:border-teal-400/30 transition-all duration-300 hover:transform hover:scale-105">
                        <div class="h-40 bg-gradient-to-br from-gray-800 to-teal-900 rounded-lg mb-4 flex items-center justify-center">
                            <span class="text-gray-300">Project Image</span>
                        </div>
                        <h3 class="text-xl font-semibold text-white mb-2">Social Media App</h3>
                        <p class="text-gray-300 text-sm mb-3">Social networking platform with messaging and content sharing.</p>
                        <div class="flex flex-wrap gap-2">
                            <span class="px-2 py-1 bg-teal-600/80 text-xs rounded">React Native</span>
                            <span class="px-2 py-1 bg-teal-700/80 text-xs rounded">Firebase</span>
                        </div>
                    </div>

                    <!-- Project Card 6 -->
                    <div class="bg-black/30 backdrop-blur-sm rounded-lg shadow-2xl p-6 border border-white/10 hover:border-teal-400/30 transition-all duration-300 hover:transform hover:scale-105">
                        <div class="h-40 bg-gradient-to-br from-gray-800 to-teal-900 rounded-lg mb-4 flex items-center justify-center">
                            <span class="text-gray-300">Project Image</span>
                        </div>
                        <h3 class="text-xl font-semibold text-white mb-2">Blog Platform</h3>
                        <p class="text-gray-300 text-sm mb-3">Content management system for bloggers and content creators.</p>
                        <div class="flex flex-wrap gap-2">
                            <span class="px-2 py-1 bg-teal-600/80 text-xs rounded">Vue.js</span>
                            <span class="px-2 py-1 bg-teal-700/80 text-xs rounded">Laravel</span>
                        </div>
                    </div>

                    <!-- Project Card 7 -->
                    <div class="bg-black/30 backdrop-blur-sm rounded-lg shadow-2xl p-6 border border-white/10 hover:border-teal-400/30 transition-all duration-300 hover:transform hover:scale-105">
                        <div class="h-40 bg-gradient-to-br from-gray-800 to-teal-900 rounded-lg mb-4 flex items-center justify-center">
                            <span class="text-gray-300">Project Image</span>
                        </div>
                        <h3 class="text-xl font-semibold text-white mb-2">Analytics Dashboard</h3>
                        <p class="text-gray-300 text-sm mb-3">Data visualization and analytics platform for business insights.</p>
                        <div class="flex flex-wrap gap-2">
                            <span class="px-2 py-1 bg-teal-600/80 text-xs rounded">React</span>
                            <span class="px-2 py-1 bg-teal-700/80 text-xs rounded">D3.js</span>
                        </div>
                    </div>

                    <!-- Project Card 8 -->
                    <div class="bg-black/30 backdrop-blur-sm rounded-lg shadow-2xl p-6 border border-white/10 hover:border-teal-400/30 transition-all duration-300 hover:transform hover:scale-105">
                        <div class="h-40 bg-gradient-to-br from-gray-800 to-teal-900 rounded-lg mb-4 flex items-center justify-center">
                            <span class="text-gray-300">Project Image</span>
                        </div>
                        <h3 class="text-xl font-semibold text-white mb-2">Learning Platform</h3>
                        <p class="text-gray-300 text-sm mb-3">Online education platform with courses and interactive lessons.</p>
                        <div class="flex flex-wrap gap-2">
                            <span class="px-2 py-1 bg-teal-600/80 text-xs rounded">Vue.js</span>
                            <span class="px-2 py-1 bg-teal-700/80 text-xs rounded">Node.js</span>
                        </div>
                    </div>
                </div>
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