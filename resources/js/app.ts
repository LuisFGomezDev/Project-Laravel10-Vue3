import './bootstrap';
import '../css/app.css';

//import * as bootstrap from bootstrap

import { createApp, h, DefineComponent } from 'vue';
//import Dashboard from "./Components/Dashboard.vue";

//import vSelect from 'vue-select'

import 'vue-select/dist/vue-select.css';

//import axios from 'axios';


import { createInertiaApp } from '@inertiajs/vue3';
import { resolvePageComponent } from 'laravel-vite-plugin/inertia-helpers';
import { ZiggyVue } from '../../vendor/tightenco/ziggy/dist/vue.m';

const appName = import.meta.env.VITE_APP_NAME || 'Laravel';

/*
const app = createApp({
    components: {
        //Dashboard
    }
});

/*
app.component('v-select', vSelect);
  
  app.mount('#app');
*/

//************************************** */
/*
const app = createApp({
    components: {
        Dashboard,
    },
    methods: {
      manejarEnvioDatos(opcionSeleccionada: string) {
        // Utiliza Axios para realizar la llamada a Laravel
        axios.post('/enviar-datos', { opcionSeleccionada })
          .then(response => {
            console.log(response.data);
          })
          .catch(error => {
            console.error(error);
          });
      },
    },
  });
  
  app.component('mi-componente', Dashboard);
  
  app.mount('#app');
  */




//************************************** */




createInertiaApp({
    title: (title) => `${title} - ${appName}`,
    resolve: (name) => resolvePageComponent(`./Pages/${name}.vue`, import.meta.glob<DefineComponent>('./Pages/**/*.vue')),
    setup({ el, App, props, plugin }) {
        createApp({ render: () => h(App, props) })
            .use(plugin)
            .use(ZiggyVue, Ziggy)
            .mount(el);
    },
    progress: {
        color: '#4B5563',
    },
});
