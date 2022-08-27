<template>
    <div className="col-md-12" style="padding: 0px;">

        <h1 style="text-align: center;padding-top: 30px;">Multi Graph</h1>
        <div class="table-container col-md-10 m-auto">
            <form name="chartForm" @submit.prevent="submit">
                <table class="table table-style-me" style="display:inline-table;width:19%; text-align: center; color: white;">
                    <tr style="border: none">
                        <th colspan="3">
                            <h6>Pre Esterification</h6></th>
                    </tr>
                    <tr style="background-color:#4a4a4a;">
                        <th>Name</th>
                        <th>level</th>
                        <th>Temp</th>
                        <th>Pr</th>
                    </tr>
                    <tr>
                        <td> Settling A </td>
                        <td>
                            <input value="rdl_13" v-model="val_1" type="checkbox" :disabled="disable" v-on:click="CheckRange"> </td>
                        <td>
                            <input value="rtd_9" v-model="val_2" type="checkbox" :disabled="disable" v-on:click="CheckRange"> </td>
                        <td>.</td>
                        <tr>
                            <td>Settling B</td>
                            <td>
                                <input value="rdl_14" v-model="val_1" type="checkbox" :disabled="disable" v-on:click="CheckRange"> </td>
                            <td>
                                <input value="rtd_10" v-model="val_2" type="checkbox" :disabled="disable" v-on:click="CheckRange"> </td>
                            <td>.</td>
                        </tr>
                        <tr>
                            <td> Settling C </td>
                            <td>
                                <input value="rdl_15" v-model="val_1" type="checkbox" :disabled="disable" v-on:click="CheckRange"> </td>
                            <td>
                                <input value="rtd_11" v-model="val_2" type="checkbox" :disabled="disable" v-on:click="CheckRange"> </td>
                            <td>.</td>
                        </tr>
                        <tr>
                            <td> E201 </td>
                            <td>
                                <input value="rdl_1" type="hidden"> </td>
                            <td>
                                <input value="rtd_4" v-model="val_2" type="checkbox" :disabled="disable" v-on:click="CheckRange"> </td>
                            <td>.</td>
                        </tr>
                        <tr>
                            <td> E101 </td>
                            <td>
                                <input value="rdl_1" type="hidden"> </td>
                            <td>
                                <input value="rtd_1" v-model="val_2" type="checkbox" :disabled="disable" v-on:click="CheckRange"> </td>
                            <td>.</td>
                        </tr>
                        <tr>
                            <td> D101A </td>
                            <td>
                                <input value="rdl_1" v-model="val_1" type="checkbox" :disabled="disable" v-on:click="CheckRange"> </td>
                            <td>
                                <input value="rtd_2" v-model="val_2" type="checkbox" :disabled="disable" v-on:click="CheckRange"> </td>
                            <td>.</td>
                        </tr>
                        <tr>
                            <td> D101B </td>
                            <td>
                                <input value="rdl_2" v-model="val_1" type="checkbox" :disabled="disable" v-on:click="CheckRange"> </td>
                            <td>
                                <input value="rtd_3" v-model="val_2" type="checkbox" :disabled="disable" v-on:click="CheckRange"> </td>
                            <td>.</td>
                        </tr>
                        <tr>
                            <td> PPRA </td>
                            <td>
                                <input value="rdl_23" v-model="val_1" type="checkbox" :disabled="disable" v-on:click="CheckRange"> </td>
                            <td>
                                <input value="rtd_32" v-model="val_2" type="checkbox" :disabled="disable" v-on:click="CheckRange"> </td>
                            <td>.</td>
                        </tr>
                        <tr>
                            <td> PPRB </td>
                            <td>
                                <input value="rdl_24" v-model="val_1" type="checkbox" :disabled="disable" v-on:click="CheckRange"> </td>
                            <td>
                                <input value="rtd_33" v-model="val_2" type="checkbox" :disabled="disable" v-on:click="CheckRange"> </td>
                            <td>.</td>
                        </tr>
                        <tr>
                            <td> GST </td>
                            <td>
                                <input value="rdl_18" v-model="val_1" type="checkbox" :disabled="disable" v-on:click="CheckRange"> </td>
                            <td>
                                <input value="rtd_34" v-model="val_2" type="checkbox" :disabled="disable" v-on:click="CheckRange"> </td>
                            <td>.</td>
                        </tr>
                        <tr>
                            <td> GLV </td>
                            <td>
                                <input value="rdl_12" v-model="val_1" type="checkbox" :disabled="disable" v-on:click="CheckRange"> </td>
                            <td>
                                <input value="rtd_5" v-model="val_2" type="hidden"> </td>
                            <td><input value="pt_1" v-model="val_6" type="checkbox" :disabled="disable" v-on:click="CheckRange"></td>
                        </tr>
                        <tr>
                            <td> GLV Evap </td>
                            <td>
                                <input value="rdl_1" type="hidden"> </td>
                            <td>
                                <input value="rtd_8" v-model="val_2" type="checkbox" :disabled="disable" v-on:click="CheckRange"> </td>
                            <td>.</td>
                        </tr>
                        <tr>
                            <td> GLV T </td>
                            <td>
                                <input value="rdl_1" type="hidden"> </td>
                            <td>
                                <input value="rtd_5" v-model="val_2" type="checkbox" :disabled="disable" v-on:click="CheckRange"> </td>
                            <td>.</td>
                        </tr>
                        <tr>
                            <td> GLV M </td>
                            <td>
                                <input value="rdl_1" type="hidden"> </td>
                            <td>
                                <input value="rtd_6" v-model="val_2" type="checkbox" :disabled="disable" v-on:click="CheckRange"> </td>
                            <td>.</td>
                        </tr>
                        <tr>
                            <td> GLV B </td>
                            <td>
                                <input value="rdl_1" type="hidden"> </td>
                            <td>
                                <input value="rtd_7" v-model="val_2" type="checkbox" :disabled="disable" v-on:click="CheckRange"> </td>
                            <td>.</td>
                        </tr>
                        <tr>
                            <td> D405A </td>
                            <td>
                                <input value="rdl_3" v-model="val_1" type="checkbox" :disabled="disable" v-on:click="CheckRange"> </td>
                            <td>
                                <input value="rtd_1" type="hidden"> </td>
                            <td>.</td>
                        </tr>
                        <tr>
                            <td> D405B </td>
                            <td>
                                <input value="rdl_4" v-model="val_1" type="checkbox" :disabled="disable" v-on:click="CheckRange"> </td>
                            <td>
                                <input value="rdl_1" type="hidden"> </td>
                            <td>.</td>
                        </tr>
                        <tr>
                            <td> D405C </td>
                            <td>
                                <input value="rdl_5" v-model="val_1" type="checkbox" :disabled="disable" v-on:click="CheckRange"> </td>
                            <td>
                                <input value="rdl_1" type="hidden"> </td>
                            <td>.</td>
                        </tr>
                        <tr>
                            <td> H2SO4 </td>
                            <td>
                                <input value="rdl_25" v-model="val_1" type="checkbox" :disabled="disable" v-on:click="CheckRange"> </td>
                            <td style="padding:0px !important; vertical-align:middle !important;"> Mass
                                <input value="rdl25_mass" v-model="val_5" type="checkbox" :disabled="disable" v-on:click="CheckRange"> </td>
                            <td>.</td>
                        </tr>
                        <tr>
                            <td>SP1</td>
                            <td>
                                <input value="rdl_20" v-model="val_1" type="checkbox" :disabled="disable" v-on:click="CheckRange"> </td>
                            <td></td>
                            <td>.</td>
                        </tr>
                        <tr>
                            <td> SP2 </td>
                            <td>
                                <input value="rdl_21" v-model="val_1" type="checkbox" :disabled="disable" v-on:click="CheckRange"> </td>
                            <td></td>
                            <td>.</td>
                        </tr>
                         <tr>
                            <td> Pit </td>
                            <td>
                                <input value="pit_level" v-model="val_1" type="checkbox" :disabled="disable" v-on:click="CheckRange"> </td>
                            <td></td>
                            <td>.</td>
                        </tr>
                        <tr style="background-color:#4a4a4a;">
                            <th>Name</th>
                            <th>Flow</th>
                            <th>Total</th>
                            <th>Pr</th>
                        </tr>
                        <tr>
                            <td> FM 18 (Mathanol into GST 1 and 2) </td>
                            <td>
                                <input value="fm_18" v-model="val_3" type="checkbox" :disabled="disable" v-on:click="CheckRange"> </td>
                            <td>
                                <input value="ft_18" v-model="val_4" type="checkbox" :disabled="disable" v-on:click="CheckRange"> </td>
                            <td>.</td>
                        </tr>
                        <tr>
                            <td> FM 19 (Methanol into PPRA and B) </td>
                            <td>
                                <input value="fm_19" v-model="val_3" type="checkbox" :disabled="disable" v-on:click="CheckRange"> </td>
                            <td>
                                <input value="ft_19" v-model="val_4" type="checkbox" :disabled="disable" v-on:click="CheckRange"> </td>
                            <td>.</td>
                        </tr>
                        <tr>
                            <td> FM 20 (Mathanol into GLV) </td>
                            <td>
                                <input value="fm_20" v-model="val_3" type="checkbox" :disabled="disable" v-on:click="CheckRange"> </td>
                            <td>
                                <input value="ft_20" v-model="val_4" type="checkbox" :disabled="disable" v-on:click="CheckRange"> </td>
                            <td>.</td>
                        </tr>
                        <tr>
                            <td> FM 23 (Raw Material Offloading) </td>
                            <td>
                                <input value="fm_23" v-model="val_3" type="checkbox" :disabled="disable" v-on:click="CheckRange"> </td>
                            <td>
                                <input value="ft_23" v-model="val_4" type="checkbox" :disabled="disable" v-on:click="CheckRange"> </td>
                            <td>.</td>
                        </tr>
                        <tr>
                            <td> FM 24 (Raw Metarial to Settling Tank) </td>
                            <td>
                                <input value="fm_24" v-model="val_3" type="checkbox" :disabled="disable" v-on:click="CheckRange"> </td>
                            <td>
                                <input value="ft_24" v-model="val_4" type="checkbox" :disabled="disable" v-on:click="CheckRange"> </td>
                            <td>.</td>
                        </tr>
                        <tr>
                            <td> FM25 (Settling Tank to D101 </td>
                            <td>
                                <input value="fm_25" v-model="val_3" type="checkbox" :disabled="disable" v-on:click="CheckRange"> </td>
                            <td>
                                <input value="ft_25" v-model="val_4" type="checkbox" :disabled="disable" v-on:click="CheckRange"> </td>
                            <td>.</td>
                        </tr>
                </table>
                <table class="table table-style-me" style="display:inline-table;width:19%; text-align: center; color: white;">
                    <tr style="border: none">
                        <th colspan="3">
                            <h6>Methanol</h6></th>
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
                            <input value="dpl_2" v-model="val_1" type="checkbox" :disabled="disable" v-on:click="CheckRange">
                        </td>
                        <td>
                            <input value="rtd_17" v-model="val_2" type="checkbox" :disabled="disable" v-on:click="CheckRange">
                        </td>
                        <td>.</td>
                    </tr>
                    <tr>
                        <td>Green</td>
                        <td>
                            <input value="rdl_1" v-model="val_1" type="hidden">
                        </td>
                        <td>
                            <input value="rtd_19" v-model="val_2" type="checkbox" :disabled="disable" v-on:click="CheckRange">
                        </td>
                        <td>.</td>
                    </tr>
                    <tr>
                        <td>Old Green</td>
                        <td>
                            <input value="rdl_1" v-model="val_1" type="hidden">
                        </td>
                        <td>
                            <input value="rtd_20" v-model="val_2" type="checkbox" :disabled="disable" v-on:click="CheckRange">
                        </td>
                        <td>.</td>
                    </tr>
                    <tr>
                        <td>Blue</td>
                        <td>
                            <input value="rdl_1" v-model="val_1" type="hidden">
                        </td>
                        <td>
                            <input value="rtd_18" v-model="val_2" type="checkbox" :disabled="disable" v-on:click="CheckRange">
                        </td>
                        <td>.</td>
                    </tr>
                    <tr>
                        <td>E601</td>
                        <td>
                            <input value="rdl_1" v-model="val_1" type="hidden">
                        </td>
                        <td>
                            <input value="rtd_21" v-model="val_2" type="checkbox" :disabled="disable" v-on:click="CheckRange">
                        </td>
                        <td>.</td>
                    </tr>
                    <tr>
                        <td>T601</td>
                        <td>
                            <input value="dpl_3" v-model="val_1" type="checkbox" :disabled="disable" v-on:click="CheckRange">
                        </td>
                        <td>
                            <input value="rdl_1" v-model="val_1" type="hidden">
                        </td>
                        <td><input value="pt_4" v-model="val_6" type="checkbox" :disabled="disable" v-on:click="CheckRange"></td>
                    </tr>
                    <tr>
                        <td>T601 T</td>
                        <td>
                            <input value="rdl_1" v-model="val_1" type="hidden">
                        </td>
                        <td>
                            <input value="rtd_22" v-model="val_2" type="checkbox" :disabled="disable" v-on:click="CheckRange">
                        </td>
                        <td>.</td>
                    </tr>
                    <tr>
                        <td>T601 M</td>
                        <td>
                            <input value="rdl_1" type="hidden">
                        </td>
                        <td>
                            <input value="rtd_23" v-model="val_2" type="checkbox" :disabled="disable" v-on:click="CheckRange">
                        </td>
                        <td>.</td>
                    </tr>
                    <tr>
                        <td>T601 B</td>
                        <td>
                            <input value="" type="hidden">
                        </td>
                        <td>
                            <input value="rtd_24" v-model="val_2" type="checkbox" :disabled="disable" v-on:click="CheckRange">
                        </td>
                        <td>.</td>
                    </tr>
                    <tr>
                        <td>Methanol 1</td>
                        <td>
                            <input value="rdl_16" v-model="val_1" type="checkbox" :disabled="disable" v-on:click="CheckRange">
                        </td>
                        <td>
                            <input value="rdl_1" v-model="val_1" type="hidden">
                        </td>
                        <td>.</td>
                    </tr>
                    <tr>
                        <td>Methanol 2</td>
                        <td>
                            <input value="rdl_19" v-model="val_1" type="checkbox" :disabled="disable" v-on:click="CheckRange">
                        </td>
                        <td>
                            <input value="rdl_1" v-model="val_1" type="hidden">
                        </td>
                        <td>.</td>
                    </tr>
                    <tr>
                         <td>GLV Cond</td>
                         <td></td>
                         
                         <td></td>
                         <td><input value="pt_2" v-model="val_6" type="checkbox" :disabled="disable" v-on:click="CheckRange"></td>
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
                    <tr>
                        <td>.</td>
                        <td></td>
                        <td></td>
                        <td>.</td>
                    </tr>
                    <tr style="background-color:#4a4a4a;">
                        <th>Name</th>
                        <th>Flow</th>
                        <th>Total</th>
                        <th>Pr</th>
                    </tr>
                    <tr>
                        <td>FM 14 (D403 into T601)</td>
                        <td>
                            <input value="fm_14" v-model="val_3" type="checkbox" :disabled="disable" v-on:click="CheckRange">
                        </td>
                        <td>
                            <input value="ft_14" v-model="val_4" type="checkbox" :disabled="disable" v-on:click="CheckRange">
                        </td>
                        <td>.</td>
                    </tr>
                    <tr>
                        <td>FM 15 (T601 to D602)</td>
                        <td>
                            <input value="fm_15" v-model="val_3" type="checkbox" :disabled="disable" v-on:click="CheckRange">
                        </td>
                        <td>
                            <input value="ft_15" v-model="val_4" type="checkbox" :disabled="disable" v-on:click="CheckRange">
                        </td>
                        <td>.</td>
                    </tr>
                    <tr>
                        <td>FM 16 (T601 to Reflux)</td>
                        <td>
                            <input value="fm_16" v-model="val_3" type="checkbox" :disabled="disable" v-on:click="CheckRange">
                        </td>
                        <td>
                            <input value="ft_16" v-model="val_4" type="checkbox" :disabled="disable" v-on:click="CheckRange">
                        </td>
                        <td>.</td>
                    </tr>
                    <tr>
                        <td>FM 17 (T601 Drain)</td>
                        <td>
                            <input value="fm_17" v-model="val_3" type="checkbox" :disabled="disable" v-on:click="CheckRange">
                        </td>
                        <td>
                            <input value="ft_17" v-model="val_4" type="checkbox" :disabled="disable" v-on:click="CheckRange">
                        </td>
                        <td>.</td>
                    </tr>
                    <tr>
                        <td>FM 7 (D602to Methanol Storage Tank)</td>
                        <td>
                            <input value="fm_7" v-model="val_3" type="checkbox" :disabled="disable" v-on:click="CheckRange">
                        </td>
                        <td>
                            <input value="ft_7" v-model="val_4" type="checkbox" :disabled="disable" v-on:click="CheckRange">
                        </td>
                        <td>.</td>
                    </tr>
                </table>
                <table class="table table-style-me" style="display:inline-table;width:19%; text-align: center; color: white;">
                    <tr style="border: none">
                        <th colspan="3">
                            <h6>Trans Esterification</h6></th>
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
                            <input value="rdl_3" v-model="val_1" type="checkbox" :disabled="disable" v-on:click="CheckRange">
                        </td>
                        <td>
                            <input value="rdl_1" v-model="val_1" type="hidden">
                        </td>
                        <td>.</td>
                    </tr>
                    <tr>
                        <td>D405 B</td>
                        <td>
                            <input value="rdl_4" v-model="val_1" type="checkbox" :disabled="disable" v-on:click="CheckRange">
                        </td>
                        <td>
                            <input value="rdl_1" v-model="val_1" type="hidden">
                        </td>
                        <td>.</td>
                    </tr>
                    <tr>
                        <td>D405 C</td>
                        <td>
                            <input value="rdl_5" v-model="val_1" type="checkbox" :disabled="disable" v-on:click="CheckRange">
                        </td>
                        <td>
                            <input value="rdl_1" v-model="val_1" type="hidden">
                        </td>
                        <td>.</td>
                    </tr>
                    <tr>
                        <td>Trans Reac</td>
                        <td>
                            <input value="" type="hidden">
                        </td>
                        <td>
                            <input value="rtd_35" v-model="val_2" type="checkbox" :disabled="disable" v-on:click="CheckRange">
                        </td>
                        <td><input value="pt_3" v-model="val_6" type="checkbox" :disabled="disable" v-on:click="CheckRange"></td>
                    </tr>
                    <tr>
                        <td>C401 A</td>
                        <td>
                            <input value="rdl_6" v-model="val_1" type="checkbox" :disabled="disable" v-on:click="CheckRange">
                        </td>
                        <td>
                            <input value="rdl_1" v-model="val_1" type="hidden">
                        </td>
                        <td>.</td>
                    </tr>
                    <tr>
                        <td>C401 B</td>
                        <td>
                            <input value="rdl_7" v-model="val_1" type="checkbox" :disabled="disable" v-on:click="CheckRange">
                        </td>
                        <td>
                            <input value="rdl_1" v-model="val_1" type="hidden">
                        </td>
                        <td>.</td>
                    </tr>
                    <tr>
                        <td>E401</td>
                        <td>
                            <input value="dpl_2" v-model="val_1" type="checkbox" :disabled="disable" v-on:click="CheckRange">
                        </td>
                        <td>
                            <input value="rtd_17" v-model="val_2" type="checkbox" :disabled="disable" v-on:click="CheckRange">
                        </td>
                        <td>.</td>
                    </tr>
                    <tr>
                        <td>Hot Water</td>
                        <td>
                            <input value="rdl_1" v-model="val_1" type="hidden">
                        </td>
                        <td>
                            <input value="rtd_12" v-model="val_2" type="checkbox" :disabled="disable" v-on:click="CheckRange">
                        </td>
                        <td>.</td>
                    </tr>
                    <tr>
                        <td>D402 A</td>
                        <td>
                            <input value="rdl_8" v-model="val_1" type="checkbox" :disabled="disable" v-on:click="CheckRange"> </td>
                        <td>
                            <input value="rtd_13" v-model="val_2" type="checkbox" :disabled="disable" v-on:click="CheckRange">
                        </td>
                        <td>.</td>
                    </tr>
                    <tr>
                        <td>D402 B</td>
                        <td>
                            <input value="rdl_9" v-model="val_1" type="checkbox" :disabled="disable" v-on:click="CheckRange">
                        </td>
                        <td>
                            <input value="rtd_14" v-model="val_2" type="checkbox" :disabled="disable" v-on:click="CheckRange">
                        </td>
                        <td>.</td>
                    </tr>
                    <tr>
                        <td>D402 C</td>
                        <td>
                            <input value="rdl_10" v-model="val_1" type="checkbox" :disabled="disable" v-on:click="CheckRange">
                        </td>
                        <td>
                            <input value="rtd_15" v-model="val_2" type="checkbox" :disabled="disable" v-on:click="CheckRange">
                        </td>
                        <td>.</td>
                    </tr>
                    <tr>
                        <td>D402 D</td>
                        <td>
                            <input value="rdl_11" v-model="val_1" type="checkbox" :disabled="disable" v-on:click="CheckRange">
                        </td>
                        <td>
                            <input value="rtd_16" v-model="val_2" type="checkbox" :disabled="disable" v-on:click="CheckRange"> 
                        </td>
                        <td>.</td>
                    </tr>
                    <tr>
                        <td>SP 1</td>
                        <td>
                            <input value="rdl_20" v-model="val_1" type="checkbox" :disabled="disable" v-on:click="CheckRange">
                        </td>
                        <td>
                            <input value="rdl_1" v-model="val_1" type="hidden">
                        </td>
                        <td>.</td>
                    </tr>
                    <tr>
                        <td>SP 2</td>
                        <td>
                            <input value="rdl_21" v-model="val_1" type="checkbox" :disabled="disable" v-on:click="CheckRange">
                        </td>
                        <td>
                            <input value="rdl_1" v-model="val_1" type="hidden">
                        </td>
                        <td>.</td>
                    </tr>
                    <tr>
                        <td>SP 3</td>
                        <td>
                            <input value="rdl_22" v-model="val_1" type="checkbox" :disabled="disable" v-on:click="CheckRange">
                        </td>
                        <td>
                            <input value="rdl_1" v-model="val_1" type="hidden">
                        </td>
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
                    <tr style="background-color:#4a4a4a;">
                        <th>Name</th>
                        <th>Flow</th>
                        <th>Total</th>
                        <th>Pr</th>
                    </tr>
                    <tr>
                        <td>FM 21 (Methanol into Trans)</td>
                        <td>
                            <input value="fm_21" v-model="val_3" type="checkbox" :disabled="disable" v-on:click="CheckRange">
                        </td>
                        <td>
                            <input value="ft_21" v-model="val_4" type="checkbox" :disabled="disable" v-on:click="CheckRange">
                        </td>
                        <td>.</td>
                    </tr>
                    <tr>
                        <td>FM 1(Trans Oil)</td>
                        <td>
                            <input value="fm_1" v-model="val_3" type="checkbox" :disabled="disable" v-on:click="CheckRange">
                        </td>
                        <td>
                            <input value="ft_1" v-model="val_4" type="checkbox" :disabled="disable" v-on:click="CheckRange">
                        </td>
                        <td>.</td>
                    </tr>
                    <tr>
                        <td>FM 2( Alkali Trans)</td>
                        <td>
                            <input value="fm_2" v-model="val_3" type="checkbox" :disabled="disable" v-on:click="CheckRange">
                        </td>
                        <td>
                            <input value="ft_2" v-model="val_4" type="checkbox" :disabled="disable" v-on:click="CheckRange">
                        </td>
                        <td>.</td>
                    </tr>
                    <tr>
                        <td>FM 3 (Trans Evaporator to NI)</td>
                        <td>
                            <input value="fm_3" v-model="val_3" type="checkbox" :disabled="disable" v-on:click="CheckRange">
                        </td>
                        <td>
                            <input value="ft_3" v-model="val_4" type="checkbox" :disabled="disable" v-on:click="CheckRange">
                        </td>
                        <td>.</td>
                    </tr>
                    <tr>
                        <td>FM 4 (Water N1)</td>
                        <td>
                            <input value="fm_4" v-model="val_3" type="checkbox" :disabled="disable" v-on:click="CheckRange">
                        </td>
                        <td>
                            <input value="ft_4" v-model="val_4" type="checkbox" :disabled="disable" v-on:click="CheckRange">
                        </td>
                        <td>.</td>
                    </tr>
                    <tr>
                        <td>FM 5 (N2 to D402)</td>
                        <td>
                            <input value="fm_5" v-model="val_3" type="checkbox" :disabled="disable" v-on:click="CheckRange">
                        </td>
                        <td>
                            <input value="ft_5" v-model="val_4" type="checkbox" :disabled="disable" v-on:click="CheckRange">
                        </td>
                        <td>.</td>
                    </tr>
                    <tr>
                        <td>FM 6 (N3 to Slag pool)</td>
                        <td>
                            <input value="fm_6" v-model="val_3" type="checkbox" :disabled="disable" v-on:click="CheckRange">
                        </td>
                        <td>
                            <input value="ft_6" v-model="val_4" type="checkbox" :disabled="disable" v-on:click="CheckRange">
                        </td>
                        <td>.</td>
                    </tr>
                </table>
                <table class="table table-style-me" style="display:inline-table;width:19%; text-align: center; color: white;">
                    <tr style="border: none">
                        <th colspan="3">
                            <h6>Distillation</h6></th>
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
                            <input value="rdl_8" v-model="val_1" type="checkbox" :disabled="disable" v-on:click="CheckRange">
                        </td>
                        <td>
                            <input value="rtd_13" v-model="val_2" type="checkbox" :disabled="disable" v-on:click="CheckRange">
                        </td>
                        <td>.</td>
                    </tr>
                    <tr>
                        <td>D402 B</td>
                        <td>
                            <input value="rdl_9" v-model="val_1" type="checkbox" :disabled="disable" v-on:click="CheckRange">
                        </td>
                        <td>
                            <input value="rtd_14" v-model="val_2" type="checkbox" :disabled="disable" v-on:click="CheckRange">
                        </td>
                        <td>.</td>
                    </tr>
                    <tr>
                        <td>D402 C</td>
                        <td>
                            <input value="rdl_10" v-model="val_1" type="checkbox" :disabled="disable" v-on:click="CheckRange">
                        </td>
                        <td>
                            <input value="rtd_15" v-model="val_2" type="checkbox" :disabled="disable" v-on:click="CheckRange">
                        </td>
                        <td>.</td>
                    </tr>
                    <tr>
                        <td>D402 D</td>
                        <td>
                            <input value="rdl_11" v-model="val_1" type="checkbox" :disabled="disable" v-on:click="CheckRange">
                        </td>
                        <td>
                            <input value="rtd_16" v-model="val_2" type="checkbox" :disabled="disable" v-on:click="CheckRange">
                        </td>
                        <td>.</td>
                    </tr>
                    <tr>
                        <td>E501</td>
                        <td>
                            <input value="rdl_1" v-model="val_1" type="hidden">
                        </td>
                        <td>
                            <input value="rtd_25" v-model="val_2" type="checkbox" :disabled="disable" v-on:click="CheckRange">
                        </td>
                        <td>.</td>
                    </tr>
                    <tr>
                        <td>D501</td>
                        <td>
                            <input value="dpl_1" v-model="val_1" type="checkbox" :disabled="disable" v-on:click="CheckRange">
                        </td>
                        <td>
                            <input value="rtd_26" v-model="val_2" type="checkbox" :disabled="disable" v-on:click="CheckRange">
                        </td>
                        <td>.</td>
                    </tr>
                    <tr>
                        <td>T501</td>
                        <td>
                            <input value="dpl_6" v-model="val_1" type="checkbox" :disabled="disable" v-on:click="CheckRange">
                        </td>
                        <td>
                            <input value="" v-model="val_1" type="hidden">
                        </td>
                        <td>.</td>
                    </tr>
                    <tr>
                        <td>D503</td>
                        <td>
                            <input value="dpl_4" v-model="val_1" type="checkbox" :disabled="disable" v-on:click="CheckRange">
                        </td>
                        <td>
                            <input value="" v-model="val_1" type="hidden">
                        </td>
                        <td>.</td>
                    </tr>
                    <tr>
                        <td>T501 T</td>
                        <td>
                            <input value="rdl_1" v-model="val_1" type="hidden">
                        </td>
                        <td>
                            <input value="rtd_27" v-model="val_2" type="checkbox" :disabled="disable" v-on:click="CheckRange">
                        </td>
                        <td>.</td>
                    </tr>
                    <tr>
                        <td>T501 M</td>
                        <td>
                            <input value="rdl_1" v-model="val_1" type="hidden">
                        </td>
                        <td>
                            <input value="rtd_28" v-model="val_2" type="checkbox" :disabled="disable" v-on:click="CheckRange">
                        </td>
                        <td>.</td>
                    </tr>
                    <tr>
                        <td>T501 B</td>
                        <td>
                            <input value="rdl_1" v-model="val_1" type="hidden">
                        </td>
                        <td>
                            <input value="rtd_29" v-model="val_2" type="checkbox" :disabled="disable" v-on:click="CheckRange">
                        </td>
                        <td>.</td>
                    </tr>
                    <tr>
                        <td>T502 B</td>
                        <td>
                            <input value="dpl_7" v-model="val_1" type="checkbox" :disabled="disable" v-on:click="CheckRange">
                        </td>
                        <td>
                            <input value="" v-model="val_1" type="hidden">
                        </td>
                        <td>.</td>
                    </tr>
                    <tr>
                        <td>D504</td>
                        <td>
                            <input value="dpl_5" v-model="val_1" type="checkbox" :disabled="disable" v-on:click="CheckRange">
                        </td>
                        <td>
                            <input value="rdl_1" v-model="val_1" type="hidden">
                        </td>
                        <td>.</td>
                    </tr>
                    <tr>
                        <td>T504 M</td>
                        <td>
                            <input value="rdl_1" v-model="val_1" type="hidden">
                        </td>
                        <td>
                            <input value="rtd_30" v-model="val_2" type="checkbox" :disabled="disable" v-on:click="CheckRange">
                        </td>
                        <td>.</td>
                    </tr>
                    <tr>
                        <td>T502 B</td>
                        <td>
                            <input value="rdl_1" v-model="val_1" type="hidden">
                        </td>
                        <td>
                            <input value="rtd_31" v-model="val_2" type="checkbox" :disabled="disable" v-on:click="CheckRange">
                        </td>
                        <td>.</td>
                    </tr>
                    <tr>
                        <td>Bio Trans</td>
                        <td>
                            <input value="rdl_1" v-model="val_1" type="hidden">
                        </td>
                        <td>
                            <input value="rdl_1" v-model="val_1" type="hidden">
                        </td>
                        <td>.</td>
                    </tr>
                    <tr>
                        <td> Bio Store</td>
                        <td>
                            <input value="dpl_8" v-model="val_1" type="checkbox" :disabled="disable" v-on:click="CheckRange">
                        </td>
                        <td>
                            <input value="rtd_36" v-model="val_2" type="checkbox" :disabled="disable" v-on:click="CheckRange">
                        </td>
                        <td>.</td>
                    </tr>
                    <tr>
                        <td>Tar Tank</td>
                        <td>
                            <input value="rdl_1" v-model="val_1" type="hidden">
                        </td>
                        <td>
                            <input value="rdl_1" v-model="val_1" type="hidden">
                        </td>
                        <td>.</td>
                    </tr>
                    <tr>
                        <td>Vac Line</td>
                        <td><input value="vg_1" v-model="val_1" type="checkbox" :disabled="disable" v-on:click="CheckRange"></td>
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
                    <tr style="background-color:#4a4a4a;">
                        <th>Name</th>
                        <th>Flow</th>
                        <th>Total</th>
                        <th>Pr</th>
                    </tr>
                    <tr>
                        <td>FM 8 (D402-D501)</td>
                        <td>
                            <input value="fm_8" v-model="val_3" type="checkbox" :disabled="disable" v-on:click="CheckRange">
                        </td>
                        <td>
                            <input value="ft_8" v-model="val_4" type="checkbox" :disabled="disable" v-on:click="CheckRange">
                        </td>
                        <td>.</td>
                    </tr>
                    <tr>
                        <td>FM 9 (D501-T501)</td>
                        <td>
                            <input value="fm_9" v-model="val_3" type="checkbox" :disabled="disable" v-on:click="CheckRange">
                        </td>
                        <td>
                            <input value="ft_9" v-model="val_4" type="checkbox" :disabled="disable" v-on:click="CheckRange">
                        </td>
                        <td>.</td>
                    </tr>
                    <tr>
                        <td>FM 10 (T501-T502)</td>
                        <td>
                            <input value="fm_10" v-model="val_3" type="checkbox" :disabled="disable" v-on:click="CheckRange">
                        </td>
                        <td>
                            <input value="ft_10" v-model="val_4" type="checkbox" :disabled="disable" v-on:click="CheckRange">
                        </td>
                        <td>.</td>
                    </tr>
                    <tr>
                        <td>FM 12 (Recycle to D405 Line)</td>
                        <td>
                            <input value="fm_12" v-model="val_3" type="checkbox" :disabled="disable" v-on:click="CheckRange">
                        </td>
                        <td>
                            <input value="ft_12" v-model="val_4" type="checkbox" :disabled="disable" v-on:click="CheckRange">
                        </td>
                        <td>.</td>
                    </tr>
                    <tr>
                        <td>FM 11 (Tar Transfer)</td>
                        <td>
                            <input value="fm_11" v-model="val_3" type="checkbox" :disabled="disable" v-on:click="CheckRange">
                        </td>
                        <td>
                            <input value="ft_11" v-model="val_4" type="checkbox" :disabled="disable" v-on:click="CheckRange">
                        </td>
                        <td>.</td>
                    </tr>
                    <tr>
                        <td>FM 13 (Biodiesel to Storage)</td>
                        <td>
                            <input value="fm_13" v-model="val_3" type="checkbox" :disabled="disable" v-on:click="CheckRange">
                        </td>
                        <td>
                            <input value="ft_13" v-model="val_4" type="checkbox" :disabled="disable" v-on:click="CheckRange">
                        </td>
                        <td>.</td>
                    </tr>
                    <tr>
                        <td>FM 22 (Biodiesel Storage to Truck)</td>
                        <td>
                            <input value="fm_22" v-model="val_3" type="checkbox" :disabled="disable" v-on:click="CheckRange">
                        </td>
                        <td>
                            <input value="ft_22" v-model="val_4" type="checkbox" :disabled="disable" v-on:click="CheckRange">
                        </td>
                        <td>.</td>
                    </tr>
                </table>
                <table class="table table-style-me" style="display:inline-table;width:19%; text-align: center; color: white;">
                    <tr style="border: none">
                        <th colspan="3">
                            <h6>Utilities</h6></th>
                    </tr>
                    <tr style="background-color:#4a4a4a;">
                        <th>Name</th>
                        <th>level</th>
                        <th>Vol</th>
                        <th>Temp</th>
                        <th>Pr</th>
                    </tr>
                    <tr>
                        <td>Dist Header</td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td> <input value="pt_5" v-model="val_6" type="checkbox" :disabled="disable" v-on:click="CheckRange"></td>
                    </tr>
                    <tr>
                        <td>.</td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td>.</td>
                    </tr>
                    <tr>
                        <td>.</td>
                        <td></td>
                        <td></td>
                        <td> </td>
                        <td>.</td>
                    </tr>
                    <tr>
                        <td>.</td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td>.</td>
                    </tr>
                    <tr>
                        <td>.</td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td>.</td>
                    </tr>
                    <tr>
                        <td>.</td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td>.</td>
                    </tr>
                    <tr>
                        <td>.</td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td>.</td>
                    </tr>
                    <tr style="background-color:#4a4a4a;">
                        <td>Main</td>
                        <td>Flow</td>
                        <td>Tot</td>
                        <td>Temp</td>
                        <td>Pr</td>
                    </tr>
                   <tr>
                        <td>Steam</td>
                        <td><input value="st_fm2_flow" v-model="val_3" type="checkbox" :disabled="disable" v-on:click="CheckRange"></td>
                        <td><input value="stfm2_flow_tot" v-model="val_4" type="checkbox" :disabled="disable" v-on:click="CheckRange"></td>
                        <td><input value="stfm2_temp" v-model="val_2" type="checkbox" :disabled="disable" v-on:click="CheckRange"></td>
                        <td><input value="stfm2_pressure" v-model="val_6" type="checkbox" :disabled="disable" v-on:click="CheckRange"></td>
                    </tr>
                    <tr>
                        <td>E401</td>
                        <td><input value="st_fm1_flow" v-model="val_3" type="checkbox" :disabled="disable" v-on:click="CheckRange"></td>
                        <td><input value="stfm1_flow_tot" v-model="val_4" type="checkbox" :disabled="disable" v-on:click="CheckRange"></td>
                        <td><input value="stfm1_temp" v-model="val_2" type="checkbox" :disabled="disable" v-on:click="CheckRange"></td>
                        <td><input value="stfm1_pressure" v-model="val_6" type="checkbox" :disabled="disable" v-on:click="CheckRange"></td>
                            
                    </tr>
                    <tr>
                        <td>.</td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td>.</td>
                    </tr>
                     <tr>
                        <td>.</td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td>.</td>
                    </tr>
                     <tr>
                        <td>.</td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td>.</td>
                    </tr>
                    <tr>
                        <td>.</td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td>.</td>
                    </tr>
                    <tr>
                        <td>.</td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td>.</td>
                    </tr>
                    <tr>
                        <td>.</td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td>.</td>
                    </tr>
                    <tr>
                        <td>.</td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td>.</td>
                    </tr>
                    <tr>
                        <td>.</td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td>.</td>
                    </tr>
                    <tr>
                        <td>.</td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td>.</td>
                    </tr>
                    <tr >
                        <td class="custom-util" >.</td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td>.</td>
                    </tr>
                    <tr style="background-color:#4a4a4a;">
                        <th>Name</th>
                        <td>.</td>
                        <th>Flow</th>
                        <th>Total</th>
                        <th>Pr</th>
                    </tr>
                    <tr>
                        <td>FM 26 (CT Outlet)</td>
                        <td>
                            <input value="fm_26" v-model="val_3" type="checkbox" :disabled="disable" v-on:click="CheckRange">
                        </td>
                        <td>
                            <input value="ft_26" v-model="val_4" type="checkbox" :disabled="disable" v-on:click="CheckRange">
                        </td>
                        <td></td>
                        <td>.</td>
                    </tr>
                    <tr>
                        <td>FM 27 (CT Inlet)</td>
                        <td>
                            <input value="fm_27" v-model="val_3" type="checkbox" :disabled="disable" v-on:click="CheckRange">
                        </td>
                        <td>
                            <input value="ft_27" v-model="val_4" type="checkbox" :disabled="disable" v-on:click="CheckRange">
                        </td>
                        <td></td>
                        <td>.</td>
                    </tr>
                </table>

                    <div class="col-md-8 m-auto" style="margin-right:117px !important">
                        <div class="form-row" style="color:white;">
                    <div class="form-group col-md-3" >
                        <label>Set Intervals</label>
                        <select v-model="setInterval" class="form-control" id="interval" :disabled="disable">
                            <option value="1">1 Minute</option>
                            <option value="2">2 Minute</option>
                            <option value="5">5 Minute</option>
                            <option value="10">10 Minute</option>
                            <option value="30">30 Minute</option>
                            <option value="60">1 Hour</option>
                        </select>
                    </div>

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

                    <div class="form-group col-md-3" style="margin-top: 31px;">
                        <input type="submit" value="Show Selection" class="btn btn-success float-left" :disabled="disable">
                        <button @click="reloadPage" class="btn btn-primary float-left ml-1">Reset Page</button>
                    </div>

                    <span v-if="timing == '5'">
                            <div class="form-group col-md-3" >
                                <label>Select Timing</label>
                                <input type="datetime-local" class="form-control" v-model="startdate" style="width: auto;" id="js_fromdate">
                            </div>

                            <div class="form-group col-md-3" >
                                <label>Select Timing</label>
                                <input type="datetime-local" class="form-control" v-model="enddate" style="width: auto;" id="js_fromdate">
                            </div>
                    </span>
                </div>
                </div>
            </form>
        </div>
               <button id="btn_print" v-on:click="print" class="btn btn-success" style="position:absolute; left: 78%; top: 27px;">Print Chart</button>
        <div class="container-2 col-md-10 m-auto" style="padding-bottom:35px">
            <div class="col-md-11" v-if="val_1 !=''">
                <h3>Graph For Level</h3>
                <canvas id="myChart1" width="450" height="150" style="width: 1583px;height: 527px;color: white; background-color: white;"></canvas>
            </div>
            <div  class="col-md-11" v-else>
                <canvas id="myChart1" width="450" height="150" style="width: 1583px;height: 527px;color: white; background-color: white; display:none;"></canvas>
            </div>
            <div class="col-md-11" v-if="val_1 !=''">
                <h3>Graph For Volume</h3>
                <canvas id="myChart2" width="450" height="150" style="width: 1583px;height: 527px;color: white; background-color: white;"></canvas>
            </div>
            <div  class="col-md-11" v-else>
                <canvas id="myChart2" width="450" height="150" style="width: 1583px;height: 527px;color: white; background-color: white; display:none;"></canvas>
            </div>
            <div class="col-md-11" v-if="val_2 !=''">
                <h3>Graph For Temperature</h3>
                <canvas id="myChart3" width="450" height="150" style="width: 1583px;height: 527px;color: white; background-color: white;"></canvas>
             </div>
            <div class="col-md-11" v-else>
                <canvas id="myChart3" width="450" height="150" style="width: 1583px;height: 527px;color: white; background-color: white; display:none;"></canvas>
            </div>
            <div class="col-md-11" v-if="val_3 != ''">
                <h3>Graph For Flow</h3>
                <canvas id="myChart4" width="450" height="150" style="width: 1583px;height: 527px;color: white; background-color: white;"></canvas>
            </div>
            <div class="col-md-11" v-else>
                <canvas id="myChart4" width="450" height="150" style="width: 1583px;height: 527px;color: white; background-color: white; display:none;"></canvas>
            </div>
            <div class="col-md-11" v-if="val_4 != ''">
                <h3>Graph For Flow Total</h3>
                <canvas id="myChart5" width="450" height="150" style="width: 1583px;height: 527px;color: white; background-color: white;"></canvas>
            </div>
            <div class="col-md-11" v-else>
                <canvas id="myChart5" width="450" height="150" style="width: 1583px;height: 527px;color: white; background-color: white; display:none;"></canvas>
            </div>
            <div class="col-md-11" v-if="val_5 != ''">
                <h3>Graph For H2SO4 Mass</h3>
                <canvas id="myChart6" width="450" height="150" style="width: 1583px;height: 527px;color: white; background-color: white;"></canvas>
            </div>
            <div class="col-md-11" v-else>
                <canvas id="myChart6" width="450" height="150" style="width: 1583px;height: 527px;color: white; background-color: white; display:none;"></canvas>
            </div>
             <div class="col-md-11" v-if="val_6 != ''">
                <h3>Graph For PT</h3>
                <canvas id="myChart7" width="450" height="150" style="width: 1583px;height: 527px;color: white; background-color: white;"></canvas>
            </div>
            <div class="col-md-11" v-else>
                <canvas id="myChart7" width="450" height="150" style="width: 1583px;height: 527px;color: white; background-color: white; display:none;"></canvas>
            </div>
        </div>

    </div>
</template>

<script>
import LineChart from './LineChart.js'
import {GraphReporting} from "../helpers/api";
import {logout} from "../helpers/auth";
import Chart from 'chart.js'
import { Line } from 'vue-chartjs';

export default {
    components: {
        LineChart
    },
    name: "GraphReporting",
    extends: Line,
    data() {
        return {
            timing: 1,
            db_timing:[],
            tmp_db_timing:[],
            flow_db_timing:[],
            ft_db_timing:[],
            pt_db_timing:[],
            Volume_timing:[],
            setInterval: '60',
            val_1: [],
            val_2: [],
            val_3: [],
            val_4: [],
            val_5: [],
            val_6: [],
            startdate: '',
            enddate: '',
            select_record_option: [],
            select_record: [],
            select_db_record: '',
            db_val_1: [],
            db_val_2: [],
            db_val_3: [],
            db_val_4: [],
            db_val_5: [],
            db_val_6: [],
            db_val_7: [],
            db_val_8: [],
            db_val_9: [],
            db_val_10: [],
            db_val_11: [],
            db_val_12: [],
            db_val_13: [],
            db_val_14: [],
            db_val_15: [],
            db_val_16: [],
            vol_val_1: [],
            vol_val_2: [],
            vol_val_3: [],
            vol_val_4: [],
            vol_val_5: [],
            vol_val_6: [],
            vol_val_7: [],
            vol_val_8: [],
            vol_val_9: [],
            vol_val_10: [],
            vol_val_11: [],
            vol_val_12: [],
            vol_val_13: [],
            vol_val_14: [],
            vol_val_15: [],
            vol_val_16: [],
            tmp_db_val_1: [],
            tmp_db_val_2: [],
            tmp_db_val_3: [],
            tmp_db_val_4: [],
            tmp_db_val_5: [],
            tmp_db_val_6: [],
            tmp_db_val_7: [],
            tmp_db_val_8: [],
            tmp_db_val_9: [],
            tmp_db_val_10: [],
            tmp_db_val_11: [],
            tmp_db_val_12: [],
            tmp_db_val_13: [],
            tmp_db_val_14: [],
            tmp_db_val_15: [],
            tmp_db_val_16: [],
             flow_db_val_1: [],
            flow_db_val_2: [],
            flow_db_val_3: [],
            flow_db_val_4: [],
            flow_db_val_5: [],
            flow_db_val_6: [],
            flow_db_val_7: [],
            flow_db_val_8: [],
            flow_db_val_9: [],
            flow_db_val_10: [],
            flow_db_val_11: [],
            flow_db_val_12: [],
            flow_db_val_13: [],
            flow_db_val_14: [],
            flow_db_val_15: [],
            flow_db_val_16: [],
            ft_db_val_1: [],
            ft_db_val_2: [],
            ft_db_val_3: [],
            ft_db_val_4: [],
            ft_db_val_5: [],
            ft_db_val_6: [],
            ft_db_val_7: [],
            ft_db_val_8: [],
            ft_db_val_9: [],
            ft_db_val_10: [],
            ft_db_val_11: [],
            ft_db_val_12: [],
            ft_db_val_13: [],
            ft_db_val_14: [],
            ft_db_val_15: [],
            ft_db_val_16: [],

            pt_db_val_1: [],
            pt_db_val_2: [],
            pt_db_val_3: [],
            pt_db_val_4: [],
            pt_db_val_5: [],
            pt_db_val_6: [],
            pt_db_val_6: [],
            // For Rdl Mass
                mass_db_val: [],
                mass_label: [],
                mass_timing: [],
            // 
            disable: false,
            label_1:'',
            label_2:'',
            label_3:'',
            label_4:'',
            label_5:'',
            label_6:'',
            label_7:'',
            label_8:'',
            label_9:'',
            label_10:'',
            label_11:'',
            label_12:'',
            label_13:'',
            label_14:'',
            label_15:'',
            label_16:'',
            label_rdl_volume:'',
            label_rdl_mass:'',
            vol_label_1:'',
            vol_label_2:'',
            vol_label_3:'',
            vol_label_4:'',
            vol_label_5:'',
            vol_label_6:'',
            vol_label_7:'',
            vol_label_8:'',
            vol_label_9:'',
            vol_label_10:'',
            vol_label_11:'',
            vol_label_12:'',
            vol_label_13:'',
            vol_label_14:'',
            vol_label_15:'',
            vol_label_16:'',
            vol_label_rdl_volume:'',
            vol_label_rdl_mass:'',
            tmp_label_1:'',
            tmp_label_2:'',
            tmp_label_3:'',
            tmp_label_4:'',
            tmp_label_5:'',
            tmp_label_6:'',
            tmp_label_7:'',
            tmp_label_8:'',
            tmp_label_9:'',
            tmp_label_10:'',
            tmp_label_11:'',
            tmp_label_12:'',
            tmp_label_13:'',
            tmp_label_14:'',
            tmp_label_15:'',
            tmp_label_16:'',
            flow_label_1:'',
            flow_label_2:'',
            flow_label_3:'',
            flow_label_4:'',
            flow_label_5:'',
            flow_label_6:'',
            flow_label_7:'',
            flow_label_8:'',
            flow_label_9:'',
            flow_label_10:'',
            flow_label_11:'',
            flow_label_12:'',
            flow_label_13:'',
            flow_label_14:'',
            flow_label_15:'',
            flow_label_16:'',
            ft_label_1:'',
            ft_label_2:'',
            ft_label_3:'',
            ft_label_4:'',
            ft_label_5:'',
            ft_label_6:'',
            ft_label_7:'',
            ft_label_8:'',
            ft_label_9:'',
            ft_label_10:'',
            ft_label_11:'',
            ft_label_12:'',
            ft_label_13:'',
            ft_label_14:'',
            ft_label_15:'',
            ft_label_16:'',
            
            pt_label_1:'',
            pt_label_2:'',
            pt_label_3:'',
            pt_label_4:'',
            pt_label_5:'',
            pt_label_6:'',
            pt_label_7:'',
        }

    },

    beforeCreate: function() {
        document.querySelector('body').style.maxWidth = "100%";
        document.querySelector('body').style.minWidth = "100%";

        // document.getElementById("main").style.overflow = "hidden";
    },
    methods: {
        CheckRange(){
        //     if(this.val_1.length >15){
        //         this.val_1.pop()
        //         alert('You can Only Select 16 Values');
        //     }

        },
        print(){
            $(".container-2").printThis({
                debug: false,
                canvas: true,              // copy canvas content
                printContainer: true,
                header: "<h1 style='text-align: center'>Bio Tech Energy (PVT) LTD </h1>",
                formValues: true,
                importCSS: true,
                importStyle: true,
                removeInline: false
            });
        },
        submit() {
            this.disable = true;
            axios.post('api/multigraph', [this.val_1,this.setInterval,this.timing,this.startdate,this.enddate,this.val_2,this.val_3,this.val_4,this.val_5,this.val_6] , {headers: {'Authorization': 'Bearer '+this.currentUser.token}})
                .then((response) => {
                    // For Level
                    this.db_val_1 = response.data.value_1
                    this.db_val_2 = response.data.value_2
                    this.db_val_3 = response.data.value_3
                    this.db_val_4 = response.data.value_4
                    this.db_val_5 = response.data.value_5
                    this.db_val_6 = response.data.value_6
                    this.db_val_7 = response.data.value_7
                    this.db_val_8 = response.data.value_8
                    this.db_val_9 = response.data.value_9
                    this.db_val_10 = response.data.value_10
                    this.db_val_11 = response.data.value_11
                    this.db_val_12 = response.data.value_12
                    this.db_val_13 = response.data.value_13
                    this.db_val_14 = response.data.value_14
                    this.db_val_15 = response.data.value_15
                    this.db_val_16 = response.data.value_16
                    
                     this.db_timing = response.data.timing
                    // For Volume
                    this.vol_val_1 = response.data.vol_value_1
                    this.vol_val_2 = response.data.vol_value_2
                    this.vol_val_3 = response.data.vol_value_3
                    this.vol_val_4 = response.data.vol_value_4
                    this.vol_val_5 = response.data.vol_value_5
                    this.vol_val_6 = response.data.vol_value_6
                    this.vol_val_7 = response.data.vol_value_7
                    this.vol_val_8 = response.data.vol_value_8
                    this.vol_val_9 = response.data.vol_value_9
                    this.vol_val_10 = response.data.vol_value_10
                    this.vol_val_11 = response.data.vol_value_11
                    this.vol_val_12 = response.data.vol_value_12
                    this.vol_val_13 = response.data.vol_value_13
                    this.vol_val_14 = response.data.vol_value_14
                    this.vol_val_15 = response.data.vol_value_15
                    this.vol_val_16 = response.data.vol_value_16

                    this.Volume_timing = response.data.Volume_timing
                    // For Temperature
                    this.tmp_db_val_1 = response.data.tmp_value_1
                    this.tmp_db_val_2 = response.data.tmp_value_2
                    this.tmp_db_val_3 = response.data.tmp_value_3
                    this.tmp_db_val_4 = response.data.tmp_value_4
                    this.tmp_db_val_5 = response.data.tmp_value_5
                    this.tmp_db_val_6 = response.data.tmp_value_6
                    this.tmp_db_val_7 = response.data.tmp_value_7
                    this.tmp_db_val_8 = response.data.tmp_value_8
                    this.tmp_db_val_9 = response.data.tmp_value_9
                    this.tmp_db_val_10 = response.data.tmp_value_10
                    this.tmp_db_val_11 = response.data.tmp_value_11
                    this.tmp_db_val_12 = response.data.tmp_value_12
                    this.tmp_db_val_13 = response.data.tmp_value_13
                    this.tmp_db_val_14 = response.data.tmp_value_14
                    this.tmp_db_val_15 = response.data.tmp_value_15
                    this.tmp_db_val_16 = response.data.tmp_value_16

                    this.tmp_db_timing = response.data.tmp_timing
                    // For Flow
                    this.flow_db_val_1 = response.data.flow_value_1
                    this.flow_db_val_2 = response.data.flow_value_2
                    this.flow_db_val_3 = response.data.flow_value_3
                    this.flow_db_val_4 = response.data.flow_value_4
                    this.flow_db_val_5 = response.data.flow_value_5
                    this.flow_db_val_6 = response.data.flow_value_6
                    this.flow_db_val_7 = response.data.flow_value_7
                    this.flow_db_val_8 = response.data.flow_value_8
                    this.flow_db_val_9 = response.data.flow_value_9
                    this.flow_db_val_10 = response.data.flow_value_10
                    this.flow_db_val_11 = response.data.flow_value_11
                    this.flow_db_val_12 = response.data.flow_value_12
                    this.flow_db_val_13 = response.data.flow_value_13
                    this.flow_db_val_14 = response.data.flow_value_14
                    this.flow_db_val_15 = response.data.flow_value_15
                    this.flow_db_val_16 = response.data.flow_value_16
                    this.flow_db_timing = response.data.flow_timing
                    // For Flow Total
                    this.ft_db_val_1 = response.data.ft_value_1
                    this.ft_db_val_2 = response.data.ft_value_2
                    this.ft_db_val_3 = response.data.ft_value_3
                    this.ft_db_val_4 = response.data.ft_value_4
                    this.ft_db_val_5 = response.data.ft_value_5
                    this.ft_db_val_6 = response.data.ft_value_6
                    this.ft_db_val_7 = response.data.ft_value_7
                    this.ft_db_val_8 = response.data.ft_value_8
                    this.ft_db_val_9 = response.data.ft_value_9
                    this.ft_db_val_10 = response.data.ft_value_10
                    this.ft_db_val_11 = response.data.ft_value_11
                    this.ft_db_val_12 = response.data.ft_value_12
                    this.ft_db_val_13 = response.data.ft_value_13
                    this.ft_db_val_14 = response.data.ft_value_14
                    this.ft_db_val_15 = response.data.ft_value_15
                    this.ft_db_val_16 = response.data.ft_value_16
                    
                    this.ft_db_timing = response.data.ft_timing
                    // For Rdl 25 Mass
                    this.mass_timing = response.data.db_time_mass
                    this.mass_db_val = response.data.rdl25_mass
                    // 
                    this.pt_db_timing = response.data.pt_timing
                    this.pt_db_val_1 = response.data.pt_value_1
                    this.pt_db_val_2 = response.data.pt_value_2
                    this.pt_db_val_3 = response.data.pt_value_3
                    this.pt_db_val_4 = response.data.pt_value_4
                    this.pt_db_val_5 = response.data.pt_value_5
                    this.pt_db_val_6 = response.data.pt_value_6
                    this.pt_db_val_7 = response.data.pt_value_7
                    // console.log(this.mass_db_val)
                    if(this.val_1.length >= 0){
                    if(this.val_1[0]=='rdl_1'){
                        this.label_1 = 'D101 A';
                    }else if(this.val_1[0]=='rdl_2'){
                        this.label_1 = 'D101 B';
                    }else if(this.val_1[0]=='rdl_3'){
                        this.label_1 = 'D405 A';
                    }else if(this.val_1[0]=='rdl_4'){
                        this.label_1 = 'D405 B';
                    }else if(this.val_1[0]=='rdl_5'){
                        this.label_1 = 'D405 C';
                    }else if(this.val_1[0]=='rdl_6'){
                        this.label_1 = 'ALKALI (C401A)';
                    }else if(this.val_1[0]=='rdl_7'){
                        this.label_1 = 'ALKALI (C401B)';
                    }else if(this.val_1[0]=='rdl_8'){
                        this.label_1 = 'D402 A';
                    }else if(this.val_1[0]=='rdl_9'){
                        this.label_1 = 'D402 B';
                    }else if(this.val_1[0]=='rdl_10'){
                        this.label_1 = 'D402 C';
                    }else if(this.val_1[0]=='rdl_11'){
                        this.label_1 = 'D402 D';
                    }else if(this.val_1[0]=='rdl_12'){
                        this.label_1 = 'GLV';
                    }else if(this.val_1[0]=='rdl_13'){
                        this.label_1 = 'SETTLING A';
                    }else if(this.val_1[0]=='rdl_14'){
                        this.label_1 = 'SETTLING B';
                    }else if(this.val_1[0]=='rdl_15'){
                        this.label_1 = 'SETTLING C';
                    }else if(this.val_1[0]=='rdl_16'){
                        this.label_1 = 'METHANOL TANK#1';
                    }else if(this.val_1[0]=='rdl_17'){
                        this.label_1 = 'TAR TANK';
                    }else if(this.val_1[0]=='rdl_18'){
                        this.label_1 = 'GST TANK#1';
                    }else if(this.val_1[0]=='rdl_19'){
                        this.label_1 = 'METHANOL TANK#2';
                    }else if(this.val_1[0]=='rdl_20'){
                        this.label_1 = 'Slang Pool#1';
                    }else if(this.val_1[0]=='rdl_21'){
                        this.label_1 = 'Slag Pool#2';
                    }else if(this.val_1[0]=='rdl_22'){
                        this.label_1 = 'Slag Pool#3';
                    }else if(this.val_1[0]=='rdl_23'){
                        this.label_1 = 'PPRA';
                    }else if(this.val_1[0]=='rdl_24'){
                        this.label_1 = 'PPRB';
                    }else if(this.val_1[0]=='rdl_25'){
                        this.label_1 = 'H2SO4 Tank';
                    }else if(this.val_1[0]=='dpl_1'){
                        this.label_1 = 'D501';
                    }else if(this.val_1[0]=='dpl_2'){
                        this.label_1 = 'E401';
                    }else if(this.val_1[0]=='dpl_3'){
                        this.label_1 = 'T601';
                    }else if(this.val_1[0]=='dpl_4'){
                        this.label_1 = 'D503';
                    }else if(this.val_1[0]=='dpl_5'){
                        this.label_1 = 'D504';
                    }else if(this.val_1[0]=='dpl_6'){
                        this.label_1 = 'T501';
                    }else if(this.val_1[0]=='dpl_7'){
                        this.label_1 = 'T502';
                    }else if(this.val_1[0]=='pit_level'){
                        this.label_1 = 'Pit Level';
                    }
                    ///////////////////////////////////////////////////////////
                    if(this.val_1[1]=='rdl_1'){
                        this.label_2 = 'D101 A';
                    }else if(this.val_1[1]=='rdl_2'){
                        this.label_2 = 'D101 B';
                    }else if(this.val_1[1]=='rdl_3'){
                        this.label_2 = 'D405 A';
                    }else if(this.val_1[1]=='rdl_4'){
                        this.label_2 = 'D405 B';
                    }else if(this.val_1[1]=='rdl_5'){
                        this.label_2 = 'D405 C';
                    }else if(this.val_1[1]=='rdl_6'){
                        this.label_2 = 'ALKALI (C401A)';
                    }else if(this.val_1[1]=='rdl_7'){
                        this.label_2 = 'ALKALI (C401B)';
                    }else if(this.val_1[1]=='rdl_8'){
                        this.label_2 = 'D402 A';
                    }else if(this.val_1[1]=='rdl_9'){
                        this.label_2 = 'D402 B';
                    }else if(this.val_1[1]=='rdl_10'){
                        this.label_2 = 'D402 C';
                    }else if(this.val_1[1]=='rdl_11'){
                        this.label_2 = 'D402 D';
                    }else if(this.val_1[1]=='rdl_12'){
                        this.label_2 = 'GLV';
                    }else if(this.val_1[1]=='rdl_13'){
                        this.label_2 = 'SETTLING A';
                    }else if(this.val_1[1]=='rdl_14'){
                        this.label_2 = 'SETTLING B';
                    }else if(this.val_1[1]=='rdl_15'){
                        this.label_2 = 'SETTLING C';
                    }else if(this.val_1[1]=='rdl_16'){
                        this.label_2 = 'METHANOL TANK#1';
                    }else if(this.val_1[1]=='rdl_17'){
                        this.label_2 = 'TAR TANK';
                    }else if(this.val_1[1]=='rdl_18'){
                        this.label_2 = 'GST TANK#1';
                    }else if(this.val_1[1]=='rdl_19'){
                        this.label_2 = 'METHANOL TANK#2';
                    }else if(this.val_1[1]=='rdl_20'){
                        this.label_2 = 'Slang Pool#1';
                    }else if(this.val_1[1]=='rdl_21'){
                        this.label_2 = 'Slag Pool#2';
                    }else if(this.val_1[1]=='rdl_22'){
                        this.label_2 = 'Slag Pool#3';
                    }else if(this.val_1[1]=='rdl_23'){
                        this.label_2 = 'PPRA';
                    }else if(this.val_1[1]=='rdl_24'){
                        this.label_2 = 'PPRB';
                    }else if(this.val_1[1]=='rdl_25'){
                        this.label_2 = 'H2SO4 Tank';
                    }else if(this.val_1[1]=='dpl_1'){
                        this.label_2 = 'D501';
                    }else if(this.val_1[1]=='dpl_2'){
                        this.label_2 = 'E401';
                    }else if(this.val_1[1]=='dpl_3'){
                        this.label_2 = 'T601';
                    }else if(this.val_1[1]=='dpl_4'){
                        this.label_2 = 'D503';
                    }else if(this.val_1[1]=='dpl_5'){
                        this.label_2 = 'D504';
                    }else if(this.val_1[1]=='dpl_6'){
                        this.label_2 = 'T501';
                    }else if(this.val_1[1]=='dpl_7'){
                        this.label_2 = 'T502';
                    }else if(this.val_1[1]=='pit_level'){
                        this.label_2 = 'Pit Level';
                    }
                    ///////////////////////////////////////////////////////////
                    if(this.val_1[2]=='rdl_1'){
                        this.label_3 = 'D101 A';
                    }else if(this.val_1[2]=='rdl_2'){
                        this.label_3 = 'D101 B';
                    }else if(this.val_1[2]=='rdl_3'){
                        this.label_3 = 'D405 A';
                    }else if(this.val_1[2]=='rdl_4'){
                        this.label_3 = 'D405 B';
                    }else if(this.val_1[2]=='rdl_5'){
                        this.label_3 = 'D405 C';
                    }else if(this.val_1[2]=='rdl_6'){
                        this.label_3 = 'ALKALI (C401A)';
                    }else if(this.val_1[2]=='rdl_7'){
                        this.label_3 = 'ALKALI (C401B)';
                    }else if(this.val_1[2]=='rdl_8'){
                        this.label_3 = 'D402 A';
                    }else if(this.val_1[2]=='rdl_9'){
                        this.label_3 = 'D402 B';
                    }else if(this.val_1[2]=='rdl_10'){
                        this.label_3 = 'D402 C';
                    }else if(this.val_1[2]=='rdl_11'){
                        this.label_3 = 'D402 D';
                    }else if(this.val_1[2]=='rdl_12'){
                        this.label_3 = 'GLV';
                    }else if(this.val_1[2]=='rdl_13'){
                        this.label_3 = 'SETTLING A';
                    }else if(this.val_1[2]=='rdl_14'){
                        this.label_3 = 'SETTLING B';
                    }else if(this.val_1[2]=='rdl_15'){
                        this.label_3 = 'SETTLING C';
                    }else if(this.val_1[2]=='rdl_16'){
                        this.label_3 = 'METHANOL TANK#1';
                    }else if(this.val_1[2]=='rdl_17'){
                        this.label_3 = 'TAR TANK';
                    }else if(this.val_1[2]=='rdl_18'){
                        this.label_3 = 'GST TANK#1';
                    }else if(this.val_1[2]=='rdl_19'){
                        this.label_3 = 'METHANOL TANK#2';
                    }else if(this.val_1[2]=='rdl_20'){
                        this.label_3 = 'Slang Pool#1';
                    }else if(this.val_1[2]=='rdl_21'){
                        this.label_3 = 'Slag Pool#2';
                    }else if(this.val_1[2]=='rdl_22'){
                        this.label_3 = 'Slag Pool#3';
                    }else if(this.val_1[2]=='rdl_23'){
                        this.label_3 = 'PPRA';
                    }else if(this.val_1[2]=='rdl_24'){
                        this.label_3 = 'PPRB';
                    }else if(this.val_1[2]=='rdl_25'){
                        this.label_3 = 'H2SO4 Tank';
                    }else if(this.val_1[2]=='dpl_1'){
                        this.label_3 = 'D501';
                    }else if(this.val_1[2]=='dpl_2'){
                        this.label_3 = 'E401';
                    }else if(this.val_1[2]=='dpl_3'){
                        this.label_3 = 'T601';
                    }else if(this.val_1[2]=='dpl_4'){
                        this.label_3 = 'D503';
                    }else if(this.val_1[2]=='dpl_5'){
                        this.label_3 = 'D504';
                    }else if(this.val_1[2]=='dpl_6'){
                        this.label_3 = 'T501';
                    }else if(this.val_1[2]=='dpl_7'){
                        this.label_3 = 'T502';
                    }else if(this.val_1[2]=='pit_level'){
                        this.label_3 = 'Pit Level';
                    }
                    ///////////////////////////////////////////////////////////
                    if(this.val_1[3]=='rdl_1'){
                        this.label_4 = 'D101 A';
                    }else if(this.val_1[3]=='rdl_2'){
                        this.label_4 = 'D101 B';
                    }else if(this.val_1[3]=='rdl_3'){
                        this.label_4 = 'D405 A';
                    }else if(this.val_1[3]=='rdl_4'){
                        this.label_4 = 'D405 B';
                    }else if(this.val_1[3]=='rdl_5'){
                        this.label_4 = 'D405 C';
                    }else if(this.val_1[3]=='rdl_6'){
                        this.label_4 = 'ALKALI (C401A)';
                    }else if(this.val_1[3]=='rdl_7'){
                        this.label_4 = 'ALKALI (C401B)';
                    }else if(this.val_1[3]=='rdl_8'){
                        this.label_4 = 'D402 A';
                    }else if(this.val_1[3]=='rdl_9'){
                        this.label_4 = 'D402 B';
                    }else if(this.val_1[3]=='rdl_10'){
                        this.label_4 = 'D402 C';
                    }else if(this.val_1[3]=='rdl_11'){
                        this.label_4 = 'D402 D';
                    }else if(this.val_1[3]=='rdl_12'){
                        this.label_4 = 'GLV';
                    }else if(this.val_1[3]=='rdl_13'){
                        this.label_4 = 'SETTLING A';
                    }else if(this.val_1[3]=='rdl_14'){
                        this.label_4 = 'SETTLING B';
                    }else if(this.val_1[3]=='rdl_15'){
                        this.label_4 = 'SETTLING C';
                    }else if(this.val_1[3]=='rdl_16'){
                        this.label_4 = 'METHANOL TANK#1';
                    }else if(this.val_1[3]=='rdl_17'){
                        this.label_4 = 'TAR TANK';
                    }else if(this.val_1[3]=='rdl_18'){
                        this.label_4 = 'GST TANK#1';
                    }else if(this.val_1[3]=='rdl_19'){
                        this.label_4 = 'METHANOL TANK#2';
                    }else if(this.val_1[3]=='rdl_20'){
                        this.label_4 = 'Slang Pool#1';
                    }else if(this.val_1[3]=='rdl_21'){
                        this.label_4 = 'Slag Pool#2';
                    }else if(this.val_1[3]=='rdl_22'){
                        this.label_4 = 'Slag Pool#3';
                    }else if(this.val_1[3]=='rdl_23'){
                        this.label_4 = 'PPRA';
                    }else if(this.val_1[3]=='rdl_24'){
                        this.label_4 = 'PPRB';
                    }else if(this.val_1[3]=='rdl_25'){
                        this.label_4 = 'H2SO4 Tank';
                    }else if(this.val_1[3]=='dpl_1'){
                        this.label_4 = 'D501';
                    }else if(this.val_1[3]=='dpl_2'){
                        this.label_4 = 'E401';
                    }else if(this.val_1[3]=='dpl_3'){
                        this.label_4 = 'T601';
                    }else if(this.val_1[3]=='dpl_4'){
                        this.label_4 = 'D503';
                    }else if(this.val_1[3]=='dpl_5'){
                        this.label_4 = 'D504';
                    }else if(this.val_1[3]=='dpl_6'){
                        this.label_4 = 'T501';
                    }else if(this.val_1[3]=='dpl_7'){
                        this.label_4 = 'T502';
                    }else if(this.val_1[3]=='pit_level'){
                        this.label_4 = 'Pit Level';
                    }
                    ///////////////////////////////////////////////////////////
                    if(this.val_1[4]=='rdl_1'){
                        this.label_5 = 'D101 A';
                    }else if(this.val_1[4]=='rdl_2'){
                        this.label_5 = 'D101 B';
                    }else if(this.val_1[4]=='rdl_3'){
                        this.label_5 = 'D405 A';
                    }else if(this.val_1[4]=='rdl_4'){
                        this.label_5 = 'D405 B';
                    }else if(this.val_1[4]=='rdl_5'){
                        this.label_5 = 'D405 C';
                    }else if(this.val_1[4]=='rdl_6'){
                        this.label_5 = 'ALKALI (C401A)';
                    }else if(this.val_1[4]=='rdl_7'){
                        this.label_5 = 'ALKALI (C401B)';
                    }else if(this.val_1[4]=='rdl_8'){
                        this.label_5 = 'D402 A';
                    }else if(this.val_1[4]=='rdl_9'){
                        this.label_5 = 'D402 B';
                    }else if(this.val_1[4]=='rdl_10'){
                        this.label_5 = 'D402 C';
                    }else if(this.val_1[4]=='rdl_11'){
                        this.label_5 = 'D402 D';
                    }else if(this.val_1[4]=='rdl_12'){
                        this.label_5 = 'GLV';
                    }else if(this.val_1[4]=='rdl_13'){
                        this.label_5 = 'SETTLING A';
                    }else if(this.val_1[4]=='rdl_14'){
                        this.label_5 = 'SETTLING B';
                    }else if(this.val_1[4]=='rdl_15'){
                        this.label_5 = 'SETTLING C';
                    }else if(this.val_1[4]=='rdl_16'){
                        this.label_5 = 'METHANOL TANK#1';
                    }else if(this.val_1[4]=='rdl_17'){
                        this.label_5 = 'TAR TANK';
                    }else if(this.val_1[4]=='rdl_18'){
                        this.label_5 = 'GST TANK#1';
                    }else if(this.val_1[4]=='rdl_19'){
                        this.label_5 = 'METHANOL TANK#2';
                    }else if(this.val_1[4]=='rdl_20'){
                        this.label_5 = 'Slang Pool#1';
                    }else if(this.val_1[4]=='rdl_21'){
                        this.label_5 = 'Slag Pool#2';
                    }else if(this.val_1[4]=='rdl_22'){
                        this.label_5 = 'Slag Pool#3';
                    }else if(this.val_1[4]=='rdl_23'){
                        this.label_5 = 'PPRA';
                    }else if(this.val_1[4]=='rdl_24'){
                        this.label_5 = 'PPRB';
                    }else if(this.val_1[4]=='rdl_25'){
                        this.label_5 = 'H2SO4 Tank';
                    }else if(this.val_1[4]=='dpl_1'){
                        this.label_5 = 'D501';
                    }else if(this.val_1[4]=='dpl_2'){
                        this.label_5 = 'E401';
                    }else if(this.val_1[4]=='dpl_3'){
                        this.label_5 = 'T601';
                    }else if(this.val_1[4]=='dpl_4'){
                        this.label_5 = 'D503';
                    }else if(this.val_1[4]=='dpl_5'){
                        this.label_5 = 'D504';
                    }else if(this.val_1[4]=='dpl_6'){
                        this.label_5 = 'T501';
                    }else if(this.val_1[4]=='dpl_7'){
                        this.label_5 = 'T502';
                    }else if(this.val_1[4]=='pit_level'){
                        this.label_5 = 'Pit Level';
                    }
                    ///////////////////////////////////////////////////////////
                    if(this.val_1[5]=='rdl_1'){
                        this.label_6 = 'D101 A';
                    }else if(this.val_1[5]=='rdl_2'){
                        this.label_6 = 'D101 B';
                    }else if(this.val_1[5]=='rdl_3'){
                        this.label_6 = 'D405 A';
                    }else if(this.val_1[5]=='rdl_4'){
                        this.label_6 = 'D405 B';
                    }else if(this.val_1[5]=='rdl_5'){
                        this.label_6 = 'D405 C';
                    }else if(this.val_1[5]=='rdl_6'){
                        this.label_6 = 'ALKALI (C401A)';
                    }else if(this.val_1[5]=='rdl_7'){
                        this.label_6 = 'ALKALI (C401B)';
                    }else if(this.val_1[5]=='rdl_8'){
                        this.label_6 = 'D402 A';
                    }else if(this.val_1[5]=='rdl_9'){
                        this.label_6 = 'D402 B';
                    }else if(this.val_1[5]=='rdl_10'){
                        this.label_6 = 'D402 C';
                    }else if(this.val_1[5]=='rdl_11'){
                        this.label_6 = 'D402 D';
                    }else if(this.val_1[5]=='rdl_12'){
                        this.label_6 = 'GLV';
                    }else if(this.val_1[5]=='rdl_13'){
                        this.label_6 = 'SETTLING A';
                    }else if(this.val_1[5]=='rdl_14'){
                        this.label_6 = 'SETTLING B';
                    }else if(this.val_1[5]=='rdl_15'){
                        this.label_6 = 'SETTLING C';
                    }else if(this.val_1[5]=='rdl_16'){
                        this.label_6 = 'METHANOL TANK#1';
                    }else if(this.val_1[5]=='rdl_17'){
                        this.label_6 = 'TAR TANK';
                    }else if(this.val_1[5]=='rdl_18'){
                        this.label_6 = 'GST TANK#1';
                    }else if(this.val_1[5]=='rdl_19'){
                        this.label_6 = 'METHANOL TANK#2';
                    }else if(this.val_1[5]=='rdl_20'){
                        this.label_6 = 'Slang Pool#1';
                    }else if(this.val_1[5]=='rdl_21'){
                        this.label_6 = 'Slag Pool#2';
                    }else if(this.val_1[5]=='rdl_22'){
                        this.label_6 = 'Slag Pool#3';
                    }else if(this.val_1[5]=='rdl_23'){
                        this.label_6 = 'PPRA';
                    }else if(this.val_1[5]=='rdl_24'){
                        this.label_6 = 'PPRB';
                    }else if(this.val_1[5]=='rdl_25'){
                        this.label_6 = 'H2SO4 Tank';
                    }else if(this.val_1[5]=='dpl_1'){
                        this.label_6 = 'D501';
                    }else if(this.val_1[5]=='dpl_2'){
                        this.label_6 = 'E401';
                    }else if(this.val_1[5]=='dpl_3'){
                        this.label_6 = 'T601';
                    }else if(this.val_1[5]=='dpl_4'){
                        this.label_6 = 'D503';
                    }else if(this.val_1[5]=='dpl_5'){
                        this.label_6 = 'D504';
                    }else if(this.val_1[5]=='dpl_6'){
                        this.label_6 = 'T501';
                    }else if(this.val_1[5]=='dpl_7'){
                        this.label_6 = 'T502';
                    }else if(this.val_1[5]=='pit_level'){
                        this.label_6 = 'Pit Level';
                    }
                    ///////////////////////////////////////////////////////////
                    if(this.val_1[6]=='rdl_1'){
                        this.label_7 = 'D101 A';
                    }else if(this.val_1[6]=='rdl_2'){
                        this.label_7 = 'D101 B';
                    }else if(this.val_1[6]=='rdl_3'){
                        this.label_7 = 'D405 A';
                    }else if(this.val_1[6]=='rdl_4'){
                        this.label_7 = 'D405 B';
                    }else if(this.val_1[6]=='rdl_5'){
                        this.label_7 = 'D405 C';
                    }else if(this.val_1[6]=='rdl_6'){
                        this.label_7 = 'ALKALI (C401A)';
                    }else if(this.val_1[6]=='rdl_7'){
                        this.label_7 = 'ALKALI (C401B)';
                    }else if(this.val_1[6]=='rdl_8'){
                        this.label_7 = 'D402 A';
                    }else if(this.val_1[6]=='rdl_9'){
                        this.label_7 = 'D402 B';
                    }else if(this.val_1[6]=='rdl_10'){
                        this.label_7 = 'D402 C';
                    }else if(this.val_1[6]=='rdl_11'){
                        this.label_7 = 'D402 D';
                    }else if(this.val_1[6]=='rdl_12'){
                        this.label_7 = 'GLV';
                    }else if(this.val_1[6]=='rdl_13'){
                        this.label_7 = 'SETTLING A';
                    }else if(this.val_1[6]=='rdl_14'){
                        this.label_7 = 'SETTLING B';
                    }else if(this.val_1[6]=='rdl_15'){
                        this.label_7 = 'SETTLING C';
                    }else if(this.val_1[6]=='rdl_16'){
                        this.label_7 = 'METHANOL TANK#1';
                    }else if(this.val_1[6]=='rdl_17'){
                        this.label_7 = 'TAR TANK';
                    }else if(this.val_1[6]=='rdl_18'){
                        this.label_7 = 'GST TANK#1';
                    }else if(this.val_1[6]=='rdl_19'){
                        this.label_7 = 'METHANOL TANK#2';
                    }else if(this.val_1[6]=='rdl_20'){
                        this.label_7 = 'Slang Pool#1';
                    }else if(this.val_1[6]=='rdl_21'){
                        this.label_7 = 'Slag Pool#2';
                    }else if(this.val_1[6]=='rdl_22'){
                        this.label_7 = 'Slag Pool#3';
                    }else if(this.val_1[6]=='rdl_23'){
                        this.label_7 = 'PPRA';
                    }else if(this.val_1[6]=='rdl_24'){
                        this.label_7 = 'PPRB';
                    }else if(this.val_1[6]=='rdl_25'){
                        this.label_7 = 'H2SO4 Tank';
                    }else if(this.val_1[6]=='dpl_1'){
                        this.label_7 = 'D501';
                    }else if(this.val_1[6]=='dpl_2'){
                        this.label_7 = 'E401';
                    }else if(this.val_1[6]=='dpl_3'){
                        this.label_7 = 'T601';
                    }else if(this.val_1[6]=='dpl_4'){
                        this.label_7 = 'D503';
                    }else if(this.val_1[6]=='dpl_5'){
                        this.label_7 = 'D504';
                    }else if(this.val_1[6]=='dpl_6'){
                        this.label_7 = 'T501';
                    }else if(this.val_1[6]=='dpl_7'){
                        this.label_7 = 'T502';
                    }else if(this.val_1[6]=='pit_level'){
                        this.label_7 = 'Pit Level';
                    }
                    ///////////////////////////////////////////////////////////
                    if(this.val_1[7]=='rdl_1'){
                        this.label_8 = 'D101 A';
                    }else if(this.val_1[7]=='rdl_2'){
                        this.label_8 = 'D101 B';
                    }else if(this.val_1[7]=='rdl_3'){
                        this.label_8 = 'D405 A';
                    }else if(this.val_1[7]=='rdl_4'){
                        this.label_8 = 'D405 B';
                    }else if(this.val_1[7]=='rdl_5'){
                        this.label_8 = 'D405 C';
                    }else if(this.val_1[7]=='rdl_6'){
                        this.label_8 = 'ALKALI (C401A)';
                    }else if(this.val_1[7]=='rdl_7'){
                        this.label_8 = 'ALKALI (C401B)';
                    }else if(this.val_1[7]=='rdl_8'){
                        this.label_8 = 'D402 A';
                    }else if(this.val_1[7]=='rdl_9'){
                        this.label_8 = 'D402 B';
                    }else if(this.val_1[7]=='rdl_10'){
                        this.label_8 = 'D402 C';
                    }else if(this.val_1[7]=='rdl_11'){
                        this.label_8 = 'D402 D';
                    }else if(this.val_1[7]=='rdl_12'){
                        this.label_8 = 'GLV';
                    }else if(this.val_1[7]=='rdl_13'){
                        this.label_8 = 'SETTLING A';
                    }else if(this.val_1[7]=='rdl_14'){
                        this.label_8 = 'SETTLING B';
                    }else if(this.val_1[7]=='rdl_15'){
                        this.label_8 = 'SETTLING C';
                    }else if(this.val_1[7]=='rdl_16'){
                        this.label_8 = 'METHANOL TANK#1';
                    }else if(this.val_1[7]=='rdl_17'){
                        this.label_8 = 'TAR TANK';
                    }else if(this.val_1[7]=='rdl_18'){
                        this.label_8 = 'GST TANK#1';
                    }else if(this.val_1[7]=='rdl_19'){
                        this.label_8 = 'METHANOL TANK#2';
                    }else if(this.val_1[7]=='rdl_20'){
                        this.label_8 = 'Slang Pool#1';
                    }else if(this.val_1[7]=='rdl_21'){
                        this.label_8 = 'Slag Pool#2';
                    }else if(this.val_1[7]=='rdl_22'){
                        this.label_8 = 'Slag Pool#3';
                    }else if(this.val_1[7]=='rdl_23'){
                        this.label_8 = 'PPRA';
                    }else if(this.val_1[7]=='rdl_24'){
                        this.label_8 = 'PPRB';
                    }else if(this.val_1[7]=='rdl_25'){
                        this.label_8 = 'H2SO4 Tank';
                    }else if(this.val_1[7]=='dpl_1'){
                        this.label_8 = 'D501';
                    }else if(this.val_1[7]=='dpl_2'){
                        this.label_8 = 'E401';
                    }else if(this.val_1[7]=='dpl_3'){
                        this.label_8 = 'T601';
                    }else if(this.val_1[7]=='dpl_4'){
                        this.label_8 = 'D503';
                    }else if(this.val_1[7]=='dpl_5'){
                        this.label_8 = 'D504';
                    }else if(this.val_1[7]=='dpl_6'){
                        this.label_8 = 'T501';
                    }else if(this.val_1[7]=='dpl_7'){
                        this.label_8 = 'T502';
                    }else if(this.val_1[7]=='pit_level'){
                        this.label_8 = 'Pit Level';
                    }
                    ///////////////////////////////////////////////////////////
                    if(this.val_1[8]=='rdl_1'){
                        this.label_9 = 'D101 A';
                    }else if(this.val_1[8]=='rdl_2'){
                        this.label_9 = 'D101 B';
                    }else if(this.val_1[8]=='rdl_3'){
                        this.label_9 = 'D405 A';
                    }else if(this.val_1[8]=='rdl_4'){
                        this.label_9 = 'D405 B';
                    }else if(this.val_1[8]=='rdl_5'){
                        this.label_9 = 'D405 C';
                    }else if(this.val_1[8]=='rdl_6'){
                        this.label_9 = 'ALKALI (C401A)';
                    }else if(this.val_1[8]=='rdl_7'){
                        this.label_9 = 'ALKALI (C401B)';
                    }else if(this.val_1[8]=='rdl_8'){
                        this.label_9 = 'D402 A';
                    }else if(this.val_1[8]=='rdl_9'){
                        this.label_9 = 'D402 B';
                    }else if(this.val_1[8]=='rdl_10'){
                        this.label_9 = 'D402 C';
                    }else if(this.val_1[8]=='rdl_11'){
                        this.label_9 = 'D402 D';
                    }else if(this.val_1[8]=='rdl_12'){
                        this.label_9 = 'GLV';
                    }else if(this.val_1[8]=='rdl_13'){
                        this.label_9 = 'SETTLING A';
                    }else if(this.val_1[8]=='rdl_14'){
                        this.label_9 = 'SETTLING B';
                    }else if(this.val_1[8]=='rdl_15'){
                        this.label_9 = 'SETTLING C';
                    }else if(this.val_1[8]=='rdl_16'){
                        this.label_9 = 'METHANOL TANK#1';
                    }else if(this.val_1[8]=='rdl_17'){
                        this.label_9 = 'TAR TANK';
                    }else if(this.val_1[8]=='rdl_18'){
                        this.label_9 = 'GST TANK#1';
                    }else if(this.val_1[8]=='rdl_19'){
                        this.label_9 = 'METHANOL TANK#2';
                    }else if(this.val_1[8]=='rdl_20'){
                        this.label_9 = 'Slang Pool#1';
                    }else if(this.val_1[8]=='rdl_21'){
                        this.label_9 = 'Slag Pool#2';
                    }else if(this.val_1[8]=='rdl_22'){
                        this.label_9 = 'Slag Pool#3';
                    }else if(this.val_1[8]=='rdl_23'){
                        this.label_9 = 'PPRA';
                    }else if(this.val_1[8]=='rdl_24'){
                        this.label_9 = 'PPRB';
                    }else if(this.val_1[8]=='rdl_25'){
                        this.label_9 = 'H2SO4 Tank';
                    }else if(this.val_1[8]=='dpl_1'){
                        this.label_9 = 'D501';
                    }else if(this.val_1[8]=='dpl_2'){
                        this.label_9 = 'E401';
                    }else if(this.val_1[8]=='dpl_3'){
                        this.label_9 = 'T601';
                    }else if(this.val_1[8]=='dpl_4'){
                        this.label_9 = 'D503';
                    }else if(this.val_1[8]=='dpl_5'){
                        this.label_9 = 'D504';
                    }else if(this.val_1[8]=='dpl_6'){
                        this.label_9 = 'T501';
                    }else if(this.val_1[8]=='dpl_7'){
                        this.label_9 = 'T502';
                    }else if(this.val_1[8]=='pit_level'){
                        this.label_9 = 'Pit Level';
                    }
                    ///////////////////////////////////////////////////////////
                    if(this.val_1[8]=='rdl_1'){
                        this.label_10 = 'D101 A';
                    }else if(this.val_1[9]=='rdl_2'){
                        this.label_10 = 'D101 B';
                    }else if(this.val_1[9]=='rdl_3'){
                        this.label_10 = 'D405 A';
                    }else if(this.val_1[9]=='rdl_4'){
                        this.label_10 = 'D405 B';
                    }else if(this.val_1[9]=='rdl_5'){
                        this.label_10 = 'D405 C';
                    }else if(this.val_1[9]=='rdl_6'){
                        this.label_10 = 'ALKALI (C401A)';
                    }else if(this.val_1[9]=='rdl_7'){
                        this.label_10 = 'ALKALI (C401B)';
                    }else if(this.val_1[9]=='rdl_8'){
                        this.label_10 = 'D402 A';
                    }else if(this.val_1[9]=='rdl_9'){
                        this.label_10 = 'D402 B';
                    }else if(this.val_1[9]=='rdl_10'){
                        this.label_10 = 'D402 C';
                    }else if(this.val_1[9]=='rdl_11'){
                        this.label_10 = 'D402 D';
                    }else if(this.val_1[9]=='rdl_12'){
                        this.label_10 = 'GLV';
                    }else if(this.val_1[9]=='rdl_13'){
                        this.label_10 = 'SETTLING A';
                    }else if(this.val_1[9]=='rdl_14'){
                        this.label_10 = 'SETTLING B';
                    }else if(this.val_1[9]=='rdl_15'){
                        this.label_10 = 'SETTLING C';
                    }else if(this.val_1[9]=='rdl_16'){
                        this.label_10 = 'METHANOL TANK#1';
                    }else if(this.val_1[9]=='rdl_17'){
                        this.label_10 = 'TAR TANK';
                    }else if(this.val_1[9]=='rdl_18'){
                        this.label_10 = 'GST TANK#1';
                    }else if(this.val_1[9]=='rdl_19'){
                        this.label_10 = 'METHANOL TANK#2';
                    }else if(this.val_1[9]=='rdl_20'){
                        this.label_10 = 'Slang Pool#1';
                    }else if(this.val_1[9]=='rdl_21'){
                        this.label_10 = 'Slag Pool#2';
                    }else if(this.val_1[9]=='rdl_22'){
                        this.label_10 = 'Slag Pool#3';
                    }else if(this.val_1[9]=='rdl_23'){
                        this.label_10 = 'PPRA';
                    }else if(this.val_1[9]=='rdl_24'){
                        this.label_10 = 'PPRB';
                    }else if(this.val_1[9]=='rdl_25'){
                        this.label_10 = 'H2SO4 Tank';
                    }else if(this.val_1[9]=='dpl_1'){
                        this.label_10 = 'D501';
                    }else if(this.val_1[9]=='dpl_2'){
                        this.label_10 = 'E401';
                    }else if(this.val_1[9]=='dpl_3'){
                        this.label_10 = 'T601';
                    }else if(this.val_1[9]=='dpl_4'){
                        this.label_10 = 'D503';
                    }else if(this.val_1[9]=='dpl_5'){
                        this.label_10 = 'D504';
                    }else if(this.val_1[9]=='dpl_6'){
                        this.label_10 = 'T501';
                    }else if(this.val_1[9]=='dpl_7'){
                        this.label_10 = 'T502';
                    }else if(this.val_1[9]=='pit_level'){
                        this.label_10 = 'Pit Level';
                    }
                    ///////////////////////////////////////////////////////////
                    if(this.val_1[10]=='rdl_1'){
                        this.label_11 = 'D101 A';
                    }else if(this.val_1[10]=='rdl_2'){
                        this.label_11 = 'D101 B';
                    }else if(this.val_1[10]=='rdl_3'){
                        this.label_11 = 'D405 A';
                    }else if(this.val_1[10]=='rdl_4'){
                        this.label_11 = 'D405 B';
                    }else if(this.val_1[10]=='rdl_5'){
                        this.label_11 = 'D405 C';
                    }else if(this.val_1[10]=='rdl_6'){
                        this.label_11 = 'ALKALI (C401A)';
                    }else if(this.val_1[10]=='rdl_7'){
                        this.label_11 = 'ALKALI (C401B)';
                    }else if(this.val_1[10]=='rdl_8'){
                        this.label_11 = 'D402 A';
                    }else if(this.val_1[10]=='rdl_9'){
                        this.label_11 = 'D402 B';
                    }else if(this.val_1[10]=='rdl_10'){
                        this.label_11 = 'D402 C';
                    }else if(this.val_1[10]=='rdl_11'){
                        this.label_11 = 'D402 D';
                    }else if(this.val_1[10]=='rdl_12'){
                        this.label_11 = 'GLV';
                    }else if(this.val_1[10]=='rdl_13'){
                        this.label_11 = 'SETTLING A';
                    }else if(this.val_1[10]=='rdl_14'){
                        this.label_11 = 'SETTLING B';
                    }else if(this.val_1[10]=='rdl_15'){
                        this.label_11 = 'SETTLING C';
                    }else if(this.val_1[10]=='rdl_16'){
                        this.label_11 = 'METHANOL TANK#1';
                    }else if(this.val_1[10]=='rdl_17'){
                        this.label_11 = 'TAR TANK';
                    }else if(this.val_1[10]=='rdl_18'){
                        this.label_11 = 'GST TANK#1';
                    }else if(this.val_1[10]=='rdl_19'){
                        this.label_11 = 'METHANOL TANK#2';
                    }else if(this.val_1[10]=='rdl_20'){
                        this.label_11 = 'Slang Pool#1';
                    }else if(this.val_1[10]=='rdl_21'){
                        this.label_11 = 'Slag Pool#2';
                    }else if(this.val_1[10]=='rdl_22'){
                        this.label_11 = 'Slag Pool#3';
                    }else if(this.val_1[10]=='rdl_23'){
                        this.label_11 = 'PPRA';
                    }else if(this.val_1[10]=='rdl_24'){
                        this.label_11 = 'PPRB';
                    }else if(this.val_1[10]=='rdl_25'){
                        this.label_11 = 'H2SO4 Tank';
                    }else if(this.val_1[10]=='dpl_1'){
                        this.label_11 = 'D501';
                    }else if(this.val_1[10]=='dpl_2'){
                        this.label_11 = 'E401';
                    }else if(this.val_1[10]=='dpl_3'){
                        this.label_11 = 'T601';
                    }else if(this.val_1[10]=='dpl_4'){
                        this.label_11 = 'D503';
                    }else if(this.val_1[10]=='dpl_5'){
                        this.label_11 = 'D504';
                    }else if(this.val_1[10]=='dpl_6'){
                        this.label_11 = 'T501';
                    }else if(this.val_1[10]=='dpl_7'){
                        this.label_11 = 'T502';
                    }else if(this.val_1[10]=='pit_level'){
                        this.label_11 = 'Pit Level';
                    }
                    ///////////////////////////////////////////////////////////
                    if(this.val_1[11]=='rdl_1'){
                        this.label_12 = 'D101 A';
                    }else if(this.val_1[11]=='rdl_2'){
                        this.label_12 = 'D101 B';
                    }else if(this.val_1[11]=='rdl_3'){
                        this.label_12 = 'D405 A';
                    }else if(this.val_1[11]=='rdl_4'){
                        this.label_12 = 'D405 B';
                    }else if(this.val_1[11]=='rdl_5'){
                        this.label_12 = 'D405 C';
                    }else if(this.val_1[11]=='rdl_6'){
                        this.label_12 = 'ALKALI (C401A)';
                    }else if(this.val_1[11]=='rdl_7'){
                        this.label_12 = 'ALKALI (C401B)';
                    }else if(this.val_1[11]=='rdl_8'){
                        this.label_12 = 'D402 A';
                    }else if(this.val_1[11]=='rdl_9'){
                        this.label_12 = 'D402 B';
                    }else if(this.val_1[11]=='rdl_10'){
                        this.label_12 = 'D402 C';
                    }else if(this.val_1[11]=='rdl_11'){
                        this.label_12 = 'D402 D';
                    }else if(this.val_1[11]=='rdl_12'){
                        this.label_12 = 'GLV';
                    }else if(this.val_1[11]=='rdl_13'){
                        this.label_12 = 'SETTLING A';
                    }else if(this.val_1[11]=='rdl_14'){
                        this.label_12 = 'SETTLING B';
                    }else if(this.val_1[11]=='rdl_15'){
                        this.label_12 = 'SETTLING C';
                    }else if(this.val_1[11]=='rdl_16'){
                        this.label_12 = 'METHANOL TANK#1';
                    }else if(this.val_1[11]=='rdl_17'){
                        this.label_12 = 'TAR TANK';
                    }else if(this.val_1[11]=='rdl_18'){
                        this.label_12 = 'GST TANK#1';
                    }else if(this.val_1[11]=='rdl_19'){
                        this.label_12 = 'METHANOL TANK#2';
                    }else if(this.val_1[11]=='rdl_20'){
                        this.label_12 = 'Slang Pool#1';
                    }else if(this.val_1[11]=='rdl_21'){
                        this.label_12 = 'Slag Pool#2';
                    }else if(this.val_1[11]=='rdl_22'){
                        this.label_12 = 'Slag Pool#3';
                    }else if(this.val_1[11]=='rdl_23'){
                        this.label_12 = 'PPRA';
                    }else if(this.val_1[11]=='rdl_24'){
                        this.label_12 = 'PPRB';
                    }else if(this.val_1[11]=='rdl_25'){
                        this.label_12 = 'H2SO4 Tank';
                    }else if(this.val_1[11]=='dpl_1'){
                        this.label_12 = 'D501';
                    }else if(this.val_1[11]=='dpl_2'){
                        this.label_12 = 'E401';
                    }else if(this.val_1[11]=='dpl_3'){
                        this.label_12 = 'T601';
                    }else if(this.val_1[11]=='dpl_4'){
                        this.label_12 = 'D503';
                    }else if(this.val_1[11]=='dpl_5'){
                        this.label_12 = 'D504';
                    }else if(this.val_1[11]=='dpl_6'){
                        this.label_12 = 'T501';
                    }else if(this.val_1[11]=='dpl_7'){
                        this.label_12 = 'T502';
                    }else if(this.val_1[11]=='pit_level'){
                        this.label_12 = 'Pit Level';
                    }
                    ///////////////////////////////////////////////////////////
                    if(this.val_1[12]=='rdl_1'){
                        this.label_13 = 'D101 A';
                    }else if(this.val_1[12]=='rdl_2'){
                        this.label_13 = 'D101 B';
                    }else if(this.val_1[12]=='rdl_3'){
                        this.label_13 = 'D405 A';
                    }else if(this.val_1[12]=='rdl_4'){
                        this.label_13 = 'D405 B';
                    }else if(this.val_1[12]=='rdl_5'){
                        this.label_13 = 'D405 C';
                    }else if(this.val_1[12]=='rdl_6'){
                        this.label_13 = 'ALKALI (C401A)';
                    }else if(this.val_1[12]=='rdl_7'){
                        this.label_13 = 'ALKALI (C401B)';
                    }else if(this.val_1[12]=='rdl_8'){
                        this.label_13 = 'D402 A';
                    }else if(this.val_1[12]=='rdl_9'){
                        this.label_13 = 'D402 B';
                    }else if(this.val_1[12]=='rdl_10'){
                        this.label_13 = 'D402 C';
                    }else if(this.val_1[12]=='rdl_11'){
                        this.label_13 = 'D402 D';
                    }else if(this.val_1[12]=='rdl_12'){
                        this.label_13 = 'GLV';
                    }else if(this.val_1[12]=='rdl_13'){
                        this.label_13 = 'SETTLING A';
                    }else if(this.val_1[12]=='rdl_14'){
                        this.label_13 = 'SETTLING B';
                    }else if(this.val_1[12]=='rdl_15'){
                        this.label_13 = 'SETTLING C';
                    }else if(this.val_1[12]=='rdl_16'){
                        this.label_13 = 'METHANOL TANK#1';
                    }else if(this.val_1[12]=='rdl_17'){
                        this.label_13 = 'TAR TANK';
                    }else if(this.val_1[12]=='rdl_18'){
                        this.label_13 = 'GST TANK#1';
                    }else if(this.val_1[12]=='rdl_19'){
                        this.label_13 = 'METHANOL TANK#2';
                    }else if(this.val_1[12]=='rdl_20'){
                        this.label_13 = 'Slang Pool#1';
                    }else if(this.val_1[12]=='rdl_21'){
                        this.label_13 = 'Slag Pool#2';
                    }else if(this.val_1[12]=='rdl_22'){
                        this.label_13 = 'Slag Pool#3';
                    }else if(this.val_1[12]=='rdl_23'){
                        this.label_13 = 'PPRA';
                    }else if(this.val_1[12]=='rdl_24'){
                        this.label_13 = 'PPRB';
                    }else if(this.val_1[12]=='rdl_25'){
                        this.label_13 = 'H2SO4 Tank';
                    }else if(this.val_1[12]=='dpl_1'){
                        this.label_13 = 'D501';
                    }else if(this.val_1[12]=='dpl_2'){
                        this.label_13 = 'E401';
                    }else if(this.val_1[12]=='dpl_3'){
                        this.label_13 = 'T601';
                    }else if(this.val_1[12]=='dpl_4'){
                        this.label_13 = 'D503';
                    }else if(this.val_1[12]=='dpl_5'){
                        this.label_13 = 'D504';
                    }else if(this.val_1[12]=='dpl_6'){
                        this.label_13 = 'T501';
                    }else if(this.val_1[12]=='dpl_7'){
                        this.label_13 = 'T502';
                    }else if(this.val_1[12]=='pit_level'){
                        this.label_13 = 'Pit Level';
                    }
                    ///////////////////////////////////////////////////////////
                    if(this.val_1[13]=='rdl_1'){
                        this.label_14 = 'D101 A';
                    }else if(this.val_1[13]=='rdl_2'){
                        this.label_14 = 'D101 B';
                    }else if(this.val_1[13]=='rdl_3'){
                        this.label_14 = 'D405 A';
                    }else if(this.val_1[13]=='rdl_4'){
                        this.label_14 = 'D405 B';
                    }else if(this.val_1[13]=='rdl_5'){
                        this.label_14 = 'D405 C';
                    }else if(this.val_1[13]=='rdl_6'){
                        this.label_14 = 'ALKALI (C401A)';
                    }else if(this.val_1[13]=='rdl_7'){
                        this.label_14 = 'ALKALI (C401B)';
                    }else if(this.val_1[13]=='rdl_8'){
                        this.label_14 = 'D402 A';
                    }else if(this.val_1[13]=='rdl_9'){
                        this.label_14 = 'D402 B';
                    }else if(this.val_1[13]=='rdl_10'){
                        this.label_14 = 'D402 C';
                    }else if(this.val_1[13]=='rdl_11'){
                        this.label_14 = 'D402 D';
                    }else if(this.val_1[13]=='rdl_12'){
                        this.label_14 = 'GLV';
                    }else if(this.val_1[13]=='rdl_13'){
                        this.label_14 = 'SETTLING A';
                    }else if(this.val_1[13]=='rdl_14'){
                        this.label_14 = 'SETTLING B';
                    }else if(this.val_1[13]=='rdl_15'){
                        this.label_14 = 'SETTLING C';
                    }else if(this.val_1[13]=='rdl_16'){
                        this.label_14 = 'METHANOL TANK#1';
                    }else if(this.val_1[13]=='rdl_17'){
                        this.label_14 = 'TAR TANK';
                    }else if(this.val_1[13]=='rdl_18'){
                        this.label_14 = 'GST TANK#1';
                    }else if(this.val_1[13]=='rdl_19'){
                        this.label_14 = 'METHANOL TANK#2';
                    }else if(this.val_1[13]=='rdl_20'){
                        this.label_14 = 'Slang Pool#1';
                    }else if(this.val_1[13]=='rdl_21'){
                        this.label_14 = 'Slag Pool#2';
                    }else if(this.val_1[13]=='rdl_22'){
                        this.label_14 = 'Slag Pool#3';
                    }else if(this.val_1[13]=='rdl_23'){
                        this.label_14 = 'PPRA';
                    }else if(this.val_1[13]=='rdl_24'){
                        this.label_14 = 'PPRB';
                    }else if(this.val_1[13]=='rdl_25'){
                        this.label_14 = 'H2SO4 Tank';
                    }else if(this.val_1[13]=='dpl_1'){
                        this.label_14 = 'D501';
                    }else if(this.val_1[13]=='dpl_2'){
                        this.label_14 = 'E401';
                    }else if(this.val_1[13]=='dpl_3'){
                        this.label_14 = 'T601';
                    }else if(this.val_1[13]=='dpl_4'){
                        this.label_14 = 'D503';
                    }else if(this.val_1[13]=='dpl_5'){
                        this.label_14 = 'D504';
                    }else if(this.val_1[13]=='dpl_6'){
                        this.label_14 = 'T501';
                    }else if(this.val_1[13]=='dpl_7'){
                        this.label_14 = 'T502';
                    }else if(this.val_1[13]=='pit_level'){
                        this.label_14 = 'Pit Level';
                    }
                    ///////////////////////////////////////////////////////////
                    if(this.val_1[14]=='rdl_1'){
                        this.label_15 = 'D101 A';
                    }else if(this.val_1[14]=='rdl_2'){
                        this.label_15 = 'D101 B';
                    }else if(this.val_1[14]=='rdl_3'){
                        this.label_15 = 'D405 A';
                    }else if(this.val_1[14]=='rdl_4'){
                        this.label_15 = 'D405 B';
                    }else if(this.val_1[14]=='rdl_5'){
                        this.label_15 = 'D405 C';
                    }else if(this.val_1[14]=='rdl_6'){
                        this.label_15 = 'ALKALI (C401A)';
                    }else if(this.val_1[14]=='rdl_7'){
                        this.label_15 = 'ALKALI (C401B)';
                    }else if(this.val_1[14]=='rdl_8'){
                        this.label_15 = 'D402 A';
                    }else if(this.val_1[14]=='rdl_9'){
                        this.label_15 = 'D402 B';
                    }else if(this.val_1[14]=='rdl_10'){
                        this.label_15 = 'D402 C';
                    }else if(this.val_1[14]=='rdl_11'){
                        this.label_15 = 'D402 D';
                    }else if(this.val_1[14]=='rdl_12'){
                        this.label_15 = 'GLV';
                    }else if(this.val_1[14]=='rdl_13'){
                        this.label_15 = 'SETTLING A';
                    }else if(this.val_1[14]=='rdl_14'){
                        this.label_15 = 'SETTLING B';
                    }else if(this.val_1[14]=='rdl_15'){
                        this.label_15 = 'SETTLING C';
                    }else if(this.val_1[14]=='rdl_16'){
                        this.label_15 = 'METHANOL TANK#1';
                    }else if(this.val_1[14]=='rdl_17'){
                        this.label_15 = 'TAR TANK';
                    }else if(this.val_1[14]=='rdl_18'){
                        this.label_15 = 'GST TANK#1';
                    }else if(this.val_1[14]=='rdl_19'){
                        this.label_15 = 'METHANOL TANK#2';
                    }else if(this.val_1[14]=='rdl_20'){
                        this.label_15 = 'Slang Pool#1';
                    }else if(this.val_1[14]=='rdl_21'){
                        this.label_15 = 'Slag Pool#2';
                    }else if(this.val_1[14]=='rdl_22'){
                        this.label_15 = 'Slag Pool#3';
                    }else if(this.val_1[14]=='rdl_23'){
                        this.label_15 = 'PPRA';
                    }else if(this.val_1[14]=='rdl_24'){
                        this.label_15 = 'PPRB';
                    }else if(this.val_1[14]=='rdl_25'){
                        this.label_15 = 'H2SO4 Tank';
                    }else if(this.val_1[14]=='dpl_1'){
                        this.label_15 = 'D501';
                    }else if(this.val_1[14]=='dpl_2'){
                        this.label_15 = 'E401';
                    }else if(this.val_1[14]=='dpl_3'){
                        this.label_15 = 'T601';
                    }else if(this.val_1[14]=='dpl_4'){
                        this.label_15 = 'D503';
                    }else if(this.val_1[14]=='dpl_5'){
                        this.label_15 = 'D504';
                    }else if(this.val_1[14]=='dpl_6'){
                        this.label_15 = 'T501';
                    }else if(this.val_1[14]=='dpl_7'){
                        this.label_15 = 'T502';
                    }else if(this.val_1[14]=='pit_level'){
                        this.label_15 = 'Pit Level';
                    }
                    ///////////////////////////////////////////////////////////
                    if(this.val_1[15]=='rdl_1'){
                        this.label_16 = 'D101 A';
                    }else if(this.val_1[15]=='rdl_2'){
                        this.label_16 = 'D101 B';
                    }else if(this.val_1[15]=='rdl_3'){
                        this.label_16 = 'D405 A';
                    }else if(this.val_1[15]=='rdl_4'){
                        this.label_16 = 'D405 B';
                    }else if(this.val_1[15]=='rdl_5'){
                        this.label_16 = 'D405 C';
                    }else if(this.val_1[15]=='rdl_6'){
                        this.label_16 = 'ALKALI (C401A)';
                    }else if(this.val_1[15]=='rdl_7'){
                        this.label_16 = 'ALKALI (C401B)';
                    }else if(this.val_1[15]=='rdl_8'){
                        this.label_16 = 'D402 A';
                    }else if(this.val_1[15]=='rdl_9'){
                        this.label_16 = 'D402 B';
                    }else if(this.val_1[15]=='rdl_10'){
                        this.label_16 = 'D402 C';
                    }else if(this.val_1[15]=='rdl_11'){
                        this.label_16 = 'D402 D';
                    }else if(this.val_1[15]=='rdl_12'){
                        this.label_16 = 'GLV';
                    }else if(this.val_1[15]=='rdl_13'){
                        this.label_16 = 'SETTLING A';
                    }else if(this.val_1[15]=='rdl_14'){
                        this.label_16 = 'SETTLING B';
                    }else if(this.val_1[15]=='rdl_15'){
                        this.label_16 = 'SETTLING C';
                    }else if(this.val_1[15]=='rdl_16'){
                        this.label_16 = 'METHANOL TANK#1';
                    }else if(this.val_1[15]=='rdl_17'){
                        this.label_16 = 'TAR TANK';
                    }else if(this.val_1[15]=='rdl_18'){
                        this.label_16 = 'GST TANK#1';
                    }else if(this.val_1[15]=='rdl_19'){
                        this.label_16 = 'METHANOL TANK#2';
                    }else if(this.val_1[15]=='rdl_20'){
                        this.label_16 = 'Slang Pool#1';
                    }else if(this.val_1[15]=='rdl_21'){
                        this.label_16 = 'Slag Pool#2';
                    }else if(this.val_1[15]=='rdl_22'){
                        this.label_16 = 'Slag Pool#3';
                    }else if(this.val_1[15]=='rdl_23'){
                        this.label_16 = 'PPRA';
                    }else if(this.val_1[15]=='rdl_24'){
                        this.label_16 = 'PPRB';
                    }else if(this.val_1[15]=='rdl_25'){
                        this.label_16 = 'H2SO4 Tank';
                    }else if(this.val_1[15]=='dpl_1'){
                        this.label_16 = 'D501';
                    }else if(this.val_1[15]=='dpl_2'){
                        this.label_16 = 'E401';
                    }else if(this.val_1[15]=='dpl_3'){
                        this.label_16 = 'T601';
                    }else if(this.val_1[15]=='dpl_4'){
                        this.label_16 = 'D503';
                    }else if(this.val_1[15]=='dpl_5'){
                        this.label_16 = 'D504';
                    }else if(this.val_1[15]=='dpl_6'){
                        this.label_16 = 'T501';
                    }else if(this.val_1[15]=='dpl_7'){
                        this.label_16 = 'T502';
                    }else if(this.val_1[15]=='pit_level'){
                        this.label_16 = 'Pit Level';
                    }
                    // For Volume
                     if(this.val_1[0]=='rdl_1'){
                        this.vol_label_1 = 'D101 A';
                    }else if(this.val_1[0]=='rdl_2'){
                        this.vol_label_1 = 'D101 B';
                    }else if(this.val_1[0]=='rdl_3'){
                        this.vol_label_1 = 'D405 A';
                    }else if(this.val_1[0]=='rdl_4'){
                        this.vol_label_1 = 'D405 B';
                    }else if(this.val_1[0]=='rdl_5'){
                        this.vol_label_1 = 'D405 C';
                    }else if(this.val_1[0]=='rdl_6'){
                        this.vol_label_1 = 'ALKALI (C401A)';
                    }else if(this.val_1[0]=='rdl_7'){
                        this.vol_label_1 = 'ALKALI (C401B)';
                    }else if(this.val_1[0]=='rdl_8'){
                        this.vol_label_1 = 'D402 A';
                    }else if(this.val_1[0]=='rdl_9'){
                        this.vol_label_1 = 'D402 B';
                    }else if(this.val_1[0]=='rdl_10'){
                        this.vol_label_1 = 'D402 C';
                    }else if(this.val_1[0]=='rdl_11'){
                        this.vol_label_1 = 'D402 D';
                    }else if(this.val_1[0]=='rdl_12'){
                        this.vol_label_1 = 'GLV';
                    }else if(this.val_1[0]=='rdl_13'){
                        this.vol_label_1 = 'SETTLING A';
                    }else if(this.val_1[0]=='rdl_14'){
                        this.vol_label_1 = 'SETTLING B';
                    }else if(this.val_1[0]=='rdl_15'){
                        this.vol_label_1 = 'SETTLING C';
                    }else if(this.val_1[0]=='rdl_16'){
                        this.vol_label_1 = 'METHANOL TANK#1';
                    }else if(this.val_1[0]=='rdl_17'){
                        this.vol_label_1 = 'TAR TANK';
                    }else if(this.val_1[0]=='rdl_18'){
                        this.vol_label_1 = 'GST TANK#1';
                    }else if(this.val_1[0]=='rdl_19'){
                        this.vol_label_1 = 'METHANOL TANK#2';
                    }else if(this.val_1[0]=='rdl_20'){
                        this.vol_label_1 = 'Slang Pool#1';
                    }else if(this.val_1[0]=='rdl_21'){
                        this.vol_label_1 = 'Slag Pool#2';
                    }else if(this.val_1[0]=='rdl_22'){
                        this.vol_label_1 = 'Slag Pool#3';
                    }else if(this.val_1[0]=='rdl_23'){
                        this.vol_label_1 = 'PPRA';
                    }else if(this.val_1[0]=='rdl_24'){
                        this.vol_label_1 = 'PPRB';
                    }else if(this.val_1[0]=='rdl_25'){
                        this.vol_label_1 = 'H2SO4 Tank';
                    }else if(this.val_1[0]=='dpl_1'){
                        this.vol_label_1 = 'D501';
                    }else if(this.val_1[0]=='dpl_2'){
                        this.vol_label_1 = 'E401';
                    }else if(this.val_1[0]=='dpl_3'){
                        this.vol_label_1 = 'T601';
                    }else if(this.val_1[0]=='dpl_4'){
                        this.vol_label_1 = 'D503';
                    }else if(this.val_1[0]=='dpl_5'){
                        this.vol_label_1 = 'D504';
                    }else if(this.val_1[0]=='dpl_6'){
                        this.vol_label_1 = 'T501';
                    }else if(this.val_1[0]=='dpl_7'){
                        this.vol_label_1 = 'T502';
                    }else if(this.val_1[0]=='pit_level'){
                        this.vol_label_1 = 'Pit Vol';
                    }
                    ///////////////////////////////////////////////////////////
                    if(this.val_1[1]=='rdl_1'){
                        this.vol_label_2 = 'D101 A';
                    }else if(this.val_1[1]=='rdl_2'){
                        this.vol_label_2 = 'D101 B';
                    }else if(this.val_1[1]=='rdl_3'){
                        this.vol_label_2 = 'D405 A';
                    }else if(this.val_1[1]=='rdl_4'){
                        this.vol_label_2 = 'D405 B';
                    }else if(this.val_1[1]=='rdl_5'){
                        this.vol_label_2 = 'D405 C';
                    }else if(this.val_1[1]=='rdl_6'){
                        this.vol_label_2 = 'ALKALI (C401A)';
                    }else if(this.val_1[1]=='rdl_7'){
                        this.vol_label_2 = 'ALKALI (C401B)';
                    }else if(this.val_1[1]=='rdl_8'){
                        this.vol_label_2 = 'D402 A';
                    }else if(this.val_1[1]=='rdl_9'){
                        this.vol_label_2 = 'D402 B';
                    }else if(this.val_1[1]=='rdl_10'){
                        this.vol_label_2 = 'D402 C';
                    }else if(this.val_1[1]=='rdl_11'){
                        this.vol_label_2 = 'D402 D';
                    }else if(this.val_1[1]=='rdl_12'){
                        this.vol_label_2 = 'GLV';
                    }else if(this.val_1[1]=='rdl_13'){
                        this.vol_label_2 = 'SETTLING A';
                    }else if(this.val_1[1]=='rdl_14'){
                        this.vol_label_2 = 'SETTLING B';
                    }else if(this.val_1[1]=='rdl_15'){
                        this.vol_label_2 = 'SETTLING C';
                    }else if(this.val_1[1]=='rdl_16'){
                        this.vol_label_2 = 'METHANOL TANK#1';
                    }else if(this.val_1[1]=='rdl_17'){
                        this.vol_label_2 = 'TAR TANK';
                    }else if(this.val_1[1]=='rdl_18'){
                        this.vol_label_2 = 'GST TANK#1';
                    }else if(this.val_1[1]=='rdl_19'){
                        this.vol_label_2 = 'METHANOL TANK#2';
                    }else if(this.val_1[1]=='rdl_20'){
                        this.vol_label_2 = 'Slang Pool#1';
                    }else if(this.val_1[1]=='rdl_21'){
                        this.vol_label_2 = 'Slag Pool#2';
                    }else if(this.val_1[1]=='rdl_22'){
                        this.vol_label_2 = 'Slag Pool#3';
                    }else if(this.val_1[1]=='rdl_23'){
                        this.vol_label_2 = 'PPRA';
                    }else if(this.val_1[1]=='rdl_24'){
                        this.vol_label_2 = 'PPRB';
                    }else if(this.val_1[1]=='rdl_25'){
                        this.vol_label_2 = 'H2SO4 Tank';
                    }else if(this.val_1[1]=='dpl_1'){
                        this.vol_label_2 = 'D501';
                    }else if(this.val_1[1]=='dpl_2'){
                        this.vol_label_2 = 'E401';
                    }else if(this.val_1[1]=='dpl_3'){
                        this.vol_label_2 = 'T601';
                    }else if(this.val_1[1]=='dpl_4'){
                        this.vol_label_2 = 'D503';
                    }else if(this.val_1[1]=='dpl_5'){
                        this.vol_label_2 = 'D504';
                    }else if(this.val_1[1]=='dpl_6'){
                        this.vol_label_2 = 'T501';
                    }else if(this.val_1[1]=='dpl_7'){
                        this.vol_label_2 = 'T502';
                    }else if(this.val_1[1]=='pit_level'){
                        this.vol_label_2 = 'Pit Vol';
                    }
                    ///////////////////////////////////////////////////////////
                    if(this.val_1[2]=='rdl_1'){
                        this.vol_label_3 = 'D101 A';
                    }else if(this.val_1[2]=='rdl_2'){
                        this.vol_label_3 = 'D101 B';
                    }else if(this.val_1[2]=='rdl_3'){
                        this.vol_label_3 = 'D405 A';
                    }else if(this.val_1[2]=='rdl_4'){
                        this.vol_label_3 = 'D405 B';
                    }else if(this.val_1[2]=='rdl_5'){
                        this.vol_label_3 = 'D405 C';
                    }else if(this.val_1[2]=='rdl_6'){
                        this.vol_label_3 = 'ALKALI (C401A)';
                    }else if(this.val_1[2]=='rdl_7'){
                        this.vol_label_3 = 'ALKALI (C401B)';
                    }else if(this.val_1[2]=='rdl_8'){
                        this.vol_label_3 = 'D402 A';
                    }else if(this.val_1[2]=='rdl_9'){
                        this.vol_label_3 = 'D402 B';
                    }else if(this.val_1[2]=='rdl_10'){
                        this.vol_label_3 = 'D402 C';
                    }else if(this.val_1[2]=='rdl_11'){
                        this.vol_label_3 = 'D402 D';
                    }else if(this.val_1[2]=='rdl_12'){
                        this.vol_label_3 = 'GLV';
                    }else if(this.val_1[2]=='rdl_13'){
                        this.vol_label_3 = 'SETTLING A';
                    }else if(this.val_1[2]=='rdl_14'){
                        this.vol_label_3 = 'SETTLING B';
                    }else if(this.val_1[2]=='rdl_15'){
                        this.vol_label_3 = 'SETTLING C';
                    }else if(this.val_1[2]=='rdl_16'){
                        this.vol_label_3 = 'METHANOL TANK#1';
                    }else if(this.val_1[2]=='rdl_17'){
                        this.vol_label_3 = 'TAR TANK';
                    }else if(this.val_1[2]=='rdl_18'){
                        this.vol_label_3 = 'GST TANK#1';
                    }else if(this.val_1[2]=='rdl_19'){
                        this.vol_label_3 = 'METHANOL TANK#2';
                    }else if(this.val_1[2]=='rdl_20'){
                        this.vol_label_3 = 'Slang Pool#1';
                    }else if(this.val_1[2]=='rdl_21'){
                        this.vol_label_3 = 'Slag Pool#2';
                    }else if(this.val_1[2]=='rdl_22'){
                        this.vol_label_3 = 'Slag Pool#3';
                    }else if(this.val_1[2]=='rdl_23'){
                        this.vol_label_3 = 'PPRA';
                    }else if(this.val_1[2]=='rdl_24'){
                        this.vol_label_3 = 'PPRB';
                    }else if(this.val_1[2]=='rdl_25'){
                        this.vol_label_3 = 'H2SO4 Tank';
                    }else if(this.val_1[2]=='dpl_1'){
                        this.vol_label_3 = 'D501';
                    }else if(this.val_1[2]=='dpl_2'){
                        this.vol_label_3 = 'E401';
                    }else if(this.val_1[2]=='dpl_3'){
                        this.vol_label_3 = 'T601';
                    }else if(this.val_1[2]=='dpl_4'){
                        this.vol_label_3 = 'D503';
                    }else if(this.val_1[2]=='dpl_5'){
                        this.vol_label_3 = 'D504';
                    }else if(this.val_1[2]=='dpl_6'){
                        this.vol_label_3 = 'T501';
                    }else if(this.val_1[2]=='dpl_7'){
                        this.vol_label_3 = 'T502';
                    }else if(this.val_1[2]=='pit_level'){
                        this.vol_label_3 = 'Pit Vol';
                    }
                    ///////////////////////////////////////////////////////////
                    if(this.val_1[3]=='rdl_1'){
                        this.vol_label_4 = 'D101 A';
                    }else if(this.val_1[3]=='rdl_2'){
                        this.vol_label_4 = 'D101 B';
                    }else if(this.val_1[3]=='rdl_3'){
                        this.vol_label_4 = 'D405 A';
                    }else if(this.val_1[3]=='rdl_4'){
                        this.vol_label_4 = 'D405 B';
                    }else if(this.val_1[3]=='rdl_5'){
                        this.vol_label_4 = 'D405 C';
                    }else if(this.val_1[3]=='rdl_6'){
                        this.vol_label_4 = 'ALKALI (C401A)';
                    }else if(this.val_1[3]=='rdl_7'){
                        this.vol_label_4 = 'ALKALI (C401B)';
                    }else if(this.val_1[3]=='rdl_8'){
                        this.vol_label_4 = 'D402 A';
                    }else if(this.val_1[3]=='rdl_9'){
                        this.vol_label_4 = 'D402 B';
                    }else if(this.val_1[3]=='rdl_10'){
                        this.vol_label_4 = 'D402 C';
                    }else if(this.val_1[3]=='rdl_11'){
                        this.vol_label_4 = 'D402 D';
                    }else if(this.val_1[3]=='rdl_12'){
                        this.vol_label_4 = 'GLV';
                    }else if(this.val_1[3]=='rdl_13'){
                        this.vol_label_4 = 'SETTLING A';
                    }else if(this.val_1[3]=='rdl_14'){
                        this.vol_label_4 = 'SETTLING B';
                    }else if(this.val_1[3]=='rdl_15'){
                        this.vol_label_4 = 'SETTLING C';
                    }else if(this.val_1[3]=='rdl_16'){
                        this.vol_label_4 = 'METHANOL TANK#1';
                    }else if(this.val_1[3]=='rdl_17'){
                        this.vol_label_4 = 'TAR TANK';
                    }else if(this.val_1[3]=='rdl_18'){
                        this.vol_label_4 = 'GST TANK#1';
                    }else if(this.val_1[3]=='rdl_19'){
                        this.vol_label_4 = 'METHANOL TANK#2';
                    }else if(this.val_1[3]=='rdl_20'){
                        this.vol_label_4 = 'Slang Pool#1';
                    }else if(this.val_1[3]=='rdl_21'){
                        this.vol_label_4 = 'Slag Pool#2';
                    }else if(this.val_1[3]=='rdl_22'){
                        this.vol_label_4 = 'Slag Pool#3';
                    }else if(this.val_1[3]=='rdl_23'){
                        this.vol_label_4 = 'PPRA';
                    }else if(this.val_1[3]=='rdl_24'){
                        this.vol_label_4 = 'PPRB';
                    }else if(this.val_1[3]=='rdl_25'){
                        this.vol_label_4 = 'H2SO4 Tank';
                    }else if(this.val_1[3]=='dpl_1'){
                        this.vol_label_4 = 'D501';
                    }else if(this.val_1[3]=='dpl_2'){
                        this.vol_label_4 = 'E401';
                    }else if(this.val_1[3]=='dpl_3'){
                        this.vol_label_4 = 'T601';
                    }else if(this.val_1[3]=='dpl_4'){
                        this.vol_label_4 = 'D503';
                    }else if(this.val_1[3]=='dpl_5'){
                        this.vol_label_4 = 'D504';
                    }else if(this.val_1[3]=='dpl_6'){
                        this.vol_label_4 = 'T501';
                    }else if(this.val_1[3]=='dpl_7'){
                        this.vol_label_4 = 'T502';
                    }else if(this.val_1[3]=='pit_level'){
                        this.vol_label_4 = 'Pit Vol';
                    }
                    ///////////////////////////////////////////////////////////
                    if(this.val_1[4]=='rdl_1'){
                        this.vol_label_5 = 'D101 A';
                    }else if(this.val_1[4]=='rdl_2'){
                        this.vol_label_5 = 'D101 B';
                    }else if(this.val_1[4]=='rdl_3'){
                        this.vol_label_5 = 'D405 A';
                    }else if(this.val_1[4]=='rdl_4'){
                        this.vol_label_5 = 'D405 B';
                    }else if(this.val_1[4]=='rdl_5'){
                        this.vol_label_5 = 'D405 C';
                    }else if(this.val_1[4]=='rdl_6'){
                        this.vol_label_5 = 'ALKALI (C401A)';
                    }else if(this.val_1[4]=='rdl_7'){
                        this.vol_label_5 = 'ALKALI (C401B)';
                    }else if(this.val_1[4]=='rdl_8'){
                        this.vol_label_5 = 'D402 A';
                    }else if(this.val_1[4]=='rdl_9'){
                        this.vol_label_5 = 'D402 B';
                    }else if(this.val_1[4]=='rdl_10'){
                        this.vol_label_5 = 'D402 C';
                    }else if(this.val_1[4]=='rdl_11'){
                        this.vol_label_5 = 'D402 D';
                    }else if(this.val_1[4]=='rdl_12'){
                        this.vol_label_5 = 'GLV';
                    }else if(this.val_1[4]=='rdl_13'){
                        this.vol_label_5 = 'SETTLING A';
                    }else if(this.val_1[4]=='rdl_14'){
                        this.vol_label_5 = 'SETTLING B';
                    }else if(this.val_1[4]=='rdl_15'){
                        this.vol_label_5 = 'SETTLING C';
                    }else if(this.val_1[4]=='rdl_16'){
                        this.vol_label_5 = 'METHANOL TANK#1';
                    }else if(this.val_1[4]=='rdl_17'){
                        this.vol_label_5 = 'TAR TANK';
                    }else if(this.val_1[4]=='rdl_18'){
                        this.vol_label_5 = 'GST TANK#1';
                    }else if(this.val_1[4]=='rdl_19'){
                        this.vol_label_5 = 'METHANOL TANK#2';
                    }else if(this.val_1[4]=='rdl_20'){
                        this.vol_label_5 = 'Slang Pool#1';
                    }else if(this.val_1[4]=='rdl_21'){
                        this.vol_label_5 = 'Slag Pool#2';
                    }else if(this.val_1[4]=='rdl_22'){
                        this.vol_label_5 = 'Slag Pool#3';
                    }else if(this.val_1[4]=='rdl_23'){
                        this.vol_label_5 = 'PPRA';
                    }else if(this.val_1[4]=='rdl_24'){
                        this.vol_label_5 = 'PPRB';
                    }else if(this.val_1[4]=='rdl_25'){
                        this.vol_label_5 = 'H2SO4 Tank';
                    }else if(this.val_1[4]=='dpl_1'){
                        this.vol_label_5 = 'D501';
                    }else if(this.val_1[4]=='dpl_2'){
                        this.vol_label_5 = 'E401';
                    }else if(this.val_1[4]=='dpl_3'){
                        this.vol_label_5 = 'T601';
                    }else if(this.val_1[4]=='dpl_4'){
                        this.vol_label_5 = 'D503';
                    }else if(this.val_1[4]=='dpl_5'){
                        this.vol_label_5 = 'D504';
                    }else if(this.val_1[4]=='dpl_6'){
                        this.vol_label_5 = 'T501';
                    }else if(this.val_1[4]=='dpl_7'){
                        this.vol_label_5 = 'T502';
                    }else if(this.val_1[4]=='pit_level'){
                        this.vol_label_5 = 'Pit Vol';
                    }
                    ///////////////////////////////////////////////////////////
                    if(this.val_1[5]=='rdl_1'){
                        this.vol_label_6 = 'D101 A';
                    }else if(this.val_1[5]=='rdl_2'){
                        this.vol_label_6 = 'D101 B';
                    }else if(this.val_1[5]=='rdl_3'){
                        this.vol_label_6 = 'D405 A';
                    }else if(this.val_1[5]=='rdl_4'){
                        this.vol_label_6 = 'D405 B';
                    }else if(this.val_1[5]=='rdl_5'){
                        this.vol_label_6 = 'D405 C';
                    }else if(this.val_1[5]=='rdl_6'){
                        this.vol_label_6 = 'ALKALI (C401A)';
                    }else if(this.val_1[5]=='rdl_7'){
                        this.vol_label_6 = 'ALKALI (C401B)';
                    }else if(this.val_1[5]=='rdl_8'){
                        this.vol_label_6 = 'D402 A';
                    }else if(this.val_1[5]=='rdl_9'){
                        this.vol_label_6 = 'D402 B';
                    }else if(this.val_1[5]=='rdl_10'){
                        this.vol_label_6 = 'D402 C';
                    }else if(this.val_1[5]=='rdl_11'){
                        this.vol_label_6 = 'D402 D';
                    }else if(this.val_1[5]=='rdl_12'){
                        this.vol_label_6 = 'GLV';
                    }else if(this.val_1[5]=='rdl_13'){
                        this.vol_label_6 = 'SETTLING A';
                    }else if(this.val_1[5]=='rdl_14'){
                        this.vol_label_6 = 'SETTLING B';
                    }else if(this.val_1[5]=='rdl_15'){
                        this.vol_label_6 = 'SETTLING C';
                    }else if(this.val_1[5]=='rdl_16'){
                        this.vol_label_6 = 'METHANOL TANK#1';
                    }else if(this.val_1[5]=='rdl_17'){
                        this.vol_label_6 = 'TAR TANK';
                    }else if(this.val_1[5]=='rdl_18'){
                        this.vol_label_6 = 'GST TANK#1';
                    }else if(this.val_1[5]=='rdl_19'){
                        this.vol_label_6 = 'METHANOL TANK#2';
                    }else if(this.val_1[5]=='rdl_20'){
                        this.vol_label_6 = 'Slang Pool#1';
                    }else if(this.val_1[5]=='rdl_21'){
                        this.vol_label_6 = 'Slag Pool#2';
                    }else if(this.val_1[5]=='rdl_22'){
                        this.vol_label_6 = 'Slag Pool#3';
                    }else if(this.val_1[5]=='rdl_23'){
                        this.vol_label_6 = 'PPRA';
                    }else if(this.val_1[5]=='rdl_24'){
                        this.vol_label_6 = 'PPRB';
                    }else if(this.val_1[5]=='rdl_25'){
                        this.vol_label_6 = 'H2SO4 Tank';
                    }else if(this.val_1[5]=='dpl_1'){
                        this.vol_label_6 = 'D501';
                    }else if(this.val_1[5]=='dpl_2'){
                        this.vol_label_6 = 'E401';
                    }else if(this.val_1[5]=='dpl_3'){
                        this.vol_label_6 = 'T601';
                    }else if(this.val_1[5]=='dpl_4'){
                        this.vol_label_6 = 'D503';
                    }else if(this.val_1[5]=='dpl_5'){
                        this.vol_label_6 = 'D504';
                    }else if(this.val_1[5]=='dpl_6'){
                        this.vol_label_6 = 'T501';
                    }else if(this.val_1[5]=='dpl_7'){
                        this.vol_label_6 = 'T502';
                    }else if(this.val_1[5]=='pit_level'){
                        this.vol_label_6 = 'Pit Vol';
                    }
                    ///////////////////////////////////////////////////////////
                    if(this.val_1[6]=='rdl_1'){
                        this.vol_label_7 = 'D101 A';
                    }else if(this.val_1[6]=='rdl_2'){
                        this.vol_label_7 = 'D101 B';
                    }else if(this.val_1[6]=='rdl_3'){
                        this.vol_label_7 = 'D405 A';
                    }else if(this.val_1[6]=='rdl_4'){
                        this.vol_label_7 = 'D405 B';
                    }else if(this.val_1[6]=='rdl_5'){
                        this.vol_label_7 = 'D405 C';
                    }else if(this.val_1[6]=='rdl_6'){
                        this.vol_label_7 = 'ALKALI (C401A)';
                    }else if(this.val_1[6]=='rdl_7'){
                        this.vol_label_7 = 'ALKALI (C401B)';
                    }else if(this.val_1[6]=='rdl_8'){
                        this.vol_label_7 = 'D402 A';
                    }else if(this.val_1[6]=='rdl_9'){
                        this.vol_label_7 = 'D402 B';
                    }else if(this.val_1[6]=='rdl_10'){
                        this.vol_label_7 = 'D402 C';
                    }else if(this.val_1[6]=='rdl_11'){
                        this.vol_label_7 = 'D402 D';
                    }else if(this.val_1[6]=='rdl_12'){
                        this.vol_label_7 = 'GLV';
                    }else if(this.val_1[6]=='rdl_13'){
                        this.vol_label_7 = 'SETTLING A';
                    }else if(this.val_1[6]=='rdl_14'){
                        this.vol_label_7 = 'SETTLING B';
                    }else if(this.val_1[6]=='rdl_15'){
                        this.vol_label_7 = 'SETTLING C';
                    }else if(this.val_1[6]=='rdl_16'){
                        this.vol_label_7 = 'METHANOL TANK#1';
                    }else if(this.val_1[6]=='rdl_17'){
                        this.vol_label_7 = 'TAR TANK';
                    }else if(this.val_1[6]=='rdl_18'){
                        this.vol_label_7 = 'GST TANK#1';
                    }else if(this.val_1[6]=='rdl_19'){
                        this.vol_label_7 = 'METHANOL TANK#2';
                    }else if(this.val_1[6]=='rdl_20'){
                        this.vol_label_7 = 'Slang Pool#1';
                    }else if(this.val_1[6]=='rdl_21'){
                        this.vol_label_7 = 'Slag Pool#2';
                    }else if(this.val_1[6]=='rdl_22'){
                        this.vol_label_7 = 'Slag Pool#3';
                    }else if(this.val_1[6]=='rdl_23'){
                        this.vol_label_7 = 'PPRA';
                    }else if(this.val_1[6]=='rdl_24'){
                        this.vol_label_7 = 'PPRB';
                    }else if(this.val_1[6]=='rdl_25'){
                        this.vol_label_7 = 'H2SO4 Tank';
                    }else if(this.val_1[6]=='dpl_1'){
                        this.vol_label_7 = 'D501';
                    }else if(this.val_1[6]=='dpl_2'){
                        this.vol_label_7 = 'E401';
                    }else if(this.val_1[6]=='dpl_3'){
                        this.vol_label_7 = 'T601';
                    }else if(this.val_1[6]=='dpl_4'){
                        this.vol_label_7 = 'D503';
                    }else if(this.val_1[6]=='dpl_5'){
                        this.vol_label_7 = 'D504';
                    }else if(this.val_1[6]=='dpl_6'){
                        this.vol_label_7 = 'T501';
                    }else if(this.val_1[6]=='dpl_7'){
                        this.vol_label_7 = 'T502';
                    }else if(this.val_1[6]=='pit_level'){
                        this.vol_label_7 = 'Pit Vol';
                    }
                    ///////////////////////////////////////////////////////////
                    if(this.val_1[7]=='rdl_1'){
                        this.vol_label_8 = 'D101 A';
                    }else if(this.val_1[7]=='rdl_2'){
                        this.vol_label_8 = 'D101 B';
                    }else if(this.val_1[7]=='rdl_3'){
                        this.vol_label_8 = 'D405 A';
                    }else if(this.val_1[7]=='rdl_4'){
                        this.vol_label_8 = 'D405 B';
                    }else if(this.val_1[7]=='rdl_5'){
                        this.vol_label_8 = 'D405 C';
                    }else if(this.val_1[7]=='rdl_6'){
                        this.vol_label_8 = 'ALKALI (C401A)';
                    }else if(this.val_1[7]=='rdl_7'){
                        this.vol_label_8 = 'ALKALI (C401B)';
                    }else if(this.val_1[7]=='rdl_8'){
                        this.vol_label_8 = 'D402 A';
                    }else if(this.val_1[7]=='rdl_9'){
                        this.vol_label_8 = 'D402 B';
                    }else if(this.val_1[7]=='rdl_10'){
                        this.vol_label_8 = 'D402 C';
                    }else if(this.val_1[7]=='rdl_11'){
                        this.vol_label_8 = 'D402 D';
                    }else if(this.val_1[7]=='rdl_12'){
                        this.vol_label_8 = 'GLV';
                    }else if(this.val_1[7]=='rdl_13'){
                        this.vol_label_8 = 'SETTLING A';
                    }else if(this.val_1[7]=='rdl_14'){
                        this.vol_label_8 = 'SETTLING B';
                    }else if(this.val_1[7]=='rdl_15'){
                        this.vol_label_8 = 'SETTLING C';
                    }else if(this.val_1[7]=='rdl_16'){
                        this.vol_label_8 = 'METHANOL TANK#1';
                    }else if(this.val_1[7]=='rdl_17'){
                        this.vol_label_8 = 'TAR TANK';
                    }else if(this.val_1[7]=='rdl_18'){
                        this.vol_label_8 = 'GST TANK#1';
                    }else if(this.val_1[7]=='rdl_19'){
                        this.vol_label_8 = 'METHANOL TANK#2';
                    }else if(this.val_1[7]=='rdl_20'){
                        this.vol_label_8 = 'Slang Pool#1';
                    }else if(this.val_1[7]=='rdl_21'){
                        this.vol_label_8 = 'Slag Pool#2';
                    }else if(this.val_1[7]=='rdl_22'){
                        this.vol_label_8 = 'Slag Pool#3';
                    }else if(this.val_1[7]=='rdl_23'){
                        this.vol_label_8 = 'PPRA';
                    }else if(this.val_1[7]=='rdl_24'){
                        this.vol_label_8 = 'PPRB';
                    }else if(this.val_1[7]=='rdl_25'){
                        this.vol_label_8 = 'H2SO4 Tank';
                    }else if(this.val_1[7]=='dpl_1'){
                        this.vol_label_8 = 'D501';
                    }else if(this.val_1[7]=='dpl_2'){
                        this.vol_label_8 = 'E401';
                    }else if(this.val_1[7]=='dpl_3'){
                        this.vol_label_8 = 'T601';
                    }else if(this.val_1[7]=='dpl_4'){
                        this.vol_label_8 = 'D503';
                    }else if(this.val_1[7]=='dpl_5'){
                        this.vol_label_8 = 'D504';
                    }else if(this.val_1[7]=='dpl_6'){
                        this.vol_label_8 = 'T501';
                    }else if(this.val_1[7]=='dpl_7'){
                        this.vol_label_8 = 'T502';
                    }else if(this.val_1[7]=='pit_level'){
                        this.vol_label_8 = 'Pit Vol';
                    }
                    ///////////////////////////////////////////////////////////
                    if(this.val_1[8]=='rdl_1'){
                        this.vol_label_9 = 'D101 A';
                    }else if(this.val_1[8]=='rdl_2'){
                        this.vol_label_9 = 'D101 B';
                    }else if(this.val_1[8]=='rdl_3'){
                        this.vol_label_9 = 'D405 A';
                    }else if(this.val_1[8]=='rdl_4'){
                        this.vol_label_9 = 'D405 B';
                    }else if(this.val_1[8]=='rdl_5'){
                        this.vol_label_9 = 'D405 C';
                    }else if(this.val_1[8]=='rdl_6'){
                        this.vol_label_9 = 'ALKALI (C401A)';
                    }else if(this.val_1[8]=='rdl_7'){
                        this.vol_label_9 = 'ALKALI (C401B)';
                    }else if(this.val_1[8]=='rdl_8'){
                        this.vol_label_9 = 'D402 A';
                    }else if(this.val_1[8]=='rdl_9'){
                        this.vol_label_9 = 'D402 B';
                    }else if(this.val_1[8]=='rdl_10'){
                        this.vol_label_9 = 'D402 C';
                    }else if(this.val_1[8]=='rdl_11'){
                        this.vol_label_9 = 'D402 D';
                    }else if(this.val_1[8]=='rdl_12'){
                        this.vol_label_9 = 'GLV';
                    }else if(this.val_1[8]=='rdl_13'){
                        this.vol_label_9 = 'SETTLING A';
                    }else if(this.val_1[8]=='rdl_14'){
                        this.vol_label_9 = 'SETTLING B';
                    }else if(this.val_1[8]=='rdl_15'){
                        this.vol_label_9 = 'SETTLING C';
                    }else if(this.val_1[8]=='rdl_16'){
                        this.vol_label_9 = 'METHANOL TANK#1';
                    }else if(this.val_1[8]=='rdl_17'){
                        this.vol_label_9 = 'TAR TANK';
                    }else if(this.val_1[8]=='rdl_18'){
                        this.vol_label_9 = 'GST TANK#1';
                    }else if(this.val_1[8]=='rdl_19'){
                        this.vol_label_9 = 'METHANOL TANK#2';
                    }else if(this.val_1[8]=='rdl_20'){
                        this.vol_label_9 = 'Slang Pool#1';
                    }else if(this.val_1[8]=='rdl_21'){
                        this.vol_label_9 = 'Slag Pool#2';
                    }else if(this.val_1[8]=='rdl_22'){
                        this.vol_label_9 = 'Slag Pool#3';
                    }else if(this.val_1[8]=='rdl_23'){
                        this.vol_label_9 = 'PPRA';
                    }else if(this.val_1[8]=='rdl_24'){
                        this.vol_label_9 = 'PPRB';
                    }else if(this.val_1[8]=='rdl_25'){
                        this.vol_label_9 = 'H2SO4 Tank';
                    }else if(this.val_1[8]=='dpl_1'){
                        this.vol_label_9 = 'D501';
                    }else if(this.val_1[8]=='dpl_2'){
                        this.vol_label_9 = 'E401';
                    }else if(this.val_1[8]=='dpl_3'){
                        this.vol_label_9 = 'T601';
                    }else if(this.val_1[8]=='dpl_4'){
                        this.vol_label_9 = 'D503';
                    }else if(this.val_1[8]=='dpl_5'){
                        this.vol_label_9 = 'D504';
                    }else if(this.val_1[8]=='dpl_6'){
                        this.vol_label_9 = 'T501';
                    }else if(this.val_1[8]=='dpl_7'){
                        this.vol_label_9 = 'T502';
                    }else if(this.val_1[8]=='pit_level'){
                        this.vol_label_9 = 'Pit Vol';
                    }
                    ///////////////////////////////////////////////////////////
                    if(this.val_1[8]=='rdl_1'){
                        this.vol_label_10 = 'D101 A';
                    }else if(this.val_1[9]=='rdl_2'){
                        this.vol_label_10 = 'D101 B';
                    }else if(this.val_1[9]=='rdl_3'){
                        this.vol_label_10 = 'D405 A';
                    }else if(this.val_1[9]=='rdl_4'){
                        this.vol_label_10 = 'D405 B';
                    }else if(this.val_1[9]=='rdl_5'){
                        this.vol_label_10 = 'D405 C';
                    }else if(this.val_1[9]=='rdl_6'){
                        this.vol_label_10 = 'ALKALI (C401A)';
                    }else if(this.val_1[9]=='rdl_7'){
                        this.vol_label_10 = 'ALKALI (C401B)';
                    }else if(this.val_1[9]=='rdl_8'){
                        this.vol_label_10 = 'D402 A';
                    }else if(this.val_1[9]=='rdl_9'){
                        this.vol_label_10 = 'D402 B';
                    }else if(this.val_1[9]=='rdl_10'){
                        this.vol_label_10 = 'D402 C';
                    }else if(this.val_1[9]=='rdl_11'){
                        this.vol_label_10 = 'D402 D';
                    }else if(this.val_1[9]=='rdl_12'){
                        this.vol_label_10 = 'GLV';
                    }else if(this.val_1[9]=='rdl_13'){
                        this.vol_label_10 = 'SETTLING A';
                    }else if(this.val_1[9]=='rdl_14'){
                        this.vol_label_10 = 'SETTLING B';
                    }else if(this.val_1[9]=='rdl_15'){
                        this.vol_label_10 = 'SETTLING C';
                    }else if(this.val_1[9]=='rdl_16'){
                        this.vol_label_10 = 'METHANOL TANK#1';
                    }else if(this.val_1[9]=='rdl_17'){
                        this.vol_label_10 = 'TAR TANK';
                    }else if(this.val_1[9]=='rdl_18'){
                        this.vol_label_10 = 'GST TANK#1';
                    }else if(this.val_1[9]=='rdl_19'){
                        this.vol_label_10 = 'METHANOL TANK#2';
                    }else if(this.val_1[9]=='rdl_20'){
                        this.vol_label_10 = 'Slang Pool#1';
                    }else if(this.val_1[9]=='rdl_21'){
                        this.vol_label_10 = 'Slag Pool#2';
                    }else if(this.val_1[9]=='rdl_22'){
                        this.vol_label_10 = 'Slag Pool#3';
                    }else if(this.val_1[9]=='rdl_23'){
                        this.vol_label_10 = 'PPRA';
                    }else if(this.val_1[9]=='rdl_24'){
                        this.vol_label_10 = 'PPRB';
                    }else if(this.val_1[9]=='rdl_25'){
                        this.vol_label_10 = 'H2SO4 Tank';
                    }else if(this.val_1[9]=='dpl_1'){
                        this.vol_label_10 = 'D501';
                    }else if(this.val_1[9]=='dpl_2'){
                        this.vol_label_10 = 'E401';
                    }else if(this.val_1[9]=='dpl_3'){
                        this.vol_label_10 = 'T601';
                    }else if(this.val_1[9]=='dpl_4'){
                        this.vol_label_10 = 'D503';
                    }else if(this.val_1[9]=='dpl_5'){
                        this.vol_label_10 = 'D504';
                    }else if(this.val_1[9]=='dpl_6'){
                        this.vol_label_10 = 'T501';
                    }else if(this.val_1[9]=='dpl_7'){
                        this.vol_label_10 = 'T502';
                    }else if(this.val_1[9]=='pit_level'){
                        this.vol_label_10 = 'Pit Vol';
                    }
                    ///////////////////////////////////////////////////////////
                    if(this.val_1[10]=='rdl_1'){
                        this.vol_label_11 = 'D101 A';
                    }else if(this.val_1[10]=='rdl_2'){
                        this.vol_label_11 = 'D101 B';
                    }else if(this.val_1[10]=='rdl_3'){
                        this.vol_label_11 = 'D405 A';
                    }else if(this.val_1[10]=='rdl_4'){
                        this.vol_label_11 = 'D405 B';
                    }else if(this.val_1[10]=='rdl_5'){
                        this.vol_label_11 = 'D405 C';
                    }else if(this.val_1[10]=='rdl_6'){
                        this.vol_label_11 = 'ALKALI (C401A)';
                    }else if(this.val_1[10]=='rdl_7'){
                        this.vol_label_11 = 'ALKALI (C401B)';
                    }else if(this.val_1[10]=='rdl_8'){
                        this.vol_label_11 = 'D402 A';
                    }else if(this.val_1[10]=='rdl_9'){
                        this.vol_label_11 = 'D402 B';
                    }else if(this.val_1[10]=='rdl_10'){
                        this.vol_label_11 = 'D402 C';
                    }else if(this.val_1[10]=='rdl_11'){
                        this.vol_label_11 = 'D402 D';
                    }else if(this.val_1[10]=='rdl_12'){
                        this.vol_label_11 = 'GLV';
                    }else if(this.val_1[10]=='rdl_13'){
                        this.vol_label_11 = 'SETTLING A';
                    }else if(this.val_1[10]=='rdl_14'){
                        this.vol_label_11 = 'SETTLING B';
                    }else if(this.val_1[10]=='rdl_15'){
                        this.vol_label_11 = 'SETTLING C';
                    }else if(this.val_1[10]=='rdl_16'){
                        this.vol_label_11 = 'METHANOL TANK#1';
                    }else if(this.val_1[10]=='rdl_17'){
                        this.vol_label_11 = 'TAR TANK';
                    }else if(this.val_1[10]=='rdl_18'){
                        this.vol_label_11 = 'GST TANK#1';
                    }else if(this.val_1[10]=='rdl_19'){
                        this.vol_label_11 = 'METHANOL TANK#2';
                    }else if(this.val_1[10]=='rdl_20'){
                        this.vol_label_11 = 'Slang Pool#1';
                    }else if(this.val_1[10]=='rdl_21'){
                        this.vol_label_11 = 'Slag Pool#2';
                    }else if(this.val_1[10]=='rdl_22'){
                        this.vol_label_11 = 'Slag Pool#3';
                    }else if(this.val_1[10]=='rdl_23'){
                        this.vol_label_11 = 'PPRA';
                    }else if(this.val_1[10]=='rdl_24'){
                        this.vol_label_11 = 'PPRB';
                    }else if(this.val_1[10]=='rdl_25'){
                        this.vol_label_11 = 'H2SO4 Tank';
                    }else if(this.val_1[10]=='dpl_1'){
                        this.vol_label_11 = 'D501';
                    }else if(this.val_1[10]=='dpl_2'){
                        this.vol_label_11 = 'E401';
                    }else if(this.val_1[10]=='dpl_3'){
                        this.vol_label_11 = 'T601';
                    }else if(this.val_1[10]=='dpl_4'){
                        this.vol_label_11 = 'D503';
                    }else if(this.val_1[10]=='dpl_5'){
                        this.vol_label_11 = 'D504';
                    }else if(this.val_1[10]=='dpl_6'){
                        this.vol_label_11 = 'T501';
                    }else if(this.val_1[10]=='dpl_7'){
                        this.vol_label_11 = 'T502';
                    }else if(this.val_1[10]=='pit_level'){
                        this.vol_label_11 = 'Pit Vol';
                    }
                    ///////////////////////////////////////////////////////////
                    if(this.val_1[11]=='rdl_1'){
                        this.vol_label_12 = 'D101 A';
                    }else if(this.val_1[11]=='rdl_2'){
                        this.vol_label_12 = 'D101 B';
                    }else if(this.val_1[11]=='rdl_3'){
                        this.vol_label_12 = 'D405 A';
                    }else if(this.val_1[11]=='rdl_4'){
                        this.vol_label_12 = 'D405 B';
                    }else if(this.val_1[11]=='rdl_5'){
                        this.vol_label_12 = 'D405 C';
                    }else if(this.val_1[11]=='rdl_6'){
                        this.vol_label_12 = 'ALKALI (C401A)';
                    }else if(this.val_1[11]=='rdl_7'){
                        this.vol_label_12 = 'ALKALI (C401B)';
                    }else if(this.val_1[11]=='rdl_8'){
                        this.vol_label_12 = 'D402 A';
                    }else if(this.val_1[11]=='rdl_9'){
                        this.vol_label_12 = 'D402 B';
                    }else if(this.val_1[11]=='rdl_10'){
                        this.vol_label_12 = 'D402 C';
                    }else if(this.val_1[11]=='rdl_11'){
                        this.vol_label_12 = 'D402 D';
                    }else if(this.val_1[11]=='rdl_12'){
                        this.vol_label_12 = 'GLV';
                    }else if(this.val_1[11]=='rdl_13'){
                        this.vol_label_12 = 'SETTLING A';
                    }else if(this.val_1[11]=='rdl_14'){
                        this.vol_label_12 = 'SETTLING B';
                    }else if(this.val_1[11]=='rdl_15'){
                        this.vol_label_12 = 'SETTLING C';
                    }else if(this.val_1[11]=='rdl_16'){
                        this.vol_label_12 = 'METHANOL TANK#1';
                    }else if(this.val_1[11]=='rdl_17'){
                        this.vol_label_12 = 'TAR TANK';
                    }else if(this.val_1[11]=='rdl_18'){
                        this.vol_label_12 = 'GST TANK#1';
                    }else if(this.val_1[11]=='rdl_19'){
                        this.vol_label_12 = 'METHANOL TANK#2';
                    }else if(this.val_1[11]=='rdl_20'){
                        this.vol_label_12 = 'Slang Pool#1';
                    }else if(this.val_1[11]=='rdl_21'){
                        this.vol_label_12 = 'Slag Pool#2';
                    }else if(this.val_1[11]=='rdl_22'){
                        this.vol_label_12 = 'Slag Pool#3';
                    }else if(this.val_1[11]=='rdl_23'){
                        this.vol_label_12 = 'PPRA';
                    }else if(this.val_1[11]=='rdl_24'){
                        this.vol_label_12 = 'PPRB';
                    }else if(this.val_1[11]=='rdl_25'){
                        this.vol_label_12 = 'H2SO4 Tank';
                    }else if(this.val_1[11]=='dpl_1'){
                        this.vol_label_12 = 'D501';
                    }else if(this.val_1[11]=='dpl_2'){
                        this.vol_label_12 = 'E401';
                    }else if(this.val_1[11]=='dpl_3'){
                        this.vol_label_12 = 'T601';
                    }else if(this.val_1[11]=='dpl_4'){
                        this.vol_label_12 = 'D503';
                    }else if(this.val_1[11]=='dpl_5'){
                        this.vol_label_12 = 'D504';
                    }else if(this.val_1[11]=='dpl_6'){
                        this.vol_label_12 = 'T501';
                    }else if(this.val_1[11]=='dpl_7'){
                        this.vol_label_12 = 'T502';
                    }else if(this.val_1[11]=='pit_level'){
                        this.vol_label_12 = 'Pit Vol';
                    }
                    ///////////////////////////////////////////////////////////
                    if(this.val_1[12]=='rdl_1'){
                        this.vol_label_13 = 'D101 A';
                    }else if(this.val_1[12]=='rdl_2'){
                        this.vol_label_13 = 'D101 B';
                    }else if(this.val_1[12]=='rdl_3'){
                        this.vol_label_13 = 'D405 A';
                    }else if(this.val_1[12]=='rdl_4'){
                        this.vol_label_13 = 'D405 B';
                    }else if(this.val_1[12]=='rdl_5'){
                        this.vol_label_13 = 'D405 C';
                    }else if(this.val_1[12]=='rdl_6'){
                        this.vol_label_13 = 'ALKALI (C401A)';
                    }else if(this.val_1[12]=='rdl_7'){
                        this.vol_label_13 = 'ALKALI (C401B)';
                    }else if(this.val_1[12]=='rdl_8'){
                        this.vol_label_13 = 'D402 A';
                    }else if(this.val_1[12]=='rdl_9'){
                        this.vol_label_13 = 'D402 B';
                    }else if(this.val_1[12]=='rdl_10'){
                        this.vol_label_13 = 'D402 C';
                    }else if(this.val_1[12]=='rdl_11'){
                        this.vol_label_13 = 'D402 D';
                    }else if(this.val_1[12]=='rdl_12'){
                        this.vol_label_13 = 'GLV';
                    }else if(this.val_1[12]=='rdl_13'){
                        this.vol_label_13 = 'SETTLING A';
                    }else if(this.val_1[12]=='rdl_14'){
                        this.vol_label_13 = 'SETTLING B';
                    }else if(this.val_1[12]=='rdl_15'){
                        this.vol_label_13 = 'SETTLING C';
                    }else if(this.val_1[12]=='rdl_16'){
                        this.vol_label_13 = 'METHANOL TANK#1';
                    }else if(this.val_1[12]=='rdl_17'){
                        this.vol_label_13 = 'TAR TANK';
                    }else if(this.val_1[12]=='rdl_18'){
                        this.vol_label_13 = 'GST TANK#1';
                    }else if(this.val_1[12]=='rdl_19'){
                        this.vol_label_13 = 'METHANOL TANK#2';
                    }else if(this.val_1[12]=='rdl_20'){
                        this.vol_label_13 = 'Slang Pool#1';
                    }else if(this.val_1[12]=='rdl_21'){
                        this.vol_label_13 = 'Slag Pool#2';
                    }else if(this.val_1[12]=='rdl_22'){
                        this.vol_label_13 = 'Slag Pool#3';
                    }else if(this.val_1[12]=='rdl_23'){
                        this.vol_label_13 = 'PPRA';
                    }else if(this.val_1[12]=='rdl_24'){
                        this.vol_label_13 = 'PPRB';
                    }else if(this.val_1[12]=='rdl_25'){
                        this.vol_label_13 = 'H2SO4 Tank';
                    }else if(this.val_1[12]=='dpl_1'){
                        this.vol_label_13 = 'D501';
                    }else if(this.val_1[12]=='dpl_2'){
                        this.vol_label_13 = 'E401';
                    }else if(this.val_1[12]=='dpl_3'){
                        this.vol_label_13 = 'T601';
                    }else if(this.val_1[12]=='dpl_4'){
                        this.vol_label_13 = 'D503';
                    }else if(this.val_1[12]=='dpl_5'){
                        this.vol_label_13 = 'D504';
                    }else if(this.val_1[12]=='dpl_6'){
                        this.vol_label_13 = 'T501';
                    }else if(this.val_1[12]=='dpl_7'){
                        this.vol_label_13 = 'T502';
                    }else if(this.val_1[12]=='pit_level'){
                        this.vol_label_13 = 'Pit Vol';
                    }
                    ///////////////////////////////////////////////////////////
                    if(this.val_1[13]=='rdl_1'){
                        this.vol_label_14 = 'D101 A';
                    }else if(this.val_1[13]=='rdl_2'){
                        this.vol_label_14 = 'D101 B';
                    }else if(this.val_1[13]=='rdl_3'){
                        this.vol_label_14 = 'D405 A';
                    }else if(this.val_1[13]=='rdl_4'){
                        this.vol_label_14 = 'D405 B';
                    }else if(this.val_1[13]=='rdl_5'){
                        this.vol_label_14 = 'D405 C';
                    }else if(this.val_1[13]=='rdl_6'){
                        this.vol_label_14 = 'ALKALI (C401A)';
                    }else if(this.val_1[13]=='rdl_7'){
                        this.vol_label_14 = 'ALKALI (C401B)';
                    }else if(this.val_1[13]=='rdl_8'){
                        this.vol_label_14 = 'D402 A';
                    }else if(this.val_1[13]=='rdl_9'){
                        this.vol_label_14 = 'D402 B';
                    }else if(this.val_1[13]=='rdl_10'){
                        this.vol_label_14 = 'D402 C';
                    }else if(this.val_1[13]=='rdl_11'){
                        this.vol_label_14 = 'D402 D';
                    }else if(this.val_1[13]=='rdl_12'){
                        this.vol_label_14 = 'GLV';
                    }else if(this.val_1[13]=='rdl_13'){
                        this.vol_label_14 = 'SETTLING A';
                    }else if(this.val_1[13]=='rdl_14'){
                        this.vol_label_14 = 'SETTLING B';
                    }else if(this.val_1[13]=='rdl_15'){
                        this.vol_label_14 = 'SETTLING C';
                    }else if(this.val_1[13]=='rdl_16'){
                        this.vol_label_14 = 'METHANOL TANK#1';
                    }else if(this.val_1[13]=='rdl_17'){
                        this.vol_label_14 = 'TAR TANK';
                    }else if(this.val_1[13]=='rdl_18'){
                        this.vol_label_14 = 'GST TANK#1';
                    }else if(this.val_1[13]=='rdl_19'){
                        this.vol_label_14 = 'METHANOL TANK#2';
                    }else if(this.val_1[13]=='rdl_20'){
                        this.vol_label_14 = 'Slang Pool#1';
                    }else if(this.val_1[13]=='rdl_21'){
                        this.vol_label_14 = 'Slag Pool#2';
                    }else if(this.val_1[13]=='rdl_22'){
                        this.vol_label_14 = 'Slag Pool#3';
                    }else if(this.val_1[13]=='rdl_23'){
                        this.vol_label_14 = 'PPRA';
                    }else if(this.val_1[13]=='rdl_24'){
                        this.vol_label_14 = 'PPRB';
                    }else if(this.val_1[13]=='rdl_25'){
                        this.vol_label_14 = 'H2SO4 Tank';
                    }else if(this.val_1[13]=='dpl_1'){
                        this.vol_label_14 = 'D501';
                    }else if(this.val_1[13]=='dpl_2'){
                        this.vol_label_14 = 'E401';
                    }else if(this.val_1[13]=='dpl_3'){
                        this.vol_label_14 = 'T601';
                    }else if(this.val_1[13]=='dpl_4'){
                        this.vol_label_14 = 'D503';
                    }else if(this.val_1[13]=='dpl_5'){
                        this.vol_label_14 = 'D504';
                    }else if(this.val_1[13]=='dpl_6'){
                        this.vol_label_14 = 'T501';
                    }else if(this.val_1[13]=='dpl_7'){
                        this.vol_label_14 = 'T502';
                    }else if(this.val_1[13]=='pit_level'){
                        this.vol_label_14 = 'Pit Vol';
                    }
                    ///////////////////////////////////////////////////////////
                    if(this.val_1[14]=='rdl_1'){
                        this.vol_label_15 = 'D101 A';
                    }else if(this.val_1[14]=='rdl_2'){
                        this.vol_label_15 = 'D101 B';
                    }else if(this.val_1[14]=='rdl_3'){
                        this.vol_label_15 = 'D405 A';
                    }else if(this.val_1[14]=='rdl_4'){
                        this.vol_label_15 = 'D405 B';
                    }else if(this.val_1[14]=='rdl_5'){
                        this.vol_label_15 = 'D405 C';
                    }else if(this.val_1[14]=='rdl_6'){
                        this.vol_label_15 = 'ALKALI (C401A)';
                    }else if(this.val_1[14]=='rdl_7'){
                        this.vol_label_15 = 'ALKALI (C401B)';
                    }else if(this.val_1[14]=='rdl_8'){
                        this.vol_label_15 = 'D402 A';
                    }else if(this.val_1[14]=='rdl_9'){
                        this.vol_label_15 = 'D402 B';
                    }else if(this.val_1[14]=='rdl_10'){
                        this.vol_label_15 = 'D402 C';
                    }else if(this.val_1[14]=='rdl_11'){
                        this.vol_label_15 = 'D402 D';
                    }else if(this.val_1[14]=='rdl_12'){
                        this.vol_label_15 = 'GLV';
                    }else if(this.val_1[14]=='rdl_13'){
                        this.vol_label_15 = 'SETTLING A';
                    }else if(this.val_1[14]=='rdl_14'){
                        this.vol_label_15 = 'SETTLING B';
                    }else if(this.val_1[14]=='rdl_15'){
                        this.vol_label_15 = 'SETTLING C';
                    }else if(this.val_1[14]=='rdl_16'){
                        this.vol_label_15 = 'METHANOL TANK#1';
                    }else if(this.val_1[14]=='rdl_17'){
                        this.vol_label_15 = 'TAR TANK';
                    }else if(this.val_1[14]=='rdl_18'){
                        this.vol_label_15 = 'GST TANK#1';
                    }else if(this.val_1[14]=='rdl_19'){
                        this.vol_label_15 = 'METHANOL TANK#2';
                    }else if(this.val_1[14]=='rdl_20'){
                        this.vol_label_15 = 'Slang Pool#1';
                    }else if(this.val_1[14]=='rdl_21'){
                        this.vol_label_15 = 'Slag Pool#2';
                    }else if(this.val_1[14]=='rdl_22'){
                        this.vol_label_15 = 'Slag Pool#3';
                    }else if(this.val_1[14]=='rdl_23'){
                        this.vol_label_15 = 'PPRA';
                    }else if(this.val_1[14]=='rdl_24'){
                        this.vol_label_15 = 'PPRB';
                    }else if(this.val_1[14]=='rdl_25'){
                        this.vol_label_15 = 'H2SO4 Tank';
                    }else if(this.val_1[14]=='dpl_1'){
                        this.vol_label_15 = 'D501';
                    }else if(this.val_1[14]=='dpl_2'){
                        this.vol_label_15 = 'E401';
                    }else if(this.val_1[14]=='dpl_3'){
                        this.vol_label_15 = 'T601';
                    }else if(this.val_1[14]=='dpl_4'){
                        this.vol_label_15 = 'D503';
                    }else if(this.val_1[14]=='dpl_5'){
                        this.vol_label_15 = 'D504';
                    }else if(this.val_1[14]=='dpl_6'){
                        this.vol_label_15 = 'T501';
                    }else if(this.val_1[14]=='dpl_7'){
                        this.vol_label_15 = 'T502';
                    }else if(this.val_1[14]=='pit_level'){
                        this.vol_label_15 = 'Pit Vol';
                    }
                    ///////////////////////////////////////////////////////////
                    if(this.val_1[15]=='rdl_1'){
                        this.vol_label_16 = 'D101 A';
                    }else if(this.val_1[15]=='rdl_2'){
                        this.vol_label_16 = 'D101 B';
                    }else if(this.val_1[15]=='rdl_3'){
                        this.vol_label_16 = 'D405 A';
                    }else if(this.val_1[15]=='rdl_4'){
                        this.vol_label_16 = 'D405 B';
                    }else if(this.val_1[15]=='rdl_5'){
                        this.vol_label_16 = 'D405 C';
                    }else if(this.val_1[15]=='rdl_6'){
                        this.vol_label_16 = 'ALKALI (C401A)';
                    }else if(this.val_1[15]=='rdl_7'){
                        this.vol_label_16 = 'ALKALI (C401B)';
                    }else if(this.val_1[15]=='rdl_8'){
                        this.vol_label_16 = 'D402 A';
                    }else if(this.val_1[15]=='rdl_9'){
                        this.vol_label_16 = 'D402 B';
                    }else if(this.val_1[15]=='rdl_10'){
                        this.vol_label_16 = 'D402 C';
                    }else if(this.val_1[15]=='rdl_11'){
                        this.vol_label_16 = 'D402 D';
                    }else if(this.val_1[15]=='rdl_12'){
                        this.vol_label_16 = 'GLV';
                    }else if(this.val_1[15]=='rdl_13'){
                        this.vol_label_16 = 'SETTLING A';
                    }else if(this.val_1[15]=='rdl_14'){
                        this.vol_label_16 = 'SETTLING B';
                    }else if(this.val_1[15]=='rdl_15'){
                        this.vol_label_16 = 'SETTLING C';
                    }else if(this.val_1[15]=='rdl_16'){
                        this.vol_label_16 = 'METHANOL TANK#1';
                    }else if(this.val_1[15]=='rdl_17'){
                        this.vol_label_16 = 'TAR TANK';
                    }else if(this.val_1[15]=='rdl_18'){
                        this.vol_label_16 = 'GST TANK#1';
                    }else if(this.val_1[15]=='rdl_19'){
                        this.vol_label_16 = 'METHANOL TANK#2';
                    }else if(this.val_1[15]=='rdl_20'){
                        this.vol_label_16 = 'Slang Pool#1';
                    }else if(this.val_1[15]=='rdl_21'){
                        this.vol_label_16 = 'Slag Pool#2';
                    }else if(this.val_1[15]=='rdl_22'){
                        this.vol_label_16 = 'Slag Pool#3';
                    }else if(this.val_1[15]=='rdl_23'){
                        this.vol_label_16 = 'PPRA';
                    }else if(this.val_1[15]=='rdl_24'){
                        this.vol_label_16 = 'PPRB';
                    }else if(this.val_1[15]=='rdl_25'){
                        this.vol_label_16 = 'H2SO4 Tank';
                    }else if(this.val_1[15]=='dpl_1'){
                        this.vol_label_16 = 'D501';
                    }else if(this.val_1[15]=='dpl_2'){
                        this.vol_label_16 = 'E401';
                    }else if(this.val_1[15]=='dpl_3'){
                        this.vol_label_16 = 'T601';
                    }else if(this.val_1[15]=='dpl_4'){
                        this.vol_label_16 = 'D503';
                    }else if(this.val_1[15]=='dpl_5'){
                        this.vol_label_16 = 'D504';
                    }else if(this.val_1[15]=='dpl_6'){
                        this.vol_label_16 = 'T501';
                    }else if(this.val_1[15]=='dpl_7'){
                        this.vol_label_16 = 'T502';
                    }else if(this.val_1[16]=='pit_level'){
                        this.vol_label_16 = 'Pit Vol';
                    }
                    }
                    // For Temperature Label
                    if(this.val_2.length >= 0){
                     if(this.val_2[0]=='rtd_1'){
                        this.tmp_label_1 = 'E101';
                    }else if(this.val_2[0]=='rtd_2'){
                        this.tmp_label_1 = 'D101 A';
                    }else if(this.val_2[0]=='rtd_3'){
                        this.tmp_label_1 = 'D101 B';
                    }else if(this.val_2[0]=='rtd_4'){
                        this.tmp_label_1 = 'E201';
                    }else if(this.val_2[0]=='rtd_5'){
                        this.tmp_label_1 = 'GLV-TOP';
                    }else if(this.val_2[0]=='rtd_6'){
                        this.tmp_label_1 = 'GLV-Middle';
                    }else if(this.val_2[0]=='rtd_7'){
                        this.tmp_label_1 = 'GLV-Bottom';
                    }else if(this.val_2[0]=='rtd_8'){
                        this.tmp_label_1 = 'GLV Evaporizer';
                    }else if(this.val_2[0]=='rtd_9'){
                        this.tmp_label_1 = 'Settling Tanks(A)';
                    }else if(this.val_2[0]=='rtd_10'){
                        this.tmp_label_1 = 'Settling Tanks(B)';
                    }else if(this.val_2[0]=='rtd_11'){
                        this.tmp_label_1 = 'Settling Tanks(C)';
                    }else if(this.val_2[0]=='rtd_12'){
                        this.tmp_label_1 = 'Hot Water tank';
                    }else if(this.val_2[0]=='rtd_13'){
                        this.tmp_label_1 = 'D402 (A)';
                    }else if(this.val_2[0]=='rtd_14'){
                        this.tmp_label_1 = 'D402 (B)';
                    }else if(this.val_2[0]=='rtd_15'){
                        this.tmp_label_1 = 'D402 (C)';
                    }else if(this.val_2[0]=='rtd_16'){
                        this.tmp_label_1 = 'D402 (D)';
                    }else if(this.val_2[0]=='rtd_17'){
                        this.tmp_label_1 = 'Trans Evaporator';
                    }else if(this.val_2[0]=='rtd_18'){
                        this.tmp_label_1 = 'Blue Vessel';
                    }else if(this.val_2[0]=='rtd_19'){
                        this.tmp_label_1 = 'Green Vessel';
                    }else if(this.val_2[0]=='rtd_20'){
                        this.tmp_label_1 = 'Old Green Vessel';
                    }else if(this.val_2[0]=='rtd_21'){
                        this.tmp_label_1 = 'E601';
                    }else if(this.val_2[0]=='rtd_22'){
                        this.tmp_label_1 = 'T601-Top';
                    }else if(this.val_2[0]=='rtd_23'){
                        this.tmp_label_1 = 'T601-Middle';
                    }else if(this.val_2[0]=='rtd_24'){
                        this.tmp_label_1 = 'T601-Bottom';
                    }else if(this.val_2[0]=='rtd_25'){
                        this.tmp_label_1 = 'E501';
                    }else if(this.val_2[0]=='rtd_26'){
                        this.tmp_label_1 = 'D501';
                    }else if(this.val_2[0]=='rtd_27'){
                        this.tmp_label_1 = 'T501-Top';
                    }else if(this.val_2[0]=='rtd_28'){
                        this.tmp_label_1 = 'T501-middle';
                    }else if(this.val_2[0]=='rtd_29'){
                        this.tmp_label_1 = 'T501-Bottom';
                    }else if(this.val_2[0]=='rtd_30'){
                        this.tmp_label_1 = 'T502-Middle';
                    }else if(this.val_2[0]=='rtd_31'){
                        this.tmp_label_1 = 'T502-Bottom';
                    }else if(this.val_2[0]=='rtd_32'){
                        this.tmp_label_1 = 'PPRA';
                    }else if(this.val_2[0]=='rtd_33'){
                        this.tmp_label_1 = 'PPRB';
                    }else if(this.val_2[0]=='rtd_34'){
                        this.tmp_label_1 = 'GST1';
                    }else if(this.val_2[0]=='rtd_35'){
                        this.tmp_label_1 = 'Trans reactor';
                    }else if(this.val_2[0]=='rtd_36'){
                        this.tmp_label_1 = 'Bio Storage Tank';
                    }else if(this.val_2[0]=='rtd_37'){
                        this.tmp_label_1 = 'Bio Transfer Line';
                    }else if(this.val_2[0]=='stfm2_temp'){
                        this.tmp_label_1 = 'Main Steam Temp';
                    } else if(this.val_2[0]=='stfm1_temp'){
                        this.tmp_label_1 = 'Steam To E401 Temp';
                    }
                    ///////////////////////////////////////////////////////////
                      if(this.val_2[1]=='rtd_1'){
                        this.tmp_label_2 = 'E101';
                    }else if(this.val_2[1]=='rtd_2'){
                        this.tmp_label_2 = 'D101 A';
                    }else if(this.val_2[1]=='rtd_3'){
                        this.tmp_label_2 = 'D101 B';
                    }else if(this.val_2[1]=='rtd_4'){
                        this.tmp_label_2 = 'E201';
                    }else if(this.val_2[1]=='rtd_5'){
                        this.tmp_label_2 = 'GLV-TOP';
                    }else if(this.val_2[1]=='rtd_6'){
                        this.tmp_label_2 = 'GLV-Middle';
                    }else if(this.val_2[1]=='rtd_7'){
                        this.tmp_label_2 = 'GLV-Bottom';
                    }else if(this.val_2[1]=='rtd_8'){
                        this.tmp_label_2 = 'GLV Evaporizer';
                    }else if(this.val_2[1]=='rtd_9'){
                        this.tmp_label_2 = 'Settling Tanks(A)';
                    }else if(this.val_2[1]=='rtd_10'){
                        this.tmp_label_2 = 'Settling Tanks(B)';
                    }else if(this.val_2[1]=='rtd_11'){
                        this.tmp_label_2 = 'Settling Tanks(C)';
                    }else if(this.val_2[1]=='rtd_12'){
                        this.tmp_label_2 = 'Hot Water tank';
                    }else if(this.val_2[1]=='rtd_13'){
                        this.tmp_label_2 = 'D402 (A)';
                    }else if(this.val_2[1]=='rtd_14'){
                        this.tmp_label_2 = 'D402 (B)';
                    }else if(this.val_2[1]=='rtd_15'){
                        this.tmp_label_2 = 'D402 (C)';
                    }else if(this.val_2[1]=='rtd_16'){
                        this.tmp_label_2 = 'D402 (D)';
                    }else if(this.val_2[1]=='rtd_17'){
                        this.tmp_label_2 = 'Trans Evaporator';
                    }else if(this.val_2[1]=='rtd_18'){
                        this.tmp_label_2 = 'Blue Vessel';
                    }else if(this.val_2[1]=='rtd_19'){
                        this.tmp_label_2 = 'Green Vessel';
                    }else if(this.val_2[1]=='rtd_20'){
                        this.tmp_label_2 = 'Old Green Vessel';
                    }else if(this.val_2[1]=='rtd_21'){
                        this.tmp_label_2 = 'E601';
                    }else if(this.val_2[1]=='rtd_22'){
                        this.tmp_label_2 = 'T601-Top';
                    }else if(this.val_2[1]=='rtd_23'){
                        this.tmp_label_2 = 'T601-Middle';
                    }else if(this.val_2[1]=='rtd_24'){
                        this.tmp_label_2 = 'T601-Bottom';
                    }else if(this.val_2[1]=='rtd_25'){
                        this.tmp_label_2 = 'E501';
                    }else if(this.val_2[1]=='rtd_26'){
                        this.tmp_label_2 = 'D501';
                    }else if(this.val_2[1]=='rtd_27'){
                        this.tmp_label_2 = 'T501-Top';
                    }else if(this.val_2[1]=='rtd_28'){
                        this.tmp_label_2 = 'T501-middle';
                    }else if(this.val_2[1]=='rtd_29'){
                        this.tmp_label_2 = 'T501-Bottom';
                    }else if(this.val_2[1]=='rtd_30'){
                        this.tmp_label_2 = 'T502-Middle';
                    }else if(this.val_2[1]=='rtd_31'){
                        this.tmp_label_2 = 'T502-Bottom';
                    }else if(this.val_2[1]=='rtd_32'){
                        this.tmp_label_2 = 'PPRA';
                    }else if(this.val_2[1]=='rtd_33'){
                        this.tmp_label_2 = 'PPRB';
                    }else if(this.val_2[1]=='rtd_34'){
                        this.tmp_label_2 = 'GST1';
                    }else if(this.val_2[1]=='rtd_35'){
                        this.tmp_label_2 = 'Trans reactor';
                    }else if(this.val_2[1]=='rtd_36'){
                        this.tmp_label_2 = 'Bio Storage Tank';
                    }else if(this.val_2[1]=='rtd_37'){
                        this.tmp_label_2 = 'Bio Transfer Line';
                    }else if(this.val_2[1]=='stfm2_temp'){
                        this.tmp_label_2 = 'Main Steam Temp';
                    } else if(this.val_2[1]=='stfm1_temp'){
                        this.tmp_label_2 = 'Steam To E401 Temp';
                    }
                    ///////////////////////////////////////////////////////////
                      if(this.val_2[2]=='rtd_1'){
                        this.tmp_label_3 = 'E101';
                    }else if(this.val_2[2]=='rtd_2'){
                        this.tmp_label_3 = 'D101 A';
                    }else if(this.val_2[2]=='rtd_3'){
                        this.tmp_label_3 = 'D101 B';
                    }else if(this.val_2[2]=='rtd_4'){
                        this.tmp_label_3 = 'E201';
                    }else if(this.val_2[2]=='rtd_5'){
                        this.tmp_label_3 = 'GLV-TOP';
                    }else if(this.val_2[2]=='rtd_6'){
                        this.tmp_label_3 = 'GLV-Middle';
                    }else if(this.val_2[2]=='rtd_7'){
                        this.tmp_label_3 = 'GLV-Bottom';
                    }else if(this.val_2[2]=='rtd_8'){
                        this.tmp_label_3 = 'GLV Evaporizer';
                    }else if(this.val_2[2]=='rtd_9'){
                        this.tmp_label_3 = 'Settling Tanks(A)';
                    }else if(this.val_2[2]=='rtd_10'){
                        this.tmp_label_3 = 'Settling Tanks(B)';
                    }else if(this.val_2[2]=='rtd_11'){
                        this.tmp_label_3 = 'Settling Tanks(C)';
                    }else if(this.val_2[2]=='rtd_12'){
                        this.tmp_label_3 = 'Hot Water tank';
                    }else if(this.val_2[2]=='rtd_13'){
                        this.tmp_label_3 = 'D402 (A)';
                    }else if(this.val_2[2]=='rtd_14'){
                        this.tmp_label_3 = 'D402 (B)';
                    }else if(this.val_2[2]=='rtd_15'){
                        this.tmp_label_3 = 'D402 (C)';
                    }else if(this.val_2[2]=='rtd_16'){
                        this.tmp_label_3 = 'D402 (D)';
                    }else if(this.val_2[2]=='rtd_17'){
                        this.tmp_label_3 = 'Trans Evaporator';
                    }else if(this.val_2[2]=='rtd_18'){
                        this.tmp_label_3 = 'Blue Vessel';
                    }else if(this.val_2[2]=='rtd_19'){
                        this.tmp_label_3 = 'Green Vessel';
                    }else if(this.val_2[2]=='rtd_20'){
                        this.tmp_label_3 = 'Old Green Vessel';
                    }else if(this.val_2[2]=='rtd_21'){
                        this.tmp_label_3 = 'E601';
                    }else if(this.val_2[2]=='rtd_22'){
                        this.tmp_label_3 = 'T601-Top';
                    }else if(this.val_2[2]=='rtd_23'){
                        this.tmp_label_3 = 'T601-Middle';
                    }else if(this.val_2[2]=='rtd_24'){
                        this.tmp_label_3 = 'T601-Bottom';
                    }else if(this.val_2[2]=='rtd_25'){
                        this.tmp_label_3 = 'E501';
                    }else if(this.val_2[2]=='rtd_26'){
                        this.tmp_label_3 = 'D501';
                    }else if(this.val_2[2]=='rtd_27'){
                        this.tmp_label_3 = 'T501-Top';
                    }else if(this.val_2[2]=='rtd_28'){
                        this.tmp_label_3 = 'T501-middle';
                    }else if(this.val_2[2]=='rtd_29'){
                        this.tmp_label_3 = 'T501-Bottom';
                    }else if(this.val_2[2]=='rtd_30'){
                        this.tmp_label_3 = 'T502-Middle';
                    }else if(this.val_2[2]=='rtd_31'){
                        this.tmp_label_3 = 'T502-Bottom';
                    }else if(this.val_2[2]=='rtd_32'){
                        this.tmp_label_3 = 'PPRA';
                    }else if(this.val_2[2]=='rtd_33'){
                        this.tmp_label_3 = 'PPRB';
                    }else if(this.val_2[2]=='rtd_34'){
                        this.tmp_label_3 = 'GST1';
                    }else if(this.val_2[2]=='rtd_35'){
                        this.tmp_label_3 = 'Trans reactor';
                    }else if(this.val_2[2]=='rtd_36'){
                        this.tmp_label_3 = 'Bio Storage Tank';
                    }else if(this.val_2[2]=='rtd_37'){
                        this.tmp_label_3 = 'Bio Transfer Line';
                    }else if(this.val_2[2]=='stfm2_temp'){
                        this.tmp_label_3 = 'Main Steam Temp';
                    } else if(this.val_2[2]=='stfm1_temp'){
                        this.tmp_label_3 = 'Steam To E401 Temp';
                    }
                    ///////////////////////////////////////////////////////////
                      if(this.val_2[3]=='rtd_1'){
                        this.tmp_label_4 = 'E101';
                    }else if(this.val_2[3]=='rtd_2'){
                        this.tmp_label_4 = 'D101 A';
                    }else if(this.val_2[3]=='rtd_3'){
                        this.tmp_label_4 = 'D101 B';
                    }else if(this.val_2[3]=='rtd_4'){
                        this.tmp_label_4 = 'E201';
                    }else if(this.val_2[3]=='rtd_5'){
                        this.tmp_label_4 = 'GLV-TOP';
                    }else if(this.val_2[3]=='rtd_6'){
                        this.tmp_label_4 = 'GLV-Middle';
                    }else if(this.val_2[3]=='rtd_7'){
                        this.tmp_label_4 = 'GLV-Bottom';
                    }else if(this.val_2[3]=='rtd_8'){
                        this.tmp_label_4 = 'GLV Evaporizer';
                    }else if(this.val_2[3]=='rtd_9'){
                        this.tmp_label_4 = 'Settling Tanks(A)';
                    }else if(this.val_2[3]=='rtd_10'){
                        this.tmp_label_4 = 'Settling Tanks(B)';
                    }else if(this.val_2[3]=='rtd_11'){
                        this.tmp_label_4 = 'Settling Tanks(C)';
                    }else if(this.val_2[3]=='rtd_12'){
                        this.tmp_label_4 = 'Hot Water tank';
                    }else if(this.val_2[3]=='rtd_13'){
                        this.tmp_label_4 = 'D402 (A)';
                    }else if(this.val_2[3]=='rtd_14'){
                        this.tmp_label_4 = 'D402 (B)';
                    }else if(this.val_2[3]=='rtd_15'){
                        this.tmp_label_4 = 'D402 (C)';
                    }else if(this.val_2[3]=='rtd_16'){
                        this.tmp_label_4 = 'D402 (D)';
                    }else if(this.val_2[3]=='rtd_17'){
                        this.tmp_label_4 = 'Trans Evaporator';
                    }else if(this.val_2[3]=='rtd_18'){
                        this.tmp_label_4 = 'Blue Vessel';
                    }else if(this.val_2[3]=='rtd_19'){
                        this.tmp_label_4 = 'Green Vessel';
                    }else if(this.val_2[3]=='rtd_20'){
                        this.tmp_label_4 = 'Old Green Vessel';
                    }else if(this.val_2[3]=='rtd_21'){
                        this.tmp_label_4 = 'E601';
                    }else if(this.val_2[3]=='rtd_22'){
                        this.tmp_label_4 = 'T601-Top';
                    }else if(this.val_2[3]=='rtd_23'){
                        this.tmp_label_4 = 'T601-Middle';
                    }else if(this.val_2[3]=='rtd_24'){
                        this.tmp_label_4 = 'T601-Bottom';
                    }else if(this.val_2[3]=='rtd_25'){
                        this.tmp_label_4 = 'E501';
                    }else if(this.val_2[3]=='rtd_26'){
                        this.tmp_label_4 = 'D501';
                    }else if(this.val_2[3]=='rtd_27'){
                        this.tmp_label_4 = 'T501-Top';
                    }else if(this.val_2[3]=='rtd_28'){
                        this.tmp_label_4 = 'T501-middle';
                    }else if(this.val_2[3]=='rtd_29'){
                        this.tmp_label_4 = 'T501-Bottom';
                    }else if(this.val_2[3]=='rtd_30'){
                        this.tmp_label_4 = 'T502-Middle';
                    }else if(this.val_2[3]=='rtd_31'){
                        this.tmp_label_4 = 'T502-Bottom';
                    }else if(this.val_2[3]=='rtd_32'){
                        this.tmp_label_4 = 'PPRA';
                    }else if(this.val_2[3]=='rtd_33'){
                        this.tmp_label_4 = 'PPRB';
                    }else if(this.val_2[3]=='rtd_34'){
                        this.tmp_label_4 = 'GST1';
                    }else if(this.val_2[3]=='rtd_35'){
                        this.tmp_label_4 = 'Trans reactor';
                    }else if(this.val_2[3]=='rtd_36'){
                        this.tmp_label_4 = 'Bio Storage Tank';
                    }else if(this.val_2[3]=='rtd_37'){
                        this.tmp_label_4 = 'Bio Transfer Line';
                    }else if(this.val_2[3]=='stfm2_temp'){
                        this.tmp_label_4 = 'Main Steam Temp';
                    } else if(this.val_2[3]=='stfm1_temp'){
                        this.tmp_label_4 = 'Steam To E401 Temp';
                    }
                    ///////////////////////////////////////////////////////////
                      if(this.val_2[4]=='rtd_1'){
                        this.tmp_label_5 = 'E101';
                    }else if(this.val_2[4]=='rtd_2'){
                        this.tmp_label_5 = 'D101 A';
                    }else if(this.val_2[4]=='rtd_3'){
                        this.tmp_label_5 = 'D101 B';
                    }else if(this.val_2[4]=='rtd_4'){
                        this.tmp_label_5 = 'E201';
                    }else if(this.val_2[4]=='rtd_5'){
                        this.tmp_label_5 = 'GLV-TOP';
                    }else if(this.val_2[4]=='rtd_6'){
                        this.tmp_label_5 = 'GLV-Middle';
                    }else if(this.val_2[4]=='rtd_7'){
                        this.tmp_label_5 = 'GLV-Bottom';
                    }else if(this.val_2[4]=='rtd_8'){
                        this.tmp_label_5 = 'GLV Evaporizer';
                    }else if(this.val_2[4]=='rtd_9'){
                        this.tmp_label_5 = 'Settling Tanks(A)';
                    }else if(this.val_2[4]=='rtd_10'){
                        this.tmp_label_5 = 'Settling Tanks(B)';
                    }else if(this.val_2[4]=='rtd_11'){
                        this.tmp_label_5 = 'Settling Tanks(C)';
                    }else if(this.val_2[4]=='rtd_12'){
                        this.tmp_label_5 = 'Hot Water tank';
                    }else if(this.val_2[4]=='rtd_13'){
                        this.tmp_label_5 = 'D402 (A)';
                    }else if(this.val_2[4]=='rtd_14'){
                        this.tmp_label_5 = 'D402 (B)';
                    }else if(this.val_2[4]=='rtd_15'){
                        this.tmp_label_5 = 'D402 (C)';
                    }else if(this.val_2[4]=='rtd_16'){
                        this.tmp_label_5 = 'D402 (D)';
                    }else if(this.val_2[4]=='rtd_17'){
                        this.tmp_label_5 = 'Trans Evaporator';
                    }else if(this.val_2[4]=='rtd_18'){
                        this.tmp_label_5 = 'Blue Vessel';
                    }else if(this.val_2[4]=='rtd_19'){
                        this.tmp_label_5 = 'Green Vessel';
                    }else if(this.val_2[4]=='rtd_20'){
                        this.tmp_label_5 = 'Old Green Vessel';
                    }else if(this.val_2[4]=='rtd_21'){
                        this.tmp_label_5 = 'E601';
                    }else if(this.val_2[4]=='rtd_22'){
                        this.tmp_label_5 = 'T601-Top';
                    }else if(this.val_2[4]=='rtd_23'){
                        this.tmp_label_5 = 'T601-Middle';
                    }else if(this.val_2[4]=='rtd_24'){
                        this.tmp_label_5 = 'T601-Bottom';
                    }else if(this.val_2[4]=='rtd_25'){
                        this.tmp_label_5 = 'E501';
                    }else if(this.val_2[4]=='rtd_26'){
                        this.tmp_label_5 = 'D501';
                    }else if(this.val_2[4]=='rtd_27'){
                        this.tmp_label_5 = 'T501-Top';
                    }else if(this.val_2[4]=='rtd_28'){
                        this.tmp_label_5 = 'T501-middle';
                    }else if(this.val_2[4]=='rtd_29'){
                        this.tmp_label_5 = 'T501-Bottom';
                    }else if(this.val_2[4]=='rtd_30'){
                        this.tmp_label_5 = 'T502-Middle';
                    }else if(this.val_2[4]=='rtd_31'){
                        this.tmp_label_5 = 'T502-Bottom';
                    }else if(this.val_2[4]=='rtd_32'){
                        this.tmp_label_5 = 'PPRA';
                    }else if(this.val_2[4]=='rtd_33'){
                        this.tmp_label_5 = 'PPRB';
                    }else if(this.val_2[4]=='rtd_34'){
                        this.tmp_label_5 = 'GST1';
                    }else if(this.val_2[4]=='rtd_35'){
                        this.tmp_label_5 = 'Trans reactor';
                    }else if(this.val_2[4]=='rtd_36'){
                        this.tmp_label_5 = 'Bio Storage Tank';
                    }else if(this.val_2[4]=='rtd_37'){
                        this.tmp_label_5 = 'Bio Transfer Line';
                    }else if(this.val_2[4]=='stfm2_temp'){
                        this.tmp_label_5 = 'Main Steam Temp';
                    } else if(this.val_2[4]=='stfm1_temp'){
                        this.tmp_label_5 = 'Steam To E401 Temp';
                    }
                    ///////////////////////////////////////////////////////////
                      if(this.val_2[5]=='rtd_1'){
                        this.tmp_label_6 = 'E101';
                    }else if(this.val_2[5]=='rtd_2'){
                        this.tmp_label_6 = 'D101 A';
                    }else if(this.val_2[5]=='rtd_3'){
                        this.tmp_label_6 = 'D101 B';
                    }else if(this.val_2[5]=='rtd_4'){
                        this.tmp_label_6 = 'E201';
                    }else if(this.val_2[5]=='rtd_5'){
                        this.tmp_label_6 = 'GLV-TOP';
                    }else if(this.val_2[5]=='rtd_6'){
                        this.tmp_label_6 = 'GLV-Middle';
                    }else if(this.val_2[5]=='rtd_7'){
                        this.tmp_label_6 = 'GLV-Bottom';
                    }else if(this.val_2[5]=='rtd_8'){
                        this.tmp_label_6 = 'GLV Evaporizer';
                    }else if(this.val_2[5]=='rtd_9'){
                        this.tmp_label_6 = 'Settling Tanks(A)';
                    }else if(this.val_2[5]=='rtd_10'){
                        this.tmp_label_6 = 'Settling Tanks(B)';
                    }else if(this.val_2[5]=='rtd_11'){
                        this.tmp_label_6 = 'Settling Tanks(C)';
                    }else if(this.val_2[5]=='rtd_12'){
                        this.tmp_label_6 = 'Hot Water tank';
                    }else if(this.val_2[5]=='rtd_13'){
                        this.tmp_label_6 = 'D402 (A)';
                    }else if(this.val_2[5]=='rtd_14'){
                        this.tmp_label_6 = 'D402 (B)';
                    }else if(this.val_2[5]=='rtd_15'){
                        this.tmp_label_6 = 'D402 (C)';
                    }else if(this.val_2[5]=='rtd_16'){
                        this.tmp_label_6 = 'D402 (D)';
                    }else if(this.val_2[5]=='rtd_17'){
                        this.tmp_label_6 = 'Trans Evaporator';
                    }else if(this.val_2[5]=='rtd_18'){
                        this.tmp_label_6 = 'Blue Vessel';
                    }else if(this.val_2[5]=='rtd_19'){
                        this.tmp_label_6 = 'Green Vessel';
                    }else if(this.val_2[5]=='rtd_20'){
                        this.tmp_label_6 = 'Old Green Vessel';
                    }else if(this.val_2[5]=='rtd_21'){
                        this.tmp_label_6 = 'E601';
                    }else if(this.val_2[5]=='rtd_22'){
                        this.tmp_label_6 = 'T601-Top';
                    }else if(this.val_2[5]=='rtd_23'){
                        this.tmp_label_6 = 'T601-Middle';
                    }else if(this.val_2[5]=='rtd_24'){
                        this.tmp_label_6 = 'T601-Bottom';
                    }else if(this.val_2[5]=='rtd_25'){
                        this.tmp_label_6 = 'E501';
                    }else if(this.val_2[5]=='rtd_26'){
                        this.tmp_label_6 = 'D501';
                    }else if(this.val_2[5]=='rtd_27'){
                        this.tmp_label_6 = 'T501-Top';
                    }else if(this.val_2[5]=='rtd_28'){
                        this.tmp_label_6 = 'T501-middle';
                    }else if(this.val_2[5]=='rtd_29'){
                        this.tmp_label_6 = 'T501-Bottom';
                    }else if(this.val_2[5]=='rtd_30'){
                        this.tmp_label_6 = 'T502-Middle';
                    }else if(this.val_2[5]=='rtd_31'){
                        this.tmp_label_6 = 'T502-Bottom';
                    }else if(this.val_2[5]=='rtd_32'){
                        this.tmp_label_6 = 'PPRA';
                    }else if(this.val_2[5]=='rtd_33'){
                        this.tmp_label_6 = 'PPRB';
                    }else if(this.val_2[5]=='rtd_34'){
                        this.tmp_label_6 = 'GST1';
                    }else if(this.val_2[5]=='rtd_35'){
                        this.tmp_label_6 = 'Trans reactor';
                    }else if(this.val_2[5]=='rtd_36'){
                        this.tmp_label_6 = 'Bio Storage Tank';
                    }else if(this.val_2[5]=='rtd_37'){
                        this.tmp_label_6 = 'Bio Transfer Line';
                    }else if(this.val_2[5]=='stfm2_temp'){
                        this.tmp_label_6 = 'Main Steam Temp';
                    } else if(this.val_2[5]=='stfm1_temp'){
                        this.tmp_label_6 = 'Steam To E401 Temp';
                    }
                    ///////////////////////////////////////////////////////////
                      if(this.val_2[6]=='rtd_1'){
                        this.tmp_label_7 = 'E101';
                    }else if(this.val_2[6]=='rtd_2'){
                        this.tmp_label_7 = 'D101 A';
                    }else if(this.val_2[6]=='rtd_3'){
                        this.tmp_label_7 = 'D101 B';
                    }else if(this.val_2[6]=='rtd_4'){
                        this.tmp_label_7 = 'E201';
                    }else if(this.val_2[6]=='rtd_5'){
                        this.tmp_label_7 = 'GLV-TOP';
                    }else if(this.val_2[6]=='rtd_6'){
                        this.tmp_label_7 = 'GLV-Middle';
                    }else if(this.val_2[6]=='rtd_7'){
                        this.tmp_label_7 = 'GLV-Bottom';
                    }else if(this.val_2[6]=='rtd_8'){
                        this.tmp_label_7 = 'GLV Evaporizer';
                    }else if(this.val_2[6]=='rtd_9'){
                        this.tmp_label_7 = 'Settling Tanks(A)';
                    }else if(this.val_2[6]=='rtd_10'){
                        this.tmp_label_7 = 'Settling Tanks(B)';
                    }else if(this.val_2[6]=='rtd_11'){
                        this.tmp_label_7 = 'Settling Tanks(C)';
                    }else if(this.val_2[6]=='rtd_12'){
                        this.tmp_label_7 = 'Hot Water tank';
                    }else if(this.val_2[6]=='rtd_13'){
                        this.tmp_label_7 = 'D402 (A)';
                    }else if(this.val_2[6]=='rtd_14'){
                        this.tmp_label_7 = 'D402 (B)';
                    }else if(this.val_2[6]=='rtd_15'){
                        this.tmp_label_7 = 'D402 (C)';
                    }else if(this.val_2[6]=='rtd_16'){
                        this.tmp_label_7 = 'D402 (D)';
                    }else if(this.val_2[6]=='rtd_17'){
                        this.tmp_label_7 = 'Trans Evaporator';
                    }else if(this.val_2[6]=='rtd_18'){
                        this.tmp_label_7 = 'Blue Vessel';
                    }else if(this.val_2[6]=='rtd_19'){
                        this.tmp_label_7 = 'Green Vessel';
                    }else if(this.val_2[6]=='rtd_20'){
                        this.tmp_label_7 = 'Old Green Vessel';
                    }else if(this.val_2[6]=='rtd_21'){
                        this.tmp_label_7 = 'E601';
                    }else if(this.val_2[6]=='rtd_22'){
                        this.tmp_label_7 = 'T601-Top';
                    }else if(this.val_2[6]=='rtd_23'){
                        this.tmp_label_7 = 'T601-Middle';
                    }else if(this.val_2[6]=='rtd_24'){
                        this.tmp_label_7 = 'T601-Bottom';
                    }else if(this.val_2[6]=='rtd_25'){
                        this.tmp_label_7 = 'E501';
                    }else if(this.val_2[6]=='rtd_26'){
                        this.tmp_label_7 = 'D501';
                    }else if(this.val_2[6]=='rtd_27'){
                        this.tmp_label_7 = 'T501-Top';
                    }else if(this.val_2[6]=='rtd_28'){
                        this.tmp_label_7 = 'T501-middle';
                    }else if(this.val_2[6]=='rtd_29'){
                        this.tmp_label_7 = 'T501-Bottom';
                    }else if(this.val_2[6]=='rtd_30'){
                        this.tmp_label_7 = 'T502-Middle';
                    }else if(this.val_2[6]=='rtd_31'){
                        this.tmp_label_7 = 'T502-Bottom';
                    }else if(this.val_2[6]=='rtd_32'){
                        this.tmp_label_7 = 'PPRA';
                    }else if(this.val_2[6]=='rtd_33'){
                        this.tmp_label_7 = 'PPRB';
                    }else if(this.val_2[6]=='rtd_34'){
                        this.tmp_label_7 = 'GST1';
                    }else if(this.val_2[6]=='rtd_35'){
                        this.tmp_label_7 = 'Trans reactor';
                    }else if(this.val_2[6]=='rtd_36'){
                        this.tmp_label_7 = 'Bio Storage Tank';
                    }else if(this.val_2[6]=='rtd_37'){
                        this.tmp_label_7 = 'Bio Transfer Line';
                    }else if(this.val_2[6]=='stfm2_temp'){
                        this.tmp_label_7 = 'Main Steam Temp';
                    } else if(this.val_2[6]=='stfm1_temp'){
                        this.tmp_label_7 = 'Steam To E401 Temp';
                    }
                    ///////////////////////////////////////////////////////////
                      if(this.val_2[7]=='rtd_1'){
                        this.tmp_label_8 = 'E101';
                    }else if(this.val_2[7]=='rtd_2'){
                        this.tmp_label_8 = 'D101 A';
                    }else if(this.val_2[7]=='rtd_3'){
                        this.tmp_label_8 = 'D101 B';
                    }else if(this.val_2[7]=='rtd_4'){
                        this.tmp_label_8 = 'E201';
                    }else if(this.val_2[7]=='rtd_5'){
                        this.tmp_label_8 = 'GLV-TOP';
                    }else if(this.val_2[7]=='rtd_6'){
                        this.tmp_label_8 = 'GLV-Middle';
                    }else if(this.val_2[7]=='rtd_7'){
                        this.tmp_label_8 = 'GLV-Bottom';
                    }else if(this.val_2[7]=='rtd_8'){
                        this.tmp_label_8 = 'GLV Evaporizer';
                    }else if(this.val_2[7]=='rtd_9'){
                        this.tmp_label_8 = 'Settling Tanks(A)';
                    }else if(this.val_2[7]=='rtd_10'){
                        this.tmp_label_8 = 'Settling Tanks(B)';
                    }else if(this.val_2[7]=='rtd_11'){
                        this.tmp_label_8 = 'Settling Tanks(C)';
                    }else if(this.val_2[7]=='rtd_12'){
                        this.tmp_label_8 = 'Hot Water tank';
                    }else if(this.val_2[7]=='rtd_13'){
                        this.tmp_label_8 = 'D402 (A)';
                    }else if(this.val_2[7]=='rtd_14'){
                        this.tmp_label_8 = 'D402 (B)';
                    }else if(this.val_2[7]=='rtd_15'){
                        this.tmp_label_8 = 'D402 (C)';
                    }else if(this.val_2[7]=='rtd_16'){
                        this.tmp_label_8 = 'D402 (D)';
                    }else if(this.val_2[7]=='rtd_17'){
                        this.tmp_label_8 = 'Trans Evaporator';
                    }else if(this.val_2[7]=='rtd_18'){
                        this.tmp_label_8 = 'Blue Vessel';
                    }else if(this.val_2[7]=='rtd_19'){
                        this.tmp_label_8 = 'Green Vessel';
                    }else if(this.val_2[7]=='rtd_20'){
                        this.tmp_label_8 = 'Old Green Vessel';
                    }else if(this.val_2[7]=='rtd_21'){
                        this.tmp_label_8 = 'E601';
                    }else if(this.val_2[7]=='rtd_22'){
                        this.tmp_label_8 = 'T601-Top';
                    }else if(this.val_2[7]=='rtd_23'){
                        this.tmp_label_8 = 'T601-Middle';
                    }else if(this.val_2[7]=='rtd_24'){
                        this.tmp_label_8 = 'T601-Bottom';
                    }else if(this.val_2[7]=='rtd_25'){
                        this.tmp_label_8 = 'E501';
                    }else if(this.val_2[7]=='rtd_26'){
                        this.tmp_label_8 = 'D501';
                    }else if(this.val_2[7]=='rtd_27'){
                        this.tmp_label_8 = 'T501-Top';
                    }else if(this.val_2[7]=='rtd_28'){
                        this.tmp_label_8 = 'T501-middle';
                    }else if(this.val_2[7]=='rtd_29'){
                        this.tmp_label_8 = 'T501-Bottom';
                    }else if(this.val_2[7]=='rtd_30'){
                        this.tmp_label_8 = 'T502-Middle';
                    }else if(this.val_2[7]=='rtd_31'){
                        this.tmp_label_8 = 'T502-Bottom';
                    }else if(this.val_2[7]=='rtd_32'){
                        this.tmp_label_8 = 'PPRA';
                    }else if(this.val_2[7]=='rtd_33'){
                        this.tmp_label_8 = 'PPRB';
                    }else if(this.val_2[7]=='rtd_34'){
                        this.tmp_label_8 = 'GST1';
                    }else if(this.val_2[7]=='rtd_35'){
                        this.tmp_label_8 = 'Trans reactor';
                    }else if(this.val_2[7]=='rtd_36'){
                        this.tmp_label_8 = 'Bio Storage Tank';
                    }else if(this.val_2[7]=='rtd_37'){
                        this.tmp_label_8 = 'Bio Transfer Line';
                    }else if(this.val_2[7]=='stfm2_temp'){
                        this.tmp_label_8 = 'Main Steam Temp';
                    } else if(this.val_2[7]=='stfm1_temp'){
                        this.tmp_label_8 = 'Steam To E401 Temp';
                    }
                    ///////////////////////////////////////////////////////////
                      if(this.val_2[8]=='rtd_1'){
                        this.tmp_label_9 = 'E101';
                    }else if(this.val_2[8]=='rtd_2'){
                        this.tmp_label_9 = 'D101 A';
                    }else if(this.val_2[8]=='rtd_3'){
                        this.tmp_label_9 = 'D101 B';
                    }else if(this.val_2[8]=='rtd_4'){
                        this.tmp_label_9 = 'E201';
                    }else if(this.val_2[8]=='rtd_5'){
                        this.tmp_label_9 = 'GLV-TOP';
                    }else if(this.val_2[8]=='rtd_6'){
                        this.tmp_label_9 = 'GLV-Middle';
                    }else if(this.val_2[8]=='rtd_7'){
                        this.tmp_label_9 = 'GLV-Bottom';
                    }else if(this.val_2[8]=='rtd_8'){
                        this.tmp_label_9 = 'GLV Evaporizer';
                    }else if(this.val_2[8]=='rtd_9'){
                        this.tmp_label_9 = 'Settling Tanks(A)';
                    }else if(this.val_2[8]=='rtd_10'){
                        this.tmp_label_9 = 'Settling Tanks(B)';
                    }else if(this.val_2[8]=='rtd_11'){
                        this.tmp_label_9 = 'Settling Tanks(C)';
                    }else if(this.val_2[8]=='rtd_12'){
                        this.tmp_label_9 = 'Hot Water tank';
                    }else if(this.val_2[8]=='rtd_13'){
                        this.tmp_label_9 = 'D402 (A)';
                    }else if(this.val_2[8]=='rtd_14'){
                        this.tmp_label_9 = 'D402 (B)';
                    }else if(this.val_2[8]=='rtd_15'){
                        this.tmp_label_9 = 'D402 (C)';
                    }else if(this.val_2[8]=='rtd_16'){
                        this.tmp_label_9 = 'D402 (D)';
                    }else if(this.val_2[8]=='rtd_17'){
                        this.tmp_label_9 = 'Trans Evaporator';
                    }else if(this.val_2[8]=='rtd_18'){
                        this.tmp_label_9 = 'Blue Vessel';
                    }else if(this.val_2[8]=='rtd_19'){
                        this.tmp_label_9 = 'Green Vessel';
                    }else if(this.val_2[8]=='rtd_20'){
                        this.tmp_label_9 = 'Old Green Vessel';
                    }else if(this.val_2[8]=='rtd_21'){
                        this.tmp_label_9 = 'E601';
                    }else if(this.val_2[8]=='rtd_22'){
                        this.tmp_label_9 = 'T601-Top';
                    }else if(this.val_2[8]=='rtd_23'){
                        this.tmp_label_9 = 'T601-Middle';
                    }else if(this.val_2[8]=='rtd_24'){
                        this.tmp_label_9 = 'T601-Bottom';
                    }else if(this.val_2[8]=='rtd_25'){
                        this.tmp_label_9 = 'E501';
                    }else if(this.val_2[8]=='rtd_26'){
                        this.tmp_label_9 = 'D501';
                    }else if(this.val_2[8]=='rtd_27'){
                        this.tmp_label_9 = 'T501-Top';
                    }else if(this.val_2[8]=='rtd_28'){
                        this.tmp_label_9 = 'T501-middle';
                    }else if(this.val_2[8]=='rtd_29'){
                        this.tmp_label_9 = 'T501-Bottom';
                    }else if(this.val_2[8]=='rtd_30'){
                        this.tmp_label_9 = 'T502-Middle';
                    }else if(this.val_2[8]=='rtd_31'){
                        this.tmp_label_9 = 'T502-Bottom';
                    }else if(this.val_2[8]=='rtd_32'){
                        this.tmp_label_9 = 'PPRA';
                    }else if(this.val_2[8]=='rtd_33'){
                        this.tmp_label_9 = 'PPRB';
                    }else if(this.val_2[8]=='rtd_34'){
                        this.tmp_label_9 = 'GST1';
                    }else if(this.val_2[8]=='rtd_35'){
                        this.tmp_label_9 = 'Trans reactor';
                    }else if(this.val_2[8]=='rtd_36'){
                        this.tmp_label_9 = 'Bio Storage Tank';
                    }else if(this.val_2[8]=='rtd_37'){
                        this.tmp_label_9 = 'Bio Transfer Line';
                    }else if(this.val_2[8]=='stfm2_temp'){
                        this.tmp_label_9 = 'Main Steam Temp';
                    }else if(this.val_2[8]=='stfm1_temp'){
                        this.tmp_label_9 = 'Steam To E401 Temp';
                    }
                    ///////////////////////////////////////////////////////////
                      if(this.val_2[9]=='rtd_1'){
                        this.tmp_label_10 = 'E101';
                    }else if(this.val_2[9]=='rtd_2'){
                        this.tmp_label_10 = 'D101 A';
                    }else if(this.val_2[9]=='rtd_3'){
                        this.tmp_label_10 = 'D101 B';
                    }else if(this.val_2[9]=='rtd_4'){
                        this.tmp_label_10 = 'E201';
                    }else if(this.val_2[9]=='rtd_5'){
                        this.tmp_label_10 = 'GLV-TOP';
                    }else if(this.val_2[9]=='rtd_6'){
                        this.tmp_label_10 = 'GLV-Middle';
                    }else if(this.val_2[9]=='rtd_7'){
                        this.tmp_label_10 = 'GLV-Bottom';
                    }else if(this.val_2[9]=='rtd_8'){
                        this.tmp_label_10 = 'GLV Evaporizer';
                    }else if(this.val_2[9]=='rtd_9'){
                        this.tmp_label_10 = 'Settling Tanks(A)';
                    }else if(this.val_2[9]=='rtd_10'){
                        this.tmp_label_10 = 'Settling Tanks(B)';
                    }else if(this.val_2[9]=='rtd_11'){
                        this.tmp_label_10 = 'Settling Tanks(C)';
                    }else if(this.val_2[9]=='rtd_12'){
                        this.tmp_label_10 = 'Hot Water tank';
                    }else if(this.val_2[9]=='rtd_13'){
                        this.tmp_label_10 = 'D402 (A)';
                    }else if(this.val_2[9]=='rtd_14'){
                        this.tmp_label_10 = 'D402 (B)';
                    }else if(this.val_2[9]=='rtd_15'){
                        this.tmp_label_10 = 'D402 (C)';
                    }else if(this.val_2[9]=='rtd_16'){
                        this.tmp_label_10 = 'D402 (D)';
                    }else if(this.val_2[9]=='rtd_17'){
                        this.tmp_label_10 = 'Trans Evaporator';
                    }else if(this.val_2[9]=='rtd_18'){
                        this.tmp_label_10 = 'Blue Vessel';
                    }else if(this.val_2[9]=='rtd_19'){
                        this.tmp_label_10 = 'Green Vessel';
                    }else if(this.val_2[9]=='rtd_20'){
                        this.tmp_label_10 = 'Old Green Vessel';
                    }else if(this.val_2[9]=='rtd_21'){
                        this.tmp_label_10 = 'E601';
                    }else if(this.val_2[9]=='rtd_22'){
                        this.tmp_label_10 = 'T601-Top';
                    }else if(this.val_2[9]=='rtd_23'){
                        this.tmp_label_10 = 'T601-Middle';
                    }else if(this.val_2[9]=='rtd_24'){
                        this.tmp_label_10 = 'T601-Bottom';
                    }else if(this.val_2[9]=='rtd_25'){
                        this.tmp_label_10 = 'E501';
                    }else if(this.val_2[9]=='rtd_26'){
                        this.tmp_label_10 = 'D501';
                    }else if(this.val_2[9]=='rtd_27'){
                        this.tmp_label_10 = 'T501-Top';
                    }else if(this.val_2[9]=='rtd_28'){
                        this.tmp_label_10 = 'T501-middle';
                    }else if(this.val_2[9]=='rtd_29'){
                        this.tmp_label_10 = 'T501-Bottom';
                    }else if(this.val_2[9]=='rtd_30'){
                        this.tmp_label_10 = 'T502-Middle';
                    }else if(this.val_2[9]=='rtd_31'){
                        this.tmp_label_10 = 'T502-Bottom';
                    }else if(this.val_2[9]=='rtd_32'){
                        this.tmp_label_10 = 'PPRA';
                    }else if(this.val_2[9]=='rtd_33'){
                        this.tmp_label_10 = 'PPRB';
                    }else if(this.val_2[9]=='rtd_34'){
                        this.tmp_label_10 = 'GST1';
                    }else if(this.val_2[9]=='rtd_35'){
                        this.tmp_label_10 = 'Trans reactor';
                    }else if(this.val_2[9]=='rtd_36'){
                        this.tmp_label_10 = 'Bio Storage Tank';
                    }else if(this.val_2[9]=='rtd_37'){
                        this.tmp_label_10 = 'Bio Transfer Line';
                    }else if(this.val_2[9]=='stfm2_temp'){
                        this.tmp_label_10 = 'Main Steam Temp';
                    }else if(this.val_2[9]=='stfm1_temp'){
                        this.tmp_label_10 = 'Steam To E401 Temp';
                    }
                    ///////////////////////////////////////////////////////////
                      if(this.val_2[10]=='rtd_1'){
                        this.tmp_label_11 = 'E101';
                    }else if(this.val_2[10]=='rtd_2'){
                        this.tmp_label_11 = 'D101 A';
                    }else if(this.val_2[10]=='rtd_3'){
                        this.tmp_label_11 = 'D101 B';
                    }else if(this.val_2[10]=='rtd_4'){
                        this.tmp_label_11 = 'E201';
                    }else if(this.val_2[10]=='rtd_5'){
                        this.tmp_label_11 = 'GLV-TOP';
                    }else if(this.val_2[10]=='rtd_6'){
                        this.tmp_label_11 = 'GLV-Middle';
                    }else if(this.val_2[10]=='rtd_7'){
                        this.tmp_label_11 = 'GLV-Bottom';
                    }else if(this.val_2[10]=='rtd_8'){
                        this.tmp_label_11 = 'GLV Evaporizer';
                    }else if(this.val_2[10]=='rtd_9'){
                        this.tmp_label_11 = 'Settling Tanks(A)';
                    }else if(this.val_2[10]=='rtd_10'){
                        this.tmp_label_11 = 'Settling Tanks(B)';
                    }else if(this.val_2[10]=='rtd_11'){
                        this.tmp_label_11 = 'Settling Tanks(C)';
                    }else if(this.val_2[10]=='rtd_12'){
                        this.tmp_label_11 = 'Hot Water tank';
                    }else if(this.val_2[10]=='rtd_13'){
                        this.tmp_label_11 = 'D402 (A)';
                    }else if(this.val_2[10]=='rtd_14'){
                        this.tmp_label_11 = 'D402 (B)';
                    }else if(this.val_2[10]=='rtd_15'){
                        this.tmp_label_11 = 'D402 (C)';
                    }else if(this.val_2[10]=='rtd_16'){
                        this.tmp_label_11 = 'D402 (D)';
                    }else if(this.val_2[10]=='rtd_17'){
                        this.tmp_label_11 = 'Trans Evaporator';
                    }else if(this.val_2[10]=='rtd_18'){
                        this.tmp_label_11 = 'Blue Vessel';
                    }else if(this.val_2[10]=='rtd_19'){
                        this.tmp_label_11 = 'Green Vessel';
                    }else if(this.val_2[10]=='rtd_20'){
                        this.tmp_label_11 = 'Old Green Vessel';
                    }else if(this.val_2[10]=='rtd_21'){
                        this.tmp_label_11 = 'E601';
                    }else if(this.val_2[10]=='rtd_22'){
                        this.tmp_label_11 = 'T601-Top';
                    }else if(this.val_2[10]=='rtd_23'){
                        this.tmp_label_11 = 'T601-Middle';
                    }else if(this.val_2[10]=='rtd_24'){
                        this.tmp_label_11 = 'T601-Bottom';
                    }else if(this.val_2[10]=='rtd_25'){
                        this.tmp_label_11 = 'E501';
                    }else if(this.val_2[10]=='rtd_26'){
                        this.tmp_label_11 = 'D501';
                    }else if(this.val_2[10]=='rtd_27'){
                        this.tmp_label_11 = 'T501-Top';
                    }else if(this.val_2[10]=='rtd_28'){
                        this.tmp_label_11 = 'T501-middle';
                    }else if(this.val_2[10]=='rtd_29'){
                        this.tmp_label_11 = 'T501-Bottom';
                    }else if(this.val_2[10]=='rtd_30'){
                        this.tmp_label_11 = 'T502-Middle';
                    }else if(this.val_2[10]=='rtd_31'){
                        this.tmp_label_11 = 'T502-Bottom';
                    }else if(this.val_2[10]=='rtd_32'){
                        this.tmp_label_11 = 'PPRA';
                    }else if(this.val_2[10]=='rtd_33'){
                        this.tmp_label_11 = 'PPRB';
                    }else if(this.val_2[10]=='rtd_34'){
                        this.tmp_label_11 = 'GST1';
                    }else if(this.val_2[10]=='rtd_35'){
                        this.tmp_label_11 = 'Trans reactor';
                    }else if(this.val_2[10]=='rtd_36'){
                        this.tmp_label_11 = 'Bio Storage Tank';
                    }else if(this.val_2[10]=='rtd_37'){
                        this.tmp_label_11 = 'Bio Transfer Line';
                    }else if(this.val_2[10]=='stfm2_temp'){
                        this.tmp_label_11 = 'Main Steam Temp';
                    }else if(this.val_2[10]=='stfm1_temp'){
                        this.tmp_label_11 = 'Steam To E401 Temp';
                    }
                    ///////////////////////////////////////////////////////////
                      if(this.val_2[11]=='rtd_1'){
                        this.tmp_label_12 = 'E101';
                    }else if(this.val_2[11]=='rtd_2'){
                        this.tmp_label_12 = 'D101 A';
                    }else if(this.val_2[11]=='rtd_3'){
                        this.tmp_label_12 = 'D101 B';
                    }else if(this.val_2[11]=='rtd_4'){
                        this.tmp_label_12 = 'E201';
                    }else if(this.val_2[11]=='rtd_5'){
                        this.tmp_label_12 = 'GLV-TOP';
                    }else if(this.val_2[11]=='rtd_6'){
                        this.tmp_label_12 = 'GLV-Middle';
                    }else if(this.val_2[11]=='rtd_7'){
                        this.tmp_label_12 = 'GLV-Bottom';
                    }else if(this.val_2[11]=='rtd_8'){
                        this.tmp_label_12 = 'GLV Evaporizer';
                    }else if(this.val_2[11]=='rtd_9'){
                        this.tmp_label_12 = 'Settling Tanks(A)';
                    }else if(this.val_2[11]=='rtd_10'){
                        this.tmp_label_12 = 'Settling Tanks(B)';
                    }else if(this.val_2[11]=='rtd_11'){
                        this.tmp_label_12 = 'Settling Tanks(C)';
                    }else if(this.val_2[11]=='rtd_12'){
                        this.tmp_label_12 = 'Hot Water tank';
                    }else if(this.val_2[11]=='rtd_13'){
                        this.tmp_label_12 = 'D402 (A)';
                    }else if(this.val_2[11]=='rtd_14'){
                        this.tmp_label_12 = 'D402 (B)';
                    }else if(this.val_2[11]=='rtd_15'){
                        this.tmp_label_12 = 'D402 (C)';
                    }else if(this.val_2[11]=='rtd_16'){
                        this.tmp_label_12 = 'D402 (D)';
                    }else if(this.val_2[11]=='rtd_17'){
                        this.tmp_label_12 = 'Trans Evaporator';
                    }else if(this.val_2[11]=='rtd_18'){
                        this.tmp_label_12 = 'Blue Vessel';
                    }else if(this.val_2[11]=='rtd_19'){
                        this.tmp_label_12 = 'Green Vessel';
                    }else if(this.val_2[11]=='rtd_20'){
                        this.tmp_label_12 = 'Old Green Vessel';
                    }else if(this.val_2[11]=='rtd_21'){
                        this.tmp_label_12 = 'E601';
                    }else if(this.val_2[11]=='rtd_22'){
                        this.tmp_label_12 = 'T601-Top';
                    }else if(this.val_2[11]=='rtd_23'){
                        this.tmp_label_12 = 'T601-Middle';
                    }else if(this.val_2[11]=='rtd_24'){
                        this.tmp_label_12 = 'T601-Bottom';
                    }else if(this.val_2[11]=='rtd_25'){
                        this.tmp_label_12 = 'E501';
                    }else if(this.val_2[11]=='rtd_26'){
                        this.tmp_label_12 = 'D501';
                    }else if(this.val_2[11]=='rtd_27'){
                        this.tmp_label_12 = 'T501-Top';
                    }else if(this.val_2[11]=='rtd_28'){
                        this.tmp_label_12 = 'T501-middle';
                    }else if(this.val_2[11]=='rtd_29'){
                        this.tmp_label_12 = 'T501-Bottom';
                    }else if(this.val_2[11]=='rtd_30'){
                        this.tmp_label_12 = 'T502-Middle';
                    }else if(this.val_2[11]=='rtd_31'){
                        this.tmp_label_12 = 'T502-Bottom';
                    }else if(this.val_2[11]=='rtd_32'){
                        this.tmp_label_12 = 'PPRA';
                    }else if(this.val_2[11]=='rtd_33'){
                        this.tmp_label_12 = 'PPRB';
                    }else if(this.val_2[11]=='rtd_34'){
                        this.tmp_label_12 = 'GST1';
                    }else if(this.val_2[11]=='rtd_35'){
                        this.tmp_label_12 = 'Trans reactor';
                    }else if(this.val_2[11]=='rtd_36'){
                        this.tmp_label_12 = 'Bio Storage Tank';
                    }else if(this.val_2[11]=='rtd_37'){
                        this.tmp_label_12 = 'Bio Transfer Line';
                    }else if(this.val_2[11]=='stfm2_temp'){
                        this.tmp_label_12 = 'Main Steam Temp';
                    }else if(this.val_2[11]=='stfm1_temp'){
                        this.tmp_label_12 = 'Steam To E401 Temp';
                    }
                    ///////////////////////////////////////////////////////////
                      if(this.val_2[12]=='rtd_1'){
                        this.tmp_label_13 = 'E101';
                    }else if(this.val_2[12]=='rtd_2'){
                        this.tmp_label_13 = 'D101 A';
                    }else if(this.val_2[12]=='rtd_3'){
                        this.tmp_label_13 = 'D101 B';
                    }else if(this.val_2[12]=='rtd_4'){
                        this.tmp_label_13 = 'E201';
                    }else if(this.val_2[12]=='rtd_5'){
                        this.tmp_label_13 = 'GLV-TOP';
                    }else if(this.val_2[12]=='rtd_6'){
                        this.tmp_label_13 = 'GLV-Middle';
                    }else if(this.val_2[12]=='rtd_7'){
                        this.tmp_label_13 = 'GLV-Bottom';
                    }else if(this.val_2[12]=='rtd_8'){
                        this.tmp_label_13 = 'GLV Evaporizer';
                    }else if(this.val_2[12]=='rtd_9'){
                        this.tmp_label_13 = 'Settling Tanks(A)';
                    }else if(this.val_2[12]=='rtd_10'){
                        this.tmp_label_13 = 'Settling Tanks(B)';
                    }else if(this.val_2[12]=='rtd_11'){
                        this.tmp_label_13 = 'Settling Tanks(C)';
                    }else if(this.val_2[12]=='rtd_12'){
                        this.tmp_label_13 = 'Hot Water tank';
                    }else if(this.val_2[12]=='rtd_13'){
                        this.tmp_label_13 = 'D402 (A)';
                    }else if(this.val_2[12]=='rtd_14'){
                        this.tmp_label_13 = 'D402 (B)';
                    }else if(this.val_2[12]=='rtd_15'){
                        this.tmp_label_13 = 'D402 (C)';
                    }else if(this.val_2[12]=='rtd_16'){
                        this.tmp_label_13 = 'D402 (D)';
                    }else if(this.val_2[12]=='rtd_17'){
                        this.tmp_label_13 = 'Trans Evaporator';
                    }else if(this.val_2[12]=='rtd_18'){
                        this.tmp_label_13 = 'Blue Vessel';
                    }else if(this.val_2[12]=='rtd_19'){
                        this.tmp_label_13 = 'Green Vessel';
                    }else if(this.val_2[12]=='rtd_20'){
                        this.tmp_label_13 = 'Old Green Vessel';
                    }else if(this.val_2[12]=='rtd_21'){
                        this.tmp_label_13 = 'E601';
                    }else if(this.val_2[12]=='rtd_22'){
                        this.tmp_label_13 = 'T601-Top';
                    }else if(this.val_2[12]=='rtd_23'){
                        this.tmp_label_13 = 'T601-Middle';
                    }else if(this.val_2[12]=='rtd_24'){
                        this.tmp_label_13 = 'T601-Bottom';
                    }else if(this.val_2[12]=='rtd_25'){
                        this.tmp_label_13 = 'E501';
                    }else if(this.val_2[12]=='rtd_26'){
                        this.tmp_label_13 = 'D501';
                    }else if(this.val_2[12]=='rtd_27'){
                        this.tmp_label_13 = 'T501-Top';
                    }else if(this.val_2[12]=='rtd_28'){
                        this.tmp_label_13 = 'T501-middle';
                    }else if(this.val_2[12]=='rtd_29'){
                        this.tmp_label_13 = 'T501-Bottom';
                    }else if(this.val_2[12]=='rtd_30'){
                        this.tmp_label_13 = 'T502-Middle';
                    }else if(this.val_2[12]=='rtd_31'){
                        this.tmp_label_13 = 'T502-Bottom';
                    }else if(this.val_2[12]=='rtd_32'){
                        this.tmp_label_13 = 'PPRA';
                    }else if(this.val_2[12]=='rtd_33'){
                        this.tmp_label_13 = 'PPRB';
                    }else if(this.val_2[12]=='rtd_34'){
                        this.tmp_label_13 = 'GST1';
                    }else if(this.val_2[12]=='rtd_35'){
                        this.tmp_label_13 = 'Trans reactor';
                    }else if(this.val_2[12]=='rtd_36'){
                        this.tmp_label_13 = 'Bio Storage Tank';
                    }else if(this.val_2[12]=='rtd_37'){
                        this.tmp_label_13 = 'Bio Transfer Line';
                    }else if(this.val_2[12]=='stfm2_temp'){
                        this.tmp_label_13 = 'Main Steam Temp';
                    }else if(this.val_2[12]=='stfm1_temp'){
                        this.tmp_label_13 = 'Steam To E401 Temp';
                    }
                    ///////////////////////////////////////////////////////////
                      if(this.val_2[13]=='rtd_1'){
                        this.tmp_label_14 = 'E101';
                    }else if(this.val_2[13]=='rtd_2'){
                        this.tmp_label_14 = 'D101 A';
                    }else if(this.val_2[13]=='rtd_3'){
                        this.tmp_label_14 = 'D101 B';
                    }else if(this.val_2[13]=='rtd_4'){
                        this.tmp_label_14 = 'E201';
                    }else if(this.val_2[13]=='rtd_5'){
                        this.tmp_label_14 = 'GLV-TOP';
                    }else if(this.val_2[13]=='rtd_6'){
                        this.tmp_label_14 = 'GLV-Middle';
                    }else if(this.val_2[13]=='rtd_7'){
                        this.tmp_label_14 = 'GLV-Bottom';
                    }else if(this.val_2[13]=='rtd_8'){
                        this.tmp_label_14 = 'GLV Evaporizer';
                    }else if(this.val_2[13]=='rtd_9'){
                        this.tmp_label_14 = 'Settling Tanks(A)';
                    }else if(this.val_2[13]=='rtd_10'){
                        this.tmp_label_14 = 'Settling Tanks(B)';
                    }else if(this.val_2[13]=='rtd_11'){
                        this.tmp_label_14 = 'Settling Tanks(C)';
                    }else if(this.val_2[13]=='rtd_12'){
                        this.tmp_label_14 = 'Hot Water tank';
                    }else if(this.val_2[13]=='rtd_13'){
                        this.tmp_label_14 = 'D402 (A)';
                    }else if(this.val_2[13]=='rtd_14'){
                        this.tmp_label_14 = 'D402 (B)';
                    }else if(this.val_2[13]=='rtd_15'){
                        this.tmp_label_14 = 'D402 (C)';
                    }else if(this.val_2[13]=='rtd_16'){
                        this.tmp_label_14 = 'D402 (D)';
                    }else if(this.val_2[13]=='rtd_17'){
                        this.tmp_label_14 = 'Trans Evaporator';
                    }else if(this.val_2[13]=='rtd_18'){
                        this.tmp_label_14 = 'Blue Vessel';
                    }else if(this.val_2[13]=='rtd_19'){
                        this.tmp_label_14 = 'Green Vessel';
                    }else if(this.val_2[13]=='rtd_20'){
                        this.tmp_label_14 = 'Old Green Vessel';
                    }else if(this.val_2[13]=='rtd_21'){
                        this.tmp_label_14 = 'E601';
                    }else if(this.val_2[13]=='rtd_22'){
                        this.tmp_label_14 = 'T601-Top';
                    }else if(this.val_2[13]=='rtd_23'){
                        this.tmp_label_14 = 'T601-Middle';
                    }else if(this.val_2[13]=='rtd_24'){
                        this.tmp_label_14 = 'T601-Bottom';
                    }else if(this.val_2[13]=='rtd_25'){
                        this.tmp_label_14 = 'E501';
                    }else if(this.val_2[13]=='rtd_26'){
                        this.tmp_label_14 = 'D501';
                    }else if(this.val_2[13]=='rtd_27'){
                        this.tmp_label_14 = 'T501-Top';
                    }else if(this.val_2[13]=='rtd_28'){
                        this.tmp_label_14 = 'T501-middle';
                    }else if(this.val_2[13]=='rtd_29'){
                        this.tmp_label_14 = 'T501-Bottom';
                    }else if(this.val_2[13]=='rtd_30'){
                        this.tmp_label_14 = 'T502-Middle';
                    }else if(this.val_2[13]=='rtd_31'){
                        this.tmp_label_14 = 'T502-Bottom';
                    }else if(this.val_2[13]=='rtd_32'){
                        this.tmp_label_14 = 'PPRA';
                    }else if(this.val_2[13]=='rtd_33'){
                        this.tmp_label_14 = 'PPRB';
                    }else if(this.val_2[13]=='rtd_34'){
                        this.tmp_label_14 = 'GST1';
                    }else if(this.val_2[13]=='rtd_35'){
                        this.tmp_label_14 = 'Trans reactor';
                    }else if(this.val_2[13]=='rtd_36'){
                        this.tmp_label_14 = 'Bio Storage Tank';
                    }else if(this.val_2[13]=='rtd_37'){
                        this.tmp_label_14 = 'Bio Transfer Line';
                    }else if(this.val_2[13]=='stfm2_temp'){
                        this.tmp_label_14 = 'Main Steam Temp';
                    }else if(this.val_2[13]=='stfm1_temp'){
                        this.tmp_label_14 = 'Steam To E401 Temp';
                    }
                    ///////////////////////////////////////////////////////////
                      if(this.val_2[14]=='rtd_1'){
                        this.tmp_label_15 = 'E101';
                    }else if(this.val_2[14]=='rtd_2'){
                        this.tmp_label_15 = 'D101 A';
                    }else if(this.val_2[14]=='rtd_3'){
                        this.tmp_label_15 = 'D101 B';
                    }else if(this.val_2[14]=='rtd_4'){
                        this.tmp_label_15 = 'E201';
                    }else if(this.val_2[14]=='rtd_5'){
                        this.tmp_label_15 = 'GLV-TOP';
                    }else if(this.val_2[14]=='rtd_6'){
                        this.tmp_label_15 = 'GLV-Middle';
                    }else if(this.val_2[14]=='rtd_7'){
                        this.tmp_label_15 = 'GLV-Bottom';
                    }else if(this.val_2[14]=='rtd_8'){
                        this.tmp_label_15 = 'GLV Evaporizer';
                    }else if(this.val_2[14]=='rtd_9'){
                        this.tmp_label_15 = 'Settling Tanks(A)';
                    }else if(this.val_2[14]=='rtd_10'){
                        this.tmp_label_15 = 'Settling Tanks(B)';
                    }else if(this.val_2[14]=='rtd_11'){
                        this.tmp_label_15 = 'Settling Tanks(C)';
                    }else if(this.val_2[14]=='rtd_12'){
                        this.tmp_label_15 = 'Hot Water tank';
                    }else if(this.val_2[14]=='rtd_13'){
                        this.tmp_label_15 = 'D402 (A)';
                    }else if(this.val_2[14]=='rtd_14'){
                        this.tmp_label_15 = 'D402 (B)';
                    }else if(this.val_2[14]=='rtd_15'){
                        this.tmp_label_15 = 'D402 (C)';
                    }else if(this.val_2[14]=='rtd_16'){
                        this.tmp_label_15 = 'D402 (D)';
                    }else if(this.val_2[14]=='rtd_17'){
                        this.tmp_label_15 = 'Trans Evaporator';
                    }else if(this.val_2[14]=='rtd_18'){
                        this.tmp_label_15 = 'Blue Vessel';
                    }else if(this.val_2[14]=='rtd_19'){
                        this.tmp_label_15 = 'Green Vessel';
                    }else if(this.val_2[14]=='rtd_20'){
                        this.tmp_label_15 = 'Old Green Vessel';
                    }else if(this.val_2[14]=='rtd_21'){
                        this.tmp_label_15 = 'E601';
                    }else if(this.val_2[14]=='rtd_22'){
                        this.tmp_label_15 = 'T601-Top';
                    }else if(this.val_2[14]=='rtd_23'){
                        this.tmp_label_15 = 'T601-Middle';
                    }else if(this.val_2[14]=='rtd_24'){
                        this.tmp_label_15 = 'T601-Bottom';
                    }else if(this.val_2[14]=='rtd_25'){
                        this.tmp_label_15 = 'E501';
                    }else if(this.val_2[14]=='rtd_26'){
                        this.tmp_label_15 = 'D501';
                    }else if(this.val_2[14]=='rtd_27'){
                        this.tmp_label_15 = 'T501-Top';
                    }else if(this.val_2[14]=='rtd_28'){
                        this.tmp_label_15 = 'T501-middle';
                    }else if(this.val_2[14]=='rtd_29'){
                        this.tmp_label_15 = 'T501-Bottom';
                    }else if(this.val_2[14]=='rtd_30'){
                        this.tmp_label_15 = 'T502-Middle';
                    }else if(this.val_2[14]=='rtd_31'){
                        this.tmp_label_15 = 'T502-Bottom';
                    }else if(this.val_2[14]=='rtd_32'){
                        this.tmp_label_15 = 'PPRA';
                    }else if(this.val_2[14]=='rtd_33'){
                        this.tmp_label_15 = 'PPRB';
                    }else if(this.val_2[14]=='rtd_34'){
                        this.tmp_label_15 = 'GST1';
                    }else if(this.val_2[14]=='rtd_35'){
                        this.tmp_label_15 = 'Trans reactor';
                    }else if(this.val_2[14]=='rtd_36'){
                        this.tmp_label_15 = 'Bio Storage Tank';
                    }else if(this.val_2[14]=='rtd_37'){
                        this.tmp_label_15 = 'Bio Transfer Line';
                    }else if(this.val_2[14]=='stfm2_temp'){
                        this.tmp_label_15 = 'Main Steam Temp';
                    }else if(this.val_2[14]=='stfm1_temp'){
                        this.tmp_label_15 = 'Steam To E401 Temp';
                    }
                    ///////////////////////////////////////////////////////////
                      if(this.val_2[15]=='rtd_1'){
                        this.tmp_label_16 = 'E101';
                    }else if(this.val_2[15]=='rtd_2'){
                        this.tmp_label_16 = 'D101 A';
                    }else if(this.val_2[15]=='rtd_3'){
                        this.tmp_label_16 = 'D101 B';
                    }else if(this.val_2[15]=='rtd_4'){
                        this.tmp_label_16 = 'E201';
                    }else if(this.val_2[15]=='rtd_5'){
                        this.tmp_label_16 = 'GLV-TOP';
                    }else if(this.val_2[15]=='rtd_6'){
                        this.tmp_label_16 = 'GLV-Middle';
                    }else if(this.val_2[15]=='rtd_7'){
                        this.tmp_label_16 = 'GLV-Bottom';
                    }else if(this.val_2[15]=='rtd_8'){
                        this.tmp_label_16 = 'GLV Evaporizer';
                    }else if(this.val_2[15]=='rtd_9'){
                        this.tmp_label_16 = 'Settling Tanks(A)';
                    }else if(this.val_2[15]=='rtd_10'){
                        this.tmp_label_16 = 'Settling Tanks(B)';
                    }else if(this.val_2[15]=='rtd_11'){
                        this.tmp_label_16 = 'Settling Tanks(C)';
                    }else if(this.val_2[15]=='rtd_12'){
                        this.tmp_label_16 = 'Hot Water tank';
                    }else if(this.val_2[15]=='rtd_13'){
                        this.tmp_label_16 = 'D402 (A)';
                    }else if(this.val_2[15]=='rtd_14'){
                        this.tmp_label_16 = 'D402 (B)';
                    }else if(this.val_2[15]=='rtd_15'){
                        this.tmp_label_16 = 'D402 (C)';
                    }else if(this.val_2[15]=='rtd_16'){
                        this.tmp_label_16 = 'D402 (D)';
                    }else if(this.val_2[15]=='rtd_17'){
                        this.tmp_label_16 = 'Trans Evaporator';
                    }else if(this.val_2[15]=='rtd_18'){
                        this.tmp_label_16 = 'Blue Vessel';
                    }else if(this.val_2[15]=='rtd_19'){
                        this.tmp_label_16 = 'Green Vessel';
                    }else if(this.val_2[15]=='rtd_20'){
                        this.tmp_label_16 = 'Old Green Vessel';
                    }else if(this.val_2[15]=='rtd_21'){
                        this.tmp_label_16 = 'E601';
                    }else if(this.val_2[15]=='rtd_22'){
                        this.tmp_label_16 = 'T601-Top';
                    }else if(this.val_2[15]=='rtd_23'){
                        this.tmp_label_16 = 'T601-Middle';
                    }else if(this.val_2[15]=='rtd_24'){
                        this.tmp_label_16 = 'T601-Bottom';
                    }else if(this.val_2[15]=='rtd_25'){
                        this.tmp_label_16 = 'E501';
                    }else if(this.val_2[15]=='rtd_26'){
                        this.tmp_label_16 = 'D501';
                    }else if(this.val_2[15]=='rtd_27'){
                        this.tmp_label_16 = 'T501-Top';
                    }else if(this.val_2[15]=='rtd_28'){
                        this.tmp_label_16 = 'T501-middle';
                    }else if(this.val_2[15]=='rtd_29'){
                        this.tmp_label_16 = 'T501-Bottom';
                    }else if(this.val_2[15]=='rtd_30'){
                        this.tmp_label_16 = 'T502-Middle';
                    }else if(this.val_2[15]=='rtd_31'){
                        this.tmp_label_16 = 'T502-Bottom';
                    }else if(this.val_2[15]=='rtd_32'){
                        this.tmp_label_16 = 'PPRA';
                    }else if(this.val_2[15]=='rtd_33'){
                        this.tmp_label_16 = 'PPRB';
                    }else if(this.val_2[15]=='rtd_34'){
                        this.tmp_label_16 = 'GST1';
                    }else if(this.val_2[15]=='rtd_35'){
                        this.tmp_label_16 = 'Trans reactor';
                    }else if(this.val_2[15]=='rtd_36'){
                        this.tmp_label_16 = 'Bio Storage Tank';
                    }else if(this.val_2[15]=='rtd_37'){
                        this.tmp_label_16 = 'Bio Transfer Line';
                    }else if(this.val_2[16]=='stfm2_temp'){
                        this.tmp_label_16 = 'Main Steam Temp';
                    }else if(this.val_2[16]=='stfm1_temp'){
                        this.tmp_label_16 = 'Steam To E401 Temp';
                    }
                    }
                    if(this.val_3.length >= 0){
                        if(this.val_3[0]=='fm_1'){
                            this.flow_label_1 = 'FM 1(D405 to Trans)';
                        }else if(this.val_3[0]=='fm_2'){
                            this.flow_label_1 = 'FM 2(ALKALI Trans)';
                        }else if(this.val_3[0]=='fm_3'){
                            this.flow_label_1 = 'FM 3(Trans Evaporator to NI)';
                        }else if(this.val_3[0]=='fm_4'){
                            this.flow_label_1 = 'FM 4(Water N1)';
                        }else if(this.val_3[0]=='fm_5'){
                            this.flow_label_1 = 'FM 5(Nozzle 2 to d402)';
                        }else if(this.val_3[0]=='fm_6'){
                            this.flow_label_1 = 'FM 6(Nozzle 3 to Slag pool)';
                        }else if(this.val_3[0]=='fm_7'){
                            this.flow_label_1 = 'FM 7(D602 to Methanol Storage tank)';
                        }else if(this.val_3[0]=='fm_8'){
                            this.flow_label_1 = 'FM 8(D402-D501)';
                        }else if(this.val_3[0]=='fm_9'){
                            this.flow_label_1 = 'FM 9(D501-T501)(D501-T501)';
                        }else if(this.val_3[0]=='fm_10'){
                            this.flow_label_1 = 'FM 10(T501-T502)';
                        }else if(this.val_3[0]=='fm_11'){
                            this.flow_label_1 = 'FM 11(Tar Transfer)';
                        }else if(this.val_3[0]=='fm_12'){
                            this.flow_label_1 = 'FM 12(Recycle to D405 LINE)';
                        }else if(this.val_3[0]=='fm_13'){
                            this.flow_label_1 = 'FM 13(Biodiesel to Storage)';
                        }else if(this.val_3[0]=='fm_14'){
                            this.flow_label_1 = 'FM 14(D403 into T601)';
                        }else if(this.val_3[0]=='fm_15'){
                            this.flow_label_1 = 'FM 15(T601 to D602)';
                        }else if(this.val_3[0]=='fm_16'){
                            this.flow_label_1 = 'FM 16(T601 to Reflux)';
                        }else if(this.val_3[0]=='fm_17'){
                            this.flow_label_1 = 'FM 17(T601 Drain)';
                        }else if(this.val_3[0]=='fm_18'){
                            this.flow_label_1 = 'FM 18(Methanol Into GST 1 and 2)';
                        }else if(this.val_3[0]=='fm_19'){
                            this.flow_label_1 = 'FM 19(Methanol into PPRA and B)';
                        }else if(this.val_3[0]=='fm_20'){
                            this.flow_label_1 = 'FM 20(Methanol into GLV)';
                        }else if(this.val_3[0]=='fm_21'){
                            this.flow_label_1 = 'FM 21(Methanol into Trans)';
                        }else if(this.val_3[0]=='fm_22'){
                            this.flow_label_1 = 'FM 22(Biodiesel Storage to Truck)';
                        }else if(this.val_3[0]=='fm_23'){
                            this.flow_label_1 = 'FM 23(Raw Material Offloading)';
                        }else if(this.val_3[0]=='fm_24'){
                            this.flow_label_1 = 'FM 24(Raw Material To Settling Tank)';
                        }else if(this.val_3[0]=='fm_25'){
                            this.flow_label_1 = 'FM 25(Settling tank to d101)';
                        }else if(this.val_3[0]=='fm_26'){
                            this.flow_label_1 = 'FM 26(CT Outlet)';
                        }else if(this.val_3[0]=='fm_27'){
                            this.flow_label_1 = 'FM 27(CT Inlet)';
                        }else if(this.val_3[0]=='st_fm2_flow'){
                            this.flow_label_1 = 'Main Steam Flow';
                        }else if(this.val_3[0]=='st_fm1_flow'){
                            this.flow_label_1 = 'Steam To E401 Flow';
                        }
                        if(this.val_3[1]=='fm_1'){
                            this.flow_label_2 = 'FM 1(D405 to Trans)';
                        }else if(this.val_3[1]=='fm_2'){
                            this.flow_label_2 = 'FM 2(ALKALI Trans)';
                        }else if(this.val_3[1]=='fm_3'){
                            this.flow_label_2 = 'FM 3(Trans Evaporator to NI)';
                        }else if(this.val_3[1]=='fm_4'){
                            this.flow_label_2 = 'FM 4(Water N1)';
                        }else if(this.val_3[1]=='fm_5'){
                            this.flow_label_2 = 'FM 5(Nozzle 2 to d402)';
                        }else if(this.val_3[1]=='fm_6'){
                            this.flow_label_2 = 'FM 6(Nozzle 3 to Slag pool)';
                        }else if(this.val_3[1]=='fm_7'){
                            this.flow_label_2 = 'FM 7(D602 to Methanol Storage tank)';
                        }else if(this.val_3[1]=='fm_8'){
                            this.flow_label_2 = 'FM 8(D402-D501)';
                        }else if(this.val_3[1]=='fm_9'){
                            this.flow_label_2 = 'FM 9(D501-T501)';
                        }else if(this.val_3[1]=='fm_10'){
                            this.flow_label_2 = 'FM 10(T501-T502)';
                        }else if(this.val_3[1]=='fm_11'){
                            this.flow_label_2 = 'FM 11(Tar Transfer)';
                        }else if(this.val_3[1]=='fm_12'){
                            this.flow_label_2 = 'FM 12(Recycle to D405 LINE)';
                        }else if(this.val_3[1]=='fm_13'){
                            this.flow_label_2 = 'FM 13(Biodiesel to Storage)';
                        }else if(this.val_3[1]=='fm_14'){
                            this.flow_label_2 = 'FM 14(D403 into T601)';
                        }else if(this.val_3[1]=='fm_15'){
                            this.flow_label_2 = 'FM 15(T601 to D602)';
                        }else if(this.val_3[1]=='fm_16'){
                            this.flow_label_2 = 'FM 16(T601 to Reflux)';
                        }else if(this.val_3[1]=='fm_17'){
                            this.flow_label_2 = 'FM 17(T601 Drain)';
                        }else if(this.val_3[1]=='fm_18'){
                            this.flow_label_2 = 'FM 18(Methanol Into GST 1 and 2)';
                        }else if(this.val_3[1]=='fm_19'){
                            this.flow_label_2 = 'FM 19(Methanol into PPRA and B)';
                        }else if(this.val_3[1]=='fm_20'){
                            this.flow_label_2 = 'FM 20(Methanol into GLV)';
                        }else if(this.val_3[1]=='fm_21'){
                            this.flow_label_2 = 'FM 21(Methanol into Trans)';
                        }else if(this.val_3[1]=='fm_22'){
                            this.flow_label_2 = 'FM 22(Biodiesel Storage to Truck)';
                        }else if(this.val_3[1]=='fm_23'){
                            this.flow_label_2 = 'FM 23(Raw Material Offloading)';
                        }else if(this.val_3[1]=='fm_24'){
                            this.flow_label_2 = 'FM 24(Raw Material To Settling Tank)';
                        }else if(this.val_3[1]=='fm_25'){
                            this.flow_label_2 = 'FM 25(Settling tank to d101)';
                        }else if(this.val_3[1]=='fm_26'){
                            this.flow_label_2 = 'FM 26(CT Outlet)';
                        }else if(this.val_3[1]=='fm_27'){
                            this.flow_label_2 = 'FM 27(CT Inlet)';
                        }else if(this.val_3[1]=='st_fm2_flow'){
                            this.flow_label_2 = 'Main Steam Flow';
                        }else if(this.val_3[1]=='st_fm1_flow'){
                            this.flow_label_2 = 'Steam To E401 Flow';
                        }
    if(this.val_3[2]=='fm_1'){
                            this.flow_label_3 = 'FM 1(D405 to Trans)';
                        }else if(this.val_3[2]=='fm_2'){
                            this.flow_label_3 = 'FM 2(ALKALI Trans)';
                        }else if(this.val_3[2]=='fm_3'){
                            this.flow_label_3 = 'FM 3(Trans Evaporator to NI)';
                        }else if(this.val_3[2]=='fm_4'){
                            this.flow_label_3 = 'FM 4(Water N1)';
                        }else if(this.val_3[2]=='fm_5'){
                            this.flow_label_3 = 'FM 5(Nozzle 2 to d402)';
                        }else if(this.val_3[2]=='fm_6'){
                            this.flow_label_3 = 'FM 6(Nozzle 3 to Slag pool)';
                        }else if(this.val_3[2]=='fm_7'){
                            this.flow_label_3 = 'FM 7(D602 to Methanol Storage tank)';
                        }else if(this.val_3[2]=='fm_8'){
                            this.flow_label_3 = 'FM 8(D402-D501)';
                        }else if(this.val_3[2]=='fm_9'){
                            this.flow_label_3 = 'FM 9(D501-T501)';
                        }else if(this.val_3[2]=='fm_10'){
                            this.flow_label_3 = 'FM 10(T501-T502)';
                        }else if(this.val_3[2]=='fm_11'){
                            this.flow_label_3 = 'FM 11(Tar Transfer)';
                        }else if(this.val_3[2]=='fm_12'){
                            this.flow_label_3 = 'FM 12(Recycle to D405 LINE)';
                        }else if(this.val_3[2]=='fm_13'){
                            this.flow_label_3 = 'FM 13(Biodiesel to Storage)';
                        }else if(this.val_3[2]=='fm_14'){
                            this.flow_label_3 = 'FM 14(D403 into T601)';
                        }else if(this.val_3[2]=='fm_15'){
                            this.flow_label_3 = 'FM 15(T601 to D602)';
                        }else if(this.val_3[2]=='fm_16'){
                            this.flow_label_3 = 'FM 16(T601 to Reflux)';
                        }else if(this.val_3[2]=='fm_17'){
                            this.flow_label_3 = 'FM 17(T601 Drain)';
                        }else if(this.val_3[2]=='fm_18'){
                            this.flow_label_3 = 'FM 18(Methanol Into GST 1 and 2)';
                        }else if(this.val_3[2]=='fm_19'){
                            this.flow_label_3 = 'FM 19(Methanol into PPRA and B)';
                        }else if(this.val_3[2]=='fm_20'){
                            this.flow_label_3 = 'FM 20(Methanol into GLV)';
                        }else if(this.val_3[2]=='fm_21'){
                            this.flow_label_3 = 'FM 21(Methanol into Trans)';
                        }else if(this.val_3[2]=='fm_22'){
                            this.flow_label_3 = 'FM 22(Biodiesel Storage to Truck)';
                        }else if(this.val_3[2]=='fm_23'){
                            this.flow_label_3 = 'FM 23(Raw Material Offloading)';
                        }else if(this.val_3[2]=='fm_24'){
                            this.flow_label_3 = 'FM 24(Raw Material To Settling Tank)';
                        }else if(this.val_3[2]=='fm_25'){
                            this.flow_label_3 = 'FM 25(Settling tank to d101)';
                        }else if(this.val_3[2]=='fm_26'){
                            this.flow_label_3 = 'FM 26(CT Outlet)';
                        }else if(this.val_3[2]=='fm_27'){
                            this.flow_label_3 = 'FM 27(CT Inlet)';
                        }else if(this.val_3[2]=='st_fm2_flow'){
                            this.flow_label_3 = 'Main Steam Flow';
                        }else if(this.val_3[2]=='st_fm1_flow'){
                            this.flow_label_3 = 'Steam To E401 Flow';
                        }
    if(this.val_3[3]=='fm_1'){
                            this.flow_label_4 = 'FM 1(D405 to Trans)';
                        }else if(this.val_3[3]=='fm_2'){
                            this.flow_label_4 = 'FM 2(ALKALI Trans)';
                        }else if(this.val_3[3]=='fm_3'){
                            this.flow_label_4 = 'FM 3(Trans Evaporator to NI)';
                        }else if(this.val_3[3]=='fm_4'){
                            this.flow_label_4 = 'FM 4(Water N1)';
                        }else if(this.val_3[3]=='fm_5'){
                            this.flow_label_4 = 'FM 5(Nozzle 2 to d402)';
                        }else if(this.val_3[3]=='fm_6'){
                            this.flow_label_4 = 'FM 6(Nozzle 3 to Slag pool)';
                        }else if(this.val_3[3]=='fm_7'){
                            this.flow_label_4 = 'FM 7(D602 to Methanol Storage tank)';
                        }else if(this.val_3[3]=='fm_8'){
                            this.flow_label_4 = 'FM 8(D402-D501)';
                        }else if(this.val_3[3]=='fm_9'){
                            this.flow_label_4 = 'FM 9(D501-T501)';
                        }else if(this.val_3[3]=='fm_10'){
                            this.flow_label_4 = 'FM 10(T501-T502)';
                        }else if(this.val_3[3]=='fm_11'){
                            this.flow_label_4 = 'FM 11(Tar Transfer)';
                        }else if(this.val_3[3]=='fm_12'){
                            this.flow_label_4 = 'FM 12(Recycle to D405 LINE)';
                        }else if(this.val_3[3]=='fm_13'){
                            this.flow_label_4 = 'FM 13(Biodiesel to Storage)';
                        }else if(this.val_3[3]=='fm_14'){
                            this.flow_label_4 = 'FM 14(D403 into T601)';
                        }else if(this.val_3[3]=='fm_15'){
                            this.flow_label_4 = 'FM 15(T601 to D602)';
                        }else if(this.val_3[3]=='fm_16'){
                            this.flow_label_4 = 'FM 16(T601 to Reflux)';
                        }else if(this.val_3[3]=='fm_17'){
                            this.flow_label_4 = 'FM 17(T601 Drain)';
                        }else if(this.val_3[3]=='fm_18'){
                            this.flow_label_4 = 'FM 18(Methanol Into GST 1 and 2)';
                        }else if(this.val_3[3]=='fm_19'){
                            this.flow_label_4 = 'FM 19(Methanol into PPRA and B)';
                        }else if(this.val_3[3]=='fm_20'){
                            this.flow_label_4 = 'FM 20(Methanol into GLV)';
                        }else if(this.val_3[3]=='fm_21'){
                            this.flow_label_4 = 'FM 21(Methanol into Trans)';
                        }else if(this.val_3[3]=='fm_22'){
                            this.flow_label_4 = 'FM 22(Biodiesel Storage to Truck)';
                        }else if(this.val_3[3]=='fm_23'){
                            this.flow_label_4 = 'FM 23(Raw Material Offloading)';
                        }else if(this.val_3[3]=='fm_24'){
                            this.flow_label_4 = 'FM 24(Raw Material To Settling Tank)';
                        }else if(this.val_3[3]=='fm_25'){
                            this.flow_label_4 = 'FM 25(Settling tank to d101)';
                        }else if(this.val_3[3]=='fm_26'){
                            this.flow_label_4 = 'FM 26(CT Outlet)';
                        }else if(this.val_3[3]=='fm_27'){
                            this.flow_label_4 = 'FM 27(CT Inlet)';
                        }else if(this.val_3[3]=='st_fm2_flow'){
                            this.flow_label_4 = 'Main Steam Flow';
                        }else if(this.val_3[3]=='st_fm1_flow'){
                            this.flow_label_4 = 'Steam To E401 Flow';
                        }
    if(this.val_3[4]=='fm_1'){
                            this.flow_label_5 = 'FM 1(D405 to Trans)';
                        }else if(this.val_3[4]=='fm_2'){
                            this.flow_label_5 = 'FM 2(ALKALI Trans)';
                        }else if(this.val_3[4]=='fm_3'){
                            this.flow_label_5 = 'FM 3(Trans Evaporator to NI)';
                        }else if(this.val_3[4]=='fm_4'){
                            this.flow_label_5 = 'FM 4(Water N1)';
                        }else if(this.val_3[4]=='fm_5'){
                            this.flow_label_5 = 'FM 5(Nozzle 2 to d402)';
                        }else if(this.val_3[4]=='fm_6'){
                            this.flow_label_5 = 'FM 6(Nozzle 3 to Slag pool)';
                        }else if(this.val_3[4]=='fm_7'){
                            this.flow_label_5 = 'FM 7(D602 to Methanol Storage tank)';
                        }else if(this.val_3[4]=='fm_8'){
                            this.flow_label_5 = 'FM 8(D402-D501)';
                        }else if(this.val_3[4]=='fm_9'){
                            this.flow_label_5 = 'FM 9(D501-T501)';
                        }else if(this.val_3[4]=='fm_10'){
                            this.flow_label_5 = 'FM 10(T501-T502)';
                        }else if(this.val_3[4]=='fm_11'){
                            this.flow_label_5 = 'FM 11(Tar Transfer)';
                        }else if(this.val_3[4]=='fm_12'){
                            this.flow_label_5 = 'FM 12(Recycle to D405 LINE)';
                        }else if(this.val_3[4]=='fm_13'){
                            this.flow_label_5 = 'FM 13(Biodiesel to Storage)';
                        }else if(this.val_3[4]=='fm_14'){
                            this.flow_label_5 = 'FM 14(D403 into T601)';
                        }else if(this.val_3[4]=='fm_15'){
                            this.flow_label_5 = 'FM 15(T601 to D602)';
                        }else if(this.val_3[4]=='fm_16'){
                            this.flow_label_5 = 'FM 16(T601 to Reflux)';
                        }else if(this.val_3[4]=='fm_17'){
                            this.flow_label_5 = 'FM 17(T601 Drain)';
                        }else if(this.val_3[4]=='fm_18'){
                            this.flow_label_5 = 'FM 18(Methanol Into GST 1 and 2)';
                        }else if(this.val_3[4]=='fm_19'){
                            this.flow_label_5 = 'FM 19(Methanol into PPRA and B)';
                        }else if(this.val_3[4]=='fm_20'){
                            this.flow_label_5 = 'FM 20(Methanol into GLV)';
                        }else if(this.val_3[4]=='fm_21'){
                            this.flow_label_5 = 'FM 21(Methanol into Trans)';
                        }else if(this.val_3[4]=='fm_22'){
                            this.flow_label_5 = 'FM 22(Biodiesel Storage to Truck)';
                        }else if(this.val_3[4]=='fm_23'){
                            this.flow_label_5 = 'FM 23(Raw Material Offloading)';
                        }else if(this.val_3[4]=='fm_24'){
                            this.flow_label_5 = 'FM 24(Raw Material To Settling Tank)';
                        }else if(this.val_3[4]=='fm_25'){
                            this.flow_label_5 = 'FM 25(Settling tank to d101)';
                        }else if(this.val_3[4]=='fm_26'){
                            this.flow_label_5 = 'FM 26(CT Outlet)';
                        }else if(this.val_3[4]=='fm_27'){
                            this.flow_label_5 = 'FM 27(CT Inlet)';
                        }else if(this.val_3[4]=='st_fm2_flow'){
                            this.flow_label_5 = 'Main Steam Flow';
                        }else if(this.val_3[4]=='st_fm1_flow'){
                            this.flow_label_5 = 'Steam To E401 Flow';
                        }
    if(this.val_3[5]=='fm_1'){
                            this.flow_label_6 = 'FM 1(D405 to Trans)';
                        }else if(this.val_3[5]=='fm_2'){
                            this.flow_label_6 = 'FM 2(ALKALI Trans)';
                        }else if(this.val_3[5]=='fm_3'){
                            this.flow_label_6 = 'FM 3(Trans Evaporator to NI)';
                        }else if(this.val_3[5]=='fm_4'){
                            this.flow_label_6 = 'FM 4(Water N1)';
                        }else if(this.val_3[5]=='fm_5'){
                            this.flow_label_6 = 'FM 5(Nozzle 2 to d402)';
                        }else if(this.val_3[5]=='fm_6'){
                            this.flow_label_6 = 'FM 6(Nozzle 3 to Slag pool)';
                        }else if(this.val_3[5]=='fm_7'){
                            this.flow_label_6 = 'FM 7(D602 to Methanol Storage tank)';
                        }else if(this.val_3[5]=='fm_8'){
                            this.flow_label_6 = 'FM 8(D402-D501)';
                        }else if(this.val_3[5]=='fm_9'){
                            this.flow_label_6 = 'FM 9(D501-T501)';
                        }else if(this.val_3[5]=='fm_10'){
                            this.flow_label_6 = 'FM 10(T501-T502)';
                        }else if(this.val_3[5]=='fm_11'){
                            this.flow_label_6 = 'FM 11(Tar Transfer)';
                        }else if(this.val_3[5]=='fm_12'){
                            this.flow_label_6 = 'FM 12(Recycle to D405 LINE)';
                        }else if(this.val_3[5]=='fm_13'){
                            this.flow_label_6 = 'FM 13(Biodiesel to Storage)';
                        }else if(this.val_3[5]=='fm_14'){
                            this.flow_label_6 = 'FM 14(D403 into T601)';
                        }else if(this.val_3[5]=='fm_15'){
                            this.flow_label_6 = 'FM 15(T601 to D602)';
                        }else if(this.val_3[5]=='fm_16'){
                            this.flow_label_6 = 'FM 16(T601 to Reflux)';
                        }else if(this.val_3[5]=='fm_17'){
                            this.flow_label_6 = 'FM 17(T601 Drain)';
                        }else if(this.val_3[5]=='fm_18'){
                            this.flow_label_6 = 'FM 18(Methanol Into GST 1 and 2)';
                        }else if(this.val_3[5]=='fm_19'){
                            this.flow_label_6 = 'FM 19(Methanol into PPRA and B)';
                        }else if(this.val_3[5]=='fm_20'){
                            this.flow_label_6 = 'FM 20(Methanol into GLV)';
                        }else if(this.val_3[5]=='fm_21'){
                            this.flow_label_6 = 'FM 21(Methanol into Trans)';
                        }else if(this.val_3[5]=='fm_22'){
                            this.flow_label_6 = 'FM 22(Biodiesel Storage to Truck)';
                        }else if(this.val_3[5]=='fm_23'){
                            this.flow_label_6 = 'FM 23(Raw Material Offloading)';
                        }else if(this.val_3[5]=='fm_24'){
                            this.flow_label_6 = 'FM 24(Raw Material To Settling Tank)';
                        }else if(this.val_3[5]=='fm_25'){
                            this.flow_label_6 = 'FM 25(Settling tank to d101)';
                        }else if(this.val_3[5]=='fm_26'){
                            this.flow_label_6 = 'FM 26(CT Outlet)';
                        }else if(this.val_3[5]=='fm_27'){
                            this.flow_label_6 = 'FM 27(CT Inlet)';
                        }else if(this.val_3[5]=='st_fm2_flow'){
                            this.flow_label_6 = 'Main Steam Flow';
                        }else if(this.val_3[5]=='st_fm1_flow'){
                            this.flow_label_6 = 'Steam To E401 Flow';
                        }
    if(this.val_3[6]=='fm_1'){
                            this.flow_label_7 = 'FM 1(D405 to Trans)';
                        }else if(this.val_3[6]=='fm_2'){
                            this.flow_label_7 = 'FM 2(ALKALI Trans)';
                        }else if(this.val_3[6]=='fm_3'){
                            this.flow_label_7 = 'FM 3(Trans Evaporator to NI)';
                        }else if(this.val_3[6]=='fm_4'){
                            this.flow_label_7 = 'FM 4(Water N1)';
                        }else if(this.val_3[6]=='fm_5'){
                            this.flow_label_7 = 'FM 5(Nozzle 2 to d402)';
                        }else if(this.val_3[6]=='fm_6'){
                            this.flow_label_7 = 'FM 6(Nozzle 3 to Slag pool)';
                        }else if(this.val_3[6]=='fm_7'){
                            this.flow_label_7 = 'FM 7(D602 to Methanol Storage tank)';
                        }else if(this.val_3[6]=='fm_8'){
                            this.flow_label_7 = 'FM 8(D402-D501)';
                        }else if(this.val_3[6]=='fm_9'){
                            this.flow_label_7 = 'FM 9(D501-T501)';
                        }else if(this.val_3[6]=='fm_10'){
                            this.flow_label_7 = 'FM 10(T501-T502)';
                        }else if(this.val_3[6]=='fm_11'){
                            this.flow_label_7 = 'FM 11(Tar Transfer)';
                        }else if(this.val_3[6]=='fm_12'){
                            this.flow_label_7 = 'FM 12(Recycle to D405 LINE)';
                        }else if(this.val_3[6]=='fm_13'){
                            this.flow_label_7 = 'FM 13(Biodiesel to Storage)';
                        }else if(this.val_3[6]=='fm_14'){
                            this.flow_label_7 = 'FM 14(D403 into T601)';
                        }else if(this.val_3[6]=='fm_15'){
                            this.flow_label_7 = 'FM 15(T601 to D602)';
                        }else if(this.val_3[6]=='fm_16'){
                            this.flow_label_7 = 'FM 16(T601 to Reflux)';
                        }else if(this.val_3[6]=='fm_17'){
                            this.flow_label_7 = 'FM 17(T601 Drain)';
                        }else if(this.val_3[6]=='fm_18'){
                            this.flow_label_7 = 'FM 18(Methanol Into GST 1 and 2)';
                        }else if(this.val_3[6]=='fm_19'){
                            this.flow_label_7 = 'FM 19(Methanol into PPRA and B)';
                        }else if(this.val_3[6]=='fm_20'){
                            this.flow_label_7 = 'FM 20(Methanol into GLV)';
                        }else if(this.val_3[6]=='fm_21'){
                            this.flow_label_7 = 'FM 21(Methanol into Trans)';
                        }else if(this.val_3[6]=='fm_22'){
                            this.flow_label_7 = 'FM 22(Biodiesel Storage to Truck)';
                        }else if(this.val_3[6]=='fm_23'){
                            this.flow_label_7 = 'FM 23(Raw Material Offloading)';
                        }else if(this.val_3[6]=='fm_24'){
                            this.flow_label_7 = 'FM 24(Raw Material To Settling Tank)';
                        }else if(this.val_3[6]=='fm_25'){
                            this.flow_label_7 = 'FM 25(Settling tank to d101)';
                        }else if(this.val_3[6]=='fm_26'){
                            this.flow_label_7 = 'FM 26(CT Outlet)';
                        }else if(this.val_3[6]=='fm_27'){
                            this.flow_label_7 = 'FM 27(CT Inlet)';
                        }else if(this.val_3[6]=='st_fm2_flow'){
                            this.flow_label_7 = 'Main Steam Flow';
                        }else if(this.val_3[6]=='st_fm1_flow'){
                            this.flow_label_7 = 'Steam To E401 Flow';
                        }
    if(this.val_3[7]=='fm_1'){
                            this.flow_label_8 = 'FM 1(D405 to Trans)';
                        }else if(this.val_3[7]=='fm_2'){
                            this.flow_label_8 = 'FM 2(ALKALI Trans)';
                        }else if(this.val_3[7]=='fm_3'){
                            this.flow_label_8 = 'FM 3(Trans Evaporator to NI)';
                        }else if(this.val_3[7]=='fm_4'){
                            this.flow_label_8 = 'FM 4(Water N1)';
                        }else if(this.val_3[7]=='fm_5'){
                            this.flow_label_8 = 'FM 5(Nozzle 2 to d402)';
                        }else if(this.val_3[7]=='fm_6'){
                            this.flow_label_8 = 'FM 6(Nozzle 3 to Slag pool)';
                        }else if(this.val_3[7]=='fm_7'){
                            this.flow_label_8 = 'FM 7(D602 to Methanol Storage tank)';
                        }else if(this.val_3[7]=='fm_8'){
                            this.flow_label_8 = 'FM 8(D402-D501)';
                        }else if(this.val_3[7]=='fm_9'){
                            this.flow_label_8 = 'FM 9(D501-T501)';
                        }else if(this.val_3[7]=='fm_10'){
                            this.flow_label_8 = 'FM 10(T501-T502)';
                        }else if(this.val_3[7]=='fm_11'){
                            this.flow_label_8 = 'FM 11(Tar Transfer)';
                        }else if(this.val_3[7]=='fm_12'){
                            this.flow_label_8 = 'FM 12(Recycle to D405 LINE)';
                        }else if(this.val_3[7]=='fm_13'){
                            this.flow_label_8 = 'FM 13(Biodiesel to Storage)';
                        }else if(this.val_3[7]=='fm_14'){
                            this.flow_label_8 = 'FM 14(D403 into T601)';
                        }else if(this.val_3[7]=='fm_15'){
                            this.flow_label_8 = 'FM 15(T601 to D602)';
                        }else if(this.val_3[7]=='fm_16'){
                            this.flow_label_8 = 'FM 16(T601 to Reflux)';
                        }else if(this.val_3[7]=='fm_17'){
                            this.flow_label_8 = 'FM 17(T601 Drain)';
                        }else if(this.val_3[7]=='fm_18'){
                            this.flow_label_8 = 'FM 18(Methanol Into GST 1 and 2)';
                        }else if(this.val_3[7]=='fm_19'){
                            this.flow_label_8 = 'FM 19(Methanol into PPRA and B)';
                        }else if(this.val_3[7]=='fm_20'){
                            this.flow_label_8 = 'FM 20(Methanol into GLV)';
                        }else if(this.val_3[7]=='fm_21'){
                            this.flow_label_8 = 'FM 21(Methanol into Trans)';
                        }else if(this.val_3[7]=='fm_22'){
                            this.flow_label_8 = 'FM 22(Biodiesel Storage to Truck)';
                        }else if(this.val_3[7]=='fm_23'){
                            this.flow_label_8 = 'FM 23(Raw Material Offloading)';
                        }else if(this.val_3[7]=='fm_24'){
                            this.flow_label_8 = 'FM 24(Raw Material To Settling Tank)';
                        }else if(this.val_3[7]=='fm_25'){
                            this.flow_label_8 = 'FM 25(Settling tank to d101)';
                        }else if(this.val_3[7]=='fm_26'){
                            this.flow_label_8 = 'FM 26(CT Outlet)';
                        }else if(this.val_3[7]=='fm_27'){
                            this.flow_label_8 = 'FM 27(CT Inlet)';
                        }else if(this.val_3[7]=='st_fm2_flow'){
                            this.flow_label_8 = 'Main Steam Flow';
                        }else if(this.val_3[7]=='st_fm1_flow'){
                            this.flow_label_8 = 'Steam To E401 Flow';
                        }
    if(this.val_3[8]=='fm_1'){
                            this.flow_label_9 = 'FM 1(D405 to Trans)';
                        }else if(this.val_3[8]=='fm_2'){
                            this.flow_label_9 = 'FM 2(ALKALI Trans)';
                        }else if(this.val_3[8]=='fm_3'){
                            this.flow_label_9 = 'FM 3(Trans Evaporator to NI)';
                        }else if(this.val_3[8]=='fm_4'){
                            this.flow_label_9 = 'FM 4(Water N1)';
                        }else if(this.val_3[8]=='fm_5'){
                            this.flow_label_9 = 'FM 5(Nozzle 2 to d402)';
                        }else if(this.val_3[8]=='fm_6'){
                            this.flow_label_9 = 'FM 6(Nozzle 3 to Slag pool)';
                        }else if(this.val_3[8]=='fm_7'){
                            this.flow_label_9 = 'FM 7(D602 to Methanol Storage tank)';
                        }else if(this.val_3[8]=='fm_8'){
                            this.flow_label_9 = 'FM 8(D402-D501)';
                        }else if(this.val_3[8]=='fm_9'){
                            this.flow_label_9 = 'FM 9(D501-T501)';
                        }else if(this.val_3[8]=='fm_10'){
                            this.flow_label_9 = 'FM 10(T501-T502)';
                        }else if(this.val_3[8]=='fm_11'){
                            this.flow_label_9 = 'FM 11(Tar Transfer)';
                        }else if(this.val_3[8]=='fm_12'){
                            this.flow_label_9 = 'FM 12(Recycle to D405 LINE)';
                        }else if(this.val_3[8]=='fm_13'){
                            this.flow_label_9 = 'FM 13(Biodiesel to Storage)';
                        }else if(this.val_3[8]=='fm_14'){
                            this.flow_label_9 = 'FM 14(D403 into T601)';
                        }else if(this.val_3[8]=='fm_15'){
                            this.flow_label_9 = 'FM 15(T601 to D602)';
                        }else if(this.val_3[8]=='fm_16'){
                            this.flow_label_9 = 'FM 16(T601 to Reflux)';
                        }else if(this.val_3[8]=='fm_17'){
                            this.flow_label_9 = 'FM 17(T601 Drain)';
                        }else if(this.val_3[8]=='fm_18'){
                            this.flow_label_9 = 'FM 18(Methanol Into GST 1 and 2)';
                        }else if(this.val_3[8]=='fm_19'){
                            this.flow_label_9 = 'FM 19(Methanol into PPRA and B)';
                        }else if(this.val_3[8]=='fm_20'){
                            this.flow_label_9 = 'FM 20(Methanol into GLV)';
                        }else if(this.val_3[8]=='fm_21'){
                            this.flow_label_9 = 'FM 21(Methanol into Trans)';
                        }else if(this.val_3[8]=='fm_22'){
                            this.flow_label_9 = 'FM 22(Biodiesel Storage to Truck)';
                        }else if(this.val_3[8]=='fm_23'){
                            this.flow_label_9 = 'FM 23(Raw Material Offloading)';
                        }else if(this.val_3[8]=='fm_24'){
                            this.flow_label_9 = 'FM 24(Raw Material To Settling Tank)';
                        }else if(this.val_3[8]=='fm_25'){
                            this.flow_label_9 = 'FM 25(Settling tank to d101)';
                        }else if(this.val_3[8]=='fm_26'){
                            this.flow_label_9 = 'FM 26(CT Outlet)';
                        }else if(this.val_3[8]=='fm_27'){
                            this.flow_label_9 = 'FM 27(CT Inlet)';
                        }else if(this.val_3[8]=='st_fm2_flow'){
                            this.flow_label_9 = 'Main Steam Flow';
                        }else if(this.val_3[8]=='st_fm1_flow'){
                            this.flow_label_9 = 'Steam To E401 Flow';
                        }
    if(this.val_3[9]=='fm_1'){
                            this.flow_label_10 = 'FM 1(D405 to Trans)';
                        }else if(this.val_3[9]=='fm_2'){
                            this.flow_label_10 = 'FM 2(ALKALI Trans)';
                        }else if(this.val_3[9]=='fm_3'){
                            this.flow_label_10 = 'FM 3(Trans Evaporator to NI)';
                        }else if(this.val_3[9]=='fm_4'){
                            this.flow_label_10 = 'FM 4(Water N1)';
                        }else if(this.val_3[9]=='fm_5'){
                            this.flow_label_10 = 'FM 5(Nozzle 2 to d402)';
                        }else if(this.val_3[9]=='fm_6'){
                            this.flow_label_10 = 'FM 6(Nozzle 3 to Slag pool)';
                        }else if(this.val_3[9]=='fm_7'){
                            this.flow_label_10 = 'FM 7(D602 to Methanol Storage tank)';
                        }else if(this.val_3[9]=='fm_8'){
                            this.flow_label_10 = 'FM 8(D402-D501)';
                        }else if(this.val_3[9]=='fm_9'){
                            this.flow_label_10 = 'FM 9(D501-T501)';
                        }else if(this.val_3[9]=='fm_10'){
                            this.flow_label_10 = 'FM 10(T501-T502)';
                        }else if(this.val_3[9]=='fm_11'){
                            this.flow_label_10 = 'FM 11(Tar Transfer)';
                        }else if(this.val_3[9]=='fm_12'){
                            this.flow_label_10 = 'FM 12(Recycle to D405 LINE)';
                        }else if(this.val_3[9]=='fm_13'){
                            this.flow_label_10 = 'FM 13(Biodiesel to Storage)';
                        }else if(this.val_3[9]=='fm_14'){
                            this.flow_label_10 = 'FM 14(D403 into T601)';
                        }else if(this.val_3[9]=='fm_15'){
                            this.flow_label_10 = 'FM 15(T601 to D602)';
                        }else if(this.val_3[9]=='fm_16'){
                            this.flow_label_10 = 'FM 16(T601 to Reflux)';
                        }else if(this.val_3[9]=='fm_17'){
                            this.flow_label_10 = 'FM 17(T601 Drain)';
                        }else if(this.val_3[9]=='fm_18'){
                            this.flow_label_10 = 'FM 18(Methanol Into GST 1 and 2)';
                        }else if(this.val_3[9]=='fm_19'){
                            this.flow_label_10 = 'FM 19(Methanol into PPRA and B)';
                        }else if(this.val_3[9]=='fm_20'){
                            this.flow_label_10 = 'FM 20(Methanol into GLV)';
                        }else if(this.val_3[9]=='fm_21'){
                            this.flow_label_10 = 'FM 21(Methanol into Trans)';
                        }else if(this.val_3[9]=='fm_22'){
                            this.flow_label_10 = 'FM 22(Biodiesel Storage to Truck)';
                        }else if(this.val_3[9]=='fm_23'){
                            this.flow_label_10 = 'FM 23(Raw Material Offloading)';
                        }else if(this.val_3[9]=='fm_24'){
                            this.flow_label_10 = 'FM 24(Raw Material To Settling Tank)';
                        }else if(this.val_3[9]=='fm_25'){
                            this.flow_label_10 = 'FM 25(Settling tank to d101)';
                        }else if(this.val_3[9]=='fm_26'){
                            this.flow_label_10 = 'FM 26(CT Outlet)';
                        }else if(this.val_3[9]=='fm_27'){
                            this.flow_label_10 = 'FM 27(CT Inlet)';
                        }else if(this.val_3[9]=='st_fm2_flow'){
                            this.flow_label_10 = 'Main Steam Flow';
                        }else if(this.val_3[9]=='st_fm1_flow'){
                            this.flow_label_10 = 'Steam To E401 Flow';
                        }
    if(this.val_3[10]=='fm_1'){
                            this.flow_label_11 = 'FM 1(D405 to Trans)';
                        }else if(this.val_3[10]=='fm_2'){
                            this.flow_label_11 = 'FM 2(ALKALI Trans)';
                        }else if(this.val_3[10]=='fm_3'){
                            this.flow_label_11 = 'FM 3(Trans Evaporator to NI)';
                        }else if(this.val_3[10]=='fm_4'){
                            this.flow_label_11 = 'FM 4(Water N1)';
                        }else if(this.val_3[10]=='fm_5'){
                            this.flow_label_11 = 'FM 5(Nozzle 2 to d402)';
                        }else if(this.val_3[10]=='fm_6'){
                            this.flow_label_11 = 'FM 6(Nozzle 3 to Slag pool)';
                        }else if(this.val_3[10]=='fm_7'){
                            this.flow_label_11 = 'FM 7(D602 to Methanol Storage tank)';
                        }else if(this.val_3[10]=='fm_8'){
                            this.flow_label_11 = 'FM 8(D402-D501)';
                        }else if(this.val_3[10]=='fm_9'){
                            this.flow_label_11 = 'FM 9(D501-T501)';
                        }else if(this.val_3[10]=='fm_10'){
                            this.flow_label_11 = 'FM 10(T501-T502)';
                        }else if(this.val_3[10]=='fm_11'){
                            this.flow_label_11 = 'FM 11(Tar Transfer)';
                        }else if(this.val_3[10]=='fm_12'){
                            this.flow_label_11 = 'FM 12(Recycle to D405 LINE)';
                        }else if(this.val_3[10]=='fm_13'){
                            this.flow_label_11 = 'FM 13(Biodiesel to Storage)';
                        }else if(this.val_3[10]=='fm_14'){
                            this.flow_label_11 = 'FM 14(D403 into T601)';
                        }else if(this.val_3[10]=='fm_15'){
                            this.flow_label_11 = 'FM 15(T601 to D602)';
                        }else if(this.val_3[10]=='fm_16'){
                            this.flow_label_11 = 'FM 16(T601 to Reflux)';
                        }else if(this.val_3[10]=='fm_17'){
                            this.flow_label_11 = 'FM 17(T601 Drain)';
                        }else if(this.val_3[10]=='fm_18'){
                            this.flow_label_11 = 'FM 18(Methanol Into GST 1 and 2)';
                        }else if(this.val_3[10]=='fm_19'){
                            this.flow_label_11 = 'FM 19(Methanol into PPRA and B)';
                        }else if(this.val_3[10]=='fm_20'){
                            this.flow_label_11 = 'FM 20(Methanol into GLV)';
                        }else if(this.val_3[10]=='fm_21'){
                            this.flow_label_11 = 'FM 21(Methanol into Trans)';
                        }else if(this.val_3[10]=='fm_22'){
                            this.flow_label_11 = 'FM 22(Biodiesel Storage to Truck)';
                        }else if(this.val_3[10]=='fm_23'){
                            this.flow_label_11 = 'FM 23(Raw Material Offloading)';
                        }else if(this.val_3[10]=='fm_24'){
                            this.flow_label_11 = 'FM 24(Raw Material To Settling Tank)';
                        }else if(this.val_3[10]=='fm_25'){
                            this.flow_label_11 = 'FM 25(Settling tank to d101)';
                        }else if(this.val_3[10]=='fm_26'){
                            this.flow_label_11 = 'FM 26(CT Outlet)';
                        }else if(this.val_3[10]=='fm_27'){
                            this.flow_label_11 = 'FM 27(CT Inlet)';
                        }else if(this.val_3[10]=='st_fm2_flow'){
                            this.flow_label_11 = 'Main Steam Flow';
                        }else if(this.val_3[10]=='st_fm1_flow'){
                            this.flow_label_11 = 'Steam To E401 Flow';
                        }
    if(this.val_3[11]=='fm_1'){
                            this.flow_label_12 = 'FM 1(D405 to Trans)';
                        }else if(this.val_3[11]=='fm_2'){
                            this.flow_label_12 = 'FM 2(ALKALI Trans)';
                        }else if(this.val_3[11]=='fm_3'){
                            this.flow_label_12 = 'FM 3(Trans Evaporator to NI)';
                        }else if(this.val_3[11]=='fm_4'){
                            this.flow_label_12 = 'FM 4(Water N1)';
                        }else if(this.val_3[11]=='fm_5'){
                            this.flow_label_12 = 'FM 5(Nozzle 2 to d402)';
                        }else if(this.val_3[11]=='fm_6'){
                            this.flow_label_12 = 'FM 6(Nozzle 3 to Slag pool)';
                        }else if(this.val_3[11]=='fm_7'){
                            this.flow_label_12 = 'FM 7(D602 to Methanol Storage tank)';
                        }else if(this.val_3[11]=='fm_8'){
                            this.flow_label_12 = 'FM 8(D402-D501)';
                        }else if(this.val_3[11]=='fm_9'){
                            this.flow_label_12 = 'FM 9(D501-T501)';
                        }else if(this.val_3[11]=='fm_10'){
                            this.flow_label_12 = 'FM 10(T501-T502)';
                        }else if(this.val_3[11]=='fm_11'){
                            this.flow_label_12 = 'FM 11(Tar Transfer)';
                        }else if(this.val_3[11]=='fm_12'){
                            this.flow_label_12 = 'FM 12(Recycle to D405 LINE)';
                        }else if(this.val_3[11]=='fm_13'){
                            this.flow_label_12 = 'FM 13(Biodiesel to Storage)';
                        }else if(this.val_3[11]=='fm_14'){
                            this.flow_label_12 = 'FM 14(D403 into T601)';
                        }else if(this.val_3[11]=='fm_15'){
                            this.flow_label_12 = 'FM 15(T601 to D602)';
                        }else if(this.val_3[11]=='fm_16'){
                            this.flow_label_12 = 'FM 16(T601 to Reflux)';
                        }else if(this.val_3[11]=='fm_17'){
                            this.flow_label_12 = 'FM 17(T601 Drain)';
                        }else if(this.val_3[11]=='fm_18'){
                            this.flow_label_12 = 'FM 18(Methanol Into GST 1 and 2)';
                        }else if(this.val_3[11]=='fm_19'){
                            this.flow_label_12 = 'FM 19(Methanol into PPRA and B)';
                        }else if(this.val_3[11]=='fm_20'){
                            this.flow_label_12 = 'FM 20(Methanol into GLV)';
                        }else if(this.val_3[11]=='fm_21'){
                            this.flow_label_12 = 'FM 21(Methanol into Trans)';
                        }else if(this.val_3[11]=='fm_22'){
                            this.flow_label_12 = 'FM 22(Biodiesel Storage to Truck)';
                        }else if(this.val_3[11]=='fm_23'){
                            this.flow_label_12 = 'FM 23(Raw Material Offloading)';
                        }else if(this.val_3[11]=='fm_24'){
                            this.flow_label_12 = 'FM 24(Raw Material To Settling Tank)';
                        }else if(this.val_3[11]=='fm_25'){
                            this.flow_label_12 = 'FM 25(Settling tank to d101)';
                        }else if(this.val_3[11]=='fm_26'){
                            this.flow_label_12 = 'FM 26(CT Outlet)';
                        }else if(this.val_3[11]=='fm_27'){
                            this.flow_label_12 = 'FM 27(CT Inlet)';
                        }else if(this.val_3[11]=='st_fm2_flow'){
                            this.flow_label_12 = 'Main Steam Flow';
                        }else if(this.val_3[11]=='st_fm1_flow'){
                            this.flow_label_12 = 'Steam To E401 Flow';
                        }
    if(this.val_3[12]=='fm_1'){
                            this.flow_label_13 = 'FM 1(D405 to Trans)';
                        }else if(this.val_3[12]=='fm_2'){
                            this.flow_label_13 = 'FM 2(ALKALI Trans)';
                        }else if(this.val_3[12]=='fm_3'){
                            this.flow_label_13 = 'FM 3(Trans Evaporator to NI)';
                        }else if(this.val_3[12]=='fm_4'){
                            this.flow_label_13 = 'FM 4(Water N1)';
                        }else if(this.val_3[12]=='fm_5'){
                            this.flow_label_13 = 'FM 5(Nozzle 2 to d402)';
                        }else if(this.val_3[12]=='fm_6'){
                            this.flow_label_13 = 'FM 6(Nozzle 3 to Slag pool)';
                        }else if(this.val_3[12]=='fm_7'){
                            this.flow_label_13 = 'FM 7(D602 to Methanol Storage tank)';
                        }else if(this.val_3[12]=='fm_8'){
                            this.flow_label_13 = 'FM 8(D402-D501)';
                        }else if(this.val_3[12]=='fm_9'){
                            this.flow_label_13 = 'FM 9(D501-T501)';
                        }else if(this.val_3[12]=='fm_10'){
                            this.flow_label_13 = 'FM 10(T501-T502)';
                        }else if(this.val_3[12]=='fm_11'){
                            this.flow_label_13 = 'FM 11(Tar Transfer)';
                        }else if(this.val_3[12]=='fm_12'){
                            this.flow_label_13 = 'FM 12(Recycle to D405 LINE)';
                        }else if(this.val_3[12]=='fm_13'){
                            this.flow_label_13 = 'FM 13(Biodiesel to Storage)';
                        }else if(this.val_3[12]=='fm_14'){
                            this.flow_label_13 = 'FM 14(D403 into T601)';
                        }else if(this.val_3[12]=='fm_15'){
                            this.flow_label_13 = 'FM 15(T601 to D602)';
                        }else if(this.val_3[12]=='fm_16'){
                            this.flow_label_13 = 'FM 16(T601 to Reflux)';
                        }else if(this.val_3[12]=='fm_17'){
                            this.flow_label_13 = 'FM 17(T601 Drain)';
                        }else if(this.val_3[12]=='fm_18'){
                            this.flow_label_13 = 'FM 18(Methanol Into GST 1 and 2)';
                        }else if(this.val_3[12]=='fm_19'){
                            this.flow_label_13 = 'FM 19(Methanol into PPRA and B)';
                        }else if(this.val_3[12]=='fm_20'){
                            this.flow_label_13 = 'FM 20(Methanol into GLV)';
                        }else if(this.val_3[12]=='fm_21'){
                            this.flow_label_13 = 'FM 21(Methanol into Trans)';
                        }else if(this.val_3[12]=='fm_22'){
                            this.flow_label_13 = 'FM 22(Biodiesel Storage to Truck)';
                        }else if(this.val_3[12]=='fm_23'){
                            this.flow_label_13 = 'FM 23(Raw Material Offloading)';
                        }else if(this.val_3[12]=='fm_24'){
                            this.flow_label_13 = 'FM 24(Raw Material To Settling Tank)';
                        }else if(this.val_3[12]=='fm_25'){
                            this.flow_label_13 = 'FM 25(Settling tank to d101)';
                        }else if(this.val_3[12]=='fm_26'){
                            this.flow_label_13 = 'FM 26(CT Outlet)';
                        }else if(this.val_3[12]=='fm_27'){
                            this.flow_label_13 = 'FM 27(CT Inlet)';
                        }else if(this.val_3[12]=='st_fm2_flow'){
                            this.flow_label_13 = 'Main Steam Flow';
                        }else if(this.val_3[12]=='st_fm1_flow'){
                            this.flow_label_13 = 'Steam To E401 Flow';
                        }
    if(this.val_3[13]=='fm_1'){
                            this.flow_label_14 = 'FM 1(D405 to Trans)';
                        }else if(this.val_3[13]=='fm_2'){
                            this.flow_label_14 = 'FM 2(ALKALI Trans)';
                        }else if(this.val_3[13]=='fm_3'){
                            this.flow_label_14 = 'FM 3(Trans Evaporator to NI)';
                        }else if(this.val_3[13]=='fm_4'){
                            this.flow_label_14 = 'FM 4(Water N1)';
                        }else if(this.val_3[13]=='fm_5'){
                            this.flow_label_14 = 'FM 5(Nozzle 2 to d402)';
                        }else if(this.val_3[13]=='fm_6'){
                            this.flow_label_14 = 'FM 6(Nozzle 3 to Slag pool)';
                        }else if(this.val_3[13]=='fm_7'){
                            this.flow_label_14 = 'FM 7(D602 to Methanol Storage tank)';
                        }else if(this.val_3[13]=='fm_8'){
                            this.flow_label_14 = 'FM 8(D402-D501)';
                        }else if(this.val_3[13]=='fm_9'){
                            this.flow_label_14 = 'FM 9(D501-T501)';
                        }else if(this.val_3[13]=='fm_10'){
                            this.flow_label_14 = 'FM 10(T501-T502)';
                        }else if(this.val_3[13]=='fm_11'){
                            this.flow_label_14 = 'FM 11(Tar Transfer)';
                        }else if(this.val_3[13]=='fm_12'){
                            this.flow_label_14 = 'FM 12(Recycle to D405 LINE)';
                        }else if(this.val_3[13]=='fm_13'){
                            this.flow_label_14 = 'FM 13(Biodiesel to Storage)';
                        }else if(this.val_3[13]=='fm_14'){
                            this.flow_label_14 = 'FM 14(D403 into T601)';
                        }else if(this.val_3[13]=='fm_15'){
                            this.flow_label_14 = 'FM 15(T601 to D602)';
                        }else if(this.val_3[13]=='fm_16'){
                            this.flow_label_14 = 'FM 16(T601 to Reflux)';
                        }else if(this.val_3[13]=='fm_17'){
                            this.flow_label_14 = 'FM 17(T601 Drain)';
                        }else if(this.val_3[13]=='fm_18'){
                            this.flow_label_14 = 'FM 18(Methanol Into GST 1 and 2)';
                        }else if(this.val_3[13]=='fm_19'){
                            this.flow_label_14 = 'FM 19(Methanol into PPRA and B)';
                        }else if(this.val_3[13]=='fm_20'){
                            this.flow_label_14 = 'FM 20(Methanol into GLV)';
                        }else if(this.val_3[13]=='fm_21'){
                            this.flow_label_14 = 'FM 21(Methanol into Trans)';
                        }else if(this.val_3[13]=='fm_22'){
                            this.flow_label_14 = 'FM 22(Biodiesel Storage to Truck)';
                        }else if(this.val_3[13]=='fm_23'){
                            this.flow_label_14 = 'FM 23(Raw Material Offloading)';
                        }else if(this.val_3[13]=='fm_24'){
                            this.flow_label_14 = 'FM 24(Raw Material To Settling Tank)';
                        }else if(this.val_3[13]=='fm_25'){
                            this.flow_label_14 = 'FM 25(Settling tank to d101)';
                        }else if(this.val_3[13]=='fm_26'){
                            this.flow_label_14 = 'FM 26(CT Outlet)';
                        }else if(this.val_3[13]=='fm_27'){
                            this.flow_label_14 = 'FM 27(CT Inlet)';
                        }else if(this.val_3[13]=='st_fm2_flow'){
                            this.flow_label_14 = 'Main Steam Flow';
                        }else if(this.val_3[13]=='st_fm1_flow'){
                            this.flow_label_14 = 'Steam To E401 Flow';
                        }
    if(this.val_3[14]=='fm_1'){
                            this.flow_label_15 = 'FM 1(D405 to Trans)';
                        }else if(this.val_3[14]=='fm_2'){
                            this.flow_label_15 = 'FM 2(ALKALI Trans)';
                        }else if(this.val_3[14]=='fm_3'){
                            this.flow_label_15 = 'FM 3(Trans Evaporator to NI)';
                        }else if(this.val_3[14]=='fm_4'){
                            this.flow_label_15 = 'FM 4(Water N1)';
                        }else if(this.val_3[14]=='fm_5'){
                            this.flow_label_15 = 'FM 5(Nozzle 2 to d402)';
                        }else if(this.val_3[14]=='fm_6'){
                            this.flow_label_15 = 'FM 6(Nozzle 3 to Slag pool)';
                        }else if(this.val_3[14]=='fm_7'){
                            this.flow_label_15 = 'FM 7(D602 to Methanol Storage tank)';
                        }else if(this.val_3[14]=='fm_8'){
                            this.flow_label_15 = 'FM 8(D402-D501)';
                        }else if(this.val_3[14]=='fm_9'){
                            this.flow_label_15 = 'FM 9(D501-T501)';
                        }else if(this.val_3[14]=='fm_10'){
                            this.flow_label_15 = 'FM 10(T501-T502)';
                        }else if(this.val_3[14]=='fm_11'){
                            this.flow_label_15 = 'FM 11(Tar Transfer)';
                        }else if(this.val_3[14]=='fm_12'){
                            this.flow_label_15 = 'FM 12(Recycle to D405 LINE)';
                        }else if(this.val_3[14]=='fm_13'){
                            this.flow_label_15 = 'FM 13(Biodiesel to Storage)';
                        }else if(this.val_3[14]=='fm_14'){
                            this.flow_label_15 = 'FM 14(D403 into T601)';
                        }else if(this.val_3[14]=='fm_15'){
                            this.flow_label_15 = 'FM 15(T601 to D602)';
                        }else if(this.val_3[14]=='fm_16'){
                            this.flow_label_15 = 'FM 16(T601 to Reflux)';
                        }else if(this.val_3[14]=='fm_17'){
                            this.flow_label_15 = 'FM 17(T601 Drain)';
                        }else if(this.val_3[14]=='fm_18'){
                            this.flow_label_15 = 'FM 18(Methanol Into GST 1 and 2)';
                        }else if(this.val_3[14]=='fm_19'){
                            this.flow_label_15 = 'FM 19(Methanol into PPRA and B)';
                        }else if(this.val_3[14]=='fm_20'){
                            this.flow_label_15 = 'FM 20(Methanol into GLV)';
                        }else if(this.val_3[14]=='fm_21'){
                            this.flow_label_15 = 'FM 21(Methanol into Trans)';
                        }else if(this.val_3[14]=='fm_22'){
                            this.flow_label_15 = 'FM 22(Biodiesel Storage to Truck)';
                        }else if(this.val_3[14]=='fm_23'){
                            this.flow_label_15 = 'FM 23(Raw Material Offloading)';
                        }else if(this.val_3[14]=='fm_24'){
                            this.flow_label_15 = 'FM 24(Raw Material To Settling Tank)';
                        }else if(this.val_3[14]=='fm_25'){
                            this.flow_label_15 = 'FM 25(Settling tank to d101)';
                        }else if(this.val_3[14]=='fm_26'){
                            this.flow_label_15 = 'FM 26(CT Outlet)';
                        }else if(this.val_3[14]=='fm_27'){
                            this.flow_label_15 = 'FM 27(CT Inlet)';
                        }else if(this.val_3[14]=='st_fm2_flow'){
                            this.flow_label_15 = 'Main Steam Flow';
                        }else if(this.val_3[14]=='st_fm1_flow'){
                            this.flow_label_15 = 'Steam To E401 Flow';
                        }
    if(this.val_3[15]=='fm_1'){
                            this.flow_label_16 = 'FM 1(D405 to Trans)';
                        }else if(this.val_3[15]=='fm_2'){
                            this.flow_label_16 = 'FM 2(ALKALI Trans)';
                        }else if(this.val_3[15]=='fm_3'){
                            this.flow_label_16 = 'FM 3(Trans Evaporator to NI)';
                        }else if(this.val_3[15]=='fm_4'){
                            this.flow_label_16 = 'FM 4(Water N1)';
                        }else if(this.val_3[15]=='fm_5'){
                            this.flow_label_16 = 'FM 5(Nozzle 2 to d402)';
                        }else if(this.val_3[15]=='fm_6'){
                            this.flow_label_16 = 'FM 6(Nozzle 3 to Slag pool)';
                        }else if(this.val_3[15]=='fm_7'){
                            this.flow_label_16 = 'FM 7(D602 to Methanol Storage tank)';
                        }else if(this.val_3[15]=='fm_8'){
                            this.flow_label_16 = 'FM 8(D402-D501)';
                        }else if(this.val_3[15]=='fm_9'){
                            this.flow_label_16 = 'FM 9(D501-T501)';
                        }else if(this.val_3[15]=='fm_10'){
                            this.flow_label_16 = 'FM 10(T501-T502)';
                        }else if(this.val_3[15]=='fm_11'){
                            this.flow_label_16 = 'FM 11(Tar Transfer)';
                        }else if(this.val_3[15]=='fm_12'){
                            this.flow_label_16 = 'FM 12(Recycle to D405 LINE)';
                        }else if(this.val_3[15]=='fm_13'){
                            this.flow_label_16 = 'FM 13(Biodiesel to Storage)';
                        }else if(this.val_3[15]=='fm_14'){
                            this.flow_label_16 = 'FM 14(D403 into T601)';
                        }else if(this.val_3[15]=='fm_15'){
                            this.flow_label_16 = 'FM 15(T601 to D602)';
                        }else if(this.val_3[15]=='fm_16'){
                            this.flow_label_16 = 'FM 16(T601 to Reflux)';
                        }else if(this.val_3[15]=='fm_17'){
                            this.flow_label_16 = 'FM 17(T601 Drain)';
                        }else if(this.val_3[15]=='fm_18'){
                            this.flow_label_16 = 'FM 18(Methanol Into GST 1 and 2)';
                        }else if(this.val_3[15]=='fm_19'){
                            this.flow_label_16 = 'FM 19(Methanol into PPRA and B)';
                        }else if(this.val_3[15]=='fm_20'){
                            this.flow_label_16 = 'FM 20(Methanol into GLV)';
                        }else if(this.val_3[15]=='fm_21'){
                            this.flow_label_16 = 'FM 21(Methanol into Trans)';
                        }else if(this.val_3[15]=='fm_22'){
                            this.flow_label_16 = 'FM 22(Biodiesel Storage to Truck)';
                        }else if(this.val_3[15]=='fm_23'){
                            this.flow_label_16 = 'FM 23(Raw Material Offloading)';
                        }else if(this.val_3[15]=='fm_24'){
                            this.flow_label_16 = 'FM 24(Raw Material To Settling Tank)';
                        }else if(this.val_3[15]=='fm_25'){
                            this.flow_label_16 = 'FM 25(Settling tank to d101)';
                        }else if(this.val_3[15]=='fm_26'){
                            this.flow_label_16 = 'FM 26(CT Outlet)';
                        }else if(this.val_3[15]=='fm_27'){
                            this.flow_label_16 = 'FM 27(CT Inlet)';
                        }else if(this.val_3[15]=='st_fm2_flow'){
                            this.flow_label_16 = 'Main Steam Flow';
                        }else if(this.val_3[15]=='st_fm1_flow'){
                            this.flow_label_16 = 'Steam To E401 Flow';
                        }
                    }
                    if(this.val_4.length >= 0){
                        // For Flow Total
                        if(this.val_4[0]=='ft_1'){
                            this.ft_label_1 = 'FT 1(D405 to Trans)';
                        }else if(this.val_4[0]=='ft_2'){
                            this.ft_label_1 = 'FT 2(ALKALI Trans)';
                        }else if(this.val_4[0]=='ft_3'){
                            this.ft_label_1 = 'FT 3(Trans Evaporator to NI)';
                        }else if(this.val_4[0]=='ft_4'){
                            this.ft_label_1 = 'FT 4(Water N1)';
                        }else if(this.val_4[0]=='ft_5'){
                            this.ft_label_1 = 'FT 5(Nozzle 2 to d402)';
                        }else if(this.val_4[0]=='ft_6'){
                            this.ft_label_1 = 'FT 6(Nozzle 3 to Slag pool)';
                        }else if(this.val_4[0]=='ft_7'){
                            this.ft_label_1 = 'FT 7(D602 to Methanol Storage tank)';
                        }else if(this.val_4[0]=='ft_8'){
                            this.ft_label_1 = 'FT 8(D402-D501)';
                        }else if(this.val_4[0]=='ft_9'){
                            this.ft_label_1 = 'FT 9(D501-T501)(D501-T501)';
                        }else if(this.val_4[0]=='ft_10'){
                            this.ft_label_1 = 'FT 10(T501-T502)';
                        }else if(this.val_4[0]=='ft_11'){
                            this.ft_label_1 = 'FT 11(Tar Transfer)';
                        }else if(this.val_4[0]=='ft_12'){
                            this.ft_label_1 = 'FT 12(Recycle to D405 LINE)';
                        }else if(this.val_4[0]=='ft_13'){
                            this.ft_label_1 = 'FT 13(Biodiesel to Storage)';
                        }else if(this.val_4[0]=='ft_14'){
                            this.ft_label_1 = 'FT 14(D403 into T601)';
                        }else if(this.val_4[0]=='ft_15'){
                            this.ft_label_1 = 'FT 15(T601 to D602)';
                        }else if(this.val_4[0]=='ft_16'){
                            this.ft_label_1 = 'FT 16(T601 to Reflux)';
                        }else if(this.val_4[0]=='ft_17'){
                            this.ft_label_1 = 'FT 17(T601 Drain)';
                        }else if(this.val_4[0]=='ft_18'){
                            this.ft_label_1 = 'FT 18(Methanol Into GST 1 and 2)';
                        }else if(this.val_4[0]=='ft_19'){
                            this.ft_label_1 = 'FT 19(Methanol into PPRA and B)';
                        }else if(this.val_4[0]=='ft_20'){
                            this.ft_label_1 = 'FT 20(Methanol into GLV)';
                        }else if(this.val_4[0]=='ft_21'){
                            this.ft_label_1 = 'FT 21(Methanol into Trans)';
                        }else if(this.val_4[0]=='ft_22'){
                            this.ft_label_1 = 'FT 22(Biodiesel Storage to Truck)';
                        }else if(this.val_4[0]=='ft_23'){
                            this.ft_label_1 = 'FT 23(Raw Material Offloading)';
                        }else if(this.val_4[0]=='ft_24'){
                            this.ft_label_1 = 'FT 24(Raw Material To Settling Tank)';
                        }else if(this.val_4[0]=='ft_25'){
                            this.ft_label_1 = 'FT 25(Settling tank to d101)';
                        }else if(this.val_4[0]=='ft_26'){
                            this.ft_label_1 = 'FT 26(CT Outlet)';
                        }else if(this.val_4[0]=='ft_27'){
                            this.ft_label_1 = 'FT 27(CT Inlet)';
                        }else if(this.val_4[0]=='stfm2_flow_tot'){
                            this.ft_label_1 = 'Main Steam Flow_Tot';
                        }else if(this.val_4[0]=='stfm1_flow_tot'){
                            this.ft_label_1 = 'Steam To E401 Flow_Tot';
                        }
    if(this.val_4[1]=='ft_1'){
                            this.ft_label_2 = 'FT 1(D405 to Trans)';
                        }else if(this.val_4[1]=='ft_2'){
                            this.ft_label_2 = 'FT 2(ALKALI Trans)';
                        }else if(this.val_4[1]=='ft_3'){
                            this.ft_label_2 = 'FT 3(Trans Evaporator to NI)';
                        }else if(this.val_4[1]=='ft_4'){
                            this.ft_label_2 = 'FT 4(Water N1)';
                        }else if(this.val_4[1]=='ft_5'){
                            this.ft_label_2 = 'FT 5(Nozzle 2 to d402)';
                        }else if(this.val_4[1]=='ft_6'){
                            this.ft_label_2 = 'FT 6(Nozzle 3 to Slag pool)';
                        }else if(this.val_4[1]=='ft_7'){
                            this.ft_label_2 = 'FT 7(D602 to Methanol Storage tank)';
                        }else if(this.val_4[1]=='ft_8'){
                            this.ft_label_2 = 'FT 8(D402-D501)';
                        }else if(this.val_4[1]=='ft_9'){
                            this.ft_label_2 = 'FT 9(D501-T501)(D501-T501)';
                        }else if(this.val_4[1]=='ft_10'){
                            this.ft_label_2 = 'FT 10(T501-T502)';
                        }else if(this.val_4[1]=='ft_11'){
                            this.ft_label_2 = 'FT 11(Tar Transfer)';
                        }else if(this.val_4[1]=='ft_12'){
                            this.ft_label_2 = 'FT 12(Recycle to D405 LINE)';
                        }else if(this.val_4[1]=='ft_13'){
                            this.ft_label_2 = 'FT 13(Biodiesel to Storage)';
                        }else if(this.val_4[1]=='ft_14'){
                            this.ft_label_2 = 'FT 14(D403 into T601)';
                        }else if(this.val_4[1]=='ft_15'){
                            this.ft_label_2 = 'FT 15(T601 to D602)';
                        }else if(this.val_4[1]=='ft_16'){
                            this.ft_label_2 = 'FT 16(T601 to Reflux)';
                        }else if(this.val_4[1]=='ft_17'){
                            this.ft_label_2 = 'FT 17(T601 Drain)';
                        }else if(this.val_4[1]=='ft_18'){
                            this.ft_label_2 = 'FT 18(Methanol Into GST 1 and 2)';
                        }else if(this.val_4[1]=='ft_19'){
                            this.ft_label_2 = 'FT 19(Methanol into PPRA and B)';
                        }else if(this.val_4[1]=='ft_20'){
                            this.ft_label_2 = 'FT 20(Methanol into GLV)';
                        }else if(this.val_4[1]=='ft_21'){
                            this.ft_label_2 = 'FT 21(Methanol into Trans)';
                        }else if(this.val_4[1]=='ft_22'){
                            this.ft_label_2 = 'FT 22(Biodiesel Storage to Truck)';
                        }else if(this.val_4[1]=='ft_23'){
                            this.ft_label_2 = 'FT 23(Raw Material Offloading)';
                        }else if(this.val_4[1]=='ft_24'){
                            this.ft_label_2 = 'FT 24(Raw Material To Settling Tank)';
                        }else if(this.val_4[1]=='ft_25'){
                            this.ft_label_2 = 'FT 25(Settling tank to d101)';
                        }else if(this.val_4[1]=='ft_26'){
                            this.ft_label_2 = 'FT 26(CT Outlet)';
                        }else if(this.val_4[1]=='ft_27'){
                            this.ft_label_2 = 'FT 27(CT Inlet)';
                        }else if(this.val_4[1]=='stfm2_flow_tot'){
                            this.ft_label_2 = 'Main Steam Flow_Tot';
                        }else if(this.val_4[1]=='stfm1_flow_tot'){
                            this.ft_label_2 = 'Steam To E401 Flow_Tot';
                        }
    if(this.val_4[2]=='ft_1'){
                            this.ft_label_3 = 'FT 1(D405 to Trans)';
                        }else if(this.val_4[2]=='ft_2'){
                            this.ft_label_3 = 'FT 2(ALKALI Trans)';
                        }else if(this.val_4[2]=='ft_3'){
                            this.ft_label_3 = 'FT 3(Trans Evaporator to NI)';
                        }else if(this.val_4[2]=='ft_4'){
                            this.ft_label_3 = 'FT 4(Water N1)';
                        }else if(this.val_4[2]=='ft_5'){
                            this.ft_label_3 = 'FT 5(Nozzle 2 to d402)';
                        }else if(this.val_4[2]=='ft_6'){
                            this.ft_label_3 = 'FT 6(Nozzle 3 to Slag pool)';
                        }else if(this.val_4[2]=='ft_7'){
                            this.ft_label_3 = 'FT 7(D602 to Methanol Storage tank)';
                        }else if(this.val_4[2]=='ft_8'){
                            this.ft_label_3 = 'FT 8(D402-D501)';
                        }else if(this.val_4[2]=='ft_9'){
                            this.ft_label_3 = 'FT 9(D501-T501)(D501-T501)';
                        }else if(this.val_4[2]=='ft_10'){
                            this.ft_label_3 = 'FT 10(T501-T502)';
                        }else if(this.val_4[2]=='ft_11'){
                            this.ft_label_3 = 'FT 11(Tar Transfer)';
                        }else if(this.val_4[2]=='ft_12'){
                            this.ft_label_3 = 'FT 12(Recycle to D405 LINE)';
                        }else if(this.val_4[2]=='ft_13'){
                            this.ft_label_3 = 'FT 13(Biodiesel to Storage)';
                        }else if(this.val_4[2]=='ft_14'){
                            this.ft_label_3 = 'FT 14(D403 into T601)';
                        }else if(this.val_4[2]=='ft_15'){
                            this.ft_label_3 = 'FT 15(T601 to D602)';
                        }else if(this.val_4[2]=='ft_16'){
                            this.ft_label_3 = 'FT 16(T601 to Reflux)';
                        }else if(this.val_4[2]=='ft_17'){
                            this.ft_label_3 = 'FT 17(T601 Drain)';
                        }else if(this.val_4[2]=='ft_18'){
                            this.ft_label_3 = 'FT 18(Methanol Into GST 1 and 2)';
                        }else if(this.val_4[2]=='ft_19'){
                            this.ft_label_3 = 'FT 19(Methanol into PPRA and B)';
                        }else if(this.val_4[2]=='ft_20'){
                            this.ft_label_3 = 'FT 20(Methanol into GLV)';
                        }else if(this.val_4[2]=='ft_21'){
                            this.ft_label_3 = 'FT 21(Methanol into Trans)';
                        }else if(this.val_4[2]=='ft_22'){
                            this.ft_label_3 = 'FT 22(Biodiesel Storage to Truck)';
                        }else if(this.val_4[2]=='ft_23'){
                            this.ft_label_3 = 'FT 23(Raw Material Offloading)';
                        }else if(this.val_4[2]=='ft_24'){
                            this.ft_label_3 = 'FT 24(Raw Material To Settling Tank)';
                        }else if(this.val_4[2]=='ft_25'){
                            this.ft_label_3 = 'FT 25(Settling tank to d101)';
                        }else if(this.val_4[2]=='ft_26'){
                            this.ft_label_3 = 'FT 26(CT Outlet)';
                        }else if(this.val_4[2]=='ft_27'){
                            this.ft_label_3 = 'FT 27(CT Inlet)';
                        }else if(this.val_4[2]=='stfm2_flow_tot'){
                            this.ft_label_3 = 'Main Steam Flow_Tot';
                        }else if(this.val_4[2]=='stfm1_flow_tot'){
                            this.ft_label_3 = 'Steam To E401 Flow_Tot';
                        }
    if(this.val_4[3]=='ft_1'){
                            this.ft_label_4 = 'FT 1(D405 to Trans)';
                        }else if(this.val_4[3]=='ft_2'){
                            this.ft_label_4 = 'FT 2(ALKALI Trans)';
                        }else if(this.val_4[3]=='ft_3'){
                            this.ft_label_4 = 'FT 3(Trans Evaporator to NI)';
                        }else if(this.val_4[3]=='ft_4'){
                            this.ft_label_4 = 'FT 4(Water N1)';
                        }else if(this.val_4[3]=='ft_5'){
                            this.ft_label_4 = 'FT 5(Nozzle 2 to d402)';
                        }else if(this.val_4[3]=='ft_6'){
                            this.ft_label_4 = 'FT 6(Nozzle 3 to Slag pool)';
                        }else if(this.val_4[3]=='ft_7'){
                            this.ft_label_4 = 'FT 7(D602 to Methanol Storage tank)';
                        }else if(this.val_4[3]=='ft_8'){
                            this.ft_label_4 = 'FT 8(D402-D501)';
                        }else if(this.val_4[3]=='ft_9'){
                            this.ft_label_4 = 'FT 9(D501-T501)(D501-T501)';
                        }else if(this.val_4[3]=='ft_10'){
                            this.ft_label_4 = 'FT 10(T501-T502)';
                        }else if(this.val_4[3]=='ft_11'){
                            this.ft_label_4 = 'FT 11(Tar Transfer)';
                        }else if(this.val_4[3]=='ft_12'){
                            this.ft_label_4 = 'FT 12(Recycle to D405 LINE)';
                        }else if(this.val_4[3]=='ft_13'){
                            this.ft_label_4 = 'FT 13(Biodiesel to Storage)';
                        }else if(this.val_4[3]=='ft_14'){
                            this.ft_label_4 = 'FT 14(D403 into T601)';
                        }else if(this.val_4[3]=='ft_15'){
                            this.ft_label_4 = 'FT 15(T601 to D602)';
                        }else if(this.val_4[3]=='ft_16'){
                            this.ft_label_4 = 'FT 16(T601 to Reflux)';
                        }else if(this.val_4[3]=='ft_17'){
                            this.ft_label_4 = 'FT 17(T601 Drain)';
                        }else if(this.val_4[3]=='ft_18'){
                            this.ft_label_4 = 'FT 18(Methanol Into GST 1 and 2)';
                        }else if(this.val_4[3]=='ft_19'){
                            this.ft_label_4 = 'FT 19(Methanol into PPRA and B)';
                        }else if(this.val_4[3]=='ft_20'){
                            this.ft_label_4 = 'FT 20(Methanol into GLV)';
                        }else if(this.val_4[3]=='ft_21'){
                            this.ft_label_4 = 'FT 21(Methanol into Trans)';
                        }else if(this.val_4[3]=='ft_22'){
                            this.ft_label_4 = 'FT 22(Biodiesel Storage to Truck)';
                        }else if(this.val_4[3]=='ft_23'){
                            this.ft_label_4 = 'FT 23(Raw Material Offloading)';
                        }else if(this.val_4[3]=='ft_24'){
                            this.ft_label_4 = 'FT 24(Raw Material To Settling Tank)';
                        }else if(this.val_4[3]=='ft_25'){
                            this.ft_label_4 = 'FT 25(Settling tank to d101)';
                        }else if(this.val_4[3]=='ft_26'){
                            this.ft_label_4 = 'FT 26(CT Outlet)';
                        }else if(this.val_4[3]=='ft_27'){
                            this.ft_label_4 = 'FT 27(CT Inlet)';
                        }else if(this.val_4[3]=='stfm2_flow_tot'){
                            this.ft_label_4 = 'Main Steam Flow_Tot';
                        }else if(this.val_4[3]=='stfm1_flow_tot'){
                            this.ft_label_4 = 'Steam To E401 Flow_Tot';
                        }
    if(this.val_4[4]=='ft_1'){
                            this.ft_label_5 = 'FT 1(D405 to Trans)';
                        }else if(this.val_4[4]=='ft_2'){
                            this.ft_label_5 = 'FT 2(ALKALI Trans)';
                        }else if(this.val_4[4]=='ft_3'){
                            this.ft_label_5 = 'FT 3(Trans Evaporator to NI)';
                        }else if(this.val_4[4]=='ft_4'){
                            this.ft_label_5 = 'FT 4(Water N1)';
                        }else if(this.val_4[4]=='ft_5'){
                            this.ft_label_5 = 'FT 5(Nozzle 2 to d402)';
                        }else if(this.val_4[4]=='ft_6'){
                            this.ft_label_5 = 'FT 6(Nozzle 3 to Slag pool)';
                        }else if(this.val_4[4]=='ft_7'){
                            this.ft_label_5 = 'FT 7(D602 to Methanol Storage tank)';
                        }else if(this.val_4[4]=='ft_8'){
                            this.ft_label_5 = 'FT 8(D402-D501)';
                        }else if(this.val_4[4]=='ft_9'){
                            this.ft_label_5 = 'FT 9(D501-T501)(D501-T501)';
                        }else if(this.val_4[4]=='ft_10'){
                            this.ft_label_5 = 'FT 10(T501-T502)';
                        }else if(this.val_4[4]=='ft_11'){
                            this.ft_label_5 = 'FT 11(Tar Transfer)';
                        }else if(this.val_4[4]=='ft_12'){
                            this.ft_label_5 = 'FT 12(Recycle to D405 LINE)';
                        }else if(this.val_4[4]=='ft_13'){
                            this.ft_label_5 = 'FT 13(Biodiesel to Storage)';
                        }else if(this.val_4[4]=='ft_14'){
                            this.ft_label_5 = 'FT 14(D403 into T601)';
                        }else if(this.val_4[4]=='ft_15'){
                            this.ft_label_5 = 'FT 15(T601 to D602)';
                        }else if(this.val_4[4]=='ft_16'){
                            this.ft_label_5 = 'FT 16(T601 to Reflux)';
                        }else if(this.val_4[4]=='ft_17'){
                            this.ft_label_5 = 'FT 17(T601 Drain)';
                        }else if(this.val_4[4]=='ft_18'){
                            this.ft_label_5 = 'FT 18(Methanol Into GST 1 and 2)';
                        }else if(this.val_4[4]=='ft_19'){
                            this.ft_label_5 = 'FT 19(Methanol into PPRA and B)';
                        }else if(this.val_4[4]=='ft_20'){
                            this.ft_label_5 = 'FT 20(Methanol into GLV)';
                        }else if(this.val_4[4]=='ft_21'){
                            this.ft_label_5 = 'FT 21(Methanol into Trans)';
                        }else if(this.val_4[4]=='ft_22'){
                            this.ft_label_5 = 'FT 22(Biodiesel Storage to Truck)';
                        }else if(this.val_4[4]=='ft_23'){
                            this.ft_label_5 = 'FT 23(Raw Material Offloading)';
                        }else if(this.val_4[4]=='ft_24'){
                            this.ft_label_5 = 'FT 24(Raw Material To Settling Tank)';
                        }else if(this.val_4[4]=='ft_25'){
                            this.ft_label_5 = 'FT 25(Settling tank to d101)';
                        }else if(this.val_4[4]=='ft_26'){
                            this.ft_label_5 = 'FT 26(CT Outlet)';
                        }else if(this.val_4[4]=='ft_27'){
                            this.ft_label_5 = 'FT 27(CT Inlet)';
                        }else if(this.val_4[4]=='stfm2_flow_tot'){
                            this.ft_label_5 = 'Main Steam Flow_Tot';
                        }else if(this.val_4[4]=='stfm1_flow_tot'){
                            this.ft_label_5 = 'Steam To E401 Flow_Tot';
                        }
    if(this.val_4[5]=='ft_1'){
                            this.ft_label_6 = 'FT 1(D405 to Trans)';
                        }else if(this.val_4[5]=='ft_2'){
                            this.ft_label_6 = 'FT 2(ALKALI Trans)';
                        }else if(this.val_4[5]=='ft_3'){
                            this.ft_label_6 = 'FT 3(Trans Evaporator to NI)';
                        }else if(this.val_4[5]=='ft_4'){
                            this.ft_label_6 = 'FT 4(Water N1)';
                        }else if(this.val_4[5]=='ft_5'){
                            this.ft_label_6 = 'FT 5(Nozzle 2 to d402)';
                        }else if(this.val_4[5]=='ft_6'){
                            this.ft_label_6 = 'FT 6(Nozzle 3 to Slag pool)';
                        }else if(this.val_4[5]=='ft_7'){
                            this.ft_label_6 = 'FT 7(D602 to Methanol Storage tank)';
                        }else if(this.val_4[5]=='ft_8'){
                            this.ft_label_6 = 'FT 8(D402-D501)';
                        }else if(this.val_4[5]=='ft_9'){
                            this.ft_label_6 = 'FT 9(D501-T501)(D501-T501)';
                        }else if(this.val_4[5]=='ft_10'){
                            this.ft_label_6 = 'FT 10(T501-T502)';
                        }else if(this.val_4[5]=='ft_11'){
                            this.ft_label_6 = 'FT 11(Tar Transfer)';
                        }else if(this.val_4[5]=='ft_12'){
                            this.ft_label_6 = 'FT 12(Recycle to D405 LINE)';
                        }else if(this.val_4[5]=='ft_13'){
                            this.ft_label_6 = 'FT 13(Biodiesel to Storage)';
                        }else if(this.val_4[5]=='ft_14'){
                            this.ft_label_6 = 'FT 14(D403 into T601)';
                        }else if(this.val_4[5]=='ft_15'){
                            this.ft_label_6 = 'FT 15(T601 to D602)';
                        }else if(this.val_4[5]=='ft_16'){
                            this.ft_label_6 = 'FT 16(T601 to Reflux)';
                        }else if(this.val_4[5]=='ft_17'){
                            this.ft_label_6 = 'FT 17(T601 Drain)';
                        }else if(this.val_4[5]=='ft_18'){
                            this.ft_label_6 = 'FT 18(Methanol Into GST 1 and 2)';
                        }else if(this.val_4[5]=='ft_19'){
                            this.ft_label_6 = 'FT 19(Methanol into PPRA and B)';
                        }else if(this.val_4[5]=='ft_20'){
                            this.ft_label_6 = 'FT 20(Methanol into GLV)';
                        }else if(this.val_4[5]=='ft_21'){
                            this.ft_label_6 = 'FT 21(Methanol into Trans)';
                        }else if(this.val_4[5]=='ft_22'){
                            this.ft_label_6 = 'FT 22(Biodiesel Storage to Truck)';
                        }else if(this.val_4[5]=='ft_23'){
                            this.ft_label_6 = 'FT 23(Raw Material Offloading)';
                        }else if(this.val_4[5]=='ft_24'){
                            this.ft_label_6 = 'FT 24(Raw Material To Settling Tank)';
                        }else if(this.val_4[5]=='ft_25'){
                            this.ft_label_6 = 'FT 25(Settling tank to d101)';
                        }else if(this.val_4[5]=='ft_26'){
                            this.ft_label_6 = 'FT 26(CT Outlet)';
                        }else if(this.val_4[5]=='ft_27'){
                            this.ft_label_6 = 'FT 27(CT Inlet)';
                        }else if(this.val_4[5]=='stfm2_flow_tot'){
                            this.ft_label_6 = 'Main Steam Flow_Tot';
                        }else if(this.val_4[5]=='stfm1_flow_tot'){
                            this.ft_label_6 = 'Steam To E401 Flow_Tot';
                        }
    if(this.val_4[6]=='ft_1'){
                            this.ft_label_7 = 'FT 1(D405 to Trans)';
                        }else if(this.val_4[6]=='ft_2'){
                            this.ft_label_7 = 'FT 2(ALKALI Trans)';
                        }else if(this.val_4[6]=='ft_3'){
                            this.ft_label_7 = 'FT 3(Trans Evaporator to NI)';
                        }else if(this.val_4[6]=='ft_4'){
                            this.ft_label_7 = 'FT 4(Water N1)';
                        }else if(this.val_4[6]=='ft_5'){
                            this.ft_label_7 = 'FT 5(Nozzle 2 to d402)';
                        }else if(this.val_4[6]=='ft_6'){
                            this.ft_label_7 = 'FT 6(Nozzle 3 to Slag pool)';
                        }else if(this.val_4[6]=='ft_7'){
                            this.ft_label_7 = 'FT 7(D602 to Methanol Storage tank)';
                        }else if(this.val_4[6]=='ft_8'){
                            this.ft_label_7 = 'FT 8(D402-D501)';
                        }else if(this.val_4[6]=='ft_9'){
                            this.ft_label_7 = 'FT 9(D501-T501)(D501-T501)';
                        }else if(this.val_4[6]=='ft_10'){
                            this.ft_label_7 = 'FT 10(T501-T502)';
                        }else if(this.val_4[6]=='ft_11'){
                            this.ft_label_7 = 'FT 11(Tar Transfer)';
                        }else if(this.val_4[6]=='ft_12'){
                            this.ft_label_7 = 'FT 12(Recycle to D405 LINE)';
                        }else if(this.val_4[6]=='ft_13'){
                            this.ft_label_7 = 'FT 13(Biodiesel to Storage)';
                        }else if(this.val_4[6]=='ft_14'){
                            this.ft_label_7 = 'FT 14(D403 into T601)';
                        }else if(this.val_4[6]=='ft_15'){
                            this.ft_label_7 = 'FT 15(T601 to D602)';
                        }else if(this.val_4[6]=='ft_16'){
                            this.ft_label_7 = 'FT 16(T601 to Reflux)';
                        }else if(this.val_4[6]=='ft_17'){
                            this.ft_label_7 = 'FT 17(T601 Drain)';
                        }else if(this.val_4[6]=='ft_18'){
                            this.ft_label_7 = 'FT 18(Methanol Into GST 1 and 2)';
                        }else if(this.val_4[6]=='ft_19'){
                            this.ft_label_7 = 'FT 19(Methanol into PPRA and B)';
                        }else if(this.val_4[6]=='ft_20'){
                            this.ft_label_7 = 'FT 20(Methanol into GLV)';
                        }else if(this.val_4[6]=='ft_21'){
                            this.ft_label_7 = 'FT 21(Methanol into Trans)';
                        }else if(this.val_4[6]=='ft_22'){
                            this.ft_label_7 = 'FT 22(Biodiesel Storage to Truck)';
                        }else if(this.val_4[6]=='ft_23'){
                            this.ft_label_7 = 'FT 23(Raw Material Offloading)';
                        }else if(this.val_4[6]=='ft_24'){
                            this.ft_label_7 = 'FT 24(Raw Material To Settling Tank)';
                        }else if(this.val_4[6]=='ft_25'){
                            this.ft_label_7 = 'FT 25(Settling tank to d101)';
                        }else if(this.val_4[6]=='ft_26'){
                            this.ft_label_7 = 'FT 26(CT Outlet)';
                        }else if(this.val_4[6]=='ft_27'){
                            this.ft_label_7 = 'FT 27(CT Inlet)';
                        }else if(this.val_4[6]=='stfm2_flow_tot'){
                            this.ft_label_7 = 'Main Steam Flow_Tot';
                        }else if(this.val_4[6]=='stfm1_flow_tot'){
                            this.ft_label_7 = 'Steam To E401 Flow_Tot';
                        }
    if(this.val_4[7]=='ft_1'){
                            this.ft_label_8 = 'FT 1(D405 to Trans)';
                        }else if(this.val_4[7]=='ft_2'){
                            this.ft_label_8 = 'FT 2(ALKALI Trans)';
                        }else if(this.val_4[7]=='ft_3'){
                            this.ft_label_8 = 'FT 3(Trans Evaporator to NI)';
                        }else if(this.val_4[7]=='ft_4'){
                            this.ft_label_8 = 'FT 4(Water N1)';
                        }else if(this.val_4[7]=='ft_5'){
                            this.ft_label_8 = 'FT 5(Nozzle 2 to d402)';
                        }else if(this.val_4[7]=='ft_6'){
                            this.ft_label_8 = 'FT 6(Nozzle 3 to Slag pool)';
                        }else if(this.val_4[7]=='ft_7'){
                            this.ft_label_8 = 'FT 7(D602 to Methanol Storage tank)';
                        }else if(this.val_4[7]=='ft_8'){
                            this.ft_label_8 = 'FT 8(D402-D501)';
                        }else if(this.val_4[7]=='ft_9'){
                            this.ft_label_8 = 'FT 9(D501-T501)(D501-T501)';
                        }else if(this.val_4[7]=='ft_10'){
                            this.ft_label_8 = 'FT 10(T501-T502)';
                        }else if(this.val_4[7]=='ft_11'){
                            this.ft_label_8 = 'FT 11(Tar Transfer)';
                        }else if(this.val_4[7]=='ft_12'){
                            this.ft_label_8 = 'FT 12(Recycle to D405 LINE)';
                        }else if(this.val_4[7]=='ft_13'){
                            this.ft_label_8 = 'FT 13(Biodiesel to Storage)';
                        }else if(this.val_4[7]=='ft_14'){
                            this.ft_label_8 = 'FT 14(D403 into T601)';
                        }else if(this.val_4[7]=='ft_15'){
                            this.ft_label_8 = 'FT 15(T601 to D602)';
                        }else if(this.val_4[7]=='ft_16'){
                            this.ft_label_8 = 'FT 16(T601 to Reflux)';
                        }else if(this.val_4[7]=='ft_17'){
                            this.ft_label_8 = 'FT 17(T601 Drain)';
                        }else if(this.val_4[7]=='ft_18'){
                            this.ft_label_8 = 'FT 18(Methanol Into GST 1 and 2)';
                        }else if(this.val_4[7]=='ft_19'){
                            this.ft_label_8 = 'FT 19(Methanol into PPRA and B)';
                        }else if(this.val_4[7]=='ft_20'){
                            this.ft_label_8 = 'FT 20(Methanol into GLV)';
                        }else if(this.val_4[7]=='ft_21'){
                            this.ft_label_8 = 'FT 21(Methanol into Trans)';
                        }else if(this.val_4[7]=='ft_22'){
                            this.ft_label_8 = 'FT 22(Biodiesel Storage to Truck)';
                        }else if(this.val_4[7]=='ft_23'){
                            this.ft_label_8 = 'FT 23(Raw Material Offloading)';
                        }else if(this.val_4[7]=='ft_24'){
                            this.ft_label_8 = 'FT 24(Raw Material To Settling Tank)';
                        }else if(this.val_4[7]=='ft_25'){
                            this.ft_label_8 = 'FT 25(Settling tank to d101)';
                        }else if(this.val_4[7]=='ft_26'){
                            this.ft_label_8 = 'FT 26(CT Outlet)';
                        }else if(this.val_4[7]=='ft_27'){
                            this.ft_label_8 = 'FT 27(CT Inlet)';
                        }else if(this.val_4[7]=='stfm2_flow_tot'){
                            this.ft_label_8 = 'Main Steam Flow_Tot';
                        }else if(this.val_4[7]=='stfm1_flow_tot'){
                            this.ft_label_8 = 'Steam To E401 Flow_Tot';
                        }
    if(this.val_4[8]=='ft_1'){
                            this.ft_label_9 = 'FT 1(D405 to Trans)';
                        }else if(this.val_4[8]=='ft_2'){
                            this.ft_label_9 = 'FT 2(ALKALI Trans)';
                        }else if(this.val_4[8]=='ft_3'){
                            this.ft_label_9 = 'FT 3(Trans Evaporator to NI)';
                        }else if(this.val_4[8]=='ft_4'){
                            this.ft_label_9 = 'FT 4(Water N1)';
                        }else if(this.val_4[8]=='ft_5'){
                            this.ft_label_9 = 'FT 5(Nozzle 2 to d402)';
                        }else if(this.val_4[8]=='ft_6'){
                            this.ft_label_9 = 'FT 6(Nozzle 3 to Slag pool)';
                        }else if(this.val_4[8]=='ft_7'){
                            this.ft_label_9 = 'FT 7(D602 to Methanol Storage tank)';
                        }else if(this.val_4[8]=='ft_8'){
                            this.ft_label_9 = 'FT 8(D402-D501)';
                        }else if(this.val_4[8]=='ft_9'){
                            this.ft_label_9 = 'FT 9(D501-T501)(D501-T501)';
                        }else if(this.val_4[8]=='ft_10'){
                            this.ft_label_9 = 'FT 10(T501-T502)';
                        }else if(this.val_4[8]=='ft_11'){
                            this.ft_label_9 = 'FT 11(Tar Transfer)';
                        }else if(this.val_4[8]=='ft_12'){
                            this.ft_label_9 = 'FT 12(Recycle to D405 LINE)';
                        }else if(this.val_4[8]=='ft_13'){
                            this.ft_label_9 = 'FT 13(Biodiesel to Storage)';
                        }else if(this.val_4[8]=='ft_14'){
                            this.ft_label_9 = 'FT 14(D403 into T601)';
                        }else if(this.val_4[8]=='ft_15'){
                            this.ft_label_9 = 'FT 15(T601 to D602)';
                        }else if(this.val_4[8]=='ft_16'){
                            this.ft_label_9 = 'FT 16(T601 to Reflux)';
                        }else if(this.val_4[8]=='ft_17'){
                            this.ft_label_9 = 'FT 17(T601 Drain)';
                        }else if(this.val_4[8]=='ft_18'){
                            this.ft_label_9 = 'FT 18(Methanol Into GST 1 and 2)';
                        }else if(this.val_4[8]=='ft_19'){
                            this.ft_label_9 = 'FT 19(Methanol into PPRA and B)';
                        }else if(this.val_4[8]=='ft_20'){
                            this.ft_label_9 = 'FT 20(Methanol into GLV)';
                        }else if(this.val_4[8]=='ft_21'){
                            this.ft_label_9 = 'FT 21(Methanol into Trans)';
                        }else if(this.val_4[8]=='ft_22'){
                            this.ft_label_9 = 'FT 22(Biodiesel Storage to Truck)';
                        }else if(this.val_4[8]=='ft_23'){
                            this.ft_label_9 = 'FT 23(Raw Material Offloading)';
                        }else if(this.val_4[8]=='ft_24'){
                            this.ft_label_9 = 'FT 24(Raw Material To Settling Tank)';
                        }else if(this.val_4[8]=='ft_25'){
                            this.ft_label_9 = 'FT 25(Settling tank to d101)';
                        }else if(this.val_4[8]=='ft_26'){
                            this.ft_label_9 = 'FT 26(CT Outlet)';
                        }else if(this.val_4[8]=='ft_27'){
                            this.ft_label_9 = 'FT 27(CT Inlet)';
                        }else if(this.val_4[8]=='stfm2_flow_tot'){
                            this.ft_label_9 = 'Main Steam Flow_Tot';
                        }else if(this.val_4[8]=='stfm1_flow_tot'){
                            this.ft_label_9 = 'Steam To E401 Flow_Tot';
                        }
    if(this.val_4[9]=='ft_1'){
                            this.ft_label_10 = 'FT 1(D405 to Trans)';
                        }else if(this.val_4[9]=='ft_2'){
                            this.ft_label_10 = 'FT 2(ALKALI Trans)';
                        }else if(this.val_4[9]=='ft_3'){
                            this.ft_label_10 = 'FT 3(Trans Evaporator to NI)';
                        }else if(this.val_4[9]=='ft_4'){
                            this.ft_label_10 = 'FT 4(Water N1)';
                        }else if(this.val_4[9]=='ft_5'){
                            this.ft_label_10 = 'FT 5(Nozzle 2 to d402)';
                        }else if(this.val_4[9]=='ft_6'){
                            this.ft_label_10 = 'FT 6(Nozzle 3 to Slag pool)';
                        }else if(this.val_4[9]=='ft_7'){
                            this.ft_label_10 = 'FT 7(D602 to Methanol Storage tank)';
                        }else if(this.val_4[9]=='ft_8'){
                            this.ft_label_10 = 'FT 8(D402-D501)';
                        }else if(this.val_4[9]=='ft_9'){
                            this.ft_label_10 = 'FT 9(D501-T501)(D501-T501)';
                        }else if(this.val_4[9]=='ft_10'){
                            this.ft_label_10 = 'FT 10(T501-T502)';
                        }else if(this.val_4[9]=='ft_11'){
                            this.ft_label_10 = 'FT 11(Tar Transfer)';
                        }else if(this.val_4[9]=='ft_12'){
                            this.ft_label_10 = 'FT 12(Recycle to D405 LINE)';
                        }else if(this.val_4[9]=='ft_13'){
                            this.ft_label_10 = 'FT 13(Biodiesel to Storage)';
                        }else if(this.val_4[9]=='ft_14'){
                            this.ft_label_10 = 'FT 14(D403 into T601)';
                        }else if(this.val_4[9]=='ft_15'){
                            this.ft_label_10 = 'FT 15(T601 to D602)';
                        }else if(this.val_4[9]=='ft_16'){
                            this.ft_label_10 = 'FT 16(T601 to Reflux)';
                        }else if(this.val_4[9]=='ft_17'){
                            this.ft_label_10 = 'FT 17(T601 Drain)';
                        }else if(this.val_4[9]=='ft_18'){
                            this.ft_label_10 = 'FT 18(Methanol Into GST 1 and 2)';
                        }else if(this.val_4[9]=='ft_19'){
                            this.ft_label_10 = 'FT 19(Methanol into PPRA and B)';
                        }else if(this.val_4[9]=='ft_20'){
                            this.ft_label_10 = 'FT 20(Methanol into GLV)';
                        }else if(this.val_4[9]=='ft_21'){
                            this.ft_label_10 = 'FT 21(Methanol into Trans)';
                        }else if(this.val_4[9]=='ft_22'){
                            this.ft_label_10 = 'FT 22(Biodiesel Storage to Truck)';
                        }else if(this.val_4[9]=='ft_23'){
                            this.ft_label_10 = 'FT 23(Raw Material Offloading)';
                        }else if(this.val_4[9]=='ft_24'){
                            this.ft_label_10 = 'FT 24(Raw Material To Settling Tank)';
                        }else if(this.val_4[9]=='ft_25'){
                            this.ft_label_10 = 'FT 25(Settling tank to d101)';
                        }else if(this.val_4[9]=='ft_26'){
                            this.ft_label_10 = 'FT 26(CT Outlet)';
                        }else if(this.val_4[9]=='ft_27'){
                            this.ft_label_10 = 'FT 27(CT Inlet)';
                        }else if(this.val_4[9]=='stfm2_flow_tot'){
                            this.ft_label_10 = 'Main Steam Flow_Tot';
                        }else if(this.val_4[9]=='stfm1_flow_tot'){
                            this.ft_label_10 = 'Steam To E401 Flow_Tot';
                        }
    if(this.val_4[10]=='ft_1'){
                            this.ft_label_11 = 'FT 1(D405 to Trans)';
                        }else if(this.val_4[10]=='ft_2'){
                            this.ft_label_11 = 'FT 2(ALKALI Trans)';
                        }else if(this.val_4[10]=='ft_3'){
                            this.ft_label_11 = 'FT 3(Trans Evaporator to NI)';
                        }else if(this.val_4[10]=='ft_4'){
                            this.ft_label_11 = 'FT 4(Water N1)';
                        }else if(this.val_4[10]=='ft_5'){
                            this.ft_label_11 = 'FT 5(Nozzle 2 to d402)';
                        }else if(this.val_4[10]=='ft_6'){
                            this.ft_label_11 = 'FT 6(Nozzle 3 to Slag pool)';
                        }else if(this.val_4[10]=='ft_7'){
                            this.ft_label_11 = 'FT 7(D602 to Methanol Storage tank)';
                        }else if(this.val_4[10]=='ft_8'){
                            this.ft_label_11 = 'FT 8(D402-D501)';
                        }else if(this.val_4[10]=='ft_9'){
                            this.ft_label_11 = 'FT 9(D501-T501)(D501-T501)';
                        }else if(this.val_4[10]=='ft_10'){
                            this.ft_label_11 = 'FT 10(T501-T502)';
                        }else if(this.val_4[10]=='ft_11'){
                            this.ft_label_11 = 'FT 11(Tar Transfer)';
                        }else if(this.val_4[10]=='ft_12'){
                            this.ft_label_11 = 'FT 12(Recycle to D405 LINE)';
                        }else if(this.val_4[10]=='ft_13'){
                            this.ft_label_11 = 'FT 13(Biodiesel to Storage)';
                        }else if(this.val_4[10]=='ft_14'){
                            this.ft_label_11 = 'FT 14(D403 into T601)';
                        }else if(this.val_4[10]=='ft_15'){
                            this.ft_label_11 = 'FT 15(T601 to D602)';
                        }else if(this.val_4[10]=='ft_16'){
                            this.ft_label_11 = 'FT 16(T601 to Reflux)';
                        }else if(this.val_4[10]=='ft_17'){
                            this.ft_label_11 = 'FT 17(T601 Drain)';
                        }else if(this.val_4[10]=='ft_18'){
                            this.ft_label_11 = 'FT 18(Methanol Into GST 1 and 2)';
                        }else if(this.val_4[10]=='ft_19'){
                            this.ft_label_11 = 'FT 19(Methanol into PPRA and B)';
                        }else if(this.val_4[10]=='ft_20'){
                            this.ft_label_11 = 'FT 20(Methanol into GLV)';
                        }else if(this.val_4[10]=='ft_21'){
                            this.ft_label_11 = 'FT 21(Methanol into Trans)';
                        }else if(this.val_4[10]=='ft_22'){
                            this.ft_label_11 = 'FT 22(Biodiesel Storage to Truck)';
                        }else if(this.val_4[10]=='ft_23'){
                            this.ft_label_11 = 'FT 23(Raw Material Offloading)';
                        }else if(this.val_4[10]=='ft_24'){
                            this.ft_label_11 = 'FT 24(Raw Material To Settling Tank)';
                        }else if(this.val_4[10]=='ft_25'){
                            this.ft_label_11 = 'FT 25(Settling tank to d101)';
                        }else if(this.val_4[10]=='ft_26'){
                            this.ft_label_11 = 'FT 26(CT Outlet)';
                        }else if(this.val_4[10]=='ft_27'){
                            this.ft_label_11 = 'FT 27(CT Inlet)';
                        }else if(this.val_4[10]=='stfm2_flow_tot'){
                            this.ft_label_11 = 'Main Steam Flow_Tot';
                        }else if(this.val_4[10]=='stfm1_flow_tot'){
                            this.ft_label_11 = 'Steam To E401 Flow_Tot';
                        }
    if(this.val_4[11]=='ft_1'){
                            this.ft_label_12 = 'FT 1(D405 to Trans)';
                        }else if(this.val_4[11]=='ft_2'){
                            this.ft_label_12 = 'FT 2(ALKALI Trans)';
                        }else if(this.val_4[11]=='ft_3'){
                            this.ft_label_12 = 'FT 3(Trans Evaporator to NI)';
                        }else if(this.val_4[11]=='ft_4'){
                            this.ft_label_12 = 'FT 4(Water N1)';
                        }else if(this.val_4[11]=='ft_5'){
                            this.ft_label_12 = 'FT 5(Nozzle 2 to d402)';
                        }else if(this.val_4[11]=='ft_6'){
                            this.ft_label_12 = 'FT 6(Nozzle 3 to Slag pool)';
                        }else if(this.val_4[11]=='ft_7'){
                            this.ft_label_12 = 'FT 7(D602 to Methanol Storage tank)';
                        }else if(this.val_4[11]=='ft_8'){
                            this.ft_label_12 = 'FT 8(D402-D501)';
                        }else if(this.val_4[11]=='ft_9'){
                            this.ft_label_12 = 'FT 9(D501-T501)(D501-T501)';
                        }else if(this.val_4[11]=='ft_10'){
                            this.ft_label_12 = 'FT 10(T501-T502)';
                        }else if(this.val_4[11]=='ft_11'){
                            this.ft_label_12 = 'FT 11(Tar Transfer)';
                        }else if(this.val_4[11]=='ft_12'){
                            this.ft_label_12 = 'FT 12(Recycle to D405 LINE)';
                        }else if(this.val_4[11]=='ft_13'){
                            this.ft_label_12 = 'FT 13(Biodiesel to Storage)';
                        }else if(this.val_4[11]=='ft_14'){
                            this.ft_label_12 = 'FT 14(D403 into T601)';
                        }else if(this.val_4[11]=='ft_15'){
                            this.ft_label_12 = 'FT 15(T601 to D602)';
                        }else if(this.val_4[11]=='ft_16'){
                            this.ft_label_12 = 'FT 16(T601 to Reflux)';
                        }else if(this.val_4[11]=='ft_17'){
                            this.ft_label_12 = 'FT 17(T601 Drain)';
                        }else if(this.val_4[11]=='ft_18'){
                            this.ft_label_12 = 'FT 18(Methanol Into GST 1 and 2)';
                        }else if(this.val_4[11]=='ft_19'){
                            this.ft_label_12 = 'FT 19(Methanol into PPRA and B)';
                        }else if(this.val_4[11]=='ft_20'){
                            this.ft_label_12 = 'FT 20(Methanol into GLV)';
                        }else if(this.val_4[11]=='ft_21'){
                            this.ft_label_12 = 'FT 21(Methanol into Trans)';
                        }else if(this.val_4[11]=='ft_22'){
                            this.ft_label_12 = 'FT 22(Biodiesel Storage to Truck)';
                        }else if(this.val_4[11]=='ft_23'){
                            this.ft_label_12 = 'FT 23(Raw Material Offloading)';
                        }else if(this.val_4[11]=='ft_24'){
                            this.ft_label_12 = 'FT 24(Raw Material To Settling Tank)';
                        }else if(this.val_4[11]=='ft_25'){
                            this.ft_label_12 = 'FT 25(Settling tank to d101)';
                        }else if(this.val_4[11]=='ft_26'){
                            this.ft_label_12 = 'FT 26(CT Outlet)';
                        }else if(this.val_4[11]=='ft_27'){
                            this.ft_label_12 = 'FT 27(CT Inlet)';
                        }else if(this.val_4[11]=='stfm2_flow_tot'){
                            this.ft_label_12 = 'Main Steam Flow_Tot';
                        }else if(this.val_4[11]=='stfm1_flow_tot'){
                            this.ft_label_12 = 'Steam To E401 Flow_Tot';
                        }
    if(this.val_4[12]=='ft_1'){
                            this.ft_label_13 = 'FT 1(D405 to Trans)';
                        }else if(this.val_4[12]=='ft_2'){
                            this.ft_label_13 = 'FT 2(ALKALI Trans)';
                        }else if(this.val_4[12]=='ft_3'){
                            this.ft_label_13 = 'FT 3(Trans Evaporator to NI)';
                        }else if(this.val_4[12]=='ft_4'){
                            this.ft_label_13 = 'FT 4(Water N1)';
                        }else if(this.val_4[12]=='ft_5'){
                            this.ft_label_13 = 'FT 5(Nozzle 2 to d402)';
                        }else if(this.val_4[12]=='ft_6'){
                            this.ft_label_13 = 'FT 6(Nozzle 3 to Slag pool)';
                        }else if(this.val_4[12]=='ft_7'){
                            this.ft_label_13 = 'FT 7(D602 to Methanol Storage tank)';
                        }else if(this.val_4[12]=='ft_8'){
                            this.ft_label_13 = 'FT 8(D402-D501)';
                        }else if(this.val_4[12]=='ft_9'){
                            this.ft_label_13 = 'FT 9(D501-T501)(D501-T501)';
                        }else if(this.val_4[12]=='ft_10'){
                            this.ft_label_13 = 'FT 10(T501-T502)';
                        }else if(this.val_4[12]=='ft_11'){
                            this.ft_label_13 = 'FT 11(Tar Transfer)';
                        }else if(this.val_4[12]=='ft_12'){
                            this.ft_label_13 = 'FT 12(Recycle to D405 LINE)';
                        }else if(this.val_4[12]=='ft_13'){
                            this.ft_label_13 = 'FT 13(Biodiesel to Storage)';
                        }else if(this.val_4[12]=='ft_14'){
                            this.ft_label_13 = 'FT 14(D403 into T601)';
                        }else if(this.val_4[12]=='ft_15'){
                            this.ft_label_13 = 'FT 15(T601 to D602)';
                        }else if(this.val_4[12]=='ft_16'){
                            this.ft_label_13 = 'FT 16(T601 to Reflux)';
                        }else if(this.val_4[12]=='ft_17'){
                            this.ft_label_13 = 'FT 17(T601 Drain)';
                        }else if(this.val_4[12]=='ft_18'){
                            this.ft_label_13 = 'FT 18(Methanol Into GST 1 and 2)';
                        }else if(this.val_4[12]=='ft_19'){
                            this.ft_label_13 = 'FT 19(Methanol into PPRA and B)';
                        }else if(this.val_4[12]=='ft_20'){
                            this.ft_label_13 = 'FT 20(Methanol into GLV)';
                        }else if(this.val_4[12]=='ft_21'){
                            this.ft_label_13 = 'FT 21(Methanol into Trans)';
                        }else if(this.val_4[12]=='ft_22'){
                            this.ft_label_13 = 'FT 22(Biodiesel Storage to Truck)';
                        }else if(this.val_4[12]=='ft_23'){
                            this.ft_label_13 = 'FT 23(Raw Material Offloading)';
                        }else if(this.val_4[12]=='ft_24'){
                            this.ft_label_13 = 'FT 24(Raw Material To Settling Tank)';
                        }else if(this.val_4[12]=='ft_25'){
                            this.ft_label_13 = 'FT 25(Settling tank to d101)';
                        }else if(this.val_4[12]=='ft_26'){
                            this.ft_label_13 = 'FT 26(CT Outlet)';
                        }else if(this.val_4[12]=='ft_27'){
                            this.ft_label_13 = 'FT 27(CT Inlet)';
                        }else if(this.val_4[12]=='stfm2_flow_tot'){
                            this.ft_label_13 = 'Main Steam Flow_Tot';
                        }else if(this.val_4[12]=='stfm1_flow_tot'){
                            this.ft_label_13 = 'Steam To E401 Flow_Tot';
                        }
    if(this.val_4[13]=='ft_1'){
                            this.ft_label_14 = 'FT 1(D405 to Trans)';
                        }else if(this.val_4[13]=='ft_2'){
                            this.ft_label_14 = 'FT 2(ALKALI Trans)';
                        }else if(this.val_4[13]=='ft_3'){
                            this.ft_label_14 = 'FT 3(Trans Evaporator to NI)';
                        }else if(this.val_4[13]=='ft_4'){
                            this.ft_label_14 = 'FT 4(Water N1)';
                        }else if(this.val_4[13]=='ft_5'){
                            this.ft_label_14 = 'FT 5(Nozzle 2 to d402)';
                        }else if(this.val_4[13]=='ft_6'){
                            this.ft_label_14 = 'FT 6(Nozzle 3 to Slag pool)';
                        }else if(this.val_4[13]=='ft_7'){
                            this.ft_label_14 = 'FT 7(D602 to Methanol Storage tank)';
                        }else if(this.val_4[13]=='ft_8'){
                            this.ft_label_14 = 'FT 8(D402-D501)';
                        }else if(this.val_4[13]=='ft_9'){
                            this.ft_label_14 = 'FT 9(D501-T501)(D501-T501)';
                        }else if(this.val_4[13]=='ft_10'){
                            this.ft_label_14 = 'FT 10(T501-T502)';
                        }else if(this.val_4[13]=='ft_11'){
                            this.ft_label_14 = 'FT 11(Tar Transfer)';
                        }else if(this.val_4[13]=='ft_12'){
                            this.ft_label_14 = 'FT 12(Recycle to D405 LINE)';
                        }else if(this.val_4[13]=='ft_13'){
                            this.ft_label_14 = 'FT 13(Biodiesel to Storage)';
                        }else if(this.val_4[13]=='ft_14'){
                            this.ft_label_14 = 'FT 14(D403 into T601)';
                        }else if(this.val_4[13]=='ft_15'){
                            this.ft_label_14 = 'FT 15(T601 to D602)';
                        }else if(this.val_4[13]=='ft_16'){
                            this.ft_label_14 = 'FT 16(T601 to Reflux)';
                        }else if(this.val_4[13]=='ft_17'){
                            this.ft_label_14 = 'FT 17(T601 Drain)';
                        }else if(this.val_4[13]=='ft_18'){
                            this.ft_label_14 = 'FT 18(Methanol Into GST 1 and 2)';
                        }else if(this.val_4[13]=='ft_19'){
                            this.ft_label_14 = 'FT 19(Methanol into PPRA and B)';
                        }else if(this.val_4[13]=='ft_20'){
                            this.ft_label_14 = 'FT 20(Methanol into GLV)';
                        }else if(this.val_4[13]=='ft_21'){
                            this.ft_label_14 = 'FT 21(Methanol into Trans)';
                        }else if(this.val_4[13]=='ft_22'){
                            this.ft_label_14 = 'FT 22(Biodiesel Storage to Truck)';
                        }else if(this.val_4[13]=='ft_23'){
                            this.ft_label_14 = 'FT 23(Raw Material Offloading)';
                        }else if(this.val_4[13]=='ft_24'){
                            this.ft_label_14 = 'FT 24(Raw Material To Settling Tank)';
                        }else if(this.val_4[13]=='ft_25'){
                            this.ft_label_14 = 'FT 25(Settling tank to d101)';
                        }else if(this.val_4[13]=='ft_26'){
                            this.ft_label_14 = 'FT 26(CT Outlet)';
                        }else if(this.val_4[13]=='ft_27'){
                            this.ft_label_14 = 'FT 27(CT Inlet)';
                        }else if(this.val_4[13]=='stfm2_flow_tot'){
                            this.ft_label_14 = 'Main Steam Flow_Tot';
                        }else if(this.val_4[13]=='stfm1_flow_tot'){
                            this.ft_label_14 = 'Steam To E401 Flow_Tot';
                        }
    if(this.val_4[14]=='ft_1'){
                            this.ft_label_15 = 'FT 1(D405 to Trans)';
                        }else if(this.val_4[14]=='ft_2'){
                            this.ft_label_15 = 'FT 2(ALKALI Trans)';
                        }else if(this.val_4[14]=='ft_3'){
                            this.ft_label_15 = 'FT 3(Trans Evaporator to NI)';
                        }else if(this.val_4[14]=='ft_4'){
                            this.ft_label_15 = 'FT 4(Water N1)';
                        }else if(this.val_4[14]=='ft_5'){
                            this.ft_label_15 = 'FT 5(Nozzle 2 to d402)';
                        }else if(this.val_4[14]=='ft_6'){
                            this.ft_label_15 = 'FT 6(Nozzle 3 to Slag pool)';
                        }else if(this.val_4[14]=='ft_7'){
                            this.ft_label_15 = 'FT 7(D602 to Methanol Storage tank)';
                        }else if(this.val_4[14]=='ft_8'){
                            this.ft_label_15 = 'FT 8(D402-D501)';
                        }else if(this.val_4[14]=='ft_9'){
                            this.ft_label_15 = 'FT 9(D501-T501)(D501-T501)';
                        }else if(this.val_4[14]=='ft_10'){
                            this.ft_label_15 = 'FT 10(T501-T502)';
                        }else if(this.val_4[14]=='ft_11'){
                            this.ft_label_15 = 'FT 11(Tar Transfer)';
                        }else if(this.val_4[14]=='ft_12'){
                            this.ft_label_15 = 'FT 12(Recycle to D405 LINE)';
                        }else if(this.val_4[14]=='ft_13'){
                            this.ft_label_15 = 'FT 13(Biodiesel to Storage)';
                        }else if(this.val_4[14]=='ft_14'){
                            this.ft_label_15 = 'FT 14(D403 into T601)';
                        }else if(this.val_4[14]=='ft_15'){
                            this.ft_label_15 = 'FT 15(T601 to D602)';
                        }else if(this.val_4[14]=='ft_16'){
                            this.ft_label_15 = 'FT 16(T601 to Reflux)';
                        }else if(this.val_4[14]=='ft_17'){
                            this.ft_label_15 = 'FT 17(T601 Drain)';
                        }else if(this.val_4[14]=='ft_18'){
                            this.ft_label_15 = 'FT 18(Methanol Into GST 1 and 2)';
                        }else if(this.val_4[14]=='ft_19'){
                            this.ft_label_15 = 'FT 19(Methanol into PPRA and B)';
                        }else if(this.val_4[14]=='ft_20'){
                            this.ft_label_15 = 'FT 20(Methanol into GLV)';
                        }else if(this.val_4[14]=='ft_21'){
                            this.ft_label_15 = 'FT 21(Methanol into Trans)';
                        }else if(this.val_4[14]=='ft_22'){
                            this.ft_label_15 = 'FT 22(Biodiesel Storage to Truck)';
                        }else if(this.val_4[14]=='ft_23'){
                            this.ft_label_15 = 'FT 23(Raw Material Offloading)';
                        }else if(this.val_4[14]=='ft_24'){
                            this.ft_label_15 = 'FT 24(Raw Material To Settling Tank)';
                        }else if(this.val_4[14]=='ft_25'){
                            this.ft_label_15 = 'FT 25(Settling tank to d101)';
                        }else if(this.val_4[14]=='ft_26'){
                            this.ft_label_15 = 'FT 26(CT Outlet)';
                        }else if(this.val_4[14]=='ft_27'){
                            this.ft_label_15 = 'FT 27(CT Inlet)';
                        }else if(this.val_4[14]=='stfm2_flow_tot'){
                            this.ft_label_15 = 'Main Steam Flow_Tot';
                        }else if(this.val_4[14]=='stfm1_flow_tot'){
                            this.ft_label_15 = 'Steam To E401 Flow_Tot';
                        }
    if(this.val_4[15]=='ft_1'){
                            this.ft_label_16 = 'FT 1(D405 to Trans)';
                        }else if(this.val_4[15]=='ft_2'){
                            this.ft_label_16 = 'FT 2(ALKALI Trans)';
                        }else if(this.val_4[15]=='ft_3'){
                            this.ft_label_16 = 'FT 3(Trans Evaporator to NI)';
                        }else if(this.val_4[15]=='ft_4'){
                            this.ft_label_16 = 'FT 4(Water N1)';
                        }else if(this.val_4[15]=='ft_5'){
                            this.ft_label_16 = 'FT 5(Nozzle 2 to d402)';
                        }else if(this.val_4[15]=='ft_6'){
                            this.ft_label_16 = 'FT 6(Nozzle 3 to Slag pool)';
                        }else if(this.val_4[15]=='ft_7'){
                            this.ft_label_16 = 'FT 7(D602 to Methanol Storage tank)';
                        }else if(this.val_4[15]=='ft_8'){
                            this.ft_label_16 = 'FT 8(D402-D501)';
                        }else if(this.val_4[15]=='ft_9'){
                            this.ft_label_16 = 'FT 9(D501-T501)(D501-T501)';
                        }else if(this.val_4[15]=='ft_10'){
                            this.ft_label_16 = 'FT 10(T501-T502)';
                        }else if(this.val_4[15]=='ft_11'){
                            this.ft_label_16 = 'FT 11(Tar Transfer)';
                        }else if(this.val_4[15]=='ft_12'){
                            this.ft_label_16 = 'FT 12(Recycle to D405 LINE)';
                        }else if(this.val_4[15]=='ft_13'){
                            this.ft_label_16 = 'FT 13(Biodiesel to Storage)';
                        }else if(this.val_4[15]=='ft_14'){
                            this.ft_label_16 = 'FT 14(D403 into T601)';
                        }else if(this.val_4[15]=='ft_15'){
                            this.ft_label_16 = 'FT 15(T601 to D602)';
                        }else if(this.val_4[15]=='ft_16'){
                            this.ft_label_16 = 'FT 16(T601 to Reflux)';
                        }else if(this.val_4[15]=='ft_17'){
                            this.ft_label_16 = 'FT 17(T601 Drain)';
                        }else if(this.val_4[15]=='ft_18'){
                            this.ft_label_16 = 'FT 18(Methanol Into GST 1 and 2)';
                        }else if(this.val_4[15]=='ft_19'){
                            this.ft_label_16 = 'FT 19(Methanol into PPRA and B)';
                        }else if(this.val_4[15]=='ft_20'){
                            this.ft_label_16 = 'FT 20(Methanol into GLV)';
                        }else if(this.val_4[15]=='ft_21'){
                            this.ft_label_16 = 'FT 21(Methanol into Trans)';
                        }else if(this.val_4[15]=='ft_22'){
                            this.ft_label_16 = 'FT 22(Biodiesel Storage to Truck)';
                        }else if(this.val_4[15]=='ft_23'){
                            this.ft_label_16 = 'FT 23(Raw Material Offloading)';
                        }else if(this.val_4[15]=='ft_24'){
                            this.ft_label_16 = 'FT 24(Raw Material To Settling Tank)';
                        }else if(this.val_4[15]=='ft_25'){
                            this.ft_label_16 = 'FT 25(Settling tank to d101)';
                        }else if(this.val_4[15]=='ft_26'){
                            this.ft_label_16 = 'FT 26(CT Outlet)';
                        }else if(this.val_4[15]=='ft_27'){
                            this.ft_label_16 = 'FT 27(CT Inlet)';
                        }else if(this.val_4[15]=='stfm2_flow_tot'){
                            this.ft_label_16 = 'Main Steam Flow_Tot';
                        }else if(this.val_4[15]=='stfm1_flow_tot'){
                            this.ft_label_16 = 'Steam To E401 Flow_Tot';
                        }
                    } 
                    if(this.val_5.length >= 0){
                        if(this.val_5[0]=='rdl25_mass'){
                            this.mass_label = 'RDL 25 Mass';
                        }
                    }
                    if(this.val_6.length >= 0){
                        if(this.val_6[0]=='pt_1'){
                            this.pt_label_1 = 'GLV';
                        }else if(this.val_6[0]=='pt_2'){
                            this.pt_label_1 = 'GLV Condenser';
                        }else if(this.val_6[0]=='pt_3'){
                            this.pt_label_1 = 'Trans Reactor';
                        }else if(this.val_6[0]=='pt_4'){
                            this.pt_label_1 = 'T601';
                        }else if(this.val_6[0]=='pt_5'){
                            this.pt_label_1 = 'Distillation Header';
                        }else if(this.val_6[0]=='stfm2_pressure'){
                            this.pt_label_1 = 'Main Steam Flow_Pre';
                        }else if(this.val_6[0]=='stfm1_pressure'){
                            this.pt_label_1 = 'Steam To E401 Flow_Pre';
                        }

                        if(this.val_6[1]=='pt_1'){
                            this.pt_label_2 = 'GLV';
                        }else if(this.val_6[1]=='pt_2'){
                            this.pt_label_2 = 'GLV Condenser';
                        }else if(this.val_6[1]=='pt_3'){
                            this.pt_label_2 = 'Trans Reactor';
                        }else if(this.val_6[1]=='pt_4'){
                            this.pt_label_2 = 'T601';
                        }else if(this.val_6[1]=='pt_5'){
                            this.pt_label_2 = 'Distillation Header';
                        }else if(this.val_6[1]=='stfm2_pressure'){
                            this.pt_label_2 = 'Main Steam Flow_Pre';
                        }else if(this.val_6[1]=='stfm1_pressure'){
                            this.pt_label_2 = 'Steam To E401 Flow_Pre';
                        }

                        if(this.val_6[2]=='pt_1'){
                            this.pt_label_3 = 'GLV';
                        }else if(this.val_6[2]=='pt_2'){
                            this.pt_label_3 = 'GLV Condenser';
                        }else if(this.val_6[2]=='pt_3'){
                            this.pt_label_3 = 'Trans Reactor';
                        }else if(this.val_6[2]=='pt_4'){
                            this.pt_label_3 = 'T601';
                        }else if(this.val_6[2]=='pt_5'){
                            this.pt_label_3 = 'Distillation Header';
                        }else if(this.val_6[2]=='stfm2_pressure'){
                            this.pt_label_3 = 'Main Steam Flow_Pre';
                        }else if(this.val_6[2]=='stfm1_pressure'){
                            this.pt_label_3 = 'Steam To E401 Flow_Pre';
                        }

                        if(this.val_6[3]=='pt_1'){
                            this.pt_label_4 = 'GLV';
                        }else if(this.val_6[3]=='pt_2'){
                            this.pt_label_4 = 'GLV Condenser';
                        }else if(this.val_6[3]=='pt_3'){
                            this.pt_label_4 = 'Trans Reactor';
                        }else if(this.val_6[3]=='pt_4'){
                            this.pt_label_4 = 'T601';
                        }else if(this.val_6[3]=='pt_5'){
                            this.pt_label_4 = 'Distillation Header';
                        }else if(this.val_6[3]=='stfm2_pressure'){
                            this.pt_label_4 = 'Main Steam Flow_Pre';
                        }else if(this.val_6[3]=='stfm1_pressure'){
                            this.pt_label_4 = 'Steam To E401 Flow_Pre';
                        }

                        if(this.val_6[4]=='pt_1'){
                            this.pt_label_5 = 'GLV';
                        }else if(this.val_6[4]=='pt_2'){
                            this.pt_label_5 = 'GLV Condenser';
                        }else if(this.val_6[4]=='pt_3'){
                            this.pt_label_5 = 'Trans Reactor';
                        }else if(this.val_6[4]=='pt_4'){
                            this.pt_label_5 = 'T601';
                        }else if(this.val_6[4]=='pt_5'){
                            this.pt_label_5 = 'Distillation Header';
                        }else if(this.val_6[4]=='stfm2_pressure'){
                            this.pt_label_5 = 'Main Steam Flow_Pre';
                        }else if(this.val_6[4]=='stfm1_pressure'){
                            this.pt_label_5 = 'Steam To E401 Flow_Pre';
                        }

                         if(this.val_6[5]=='pt_1'){
                            this.pt_label_6 = 'GLV';
                        }else if(this.val_6[5]=='pt_2'){
                            this.pt_label_6 = 'GLV Condenser';
                        }else if(this.val_6[5]=='pt_3'){
                            this.pt_label_6 = 'Trans Reactor';
                        }else if(this.val_6[5]=='pt_4'){
                            this.pt_label_6 = 'T601';
                        }else if(this.val_6[5]=='pt_5'){
                            this.pt_label_6 = 'Distillation Header';
                        }else if(this.val_6[5]=='stfm2_pressure'){
                            this.pt_label_6 = 'Main Steam Flow_Pre';
                        }else if(this.val_6[5]=='stfm1_pressure'){
                            this.pt_label_6 = 'Steam To E401 Flow_Pre';
                        }

                         if(this.val_6[6]=='pt_1'){
                            this.pt_label_7 = 'GLV';
                        }else if(this.val_6[6]=='pt_2'){
                            this.pt_label_7 = 'GLV Condenser';
                        }else if(this.val_6[6]=='pt_3'){
                            this.pt_label_7 = 'Trans Reactor';
                        }else if(this.val_6[6]=='pt_4'){
                            this.pt_label_7 = 'T601';
                        }else if(this.val_6[6]=='pt_5'){
                            this.pt_label_7 = 'Distillation Header';
                        }else if(this.val_6[6]=='stfm2_pressure'){
                            this.pt_label_7 = 'Main Steam Flow_Pre';
                        }else if(this.val_6[6]=='stfm1_pressure'){
                            this.pt_label_7 = 'Steam To E401 Flow_Pre';
                        }
                    }
                    var ctx = document.getElementById('myChart1').getContext('2d');
                    if (window.bar != undefined)
                        window.bar.destroy();
                    window.bar = new Chart(ctx, {
                        type: 'line',
                        tooltips: {enabled: false},
                        hover: {mode: null},
                        data: {
                            labels: this.db_timing,
                            datasets: [{
                                hover: {
                                    mode: 'new mode'
                                },
                                label: this.label_1,
                                data: this.db_val_1,
                                backgroundColor: [

                                    'rgb(255,99,132)',

                                ],
                                borderColor: [
                                    'rgba(255, 99, 132, 1)',

                                ],
                                borderWidth: 1
                                , fill: false,
                            },  {
                                hover: {
                                    mode: 'new mode'
                                },
                                label: this.label_2,
                                data: this.db_val_2,


                                backgroundColor: [

                                    'rgb(39,156,12)',

                                ],
                                borderColor: [
                                    'rgb(39,156,12)',

                                ],
                                borderWidth: 1
                                , fill: false,
                            }, {
                                hover: {
                                    mode: 'new mode'
                                },
                                label: this.label_3,
                                data: this.db_val_3,


                                backgroundColor: [

                                    'rgb(12,53,156)',

                                ],
                                borderColor: [
                                    'rgb(12,53,156)',

                                ],
                                borderWidth: 1
                                , fill: false,
                            }, {
                                hover: {
                                    mode: 'new mode'
                                },
                                label: this.label_4,
                                data: this.db_val_4,


                                backgroundColor: [

                                    'rgb(179,132,0)',

                                ],
                                borderColor: [
                                    'rgb(179,132,0)',

                                ],
                                borderWidth: 1
                                , fill: false,
                            }, {
                                hover: {
                                    mode: 'new mode'
                                },
                                label: this.label_5,
                                data: this.db_val_5,


                                backgroundColor: [

                                    'rgb(5,5,5)',

                                ],
                                borderColor: [
                                    'rgb(5,5,5)',

                                ],
                                borderWidth: 1
                                , fill: false,
                            }, {
                                hover: {
                                    mode: 'new mode'
                                },
                                label: this.label_6,
                                data: this.db_val_6,


                                backgroundColor: [

                                    'rgb(46,75,34)',

                                ],
                                borderColor: [
                                    'rgb(46,75,34)',

                                ],
                                borderWidth: 1
                                , fill: false,
                            }, {
                                hover: {
                                    mode: 'new mode'
                                },
                                label: this.label_7,
                                data: this.db_val_7,


                                backgroundColor: [

                                    'rgb(142,12,156)',

                                ],
                                borderColor: [
                                    'rgb(142,12,156)',

                                ],
                                borderWidth: 1
                                , fill: false,
                            }, {
                                hover: {
                                    mode: 'new mode'
                                },
                                label: this.label_8,
                                data: this.db_val_8,


                                backgroundColor: [

                                    'rgb(0,229,255)',

                                ],
                                borderColor: [
                                    'rgb(0,229,255)',

                                ],
                                borderWidth: 1
                                , fill: false,
                            }, {
                                hover: {
                                    mode: 'new mode'
                                },
                                label: this.label_9,
                                data: this.db_val_9,


                                backgroundColor: [

                                    'rgb(156,12,12)',

                                ],
                                borderColor: [
                                    'rgb(156,12,12)',

                                ],
                                borderWidth: 1
                                , fill: false,
                            }, {
                                hover: {
                                    mode: 'new mode'
                                },
                                label: this.label_10,
                                data: this.db_val_10,


                                backgroundColor: [

                                    'rgba(0,234,255,0.34)',

                                ],
                                borderColor: [
                                    'rgba(0,234,255,0.34)',

                                ],
                                borderWidth: 1
                                , fill: false,
                            }, {
                                hover: {
                                    mode: 'new mode'
                                },
                                label: this.label_11,
                                data: this.db_val_11,


                                backgroundColor: [

                                    'rgb(156,86,12)',

                                ],
                                borderColor: [
                                    'rgb(156,86,12)',

                                ],
                                borderWidth: 1
                                , fill: false,
                            }, {
                                hover: {
                                    mode: 'new mode'
                                },
                                label: this.label_12,
                                data: this.db_val_12,


                                backgroundColor: [

                                    'rgb(255,93,8)',

                                ],
                                borderColor: [
                                    'rgb(255,93,8)',

                                ],
                                borderWidth: 1
                                , fill: false,
                            }, {
                                hover: {
                                    mode: 'new mode'
                                },
                                label: this.label_13,
                                data: this.db_val_13,


                                backgroundColor: [

                                    'rgba(12,122,156,0.6)',

                                ],
                                borderColor: [
                                    'rgba(12,122,156,0.6)',

                                ],
                                borderWidth: 1
                                , fill: false,
                            }, {
                                hover: {
                                    mode: 'new mode'
                                },
                                label: this.label_14,
                                data: this.db_val_14,


                                backgroundColor: [

                                    'rgb(0,63,255)',

                                ],
                                borderColor: [
                                    'rgb(0,63,255)',

                                ],
                                borderWidth: 1
                                , fill: false,
                            }, {
                                hover: {
                                    mode: 'new mode'
                                },
                                label: this.label_15,
                                data: this.db_val_15,


                                backgroundColor: [

                                    'rgb(89,12,156)',

                                ],
                                borderColor: [
                                    'rgb(89,12,156)',

                                ],
                                borderWidth: 1
                                , fill: false,
                            }, {
                                hover: {
                                    mode: 'new mode'
                                },
                                label: this.label_16,
                                data: this.db_val_16,


                                backgroundColor: [

                                    'rgb(201,173,0)',

                                ],
                                borderColor: [
                                    'rgb(201,173,0)',

                                ],
                                borderWidth: 1
                                , fill: false,
                            }],


                        },


                
                        options: {
                            plugins: {
                                legend: {
                                    labels: {
                                        // This more specific font property overrides the global property
                                        font: {
                                            size: 14
                                        }
                                    }
                                }
                            },
                            scales: {
                                yAxes: [{
                                    ticks: {
                                        beginAtZero: true,

                                    },

                                }],
                                xAxes: [{
                                    stacked: true,
                                    ticks: {
                                        autoSkip: true,
                                    }
                                }],

                            },


                        }
                    });
                    var ctx_2 = document.getElementById('myChart2').getContext('2d');
                    window.bar = new Chart(ctx_2, {
                        type: 'line',
                        data: {
                            labels: this.Volume_timing,
                            datasets: [{
                                hover: {
                                    mode: 'new mode'
                                },
                                label: this.vol_label_1,
                                data: this.vol_val_1,
                                backgroundColor: [

                                    'rgb(255,99,132)',

                                ],
                                borderColor: [
                                    'rgba(255, 99, 132, 1)',

                                ],
                                borderWidth: 1
                                , fill: false,
                            }, {
                                hover: {
                                    mode: 'new mode'
                                },
                                label: this.vol_label_2,
                                data: this.vol_val_2,


                                backgroundColor: [

                                    'rgb(39,156,12)',

                                ],
                                borderColor: [
                                    'rgb(39,156,12)',

                                ],
                                borderWidth: 1
                                , fill: false,
                            }, {
                                hover: {
                                    mode: 'new mode'
                                },
                                label: this.vol_label_3,
                                data: this.vol_val_3,


                                backgroundColor: [

                                    'rgb(12,53,156)',

                                ],
                                borderColor: [
                                    'rgb(12,53,156)',

                                ],
                                borderWidth: 1
                                , fill: false,
                            }, {
                                hover: {
                                    mode: 'new mode'
                                },
                                label: this.vol_label_4,
                                data: this.vol_val_4,


                                backgroundColor: [

                                    'rgb(179,132,0)',

                                ],
                                borderColor: [
                                    'rgb(179,132,0)',

                                ],
                                borderWidth: 1
                                , fill: false,
                            }, {
                                hover: {
                                    mode: 'new mode'
                                },
                                label: this.vol_label_5,
                                data: this.vol_val_5,


                                backgroundColor: [

                                    'rgb(5,5,5)',

                                ],
                                borderColor: [
                                    'rgb(5,5,5)',

                                ],
                                borderWidth: 1
                                , fill: false,
                            }, {
                                hover: {
                                    mode: 'new mode'
                                },
                                label: this.vol_label_6,
                                data: this.vol_val_6,


                                backgroundColor: [

                                    'rgb(46,75,34)',

                                ],
                                borderColor: [
                                    'rgb(46,75,34)',

                                ],
                                borderWidth: 1
                                , fill: false,
                            }, {
                                hover: {
                                    mode: 'new mode'
                                },
                                label: this.vol_label_7,
                                data: this.vol_val_7,


                                backgroundColor: [

                                    'rgb(142,12,156)',

                                ],
                                borderColor: [
                                    'rgb(142,12,156)',

                                ],
                                borderWidth: 1
                                , fill: false,
                            }, {
                                hover: {
                                    mode: 'new mode'
                                },
                                label: this.vol_label_8,
                                data: this.vol_val_8,


                                backgroundColor: [

                                    'rgb(0,229,255)',

                                ],
                                borderColor: [
                                    'rgb(0,229,255)',

                                ],
                                borderWidth: 1
                                , fill: false,
                            }, {
                                hover: {
                                    mode: 'new mode'
                                },
                                label: this.vol_label_9,
                                data: this.vol_val_9,


                                backgroundColor: [

                                    'rgb(156,12,12)',

                                ],
                                borderColor: [
                                    'rgb(156,12,12)',

                                ],
                                borderWidth: 1
                                , fill: false,
                            }, {
                                hover: {
                                    mode: 'new mode'
                                },
                                label: this.vol_label_10,
                                data: this.vol_val_10,


                                backgroundColor: [

                                    'rgba(0,234,255,0.34)',

                                ],
                                borderColor: [
                                    'rgba(0,234,255,0.34)',

                                ],
                                borderWidth: 1
                                , fill: false,
                            }, {
                                hover: {
                                    mode: 'new mode'
                                },
                                label: this.vol_label_11,
                                data: this.vol_val_11,


                                backgroundColor: [

                                    'rgb(156,86,12)',

                                ],
                                borderColor: [
                                    'rgb(156,86,12)',

                                ],
                                borderWidth: 1
                                , fill: false,
                            }, {
                                hover: {
                                    mode: 'new mode'
                                },
                                label: this.vol_label_12,
                                data: this.vol_val_12,


                                backgroundColor: [

                                    'rgb(255,93,8)',

                                ],
                                borderColor: [
                                    'rgb(255,93,8)',

                                ],
                                borderWidth: 1
                                , fill: false,
                            }, {
                                hover: {
                                    mode: 'new mode'
                                },
                                label: this.vol_label_13,
                                data: this.vol_val_13,


                                backgroundColor: [

                                    'rgba(12,122,156,0.6)',

                                ],
                                borderColor: [
                                    'rgba(12,122,156,0.6)',

                                ],
                                borderWidth: 1
                                , fill: false,
                            }, {
                                hover: {
                                    mode: 'new mode'
                                },
                                label: this.vol_label_14,
                                data: this.vol_val_14,


                                backgroundColor: [

                                    'rgb(0,63,255)',

                                ],
                                borderColor: [
                                    'rgb(0,63,255)',

                                ],
                                borderWidth: 1
                                , fill: false,
                            }, {
                                hover: {
                                    mode: 'new mode'
                                },
                                label: this.vol_label_15,
                                data: this.vol_val_15,


                                backgroundColor: [

                                    'rgb(89,12,156)',

                                ],
                                borderColor: [
                                    'rgb(89,12,156)',

                                ],
                                borderWidth: 1
                                , fill: false,
                            }, {
                                hover: {
                                    mode: 'new mode'
                                },
                                label: this.vol_label_16,
                                data: this.vol_val_16,


                                backgroundColor: [

                                    'rgb(201,173,0)',

                                ],
                                borderColor: [
                                    'rgb(201,173,0)',

                                ],
                                borderWidth: 1
                                , fill: false,
                            }],


                        },
                    });
                    var ctx_3 = document.getElementById('myChart3').getContext('2d');
                    window.bar = new Chart(ctx_3, {
                        type: 'line',
                        data: {
                            labels: this.tmp_db_timing,
                            datasets: [{
                                hover: {
                                    mode: 'new mode'
                                },
                                label: this.tmp_label_1,
                                data: this.tmp_db_val_1,
                                backgroundColor: [

                                    'rgb(255,99,132)',

                                ],
                                borderColor: [
                                    'rgba(255, 99, 132, 1)',

                                ],
                                borderWidth: 1
                                , fill: false,
                            }, {
                                hover: {
                                    mode: 'new mode'
                                },
                                label: this.tmp_label_2,
                                data: this.tmp_db_val_2,


                                backgroundColor: [

                                    'rgb(39,156,12)',

                                ],
                                borderColor: [
                                    'rgb(39,156,12)',

                                ],
                                borderWidth: 1
                                , fill: false,
                            }, {
                                hover: {
                                    mode: 'new mode'
                                },
                                label: this.tmp_label_3,
                                data: this.tmp_db_val_3,


                                backgroundColor: [

                                    'rgb(12,53,156)',

                                ],
                                borderColor: [
                                    'rgb(12,53,156)',

                                ],
                                borderWidth: 1
                                , fill: false,
                            }, {
                                hover: {
                                    mode: 'new mode'
                                },
                                label: this.tmp_label_4,
                                data: this.tmp_db_val_4,


                                backgroundColor: [

                                    'rgb(179,132,0)',

                                ],
                                borderColor: [
                                    'rgb(179,132,0)',

                                ],
                                borderWidth: 1
                                , fill: false,
                            }, {
                                hover: {
                                    mode: 'new mode'
                                },
                                label: this.tmp_label_5,
                                data: this.tmp_db_val_5,


                                backgroundColor: [

                                    'rgb(5,5,5)',

                                ],
                                borderColor: [
                                    'rgb(5,5,5)',

                                ],
                                borderWidth: 1
                                , fill: false,
                            }, {
                                hover: {
                                    mode: 'new mode'
                                },
                                label: this.tmp_label_6,
                                data: this.tmp_db_val_6,


                                backgroundColor: [

                                    'rgb(46,75,34)',

                                ],
                                borderColor: [
                                    'rgb(46,75,34)',

                                ],
                                borderWidth: 1
                                , fill: false,
                            }, {
                                hover: {
                                    mode: 'new mode'
                                },
                                label: this.tmp_label_7,
                                data: this.tmp_db_val_7,


                                backgroundColor: [

                                    'rgb(142,12,156)',

                                ],
                                borderColor: [
                                    'rgb(142,12,156)',

                                ],
                                borderWidth: 1
                                , fill: false,
                            }, {
                                hover: {
                                    mode: 'new mode'
                                },
                                label: this.tmp_label_8,
                                data: this.tmp_db_val_8,


                                backgroundColor: [

                                    'rgb(0,229,255)',

                                ],
                                borderColor: [
                                    'rgb(0,229,255)',

                                ],
                                borderWidth: 1
                                , fill: false,
                            }, {
                                hover: {
                                    mode: 'new mode'
                                },
                                label: this.tmp_label_9,
                                data: this.tmp_db_val_9,


                                backgroundColor: [

                                    'rgb(156,12,12)',

                                ],
                                borderColor: [
                                    'rgb(156,12,12)',

                                ],
                                borderWidth: 1
                                , fill: false,
                            }, {
                                hover: {
                                    mode: 'new mode'
                                },
                                label: this.tmp_label_10,
                                data: this.tmp_db_val_10,


                                backgroundColor: [

                                    'rgba(0,234,255,0.34)',

                                ],
                                borderColor: [
                                    'rgba(0,234,255,0.34)',

                                ],
                                borderWidth: 1
                                , fill: false,
                            }, {
                                hover: {
                                    mode: 'new mode'
                                },
                                label: this.tmp_label_11,
                                data: this.tmp_db_val_11,


                                backgroundColor: [

                                    'rgb(156,86,12)',

                                ],
                                borderColor: [
                                    'rgb(156,86,12)',

                                ],
                                borderWidth: 1
                                , fill: false,
                            }, {
                                hover: {
                                    mode: 'new mode'
                                },
                                label: this.tmp_label_12,
                                data: this.tmp_db_val_12,


                                backgroundColor: [

                                    'rgb(255,93,8)',

                                ],
                                borderColor: [
                                    'rgb(255,93,8)',

                                ],
                                borderWidth: 1
                                , fill: false,
                            }, {
                                hover: {
                                    mode: 'new mode'
                                },
                                label: this.tmp_label_13,
                                data: this.tmp_db_val_13,


                                backgroundColor: [

                                    'rgba(12,122,156,0.6)',

                                ],
                                borderColor: [
                                    'rgba(12,122,156,0.6)',

                                ],
                                borderWidth: 1
                                , fill: false,
                            }, {
                                hover: {
                                    mode: 'new mode'
                                },
                                label: this.tmp_label_14,
                                data: this.tmp_db_val_14,


                                backgroundColor: [

                                    'rgb(0,63,255)',

                                ],
                                borderColor: [
                                    'rgb(0,63,255)',

                                ],
                                borderWidth: 1
                                , fill: false,
                            }, {
                                hover: {
                                    mode: 'new mode'
                                },
                                label: this.tmp_label_15,
                                data: this.tmp_db_val_15,


                                backgroundColor: [

                                    'rgb(89,12,156)',

                                ],
                                borderColor: [
                                    'rgb(89,12,156)',

                                ],
                                borderWidth: 1
                                , fill: false,
                            }, {
                                hover: {
                                    mode: 'new mode'
                                },
                                label: this.tmp_label_16,
                                data: this.tmp_db_val_16,


                                backgroundColor: [

                                    'rgb(201,173,0)',

                                ],
                                borderColor: [
                                    'rgb(201,173,0)',

                                ],
                                borderWidth: 1
                                , fill: false,
                            }],


                        },
                    });
                    var ctx_4 = document.getElementById('myChart4').getContext('2d');
                    window.bar = new Chart(ctx_4, {
                        type: 'line',
                        data: {
                            labels: this.flow_db_timing,
                            datasets: [{
                                hover: {
                                    mode: 'new mode'
                                },
                                label: this.flow_label_1,
                                data: this.flow_db_val_1,
                                backgroundColor: [

                                    'rgb(255,99,132)',

                                ],
                                borderColor: [
                                    'rgba(255, 99, 132, 1)',

                                ],
                                borderWidth: 1
                                , fill: false,
                            }, {
                                hover: {
                                    mode: 'new mode'
                                },
                                label: this.flow_label_2,
                                data: this.flow_db_val_2,


                                backgroundColor: [

                                    'rgb(39,156,12)',

                                ],
                                borderColor: [
                                    'rgb(39,156,12)',

                                ],
                                borderWidth: 1
                                , fill: false,
                            }, {
                                hover: {
                                    mode: 'new mode'
                                },
                                label: this.flow_label_3,
                                data: this.flow_db_val_3,


                                backgroundColor: [

                                    'rgb(12,53,156)',

                                ],
                                borderColor: [
                                    'rgb(12,53,156)',

                                ],
                                borderWidth: 1
                                , fill: false,
                            }, {
                                hover: {
                                    mode: 'new mode'
                                },
                                label: this.flow_label_4,
                                data: this.flow_db_val_4,


                                backgroundColor: [

                                    'rgb(179,132,0)',

                                ],
                                borderColor: [
                                    'rgb(179,132,0)',

                                ],
                                borderWidth: 1
                                , fill: false,
                            }, {
                                hover: {
                                    mode: 'new mode'
                                },
                                label: this.flow_label_5,
                                data: this.flow_db_val_5,


                                backgroundColor: [

                                    'rgb(5,5,5)',

                                ],
                                borderColor: [
                                    'rgb(5,5,5)',

                                ],
                                borderWidth: 1
                                , fill: false,
                            }, {
                                hover: {
                                    mode: 'new mode'
                                },
                                label: this.flow_label_6,
                                data: this.flow_db_val_6,


                                backgroundColor: [

                                    'rgb(46,75,34)',

                                ],
                                borderColor: [
                                    'rgb(46,75,34)',

                                ],
                                borderWidth: 1
                                , fill: false,
                            }, {
                                hover: {
                                    mode: 'new mode'
                                },
                                label: this.flow_label_7,
                                data: this.flow_db_val_7,


                                backgroundColor: [

                                    'rgb(142,12,156)',

                                ],
                                borderColor: [
                                    'rgb(142,12,156)',

                                ],
                                borderWidth: 1
                                , fill: false,
                            }, {
                                hover: {
                                    mode: 'new mode'
                                },
                                label: this.flow_label_8,
                                data: this.flow_db_val_8,


                                backgroundColor: [

                                    'rgb(0,229,255)',

                                ],
                                borderColor: [
                                    'rgb(0,229,255)',

                                ],
                                borderWidth: 1
                                , fill: false,
                            }, {
                                hover: {
                                    mode: 'new mode'
                                },
                                label: this.flow_label_9,
                                data: this.flow_db_val_9,


                                backgroundColor: [

                                    'rgb(156,12,12)',

                                ],
                                borderColor: [
                                    'rgb(156,12,12)',

                                ],
                                borderWidth: 1
                                , fill: false,
                            }, {
                                hover: {
                                    mode: 'new mode'
                                },
                                label: this.flow_label_10,
                                data: this.flow_db_val_10,


                                backgroundColor: [

                                    'rgba(0,234,255,0.34)',

                                ],
                                borderColor: [
                                    'rgba(0,234,255,0.34)',

                                ],
                                borderWidth: 1
                                , fill: false,
                            }, {
                                hover: {
                                    mode: 'new mode'
                                },
                                label: this.flow_label_11,
                                data: this.flow_db_val_11,


                                backgroundColor: [

                                    'rgb(156,86,12)',

                                ],
                                borderColor: [
                                    'rgb(156,86,12)',

                                ],
                                borderWidth: 1
                                , fill: false,
                            }, {
                                hover: {
                                    mode: 'new mode'
                                },
                                label: this.flow_label_12,
                                data: this.flow_db_val_12,


                                backgroundColor: [

                                    'rgb(255,93,8)',

                                ],
                                borderColor: [
                                    'rgb(255,93,8)',

                                ],
                                borderWidth: 1
                                , fill: false,
                            }, {
                                hover: {
                                    mode: 'new mode'
                                },
                                label: this.flow_label_13,
                                data: this.flow_db_val_13,


                                backgroundColor: [

                                    'rgba(12,122,156,0.6)',

                                ],
                                borderColor: [
                                    'rgba(12,122,156,0.6)',

                                ],
                                borderWidth: 1
                                , fill: false,
                            }, {
                                hover: {
                                    mode: 'new mode'
                                },
                                label: this.flow_label_14,
                                data: this.flow_db_val_14,


                                backgroundColor: [

                                    'rgb(0,63,255)',

                                ],
                                borderColor: [
                                    'rgb(0,63,255)',

                                ],
                                borderWidth: 1
                                , fill: false,
                            }, {
                                hover: {
                                    mode: 'new mode'
                                },
                                label: this.flow_label_15,
                                data: this.flow_db_val_15,


                                backgroundColor: [

                                    'rgb(89,12,156)',

                                ],
                                borderColor: [
                                    'rgb(89,12,156)',

                                ],
                                borderWidth: 1
                                , fill: false,
                            }, {
                                hover: {
                                    mode: 'new mode'
                                },
                                label: this.flow_label_16,
                                data: this.flow_db_val_16,


                                backgroundColor: [

                                    'rgb(201,173,0)',

                                ],
                                borderColor: [
                                    'rgb(201,173,0)',

                                ],
                                borderWidth: 1
                                , fill: false,
                            }],


                        },
                    });
                    var ctx_5 = document.getElementById('myChart5').getContext('2d');
                    window.bar = new Chart(ctx_5, {
                        type: 'line',
                        data: {
                            labels: this.ft_db_timing,
                            datasets: [{
                                hover: {
                                    mode: 'new mode'
                                },
                                label: this.ft_label_1,
                                data: this.ft_db_val_1,
                                backgroundColor: [

                                    'rgb(255,99,132)',

                                ],
                                borderColor: [
                                    'rgba(255, 99, 132, 1)',

                                ],
                                borderWidth: 1
                                , fill: false,
                            }, {
                                hover: {
                                    mode: 'new mode'
                                },
                                label: this.ft_label_2,
                                data: this.ft_db_val_2,


                                backgroundColor: [

                                    'rgb(39,156,12)',

                                ],
                                borderColor: [
                                    'rgb(39,156,12)',

                                ],
                                borderWidth: 1
                                , fill: false,
                            }, {
                                hover: {
                                    mode: 'new mode'
                                },
                                label: this.ft_label_3,
                                data: this.ft_db_val_3,


                                backgroundColor: [

                                    'rgb(12,53,156)',

                                ],
                                borderColor: [
                                    'rgb(12,53,156)',

                                ],
                                borderWidth: 1
                                , fill: false,
                            }, {
                                hover: {
                                    mode: 'new mode'
                                },
                                label: this.ft_label_4,
                                data: this.ft_db_val_4,


                                backgroundColor: [

                                    'rgb(179,132,0)',

                                ],
                                borderColor: [
                                    'rgb(179,132,0)',

                                ],
                                borderWidth: 1
                                , fill: false,
                            }, {
                                hover: {
                                    mode: 'new mode'
                                },
                                label: this.ft_label_5,
                                data: this.ft_db_val_5,


                                backgroundColor: [

                                    'rgb(5,5,5)',

                                ],
                                borderColor: [
                                    'rgb(5,5,5)',

                                ],
                                borderWidth: 1
                                , fill: false,
                            }, {
                                hover: {
                                    mode: 'new mode'
                                },
                                label: this.ft_label_6,
                                data: this.ft_db_val_6,


                                backgroundColor: [

                                    'rgb(46,75,34)',

                                ],
                                borderColor: [
                                    'rgb(46,75,34)',

                                ],
                                borderWidth: 1
                                , fill: false,
                            }, {
                                hover: {
                                    mode: 'new mode'
                                },
                                label: this.ft_label_7,
                                data: this.ft_db_val_7,


                                backgroundColor: [

                                    'rgb(142,12,156)',

                                ],
                                borderColor: [
                                    'rgb(142,12,156)',

                                ],
                                borderWidth: 1
                                , fill: false,
                            }, {
                                hover: {
                                    mode: 'new mode'
                                },
                                label: this.ft_label_8,
                                data: this.ft_db_val_8,


                                backgroundColor: [

                                    'rgb(0,229,255)',

                                ],
                                borderColor: [
                                    'rgb(0,229,255)',

                                ],
                                borderWidth: 1
                                , fill: false,
                            }, {
                                hover: {
                                    mode: 'new mode'
                                },
                                label: this.ft_label_9,
                                data: this.ft_db_val_9,


                                backgroundColor: [

                                    'rgb(156,12,12)',

                                ],
                                borderColor: [
                                    'rgb(156,12,12)',

                                ],
                                borderWidth: 1
                                , fill: false,
                            }, {
                                hover: {
                                    mode: 'new mode'
                                },
                                label: this.ft_label_10,
                                data: this.ft_db_val_10,


                                backgroundColor: [

                                    'rgba(0,234,255,0.34)',

                                ],
                                borderColor: [
                                    'rgba(0,234,255,0.34)',

                                ],
                                borderWidth: 1
                                , fill: false,
                            }, {
                                hover: {
                                    mode: 'new mode'
                                },
                                label: this.ft_label_11,
                                data: this.ft_db_val_11,


                                backgroundColor: [

                                    'rgb(156,86,12)',

                                ],
                                borderColor: [
                                    'rgb(156,86,12)',

                                ],
                                borderWidth: 1
                                , fill: false,
                            }, {
                                hover: {
                                    mode: 'new mode'
                                },
                                label: this.ft_label_12,
                                data: this.ft_db_val_12,


                                backgroundColor: [

                                    'rgb(255,93,8)',

                                ],
                                borderColor: [
                                    'rgb(255,93,8)',

                                ],
                                borderWidth: 1
                                , fill: false,
                            }, {
                                hover: {
                                    mode: 'new mode'
                                },
                                label: this.ft_label_13,
                                data: this.ft_db_val_13,


                                backgroundColor: [

                                    'rgba(12,122,156,0.6)',

                                ],
                                borderColor: [
                                    'rgba(12,122,156,0.6)',

                                ],
                                borderWidth: 1
                                , fill: false,
                            }, {
                                hover: {
                                    mode: 'new mode'
                                },
                                label: this.ft_label_14,
                                data: this.ft_db_val_14,


                                backgroundColor: [

                                    'rgb(0,63,255)',

                                ],
                                borderColor: [
                                    'rgb(0,63,255)',

                                ],
                                borderWidth: 1
                                , fill: false,
                            }, {
                                hover: {
                                    mode: 'new mode'
                                },
                                label: this.ft_label_15,
                                data: this.ft_db_val_15,


                                backgroundColor: [

                                    'rgb(89,12,156)',

                                ],
                                borderColor: [
                                    'rgb(89,12,156)',

                                ],
                                borderWidth: 1
                                , fill: false,
                            }, {
                                hover: {
                                    mode: 'new mode'
                                },
                                label: this.ft_label_16,
                                data: this.ft_db_val_16,


                                backgroundColor: [

                                    'rgb(201,173,0)',

                                ],
                                borderColor: [
                                    'rgb(201,173,0)',

                                ],
                                borderWidth: 1
                                , fill: false,
                            }],


                        },
                    });
                    var ctx_6 = document.getElementById('myChart6').getContext('2d');
                    window.bar = new Chart(ctx_6, {
                        type: 'line',
                        data: {
                            labels: this.mass_timing,
                            datasets: [{
                                hover: {
                                    mode: 'new mode'
                                },
                                label: this.mass_label,
                                data: this.mass_db_val,
                                backgroundColor: [

                                    'rgb(255,99,132)',

                                ],
                                borderColor: [
                                    'rgba(255, 99, 132, 1)',

                                ],
                                borderWidth: 1
                                , fill: false,
                            }],


                        },
                    });
                    var ctx_7 = document.getElementById('myChart7').getContext('2d');
                    window.bar = new Chart(ctx_7, {
                        type: 'line',
                        data: {
                            labels: this.pt_db_timing,
                            datasets: [{
                                hover: {
                                    mode: 'new mode'
                                },
                                label: this.pt_label_1,
                                data: this.pt_db_val_1,
                                backgroundColor: [

                                    'rgb(255,99,132)',

                                ],
                                borderColor: [
                                    'rgba(255, 99, 132, 1)',

                                ],
                                borderWidth: 1
                                , fill: false,
                            }, {
                                hover: {
                                    mode: 'new mode'
                                },
                                label: this.pt_label_2,
                                data: this.pt_db_val_2,


                                backgroundColor: [

                                    'rgb(39,156,12)',

                                ],
                                borderColor: [
                                    'rgb(39,156,12)',

                                ],
                                borderWidth: 1
                                , fill: false,
                            }, {
                                hover: {
                                    mode: 'new mode'
                                },
                                label: this.pt_label_3,
                                data: this.pt_db_val_3,


                                backgroundColor: [

                                    '#6f42c1',

                                ],
                                borderColor: [
                                    '#6f42c1',

                                ],
                                borderWidth: 1
                                , fill: false,
                            }, {
                                hover: {
                                    mode: 'new mode'
                                },
                                label: this.pt_label_4,
                                data: this.pt_db_val_4,


                                backgroundColor: [

                                    '#007bff',

                                ],
                                borderColor: [
                                    '#007bff',

                                ],
                                borderWidth: 1
                                , fill: false,
                            }, {
                                hover: {
                                    mode: 'new mode'
                                },
                                label: this.pt_label_5,
                                data: this.pt_db_val_5,


                                backgroundColor: [

                                    '#ffc107',

                                ],
                                borderColor: [
                                    '#ffc107',

                                ],
                                borderWidth: 1
                                , fill: false,
                            },{
                                hover: {
                                    mode: 'new mode'
                                },
                                label: this.pt_label_6,
                                data: this.pt_db_val_6,


                                backgroundColor: [

                                    '#dc3545',

                                ],
                                borderColor: [
                                    '#dc3545',

                                ],
                                borderWidth: 1
                                , fill: false,
                            },{
                                hover: {
                                    mode: 'new mode'
                                },
                                label: this.pt_label_7,
                                data: this.pt_db_val_7,


                                backgroundColor: [

                                    '#17a2b8',

                                ],
                                borderColor: [
                                    '#17a2b8',

                                ],
                                borderWidth: 1
                                , fill: false,
                            },],


                        },
                    });
                         
                })
                .catch(err =>{
                    console.log(err);
                })
        },
        reloadPage() {
            window.location.reload();
        }
    },

    mounted() {
        document.getElementById('change-row').style.marginRight = "0px";
        // if (localStorage.getItem('reloaded')) {
        //     // The page was just reloaded. Clear the value from local storage
        //     // so that it will reload the next time this page is visited.
        //     localStorage.removeItem('reloaded');
        // } else {
        //     // Set a flag so that we know not to reload the page twice.
        //     localStorage.setItem('reloaded', '1');
        //     location.reload();
        // }
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
    font-size:12px !important;

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
.custom-util{
    padding-bottom: 2.4rem !important;
}
@media only screen and (max-width: 1840px) {
    .table-style-me td {
        padding:0px;
    }
    .custom-util{
        padding-bottom: 1.2rem !important;
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
