<template>
  <div>
    <hero title="Контакты" subtitle="Как нас найти" />
    <section class="section is-medium blv-section">
      <div class="container">
        <div class="columns">
          <div class="column is-4">
            г. Минск, ул. Победителей, 27, пом. 346<br><br>
            Режим работы:<br>
            Пн-Чт 8:30-17:30<br>
            Пт 8:30-16:15 Обед 12:45-13:30<br>
          </div>
          <div class="column is-4">
            Email:<br>
            <a href="mailto:info@belvebleasing.by">info@belvebleasing.by</a><br>
            Телефоны:<br>
            +375 17 336 36 07<br>
            +375 17 336 36 05
          </div>
        </div>
      </div>
    </section>
    <iframe
      src="https://yandex.by/map-widget/v1/-/CCUu4RVDpD"
      style="width: 100%; min-height: 300px;"
      frameborder="0"
      allowfullscreen="false"
    />
  </div>
</template>
<script>
import Hero from '../components/Hero'
export default {
  components: { Hero }
}
</script>
