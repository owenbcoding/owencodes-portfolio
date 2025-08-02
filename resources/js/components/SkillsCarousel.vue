<script setup lang="ts">
const skills = [
  'HTML',
  'CSS',
  'TailwindCSS',
  'Javascript',
  'Laravel',
  'Vue',
  'Node.js',
  'PHP',
  'PostgreSQL',
];

</script>

<template>
  <div class="relative w-full overflow-hidden py-8">
    <div class="flex w-max animate-scroll space-x-8 gap-10">
      <!-- Duplicate the skills list to create seamless loop -->
      <template v-for="n in 1" :key="n">
        <div
          v-for="skill in skills"
          :key="`${n}-${skill}`"
          class="flex-shrink-0 text-xl font-semibold text-teal-300"
        >
          {{ skill }}
        </div>
      </template>
      <template v-for="n in 1" :key="n">
        <div
          v-for="skill in skills"
          :key="`${n}-${skill}`"
          class="flex-shrink-0 text-xl font-semibold text-teal-300"
        >
          {{ skill }}
        </div>
      </template>
    </div>
  </div>
</template>

  <style scoped>
  @keyframes scroll {
    0% {
      transform: translateX(100%);
    }
    100% {
      transform: translateX(-100%);
    }
  }
  .animate-scroll {
    animation: scroll 30s linear infinite;
  }
  </style>