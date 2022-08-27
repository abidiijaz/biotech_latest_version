<template>
    <div className="col-md-12" style="padding: 0px;">

        <h1 style="text-align: center; padding-top: 30px;margin-bottom:15px !important;">Level Alarm Report</h1>
<div class="table-container col-md-10 m-auto">
        <form name="chartForm" @submit.prevent="submit">
           
            <table class="table table-style-me" style="display:inline-table;width:19%; text-align: center; color: white;">
                <tr style="border: none">

                    <th colspan="3"> <h6>Pre Esterification</h6></th>
                </tr>
                <tr style="background-color:#4a4a4a;">
                    <th>Name</th>
                    <th>level</th>
                    <th>Temp</th>
                    <th>Pr</th>
                </tr>
                <tr>
                    <td>Settling A</td>
                    <td><input value="rdl13_status" v-model="val_1" type="checkbox" :disabled="disable" v-on:click="CheckRange"></td>
                    <td>.</td>
                    <td>.</td>
                <tr>
                    <td>Settling B</td>
                    <td><input value="rdl14_status" v-model="val_1" type="checkbox" :disabled="disable" v-on:click="CheckRange"></td>
                    <td>.</td>
                     <td>.</td>
                </tr>
                <tr>
                    <td>Settling C</td>
                    <td><input value="rdl15_status" v-model="val_1" type="checkbox" :disabled="disable" v-on:click="CheckRange"></td>
                    <td>.</td>
                     <td>.</td>
                </tr>
                <tr>
                    <td>E201</td>
                    <td><input value="rdl1_status" type="hidden"></td>
                    <td>.</td>
                     <td>.</td>
                </tr>
                <tr>
                    <td>E101</td>
                    <td><input value="rdl1_status" type="hidden"></td>
                    <td>.</td>
                     <td>.</td>
                </tr>
                <tr>
                    <td>D101A</td>
                    <td><input value="rdl1_status" v-model="val_1" type="checkbox" :disabled="disable" v-on:click="CheckRange"></td>
                    <td>.</td>
                     <td>.</td>
                </tr>
                <tr>
                    <td>D101B</td>
                    <td><input value="rdl2_status" v-model="val_1" type="checkbox" :disabled="disable" v-on:click="CheckRange"></td>
                    <td>.</td>
                     <td>.</td>
                </tr>
                <tr>
                    <td>PPRA</td>
                    <td><input value="rdl23_status" v-model="val_1" type="checkbox" :disabled="disable" v-on:click="CheckRange"></td>
                    <td>.</td>
                     <td>.</td>
                </tr>
                <tr>
                    <td>PPRB</td>
                    <td><input value="rdl24_status" v-model="val_1" type="checkbox" :disabled="disable" v-on:click="CheckRange"></td>
                    <td>.</td>
                     <td>.</td>
                </tr>
                <tr>
                    <td>GST</td>
                    <td><input value="rdl18_status" v-model="val_1" type="checkbox" :disabled="disable" v-on:click="CheckRange"></td>
                    <td>.</td>
                     <td>.</td>
                </tr>
                <tr>
                    <td>GLV</td>
                    <td><input value="rdl12_status" v-model="val_1" type="checkbox" :disabled="disable" v-on:click="CheckRange"></td>
                    <td>.</td>
                     <td></td>
                </tr>
                <tr>
                    <td>GLV Evap</td>
                    <td><input value="rdl1_status" type="hidden"></td>
                    <td>.</td>
                     <td>.</td>
                </tr>
                <tr>
                    <td>GLV T</td>
                    <td><input value="rdl1_status" type="hidden"></td>
                    <td>.</td>
                     <td>.</td>
                </tr>
                <tr>
                    <td>GLV M</td>
                    <td><input value="rdl1_status" type="hidden"></td>
                    <td>.</td>
                     <td>.</td>
                </tr>
                <tr>
                    <td>GLV B</td>
                    <td><input value="rdl1_status" type="hidden"></td>
                    <td>.</td>
                     <td>.</td>
                </tr>
                <tr>
                    <td>D405A</td>
                    <td><input value="rdl3_status" v-model="val_1" type="checkbox" :disabled="disable" v-on:click="CheckRange"></td>
                    <td>.</td>
                     <td>.</td>
                </tr>
                <tr>
                    <td>D405B</td>
                    <td><input value="rdl4_status" v-model="val_1" type="checkbox" :disabled="disable" v-on:click="CheckRange"></td>
                    <td><input value="rdl1_status" type="hidden"></td>
                     <td>.</td>
                </tr>
                <tr>
                    <td>D405C</td>
                    <td><input value="rdl5_status" v-model="val_1" type="checkbox" :disabled="disable" v-on:click="CheckRange"></td>
                    <td><input value="rdl1_status" type="hidden"></td>
                     <td>.</td>
                </tr>
                <tr>
                    <td>H2SO4</td>
                    <td><input value="rdl25_status" v-model="val_1" type="checkbox" :disabled="disable" v-on:click="CheckRange"></td>
                    <td><input value="rdl1_status" type="hidden"></td>
                     <td>.</td>
                </tr>
                <tr>
                    <td>SP1</td>
                    <td><input value="rdl20_status" v-model="val_1" type="checkbox" :disabled="disable" v-on:click="CheckRange"></td>
                    <td></td>
                     <td>.</td>
                </tr>
                <tr>
                    <td>SP2</td>
                    <td><input value="rdl21_status" v-model="val_1" type="checkbox" :disabled="disable" v-on:click="CheckRange"></td>
                    <td></td>
                    <td>.</td>
                </tr>
                 <tr><td>PIT</td>
                    <td><input value="pit_level" v-model="val_1" type="hidden" :disabled="disable" v-on:click="CheckRange"></td>
                    <td></td>
                    <td>.</td>
                </tr>
               
                
            </table>
            <table class="table table-style-me" style="display:inline-table;width:19%; text-align: center; color: white;">
                <tr style="border: none">

                    <th colspan="3"> <h6>Methanol</h6></th>
                </tr>
                <tr style="background-color:#4a4a4a;">
                    <th>Name</th>
                    <th>level</th>
                    <th>Temp</th>
                    <th>Pr</th>
                </tr>
                <tr>
                    <td>E401</td>
                    <td>
                        <input value="dpl2_status"
                               v-model="val_1" type="checkbox" :disabled="disable" v-on:click="CheckRange"></td>
                    <td></td>
                    <td>.</td>
                </tr>
                <tr>
                    <td>Green</td>
                    <td><input value="rdl1_status"
                               v-model="val_1" type="hidden"></td>
                    <td></td>
                    <td>.</td>
                </tr>
                <tr>
                    <td>Old Green</td>
                    <td> <input value="rdl1_status"
                                v-model="val_1" type="hidden"></td>
                    <td></td>
                                <td>.</td>
                </tr>
                <tr>
                    <td>Blue</td>
                    <td><input value="rdl1_status"
                               v-model="val_1" type="hidden"></td>
                    <td></td>
                               <td>.</td>
                </tr>
                <tr>
                    <td>E601</td>
                    <td><input value="rdl1_status"
                               v-model="val_1" type="hidden"></td>
                    <td></td>
                               <td>.</td>
                </tr>
                <tr>
                    <td>T601</td>
                    <td><input value="dpl3_status"
                               v-model="val_1" type="checkbox" :disabled="disable" v-on:click="CheckRange"></td>
                    <td><input value="rdl1_status"
                               v-model="val_1" type="hidden"></td>
                               <td></td>
                </tr>
                <tr>
                    <td>T601 T</td>
                    <td><input value="rdl1_status"
                               v-model="val_1" type="hidden"></td>
                    <td></td>
                               <td>.</td>
                </tr>
                <tr>
                    <td>T601 M</td>
                    <td><input value="rdl1_status"
                               type="hidden"></td>
                    <td></td>
                               <td>.</td>
                </tr>
                <tr>
                    <td>T601 B</td>
                    <td><input value=""
                               type="hidden"></td>
                    <td></td>
                               <td>.</td>
                </tr>
                <tr>
                    <td>Methanol 1</td>
                    <td><input value="rdl16_status"
                               v-model="val_1" type="checkbox" :disabled="disable" v-on:click="CheckRange"></td>
                    <td><input value="rdl1_status"
                               v-model="val_1" type="hidden"></td>
                               <td>.</td>
                </tr>
                <tr>
                    <td>Methanol 2</td>
                    <td><input value="rdl19_status"
                               v-model="val_1" type="checkbox" :disabled="disable" v-on:click="CheckRange"></td>
                    <td><input value="rdl1_status"
                               v-model="val_1" type="hidden"></td>
                               <td>.</td>
                </tr>
                <tr><td>GLV Cond</td><td></td><td></td><td>.</td></tr>
                <tr><td>.</td><td></td><td></td><td>.</td></tr>
                <tr><td>.</td><td></td><td></td><td>.</td></tr>
                <tr><td>.</td><td></td><td></td><td>.</td></tr>
                <tr><td>.</td><td></td><td></td><td>.</td></tr>
                <tr><td>.</td><td></td><td></td><td>.</td></tr>
                <tr><td>.</td><td></td><td></td><td>.</td></tr>
                <tr><td>.</td><td></td><td></td><td>.</td></tr>
                <tr><td>.</td><td></td><td></td><td>.</td></tr>
                <tr><td>.</td><td></td><td></td><td>.</td></tr>
                <tr><td>.</td><td></td><td></td><td>.</td></tr>
               
            </table>
            <table class="table table-style-me" style="display:inline-table;width:19%; text-align: center; color: white;">
                <tr style="border: none">

                    <th colspan="3"> <h6>Trans Esterification</h6></th>
                </tr>
                <tr style="background-color:#4a4a4a;">
                    <th>Name</th>
                    <th>level</th>
                    <th>Temp</th>
                    <th>Pr</th>
                </tr>
                <tr>
                    <td>D405 A</td>
                    <td>
                        <input value="rdl3_status"
                               v-model="val_1" type="checkbox" :disabled="disable" v-on:click="CheckRange"></td>
                    <td>  <input value="rdl1_status"
                                 v-model="val_1" type="hidden"></td>
                                 <td>.</td>
                </tr>
                <tr>
                    <td>D405 B</td>
                    <td><input value="rdl4_status"
                               v-model="val_1" type="checkbox" :disabled="disable" v-on:click="CheckRange"></td>
                    <td><input value="rdl1_status"
                               v-model="val_1" type="hidden"></td>
                               <td>.</td>
                </tr>
                <tr>
                    <td>D405 C</td>
                    <td> <input value="rdl5_status"
                                v-model="val_1" type="checkbox" :disabled="disable" v-on:click="CheckRange"></td>
                    <td> <input value="rdl1_status"
                                v-model="val_1" type="hidden"></td>
                                <td>.</td>
                </tr>
                <tr>
                    <td>Trans Reac</td>
                    <td><input value=""
                               type="hidden"></td>
                    <td></td>
                    <td>.</td>
                </tr>
                <tr>
                    <td>C401 A</td>
                    <td><input value="rdl6_status"
                               v-model="val_1" type="checkbox" :disabled="disable" v-on:click="CheckRange"></td>
                    <td><input value="rdl1_status"
                               v-model="val_1" type="hidden"></td>
                               <td>.</td>
                </tr>
                <tr>
                    <td>C401 B</td>
                    <td><input value="rdl7_status"
                               v-model="val_1" type="checkbox" :disabled="disable" v-on:click="CheckRange"></td>
                    <td><input value="rdl1_status"
                               v-model="val_1" type="hidden"></td>
                               <td>.</td>
                </tr>
                <tr>
                    <td>E401</td>
                    <td><input value="dpl2_status"
                               v-model="val_1" type="checkbox" :disabled="disable" v-on:click="CheckRange"></td>
                    <td></td>
                               <td>.</td>
                </tr>
                <tr>
                    <td>Hot Water</td>
                    <td><input value="rdl1_status"
                               v-model="val_1" type="hidden"></td>
                    <td></td>
                                <td>.</td>
                </tr>
                <tr>
                    <td>D402 A</td>
                    <td><input value="rdl8_status"
                               v-model="val_1" type="checkbox" :disabled="disable" v-on:click="CheckRange"> </td>
                    <td></td>
                               <td>.</td>
                </tr>
                <tr>
                    <td>D402 B</td>
                    <td> <input value="rdl9_status"
                                v-model="val_1" type="checkbox" :disabled="disable" v-on:click="CheckRange"></td>
                    <td></td>
                                <td>.</td>
                </tr>
                <tr>
                    <td>D402 C</td>
                    <td><input value="rdl10_status"
                               v-model="val_1" type="checkbox" :disabled="disable" v-on:click="CheckRange"></td>
                    <td></td>
                               <td>.</td>
                </tr>
                <tr><td>D402 D</td>
                    <td><input value="rdl11_status"
                               v-model="val_1" type="checkbox" :disabled="disable" v-on:click="CheckRange"></td>
                    <td>
                       
                    </td>
                    <td>.</td>
                    </tr>
                <tr><td>SP 1</td><td><input value="rdl20_status"
                                            v-model="val_1" type="checkbox" :disabled="disable" v-on:click="CheckRange"></td><td> <input value="rdl1_status"
                                                                                                                                         v-model="val_1" type="hidden"></td><td>.</td></tr>
                <tr><td>SP 2</td><td><input value="rdl21_status"
                                            v-model="val_1" type="checkbox" :disabled="disable" v-on:click="CheckRange"></td><td><input value="rdl1_status"
                                                                                                                                        v-model="val_1" type="hidden"></td><td>.</td></tr>
                <tr><td>SP 3</td><td><input value="rdl22_status"
                                            v-model="val_1" type="checkbox" :disabled="disable" v-on:click="CheckRange"></td><td><input value="rdl1_status"
                                                 v-model="val_1" type="hidden"></td><td>.</td></tr>
                <tr><td>.</td><td></td><td></td><td>.</td></tr>
                <tr><td>.</td><td></td><td></td><td>.</td></tr>
                <tr><td>.</td><td></td><td></td><td>.</td></tr>
                <tr><td>.</td><td></td><td></td><td>.</td></tr>
                <tr><td>.</td><td></td><td></td><td>.</td></tr>
                <tr><td>.</td><td></td><td></td><td>.</td></tr>
                <tr><td>.</td><td></td><td></td><td>.</td></tr>
              
            </table>
            <table class="table table-style-me" style="display:inline-table;width:19%; text-align: center; color: white;">
                <tr style="border: none">

                    <th colspan="3"> <h6>Distillation</h6></th>
                </tr>
                <tr style="background-color:#4a4a4a;">
                    <th>Name</th>
                    <th>level</th>
                    <th>Temp</th>
                    <th>Pr</th>
                </tr>
                <tr>
                    <td>D402 A</td>
                    <td>
                        <input value="rdl8_status"
                               v-model="val_1" type="checkbox" :disabled="disable" v-on:click="CheckRange"></td>
                    <td></td>
                                <td>.</td>
                </tr>
                <tr>
                    <td>D402 B</td>
                    <td>
                        <input value="rdl9_status"
                               v-model="val_1" type="checkbox" :disabled="disable" v-on:click="CheckRange"></td>
                    <td></td>
                                <td>.</td>
                </tr>
                <tr>
                    <td>D402 C</td>
                    <td> <input value="rdl10_status"
                                v-model="val_1" type="checkbox" :disabled="disable" v-on:click="CheckRange"></td>
                    <td></td>
                                <td>.</td>
                </tr>
                <tr>
                    <td>D402 D</td>
                    <td><input value="rdl11_status"
                               v-model="val_1" type="checkbox" :disabled="disable" v-on:click="CheckRange"></td>
                    <td></td>
                                <td>.</td>
                </tr>
                <tr>
                    <td>E501</td>
                    <td><input value="rdl1_status"
                               v-model="val_1" type="hidden"></td>
                    <td></td>
                               <td>.</td>
                </tr>
                <tr>
                    <td>D501</td>
                    <td><input value="dpl1_status"
                               v-model="val_1" type="checkbox" :disabled="disable" v-on:click="CheckRange"></td>
                    <td></td>
                               <td>.</td>
                </tr>
                <tr>
                    <td>T501</td>
                    <td><input value="dpl6_status"
                               v-model="val_1" type="checkbox" :disabled="disable" v-on:click="CheckRange"></td>
                    <td><input value=""
                               v-model="val_1" type="hidden"></td>
                               <td>.</td>
                </tr>
                <tr>
                    <td>D503</td>
                    <td><input value="dpl4_status"
                               v-model="val_1" type="checkbox" :disabled="disable" v-on:click="CheckRange"></td>
                    <td><input value=""
                               v-model="val_1" type="hidden"></td>
                               <td>.</td>
                </tr>
                <tr>
                    <td>T501 T</td>
                    <td><input value="rdl1_status"
                               v-model="val_1" type="hidden"></td>
                    <td></td>
                               <td>.</td>
                </tr>
                <tr>
                    <td>T501 M</td>
                    <td><input value="rdl1_status"
                               v-model="val_1" type="hidden"></td>
                    <td></td>
                               <td>.</td>
                </tr>
                <tr>
                    <td>T501 B</td>
                    <td><input value="rdl1_status"
                               v-model="val_1" type="hidden"></td>
                    <td></td>
                               <td>.</td>
                </tr>
                <tr><td>T502 B</td><td><input value="dpl7_status"
                                              v-model="val_1" type="checkbox" :disabled="disable" v-on:click="CheckRange"></td><td><input value=""
                                                                                                                                          v-model="val_1" type="hidden"></td>
                                                                                                                                          <td>.</td></tr>
                <tr><td>D504</td><td><input value="dpl5_status"
                                            v-model="val_1" type="checkbox" :disabled="disable" v-on:click="CheckRange"></td><td><input value="rdl1_status"
                                                                                                                                        v-model="val_1" type="hidden"></td>
                                                                                                                                        <td>.</td></tr>
                <tr><td>T502 M</td><td></td>
                                                                                            <td>.</td></tr>
                <tr><td>T502 B</td><td></td>
                                                                                            <td>.</td></tr>
                <tr>
                    <td>Bio Trans</td>
                    <td><input value="rdl1_status" v-model="val_1" type="hidden"></td>
                    <td>.</td>
                    <td>.</td>
                </tr>
                <tr><td> Bio Store</td><td></td><td>.</td></tr>
                <tr><td>Tar Tank</td><td> <input value="rdl1_status"
                                                 v-model="val_1" type="hidden"></td><td> <input value="rdl1_status"
                                                          v-model="val_1" type="hidden"></td><td>.</td></tr>
                <tr><td>Vac Line</td><td><input value="vg_1"
                                                 v-model="val_1" type="hidden"></td><td></td><td>.</td></tr>
                <tr><td>.</td><td></td><td></td><td>.</td></tr>
                <tr><td>.</td><td></td><td></td><td>.</td></tr>
                <tr><td>.</td><td></td><td></td><td>.</td></tr>

              
            </table>
            <table class="table table-style-me" style="display:inline-table;width:19%; text-align: center; color: white;">
                <tr style="border: none">

                    <th colspan="3"> <h6>Utilities</h6></th>
                </tr>
                <tr style="background-color:#4a4a4a;">
                    <th>Name</th>
                    <th>level</th>
                    <th>Temp</th>
                    <th>Pr</th>
                </tr>
                <tr>
                    <td>Dist Header</td>
                    <td></td>
                    <td> </td>
                    <td> .</td>
                </tr>
                <tr>
                    <td>.</td>
                    <td></td>
                    <td></td>
                    <td>.</td>
                </tr>
                <tr>
                    <td>.</td>
                    <td></td>
                    <td> </td>
                    <td>.</td>
                </tr>
                <tr>
                    <td>.</td>
                    <td></td>
                    <td></td>
                    <td>.</td>
                </tr>
                <tr>
                    <td>.</td>
                    <td></td>
                    <td></td>
                    <td>.</td>
                </tr>
                <tr>
                    <td>.</td>
                    <td></td>
                    <td></td>
                    <td>.</td>
                </tr>
                <tr>
                    <td>.</td>
                    <td></td>
                    <td></td>
                    <td>.</td>
                </tr>
                <tr style="background-color:#4A4A4A;">
                    <td>Main</td>
                    <td>All</td>
                    <td></td>
                    <td>.</td>
                </tr>
                
               
                <tr>
                    <td>Steam</td>
                    <td> <input value="st_fm2_flow"
                                v-model="val_1" type="hidden" :disabled="disable" v-on:click="CheckRange"></td>
                    <td></td>
                    <td>.</td>
                </tr>
                <tr>
                    <td>E401</td>
                    <td> <input value="st_fm1_flow"
                                v-model="val_1" type="hidden" :disabled="disable" v-on:click="CheckRange"></td>
                    <td></td>
                    <td>.</td>
                </tr>
                <tr>
                    <td>.</td>
                    <td></td>
                    <td></td>
                    <td>.</td>
                </tr>
                <tr><td>.</td><td></td><td></td><td>.</td></tr>
                <tr><td>.</td><td></td><td></td><td>.</td></tr>
                <tr><td>.</td><td></td><td></td><td>.</td></tr>
                <tr><td>.</td><td></td><td></td><td>.</td></tr>
                <tr><td>.</td><td></td><td></td><td>.</td></tr>
                <tr><td>.</td><td></td><td></td><td>.</td></tr>
                <tr><td>.</td><td></td><td></td><td>.</td></tr>
                <tr><td>.</td><td></td><td></td><td>.</td></tr>
                <tr><td>.</td><td></td><td></td><td>.</td></tr>
                <tr><td>.</td><td></td><td></td><td>.</td></tr>
                <tr><td>.</td><td></td><td></td><td>.</td></tr>

            </table>
           
           
               <div class="row">
                    <div class="col-md-12 " style="margin-right:117px !important">
                <div class="form-row justify-content-center custom-style-act" style="color:white;">
                    <div class="form-group col-md-3" >
                        <label>Select Timing</label>
                        <select v-model="timing" class="form-control" :disabled="disable">
                            <option value="1">Last 24 Hours</option>
                            <option value="2">Today</option>
                            <option value="3">Manual Select Time</option>
                        </select>
                    </div>
 <span v-if="timing == '3'">
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

        </form>
</div>
     
        <!--        <button @click="ExportExcel('xls')" >Export Excel</button>-->
        <input type="button" class="btn btn-success print-btn" @click="tableToExcel" value="Export to Excel" style="position:absolute; left: 84%; top: 37px;">
        <div class="container-2">
            <table class="table custom-table" id="testTable" style="font-size:15px;width: auto; margin: 0 auto; margin-bottom: 40px; text-align: center; "
                   ref="exportable_table">

                <tbody>
                <tr>
                    <td style="width: 119px; height: 100px;border:none !important;"><img src="https://biotech.starautomation.net/images/logo.png" style="width:75px;height:75px;"></td>
                    <td v-if="val_1.length == 1" style="width:370px;vertical-align: bottom;border:none !important;"><h2>
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
                    <td v-else :colspan="val_1.length" style="vertical-align: bottom;border:none !important;"><h2>
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
                </tr>
                <tr>
                    <th style="border:1px solid black;" >Timing</th>
                    <th style="border:1px solid black;" v-if="val_1[0] == 'rdl1_status'">D101A</th>
                    <th style="border:1px solid black;" v-if="val_1[0] == 'rdl2_status'">D101B</th>
                    <th style="border:1px solid black;" v-if="val_1[0] == 'rdl3_status'">D405A</th>
                    <th style="border:1px solid black;" v-if="val_1[0] == 'rdl4_status'">D405B</th>
                    <th style="border:1px solid black;" v-if="val_1[0] == 'rdl5_status'">D405C</th>
                    <th style="border:1px solid black;" v-if="val_1[0] == 'rdl6_status'">C401A</th>
                    <th style="border:1px solid black;" v-if="val_1[0] == 'rdl7_status'">C401B</th>
                    <th style="border:1px solid black;" v-if="val_1[0] == 'rdl8_status'">D402A</th>
                    <th style="border:1px solid black;" v-if="val_1[0] == 'rdl9_status'">D402B</th>
                    <th style="border:1px solid black;" v-if="val_1[0] == 'rdl10_status'">D402C</th>
                    <th style="border:1px solid black;" v-if="val_1[0] == 'rdl11_status'">D402D</th>
                    <th style="border:1px solid black;" v-if="val_1[0] == 'rdl12_status'">GLV</th>
                    <th style="border:1px solid black;" v-if="val_1[0] == 'rdl13_status'">Set A</th>
                    <th style="border:1px solid black;" v-if="val_1[0] == 'rdl14_status'">Set B</th>
                    <th style="border:1px solid black;" v-if="val_1[0] == 'rdl15_status'">Set C</th>
                    <th style="border:1px solid black;" v-if="val_1[0] == 'rdl16_status'">Meth T-1</th>
                    <th style="border:1px solid black;" v-if="val_1[0] == 'rdl17_status'">Tar Tank</th>
                    <th style="border:1px solid black;" v-if="val_1[0] == 'rdl18_status'">GST</th>
                    <th style="border:1px solid black;" v-if="val_1[0] == 'rdl19_status'">Meth T-2</th>
                    <th style="border:1px solid black;" v-if="val_1[0] == 'rdl20_status'">SP - 1</th>
                    <th style="border:1px solid black;" v-if="val_1[0] == 'rdl21_status'">SP - 2</th>
                    <th style="border:1px solid black;" v-if="val_1[0] == 'rdl22_status'">SP - 3</th>
                    <th style="border:1px solid black;" v-if="val_1[0] == 'rdl23_status'">PPRA</th>
                    <th style="border:1px solid black;" v-if="val_1[0] == 'rdl24_status'">PPRB</th>
                    <th style="border:1px solid black;" v-if="val_1[0] == 'rdl25_status'">H₂SO₄</th>
                    <th style="border:1px solid black;" v-if="val_1[0] == 'dpl1_status'">D501</th>
                    <th style="border:1px solid black;" v-if="val_1[0] == 'dpl2_status'">E401</th>
                    <th style="border:1px solid black;" v-if="val_1[0] == 'dpl3_status'">T601</th>
                    <th style="border:1px solid black;" v-if="val_1[0] == 'dpl4_status'">D503</th>
                    <th style="border:1px solid black;" v-if="val_1[0] == 'dpl5_status'">D504</th>
                    <th style="border:1px solid black;" v-if="val_1[0] == 'dpl6_status'">T501</th>
                    <th style="border:1px solid black;" v-if="val_1[0] == 'dpl7_status'">T502</th>
                    <th style="border:1px solid black;" v-if="val_1[0] == 'dpl8_status'">Bio Tank</th>

                     <th style="border:1px solid black;" v-if="val_1[1] == 'rdl1_status'">D101A</th>
                    <th style="border:1px solid black;" v-if="val_1[1] == 'rdl2_status'">D101B</th>
                    <th style="border:1px solid black;" v-if="val_1[1] == 'rdl3_status'">D405A</th>
                    <th style="border:1px solid black;" v-if="val_1[1] == 'rdl4_status'">D405B</th>
                    <th style="border:1px solid black;" v-if="val_1[1] == 'rdl5_status'">D405C</th>
                    <th style="border:1px solid black;" v-if="val_1[1] == 'rdl6_status'">C401A</th>
                    <th style="border:1px solid black;" v-if="val_1[1] == 'rdl7_status'">C401B</th>
                    <th style="border:1px solid black;" v-if="val_1[1] == 'rdl8_status'">D402A</th>
                    <th style="border:1px solid black;" v-if="val_1[1] == 'rdl9_status'">D402B</th>
                    <th style="border:1px solid black;" v-if="val_1[1] == 'rdl10_status'">D402C</th>
                    <th style="border:1px solid black;" v-if="val_1[1] == 'rdl11_status'">D402D</th>
                    <th style="border:1px solid black;" v-if="val_1[1] == 'rdl12_status'">GLV</th>
                    <th style="border:1px solid black;" v-if="val_1[1] == 'rdl13_status'">Set A</th>
                    <th style="border:1px solid black;" v-if="val_1[1] == 'rdl14_status'">Set B</th>
                    <th style="border:1px solid black;" v-if="val_1[1] == 'rdl15_status'">Set C</th>
                    <th style="border:1px solid black;" v-if="val_1[1] == 'rdl16_status'">Meth T-1</th>
                    <th style="border:1px solid black;" v-if="val_1[1] == 'rdl17_status'">Tar Tank</th>
                    <th style="border:1px solid black;" v-if="val_1[1] == 'rdl18_status'">GST</th>
                    <th style="border:1px solid black;" v-if="val_1[1] == 'rdl19_status'">Meth T-2</th>
                    <th style="border:1px solid black;" v-if="val_1[1] == 'rdl20_status'">SP - 1</th>
                    <th style="border:1px solid black;" v-if="val_1[1] == 'rdl21_status'">SP - 2</th>
                    <th style="border:1px solid black;" v-if="val_1[1] == 'rdl22_status'">SP - 3</th>
                    <th style="border:1px solid black;" v-if="val_1[1] == 'rdl23_status'">PPRA</th>
                    <th style="border:1px solid black;" v-if="val_1[1] == 'rdl24_status'">PPRB</th>
                    <th style="border:1px solid black;" v-if="val_1[1] == 'rdl25_status'">H₂SO₄</th>
                    <th style="border:1px solid black;" v-if="val_1[1] == 'dpl1_status'">D501</th>
                    <th style="border:1px solid black;" v-if="val_1[1] == 'dpl2_status'">E401</th>
                    <th style="border:1px solid black;" v-if="val_1[1] == 'dpl3_status'">T601</th>
                    <th style="border:1px solid black;" v-if="val_1[1] == 'dpl4_status'">D503</th>
                    <th style="border:1px solid black;" v-if="val_1[1] == 'dpl5_status'">D504</th>
                    <th style="border:1px solid black;" v-if="val_1[1] == 'dpl6_status'">T501</th>
                    <th style="border:1px solid black;" v-if="val_1[1] == 'dpl7_status'">T502</th>
                    <th style="border:1px solid black;" v-if="val_1[1] == 'dpl8_status'">Bio Tank</th>

                    <th style="border:1px solid black;" v-if="val_1[2] == 'rdl1_status'">D101A</th>
                    <th style="border:1px solid black;" v-if="val_1[2] == 'rdl2_status'">D101B</th>
                    <th style="border:1px solid black;" v-if="val_1[2] == 'rdl3_status'">D405A</th>
                    <th style="border:1px solid black;" v-if="val_1[2] == 'rdl4_status'">D405B</th>
                    <th style="border:1px solid black;" v-if="val_1[2] == 'rdl5_status'">D405C</th>
                    <th style="border:1px solid black;" v-if="val_1[2] == 'rdl6_status'">C401A</th>
                    <th style="border:1px solid black;" v-if="val_1[2] == 'rdl7_status'">C401B</th>
                    <th style="border:1px solid black;" v-if="val_1[2] == 'rdl8_status'">D402A</th>
                    <th style="border:1px solid black;" v-if="val_1[2] == 'rdl9_status'">D402B</th>
                    <th style="border:1px solid black;" v-if="val_1[2] == 'rdl10_status'">D402C</th>
                    <th style="border:1px solid black;" v-if="val_1[2] == 'rdl11_status'">D402D</th>
                    <th style="border:1px solid black;" v-if="val_1[2] == 'rdl12_status'">GLV</th>
                    <th style="border:1px solid black;" v-if="val_1[2] == 'rdl13_status'">Set A</th>
                    <th style="border:1px solid black;" v-if="val_1[2] == 'rdl14_status'">Set B</th>
                    <th style="border:1px solid black;" v-if="val_1[2] == 'rdl15_status'">Set C</th>
                    <th style="border:1px solid black;" v-if="val_1[2] == 'rdl16_status'">Meth T-1</th>
                    <th style="border:1px solid black;" v-if="val_1[2] == 'rdl17_status'">Tar Tank</th>
                    <th style="border:1px solid black;" v-if="val_1[2] == 'rdl18_status'">GST</th>
                    <th style="border:1px solid black;" v-if="val_1[2] == 'rdl19_status'">Meth T-2</th>
                    <th style="border:1px solid black;" v-if="val_1[2] == 'rdl20_status'">SP - 1</th>
                    <th style="border:1px solid black;" v-if="val_1[2] == 'rdl21_status'">SP - 2</th>
                    <th style="border:1px solid black;" v-if="val_1[2] == 'rdl22_status'">SP - 3</th>
                    <th style="border:1px solid black;" v-if="val_1[2] == 'rdl23_status'">PPRA</th>
                    <th style="border:1px solid black;" v-if="val_1[2] == 'rdl24_status'">PPRB</th>
                    <th style="border:1px solid black;" v-if="val_1[2] == 'rdl25_status'">H₂SO₄</th>
                    <th style="border:1px solid black;" v-if="val_1[2] == 'dpl1_status'">D501</th>
                    <th style="border:1px solid black;" v-if="val_1[2] == 'dpl2_status'">E401</th>
                    <th style="border:1px solid black;" v-if="val_1[2] == 'dpl3_status'">T601</th>
                    <th style="border:1px solid black;" v-if="val_1[2] == 'dpl4_status'">D503</th>
                    <th style="border:1px solid black;" v-if="val_1[2] == 'dpl5_status'">D504</th>
                    <th style="border:1px solid black;" v-if="val_1[2] == 'dpl6_status'">T501</th>
                    <th style="border:1px solid black;" v-if="val_1[2] == 'dpl7_status'">T502</th>
                    <th style="border:1px solid black;" v-if="val_1[2] == 'dpl8_status'">Bio Tank</th>

                    <th style="border:1px solid black;" v-if="val_1[3] == 'rdl1_status'">D101A</th>
                    <th style="border:1px solid black;" v-if="val_1[3] == 'rdl2_status'">D101B</th>
                    <th style="border:1px solid black;" v-if="val_1[3] == 'rdl3_status'">D405A</th>
                    <th style="border:1px solid black;" v-if="val_1[3] == 'rdl4_status'">D405B</th>
                    <th style="border:1px solid black;" v-if="val_1[3] == 'rdl5_status'">D405C</th>
                    <th style="border:1px solid black;" v-if="val_1[3] == 'rdl6_status'">C401A</th>
                    <th style="border:1px solid black;" v-if="val_1[3] == 'rdl7_status'">C401B</th>
                    <th style="border:1px solid black;" v-if="val_1[3] == 'rdl8_status'">D402A</th>
                    <th style="border:1px solid black;" v-if="val_1[3] == 'rdl9_status'">D402B</th>
                    <th style="border:1px solid black;" v-if="val_1[3] == 'rdl10_status'">D402C</th>
                    <th style="border:1px solid black;" v-if="val_1[3] == 'rdl11_status'">D402D</th>
                    <th style="border:1px solid black;" v-if="val_1[3] == 'rdl12_status'">GLV</th>
                    <th style="border:1px solid black;" v-if="val_1[3] == 'rdl13_status'">Set A</th>
                    <th style="border:1px solid black;" v-if="val_1[3] == 'rdl14_status'">Set B</th>
                    <th style="border:1px solid black;" v-if="val_1[3] == 'rdl15_status'">Set C</th>
                    <th style="border:1px solid black;" v-if="val_1[3] == 'rdl16_status'">Meth T-1</th>
                    <th style="border:1px solid black;" v-if="val_1[3] == 'rdl17_status'">Tar Tank</th>
                    <th style="border:1px solid black;" v-if="val_1[3] == 'rdl18_status'">GST</th>
                    <th style="border:1px solid black;" v-if="val_1[3] == 'rdl19_status'">Meth T-2</th>
                    <th style="border:1px solid black;" v-if="val_1[3] == 'rdl20_status'">SP - 1</th>
                    <th style="border:1px solid black;" v-if="val_1[3] == 'rdl21_status'">SP - 2</th>
                    <th style="border:1px solid black;" v-if="val_1[3] == 'rdl22_status'">SP - 3</th>
                    <th style="border:1px solid black;" v-if="val_1[3] == 'rdl23_status'">PPRA</th>
                    <th style="border:1px solid black;" v-if="val_1[3] == 'rdl24_status'">PPRB</th>
                    <th style="border:1px solid black;" v-if="val_1[3] == 'rdl25_status'">H₂SO₄</th>
                    <th style="border:1px solid black;" v-if="val_1[3] == 'dpl1_status'">D501</th>
                    <th style="border:1px solid black;" v-if="val_1[3] == 'dpl2_status'">E401</th>
                    <th style="border:1px solid black;" v-if="val_1[3] == 'dpl3_status'">T601</th>
                    <th style="border:1px solid black;" v-if="val_1[3] == 'dpl4_status'">D503</th>
                    <th style="border:1px solid black;" v-if="val_1[3] == 'dpl5_status'">D504</th>
                    <th style="border:1px solid black;" v-if="val_1[3] == 'dpl6_status'">T501</th>
                    <th style="border:1px solid black;" v-if="val_1[3] == 'dpl7_status'">T502</th>
                    <th style="border:1px solid black;" v-if="val_1[3] == 'dpl8_status'">Bio Tank</th>

                    <th style="border:1px solid black;" v-if="val_1[4] == 'rdl1_status'">D101A</th>
                    <th style="border:1px solid black;" v-if="val_1[4] == 'rdl2_status'">D101B</th>
                    <th style="border:1px solid black;" v-if="val_1[4] == 'rdl3_status'">D405A</th>
                    <th style="border:1px solid black;" v-if="val_1[4] == 'rdl4_status'">D405B</th>
                    <th style="border:1px solid black;" v-if="val_1[4] == 'rdl5_status'">D405C</th>
                    <th style="border:1px solid black;" v-if="val_1[4] == 'rdl6_status'">C401A</th>
                    <th style="border:1px solid black;" v-if="val_1[4] == 'rdl7_status'">C401B</th>
                    <th style="border:1px solid black;" v-if="val_1[4] == 'rdl8_status'">D402A</th>
                    <th style="border:1px solid black;" v-if="val_1[4] == 'rdl9_status'">D402B</th>
                    <th style="border:1px solid black;" v-if="val_1[4] == 'rdl10_status'">D402C</th>
                    <th style="border:1px solid black;" v-if="val_1[4] == 'rdl11_status'">D402D</th>
                    <th style="border:1px solid black;" v-if="val_1[4] == 'rdl12_status'">GLV</th>
                    <th style="border:1px solid black;" v-if="val_1[4] == 'rdl13_status'">Set A</th>
                    <th style="border:1px solid black;" v-if="val_1[4] == 'rdl14_status'">Set B</th>
                    <th style="border:1px solid black;" v-if="val_1[4] == 'rdl15_status'">Set C</th>
                    <th style="border:1px solid black;" v-if="val_1[4] == 'rdl16_status'">Meth T-1</th>
                    <th style="border:1px solid black;" v-if="val_1[4] == 'rdl17_status'">Tar Tank</th>
                    <th style="border:1px solid black;" v-if="val_1[4] == 'rdl18_status'">GST</th>
                    <th style="border:1px solid black;" v-if="val_1[4] == 'rdl19_status'">Meth T-2</th>
                    <th style="border:1px solid black;" v-if="val_1[4] == 'rdl20_status'">SP - 1</th>
                    <th style="border:1px solid black;" v-if="val_1[4] == 'rdl21_status'">SP - 2</th>
                    <th style="border:1px solid black;" v-if="val_1[4] == 'rdl22_status'">SP - 3</th>
                    <th style="border:1px solid black;" v-if="val_1[4] == 'rdl23_status'">PPRA</th>
                    <th style="border:1px solid black;" v-if="val_1[4] == 'rdl24_status'">PPRB</th>
                    <th style="border:1px solid black;" v-if="val_1[4] == 'rdl25_status'">H₂SO₄</th>
                    <th style="border:1px solid black;" v-if="val_1[4] == 'dpl1_status'">D501</th>
                    <th style="border:1px solid black;" v-if="val_1[4] == 'dpl2_status'">E401</th>
                    <th style="border:1px solid black;" v-if="val_1[4] == 'dpl3_status'">T601</th>
                    <th style="border:1px solid black;" v-if="val_1[4] == 'dpl4_status'">D503</th>
                    <th style="border:1px solid black;" v-if="val_1[4] == 'dpl5_status'">D504</th>
                    <th style="border:1px solid black;" v-if="val_1[4] == 'dpl6_status'">T501</th>
                    <th style="border:1px solid black;" v-if="val_1[4] == 'dpl7_status'">T502</th>
                    <th style="border:1px solid black;" v-if="val_1[4] == 'dpl8_status'">Bio Tank</th>

                    <th style="border:1px solid black;" v-if="val_1[5] == 'rdl1_status'">D101A</th>
                    <th style="border:1px solid black;" v-if="val_1[5] == 'rdl2_status'">D101B</th>
                    <th style="border:1px solid black;" v-if="val_1[5] == 'rdl3_status'">D405A</th>
                    <th style="border:1px solid black;" v-if="val_1[5] == 'rdl4_status'">D405B</th>
                    <th style="border:1px solid black;" v-if="val_1[5] == 'rdl5_status'">D405C</th>
                    <th style="border:1px solid black;" v-if="val_1[5] == 'rdl6_status'">C401A</th>
                    <th style="border:1px solid black;" v-if="val_1[5] == 'rdl7_status'">C401B</th>
                    <th style="border:1px solid black;" v-if="val_1[5] == 'rdl8_status'">D402A</th>
                    <th style="border:1px solid black;" v-if="val_1[5] == 'rdl9_status'">D402B</th>
                    <th style="border:1px solid black;" v-if="val_1[5] == 'rdl10_status'">D402C</th>
                    <th style="border:1px solid black;" v-if="val_1[5] == 'rdl11_status'">D402D</th>
                    <th style="border:1px solid black;" v-if="val_1[5] == 'rdl12_status'">GLV</th>
                    <th style="border:1px solid black;" v-if="val_1[5] == 'rdl13_status'">Set A</th>
                    <th style="border:1px solid black;" v-if="val_1[5] == 'rdl14_status'">Set B</th>
                    <th style="border:1px solid black;" v-if="val_1[5] == 'rdl15_status'">Set C</th>
                    <th style="border:1px solid black;" v-if="val_1[5] == 'rdl16_status'">Meth T-1</th>
                    <th style="border:1px solid black;" v-if="val_1[5] == 'rdl17_status'">Tar Tank</th>
                    <th style="border:1px solid black;" v-if="val_1[5] == 'rdl18_status'">GST</th>
                    <th style="border:1px solid black;" v-if="val_1[5] == 'rdl19_status'">Meth T-2</th>
                    <th style="border:1px solid black;" v-if="val_1[5] == 'rdl20_status'">SP - 1</th>
                    <th style="border:1px solid black;" v-if="val_1[5] == 'rdl21_status'">SP - 2</th>
                    <th style="border:1px solid black;" v-if="val_1[5] == 'rdl22_status'">SP - 3</th>
                    <th style="border:1px solid black;" v-if="val_1[5] == 'rdl23_status'">PPRA</th>
                    <th style="border:1px solid black;" v-if="val_1[5] == 'rdl24_status'">PPRB</th>
                    <th style="border:1px solid black;" v-if="val_1[5] == 'rdl25_status'">H₂SO₄</th>
                    <th style="border:1px solid black;" v-if="val_1[5] == 'dpl1_status'">D501</th>
                    <th style="border:1px solid black;" v-if="val_1[5] == 'dpl2_status'">E401</th>
                    <th style="border:1px solid black;" v-if="val_1[5] == 'dpl3_status'">T601</th>
                    <th style="border:1px solid black;" v-if="val_1[5] == 'dpl4_status'">D503</th>
                    <th style="border:1px solid black;" v-if="val_1[5] == 'dpl5_status'">D504</th>
                    <th style="border:1px solid black;" v-if="val_1[5] == 'dpl6_status'">T501</th>
                    <th style="border:1px solid black;" v-if="val_1[5] == 'dpl7_status'">T502</th>
                    <th style="border:1px solid black;" v-if="val_1[5] == 'dpl8_status'">Bio Tank</th>

                    <th style="border:1px solid black;" v-if="val_1[6] == 'rdl1_status'">D101A</th>
                    <th style="border:1px solid black;" v-if="val_1[6] == 'rdl2_status'">D101B</th>
                    <th style="border:1px solid black;" v-if="val_1[6] == 'rdl3_status'">D405A</th>
                    <th style="border:1px solid black;" v-if="val_1[6] == 'rdl4_status'">D405B</th>
                    <th style="border:1px solid black;" v-if="val_1[6] == 'rdl5_status'">D405C</th>
                    <th style="border:1px solid black;" v-if="val_1[6] == 'rdl6_status'">C401A</th>
                    <th style="border:1px solid black;" v-if="val_1[6] == 'rdl7_status'">C401B</th>
                    <th style="border:1px solid black;" v-if="val_1[6] == 'rdl8_status'">D402A</th>
                    <th style="border:1px solid black;" v-if="val_1[6] == 'rdl9_status'">D402B</th>
                    <th style="border:1px solid black;" v-if="val_1[6] == 'rdl10_status'">D402C</th>
                    <th style="border:1px solid black;" v-if="val_1[6] == 'rdl11_status'">D402D</th>
                    <th style="border:1px solid black;" v-if="val_1[6] == 'rdl12_status'">GLV</th>
                    <th style="border:1px solid black;" v-if="val_1[6] == 'rdl13_status'">Set A</th>
                    <th style="border:1px solid black;" v-if="val_1[6] == 'rdl14_status'">Set B</th>
                    <th style="border:1px solid black;" v-if="val_1[6] == 'rdl15_status'">Set C</th>
                    <th style="border:1px solid black;" v-if="val_1[6] == 'rdl16_status'">Meth T-1</th>
                    <th style="border:1px solid black;" v-if="val_1[6] == 'rdl17_status'">Tar Tank</th>
                    <th style="border:1px solid black;" v-if="val_1[6] == 'rdl18_status'">GST</th>
                    <th style="border:1px solid black;" v-if="val_1[6] == 'rdl19_status'">Meth T-2</th>
                    <th style="border:1px solid black;" v-if="val_1[6] == 'rdl20_status'">SP - 1</th>
                    <th style="border:1px solid black;" v-if="val_1[6] == 'rdl21_status'">SP - 2</th>
                    <th style="border:1px solid black;" v-if="val_1[6] == 'rdl22_status'">SP - 3</th>
                    <th style="border:1px solid black;" v-if="val_1[6] == 'rdl23_status'">PPRA</th>
                    <th style="border:1px solid black;" v-if="val_1[6] == 'rdl24_status'">PPRB</th>
                    <th style="border:1px solid black;" v-if="val_1[6] == 'rdl25_status'">H₂SO₄</th>
                    <th style="border:1px solid black;" v-if="val_1[6] == 'dpl1_status'">D501</th>
                    <th style="border:1px solid black;" v-if="val_1[6] == 'dpl2_status'">E401</th>
                    <th style="border:1px solid black;" v-if="val_1[6] == 'dpl3_status'">T601</th>
                    <th style="border:1px solid black;" v-if="val_1[6] == 'dpl4_status'">D503</th>
                    <th style="border:1px solid black;" v-if="val_1[6] == 'dpl5_status'">D504</th>
                    <th style="border:1px solid black;" v-if="val_1[6] == 'dpl6_status'">T501</th>
                    <th style="border:1px solid black;" v-if="val_1[6] == 'dpl7_status'">T502</th>
                    <th style="border:1px solid black;" v-if="val_1[6] == 'dpl8_status'">Bio Tank</th>

                    <th style="border:1px solid black;" v-if="val_1[7] == 'rdl1_status'">D101A</th>
                    <th style="border:1px solid black;" v-if="val_1[7] == 'rdl2_status'">D101B</th>
                    <th style="border:1px solid black;" v-if="val_1[7] == 'rdl3_status'">D405A</th>
                    <th style="border:1px solid black;" v-if="val_1[7] == 'rdl4_status'">D405B</th>
                    <th style="border:1px solid black;" v-if="val_1[7] == 'rdl5_status'">D405C</th>
                    <th style="border:1px solid black;" v-if="val_1[7] == 'rdl6_status'">C401A</th>
                    <th style="border:1px solid black;" v-if="val_1[7] == 'rdl7_status'">C401B</th>
                    <th style="border:1px solid black;" v-if="val_1[7] == 'rdl8_status'">D402A</th>
                    <th style="border:1px solid black;" v-if="val_1[7] == 'rdl9_status'">D402B</th>
                    <th style="border:1px solid black;" v-if="val_1[7] == 'rdl10_status'">D402C</th>
                    <th style="border:1px solid black;" v-if="val_1[7] == 'rdl11_status'">D402D</th>
                    <th style="border:1px solid black;" v-if="val_1[7] == 'rdl12_status'">GLV</th>
                    <th style="border:1px solid black;" v-if="val_1[7] == 'rdl13_status'">Set A</th>
                    <th style="border:1px solid black;" v-if="val_1[7] == 'rdl14_status'">Set B</th>
                    <th style="border:1px solid black;" v-if="val_1[7] == 'rdl15_status'">Set C</th>
                    <th style="border:1px solid black;" v-if="val_1[7] == 'rdl16_status'">Meth T-1</th>
                    <th style="border:1px solid black;" v-if="val_1[7] == 'rdl17_status'">Tar Tank</th>
                    <th style="border:1px solid black;" v-if="val_1[7] == 'rdl18_status'">GST</th>
                    <th style="border:1px solid black;" v-if="val_1[7] == 'rdl19_status'">Meth T-2</th>
                    <th style="border:1px solid black;" v-if="val_1[7] == 'rdl20_status'">SP - 1</th>
                    <th style="border:1px solid black;" v-if="val_1[7] == 'rdl21_status'">SP - 2</th>
                    <th style="border:1px solid black;" v-if="val_1[7] == 'rdl22_status'">SP - 3</th>
                    <th style="border:1px solid black;" v-if="val_1[7] == 'rdl23_status'">PPRA</th>
                    <th style="border:1px solid black;" v-if="val_1[7] == 'rdl24_status'">PPRB</th>
                    <th style="border:1px solid black;" v-if="val_1[7] == 'rdl25_status'">H₂SO₄</th>
                    <th style="border:1px solid black;" v-if="val_1[7] == 'dpl1_status'">D501</th>
                    <th style="border:1px solid black;" v-if="val_1[7] == 'dpl2_status'">E401</th>
                    <th style="border:1px solid black;" v-if="val_1[7] == 'dpl3_status'">T601</th>
                    <th style="border:1px solid black;" v-if="val_1[7] == 'dpl4_status'">D503</th>
                    <th style="border:1px solid black;" v-if="val_1[7] == 'dpl5_status'">D504</th>
                    <th style="border:1px solid black;" v-if="val_1[7] == 'dpl6_status'">T501</th>
                    <th style="border:1px solid black;" v-if="val_1[7] == 'dpl7_status'">T502</th>
                    <th style="border:1px solid black;" v-if="val_1[7] == 'dpl8_status'">Bio Tank</th>

                    <th style="border:1px solid black;" v-if="val_1[8] == 'rdl1_status'">D101A</th>
                    <th style="border:1px solid black;" v-if="val_1[8] == 'rdl2_status'">D101B</th>
                    <th style="border:1px solid black;" v-if="val_1[8] == 'rdl3_status'">D405A</th>
                    <th style="border:1px solid black;" v-if="val_1[8] == 'rdl4_status'">D405B</th>
                    <th style="border:1px solid black;" v-if="val_1[8] == 'rdl5_status'">D405C</th>
                    <th style="border:1px solid black;" v-if="val_1[8] == 'rdl6_status'">C401A</th>
                    <th style="border:1px solid black;" v-if="val_1[8] == 'rdl7_status'">C401B</th>
                    <th style="border:1px solid black;" v-if="val_1[8] == 'rdl8_status'">D402A</th>
                    <th style="border:1px solid black;" v-if="val_1[8] == 'rdl9_status'">D402B</th>
                    <th style="border:1px solid black;" v-if="val_1[8] == 'rdl10_status'">D402C</th>
                    <th style="border:1px solid black;" v-if="val_1[8] == 'rdl11_status'">D402D</th>
                    <th style="border:1px solid black;" v-if="val_1[8] == 'rdl12_status'">GLV</th>
                    <th style="border:1px solid black;" v-if="val_1[8] == 'rdl13_status'">Set A</th>
                    <th style="border:1px solid black;" v-if="val_1[8] == 'rdl14_status'">Set B</th>
                    <th style="border:1px solid black;" v-if="val_1[8] == 'rdl15_status'">Set C</th>
                    <th style="border:1px solid black;" v-if="val_1[8] == 'rdl16_status'">Meth T-1</th>
                    <th style="border:1px solid black;" v-if="val_1[8] == 'rdl17_status'">Tar Tank</th>
                    <th style="border:1px solid black;" v-if="val_1[8] == 'rdl18_status'">GST</th>
                    <th style="border:1px solid black;" v-if="val_1[8] == 'rdl19_status'">Meth T-2</th>
                    <th style="border:1px solid black;" v-if="val_1[8] == 'rdl20_status'">SP - 1</th>
                    <th style="border:1px solid black;" v-if="val_1[8] == 'rdl21_status'">SP - 2</th>
                    <th style="border:1px solid black;" v-if="val_1[8] == 'rdl22_status'">SP - 3</th>
                    <th style="border:1px solid black;" v-if="val_1[8] == 'rdl23_status'">PPRA</th>
                    <th style="border:1px solid black;" v-if="val_1[8] == 'rdl24_status'">PPRB</th>
                    <th style="border:1px solid black;" v-if="val_1[8] == 'rdl25_status'">H₂SO₄</th>
                    <th style="border:1px solid black;" v-if="val_1[8] == 'dpl1_status'">D501</th>
                    <th style="border:1px solid black;" v-if="val_1[8] == 'dpl2_status'">E401</th>
                    <th style="border:1px solid black;" v-if="val_1[8] == 'dpl3_status'">T601</th>
                    <th style="border:1px solid black;" v-if="val_1[8] == 'dpl4_status'">D503</th>
                    <th style="border:1px solid black;" v-if="val_1[8] == 'dpl5_status'">D504</th>
                    <th style="border:1px solid black;" v-if="val_1[8] == 'dpl6_status'">T501</th>
                    <th style="border:1px solid black;" v-if="val_1[8] == 'dpl7_status'">T502</th>
                    <th style="border:1px solid black;" v-if="val_1[8] == 'dpl8_status'">Bio Tank</th>

                    <th style="border:1px solid black;" v-if="val_1[9] == 'rdl1_status'">D101A</th>
                    <th style="border:1px solid black;" v-if="val_1[9] == 'rdl2_status'">D101B</th>
                    <th style="border:1px solid black;" v-if="val_1[9] == 'rdl3_status'">D405A</th>
                    <th style="border:1px solid black;" v-if="val_1[9] == 'rdl4_status'">D405B</th>
                    <th style="border:1px solid black;" v-if="val_1[9] == 'rdl5_status'">D405C</th>
                    <th style="border:1px solid black;" v-if="val_1[9] == 'rdl6_status'">C401A</th>
                    <th style="border:1px solid black;" v-if="val_1[9] == 'rdl7_status'">C401B</th>
                    <th style="border:1px solid black;" v-if="val_1[9] == 'rdl8_status'">D402A</th>
                    <th style="border:1px solid black;" v-if="val_1[9] == 'rdl9_status'">D402B</th>
                    <th style="border:1px solid black;" v-if="val_1[9] == 'rdl10_status'">D402C</th>
                    <th style="border:1px solid black;" v-if="val_1[9] == 'rdl11_status'">D402D</th>
                    <th style="border:1px solid black;" v-if="val_1[9] == 'rdl12_status'">GLV</th>
                    <th style="border:1px solid black;" v-if="val_1[9] == 'rdl13_status'">Set A</th>
                    <th style="border:1px solid black;" v-if="val_1[9] == 'rdl14_status'">Set B</th>
                    <th style="border:1px solid black;" v-if="val_1[9] == 'rdl15_status'">Set C</th>
                    <th style="border:1px solid black;" v-if="val_1[9] == 'rdl16_status'">Meth T-1</th>
                    <th style="border:1px solid black;" v-if="val_1[9] == 'rdl17_status'">Tar Tank</th>
                    <th style="border:1px solid black;" v-if="val_1[9] == 'rdl18_status'">GST</th>
                    <th style="border:1px solid black;" v-if="val_1[9] == 'rdl19_status'">Meth T-2</th>
                    <th style="border:1px solid black;" v-if="val_1[9] == 'rdl20_status'">SP - 1</th>
                    <th style="border:1px solid black;" v-if="val_1[9] == 'rdl21_status'">SP - 2</th>
                    <th style="border:1px solid black;" v-if="val_1[9] == 'rdl22_status'">SP - 3</th>
                    <th style="border:1px solid black;" v-if="val_1[9] == 'rdl23_status'">PPRA</th>
                    <th style="border:1px solid black;" v-if="val_1[9] == 'rdl24_status'">PPRB</th>
                    <th style="border:1px solid black;" v-if="val_1[9] == 'rdl25_status'">H₂SO₄</th>
                    <th style="border:1px solid black;" v-if="val_1[9] == 'dpl1_status'">D501</th>
                    <th style="border:1px solid black;" v-if="val_1[9] == 'dpl2_status'">E401</th>
                    <th style="border:1px solid black;" v-if="val_1[9] == 'dpl3_status'">T601</th>
                    <th style="border:1px solid black;" v-if="val_1[9] == 'dpl4_status'">D503</th>
                    <th style="border:1px solid black;" v-if="val_1[9] == 'dpl5_status'">D504</th>
                    <th style="border:1px solid black;" v-if="val_1[9] == 'dpl6_status'">T501</th>
                    <th style="border:1px solid black;" v-if="val_1[9] == 'dpl7_status'">T502</th>
                    <th style="border:1px solid black;" v-if="val_1[9] == 'dpl8_status'">Bio Tank</th>

                    <th style="border:1px solid black;" v-if="val_1[10] == 'rdl1_status'">D101A</th>
                    <th style="border:1px solid black;" v-if="val_1[10] == 'rdl2_status'">D101B</th>
                    <th style="border:1px solid black;" v-if="val_1[10] == 'rdl3_status'">D405A</th>
                    <th style="border:1px solid black;" v-if="val_1[10] == 'rdl4_status'">D405B</th>
                    <th style="border:1px solid black;" v-if="val_1[10] == 'rdl5_status'">D405C</th>
                    <th style="border:1px solid black;" v-if="val_1[10] == 'rdl6_status'">C401A</th>
                    <th style="border:1px solid black;" v-if="val_1[10] == 'rdl7_status'">C401B</th>
                    <th style="border:1px solid black;" v-if="val_1[10] == 'rdl8_status'">D402A</th>
                    <th style="border:1px solid black;" v-if="val_1[10] == 'rdl9_status'">D402B</th>
                    <th style="border:1px solid black;" v-if="val_1[10] == 'rdl10_status'">D402C</th>
                    <th style="border:1px solid black;" v-if="val_1[10] == 'rdl11_status'">D402D</th>
                    <th style="border:1px solid black;" v-if="val_1[10] == 'rdl12_status'">GLV</th>
                    <th style="border:1px solid black;" v-if="val_1[10] == 'rdl13_status'">Set A</th>
                    <th style="border:1px solid black;" v-if="val_1[10] == 'rdl14_status'">Set B</th>
                    <th style="border:1px solid black;" v-if="val_1[10] == 'rdl15_status'">Set C</th>
                    <th style="border:1px solid black;" v-if="val_1[10] == 'rdl16_status'">Meth T-1</th>
                    <th style="border:1px solid black;" v-if="val_1[10] == 'rdl17_status'">Tar Tank</th>
                    <th style="border:1px solid black;" v-if="val_1[10] == 'rdl18_status'">GST</th>
                    <th style="border:1px solid black;" v-if="val_1[10] == 'rdl19_status'">Meth T-2</th>
                    <th style="border:1px solid black;" v-if="val_1[10] == 'rdl20_status'">SP - 1</th>
                    <th style="border:1px solid black;" v-if="val_1[10] == 'rdl21_status'">SP - 2</th>
                    <th style="border:1px solid black;" v-if="val_1[10] == 'rdl22_status'">SP - 3</th>
                    <th style="border:1px solid black;" v-if="val_1[10] == 'rdl23_status'">PPRA</th>
                    <th style="border:1px solid black;" v-if="val_1[10] == 'rdl24_status'">PPRB</th>
                    <th style="border:1px solid black;" v-if="val_1[10] == 'rdl25_status'">H₂SO₄</th>
                    <th style="border:1px solid black;" v-if="val_1[10] == 'dpl1_status'">D501</th>
                    <th style="border:1px solid black;" v-if="val_1[10] == 'dpl2_status'">E401</th>
                    <th style="border:1px solid black;" v-if="val_1[10] == 'dpl3_status'">T601</th>
                    <th style="border:1px solid black;" v-if="val_1[10] == 'dpl4_status'">D503</th>
                    <th style="border:1px solid black;" v-if="val_1[10] == 'dpl5_status'">D504</th>
                    <th style="border:1px solid black;" v-if="val_1[10] == 'dpl6_status'">T501</th>
                    <th style="border:1px solid black;" v-if="val_1[10] == 'dpl7_status'">T502</th>
                    <th style="border:1px solid black;" v-if="val_1[10] == 'dpl8_status'">Bio Tank</th>

                    <th style="border:1px solid black;" v-if="val_1[11] == 'rdl1_status'">D101A</th>
                    <th style="border:1px solid black;" v-if="val_1[11] == 'rdl2_status'">D101B</th>
                    <th style="border:1px solid black;" v-if="val_1[11] == 'rdl3_status'">D405A</th>
                    <th style="border:1px solid black;" v-if="val_1[11] == 'rdl4_status'">D405B</th>
                    <th style="border:1px solid black;" v-if="val_1[11] == 'rdl5_status'">D405C</th>
                    <th style="border:1px solid black;" v-if="val_1[11] == 'rdl6_status'">C401A</th>
                    <th style="border:1px solid black;" v-if="val_1[11] == 'rdl7_status'">C401B</th>
                    <th style="border:1px solid black;" v-if="val_1[11] == 'rdl8_status'">D402A</th>
                    <th style="border:1px solid black;" v-if="val_1[11] == 'rdl9_status'">D402B</th>
                    <th style="border:1px solid black;" v-if="val_1[11] == 'rdl10_status'">D402C</th>
                    <th style="border:1px solid black;" v-if="val_1[11] == 'rdl11_status'">D402D</th>
                    <th style="border:1px solid black;" v-if="val_1[11] == 'rdl12_status'">GLV</th>
                    <th style="border:1px solid black;" v-if="val_1[11] == 'rdl13_status'">Set A</th>
                    <th style="border:1px solid black;" v-if="val_1[11] == 'rdl14_status'">Set B</th>
                    <th style="border:1px solid black;" v-if="val_1[11] == 'rdl15_status'">Set C</th>
                    <th style="border:1px solid black;" v-if="val_1[11] == 'rdl16_status'">Meth T-1</th>
                    <th style="border:1px solid black;" v-if="val_1[11] == 'rdl17_status'">Tar Tank</th>
                    <th style="border:1px solid black;" v-if="val_1[11] == 'rdl18_status'">GST</th>
                    <th style="border:1px solid black;" v-if="val_1[11] == 'rdl19_status'">Meth T-2</th>
                    <th style="border:1px solid black;" v-if="val_1[11] == 'rdl20_status'">SP - 1</th>
                    <th style="border:1px solid black;" v-if="val_1[11] == 'rdl21_status'">SP - 2</th>
                    <th style="border:1px solid black;" v-if="val_1[11] == 'rdl22_status'">SP - 3</th>
                    <th style="border:1px solid black;" v-if="val_1[11] == 'rdl23_status'">PPRA</th>
                    <th style="border:1px solid black;" v-if="val_1[11] == 'rdl24_status'">PPRB</th>
                    <th style="border:1px solid black;" v-if="val_1[11] == 'rdl25_status'">H₂SO₄</th>
                    <th style="border:1px solid black;" v-if="val_1[11] == 'dpl1_status'">D501</th>
                    <th style="border:1px solid black;" v-if="val_1[11] == 'dpl2_status'">E401</th>
                    <th style="border:1px solid black;" v-if="val_1[11] == 'dpl3_status'">T601</th>
                    <th style="border:1px solid black;" v-if="val_1[11] == 'dpl4_status'">D503</th>
                    <th style="border:1px solid black;" v-if="val_1[11] == 'dpl5_status'">D504</th>
                    <th style="border:1px solid black;" v-if="val_1[11] == 'dpl6_status'">T501</th>
                    <th style="border:1px solid black;" v-if="val_1[11] == 'dpl7_status'">T502</th>
                    <th style="border:1px solid black;" v-if="val_1[11] == 'dpl8_status'">Bio Tank</th>

                    <th style="border:1px solid black;" v-if="val_1[12] == 'rdl1_status'">D101A</th>
                    <th style="border:1px solid black;" v-if="val_1[12] == 'rdl2_status'">D101B</th>
                    <th style="border:1px solid black;" v-if="val_1[12] == 'rdl3_status'">D405A</th>
                    <th style="border:1px solid black;" v-if="val_1[12] == 'rdl4_status'">D405B</th>
                    <th style="border:1px solid black;" v-if="val_1[12] == 'rdl5_status'">D405C</th>
                    <th style="border:1px solid black;" v-if="val_1[12] == 'rdl6_status'">C401A</th>
                    <th style="border:1px solid black;" v-if="val_1[12] == 'rdl7_status'">C401B</th>
                    <th style="border:1px solid black;" v-if="val_1[12] == 'rdl8_status'">D402A</th>
                    <th style="border:1px solid black;" v-if="val_1[12] == 'rdl9_status'">D402B</th>
                    <th style="border:1px solid black;" v-if="val_1[12] == 'rdl10_status'">D402C</th>
                    <th style="border:1px solid black;" v-if="val_1[12] == 'rdl11_status'">D402D</th>
                    <th style="border:1px solid black;" v-if="val_1[12] == 'rdl12_status'">GLV</th>
                    <th style="border:1px solid black;" v-if="val_1[12] == 'rdl13_status'">Set A</th>
                    <th style="border:1px solid black;" v-if="val_1[12] == 'rdl14_status'">Set B</th>
                    <th style="border:1px solid black;" v-if="val_1[12] == 'rdl15_status'">Set C</th>
                    <th style="border:1px solid black;" v-if="val_1[12] == 'rdl16_status'">Meth T-1</th>
                    <th style="border:1px solid black;" v-if="val_1[12] == 'rdl17_status'">Tar Tank</th>
                    <th style="border:1px solid black;" v-if="val_1[12] == 'rdl18_status'">GST</th>
                    <th style="border:1px solid black;" v-if="val_1[12] == 'rdl19_status'">Meth T-2</th>
                    <th style="border:1px solid black;" v-if="val_1[12] == 'rdl20_status'">SP - 1</th>
                    <th style="border:1px solid black;" v-if="val_1[12] == 'rdl21_status'">SP - 2</th>
                    <th style="border:1px solid black;" v-if="val_1[12] == 'rdl22_status'">SP - 3</th>
                    <th style="border:1px solid black;" v-if="val_1[12] == 'rdl23_status'">PPRA</th>
                    <th style="border:1px solid black;" v-if="val_1[12] == 'rdl24_status'">PPRB</th>
                    <th style="border:1px solid black;" v-if="val_1[12] == 'rdl25_status'">H₂SO₄</th>
                    <th style="border:1px solid black;" v-if="val_1[12] == 'dpl1_status'">D501</th>
                    <th style="border:1px solid black;" v-if="val_1[12] == 'dpl2_status'">E401</th>
                    <th style="border:1px solid black;" v-if="val_1[12] == 'dpl3_status'">T601</th>
                    <th style="border:1px solid black;" v-if="val_1[12] == 'dpl4_status'">D503</th>
                    <th style="border:1px solid black;" v-if="val_1[12] == 'dpl5_status'">D504</th>
                    <th style="border:1px solid black;" v-if="val_1[12] == 'dpl6_status'">T501</th>
                    <th style="border:1px solid black;" v-if="val_1[12] == 'dpl7_status'">T502</th>
                    <th style="border:1px solid black;" v-if="val_1[12] == 'dpl8_status'">Bio Tank</th>

                    <th style="border:1px solid black;" v-if="val_1[13] == 'rdl1_status'">D101A</th>
                    <th style="border:1px solid black;" v-if="val_1[13] == 'rdl2_status'">D101B</th>
                    <th style="border:1px solid black;" v-if="val_1[13] == 'rdl3_status'">D405A</th>
                    <th style="border:1px solid black;" v-if="val_1[13] == 'rdl4_status'">D405B</th>
                    <th style="border:1px solid black;" v-if="val_1[13] == 'rdl5_status'">D405C</th>
                    <th style="border:1px solid black;" v-if="val_1[13] == 'rdl6_status'">C401A</th>
                    <th style="border:1px solid black;" v-if="val_1[13] == 'rdl7_status'">C401B</th>
                    <th style="border:1px solid black;" v-if="val_1[13] == 'rdl8_status'">D402A</th>
                    <th style="border:1px solid black;" v-if="val_1[13] == 'rdl9_status'">D402B</th>
                    <th style="border:1px solid black;" v-if="val_1[13] == 'rdl10_status'">D402C</th>
                    <th style="border:1px solid black;" v-if="val_1[13] == 'rdl11_status'">D402D</th>
                    <th style="border:1px solid black;" v-if="val_1[13] == 'rdl12_status'">GLV</th>
                    <th style="border:1px solid black;" v-if="val_1[13] == 'rdl13_status'">Set A</th>
                    <th style="border:1px solid black;" v-if="val_1[13] == 'rdl14_status'">Set B</th>
                    <th style="border:1px solid black;" v-if="val_1[13] == 'rdl15_status'">Set C</th>
                    <th style="border:1px solid black;" v-if="val_1[13] == 'rdl16_status'">Meth T-1</th>
                    <th style="border:1px solid black;" v-if="val_1[13] == 'rdl17_status'">Tar Tank</th>
                    <th style="border:1px solid black;" v-if="val_1[13] == 'rdl18_status'">GST</th>
                    <th style="border:1px solid black;" v-if="val_1[13] == 'rdl19_status'">Meth T-2</th>
                    <th style="border:1px solid black;" v-if="val_1[13] == 'rdl20_status'">SP - 1</th>
                    <th style="border:1px solid black;" v-if="val_1[13] == 'rdl21_status'">SP - 2</th>
                    <th style="border:1px solid black;" v-if="val_1[13] == 'rdl22_status'">SP - 3</th>
                    <th style="border:1px solid black;" v-if="val_1[13] == 'rdl23_status'">PPRA</th>
                    <th style="border:1px solid black;" v-if="val_1[13] == 'rdl24_status'">PPRB</th>
                    <th style="border:1px solid black;" v-if="val_1[13] == 'rdl25_status'">H₂SO₄</th>
                    <th style="border:1px solid black;" v-if="val_1[13] == 'dpl1_status'">D501</th>
                    <th style="border:1px solid black;" v-if="val_1[13] == 'dpl2_status'">E401</th>
                    <th style="border:1px solid black;" v-if="val_1[13] == 'dpl3_status'">T601</th>
                    <th style="border:1px solid black;" v-if="val_1[13] == 'dpl4_status'">D503</th>
                    <th style="border:1px solid black;" v-if="val_1[13] == 'dpl5_status'">D504</th>
                    <th style="border:1px solid black;" v-if="val_1[13] == 'dpl6_status'">T501</th>
                    <th style="border:1px solid black;" v-if="val_1[13] == 'dpl7_status'">T502</th>
                    <th style="border:1px solid black;" v-if="val_1[13] == 'dpl8_status'">Bio Tank</th>

                    <th style="border:1px solid black;" v-if="val_1[14] == 'rdl1_status'">D101A</th>
                    <th style="border:1px solid black;" v-if="val_1[14] == 'rdl2_status'">D101B</th>
                    <th style="border:1px solid black;" v-if="val_1[14] == 'rdl3_status'">D405A</th>
                    <th style="border:1px solid black;" v-if="val_1[14] == 'rdl4_status'">D405B</th>
                    <th style="border:1px solid black;" v-if="val_1[14] == 'rdl5_status'">D405C</th>
                    <th style="border:1px solid black;" v-if="val_1[14] == 'rdl6_status'">C401A</th>
                    <th style="border:1px solid black;" v-if="val_1[14] == 'rdl7_status'">C401B</th>
                    <th style="border:1px solid black;" v-if="val_1[14] == 'rdl8_status'">D402A</th>
                    <th style="border:1px solid black;" v-if="val_1[14] == 'rdl9_status'">D402B</th>
                    <th style="border:1px solid black;" v-if="val_1[14] == 'rdl10_status'">D402C</th>
                    <th style="border:1px solid black;" v-if="val_1[14] == 'rdl11_status'">D402D</th>
                    <th style="border:1px solid black;" v-if="val_1[14] == 'rdl12_status'">GLV</th>
                    <th style="border:1px solid black;" v-if="val_1[14] == 'rdl13_status'">Set A</th>
                    <th style="border:1px solid black;" v-if="val_1[14] == 'rdl14_status'">Set B</th>
                    <th style="border:1px solid black;" v-if="val_1[14] == 'rdl15_status'">Set C</th>
                    <th style="border:1px solid black;" v-if="val_1[14] == 'rdl16_status'">Meth T-1</th>
                    <th style="border:1px solid black;" v-if="val_1[14] == 'rdl17_status'">Tar Tank</th>
                    <th style="border:1px solid black;" v-if="val_1[14] == 'rdl18_status'">GST</th>
                    <th style="border:1px solid black;" v-if="val_1[14] == 'rdl19_status'">Meth T-2</th>
                    <th style="border:1px solid black;" v-if="val_1[14] == 'rdl20_status'">SP - 1</th>
                    <th style="border:1px solid black;" v-if="val_1[14] == 'rdl21_status'">SP - 2</th>
                    <th style="border:1px solid black;" v-if="val_1[14] == 'rdl22_status'">SP - 3</th>
                    <th style="border:1px solid black;" v-if="val_1[14] == 'rdl23_status'">PPRA</th>
                    <th style="border:1px solid black;" v-if="val_1[14] == 'rdl24_status'">PPRB</th>
                    <th style="border:1px solid black;" v-if="val_1[14] == 'rdl25_status'">H₂SO₄</th>
                    <th style="border:1px solid black;" v-if="val_1[14] == 'dpl1_status'">D501</th>
                    <th style="border:1px solid black;" v-if="val_1[14] == 'dpl2_status'">E401</th>
                    <th style="border:1px solid black;" v-if="val_1[14] == 'dpl3_status'">T601</th>
                    <th style="border:1px solid black;" v-if="val_1[14] == 'dpl4_status'">D503</th>
                    <th style="border:1px solid black;" v-if="val_1[14] == 'dpl5_status'">D504</th>
                    <th style="border:1px solid black;" v-if="val_1[14] == 'dpl6_status'">T501</th>
                    <th style="border:1px solid black;" v-if="val_1[14] == 'dpl7_status'">T502</th>
                    <th style="border:1px solid black;" v-if="val_1[14] == 'dpl8_status'">Bio Tank</th>

                    <th style="border:1px solid black;" v-if="val_1[15] == 'rdl1_status'">D101A</th>
                    <th style="border:1px solid black;" v-if="val_1[15] == 'rdl2_status'">D101B</th>
                    <th style="border:1px solid black;" v-if="val_1[15] == 'rdl3_status'">D405A</th>
                    <th style="border:1px solid black;" v-if="val_1[15] == 'rdl4_status'">D405B</th>
                    <th style="border:1px solid black;" v-if="val_1[15] == 'rdl5_status'">D405C</th>
                    <th style="border:1px solid black;" v-if="val_1[15] == 'rdl6_status'">C401A</th>
                    <th style="border:1px solid black;" v-if="val_1[15] == 'rdl7_status'">C401B</th>
                    <th style="border:1px solid black;" v-if="val_1[15] == 'rdl8_status'">D402A</th>
                    <th style="border:1px solid black;" v-if="val_1[15] == 'rdl9_status'">D402B</th>
                    <th style="border:1px solid black;" v-if="val_1[15] == 'rdl10_status'">D402C</th>
                    <th style="border:1px solid black;" v-if="val_1[15] == 'rdl11_status'">D402D</th>
                    <th style="border:1px solid black;" v-if="val_1[15] == 'rdl12_status'">GLV</th>
                    <th style="border:1px solid black;" v-if="val_1[15] == 'rdl13_status'">Set A</th>
                    <th style="border:1px solid black;" v-if="val_1[15] == 'rdl14_status'">Set B</th>
                    <th style="border:1px solid black;" v-if="val_1[15] == 'rdl15_status'">Set C</th>
                    <th style="border:1px solid black;" v-if="val_1[15] == 'rdl16_status'">Meth T-1</th>
                    <th style="border:1px solid black;" v-if="val_1[15] == 'rdl17_status'">Tar Tank</th>
                    <th style="border:1px solid black;" v-if="val_1[15] == 'rdl18_status'">GST</th>
                    <th style="border:1px solid black;" v-if="val_1[15] == 'rdl19_status'">Meth T-2</th>
                    <th style="border:1px solid black;" v-if="val_1[15] == 'rdl20_status'">SP - 1</th>
                    <th style="border:1px solid black;" v-if="val_1[15] == 'rdl21_status'">SP - 2</th>
                    <th style="border:1px solid black;" v-if="val_1[15] == 'rdl22_status'">SP - 3</th>
                    <th style="border:1px solid black;" v-if="val_1[15] == 'rdl23_status'">PPRA</th>
                    <th style="border:1px solid black;" v-if="val_1[15] == 'rdl24_status'">PPRB</th>
                    <th style="border:1px solid black;" v-if="val_1[15] == 'rdl25_status'">H₂SO₄</th>
                    <th style="border:1px solid black;" v-if="val_1[15] == 'dpl1_status'">D501</th>
                    <th style="border:1px solid black;" v-if="val_1[15] == 'dpl2_status'">E401</th>
                    <th style="border:1px solid black;" v-if="val_1[15] == 'dpl3_status'">T601</th>
                    <th style="border:1px solid black;" v-if="val_1[15] == 'dpl4_status'">D503</th>
                    <th style="border:1px solid black;" v-if="val_1[15] == 'dpl5_status'">D504</th>
                    <th style="border:1px solid black;" v-if="val_1[15] == 'dpl6_status'">T501</th>
                    <th style="border:1px solid black;" v-if="val_1[15] == 'dpl7_status'">T502</th>
                    <th style="border:1px solid black;" v-if="val_1[15] == 'dpl8_status'">Bio Tank</th>
                </tr>
                <tr v-for="(field, index) in db_val_1">
                    <td style="border:1px solid black;">{{field.timing}}</td>
                    <td style="border:1px solid black;"  v-if="val_1[0] == 'rdl1_status'">
                        <span v-if="field.rdl1_status == 'N' || field.rdl1_status == 'L'"></span>
                        <span v-else>High</span>
                    </td>
                    <td style="border:1px solid black;" v-if="val_1[0] == 'rdl2_status'">
                        <span v-if="field.rdl2_status == 'N' || field.rdl2_status == 'L'"></span>
                        <span v-else>High</span>
                    </td>
                    <td style="border:1px solid black;" v-if="val_1[0] == 'rdl3_status'">
                        <span v-if="field.rdl3_status == 'N' || field.rdl3_status == 'L'"></span>
                        <span v-else>High</span>
                    </td>
                    <td style="border:1px solid black;" v-if="val_1[0] == 'rdl4_status'">
                        <span v-if="field.rdl4_status == 'N' || field.rdl4_status == 'L'"></span>
                        <span v-else>High</span>
                    </td>
                    <td style="border:1px solid black;" v-if="val_1[0] == 'rdl5_status'">
                        <span v-if="field.rdl5_status == 'N' || field.rdl5_status == 'L'"></span>
                        <span v-else>High</span>
                    </td>
                    <td style="border:1px solid black;" v-if="val_1[0] == 'rdl6_status'">
                        <span v-if="field.rdl6_status == 'N' || field.rdl6_status == 'L'"></span>
                        <span v-else>High</span>
                    </td>
                    <td style="border:1px solid black;" v-if="val_1[0] == 'rdl7_status'">
                        <span v-if="field.rdl7_status == 'N' || field.rdl7_status == 'L'"></span>
                        <span v-else>High</span>
                    </td>
                    <td style="border:1px solid black;" v-if="val_1[0] == 'rdl8_status'">
                        <span v-if="field.rdl8_status == 'N' || field.rdl8_status == 'L'"></span>
                        <span v-else>High</span>
                    </td>
                    <td style="border:1px solid black;" v-if="val_1[0] == 'rdl9_status'">
                        <span v-if="field.rdl9_status == 'N' || field.rdl9_status == 'L'"></span>
                        <span v-else>High</span>
                    </td>
                    <td style="border:1px solid black;" v-if="val_1[0] == 'rdl10_status'">
                        <span v-if="field.rdl10_status == 'N' || field.rdl10_status == 'L'"></span>
                        <span v-else>High</span>
                    </td>
                    <td style="border:1px solid black;" v-if="val_1[0] == 'rdl11_status'">
                        <span v-if="field.rdl11_status == 'N' || field.rdl11_status == 'L'"></span>
                        <span v-else>High</span>
                    </td>
                    <td style="border:1px solid black;" v-if="val_1[0] == 'rdl12_status'">
                        <span v-if="field.rdl12_status == 'N' || field.rdl12_status == 'L'"></span>
                        <span v-else>High</span>
                    </td>
                    <td style="border:1px solid black;" v-if="val_1[0] == 'rdl13_status'">
                        <span v-if="field.rdl13_status == 'N' || field.rdl13_status == 'L'"></span>
                        <span v-else>High</span>
                    </td>
                    <td style="border:1px solid black;" v-if="val_1[0] == 'rdl14_status'">
                        <span v-if="field.rdl14_status == 'N' || field.rdl14_status == 'L'"></span>
                        <span v-else>High</span>
                    </td>
                    <td style="border:1px solid black;" v-if="val_1[0] == 'rdl15_status'">
                        <span v-if="field.rdl15_status == 'N' || field.rdl15_status == 'L'"></span>
                        <span v-else>High</span>
                    </td>
                    <td style="border:1px solid black;" v-if="val_1[0] == 'rdl16_status'">
                        <span v-if="field.rdl16_status == 'N' || field.rdl16_status == 'L'"></span>
                        <span v-else>High</span>
                    </td>
                    <td style="border:1px solid black;" v-if="val_1[0] == 'rdl17_status'">
                        <span v-if="field.rdl17_status == 'N' || field.rdl17_status == 'L'"></span>
                        <span v-else>High</span>
                    </td>
                    <td style="border:1px solid black;" v-if="val_1[0] == 'rdl18_status'">
                        <span v-if="field.rdl18_status == 'N' || field.rdl18_status == 'L'"></span>
                        <span v-else>High</span>
                    </td>
                    <td style="border:1px solid black;" v-if="val_1[0] == 'rdl19_status'">
                        <span v-if="field.rdl19_status == 'N' || field.rdl19_status == 'L'"></span>
                        <span v-else>High</span>
                    </td>
                    <td style="border:1px solid black;" v-if="val_1[0] == 'rdl20_status'">
                        <span v-if="field.rdl20_status == 'N' || field.rdl20_status == 'L'"></span>
                        <span v-else>High</span>
                    </td>
                    <td style="border:1px solid black;" v-if="val_1[0] == 'rdl21_status'">
                        <span v-if="field.rdl21_status == 'N' || field.rdl21_status == 'L'"></span>
                        <span v-else>High</span>
                    </td>
                    <td style="border:1px solid black;" v-if="val_1[0] == 'rdl22_status'">
                        <span v-if="field.rdl22_status == 'N' || field.rdl22_status == 'L'"></span>
                        <span v-else>High</span>
                    </td>
                    <td style="border:1px solid black;" v-if="val_1[0] == 'rdl23_status'">
                        <span v-if="field.rdl23_status == 'N' || field.rdl23_status == 'L'"></span>
                        <span v-else>High</span>
                    </td>
                    <td style="border:1px solid black;" v-if="val_1[0] == 'rdl24_status'">
                        <span v-if="field.rdl24_status == 'N' || field.rdl24_status == 'L'"></span>
                        <span v-else>High</span>
                    </td>
                    <td style="border:1px solid black;" v-if="val_1[0] == 'rdl25_status'">
                        <span v-if="field.rdl25_status == 'N' || field.rdl25_status == 'L'"></span>
                        <span v-else>High</span>
                    </td>
                    <td style="border:1px solid black;" v-if="val_1[0] == 'dpl1_status'">
                        <span v-if="field.dpl1_status == 'N' || field.dpl1_status == 'L'"></span>
                        <span v-else>High</span>
                    </td>
                    <td style="border:1px solid black;" v-if="val_1[0] == 'dpl2_status'">
                        <span v-if="field.dpl2_status == 'N' || field.dpl2_status == 'L'"></span>
                        <span v-else>High</span>
                    </td>
                    <td style="border:1px solid black;" v-if="val_1[0] == 'dpl3_status'">
                        <span v-if="field.dpl3_status == 'N' || field.dpl3_status == 'L'"></span>
                        <span v-else>High</span>
                    </td>
                    <td style="border:1px solid black;" v-if="val_1[0] == 'dpl4_status'">
                        <span v-if="field.dpl4_status == 'N' || field.dpl4_status == 'L'"></span>
                        <span v-else>High</span>
                    </td>
                    <td style="border:1px solid black;" v-if="val_1[0] == 'dpl5_status'">
                        <span v-if="field.dpl5_status == 'N' || field.dpl5_status == 'L'"></span>
                        <span v-else>High</span>
                    </td>
                    <td style="border:1px solid black;" v-if="val_1[0] == 'dpl6_status'">
                        <span v-if="field.dpl6_status == 'N' || field.dpl6_status == 'L'"></span>
                        <span v-else>High</span>
                    </td>
                    <td style="border:1px solid black;" v-if="val_1[0] == 'dpl7_status'">
                        <span v-if="field.dpl7_status == 'N' || field.dpl7_status == 'L'"></span>
                        <span v-else>High</span>
                    </td>
                    <td style="border:1px solid black;" v-if="val_1[0] == 'dpl8_status'">
                        <span v-if="field.dpl8_status == 'N' || field.dpl8_status == 'L'"></span>
                        <span v-else>High</span>
                    </td>

                    <td style="border:1px solid black;"  v-if="val_1[1] == 'rdl1_status'">
                        <span v-if="field.rdl1_status == 'N' || field.rdl1_status == 'L'"></span>
                        <span v-else>High</span>
                    </td>
                    <td style="border:1px solid black;" v-if="val_1[1] == 'rdl2_status'">
                        <span v-if="field.rdl2_status == 'N' || field.rdl2_status == 'L'"></span>
                        <span v-else>High</span>
                    </td>
                    <td style="border:1px solid black;" v-if="val_1[1] == 'rdl3_status'">
                        <span v-if="field.rdl3_status == 'N' || field.rdl3_status == 'L'"></span>
                        <span v-else>High</span>
                    </td>
                    <td style="border:1px solid black;" v-if="val_1[1] == 'rdl4_status'">
                        <span v-if="field.rdl4_status == 'N' || field.rdl4_status == 'L'"></span>
                        <span v-else>High</span>
                    </td>
                    <td style="border:1px solid black;" v-if="val_1[1] == 'rdl5_status'">
                        <span v-if="field.rdl5_status == 'N' || field.rdl5_status == 'L'"></span>
                        <span v-else>High</span>
                    </td>
                    <td style="border:1px solid black;" v-if="val_1[1] == 'rdl6_status'">
                        <span v-if="field.rdl6_status == 'N' || field.rdl6_status == 'L'"></span>
                        <span v-else>High</span>
                    </td>
                    <td style="border:1px solid black;" v-if="val_1[1] == 'rdl7_status'">
                        <span v-if="field.rdl7_status == 'N' || field.rdl7_status == 'L'"></span>
                        <span v-else>High</span>
                    </td>
                    <td style="border:1px solid black;" v-if="val_1[1] == 'rdl8_status'">
                        <span v-if="field.rdl8_status == 'N' || field.rdl8_status == 'L'"></span>
                        <span v-else>High</span>
                    </td>
                    <td style="border:1px solid black;" v-if="val_1[1] == 'rdl9_status'">
                        <span v-if="field.rdl9_status == 'N' || field.rdl9_status == 'L'"></span>
                        <span v-else>High</span>
                    </td>
                    <td style="border:1px solid black;" v-if="val_1[1] == 'rdl10_status'">
                        <span v-if="field.rdl10_status == 'N' || field.rdl10_status == 'L'"></span>
                        <span v-else>High</span>
                    </td>
                    <td style="border:1px solid black;" v-if="val_1[1] == 'rdl11_status'">
                        <span v-if="field.rdl11_status == 'N' || field.rdl11_status == 'L'"></span>
                        <span v-else>High</span>
                    </td>
                    <td style="border:1px solid black;" v-if="val_1[1] == 'rdl12_status'">
                        <span v-if="field.rdl12_status == 'N' || field.rdl12_status == 'L'"></span>
                        <span v-else>High</span>
                    </td>
                    <td style="border:1px solid black;" v-if="val_1[1] == 'rdl13_status'">
                        <span v-if="field.rdl13_status == 'N' || field.rdl13_status == 'L'"></span>
                        <span v-else>High</span>
                    </td>
                    <td style="border:1px solid black;" v-if="val_1[1] == 'rdl14_status'">
                        <span v-if="field.rdl14_status == 'N' || field.rdl14_status == 'L'"></span>
                        <span v-else>High</span>
                    </td>
                    <td style="border:1px solid black;" v-if="val_1[1] == 'rdl15_status'">
                        <span v-if="field.rdl15_status == 'N' || field.rdl15_status == 'L'"></span>
                        <span v-else>High</span>
                    </td>
                    <td style="border:1px solid black;" v-if="val_1[1] == 'rdl16_status'">
                        <span v-if="field.rdl16_status == 'N' || field.rdl16_status == 'L'"></span>
                        <span v-else>High</span>
                    </td>
                    <td style="border:1px solid black;" v-if="val_1[1] == 'rdl17_status'">
                        <span v-if="field.rdl17_status == 'N' || field.rdl17_status == 'L'"></span>
                        <span v-else>High</span>
                    </td>
                    <td style="border:1px solid black;" v-if="val_1[1] == 'rdl18_status'">
                        <span v-if="field.rdl18_status == 'N' || field.rdl18_status == 'L'"></span>
                        <span v-else>High</span>
                    </td>
                    <td style="border:1px solid black;" v-if="val_1[1] == 'rdl19_status'">
                        <span v-if="field.rdl19_status == 'N' || field.rdl19_status == 'L'"></span>
                        <span v-else>High</span>
                    </td>
                    <td style="border:1px solid black;" v-if="val_1[1] == 'rdl20_status'">
                        <span v-if="field.rdl20_status == 'N' || field.rdl20_status == 'L'"></span>
                        <span v-else>High</span>
                    </td>
                    <td style="border:1px solid black;" v-if="val_1[1] == 'rdl21_status'">
                        <span v-if="field.rdl21_status == 'N' || field.rdl21_status == 'L'"></span>
                        <span v-else>High</span>
                    </td>
                    <td style="border:1px solid black;" v-if="val_1[1] == 'rdl22_status'">
                        <span v-if="field.rdl22_status == 'N' || field.rdl22_status == 'L'"></span>
                        <span v-else>High</span>
                    </td>
                    <td style="border:1px solid black;" v-if="val_1[1] == 'rdl23_status'">
                        <span v-if="field.rdl23_status == 'N' || field.rdl23_status == 'L'"></span>
                        <span v-else>High</span>
                    </td>
                    <td style="border:1px solid black;" v-if="val_1[1] == 'rdl24_status'">
                        <span v-if="field.rdl24_status == 'N' || field.rdl24_status == 'L'"></span>
                        <span v-else>High</span>
                    </td>
                    <td style="border:1px solid black;" v-if="val_1[1] == 'rdl25_status'">
                        <span v-if="field.rdl25_status == 'N' || field.rdl25_status == 'L'"></span>
                        <span v-else>High</span>
                    </td>
                    <td style="border:1px solid black;" v-if="val_1[1] == 'dpl1_status'">
                        <span v-if="field.dpl1_status == 'N' || field.dpl1_status == 'L'"></span>
                        <span v-else>High</span>
                    </td>
                    <td style="border:1px solid black;" v-if="val_1[1] == 'dpl2_status'">
                        <span v-if="field.dpl2_status == 'N' || field.dpl2_status == 'L'"></span>
                        <span v-else>High</span>
                    </td>
                    <td style="border:1px solid black;" v-if="val_1[1] == 'dpl3_status'">
                        <span v-if="field.dpl3_status == 'N' || field.dpl3_status == 'L'"></span>
                        <span v-else>High</span>
                    </td>
                    <td style="border:1px solid black;" v-if="val_1[1] == 'dpl4_status'">
                        <span v-if="field.dpl4_status == 'N' || field.dpl4_status == 'L'"></span>
                        <span v-else>High</span>
                    </td>
                    <td style="border:1px solid black;" v-if="val_1[1] == 'dpl5_status'">
                        <span v-if="field.dpl5_status == 'N' || field.dpl5_status == 'L'"></span>
                        <span v-else>High</span>
                    </td>
                    <td style="border:1px solid black;" v-if="val_1[1] == 'dpl6_status'">
                        <span v-if="field.dpl6_status == 'N' || field.dpl6_status == 'L'"></span>
                        <span v-else>High</span>
                    </td>
                    <td style="border:1px solid black;" v-if="val_1[1] == 'dpl7_status'">
                        <span v-if="field.dpl7_status == 'N' || field.dpl7_status == 'L'"></span>
                        <span v-else>High</span>
                    </td>
                    <td style="border:1px solid black;" v-if="val_1[1] == 'dpl8_status'">
                        <span v-if="field.dpl8_status == 'N' || field.dpl8_status == 'L'"></span>
                        <span v-else>High</span>
                    </td>

                    <td style="border:1px solid black;"  v-if="val_1[2] == 'rdl1_status'">
                        <span v-if="field.rdl1_status == 'N' || field.rdl1_status == 'L'"></span>
                        <span v-else>High</span>
                    </td>
                    <td style="border:1px solid black;" v-if="val_1[2] == 'rdl2_status'">
                        <span v-if="field.rdl2_status == 'N' || field.rdl2_status == 'L'"></span>
                        <span v-else>High</span>
                    </td>
                    <td style="border:1px solid black;" v-if="val_1[2] == 'rdl3_status'">
                        <span v-if="field.rdl3_status == 'N' || field.rdl3_status == 'L'"></span>
                        <span v-else>High</span>
                    </td>
                    <td style="border:1px solid black;" v-if="val_1[2] == 'rdl4_status'">
                        <span v-if="field.rdl4_status == 'N' || field.rdl4_status == 'L'"></span>
                        <span v-else>High</span>
                    </td>
                    <td style="border:1px solid black;" v-if="val_1[2] == 'rdl5_status'">
                        <span v-if="field.rdl5_status == 'N' || field.rdl5_status == 'L'"></span>
                        <span v-else>High</span>
                    </td>
                    <td style="border:1px solid black;" v-if="val_1[2] == 'rdl6_status'">
                        <span v-if="field.rdl6_status == 'N' || field.rdl6_status == 'L'"></span>
                        <span v-else>High</span>
                    </td>
                    <td style="border:1px solid black;" v-if="val_1[2] == 'rdl7_status'">
                        <span v-if="field.rdl7_status == 'N' || field.rdl7_status == 'L'"></span>
                        <span v-else>High</span>
                    </td>
                    <td style="border:1px solid black;" v-if="val_1[2] == 'rdl8_status'">
                        <span v-if="field.rdl8_status == 'N' || field.rdl8_status == 'L'"></span>
                        <span v-else>High</span>
                    </td>
                    <td style="border:1px solid black;" v-if="val_1[2] == 'rdl9_status'">
                        <span v-if="field.rdl9_status == 'N' || field.rdl9_status == 'L'"></span>
                        <span v-else>High</span>
                    </td>
                    <td style="border:1px solid black;" v-if="val_1[2] == 'rdl10_status'">
                        <span v-if="field.rdl10_status == 'N' || field.rdl10_status == 'L'"></span>
                        <span v-else>High</span>
                    </td>
                    <td style="border:1px solid black;" v-if="val_1[2] == 'rdl11_status'">
                        <span v-if="field.rdl11_status == 'N' || field.rdl11_status == 'L'"></span>
                        <span v-else>High</span>
                    </td>
                    <td style="border:1px solid black;" v-if="val_1[2] == 'rdl12_status'">
                        <span v-if="field.rdl12_status == 'N' || field.rdl12_status == 'L'"></span>
                        <span v-else>High</span>
                    </td>
                     <td style="border:1px solid black;" v-if="val_1[2] == 'rdl13_status'">
                        <span v-if="field.rdl13_status == 'N' || field.rdl13_status == 'L'"></span>
                        <span v-else>High</span>
                    </td>
                     <td style="border:1px solid black;" v-if="val_1[2] == 'rdl14_status'">
                        <span v-if="field.rdl14_status == 'N' || field.rdl14_status == 'L'"></span>
                        <span v-else>High</span>
                    </td>
                     <td style="border:1px solid black;" v-if="val_1[2] == 'rdl15_status'">
                        <span v-if="field.rdl15_status == 'N' || field.rdl15_status == 'L'"></span>
                        <span v-else>High</span>
                    </td>
                     <td style="border:1px solid black;" v-if="val_1[2] == 'rdl16_status'">
                        <span v-if="field.rdl16_status == 'N' || field.rdl16_status == 'L'"></span>
                        <span v-else>High</span>
                    </td>
                     <td style="border:1px solid black;" v-if="val_1[2] == 'rdl17_status'">
                        <span v-if="field.rdl17_status == 'N' || field.rdl17_status == 'L'"></span>
                        <span v-else>High</span>
                    </td>
                     <td style="border:1px solid black;" v-if="val_1[2] == 'rdl18_status'">
                        <span v-if="field.rdl18_status == 'N' || field.rdl18_status == 'L'"></span>
                        <span v-else>High</span>
                    </td>
                     <td style="border:1px solid black;" v-if="val_1[2] == 'rdl19_status'">
                        <span v-if="field.rdl19_status == 'N' || field.rdl19_status == 'L'"></span>
                        <span v-else>High</span>
                    </td>
                     <td style="border:1px solid black;" v-if="val_1[2] == 'rdl20_status'">
                        <span v-if="field.rdl20_status == 'N' || field.rdl20_status == 'L'"></span>
                        <span v-else>High</span>
                    </td>
                     <td style="border:1px solid black;" v-if="val_1[2] == 'rdl21_status'">
                        <span v-if="field.rdl21_status == 'N' || field.rdl21_status == 'L'"></span>
                        <span v-else>High</span>
                    </td>
                     <td style="border:1px solid black;" v-if="val_1[2] == 'rdl22_status'">
                        <span v-if="field.rdl22_status == 'N' || field.rdl22_status == 'L'"></span>
                        <span v-else>High</span>
                    </td>
                     <td style="border:1px solid black;" v-if="val_1[2] == 'rdl23_status'">
                        <span v-if="field.rdl23_status == 'N' || field.rdl23_status == 'L'"></span>
                        <span v-else>High</span>
                    </td>
                     <td style="border:1px solid black;" v-if="val_1[2] == 'rdl24_status'">
                        <span v-if="field.rdl24_status == 'N' || field.rdl24_status == 'L'"></span>
                        <span v-else>High</span>
                    </td>
                     <td style="border:1px solid black;" v-if="val_1[2] == 'rdl25_status'">
                        <span v-if="field.rdl25_status == 'N' || field.rdl25_status == 'L'"></span>
                        <span v-else>High</span>
                    </td>
                     <td style="border:1px solid black;" v-if="val_1[2] == 'dpl1_status'">
                        <span v-if="field.dpl1_status == 'N' || field.dpl1_status == 'L'"></span>
                        <span v-else>High</span>
                    </td>
                     <td style="border:1px solid black;" v-if="val_1[2] == 'dpl2_status'">
                        <span v-if="field.dpl2_status == 'N' || field.dpl2_status == 'L'"></span>
                        <span v-else>High</span>
                    </td>
                     <td style="border:1px solid black;" v-if="val_1[2] == 'dpl3_status'">
                        <span v-if="field.dpl3_status == 'N' || field.dpl3_status == 'L'"></span>
                        <span v-else>High</span>
                    </td>
                     <td style="border:1px solid black;" v-if="val_1[2] == 'dpl4_status'">
                        <span v-if="field.dpl4_status == 'N' || field.dpl4_status == 'L'"></span>
                        <span v-else>High</span>
                    </td>
                     <td style="border:1px solid black;" v-if="val_1[2] == 'dpl5_status'">
                        <span v-if="field.dpl5_status == 'N' || field.dpl5_status == 'L'"></span>
                        <span v-else>High</span>
                    </td>
                     <td style="border:1px solid black;" v-if="val_1[2] == 'dpl6_status'">
                        <span v-if="field.dpl6_status == 'N' || field.dpl6_status == 'L'"></span>
                        <span v-else>High</span>
                    </td>
                     <td style="border:1px solid black;" v-if="val_1[2] == 'dpl7_status'">
                        <span v-if="field.dpl7_status == 'N' || field.dpl7_status == 'L'"></span>
                        <span v-else>High</span>
                    </td>
                    <td style="border:1px solid black;" v-if="val_1[2] == 'dpl8_status'">
                        <span v-if="field.dpl8_status == 'N' || field.dpl8_status == 'L'"></span>
                        <span v-else>High</span>
                    </td>

                     <td style="border:1px solid black;"  v-if="val_1[3] == 'rdl1_status'">
                        <span v-if="field.rdl1_status == 'N' || field.rdl1_status == 'L'"></span>
                        <span v-else>High</span>
                    </td>
                     <td style="border:1px solid black;" v-if="val_1[3] == 'rdl2_status'">
                        <span v-if="field.rdl2_status == 'N' || field.rdl2_status == 'L'"></span>
                        <span v-else>High</span>
                    </td>
                     <td style="border:1px solid black;" v-if="val_1[3] == 'rdl3_status'">
                        <span v-if="field.rdl3_status == 'N' || field.rdl3_status == 'L'"></span>
                        <span v-else>High</span>
                    </td>
                     <td style="border:1px solid black;" v-if="val_1[3] == 'rdl4_status'">
                        <span v-if="field.rdl4_status == 'N' || field.rdl4_status == 'L'"></span>
                        <span v-else>High</span>
                    </td>
                     <td style="border:1px solid black;" v-if="val_1[3] == 'rdl5_status'">
                        <span v-if="field.rdl5_status == 'N' || field.rdl5_status == 'L'"></span>
                        <span v-else>High</span>
                    </td>
                     <td style="border:1px solid black;" v-if="val_1[3] == 'rdl6_status'">
                        <span v-if="field.rdl6_status == 'N' || field.rdl6_status == 'L'"></span>
                        <span v-else>High</span>
                    </td>
                     <td style="border:1px solid black;" v-if="val_1[3] == 'rdl7_status'">
                        <span v-if="field.rdl7_status == 'N' || field.rdl7_status == 'L'"></span>
                        <span v-else>High</span>
                    </td>
                    <td style="border:1px solid black;" v-if="val_1[3] == 'rdl8_status'">
                        <span v-if="field.rdl8_status == 'N' || field.rdl8_status == 'L'"></span>
                        <span v-else>High</span>
                    </td>
                     <td style="border:1px solid black;" v-if="val_1[3] == 'rdl9_status'">
                        <span v-if="field.rdl9_status == 'N' || field.rdl9_status == 'L'"></span>
                        <span v-else>High</span>
                    </td>
                     <td style="border:1px solid black;" v-if="val_1[3] == 'rdl10_status'">
                        <span v-if="field.rdl10_status == 'N' || field.rdl10_status == 'L'"></span>
                        <span v-else>High</span>
                    </td>
                     <td style="border:1px solid black;" v-if="val_1[3] == 'rdl11_status'">
                        <span v-if="field.rdl11_status == 'N' || field.rdl11_status == 'L'"></span>
                        <span v-else>High</span>
                    </td>
                     <td style="border:1px solid black;" v-if="val_1[3] == 'rdl12_status'">
                        <span v-if="field.rdl12_status == 'N' || field.rdl12_status == 'L'"></span>
                        <span v-else>High</span>
                    </td>
                     <td style="border:1px solid black;" v-if="val_1[3] == 'rdl13_status'">
                        <span v-if="field.rdl13_status == 'N' || field.rdl13_status == 'L'"></span>
                        <span v-else>High</span>
                    </td>
                     <td style="border:1px solid black;" v-if="val_1[3] == 'rdl14_status'">
                        <span v-if="field.rdl14_status == 'N' || field.rdl14_status == 'L'"></span>
                        <span v-else>High</span>
                    </td>
                     <td style="border:1px solid black;" v-if="val_1[3] == 'rdl15_status'">
                        <span v-if="field.rdl15_status == 'N' || field.rdl15_status == 'L'"></span>
                        <span v-else>High</span>
                    </td>
                     <td style="border:1px solid black;" v-if="val_1[3] == 'rdl16_status'">
                        <span v-if="field.rdl16_status == 'N' || field.rdl16_status == 'L'"></span>
                        <span v-else>High</span>
                    </td>
                     <td style="border:1px solid black;" v-if="val_1[3] == 'rdl17_status'">
                        <span v-if="field.rdl17_status == 'N' || field.rdl17_status == 'L'"></span>
                        <span v-else>High</span>
                    </td>
                     <td style="border:1px solid black;" v-if="val_1[3] == 'rdl18_status'">
                        <span v-if="field.rdl18_status == 'N' || field.rdl18_status == 'L'"></span>
                        <span v-else>High</span>
                    </td>
                     <td style="border:1px solid black;" v-if="val_1[3] == 'rdl19_status'">
                        <span v-if="field.rdl19_status == 'N' || field.rdl19_status == 'L'"></span>
                        <span v-else>High</span>
                    </td>
                     <td style="border:1px solid black;" v-if="val_1[3] == 'rdl20_status'">
                        <span v-if="field.rdl20_status == 'N' || field.rdl20_status == 'L'"></span>
                        <span v-else>High</span>
                    </td>
                     <td style="border:1px solid black;" v-if="val_1[3] == 'rdl21_status'">
                        <span v-if="field.rdl21_status == 'N' || field.rdl21_status == 'L'"></span>
                        <span v-else>High</span>
                    </td>
                     <td style="border:1px solid black;" v-if="val_1[3] == 'rdl22_status'">
                        <span v-if="field.rdl22_status == 'N' || field.rdl22_status == 'L'"></span>
                        <span v-else>High</span>
                    </td>
                     <td style="border:1px solid black;" v-if="val_1[3] == 'rdl23_status'">
                        <span v-if="field.rdl23_status == 'N' || field.rdl23_status == 'L'"></span>
                        <span v-else>High</span>
                    </td>
                     <td style="border:1px solid black;" v-if="val_1[3] == 'rdl24_status'">
                        <span v-if="field.rdl24_status == 'N' || field.rdl24_status == 'L'"></span>
                        <span v-else>High</span>
                    </td>
                     <td style="border:1px solid black;" v-if="val_1[3] == 'rdl25_status'">
                        <span v-if="field.rdl25_status == 'N' || field.rdl25_status == 'L'"></span>
                        <span v-else>High</span>
                    </td>
                     <td style="border:1px solid black;" v-if="val_1[3] == 'dpl1_status'">
                        <span v-if="field.dpl1_status == 'N' || field.dpl1_status == 'L'"></span>
                        <span v-else>High</span>
                    </td>
                     <td style="border:1px solid black;" v-if="val_1[3] == 'dpl2_status'">
                        <span v-if="field.dpl2_status == 'N' || field.dpl2_status == 'L'"></span>
                        <span v-else>High</span>
                    </td>
                     <td style="border:1px solid black;" v-if="val_1[3] == 'dpl3_status'">
                        <span v-if="field.dpl3_status == 'N' || field.dpl3_status == 'L'"></span>
                        <span v-else>High</span>
                    </td>
                     <td style="border:1px solid black;" v-if="val_1[3] == 'dpl4_status'">
                        <span v-if="field.dpl4_status == 'N' || field.dpl4_status == 'L'"></span>
                        <span v-else>High</span>
                    </td>
                     <td style="border:1px solid black;" v-if="val_1[3] == 'dpl5_status'">
                        <span v-if="field.dpl5_status == 'N' || field.dpl5_status == 'L'"></span>
                        <span v-else>High</span>
                    </td>
                     <td style="border:1px solid black;" v-if="val_1[3] == 'dpl6_status'">
                        <span v-if="field.dpl6_status == 'N' || field.dpl6_status == 'L'"></span>
                        <span v-else>High</span>
                    </td>
                     <td style="border:1px solid black;" v-if="val_1[3] == 'dpl7_status'">
                        <span v-if="field.dpl7_status == 'N' || field.dpl7_status == 'L'"></span>
                        <span v-else>High</span>
                    </td>
                    <td style="border:1px solid black;" v-if="val_1[3] == 'dpl8_status'">
                        <span v-if="field.dpl8_status == 'N' || field.dpl8_status == 'L'"></span>
                        <span v-else>High</span>
                    </td>

                     <td style="border:1px solid black;"  v-if="val_1[4] == 'rdl1_status'">
                        <span v-if="field.rdl1_status == 'N' || field.rdl1_status == 'L'"></span>
                        <span v-else>High</span>
                    </td>
                     <td style="border:1px solid black;" v-if="val_1[4] == 'rdl2_status'">
                        <span v-if="field.rdl2_status == 'N' || field.rdl2_status == 'L'"></span>
                        <span v-else>High</span>
                    </td>
                     <td style="border:1px solid black;" v-if="val_1[4] == 'rdl3_status'">
                        <span v-if="field.rdl3_status == 'N' || field.rdl3_status == 'L'"></span>
                        <span v-else>High</span>
                    </td>
                     <td style="border:1px solid black;" v-if="val_1[4] == 'rdl4_status'">
                        <span v-if="field.rdl4_status == 'N' || field.rdl4_status == 'L'"></span>
                        <span v-else>High</span>
                    </td>
                     <td style="border:1px solid black;" v-if="val_1[4] == 'rdl5_status'">
                        <span v-if="field.rdl5_status == 'N' || field.rdl5_status == 'L'"></span>
                        <span v-else>High</span>
                    </td>
                     <td style="border:1px solid black;" v-if="val_1[4] == 'rdl6_status'">
                        <span v-if="field.rdl6_status == 'N' || field.rdl6_status == 'L'"></span>
                        <span v-else>High</span>
                    </td>
                     <td style="border:1px solid black;" v-if="val_1[4] == 'rdl7_status'">
                        <span v-if="field.rdl7_status == 'N' || field.rdl7_status == 'L'"></span>
                        <span v-else>High</span>
                    </td>
                    <td style="border:1px solid black;" v-if="val_1[4] == 'rdl8_status'">
                        <span v-if="field.rdl8_status == 'N' || field.rdl8_status == 'L'"></span>
                        <span v-else>High</span>
                    </td>
                     <td style="border:1px solid black;" v-if="val_1[4] == 'rdl9_status'">
                        <span v-if="field.rdl9_status == 'N' || field.rdl9_status == 'L'"></span>
                        <span v-else>High</span>
                    </td>
                     <td style="border:1px solid black;" v-if="val_1[4] == 'rdl10_status'">
                        <span v-if="field.rdl10_status == 'N' || field.rdl10_status == 'L'"></span>
                        <span v-else>High</span>
                    </td>
                     <td style="border:1px solid black;" v-if="val_1[4] == 'rdl11_status'">
                        <span v-if="field.rdl11_status == 'N' || field.rdl11_status == 'L'"></span>
                        <span v-else>High</span>
                    </td>
                     <td style="border:1px solid black;" v-if="val_1[4] == 'rdl12_status'">
                        <span v-if="field.rdl12_status == 'N' || field.rdl12_status == 'L'"></span>
                        <span v-else>High</span>
                    </td>
                     <td style="border:1px solid black;" v-if="val_1[4] == 'rdl13_status'">
                        <span v-if="field.rdl13_status == 'N' || field.rdl13_status == 'L'"></span>
                        <span v-else>High</span>
                    </td>
                     <td style="border:1px solid black;" v-if="val_1[4] == 'rdl14_status'">
                        <span v-if="field.rdl14_status == 'N' || field.rdl14_status == 'L'"></span>
                        <span v-else>High</span>
                    </td>
                     <td style="border:1px solid black;" v-if="val_1[4] == 'rdl15_status'">
                        <span v-if="field.rdl15_status == 'N' || field.rdl15_status == 'L'"></span>
                        <span v-else>High</span>
                    </td>
                     <td style="border:1px solid black;" v-if="val_1[4] == 'rdl16_status'">
                        <span v-if="field.rdl16_status == 'N' || field.rdl16_status == 'L'"></span>
                        <span v-else>High</span>
                    </td>
                     <td style="border:1px solid black;" v-if="val_1[4] == 'rdl17_status'">
                        <span v-if="field.rdl17_status == 'N' || field.rdl17_status == 'L'"></span>
                        <span v-else>High</span>
                    </td>
                     <td style="border:1px solid black;" v-if="val_1[4] == 'rdl18_status'">
                        <span v-if="field.rdl18_status == 'N' || field.rdl18_status == 'L'"></span>
                        <span v-else>High</span>
                    </td>
                     <td style="border:1px solid black;" v-if="val_1[4] == 'rdl19_status'">
                        <span v-if="field.rdl19_status == 'N' || field.rdl19_status == 'L'"></span>
                        <span v-else>High</span>
                    </td>
                     <td style="border:1px solid black;" v-if="val_1[4] == 'rdl20_status'">
                        <span v-if="field.rdl20_status == 'N' || field.rdl20_status == 'L'"></span>
                        <span v-else>High</span>
                    </td>
                     <td style="border:1px solid black;" v-if="val_1[4] == 'rdl21_status'">
                        <span v-if="field.rdl21_status == 'N' || field.rdl21_status == 'L'"></span>
                        <span v-else>High</span>
                    </td>
                     <td style="border:1px solid black;" v-if="val_1[4] == 'rdl22_status'">
                        <span v-if="field.rdl22_status == 'N' || field.rdl22_status == 'L'"></span>
                        <span v-else>High</span>
                    </td>
                     <td style="border:1px solid black;" v-if="val_1[4] == 'rdl23_status'">
                        <span v-if="field.rdl23_status == 'N' || field.rdl23_status == 'L'"></span>
                        <span v-else>High</span>
                    </td>
                     <td style="border:1px solid black;" v-if="val_1[4] == 'rdl24_status'">
                        <span v-if="field.rdl24_status == 'N' || field.rdl24_status == 'L'"></span>
                        <span v-else>High</span>
                    </td>
                     <td style="border:1px solid black;" v-if="val_1[4] == 'rdl25_status'">
                        <span v-if="field.rdl25_status == 'N' || field.rdl25_status == 'L'"></span>
                        <span v-else>High</span>
                    </td>
                     <td style="border:1px solid black;" v-if="val_1[4] == 'dpl1_status'">
                        <span v-if="field.dpl1_status == 'N' || field.dpl1_status == 'L'"></span>
                        <span v-else>High</span>
                    </td>
                     <td style="border:1px solid black;" v-if="val_1[4] == 'dpl2_status'">
                        <span v-if="field.dpl2_status == 'N' || field.dpl2_status == 'L'"></span>
                        <span v-else>High</span>
                    </td>
                     <td style="border:1px solid black;" v-if="val_1[4] == 'dpl3_status'">
                        <span v-if="field.dpl3_status == 'N' || field.dpl3_status == 'L'"></span>
                        <span v-else>High</span>
                    </td>
                     <td style="border:1px solid black;" v-if="val_1[4] == 'dpl4_status'">
                        <span v-if="field.dpl4_status == 'N' || field.dpl4_status == 'L'"></span>
                        <span v-else>High</span>
                    </td>
                     <td style="border:1px solid black;" v-if="val_1[4] == 'dpl5_status'">
                        <span v-if="field.dpl5_status == 'N' || field.dpl5_status == 'L'"></span>
                        <span v-else>High</span>
                    </td>
                     <td style="border:1px solid black;" v-if="val_1[4] == 'dpl6_status'">
                        <span v-if="field.dpl6_status == 'N' || field.dpl6_status == 'L'"></span>
                        <span v-else>High</span>
                    </td>
                     <td style="border:1px solid black;" v-if="val_1[4] == 'dpl7_status'">
                        <span v-if="field.dpl7_status == 'N' || field.dpl7_status == 'L'"></span>
                        <span v-else>High</span>
                    </td>
                    <td style="border:1px solid black;" v-if="val_1[4] == 'dpl8_status'">
                        <span v-if="field.dpl8_status == 'N' || field.dpl8_status == 'L'"></span>
                        <span v-else>High</span>
                    </td>

                     <td style="border:1px solid black;"  v-if="val_1[5] == 'rdl1_status'">
                        <span v-if="field.rdl1_status == 'N' || field.rdl1_status == 'L'"></span>
                        <span v-else>High</span>
                    </td>
                     <td style="border:1px solid black;" v-if="val_1[5] == 'rdl2_status'">
                        <span v-if="field.rdl2_status == 'N' || field.rdl2_status == 'L'"></span>
                        <span v-else>High</span>
                    </td>
                     <td style="border:1px solid black;" v-if="val_1[5] == 'rdl3_status'">
                        <span v-if="field.rdl3_status == 'N' || field.rdl3_status == 'L'"></span>
                        <span v-else>High</span>
                    </td>
                     <td style="border:1px solid black;" v-if="val_1[5] == 'rdl4_status'">
                        <span v-if="field.rdl4_status == 'N' || field.rdl4_status == 'L'"></span>
                        <span v-else>High</span>
                    </td>
                     <td style="border:1px solid black;" v-if="val_1[5] == 'rdl5_status'">
                        <span v-if="field.rdl5_status == 'N' || field.rdl5_status == 'L'"></span>
                        <span v-else>High</span>
                    </td>
                     <td style="border:1px solid black;" v-if="val_1[5] == 'rdl6_status'">
                        <span v-if="field.rdl6_status == 'N' || field.rdl6_status == 'L'"></span>
                        <span v-else>High</span>
                    </td>
                     <td style="border:1px solid black;" v-if="val_1[5] == 'rdl7_status'">
                        <span v-if="field.rdl7_status == 'N' || field.rdl7_status == 'L'"></span>
                        <span v-else>High</span>
                    </td>
                    <td style="border:1px solid black;" v-if="val_1[5] == 'rdl8_status'">
                        <span v-if="field.rdl8_status == 'N' || field.rdl8_status == 'L'"></span>
                        <span v-else>High</span>
                    </td>
                     <td style="border:1px solid black;" v-if="val_1[5] == 'rdl9_status'">
                        <span v-if="field.rdl9_status == 'N' || field.rdl9_status == 'L'"></span>
                        <span v-else>High</span>
                    </td>
                     <td style="border:1px solid black;" v-if="val_1[5] == 'rdl10_status'">
                        <span v-if="field.rdl10_status == 'N' || field.rdl10_status == 'L'"></span>
                        <span v-else>High</span>
                    </td>
                     <td style="border:1px solid black;" v-if="val_1[5] == 'rdl11_status'">
                        <span v-if="field.rdl11_status == 'N' || field.rdl11_status == 'L'"></span>
                        <span v-else>High</span>
                    </td>
                     <td style="border:1px solid black;" v-if="val_1[5] == 'rdl12_status'">
                        <span v-if="field.rdl12_status == 'N' || field.rdl12_status == 'L'"></span>
                        <span v-else>High</span>
                    </td>
                     <td style="border:1px solid black;" v-if="val_1[5] == 'rdl13_status'">
                        <span v-if="field.rdl13_status == 'N' || field.rdl13_status == 'L'"></span>
                        <span v-else>High</span>
                    </td>
                     <td style="border:1px solid black;" v-if="val_1[5] == 'rdl14_status'">
                        <span v-if="field.rdl14_status == 'N' || field.rdl14_status == 'L'"></span>
                        <span v-else>High</span>
                    </td>
                     <td style="border:1px solid black;" v-if="val_1[5] == 'rdl15_status'">
                        <span v-if="field.rdl15_status == 'N' || field.rdl15_status == 'L'"></span>
                        <span v-else>High</span>
                    </td>
                     <td style="border:1px solid black;" v-if="val_1[5] == 'rdl16_status'">
                        <span v-if="field.rdl16_status == 'N' || field.rdl16_status == 'L'"></span>
                        <span v-else>High</span>
                    </td>
                     <td style="border:1px solid black;" v-if="val_1[5] == 'rdl17_status'">
                        <span v-if="field.rdl17_status == 'N' || field.rdl17_status == 'L'"></span>
                        <span v-else>High</span>
                    </td>
                     <td style="border:1px solid black;" v-if="val_1[5] == 'rdl18_status'">
                        <span v-if="field.rdl18_status == 'N' || field.rdl18_status == 'L'"></span>
                        <span v-else>High</span>
                    </td>
                     <td style="border:1px solid black;" v-if="val_1[5] == 'rdl19_status'">
                        <span v-if="field.rdl19_status == 'N' || field.rdl19_status == 'L'"></span>
                        <span v-else>High</span>
                    </td>
                     <td style="border:1px solid black;" v-if="val_1[5] == 'rdl20_status'">
                        <span v-if="field.rdl20_status == 'N' || field.rdl20_status == 'L'"></span>
                        <span v-else>High</span>
                    </td>
                     <td style="border:1px solid black;" v-if="val_1[5] == 'rdl21_status'">
                        <span v-if="field.rdl21_status == 'N' || field.rdl21_status == 'L'"></span>
                        <span v-else>High</span>
                    </td>
                     <td style="border:1px solid black;" v-if="val_1[5] == 'rdl22_status'">
                        <span v-if="field.rdl22_status == 'N' || field.rdl22_status == 'L'"></span>
                        <span v-else>High</span>
                    </td>
                     <td style="border:1px solid black;" v-if="val_1[5] == 'rdl23_status'">
                        <span v-if="field.rdl23_status == 'N' || field.rdl23_status == 'L'"></span>
                        <span v-else>High</span>
                    </td>
                     <td style="border:1px solid black;" v-if="val_1[5] == 'rdl24_status'">
                        <span v-if="field.rdl24_status == 'N' || field.rdl24_status == 'L'"></span>
                        <span v-else>High</span>
                    </td>
                     <td style="border:1px solid black;" v-if="val_1[5] == 'rdl25_status'">
                        <span v-if="field.rdl25_status == 'N' || field.rdl25_status == 'L'"></span>
                        <span v-else>High</span>
                    </td>
                     <td style="border:1px solid black;" v-if="val_1[5] == 'dpl1_status'">
                        <span v-if="field.dpl1_status == 'N' || field.dpl1_status == 'L'"></span>
                        <span v-else>High</span>
                    </td>
                     <td style="border:1px solid black;" v-if="val_1[5] == 'dpl2_status'">
                        <span v-if="field.dpl2_status == 'N' || field.dpl2_status == 'L'"></span>
                        <span v-else>High</span>
                    </td>
                     <td style="border:1px solid black;" v-if="val_1[5] == 'dpl3_status'">
                        <span v-if="field.dpl3_status == 'N' || field.dpl3_status == 'L'"></span>
                        <span v-else>High</span>
                    </td>
                     <td style="border:1px solid black;" v-if="val_1[5] == 'dpl4_status'">
                        <span v-if="field.dpl4_status == 'N' || field.dpl4_status == 'L'"></span>
                        <span v-else>High</span>
                    </td>
                     <td style="border:1px solid black;" v-if="val_1[5] == 'dpl5_status'">
                        <span v-if="field.dpl5_status == 'N' || field.dpl5_status == 'L'"></span>
                        <span v-else>High</span>
                    </td>
                     <td style="border:1px solid black;" v-if="val_1[5] == 'dpl6_status'">
                        <span v-if="field.dpl6_status == 'N' || field.dpl6_status == 'L'"></span>
                        <span v-else>High</span>
                    </td>
                     <td style="border:1px solid black;" v-if="val_1[5] == 'dpl7_status'">
                        <span v-if="field.dpl7_status == 'N' || field.dpl7_status == 'L'"></span>
                        <span v-else>High</span>
                    </td>
                    <td style="border:1px solid black;" v-if="val_1[5] == 'dpl8_status'">
                        <span v-if="field.dpl8_status == 'N' || field.dpl8_status == 'L'"></span>
                        <span v-else>High</span>
                    </td>

                     <td style="border:1px solid black;"  v-if="val_1[6] == 'rdl1_status'">
                        <span v-if="field.rdl1_status == 'N' || field.rdl1_status == 'L'"></span>
                        <span v-else>High</span>
                    </td>
                     <td style="border:1px solid black;" v-if="val_1[6] == 'rdl2_status'">
                        <span v-if="field.rdl2_status == 'N' || field.rdl2_status == 'L'"></span>
                        <span v-else>High</span>
                    </td>
                     <td style="border:1px solid black;" v-if="val_1[6] == 'rdl3_status'">
                        <span v-if="field.rdl3_status == 'N' || field.rdl3_status == 'L'"></span>
                        <span v-else>High</span>
                    </td>
                     <td style="border:1px solid black;" v-if="val_1[6] == 'rdl4_status'">
                        <span v-if="field.rdl4_status == 'N' || field.rdl4_status == 'L'"></span>
                        <span v-else>High</span>
                    </td>
                     <td style="border:1px solid black;" v-if="val_1[6] == 'rdl5_status'">
                        <span v-if="field.rdl5_status == 'N' || field.rdl5_status == 'L'"></span>
                        <span v-else>High</span>
                    </td>
                     <td style="border:1px solid black;" v-if="val_1[6] == 'rdl6_status'">
                        <span v-if="field.rdl6_status == 'N' || field.rdl6_status == 'L'"></span>
                        <span v-else>High</span>
                    </td>
                     <td style="border:1px solid black;" v-if="val_1[6] == 'rdl7_status'">
                        <span v-if="field.rdl7_status == 'N' || field.rdl7_status == 'L'"></span>
                        <span v-else>High</span>
                    </td>
                    <td style="border:1px solid black;" v-if="val_1[6] == 'rdl8_status'">
                        <span v-if="field.rdl8_status == 'N' || field.rdl8_status == 'L'"></span>
                        <span v-else>High</span>
                    </td>
                     <td style="border:1px solid black;" v-if="val_1[6] == 'rdl9_status'">
                        <span v-if="field.rdl9_status == 'N' || field.rdl9_status == 'L'"></span>
                        <span v-else>High</span>
                    </td>
                     <td style="border:1px solid black;" v-if="val_1[6] == 'rdl10_status'">
                        <span v-if="field.rdl10_status == 'N' || field.rdl10_status == 'L'"></span>
                        <span v-else>High</span>
                    </td>
                     <td style="border:1px solid black;" v-if="val_1[6] == 'rdl11_status'">
                        <span v-if="field.rdl11_status == 'N' || field.rdl11_status == 'L'"></span>
                        <span v-else>High</span>
                    </td>
                     <td style="border:1px solid black;" v-if="val_1[6] == 'rdl12_status'">
                        <span v-if="field.rdl12_status == 'N' || field.rdl12_status == 'L'"></span>
                        <span v-else>High</span>
                    </td>
                     <td style="border:1px solid black;" v-if="val_1[6] == 'rdl13_status'">
                        <span v-if="field.rdl13_status == 'N' || field.rdl13_status == 'L'"></span>
                        <span v-else>High</span>
                    </td>
                     <td style="border:1px solid black;" v-if="val_1[6] == 'rdl14_status'">
                        <span v-if="field.rdl14_status == 'N' || field.rdl14_status == 'L'"></span>
                        <span v-else>High</span>
                    </td>
                     <td style="border:1px solid black;" v-if="val_1[6] == 'rdl15_status'">
                        <span v-if="field.rdl15_status == 'N' || field.rdl15_status == 'L'"></span>
                        <span v-else>High</span>
                    </td>
                     <td style="border:1px solid black;" v-if="val_1[6] == 'rdl16_status'">
                        <span v-if="field.rdl16_status == 'N' || field.rdl16_status == 'L'"></span>
                        <span v-else>High</span>
                    </td>
                     <td style="border:1px solid black;" v-if="val_1[6] == 'rdl17_status'">
                        <span v-if="field.rdl17_status == 'N' || field.rdl17_status == 'L'"></span>
                        <span v-else>High</span>
                    </td>
                     <td style="border:1px solid black;" v-if="val_1[6] == 'rdl18_status'">
                        <span v-if="field.rdl18_status == 'N' || field.rdl18_status == 'L'"></span>
                        <span v-else>High</span>
                    </td>
                     <td style="border:1px solid black;" v-if="val_1[6] == 'rdl19_status'">
                        <span v-if="field.rdl19_status == 'N' || field.rdl19_status == 'L'"></span>
                        <span v-else>High</span>
                    </td>
                     <td style="border:1px solid black;" v-if="val_1[6] == 'rdl20_status'">
                        <span v-if="field.rdl20_status == 'N' || field.rdl20_status == 'L'"></span>
                        <span v-else>High</span>
                    </td>
                     <td style="border:1px solid black;" v-if="val_1[6] == 'rdl21_status'">
                        <span v-if="field.rdl21_status == 'N' || field.rdl21_status == 'L'"></span>
                        <span v-else>High</span>
                    </td>
                     <td style="border:1px solid black;" v-if="val_1[6] == 'rdl22_status'">
                        <span v-if="field.rdl22_status == 'N' || field.rdl22_status == 'L'"></span>
                        <span v-else>High</span>
                    </td>
                     <td style="border:1px solid black;" v-if="val_1[6] == 'rdl23_status'">
                        <span v-if="field.rdl23_status == 'N' || field.rdl23_status == 'L'"></span>
                        <span v-else>High</span>
                    </td>
                     <td style="border:1px solid black;" v-if="val_1[6] == 'rdl24_status'">
                        <span v-if="field.rdl24_status == 'N' || field.rdl24_status == 'L'"></span>
                        <span v-else>High</span>
                    </td>
                     <td style="border:1px solid black;" v-if="val_1[6] == 'rdl25_status'">
                        <span v-if="field.rdl25_status == 'N' || field.rdl25_status == 'L'"></span>
                        <span v-else>High</span>
                    </td>
                     <td style="border:1px solid black;" v-if="val_1[6] == 'dpl1_status'">
                        <span v-if="field.dpl1_status == 'N' || field.dpl1_status == 'L'"></span>
                        <span v-else>High</span>
                    </td>
                     <td style="border:1px solid black;" v-if="val_1[6] == 'dpl2_status'">
                        <span v-if="field.dpl2_status == 'N' || field.dpl2_status == 'L'"></span>
                        <span v-else>High</span>
                    </td>
                     <td style="border:1px solid black;" v-if="val_1[6] == 'dpl3_status'">
                        <span v-if="field.dpl3_status == 'N' || field.dpl3_status == 'L'"></span>
                        <span v-else>High</span>
                    </td>
                     <td style="border:1px solid black;" v-if="val_1[6] == 'dpl4_status'">
                        <span v-if="field.dpl4_status == 'N' || field.dpl4_status == 'L'"></span>
                        <span v-else>High</span>
                    </td>
                     <td style="border:1px solid black;" v-if="val_1[6] == 'dpl5_status'">
                        <span v-if="field.dpl5_status == 'N' || field.dpl5_status == 'L'"></span>
                        <span v-else>High</span>
                    </td>
                     <td style="border:1px solid black;" v-if="val_1[6] == 'dpl6_status'">
                        <span v-if="field.dpl6_status == 'N' || field.dpl6_status == 'L'"></span>
                        <span v-else>High</span>
                    </td>
                     <td style="border:1px solid black;" v-if="val_1[6] == 'dpl7_status'">
                        <span v-if="field.dpl7_status == 'N' || field.dpl7_status == 'L'"></span>
                        <span v-else>High</span>
                    </td>
                    <td style="border:1px solid black;" v-if="val_1[6] == 'dpl8_status'">
                        <span v-if="field.dpl8_status == 'N' || field.dpl8_status == 'L'"></span>
                        <span v-else>High</span>
                    </td>

                     <td style="border:1px solid black;"  v-if="val_1[7] == 'rdl1_status'">
                        <span v-if="field.rdl1_status == 'N' || field.rdl1_status == 'L'"></span>
                        <span v-else>High</span>
                    </td>
                     <td style="border:1px solid black;" v-if="val_1[7] == 'rdl2_status'">
                        <span v-if="field.rdl2_status == 'N' || field.rdl2_status == 'L'"></span>
                        <span v-else>High</span>
                    </td>
                     <td style="border:1px solid black;" v-if="val_1[7] == 'rdl3_status'">
                        <span v-if="field.rdl3_status == 'N' || field.rdl3_status == 'L'"></span>
                        <span v-else>High</span>
                    </td>
                     <td style="border:1px solid black;" v-if="val_1[7] == 'rdl4_status'">
                        <span v-if="field.rdl4_status == 'N' || field.rdl4_status == 'L'"></span>
                        <span v-else>High</span>
                    </td>
                     <td style="border:1px solid black;" v-if="val_1[7] == 'rdl5_status'">
                        <span v-if="field.rdl5_status == 'N' || field.rdl5_status == 'L'"></span>
                        <span v-else>High</span>
                    </td>
                     <td style="border:1px solid black;" v-if="val_1[7] == 'rdl6_status'">
                        <span v-if="field.rdl6_status == 'N' || field.rdl6_status == 'L'"></span>
                        <span v-else>High</span>
                    </td>
                     <td style="border:1px solid black;" v-if="val_1[7] == 'rdl7_status'">
                        <span v-if="field.rdl7_status == 'N' || field.rdl7_status == 'L'"></span>
                        <span v-else>High</span>
                    </td>
                    <td style="border:1px solid black;" v-if="val_1[7] == 'rdl8_status'">
                        <span v-if="field.rdl8_status == 'N' || field.rdl8_status == 'L'"></span>
                        <span v-else>High</span>
                    </td>
                     <td style="border:1px solid black;" v-if="val_1[7] == 'rdl9_status'">
                        <span v-if="field.rdl9_status == 'N' || field.rdl9_status == 'L'"></span>
                        <span v-else>High</span>
                    </td>
                     <td style="border:1px solid black;" v-if="val_1[7] == 'rdl10_status'">
                        <span v-if="field.rdl10_status == 'N' || field.rdl10_status == 'L'"></span>
                        <span v-else>High</span>
                    </td>
                     <td style="border:1px solid black;" v-if="val_1[7] == 'rdl11_status'">
                        <span v-if="field.rdl11_status == 'N' || field.rdl11_status == 'L'"></span>
                        <span v-else>High</span>
                    </td>
                     <td style="border:1px solid black;" v-if="val_1[7] == 'rdl12_status'">
                        <span v-if="field.rdl12_status == 'N' || field.rdl12_status == 'L'"></span>
                        <span v-else>High</span>
                    </td>
                     <td style="border:1px solid black;" v-if="val_1[7] == 'rdl13_status'">
                        <span v-if="field.rdl13_status == 'N' || field.rdl13_status == 'L'"></span>
                        <span v-else>High</span>
                    </td>
                     <td style="border:1px solid black;" v-if="val_1[7] == 'rdl14_status'">
                        <span v-if="field.rdl14_status == 'N' || field.rdl14_status == 'L'"></span>
                        <span v-else>High</span>
                    </td>
                     <td style="border:1px solid black;" v-if="val_1[7] == 'rdl15_status'">
                        <span v-if="field.rdl15_status == 'N' || field.rdl15_status == 'L'"></span>
                        <span v-else>High</span>
                    </td>
                     <td style="border:1px solid black;" v-if="val_1[7] == 'rdl16_status'">
                        <span v-if="field.rdl16_status == 'N' || field.rdl16_status == 'L'"></span>
                        <span v-else>High</span>
                    </td>
                     <td style="border:1px solid black;" v-if="val_1[7] == 'rdl17_status'">
                        <span v-if="field.rdl17_status == 'N' || field.rdl17_status == 'L'"></span>
                        <span v-else>High</span>
                    </td>
                     <td style="border:1px solid black;" v-if="val_1[7] == 'rdl18_status'">
                        <span v-if="field.rdl18_status == 'N' || field.rdl18_status == 'L'"></span>
                        <span v-else>High</span>
                    </td>
                     <td style="border:1px solid black;" v-if="val_1[7] == 'rdl19_status'">
                        <span v-if="field.rdl19_status == 'N' || field.rdl19_status == 'L'"></span>
                        <span v-else>High</span>
                    </td>
                     <td style="border:1px solid black;" v-if="val_1[7] == 'rdl20_status'">
                        <span v-if="field.rdl20_status == 'N' || field.rdl20_status == 'L'"></span>
                        <span v-else>High</span>
                    </td>
                     <td style="border:1px solid black;" v-if="val_1[7] == 'rdl21_status'">
                        <span v-if="field.rdl21_status == 'N' || field.rdl21_status == 'L'"></span>
                        <span v-else>High</span>
                    </td>
                     <td style="border:1px solid black;" v-if="val_1[7] == 'rdl22_status'">
                        <span v-if="field.rdl22_status == 'N' || field.rdl22_status == 'L'"></span>
                        <span v-else>High</span>
                    </td>
                     <td style="border:1px solid black;" v-if="val_1[7] == 'rdl23_status'">
                        <span v-if="field.rdl23_status == 'N' || field.rdl23_status == 'L'"></span>
                        <span v-else>High</span>
                    </td>
                     <td style="border:1px solid black;" v-if="val_1[7] == 'rdl24_status'">
                        <span v-if="field.rdl24_status == 'N' || field.rdl24_status == 'L'"></span>
                        <span v-else>High</span>
                    </td>
                     <td style="border:1px solid black;" v-if="val_1[7] == 'rdl25_status'">
                        <span v-if="field.rdl25_status == 'N' || field.rdl25_status == 'L'"></span>
                        <span v-else>High</span>
                    </td>
                     <td style="border:1px solid black;" v-if="val_1[7] == 'dpl1_status'">
                        <span v-if="field.dpl1_status == 'N' || field.dpl1_status == 'L'"></span>
                        <span v-else>High</span>
                    </td>
                     <td style="border:1px solid black;" v-if="val_1[7] == 'dpl2_status'">
                        <span v-if="field.dpl2_status == 'N' || field.dpl2_status == 'L'"></span>
                        <span v-else>High</span>
                    </td>
                     <td style="border:1px solid black;" v-if="val_1[7] == 'dpl3_status'">
                        <span v-if="field.dpl3_status == 'N' || field.dpl3_status == 'L'"></span>
                        <span v-else>High</span>
                    </td>
                     <td style="border:1px solid black;" v-if="val_1[7] == 'dpl4_status'">
                        <span v-if="field.dpl4_status == 'N' || field.dpl4_status == 'L'"></span>
                        <span v-else>High</span>
                    </td>
                     <td style="border:1px solid black;" v-if="val_1[7] == 'dpl5_status'">
                        <span v-if="field.dpl5_status == 'N' || field.dpl5_status == 'L'"></span>
                        <span v-else>High</span>
                    </td>
                     <td style="border:1px solid black;" v-if="val_1[7] == 'dpl6_status'">
                        <span v-if="field.dpl6_status == 'N' || field.dpl6_status == 'L'"></span>
                        <span v-else>High</span>
                    </td>
                     <td style="border:1px solid black;" v-if="val_1[7] == 'dpl7_status'">
                        <span v-if="field.dpl7_status == 'N' || field.dpl7_status == 'L'"></span>
                        <span v-else>High</span>
                    </td>
                    <td style="border:1px solid black;" v-if="val_1[7] == 'dpl8_status'">
                        <span v-if="field.dpl8_status == 'N' || field.dpl8_status == 'L'"></span>
                        <span v-else>High</span>
                    </td>

                     <td style="border:1px solid black;"  v-if="val_1[8] == 'rdl1_status'">
                        <span v-if="field.rdl1_status == 'N' || field.rdl1_status == 'L'"></span>
                        <span v-else>High</span>
                    </td>
                     <td style="border:1px solid black;" v-if="val_1[8] == 'rdl2_status'">
                        <span v-if="field.rdl2_status == 'N' || field.rdl2_status == 'L'"></span>
                        <span v-else>High</span>
                    </td>
                     <td style="border:1px solid black;" v-if="val_1[8] == 'rdl3_status'">
                        <span v-if="field.rdl3_status == 'N' || field.rdl3_status == 'L'"></span>
                        <span v-else>High</span>
                    </td>
                     <td style="border:1px solid black;" v-if="val_1[8] == 'rdl4_status'">
                        <span v-if="field.rdl4_status == 'N' || field.rdl4_status == 'L'"></span>
                        <span v-else>High</span>
                    </td>
                     <td style="border:1px solid black;" v-if="val_1[8] == 'rdl5_status'">
                        <span v-if="field.rdl5_status == 'N' || field.rdl5_status == 'L'"></span>
                        <span v-else>High</span>
                    </td>
                     <td style="border:1px solid black;" v-if="val_1[8] == 'rdl6_status'">
                        <span v-if="field.rdl6_status == 'N' || field.rdl6_status == 'L'"></span>
                        <span v-else>High</span>
                    </td>
                     <td style="border:1px solid black;" v-if="val_1[8] == 'rdl7_status'">
                        <span v-if="field.rdl7_status == 'N' || field.rdl7_status == 'L'"></span>
                        <span v-else>High</span>
                    </td>
                    <td style="border:1px solid black;" v-if="val_1[8] == 'rdl8_status'">
                        <span v-if="field.rdl8_status == 'N' || field.rdl8_status == 'L'"></span>
                        <span v-else>High</span>
                    </td>
                     <td style="border:1px solid black;" v-if="val_1[8] == 'rdl9_status'">
                        <span v-if="field.rdl9_status == 'N' || field.rdl9_status == 'L'"></span>
                        <span v-else>High</span>
                    </td>
                     <td style="border:1px solid black;" v-if="val_1[8] == 'rdl10_status'">
                        <span v-if="field.rdl10_status == 'N' || field.rdl10_status == 'L'"></span>
                        <span v-else>High</span>
                    </td>
                     <td style="border:1px solid black;" v-if="val_1[8] == 'rdl11_status'">
                        <span v-if="field.rdl11_status == 'N' || field.rdl11_status == 'L'"></span>
                        <span v-else>High</span>
                    </td>
                     <td style="border:1px solid black;" v-if="val_1[8] == 'rdl12_status'">
                        <span v-if="field.rdl12_status == 'N' || field.rdl12_status == 'L'"></span>
                        <span v-else>High</span>
                    </td>
                     <td style="border:1px solid black;" v-if="val_1[8] == 'rdl13_status'">
                        <span v-if="field.rdl13_status == 'N' || field.rdl13_status == 'L'"></span>
                        <span v-else>High</span>
                    </td>
                     <td style="border:1px solid black;" v-if="val_1[8] == 'rdl14_status'">
                        <span v-if="field.rdl14_status == 'N' || field.rdl14_status == 'L'"></span>
                        <span v-else>High</span>
                    </td>
                     <td style="border:1px solid black;" v-if="val_1[8] == 'rdl15_status'">
                        <span v-if="field.rdl15_status == 'N' || field.rdl15_status == 'L'"></span>
                        <span v-else>High</span>
                    </td>
                     <td style="border:1px solid black;" v-if="val_1[8] == 'rdl16_status'">
                        <span v-if="field.rdl16_status == 'N' || field.rdl16_status == 'L'"></span>
                        <span v-else>High</span>
                    </td>
                     <td style="border:1px solid black;" v-if="val_1[8] == 'rdl17_status'">
                        <span v-if="field.rdl17_status == 'N' || field.rdl17_status == 'L'"></span>
                        <span v-else>High</span>
                    </td>
                     <td style="border:1px solid black;" v-if="val_1[8] == 'rdl18_status'">
                        <span v-if="field.rdl18_status == 'N' || field.rdl18_status == 'L'"></span>
                        <span v-else>High</span>
                    </td>
                     <td style="border:1px solid black;" v-if="val_1[8] == 'rdl19_status'">
                        <span v-if="field.rdl19_status == 'N' || field.rdl19_status == 'L'"></span>
                        <span v-else>High</span>
                    </td>
                     <td style="border:1px solid black;" v-if="val_1[8] == 'rdl20_status'">
                        <span v-if="field.rdl20_status == 'N' || field.rdl20_status == 'L'"></span>
                        <span v-else>High</span>
                    </td>
                     <td style="border:1px solid black;" v-if="val_1[8] == 'rdl21_status'">
                        <span v-if="field.rdl21_status == 'N' || field.rdl21_status == 'L'"></span>
                        <span v-else>High</span>
                    </td>
                     <td style="border:1px solid black;" v-if="val_1[8] == 'rdl22_status'">
                        <span v-if="field.rdl22_status == 'N' || field.rdl22_status == 'L'"></span>
                        <span v-else>High</span>
                    </td>
                     <td style="border:1px solid black;" v-if="val_1[8] == 'rdl23_status'">
                        <span v-if="field.rdl23_status == 'N' || field.rdl23_status == 'L'"></span>
                        <span v-else>High</span>
                    </td>
                     <td style="border:1px solid black;" v-if="val_1[8] == 'rdl24_status'">
                        <span v-if="field.rdl24_status == 'N' || field.rdl24_status == 'L'"></span>
                        <span v-else>High</span>
                    </td>
                     <td style="border:1px solid black;" v-if="val_1[8] == 'rdl25_status'">
                        <span v-if="field.rdl25_status == 'N' || field.rdl25_status == 'L'"></span>
                        <span v-else>High</span>
                    </td>
                     <td style="border:1px solid black;" v-if="val_1[8] == 'dpl1_status'">
                        <span v-if="field.dpl1_status == 'N' || field.dpl1_status == 'L'"></span>
                        <span v-else>High</span>
                    </td>
                     <td style="border:1px solid black;" v-if="val_1[8] == 'dpl2_status'">
                        <span v-if="field.dpl2_status == 'N' || field.dpl2_status == 'L'"></span>
                        <span v-else>High</span>
                    </td>
                     <td style="border:1px solid black;" v-if="val_1[8] == 'dpl3_status'">
                        <span v-if="field.dpl3_status == 'N' || field.dpl3_status == 'L'"></span>
                        <span v-else>High</span>
                    </td>
                     <td style="border:1px solid black;" v-if="val_1[8] == 'dpl4_status'">
                        <span v-if="field.dpl4_status == 'N' || field.dpl4_status == 'L'"></span>
                        <span v-else>High</span>
                    </td>
                     <td style="border:1px solid black;" v-if="val_1[8] == 'dpl5_status'">
                        <span v-if="field.dpl5_status == 'N' || field.dpl5_status == 'L'"></span>
                        <span v-else>High</span>
                    </td>
                     <td style="border:1px solid black;" v-if="val_1[8] == 'dpl6_status'">
                        <span v-if="field.dpl6_status == 'N' || field.dpl6_status == 'L'"></span>
                        <span v-else>High</span>
                    </td>
                     <td style="border:1px solid black;" v-if="val_1[8] == 'dpl7_status'">
                        <span v-if="field.dpl7_status == 'N' || field.dpl7_status == 'L'"></span>
                        <span v-else>High</span>
                    </td>
                    <td style="border:1px solid black;" v-if="val_1[8] == 'dpl8_status'">
                        <span v-if="field.dpl8_status == 'N' || field.dpl8_status == 'L'"></span>
                        <span v-else>High</span>
                    </td>

                     <td style="border:1px solid black;"  v-if="val_1[9] == 'rdl1_status'">
                        <span v-if="field.rdl1_status == 'N' || field.rdl1_status == 'L'"></span>
                        <span v-else>High</span>
                    </td>
                     <td style="border:1px solid black;" v-if="val_1[9] == 'rdl2_status'">
                        <span v-if="field.rdl2_status == 'N' || field.rdl2_status == 'L'"></span>
                        <span v-else>High</span>
                    </td>
                     <td style="border:1px solid black;" v-if="val_1[9] == 'rdl3_status'">
                        <span v-if="field.rdl3_status == 'N' || field.rdl3_status == 'L'"></span>
                        <span v-else>High</span>
                    </td>
                     <td style="border:1px solid black;" v-if="val_1[9] == 'rdl4_status'">
                        <span v-if="field.rdl4_status == 'N' || field.rdl4_status == 'L'"></span>
                        <span v-else>High</span>
                    </td>
                     <td style="border:1px solid black;" v-if="val_1[9] == 'rdl5_status'">
                        <span v-if="field.rdl5_status == 'N' || field.rdl5_status == 'L'"></span>
                        <span v-else>High</span>
                    </td>
                     <td style="border:1px solid black;" v-if="val_1[9] == 'rdl6_status'">
                        <span v-if="field.rdl6_status == 'N' || field.rdl6_status == 'L'"></span>
                        <span v-else>High</span>
                    </td>
                     <td style="border:1px solid black;" v-if="val_1[9] == 'rdl7_status'">
                        <span v-if="field.rdl7_status == 'N' || field.rdl7_status == 'L'"></span>
                        <span v-else>High</span>
                    </td>
                    <td style="border:1px solid black;" v-if="val_1[9] == 'rdl8_status'">
                        <span v-if="field.rdl8_status == 'N' || field.rdl8_status == 'L'"></span>
                        <span v-else>High</span>
                    </td>
                     <td style="border:1px solid black;" v-if="val_1[9] == 'rdl9_status'">
                        <span v-if="field.rdl9_status == 'N' || field.rdl9_status == 'L'"></span>
                        <span v-else>High</span>
                    </td>
                     <td style="border:1px solid black;" v-if="val_1[9] == 'rdl10_status'">
                        <span v-if="field.rdl10_status == 'N' || field.rdl10_status == 'L'"></span>
                        <span v-else>High</span>
                    </td>
                     <td style="border:1px solid black;" v-if="val_1[9] == 'rdl11_status'">
                        <span v-if="field.rdl11_status == 'N' || field.rdl11_status == 'L'"></span>
                        <span v-else>High</span>
                    </td>
                     <td style="border:1px solid black;" v-if="val_1[9] == 'rdl12_status'">
                        <span v-if="field.rdl12_status == 'N' || field.rdl12_status == 'L'"></span>
                        <span v-else>High</span>
                    </td>
                     <td style="border:1px solid black;" v-if="val_1[9] == 'rdl13_status'">
                        <span v-if="field.rdl13_status == 'N' || field.rdl13_status == 'L'"></span>
                        <span v-else>High</span>
                    </td>
                     <td style="border:1px solid black;" v-if="val_1[9] == 'rdl14_status'">
                        <span v-if="field.rdl14_status == 'N' || field.rdl14_status == 'L'"></span>
                        <span v-else>High</span>
                    </td>
                     <td style="border:1px solid black;" v-if="val_1[9] == 'rdl15_status'">
                        <span v-if="field.rdl15_status == 'N' || field.rdl15_status == 'L'"></span>
                        <span v-else>High</span>
                    </td>
                     <td style="border:1px solid black;" v-if="val_1[9] == 'rdl16_status'">
                        <span v-if="field.rdl16_status == 'N' || field.rdl16_status == 'L'"></span>
                        <span v-else>High</span>
                    </td>
                     <td style="border:1px solid black;" v-if="val_1[9] == 'rdl17_status'">
                        <span v-if="field.rdl17_status == 'N' || field.rdl17_status == 'L'"></span>
                        <span v-else>High</span>
                    </td>
                     <td style="border:1px solid black;" v-if="val_1[9] == 'rdl18_status'">
                        <span v-if="field.rdl18_status == 'N' || field.rdl18_status == 'L'"></span>
                        <span v-else>High</span>
                    </td>
                     <td style="border:1px solid black;" v-if="val_1[9] == 'rdl19_status'">
                        <span v-if="field.rdl19_status == 'N' || field.rdl19_status == 'L'"></span>
                        <span v-else>High</span>
                    </td>
                     <td style="border:1px solid black;" v-if="val_1[9] == 'rdl20_status'">
                        <span v-if="field.rdl20_status == 'N' || field.rdl20_status == 'L'"></span>
                        <span v-else>High</span>
                    </td>
                     <td style="border:1px solid black;" v-if="val_1[9] == 'rdl21_status'">
                        <span v-if="field.rdl21_status == 'N' || field.rdl21_status == 'L'"></span>
                        <span v-else>High</span>
                    </td>
                     <td style="border:1px solid black;" v-if="val_1[9] == 'rdl22_status'">
                        <span v-if="field.rdl22_status == 'N' || field.rdl22_status == 'L'"></span>
                        <span v-else>High</span>
                    </td>
                     <td style="border:1px solid black;" v-if="val_1[9] == 'rdl23_status'">
                        <span v-if="field.rdl23_status == 'N' || field.rdl23_status == 'L'"></span>
                        <span v-else>High</span>
                    </td>
                     <td style="border:1px solid black;" v-if="val_1[9] == 'rdl24_status'">
                        <span v-if="field.rdl24_status == 'N' || field.rdl24_status == 'L'"></span>
                        <span v-else>High</span>
                    </td>
                     <td style="border:1px solid black;" v-if="val_1[9] == 'rdl25_status'">
                        <span v-if="field.rdl25_status == 'N' || field.rdl25_status == 'L'"></span>
                        <span v-else>High</span>
                    </td>
                     <td style="border:1px solid black;" v-if="val_1[9] == 'dpl1_status'">
                        <span v-if="field.dpl1_status == 'N' || field.dpl1_status == 'L'"></span>
                        <span v-else>High</span>
                    </td>
                     <td style="border:1px solid black;" v-if="val_1[9] == 'dpl2_status'">
                        <span v-if="field.dpl2_status == 'N' || field.dpl2_status == 'L'"></span>
                        <span v-else>High</span>
                    </td>
                     <td style="border:1px solid black;" v-if="val_1[9] == 'dpl3_status'">
                        <span v-if="field.dpl3_status == 'N' || field.dpl3_status == 'L'"></span>
                        <span v-else>High</span>
                    </td>
                     <td style="border:1px solid black;" v-if="val_1[9] == 'dpl4_status'">
                        <span v-if="field.dpl4_status == 'N' || field.dpl4_status == 'L'"></span>
                        <span v-else>High</span>
                    </td>
                     <td style="border:1px solid black;" v-if="val_1[9] == 'dpl5_status'">
                        <span v-if="field.dpl5_status == 'N' || field.dpl5_status == 'L'"></span>
                        <span v-else>High</span>
                    </td>
                     <td style="border:1px solid black;" v-if="val_1[9] == 'dpl6_status'">
                        <span v-if="field.dpl6_status == 'N' || field.dpl6_status == 'L'"></span>
                        <span v-else>High</span>
                    </td>
                     <td style="border:1px solid black;" v-if="val_1[9] == 'dpl7_status'">
                        <span v-if="field.dpl7_status == 'N' || field.dpl7_status == 'L'"></span>
                        <span v-else>High</span>
                    </td>
                    <td style="border:1px solid black;" v-if="val_1[9] == 'dpl8_status'">
                        <span v-if="field.dpl8_status == 'N' || field.dpl8_status == 'L'"></span>
                        <span v-else>High</span>
                    </td>

                     <td style="border:1px solid black;"  v-if="val_1[10] == 'rdl1_status'">
                        <span v-if="field.rdl1_status == 'N' || field.rdl1_status == 'L'"></span>
                        <span v-else>High</span>
                    </td>
                     <td style="border:1px solid black;" v-if="val_1[10] == 'rdl2_status'">
                        <span v-if="field.rdl2_status == 'N' || field.rdl2_status == 'L'"></span>
                        <span v-else>High</span>
                    </td>
                     <td style="border:1px solid black;" v-if="val_1[10] == 'rdl3_status'">
                        <span v-if="field.rdl3_status == 'N' || field.rdl3_status == 'L'"></span>
                        <span v-else>High</span>
                    </td>
                     <td style="border:1px solid black;" v-if="val_1[10] == 'rdl4_status'">
                        <span v-if="field.rdl4_status == 'N' || field.rdl4_status == 'L'"></span>
                        <span v-else>High</span>
                    </td>
                     <td style="border:1px solid black;" v-if="val_1[10] == 'rdl5_status'">
                        <span v-if="field.rdl5_status == 'N' || field.rdl5_status == 'L'"></span>
                        <span v-else>High</span>
                    </td>
                     <td style="border:1px solid black;" v-if="val_1[10] == 'rdl6_status'">
                        <span v-if="field.rdl6_status == 'N' || field.rdl6_status == 'L'"></span>
                        <span v-else>High</span>
                    </td>
                     <td style="border:1px solid black;" v-if="val_1[10] == 'rdl7_status'">
                        <span v-if="field.rdl7_status == 'N' || field.rdl7_status == 'L'"></span>
                        <span v-else>High</span>
                    </td>
                    <td style="border:1px solid black;" v-if="val_1[10] == 'rdl8_status'">
                        <span v-if="field.rdl8_status == 'N' || field.rdl8_status == 'L'"></span>
                        <span v-else>High</span>
                    </td>
                     <td style="border:1px solid black;" v-if="val_1[10] == 'rdl9_status'">
                        <span v-if="field.rdl9_status == 'N' || field.rdl9_status == 'L'"></span>
                        <span v-else>High</span>
                    </td>
                     <td style="border:1px solid black;" v-if="val_1[10] == 'rdl10_status'">
                        <span v-if="field.rdl10_status == 'N' || field.rdl10_status == 'L'"></span>
                        <span v-else>High</span>
                    </td>
                     <td style="border:1px solid black;" v-if="val_1[10] == 'rdl11_status'">
                        <span v-if="field.rdl11_status == 'N' || field.rdl11_status == 'L'"></span>
                        <span v-else>High</span>
                    </td>
                     <td style="border:1px solid black;" v-if="val_1[10] == 'rdl12_status'">
                        <span v-if="field.rdl12_status == 'N' || field.rdl12_status == 'L'"></span>
                        <span v-else>High</span>
                    </td>
                     <td style="border:1px solid black;" v-if="val_1[10] == 'rdl13_status'">
                        <span v-if="field.rdl13_status == 'N' || field.rdl13_status == 'L'"></span>
                        <span v-else>High</span>
                    </td>
                     <td style="border:1px solid black;" v-if="val_1[10] == 'rdl14_status'">
                        <span v-if="field.rdl14_status == 'N' || field.rdl14_status == 'L'"></span>
                        <span v-else>High</span>
                    </td>
                     <td style="border:1px solid black;" v-if="val_1[10] == 'rdl15_status'">
                        <span v-if="field.rdl15_status == 'N' || field.rdl15_status == 'L'"></span>
                        <span v-else>High</span>
                    </td>
                     <td style="border:1px solid black;" v-if="val_1[10] == 'rdl16_status'">
                        <span v-if="field.rdl16_status == 'N' || field.rdl16_status == 'L'"></span>
                        <span v-else>High</span>
                    </td>
                     <td style="border:1px solid black;" v-if="val_1[10] == 'rdl17_status'">
                        <span v-if="field.rdl17_status == 'N' || field.rdl17_status == 'L'"></span>
                        <span v-else>High</span>
                    </td>
                     <td style="border:1px solid black;" v-if="val_1[10] == 'rdl18_status'">
                        <span v-if="field.rdl18_status == 'N' || field.rdl18_status == 'L'"></span>
                        <span v-else>High</span>
                    </td>
                     <td style="border:1px solid black;" v-if="val_1[10] == 'rdl19_status'">
                        <span v-if="field.rdl19_status == 'N' || field.rdl19_status == 'L'"></span>
                        <span v-else>High</span>
                    </td>
                     <td style="border:1px solid black;" v-if="val_1[10] == 'rdl20_status'">
                        <span v-if="field.rdl20_status == 'N' || field.rdl20_status == 'L'"></span>
                        <span v-else>High</span>
                    </td>
                     <td style="border:1px solid black;" v-if="val_1[10] == 'rdl21_status'">
                        <span v-if="field.rdl21_status == 'N' || field.rdl21_status == 'L'"></span>
                        <span v-else>High</span>
                    </td>
                     <td style="border:1px solid black;" v-if="val_1[10] == 'rdl22_status'">
                        <span v-if="field.rdl22_status == 'N' || field.rdl22_status == 'L'"></span>
                        <span v-else>High</span>
                    </td>
                     <td style="border:1px solid black;" v-if="val_1[10] == 'rdl23_status'">
                        <span v-if="field.rdl23_status == 'N' || field.rdl23_status == 'L'"></span>
                        <span v-else>High</span>
                    </td>
                     <td style="border:1px solid black;" v-if="val_1[10] == 'rdl24_status'">
                        <span v-if="field.rdl24_status == 'N' || field.rdl24_status == 'L'"></span>
                        <span v-else>High</span>
                    </td>
                     <td style="border:1px solid black;" v-if="val_1[10] == 'rdl25_status'">
                        <span v-if="field.rdl25_status == 'N' || field.rdl25_status == 'L'"></span>
                        <span v-else>High</span>
                    </td>
                     <td style="border:1px solid black;" v-if="val_1[10] == 'dpl1_status'">
                        <span v-if="field.dpl1_status == 'N' || field.dpl1_status == 'L'"></span>
                        <span v-else>High</span>
                    </td>
                     <td style="border:1px solid black;" v-if="val_1[10] == 'dpl2_status'">
                        <span v-if="field.dpl2_status == 'N' || field.dpl2_status == 'L'"></span>
                        <span v-else>High</span>
                    </td>
                     <td style="border:1px solid black;" v-if="val_1[10] == 'dpl3_status'">
                        <span v-if="field.dpl3_status == 'N' || field.dpl3_status == 'L'"></span>
                        <span v-else>High</span>
                    </td>
                     <td style="border:1px solid black;" v-if="val_1[10] == 'dpl4_status'">
                        <span v-if="field.dpl4_status == 'N' || field.dpl4_status == 'L'"></span>
                        <span v-else>High</span>
                    </td>
                     <td style="border:1px solid black;" v-if="val_1[10] == 'dpl5_status'">
                        <span v-if="field.dpl5_status == 'N' || field.dpl5_status == 'L'"></span>
                        <span v-else>High</span>
                    </td>
                     <td style="border:1px solid black;" v-if="val_1[10] == 'dpl6_status'">
                        <span v-if="field.dpl6_status == 'N' || field.dpl6_status == 'L'"></span>
                        <span v-else>High</span>
                    </td>
                     <td style="border:1px solid black;" v-if="val_1[10] == 'dpl7_status'">
                        <span v-if="field.dpl7_status == 'N' || field.dpl7_status == 'L'"></span>
                        <span v-else>High</span>
                    </td>
                    <td style="border:1px solid black;" v-if="val_1[10] == 'dpl8_status'">
                        <span v-if="field.dpl8_status == 'N' || field.dpl8_status == 'L'"></span>
                        <span v-else>High</span>
                    </td>

                     <td style="border:1px solid black;"  v-if="val_1[11] == 'rdl1_status'">
                        <span v-if="field.rdl1_status == 'N' || field.rdl1_status == 'L'"></span>
                        <span v-else>High</span>
                    </td>
                     <td style="border:1px solid black;" v-if="val_1[11] == 'rdl2_status'">
                        <span v-if="field.rdl2_status == 'N' || field.rdl2_status == 'L'"></span>
                        <span v-else>High</span>
                    </td>
                     <td style="border:1px solid black;" v-if="val_1[11] == 'rdl3_status'">
                        <span v-if="field.rdl3_status == 'N' || field.rdl3_status == 'L'"></span>
                        <span v-else>High</span>
                    </td>
                     <td style="border:1px solid black;" v-if="val_1[11] == 'rdl4_status'">
                        <span v-if="field.rdl4_status == 'N' || field.rdl4_status == 'L'"></span>
                        <span v-else>High</span>
                    </td>
                     <td style="border:1px solid black;" v-if="val_1[11] == 'rdl5_status'">
                        <span v-if="field.rdl5_status == 'N' || field.rdl5_status == 'L'"></span>
                        <span v-else>High</span>
                    </td>
                     <td style="border:1px solid black;" v-if="val_1[11] == 'rdl6_status'">
                        <span v-if="field.rdl6_status == 'N' || field.rdl6_status == 'L'"></span>
                        <span v-else>High</span>
                    </td>
                     <td style="border:1px solid black;" v-if="val_1[11] == 'rdl7_status'">
                        <span v-if="field.rdl7_status == 'N' || field.rdl7_status == 'L'"></span>
                        <span v-else>High</span>
                    </td>
                    <td style="border:1px solid black;" v-if="val_1[11] == 'rdl8_status'">
                        <span v-if="field.rdl8_status == 'N' || field.rdl8_status == 'L'"></span>
                        <span v-else>High</span>
                    </td>
                     <td style="border:1px solid black;" v-if="val_1[11] == 'rdl9_status'">
                        <span v-if="field.rdl9_status == 'N' || field.rdl9_status == 'L'"></span>
                        <span v-else>High</span>
                    </td>
                     <td style="border:1px solid black;" v-if="val_1[11] == 'rdl10_status'">
                        <span v-if="field.rdl10_status == 'N' || field.rdl10_status == 'L'"></span>
                        <span v-else>High</span>
                    </td>
                     <td style="border:1px solid black;" v-if="val_1[11] == 'rdl11_status'">
                        <span v-if="field.rdl11_status == 'N' || field.rdl11_status == 'L'"></span>
                        <span v-else>High</span>
                    </td>
                     <td style="border:1px solid black;" v-if="val_1[11] == 'rdl12_status'">
                        <span v-if="field.rdl12_status == 'N' || field.rdl12_status == 'L'"></span>
                        <span v-else>High</span>
                    </td>
                     <td style="border:1px solid black;" v-if="val_1[11] == 'rdl13_status'">
                        <span v-if="field.rdl13_status == 'N' || field.rdl13_status == 'L'"></span>
                        <span v-else>High</span>
                    </td>
                     <td style="border:1px solid black;" v-if="val_1[11] == 'rdl14_status'">
                        <span v-if="field.rdl14_status == 'N' || field.rdl14_status == 'L'"></span>
                        <span v-else>High</span>
                    </td>
                     <td style="border:1px solid black;" v-if="val_1[11] == 'rdl15_status'">
                        <span v-if="field.rdl15_status == 'N' || field.rdl15_status == 'L'"></span>
                        <span v-else>High</span>
                    </td>
                     <td style="border:1px solid black;" v-if="val_1[11] == 'rdl16_status'">
                        <span v-if="field.rdl16_status == 'N' || field.rdl16_status == 'L'"></span>
                        <span v-else>High</span>
                    </td>
                     <td style="border:1px solid black;" v-if="val_1[11] == 'rdl17_status'">
                        <span v-if="field.rdl17_status == 'N' || field.rdl17_status == 'L'"></span>
                        <span v-else>High</span>
                    </td>
                     <td style="border:1px solid black;" v-if="val_1[11] == 'rdl18_status'">
                        <span v-if="field.rdl18_status == 'N' || field.rdl18_status == 'L'"></span>
                        <span v-else>High</span>
                    </td>
                     <td style="border:1px solid black;" v-if="val_1[11] == 'rdl19_status'">
                        <span v-if="field.rdl19_status == 'N' || field.rdl19_status == 'L'"></span>
                        <span v-else>High</span>
                    </td>
                     <td style="border:1px solid black;" v-if="val_1[11] == 'rdl20_status'">
                        <span v-if="field.rdl20_status == 'N' || field.rdl20_status == 'L'"></span>
                        <span v-else>High</span>
                    </td>
                     <td style="border:1px solid black;" v-if="val_1[11] == 'rdl21_status'">
                        <span v-if="field.rdl21_status == 'N' || field.rdl21_status == 'L'"></span>
                        <span v-else>High</span>
                    </td>
                     <td style="border:1px solid black;" v-if="val_1[11] == 'rdl22_status'">
                        <span v-if="field.rdl22_status == 'N' || field.rdl22_status == 'L'"></span>
                        <span v-else>High</span>
                    </td>
                     <td style="border:1px solid black;" v-if="val_1[11] == 'rdl23_status'">
                        <span v-if="field.rdl23_status == 'N' || field.rdl23_status == 'L'"></span>
                        <span v-else>High</span>
                    </td>
                     <td style="border:1px solid black;" v-if="val_1[11] == 'rdl24_status'">
                        <span v-if="field.rdl24_status == 'N' || field.rdl24_status == 'L'"></span>
                        <span v-else>High</span>
                    </td>
                     <td style="border:1px solid black;" v-if="val_1[11] == 'rdl25_status'">
                        <span v-if="field.rdl25_status == 'N' || field.rdl25_status == 'L'"></span>
                        <span v-else>High</span>
                    </td>
                     <td style="border:1px solid black;" v-if="val_1[11] == 'dpl1_status'">
                        <span v-if="field.dpl1_status == 'N' || field.dpl1_status == 'L'"></span>
                        <span v-else>High</span>
                    </td>
                     <td style="border:1px solid black;" v-if="val_1[11] == 'dpl2_status'">
                        <span v-if="field.dpl2_status == 'N' || field.dpl2_status == 'L'"></span>
                        <span v-else>High</span>
                    </td>
                     <td style="border:1px solid black;" v-if="val_1[11] == 'dpl3_status'">
                        <span v-if="field.dpl3_status == 'N' || field.dpl3_status == 'L'"></span>
                        <span v-else>High</span>
                    </td>
                     <td style="border:1px solid black;" v-if="val_1[11] == 'dpl4_status'">
                        <span v-if="field.dpl4_status == 'N' || field.dpl4_status == 'L'"></span>
                        <span v-else>High</span>
                    </td>
                     <td style="border:1px solid black;" v-if="val_1[11] == 'dpl5_status'">
                        <span v-if="field.dpl5_status == 'N' || field.dpl5_status == 'L'"></span>
                        <span v-else>High</span>
                    </td>
                     <td style="border:1px solid black;" v-if="val_1[11] == 'dpl6_status'">
                        <span v-if="field.dpl6_status == 'N' || field.dpl6_status == 'L'"></span>
                        <span v-else>High</span>
                    </td>
                     <td style="border:1px solid black;" v-if="val_1[11] == 'dpl7_status'">
                        <span v-if="field.dpl7_status == 'N' || field.dpl7_status == 'L'"></span>
                        <span v-else>High</span>
                    </td>
                    <td style="border:1px solid black;" v-if="val_1[11] == 'dpl8_status'">
                        <span v-if="field.dpl8_status == 'N' || field.dpl8_status == 'L'"></span>
                        <span v-else>High</span>
                    </td>

                     <td style="border:1px solid black;"  v-if="val_1[12] == 'rdl1_status'">
                        <span v-if="field.rdl1_status == 'N' || field.rdl1_status == 'L'"></span>
                        <span v-else>High</span>
                    </td>
                     <td style="border:1px solid black;" v-if="val_1[12] == 'rdl2_status'">
                        <span v-if="field.rdl2_status == 'N' || field.rdl2_status == 'L'"></span>
                        <span v-else>High</span>
                    </td>
                     <td style="border:1px solid black;" v-if="val_1[12] == 'rdl3_status'">
                        <span v-if="field.rdl3_status == 'N' || field.rdl3_status == 'L'"></span>
                        <span v-else>High</span>
                    </td>
                     <td style="border:1px solid black;" v-if="val_1[12] == 'rdl4_status'">
                        <span v-if="field.rdl4_status == 'N' || field.rdl4_status == 'L'"></span>
                        <span v-else>High</span>
                    </td>
                     <td style="border:1px solid black;" v-if="val_1[12] == 'rdl5_status'">
                        <span v-if="field.rdl5_status == 'N' || field.rdl5_status == 'L'"></span>
                        <span v-else>High</span>
                    </td>
                     <td style="border:1px solid black;" v-if="val_1[12] == 'rdl6_status'">
                        <span v-if="field.rdl6_status == 'N' || field.rdl6_status == 'L'"></span>
                        <span v-else>High</span>
                    </td>
                     <td style="border:1px solid black;" v-if="val_1[12] == 'rdl7_status'">
                        <span v-if="field.rdl7_status == 'N' || field.rdl7_status == 'L'"></span>
                        <span v-else>High</span>
                    </td>
                    <td style="border:1px solid black;" v-if="val_1[12] == 'rdl8_status'">
                        <span v-if="field.rdl8_status == 'N' || field.rdl8_status == 'L'"></span>
                        <span v-else>High</span>
                    </td>
                     <td style="border:1px solid black;" v-if="val_1[12] == 'rdl9_status'">
                        <span v-if="field.rdl9_status == 'N' || field.rdl9_status == 'L'"></span>
                        <span v-else>High</span>
                    </td>
                     <td style="border:1px solid black;" v-if="val_1[12] == 'rdl10_status'">
                        <span v-if="field.rdl10_status == 'N' || field.rdl10_status == 'L'"></span>
                        <span v-else>High</span>
                    </td>
                     <td style="border:1px solid black;" v-if="val_1[12] == 'rdl11_status'">
                        <span v-if="field.rdl11_status == 'N' || field.rdl11_status == 'L'"></span>
                        <span v-else>High</span>
                    </td>
                     <td style="border:1px solid black;" v-if="val_1[12] == 'rdl12_status'">
                        <span v-if="field.rdl12_status == 'N' || field.rdl12_status == 'L'"></span>
                        <span v-else>High</span>
                    </td>
                     <td style="border:1px solid black;" v-if="val_1[12] == 'rdl13_status'">
                        <span v-if="field.rdl13_status == 'N' || field.rdl13_status == 'L'"></span>
                        <span v-else>High</span>
                    </td>
                     <td style="border:1px solid black;" v-if="val_1[12] == 'rdl14_status'">
                        <span v-if="field.rdl14_status == 'N' || field.rdl14_status == 'L'"></span>
                        <span v-else>High</span>
                    </td>
                     <td style="border:1px solid black;" v-if="val_1[12] == 'rdl15_status'">
                        <span v-if="field.rdl15_status == 'N' || field.rdl15_status == 'L'"></span>
                        <span v-else>High</span>
                    </td>
                     <td style="border:1px solid black;" v-if="val_1[12] == 'rdl16_status'">
                        <span v-if="field.rdl16_status == 'N' || field.rdl16_status == 'L'"></span>
                        <span v-else>High</span>
                    </td>
                     <td style="border:1px solid black;" v-if="val_1[12] == 'rdl17_status'">
                        <span v-if="field.rdl17_status == 'N' || field.rdl17_status == 'L'"></span>
                        <span v-else>High</span>
                    </td>
                     <td style="border:1px solid black;" v-if="val_1[12] == 'rdl18_status'">
                        <span v-if="field.rdl18_status == 'N' || field.rdl18_status == 'L'"></span>
                        <span v-else>High</span>
                    </td>
                     <td style="border:1px solid black;" v-if="val_1[12] == 'rdl19_status'">
                        <span v-if="field.rdl19_status == 'N' || field.rdl19_status == 'L'"></span>
                        <span v-else>High</span>
                    </td>
                     <td style="border:1px solid black;" v-if="val_1[12] == 'rdl20_status'">
                        <span v-if="field.rdl20_status == 'N' || field.rdl20_status == 'L'"></span>
                        <span v-else>High</span>
                    </td>
                     <td style="border:1px solid black;" v-if="val_1[12] == 'rdl21_status'">
                        <span v-if="field.rdl21_status == 'N' || field.rdl21_status == 'L'"></span>
                        <span v-else>High</span>
                    </td>
                     <td style="border:1px solid black;" v-if="val_1[12] == 'rdl22_status'">
                        <span v-if="field.rdl22_status == 'N' || field.rdl22_status == 'L'"></span>
                        <span v-else>High</span>
                    </td>
                     <td style="border:1px solid black;" v-if="val_1[12] == 'rdl23_status'">
                        <span v-if="field.rdl23_status == 'N' || field.rdl23_status == 'L'"></span>
                        <span v-else>High</span>
                    </td>
                     <td style="border:1px solid black;" v-if="val_1[12] == 'rdl24_status'">
                        <span v-if="field.rdl24_status == 'N' || field.rdl24_status == 'L'"></span>
                        <span v-else>High</span>
                    </td>
                     <td style="border:1px solid black;" v-if="val_1[12] == 'rdl25_status'">
                        <span v-if="field.rdl25_status == 'N' || field.rdl25_status == 'L'"></span>
                        <span v-else>High</span>
                    </td>
                     <td style="border:1px solid black;" v-if="val_1[12] == 'dpl1_status'">
                        <span v-if="field.dpl1_status == 'N' || field.dpl1_status == 'L'"></span>
                        <span v-else>High</span>
                    </td>
                     <td style="border:1px solid black;" v-if="val_1[12] == 'dpl2_status'">
                        <span v-if="field.dpl2_status == 'N' || field.dpl2_status == 'L'"></span>
                        <span v-else>High</span>
                    </td>
                     <td style="border:1px solid black;" v-if="val_1[12] == 'dpl3_status'">
                        <span v-if="field.dpl3_status == 'N' || field.dpl3_status == 'L'"></span>
                        <span v-else>High</span>
                    </td>
                     <td style="border:1px solid black;" v-if="val_1[12] == 'dpl4_status'">
                        <span v-if="field.dpl4_status == 'N' || field.dpl4_status == 'L'"></span>
                        <span v-else>High</span>
                    </td>
                     <td style="border:1px solid black;" v-if="val_1[12] == 'dpl5_status'">
                        <span v-if="field.dpl5_status == 'N' || field.dpl5_status == 'L'"></span>
                        <span v-else>High</span>
                    </td>
                     <td style="border:1px solid black;" v-if="val_1[12] == 'dpl6_status'">
                        <span v-if="field.dpl6_status == 'N' || field.dpl6_status == 'L'"></span>
                        <span v-else>High</span>
                    </td>
                     <td style="border:1px solid black;" v-if="val_1[12] == 'dpl7_status'">
                        <span v-if="field.dpl7_status == 'N' || field.dpl7_status == 'L'"></span>
                        <span v-else>High</span>
                    </td>
                    <td style="border:1px solid black;" v-if="val_1[12] == 'dpl8_status'">
                        <span v-if="field.dpl8_status == 'N' || field.dpl8_status == 'L'"></span>
                        <span v-else>High</span>
                    </td>

                     <td style="border:1px solid black;"  v-if="val_1[13] == 'rdl1_status'">
                        <span v-if="field.rdl1_status == 'N' || field.rdl1_status == 'L'"></span>
                        <span v-else>High</span>
                    </td>
                     <td style="border:1px solid black;" v-if="val_1[13] == 'rdl2_status'">
                        <span v-if="field.rdl2_status == 'N' || field.rdl2_status == 'L'"></span>
                        <span v-else>High</span>
                    </td>
                     <td style="border:1px solid black;" v-if="val_1[13] == 'rdl3_status'">
                        <span v-if="field.rdl3_status == 'N' || field.rdl3_status == 'L'"></span>
                        <span v-else>High</span>
                    </td>
                     <td style="border:1px solid black;" v-if="val_1[13] == 'rdl4_status'">
                        <span v-if="field.rdl4_status == 'N' || field.rdl4_status == 'L'"></span>
                        <span v-else>High</span>
                    </td>
                     <td style="border:1px solid black;" v-if="val_1[13] == 'rdl5_status'">
                        <span v-if="field.rdl5_status == 'N' || field.rdl5_status == 'L'"></span>
                        <span v-else>High</span>
                    </td>
                     <td style="border:1px solid black;" v-if="val_1[13] == 'rdl6_status'">
                        <span v-if="field.rdl6_status == 'N' || field.rdl6_status == 'L'"></span>
                        <span v-else>High</span>
                    </td>
                     <td style="border:1px solid black;" v-if="val_1[13] == 'rdl7_status'">
                        <span v-if="field.rdl7_status == 'N' || field.rdl7_status == 'L'"></span>
                        <span v-else>High</span>
                    </td>
                    <td style="border:1px solid black;" v-if="val_1[13] == 'rdl8_status'">
                        <span v-if="field.rdl8_status == 'N' || field.rdl8_status == 'L'"></span>
                        <span v-else>High</span>
                    </td>
                     <td style="border:1px solid black;" v-if="val_1[13] == 'rdl9_status'">
                        <span v-if="field.rdl9_status == 'N' || field.rdl9_status == 'L'"></span>
                        <span v-else>High</span>
                    </td>
                     <td style="border:1px solid black;" v-if="val_1[13] == 'rdl10_status'">
                        <span v-if="field.rdl10_status == 'N' || field.rdl10_status == 'L'"></span>
                        <span v-else>High</span>
                    </td>
                     <td style="border:1px solid black;" v-if="val_1[13] == 'rdl11_status'">
                        <span v-if="field.rdl11_status == 'N' || field.rdl11_status == 'L'"></span>
                        <span v-else>High</span>
                    </td>
                     <td style="border:1px solid black;" v-if="val_1[13] == 'rdl12_status'">
                        <span v-if="field.rdl12_status == 'N' || field.rdl12_status == 'L'"></span>
                        <span v-else>High</span>
                    </td>
                     <td style="border:1px solid black;" v-if="val_1[13] == 'rdl13_status'">
                        <span v-if="field.rdl13_status == 'N' || field.rdl13_status == 'L'"></span>
                        <span v-else>High</span>
                    </td>
                     <td style="border:1px solid black;" v-if="val_1[13] == 'rdl14_status'">
                        <span v-if="field.rdl14_status == 'N' || field.rdl14_status == 'L'"></span>
                        <span v-else>High</span>
                    </td>
                     <td style="border:1px solid black;" v-if="val_1[13] == 'rdl15_status'">
                        <span v-if="field.rdl15_status == 'N' || field.rdl15_status == 'L'"></span>
                        <span v-else>High</span>
                    </td>
                     <td style="border:1px solid black;" v-if="val_1[13] == 'rdl16_status'">
                        <span v-if="field.rdl16_status == 'N' || field.rdl16_status == 'L'"></span>
                        <span v-else>High</span>
                    </td>
                     <td style="border:1px solid black;" v-if="val_1[13] == 'rdl17_status'">
                        <span v-if="field.rdl17_status == 'N' || field.rdl17_status == 'L'"></span>
                        <span v-else>High</span>
                    </td>
                     <td style="border:1px solid black;" v-if="val_1[13] == 'rdl18_status'">
                        <span v-if="field.rdl18_status == 'N' || field.rdl18_status == 'L'"></span>
                        <span v-else>High</span>
                    </td>
                     <td style="border:1px solid black;" v-if="val_1[13] == 'rdl19_status'">
                        <span v-if="field.rdl19_status == 'N' || field.rdl19_status == 'L'"></span>
                        <span v-else>High</span>
                    </td>
                     <td style="border:1px solid black;" v-if="val_1[13] == 'rdl20_status'">
                        <span v-if="field.rdl20_status == 'N' || field.rdl20_status == 'L'"></span>
                        <span v-else>High</span>
                    </td>
                     <td style="border:1px solid black;" v-if="val_1[13] == 'rdl21_status'">
                        <span v-if="field.rdl21_status == 'N' || field.rdl21_status == 'L'"></span>
                        <span v-else>High</span>
                    </td>
                     <td style="border:1px solid black;" v-if="val_1[13] == 'rdl22_status'">
                        <span v-if="field.rdl22_status == 'N' || field.rdl22_status == 'L'"></span>
                        <span v-else>High</span>
                    </td>
                     <td style="border:1px solid black;" v-if="val_1[13] == 'rdl23_status'">
                        <span v-if="field.rdl23_status == 'N' || field.rdl23_status == 'L'"></span>
                        <span v-else>High</span>
                    </td>
                     <td style="border:1px solid black;" v-if="val_1[13] == 'rdl24_status'">
                        <span v-if="field.rdl24_status == 'N' || field.rdl24_status == 'L'"></span>
                        <span v-else>High</span>
                    </td>
                     <td style="border:1px solid black;" v-if="val_1[13] == 'rdl25_status'">
                        <span v-if="field.rdl25_status == 'N' || field.rdl25_status == 'L'"></span>
                        <span v-else>High</span>
                    </td>
                     <td style="border:1px solid black;" v-if="val_1[13] == 'dpl1_status'">
                        <span v-if="field.dpl1_status == 'N' || field.dpl1_status == 'L'"></span>
                        <span v-else>High</span>
                    </td>
                     <td style="border:1px solid black;" v-if="val_1[13] == 'dpl2_status'">
                        <span v-if="field.dpl2_status == 'N' || field.dpl2_status == 'L'"></span>
                        <span v-else>High</span>
                    </td>
                     <td style="border:1px solid black;" v-if="val_1[13] == 'dpl3_status'">
                        <span v-if="field.dpl3_status == 'N' || field.dpl3_status == 'L'"></span>
                        <span v-else>High</span>
                    </td>
                     <td style="border:1px solid black;" v-if="val_1[13] == 'dpl4_status'">
                        <span v-if="field.dpl4_status == 'N' || field.dpl4_status == 'L'"></span>
                        <span v-else>High</span>
                    </td>
                     <td style="border:1px solid black;" v-if="val_1[13] == 'dpl5_status'">
                        <span v-if="field.dpl5_status == 'N' || field.dpl5_status == 'L'"></span>
                        <span v-else>High</span>
                    </td>
                     <td style="border:1px solid black;" v-if="val_1[13] == 'dpl6_status'">
                        <span v-if="field.dpl6_status == 'N' || field.dpl6_status == 'L'"></span>
                        <span v-else>High</span>
                    </td>
                     <td style="border:1px solid black;" v-if="val_1[13] == 'dpl7_status'">
                        <span v-if="field.dpl7_status == 'N' || field.dpl7_status == 'L'"></span>
                        <span v-else>High</span>
                    </td>
                    <td style="border:1px solid black;" v-if="val_1[13] == 'dpl8_status'">
                        <span v-if="field.dpl8_status == 'N' || field.dpl8_status == 'L'"></span>
                        <span v-else>High</span>
                    </td>

                     <td style="border:1px solid black;"  v-if="val_1[14] == 'rdl1_status'">
                        <span v-if="field.rdl1_status == 'N' || field.rdl1_status == 'L'"></span>
                        <span v-else>High</span>
                    </td>
                     <td style="border:1px solid black;" v-if="val_1[14] == 'rdl2_status'">
                        <span v-if="field.rdl2_status == 'N' || field.rdl2_status == 'L'"></span>
                        <span v-else>High</span>
                    </td>
                     <td style="border:1px solid black;" v-if="val_1[14] == 'rdl3_status'">
                        <span v-if="field.rdl3_status == 'N' || field.rdl3_status == 'L'"></span>
                        <span v-else>High</span>
                    </td>
                     <td style="border:1px solid black;" v-if="val_1[14] == 'rdl4_status'">
                        <span v-if="field.rdl4_status == 'N' || field.rdl4_status == 'L'"></span>
                        <span v-else>High</span>
                    </td>
                     <td style="border:1px solid black;" v-if="val_1[14] == 'rdl5_status'">
                        <span v-if="field.rdl5_status == 'N' || field.rdl5_status == 'L'"></span>
                        <span v-else>High</span>
                    </td>
                     <td style="border:1px solid black;" v-if="val_1[14] == 'rdl6_status'">
                        <span v-if="field.rdl6_status == 'N' || field.rdl6_status == 'L'"></span>
                        <span v-else>High</span>
                    </td>
                     <td style="border:1px solid black;" v-if="val_1[14] == 'rdl7_status'">
                        <span v-if="field.rdl7_status == 'N' || field.rdl7_status == 'L'"></span>
                        <span v-else>High</span>
                    </td>
                    <td style="border:1px solid black;" v-if="val_1[14] == 'rdl8_status'">
                        <span v-if="field.rdl8_status == 'N' || field.rdl8_status == 'L'"></span>
                        <span v-else>High</span>
                    </td>
                     <td style="border:1px solid black;" v-if="val_1[14] == 'rdl9_status'">
                        <span v-if="field.rdl9_status == 'N' || field.rdl9_status == 'L'"></span>
                        <span v-else>High</span>
                    </td>
                     <td style="border:1px solid black;" v-if="val_1[14] == 'rdl10_status'">
                        <span v-if="field.rdl10_status == 'N' || field.rdl10_status == 'L'"></span>
                        <span v-else>High</span>
                    </td>
                     <td style="border:1px solid black;" v-if="val_1[14] == 'rdl11_status'">
                        <span v-if="field.rdl11_status == 'N' || field.rdl11_status == 'L'"></span>
                        <span v-else>High</span>
                    </td>
                     <td style="border:1px solid black;" v-if="val_1[14] == 'rdl12_status'">
                        <span v-if="field.rdl12_status == 'N' || field.rdl12_status == 'L'"></span>
                        <span v-else>High</span>
                    </td>
                     <td style="border:1px solid black;" v-if="val_1[14] == 'rdl13_status'">
                        <span v-if="field.rdl13_status == 'N' || field.rdl13_status == 'L'"></span>
                        <span v-else>High</span>
                    </td>
                     <td style="border:1px solid black;" v-if="val_1[14] == 'rdl14_status'">
                        <span v-if="field.rdl14_status == 'N' || field.rdl14_status == 'L'"></span>
                        <span v-else>High</span>
                    </td>
                     <td style="border:1px solid black;" v-if="val_1[14] == 'rdl15_status'">
                        <span v-if="field.rdl15_status == 'N' || field.rdl15_status == 'L'"></span>
                        <span v-else>High</span>
                    </td>
                     <td style="border:1px solid black;" v-if="val_1[14] == 'rdl16_status'">
                        <span v-if="field.rdl16_status == 'N' || field.rdl16_status == 'L'"></span>
                        <span v-else>High</span>
                    </td>
                     <td style="border:1px solid black;" v-if="val_1[14] == 'rdl17_status'">
                        <span v-if="field.rdl17_status == 'N' || field.rdl17_status == 'L'"></span>
                        <span v-else>High</span>
                    </td>
                     <td style="border:1px solid black;" v-if="val_1[14] == 'rdl18_status'">
                        <span v-if="field.rdl18_status == 'N' || field.rdl18_status == 'L'"></span>
                        <span v-else>High</span>
                    </td>
                     <td style="border:1px solid black;" v-if="val_1[14] == 'rdl19_status'">
                        <span v-if="field.rdl19_status == 'N' || field.rdl19_status == 'L'"></span>
                        <span v-else>High</span>
                    </td>
                     <td style="border:1px solid black;" v-if="val_1[14] == 'rdl20_status'">
                        <span v-if="field.rdl20_status == 'N' || field.rdl20_status == 'L'"></span>
                        <span v-else>High</span>
                    </td>
                     <td style="border:1px solid black;" v-if="val_1[14] == 'rdl21_status'">
                        <span v-if="field.rdl21_status == 'N' || field.rdl21_status == 'L'"></span>
                        <span v-else>High</span>
                    </td>
                     <td style="border:1px solid black;" v-if="val_1[14] == 'rdl22_status'">
                        <span v-if="field.rdl22_status == 'N' || field.rdl22_status == 'L'"></span>
                        <span v-else>High</span>
                    </td>
                     <td style="border:1px solid black;" v-if="val_1[14] == 'rdl23_status'">
                        <span v-if="field.rdl23_status == 'N' || field.rdl23_status == 'L'"></span>
                        <span v-else>High</span>
                    </td>
                     <td style="border:1px solid black;" v-if="val_1[14] == 'rdl24_status'">
                        <span v-if="field.rdl24_status == 'N' || field.rdl24_status == 'L'"></span>
                        <span v-else>High</span>
                    </td>
                     <td style="border:1px solid black;" v-if="val_1[14] == 'rdl25_status'">
                        <span v-if="field.rdl25_status == 'N' || field.rdl25_status == 'L'"></span>
                        <span v-else>High</span>
                    </td>
                     <td style="border:1px solid black;" v-if="val_1[14] == 'dpl1_status'">
                        <span v-if="field.dpl1_status == 'N' || field.dpl1_status == 'L'"></span>
                        <span v-else>High</span>
                    </td>
                     <td style="border:1px solid black;" v-if="val_1[14] == 'dpl2_status'">
                        <span v-if="field.dpl2_status == 'N' || field.dpl2_status == 'L'"></span>
                        <span v-else>High</span>
                    </td>
                     <td style="border:1px solid black;" v-if="val_1[14] == 'dpl3_status'">
                        <span v-if="field.dpl3_status == 'N' || field.dpl3_status == 'L'"></span>
                        <span v-else>High</span>
                    </td>
                     <td style="border:1px solid black;" v-if="val_1[14] == 'dpl4_status'">
                        <span v-if="field.dpl4_status == 'N' || field.dpl4_status == 'L'"></span>
                        <span v-else>High</span>
                    </td>
                     <td style="border:1px solid black;" v-if="val_1[14] == 'dpl5_status'">
                        <span v-if="field.dpl5_status == 'N' || field.dpl5_status == 'L'"></span>
                        <span v-else>High</span>
                    </td>
                     <td style="border:1px solid black;" v-if="val_1[14] == 'dpl6_status'">
                        <span v-if="field.dpl6_status == 'N' || field.dpl6_status == 'L'"></span>
                        <span v-else>High</span>
                    </td>
                     <td style="border:1px solid black;" v-if="val_1[14] == 'dpl7_status'">
                        <span v-if="field.dpl7_status == 'N' || field.dpl7_status == 'L'"></span>
                        <span v-else>High</span>
                    </td>
                    <td style="border:1px solid black;" v-if="val_1[14] == 'dpl8_status'">
                        <span v-if="field.dpl8_status == 'N' || field.dpl8_status == 'L'"></span>
                        <span v-else>High</span>
                    </td>

                     <td style="border:1px solid black;"  v-if="val_1[15] == 'rdl1_status'">
                        <span v-if="field.rdl1_status == 'N' || field.rdl1_status == 'L'"></span>
                        <span v-else>High</span>
                    </td>
                     <td style="border:1px solid black;" v-if="val_1[15] == 'rdl2_status'">
                        <span v-if="field.rdl2_status == 'N' || field.rdl2_status == 'L'"></span>
                        <span v-else>High</span>
                    </td>
                     <td style="border:1px solid black;" v-if="val_1[15] == 'rdl3_status'">
                        <span v-if="field.rdl3_status == 'N' || field.rdl3_status == 'L'"></span>
                        <span v-else>High</span>
                    </td>
                     <td style="border:1px solid black;" v-if="val_1[15] == 'rdl4_status'">
                        <span v-if="field.rdl4_status == 'N' || field.rdl4_status == 'L'"></span>
                        <span v-else>High</span>
                    </td>
                     <td style="border:1px solid black;" v-if="val_1[15] == 'rdl5_status'">
                        <span v-if="field.rdl5_status == 'N' || field.rdl5_status == 'L'"></span>
                        <span v-else>High</span>
                    </td>
                     <td style="border:1px solid black;" v-if="val_1[15] == 'rdl6_status'">
                        <span v-if="field.rdl6_status == 'N' || field.rdl6_status == 'L'"></span>
                        <span v-else>High</span>
                    </td>
                     <td style="border:1px solid black;" v-if="val_1[15] == 'rdl7_status'">
                        <span v-if="field.rdl7_status == 'N' || field.rdl7_status == 'L'"></span>
                        <span v-else>High</span>
                    </td>
                    <td style="border:1px solid black;" v-if="val_1[15] == 'rdl8_status'">
                        <span v-if="field.rdl8_status == 'N' || field.rdl8_status == 'L'"></span>
                        <span v-else>High</span>
                    </td>
                     <td style="border:1px solid black;" v-if="val_1[15] == 'rdl9_status'">
                        <span v-if="field.rdl9_status == 'N' || field.rdl9_status == 'L'"></span>
                        <span v-else>High</span>
                    </td>
                     <td style="border:1px solid black;" v-if="val_1[15] == 'rdl10_status'">
                        <span v-if="field.rdl10_status == 'N' || field.rdl10_status == 'L'"></span>
                        <span v-else>High</span>
                    </td>
                     <td style="border:1px solid black;" v-if="val_1[15] == 'rdl11_status'">
                        <span v-if="field.rdl11_status == 'N' || field.rdl11_status == 'L'"></span>
                        <span v-else>High</span>
                    </td>
                     <td style="border:1px solid black;" v-if="val_1[15] == 'rdl12_status'">
                        <span v-if="field.rdl12_status == 'N' || field.rdl12_status == 'L'"></span>
                        <span v-else>High</span>
                    </td>
                     <td style="border:1px solid black;" v-if="val_1[15] == 'rdl13_status'">
                        <span v-if="field.rdl13_status == 'N' || field.rdl13_status == 'L'"></span>
                        <span v-else>High</span>
                    </td>
                     <td style="border:1px solid black;" v-if="val_1[15] == 'rdl14_status'">
                        <span v-if="field.rdl14_status == 'N' || field.rdl14_status == 'L'"></span>
                        <span v-else>High</span>
                    </td>
                     <td style="border:1px solid black;" v-if="val_1[15] == 'rdl15_status'">
                        <span v-if="field.rdl15_status == 'N' || field.rdl15_status == 'L'"></span>
                        <span v-else>High</span>
                    </td>
                     <td style="border:1px solid black;" v-if="val_1[15] == 'rdl16_status'">
                        <span v-if="field.rdl16_status == 'N' || field.rdl16_status == 'L'"></span>
                        <span v-else>High</span>
                    </td>
                     <td style="border:1px solid black;" v-if="val_1[15] == 'rdl17_status'">
                        <span v-if="field.rdl17_status == 'N' || field.rdl17_status == 'L'"></span>
                        <span v-else>High</span>
                    </td>
                     <td style="border:1px solid black;" v-if="val_1[15] == 'rdl18_status'">
                        <span v-if="field.rdl18_status == 'N' || field.rdl18_status == 'L'"></span>
                        <span v-else>High</span>
                    </td>
                     <td style="border:1px solid black;" v-if="val_1[15] == 'rdl19_status'">
                        <span v-if="field.rdl19_status == 'N' || field.rdl19_status == 'L'"></span>
                        <span v-else>High</span>
                    </td>
                     <td style="border:1px solid black;" v-if="val_1[15] == 'rdl20_status'">
                        <span v-if="field.rdl20_status == 'N' || field.rdl20_status == 'L'"></span>
                        <span v-else>High</span>
                    </td>
                     <td style="border:1px solid black;" v-if="val_1[15] == 'rdl21_status'">
                        <span v-if="field.rdl21_status == 'N' || field.rdl21_status == 'L'"></span>
                        <span v-else>High</span>
                    </td>
                     <td style="border:1px solid black;" v-if="val_1[15] == 'rdl22_status'">
                        <span v-if="field.rdl22_status == 'N' || field.rdl22_status == 'L'"></span>
                        <span v-else>High</span>
                    </td>
                     <td style="border:1px solid black;" v-if="val_1[15] == 'rdl23_status'">
                        <span v-if="field.rdl23_status == 'N' || field.rdl23_status == 'L'"></span>
                        <span v-else>High</span>
                    </td>
                     <td style="border:1px solid black;" v-if="val_1[15] == 'rdl24_status'">
                        <span v-if="field.rdl24_status == 'N' || field.rdl24_status == 'L'"></span>
                        <span v-else>High</span>
                    </td>
                     <td style="border:1px solid black;" v-if="val_1[15] == 'rdl25_status'">
                        <span v-if="field.rdl25_status == 'N' || field.rdl25_status == 'L'"></span>
                        <span v-else>High</span>
                    </td>
                     <td style="border:1px solid black;" v-if="val_1[15] == 'dpl1_status'">
                        <span v-if="field.dpl1_status == 'N' || field.dpl1_status == 'L'"></span>
                        <span v-else>High</span>
                    </td>
                     <td style="border:1px solid black;" v-if="val_1[15] == 'dpl2_status'">
                        <span v-if="field.dpl2_status == 'N' || field.dpl2_status == 'L'"></span>
                        <span v-else>High</span>
                    </td>
                     <td style="border:1px solid black;" v-if="val_1[15] == 'dpl3_status'">
                        <span v-if="field.dpl3_status == 'N' || field.dpl3_status == 'L'"></span>
                        <span v-else>High</span>
                    </td>
                     <td style="border:1px solid black;" v-if="val_1[15] == 'dpl4_status'">
                        <span v-if="field.dpl4_status == 'N' || field.dpl4_status == 'L'"></span>
                        <span v-else>High</span>
                    </td>
                    <td style="border:1px solid black;" v-if="val_1[15] == 'dpl5_status'">
                        <span v-if="field.dpl5_status == 'N' || field.dpl5_status == 'L'"></span>
                        <span v-else>High</span>
                    </td>
                    <td style="border:1px solid black;" v-if="val_1[15] == 'dpl6_status'">
                        <span v-if="field.dpl6_status == 'N' || field.dpl6_status == 'L'"></span>
                        <span v-else>High</span>
                    </td>
                    <td style="border:1px solid black;" v-if="val_1[15] == 'dpl7_status'">
                        <span v-if="field.dpl7_status == 'N' || field.dpl7_status == 'L'"></span>
                        <span v-else>High</span>
                    </td>
                    <td style="border:1px solid black;" v-if="val_1[15] == 'dpl8_status'">
                        <span v-if="field.dpl8_status == 'N' || field.dpl8_status == 'L'"></span>
                        <span v-else>High</span>
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
            timing: 1,
            setInterval:'1',
            val_1  : [],
            startdate:'',
            enddate:'',
            select_record_option:[],
            select_record:[],
            select_db_record: '',
            db_val_1: [],
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
            axios.post('api/alarmshow',[this.val_1,this.timing,this.startdate,this.enddate], {headers: {'Authorization': 'Bearer ' + this.currentUser.token }})
                .then((response) => {
                    this.db_val_1 = response.data.pump_data1
                    console.log(this.db_val_1)
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
    border:1px solid black !important;
    
}
.custom-table td{
    border:1px solid black !important;
    
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
