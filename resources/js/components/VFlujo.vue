<template>
  <div class="w-full h-32 bg-pink-50 bg-opacity-50 shadow-sm mt-4 p-2 items-center justify-start rounded flex flex-wrap">
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
      <div class="w-1/2 flex flex-wrap">
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
            v-for="tipo in tipos"
            :id="tipo.id"
            ref="selectType"
            :key="tipo.id"
            :value="tipo.nombre"
          >
            {{ tipo.nombre }}
          </option>
        </select>
      </div>

      <div class="w-auto h-6 mt-5 flex items-center space-x-2">
        <DatePicker
          v-model="fechaDeRegistro"
          :popover="{ placement: 'bottom', visibility: 'click' }"
        >
          <button class="p-2 bg-blue-500 hover:bg-blue-600 text-white rounded focus:outline-none">
            <VueHicons
              name="calendar"
              :filled="true"
              clip-rule="evenodd"
              fill-rule="evenodd"
              :stroke-width="0"
              view-box="0 0 20 20"
              fill-color="#FFF"
              :width-icon="6"
            />
          </button>
        </DatePicker>

        <button
          class="rounded-full font-semibold bg-green-300 text-black text-opacity-75 px-3"
          @click="ingresoDeDinero"
        >
          Ingreso
        </button>

        <button
          class="rounded-full font-semibold bg-red-400 text-black opacity-75 px-3"
          @click="egresoDeDinero"
        >
          Egreso
        </button>
      </div>
    </div>
  </div>
</template>

<script>
import DatePicker from 'v-calendar/lib/components/date-picker.umd';
import VueHicons from "vue-hicons";
import moment from "moment";

import axios from "axios";

export default {
  name: "VFlujo",

  components: {
    DatePicker,
    VueHicons
  },

  data() {
    return {
      ingresosEgresos: 0,
      tipoDeIngresoEgreso: '',
      fechaDeRegistro: '',
      tipos: [],
      selectIdSelected: 0
    };
  },

  watch: {
    fechaDeRegistro(newValue, oldValue) {
      return newValue;
    },

    tipoDeIngresoEgreso(newValue, oldValue) {
      this.$refs.selectType.forEach(select => {
        if(select.selected)
          this.selectIdSelected = select.id;
      });
    }
  },

  mounted() {
    this.getTypesList();
  },

  methods: {
    ingresoDeDinero() {
      let parseDateToIso = moment(this.fechaDeRegistro).toISOString();

      axios
        .post("/IngresoDeDinero", {
          ingreso: this.ingresosEgresos,
          tipo: this.tipoDeIngresoEgreso,
          fecha: parseDateToIso,
          id_tipo: this.selectIdSelected
        })
        .then(resolve => {
          this.$emit("actualizarListaDeIngresos");
        });
    },

    getTypesList() {
      axios
        .get("/api/getTypes")
        .then(response => this.tipos = response.data);
    },

    egresoDeDinero() {
      let parseDateToIso = moment(this.fechaDeRegistro).toISOString();

      axios
        .post("/EgresoDeDinero", {
          egreso: this.ingresosEgresos,
          tipo: this.tipoDeIngresoEgreso,
          fecha: parseDateToIso,
          id_tipo: this.selectIdSelected
        })
        .then(resolve => {
          this.$emit("actualizarListaDeEgresos");
        });
    },
  }
};
</script>

<style>

</style>
