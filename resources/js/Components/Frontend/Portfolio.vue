<script setup>
import Projects from "./Projects.vue";
defineProps({
  skills: Object,
  projects: Object,
});
</script>
<template>
  <section
    id="portfolio"
    class="section bg-light-primary dark:bg-dark-primary min-h-[1400px]"
  >
    <div class="container mx-auto">
      <div class="flex flex-col items-center text-center">
        <h2 class="section-title">My latest work</h2>
        <p class="subtitle">
          Lorem ipsum dolor sit amet consectetur adipisicing elit. Fuga veniam
          labore nisium illum cupiditate reiciendis a numquam
        </p>
      </div>
    </div>
    <Projects :skills="skills" :projects="projects" />
  </section>
</template>