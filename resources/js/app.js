require('./bootstrap');
import Chart from 'chart.js';



Vue.component('example-component', require('./components/ExampleComponent.vue').default);
Vue.component('dashboard-chart', {
    template: `
    <div class="dashboard_chart">
        <canvas id="dashboard_chart" style="margin-right: 100px;" > </canvas>
    </div>
    `,
    mounted() {
        let canvas_id = document.getElementById('dashboard_chart').getContext('2d');

        var myLineChart = new Chart(canvas_id, {
            type: 'line',
            data: {
                "labels":["January","February","March","April","May","June","August","September","October","November","December"],
                "datasets":[{
                    "label":"My First Dataset",
                    "data":[65,59,80,81,56,55,40,10,30,50],
                    "fill":false,
                    "borderColor":"rgb(75, 192, 192)",
                    "lineTension":false}]

            },
            options: {
                scales: {
                    yAxes: [{
                        ticks: {
                            beginAtZero: true
                        }
                    }]
                }
            }
        });
    }
});



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

