<template>
  <div class="flex justify-between w-full">
    <div class="w-56 flex flex-wrap justify-start items-center h-16 pl-2 bg-pink-100 bg-opacity-50 shadow-sm rounded">
      <h5 class="w-full text-lg">
        Saldo Actual: $ <b :class="saldoActual > 0 ? 'text-green-400' : 'text-red-400'">{{ saldoActual }}</b>
      </h5>

      <h5 class="w-full text-lg">
        Flujo de dinero: $ <b>{{ flujoDeDinero }}</b>
      </h5>
    </div>

    <div class="w-56 h-16 bg-pink-100 bg-opacity-50 shadow-sm rounded flex flex-wrap items-center justify-center px-2">
      <h5 class="w-full mb-1 text-lg">
        Mayor ingreso : $ <b class="text-green-500"> {{ mayorIngreso }} </b>
      </h5>

      <h5 class="w-full mb-1 text-lg">
        Mayor egreso : $ <b class="text-red-500"> {{ mayorEgreso }} </b>
      </h5>
    </div>
  </div>
</template>

<script>
export default {
  props: {
    saldoActual: {
      type: Number,
      default: 0
    },

    mayorIngreso: {
      type: Number,
      default: 0
    },

    mayorEgreso: {
      type: Number,
      default: 0
    }
  },

  data() {
    return {
      flujoDeDinero: 2000,
    };
  }
};
</script>

<style>

</style>
