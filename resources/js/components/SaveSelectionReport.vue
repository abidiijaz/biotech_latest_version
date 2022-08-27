<template>
    <div className="col-md-12" style="padding: 0px;">

        <h1 style="text-align: center; padding-top: 30px;">Save Selection</h1>

        <div class="table-container col-md-12 text-center mb-5">
            <form name="chartForm" class="main-form" @submit.prevent="submit">
             <table class="table table-style-me" style="display:inline-table;width:17%; text-align: center; color: white;">
                        <tr style="border: none">

                            <th colspan="5"> <h6>Pre Esterification</h6></th>
                        </tr>
                        <tr style="background-color:#4a4a4a;">
                            <th>Name</th>
                            <th>level</th>
                            <th>Vol</th>
                            <th>Temp</th>
                            <th>Pr</th>
                        </tr>
                        <tr>
                            <td>Settling A</td>
                            <td><input value="rdl_13" v-model="val_1" type="checkbox" :disabled="disable" v-on:click="CheckRange"></td>
                            <td><input value="vr_13" v-model="val_1" type="checkbox" :disabled="disable" v-on:click="CheckRange"></td>
                            <td><input value="rtd_9" v-model="val_1" type="checkbox" :disabled="disable" v-on:click="CheckRange"></td>
                            <td>.</td>
                        <tr>
                            <td>Settling B</td>
                            <td><input value="rdl_14" v-model="val_1" type="checkbox" :disabled="disable" v-on:click="CheckRange"></td>
                            <td><input value="vr_14" v-model="val_1" type="checkbox" :disabled="disable" v-on:click="CheckRange"></td>
                            <td><input value="rtd_10" v-model="val_1" type="checkbox" :disabled="disable" v-on:click="CheckRange"></td>
                            <td>.</td>
                        </tr>
                        <tr>
                            <td>Settling C</td>
                            <td><input value="rdl_15" v-model="val_1" type="checkbox" :disabled="disable" v-on:click="CheckRange"></td>
                            <td><input value="vr_15" v-model="val_1" type="checkbox" :disabled="disable" v-on:click="CheckRange"></td>
                            <td><input value="rtd_11" v-model="val_1" type="checkbox" :disabled="disable" v-on:click="CheckRange"></td>
                            <td>.</td>
                        </tr>
                        <tr>
                            <td>E201</td>
                            <td><input value="rdl_1" type="hidden"></td>
                            <td><input value="rdl_1" type="hidden"></td>
                            <td><input value="rtd_4" v-model="val_1" type="checkbox" :disabled="disable" v-on:click="CheckRange"></td>
                            <td>.</td>
                        </tr>
                        <tr>
                            <td>E101</td>
                            <td><input value="rdl_1" type="hidden"></td>
                            <td><input value="rdl_1" type="hidden"></td>
                            <td><input value="rtd_1" v-model="val_1" type="checkbox" :disabled="disable" v-on:click="CheckRange"></td>
                            <td>.</td>
                        </tr>
                        <tr>
                            <td>D101A</td>
                            <td><input value="rdl_1" v-model="val_1" type="checkbox" :disabled="disable" v-on:click="CheckRange"></td>
                            <td><input value="vr_1" v-model="val_1" type="checkbox" :disabled="disable" v-on:click="CheckRange"></td>
                            <td><input value="rtd_2" v-model="val_1" type="checkbox" :disabled="disable" v-on:click="CheckRange"></td>
                            <td>.</td>
                        </tr>
                        <tr>
                            <td>D101B</td>
                            <td><input value="rdl_2" v-model="val_1" type="checkbox" :disabled="disable" v-on:click="CheckRange"></td>
                            <td><input value="vr_2"  v-model="val_1" type="checkbox" :disabled="disable" v-on:click="CheckRange"></td>
                            <td><input value="rtd_3" v-model="val_1" type="checkbox" :disabled="disable" v-on:click="CheckRange"></td>
                            <td>.</td>
                        </tr>
                        <tr>
                            <td>PPRA</td>
                            <td><input value="rdl_23" v-model="val_1" type="checkbox" :disabled="disable" v-on:click="CheckRange"></td>
                            <td><input value="vr_23" v-model="val_1" type="checkbox" :disabled="disable" v-on:click="CheckRange"></td>
                            <td><input value="rtd_32" v-model="val_1" type="checkbox" :disabled="disable" v-on:click="CheckRange"></td>
                            <td>.</td>
                        </tr>
                        <tr>
                            <td>PPRB</td>
                            <td><input value="rdl_24" v-model="val_1" type="checkbox" :disabled="disable" v-on:click="CheckRange"></td>
                            <td><input value="vr_24" v-model="val_1" type="checkbox" :disabled="disable" v-on:click="CheckRange"></td>
                            <td><input value="rtd_33" v-model="val_1" type="checkbox" :disabled="disable" v-on:click="CheckRange"></td>
                            <td>.</td>
                        </tr>
                        <tr>
                            <td>GST</td>
                            <td><input value="rdl_18" v-model="val_1" type="checkbox" :disabled="disable" v-on:click="CheckRange"></td>
                            <td><input value="vr_18" v-model="val_1" type="checkbox" :disabled="disable" v-on:click="CheckRange"></td>
                            <td><input value="rtd_34" v-model="val_1" type="checkbox" :disabled="disable" v-on:click="CheckRange"></td>
                            <td>.</td>
                        </tr>
                        <tr>
                            <td>GLV</td>
                            <td><input value="rdl_12" v-model="val_1" type="checkbox" :disabled="disable" v-on:click="CheckRange"></td>
                            <td><input value="vr_12" v-model="val_1" type="checkbox" :disabled="disable" v-on:click="CheckRange"></td>
                            <td><input value="rtd_5" v-model="val_1" type="hidden"></td>
                            <td><input value="pt_1" v-model="val_1" type="checkbox" :disabled="disable" v-on:click="CheckRange"></td>
                        </tr>
                        <tr>
                            <td>GLV Evap</td>
                            <td><input value="rdl_1" type="hidden"></td>
                            <td><input value="rdl_1" type="hidden"></td>
                            <td><input value="rtd_8" v-model="val_1" type="checkbox" :disabled="disable" v-on:click="CheckRange"></td>
                            <td>.</td>
                        </tr>
                        <tr>
                            <td>GLV T</td>
                            <td><input value="rdl_1" type="hidden"></td>
                            <td><input value="rdl_1" type="hidden"></td>
                            <td><input value="rtd_5" v-model="val_1" type="checkbox" :disabled="disable" v-on:click="CheckRange"></td>
                            <td>.</td>
                        </tr>
                        <tr>
                            <td>GLV M</td>
                            <td><input value="rdl_1" type="hidden"></td>
                            <td><input value="rdl_1" type="hidden"></td>
                            <td><input value="rtd_6" v-model="val_1" type="checkbox" :disabled="disable" v-on:click="CheckRange"></td>
                            <td>.</td>
                        </tr>
                        <tr>
                            <td>GLV B</td>
                            <td><input value="rdl_1" type="hidden"></td>
                            <td><input value="rdl_1" type="hidden"></td>
                            <td><input value="rtd_7" v-model="val_1" type="checkbox" :disabled="disable" v-on:click="CheckRange"></td>
                            <td>.</td>
                        </tr>
                        <tr>
                            <td>D405A</td>
                            <td><input value="rdl_3" v-model="val_1" type="checkbox" :disabled="disable" v-on:click="CheckRange"></td>
                            <td><input value="vr_3" v-model="val_1" type="checkbox" :disabled="disable" v-on:click="CheckRange"></td>
                            <td><input value="rtd_1" type="hidden"></td>
                            <td>.</td>
                        </tr>
                        <tr>
                            <td>D405B</td>
                            <td><input value="rdl_4" v-model="val_1" type="checkbox" :disabled="disable" v-on:click="CheckRange"></td>
                            <td><input value="vr_4" v-model="val_1" type="checkbox" :disabled="disable" v-on:click="CheckRange"></td>
                            <td><input value="rdl_1" type="hidden"></td>
                            <td>.</td>
                        </tr>
                        <tr>
                            <td>D405C</td>
                            <td><input value="rdl_5" v-model="val_1" type="checkbox" :disabled="disable" v-on:click="CheckRange"></td>
                            <td><input value="vr_5" v-model="val_1" type="checkbox" :disabled="disable" v-on:click="CheckRange"></td>
                            <td><input value="rdl_1" type="hidden"></td>
                            <td>.</td>
                        </tr>
                        <tr>
                            <td>H2SO4</td>
                            <td><input value="rdl_25" v-model="val_1" type="checkbox" :disabled="disable" v-on:click="CheckRange"></td>
                            <td><input value="rdl25_volume" v-model="val_1" type="checkbox" :disabled="disable" v-on:click="CheckRange"></td>
                            <td>Mass<input value="rdl25_mass" v-model="val_1" type="checkbox" :disabled="disable" v-on:click="CheckRange"></td>
                            <td>.</td>
                        </tr>
                        <tr>
                            <td>SP1</td>
                            <td><input value="rdl_20" v-model="val_1" type="checkbox" :disabled="disable" v-on:click="CheckRange"></td>
                            <td><input value="vr_20" v-model="val_1" type="checkbox" :disabled="disable" v-on:click="CheckRange"></td>
                            <td></td>
                            <td>.</td>
                        </tr>
                        <tr>
                            <td>SP2</td>
                            <td><input value="rdl_21" v-model="val_1" type="checkbox" :disabled="disable" v-on:click="CheckRange"></td>
                            <td><input value="vr_21" v-model="val_1" type="checkbox" :disabled="disable" v-on:click="CheckRange"></td>
                            <td></td>
                            <td>.</td>
                        </tr>
                        <tr><td>PIT</td>
                            <td><input value="pit_level" v-model="val_1" type="checkbox" :disabled="disable" v-on:click="CheckRange"></td>
                            <td></td>
                            <td></td>
                            <td>.</td>
                        </tr>
                         <tr><td>GST#2</td>
                            <td><input value="rdl_32" v-model="val_1" type="checkbox" :disabled="disable" v-on:click="CheckRange"></td>
                            <td><input value="vr_32" v-model="val_1" type="checkbox" :disabled="disable" v-on:click="CheckRange"></td>
                            <td><input value="rtd_42" v-model="val_1" type="checkbox" :disabled="disable" v-on:click="CheckRange"></td>
                            <td>.</td>
                        </tr>
                        <tr style="background-color:#4a4a4a;">
                            <th>Name</th>
                            <th>Flow</th>
                            <th>Total</th>
                            <th>Density</th>
                            <th>Temp</th>
                        </tr>
                        <tr>
                            <td>FM 18 (Mathanol into GST 1 and 2)</td>
                            <td><input value="fm_18" v-model="val_1" type="checkbox" :disabled="disable" v-on:click="CheckRange"></td>
                            <td><input value="ft_18" v-model="val_1" type="checkbox" :disabled="disable" v-on:click="CheckRange"></td>
                            <td>.</td>
                            <td>.</td>
                        </tr>
                        <tr>
                            <td>FM 19 (Methanol into PPRA and B)</td>
                            <td><input value="fm_19" v-model="val_1" type="checkbox" :disabled="disable" v-on:click="CheckRange"></td>
                            <td><input value="ft_19" v-model="val_1" type="checkbox" :disabled="disable" v-on:click="CheckRange"></td>
                            <td>.</td>
                            <td>.</td>
                        </tr>
                        <tr>
                            <td>FM 20 (Mathanol into GLV)</td>
                            <td><input value="fm_20" v-model="val_1" type="checkbox" :disabled="disable" v-on:click="CheckRange"></td>
                            <td><input value="ft_20" v-model="val_1" type="checkbox" :disabled="disable" v-on:click="CheckRange"></td>
                            <td>.</td>
                            <td>.</td>
                        </tr>
                        <tr>
                            <td>FM 23 (Raw Material Offloading)</td>
                            <td><input value="fm_23" v-model="val_1" type="checkbox" :disabled="disable" v-on:click="CheckRange"></td>
                            <td><input value="ft_23" v-model="val_1" type="checkbox" :disabled="disable" v-on:click="CheckRange"></td>
                            <td><input value="fm23_den" v-model="val_1" type="checkbox" :disabled="disable" v-on:click="CheckRange"></td>
                            <td><input value="fm23_temp" v-model="val_1" type="checkbox" :disabled="disable" v-on:click="CheckRange"></td>
                        </tr>
                        <tr>
                            <td>FM 24 (Raw Metarial to Settling Tank)</td>
                            <td><input value="fm_24" v-model="val_1" type="checkbox" :disabled="disable" v-on:click="CheckRange"></td>
                            <td><input value="ft_24" v-model="val_1" type="checkbox" :disabled="disable" v-on:click="CheckRange"></td>
                            <td>.</td>
                            <td>.</td>
                        </tr>
                        <tr>
                            <td>
                                FM 25 (Settling Tank to D101)
                            </td>
                            <td><input value="fm_25" v-model="val_1" type="checkbox" :disabled="disable" v-on:click="CheckRange"></td>
                            <td><input value="ft_25" v-model="val_1" type="checkbox" :disabled="disable" v-on:click="CheckRange"></td>
                            <td>.</td>
                            <td>.</td>
                        </tr>
                        
                    </table>
                    <table class="table table-style-me" style="display:inline-table;width:17%; text-align: center; color: white;">
                        <tr style="border: none">

                            <th colspan="5"> <h6>Methanol</h6></th>
                        </tr>
                        <tr style="background-color:#4a4a4a;">
                            <th>Name</th>
                            <th>level</th>
                            <th>Vol</th>
                            <th>Temp</th>
                            <th>Pr</th>
                        </tr>
                        <tr>
                            <td>E401</td>
                            <td><input value="dpl_2" v-model="val_1" type="checkbox" :disabled="disable" v-on:click="CheckRange"></td>
                            <td><input value="vd_2" v-model="val_1" type="checkbox" :disabled="disable" v-on:click="CheckRange"></td>
                            <td> <input value="rtd_17" v-model="val_1" type="checkbox" :disabled="disable" v-on:click="CheckRange"></td>
                            <td>.</td>
                        </tr>
                        <tr>
                            <td>Green</td>
                            <td><input value="rdl_1" v-model="val_1" type="hidden"></td>
                            <td><input value="rdl_1" v-model="val_1" type="hidden"></td>
                            <td> <input value="rtd_19" v-model="val_1" type="checkbox" :disabled="disable" v-on:click="CheckRange"></td>
                            <td>.</td>
                        </tr>
                        <tr>
                            <td>Old Green</td>
                            <td> <input value="rdl_1" v-model="val_1" type="hidden"></td>
                            <td> <input value="rdl_1" v-model="val_1" type="hidden"></td>
                            <td> <input value="rtd_20" v-model="val_1" type="checkbox" :disabled="disable" v-on:click="CheckRange"></td>
                                        <td>.</td>
                        </tr>
                        <tr>
                            <td>Blue</td>
                            <td><input value="rdl_1" v-model="val_1" type="hidden"></td>
                            <td><input value="rdl_1" v-model="val_1" type="hidden"></td>
                            <td><input value="rtd_18" v-model="val_1" type="checkbox" :disabled="disable" v-on:click="CheckRange"></td>
                                    <td>.</td>
                        </tr>
                        <tr>
                            <td>E601</td>
                            <td><input value="rdl_1" v-model="val_1" type="hidden"></td>
                            <td><input value="rdl_1" v-model="val_1" type="hidden"></td>
                            <td><input value="rtd_21" v-model="val_1" type="checkbox" :disabled="disable" v-on:click="CheckRange"></td>
                                    <td>.</td>
                        </tr>
                        <tr>
                            <td>T601</td>
                            <td><input value="dpl_3" v-model="val_1" type="checkbox" :disabled="disable" v-on:click="CheckRange"></td>
                            <td><input value="vd_3" v-model="val_1" type="checkbox" :disabled="disable" v-on:click="CheckRange"></td>
                            <td><input value="rdl_1" v-model="val_1" type="hidden"></td>
                                    <td><input value="pt_4" v-model="val_1" type="checkbox" :disabled="disable" v-on:click="CheckRange"></td>
                        </tr>
                        <tr>
                            <td>T601 T</td>
                            <td><input value="rdl_1" v-model="val_1" type="hidden"></td>
                            <td><input value="rdl_1" v-model="val_1" type="hidden"></td>
                            <td><input value="rtd_22" v-model="val_1" type="checkbox" :disabled="disable" v-on:click="CheckRange"></td>
                                    <td>.</td>
                        </tr>
                        <tr>
                            <td>T601 M</td>
                            <td><input value="rdl_1" type="hidden"></td>
                            <td><input value="rdl_1" type="hidden"></td>
                            <td><input value="rtd_23" v-model="val_1" type="checkbox" :disabled="disable" v-on:click="CheckRange"></td>
                                    <td>.</td>
                        </tr>
                        <tr>
                            <td>T601 B</td>
                            <td><input value="" type="hidden"></td>
                            <td><input value="" type="hidden"></td>
                            <td><input value="rtd_24" v-model="val_1" type="checkbox" :disabled="disable" v-on:click="CheckRange"></td>
                                    <td>.</td>
                        </tr>
                        <tr>
                            <td>Methnol 1</td>
                            <td><input value="rdl_16" v-model="val_1" type="checkbox" :disabled="disable" v-on:click="CheckRange"></td>
                            <td><input value="vr_16" v-model="val_1" type="checkbox" :disabled="disable" v-on:click="CheckRange"></td>
                            <td><input value="rdl_1" v-model="val_1" type="hidden"></td>
                                    <td>.</td>
                        </tr>
                        <tr>
                            <td>Methnol 2</td>
                            <td><input value="rdl_19" v-model="val_1" type="checkbox" :disabled="disable" v-on:click="CheckRange"></td>
                            <td><input value="vr_19" v-model="val_1" type="checkbox" :disabled="disable" v-on:click="CheckRange"></td>
                            <td><input value="rdl_1" v-model="val_1" type="hidden"></td>
                                    <td>.</td>
                        </tr>
                        <tr><td>GLV Cond</td><td></td><td></td><td></td><td><input value="pt_2" v-model="val_1" type="checkbox" :disabled="disable" v-on:click="CheckRange"></td></tr>
                        <tr><td>.</td><td></td><td></td><td></td><td>.</td></tr>
                        <tr><td>.</td><td></td><td></td><td></td><td>.</td></tr>
                        <tr><td>.</td><td></td><td></td><td></td><td>.</td></tr>
                        <tr><td>.</td><td></td><td></td><td></td><td>.</td></tr>
                        <tr><td>.</td><td></td><td></td><td></td><td>.</td></tr>
                        <tr><td>.</td><td></td><td></td><td></td><td>.</td></tr>
                        <tr><td>.</td><td></td><td></td><td></td><td>.</td></tr>
                        <tr><td>.</td><td></td><td></td><td></td><td>.</td></tr>
                        <tr><td>.</td><td></td><td></td><td></td><td>.</td></tr>
                        <tr><td>.</td><td></td><td></td><td></td><td>.</td></tr>
                        <tr><td>.</td><td></td><td></td><td></td><td>.</td></tr>
                        <tr style="background-color:#4a4a4a;">
                            <th>Name</th>
                            <th>Flow</th>
                            <th>Total</th>
                            <th>Density</th>
                            <th>Temp</th>
                        </tr>
                        <tr>
                            <td>FM 14 (D403 into T601)</td>
                            <td><input value="fm_14" v-model="val_1" type="checkbox" :disabled="disable" v-on:click="CheckRange"></td>
                            <td><input value="ft_14" v-model="val_1" type="checkbox" :disabled="disable" v-on:click="CheckRange"></td>
                            <td><input value="fm14_den" v-model="val_1" type="checkbox" :disabled="disable" v-on:click="CheckRange"></td>
                            <td><input value="fm14_temp" v-model="val_1" type="checkbox" :disabled="disable" v-on:click="CheckRange"></td>
                        </tr>
                        <tr>
                            <td>FM 15 (T601 to D602)</td>
                            <td><input value="fm_15" v-model="val_1" type="checkbox" :disabled="disable" v-on:click="CheckRange"></td>
                            <td><input value="ft_15" v-model="val_1" type="checkbox" :disabled="disable" v-on:click="CheckRange"></td>
                            <td><input value="fm15_den" v-model="val_1" type="checkbox" :disabled="disable" v-on:click="CheckRange"></td>
                            <td><input value="fm15_temp" v-model="val_1" type="checkbox" :disabled="disable" v-on:click="CheckRange"></td>
                        </tr>
                        <tr>
                            <td>FM 16 (T601 to Reflux)</td>
                            <td><input value="fm_16" v-model="val_1" type="checkbox" :disabled="disable" v-on:click="CheckRange"></td>
                            <td><input value="ft_16" v-model="val_1" type="checkbox" :disabled="disable" v-on:click="CheckRange"></td>
                            <td>.</td>
                            <td>.</td>
                        </tr>
                        <tr>
                            <td>FM 17 (T601 Drain)</td>
                            <td><input value="fm_17" v-model="val_1" type="checkbox" :disabled="disable" v-on:click="CheckRange"></td>
                            <td><input value="ft_17" v-model="val_1" type="checkbox" :disabled="disable" v-on:click="CheckRange"></td>
                            <td><input value="fm17_den" v-model="val_1" type="checkbox" :disabled="disable" v-on:click="CheckRange"></td>
                            <td><input value="fm17_temp" v-model="val_1" type="checkbox" :disabled="disable" v-on:click="CheckRange"></td>
                        </tr>
                        <tr>
                            <td>FM 7 (D602to Methanol Storage Tank)</td>
                            <td><input value="fm_7" v-model="val_1" type="checkbox" :disabled="disable" v-on:click="CheckRange"></td>
                            <td><input value="ft_7" v-model="val_1" type="checkbox" :disabled="disable" v-on:click="CheckRange"></td>
                            <td><input value="fm7_den" v-model="val_1" type="checkbox" :disabled="disable" v-on:click="CheckRange"></td>
                            <td><input value="fm7_temp" v-model="val_1" type="checkbox" :disabled="disable" v-on:click="CheckRange"></td>
                        </tr>
                        <tr>
                            <td>FM 45 (Methanol Transfer)</td>
                            <td><input value="fm_45" v-model="val_1" type="checkbox" :disabled="disable" v-on:click="CheckRange"></td>
                            <td><input value="ft_45" v-model="val_1" type="checkbox" :disabled="disable" v-on:click="CheckRange"></td>
                            <td><input value="fm45_den" v-model="val_1" type="checkbox" :disabled="disable" v-on:click="CheckRange"></td>
                            <td><input value="fm45_temp" v-model="val_1" type="checkbox" :disabled="disable" v-on:click="CheckRange"></td>
                        </tr>
                    </table>
                    <table class="table table-style-me" style="display:inline-table;width:17%; text-align: center; color: white;">
                        <tr style="border: none">

                            <th colspan="5"> <h6>Trans Esterification</h6></th>
                        </tr>
                        <tr style="background-color:#4a4a4a;">
                            <th>Name</th>
                            <th>level</th>
                            <th>Vol</th>
                            <th>Temp</th>
                            <th>Pr</th>
                        </tr>
                        <tr>
                            <td>D405 A</td>
                            <td><input value="rdl_3" v-model="val_1" type="checkbox" :disabled="disable" v-on:click="CheckRange"></td>
                            <td><input value="vr_3" v-model="val_1" type="checkbox" :disabled="disable" v-on:click="CheckRange"></td>
                            <td><input value="rdl_1" v-model="val_1" type="hidden"></td>
                            <td>.</td>
                        </tr>
                        <tr>
                            <td>D405 B</td>
                            <td><input value="rdl_4" v-model="val_1" type="checkbox" :disabled="disable" v-on:click="CheckRange"></td>
                            <td><input value="vr_4" v-model="val_1" type="checkbox" :disabled="disable" v-on:click="CheckRange"></td>
                            <td><input value="rdl_1" v-model="val_1" type="hidden"></td>
                            <td>.</td>
                        </tr>
                        <tr>
                            <td>D405 C</td>
                            <td> <input value="rdl_5" v-model="val_1" type="checkbox" :disabled="disable" v-on:click="CheckRange"></td>
                            <td> <input value="vr_5" v-model="val_1" type="checkbox" :disabled="disable" v-on:click="CheckRange"></td>
                            <td> <input value="rdl_1" v-model="val_1" type="hidden"></td>
                            <td>.</td>
                        </tr>
                        <tr>
                            <td>Trans Reac</td>
                            <td><input value="" type="hidden"></td>
                            <td><input value="" type="hidden"></td>
                            <td> <input value="rtd_35" v-model="val_1" type="checkbox" :disabled="disable" v-on:click="CheckRange"></td>
                            <td><input value="pt_3" v-model="val_1" type="checkbox" :disabled="disable" v-on:click="CheckRange"></td>
                        </tr>
                        <tr>
                            <td>C401 A</td>
                            <td><input value="rdl_6" v-model="val_1" type="checkbox" :disabled="disable" v-on:click="CheckRange"></td>
                            <td><input value="vr_6" v-model="val_1" type="checkbox" :disabled="disable" v-on:click="CheckRange"></td>
                            <td><input value="rdl_1" v-model="val_1" type="hidden"></td>
                            <td>.</td>
                        </tr>
                        <tr>
                            <td>C401 B</td>
                            <td><input value="rdl_7" v-model="val_1" type="checkbox" :disabled="disable" v-on:click="CheckRange"></td>
                            <td><input value="vr_7" v-model="val_1" type="checkbox" :disabled="disable" v-on:click="CheckRange"></td>
                            <td><input value="rdl_1" v-model="val_1" type="hidden"></td>
                            <td>.</td>
                        </tr>
                        <tr>
                            <td>E401</td>
                            <td><input value="dpl_2" v-model="val_1" type="checkbox" :disabled="disable" v-on:click="CheckRange"></td>
                            <td><input value="vd_2" v-model="val_1" type="checkbox" :disabled="disable" v-on:click="CheckRange"></td>
                            <td><input value="rtd_17" v-model="val_1" type="checkbox" :disabled="disable" v-on:click="CheckRange"></td>
                            <td>.</td>
                        </tr>
                        <tr>
                            <td>Hot Water</td>
                            <td><input value="rdl_1" v-model="val_1" type="hidden"></td>
                            <td><input value="rdl_1" v-model="val_1" type="hidden"></td>
                            <td><input value="rtd_12" v-model="val_1" type="checkbox" :disabled="disable" v-on:click="CheckRange"></td>
                            <td>.</td>
                        </tr>
                        <tr>
                            <td>D402 A</td>
                            <td><input value="rdl_8" v-model="val_1" type="checkbox" :disabled="disable" v-on:click="CheckRange"> </td>
                            <td><input value="vr_8" v-model="val_1" type="checkbox" :disabled="disable" v-on:click="CheckRange"> </td>
                            <td><input value="rtd_13" v-model="val_1" type="checkbox" :disabled="disable" v-on:click="CheckRange"></td>
                            <td>.</td>
                        </tr>
                        <tr>
                            <td>D402 B</td>
                            <td> <input value="rdl_9" v-model="val_1" type="checkbox" :disabled="disable" v-on:click="CheckRange"></td>
                            <td> <input value="vr_9" v-model="val_1" type="checkbox" :disabled="disable" v-on:click="CheckRange"></td>
                            <td> <input value="rtd_14" v-model="val_1" type="checkbox" :disabled="disable" v-on:click="CheckRange"></td>
                            <td>.</td>
                        </tr>
                        <tr>
                            <td>D402 C</td>
                            <td><input value="rdl_10" v-model="val_1" type="checkbox" :disabled="disable" v-on:click="CheckRange"></td>
                            <td><input value="vr_10" v-model="val_1" type="checkbox" :disabled="disable" v-on:click="CheckRange"></td>
                            <td><input value="rtd_15" v-model="val_1" type="checkbox" :disabled="disable" v-on:click="CheckRange"></td>
                            <td>.</td>
                        </tr>
                        <tr><td>D402 D</td>
                            <td><input value="rdl_11" v-model="val_1" type="checkbox" :disabled="disable" v-on:click="CheckRange"></td>
                            <td><input value="vr_11" v-model="val_1" type="checkbox" :disabled="disable" v-on:click="CheckRange"></td>
                            <td><input value="rtd_16" v-model="val_1" type="checkbox" :disabled="disable" v-on:click="CheckRange"></td>
                            <td>.</td>
                            </tr>
                        <tr>
                            <td>SP 1</td>
                            <td><input value="rdl_20" v-model="val_1" type="checkbox" :disabled="disable" v-on:click="CheckRange"></td>
                            <td><input value="vr_20" v-model="val_1" type="checkbox" :disabled="disable" v-on:click="CheckRange"></td>
                            <td><input value="rdl_1" v-model="val_1" type="hidden"></td>
                            <td>.</td>
                        </tr>
                        <tr>
                            <td>SP 2</td>
                            <td><input value="rdl_21" v-model="val_1" type="checkbox" :disabled="disable" v-on:click="CheckRange"></td>
                            <td><input value="vr_21" v-model="val_1" type="checkbox" :disabled="disable" v-on:click="CheckRange"></td>
                            <td>.</td>
                            <td>.</td>
                        </tr>
                        <tr>
                            <td>SP 3</td>
                            <td><input value="rdl_22" v-model="val_1" type="checkbox" :disabled="disable" v-on:click="CheckRange"></td>
                            <td><input value="vr_22" v-model="val_1" type="checkbox" :disabled="disable" v-on:click="CheckRange"></td>
                            <td>.</td>
                            <td>.</td>
                        </tr>
                        <tr><td>.</td><td></td><td></td><td></td><td>.</td></tr>
                        <tr><td>.</td><td></td><td></td><td></td><td>.</td></tr>
                        <tr><td>.</td><td></td><td></td><td></td><td>.</td></tr>
                        <tr><td>.</td><td></td><td></td><td></td><td>.</td></tr>
                        <tr><td>.</td><td></td><td></td><td></td><td>.</td></tr>
                        <tr><td>.</td><td></td><td></td><td></td><td>.</td></tr>
                        <tr><td>.</td><td></td><td></td><td></td><td>.</td></tr>
                        <tr><td>.</td><td></td><td></td><td></td><td>.</td></tr>
                        <tr style="background-color:#4a4a4a;">
                            <th>Name</th>
                            <th>Flow</th>
                            <th>Total</th>
                            <th>Density</th>
                            <th>temp</th>
                        </tr>
                        <tr>
                            <td>FM 21 (Methanol into Trans)</td>
                            <td><input value="fm_21" v-model="val_1" type="checkbox" :disabled="disable" v-on:click="CheckRange"></td>
                            <td><input value="ft_21" v-model="val_1" type="checkbox" :disabled="disable" v-on:click="CheckRange"></td>
                            <td>.</td>
                            <td>.</td>
                        </tr>
                        <tr>
                            <td>FM 1(Trans Oil)</td>
                            <td><input value="fm_1" v-model="val_1" type="checkbox" :disabled="disable" v-on:click="CheckRange"></td>
                            <td><input value="ft_1" v-model="val_1" type="checkbox" :disabled="disable" v-on:click="CheckRange"></td>
                            <td><input value="fm1_den" v-model="val_1" type="checkbox" :disabled="disable" v-on:click="CheckRange"></td>
                            <td><input value="fm1_temp" v-model="val_1" type="checkbox" :disabled="disable" v-on:click="CheckRange"></td>
                        </tr>
                        <tr>
                            <td>FM 2( Alkali Trans)</td>
                            <td><input value="fm_2" v-model="val_1" type="checkbox" :disabled="disable" v-on:click="CheckRange"></td>
                            <td><input value="ft_2" v-model="val_1" type="checkbox" :disabled="disable" v-on:click="CheckRange"></td>
                            <td><input value="fm2_den" v-model="val_1" type="checkbox" :disabled="disable" v-on:click="CheckRange"></td>
                            <td><input value="fm2_temp" v-model="val_1" type="checkbox" :disabled="disable" v-on:click="CheckRange"></td>
                        </tr>
                        <tr>
                            <td>FM 3 (Trans Evaporator to NI)</td>
                            <td><input value="fm_3" v-model="val_1" type="checkbox" :disabled="disable" v-on:click="CheckRange"></td>
                            <td><input value="ft_3" v-model="val_1" type="checkbox" :disabled="disable" v-on:click="CheckRange"></td>
                            <td><input value="fm3_den" v-model="val_1" type="checkbox" :disabled="disable" v-on:click="CheckRange"></td>
                            <td><input value="fm3_temp" v-model="val_1" type="checkbox" :disabled="disable" v-on:click="CheckRange"></td>
                        </tr>
                        <tr>
                            <td>FM 4 (Water N1)</td>
                            <td><input value="fm_4" v-model="val_1" type="checkbox" :disabled="disable" v-on:click="CheckRange"></td>
                            <td><input value="ft_4" v-model="val_1" type="checkbox" :disabled="disable" v-on:click="CheckRange"></td>
                            <td>.</td>
                            <td>.</td>
                        </tr>
                        <tr>
                            <td>FM 5 (N2 to D402)</td>
                            <td><input value="fm_5" v-model="val_1" type="checkbox" :disabled="disable" v-on:click="CheckRange"></td>
                            <td><input value="ft_5" v-model="val_1" type="checkbox" :disabled="disable" v-on:click="CheckRange"></td>
                            <td><input value="fm5_den" v-model="val_1" type="checkbox" :disabled="disable" v-on:click="CheckRange"></td>
                            <td><input value="fm5_temp" v-model="val_1" type="checkbox" :disabled="disable" v-on:click="CheckRange"></td>
                        </tr>
                        <tr>
                            <td>FM 6 (N3 to Slag pool)</td>
                            <td><input value="fm_6" v-model="val_1" type="checkbox" :disabled="disable" v-on:click="CheckRange"></td>
                            <td><input value="ft_6" v-model="val_1" type="checkbox" :disabled="disable" v-on:click="CheckRange"></td>
                            <td><input value="fm6_den" v-model="val_1" type="checkbox" :disabled="disable" v-on:click="CheckRange"></td>
                            <td><input value="fm6_temp" v-model="val_1" type="checkbox" :disabled="disable" v-on:click="CheckRange"></td>
                        </tr>
                         <tr>
                            <td>FM 66 (Milky)</td>
                            <td><input value="fm_66" v-model="val_1" type="checkbox" :disabled="disable" v-on:click="CheckRange"></td>
                            <td><input value="ft_66" v-model="val_1" type="checkbox" :disabled="disable" v-on:click="CheckRange"></td>
                            <td>.</td>
                            <td>.</td>
                        </tr>
                    </table>
                    <table class="table table-style-me" style="display:inline-table;width:17%; text-align: center; color: white;">
                        <tr style="border: none">

                            <th colspan="5"> <h6>Distillation</h6></th>
                        </tr>
                        <tr style="background-color:#4a4a4a;">
                            <th>Name</th>
                            <th>level</th>
                            <th>Vol</th>
                            <th>Temp</th>
                            <th>Pr</th>
                        </tr>
                        <tr>
                            <td>D402 A</td>
                            <td><input value="rdl_8" v-model="val_1" type="checkbox" :disabled="disable" v-on:click="CheckRange"></td>
                            <td><input value="vr_8" v-model="val_1" type="checkbox" :disabled="disable" v-on:click="CheckRange"></td>
                            <td><input value="rtd_13" v-model="val_1" type="checkbox" :disabled="disable" v-on:click="CheckRange"></td>
                            <td>.</td>
                        </tr>
                        <tr>
                            <td>D402 B</td>
                            <td><input value="rdl_9" v-model="val_1" type="checkbox" :disabled="disable" v-on:click="CheckRange"></td>
                            <td><input value="vr_9" v-model="val_1" type="checkbox" :disabled="disable" v-on:click="CheckRange"></td>
                            <td> <input value="rtd_14" v-model="val_1" type="checkbox" :disabled="disable" v-on:click="CheckRange"></td>
                            <td>.</td>
                        </tr>
                        <tr>
                            <td>D402 C</td>
                            <td> <input value="rdl_10" v-model="val_1" type="checkbox" :disabled="disable" v-on:click="CheckRange"></td>
                            <td> <input value="vr_10" v-model="val_1" type="checkbox" :disabled="disable" v-on:click="CheckRange"></td>
                            <td> <input value="rtd_15" v-model="val_1" type="checkbox" :disabled="disable" v-on:click="CheckRange"></td>
                            <td>.</td>
                        </tr>
                        <tr>
                            <td>D402 D</td>
                            <td><input value="rdl_11" v-model="val_1" type="checkbox" :disabled="disable" v-on:click="CheckRange"></td>
                            <td><input value="vr_11" v-model="val_1" type="checkbox" :disabled="disable" v-on:click="CheckRange"></td>
                            <td> <input value="rtd_16" v-model="val_1" type="checkbox" :disabled="disable" v-on:click="CheckRange"></td>
                            <td>.</td>
                        </tr>
                        <tr>
                            <td>E501</td>
                            <td><input value="rdl_1" v-model="val_1" type="hidden"></td>
                            <td><input value="rdl_1" v-model="val_1" type="hidden"></td>
                            <td><input value="rtd_25" v-model="val_1" type="checkbox" :disabled="disable" v-on:click="CheckRange"></td>
                            <td>.</td>
                        </tr>
                        <tr>
                            <td>D501</td>
                            <td><input value="dpl_1" v-model="val_1" type="checkbox" :disabled="disable" v-on:click="CheckRange"></td>
                            <td><input value="vd_1" v-model="val_1" type="checkbox" :disabled="disable" v-on:click="CheckRange"></td>
                            <td><input value="rtd_26" v-model="val_1" type="checkbox" :disabled="disable" v-on:click="CheckRange"></td>
                            <td>.</td>
                        </tr>
                        <tr>
                            <td>T501</td>
                            <td><input value="dpl_6" v-model="val_1" type="checkbox" :disabled="disable" v-on:click="CheckRange"></td>
                            <td><input value="vd_6" v-model="val_1" type="checkbox" :disabled="disable" v-on:click="CheckRange"></td>
                            <td><input value="" v-model="val_1" type="hidden"></td>
                            <td>.</td>
                        </tr>
                        <tr>
                            <td>D503</td>
                            <td><input value="dpl_4" v-model="val_1" type="checkbox" :disabled="disable" v-on:click="CheckRange"></td>
                            <td><input value="vd_4" v-model="val_1" type="checkbox" :disabled="disable" v-on:click="CheckRange"></td>
                            <td><input value="" v-model="val_1" type="hidden"></td>
                            <td>.</td>
                        </tr>
                        <tr>
                            <td>T501 T</td>
                            <td><input value="rdl_1" v-model="val_1" type="hidden"></td>
                            <td><input value="rdl_1" v-model="val_1" type="hidden"></td>
                            <td><input value="rtd_27" v-model="val_1" type="checkbox" :disabled="disable" v-on:click="CheckRange"></td>
                            <td>.</td>
                        </tr>
                        <tr>
                            <td>T501 M</td>
                            <td><input value="rdl_1" v-model="val_1" type="hidden"></td>
                            <td><input value="rdl_1" v-model="val_1" type="hidden"></td>
                            <td><input value="rtd_28" v-model="val_1" type="checkbox" :disabled="disable" v-on:click="CheckRange"></td>
                            <td>.</td>
                        </tr>
                        <tr>
                            <td>T501 B</td>
                            <td><input value="rdl_1" v-model="val_1" type="hidden"></td>
                            <td><input value="rdl_1" v-model="val_1" type="hidden"></td>
                            <td><input value="rtd_29" v-model="val_1" type="checkbox" :disabled="disable" v-on:click="CheckRange"></td>
                            <td>.</td>
                        </tr>
                        <tr>
                            <td>T502 B</td>
                            <td><input value="dpl_7" v-model="val_1" type="checkbox" :disabled="disable" v-on:click="CheckRange"></td>
                            <td><input value="vd_7" v-model="val_1" type="checkbox" :disabled="disable" v-on:click="CheckRange"></td>
                            <td><input value="" v-model="val_1" type="hidden"></td>
                            <td>.</td>
                        </tr>
                        <tr>
                            <td>D504</td>
                            <td><input value="dpl_5" v-model="val_1" type="checkbox" :disabled="disable" v-on:click="CheckRange"></td>
                            <td><input value="vd_5" v-model="val_1" type="checkbox" :disabled="disable" v-on:click="CheckRange"></td>
                            <td><input value="rdl_1" v-model="val_1" type="hidden"></td>
                            <td>.</td>
                        </tr>
                        <tr>
                            <td>T504 M</td>
                            <td><input value="rdl_1" v-model="val_1" type="hidden"></td>
                            <td><input value="rdl_1" v-model="val_1" type="hidden"></td>
                            <td><input value="rtd_30" v-model="val_1" type="checkbox" :disabled="disable" v-on:click="CheckRange"></td>
                            <td>.</td>
                        </tr>
                        <tr>
                            <td>T502 B</td>
                            <td><input value="rdl_1" v-model="val_1" type="hidden"></td>
                            <td><input value="rdl_1" v-model="val_1" type="hidden"></td>
                            <td><input value="rtd_31" v-model="val_1" type="checkbox" :disabled="disable" v-on:click="CheckRange"></td>
                            <td>.</td>
                        </tr>
                        <tr>
                            <td>Bio Trans</td>
                            <td><input value="rdl_1" v-model="val_1" type="hidden"></td>
                            <td><input value="rdl_1" v-model="val_1" type="hidden"></td>
                            <td> <input value="rdl_1" v-model="val_1" type="hidden"></td>
                            <td>.</td>
                        </tr>
                        <tr>
                            <td> Bio Store</td>
                            <td> <input value="dpl_8" v-model="val_1" type="checkbox" :disabled="disable" v-on:click="CheckRange"></td>
                            <td> <input value="vd_8" v-model="val_1" type="checkbox" :disabled="disable" v-on:click="CheckRange"></td>
                            <td> <input value="rtd_36" v-model="val_1" type="checkbox" :disabled="disable" v-on:click="CheckRange"></td>
                            <td>.</td>
                        </tr>
                        <tr>
                            <td>Tar Tank</td>
                            <td> <input value="rdl_1" v-model="val_1" type="hidden"></td>
                            <td> <input value="rdl_1" v-model="val_1" type="hidden"></td>
                            <td> <input value="rdl_1" v-model="val_1" type="hidden"></td>
                            <td>.</td>
                        </tr>
                        <tr>
                            <td>Vac Line</td>
                            <td><input value="vg_1" v-model="val_1" type="checkbox"></td>
                            <td></td>
                            <td></td>
                            <td>.</td>
                        </tr>
                        <tr><td>.</td><td></td><td></td><td></td><td>.</td></tr>
                        <tr><td>.</td><td></td><td></td><td></td><td>.</td></tr>
                        <tr><td>.</td><td></td><td></td><td></td><td>.</td></tr>
                        <tr><td>.</td><td></td><td></td><td></td><td>.</td></tr>

                        <tr style="background-color:#4a4a4a;">
                            <th>Name</th>
                            <th>Flow</th>
                            <th>Total</th>
                            <th>Density</th>
                            <th>Temp</th>
                        </tr>
                        <tr>
                            <td>FM 8 (D402-D501)</td>
                            <td><input value="fm_8" v-model="val_1" type="checkbox" :disabled="disable" v-on:click="CheckRange"></td>
                            <td><input value="ft_8" v-model="val_1" type="checkbox" :disabled="disable" v-on:click="CheckRange"></td>
                            <td><input value="fm8_den" v-model="val_1" type="checkbox" :disabled="disable" v-on:click="CheckRange"></td>
                            <td><input value="fm8_temp" v-model="val_1" type="checkbox" :disabled="disable" v-on:click="CheckRange"></td>
                        </tr>
                        <tr>
                            <td>FM 9 (D501-T501)</td>
                            <td><input value="fm_9" v-model="val_1" type="checkbox" :disabled="disable" v-on:click="CheckRange"></td>
                            <td><input value="ft_9" v-model="val_1" type="checkbox" :disabled="disable" v-on:click="CheckRange"></td>
                            <td><input value="fm9_den" v-model="val_1" type="checkbox" :disabled="disable" v-on:click="CheckRange"></td>
                            <td><input value="fm9_temp" v-model="val_1" type="checkbox" :disabled="disable" v-on:click="CheckRange"></td>
                        </tr>
                        <tr>
                            <td>FM 10 (T501-T502)</td>
                            <td><input value="fm_10" v-model="val_1" type="checkbox" :disabled="disable" v-on:click="CheckRange"></td>
                            <td><input value="ft_10" v-model="val_1" type="checkbox" :disabled="disable" v-on:click="CheckRange"></td>
                            <td><input value="fm10_den" v-model="val_1" type="checkbox" :disabled="disable" v-on:click="CheckRange"></td>
                            <td><input value="fm10_temp" v-model="val_1" type="checkbox" :disabled="disable" v-on:click="CheckRange"></td>
                        </tr>
                        <tr>
                            <td>FM 12 (Recycle to D405 Line)</td>
                            <td><input value="fm_12" v-model="val_1" type="checkbox" :disabled="disable" v-on:click="CheckRange"></td>
                            <td><input value="ft_12" v-model="val_1" type="checkbox" :disabled="disable" v-on:click="CheckRange"></td>
                            <td><input value="fm12_den" v-model="val_1" type="checkbox" :disabled="disable" v-on:click="CheckRange"></td>
                            <td><input value="fm12_temp" v-model="val_1" type="checkbox" :disabled="disable" v-on:click="CheckRange"></td>
                        </tr>
                        <tr>
                            <td>FM 11 (Tar Transfer)</td>
                            <td><input value="fm_11" v-model="val_1" type="checkbox" :disabled="disable" v-on:click="CheckRange"></td>
                            <td><input value="ft_11" v-model="val_1" type="checkbox" :disabled="disable" v-on:click="CheckRange"></td>
                            <td><input value="fm11_den" v-model="val_1" type="checkbox" :disabled="disable" v-on:click="CheckRange"></td>
                            <td><input value="fm11_temp" v-model="val_1" type="checkbox" :disabled="disable" v-on:click="CheckRange"></td>
                        </tr>
                        <tr>
                            <td>FM 13 (Biodiesel to Storage)</td>
                            <td><input value="fm_13" v-model="val_1" type="checkbox" :disabled="disable" v-on:click="CheckRange"></td>
                            <td><input value="ft_13" v-model="val_1" type="checkbox" :disabled="disable" v-on:click="CheckRange"></td>
                            <td><input value="fm13_den" v-model="val_1" type="checkbox" :disabled="disable" v-on:click="CheckRange"></td>
                            <td><input value="fm13_temp" v-model="val_1" type="checkbox" :disabled="disable" v-on:click="CheckRange"></td>
                        </tr>
                        <tr>
                            <td>FM 22 (Biodiesel Storage to Truck)</td>
                            <td><input value="fm_22" v-model="val_1" type="checkbox" :disabled="disable" v-on:click="CheckRange"></td>
                            <td><input value="ft_22" v-model="val_1" type="checkbox" :disabled="disable" v-on:click="CheckRange"></td>
                            <td><input value="fm22_den" v-model="val_1" type="checkbox" :disabled="disable" v-on:click="CheckRange"></td>
                            <td><input value="fm22_temp" v-model="val_1" type="checkbox" :disabled="disable" v-on:click="CheckRange"></td>
                        </tr>
                        <tr>
                            <td>FM 62 (RVP)</td>
                            <td><input value="fm_62" v-model="val_1" type="checkbox" :disabled="disable" v-on:click="CheckRange"></td>
                            <td><input value="ft_62" v-model="val_1" type="checkbox" :disabled="disable" v-on:click="CheckRange"></td>
                            <td>.</td>
                            <td>.</td>
                        </tr>
                    </table>
                    <table class="table table-style-me" style="display:inline-table;width:17%; text-align: center; color: white;">
                        <tr style="border: none">

                            <th colspan="5"> <h6>Utilities</h6></th>
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
                            <td> </td>
                            <td> <input value="pt_5" v-model="val_1" type="checkbox" :disabled="disable" v-on:click="CheckRange"></td>
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
                        <tr class="custom-tr" style="background-color:#4a4a4a;">
                            <th>Main</th>
                            <th>Flow</th>
                            <th>Tot</th>
                            <th>Tmp</th>
                            <th>Pr</th>
                        </tr>
                        <tr>
                            <td>Steam</td>
                            <td><input value="st_fm2_flow" v-model="val_1" type="checkbox" :disabled="disable" v-on:click="CheckRange"></td>
                            <td><input value="stfm2_flow_tot" v-model="val_1" type="checkbox" :disabled="disable" v-on:click="CheckRange"></td>
                            <td><input value="stfm2_temp" v-model="val_1" type="checkbox" :disabled="disable" v-on:click="CheckRange"></td>
                            <td><input value="stfm2_pressure" v-model="val_1" type="checkbox" :disabled="disable" v-on:click="CheckRange"></td>
                        </tr>
                        <tr>
                            <td>E401</td>
                            <td><input value="st_fm1_flow" v-model="val_1" type="checkbox" :disabled="disable" v-on:click="CheckRange"></td>
                            <td><input value="stfm1_flow_tot" v-model="val_1" type="checkbox" :disabled="disable" v-on:click="CheckRange"></td>
                            <td><input value="stfm1_temp" v-model="val_1" type="checkbox" :disabled="disable" v-on:click="CheckRange"></td>
                            <td><input value="stfm1_pressure" v-model="val_1" type="checkbox" :disabled="disable" v-on:click="CheckRange"></td>
                            
                        </tr>
                        <tr>
                            <td>.</td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td>.</td>
                        </tr>
                        <tr><td>.</td><td></td><td></td><td></td><td>.</td></tr>
                        <tr><td>.</td><td></td><td></td><td></td><td>.</td></tr>
                        <tr><td>.</td><td></td><td></td><td></td><td>.</td></tr>
                        <tr><td>.</td><td></td><td></td><td></td><td>.</td></tr>
                        <tr><td>.</td><td></td><td></td><td></td><td>.</td></tr>
                        <tr><td>.</td><td></td><td></td><td></td><td>.</td></tr>
                        <tr><td>.</td><td></td><td></td><td></td><td>.</td></tr>
                        <tr><td>.</td><td></td><td></td><td></td><td>.</td></tr>
                        <tr><td>.</td><td></td><td></td><td></td><td>.</td></tr>
                        <tr><td>.</td><td></td><td></td><td></td><td>.</td></tr>
                        <tr><td>.</td><td></td><td></td><td></td><td>.</td></tr>
                        <tr><td>.</td><td></td><td></td><td></td><td>.</td></tr>

                        <tr style="background-color:#4a4a4a;">
                            <th>Name</th>
                            <th>Flow</th>
                            <th>Total</th>
                            <th>Density</th>
                            <th>Temp</th>
                        </tr>
                        <tr>
                            <td>FM 26 (CT Outlet)</td>
                            <td><input value="fm_26" v-model="val_1" type="checkbox" :disabled="disable" v-on:click="CheckRange"></td>
                            <td><input value="ft_26" v-model="val_1" type="checkbox" :disabled="disable" v-on:click="CheckRange"></td>
                            <td>.</td>
                            <td>.</td>
                        </tr>
                        <tr>
                            <td>FM 27 (CT Inlet)</td>
                            <td><input value="fm_27" v-model="val_1" type="checkbox" :disabled="disable" v-on:click="CheckRange"></td>
                            <td><input value="ft_27" v-model="val_1" type="checkbox" :disabled="disable" v-on:click="CheckRange"></td>
                            <td>.</td>
                            <td>.</td>
                        </tr>

                    </table>
                <div class="row" style="text-align:center;color:white;">
                    <div class="col-md-12">
                        <div class="col-md-2 d-inline-block" >
                            <label>Add Selection Name</label>
                            <input type="text" v-model="selection_name" class="form-control" placeholder="Enter Selection Name..." :disabled="disable" required>
                        </div>

                        <div class="col-md-2 d-inline-block" >
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

                        <div class="col-md-2 d-inline-block" >
                            <label>Select Timing</label>
                            <select v-model="timing" class="form-control" :disabled="disable">
                                <option value="1">Last 24 Hours</option>
                                <option value="2">Today</option>
                                <option value="3">01 Week</option>
                                <option value="4">01 Month</option>
                                <option value="5">Manual Select Time</option>
                            </select>
                        </div>

                        <div class="col-md-2 d-inline-block" style="margin-top: 31px;">
                            <input type="submit" style="vertical-align:baseline;" value="Save Selection" class="btn btn-success" :disabled="disable">
                            <button style="vertical-align:baseline;" @click="reloadPage" class="btn btn-primary">Reset Page</button>
                        </div>

                        <span v-if="timing == '5'">

                                <div class="form-group col-md-3" >
                                    <label>Select Timing</label>
                                    <input type="datetime-local" class="form-control" v-model="startdate" id="js_fromdate"  >
                                </div>

                                <div class="form-group col-md-3" >
                                    <label>Select Timing</label>
                                    <input type="datetime-local" class="form-control" v-model="enddate" id="js_fromdate"  >
                                </div>

                        </span>
                    </div>
                </div>

            </form>
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
            val_1:[],
            timing: 1,
            setInterval:'60',
            user_role: this.$store.getters.currentUser.role,
            selection_name: '',
            db_val_1: [],
            disable: false

        }

    },

    created(){
        // document.querySelector(".row").style.marginRight  = "auto";
        console.log(this.getData());
    },
    methods: {
        getData() {
            axios.get('api/showselection/'+this.user_role, {headers: {'Authorization': 'Bearer ' + this.currentUser.token}})
                .then((response) => {
                    this.select_record = response.data.select_record;
                    // console.log(this.select_record[0].name)
                })
                .catch(err => {
                    console.log(err);
                })
        },
        CheckRange(){
            if(this.val_1.length >15){
                this.val_1.pop()
                alert('You can Only Select 16 Values');
            }
        },
        submit() {
                // this.disable = true;
                axios.post('api/saveselectionreport', [this.val_1,this.setInterval,this.timing,this.selection_name,this.user_role],{headers: {'Authorization': 'Bearer ' + this.currentUser.token}})
                    .then((response) => {
                        alert(response.data.message)
                        window.location.reload()
                    })
                    .catch(err => {
                        console.log(err);
                    })
        },
        reloadPage() {
            window.location.reload();
        }
    },
    beforeCreate: function() {
        document.querySelector('body').style.maxWidth = "100%";
        document.querySelector('body').style.minWidth = "100%";

        // document.getElementById("main").style.overflow = "hidden";
    },
    mounted() {
        document.getElementById('change-row').style.marginRight = "0px";
        if (localStorage.getItem('reloaded')) {
            // The page was just reloaded. Clear the value from local storage
            // so that it will reload the next time this page is visited.
            localStorage.removeItem('reloaded');
        } else {
            // Set a flag so that we know not to reload the page twice.
            localStorage.setItem('reloaded', '1');
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
    border:1px solid black;
}
.custom-table td{
    border:1px solid black;
}
.table-style-me{
    border: 1px solid !important;
    font-size: 12px !important;
}
.table-style-me th{
    font-size: 12px;
}
.table-style-me td{
  border-left: 1px solid;
    border-right: 1px solid;
    vertical-align: inherit;
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
    .table-style-me tr.custom-tr th{
        font-size: 12px;
        padding:0px !important;
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
    .main-form{
        padding-left: 0px !important;
    }
}

</style>
