<template>
  <footer>
    <div class="container">
      <div>&copy; БГТУ, 2022</div>
      <div>ПВ-191 Панарин Кирилл</div>
    </div>
  </footer>
</template>

<script>
export default {
  name: "FooterVue"
}
</script>

<style scoped>
  footer {
    background-color: #3e4753;
    padding: 25px;
    color: #fff;
    height: 100px;
  }

  footer .container {
    height: 100%;
    display: flex;
    justify-content: space-between;
    align-items: center;
  }
</style>