<template>
  <div id="app">
    <HeaderVue></HeaderVue>
    <main class="container">
      <router-view/>
    </main>
    <FooterVue></FooterVue>
  </div>
</template>

<script>
import HeaderVue from "@/components/Main/HeaderVue";
import FooterVue from "@/components/Main/FooterVue";
export default {
  components: {FooterVue, HeaderVue}
}
</script>

<style lang="scss">
  html, body {
    padding: 0;
    margin: 0;
    font-family: 'Open Sans', sans-serif;
  }
  main {
    padding-top: 25px;
  }
</style>
