<template>
    <div className="col-md-12" style="padding: 0px;">


        <h1 style="text-align: center; padding-top: 30px;margin-bottom:15px !important;">Show Selection</h1>
        <fieldset class="col-md-4 m-auto text-center" style="background: darkslategrey; margin-bottom:30px !important;">
            <div class="some-class">
                    <input type="radio" class="radio" v-model="filter_range" value="n" id="y" style="width: 47px;height: 23px;vertical-align: sub;"/>
                    <label for="y" style="font-size:25px;">Non-Filter</label>
                    <input type="radio" class="radio" v-model="filter_range" value="y" id="z" style="width: 47px;height: 23px;vertical-align: sub;"/>
                    <label for="z" style="font-size:25px;">Filter</label>
            </div>
        </fieldset>
        <div class="table-container col-md-12 m-auto text-center">
                <form name="chartForm" class="main-form" @submit.prevent="submit" style="padding-left:45px;">
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
                            <td><input value="vr_2" v-model="val_1" type="checkbox" :disabled="disable" v-on:click="CheckRange"></td>
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
                            <td><input value="pit_vol" v-model="val_1" type="checkbox" :disabled="disable" v-on:click="CheckRange"></td>
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
                        <tr>
                            <td>FM 36 (Alkali to D402)</td>
                            <td><input value="fm_36" v-model="val_1" type="checkbox" :disabled="disable" v-on:click="CheckRange"></td>
                            <td><input value="ft_36" v-model="val_1" type="checkbox" :disabled="disable" v-on:click="CheckRange"></td>
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
                            <td><input value="vg_1" v-model="val_1" type="checkbox" :disabled="disable" v-on:click="CheckRange"></td>
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
                        <!-- <tr>
                            <td>FM 10 (T501-T502)</td>
                            <td><input value="fm_10" v-model="val_1" type="checkbox" :disabled="disable" v-on:click="CheckRange"></td>
                            <td><input value="ft_10" v-model="val_1" type="checkbox" :disabled="disable" v-on:click="CheckRange"></td>
                            <td><input value="fm10_den" v-model="val_1" type="checkbox" :disabled="disable" v-on:click="CheckRange"></td>
                            <td><input value="fm10_temp" v-model="val_1" type="checkbox" :disabled="disable" v-on:click="CheckRange"></td>
                        </tr> -->
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
                        <tr>
                            <td>FM 69 (Nickle)</td>
                            <td><input value="fm_10" v-model="val_1" type="checkbox" :disabled="disable" v-on:click="CheckRange"></td>
                            <td><input value="ft_10" v-model="val_1" type="checkbox" :disabled="disable" v-on:click="CheckRange"></td>
                            <td><input value="fm10_den" v-model="val_1" type="checkbox" :disabled="disable" v-on:click="CheckRange"></td>
                            <td><input value="fm10_temp" v-model="val_1" type="checkbox" :disabled="disable" v-on:click="CheckRange"></td>
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

                            <div class="form-group col-md-3" style="margin-top: 31px;">
                                <input type="submit" value="Show Selection" class="btn btn-success float-left" :disabled="disable">
                                <button @click="reloadPage" class="btn btn-primary float-left ml-1">Reset Page</button>
                            </div>

                           
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
        <span v-if="timing == '5'">
             <download-excel 
        class="btn btn-success" 
        style="position:absolute; left: 84%; top: 37px;"
        :title ='["Bio Tech Energy (PVT) LTD",for_downtitle_m,excel_timing_m]' 
        :data="json_data" 
        :fields="json_fields" 
        worksheet="My Worksheet" 
        name="BioTech.xls"> Download Excel </download-excel>
        </span>
        <span v-else>
             <download-excel 
        class="btn btn-success" 
        style="position:absolute; left: 84%; top: 37px;"
        :title ='["Bio Tech Energy (PVT) LTD",excel_timing]' 
        :data="json_data" 
        :fields="json_fields" 
        worksheet="My Worksheet" 
        name="BioTech.xls"> Download Excel </download-excel>
        </span>
       
        <!-- <input type="button" class="btn btn-success print-btn" @click="tableToExcel" value="Export to Excel" style=""> -->
        <div class="container-2">
            <h2 style="text-align:center; border:1px solid; width:40%;margin:auto;margin-top:40px;padding:10px;display:none;" v-if="title_timing ==''">{{title_timing}}</h2>
            <h2 style="text-align:center; border:1px solid; width:40%;margin:auto;margin-top:40px;padding:10px;" v-else>{{title_timing}}</h2>
             <div style="width: 98% !important; margin:auto; margin-top:40px;margin-right: 12px;">
                <vue-table-dynamic 
                :params="params" 
                ref="table"
                >
                </vue-table-dynamic>
            </div>
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
import VueTableDynamic from 'vue-table-dynamic';
import JsonExcel from "vue-json-excel";
  
export default {
    name: "PDFReport",
 
    data() {

        role_id:'this.$store.getters.currentUser.role'
        return {
            filter_range:'n',
            timing: 3,
            setInterval:'1',
            val_1  : [],
            for_downtitle_m:'',
            excel_timing_m:"",
            for_downtitle:'',
            excel_timing:"",
            title_timing:"",
            title_downtitle:'',
            startdate:'',
            enddate:'',
            select_record_option:[],
            select_record:[],
            select_db_record: 'Select Options',
            db_val_1: [],db_val_2: [],db_val_3: [],db_val_4: [],db_val_5: [],db_val_6: [],db_val_7: [],db_val_8: [],db_val_9: [],db_val_10: [],db_val_11: [],
            db_val_12: [],db_val_13: [],db_val_14: [],db_val_15: [],db_val_16: [],
            disable: false,
            user_role_s: this.$store.getters.currentUser.role,
             //
            json_fields: {},
            json_data: [],
            json_meta: [[{
                key: "charset",
                value: "utf-8",
                }],],
            // 
            // 
            params: {
                data: [],
                header: 'row',
                rowHeight: 40,
                border: true,
                stripe: true,
                pagination: true,
                pageSize: 50,
                columnWidth: [{column: 0, width: 160}],
                pageSizes: [50, 100, 150, 200]
            }
            // 
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
                    if(this.select_record_option.val_1 != ""){
                        this.val_1[0] = this.select_record_option.val_1
                    }
                    if(this.select_record_option.val_2 != ""){
                        this.val_1[1] = this.select_record_option.val_2
                    }
                    if(this.select_record_option.val_3 != ""){
                        this.val_1[2] = this.select_record_option.val_3
                    }
                    if(this.select_record_option.val_4 != ""){
                        this.val_1[3] = this.select_record_option.val_4
                    }
                    if(this.select_record_option.val_5 != ""){
                        this.val_1[4] = this.select_record_option.val_5
                    }
                    if(this.select_record_option.val_6 != ""){
                        this.val_1[5] = this.select_record_option.val_6
                    }
                    if(this.select_record_option.val_7 != ""){
                        this.val_1[6] = this.select_record_option.val_7
                    }
                    if(this.select_record_option.val_8 != ""){
                        this.val_1[7] = this.select_record_option.val_8
                    }
                    if(this.select_record_option.val_9 != ""){
                        this.val_1[8] = this.select_record_option.val_9
                    }
                    if(this.select_record_option.val_10 != ""){
                        this.val_1[9] = this.select_record_option.val_10
                    }
                    if(this.select_record_option.val_11 != ""){
                        this.val_1[10] = this.select_record_option.val_11
                    }
                    if(this.select_record_option.val_12 != ""){
                        this.val_1[11] = this.select_record_option.val_12
                    }
                    if(this.select_record_option.val_13 != ""){
                        this.val_1[12] = this.select_record_option.val_13
                    }
                    if(this.select_record_option.val_14 != ""){
                        this.val_1[13] = this.select_record_option.val_14
                    }
                    if(this.select_record_option.val_15 != ""){
                        this.val_1[14] = this.select_record_option.val_15
                    }
                    if(this.select_record_option.val_16 != ""){
                        this.val_1[15] = this.select_record_option.val_16
                    }
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

        submit() {
            this.disable = true;
                                                                                                                                                                                                                                                                                                                            
            String.prototype.splice = function(idx, rem, str) {
                return this.slice(0, idx) + str + this.slice(idx + Math.abs(rem));
            };
            if(this.timing != ''){
                if(this.timing =="1"){
                    this.excel_timing = this.for_downtitle.splice(30, 0, "And Timing is 'Last 24 Hours'");
                    this.title_timing = this.title_downtitle.splice(30, 0, "And Timing is 'Last 24 Hours'");
                }else if(this.timing =="2"){
                    this.excel_timing = this.for_downtitle.splice(30, 0, "And Timing is 'Today'");
                    this.title_timing = this.title_downtitle.splice(30, 0, "And Timing is 'Today'");
                }else if(this.timing =="3"){
                    this.excel_timing = this.for_downtitle.splice(30, 0, "And Timing is '01 Week'");
                     this.title_timing = this.title_downtitle.splice(30, 0, "And Timing is '01 Week'");
                }else if(this.timing =="4"){
                    this.excel_timing = this.for_downtitle.splice(30, 0, "And Timing is '01 Month'");
                    this.title_timing = this.title_downtitle.splice(30, 0, "And Timing is '01 Month'");
                }else if(this.timing =="5"){
                    if(this.setInterval == "1"){
                        this.for_downtitle_m =" Interval '01 Minute' "
                    }else if(this.setInterval == "2"){
                        this.for_downtitle_m = "Interval '02 Minute' "
                    }else if(this.setInterval == "5"){
                        this.for_downtitle_m = "Interval '05 Minute' "
                    }else if(this.setInterval == "10"){
                        this.for_downtitle_m = "Interval '10 Minute' "
                    }else if(this.setInterval == "30"){
                        this.for_downtitle_m = "Interval '30 Minute' "
                    }else if(this.setInterval == "60"){
                        this.for_downtitle_m = "Interval '01 Hour' "
                    }

                    var moment = require('moment');
                    this.excel_timing_m = "Timing "+ moment(this.startdate).format('YYYY-MM-DD hh:mm A')+" And "+moment(this.enddate).format('MM-DD-YYYY hh:mm A');
                    
                     this.title_timing =this.title_downtitle.splice(30, 0, "And Timing is 'Manual Timing Selection ' "+ moment(this.startdate).format('YYYY-MM-DD hh:mm A')+" And "+moment(this.enddate).format('MM-DD-YYYY hh:mm A')+"");
                }
            }
            var new_val_1=[];
            var new_val_2=[];
            var new_val_3=[];
            new_val_1.push("Timing")
            new_val_2.push("timing"+":"+"Timing");
            new_val_3.push("."+":"+"Timing");
            for(let i=0;  i <= this.val_1.length; i++){
                
                if(this.val_1[i]=='pit_level'){
                    new_val_1.push('PIT')
                } if(this.val_1[i]=='pit_vol'){
                    new_val_1.push('PIT vol')
                }
                // For VG
                if(this.val_1[i]=='vg_1'){
                    new_val_1.push('Vac Line')
                }
                // For RDL 25
                 if(this.val_1[i]=='rdl25_volume'){
                    new_val_1.push('V H2SO4-T')
                } if(this.val_1[i]=='rdl25_mass'){
                    new_val_1.push('M H2SO4-T')
                }
                // For Pressure
                if(this.val_1[i]=='pt_1'){
                    new_val_1.push('P GLV')
                } if(this.val_1[i]=='pt_2'){
                    new_val_1.push('P GLV Condenser')
                } if(this.val_1[i]=='pt_3'){
                    new_val_1.push('P Trans Reactor')
                } if(this.val_1[i]=='pt_4'){
                    new_val_1.push('P T601')
                } if(this.val_1[i]=='pt_5'){
                    new_val_1.push('P Distillation Header')
                }
                // For RDL And DPL
                if(this.val_1[i]=='rdl_1'){
                    new_val_1.push('D101 A')
                } if(this.val_1[i]=='rdl_2'){
                    new_val_1.push('D101 B')
                } if(this.val_1[i]=='rdl_3'){
                    new_val_1.push('D405 A')
                } if(this.val_1[i]=='rdl_4'){
                    new_val_1.push('D405 B')
                } if(this.val_1[i]=='rdl_5'){
                    new_val_1.push('D405 C')
                } if(this.val_1[i]=='rdl_6'){
                    new_val_1.push('C401A')
                } if(this.val_1[i]=='rdl_7'){
                    new_val_1.push('C401B')
                } if(this.val_1[i]=='rdl_8'){
                    new_val_1.push('D402 A')
                } if(this.val_1[i]=='rdl_9'){
                    new_val_1.push('D402 B')
                } if(this.val_1[i]=='rdl_10'){
                    new_val_1.push('D402 C')
                } if(this.val_1[i]=='rdl_11'){
                    new_val_1.push('D402 D')
                } if(this.val_1[i]=='rdl_12'){
                    new_val_1.push('GLV')
                } if(this.val_1[i]=='rdl_13'){
                    new_val_1.push('Setling A')
                } if(this.val_1[i]=='rdl_14'){
                    new_val_1.push('Setling B')
                } if(this.val_1[i]=='rdl_15'){
                    new_val_1.push('Setling C')
                } if(this.val_1[i]=='rdl_16'){
                    new_val_1.push('Mthnl-1')
                } if(this.val_1[i]=='rdl_17'){
                    new_val_1.push('TAR TANK')
                } if(this.val_1[i]=='rdl_18'){
                    new_val_1.push('GST T-1')
                } if(this.val_1[i]=='rdl_19'){
                    new_val_1.push('Mthnl-2')
                } if(this.val_1[i]=='rdl_20'){
                    new_val_1.push('SP-1')
                } if(this.val_1[i]=='rdl_21'){
                    new_val_1.push('SP-2')
                } if(this.val_1[i]=='rdl_22'){
                    new_val_1.push('SP-3')
                } if(this.val_1[i]=='rdl_23'){
                    new_val_1.push('PPRA')
                } if(this.val_1[i]=='rdl_24'){
                    new_val_1.push('PPRB')
                } if(this.val_1[i]=='rdl_25'){
                    new_val_1.push('H2SO4-T')
                } if(this.val_1[i]=='rdl_32'){
                    new_val_1.push('GTS-2')
                }
                 if(this.val_1[i]=='dpl_1'){
                    new_val_1.push('D501')
                } if(this.val_1[i]=='dpl_2'){
                    new_val_1.push('E401')
                } if(this.val_1[i]=='dpl_3'){
                    new_val_1.push('T601')
                } if(this.val_1[i]=='dpl_4'){
                    new_val_1.push('D503')
                } if(this.val_1[i]=='dpl_5'){
                    new_val_1.push('D504')
                } if(this.val_1[i]=='dpl_6'){
                    new_val_1.push('T501')
                } if(this.val_1[i]=='dpl_7'){
                    new_val_1.push('T502')
                } if(this.val_1[i]=='dpl_8'){
                    new_val_1.push('Bio Store')
                }
                  // For RDL Volume And DPL Volume
                if(this.val_1[i]=='vr_1'){
                    new_val_1.push('V-D101 A')
                } if(this.val_1[i]=='vr_2'){
                    new_val_1.push('V-D101 B')
                } if(this.val_1[i]=='vr_3'){
                    new_val_1.push('D405 A')
                } if(this.val_1[i]=='vr_4'){
                    new_val_1.push('V-D405 B')
                } if(this.val_1[i]=='vr_5'){
                    new_val_1.push('V-D405 C')
                } if(this.val_1[i]=='vr_6'){
                    new_val_1.push('V-C401A')
                } if(this.val_1[i]=='vr_7'){
                    new_val_1.push('V-C401B')
                } if(this.val_1[i]=='vr_8'){
                    new_val_1.push('V-D402 A')
                } if(this.val_1[i]=='vr_9'){
                    new_val_1.push('V-D402 B')
                } if(this.val_1[i]=='vr_10'){
                    new_val_1.push('V-D402 C')
                } if(this.val_1[i]=='vr_11'){
                    new_val_1.push('V-D402 D')
                } if(this.val_1[i]=='vr_12'){
                    new_val_1.push('V-GLV')
                } if(this.val_1[i]=='vr_13'){
                    new_val_1.push('V-Setling A')
                } if(this.val_1[i]=='vr_14'){
                    new_val_1.push('V-Setling B')
                } if(this.val_1[i]=='vr_15'){
                    new_val_1.push('V-Setling C')
                } if(this.val_1[i]=='vr_16'){
                    new_val_1.push('V-Mthnl-1')
                } if(this.val_1[i]=='vr_17'){
                    new_val_1.push('V-TAR TANK')
                } if(this.val_1[i]=='vr_18'){
                    new_val_1.push('V-GST T-1')
                } if(this.val_1[i]=='vr_19'){
                    new_val_1.push('V-Mthnl-2')
                } if(this.val_1[i]=='vr_20'){
                    new_val_1.push('V-SP-1')
                } if(this.val_1[i]=='vr_21'){
                    new_val_1.push('V-SP-2')
                } if(this.val_1[i]=='vr_22'){
                    new_val_1.push('V-SP-3')
                } if(this.val_1[i]=='vr_23'){
                    new_val_1.push('V-PPRA')
                } if(this.val_1[i]=='vr_24'){
                    new_val_1.push('V-PPRB')
                } if(this.val_1[i]=='vr_25'){
                    new_val_1.push('V-H2SO4-T')
                }if(this.val_1[i]=='vr_32'){
                    new_val_1.push('V-GST-2')
                } if(this.val_1[i]=='vd_1'){
                    new_val_1.push('V-D501')
                } if(this.val_1[i]=='vd_2'){
                    new_val_1.push('V-E401')
                } if(this.val_1[i]=='vd_3'){
                    new_val_1.push('V-T601')
                } if(this.val_1[i]=='vd_4'){
                    new_val_1.push('V-D503')
                } if(this.val_1[i]=='vd_5'){
                    new_val_1.push('V-D504')
                } if(this.val_1[i]=='vd_6'){
                    new_val_1.push('V-T501')
                } if(this.val_1[i]=='vd_7'){
                    new_val_1.push('V-T502')
                } if(this.val_1[i]=='vd_8'){
                    new_val_1.push('V-Bio Store')
                }
               // For Temperature Label
                if(this.val_1[i]=='rtd_1'){
                    new_val_1.push('E101')
                } if(this.val_1[i]=='rtd_2'){
                    new_val_1.push('D101 A')
                } if(this.val_1[i]=='rtd_3'){
                    new_val_1.push('D101 B')
                } if(this.val_1[i]=='rtd_4'){
                    new_val_1.push('E201')
                } if(this.val_1[i]=='rtd_5'){
                    new_val_1.push('GLV-TOP')
                } if(this.val_1[i]=='rtd_6'){
                    new_val_1.push('GLV-Mid')
                } if(this.val_1[i]=='rtd_7'){
                    new_val_1.push('GLV-Bot')
                } if(this.val_1[i]=='rtd_8'){
                    new_val_1.push('GLV Evap')
                } if(this.val_1[i]=='rtd_9'){
                    new_val_1.push('Setling A')
                } if(this.val_1[i]=='rtd_10'){
                    new_val_1.push('Setling B')
                } if(this.val_1[i]=='rtd_11'){
                    new_val_1.push('Setling C')
                } if(this.val_1[i]=='rtd_12'){
                    new_val_1.push('Hot Water')
                } if(this.val_1[i]=='rtd_13'){
                    new_val_1.push('D402 A')
                } if(this.val_1[i]=='rtd_14'){
                    new_val_1.push('D402 B')
                } if(this.val_1[i]=='rtd_15'){
                    new_val_1.push('D402 C')
                } if(this.val_1[i]=='rtd_16'){
                    new_val_1.push('D402 D')
                } if(this.val_1[i]=='rtd_17'){
                    new_val_1.push('Trans Evap')
                } if(this.val_1[i]=='rtd_18'){
                    new_val_1.push('Blue Ves')
                } if(this.val_1[i]=='rtd_19'){
                    new_val_1.push('Green Ves')
                } if(this.val_1[i]=='rtd_20'){
                    new_val_1.push('Old Green Ves')
                } if(this.val_1[i]=='rtd_21'){
                    new_val_1.push('E601')
                } if(this.val_1[i]=='rtd_22'){
                    new_val_1.push('T601-Top')
                } if(this.val_1[i]=='rtd_23'){
                    new_val_1.push('T601-Mid')
                } if(this.val_1[i]=='rtd_24'){
                    new_val_1.push('T601-Bot')
                } if(this.val_1[i]=='rtd_25'){
                    new_val_1.push('E501')
                } if(this.val_1[i]=='rtd_26'){
                    new_val_1.push('D501')
                } if(this.val_1[i]=='rtd_27'){
                    new_val_1.push('T501-Top')
                } if(this.val_1[i]=='rtd_28'){
                    new_val_1.push('T501-mid')
                } if(this.val_1[i]=='rtd_29'){
                    new_val_1.push('T501-Bot')
                } if(this.val_1[i]=='rtd_30'){
                    new_val_1.push('T502-Mid')
                } if(this.val_1[i]=='rtd_31'){
                    new_val_1.push('T502-Bot')
                } if(this.val_1[i]=='rtd_32'){
                    new_val_1.push('PPRA')
                } if(this.val_1[i]=='rtd_33'){
                    new_val_1.push('PPRB')
                } if(this.val_1[i]=='rtd_34'){
                    new_val_1.push('GST1')
                } if(this.val_1[i]=='rtd_35'){
                    new_val_1.push('Trans reac')
                } if(this.val_1[i]=='rtd_36'){
                    new_val_1.push('Bio Store')
                } if(this.val_1[i]=='rtd_37'){
                    new_val_1.push('Bio Trans')
                } if(this.val_1[i]=='rtd_42'){
                    new_val_1.push('GST-2')
                }
                // For FM
                 if(this.val_1[i] == 'fm_1'){
                    new_val_1.push("FM 1(Trans Oil))")
                } if(this.val_1[i] == 'fm_2'){
                    new_val_1.push("FM 2( Alkali Trans)")
                } if(this.val_1[i] == 'fm_3'){
                    new_val_1.push("FM 3 (Trans.Evp to N1)")
                } if(this.val_1[i] == 'fm_4'){
                    new_val_1.push("FM 4 (Water N1)")
                } if(this.val_1[i] == 'fm_5'){
                    new_val_1.push("FM 5 (N2 to D402)")
                } if(this.val_1[i] == 'fm_6'){
                    new_val_1.push("FM 6 (N3 to Slagpool)")
                } if(this.val_1[i] == 'fm_7'){
                    new_val_1.push("FM 7 (D602 to MST)")
                } if(this.val_1[i] == 'fm_8'){
                    new_val_1.push("FM 8 (D402-D501)")
                } if(this.val_1[i] == 'fm_9'){
                    new_val_1.push("FM 9 (D501-T501)")
                } if(this.val_1[i] == 'fm_10'){
                    new_val_1.push("FM 69 (Nickle)")
                }
                // if(this.val_1[i] == 'fm_10'){
                //     new_val_1.push("FM 10 (T501-T502)")Nickle
                // }
                if(this.val_1[i] == 'fm_11'){
                    new_val_1.push("FM 11 (Tar Transfer)")
                } if(this.val_1[i] == 'fm_12'){
                    new_val_1.push("FM 12 (Recycle-D405)")
                } if(this.val_1[i] == 'fm_13'){
                    new_val_1.push("FM 13 (Biodisl to Strg)")
                } if(this.val_1[i] == 'fm_14'){
                    new_val_1.push("FM 14 (D403 to T601)")
                } if(this.val_1[i] == 'fm_15'){
                    new_val_1.push("FM 15 (T601 to D602)")
                } if(this.val_1[i] == 'fm_16'){
                    new_val_1.push("FM 16 (T601 to Reflx)")
                } if(this.val_1[i] == 'fm_17'){
                    new_val_1.push("FM 17 (T601 Drain)")
                } if(this.val_1[i] == 'fm_18'){
                    new_val_1.push("FM 18 (Mthnl to GST)")
                } if(this.val_1[i] == 'fm_19'){
                    new_val_1.push("FM 19 (Mthnl to PPR)")
                } if(this.val_1[i] == 'fm_20'){
                    new_val_1.push("FM 20 (Mthnl to GLV)")
                } if(this.val_1[i] == 'fm_21'){
                    new_val_1.push("FM 21 (Mthnl to Trans)")
                } if(this.val_1[i] == 'fm_22'){
                    new_val_1.push("FM 22 (Biodisl to Truck)")
                } if(this.val_1[i] == 'fm_23'){
                    new_val_1.push("FM 23 (RM Offload)")
                } if(this.val_1[i] == 'fm_24'){
                    new_val_1.push("FM 24 (RM to Settling)")
                } if(this.val_1[i] == 'fm_25'){
                    new_val_1.push("FM 25 (Settling to D101")
                } if(this.val_1[i] == 'fm_26'){
                    new_val_1.push("FM 26 (CT Outlet)")
                } if(this.val_1[i] == "fm_27"){
                    new_val_1.push("FM 27 (CT Inlet)");
                } if(this.val_1[i] == "fm_45"){
                    new_val_1.push("FM 45 (Mthnl Trans)");
                } if(this.val_1[i] == "fm_62"){
                    new_val_1.push("FM 62 (RVP Flow)");
                } if(this.val_1[i] == "fm_66"){
                    new_val_1.push("FM 66 (Milky Flow)");
                } if(this.val_1[i] == "fm_36"){
                    new_val_1.push("FM 36 (Alkali to D402)");
                } if(this.val_1[i] == "fm_69"){
                    new_val_1.push("FM 69 (Nickle)");
                }
                // For FT
                 if(this.val_1[i] == 'ft_1'){
                    new_val_1.push("FT 1(Trans Oil))")
                } if(this.val_1[i] == 'ft_2'){
                    new_val_1.push("FT 2( Alkali Trans)")
                } if(this.val_1[i] == 'ft_3'){
                    new_val_1.push("FT 3 (Trans.Evp to N1)")
                } if(this.val_1[i] == 'ft_4'){
                    new_val_1.push("FT 4 (Water N1)")
                } if(this.val_1[i] == 'ft_5'){
                    new_val_1.push("FT 5 (N2 to D402)")
                } if(this.val_1[i] == 'ft_6'){
                    new_val_1.push("FT 6 (N3 to Slagpool)")
                } if(this.val_1[i] == 'ft_7'){
                    new_val_1.push("FT 7 (D602 to MST)")
                } if(this.val_1[i] == 'ft_8'){
                    new_val_1.push("FT 8 (D402-D501)")
                } if(this.val_1[i] == 'ft_9'){
                    new_val_1.push("FT 9 (D501-T501)")
                } if(this.val_1[i] == 'ft_10'){
                    new_val_1.push("FT 69 (Nickle)")
                }
                
                // if(this.val_1[i] == 'ft_10'){
                //     new_val_1.push("FT 10 (T501-T502)")
                // }
                
                if(this.val_1[i] == 'ft_11'){
                    new_val_1.push("FT 11 (Tar Transfer)")
                } if(this.val_1[i] == 'ft_12'){
                    new_val_1.push("FT 12 (Recycle-D405)")
                } if(this.val_1[i] == 'ft_13'){
                    new_val_1.push("FT 13 (Biodisl to Strg)")
                } if(this.val_1[i] == 'ft_14'){
                    new_val_1.push("FT 14 (D403 to T601)")
                } if(this.val_1[i] == 'ft_15'){
                    new_val_1.push("FT 15 (T601 to D602)")
                } if(this.val_1[i] == 'ft_16'){
                    new_val_1.push("FT 16 (T601 to Reflx)")
                } if(this.val_1[i] == 'ft_17'){
                    new_val_1.push("FT 17 (T601 Drain)")
                } if(this.val_1[i] == 'ft_18'){
                    new_val_1.push("FT 18 (Mthnl to GST)")
                } if(this.val_1[i] == 'ft_19'){
                    new_val_1.push("FT 19 (Mthnl to PPR)")
                } if(this.val_1[i] == 'ft_20'){
                    new_val_1.push("FT 20 (Mthnl to GLV)")
                } if(this.val_1[i] == 'ft_21'){
                    new_val_1.push("FT 21 (Mthnl to Trans)")
                } if(this.val_1[i] == 'ft_22'){
                    new_val_1.push("FT 22 (Biodisl to Truck)")
                } if(this.val_1[i] == 'ft_23'){
                    new_val_1.push("FT 23 (RM Offload)")
                } if(this.val_1[i] == 'ft_24'){
                    new_val_1.push("FT 24 (RM to Settling)")
                } if(this.val_1[i] == 'ft_25'){
                    new_val_1.push("FT 25 (Settling to D101")
                } if(this.val_1[i] == 'ft_26'){
                    new_val_1.push("FT 26 (CT Outlet)")
                } if(this.val_1[i] == "ft_27"){
                    new_val_1.push("FT 27 (CT Inlet)")
                } if(this.val_1[i] == "ft_45"){
                    new_val_1.push("FT 45 (Mthnl Trans)")
                } if(this.val_1[i] == "ft_62"){
                    new_val_1.push("FT 62 (RVP Flow)")
                } if(this.val_1[i] == "ft_66"){
                    new_val_1.push("FT 66 (Milky Flow)")
                } if(this.val_1[i] == "ft_36"){
                    new_val_1.push("FT 36 (Alkali to D402)")
                } if(this.val_1[i] == "ft_69"){
                    new_val_1.push("FT 69 (Nickle)")
                }

                if(this.val_1[i] == 'fm1_den'){
                    new_val_1.push("Den 1(Trans Oil))")
                } if(this.val_1[i] == 'fm2_den'){
                    new_val_1.push("Den 2( Alkali Trans)")
                } if(this.val_1[i] == 'fm3_den'){
                    new_val_1.push("Den 3 (Trans.Evp to N1)")
                } if(this.val_1[i] == 'fm4_den'){
                    new_val_1.push("Den 4 (Water N1)")
                } if(this.val_1[i] == 'fm5_den'){
                    new_val_1.push("Den 5 (N2 to D402)")
                } if(this.val_1[i] == 'fm6_den'){
                    new_val_1.push("Den 6 (N3 to Slagpool)")
                } if(this.val_1[i] == 'fm7_den'){
                    new_val_1.push("Den 7 (D602 to MST)")
                } if(this.val_1[i] == 'fm8_den'){
                    new_val_1.push("Den 8 (D402-D501)")
                } if(this.val_1[i] == 'fm9_den'){
                    new_val_1.push("Den 9 (D501-T501)")
                } if(this.val_1[i] == 'fm10_den'){
                    new_val_1.push("Den 69 (Nickle)")
                }
                
                // if(this.val_1[i] == 'fm10_den'){
                //     new_val_1.push("Den 10 (T501-T502)")
                // }
                
                if(this.val_1[i] == 'fm11_den'){
                    new_val_1.push("Den 11 (Tar Transfer)")
                } if(this.val_1[i] == 'fm12_den'){
                    new_val_1.push("Den 12 (Recycle-D405)")
                } if(this.val_1[i] == 'fm13_den'){
                    new_val_1.push("Den 13 (Biodisl to Strg)")
                } if(this.val_1[i] == 'fm14_den'){
                    new_val_1.push("Den 14 (D403 to T601)")
                } if(this.val_1[i] == 'fm15_den'){
                    new_val_1.push("Den 15 (T601 to D602)")
                } if(this.val_1[i] == 'fm16_den'){
                    new_val_1.push("Den 16 (T601 to Reflx)")
                } if(this.val_1[i] == 'fm17_den'){
                    new_val_1.push("Den 17 (T601 Drain)")
                } if(this.val_1[i] == 'fm18_den'){
                    new_val_1.push("Den 18 (Mthnl to GST)")
                } if(this.val_1[i] == 'fm19_den'){
                    new_val_1.push("Den 19 (Mthnl to PPR)")
                } if(this.val_1[i] == 'fm20_den'){
                    new_val_1.push("Den 20 (Mthnl to GLV)")
                } if(this.val_1[i] == 'fm21_den'){
                    new_val_1.push("Den 21 (Mthnl to Trans)")
                } if(this.val_1[i] == 'fm22_den'){
                    new_val_1.push("Den 22 (Biodisl to Truck)")
                } if(this.val_1[i] == 'fm23_den'){
                    new_val_1.push("Den 23 (RM Offload)")
                } if(this.val_1[i] == 'fm24_den'){
                    new_val_1.push("Den 24 (RM to Settling)")
                } if(this.val_1[i] == 'fm25_den'){
                    new_val_1.push("Den 25 (Settling to D101")
                } if(this.val_1[i] == 'fm26_den'){
                    new_val_1.push("Den 26 (CT Outlet)")
                } if(this.val_1[i] == "fm27_den"){
                    new_val_1.push("Den 27 (CT Inlet)");
                } if(this.val_1[i] == "fm45_den"){
                    new_val_1.push("Den 45 (Mthnl Trans)");
                } 

                  if(this.val_1[i] == 'fm1_temp'){
                    new_val_1.push("Temp 1(Trans Oil))")
                } if(this.val_1[i] == 'fm2_temp'){
                    new_val_1.push("Temp 2( Alkali Trans)")
                } if(this.val_1[i] == 'fm3_temp'){
                    new_val_1.push("Temp 3 (Trans.Evp to N1)")
                } if(this.val_1[i] == 'fm4_temp'){
                    new_val_1.push("Temp 4 (Water N1)")
                } if(this.val_1[i] == 'fm5_temp'){
                    new_val_1.push("Temp 5 (N2 to D402)")
                } if(this.val_1[i] == 'fm6_temp'){
                    new_val_1.push("Temp 6 (N3 to Slagpool)")
                } if(this.val_1[i] == 'fm7_temp'){
                    new_val_1.push("Temp 7 (D602 to MST)")
                } if(this.val_1[i] == 'fm8_temp'){
                    new_val_1.push("Temp 8 (D402-D501)")
                } if(this.val_1[i] == 'fm9_temp'){
                    new_val_1.push("Temp 9 (D501-T501)")
                } if(this.val_1[i] == 'fm10_temp'){
                    new_val_1.push("Temp 69 (Nickle)")
                }
                
                //  if(this.val_1[i] == 'fm10_temp'){
                //     new_val_1.push("Temp 10 (T501-T502)")
                // }
                
                if(this.val_1[i] == 'fm11_temp'){
                    new_val_1.push("Temp 11 (Tar Transfer)")
                } if(this.val_1[i] == 'fm12_temp'){
                    new_val_1.push("Temp 12 (Recycle-D405)")
                } if(this.val_1[i] == 'fm13_temp'){
                    new_val_1.push("Temp 13 (Biodisl to Strg)")
                } if(this.val_1[i] == 'fm14_temp'){
                    new_val_1.push("Temp 14 (D403 to T601)")
                } if(this.val_1[i] == 'fm15_temp'){
                    new_val_1.push("Temp 15 (T601 to D602)")
                } if(this.val_1[i] == 'fm16_temp'){
                    new_val_1.push("Temp 16 (T601 to Reflx)")
                } if(this.val_1[i] == 'fm17_temp'){
                    new_val_1.push("Temp 17 (T601 Drain)")
                } if(this.val_1[i] == 'fm18_temp'){
                    new_val_1.push("Temp 18 (Mthnl to GST)")
                } if(this.val_1[i] == 'fm19_temp'){
                    new_val_1.push("Temp 19 (Mthnl to PPR)")
                } if(this.val_1[i] == 'fm20_temp'){
                    new_val_1.push("Temp 20 (Mthnl to GLV)")
                } if(this.val_1[i] == 'fm21_temp'){
                    new_val_1.push("Temp 21 (Mthnl to Trans)")
                } if(this.val_1[i] == 'fm22_temp'){
                    new_val_1.push("Temp 22 (Biodisl to Truck)")
                } if(this.val_1[i] == 'fm23_temp'){
                    new_val_1.push("Temp 23 (RM Offload)")
                } if(this.val_1[i] == 'fm24_temp'){
                    new_val_1.push("Temp 24 (RM to Settling)")
                } if(this.val_1[i] == 'fm25_temp'){
                    new_val_1.push("Temp 25 (Settling to D101")
                } if(this.val_1[i] == 'fm26_temp'){
                    new_val_1.push("Temp 26 (CT Outlet)")
                } if(this.val_1[i] == "fm27_temp"){
                    new_val_1.push("Temp 27 (CT Inlet)");
                } if(this.val_1[i] == "fm45_temp"){
                    new_val_1.push("Temp 45 (Mthnl Trans)");
                }

                  // For Main and 401 Steam
                if(this.val_1[i]=='st_fm2_flow'){
                    new_val_1.push('Main Steam Flow')
                } if(this.val_1[i]=='stfm2_flow_tot'){
                    new_val_1.push('Main Steam Total')
                } if(this.val_1[i]=='stfm2_temp'){
                    new_val_1.push('Main Steam Tempareture')
                } if(this.val_1[i]=='stfm2_pressure'){
                    new_val_1.push('Main Steam Pressure')
                } if(this.val_1[i]=='st_fm1_flow'){
                    new_val_1.push('Steam To E401 Flow')
                } if(this.val_1[i]=='stfm1_flow_tot'){
                    new_val_1.push('Steam To E401 Total')
                } if(this.val_1[i]=='stfm1_temp'){
                    new_val_1.push('Steam To E401 Tempareture')
                } if(this.val_1[i]=='stfm1_pressure'){
                    new_val_1.push('Steam To E401 Pressure')
                } 
            }
             for(let j=0;  j <= this.val_1.length; j++){
                if(this.val_1[j]=='pit_level'){
                    new_val_2.push(this.val_1[j]+":"+"PIT")
                } if(this.val_1[j]=='pit_vol'){
                    new_val_2.push(this.val_1[j]+":"+"PIT Vol")
                }
                // For VG
                if(this.val_1[j]=='vg_1'){
                    new_val_2.push(this.val_1[j]+":"+"VG 1")
                }
                // For Pressure
                if(this.val_1[j]=='pt_1'){
                    new_val_2.push(this.val_1[j]+":"+'PT 1')
                }  if(this.val_1[j]=='pt_2'){
                    new_val_2.push(this.val_1[j]+":"+'PT 2')
                }  if(this.val_1[j]=='pt_3'){
                    new_val_2.push(this.val_1[j]+":"+'PT 3')
                }  if(this.val_1[j]=='pt_4'){
                    new_val_2.push(this.val_1[j]+":"+'PT 4')
                }  if(this.val_1[j]=='pt_5'){
                    new_val_2.push(this.val_1[j]+":"+'PT 5')
                }
                // For RDL 25
                 if(this.val_1[j]=='rdl25_volume'){
                    new_val_2.push(this.val_1[j]+":"+"RDL25 V")
                } if(this.val_1[j]=='rdl25_mass'){
                    new_val_2.push(this.val_1[j]+":"+"RDL25 M")
                }
                // For RDL And DPL
                if(this.val_1[j]=='rdl_1'){
                    new_val_2.push(this.val_1[j]+":"+"RDL 1")
                } if(this.val_1[j]=='rdl_2'){
                    new_val_2.push(this.val_1[j]+":"+"RDL 2")
                } if(this.val_1[j]=='rdl_3'){
                    new_val_2.push(this.val_1[j]+":"+"RDL 3")
                } if(this.val_1[j]=='rdl_4'){
                    new_val_2.push(this.val_1[j]+":"+"RDL 4")
                } if(this.val_1[j]=='rdl_5'){
                    new_val_2.push(this.val_1[j]+":"+"RDL 5")
                } if(this.val_1[j]=='rdl_6'){
                    new_val_2.push(this.val_1[j]+":"+"RDL 6")
                } if(this.val_1[j]=='rdl_7'){
                    new_val_2.push(this.val_1[j]+":"+"RDL 7")
                } if(this.val_1[j]=='rdl_8'){
                    new_val_2.push(this.val_1[j]+":"+"RDL 8")
                } if(this.val_1[j]=='rdl_9'){
                    new_val_2.push(this.val_1[j]+":"+"RDL 9")
                } if(this.val_1[j]=='rdl_10'){
                    new_val_2.push(this.val_1[j]+":"+"RDL 10")
                } if(this.val_1[j]=='rdl_11'){
                    new_val_2.push(this.val_1[j]+":"+"RDL 11")
                } if(this.val_1[j]=='rdl_12'){
                    new_val_2.push(this.val_1[j]+":"+"RDL 12")
                } if(this.val_1[j]=='rdl_13'){
                    new_val_2.push(this.val_1[j]+":"+"RDL 13")
                } if(this.val_1[j]=='rdl_14'){
                    new_val_2.push(this.val_1[j]+":"+"RDL 14")
                } if(this.val_1[j]=='rdl_15'){
                    new_val_2.push(this.val_1[j]+":"+"RDL 15")
                } if(this.val_1[j]=='rdl_16'){
                    new_val_2.push(this.val_1[j]+":"+"RDL 16")
                } if(this.val_1[j]=='rdl_17'){
                    new_val_2.push(this.val_1[j]+":"+"RDL 17")
                } if(this.val_1[j]=='rdl_18'){
                    new_val_2.push(this.val_1[j]+":"+"RDL 18")
                } if(this.val_1[j]=='rdl_19'){
                    new_val_2.push(this.val_1[j]+":"+"RDL 19")
                } if(this.val_1[j]=='rdl_20'){
                    new_val_2.push(this.val_1[j]+":"+"RDL 20")
                } if(this.val_1[j]=='rdl_21'){
                    new_val_2.push(this.val_1[j]+":"+"RDL 21")
                } if(this.val_1[j]=='rdl_22'){
                    new_val_2.push(this.val_1[j]+":"+"RDL 22")
                } if(this.val_1[j]=='rdl_23'){
                    new_val_2.push(this.val_1[j]+":"+"RDL 23")
                } if(this.val_1[j]=='rdl_24'){
                    new_val_2.push(this.val_1[j]+":"+"RDL 24")
                } if(this.val_1[j]=='rdl_25'){
                    new_val_2.push(this.val_1[j]+":"+"RDL 25")
                } if(this.val_1[j]=='rdl_32'){
                    new_val_2.push(this.val_1[j]+":"+"RDL 32")
                } if(this.val_1[j]=='dpl_1'){
                    new_val_2.push(this.val_1[j]+":"+"DPL 1")
                } if(this.val_1[j]=='dpl_2'){
                    new_val_2.push(this.val_1[j]+":"+"DPL 2")
                } if(this.val_1[j]=='dpl_3'){
                    new_val_2.push(this.val_1[j]+":"+"DPL 3")
                } if(this.val_1[j]=='dpl_4'){
                    new_val_2.push(this.val_1[j]+":"+"DPL 4")
                } if(this.val_1[j]=='dpl_5'){
                    new_val_2.push(this.val_1[j]+":"+"DPL 5")
                } if(this.val_1[j]=='dpl_6'){
                    new_val_2.push(this.val_1[j]+":"+"DPL 6")
                } if(this.val_1[j]=='dpl_7'){
                    new_val_2.push(this.val_1[j]+":"+"DPL 7")
                } if(this.val_1[j]=='dpl_8'){
                    new_val_2.push(this.val_1[j]+":"+"DPL 8")
                }
                  // For RDL Volume And DPL Volume
                if(this.val_1[j]=='vr_1'){
                    new_val_2.push(this.val_1[j]+":"+"RDL 1_V")
                } if(this.val_1[j]=='vr_2'){
                    new_val_2.push(this.val_1[j]+":"+"RDL 2_V")
                } if(this.val_1[j]=='vr_3'){
                    new_val_2.push(this.val_1[j]+":"+"RDL 3_V")
                } if(this.val_1[j]=='vr_4'){
                    new_val_2.push(this.val_1[j]+":"+"RDL 4_V")
                } if(this.val_1[j]=='vr_5'){
                    new_val_2.push(this.val_1[j]+":"+"RDL 5_V")
                } if(this.val_1[j]=='vr_6'){
                    new_val_2.push(this.val_1[j]+":"+"RDL 6_V")
                } if(this.val_1[j]=='vr_7'){
                    new_val_2.push(this.val_1[j]+":"+"RDL 7_V")
                } if(this.val_1[j]=='vr_8'){
                    new_val_2.push(this.val_1[j]+":"+"RDL 8_V")
                } if(this.val_1[j]=='vr_9'){
                    new_val_2.push(this.val_1[j]+":"+"RDL 9_V")
                } if(this.val_1[j]=='vr_10'){
                    new_val_2.push(this.val_1[j]+":"+"RDL 10_V")
                } if(this.val_1[j]=='vr_11'){
                    new_val_2.push(this.val_1[j]+":"+"RDL 11_V")
                } if(this.val_1[j]=='vr_12'){
                    new_val_2.push(this.val_1[j]+":"+"RDL 12_V")
                } if(this.val_1[j]=='vr_13'){
                    new_val_2.push(this.val_1[j]+":"+"RDL 13_V")
                } if(this.val_1[j]=='vr_14'){
                    new_val_2.push(this.val_1[j]+":"+"RDL 14_V")
                } if(this.val_1[j]=='vr_15'){
                    new_val_2.push(this.val_1[j]+":"+"RDL 15_V")
                } if(this.val_1[j]=='vr_16'){
                    new_val_2.push(this.val_1[j]+":"+"RDL 16_V")
                } if(this.val_1[j]=='vr_17'){
                    new_val_2.push(this.val_1[j]+":"+"RDL 17_V")
                } if(this.val_1[j]=='vr_18'){
                    new_val_2.push(this.val_1[j]+":"+"RDL 18_V")
                } if(this.val_1[j]=='vr_19'){
                    new_val_2.push(this.val_1[j]+":"+"RDL 19_V")
                } if(this.val_1[j]=='vr_20'){
                    new_val_2.push(this.val_1[j]+":"+"RDL 20_V")
                } if(this.val_1[j]=='vr_21'){
                    new_val_2.push(this.val_1[j]+":"+"RDL 21_V")
                } if(this.val_1[j]=='vr_22'){
                    new_val_2.push(this.val_1[j]+":"+"RDL 22_V")
                } if(this.val_1[j]=='vr_23'){
                    new_val_2.push(this.val_1[j]+":"+"RDL 23_V")
                } if(this.val_1[j]=='vr_24'){
                    new_val_2.push(this.val_1[j]+":"+"RDL 24_V")
                } if(this.val_1[j]=='vr_25'){
                    new_val_2.push(this.val_1[j]+":"+"RDL 25_V")
                } if(this.val_1[j]=='vr_32'){
                    new_val_2.push(this.val_1[j]+":"+"RDL 32_V")
                } if(this.val_1[j]=='vd_1'){
                    new_val_2.push(this.val_1[j]+":"+"DPL 1_V")
                } if(this.val_1[j]=='vd_2'){
                    new_val_2.push(this.val_1[j]+":"+"DPL 2_V")
                } if(this.val_1[j]=='vd_3'){
                    new_val_2.push(this.val_1[j]+":"+"DPL 3_V")
                } if(this.val_1[j]=='vd_4'){
                    new_val_2.push(this.val_1[j]+":"+"DPL 4_V")
                } if(this.val_1[j]=='vd_5'){
                    new_val_2.push(this.val_1[j]+":"+"DPL 5_V")
                } if(this.val_1[j]=='vd_6'){
                    new_val_2.push(this.val_1[j]+":"+"DPL 6_V")
                } if(this.val_1[j]=='vd_7'){
                    new_val_2.push(this.val_1[j]+":"+"DPL 7_V")
                } if(this.val_1[j]=='vd_8'){
                    new_val_2.push(this.val_1[j]+":"+"DPL 8_V")
                }
               // For Temperature Label
                if(this.val_1[j]=='rtd_1'){
                    new_val_2.push(this.val_1[j]+":"+"RTD 1")
                } if(this.val_1[j]=='rtd_2'){
                    new_val_2.push(this.val_1[j]+":"+"RTD 2")
                } if(this.val_1[j]=='rtd_3'){
                    new_val_2.push(this.val_1[j]+":"+"RTD 3")
                } if(this.val_1[j]=='rtd_4'){
                    new_val_2.push(this.val_1[j]+":"+"RTD 4")
                } if(this.val_1[j]=='rtd_5'){
                    new_val_2.push(this.val_1[j]+":"+"RTD 5")
                } if(this.val_1[j]=='rtd_6'){
                    new_val_2.push(this.val_1[j]+":"+"RTD 6")
                } if(this.val_1[j]=='rtd_7'){
                    new_val_2.push(this.val_1[j]+":"+"RTD 7")
                } if(this.val_1[j]=='rtd_8'){
                    new_val_2.push(this.val_1[j]+":"+"RTD 8")
                } if(this.val_1[j]=='rtd_9'){
                    new_val_2.push(this.val_1[j]+":"+"RTD 9")
                } if(this.val_1[j]=='rtd_10'){
                    new_val_2.push(this.val_1[j]+":"+"RTD 10")
                } if(this.val_1[j]=='rtd_11'){
                    new_val_2.push(this.val_1[j]+":"+"RTD 11")
                } if(this.val_1[j]=='rtd_12'){
                    new_val_2.push(this.val_1[j]+":"+"RTD 12")
                } if(this.val_1[j]=='rtd_13'){
                    new_val_2.push(this.val_1[j]+":"+"RTD 13")
                } if(this.val_1[j]=='rtd_14'){
                    new_val_2.push(this.val_1[j]+":"+"RTD 14")
                } if(this.val_1[j]=='rtd_15'){
                    new_val_2.push(this.val_1[j]+":"+"RTD 15")
                } if(this.val_1[j]=='rtd_16'){
                    new_val_2.push(this.val_1[j]+":"+"RTD 16")
                } if(this.val_1[j]=='rtd_17'){
                    new_val_2.push(this.val_1[j]+":"+"RTD 17")
                } if(this.val_1[j]=='rtd_18'){
                    new_val_2.push(this.val_1[j]+":"+"RTD 18")
                } if(this.val_1[j]=='rtd_19'){
                    new_val_2.push(this.val_1[j]+":"+"RTD 19")
                } if(this.val_1[j]=='rtd_20'){
                    new_val_2.push(this.val_1[j]+":"+"RTD 20")
                } if(this.val_1[j]=='rtd_21'){
                    new_val_2.push(this.val_1[j]+":"+"RTD 21")
                } if(this.val_1[j]=='rtd_22'){
                    new_val_2.push(this.val_1[j]+":"+"RTD 22")
                } if(this.val_1[j]=='rtd_23'){
                    new_val_2.push(this.val_1[j]+":"+"RTD 23")
                } if(this.val_1[j]=='rtd_24'){
                    new_val_2.push(this.val_1[j]+":"+"RTD 24")
                } if(this.val_1[j]=='rtd_25'){
                    new_val_2.push(this.val_1[j]+":"+"RTD 25")
                } if(this.val_1[j]=='rtd_26'){
                    new_val_2.push(this.val_1[j]+":"+"RTD 26")
                } if(this.val_1[j]=='rtd_27'){
                    new_val_2.push(this.val_1[j]+":"+"RTD 27")
                } if(this.val_1[j]=='rtd_28'){
                    new_val_2.push(this.val_1[j]+":"+"RTD 28")
                } if(this.val_1[j]=='rtd_29'){
                    new_val_2.push(this.val_1[j]+":"+"RTD 29")
                } if(this.val_1[j]=='rtd_30'){
                    new_val_2.push(this.val_1[j]+":"+"RTD 30")
                } if(this.val_1[j]=='rtd_31'){
                    new_val_2.push(this.val_1[j]+":"+"RTD 31")
                } if(this.val_1[j]=='rtd_32'){
                    new_val_2.push(this.val_1[j]+":"+"RTD 32")
                } if(this.val_1[j]=='rtd_33'){
                    new_val_2.push(this.val_1[j]+":"+"RTD 33")
                } if(this.val_1[j]=='rtd_34'){
                    new_val_2.push(this.val_1[j]+":"+"RTD 34")
                } if(this.val_1[j]=='rtd_35'){
                    new_val_2.push(this.val_1[j]+":"+"RTD 35")
                } if(this.val_1[j]=='rtd_36'){
                    new_val_2.push(this.val_1[j]+":"+"RTD 36")
                } if(this.val_1[j]=='rtd_37'){
                    new_val_2.push(this.val_1[j]+":"+"RTD 37")
                } if(this.val_1[j]=='rtd_42'){
                    new_val_2.push(this.val_1[j]+":"+"RTD 42")
                }
                // For FM
                if(this.val_1[j] == 'fm_1'){
                    new_val_2.push(this.val_1[j]+":"+"FM 1")
                } if(this.val_1[j] == 'fm_2'){
                    new_val_2.push(this.val_1[j]+":"+"FM 2")
                } if(this.val_1[j] == 'fm_3'){
                    new_val_2.push(this.val_1[j]+":"+"FM 3")
                } if(this.val_1[j] == 'fm_4'){
                    new_val_2.push(this.val_1[j]+":"+"FM 4")
                } if(this.val_1[j] == 'fm_5'){
                    new_val_2.push(this.val_1[j]+":"+"FM 5")
                } if(this.val_1[j] == 'fm_6'){
                    new_val_2.push(this.val_1[j]+":"+"FM 6")
                } if(this.val_1[j] == 'fm_7'){
                    new_val_2.push(this.val_1[j]+":"+"FM 7")
                } if(this.val_1[j] == 'fm_8'){
                    new_val_2.push(this.val_1[j]+":"+"FM 8")
                } if(this.val_1[j] == 'fm_9'){
                    new_val_2.push(this.val_1[j]+":"+"FM 9")
                } if(this.val_1[j] == 'fm_10'){
                    new_val_2.push(this.val_1[j]+":"+"FM 69")
                }
                
                // if(this.val_1[j] == 'fm_10'){
                //     new_val_2.push(this.val_1[j]+":"+"FM 10")
                // }
                
                if(this.val_1[j] == 'fm_11'){
                    new_val_2.push(this.val_1[j]+":"+"FM 11")
                } if(this.val_1[j] == 'fm_12'){
                    new_val_2.push(this.val_1[j]+":"+"FM 12")
                } if(this.val_1[j] == 'fm_13'){
                    new_val_2.push(this.val_1[j]+":"+"FM 13")
                } if(this.val_1[j] == 'fm_14'){
                    new_val_2.push(this.val_1[j]+":"+"FM 14")
                } if(this.val_1[j] == 'fm_15'){
                    new_val_2.push(this.val_1[j]+":"+"FM 15")
                } if(this.val_1[j] == 'fm_16'){
                    new_val_2.push(this.val_1[j]+":"+"FM 16")
                } if(this.val_1[j] == 'fm_17'){
                    new_val_2.push(this.val_1[j]+":"+"FM 17")
                } if(this.val_1[j] == 'fm_18'){
                    new_val_2.push(this.val_1[j]+":"+"FM 18")
                } if(this.val_1[j] == 'fm_19'){
                    new_val_2.push(this.val_1[j]+":"+"FM 19")
                } if(this.val_1[j] == 'fm_20'){
                    new_val_2.push(this.val_1[j]+":"+"FM 20")
                } if(this.val_1[j] == 'fm_21'){
                    new_val_2.push(this.val_1[j]+":"+"FM 21")
                } if(this.val_1[j] == 'fm_22'){
                    new_val_2.push(this.val_1[j]+":"+"FM 22")
                } if(this.val_1[j] == 'fm_23'){
                    new_val_2.push(this.val_1[j]+":"+"FM 23")
                } if(this.val_1[j] == 'fm_24'){
                    new_val_2.push(this.val_1[j]+":"+"FM 24")
                } if(this.val_1[j] == 'fm_25'){
                    new_val_2.push(this.val_1[j]+":"+"FM 25")
                } if(this.val_1[j] == 'fm_26'){
                    new_val_2.push(this.val_1[j]+":"+"FM 26")
                } if(this.val_1[j] == 'fm_27'){
                    new_val_2.push(this.val_1[j]+":"+"FM 27");
                } if(this.val_1[j] == 'fm_45'){
                    new_val_2.push(this.val_1[j]+":"+"FM 45");
                } if(this.val_1[j] == 'fm_62'){
                    new_val_2.push(this.val_1[j]+":"+"FM 62");
                } if(this.val_1[j] == 'fm_66'){
                    new_val_2.push(this.val_1[j]+":"+"FM 66");
                } if(this.val_1[j] == 'fm_36'){
                    new_val_2.push(this.val_1[j]+":"+"FM 36");
                } if(this.val_1[j] == 'fm_69'){
                    new_val_2.push(this.val_1[j]+":"+"FM 69");
                }
                // For FT
                 if(this.val_1[j] == 'ft_1'){
                    new_val_2.push(this.val_1[j]+":"+"FT 1")
                } if(this.val_1[j] == 'ft_2'){
                    new_val_2.push(this.val_1[j]+":"+"FT 2")
                } if(this.val_1[j] == 'ft_3'){
                    new_val_2.push(this.val_1[j]+":"+"FT 3")
                } if(this.val_1[j] == 'ft_4'){
                    new_val_2.push(this.val_1[j]+":"+"FT 4")
                } if(this.val_1[j] == 'ft_5'){
                    new_val_2.push(this.val_1[j]+":"+"FT 5")
                } if(this.val_1[j] == 'ft_6'){
                    new_val_2.push(this.val_1[j]+":"+"FT 6")
                } if(this.val_1[j] == 'ft_7'){
                    new_val_2.push(this.val_1[j]+":"+"FT 7")
                } if(this.val_1[j] == 'ft_8'){
                    new_val_2.push(this.val_1[j]+":"+"FT 8")
                } if(this.val_1[j] == 'ft_9'){
                    new_val_2.push(this.val_1[j]+":"+"FT 9")
                } if(this.val_1[j] == 'ft_10'){
                    new_val_2.push(this.val_1[j]+":"+"FT 69")
                }
                
                // if(this.val_1[j] == 'ft_10'){
                //     new_val_2.push(this.val_1[j]+":"+"FT 10")
                // }

                if(this.val_1[j] == 'ft_11'){
                    new_val_2.push(this.val_1[j]+":"+"FT 11")
                } if(this.val_1[j] == 'ft_12'){
                    new_val_2.push(this.val_1[j]+":"+"FT 12")
                } if(this.val_1[j] == 'ft_13'){
                    new_val_2.push(this.val_1[j]+":"+"FT 13")
                } if(this.val_1[j] == 'ft_14'){
                    new_val_2.push(this.val_1[j]+":"+"FT 14")
                } if(this.val_1[j] == 'ft_15'){
                    new_val_2.push(this.val_1[j]+":"+"FT 15")
                } if(this.val_1[j] == 'ft_16'){
                    new_val_2.push(this.val_1[j]+":"+"FT 16")
                } if(this.val_1[j] == 'ft_17'){
                    new_val_2.push(this.val_1[j]+":"+"FT 17")
                } if(this.val_1[j] == 'ft_18'){
                    new_val_2.push(this.val_1[j]+":"+"FT 18")
                } if(this.val_1[j] == 'ft_19'){
                    new_val_2.push(this.val_1[j]+":"+"FT 19")
                } if(this.val_1[j] == 'ft_20'){
                    new_val_2.push(this.val_1[j]+":"+"FT 20")
                } if(this.val_1[j] == 'ft_21'){
                    new_val_2.push(this.val_1[j]+":"+"FT 21")
                } if(this.val_1[j] == 'ft_22'){
                    new_val_2.push(this.val_1[j]+":"+"FT 22")
                } if(this.val_1[j] == 'ft_23'){
                    new_val_2.push(this.val_1[j]+":"+"FT 23")
                } if(this.val_1[j] == 'ft_24'){
                    new_val_2.push(this.val_1[j]+":"+"FT 24")
                } if(this.val_1[j] == 'ft_25'){
                    new_val_2.push(this.val_1[j]+":"+"FT 25")
                } if(this.val_1[j] == 'ft_26'){
                    new_val_2.push(this.val_1[j]+":"+"FT 26")
                } if(this.val_1[j] == 'ft_27'){
                    new_val_2.push(this.val_1[j]+":"+"FT 27");
                } if(this.val_1[j] == 'ft_45'){
                    new_val_2.push(this.val_1[j]+":"+"FT 45");
                } if(this.val_1[j] == 'ft_62'){
                    new_val_2.push(this.val_1[j]+":"+"FT 62");
                } if(this.val_1[j] == 'ft_66'){
                    new_val_2.push(this.val_1[j]+":"+"FT 66");
                } if(this.val_1[j] == 'ft_36'){
                    new_val_2.push(this.val_1[j]+":"+"FT 36");
                } if(this.val_1[j] == 'ft_69'){
                    new_val_2.push(this.val_1[j]+":"+"FT 69");
                }
                // For Density
                   if(this.val_1[j] == 'fm1_den'){
                    new_val_2.push(this.val_1[j]+":"+"Den 1")
                } if(this.val_1[j] == 'fm2_den'){
                    new_val_2.push(this.val_1[j]+":"+"Den 2")
                } if(this.val_1[j] == 'fm3_den'){
                    new_val_2.push(this.val_1[j]+":"+"Den 3")
                } if(this.val_1[j] == 'fm4_den'){
                    new_val_2.push(this.val_1[j]+":"+"Den 4")
                } if(this.val_1[j] == 'fm5_den'){
                    new_val_2.push(this.val_1[j]+":"+"Den 5")
                } if(this.val_1[j] == 'fm6_den'){
                    new_val_2.push(this.val_1[j]+":"+"Den 6")
                } if(this.val_1[j] == 'fm7_den'){
                    new_val_2.push(this.val_1[j]+":"+"Den 7")
                } if(this.val_1[j] == 'fm8_den'){
                    new_val_2.push(this.val_1[j]+":"+"Den 8")
                } if(this.val_1[j] == 'fm9_den'){
                    new_val_2.push(this.val_1[j]+":"+"Den 9")
                } if(this.val_1[j] == 'fm10_den'){
                    new_val_2.push(this.val_1[j]+":"+"Den 69")
                } 
                
                //  if(this.val_1[j] == 'fm10_den'){
                //     new_val_2.push(this.val_1[j]+":"+"Den 10")
                // } 
                
                if(this.val_1[j] == 'fm11_den'){
                    new_val_2.push(this.val_1[j]+":"+"Den 11")
                } if(this.val_1[j] == 'fm12_den'){
                    new_val_2.push(this.val_1[j]+":"+"Den 12")
                } if(this.val_1[j] == 'fm13_den'){
                    new_val_2.push(this.val_1[j]+":"+"Den 13")
                } if(this.val_1[j] == 'fm14_den'){
                    new_val_2.push(this.val_1[j]+":"+"Den 14")
                } if(this.val_1[j] == 'fm15_den'){
                    new_val_2.push(this.val_1[j]+":"+"Den 15")
                } if(this.val_1[j] == 'fm16_den'){
                    new_val_2.push(this.val_1[j]+":"+"Den 16")
                } if(this.val_1[j] == 'fm17_den'){
                    new_val_2.push(this.val_1[j]+":"+"Den 17")
                } if(this.val_1[j] == 'fm18_den'){
                    new_val_2.push(this.val_1[j]+":"+"Den 18")
                } if(this.val_1[j] == 'fm19_den'){
                    new_val_2.push(this.val_1[j]+":"+"Den 19")
                } if(this.val_1[j] == 'fm20_den'){
                    new_val_2.push(this.val_1[j]+":"+"Den 20")
                } if(this.val_1[j] == 'fm21_den'){
                    new_val_2.push(this.val_1[j]+":"+"Den 21")
                } if(this.val_1[j] == 'fm22_den'){
                    new_val_2.push(this.val_1[j]+":"+"Den 22")
                } if(this.val_1[j] == 'fm23_den'){
                    new_val_2.push(this.val_1[j]+":"+"Den 23")
                } if(this.val_1[j] == 'fm24_den'){
                    new_val_2.push(this.val_1[j]+":"+"Den 24")
                } if(this.val_1[j] == 'fm25_den'){
                    new_val_2.push(this.val_1[j]+":"+"Den 25")
                } if(this.val_1[j] == 'fm26_den'){
                    new_val_2.push(this.val_1[j]+":"+"Den 26")
                } if(this.val_1[j] == "fm27_den"){
                    new_val_2.push(this.val_1[j]+":"+"Den 27");
                } if(this.val_1[j] == "fm45_den"){
                    new_val_2.push(this.val_1[j]+":"+"Den 45");
                }

                  if(this.val_1[j] == 'fm1_temp'){
                    new_val_2.push(this.val_1[j]+":"+"Temp 1")
                } if(this.val_1[j] == 'fm2_temp'){
                    new_val_2.push(this.val_1[j]+":"+"Temp 2")
                } if(this.val_1[j] == 'fm3_temp'){
                    new_val_2.push(this.val_1[j]+":"+"Temp 3")
                } if(this.val_1[j] == 'fm4_temp'){
                    new_val_2.push(this.val_1[j]+":"+"Temp 4")
                } if(this.val_1[j] == 'fm5_temp'){
                    new_val_2.push(this.val_1[j]+":"+"Temp 5")
                } if(this.val_1[j] == 'fm6_temp'){
                    new_val_2.push(this.val_1[j]+":"+"Temp 6")
                } if(this.val_1[j] == 'fm7_temp'){
                    new_val_2.push(this.val_1[j]+":"+"Temp 7")
                } if(this.val_1[j] == 'fm8_temp'){
                    new_val_2.push(this.val_1[j]+":"+"Temp 8")
                } if(this.val_1[j] == 'fm9_temp'){
                    new_val_2.push(this.val_1[j]+":"+"Temp 9")
                } if(this.val_1[j] == 'fm10_temp'){
                    new_val_2.push(this.val_1[j]+":"+"Temp 69")
                } 
                
                // if(this.val_1[j] == 'fm10_temp'){
                //     new_val_2.push(this.val_1[j]+":"+"Temp 10")
                // }
                
                if(this.val_1[j] == 'fm11_temp'){
                    new_val_2.push(this.val_1[j]+":"+"Temp 11")
                } if(this.val_1[j] == 'fm12_temp'){
                    new_val_2.push(this.val_1[j]+":"+"Temp 12")
                } if(this.val_1[j] == 'fm13_temp'){
                    new_val_2.push(this.val_1[j]+":"+"Temp 13")
                } if(this.val_1[j] == 'fm14_temp'){
                    new_val_2.push(this.val_1[j]+":"+"Temp 14")
                } if(this.val_1[j] == 'fm15_temp'){
                    new_val_2.push(this.val_1[j]+":"+"Temp 15")
                } if(this.val_1[j] == 'fm16_temp'){
                    new_val_2.push(this.val_1[j]+":"+"Temp 16")
                } if(this.val_1[j] == 'fm17_temp'){
                    new_val_2.push(this.val_1[j]+":"+"Temp 17")
                } if(this.val_1[j] == 'fm18_temp'){
                    new_val_2.push(this.val_1[j]+":"+"Temp 18")
                } if(this.val_1[j] == 'fm19_temp'){
                    new_val_2.push(this.val_1[j]+":"+"Temp 19")
                } if(this.val_1[j] == 'fm20_temp'){
                    new_val_2.push(this.val_1[j]+":"+"Temp 20")
                } if(this.val_1[j] == 'fm21_temp'){
                    new_val_2.push(this.val_1[j]+":"+"Temp 21")
                } if(this.val_1[j] == 'fm22_temp'){
                    new_val_2.push(this.val_1[j]+":"+"Temp 22")
                } if(this.val_1[j] == 'fm23_temp'){
                    new_val_2.push(this.val_1[j]+":"+"Temp 23")
                } if(this.val_1[j] == 'fm24_temp'){
                    new_val_2.push(this.val_1[j]+":"+"Temp 24")
                } if(this.val_1[j] == 'fm25_temp'){
                    new_val_2.push(this.val_1[j]+":"+"Temp 25")
                } if(this.val_1[j] == 'fm26_temp'){
                    new_val_2.push(this.val_1[j]+":"+"Temp 26")
                } if(this.val_1[j] == "fm27_temp"){
                    new_val_2.push(this.val_1[j]+":"+"Temp 27");
                } if(this.val_1[j] == "fm45_temp"){
                    new_val_2.push(this.val_1[j]+":"+"Temp 45");
                }

                  // For Main and 401 Steam
                if(this.val_1[j]=='st_fm2_flow'){
                    new_val_2.push(this.val_1[j]+":"+"Steam FM")
                } if(this.val_1[j]=='stfm2_flow_tot'){
                    new_val_2.push(this.val_1[j]+":"+"Steam FT")
                } if(this.val_1[j]=='stfm2_temp'){
                    new_val_2.push(this.val_1[j]+":"+"Steam T")
                } if(this.val_1[j]=='stfm2_pressure'){
                    new_val_2.push(this.val_1[j]+":"+"Steam P")
                } if(this.val_1[j]=='st_fm1_flow'){
                    new_val_2.push(this.val_1[j]+":"+"E401 FM")
                } if(this.val_1[j]=='stfm1_flow_tot'){
                    new_val_2.push(this.val_1[j]+":"+"E401 FT")
                } if(this.val_1[j]=='stfm1_temp'){
                    new_val_2.push(this.val_1[j]+":"+"E401 T")
                } if(this.val_1[j]=='stfm1_pressure'){
                    new_val_2.push(this.val_1[j]+":"+"E401 P")
                } 
            }
            for(let j=0;  j <= this.val_1.length; j++){
                if(this.val_1[j]=='pit_level'){
                    new_val_3.push(this.val_1[j]+":"+"PIT")
                } if(this.val_1[j]=='pit_vol'){
                    new_val_3.push(this.val_1[j]+":"+"PIT Vol")
                }
                // For VG
                if(this.val_1[j]=='vg_1'){
                    new_val_3.push(this.val_1[j]+":"+"Vac Line")
                }
                // For Pressure
                if(this.val_1[j]=='pt_1'){
                    new_val_3.push(this.val_1[j]+":"+'GLV')
                }  if(this.val_1[j]=='pt_2'){
                    new_val_3.push(this.val_1[j]+":"+'GLV Condenser')
                }  if(this.val_1[j]=='pt_3'){
                    new_val_3.push(this.val_1[j]+":"+'Trans Reactor')
                }  if(this.val_1[j]=='pt_4'){
                    new_val_3.push(this.val_1[j]+":"+'T601')
                }  if(this.val_1[j]=='pt_5'){
                    new_val_3.push(this.val_1[j]+":"+'Disti Header')
                }
                // For RDL 25
                 if(this.val_1[j]=='rdl25_volume'){
                    new_val_3.push(this.val_1[j]+":"+"H2SO4-T")
                } if(this.val_1[j]=='rdl25_mass'){
                    new_val_3.push(this.val_1[j]+":"+"H2SO4-T")
                }
                // For RDL And DPL
                if(this.val_1[j]=='rdl_1'){
                    new_val_3.push(this.val_1[j]+":"+"D101 A")
                } if(this.val_1[j]=='rdl_2'){
                    new_val_3.push(this.val_1[j]+":"+"D101 B")
                } if(this.val_1[j]=='rdl_3'){
                    new_val_3.push(this.val_1[j]+":"+"D405 A")
                } if(this.val_1[j]=='rdl_4'){
                    new_val_3.push(this.val_1[j]+":"+"D405 B")
                } if(this.val_1[j]=='rdl_5'){
                    new_val_3.push(this.val_1[j]+":"+"D405 C")
                } if(this.val_1[j]=='rdl_6'){
                    new_val_3.push(this.val_1[j]+":"+"C401A")
                } if(this.val_1[j]=='rdl_7'){
                    new_val_3.push(this.val_1[j]+":"+"C401B")
                } if(this.val_1[j]=='rdl_8'){
                    new_val_3.push(this.val_1[j]+":"+"D402 A")
                } if(this.val_1[j]=='rdl_9'){
                    new_val_3.push(this.val_1[j]+":"+"D402 B")
                } if(this.val_1[j]=='rdl_10'){
                    new_val_3.push(this.val_1[j]+":"+"D402 C")
                } if(this.val_1[j]=='rdl_11'){
                    new_val_3.push(this.val_1[j]+":"+"D402 D")
                } if(this.val_1[j]=='rdl_12'){
                    new_val_3.push(this.val_1[j]+":"+"GLV")
                } if(this.val_1[j]=='rdl_13'){
                    new_val_3.push(this.val_1[j]+":"+"Setling A")
                } if(this.val_1[j]=='rdl_14'){
                    new_val_3.push(this.val_1[j]+":"+"Setling B")
                } if(this.val_1[j]=='rdl_15'){
                    new_val_3.push(this.val_1[j]+":"+"Setling C")
                } if(this.val_1[j]=='rdl_16'){
                    new_val_3.push(this.val_1[j]+":"+"Mthnl-1")
                } if(this.val_1[j]=='rdl_17'){
                    new_val_3.push(this.val_1[j]+":"+"TAR TANK")
                } if(this.val_1[j]=='rdl_18'){
                    new_val_3.push(this.val_1[j]+":"+"GST T-1")
                } if(this.val_1[j]=='rdl_19'){
                    new_val_3.push(this.val_1[j]+":"+"Mthnl-2")
                } if(this.val_1[j]=='rdl_20'){
                    new_val_3.push(this.val_1[j]+":"+"SP-1")
                } if(this.val_1[j]=='rdl_21'){
                    new_val_3.push(this.val_1[j]+":"+"SP-2")
                } if(this.val_1[j]=='rdl_22'){
                    new_val_3.push(this.val_1[j]+":"+"SP-3")
                } if(this.val_1[j]=='rdl_23'){
                    new_val_3.push(this.val_1[j]+":"+"PPRA")
                } if(this.val_1[j]=='rdl_24'){
                    new_val_3.push(this.val_1[j]+":"+"PPRB")
                } if(this.val_1[j]=='rdl_25'){
                    new_val_3.push(this.val_1[j]+":"+"H2SO4-T")
                } if(this.val_1[j]=='rdl_32'){
                    new_val_3.push(this.val_1[j]+":"+"GST-2")
                } if(this.val_1[j]=='dpl_1'){
                    new_val_3.push(this.val_1[j]+":"+"D501")
                } if(this.val_1[j]=='dpl_2'){
                    new_val_3.push(this.val_1[j]+":"+"E401")
                } if(this.val_1[j]=='dpl_3'){
                    new_val_3.push(this.val_1[j]+":"+"T601")
                } if(this.val_1[j]=='dpl_4'){
                    new_val_3.push(this.val_1[j]+":"+"D503")
                } if(this.val_1[j]=='dpl_5'){
                    new_val_3.push(this.val_1[j]+":"+"D504")
                } if(this.val_1[j]=='dpl_6'){
                    new_val_3.push(this.val_1[j]+":"+"T501")
                } if(this.val_1[j]=='dpl_7'){
                    new_val_3.push(this.val_1[j]+":"+"T502")
                } if(this.val_1[j]=='dpl_8'){
                    new_val_3.push(this.val_1[j]+":"+"Bio Store")
                }
                  // For RDL Volume And DPL Volume
                if(this.val_1[j]=='vr_1'){
                    new_val_3.push(this.val_1[j]+":"+"D101 A")
                } if(this.val_1[j]=='vr_2'){
                    new_val_3.push(this.val_1[j]+":"+"D101 B")
                } if(this.val_1[j]=='vr_3'){
                    new_val_3.push(this.val_1[j]+":"+"D405 A")
                } if(this.val_1[j]=='vr_4'){
                    new_val_3.push(this.val_1[j]+":"+"D405 B")
                } if(this.val_1[j]=='vr_5'){
                    new_val_3.push(this.val_1[j]+":"+"D405 C")
                } if(this.val_1[j]=='vr_6'){
                    new_val_3.push(this.val_1[j]+":"+"C401A")
                } if(this.val_1[j]=='vr_7'){
                    new_val_3.push(this.val_1[j]+":"+"C401B")
                } if(this.val_1[j]=='vr_8'){
                    new_val_3.push(this.val_1[j]+":"+"D402 A")
                } if(this.val_1[j]=='vr_9'){
                    new_val_3.push(this.val_1[j]+":"+"D402 B")
                } if(this.val_1[j]=='vr_10'){
                    new_val_3.push(this.val_1[j]+":"+"D402 C")
                } if(this.val_1[j]=='vr_11'){
                    new_val_3.push(this.val_1[j]+":"+"D402 D")
                } if(this.val_1[j]=='vr_12'){
                    new_val_3.push(this.val_1[j]+":"+"GLV")
                } if(this.val_1[j]=='vr_13'){
                    new_val_3.push(this.val_1[j]+":"+"Setling A")
                } if(this.val_1[j]=='vr_14'){
                    new_val_3.push(this.val_1[j]+":"+"Setling B")
                } if(this.val_1[j]=='vr_15'){
                    new_val_3.push(this.val_1[j]+":"+"Setling C")
                } if(this.val_1[j]=='vr_16'){
                    new_val_3.push(this.val_1[j]+":"+"Mthnl-1")
                } if(this.val_1[j]=='vr_17'){
                    new_val_3.push(this.val_1[j]+":"+"TAR TANK")
                } if(this.val_1[j]=='vr_18'){
                    new_val_3.push(this.val_1[j]+":"+"GST T-1")
                } if(this.val_1[j]=='vr_19'){
                    new_val_3.push(this.val_1[j]+":"+"Mthnl-2")
                } if(this.val_1[j]=='vr_20'){
                    new_val_3.push(this.val_1[j]+":"+"SP-1")
                } if(this.val_1[j]=='vr_21'){
                    new_val_3.push(this.val_1[j]+":"+"SP-2")
                } if(this.val_1[j]=='vr_22'){
                    new_val_3.push(this.val_1[j]+":"+"SP-3")
                } if(this.val_1[j]=='vr_23'){
                    new_val_3.push(this.val_1[j]+":"+"PPRA")
                } if(this.val_1[j]=='vr_24'){
                    new_val_3.push(this.val_1[j]+":"+"PPRB")
                } if(this.val_1[j]=='vr_25'){
                    new_val_3.push(this.val_1[j]+":"+"H2SO4-T")
                } if(this.val_1[j]=='vr_32'){
                    new_val_3.push(this.val_1[j]+":"+"GST-2")
                } if(this.val_1[j]=='vd_1'){
                    new_val_3.push(this.val_1[j]+":"+"D501")
                } if(this.val_1[j]=='vd_2'){
                    new_val_3.push(this.val_1[j]+":"+"E401")
                } if(this.val_1[j]=='vd_3'){
                    new_val_3.push(this.val_1[j]+":"+"T601")
                } if(this.val_1[j]=='vd_4'){
                    new_val_3.push(this.val_1[j]+":"+"D503")
                } if(this.val_1[j]=='vd_5'){
                    new_val_3.push(this.val_1[j]+":"+"D504")
                } if(this.val_1[j]=='vd_6'){
                    new_val_3.push(this.val_1[j]+":"+"T501")
                } if(this.val_1[j]=='vd_7'){
                    new_val_3.push(this.val_1[j]+":"+"T502")
                } if(this.val_1[j]=='vd_8'){
                    new_val_3.push(this.val_1[j]+":"+"Bio Store")
                }
               // For Temperature Label
                if(this.val_1[j]=='rtd_1'){
                    new_val_3.push(this.val_1[j]+":"+"E101")
                } if(this.val_1[j]=='rtd_2'){
                    new_val_3.push(this.val_1[j]+":"+"D101 A")
                } if(this.val_1[j]=='rtd_3'){
                    new_val_3.push(this.val_1[j]+":"+"D101 B")
                } if(this.val_1[j]=='rtd_4'){
                    new_val_3.push(this.val_1[j]+":"+"E201")
                } if(this.val_1[j]=='rtd_5'){
                    new_val_3.push(this.val_1[j]+":"+"GLV T")
                } if(this.val_1[j]=='rtd_6'){
                    new_val_3.push(this.val_1[j]+":"+"GLV M")
                } if(this.val_1[j]=='rtd_7'){
                    new_val_3.push(this.val_1[j]+":"+"GLV B")
                } if(this.val_1[j]=='rtd_8'){
                    new_val_3.push(this.val_1[j]+":"+"GLV Evp")
                } if(this.val_1[j]=='rtd_9'){
                    new_val_3.push(this.val_1[j]+":"+"Setling A")
                } if(this.val_1[j]=='rtd_10'){
                    new_val_3.push(this.val_1[j]+":"+"Setling B")
                } if(this.val_1[j]=='rtd_11'){
                    new_val_3.push(this.val_1[j]+":"+"Setling C")
                } if(this.val_1[j]=='rtd_12'){
                    new_val_3.push(this.val_1[j]+":"+"Hot Water")
                } if(this.val_1[j]=='rtd_13'){
                    new_val_3.push(this.val_1[j]+":"+"D402 A")
                } if(this.val_1[j]=='rtd_14'){
                    new_val_3.push(this.val_1[j]+":"+"D402 B")
                } if(this.val_1[j]=='rtd_15'){
                    new_val_3.push(this.val_1[j]+":"+"D402 C")
                } if(this.val_1[j]=='rtd_16'){
                    new_val_3.push(this.val_1[j]+":"+"D402 D")
                } if(this.val_1[j]=='rtd_17'){
                    new_val_3.push(this.val_1[j]+":"+"Trans Evp")
                } if(this.val_1[j]=='rtd_18'){
                    new_val_3.push(this.val_1[j]+":"+"Blue Vsl")
                } if(this.val_1[j]=='rtd_19'){
                    new_val_3.push(this.val_1[j]+":"+"Green Vsl")
                } if(this.val_1[j]=='rtd_20'){
                    new_val_3.push(this.val_1[j]+":"+"Old Green Vsl")
                } if(this.val_1[j]=='rtd_21'){
                    new_val_3.push(this.val_1[j]+":"+"E601")
                } if(this.val_1[j]=='rtd_22'){
                    new_val_3.push(this.val_1[j]+":"+"T601 T")
                } if(this.val_1[j]=='rtd_23'){
                    new_val_3.push(this.val_1[j]+":"+"T601 M")
                } if(this.val_1[j]=='rtd_24'){
                    new_val_3.push(this.val_1[j]+":"+"T601 B")
                } if(this.val_1[j]=='rtd_25'){
                    new_val_3.push(this.val_1[j]+":"+"E501")
                } if(this.val_1[j]=='rtd_26'){
                    new_val_3.push(this.val_1[j]+":"+"D501")
                } if(this.val_1[j]=='rtd_27'){
                    new_val_3.push(this.val_1[j]+":"+"T501 T")
                } if(this.val_1[j]=='rtd_28'){
                    new_val_3.push(this.val_1[j]+":"+"T501 m")
                } if(this.val_1[j]=='rtd_29'){
                    new_val_3.push(this.val_1[j]+":"+"T501 B")
                } if(this.val_1[j]=='rtd_30'){
                    new_val_3.push(this.val_1[j]+":"+"T502 M")
                } if(this.val_1[j]=='rtd_31'){
                    new_val_3.push(this.val_1[j]+":"+"T502 B")
                } if(this.val_1[j]=='rtd_32'){
                    new_val_3.push(this.val_1[j]+":"+"PPRA")
                } if(this.val_1[j]=='rtd_33'){
                    new_val_3.push(this.val_1[j]+":"+"PPRB")
                } if(this.val_1[j]=='rtd_34'){
                    new_val_3.push(this.val_1[j]+":"+"GST1")
                } if(this.val_1[j]=='rtd_35'){
                    new_val_3.push(this.val_1[j]+":"+"Trans rect")
                } if(this.val_1[j]=='rtd_36'){
                    new_val_3.push(this.val_1[j]+":"+"Bio Store")
                } if(this.val_1[j]=='rtd_37'){
                    new_val_3.push(this.val_1[j]+":"+"Bio Trans")
                } if(this.val_1[j]=='rtd_42'){
                    new_val_3.push(this.val_1[j]+":"+"GST-2")
                }
                // For FM
                if(this.val_1[j] == 'fm_1'){
                    new_val_3.push(this.val_1[j]+":"+"Trans Oil")
                } if(this.val_1[j] == 'fm_2'){
                    new_val_3.push(this.val_1[j]+":"+"Alkali Trans")
                } if(this.val_1[j] == 'fm_3'){
                    new_val_3.push(this.val_1[j]+":"+"Trans-Evp to N1")
                } if(this.val_1[j] == 'fm_4'){
                    new_val_3.push(this.val_1[j]+":"+"Water N1")
                } if(this.val_1[j] == 'fm_5'){
                    new_val_3.push(this.val_1[j]+":"+"N2 to D402")
                } if(this.val_1[j] == 'fm_6'){
                    new_val_3.push(this.val_1[j]+":"+"N3 to Slagpool")
                } if(this.val_1[j] == 'fm_7'){
                    new_val_3.push(this.val_1[j]+":"+"D602 to MST")
                } if(this.val_1[j] == 'fm_8'){
                    new_val_3.push(this.val_1[j]+":"+"D402-D501")
                } if(this.val_1[j] == 'fm_9'){
                    new_val_3.push(this.val_1[j]+":"+"D501-T501")
                } if(this.val_1[j] == 'fm_10'){
                    new_val_3.push(this.val_1[j]+":"+"Nickle")
                } 
                
                //  if(this.val_1[j] == 'fm_10'){
                //     new_val_3.push(this.val_1[j]+":"+"T501-T502")
                // } 
                
                if(this.val_1[j] == 'fm_11'){
                    new_val_3.push(this.val_1[j]+":"+"Tar Transfer")
                } if(this.val_1[j] == 'fm_12'){
                    new_val_3.push(this.val_1[j]+":"+"Recycle-D405")
                } if(this.val_1[j] == 'fm_13'){
                    new_val_3.push(this.val_1[j]+":"+"Biodisl to Strg")
                } if(this.val_1[j] == 'fm_14'){
                    new_val_3.push(this.val_1[j]+":"+"D403 to T601")
                } if(this.val_1[j] == 'fm_15'){
                    new_val_3.push(this.val_1[j]+":"+"T601 to D602")
                } if(this.val_1[j] == 'fm_16'){
                    new_val_3.push(this.val_1[j]+":"+"T601 to Reflx")
                } if(this.val_1[j] == 'fm_17'){
                    new_val_3.push(this.val_1[j]+":"+"T601 Drain")
                } if(this.val_1[j] == 'fm_18'){
                    new_val_3.push(this.val_1[j]+":"+"Mthnl to GST")
                } if(this.val_1[j] == 'fm_19'){
                    new_val_3.push(this.val_1[j]+":"+"Mthnl to PPR")
                } if(this.val_1[j] == 'fm_20'){
                    new_val_3.push(this.val_1[j]+":"+"Mthnl to GLV")
                } if(this.val_1[j] == 'fm_21'){
                    new_val_3.push(this.val_1[j]+":"+"Mthnl to Trans")
                } if(this.val_1[j] == 'fm_22'){
                    new_val_3.push(this.val_1[j]+":"+"Biodisl to Truck")
                } if(this.val_1[j] == 'fm_23'){
                    new_val_3.push(this.val_1[j]+":"+"RM Offload")
                } if(this.val_1[j] == 'fm_24'){
                    new_val_3.push(this.val_1[j]+":"+"RM to Setling")
                } if(this.val_1[j] == 'fm_25'){
                    new_val_3.push(this.val_1[j]+":"+"Setling to D101")
                } if(this.val_1[j] == 'fm_26'){
                    new_val_3.push(this.val_1[j]+":"+"CT Outlet")
                } if(this.val_1[j] == 'fm_27'){
                    new_val_3.push(this.val_1[j]+":"+"CT Inlet")
                } if(this.val_1[j] == 'fm_45'){
                    new_val_3.push(this.val_1[j]+":"+"Mthnl Trans")
                } if(this.val_1[j] == 'fm_62'){
                    new_val_3.push(this.val_1[j]+":"+"RVP Flow")
                } if(this.val_1[j] == 'fm_66'){
                    new_val_3.push(this.val_1[j]+":"+"Milky Flow")
                } if(this.val_1[j] == 'fm_36'){
                    new_val_3.push(this.val_1[j]+":"+"Alkali to D402")
                } if(this.val_1[j] == 'fm_69'){
                    new_val_3.push(this.val_1[j]+":"+"Nickle")
                }
                // For FT
                 if(this.val_1[j] == 'ft_1'){
                    new_val_3.push(this.val_1[j]+":"+"Trans Oil")
                } if(this.val_1[j] == 'ft_2'){
                    new_val_3.push(this.val_1[j]+":"+"Alkali Trans")
                } if(this.val_1[j] == 'ft_3'){
                    new_val_3.push(this.val_1[j]+":"+"Trans-Evp to N1")
                } if(this.val_1[j] == 'ft_4'){
                    new_val_3.push(this.val_1[j]+":"+"Water N1")
                } if(this.val_1[j] == 'ft_5'){
                    new_val_3.push(this.val_1[j]+":"+"N2 to D402")
                } if(this.val_1[j] == 'ft_6'){
                    new_val_3.push(this.val_1[j]+":"+"N3 to Slagpool")
                } if(this.val_1[j] == 'ft_7'){
                    new_val_3.push(this.val_1[j]+":"+"D602 to MST")
                } if(this.val_1[j] == 'ft_8'){
                    new_val_3.push(this.val_1[j]+":"+"D402-D501")
                } if(this.val_1[j] == 'ft_9'){
                    new_val_3.push(this.val_1[j]+":"+"D501-T501")
                } if(this.val_1[j] == 'ft_10'){
                    new_val_3.push(this.val_1[j]+":"+"Nickle")
                } 
                
                //  if(this.val_1[j] == 'ft_10'){
                //     new_val_3.push(this.val_1[j]+":"+"T501-T502")
                // } 
                
                if(this.val_1[j] == 'ft_11'){
                    new_val_3.push(this.val_1[j]+":"+"Tar Transfer")
                } if(this.val_1[j] == 'ft_12'){
                    new_val_3.push(this.val_1[j]+":"+"Recycle-D405")
                } if(this.val_1[j] == 'ft_13'){
                    new_val_3.push(this.val_1[j]+":"+"Biodisl to Strg")
                } if(this.val_1[j] == 'ft_14'){
                    new_val_3.push(this.val_1[j]+":"+"D403 to T601")
                } if(this.val_1[j] == 'ft_15'){
                    new_val_3.push(this.val_1[j]+":"+"T601 to D602")
                } if(this.val_1[j] == 'ft_16'){
                    new_val_3.push(this.val_1[j]+":"+"T601 to Reflx")
                } if(this.val_1[j] == 'ft_17'){
                    new_val_3.push(this.val_1[j]+":"+"T601 Drain")
                } if(this.val_1[j] == 'ft_18'){
                    new_val_3.push(this.val_1[j]+":"+"Mthnl to GST")
                } if(this.val_1[j] == 'ft_19'){
                    new_val_3.push(this.val_1[j]+":"+"Mthnl to PPR")
                } if(this.val_1[j] == 'ft_20'){
                    new_val_3.push(this.val_1[j]+":"+"Mthnl to GLV")
                } if(this.val_1[j] == 'ft_21'){
                    new_val_3.push(this.val_1[j]+":"+"Mthnl to Trans")
                } if(this.val_1[j] == 'ft_22'){
                    new_val_3.push(this.val_1[j]+":"+"Biodisl to Truck")
                } if(this.val_1[j] == 'ft_23'){
                    new_val_3.push(this.val_1[j]+":"+"RM Offload")
                } if(this.val_1[j] == 'ft_24'){
                    new_val_3.push(this.val_1[j]+":"+"RM to Setling")
                } if(this.val_1[j] == 'ft_25'){
                    new_val_3.push(this.val_1[j]+":"+"Setling to D101")
                } if(this.val_1[j] == 'ft_26'){
                    new_val_3.push(this.val_1[j]+":"+"CT Outlet")
                } if(this.val_1[j] == 'ft_27'){
                    new_val_3.push(this.val_1[j]+":"+"CT Inlet")
                } if(this.val_1[j] == 'ft_45'){
                    new_val_3.push(this.val_1[j]+":"+"Mthnl Trans")
                } if(this.val_1[j] == 'ft_62'){
                    new_val_3.push(this.val_1[j]+":"+"RVP Flow")
                } if(this.val_1[j] == 'ft_66'){
                    new_val_3.push(this.val_1[j]+":"+"Milky Flow")
                } if(this.val_1[j] == 'ft_36'){
                    new_val_3.push(this.val_1[j]+":"+"Alkali to D402")
                } if(this.val_1[j] == 'ft_69'){
                    new_val_3.push(this.val_1[j]+":"+"Nickle")
                }
                // For Density
                   if(this.val_1[j] == 'fm1_den'){
                    new_val_3.push(this.val_1[j]+":"+"Trans Oil")
                } if(this.val_1[j] == 'fm2_den'){
                    new_val_3.push(this.val_1[j]+":"+"Alkali Trans")
                } if(this.val_1[j] == 'fm3_den'){
                    new_val_3.push(this.val_1[j]+":"+"Trans.Evp to N1")
                } if(this.val_1[j] == 'fm4_den'){
                    new_val_3.push(this.val_1[j]+":"+"Water N1")
                } if(this.val_1[j] == 'fm5_den'){
                    new_val_3.push(this.val_1[j]+":"+"N2 to D402")
                } if(this.val_1[j] == 'fm6_den'){
                    new_val_3.push(this.val_1[j]+":"+"N3 to Slagpool")
                } if(this.val_1[j] == 'fm7_den'){
                    new_val_3.push(this.val_1[j]+":"+"D602 to MST")
                } if(this.val_1[j] == 'fm8_den'){
                    new_val_3.push(this.val_1[j]+":"+"D402-D501")
                } if(this.val_1[j] == 'fm9_den'){
                    new_val_3.push(this.val_1[j]+":"+"D501-T501")
                } if(this.val_1[j] == 'fm10_den'){
                    new_val_3.push(this.val_1[j]+":"+"Nickle")
                }
                
                // if(this.val_1[j] == 'fm10_den'){
                //     new_val_3.push(this.val_1[j]+":"+"T501-T502")
                // }
                
                if(this.val_1[j] == 'fm11_den'){
                    new_val_3.push(this.val_1[j]+":"+"Tar Transfer")
                } if(this.val_1[j] == 'fm12_den'){
                    new_val_3.push(this.val_1[j]+":"+"Recycle-D405")
                } if(this.val_1[j] == 'fm13_den'){
                    new_val_3.push(this.val_1[j]+":"+"Biodisl to Strg")
                } if(this.val_1[j] == 'fm14_den'){
                    new_val_3.push(this.val_1[j]+":"+"D403 to T601")
                } if(this.val_1[j] == 'fm15_den'){
                    new_val_3.push(this.val_1[j]+":"+"T601 to D602")
                } if(this.val_1[j] == 'fm16_den'){
                    new_val_3.push(this.val_1[j]+":"+"T601 to Reflx")
                } if(this.val_1[j] == 'fm17_den'){
                    new_val_3.push(this.val_1[j]+":"+"T601 Drain")
                } if(this.val_1[j] == 'fm18_den'){
                    new_val_3.push(this.val_1[j]+":"+"Mthnl to GST")
                } if(this.val_1[j] == 'fm19_den'){
                    new_val_3.push(this.val_1[j]+":"+"Mthnl to PPR")
                } if(this.val_1[j] == 'fm20_den'){
                    new_val_3.push(this.val_1[j]+":"+"Mthnl to GLV")
                } if(this.val_1[j] == 'fm21_den'){
                    new_val_3.push(this.val_1[j]+":"+"Mthnl to Trans")
                } if(this.val_1[j] == 'fm22_den'){
                    new_val_3.push(this.val_1[j]+":"+"Biodisl to Truck")
                } if(this.val_1[j] == 'fm23_den'){
                    new_val_3.push(this.val_1[j]+":"+"RM Offload")
                } if(this.val_1[j] == 'fm24_den'){
                    new_val_3.push(this.val_1[j]+":"+"RM to Setling")
                } if(this.val_1[j] == 'fm25_den'){
                    new_val_3.push(this.val_1[j]+":"+"Setling to D101")
                } if(this.val_1[j] == 'fm26_den'){
                    new_val_3.push(this.val_1[j]+":"+"CT Outlet")
                } if(this.val_1[j] == "fm27_den"){
                    new_val_3.push(this.val_1[j]+":"+"CT Inlet")
                } if(this.val_1[j] == "fm45_den"){
                    new_val_3.push(this.val_1[j]+":"+"Mthnl Trans")
                }

                  if(this.val_1[j] == 'fm1_temp'){
                    new_val_3.push(this.val_1[j]+":"+"Trans Oil")
                } if(this.val_1[j] == 'fm2_temp'){
                    new_val_3.push(this.val_1[j]+":"+"Alkali Trans")
                } if(this.val_1[j] == 'fm3_temp'){
                    new_val_3.push(this.val_1[j]+":"+"Trans-Evp to N1")
                } if(this.val_1[j] == 'fm4_temp'){
                    new_val_3.push(this.val_1[j]+":"+"Water N1")
                } if(this.val_1[j] == 'fm5_temp'){
                    new_val_3.push(this.val_1[j]+":"+"N2 to D402")
                } if(this.val_1[j] == 'fm6_temp'){
                    new_val_3.push(this.val_1[j]+":"+"N3 to Slagpool")
                } if(this.val_1[j] == 'fm7_temp'){
                    new_val_3.push(this.val_1[j]+":"+"D602 to MST")
                } if(this.val_1[j] == 'fm8_temp'){
                    new_val_3.push(this.val_1[j]+":"+"D402-D501")
                } if(this.val_1[j] == 'fm9_temp'){
                    new_val_3.push(this.val_1[j]+":"+"D501-T501")
                } if(this.val_1[j] == 'fm10_temp'){
                    new_val_3.push(this.val_1[j]+":"+"Nickle")
                }
                
                // if(this.val_1[j] == 'fm10_temp'){
                //     new_val_3.push(this.val_1[j]+":"+"T501-T502")
                // }

                if(this.val_1[j] == 'fm11_temp'){
                    new_val_3.push(this.val_1[j]+":"+"Tar Transfer")
                } if(this.val_1[j] == 'fm12_temp'){
                    new_val_3.push(this.val_1[j]+":"+"Recycle-D405")
                } if(this.val_1[j] == 'fm13_temp'){
                    new_val_3.push(this.val_1[j]+":"+"Biodisl to Strg")
                } if(this.val_1[j] == 'fm14_temp'){
                    new_val_3.push(this.val_1[j]+":"+"D403 to T601")
                } if(this.val_1[j] == 'fm15_temp'){
                    new_val_3.push(this.val_1[j]+":"+"T601 to D602")
                } if(this.val_1[j] == 'fm16_temp'){
                    new_val_3.push(this.val_1[j]+":"+"T601 to Reflx")
                } if(this.val_1[j] == 'fm17_temp'){
                    new_val_3.push(this.val_1[j]+":"+"T601 Drain")
                } if(this.val_1[j] == 'fm18_temp'){
                    new_val_3.push(this.val_1[j]+":"+"Mthnl to GST")
                } if(this.val_1[j] == 'fm19_temp'){
                    new_val_3.push(this.val_1[j]+":"+"Mthnl to PPR")
                } if(this.val_1[j] == 'fm20_temp'){
                    new_val_3.push(this.val_1[j]+":"+"Mthnl to GLV")
                } if(this.val_1[j] == 'fm21_temp'){
                    new_val_3.push(this.val_1[j]+":"+"Mthnl to Trans")
                } if(this.val_1[j] == 'fm22_temp'){
                    new_val_3.push(this.val_1[j]+":"+"Biodisl to Truck")
                } if(this.val_1[j] == 'fm23_temp'){
                    new_val_3.push(this.val_1[j]+":"+"RM Offload")
                } if(this.val_1[j] == 'fm24_temp'){
                    new_val_3.push(this.val_1[j]+":"+"RM to Setling")
                } if(this.val_1[j] == 'fm25_temp'){
                    new_val_3.push(this.val_1[j]+":"+"Setling to D101")
                } if(this.val_1[j] == 'fm26_temp'){
                    new_val_3.push(this.val_1[j]+":"+"CT Outlet")
                } if(this.val_1[j] == "fm27_temp"){
                    new_val_3.push(this.val_1[j]+":"+"CT Inlet")
                } if(this.val_1[j] == "fm45_temp"){
                    new_val_3.push(this.val_1[j]+":"+"Mthnl Trans")
                }

                  // For Main and 401 Steam
                if(this.val_1[j]=='st_fm2_flow'){
                    new_val_3.push(this.val_1[j]+":"+"Main Flow")
                } if(this.val_1[j]=='stfm2_flow_tot'){
                    new_val_3.push(this.val_1[j]+":"+"Main Total")
                } if(this.val_1[j]=='stfm2_temp'){
                    new_val_3.push(this.val_1[j]+":"+"Main Temp")
                } if(this.val_1[j]=='stfm2_pressure'){
                    new_val_3.push(this.val_1[j]+":"+"Main Press")
                } if(this.val_1[j]=='st_fm1_flow'){
                    new_val_3.push(this.val_1[j]+":"+"E401 Flow")
                } if(this.val_1[j]=='stfm1_flow_tot'){
                    new_val_3.push(this.val_1[j]+":"+"E401 Total")
                } if(this.val_1[j]=='stfm1_temp'){
                    new_val_3.push(this.val_1[j]+":"+"E401 Temp")
                } if(this.val_1[j]=='stfm1_pressure'){
                    new_val_3.push(this.val_1[j]+":"+"E401 Press")
                } 
            }
            this.params.data.push(new_val_1);
            axios.post('api/saveselection',[this.val_1,this.setInterval,this.timing,this.startdate,this.enddate,this.filter_range], {headers: {'Authorization': 'Bearer ' + this.currentUser.token }})
                .then((response) => {
                    this.db_val_1 = response.data.val_1
                    this.db_val_2 = response.data.get_range
                     // For Excel Print
                    // For Title
                    let str = new_val_2.toString();
                    let obj={};
                    for (let entry of str.split(",")) {
                        let pair = entry.split(":");
                        obj[pair[1]] = pair[0];
                    }
                    this.json_fields = Object.assign({}, obj);
                    // console.log(this.json_fields)
                    let str1 = new_val_3.toString();
                    let obj1={};
                    for (let entry of str1.split(",")) {
                        let pair = entry.split(":");
                        obj1[pair[0]] = pair[1];
                    }
                    console.log(obj1)
                    // this.json_fields = Object.assign({}, obj);
                    // For Data
                    for(let i=0; i<this.db_val_1.length; i++){
                        if(i==0){
                            this.json_data.push(obj1)
                        }
                        this.json_data.push(this.db_val_1[i])
                    }
                    console.log(this.json_data)
                    var neww1 = this.val_1[0];
                    var neww2 = this.val_1[1];
                    var neww3 = this.val_1[2];
                    var neww4 = this.val_1[3];
                    var neww5 = this.val_1[4];
                    var neww6 = this.val_1[5];
                    var neww7 = this.val_1[6];
                    var neww8 = this.val_1[7];
                    var neww9 = this.val_1[8];
                    var neww10 = this.val_1[9];
                    var neww11 = this.val_1[10];
                    var neww12 = this.val_1[11];
                    var neww13 = this.val_1[12];
                    var neww14 = this.val_1[13];
                    var neww15 = this.val_1[14];
                    var neww16 = this.val_1[15];
                    if(this.val_1.length == 1){
                        for (let i = 0; i < this.db_val_1.length; i++) {
                            this.params.data.push([this.db_val_1[i].timing,this.db_val_1[i].[neww1]])
                        }
                    }else if(this.val_1.length == 2){
                        for (let i = 0; i < this.db_val_1.length; i++) {
                        this.params.data.push([this.db_val_1[i].timing,this.db_val_1[i].[neww1],this.db_val_1[i].[neww2]])
                        }
                    }else if(this.val_1.length == 3){
                        for (let i = 0; i < this.db_val_1.length; i++) {
                        this.params.data.push([this.db_val_1[i].timing,this.db_val_1[i].[neww1],this.db_val_1[i].[neww2],this.db_val_1[i].[neww3]])
                        }
                    }else if(this.val_1.length == 4){
                        for (let i = 0; i < this.db_val_1.length; i++) {
                        this.params.data.push([this.db_val_1[i].timing,this.db_val_1[i].[neww1],this.db_val_1[i].[neww2],this.db_val_1[i].[neww3],this.db_val_1[i].[neww4]])
                        }
                    }else if(this.val_1.length == 5){
                        for (let i = 0; i < this.db_val_1.length; i++) {
                        this.params.data.push([this.db_val_1[i].timing,this.db_val_1[i].[neww1],this.db_val_1[i].[neww2],this.db_val_1[i].[neww3],this.db_val_1[i].[neww4],this.db_val_1[i].[neww5]])
                        }
                    }else if(this.val_1.length == 6){
                        for (let i = 0; i < this.db_val_1.length; i++) {
                        this.params.data.push([this.db_val_1[i].timing,this.db_val_1[i].[neww1],this.db_val_1[i].[neww2],this.db_val_1[i].[neww3],this.db_val_1[i].[neww4],this.db_val_1[i].[neww5],this.db_val_1[i].[neww6]])
                        }
                    }else if(this.val_1.length == 7){
                        for (let i = 0; i < this.db_val_1.length; i++) {
                        this.params.data.push([this.db_val_1[i].timing,this.db_val_1[i].[neww1],this.db_val_1[i].[neww2],this.db_val_1[i].[neww3],this.db_val_1[i].[neww4],this.db_val_1[i].[neww5],this.db_val_1[i].[neww6],this.db_val_1[i].[neww7]])
                        }
                    }else if(this.val_1.length == 8){
                        for (let i = 0; i < this.db_val_1.length; i++) {
                        this.params.data.push([this.db_val_1[i].timing,this.db_val_1[i].[neww1],this.db_val_1[i].[neww2],this.db_val_1[i].[neww3],this.db_val_1[i].[neww4],this.db_val_1[i].[neww5],this.db_val_1[i].[neww6],this.db_val_1[i].[neww7],this.db_val_1[i].[neww8]])
                        }
                    }else if(this.val_1.length == 9){
                        for (let i = 0; i < this.db_val_1.length; i++) {
                        this.params.data.push([this.db_val_1[i].timing,this.db_val_1[i].[neww1],this.db_val_1[i].[neww2],this.db_val_1[i].[neww3],this.db_val_1[i].[neww4],this.db_val_1[i].[neww5],this.db_val_1[i].[neww6],this.db_val_1[i].[neww7],this.db_val_1[i].[neww8],this.db_val_1[i].[neww9]])
                        }
                    }else if(this.val_1.length == 10){
                        for (let i = 0; i < this.db_val_1.length; i++) {
                        this.params.data.push([this.db_val_1[i].timing,this.db_val_1[i].[neww1],this.db_val_1[i].[neww2],this.db_val_1[i].[neww3],this.db_val_1[i].[neww4],this.db_val_1[i].[neww5],this.db_val_1[i].[neww6],this.db_val_1[i].[neww7],this.db_val_1[i].[neww8],this.db_val_1[i].[neww9],this.db_val_1[i].[neww10]])
                        }
                    }else if(this.val_1.length == 11){
                        for (let i = 0; i < this.db_val_1.length; i++) {
                        this.params.data.push([this.db_val_1[i].timing,this.db_val_1[i].[neww1],this.db_val_1[i].[neww2],this.db_val_1[i].[neww3],this.db_val_1[i].[neww4],this.db_val_1[i].[neww5],this.db_val_1[i].[neww6],this.db_val_1[i].[neww7],this.db_val_1[i].[neww8],this.db_val_1[i].[neww9],this.db_val_1[i].[neww10],this.db_val_1[i].[neww11]])
                        }
                    }else if(this.val_1.length == 12){
                        for (let i = 0; i < this.db_val_1.length; i++) {
                        this.params.data.push([this.db_val_1[i].timing,this.db_val_1[i].[neww1],this.db_val_1[i].[neww2],this.db_val_1[i].[neww3],this.db_val_1[i].[neww4],this.db_val_1[i].[neww5],this.db_val_1[i].[neww6],this.db_val_1[i].[neww7],this.db_val_1[i].[neww8],this.db_val_1[i].[neww9],this.db_val_1[i].[neww10],this.db_val_1[i].[neww11],this.db_val_1[i].[neww12]])
                        }
                    }else if(this.val_1.length == 13){
                        for (let i = 0; i < this.db_val_1.length; i++) {
                        this.params.data.push([this.db_val_1[i].timing,this.db_val_1[i].[neww1],this.db_val_1[i].[neww2],this.db_val_1[i].[neww3],this.db_val_1[i].[neww4],this.db_val_1[i].[neww5],this.db_val_1[i].[neww6],this.db_val_1[i].[neww7],this.db_val_1[i].[neww8],this.db_val_1[i].[neww9],this.db_val_1[i].[neww10],this.db_val_1[i].[neww11],this.db_val_1[i].[neww12],this.db_val_1[i].[neww13]])
                        }
                    }else if(this.val_1.length == 14){
                        for (let i = 0; i < this.db_val_1.length; i++) {
                        this.params.data.push([this.db_val_1[i].timing,this.db_val_1[i].[neww1],this.db_val_1[i].[neww2],this.db_val_1[i].[neww3],this.db_val_1[i].[neww4],this.db_val_1[i].[neww5],this.db_val_1[i].[neww6],this.db_val_1[i].[neww7],this.db_val_1[i].[neww8],this.db_val_1[i].[neww9],this.db_val_1[i].[neww10],this.db_val_1[i].[neww11],this.db_val_1[i].[neww12],this.db_val_1[i].[neww13],this.db_val_1[i].[neww14]])
                        }
                    }else if(this.val_1.length == 15){
                        for (let i = 0; i < this.db_val_1.length; i++) {
                        this.params.data.push([this.db_val_1[i].timing,this.db_val_1[i].[neww1],this.db_val_1[i].[neww2],this.db_val_1[i].[neww3],this.db_val_1[i].[neww4],this.db_val_1[i].[neww5],this.db_val_1[i].[neww6],this.db_val_1[i].[neww7],this.db_val_1[i].[neww8],this.db_val_1[i].[neww9],this.db_val_1[i].[neww10],this.db_val_1[i].[neww11],this.db_val_1[i].[neww12],this.db_val_1[i].[neww13],this.db_val_1[i].[neww14],this.db_val_1[i].[neww15]])
                        }
                    }else if(this.val_1.length == 16){
                        for (let i = 0; i < this.db_val_1.length; i++) {
                        this.params.data.push([this.db_val_1[i].timing,this.db_val_1[i].[neww1],this.db_val_1[i].[neww2],this.db_val_1[i].[neww3],this.db_val_1[i].[neww4],this.db_val_1[i].[neww5],this.db_val_1[i].[neww6],this.db_val_1[i].[neww7],this.db_val_1[i].[neww8],this.db_val_1[i].[neww9],this.db_val_1[i].[neww10],this.db_val_1[i].[neww11],this.db_val_1[i].[neww12],this.db_val_1[i].[neww13],this.db_val_1[i].[neww14],this.db_val_1[i].[neww15],this.db_val_1[i].[neww16]])
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
components: { VueTableDynamic },
    computed: {

        currentUser() {
            return this.$store.getters.currentUser

        }
    }
}
</script>

<style scoped>

/* .v-table-dynamic{
    /* font-size:15px; */
/* } */
.v-table-header-wrap{
    /* overflow: auto; */
}
/* .table-pagination .vue-pagination .pagination-page  {
    background: rgb(134, 21, 21) !important;
} */
.pagination-size{
    color:white !important;
}
h6{
    margin:auto;
}
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
    font-size:12px;
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
