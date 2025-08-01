<template>
    <!-- Circular navigation buttons on the right side -->
    <div class="slider-nav">
        <button 
            v-for="(item, index) in navItems" 
            :key="index"
            @click="navigateWithDistortion(item.href)" 
            class="nav-circle" 
            :class="{ active: isCurrentPage(item.href) }"
            :title="item.name"
        ></button>
    </div>

    <!-- Elegant loader overlay for page transitions -->
    <div 
        v-if="isTransitioning" 
        class="loader-overlay"
        :class="{ 'loader-active': isTransitioning }"
    >
        <div class="loader-content">
            <div class="loader-logo">
                <span class="logo-text">owencodes</span>
            </div>
            <div class="loader-progress">
                <div class="progress-bar">
                    <div class="progress-fill"></div>
                </div>
                <div class="progress-text">Loading...</div>
            </div>
        </div>
    </div>
</template>

<script setup lang="ts">
import { ref } from 'vue';
import { router } from '@inertiajs/vue3';

const isTransitioning = ref(false);

const navItems = [
    { name: 'Home', href: '/' },
    { name: 'Projects', href: '/projects' },
    { name: 'Blogs', href: '/blogs' },
    { name: 'Contact', href: '/contact' }
];

const navigateWithDistortion = async (href: string) => {
    if (isTransitioning.value || isCurrentPage(href)) return;
    
    // Start loader effect
    isTransitioning.value = true;
    
    // Wait for loader animation to complete
    await new Promise(resolve => setTimeout(resolve, 1200));
    
    // Navigate to new page
    router.visit(href);
    
    // Reset transition state after navigation
    setTimeout(() => {
        isTransitioning.value = false;
    }, 100);
};

const isCurrentPage = (href: string) => {
    return window.location.pathname === href;
};
</script>

<style scoped>
/* Circular navigation on the right side */
.slider-nav {
    position: fixed;
    right: 2rem;
    top: 50%;
    transform: translateY(-50%);
    display: flex;
    flex-direction: column;
    gap: 1rem;
    z-index: 50;
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

/* Elegant loader overlay styles - inspired by Eve Kayser's website */
.loader-overlay {
    position: fixed;
    top: 0;
    left: 0;
    width: 100%;
    height: 100%;
    background: #f8f9fa;
    z-index: 9999;
    opacity: 0;
    pointer-events: none;
    transition: opacity 0.4s ease;
    display: flex;
    align-items: center;
    justify-content: center;
}

.loader-overlay.loader-active {
    opacity: 1;
    pointer-events: all;
}

.loader-content {
    text-align: center;
    max-width: 300px;
}

.loader-logo {
    margin-bottom: 2rem;
}

.logo-text {
    font-size: 2rem;
    font-weight: 700;
    color: #212529;
    letter-spacing: -0.02em;
    opacity: 0;
    animation: logoFadeIn 0.6s ease forwards 0.2s;
}

.loader-progress {
    margin-top: 2rem;
}

.progress-bar {
    width: 200px;
    height: 2px;
    background: #e9ecef;
    border-radius: 1px;
    overflow: hidden;
    margin: 0 auto 1rem;
}

.progress-fill {
    height: 100%;
    background: #212529;
    width: 0%;
    animation: progressFill 1.2s ease forwards 0.4s;
}

.progress-text {
    font-size: 0.875rem;
    color: #6c757d;
    font-weight: 500;
    opacity: 0;
    animation: textFadeIn 0.6s ease forwards 0.6s;
}

@keyframes logoFadeIn {
    0% {
        opacity: 0;
        transform: translateY(10px);
    }
    100% {
        opacity: 1;
        transform: translateY(0);
    }
}

@keyframes progressFill {
    0% {
        width: 0%;
    }
    100% {
        width: 100%;
    }
}

@keyframes textFadeIn {
    0% {
        opacity: 0;
        transform: translateY(5px);
    }
    100% {
        opacity: 1;
        transform: translateY(0);
    }
}

/* Add subtle background pattern */
.loader-overlay::before {
    content: '';
    position: absolute;
    top: 0;
    left: 0;
    width: 100%;
    height: 100%;
    background-image: 
        radial-gradient(circle at 25% 25%, rgba(0,0,0,0.02) 0%, transparent 50%),
        radial-gradient(circle at 75% 75%, rgba(0,0,0,0.02) 0%, transparent 50%);
    pointer-events: none;
}
</style> 