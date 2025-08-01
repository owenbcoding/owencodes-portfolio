<script setup lang="ts">
import { Link } from '@inertiajs/vue3';

const navItems = [
    { name: 'Projects', href: '/projects' },
    { name: 'Blogs', href: '/blogs' },
    { name: 'Contact', href: '/contact' }
];
</script>

<template>
    <nav class="fixed top-0 left-0 w-full bg-black/80 backdrop-blur-md border-b border-teal-500/20 z-50">
        <div class="max-w-6xl mx-auto flex items-center justify-between h-16 px-4">
            <!-- Left side - Brand name -->
            <Link
                href="/"
                class="text-teal-400 font-bold text-lg hover:text-teal-300 transition-colors duration-200"
            >
                Owencodes
            </Link>

            <!-- Center - Navigation links -->
            <ul class="flex space-x-8">
                <li v-for="item in navItems" :key="item.name">
                    <Link
                        :href="item.href"
                        class="text-gray-200 hover:text-teal-400 transition-colors duration-200 font-medium"
                    >
                        {{ item.name }}
                    </Link>
                </li>
            </ul>

            <!-- Right side - GitHub button -->
            <a
                href="https://github.com/owenbcoding"
                target="_blank"
                class="inline-flex items-center px-3 py-2 bg-teal-600/80 text-white rounded-full font-medium hover:bg-teal-500 transition-all duration-200 border border-teal-500/30 hover:border-teal-400/50"
            >
            Github
                <svg class="ml-2 h-4 w-4" fill="currentColor" viewBox="0 0 24 24">
                    <path
                        d="M12 .5C5.3.5 0 5.8 0 12.4c0 5.3 3.4 9.8 8.2 11.4.6.1.8-.3.8-.6v-2.1c-3.3.7-4-1.6-4-1.6-.5-1.2-1.3-1.5-1.3-1.5-1.1-.8.1-.8.1-.8 1.3.1 2 1.4 2 1.4 1.1 2 2.9 1.4 3.6 1.1.1-.8.4-1.4.7-1.7-2.6-.3-5.4-1.3-5.4-5.8 0-1.3.5-2.3 1.2-3.2-.1-.3-.5-1.4.1-2.8 0 0 1-.3 3.3 1.2a11.3 11.3 0 0 1 6 0c2.3-1.5 3.3-1.2 3.3-1.2.6 1.4.2 2.5.1 2.8.7.9 1.2 1.9 1.2 3.2 0 4.5-2.8 5.4-5.4 5.8.4.4.8 1.1.8 2.2v3.3c0 .3.2.7.8.6 4.8-1.6 8.2-6.1 8.2-11.4C24 5.8 18.7.5 12 .5z"
                    />
                </svg>
            </a>
        </div>
    </nav>
</template>