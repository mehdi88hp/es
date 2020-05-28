
window.axios = require('axios');

window.axios.defaults.headers.common['X-Requested-With'] = 'XMLHttpRequest';


import Vue from 'vue'
import vuetify from './plugins/vuetify' // path to vuetify export
import App from './components/main'

new Vue({
  vuetify,
  el:'#app',
  render:h=>h(App),
})
