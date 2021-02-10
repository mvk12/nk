<template>
  <div :class="['modal', $props.active ? 'is-active' : '']">
    <div class="modal-background"></div>
    <div class="modal-card">
      <header class="modal-card-head">
        <p class="modal-card-title">Modal title</p>
        <button class="delete" aria-label="close"></button>
      </header>
      <section class="modal-card-body">
        <form @submit.prevent="() => {}">
          <div class="field">
            <label class="label">Nombre</label>
            <input type="text" name="s" id="s" v-model="report.name">
          </div>
        </form>
      </section>
      <footer class="modal-card-foot">
        <button class="button is-success">Save changes</button>
        <button class="button">Cancel</button>
      </footer>
    </div>
  </div>
</template>

<script>
export default {
  name: "ModalRegister",
  props: {
    active: {
      type: Boolean,
      required: true,
      default: false,
    },
  }
};
</script>

<style>
</style>