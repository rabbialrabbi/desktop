<template>
    <div class="dashboard_chart">
        <div class="row">
            <div class="col-2"></div>
            <div class="col-4">
                <select name="agency" id="agency" v-on:change="ajexCall(agency,month,getChart)" v-model="agency">
                    <option value="1" selected>SR Travels</option>
                    <option value="2">TR Travels</option>
                </select>
            </div>
            <div class="col-4">
                <select name="month" id="month" onchange="precall()" v-model="month">
                    <option value="1">January</option>
                    <option value="2">February</option>

                </select>
            </div>
            <div class="col-2"></div>
        </div>

        <p>{{agency}}</p>

        <canvas id="dashboard_chart" style="margin-right: 100px;" > </canvas>


    </div>
</template>

<script>
    import canvasComponent from "./canvasComponent";
    import Chart from "chart.js";

    export default {
        name: "chart",
        data(){
            return{
                agency:'2',
                month:'1',
                fares:[]
            }
        },
        methods:{
            ajexCall:(agency,month, getChart)=>{
                axios.get('/dashboardchart/'+agency+'/'+month)
                    .then(response => {
                        // var data = response.data.bmw.map(bmw => bmw.speed);
                        let data = [];
                        let rcv = response.data;
                        for(var key in rcv){
                            var info = rcv[key];
                            data.push(info);
                        }
                        getChart(data)
                    });
            },
            getChart:(data)=>{
                let canvas_id = document.getElementById('dashboard_chart').getContext('2d');

                var myLineChart = new Chart(canvas_id, {
                    type: 'line',
                    data: {
                        "labels":["January","February","March","April","May","June","August","September","October","November","December"],
                        "datasets":[{
                            "label":"My First Dataset",
                            "data":data,
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
        },
        mounted() {
            var agency = this.agency;
            var month = this.month;
            function call(id) {
console.log(id);
            }
                this.ajexCall(this.agency,this.month,this.getChart);



        }
    }
</script>

<style scoped>

</style>
