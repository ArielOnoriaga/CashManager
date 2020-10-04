<template>
  <div
    class="bg-pink-200 w-12 flex flex-wrap items-center py-64 h-screen justify-center"
    style="max-height: calc(100vh - 2rem)"
  >
    <div
      v-for="(icon, i) in sections"
      :key="i"
      class="w-10 h-10 bg-pink-400 text-white hover:bg-pink-500 transition duration-150 rounded-md mx-auto cursor-pointer flex items-center justify-center"
      @click="goToRoute(icon.route)"
    >
      <VueHicons
        :name="icon.icon"
        class-icon="text-pink-50"
        :filled="true"
        :width-icon="8"
        :stroke-width="0"
        view-box="0 0 20 20"
        stroke-color="none"
        fill-color="currentColor"
        fill-rule="evenodd"
        fill-rule-path2="evenodd"
        clip-rule-path2="evenodd"
      />
    </div>
  </div>
</template>

<script>
import VueHicons from "vue-hicons";

export default {
  name: "Dashboard",

  components: {
    VueHicons
  },

  data() {
    return {
      sections: [
        {
          icon: "home",
          route: 'Home'
        },
        {
          icon: "currency_dollar",
          route: 'exchange'
        },
        {
          icon: "cog",
          route: "Settings"
        },
        {
          icon: "database",
          route: 'any'
        }
      ]
    };
  },

  methods: {
    goToRoute(route) {
      let currentRoute = this.$router.currentRoute.name;

      if(currentRoute != route)
        this.$router.push(`/${route}`);
    }
  }
};
</script>

