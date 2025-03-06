<script setup>
import { ref, computed } from "vue";
import AppLayout from "@/Layouts/AppLayout.vue";

const props = defineProps({
  cars: Array,
});

const search = ref("");

const filteredCars = computed(() =>
  props.cars.filter(
    (car) =>
      car.make.toLowerCase().includes(search.value.toLowerCase()) ||
      car.model.toLowerCase().includes(search.value.toLowerCase()) ||
      car.year.toString().includes(search.value)
  )
);
</script>

<template>
    <AppLayout>
      <div class="p-6">
        <h1 class="text-2xl font-bold">Cars List</h1>
        <input
          type="text"
          v-model="search"
          placeholder="Search cars..."
          class="mt-2 p-2 border rounded"
        />
        <div class="mt-4 grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 lg:grid-cols-2 gap-4">
          <div
            v-for="car in filteredCars"
            :key="car.id"
            class="p-4 bg-blue-500 text-white rounded shadow"
          >
            <p><strong>Make:</strong> {{ car.make }}</p>
            <p><strong>Model:</strong> {{ car.model }}</p>
            <p><strong>Year:</strong> {{ car.year }}</p>
            <p><strong>Miles:</strong> {{ car.miles }}</p>
          </div>
        </div>
      </div>
    </AppLayout>
  </template>
