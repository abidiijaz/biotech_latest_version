<template>
    <div className="col-md-12" style="padding: 0px;">
        <h1 style="text-align: center; padding-top: 30px;">Monthly Methanol Mass Balance</h1>
        <table class="col-md-4 table" style="margin:0 auto; margin-bottom: 30px; text-align: center; color: white">
            <tr>
                <td>
                    <div class="form-group" style="margin-top: 30px;">
                        <button id="btn_print" v-on:click="print" class="btn btn-success" >Export PDF</button>
                        <button  @click="ExportExcel('xls')" class="btn btn-success" >Export Excel</button>
                    </div>
                </td>
            </tr>
        </table>
        <div class="container-2">
            <!-- <div class="logo" style=" width:113px; height:90px; background-image: url('images/logo.png');background-repeat:no-repeat;margin-top: -47px;"></div> -->

            <table class="" id="graphReport" style="width: 80%; margin: 0 auto; text-align: center; " ref="exportable_table">
                <thead>
                    <tr>
                        <th>date</th>
                        <th>gst_IN</th>
                        <th>glv_IN</th>
                        <th>ppr_IN</th>
                        <th>gst_glv_ppr_total</th>
                        <th>trans_IN</th>
                        <th>fm_7</th>
                        <th>fm_15</th>
                        <th>d_404</th>
                        <th>yield</th>
                        <th>total_pre_IN</th>
                        <th>tower_IN</th>
                        <th>density_1</th>
                        <th>temp_1</th>
                        <th>tower_OUT</th>
                        <th>tower_drain</th>
                        <th>density_2</th>
                        <th>temp_2</th>
                    </tr>
                </thead>
                <tbody>
                    <tr v-for="record in records" v-bind:key="record.id">
                        <td>{{record.date}}</td>
                        <td>{{record.gst_IN}}</td>
                        <td>{{record.glv_IN}}</td>
                        <td>{{record.ppr_IN}}</td>
                        <td>{{record.gst_glv_ppr_total}}</td>
                        <td>{{record.trans_IN}}</td>
                        <td>{{record.fm_7}}</td>
                        <td>{{record.fm_15}}</td>
                        <td>{{record.d_404}}</td>
                        <td>{{record.yield}}</td>
                        <td>{{record.total_pre_IN}}</td>
                        <td>{{record.tower_IN}}</td>
                        <td>{{record.density_1}}</td>
                        <td>{{record.temp_1}}</td>
                        <td>{{record.tower_OUT}}</td>
                        <td>{{record.tower_drain}}</td>
                        <td>{{record.density_2}}</td>
                        <td>{{record.temp_2}}</td>
                    </tr>
                </tbody>
            </table>
        </div>
    </div>
</template>

<script>
import LineChart from './LineChart.js'
import {GraphReporting} from "../helpers/api";
import {logout} from "../helpers/auth";
import Chart from 'chart.js'
import { Line } from 'vue-chartjs';
import moment from "moment";

export default {
    name: "PDFReport",
    
    data() {
        return {
            fields:{
                selectyear:this.$route.query.year,
                selectmonth:this.$route.query.month,
            },
            records:[],
        }
    },
    created(){
        this.submit();
    },
    methods: {
        ExportExcel(type, fn, dl) {
            var elt = this.$refs.exportable_table;
            var wb = XLSX.utils.table_to_book(elt, {sheet:"Sheet JS"});
            return dl ?
                XLSX.write(wb, {bookType:type, bookSST:true, type: 'base64'}) :
                XLSX.writeFile(wb, fn || (('BioTech' + '.'|| 'SheetJSTableExport.') + (type || 'xlsx')));
        },
        print(){
                $(".container-2").printThis({
                    importCSS: true,
                    header: "<h1 style='text-align: center'>Bio Tech Energy (PVT) LTD </h1>",
                    canvas: true,              // copy canvas content
            });
        },
        submit() {
            axios.post('api/massmonth', this.fields , {headers: {'Authorization': 'Bearer '+this.currentUser.token}})
                .then((response) => {
                    this.records = response.data.records
                })
                .catch(err =>{
                    console.log(err);
                })
        },
    },
   
    computed: {

        currentUser() {
            return this.$store.getters.currentUser
        }
    }
}
</script>

<style scoped>
#graphReport tr td {
    padding: 15px;
    text-align: center;
    color: white ;
    border: 1px solid black !important;
}
#graphReport tr th {
    padding: 15px;
    text-align: center;
    color: white ;
    border: 1px solid black !important;
}

.retainer-data tr th{
    padding: 15px;
    color: white !important;
    text-align: center;
    border: 1px solid black;
}
th{
    color: white !important;
}

</style>
