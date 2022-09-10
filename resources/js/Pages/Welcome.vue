<script setup>
import { Head, Link } from "@inertiajs/inertia-vue3";
import FrontendLayout from "@/Layouts/Frontend.vue";
import Hero from "@/Components/Frontend/Hero.vue";
import Promote from "@/Components/Frontend/Promote.vue";
import About from "@/Components/Frontend/About.vue";
import Skills from "@/Components/Frontend/Skills.vue";
import Portfolio from "@/Components/Frontend/Portfolio.vue";
import Services from "@/Components/Frontend/Services.vue";
import ContactMe from "../Components/Frontend/ContactMe.vue";

defineProps({
  skills: Object,
  projects: Object,
});
</script>

<template>
  <Head title="Welcome to portfolio" />
  <FrontendLayout>
    <!-- Hero primary -->
    <Hero />
    <!-- Promote tail-100 -->
    <Promote />
    <!-- About secondary -->
    <About />
    <!-- Skills tail-100 -->
    <Skills :skills="skills" />
    <!-- Portfolio primary -->
    <Portfolio :skills="skills" :projects="projects" />
    <!-- Services secondary -->
    <Services />
    <!-- Contact primary -->
    <ContactMe />
  </FrontendLayout>
</template>
