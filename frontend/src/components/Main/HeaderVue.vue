<template>
  <header>
    <nav class="navbar navbar-expand-lg">
      <div class="container">
        <a class="navbar-brand" href="#">
          <div class = logo>
            <img src = "https://gc.onliner.by/images/logo/onliner_logo.v3.png?1663319059">
          </div>
        </a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
          <ul class="navbar-nav me-auto mb-2 mb-lg-0">
            <li class="nav-item">
              <a class="nav-link" href="#">
                <img src="https://gc.onliner.by/images/i-fire-orange.png" alt="Logo" width="24" height="24" class="d-inline-block align-text-top">
                Категории
              </a>
            </li>
            <li class="nav-item">
              <router-link class="nav-link" :to="{name: 'Home'}">Новости</router-link>
            </li>
            <li class="nav-item">
              <router-link class="nav-link" :to="{name: 'About'}">Форум</router-link>
            </li>
            <li class="nav-item">
              <router-link class="nav-link" :to="{name: 'Login'}">Войти</router-link>
            </li>
          </ul>
          <form class="d-flex" role="search">
            <input class="form-control me-2" type="search" placeholder="Поиск в новостях" aria-label="Search">
            <button class="btn btn-outline-success" type="submit">Поиск</button>
          </form>
        </div>
      </div>
    </nav>
    <nav class="navbar navbar-expand-lg bg-light">
      <div class="container">
        <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
          <div class="navbar-nav">
            <a class="nav-link disabled">Актуальное:</a>
            <a class="nav-link active text_link" aria-current="page" href="#">Все</a>
            <a class="nav-link active text_link" aria-current="page" href="#">Аварии</a>
            <a class="nav-link active text_link" aria-current="page" href="#">Разборки на дороге</a>
            <a class="nav-link active text_link" aria-current="page" href="#">Законы</a>
            <a class="nav-link active text_link" aria-current="page" href="#">Подержаные авто</a>
            <a class="nav-link active text_link" aria-current="page" href="#">Новости автомира</a>
          </div>
        </div>
      </div>
    </nav>
  </header>
</template>

<script>
export default {
  name: "HeaderVue"
}
</script>

<style scoped>
  header {
    background-color: #ffdd22;
  }

  nav .navbar {
    background-color: #ffdd22;
    padding: 0;
  }

  header .container {
    display: flex;
    flex-direction: row;
    align-items: center;
  }

  header .logo img {
    width: 150px;
  }

  button .btn-outline-success {
    background-color: #dddddd;
  }
  a.nav-link.active.text_link {
    color: #004d99;
    text-decoration: none;
    text-decoration-line: none;
    text-decoration-thickness: initial;
    text-decoration-style: initial;
    text-decoration-color: initial;
  }

  a.nav-link.active.text_link:hover {
    color: #000000;
    text-decoration: underline;
    text-decoration-line: underline;
    text-decoration-thickness: initial;
    text-decoration-style: initial;
    text-decoration-color: initial;
  }

</style>