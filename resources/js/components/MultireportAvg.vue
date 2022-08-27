<template>
    <div className="col-md-12" style="padding: 0px;">

        <h1 style="text-align: center; padding-top: 30px;margin-bottom:15px !important;">Show Selection Average Of Filtered Data</h1>
<!--        <fieldset class="col-md-4 m-auto text-center" style="background: darkslategrey; margin-bottom:30px !important;">-->
<!--            <div class="some-class">-->
<!--                <input type="radio" class="radio" v-model="filter_range" value="n" id="y" style="width: 47px;height: 23px;vertical-align: sub;"/>-->
<!--                <label for="y" style="font-size:25px;">Non-Filter</label>-->
<!--                <input type="radio" class="radio" v-model="filter_range" value="y" id="z" style="width: 47px;height: 23px;vertical-align: sub;"/>-->
<!--                <label for="z" style="font-size:25px;">Filter</label>-->
<!--            </div>-->
<!--        </fieldset>-->
        <div class="table-container col-md-12 m-auto text-center">
            <form name="chartForm" @submit.prevent="submit">
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
        <div class="form-row" style="margin-right: 0px">
            <div class="form-group col-md-4 m-auto privous-selection">
                <label>Previous Selected Record</label>
                <select v-model="select_db_record" class="form-control" v-on:click="abidfunction">

                    <option v-for="select in select_record" :value="select.sr_id">{{ select.name }}</option>
                </select>
            </div>
        </div>
        <!--        <button @click="ExportExcel('xls')" >Export Excel</button>-->
        <input type="button" class="btn btn-success print-btn" @click="tableToExcel" value="Export to Excel" style="position:absolute; left: 84%; top: 37px;">
        <div class="container-2">
            <table class="table custom-table" id="testTable" style="font-size:15px;width: auto; margin: 0 auto; margin-bottom: 40px; text-align: center; "
                   ref="exportable_table">

                <tbody>
                <tr>
                    <td style="width: 119px; height: 100px;border:none;"><img src="https://btechenergy-scada.com/images/logo.png" style="width:75px;height:75px;"></td>
                    <td v-if="val_1.length == 1" style="width:370px;vertical-align: bottom;border:none;"><h2>
                        Interval <span style="color:#ba4848" v-if="setInterval == 1">1 Minute</span>
                        <span style="color:#ba4848" v-if="setInterval == 2">2 Minute</span>
                        <span style="color:#ba4848" v-if="setInterval == 5">5 Minute</span>
                        <span style="color:#ba4848" v-if="setInterval == 10">10 Minute</span>
                        <span style="color:#ba4848" v-if="setInterval == 30">30 Minute</span>
                        <span style="color:#ba4848" v-if="setInterval == 60">1 Hour</span>
                        And Time <span style="color:#ba4848" v-if="timing == 1">Last 24 Hours</span>
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
                        Interval <span style="color:#ba4848" v-if="setInterval == 1">1 Minute</span>
                        <span style="color:#ba4848" v-if="setInterval == 2">2 Minute</span>
                        <span style="color:#ba4848" v-if="setInterval == 5">5 Minute</span>
                        <span style="color:#ba4848" v-if="setInterval == 10">10 Minute</span>
                        <span style="color:#ba4848" v-if="setInterval == 30">30 Minute</span>
                        <span style="color:#ba4848" v-if="setInterval == 60">1 Hour</span>
                        And Time <span style="color:#ba4848" v-if="timing == 1">Last 24 Hours</span>
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
                    <th style="border:1px solid black;" v-if="val_1.length>0">Titles</th>

                    <th style="border:1px solid black;" v-if="val_1[0] == 'st_fm2_flow'">Main Steam</th>
                    <th style="border:1px solid black;" v-if="val_1[0] == 'stfm2_flow_tot'">Total Flow</th>
                    <th style="border:1px solid black;" v-if="val_1[0] == 'stfm2_temp'">Temp</th>
                    <th style="border:1px solid black;" v-if="val_1[0] == 'stfm2_pressure'">Pressure</th>

                    <th style="border:1px solid black;" v-if="val_1[0] == 'st_fm1_flow'">Steam to E401</th>
                    <th style="border:1px solid black;" v-if="val_1[0] == 'stfm1_flow_tot'">Total Flow</th>
                    <th style="border:1px solid black;" v-if="val_1[0] == 'stfm1_temp'">Temp</th>
                    <th style="border:1px solid black;" v-if="val_1[0] == 'stfm1_pressure'">Pressure</th>

                    <th style="border:1px solid black;" v-if="val_1[0] == 'rdl_1'" >D101A-L</th>
                    <th style="border:1px solid black;" v-if="val_1[0] == 'vr_1'" >D101A-V</th>
                    <th style="border:1px solid black;" v-if="val_1[0] == 'rdl_2'" >D101B-L</th>
                    <th style="border:1px solid black;" v-if="val_1[0] == 'vr_2'" >D101B-V</th>
                    <th style="border:1px solid black;" v-if="val_1[0] == 'rdl_3'" >D405A-L</th>
                    <th style="border:1px solid black;" v-if="val_1[0] == 'vr_3'" >D405A-V</th>
                    <th style="border:1px solid black;" v-if="val_1[0] == 'rdl_4'" >D405B-L</th>
                    <th style="border:1px solid black;" v-if="val_1[0] == 'vr_4'" >D405B-V</th>
                    <th style="border:1px solid black;" v-if="val_1[0] == 'rdl_5'" >D405C-L</th>
                    <th style="border:1px solid black;" v-if="val_1[0] == 'vr_5'" >D405C-V</th>
                    <th style="border:1px solid black;" v-if="val_1[0] == 'rdl_6'" >C401A-L</th>
                    <th style="border:1px solid black;" v-if="val_1[0] == 'vr_6'" >C401A-V</th>
                    <th style="border:1px solid black;" v-if="val_1[0] == 'rdl_7'" >C401B-L</th>
                    <th style="border:1px solid black;" v-if="val_1[0] == 'vr_7'" >C401B-V</th>
                    <th style="border:1px solid black;" v-if="val_1[0] == 'rdl_8'" >D402A-L</th>
                    <th style="border:1px solid black;" v-if="val_1[0] == 'vr_8'" >D402A-V</th>
                    <th style="border:1px solid black;" v-if="val_1[0] == 'rdl_9'" >D402B-L</th>
                    <th style="border:1px solid black;" v-if="val_1[0] == 'vr_9'" >D402B-V</th>
                    <th style="border:1px solid black;" v-if="val_1[0] == 'rdl_10'" >D402C-L</th>
                    <th style="border:1px solid black;" v-if="val_1[0] == 'vr_10'" >D402C-V</th>
                    <th style="border:1px solid black;" v-if="val_1[0] == 'rdl_11'" >D402D-L</th>
                    <th style="border:1px solid black;" v-if="val_1[0] == 'vr_11'" >D402D-V</th>
                    <th style="border:1px solid black;" v-if="val_1[0] == 'rdl_12'" >GLV-L</th>
                    <th style="border:1px solid black;" v-if="val_1[0] == 'vr_12'" >GLV-V</th>
                    <th style="border:1px solid black;" v-if="val_1[0] == 'rdl_13'" >SettlingA-L</th>
                    <th style="border:1px solid black;" v-if="val_1[0] == 'vr_13'" >SettlingA-V</th>
                    <th style="border:1px solid black;" v-if="val_1[0] == 'rdl_14'" >SettlingB-L</th>
                    <th style="border:1px solid black;" v-if="val_1[0] == 'vr_14'" >SettlingB-V</th>
                    <th style="border:1px solid black;" v-if="val_1[0] == 'rdl_15'" >SettlingC-L</th>
                    <th style="border:1px solid black;" v-if="val_1[0] == 'vr_15'" >SettlingC-V</th>
                    <th style="border:1px solid black;" v-if="val_1[0] == 'rdl_16'" >Metdanol T1-L</th>
                    <th style="border:1px solid black;" v-if="val_1[0] == 'vr_16'" >Metdanol T1-V</th>
                    <th style="border:1px solid black;" v-if="val_1[0] == 'rdl_17'" >Tar-L</th>
                    <th style="border:1px solid black;" v-if="val_1[0] == 'vr_17'" >Tar-V</th>
                    <th style="border:1px solid black;" v-if="val_1[0] == 'rdl_18'" >GST T1-L</th>
                    <th style="border:1px solid black;" v-if="val_1[0] == 'vr_18'" >GST T1-V</th>
                    <th style="border:1px solid black;" v-if="val_1[0] == 'rdl_19'" >Metdanol T2-L</th>
                    <th style="border:1px solid black;" v-if="val_1[0] == 'vr_19'" >Metdanol T2-V</th>
                    <th style="border:1px solid black;" v-if="val_1[0] == 'rdl_20'" >SP1-L</th>
                    <th style="border:1px solid black;" v-if="val_1[0] == 'vr_20'" >SP1-V</th>
                    <th style="border:1px solid black;" v-if="val_1[0] == 'rdl_21'" >SP2-L</th>
                    <th style="border:1px solid black;" v-if="val_1[0] == 'vr_21'" >SP2-V</th>
                    <th style="border:1px solid black;" v-if="val_1[0] == 'rdl_22'" >SP3-L</th>
                    <th style="border:1px solid black;" v-if="val_1[0] == 'vr_22'" >SP3-V</th>
                    <th style="border:1px solid black;" v-if="val_1[0] == 'rdl_23'" >PPRA-L</th>
                    <th style="border:1px solid black;" v-if="val_1[0] == 'vr_23'" >PPRA-V</th>
                    <th style="border:1px solid black;" v-if="val_1[0] == 'rdl_24'" >PPRB-L</th>
                    <th style="border:1px solid black;" v-if="val_1[0] == 'vr_24'" >PPRB-V</th>
                    <th style="border:1px solid black;" v-if="val_1[0] == 'rdl_25'" >H2SO4-L</th>
                    <th style="border:1px solid black;" v-if="val_1[0] == 'rdl25_volume'" >H2SO4-V</th>
                    <th style="border:1px solid black;" v-if="val_1[0] == 'rdl25_mass'" >Mass In Kg</th>
                    <th style="border:1px solid black;" v-if="val_1[0] == 'rtd_1'" >E101-T</th>
                    <th style="border:1px solid black;" v-if="val_1[0] == 'rtd_2'" >D101A-T</th>
                    <th style="border:1px solid black;" v-if="val_1[0] == 'rtd_3'" >D101B-T</th>
                    <th style="border:1px solid black;" v-if="val_1[0] == 'rtd_4'" >E201-T</th>
                    <th style="border:1px solid black;" v-if="val_1[0] == 'rtd_5'" >GLV-Top-T</th>
                    <th style="border:1px solid black;" v-if="val_1[0] == 'rtd_6'" >GLV-Mid-T</th>
                    <th style="border:1px solid black;" v-if="val_1[0] == 'rtd_7'" >GLV-BTM-T</th>
                    <th style="border:1px solid black;" v-if="val_1[0] == 'rtd_8'" >GLV-EVP-T</th>
                    <th style="border:1px solid black;" v-if="val_1[0] == 'rtd_9'" >SettlingA-T</th>
                    <th style="border:1px solid black;" v-if="val_1[0] == 'rtd_10'" >SettlingB-T</th>
                    <th style="border:1px solid black;" v-if="val_1[0] == 'rtd_11'" >SettlingC-T</th>
                    <th style="border:1px solid black;" v-if="val_1[0] == 'rtd_12'" >Hot Water-T</th>
                    <th style="border:1px solid black;" v-if="val_1[0] == 'rtd_13'" >D402A-T</th>
                    <th style="border:1px solid black;" v-if="val_1[0] == 'rtd_14'" >D402B-T</th>
                    <th style="border:1px solid black;" v-if="val_1[0] == 'rtd_15'" >D402C-T</th>
                    <th style="border:1px solid black;" v-if="val_1[0] == 'rtd_16'" >D402D-T</th>
                    <th style="border:1px solid black;" v-if="val_1[0] == 'rtd_17'" >Trans EVP-T</th>
                    <th style="border:1px solid black;" v-if="val_1[0] == 'rtd_18'" >Blue-T</th>
                    <th style="border:1px solid black;" v-if="val_1[0] == 'rtd_19'" >Green-T</th>
                    <th style="border:1px solid black;" v-if="val_1[0] == 'rtd_20'" >Old Green-T</th>
                    <th style="border:1px solid black;" v-if="val_1[0] == 'rtd_21'" >E601-T</th>
                    <th style="border:1px solid black;" v-if="val_1[0] == 'rtd_22'" >T601-Top-T</th>
                    <th style="border:1px solid black;" v-if="val_1[0] == 'rtd_23'" >T601-Mid-T</th>
                    <th style="border:1px solid black;" v-if="val_1[0] == 'rtd_24'" >T601-BTM-T</th>
                    <th style="border:1px solid black;" v-if="val_1[0] == 'rtd_25'" >E501</th>
                    <th style="border:1px solid black;" v-if="val_1[0] == 'rtd_26'" >D501</th>
                    <th style="border:1px solid black;" v-if="val_1[0] == 'rtd_27'" >T501-Top-T</th>
                    <th style="border:1px solid black;" v-if="val_1[0] == 'rtd_28'" >T501-Mid-T</th>
                    <th style="border:1px solid black;" v-if="val_1[0] == 'rtd_29'" >RTDT501-BTM-T</th>
                    <th style="border:1px solid black;" v-if="val_1[0] == 'rtd_30'" >T502-Mid-T</th>
                    <th style="border:1px solid black;" v-if="val_1[0] == 'rtd_31'" >T502-BTM-T</th>
                    <th style="border:1px solid black;" v-if="val_1[0] == 'rtd_32'" >PPRA-T</th>
                    <th style="border:1px solid black;" v-if="val_1[0] == 'rtd_33'" >PPRB-T</th>
                    <th style="border:1px solid black;" v-if="val_1[0] == 'rtd_34'" >GST T1-T</th>
                    <th style="border:1px solid black;" v-if="val_1[0] == 'rtd_35'" >Trans React-T</th>
                    <th style="border:1px solid black;" v-if="val_1[0] == 'rtd_36'" >Bio Storag-T</th>
                    <th style="border:1px solid black;" v-if="val_1[0] == 'rtd_37'" >Bio Transf-T</th>
                    <th style="border:1px solid black;" v-if="val_1[0] == 'dpl_1'" >D501-L</th>
                    <th style="border:1px solid black;" v-if="val_1[0] == 'vd_1'" >D501-V</th>
                    <th style="border:1px solid black;" v-if="val_1[0] == 'dpl_2'" >E401-L</th>
                    <th style="border:1px solid black;" v-if="val_1[0] == 'vd_2'" >E401-V</th>
                    <th style="border:1px solid black;" v-if="val_1[0] == 'dpl_3'" >T601-L</th>
                    <th style="border:1px solid black;" v-if="val_1[0] == 'vd_3'" >T601-V</th>
                    <th style="border:1px solid black;" v-if="val_1[0] == 'dpl_4'" >D503-L</th>
                    <th style="border:1px solid black;" v-if="val_1[0] == 'vd_4'" >D503-V</th>
                    <th style="border:1px solid black;" v-if="val_1[0] == 'dpl_5'" >D504-L</th>
                    <th style="border:1px solid black;" v-if="val_1[0] == 'vd_5'" >D504-V</th>
                    <th style="border:1px solid black;" v-if="val_1[0] == 'dpl_6'" >T501-L</th>
                    <th style="border:1px solid black;" v-if="val_1[0] == 'vd_6'" >T501-V</th>
                    <th style="border:1px solid black;" v-if="val_1[0] == 'dpl_7'" >T502-L</th>
                    <th style="border:1px solid black;" v-if="val_1[0] == 'vd_7'" >T502-V</th>
                    <th style="border:1px solid black;" v-if="val_1[0] == 'dpl_8'" >Bio Storage Tank-L</th>
                    <th style="border:1px solid black;" v-if="val_1[0] == 'vd_8'" >Bio Storage Tank-V</th>
                    <th style="border:1px solid black;" v-if="val_1[0] == 'fm_1'" >TRANS OIL</th>
                    <th style="border:1px solid black;" v-if="val_1[0] == 'fm_2'" >ALKALI TRANS</th>
                    <th style="border:1px solid black;" v-if="val_1[0] == 'fm_3'" >TRANS EVAPORATOR TO NI</th>
                    <th style="border:1px solid black;" v-if="val_1[0] == 'fm_4'" >WATER N1</th>
                    <th style="border:1px solid black;" v-if="val_1[0] == 'fm_5'" >N2 TO D402</th>
                    <th style="border:1px solid black;" v-if="val_1[0] == 'fm_6'" >N3 TO SLAGPOOL</th>
                    <th style="border:1px solid black;" v-if="val_1[0] == 'fm_7'" >D602 TO METdANOL STORAGE TANK</th>
                    <th style="border:1px solid black;" v-if="val_1[0] == 'fm_8'" >D402-D501</th>
                    <th style="border:1px solid black;" v-if="val_1[0] == 'fm_9'" >D501-T501</th>
                    <th style="border:1px solid black;" v-if="val_1[0] == 'fm_10'" >T501-T502</th>
                    <th style="border:1px solid black;" v-if="val_1[0] == 'fm_11'" >TAR TRANSFER</th>
                    <th style="border:1px solid black;" v-if="val_1[0] == 'fm_12'" >RECYCLE TO D405 LINE</th>
                    <th style="border:1px solid black;" v-if="val_1[0] == 'fm_13'" >BIODIESEL TO STORAGE</th>
                    <th style="border:1px solid black;" v-if="val_1[0] == 'fm_14'" >D403 INTO T601</th>
                    <th style="border:1px solid black;" v-if="val_1[0] == 'fm_15'" >T601-D602</th>
                    <th style="border:1px solid black;" v-if="val_1[0] == 'fm_16'" >T601 TO REFLUX</th>
                    <th style="border:1px solid black;" v-if="val_1[0] == 'fm_17'" >T601 DRAIN</th>
                    <th style="border:1px solid black;" v-if="val_1[0] == 'fm_18'" >METdANOL INTO GST 1 AND 2</th>
                    <th style="border:1px solid black;" v-if="val_1[0] == 'fm_19'" >METdANOL INTO PPRA AND B</th>
                    <th style="border:1px solid black;" v-if="val_1[0] == 'fm_20'" >METdANOL INTO GLV</th>
                    <th style="border:1px solid black;" v-if="val_1[0] == 'fm_21'" >METdANOL INTO TRANS</th>
                    <th style="border:1px solid black;" v-if="val_1[0] == 'fm_22'" >BIODIESEL STORAGE TO TRUCK</th>
                    <th style="border:1px solid black;" v-if="val_1[0] == 'fm_23'" >RAW MATERIAL OFFLOADING</th>
                    <th style="border:1px solid black;" v-if="val_1[0] == 'fm_24'" >RAW MATERIAL TO SETTLING TANK</th>
                    <th style="border:1px solid black;" v-if="val_1[0] == 'fm_25'" >SETTLING TANK TO D101</th>
                    <th style="border:1px solid black;" v-if="val_1[0] == 'fm_26'" >CT OUTLET</th>
                    <th style="border:1px solid black;" v-if="val_1[0] == 'fm_27'" >CT INLET</th>
                    <th style="border:1px solid black;" v-if="val_1[0] == 'ft_1'" >FT TRANS OIL</th>
                    <th style="border:1px solid black;" v-if="val_1[0] == 'ft_2'" >FT ALKALI TRANS</th>
                    <th style="border:1px solid black;" v-if="val_1[0] == 'ft_3'" >FT TRANS EVAPORATOR TO NI</th>
                    <th style="border:1px solid black;" v-if="val_1[0] == 'ft_4'" >FT WATER N1</th>
                    <th style="border:1px solid black;" v-if="val_1[0] == 'ft_5'" >FT N2 TO D402</th>
                    <th style="border:1px solid black;" v-if="val_1[0] == 'ft_6'" >FT N3 TO  SLAGPOOL</th>
                    <th style="border:1px solid black;" v-if="val_1[0] == 'ft_7'" >FT D602 TO METdANOL STORAGE TANK</th>
                    <th style="border:1px solid black;" v-if="val_1[0] == 'ft_8'" >FT D402-D501</th>
                    <th style="border:1px solid black;" v-if="val_1[0] == 'ft_9'" >FT D501-T501</th>
                    <th style="border:1px solid black;" v-if="val_1[0] == 'ft_10'" >FT T501-T502</th>
                    <th style="border:1px solid black;" v-if="val_1[0] == 'ft_11'" >FT TAR TRANSFER</th>
                    <th style="border:1px solid black;" v-if="val_1[0] == 'ft_12'" >FT RECYCLE TO D405</th>
                    <th style="border:1px solid black;" v-if="val_1[0] == 'ft_13'" >FT BIODIESEL TO STORAGE</th>
                    <th style="border:1px solid black;" v-if="val_1[0] == 'ft_14'" >FT D403 INTO T601</th>
                    <th style="border:1px solid black;" v-if="val_1[0] == 'ft_15'" >FT T601-D602</th>
                    <th style="border:1px solid black;" v-if="val_1[0] == 'ft_16'" >FT T601 TO REFLUX</th>
                    <th style="border:1px solid black;" v-if="val_1[0] == 'ft_17'" >FT T601 DRAIN</th>
                    <th style="border:1px solid black;" v-if="val_1[0] == 'ft_18'" >FT METdANOL INTO GST 1 AND 2</th>
                    <th style="border:1px solid black;" v-if="val_1[0] == 'ft_19'" >FT 19</th>
                    <th style="border:1px solid black;" v-if="val_1[0] == 'ft_20'" >FT METdANOL INTO GLV</th>
                    <th style="border:1px solid black;" v-if="val_1[0] == 'ft_21'" >FT METdANOL  INTO TRANS</th>
                    <th style="border:1px solid black;" v-if="val_1[0] == 'ft_22'" >FT BIODIESEL STORAGE TO TRUCK</th>
                    <th style="border:1px solid black;" v-if="val_1[0] == 'ft_23'" >FT RAW MATERIAL OFFLOADING</th>
                    <th style="border:1px solid black;" v-if="val_1[0] == 'ft_24'" >FT RAW MATERIAL TO SETTLING TANK</th>
                    <th style="border:1px solid black;" v-if="val_1[0] == 'ft_25'" >FT SETTLING TANK TO D101</th>
                    <th style="border:1px solid black;" v-if="val_1[0] == 'ft_26'" >FT CT OUTLET</th>
                    <th style="border:1px solid black;" v-if="val_1[0] == 'ft_27'" >FT CT INLET</th>
                    <th style="border:1px solid black;" v-if="val_1[0] == 'pt_1'" >PT 1</th>
                    <th style="border:1px solid black;" v-if="val_1[0] == 'pt_2'" >PT 2</th>
                    <th style="border:1px solid black;" v-if="val_1[0] == 'pt_3'" >PT 3</th>
                    <th style="border:1px solid black;" v-if="val_1[0] == 'pt_4'" >PT 4</th>
                    <th style="border:1px solid black;" v-if="val_1[0] == 'pt_5'" >Dist Header</th>
                    <th style="border:1px solid black;" v-if="val_1[0] == 'vg_1'" >Vac Line</th>
                    <th style="border:1px solid black;" v-if="val_1[0] == 'vg_2'" >VG 2</th>
                    <th style="border:1px solid black;" v-if="val_1[0] == 'vg_3'" >VG 3</th>
                    <th style="border:1px solid black;" v-if="val_1[0] == 'fm1_den'" >DEN (Trans Oil)</th>
                    <th style="border:1px solid black;" v-if="val_1[0] == 'fm2_den'" >DEN( Alkali Trans)</th>
                    <th style="border:1px solid black;" v-if="val_1[0] == 'fm3_den'" >DEN (Trans Evaporator to NI)</th>
                    <th style="border:1px solid black;" v-if="val_1[0] == 'fm4_den'" >DEN (Water N1)</th>
                    <th style="border:1px solid black;" v-if="val_1[0] == 'fm5_den'" >DEN (N2 to D402)</th>
                    <th style="border:1px solid black;" v-if="val_1[0] == 'fm6_den'" >DEN (N3 to Slag pool)</th>
                    <th style="border:1px solid black;" v-if="val_1[0] == 'fm7_den'" >DEN (D602to Metdanol Storage Tank)</th>
                    <th style="border:1px solid black;" v-if="val_1[0] == 'fm8_den'" >DEN (D402-D501)</th>
                    <th style="border:1px solid black;" v-if="val_1[0] == 'fm9_den'" >DEN (D501-T501)</th>
                    <th style="border:1px solid black;" v-if="val_1[0] == 'fm10_den'" >DEN (T501-T502)</th>
                    <th style="border:1px solid black;" v-if="val_1[0] == 'fm11_den'" >DEN (Tar Transfer)</th>
                    <th style="border:1px solid black;" v-if="val_1[0] == 'fm12_den'" >DEN (Recycle to D405 Line)</th>
                    <th style="border:1px solid black;" v-if="val_1[0] == 'fm13_den'" >DEN (Biodiesel to Storage)</th>
                    <th style="border:1px solid black;" v-if="val_1[0] == 'fm14_den'" >DEN (D403 into T601)</th>
                    <th style="border:1px solid black;" v-if="val_1[0] == 'fm15_den'" >DEN (T601 to D602) </th>
                    <th style="border:1px solid black;" v-if="val_1[0] == 'fm16_den'" >DEN (T601 to Reflux)</th>
                    <th style="border:1px solid black;" v-if="val_1[0] == 'fm17_den'" >DEN (T601 Drain)</th>
                    <th style="border:1px solid black;" v-if="val_1[0] == 'fm18_den'" >DEN (Matdanol into GST 1 and 2)</th>
                    <th style="border:1px solid black;" v-if="val_1[0] == 'fm19_den'" >DEN (Metdanol into PPRA and B)</th>
                    <th style="border:1px solid black;" v-if="val_1[0] == 'fm20_den'" >DEN (Matdanol into GLV)</th>
                    <th style="border:1px solid black;" v-if="val_1[0] == 'fm21_den'" >DEN (Metdanol into Trans)</th>
                    <th style="border:1px solid black;" v-if="val_1[0] == 'fm22_den'" >DEN (Biodiesel Storage to Truck)</th>
                    <th style="border:1px solid black;" v-if="val_1[0] == 'fm23_den'" >DEN (Raw Material Offloading)</th>
                    <th style="border:1px solid black;" v-if="val_1[0] == 'fm24_den'" >DEN (Raw Metarial to Settling Tank)</th>
                    <th style="border:1px solid black;" v-if="val_1[0] == 'fm25_den'" >DEN (Settling Tank to D101)</th>
                    <th style="border:1px solid black;" v-if="val_1[0] == 'fm26_den'" >DEN (CT Outlet)</th>
                    <th style="border:1px solid black;" v-if="val_1[0] == 'fm27_den'" >DEN (CT Inlet)</th>
                    <th style="border:1px solid black;" v-if="val_1[0] == 'fm1_temp'" >TEMP (Trans Oil)</th>
<th style="border:1px solid black;" v-if="val_1[0] == 'fm2_temp'" >TEMP( Alkali Trans)</th>
<th style="border:1px solid black;" v-if="val_1[0] == 'fm3_temp'" >TEMP (Trans Evaporator to NI)</th>
<th style="border:1px solid black;" v-if="val_1[0] == 'fm4_temp'" >TEMP (Water N1)</th>
<th style="border:1px solid black;" v-if="val_1[0] == 'fm5_temp'" >TEMP (N2 to D402)</th>
<th style="border:1px solid black;" v-if="val_1[0] == 'fm6_temp'" >TEMP (N3 to Slag pool)</th>
<th style="border:1px solid black;" v-if="val_1[0] == 'fm7_temp'" >TEMP (D602to Metdanol Storage Tank)</th>
<th style="border:1px solid black;" v-if="val_1[0] == 'fm8_temp'" >TEMP (D402-D501)</th>
<th style="border:1px solid black;" v-if="val_1[0] == 'fm9_temp'" >TEMP (D501-T501)</th>
<th style="border:1px solid black;" v-if="val_1[0] == 'fm10_temp'" >TEMP (T501-T502)</th>
<th style="border:1px solid black;" v-if="val_1[0] == 'fm11_temp'" >TEMP (Tar Transfer)</th>
<th style="border:1px solid black;" v-if="val_1[0] == 'fm12_temp'" >TEMP (Recycle to D405 Line)</th>
<th style="border:1px solid black;" v-if="val_1[0] == 'fm13_temp'" >TEMP (Biodiesel to Storage)</th>
<th style="border:1px solid black;" v-if="val_1[0] == 'fm14_temp'" >TEMP (D403 into T601)</th>
<th style="border:1px solid black;" v-if="val_1[0] == 'fm0_temp'" >TEMP (T601 to D602) </th>
<th style="border:1px solid black;" v-if="val_1[0] == 'fm16_temp'" >TEMP (T601 to Reflux)</th>
<th style="border:1px solid black;" v-if="val_1[0] == 'fm17_temp'" >TEMP (T601 Drain)</th>
<th style="border:1px solid black;" v-if="val_1[0] == 'fm18_temp'" >TEMP (Matdanol into GST 1 and 2)</th>
<th style="border:1px solid black;" v-if="val_1[0] == 'fm19_temp'" >TEMP (Metdanol into PPRA and B)</th>
<th style="border:1px solid black;" v-if="val_1[0] == 'fm20_temp'" >TEMP (Matdanol into GLV)</th>
<th style="border:1px solid black;" v-if="val_1[0] == 'fm21_temp'" >TEMP (Metdanol into Trans)</th>
<th style="border:1px solid black;" v-if="val_1[0] == 'fm22_temp'" >TEMP (Biodiesel Storage to Truck)</th>
<th style="border:1px solid black;" v-if="val_1[0] == 'fm23_temp'" >TEMP (Raw Material Offloading)</th>
<th style="border:1px solid black;" v-if="val_1[0] == 'fm24_temp'" >TEMP (Raw Metarial to Settling Tank)</th>
<th style="border:1px solid black;" v-if="val_1[0] == 'fm25_temp'" >TEMP (Settling Tank to D101)</th>
<th style="border:1px solid black;" v-if="val_1[0] == 'fm26_temp'" >TEMP (CT Outlet)</th>
<th style="border:1px solid black;" v-if="val_1[0] == 'fm27_temp'" >TEMP (CT Inlet)</th>
<th style="border:1px solid black;" v-if="val_1[0] == 'rdl_32'" >GST-2-L</th>
                    <th style="border:1px solid black;" v-if="val_1[0] == 'vr_32'" >GST-2-V</th>
                    <th style="border:1px solid black;" v-if="val_1[0] == 'rtd_42'" >GST-2-T</th>
                    <th style="border:1px solid black;" v-if="val_1[0] == 'fm_45'" >(Metdanol Transfer)</th>
                    <th style="border:1px solid black;" v-if="val_1[0] == 'ft_45'" >FT (Metdanol Transfer)</th>
                    <th style="border:1px solid black;" v-if="val_1[0] == 'fm45_den'" >DEN (Metdanol Transfer)</th>
                    <th style="border:1px solid black;" v-if="val_1[0] == 'fm45_temp'" >TEMP (Metdanol Transfer)</th>
                    <th style="border:1px solid black;" v-if="val_1[0] == 'fm_62'" >(RVP)</th>
                    <th style="border:1px solid black;" v-if="val_1[0] == 'ft_62'" >FT (RVP)</th>
                    <th style="border:1px solid black;" v-if="val_1[0] == 'fm_66'" >(Milky)</th>
                    <th style="border:1px solid black;" v-if="val_1[0] == 'ft_66'" >FT (Milky)</th>
                    <!--///////////////////////////////////////-->
                     <th style="border:1px solid black;" v-if="val_1[1] == 'st_fm2_flow'">Main Steam</th>
                    <th style="border:1px solid black;" v-if="val_1[1] == 'stfm2_flow_tot'">Total Flow</th>
                    <th style="border:1px solid black;" v-if="val_1[1] == 'stfm2_temp'">Temp</th>
                    <th style="border:1px solid black;" v-if="val_1[1] == 'stfm2_pressure'">Pressure</th>

                    <th style="border:1px solid black;" v-if="val_1[1] == 'st_fm1_flow'">Steam to E401</th>
                    <th style="border:1px solid black;" v-if="val_1[1] == 'stfm1_flow_tot'">Total Flow</th>
                    <th style="border:1px solid black;" v-if="val_1[1] == 'stfm1_temp'">Temp</th>
                    <th style="border:1px solid black;" v-if="val_1[1] == 'stfm1_pressure'">Pressure</th>

                    <th style="border:1px solid black;" v-if="val_1[1] == 'rdl_1'" >D101A-L</th>
                    <th style="border:1px solid black;" v-if="val_1[1] == 'vr_1'" >D101A-V</th>
                    <th style="border:1px solid black;" v-if="val_1[1] == 'rdl_2'" >D101B-L</th>
                    <th style="border:1px solid black;" v-if="val_1[1] == 'vr_2'" >D101B-V</th>
                    <th style="border:1px solid black;" v-if="val_1[1] == 'rdl_3'" >D405A-L</th>
                    <th style="border:1px solid black;" v-if="val_1[1] == 'vr_3'" >D405A-V</th>
                    <th style="border:1px solid black;" v-if="val_1[1] == 'rdl_4'" >D405B-L</th>
                    <th style="border:1px solid black;" v-if="val_1[1] == 'vr_4'" >D405B-V</th>
                    <th style="border:1px solid black;" v-if="val_1[1] == 'rdl_5'" >D405C-L</th>
                    <th style="border:1px solid black;" v-if="val_1[1] == 'vr_5'" >D405C-V</th>
                    <th style="border:1px solid black;" v-if="val_1[1] == 'rdl_6'" >C401A-L</th>
                    <th style="border:1px solid black;" v-if="val_1[1] == 'vr_6'" >C401A-V</th>
                    <th style="border:1px solid black;" v-if="val_1[1] == 'rdl_7'" >C401B-L</th>
                    <th style="border:1px solid black;" v-if="val_1[1] == 'vr_7'" >C401B-V</th>
                    <th style="border:1px solid black;" v-if="val_1[1] == 'rdl_8'" >D402A-L</th>
                    <th style="border:1px solid black;" v-if="val_1[1] == 'vr_8'" >D402A-V</th>
                    <th style="border:1px solid black;" v-if="val_1[1] == 'rdl_9'" >D402B-L</th>
                    <th style="border:1px solid black;" v-if="val_1[1] == 'vr_9'" >D402B-V</th>
                    <th style="border:1px solid black;" v-if="val_1[1] == 'rdl_10'" >D402C-L</th>
                    <th style="border:1px solid black;" v-if="val_1[1] == 'vr_10'" >D402C-V</th>
                    <th style="border:1px solid black;" v-if="val_1[1] == 'rdl_11'" >D402D-L</th>
                    <th style="border:1px solid black;" v-if="val_1[1] == 'vr_11'" >D402D-V</th>
                    <th style="border:1px solid black;" v-if="val_1[1] == 'rdl_12'" >GLV-L</th>
                    <th style="border:1px solid black;" v-if="val_1[1] == 'vr_12'" >GLV-V</th>
                    <th style="border:1px solid black;" v-if="val_1[1] == 'rdl_13'" >SettlingA-L</th>
                    <th style="border:1px solid black;" v-if="val_1[1] == 'vr_13'" >SettlingA-V</th>
                    <th style="border:1px solid black;" v-if="val_1[1] == 'rdl_14'" >SettlingB-L</th>
                    <th style="border:1px solid black;" v-if="val_1[1] == 'vr_14'" >SettlingB-V</th>
                    <th style="border:1px solid black;" v-if="val_1[1] == 'rdl_15'" >SettlingC-L</th>
                    <th style="border:1px solid black;" v-if="val_1[1] == 'vr_15'" >SettlingC-V</th>
                    <th style="border:1px solid black;" v-if="val_1[1] == 'rdl_16'" >Metdanol T1-L</th>
                    <th style="border:1px solid black;" v-if="val_1[1] == 'vr_16'" >Metdanol T1-V</th>
                    <th style="border:1px solid black;" v-if="val_1[1] == 'rdl_17'" >Tar-L</th>
                    <th style="border:1px solid black;" v-if="val_1[1] == 'vr_17'" >Tar-V</th>
                    <th style="border:1px solid black;" v-if="val_1[1] == 'rdl_18'" >GST T1-L</th>
                    <th style="border:1px solid black;" v-if="val_1[1] == 'vr_18'" >GST T1-V</th>
                    <th style="border:1px solid black;" v-if="val_1[1] == 'rdl_19'" >Metdanol T2-L</th>
                    <th style="border:1px solid black;" v-if="val_1[1] == 'vr_19'" >Metdanol T2-V</th>
                    <th style="border:1px solid black;" v-if="val_1[1] == 'rdl_20'" >SP1-L</th>
                    <th style="border:1px solid black;" v-if="val_1[1] == 'vr_20'" >SP1-V</th>
                    <th style="border:1px solid black;" v-if="val_1[1] == 'rdl_21'" >SP2-L</th>
                    <th style="border:1px solid black;" v-if="val_1[1] == 'vr_21'" >SP2-V</th>
                    <th style="border:1px solid black;" v-if="val_1[1] == 'rdl_22'" >SP3-L</th>
                    <th style="border:1px solid black;" v-if="val_1[1] == 'vr_22'" >SP3-V</th>
                    <th style="border:1px solid black;" v-if="val_1[1] == 'rdl_23'" >PPRA-L</th>
                    <th style="border:1px solid black;" v-if="val_1[1] == 'vr_23'" >PPRA-V</th>
                    <th style="border:1px solid black;" v-if="val_1[1] == 'rdl_24'" >PPRB-L</th>
                    <th style="border:1px solid black;" v-if="val_1[1] == 'vr_24'" >PPRB-V</th>
                    <th style="border:1px solid black;" v-if="val_1[1] == 'rdl_25'" >H2SO4-L</th>
                    <th style="border:1px solid black;" v-if="val_1[1] == 'rdl25_volume'" >H2SO4-V</th>
                    <th style="border:1px solid black;" v-if="val_1[1] == 'rdl25_mass'" >Mass In Kg</th>
                    <th style="border:1px solid black;" v-if="val_1[1] == 'rtd_1'" >E101-T</th>
                    <th style="border:1px solid black;" v-if="val_1[1] == 'rtd_2'" >D101A-T</th>
                    <th style="border:1px solid black;" v-if="val_1[1] == 'rtd_3'" >D101B-T</th>
                    <th style="border:1px solid black;" v-if="val_1[1] == 'rtd_4'" >E201-T</th>
                    <th style="border:1px solid black;" v-if="val_1[1] == 'rtd_5'" >GLV-Top-T</th>
                    <th style="border:1px solid black;" v-if="val_1[1] == 'rtd_6'" >GLV-Mid-T</th>
                    <th style="border:1px solid black;" v-if="val_1[1] == 'rtd_7'" >GLV-BTM-T</th>
                    <th style="border:1px solid black;" v-if="val_1[1] == 'rtd_8'" >GLV-EVP-T</th>
                    <th style="border:1px solid black;" v-if="val_1[1] == 'rtd_9'" >SettlingA-T</th>
                    <th style="border:1px solid black;" v-if="val_1[1] == 'rtd_10'" >SettlingB-T</th>
                    <th style="border:1px solid black;" v-if="val_1[1] == 'rtd_11'" >SettlingC-T</th>
                    <th style="border:1px solid black;" v-if="val_1[1] == 'rtd_12'" >Hot Water-T</th>
                    <th style="border:1px solid black;" v-if="val_1[1] == 'rtd_13'" >D402A-T</th>
                    <th style="border:1px solid black;" v-if="val_1[1] == 'rtd_14'" >D402B-T</th>
                    <th style="border:1px solid black;" v-if="val_1[1] == 'rtd_15'" >D402C-T</th>
                    <th style="border:1px solid black;" v-if="val_1[1] == 'rtd_16'" >D402D-T</th>
                    <th style="border:1px solid black;" v-if="val_1[1] == 'rtd_17'" >Trans EVP-T</th>
                    <th style="border:1px solid black;" v-if="val_1[1] == 'rtd_18'" >Blue-T</th>
                    <th style="border:1px solid black;" v-if="val_1[1] == 'rtd_19'" >Green-T</th>
                    <th style="border:1px solid black;" v-if="val_1[1] == 'rtd_20'" >Old Green-T</th>
                    <th style="border:1px solid black;" v-if="val_1[1] == 'rtd_21'" >E601-T</th>
                    <th style="border:1px solid black;" v-if="val_1[1] == 'rtd_22'" >T601-Top-T</th>
                    <th style="border:1px solid black;" v-if="val_1[1] == 'rtd_23'" >T601-Mid-T</th>
                    <th style="border:1px solid black;" v-if="val_1[1] == 'rtd_24'" >T601-BTM-T</th>
                    <th style="border:1px solid black;" v-if="val_1[1] == 'rtd_25'" >E501</th>
                    <th style="border:1px solid black;" v-if="val_1[1] == 'rtd_26'" >D501</th>
                    <th style="border:1px solid black;" v-if="val_1[1] == 'rtd_27'" >T501-Top-T</th>
                    <th style="border:1px solid black;" v-if="val_1[1] == 'rtd_28'" >T501-Mid-T</th>
                    <th style="border:1px solid black;" v-if="val_1[1] == 'rtd_29'" >RTDT501-BTM-T</th>
                    <th style="border:1px solid black;" v-if="val_1[1] == 'rtd_30'" >T502-Mid-T</th>
                    <th style="border:1px solid black;" v-if="val_1[1] == 'rtd_31'" >T502-BTM-T</th>
                    <th style="border:1px solid black;" v-if="val_1[1] == 'rtd_32'" >PPRA-T</th>
                    <th style="border:1px solid black;" v-if="val_1[1] == 'rtd_33'" >PPRB-T</th>
                    <th style="border:1px solid black;" v-if="val_1[1] == 'rtd_34'" >GST T1-T</th>
                    <th style="border:1px solid black;" v-if="val_1[1] == 'rtd_35'" >Trans React-T</th>
                    <th style="border:1px solid black;" v-if="val_1[1] == 'rtd_36'" >Bio Storag-T</th>
                    <th style="border:1px solid black;" v-if="val_1[1] == 'rtd_37'" >Bio Transf-T</th>
                    <th style="border:1px solid black;" v-if="val_1[1] == 'dpl_1'" >D501-L</th>
                    <th style="border:1px solid black;" v-if="val_1[1] == 'vd_1'" >D501-V</th>
                    <th style="border:1px solid black;" v-if="val_1[1] == 'dpl_2'" >E401-L</th>
                    <th style="border:1px solid black;" v-if="val_1[1] == 'vd_2'" >E401-V</th>
                    <th style="border:1px solid black;" v-if="val_1[1] == 'dpl_3'" >T601-L</th>
                    <th style="border:1px solid black;" v-if="val_1[1] == 'vd_3'" >T601-V</th>
                    <th style="border:1px solid black;" v-if="val_1[1] == 'dpl_4'" >D503-L</th>
                    <th style="border:1px solid black;" v-if="val_1[1] == 'vd_4'" >D503-V</th>
                    <th style="border:1px solid black;" v-if="val_1[1] == 'dpl_5'" >D504-L</th>
                    <th style="border:1px solid black;" v-if="val_1[1] == 'vd_5'" >D504-V</th>
                    <th style="border:1px solid black;" v-if="val_1[1] == 'dpl_6'" >T501-L</th>
                    <th style="border:1px solid black;" v-if="val_1[1] == 'vd_6'" >T501-V</th>
                    <th style="border:1px solid black;" v-if="val_1[1] == 'dpl_7'" >T502-L</th>
                    <th style="border:1px solid black;" v-if="val_1[1] == 'vd_7'" >T502-V</th>
                    <th style="border:1px solid black;" v-if="val_1[1] == 'dpl_8'" >Bio Storage Tank-L</th>
                    <th style="border:1px solid black;" v-if="val_1[1] == 'vd_8'" >Bio Storage Tank-V</th>
                    <th style="border:1px solid black;" v-if="val_1[1] == 'fm_1'" >TRANS OIL</th>
                    <th style="border:1px solid black;" v-if="val_1[1] == 'fm_2'" >ALKALI TRANS</th>
                    <th style="border:1px solid black;" v-if="val_1[1] == 'fm_3'" >TRANS EVAPORATOR TO NI</th>
                    <th style="border:1px solid black;" v-if="val_1[1] == 'fm_4'" >WATER N1</th>
                    <th style="border:1px solid black;" v-if="val_1[1] == 'fm_5'" >N2 TO D402</th>
                    <th style="border:1px solid black;" v-if="val_1[1] == 'fm_6'" >N3 TO SLAGPOOL</th>
                    <th style="border:1px solid black;" v-if="val_1[1] == 'fm_7'" >D602 TO METdANOL STORAGE TANK</th>
                    <th style="border:1px solid black;" v-if="val_1[1] == 'fm_8'" >D402-D501</th>
                    <th style="border:1px solid black;" v-if="val_1[1] == 'fm_9'" >D501-T501</th>
                    <th style="border:1px solid black;" v-if="val_1[1] == 'fm_10'" >T501-T502</th>
                    <th style="border:1px solid black;" v-if="val_1[1] == 'fm_11'" >TAR TRANSFER</th>
                    <th style="border:1px solid black;" v-if="val_1[1] == 'fm_12'" >RECYCLE TO D405 LINE</th>
                    <th style="border:1px solid black;" v-if="val_1[1] == 'fm_13'" >BIODIESEL TO STORAGE</th>
                    <th style="border:1px solid black;" v-if="val_1[1] == 'fm_14'" >D403 INTO T601</th>
                    <th style="border:1px solid black;" v-if="val_1[1] == 'fm_15'" >T601-D602</th>
                    <th style="border:1px solid black;" v-if="val_1[1] == 'fm_16'" >T601 TO REFLUX</th>
                    <th style="border:1px solid black;" v-if="val_1[1] == 'fm_17'" >T601 DRAIN</th>
                    <th style="border:1px solid black;" v-if="val_1[1] == 'fm_18'" >METdANOL INTO GST 1 AND 2</th>
                    <th style="border:1px solid black;" v-if="val_1[1] == 'fm_19'" >METdANOL INTO PPRA AND B</th>
                    <th style="border:1px solid black;" v-if="val_1[1] == 'fm_20'" >METdANOL INTO GLV</th>
                    <th style="border:1px solid black;" v-if="val_1[1] == 'fm_21'" >METdANOL INTO TRANS</th>
                    <th style="border:1px solid black;" v-if="val_1[1] == 'fm_22'" >BIODIESEL STORAGE TO TRUCK</th>
                    <th style="border:1px solid black;" v-if="val_1[1] == 'fm_23'" >RAW MATERIAL OFFLOADING</th>
                    <th style="border:1px solid black;" v-if="val_1[1] == 'fm_24'" >RAW MATERIAL TO SETTLING TANK</th>
                    <th style="border:1px solid black;" v-if="val_1[1] == 'fm_25'" >SETTLING TANK TO D101</th>
                    <th style="border:1px solid black;" v-if="val_1[1] == 'fm_26'" >CT OUTLET</th>
                    <th style="border:1px solid black;" v-if="val_1[1] == 'fm_27'" >CT INLET</th>
                    <th style="border:1px solid black;" v-if="val_1[1] == 'ft_1'" >FT TRANS OIL</th>
                    <th style="border:1px solid black;" v-if="val_1[1] == 'ft_2'" >FT ALKALI TRANS</th>
                    <th style="border:1px solid black;" v-if="val_1[1] == 'ft_3'" >FT TRANS EVAPORATOR TO NI</th>
                    <th style="border:1px solid black;" v-if="val_1[1] == 'ft_4'" >FT WATER N1</th>
                    <th style="border:1px solid black;" v-if="val_1[1] == 'ft_5'" >FT N2 TO D402</th>
                    <th style="border:1px solid black;" v-if="val_1[1] == 'ft_6'" >FT N3 TO  SLAGPOOL</th>
                    <th style="border:1px solid black;" v-if="val_1[1] == 'ft_7'" >FT D602 TO METdANOL STORAGE TANK</th>
                    <th style="border:1px solid black;" v-if="val_1[1] == 'ft_8'" >FT D402-D501</th>
                    <th style="border:1px solid black;" v-if="val_1[1] == 'ft_9'" >FT D501-T501</th>
                    <th style="border:1px solid black;" v-if="val_1[1] == 'ft_10'" >FT T501-T502</th>
                    <th style="border:1px solid black;" v-if="val_1[1] == 'ft_11'" >FT TAR TRANSFER</th>
                    <th style="border:1px solid black;" v-if="val_1[1] == 'ft_12'" >FT RECYCLE TO D405</th>
                    <th style="border:1px solid black;" v-if="val_1[1] == 'ft_13'" >FT BIODIESEL TO STORAGE</th>
                    <th style="border:1px solid black;" v-if="val_1[1] == 'ft_14'" >FT D403 INTO T601</th>
                    <th style="border:1px solid black;" v-if="val_1[1] == 'ft_15'" >FT T601-D602</th>
                    <th style="border:1px solid black;" v-if="val_1[1] == 'ft_16'" >FT T601 TO REFLUX</th>
                    <th style="border:1px solid black;" v-if="val_1[1] == 'ft_17'" >FT T601 DRAIN</th>
                    <th style="border:1px solid black;" v-if="val_1[1] == 'ft_18'" >FT METdANOL INTO GST 1 AND 2</th>
                    <th style="border:1px solid black;" v-if="val_1[1] == 'ft_19'" >FT 19</th>
                    <th style="border:1px solid black;" v-if="val_1[1] == 'ft_20'" >FT METdANOL INTO GLV</th>
                    <th style="border:1px solid black;" v-if="val_1[1] == 'ft_21'" >FT METdANOL  INTO TRANS</th>
                    <th style="border:1px solid black;" v-if="val_1[1] == 'ft_22'" >FT BIODIESEL STORAGE TO TRUCK</th>
                    <th style="border:1px solid black;" v-if="val_1[1] == 'ft_23'" >FT RAW MATERIAL OFFLOADING</th>
                    <th style="border:1px solid black;" v-if="val_1[1] == 'ft_24'" >FT RAW MATERIAL TO SETTLING TANK</th>
                    <th style="border:1px solid black;" v-if="val_1[1] == 'ft_25'" >FT SETTLING TANK TO D101</th>
                    <th style="border:1px solid black;" v-if="val_1[1] == 'ft_26'" >FT CT OUTLET</th>
                    <th style="border:1px solid black;" v-if="val_1[1] == 'ft_27'" >FT CT INLET</th>
                    <th style="border:1px solid black;" v-if="val_1[1] == 'pt_1'" >PT 1</th>
                    <th style="border:1px solid black;" v-if="val_1[1] == 'pt_2'" >PT 2</th>
                    <th style="border:1px solid black;" v-if="val_1[1] == 'pt_3'" >PT 3</th>
                    <th style="border:1px solid black;" v-if="val_1[1] == 'pt_4'" >PT 4</th>
                    <th style="border:1px solid black;" v-if="val_1[1] == 'pt_5'" >Dist Header</th>
                    <th style="border:1px solid black;" v-if="val_1[1] == 'vg_1'" >Vac Line</th>
                    <th style="border:1px solid black;" v-if="val_1[1] == 'vg_2'" >VG 2</th>
                    <th style="border:1px solid black;" v-if="val_1[1] == 'vg_3'" >VG 3</th>
                    <th style="border:1px solid black;" v-if="val_1[1] == 'fm1_den'" >DEN (Trans Oil)</th>
                    <th style="border:1px solid black;" v-if="val_1[1] == 'fm2_den'" >DEN( Alkali Trans)</th>
                    <th style="border:1px solid black;" v-if="val_1[1] == 'fm3_den'" >DEN (Trans Evaporator to NI)</th>
                    <th style="border:1px solid black;" v-if="val_1[1] == 'fm4_den'" >DEN (Water N1)</th>
                    <th style="border:1px solid black;" v-if="val_1[1] == 'fm5_den'" >DEN (N2 to D402)</th>
                    <th style="border:1px solid black;" v-if="val_1[1] == 'fm6_den'" >DEN (N3 to Slag pool)</th>
                    <th style="border:1px solid black;" v-if="val_1[1] == 'fm7_den'" >DEN (D602to Metdanol Storage Tank)</th>
                    <th style="border:1px solid black;" v-if="val_1[1] == 'fm8_den'" >DEN (D402-D501)</th>
                    <th style="border:1px solid black;" v-if="val_1[1] == 'fm9_den'" >DEN (D501-T501)</th>
                    <th style="border:1px solid black;" v-if="val_1[1] == 'fm10_den'" >DEN (T501-T502)</th>
                    <th style="border:1px solid black;" v-if="val_1[1] == 'fm11_den'" >DEN (Tar Transfer)</th>
                    <th style="border:1px solid black;" v-if="val_1[1] == 'fm12_den'" >DEN (Recycle to D405 Line)</th>
                    <th style="border:1px solid black;" v-if="val_1[1] == 'fm13_den'" >DEN (Biodiesel to Storage)</th>
                    <th style="border:1px solid black;" v-if="val_1[1] == 'fm14_den'" >DEN (D403 into T601)</th>
                    <th style="border:1px solid black;" v-if="val_1[1] == 'fm15_den'" >DEN (T601 to D602) </th>
                    <th style="border:1px solid black;" v-if="val_1[1] == 'fm16_den'" >DEN (T601 to Reflux)</th>
                    <th style="border:1px solid black;" v-if="val_1[1] == 'fm17_den'" >DEN (T601 Drain)</th>
                    <th style="border:1px solid black;" v-if="val_1[1] == 'fm18_den'" >DEN (Matdanol into GST 1 and 2)</th>
                    <th style="border:1px solid black;" v-if="val_1[1] == 'fm19_den'" >DEN (Metdanol into PPRA and B)</th>
                    <th style="border:1px solid black;" v-if="val_1[1] == 'fm20_den'" >DEN (Matdanol into GLV)</th>
                    <th style="border:1px solid black;" v-if="val_1[1] == 'fm21_den'" >DEN (Metdanol into Trans)</th>
                    <th style="border:1px solid black;" v-if="val_1[1] == 'fm22_den'" >DEN (Biodiesel Storage to Truck)</th>
                    <th style="border:1px solid black;" v-if="val_1[1] == 'fm23_den'" >DEN (Raw Material Offloading)</th>
                    <th style="border:1px solid black;" v-if="val_1[1] == 'fm24_den'" >DEN (Raw Metarial to Settling Tank)</th>
                    <th style="border:1px solid black;" v-if="val_1[1] == 'fm25_den'" >DEN (Settling Tank to D101)</th>
                    <th style="border:1px solid black;" v-if="val_1[1] == 'fm26_den'" >DEN (CT Outlet)</th>
                    <th style="border:1px solid black;" v-if="val_1[1] == 'fm27_den'" >DEN (CT Inlet)</th>
                    <th style="border:1px solid black;" v-if="val_1[1] == 'fm1_temp'" >TEMP (Trans Oil)</th>
<th style="border:1px solid black;" v-if="val_1[1] == 'fm2_temp'" >TEMP( Alkali Trans)</th>
<th style="border:1px solid black;" v-if="val_1[1] == 'fm3_temp'" >TEMP (Trans Evaporator to NI)</th>
<th style="border:1px solid black;" v-if="val_1[1] == 'fm4_temp'" >TEMP (Water N1)</th>
<th style="border:1px solid black;" v-if="val_1[1] == 'fm5_temp'" >TEMP (N2 to D402)</th>
<th style="border:1px solid black;" v-if="val_1[1] == 'fm6_temp'" >TEMP (N3 to Slag pool)</th>
<th style="border:1px solid black;" v-if="val_1[1] == 'fm7_temp'" >TEMP (D602to Metdanol Storage Tank)</th>
<th style="border:1px solid black;" v-if="val_1[1] == 'fm8_temp'" >TEMP (D402-D501)</th>
<th style="border:1px solid black;" v-if="val_1[1] == 'fm9_temp'" >TEMP (D501-T501)</th>
<th style="border:1px solid black;" v-if="val_1[1] == 'fm10_temp'" >TEMP (T501-T502)</th>
<th style="border:1px solid black;" v-if="val_1[1] == 'fm11_temp'" >TEMP (Tar Transfer)</th>
<th style="border:1px solid black;" v-if="val_1[1] == 'fm12_temp'" >TEMP (Recycle to D405 Line)</th>
<th style="border:1px solid black;" v-if="val_1[1] == 'fm13_temp'" >TEMP (Biodiesel to Storage)</th>
<th style="border:1px solid black;" v-if="val_1[1] == 'fm14_temp'" >TEMP (D403 into T601)</th>
<th style="border:1px solid black;" v-if="val_1[1] == 'fm1_temp'" >TEMP (T601 to D602) </th>
<th style="border:1px solid black;" v-if="val_1[1] == 'fm16_temp'" >TEMP (T601 to Reflux)</th>
<th style="border:1px solid black;" v-if="val_1[1] == 'fm17_temp'" >TEMP (T601 Drain)</th>
<th style="border:1px solid black;" v-if="val_1[1] == 'fm18_temp'" >TEMP (Matdanol into GST 1 and 2)</th>
<th style="border:1px solid black;" v-if="val_1[1] == 'fm19_temp'" >TEMP (Metdanol into PPRA and B)</th>
<th style="border:1px solid black;" v-if="val_1[1] == 'fm20_temp'" >TEMP (Matdanol into GLV)</th>
<th style="border:1px solid black;" v-if="val_1[1] == 'fm21_temp'" >TEMP (Metdanol into Trans)</th>
<th style="border:1px solid black;" v-if="val_1[1] == 'fm22_temp'" >TEMP (Biodiesel Storage to Truck)</th>
<th style="border:1px solid black;" v-if="val_1[1] == 'fm23_temp'" >TEMP (Raw Material Offloading)</th>
<th style="border:1px solid black;" v-if="val_1[1] == 'fm24_temp'" >TEMP (Raw Metarial to Settling Tank)</th>
<th style="border:1px solid black;" v-if="val_1[1] == 'fm25_temp'" >TEMP (Settling Tank to D101)</th>
<th style="border:1px solid black;" v-if="val_1[1] == 'fm26_temp'" >TEMP (CT Outlet)</th>
<th style="border:1px solid black;" v-if="val_1[1] == 'fm27_temp'" >TEMP (CT Inlet)</th>
                    <th style="border:1px solid black;" v-if="val_1[1] == 'rdl_32'" >GST-2-L</th>
                    <th style="border:1px solid black;" v-if="val_1[1] == 'vr_32'" >GST-2-V</th>
                    <th style="border:1px solid black;" v-if="val_1[1] == 'rtd_42'" >GST-2-T</th>
                    <th style="border:1px solid black;" v-if="val_1[1] == 'fm_45'" >(Metdanol Transfer)</th>
                    <th style="border:1px solid black;" v-if="val_1[1] == 'ft_45'" >FT (Metdanol Transfer)</th>
                    <th style="border:1px solid black;" v-if="val_1[1] == 'fm45_den'" >DEN (Metdanol Transfer)</th>
                    <th style="border:1px solid black;" v-if="val_1[1] == 'fm45_temp'" >TEMP (Metdanol Transfer)</th>
                    <th style="border:1px solid black;" v-if="val_1[1] == 'fm_62'" >(RVP)</th>
                    <th style="border:1px solid black;" v-if="val_1[1] == 'ft_62'" >FT (RVP)</th>
                    <th style="border:1px solid black;" v-if="val_1[1] == 'fm_66'" >(Milky)</th>
                    <th style="border:1px solid black;" v-if="val_1[1] == 'ft_66'" >FT (Milky)</th>

                     <th style="border:1px solid black;" v-if="val_1[2] == 'st_fm2_flow'">Main Steam</th>
                    <th style="border:1px solid black;" v-if="val_1[2] == 'stfm2_flow_tot'">Total Flow</th>
                    <th style="border:1px solid black;" v-if="val_1[2] == 'stfm2_temp'">Temp</th>
                    <th style="border:1px solid black;" v-if="val_1[2] == 'stfm2_pressure'">Pressure</th>

                    <th style="border:1px solid black;" v-if="val_1[2] == 'st_fm1_flow'">Steam to E401</th>
                    <th style="border:1px solid black;" v-if="val_1[2] == 'stfm1_flow_tot'">Total Flow</th>
                    <th style="border:1px solid black;" v-if="val_1[2] == 'stfm1_temp'">Temp</th>
                    <th style="border:1px solid black;" v-if="val_1[2] == 'stfm1_pressure'">Pressure</th>
                    <th style="border:1px solid black;" v-if="val_1[2] == 'rdl_1'" >D101A-L</th>
                    <th style="border:1px solid black;" v-if="val_1[2] == 'vr_1'" >D101A-V</th>
                    <th style="border:1px solid black;" v-if="val_1[2] == 'rdl_2'" >D101B-L</th>
                    <th style="border:1px solid black;" v-if="val_1[2] == 'vr_2'" >D101B-V</th>
                    <th style="border:1px solid black;" v-if="val_1[2] == 'rdl_3'" >D405A-L</th>
                    <th style="border:1px solid black;" v-if="val_1[2] == 'vr_3'" >D405A-V</th>
                    <th style="border:1px solid black;" v-if="val_1[2] == 'rdl_4'" >D405B-L</th>
                    <th style="border:1px solid black;" v-if="val_1[2] == 'vr_4'" >D405B-V</th>
                    <th style="border:1px solid black;" v-if="val_1[2] == 'rdl_5'" >D405C-L</th>
                    <th style="border:1px solid black;" v-if="val_1[2] == 'vr_5'" >D405C-V</th>
                    <th style="border:1px solid black;" v-if="val_1[2] == 'rdl_6'" >C401A-L</th>
                    <th style="border:1px solid black;" v-if="val_1[2] == 'vr_6'" >C401A-V</th>
                    <th style="border:1px solid black;" v-if="val_1[2] == 'rdl_7'" >C401B-L</th>
                    <th style="border:1px solid black;" v-if="val_1[2] == 'vr_7'" >C401B-V</th>
                    <th style="border:1px solid black;" v-if="val_1[2] == 'rdl_8'" >D402A-L</th>
                    <th style="border:1px solid black;" v-if="val_1[2] == 'vr_8'" >D402A-V</th>
                    <th style="border:1px solid black;" v-if="val_1[2] == 'rdl_9'" >D402B-L</th>
                    <th style="border:1px solid black;" v-if="val_1[2] == 'vr_9'" >D402B-V</th>
                    <th style="border:1px solid black;" v-if="val_1[2] == 'rdl_10'" >D402C-L</th>
                    <th style="border:1px solid black;" v-if="val_1[2] == 'vr_10'" >D402C-V</th>
                    <th style="border:1px solid black;" v-if="val_1[2] == 'rdl_11'" >D402D-L</th>
                    <th style="border:1px solid black;" v-if="val_1[2] == 'vr_11'" >D402D-V</th>
                    <th style="border:1px solid black;" v-if="val_1[2] == 'rdl_12'" >GLV-L</th>
                    <th style="border:1px solid black;" v-if="val_1[2] == 'vr_12'" >GLV-V</th>
                    <th style="border:1px solid black;" v-if="val_1[2] == 'rdl_13'" >SettlingA-L</th>
                    <th style="border:1px solid black;" v-if="val_1[2] == 'vr_13'" >SettlingA-V</th>
                    <th style="border:1px solid black;" v-if="val_1[2] == 'rdl_14'" >SettlingB-L</th>
                    <th style="border:1px solid black;" v-if="val_1[2] == 'vr_14'" >SettlingB-V</th>
                    <th style="border:1px solid black;" v-if="val_1[2] == 'rdl_15'" >SettlingC-L</th>
                    <th style="border:1px solid black;" v-if="val_1[2] == 'vr_15'" >SettlingC-V</th>
                    <th style="border:1px solid black;" v-if="val_1[2] == 'rdl_16'" >Metdanol T1-L</th>
                    <th style="border:1px solid black;" v-if="val_1[2] == 'vr_16'" >Metdanol T1-V</th>
                    <th style="border:1px solid black;" v-if="val_1[2] == 'rdl_17'" >Tar-L</th>
                    <th style="border:1px solid black;" v-if="val_1[2] == 'vr_17'" >Tar-V</th>
                    <th style="border:1px solid black;" v-if="val_1[2] == 'rdl_18'" >GST T1-L</th>
                    <th style="border:1px solid black;" v-if="val_1[2] == 'vr_18'" >GST T1-V</th>
                    <th style="border:1px solid black;" v-if="val_1[2] == 'rdl_19'" >Metdanol T2-L</th>
                    <th style="border:1px solid black;" v-if="val_1[2] == 'vr_19'" >Metdanol T2-V</th>
                    <th style="border:1px solid black;" v-if="val_1[2] == 'rdl_20'" >SP1-L</th>
                    <th style="border:1px solid black;" v-if="val_1[2] == 'vr_20'" >SP1-V</th>
                    <th style="border:1px solid black;" v-if="val_1[2] == 'rdl_21'" >SP2-L</th>
                    <th style="border:1px solid black;" v-if="val_1[2] == 'vr_21'" >SP2-V</th>
                    <th style="border:1px solid black;" v-if="val_1[2] == 'rdl_22'" >SP3-L</th>
                    <th style="border:1px solid black;" v-if="val_1[2] == 'vr_22'" >SP3-V</th>
                    <th style="border:1px solid black;" v-if="val_1[2] == 'rdl_23'" >PPRA-L</th>
                    <th style="border:1px solid black;" v-if="val_1[2] == 'vr_23'" >PPRA-V</th>
                    <th style="border:1px solid black;" v-if="val_1[2] == 'rdl_24'" >PPRB-L</th>
                    <th style="border:1px solid black;" v-if="val_1[2] == 'vr_24'" >PPRB-V</th>
                    <th style="border:1px solid black;" v-if="val_1[2] == 'rdl_25'" >H2SO4-L</th>
                    <th style="border:1px solid black;" v-if="val_1[2] == 'rdl25_volume'" >H2SO4-V</th>
                    <th style="border:1px solid black;" v-if="val_1[2] == 'rdl25_mass'" >Mass In Kg</th>
                    <th style="border:1px solid black;" v-if="val_1[2] == 'rtd_1'" >E101-T</th>
                    <th style="border:1px solid black;" v-if="val_1[2] == 'rtd_2'" >D101A-T</th>
                    <th style="border:1px solid black;" v-if="val_1[2] == 'rtd_3'" >D101B-T</th>
                    <th style="border:1px solid black;" v-if="val_1[2] == 'rtd_4'" >E201-T</th>
                    <th style="border:1px solid black;" v-if="val_1[2] == 'rtd_5'" >GLV-Top-T</th>
                    <th style="border:1px solid black;" v-if="val_1[2] == 'rtd_6'" >GLV-Mid-T</th>
                    <th style="border:1px solid black;" v-if="val_1[2] == 'rtd_7'" >GLV-BTM-T</th>
                    <th style="border:1px solid black;" v-if="val_1[2] == 'rtd_8'" >GLV-EVP-T</th>
                    <th style="border:1px solid black;" v-if="val_1[2] == 'rtd_9'" >SettlingA-T</th>
                    <th style="border:1px solid black;" v-if="val_1[2] == 'rtd_10'" >SettlingB-T</th>
                    <th style="border:1px solid black;" v-if="val_1[2] == 'rtd_11'" >SettlingC-T</th>
                    <th style="border:1px solid black;" v-if="val_1[2] == 'rtd_12'" >Hot Water-T</th>
                    <th style="border:1px solid black;" v-if="val_1[2] == 'rtd_13'" >D402A-T</th>
                    <th style="border:1px solid black;" v-if="val_1[2] == 'rtd_14'" >D402B-T</th>
                    <th style="border:1px solid black;" v-if="val_1[2] == 'rtd_15'" >D402C-T</th>
                    <th style="border:1px solid black;" v-if="val_1[2] == 'rtd_16'" >D402D-T</th>
                    <th style="border:1px solid black;" v-if="val_1[2] == 'rtd_17'" >Trans EVP-T</th>
                    <th style="border:1px solid black;" v-if="val_1[2] == 'rtd_18'" >Blue-T</th>
                    <th style="border:1px solid black;" v-if="val_1[2] == 'rtd_19'" >Green-T</th>
                    <th style="border:1px solid black;" v-if="val_1[2] == 'rtd_20'" >Old Green-T</th>
                    <th style="border:1px solid black;" v-if="val_1[2] == 'rtd_21'" >E601-T</th>
                    <th style="border:1px solid black;" v-if="val_1[2] == 'rtd_22'" >T601-Top-T</th>
                    <th style="border:1px solid black;" v-if="val_1[2] == 'rtd_23'" >T601-Mid-T</th>
                    <th style="border:1px solid black;" v-if="val_1[2] == 'rtd_24'" >T601-BTM-T</th>
                    <th style="border:1px solid black;" v-if="val_1[2] == 'rtd_25'" >E501</th>
                    <th style="border:1px solid black;" v-if="val_1[2] == 'rtd_26'" >D501</th>
                    <th style="border:1px solid black;" v-if="val_1[2] == 'rtd_27'" >T501-Top-T</th>
                    <th style="border:1px solid black;" v-if="val_1[2] == 'rtd_28'" >T501-Mid-T</th>
                    <th style="border:1px solid black;" v-if="val_1[2] == 'rtd_29'" >RTDT501-BTM-T</th>
                    <th style="border:1px solid black;" v-if="val_1[2] == 'rtd_30'" >T502-Mid-T</th>
                    <th style="border:1px solid black;" v-if="val_1[2] == 'rtd_31'" >T502-BTM-T</th>
                    <th style="border:1px solid black;" v-if="val_1[2] == 'rtd_32'" >PPRA-T</th>
                    <th style="border:1px solid black;" v-if="val_1[2] == 'rtd_33'" >PPRB-T</th>
                    <th style="border:1px solid black;" v-if="val_1[2] == 'rtd_34'" >GST T1-T</th>
                    <th style="border:1px solid black;" v-if="val_1[2] == 'rtd_35'" >Trans React-T</th>
                    <th style="border:1px solid black;" v-if="val_1[2] == 'rtd_36'" >Bio Storag-T</th>
                    <th style="border:1px solid black;" v-if="val_1[2] == 'rtd_37'" >Bio Transf-T</th>
                    <th style="border:1px solid black;" v-if="val_1[2] == 'dpl_1'" >D501-L</th>
                    <th style="border:1px solid black;" v-if="val_1[2] == 'vd_1'" >D501-V</th>
                    <th style="border:1px solid black;" v-if="val_1[2] == 'dpl_2'" >E401-L</th>
                    <th style="border:1px solid black;" v-if="val_1[2] == 'vd_2'" >E401-V</th>
                    <th style="border:1px solid black;" v-if="val_1[2] == 'dpl_3'" >T601-L</th>
                    <th style="border:1px solid black;" v-if="val_1[2] == 'vd_3'" >T601-V</th>
                    <th style="border:1px solid black;" v-if="val_1[2] == 'dpl_4'" >D503-L</th>
                    <th style="border:1px solid black;" v-if="val_1[2] == 'vd_4'" >D503-V</th>
                    <th style="border:1px solid black;" v-if="val_1[2] == 'dpl_5'" >D504-L</th>
                    <th style="border:1px solid black;" v-if="val_1[2] == 'vd_5'" >D504-V</th>
                    <th style="border:1px solid black;" v-if="val_1[2] == 'dpl_6'" >T501-L</th>
                    <th style="border:1px solid black;" v-if="val_1[2] == 'vd_6'" >T501-V</th>
                    <th style="border:1px solid black;" v-if="val_1[2] == 'dpl_7'" >T502-L</th>
                    <th style="border:1px solid black;" v-if="val_1[2] == 'vd_7'" >T502-V</th>
                    <th style="border:1px solid black;" v-if="val_1[2] == 'dpl_8'" >Bio Storage Tank-L</th>
                    <th style="border:1px solid black;" v-if="val_1[2] == 'vd_8'" >Bio Storage Tank-V</th>
                    <th style="border:1px solid black;" v-if="val_1[2] == 'fm_1'" >TRANS OIL</th>
                    <th style="border:1px solid black;" v-if="val_1[2] == 'fm_2'" >ALKALI TRANS</th>
                    <th style="border:1px solid black;" v-if="val_1[2] == 'fm_3'" >TRANS EVAPORATOR TO NI</th>
                    <th style="border:1px solid black;" v-if="val_1[2] == 'fm_4'" >WATER N1</th>
                    <th style="border:1px solid black;" v-if="val_1[2] == 'fm_5'" >N2 TO D402</th>
                    <th style="border:1px solid black;" v-if="val_1[2] == 'fm_6'" >N3 TO SLAGPOOL</th>
                    <th style="border:1px solid black;" v-if="val_1[2] == 'fm_7'" >D602 TO METdANOL STORAGE TANK</th>
                    <th style="border:1px solid black;" v-if="val_1[2] == 'fm_8'" >D402-D501</th>
                    <th style="border:1px solid black;" v-if="val_1[2] == 'fm_9'" >D501-T501</th>
                    <th style="border:1px solid black;" v-if="val_1[2] == 'fm_10'" >T501-T502</th>
                    <th style="border:1px solid black;" v-if="val_1[2] == 'fm_11'" >TAR TRANSFER</th>
                    <th style="border:1px solid black;" v-if="val_1[2] == 'fm_12'" >RECYCLE TO D405 LINE</th>
                    <th style="border:1px solid black;" v-if="val_1[2] == 'fm_13'" >BIODIESEL TO STORAGE</th>
                    <th style="border:1px solid black;" v-if="val_1[2] == 'fm_14'" >D403 INTO T601</th>
                    <th style="border:1px solid black;" v-if="val_1[2] == 'fm_15'" >T601-D602</th>
                    <th style="border:1px solid black;" v-if="val_1[2] == 'fm_16'" >T601 TO REFLUX</th>
                    <th style="border:1px solid black;" v-if="val_1[2] == 'fm_17'" >T601 DRAIN</th>
                    <th style="border:1px solid black;" v-if="val_1[2] == 'fm_18'" >METdANOL INTO GST 1 AND 2</th>
                    <th style="border:1px solid black;" v-if="val_1[2] == 'fm_19'" >METdANOL INTO PPRA AND B</th>
                    <th style="border:1px solid black;" v-if="val_1[2] == 'fm_20'" >METdANOL INTO GLV</th>
                    <th style="border:1px solid black;" v-if="val_1[2] == 'fm_21'" >METdANOL INTO TRANS</th>
                    <th style="border:1px solid black;" v-if="val_1[2] == 'fm_22'" >BIODIESEL STORAGE TO TRUCK</th>
                    <th style="border:1px solid black;" v-if="val_1[2] == 'fm_23'" >RAW MATERIAL OFFLOADING</th>
                    <th style="border:1px solid black;" v-if="val_1[2] == 'fm_24'" >RAW MATERIAL TO SETTLING TANK</th>
                    <th style="border:1px solid black;" v-if="val_1[2] == 'fm_25'" >SETTLING TANK TO D101</th>
                    <th style="border:1px solid black;" v-if="val_1[2] == 'fm_26'" >CT OUTLET</th>
                    <th style="border:1px solid black;" v-if="val_1[2] == 'fm_27'" >CT INLET</th>
                    <th style="border:1px solid black;" v-if="val_1[2] == 'ft_1'" >FT TRANS OIL</th>
                    <th style="border:1px solid black;" v-if="val_1[2] == 'ft_2'" >FT ALKALI TRANS</th>
                    <th style="border:1px solid black;" v-if="val_1[2] == 'ft_3'" >FT TRANS EVAPORATOR TO NI</th>
                    <th style="border:1px solid black;" v-if="val_1[2] == 'ft_4'" >FT WATER N1</th>
                    <th style="border:1px solid black;" v-if="val_1[2] == 'ft_5'" >FT N2 TO D402</th>
                    <th style="border:1px solid black;" v-if="val_1[2] == 'ft_6'" >FT N3 TO  SLAGPOOL</th>
                    <th style="border:1px solid black;" v-if="val_1[2] == 'ft_7'" >FT D602 TO METdANOL STORAGE TANK</th>
                    <th style="border:1px solid black;" v-if="val_1[2] == 'ft_8'" >FT D402-D501</th>
                    <th style="border:1px solid black;" v-if="val_1[2] == 'ft_9'" >FT D501-T501</th>
                    <th style="border:1px solid black;" v-if="val_1[2] == 'ft_10'" >FT T501-T502</th>
                    <th style="border:1px solid black;" v-if="val_1[2] == 'ft_11'" >FT TAR TRANSFER</th>
                    <th style="border:1px solid black;" v-if="val_1[2] == 'ft_12'" >FT RECYCLE TO D405</th>
                    <th style="border:1px solid black;" v-if="val_1[2] == 'ft_13'" >FT BIODIESEL TO STORAGE</th>
                    <th style="border:1px solid black;" v-if="val_1[2] == 'ft_14'" >FT D403 INTO T601</th>
                    <th style="border:1px solid black;" v-if="val_1[2] == 'ft_15'" >FT T601-D602</th>
                    <th style="border:1px solid black;" v-if="val_1[2] == 'ft_16'" >FT T601 TO REFLUX</th>
                    <th style="border:1px solid black;" v-if="val_1[2] == 'ft_17'" >FT T601 DRAIN</th>
                    <th style="border:1px solid black;" v-if="val_1[2] == 'ft_18'" >FT METdANOL INTO GST 1 AND 2</th>
                    <th style="border:1px solid black;" v-if="val_1[2] == 'ft_19'" >FT 19</th>
                    <th style="border:1px solid black;" v-if="val_1[2] == 'ft_20'" >FT METdANOL INTO GLV</th>
                    <th style="border:1px solid black;" v-if="val_1[2] == 'ft_21'" >FT METdANOL  INTO TRANS</th>
                    <th style="border:1px solid black;" v-if="val_1[2] == 'ft_22'" >FT BIODIESEL STORAGE TO TRUCK</th>
                    <th style="border:1px solid black;" v-if="val_1[2] == 'ft_23'" >FT RAW MATERIAL OFFLOADING</th>
                    <th style="border:1px solid black;" v-if="val_1[2] == 'ft_24'" >FT RAW MATERIAL TO SETTLING TANK</th>
                    <th style="border:1px solid black;" v-if="val_1[2] == 'ft_25'" >FT SETTLING TANK TO D101</th>
                    <th style="border:1px solid black;" v-if="val_1[2] == 'ft_26'" >FT CT OUTLET</th>
                    <th style="border:1px solid black;" v-if="val_1[2] == 'ft_27'" >FT CT INLET</th>
                    <th style="border:1px solid black;" v-if="val_1[2] == 'pt_1'" >PT 1</th>
                    <th style="border:1px solid black;" v-if="val_1[2] == 'pt_2'" >PT 2</th>
                    <th style="border:1px solid black;" v-if="val_1[2] == 'pt_3'" >PT 3</th>
                    <th style="border:1px solid black;" v-if="val_1[2] == 'pt_4'" >PT 4</th>
                    <th style="border:1px solid black;" v-if="val_1[2] == 'pt_5'" >Dist Header</th>
                    <th style="border:1px solid black;" v-if="val_1[2] == 'vg_1'" >Vac Line</th>
                    <th style="border:1px solid black;" v-if="val_1[2] == 'vg_2'" >VG 2</th>
                    <th style="border:1px solid black;" v-if="val_1[2] == 'vg_3'" >VG 3</th>
                    <th style="border:1px solid black;" v-if="val_1[2] == 'fm1_den'" >DEN (Trans Oil)</th>
<th style="border:1px solid black;" v-if="val_1[2] == 'fm2_den'" >DEN( Alkali Trans)</th>
<th style="border:1px solid black;" v-if="val_1[2] == 'fm3_den'" >DEN (Trans Evaporator to NI)</th>
<th style="border:1px solid black;" v-if="val_1[2] == 'fm4_den'" >DEN (Water N1)</th>
<th style="border:1px solid black;" v-if="val_1[2] == 'fm5_den'" >DEN (N2 to D402)</th>
<th style="border:1px solid black;" v-if="val_1[2] == 'fm6_den'" >DEN (N3 to Slag pool)</th>
<th style="border:1px solid black;" v-if="val_1[2] == 'fm7_den'" >DEN (D602to Metdanol Storage Tank)</th>
<th style="border:1px solid black;" v-if="val_1[2] == 'fm8_den'" >DEN (D402-D501)</th>
<th style="border:1px solid black;" v-if="val_1[2] == 'fm9_den'" >DEN (D501-T501)</th>
<th style="border:1px solid black;" v-if="val_1[2] == 'fm10_den'" >DEN (T501-T502)</th>
<th style="border:1px solid black;" v-if="val_1[2] == 'fm11_den'" >DEN (Tar Transfer)</th>
<th style="border:1px solid black;" v-if="val_1[2] == 'fm12_den'" >DEN (Recycle to D405 Line)</th>
<th style="border:1px solid black;" v-if="val_1[2] == 'fm13_den'" >DEN (Biodiesel to Storage)</th>
<th style="border:1px solid black;" v-if="val_1[2] == 'fm14_den'" >DEN (D403 into T601)</th>
<th style="border:1px solid black;" v-if="val_1[2] == 'fm15_den'" >DEN (T601 to D602) </th>
<th style="border:1px solid black;" v-if="val_1[2] == 'fm16_den'" >DEN (T601 to Reflux)</th>
<th style="border:1px solid black;" v-if="val_1[2] == 'fm17_den'" >DEN (T601 Drain)</th>
<th style="border:1px solid black;" v-if="val_1[2] == 'fm18_den'" >DEN (Matdanol into GST 1 and 2)</th>
<th style="border:1px solid black;" v-if="val_1[2] == 'fm19_den'" >DEN (Metdanol into PPRA and B)</th>
<th style="border:1px solid black;" v-if="val_1[2] == 'fm20_den'" >DEN (Matdanol into GLV)</th>
<th style="border:1px solid black;" v-if="val_1[2] == 'fm21_den'" >DEN (Metdanol into Trans)</th>
<th style="border:1px solid black;" v-if="val_1[2] == 'fm22_den'" >DEN (Biodiesel Storage to Truck)</th>
<th style="border:1px solid black;" v-if="val_1[2] == 'fm23_den'" >DEN (Raw Material Offloading)</th>
<th style="border:1px solid black;" v-if="val_1[2] == 'fm24_den'" >DEN (Raw Metarial to Settling Tank)</th>
<th style="border:1px solid black;" v-if="val_1[2] == 'fm25_den'" >DEN (Settling Tank to D101)</th>
<th style="border:1px solid black;" v-if="val_1[2] == 'fm26_den'" >DEN (CT Outlet)</th>
<th style="border:1px solid black;" v-if="val_1[2] == 'fm27_den'" >DEN (CT Inlet)</th>
<th style="border:1px solid black;" v-if="val_1[2] == 'fm1_temp'" >TEMP (Trans Oil)</th>
<th style="border:1px solid black;" v-if="val_1[2] == 'fm2_temp'" >TEMP( Alkali Trans)</th>
<th style="border:1px solid black;" v-if="val_1[2] == 'fm3_temp'" >TEMP (Trans Evaporator to NI)</th>
<th style="border:1px solid black;" v-if="val_1[2] == 'fm4_temp'" >TEMP (Water N1)</th>
<th style="border:1px solid black;" v-if="val_1[2] == 'fm5_temp'" >TEMP (N2 to D402)</th>
<th style="border:1px solid black;" v-if="val_1[2] == 'fm6_temp'" >TEMP (N3 to Slag pool)</th>
<th style="border:1px solid black;" v-if="val_1[2] == 'fm7_temp'" >TEMP (D602to Metdanol Storage Tank)</th>
<th style="border:1px solid black;" v-if="val_1[2] == 'fm8_temp'" >TEMP (D402-D501)</th>
<th style="border:1px solid black;" v-if="val_1[2] == 'fm9_temp'" >TEMP (D501-T501)</th>
<th style="border:1px solid black;" v-if="val_1[2] == 'fm10_temp'" >TEMP (T501-T502)</th>
<th style="border:1px solid black;" v-if="val_1[2] == 'fm11_temp'" >TEMP (Tar Transfer)</th>
<th style="border:1px solid black;" v-if="val_1[2] == 'fm12_temp'" >TEMP (Recycle to D405 Line)</th>
<th style="border:1px solid black;" v-if="val_1[2] == 'fm13_temp'" >TEMP (Biodiesel to Storage)</th>
<th style="border:1px solid black;" v-if="val_1[2] == 'fm14_temp'" >TEMP (D403 into T601)</th>
<th style="border:1px solid black;" v-if="val_1[2] == 'fm2_temp'" >TEMP (T601 to D602) </th>
<th style="border:1px solid black;" v-if="val_1[2] == 'fm16_temp'" >TEMP (T601 to Reflux)</th>
<th style="border:1px solid black;" v-if="val_1[2] == 'fm17_temp'" >TEMP (T601 Drain)</th>
<th style="border:1px solid black;" v-if="val_1[2] == 'fm18_temp'" >TEMP (Matdanol into GST 1 and 2)</th>
<th style="border:1px solid black;" v-if="val_1[2] == 'fm19_temp'" >TEMP (Metdanol into PPRA and B)</th>
<th style="border:1px solid black;" v-if="val_1[2] == 'fm20_temp'" >TEMP (Matdanol into GLV)</th>
<th style="border:1px solid black;" v-if="val_1[2] == 'fm21_temp'" >TEMP (Metdanol into Trans)</th>
<th style="border:1px solid black;" v-if="val_1[2] == 'fm22_temp'" >TEMP (Biodiesel Storage to Truck)</th>
<th style="border:1px solid black;" v-if="val_1[2] == 'fm23_temp'" >TEMP (Raw Material Offloading)</th>
<th style="border:1px solid black;" v-if="val_1[2] == 'fm24_temp'" >TEMP (Raw Metarial to Settling Tank)</th>
<th style="border:1px solid black;" v-if="val_1[2] == 'fm25_temp'" >TEMP (Settling Tank to D101)</th>
<th style="border:1px solid black;" v-if="val_1[2] == 'fm26_temp'" >TEMP (CT Outlet)</th>
<th style="border:1px solid black;" v-if="val_1[2] == 'fm27_temp'" >TEMP (CT Inlet)</th>
                    <th style="border:1px solid black;" v-if="val_1[2] == 'rdl_32'" >GST-2-L</th>
                    <th style="border:1px solid black;" v-if="val_1[2] == 'vr_32'" >GST-2-V</th>
                    <th style="border:1px solid black;" v-if="val_1[2] == 'rtd_42'" >GST-2-T</th>
                    <th style="border:1px solid black;" v-if="val_1[2] == 'fm_45'" >(Metdanol Transfer)</th>
                    <th style="border:1px solid black;" v-if="val_1[2] == 'ft_45'" >FT (Metdanol Transfer)</th>
                    <th style="border:1px solid black;" v-if="val_1[2] == 'fm45_den'" >DEN (Metdanol Transfer)</th>
                    <th style="border:1px solid black;" v-if="val_1[2] == 'fm45_temp'" >TEMP (Metdanol Transfer)</th>
                    <th style="border:1px solid black;" v-if="val_1[2] == 'fm_62'" >(RVP)</th>
                    <th style="border:1px solid black;" v-if="val_1[2] == 'ft_62'" >FT (RVP)</th>
                    <th style="border:1px solid black;" v-if="val_1[2] == 'fm_66'" >(Milky)</th>
                    <th style="border:1px solid black;" v-if="val_1[2] == 'ft_66'" >FT (Milky)</th>

                     <th style="border:1px solid black;" v-if="val_1[3] == 'st_fm2_flow'">Main Steam</th>
                    <th style="border:1px solid black;" v-if="val_1[3] == 'stfm2_flow_tot'">Total Flow</th>
                    <th style="border:1px solid black;" v-if="val_1[3] == 'stfm2_temp'">Temp</th>
                    <th style="border:1px solid black;" v-if="val_1[3] == 'stfm2_pressure'">Pressure</th>

                    <th style="border:1px solid black;" v-if="val_1[3] == 'st_fm1_flow'">Steam to E401</th>
                    <th style="border:1px solid black;" v-if="val_1[3] == 'stfm1_flow_tot'">Total Flow</th>
                    <th style="border:1px solid black;" v-if="val_1[3] == 'stfm1_temp'">Temp</th>
                    <th style="border:1px solid black;" v-if="val_1[3] == 'stfm1_pressure'">Pressure</th>
                    <th style="border:1px solid black;" v-if="val_1[3] == 'rdl_1'" >D101A-L</th>
                    <th style="border:1px solid black;" v-if="val_1[3] == 'vr_1'" >D101A-V</th>
                    <th style="border:1px solid black;" v-if="val_1[3] == 'rdl_2'" >D101B-L</th>
                    <th style="border:1px solid black;" v-if="val_1[3] == 'vr_2'" >D101B-V</th>
                    <th style="border:1px solid black;" v-if="val_1[3] == 'rdl_3'" >D405A-L</th>
                    <th style="border:1px solid black;" v-if="val_1[3] == 'vr_3'" >D405A-V</th>
                    <th style="border:1px solid black;" v-if="val_1[3] == 'rdl_4'" >D405B-L</th>
                    <th style="border:1px solid black;" v-if="val_1[3] == 'vr_4'" >D405B-V</th>
                    <th style="border:1px solid black;" v-if="val_1[3] == 'rdl_5'" >D405C-L</th>
                    <th style="border:1px solid black;" v-if="val_1[3] == 'vr_5'" >D405C-V</th>
                    <th style="border:1px solid black;" v-if="val_1[3] == 'rdl_6'" >C401A-L</th>
                    <th style="border:1px solid black;" v-if="val_1[3] == 'vr_6'" >C401A-V</th>
                    <th style="border:1px solid black;" v-if="val_1[3] == 'rdl_7'" >C401B-L</th>
                    <th style="border:1px solid black;" v-if="val_1[3] == 'vr_7'" >C401B-V</th>
                    <th style="border:1px solid black;" v-if="val_1[3] == 'rdl_8'" >D402A-L</th>
                    <th style="border:1px solid black;" v-if="val_1[3] == 'vr_8'" >D402A-V</th>
                    <th style="border:1px solid black;" v-if="val_1[3] == 'rdl_9'" >D402B-L</th>
                    <th style="border:1px solid black;" v-if="val_1[3] == 'vr_9'" >D402B-V</th>
                    <th style="border:1px solid black;" v-if="val_1[3] == 'rdl_10'" >D402C-L</th>
                    <th style="border:1px solid black;" v-if="val_1[3] == 'vr_10'" >D402C-V</th>
                    <th style="border:1px solid black;" v-if="val_1[3] == 'rdl_11'" >D402D-L</th>
                    <th style="border:1px solid black;" v-if="val_1[3] == 'vr_11'" >D402D-V</th>
                    <th style="border:1px solid black;" v-if="val_1[3] == 'rdl_12'" >GLV-L</th>
                    <th style="border:1px solid black;" v-if="val_1[3] == 'vr_12'" >GLV-V</th>
                    <th style="border:1px solid black;" v-if="val_1[3] == 'rdl_13'" >SettlingA-L</th>
                    <th style="border:1px solid black;" v-if="val_1[3] == 'vr_13'" >SettlingA-V</th>
                    <th style="border:1px solid black;" v-if="val_1[3] == 'rdl_14'" >SettlingB-L</th>
                    <th style="border:1px solid black;" v-if="val_1[3] == 'vr_14'" >SettlingB-V</th>
                    <th style="border:1px solid black;" v-if="val_1[3] == 'rdl_15'" >SettlingC-L</th>
                    <th style="border:1px solid black;" v-if="val_1[3] == 'vr_15'" >SettlingC-V</th>
                    <th style="border:1px solid black;" v-if="val_1[3] == 'rdl_16'" >Metdanol T1-L</th>
                    <th style="border:1px solid black;" v-if="val_1[3] == 'vr_16'" >Metdanol T1-V</th>
                    <th style="border:1px solid black;" v-if="val_1[3] == 'rdl_17'" >Tar-L</th>
                    <th style="border:1px solid black;" v-if="val_1[3] == 'vr_17'" >Tar-V</th>
                    <th style="border:1px solid black;" v-if="val_1[3] == 'rdl_18'" >GST T1-L</th>
                    <th style="border:1px solid black;" v-if="val_1[3] == 'vr_18'" >GST T1-V</th>
                    <th style="border:1px solid black;" v-if="val_1[3] == 'rdl_19'" >Metdanol T2-L</th>
                    <th style="border:1px solid black;" v-if="val_1[3] == 'vr_19'" >Metdanol T2-V</th>
                    <th style="border:1px solid black;" v-if="val_1[3] == 'rdl_20'" >SP1-L</th>
                    <th style="border:1px solid black;" v-if="val_1[3] == 'vr_20'" >SP1-V</th>
                    <th style="border:1px solid black;" v-if="val_1[3] == 'rdl_21'" >SP2-L</th>
                    <th style="border:1px solid black;" v-if="val_1[3] == 'vr_21'" >SP2-V</th>
                    <th style="border:1px solid black;" v-if="val_1[3] == 'rdl_22'" >SP3-L</th>
                    <th style="border:1px solid black;" v-if="val_1[3] == 'vr_22'" >SP3-V</th>
                    <th style="border:1px solid black;" v-if="val_1[3] == 'rdl_23'" >PPRA-L</th>
                    <th style="border:1px solid black;" v-if="val_1[3] == 'vr_23'" >PPRA-V</th>
                    <th style="border:1px solid black;" v-if="val_1[3] == 'rdl_24'" >PPRB-L</th>
                    <th style="border:1px solid black;" v-if="val_1[3] == 'vr_24'" >PPRB-V</th>
                    <th style="border:1px solid black;" v-if="val_1[3] == 'rdl_25'" >H2SO4-L</th>
                    <th style="border:1px solid black;" v-if="val_1[3] == 'rdl25_volume'" >H2SO4-V</th>
                    <th style="border:1px solid black;" v-if="val_1[3] == 'rdl25_mass'" >Mass In Kg</th>
                    <th style="border:1px solid black;" v-if="val_1[3] == 'rtd_1'" >E101-T</th>
                    <th style="border:1px solid black;" v-if="val_1[3] == 'rtd_2'" >D101A-T</th>
                    <th style="border:1px solid black;" v-if="val_1[3] == 'rtd_3'" >D101B-T</th>
                    <th style="border:1px solid black;" v-if="val_1[3] == 'rtd_4'" >E201-T</th>
                    <th style="border:1px solid black;" v-if="val_1[3] == 'rtd_5'" >GLV-Top-T</th>
                    <th style="border:1px solid black;" v-if="val_1[3] == 'rtd_6'" >GLV-Mid-T</th>
                    <th style="border:1px solid black;" v-if="val_1[3] == 'rtd_7'" >GLV-BTM-T</th>
                    <th style="border:1px solid black;" v-if="val_1[3] == 'rtd_8'" >GLV-EVP-T</th>
                    <th style="border:1px solid black;" v-if="val_1[3] == 'rtd_9'" >SettlingA-T</th>
                    <th style="border:1px solid black;" v-if="val_1[3] == 'rtd_10'" >SettlingB-T</th>
                    <th style="border:1px solid black;" v-if="val_1[3] == 'rtd_11'" >SettlingC-T</th>
                    <th style="border:1px solid black;" v-if="val_1[3] == 'rtd_12'" >Hot Water-T</th>
                    <th style="border:1px solid black;" v-if="val_1[3] == 'rtd_13'" >D402A-T</th>
                    <th style="border:1px solid black;" v-if="val_1[3] == 'rtd_14'" >D402B-T</th>
                    <th style="border:1px solid black;" v-if="val_1[3] == 'rtd_15'" >D402C-T</th>
                    <th style="border:1px solid black;" v-if="val_1[3] == 'rtd_16'" >D402D-T</th>
                    <th style="border:1px solid black;" v-if="val_1[3] == 'rtd_17'" >Trans EVP-T</th>
                    <th style="border:1px solid black;" v-if="val_1[3] == 'rtd_18'" >Blue-T</th>
                    <th style="border:1px solid black;" v-if="val_1[3] == 'rtd_19'" >Green-T</th>
                    <th style="border:1px solid black;" v-if="val_1[3] == 'rtd_20'" >Old Green-T</th>
                    <th style="border:1px solid black;" v-if="val_1[3] == 'rtd_21'" >E601-T</th>
                    <th style="border:1px solid black;" v-if="val_1[3] == 'rtd_22'" >T601-Top-T</th>
                    <th style="border:1px solid black;" v-if="val_1[3] == 'rtd_23'" >T601-Mid-T</th>
                    <th style="border:1px solid black;" v-if="val_1[3] == 'rtd_24'" >T601-BTM-T</th>
                    <th style="border:1px solid black;" v-if="val_1[3] == 'rtd_25'" >E501</th>
                    <th style="border:1px solid black;" v-if="val_1[3] == 'rtd_26'" >D501</th>
                    <th style="border:1px solid black;" v-if="val_1[3] == 'rtd_27'" >T501-Top-T</th>
                    <th style="border:1px solid black;" v-if="val_1[3] == 'rtd_28'" >T501-Mid-T</th>
                    <th style="border:1px solid black;" v-if="val_1[3] == 'rtd_29'" >RTDT501-BTM-T</th>
                    <th style="border:1px solid black;" v-if="val_1[3] == 'rtd_30'" >T502-Mid-T</th>
                    <th style="border:1px solid black;" v-if="val_1[3] == 'rtd_31'" >T502-BTM-T</th>
                    <th style="border:1px solid black;" v-if="val_1[3] == 'rtd_32'" >PPRA-T</th>
                    <th style="border:1px solid black;" v-if="val_1[3] == 'rtd_33'" >PPRB-T</th>
                    <th style="border:1px solid black;" v-if="val_1[3] == 'rtd_34'" >GST T1-T</th>
                    <th style="border:1px solid black;" v-if="val_1[3] == 'rtd_35'" >Trans React-T</th>
                    <th style="border:1px solid black;" v-if="val_1[3] == 'rtd_36'" >Bio Storag-T</th>
                    <th style="border:1px solid black;" v-if="val_1[3] == 'rtd_37'" >Bio Transf-T</th>
                    <th style="border:1px solid black;" v-if="val_1[3] == 'dpl_1'" >D501-L</th>
                    <th style="border:1px solid black;" v-if="val_1[3] == 'vd_1'" >D501-V</th>
                    <th style="border:1px solid black;" v-if="val_1[3] == 'dpl_2'" >E401-L</th>
                    <th style="border:1px solid black;" v-if="val_1[3] == 'vd_2'" >E401-V</th>
                    <th style="border:1px solid black;" v-if="val_1[3] == 'dpl_3'" >T601-L</th>
                    <th style="border:1px solid black;" v-if="val_1[3] == 'vd_3'" >T601-V</th>
                    <th style="border:1px solid black;" v-if="val_1[3] == 'dpl_4'" >D503-L</th>
                    <th style="border:1px solid black;" v-if="val_1[3] == 'vd_4'" >D503-V</th>
                    <th style="border:1px solid black;" v-if="val_1[3] == 'dpl_5'" >D504-L</th>
                    <th style="border:1px solid black;" v-if="val_1[3] == 'vd_5'" >D504-V</th>
                    <th style="border:1px solid black;" v-if="val_1[3] == 'dpl_6'" >T501-L</th>
                    <th style="border:1px solid black;" v-if="val_1[3] == 'vd_6'" >T501-V</th>
                    <th style="border:1px solid black;" v-if="val_1[3] == 'dpl_7'" >T502-L</th>
                    <th style="border:1px solid black;" v-if="val_1[3] == 'vd_7'" >T502-V</th>
                    <th style="border:1px solid black;" v-if="val_1[3] == 'dpl_8'" >Bio Storage Tank-L</th>
                    <th style="border:1px solid black;" v-if="val_1[3] == 'vd_8'" >Bio Storage Tank-V</th>
                    <th style="border:1px solid black;" v-if="val_1[3] == 'fm_1'" >TRANS OIL</th>
                    <th style="border:1px solid black;" v-if="val_1[3] == 'fm_2'" >ALKALI TRANS</th>
                    <th style="border:1px solid black;" v-if="val_1[3] == 'fm_3'" >TRANS EVAPORATOR TO NI</th>
                    <th style="border:1px solid black;" v-if="val_1[3] == 'fm_4'" >WATER N1</th>
                    <th style="border:1px solid black;" v-if="val_1[3] == 'fm_5'" >N2 TO D402</th>
                    <th style="border:1px solid black;" v-if="val_1[3] == 'fm_6'" >N3 TO SLAGPOOL</th>
                    <th style="border:1px solid black;" v-if="val_1[3] == 'fm_7'" >D602 TO METdANOL STORAGE TANK</th>
                    <th style="border:1px solid black;" v-if="val_1[3] == 'fm_8'" >D402-D501</th>
                    <th style="border:1px solid black;" v-if="val_1[3] == 'fm_9'" >D501-T501</th>
                    <th style="border:1px solid black;" v-if="val_1[3] == 'fm_10'" >T501-T502</th>
                    <th style="border:1px solid black;" v-if="val_1[3] == 'fm_11'" >TAR TRANSFER</th>
                    <th style="border:1px solid black;" v-if="val_1[3] == 'fm_12'" >RECYCLE TO D405 LINE</th>
                    <th style="border:1px solid black;" v-if="val_1[3] == 'fm_13'" >BIODIESEL TO STORAGE</th>
                    <th style="border:1px solid black;" v-if="val_1[3] == 'fm_14'" >D403 INTO T601</th>
                    <th style="border:1px solid black;" v-if="val_1[3] == 'fm_15'" >T601-D602</th>
                    <th style="border:1px solid black;" v-if="val_1[3] == 'fm_16'" >T601 TO REFLUX</th>
                    <th style="border:1px solid black;" v-if="val_1[3] == 'fm_17'" >T601 DRAIN</th>
                    <th style="border:1px solid black;" v-if="val_1[3] == 'fm_18'" >METdANOL INTO GST 1 AND 2</th>
                    <th style="border:1px solid black;" v-if="val_1[3] == 'fm_19'" >METdANOL INTO PPRA AND B</th>
                    <th style="border:1px solid black;" v-if="val_1[3] == 'fm_20'" >METdANOL INTO GLV</th>
                    <th style="border:1px solid black;" v-if="val_1[3] == 'fm_21'" >METdANOL INTO TRANS</th>
                    <th style="border:1px solid black;" v-if="val_1[3] == 'fm_22'" >BIODIESEL STORAGE TO TRUCK</th>
                    <th style="border:1px solid black;" v-if="val_1[3] == 'fm_23'" >RAW MATERIAL OFFLOADING</th>
                    <th style="border:1px solid black;" v-if="val_1[3] == 'fm_24'" >RAW MATERIAL TO SETTLING TANK</th>
                    <th style="border:1px solid black;" v-if="val_1[3] == 'fm_25'" >SETTLING TANK TO D101</th>
                    <th style="border:1px solid black;" v-if="val_1[3] == 'fm_26'" >CT OUTLET</th>
                    <th style="border:1px solid black;" v-if="val_1[3] == 'fm_27'" >CT INLET</th>
                    <th style="border:1px solid black;" v-if="val_1[3] == 'ft_1'" >FT TRANS OIL</th>
                    <th style="border:1px solid black;" v-if="val_1[3] == 'ft_2'" >FT ALKALI TRANS</th>
                    <th style="border:1px solid black;" v-if="val_1[3] == 'ft_3'" >FT TRANS EVAPORATOR TO NI</th>
                    <th style="border:1px solid black;" v-if="val_1[3] == 'ft_4'" >FT WATER N1</th>
                    <th style="border:1px solid black;" v-if="val_1[3] == 'ft_5'" >FT N2 TO D402</th>
                    <th style="border:1px solid black;" v-if="val_1[3] == 'ft_6'" >FT N3 TO  SLAGPOOL</th>
                    <th style="border:1px solid black;" v-if="val_1[3] == 'ft_7'" >FT D602 TO METdANOL STORAGE TANK</th>
                    <th style="border:1px solid black;" v-if="val_1[3] == 'ft_8'" >FT D402-D501</th>
                    <th style="border:1px solid black;" v-if="val_1[3] == 'ft_9'" >FT D501-T501</th>
                    <th style="border:1px solid black;" v-if="val_1[3] == 'ft_10'" >FT T501-T502</th>
                    <th style="border:1px solid black;" v-if="val_1[3] == 'ft_11'" >FT TAR TRANSFER</th>
                    <th style="border:1px solid black;" v-if="val_1[3] == 'ft_12'" >FT RECYCLE TO D405</th>
                    <th style="border:1px solid black;" v-if="val_1[3] == 'ft_13'" >FT BIODIESEL TO STORAGE</th>
                    <th style="border:1px solid black;" v-if="val_1[3] == 'ft_14'" >FT D403 INTO T601</th>
                    <th style="border:1px solid black;" v-if="val_1[3] == 'ft_15'" >FT T601-D602</th>
                    <th style="border:1px solid black;" v-if="val_1[3] == 'ft_16'" >FT T601 TO REFLUX</th>
                    <th style="border:1px solid black;" v-if="val_1[3] == 'ft_17'" >FT T601 DRAIN</th>
                    <th style="border:1px solid black;" v-if="val_1[3] == 'ft_18'" >FT METdANOL INTO GST 1 AND 2</th>
                    <th style="border:1px solid black;" v-if="val_1[3] == 'ft_19'" >FT 19</th>
                    <th style="border:1px solid black;" v-if="val_1[3] == 'ft_20'" >FT METdANOL INTO GLV</th>
                    <th style="border:1px solid black;" v-if="val_1[3] == 'ft_21'" >FT METdANOL  INTO TRANS</th>
                    <th style="border:1px solid black;" v-if="val_1[3] == 'ft_22'" >FT BIODIESEL STORAGE TO TRUCK</th>
                    <th style="border:1px solid black;" v-if="val_1[3] == 'ft_23'" >FT RAW MATERIAL OFFLOADING</th>
                    <th style="border:1px solid black;" v-if="val_1[3] == 'ft_24'" >FT RAW MATERIAL TO SETTLING TANK</th>
                    <th style="border:1px solid black;" v-if="val_1[3] == 'ft_25'" >FT SETTLING TANK TO D101</th>
                    <th style="border:1px solid black;" v-if="val_1[3] == 'ft_26'" >FT CT OUTLET</th>
                    <th style="border:1px solid black;" v-if="val_1[3] == 'ft_27'" >FT CT INLET</th>
                    <th style="border:1px solid black;" v-if="val_1[3] == 'pt_1'" >PT 1</th>
                    <th style="border:1px solid black;" v-if="val_1[3] == 'pt_2'" >PT 2</th>
                    <th style="border:1px solid black;" v-if="val_1[3] == 'pt_3'" >PT 3</th>
                    <th style="border:1px solid black;" v-if="val_1[3] == 'pt_4'" >PT 4</th>
                    <th style="border:1px solid black;" v-if="val_1[3] == 'pt_5'" >Dist Header</th>
                    <th style="border:1px solid black;" v-if="val_1[3] == 'vg_1'" >Vac Line</th>
                    <th style="border:1px solid black;" v-if="val_1[3] == 'vg_2'" >VG 2</th>
                    <th style="border:1px solid black;" v-if="val_1[3] == 'vg_3'" >VG 3</th>
                    <th style="border:1px solid black;" v-if="val_1[3] == 'fm1_den'" >DEN (Trans Oil)</th>
<th style="border:1px solid black;" v-if="val_1[3] == 'fm2_den'" >DEN( Alkali Trans)</th>
<th style="border:1px solid black;" v-if="val_1[3] == 'fm3_den'" >DEN (Trans Evaporator to NI)</th>
<th style="border:1px solid black;" v-if="val_1[3] == 'fm4_den'" >DEN (Water N1)</th>
<th style="border:1px solid black;" v-if="val_1[3] == 'fm5_den'" >DEN (N2 to D402)</th>
<th style="border:1px solid black;" v-if="val_1[3] == 'fm6_den'" >DEN (N3 to Slag pool)</th>
<th style="border:1px solid black;" v-if="val_1[3] == 'fm7_den'" >DEN (D602to Metdanol Storage Tank)</th>
<th style="border:1px solid black;" v-if="val_1[3] == 'fm8_den'" >DEN (D402-D501)</th>
<th style="border:1px solid black;" v-if="val_1[3] == 'fm9_den'" >DEN (D501-T501)</th>
<th style="border:1px solid black;" v-if="val_1[3] == 'fm10_den'" >DEN (T501-T502)</th>
<th style="border:1px solid black;" v-if="val_1[3] == 'fm11_den'" >DEN (Tar Transfer)</th>
<th style="border:1px solid black;" v-if="val_1[3] == 'fm12_den'" >DEN (Recycle to D405 Line)</th>
<th style="border:1px solid black;" v-if="val_1[3] == 'fm13_den'" >DEN (Biodiesel to Storage)</th>
<th style="border:1px solid black;" v-if="val_1[3] == 'fm14_den'" >DEN (D403 into T601)</th>
<th style="border:1px solid black;" v-if="val_1[3] == 'fm15_den'" >DEN (T601 to D602) </th>
<th style="border:1px solid black;" v-if="val_1[3] == 'fm16_den'" >DEN (T601 to Reflux)</th>
<th style="border:1px solid black;" v-if="val_1[3] == 'fm17_den'" >DEN (T601 Drain)</th>
<th style="border:1px solid black;" v-if="val_1[3] == 'fm18_den'" >DEN (Matdanol into GST 1 and 2)</th>
<th style="border:1px solid black;" v-if="val_1[3] == 'fm19_den'" >DEN (Metdanol into PPRA and B)</th>
<th style="border:1px solid black;" v-if="val_1[3] == 'fm20_den'" >DEN (Matdanol into GLV)</th>
<th style="border:1px solid black;" v-if="val_1[3] == 'fm21_den'" >DEN (Metdanol into Trans)</th>
<th style="border:1px solid black;" v-if="val_1[3] == 'fm22_den'" >DEN (Biodiesel Storage to Truck)</th>
<th style="border:1px solid black;" v-if="val_1[3] == 'fm23_den'" >DEN (Raw Material Offloading)</th>
<th style="border:1px solid black;" v-if="val_1[3] == 'fm24_den'" >DEN (Raw Metarial to Settling Tank)</th>
<th style="border:1px solid black;" v-if="val_1[3] == 'fm25_den'" >DEN (Settling Tank to D101)</th>
<th style="border:1px solid black;" v-if="val_1[3] == 'fm26_den'" >DEN (CT Outlet)</th>
<th style="border:1px solid black;" v-if="val_1[3] == 'fm27_den'" >DEN (CT Inlet)</th>
<th style="border:1px solid black;" v-if="val_1[3] == 'fm1_temp'" >TEMP (Trans Oil)</th>
<th style="border:1px solid black;" v-if="val_1[3] == 'fm2_temp'" >TEMP( Alkali Trans)</th>
<th style="border:1px solid black;" v-if="val_1[3] == 'fm3_temp'" >TEMP (Trans Evaporator to NI)</th>
<th style="border:1px solid black;" v-if="val_1[3] == 'fm4_temp'" >TEMP (Water N1)</th>
<th style="border:1px solid black;" v-if="val_1[3] == 'fm5_temp'" >TEMP (N2 to D402)</th>
<th style="border:1px solid black;" v-if="val_1[3] == 'fm6_temp'" >TEMP (N3 to Slag pool)</th>
<th style="border:1px solid black;" v-if="val_1[3] == 'fm7_temp'" >TEMP (D602to Metdanol Storage Tank)</th>
<th style="border:1px solid black;" v-if="val_1[3] == 'fm8_temp'" >TEMP (D402-D501)</th>
<th style="border:1px solid black;" v-if="val_1[3] == 'fm9_temp'" >TEMP (D501-T501)</th>
<th style="border:1px solid black;" v-if="val_1[3] == 'fm10_temp'" >TEMP (T501-T502)</th>
<th style="border:1px solid black;" v-if="val_1[3] == 'fm11_temp'" >TEMP (Tar Transfer)</th>
<th style="border:1px solid black;" v-if="val_1[3] == 'fm12_temp'" >TEMP (Recycle to D405 Line)</th>
<th style="border:1px solid black;" v-if="val_1[3] == 'fm13_temp'" >TEMP (Biodiesel to Storage)</th>
<th style="border:1px solid black;" v-if="val_1[3] == 'fm14_temp'" >TEMP (D403 into T601)</th>
<th style="border:1px solid black;" v-if="val_1[3] == 'fm3_temp'" >TEMP (T601 to D602) </th>
<th style="border:1px solid black;" v-if="val_1[3] == 'fm16_temp'" >TEMP (T601 to Reflux)</th>
<th style="border:1px solid black;" v-if="val_1[3] == 'fm17_temp'" >TEMP (T601 Drain)</th>
<th style="border:1px solid black;" v-if="val_1[3] == 'fm18_temp'" >TEMP (Matdanol into GST 1 and 2)</th>
<th style="border:1px solid black;" v-if="val_1[3] == 'fm19_temp'" >TEMP (Metdanol into PPRA and B)</th>
<th style="border:1px solid black;" v-if="val_1[3] == 'fm20_temp'" >TEMP (Matdanol into GLV)</th>
<th style="border:1px solid black;" v-if="val_1[3] == 'fm21_temp'" >TEMP (Metdanol into Trans)</th>
<th style="border:1px solid black;" v-if="val_1[3] == 'fm22_temp'" >TEMP (Biodiesel Storage to Truck)</th>
<th style="border:1px solid black;" v-if="val_1[3] == 'fm23_temp'" >TEMP (Raw Material Offloading)</th>
<th style="border:1px solid black;" v-if="val_1[3] == 'fm24_temp'" >TEMP (Raw Metarial to Settling Tank)</th>
<th style="border:1px solid black;" v-if="val_1[3] == 'fm25_temp'" >TEMP (Settling Tank to D101)</th>
<th style="border:1px solid black;" v-if="val_1[3] == 'fm26_temp'" >TEMP (CT Outlet)</th>
<th style="border:1px solid black;" v-if="val_1[3] == 'fm27_temp'" >TEMP (CT Inlet)</th>
                    <th style="border:1px solid black;" v-if="val_1[3] == 'rdl_32'" >GST-2-L</th>
                    <th style="border:1px solid black;" v-if="val_1[3] == 'vr_32'" >GST-2-V</th>
                    <th style="border:1px solid black;" v-if="val_1[3] == 'rtd_42'" >GST-2-T</th>
                    <th style="border:1px solid black;" v-if="val_1[3] == 'fm_45'" >(Metdanol Transfer)</th>
                    <th style="border:1px solid black;" v-if="val_1[3] == 'ft_45'" >FT (Metdanol Transfer)</th>
                    <th style="border:1px solid black;" v-if="val_1[3] == 'fm45_den'" >DEN (Metdanol Transfer)</th>
                    <th style="border:1px solid black;" v-if="val_1[3] == 'fm45_temp'" >TEMP (Metdanol Transfer)</th>
                    <th style="border:1px solid black;" v-if="val_1[3] == 'fm_62'" >(RVP)</th>
                    <th style="border:1px solid black;" v-if="val_1[3] == 'ft_62'" >FT (RVP)</th>
                    <th style="border:1px solid black;" v-if="val_1[3] == 'fm_66'" >(Milky)</th>
                    <th style="border:1px solid black;" v-if="val_1[3] == 'ft_66'" >FT (Milky)</th>

                     <th style="border:1px solid black;" v-if="val_1[4] == 'st_fm2_flow'">Main Steam</th>
                    <th style="border:1px solid black;" v-if="val_1[4] == 'stfm2_flow_tot'">Total Flow</th>
                    <th style="border:1px solid black;" v-if="val_1[4] == 'stfm2_temp'">Temp</th>
                    <th style="border:1px solid black;" v-if="val_1[4] == 'stfm2_pressure'">Pressure</th>

                    <th style="border:1px solid black;" v-if="val_1[4] == 'st_fm1_flow'">Steam to E401</th>
                    <th style="border:1px solid black;" v-if="val_1[4] == 'stfm1_flow_tot'">Total Flow</th>
                    <th style="border:1px solid black;" v-if="val_1[4] == 'stfm1_temp'">Temp</th>
                    <th style="border:1px solid black;" v-if="val_1[4] == 'stfm1_pressure'">Pressure</th>

                    <th style="border:1px solid black;" v-if="val_1[4] == 'rdl_1'" >D101A-L</th>
                    <th style="border:1px solid black;" v-if="val_1[4] == 'vr_1'" >D101A-V</th>
                    <th style="border:1px solid black;" v-if="val_1[4] == 'rdl_2'" >D101B-L</th>
                    <th style="border:1px solid black;" v-if="val_1[4] == 'vr_2'" >D101B-V</th>
                    <th style="border:1px solid black;" v-if="val_1[4] == 'rdl_3'" >D405A-L</th>
                    <th style="border:1px solid black;" v-if="val_1[4] == 'vr_3'" >D405A-V</th>
                    <th style="border:1px solid black;" v-if="val_1[4] == 'rdl_4'" >D405B-L</th>
                    <th style="border:1px solid black;" v-if="val_1[4] == 'vr_4'" >D405B-V</th>
                    <th style="border:1px solid black;" v-if="val_1[4] == 'rdl_5'" >D405C-L</th>
                    <th style="border:1px solid black;" v-if="val_1[4] == 'vr_5'" >D405C-V</th>
                    <th style="border:1px solid black;" v-if="val_1[4] == 'rdl_6'" >C401A-L</th>
                    <th style="border:1px solid black;" v-if="val_1[4] == 'vr_6'" >C401A-V</th>
                    <th style="border:1px solid black;" v-if="val_1[4] == 'rdl_7'" >C401B-L</th>
                    <th style="border:1px solid black;" v-if="val_1[4] == 'vr_7'" >C401B-V</th>
                    <th style="border:1px solid black;" v-if="val_1[4] == 'rdl_8'" >D402A-L</th>
                    <th style="border:1px solid black;" v-if="val_1[4] == 'vr_8'" >D402A-V</th>
                    <th style="border:1px solid black;" v-if="val_1[4] == 'rdl_9'" >D402B-L</th>
                    <th style="border:1px solid black;" v-if="val_1[4] == 'vr_9'" >D402B-V</th>
                    <th style="border:1px solid black;" v-if="val_1[4] == 'rdl_10'" >D402C-L</th>
                    <th style="border:1px solid black;" v-if="val_1[4] == 'vr_10'" >D402C-V</th>
                    <th style="border:1px solid black;" v-if="val_1[4] == 'rdl_11'" >D402D-L</th>
                    <th style="border:1px solid black;" v-if="val_1[4] == 'vr_11'" >D402D-V</th>
                    <th style="border:1px solid black;" v-if="val_1[4] == 'rdl_12'" >GLV-L</th>
                    <th style="border:1px solid black;" v-if="val_1[4] == 'vr_12'" >GLV-V</th>
                    <th style="border:1px solid black;" v-if="val_1[4] == 'rdl_13'" >SettlingA-L</th>
                    <th style="border:1px solid black;" v-if="val_1[4] == 'vr_13'" >SettlingA-V</th>
                    <th style="border:1px solid black;" v-if="val_1[4] == 'rdl_14'" >SettlingB-L</th>
                    <th style="border:1px solid black;" v-if="val_1[4] == 'vr_14'" >SettlingB-V</th>
                    <th style="border:1px solid black;" v-if="val_1[4] == 'rdl_15'" >SettlingC-L</th>
                    <th style="border:1px solid black;" v-if="val_1[4] == 'vr_15'" >SettlingC-V</th>
                    <th style="border:1px solid black;" v-if="val_1[4] == 'rdl_16'" >Metdanol T1-L</th>
                    <th style="border:1px solid black;" v-if="val_1[4] == 'vr_16'" >Metdanol T1-V</th>
                    <th style="border:1px solid black;" v-if="val_1[4] == 'rdl_17'" >Tar-L</th>
                    <th style="border:1px solid black;" v-if="val_1[4] == 'vr_17'" >Tar-V</th>
                    <th style="border:1px solid black;" v-if="val_1[4] == 'rdl_18'" >GST T1-L</th>
                    <th style="border:1px solid black;" v-if="val_1[4] == 'vr_18'" >GST T1-V</th>
                    <th style="border:1px solid black;" v-if="val_1[4] == 'rdl_19'" >Metdanol T2-L</th>
                    <th style="border:1px solid black;" v-if="val_1[4] == 'vr_19'" >Metdanol T2-V</th>
                    <th style="border:1px solid black;" v-if="val_1[4] == 'rdl_20'" >SP1-L</th>
                    <th style="border:1px solid black;" v-if="val_1[4] == 'vr_20'" >SP1-V</th>
                    <th style="border:1px solid black;" v-if="val_1[4] == 'rdl_21'" >SP2-L</th>
                    <th style="border:1px solid black;" v-if="val_1[4] == 'vr_21'" >SP2-V</th>
                    <th style="border:1px solid black;" v-if="val_1[4] == 'rdl_22'" >SP3-L</th>
                    <th style="border:1px solid black;" v-if="val_1[4] == 'vr_22'" >SP3-V</th>
                    <th style="border:1px solid black;" v-if="val_1[4] == 'rdl_23'" >PPRA-L</th>
                    <th style="border:1px solid black;" v-if="val_1[4] == 'vr_23'" >PPRA-V</th>
                    <th style="border:1px solid black;" v-if="val_1[4] == 'rdl_24'" >PPRB-L</th>
                    <th style="border:1px solid black;" v-if="val_1[4] == 'vr_24'" >PPRB-V</th>
                    <th style="border:1px solid black;" v-if="val_1[4] == 'rdl_25'" >H2SO4-L</th>
                    <th style="border:1px solid black;" v-if="val_1[4] == 'rdl25_volume'" >H2SO4-V</th>
                    <th style="border:1px solid black;" v-if="val_1[4] == 'rdl25_mass'" >Mass In Kg</th>
                    <th style="border:1px solid black;" v-if="val_1[4] == 'rtd_1'" >E101-T</th>
                    <th style="border:1px solid black;" v-if="val_1[4] == 'rtd_2'" >D101A-T</th>
                    <th style="border:1px solid black;" v-if="val_1[4] == 'rtd_3'" >D101B-T</th>
                    <th style="border:1px solid black;" v-if="val_1[4] == 'rtd_4'" >E201-T</th>
                    <th style="border:1px solid black;" v-if="val_1[4] == 'rtd_5'" >GLV-Top-T</th>
                    <th style="border:1px solid black;" v-if="val_1[4] == 'rtd_6'" >GLV-Mid-T</th>
                    <th style="border:1px solid black;" v-if="val_1[4] == 'rtd_7'" >GLV-BTM-T</th>
                    <th style="border:1px solid black;" v-if="val_1[4] == 'rtd_8'" >GLV-EVP-T</th>
                    <th style="border:1px solid black;" v-if="val_1[4] == 'rtd_9'" >SettlingA-T</th>
                    <th style="border:1px solid black;" v-if="val_1[4] == 'rtd_10'" >SettlingB-T</th>
                    <th style="border:1px solid black;" v-if="val_1[4] == 'rtd_11'" >SettlingC-T</th>
                    <th style="border:1px solid black;" v-if="val_1[4] == 'rtd_12'" >Hot Water-T</th>
                    <th style="border:1px solid black;" v-if="val_1[4] == 'rtd_13'" >D402A-T</th>
                    <th style="border:1px solid black;" v-if="val_1[4] == 'rtd_14'" >D402B-T</th>
                    <th style="border:1px solid black;" v-if="val_1[4] == 'rtd_15'" >D402C-T</th>
                    <th style="border:1px solid black;" v-if="val_1[4] == 'rtd_16'" >D402D-T</th>
                    <th style="border:1px solid black;" v-if="val_1[4] == 'rtd_17'" >Trans EVP-T</th>
                    <th style="border:1px solid black;" v-if="val_1[4] == 'rtd_18'" >Blue-T</th>
                    <th style="border:1px solid black;" v-if="val_1[4] == 'rtd_19'" >Green-T</th>
                    <th style="border:1px solid black;" v-if="val_1[4] == 'rtd_20'" >Old Green-T</th>
                    <th style="border:1px solid black;" v-if="val_1[4] == 'rtd_21'" >E601-T</th>
                    <th style="border:1px solid black;" v-if="val_1[4] == 'rtd_22'" >T601-Top-T</th>
                    <th style="border:1px solid black;" v-if="val_1[4] == 'rtd_23'" >T601-Mid-T</th>
                    <th style="border:1px solid black;" v-if="val_1[4] == 'rtd_24'" >T601-BTM-T</th>
                    <th style="border:1px solid black;" v-if="val_1[4] == 'rtd_25'" >E501</th>
                    <th style="border:1px solid black;" v-if="val_1[4] == 'rtd_26'" >D501</th>
                    <th style="border:1px solid black;" v-if="val_1[4] == 'rtd_27'" >T501-Top-T</th>
                    <th style="border:1px solid black;" v-if="val_1[4] == 'rtd_28'" >T501-Mid-T</th>
                    <th style="border:1px solid black;" v-if="val_1[4] == 'rtd_29'" >RTDT501-BTM-T</th>
                    <th style="border:1px solid black;" v-if="val_1[4] == 'rtd_30'" >T502-Mid-T</th>
                    <th style="border:1px solid black;" v-if="val_1[4] == 'rtd_31'" >T502-BTM-T</th>
                    <th style="border:1px solid black;" v-if="val_1[4] == 'rtd_32'" >PPRA-T</th>
                    <th style="border:1px solid black;" v-if="val_1[4] == 'rtd_33'" >PPRB-T</th>
                    <th style="border:1px solid black;" v-if="val_1[4] == 'rtd_34'" >GST T1-T</th>
                    <th style="border:1px solid black;" v-if="val_1[4] == 'rtd_35'" >Trans React-T</th>
                    <th style="border:1px solid black;" v-if="val_1[4] == 'rtd_36'" >Bio Storag-T</th>
                    <th style="border:1px solid black;" v-if="val_1[4] == 'rtd_37'" >Bio Transf-T</th>
                    <th style="border:1px solid black;" v-if="val_1[4] == 'dpl_1'" >D501-L</th>
                    <th style="border:1px solid black;" v-if="val_1[4] == 'vd_1'" >D501-V</th>
                    <th style="border:1px solid black;" v-if="val_1[4] == 'dpl_2'" >E401-L</th>
                    <th style="border:1px solid black;" v-if="val_1[4] == 'vd_2'" >E401-V</th>
                    <th style="border:1px solid black;" v-if="val_1[4] == 'dpl_3'" >T601-L</th>
                    <th style="border:1px solid black;" v-if="val_1[4] == 'vd_3'" >T601-V</th>
                    <th style="border:1px solid black;" v-if="val_1[4] == 'dpl_4'" >D503-L</th>
                    <th style="border:1px solid black;" v-if="val_1[4] == 'vd_4'" >D503-V</th>
                    <th style="border:1px solid black;" v-if="val_1[4] == 'dpl_5'" >D504-L</th>
                    <th style="border:1px solid black;" v-if="val_1[4] == 'vd_5'" >D504-V</th>
                    <th style="border:1px solid black;" v-if="val_1[4] == 'dpl_6'" >T501-L</th>
                    <th style="border:1px solid black;" v-if="val_1[4] == 'vd_6'" >T501-V</th>
                    <th style="border:1px solid black;" v-if="val_1[4] == 'dpl_7'" >T502-L</th>
                    <th style="border:1px solid black;" v-if="val_1[4] == 'vd_7'" >T502-V</th>
                    <th style="border:1px solid black;" v-if="val_1[4] == 'dpl_8'" >Bio Storage Tank-L</th>
                    <th style="border:1px solid black;" v-if="val_1[4] == 'vd_8'" >Bio Storage Tank-V</th>
                    <th style="border:1px solid black;" v-if="val_1[4] == 'fm_1'" >TRANS OIL</th>
                    <th style="border:1px solid black;" v-if="val_1[4] == 'fm_2'" >ALKALI TRANS</th>
                    <th style="border:1px solid black;" v-if="val_1[4] == 'fm_3'" >TRANS EVAPORATOR TO NI</th>
                    <th style="border:1px solid black;" v-if="val_1[4] == 'fm_4'" >WATER N1</th>
                    <th style="border:1px solid black;" v-if="val_1[4] == 'fm_5'" >N2 TO D402</th>
                    <th style="border:1px solid black;" v-if="val_1[4] == 'fm_6'" >N3 TO SLAGPOOL</th>
                    <th style="border:1px solid black;" v-if="val_1[4] == 'fm_7'" >D602 TO METdANOL STORAGE TANK</th>
                    <th style="border:1px solid black;" v-if="val_1[4] == 'fm_8'" >D402-D501</th>
                    <th style="border:1px solid black;" v-if="val_1[4] == 'fm_9'" >D501-T501</th>
                    <th style="border:1px solid black;" v-if="val_1[4] == 'fm_10'" >T501-T502</th>
                    <th style="border:1px solid black;" v-if="val_1[4] == 'fm_11'" >TAR TRANSFER</th>
                    <th style="border:1px solid black;" v-if="val_1[4] == 'fm_12'" >RECYCLE TO D405 LINE</th>
                    <th style="border:1px solid black;" v-if="val_1[4] == 'fm_13'" >BIODIESEL TO STORAGE</th>
                    <th style="border:1px solid black;" v-if="val_1[4] == 'fm_14'" >D403 INTO T601</th>
                    <th style="border:1px solid black;" v-if="val_1[4] == 'fm_15'" >T601-D602</th>
                    <th style="border:1px solid black;" v-if="val_1[4] == 'fm_16'" >T601 TO REFLUX</th>
                    <th style="border:1px solid black;" v-if="val_1[4] == 'fm_17'" >T601 DRAIN</th>
                    <th style="border:1px solid black;" v-if="val_1[4] == 'fm_18'" >METdANOL INTO GST 1 AND 2</th>
                    <th style="border:1px solid black;" v-if="val_1[4] == 'fm_19'" >METdANOL INTO PPRA AND B</th>
                    <th style="border:1px solid black;" v-if="val_1[4] == 'fm_20'" >METdANOL INTO GLV</th>
                    <th style="border:1px solid black;" v-if="val_1[4] == 'fm_21'" >METdANOL INTO TRANS</th>
                    <th style="border:1px solid black;" v-if="val_1[4] == 'fm_22'" >BIODIESEL STORAGE TO TRUCK</th>
                    <th style="border:1px solid black;" v-if="val_1[4] == 'fm_23'" >RAW MATERIAL OFFLOADING</th>
                    <th style="border:1px solid black;" v-if="val_1[4] == 'fm_24'" >RAW MATERIAL TO SETTLING TANK</th>
                    <th style="border:1px solid black;" v-if="val_1[4] == 'fm_25'" >SETTLING TANK TO D101</th>
                    <th style="border:1px solid black;" v-if="val_1[4] == 'fm_26'" >CT OUTLET</th>
                    <th style="border:1px solid black;" v-if="val_1[4] == 'fm_27'" >CT INLET</th>
                    <th style="border:1px solid black;" v-if="val_1[4] == 'ft_1'" >FT TRANS OIL</th>
                    <th style="border:1px solid black;" v-if="val_1[4] == 'ft_2'" >FT ALKALI TRANS</th>
                    <th style="border:1px solid black;" v-if="val_1[4] == 'ft_3'" >FT TRANS EVAPORATOR TO NI</th>
                    <th style="border:1px solid black;" v-if="val_1[4] == 'ft_4'" >FT WATER N1</th>
                    <th style="border:1px solid black;" v-if="val_1[4] == 'ft_5'" >FT N2 TO D402</th>
                    <th style="border:1px solid black;" v-if="val_1[4] == 'ft_6'" >FT N3 TO  SLAGPOOL</th>
                    <th style="border:1px solid black;" v-if="val_1[4] == 'ft_7'" >FT D602 TO METdANOL STORAGE TANK</th>
                    <th style="border:1px solid black;" v-if="val_1[4] == 'ft_8'" >FT D402-D501</th>
                    <th style="border:1px solid black;" v-if="val_1[4] == 'ft_9'" >FT D501-T501</th>
                    <th style="border:1px solid black;" v-if="val_1[4] == 'ft_10'" >FT T501-T502</th>
                    <th style="border:1px solid black;" v-if="val_1[4] == 'ft_11'" >FT TAR TRANSFER</th>
                    <th style="border:1px solid black;" v-if="val_1[4] == 'ft_12'" >FT RECYCLE TO D405</th>
                    <th style="border:1px solid black;" v-if="val_1[4] == 'ft_13'" >FT BIODIESEL TO STORAGE</th>
                    <th style="border:1px solid black;" v-if="val_1[4] == 'ft_14'" >FT D403 INTO T601</th>
                    <th style="border:1px solid black;" v-if="val_1[4] == 'ft_15'" >FT T601-D602</th>
                    <th style="border:1px solid black;" v-if="val_1[4] == 'ft_16'" >FT T601 TO REFLUX</th>
                    <th style="border:1px solid black;" v-if="val_1[4] == 'ft_17'" >FT T601 DRAIN</th>
                    <th style="border:1px solid black;" v-if="val_1[4] == 'ft_18'" >FT METdANOL INTO GST 1 AND 2</th>
                    <th style="border:1px solid black;" v-if="val_1[4] == 'ft_19'" >FT 19</th>
                    <th style="border:1px solid black;" v-if="val_1[4] == 'ft_20'" >FT METdANOL INTO GLV</th>
                    <th style="border:1px solid black;" v-if="val_1[4] == 'ft_21'" >FT METdANOL  INTO TRANS</th>
                    <th style="border:1px solid black;" v-if="val_1[4] == 'ft_22'" >FT BIODIESEL STORAGE TO TRUCK</th>
                    <th style="border:1px solid black;" v-if="val_1[4] == 'ft_23'" >FT RAW MATERIAL OFFLOADING</th>
                    <th style="border:1px solid black;" v-if="val_1[4] == 'ft_24'" >FT RAW MATERIAL TO SETTLING TANK</th>
                    <th style="border:1px solid black;" v-if="val_1[4] == 'ft_25'" >FT SETTLING TANK TO D101</th>
                    <th style="border:1px solid black;" v-if="val_1[4] == 'ft_26'" >FT CT OUTLET</th>
                    <th style="border:1px solid black;" v-if="val_1[4] == 'ft_27'" >FT CT INLET</th>
                    <th style="border:1px solid black;" v-if="val_1[4] == 'pt_1'" >PT 1</th>
                    <th style="border:1px solid black;" v-if="val_1[4] == 'pt_2'" >PT 2</th>
                    <th style="border:1px solid black;" v-if="val_1[4] == 'pt_3'" >PT 3</th>
                    <th style="border:1px solid black;" v-if="val_1[4] == 'pt_4'" >PT 4</th>
                    <th style="border:1px solid black;" v-if="val_1[4] == 'pt_5'" >Dist Header</th>
                    <th style="border:1px solid black;" v-if="val_1[4] == 'vg_1'" >Vac Line</th>
                    <th style="border:1px solid black;" v-if="val_1[4] == 'vg_2'" >VG 2</th>
                    <th style="border:1px solid black;" v-if="val_1[4] == 'vg_3'" >VG 3</th>
                    <th style="border:1px solid black;" v-if="val_1[4] == 'fm1_den'" >DEN (Trans Oil)</th>
<th style="border:1px solid black;" v-if="val_1[4] == 'fm2_den'" >DEN( Alkali Trans)</th>
<th style="border:1px solid black;" v-if="val_1[4] == 'fm3_den'" >DEN (Trans Evaporator to NI)</th>
<th style="border:1px solid black;" v-if="val_1[4] == 'fm4_den'" >DEN (Water N1)</th>
<th style="border:1px solid black;" v-if="val_1[4] == 'fm5_den'" >DEN (N2 to D402)</th>
<th style="border:1px solid black;" v-if="val_1[4] == 'fm6_den'" >DEN (N3 to Slag pool)</th>
<th style="border:1px solid black;" v-if="val_1[4] == 'fm7_den'" >DEN (D602to Metdanol Storage Tank)</th>
<th style="border:1px solid black;" v-if="val_1[4] == 'fm8_den'" >DEN (D402-D501)</th>
<th style="border:1px solid black;" v-if="val_1[4] == 'fm9_den'" >DEN (D501-T501)</th>
<th style="border:1px solid black;" v-if="val_1[4] == 'fm10_den'" >DEN (T501-T502)</th>
<th style="border:1px solid black;" v-if="val_1[4] == 'fm11_den'" >DEN (Tar Transfer)</th>
<th style="border:1px solid black;" v-if="val_1[4] == 'fm12_den'" >DEN (Recycle to D405 Line)</th>
<th style="border:1px solid black;" v-if="val_1[4] == 'fm13_den'" >DEN (Biodiesel to Storage)</th>
<th style="border:1px solid black;" v-if="val_1[4] == 'fm14_den'" >DEN (D403 into T601)</th>
<th style="border:1px solid black;" v-if="val_1[4] == 'fm15_den'" >DEN (T601 to D602) </th>
<th style="border:1px solid black;" v-if="val_1[4] == 'fm16_den'" >DEN (T601 to Reflux)</th>
<th style="border:1px solid black;" v-if="val_1[4] == 'fm17_den'" >DEN (T601 Drain)</th>
<th style="border:1px solid black;" v-if="val_1[4] == 'fm18_den'" >DEN (Matdanol into GST 1 and 2)</th>
<th style="border:1px solid black;" v-if="val_1[4] == 'fm19_den'" >DEN (Metdanol into PPRA and B)</th>
<th style="border:1px solid black;" v-if="val_1[4] == 'fm20_den'" >DEN (Matdanol into GLV)</th>
<th style="border:1px solid black;" v-if="val_1[4] == 'fm21_den'" >DEN (Metdanol into Trans)</th>
<th style="border:1px solid black;" v-if="val_1[4] == 'fm22_den'" >DEN (Biodiesel Storage to Truck)</th>
<th style="border:1px solid black;" v-if="val_1[4] == 'fm23_den'" >DEN (Raw Material Offloading)</th>
<th style="border:1px solid black;" v-if="val_1[4] == 'fm24_den'" >DEN (Raw Metarial to Settling Tank)</th>
<th style="border:1px solid black;" v-if="val_1[4] == 'fm25_den'" >DEN (Settling Tank to D101)</th>
<th style="border:1px solid black;" v-if="val_1[4] == 'fm26_den'" >DEN (CT Outlet)</th>
<th style="border:1px solid black;" v-if="val_1[4] == 'fm27_den'" >DEN (CT Inlet)</th>
<th style="border:1px solid black;" v-if="val_1[4] == 'fm1_temp'" >TEMP (Trans Oil)</th>
<th style="border:1px solid black;" v-if="val_1[4] == 'fm2_temp'" >TEMP( Alkali Trans)</th>
<th style="border:1px solid black;" v-if="val_1[4] == 'fm3_temp'" >TEMP (Trans Evaporator to NI)</th>
<th style="border:1px solid black;" v-if="val_1[4] == 'fm4_temp'" >TEMP (Water N1)</th>
<th style="border:1px solid black;" v-if="val_1[4] == 'fm5_temp'" >TEMP (N2 to D402)</th>
<th style="border:1px solid black;" v-if="val_1[4] == 'fm6_temp'" >TEMP (N3 to Slag pool)</th>
<th style="border:1px solid black;" v-if="val_1[4] == 'fm7_temp'" >TEMP (D602to Metdanol Storage Tank)</th>
<th style="border:1px solid black;" v-if="val_1[4] == 'fm8_temp'" >TEMP (D402-D501)</th>
<th style="border:1px solid black;" v-if="val_1[4] == 'fm9_temp'" >TEMP (D501-T501)</th>
<th style="border:1px solid black;" v-if="val_1[4] == 'fm10_temp'" >TEMP (T501-T502)</th>
<th style="border:1px solid black;" v-if="val_1[4] == 'fm11_temp'" >TEMP (Tar Transfer)</th>
<th style="border:1px solid black;" v-if="val_1[4] == 'fm12_temp'" >TEMP (Recycle to D405 Line)</th>
<th style="border:1px solid black;" v-if="val_1[4] == 'fm13_temp'" >TEMP (Biodiesel to Storage)</th>
<th style="border:1px solid black;" v-if="val_1[4] == 'fm14_temp'" >TEMP (D403 into T601)</th>
<th style="border:1px solid black;" v-if="val_1[4] == 'fm4_temp'" >TEMP (T601 to D602) </th>
<th style="border:1px solid black;" v-if="val_1[4] == 'fm16_temp'" >TEMP (T601 to Reflux)</th>
<th style="border:1px solid black;" v-if="val_1[4] == 'fm17_temp'" >TEMP (T601 Drain)</th>
<th style="border:1px solid black;" v-if="val_1[4] == 'fm18_temp'" >TEMP (Matdanol into GST 1 and 2)</th>
<th style="border:1px solid black;" v-if="val_1[4] == 'fm19_temp'" >TEMP (Metdanol into PPRA and B)</th>
<th style="border:1px solid black;" v-if="val_1[4] == 'fm20_temp'" >TEMP (Matdanol into GLV)</th>
<th style="border:1px solid black;" v-if="val_1[4] == 'fm21_temp'" >TEMP (Metdanol into Trans)</th>
<th style="border:1px solid black;" v-if="val_1[4] == 'fm22_temp'" >TEMP (Biodiesel Storage to Truck)</th>
<th style="border:1px solid black;" v-if="val_1[4] == 'fm23_temp'" >TEMP (Raw Material Offloading)</th>
<th style="border:1px solid black;" v-if="val_1[4] == 'fm24_temp'" >TEMP (Raw Metarial to Settling Tank)</th>
<th style="border:1px solid black;" v-if="val_1[4] == 'fm25_temp'" >TEMP (Settling Tank to D101)</th>
<th style="border:1px solid black;" v-if="val_1[4] == 'fm26_temp'" >TEMP (CT Outlet)</th>
<th style="border:1px solid black;" v-if="val_1[4] == 'fm27_temp'" >TEMP (CT Inlet)</th>
                    <th style="border:1px solid black;" v-if="val_1[4] == 'rdl_32'" >GST-2-L</th>
                    <th style="border:1px solid black;" v-if="val_1[4] == 'vr_32'" >GST-2-V</th>
                    <th style="border:1px solid black;" v-if="val_1[4] == 'rtd_42'" >GST-2-T</th>
                    <th style="border:1px solid black;" v-if="val_1[4] == 'fm_45'" >(Metdanol Transfer)</th>
                    <th style="border:1px solid black;" v-if="val_1[4] == 'ft_45'" >FT (Metdanol Transfer)</th>
                    <th style="border:1px solid black;" v-if="val_1[4] == 'fm45_den'" >DEN (Metdanol Transfer)</th>
                    <th style="border:1px solid black;" v-if="val_1[4] == 'fm45_temp'" >TEMP (Metdanol Transfer)</th>
                    <th style="border:1px solid black;" v-if="val_1[4] == 'fm_62'" >(RVP)</th>
                    <th style="border:1px solid black;" v-if="val_1[4] == 'ft_62'" >FT (RVP)</th>
                    <th style="border:1px solid black;" v-if="val_1[4] == 'fm_66'" >(Milky)</th>
                    <th style="border:1px solid black;" v-if="val_1[4] == 'ft_66'" >FT (Milky)</th>

                    <th style="border:1px solid black;" v-if="val_1[5] == 'st_fm2_flow'">Main Steam</th>
                    <th style="border:1px solid black;" v-if="val_1[5] == 'stfm2_flow_tot'">Total Flow</th>
                    <th style="border:1px solid black;" v-if="val_1[5] == 'stfm2_temp'">Temp</th>
                    <th style="border:1px solid black;" v-if="val_1[5] == 'stfm2_pressure'">Pressure</th>

                    <th style="border:1px solid black;" v-if="val_1[5] == 'st_fm1_flow'">Steam to E401</th>
                    <th style="border:1px solid black;" v-if="val_1[5] == 'stfm1_flow_tot'">Total Flow</th>
                    <th style="border:1px solid black;" v-if="val_1[5] == 'stfm1_temp'">Temp</th>
                    <th style="border:1px solid black;" v-if="val_1[5] == 'stfm1_pressure'">Pressure</th>

                    <th style="border:1px solid black;" v-if="val_1[5] == 'rdl_1'" >D101A-L</th>
                    <th style="border:1px solid black;" v-if="val_1[5] == 'vr_1'" >D101A-V</th>
                    <th style="border:1px solid black;" v-if="val_1[5] == 'rdl_2'" >D101B-L</th>
                    <th style="border:1px solid black;" v-if="val_1[5] == 'vr_2'" >D101B-V</th>
                    <th style="border:1px solid black;" v-if="val_1[5] == 'rdl_3'" >D405A-L</th>
                    <th style="border:1px solid black;" v-if="val_1[5] == 'vr_3'" >D405A-V</th>
                    <th style="border:1px solid black;" v-if="val_1[5] == 'rdl_4'" >D405B-L</th>
                    <th style="border:1px solid black;" v-if="val_1[5] == 'vr_4'" >D405B-V</th>
                    <th style="border:1px solid black;" v-if="val_1[5] == 'rdl_5'" >D405C-L</th>
                    <th style="border:1px solid black;" v-if="val_1[5] == 'vr_5'" >D405C-V</th>
                    <th style="border:1px solid black;" v-if="val_1[5] == 'rdl_6'" >C401A-L</th>
                    <th style="border:1px solid black;" v-if="val_1[5] == 'vr_6'" >C401A-V</th>
                    <th style="border:1px solid black;" v-if="val_1[5] == 'rdl_7'" >C401B-L</th>
                    <th style="border:1px solid black;" v-if="val_1[5] == 'vr_7'" >C401B-V</th>
                    <th style="border:1px solid black;" v-if="val_1[5] == 'rdl_8'" >D402A-L</th>
                    <th style="border:1px solid black;" v-if="val_1[5] == 'vr_8'" >D402A-V</th>
                    <th style="border:1px solid black;" v-if="val_1[5] == 'rdl_9'" >D402B-L</th>
                    <th style="border:1px solid black;" v-if="val_1[5] == 'vr_9'" >D402B-V</th>
                    <th style="border:1px solid black;" v-if="val_1[5] == 'rdl_10'" >D402C-L</th>
                    <th style="border:1px solid black;" v-if="val_1[5] == 'vr_10'" >D402C-V</th>
                    <th style="border:1px solid black;" v-if="val_1[5] == 'rdl_11'" >D402D-L</th>
                    <th style="border:1px solid black;" v-if="val_1[5] == 'vr_11'" >D402D-V</th>
                    <th style="border:1px solid black;" v-if="val_1[5] == 'rdl_12'" >GLV-L</th>
                    <th style="border:1px solid black;" v-if="val_1[5] == 'vr_12'" >GLV-V</th>
                    <th style="border:1px solid black;" v-if="val_1[5] == 'rdl_13'" >SettlingA-L</th>
                    <th style="border:1px solid black;" v-if="val_1[5] == 'vr_13'" >SettlingA-V</th>
                    <th style="border:1px solid black;" v-if="val_1[5] == 'rdl_14'" >SettlingB-L</th>
                    <th style="border:1px solid black;" v-if="val_1[5] == 'vr_14'" >SettlingB-V</th>
                    <th style="border:1px solid black;" v-if="val_1[5] == 'rdl_15'" >SettlingC-L</th>
                    <th style="border:1px solid black;" v-if="val_1[5] == 'vr_15'" >SettlingC-V</th>
                    <th style="border:1px solid black;" v-if="val_1[5] == 'rdl_16'" >Metdanol T1-L</th>
                    <th style="border:1px solid black;" v-if="val_1[5] == 'vr_16'" >Metdanol T1-V</th>
                    <th style="border:1px solid black;" v-if="val_1[5] == 'rdl_17'" >Tar-L</th>
                    <th style="border:1px solid black;" v-if="val_1[5] == 'vr_17'" >Tar-V</th>
                    <th style="border:1px solid black;" v-if="val_1[5] == 'rdl_18'" >GST T1-L</th>
                    <th style="border:1px solid black;" v-if="val_1[5] == 'vr_18'" >GST T1-V</th>
                    <th style="border:1px solid black;" v-if="val_1[5] == 'rdl_19'" >Metdanol T2-L</th>
                    <th style="border:1px solid black;" v-if="val_1[5] == 'vr_19'" >Metdanol T2-V</th>
                    <th style="border:1px solid black;" v-if="val_1[5] == 'rdl_20'" >SP1-L</th>
                    <th style="border:1px solid black;" v-if="val_1[5] == 'vr_20'" >SP1-V</th>
                    <th style="border:1px solid black;" v-if="val_1[5] == 'rdl_21'" >SP2-L</th>
                    <th style="border:1px solid black;" v-if="val_1[5] == 'vr_21'" >SP2-V</th>
                    <th style="border:1px solid black;" v-if="val_1[5] == 'rdl_22'" >SP3-L</th>
                    <th style="border:1px solid black;" v-if="val_1[5] == 'vr_22'" >SP3-V</th>
                    <th style="border:1px solid black;" v-if="val_1[5] == 'rdl_23'" >PPRA-L</th>
                    <th style="border:1px solid black;" v-if="val_1[5] == 'vr_23'" >PPRA-V</th>
                    <th style="border:1px solid black;" v-if="val_1[5] == 'rdl_24'" >PPRB-L</th>
                    <th style="border:1px solid black;" v-if="val_1[5] == 'vr_24'" >PPRB-V</th>
                    <th style="border:1px solid black;" v-if="val_1[5] == 'rdl_25'" >H2SO4-L</th>
                    <th style="border:1px solid black;" v-if="val_1[5] == 'rdl25_volume'" >H2SO4-V</th>
                    <th style="border:1px solid black;" v-if="val_1[5] == 'rdl25_mass'" >Mass In Kg</th>
                    <th style="border:1px solid black;" v-if="val_1[5] == 'rtd_1'" >E101-T</th>
                    <th style="border:1px solid black;" v-if="val_1[5] == 'rtd_2'" >D101A-T</th>
                    <th style="border:1px solid black;" v-if="val_1[5] == 'rtd_3'" >D101B-T</th>
                    <th style="border:1px solid black;" v-if="val_1[5] == 'rtd_4'" >E201-T</th>
                    <th style="border:1px solid black;" v-if="val_1[5] == 'rtd_5'" >GLV-Top-T</th>
                    <th style="border:1px solid black;" v-if="val_1[5] == 'rtd_6'" >GLV-Mid-T</th>
                    <th style="border:1px solid black;" v-if="val_1[5] == 'rtd_7'" >GLV-BTM-T</th>
                    <th style="border:1px solid black;" v-if="val_1[5] == 'rtd_8'" >GLV-EVP-T</th>
                    <th style="border:1px solid black;" v-if="val_1[5] == 'rtd_9'" >SettlingA-T</th>
                    <th style="border:1px solid black;" v-if="val_1[5] == 'rtd_10'" >SettlingB-T</th>
                    <th style="border:1px solid black;" v-if="val_1[5] == 'rtd_11'" >SettlingC-T</th>
                    <th style="border:1px solid black;" v-if="val_1[5] == 'rtd_12'" >Hot Water-T</th>
                    <th style="border:1px solid black;" v-if="val_1[5] == 'rtd_13'" >D402A-T</th>
                    <th style="border:1px solid black;" v-if="val_1[5] == 'rtd_14'" >D402B-T</th>
                    <th style="border:1px solid black;" v-if="val_1[5] == 'rtd_15'" >D402C-T</th>
                    <th style="border:1px solid black;" v-if="val_1[5] == 'rtd_16'" >D402D-T</th>
                    <th style="border:1px solid black;" v-if="val_1[5] == 'rtd_17'" >Trans EVP-T</th>
                    <th style="border:1px solid black;" v-if="val_1[5] == 'rtd_18'" >Blue-T</th>
                    <th style="border:1px solid black;" v-if="val_1[5] == 'rtd_19'" >Green-T</th>
                    <th style="border:1px solid black;" v-if="val_1[5] == 'rtd_20'" >Old Green-T</th>
                    <th style="border:1px solid black;" v-if="val_1[5] == 'rtd_21'" >E601-T</th>
                    <th style="border:1px solid black;" v-if="val_1[5] == 'rtd_22'" >T601-Top-T</th>
                    <th style="border:1px solid black;" v-if="val_1[5] == 'rtd_23'" >T601-Mid-T</th>
                    <th style="border:1px solid black;" v-if="val_1[5] == 'rtd_24'" >T601-BTM-T</th>
                    <th style="border:1px solid black;" v-if="val_1[5] == 'rtd_25'" >E501</th>
                    <th style="border:1px solid black;" v-if="val_1[5] == 'rtd_26'" >D501</th>
                    <th style="border:1px solid black;" v-if="val_1[5] == 'rtd_27'" >T501-Top-T</th>
                    <th style="border:1px solid black;" v-if="val_1[5] == 'rtd_28'" >T501-Mid-T</th>
                    <th style="border:1px solid black;" v-if="val_1[5] == 'rtd_29'" >RTDT501-BTM-T</th>
                    <th style="border:1px solid black;" v-if="val_1[5] == 'rtd_30'" >T502-Mid-T</th>
                    <th style="border:1px solid black;" v-if="val_1[5] == 'rtd_31'" >T502-BTM-T</th>
                    <th style="border:1px solid black;" v-if="val_1[5] == 'rtd_32'" >PPRA-T</th>
                    <th style="border:1px solid black;" v-if="val_1[5] == 'rtd_33'" >PPRB-T</th>
                    <th style="border:1px solid black;" v-if="val_1[5] == 'rtd_34'" >GST T1-T</th>
                    <th style="border:1px solid black;" v-if="val_1[5] == 'rtd_35'" >Trans React-T</th>
                    <th style="border:1px solid black;" v-if="val_1[5] == 'rtd_36'" >Bio Storag-T</th>
                    <th style="border:1px solid black;" v-if="val_1[5] == 'rtd_37'" >Bio Transf-T</th>
                    <th style="border:1px solid black;" v-if="val_1[5] == 'dpl_1'" >D501-L</th>
                    <th style="border:1px solid black;" v-if="val_1[5] == 'vd_1'" >D501-V</th>
                    <th style="border:1px solid black;" v-if="val_1[5] == 'dpl_2'" >E401-L</th>
                    <th style="border:1px solid black;" v-if="val_1[5] == 'vd_2'" >E401-V</th>
                    <th style="border:1px solid black;" v-if="val_1[5] == 'dpl_3'" >T601-L</th>
                    <th style="border:1px solid black;" v-if="val_1[5] == 'vd_3'" >T601-V</th>
                    <th style="border:1px solid black;" v-if="val_1[5] == 'dpl_4'" >D503-L</th>
                    <th style="border:1px solid black;" v-if="val_1[5] == 'vd_4'" >D503-V</th>
                    <th style="border:1px solid black;" v-if="val_1[5] == 'dpl_5'" >D504-L</th>
                    <th style="border:1px solid black;" v-if="val_1[5] == 'vd_5'" >D504-V</th>
                    <th style="border:1px solid black;" v-if="val_1[5] == 'dpl_6'" >T501-L</th>
                    <th style="border:1px solid black;" v-if="val_1[5] == 'vd_6'" >T501-V</th>
                    <th style="border:1px solid black;" v-if="val_1[5] == 'dpl_7'" >T502-L</th>
                    <th style="border:1px solid black;" v-if="val_1[5] == 'vd_7'" >T502-V</th>
                    <th style="border:1px solid black;" v-if="val_1[5] == 'dpl_8'" >Bio Storage Tank-L</th>
                    <th style="border:1px solid black;" v-if="val_1[5] == 'vd_8'" >Bio Storage Tank-V</th>
                    <th style="border:1px solid black;" v-if="val_1[5] == 'fm_1'" >TRANS OIL</th>
                    <th style="border:1px solid black;" v-if="val_1[5] == 'fm_2'" >ALKALI TRANS</th>
                    <th style="border:1px solid black;" v-if="val_1[5] == 'fm_3'" >TRANS EVAPORATOR TO NI</th>
                    <th style="border:1px solid black;" v-if="val_1[5] == 'fm_4'" >WATER N1</th>
                    <th style="border:1px solid black;" v-if="val_1[5] == 'fm_5'" >N2 TO D402</th>
                    <th style="border:1px solid black;" v-if="val_1[5] == 'fm_6'" >N3 TO SLAGPOOL</th>
                    <th style="border:1px solid black;" v-if="val_1[5] == 'fm_7'" >D602 TO METdANOL STORAGE TANK</th>
                    <th style="border:1px solid black;" v-if="val_1[5] == 'fm_8'" >D402-D501</th>
                    <th style="border:1px solid black;" v-if="val_1[5] == 'fm_9'" >D501-T501</th>
                    <th style="border:1px solid black;" v-if="val_1[5] == 'fm_10'" >T501-T502</th>
                    <th style="border:1px solid black;" v-if="val_1[5] == 'fm_11'" >TAR TRANSFER</th>
                    <th style="border:1px solid black;" v-if="val_1[5] == 'fm_12'" >RECYCLE TO D405 LINE</th>
                    <th style="border:1px solid black;" v-if="val_1[5] == 'fm_13'" >BIODIESEL TO STORAGE</th>
                    <th style="border:1px solid black;" v-if="val_1[5] == 'fm_14'" >D403 INTO T601</th>
                    <th style="border:1px solid black;" v-if="val_1[5] == 'fm_15'" >T601-D602</th>
                    <th style="border:1px solid black;" v-if="val_1[5] == 'fm_16'" >T601 TO REFLUX</th>
                    <th style="border:1px solid black;" v-if="val_1[5] == 'fm_17'" >T601 DRAIN</th>
                    <th style="border:1px solid black;" v-if="val_1[5] == 'fm_18'" >METdANOL INTO GST 1 AND 2</th>
                    <th style="border:1px solid black;" v-if="val_1[5] == 'fm_19'" >METdANOL INTO PPRA AND B</th>
                    <th style="border:1px solid black;" v-if="val_1[5] == 'fm_20'" >METdANOL INTO GLV</th>
                    <th style="border:1px solid black;" v-if="val_1[5] == 'fm_21'" >METdANOL INTO TRANS</th>
                    <th style="border:1px solid black;" v-if="val_1[5] == 'fm_22'" >BIODIESEL STORAGE TO TRUCK</th>
                    <th style="border:1px solid black;" v-if="val_1[5] == 'fm_23'" >RAW MATERIAL OFFLOADING</th>
                    <th style="border:1px solid black;" v-if="val_1[5] == 'fm_24'" >RAW MATERIAL TO SETTLING TANK</th>
                    <th style="border:1px solid black;" v-if="val_1[5] == 'fm_25'" >SETTLING TANK TO D101</th>
                    <th style="border:1px solid black;" v-if="val_1[5] == 'fm_26'" >CT OUTLET</th>
                    <th style="border:1px solid black;" v-if="val_1[5] == 'fm_27'" >CT INLET</th>
                    <th style="border:1px solid black;" v-if="val_1[5] == 'ft_1'" >FT TRANS OIL</th>
                    <th style="border:1px solid black;" v-if="val_1[5] == 'ft_2'" >FT ALKALI TRANS</th>
                    <th style="border:1px solid black;" v-if="val_1[5] == 'ft_3'" >FT TRANS EVAPORATOR TO NI</th>
                    <th style="border:1px solid black;" v-if="val_1[5] == 'ft_4'" >FT WATER N1</th>
                    <th style="border:1px solid black;" v-if="val_1[5] == 'ft_5'" >FT N2 TO D402</th>
                    <th style="border:1px solid black;" v-if="val_1[5] == 'ft_6'" >FT N3 TO  SLAGPOOL</th>
                    <th style="border:1px solid black;" v-if="val_1[5] == 'ft_7'" >FT D602 TO METdANOL STORAGE TANK</th>
                    <th style="border:1px solid black;" v-if="val_1[5] == 'ft_8'" >FT D402-D501</th>
                    <th style="border:1px solid black;" v-if="val_1[5] == 'ft_9'" >FT D501-T501</th>
                    <th style="border:1px solid black;" v-if="val_1[5] == 'ft_10'" >FT T501-T502</th>
                    <th style="border:1px solid black;" v-if="val_1[5] == 'ft_11'" >FT TAR TRANSFER</th>
                    <th style="border:1px solid black;" v-if="val_1[5] == 'ft_12'" >FT RECYCLE TO D405</th>
                    <th style="border:1px solid black;" v-if="val_1[5] == 'ft_13'" >FT BIODIESEL TO STORAGE</th>
                    <th style="border:1px solid black;" v-if="val_1[5] == 'ft_14'" >FT D403 INTO T601</th>
                    <th style="border:1px solid black;" v-if="val_1[5] == 'ft_15'" >FT T601-D602</th>
                    <th style="border:1px solid black;" v-if="val_1[5] == 'ft_16'" >FT T601 TO REFLUX</th>
                    <th style="border:1px solid black;" v-if="val_1[5] == 'ft_17'" >FT T601 DRAIN</th>
                    <th style="border:1px solid black;" v-if="val_1[5] == 'ft_18'" >FT METdANOL INTO GST 1 AND 2</th>
                    <th style="border:1px solid black;" v-if="val_1[5] == 'ft_19'" >FT 19</th>
                    <th style="border:1px solid black;" v-if="val_1[5] == 'ft_20'" >FT METdANOL INTO GLV</th>
                    <th style="border:1px solid black;" v-if="val_1[5] == 'ft_21'" >FT METdANOL  INTO TRANS</th>
                    <th style="border:1px solid black;" v-if="val_1[5] == 'ft_22'" >FT BIODIESEL STORAGE TO TRUCK</th>
                    <th style="border:1px solid black;" v-if="val_1[5] == 'ft_23'" >FT RAW MATERIAL OFFLOADING</th>
                    <th style="border:1px solid black;" v-if="val_1[5] == 'ft_24'" >FT RAW MATERIAL TO SETTLING TANK</th>
                    <th style="border:1px solid black;" v-if="val_1[5] == 'ft_25'" >FT SETTLING TANK TO D101</th>
                    <th style="border:1px solid black;" v-if="val_1[5] == 'ft_26'" >FT CT OUTLET</th>
                    <th style="border:1px solid black;" v-if="val_1[5] == 'ft_27'" >FT CT INLET</th>
                    <th style="border:1px solid black;" v-if="val_1[5] == 'pt_1'" >PT 1</th>
                    <th style="border:1px solid black;" v-if="val_1[5] == 'pt_2'" >PT 2</th>
                    <th style="border:1px solid black;" v-if="val_1[5] == 'pt_3'" >PT 3</th>
                    <th style="border:1px solid black;" v-if="val_1[5] == 'pt_4'" >PT 4</th>
                    <th style="border:1px solid black;" v-if="val_1[5] == 'pt_5'" >Dist Header</th>
                    <th style="border:1px solid black;" v-if="val_1[5] == 'vg_1'" >Vac Line</th>
                    <th style="border:1px solid black;" v-if="val_1[5] == 'vg_2'" >VG 2</th>
                    <th style="border:1px solid black;" v-if="val_1[5] == 'vg_3'" >VG 3</th>
                    <th style="border:1px solid black;" v-if="val_1[5] == 'fm1_den'" >DEN (Trans Oil)</th>
<th style="border:1px solid black;" v-if="val_1[5] == 'fm2_den'" >DEN( Alkali Trans)</th>
<th style="border:1px solid black;" v-if="val_1[5] == 'fm3_den'" >DEN (Trans Evaporator to NI)</th>
<th style="border:1px solid black;" v-if="val_1[5] == 'fm4_den'" >DEN (Water N1)</th>
<th style="border:1px solid black;" v-if="val_1[5] == 'fm5_den'" >DEN (N2 to D402)</th>
<th style="border:1px solid black;" v-if="val_1[5] == 'fm6_den'" >DEN (N3 to Slag pool)</th>
<th style="border:1px solid black;" v-if="val_1[5] == 'fm7_den'" >DEN (D602to Metdanol Storage Tank)</th>
<th style="border:1px solid black;" v-if="val_1[5] == 'fm8_den'" >DEN (D402-D501)</th>
<th style="border:1px solid black;" v-if="val_1[5] == 'fm9_den'" >DEN (D501-T501)</th>
<th style="border:1px solid black;" v-if="val_1[5] == 'fm10_den'" >DEN (T501-T502)</th>
<th style="border:1px solid black;" v-if="val_1[5] == 'fm11_den'" >DEN (Tar Transfer)</th>
<th style="border:1px solid black;" v-if="val_1[5] == 'fm12_den'" >DEN (Recycle to D405 Line)</th>
<th style="border:1px solid black;" v-if="val_1[5] == 'fm13_den'" >DEN (Biodiesel to Storage)</th>
<th style="border:1px solid black;" v-if="val_1[5] == 'fm14_den'" >DEN (D403 into T601)</th>
<th style="border:1px solid black;" v-if="val_1[5] == 'fm15_den'" >DEN (T601 to D602) </th>
<th style="border:1px solid black;" v-if="val_1[5] == 'fm16_den'" >DEN (T601 to Reflux)</th>
<th style="border:1px solid black;" v-if="val_1[5] == 'fm17_den'" >DEN (T601 Drain)</th>
<th style="border:1px solid black;" v-if="val_1[5] == 'fm18_den'" >DEN (Matdanol into GST 1 and 2)</th>
<th style="border:1px solid black;" v-if="val_1[5] == 'fm19_den'" >DEN (Metdanol into PPRA and B)</th>
<th style="border:1px solid black;" v-if="val_1[5] == 'fm20_den'" >DEN (Matdanol into GLV)</th>
<th style="border:1px solid black;" v-if="val_1[5] == 'fm21_den'" >DEN (Metdanol into Trans)</th>
<th style="border:1px solid black;" v-if="val_1[5] == 'fm22_den'" >DEN (Biodiesel Storage to Truck)</th>
<th style="border:1px solid black;" v-if="val_1[5] == 'fm23_den'" >DEN (Raw Material Offloading)</th>
<th style="border:1px solid black;" v-if="val_1[5] == 'fm24_den'" >DEN (Raw Metarial to Settling Tank)</th>
<th style="border:1px solid black;" v-if="val_1[5] == 'fm25_den'" >DEN (Settling Tank to D101)</th>
<th style="border:1px solid black;" v-if="val_1[5] == 'fm26_den'" >DEN (CT Outlet)</th>
<th style="border:1px solid black;" v-if="val_1[5] == 'fm27_den'" >DEN (CT Inlet)</th>
<th style="border:1px solid black;" v-if="val_1[5] == 'fm1_temp'" >TEMP (Trans Oil)</th>
<th style="border:1px solid black;" v-if="val_1[5] == 'fm2_temp'" >TEMP( Alkali Trans)</th>
<th style="border:1px solid black;" v-if="val_1[5] == 'fm3_temp'" >TEMP (Trans Evaporator to NI)</th>
<th style="border:1px solid black;" v-if="val_1[5] == 'fm4_temp'" >TEMP (Water N1)</th>
<th style="border:1px solid black;" v-if="val_1[5] == 'fm5_temp'" >TEMP (N2 to D402)</th>
<th style="border:1px solid black;" v-if="val_1[5] == 'fm6_temp'" >TEMP (N3 to Slag pool)</th>
<th style="border:1px solid black;" v-if="val_1[5] == 'fm7_temp'" >TEMP (D602to Metdanol Storage Tank)</th>
<th style="border:1px solid black;" v-if="val_1[5] == 'fm8_temp'" >TEMP (D402-D501)</th>
<th style="border:1px solid black;" v-if="val_1[5] == 'fm9_temp'" >TEMP (D501-T501)</th>
<th style="border:1px solid black;" v-if="val_1[5] == 'fm10_temp'" >TEMP (T501-T502)</th>
<th style="border:1px solid black;" v-if="val_1[5] == 'fm11_temp'" >TEMP (Tar Transfer)</th>
<th style="border:1px solid black;" v-if="val_1[5] == 'fm12_temp'" >TEMP (Recycle to D405 Line)</th>
<th style="border:1px solid black;" v-if="val_1[5] == 'fm13_temp'" >TEMP (Biodiesel to Storage)</th>
<th style="border:1px solid black;" v-if="val_1[5] == 'fm14_temp'" >TEMP (D403 into T601)</th>
<th style="border:1px solid black;" v-if="val_1[5] == 'fm5_temp'" >TEMP (T601 to D602) </th>
<th style="border:1px solid black;" v-if="val_1[5] == 'fm16_temp'" >TEMP (T601 to Reflux)</th>
<th style="border:1px solid black;" v-if="val_1[5] == 'fm17_temp'" >TEMP (T601 Drain)</th>
<th style="border:1px solid black;" v-if="val_1[5] == 'fm18_temp'" >TEMP (Matdanol into GST 1 and 2)</th>
<th style="border:1px solid black;" v-if="val_1[5] == 'fm19_temp'" >TEMP (Metdanol into PPRA and B)</th>
<th style="border:1px solid black;" v-if="val_1[5] == 'fm20_temp'" >TEMP (Matdanol into GLV)</th>
<th style="border:1px solid black;" v-if="val_1[5] == 'fm21_temp'" >TEMP (Metdanol into Trans)</th>
<th style="border:1px solid black;" v-if="val_1[5] == 'fm22_temp'" >TEMP (Biodiesel Storage to Truck)</th>
<th style="border:1px solid black;" v-if="val_1[5] == 'fm23_temp'" >TEMP (Raw Material Offloading)</th>
<th style="border:1px solid black;" v-if="val_1[5] == 'fm24_temp'" >TEMP (Raw Metarial to Settling Tank)</th>
<th style="border:1px solid black;" v-if="val_1[5] == 'fm25_temp'" >TEMP (Settling Tank to D101)</th>
<th style="border:1px solid black;" v-if="val_1[5] == 'fm26_temp'" >TEMP (CT Outlet)</th>
<th style="border:1px solid black;" v-if="val_1[5] == 'fm27_temp'" >TEMP (CT Inlet)</th>
                    <th style="border:1px solid black;" v-if="val_1[5] == 'rdl_32'" >GST-2-L</th>
                    <th style="border:1px solid black;" v-if="val_1[5] == 'vr_32'" >GST-2-V</th>
                    <th style="border:1px solid black;" v-if="val_1[5] == 'rtd_42'" >GST-2-T</th>
                    <th style="border:1px solid black;" v-if="val_1[5] == 'fm_45'" >(Metdanol Transfer)</th>
                    <th style="border:1px solid black;" v-if="val_1[5] == 'ft_45'" >FT (Metdanol Transfer)</th>
                    <th style="border:1px solid black;" v-if="val_1[5] == 'fm45_den'" >DEN (Metdanol Transfer)</th>
                    <th style="border:1px solid black;" v-if="val_1[5] == 'fm45_temp'" >TEMP (Metdanol Transfer)</th>
                    <th style="border:1px solid black;" v-if="val_1[5] == 'fm_62'" >(RVP)</th>
                    <th style="border:1px solid black;" v-if="val_1[5] == 'ft_62'" >FT (RVP)</th>
                    <th style="border:1px solid black;" v-if="val_1[5] == 'fm_66'" >(Milky)</th>
                    <th style="border:1px solid black;" v-if="val_1[5] == 'ft_66'" >FT (Milky)</th>

                     <th style="border:1px solid black;" v-if="val_1[6] == 'st_fm2_flow'">Main Steam</th>
                    <th style="border:1px solid black;" v-if="val_1[6] == 'stfm2_flow_tot'">Total Flow</th>
                    <th style="border:1px solid black;" v-if="val_1[6] == 'stfm2_temp'">Temp</th>
                    <th style="border:1px solid black;" v-if="val_1[6] == 'stfm2_pressure'">Pressure</th>

                    <th style="border:1px solid black;" v-if="val_1[6] == 'st_fm1_flow'">Steam to E401</th>
                    <th style="border:1px solid black;" v-if="val_1[6] == 'stfm1_flow_tot'">Total Flow</th>
                    <th style="border:1px solid black;" v-if="val_1[6] == 'stfm1_temp'">Temp</th>
                    <th style="border:1px solid black;" v-if="val_1[6] == 'stfm1_pressure'">Pressure</th>

                    <th style="border:1px solid black;" v-if="val_1[6] == 'rdl_1'" >D101A-L</th>
                    <th style="border:1px solid black;" v-if="val_1[6] == 'vr_1'" >D101A-V</th>
                    <th style="border:1px solid black;" v-if="val_1[6] == 'rdl_2'" >D101B-L</th>
                    <th style="border:1px solid black;" v-if="val_1[6] == 'vr_2'" >D101B-V</th>
                    <th style="border:1px solid black;" v-if="val_1[6] == 'rdl_3'" >D405A-L</th>
                    <th style="border:1px solid black;" v-if="val_1[6] == 'vr_3'" >D405A-V</th>
                    <th style="border:1px solid black;" v-if="val_1[6] == 'rdl_4'" >D405B-L</th>
                    <th style="border:1px solid black;" v-if="val_1[6] == 'vr_4'" >D405B-V</th>
                    <th style="border:1px solid black;" v-if="val_1[6] == 'rdl_5'" >D405C-L</th>
                    <th style="border:1px solid black;" v-if="val_1[6] == 'vr_5'" >D405C-V</th>
                    <th style="border:1px solid black;" v-if="val_1[6] == 'rdl_6'" >C401A-L</th>
                    <th style="border:1px solid black;" v-if="val_1[6] == 'vr_6'" >C401A-V</th>
                    <th style="border:1px solid black;" v-if="val_1[6] == 'rdl_7'" >C401B-L</th>
                    <th style="border:1px solid black;" v-if="val_1[6] == 'vr_7'" >C401B-V</th>
                    <th style="border:1px solid black;" v-if="val_1[6] == 'rdl_8'" >D402A-L</th>
                    <th style="border:1px solid black;" v-if="val_1[6] == 'vr_8'" >D402A-V</th>
                    <th style="border:1px solid black;" v-if="val_1[6] == 'rdl_9'" >D402B-L</th>
                    <th style="border:1px solid black;" v-if="val_1[6] == 'vr_9'" >D402B-V</th>
                    <th style="border:1px solid black;" v-if="val_1[6] == 'rdl_10'" >D402C-L</th>
                    <th style="border:1px solid black;" v-if="val_1[6] == 'vr_10'" >D402C-V</th>
                    <th style="border:1px solid black;" v-if="val_1[6] == 'rdl_11'" >D402D-L</th>
                    <th style="border:1px solid black;" v-if="val_1[6] == 'vr_11'" >D402D-V</th>
                    <th style="border:1px solid black;" v-if="val_1[6] == 'rdl_12'" >GLV-L</th>
                    <th style="border:1px solid black;" v-if="val_1[6] == 'vr_12'" >GLV-V</th>
                    <th style="border:1px solid black;" v-if="val_1[6] == 'rdl_13'" >SettlingA-L</th>
                    <th style="border:1px solid black;" v-if="val_1[6] == 'vr_13'" >SettlingA-V</th>
                    <th style="border:1px solid black;" v-if="val_1[6] == 'rdl_14'" >SettlingB-L</th>
                    <th style="border:1px solid black;" v-if="val_1[6] == 'vr_14'" >SettlingB-V</th>
                    <th style="border:1px solid black;" v-if="val_1[6] == 'rdl_15'" >SettlingC-L</th>
                    <th style="border:1px solid black;" v-if="val_1[6] == 'vr_15'" >SettlingC-V</th>
                    <th style="border:1px solid black;" v-if="val_1[6] == 'rdl_16'" >Metdanol T1-L</th>
                    <th style="border:1px solid black;" v-if="val_1[6] == 'vr_16'" >Metdanol T1-V</th>
                    <th style="border:1px solid black;" v-if="val_1[6] == 'rdl_17'" >Tar-L</th>
                    <th style="border:1px solid black;" v-if="val_1[6] == 'vr_17'" >Tar-V</th>
                    <th style="border:1px solid black;" v-if="val_1[6] == 'rdl_18'" >GST T1-L</th>
                    <th style="border:1px solid black;" v-if="val_1[6] == 'vr_18'" >GST T1-V</th>
                    <th style="border:1px solid black;" v-if="val_1[6] == 'rdl_19'" >Metdanol T2-L</th>
                    <th style="border:1px solid black;" v-if="val_1[6] == 'vr_19'" >Metdanol T2-V</th>
                    <th style="border:1px solid black;" v-if="val_1[6] == 'rdl_20'" >SP1-L</th>
                    <th style="border:1px solid black;" v-if="val_1[6] == 'vr_20'" >SP1-V</th>
                    <th style="border:1px solid black;" v-if="val_1[6] == 'rdl_21'" >SP2-L</th>
                    <th style="border:1px solid black;" v-if="val_1[6] == 'vr_21'" >SP2-V</th>
                    <th style="border:1px solid black;" v-if="val_1[6] == 'rdl_22'" >SP3-L</th>
                    <th style="border:1px solid black;" v-if="val_1[6] == 'vr_22'" >SP3-V</th>
                    <th style="border:1px solid black;" v-if="val_1[6] == 'rdl_23'" >PPRA-L</th>
                    <th style="border:1px solid black;" v-if="val_1[6] == 'vr_23'" >PPRA-V</th>
                    <th style="border:1px solid black;" v-if="val_1[6] == 'rdl_24'" >PPRB-L</th>
                    <th style="border:1px solid black;" v-if="val_1[6] == 'vr_24'" >PPRB-V</th>
                    <th style="border:1px solid black;" v-if="val_1[6] == 'rdl_25'" >H2SO4-L</th>
                    <th style="border:1px solid black;" v-if="val_1[6] == 'rdl25_volume'" >H2SO4-V</th>
                    <th style="border:1px solid black;" v-if="val_1[6] == 'rdl25_mass'" >Mass In Kg</th>
                    <th style="border:1px solid black;" v-if="val_1[6] == 'rtd_1'" >E101-T</th>
                    <th style="border:1px solid black;" v-if="val_1[6] == 'rtd_2'" >D101A-T</th>
                    <th style="border:1px solid black;" v-if="val_1[6] == 'rtd_3'" >D101B-T</th>
                    <th style="border:1px solid black;" v-if="val_1[6] == 'rtd_4'" >E201-T</th>
                    <th style="border:1px solid black;" v-if="val_1[6] == 'rtd_5'" >GLV-Top-T</th>
                    <th style="border:1px solid black;" v-if="val_1[6] == 'rtd_6'" >GLV-Mid-T</th>
                    <th style="border:1px solid black;" v-if="val_1[6] == 'rtd_7'" >GLV-BTM-T</th>
                    <th style="border:1px solid black;" v-if="val_1[6] == 'rtd_8'" >GLV-EVP-T</th>
                    <th style="border:1px solid black;" v-if="val_1[6] == 'rtd_9'" >SettlingA-T</th>
                    <th style="border:1px solid black;" v-if="val_1[6] == 'rtd_10'" >SettlingB-T</th>
                    <th style="border:1px solid black;" v-if="val_1[6] == 'rtd_11'" >SettlingC-T</th>
                    <th style="border:1px solid black;" v-if="val_1[6] == 'rtd_12'" >Hot Water-T</th>
                    <th style="border:1px solid black;" v-if="val_1[6] == 'rtd_13'" >D402A-T</th>
                    <th style="border:1px solid black;" v-if="val_1[6] == 'rtd_14'" >D402B-T</th>
                    <th style="border:1px solid black;" v-if="val_1[6] == 'rtd_15'" >D402C-T</th>
                    <th style="border:1px solid black;" v-if="val_1[6] == 'rtd_16'" >D402D-T</th>
                    <th style="border:1px solid black;" v-if="val_1[6] == 'rtd_17'" >Trans EVP-T</th>
                    <th style="border:1px solid black;" v-if="val_1[6] == 'rtd_18'" >Blue-T</th>
                    <th style="border:1px solid black;" v-if="val_1[6] == 'rtd_19'" >Green-T</th>
                    <th style="border:1px solid black;" v-if="val_1[6] == 'rtd_20'" >Old Green-T</th>
                    <th style="border:1px solid black;" v-if="val_1[6] == 'rtd_21'" >E601-T</th>
                    <th style="border:1px solid black;" v-if="val_1[6] == 'rtd_22'" >T601-Top-T</th>
                    <th style="border:1px solid black;" v-if="val_1[6] == 'rtd_23'" >T601-Mid-T</th>
                    <th style="border:1px solid black;" v-if="val_1[6] == 'rtd_24'" >T601-BTM-T</th>
                    <th style="border:1px solid black;" v-if="val_1[6] == 'rtd_25'" >E501</th>
                    <th style="border:1px solid black;" v-if="val_1[6] == 'rtd_26'" >D501</th>
                    <th style="border:1px solid black;" v-if="val_1[6] == 'rtd_27'" >T501-Top-T</th>
                    <th style="border:1px solid black;" v-if="val_1[6] == 'rtd_28'" >T501-Mid-T</th>
                    <th style="border:1px solid black;" v-if="val_1[6] == 'rtd_29'" >RTDT501-BTM-T</th>
                    <th style="border:1px solid black;" v-if="val_1[6] == 'rtd_30'" >T502-Mid-T</th>
                    <th style="border:1px solid black;" v-if="val_1[6] == 'rtd_31'" >T502-BTM-T</th>
                    <th style="border:1px solid black;" v-if="val_1[6] == 'rtd_32'" >PPRA-T</th>
                    <th style="border:1px solid black;" v-if="val_1[6] == 'rtd_33'" >PPRB-T</th>
                    <th style="border:1px solid black;" v-if="val_1[6] == 'rtd_34'" >GST T1-T</th>
                    <th style="border:1px solid black;" v-if="val_1[6] == 'rtd_35'" >Trans React-T</th>
                    <th style="border:1px solid black;" v-if="val_1[6] == 'rtd_36'" >Bio Storag-T</th>
                    <th style="border:1px solid black;" v-if="val_1[6] == 'rtd_37'" >Bio Transf-T</th>
                    <th style="border:1px solid black;" v-if="val_1[6] == 'dpl_1'" >D501-L</th>
                    <th style="border:1px solid black;" v-if="val_1[6] == 'vd_1'" >D501-V</th>
                    <th style="border:1px solid black;" v-if="val_1[6] == 'dpl_2'" >E401-L</th>
                    <th style="border:1px solid black;" v-if="val_1[6] == 'vd_2'" >E401-V</th>
                    <th style="border:1px solid black;" v-if="val_1[6] == 'dpl_3'" >T601-L</th>
                    <th style="border:1px solid black;" v-if="val_1[6] == 'vd_3'" >T601-V</th>
                    <th style="border:1px solid black;" v-if="val_1[6] == 'dpl_4'" >D503-L</th>
                    <th style="border:1px solid black;" v-if="val_1[6] == 'vd_4'" >D503-V</th>
                    <th style="border:1px solid black;" v-if="val_1[6] == 'dpl_5'" >D504-L</th>
                    <th style="border:1px solid black;" v-if="val_1[6] == 'vd_5'" >D504-V</th>
                    <th style="border:1px solid black;" v-if="val_1[6] == 'dpl_6'" >T501-L</th>
                    <th style="border:1px solid black;" v-if="val_1[6] == 'vd_6'" >T501-V</th>
                    <th style="border:1px solid black;" v-if="val_1[6] == 'dpl_7'" >T502-L</th>
                    <th style="border:1px solid black;" v-if="val_1[6] == 'vd_7'" >T502-V</th>
                    <th style="border:1px solid black;" v-if="val_1[6] == 'dpl_8'" >Bio Storage Tank-L</th>
                    <th style="border:1px solid black;" v-if="val_1[6] == 'vd_8'" >Bio Storage Tank-V</th>
                    <th style="border:1px solid black;" v-if="val_1[6] == 'fm_1'" >TRANS OIL</th>
                    <th style="border:1px solid black;" v-if="val_1[6] == 'fm_2'" >ALKALI TRANS</th>
                    <th style="border:1px solid black;" v-if="val_1[6] == 'fm_3'" >TRANS EVAPORATOR TO NI</th>
                    <th style="border:1px solid black;" v-if="val_1[6] == 'fm_4'" >WATER N1</th>
                    <th style="border:1px solid black;" v-if="val_1[6] == 'fm_5'" >N2 TO D402</th>
                    <th style="border:1px solid black;" v-if="val_1[6] == 'fm_6'" >N3 TO SLAGPOOL</th>
                    <th style="border:1px solid black;" v-if="val_1[6] == 'fm_7'" >D602 TO METdANOL STORAGE TANK</th>
                    <th style="border:1px solid black;" v-if="val_1[6] == 'fm_8'" >D402-D501</th>
                    <th style="border:1px solid black;" v-if="val_1[6] == 'fm_9'" >D501-T501</th>
                    <th style="border:1px solid black;" v-if="val_1[6] == 'fm_10'" >T501-T502</th>
                    <th style="border:1px solid black;" v-if="val_1[6] == 'fm_11'" >TAR TRANSFER</th>
                    <th style="border:1px solid black;" v-if="val_1[6] == 'fm_12'" >RECYCLE TO D405 LINE</th>
                    <th style="border:1px solid black;" v-if="val_1[6] == 'fm_13'" >BIODIESEL TO STORAGE</th>
                    <th style="border:1px solid black;" v-if="val_1[6] == 'fm_14'" >D403 INTO T601</th>
                    <th style="border:1px solid black;" v-if="val_1[6] == 'fm_15'" >T601-D602</th>
                    <th style="border:1px solid black;" v-if="val_1[6] == 'fm_16'" >T601 TO REFLUX</th>
                    <th style="border:1px solid black;" v-if="val_1[6] == 'fm_17'" >T601 DRAIN</th>
                    <th style="border:1px solid black;" v-if="val_1[6] == 'fm_18'" >METdANOL INTO GST 1 AND 2</th>
                    <th style="border:1px solid black;" v-if="val_1[6] == 'fm_19'" >METdANOL INTO PPRA AND B</th>
                    <th style="border:1px solid black;" v-if="val_1[6] == 'fm_20'" >METdANOL INTO GLV</th>
                    <th style="border:1px solid black;" v-if="val_1[6] == 'fm_21'" >METdANOL INTO TRANS</th>
                    <th style="border:1px solid black;" v-if="val_1[6] == 'fm_22'" >BIODIESEL STORAGE TO TRUCK</th>
                    <th style="border:1px solid black;" v-if="val_1[6] == 'fm_23'" >RAW MATERIAL OFFLOADING</th>
                    <th style="border:1px solid black;" v-if="val_1[6] == 'fm_24'" >RAW MATERIAL TO SETTLING TANK</th>
                    <th style="border:1px solid black;" v-if="val_1[6] == 'fm_25'" >SETTLING TANK TO D101</th>
                    <th style="border:1px solid black;" v-if="val_1[6] == 'fm_26'" >CT OUTLET</th>
                    <th style="border:1px solid black;" v-if="val_1[6] == 'fm_27'" >CT INLET</th>
                    <th style="border:1px solid black;" v-if="val_1[6] == 'ft_1'" >FT TRANS OIL</th>
                    <th style="border:1px solid black;" v-if="val_1[6] == 'ft_2'" >FT ALKALI TRANS</th>
                    <th style="border:1px solid black;" v-if="val_1[6] == 'ft_3'" >FT TRANS EVAPORATOR TO NI</th>
                    <th style="border:1px solid black;" v-if="val_1[6] == 'ft_4'" >FT WATER N1</th>
                    <th style="border:1px solid black;" v-if="val_1[6] == 'ft_5'" >FT N2 TO D402</th>
                    <th style="border:1px solid black;" v-if="val_1[6] == 'ft_6'" >FT N3 TO  SLAGPOOL</th>
                    <th style="border:1px solid black;" v-if="val_1[6] == 'ft_7'" >FT D602 TO METdANOL STORAGE TANK</th>
                    <th style="border:1px solid black;" v-if="val_1[6] == 'ft_8'" >FT D402-D501</th>
                    <th style="border:1px solid black;" v-if="val_1[6] == 'ft_9'" >FT D501-T501</th>
                    <th style="border:1px solid black;" v-if="val_1[6] == 'ft_10'" >FT T501-T502</th>
                    <th style="border:1px solid black;" v-if="val_1[6] == 'ft_11'" >FT TAR TRANSFER</th>
                    <th style="border:1px solid black;" v-if="val_1[6] == 'ft_12'" >FT RECYCLE TO D405</th>
                    <th style="border:1px solid black;" v-if="val_1[6] == 'ft_13'" >FT BIODIESEL TO STORAGE</th>
                    <th style="border:1px solid black;" v-if="val_1[6] == 'ft_14'" >FT D403 INTO T601</th>
                    <th style="border:1px solid black;" v-if="val_1[6] == 'ft_15'" >FT T601-D602</th>
                    <th style="border:1px solid black;" v-if="val_1[6] == 'ft_16'" >FT T601 TO REFLUX</th>
                    <th style="border:1px solid black;" v-if="val_1[6] == 'ft_17'" >FT T601 DRAIN</th>
                    <th style="border:1px solid black;" v-if="val_1[6] == 'ft_18'" >FT METdANOL INTO GST 1 AND 2</th>
                    <th style="border:1px solid black;" v-if="val_1[6] == 'ft_19'" >FT 19</th>
                    <th style="border:1px solid black;" v-if="val_1[6] == 'ft_20'" >FT METdANOL INTO GLV</th>
                    <th style="border:1px solid black;" v-if="val_1[6] == 'ft_21'" >FT METdANOL  INTO TRANS</th>
                    <th style="border:1px solid black;" v-if="val_1[6] == 'ft_22'" >FT BIODIESEL STORAGE TO TRUCK</th>
                    <th style="border:1px solid black;" v-if="val_1[6] == 'ft_23'" >FT RAW MATERIAL OFFLOADING</th>
                    <th style="border:1px solid black;" v-if="val_1[6] == 'ft_24'" >FT RAW MATERIAL TO SETTLING TANK</th>
                    <th style="border:1px solid black;" v-if="val_1[6] == 'ft_25'" >FT SETTLING TANK TO D101</th>
                    <th style="border:1px solid black;" v-if="val_1[6] == 'ft_26'" >FT CT OUTLET</th>
                    <th style="border:1px solid black;" v-if="val_1[6] == 'ft_27'" >FT CT INLET</th>
                    <th style="border:1px solid black;" v-if="val_1[6] == 'pt_1'" >PT 1</th>
                    <th style="border:1px solid black;" v-if="val_1[6] == 'pt_2'" >PT 2</th>
                    <th style="border:1px solid black;" v-if="val_1[6] == 'pt_3'" >PT 3</th>
                    <th style="border:1px solid black;" v-if="val_1[6] == 'pt_4'" >PT 4</th>
                    <th style="border:1px solid black;" v-if="val_1[6] == 'pt_5'" >Dist Header</th>
                    <th style="border:1px solid black;" v-if="val_1[6] == 'vg_1'" >Vac Line</th>
                    <th style="border:1px solid black;" v-if="val_1[6] == 'vg_2'" >VG 2</th>
                    <th style="border:1px solid black;" v-if="val_1[6] == 'vg_3'" >VG 3</th>
                    <th style="border:1px solid black;" v-if="val_1[6] == 'fm1_den'" >DEN (Trans Oil)</th>
<th style="border:1px solid black;" v-if="val_1[6] == 'fm2_den'" >DEN( Alkali Trans)</th>
<th style="border:1px solid black;" v-if="val_1[6] == 'fm3_den'" >DEN (Trans Evaporator to NI)</th>
<th style="border:1px solid black;" v-if="val_1[6] == 'fm4_den'" >DEN (Water N1)</th>
<th style="border:1px solid black;" v-if="val_1[6] == 'fm5_den'" >DEN (N2 to D402)</th>
<th style="border:1px solid black;" v-if="val_1[6] == 'fm6_den'" >DEN (N3 to Slag pool)</th>
<th style="border:1px solid black;" v-if="val_1[6] == 'fm7_den'" >DEN (D602to Metdanol Storage Tank)</th>
<th style="border:1px solid black;" v-if="val_1[6] == 'fm8_den'" >DEN (D402-D501)</th>
<th style="border:1px solid black;" v-if="val_1[6] == 'fm9_den'" >DEN (D501-T501)</th>
<th style="border:1px solid black;" v-if="val_1[6] == 'fm10_den'" >DEN (T501-T502)</th>
<th style="border:1px solid black;" v-if="val_1[6] == 'fm11_den'" >DEN (Tar Transfer)</th>
<th style="border:1px solid black;" v-if="val_1[6] == 'fm12_den'" >DEN (Recycle to D405 Line)</th>
<th style="border:1px solid black;" v-if="val_1[6] == 'fm13_den'" >DEN (Biodiesel to Storage)</th>
<th style="border:1px solid black;" v-if="val_1[6] == 'fm14_den'" >DEN (D403 into T601)</th>
<th style="border:1px solid black;" v-if="val_1[6] == 'fm15_den'" >DEN (T601 to D602) </th>
<th style="border:1px solid black;" v-if="val_1[6] == 'fm16_den'" >DEN (T601 to Reflux)</th>
<th style="border:1px solid black;" v-if="val_1[6] == 'fm17_den'" >DEN (T601 Drain)</th>
<th style="border:1px solid black;" v-if="val_1[6] == 'fm18_den'" >DEN (Matdanol into GST 1 and 2)</th>
<th style="border:1px solid black;" v-if="val_1[6] == 'fm19_den'" >DEN (Metdanol into PPRA and B)</th>
<th style="border:1px solid black;" v-if="val_1[6] == 'fm20_den'" >DEN (Matdanol into GLV)</th>
<th style="border:1px solid black;" v-if="val_1[6] == 'fm21_den'" >DEN (Metdanol into Trans)</th>
<th style="border:1px solid black;" v-if="val_1[6] == 'fm22_den'" >DEN (Biodiesel Storage to Truck)</th>
<th style="border:1px solid black;" v-if="val_1[6] == 'fm23_den'" >DEN (Raw Material Offloading)</th>
<th style="border:1px solid black;" v-if="val_1[6] == 'fm24_den'" >DEN (Raw Metarial to Settling Tank)</th>
<th style="border:1px solid black;" v-if="val_1[6] == 'fm25_den'" >DEN (Settling Tank to D101)</th>
<th style="border:1px solid black;" v-if="val_1[6] == 'fm26_den'" >DEN (CT Outlet)</th>
<th style="border:1px solid black;" v-if="val_1[6] == 'fm27_den'" >DEN (CT Inlet)</th>
<th style="border:1px solid black;" v-if="val_1[6] == 'fm1_temp'" >TEMP (Trans Oil)</th>
<th style="border:1px solid black;" v-if="val_1[6] == 'fm2_temp'" >TEMP( Alkali Trans)</th>
<th style="border:1px solid black;" v-if="val_1[6] == 'fm3_temp'" >TEMP (Trans Evaporator to NI)</th>
<th style="border:1px solid black;" v-if="val_1[6] == 'fm4_temp'" >TEMP (Water N1)</th>
<th style="border:1px solid black;" v-if="val_1[6] == 'fm5_temp'" >TEMP (N2 to D402)</th>
<th style="border:1px solid black;" v-if="val_1[6] == 'fm6_temp'" >TEMP (N3 to Slag pool)</th>
<th style="border:1px solid black;" v-if="val_1[6] == 'fm7_temp'" >TEMP (D602to Metdanol Storage Tank)</th>
<th style="border:1px solid black;" v-if="val_1[6] == 'fm8_temp'" >TEMP (D402-D501)</th>
<th style="border:1px solid black;" v-if="val_1[6] == 'fm9_temp'" >TEMP (D501-T501)</th>
<th style="border:1px solid black;" v-if="val_1[6] == 'fm10_temp'" >TEMP (T501-T502)</th>
<th style="border:1px solid black;" v-if="val_1[6] == 'fm11_temp'" >TEMP (Tar Transfer)</th>
<th style="border:1px solid black;" v-if="val_1[6] == 'fm12_temp'" >TEMP (Recycle to D405 Line)</th>
<th style="border:1px solid black;" v-if="val_1[6] == 'fm13_temp'" >TEMP (Biodiesel to Storage)</th>
<th style="border:1px solid black;" v-if="val_1[6] == 'fm14_temp'" >TEMP (D403 into T601)</th>
<th style="border:1px solid black;" v-if="val_1[6] == 'fm6_temp'" >TEMP (T601 to D602) </th>
<th style="border:1px solid black;" v-if="val_1[6] == 'fm16_temp'" >TEMP (T601 to Reflux)</th>
<th style="border:1px solid black;" v-if="val_1[6] == 'fm17_temp'" >TEMP (T601 Drain)</th>
<th style="border:1px solid black;" v-if="val_1[6] == 'fm18_temp'" >TEMP (Matdanol into GST 1 and 2)</th>
<th style="border:1px solid black;" v-if="val_1[6] == 'fm19_temp'" >TEMP (Metdanol into PPRA and B)</th>
<th style="border:1px solid black;" v-if="val_1[6] == 'fm20_temp'" >TEMP (Matdanol into GLV)</th>
<th style="border:1px solid black;" v-if="val_1[6] == 'fm21_temp'" >TEMP (Metdanol into Trans)</th>
<th style="border:1px solid black;" v-if="val_1[6] == 'fm22_temp'" >TEMP (Biodiesel Storage to Truck)</th>
<th style="border:1px solid black;" v-if="val_1[6] == 'fm23_temp'" >TEMP (Raw Material Offloading)</th>
<th style="border:1px solid black;" v-if="val_1[6] == 'fm24_temp'" >TEMP (Raw Metarial to Settling Tank)</th>
<th style="border:1px solid black;" v-if="val_1[6] == 'fm25_temp'" >TEMP (Settling Tank to D101)</th>
<th style="border:1px solid black;" v-if="val_1[6] == 'fm26_temp'" >TEMP (CT Outlet)</th>
<th style="border:1px solid black;" v-if="val_1[6] == 'fm27_temp'" >TEMP (CT Inlet)</th>
                    <th style="border:1px solid black;" v-if="val_1[6] == 'rdl_32'" >GST-2-L</th>
                    <th style="border:1px solid black;" v-if="val_1[6] == 'vr_32'" >GST-2-V</th>
                    <th style="border:1px solid black;" v-if="val_1[6] == 'rtd_42'" >GST-2-T</th>
                    <th style="border:1px solid black;" v-if="val_1[6] == 'fm_45'" >(Metdanol Transfer)</th>
                    <th style="border:1px solid black;" v-if="val_1[6] == 'ft_45'" >FT (Metdanol Transfer)</th>
                    <th style="border:1px solid black;" v-if="val_1[6] == 'fm45_den'" >DEN (Metdanol Transfer)</th>
                    <th style="border:1px solid black;" v-if="val_1[6] == 'fm45_temp'" >TEMP (Metdanol Transfer)</th>
                    <th style="border:1px solid black;" v-if="val_1[6] == 'fm_62'" >(RVP)</th>
                    <th style="border:1px solid black;" v-if="val_1[6] == 'ft_62'" >FT (RVP)</th>
                    <th style="border:1px solid black;" v-if="val_1[6] == 'fm_66'" >(Milky)</th>
                    <th style="border:1px solid black;" v-if="val_1[6] == 'ft_66'" >FT (Milky)</th>

                     <th style="border:1px solid black;" v-if="val_1[7] == 'st_fm2_flow'">Main Steam</th>
                    <th style="border:1px solid black;" v-if="val_1[7] == 'stfm2_flow_tot'">Total Flow</th>
                    <th style="border:1px solid black;" v-if="val_1[7] == 'stfm2_temp'">Temp</th>
                    <th style="border:1px solid black;" v-if="val_1[7] == 'stfm2_pressure'">Pressure</th>

                    <th style="border:1px solid black;" v-if="val_1[7] == 'st_fm1_flow'">Steam to E401</th>
                    <th style="border:1px solid black;" v-if="val_1[7] == 'stfm1_flow_tot'">Total Flow</th>
                    <th style="border:1px solid black;" v-if="val_1[7] == 'stfm1_temp'">Temp</th>
                    <th style="border:1px solid black;" v-if="val_1[7] == 'stfm1_pressure'">Pressure</th>

                    <th style="border:1px solid black;" v-if="val_1[7] == 'rdl_1'" >D101A-L</th>
                    <th style="border:1px solid black;" v-if="val_1[7] == 'vr_1'" >D101A-V</th>
                    <th style="border:1px solid black;" v-if="val_1[7] == 'rdl_2'" >D101B-L</th>
                    <th style="border:1px solid black;" v-if="val_1[7] == 'vr_2'" >D101B-V</th>
                    <th style="border:1px solid black;" v-if="val_1[7] == 'rdl_3'" >D405A-L</th>
                    <th style="border:1px solid black;" v-if="val_1[7] == 'vr_3'" >D405A-V</th>
                    <th style="border:1px solid black;" v-if="val_1[7] == 'rdl_4'" >D405B-L</th>
                    <th style="border:1px solid black;" v-if="val_1[7] == 'vr_4'" >D405B-V</th>
                    <th style="border:1px solid black;" v-if="val_1[7] == 'rdl_5'" >D405C-L</th>
                    <th style="border:1px solid black;" v-if="val_1[7] == 'vr_5'" >D405C-V</th>
                    <th style="border:1px solid black;" v-if="val_1[7] == 'rdl_6'" >C401A-L</th>
                    <th style="border:1px solid black;" v-if="val_1[7] == 'vr_6'" >C401A-V</th>
                    <th style="border:1px solid black;" v-if="val_1[7] == 'rdl_7'" >C401B-L</th>
                    <th style="border:1px solid black;" v-if="val_1[7] == 'vr_7'" >C401B-V</th>
                    <th style="border:1px solid black;" v-if="val_1[7] == 'rdl_8'" >D402A-L</th>
                    <th style="border:1px solid black;" v-if="val_1[7] == 'vr_8'" >D402A-V</th>
                    <th style="border:1px solid black;" v-if="val_1[7] == 'rdl_9'" >D402B-L</th>
                    <th style="border:1px solid black;" v-if="val_1[7] == 'vr_9'" >D402B-V</th>
                    <th style="border:1px solid black;" v-if="val_1[7] == 'rdl_10'" >D402C-L</th>
                    <th style="border:1px solid black;" v-if="val_1[7] == 'vr_10'" >D402C-V</th>
                    <th style="border:1px solid black;" v-if="val_1[7] == 'rdl_11'" >D402D-L</th>
                    <th style="border:1px solid black;" v-if="val_1[7] == 'vr_11'" >D402D-V</th>
                    <th style="border:1px solid black;" v-if="val_1[7] == 'rdl_12'" >GLV-L</th>
                    <th style="border:1px solid black;" v-if="val_1[7] == 'vr_12'" >GLV-V</th>
                    <th style="border:1px solid black;" v-if="val_1[7] == 'rdl_13'" >SettlingA-L</th>
                    <th style="border:1px solid black;" v-if="val_1[7] == 'vr_13'" >SettlingA-V</th>
                    <th style="border:1px solid black;" v-if="val_1[7] == 'rdl_14'" >SettlingB-L</th>
                    <th style="border:1px solid black;" v-if="val_1[7] == 'vr_14'" >SettlingB-V</th>
                    <th style="border:1px solid black;" v-if="val_1[7] == 'rdl_15'" >SettlingC-L</th>
                    <th style="border:1px solid black;" v-if="val_1[7] == 'vr_15'" >SettlingC-V</th>
                    <th style="border:1px solid black;" v-if="val_1[7] == 'rdl_16'" >Metdanol T1-L</th>
                    <th style="border:1px solid black;" v-if="val_1[7] == 'vr_16'" >Metdanol T1-V</th>
                    <th style="border:1px solid black;" v-if="val_1[7] == 'rdl_17'" >Tar-L</th>
                    <th style="border:1px solid black;" v-if="val_1[7] == 'vr_17'" >Tar-V</th>
                    <th style="border:1px solid black;" v-if="val_1[7] == 'rdl_18'" >GST T1-L</th>
                    <th style="border:1px solid black;" v-if="val_1[7] == 'vr_18'" >GST T1-V</th>
                    <th style="border:1px solid black;" v-if="val_1[7] == 'rdl_19'" >Metdanol T2-L</th>
                    <th style="border:1px solid black;" v-if="val_1[7] == 'vr_19'" >Metdanol T2-V</th>
                    <th style="border:1px solid black;" v-if="val_1[7] == 'rdl_20'" >SP1-L</th>
                    <th style="border:1px solid black;" v-if="val_1[7] == 'vr_20'" >SP1-V</th>
                    <th style="border:1px solid black;" v-if="val_1[7] == 'rdl_21'" >SP2-L</th>
                    <th style="border:1px solid black;" v-if="val_1[7] == 'vr_21'" >SP2-V</th>
                    <th style="border:1px solid black;" v-if="val_1[7] == 'rdl_22'" >SP3-L</th>
                    <th style="border:1px solid black;" v-if="val_1[7] == 'vr_22'" >SP3-V</th>
                    <th style="border:1px solid black;" v-if="val_1[7] == 'rdl_23'" >PPRA-L</th>
                    <th style="border:1px solid black;" v-if="val_1[7] == 'vr_23'" >PPRA-V</th>
                    <th style="border:1px solid black;" v-if="val_1[7] == 'rdl_24'" >PPRB-L</th>
                    <th style="border:1px solid black;" v-if="val_1[7] == 'vr_24'" >PPRB-V</th>
                    <th style="border:1px solid black;" v-if="val_1[7] == 'rdl_25'" >H2SO4-L</th>
                    <th style="border:1px solid black;" v-if="val_1[7] == 'rdl25_volume'" >H2SO4-V</th>
                    <th style="border:1px solid black;" v-if="val_1[7] == 'rdl25_mass'" >Mass In Kg</th>
                    <th style="border:1px solid black;" v-if="val_1[7] == 'rtd_1'" >E101-T</th>
                    <th style="border:1px solid black;" v-if="val_1[7] == 'rtd_2'" >D101A-T</th>
                    <th style="border:1px solid black;" v-if="val_1[7] == 'rtd_3'" >D101B-T</th>
                    <th style="border:1px solid black;" v-if="val_1[7] == 'rtd_4'" >E201-T</th>
                    <th style="border:1px solid black;" v-if="val_1[7] == 'rtd_5'" >GLV-Top-T</th>
                    <th style="border:1px solid black;" v-if="val_1[7] == 'rtd_6'" >GLV-Mid-T</th>
                    <th style="border:1px solid black;" v-if="val_1[7] == 'rtd_7'" >GLV-BTM-T</th>
                    <th style="border:1px solid black;" v-if="val_1[7] == 'rtd_8'" >GLV-EVP-T</th>
                    <th style="border:1px solid black;" v-if="val_1[7] == 'rtd_9'" >SettlingA-T</th>
                    <th style="border:1px solid black;" v-if="val_1[7] == 'rtd_10'" >SettlingB-T</th>
                    <th style="border:1px solid black;" v-if="val_1[7] == 'rtd_11'" >SettlingC-T</th>
                    <th style="border:1px solid black;" v-if="val_1[7] == 'rtd_12'" >Hot Water-T</th>
                    <th style="border:1px solid black;" v-if="val_1[7] == 'rtd_13'" >D402A-T</th>
                    <th style="border:1px solid black;" v-if="val_1[7] == 'rtd_14'" >D402B-T</th>
                    <th style="border:1px solid black;" v-if="val_1[7] == 'rtd_15'" >D402C-T</th>
                    <th style="border:1px solid black;" v-if="val_1[7] == 'rtd_16'" >D402D-T</th>
                    <th style="border:1px solid black;" v-if="val_1[7] == 'rtd_17'" >Trans EVP-T</th>
                    <th style="border:1px solid black;" v-if="val_1[7] == 'rtd_18'" >Blue-T</th>
                    <th style="border:1px solid black;" v-if="val_1[7] == 'rtd_19'" >Green-T</th>
                    <th style="border:1px solid black;" v-if="val_1[7] == 'rtd_20'" >Old Green-T</th>
                    <th style="border:1px solid black;" v-if="val_1[7] == 'rtd_21'" >E601-T</th>
                    <th style="border:1px solid black;" v-if="val_1[7] == 'rtd_22'" >T601-Top-T</th>
                    <th style="border:1px solid black;" v-if="val_1[7] == 'rtd_23'" >T601-Mid-T</th>
                    <th style="border:1px solid black;" v-if="val_1[7] == 'rtd_24'" >T601-BTM-T</th>
                    <th style="border:1px solid black;" v-if="val_1[7] == 'rtd_25'" >E501</th>
                    <th style="border:1px solid black;" v-if="val_1[7] == 'rtd_26'" >D501</th>
                    <th style="border:1px solid black;" v-if="val_1[7] == 'rtd_27'" >T501-Top-T</th>
                    <th style="border:1px solid black;" v-if="val_1[7] == 'rtd_28'" >T501-Mid-T</th>
                    <th style="border:1px solid black;" v-if="val_1[7] == 'rtd_29'" >RTDT501-BTM-T</th>
                    <th style="border:1px solid black;" v-if="val_1[7] == 'rtd_30'" >T502-Mid-T</th>
                    <th style="border:1px solid black;" v-if="val_1[7] == 'rtd_31'" >T502-BTM-T</th>
                    <th style="border:1px solid black;" v-if="val_1[7] == 'rtd_32'" >PPRA-T</th>
                    <th style="border:1px solid black;" v-if="val_1[7] == 'rtd_33'" >PPRB-T</th>
                    <th style="border:1px solid black;" v-if="val_1[7] == 'rtd_34'" >GST T1-T</th>
                    <th style="border:1px solid black;" v-if="val_1[7] == 'rtd_35'" >Trans React-T</th>
                    <th style="border:1px solid black;" v-if="val_1[7] == 'rtd_36'" >Bio Storag-T</th>
                    <th style="border:1px solid black;" v-if="val_1[7] == 'rtd_37'" >Bio Transf-T</th>
                    <th style="border:1px solid black;" v-if="val_1[7] == 'dpl_1'" >D501-L</th>
                    <th style="border:1px solid black;" v-if="val_1[7] == 'vd_1'" >D501-V</th>
                    <th style="border:1px solid black;" v-if="val_1[7] == 'dpl_2'" >E401-L</th>
                    <th style="border:1px solid black;" v-if="val_1[7] == 'vd_2'" >E401-V</th>
                    <th style="border:1px solid black;" v-if="val_1[7] == 'dpl_3'" >T601-L</th>
                    <th style="border:1px solid black;" v-if="val_1[7] == 'vd_3'" >T601-V</th>
                    <th style="border:1px solid black;" v-if="val_1[7] == 'dpl_4'" >D503-L</th>
                    <th style="border:1px solid black;" v-if="val_1[7] == 'vd_4'" >D503-V</th>
                    <th style="border:1px solid black;" v-if="val_1[7] == 'dpl_5'" >D504-L</th>
                    <th style="border:1px solid black;" v-if="val_1[7] == 'vd_5'" >D504-V</th>
                    <th style="border:1px solid black;" v-if="val_1[7] == 'dpl_6'" >T501-L</th>
                    <th style="border:1px solid black;" v-if="val_1[7] == 'vd_6'" >T501-V</th>
                    <th style="border:1px solid black;" v-if="val_1[7] == 'dpl_7'" >T502-L</th>
                    <th style="border:1px solid black;" v-if="val_1[7] == 'vd_7'" >T502-V</th>
                    <th style="border:1px solid black;" v-if="val_1[7] == 'dpl_8'" >Bio Storage Tank-L</th>
                    <th style="border:1px solid black;" v-if="val_1[7] == 'vd_8'" >Bio Storage Tank-V</th>
                    <th style="border:1px solid black;" v-if="val_1[7] == 'fm_1'" >TRANS OIL</th>
                    <th style="border:1px solid black;" v-if="val_1[7] == 'fm_2'" >ALKALI TRANS</th>
                    <th style="border:1px solid black;" v-if="val_1[7] == 'fm_3'" >TRANS EVAPORATOR TO NI</th>
                    <th style="border:1px solid black;" v-if="val_1[7] == 'fm_4'" >WATER N1</th>
                    <th style="border:1px solid black;" v-if="val_1[7] == 'fm_5'" >N2 TO D402</th>
                    <th style="border:1px solid black;" v-if="val_1[7] == 'fm_6'" >N3 TO SLAGPOOL</th>
                    <th style="border:1px solid black;" v-if="val_1[7] == 'fm_7'" >D602 TO METdANOL STORAGE TANK</th>
                    <th style="border:1px solid black;" v-if="val_1[7] == 'fm_8'" >D402-D501</th>
                    <th style="border:1px solid black;" v-if="val_1[7] == 'fm_9'" >D501-T501</th>
                    <th style="border:1px solid black;" v-if="val_1[7] == 'fm_10'" >T501-T502</th>
                    <th style="border:1px solid black;" v-if="val_1[7] == 'fm_11'" >TAR TRANSFER</th>
                    <th style="border:1px solid black;" v-if="val_1[7] == 'fm_12'" >RECYCLE TO D405 LINE</th>
                    <th style="border:1px solid black;" v-if="val_1[7] == 'fm_13'" >BIODIESEL TO STORAGE</th>
                    <th style="border:1px solid black;" v-if="val_1[7] == 'fm_14'" >D403 INTO T601</th>
                    <th style="border:1px solid black;" v-if="val_1[7] == 'fm_15'" >T601-D602</th>
                    <th style="border:1px solid black;" v-if="val_1[7] == 'fm_16'" >T601 TO REFLUX</th>
                    <th style="border:1px solid black;" v-if="val_1[7] == 'fm_17'" >T601 DRAIN</th>
                    <th style="border:1px solid black;" v-if="val_1[7] == 'fm_18'" >METdANOL INTO GST 1 AND 2</th>
                    <th style="border:1px solid black;" v-if="val_1[7] == 'fm_19'" >METdANOL INTO PPRA AND B</th>
                    <th style="border:1px solid black;" v-if="val_1[7] == 'fm_20'" >METdANOL INTO GLV</th>
                    <th style="border:1px solid black;" v-if="val_1[7] == 'fm_21'" >METdANOL INTO TRANS</th>
                    <th style="border:1px solid black;" v-if="val_1[7] == 'fm_22'" >BIODIESEL STORAGE TO TRUCK</th>
                    <th style="border:1px solid black;" v-if="val_1[7] == 'fm_23'" >RAW MATERIAL OFFLOADING</th>
                    <th style="border:1px solid black;" v-if="val_1[7] == 'fm_24'" >RAW MATERIAL TO SETTLING TANK</th>
                    <th style="border:1px solid black;" v-if="val_1[7] == 'fm_25'" >SETTLING TANK TO D101</th>
                    <th style="border:1px solid black;" v-if="val_1[7] == 'fm_26'" >CT OUTLET</th>
                    <th style="border:1px solid black;" v-if="val_1[7] == 'fm_27'" >CT INLET</th>
                    <th style="border:1px solid black;" v-if="val_1[7] == 'ft_1'" >FT TRANS OIL</th>
                    <th style="border:1px solid black;" v-if="val_1[7] == 'ft_2'" >FT ALKALI TRANS</th>
                    <th style="border:1px solid black;" v-if="val_1[7] == 'ft_3'" >FT TRANS EVAPORATOR TO NI</th>
                    <th style="border:1px solid black;" v-if="val_1[7] == 'ft_4'" >FT WATER N1</th>
                    <th style="border:1px solid black;" v-if="val_1[7] == 'ft_5'" >FT N2 TO D402</th>
                    <th style="border:1px solid black;" v-if="val_1[7] == 'ft_6'" >FT N3 TO  SLAGPOOL</th>
                    <th style="border:1px solid black;" v-if="val_1[7] == 'ft_7'" >FT D602 TO METdANOL STORAGE TANK</th>
                    <th style="border:1px solid black;" v-if="val_1[7] == 'ft_8'" >FT D402-D501</th>
                    <th style="border:1px solid black;" v-if="val_1[7] == 'ft_9'" >FT D501-T501</th>
                    <th style="border:1px solid black;" v-if="val_1[7] == 'ft_10'" >FT T501-T502</th>
                    <th style="border:1px solid black;" v-if="val_1[7] == 'ft_11'" >FT TAR TRANSFER</th>
                    <th style="border:1px solid black;" v-if="val_1[7] == 'ft_12'" >FT RECYCLE TO D405</th>
                    <th style="border:1px solid black;" v-if="val_1[7] == 'ft_13'" >FT BIODIESEL TO STORAGE</th>
                    <th style="border:1px solid black;" v-if="val_1[7] == 'ft_14'" >FT D403 INTO T601</th>
                    <th style="border:1px solid black;" v-if="val_1[7] == 'ft_15'" >FT T601-D602</th>
                    <th style="border:1px solid black;" v-if="val_1[7] == 'ft_16'" >FT T601 TO REFLUX</th>
                    <th style="border:1px solid black;" v-if="val_1[7] == 'ft_17'" >FT T601 DRAIN</th>
                    <th style="border:1px solid black;" v-if="val_1[7] == 'ft_18'" >FT METdANOL INTO GST 1 AND 2</th>
                    <th style="border:1px solid black;" v-if="val_1[7] == 'ft_19'" >FT 19</th>
                    <th style="border:1px solid black;" v-if="val_1[7] == 'ft_20'" >FT METdANOL INTO GLV</th>
                    <th style="border:1px solid black;" v-if="val_1[7] == 'ft_21'" >FT METdANOL  INTO TRANS</th>
                    <th style="border:1px solid black;" v-if="val_1[7] == 'ft_22'" >FT BIODIESEL STORAGE TO TRUCK</th>
                    <th style="border:1px solid black;" v-if="val_1[7] == 'ft_23'" >FT RAW MATERIAL OFFLOADING</th>
                    <th style="border:1px solid black;" v-if="val_1[7] == 'ft_24'" >FT RAW MATERIAL TO SETTLING TANK</th>
                    <th style="border:1px solid black;" v-if="val_1[7] == 'ft_25'" >FT SETTLING TANK TO D101</th>
                    <th style="border:1px solid black;" v-if="val_1[7] == 'ft_26'" >FT CT OUTLET</th>
                    <th style="border:1px solid black;" v-if="val_1[7] == 'ft_27'" >FT CT INLET</th>
                    <th style="border:1px solid black;" v-if="val_1[7] == 'pt_1'" >PT 1</th>
                    <th style="border:1px solid black;" v-if="val_1[7] == 'pt_2'" >PT 2</th>
                    <th style="border:1px solid black;" v-if="val_1[7] == 'pt_3'" >PT 3</th>
                    <th style="border:1px solid black;" v-if="val_1[7] == 'pt_4'" >PT 4</th>
                    <th style="border:1px solid black;" v-if="val_1[7] == 'pt_5'" >Dist Header</th>
                    <th style="border:1px solid black;" v-if="val_1[7] == 'vg_1'" >Vac Line</th>
                    <th style="border:1px solid black;" v-if="val_1[7] == 'vg_2'" >VG 2</th>
                    <th style="border:1px solid black;" v-if="val_1[7] == 'vg_3'" >VG 3</th>
                    <th style="border:1px solid black;" v-if="val_1[7] == 'fm1_den'" >DEN (Trans Oil)</th>
<th style="border:1px solid black;" v-if="val_1[7] == 'fm2_den'" >DEN( Alkali Trans)</th>
<th style="border:1px solid black;" v-if="val_1[7] == 'fm3_den'" >DEN (Trans Evaporator to NI)</th>
<th style="border:1px solid black;" v-if="val_1[7] == 'fm4_den'" >DEN (Water N1)</th>
<th style="border:1px solid black;" v-if="val_1[7] == 'fm5_den'" >DEN (N2 to D402)</th>
<th style="border:1px solid black;" v-if="val_1[7] == 'fm6_den'" >DEN (N3 to Slag pool)</th>
<th style="border:1px solid black;" v-if="val_1[7] == 'fm7_den'" >DEN (D602to Metdanol Storage Tank)</th>
<th style="border:1px solid black;" v-if="val_1[7] == 'fm8_den'" >DEN (D402-D501)</th>
<th style="border:1px solid black;" v-if="val_1[7] == 'fm9_den'" >DEN (D501-T501)</th>
<th style="border:1px solid black;" v-if="val_1[7] == 'fm10_den'" >DEN (T501-T502)</th>
<th style="border:1px solid black;" v-if="val_1[7] == 'fm11_den'" >DEN (Tar Transfer)</th>
<th style="border:1px solid black;" v-if="val_1[7] == 'fm12_den'" >DEN (Recycle to D405 Line)</th>
<th style="border:1px solid black;" v-if="val_1[7] == 'fm13_den'" >DEN (Biodiesel to Storage)</th>
<th style="border:1px solid black;" v-if="val_1[7] == 'fm14_den'" >DEN (D403 into T601)</th>
<th style="border:1px solid black;" v-if="val_1[7] == 'fm15_den'" >DEN (T601 to D602) </th>
<th style="border:1px solid black;" v-if="val_1[7] == 'fm16_den'" >DEN (T601 to Reflux)</th>
<th style="border:1px solid black;" v-if="val_1[7] == 'fm17_den'" >DEN (T601 Drain)</th>
<th style="border:1px solid black;" v-if="val_1[7] == 'fm18_den'" >DEN (Matdanol into GST 1 and 2)</th>
<th style="border:1px solid black;" v-if="val_1[7] == 'fm19_den'" >DEN (Metdanol into PPRA and B)</th>
<th style="border:1px solid black;" v-if="val_1[7] == 'fm20_den'" >DEN (Matdanol into GLV)</th>
<th style="border:1px solid black;" v-if="val_1[7] == 'fm21_den'" >DEN (Metdanol into Trans)</th>
<th style="border:1px solid black;" v-if="val_1[7] == 'fm22_den'" >DEN (Biodiesel Storage to Truck)</th>
<th style="border:1px solid black;" v-if="val_1[7] == 'fm23_den'" >DEN (Raw Material Offloading)</th>
<th style="border:1px solid black;" v-if="val_1[7] == 'fm24_den'" >DEN (Raw Metarial to Settling Tank)</th>
<th style="border:1px solid black;" v-if="val_1[7] == 'fm25_den'" >DEN (Settling Tank to D101)</th>
<th style="border:1px solid black;" v-if="val_1[7] == 'fm26_den'" >DEN (CT Outlet)</th>
<th style="border:1px solid black;" v-if="val_1[7] == 'fm27_den'" >DEN (CT Inlet)</th>
<th style="border:1px solid black;" v-if="val_1[7] == 'fm1_temp'" >TEMP (Trans Oil)</th>
<th style="border:1px solid black;" v-if="val_1[7] == 'fm2_temp'" >TEMP( Alkali Trans)</th>
<th style="border:1px solid black;" v-if="val_1[7] == 'fm3_temp'" >TEMP (Trans Evaporator to NI)</th>
<th style="border:1px solid black;" v-if="val_1[7] == 'fm4_temp'" >TEMP (Water N1)</th>
<th style="border:1px solid black;" v-if="val_1[7] == 'fm5_temp'" >TEMP (N2 to D402)</th>
<th style="border:1px solid black;" v-if="val_1[7] == 'fm6_temp'" >TEMP (N3 to Slag pool)</th>
<th style="border:1px solid black;" v-if="val_1[7] == 'fm7_temp'" >TEMP (D602to Metdanol Storage Tank)</th>
<th style="border:1px solid black;" v-if="val_1[7] == 'fm8_temp'" >TEMP (D402-D501)</th>
<th style="border:1px solid black;" v-if="val_1[7] == 'fm9_temp'" >TEMP (D501-T501)</th>
<th style="border:1px solid black;" v-if="val_1[7] == 'fm10_temp'" >TEMP (T501-T502)</th>
<th style="border:1px solid black;" v-if="val_1[7] == 'fm11_temp'" >TEMP (Tar Transfer)</th>
<th style="border:1px solid black;" v-if="val_1[7] == 'fm12_temp'" >TEMP (Recycle to D405 Line)</th>
<th style="border:1px solid black;" v-if="val_1[7] == 'fm13_temp'" >TEMP (Biodiesel to Storage)</th>
<th style="border:1px solid black;" v-if="val_1[7] == 'fm14_temp'" >TEMP (D403 into T601)</th>
<th style="border:1px solid black;" v-if="val_1[7] == 'fm7_temp'" >TEMP (T601 to D602) </th>
<th style="border:1px solid black;" v-if="val_1[7] == 'fm16_temp'" >TEMP (T601 to Reflux)</th>
<th style="border:1px solid black;" v-if="val_1[7] == 'fm17_temp'" >TEMP (T601 Drain)</th>
<th style="border:1px solid black;" v-if="val_1[7] == 'fm18_temp'" >TEMP (Matdanol into GST 1 and 2)</th>
<th style="border:1px solid black;" v-if="val_1[7] == 'fm19_temp'" >TEMP (Metdanol into PPRA and B)</th>
<th style="border:1px solid black;" v-if="val_1[7] == 'fm20_temp'" >TEMP (Matdanol into GLV)</th>
<th style="border:1px solid black;" v-if="val_1[7] == 'fm21_temp'" >TEMP (Metdanol into Trans)</th>
<th style="border:1px solid black;" v-if="val_1[7] == 'fm22_temp'" >TEMP (Biodiesel Storage to Truck)</th>
<th style="border:1px solid black;" v-if="val_1[7] == 'fm23_temp'" >TEMP (Raw Material Offloading)</th>
<th style="border:1px solid black;" v-if="val_1[7] == 'fm24_temp'" >TEMP (Raw Metarial to Settling Tank)</th>
<th style="border:1px solid black;" v-if="val_1[7] == 'fm25_temp'" >TEMP (Settling Tank to D101)</th>
<th style="border:1px solid black;" v-if="val_1[7] == 'fm26_temp'" >TEMP (CT Outlet)</th>
<th style="border:1px solid black;" v-if="val_1[7] == 'fm27_temp'" >TEMP (CT Inlet)</th>
                    <th style="border:1px solid black;" v-if="val_1[7] == 'rdl_32'" >GST-2-L</th>
                    <th style="border:1px solid black;" v-if="val_1[7] == 'vr_32'" >GST-2-V</th>
                    <th style="border:1px solid black;" v-if="val_1[7] == 'rtd_42'" >GST-2-T</th>
                    <th style="border:1px solid black;" v-if="val_1[7] == 'fm_45'" >(Metdanol Transfer)</th>
                    <th style="border:1px solid black;" v-if="val_1[7] == 'ft_45'" >FT (Metdanol Transfer)</th>
                    <th style="border:1px solid black;" v-if="val_1[7] == 'fm45_den'" >DEN (Metdanol Transfer)</th>
                    <th style="border:1px solid black;" v-if="val_1[7] == 'fm45_temp'" >TEMP (Metdanol Transfer)</th>
                    <th style="border:1px solid black;" v-if="val_1[7] == 'fm_62'" >(RVP)</th>
                    <th style="border:1px solid black;" v-if="val_1[7] == 'ft_62'" >FT (RVP)</th>
                    <th style="border:1px solid black;" v-if="val_1[7] == 'fm_66'" >(Milky)</th>
                    <th style="border:1px solid black;" v-if="val_1[7] == 'ft_66'" >FT (Milky)</th>

                     <th style="border:1px solid black;" v-if="val_1[8] == 'st_fm2_flow'">Main Steam</th>
                    <th style="border:1px solid black;" v-if="val_1[8] == 'stfm2_flow_tot'">Total Flow</th>
                    <th style="border:1px solid black;" v-if="val_1[8] == 'stfm2_temp'">Temp</th>
                    <th style="border:1px solid black;" v-if="val_1[8] == 'stfm2_pressure'">Pressure</th>

                    <th style="border:1px solid black;" v-if="val_1[8] == 'st_fm1_flow'">Steam to E401</th>
                    <th style="border:1px solid black;" v-if="val_1[8] == 'stfm1_flow_tot'">Total Flow</th>
                    <th style="border:1px solid black;" v-if="val_1[8] == 'stfm1_temp'">Temp</th>
                    <th style="border:1px solid black;" v-if="val_1[8] == 'stfm1_pressure'">Pressure</th>

                    <th style="border:1px solid black;" v-if="val_1[8] == 'rdl_1'" >D101A-L</th>
                    <th style="border:1px solid black;" v-if="val_1[8] == 'vr_1'" >D101A-V</th>
                    <th style="border:1px solid black;" v-if="val_1[8] == 'rdl_2'" >D101B-L</th>
                    <th style="border:1px solid black;" v-if="val_1[8] == 'vr_2'" >D101B-V</th>
                    <th style="border:1px solid black;" v-if="val_1[8] == 'rdl_3'" >D405A-L</th>
                    <th style="border:1px solid black;" v-if="val_1[8] == 'vr_3'" >D405A-V</th>
                    <th style="border:1px solid black;" v-if="val_1[8] == 'rdl_4'" >D405B-L</th>
                    <th style="border:1px solid black;" v-if="val_1[8] == 'vr_4'" >D405B-V</th>
                    <th style="border:1px solid black;" v-if="val_1[8] == 'rdl_5'" >D405C-L</th>
                    <th style="border:1px solid black;" v-if="val_1[8] == 'vr_5'" >D405C-V</th>
                    <th style="border:1px solid black;" v-if="val_1[8] == 'rdl_6'" >C401A-L</th>
                    <th style="border:1px solid black;" v-if="val_1[8] == 'vr_6'" >C401A-V</th>
                    <th style="border:1px solid black;" v-if="val_1[8] == 'rdl_7'" >C401B-L</th>
                    <th style="border:1px solid black;" v-if="val_1[8] == 'vr_7'" >C401B-V</th>
                    <th style="border:1px solid black;" v-if="val_1[8] == 'rdl_8'" >D402A-L</th>
                    <th style="border:1px solid black;" v-if="val_1[8] == 'vr_8'" >D402A-V</th>
                    <th style="border:1px solid black;" v-if="val_1[8] == 'rdl_9'" >D402B-L</th>
                    <th style="border:1px solid black;" v-if="val_1[8] == 'vr_9'" >D402B-V</th>
                    <th style="border:1px solid black;" v-if="val_1[8] == 'rdl_10'" >D402C-L</th>
                    <th style="border:1px solid black;" v-if="val_1[8] == 'vr_10'" >D402C-V</th>
                    <th style="border:1px solid black;" v-if="val_1[8] == 'rdl_11'" >D402D-L</th>
                    <th style="border:1px solid black;" v-if="val_1[8] == 'vr_11'" >D402D-V</th>
                    <th style="border:1px solid black;" v-if="val_1[8] == 'rdl_12'" >GLV-L</th>
                    <th style="border:1px solid black;" v-if="val_1[8] == 'vr_12'" >GLV-V</th>
                    <th style="border:1px solid black;" v-if="val_1[8] == 'rdl_13'" >SettlingA-L</th>
                    <th style="border:1px solid black;" v-if="val_1[8] == 'vr_13'" >SettlingA-V</th>
                    <th style="border:1px solid black;" v-if="val_1[8] == 'rdl_14'" >SettlingB-L</th>
                    <th style="border:1px solid black;" v-if="val_1[8] == 'vr_14'" >SettlingB-V</th>
                    <th style="border:1px solid black;" v-if="val_1[8] == 'rdl_15'" >SettlingC-L</th>
                    <th style="border:1px solid black;" v-if="val_1[8] == 'vr_15'" >SettlingC-V</th>
                    <th style="border:1px solid black;" v-if="val_1[8] == 'rdl_16'" >Metdanol T1-L</th>
                    <th style="border:1px solid black;" v-if="val_1[8] == 'vr_16'" >Metdanol T1-V</th>
                    <th style="border:1px solid black;" v-if="val_1[8] == 'rdl_17'" >Tar-L</th>
                    <th style="border:1px solid black;" v-if="val_1[8] == 'vr_17'" >Tar-V</th>
                    <th style="border:1px solid black;" v-if="val_1[8] == 'rdl_18'" >GST T1-L</th>
                    <th style="border:1px solid black;" v-if="val_1[8] == 'vr_18'" >GST T1-V</th>
                    <th style="border:1px solid black;" v-if="val_1[8] == 'rdl_19'" >Metdanol T2-L</th>
                    <th style="border:1px solid black;" v-if="val_1[8] == 'vr_19'" >Metdanol T2-V</th>
                    <th style="border:1px solid black;" v-if="val_1[8] == 'rdl_20'" >SP1-L</th>
                    <th style="border:1px solid black;" v-if="val_1[8] == 'vr_20'" >SP1-V</th>
                    <th style="border:1px solid black;" v-if="val_1[8] == 'rdl_21'" >SP2-L</th>
                    <th style="border:1px solid black;" v-if="val_1[8] == 'vr_21'" >SP2-V</th>
                    <th style="border:1px solid black;" v-if="val_1[8] == 'rdl_22'" >SP3-L</th>
                    <th style="border:1px solid black;" v-if="val_1[8] == 'vr_22'" >SP3-V</th>
                    <th style="border:1px solid black;" v-if="val_1[8] == 'rdl_23'" >PPRA-L</th>
                    <th style="border:1px solid black;" v-if="val_1[8] == 'vr_23'" >PPRA-V</th>
                    <th style="border:1px solid black;" v-if="val_1[8] == 'rdl_24'" >PPRB-L</th>
                    <th style="border:1px solid black;" v-if="val_1[8] == 'vr_24'" >PPRB-V</th>
                    <th style="border:1px solid black;" v-if="val_1[8] == 'rdl_25'" >H2SO4-L</th>
                    <th style="border:1px solid black;" v-if="val_1[8] == 'rdl25_volume'" >H2SO4-V</th>
                    <th style="border:1px solid black;" v-if="val_1[8] == 'rdl25_mass'" >Mass In Kg</th>
                    <th style="border:1px solid black;" v-if="val_1[8] == 'rtd_1'" >E101-T</th>
                    <th style="border:1px solid black;" v-if="val_1[8] == 'rtd_2'" >D101A-T</th>
                    <th style="border:1px solid black;" v-if="val_1[8] == 'rtd_3'" >D101B-T</th>
                    <th style="border:1px solid black;" v-if="val_1[8] == 'rtd_4'" >E201-T</th>
                    <th style="border:1px solid black;" v-if="val_1[8] == 'rtd_5'" >GLV-Top-T</th>
                    <th style="border:1px solid black;" v-if="val_1[8] == 'rtd_6'" >GLV-Mid-T</th>
                    <th style="border:1px solid black;" v-if="val_1[8] == 'rtd_7'" >GLV-BTM-T</th>
                    <th style="border:1px solid black;" v-if="val_1[8] == 'rtd_8'" >GLV-EVP-T</th>
                    <th style="border:1px solid black;" v-if="val_1[8] == 'rtd_9'" >SettlingA-T</th>
                    <th style="border:1px solid black;" v-if="val_1[8] == 'rtd_10'" >SettlingB-T</th>
                    <th style="border:1px solid black;" v-if="val_1[8] == 'rtd_11'" >SettlingC-T</th>
                    <th style="border:1px solid black;" v-if="val_1[8] == 'rtd_12'" >Hot Water-T</th>
                    <th style="border:1px solid black;" v-if="val_1[8] == 'rtd_13'" >D402A-T</th>
                    <th style="border:1px solid black;" v-if="val_1[8] == 'rtd_14'" >D402B-T</th>
                    <th style="border:1px solid black;" v-if="val_1[8] == 'rtd_15'" >D402C-T</th>
                    <th style="border:1px solid black;" v-if="val_1[8] == 'rtd_16'" >D402D-T</th>
                    <th style="border:1px solid black;" v-if="val_1[8] == 'rtd_17'" >Trans EVP-T</th>
                    <th style="border:1px solid black;" v-if="val_1[8] == 'rtd_18'" >Blue-T</th>
                    <th style="border:1px solid black;" v-if="val_1[8] == 'rtd_19'" >Green-T</th>
                    <th style="border:1px solid black;" v-if="val_1[8] == 'rtd_20'" >Old Green-T</th>
                    <th style="border:1px solid black;" v-if="val_1[8] == 'rtd_21'" >E601-T</th>
                    <th style="border:1px solid black;" v-if="val_1[8] == 'rtd_22'" >T601-Top-T</th>
                    <th style="border:1px solid black;" v-if="val_1[8] == 'rtd_23'" >T601-Mid-T</th>
                    <th style="border:1px solid black;" v-if="val_1[8] == 'rtd_24'" >T601-BTM-T</th>
                    <th style="border:1px solid black;" v-if="val_1[8] == 'rtd_25'" >E501</th>
                    <th style="border:1px solid black;" v-if="val_1[8] == 'rtd_26'" >D501</th>
                    <th style="border:1px solid black;" v-if="val_1[8] == 'rtd_27'" >T501-Top-T</th>
                    <th style="border:1px solid black;" v-if="val_1[8] == 'rtd_28'" >T501-Mid-T</th>
                    <th style="border:1px solid black;" v-if="val_1[8] == 'rtd_29'" >RTDT501-BTM-T</th>
                    <th style="border:1px solid black;" v-if="val_1[8] == 'rtd_30'" >T502-Mid-T</th>
                    <th style="border:1px solid black;" v-if="val_1[8] == 'rtd_31'" >T502-BTM-T</th>
                    <th style="border:1px solid black;" v-if="val_1[8] == 'rtd_32'" >PPRA-T</th>
                    <th style="border:1px solid black;" v-if="val_1[8] == 'rtd_33'" >PPRB-T</th>
                    <th style="border:1px solid black;" v-if="val_1[8] == 'rtd_34'" >GST T1-T</th>
                    <th style="border:1px solid black;" v-if="val_1[8] == 'rtd_35'" >Trans React-T</th>
                    <th style="border:1px solid black;" v-if="val_1[8] == 'rtd_36'" >Bio Storag-T</th>
                    <th style="border:1px solid black;" v-if="val_1[8] == 'rtd_37'" >Bio Transf-T</th>
                    <th style="border:1px solid black;" v-if="val_1[8] == 'dpl_1'" >D501-L</th>
                    <th style="border:1px solid black;" v-if="val_1[8] == 'vd_1'" >D501-V</th>
                    <th style="border:1px solid black;" v-if="val_1[8] == 'dpl_2'" >E401-L</th>
                    <th style="border:1px solid black;" v-if="val_1[8] == 'vd_2'" >E401-V</th>
                    <th style="border:1px solid black;" v-if="val_1[8] == 'dpl_3'" >T601-L</th>
                    <th style="border:1px solid black;" v-if="val_1[8] == 'vd_3'" >T601-V</th>
                    <th style="border:1px solid black;" v-if="val_1[8] == 'dpl_4'" >D503-L</th>
                    <th style="border:1px solid black;" v-if="val_1[8] == 'vd_4'" >D503-V</th>
                    <th style="border:1px solid black;" v-if="val_1[8] == 'dpl_5'" >D504-L</th>
                    <th style="border:1px solid black;" v-if="val_1[8] == 'vd_5'" >D504-V</th>
                    <th style="border:1px solid black;" v-if="val_1[8] == 'dpl_6'" >T501-L</th>
                    <th style="border:1px solid black;" v-if="val_1[8] == 'vd_6'" >T501-V</th>
                    <th style="border:1px solid black;" v-if="val_1[8] == 'dpl_7'" >T502-L</th>
                    <th style="border:1px solid black;" v-if="val_1[8] == 'vd_7'" >T502-V</th>
                    <th style="border:1px solid black;" v-if="val_1[8] == 'dpl_8'" >Bio Storage Tank-L</th>
                    <th style="border:1px solid black;" v-if="val_1[8] == 'vd_8'" >Bio Storage Tank-V</th>
                    <th style="border:1px solid black;" v-if="val_1[8] == 'fm_1'" >TRANS OIL</th>
                    <th style="border:1px solid black;" v-if="val_1[8] == 'fm_2'" >ALKALI TRANS</th>
                    <th style="border:1px solid black;" v-if="val_1[8] == 'fm_3'" >TRANS EVAPORATOR TO NI</th>
                    <th style="border:1px solid black;" v-if="val_1[8] == 'fm_4'" >WATER N1</th>
                    <th style="border:1px solid black;" v-if="val_1[8] == 'fm_5'" >N2 TO D402</th>
                    <th style="border:1px solid black;" v-if="val_1[8] == 'fm_6'" >N3 TO SLAGPOOL</th>
                    <th style="border:1px solid black;" v-if="val_1[8] == 'fm_7'" >D602 TO METdANOL STORAGE TANK</th>
                    <th style="border:1px solid black;" v-if="val_1[8] == 'fm_8'" >D402-D501</th>
                    <th style="border:1px solid black;" v-if="val_1[8] == 'fm_9'" >D501-T501</th>
                    <th style="border:1px solid black;" v-if="val_1[8] == 'fm_10'" >T501-T502</th>
                    <th style="border:1px solid black;" v-if="val_1[8] == 'fm_11'" >TAR TRANSFER</th>
                    <th style="border:1px solid black;" v-if="val_1[8] == 'fm_12'" >RECYCLE TO D405 LINE</th>
                    <th style="border:1px solid black;" v-if="val_1[8] == 'fm_13'" >BIODIESEL TO STORAGE</th>
                    <th style="border:1px solid black;" v-if="val_1[8] == 'fm_14'" >D403 INTO T601</th>
                    <th style="border:1px solid black;" v-if="val_1[8] == 'fm_15'" >T601-D602</th>
                    <th style="border:1px solid black;" v-if="val_1[8] == 'fm_16'" >T601 TO REFLUX</th>
                    <th style="border:1px solid black;" v-if="val_1[8] == 'fm_17'" >T601 DRAIN</th>
                    <th style="border:1px solid black;" v-if="val_1[8] == 'fm_18'" >METdANOL INTO GST 1 AND 2</th>
                    <th style="border:1px solid black;" v-if="val_1[8] == 'fm_19'" >METdANOL INTO PPRA AND B</th>
                    <th style="border:1px solid black;" v-if="val_1[8] == 'fm_20'" >METdANOL INTO GLV</th>
                    <th style="border:1px solid black;" v-if="val_1[8] == 'fm_21'" >METdANOL INTO TRANS</th>
                    <th style="border:1px solid black;" v-if="val_1[8] == 'fm_22'" >BIODIESEL STORAGE TO TRUCK</th>
                    <th style="border:1px solid black;" v-if="val_1[8] == 'fm_23'" >RAW MATERIAL OFFLOADING</th>
                    <th style="border:1px solid black;" v-if="val_1[8] == 'fm_24'" >RAW MATERIAL TO SETTLING TANK</th>
                    <th style="border:1px solid black;" v-if="val_1[8] == 'fm_25'" >SETTLING TANK TO D101</th>
                    <th style="border:1px solid black;" v-if="val_1[8] == 'fm_26'" >CT OUTLET</th>
                    <th style="border:1px solid black;" v-if="val_1[8] == 'fm_27'" >CT INLET</th>
                    <th style="border:1px solid black;" v-if="val_1[8] == 'ft_1'" >FT TRANS OIL</th>
                    <th style="border:1px solid black;" v-if="val_1[8] == 'ft_2'" >FT ALKALI TRANS</th>
                    <th style="border:1px solid black;" v-if="val_1[8] == 'ft_3'" >FT TRANS EVAPORATOR TO NI</th>
                    <th style="border:1px solid black;" v-if="val_1[8] == 'ft_4'" >FT WATER N1</th>
                    <th style="border:1px solid black;" v-if="val_1[8] == 'ft_5'" >FT N2 TO D402</th>
                    <th style="border:1px solid black;" v-if="val_1[8] == 'ft_6'" >FT N3 TO  SLAGPOOL</th>
                    <th style="border:1px solid black;" v-if="val_1[8] == 'ft_7'" >FT D602 TO METdANOL STORAGE TANK</th>
                    <th style="border:1px solid black;" v-if="val_1[8] == 'ft_8'" >FT D402-D501</th>
                    <th style="border:1px solid black;" v-if="val_1[8] == 'ft_9'" >FT D501-T501</th>
                    <th style="border:1px solid black;" v-if="val_1[8] == 'ft_10'" >FT T501-T502</th>
                    <th style="border:1px solid black;" v-if="val_1[8] == 'ft_11'" >FT TAR TRANSFER</th>
                    <th style="border:1px solid black;" v-if="val_1[8] == 'ft_12'" >FT RECYCLE TO D405</th>
                    <th style="border:1px solid black;" v-if="val_1[8] == 'ft_13'" >FT BIODIESEL TO STORAGE</th>
                    <th style="border:1px solid black;" v-if="val_1[8] == 'ft_14'" >FT D403 INTO T601</th>
                    <th style="border:1px solid black;" v-if="val_1[8] == 'ft_15'" >FT T601-D602</th>
                    <th style="border:1px solid black;" v-if="val_1[8] == 'ft_16'" >FT T601 TO REFLUX</th>
                    <th style="border:1px solid black;" v-if="val_1[8] == 'ft_17'" >FT T601 DRAIN</th>
                    <th style="border:1px solid black;" v-if="val_1[8] == 'ft_18'" >FT METdANOL INTO GST 1 AND 2</th>
                    <th style="border:1px solid black;" v-if="val_1[8] == 'ft_19'" >FT 19</th>
                    <th style="border:1px solid black;" v-if="val_1[8] == 'ft_20'" >FT METdANOL INTO GLV</th>
                    <th style="border:1px solid black;" v-if="val_1[8] == 'ft_21'" >FT METdANOL  INTO TRANS</th>
                    <th style="border:1px solid black;" v-if="val_1[8] == 'ft_22'" >FT BIODIESEL STORAGE TO TRUCK</th>
                    <th style="border:1px solid black;" v-if="val_1[8] == 'ft_23'" >FT RAW MATERIAL OFFLOADING</th>
                    <th style="border:1px solid black;" v-if="val_1[8] == 'ft_24'" >FT RAW MATERIAL TO SETTLING TANK</th>
                    <th style="border:1px solid black;" v-if="val_1[8] == 'ft_25'" >FT SETTLING TANK TO D101</th>
                    <th style="border:1px solid black;" v-if="val_1[8] == 'ft_26'" >FT CT OUTLET</th>
                    <th style="border:1px solid black;" v-if="val_1[8] == 'ft_27'" >FT CT INLET</th>
                    <th style="border:1px solid black;" v-if="val_1[8] == 'pt_1'" >PT 1</th>
                    <th style="border:1px solid black;" v-if="val_1[8] == 'pt_2'" >PT 2</th>
                    <th style="border:1px solid black;" v-if="val_1[8] == 'pt_3'" >PT 3</th>
                    <th style="border:1px solid black;" v-if="val_1[8] == 'pt_4'" >PT 4</th>
                    <th style="border:1px solid black;" v-if="val_1[8] == 'pt_5'" >Dist Header</th>
                    <th style="border:1px solid black;" v-if="val_1[8] == 'vg_1'" >Vac Line</th>
                    <th style="border:1px solid black;" v-if="val_1[8] == 'vg_2'" >VG 2</th>
                    <th style="border:1px solid black;" v-if="val_1[8] == 'vg_3'" >VG 3</th>
                    <th style="border:1px solid black;" v-if="val_1[8] == 'fm1_den'" >DEN (Trans Oil)</th>
<th style="border:1px solid black;" v-if="val_1[8] == 'fm2_den'" >DEN( Alkali Trans)</th>
<th style="border:1px solid black;" v-if="val_1[8] == 'fm3_den'" >DEN (Trans Evaporator to NI)</th>
<th style="border:1px solid black;" v-if="val_1[8] == 'fm4_den'" >DEN (Water N1)</th>
<th style="border:1px solid black;" v-if="val_1[8] == 'fm5_den'" >DEN (N2 to D402)</th>
<th style="border:1px solid black;" v-if="val_1[8] == 'fm6_den'" >DEN (N3 to Slag pool)</th>
<th style="border:1px solid black;" v-if="val_1[8] == 'fm7_den'" >DEN (D602to Metdanol Storage Tank)</th>
<th style="border:1px solid black;" v-if="val_1[8] == 'fm8_den'" >DEN (D402-D501)</th>
<th style="border:1px solid black;" v-if="val_1[8] == 'fm9_den'" >DEN (D501-T501)</th>
<th style="border:1px solid black;" v-if="val_1[8] == 'fm10_den'" >DEN (T501-T502)</th>
<th style="border:1px solid black;" v-if="val_1[8] == 'fm11_den'" >DEN (Tar Transfer)</th>
<th style="border:1px solid black;" v-if="val_1[8] == 'fm12_den'" >DEN (Recycle to D405 Line)</th>
<th style="border:1px solid black;" v-if="val_1[8] == 'fm13_den'" >DEN (Biodiesel to Storage)</th>
<th style="border:1px solid black;" v-if="val_1[8] == 'fm14_den'" >DEN (D403 into T601)</th>
<th style="border:1px solid black;" v-if="val_1[8] == 'fm15_den'" >DEN (T601 to D602) </th>
<th style="border:1px solid black;" v-if="val_1[8] == 'fm16_den'" >DEN (T601 to Reflux)</th>
<th style="border:1px solid black;" v-if="val_1[8] == 'fm17_den'" >DEN (T601 Drain)</th>
<th style="border:1px solid black;" v-if="val_1[8] == 'fm18_den'" >DEN (Matdanol into GST 1 and 2)</th>
<th style="border:1px solid black;" v-if="val_1[8] == 'fm19_den'" >DEN (Metdanol into PPRA and B)</th>
<th style="border:1px solid black;" v-if="val_1[8] == 'fm20_den'" >DEN (Matdanol into GLV)</th>
<th style="border:1px solid black;" v-if="val_1[8] == 'fm21_den'" >DEN (Metdanol into Trans)</th>
<th style="border:1px solid black;" v-if="val_1[8] == 'fm22_den'" >DEN (Biodiesel Storage to Truck)</th>
<th style="border:1px solid black;" v-if="val_1[8] == 'fm23_den'" >DEN (Raw Material Offloading)</th>
<th style="border:1px solid black;" v-if="val_1[8] == 'fm24_den'" >DEN (Raw Metarial to Settling Tank)</th>
<th style="border:1px solid black;" v-if="val_1[8] == 'fm25_den'" >DEN (Settling Tank to D101)</th>
<th style="border:1px solid black;" v-if="val_1[8] == 'fm26_den'" >DEN (CT Outlet)</th>
<th style="border:1px solid black;" v-if="val_1[8] == 'fm27_den'" >DEN (CT Inlet)</th>
<th style="border:1px solid black;" v-if="val_1[8] == 'fm1_temp'" >TEMP (Trans Oil)</th>
<th style="border:1px solid black;" v-if="val_1[8] == 'fm2_temp'" >TEMP( Alkali Trans)</th>
<th style="border:1px solid black;" v-if="val_1[8] == 'fm3_temp'" >TEMP (Trans Evaporator to NI)</th>
<th style="border:1px solid black;" v-if="val_1[8] == 'fm4_temp'" >TEMP (Water N1)</th>
<th style="border:1px solid black;" v-if="val_1[8] == 'fm5_temp'" >TEMP (N2 to D402)</th>
<th style="border:1px solid black;" v-if="val_1[8] == 'fm6_temp'" >TEMP (N3 to Slag pool)</th>
<th style="border:1px solid black;" v-if="val_1[8] == 'fm7_temp'" >TEMP (D602to Metdanol Storage Tank)</th>
<th style="border:1px solid black;" v-if="val_1[8] == 'fm8_temp'" >TEMP (D402-D501)</th>
<th style="border:1px solid black;" v-if="val_1[8] == 'fm9_temp'" >TEMP (D501-T501)</th>
<th style="border:1px solid black;" v-if="val_1[8] == 'fm10_temp'" >TEMP (T501-T502)</th>
<th style="border:1px solid black;" v-if="val_1[8] == 'fm11_temp'" >TEMP (Tar Transfer)</th>
<th style="border:1px solid black;" v-if="val_1[8] == 'fm12_temp'" >TEMP (Recycle to D405 Line)</th>
<th style="border:1px solid black;" v-if="val_1[8] == 'fm13_temp'" >TEMP (Biodiesel to Storage)</th>
<th style="border:1px solid black;" v-if="val_1[8] == 'fm14_temp'" >TEMP (D403 into T601)</th>
<th style="border:1px solid black;" v-if="val_1[8] == 'fm8_temp'" >TEMP (T601 to D602) </th>
<th style="border:1px solid black;" v-if="val_1[8] == 'fm16_temp'" >TEMP (T601 to Reflux)</th>
<th style="border:1px solid black;" v-if="val_1[8] == 'fm17_temp'" >TEMP (T601 Drain)</th>
<th style="border:1px solid black;" v-if="val_1[8] == 'fm18_temp'" >TEMP (Matdanol into GST 1 and 2)</th>
<th style="border:1px solid black;" v-if="val_1[8] == 'fm19_temp'" >TEMP (Metdanol into PPRA and B)</th>
<th style="border:1px solid black;" v-if="val_1[8] == 'fm20_temp'" >TEMP (Matdanol into GLV)</th>
<th style="border:1px solid black;" v-if="val_1[8] == 'fm21_temp'" >TEMP (Metdanol into Trans)</th>
<th style="border:1px solid black;" v-if="val_1[8] == 'fm22_temp'" >TEMP (Biodiesel Storage to Truck)</th>
<th style="border:1px solid black;" v-if="val_1[8] == 'fm23_temp'" >TEMP (Raw Material Offloading)</th>
<th style="border:1px solid black;" v-if="val_1[8] == 'fm24_temp'" >TEMP (Raw Metarial to Settling Tank)</th>
<th style="border:1px solid black;" v-if="val_1[8] == 'fm25_temp'" >TEMP (Settling Tank to D101)</th>
<th style="border:1px solid black;" v-if="val_1[8] == 'fm26_temp'" >TEMP (CT Outlet)</th>
<th style="border:1px solid black;" v-if="val_1[8] == 'fm27_temp'" >TEMP (CT Inlet)</th>
                    <th style="border:1px solid black;" v-if="val_1[8] == 'rdl_32'" >GST-2-L</th>
                    <th style="border:1px solid black;" v-if="val_1[8] == 'vr_32'" >GST-2-V</th>
                    <th style="border:1px solid black;" v-if="val_1[8] == 'rtd_42'" >GST-2-T</th>
                    <th style="border:1px solid black;" v-if="val_1[8] == 'fm_45'" >(Metdanol Transfer)</th>
                    <th style="border:1px solid black;" v-if="val_1[8] == 'ft_45'" >FT (Metdanol Transfer)</th>
                    <th style="border:1px solid black;" v-if="val_1[8] == 'fm45_den'" >DEN (Metdanol Transfer)</th>
                    <th style="border:1px solid black;" v-if="val_1[8] == 'fm45_temp'" >TEMP (Metdanol Transfer)</th>
                    <th style="border:1px solid black;" v-if="val_1[8] == 'fm_62'" >(RVP)</th>
                    <th style="border:1px solid black;" v-if="val_1[8] == 'ft_62'" >FT (RVP)</th>
                    <th style="border:1px solid black;" v-if="val_1[8] == 'fm_66'" >(Milky)</th>
                    <th style="border:1px solid black;" v-if="val_1[8] == 'ft_66'" >FT (Milky)</th>

                     <th style="border:1px solid black;" v-if="val_1[9] == 'st_fm2_flow'">Main Steam</th>
                    <th style="border:1px solid black;" v-if="val_1[9] == 'stfm2_flow_tot'">Total Flow</th>
                    <th style="border:1px solid black;" v-if="val_1[9] == 'stfm2_temp'">Temp</th>
                    <th style="border:1px solid black;" v-if="val_1[9] == 'stfm2_pressure'">Pressure</th>

                    <th style="border:1px solid black;" v-if="val_1[9] == 'st_fm1_flow'">Steam to E401</th>
                    <th style="border:1px solid black;" v-if="val_1[9] == 'stfm1_flow_tot'">Total Flow</th>
                    <th style="border:1px solid black;" v-if="val_1[9] == 'stfm1_temp'">Temp</th>
                    <th style="border:1px solid black;" v-if="val_1[9] == 'stfm1_pressure'">Pressure</th>

                    <th style="border:1px solid black;" v-if="val_1[9] == 'rdl_1'" >D101A-L</th>
                    <th style="border:1px solid black;" v-if="val_1[9] == 'vr_1'" >D101A-V</th>
                    <th style="border:1px solid black;" v-if="val_1[9] == 'rdl_2'" >D101B-L</th>
                    <th style="border:1px solid black;" v-if="val_1[9] == 'vr_2'" >D101B-V</th>
                    <th style="border:1px solid black;" v-if="val_1[9] == 'rdl_3'" >D405A-L</th>
                    <th style="border:1px solid black;" v-if="val_1[9] == 'vr_3'" >D405A-V</th>
                    <th style="border:1px solid black;" v-if="val_1[9] == 'rdl_4'" >D405B-L</th>
                    <th style="border:1px solid black;" v-if="val_1[9] == 'vr_4'" >D405B-V</th>
                    <th style="border:1px solid black;" v-if="val_1[9] == 'rdl_5'" >D405C-L</th>
                    <th style="border:1px solid black;" v-if="val_1[9] == 'vr_5'" >D405C-V</th>
                    <th style="border:1px solid black;" v-if="val_1[9] == 'rdl_6'" >C401A-L</th>
                    <th style="border:1px solid black;" v-if="val_1[9] == 'vr_6'" >C401A-V</th>
                    <th style="border:1px solid black;" v-if="val_1[9] == 'rdl_7'" >C401B-L</th>
                    <th style="border:1px solid black;" v-if="val_1[9] == 'vr_7'" >C401B-V</th>
                    <th style="border:1px solid black;" v-if="val_1[9] == 'rdl_8'" >D402A-L</th>
                    <th style="border:1px solid black;" v-if="val_1[9] == 'vr_8'" >D402A-V</th>
                    <th style="border:1px solid black;" v-if="val_1[9] == 'rdl_9'" >D402B-L</th>
                    <th style="border:1px solid black;" v-if="val_1[9] == 'vr_9'" >D402B-V</th>
                    <th style="border:1px solid black;" v-if="val_1[9] == 'rdl_10'" >D402C-L</th>
                    <th style="border:1px solid black;" v-if="val_1[9] == 'vr_10'" >D402C-V</th>
                    <th style="border:1px solid black;" v-if="val_1[9] == 'rdl_11'" >D402D-L</th>
                    <th style="border:1px solid black;" v-if="val_1[9] == 'vr_11'" >D402D-V</th>
                    <th style="border:1px solid black;" v-if="val_1[9] == 'rdl_12'" >GLV-L</th>
                    <th style="border:1px solid black;" v-if="val_1[9] == 'vr_12'" >GLV-V</th>
                    <th style="border:1px solid black;" v-if="val_1[9] == 'rdl_13'" >SettlingA-L</th>
                    <th style="border:1px solid black;" v-if="val_1[9] == 'vr_13'" >SettlingA-V</th>
                    <th style="border:1px solid black;" v-if="val_1[9] == 'rdl_14'" >SettlingB-L</th>
                    <th style="border:1px solid black;" v-if="val_1[9] == 'vr_14'" >SettlingB-V</th>
                    <th style="border:1px solid black;" v-if="val_1[9] == 'rdl_15'" >SettlingC-L</th>
                    <th style="border:1px solid black;" v-if="val_1[9] == 'vr_15'" >SettlingC-V</th>
                    <th style="border:1px solid black;" v-if="val_1[9] == 'rdl_16'" >Metdanol T1-L</th>
                    <th style="border:1px solid black;" v-if="val_1[9] == 'vr_16'" >Metdanol T1-V</th>
                    <th style="border:1px solid black;" v-if="val_1[9] == 'rdl_17'" >Tar-L</th>
                    <th style="border:1px solid black;" v-if="val_1[9] == 'vr_17'" >Tar-V</th>
                    <th style="border:1px solid black;" v-if="val_1[9] == 'rdl_18'" >GST T1-L</th>
                    <th style="border:1px solid black;" v-if="val_1[9] == 'vr_18'" >GST T1-V</th>
                    <th style="border:1px solid black;" v-if="val_1[9] == 'rdl_19'" >Metdanol T2-L</th>
                    <th style="border:1px solid black;" v-if="val_1[9] == 'vr_19'" >Metdanol T2-V</th>
                    <th style="border:1px solid black;" v-if="val_1[9] == 'rdl_20'" >SP1-L</th>
                    <th style="border:1px solid black;" v-if="val_1[9] == 'vr_20'" >SP1-V</th>
                    <th style="border:1px solid black;" v-if="val_1[9] == 'rdl_21'" >SP2-L</th>
                    <th style="border:1px solid black;" v-if="val_1[9] == 'vr_21'" >SP2-V</th>
                    <th style="border:1px solid black;" v-if="val_1[9] == 'rdl_22'" >SP3-L</th>
                    <th style="border:1px solid black;" v-if="val_1[9] == 'vr_22'" >SP3-V</th>
                    <th style="border:1px solid black;" v-if="val_1[9] == 'rdl_23'" >PPRA-L</th>
                    <th style="border:1px solid black;" v-if="val_1[9] == 'vr_23'" >PPRA-V</th>
                    <th style="border:1px solid black;" v-if="val_1[9] == 'rdl_24'" >PPRB-L</th>
                    <th style="border:1px solid black;" v-if="val_1[9] == 'vr_24'" >PPRB-V</th>
                    <th style="border:1px solid black;" v-if="val_1[9] == 'rdl_25'" >H2SO4-L</th>
                    <th style="border:1px solid black;" v-if="val_1[9] == 'rdl25_volume'" >H2SO4-V</th>
                    <th style="border:1px solid black;" v-if="val_1[9] == 'rdl25_mass'" >Mass In Kg</th>
                    <th style="border:1px solid black;" v-if="val_1[9] == 'rtd_1'" >E101-T</th>
                    <th style="border:1px solid black;" v-if="val_1[9] == 'rtd_2'" >D101A-T</th>
                    <th style="border:1px solid black;" v-if="val_1[9] == 'rtd_3'" >D101B-T</th>
                    <th style="border:1px solid black;" v-if="val_1[9] == 'rtd_4'" >E201-T</th>
                    <th style="border:1px solid black;" v-if="val_1[9] == 'rtd_5'" >GLV-Top-T</th>
                    <th style="border:1px solid black;" v-if="val_1[9] == 'rtd_6'" >GLV-Mid-T</th>
                    <th style="border:1px solid black;" v-if="val_1[9] == 'rtd_7'" >GLV-BTM-T</th>
                    <th style="border:1px solid black;" v-if="val_1[9] == 'rtd_8'" >GLV-EVP-T</th>
                    <th style="border:1px solid black;" v-if="val_1[9] == 'rtd_9'" >SettlingA-T</th>
                    <th style="border:1px solid black;" v-if="val_1[9] == 'rtd_10'" >SettlingB-T</th>
                    <th style="border:1px solid black;" v-if="val_1[9] == 'rtd_11'" >SettlingC-T</th>
                    <th style="border:1px solid black;" v-if="val_1[9] == 'rtd_12'" >Hot Water-T</th>
                    <th style="border:1px solid black;" v-if="val_1[9] == 'rtd_13'" >D402A-T</th>
                    <th style="border:1px solid black;" v-if="val_1[9] == 'rtd_14'" >D402B-T</th>
                    <th style="border:1px solid black;" v-if="val_1[9] == 'rtd_15'" >D402C-T</th>
                    <th style="border:1px solid black;" v-if="val_1[9] == 'rtd_16'" >D402D-T</th>
                    <th style="border:1px solid black;" v-if="val_1[9] == 'rtd_17'" >Trans EVP-T</th>
                    <th style="border:1px solid black;" v-if="val_1[9] == 'rtd_18'" >Blue-T</th>
                    <th style="border:1px solid black;" v-if="val_1[9] == 'rtd_19'" >Green-T</th>
                    <th style="border:1px solid black;" v-if="val_1[9] == 'rtd_20'" >Old Green-T</th>
                    <th style="border:1px solid black;" v-if="val_1[9] == 'rtd_21'" >E601-T</th>
                    <th style="border:1px solid black;" v-if="val_1[9] == 'rtd_22'" >T601-Top-T</th>
                    <th style="border:1px solid black;" v-if="val_1[9] == 'rtd_23'" >T601-Mid-T</th>
                    <th style="border:1px solid black;" v-if="val_1[9] == 'rtd_24'" >T601-BTM-T</th>
                    <th style="border:1px solid black;" v-if="val_1[9] == 'rtd_25'" >E501</th>
                    <th style="border:1px solid black;" v-if="val_1[9] == 'rtd_26'" >D501</th>
                    <th style="border:1px solid black;" v-if="val_1[9] == 'rtd_27'" >T501-Top-T</th>
                    <th style="border:1px solid black;" v-if="val_1[9] == 'rtd_28'" >T501-Mid-T</th>
                    <th style="border:1px solid black;" v-if="val_1[9] == 'rtd_29'" >RTDT501-BTM-T</th>
                    <th style="border:1px solid black;" v-if="val_1[9] == 'rtd_30'" >T502-Mid-T</th>
                    <th style="border:1px solid black;" v-if="val_1[9] == 'rtd_31'" >T502-BTM-T</th>
                    <th style="border:1px solid black;" v-if="val_1[9] == 'rtd_32'" >PPRA-T</th>
                    <th style="border:1px solid black;" v-if="val_1[9] == 'rtd_33'" >PPRB-T</th>
                    <th style="border:1px solid black;" v-if="val_1[9] == 'rtd_34'" >GST T1-T</th>
                    <th style="border:1px solid black;" v-if="val_1[9] == 'rtd_35'" >Trans React-T</th>
                    <th style="border:1px solid black;" v-if="val_1[9] == 'rtd_36'" >Bio Storag-T</th>
                    <th style="border:1px solid black;" v-if="val_1[9] == 'rtd_37'" >Bio Transf-T</th>
                    <th style="border:1px solid black;" v-if="val_1[9] == 'dpl_1'" >D501-L</th>
                    <th style="border:1px solid black;" v-if="val_1[9] == 'vd_1'" >D501-V</th>
                    <th style="border:1px solid black;" v-if="val_1[9] == 'dpl_2'" >E401-L</th>
                    <th style="border:1px solid black;" v-if="val_1[9] == 'vd_2'" >E401-V</th>
                    <th style="border:1px solid black;" v-if="val_1[9] == 'dpl_3'" >T601-L</th>
                    <th style="border:1px solid black;" v-if="val_1[9] == 'vd_3'" >T601-V</th>
                    <th style="border:1px solid black;" v-if="val_1[9] == 'dpl_4'" >D503-L</th>
                    <th style="border:1px solid black;" v-if="val_1[9] == 'vd_4'" >D503-V</th>
                    <th style="border:1px solid black;" v-if="val_1[9] == 'dpl_5'" >D504-L</th>
                    <th style="border:1px solid black;" v-if="val_1[9] == 'vd_5'" >D504-V</th>
                    <th style="border:1px solid black;" v-if="val_1[9] == 'dpl_6'" >T501-L</th>
                    <th style="border:1px solid black;" v-if="val_1[9] == 'vd_6'" >T501-V</th>
                    <th style="border:1px solid black;" v-if="val_1[9] == 'dpl_7'" >T502-L</th>
                    <th style="border:1px solid black;" v-if="val_1[9] == 'vd_7'" >T502-V</th>
                    <th style="border:1px solid black;" v-if="val_1[9] == 'dpl_8'" >Bio Storage Tank-L</th>
                    <th style="border:1px solid black;" v-if="val_1[9] == 'vd_8'" >Bio Storage Tank-V</th>
                    <th style="border:1px solid black;" v-if="val_1[9] == 'fm_1'" >TRANS OIL</th>
                    <th style="border:1px solid black;" v-if="val_1[9] == 'fm_2'" >ALKALI TRANS</th>
                    <th style="border:1px solid black;" v-if="val_1[9] == 'fm_3'" >TRANS EVAPORATOR TO NI</th>
                    <th style="border:1px solid black;" v-if="val_1[9] == 'fm_4'" >WATER N1</th>
                    <th style="border:1px solid black;" v-if="val_1[9] == 'fm_5'" >N2 TO D402</th>
                    <th style="border:1px solid black;" v-if="val_1[9] == 'fm_6'" >N3 TO SLAGPOOL</th>
                    <th style="border:1px solid black;" v-if="val_1[9] == 'fm_7'" >D602 TO METdANOL STORAGE TANK</th>
                    <th style="border:1px solid black;" v-if="val_1[9] == 'fm_8'" >D402-D501</th>
                    <th style="border:1px solid black;" v-if="val_1[9] == 'fm_9'" >D501-T501</th>
                    <th style="border:1px solid black;" v-if="val_1[9] == 'fm_10'" >T501-T502</th>
                    <th style="border:1px solid black;" v-if="val_1[9] == 'fm_11'" >TAR TRANSFER</th>
                    <th style="border:1px solid black;" v-if="val_1[9] == 'fm_12'" >RECYCLE TO D405 LINE</th>
                    <th style="border:1px solid black;" v-if="val_1[9] == 'fm_13'" >BIODIESEL TO STORAGE</th>
                    <th style="border:1px solid black;" v-if="val_1[9] == 'fm_14'" >D403 INTO T601</th>
                    <th style="border:1px solid black;" v-if="val_1[9] == 'fm_15'" >T601-D602</th>
                    <th style="border:1px solid black;" v-if="val_1[9] == 'fm_16'" >T601 TO REFLUX</th>
                    <th style="border:1px solid black;" v-if="val_1[9] == 'fm_17'" >T601 DRAIN</th>
                    <th style="border:1px solid black;" v-if="val_1[9] == 'fm_18'" >METdANOL INTO GST 1 AND 2</th>
                    <th style="border:1px solid black;" v-if="val_1[9] == 'fm_19'" >METdANOL INTO PPRA AND B</th>
                    <th style="border:1px solid black;" v-if="val_1[9] == 'fm_20'" >METdANOL INTO GLV</th>
                    <th style="border:1px solid black;" v-if="val_1[9] == 'fm_21'" >METdANOL INTO TRANS</th>
                    <th style="border:1px solid black;" v-if="val_1[9] == 'fm_22'" >BIODIESEL STORAGE TO TRUCK</th>
                    <th style="border:1px solid black;" v-if="val_1[9] == 'fm_23'" >RAW MATERIAL OFFLOADING</th>
                    <th style="border:1px solid black;" v-if="val_1[9] == 'fm_24'" >RAW MATERIAL TO SETTLING TANK</th>
                    <th style="border:1px solid black;" v-if="val_1[9] == 'fm_25'" >SETTLING TANK TO D101</th>
                    <th style="border:1px solid black;" v-if="val_1[9] == 'fm_26'" >CT OUTLET</th>
                    <th style="border:1px solid black;" v-if="val_1[9] == 'fm_27'" >CT INLET</th>
                    <th style="border:1px solid black;" v-if="val_1[9] == 'ft_1'" >FT TRANS OIL</th>
                    <th style="border:1px solid black;" v-if="val_1[9] == 'ft_2'" >FT ALKALI TRANS</th>
                    <th style="border:1px solid black;" v-if="val_1[9] == 'ft_3'" >FT TRANS EVAPORATOR TO NI</th>
                    <th style="border:1px solid black;" v-if="val_1[9] == 'ft_4'" >FT WATER N1</th>
                    <th style="border:1px solid black;" v-if="val_1[9] == 'ft_5'" >FT N2 TO D402</th>
                    <th style="border:1px solid black;" v-if="val_1[9] == 'ft_6'" >FT N3 TO  SLAGPOOL</th>
                    <th style="border:1px solid black;" v-if="val_1[9] == 'ft_7'" >FT D602 TO METdANOL STORAGE TANK</th>
                    <th style="border:1px solid black;" v-if="val_1[9] == 'ft_8'" >FT D402-D501</th>
                    <th style="border:1px solid black;" v-if="val_1[9] == 'ft_9'" >FT D501-T501</th>
                    <th style="border:1px solid black;" v-if="val_1[9] == 'ft_10'" >FT T501-T502</th>
                    <th style="border:1px solid black;" v-if="val_1[9] == 'ft_11'" >FT TAR TRANSFER</th>
                    <th style="border:1px solid black;" v-if="val_1[9] == 'ft_12'" >FT RECYCLE TO D405</th>
                    <th style="border:1px solid black;" v-if="val_1[9] == 'ft_13'" >FT BIODIESEL TO STORAGE</th>
                    <th style="border:1px solid black;" v-if="val_1[9] == 'ft_14'" >FT D403 INTO T601</th>
                    <th style="border:1px solid black;" v-if="val_1[9] == 'ft_15'" >FT T601-D602</th>
                    <th style="border:1px solid black;" v-if="val_1[9] == 'ft_16'" >FT T601 TO REFLUX</th>
                    <th style="border:1px solid black;" v-if="val_1[9] == 'ft_17'" >FT T601 DRAIN</th>
                    <th style="border:1px solid black;" v-if="val_1[9] == 'ft_18'" >FT METdANOL INTO GST 1 AND 2</th>
                    <th style="border:1px solid black;" v-if="val_1[9] == 'ft_19'" >FT 19</th>
                    <th style="border:1px solid black;" v-if="val_1[9] == 'ft_20'" >FT METdANOL INTO GLV</th>
                    <th style="border:1px solid black;" v-if="val_1[9] == 'ft_21'" >FT METdANOL  INTO TRANS</th>
                    <th style="border:1px solid black;" v-if="val_1[9] == 'ft_22'" >FT BIODIESEL STORAGE TO TRUCK</th>
                    <th style="border:1px solid black;" v-if="val_1[9] == 'ft_23'" >FT RAW MATERIAL OFFLOADING</th>
                    <th style="border:1px solid black;" v-if="val_1[9] == 'ft_24'" >FT RAW MATERIAL TO SETTLING TANK</th>
                    <th style="border:1px solid black;" v-if="val_1[9] == 'ft_25'" >FT SETTLING TANK TO D101</th>
                    <th style="border:1px solid black;" v-if="val_1[9] == 'ft_26'" >FT CT OUTLET</th>
                    <th style="border:1px solid black;" v-if="val_1[9] == 'ft_27'" >FT CT INLET</th>
                    <th style="border:1px solid black;" v-if="val_1[9] == 'pt_1'" >PT 1</th>
                    <th style="border:1px solid black;" v-if="val_1[9] == 'pt_2'" >PT 2</th>
                    <th style="border:1px solid black;" v-if="val_1[9] == 'pt_3'" >PT 3</th>
                    <th style="border:1px solid black;" v-if="val_1[9] == 'pt_4'" >PT 4</th>
                    <th style="border:1px solid black;" v-if="val_1[9] == 'pt_5'" >Dist Header</th>
                    <th style="border:1px solid black;" v-if="val_1[9] == 'vg_1'" >Vac Line</th>
                    <th style="border:1px solid black;" v-if="val_1[9] == 'vg_2'" >VG 2</th>
                    <th style="border:1px solid black;" v-if="val_1[9] == 'vg_3'" >VG 3</th>
                    <th style="border:1px solid black;" v-if="val_1[9] == 'fm1_den'" >DEN (Trans Oil)</th>
<th style="border:1px solid black;" v-if="val_1[9] == 'fm2_den'" >DEN( Alkali Trans)</th>
<th style="border:1px solid black;" v-if="val_1[9] == 'fm3_den'" >DEN (Trans Evaporator to NI)</th>
<th style="border:1px solid black;" v-if="val_1[9] == 'fm4_den'" >DEN (Water N1)</th>
<th style="border:1px solid black;" v-if="val_1[9] == 'fm5_den'" >DEN (N2 to D402)</th>
<th style="border:1px solid black;" v-if="val_1[9] == 'fm6_den'" >DEN (N3 to Slag pool)</th>
<th style="border:1px solid black;" v-if="val_1[9] == 'fm7_den'" >DEN (D602to Metdanol Storage Tank)</th>
<th style="border:1px solid black;" v-if="val_1[9] == 'fm8_den'" >DEN (D402-D501)</th>
<th style="border:1px solid black;" v-if="val_1[9] == 'fm9_den'" >DEN (D501-T501)</th>
<th style="border:1px solid black;" v-if="val_1[9] == 'fm10_den'" >DEN (T501-T502)</th>
<th style="border:1px solid black;" v-if="val_1[9] == 'fm11_den'" >DEN (Tar Transfer)</th>
<th style="border:1px solid black;" v-if="val_1[9] == 'fm12_den'" >DEN (Recycle to D405 Line)</th>
<th style="border:1px solid black;" v-if="val_1[9] == 'fm13_den'" >DEN (Biodiesel to Storage)</th>
<th style="border:1px solid black;" v-if="val_1[9] == 'fm14_den'" >DEN (D403 into T601)</th>
<th style="border:1px solid black;" v-if="val_1[9] == 'fm15_den'" >DEN (T601 to D602) </th>
<th style="border:1px solid black;" v-if="val_1[9] == 'fm16_den'" >DEN (T601 to Reflux)</th>
<th style="border:1px solid black;" v-if="val_1[9] == 'fm17_den'" >DEN (T601 Drain)</th>
<th style="border:1px solid black;" v-if="val_1[9] == 'fm18_den'" >DEN (Matdanol into GST 1 and 2)</th>
<th style="border:1px solid black;" v-if="val_1[9] == 'fm19_den'" >DEN (Metdanol into PPRA and B)</th>
<th style="border:1px solid black;" v-if="val_1[9] == 'fm20_den'" >DEN (Matdanol into GLV)</th>
<th style="border:1px solid black;" v-if="val_1[9] == 'fm21_den'" >DEN (Metdanol into Trans)</th>
<th style="border:1px solid black;" v-if="val_1[9] == 'fm22_den'" >DEN (Biodiesel Storage to Truck)</th>
<th style="border:1px solid black;" v-if="val_1[9] == 'fm23_den'" >DEN (Raw Material Offloading)</th>
<th style="border:1px solid black;" v-if="val_1[9] == 'fm24_den'" >DEN (Raw Metarial to Settling Tank)</th>
<th style="border:1px solid black;" v-if="val_1[9] == 'fm25_den'" >DEN (Settling Tank to D101)</th>
<th style="border:1px solid black;" v-if="val_1[9] == 'fm26_den'" >DEN (CT Outlet)</th>
<th style="border:1px solid black;" v-if="val_1[9] == 'fm27_den'" >DEN (CT Inlet)</th>
<th style="border:1px solid black;" v-if="val_1[9] == 'fm1_temp'" >TEMP (Trans Oil)</th>
<th style="border:1px solid black;" v-if="val_1[9] == 'fm2_temp'" >TEMP( Alkali Trans)</th>
<th style="border:1px solid black;" v-if="val_1[9] == 'fm3_temp'" >TEMP (Trans Evaporator to NI)</th>
<th style="border:1px solid black;" v-if="val_1[9] == 'fm4_temp'" >TEMP (Water N1)</th>
<th style="border:1px solid black;" v-if="val_1[9] == 'fm5_temp'" >TEMP (N2 to D402)</th>
<th style="border:1px solid black;" v-if="val_1[9] == 'fm6_temp'" >TEMP (N3 to Slag pool)</th>
<th style="border:1px solid black;" v-if="val_1[9] == 'fm7_temp'" >TEMP (D602to Metdanol Storage Tank)</th>
<th style="border:1px solid black;" v-if="val_1[9] == 'fm8_temp'" >TEMP (D402-D501)</th>
<th style="border:1px solid black;" v-if="val_1[9] == 'fm9_temp'" >TEMP (D501-T501)</th>
<th style="border:1px solid black;" v-if="val_1[9] == 'fm10_temp'" >TEMP (T501-T502)</th>
<th style="border:1px solid black;" v-if="val_1[9] == 'fm11_temp'" >TEMP (Tar Transfer)</th>
<th style="border:1px solid black;" v-if="val_1[9] == 'fm12_temp'" >TEMP (Recycle to D405 Line)</th>
<th style="border:1px solid black;" v-if="val_1[9] == 'fm13_temp'" >TEMP (Biodiesel to Storage)</th>
<th style="border:1px solid black;" v-if="val_1[9] == 'fm14_temp'" >TEMP (D403 into T601)</th>
<th style="border:1px solid black;" v-if="val_1[9] == 'fm9_temp'" >TEMP (T601 to D602) </th>
<th style="border:1px solid black;" v-if="val_1[9] == 'fm16_temp'" >TEMP (T601 to Reflux)</th>
<th style="border:1px solid black;" v-if="val_1[9] == 'fm17_temp'" >TEMP (T601 Drain)</th>
<th style="border:1px solid black;" v-if="val_1[9] == 'fm18_temp'" >TEMP (Matdanol into GST 1 and 2)</th>
<th style="border:1px solid black;" v-if="val_1[9] == 'fm19_temp'" >TEMP (Metdanol into PPRA and B)</th>
<th style="border:1px solid black;" v-if="val_1[9] == 'fm20_temp'" >TEMP (Matdanol into GLV)</th>
<th style="border:1px solid black;" v-if="val_1[9] == 'fm21_temp'" >TEMP (Metdanol into Trans)</th>
<th style="border:1px solid black;" v-if="val_1[9] == 'fm22_temp'" >TEMP (Biodiesel Storage to Truck)</th>
<th style="border:1px solid black;" v-if="val_1[9] == 'fm23_temp'" >TEMP (Raw Material Offloading)</th>
<th style="border:1px solid black;" v-if="val_1[9] == 'fm24_temp'" >TEMP (Raw Metarial to Settling Tank)</th>
<th style="border:1px solid black;" v-if="val_1[9] == 'fm25_temp'" >TEMP (Settling Tank to D101)</th>
<th style="border:1px solid black;" v-if="val_1[9] == 'fm26_temp'" >TEMP (CT Outlet)</th>
<th style="border:1px solid black;" v-if="val_1[9] == 'fm27_temp'" >TEMP (CT Inlet)</th>
                    <th style="border:1px solid black;" v-if="val_1[9] == 'rdl_32'" >GST-2-L</th>
                    <th style="border:1px solid black;" v-if="val_1[9] == 'vr_32'" >GST-2-V</th>
                    <th style="border:1px solid black;" v-if="val_1[9] == 'rtd_42'" >GST-2-T</th>
                    <th style="border:1px solid black;" v-if="val_1[9] == 'fm_45'" >(Metdanol Transfer)</th>
                    <th style="border:1px solid black;" v-if="val_1[9] == 'ft_45'" >FT (Metdanol Transfer)</th>
                    <th style="border:1px solid black;" v-if="val_1[9] == 'fm45_den'" >DEN (Metdanol Transfer)</th>
                    <th style="border:1px solid black;" v-if="val_1[9] == 'fm45_temp'" >TEMP (Metdanol Transfer)</th>
                    <th style="border:1px solid black;" v-if="val_1[9] == 'fm_62'" >(RVP)</th>
                    <th style="border:1px solid black;" v-if="val_1[9] == 'ft_62'" >FT (RVP)</th>
                    <th style="border:1px solid black;" v-if="val_1[9] == 'fm_66'" >(Milky)</th>
                    <th style="border:1px solid black;" v-if="val_1[9] == 'ft_66'" >FT (Milky)</th>

                     <th style="border:1px solid black;" v-if="val_1[10] == 'st_fm2_flow'">Main Steam</th>
                    <th style="border:1px solid black;" v-if="val_1[10] == 'stfm2_flow_tot'">Total Flow</th>
                    <th style="border:1px solid black;" v-if="val_1[10] == 'stfm2_temp'">Temp</th>
                    <th style="border:1px solid black;" v-if="val_1[10] == 'stfm2_pressure'">Pressure</th>

                    <th style="border:1px solid black;" v-if="val_1[10] == 'st_fm1_flow'">Steam to E401</th>
                    <th style="border:1px solid black;" v-if="val_1[10] == 'stfm1_flow_tot'">Total Flow</th>
                    <th style="border:1px solid black;" v-if="val_1[10] == 'stfm1_temp'">Temp</th>
                    <th style="border:1px solid black;" v-if="val_1[10] == 'stfm1_pressure'">Pressure</th>

                    <th style="border:1px solid black;" v-if="val_1[10] == 'rdl_1'" >D101A-L</th>
                    <th style="border:1px solid black;" v-if="val_1[10] == 'vr_1'" >D101A-V</th>
                    <th style="border:1px solid black;" v-if="val_1[10] == 'rdl_2'" >D101B-L</th>
                    <th style="border:1px solid black;" v-if="val_1[10] == 'vr_2'" >D101B-V</th>
                    <th style="border:1px solid black;" v-if="val_1[10] == 'rdl_3'" >D405A-L</th>
                    <th style="border:1px solid black;" v-if="val_1[10] == 'vr_3'" >D405A-V</th>
                    <th style="border:1px solid black;" v-if="val_1[10] == 'rdl_4'" >D405B-L</th>
                    <th style="border:1px solid black;" v-if="val_1[10] == 'vr_4'" >D405B-V</th>
                    <th style="border:1px solid black;" v-if="val_1[10] == 'rdl_5'" >D405C-L</th>
                    <th style="border:1px solid black;" v-if="val_1[10] == 'vr_5'" >D405C-V</th>
                    <th style="border:1px solid black;" v-if="val_1[10] == 'rdl_6'" >C401A-L</th>
                    <th style="border:1px solid black;" v-if="val_1[10] == 'vr_6'" >C401A-V</th>
                    <th style="border:1px solid black;" v-if="val_1[10] == 'rdl_7'" >C401B-L</th>
                    <th style="border:1px solid black;" v-if="val_1[10] == 'vr_7'" >C401B-V</th>
                    <th style="border:1px solid black;" v-if="val_1[10] == 'rdl_8'" >D402A-L</th>
                    <th style="border:1px solid black;" v-if="val_1[10] == 'vr_8'" >D402A-V</th>
                    <th style="border:1px solid black;" v-if="val_1[10] == 'rdl_9'" >D402B-L</th>
                    <th style="border:1px solid black;" v-if="val_1[10] == 'vr_9'" >D402B-V</th>
                    <th style="border:1px solid black;" v-if="val_1[10] == 'rdl_10'" >D402C-L</th>
                    <th style="border:1px solid black;" v-if="val_1[10] == 'vr_10'" >D402C-V</th>
                    <th style="border:1px solid black;" v-if="val_1[10] == 'rdl_11'" >D402D-L</th>
                    <th style="border:1px solid black;" v-if="val_1[10] == 'vr_11'" >D402D-V</th>
                    <th style="border:1px solid black;" v-if="val_1[10] == 'rdl_12'" >GLV-L</th>
                    <th style="border:1px solid black;" v-if="val_1[10] == 'vr_12'" >GLV-V</th>
                    <th style="border:1px solid black;" v-if="val_1[10] == 'rdl_13'" >SettlingA-L</th>
                    <th style="border:1px solid black;" v-if="val_1[10] == 'vr_13'" >SettlingA-V</th>
                    <th style="border:1px solid black;" v-if="val_1[10] == 'rdl_14'" >SettlingB-L</th>
                    <th style="border:1px solid black;" v-if="val_1[10] == 'vr_14'" >SettlingB-V</th>
                    <th style="border:1px solid black;" v-if="val_1[10] == 'rdl_15'" >SettlingC-L</th>
                    <th style="border:1px solid black;" v-if="val_1[10] == 'vr_15'" >SettlingC-V</th>
                    <th style="border:1px solid black;" v-if="val_1[10] == 'rdl_16'" >Metdanol T1-L</th>
                    <th style="border:1px solid black;" v-if="val_1[10] == 'vr_16'" >Metdanol T1-V</th>
                    <th style="border:1px solid black;" v-if="val_1[10] == 'rdl_17'" >Tar-L</th>
                    <th style="border:1px solid black;" v-if="val_1[10] == 'vr_17'" >Tar-V</th>
                    <th style="border:1px solid black;" v-if="val_1[10] == 'rdl_18'" >GST T1-L</th>
                    <th style="border:1px solid black;" v-if="val_1[10] == 'vr_18'" >GST T1-V</th>
                    <th style="border:1px solid black;" v-if="val_1[10] == 'rdl_19'" >Metdanol T2-L</th>
                    <th style="border:1px solid black;" v-if="val_1[10] == 'vr_19'" >Metdanol T2-V</th>
                    <th style="border:1px solid black;" v-if="val_1[10] == 'rdl_20'" >SP1-L</th>
                    <th style="border:1px solid black;" v-if="val_1[10] == 'vr_20'" >SP1-V</th>
                    <th style="border:1px solid black;" v-if="val_1[10] == 'rdl_21'" >SP2-L</th>
                    <th style="border:1px solid black;" v-if="val_1[10] == 'vr_21'" >SP2-V</th>
                    <th style="border:1px solid black;" v-if="val_1[10] == 'rdl_22'" >SP3-L</th>
                    <th style="border:1px solid black;" v-if="val_1[10] == 'vr_22'" >SP3-V</th>
                    <th style="border:1px solid black;" v-if="val_1[10] == 'rdl_23'" >PPRA-L</th>
                    <th style="border:1px solid black;" v-if="val_1[10] == 'vr_23'" >PPRA-V</th>
                    <th style="border:1px solid black;" v-if="val_1[10] == 'rdl_24'" >PPRB-L</th>
                    <th style="border:1px solid black;" v-if="val_1[10] == 'vr_24'" >PPRB-V</th>
                    <th style="border:1px solid black;" v-if="val_1[10] == 'rdl_25'" >H2SO4-L</th>
                    <th style="border:1px solid black;" v-if="val_1[10] == 'rdl25_volume'" >H2SO4-V</th>
                    <th style="border:1px solid black;" v-if="val_1[10] == 'rdl25_mass'" >Mass In Kg</th>
                    <th style="border:1px solid black;" v-if="val_1[10] == 'rtd_1'" >E101-T</th>
                    <th style="border:1px solid black;" v-if="val_1[10] == 'rtd_2'" >D101A-T</th>
                    <th style="border:1px solid black;" v-if="val_1[10] == 'rtd_3'" >D101B-T</th>
                    <th style="border:1px solid black;" v-if="val_1[10] == 'rtd_4'" >E201-T</th>
                    <th style="border:1px solid black;" v-if="val_1[10] == 'rtd_5'" >GLV-Top-T</th>
                    <th style="border:1px solid black;" v-if="val_1[10] == 'rtd_6'" >GLV-Mid-T</th>
                    <th style="border:1px solid black;" v-if="val_1[10] == 'rtd_7'" >GLV-BTM-T</th>
                    <th style="border:1px solid black;" v-if="val_1[10] == 'rtd_8'" >GLV-EVP-T</th>
                    <th style="border:1px solid black;" v-if="val_1[10] == 'rtd_9'" >SettlingA-T</th>
                    <th style="border:1px solid black;" v-if="val_1[10] == 'rtd_10'" >SettlingB-T</th>
                    <th style="border:1px solid black;" v-if="val_1[10] == 'rtd_11'" >SettlingC-T</th>
                    <th style="border:1px solid black;" v-if="val_1[10] == 'rtd_12'" >Hot Water-T</th>
                    <th style="border:1px solid black;" v-if="val_1[10] == 'rtd_13'" >D402A-T</th>
                    <th style="border:1px solid black;" v-if="val_1[10] == 'rtd_14'" >D402B-T</th>
                    <th style="border:1px solid black;" v-if="val_1[10] == 'rtd_15'" >D402C-T</th>
                    <th style="border:1px solid black;" v-if="val_1[10] == 'rtd_16'" >D402D-T</th>
                    <th style="border:1px solid black;" v-if="val_1[10] == 'rtd_17'" >Trans EVP-T</th>
                    <th style="border:1px solid black;" v-if="val_1[10] == 'rtd_18'" >Blue-T</th>
                    <th style="border:1px solid black;" v-if="val_1[10] == 'rtd_19'" >Green-T</th>
                    <th style="border:1px solid black;" v-if="val_1[10] == 'rtd_20'" >Old Green-T</th>
                    <th style="border:1px solid black;" v-if="val_1[10] == 'rtd_21'" >E601-T</th>
                    <th style="border:1px solid black;" v-if="val_1[10] == 'rtd_22'" >T601-Top-T</th>
                    <th style="border:1px solid black;" v-if="val_1[10] == 'rtd_23'" >T601-Mid-T</th>
                    <th style="border:1px solid black;" v-if="val_1[10] == 'rtd_24'" >T601-BTM-T</th>
                    <th style="border:1px solid black;" v-if="val_1[10] == 'rtd_25'" >E501</th>
                    <th style="border:1px solid black;" v-if="val_1[10] == 'rtd_26'" >D501</th>
                    <th style="border:1px solid black;" v-if="val_1[10] == 'rtd_27'" >T501-Top-T</th>
                    <th style="border:1px solid black;" v-if="val_1[10] == 'rtd_28'" >T501-Mid-T</th>
                    <th style="border:1px solid black;" v-if="val_1[10] == 'rtd_29'" >RTDT501-BTM-T</th>
                    <th style="border:1px solid black;" v-if="val_1[10] == 'rtd_30'" >T502-Mid-T</th>
                    <th style="border:1px solid black;" v-if="val_1[10] == 'rtd_31'" >T502-BTM-T</th>
                    <th style="border:1px solid black;" v-if="val_1[10] == 'rtd_32'" >PPRA-T</th>
                    <th style="border:1px solid black;" v-if="val_1[10] == 'rtd_33'" >PPRB-T</th>
                    <th style="border:1px solid black;" v-if="val_1[10] == 'rtd_34'" >GST T1-T</th>
                    <th style="border:1px solid black;" v-if="val_1[10] == 'rtd_35'" >Trans React-T</th>
                    <th style="border:1px solid black;" v-if="val_1[10] == 'rtd_36'" >Bio Storag-T</th>
                    <th style="border:1px solid black;" v-if="val_1[10] == 'rtd_37'" >Bio Transf-T</th>
                    <th style="border:1px solid black;" v-if="val_1[10] == 'dpl_1'" >D501-L</th>
                    <th style="border:1px solid black;" v-if="val_1[10] == 'vd_1'" >D501-V</th>
                    <th style="border:1px solid black;" v-if="val_1[10] == 'dpl_2'" >E401-L</th>
                    <th style="border:1px solid black;" v-if="val_1[10] == 'vd_2'" >E401-V</th>
                    <th style="border:1px solid black;" v-if="val_1[10] == 'dpl_3'" >T601-L</th>
                    <th style="border:1px solid black;" v-if="val_1[10] == 'vd_3'" >T601-V</th>
                    <th style="border:1px solid black;" v-if="val_1[10] == 'dpl_4'" >D503-L</th>
                    <th style="border:1px solid black;" v-if="val_1[10] == 'vd_4'" >D503-V</th>
                    <th style="border:1px solid black;" v-if="val_1[10] == 'dpl_5'" >D504-L</th>
                    <th style="border:1px solid black;" v-if="val_1[10] == 'vd_5'" >D504-V</th>
                    <th style="border:1px solid black;" v-if="val_1[10] == 'dpl_6'" >T501-L</th>
                    <th style="border:1px solid black;" v-if="val_1[10] == 'vd_6'" >T501-V</th>
                    <th style="border:1px solid black;" v-if="val_1[10] == 'dpl_7'" >T502-L</th>
                    <th style="border:1px solid black;" v-if="val_1[10] == 'vd_7'" >T502-V</th>
                    <th style="border:1px solid black;" v-if="val_1[10] == 'dpl_8'" >Bio Storage Tank-L</th>
                    <th style="border:1px solid black;" v-if="val_1[10] == 'vd_8'" >Bio Storage Tank-V</th>
                    <th style="border:1px solid black;" v-if="val_1[10] == 'fm_1'" >TRANS OIL</th>
                    <th style="border:1px solid black;" v-if="val_1[10] == 'fm_2'" >ALKALI TRANS</th>
                    <th style="border:1px solid black;" v-if="val_1[10] == 'fm_3'" >TRANS EVAPORATOR TO NI</th>
                    <th style="border:1px solid black;" v-if="val_1[10] == 'fm_4'" >WATER N1</th>
                    <th style="border:1px solid black;" v-if="val_1[10] == 'fm_5'" >N2 TO D402</th>
                    <th style="border:1px solid black;" v-if="val_1[10] == 'fm_6'" >N3 TO SLAGPOOL</th>
                    <th style="border:1px solid black;" v-if="val_1[10] == 'fm_7'" >D602 TO METdANOL STORAGE TANK</th>
                    <th style="border:1px solid black;" v-if="val_1[10] == 'fm_8'" >D402-D501</th>
                    <th style="border:1px solid black;" v-if="val_1[10] == 'fm_9'" >D501-T501</th>
                    <th style="border:1px solid black;" v-if="val_1[10] == 'fm_10'" >T501-T502</th>
                    <th style="border:1px solid black;" v-if="val_1[10] == 'fm_11'" >TAR TRANSFER</th>
                    <th style="border:1px solid black;" v-if="val_1[10] == 'fm_12'" >RECYCLE TO D405 LINE</th>
                    <th style="border:1px solid black;" v-if="val_1[10] == 'fm_13'" >BIODIESEL TO STORAGE</th>
                    <th style="border:1px solid black;" v-if="val_1[10] == 'fm_14'" >D403 INTO T601</th>
                    <th style="border:1px solid black;" v-if="val_1[10] == 'fm_15'" >T601-D602</th>
                    <th style="border:1px solid black;" v-if="val_1[10] == 'fm_16'" >T601 TO REFLUX</th>
                    <th style="border:1px solid black;" v-if="val_1[10] == 'fm_17'" >T601 DRAIN</th>
                    <th style="border:1px solid black;" v-if="val_1[10] == 'fm_18'" >METdANOL INTO GST 1 AND 2</th>
                    <th style="border:1px solid black;" v-if="val_1[10] == 'fm_19'" >METdANOL INTO PPRA AND B</th>
                    <th style="border:1px solid black;" v-if="val_1[10] == 'fm_20'" >METdANOL INTO GLV</th>
                    <th style="border:1px solid black;" v-if="val_1[10] == 'fm_21'" >METdANOL INTO TRANS</th>
                    <th style="border:1px solid black;" v-if="val_1[10] == 'fm_22'" >BIODIESEL STORAGE TO TRUCK</th>
                    <th style="border:1px solid black;" v-if="val_1[10] == 'fm_23'" >RAW MATERIAL OFFLOADING</th>
                    <th style="border:1px solid black;" v-if="val_1[10] == 'fm_24'" >RAW MATERIAL TO SETTLING TANK</th>
                    <th style="border:1px solid black;" v-if="val_1[10] == 'fm_25'" >SETTLING TANK TO D101</th>
                    <th style="border:1px solid black;" v-if="val_1[10] == 'fm_26'" >CT OUTLET</th>
                    <th style="border:1px solid black;" v-if="val_1[10] == 'fm_27'" >CT INLET</th>
                    <th style="border:1px solid black;" v-if="val_1[10] == 'ft_1'" >FT TRANS OIL</th>
                    <th style="border:1px solid black;" v-if="val_1[10] == 'ft_2'" >FT ALKALI TRANS</th>
                    <th style="border:1px solid black;" v-if="val_1[10] == 'ft_3'" >FT TRANS EVAPORATOR TO NI</th>
                    <th style="border:1px solid black;" v-if="val_1[10] == 'ft_4'" >FT WATER N1</th>
                    <th style="border:1px solid black;" v-if="val_1[10] == 'ft_5'" >FT N2 TO D402</th>
                    <th style="border:1px solid black;" v-if="val_1[10] == 'ft_6'" >FT N3 TO  SLAGPOOL</th>
                    <th style="border:1px solid black;" v-if="val_1[10] == 'ft_7'" >FT D602 TO METdANOL STORAGE TANK</th>
                    <th style="border:1px solid black;" v-if="val_1[10] == 'ft_8'" >FT D402-D501</th>
                    <th style="border:1px solid black;" v-if="val_1[10] == 'ft_9'" >FT D501-T501</th>
                    <th style="border:1px solid black;" v-if="val_1[10] == 'ft_10'" >FT T501-T502</th>
                    <th style="border:1px solid black;" v-if="val_1[10] == 'ft_11'" >FT TAR TRANSFER</th>
                    <th style="border:1px solid black;" v-if="val_1[10] == 'ft_12'" >FT RECYCLE TO D405</th>
                    <th style="border:1px solid black;" v-if="val_1[10] == 'ft_13'" >FT BIODIESEL TO STORAGE</th>
                    <th style="border:1px solid black;" v-if="val_1[10] == 'ft_14'" >FT D403 INTO T601</th>
                    <th style="border:1px solid black;" v-if="val_1[10] == 'ft_15'" >FT T601-D602</th>
                    <th style="border:1px solid black;" v-if="val_1[10] == 'ft_16'" >FT T601 TO REFLUX</th>
                    <th style="border:1px solid black;" v-if="val_1[10] == 'ft_17'" >FT T601 DRAIN</th>
                    <th style="border:1px solid black;" v-if="val_1[10] == 'ft_18'" >FT METdANOL INTO GST 1 AND 2</th>
                    <th style="border:1px solid black;" v-if="val_1[10] == 'ft_19'" >FT 19</th>
                    <th style="border:1px solid black;" v-if="val_1[10] == 'ft_20'" >FT METdANOL INTO GLV</th>
                    <th style="border:1px solid black;" v-if="val_1[10] == 'ft_21'" >FT METdANOL  INTO TRANS</th>
                    <th style="border:1px solid black;" v-if="val_1[10] == 'ft_22'" >FT BIODIESEL STORAGE TO TRUCK</th>
                    <th style="border:1px solid black;" v-if="val_1[10] == 'ft_23'" >FT RAW MATERIAL OFFLOADING</th>
                    <th style="border:1px solid black;" v-if="val_1[10] == 'ft_24'" >FT RAW MATERIAL TO SETTLING TANK</th>
                    <th style="border:1px solid black;" v-if="val_1[10] == 'ft_25'" >FT SETTLING TANK TO D101</th>
                    <th style="border:1px solid black;" v-if="val_1[10] == 'ft_26'" >FT CT OUTLET</th>
                    <th style="border:1px solid black;" v-if="val_1[10] == 'ft_27'" >FT CT INLET</th>
                    <th style="border:1px solid black;" v-if="val_1[10] == 'pt_1'" >PT 1</th>
                    <th style="border:1px solid black;" v-if="val_1[10] == 'pt_2'" >PT 2</th>
                    <th style="border:1px solid black;" v-if="val_1[10] == 'pt_3'" >PT 3</th>
                    <th style="border:1px solid black;" v-if="val_1[10] == 'pt_4'" >PT 4</th>
                    <th style="border:1px solid black;" v-if="val_1[10] == 'pt_5'" >Dist Header</th>
                    <th style="border:1px solid black;" v-if="val_1[10] == 'vg_1'" >Vac Line</th>
                    <th style="border:1px solid black;" v-if="val_1[10] == 'vg_2'" >VG 2</th>
                    <th style="border:1px solid black;" v-if="val_1[10] == 'vg_3'" >VG 3</th>
                    <th style="border:1px solid black;" v-if="val_1[10] == 'fm1_den'" >DEN (Trans Oil)</th>
<th style="border:1px solid black;" v-if="val_1[10] == 'fm2_den'" >DEN( Alkali Trans)</th>
<th style="border:1px solid black;" v-if="val_1[10] == 'fm3_den'" >DEN (Trans Evaporator to NI)</th>
<th style="border:1px solid black;" v-if="val_1[10] == 'fm4_den'" >DEN (Water N1)</th>
<th style="border:1px solid black;" v-if="val_1[10] == 'fm5_den'" >DEN (N2 to D402)</th>
<th style="border:1px solid black;" v-if="val_1[10] == 'fm6_den'" >DEN (N3 to Slag pool)</th>
<th style="border:1px solid black;" v-if="val_1[10] == 'fm7_den'" >DEN (D602to Metdanol Storage Tank)</th>
<th style="border:1px solid black;" v-if="val_1[10] == 'fm8_den'" >DEN (D402-D501)</th>
<th style="border:1px solid black;" v-if="val_1[10] == 'fm9_den'" >DEN (D501-T501)</th>
<th style="border:1px solid black;" v-if="val_1[10] == 'fm10_den'" >DEN (T501-T502)</th>
<th style="border:1px solid black;" v-if="val_1[10] == 'fm11_den'" >DEN (Tar Transfer)</th>
<th style="border:1px solid black;" v-if="val_1[10] == 'fm12_den'" >DEN (Recycle to D405 Line)</th>
<th style="border:1px solid black;" v-if="val_1[10] == 'fm13_den'" >DEN (Biodiesel to Storage)</th>
<th style="border:1px solid black;" v-if="val_1[10] == 'fm14_den'" >DEN (D403 into T601)</th>
<th style="border:1px solid black;" v-if="val_1[10] == 'fm15_den'" >DEN (T601 to D602) </th>
<th style="border:1px solid black;" v-if="val_1[10] == 'fm16_den'" >DEN (T601 to Reflux)</th>
<th style="border:1px solid black;" v-if="val_1[10] == 'fm17_den'" >DEN (T601 Drain)</th>
<th style="border:1px solid black;" v-if="val_1[10] == 'fm18_den'" >DEN (Matdanol into GST 1 and 2)</th>
<th style="border:1px solid black;" v-if="val_1[10] == 'fm19_den'" >DEN (Metdanol into PPRA and B)</th>
<th style="border:1px solid black;" v-if="val_1[10] == 'fm20_den'" >DEN (Matdanol into GLV)</th>
<th style="border:1px solid black;" v-if="val_1[10] == 'fm21_den'" >DEN (Metdanol into Trans)</th>
<th style="border:1px solid black;" v-if="val_1[10] == 'fm22_den'" >DEN (Biodiesel Storage to Truck)</th>
<th style="border:1px solid black;" v-if="val_1[10] == 'fm23_den'" >DEN (Raw Material Offloading)</th>
<th style="border:1px solid black;" v-if="val_1[10] == 'fm24_den'" >DEN (Raw Metarial to Settling Tank)</th>
<th style="border:1px solid black;" v-if="val_1[10] == 'fm25_den'" >DEN (Settling Tank to D101)</th>
<th style="border:1px solid black;" v-if="val_1[10] == 'fm26_den'" >DEN (CT Outlet)</th>
<th style="border:1px solid black;" v-if="val_1[10] == 'fm27_den'" >DEN (CT Inlet)</th>
<th style="border:1px solid black;" v-if="val_1[10] == 'fm1_temp'" >TEMP (Trans Oil)</th>
<th style="border:1px solid black;" v-if="val_1[10] == 'fm2_temp'" >TEMP( Alkali Trans)</th>
<th style="border:1px solid black;" v-if="val_1[10] == 'fm3_temp'" >TEMP (Trans Evaporator to NI)</th>
<th style="border:1px solid black;" v-if="val_1[10] == 'fm4_temp'" >TEMP (Water N1)</th>
<th style="border:1px solid black;" v-if="val_1[10] == 'fm5_temp'" >TEMP (N2 to D402)</th>
<th style="border:1px solid black;" v-if="val_1[10] == 'fm6_temp'" >TEMP (N3 to Slag pool)</th>
<th style="border:1px solid black;" v-if="val_1[10] == 'fm7_temp'" >TEMP (D602to Metdanol Storage Tank)</th>
<th style="border:1px solid black;" v-if="val_1[10] == 'fm8_temp'" >TEMP (D402-D501)</th>
<th style="border:1px solid black;" v-if="val_1[10] == 'fm9_temp'" >TEMP (D501-T501)</th>
<th style="border:1px solid black;" v-if="val_1[10] == 'fm10_temp'" >TEMP (T501-T502)</th>
<th style="border:1px solid black;" v-if="val_1[10] == 'fm11_temp'" >TEMP (Tar Transfer)</th>
<th style="border:1px solid black;" v-if="val_1[10] == 'fm12_temp'" >TEMP (Recycle to D405 Line)</th>
<th style="border:1px solid black;" v-if="val_1[10] == 'fm13_temp'" >TEMP (Biodiesel to Storage)</th>
<th style="border:1px solid black;" v-if="val_1[10] == 'fm14_temp'" >TEMP (D403 into T601)</th>
<th style="border:1px solid black;" v-if="val_1[10] == 'fm10_temp'" >TEMP (T601 to D602) </th>
<th style="border:1px solid black;" v-if="val_1[10] == 'fm16_temp'" >TEMP (T601 to Reflux)</th>
<th style="border:1px solid black;" v-if="val_1[10] == 'fm17_temp'" >TEMP (T601 Drain)</th>
<th style="border:1px solid black;" v-if="val_1[10] == 'fm18_temp'" >TEMP (Matdanol into GST 1 and 2)</th>
<th style="border:1px solid black;" v-if="val_1[10] == 'fm19_temp'" >TEMP (Metdanol into PPRA and B)</th>
<th style="border:1px solid black;" v-if="val_1[10] == 'fm20_temp'" >TEMP (Matdanol into GLV)</th>
<th style="border:1px solid black;" v-if="val_1[10] == 'fm21_temp'" >TEMP (Metdanol into Trans)</th>
<th style="border:1px solid black;" v-if="val_1[10] == 'fm22_temp'" >TEMP (Biodiesel Storage to Truck)</th>
<th style="border:1px solid black;" v-if="val_1[10] == 'fm23_temp'" >TEMP (Raw Material Offloading)</th>
<th style="border:1px solid black;" v-if="val_1[10] == 'fm24_temp'" >TEMP (Raw Metarial to Settling Tank)</th>
<th style="border:1px solid black;" v-if="val_1[10] == 'fm25_temp'" >TEMP (Settling Tank to D101)</th>
<th style="border:1px solid black;" v-if="val_1[10] == 'fm26_temp'" >TEMP (CT Outlet)</th>
<th style="border:1px solid black;" v-if="val_1[10] == 'fm27_temp'" >TEMP (CT Inlet)</th>
                    <th style="border:1px solid black;" v-if="val_1[10] == 'rdl_32'" >GST-2-L</th>
                    <th style="border:1px solid black;" v-if="val_1[10] == 'vr_32'" >GST-2-V</th>
                    <th style="border:1px solid black;" v-if="val_1[10] == 'rtd_42'" >GST-2-T</th>
                    <th style="border:1px solid black;" v-if="val_1[10] == 'fm_45'" >(Metdanol Transfer)</th>
                    <th style="border:1px solid black;" v-if="val_1[10] == 'ft_45'" >FT (Metdanol Transfer)</th>
                    <th style="border:1px solid black;" v-if="val_1[10] == 'fm45_den'" >DEN (Metdanol Transfer)</th>
                    <th style="border:1px solid black;" v-if="val_1[10] == 'fm45_temp'" >TEMP (Metdanol Transfer)</th>
                    <th style="border:1px solid black;" v-if="val_1[10] == 'fm_62'" >(RVP)</th>
                    <th style="border:1px solid black;" v-if="val_1[10] == 'ft_62'" >FT (RVP)</th>
                    <th style="border:1px solid black;" v-if="val_1[10] == 'fm_66'" >(Milky)</th>
                    <th style="border:1px solid black;" v-if="val_1[10] == 'ft_66'" >FT (Milky)</th>

                     <th style="border:1px solid black;" v-if="val_1[11] == 'st_fm2_flow'">Main Steam</th>
                    <th style="border:1px solid black;" v-if="val_1[11] == 'stfm2_flow_tot'">Total Flow</th>
                    <th style="border:1px solid black;" v-if="val_1[11] == 'stfm2_temp'">Temp</th>
                    <th style="border:1px solid black;" v-if="val_1[11] == 'stfm2_pressure'">Pressure</th>

                    <th style="border:1px solid black;" v-if="val_1[11] == 'st_fm1_flow'">Steam to E401</th>
                    <th style="border:1px solid black;" v-if="val_1[11] == 'stfm1_flow_tot'">Total Flow</th>
                    <th style="border:1px solid black;" v-if="val_1[11] == 'stfm1_temp'">Temp</th>
                    <th style="border:1px solid black;" v-if="val_1[11] == 'stfm1_pressure'">Pressure</th>

                    <th style="border:1px solid black;" v-if="val_1[11] == 'rdl_1'" >D101A-L</th>
                    <th style="border:1px solid black;" v-if="val_1[11] == 'vr_1'" >D101A-V</th>
                    <th style="border:1px solid black;" v-if="val_1[11] == 'rdl_2'" >D101B-L</th>
                    <th style="border:1px solid black;" v-if="val_1[11] == 'vr_2'" >D101B-V</th>
                    <th style="border:1px solid black;" v-if="val_1[11] == 'rdl_3'" >D405A-L</th>
                    <th style="border:1px solid black;" v-if="val_1[11] == 'vr_3'" >D405A-V</th>
                    <th style="border:1px solid black;" v-if="val_1[11] == 'rdl_4'" >D405B-L</th>
                    <th style="border:1px solid black;" v-if="val_1[11] == 'vr_4'" >D405B-V</th>
                    <th style="border:1px solid black;" v-if="val_1[11] == 'rdl_5'" >D405C-L</th>
                    <th style="border:1px solid black;" v-if="val_1[11] == 'vr_5'" >D405C-V</th>
                    <th style="border:1px solid black;" v-if="val_1[11] == 'rdl_6'" >C401A-L</th>
                    <th style="border:1px solid black;" v-if="val_1[11] == 'vr_6'" >C401A-V</th>
                    <th style="border:1px solid black;" v-if="val_1[11] == 'rdl_7'" >C401B-L</th>
                    <th style="border:1px solid black;" v-if="val_1[11] == 'vr_7'" >C401B-V</th>
                    <th style="border:1px solid black;" v-if="val_1[11] == 'rdl_8'" >D402A-L</th>
                    <th style="border:1px solid black;" v-if="val_1[11] == 'vr_8'" >D402A-V</th>
                    <th style="border:1px solid black;" v-if="val_1[11] == 'rdl_9'" >D402B-L</th>
                    <th style="border:1px solid black;" v-if="val_1[11] == 'vr_9'" >D402B-V</th>
                    <th style="border:1px solid black;" v-if="val_1[11] == 'rdl_10'" >D402C-L</th>
                    <th style="border:1px solid black;" v-if="val_1[11] == 'vr_10'" >D402C-V</th>
                    <th style="border:1px solid black;" v-if="val_1[11] == 'rdl_11'" >D402D-L</th>
                    <th style="border:1px solid black;" v-if="val_1[11] == 'vr_11'" >D402D-V</th>
                    <th style="border:1px solid black;" v-if="val_1[11] == 'rdl_12'" >GLV-L</th>
                    <th style="border:1px solid black;" v-if="val_1[11] == 'vr_12'" >GLV-V</th>
                    <th style="border:1px solid black;" v-if="val_1[11] == 'rdl_13'" >SettlingA-L</th>
                    <th style="border:1px solid black;" v-if="val_1[11] == 'vr_13'" >SettlingA-V</th>
                    <th style="border:1px solid black;" v-if="val_1[11] == 'rdl_14'" >SettlingB-L</th>
                    <th style="border:1px solid black;" v-if="val_1[11] == 'vr_14'" >SettlingB-V</th>
                    <th style="border:1px solid black;" v-if="val_1[11] == 'rdl_15'" >SettlingC-L</th>
                    <th style="border:1px solid black;" v-if="val_1[11] == 'vr_15'" >SettlingC-V</th>
                    <th style="border:1px solid black;" v-if="val_1[11] == 'rdl_16'" >Metdanol T1-L</th>
                    <th style="border:1px solid black;" v-if="val_1[11] == 'vr_16'" >Metdanol T1-V</th>
                    <th style="border:1px solid black;" v-if="val_1[11] == 'rdl_17'" >Tar-L</th>
                    <th style="border:1px solid black;" v-if="val_1[11] == 'vr_17'" >Tar-V</th>
                    <th style="border:1px solid black;" v-if="val_1[11] == 'rdl_18'" >GST T1-L</th>
                    <th style="border:1px solid black;" v-if="val_1[11] == 'vr_18'" >GST T1-V</th>
                    <th style="border:1px solid black;" v-if="val_1[11] == 'rdl_19'" >Metdanol T2-L</th>
                    <th style="border:1px solid black;" v-if="val_1[11] == 'vr_19'" >Metdanol T2-V</th>
                    <th style="border:1px solid black;" v-if="val_1[11] == 'rdl_20'" >SP1-L</th>
                    <th style="border:1px solid black;" v-if="val_1[11] == 'vr_20'" >SP1-V</th>
                    <th style="border:1px solid black;" v-if="val_1[11] == 'rdl_21'" >SP2-L</th>
                    <th style="border:1px solid black;" v-if="val_1[11] == 'vr_21'" >SP2-V</th>
                    <th style="border:1px solid black;" v-if="val_1[11] == 'rdl_22'" >SP3-L</th>
                    <th style="border:1px solid black;" v-if="val_1[11] == 'vr_22'" >SP3-V</th>
                    <th style="border:1px solid black;" v-if="val_1[11] == 'rdl_23'" >PPRA-L</th>
                    <th style="border:1px solid black;" v-if="val_1[11] == 'vr_23'" >PPRA-V</th>
                    <th style="border:1px solid black;" v-if="val_1[11] == 'rdl_24'" >PPRB-L</th>
                    <th style="border:1px solid black;" v-if="val_1[11] == 'vr_24'" >PPRB-V</th>
                    <th style="border:1px solid black;" v-if="val_1[11] == 'rdl_25'" >H2SO4-L</th>
                    <th style="border:1px solid black;" v-if="val_1[11] == 'rdl25_volume'" >H2SO4-V</th>
                    <th style="border:1px solid black;" v-if="val_1[11] == 'rdl25_mass'" >Mass In Kg</th>
                    <th style="border:1px solid black;" v-if="val_1[11] == 'rtd_1'" >E101-T</th>
                    <th style="border:1px solid black;" v-if="val_1[11] == 'rtd_2'" >D101A-T</th>
                    <th style="border:1px solid black;" v-if="val_1[11] == 'rtd_3'" >D101B-T</th>
                    <th style="border:1px solid black;" v-if="val_1[11] == 'rtd_4'" >E201-T</th>
                    <th style="border:1px solid black;" v-if="val_1[11] == 'rtd_5'" >GLV-Top-T</th>
                    <th style="border:1px solid black;" v-if="val_1[11] == 'rtd_6'" >GLV-Mid-T</th>
                    <th style="border:1px solid black;" v-if="val_1[11] == 'rtd_7'" >GLV-BTM-T</th>
                    <th style="border:1px solid black;" v-if="val_1[11] == 'rtd_8'" >GLV-EVP-T</th>
                    <th style="border:1px solid black;" v-if="val_1[11] == 'rtd_9'" >SettlingA-T</th>
                    <th style="border:1px solid black;" v-if="val_1[11] == 'rtd_10'" >SettlingB-T</th>
                    <th style="border:1px solid black;" v-if="val_1[11] == 'rtd_11'" >SettlingC-T</th>
                    <th style="border:1px solid black;" v-if="val_1[11] == 'rtd_12'" >Hot Water-T</th>
                    <th style="border:1px solid black;" v-if="val_1[11] == 'rtd_13'" >D402A-T</th>
                    <th style="border:1px solid black;" v-if="val_1[11] == 'rtd_14'" >D402B-T</th>
                    <th style="border:1px solid black;" v-if="val_1[11] == 'rtd_15'" >D402C-T</th>
                    <th style="border:1px solid black;" v-if="val_1[11] == 'rtd_16'" >D402D-T</th>
                    <th style="border:1px solid black;" v-if="val_1[11] == 'rtd_17'" >Trans EVP-T</th>
                    <th style="border:1px solid black;" v-if="val_1[11] == 'rtd_18'" >Blue-T</th>
                    <th style="border:1px solid black;" v-if="val_1[11] == 'rtd_19'" >Green-T</th>
                    <th style="border:1px solid black;" v-if="val_1[11] == 'rtd_20'" >Old Green-T</th>
                    <th style="border:1px solid black;" v-if="val_1[11] == 'rtd_21'" >E601-T</th>
                    <th style="border:1px solid black;" v-if="val_1[11] == 'rtd_22'" >T601-Top-T</th>
                    <th style="border:1px solid black;" v-if="val_1[11] == 'rtd_23'" >T601-Mid-T</th>
                    <th style="border:1px solid black;" v-if="val_1[11] == 'rtd_24'" >T601-BTM-T</th>
                    <th style="border:1px solid black;" v-if="val_1[11] == 'rtd_25'" >E501</th>
                    <th style="border:1px solid black;" v-if="val_1[11] == 'rtd_26'" >D501</th>
                    <th style="border:1px solid black;" v-if="val_1[11] == 'rtd_27'" >T501-Top-T</th>
                    <th style="border:1px solid black;" v-if="val_1[11] == 'rtd_28'" >T501-Mid-T</th>
                    <th style="border:1px solid black;" v-if="val_1[11] == 'rtd_29'" >RTDT501-BTM-T</th>
                    <th style="border:1px solid black;" v-if="val_1[11] == 'rtd_30'" >T502-Mid-T</th>
                    <th style="border:1px solid black;" v-if="val_1[11] == 'rtd_31'" >T502-BTM-T</th>
                    <th style="border:1px solid black;" v-if="val_1[11] == 'rtd_32'" >PPRA-T</th>
                    <th style="border:1px solid black;" v-if="val_1[11] == 'rtd_33'" >PPRB-T</th>
                    <th style="border:1px solid black;" v-if="val_1[11] == 'rtd_34'" >GST T1-T</th>
                    <th style="border:1px solid black;" v-if="val_1[11] == 'rtd_35'" >Trans React-T</th>
                    <th style="border:1px solid black;" v-if="val_1[11] == 'rtd_36'" >Bio Storag-T</th>
                    <th style="border:1px solid black;" v-if="val_1[11] == 'rtd_37'" >Bio Transf-T</th>
                    <th style="border:1px solid black;" v-if="val_1[11] == 'dpl_1'" >D501-L</th>
                    <th style="border:1px solid black;" v-if="val_1[11] == 'vd_1'" >D501-V</th>
                    <th style="border:1px solid black;" v-if="val_1[11] == 'dpl_2'" >E401-L</th>
                    <th style="border:1px solid black;" v-if="val_1[11] == 'vd_2'" >E401-V</th>
                    <th style="border:1px solid black;" v-if="val_1[11] == 'dpl_3'" >T601-L</th>
                    <th style="border:1px solid black;" v-if="val_1[11] == 'vd_3'" >T601-V</th>
                    <th style="border:1px solid black;" v-if="val_1[11] == 'dpl_4'" >D503-L</th>
                    <th style="border:1px solid black;" v-if="val_1[11] == 'vd_4'" >D503-V</th>
                    <th style="border:1px solid black;" v-if="val_1[11] == 'dpl_5'" >D504-L</th>
                    <th style="border:1px solid black;" v-if="val_1[11] == 'vd_5'" >D504-V</th>
                    <th style="border:1px solid black;" v-if="val_1[11] == 'dpl_6'" >T501-L</th>
                    <th style="border:1px solid black;" v-if="val_1[11] == 'vd_6'" >T501-V</th>
                    <th style="border:1px solid black;" v-if="val_1[11] == 'dpl_7'" >T502-L</th>
                    <th style="border:1px solid black;" v-if="val_1[11] == 'vd_7'" >T502-V</th>
                    <th style="border:1px solid black;" v-if="val_1[11] == 'dpl_8'" >Bio Storage Tank-L</th>
                    <th style="border:1px solid black;" v-if="val_1[11] == 'vd_8'" >Bio Storage Tank-V</th>
                    <th style="border:1px solid black;" v-if="val_1[11] == 'fm_1'" >TRANS OIL</th>
                    <th style="border:1px solid black;" v-if="val_1[11] == 'fm_2'" >ALKALI TRANS</th>
                    <th style="border:1px solid black;" v-if="val_1[11] == 'fm_3'" >TRANS EVAPORATOR TO NI</th>
                    <th style="border:1px solid black;" v-if="val_1[11] == 'fm_4'" >WATER N1</th>
                    <th style="border:1px solid black;" v-if="val_1[11] == 'fm_5'" >N2 TO D402</th>
                    <th style="border:1px solid black;" v-if="val_1[11] == 'fm_6'" >N3 TO SLAGPOOL</th>
                    <th style="border:1px solid black;" v-if="val_1[11] == 'fm_7'" >D602 TO METdANOL STORAGE TANK</th>
                    <th style="border:1px solid black;" v-if="val_1[11] == 'fm_8'" >D402-D501</th>
                    <th style="border:1px solid black;" v-if="val_1[11] == 'fm_9'" >D501-T501</th>
                    <th style="border:1px solid black;" v-if="val_1[11] == 'fm_10'" >T501-T502</th>
                    <th style="border:1px solid black;" v-if="val_1[11] == 'fm_11'" >TAR TRANSFER</th>
                    <th style="border:1px solid black;" v-if="val_1[11] == 'fm_12'" >RECYCLE TO D405 LINE</th>
                    <th style="border:1px solid black;" v-if="val_1[11] == 'fm_13'" >BIODIESEL TO STORAGE</th>
                    <th style="border:1px solid black;" v-if="val_1[11] == 'fm_14'" >D403 INTO T601</th>
                    <th style="border:1px solid black;" v-if="val_1[11] == 'fm_15'" >T601-D602</th>
                    <th style="border:1px solid black;" v-if="val_1[11] == 'fm_16'" >T601 TO REFLUX</th>
                    <th style="border:1px solid black;" v-if="val_1[11] == 'fm_17'" >T601 DRAIN</th>
                    <th style="border:1px solid black;" v-if="val_1[11] == 'fm_18'" >METdANOL INTO GST 1 AND 2</th>
                    <th style="border:1px solid black;" v-if="val_1[11] == 'fm_19'" >METdANOL INTO PPRA AND B</th>
                    <th style="border:1px solid black;" v-if="val_1[11] == 'fm_20'" >METdANOL INTO GLV</th>
                    <th style="border:1px solid black;" v-if="val_1[11] == 'fm_21'" >METdANOL INTO TRANS</th>
                    <th style="border:1px solid black;" v-if="val_1[11] == 'fm_22'" >BIODIESEL STORAGE TO TRUCK</th>
                    <th style="border:1px solid black;" v-if="val_1[11] == 'fm_23'" >RAW MATERIAL OFFLOADING</th>
                    <th style="border:1px solid black;" v-if="val_1[11] == 'fm_24'" >RAW MATERIAL TO SETTLING TANK</th>
                    <th style="border:1px solid black;" v-if="val_1[11] == 'fm_25'" >SETTLING TANK TO D101</th>
                    <th style="border:1px solid black;" v-if="val_1[11] == 'fm_26'" >CT OUTLET</th>
                    <th style="border:1px solid black;" v-if="val_1[11] == 'fm_27'" >CT INLET</th>
                    <th style="border:1px solid black;" v-if="val_1[11] == 'ft_1'" >FT TRANS OIL</th>
                    <th style="border:1px solid black;" v-if="val_1[11] == 'ft_2'" >FT ALKALI TRANS</th>
                    <th style="border:1px solid black;" v-if="val_1[11] == 'ft_3'" >FT TRANS EVAPORATOR TO NI</th>
                    <th style="border:1px solid black;" v-if="val_1[11] == 'ft_4'" >FT WATER N1</th>
                    <th style="border:1px solid black;" v-if="val_1[11] == 'ft_5'" >FT N2 TO D402</th>
                    <th style="border:1px solid black;" v-if="val_1[11] == 'ft_6'" >FT N3 TO  SLAGPOOL</th>
                    <th style="border:1px solid black;" v-if="val_1[11] == 'ft_7'" >FT D602 TO METdANOL STORAGE TANK</th>
                    <th style="border:1px solid black;" v-if="val_1[11] == 'ft_8'" >FT D402-D501</th>
                    <th style="border:1px solid black;" v-if="val_1[11] == 'ft_9'" >FT D501-T501</th>
                    <th style="border:1px solid black;" v-if="val_1[11] == 'ft_10'" >FT T501-T502</th>
                    <th style="border:1px solid black;" v-if="val_1[11] == 'ft_11'" >FT TAR TRANSFER</th>
                    <th style="border:1px solid black;" v-if="val_1[11] == 'ft_12'" >FT RECYCLE TO D405</th>
                    <th style="border:1px solid black;" v-if="val_1[11] == 'ft_13'" >FT BIODIESEL TO STORAGE</th>
                    <th style="border:1px solid black;" v-if="val_1[11] == 'ft_14'" >FT D403 INTO T601</th>
                    <th style="border:1px solid black;" v-if="val_1[11] == 'ft_15'" >FT T601-D602</th>
                    <th style="border:1px solid black;" v-if="val_1[11] == 'ft_16'" >FT T601 TO REFLUX</th>
                    <th style="border:1px solid black;" v-if="val_1[11] == 'ft_17'" >FT T601 DRAIN</th>
                    <th style="border:1px solid black;" v-if="val_1[11] == 'ft_18'" >FT METdANOL INTO GST 1 AND 2</th>
                    <th style="border:1px solid black;" v-if="val_1[11] == 'ft_19'" >FT 19</th>
                    <th style="border:1px solid black;" v-if="val_1[11] == 'ft_20'" >FT METdANOL INTO GLV</th>
                    <th style="border:1px solid black;" v-if="val_1[11] == 'ft_21'" >FT METdANOL  INTO TRANS</th>
                    <th style="border:1px solid black;" v-if="val_1[11] == 'ft_22'" >FT BIODIESEL STORAGE TO TRUCK</th>
                    <th style="border:1px solid black;" v-if="val_1[11] == 'ft_23'" >FT RAW MATERIAL OFFLOADING</th>
                    <th style="border:1px solid black;" v-if="val_1[11] == 'ft_24'" >FT RAW MATERIAL TO SETTLING TANK</th>
                    <th style="border:1px solid black;" v-if="val_1[11] == 'ft_25'" >FT SETTLING TANK TO D101</th>
                    <th style="border:1px solid black;" v-if="val_1[11] == 'ft_26'" >FT CT OUTLET</th>
                    <th style="border:1px solid black;" v-if="val_1[11] == 'ft_27'" >FT CT INLET</th>
                    <th style="border:1px solid black;" v-if="val_1[11] == 'pt_1'" >PT 1</th>
                    <th style="border:1px solid black;" v-if="val_1[11] == 'pt_2'" >PT 2</th>
                    <th style="border:1px solid black;" v-if="val_1[11] == 'pt_3'" >PT 3</th>
                    <th style="border:1px solid black;" v-if="val_1[11] == 'pt_4'" >PT 4</th>
                    <th style="border:1px solid black;" v-if="val_1[11] == 'pt_5'" >Dist Header</th>
                    <th style="border:1px solid black;" v-if="val_1[11] == 'vg_1'" >Vac Line</th>
                    <th style="border:1px solid black;" v-if="val_1[11] == 'vg_2'" >VG 2</th>
                    <th style="border:1px solid black;" v-if="val_1[11] == 'vg_3'" >VG 3</th>
                    <th style="border:1px solid black;" v-if="val_1[11] == 'fm1_den'" >DEN (Trans Oil)</th>
<th style="border:1px solid black;" v-if="val_1[11] == 'fm2_den'" >DEN( Alkali Trans)</th>
<th style="border:1px solid black;" v-if="val_1[11] == 'fm3_den'" >DEN (Trans Evaporator to NI)</th>
<th style="border:1px solid black;" v-if="val_1[11] == 'fm4_den'" >DEN (Water N1)</th>
<th style="border:1px solid black;" v-if="val_1[11] == 'fm5_den'" >DEN (N2 to D402)</th>
<th style="border:1px solid black;" v-if="val_1[11] == 'fm6_den'" >DEN (N3 to Slag pool)</th>
<th style="border:1px solid black;" v-if="val_1[11] == 'fm7_den'" >DEN (D602to Metdanol Storage Tank)</th>
<th style="border:1px solid black;" v-if="val_1[11] == 'fm8_den'" >DEN (D402-D501)</th>
<th style="border:1px solid black;" v-if="val_1[11] == 'fm9_den'" >DEN (D501-T501)</th>
<th style="border:1px solid black;" v-if="val_1[11] == 'fm10_den'" >DEN (T501-T502)</th>
<th style="border:1px solid black;" v-if="val_1[11] == 'fm11_den'" >DEN (Tar Transfer)</th>
<th style="border:1px solid black;" v-if="val_1[11] == 'fm12_den'" >DEN (Recycle to D405 Line)</th>
<th style="border:1px solid black;" v-if="val_1[11] == 'fm13_den'" >DEN (Biodiesel to Storage)</th>
<th style="border:1px solid black;" v-if="val_1[11] == 'fm14_den'" >DEN (D403 into T601)</th>
<th style="border:1px solid black;" v-if="val_1[11] == 'fm15_den'" >DEN (T601 to D602) </th>
<th style="border:1px solid black;" v-if="val_1[11] == 'fm16_den'" >DEN (T601 to Reflux)</th>
<th style="border:1px solid black;" v-if="val_1[11] == 'fm17_den'" >DEN (T601 Drain)</th>
<th style="border:1px solid black;" v-if="val_1[11] == 'fm18_den'" >DEN (Matdanol into GST 1 and 2)</th>
<th style="border:1px solid black;" v-if="val_1[11] == 'fm19_den'" >DEN (Metdanol into PPRA and B)</th>
<th style="border:1px solid black;" v-if="val_1[11] == 'fm20_den'" >DEN (Matdanol into GLV)</th>
<th style="border:1px solid black;" v-if="val_1[11] == 'fm21_den'" >DEN (Metdanol into Trans)</th>
<th style="border:1px solid black;" v-if="val_1[11] == 'fm22_den'" >DEN (Biodiesel Storage to Truck)</th>
<th style="border:1px solid black;" v-if="val_1[11] == 'fm23_den'" >DEN (Raw Material Offloading)</th>
<th style="border:1px solid black;" v-if="val_1[11] == 'fm24_den'" >DEN (Raw Metarial to Settling Tank)</th>
<th style="border:1px solid black;" v-if="val_1[11] == 'fm25_den'" >DEN (Settling Tank to D101)</th>
<th style="border:1px solid black;" v-if="val_1[11] == 'fm26_den'" >DEN (CT Outlet)</th>
<th style="border:1px solid black;" v-if="val_1[11] == 'fm27_den'" >DEN (CT Inlet)</th>
<th style="border:1px solid black;" v-if="val_1[11] == 'fm1_temp'" >TEMP (Trans Oil)</th>
<th style="border:1px solid black;" v-if="val_1[11] == 'fm2_temp'" >TEMP( Alkali Trans)</th>
<th style="border:1px solid black;" v-if="val_1[11] == 'fm3_temp'" >TEMP (Trans Evaporator to NI)</th>
<th style="border:1px solid black;" v-if="val_1[11] == 'fm4_temp'" >TEMP (Water N1)</th>
<th style="border:1px solid black;" v-if="val_1[11] == 'fm5_temp'" >TEMP (N2 to D402)</th>
<th style="border:1px solid black;" v-if="val_1[11] == 'fm6_temp'" >TEMP (N3 to Slag pool)</th>
<th style="border:1px solid black;" v-if="val_1[11] == 'fm7_temp'" >TEMP (D602to Metdanol Storage Tank)</th>
<th style="border:1px solid black;" v-if="val_1[11] == 'fm8_temp'" >TEMP (D402-D501)</th>
<th style="border:1px solid black;" v-if="val_1[11] == 'fm9_temp'" >TEMP (D501-T501)</th>
<th style="border:1px solid black;" v-if="val_1[11] == 'fm10_temp'" >TEMP (T501-T502)</th>
<th style="border:1px solid black;" v-if="val_1[11] == 'fm11_temp'" >TEMP (Tar Transfer)</th>
<th style="border:1px solid black;" v-if="val_1[11] == 'fm12_temp'" >TEMP (Recycle to D405 Line)</th>
<th style="border:1px solid black;" v-if="val_1[11] == 'fm13_temp'" >TEMP (Biodiesel to Storage)</th>
<th style="border:1px solid black;" v-if="val_1[11] == 'fm14_temp'" >TEMP (D403 into T601)</th>
<th style="border:1px solid black;" v-if="val_1[11] == 'fm11_temp'" >TEMP (T601 to D602) </th>
<th style="border:1px solid black;" v-if="val_1[11] == 'fm16_temp'" >TEMP (T601 to Reflux)</th>
<th style="border:1px solid black;" v-if="val_1[11] == 'fm17_temp'" >TEMP (T601 Drain)</th>
<th style="border:1px solid black;" v-if="val_1[11] == 'fm18_temp'" >TEMP (Matdanol into GST 1 and 2)</th>
<th style="border:1px solid black;" v-if="val_1[11] == 'fm19_temp'" >TEMP (Metdanol into PPRA and B)</th>
<th style="border:1px solid black;" v-if="val_1[11] == 'fm20_temp'" >TEMP (Matdanol into GLV)</th>
<th style="border:1px solid black;" v-if="val_1[11] == 'fm21_temp'" >TEMP (Metdanol into Trans)</th>
<th style="border:1px solid black;" v-if="val_1[11] == 'fm22_temp'" >TEMP (Biodiesel Storage to Truck)</th>
<th style="border:1px solid black;" v-if="val_1[11] == 'fm23_temp'" >TEMP (Raw Material Offloading)</th>
<th style="border:1px solid black;" v-if="val_1[11] == 'fm24_temp'" >TEMP (Raw Metarial to Settling Tank)</th>
<th style="border:1px solid black;" v-if="val_1[11] == 'fm25_temp'" >TEMP (Settling Tank to D101)</th>
<th style="border:1px solid black;" v-if="val_1[11] == 'fm26_temp'" >TEMP (CT Outlet)</th>
<th style="border:1px solid black;" v-if="val_1[11] == 'fm27_temp'" >TEMP (CT Inlet)</th>
                    <th style="border:1px solid black;" v-if="val_1[11] == 'rdl_32'" >GST-2-L</th>
                    <th style="border:1px solid black;" v-if="val_1[11] == 'vr_32'" >GST-2-V</th>
                    <th style="border:1px solid black;" v-if="val_1[11] == 'rtd_42'" >GST-2-T</th>
                    <th style="border:1px solid black;" v-if="val_1[11] == 'fm_45'" >(Metdanol Transfer)</th>
                    <th style="border:1px solid black;" v-if="val_1[11] == 'ft_45'" >FT (Metdanol Transfer)</th>
                    <th style="border:1px solid black;" v-if="val_1[11] == 'fm45_den'" >DEN (Metdanol Transfer)</th>
                    <th style="border:1px solid black;" v-if="val_1[11] == 'fm45_temp'" >TEMP (Metdanol Transfer)</th>
                    <th style="border:1px solid black;" v-if="val_1[11] == 'fm_62'" >(RVP)</th>
                    <th style="border:1px solid black;" v-if="val_1[11] == 'ft_62'" >FT (RVP)</th>
                    <th style="border:1px solid black;" v-if="val_1[11] == 'fm_66'" >(Milky)</th>
                    <th style="border:1px solid black;" v-if="val_1[11] == 'ft_66'" >FT (Milky)</th>

                     <th style="border:1px solid black;" v-if="val_1[12] == 'st_fm2_flow'">Main Steam</th>
                    <th style="border:1px solid black;" v-if="val_1[12] == 'stfm2_flow_tot'">Total Flow</th>
                    <th style="border:1px solid black;" v-if="val_1[12] == 'stfm2_temp'">Temp</th>
                    <th style="border:1px solid black;" v-if="val_1[12] == 'stfm2_pressure'">Pressure</th>

                    <th style="border:1px solid black;" v-if="val_1[12] == 'st_fm1_flow'">Steam to E401</th>
                    <th style="border:1px solid black;" v-if="val_1[12] == 'stfm1_flow_tot'">Total Flow</th>
                    <th style="border:1px solid black;" v-if="val_1[12] == 'stfm1_temp'">Temp</th>
                    <th style="border:1px solid black;" v-if="val_1[12] == 'stfm1_pressure'">Pressure</th>

                    <th style="border:1px solid black;" v-if="val_1[12] == 'rdl_1'" >D101A-L</th>
                    <th style="border:1px solid black;" v-if="val_1[12] == 'vr_1'" >D101A-V</th>
                    <th style="border:1px solid black;" v-if="val_1[12] == 'rdl_2'" >D101B-L</th>
                    <th style="border:1px solid black;" v-if="val_1[12] == 'vr_2'" >D101B-V</th>
                    <th style="border:1px solid black;" v-if="val_1[12] == 'rdl_3'" >D405A-L</th>
                    <th style="border:1px solid black;" v-if="val_1[12] == 'vr_3'" >D405A-V</th>
                    <th style="border:1px solid black;" v-if="val_1[12] == 'rdl_4'" >D405B-L</th>
                    <th style="border:1px solid black;" v-if="val_1[12] == 'vr_4'" >D405B-V</th>
                    <th style="border:1px solid black;" v-if="val_1[12] == 'rdl_5'" >D405C-L</th>
                    <th style="border:1px solid black;" v-if="val_1[12] == 'vr_5'" >D405C-V</th>
                    <th style="border:1px solid black;" v-if="val_1[12] == 'rdl_6'" >C401A-L</th>
                    <th style="border:1px solid black;" v-if="val_1[12] == 'vr_6'" >C401A-V</th>
                    <th style="border:1px solid black;" v-if="val_1[12] == 'rdl_7'" >C401B-L</th>
                    <th style="border:1px solid black;" v-if="val_1[12] == 'vr_7'" >C401B-V</th>
                    <th style="border:1px solid black;" v-if="val_1[12] == 'rdl_8'" >D402A-L</th>
                    <th style="border:1px solid black;" v-if="val_1[12] == 'vr_8'" >D402A-V</th>
                    <th style="border:1px solid black;" v-if="val_1[12] == 'rdl_9'" >D402B-L</th>
                    <th style="border:1px solid black;" v-if="val_1[12] == 'vr_9'" >D402B-V</th>
                    <th style="border:1px solid black;" v-if="val_1[12] == 'rdl_10'" >D402C-L</th>
                    <th style="border:1px solid black;" v-if="val_1[12] == 'vr_10'" >D402C-V</th>
                    <th style="border:1px solid black;" v-if="val_1[12] == 'rdl_11'" >D402D-L</th>
                    <th style="border:1px solid black;" v-if="val_1[12] == 'vr_11'" >D402D-V</th>
                    <th style="border:1px solid black;" v-if="val_1[12] == 'rdl_12'" >GLV-L</th>
                    <th style="border:1px solid black;" v-if="val_1[12] == 'vr_12'" >GLV-V</th>
                    <th style="border:1px solid black;" v-if="val_1[12] == 'rdl_13'" >SettlingA-L</th>
                    <th style="border:1px solid black;" v-if="val_1[12] == 'vr_13'" >SettlingA-V</th>
                    <th style="border:1px solid black;" v-if="val_1[12] == 'rdl_14'" >SettlingB-L</th>
                    <th style="border:1px solid black;" v-if="val_1[12] == 'vr_14'" >SettlingB-V</th>
                    <th style="border:1px solid black;" v-if="val_1[12] == 'rdl_15'" >SettlingC-L</th>
                    <th style="border:1px solid black;" v-if="val_1[12] == 'vr_15'" >SettlingC-V</th>
                    <th style="border:1px solid black;" v-if="val_1[12] == 'rdl_16'" >Metdanol T1-L</th>
                    <th style="border:1px solid black;" v-if="val_1[12] == 'vr_16'" >Metdanol T1-V</th>
                    <th style="border:1px solid black;" v-if="val_1[12] == 'rdl_17'" >Tar-L</th>
                    <th style="border:1px solid black;" v-if="val_1[12] == 'vr_17'" >Tar-V</th>
                    <th style="border:1px solid black;" v-if="val_1[12] == 'rdl_18'" >GST T1-L</th>
                    <th style="border:1px solid black;" v-if="val_1[12] == 'vr_18'" >GST T1-V</th>
                    <th style="border:1px solid black;" v-if="val_1[12] == 'rdl_19'" >Metdanol T2-L</th>
                    <th style="border:1px solid black;" v-if="val_1[12] == 'vr_19'" >Metdanol T2-V</th>
                    <th style="border:1px solid black;" v-if="val_1[12] == 'rdl_20'" >SP1-L</th>
                    <th style="border:1px solid black;" v-if="val_1[12] == 'vr_20'" >SP1-V</th>
                    <th style="border:1px solid black;" v-if="val_1[12] == 'rdl_21'" >SP2-L</th>
                    <th style="border:1px solid black;" v-if="val_1[12] == 'vr_21'" >SP2-V</th>
                    <th style="border:1px solid black;" v-if="val_1[12] == 'rdl_22'" >SP3-L</th>
                    <th style="border:1px solid black;" v-if="val_1[12] == 'vr_22'" >SP3-V</th>
                    <th style="border:1px solid black;" v-if="val_1[12] == 'rdl_23'" >PPRA-L</th>
                    <th style="border:1px solid black;" v-if="val_1[12] == 'vr_23'" >PPRA-V</th>
                    <th style="border:1px solid black;" v-if="val_1[12] == 'rdl_24'" >PPRB-L</th>
                    <th style="border:1px solid black;" v-if="val_1[12] == 'vr_24'" >PPRB-V</th>
                    <th style="border:1px solid black;" v-if="val_1[12] == 'rdl_25'" >H2SO4-L</th>
                    <th style="border:1px solid black;" v-if="val_1[12] == 'rdl25_volume'" >H2SO4-V</th>
                    <th style="border:1px solid black;" v-if="val_1[12] == 'rdl25_mass'" >Mass In Kg</th>
                    <th style="border:1px solid black;" v-if="val_1[12] == 'rtd_1'" >E101-T</th>
                    <th style="border:1px solid black;" v-if="val_1[12] == 'rtd_2'" >D101A-T</th>
                    <th style="border:1px solid black;" v-if="val_1[12] == 'rtd_3'" >D101B-T</th>
                    <th style="border:1px solid black;" v-if="val_1[12] == 'rtd_4'" >E201-T</th>
                    <th style="border:1px solid black;" v-if="val_1[12] == 'rtd_5'" >GLV-Top-T</th>
                    <th style="border:1px solid black;" v-if="val_1[12] == 'rtd_6'" >GLV-Mid-T</th>
                    <th style="border:1px solid black;" v-if="val_1[12] == 'rtd_7'" >GLV-BTM-T</th>
                    <th style="border:1px solid black;" v-if="val_1[12] == 'rtd_8'" >GLV-EVP-T</th>
                    <th style="border:1px solid black;" v-if="val_1[12] == 'rtd_9'" >SettlingA-T</th>
                    <th style="border:1px solid black;" v-if="val_1[12] == 'rtd_10'" >SettlingB-T</th>
                    <th style="border:1px solid black;" v-if="val_1[12] == 'rtd_11'" >SettlingC-T</th>
                    <th style="border:1px solid black;" v-if="val_1[12] == 'rtd_12'" >Hot Water-T</th>
                    <th style="border:1px solid black;" v-if="val_1[12] == 'rtd_13'" >D402A-T</th>
                    <th style="border:1px solid black;" v-if="val_1[12] == 'rtd_14'" >D402B-T</th>
                    <th style="border:1px solid black;" v-if="val_1[12] == 'rtd_15'" >D402C-T</th>
                    <th style="border:1px solid black;" v-if="val_1[12] == 'rtd_16'" >D402D-T</th>
                    <th style="border:1px solid black;" v-if="val_1[12] == 'rtd_17'" >Trans EVP-T</th>
                    <th style="border:1px solid black;" v-if="val_1[12] == 'rtd_18'" >Blue-T</th>
                    <th style="border:1px solid black;" v-if="val_1[12] == 'rtd_19'" >Green-T</th>
                    <th style="border:1px solid black;" v-if="val_1[12] == 'rtd_20'" >Old Green-T</th>
                    <th style="border:1px solid black;" v-if="val_1[12] == 'rtd_21'" >E601-T</th>
                    <th style="border:1px solid black;" v-if="val_1[12] == 'rtd_22'" >T601-Top-T</th>
                    <th style="border:1px solid black;" v-if="val_1[12] == 'rtd_23'" >T601-Mid-T</th>
                    <th style="border:1px solid black;" v-if="val_1[12] == 'rtd_24'" >T601-BTM-T</th>
                    <th style="border:1px solid black;" v-if="val_1[12] == 'rtd_25'" >E501</th>
                    <th style="border:1px solid black;" v-if="val_1[12] == 'rtd_26'" >D501</th>
                    <th style="border:1px solid black;" v-if="val_1[12] == 'rtd_27'" >T501-Top-T</th>
                    <th style="border:1px solid black;" v-if="val_1[12] == 'rtd_28'" >T501-Mid-T</th>
                    <th style="border:1px solid black;" v-if="val_1[12] == 'rtd_29'" >RTDT501-BTM-T</th>
                    <th style="border:1px solid black;" v-if="val_1[12] == 'rtd_30'" >T502-Mid-T</th>
                    <th style="border:1px solid black;" v-if="val_1[12] == 'rtd_31'" >T502-BTM-T</th>
                    <th style="border:1px solid black;" v-if="val_1[12] == 'rtd_32'" >PPRA-T</th>
                    <th style="border:1px solid black;" v-if="val_1[12] == 'rtd_33'" >PPRB-T</th>
                    <th style="border:1px solid black;" v-if="val_1[12] == 'rtd_34'" >GST T1-T</th>
                    <th style="border:1px solid black;" v-if="val_1[12] == 'rtd_35'" >Trans React-T</th>
                    <th style="border:1px solid black;" v-if="val_1[12] == 'rtd_36'" >Bio Storag-T</th>
                    <th style="border:1px solid black;" v-if="val_1[12] == 'rtd_37'" >Bio Transf-T</th>
                    <th style="border:1px solid black;" v-if="val_1[12] == 'dpl_1'" >D501-L</th>
                    <th style="border:1px solid black;" v-if="val_1[12] == 'vd_1'" >D501-V</th>
                    <th style="border:1px solid black;" v-if="val_1[12] == 'dpl_2'" >E401-L</th>
                    <th style="border:1px solid black;" v-if="val_1[12] == 'vd_2'" >E401-V</th>
                    <th style="border:1px solid black;" v-if="val_1[12] == 'dpl_3'" >T601-L</th>
                    <th style="border:1px solid black;" v-if="val_1[12] == 'vd_3'" >T601-V</th>
                    <th style="border:1px solid black;" v-if="val_1[12] == 'dpl_4'" >D503-L</th>
                    <th style="border:1px solid black;" v-if="val_1[12] == 'vd_4'" >D503-V</th>
                    <th style="border:1px solid black;" v-if="val_1[12] == 'dpl_5'" >D504-L</th>
                    <th style="border:1px solid black;" v-if="val_1[12] == 'vd_5'" >D504-V</th>
                    <th style="border:1px solid black;" v-if="val_1[12] == 'dpl_6'" >T501-L</th>
                    <th style="border:1px solid black;" v-if="val_1[12] == 'vd_6'" >T501-V</th>
                    <th style="border:1px solid black;" v-if="val_1[12] == 'dpl_7'" >T502-L</th>
                    <th style="border:1px solid black;" v-if="val_1[12] == 'vd_7'" >T502-V</th>
                    <th style="border:1px solid black;" v-if="val_1[12] == 'dpl_8'" >Bio Storage Tank-L</th>
                    <th style="border:1px solid black;" v-if="val_1[12] == 'vd_8'" >Bio Storage Tank-V</th>
                    <th style="border:1px solid black;" v-if="val_1[12] == 'fm_1'" >TRANS OIL</th>
                    <th style="border:1px solid black;" v-if="val_1[12] == 'fm_2'" >ALKALI TRANS</th>
                    <th style="border:1px solid black;" v-if="val_1[12] == 'fm_3'" >TRANS EVAPORATOR TO NI</th>
                    <th style="border:1px solid black;" v-if="val_1[12] == 'fm_4'" >WATER N1</th>
                    <th style="border:1px solid black;" v-if="val_1[12] == 'fm_5'" >N2 TO D402</th>
                    <th style="border:1px solid black;" v-if="val_1[12] == 'fm_6'" >N3 TO SLAGPOOL</th>
                    <th style="border:1px solid black;" v-if="val_1[12] == 'fm_7'" >D602 TO METdANOL STORAGE TANK</th>
                    <th style="border:1px solid black;" v-if="val_1[12] == 'fm_8'" >D402-D501</th>
                    <th style="border:1px solid black;" v-if="val_1[12] == 'fm_9'" >D501-T501</th>
                    <th style="border:1px solid black;" v-if="val_1[12] == 'fm_10'" >T501-T502</th>
                    <th style="border:1px solid black;" v-if="val_1[12] == 'fm_11'" >TAR TRANSFER</th>
                    <th style="border:1px solid black;" v-if="val_1[12] == 'fm_12'" >RECYCLE TO D405 LINE</th>
                    <th style="border:1px solid black;" v-if="val_1[12] == 'fm_13'" >BIODIESEL TO STORAGE</th>
                    <th style="border:1px solid black;" v-if="val_1[12] == 'fm_14'" >D403 INTO T601</th>
                    <th style="border:1px solid black;" v-if="val_1[12] == 'fm_15'" >T601-D602</th>
                    <th style="border:1px solid black;" v-if="val_1[12] == 'fm_16'" >T601 TO REFLUX</th>
                    <th style="border:1px solid black;" v-if="val_1[12] == 'fm_17'" >T601 DRAIN</th>
                    <th style="border:1px solid black;" v-if="val_1[12] == 'fm_18'" >METdANOL INTO GST 1 AND 2</th>
                    <th style="border:1px solid black;" v-if="val_1[12] == 'fm_19'" >METdANOL INTO PPRA AND B</th>
                    <th style="border:1px solid black;" v-if="val_1[12] == 'fm_20'" >METdANOL INTO GLV</th>
                    <th style="border:1px solid black;" v-if="val_1[12] == 'fm_21'" >METdANOL INTO TRANS</th>
                    <th style="border:1px solid black;" v-if="val_1[12] == 'fm_22'" >BIODIESEL STORAGE TO TRUCK</th>
                    <th style="border:1px solid black;" v-if="val_1[12] == 'fm_23'" >RAW MATERIAL OFFLOADING</th>
                    <th style="border:1px solid black;" v-if="val_1[12] == 'fm_24'" >RAW MATERIAL TO SETTLING TANK</th>
                    <th style="border:1px solid black;" v-if="val_1[12] == 'fm_25'" >SETTLING TANK TO D101</th>
                    <th style="border:1px solid black;" v-if="val_1[12] == 'fm_26'" >CT OUTLET</th>
                    <th style="border:1px solid black;" v-if="val_1[12] == 'fm_27'" >CT INLET</th>
                    <th style="border:1px solid black;" v-if="val_1[12] == 'ft_1'" >FT TRANS OIL</th>
                    <th style="border:1px solid black;" v-if="val_1[12] == 'ft_2'" >FT ALKALI TRANS</th>
                    <th style="border:1px solid black;" v-if="val_1[12] == 'ft_3'" >FT TRANS EVAPORATOR TO NI</th>
                    <th style="border:1px solid black;" v-if="val_1[12] == 'ft_4'" >FT WATER N1</th>
                    <th style="border:1px solid black;" v-if="val_1[12] == 'ft_5'" >FT N2 TO D402</th>
                    <th style="border:1px solid black;" v-if="val_1[12] == 'ft_6'" >FT N3 TO  SLAGPOOL</th>
                    <th style="border:1px solid black;" v-if="val_1[12] == 'ft_7'" >FT D602 TO METdANOL STORAGE TANK</th>
                    <th style="border:1px solid black;" v-if="val_1[12] == 'ft_8'" >FT D402-D501</th>
                    <th style="border:1px solid black;" v-if="val_1[12] == 'ft_9'" >FT D501-T501</th>
                    <th style="border:1px solid black;" v-if="val_1[12] == 'ft_10'" >FT T501-T502</th>
                    <th style="border:1px solid black;" v-if="val_1[12] == 'ft_11'" >FT TAR TRANSFER</th>
                    <th style="border:1px solid black;" v-if="val_1[12] == 'ft_12'" >FT RECYCLE TO D405</th>
                    <th style="border:1px solid black;" v-if="val_1[12] == 'ft_13'" >FT BIODIESEL TO STORAGE</th>
                    <th style="border:1px solid black;" v-if="val_1[12] == 'ft_14'" >FT D403 INTO T601</th>
                    <th style="border:1px solid black;" v-if="val_1[12] == 'ft_15'" >FT T601-D602</th>
                    <th style="border:1px solid black;" v-if="val_1[12] == 'ft_16'" >FT T601 TO REFLUX</th>
                    <th style="border:1px solid black;" v-if="val_1[12] == 'ft_17'" >FT T601 DRAIN</th>
                    <th style="border:1px solid black;" v-if="val_1[12] == 'ft_18'" >FT METdANOL INTO GST 1 AND 2</th>
                    <th style="border:1px solid black;" v-if="val_1[12] == 'ft_19'" >FT 19</th>
                    <th style="border:1px solid black;" v-if="val_1[12] == 'ft_20'" >FT METdANOL INTO GLV</th>
                    <th style="border:1px solid black;" v-if="val_1[12] == 'ft_21'" >FT METdANOL  INTO TRANS</th>
                    <th style="border:1px solid black;" v-if="val_1[12] == 'ft_22'" >FT BIODIESEL STORAGE TO TRUCK</th>
                    <th style="border:1px solid black;" v-if="val_1[12] == 'ft_23'" >FT RAW MATERIAL OFFLOADING</th>
                    <th style="border:1px solid black;" v-if="val_1[12] == 'ft_24'" >FT RAW MATERIAL TO SETTLING TANK</th>
                    <th style="border:1px solid black;" v-if="val_1[12] == 'ft_25'" >FT SETTLING TANK TO D101</th>
                    <th style="border:1px solid black;" v-if="val_1[12] == 'ft_26'" >FT CT OUTLET</th>
                    <th style="border:1px solid black;" v-if="val_1[12] == 'ft_27'" >FT CT INLET</th>
                    <th style="border:1px solid black;" v-if="val_1[12] == 'pt_1'" >PT 1</th>
                    <th style="border:1px solid black;" v-if="val_1[12] == 'pt_2'" >PT 2</th>
                    <th style="border:1px solid black;" v-if="val_1[12] == 'pt_3'" >PT 3</th>
                    <th style="border:1px solid black;" v-if="val_1[12] == 'pt_4'" >PT 4</th>
                    <th style="border:1px solid black;" v-if="val_1[12] == 'pt_5'" >Dist Header</th>
                    <th style="border:1px solid black;" v-if="val_1[12] == 'vg_1'" >Vac Line</th>
                    <th style="border:1px solid black;" v-if="val_1[12] == 'vg_2'" >VG 2</th>
                    <th style="border:1px solid black;" v-if="val_1[12] == 'vg_3'" >VG 3</th>
                    <th style="border:1px solid black;" v-if="val_1[12] == 'fm1_den'" >DEN (Trans Oil)</th>
<th style="border:1px solid black;" v-if="val_1[12] == 'fm2_den'" >DEN( Alkali Trans)</th>
<th style="border:1px solid black;" v-if="val_1[12] == 'fm3_den'" >DEN (Trans Evaporator to NI)</th>
<th style="border:1px solid black;" v-if="val_1[12] == 'fm4_den'" >DEN (Water N1)</th>
<th style="border:1px solid black;" v-if="val_1[12] == 'fm5_den'" >DEN (N2 to D402)</th>
<th style="border:1px solid black;" v-if="val_1[12] == 'fm6_den'" >DEN (N3 to Slag pool)</th>
<th style="border:1px solid black;" v-if="val_1[12] == 'fm7_den'" >DEN (D602to Metdanol Storage Tank)</th>
<th style="border:1px solid black;" v-if="val_1[12] == 'fm8_den'" >DEN (D402-D501)</th>
<th style="border:1px solid black;" v-if="val_1[12] == 'fm9_den'" >DEN (D501-T501)</th>
<th style="border:1px solid black;" v-if="val_1[12] == 'fm10_den'" >DEN (T501-T502)</th>
<th style="border:1px solid black;" v-if="val_1[12] == 'fm11_den'" >DEN (Tar Transfer)</th>
<th style="border:1px solid black;" v-if="val_1[12] == 'fm12_den'" >DEN (Recycle to D405 Line)</th>
<th style="border:1px solid black;" v-if="val_1[12] == 'fm13_den'" >DEN (Biodiesel to Storage)</th>
<th style="border:1px solid black;" v-if="val_1[12] == 'fm14_den'" >DEN (D403 into T601)</th>
<th style="border:1px solid black;" v-if="val_1[12] == 'fm15_den'" >DEN (T601 to D602) </th>
<th style="border:1px solid black;" v-if="val_1[12] == 'fm16_den'" >DEN (T601 to Reflux)</th>
<th style="border:1px solid black;" v-if="val_1[12] == 'fm17_den'" >DEN (T601 Drain)</th>
<th style="border:1px solid black;" v-if="val_1[12] == 'fm18_den'" >DEN (Matdanol into GST 1 and 2)</th>
<th style="border:1px solid black;" v-if="val_1[12] == 'fm19_den'" >DEN (Metdanol into PPRA and B)</th>
<th style="border:1px solid black;" v-if="val_1[12] == 'fm20_den'" >DEN (Matdanol into GLV)</th>
<th style="border:1px solid black;" v-if="val_1[12] == 'fm21_den'" >DEN (Metdanol into Trans)</th>
<th style="border:1px solid black;" v-if="val_1[12] == 'fm22_den'" >DEN (Biodiesel Storage to Truck)</th>
<th style="border:1px solid black;" v-if="val_1[12] == 'fm23_den'" >DEN (Raw Material Offloading)</th>
<th style="border:1px solid black;" v-if="val_1[12] == 'fm24_den'" >DEN (Raw Metarial to Settling Tank)</th>
<th style="border:1px solid black;" v-if="val_1[12] == 'fm25_den'" >DEN (Settling Tank to D101)</th>
<th style="border:1px solid black;" v-if="val_1[12] == 'fm26_den'" >DEN (CT Outlet)</th>
<th style="border:1px solid black;" v-if="val_1[12] == 'fm27_den'" >DEN (CT Inlet)</th>
<th style="border:1px solid black;" v-if="val_1[12] == 'fm1_temp'" >TEMP (Trans Oil)</th>
<th style="border:1px solid black;" v-if="val_1[12] == 'fm2_temp'" >TEMP( Alkali Trans)</th>
<th style="border:1px solid black;" v-if="val_1[12] == 'fm3_temp'" >TEMP (Trans Evaporator to NI)</th>
<th style="border:1px solid black;" v-if="val_1[12] == 'fm4_temp'" >TEMP (Water N1)</th>
<th style="border:1px solid black;" v-if="val_1[12] == 'fm5_temp'" >TEMP (N2 to D402)</th>
<th style="border:1px solid black;" v-if="val_1[12] == 'fm6_temp'" >TEMP (N3 to Slag pool)</th>
<th style="border:1px solid black;" v-if="val_1[12] == 'fm7_temp'" >TEMP (D602to Metdanol Storage Tank)</th>
<th style="border:1px solid black;" v-if="val_1[12] == 'fm8_temp'" >TEMP (D402-D501)</th>
<th style="border:1px solid black;" v-if="val_1[12] == 'fm9_temp'" >TEMP (D501-T501)</th>
<th style="border:1px solid black;" v-if="val_1[12] == 'fm10_temp'" >TEMP (T501-T502)</th>
<th style="border:1px solid black;" v-if="val_1[12] == 'fm11_temp'" >TEMP (Tar Transfer)</th>
<th style="border:1px solid black;" v-if="val_1[12] == 'fm12_temp'" >TEMP (Recycle to D405 Line)</th>
<th style="border:1px solid black;" v-if="val_1[12] == 'fm13_temp'" >TEMP (Biodiesel to Storage)</th>
<th style="border:1px solid black;" v-if="val_1[12] == 'fm14_temp'" >TEMP (D403 into T601)</th>
<th style="border:1px solid black;" v-if="val_1[12] == 'fm12_temp'" >TEMP (T601 to D602) </th>
<th style="border:1px solid black;" v-if="val_1[12] == 'fm16_temp'" >TEMP (T601 to Reflux)</th>
<th style="border:1px solid black;" v-if="val_1[12] == 'fm17_temp'" >TEMP (T601 Drain)</th>
<th style="border:1px solid black;" v-if="val_1[12] == 'fm18_temp'" >TEMP (Matdanol into GST 1 and 2)</th>
<th style="border:1px solid black;" v-if="val_1[12] == 'fm19_temp'" >TEMP (Metdanol into PPRA and B)</th>
<th style="border:1px solid black;" v-if="val_1[12] == 'fm20_temp'" >TEMP (Matdanol into GLV)</th>
<th style="border:1px solid black;" v-if="val_1[12] == 'fm21_temp'" >TEMP (Metdanol into Trans)</th>
<th style="border:1px solid black;" v-if="val_1[12] == 'fm22_temp'" >TEMP (Biodiesel Storage to Truck)</th>
<th style="border:1px solid black;" v-if="val_1[12] == 'fm23_temp'" >TEMP (Raw Material Offloading)</th>
<th style="border:1px solid black;" v-if="val_1[12] == 'fm24_temp'" >TEMP (Raw Metarial to Settling Tank)</th>
<th style="border:1px solid black;" v-if="val_1[12] == 'fm25_temp'" >TEMP (Settling Tank to D101)</th>
<th style="border:1px solid black;" v-if="val_1[12] == 'fm26_temp'" >TEMP (CT Outlet)</th>
<th style="border:1px solid black;" v-if="val_1[12] == 'fm27_temp'" >TEMP (CT Inlet)</th>
                    <th style="border:1px solid black;" v-if="val_1[12] == 'rdl_32'" >GST-2-L</th>
                    <th style="border:1px solid black;" v-if="val_1[12] == 'vr_32'" >GST-2-V</th>
                    <th style="border:1px solid black;" v-if="val_1[12] == 'rtd_42'" >GST-2-T</th>
                    <th style="border:1px solid black;" v-if="val_1[12] == 'fm_45'" >(Metdanol Transfer)</th>
                    <th style="border:1px solid black;" v-if="val_1[12] == 'ft_45'" >FT (Metdanol Transfer)</th>
                    <th style="border:1px solid black;" v-if="val_1[12] == 'fm45_den'" >DEN (Metdanol Transfer)</th>
                    <th style="border:1px solid black;" v-if="val_1[12] == 'fm45_temp'" >TEMP (Metdanol Transfer)</th>
                    <th style="border:1px solid black;" v-if="val_1[12] == 'fm_62'" >(RVP)</th>
                    <th style="border:1px solid black;" v-if="val_1[12] == 'ft_62'" >FT (RVP)</th>
                    <th style="border:1px solid black;" v-if="val_1[12] == 'fm_66'" >(Milky)</th>
                    <th style="border:1px solid black;" v-if="val_1[12] == 'ft_66'" >FT (Milky)</th>

                     <th style="border:1px solid black;" v-if="val_1[13] == 'st_fm2_flow'">Main Steam</th>
                    <th style="border:1px solid black;" v-if="val_1[13] == 'stfm2_flow_tot'">Total Flow</th>
                    <th style="border:1px solid black;" v-if="val_1[13] == 'stfm2_temp'">Temp</th>
                    <th style="border:1px solid black;" v-if="val_1[13] == 'stfm2_pressure'">Pressure</th>

                    <th style="border:1px solid black;" v-if="val_1[13] == 'st_fm1_flow'">Steam to E401</th>
                    <th style="border:1px solid black;" v-if="val_1[13] == 'stfm1_flow_tot'">Total Flow</th>
                    <th style="border:1px solid black;" v-if="val_1[13] == 'stfm1_temp'">Temp</th>
                    <th style="border:1px solid black;" v-if="val_1[13] == 'stfm1_pressure'">Pressure</th>

                    <th style="border:1px solid black;" v-if="val_1[13] == 'rdl_1'" >D101A-L</th>
                    <th style="border:1px solid black;" v-if="val_1[13] == 'vr_1'" >D101A-V</th>
                    <th style="border:1px solid black;" v-if="val_1[13] == 'rdl_2'" >D101B-L</th>
                    <th style="border:1px solid black;" v-if="val_1[13] == 'vr_2'" >D101B-V</th>
                    <th style="border:1px solid black;" v-if="val_1[13] == 'rdl_3'" >D405A-L</th>
                    <th style="border:1px solid black;" v-if="val_1[13] == 'vr_3'" >D405A-V</th>
                    <th style="border:1px solid black;" v-if="val_1[13] == 'rdl_4'" >D405B-L</th>
                    <th style="border:1px solid black;" v-if="val_1[13] == 'vr_4'" >D405B-V</th>
                    <th style="border:1px solid black;" v-if="val_1[13] == 'rdl_5'" >D405C-L</th>
                    <th style="border:1px solid black;" v-if="val_1[13] == 'vr_5'" >D405C-V</th>
                    <th style="border:1px solid black;" v-if="val_1[13] == 'rdl_6'" >C401A-L</th>
                    <th style="border:1px solid black;" v-if="val_1[13] == 'vr_6'" >C401A-V</th>
                    <th style="border:1px solid black;" v-if="val_1[13] == 'rdl_7'" >C401B-L</th>
                    <th style="border:1px solid black;" v-if="val_1[13] == 'vr_7'" >C401B-V</th>
                    <th style="border:1px solid black;" v-if="val_1[13] == 'rdl_8'" >D402A-L</th>
                    <th style="border:1px solid black;" v-if="val_1[13] == 'vr_8'" >D402A-V</th>
                    <th style="border:1px solid black;" v-if="val_1[13] == 'rdl_9'" >D402B-L</th>
                    <th style="border:1px solid black;" v-if="val_1[13] == 'vr_9'" >D402B-V</th>
                    <th style="border:1px solid black;" v-if="val_1[13] == 'rdl_10'" >D402C-L</th>
                    <th style="border:1px solid black;" v-if="val_1[13] == 'vr_10'" >D402C-V</th>
                    <th style="border:1px solid black;" v-if="val_1[13] == 'rdl_11'" >D402D-L</th>
                    <th style="border:1px solid black;" v-if="val_1[13] == 'vr_11'" >D402D-V</th>
                    <th style="border:1px solid black;" v-if="val_1[13] == 'rdl_12'" >GLV-L</th>
                    <th style="border:1px solid black;" v-if="val_1[13] == 'vr_12'" >GLV-V</th>
                    <th style="border:1px solid black;" v-if="val_1[13] == 'rdl_13'" >SettlingA-L</th>
                    <th style="border:1px solid black;" v-if="val_1[13] == 'vr_13'" >SettlingA-V</th>
                    <th style="border:1px solid black;" v-if="val_1[13] == 'rdl_14'" >SettlingB-L</th>
                    <th style="border:1px solid black;" v-if="val_1[13] == 'vr_14'" >SettlingB-V</th>
                    <th style="border:1px solid black;" v-if="val_1[13] == 'rdl_15'" >SettlingC-L</th>
                    <th style="border:1px solid black;" v-if="val_1[13] == 'vr_15'" >SettlingC-V</th>
                    <th style="border:1px solid black;" v-if="val_1[13] == 'rdl_16'" >Metdanol T1-L</th>
                    <th style="border:1px solid black;" v-if="val_1[13] == 'vr_16'" >Metdanol T1-V</th>
                    <th style="border:1px solid black;" v-if="val_1[13] == 'rdl_17'" >Tar-L</th>
                    <th style="border:1px solid black;" v-if="val_1[13] == 'vr_17'" >Tar-V</th>
                    <th style="border:1px solid black;" v-if="val_1[13] == 'rdl_18'" >GST T1-L</th>
                    <th style="border:1px solid black;" v-if="val_1[13] == 'vr_18'" >GST T1-V</th>
                    <th style="border:1px solid black;" v-if="val_1[13] == 'rdl_19'" >Metdanol T2-L</th>
                    <th style="border:1px solid black;" v-if="val_1[13] == 'vr_19'" >Metdanol T2-V</th>
                    <th style="border:1px solid black;" v-if="val_1[13] == 'rdl_20'" >SP1-L</th>
                    <th style="border:1px solid black;" v-if="val_1[13] == 'vr_20'" >SP1-V</th>
                    <th style="border:1px solid black;" v-if="val_1[13] == 'rdl_21'" >SP2-L</th>
                    <th style="border:1px solid black;" v-if="val_1[13] == 'vr_21'" >SP2-V</th>
                    <th style="border:1px solid black;" v-if="val_1[13] == 'rdl_22'" >SP3-L</th>
                    <th style="border:1px solid black;" v-if="val_1[13] == 'vr_22'" >SP3-V</th>
                    <th style="border:1px solid black;" v-if="val_1[13] == 'rdl_23'" >PPRA-L</th>
                    <th style="border:1px solid black;" v-if="val_1[13] == 'vr_23'" >PPRA-V</th>
                    <th style="border:1px solid black;" v-if="val_1[13] == 'rdl_24'" >PPRB-L</th>
                    <th style="border:1px solid black;" v-if="val_1[13] == 'vr_24'" >PPRB-V</th>
                    <th style="border:1px solid black;" v-if="val_1[13] == 'rdl_25'" >H2SO4-L</th>
                    <th style="border:1px solid black;" v-if="val_1[13] == 'rdl25_volume'" >H2SO4-V</th>
                    <th style="border:1px solid black;" v-if="val_1[13] == 'rdl25_mass'" >Mass In Kg</th>
                    <th style="border:1px solid black;" v-if="val_1[13] == 'rtd_1'" >E101-T</th>
                    <th style="border:1px solid black;" v-if="val_1[13] == 'rtd_2'" >D101A-T</th>
                    <th style="border:1px solid black;" v-if="val_1[13] == 'rtd_3'" >D101B-T</th>
                    <th style="border:1px solid black;" v-if="val_1[13] == 'rtd_4'" >E201-T</th>
                    <th style="border:1px solid black;" v-if="val_1[13] == 'rtd_5'" >GLV-Top-T</th>
                    <th style="border:1px solid black;" v-if="val_1[13] == 'rtd_6'" >GLV-Mid-T</th>
                    <th style="border:1px solid black;" v-if="val_1[13] == 'rtd_7'" >GLV-BTM-T</th>
                    <th style="border:1px solid black;" v-if="val_1[13] == 'rtd_8'" >GLV-EVP-T</th>
                    <th style="border:1px solid black;" v-if="val_1[13] == 'rtd_9'" >SettlingA-T</th>
                    <th style="border:1px solid black;" v-if="val_1[13] == 'rtd_10'" >SettlingB-T</th>
                    <th style="border:1px solid black;" v-if="val_1[13] == 'rtd_11'" >SettlingC-T</th>
                    <th style="border:1px solid black;" v-if="val_1[13] == 'rtd_12'" >Hot Water-T</th>
                    <th style="border:1px solid black;" v-if="val_1[13] == 'rtd_13'" >D402A-T</th>
                    <th style="border:1px solid black;" v-if="val_1[13] == 'rtd_14'" >D402B-T</th>
                    <th style="border:1px solid black;" v-if="val_1[13] == 'rtd_15'" >D402C-T</th>
                    <th style="border:1px solid black;" v-if="val_1[13] == 'rtd_16'" >D402D-T</th>
                    <th style="border:1px solid black;" v-if="val_1[13] == 'rtd_17'" >Trans EVP-T</th>
                    <th style="border:1px solid black;" v-if="val_1[13] == 'rtd_18'" >Blue-T</th>
                    <th style="border:1px solid black;" v-if="val_1[13] == 'rtd_19'" >Green-T</th>
                    <th style="border:1px solid black;" v-if="val_1[13] == 'rtd_20'" >Old Green-T</th>
                    <th style="border:1px solid black;" v-if="val_1[13] == 'rtd_21'" >E601-T</th>
                    <th style="border:1px solid black;" v-if="val_1[13] == 'rtd_22'" >T601-Top-T</th>
                    <th style="border:1px solid black;" v-if="val_1[13] == 'rtd_23'" >T601-Mid-T</th>
                    <th style="border:1px solid black;" v-if="val_1[13] == 'rtd_24'" >T601-BTM-T</th>
                    <th style="border:1px solid black;" v-if="val_1[13] == 'rtd_25'" >E501</th>
                    <th style="border:1px solid black;" v-if="val_1[13] == 'rtd_26'" >D501</th>
                    <th style="border:1px solid black;" v-if="val_1[13] == 'rtd_27'" >T501-Top-T</th>
                    <th style="border:1px solid black;" v-if="val_1[13] == 'rtd_28'" >T501-Mid-T</th>
                    <th style="border:1px solid black;" v-if="val_1[13] == 'rtd_29'" >RTDT501-BTM-T</th>
                    <th style="border:1px solid black;" v-if="val_1[13] == 'rtd_30'" >T502-Mid-T</th>
                    <th style="border:1px solid black;" v-if="val_1[13] == 'rtd_31'" >T502-BTM-T</th>
                    <th style="border:1px solid black;" v-if="val_1[13] == 'rtd_32'" >PPRA-T</th>
                    <th style="border:1px solid black;" v-if="val_1[13] == 'rtd_33'" >PPRB-T</th>
                    <th style="border:1px solid black;" v-if="val_1[13] == 'rtd_34'" >GST T1-T</th>
                    <th style="border:1px solid black;" v-if="val_1[13] == 'rtd_35'" >Trans React-T</th>
                    <th style="border:1px solid black;" v-if="val_1[13] == 'rtd_36'" >Bio Storag-T</th>
                    <th style="border:1px solid black;" v-if="val_1[13] == 'rtd_37'" >Bio Transf-T</th>
                    <th style="border:1px solid black;" v-if="val_1[13] == 'dpl_1'" >D501-L</th>
                    <th style="border:1px solid black;" v-if="val_1[13] == 'vd_1'" >D501-V</th>
                    <th style="border:1px solid black;" v-if="val_1[13] == 'dpl_2'" >E401-L</th>
                    <th style="border:1px solid black;" v-if="val_1[13] == 'vd_2'" >E401-V</th>
                    <th style="border:1px solid black;" v-if="val_1[13] == 'dpl_3'" >T601-L</th>
                    <th style="border:1px solid black;" v-if="val_1[13] == 'vd_3'" >T601-V</th>
                    <th style="border:1px solid black;" v-if="val_1[13] == 'dpl_4'" >D503-L</th>
                    <th style="border:1px solid black;" v-if="val_1[13] == 'vd_4'" >D503-V</th>
                    <th style="border:1px solid black;" v-if="val_1[13] == 'dpl_5'" >D504-L</th>
                    <th style="border:1px solid black;" v-if="val_1[13] == 'vd_5'" >D504-V</th>
                    <th style="border:1px solid black;" v-if="val_1[13] == 'dpl_6'" >T501-L</th>
                    <th style="border:1px solid black;" v-if="val_1[13] == 'vd_6'" >T501-V</th>
                    <th style="border:1px solid black;" v-if="val_1[13] == 'dpl_7'" >T502-L</th>
                    <th style="border:1px solid black;" v-if="val_1[13] == 'vd_7'" >T502-V</th>
                    <th style="border:1px solid black;" v-if="val_1[13] == 'dpl_8'" >Bio Storage Tank-L</th>
                    <th style="border:1px solid black;" v-if="val_1[13] == 'vd_8'" >Bio Storage Tank-V</th>
                    <th style="border:1px solid black;" v-if="val_1[13] == 'fm_1'" >TRANS OIL</th>
                    <th style="border:1px solid black;" v-if="val_1[13] == 'fm_2'" >ALKALI TRANS</th>
                    <th style="border:1px solid black;" v-if="val_1[13] == 'fm_3'" >TRANS EVAPORATOR TO NI</th>
                    <th style="border:1px solid black;" v-if="val_1[13] == 'fm_4'" >WATER N1</th>
                    <th style="border:1px solid black;" v-if="val_1[13] == 'fm_5'" >N2 TO D402</th>
                    <th style="border:1px solid black;" v-if="val_1[13] == 'fm_6'" >N3 TO SLAGPOOL</th>
                    <th style="border:1px solid black;" v-if="val_1[13] == 'fm_7'" >D602 TO METdANOL STORAGE TANK</th>
                    <th style="border:1px solid black;" v-if="val_1[13] == 'fm_8'" >D402-D501</th>
                    <th style="border:1px solid black;" v-if="val_1[13] == 'fm_9'" >D501-T501</th>
                    <th style="border:1px solid black;" v-if="val_1[13] == 'fm_10'" >T501-T502</th>
                    <th style="border:1px solid black;" v-if="val_1[13] == 'fm_11'" >TAR TRANSFER</th>
                    <th style="border:1px solid black;" v-if="val_1[13] == 'fm_12'" >RECYCLE TO D405 LINE</th>
                    <th style="border:1px solid black;" v-if="val_1[13] == 'fm_13'" >BIODIESEL TO STORAGE</th>
                    <th style="border:1px solid black;" v-if="val_1[13] == 'fm_14'" >D403 INTO T601</th>
                    <th style="border:1px solid black;" v-if="val_1[13] == 'fm_15'" >T601-D602</th>
                    <th style="border:1px solid black;" v-if="val_1[13] == 'fm_16'" >T601 TO REFLUX</th>
                    <th style="border:1px solid black;" v-if="val_1[13] == 'fm_17'" >T601 DRAIN</th>
                    <th style="border:1px solid black;" v-if="val_1[13] == 'fm_18'" >METdANOL INTO GST 1 AND 2</th>
                    <th style="border:1px solid black;" v-if="val_1[13] == 'fm_19'" >METdANOL INTO PPRA AND B</th>
                    <th style="border:1px solid black;" v-if="val_1[13] == 'fm_20'" >METdANOL INTO GLV</th>
                    <th style="border:1px solid black;" v-if="val_1[13] == 'fm_21'" >METdANOL INTO TRANS</th>
                    <th style="border:1px solid black;" v-if="val_1[13] == 'fm_22'" >BIODIESEL STORAGE TO TRUCK</th>
                    <th style="border:1px solid black;" v-if="val_1[13] == 'fm_23'" >RAW MATERIAL OFFLOADING</th>
                    <th style="border:1px solid black;" v-if="val_1[13] == 'fm_24'" >RAW MATERIAL TO SETTLING TANK</th>
                    <th style="border:1px solid black;" v-if="val_1[13] == 'fm_25'" >SETTLING TANK TO D101</th>
                    <th style="border:1px solid black;" v-if="val_1[13] == 'fm_26'" >CT OUTLET</th>
                    <th style="border:1px solid black;" v-if="val_1[13] == 'fm_27'" >CT INLET</th>
                    <th style="border:1px solid black;" v-if="val_1[13] == 'ft_1'" >FT TRANS OIL</th>
                    <th style="border:1px solid black;" v-if="val_1[13] == 'ft_2'" >FT ALKALI TRANS</th>
                    <th style="border:1px solid black;" v-if="val_1[13] == 'ft_3'" >FT TRANS EVAPORATOR TO NI</th>
                    <th style="border:1px solid black;" v-if="val_1[13] == 'ft_4'" >FT WATER N1</th>
                    <th style="border:1px solid black;" v-if="val_1[13] == 'ft_5'" >FT N2 TO D402</th>
                    <th style="border:1px solid black;" v-if="val_1[13] == 'ft_6'" >FT N3 TO  SLAGPOOL</th>
                    <th style="border:1px solid black;" v-if="val_1[13] == 'ft_7'" >FT D602 TO METdANOL STORAGE TANK</th>
                    <th style="border:1px solid black;" v-if="val_1[13] == 'ft_8'" >FT D402-D501</th>
                    <th style="border:1px solid black;" v-if="val_1[13] == 'ft_9'" >FT D501-T501</th>
                    <th style="border:1px solid black;" v-if="val_1[13] == 'ft_10'" >FT T501-T502</th>
                    <th style="border:1px solid black;" v-if="val_1[13] == 'ft_11'" >FT TAR TRANSFER</th>
                    <th style="border:1px solid black;" v-if="val_1[13] == 'ft_12'" >FT RECYCLE TO D405</th>
                    <th style="border:1px solid black;" v-if="val_1[13] == 'ft_13'" >FT BIODIESEL TO STORAGE</th>
                    <th style="border:1px solid black;" v-if="val_1[13] == 'ft_14'" >FT D403 INTO T601</th>
                    <th style="border:1px solid black;" v-if="val_1[13] == 'ft_15'" >FT T601-D602</th>
                    <th style="border:1px solid black;" v-if="val_1[13] == 'ft_16'" >FT T601 TO REFLUX</th>
                    <th style="border:1px solid black;" v-if="val_1[13] == 'ft_17'" >FT T601 DRAIN</th>
                    <th style="border:1px solid black;" v-if="val_1[13] == 'ft_18'" >FT METdANOL INTO GST 1 AND 2</th>
                    <th style="border:1px solid black;" v-if="val_1[13] == 'ft_19'" >FT 19</th>
                    <th style="border:1px solid black;" v-if="val_1[13] == 'ft_20'" >FT METdANOL INTO GLV</th>
                    <th style="border:1px solid black;" v-if="val_1[13] == 'ft_21'" >FT METdANOL  INTO TRANS</th>
                    <th style="border:1px solid black;" v-if="val_1[13] == 'ft_22'" >FT BIODIESEL STORAGE TO TRUCK</th>
                    <th style="border:1px solid black;" v-if="val_1[13] == 'ft_23'" >FT RAW MATERIAL OFFLOADING</th>
                    <th style="border:1px solid black;" v-if="val_1[13] == 'ft_24'" >FT RAW MATERIAL TO SETTLING TANK</th>
                    <th style="border:1px solid black;" v-if="val_1[13] == 'ft_25'" >FT SETTLING TANK TO D101</th>
                    <th style="border:1px solid black;" v-if="val_1[13] == 'ft_26'" >FT CT OUTLET</th>
                    <th style="border:1px solid black;" v-if="val_1[13] == 'ft_27'" >FT CT INLET</th>
                    <th style="border:1px solid black;" v-if="val_1[13] == 'pt_1'" >PT 1</th>
                    <th style="border:1px solid black;" v-if="val_1[13] == 'pt_2'" >PT 2</th>
                    <th style="border:1px solid black;" v-if="val_1[13] == 'pt_3'" >PT 3</th>
                    <th style="border:1px solid black;" v-if="val_1[13] == 'pt_4'" >PT 4</th>
                    <th style="border:1px solid black;" v-if="val_1[13] == 'pt_5'" >Dist Header</th>
                    <th style="border:1px solid black;" v-if="val_1[13] == 'vg_1'" >Vac Line</th>
                    <th style="border:1px solid black;" v-if="val_1[13] == 'vg_2'" >VG 2</th>
                    <th style="border:1px solid black;" v-if="val_1[13] == 'vg_3'" >VG 3</th>
                    <th style="border:1px solid black;" v-if="val_1[13] == 'fm1_den'" >DEN (Trans Oil)</th>
<th style="border:1px solid black;" v-if="val_1[13] == 'fm2_den'" >DEN( Alkali Trans)</th>
<th style="border:1px solid black;" v-if="val_1[13] == 'fm3_den'" >DEN (Trans Evaporator to NI)</th>
<th style="border:1px solid black;" v-if="val_1[13] == 'fm4_den'" >DEN (Water N1)</th>
<th style="border:1px solid black;" v-if="val_1[13] == 'fm5_den'" >DEN (N2 to D402)</th>
<th style="border:1px solid black;" v-if="val_1[13] == 'fm6_den'" >DEN (N3 to Slag pool)</th>
<th style="border:1px solid black;" v-if="val_1[13] == 'fm7_den'" >DEN (D602to Metdanol Storage Tank)</th>
<th style="border:1px solid black;" v-if="val_1[13] == 'fm8_den'" >DEN (D402-D501)</th>
<th style="border:1px solid black;" v-if="val_1[13] == 'fm9_den'" >DEN (D501-T501)</th>
<th style="border:1px solid black;" v-if="val_1[13] == 'fm10_den'" >DEN (T501-T502)</th>
<th style="border:1px solid black;" v-if="val_1[13] == 'fm11_den'" >DEN (Tar Transfer)</th>
<th style="border:1px solid black;" v-if="val_1[13] == 'fm12_den'" >DEN (Recycle to D405 Line)</th>
<th style="border:1px solid black;" v-if="val_1[13] == 'fm13_den'" >DEN (Biodiesel to Storage)</th>
<th style="border:1px solid black;" v-if="val_1[13] == 'fm14_den'" >DEN (D403 into T601)</th>
<th style="border:1px solid black;" v-if="val_1[13] == 'fm15_den'" >DEN (T601 to D602) </th>
<th style="border:1px solid black;" v-if="val_1[13] == 'fm16_den'" >DEN (T601 to Reflux)</th>
<th style="border:1px solid black;" v-if="val_1[13] == 'fm17_den'" >DEN (T601 Drain)</th>
<th style="border:1px solid black;" v-if="val_1[13] == 'fm18_den'" >DEN (Matdanol into GST 1 and 2)</th>
<th style="border:1px solid black;" v-if="val_1[13] == 'fm19_den'" >DEN (Metdanol into PPRA and B)</th>
<th style="border:1px solid black;" v-if="val_1[13] == 'fm20_den'" >DEN (Matdanol into GLV)</th>
<th style="border:1px solid black;" v-if="val_1[13] == 'fm21_den'" >DEN (Metdanol into Trans)</th>
<th style="border:1px solid black;" v-if="val_1[13] == 'fm22_den'" >DEN (Biodiesel Storage to Truck)</th>
<th style="border:1px solid black;" v-if="val_1[13] == 'fm23_den'" >DEN (Raw Material Offloading)</th>
<th style="border:1px solid black;" v-if="val_1[13] == 'fm24_den'" >DEN (Raw Metarial to Settling Tank)</th>
<th style="border:1px solid black;" v-if="val_1[13] == 'fm25_den'" >DEN (Settling Tank to D101)</th>
<th style="border:1px solid black;" v-if="val_1[13] == 'fm26_den'" >DEN (CT Outlet)</th>
<th style="border:1px solid black;" v-if="val_1[13] == 'fm27_den'" >DEN (CT Inlet)</th>
<th style="border:1px solid black;" v-if="val_1[13] == 'fm1_temp'" >TEMP (Trans Oil)</th>
<th style="border:1px solid black;" v-if="val_1[13] == 'fm2_temp'" >TEMP( Alkali Trans)</th>
<th style="border:1px solid black;" v-if="val_1[13] == 'fm3_temp'" >TEMP (Trans Evaporator to NI)</th>
<th style="border:1px solid black;" v-if="val_1[13] == 'fm4_temp'" >TEMP (Water N1)</th>
<th style="border:1px solid black;" v-if="val_1[13] == 'fm5_temp'" >TEMP (N2 to D402)</th>
<th style="border:1px solid black;" v-if="val_1[13] == 'fm6_temp'" >TEMP (N3 to Slag pool)</th>
<th style="border:1px solid black;" v-if="val_1[13] == 'fm7_temp'" >TEMP (D602to Metdanol Storage Tank)</th>
<th style="border:1px solid black;" v-if="val_1[13] == 'fm8_temp'" >TEMP (D402-D501)</th>
<th style="border:1px solid black;" v-if="val_1[13] == 'fm9_temp'" >TEMP (D501-T501)</th>
<th style="border:1px solid black;" v-if="val_1[13] == 'fm10_temp'" >TEMP (T501-T502)</th>
<th style="border:1px solid black;" v-if="val_1[13] == 'fm11_temp'" >TEMP (Tar Transfer)</th>
<th style="border:1px solid black;" v-if="val_1[13] == 'fm12_temp'" >TEMP (Recycle to D405 Line)</th>
<th style="border:1px solid black;" v-if="val_1[13] == 'fm13_temp'" >TEMP (Biodiesel to Storage)</th>
<th style="border:1px solid black;" v-if="val_1[13] == 'fm14_temp'" >TEMP (D403 into T601)</th>
<th style="border:1px solid black;" v-if="val_1[13] == 'fm13_temp'" >TEMP (T601 to D602) </th>
<th style="border:1px solid black;" v-if="val_1[13] == 'fm16_temp'" >TEMP (T601 to Reflux)</th>
<th style="border:1px solid black;" v-if="val_1[13] == 'fm17_temp'" >TEMP (T601 Drain)</th>
<th style="border:1px solid black;" v-if="val_1[13] == 'fm18_temp'" >TEMP (Matdanol into GST 1 and 2)</th>
<th style="border:1px solid black;" v-if="val_1[13] == 'fm19_temp'" >TEMP (Metdanol into PPRA and B)</th>
<th style="border:1px solid black;" v-if="val_1[13] == 'fm20_temp'" >TEMP (Matdanol into GLV)</th>
<th style="border:1px solid black;" v-if="val_1[13] == 'fm21_temp'" >TEMP (Metdanol into Trans)</th>
<th style="border:1px solid black;" v-if="val_1[13] == 'fm22_temp'" >TEMP (Biodiesel Storage to Truck)</th>
<th style="border:1px solid black;" v-if="val_1[13] == 'fm23_temp'" >TEMP (Raw Material Offloading)</th>
<th style="border:1px solid black;" v-if="val_1[13] == 'fm24_temp'" >TEMP (Raw Metarial to Settling Tank)</th>
<th style="border:1px solid black;" v-if="val_1[13] == 'fm25_temp'" >TEMP (Settling Tank to D101)</th>
<th style="border:1px solid black;" v-if="val_1[13] == 'fm26_temp'" >TEMP (CT Outlet)</th>
<th style="border:1px solid black;" v-if="val_1[13] == 'fm27_temp'" >TEMP (CT Inlet)</th>
                    <th style="border:1px solid black;" v-if="val_1[13] == 'rdl_32'" >GST-2-L</th>
                    <th style="border:1px solid black;" v-if="val_1[13] == 'vr_32'" >GST-2-V</th>
                    <th style="border:1px solid black;" v-if="val_1[13] == 'rtd_42'" >GST-2-T</th>
                    <th style="border:1px solid black;" v-if="val_1[13] == 'fm_45'" >(Metdanol Transfer)</th>
                    <th style="border:1px solid black;" v-if="val_1[13] == 'ft_45'" >FT (Metdanol Transfer)</th>
                    <th style="border:1px solid black;" v-if="val_1[13] == 'fm45_den'" >DEN (Metdanol Transfer)</th>
                    <th style="border:1px solid black;" v-if="val_1[13] == 'fm45_temp'" >TEMP (Metdanol Transfer)</th>
                    <th style="border:1px solid black;" v-if="val_1[13] == 'fm_62'" >(RVP)</th>
                    <th style="border:1px solid black;" v-if="val_1[13] == 'ft_62'" >FT (RVP)</th>
                    <th style="border:1px solid black;" v-if="val_1[13] == 'fm_66'" >(Milky)</th>
                    <th style="border:1px solid black;" v-if="val_1[13] == 'ft_66'" >FT (Milky)</th>

                    <th style="border:1px solid black;" v-if="val_1[14] == 'st_fm2_flow'">Main Steam</th>
                    <th style="border:1px solid black;" v-if="val_1[14] == 'stfm2_flow_tot'">Total Flow</th>
                    <th style="border:1px solid black;" v-if="val_1[14] == 'stfm2_temp'">Temp</th>
                    <th style="border:1px solid black;" v-if="val_1[14] == 'stfm2_pressure'">Pressure</th>

                    <th style="border:1px solid black;" v-if="val_1[14] == 'st_fm1_flow'">Steam to E401</th>
                    <th style="border:1px solid black;" v-if="val_1[14] == 'stfm1_flow_tot'">Total Flow</th>
                    <th style="border:1px solid black;" v-if="val_1[14] == 'stfm1_temp'">Temp</th>
                    <th style="border:1px solid black;" v-if="val_1[14] == 'stfm1_pressure'">Pressure</th>

                    <th style="border:1px solid black;" v-if="val_1[14] == 'rdl_1'" >D101A-L</th>
                    <th style="border:1px solid black;" v-if="val_1[14] == 'vr_1'" >D101A-V</th>
                    <th style="border:1px solid black;" v-if="val_1[14] == 'rdl_2'" >D101B-L</th>
                    <th style="border:1px solid black;" v-if="val_1[14] == 'vr_2'" >D101B-V</th>
                    <th style="border:1px solid black;" v-if="val_1[14] == 'rdl_3'" >D405A-L</th>
                    <th style="border:1px solid black;" v-if="val_1[14] == 'vr_3'" >D405A-V</th>
                    <th style="border:1px solid black;" v-if="val_1[14] == 'rdl_4'" >D405B-L</th>
                    <th style="border:1px solid black;" v-if="val_1[14] == 'vr_4'" >D405B-V</th>
                    <th style="border:1px solid black;" v-if="val_1[14] == 'rdl_5'" >D405C-L</th>
                    <th style="border:1px solid black;" v-if="val_1[14] == 'vr_5'" >D405C-V</th>
                    <th style="border:1px solid black;" v-if="val_1[14] == 'rdl_6'" >C401A-L</th>
                    <th style="border:1px solid black;" v-if="val_1[14] == 'vr_6'" >C401A-V</th>
                    <th style="border:1px solid black;" v-if="val_1[14] == 'rdl_7'" >C401B-L</th>
                    <th style="border:1px solid black;" v-if="val_1[14] == 'vr_7'" >C401B-V</th>
                    <th style="border:1px solid black;" v-if="val_1[14] == 'rdl_8'" >D402A-L</th>
                    <th style="border:1px solid black;" v-if="val_1[14] == 'vr_8'" >D402A-V</th>
                    <th style="border:1px solid black;" v-if="val_1[14] == 'rdl_9'" >D402B-L</th>
                    <th style="border:1px solid black;" v-if="val_1[14] == 'vr_9'" >D402B-V</th>
                    <th style="border:1px solid black;" v-if="val_1[14] == 'rdl_10'" >D402C-L</th>
                    <th style="border:1px solid black;" v-if="val_1[14] == 'vr_10'" >D402C-V</th>
                    <th style="border:1px solid black;" v-if="val_1[14] == 'rdl_11'" >D402D-L</th>
                    <th style="border:1px solid black;" v-if="val_1[14] == 'vr_11'" >D402D-V</th>
                    <th style="border:1px solid black;" v-if="val_1[14] == 'rdl_12'" >GLV-L</th>
                    <th style="border:1px solid black;" v-if="val_1[14] == 'vr_12'" >GLV-V</th>
                    <th style="border:1px solid black;" v-if="val_1[14] == 'rdl_13'" >SettlingA-L</th>
                    <th style="border:1px solid black;" v-if="val_1[14] == 'vr_13'" >SettlingA-V</th>
                    <th style="border:1px solid black;" v-if="val_1[14] == 'rdl_14'" >SettlingB-L</th>
                    <th style="border:1px solid black;" v-if="val_1[14] == 'vr_14'" >SettlingB-V</th>
                    <th style="border:1px solid black;" v-if="val_1[14] == 'rdl_15'" >SettlingC-L</th>
                    <th style="border:1px solid black;" v-if="val_1[14] == 'vr_15'" >SettlingC-V</th>
                    <th style="border:1px solid black;" v-if="val_1[14] == 'rdl_16'" >Metdanol T1-L</th>
                    <th style="border:1px solid black;" v-if="val_1[14] == 'vr_16'" >Metdanol T1-V</th>
                    <th style="border:1px solid black;" v-if="val_1[14] == 'rdl_17'" >Tar-L</th>
                    <th style="border:1px solid black;" v-if="val_1[14] == 'vr_17'" >Tar-V</th>
                    <th style="border:1px solid black;" v-if="val_1[14] == 'rdl_18'" >GST T1-L</th>
                    <th style="border:1px solid black;" v-if="val_1[14] == 'vr_18'" >GST T1-V</th>
                    <th style="border:1px solid black;" v-if="val_1[14] == 'rdl_19'" >Metdanol T2-L</th>
                    <th style="border:1px solid black;" v-if="val_1[14] == 'vr_19'" >Metdanol T2-V</th>
                    <th style="border:1px solid black;" v-if="val_1[14] == 'rdl_20'" >SP1-L</th>
                    <th style="border:1px solid black;" v-if="val_1[14] == 'vr_20'" >SP1-V</th>
                    <th style="border:1px solid black;" v-if="val_1[14] == 'rdl_21'" >SP2-L</th>
                    <th style="border:1px solid black;" v-if="val_1[14] == 'vr_21'" >SP2-V</th>
                    <th style="border:1px solid black;" v-if="val_1[14] == 'rdl_22'" >SP3-L</th>
                    <th style="border:1px solid black;" v-if="val_1[14] == 'vr_22'" >SP3-V</th>
                    <th style="border:1px solid black;" v-if="val_1[14] == 'rdl_23'" >PPRA-L</th>
                    <th style="border:1px solid black;" v-if="val_1[14] == 'vr_23'" >PPRA-V</th>
                    <th style="border:1px solid black;" v-if="val_1[14] == 'rdl_24'" >PPRB-L</th>
                    <th style="border:1px solid black;" v-if="val_1[14] == 'vr_24'" >PPRB-V</th>
                    <th style="border:1px solid black;" v-if="val_1[14] == 'rdl_25'" >H2SO4-L</th>
                    <th style="border:1px solid black;" v-if="val_1[14] == 'rdl25_volume'" >H2SO4-V</th>
                    <th style="border:1px solid black;" v-if="val_1[14] == 'rdl25_mass'" >Mass In Kg</th>
                    <th style="border:1px solid black;" v-if="val_1[14] == 'rtd_1'" >E101-T</th>
                    <th style="border:1px solid black;" v-if="val_1[14] == 'rtd_2'" >D101A-T</th>
                    <th style="border:1px solid black;" v-if="val_1[14] == 'rtd_3'" >D101B-T</th>
                    <th style="border:1px solid black;" v-if="val_1[14] == 'rtd_4'" >E201-T</th>
                    <th style="border:1px solid black;" v-if="val_1[14] == 'rtd_5'" >GLV-Top-T</th>
                    <th style="border:1px solid black;" v-if="val_1[14] == 'rtd_6'" >GLV-Mid-T</th>
                    <th style="border:1px solid black;" v-if="val_1[14] == 'rtd_7'" >GLV-BTM-T</th>
                    <th style="border:1px solid black;" v-if="val_1[14] == 'rtd_8'" >GLV-EVP-T</th>
                    <th style="border:1px solid black;" v-if="val_1[14] == 'rtd_9'" >SettlingA-T</th>
                    <th style="border:1px solid black;" v-if="val_1[14] == 'rtd_10'" >SettlingB-T</th>
                    <th style="border:1px solid black;" v-if="val_1[14] == 'rtd_11'" >SettlingC-T</th>
                    <th style="border:1px solid black;" v-if="val_1[14] == 'rtd_12'" >Hot Water-T</th>
                    <th style="border:1px solid black;" v-if="val_1[14] == 'rtd_13'" >D402A-T</th>
                    <th style="border:1px solid black;" v-if="val_1[14] == 'rtd_14'" >D402B-T</th>
                    <th style="border:1px solid black;" v-if="val_1[14] == 'rtd_15'" >D402C-T</th>
                    <th style="border:1px solid black;" v-if="val_1[14] == 'rtd_16'" >D402D-T</th>
                    <th style="border:1px solid black;" v-if="val_1[14] == 'rtd_17'" >Trans EVP-T</th>
                    <th style="border:1px solid black;" v-if="val_1[14] == 'rtd_18'" >Blue-T</th>
                    <th style="border:1px solid black;" v-if="val_1[14] == 'rtd_19'" >Green-T</th>
                    <th style="border:1px solid black;" v-if="val_1[14] == 'rtd_20'" >Old Green-T</th>
                    <th style="border:1px solid black;" v-if="val_1[14] == 'rtd_21'" >E601-T</th>
                    <th style="border:1px solid black;" v-if="val_1[14] == 'rtd_22'" >T601-Top-T</th>
                    <th style="border:1px solid black;" v-if="val_1[14] == 'rtd_23'" >T601-Mid-T</th>
                    <th style="border:1px solid black;" v-if="val_1[14] == 'rtd_24'" >T601-BTM-T</th>
                    <th style="border:1px solid black;" v-if="val_1[14] == 'rtd_25'" >E501</th>
                    <th style="border:1px solid black;" v-if="val_1[14] == 'rtd_26'" >D501</th>
                    <th style="border:1px solid black;" v-if="val_1[14] == 'rtd_27'" >T501-Top-T</th>
                    <th style="border:1px solid black;" v-if="val_1[14] == 'rtd_28'" >T501-Mid-T</th>
                    <th style="border:1px solid black;" v-if="val_1[14] == 'rtd_29'" >RTDT501-BTM-T</th>
                    <th style="border:1px solid black;" v-if="val_1[14] == 'rtd_30'" >T502-Mid-T</th>
                    <th style="border:1px solid black;" v-if="val_1[14] == 'rtd_31'" >T502-BTM-T</th>
                    <th style="border:1px solid black;" v-if="val_1[14] == 'rtd_32'" >PPRA-T</th>
                    <th style="border:1px solid black;" v-if="val_1[14] == 'rtd_33'" >PPRB-T</th>
                    <th style="border:1px solid black;" v-if="val_1[14] == 'rtd_34'" >GST T1-T</th>
                    <th style="border:1px solid black;" v-if="val_1[14] == 'rtd_35'" >Trans React-T</th>
                    <th style="border:1px solid black;" v-if="val_1[14] == 'rtd_36'" >Bio Storag-T</th>
                    <th style="border:1px solid black;" v-if="val_1[14] == 'rtd_37'" >Bio Transf-T</th>
                    <th style="border:1px solid black;" v-if="val_1[14] == 'dpl_1'" >D501-L</th>
                    <th style="border:1px solid black;" v-if="val_1[14] == 'vd_1'" >D501-V</th>
                    <th style="border:1px solid black;" v-if="val_1[14] == 'dpl_2'" >E401-L</th>
                    <th style="border:1px solid black;" v-if="val_1[14] == 'vd_2'" >E401-V</th>
                    <th style="border:1px solid black;" v-if="val_1[14] == 'dpl_3'" >T601-L</th>
                    <th style="border:1px solid black;" v-if="val_1[14] == 'vd_3'" >T601-V</th>
                    <th style="border:1px solid black;" v-if="val_1[14] == 'dpl_4'" >D503-L</th>
                    <th style="border:1px solid black;" v-if="val_1[14] == 'vd_4'" >D503-V</th>
                    <th style="border:1px solid black;" v-if="val_1[14] == 'dpl_5'" >D504-L</th>
                    <th style="border:1px solid black;" v-if="val_1[14] == 'vd_5'" >D504-V</th>
                    <th style="border:1px solid black;" v-if="val_1[14] == 'dpl_6'" >T501-L</th>
                    <th style="border:1px solid black;" v-if="val_1[14] == 'vd_6'" >T501-V</th>
                    <th style="border:1px solid black;" v-if="val_1[14] == 'dpl_7'" >T502-L</th>
                    <th style="border:1px solid black;" v-if="val_1[14] == 'vd_7'" >T502-V</th>
                    <th style="border:1px solid black;" v-if="val_1[14] == 'dpl_8'" >Bio Storage Tank-L</th>
                    <th style="border:1px solid black;" v-if="val_1[14] == 'vd_8'" >Bio Storage Tank-V</th>
                    <th style="border:1px solid black;" v-if="val_1[14] == 'fm_1'" >TRANS OIL</th>
                    <th style="border:1px solid black;" v-if="val_1[14] == 'fm_2'" >ALKALI TRANS</th>
                    <th style="border:1px solid black;" v-if="val_1[14] == 'fm_3'" >TRANS EVAPORATOR TO NI</th>
                    <th style="border:1px solid black;" v-if="val_1[14] == 'fm_4'" >WATER N1</th>
                    <th style="border:1px solid black;" v-if="val_1[14] == 'fm_5'" >N2 TO D402</th>
                    <th style="border:1px solid black;" v-if="val_1[14] == 'fm_6'" >N3 TO SLAGPOOL</th>
                    <th style="border:1px solid black;" v-if="val_1[14] == 'fm_7'" >D602 TO METdANOL STORAGE TANK</th>
                    <th style="border:1px solid black;" v-if="val_1[14] == 'fm_8'" >D402-D501</th>
                    <th style="border:1px solid black;" v-if="val_1[14] == 'fm_9'" >D501-T501</th>
                    <th style="border:1px solid black;" v-if="val_1[14] == 'fm_10'" >T501-T502</th>
                    <th style="border:1px solid black;" v-if="val_1[14] == 'fm_11'" >TAR TRANSFER</th>
                    <th style="border:1px solid black;" v-if="val_1[14] == 'fm_12'" >RECYCLE TO D405 LINE</th>
                    <th style="border:1px solid black;" v-if="val_1[14] == 'fm_13'" >BIODIESEL TO STORAGE</th>
                    <th style="border:1px solid black;" v-if="val_1[14] == 'fm_14'" >D403 INTO T601</th>
                    <th style="border:1px solid black;" v-if="val_1[14] == 'fm_15'" >T601-D602</th>
                    <th style="border:1px solid black;" v-if="val_1[14] == 'fm_16'" >T601 TO REFLUX</th>
                    <th style="border:1px solid black;" v-if="val_1[14] == 'fm_17'" >T601 DRAIN</th>
                    <th style="border:1px solid black;" v-if="val_1[14] == 'fm_18'" >METdANOL INTO GST 1 AND 2</th>
                    <th style="border:1px solid black;" v-if="val_1[14] == 'fm_19'" >METdANOL INTO PPRA AND B</th>
                    <th style="border:1px solid black;" v-if="val_1[14] == 'fm_20'" >METdANOL INTO GLV</th>
                    <th style="border:1px solid black;" v-if="val_1[14] == 'fm_21'" >METdANOL INTO TRANS</th>
                    <th style="border:1px solid black;" v-if="val_1[14] == 'fm_22'" >BIODIESEL STORAGE TO TRUCK</th>
                    <th style="border:1px solid black;" v-if="val_1[14] == 'fm_23'" >RAW MATERIAL OFFLOADING</th>
                    <th style="border:1px solid black;" v-if="val_1[14] == 'fm_24'" >RAW MATERIAL TO SETTLING TANK</th>
                    <th style="border:1px solid black;" v-if="val_1[14] == 'fm_25'" >SETTLING TANK TO D101</th>
                    <th style="border:1px solid black;" v-if="val_1[14] == 'fm_26'" >CT OUTLET</th>
                    <th style="border:1px solid black;" v-if="val_1[14] == 'fm_27'" >CT INLET</th>
                    <th style="border:1px solid black;" v-if="val_1[14] == 'ft_1'" >FT TRANS OIL</th>
                    <th style="border:1px solid black;" v-if="val_1[14] == 'ft_2'" >FT ALKALI TRANS</th>
                    <th style="border:1px solid black;" v-if="val_1[14] == 'ft_3'" >FT TRANS EVAPORATOR TO NI</th>
                    <th style="border:1px solid black;" v-if="val_1[14] == 'ft_4'" >FT WATER N1</th>
                    <th style="border:1px solid black;" v-if="val_1[14] == 'ft_5'" >FT N2 TO D402</th>
                    <th style="border:1px solid black;" v-if="val_1[14] == 'ft_6'" >FT N3 TO  SLAGPOOL</th>
                    <th style="border:1px solid black;" v-if="val_1[14] == 'ft_7'" >FT D602 TO METdANOL STORAGE TANK</th>
                    <th style="border:1px solid black;" v-if="val_1[14] == 'ft_8'" >FT D402-D501</th>
                    <th style="border:1px solid black;" v-if="val_1[14] == 'ft_9'" >FT D501-T501</th>
                    <th style="border:1px solid black;" v-if="val_1[14] == 'ft_10'" >FT T501-T502</th>
                    <th style="border:1px solid black;" v-if="val_1[14] == 'ft_11'" >FT TAR TRANSFER</th>
                    <th style="border:1px solid black;" v-if="val_1[14] == 'ft_12'" >FT RECYCLE TO D405</th>
                    <th style="border:1px solid black;" v-if="val_1[14] == 'ft_13'" >FT BIODIESEL TO STORAGE</th>
                    <th style="border:1px solid black;" v-if="val_1[14] == 'ft_14'" >FT D403 INTO T601</th>
                    <th style="border:1px solid black;" v-if="val_1[14] == 'ft_15'" >FT T601-D602</th>
                    <th style="border:1px solid black;" v-if="val_1[14] == 'ft_16'" >FT T601 TO REFLUX</th>
                    <th style="border:1px solid black;" v-if="val_1[14] == 'ft_17'" >FT T601 DRAIN</th>
                    <th style="border:1px solid black;" v-if="val_1[14] == 'ft_18'" >FT METdANOL INTO GST 1 AND 2</th>
                    <th style="border:1px solid black;" v-if="val_1[14] == 'ft_19'" >FT 19</th>
                    <th style="border:1px solid black;" v-if="val_1[14] == 'ft_20'" >FT METdANOL INTO GLV</th>
                    <th style="border:1px solid black;" v-if="val_1[14] == 'ft_21'" >FT METdANOL  INTO TRANS</th>
                    <th style="border:1px solid black;" v-if="val_1[14] == 'ft_22'" >FT BIODIESEL STORAGE TO TRUCK</th>
                    <th style="border:1px solid black;" v-if="val_1[14] == 'ft_23'" >FT RAW MATERIAL OFFLOADING</th>
                    <th style="border:1px solid black;" v-if="val_1[14] == 'ft_24'" >FT RAW MATERIAL TO SETTLING TANK</th>
                    <th style="border:1px solid black;" v-if="val_1[14] == 'ft_25'" >FT SETTLING TANK TO D101</th>
                    <th style="border:1px solid black;" v-if="val_1[14] == 'ft_26'" >FT CT OUTLET</th>
                    <th style="border:1px solid black;" v-if="val_1[14] == 'ft_27'" >FT CT INLET</th>
                    <th style="border:1px solid black;" v-if="val_1[14] == 'pt_1'" >PT 1</th>
                    <th style="border:1px solid black;" v-if="val_1[14] == 'pt_2'" >PT 2</th>
                    <th style="border:1px solid black;" v-if="val_1[14] == 'pt_3'" >PT 3</th>
                    <th style="border:1px solid black;" v-if="val_1[14] == 'pt_4'" >PT 4</th>
                    <th style="border:1px solid black;" v-if="val_1[14] == 'pt_5'" >Dist Header</th>
                    <th style="border:1px solid black;" v-if="val_1[14] == 'vg_1'" >Vac Line</th>
                    <th style="border:1px solid black;" v-if="val_1[14] == 'vg_2'" >VG 2</th>
                    <th style="border:1px solid black;" v-if="val_1[14] == 'vg_3'" >VG 3</th>
                    <th style="border:1px solid black;" v-if="val_1[14] == 'fm1_den'" >DEN (Trans Oil)</th>
<th style="border:1px solid black;" v-if="val_1[14] == 'fm2_den'" >DEN( Alkali Trans)</th>
<th style="border:1px solid black;" v-if="val_1[14] == 'fm3_den'" >DEN (Trans Evaporator to NI)</th>
<th style="border:1px solid black;" v-if="val_1[14] == 'fm4_den'" >DEN (Water N1)</th>
<th style="border:1px solid black;" v-if="val_1[14] == 'fm5_den'" >DEN (N2 to D402)</th>
<th style="border:1px solid black;" v-if="val_1[14] == 'fm6_den'" >DEN (N3 to Slag pool)</th>
<th style="border:1px solid black;" v-if="val_1[14] == 'fm7_den'" >DEN (D602to Metdanol Storage Tank)</th>
<th style="border:1px solid black;" v-if="val_1[14] == 'fm8_den'" >DEN (D402-D501)</th>
<th style="border:1px solid black;" v-if="val_1[14] == 'fm9_den'" >DEN (D501-T501)</th>
<th style="border:1px solid black;" v-if="val_1[14] == 'fm10_den'" >DEN (T501-T502)</th>
<th style="border:1px solid black;" v-if="val_1[14] == 'fm11_den'" >DEN (Tar Transfer)</th>
<th style="border:1px solid black;" v-if="val_1[14] == 'fm12_den'" >DEN (Recycle to D405 Line)</th>
<th style="border:1px solid black;" v-if="val_1[14] == 'fm13_den'" >DEN (Biodiesel to Storage)</th>
<th style="border:1px solid black;" v-if="val_1[14] == 'fm14_den'" >DEN (D403 into T601)</th>
<th style="border:1px solid black;" v-if="val_1[14] == 'fm15_den'" >DEN (T601 to D602) </th>
<th style="border:1px solid black;" v-if="val_1[14] == 'fm16_den'" >DEN (T601 to Reflux)</th>
<th style="border:1px solid black;" v-if="val_1[14] == 'fm17_den'" >DEN (T601 Drain)</th>
<th style="border:1px solid black;" v-if="val_1[14] == 'fm18_den'" >DEN (Matdanol into GST 1 and 2)</th>
<th style="border:1px solid black;" v-if="val_1[14] == 'fm19_den'" >DEN (Metdanol into PPRA and B)</th>
<th style="border:1px solid black;" v-if="val_1[14] == 'fm20_den'" >DEN (Matdanol into GLV)</th>
<th style="border:1px solid black;" v-if="val_1[14] == 'fm21_den'" >DEN (Metdanol into Trans)</th>
<th style="border:1px solid black;" v-if="val_1[14] == 'fm22_den'" >DEN (Biodiesel Storage to Truck)</th>
<th style="border:1px solid black;" v-if="val_1[14] == 'fm23_den'" >DEN (Raw Material Offloading)</th>
<th style="border:1px solid black;" v-if="val_1[14] == 'fm24_den'" >DEN (Raw Metarial to Settling Tank)</th>
<th style="border:1px solid black;" v-if="val_1[14] == 'fm25_den'" >DEN (Settling Tank to D101)</th>
<th style="border:1px solid black;" v-if="val_1[14] == 'fm26_den'" >DEN (CT Outlet)</th>
<th style="border:1px solid black;" v-if="val_1[14] == 'fm27_den'" >DEN (CT Inlet)</th>
<th style="border:1px solid black;" v-if="val_1[14] == 'fm1_temp'" >TEMP (Trans Oil)</th>
<th style="border:1px solid black;" v-if="val_1[14] == 'fm2_temp'" >TEMP( Alkali Trans)</th>
<th style="border:1px solid black;" v-if="val_1[14] == 'fm3_temp'" >TEMP (Trans Evaporator to NI)</th>
<th style="border:1px solid black;" v-if="val_1[14] == 'fm4_temp'" >TEMP (Water N1)</th>
<th style="border:1px solid black;" v-if="val_1[14] == 'fm5_temp'" >TEMP (N2 to D402)</th>
<th style="border:1px solid black;" v-if="val_1[14] == 'fm6_temp'" >TEMP (N3 to Slag pool)</th>
<th style="border:1px solid black;" v-if="val_1[14] == 'fm7_temp'" >TEMP (D602to Metdanol Storage Tank)</th>
<th style="border:1px solid black;" v-if="val_1[14] == 'fm8_temp'" >TEMP (D402-D501)</th>
<th style="border:1px solid black;" v-if="val_1[14] == 'fm9_temp'" >TEMP (D501-T501)</th>
<th style="border:1px solid black;" v-if="val_1[14] == 'fm10_temp'" >TEMP (T501-T502)</th>
<th style="border:1px solid black;" v-if="val_1[14] == 'fm11_temp'" >TEMP (Tar Transfer)</th>
<th style="border:1px solid black;" v-if="val_1[14] == 'fm12_temp'" >TEMP (Recycle to D405 Line)</th>
<th style="border:1px solid black;" v-if="val_1[14] == 'fm13_temp'" >TEMP (Biodiesel to Storage)</th>
<th style="border:1px solid black;" v-if="val_1[14] == 'fm14_temp'" >TEMP (D403 into T601)</th>
<th style="border:1px solid black;" v-if="val_1[14] == 'fm14_temp'" >TEMP (T601 to D602) </th>
<th style="border:1px solid black;" v-if="val_1[14] == 'fm16_temp'" >TEMP (T601 to Reflux)</th>
<th style="border:1px solid black;" v-if="val_1[14] == 'fm17_temp'" >TEMP (T601 Drain)</th>
<th style="border:1px solid black;" v-if="val_1[14] == 'fm18_temp'" >TEMP (Matdanol into GST 1 and 2)</th>
<th style="border:1px solid black;" v-if="val_1[14] == 'fm19_temp'" >TEMP (Metdanol into PPRA and B)</th>
<th style="border:1px solid black;" v-if="val_1[14] == 'fm20_temp'" >TEMP (Matdanol into GLV)</th>
<th style="border:1px solid black;" v-if="val_1[14] == 'fm21_temp'" >TEMP (Metdanol into Trans)</th>
<th style="border:1px solid black;" v-if="val_1[14] == 'fm22_temp'" >TEMP (Biodiesel Storage to Truck)</th>
<th style="border:1px solid black;" v-if="val_1[14] == 'fm23_temp'" >TEMP (Raw Material Offloading)</th>
<th style="border:1px solid black;" v-if="val_1[14] == 'fm24_temp'" >TEMP (Raw Metarial to Settling Tank)</th>
<th style="border:1px solid black;" v-if="val_1[14] == 'fm25_temp'" >TEMP (Settling Tank to D101)</th>
<th style="border:1px solid black;" v-if="val_1[14] == 'fm26_temp'" >TEMP (CT Outlet)</th>
<th style="border:1px solid black;" v-if="val_1[14] == 'fm27_temp'" >TEMP (CT Inlet)</th>
                    <th style="border:1px solid black;" v-if="val_1[14] == 'rdl_32'" >GST-2-L</th>
                    <th style="border:1px solid black;" v-if="val_1[14] == 'vr_32'" >GST-2-V</th>
                    <th style="border:1px solid black;" v-if="val_1[14] == 'rtd_42'" >GST-2-T</th>
                    <th style="border:1px solid black;" v-if="val_1[14] == 'fm_45'" >(Metdanol Transfer)</th>
                    <th style="border:1px solid black;" v-if="val_1[14] == 'ft_45'" >FT (Metdanol Transfer)</th>
                    <th style="border:1px solid black;" v-if="val_1[14] == 'fm45_den'" >DEN (Metdanol Transfer)</th>
                    <th style="border:1px solid black;" v-if="val_1[14] == 'fm45_temp'" >TEMP (Metdanol Transfer)</th>
                    <th style="border:1px solid black;" v-if="val_1[14] == 'fm_62'" >(RVP)</th>
                    <th style="border:1px solid black;" v-if="val_1[14] == 'ft_62'" >FT (RVP)</th>
                    <th style="border:1px solid black;" v-if="val_1[14] == 'fm_66'" >(Milky)</th>
                    <th style="border:1px solid black;" v-if="val_1[14] == 'ft_66'" >FT (Milky)</th>

                     <th style="border:1px solid black;" v-if="val_1[15] == 'st_fm2_flow'">Main Steam</th>
                    <th style="border:1px solid black;" v-if="val_1[15] == 'stfm2_flow_tot'">Total Flow</th>
                    <th style="border:1px solid black;" v-if="val_1[15] == 'stfm2_temp'">Temp</th>
                    <th style="border:1px solid black;" v-if="val_1[15] == 'stfm2_pressure'">Pressure</th>

                    <th style="border:1px solid black;" v-if="val_1[15] == 'st_fm1_flow'">Steam to E401</th>
                    <th style="border:1px solid black;" v-if="val_1[15] == 'stfm1_flow_tot'">Total Flow</th>
                    <th style="border:1px solid black;" v-if="val_1[15] == 'stfm1_temp'">Temp</th>
                    <th style="border:1px solid black;" v-if="val_1[15] == 'stfm1_pressure'">Pressure</th>

                    <th style="border:1px solid black;" v-if="val_1[15] == 'rdl_1'" >D101A-L</th>
                    <th style="border:1px solid black;" v-if="val_1[15] == 'vr_1'" >D101A-V</th>
                    <th style="border:1px solid black;" v-if="val_1[15] == 'rdl_2'" >D101B-L</th>
                    <th style="border:1px solid black;" v-if="val_1[15] == 'vr_2'" >D101B-V</th>
                    <th style="border:1px solid black;" v-if="val_1[15] == 'rdl_3'" >D405A-L</th>
                    <th style="border:1px solid black;" v-if="val_1[15] == 'vr_3'" >D405A-V</th>
                    <th style="border:1px solid black;" v-if="val_1[15] == 'rdl_4'" >D405B-L</th>
                    <th style="border:1px solid black;" v-if="val_1[15] == 'vr_4'" >D405B-V</th>
                    <th style="border:1px solid black;" v-if="val_1[15] == 'rdl_5'" >D405C-L</th>
                    <th style="border:1px solid black;" v-if="val_1[15] == 'vr_5'" >D405C-V</th>
                    <th style="border:1px solid black;" v-if="val_1[15] == 'rdl_6'" >C401A-L</th>
                    <th style="border:1px solid black;" v-if="val_1[15] == 'vr_6'" >C401A-V</th>
                    <th style="border:1px solid black;" v-if="val_1[15] == 'rdl_7'" >C401B-L</th>
                    <th style="border:1px solid black;" v-if="val_1[15] == 'vr_7'" >C401B-V</th>
                    <th style="border:1px solid black;" v-if="val_1[15] == 'rdl_8'" >D402A-L</th>
                    <th style="border:1px solid black;" v-if="val_1[15] == 'vr_8'" >D402A-V</th>
                    <th style="border:1px solid black;" v-if="val_1[15] == 'rdl_9'" >D402B-L</th>
                    <th style="border:1px solid black;" v-if="val_1[15] == 'vr_9'" >D402B-V</th>
                    <th style="border:1px solid black;" v-if="val_1[15] == 'rdl_10'" >D402C-L</th>
                    <th style="border:1px solid black;" v-if="val_1[15] == 'vr_10'" >D402C-V</th>
                    <th style="border:1px solid black;" v-if="val_1[15] == 'rdl_11'" >D402D-L</th>
                    <th style="border:1px solid black;" v-if="val_1[15] == 'vr_11'" >D402D-V</th>
                    <th style="border:1px solid black;" v-if="val_1[15] == 'rdl_12'" >GLV-L</th>
                    <th style="border:1px solid black;" v-if="val_1[15] == 'vr_12'" >GLV-V</th>
                    <th style="border:1px solid black;" v-if="val_1[15] == 'rdl_13'" >SettlingA-L</th>
                    <th style="border:1px solid black;" v-if="val_1[15] == 'vr_13'" >SettlingA-V</th>
                    <th style="border:1px solid black;" v-if="val_1[15] == 'rdl_14'" >SettlingB-L</th>
                    <th style="border:1px solid black;" v-if="val_1[15] == 'vr_14'" >SettlingB-V</th>
                    <th style="border:1px solid black;" v-if="val_1[15] == 'rdl_15'" >SettlingC-L</th>
                    <th style="border:1px solid black;" v-if="val_1[15] == 'vr_15'" >SettlingC-V</th>
                    <th style="border:1px solid black;" v-if="val_1[15] == 'rdl_16'" >Metdanol T1-L</th>
                    <th style="border:1px solid black;" v-if="val_1[15] == 'vr_16'" >Metdanol T1-V</th>
                    <th style="border:1px solid black;" v-if="val_1[15] == 'rdl_17'" >Tar-L</th>
                    <th style="border:1px solid black;" v-if="val_1[15] == 'vr_17'" >Tar-V</th>
                    <th style="border:1px solid black;" v-if="val_1[15] == 'rdl_18'" >GST T1-L</th>
                    <th style="border:1px solid black;" v-if="val_1[15] == 'vr_18'" >GST T1-V</th>
                    <th style="border:1px solid black;" v-if="val_1[15] == 'rdl_19'" >Metdanol T2-L</th>
                    <th style="border:1px solid black;" v-if="val_1[15] == 'vr_19'" >Metdanol T2-V</th>
                    <th style="border:1px solid black;" v-if="val_1[15] == 'rdl_20'" >SP1-L</th>
                    <th style="border:1px solid black;" v-if="val_1[15] == 'vr_20'" >SP1-V</th>
                    <th style="border:1px solid black;" v-if="val_1[15] == 'rdl_21'" >SP2-L</th>
                    <th style="border:1px solid black;" v-if="val_1[15] == 'vr_21'" >SP2-V</th>
                    <th style="border:1px solid black;" v-if="val_1[15] == 'rdl_22'" >SP3-L</th>
                    <th style="border:1px solid black;" v-if="val_1[15] == 'vr_22'" >SP3-V</th>
                    <th style="border:1px solid black;" v-if="val_1[15] == 'rdl_23'" >PPRA-L</th>
                    <th style="border:1px solid black;" v-if="val_1[15] == 'vr_23'" >PPRA-V</th>
                    <th style="border:1px solid black;" v-if="val_1[15] == 'rdl_24'" >PPRB-L</th>
                    <th style="border:1px solid black;" v-if="val_1[15] == 'vr_24'" >PPRB-V</th>
                    <th style="border:1px solid black;" v-if="val_1[15] == 'rdl_25'" >H2SO4-L</th>
                    <th style="border:1px solid black;" v-if="val_1[15] == 'rdl25_volume'" >H2SO4-V</th>
                    <th style="border:1px solid black;" v-if="val_1[15] == 'rdl25_mass'" >Mass In Kg</th>
                    <th style="border:1px solid black;" v-if="val_1[15] == 'rtd_1'" >E101-T</th>
                    <th style="border:1px solid black;" v-if="val_1[15] == 'rtd_2'" >D101A-T</th>
                    <th style="border:1px solid black;" v-if="val_1[15] == 'rtd_3'" >D101B-T</th>
                    <th style="border:1px solid black;" v-if="val_1[15] == 'rtd_4'" >E201-T</th>
                    <th style="border:1px solid black;" v-if="val_1[15] == 'rtd_5'" >GLV-Top-T</th>
                    <th style="border:1px solid black;" v-if="val_1[15] == 'rtd_6'" >GLV-Mid-T</th>
                    <th style="border:1px solid black;" v-if="val_1[15] == 'rtd_7'" >GLV-BTM-T</th>
                    <th style="border:1px solid black;" v-if="val_1[15] == 'rtd_8'" >GLV-EVP-T</th>
                    <th style="border:1px solid black;" v-if="val_1[15] == 'rtd_9'" >SettlingA-T</th>
                    <th style="border:1px solid black;" v-if="val_1[15] == 'rtd_10'" >SettlingB-T</th>
                    <th style="border:1px solid black;" v-if="val_1[15] == 'rtd_11'" >SettlingC-T</th>
                    <th style="border:1px solid black;" v-if="val_1[15] == 'rtd_12'" >Hot Water-T</th>
                    <th style="border:1px solid black;" v-if="val_1[15] == 'rtd_13'" >D402A-T</th>
                    <th style="border:1px solid black;" v-if="val_1[15] == 'rtd_14'" >D402B-T</th>
                    <th style="border:1px solid black;" v-if="val_1[15] == 'rtd_15'" >D402C-T</th>
                    <th style="border:1px solid black;" v-if="val_1[15] == 'rtd_16'" >D402D-T</th>
                    <th style="border:1px solid black;" v-if="val_1[15] == 'rtd_17'" >Trans EVP-T</th>
                    <th style="border:1px solid black;" v-if="val_1[15] == 'rtd_18'" >Blue-T</th>
                    <th style="border:1px solid black;" v-if="val_1[15] == 'rtd_19'" >Green-T</th>
                    <th style="border:1px solid black;" v-if="val_1[15] == 'rtd_20'" >Old Green-T</th>
                    <th style="border:1px solid black;" v-if="val_1[15] == 'rtd_21'" >E601-T</th>
                    <th style="border:1px solid black;" v-if="val_1[15] == 'rtd_22'" >T601-Top-T</th>
                    <th style="border:1px solid black;" v-if="val_1[15] == 'rtd_23'" >T601-Mid-T</th>
                    <th style="border:1px solid black;" v-if="val_1[15] == 'rtd_24'" >T601-BTM-T</th>
                    <th style="border:1px solid black;" v-if="val_1[15] == 'rtd_25'" >E501</th>
                    <th style="border:1px solid black;" v-if="val_1[15] == 'rtd_26'" >D501</th>
                    <th style="border:1px solid black;" v-if="val_1[15] == 'rtd_27'" >T501-Top-T</th>
                    <th style="border:1px solid black;" v-if="val_1[15] == 'rtd_28'" >T501-Mid-T</th>
                    <th style="border:1px solid black;" v-if="val_1[15] == 'rtd_29'" >RTDT501-BTM-T</th>
                    <th style="border:1px solid black;" v-if="val_1[15] == 'rtd_30'" >T502-Mid-T</th>
                    <th style="border:1px solid black;" v-if="val_1[15] == 'rtd_31'" >T502-BTM-T</th>
                    <th style="border:1px solid black;" v-if="val_1[15] == 'rtd_32'" >PPRA-T</th>
                    <th style="border:1px solid black;" v-if="val_1[15] == 'rtd_33'" >PPRB-T</th>
                    <th style="border:1px solid black;" v-if="val_1[15] == 'rtd_34'" >GST T1-T</th>
                    <th style="border:1px solid black;" v-if="val_1[15] == 'rtd_35'" >Trans React-T</th>
                    <th style="border:1px solid black;" v-if="val_1[15] == 'rtd_36'" >Bio Storag-T</th>
                    <th style="border:1px solid black;" v-if="val_1[15] == 'rtd_37'" >Bio Transf-T</th>
                    <th style="border:1px solid black;" v-if="val_1[15] == 'dpl_1'" >D501-L</th>
                    <th style="border:1px solid black;" v-if="val_1[15] == 'vd_1'" >D501-V</th>
                    <th style="border:1px solid black;" v-if="val_1[15] == 'dpl_2'" >E401-L</th>
                    <th style="border:1px solid black;" v-if="val_1[15] == 'vd_2'" >E401-V</th>
                    <th style="border:1px solid black;" v-if="val_1[15] == 'dpl_3'" >T601-L</th>
                    <th style="border:1px solid black;" v-if="val_1[15] == 'vd_3'" >T601-V</th>
                    <th style="border:1px solid black;" v-if="val_1[15] == 'dpl_4'" >D503-L</th>
                    <th style="border:1px solid black;" v-if="val_1[15] == 'vd_4'" >D503-V</th>
                    <th style="border:1px solid black;" v-if="val_1[15] == 'dpl_5'" >D504-L</th>
                    <th style="border:1px solid black;" v-if="val_1[15] == 'vd_5'" >D504-V</th>
                    <th style="border:1px solid black;" v-if="val_1[15] == 'dpl_6'" >T501-L</th>
                    <th style="border:1px solid black;" v-if="val_1[15] == 'vd_6'" >T501-V</th>
                    <th style="border:1px solid black;" v-if="val_1[15] == 'dpl_7'" >T502-L</th>
                    <th style="border:1px solid black;" v-if="val_1[15] == 'vd_7'" >T502-V</th>
                    <th style="border:1px solid black;" v-if="val_1[15] == 'dpl_8'" >Bio Storage Tank-L</th>
                    <th style="border:1px solid black;" v-if="val_1[15] == 'vd_8'" >Bio Storage Tank-V</th>
                    <th style="border:1px solid black;" v-if="val_1[15] == 'fm_1'" >TRANS OIL</th>
                    <th style="border:1px solid black;" v-if="val_1[15] == 'fm_2'" >ALKALI TRANS</th>
                    <th style="border:1px solid black;" v-if="val_1[15] == 'fm_3'" >TRANS EVAPORATOR TO NI</th>
                    <th style="border:1px solid black;" v-if="val_1[15] == 'fm_4'" >WATER N1</th>
                    <th style="border:1px solid black;" v-if="val_1[15] == 'fm_5'" >N2 TO D402</th>
                    <th style="border:1px solid black;" v-if="val_1[15] == 'fm_6'" >N3 TO SLAGPOOL</th>
                    <th style="border:1px solid black;" v-if="val_1[15] == 'fm_7'" >D602 TO METdANOL STORAGE TANK</th>
                    <th style="border:1px solid black;" v-if="val_1[15] == 'fm_8'" >D402-D501</th>
                    <th style="border:1px solid black;" v-if="val_1[15] == 'fm_9'" >D501-T501</th>
                    <th style="border:1px solid black;" v-if="val_1[15] == 'fm_10'" >T501-T502</th>
                    <th style="border:1px solid black;" v-if="val_1[15] == 'fm_11'" >TAR TRANSFER</th>
                    <th style="border:1px solid black;" v-if="val_1[15] == 'fm_12'" >RECYCLE TO D405 LINE</th>
                    <th style="border:1px solid black;" v-if="val_1[15] == 'fm_13'" >BIODIESEL TO STORAGE</th>
                    <th style="border:1px solid black;" v-if="val_1[15] == 'fm_14'" >D403 INTO T601</th>
                    <th style="border:1px solid black;" v-if="val_1[15] == 'fm_15'" >T601-D602</th>
                    <th style="border:1px solid black;" v-if="val_1[15] == 'fm_16'" >T601 TO REFLUX</th>
                    <th style="border:1px solid black;" v-if="val_1[15] == 'fm_17'" >T601 DRAIN</th>
                    <th style="border:1px solid black;" v-if="val_1[15] == 'fm_18'" >METdANOL INTO GST 1 AND 2</th>
                    <th style="border:1px solid black;" v-if="val_1[15] == 'fm_19'" >METdANOL INTO PPRA AND B</th>
                    <th style="border:1px solid black;" v-if="val_1[15] == 'fm_20'" >METdANOL INTO GLV</th>
                    <th style="border:1px solid black;" v-if="val_1[15] == 'fm_21'" >METdANOL INTO TRANS</th>
                    <th style="border:1px solid black;" v-if="val_1[15] == 'fm_22'" >BIODIESEL STORAGE TO TRUCK</th>
                    <th style="border:1px solid black;" v-if="val_1[15] == 'fm_23'" >RAW MATERIAL OFFLOADING</th>
                    <th style="border:1px solid black;" v-if="val_1[15] == 'fm_24'" >RAW MATERIAL TO SETTLING TANK</th>
                    <th style="border:1px solid black;" v-if="val_1[15] == 'fm_25'" >SETTLING TANK TO D101</th>
                    <th style="border:1px solid black;" v-if="val_1[15] == 'fm_26'" >CT OUTLET</th>
                    <th style="border:1px solid black;" v-if="val_1[15] == 'fm_27'" >CT INLET</th>
                    <th style="border:1px solid black;" v-if="val_1[15] == 'ft_1'" >FT TRANS OIL</th>
                    <th style="border:1px solid black;" v-if="val_1[15] == 'ft_2'" >FT ALKALI TRANS</th>
                    <th style="border:1px solid black;" v-if="val_1[15] == 'ft_3'" >FT TRANS EVAPORATOR TO NI</th>
                    <th style="border:1px solid black;" v-if="val_1[15] == 'ft_4'" >FT WATER N1</th>
                    <th style="border:1px solid black;" v-if="val_1[15] == 'ft_5'" >FT N2 TO D402</th>
                    <th style="border:1px solid black;" v-if="val_1[15] == 'ft_6'" >FT N3 TO  SLAGPOOL</th>
                    <th style="border:1px solid black;" v-if="val_1[15] == 'ft_7'" >FT D602 TO METdANOL STORAGE TANK</th>
                    <th style="border:1px solid black;" v-if="val_1[15] == 'ft_8'" >FT D402-D501</th>
                    <th style="border:1px solid black;" v-if="val_1[15] == 'ft_9'" >FT D501-T501</th>
                    <th style="border:1px solid black;" v-if="val_1[15] == 'ft_10'" >FT T501-T502</th>
                    <th style="border:1px solid black;" v-if="val_1[15] == 'ft_11'" >FT TAR TRANSFER</th>
                    <th style="border:1px solid black;" v-if="val_1[15] == 'ft_12'" >FT RECYCLE TO D405</th>
                    <th style="border:1px solid black;" v-if="val_1[15] == 'ft_13'" >FT BIODIESEL TO STORAGE</th>
                    <th style="border:1px solid black;" v-if="val_1[15] == 'ft_14'" >FT D403 INTO T601</th>
                    <th style="border:1px solid black;" v-if="val_1[15] == 'ft_15'" >FT T601-D602</th>
                    <th style="border:1px solid black;" v-if="val_1[15] == 'ft_16'" >FT T601 TO REFLUX</th>
                    <th style="border:1px solid black;" v-if="val_1[15] == 'ft_17'" >FT T601 DRAIN</th>
                    <th style="border:1px solid black;" v-if="val_1[15] == 'ft_18'" >FT METdANOL INTO GST 1 AND 2</th>
                    <th style="border:1px solid black;" v-if="val_1[15] == 'ft_19'" >FT 19</th>
                    <th style="border:1px solid black;" v-if="val_1[15] == 'ft_20'" >FT METdANOL INTO GLV</th>
                    <th style="border:1px solid black;" v-if="val_1[15] == 'ft_21'" >FT METdANOL  INTO TRANS</th>
                    <th style="border:1px solid black;" v-if="val_1[15] == 'ft_22'" >FT BIODIESEL STORAGE TO TRUCK</th>
                    <th style="border:1px solid black;" v-if="val_1[15] == 'ft_23'" >FT RAW MATERIAL OFFLOADING</th>
                    <th style="border:1px solid black;" v-if="val_1[15] == 'ft_24'" >FT RAW MATERIAL TO SETTLING TANK</th>
                    <th style="border:1px solid black;" v-if="val_1[15] == 'ft_25'" >FT SETTLING TANK TO D101</th>
                    <th style="border:1px solid black;" v-if="val_1[15] == 'ft_26'" >FT CT OUTLET</th>
                    <th style="border:1px solid black;" v-if="val_1[15] == 'ft_27'" >FT CT INLET</th>
                    <th style="border:1px solid black;" v-if="val_1[15] == 'pt_1'" >PT 1</th>
                    <th style="border:1px solid black;" v-if="val_1[15] == 'pt_2'" >PT 2</th>
                    <th style="border:1px solid black;" v-if="val_1[15] == 'pt_3'" >PT 3</th>
                    <th style="border:1px solid black;" v-if="val_1[15] == 'pt_4'" >PT 4</th>
                    <th style="border:1px solid black;" v-if="val_1[15] == 'pt_5'" >Dist Header</th>
                    <th style="border:1px solid black;" v-if="val_1[15] == 'vg_1'" >Vac Line</th>
                    <th style="border:1px solid black;" v-if="val_1[15] == 'vg_2'" >VG 2</th>
                    <th style="border:1px solid black;" v-if="val_1[15] == 'vg_3'" >VG 3</th>
                    <th style="border:1px solid black;" v-if="val_1[15] == 'fm1_den'" >DEN (Trans Oil)</th>
<th style="border:1px solid black;" v-if="val_1[15] == 'fm2_den'" >DEN( Alkali Trans)</th>
<th style="border:1px solid black;" v-if="val_1[15] == 'fm3_den'" >DEN (Trans Evaporator to NI)</th>
<th style="border:1px solid black;" v-if="val_1[15] == 'fm4_den'" >DEN (Water N1)</th>
<th style="border:1px solid black;" v-if="val_1[15] == 'fm5_den'" >DEN (N2 to D402)</th>
<th style="border:1px solid black;" v-if="val_1[15] == 'fm6_den'" >DEN (N3 to Slag pool)</th>
<th style="border:1px solid black;" v-if="val_1[15] == 'fm7_den'" >DEN (D602to Metdanol Storage Tank)</th>
<th style="border:1px solid black;" v-if="val_1[15] == 'fm8_den'" >DEN (D402-D501)</th>
<th style="border:1px solid black;" v-if="val_1[15] == 'fm9_den'" >DEN (D501-T501)</th>
<th style="border:1px solid black;" v-if="val_1[15] == 'fm10_den'" >DEN (T501-T502)</th>
<th style="border:1px solid black;" v-if="val_1[15] == 'fm11_den'" >DEN (Tar Transfer)</th>
<th style="border:1px solid black;" v-if="val_1[15] == 'fm12_den'" >DEN (Recycle to D405 Line)</th>
<th style="border:1px solid black;" v-if="val_1[15] == 'fm13_den'" >DEN (Biodiesel to Storage)</th>
<th style="border:1px solid black;" v-if="val_1[15] == 'fm14_den'" >DEN (D403 into T601)</th>
<th style="border:1px solid black;" v-if="val_1[15] == 'fm15_den'" >DEN (T601 to D602) </th>
<th style="border:1px solid black;" v-if="val_1[15] == 'fm16_den'" >DEN (T601 to Reflux)</th>
<th style="border:1px solid black;" v-if="val_1[15] == 'fm17_den'" >DEN (T601 Drain)</th>
<th style="border:1px solid black;" v-if="val_1[15] == 'fm18_den'" >DEN (Matdanol into GST 1 and 2)</th>
<th style="border:1px solid black;" v-if="val_1[15] == 'fm19_den'" >DEN (Metdanol into PPRA and B)</th>
<th style="border:1px solid black;" v-if="val_1[15] == 'fm20_den'" >DEN (Matdanol into GLV)</th>
<th style="border:1px solid black;" v-if="val_1[15] == 'fm21_den'" >DEN (Metdanol into Trans)</th>
<th style="border:1px solid black;" v-if="val_1[15] == 'fm22_den'" >DEN (Biodiesel Storage to Truck)</th>
<th style="border:1px solid black;" v-if="val_1[15] == 'fm23_den'" >DEN (Raw Material Offloading)</th>
<th style="border:1px solid black;" v-if="val_1[15] == 'fm24_den'" >DEN (Raw Metarial to Settling Tank)</th>
<th style="border:1px solid black;" v-if="val_1[15] == 'fm25_den'" >DEN (Settling Tank to D101)</th>
<th style="border:1px solid black;" v-if="val_1[15] == 'fm26_den'" >DEN (CT Outlet)</th>
<th style="border:1px solid black;" v-if="val_1[15] == 'fm27_den'" >DEN (CT Inlet)</th>
<th style="border:1px solid black;" v-if="val_1[15] == 'fm1_temp'" >TEMP (Trans Oil)</th>
<th style="border:1px solid black;" v-if="val_1[15] == 'fm2_temp'" >TEMP( Alkali Trans)</th>
<th style="border:1px solid black;" v-if="val_1[15] == 'fm3_temp'" >TEMP (Trans Evaporator to NI)</th>
<th style="border:1px solid black;" v-if="val_1[15] == 'fm4_temp'" >TEMP (Water N1)</th>
<th style="border:1px solid black;" v-if="val_1[15] == 'fm5_temp'" >TEMP (N2 to D402)</th>
<th style="border:1px solid black;" v-if="val_1[15] == 'fm6_temp'" >TEMP (N3 to Slag pool)</th>
<th style="border:1px solid black;" v-if="val_1[15] == 'fm7_temp'" >TEMP (D602to Metdanol Storage Tank)</th>
<th style="border:1px solid black;" v-if="val_1[15] == 'fm8_temp'" >TEMP (D402-D501)</th>
<th style="border:1px solid black;" v-if="val_1[15] == 'fm9_temp'" >TEMP (D501-T501)</th>
<th style="border:1px solid black;" v-if="val_1[15] == 'fm10_temp'" >TEMP (T501-T502)</th>
<th style="border:1px solid black;" v-if="val_1[15] == 'fm11_temp'" >TEMP (Tar Transfer)</th>
<th style="border:1px solid black;" v-if="val_1[15] == 'fm12_temp'" >TEMP (Recycle to D405 Line)</th>
<th style="border:1px solid black;" v-if="val_1[15] == 'fm13_temp'" >TEMP (Biodiesel to Storage)</th>
<th style="border:1px solid black;" v-if="val_1[15] == 'fm14_temp'" >TEMP (D403 into T601)</th>
<th style="border:1px solid black;" v-if="val_1[15] == 'fm15_temp'" >TEMP (T601 to D602) </th>
<th style="border:1px solid black;" v-if="val_1[15] == 'fm16_temp'" >TEMP (T601 to Reflux)</th>
<th style="border:1px solid black;" v-if="val_1[15] == 'fm17_temp'" >TEMP (T601 Drain)</th>
<th style="border:1px solid black;" v-if="val_1[15] == 'fm18_temp'" >TEMP (Matdanol into GST 1 and 2)</th>
<th style="border:1px solid black;" v-if="val_1[15] == 'fm19_temp'" >TEMP (Metdanol into PPRA and B)</th>
<th style="border:1px solid black;" v-if="val_1[15] == 'fm20_temp'" >TEMP (Matdanol into GLV)</th>
<th style="border:1px solid black;" v-if="val_1[15] == 'fm21_temp'" >TEMP (Metdanol into Trans)</th>
<th style="border:1px solid black;" v-if="val_1[15] == 'fm22_temp'" >TEMP (Biodiesel Storage to Truck)</th>
<th style="border:1px solid black;" v-if="val_1[15] == 'fm23_temp'" >TEMP (Raw Material Offloading)</th>
<th style="border:1px solid black;" v-if="val_1[15] == 'fm24_temp'" >TEMP (Raw Metarial to Settling Tank)</th>
<th style="border:1px solid black;" v-if="val_1[15] == 'fm25_temp'" >TEMP (Settling Tank to D101)</th>
<th style="border:1px solid black;" v-if="val_1[15] == 'fm26_temp'" >TEMP (CT Outlet)</th>
<th style="border:1px solid black;" v-if="val_1[15] == 'fm27_temp'" >TEMP (CT Inlet)</th>
                    <th style="border:1px solid black;" v-if="val_1[15] == 'rdl_32'" >GST-2-L</th>
                    <th style="border:1px solid black;" v-if="val_1[15] == 'vr_32'" >GST-2-V</th>
                    <th style="border:1px solid black;" v-if="val_1[15] == 'rtd_42'" >GST-2-T</th>
                    <th style="border:1px solid black;" v-if="val_1[15] == 'fm_45'" >(Metdanol Transfer)</th>
                    <th style="border:1px solid black;" v-if="val_1[15] == 'ft_45'" >FT (Metdanol Transfer)</th>
                    <th style="border:1px solid black;" v-if="val_1[15] == 'fm45_den'" >DEN (Metdanol Transfer)</th>
                    <th style="border:1px solid black;" v-if="val_1[15] == 'fm45_temp'" >TEMP (Metdanol Transfer)</th>
                    <th style="border:1px solid black;" v-if="val_1[15] == 'fm_62'" >(RVP)</th>
                    <th style="border:1px solid black;" v-if="val_1[15] == 'ft_62'" >FT (RVP)</th>
                    <th style="border:1px solid black;" v-if="val_1[15] == 'fm_66'" >(Milky)</th>
                    <th style="border:1px solid black;" v-if="val_1[15] == 'ft_66'" >FT (Milky)</th>
                </tr>
                <tr v-if="rdl1 !=''">
                    <th style="border:1px solid black;">Minmum Value</th>
                    <td style="border:1px solid black;" >{{Math.min.apply(Math, rdl1)}}</td>
                    <td style="border:1px solid black;" v-if="rdl2 !=''">{{Math.min.apply(Math, rdl2)}}</td>
                    <td style="border:1px solid black;" v-if="rdl3 !=''">{{Math.min.apply(Math, rdl3)}}</td>
                    <td style="border:1px solid black;" v-if="rdl4 !=''">{{Math.min.apply(Math, rdl4)}}</td>
                    <td style="border:1px solid black;" v-if="rdl5 !=''">{{Math.min.apply(Math, rdl5)}}</td>
                    <td style="border:1px solid black;" v-if="rdl6 !=''">{{Math.min.apply(Math, rdl6)}}</td>
                    <td style="border:1px solid black;" v-if="rdl7 !=''">{{Math.min.apply(Math, rdl7)}}</td>
                    <td style="border:1px solid black;" v-if="rdl8 !=''">{{Math.min.apply(Math, rdl8)}}</td>
                    <td style="border:1px solid black;" v-if="rdl9 !=''">{{Math.min.apply(Math, rdl9)}}</td>
                    <td style="border:1px solid black;" v-if="rdl10 !=''">{{Math.min.apply(Math, rdl10)}}</td>
                    <td style="border:1px solid black;" v-if="rdl11 !=''">{{Math.min.apply(Math, rdl11)}}</td>
                    <td style="border:1px solid black;" v-if="rdl12 !=''">{{Math.min.apply(Math, rdl12)}}</td>
                    <td style="border:1px solid black;" v-if="rdl13 !=''">{{Math.min.apply(Math, rdl13)}}</td>
                    <td style="border:1px solid black;" v-if="rdl14 !=''">{{Math.min.apply(Math, rdl14)}}</td>
                    <td style="border:1px solid black;" v-if="rdl15 !=''">{{Math.min.apply(Math, rdl15)}}</td>
                    <td style="border:1px solid black;" v-if="rdl16 !=''">{{Math.min.apply(Math, rdl16)}}</td>
                </tr>
                <tr v-if="rdl1 !=''">
                    <th style="border:1px solid black;">Maximum Value</th>
                    <td style="border:1px solid black;">{{Math.max.apply(Math, rdl1)}}</td>
                    <td style="border:1px solid black;" v-if="rdl2 !=''">{{parseFloat(Math.max.apply(Math, rdl2)).toFixed(2)}}</td>
                    <td style="border:1px solid black;" v-if="rdl3 !=''">{{parseFloat(Math.max.apply(Math, rdl3)).toFixed(2)}}</td>
                    <td style="border:1px solid black;" v-if="rdl4 !=''">{{parseFloat(Math.max.apply(Math, rdl4)).toFixed(2)}}</td>
                    <td style="border:1px solid black;" v-if="rdl5 !=''">{{parseFloat(Math.max.apply(Math, rdl5)).toFixed(2)}}</td>
                    <td style="border:1px solid black;" v-if="rdl6 !=''">{{parseFloat(Math.max.apply(Math, rdl6)).toFixed(2)}}</td>
                    <td style="border:1px solid black;" v-if="rdl7 !=''">{{parseFloat(Math.max.apply(Math, rdl7)).toFixed(2)}}</td>
                    <td style="border:1px solid black;" v-if="rdl8 !=''">{{parseFloat(Math.max.apply(Math, rdl8)).toFixed(2)}}</td>
                    <td style="border:1px solid black;" v-if="rdl9 !=''">{{parseFloat(Math.max.apply(Math, rdl9)).toFixed(2)}}</td>
                    <td style="border:1px solid black;" v-if="rdl10 !=''">{{parseFloat(Math.max.apply(Math, rdl10)).toFixed(2)}}</td>
                    <td style="border:1px solid black;" v-if="rdl11 !=''">{{parseFloat(Math.max.apply(Math, rdl11)).toFixed(2)}}</td>
                    <td style="border:1px solid black;" v-if="rdl12 !=''">{{parseFloat(Math.max.apply(Math, rdl12)).toFixed(2)}}</td>
                    <td style="border:1px solid black;" v-if="rdl13 !=''">{{parseFloat(Math.max.apply(Math, rdl13)).toFixed(2)}}</td>
                    <td style="border:1px solid black;" v-if="rdl14 !=''">{{parseFloat(Math.max.apply(Math, rdl14)).toFixed(2)}}</td>
                    <td style="border:1px solid black;" v-if="rdl15 !=''">{{parseFloat(Math.max.apply(Math, rdl15)).toFixed(2)}}</td>
                    <td style="border:1px solid black;" v-if="rdl16 !=''">{{parseFloat(Math.max.apply(Math, rdl16)).toFixed(2)}}</td>
                </tr>
                <tr v-if="rdl1 !=''">
                    <th style="border:1px solid black;">Average Value</th>
                    <td style="border:1px solid black;" >{{ parseFloat(total1/rdl1.length ).toFixed(2) }}</td>
                    <td style="border:1px solid black;" v-if="rdl2 !=''">{{parseFloat((total2)/rdl2.length).toFixed(2)}}</td>
                    <td style="border:1px solid black;" v-if="rdl3 !=''">{{parseFloat((total3)/rdl3.length).toFixed(2)}}</td>
                    <td style="border:1px solid black;" v-if="rdl4 !=''">{{parseFloat((total4)/rdl4.length).toFixed(2)}}</td>
                    <td style="border:1px solid black;" v-if="rdl5 !=''">{{parseFloat((total5)/rdl5.length).toFixed(2)}}</td>
                    <td style="border:1px solid black;" v-if="rdl6 !=''">{{parseFloat((total6)/rdl6.length).toFixed(2)}}</td>
                    <td style="border:1px solid black;" v-if="rdl7 !=''">{{parseFloat((total7)/rdl7.length).toFixed(2)}}</td>
                    <td style="border:1px solid black;" v-if="rdl8 !=''">{{parseFloat((total8)/rdl8.length).toFixed(2)}}</td>
                    <td style="border:1px solid black;" v-if="rdl9 !=''">{{parseFloat((total9)/rdl9.length).toFixed(2)}}</td>
                    <td style="border:1px solid black;" v-if="rdl10 !=''">{{parseFloat((total10)/rdl10.length).toFixed(2)}}</td>
                    <td style="border:1px solid black;" v-if="rdl11 !=''">{{parseFloat((total11)/rdl11.length).toFixed(2)}}</td>
                    <td style="border:1px solid black;" v-if="rdl12 !=''">{{parseFloat((total12)/rdl12.length).toFixed(2)}}</td>
                    <td style="border:1px solid black;" v-if="rdl13 !=''">{{parseFloat((total13)/rdl13.length).toFixed(2)}}</td>
                    <td style="border:1px solid black;" v-if="rdl14 !=''">{{parseFloat((total14)/rdl14.length).toFixed(2)}}</td>
                    <td style="border:1px solid black;" v-if="rdl15 !=''">{{parseFloat((total15)/rdl15.length).toFixed(2)}}</td>
                    <td style="border:1px solid black;" v-if="rdl16 !=''">{{parseFloat((total16)/rdl16.length).toFixed(2)}}</td>
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
    name: "MultireportAvg",
    data() {

        role_id:'this.$store.getters.currentUser.role'
        return {
            filter_range:'y',
            timing: 3,
            setInterval:'60',
            val_1:[],
            rdl1:[],rdl2:[],rdl3:[],rdl4:[],rdl5:[],rdl6:[],rdl7:[],rdl8:[],rdl9:[],rdl10:[],rdl11:[],rdl12:[],rdl13:[],rdl14:[],rdl15:[],rdl16:[],

            total1:0,total2:0,total3:0,total4:0,total5:0,total6:0,total7:0,total8:0,total9:0,total10:0,total11:0,total12:0,total13:0,total14:0,total15:0,total16:0,

            valume_total1:0,valume_total2:0,valume_total3:0,valume_total4:0,valume_total5:0,valume_total6:0,valume_total7:0,valume_total8:0,valume_total9:0,valume_total10:0,
            valume_total11:0,valume_total12:0,valume_total13:0,valume_total14:0,valume_total15:0,valume_total16:0,

            startdate:'',
            enddate:'',
            select_record_option:[],
            select_record:[],
            select_db_record: '',
            db_val_1: [],db_val_2: [],db_val_3: [],db_val_4: [],db_val_5: [],db_val_6: [],db_val_7: [],db_val_8: [],db_val_9: [],db_val_10: [],db_val_11: [],
            db_val_12: [],db_val_13: [],db_val_14: [],db_val_15: [],db_val_16: [],
            disable: false,
            user_role_s: this.$store.getters.currentUser.role,


            // Filter Variables

            newarr1:[],newarr2:[],newarr3:[],newarr4:[],newarr5:[],newarr6:[],newarr7:[],newarr8:[],newarr9:[],newarr10:[],newarr11:[],newarr12:[],
            newarr13:[],newarr14:[],newarr15:[],newarr16:[],

            wozero1:0,wozero2:0,wozero3:0,wozero4:0,wozero5:0,wozero6:0,wozero7:0,wozero8:0,wozero9:0,wozero10:0,
            wozero11:0,wozero12:0,wozero13:0,wozero14:0,wozero15:0,wozero16:0,

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
        this.getData();
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

        submit() {
            this.disable = true;
             axios.post('api/showaverage',[this.val_1,this.setInterval,this.timing,this.startdate,this.enddate,this.filter_range], {headers: {'Authorization': 'Bearer ' + this.currentUser.token }})
                .then((response) => {
                    this.db_val_1 = response.data.val_1
                    this.db_val_2 = response.data.get_range

                    var neww1='';var neww2='';var neww3='';var neww4='';var neww5='';var neww6='';var neww7='';var neww8='';var neww9='';var neww10='';
                    var neww11='';var neww12='';var neww13='';var neww14='';var neww15='';var neww16='';

                    if(this.val_1.length == 1){
                        neww1 = this.val_1[0];
                         for(var i=0; i<this.db_val_1.length; i++){
                            if(this.db_val_1[i].[neww1] == 0.00 || this.db_val_1[i].[neww1] == '-' || this.db_val_1[i].[neww1] == null){
                                
                            }else{
                                this.rdl1.push(this.db_val_1[i].[neww1])
                                this.total1 += parseFloat(this.db_val_1[i].[neww1])
                            }
                            }
                            if(this.rdl1 == ''){
                                this.rdl1 = ['0'];
                            }
                    }
                    else if (this.val_1.length == 2) {
                        neww1 = this.val_1[0];
                        neww2 = this.val_1[1];
                        for(let i=0; i<this.db_val_1.length; i++){
                            if(this.db_val_1[i].[neww1] == 0.00 || this.db_val_1[i].[neww1] == '-' || this.db_val_1[i].[neww1] == null){}else{
                                this.rdl1.push(this.db_val_1[i].[neww1])
                                this.total1 += parseFloat(this.db_val_1[i].[neww1])
                            }

                            if(this.db_val_1[i].[neww2] == 0.00 || this.db_val_1[i].[neww2] == '-' || this.db_val_1[i].[neww2] == null){}else{
                                this.rdl2.push(this.db_val_1[i].[neww2])
                                this.total2 += parseFloat(this.db_val_1[i].[neww2]) 
                            }
                            
                        }
                         if(this.rdl1 == ''){
                            this.rdl1 = ['0'];
                        }if(this.rdl2 == ''){
                            this.rdl2 = ['0'];
                        }
                    }
                    else if (this.val_1.length == 3) {
                        neww1 = this.val_1[0];
                        neww2 = this.val_1[1];
                        neww3 = this.val_1[2];
                        for(let i=0; i<this.db_val_1.length; i++){
                             if(this.db_val_1[i].[neww1] == 0.00 || this.db_val_1[i].[neww1] == '-' || this.db_val_1[i].[neww1] == null){}else{
                                this.rdl1.push(this.db_val_1[i].[neww1])
                                this.total1 += parseFloat(this.db_val_1[i].[neww1])
                            }
                            
                            
                            if(this.db_val_1[i].[neww2] == 0.00 || this.db_val_1[i].[neww2] == '-' || this.db_val_1[i].[neww2] == null){}else{
                                this.rdl2.push(this.db_val_1[i].[neww2])
                                this.total2 += parseFloat(this.db_val_1[i].[neww2])
                            }
                            

                            if(this.db_val_1[i].[neww3] == 0.00 || this.db_val_1[i].[neww3] == '-' || this.db_val_1[i].[neww3] == null){}else{
                                this.rdl3.push(this.db_val_1[i].[neww3])
                                this.total3 += parseFloat(this.db_val_1[i].[neww3])
                            }
                            
                        }
                         if(this.rdl1 == ''){
                            this.rdl1 = ['0'];
                        }if(this.rdl2 == ''){
                            this.rdl2 = ['0'];
                        }if(this.rdl3 == ''){
                            this.rdl3 = ['0'];
                        }
                    }
                    else if (this.val_1.length == 4) {
                        neww1 = this.val_1[0];
                        neww2 = this.val_1[1];
                        neww3 = this.val_1[2];
                        neww4 = this.val_1[3];
                        for(let i=0; i<this.db_val_1.length; i++){
                           if(this.db_val_1[i].[neww1] == 0.00 || this.db_val_1[i].[neww1] == '-' || this.db_val_1[i].[neww1] == null){}else{
                                this.rdl1.push(this.db_val_1[i].[neww1])
                                this.total1 += parseFloat(this.db_val_1[i].[neww1])
                            }
                            
                            
                            if(this.db_val_1[i].[neww2] == 0.00 || this.db_val_1[i].[neww2] == '-' || this.db_val_1[i].[neww2] == null){}else{
                                this.rdl2.push(this.db_val_1[i].[neww2])
                                this.total2 += parseFloat(this.db_val_1[i].[neww2])
                            }
                            

                            if(this.db_val_1[i].[neww3] == 0.00 || this.db_val_1[i].[neww3] == '-' || this.db_val_1[i].[neww3] == null){}else{
                                this.rdl3.push(this.db_val_1[i].[neww3])
                                this.total3 += parseFloat(this.db_val_1[i].[neww3])
                            }
                            

                            if(this.db_val_1[i].[neww4] == 0.00 || this.db_val_1[i].[neww4] == '-' || this.db_val_1[i].[neww4] == null){}else{
                                this.rdl4.push(this.db_val_1[i].[neww4])
                                this.total4 += parseFloat(this.db_val_1[i].[neww4])
                            }
                            
                        }
                         if(this.rdl1 == ''){
                            this.rdl1 = ['0'];
                        }if(this.rdl2 == ''){
                            this.rdl2 = ['0'];
                        }if(this.rdl3 == ''){
                            this.rdl3 = ['0'];
                        }if(this.rdl4 == ''){
                            this.rdl4 = ['0'];
                        }
                    }
                    else if (this.val_1.length == 5) {
                        neww1 = this.val_1[0];
                        neww2 = this.val_1[1];
                        neww3 = this.val_1[2];
                        neww4 = this.val_1[3];
                        neww5 = this.val_1[4];
                        for(let i=0; i<this.db_val_1.length; i++){
                            if(this.db_val_1[i].[neww1] == 0.00 || this.db_val_1[i].[neww1] == '-' || this.db_val_1[i].[neww1] == null){}else{
                                this.rdl1.push(this.db_val_1[i].[neww1])
                                this.total1 += parseFloat(this.db_val_1[i].[neww1])
                            }
                            
                            
                            if(this.db_val_1[i].[neww2] == 0.00 || this.db_val_1[i].[neww2] == '-' || this.db_val_1[i].[neww2] == null){}else{
                                this.rdl2.push(this.db_val_1[i].[neww2])
                                this.total2 += parseFloat(this.db_val_1[i].[neww2])
                            }
                            

                            if(this.db_val_1[i].[neww3] == 0.00 || this.db_val_1[i].[neww3] == '-' || this.db_val_1[i].[neww3] == null){}else{
                                this.rdl3.push(this.db_val_1[i].[neww3])
                                this.total3 += parseFloat(this.db_val_1[i].[neww3])
                            }
                            

                            if(this.db_val_1[i].[neww4] == 0.00 || this.db_val_1[i].[neww4] == '-' || this.db_val_1[i].[neww4] == null){}else{
                                this.rdl4.push(this.db_val_1[i].[neww4])
                                this.total4 += parseFloat(this.db_val_1[i].[neww4])
                            }
                            

                            if(this.db_val_1[i].[neww5] == 0.00 || this.db_val_1[i].[neww5] == '-' || this.db_val_1[i].[neww5] == null){}else{
                                this.rdl5.push(this.db_val_1[i].[neww5])
                                this.total5 += parseFloat(this.db_val_1[i].[neww5])
                            }
                            
                        }
                         if(this.rdl1 == ''){
                            this.rdl1 = ['0'];
                        }if(this.rdl2 == ''){
                            this.rdl2 = ['0'];
                        }if(this.rdl3 == ''){
                            this.rdl3 = ['0'];
                        }if(this.rdl4 == ''){
                            this.rdl4 = ['0'];
                        }if(this.rdl5 == ''){
                            this.rdl5 = ['0'];
                        }
                    }
                    else if (this.val_1.length == 6) {
                        neww1 = this.val_1[0];
                        neww2 = this.val_1[1];
                        neww3 = this.val_1[2];
                        neww4 = this.val_1[3];
                        neww5 = this.val_1[4];
                        neww6 = this.val_1[5];
                        for(let i=0; i<this.db_val_1.length; i++){
                            if(this.db_val_1[i].[neww1] == 0.00 || this.db_val_1[i].[neww1] == '-' || this.db_val_1[i].[neww1] == null){}else{
                                this.rdl1.push(this.db_val_1[i].[neww1])
                                this.total1 += parseFloat(this.db_val_1[i].[neww1])
                            }
                            
                            
                            if(this.db_val_1[i].[neww2] == 0.00 || this.db_val_1[i].[neww2] == '-' || this.db_val_1[i].[neww2] == null){}else{
                                this.rdl2.push(this.db_val_1[i].[neww2])
                                this.total2 += parseFloat(this.db_val_1[i].[neww2])
                            }
                            

                            if(this.db_val_1[i].[neww3] == 0.00 || this.db_val_1[i].[neww3] == '-' || this.db_val_1[i].[neww3] == null){}else{
                                this.rdl3.push(this.db_val_1[i].[neww3])
                                this.total3 += parseFloat(this.db_val_1[i].[neww3])
                            }
                            

                            if(this.db_val_1[i].[neww4] == 0.00 || this.db_val_1[i].[neww4] == '-' || this.db_val_1[i].[neww4] == null){}else{
                                this.rdl4.push(this.db_val_1[i].[neww4])
                                this.total4 += parseFloat(this.db_val_1[i].[neww4])
                            }
                            

                            if(this.db_val_1[i].[neww5] == 0.00 || this.db_val_1[i].[neww5] == '-' || this.db_val_1[i].[neww5] == null){}else{
                                this.rdl5.push(this.db_val_1[i].[neww5])
                                this.total5 += parseFloat(this.db_val_1[i].[neww5])
                            }
                            

                            if(this.db_val_1[i].[neww6] == 0.00 || this.db_val_1[i].[neww6] == '-' || this.db_val_1[i].[neww6] == null){}else{
                                this.rdl6.push(this.db_val_1[i].[neww6])
                                this.total6 += parseFloat(this.db_val_1[i].[neww6])
                            }
                            
                        }
                         if(this.rdl1 == ''){
                            this.rdl1 = ['0'];
                        }if(this.rdl2 == ''){
                            this.rdl2 = ['0'];
                        }if(this.rdl3 == ''){
                            this.rdl3 = ['0'];
                        }if(this.rdl4 == ''){
                            this.rdl4 = ['0'];
                        }if(this.rdl5 == ''){
                            this.rdl5 = ['0'];
                        }if(this.rdl6 == ''){
                            this.rdl6 = ['0'];
                        }
                    }
                    else if (this.val_1.length == 7) {
                        neww1 = this.val_1[0];
                        neww2 = this.val_1[1];
                        neww3 = this.val_1[2];
                        neww4 = this.val_1[3];
                        neww5 = this.val_1[4];
                        neww6 = this.val_1[5];
                        neww7 = this.val_1[6];
                        for(let i=0; i<this.db_val_1.length; i++){
                            if(this.db_val_1[i].[neww1] == 0.00 || this.db_val_1[i].[neww1] == '-' || this.db_val_1[i].[neww1] == null){}else{
                                this.rdl1.push(this.db_val_1[i].[neww1])
                                this.total1 += parseFloat(this.db_val_1[i].[neww1])
                            }
                            
                            
                            if(this.db_val_1[i].[neww2] == 0.00 || this.db_val_1[i].[neww2] == '-' || this.db_val_1[i].[neww2] == null){}else{
                                this.rdl2.push(this.db_val_1[i].[neww2])
                                this.total2 += parseFloat(this.db_val_1[i].[neww2])
                            }
                            

                            if(this.db_val_1[i].[neww3] == 0.00 || this.db_val_1[i].[neww3] == '-' || this.db_val_1[i].[neww3] == null){}else{
                                this.rdl3.push(this.db_val_1[i].[neww3])
                                this.total3 += parseFloat(this.db_val_1[i].[neww3])
                            }
                            

                            if(this.db_val_1[i].[neww4] == 0.00 || this.db_val_1[i].[neww4] == '-' || this.db_val_1[i].[neww4] == null){}else{
                                this.rdl4.push(this.db_val_1[i].[neww4])
                                this.total4 += parseFloat(this.db_val_1[i].[neww4])
                            }
                            

                            if(this.db_val_1[i].[neww5] == 0.00 || this.db_val_1[i].[neww5] == '-' || this.db_val_1[i].[neww5] == null){}else{
                                this.rdl5.push(this.db_val_1[i].[neww5])
                                this.total5 += parseFloat(this.db_val_1[i].[neww5])
                            }
                            

                            if(this.db_val_1[i].[neww6] == 0.00 || this.db_val_1[i].[neww6] == '-' || this.db_val_1[i].[neww6] == null){}else{
                                this.rdl6.push(this.db_val_1[i].[neww6])
                                this.total6 += parseFloat(this.db_val_1[i].[neww6])
                            }
                            

                            if(this.db_val_1[i].[neww7] == 0.00 || this.db_val_1[i].[neww7] == '-' || this.db_val_1[i].[neww7] == null){}else{
                                this.rdl7.push(this.db_val_1[i].[neww7])
                                this.total7 += parseFloat(this.db_val_1[i].[neww7])
                            }
                            
                        }
                         if(this.rdl1 == ''){
                            this.rdl1 = ['0'];
                        }if(this.rdl2 == ''){
                            this.rdl2 = ['0'];
                        }if(this.rdl3 == ''){
                            this.rdl3 = ['0'];
                        }if(this.rdl4 == ''){
                            this.rdl4 = ['0'];
                        }if(this.rdl5 == ''){
                            this.rdl5 = ['0'];
                        }if(this.rdl6 == ''){
                            this.rdl6 = ['0'];
                        }if(this.rdl7 == ''){
                            this.rdl7 = ['0'];
                        }
                    }
                    else if (this.val_1.length == 8) {
                        neww1 = this.val_1[0];
                        neww2 = this.val_1[1];
                        neww3 = this.val_1[2];
                        neww4 = this.val_1[3];
                        neww5 = this.val_1[4];
                        neww6 = this.val_1[5];
                        neww7 = this.val_1[6];
                        neww8 = this.val_1[7];
                        for(let i=0; i<this.db_val_1.length; i++){
                            if(this.db_val_1[i].[neww1] == 0.00 || this.db_val_1[i].[neww1] == '-' || this.db_val_1[i].[neww1] == null){}else{
                                this.rdl1.push(this.db_val_1[i].[neww1])
                                this.total1 += parseFloat(this.db_val_1[i].[neww1])
                            }
                            
                            
                            if(this.db_val_1[i].[neww2] == 0.00 || this.db_val_1[i].[neww2] == '-' || this.db_val_1[i].[neww2] == null){}else{
                                this.rdl2.push(this.db_val_1[i].[neww2])
                                this.total2 += parseFloat(this.db_val_1[i].[neww2])
                            }
                            

                            if(this.db_val_1[i].[neww3] == 0.00 || this.db_val_1[i].[neww3] == '-' || this.db_val_1[i].[neww3] == null){}else{
                                this.rdl3.push(this.db_val_1[i].[neww3])
                                this.total3 += parseFloat(this.db_val_1[i].[neww3])
                            }
                            

                            if(this.db_val_1[i].[neww4] == 0.00 || this.db_val_1[i].[neww4] == '-' || this.db_val_1[i].[neww4] == null){}else{
                                this.rdl4.push(this.db_val_1[i].[neww4])
                                this.total4 += parseFloat(this.db_val_1[i].[neww4])
                            }
                            

                            if(this.db_val_1[i].[neww5] == 0.00 || this.db_val_1[i].[neww5] == '-' || this.db_val_1[i].[neww5] == null){}else{
                                this.rdl5.push(this.db_val_1[i].[neww5])
                                this.total5 += parseFloat(this.db_val_1[i].[neww5])
                            }
                            

                            if(this.db_val_1[i].[neww6] == 0.00 || this.db_val_1[i].[neww6] == '-' || this.db_val_1[i].[neww6] == null){}else{
                                this.rdl6.push(this.db_val_1[i].[neww6])
                                this.total6 += parseFloat(this.db_val_1[i].[neww6])
                            }
                            

                            if(this.db_val_1[i].[neww7] == 0.00 || this.db_val_1[i].[neww7] == '-' || this.db_val_1[i].[neww7] == null){}else{
                                this.rdl7.push(this.db_val_1[i].[neww7])
                                this.total7 += parseFloat(this.db_val_1[i].[neww7])
                            }
                            

                            if(this.db_val_1[i].[neww8] == 0.00 || this.db_val_1[i].[neww8] == '-' || this.db_val_1[i].[neww8] == null){}else{
                                this.rdl8.push(this.db_val_1[i].[neww8])
                                this.total8 += parseFloat(this.db_val_1[i].[neww8])
                            }
                            
                        }
                         if(this.rdl1 == ''){
                            this.rdl1 = ['0'];
                        }if(this.rdl2 == ''){
                            this.rdl2 = ['0'];
                        }if(this.rdl3 == ''){
                            this.rdl3 = ['0'];
                        }if(this.rdl4 == ''){
                            this.rdl4 = ['0'];
                        }if(this.rdl5 == ''){
                            this.rdl5 = ['0'];
                        }if(this.rdl6 == ''){
                            this.rdl6 = ['0'];
                        }if(this.rdl7 == ''){
                            this.rdl7 = ['0'];
                        }if(this.rdl8 == ''){
                            this.rdl8 = ['0'];
                        }
                    }
                    else if (this.val_1.length == 9) {
                        neww1 = this.val_1[0];
                        neww2 = this.val_1[1];
                        neww3 = this.val_1[2];
                        neww4 = this.val_1[3];
                        neww5 = this.val_1[4];
                        neww6 = this.val_1[5];
                        neww7 = this.val_1[6];
                        neww8 = this.val_1[7];
                        neww9 = this.val_1[8];
                        for(let i=0; i<this.db_val_1.length; i++){
                            if(this.db_val_1[i].[neww1] == 0.00 || this.db_val_1[i].[neww1] == '-' || this.db_val_1[i].[neww1] == null){}else{
                                this.rdl1.push(this.db_val_1[i].[neww1])
                                this.total1 += parseFloat(this.db_val_1[i].[neww1])
                            }
                            
                            
                            if(this.db_val_1[i].[neww2] == 0.00 || this.db_val_1[i].[neww2] == '-' || this.db_val_1[i].[neww2] == null){}else{
                                this.rdl2.push(this.db_val_1[i].[neww2])
                                this.total2 += parseFloat(this.db_val_1[i].[neww2])
                            }
                            

                            if(this.db_val_1[i].[neww3] == 0.00 || this.db_val_1[i].[neww3] == '-' || this.db_val_1[i].[neww3] == null){}else{
                                this.rdl3.push(this.db_val_1[i].[neww3])
                                this.total3 += parseFloat(this.db_val_1[i].[neww3])
                            }
                            

                            if(this.db_val_1[i].[neww4] == 0.00 || this.db_val_1[i].[neww4] == '-' || this.db_val_1[i].[neww4] == null){}else{
                                this.rdl4.push(this.db_val_1[i].[neww4])
                                this.total4 += parseFloat(this.db_val_1[i].[neww4])
                            }
                            

                            if(this.db_val_1[i].[neww5] == 0.00 || this.db_val_1[i].[neww5] == '-' || this.db_val_1[i].[neww5] == null){}else{
                                this.rdl5.push(this.db_val_1[i].[neww5])
                                this.total5 += parseFloat(this.db_val_1[i].[neww5])
                            }
                            

                            if(this.db_val_1[i].[neww6] == 0.00 || this.db_val_1[i].[neww6] == '-' || this.db_val_1[i].[neww6] == null){}else{
                                this.rdl6.push(this.db_val_1[i].[neww6])
                                this.total6 += parseFloat(this.db_val_1[i].[neww6])
                            }
                            

                            if(this.db_val_1[i].[neww7] == 0.00 || this.db_val_1[i].[neww7] == '-' || this.db_val_1[i].[neww7] == null){}else{
                                this.rdl7.push(this.db_val_1[i].[neww7])
                                this.total7 += parseFloat(this.db_val_1[i].[neww7])
                            }
                            

                            if(this.db_val_1[i].[neww8] == 0.00 || this.db_val_1[i].[neww8] == '-' || this.db_val_1[i].[neww8] == null){}else{
                                this.rdl8.push(this.db_val_1[i].[neww8])
                                this.total8 += parseFloat(this.db_val_1[i].[neww8])
                            }
                            

                            if(this.db_val_1[i].[neww9] == 0.00 || this.db_val_1[i].[neww9] == '-' || this.db_val_1[i].[neww9] == null){}else{
                                this.rdl9.push(this.db_val_1[i].[neww9])
                                this.total9 += parseFloat(this.db_val_1[i].[neww9])
                            }
                            
                        }
                         if(this.rdl1 == ''){
                            this.rdl1 = ['0'];
                        }if(this.rdl2 == ''){
                            this.rdl2 = ['0'];
                        }if(this.rdl3 == ''){
                            this.rdl3 = ['0'];
                        }if(this.rdl4 == ''){
                            this.rdl4 = ['0'];
                        }if(this.rdl5 == ''){
                            this.rdl5 = ['0'];
                        }if(this.rdl6 == ''){
                            this.rdl6 = ['0'];
                        }if(this.rdl7 == ''){
                            this.rdl7 = ['0'];
                        }if(this.rdl8 == ''){
                            this.rdl8 = ['0'];
                        }if(this.rdl9 == ''){
                            this.rdl9 = ['0'];
                        }
                    }
                    else if (this.val_1.length == 10) {
                        neww1 = this.val_1[0];
                        neww2 = this.val_1[1];
                        neww3 = this.val_1[2];
                        neww4 = this.val_1[3];
                        neww5 = this.val_1[4];
                        neww6 = this.val_1[5];
                        neww7 = this.val_1[6];
                        neww8 = this.val_1[7];
                        neww9 = this.val_1[8];
                        neww10 = this.val_1[9];
                        for(let i=0; i<this.db_val_1.length; i++){
                            if(this.db_val_1[i].[neww1] == 0.00 || this.db_val_1[i].[neww1] == '-' || this.db_val_1[i].[neww1] == null){}else{
                                this.rdl1.push(this.db_val_1[i].[neww1])
                                this.total1 += parseFloat(this.db_val_1[i].[neww1])
                            }
                            
                            
                            if(this.db_val_1[i].[neww2] == 0.00 || this.db_val_1[i].[neww2] == '-' || this.db_val_1[i].[neww2] == null){}else{
                                this.rdl2.push(this.db_val_1[i].[neww2])
                                this.total2 += parseFloat(this.db_val_1[i].[neww2])
                            }
                            

                            if(this.db_val_1[i].[neww3] == 0.00 || this.db_val_1[i].[neww3] == '-' || this.db_val_1[i].[neww3] == null){}else{
                                this.rdl3.push(this.db_val_1[i].[neww3])
                                this.total3 += parseFloat(this.db_val_1[i].[neww3])
                            }
                            

                            if(this.db_val_1[i].[neww4] == 0.00 || this.db_val_1[i].[neww4] == '-' || this.db_val_1[i].[neww4] == null){}else{
                                this.rdl4.push(this.db_val_1[i].[neww4])
                                this.total4 += parseFloat(this.db_val_1[i].[neww4])
                            }
                            

                            if(this.db_val_1[i].[neww5] == 0.00 || this.db_val_1[i].[neww5] == '-' || this.db_val_1[i].[neww5] == null){}else{
                                this.rdl5.push(this.db_val_1[i].[neww5])
                                this.total5 += parseFloat(this.db_val_1[i].[neww5])
                            }
                            

                            if(this.db_val_1[i].[neww6] == 0.00 || this.db_val_1[i].[neww6] == '-' || this.db_val_1[i].[neww6] == null){}else{
                                this.rdl6.push(this.db_val_1[i].[neww6])
                                this.total6 += parseFloat(this.db_val_1[i].[neww6])
                            }
                            

                            if(this.db_val_1[i].[neww7] == 0.00 || this.db_val_1[i].[neww7] == '-' || this.db_val_1[i].[neww7] == null){}else{
                                this.rdl7.push(this.db_val_1[i].[neww7])
                                this.total7 += parseFloat(this.db_val_1[i].[neww7])
                            }
                            

                            if(this.db_val_1[i].[neww8] == 0.00 || this.db_val_1[i].[neww8] == '-' || this.db_val_1[i].[neww8] == null){}else{
                                this.rdl8.push(this.db_val_1[i].[neww8])
                                this.total8 += parseFloat(this.db_val_1[i].[neww8])
                            }
                            

                            if(this.db_val_1[i].[neww9] == 0.00 || this.db_val_1[i].[neww9] == '-' || this.db_val_1[i].[neww9] == null){}else{
                                this.rdl9.push(this.db_val_1[i].[neww9])
                                this.total9 += parseFloat(this.db_val_1[i].[neww9])
                            }
                            

                            if(this.db_val_1[i].[neww10] == 0.00 || this.db_val_1[i].[neww10] == '-' || this.db_val_1[i].[neww10] == null){}else{
                                this.rdl10.push(this.db_val_1[i].[neww10])
                                this.total10 += parseFloat(this.db_val_1[i].[neww10])
                            }
                            
                        }
                         if(this.rdl1 == ''){
                            this.rdl1 = ['0'];
                        }if(this.rdl2 == ''){
                            this.rdl2 = ['0'];
                        }if(this.rdl3 == ''){
                            this.rdl3 = ['0'];
                        }if(this.rdl4 == ''){
                            this.rdl4 = ['0'];
                        }if(this.rdl5 == ''){
                            this.rdl5 = ['0'];
                        }if(this.rdl6 == ''){
                            this.rdl6 = ['0'];
                        }if(this.rdl7 == ''){
                            this.rdl7 = ['0'];
                        }if(this.rdl8 == ''){
                            this.rdl8 = ['0'];
                        }if(this.rdl9 == ''){
                            this.rdl9 = ['0'];
                        }if(this.rdl10 == ''){
                            this.rdl10 = ['0'];
                        }
                    }
                    else if (this.val_1.length == 11) {
                        neww1 = this.val_1[0];
                        neww2 = this.val_1[1];
                        neww3 = this.val_1[2];
                        neww4 = this.val_1[3];
                        neww5 = this.val_1[4];
                        neww6 = this.val_1[5];
                        neww7 = this.val_1[6];
                        neww8 = this.val_1[7];
                        neww9 = this.val_1[8];
                        neww10 = this.val_1[9];
                        neww11 = this.val_1[10];
                        for(let i=0; i<this.db_val_1.length; i++){
                            if(this.db_val_1[i].[neww1] == 0.00 || this.db_val_1[i].[neww1] == '-' || this.db_val_1[i].[neww1] == null){}else{
                                this.rdl1.push(this.db_val_1[i].[neww1])
                                this.total1 += parseFloat(this.db_val_1[i].[neww1])
                            }
                            
                            
                            if(this.db_val_1[i].[neww2] == 0.00 || this.db_val_1[i].[neww2] == '-' || this.db_val_1[i].[neww2] == null){}else{
                                this.rdl2.push(this.db_val_1[i].[neww2])
                                this.total2 += parseFloat(this.db_val_1[i].[neww2])
                            }
                            

                            if(this.db_val_1[i].[neww3] == 0.00 || this.db_val_1[i].[neww3] == '-' || this.db_val_1[i].[neww3] == null){}else{
                                this.rdl3.push(this.db_val_1[i].[neww3])
                                this.total3 += parseFloat(this.db_val_1[i].[neww3])
                            }
                            

                            if(this.db_val_1[i].[neww4] == 0.00 || this.db_val_1[i].[neww4] == '-' || this.db_val_1[i].[neww4] == null){}else{
                                this.rdl4.push(this.db_val_1[i].[neww4])
                                this.total4 += parseFloat(this.db_val_1[i].[neww4])
                            }
                            

                            if(this.db_val_1[i].[neww5] == 0.00 || this.db_val_1[i].[neww5] == '-' || this.db_val_1[i].[neww5] == null){}else{
                                this.rdl5.push(this.db_val_1[i].[neww5])
                                this.total5 += parseFloat(this.db_val_1[i].[neww5])
                            }
                            

                            if(this.db_val_1[i].[neww6] == 0.00 || this.db_val_1[i].[neww6] == '-' || this.db_val_1[i].[neww6] == null){}else{
                                this.rdl6.push(this.db_val_1[i].[neww6])
                                this.total6 += parseFloat(this.db_val_1[i].[neww6])
                            }
                            

                            if(this.db_val_1[i].[neww7] == 0.00 || this.db_val_1[i].[neww7] == '-' || this.db_val_1[i].[neww7] == null){}else{
                                this.rdl7.push(this.db_val_1[i].[neww7])
                                this.total7 += parseFloat(this.db_val_1[i].[neww7])
                            }
                            

                            if(this.db_val_1[i].[neww8] == 0.00 || this.db_val_1[i].[neww8] == '-' || this.db_val_1[i].[neww8] == null){}else{
                                this.rdl8.push(this.db_val_1[i].[neww8])
                                this.total8 += parseFloat(this.db_val_1[i].[neww8])
                            }
                            

                            if(this.db_val_1[i].[neww9] == 0.00 || this.db_val_1[i].[neww9] == '-' || this.db_val_1[i].[neww9] == null){}else{
                                this.rdl9.push(this.db_val_1[i].[neww9])
                                this.total9 += parseFloat(this.db_val_1[i].[neww9])
                            }
                            

                            if(this.db_val_1[i].[neww10] == 0.00 || this.db_val_1[i].[neww10] == '-' || this.db_val_1[i].[neww10] == null){}else{
                                this.rdl10.push(this.db_val_1[i].[neww10])
                                this.total10 += parseFloat(this.db_val_1[i].[neww10])
                            }
                            

                            if(this.db_val_1[i].[neww11] == 0.00 || this.db_val_1[i].[neww11] == '-' || this.db_val_1[i].[neww11] == null){}else{
                                this.rdl11.push(this.db_val_1[i].[neww11])
                                this.total11 += parseFloat(this.db_val_1[i].[neww11])
                            }
                            
                        }
                         if(this.rdl1 == ''){
                            this.rdl1 = ['0'];
                        }if(this.rdl2 == ''){
                            this.rdl2 = ['0'];
                        }if(this.rdl3 == ''){
                            this.rdl3 = ['0'];
                        }if(this.rdl4 == ''){
                            this.rdl4 = ['0'];
                        }if(this.rdl5 == ''){
                            this.rdl5 = ['0'];
                        }if(this.rdl6 == ''){
                            this.rdl6 = ['0'];
                        }if(this.rdl7 == ''){
                            this.rdl7 = ['0'];
                        }if(this.rdl8 == ''){
                            this.rdl8 = ['0'];
                        }if(this.rdl9 == ''){
                            this.rdl9 = ['0'];
                        }if(this.rdl10 == ''){
                            this.rdl10 = ['0'];
                        }if(this.rdl11 == ''){
                            this.rdl11 = ['0'];
                        }
                    }
                    else if (this.val_1.length == 12) {
                        neww1 = this.val_1[0];
                        neww2 = this.val_1[1];
                        neww3 = this.val_1[2];
                        neww4 = this.val_1[3];
                        neww5 = this.val_1[4];
                        neww6 = this.val_1[5];
                        neww7 = this.val_1[6];
                        neww8 = this.val_1[7];
                        neww9 = this.val_1[8];
                        neww10 = this.val_1[9];
                        neww11 = this.val_1[10];
                        neww12 = this.val_1[11];
                        for(let i=0; i<this.db_val_1.length; i++){
                            if(this.db_val_1[i].[neww1] == 0.00 || this.db_val_1[i].[neww1] == '-' || this.db_val_1[i].[neww1] == null){}else{
                                this.rdl1.push(this.db_val_1[i].[neww1])
                                this.total1 += parseFloat(this.db_val_1[i].[neww1])
                            }
                            
                            
                            if(this.db_val_1[i].[neww2] == 0.00 || this.db_val_1[i].[neww2] == '-' || this.db_val_1[i].[neww2] == null){}else{
                                this.rdl2.push(this.db_val_1[i].[neww2])
                                this.total2 += parseFloat(this.db_val_1[i].[neww2])
                            }
                            

                            if(this.db_val_1[i].[neww3] == 0.00 || this.db_val_1[i].[neww3] == '-' || this.db_val_1[i].[neww3] == null){}else{
                                this.rdl3.push(this.db_val_1[i].[neww3])
                                this.total3 += parseFloat(this.db_val_1[i].[neww3])
                            }
                            

                            if(this.db_val_1[i].[neww4] == 0.00 || this.db_val_1[i].[neww4] == '-' || this.db_val_1[i].[neww4] == null){}else{
                                this.rdl4.push(this.db_val_1[i].[neww4])
                                this.total4 += parseFloat(this.db_val_1[i].[neww4])
                            }
                            

                            if(this.db_val_1[i].[neww5] == 0.00 || this.db_val_1[i].[neww5] == '-' || this.db_val_1[i].[neww5] == null){}else{
                                this.rdl5.push(this.db_val_1[i].[neww5])
                                this.total5 += parseFloat(this.db_val_1[i].[neww5])
                            }
                            

                            if(this.db_val_1[i].[neww6] == 0.00 || this.db_val_1[i].[neww6] == '-' || this.db_val_1[i].[neww6] == null){}else{
                                this.rdl6.push(this.db_val_1[i].[neww6])
                                this.total6 += parseFloat(this.db_val_1[i].[neww6])
                            }
                            

                            if(this.db_val_1[i].[neww7] == 0.00 || this.db_val_1[i].[neww7] == '-' || this.db_val_1[i].[neww7] == null){}else{
                                this.rdl7.push(this.db_val_1[i].[neww7])
                                this.total7 += parseFloat(this.db_val_1[i].[neww7])
                            }
                            

                            if(this.db_val_1[i].[neww8] == 0.00 || this.db_val_1[i].[neww8] == '-' || this.db_val_1[i].[neww8] == null){}else{
                                this.rdl8.push(this.db_val_1[i].[neww8])
                                this.total8 += parseFloat(this.db_val_1[i].[neww8])
                            }
                            

                            if(this.db_val_1[i].[neww9] == 0.00 || this.db_val_1[i].[neww9] == '-' || this.db_val_1[i].[neww9] == null){}else{
                                this.rdl9.push(this.db_val_1[i].[neww9])
                                this.total9 += parseFloat(this.db_val_1[i].[neww9])
                            }
                            

                            if(this.db_val_1[i].[neww10] == 0.00 || this.db_val_1[i].[neww10] == '-' || this.db_val_1[i].[neww10] == null){}else{
                                this.rdl10.push(this.db_val_1[i].[neww10])
                                this.total10 += parseFloat(this.db_val_1[i].[neww10])
                            }
                            

                            if(this.db_val_1[i].[neww11] == 0.00 || this.db_val_1[i].[neww11] == '-' || this.db_val_1[i].[neww11] == null){}else{
                                this.rdl11.push(this.db_val_1[i].[neww11])
                                this.total11 += parseFloat(this.db_val_1[i].[neww11])
                            }
                            

                            if(this.db_val_1[i].[neww12] == 0.00 || this.db_val_1[i].[neww12] == '-' || this.db_val_1[i].[neww12] == null){}else{
                                this.rdl12.push(this.db_val_1[i].[neww12])
                                this.total12 += parseFloat(this.db_val_1[i].[neww12])
                            }
                            
                        }
                         if(this.rdl1 == ''){
                            this.rdl1 = ['0'];
                        }if(this.rdl2 == ''){
                            this.rdl2 = ['0'];
                        }if(this.rdl3 == ''){
                            this.rdl3 = ['0'];
                        }if(this.rdl4 == ''){
                            this.rdl4 = ['0'];
                        }if(this.rdl5 == ''){
                            this.rdl5 = ['0'];
                        }if(this.rdl6 == ''){
                            this.rdl6 = ['0'];
                        }if(this.rdl7 == ''){
                            this.rdl7 = ['0'];
                        }if(this.rdl8 == ''){
                            this.rdl8 = ['0'];
                        }if(this.rdl9 == ''){
                            this.rdl9 = ['0'];
                        }if(this.rdl10 == ''){
                            this.rdl10 = ['0'];
                        }if(this.rdl11 == ''){
                            this.rdl11 = ['0'];
                        }if(this.rdl12 == ''){
                            this.rdl12 = ['0'];
                        }
                    }
                    else if (this.val_1.length == 13) {
                        neww1 = this.val_1[0];
                        neww2 = this.val_1[1];
                        neww3 = this.val_1[2];
                        neww4 = this.val_1[3];
                        neww5 = this.val_1[4];
                        neww6 = this.val_1[5];
                        neww7 = this.val_1[6];
                        neww8 = this.val_1[7];
                        neww9 = this.val_1[8];
                        neww10 = this.val_1[9];
                        neww11 = this.val_1[10];
                        neww12 = this.val_1[11];
                        neww13 = this.val_1[12];
                        for(let i=0; i<this.db_val_1.length; i++){
                            if(this.db_val_1[i].[neww1] == 0.00 || this.db_val_1[i].[neww1] == '-' || this.db_val_1[i].[neww1] == null){}else{
                                this.rdl1.push(this.db_val_1[i].[neww1])
                                this.total1 += parseFloat(this.db_val_1[i].[neww1])
                            }
                            
                            
                            if(this.db_val_1[i].[neww2] == 0.00 || this.db_val_1[i].[neww2] == '-' || this.db_val_1[i].[neww2] == null){}else{
                                this.rdl2.push(this.db_val_1[i].[neww2])
                                this.total2 += parseFloat(this.db_val_1[i].[neww2])
                            }
                            

                            if(this.db_val_1[i].[neww3] == 0.00 || this.db_val_1[i].[neww3] == '-' || this.db_val_1[i].[neww3] == null){}else{
                                this.rdl3.push(this.db_val_1[i].[neww3])
                                this.total3 += parseFloat(this.db_val_1[i].[neww3])
                            }
                            

                            if(this.db_val_1[i].[neww4] == 0.00 || this.db_val_1[i].[neww4] == '-' || this.db_val_1[i].[neww4] == null){}else{
                                this.rdl4.push(this.db_val_1[i].[neww4])
                                this.total4 += parseFloat(this.db_val_1[i].[neww4])
                            }
                            

                            if(this.db_val_1[i].[neww5] == 0.00 || this.db_val_1[i].[neww5] == '-' || this.db_val_1[i].[neww5] == null){}else{
                                this.rdl5.push(this.db_val_1[i].[neww5])
                                this.total5 += parseFloat(this.db_val_1[i].[neww5])
                            }
                            

                            if(this.db_val_1[i].[neww6] == 0.00 || this.db_val_1[i].[neww6] == '-' || this.db_val_1[i].[neww6] == null){}else{
                                this.rdl6.push(this.db_val_1[i].[neww6])
                                this.total6 += parseFloat(this.db_val_1[i].[neww6])
                            }
                            

                            if(this.db_val_1[i].[neww7] == 0.00 || this.db_val_1[i].[neww7] == '-' || this.db_val_1[i].[neww7] == null){}else{
                                this.rdl7.push(this.db_val_1[i].[neww7])
                                this.total7 += parseFloat(this.db_val_1[i].[neww7])
                            }
                            

                            if(this.db_val_1[i].[neww8] == 0.00 || this.db_val_1[i].[neww8] == '-' || this.db_val_1[i].[neww8] == null){}else{
                                this.rdl8.push(this.db_val_1[i].[neww8])
                                this.total8 += parseFloat(this.db_val_1[i].[neww8])
                            }
                            

                            if(this.db_val_1[i].[neww9] == 0.00 || this.db_val_1[i].[neww9] == '-' || this.db_val_1[i].[neww9] == null){}else{
                                this.rdl9.push(this.db_val_1[i].[neww9])
                                this.total9 += parseFloat(this.db_val_1[i].[neww9])
                            }
                            

                            if(this.db_val_1[i].[neww10] == 0.00 || this.db_val_1[i].[neww10] == '-' || this.db_val_1[i].[neww10] == null){}else{
                                this.rdl10.push(this.db_val_1[i].[neww10])
                                this.total10 += parseFloat(this.db_val_1[i].[neww10])
                            }
                            

                            if(this.db_val_1[i].[neww11] == 0.00 || this.db_val_1[i].[neww11] == '-' || this.db_val_1[i].[neww11] == null){}else{
                                this.rdl11.push(this.db_val_1[i].[neww11])
                                this.total11 += parseFloat(this.db_val_1[i].[neww11])
                            }
                            

                            if(this.db_val_1[i].[neww12] == 0.00 || this.db_val_1[i].[neww12] == '-' || this.db_val_1[i].[neww12] == null){}else{
                                this.rdl12.push(this.db_val_1[i].[neww12])
                                this.total12 += parseFloat(this.db_val_1[i].[neww12])
                            }

                            if(this.db_val_1[i].[neww13] == 0.00 || this.db_val_1[i].[neww13] == '-' || this.db_val_1[i].[neww13] == null){}else{
                                this.rdl13.push(this.db_val_1[i].[neww13])
                                this.total13 += parseFloat(this.db_val_1[i].[neww13])
                            }
                            
                        }
                         if(this.rdl1 == ''){
                            this.rdl1 = ['0'];
                        }if(this.rdl2 == ''){
                            this.rdl2 = ['0'];
                        }if(this.rdl3 == ''){
                            this.rdl3 = ['0'];
                        }if(this.rdl4 == ''){
                            this.rdl4 = ['0'];
                        }if(this.rdl5 == ''){
                            this.rdl5 = ['0'];
                        }if(this.rdl6 == ''){
                            this.rdl6 = ['0'];
                        }if(this.rdl7 == ''){
                            this.rdl7 = ['0'];
                        }if(this.rdl8 == ''){
                            this.rdl8 = ['0'];
                        }if(this.rdl9 == ''){
                            this.rdl9 = ['0'];
                        }if(this.rdl10 == ''){
                            this.rdl10 = ['0'];
                        }if(this.rdl11 == ''){
                            this.rdl11 = ['0'];
                        }if(this.rdl12 == ''){
                            this.rdl12 = ['0'];
                        }if(this.rdl13 == ''){
                            this.rdl13 = ['0'];
                        }
                    }
                    else if (this.val_1.length == 14) {
                        neww1 = this.val_1[0];
                        neww2 = this.val_1[1];
                        neww3 = this.val_1[2];
                        neww4 = this.val_1[3];
                        neww5 = this.val_1[4];
                        neww6 = this.val_1[5];
                        neww7 = this.val_1[6];
                        neww8 = this.val_1[7];
                        neww9 = this.val_1[8];
                        neww10 = this.val_1[9];
                        neww11 = this.val_1[10];
                        neww12 = this.val_1[11];
                        neww13 = this.val_1[12];
                        neww14 = this.val_1[13];
                        for(let i=0; i<this.db_val_1.length; i++){
                            if(this.db_val_1[i].[neww1] == 0.00 || this.db_val_1[i].[neww1] == '-' || this.db_val_1[i].[neww1] == null){}else{
                                this.rdl1.push(this.db_val_1[i].[neww1])
                                this.total1 += parseFloat(this.db_val_1[i].[neww1])
                            }
                            
                            
                            if(this.db_val_1[i].[neww2] == 0.00 || this.db_val_1[i].[neww2] == '-' || this.db_val_1[i].[neww2] == null){}else{
                                this.rdl2.push(this.db_val_1[i].[neww2])
                                this.total2 += parseFloat(this.db_val_1[i].[neww2])
                            }
                            

                            if(this.db_val_1[i].[neww3] == 0.00 || this.db_val_1[i].[neww3] == '-' || this.db_val_1[i].[neww3] == null){}else{
                                this.rdl3.push(this.db_val_1[i].[neww3])
                                this.total3 += parseFloat(this.db_val_1[i].[neww3])
                            }
                            

                            if(this.db_val_1[i].[neww4] == 0.00 || this.db_val_1[i].[neww4] == '-' || this.db_val_1[i].[neww4] == null){}else{
                                this.rdl4.push(this.db_val_1[i].[neww4])
                                this.total4 += parseFloat(this.db_val_1[i].[neww4])
                            }
                            

                            if(this.db_val_1[i].[neww5] == 0.00 || this.db_val_1[i].[neww5] == '-' || this.db_val_1[i].[neww5] == null){}else{
                                this.rdl5.push(this.db_val_1[i].[neww5])
                                this.total5 += parseFloat(this.db_val_1[i].[neww5])
                            }
                            

                            if(this.db_val_1[i].[neww6] == 0.00 || this.db_val_1[i].[neww6] == '-' || this.db_val_1[i].[neww6] == null){}else{
                                this.rdl6.push(this.db_val_1[i].[neww6])
                                this.total6 += parseFloat(this.db_val_1[i].[neww6])
                            }
                            

                            if(this.db_val_1[i].[neww7] == 0.00 || this.db_val_1[i].[neww7] == '-' || this.db_val_1[i].[neww7] == null){}else{
                                this.rdl7.push(this.db_val_1[i].[neww7])
                                this.total7 += parseFloat(this.db_val_1[i].[neww7])
                            }
                            

                            if(this.db_val_1[i].[neww8] == 0.00 || this.db_val_1[i].[neww8] == '-' || this.db_val_1[i].[neww8] == null){}else{
                                this.rdl8.push(this.db_val_1[i].[neww8])
                                this.total8 += parseFloat(this.db_val_1[i].[neww8])
                            }
                            

                            if(this.db_val_1[i].[neww9] == 0.00 || this.db_val_1[i].[neww9] == '-' || this.db_val_1[i].[neww9] == null){}else{
                                this.rdl9.push(this.db_val_1[i].[neww9])
                                this.total9 += parseFloat(this.db_val_1[i].[neww9])
                            }
                            

                            if(this.db_val_1[i].[neww10] == 0.00 || this.db_val_1[i].[neww10] == '-' || this.db_val_1[i].[neww10] == null){}else{
                                this.rdl10.push(this.db_val_1[i].[neww10])
                                this.total10 += parseFloat(this.db_val_1[i].[neww10])
                            }
                            

                            if(this.db_val_1[i].[neww11] == 0.00 || this.db_val_1[i].[neww11] == '-' || this.db_val_1[i].[neww11] == null){}else{
                                this.rdl11.push(this.db_val_1[i].[neww11])
                                this.total11 += parseFloat(this.db_val_1[i].[neww11])
                            }
                            

                            if(this.db_val_1[i].[neww12] == 0.00 || this.db_val_1[i].[neww12] == '-' || this.db_val_1[i].[neww12] == null){}else{
                                this.rdl12.push(this.db_val_1[i].[neww12])
                                this.total12 += parseFloat(this.db_val_1[i].[neww12])
                            }

                            if(this.db_val_1[i].[neww13] == 0.00 || this.db_val_1[i].[neww13] == '-' || this.db_val_1[i].[neww13] == null){}else{
                                this.rdl13.push(this.db_val_1[i].[neww13])
                                this.total13 += parseFloat(this.db_val_1[i].[neww13])
                            }

                            if(this.db_val_1[i].[neww14] == 0.00 || this.db_val_1[i].[neww14] == '-' || this.db_val_1[i].[neww14] == null){}else{
                                this.rdl14.push(this.db_val_1[i].[neww14])
                                this.total14 += parseFloat(this.db_val_1[i].[neww14])
                            }
                            
                        }
                         if(this.rdl1 == ''){
                            this.rdl1 = ['0'];
                        }if(this.rdl2 == ''){
                            this.rdl2 = ['0'];
                        }if(this.rdl3 == ''){
                            this.rdl3 = ['0'];
                        }if(this.rdl4 == ''){
                            this.rdl4 = ['0'];
                        }if(this.rdl5 == ''){
                            this.rdl5 = ['0'];
                        }if(this.rdl6 == ''){
                            this.rdl6 = ['0'];
                        }if(this.rdl7 == ''){
                            this.rdl7 = ['0'];
                        }if(this.rdl8 == ''){
                            this.rdl8 = ['0'];
                        }if(this.rdl9 == ''){
                            this.rdl9 = ['0'];
                        }if(this.rdl10 == ''){
                            this.rdl10 = ['0'];
                        }if(this.rdl11 == ''){
                            this.rdl11 = ['0'];
                        }if(this.rdl12 == ''){
                            this.rdl12 = ['0'];
                        }if(this.rdl13 == ''){
                            this.rdl13 = ['0'];
                        }if(this.rdl14 == ''){
                            this.rdl14 = ['0'];
                        }
                    }
                    else if (this.val_1.length == 15) {
                        neww1 = this.val_1[0];
                        neww2 = this.val_1[1];
                        neww3 = this.val_1[2];
                        neww4 = this.val_1[3];
                        neww5 = this.val_1[4];
                        neww6 = this.val_1[5];
                        neww7 = this.val_1[6];
                        neww8 = this.val_1[7];
                        neww9 = this.val_1[8];
                        neww10 = this.val_1[9];
                        neww11 = this.val_1[10];
                        neww12 = this.val_1[11];
                        neww13 = this.val_1[12];
                        neww14 = this.val_1[13];
                        neww15 = this.val_1[14];
                        for(let i=0; i<this.db_val_1.length; i++){
                            if(this.db_val_1[i].[neww1] == 0.00 || this.db_val_1[i].[neww1] == '-' || this.db_val_1[i].[neww1] == null){}else{
                                this.rdl1.push(this.db_val_1[i].[neww1])
                                this.total1 += parseFloat(this.db_val_1[i].[neww1])
                            }
                            
                            
                            if(this.db_val_1[i].[neww2] == 0.00 || this.db_val_1[i].[neww2] == '-' || this.db_val_1[i].[neww2] == null){}else{
                                this.rdl2.push(this.db_val_1[i].[neww2])
                                this.total2 += parseFloat(this.db_val_1[i].[neww2])
                            }
                            

                            if(this.db_val_1[i].[neww3] == 0.00 || this.db_val_1[i].[neww3] == '-' || this.db_val_1[i].[neww3] == null){}else{
                                this.rdl3.push(this.db_val_1[i].[neww3])
                                this.total3 += parseFloat(this.db_val_1[i].[neww3])
                            }
                            

                            if(this.db_val_1[i].[neww4] == 0.00 || this.db_val_1[i].[neww4] == '-' || this.db_val_1[i].[neww4] == null){}else{
                                this.rdl4.push(this.db_val_1[i].[neww4])
                                this.total4 += parseFloat(this.db_val_1[i].[neww4])
                            }
                            

                            if(this.db_val_1[i].[neww5] == 0.00 || this.db_val_1[i].[neww5] == '-' || this.db_val_1[i].[neww5] == null){}else{
                                this.rdl5.push(this.db_val_1[i].[neww5])
                                this.total5 += parseFloat(this.db_val_1[i].[neww5])
                            }
                            

                            if(this.db_val_1[i].[neww6] == 0.00 || this.db_val_1[i].[neww6] == '-' || this.db_val_1[i].[neww6] == null){}else{
                                this.rdl6.push(this.db_val_1[i].[neww6])
                                this.total6 += parseFloat(this.db_val_1[i].[neww6])
                            }
                            

                            if(this.db_val_1[i].[neww7] == 0.00 || this.db_val_1[i].[neww7] == '-' || this.db_val_1[i].[neww7] == null){}else{
                                this.rdl7.push(this.db_val_1[i].[neww7])
                                this.total7 += parseFloat(this.db_val_1[i].[neww7])
                            }
                            

                            if(this.db_val_1[i].[neww8] == 0.00 || this.db_val_1[i].[neww8] == '-' || this.db_val_1[i].[neww8] == null){}else{
                                this.rdl8.push(this.db_val_1[i].[neww8])
                                this.total8 += parseFloat(this.db_val_1[i].[neww8])
                            }
                            

                            if(this.db_val_1[i].[neww9] == 0.00 || this.db_val_1[i].[neww9] == '-' || this.db_val_1[i].[neww9] == null){}else{
                                this.rdl9.push(this.db_val_1[i].[neww9])
                                this.total9 += parseFloat(this.db_val_1[i].[neww9])
                            }
                            

                            if(this.db_val_1[i].[neww10] == 0.00 || this.db_val_1[i].[neww10] == '-' || this.db_val_1[i].[neww10] == null){}else{
                                this.rdl10.push(this.db_val_1[i].[neww10])
                                this.total10 += parseFloat(this.db_val_1[i].[neww10])
                            }
                            

                            if(this.db_val_1[i].[neww11] == 0.00 || this.db_val_1[i].[neww11] == '-' || this.db_val_1[i].[neww11] == null){}else{
                                this.rdl11.push(this.db_val_1[i].[neww11])
                                this.total11 += parseFloat(this.db_val_1[i].[neww11])
                            }
                            

                            if(this.db_val_1[i].[neww12] == 0.00 || this.db_val_1[i].[neww12] == '-' || this.db_val_1[i].[neww12] == null){}else{
                                this.rdl12.push(this.db_val_1[i].[neww12])
                                this.total12 += parseFloat(this.db_val_1[i].[neww12])
                            }

                            if(this.db_val_1[i].[neww13] == 0.00 || this.db_val_1[i].[neww13] == '-' || this.db_val_1[i].[neww13] == null){}else{
                                this.rdl13.push(this.db_val_1[i].[neww13])
                                this.total13 += parseFloat(this.db_val_1[i].[neww13])
                            }

                            if(this.db_val_1[i].[neww14] == 0.00 || this.db_val_1[i].[neww14] == '-' || this.db_val_1[i].[neww14] == null){}else{
                                this.rdl14.push(this.db_val_1[i].[neww14])
                                this.total14 += parseFloat(this.db_val_1[i].[neww14])
                            }

                            if(this.db_val_1[i].[neww15] == 0.00 || this.db_val_1[i].[neww15] == '-' || this.db_val_1[i].[neww15] == null){}else{
                                this.rdl15.push(this.db_val_1[i].[neww15])
                                this.total15 += parseFloat(this.db_val_1[i].[neww15])
                            }
                            
                        }
                         if(this.rdl1 == ''){
                            this.rdl1 = ['0'];
                        }if(this.rdl2 == ''){
                            this.rdl2 = ['0'];
                        }if(this.rdl3 == ''){
                            this.rdl3 = ['0'];
                        }if(this.rdl4 == ''){
                            this.rdl4 = ['0'];
                        }if(this.rdl5 == ''){
                            this.rdl5 = ['0'];
                        }if(this.rdl6 == ''){
                            this.rdl6 = ['0'];
                        }if(this.rdl7 == ''){
                            this.rdl7 = ['0'];
                        }if(this.rdl8 == ''){
                            this.rdl8 = ['0'];
                        }if(this.rdl9 == ''){
                            this.rdl9 = ['0'];
                        }if(this.rdl10 == ''){
                            this.rdl10 = ['0'];
                        }if(this.rdl11 == ''){
                            this.rdl11 = ['0'];
                        }if(this.rdl12 == ''){
                            this.rdl12 = ['0'];
                        }if(this.rdl13 == ''){
                            this.rdl13 = ['0'];
                        }if(this.rdl14 == ''){
                            this.rdl14 = ['0'];
                        }if(this.rdl15 == ''){
                            this.rdl15 = ['0'];
                        }
                    }
                    else if (this.val_1.length == 16) {
                        neww1 = this.val_1[0];
                        neww2 = this.val_1[1];
                        neww3 = this.val_1[2];
                        neww4 = this.val_1[3];
                        neww5 = this.val_1[4];
                        neww6 = this.val_1[5];
                        neww7 = this.val_1[6];
                        neww8 = this.val_1[7];
                        neww9 = this.val_1[8];
                        neww10 = this.val_1[9];
                        neww11 = this.val_1[10];
                        neww12 = this.val_1[11];
                        neww13 = this.val_1[12];
                        neww14 = this.val_1[13];
                        neww15 = this.val_1[14];
                        neww16 = this.val_1[15];
                        for(let i=0; i<this.db_val_1.length; i++){
                            if(this.db_val_1[i].[neww1] == 0.00 || this.db_val_1[i].[neww1] == '-' || this.db_val_1[i].[neww1] == null){}else{
                                this.rdl1.push(this.db_val_1[i].[neww1])
                                this.total1 += parseFloat(this.db_val_1[i].[neww1])
                            }
                            
                            
                            if(this.db_val_1[i].[neww2] == 0.00 || this.db_val_1[i].[neww2] == '-' || this.db_val_1[i].[neww2] == null){}else{
                                this.rdl2.push(this.db_val_1[i].[neww2])
                                this.total2 += parseFloat(this.db_val_1[i].[neww2])
                            }
                            

                            if(this.db_val_1[i].[neww3] == 0.00 || this.db_val_1[i].[neww3] == '-' || this.db_val_1[i].[neww3] == null){}else{
                                this.rdl3.push(this.db_val_1[i].[neww3])
                                this.total3 += parseFloat(this.db_val_1[i].[neww3])
                            }
                            

                            if(this.db_val_1[i].[neww4] == 0.00 || this.db_val_1[i].[neww4] == '-' || this.db_val_1[i].[neww4] == null){}else{
                                this.rdl4.push(this.db_val_1[i].[neww4])
                                this.total4 += parseFloat(this.db_val_1[i].[neww4])
                            }
                            

                            if(this.db_val_1[i].[neww5] == 0.00 || this.db_val_1[i].[neww5] == '-' || this.db_val_1[i].[neww5] == null){}else{
                                this.rdl5.push(this.db_val_1[i].[neww5])
                                this.total5 += parseFloat(this.db_val_1[i].[neww5])
                            }
                            

                            if(this.db_val_1[i].[neww6] == 0.00 || this.db_val_1[i].[neww6] == '-' || this.db_val_1[i].[neww6] == null){}else{
                                this.rdl6.push(this.db_val_1[i].[neww6])
                                this.total6 += parseFloat(this.db_val_1[i].[neww6])
                            }
                            

                            if(this.db_val_1[i].[neww7] == 0.00 || this.db_val_1[i].[neww7] == '-' || this.db_val_1[i].[neww7] == null){}else{
                                this.rdl7.push(this.db_val_1[i].[neww7])
                                this.total7 += parseFloat(this.db_val_1[i].[neww7])
                            }
                            

                            if(this.db_val_1[i].[neww8] == 0.00 || this.db_val_1[i].[neww8] == '-' || this.db_val_1[i].[neww8] == null){}else{
                                this.rdl8.push(this.db_val_1[i].[neww8])
                                this.total8 += parseFloat(this.db_val_1[i].[neww8])
                            }
                            

                            if(this.db_val_1[i].[neww9] == 0.00 || this.db_val_1[i].[neww9] == '-' || this.db_val_1[i].[neww9] == null){}else{
                                this.rdl9.push(this.db_val_1[i].[neww9])
                                this.total9 += parseFloat(this.db_val_1[i].[neww9])
                            }
                            

                            if(this.db_val_1[i].[neww10] == 0.00 || this.db_val_1[i].[neww10] == '-' || this.db_val_1[i].[neww10] == null){}else{
                                this.rdl10.push(this.db_val_1[i].[neww10])
                                this.total10 += parseFloat(this.db_val_1[i].[neww10])
                            }
                            

                            if(this.db_val_1[i].[neww11] == 0.00 || this.db_val_1[i].[neww11] == '-' || this.db_val_1[i].[neww11] == null){}else{
                                this.rdl11.push(this.db_val_1[i].[neww11])
                                this.total11 += parseFloat(this.db_val_1[i].[neww11])
                            }
                            

                            if(this.db_val_1[i].[neww12] == 0.00 || this.db_val_1[i].[neww12] == '-' || this.db_val_1[i].[neww12] == null){}else{
                                this.rdl12.push(this.db_val_1[i].[neww12])
                                this.total12 += parseFloat(this.db_val_1[i].[neww12])
                            }

                            if(this.db_val_1[i].[neww13] == 0.00 || this.db_val_1[i].[neww13] == '-' || this.db_val_1[i].[neww13] == null){}else{
                                this.rdl13.push(this.db_val_1[i].[neww13])
                                this.total13 += parseFloat(this.db_val_1[i].[neww13])
                            }

                            if(this.db_val_1[i].[neww14] == 0.00 || this.db_val_1[i].[neww14] == '-' || this.db_val_1[i].[neww14] == null){}else{
                                this.rdl14.push(this.db_val_1[i].[neww14])
                                this.total14 += parseFloat(this.db_val_1[i].[neww14])
                            }

                            if(this.db_val_1[i].[neww15] == 0.00 || this.db_val_1[i].[neww15] == '-' || this.db_val_1[i].[neww15] == null){}else{
                                this.rdl15.push(this.db_val_1[i].[neww15])
                                this.total15 += parseFloat(this.db_val_1[i].[neww15])
                            }

                            if(this.db_val_1[i].[neww16] == 0.00 || this.db_val_1[i].[neww16] == '-' || this.db_val_1[i].[neww16] == null){}else{
                                this.rdl16.push(this.db_val_1[i].[neww16])
                                this.total16 += parseFloat(this.db_val_1[i].[neww16])
                            }
                            
                        }
                         if(this.rdl1 == ''){
                            this.rdl1 = ['0'];
                        }if(this.rdl2 == ''){
                            this.rdl2 = ['0'];
                        }if(this.rdl3 == ''){
                            this.rdl3 = ['0'];
                        }if(this.rdl4 == ''){
                            this.rdl4 = ['0'];
                        }if(this.rdl5 == ''){
                            this.rdl5 = ['0'];
                        }if(this.rdl6 == ''){
                            this.rdl6 = ['0'];
                        }if(this.rdl7 == ''){
                            this.rdl7 = ['0'];
                        }if(this.rdl8 == ''){
                            this.rdl8 = ['0'];
                        }if(this.rdl9 == ''){
                            this.rdl9 = ['0'];
                        }if(this.rdl10 == ''){
                            this.rdl10 = ['0'];
                        }if(this.rdl11 == ''){
                            this.rdl11 = ['0'];
                        }if(this.rdl12 == ''){
                            this.rdl12 = ['0'];
                        }if(this.rdl13 == ''){
                            this.rdl13 = ['0'];
                        }if(this.rdl14 == ''){
                            this.rdl14 = ['0'];
                        }if(this.rdl15 == ''){
                            this.rdl15 = ['0'];
                        }if(this.rdl16 == ''){
                            this.rdl16 = ['0'];
                        }
                    }
                   
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
