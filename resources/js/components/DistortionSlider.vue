<template>
    <div class="distortion-slider">
        <div class="slider-content">
            <div class="slide" v-for="(slide, index) in slides" :key="index" :class="{ active: currentSlide === index }">
                <div class="slide-content">
                    <h2 class="text-3xl font-bold mb-4">{{ slide.title }}</h2>
                    <p class="text-lg">{{ slide.description }}</p>
                </div>
            </div>
        </div>
        
        <!-- Circular navigation buttons on the right side -->
        <div class="slider-nav">
            <button 
                v-for="(slide, index) in slides" 
                :key="index"
                @click="goTo(index)" 
                class="nav-circle" 
                :class="{ active: currentSlide === index }"
                :title="slide.title"
            ></button>
        </div>
        
        <div class="made-by">
            <p class="text-white text-sm opacity-70">Made by owencodes</p>
        </div>
    </div>
</template>

<script setup>
import { ref } from 'vue';

const currentSlide = ref(0);

const slides = ref([
    {
        title: 'Home',
        description: 'Welcome to my portfolio. I\'m a passionate developer creating amazing digital experiences.'
    },
    {
        title: 'Projects',
        description: 'A showcase of my latest work and creative projects.'
    },
    {
        title: 'Blogs',
        description: 'Thoughts, tutorials, and insights about web development and technology.'
    },
    {
        title: 'Services',
        description: 'Professional services I offer to help bring your ideas to life.'
    },
    {
        title: 'Contact',
        description: 'Let\'s work together! Get in touch to discuss your next project.'
    }
]);

const goTo = (index) => {
    currentSlide.value = index;
};

// Expose the goTo method for parent component
defineExpose({
    goTo
});
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
    opacity: 0;
    transition: opacity 0.5s ease-in-out;
}

.slide.active {
    opacity: 1;
}

.slide-content {
    text-align: center;
    max-width: 600px;
    padding: 2rem;
}

/* Circular navigation on the right side */
.slider-nav {
    position: absolute;
    right: 2rem;
    top: 50%;
    transform: translateY(-50%);
    display: flex;
    flex-direction: column;
    gap: 1rem;
    z-index: 10;
}

.nav-circle {
    width: 12px;
    height: 12px;
    border-radius: 50%;
    background: rgba(255, 255, 255, 0.3);
    border: 2px solid rgba(255, 255, 255, 0.5);
    cursor: pointer;
    transition: all 0.3s ease;
    outline: none;
}

.nav-circle:hover {
    background: rgba(255, 255, 255, 0.5);
    transform: scale(1.2);
}

.nav-circle.active {
    background: rgba(255, 255, 255, 0.8);
    border-color: rgba(255, 255, 255, 1);
    transform: scale(1.3);
}

.made-by {
    position: absolute;
    bottom: 2rem;
    left: 50%;
    transform: translateX(-50%);
    text-align: center;
}
</style> 