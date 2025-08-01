<template>
    <div class="distortion-slider">
        <div class="slider-content">
            <!-- Content is now directly on individual pages -->
            <div class="slide active">
                <div class="slide-content">
                    <h2 class="text-3xl font-bold mb-4">Welcome</h2>
                    <p class="text-lg">Content has been moved to individual pages for better organization.</p>
                </div>
            </div>
        </div>
        
        <div class="made-by">
            <p class="text-white text-sm opacity-70">Made by owencodes</p>
        </div>
    </div>
</template>

<script setup lang="ts">
// Component simplified since content is now on individual pages
</script>

<style scoped>
.distortion-slider {
    position: relative;
    width: 100%;
    height: 100vh;
    display: flex;
    align-items: center;
    justify-content: center;
}

.slider-content {
    position: relative;
    width: 100%;
    height: 100%;
}

.slide {
    position: absolute;
    top: 0;
    left: 0;
    width: 100%;
    height: 100%;
    display: flex;
    align-items: center;
    justify-content: center;
    opacity: 1;
}

.slide-content {
    text-align: center;
    max-width: 600px;
    padding: 2rem;
}

.made-by {
    position: absolute;
    bottom: 2rem;
    left: 50%;
    transform: translateX(-50%);
    text-align: center;
}
</style> 