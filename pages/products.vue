<template>
  <div>
    <hero title="Наши продукты" subtitle="Продукты и услуги для наших клиентов" />
    <section class="section is-medium blv-section">
      <div class="container">
        <div class="columns">
          <div class="column is-12">
            <h2>Основные параметры лизинга</h2>
          </div>
        </div>
        <div class="columns is-flex is-multiline">
          <div class="column is-flex is-3 has-text-centered">
            <div class="blv-product-block">
              <b-icon icon="account" size="is-large" type="is-success" />
              <h3>Юридические лица</h3>
            </div>
          </div>
          <div class="column is-flex is-3 has-text-centered">
            <div class="blv-product-block">
              <b-icon icon="cash-100" size="is-large" type="is-success" />
              <h3>От 10 млн. USD</h3>
            </div>
          </div>
          <div class="column is-flex is-3 has-text-centered">
            <div class="blv-product-block">
              <b-icon icon="calendar-clock" size="is-large" type="is-success" />
              <h3>От 13 до 144 месяцев</h3>
            </div>
          </div>
          <div class="column is-flex is-3 has-text-centered">
            <div class="blv-product-block">
              <b-icon icon="currency-rub" size="is-large" type="is-success" />
              <h3>RUB, иные валюты - по согласованию</h3>
            </div>
          </div>
        </div>
        <div class="columns">
          <div class="column is-12">
            <p class="content">
              <b>Порядок определения размера лизинговых платежей и вознаграждения (дохода) лизингодателя:</b><br>
              Разница между общей суммой лизинговых платежей, предусмотренных договором лизинга и выкупной стоимости
              предмета лизинга и общей суммой инвестиционных расходов лизингодателя, возмещаемых лизингополучателем в
              составе лизинговых платежей и выкупной стоимости предмета лизинга.
            </p>
            <p class="content">
              <b>Предмет лизинга:</b><br>
              <ul>
                <li>Производственное оборудование</li>
                <li>Транспортные средства (грузовой, легковой, ж/д, авиа)</li>
                <li>Специальная техника</li>
                <li>Энергетическое оборудование и др.</li>
              </ul>
            </p>
            <p class="content">
              <b>Размер авансового платежа:</b><br>
              0% -20 % стоимости предмета лизинга (с учетом НДС).
            </p>
            <p class="content">
              <b>Виды обеспечения:</b><br>
              <ul>
                <li>
                  Поручительство
                </li>
                <li>
                  Банковская гарантия
                </li>
                <li>
                  Залог имущества
                </li>
                <li>
                  Иные способы, не противоречащие законодательству Республики Беларусь
                </li>
              </ul>
            </p>
            <p class="content">
              <b>Необходимость заключения иных договоров:</b><br>
              <ul>
                <li>
                  Договор страхования (подлежит заключению лизингополучателем/лизингодателем по договоренности)
                </li>
                <li>
                  Кредитный договор (подлежит заключению лизингодателем)
                </li>
                <li>
                  Договор залога (подлежит заключению лизингополучателем и/или лизингодателем)
                </li>
              </ul>
            </p>
            <p class="content">
              <b>Размер выкупной стоимости предмета лизинга:</b><br>
              1% стоимости предмета лизинга (с учетом НДС).
            </p>
            <p class="content">
              <b>Порядок расчета суммы очередного лизингового платежа:</b><br>
              Индивидуальная система формирования графика лизинговых платежей.
            </p>
            <p class="content">
              <b>Периодичность уплаты лизинговых платежей:</b><br>
              Ежемесячные платежи. По договоренности возможна уплата разовых лизинговых платежей,
              не предусмотренных графиком лизинговых платежей.
            </p>
            <p class="content">
              <b>Форма расчетов:</b><br>
              Безналичное перечисление
            </p>
            <p class="content">
              <b>Возможно определение условий договора финансовой аренды по соглашению сторон.</b>
            </p>
          </div>
        </div>
        <div class="columns">
          <div class="column is-12">
            <h2>Перечень необходимых документов</h2>
            <ul>
              <li>
                <a href="/assets/files/application.docx" target="_blank">
                  Заявка на лизинг
                </a>
              </li>
              <li>
                <a href="/assets/files/fin_docs.docx" target="_blank">
                  Перечень финансовых документов
                </a>
              </li>
              <li>
                <a href="/assets/files/legal_docs.docx" target="_blank">
                  Перечень правовых документов
                </a>
              </li>
              <li>
                <a href="/assets/files/anketa.docx" target="_blank">
                  Вопросник юридического лица
                </a>
              </li>
              <li>
                <a href="/assets/files/agreement_company.docx" target="_blank">
                  Согласие на проверку кредитного отчета юридического лица
                </a>
              </li>
              <li>
                <a href="/assets/files/agreement_personal.docx" target="_blank">
                  Согласие на проверку кредитного отчета руководителя
                </a>
              </li>
              <li>
                <a href="/assets/files/agreement_mvd.docx" target="_blank">
                  Согласие на проверку по базам МВД
                </a>
              </li>
              <li>
                <a href="/assets/files/agreement_3rd.docx" target="_blank">
                  Согласие на предоставление данных 3-м лицам
                </a>
              </li>
            </ul>
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
