import Vue from 'vue';
import Vuetify from 'vuetify/lib/framework';
import '@mdi/font/css/materialdesignicons.css'; // Importa el conjunto de iconos MDI

Vue.use(Vuetify);

export default new Vuetify({

    components:{


    },

    icons: {
        iconfont: 'mdi', // Configura el conjunto de iconos que importaste (en este caso, 'mdi' para Material Design Icons)
      },
      theme: {
        defaultTheme: 'dark',
        //
      },
});
