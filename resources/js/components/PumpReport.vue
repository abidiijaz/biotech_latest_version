<template>
    <div className="col-md-12" style="padding: 0px;">

        <h1 style="text-align: center; padding-top: 30px;margin-bottom:15px !important;">Pumps ON/OFF Report</h1>
<div class="table-container col-md-10 m-auto">
        <form name="chartForm" @submit.prevent="submit">
            <table class="table table-style-me" style="display:inline-table;width:19%; text-align: center; color: white;">
                <tr style="border: none">

                    <th colspan="3"> <h6>Pre Esterification</h6></th>
                </tr>
                <tr style="background-color:#4a4a4a;">
                    <th>Name</th>
                    <th>level</th>
                   
                </tr>
                <tr>
                    <td>P810 A</td>
                    <td><input value="p810a" v-model="val_1" type="checkbox" :disabled="disable" v-on:click="CheckRange"></td>
                   
                <tr>
                    <td>P810 B</td>
                    <td><input value="p810b" v-model="val_1" type="checkbox" :disabled="disable" v-on:click="CheckRange"></td>
                   
                </tr>
                <tr>
                    <td>P810 C</td>
                    <td><input value="p810c" v-model="val_1" type="checkbox" :disabled="disable" v-on:click="CheckRange"></td>
                   
                </tr>
                <tr>
                    <td>GST AGT</td>
                     <td><input value="gst" v-model="val_1" type="checkbox" :disabled="disable" v-on:click="CheckRange"></td>
                   
                </tr>
                <tr>
                    <td>.</td>
                     <td><input value="bvo_13" v-model="val_1" type="hidden" :disabled="disable" v-on:click="CheckRange"></td>
                   
                </tr>
                <tr>
                    <td>.</td>
                    <td><input value="rdl_1" v-model="val_1" type="hidden" :disabled="disable" v-on:click="CheckRange"></td>
                    
                </tr>
                <tr>
                    <td>.</td>
                    <td><input value="rdl_2" v-model="val_1" type="hidden" :disabled="disable" v-on:click="CheckRange"></td>
                   
                </tr>
                <tr>
                    <td>.</td>
                    <td><input value="rdl_23" v-model="val_1" type="hidden" :disabled="disable" v-on:click="CheckRange"></td>
                  
                </tr>
                <tr>
                    <td>.</td>
                    <td><input value="rdl_24" v-model="val_1" type="hidden" :disabled="disable" v-on:click="CheckRange"></td>
                   
                </tr>
                <tr>
                    <td>.</td>
                    <td><input value="rdl_18" v-model="val_1" type="hidden" :disabled="disable" v-on:click="CheckRange"></td>
                    
                </tr>
                <tr>
                    <td>.</td>
                    <td><input value="rdl_12" v-model="val_1" type="hidden" :disabled="disable" v-on:click="CheckRange"></td>
                   
                </tr>
                <tr>
                    <td>.</td>
                    <td><input value="rdl_1" type="hidden"></td>
                   
                </tr>
                <tr>
                    <td>.</td>
                    <td><input value="rdl_1" type="hidden"></td>
                   
                </tr>
                
            </table>
            <table class="table table-style-me" style="display:inline-table;width:19%; text-align: center; color: white;">
                <tr style="border: none">

                    <th colspan="3"> <h6>Methanol</h6></th>
                </tr>
                <tr style="background-color:#4a4a4a;">
                    <th>Name</th>
                    <th>level</th>
                   
                </tr>
                <tr>
                    <td>.</td>
                    <td>
                        <input value="dpl_2"
                               v-model="val_1" type="hidden" :disabled="disable" v-on:click="CheckRange"></td>
                  
                </tr>
                <tr>
                    <td>.</td>
                    <td><input value="rdl_1"
                               v-model="val_1" type="hidden"></td>
                   
                </tr>
                <tr>
                    <td>.</td>
                    <td> <input value="rdl_1"
                                v-model="val_1" type="hidden"></td>
                   
                </tr>
                <tr>
                    <td>.</td>
                    <td><input value="rdl_1"
                               v-model="val_1" type="hidden"></td>
                   
                </tr>
                <tr>
                    <td>.</td>
                    <td><input value="rdl_1"
                               v-model="val_1" type="hidden"></td>
                 
                </tr>
                <tr>
                    <td>.</td>
                    <td><input value="dpl_3"
                               v-model="val_1" type="hidden" :disabled="disable" v-on:click="CheckRange"></td>
                   
                </tr>
                <tr>
                    <td>.</td>
                    <td><input value="rdl_1"
                               v-model="val_1" type="hidden"></td>
                   
                </tr>
                <tr>
                    <td>.</td>
                    <td><input value="rdl_1"
                               type="hidden"></td>
                    
                </tr>
                <tr>
                    <td>.</td>
                    <td><input value=""
                               type="hidden"></td>
                  
                </tr>
                <tr>
                    <td>.</td>
                    <td><input value="rdl_16"
                               v-model="val_1" type="hidden" :disabled="disable" v-on:click="CheckRange"></td>
                  
                </tr>
                <tr>
                    <td>.</td>
                    <td><input value="rdl_19"
                               v-model="val_1" type="hidden" :disabled="disable" v-on:click="CheckRange"></td>
                   
                </tr>
                <tr><td>.</td><td></td></tr>
                <tr><td>.</td><td></td></tr>
              
            </table>
            <table class="table table-style-me" style="display:inline-table;width:19%; text-align: center; color: white;">
                <tr style="border: none">

                    <th colspan="3"> <h6>Trans Esterification</h6></th>
                </tr>
                <tr style="background-color:#4a4a4a;">
                    <th>Name</th>
                    <th>level</th>
                  
                </tr>
                <tr>
                    <td>.</td>
                    <td>
                        <input value="bvo_8"
                               v-model="val_1" type="hidden" :disabled="disable" v-on:click="CheckRange"></td>
                   
                </tr>
                <tr>
                    <td>.</td>
                    <td><input value="bvo_9"
                               v-model="val_1" type="hidden" :disabled="disable" v-on:click="CheckRange"></td>
                  
                </tr>
                <tr>
                    <td>.</td>
                    <td> <input value="bvo_10"
                                v-model="val_1" type="hidden" :disabled="disable" v-on:click="CheckRange"></td>
                  
                </tr>
                <tr>
                    <td>.</td>
                    <td><input value="" type="hidden"></td>
                   
                </tr>
                <tr>
                    <td>.</td>
                    <td><input value="rdl_6" v-model="val_1" type="hidden" :disabled="disable" v-on:click="CheckRange"></td>
                   
                </tr>
                <tr>
                    <td>.</td>
                    <td><input value="rdl_7"
                               v-model="val_1" type="hidden" :disabled="disable" v-on:click="CheckRange"></td>
                   
                </tr>
                <tr>
                    <td>.</td>
                    <td><input value="dpl_2"
                               v-model="val_1" type="hidden" :disabled="disable" v-on:click="CheckRange"></td>
                   
                </tr>
                <tr>
                    <td>.</td>
                    <td><input value="rdl_1"
                               v-model="val_1" type="hidden"></td>
                  
                </tr>
                <tr>
                    <td>.</td>
                    <td><input value="bvo_1" v-model="val_1" type="hidden" :disabled="disable" v-on:click="CheckRange"> </td>
                   
                </tr>
                <tr>
                    <td>.</td>
                    <td> <input value="bvo_2" v-model="val_1" type="hidden" :disabled="disable" v-on:click="CheckRange"></td>
                   
                </tr>
                <tr>
                    <td>.</td>
                    <td><input value="bvo_3" v-model="val_1" type="hidden" :disabled="disable" v-on:click="CheckRange"></td>
                    
                </tr>
                <tr><td>.</td>
                    <td><input value="bvo_4" v-model="val_1" type="hidden" :disabled="disable" v-on:click="CheckRange"></td>
                   
                    </tr>
                <tr><td>.</td><td><input value="rdl_20"
                                            v-model="val_1" type="hidden" :disabled="disable" v-on:click="CheckRange"></td></tr>
               
               
            </table>
            <table class="table table-style-me" style="display:inline-table;width:19%; text-align: center; color: white;">
                <tr style="border: none">

                    <th colspan="3"> <h6>Distillation</h6></th>
                </tr>
                <tr style="background-color:#4a4a4a;">
                    <th>Name</th>
                    <th>level</th>
                  
                </tr>
                <tr>
                    <td>.</td>
                    <td>
                        <input value="bvo_1"
                               v-model="val_1" type="hidden" :disabled="disable" v-on:click="CheckRange"></td>
                   
                </tr>
                <tr>
                    <td>.</td>
                    <td>
                        <input value="bvo_2"
                               v-model="val_1" type="hidden" :disabled="disable" v-on:click="CheckRange"></td>
                   
                </tr>
                <tr>
                    <td>.</td>
                    <td> <input value="bvo_3"
                                v-model="val_1" type="hidden" :disabled="disable" v-on:click="CheckRange"></td>
                   
                </tr>
                <tr>
                    <td>.</td>
                    <td><input value="bvo_4"
                               v-model="val_1" type="hidden" :disabled="disable" v-on:click="CheckRange"></td>
                   
                </tr>
                <tr>
                    <td>.</td>
                    <td><input value="rdl_1"
                               v-model="val_1" type="hidden"></td>
                    
                </tr>
                <tr>
                    <td>.</td>
                    <td><input value="dpl_1"
                               v-model="val_1" type="hidden" :disabled="disable" v-on:click="CheckRange"></td>
                   
                </tr>
                <tr>
                    <td>.</td>
                    <td><input value="dpl_6"
                               v-model="val_1" type="hidden" :disabled="disable" v-on:click="CheckRange"></td>
                   
                </tr>
                <tr>
                    <td>.</td>
                    <td><input value="dpl_4"
                               v-model="val_1" type="hidden" :disabled="disable" v-on:click="CheckRange"></td>
                 
                </tr>
                <tr>
                    <td>.</td>
                    <td><input value="rdl_1"
                               v-model="val_1" type="hidden"></td>
                  
                </tr>
                <tr>
                    <td>.</td>
                    <td><input value="rdl_1"
                               v-model="val_1" type="hidden"></td>
                   
                </tr>
                <tr>
                    <td>.</td>
                    <td><input value="rdl_1"
                               v-model="val_1" type="hidden"></td>
                  
                </tr>
                <tr><td>.</td><td><input value="dpl_7"
                                              v-model="val_1" type="hidden" :disabled="disable" v-on:click="CheckRange"></td>
                                                                                                                                        </tr>
                <tr><td>.</td><td><input value="dpl_5"
                                            v-model="val_1" type="hidden" :disabled="disable" v-on:click="CheckRange"></td></tr>
               
               
            </table>
            <table class="table table-style-me" style="display:inline-table;width:19%; text-align: center; color: white;">
                <tr style="border: none">

                    <th colspan="3"> <h6>Utilities</h6></th>
                </tr>
                <tr style="background-color:#4a4a4a;">
                    <th>Name</th>
                    <th>level</th>
                  
                </tr>
                <tr>
                    <td>.</td>
                    <td></td>
                  
                </tr>
                <tr>
                    <td>.</td>
                    <td></td>
                  
                </tr>
                <tr>
                    <td>.</td>
                    <td></td>
                   
                </tr>
                <tr>
                    <td>.</td>
                    <td></td>
                   
                </tr>
                <tr>
                    <td>.</td>
                    <td></td>
                  
                </tr>
                <tr>
                    <td>.</td>
                    <td></td>
                   
                </tr>
                <tr>
                    <td>.</td>
                    <td></td>
                   
                </tr>
                <tr>
                    <td>.</td>
                    <td></td>
                   
                </tr>
                <tr><td>.</td><td></td></tr>
                <tr><td>.</td><td></td></tr>
                <tr><td>.</td><td></td></tr>
                <tr><td>.</td><td></td></tr>
                <tr><td>.</td><td></td></tr>
                
            </table>
         <div class="row">
                    <div class="col-md-12 " style="margin-right:117px !important">
                <div class="form-row justify-content-center custom-style-act" style="color:white;">
                    <div class="form-group col-md-3" >
                        <label>Select Timing</label>
                        <select v-model="timing" class="form-control" :disabled="disable">
                            <option value="1">Last 24 Hours</option>
                            <option value="2">Today</option>
                            <option value="3">01 Week</option>
                            <option value="4">01 Month</option>
                            <option value="5">Manual Select Time</option>
                        </select>
                    </div>
 <span v-if="timing == '5'">
                            <div class="form-group " >
                                <label>Select Timing</label>
                                <input type="datetime-local" class="form-control" v-model="startdate" style="width: auto;" id="js_fromdate">
                            </div>

                            <div class="form-group " >
                                <label>Select Timing</label>
                                <input type="datetime-local" class="form-control" v-model="enddate" style="width: auto;" id="js_fromdate">
                            </div>
                    </span>
                    <div class="form-group custom-act-button" style="margin-top: 31px;margin-left:4px;">
                        <input type="submit" value="Show Selection" class="btn btn-success float-left" :disabled="disable">
                        <button @click="reloadPage" class="btn btn-primary float-left ml-1">Reset Page</button>
                    </div>

                   
                </div>
            </div>
             
           </div>
            <!-- <div class="col-md-8 m-auto" style="margin-right:117px !important">
                <div class="form-row" style="color:white;">
                  
                    <div class="form-group col-md-3" >
                        <label>Select Timing</label>
                        <select v-model="timing" class="form-control" :disabled="disable">
                            <option value="1">Last 24 Hours</option>
                            <option value="2">Today</option>
                            <option value="3">01 Week</option>
                            <option value="4">01 Month</option>
                            <option value="5">Manual Select Time</option>
                        </select>
                    </div>

                    <div class="form-group col-md-3" style="margin-top: 31px; display: -webkit-inline-box;">
                        <input type="submit" value="Show Selection" class="btn btn-success float-left" :disabled="disable">
                        <button @click="reloadPage" class="btn btn-primary float-left ml-1">Reset Page</button>
                    </div>

                    <span v-if="timing == '5'" style="width:-webkit-fill-available;">
                            <div class="form-group col-md-3" style="padding-left:5px;">
                                <label>Select Timing</label>
                                <input type="datetime-local" class="form-control" v-model="startdate" style="width: auto;" id="js_fromdate">
                            </div>

                            <div class="form-group col-md-3" style="padding-left:5px;">
                                <label>Select Timing</label>
                                <input type="datetime-local" class="form-control" v-model="enddate" style="width: auto;" id="js_fromdate">
                            </div>
                    </span>
                </div>
            </div> -->

        </form>
</div>
        <!--        <button @click="ExportExcel('xls')" >Export Excel</button>-->
        <input type="button" class="btn btn-success print-btn" @click="tableToExcel" value="Export to Excel" style="position:absolute; left: 84%; top: 37px;">
        <div class="container-2">
            <table class="table custom-table" id="testTable" style="font-size:15px;width: auto; margin: 0 auto; margin-bottom: 40px; text-align: center; " ref="exportable_table">

                <tbody>
                <tr>
                    <td style="width: 119px; height: 100px;border:none;"><img src="https://biotech.starautomation.net/images/logo.png" style="width:75px;height:75px;"></td>
                    <td v-if="val_1.length == 1" style="width:370px;vertical-align: bottom;border:none;"><h2>
                        Time <span style="color:#ba4848" v-if="timing == 1">Last 24 Hours</span>
                        <span style="color:#ba4848" v-if="timing == 2">Today</span>
                        <span style="color:#ba4848" v-if="timing == 3">01 Week</span>
                        <span style="color:#ba4848" v-if="timing == 4">01 Month</span>
                        <span v-if="timing == 5">
                            <span style="color:#ba4848">{{ startdate | formatDate }}</span>
                            To <span style="color:#ba4848">{{ enddate | formatDate }}</span>
                        </span>
                    </h2>
                    </td>
                    <td v-else :colspan="val_1.length" style="vertical-align: bottom;border:none;"><h2>
                        Time <span style="color:#ba4848" v-if="timing == 1">Last 24 Hours</span>
                        <span style="color:#ba4848" v-if="timing == 2">Today</span>
                        <span style="color:#ba4848" v-if="timing == 3">01 Week</span>
                        <span style="color:#ba4848" v-if="timing == 4">01 Month</span>
                        <span v-if="timing == 5" >
                            <span style="color:#ba4848">{{ startdate | formatDate }}</span>
                            To <span style="color:#ba4848">{{ enddate | formatDate }}</span>
                        </span>
                    </h2>
                    </td>
                </tr>
                <tr>
                    <th style="border:1px solid black;">Date Timing</th>
                    <th style="border:1px solid black;" v-if="val_1[0] == 'p810a'">P810 A</th>
                    <th style="border:1px solid black;" v-if="val_1[0] == 'p810b'">P810 B</th>
                    <th style="border:1px solid black;" v-if="val_1[0] == 'p810c'">P810 C</th>
                    <th style="border:1px solid black;" v-if="val_1[0] == 'gst'">GST AGT</th>

                    
                    <th style="border:1px solid black;" v-if="val_1[1] == 'p810a'">P810 A</th>
                    <th style="border:1px solid black;" v-if="val_1[1] == 'p810b'">P810 B</th>
                    <th style="border:1px solid black;" v-if="val_1[1] == 'p810c'">P810 C</th>
                    <th style="border:1px solid black;" v-if="val_1[1] == 'gst'">GST AGT</th>

                   
                    <th style="border:1px solid black;" v-if="val_1[2] == 'p810a'">P810 A</th>
                    <th style="border:1px solid black;" v-if="val_1[2] == 'p810b'">P810 B</th>
                    <th style="border:1px solid black;" v-if="val_1[2] == 'p810c'">P810 C</th>
                    <th style="border:1px solid black;" v-if="val_1[2] == 'gst'">GST AGT</th>

                    <th style="border:1px solid black;" v-if="val_1[3] == 'p810a'">P810 A</th>
                    <th style="border:1px solid black;" v-if="val_1[3] == 'p810b'">P810 B</th>
                    <th style="border:1px solid black;" v-if="val_1[3] == 'p810c'">P810 C</th>
                    <th style="border:1px solid black;" v-if="val_1[3] == 'gst'">GST AGT</th>

                </tr>
                <tr v-for="(field, index) in db_val_1">
                    <td style="border:1px solid black;">
                        {{field.timing | formatDate1 }}
                    </td>
                    <td style="border:1px solid black;" v-if="val_1[0] == 'p810a'" >
                        <span v-if="field.p810a == 0">OFF</span>
                        <span v-else>ON</span>
                    </td>
                    <td style="border:1px solid black;" v-if="val_1[0] == 'p810b'" >
                        <span v-if="field.p810b == 0">OFF</span>
                        <span v-else>ON</span>
                    </td>
                    <td style="border:1px solid black;" v-if="val_1[0] == 'p810c'" >
                        <span v-if="field.p810c == 0">OFF</span>
                        <span v-else>ON</span>
                    </td>
                    <td style="border:1px solid black;" v-if="val_1[0] == 'gst'" >
                        <span v-if="field.gst == 0">OFF</span>
                        <span v-else>ON</span>
                    </td>

                    <td style="border:1px solid black;" v-if="val_1[1] == 'p810a'" >
                        <span v-if="field.p810a == 0">OFF</span>
                        <span v-else>ON</span>
                    </td>
                    <td style="border:1px solid black;" v-if="val_1[1] == 'p810b'" >
                        <span v-if="field.p810b == 0">OFF</span>
                        <span v-else>ON</span>
                    </td>
                    <td style="border:1px solid black;" v-if="val_1[1] == 'p810c'" >
                        <span v-if="field.p810c == 0">OFF</span>
                        <span v-else>ON</span>
                    </td>
                    <td style="border:1px solid black;" v-if="val_1[1] == 'gst'" >
                        <span v-if="field.gst == 0">OFF</span>
                        <span v-else>ON</span>
                    </td>

                    <td style="border:1px solid black;" v-if="val_1[2] == 'p810a'" >
                        <span v-if="field.p810a == 0">OFF</span>
                        <span v-else>ON</span>
                    </td>
                    <td style="border:1px solid black;" v-if="val_1[2] == 'p810b'" >
                        <span v-if="field.p810b == 0">OFF</span>
                        <span v-else>ON</span>
                    </td>
                    <td style="border:1px solid black;" v-if="val_1[2] == 'p810c'" >
                        <span v-if="field.p810c == 0">OFF</span>
                        <span v-else>ON</span>
                    </td>
                    <td style="border:1px solid black;" v-if="val_1[2] == 'gst'" >
                        <span v-if="field.gst == 0">OFF</span>
                        <span v-else>ON</span>
                    </td>

                    <td style="border:1px solid black;" v-if="val_1[3] == 'p810a'" >
                        <span v-if="field.p810a == 0">OFF</span>
                        <span v-else>ON</span>
                    </td>
                    <td style="border:1px solid black;" v-if="val_1[3] == 'p810b'" >
                        <span v-if="field.p810b == 0">OFF</span>
                        <span v-else>ON</span>
                    </td>
                    <td style="border:1px solid black;" v-if="val_1[3] == 'p810c'" >
                        <span v-if="field.p810c == 0">OFF</span>
                        <span v-else>ON</span>
                    </td>
                    <td style="border:1px solid black;" v-if="val_1[3] == 'gst'" >
                        <span v-if="field.gst == 0">OFF</span>
                        <span v-else>ON</span>
                    </td>
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
            setInterval:'1',
            val_1  : [],
            startdate:'',
            enddate:'',
            select_record_option:[],
            select_record:[],
            select_db_record: '',
            db_val_1: [],
            db_val_2: [],
            db_val_3: [],
            loopstarting:0,
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
            axios.post('api/onoff_pumpreport',[this.val_1,this.setInterval,this.timing,this.startdate,this.enddate], {headers: {'Authorization': 'Bearer ' + this.currentUser.token }})
                .then((response) => {
                    this.db_val_1 = response.data.pump_data1
                    this.db_val_2 = response.data.pump_data2
                    this.db_val_3 = response.data.pump_data3
                    if(this.db_val_1.length > this.db_val_2.length && this.db_val_1.length > this.db_val_3.length){
                        this.loopstarting = this.db_val_1.length;
                    }else if(this.db_val_2.length > this.db_val_1.length && this.db_val_2.length > this.db_val_3.length){
                        this.loopstarting = this.db_val_2.length;
                    }else if(this.db_val_3.length > this.db_val_1.length && this.db_val_3.length > this.db_val_2.length){
                        this.loopstarting = this.db_val_3.length;
                    }
                    console.log(this.loopstarting)
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
@media only screen and (max-width: 768px) {
    .custom-act-button{
       
        margin-top: 0px !important;
    }
   
}
@media only screen and (max-width: 500px) {
    .table-style-me{
        width: 83%!important;
        margin-left: 40px;
    }
     .custom-style-act{
        margin-left:15%;
        width:100%;
    }
}

</style>
