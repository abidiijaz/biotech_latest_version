<template>
    <div className="col-md-12" style="padding: 0px;">

        <h1 style="text-align: center; padding-top: 30px;margin-bottom:15px !important;">Actuator Report</h1>
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
                    <td>D405 A</td>
                    <td><input value="bvo_8" v-model="val_1" type="checkbox" :disabled="disable" v-on:click="CheckRange"></td>
                   
                <tr>
                    <td>D405 B</td>
                    <td><input value="bvo_9" v-model="val_1" type="checkbox" :disabled="disable" v-on:click="CheckRange"></td>
                   
                </tr>
                <tr>
                    <td>D405 C</td>
                    <td><input value="bvo_10" v-model="val_1" type="checkbox" :disabled="disable" v-on:click="CheckRange"></td>
                   
                </tr>
                <tr>
                    <td>PPR-A</td>
                     <td><input value="bvo_12" v-model="val_1" type="checkbox" :disabled="disable" v-on:click="CheckRange"></td>
                   
                </tr>
                <tr>
                    <td>PPR-B</td>
                     <td><input value="bvo_13" v-model="val_1" type="checkbox" :disabled="disable" v-on:click="CheckRange"></td>
                   
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
                    <td>D405 A</td>
                    <td>
                        <input value="bvo_8"
                               v-model="val_1" type="checkbox" :disabled="disable" v-on:click="CheckRange"></td>
                   
                </tr>
                <tr>
                    <td>D405 B</td>
                    <td><input value="bvo_9"
                               v-model="val_1" type="checkbox" :disabled="disable" v-on:click="CheckRange"></td>
                  
                </tr>
                <tr>
                    <td>D405 C</td>
                    <td> <input value="bvo_10"
                                v-model="val_1" type="checkbox" :disabled="disable" v-on:click="CheckRange"></td>
                  
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
                    <td>D402 A</td>
                    <td><input value="bvo_1" v-model="val_1" type="checkbox" :disabled="disable" v-on:click="CheckRange"> </td>
                   
                </tr>
                <tr>
                    <td>D402 B</td>
                    <td> <input value="bvo_2" v-model="val_1" type="checkbox" :disabled="disable" v-on:click="CheckRange"></td>
                   
                </tr>
                <tr>
                    <td>D402 C</td>
                    <td><input value="bvo_3" v-model="val_1" type="checkbox" :disabled="disable" v-on:click="CheckRange"></td>
                    
                </tr>
                <tr><td>D402 D</td>
                    <td><input value="bvo_4" v-model="val_1" type="checkbox" :disabled="disable" v-on:click="CheckRange"></td>
                   
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
                    <td>D402 A</td>
                    <td>
                        <input value="bvo_1"
                               v-model="val_1" type="checkbox" :disabled="disable" v-on:click="CheckRange"></td>
                   
                </tr>
                <tr>
                    <td>D402 B</td>
                    <td>
                        <input value="bvo_2"
                               v-model="val_1" type="checkbox" :disabled="disable" v-on:click="CheckRange"></td>
                   
                </tr>
                <tr>
                    <td>D402 C</td>
                    <td> <input value="bvo_3"
                                v-model="val_1" type="checkbox" :disabled="disable" v-on:click="CheckRange"></td>
                   
                </tr>
                <tr>
                    <td>D402 D</td>
                    <td><input value="bvo_4"
                               v-model="val_1" type="checkbox" :disabled="disable" v-on:click="CheckRange"></td>
                   
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

        </form>
</div>
     
        <!--        <button @click="ExportExcel('xls')" >Export Excel</button>-->
        <input type="button" class="btn btn-success print-btn" @click="tableToExcel" value="Export to Excel" style="position:absolute; left: 84%; top: 37px;">
        <div class="container-2">
            <table class="table custom-table" id="testTable" style="font-size:15px;width: auto; margin: 0 auto; margin-bottom: 40px; text-align: center; "
                   ref="exportable_table">

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
                        <span v-if="timing == 5">
                            <span style="color:#ba4848">{{ startdate | formatDate }}</span>
                            To <span style="color:#ba4848">{{ enddate | formatDate }}</span>
                        </span>
                    </h2>
                    </td>
                </tr>
                <tr>
                    <th style="border:1px solid black;" v-if="val_1.length>0">Date And Time</th>
                    <th style="border:1px solid black;" v-if="val_1[0] == 'bvo_1'">D402 A</th>
                    <th style="border:1px solid black;" v-if="val_1[0] == 'bvo_2'">D402 B</th>
                    <th style="border:1px solid black;" v-if="val_1[0] == 'bvo_3'">D402 C</th>
                    <th style="border:1px solid black;" v-if="val_1[0] == 'bvo_4'">D402 D</th>
                    <th style="border:1px solid black;" v-if="val_1[0] == 'bvo_8'">D405 A</th>
                    <th style="border:1px solid black;" v-if="val_1[0] == 'bvo_9'">D405 B</th>
                    <th style="border:1px solid black;" v-if="val_1[0] == 'bvo_10'">D405 C</th>
                    <th style="border:1px solid black;" v-if="val_1[0] == 'bvo_12'">PPR-A</th>
                    <th style="border:1px solid black;" v-if="val_1[0] == 'bvo_13'">PPR-B</th>

                    <th style="border:1px solid black;" v-if="val_1[1] == 'bvo_1'">D402 A</th>
                    <th style="border:1px solid black;" v-if="val_1[1] == 'bvo_2'">D402 B</th>
                    <th style="border:1px solid black;" v-if="val_1[1] == 'bvo_3'">D402 C</th>
                    <th style="border:1px solid black;" v-if="val_1[1] == 'bvo_4'">D402 D</th>
                    <th style="border:1px solid black;" v-if="val_1[1] == 'bvo_8'">D405 A</th>
                    <th style="border:1px solid black;" v-if="val_1[1] == 'bvo_9'">D405 B</th>
                    <th style="border:1px solid black;" v-if="val_1[1] == 'bvo_10'">D405 C</th>
                    <th style="border:1px solid black;" v-if="val_1[1] == 'bvo_12'">PPR-A</th>
                    <th style="border:1px solid black;" v-if="val_1[1] == 'bvo_13'">PPR-B</th>
                   
                    <th style="border:1px solid black;" v-if="val_1[2] == 'bvo_1'">D402 A</th>
                    <th style="border:1px solid black;" v-if="val_1[2] == 'bvo_2'">D402 B</th>
                    <th style="border:1px solid black;" v-if="val_1[2] == 'bvo_3'">D402 C</th>
                    <th style="border:1px solid black;" v-if="val_1[2] == 'bvo_4'">D402 D</th>
                    <th style="border:1px solid black;" v-if="val_1[2] == 'bvo_8'">D405 A</th>
                    <th style="border:1px solid black;" v-if="val_1[2] == 'bvo_9'">D405 B</th>
                    <th style="border:1px solid black;" v-if="val_1[2] == 'bvo_10'">D405 C</th>
                    <th style="border:1px solid black;" v-if="val_1[2] == 'bvo_12'">PPR-A</th>
                    <th style="border:1px solid black;" v-if="val_1[2] == 'bvo_13'">PPR-B</th>
                   
                    <th style="border:1px solid black;" v-if="val_1[3] == 'bvo_1'">D402 A</th>
                    <th style="border:1px solid black;" v-if="val_1[3] == 'bvo_2'">D402 B</th>
                    <th style="border:1px solid black;" v-if="val_1[3] == 'bvo_3'">D402 C</th>
                    <th style="border:1px solid black;" v-if="val_1[3] == 'bvo_4'">D402 D</th>
                    <th style="border:1px solid black;" v-if="val_1[3] == 'bvo_8'">D405 A</th>
                    <th style="border:1px solid black;" v-if="val_1[3] == 'bvo_9'">D405 B</th>
                    <th style="border:1px solid black;" v-if="val_1[3] == 'bvo_10'">D405 C</th>
                    <th style="border:1px solid black;" v-if="val_1[3] == 'bvo_12'">PPR-A</th>
                    <th style="border:1px solid black;" v-if="val_1[3] == 'bvo_13'">PPR-B</th>

                    <th style="border:1px solid black;" v-if="val_1[4] == 'bvo_1'">D402 A</th>
                    <th style="border:1px solid black;" v-if="val_1[4] == 'bvo_2'">D402 B</th>
                    <th style="border:1px solid black;" v-if="val_1[4] == 'bvo_3'">D402 C</th>
                    <th style="border:1px solid black;" v-if="val_1[4] == 'bvo_4'">D402 D</th>
                    <th style="border:1px solid black;" v-if="val_1[4] == 'bvo_8'">D405 A</th>
                    <th style="border:1px solid black;" v-if="val_1[4] == 'bvo_9'">D405 B</th>
                    <th style="border:1px solid black;" v-if="val_1[4] == 'bvo_10'">D405 C</th>
                    <th style="border:1px solid black;" v-if="val_1[4] == 'bvo_12'">PPR-A</th>
                    <th style="border:1px solid black;" v-if="val_1[4] == 'bvo_13'">PPR-B</th>

                    <th style="border:1px solid black;" v-if="val_1[5] == 'bvo_1'">D402 A</th>
                    <th style="border:1px solid black;" v-if="val_1[5] == 'bvo_2'">D402 B</th>
                    <th style="border:1px solid black;" v-if="val_1[5] == 'bvo_3'">D402 C</th>
                    <th style="border:1px solid black;" v-if="val_1[5] == 'bvo_4'">D402 D</th>
                    <th style="border:1px solid black;" v-if="val_1[5] == 'bvo_8'">D405 A</th>
                    <th style="border:1px solid black;" v-if="val_1[5] == 'bvo_9'">D405 B</th>
                    <th style="border:1px solid black;" v-if="val_1[5] == 'bvo_10'">D405 C</th>
                    <th style="border:1px solid black;" v-if="val_1[5] == 'bvo_12'">PPR-A</th>
                    <th style="border:1px solid black;" v-if="val_1[5] == 'bvo_13'">PPR-B</th>

                    <th style="border:1px solid black;" v-if="val_1[6] == 'bvo_1'">D402 A</th>
                    <th style="border:1px solid black;" v-if="val_1[6] == 'bvo_2'">D402 B</th>
                    <th style="border:1px solid black;" v-if="val_1[6] == 'bvo_3'">D402 C</th>
                    <th style="border:1px solid black;" v-if="val_1[6] == 'bvo_4'">D402 D</th>
                    <th style="border:1px solid black;" v-if="val_1[6] == 'bvo_8'">D405 A</th>
                    <th style="border:1px solid black;" v-if="val_1[6] == 'bvo_9'">D405 B</th>
                    <th style="border:1px solid black;" v-if="val_1[6] == 'bvo_10'">D405 C</th>
                    <th style="border:1px solid black;" v-if="val_1[6] == 'bvo_12'">PPR-A</th>
                    <th style="border:1px solid black;" v-if="val_1[6] == 'bvo_13'">PPR-B</th>

                    <th style="border:1px solid black;" v-if="val_1[7] == 'bvo_1'">D402 A</th>
                    <th style="border:1px solid black;" v-if="val_1[7] == 'bvo_2'">D402 B</th>
                    <th style="border:1px solid black;" v-if="val_1[7] == 'bvo_3'">D402 C</th>
                    <th style="border:1px solid black;" v-if="val_1[7] == 'bvo_4'">D402 D</th>
                    <th style="border:1px solid black;" v-if="val_1[7] == 'bvo_8'">D405 A</th>
                    <th style="border:1px solid black;" v-if="val_1[7] == 'bvo_9'">D405 B</th>
                    <th style="border:1px solid black;" v-if="val_1[7] == 'bvo_10'">D405 C</th>
                    <th style="border:1px solid black;" v-if="val_1[7] == 'bvo_12'">PPR-A</th>
                    <th style="border:1px solid black;" v-if="val_1[7] == 'bvo_13'">PPR-B</th>

                    <th style="border:1px solid black;" v-if="val_1[8] == 'bvo_1'">D402 A</th>
                    <th style="border:1px solid black;" v-if="val_1[8] == 'bvo_2'">D402 B</th>
                    <th style="border:1px solid black;" v-if="val_1[8] == 'bvo_3'">D402 C</th>
                    <th style="border:1px solid black;" v-if="val_1[8] == 'bvo_4'">D402 D</th>
                    <th style="border:1px solid black;" v-if="val_1[8] == 'bvo_8'">D405 A</th>
                    <th style="border:1px solid black;" v-if="val_1[8] == 'bvo_9'">D405 B</th>
                    <th style="border:1px solid black;" v-if="val_1[8] == 'bvo_10'">D405 C</th>
                    <th style="border:1px solid black;" v-if="val_1[8] == 'bvo_12'">PPR-A</th>
                    <th style="border:1px solid black;" v-if="val_1[8] == 'bvo_13'">PPR-B</th>
                   
                   
                </tr>
                <tr v-for="(field, index ) in db_val_1">

                    <td style="border:1px solid black;" >{{field.timing | formatDate1 }}</td>
                    
                    <td style="border:1px solid black;" v-if="val_1[0] == 'bvo_1'" >
                        <span v-if="field.bvo_1 == 0">OFF</span>
                        <span v-else>ON</span>
                    </td>
                    <td style="border:1px solid black;" v-if="val_1[0] == 'bvo_2'" >
                        <span v-if="field.bvo_2 == 0">OFF</span>
                        <span v-else>ON</span>
                    </td>
                    <td style="border:1px solid black;" v-if="val_1[0] == 'bvo_3'" >
                       <span v-if="field.bvo_3 == 0">OFF</span>
                        <span v-else>ON</span>
                    </td>
                    <td style="border:1px solid black;" v-if="val_1[0] == 'bvo_4'" >
                        <span v-if="field.bvo_4 == 0">OFF</span>
                        <span v-else>ON</span>
                    </td>
                    <td style="border:1px solid black;" v-if="val_1[0] == 'bvo_8'" >
                       <span v-if="field.bvo_8 == 0">OFF</span>
                        <span v-else>ON</span>
                    </td>

                    <td style="border:1px solid black;" v-if="val_1[0] == 'bvo_9'" >
                        <span v-if="field.bvo_9 == 0">OFF</span>
                        <span v-else>ON</span>
                    </td>

                    <td style="border:1px solid black;" v-if="val_1[0] == 'bvo_10'" >
                       <span v-if="field.bvo_10 == 0">OFF</span>
                        <span v-else>ON</span>
                    </td>
                     <td style="border:1px solid black;" v-if="val_1[0] == 'bvo_12'" >
                        <span v-if="field.bvo_12 == 0">OFF</span>
                        <span v-else>ON</span>
                    </td>

                    <td style="border:1px solid black;" v-if="val_1[0] == 'bvo_13'" >
                       <span v-if="field.bvo_13 == 0">OFF</span>
                        <span v-else>ON</span>
                    </td>

                     <td style="border:1px solid black;" v-if="val_1[1] == 'bvo_12'" >
                        <span v-if="field.bvo_12 == 0">OFF</span>
                        <span v-else>ON</span>
                    </td>

                    <td style="border:1px solid black;" v-if="val_1[1] == 'bvo_13'" >
                       <span v-if="field.bvo_13 == 0">OFF</span>
                        <span v-else>ON</span>
                    </td>
                    <td style="border:1px solid black;" v-if="val_1[1] == 'bvo_1'" >
                        <span v-if="field.bvo_1 == 0">OFF</span>
                        <span v-else>ON</span>
                    </td>
                    <td style="border:1px solid black;" v-if="val_1[1] == 'bvo_2'" >
                        <span v-if="field.bvo_2 == 0">OFF</span>
                        <span v-else>ON</span>
                    </td>
                    <td style="border:1px solid black;" v-if="val_1[1] == 'bvo_3'" >
                       <span v-if="field.bvo_3 == 0">OFF</span>
                        <span v-else>ON</span>
                    </td>
                    <td style="border:1px solid black;" v-if="val_1[1] == 'bvo_4'" >
                        <span v-if="field.bvo_4 == 0">OFF</span>
                        <span v-else>ON</span>
                    </td>
                    <td style="border:1px solid black;" v-if="val_1[1] == 'bvo_8'" >
                       <span v-if="field.bvo_8 == 0">OFF</span>
                        <span v-else>ON</span>
                    </td>

                    <td style="border:1px solid black;" v-if="val_1[1] == 'bvo_9'" >
                        <span v-if="field.bvo_9 == 0">OFF</span>
                        <span v-else>ON</span>
                    </td>

                    <td style="border:1px solid black;" v-if="val_1[1] == 'bvo_10'" >
                       <span v-if="field.bvo_10 == 0">OFF</span>
                        <span v-else>ON</span>
                    </td>
                    
                    
                     <td style="border:1px solid black;" v-if="val_1[2] == 'bvo_12'" >
                        <span v-if="field.bvo_12 == 0">OFF</span>
                        <span v-else>ON</span>
                    </td>

                    <td style="border:1px solid black;" v-if="val_1[2] == 'bvo_13'" >
                       <span v-if="field.bvo_13 == 0">OFF</span>
                        <span v-else>ON</span>
                    </td>    
                      <td style="border:1px solid black;" v-if="val_1[2] == 'bvo_1'" >
                        <span v-if="field.bvo_1 == 0">OFF</span>
                        <span v-else>ON</span>
                    </td>
                    <td style="border:1px solid black;" v-if="val_1[2] == 'bvo_2'" >
                        <span v-if="field.bvo_2 == 0">OFF</span>
                        <span v-else>ON</span>
                    </td>
                    <td style="border:1px solid black;" v-if="val_1[2] == 'bvo_3'" >
                       <span v-if="field.bvo_3 == 0">OFF</span>
                        <span v-else>ON</span>
                    </td>
                    <td style="border:1px solid black;" v-if="val_1[2] == 'bvo_4'" >
                        <span v-if="field.bvo_4 == 0">OFF</span>
                        <span v-else>ON</span>
                    </td>
                    <td style="border:1px solid black;" v-if="val_1[2] == 'bvo_8'" >
                       <span v-if="field.bvo_8 == 0">OFF</span>
                        <span v-else>ON</span>
                    </td>

                    <td style="border:1px solid black;" v-if="val_1[2] == 'bvo_9'" >
                        <span v-if="field.bvo_9 == 0">OFF</span>
                        <span v-else>ON</span>
                    </td>

                    <td style="border:1px solid black;" v-if="val_1[2] == 'bvo_10'" >
                       <span v-if="field.bvo_10 == 0">OFF</span>
                        <span v-else>ON</span>
                    </td>

                     <td style="border:1px solid black;" v-if="val_1[3] == 'bvo_12'" >
                        <span v-if="field.bvo_12 == 0">OFF</span>
                        <span v-else>ON</span>
                    </td>

                    <td style="border:1px solid black;" v-if="val_1[3] == 'bvo_13'" >
                       <span v-if="field.bvo_13 == 0">OFF</span>
                        <span v-else>ON</span>
                    </td>
                      <td style="border:1px solid black;" v-if="val_1[3] == 'bvo_1'" >
                        <span v-if="field.bvo_1 == 0">OFF</span>
                        <span v-else>ON</span>
                    </td>
                    <td style="border:1px solid black;" v-if="val_1[3] == 'bvo_2'" >
                        <span v-if="field.bvo_2 == 0">OFF</span>
                        <span v-else>ON</span>
                    </td>
                    <td style="border:1px solid black;" v-if="val_1[3] == 'bvo_3'" >
                       <span v-if="field.bvo_3 == 0">OFF</span>
                        <span v-else>ON</span>
                    </td>
                    <td style="border:1px solid black;" v-if="val_1[3] == 'bvo_4'" >
                        <span v-if="field.bvo_4 == 0">OFF</span>
                        <span v-else>ON</span>
                    </td>
                    <td style="border:1px solid black;" v-if="val_1[3] == 'bvo_8'" >
                       <span v-if="field.bvo_8 == 0">OFF</span>
                        <span v-else>ON</span>
                    </td>

                    <td style="border:1px solid black;" v-if="val_1[3] == 'bvo_9'" >
                        <span v-if="field.bvo_9 == 0">OFF</span>
                        <span v-else>ON</span>
                    </td>

                    <td style="border:1px solid black;" v-if="val_1[3] == 'bvo_10'" >
                       <span v-if="field.bvo_10 == 0">OFF</span>
                        <span v-else>ON</span>
                    </td>

                     <td style="border:1px solid black;" v-if="val_1[4] == 'bvo_12'" >
                        <span v-if="field.bvo_12 == 0">OFF</span>
                        <span v-else>ON</span>
                    </td>

                    <td style="border:1px solid black;" v-if="val_1[4] == 'bvo_13'" >
                       <span v-if="field.bvo_13 == 0">OFF</span>
                        <span v-else>ON</span>
                    </td>
                      <td style="border:1px solid black;" v-if="val_1[4] == 'bvo_1'" >
                        <span v-if="field.bvo_1 == 0">OFF</span>
                        <span v-else>ON</span>
                    </td>
                    <td style="border:1px solid black;" v-if="val_1[4] == 'bvo_2'" >
                        <span v-if="field.bvo_2 == 0">OFF</span>
                        <span v-else>ON</span>
                    </td>
                    <td style="border:1px solid black;" v-if="val_1[4] == 'bvo_3'" >
                       <span v-if="field.bvo_3 == 0">OFF</span>
                        <span v-else>ON</span>
                    </td>
                    <td style="border:1px solid black;" v-if="val_1[4] == 'bvo_4'" >
                        <span v-if="field.bvo_4 == 0">OFF</span>
                        <span v-else>ON</span>
                    </td>
                    <td style="border:1px solid black;" v-if="val_1[4] == 'bvo_8'" >
                       <span v-if="field.bvo_8 == 0">OFF</span>
                        <span v-else>ON</span>
                    </td>

                    <td style="border:1px solid black;" v-if="val_1[4] == 'bvo_9'" >
                        <span v-if="field.bvo_9 == 0">OFF</span>
                        <span v-else>ON</span>
                    </td>

                    <td style="border:1px solid black;" v-if="val_1[4] == 'bvo_10'" >
                       <span v-if="field.bvo_10 == 0">OFF</span>
                        <span v-else>ON</span>
                    </td>

                     <td style="border:1px solid black;" v-if="val_1[5] == 'bvo_12'" >
                        <span v-if="field.bvo_12 == 0">OFF</span>
                        <span v-else>ON</span>
                    </td>

                    <td style="border:1px solid black;" v-if="val_1[5] == 'bvo_13'" >
                       <span v-if="field.bvo_13 == 0">OFF</span>
                        <span v-else>ON</span>
                    </td>
                      <td style="border:1px solid black;" v-if="val_1[5] == 'bvo_1'" >
                        <span v-if="field.bvo_1 == 0">OFF</span>
                        <span v-else>ON</span>
                    </td>
                    <td style="border:1px solid black;" v-if="val_1[5] == 'bvo_2'" >
                        <span v-if="field.bvo_2 == 0">OFF</span>
                        <span v-else>ON</span>
                    </td>
                    <td style="border:1px solid black;" v-if="val_1[5] == 'bvo_3'" >
                       <span v-if="field.bvo_3 == 0">OFF</span>
                        <span v-else>ON</span>
                    </td>
                    <td style="border:1px solid black;" v-if="val_1[5] == 'bvo_4'" >
                        <span v-if="field.bvo_4 == 0">OFF</span>
                        <span v-else>ON</span>
                    </td>
                    <td style="border:1px solid black;" v-if="val_1[5] == 'bvo_8'" >
                       <span v-if="field.bvo_8 == 0">OFF</span>
                        <span v-else>ON</span>
                    </td>

                    <td style="border:1px solid black;" v-if="val_1[5] == 'bvo_9'" >
                        <span v-if="field.bvo_9 == 0">OFF</span>
                        <span v-else>ON</span>
                    </td>

                    <td style="border:1px solid black;" v-if="val_1[5] == 'bvo_10'" >
                       <span v-if="field.bvo_10 == 0">OFF</span>
                        <span v-else>ON</span>
                    </td>

                     <td style="border:1px solid black;" v-if="val_1[6] == 'bvo_12'" >
                        <span v-if="field.bvo_12 == 0">OFF</span>
                        <span v-else>ON</span>
                    </td>

                    <td style="border:1px solid black;" v-if="val_1[6] == 'bvo_13'" >
                       <span v-if="field.bvo_13 == 0">OFF</span>
                        <span v-else>ON</span>
                    </td>
                      <td style="border:1px solid black;" v-if="val_1[6] == 'bvo_1'" >
                        <span v-if="field.bvo_1 == 0">OFF</span>
                        <span v-else>ON</span>
                    </td>
                    <td style="border:1px solid black;" v-if="val_1[6] == 'bvo_2'" >
                        <span v-if="field.bvo_2 == 0">OFF</span>
                        <span v-else>ON</span>
                    </td>
                    <td style="border:1px solid black;" v-if="val_1[6] == 'bvo_3'" >
                       <span v-if="field.bvo_3 == 0">OFF</span>
                        <span v-else>ON</span>
                    </td>
                    <td style="border:1px solid black;" v-if="val_1[6] == 'bvo_4'" >
                        <span v-if="field.bvo_4 == 0">OFF</span>
                        <span v-else>ON</span>
                    </td>
                    <td style="border:1px solid black;" v-if="val_1[6] == 'bvo_8'" >
                       <span v-if="field.bvo_8 == 0">OFF</span>
                        <span v-else>ON</span>
                    </td>

                    <td style="border:1px solid black;" v-if="val_1[6] == 'bvo_9'" >
                        <span v-if="field.bvo_9 == 0">OFF</span>
                        <span v-else>ON</span>
                    </td>

                    <td style="border:1px solid black;" v-if="val_1[6] == 'bvo_10'" >
                       <span v-if="field.bvo_10 == 0">OFF</span>
                        <span v-else>ON</span>
                    </td>

                    <td style="border:1px solid black;" v-if="val_1[7] == 'bvo_12'" >
                        <span v-if="field.bvo_12 == 0">OFF</span>
                        <span v-else>ON</span>
                    </td>

                    <td style="border:1px solid black;" v-if="val_1[7] == 'bvo_13'" >
                       <span v-if="field.bvo_13 == 0">OFF</span>
                        <span v-else>ON</span>
                    </td>
                      <td style="border:1px solid black;" v-if="val_1[7] == 'bvo_1'" >
                        <span v-if="field.bvo_1 == 0">OFF</span>
                        <span v-else>ON</span>
                    </td>
                    <td style="border:1px solid black;" v-if="val_1[7] == 'bvo_2'" >
                        <span v-if="field.bvo_2 == 0">OFF</span>
                        <span v-else>ON</span>
                    </td>
                    <td style="border:1px solid black;" v-if="val_1[7] == 'bvo_3'" >
                       <span v-if="field.bvo_3 == 0">OFF</span>
                        <span v-else>ON</span>
                    </td>
                    <td style="border:1px solid black;" v-if="val_1[7] == 'bvo_4'" >
                        <span v-if="field.bvo_4 == 0">OFF</span>
                        <span v-else>ON</span>
                    </td>
                    <td style="border:1px solid black;" v-if="val_1[7] == 'bvo_8'" >
                       <span v-if="field.bvo_8 == 0">OFF</span>
                        <span v-else>ON</span>
                    </td>

                    <td style="border:1px solid black;" v-if="val_1[7] == 'bvo_9'" >
                        <span v-if="field.bvo_9 == 0">OFF</span>
                        <span v-else>ON</span>
                    </td>

                    <td style="border:1px solid black;" v-if="val_1[7] == 'bvo_10'" >
                       <span v-if="field.bvo_10 == 0">OFF</span>
                        <span v-else>ON</span>
                    </td>

                    <td style="border:1px solid black;" v-if="val_1[8] == 'bvo_12'" >
                        <span v-if="field.bvo_12 == 0">OFF</span>
                        <span v-else>ON</span>
                    </td>

                    <td style="border:1px solid black;" v-if="val_1[8] == 'bvo_13'" >
                       <span v-if="field.bvo_13 == 0">OFF</span>
                        <span v-else>ON</span>
                    </td>
                      <td style="border:1px solid black;" v-if="val_1[8] == 'bvo_1'" >
                        <span v-if="field.bvo_1 == 0">OFF</span>
                        <span v-else>ON</span>
                    </td>
                    <td style="border:1px solid black;" v-if="val_1[8] == 'bvo_2'" >
                        <span v-if="field.bvo_2 == 0">OFF</span>
                        <span v-else>ON</span>
                    </td>
                    <td style="border:1px solid black;" v-if="val_1[8] == 'bvo_3'" >
                       <span v-if="field.bvo_3 == 0">OFF</span>
                        <span v-else>ON</span>
                    </td>
                    <td style="border:1px solid black;" v-if="val_1[8] == 'bvo_4'" >
                        <span v-if="field.bvo_4 == 0">OFF</span>
                        <span v-else>ON</span>
                    </td>
                    <td style="border:1px solid black;" v-if="val_1[8] == 'bvo_8'" >
                       <span v-if="field.bvo_8 == 0">OFF</span>
                        <span v-else>ON</span>
                    </td>

                    <td style="border:1px solid black;" v-if="val_1[8] == 'bvo_9'" >
                        <span v-if="field.bvo_9 == 0">OFF</span>
                        <span v-else>ON</span>
                    </td>

                    <td style="border:1px solid black;" v-if="val_1[8] == 'bvo_10'" >
                       <span v-if="field.bvo_10 == 0">OFF</span>
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

    created() {
        // window.addEventListener('beforeunload', window.location.reload());
        this.getData();
        // document.querySelector("row").style.marginRight = "auto";


        // ready() {
        //     window.addEventListener('beforeunload',  window.location.reload());
        // },

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
        abidfunction: function(){
            axios.get('api/showselectiona/'+ this.select_db_record, {headers: {'Authorization': 'Bearer ' + this.currentUser.token}})
                .then((response) => {
                    this.select_record_option = response.data.select_record
                    this.setInterval = this.select_record_option.selection_interval
                    this.timing = this.select_record_option.timing
                    this.val_1[0] = this.select_record_option.val_1
                    this.val_1[1] = this.select_record_option.val_2
                    this.val_1[2] = this.select_record_option.val_3
                    this.val_1[3] = this.select_record_option.val_4
                    this.val_1[4] = this.select_record_option.val_5
                    this.val_1[5] = this.select_record_option.val_6
                    this.val_1[6] = this.select_record_option.val_7
                    this.val_1[7] = this.select_record_option.val_8
                    this.val_1[8] = this.select_record_option.val_9
                    this.val_1[9] = this.select_record_option.val_10
                    this.val_1[10] = this.select_record_option.val_11
                    this.val_1[11] = this.select_record_option.val_12
                    this.val_1[12] = this.select_record_option.val_13
                    this.val_1[13] = this.select_record_option.val_14
                    this.val_1[14] = this.select_record_option.val_15
                    this.val_1[15] = this.select_record_option.val_16
                    console.log(this.select_record_option);
                    $('#testTable').paging({limit: 5});

                })
                .catch(err => {
                    console.log(err);
                })
        },
        getData() {
            axios.get('api/showselection/'+this.user_role_s, {headers: {'Authorization': 'Bearer ' + this.currentUser.token}})
                .then((response) => {
                    this.select_record = response.data.select_record;
                    // console.log(this.select_record[0].name)
                })
                .catch(err => {
                    console.log(err);
                })
        },

        // ExportExcel(type, fn, dl) {
        //     var elt = this.$refs.exportable_table;
        //
        //     console.log(elt);
        //     var wb = XLSX.utils.table_to_book(elt, {sheet: "worksheet",dateNF:'MM-DD-YYYY hh:mm'});
        //     var wscols = [
        //         { width: '600' },  // first column
        //
        //
        //     ];
        //     wb["!cols"] = wscols;
        //
        //     return dl ?
        //
        //         XLSX.write(wb, {bookType: type, bookSST: true, type: 'base64'}) :
        //         XLSX.writeFile(wb, fn || (('BioTech' + '.' || 'SheetJSTableExport.') + (type || 'xlsx')));
        //
        // },
        submit() {
            this.disable = true;
            axios.post('api/show_actuatorreport',[this.val_1,this.setInterval,this.timing,this.startdate,this.enddate], {headers: {'Authorization': 'Bearer ' + this.currentUser.token }})
                .then((response) => {
                    this.db_val_1 = response.data.val_1
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
