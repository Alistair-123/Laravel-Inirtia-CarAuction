<script setup>
import { Link } from "@inertiajs/vue3";
</script>

<template>
  <nav class="bg-blue-600 text-white p-4 flex justify-between items-center">
    <div class="text-xl font-bold">Laravel-Inertia App</div>
    <div>
      <Link href="/" class="mr-4 hover:underline">Home</Link>
      <Link href="/bidders" class="mr-4 hover:underline">Bidders</Link>
      <Link href="/cars" class="hover:underline">Cars</Link>
    </div>
  </nav>
</template>
