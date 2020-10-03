<template>
  <div class="flex w-full h-screen flex-wrap items-start overflow-hidden">
    <VHeader />

    <div class="w-full flex">
      <VDashboad />

      <Main />
    </div>
  </div>
</template>

<script>
import VHeader from "../js/components/VHeader";
import VDashboad from "../js/components/VDashboard";
import Main from "../js/components/Main";

export default {
  components: {
    Main,
    VHeader,
    VDashboad,
  }
};
</script>
