<template>
  <div>
    <modal-form :active="modal" @closeModal="close" />
    <hero
      size="is-large"
      title="Лизинговое финансирование под поставки высокотехнологичного оборудования, произведенного в Российской Федерации"
    >
      <a @click="modal=!modal" href="#" class="button is-large is-primary blv-button">
        Оставить заявку
      </a>
    </hero>
    <section class="section">
      <div class="container">
        <div class="columns">
          <div class="column is-4">
            <nuxt-link to="/products" class="blv-block blv-block__1">
              <div class="blv-block-top">
                Основные условия
              </div>
              <div class="blv-block-content">
                Информация об условиях лизинговых сделок<br>
                Условия для сотрудничества<br>
                Перечень необходимых документов
              </div>
            </nuxt-link>
          </div>
          <div class="column is-4">
            <nuxt-link to="/partners" class="blv-block blv-block__2">
              <div class="blv-block-top">
                Наши партнеры
              </div>
              <div class="blv-block-content">
                Наши клиенты<br>
                Наши поставщики<br>
                Наши финансовые организации<br>
              </div>
            </nuxt-link>
          </div>
          <div class="column is-4">
            <nuxt-link to="/projects" class="blv-block blv-block__3">
              <div class="blv-block-top">
                Проекты и отзывы
              </div>
              <div class="blv-block-content">
                Реализованные нами проекты и отзывы от наших клиентов
              </div>
            </nuxt-link>
          </div>
        </div>
      </div>
    </section>
    <section class="section is-medium blv-section">
      <div class="blv-polygon" />
      <div class="container">
        <div class="columns">
          <div class="column is-8">
            <h2>Наша миссия</h2>
            <p class="content">
              Удовлетворяя потребности в лизинговом финансировании клиентов, мы одновременно выполняем стратегию
              Внешэкономбанка в части стимулирования экспорта высокотехнологичной продукции
              российского производства на белорусский рынок.
            </p>
            <p class="content">
              Таким образом, в нашей компании Вы сможете получить наиболее выгодные предложения для
              предметов лизинга, произведенных на территории Российской Федерации.
            </p>
          </div>
        </div>
      </div>
    </section>
  </div>
</template>

<script>
import ModalForm from '../components/ModalForm'
import Hero from '../components/Hero'
export default {
  name: 'HomePage',
  components: { Hero, ModalForm },
  data () {
    return {
      modal: false
    }
  },
  methods: {
    close () {
      this.modal = false
    }
  }
  /* asyncData () {
    return HTTP.get('collections/get/pages/').then((res) => {
      return { pages: res.data.entries }
    })

  } */
}
</script>
