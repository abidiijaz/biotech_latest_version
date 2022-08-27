<template>
    <div className="col-md-12" style="padding: 0px;">
        <h1 style="text-align: center; padding-top: 30px;">Flow Totalizer Reset Report</h1>
       
        <form name="chartForm" @submit.prevent="submit">
            <table class="table" style="margin:0 auto; width: auto; margin-bottom: 30px; text-align: center; color: white">
                <tr>
                    <td>
                        <div class="form-group" >
                            <label >Select Flow Totalizer</label>
                            <select v-model="fields.select_FM"  class="form-control" id="ft">
                                <option value="FM-all">All FM</option>
                                <option value="FM-1">FM 1</option>
                                <option value="FM-2">FM 2</option>
                                <option value="FM-3">FM 3</option>
                                <option value="FM-4">FM 4</option>
                                <option value="FM-5">FM 5</option>
                                <option value="FM-6">FM 6</option>
                                <option value="FM-7">FM 7</option>
                                <option value="FM-8">FM 8</option>
                                <option value="FM-9">FM 9</option>
                                <option value="FM-10">FM 10</option>
                                <option value="FM-11">FM 11</option>
                                <option value="FM-12">FM 12</option>
                                <option value="FM-13">FM 13</option>
                                <option value="FM-14">FM 14</option>
                                <option value="FM-15">FM 15</option>
                                <option value="FM-16">FM 16</option>
                                <option value="FM-17">FM 17</option>
                                <option value="FM-18">FM 18</option>
                                <option value="FM-19">FM 19</option>
                                <option value="FM-20">FM 20</option>
                                <option value="FM-21">FM 21</option>
                                <option value="FM-22">FM 22</option>
                                <option value="FM-23">FM 23</option>
                                <option value="FM-24">FM 24</option>
                                <option value="FM-25">FM 25</option>
                                <option value="FM-26">FM 26</option>
                                <option value="FM-27">FM 27</option>
                            </select>
                        </div>
                    </td>
<!--                    <td>-->
<!--                        <div class="form-group" >-->
<!--                            <label>Set Intervals</label>-->
<!--                            <select v-model="fields.setInterval" class="form-control" id="interval">-->
<!--                                <option value="1">1 Minute</option>-->
<!--                                <option value="2">2 Minute</option>-->
<!--                                <option value="5">5 Minute</option>-->
<!--                                <option value="10">10 Minute</option>-->
<!--                                <option value="30">30 Minute</option>-->
<!--                                <option value="60">1 Hour</option>-->
<!--                            </select>-->
<!--                        </div>-->
<!--                    </td>-->
                    <td>
                        <div class="form-group">
                            <label>Start Date</label>
                            <input type="datetime-local" class="form-control" v-model="fields.startdate" id="js_fromdate"  >
                        </div>
                    </td>
                    <td>
                        <div class="form-group">
                            <label>End Date</label>
                            <input type="datetime-local" v-model="fields.enddate" class="form-control" required>
                        </div>
                    </td>
                    <td>
                        <div class="form-group" style="margin-top: 30px;">
                            <input type="submit" value="Show Data" class="btn btn-primary">
                        </div>
                    </td>
                </tr>
            </table>
        </form>
<!--        <button id="btn_print" v-on:click="print" class="btn btn-success" style="position:absolute; left: 87%; top: 128px;">Export PDF</button>-->
<!--        <button  @click="ExportExcel('xls')" class="btn btn-success" style="position:absolute; left: 87%; top: 170px;">Export Excel</button>-->
        
         <input type="button" class="btn btn-success print-btn" @click="tableToExcel" value="Export to Excel" style="position:absolute; left: 84%; top: 37px;">
        <div class="container-2">
            <!-- <div class="logo" style=" width:113px; height:90px; background-image: url('images/logo.png');background-repeat:no-repeat;margin-top: -47px;"></div> -->
            <table class="table custom-table" id="testTable" style="font-size:15px;width: auto; margin: 0 auto; margin-bottom: 40px; text-align: center; " >
                <tbody v-if="fields.select_FM == 'FM-all'">
                <tr>
                     <td style="width: 119px; height: 100px;"><img src="https://biotech.starautomation.net/images/logo.png" style="width:75px;height:75px;"></td>
                    <th colspan="4" style="font-size: 20px;">Detailed Report of  <span style="color:#ba4848">All FMs</span> Readings between  <span style="color:#ba4848">{{ fields.startdate | formatDate }}</span> And  <span style="color:#ba4848">{{ fields.enddate | formatDate }}</span></th>
                </tr>
                <tr>
                    <td><b>Name</b></td>
                    <td><b>Value Before Reset</b></td>
                    <td><b>Reset Time</b></td>
                    <td><b>Reset By</b></td>
                </tr>
                <tr v-for="fields in FM" v-bind:key="fields.id" >
                    <td>{{fields.fm_name}}</td>
                    <td>{{fields.value_at_reset}}</td>
                    <td>{{fields.reset_time | formatDate}}</td>
                    <td>{{fields.reset_by}}</td>
                </tr>
                </tbody>
                <tbody v-if="fields.select_FM == 'FM-1'">
                <tr>
                     <td style="width: 119px; height: 100px;"><img src="https://biotech.starautomation.net/images/logo.png" style="width:75px;height:75px;"></td>
                    <th colspan="4" style="font-size: 20px;">Detailed Report of  <span style="color:#ba4848">FM-1</span> Readings between  <span style="color:#ba4848">{{ fields.startdate | formatDate }}</span> And  <span style="color:#ba4848">{{ fields.enddate | formatDate }}</span></th>
                </tr>
                <tr>
                    <td><b>Name</b></td>
                    <td><b>Value Before Reset</b></td>
                    <td><b>Reset Time</b></td>
                    <td><b>Reset By</b></td>
                </tr>
                <tr v-for="fields in FM" v-bind:key="fields.id" >
                    <td>{{fields.fm_name}}</td>
                    <td>{{fields.value_at_reset}}</td>
                    <td>{{fields.reset_time | formatDate}}</td>
                    <td>{{fields.reset_by}}</td>
                </tr>
                </tbody>
                <tbody v-if="fields.select_FM == 'FM-2'">
                <tr>
                     <td style="width: 119px; height: 100px;"><img src="https://biotech.starautomation.net/images/logo.png" style="width:75px;height:75px;"></td>
                    <th colspan="4" style="font-size: 20px;">Detailed Report of  <span style="color:#ba4848">FM-2</span> Readings between  <span style="color:#ba4848">{{ fields.startdate | formatDate }}</span> And  <span style="color:#ba4848">{{ fields.enddate | formatDate }}</span></th>
                </tr>
                <tr>
                    <td><b>Name</b></td>
                    <td><b>Value Before Reset</b></td>
                    <td><b>Reset Time</b></td>
                    <td><b>Reset By</b></td>
                </tr>
                <tr v-for="fields in FM" v-bind:key="fields.id">
                    <td>{{fields.fm_name}}</td>
                    <td>{{fields.value_at_reset}}</td>
                    <td>{{fields.reset_time}}</td>
                    <td>{{fields.reset_by}}</td>
                </tr>
                </tbody>
                <tbody v-if="fields.select_FM == 'FM-3'">
                <tr>
                     <td style="width: 119px; height: 100px;"><img src="https://biotech.starautomation.net/images/logo.png" style="width:75px;height:75px;"></td>
                    <th colspan="4" style="font-size: 20px;">Detailed Report of  <span style="color:#ba4848">FM-3</span> Readings between  <span style="color:#ba4848">{{ fields.startdate | formatDate }}</span> And  <span style="color:#ba4848">{{ fields.enddate | formatDate }}</span></th>
                </tr>
                <tr>
                    <td><b>Name</b></td>
                    <td><b>Value Before Reset</b></td>
                    <td><b>Reset Time</b></td>
                    <td><b>Reset By</b></td>
                </tr>
                <tr v-for="fields in FM" v-bind:key="fields.id">
                    <td>{{fields.fm_name}}</td>
                    <td>{{fields.value_at_reset}}</td>
                    <td>{{fields.reset_time}}</td>
                    <td>{{fields.reset_by}}</td>
                </tr>
                </tbody>
                <tbody v-if="fields.select_FM == 'FM-4'">
                <tr>
                     <td style="width: 119px; height: 100px;"><img src="https://biotech.starautomation.net/images/logo.png" style="width:75px;height:75px;"></td>
                    <th colspan="4" style="font-size: 20px;">Detailed Report of  <span style="color:#ba4848">FM-4</span> Readings between  <span style="color:#ba4848">{{ fields.startdate | formatDate }}</span> And  <span style="color:#ba4848">{{ fields.enddate | formatDate }}</span></th>
                </tr>
                <tr>
                    <td><b>Name</b></td>
                    <td><b>Value Before Reset</b></td>
                    <td><b>Reset Time</b></td>
                    <td><b>Reset By</b></td>
                </tr>
                <tr v-for="fields in FM" v-bind:key="fields.id">
                    <td>{{fields.fm_name}}</td>
                    <td>{{fields.value_at_reset}}</td>
                    <td>{{fields.reset_time}}</td>
                    <td>{{fields.reset_by}}</td>
                </tr>
                </tbody>
                <tbody v-if="fields.select_FM == 'FM-5'">
                <tr>
                     <td style="width: 119px; height: 100px;"><img src="https://biotech.starautomation.net/images/logo.png" style="width:75px;height:75px;"></td>
                    <th colspan="4" style="font-size: 20px;">Detailed Report of  <span style="color:#ba4848">FM-5</span> Readings between  <span style="color:#ba4848">{{ fields.startdate | formatDate }}</span> And  <span style="color:#ba4848">{{ fields.enddate | formatDate }}</span></th>
                </tr>
                <tr>
                    <td><b>Name</b></td>
                    <td><b>Value Before Reset</b></td>
                    <td><b>Reset Time</b></td>
                    <td><b>Reset By</b></td>
                </tr>
                <tr v-for="fields in FM" v-bind:key="fields.id">
                    <td>{{fields.fm_name}}</td>
                    <td>{{fields.value_at_reset}}</td>
                    <td>{{fields.reset_time}}</td>
                    <td>{{fields.reset_by}}</td>
                </tr>
                </tbody>
                <tbody v-if="fields.select_FM == 'FM-6'">
                <tr>
                     <td style="width: 119px; height: 100px;"><img src="https://biotech.starautomation.net/images/logo.png" style="width:75px;height:75px;"></td>
                    <th colspan="4" style="font-size: 20px;">Detailed Report of  <span style="color:#ba4848">FM-6</span> Readings between  <span style="color:#ba4848">{{ fields.startdate | formatDate }}</span> And  <span style="color:#ba4848">{{ fields.enddate | formatDate }}</span></th>
                </tr>
                <tr>
                    <td><b>Name</b></td>
                    <td><b>Value Before Reset</b></td>
                    <td><b>Reset Time</b></td>
                    <td><b>Reset By</b></td>
                </tr>
                <tr v-for="fields in FM" v-bind:key="fields.id">
                    <td>{{fields.fm_name}}</td>
                    <td>{{fields.value_at_reset}}</td>
                    <td>{{fields.reset_time}}</td>
                    <td>{{fields.reset_by}}</td>
                </tr>
                </tbody>
                <tbody v-if="fields.select_FM == 'FM-7'">
                <tr>
                     <td style="width: 119px; height: 100px;"><img src="https://biotech.starautomation.net/images/logo.png" style="width:75px;height:75px;"></td>
                    <th colspan="4" style="font-size: 20px;">Detailed Report of  <span style="color:#ba4848">FM-7</span> Readings between  <span style="color:#ba4848">{{ fields.startdate | formatDate }}</span> And  <span style="color:#ba4848">{{ fields.enddate | formatDate }}</span></th>
                </tr>
                <tr>
                    <td><b>Name</b></td>
                    <td><b>Value Before Reset</b></td>
                    <td><b>Reset Time</b></td>
                    <td><b>Reset By</b></td>
                </tr>
                <tr v-for="fields in FM" v-bind:key="fields.id">
                    <td>{{fields.fm_name}}</td>
                    <td>{{fields.value_at_reset}}</td>
                    <td>{{fields.reset_time}}</td>
                    <td>{{fields.reset_by}}</td>
                </tr>
                </tbody>
                <tbody v-if="fields.select_FM == 'FM-8'">
                <tr>
                     <td style="width: 119px; height: 100px;"><img src="https://biotech.starautomation.net/images/logo.png" style="width:75px;height:75px;"></td>
                    <th colspan="4" style="font-size: 20px;">Detailed Report of  <span style="color:#ba4848">FM-8</span> Readings between  <span style="color:#ba4848">{{ fields.startdate | formatDate }}</span> And  <span style="color:#ba4848">{{ fields.enddate | formatDate }}</span></th>
                </tr>
                <tr>
                    <td><b>Name</b></td>
                    <td><b>Value Before Reset</b></td>
                    <td><b>Reset Time</b></td>
                    <td><b>Reset By</b></td>
                </tr>
                <tr v-for="fields in FM" v-bind:key="fields.id">
                    <td>{{fields.fm_name}}</td>
                    <td>{{fields.value_at_reset}}</td>
                    <td>{{fields.reset_time}}</td>
                    <td>{{fields.reset_by}}</td>
                </tr>
                </tbody>
                <tbody v-if="fields.select_FM == 'FM-9'">
                <tr>
                     <td style="width: 119px; height: 100px;"><img src="https://biotech.starautomation.net/images/logo.png" style="width:75px;height:75px;"></td>
                    <th colspan="4" style="font-size: 20px;">Detailed Report of  <span style="color:#ba4848">FM-9</span> Readings between  <span style="color:#ba4848">{{ fields.startdate | formatDate }}</span> And  <span style="color:#ba4848">{{ fields.enddate | formatDate }}</span></th>
                </tr>
                <tr>
                    <td><b>Name</b></td>
                    <td><b>Value Before Reset</b></td>
                    <td><b>Reset Time</b></td>
                    <td><b>Reset By</b></td>
                </tr>
                <tr v-for="fields in FM" v-bind:key="fields.id">
                    <td>{{fields.fm_name}}</td>
                    <td>{{fields.value_at_reset}}</td>
                    <td>{{fields.reset_time}}</td>
                    <td>{{fields.reset_by}}</td>
                </tr>
                </tbody>
                <tbody v-if="fields.select_FM == 'FM-10'">
                <tr>
                     <td style="width: 119px; height: 100px;"><img src="https://biotech.starautomation.net/images/logo.png" style="width:75px;height:75px;"></td>
                    <th colspan="4" style="font-size: 20px;">Detailed Report of  <span style="color:#ba4848">FM-10</span> Readings between  <span style="color:#ba4848">{{ fields.startdate | formatDate }}</span> And  <span style="color:#ba4848">{{ fields.enddate | formatDate }}</span></th>
                </tr>
                <tr>
                    <td><b>Name</b></td>
                    <td><b>Value Before Reset</b></td>
                    <td><b>Reset Time</b></td>
                    <td><b>Reset By</b></td>
                </tr>
                <tr v-for="fields in FM" v-bind:key="fields.id">
                    <td>{{fields.fm_name}}</td>
                    <td>{{fields.value_at_reset}}</td>
                    <td>{{fields.reset_time}}</td>
                    <td>{{fields.reset_by}}</td>
                </tr>
                </tbody>
                <tbody v-if="fields.select_FM == 'FM-11'">
                <tr>
                     <td style="width: 119px; height: 100px;"><img src="https://biotech.starautomation.net/images/logo.png" style="width:75px;height:75px;"></td>
                    <th colspan="4" style="font-size: 20px;">Detailed Report of  <span style="color:#ba4848">FM-11</span> Readings between  <span style="color:#ba4848">{{ fields.startdate | formatDate }}</span> And  <span style="color:#ba4848">{{ fields.enddate | formatDate }}</span></th>
                </tr>
                <tr>
                    <td><b>Name</b></td>
                    <td><b>Value Before Reset</b></td>
                    <td><b>Reset Time</b></td>
                    <td><b>Reset By</b></td>
                </tr>
                <tr v-for="fields in FM" v-bind:key="fields.id">
                    <td>{{fields.fm_name}}</td>
                    <td>{{fields.value_at_reset}}</td>
                    <td>{{fields.reset_time}}</td>
                    <td>{{fields.reset_by}}</td>
                </tr>
                </tbody>
                <tbody v-if="fields.select_FM == 'FM-12'">
                <tr>
                     <td style="width: 119px; height: 100px;"><img src="https://biotech.starautomation.net/images/logo.png" style="width:75px;height:75px;"></td>
                    <th colspan="4" style="font-size: 20px;">Detailed Report of  <span style="color:#ba4848">FM-12</span> Readings between  <span style="color:#ba4848">{{ fields.startdate | formatDate }}</span> And  <span style="color:#ba4848">{{ fields.enddate | formatDate }}</span></th>
                </tr>
                <tr>
                    <td><b>Name</b></td>
                    <td><b>Value Before Reset</b></td>
                    <td><b>Reset Time</b></td>
                    <td><b>Reset By</b></td>
                </tr>
                <tr v-for="fields in FM" v-bind:key="fields.id">
                    <td>{{fields.fm_name}}</td>
                    <td>{{fields.value_at_reset}}</td>
                    <td>{{fields.reset_time}}</td>
                    <td>{{fields.reset_by}}</td>
                </tr>
                </tbody>
                <tbody v-if="fields.select_FM == 'FM-13'">
                <tr>
                     <td style="width: 119px; height: 100px;"><img src="https://biotech.starautomation.net/images/logo.png" style="width:75px;height:75px;"></td>
                    <th colspan="4" style="font-size: 20px;">Detailed Report of  <span style="color:#ba4848">FM-13</span> Readings between  <span style="color:#ba4848">{{ fields.startdate | formatDate }}</span> And  <span style="color:#ba4848">{{ fields.enddate | formatDate }}</span></th>
                </tr>
                <tr>
                    <td><b>Name</b></td>
                    <td><b>Value Before Reset</b></td>
                    <td><b>Reset Time</b></td>
                    <td><b>Reset By</b></td>
                </tr>
                <tr v-for="fields in FM" v-bind:key="fields.id">
                    <td>{{fields.fm_name}}</td>
                    <td>{{fields.value_at_reset}}</td>
                    <td>{{fields.reset_time}}</td>
                    <td>{{fields.reset_by}}</td>
                </tr>
                </tbody>
                <tbody v-if="fields.select_FM == 'FM-14'">
                <tr>
                     <td style="width: 119px; height: 100px;"><img src="https://biotech.starautomation.net/images/logo.png" style="width:75px;height:75px;"></td>
                    <th colspan="4" style="font-size: 20px;">Detailed Report of  <span style="color:#ba4848">FM-14</span> Readings between  <span style="color:#ba4848">{{ fields.startdate | formatDate }}</span> And  <span style="color:#ba4848">{{ fields.enddate | formatDate }}</span></th>
                </tr>
                <tr>
                    <td><b>Name</b></td>
                    <td><b>Value Before Reset</b></td>
                    <td><b>Reset Time</b></td>
                    <td><b>Reset By</b></td>
                </tr>
                <tr v-for="fields in FM" v-bind:key="fields.id">
                    <td>{{fields.fm_name}}</td>
                    <td>{{fields.value_at_reset}}</td>
                    <td>{{fields.reset_time}}</td>
                    <td>{{fields.reset_by}}</td>
                </tr>
                </tbody>
                <tbody v-if="fields.select_FM == 'FM-15'">
                <tr>
                     <td style="width: 119px; height: 100px;"><img src="https://biotech.starautomation.net/images/logo.png" style="width:75px;height:75px;"></td>
                    <th colspan="4" style="font-size: 20px;">Detailed Report of  <span style="color:#ba4848">FM-15</span> Readings between  <span style="color:#ba4848">{{ fields.startdate | formatDate }}</span> And  <span style="color:#ba4848">{{ fields.enddate | formatDate }}</span></th>
                </tr>
                <tr>
                    <td><b>Name</b></td>
                    <td><b>Value Before Reset</b></td>
                    <td><b>Reset Time</b></td>
                    <td><b>Reset By</b></td>
                </tr>
                <tr v-for="fields in FM" v-bind:key="fields.id">
                    <td>{{fields.fm_name}}</td>
                    <td>{{fields.value_at_reset}}</td>
                    <td>{{fields.reset_time}}</td>
                    <td>{{fields.reset_by}}</td>
                </tr>
                </tbody>
                <tbody v-if="fields.select_FM == 'FM-16'">
                <tr>
                     <td style="width: 119px; height: 100px;"><img src="https://biotech.starautomation.net/images/logo.png" style="width:75px;height:75px;"></td>
                    <th colspan="4" style="font-size: 20px;">Detailed Report of  <span style="color:#ba4848">FM-16</span> Readings between  <span style="color:#ba4848">{{ fields.startdate | formatDate }}</span> And  <span style="color:#ba4848">{{ fields.enddate | formatDate }}</span></th>
                </tr>
                <tr>
                    <td><b>Name</b></td>
                    <td><b>Value Before Reset</b></td>
                    <td><b>Reset Time</b></td>
                    <td><b>Reset By</b></td>
                </tr>
                <tr v-for="fields in FM" v-bind:key="fields.id">
                    <td>{{fields.fm_name}}</td>
                    <td>{{fields.value_at_reset}}</td>
                    <td>{{fields.reset_time}}</td>
                    <td>{{fields.reset_by}}</td>
                </tr>
                </tbody>
                <tbody v-if="fields.select_FM == 'FM-17'">
                <tr>
                     <td style="width: 119px; height: 100px;"><img src="https://biotech.starautomation.net/images/logo.png" style="width:75px;height:75px;"></td>
                    <th colspan="4" style="font-size: 20px;">Detailed Report of  <span style="color:#ba4848">FM-17</span> Readings between  <span style="color:#ba4848">{{ fields.startdate | formatDate }}</span> And  <span style="color:#ba4848">{{ fields.enddate | formatDate }}</span></th>
                </tr>
                <tr>
                    <td><b>Name</b></td>
                    <td><b>Value Before Reset</b></td>
                    <td><b>Reset Time</b></td>
                    <td><b>Reset By</b></td>
                </tr>
                <tr v-for="fields in FM" v-bind:key="fields.id">
                    <td>{{fields.fm_name}}</td>
                    <td>{{fields.value_at_reset}}</td>
                    <td>{{fields.reset_time}}</td>
                    <td>{{fields.reset_by}}</td>
                </tr>
                </tbody>
                <tbody v-if="fields.select_FM == 'FM-18'">
                <tr>
                     <td style="width: 119px; height: 100px;"><img src="https://biotech.starautomation.net/images/logo.png" style="width:75px;height:75px;"></td>
                    <th colspan="4" style="font-size: 20px;">Detailed Report of  <span style="color:#ba4848">FM-18</span> Readings between  <span style="color:#ba4848">{{ fields.startdate | formatDate }}</span> And  <span style="color:#ba4848">{{ fields.enddate | formatDate }}</span></th>
                </tr>
                <tr>
                    <td><b>Name</b></td>
                    <td><b>Value Before Reset</b></td>
                    <td><b>Reset Time</b></td>
                    <td><b>Reset By</b></td>
                </tr>
                <tr v-for="fields in FM" v-bind:key="fields.id">
                    <td>{{fields.fm_name}}</td>
                    <td>{{fields.value_at_reset}}</td>
                    <td>{{fields.reset_time}}</td>
                    <td>{{fields.reset_by}}</td>
                </tr>
                </tbody>
                <tbody v-if="fields.select_FM == 'FM-19'">
                <tr>
                     <td style="width: 119px; height: 100px;"><img src="https://biotech.starautomation.net/images/logo.png" style="width:75px;height:75px;"></td>
                    <th colspan="4" style="font-size: 20px;">Detailed Report of  <span style="color:#ba4848">FM-19</span> Readings between  <span style="color:#ba4848">{{ fields.startdate | formatDate }}</span> And  <span style="color:#ba4848">{{ fields.enddate | formatDate }}</span></th>
                </tr>
                <tr>
                    <td><b>Name</b></td>
                    <td><b>Value Before Reset</b></td>
                    <td><b>Reset Time</b></td>
                    <td><b>Reset By</b></td>
                </tr>
                <tr v-for="fields in FM" v-bind:key="fields.id">
                    <td>{{fields.fm_name}}</td>
                    <td>{{fields.value_at_reset}}</td>
                    <td>{{fields.reset_time}}</td>
                    <td>{{fields.reset_by}}</td>
                </tr>
                </tbody>
                <tbody v-if="fields.select_FM == 'FM-20'">
                <tr>
                     <td style="width: 119px; height: 100px;"><img src="https://biotech.starautomation.net/images/logo.png" style="width:75px;height:75px;"></td>
                    <th colspan="4" style="font-size: 20px;">Detailed Report of  <span style="color:#ba4848">FM-20</span> Readings between  <span style="color:#ba4848">{{ fields.startdate | formatDate }}</span> And  <span style="color:#ba4848">{{ fields.enddate | formatDate }}</span></th>
                </tr>
                <tr>
                    <td><b>Name</b></td>
                    <td><b>Value Before Reset</b></td>
                    <td><b>Reset Time</b></td>
                    <td><b>Reset By</b></td>
                </tr>
                <tr v-for="fields in FM" v-bind:key="fields.id">
                    <td>{{fields.fm_name}}</td>
                    <td>{{fields.value_at_reset}}</td>
                    <td>{{fields.reset_time}}</td>
                    <td>{{fields.reset_by}}</td>
                </tr>
                </tbody>
                <tbody v-if="fields.select_FM == 'FM-21'">
                <tr>
                     <td style="width: 119px; height: 100px;"><img src="https://biotech.starautomation.net/images/logo.png" style="width:75px;height:75px;"></td>
                    <th colspan="4" style="font-size: 20px;">Detailed Report of  <span style="color:#ba4848">FM-21</span> Readings between  <span style="color:#ba4848">{{ fields.startdate | formatDate }}</span> And  <span style="color:#ba4848">{{ fields.enddate | formatDate }}</span></th>
                </tr>
                <tr>
                    <td><b>Name</b></td>
                    <td><b>Value Before Reset</b></td>
                    <td><b>Reset Time</b></td>
                    <td><b>Reset By</b></td>
                </tr>
                <tr v-for="fields in FM" v-bind:key="fields.id">
                    <td>{{fields.fm_name}}</td>
                    <td>{{fields.value_at_reset}}</td>
                    <td>{{fields.reset_time}}</td>
                    <td>{{fields.reset_by}}</td>
                </tr>
                </tbody>
                <tbody v-if="fields.select_FM == 'FM-22'">
                <tr>
                     <td style="width: 119px; height: 100px;"><img src="https://biotech.starautomation.net/images/logo.png" style="width:75px;height:75px;"></td>
                    <th colspan="4" style="font-size: 20px;">Detailed Report of  <span style="color:#ba4848">FM-22</span> Readings between  <span style="color:#ba4848">{{ fields.startdate | formatDate }}</span> And  <span style="color:#ba4848">{{ fields.enddate | formatDate }}</span></th>
                </tr>
                <tr>
                    <td><b>Name</b></td>
                    <td><b>Value Before Reset</b></td>
                    <td><b>Reset Time</b></td>
                    <td><b>Reset By</b></td>
                </tr>
                <tr v-for="fields in FM" v-bind:key="fields.id">
                    <td>{{fields.fm_name}}</td>
                    <td>{{fields.value_at_reset}}</td>
                    <td>{{fields.reset_time}}</td>
                    <td>{{fields.reset_by}}</td>
                </tr>
                </tbody>
                <tbody v-if="fields.select_FM == 'FM-23'">
                <tr>
                     <td style="width: 119px; height: 100px;"><img src="https://biotech.starautomation.net/images/logo.png" style="width:75px;height:75px;"></td>
                    <th colspan="4" style="font-size: 20px;">Detailed Report of  <span style="color:#ba4848">FM-23</span> Readings between  <span style="color:#ba4848">{{ fields.startdate | formatDate }}</span> And  <span style="color:#ba4848">{{ fields.enddate | formatDate }}</span></th>
                </tr>
                <tr>
                    <td><b>Name</b></td>
                    <td><b>Value Before Reset</b></td>
                    <td><b>Reset Time</b></td>
                    <td><b>Reset By</b></td>
                </tr>
                <tr v-for="fields in FM" v-bind:key="fields.id">
                    <td>{{fields.fm_name}}</td>
                    <td>{{fields.value_at_reset}}</td>
                    <td>{{fields.reset_time}}</td>
                    <td>{{fields.reset_by}}</td>
                </tr>
                </tbody>
                <tbody v-if="fields.select_FM == 'FM-24'">
                <tr>
                     <td style="width: 119px; height: 100px;"><img src="https://biotech.starautomation.net/images/logo.png" style="width:75px;height:75px;"></td>
                    <th colspan="4" style="font-size: 20px;">Detailed Report of  <span style="color:#ba4848">FM-24</span> Readings between  <span style="color:#ba4848">{{ fields.startdate | formatDate }}</span> And  <span style="color:#ba4848">{{ fields.enddate | formatDate }}</span></th>
                </tr>
                <tr>
                    <td><b>Name</b></td>
                    <td><b>Value Before Reset</b></td>
                    <td><b>Reset Time</b></td>
                    <td><b>Reset By</b></td>
                </tr>
                <tr v-for="fields in FM" v-bind:key="fields.id">
                    <td>{{fields.fm_name}}</td>
                    <td>{{fields.value_at_reset}}</td>
                    <td>{{fields.reset_time}}</td>
                    <td>{{fields.reset_by}}</td>
                </tr>
                </tbody>
                <tbody v-if="fields.select_FM == 'FM-25'">
                <tr>
                     <td style="width: 119px; height: 100px;"><img src="https://biotech.starautomation.net/images/logo.png" style="width:75px;height:75px;"></td>
                    <th colspan="4" style="font-size: 20px;">Detailed Report of  <span style="color:#ba4848">FM-25</span> Readings between  <span style="color:#ba4848">{{ fields.startdate | formatDate }}</span> And  <span style="color:#ba4848">{{ fields.enddate | formatDate }}</span></th>
                </tr>
                <tr>
                    <td><b>Name</b></td>
                    <td><b>Value Before Reset</b></td>
                    <td><b>Reset Time</b></td>
                    <td><b>Reset By</b></td>
                </tr>
                <tr v-for="fields in FM" v-bind:key="fields.id">
                    <td>{{fields.fm_name}}</td>
                    <td>{{fields.value_at_reset}}</td>
                    <td>{{fields.reset_time}}</td>
                    <td>{{fields.reset_by}}</td>
                </tr>
                </tbody>
                <tbody v-if="fields.select_FM == 'FM-26'">
                <tr>
                     <td style="width: 119px; height: 100px;"><img src="https://biotech.starautomation.net/images/logo.png" style="width:75px;height:75px;"></td>
                    <th colspan="4" style="font-size: 20px;">Detailed Report of  <span style="color:#ba4848">FM-26</span> Readings between  <span style="color:#ba4848">{{ fields.startdate | formatDate }}</span> And  <span style="color:#ba4848">{{ fields.enddate | formatDate }}</span></th>
                </tr>
                <tr>
                    <td><b>Name</b></td>
                    <td><b>Value Before Reset</b></td>
                    <td><b>Reset Time</b></td>
                    <td><b>Reset By</b></td>
                </tr>
                <tr v-for="fields in FM" v-bind:key="fields.id">
                    <td>{{fields.fm_name}}</td>
                    <td>{{fields.value_at_reset}}</td>
                    <td>{{fields.reset_time}}</td>
                    <td>{{fields.reset_by}}</td>
                </tr>
                </tbody>
                <tbody v-if="fields.select_FM == 'FM-27'">
                <tr>
                     <td style="width: 119px; height: 100px;"><img src="https://biotech.starautomation.net/images/logo.png" style="width:75px;height:75px;"></td>
                    <th colspan="4" style="font-size: 20px;">Detailed Report of  <span style="color:#ba4848">FM-27</span> Readings between  <span style="color:#ba4848">{{ fields.startdate | formatDate }}</span> And  <span style="color:#ba4848">{{ fields.enddate | formatDate }}</span></th>
                </tr>
                <tr>
                    <td><b>Name</b></td>
                    <td><b>Value Before Reset</b></td>
                    <td><b>Reset Time</b></td>
                    <td><b>Reset By</b></td>
                </tr>
                <tr v-for="fields in FM" v-bind:key="fields.id">
                    <td>{{fields.fm_name}}</td>
                    <td>{{fields.value_at_reset}}</td>
                    <td>{{fields.reset_time}}</td>
                    <td>{{fields.reset_by}}</td>
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
            time:'',
            fields:{
                select_FM:'FM-1',
                setInterval:'1',
                startdate:'',
                enddate:'',
            },
            FM: [],
        }
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
        ExportExcel(type, fn, dl) {
            var elt = this.$refs.exportable_table;
            var wb = XLSX.utils.table_to_book(elt, {sheet:"Sheet JS"});
            return dl ?
                XLSX.write(wb, {bookType:type, bookSST:true, type: 'base64'}) :
                XLSX.writeFile(wb, fn || (('BioTech' + '.'|| 'SheetJSTableExport.') + (type || 'xlsx')));
        },
        print(){
            $(".container-2").printThis({
                // importCSS: true,
                importStyle: true,
                loadCSS: "path/to/my.css",
                header: "<h1 style='text-align: center'>Bio Tech Energy (PVT) LTD </h1>",
                base: "",
                canvas: true,              // copy canvas content
            });
        },
        submit() {
            axios.post('api/fmtotalpdfreport', this.fields , {headers: {'Authorization': 'Bearer '+this.currentUser.token}})
                .then((response) => {
                    this.FM = response.data.db_data;
                })
                .catch(err =>{
                    console.log(err);
                })
        },
    },
    // mounted() {
    //     if (localStorage.getItem('reloaded')) {
    //         // The page was just reloaded. Clear the value from local storage
    //         // so that it will reload the next time this page is visited.
    //         localStorage.removeItem('reloaded');
    //     } else {
    //         // Set a flag so that we know not to reload the page twice.
    //         localStorage.setItem('reloaded', '1');
    //         location.reload();
    //     }
    // },
    computed: { currentUser() { return this.$store.getters.currentUser} }
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

