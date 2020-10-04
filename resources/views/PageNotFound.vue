<template>
  <div class="flex w-screen h-screen bg-pink-300 items-center justify-center flex-col">
    <h1 class="text-4xl text-white font-bold">
      404
    </h1>

    <div class="flex flex-wrap space-y-4">
      <h5 class="text-2xl text-white font-semibold w-full text-center">
        Pagina no encontrada
      </h5>

      <button
        class="w-11/12 mx-auto rounded-full bg-pink-500 hover:bg-pink-600 transition duration-150 cursor-pointer text-center p-4 text-white font-bold text-xl"
        @click="volverAInicio"
      >
        Volver al inicio
      </button>
    </div>
  </div>
</template>

<script>
export default {
  methods: {
    volverAInicio() {
      this.$router.push('/home');
    }
  }
};
</script>

<style>

</style>
