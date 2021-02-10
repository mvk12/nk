<template>
  <div>
    <TheNavbar />
    <router-view />
  </div>
</template>

<script>
export default {
  name: "App",
  components: {
    TheNavbar: () => import('@/common/TheNavbar.vue'),
  },
  mounted: async () => {
    console.log("App created!");
  },
};
</script>

<style>
</style>
