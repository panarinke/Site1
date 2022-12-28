<template>
  <div class="card">
    <img src="https://imgproxy.onliner.by/h_tGfEw5zAy2KDFZKB_kssAyFfYrKN_SMmsnBKx29Vc/rt:fill/s:400:200/aHR0cHM6Ly9jb250/ZW50Lm9ubGluZXIu/YnkvbmV3cy9sYXJn/ZS84ODgyZTliODUx/YWJiZWExOTdmYTk2/NmM4NzgyNTM0YS5q/cGVn.jpg" class="card-img-top" alt="Фотки нет">
    <div class="card-body">
      <h5 class="card-title">{{ item.name}}</h5>
      <p class="card-text">{{ item.text }}</p>
      <a href="#" class="btn btn-primary">Перейти к записи</a>
    </div>
  </div>
</template>

<script>
export default {
  name: "CardVue",
  props: ["item"]
}
</script>

<style scoped>

</style>
