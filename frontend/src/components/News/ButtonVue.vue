<template>
  <div class="container">
    <div class="d-grid gap-2">
      <button class="btn btn-primary load-btn" type="button">Загрузить ещё</button>
    </div>
  </div>
</template>

<script>
export default {
  name: "ButtonVue"
}
</script>

<style scoped>
  div .d-grid.gap-2 {
    padding-top: 25px;
    padding-bottom: 25px;
  }

  button.btn.btn-primary.load-btn {
    color: black;
    background-color: #f4f4f4;
    border-color: black;
  }

  button.btn.btn-primary.load-btn:hover {
    color: black;
    background-color: #666;
    border-color: black;
  }
</style>