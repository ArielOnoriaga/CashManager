<template>
  <div class="width-of-main flex pl-4 pt-8 mt-2 flex-col space-y-10">
    <div class="flex h-48 flex-col container-info-cartera w-full">
      <VTabs
        :saldo-actual="saldoActual"
        :mayor-egreso="maxEgreso"
        :mayor-ingreso="maxIngreso"
      />

      <VFlujo
        @actualizarListaDeIngresos="getingresos"
        @actualizarListaDeEgresos="getEgresos"
      />
    </div>

    <div
      class="w-full flex flex-col rounded-md p-2 bg-opacity-50"
      :class="isIncome ? 'bg-green-50' : 'bg-pink-50'"
    >
      <div
        class="mb-4 flex space-x-4 items-center"
        :class="isIncome ? 'text-green-500' : 'text-red-500'"
      >
        <p class="text-lg font-semibold w-20">
          {{ isIncome ? "Ingreso" : "Egreso" }}
        </p>

        <div
          class="w-12 h-5 rounded-full relative px-1 py-2 flex items-center cursor-pointer"
          :class="isIncome ? 'bg-green-300' : 'bg-red-300'"
          @click="isIncome = !isIncome"
        >
          <div
            class="h-4 w-4 rounded-full bg-red-50 absolute transition duration-150"
            :class="isIncome ? 'bg-green-50' : 'bg-red-50'"
            :style="isIncome ? 'left: .2rem' : 'right: .2rem'"
          />
        </div>
      </div>

      <area-chart
        class="w-full"
        :colors="isIncome ? ['#84E1BC'] : ['#E02424']"
        :data="isIncome ? ingresosList.map(item => [item.fecha, item.ingreso]) : egresosList.map(item => [item.fecha, item.egreso])"
      />
    </div>
  </div>
</template>

<script>
Array.prototype.isEmpty = function () {
  return !this.length ? true : false;
};
import axios from 'axios';

import VFlujo from "./VFlujo";
import VTabs from "./VTabs";

export default {
  name:"Main",

  components: {
    VFlujo,
    VTabs,
  },

  data() {
    return {
      ingresosList: [],
      egresosList: [],
      isIncome: true,
    };
  },

  computed: {
    ingresosTotales() {
      return !this.ingresosList.isEmpty() ? this.calcularSaldoMaximo() : '';
    },

    maxIngreso() {
      return !this.ingresosList.isEmpty() ? this.ingresosList[0].ingreso : 0;
    },

    maxEgreso() {
      return !this.egresosList.isEmpty() ? this.egresosList[0].egreso : 0;
    },

    gastosTotales() {
      return this.egresosList ? this.calcularGastosTotales() : '';
    },

    saldoActual() {
      return this.ingresosTotales - this.gastosTotales;
    }
  },

  watch: {
    isIncome(newValue, oldValue) {
      return newValue;
    },

    saldoActual(newValue, oldValue) {
      return newValue;
    },

    loading(newValue, oldValue) {
      return newValue;
    }
  },

  mounted() {
    this.getingresos();
    this.getEgresos();
  },

  methods: {
    getingresos() {
      axios
        .get(`/api/bringAllIncome`)
        .then(response => this.ingresosList =  response.data);
    },

    getEgresos() {
      axios
        .get(`/api/bringAllDeparture`)
        .then(response => this.egresosList =  response.data);
    },

    calcularSaldoMaximo() {
      let countIngreso = 0;

      this.ingresosList.map(ingreso => countIngreso += ingreso.ingreso);

      return countIngreso;
    },

    calcularGastosTotales() {
      let gastosCounter = 0;

      this.egresosList.map(egreso => gastosCounter += egreso.egreso);

      return gastosCounter;
    }
  }
};
</script>

<style scoped>
.width-of-main {
  width: calc(100vw - 4rem);
  height: calc(100vh - 2.9rem);
}

.container-info-cartera {
  width: 32rem;
}
</style>
