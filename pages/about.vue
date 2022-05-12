<template>
  <div>
    <hero
      title="О компании"
      subtitle="Общество с ограниченной ответственностью «БелВЭБлизинг» создано в марте 2018 года."
    />
    <section class="section is-medium blv-section">
      <div class="container">
        <div class="columns">
          <div class="column is-8">
            <h2>Участниками общества являются</h2>
            <p class="content">
              <a href="https://belveb.by" target="_blank">
                Открытое акционерное общество «Белвнешэкономбанк» (ОАО «Банк БелВЭБ»)
              </a> — универсальный кредитно-финансовый
              институт, занимающий ведущие позиции среди коммерческих банков Республики Беларусь в области международных
              расчетов, валютных операций и обслуживании внешнеэкономической деятельности государства и клиентов,
              имеющий многолетний опыт работы и признанную репутацию на зарубежном и внутреннем валютных рынках.
            </p>
            <p class="content">
              <a href="https://veb-leasing.ru" target="_blank">
                Акционерное общество «ВЭБ-лизинг»
              </a> - компания номер один на рынке лизинга РФ по объему портфеля на 01 января 2017, доля на рынке
              составляет 19%. Компания занимает первое место на рынке в сегменте авиа, авто и оборудования, второе
              место – сегменте железнодорожной техники. С 2009 года АО «ВЭБ-лизинг» участвует в рэнкинге Европейской
              федерации национальных ассоциаций лизинговых компаний LEASEUROPE, включающего порядка 1,5 тысяч компаний,
              расположенных в 33 странах и составляющих около 93% всего европейского лизингового рынка. По итогам 2016
              года компания входит в ТОП-50 рэнкинга по показателю объема нового бизнеса.
            </p>
            <h2>
              СМИ о нас
            </h2>
            <div class="columns is-multiline is-flex">
              <div class="column is-4 is-flex" v-for="article in articles">
                <div class="blv-media-block">
                  <div class="blv-media-block__date">
                    {{ article.date }}
                  </div>
                  <div class="blv-media-block__title">
                    {{ article.title }}
                  </div>
                  <a
                    class="blv-media-block__link"
                    target="_blank"
                    :href="article.link"
                  >
                    Подробнее...
                  </a>
                </div>
              </div>
            </div>
            <nuxt-link to="/info" class="button is-large is-primary blv-button" style="margin-top: 48px;">
              Раскрытие информации
            </nuxt-link>
          </div>
          <div class="column is-4">
            <h2>Наши награды</h2>
            <figure class="image is-3by4">
              <img src="~/assets/img/diplom.jpg">
            </figure>
          </div>
        </div>
      </div>
    </section>
  </div>
</template>

<script>
import Hero from '../components/Hero'
export default {
  name: 'About',
  components: { Hero },
  data () {
    return {
      articles: [
        {
          date: '27.06.2019',
          title: 'БЖД получила вторую партию российских пассажирских вагонов',
          link: 'https://primepress.by/news/kompanii/bzhd_poluchila_vtoruyu_partiyu_rossiyskikh_passazhirskikh_vagonov-11530/'
        },
        {
          date: '27.06.2019',
          title: 'ТВЗ завершил поставку вагонов в Белоруссию',
          link: 'http://www.tvz.ru/press/news/news_detail.php?ELEMENT_ID=1085'
        },
        {
          date: '12.06.2019',
          title: '"БелВЭБлизинг" профинансирует для БЖД поставку 30 пассажирских вагонов',
          link: 'https://www.belta.by/economics/view/belveblizing-profinansiruet-dlja-bzhd-postavku-30-passazhirskih-vagonov-350785-2019/'
        },
        {
          date: '24.05.2019',
          title: 'Трансмашхолдинг увеличивает поставки пассажирских вагонов в Белоруссию',
          link: 'https://www.tmholding.ru/press_office/events/9536.html'
        },
        {
          date: '24.05.2019',
          title: '30 новых пассажирских вагонов отправятся в Белоруссию',
          link: 'http://www.tvz.ru/press/news/news_detail.php?ELEMENT_ID=1076'
        }
      ]
    }
  }
}
</script>
