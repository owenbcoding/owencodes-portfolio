<script setup lang="ts">
import Footer from '@/components/Footer.vue';
import MainNavigation from '@/components/MainNavigation.vue';
import SkillsCarousel from '@/components/SkillsCarousel.vue';
import { Head } from '@inertiajs/vue3';
import { gsap } from 'gsap';
import { onMounted, ref } from 'vue';

const avatar = ref<HTMLImageElement | null>(null);
const fullText = `🚀 I build functional, and well crafted web applications. I’m passionate about writing clean code, designing intuitive interfaces, and solving real-world problems through technology.`;
const displayedText = ref('');

onMounted(() => {
    if (avatar.value) {
        gsap.from(avatar.value, {
            y: -50,
            opacity: 0,
            duration: 1.2,
            ease: 'power2.out',
        });
    }

    // Typewriter animation
    let index = 0;
    const interval = setInterval(() => {
        if (index < fullText.length) {
            displayedText.value += fullText[index];
            index++;
        } else {
            clearInterval(interval);
        }
    }, 40); // Speed in ms per character
});
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
                <h1 class="mt-10 mb-4 text-4xl font-bold text-white drop-shadow-2xl">
                    Hi 👋 Im, Owen <br />
                    Software Engineer.
                </h1>

                <div class="mt-2 flex flex-col items-center justify-center gap-8 md:flex-row">
                    <img
                        ref="avatar"
                        src="/images/happy-selfie.png"
                        class="flex flex-col items-center justify-center gap-8 rounded-full opacity-90 mix-blend-screen md:flex-row"
                        style="
                            mask-image: linear-gradient(to bottom right, rgba(0, 0, 0, 0) 0%, black 100%);
                            -webkit-mask-image: linear-gradient(to bottom right, rgba(0, 0, 0, 0) 0%, black 80%);
                        "
                        alt="logo"
                    />

                    <div class="mt-5 flex w-full flex-col items-center md:ml-10 md:w-1/2 md:items-start">
                        <div class="mx-auto flex flex-col items-center justify-center gap-2">
                            <h2 class="text-2xl font-bold text-white drop-shadow-2xl">GitHub Stats</h2>
                            <img
                                src="https://github-readme-stats.vercel.app/api?username=owenbcoding&show_icons=true&theme=tokyonight"
                                alt="owenbcoding stats"
                            />
                        </div>
                        <p
                            class="mt-10 mb-8 max-w-prose text-lg leading-loose whitespace-pre-line text-gray-200 drop-shadow-md md:text-xl"
                            style="min-height: 160px; overflow: hidden"
                        >
                            {{ displayedText }}
                        </p>
                    </div>
                </div>
            </div>
            <h2 class="mt-10 text-center text-3xl font-semibold">MY Skills</h2>
            <SkillsCarousel class="mt-5" />
        </div>
        <Footer />
    </div>
</template>

<style scoped>
.bg-radial-vignette {
    background: radial-gradient(circle at center, transparent 0%, rgba(0, 0, 0, 0.3) 50%, rgba(0, 0, 0, 0.8) 100%);
}
</style>
