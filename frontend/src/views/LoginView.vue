<template>
    <div>
      <div class="login-form">
        <h1>Авторизация</h1>
        <hr>
        <LoginVue></LoginVue>
      </div>
    </div>

</template>

<script>
import LoginVue from "@/components/Login/LoginVue";
import CardVue from "@/components/News/CardVue";
export default {
  name: "LoginView",
  components: {LoginVue, CardVue},
    data() {
        return {
            posts: []
        }
    },
    created() {
        this.$http.get('/news/list')
            .then((response) => {
                console.log(response)
            })
    }
}
</script>

<style scoped>

</style>
