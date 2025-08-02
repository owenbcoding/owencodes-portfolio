<template>
    <div class="relative min-h-screen overflow-hidden flex flex-col">
      <!-- Background layers -->
      <div class="absolute inset-0 bg-gradient-to-br from-black via-gray-900 to-teal-900 z-0"></div>
      <div class="absolute inset-0 bg-radial-vignette z-0"></div>
      <div class="absolute inset-0 bg-gradient-to-r from-black/60 via-transparent to-teal-900/40 z-0"></div>
      <div class="absolute inset-0 bg-gradient-to-t from-black/80 via-transparent to-transparent z-0"></div>
  
      <!-- Navigation stays at the top -->
      <MainNavigation />
  
      <!-- Centered content container -->
      <div class="relative z-10 flex flex-1 items-center justify-center px-4 py-12">
        <div class="text-center max-w-2xl w-full">
          <h1 class="mb-8 text-4xl font-bold text-white drop-shadow-2xl">Contact me</h1>
  
          <div class="mb-12">
            <h2 class="mb-4 text-3xl font-bold text-white drop-shadow-lg">Let's work together!</h2>
            <p class="text-lg text-gray-200 drop-shadow-md">
              I'm always excited to collaborate on new projects. Whether you have a specific idea in mind or need help bringing your vision to life,
              let's start a conversation.
            </p>
          </div>
  
          <!-- Contact form -->
          <form class="space-y-6 bg-black/30 backdrop-blur-sm rounded-lg shadow-2xl p-8 border border-white/10 text-left">
            <div>
              <label for="name" class="block text-sm font-medium text-gray-200">Name</label>
              <input
                type="text"
                id="name"
                name="name"
                class="mt-1 block w-full rounded-md border-gray-600 bg-black/50 text-white placeholder-gray-400 shadow-sm focus:border-teal-400 focus:ring-teal-400 backdrop-blur-sm"
              />
            </div>
            <div>
              <label for="email" class="block text-sm font-medium text-gray-200">Email</label>
              <input
                type="email"
                id="email"
                name="email"
                class="mt-1 block w-full rounded-md border-gray-600 bg-black/50 text-white placeholder-gray-400 shadow-sm focus:border-teal-400 focus:ring-teal-400 backdrop-blur-sm"
              />
            </div>
            <div>
              <label for="message" class="block text-sm font-medium text-gray-200">Message</label>
              <textarea
                id="message"
                name="message"
                rows="4"
                class="mt-1 block w-full rounded-md border-gray-600 bg-black/50 text-white placeholder-gray-400 shadow-sm focus:border-teal-400 focus:ring-teal-400 backdrop-blur-sm"
              ></textarea>
            </div>
            <button
              type="submit"
              class="w-full rounded-md bg-teal-600 px-4 py-2 text-white transition-all duration-200 hover:bg-teal-700 focus:ring-2 focus:ring-teal-500 focus:ring-offset-2 focus:ring-offset-black focus:outline-none shadow-lg hover:shadow-xl"
            >
              Send Message
            </button>
          </form>
        </div>
      </div>
  
      <!-- Footer stays at the bottom -->
      <Footer />
    </div>
  </template>
  
  <script setup lang="ts">
  import MainNavigation from '@/components/MainNavigation.vue';
  import Footer from '@/components/Footer.vue';
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
  