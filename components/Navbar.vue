<template>
  <nav class="navbar blv-navbar is-fixed-top">
    <div class="navbar-brand">
      <nuxt-link to="/" class="navbar-item">
        <img src="~/assets/img/logo-blv.png" height="48">
      </nuxt-link>

      <a role="button" class="navbar-burger" aria-label="menu" aria-expanded="false" @click="isMenu=!isMenu">
        <span aria-hidden="true"></span>
        <span aria-hidden="true"></span>
        <span aria-hidden="true"></span>
      </a>
    </div>

    <div class="navbar-menu" :class="{ 'is-active': isMenu }">
      <div class="navbar-end">
        <nuxt-link to="/about" class="navbar-item">
          О компании
        </nuxt-link>
        <nuxt-link to="/products" class="navbar-item">
          Продукты
        </nuxt-link>
        <nuxt-link to="/projects" class="navbar-item">
          Проекты
        </nuxt-link>
        <nuxt-link to="/contacts" class="navbar-item">
          Контакты
        </nuxt-link>
      </div>
    </div>
  </nav>
</template>

<script>
export default {
  name: 'Navbar',
  data () {
    return {
      isMenu: false
    }
  }
}
</script>
