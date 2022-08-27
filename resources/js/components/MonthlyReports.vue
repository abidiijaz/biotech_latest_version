<template>
    <div className="col-md-12" style="padding: 0px;">
       
        <h1 style="text-align: center; padding-top: 30px;">Monthly Reports</h1>
        <form name="chartForm" @submit.prevent="submit">
            <table class="col-md-6 table" style="margin:0 auto; margin-bottom: 30px; text-align: center; color: white">
                <tr>
                    <td>
                        <label>Start Date</label>
                        <select class="form-control" v-model="fields.selectyear">
                            <option value="2022">2022</option>
                        </select>
                    </td>
                    <td>
                        <label>Start Date</label>
                        <select class="form-control" v-model="fields.selectmonth">
                            <option value="1">January</option>
                            <option value="2">February</option>
                            <option value="3">March</option>
                            <option value="4">April</option>
                            <option value="5">May</option>
                            <option value="6">June</option>
                            <option value="7">July</option>
                            <option value="8">August</option>
                            <option value="9">September</option>
                            <option value="10">October</option>
                            <option value="11">November</option>
                            <option value="12">December</option>
                        </select>
                    </td>
                    <!-- <td>
                        <input type="submit" style="margin-top: 30px; width:auto;" value="Show Data" class="btn btn-primary">
                    </td> -->
                    <!-- <td>
                        <div class="form-group" style="margin-top: 30px;">
                            <button id="btn_print" v-on:click="print" class="btn btn-success" >Export PDF</button>
                            <button  @click="ExportExcel('xls')" class="btn btn-success" >Export Excel</button>
                        </div>
                    </td> -->
                </tr>
            </table>

        </form>
        <table class="col-md-8 table" style="margin:0 auto; margin-bottom: 30px; color: white">
            <tbody>
                <tr style="border:none;">
                    <td style="border:none;">
                         <label>Start Date</label>
                        <router-link class="btn btn-info form-control" :to="{ name: 'massmonth', query: {month: fields.selectmonth, year: fields.selectyear,} }" target="_blank">Monthly Methanol Mass Balance</router-link>
                    </td>
                    <td style="border:none;">
                        <label>Start Date</label>
                        <router-link class="btn btn-info form-control" :to="{ name: 'massmonth', query: {month: fields.selectmonth, year: fields.selectyear,} }" target="_blank">Monthly Methanol Mass Balance</router-link>
                    </td>
                    <td style="border:none;">
                        <label>Start Date</label>
                        <router-link class="btn btn-info form-control" :to="{ name: 'massmonth', query: {month: fields.selectmonth, year: fields.selectyear,} }" target="_blank">Monthly Methanol Mass Balance</router-link>
                    </td>
                    <td style="border:none;">
                        <label>Start Date</label>
                        <router-link class="btn btn-info form-control" :to="{ name: 'massmonth', query: {month: fields.selectmonth, year: fields.selectyear,} }" target="_blank">Monthly Methanol Mass Balance</router-link>
                    </td>
                </tr>
                <tr> 
                    <td style="border:none;">
                        <label>Start Date</label>
                        <router-link class="btn btn-info form-control" :to="{ name: 'massmonth', query: {month: fields.selectmonth, year: fields.selectyear,} }" target="_blank">Monthly Methanol Mass Balance</router-link>
                    </td>
                    <td style="border:none;">
                        <label>Start Date</label>
                        <router-link class="btn btn-info form-control" :to="{ name: 'massmonth', query: {month: fields.selectmonth, year: fields.selectyear,} }" target="_blank">Monthly Methanol Mass Balance</router-link>
                    </td>
                    <td style="border:none;">
                        <label>Start Date</label>
                        <router-link class="btn btn-info form-control" :to="{ name: 'massmonth', query: {month: fields.selectmonth, year: fields.selectyear,} }" target="_blank">Monthly Methanol Mass Balance</router-link>
                    </td>
                </tr>
            </tbody>
        </table>
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
        const d = new Date();
        console.log(d.getMonth()+1);
        return {
            fields:{
                selectmonth:d.getMonth()+1,
                selectyear:2022,
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
                    console.log(this.records)
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
