<template>
  <section :class="size" class="hero blv-hero">
    <div class="blv-polygon" />
    <div class="hero-body">
      <div class="container">
        <section class="content columns">
          <div class="column is-10">
            <h2>
              {{ title }}
            </h2>
            <h3>
              {{ subtitle }}
            </h3>
            <slot></slot>
          </div>
        </section>
      </div>
    </div>
  </section>
</template>

<script>
export default {
  name: 'Hero',
  props: ['size', 'title', 'subtitle', 'button']
}
</script>
