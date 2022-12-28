<template>
  <form class="login-form" @submit="login">
    <div class="mb-3">
      <label for="exampleInputEmail1" class="form-label">Email адрес</label>
      <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" name="email" required v-model="email">
      <div class="errors">{{ errors.email }}</div>
      <div id="emailHelp" class="form-text">Мы никогда не передадим вашу электронную почту кому-либо еще</div>
    </div>
    <div class="mb-3">
      <label for="exampleInputPassword1" class="form-label">Пароль</label>
      <input type="password" class="form-control" id="exampleInputPassword1" name="password" required v-model="password">
      <div class="errors">{{ errors.password }}</div>
    </div>
    <div class="mb-3 form-check">
      <input type="checkbox" class="form-check-input" id="exampleCheck1">
      <label class="form-check-label" for="exampleCheck1">Сохранить пароль</label>
    </div>
    <button type="submit" class="btn btn-primary">Войти</button>
  </form>
</template>

<script>
export default {
  name: "LoginVue",
  data() {
    return {
      email: '',
      password: '',
      errors: {
        email: '',
        password: ''
      }
    }
  },
  methods: {
    login(event) {
      this.validate()
      event.preventDefault()
    },
    validate() {
      for (let errorsKey in this.errors) {
        this.errors[errorsKey] = ''
      }
      if (this.email.trim().length === 0) {
        this.errors.email = 'Заполните Email.'
      }
      if (this.password.trim().length === 0) {
        this.errors.password = 'Заполните Пароль.'
      }
    }
  }
}
</script>

<style scoped>
.login-form {
  max-width: 400px;
  margin: 25px auto;
  background-color: #f2f2f2;
  padding: 25px;
}
.login-form .errors {
  color: red;
}
.login-form input {
  border: 1px solid #ddd;
}
</style>