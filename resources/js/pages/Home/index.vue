<template>
  <div class="container">
    <div class="section">
      <nav class="panel">
        <p class="panel-heading">Configuración de envío de reportes</p>
        <div v-for="(r, keyr) in reports" :key="keyr">
          <div class="panel-block">
            <div class="level">
              <div class="level-left">
                <p class="level-item">{{ r.name }}</p>
              </div>
              <div class="level-right">
                <div class="level-item">

                <button class="button is-small">Ok</button>
                </div>
              </div>
            </div>
          </div>
          <div class="panel-block">
            <div class="container">
              <div class="columns">
                <div class="column">
                  <p>TO</p>
                  <ul>
                    <li v-for="(to, keyto) in r.emails.TO" :key="keyto">
                      {{ to.email }}
                    </li>
                  </ul>
                </div>
                <div class="column">CC</div>
                <div class="column">BCC</div>
              </div>
            </div>
          </div>
        </div>
      </nav>
    </div>
  </div>
</template>

<script>
export default {
  name: "Home",
  data() {
    return {
      reports: [],
    };
  },
  mounted() {
    this.$nextTick(() => {
      this.$set(this, "reports", [
        {
          name: "#Ejemplo",
          emails: {
            TO: [{ email: "miguel.vazquez@email.com" }],
          },
        },
      ]);
    });
  },
};
</script>

<style>
</style>