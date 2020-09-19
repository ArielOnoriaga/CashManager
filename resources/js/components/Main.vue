<template>
  <div class="width-of-main flex pl-4 pt-8">
    <div class="flex h-48 flex-wrap container-info-cartera">
      <div class="flex justify-between w-full">
        <div class="w-56 flex flex-wrap justify-start items-center h-16 pl-2 bg-pink-100 bg-opacity-50 shadow-sm rounded">
          <h5 class="w-full text-lg">
            Saldo Actual: $<b>{{ saldoActual }}</b>
          </h5>

          <h5 class="w-full text-lg">
            Flujo de dinero: $<b>{{ totalRandom }}</b>
          </h5>
        </div>

        <div class="w-56 h-16 bg-pink-100 bg-opacity-50 shadow-sm rounded flex flex-wrap items-center justify-center px-2">
          <h5 class="w-full mb-1 text-lg">
            Mayor ingreso : $ <b class="text-green-500"> 3.500 </b>
          </h5>
          <h5 class="w-full mb-1 text-lg">
            Mayor egreso : $ <b class="text-red-500"> 3.500 </b>
          </h5>
        </div>
      </div>

      <div class="w-full h-32 bg-pink-100 bg-opacity-50 shadow-sm mt-4 p-2 items-center justify-start rounded flex flex-wrap">
        <div class="w-11/12 flex flex-wrap">
          <label
            for="ingresosEgresos"
            class="w-full text-sm font-light"
          >
            Actualizar ingresos/egresos
          </label>

          <input
            id="ingresosEgresos"
            v-model="ingresosEgresos"
            type="number"
            placeholder="4000"
            class="bg-pink-200 placeholder-pink-100 rounded-md pl-2 w-full"
          >
        </div>

        <div class="w-11/12 flex items-center justify-between">
          <div class="w-3/5 flex flex-wrap">
            <label
              for="ingresosEgresos"
              class="w-full text-sm font-light"
            >
              Tipo
            </label>

            <select
              id="ingresosEgresos"
              v-model="tipoDeIngresoEgreso"
              type="number"
              placeholder="4000"
              class="bg-pink-200 placeholder-pink-100 rounded-md font-light text-pink-600 px-2 py-1 w-full"
            >
              <option
                id="1"
                value="comida"
              >
                Comida
              </option>

              <option
                id="2"
                value="Bebidas"
              >
                Bebidas
              </option>
            </select>
          </div>

          <div class="w-auto h-6 mt-5">
            <button
              class="rounded-full font-semibold bg-green-300 text-black text-opacity-75 px-3"
              @click="ingresoDeDinero"
            >
              Ingreso
            </button>

            <button class="rounded-full font-semibold bg-red-400 text-black opacity-75 px-3">
              Egreso
            </button>
          </div>
        </div>
      </div>
    </div>
  </div>
</template>

<script>
import axios from 'axios';

export default {
  name:"Main",

  data() {
    return {
      saldoActual: 6000,
      flujoDeDinero: 2000,
      ingresosEgresos: 0,
      tipoDeIngresoEgreso: ''
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
  },

  methods: {
    ingresoDeDinero() {
      axios
        .post("/IngresoDeDinero", {
          ingreso: this.ingresosEgresos,
          tipo: this.tipoDeIngresoEgreso
        })
        .then(resolve => {
          console.log(resolve.data);
        });
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
