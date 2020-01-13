<template>
    <div class="dashboard_chart">
        <div class="row">
            <div class="col-2"></div>
            <div class="col-4">
                <select v-model="agency=this.value">
                    <option value="TR Travels">TR Travels</option>
                    <option value="SR Travels">SR Travels</option>
                </select>
            </div>
            <div class="col-4 ml-5">
                <input type="text" v-model="month" placeholder="Month">
            </div>
            <div class="col-2"></div>
        </div>
        <p>{{agency}}</p>
        <canvas id="dashboard_chart" style="margin-right: 100px;" > </canvas>
    </div>
</template>

<script>
    import Chart from "chart.js";

    export default {
        name: "chart",
        data(){
            return{
                'agency':'NULL',
                'month':'NULL'
            }
        },
        props:['scores'],
        mounted() {

            // axios.get('/getdata').then(function(response){
            //     this.sells = response.data
            // });

            let canvas_id = document.getElementById('dashboard_chart').getContext('2d');

            var myLineChart = new Chart(canvas_id, {
                type: 'line',
                data: {
                    "labels":["January","February","March","April","May","June","August","September","October","November","December"],
                    "datasets":[{
                        "label":"My First Dataset",
                        "data":this.scores,
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
