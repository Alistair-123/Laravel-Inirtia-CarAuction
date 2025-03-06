<script setup>
import { ref, computed } from "vue";
import AppLayout from "@/Layouts/AppLayout.vue";

const props = defineProps({
  bidders: Array,
});

const search = ref("");

const filteredBidders = computed(() =>
  props.bidders.filter(
    (bidder) =>
      bidder.first_name.toLowerCase().includes(search.value.toLowerCase()) ||
      bidder.last_name.toLowerCase().includes(search.value.toLowerCase()) ||
      bidder.email.toLowerCase().includes(search.value.toLowerCase())
  )
);
</script>

<template>
  <AppLayout>
    <div class="p-6">
      <h1 class="text-2xl font-bold">Bidders List</h1>
      <input
        type="text"
        v-model="search"
        placeholder="Search bidders..."
        class="mt-2 p-2 border rounded"
      />
      <div class="mt-4">
        <div
          v-for="bidder in filteredBidders"
          :key="bidder.id"
          class="p-4 mb-2 bg-white rounded shadow"
        >
          <p><strong>Name:</strong> {{ bidder.first_name }} {{ bidder.last_name }}</p>
          <p><strong>Address:</strong> {{ bidder.address }}</p>
          <p><strong>Email:</strong> {{ bidder.email }}</p>
        </div>
      </div>
    </div>
  </AppLayout>
</template>
