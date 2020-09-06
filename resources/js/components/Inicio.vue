<template>
  <div class="flex w-full flex-wrap">
    <div class="flex justify-between items-center h-10 bg-pink-300 w-full">
      <h3 class="w-auto ml-4 font-semibold text-lg cursor-pointer text-pink-600">
        Mi chanchito
      </h3>
      <h3 class="w-auto mr-4 font-base text-base cursor-pointer text-pink-100">
        Inicio
      </h3>
    </div>

    <div
      class="bg-pink-200 w-12 flex flex-wrap items-center py-64 justify-center"
      stlye="height: calc(100vh - 2.5rem)"
    >
      <div class="w-10 h-10 bg-pink-800 hover:bg-pink-900 transition duration-150 rounded-md mx-auto cursor-pointer" />
      <div class="w-10 h-10 bg-pink-800 hover:bg-pink-900 transition duration-150 rounded-md mx-auto cursor-pointer" />
      <div class="w-10 h-10 bg-pink-800 hover:bg-pink-900 transition duration-150 rounded-md mx-auto cursor-pointer" />
      <div class="w-10 h-10 bg-pink-800 hover:bg-pink-900 transition duration-150 rounded-md mx-auto cursor-pointer" />
      <div class="w-10 h-10 bg-pink-800 hover:bg-pink-900 transition duration-150 rounded-md mx-auto cursor-pointer" />
      <div class="w-10 h-10 bg-pink-800 hover:bg-pink-900 transition duration-150 rounded-md mx-auto cursor-pointer" />
      <div class="w-10 h-10 bg-pink-800 hover:bg-pink-900 transition duration-150 rounded-md mx-auto cursor-pointer" />
    </div>

    <div
      class="bg-pink-100"
      style="width: calc(100vw - 3rem); height: calc(100vh - 2.5rem)"
    >
      hola
    </div>
  </div>
</template>

<script>
export default {
  mounted() {
    console.log('Component mounted.');
  }
};
</script>
