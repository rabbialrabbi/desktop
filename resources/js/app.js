require('./bootstrap');
import dashboardChart from "./components/dashboardChart";



Vue.component('example-component', require('./components/ExampleComponent.vue').default);
Vue.component('dashboard-chart', dashboardChart);



/**
 * Next, we will create a fresh Vue application instance and attach it to
 * the page. Then, you may begin adding components to this application
 * or customize the JavaScript scaffolding to fit your unique needs.
 */

const app = new Vue({
    el: '#app',
    methods:{

    }
});
