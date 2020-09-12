<template>
  <div class="h-full width-of-main flex pl-4 pt-8">
    <div class="flex h-48 flex-wrap container-info-cartera">
      <div class="flex justify-between w-full">
        <div class="w-56 flex flex-wrap justify-start items-center h-16 pl-2 bg-red-400 rounded">
          <h5 class="w-full text-lg">
            Saldo Actual: $<b>{{ saldoActual }}</b>
          </h5>

          <h5 class="w-full text-lg">
            Flujo de dinero: $<b>{{ totalRandom }}</b>
          </h5>
        </div>

        <div class="w-56 h-16 bg-green-400 rounded" />
      </div>

      <div class="w-full h-24 bg-blue-400 mt-4 rounded" />
    </div>
  </div>
</template>

<script>
export default {
  name:"Main",

  data() {
    return {
      saldoActual: 6000,
      flujoDeDinero: 2000,
    };
  },

  computed: {
    totalRandom() {
      return this.saldoActual + 5000;
    }
  },

  watch: {
    totalRandom(newValue, oldValue) {
      console.log(newValue, oldValue);
    }
  }
};
</script>

<style scoped>
.width-of-main {
  width: calc(100vw - 3rem);
}

.container-info-cartera {
  width: 32rem;
}

</style>
