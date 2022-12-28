<template>
  <div class="home">
    <div class="container">
      <h3>Все новости</h3>
      <div class="row">
        <div class="col-md-6 col-lg-4 mb-5" v-for="post in posts">
            <CardVue :item="post"></CardVue>
        </div>
      </div>
      <ButtonVue></ButtonVue>
    </div>
  </div>
</template>

<script>
// @ is an alias to /src
import CardVue from "@/components/News/CardVue";
import Card2vue from "@/components/News/Card2vue";
import Card3vue from "@/components/News/Card3vue";
import ButtonVue from "@/components/News/ButtonVue";

export default {
  name: 'HomeView',
  components: {
    ButtonVue,
    Card3vue,
    Card2vue,
    CardVue
  },

    data() {
        return {
            posts: []
        }
    },
    created() {
        this.$http.get('/news/list')
            .then((response) => {this.posts = response.data})
    }
}
</script>

<style scoped>
  h3 {
    padding-bottom: 25px;
  }
</style>
