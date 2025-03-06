<script setup>
import AppLayout from "@/Layouts/AppLayout.vue";

defineProps({
  name: String,
  course: String,
  year: String,
});
</script>


<template>
    <AppLayout>
      <h1 class="text-2xl font-bold">Welcome!</h1>
      <p>Name: Your Name</p>
      <p>Course: Your Course</p>
      <p>Year: Your Year</p>
    </AppLayout>
  </template>
