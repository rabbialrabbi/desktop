require('./bootstrap');

Vue.component('example-component', require('./components/ExampleComponent.vue').default);


/**
 * Next, we will create a fresh Vue application instance and attach it to
 * the page. Then, you may begin adding components to this application
 * or customize the JavaScript scaffolding to fit your unique needs.
 */

const app = new Vue({
    el: '#app',
    methods:{
        addActive(){
            document.getElementById('menu-active').classList.add('menu-active');
            document.getElementById('bar-active').classList.add('bar-active');
            document.getElementById('anchor-active').classList.add('anchor-active');
        }
    }
});

const seartchResult = new Vue({
    el:'#searchResult',
    components:{}

});
