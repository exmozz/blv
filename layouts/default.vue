<template>
  <div>
    <navbar />
    <nuxt />
    <footer-bar />
  </div>
</template>

<script>
import Navbar from '../components/Navbar'
import FooterBar from '../components/Footer'
export default {
  components: { FooterBar, Navbar },
  head () {
    return {
      title: 'БелВЭБлизинг'
    }
  }
}
</script>
