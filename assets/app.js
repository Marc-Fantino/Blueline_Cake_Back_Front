/*
 * Welcome to your app's main JavaScript file!
 *
 * We recommend including the built version of this JavaScript file
 * (and its CSS file) in your base layout (base.html.twig).
 */

// any CSS you import will output into a single css file (app.css in this case)
import './styles/app.css';
//Import du frameWork vueJs
import Vue from 'vue';

//Import du composent ass/components/App.vue
import App from "./components/App";
// start the Stimulus application
import './bootstrap';


//Instance du framework vue + randu alias 'VisuelRendu' + nom du composent et projet sur l'id="app" qui se trouve dans la  page twig apres la connexion
new Vue ({
    render: (VisuelRendu) => VisuelRendu(App)
}).$mount("#app")

//pour compiler webpack npm run watch
