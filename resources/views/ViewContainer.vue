<template>
  <div class="flex w-full h-screen flex-wrap items-start overflow-hidden">
    <VHeader />

    <div class="w-full flex">
      <VDashboad />

      <slot />
    </div>
  </div>
</template>

<script>
import VHeader from "../js/components/VHeader";
import VDashboad from "../js/components/VDashboard";

export default {
  components: {
    VHeader,
    VDashboad,
  }
};
</script>
