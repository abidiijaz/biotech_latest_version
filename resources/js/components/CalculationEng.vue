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
                        <td ><input type="number" v-model="var1" readonly step="any" style="width: 100px;" /></td>

                    </tr>
                    <tr>
                        <td class="col-md-11">AV after final Pre Drain</td>
                        <td ><input type="number" v-model="var2" readonly step="any" style="width: 100px;"/></td>

                    </tr>
                    <tr>
                        <td class="col-md-10">Catalyst Concentration </td>
                        <td ><div style="display: flex"><input type="number" v-model="var3" readonly step="any" style="width: 100px;"/> <span class="custom-add-sign">%</span></div></td>

                    </tr>
                    <tr>
                        <td class="col-md-11">Specific Gravity of Oil</td>
                        <td ><input type="number" readonly v-model="var4" step="any" style="width: 100px;background: #F8EA73;font-weight: bolder;" /></td>

                    </tr>
                    <tr style="font-weight: 600;font-size: 17px;">
                        <td class="col-md-11" >Basis for OIL Flow Rate to Trans Reactor</td>
                        <td ><div style="display: flex"><input type="number" readonly v-model="var5" step="any" style="width: 100px;"/> <span class="custom-add-sign">M3/Hour</span></div></td>
                    </tr>
                    <tr>
                        <td class="col-md-11" colspan="2">2 Tons of Pure NAOH is contained in 100 M3 of Catalyst Solution</td>
                    </tr>
                    <tr style="font-weight: 600;font-size: 17px;background-color: rgb(3 19 104)">
                        <td class="col-md-11">Therefore Catalyst Flow Rate Required </td>
                        <td ><div style="display: flex"><input type="number" v-model="var6" readonly step="any" style="width: 100px;color: red;font-weight: bolder;" /> <span class="custom-add-sign">M3/Hour</span></div></td>
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
                        <td ><input type="number" v-model="var7" readonly step="any" style="width: 100px;" /></td>
                    </tr>
                    <tr>
                        <td class="col-md-11">AV of when Roud Starts</td>
                        <td ><input type="number" readonly v-model="var8" step="any" style="width: 100px;"/></td>

                    </tr>
                    <tr>
                        <td class="col-md-11">Catalyst Concentration </td>
                        <td ><div style="display: flex"><input type="number" v-model="var9" readonly step="any" style="width: 100px;" /> <span class="custom-add-sign">%</span></div></td>

                    </tr>
                    <tr>
                        <td class="col-md-11">Specific Gravity of Oil</td>
                        <td ><input type="number" readonly step="any" v-model="var10" style="width: 100px;background: #F8EA73;font-weight: bolder;" readonly/></td>

                    </tr>
                  
                    <tr style="font-weight: 600;font-size: 17px;">
                        <td class="col-md-11" colspan="2">Round 1 Batch Reaction </td>
                    </tr>
                    <tr>
                        <td class="col-md-11">Enter Batch Volume here</td>
                        <td >
                            <div style="display: flex">
                                <input type="number" readonly step="any" v-model="var11" style="width: 100px;"/> <span class="custom-add-sign">M3</span>
                            </div>
                        </td>

                    </tr>
                    <tr>
                        <td class="col-md-11">2 Tons of Pure NAOH is contained in 100 M3 of Catalyst Solution</td>
                        <!-- <td ><input type="number" readonly step="any" style="width: 100px;"/></td> -->

                    </tr>
                    <tr style="font-weight: 600;font-size: 17px;background-color: rgb(3 19 104)">
                        <td class="col-md-8" >Total Alkali Addition </td>
                        <td class="col-md-4"><div style="display: flex"><input type="number" v-model="var12" readonly step="any" style="width: 100px;color: red;font-weight: bolder;"/> <span class="custom-add-sign">m3 total</span></div></td>

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
                            <td ><input type="number" v-model="var13" readonly step="any" style="width: 100px;" value="50"/></td>

                        </tr>
                        <tr>
                            <td class="col-md-11">AV after final Pre Drain </td>
                            <td ><input type="number" readonly v-model="var14" step="any" style="width: 100px;" value="50"/></td>

                        </tr>
                        <tr>
                            <td class="col-md-11">Catalyst Concentration  </td>
                            <td ><div style="display: flex"><input type="number" v-model="var15" readonly step="any" style="width: 100px;"/> <span class="custom-add-sign">%</span></div></td>

                        </tr>
                        <tr>
                            <td class="col-md-11">Specific Gravity of Oil</td>
                            <td ><input type="number" readonly step="any" v-model="var16" style="width: 100px;background: #F8EA73;font-weight: bolder;" value="50" readonly/></td>

                        </tr>
                       
                        <tr style="font-weight: 600;font-size: 17px;">
                            <td class="col-md-11">Basis for OIL Flow Rate to Trans Reactor</td>
                            <td ><div style="display: flex"><input type="number" v-model="var17" readonly step="any" style="width: 100px;"/> <span class="custom-add-sign">M3/Hour</span></div></td>

                        </tr>
                       
                        <tr>
                            <td class="col-md-11">2 Tons of Pure NAOH is contained in 100 M3 of Catalyst Solution </td>
                            <td ></td>

                        </tr>
                        <tr style="font-weight: 600;font-size: 17px;background-color: rgb(3 19 104)">
                            <td class="col-md-11">Therefore Catalyst Flow Rate Required </td>
                            <td ><div style="display: flex"><input type="number" v-model="var18" readonly step="any" style="width: 100px;color: red;font-weight: bolder;"/> <span class="custom-add-sign">M3/Hour</span></div></td>
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
                        <td ><input type="number" v-model="var19" readonly step="any" style="width: 100px;"/></td>

                    </tr>
                    <tr>
                        <td class="col-md-11">AV after final Pre Drain</td>
                        <td ><input type="number" v-model="var20" readonly step="any" style="width: 100px;"/></td>

                    </tr>
                    <tr>
                        <td class="col-md-11">Catalyst Concentration </td>
                        <td ><div style="display: flex"><input type="number" v-model="var21" readonly step="any" style="width: 100px;"/> <span class="custom-add-sign">%</span></div></td>

                    </tr>
                    <tr>
                        <td class="col-md-11">Specific Gravity of Oil</td>
                        <td ><input type="number" readonly step="any" v-model="var22" style="width: 100px; background: #F8EA73;font-weight: bolder;" readonly/></td>

                    </tr>
                  
                    <tr style="font-weight: 600;font-size: 17px;">
                        <td class="col-md-11">Basis for OIL Flow Rate to Trans Reactor </td>
                        <td ><div style="display: flex"><input type="number" v-model="var23" readonly step="any" style="width: 100px;"/> <span class="custom-add-sign">M3/Hour</span></div></td>

                    </tr>
                    <tr>
                        <td class="col-md-11">2 Tons of Pure NAOH is contained in 100 M3 of Catalyst Solution</td>
                        <td ></td>

                    </tr>
                    <tr style="font-weight: 600;font-size: 17px;background-color: rgb(3 19 104)">
                        <td class="col-md-6">Therefore Catalyst Flow Rate Required </td>
                        <td class="col-md-4"><div style="display: flex"><input type="number" v-model="var24" readonly step="any" style="width: 100px;color: red;font-weight: bolder;"/> <span class="custom-add-sign" style="width: 142px;">m3/Hour(at the End of Each Hour)</span></div></td>

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
            showlist:[],
            var1:0,var2:0,var3:0,var4:0,var5:0,var6:0,var7:0,var8:0,var9:0,var10:0,var11:0,var12:0,var13:0,var14:0,var15:0,
            var16:0,var17:0,var18:0,var19:0,var20:0,var21:0,var22:0,var23:0,var24:0,
        }
    },
   created(){
       this.ShowCataltst();
   },
    methods: {
        
        ShowCataltst(){
            axios.get('api/show_cataltst', {headers: {'Authorization': 'Bearer ' + this.currentUser.token}})
                .then((response) => {
                    this.showlist = response.data.cataltst
                    this.var1 = this.showlist.acid_val1;
                    this.var2 = this.showlist.acid_val2;
                    this.var3 = this.showlist.acid_val3;
                    this.var4 = this.showlist.acid_val4;
                    this.var5 = this.showlist.acid_val10;
                    this.var6 = this.showlist.acid_val13;
                    this.var7 = this.showlist.r1_val1;
                    this.var8 = this.showlist.r1_val2;
                    this.var9 = this.showlist.r1_val3;
                    this.var10 = this.showlist.r1_val4;
                    this.var11 = this.showlist.r1_val10;
                    this.var12 = this.showlist.r1_val13;
                    this.var13 = this.showlist.r2_val1;
                    this.var14 = this.showlist.r2_val2;
                    this.var15 = this.showlist.r2_val3;
                    this.var16 = this.showlist.r2_val4;
                    this.var17 = this.showlist.r2_val10;
                    this.var18 = this.showlist.r2_val13;
                    this.var19 = this.showlist.r3_val1;
                    this.var20 = this.showlist.r3_val2;
                    this.var21 = this.showlist.r3_val3;
                    this.var22 = this.showlist.r3_val4;
                    this.var23 = this.showlist.r3_val10;
                    this.var24 = this.showlist.r3_val13;
                })
                .catch(err => {
                    console.log(err);
                })

        },
       
    },
    beforeCreate: function() {
        document.querySelector('body').style.maxWidth = "100%";
        document.querySelector('body').style.minWidth = "100%";

        // document.getElementById("main").style.overflow = "hidden";
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
        // if(this.$store.getters.currentUser.role == 2){
        //     // window.location.replace('/');
        //     alert('Frist Login As Admin!')
        //     window.location = "http://localhost:8000";
        // }else if(this.$store.getters.currentUser.role == 3){
        //     alert('Frist Login As Admin!')
        //     window.location = "http://localhost:8000";
        // }
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
