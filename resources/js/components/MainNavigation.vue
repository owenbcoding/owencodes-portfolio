<script setup lang="ts">
import { Link } from '@inertiajs/vue3';

const navItems = [
    { name: 'Projects', href: '/projects' },
    { name: 'Blogs', href: '/blogs' },
    { name: 'Contact', href: '/contact' }
];

const toggleDarkMode = () => {
    const html = document.documentElement;
    html.classList.toggle('dark');
};
</script>

<template>
    <nav
        class="fixed top-0 right-0 left-0 z-50 border-b border-teal-500/20 bg-white/10 shadow-[inset_0_0_8px_rgba(255,255,255,0.1),0_0_15px_rgba(45,212,191,0.15)] backdrop-blur-xl"
    >
        <div class="mx-auto flex h-14 max-w-6xl items-center justify-between px-6">
            <!-- Left: Logo + Brand -->
            <Link
                href="/"
                class="flex items-center gap-2 text-teal-400 font-bold text-lg hover:text-teal-300 transition-colors duration-200"
            >
                <img src="/images/logo.png" alt="Logo" class="w-6 h-6 object-contain" />
                Owencodes
            </Link>

            <!-- Center: Nav Links -->
            <ul class="flex space-x-2">
                <li v-for="item in navItems" :key="item.name">
                    <Link
                        :href="item.href"
                        class="rounded-full px-4 py-2 font-medium text-gray-200 transition-colors duration-200 hover:bg-white/10 hover:text-teal-400"
                    >
                        {{ item.name }}
                    </Link>
                </li>
            </ul>

            <!-- Right: GitHub + Dark Mode Toggle -->
            <div class="flex items-center gap-3">
                <!-- GitHub -->
                <a
                    href="https://github.com/owenbcoding"
                    target="_blank"
                    class="inline-flex items-center rounded-full border border-teal-500/30 bg-teal-600/80 px-3 py-2 font-medium text-white transition-all duration-200 hover:border-teal-400/50 hover:bg-teal-500"
                >
                    Github
                    <svg class="ml-2 h-4 w-4" fill="currentColor" viewBox="0 0 24 24">
                        <path
                            d="M12 .5C5.3.5 0 5.8 0 12.4c0 5.3 3.4 9.8 8.2 11.4.6.1.8-.3.8-.6v-2.1c-3.3.7-4-1.6-4-1.6-.5-1.2-1.3-1.5-1.3-1.5-1.1-.8.1-.8.1-.8 1.3.1 2 1.4 2 1.4 1.1 2 2.9 1.4 3.6 1.1.1-.8.4-1.4.7-1.7-2.6-.3-5.4-1.3-5.4-5.8 0-1.3.5-2.3 1.2-3.2-.1-.3-.5-1.4.1-2.8 0 0 1-.3 3.3 1.2a11.3 11.3 0 0 1 6 0c2.3-1.5 3.3-1.2 3.3-1.2.6 1.4.2 2.5.1 2.8.7.9 1.2 1.9 1.2 3.2 0 4.5-2.8 5.4-5.4 5.8.4.4.8 1.1.8 2.2v3.3c0 .3.2.7.8.6 4.8-1.6 8.2-6.1 8.2-11.4C24 5.8 18.7.5 12 .5z"
                        />
                    </svg>
                </a>

                <!-- Dark Mode Toggle -->
                <button
                    @click="toggleDarkMode"
                    class="text-gray-200 hover:text-white p-2 rounded-full transition duration-200 hover:bg-white/10"
                    aria-label="Toggle Dark Mode"
                >
                    <svg
                        class="w-5 h-5"
                        fill="currentColor"
                        viewBox="0 0 24 24"
                    >
                        <path
                            d="M17.293 13.293A8 8 0 1110.707 6.707 6 6 0 1017.293 13.293z"
                        />
                    </svg>
                </button>
            </div>
        </div>
    </nav>
</template>
