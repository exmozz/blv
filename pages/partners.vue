<template>
  <div>
    <hero title="Наши партнеры" subtitle="Клиенты, поставщики и финансовые организации" />
    <section class="section is-medium blv-section">
      <div class="container">
        <div class="columns">
          <div class="column is-3">
            <div class="blv-partner-block">
              <div class="blv-partner-block__img">
                <img src="~/assets/img/bzhd.png" />
              </div>
              <div class="blv-partner-block__name">
                Белорусская железная дорога
              </div>
            </div>
          </div>
          <div class="column is-3">
            <div class="blv-partner-block">
              <div class="blv-partner-block__img">
                <img src="~/assets/img/sgtrans.png" />
              </div>
              <div class="blv-partner-block__name">
                РУП СГ-ТРАНС
              </div>
            </div>
          </div>
          <div class="column is-3">
            <div class="blv-partner-block">
              <div class="blv-partner-block__img">
                <img src="~/assets/img/tver.png" />
              </div>
              <div class="blv-partner-block__name">
                Тверской вагоностроительный завод
              </div>
            </div>
          </div>
          <div class="column is-3">
            <div class="blv-partner-block">
              <div class="blv-partner-block__img">
                <img src="~/assets/img/altay.png" />
              </div>
              <div class="blv-partner-block__name">
                АО "Алтайвагон"
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
  </div>
</template>
<script>
import Hero from '../components/Hero'
export default {
  components: { Hero }
}
</script>
