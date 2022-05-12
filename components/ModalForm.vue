<template>
  <div :class="{'is-active': active}" class="modal blv-modal">
    <div @click="$emit('closeModal')" class="modal-background" />
    <div class="modal-card">
      <header class="modal-card-head">
        <p class="modal-card-title">
          Оставить заявку
        </p>
        <button @click="$emit('closeModal')" class="delete" aria-label="close" />
      </header>
      <section class="modal-card-body">
        <div class="field is-horizontal">
          <div class="field-body">
            <div class="field">
              <label class="label">Ваше имя</label>
              <div class="control">
                <input v-model="form.name" class="input" type="text" placeholder="Ваше имя...">
              </div>
            </div>
            <div class="field">
              <label class="label">Email</label>
              <div class="control">
                <input v-model="form.email" class="input" type="email" placeholder="E-mail">
              </div>
            </div>
            <div class="field">
              <label class="label">Номер телефона</label>
              <div class="control">
                <input v-model="form.phone" class="input" type="phone" placeholder="+375...">
              </div>
            </div>
          </div>
        </div>
        <div class="field is-horizontal">
          <div class="field-body">
            <div class="field">
              <label class="label">Предмет лизинга</label>
              <div class="control">
                <div class="select">
                  <select v-model="form.item">
                    <option disabled selected>
                      Выберите предмет...
                    </option>
                    <option v-for="item in items" :value="item">
                      {{ item }}
                    </option>
                  </select>
                </div>
              </div>
            </div>
            <div class="field">
              <label class="label">Стоимость, BYN</label>
              <div class="control">
                <input v-model="form.price" class="input" type="number" placeholder="Примерная стоимость...">
              </div>
            </div>
          </div>
        </div>
        <div class="field">
          <label class="label">Комментарии</label>
          <div class="control">
            <textarea v-model="form.comments " class="textarea" />
          </div>
        </div>
      </section>
      <footer class="modal-card-foot">
        <button @click="send" class="button blv-success">
          Отправить
        </button>
      </footer>
    </div>
  </div>
</template>

<script>
import { HTTP } from '~/api/http'

export default {
  name: 'ModalForm',
  props: ['active'],
  data () {
    return {
      items: [
        'Производственное оборудование',
        'Транспортные средства',
        'Специальная техника',
        'Энергетическое оборудование',
        'Недвижимость',
        'Иное'
      ],
      form: {
        email: '',
        phone: '',
        name: '',
        item: '',
        price: '',
        comments: ''
      }
    }
  },
  methods: {
    send () {
      HTTP.post('/send_mail.php', this.form)
        .then((res) => {
          this.$buefy.toast.open({
            duration: 5000,
            message: 'Заявка отправлена. Наш менеджер свяжется с вами в ближайшее время.',
            type: 'is-success'
          })
          this.$emit('closeModal')
        })
        .catch((err) => {
          console.log(err)
          this.$buefy.toast.open({
            duration: 5000,
            message: 'Произошла ошибка. Попробуйте еще раз.',
            type: 'is-danger'
          })
          this.$emit('closeModal')
        })
    }
  }
}
</script>
