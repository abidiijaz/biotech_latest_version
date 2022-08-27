<template>
    <div class="login row justify-content-center" style="width: 100%">

        <div class="col-md-10" style="margin-top: 35px;margin-bottom: 35px; ">
            <h3 class="text-center">TRANSESTERIFICATION CATALYST CALCULATIONS</h3>
            <form @submit.prevent="submitForm">
            <div class="row">
               <div class="col-md-6">
                    <table class="table table-dark float-left p-1" style="color: white !important;">
                    <thead>
                    <tr class="bg-default" style="background:#f8ea73;">
                        <th colspan="2" style="color:black">ACID OIL</th>
                    </tr>
                    </thead>
                    <tbody>
                    <tr>
                        <td class="col-md-11">Initital AV </td>
                        <td ><input type="number" step="any" v-model="form.acid_val1" v-on:keyup="fun1" style="width: 100px;" /></td>

                    </tr>
                    <tr>
                        <td class="col-md-11">AV after final Pre Drain</td>
                        <td ><input type="number" step="any" v-model="form.acid_val2" v-on:keyup="fun1" style="width: 100px;"/></td>

                    </tr>
                    <tr>
                        <td class="col-md-10">Catalyst Concentration </td>
                        <td ><div style="display: flex"><input type="number" step="any" v-model="form.acid_val3" v-on:keyup="fun1" style="width: 100px;"/> <span class="custom-add-sign">%</span></div></td>

                    </tr>
                    <tr>
                        <td class="col-md-11">Specific Gravity of Oil</td>
                        <td ><input type="number" step="any" v-on:keyup="fun1" v-model="form.acid_val4" style="width: 100px;background: #F8EA73;font-weight: bolder;" readonly/></td>

                    </tr>
                    <tr>
                        <td class="col-md-11">NAOH required for Neutralization <span class="formula_span">{{form.acid_val2}}/<input type="number" step="any" class="custom_formula" v-on:keyup="fun1" v-model="form.for_1">*<input type="number" step="any" v-on:keyup="fun1" class="custom_formula" v-model="form.for_2"></span></td>
                        <td ><div style="display: flex"><input v-model="form.acid_val5" type="number" step="any" style="width: 100px;" readonly/> <span class="custom-add-sign">%</span></div></td>

                    </tr>
                    <tr>
                        <td class="col-md-11">NAOH required for Triglycerides conversion <span class="formula_span"><input type="number" step="any" v-on:keyup="fun1" class="custom_formula" v-model="form.for_3">-{{form.acid_val1}}/<input type="number" step="any" class="custom_formula" v-on:keyup="fun1" v-model="form.for_4">*<input type="number" step="any" v-on:keyup="fun1" class="custom_formula" v-model="form.for_5"></span></td>
                        <td ><div style="display: flex"><input type="number" step="any" v-model="form.acid_val6" style="width: 100px;" readonly/> <span class="custom-add-sign">%</span></div></td>

                    </tr>
                    <tr>
                        <td class="col-md-11">Total NAOH required <span class="formula_span">{{form.acid_val5}}+{{form.acid_val6}}</span></td>
                        <td ><div style="display: flex"><input type="number" step="any" v-on:keyup="fun1" v-model="form.acid_val7" style="width: 100px;" readonly/> <span class="custom-add-sign">%</span></div></td>

                    </tr>
                    <tr>
                        <td class="col-md-11">If Methanol to be added to Trans is @ the rate of :::</td>
                        <td ><div style="display: flex"><input type="number" step="any" v-on:keyup="fun1" v-model="form.acid_val8" style="width: 100px;"/> <span class="custom-add-sign">%</span></div></td>

                    </tr>
                    <tr>
                        <td class="col-md-11">Then IDEAL Catalyst Solution Concentration
                            <span class="formula_span">
                                (<input type="number" step="any" class="custom_formula" v-on:keyup="fun1" v-model="form.for_6">
                                ({{form.acid_val6}}/<input type="number" step="any" v-on:keyup="fun1" class="custom_formula" v-model="form.for_7">)/(
                                <input type="number" step="any" class="custom_formula" v-on:keyup="fun1" v-model="form.for_8">*({{form.acid_val8}}/
                                <input type="number" step="any" class="custom_formula" v-on:keyup="fun1" v-model="form.for_9">)))
                                <input type="number" step="any" class="custom_formula" v-on:keyup="fun1" v-model="form.for_10"></span></td>
                        <td ><div style="display: flex"><input type="number" step="any" v-model="form.acid_val9" style="width: 100px;" readonly/> <span class="custom-add-sign">%</span></div></td>
                    </tr>
                    <tr style="font-weight: 600;font-size: 17px;">
                        <td class="col-md-11" >Basis for OIL Flow Rate to Trans Reactor</td>
                        <td ><div style="display: flex"><input type="number" step="any" v-on:keyup="fun1" v-model="form.acid_val10" style="width: 100px;"/> <span class="custom-add-sign">M3/Hour</span></div></td>
                    </tr>
                    <tr>
                        <td class="col-md-11">Weight of Oil going to reactor / Hour   <span class="formula_span">{{form.acid_val10}}*{{form.acid_val4}}</span></td>
                        <td ><div style="display: flex"><input type="number" step="any" v-model="form.acid_val11" style="width: 100px;" readonly/> <span class="custom-add-sign">Tons/Hour</span></div></td>

                    </tr>
                    <tr>
                        <td class="col-md-11">Catalyst (Pure KOH) required / Hour  <span class="formula_span">({{form.acid_val11}}*{{form.acid_val7}})/<input type="number" step="any" class="custom_formula" v-on:keyup="fun1" v-model="form.for_11"></span></td>
                        <td ><div style="display: flex"><input type="number" step="any" v-model="form.acid_val12" style="width: 100px;"/> <span class="custom-add-sign">Tons/Hour</span></div></td>

                    </tr>
                    <tr>
                        <td class="col-md-11" colspan="2">2 Tons of Pure NAOH is contained in 100 M3 of Catalyst Solution</td>
                    </tr>
                    <tr style="font-weight: 600;font-size: 17px;background-color: rgb(3 19 104)">
                        <td class="col-md-11">Therefore Catalyst Flow Rate Required <span class="formula_span">((<input type="number" step="any" class="custom_formula" v-on:keyup="fun1" v-model="form.for_12">/{{form.acid_val3}})*{{form.acid_val12}})<input type="number" step="any" class="custom_formula" v-on:keyup="fun1" v-model="form.for_13"></span></td>
                        <td ><div style="display: flex"><input type="number" step="any" v-model="form.acid_val13" style="width: 100px;color: red;font-weight: bolder;" readonly/> <span class="custom-add-sign">M3/Hour</span></div></td>
                    </tr>
                    <tr>
                        <td class="col-md-11">Methanol Concentration in 100 M3 of Catalyst Solution is <span class="formula_span">{{form.acid_val3}}-<input type="number" step="any" class="custom_formula" v-on:keyup="fun1" v-model="form.for_14"></span></td>
                        <td ><div style="display: flex"><input type="number" step="any" v-model="form.acid_val14" style="width: 100px;" readonly/> <span class="custom-add-sign">%</span></div></td>
                    </tr>
                    <tr>
                        <td class="col-md-11">Therefore Methanol going to Trans Reactor with Catalyst solution <span class="formula_span">({{form.acid_val14}}*{{form.acid_val13}})/<input type="number" step="any" class="custom_formula" v-on:keyup="fun1" v-model="form.for_15"></span></td>
                        <td ><div style="display: flex"><input type="number" step="any" v-model="form.acid_val15" style="width: 100px;" readonly/> <span class="custom-add-sign">M3/Hour</span></div></td>
                    </tr>
                    <tr>
                        <td class="col-md-11">Therefore Methanol %age (Volume / Weight) <span class="formula_span">({{form.acid_val15}}/{{form.acid_val11}})*<input type="number" step="any" class="custom_formula" v-on:keyup="fun1" v-model="form.for_16"></span></td>
                        <td ><div style="display: flex"><input type="number" step="any" v-model="form.acid_val16" style="width: 100px;" readonly/> <span class="custom-add-sign">%</span></div></td>

                    </tr>
                    <tr>
                        <td class="col-md-11">And Methanol %age (Volume / Volume) <span class="formula_span">({{form.acid_val15}}/{{form.acid_val10}})*<input type="number" step="any" class="custom_formula" v-on:keyup="fun1" v-model="form.for_17"></span></td>
                        <td ><div style="display: flex"><input type="number" step="any" v-model="form.acid_val17" style="width: 100px;" readonly/> <span class="custom-add-sign">%</span></div></td>
                    </tr>
                    <tr>
                        <td colspan="2" class="p-0">
                            <input type="submit" style="background:black; color:white; font-weight: bolder;" value="Save" class="btn btn-default btn-block">
                        </td>
                    </tr>
                    </tbody>
                    </table>
               </div> 
                <div class="col-md-6">
                    <table class="table table-dark col-md-5 float-right p-1" style="color: white !important;">
                    <thead>
                    <tr class="bg-default" style="background:#f8ea73;">
                        <th colspan="2" style="color:black">Refined oil  and Crude Oil R1</th>
                    </tr>
                    </thead>
                    <tbody>
                    <tr>
                        <td class="col-md-11">Initital AV </td>
                        <td ><input type="number" step="any" v-model="form.r1_val1" style="width: 100px;" v-on:keyup="fun1"/></td>
                    </tr>
                    <tr>
                        <td class="col-md-11">AV of when Roud Starts</td>
                        <td ><input type="number" step="any" v-model="form.r1_val2" style="width: 100px;" v-on:keyup="fun1"/></td>

                    </tr>
                    <tr>
                        <td class="col-md-11">Catalyst Concentration </td>
                        <td ><div style="display: flex"><input type="number" step="any" v-model="form.r1_val3" v-on:keyup="fun1" style="width: 100px;" /> <span class="custom-add-sign">%</span></div></td>

                    </tr>
                    <tr>
                        <td class="col-md-11">Specific Gravity of Oil</td>
                        <td ><input type="number" step="any" v-model="form.r1_val4" style="width: 100px;background: #F8EA73;font-weight: bolder;" readonly/></td>

                    </tr>
                    <tr>
                        <td class="col-md-11">NAOH required for Neutralization <span class="formula_span">({{form.r1_val2}}/<input type="number" step="any" class="custom_formula" v-on:keyup="fun1" v-model="form.formula_1">)*<input type="number" step="any" class="custom_formula" v-on:keyup="fun1" v-model="form.formula_2"></span></td>
                        <td ><div style="display: flex"><input type="number" step="any" v-model="form.r1_val5" style="width: 100px;" readonly/> <span class="custom-add-sign">%</span></div></td>

                    </tr>
                    <tr>
                        <td class="col-md-11">NAOH required for Triglycerides conversion <span class="formula_span"><input type="number" step="any" class="custom_formula" v-on:keyup="fun1" v-model="form.formula_3">-{{form.r1_val1}}/<input type="number" step="any" class="custom_formula" v-on:keyup="fun1" v-model="form.formula_4">*<input type="number" step="any" class="custom_formula" v-on:keyup="fun1" v-model="form.formula_5"></span></td>
                        <td ><div style="display: flex"><input type="number" step="any" v-model="form.r1_val6" style="width: 100px;" readonly/> <span class="custom-add-sign">%</span></div></td>

                    </tr>
                    <tr>
                        <td class="col-md-11">Total NAOH required <span class="formula_span">{{form.r1_val5}}+{{form.r1_val6}}</span></td>
                        <td ><div style="display: flex"><input type="number" step="any" v-model="form.r1_val7" style="width: 100px;" readonly/> <span class="custom-add-sign">%</span></div></td>

                    </tr>
                    <tr>
                        <td class="col-md-11">If Methanol to be added to Trans is @ the rate of :::</td>
                        <td ><div style="display: flex"><input type="number" step="any" v-model="form.r1_val8" v-on:keyup="fun1" style="width: 100px;"/> <span class="custom-add-sign">%</span></div></td>

                    </tr>
                    <tr>
                        <td class="col-md-11">Then IDEAL Catalyst Solution Concentration <span class="formula_span">(<input type="number" step="any" class="custom_formula" v-on:keyup="fun1" v-model="form.formula_6">*({{form.r1_val7}}/{{form.formula_7}})/<input type="number" step="any" class="custom_formula" v-on:keyup="fun1" v-model="form.formula_8">*({{form.r1_val8}}/<input type="number" step="any" class="custom_formula" v-on:keyup="fun1" v-model="form.formula_9">))*<input type="number" step="any" class="custom_formula" v-on:keyup="fun1" v-model="form.formula_10"></span></td>
                        <td ><div style="display: flex"><input type="number" step="any" v-model="form.r1_val9" style="width: 100px;" readonly/> <span class="custom-add-sign">%</span></div></td>

                    </tr>
                    <tr style="font-weight: 600;font-size: 17px;">
                        <td class="col-md-11" colspan="2">Round 1 Batch Reaction </td>


                    </tr>
                    <tr >
                        <td class="col-md-11">Enter Batch Volume here</td>
                        <td style="font-weight: 600;font-size: 17px;"><div style="display: flex"><input type="number" step="any" v-model="form.r1_val10" v-on:keyup="fun1" style="width: 100px;"/> <span class="custom-add-sign">M3</span></div></td>

                    </tr>
                    <tr>
                        <td class="col-md-11">Weight of Oil going to reactor / Hour <span class="formula_span">{{form.r1_val10}}*{{form.r1_val4}}</span></td>
                        <td ><div style="display: flex"><input type="number" step="any" v-model="form.r1_val11" style="width: 100px;" readonly/> <span class="custom-add-sign">Tons/Hour</span></div></td>

                    </tr>
                    <tr>
                        <td class="col-md-11">Catalyst (Pure KOH) required / Hour <span class="formula_span">{{form.r1_val11}}*{{form.r1_val7}}/<input type="number" step="any" class="custom_formula" v-on:keyup="fun1" v-model="form.formula_11"></span></td>
                        <td ><div style="display: flex"><input type="number" step="any" v-model="form.r1_val12" style="width: 100px;" readonly/> <span class="custom-add-sign">Tons/Hour</span></div></td>

                    </tr>
                    <tr>
                        <td class="col-md-11">2 Tons of Pure NAOH is contained in 100 M3 of Catalyst Solution</td>
                        <!-- <td ><input type="number" step="any" v-model="form.r1_val13" style="width: 100px;"/></td> -->

                    </tr>
                    <tr style="font-weight: 600;font-size: 17px;background-color: rgb(3 19 104)">
                        <td class="col-md-8" >Total Alkali Addition <span class="formula_span">((<input type="number" step="any" class="custom_formula" v-on:keyup="fun1" v-model="form.formula_12">/{{form.r1_val3}})*{{form.r1_val12}})*<input type="number" step="any" class="custom_formula" v-on:keyup="fun1" v-model="form.formula_13">/<input type="number" step="any" class="custom_formula" v-on:keyup="fun1" v-model="form.formula_14"></span></td>
                        <td class="col-md-4"><div style="display: flex"><input type="number" step="any" v-model="form.r1_val13" style="width: 100px;color: red;font-weight: bolder;" readonly/> <span class="custom-add-sign">m3 total</span></div></td>

                    </tr>
                    <tr>
                        <td class="col-md-11">Methanol Concentration in 100 M3 of Catalyst Solution is <span class="formula_span"><input type="number" step="any" class="custom_formula" v-on:keyup="fun1" v-model="form.formula_15">-{{form.r1_val3}}</span></td>
                        <td ><div style="display: flex"><input type="number" step="any" v-model="form.r1_val14" style="width: 100px;" readonly/> <span class="custom-add-sign" >%</span></div></td>

                    </tr>
                    <tr>
                        <td class="col-md-11">Therefore Methanol going to Trans Reactor with Catalyst solution <span class="formula_span">{{form.r1_val13}}*{{form.r1_val14}}/<input type="number" step="any" class="custom_formula" v-on:keyup="fun1" v-model="form.formula_16"></span></td>
                        <td ><div style="display: flex"><input type="number" step="any" v-model="form.r1_val15" style="width: 100px;" readonly/> <span class="custom-add-sign">M3/Hour</span></div></td>

                    </tr>
                    <tr>
                        <td class="col-md-11">Therefore Methanol %age (Volume / Weight) <span class="formula_span">{{form.r1_val15}}/{{form.r1_val11}}*<input type="number" step="any" class="custom_formula" v-on:keyup="fun1" v-model="form.formula_17"></span></td>
                        <td ><div style="display: flex"><input type="number" step="any" v-model="form.r1_val16" style="width: 100px;" readonly/> <span class="custom-add-sign">%</span></div></td>

                    </tr>
                    <tr>
                        <td class="col-md-11">And Methanol %age (Volume / Volume) <span class="formula_span">{{form.r1_val15}}/{{form.r1_val10}}*<input type="number" step="any" class="custom_formula" v-on:keyup="fun1" v-model="form.formula_18"></span></td>
                        <td ><div style="display: flex"><input type="number" step="any" v-model="form.r1_val17" style="width: 100px;" readonly/> <span class="custom-add-sign">%</span></div></td>

                    </tr>

                    <tr>
                        <td colspan="2" class="p-0">
                            <input type="submit" value="Save" style="background:black; color:white; font-weight: bolder;"  class="btn btn-default btn-block">
                        </td>
                    </tr>
                    </tbody>

                    </table>
                </div>
            </div>
            <div class="row">
                <div class="col-md-6">
                    <table class="table table-dark col-md-6 float-left" style="color: white !important;">
                        <thead>
                        <tr class="bg-default" style="background:#f8ea73;">
                            <th colspan="2" style="color:black">RECOVERED OIL</th>
                        </tr>
                        </thead>
                        <tbody>
                        <tr>
                            <td class="col-md-11">AV Oil Charged to PPR </td>
                            <td ><input type="number" step="any" v-model="form.r2_val1" v-on:keyup="fun1" style="width: 100px;" value="50"/></td>

                        </tr>
                        <tr>
                            <td class="col-md-11">AV after final Pre Drain </td>
                            <td ><input type="number" step="any" v-model="form.r2_val2" v-on:keyup="fun1" style="width: 100px;" value="50"/></td>

                        </tr>
                        <tr>
                            <td class="col-md-11">Catalyst Concentration  </td>
                            <td ><div style="display: flex"><input type="number" step="any" v-model="form.r2_val3" v-on:keyup="fun1" style="width: 100px;"/> <span class="custom-add-sign">%</span></div></td>

                        </tr>
                        <tr>
                            <td class="col-md-11">Specific Gravity of Oil</td>
                            <td ><input type="number" step="any" v-model="form.r2_val4" v-on:keyup="fun1" style="width: 100px;background: #F8EA73;font-weight: bolder;" value="50" readonly/></td>

                        </tr>
                        <tr>
                            <td class="col-md-11">NAOH required for Neutralization <span class="formula_span">{{form.r2_val2}}/<input type="number" step="any" class="custom_formula" v-on:keyup="fun1" v-model="form.formula3_1">*<input type="number" step="any" v-on:keyup="fun1" class="custom_formula" v-model="form.formula3_2"></span></td>
                            <td ><div style="display: flex"><input type="number" step="any" v-model="form.r2_val5" v-on:keyup="fun1" style="width: 100px;" readonly/> <span class="custom-add-sign">%</span></div></td>

                        </tr>
                        <tr>
                            <td class="col-md-11">NAOH required for Triglycerides conversion <span class="formula_span">(<input type="number" step="any" class="custom_formula" v-on:keyup="fun1" v-model="form.formula3_3">-({{form.r2_val1}}/<input type="number" step="any" v-on:keyup="fun1" class="custom_formula" v-model="form.formula3_4">))*<input type="number" step="any" v-on:keyup="fun1" class="custom_formula" v-model="form.formula3_5"></span></td>
                            <td ><div style="display: flex"><input type="number" step="any" v-model="form.r2_val6" v-on:keyup="fun1" style="width: 100px;" readonly/> <span class="custom-add-sign">%</span></div></td>

                        </tr>
                        <tr>
                            <td class="col-md-11">Total NAOH required <span class="formula_span">{{form.r2_val5}}+{{form.r2_val6}}</span></td>
                            <td ><div style="display: flex"><input type="number" step="any" v-model="form.r2_val7" v-on:keyup="fun1" style="width: 100px;" readonly/> <span class="custom-add-sign">%</span></div></td>

                        </tr>
                        <tr>
                            <td class="col-md-11">If Methanol to be added to Trans is @ the rate of ::: </td>
                            <td ><div style="display: flex"><input type="number" step="any" v-model="form.r2_val8" v-on:keyup="fun1" style="width: 100px;"/> <span class="custom-add-sign">%</span></div></td>

                        </tr>
                        <tr>
                            <td class="col-md-11">Then IDEAL Catalyst Solution Concentration <span class="formula_span">((<input type="number" step="any" class="custom_formula" v-on:keyup="fun1" v-model="form.formula3_6">*({{form.r2_val7}}/<input type="number" step="any" class="custom_formula" v-on:keyup="fun1" v-model="form.formula3_7">))/(<input type="number" step="any" class="custom_formula" v-on:keyup="fun1" v-model="form.formula3_8">*({{form.r2_val8}}/<input type="number" step="any" class="custom_formula" v-on:keyup="fun1" v-model="form.formula3_9">)))/*<input type="number" step="any" class="custom_formula" v-on:keyup="fun1" v-model="form.formula3_10"></span></td>
                            <td ><div style="display: flex"><input type="number" step="any" v-model="form.r2_val9" v-on:keyup="fun1" style="width: 100px;" readonly/> <span class="custom-add-sign">%</span></div></td>

                        </tr>
                        <tr style="font-weight: 600;font-size: 17px;">
                            <td class="col-md-11">Basis for OIL Flow Rate to Trans Reactor</td>
                            <td ><div style="display: flex"><input type="number" step="any" v-model="form.r2_val10" v-on:keyup="fun1" style="width: 100px;"/> <span class="custom-add-sign">M3/Hour</span></div></td>

                        </tr>
                        <tr>
                            <td class="col-md-11">Weight of Oil going to reactor / Hour <span class="formula_span">{{form.r2_val10}}*{{form.r2_val4}}</span></td>
                            <td ><div style="display: flex"><input type="number" step="any" v-model="form.r2_val11" v-on:keyup="fun1" style="width: 100px;" readonly/> <span class="custom-add-sign">%</span></div></td>

                        </tr>
                        <tr>
                            <td class="col-md-11">Catalyst (Pure KOH) required / Hour <span class="formula_span">({{form.r2_val11}}*{{form.r2_val7}})/<input type="number" step="any" class="custom_formula" v-on:keyup="fun1" v-model="form.formula3_11"></span></td>
                            <td ><div style="display: flex"><input type="number" step="any" v-model="form.r2_val12" v-on:keyup="fun1" style="width: 100px;" readonly/> <span class="custom-add-sign">%</span></div></td>

                        </tr>
                        <tr>
                            <td class="col-md-11">2 Tons of Pure NAOH is contained in 100 M3 of Catalyst Solution </td>
                            <td ></td>

                        </tr>
                        <tr style="font-weight: 600;font-size: 17px;background-color: rgb(3 19 104)">
                            <td class="col-md-11">Therefore Catalyst Flow Rate Required <span class="formula_span">((<input type="number" step="any" class="custom_formula" v-on:keyup="fun1" v-model="form.formula3_12">/{{form.r2_val13}})*{{form.r2_val12}})*<input type="number" step="any" class="custom_formula" v-on:keyup="fun1" v-model="form.formula3_13"></span></td>
                            <td ><div style="display: flex"><input type="number" step="any" v-model="form.r2_val13" v-on:keyup="fun1" style="width: 100px;color: red;font-weight: bolder;" readonly/> <span class="custom-add-sign">M3/Hour</span></div></td>

                        </tr>
                        <tr>
                            <td class="col-md-11">Methanol Concentration in 100 M3 of Catalyst Solution is <span class="formula_span"><input type="number" step="any" class="custom_formula" v-on:keyup="fun1" v-model="form.formula3_14">-{{form.r2_val3}}</span></td>
                            <td ><div style="display: flex"><input type="number" step="any" v-model="form.r2_val14" v-on:keyup="fun1" style="width: 100px;" readonly/> <span class="custom-add-sign">%</span></div></td>

                        </tr>
                        <tr>
                            <td class="col-md-11">Therefore Methanol going to Trans Reactor with Catalyst solution <span class="formula_span">{{form.r2_val13}}-{{form.r2_val14}}<input type="number" step="any" class="custom_formula" v-on:keyup="fun1" v-model="form.formula3_15"></span></td>
                            <td ><div style="display: flex"><input type="number" step="any" v-model="form.r2_val15" v-on:keyup="fun1" style="width: 100px;" readonly/> <span class="custom-add-sign">M3/Hour</span></div></td>

                        </tr>
                        <tr>
                            <td class="col-md-11">Therefore Methanol %age (Volume / Weight) <span class="formula_span">{{form.r2_val15}}/{{form.r2_val11}}*<input type="number" step="any" class="custom_formula" v-on:keyup="fun1" v-model="form.formula3_16"></span></td>
                            <td ><div style="display: flex"><input type="number" step="any" v-model="form.r2_val16" v-on:keyup="fun1" style="width: 100px;" readonly/> <span class="custom-add-sign">%</span></div></td>

                        </tr>
                        <tr>
                            <td class="col-md-11">And Methanol %age (Volume / Volume) <span class="formula_span">{{form.r2_val15}}/{{form.r2_val10}}*<input type="number" step="any" class="custom_formula" v-on:keyup="fun1" v-model="form.formula3_17"></span></td>
                            <td ><div style="display: flex"><input type="number" step="any" v-model="form.r2_val17" v-on:keyup="fun1" style="width: 100px;" readonly/> <span class="custom-add-sign">%</span></div></td>

                        </tr>
                        <tr>
                            <td colspan="2" class="p-0">
                                <input type="submit" value="Save" style="font-weight: bolder;background:black; color:white;" class="btn btn-default btn-block">
                            </td>
                        </tr>
                        </tbody>

                    </table>
                </div>  
                 <div class="col-md-6">
                    <table class="table table-dark col-md-6 float-right" style="color: white !important;">
                    <thead>
                    <tr class="bg-default" style="background:#f8ea73;">
                        <th colspan="2" style="color:black">Refined oil round  and crude oil R2</th>
                    </tr>
                    </thead>
                    <tbody>
                    <tr>
                        <td class="col-md-11">Initital AV </td>
                        <td ><input type="number" step="any" v-model="form.r3_val1" v-on:keyup="fun1" style="width: 100px;"/></td>

                    </tr>
                    <tr>
                        <td class="col-md-11">AV after final Pre Drain</td>
                        <td ><input type="number" step="any" v-model="form.r3_val2" v-on:keyup="fun1" style="width: 100px;"/></td>

                    </tr>
                    <tr>
                        <td class="col-md-11">Catalyst Concentration </td>
                        <td ><div style="display: flex"><input type="number" step="any" v-model="form.r3_val3" v-on:keyup="fun1" style="width: 100px;"/> <span class="custom-add-sign">%</span></div></td>

                    </tr>
                    <tr>
                        <td class="col-md-11">Specific Gravity of Oil</td>
                        <td ><input type="number" step="any" v-model="form.r3_val4" v-on:keyup="fun1" style="width: 100px; background: #F8EA73;font-weight: bolder;" readonly/></td>

                    </tr>
                    <tr>
                        <td class="col-md-11">NAOH required for Neutralization <span class="formula_span">({{form.r3_val2}}/<input type="number" step="any" class="custom_formula" v-on:keyup="fun1" v-model="form.formula4_1">)*<input type="number" step="any" v-on:keyup="fun1" class="custom_formula" v-model="form.formula4_2"></span></td>
                        <td ><div style="display: flex"><input type="number" step="any" v-model="form.r3_val5" v-on:keyup="fun1" style="width: 100px;" readonly/> <span class="custom-add-sign">%</span></div></td>

                    </tr>
                    <tr>
                        <td class="col-md-11">NAOH required for Triglycerides conversion <span class="formula_span"><input type="number" step="any" class="custom_formula" v-on:keyup="fun1" v-model="form.formula4_3">*<input type="number" step="any" v-on:keyup="fun1" class="custom_formula" v-model="form.formula4_4"></span></td>
                        <td ><div style="display: flex"><input type="number" step="any" v-model="form.r3_val6" v-on:keyup="fun1" style="width: 100px;" readonly/> <span class="custom-add-sign">%</span></div></td>

                    </tr>
                    <tr>
                        <td class="col-md-11">Total NAOH required <span class="formula_span">({{form.r3_val5}}+{{form.r3_val6}}</span></td>
                        <td ><div style="display: flex"><input type="number" step="any" v-model="form.r3_val7" v-on:keyup="fun1" style="width: 100px;" readonly/> <span class="custom-add-sign">%</span></div></td>

                    </tr>
                    <tr>
                        <td class="col-md-11">If Methanol to be added to Trans is @ the rate of :::</td>
                        <td ><div style="display: flex"><input type="number" step="any" v-model="form.r3_val8" v-on:keyup="fun1" style="width: 100px;"/> <span class="custom-add-sign">%</span></div></td>

                    </tr>
                    <tr>
                        <td class="col-md-11">Then IDEAL Catalyst Solution Concentration <span class="formula_span">((<input type="number" step="any" class="custom_formula" v-on:keyup="fun1" v-model="form.formula4_6">*({{form.r3_val7}}/<input type="number" step="any" class="custom_formula" v-on:keyup="fun1" v-model="form.formula4_7">))/(<input type="number" step="any" class="custom_formula" v-on:keyup="fun1" v-model="form.formula4_8">*({{form.r3_val8}}/<input type="number" step="any" class="custom_formula" v-on:keyup="fun1" v-model="form.formula4_9">)))/*<input type="number" step="any" class="custom_formula" v-on:keyup="fun1" v-model="form.formula4_10"></span></td>
                        <td ><div style="display: flex"><input type="number" step="any" v-model="form.r3_val9" v-on:keyup="fun1" style="width: 100px;" readonly/> <span class="custom-add-sign">%</span></div></td>

                    </tr>
                    <tr style="font-weight: 600;font-size: 17px;">
                        <td class="col-md-11">Basis for OIL Flow Rate to Trans Reactor </td>
                        <td ><div style="display: flex"><input type="number" step="any" v-model="form.r3_val10" v-on:keyup="fun1" style="width: 100px;"/> <span class="custom-add-sign">M3/Hour</span></div></td>

                    </tr>

                    <tr>
                        <td class="col-md-11">Weight of Oil going to reactor / Hour <span class="formula_span">{{form.r3_val10}}*{{form.r3_val4}}</span></td>
                        <td ><div style="display: flex"><input type="number" step="any" v-model="form.r3_val11" v-on:keyup="fun1" style="width: 100px;" readonly/> <span class="custom-add-sign">Tons/Hour</span></div></td>

                    </tr>
                    <tr>
                        <td class="col-md-11">Catalyst (Pure KOH) required / Hour <span class="formula_span">({{form.r3_val11}}*{{form.r3_val7}})/<input type="number" step="any" class="custom_formula" v-on:keyup="fun1" v-model="form.formula4_11"></span></td>
                        <td ><div style="display: flex"><input type="number" step="any" v-model="form.r3_val12" v-on:keyup="fun1" style="width: 100px;" readonly/> <span class="custom-add-sign">Tons/Hour</span></div></td>

                    </tr>
                    <tr>
                        <td class="col-md-11">2 Tons of Pure NAOH is contained in 100 M3 of Catalyst Solution</td>
                        <td ></td>

                    </tr>
                    <tr style="font-weight: 600;font-size: 17px;background-color: rgb(3 19 104)">
                        <td class="col-md-6">Therefore Catalyst Flow Rate Required <span class="formula_span">((<input type="number" step="any" class="custom_formula" v-on:keyup="fun1" v-model="form.formula4_12">/{{form.r3_val13}})*{{form.r3_val12}})*<input type="number" step="any" class="custom_formula" v-on:keyup="fun1" v-model="form.formula4_13">/<input type="number" step="any" class="custom_formula" v-on:keyup="fun1" v-model="form.formula4_14"></span></td>
                        <td class="col-md-4"><div style="display: flex"><input type="number" step="any" v-model="form.r3_val13" v-on:keyup="fun1" style="width: 100px;color: red;font-weight: bolder;" readonly/> <span class="custom-add-sign" style="width: 142px;">m3/Hour(at the End of Each Hour)</span></div></td>

                    </tr>
                    <tr>
                        <td class="col-md-11">Methanol Concentration in 100 M3 of Catalyst Solution is <span class="formula_span"><input type="number" step="any" class="custom_formula" v-on:keyup="fun1" v-model="form.formula4_15">-{{form.r3_val3}}</span></td>
                        <td ><div style="display: flex"><input type="number" step="any" v-model="form.r3_val14" v-on:keyup="fun1" style="width: 100px;" readonly/> <span class="custom-add-sign">%</span></div></td>

                    </tr>
                    <tr>
                        <td class="col-md-11">Therefore Methanol going to Trans Reactor with Catalyst solution <span class="formula_span">{{form.r3_val13}}-{{form.r3_val14}}<input type="number" step="any" class="custom_formula" v-on:keyup="fun1" v-model="form.formula4_16"></span></td>
                        <td ><div style="display: flex"><input type="number" step="any" v-model="form.r3_val15" v-on:keyup="fun1" style="width: 100px;" readonly/> <span class="custom-add-sign">M3/Hour</span></div></td>

                    </tr>
                    <tr>
                        <td class="col-md-11">Therefore Methanol %age (Volume / Weight) <span class="formula_span">{{form.r3_val15}}/{{form.r3_val11}}*<input type="number" step="any" class="custom_formula" v-on:keyup="fun1" v-model="form.formula4_17"></span></td>
                        <td ><div style="display: flex"><input type="number" step="any" v-model="form.r3_val16" v-on:keyup="fun1" style="width: 100px;" readonly/> <span class="custom-add-sign">%</span></div></td>

                    </tr>
                    <tr>
                        <td class="col-md-11">And Methanol %age (Volume / Volume) <span class="formula_span">{{form.r3_val15}}/{{form.r3_val10}}*<input type="number" step="any" class="custom_formula" v-on:keyup="fun1" v-model="form.formula4_18"></span></td>
                        <td ><div style="display: flex"><input type="number" step="any" v-model="form.r3_val17" v-on:keyup="fun1" style="width: 100px;" readonly/> <span class="custom-add-sign">%</span></div></td>

                    </tr>
                     <tr>
                        <td colspan="2" class="p-0">
                            <input type="submit" value="Save" style="font-weight: bolder;background:black; color:white;" class="btn btn-defalut btn-block">
                        </td>
                    </tr>
                    </tbody>

                    </table>
                 </div>
            </div>
             </form>
        </div>
    </div>
</template>

<script>
import {login} from "../helpers/auth";
import {screen1} from "../helpers/api";
import {Viewallusers} from "../helpers/api";

export default {
    name: "Login",
    data() {
        return {
            form:{
                acid_val1:50.00,acid_val2:6.00,acid_val3:2.00,acid_val4:0.886,acid_val5:2.00,acid_val6:0.00,acid_val7:0,acid_val8:10.00,acid_val9:0.00,acid_val10:5.5,acid_val11:0.00,
                acid_val12:0.00,acid_val13:0.00,acid_val14:0.00,acid_val15:0.00, acid_val16:0.00,acid_val17:0.00,

                for_1:2,for_2:0.13,for_3:100,for_4:2,for_5:0.007,for_6:1,for_7:100,for_8:1,for_9:100,for_10:100,for_11:100,for_12:100,for_13:1.1,for_14:100,
                for_15:100,for_16:100,for_17:100,

                 r1_val1:12,r1_val2:6,r1_val3:2,r1_val4:0.9,r1_val5:0.00,r1_val6:0.00,r1_val7:0.00,r1_val8:10,r1_val9:0,r1_val10:5.5,r1_val11:0,
                r1_val12:0,r1_val13:0,r1_val14:0,r1_val15:0,r1_val16:0,r1_val17:0,

                formula_1:2,formula_2:0.13,formula_3:100,formula_4:2,formula_5:0.007,formula_6:1,formula_7:100,formula_8:1,formula_9:100,formula_10:100,
                formula_11:100,formula_12:100,formula_13:1.1,formula_14:1.25,formula_15:100,formula_16:100,formula_17:100,formula_18:100,

                 r2_val1:500,r2_val2:10,r2_val3:2,r2_val4:0.886,r2_val5:0.00,r2_val6:0.00,r2_val7:0.00,r2_val8:10,r2_val9:0,r2_val10:5.5,r2_val11:0,
                r2_val12:0,r2_val13:0,r2_val14:0,r2_val15:0,r2_val16:0,r2_val16:0,r2_val17:0,

                formula3_1:2,formula3_2:0.13,formula3_3:100,formula3_4:2,formula3_5:0,formula3_6:1,formula3_7:100,formula3_8:1,formula3_9:100,formula3_10:100,
                formula3_11:100,formula3_12:100,formula3_13:1.1,formula3_14:100,formula3_15:100,formula3_16:100,formula3_17:100,

                 r3_val1:50,r3_val2:0.4,r3_val3:2,r3_val4:0.90,r3_val5:0.00,r3_val6:0.00,r3_val7:0.00,r3_val8:10,r3_val9:0,r3_val10:5.5,r3_val11:0,
                r3_val12:0,r3_val13:0,r3_val14:0,r3_val15:0,r3_val16:0,r3_val16:0,r3_val17:0,

                formula4_1:2,formula4_2:0.13,formula4_3:100,formula4_4:0.007,formula4_5:0,formula4_6:1,formula4_7:100,formula4_8:1,formula4_9:100,formula4_10:100,
                formula4_11:100,formula4_12:100,formula4_13:1.1,formula4_14:5,formula4_15:100,formula4_16:100,formula4_17:100,formula4_18:100,
            },
           
        }
    },
    beforeCreate(){
        
    },
    created() {
        this.fun1();
        this.getData();
    },
    methods: {
        getData(){
            axios.get('api/show_cataltst', {headers: {'Authorization': 'Bearer ' + this.currentUser.token}})
            .then((response) => {
                this.form.acid_val1=response.data.cataltst.acid_val1;
                this.form.acid_val2=response.data.cataltst.acid_val2;
                this.form.acid_val3=response.data.cataltst.acid_val3;
                this.form.acid_val4=response.data.cataltst.acid_val4;
                this.form.acid_val5=response.data.cataltst.acid_val5;
                this.form.acid_val6=response.data.cataltst.acid_val6;
                this.form.acid_val7=response.data.cataltst.acid_val7;
                this.form.acid_val8=response.data.cataltst.acid_val8;
                this.form.acid_val9=response.data.cataltst.acid_val9;
                this.form.acid_val10=response.data.cataltst.acid_val10;
                this.form.acid_val11=response.data.cataltst.acid_val11;
                this.form.acid_val12=response.data.cataltst.acid_val12;
                this.form.acid_val13=response.data.cataltst.acid_val13;
                this.form.acid_val14=response.data.cataltst.acid_val14;
                this.form.acid_val15=response.data.cataltst.acid_val15;
                this.form.acid_val16=response.data.cataltst.acid_val16;
                this.form.acid_val17=response.data.cataltst.acid_val17;
                this.form.for_1=response.data.cataltst.for_1;
                this.form.for_2=response.data.cataltst.for_2;
                this.form.for_3=response.data.cataltst.for_3;
                this.form.for_4=response.data.cataltst.for_4;
                this.form.for_5=response.data.cataltst.for_5;
                this.form.for_6=response.data.cataltst.for_6;
                this.form.for_7=response.data.cataltst.for_7;
                this.form.for_8=response.data.cataltst.for_8;
                this.form.for_9=response.data.cataltst.for_9;
                this.form.for_10=response.data.cataltst.for_10;
                this.form.for_11=response.data.cataltst.for_11;
                this.form.for_12=response.data.cataltst.for_12;
                this.form.for_13=response.data.cataltst.for_13;
                this.form.for_14=response.data.cataltst.for_14;
                this.form.for_15=response.data.cataltst.for_15;
                this.form.for_16=response.data.cataltst.for_16;
                this.form.for_17=response.data.cataltst.for_17;
                // Form 2
                this.form.r1_val1=response.data.cataltst.r1_val1;
                this.form.r1_val2=response.data.cataltst.r1_val2;
                this.form.r1_val3=response.data.cataltst.r1_val3;
                this.form.r1_val4=response.data.cataltst.r1_val4;
                this.form.r1_val5=response.data.cataltst.r1_val5;
                this.form.r1_val6=response.data.cataltst.r1_val6;
                this.form.r1_val7=response.data.cataltst.r1_val7;
                this.form.r1_val8=response.data.cataltst.r1_val8;
                this.form.r1_val9=response.data.cataltst.r1_val9;
                this.form.r1_val10=response.data.cataltst.r1_val10;
                this.form.r1_val11=response.data.cataltst.r1_val11;
                this.form.r1_val12=response.data.cataltst.r1_val12;
                this.form.r1_val13=response.data.cataltst.r1_val13;
                this.form.r1_val14=response.data.cataltst.r1_val14;
                this.form.r1_val15=response.data.cataltst.r1_val15;
                this.form.r1_val16=response.data.cataltst.r1_val16;
                this.form.r1_val17=response.data.cataltst.r1_val17;
                this.form.formula_1 = response.data.cataltst.formula_1;
                this.form.formula_2 = response.data.cataltst.formula_2;
                this.form.formula_3 = response.data.cataltst.formula_3;
                this.form.formula_4 = response.data.cataltst.formula_4;
                this.form.formula_5 = response.data.cataltst.formula_5;
                this.form.formula_6 = response.data.cataltst.formula_6;
                this.form.formula_7 = response.data.cataltst.formula_7;
                this.form.formula_8 = response.data.cataltst.formula_8;
                this.form.formula_9 = response.data.cataltst.formula_9;
                this.form.formula_10 = response.data.cataltst.formula_10;
                this.form.formula_11 = response.data.cataltst.formula_11;
                this.form.formula_12 = response.data.cataltst.formula_12;
                this.form.formula_13 = response.data.cataltst.formula_13;
                this.form.formula_14 = response.data.cataltst.formula_14;
                this.form.formula_15 = response.data.cataltst.formula_15;
                this.form.formula_16 = response.data.cataltst.formula_16;
                this.form.formula_17 = response.data.cataltst.formula_17;
                // Form 3
                this.form.r2_val1=response.data.cataltst.r2_val1;
                this.form.r2_val2=response.data.cataltst.r2_val2;
                this.form.r2_val3=response.data.cataltst.r2_val3;
                this.form.r2_val4=response.data.cataltst.r2_val4;
                this.form.r2_val5=response.data.cataltst.r2_val5;
                this.form.r2_val6=response.data.cataltst.r2_val6;
                this.form.r2_val7=response.data.cataltst.r2_val7;
                this.form.r2_val8=response.data.cataltst.r2_val8;
                this.form.r2_val9=response.data.cataltst.r2_val9;
                this.form.r2_val10=response.data.cataltst.r2_val10;
                this.form.r2_val11=response.data.cataltst.r2_val11;
                this.form.r2_val12=response.data.cataltst.r2_val12;
                this.form.r2_val13=response.data.cataltst.r2_val13;
                this.form.r2_val14=response.data.cataltst.r2_val14;
                this.form.r2_val15=response.data.cataltst.r2_val15;
                this.form.r2_val16=response.data.cataltst.r2_val16;
                this.form.r2_val17=response.data.cataltst.r2_val17;
                this.form.formula3_1 =  response.data.cataltst.formula3_1;
                this.form.formula3_2 =  response.data.cataltst.formula3_2;
                this.form.formula3_3 =  response.data.cataltst.formula3_3;
                this.form.formula3_4 =  response.data.cataltst.formula3_4;
                this.form.formula3_5 =  response.data.cataltst.formula3_5;
                this.form.formula3_6 =  response.data.cataltst.formula3_6;
                this.form.formula3_7 =  response.data.cataltst.formula3_7;
                this.form.formula3_8 =  response.data.cataltst.formula3_8;
                this.form.formula3_9 =  response.data.cataltst.formula3_9;
                this.form.formula3_10 =  response.data.cataltst.formula3_10;
                this.form.formula3_11 =  response.data.cataltst.formula3_11;
                this.form.formula3_12 =  response.data.cataltst.formula3_12;
                this.form.formula3_13 =  response.data.cataltst.formula3_13;
                this.form.formula3_14 =  response.data.cataltst.formula3_14;
                this.form.formula3_15 =  response.data.cataltst.formula3_15;
                this.form.formula3_16 =  response.data.cataltst.formula3_16;
                this.form.formula3_17 =  response.data.cataltst.formula3_17;
                // Form 4
                this.form.r3_val1=response.data.cataltst.r3_val1;
                this.form.r3_val2=response.data.cataltst.r3_val2;
                this.form.r3_val3=response.data.cataltst.r3_val3;
                this.form.r3_val4=response.data.cataltst.r3_val4;
                this.form.r3_val5=response.data.cataltst.r3_val5;
                this.form.r3_val6=response.data.cataltst.r3_val6;
                this.form.r3_val7=response.data.cataltst.r3_val7;
                this.form.r3_val8=response.data.cataltst.r3_val8;
                this.form.r3_val9=response.data.cataltst.r3_val9;
                this.form.r3_val10=response.data.cataltst.r3_val10;
                this.form.r3_val11=response.data.cataltst.r3_val11;
                this.form.r3_val12=response.data.cataltst.r3_val12;
                this.form.r3_val13=response.data.cataltst.r3_val13;
                this.form.r3_val14=response.data.cataltst.r3_val14;
                this.form.r3_val15=response.data.cataltst.r3_val15;
                this.form.r3_val16=response.data.cataltst.r3_val16;
                this.form.r3_val17=response.data.cataltst.r3_val17;
                this.form.formula4_1 = response.data.cataltst.formula4_1;
                this.form.formula4_2 = response.data.cataltst.formula4_2;
                this.form.formula4_3 = response.data.cataltst.formula4_3;
                this.form.formula4_4 = response.data.cataltst.formula4_4;
                this.form.formula4_5 = response.data.cataltst.formula4_5;
                this.form.formula4_6 = response.data.cataltst.formula4_6;
                this.form.formula4_7 = response.data.cataltst.formula4_7;
                this.form.formula4_8 = response.data.cataltst.formula4_8;
                this.form.formula4_9 = response.data.cataltst.formula4_9;
                this.form.formula4_10 = response.data.cataltst.formula4_10;
                this.form.formula4_11 = response.data.cataltst.formula4_11;
                this.form.formula4_12 = response.data.cataltst.formula4_12;
                this.form.formula4_13 = response.data.cataltst.formula4_13;
                this.form.formula4_14 = response.data.cataltst.formula4_14;
                this.form.formula4_15 = response.data.cataltst.formula4_15;
                this.form.formula4_16 = response.data.cataltst.formula4_16;
                this.form.formula4_17 = response.data.cataltst.formula4_17;
                this.form.formula4_18 = response.data.cataltst.formula4_18;
                this.fun1();
            })
            .catch(err => {
                console.log(err);
            })
        },
        fun1(){
            // For Form 1
            this.form.acid_val5 = parseFloat((this.form.acid_val2/this.form.for_1)*this.form.for_2).toFixed(4);
            this.form.acid_val6 = parseFloat((this.form.for_3-(this.form.acid_val1/this.form.for_4))*this.form.for_5).toFixed(4);
            this.form.acid_val7 = parseFloat(this.form.acid_val6)+parseFloat(this.form.acid_val5);
            this.form.acid_val9 = parseFloat(((this.form.for_6*(this.form.acid_val7/this.form.for_7))/(this.form.for_8*(this.form.acid_val8/this.form.for_9)))*this.form.for_10).toFixed(4);
            this.form.acid_val11 = parseFloat((this.form.acid_val4*this.form.acid_val10)).toFixed(4);
            this.form.acid_val12 = parseFloat((this.form.acid_val11*this.form.acid_val7)/this.form.for_11).toFixed(4);
            this.form.acid_val13 = parseFloat(((this.form.for_12/this.form.acid_val3)*this.form.acid_val12)*this.form.for_13).toFixed(4);
            this.form.acid_val14 = parseFloat(this.form.for_14-this.form.acid_val3).toFixed(4);
            this.form.acid_val15 = parseFloat((this.form.acid_val13*this.form.acid_val14)/this.form.for_15).toFixed(4);
            this.form.acid_val16 = parseFloat((this.form.acid_val15/this.form.acid_val11)*this.form.for_16).toFixed(4);
            this.form.acid_val17 = parseFloat((this.form.acid_val15/this.form.acid_val10)*this.form.for_17).toFixed(4);

             this.form.r3_val5 =  parseFloat((this.form.r3_val2/this.form.formula4_1)*this.form.formula4_2).toFixed(4);
             this.form.r3_val6 =  parseFloat(this.form.formula4_3*this.form.formula4_4).toFixed(4);
             this.form.r3_val7 =  parseFloat(this.form.r3_val5) + parseFloat(this.form.r3_val6);
             this.form.r3_val9 =  parseFloat(((this.form.formula4_6*(this.form.r3_val7/this.form.formula4_7))/(this.form.formula4_8*(this.form.r3_val8/this.form.formula4_9))*this.form.formula4_10)).toFixed(4);
             this.form.r3_val11 =  parseFloat(this.form.r3_val10 * this.form.r3_val4).toFixed(4);
             this.form.r3_val12 =  parseFloat((this.form.r3_val11 * this.form.r3_val7)/this.form.formula4_11).toFixed(4);
             this.form.r3_val13 =  parseFloat(((this.form.formula4_12 / this.form.r3_val3)*this.form.r3_val12)*this.form.formula4_13/this.form.formula4_14).toFixed(4);
             this.form.r3_val14 =  parseFloat(this.form.formula4_15 - this.form.r3_val3).toFixed(4);
             this.form.r3_val15 =  parseFloat((this.form.r3_val13 * this.form.r3_val14)/this.form.formula4_16).toFixed(4);
             this.form.r3_val16 =  parseFloat((this.form.r3_val15 / this.form.r3_val11)*this.form.formula4_17).toFixed(4);
             this.form.r3_val17 =  parseFloat((this.form.r3_val15 / this.form.r3_val10)*this.form.formula4_18).toFixed(4);

             this.form.r2_val5 =  parseFloat((this.form.r2_val2/this.form.formula3_1)*this.form.formula3_2).toFixed(4);
             this.form.r2_val6 =  parseFloat((this.form.formula3_3-(this.form.r2_val1/this.form.formula3_4))*this.form.formula3_5).toFixed(4);
             this.form.r2_val7 =  parseFloat(this.form.r2_val5) + parseFloat(this.form.r2_val6);
             this.form.r2_val9 =  parseFloat(((this.form.formula3_6*(this.form.r2_val7/this.form.formula3_7))/(this.form.formula3_8*(this.form.r2_val8/this.form.formula3_9))*this.form.formula3_10)).toFixed(4);
             this.form.r2_val11 =  parseFloat(this.form.r2_val10 * this.form.r2_val4).toFixed(4);
             this.form.r2_val12 =  parseFloat((this.form.r2_val11 * this.form.r2_val7)/this.form.formula3_11).toFixed(4);
             this.form.r2_val13 =  parseFloat(((this.form.formula3_12 / this.form.r2_val3)*this.form.r2_val12)*this.form.formula3_13).toFixed(4);
             this.form.r2_val14 =  parseFloat(this.form.formula3_14 - this.form.r2_val3).toFixed(4);
             this.form.r2_val15 =  parseFloat((this.form.r2_val13 * this.form.r2_val14)/this.form.formula3_15).toFixed(4);
             this.form.r2_val16 =  parseFloat((this.form.r2_val15 / this.form.r2_val11)*this.form.formula3_16).toFixed(4);
             this.form.r2_val17 =  parseFloat((this.form.r2_val15 / this.form.r2_val10)*this.form.formula3_17).toFixed(4);

             this.form.r1_val5 =  parseFloat((this.form.r1_val2/this.form.formula_1)*this.form.formula_2).toFixed(4);
             this.form.r1_val6 =  parseFloat((this.form.formula_3-(this.form.r1_val1/this.form.formula_4))*this.form.formula_5).toFixed(4);
             this.form.r1_val7 =  parseFloat(this.form.r1_val5)+parseFloat(this.form.r1_val6);
             this.form.r1_val9 =  parseFloat(((this.form.formula_6*(this.form.r1_val7/this.form.formula_7))/((this.form.formula_8)*(this.form.r1_val8/this.form.formula_9)))*this.form.formula_10).toFixed(4);
             this.form.r1_val11 =  parseFloat(this.form.r1_val10 * this.form.r1_val4).toFixed(4);
             this.form.r1_val12 =  parseFloat((this.form.r1_val11 * this.form.r1_val7)/this.form.formula_11).toFixed(4);
             this.form.r1_val13 =  parseFloat(((this.form.formula_12/this.form.r1_val3) * this.form.r1_val12)*this.form.formula_13/this.form.formula_14).toFixed(4);
             this.form.r1_val14 =  parseFloat(this.form.formula_15-this.form.r1_val3).toFixed(4);
             this.form.r1_val15 =  parseFloat(this.form.r1_val13*this.form.r1_val14/this.form.formula_16).toFixed(4);
             this.form.r1_val16 =  parseFloat(this.form.r1_val15/this.form.r1_val11*this.form.formula_17).toFixed(4);
             this.form.r1_val17 =  parseFloat(this.form.r1_val15/this.form.r1_val10*this.form.formula_18).toFixed(4);
        },
        submitForm(){
            axios.post('api/cataltst_cal', this.form, {headers: {'Authorization': 'Bearer ' + this.currentUser.token}})
                .then((response) => {
                    alert(response.data.message);
                })
                .catch(err => {
                    console.log(err);
                })
            console.log(this.form)
        },
    },
    beforeCreate: function() {
        document.querySelector('body').style.maxWidth = "100%";
        document.querySelector('body').style.minWidth = "100%";

        // document.getElementById("main").style.overflow = "hidden";
    },
    beforeMount(){
       
    },
    mounted() {
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
//////////////////////
        //  if(this.currentUser.email !== 'admin@gmail.com' || this.currentUser.email !== 'GMP@btechenergy.com' || this.currentUser.email !== 'lab@btechenergy.com'){
        //     // window.location.replace('/');
        //     alert('Frist Login As Admin!')
        //     window.location = "http://localhost:8000";
        // }
        // console.log(this.currentUser.email)
        if (localStorage.getItem('reloaded')) {
            // The page was just reloaded. Clear the value from local storage
            // so that it will reload the next time this page is visited.
            localStorage.removeItem('reloaded');
        } else {
            // Set a flag so that we know not to reload the page twice.
            localStorage.setItem('reloaded', '1');
            location.reload();
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
.formula_span{
    float: right;
}
.custom_formula{
    width: 50px;
}
.table{
    max-width: 100%;
    border: 2px solid;
    font-size: 12px;
}
.table th{
    font-size: 17px;
}
.table td{
    padding: 0px 0px 0px 15px;
}
@media only screen and (max-width: 965px) {
    .table{
        width: 83%!important;
        margin: 0px auto;
    }
}

</style>
