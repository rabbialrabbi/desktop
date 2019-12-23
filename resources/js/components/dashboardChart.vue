<template>
    <div class="dashboard_chart">
        <canvas id="dashboard_chart" style="margin-right: 100px;" > </canvas>
    </div>
</template>

<script>
    import Chart from "chart.js";

    export default {
        data(){
            return{
                sells:[]
            }
        },
        name: "datepicker",
        mounted() {

            axios.get('/getdata').then(function(response){
                this.sells = response.data
            });
            // edo start from here

            let canvas_id = document.getElementById('dashboard_chart').getContext('2d');

            var myLineChart = new Chart(canvas_id, {
                type: 'line',
                data: {
                    "labels":["January","February","March","April","May","June","August","September","October","November","December"],
                    "datasets":[{
                        "label":"My First Dataset",
                        "data":this.sells,
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
    }
</script>

<style scoped>

</style>
