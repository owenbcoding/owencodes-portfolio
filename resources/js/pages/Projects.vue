<template>
    <div class="relative flex min-h-screen flex-col overflow-hidden">
        <!-- Background layers -->
        <div class="absolute inset-0 z-0 bg-gradient-to-br from-black via-gray-900 to-teal-900"></div>
        <div class="bg-radial-vignette absolute inset-0 z-0"></div>
        <div class="absolute inset-0 z-0 bg-gradient-to-r from-black/60 via-transparent to-teal-900/40"></div>
        <div class="absolute inset-0 z-0 bg-gradient-to-t from-black/80 via-transparent to-transparent"></div>

        <MainNavigation />

        <div class="relative z-10 container mx-auto flex-1 px-4 py-8 pt-24">
            <h1 class="mb-4 text-center text-4xl font-bold text-white drop-shadow-2xl">Projects</h1>
            <p class="text-center text-gray-300 mb-5 font-bold">Click on a category to filter the projects by technologies.</p>
            <!-- Category switcher -->
            <div class="flex justify-center">
                <div class="flex space-x-1 rounded-xl p-1">
                    <button
                        v-for="(category, index) in categories"
                        :key="category"
                        @click="setActive(index)"
                        :class="[
                            'rounded-lg px-4 py-2 text-sm font-medium transition',
                            activeIndex === index ? 'bg-white text-gray-900 shadow' : 'text-gray-200 hover:bg-gray-700 hover:text-white',
                        ]"
                    >
                        {{ category }}
                    </button>
                </div>
            </div>

            <!-- Grid of styled project cards -->
            <div class="mx-auto max-w-7xl mt-10">
                <div class="grid grid-cols-1 gap-6 md:grid-cols-2 lg:grid-cols-4">
                    <div
                        v-for="project in filteredProjects"
                        :key="project.id"
                        class="rounded-lg border border-white/10 bg-black/30 p-6 shadow-2xl backdrop-blur-sm transition-all duration-300 hover:scale-105 hover:transform hover:border-teal-400/30"
                    >
                        <div class="mb-4 flex h-40 items-center justify-center rounded-lg bg-gradient-to-br from-gray-800 to-teal-900">
                            <span class="text-gray-300">Project Image</span>
                        </div>
                        <h3 class="mb-2 text-xl font-semibold text-white">{{ project.title }}</h3>
                        <p class="mb-3 text-sm text-gray-300">{{ project.description }}</p>
                        <div class="flex flex-wrap gap-2">
                            <span v-for="(tag, i) in project.tags" :key="i" class="rounded bg-teal-600/80 px-2 py-1 text-xs text-white">
                                {{ tag }}
                            </span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <Footer />
    </div>
</template>

<script setup lang="ts">
import Footer from '@/components/Footer.vue';
import MainNavigation from '@/components/MainNavigation.vue';
import { computed, nextTick, onMounted, ref } from 'vue';

interface Project {
    id: number;
    title: string;
    description: string;
    tags: string[];
}

const projects = ref<Project[]>([
    {
        id: 1,
        title: 'E-Commerce Platform',
        description: 'A modern e-commerce solution with advanced features and responsive design.',
        tags: ['React', 'Node.js'],
    },
    {
        id: 2,
        title: 'Task Management App',
        description: 'Collaborative task management with real-time updates and team features.',
        tags: ['Vue.js', 'Laravel'],
    },
    {
        id: 3,
        title: 'Portfolio Website',
        description: 'Personal portfolio showcasing creative work and professional experience.',
        tags: ['React', 'Tailwind'],
    },
    {
        id: 4,
        title: 'Weather Dashboard',
        description: 'Real-time weather information with interactive maps and forecasts.',
        tags: ['JavaScript', 'API'],
    },
    {
        id: 5,
        title: 'Social Media App',
        description: 'Social networking platform with messaging and content sharing.',
        tags: ['React Native', 'Firebase'],
    },
    { id: 6, title: 'Blog Platform', description: 'Content management system for bloggers and content creators.', tags: ['Vue.js', 'Laravel'] },
    {
        id: 7,
        title: 'Analytics Dashboard',
        description: 'Data visualization and analytics platform for business insights.',
        tags: ['React', 'D3.js'],
    },
    {
        id: 8,
        title: 'Learning Platform',
        description: 'Online education platform with courses and interactive lessons.',
        tags: ['Vue.js', 'Node.js'],
    },
]);

const categories = computed(() => ['All', ...new Set(projects.value.flatMap((p) => p.tags))]);
const activeIndex = ref(0);
const itemRefs = ref<HTMLElement[]>([]);
const highlightStyle = ref<{ width: string; left: string }>({ width: '0px', left: '0px' });

const filteredProjects = computed(() => {
    const active = categories.value[activeIndex.value];
    if (active === 'All') return projects.value;
    return projects.value.filter((p) => p.tags.includes(active));
});

function setActive(index: number) {
    activeIndex.value = index;
    nextTick(updateHighlight);
}

function updateHighlight() {
    const el = itemRefs.value[activeIndex.value];
    if (el) {
        highlightStyle.value = {
            width: `${el.offsetWidth}px`,
            left: `${el.offsetLeft}px`,
        };
    }
}

onMounted(() => nextTick(updateHighlight));
</script>

<style scoped>
.bg-radial-vignette {
    background: radial-gradient(circle at center, transparent 0%, rgba(0, 0, 0, 0.3) 50%, rgba(0, 0, 0, 0.8) 100%);
}
</style>
