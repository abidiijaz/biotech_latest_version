<template>
    <div className="col-md-12" style="padding: 0px;">

        <!-- <h1 style="text-align: center; padding-top: 30px;margin-bottom:15px !important;">Drain Report Months wise</h1> -->
        <!--        <button @click="ExportExcel('xls')" >Export Excel</button>-->
        <!-- <input type="button" class="btn btn-success print-btn" @click="tableToExcel" value="Export to Excel" style="position:absolute; left: 84%; top: 37px;"> -->
        <div class="container-2 col-md-10" style="margin:auto; margin-right:0px;">
            <table class="table custom-table float-left" id="testTable" style="font-size:15px;width: 13%; margin: 0px auto;text-align: center;"
                ref="exportable_table">
                <thead>
                    <tr>
                        <th>Months</th>
                        <th>D405 A</th>
                    </tr>
                </thead>
                <tbody>
                    <tr v-for="(field, index ) in db_val_1">
                        <td v-if="field.timing_bvo_1 !=null">{{field.timing_bvo_1 | formatDate2}}</td>
                         <td v-else>-</td>
                        <td v-if="field.rdl_8 !=null">{{field.rdl_8}}</td>
                         <td v-else>-</td>
                    </tr>
                </tbody>
            </table>
            <table class="table custom-table float-left" id="testTable" style="font-size:15px;width: 10%; margin: 0px auto;text-align: center;">
                <thead>
                    <tr>
                      
                        <th>D405 B</th>
                       
                    </tr>
                </thead>
                 <tbody>
                    <tr v-for="(field, index ) in db_val_2">
                      
                        <td v-if="field.rdl_9 !=null">{{field.rdl_9}}</td>
                        <td v-else>-</td>
                    </tr>
                </tbody>
            </table>
            <table class="table custom-table float-left" id="testTable" style="font-size:15px;width: 10%; margin: 0px auto;text-align: center;">
                <thead>
                    <tr>
                        <th>D405 C</th>
                    </tr>
                </thead>
                 <tbody>
                    <tr v-for="(field, index ) in db_val_3">
                        <td v-if="field.rdl_10 !=null">{{field.rdl_10}}</td>
                        <td v-else>-</td>
                    </tr>
                </tbody>
            </table>
            <table class="table custom-table float-left" id="testTable" style="font-size:15px;width: 10%; margin: 0px auto;text-align: center;">
                <thead>
                    <tr>
                          <th>D402 A</th> 
                    </tr>
                </thead>
                 <tbody>
                    <tr v-for="(field, index ) in db_val_4">
                        
                          
                        <td v-if="field.rdl_11 !=null">{{field.rdl_11}}</td>
                        <td v-else>-</td>
                    </tr>
                </tbody>
            </table>
            <table class="table custom-table float-left" id="testTable" style="font-size:15px;width: 10%; margin: 0px auto;text-align: center;">
                <thead>
                    <tr>
                     
                        <th>D402 B</th>
                       
                    </tr>
                </thead>
                 <tbody>
                    <tr v-for="(field, index ) in db_val_5">
                       
                        <td v-if="field.rdl_3 !=null">{{field.rdl_3}}</td>
                        <td v-else>-</td>
                    </tr>
                </tbody>
            </table>
            <table class="table custom-table float-left" id="testTable" style="font-size:15px;width: 10%; margin: 0px auto;text-align: center;">
                <thead>
                    <tr>
                      
                        <th>D402 C</th>
                       
                    </tr>
                </thead>
                 <tbody>
                    <tr v-for="(field, index ) in db_val_6">
                        
                          
                        <td v-if="field.rdl_4 !=null">{{field.rdl_4}}</td>
                        <td v-else>-</td>
                    </tr>
                </tbody>
            </table>
            <table class="table custom-table float-left" id="testTable" style="font-size:15px;width: 10%; margin: 0px auto;text-align: center;">
                <thead>
                    <tr>
                       
                        <th>D402 D</th>
                       
                    </tr>
                </thead>
                 <tbody>
                    <tr v-for="(field, index ) in db_val_7">
                        
                         
                        <td v-if="field.rdl_5 !=null">{{field.rdl_5}}</td>
                        <td v-else>-</td>
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
import {Line} from 'vue-chartjs';
import moment from "moment";

export default {
    name: "PDFReport",
    data() {

        role_id:'this.$store.getters.currentUser.role'
        return {
            filter_range:'y',
            timing: 3,
            setInterval:'60',
            val_1  : [],
            startdate:'',
            enddate:'',
            select_record_option:[],
            select_record:[],
            select_db_record: '',
            db_val_1: [],
            db_val_2: [],
            db_val_3: [],
            db_val_4: [],
            db_val_5: [],
            db_val_6: [],
            db_val_7: [],
            drain_sum_bvo_1:0.00,
            drain_sum_bvo_2:0.00,
            drain_sum_bvo_3:0.00,
            drain_sum_bvo_4:0.00,
            drain_sum_bvo_8:0.00,
            drain_sum_bvo_9:0.00,
            drain_sum_bvo_10:0.00,
            grand_totle:0.00,
            disable: false,
            user_role_s: this.$store.getters.currentUser.role,
        }
    },
    mounted(){
        document.getElementById('change-row').style.marginRight = "0px";
        function myFunction(x) {
            if (x.matches) { // If media query matches
                document.querySelector('.custom-top-menu').style.display = "contents";
            } else {
                document.querySelector('.custom-top-menu').style.display = "block";
            }
        }
        var x = window.matchMedia("(max-width: 990px)")
        myFunction(x) // Call listener function at run time
        x.addListener(myFunction) // Attach listener function on state changes
        this.submit();
    },
    beforeCreate: function() {
        document.querySelector('body').style.maxWidth = "100%";
        document.querySelector('body').style.minWidth = "100%";
        // document.getElementById("main").style.overflow = "hidden";
    },
    methods: {
        tableToExcel(){
            var downloadurl;
            var dataFileType = 'data:application/vnd.ms-excel';
            var tableSelect = document.getElementById('testTable');
            var tableHTMLData = tableSelect.outerHTML.replace(/ /g, '%20');

            // Specify file name
            var name ='BioTech';
            var filename = name+'.xls';

            // Create download link element
            downloadurl = document.createElement("a");

            document.body.appendChild(downloadurl);

            if(navigator.msSaveOrOpenBlob){
                var blob = new Blob(['\ufeff', tableHTMLData], {
                    type: dataFileType
                });
                navigator.msSaveOrOpenBlob( blob, filename);
            }else{
                // Create a link to the file
                downloadurl.href = dataFileType + ',' + tableHTMLData;

                // Setting the file name
                downloadurl.download = filename;

                //triggering the function
                downloadurl.click();
            }
        },
        CheckRange(){
            if(this.val_1.length >15){
                this.val_1.pop()
                alert('You can Only Select 16 Values');
            }
        },
        submit() {
            this.disable = true;
            axios.post('api/show_drainreportformonth', {headers: {'Authorization': 'Bearer ' + this.currentUser.token }})
                .then((response) => {
                    this.db_val_1 = response.data.val_1
                    this.db_val_2 = response.data.val_2
                    this.db_val_3 = response.data.val_3
                    this.db_val_4 = response.data.val_4
                    this.db_val_5 = response.data.val_5
                    this.db_val_6 = response.data.val_6
                    this.db_val_7 = response.data.val_7
                    console.log(this.db_val_2)
                })
                .catch(err => {
                    console.log(err);
                })
        },
        reloadPage() {
            window.location.reload();
        }
    },
    computed: {
        currentUser() {
            return this.$store.getters.currentUser
        }
    }
}
</script>
<style scoped>

body{
    width:100% !important;
    min-width: 100% !important;
    max-width: 100% !important;
    background-color: indianred;
}
.paging-nav {
    text-align: right;
    padding-top: 2px;
}

.paging-nav a {
    margin: auto 1px;
    text-decoration: none;
    display: inline-block;
    padding: 1px 7px;
    background: #91b9e6;
    color: white;
    border-radius: 3px;
}

.paging-nav .selected-page {
    background: #187ed5;
    font-weight: bold;
}
/*///*/
.custom-st{
    padding:10px;
    text-align:left;
    height: 29px;

}
.custom-table{

    color:white;
}
.custom-table th{
    border:2px solid black;
}
.custom-table td{
    border:2px solid black;
}
.table-style-me{
    border: 1px solid !important;
    font-size: 12px !important;

}
.table-style-me th{
    font-size: 15px;
}
.table-style-me td{
    border-left: 1px solid;
    border-right: 1px solid;
}
/*th h6{*/
/*    font-size: 0.9rem;*/
/*}*/

@media only screen and (max-width: 1840px) {
    .table-style-me td {
        padding:0px;
    }
    .custom-st{
        text-align:center;
        padding:5px;
        padding-left: 0px;
        height: fit-content;
        font-size: 9px;
    }

    .custom-padding{
        padding-bottom:5px;
    }
    .custom-padding-two{
        padding-bottom:8px;
    }
    .custom-padding-three{
        padding-bottom:7px;
    }
    .custom-padding-four{
        padding-bottom:0px;
        padding-top:2px;
    }
    .custom-input-padding{
        padding-bottom:1.8px;
    }
}
@media only screen and (min-width: 1410px)  {
    .custom-padding-four{
        padding-bottom:22px !important;
        padding-top:2px;
    }

}
@media only screen and (max-width: 1410px)  {
    .flow-padding-two{
        padding-bottom:7px !important;
    }
}
@media only screen and (max-width: 1310px)  {
    .flow-padding-three{
        padding-bottom:7px !important;
    }
}
@media only screen and (max-width: 1375px)  {
    .flow-padding{
        padding-bottom: 7.8px;
    }
}
@media only screen and (max-width: 1220px)  {
    .flow-padding{
        padding-bottom:15px !important;
    }
    .print-btn{
        left: 79% !important;
    }
}
@media only screen and (max-width: 1130px)  {
    .flow-padding-two{
        padding-bottom:15px !important;
    }
    .flow-padding-one{
        padding-bottom:20px !important;
    }
}
@media only screen and (max-width: 1080px) {
    .flow-padding-three{
        padding-bottom:15px !important;
    }
}
@media only screen and (max-width: 1037px) {

    .flow-padding-three{
        padding-bottom:19px !important;
    }
    .flow-padding-two{
        padding-bottom:20px !important;
    }
    .flow-padding{
        padding-bottom:37px !important;
    }
    .custom-padding{
        padding-bottom:5px;
    }
    .custom-padding-two{
        padding-bottom:11px !important;
    }
    .custom-padding-three{
        padding-bottom:22px;
    }
    .custom-padding-four{
        padding-bottom:52px;
    }
    .custom-input-padding{
        padding-bottom:5.5px;
    }
}
@media only screen and (max-width: 800px) {

    .table-custom-style{
        margin-left: 80px !important;
    }

}
@media only screen and (max-width: 600px) {
    .print-btn{
        left: 82% !important;
    }
}
@media only screen and (max-width: 500px) {
    .table-style-me{
        width: 83%!important;
        margin-left: 40px;
    }
}

</style>
