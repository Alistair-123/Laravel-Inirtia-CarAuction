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
      <p>Name: Alistair jan loberternos</p>
      <p>Course: BSIT</p>
      <p>Year: 3rd Year</p>
    </AppLayout>
  </template>
