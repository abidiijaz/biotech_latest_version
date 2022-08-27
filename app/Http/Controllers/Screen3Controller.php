<?php

namespace App\Http\Controllers;

use App\Cataltst_cal;
use App\RDL;
use App\RTD;
use App\Fm;
use App\fm_ft;
use App\selection_record;
use App\Setpoint;
use App\Valves_status;
use App\Vg;
use App\Volume_dpl;
use App\Volume_rdl;
use App\Upload_report;
use App\dt_aio;

use Illuminate\Http\Request;
use DB;
use PhpOffice\PhpSpreadsheet\Calculation\LookupRef\Selection;

class Screen3Controller extends Controller
{
    public function AlarmShow(Request $req){
        $val_1 = '';
        $val_2 = '';
        $val_3 = '';
        $val_4 = '';
        $val_5 = '';
        $val_6 = '';
        $val_7  = '';
        $val_8  = '';
        $val_9  = '';
        $val_10 = '';
        $val_11 = '';
        $val_12 = '';
        $val_13 = '';
        $val_14 = '';
        $val_15 = '';
        $val_16 = '';
        if(sizeof($req->all()[0]) == 1){
            $val_1 = $req->all()[0][0];
        }
        if(sizeof($req->all()[0]) == 2){
            $val_1 = $req->all()[0][0];
            $val_2 = $req->all()[0][1];
        }
        if(sizeof($req->all()[0]) == 3){
            $val_1 = $req->all()[0][0];
            $val_2 = $req->all()[0][1];
            $val_3 = $req->all()[0][2];
        }
        if(sizeof($req->all()[0]) == 4){
            $val_1 = $req->all()[0][0];
            $val_2 = $req->all()[0][1];
            $val_3 = $req->all()[0][2];
            $val_4 = $req->all()[0][3];
        }
        if(sizeof($req->all()[0]) == 5){
            $val_1 = $req->all()[0][0];
            $val_2 = $req->all()[0][1];
            $val_3 = $req->all()[0][2];
            $val_4 = $req->all()[0][3];
            $val_5 = $req->all()[0][4];
        }
        if(sizeof($req->all()[0]) == 6){
            $val_1 = $req->all()[0][0];
            $val_2 = $req->all()[0][1];
            $val_3 = $req->all()[0][2];
            $val_4 = $req->all()[0][3];
            $val_5 = $req->all()[0][4];
            $val_6 = $req->all()[0][5];
        }
        if(sizeof($req->all()[0]) == 7){
            $val_1 = $req->all()[0][0];
            $val_2 = $req->all()[0][1];
            $val_3 = $req->all()[0][2];
            $val_4 = $req->all()[0][3];
            $val_5 = $req->all()[0][4];
            $val_6 = $req->all()[0][5];
            $val_7 = $req->all()[0][6];
        }
        if(sizeof($req->all()[0]) == 8){
            $val_1 = $req->all()[0][0];
            $val_2 = $req->all()[0][1];
            $val_3 = $req->all()[0][2];
            $val_4 = $req->all()[0][3];
            $val_5 = $req->all()[0][4];
            $val_6 = $req->all()[0][5];
            $val_7 = $req->all()[0][6];
            $val_8 = $req->all()[0][7];
        }
        if(sizeof($req->all()[0]) == 9){
            $val_1 = $req->all()[0][0];
            $val_2 = $req->all()[0][1];
            $val_3 = $req->all()[0][2];
            $val_4 = $req->all()[0][3];
            $val_5 = $req->all()[0][4];
            $val_6 = $req->all()[0][5];
            $val_7 = $req->all()[0][6];
            $val_8 = $req->all()[0][7];
            $val_9 = $req->all()[0][8];
        }
        if(sizeof($req->all()[0]) == 10){
            $val_1 = $req->all()[0][0];
            $val_2 = $req->all()[0][1];
            $val_3 = $req->all()[0][2];
            $val_4 = $req->all()[0][3];
            $val_5 = $req->all()[0][4];
            $val_6 = $req->all()[0][5];
            $val_7 = $req->all()[0][6];
            $val_8 = $req->all()[0][7];
            $val_9 = $req->all()[0][8];
            $val_10 = $req->all()[0][9];
        }
        if(sizeof($req->all()[0]) == 11){
            $val_1 = $req->all()[0][0];
            $val_2 = $req->all()[0][1];
            $val_3 = $req->all()[0][2];
            $val_4 = $req->all()[0][3];
            $val_5 = $req->all()[0][4];
            $val_6 = $req->all()[0][5];
            $val_7 = $req->all()[0][6];
            $val_8 = $req->all()[0][7];
            $val_9 = $req->all()[0][8];
            $val_10 = $req->all()[0][9];
            $val_11 = $req->all()[0][10];
        }
        if(sizeof($req->all()[0]) == 12){
            $val_1 = $req->all()[0][0];
            $val_2 = $req->all()[0][1];
            $val_3 = $req->all()[0][2];
            $val_4 = $req->all()[0][3];
            $val_5 = $req->all()[0][4];
            $val_6 = $req->all()[0][5];
            $val_7 = $req->all()[0][6];
            $val_8 = $req->all()[0][7];
            $val_9 = $req->all()[0][8];
            $val_10 = $req->all()[0][9];
            $val_11 = $req->all()[0][10];
            $val_12 = $req->all()[0][11];
        }
        if(sizeof($req->all()[0]) == 13){
            $val_1 = $req->all()[0][0];
            $val_2 = $req->all()[0][1];
            $val_3 = $req->all()[0][2];
            $val_4 = $req->all()[0][3];
            $val_5 = $req->all()[0][4];
            $val_6 = $req->all()[0][5];
            $val_7 = $req->all()[0][6];
            $val_8 = $req->all()[0][7];
            $val_9 = $req->all()[0][8];
            $val_10 = $req->all()[0][9];
            $val_11 = $req->all()[0][10];
            $val_12 = $req->all()[0][11];
            $val_13 = $req->all()[0][12];
        }
        if(sizeof($req->all()[0]) == 14){
            $val_1 = $req->all()[0][0];
            $val_2 = $req->all()[0][1];
            $val_3 = $req->all()[0][2];
            $val_4 = $req->all()[0][3];
            $val_5 = $req->all()[0][4];
            $val_6 = $req->all()[0][5];
            $val_7 = $req->all()[0][6];
            $val_8 = $req->all()[0][7];
            $val_9 = $req->all()[0][8];
            $val_10 = $req->all()[0][9];
            $val_11 = $req->all()[0][10];
            $val_12 = $req->all()[0][11];
            $val_13 = $req->all()[0][12];
            $val_14 = $req->all()[0][13];
        }
        if(sizeof($req->all()[0]) == 15){
            $val_1 = $req->all()[0][0];
            $val_2 = $req->all()[0][1];
            $val_3 = $req->all()[0][2];
            $val_4 = $req->all()[0][3];
            $val_5 = $req->all()[0][4];
            $val_6 = $req->all()[0][5];
            $val_7 = $req->all()[0][6];
            $val_8 = $req->all()[0][7];
            $val_9 = $req->all()[0][8];
            $val_10 = $req->all()[0][9];
            $val_11 = $req->all()[0][10];
            $val_12 = $req->all()[0][11];
            $val_13 = $req->all()[0][12];
            $val_14 = $req->all()[0][13];
            $val_15 = $req->all()[0][14];
        }
        if(sizeof($req->all()[0]) == 16){
            $val_1 = $req->all()[0][0];
            $val_2 = $req->all()[0][1];
            $val_3 = $req->all()[0][2];
            $val_4 = $req->all()[0][3];
            $val_5 = $req->all()[0][4];
            $val_6 = $req->all()[0][5];
            $val_7 = $req->all()[0][6];
            $val_8 = $req->all()[0][7];
            $val_9 = $req->all()[0][8];
            $val_10 = $req->all()[0][9];
            $val_11 = $req->all()[0][10];
            $val_12 = $req->all()[0][11];
            $val_13 = $req->all()[0][12];
            $val_14 = $req->all()[0][13];
            $val_15 = $req->all()[0][14];
            $val_16 = $req->all()[0][15];
        }
        $timing = $req->all()[1];
        $fromdate = $req->all()[2];
        $todate = $req->all()[3];

        $date1 = strtotime($fromdate);
        $date2 = strtotime($todate);
        $new_date1 = date('Y-m-d H:i:s', $date1);
        $new_date2 = date('Y-m-d H:i:s', $date2);
        
        if($timing == 1){
            if (sizeof($req->all()[0]) == 1) {
                $val_1 = DB::select("SELECT timing, $val_1 FROM dt_aio WHERE ($val_1 = 'H') AND timing > now() - interval 24 hour");
            } else if (sizeof($req->all()[0]) == 2) {
                $val_1 = DB::select("SELECT timing, $val_1, $val_2 FROM dt_aio WHERE ($val_1 = 'H' OR $val_2 = 'H' ) AND timing > now() - interval 24 hour");
            } else if (sizeof($req->all()[0]) == 3) {
                $val_1 = DB::select("SELECT timing, $val_1, $val_2,$val_3 FROM dt_aio WHERE ($val_1 = 'H' OR $val_2 = 'H' OR $val_3 = 'H') AND timing > now() - interval 24 hour");
            } else if (sizeof($req->all()[0]) == 4) {
                $val_1 = DB::select("SELECT timing, $val_1, $val_2,$val_3,$val_4 FROM dt_aio WHERE ($val_1 = 'H' OR $val_2 = 'H' OR $val_3 = 'H' OR $val_4 = 'H') AND timing > now() - interval 24 hour");
            } else if (sizeof($req->all()[0]) == 5) {
                $val_1 = DB::select("SELECT timing, $val_1, $val_2,$val_3,$val_4,$val_5 FROM dt_aio WHERE ($val_1 = 'H' OR $val_2 = 'H' OR $val_3 = 'H' OR $val_4 = 'H' OR $val_5 = 'H') AND timing > now() - interval 24 hour");
            } else if (sizeof($req->all()[0]) == 6) {
                $val_1 = DB::select("SELECT timing, $val_1, $val_2,$val_3,$val_4,$val_5,$val_6 FROM dt_aio WHERE ($val_1 = 'H' OR $val_2 = 'H' OR $val_3 = 'H' OR $val_4 = 'H' OR $val_5 = 'H' OR $val_6 = 'H') AND timing > now() - interval 24 hour");
            } else if (sizeof($req->all()[0]) == 7) {
                $val_1 = DB::select("SELECT timing, $val_1, $val_2,$val_3,$val_4,$val_5,$val_6,$val_7 FROM dt_aio WHERE ($val_1 = 'H' OR $val_2 = 'H' OR $val_3 = 'H' OR $val_4 = 'H' OR $val_5 = 'H' OR $val_6 = 'H' OR $val_7 = 'H') AND timing > now() - interval 24 hour");
            } else if (sizeof($req->all()[0]) == 8) {
                $val_1 = DB::select("SELECT timing, $val_1, $val_2,$val_3,$val_4,$val_5,$val_6,$val_7,$val_8 FROM dt_aio WHERE ($val_1 = 'H' OR $val_2 = 'H' OR $val_3 = 'H' OR $val_4 = 'H' OR $val_5 = 'H' OR $val_6 = 'H' OR $val_7 = 'H' OR $val_8 = 'H') AND timing > now() - interval 24 hour");
            } else if (sizeof($req->all()[0]) == 9) {
                $val_1 = DB::select("SELECT timing, $val_1, $val_2,$val_3,$val_4,$val_5,$val_6,$val_7,$val_8,$val_9 FROM dt_aio WHERE ($val_1 = 'H' OR $val_2 = 'H' OR $val_3 = 'H' OR $val_4 = 'H' OR $val_5 = 'H' OR $val_6 = 'H' OR $val_7 = 'H' OR $val_8 = 'H' OR $val_9 = 'H') AND timing > now() - interval 24 hour");
            } else if (sizeof($req->all()[0]) == 10) {
                $val_1 = DB::select("SELECT timing, $val_1, $val_2,$val_3,$val_4,$val_5,$val_6,$val_7,$val_8,$val_9,$val_10 FROM dt_aio WHERE ($val_1 = 'H' OR $val_2 = 'H' OR $val_3 = 'H' OR $val_4 = 'H' OR $val_5 = 'H' OR $val_6 = 'H' OR $val_7 = 'H' OR $val_8 = 'H' OR $val_9 = 'H' OR $val_10 = 'H') AND timing > now() - interval 24 hour");
            } else if (sizeof($req->all()[0]) == 11) {
                $val_1 = DB::select("SELECT timing, $val_1, $val_2,$val_3,$val_4,$val_5,$val_6,$val_7,$val_8,$val_9,$val_10,$val_11 FROM dt_aio WHERE ($val_1 = 'H' OR $val_2 = 'H' OR $val_3 = 'H' OR $val_4 = 'H' OR $val_5 = 'H' OR $val_6 = 'H' OR $val_7 = 'H' OR $val_8 = 'H' OR $val_9 = 'H' OR $val_10 = 'H' OR $val_11 = 'H') AND timing > now() - interval 24 hour");
            } else if (sizeof($req->all()[0]) == 12) {
                $val_1 = DB::select("SELECT timing, $val_1, $val_2,$val_3,$val_4,$val_5,$val_6,$val_7,$val_8,$val_9,$val_10,$val_11,$val_12 FROM dt_aio WHERE ($val_1 = 'H' OR $val_2 = 'H' OR $val_3 = 'H' OR $val_4 = 'H' OR $val_5 = 'H' OR $val_6 = 'H' OR $val_7 = 'H' OR $val_8 = 'H' OR $val_9 = 'H' OR $val_10 = 'H' OR $val_11 = 'H' OR $val_12 = 'H') AND timing > now() - interval 24 hour");
            } else if (sizeof($req->all()[0]) == 13) {
                $val_1 = DB::select("SELECT timing, $val_1, $val_2,$val_3,$val_4,$val_5,$val_6,$val_7,$val_8,$val_9,$val_10,$val_11,$val_12,$val_13 FROM dt_aio WHERE ($val_1 = 'H' OR $val_2 = 'H' OR $val_3 = 'H' OR $val_4 = 'H' OR $val_5 = 'H' OR $val_6 = 'H' OR $val_7 = 'H' OR $val_8 = 'H' OR $val_9 = 'H' OR $val_10 = 'H' OR $val_11 = 'H' OR $val_12 = 'H' OR $val_13 = 'H') AND timing > now() - interval 24 hour");
            } else if (sizeof($req->all()[0]) == 14) {
                $val_1 = DB::select("SELECT timing, $val_1, $val_2,$val_3,$val_4,$val_5,$val_6,$val_7,$val_8,$val_9,$val_10,$val_11,$val_12,$val_13,$val_14 FROM dt_aio WHERE ($val_1 = 'H' OR $val_2 = 'H' OR $val_3 = 'H' OR $val_4 = 'H' OR $val_5 = 'H' OR $val_6 = 'H' OR $val_7 = 'H' OR $val_8 = 'H' OR $val_9 = 'H' OR $val_10 = 'H' OR $val_11 = 'H' OR $val_12 = 'H' OR $val_13 = 'H' OR $val_14 = 'H') AND timing > now() - interval 24 hour");
            } else if (sizeof($req->all()[0]) == 15) {
                $val_1 = DB::select("SELECT timing, $val_1, $val_2,$val_3,$val_4,$val_5,$val_6,$val_7,$val_8,$val_9,$val_10,$val_11,$val_12,$val_13,$val_14,$val_15 FROM dt_aio WHERE ($val_1 = 'H' OR $val_2 = 'H' OR $val_3 = 'H' OR $val_4 = 'H' OR $val_5 = 'H' OR $val_6 = 'H' OR $val_7 = 'H' OR $val_8 = 'H' OR $val_9 = 'H' OR $val_10 = 'H' OR $val_11 = 'H' OR $val_12 = 'H' OR $val_13 = 'H' OR $val_14 = 'H' OR $val_15 = 'H') AND timing > now() - interval 24 hour");
            } else if (sizeof($req->all()[0]) == 16) {
                $val_1 = DB::select("SELECT timing, $val_1, $val_2,$val_3,$val_4,$val_5,$val_6,$val_7,$val_8,$val_9,$val_10,$val_11,$val_12,$val_13,$val_14,$val_15,$val_16 FROM dt_aio WHERE ($val_1 = 'H' OR $val_2 = 'H' OR $val_3 = 'H' OR $val_4 = 'H' OR $val_5 = 'H' OR $val_6 = 'H' OR $val_7 = 'H' OR $val_8 = 'H' OR $val_9 = 'H' OR $val_10 = 'H' OR $val_11 = 'H' OR $val_12 = 'H' OR $val_13 = 'H' OR $val_14 = 'H' OR $val_15 = 'H' OR $val_16 = 'H') AND timing > now() - interval 24 hour");
            }
        }else if($timing == 2){
            if (sizeof($req->all()[0]) == 1) {
                $val_1 = DB::select("SELECT timing, $val_1 FROM dt_aio WHERE ($val_1 = 'H') AND timing >= DATE_SUB(CURDATE(), INTERVAL 14 hour) AND timing <= DATE_ADD(CURDATE(),INTERVAL 10 hour)");
            } else if (sizeof($req->all()[0]) == 2) {
                $val_1 = DB::select("SELECT timing, $val_1, $val_2 FROM dt_aio WHERE ($val_1 = 'H' OR $val_2 = 'H' ) AND timing >= DATE_SUB(CURDATE(), INTERVAL 14 hour) AND timing <= DATE_ADD(CURDATE(),INTERVAL 10 hour)");
            } else if (sizeof($req->all()[0]) == 3) {
                $val_1 = DB::select("SELECT timing, $val_1, $val_2,$val_3 FROM dt_aio WHERE ($val_1 = 'H' OR $val_2 = 'H' OR $val_3 = 'H') AND timing >= DATE_SUB(CURDATE(), INTERVAL 14 hour) AND timing <= DATE_ADD(CURDATE(),INTERVAL 10 hour)");
            } else if (sizeof($req->all()[0]) == 4) {
                $val_1 = DB::select("SELECT timing, $val_1, $val_2,$val_3,$val_4 FROM dt_aio WHERE ($val_1 = 'H' OR $val_2 = 'H' OR $val_3 = 'H' OR $val_4 = 'H') AND timing >= DATE_SUB(CURDATE(), INTERVAL 14 hour) AND timing <= DATE_ADD(CURDATE(),INTERVAL 10 hour)");
            } else if (sizeof($req->all()[0]) == 5) {
                $val_1 = DB::select("SELECT timing, $val_1, $val_2,$val_3,$val_4,$val_5 FROM dt_aio WHERE ($val_1 = 'H' OR $val_2 = 'H' OR $val_3 = 'H' OR $val_4 = 'H' OR $val_5 = 'H') AND timing >= DATE_SUB(CURDATE(), INTERVAL 14 hour) AND timing <= DATE_ADD(CURDATE(),INTERVAL 10 hour)");
            } else if (sizeof($req->all()[0]) == 6) {
                $val_1 = DB::select("SELECT timing, $val_1, $val_2,$val_3,$val_4,$val_5,$val_6 FROM dt_aio WHERE ($val_1 = 'H' OR $val_2 = 'H' OR $val_3 = 'H' OR $val_4 = 'H' OR $val_5 = 'H' OR $val_6 = 'H') AND timing >= DATE_SUB(CURDATE(), INTERVAL 14 hour) AND timing <= DATE_ADD(CURDATE(),INTERVAL 10 hour)");
            } else if (sizeof($req->all()[0]) == 7) {
                $val_1 = DB::select("SELECT timing, $val_1, $val_2,$val_3,$val_4,$val_5,$val_6,$val_7 FROM dt_aio WHERE ($val_1 = 'H' OR $val_2 = 'H' OR $val_3 = 'H' OR $val_4 = 'H' OR $val_5 = 'H' OR $val_6 = 'H' OR $val_7 = 'H') AND timing >= DATE_SUB(CURDATE(), INTERVAL 14 hour) AND timing <= DATE_ADD(CURDATE(),INTERVAL 10 hour)");
            } else if (sizeof($req->all()[0]) == 8) {
                $val_1 = DB::select("SELECT timing, $val_1, $val_2,$val_3,$val_4,$val_5,$val_6,$val_7,$val_8 FROM dt_aio WHERE ($val_1 = 'H' OR $val_2 = 'H' OR $val_3 = 'H' OR $val_4 = 'H' OR $val_5 = 'H' OR $val_6 = 'H' OR $val_7 = 'H' OR $val_8 = 'H') AND timing >= DATE_SUB(CURDATE(), INTERVAL 14 hour) AND timing <= DATE_ADD(CURDATE(),INTERVAL 10 hour)");
            } else if (sizeof($req->all()[0]) == 9) {
                $val_1 = DB::select("SELECT timing, $val_1, $val_2,$val_3,$val_4,$val_5,$val_6,$val_7,$val_8,$val_9 FROM dt_aio WHERE ($val_1 = 'H' OR $val_2 = 'H' OR $val_3 = 'H' OR $val_4 = 'H' OR $val_5 = 'H' OR $val_6 = 'H' OR $val_7 = 'H' OR $val_8 = 'H' OR $val_9 = 'H') AND timing >= DATE_SUB(CURDATE(), INTERVAL 14 hour) AND timing <= DATE_ADD(CURDATE(),INTERVAL 10 hour)");
            } else if (sizeof($req->all()[0]) == 10) {
                $val_1 = DB::select("SELECT timing, $val_1, $val_2,$val_3,$val_4,$val_5,$val_6,$val_7,$val_8,$val_9,$val_10 FROM dt_aio WHERE ($val_1 = 'H' OR $val_2 = 'H' OR $val_3 = 'H' OR $val_4 = 'H' OR $val_5 = 'H' OR $val_6 = 'H' OR $val_7 = 'H' OR $val_8 = 'H' OR $val_9 = 'H' OR $val_10 = 'H') AND timing >= DATE_SUB(CURDATE(), INTERVAL 14 hour) AND timing <= DATE_ADD(CURDATE(),INTERVAL 10 hour)");
            } else if (sizeof($req->all()[0]) == 11) {
                $val_1 = DB::select("SELECT timing, $val_1, $val_2,$val_3,$val_4,$val_5,$val_6,$val_7,$val_8,$val_9,$val_10,$val_11 FROM dt_aio WHERE ($val_1 = 'H' OR $val_2 = 'H' OR $val_3 = 'H' OR $val_4 = 'H' OR $val_5 = 'H' OR $val_6 = 'H' OR $val_7 = 'H' OR $val_8 = 'H' OR $val_9 = 'H' OR $val_10 = 'H' OR $val_11 = 'H') AND timing >= DATE_SUB(CURDATE(), INTERVAL 14 hour) AND timing <= DATE_ADD(CURDATE(),INTERVAL 10 hour)");
            } else if (sizeof($req->all()[0]) == 12) {
                $val_1 = DB::select("SELECT timing, $val_1, $val_2,$val_3,$val_4,$val_5,$val_6,$val_7,$val_8,$val_9,$val_10,$val_11,$val_12 FROM dt_aio WHERE ($val_1 = 'H' OR $val_2 = 'H' OR $val_3 = 'H' OR $val_4 = 'H' OR $val_5 = 'H' OR $val_6 = 'H' OR $val_7 = 'H' OR $val_8 = 'H' OR $val_9 = 'H' OR $val_10 = 'H' OR $val_11 = 'H' OR $val_12 = 'H') AND timing >= DATE_SUB(CURDATE(), INTERVAL 14 hour) AND timing <= DATE_ADD(CURDATE(),INTERVAL 10 hour)");
            } else if (sizeof($req->all()[0]) == 13) {
                $val_1 = DB::select("SELECT timing, $val_1, $val_2,$val_3,$val_4,$val_5,$val_6,$val_7,$val_8,$val_9,$val_10,$val_11,$val_12,$val_13 FROM dt_aio WHERE ($val_1 = 'H' OR $val_2 = 'H' OR $val_3 = 'H' OR $val_4 = 'H' OR $val_5 = 'H' OR $val_6 = 'H' OR $val_7 = 'H' OR $val_8 = 'H' OR $val_9 = 'H' OR $val_10 = 'H' OR $val_11 = 'H' OR $val_12 = 'H' OR $val_13 = 'H') AND timing >= DATE_SUB(CURDATE(), INTERVAL 14 hour) AND timing <= DATE_ADD(CURDATE(),INTERVAL 10 hour)");
            } else if (sizeof($req->all()[0]) == 14) {
                $val_1 = DB::select("SELECT timing, $val_1, $val_2,$val_3,$val_4,$val_5,$val_6,$val_7,$val_8,$val_9,$val_10,$val_11,$val_12,$val_13,$val_14 FROM dt_aio WHERE ($val_1 = 'H' OR $val_2 = 'H' OR $val_3 = 'H' OR $val_4 = 'H' OR $val_5 = 'H' OR $val_6 = 'H' OR $val_7 = 'H' OR $val_8 = 'H' OR $val_9 = 'H' OR $val_10 = 'H' OR $val_11 = 'H' OR $val_12 = 'H' OR $val_13 = 'H' OR $val_14 = 'H') AND timing >= DATE_SUB(CURDATE(), INTERVAL 14 hour) AND timing <= DATE_ADD(CURDATE(),INTERVAL 10 hour)");
            } else if (sizeof($req->all()[0]) == 15) {
                $val_1 = DB::select("SELECT timing, $val_1, $val_2,$val_3,$val_4,$val_5,$val_6,$val_7,$val_8,$val_9,$val_10,$val_11,$val_12,$val_13,$val_14,$val_15 FROM dt_aio WHERE ($val_1 = 'H' OR $val_2 = 'H' OR $val_3 = 'H' OR $val_4 = 'H' OR $val_5 = 'H' OR $val_6 = 'H' OR $val_7 = 'H' OR $val_8 = 'H' OR $val_9 = 'H' OR $val_10 = 'H' OR $val_11 = 'H' OR $val_12 = 'H' OR $val_13 = 'H' OR $val_14 = 'H' OR $val_15 = 'H') AND timing >= DATE_SUB(CURDATE(), INTERVAL 14 hour) AND timing <= DATE_ADD(CURDATE(),INTERVAL 10 hour)");
            } else if (sizeof($req->all()[0]) == 16) {
                $val_1 = DB::select("SELECT timing, $val_1, $val_2,$val_3,$val_4,$val_5,$val_6,$val_7,$val_8,$val_9,$val_10,$val_11,$val_12,$val_13,$val_14,$val_15,$val_16 FROM dt_aio WHERE ($val_1 = 'H' OR $val_2 = 'H' OR $val_3 = 'H' OR $val_4 = 'H' OR $val_5 = 'H' OR $val_6 = 'H' OR $val_7 = 'H' OR $val_8 = 'H' OR $val_9 = 'H' OR $val_10 = 'H' OR $val_11 = 'H' OR $val_12 = 'H' OR $val_13 = 'H' OR $val_14 = 'H' OR $val_15 = 'H' OR $val_16 = 'H') AND timing >= DATE_SUB(CURDATE(), INTERVAL 14 hour) AND timing <= DATE_ADD(CURDATE(),INTERVAL 10 hour)");
            }
        }else if($timing == 3){
            if (sizeof($req->all()[0]) == 1) {
                $val_1 = DB::select("SELECT timing, $val_1 FROM dt_aio WHERE ($val_1 = 'H') AND timing BETWEEN '$new_date1' AND '$new_date2' ORDER BY dt_id ASC");
            } else if (sizeof($req->all()[0]) == 2) {
                $val_1 = DB::select("SELECT timing, $val_1, $val_2 FROM dt_aio WHERE ($val_1 = 'H' OR $val_2 = 'H' ) AND timing BETWEEN '$new_date1' AND '$new_date2' ORDER BY dt_id ASC");
            } else if (sizeof($req->all()[0]) == 3) {
                $val_1 = DB::select("SELECT timing, $val_1, $val_2,$val_3 FROM dt_aio WHERE ($val_1 = 'H' OR $val_2 = 'H' OR $val_3 = 'H') AND timing BETWEEN '$new_date1' AND '$new_date2' ORDER BY dt_id ASC");
            } else if (sizeof($req->all()[0]) == 4) {
                $val_1 = DB::select("SELECT timing, $val_1, $val_2,$val_3,$val_4 FROM dt_aio WHERE ($val_1 = 'H' OR $val_2 = 'H' OR $val_3 = 'H' OR $val_4 = 'H') AND timing BETWEEN '$new_date1' AND '$new_date2' ORDER BY dt_id ASC");
            } else if (sizeof($req->all()[0]) == 5) {
                $val_1 = DB::select("SELECT timing, $val_1, $val_2,$val_3,$val_4,$val_5 FROM dt_aio WHERE ($val_1 = 'H' OR $val_2 = 'H' OR $val_3 = 'H' OR $val_4 = 'H' OR $val_5 = 'H') AND timing BETWEEN '$new_date1' AND '$new_date2' ORDER BY dt_id ASC");
            } else if (sizeof($req->all()[0]) == 6) {
                $val_1 = DB::select("SELECT timing, $val_1, $val_2,$val_3,$val_4,$val_5,$val_6 FROM dt_aio WHERE ($val_1 = 'H' OR $val_2 = 'H' OR $val_3 = 'H' OR $val_4 = 'H' OR $val_5 = 'H' OR $val_6 = 'H') AND timing BETWEEN '$new_date1' AND '$new_date2' ORDER BY dt_id ASC");
            } else if (sizeof($req->all()[0]) == 7) {
                $val_1 = DB::select("SELECT timing, $val_1, $val_2,$val_3,$val_4,$val_5,$val_6,$val_7 FROM dt_aio WHERE ($val_1 = 'H' OR $val_2 = 'H' OR $val_3 = 'H' OR $val_4 = 'H' OR $val_5 = 'H' OR $val_6 = 'H' OR $val_7 = 'H') AND timing BETWEEN '$new_date1' AND '$new_date2' ORDER BY dt_id ASC");
            } else if (sizeof($req->all()[0]) == 8) {
                $val_1 = DB::select("SELECT timing, $val_1, $val_2,$val_3,$val_4,$val_5,$val_6,$val_7,$val_8 FROM dt_aio WHERE ($val_1 = 'H' OR $val_2 = 'H' OR $val_3 = 'H' OR $val_4 = 'H' OR $val_5 = 'H' OR $val_6 = 'H' OR $val_7 = 'H' OR $val_8 = 'H') AND timing BETWEEN '$new_date1' AND '$new_date2' ORDER BY dt_id ASC");
            } else if (sizeof($req->all()[0]) == 9) {
                $val_1 = DB::select("SELECT timing, $val_1, $val_2,$val_3,$val_4,$val_5,$val_6,$val_7,$val_8,$val_9 FROM dt_aio WHERE ($val_1 = 'H' OR $val_2 = 'H' OR $val_3 = 'H' OR $val_4 = 'H' OR $val_5 = 'H' OR $val_6 = 'H' OR $val_7 = 'H' OR $val_8 = 'H' OR $val_9 = 'H') AND timing BETWEEN '$new_date1' AND '$new_date2' ORDER BY dt_id ASC");
            } else if (sizeof($req->all()[0]) == 10) {
                $val_1 = DB::select("SELECT timing, $val_1, $val_2,$val_3,$val_4,$val_5,$val_6,$val_7,$val_8,$val_9,$val_10 FROM dt_aio WHERE ($val_1 = 'H' OR $val_2 = 'H' OR $val_3 = 'H' OR $val_4 = 'H' OR $val_5 = 'H' OR $val_6 = 'H' OR $val_7 = 'H' OR $val_8 = 'H' OR $val_9 = 'H' OR $val_10 = 'H') AND timing BETWEEN '$new_date1' AND '$new_date2' ORDER BY dt_id ASC");
            } else if (sizeof($req->all()[0]) == 11) {
                $val_1 = DB::select("SELECT timing, $val_1, $val_2,$val_3,$val_4,$val_5,$val_6,$val_7,$val_8,$val_9,$val_10,$val_11 FROM dt_aio WHERE ($val_1 = 'H' OR $val_2 = 'H' OR $val_3 = 'H' OR $val_4 = 'H' OR $val_5 = 'H' OR $val_6 = 'H' OR $val_7 = 'H' OR $val_8 = 'H' OR $val_9 = 'H' OR $val_10 = 'H' OR $val_11 = 'H') AND timing BETWEEN '$new_date1' AND '$new_date2' ORDER BY dt_id ASC");
            } else if (sizeof($req->all()[0]) == 12) {
                $val_1 = DB::select("SELECT timing, $val_1, $val_2,$val_3,$val_4,$val_5,$val_6,$val_7,$val_8,$val_9,$val_10,$val_11,$val_12 FROM dt_aio WHERE ($val_1 = 'H' OR $val_2 = 'H' OR $val_3 = 'H' OR $val_4 = 'H' OR $val_5 = 'H' OR $val_6 = 'H' OR $val_7 = 'H' OR $val_8 = 'H' OR $val_9 = 'H' OR $val_10 = 'H' OR $val_11 = 'H' OR $val_12 = 'H') AND timing BETWEEN '$new_date1' AND '$new_date2' ORDER BY dt_id ASC");
            } else if (sizeof($req->all()[0]) == 13) {
                $val_1 = DB::select("SELECT timing, $val_1, $val_2,$val_3,$val_4,$val_5,$val_6,$val_7,$val_8,$val_9,$val_10,$val_11,$val_12,$val_13 FROM dt_aio WHERE ($val_1 = 'H' OR $val_2 = 'H' OR $val_3 = 'H' OR $val_4 = 'H' OR $val_5 = 'H' OR $val_6 = 'H' OR $val_7 = 'H' OR $val_8 = 'H' OR $val_9 = 'H' OR $val_10 = 'H' OR $val_11 = 'H' OR $val_12 = 'H' OR $val_13 = 'H') AND timing BETWEEN '$new_date1' AND '$new_date2' ORDER BY dt_id ASC");
            } else if (sizeof($req->all()[0]) == 14) {
                $val_1 = DB::select("SELECT timing, $val_1, $val_2,$val_3,$val_4,$val_5,$val_6,$val_7,$val_8,$val_9,$val_10,$val_11,$val_12,$val_13,$val_14 FROM dt_aio WHERE ($val_1 = 'H' OR $val_2 = 'H' OR $val_3 = 'H' OR $val_4 = 'H' OR $val_5 = 'H' OR $val_6 = 'H' OR $val_7 = 'H' OR $val_8 = 'H' OR $val_9 = 'H' OR $val_10 = 'H' OR $val_11 = 'H' OR $val_12 = 'H' OR $val_13 = 'H' OR $val_14 = 'H') AND timing BETWEEN '$new_date1' AND '$new_date2' ORDER BY dt_id ASC");
            } else if (sizeof($req->all()[0]) == 15) {
                $val_1 = DB::select("SELECT timing, $val_1, $val_2,$val_3,$val_4,$val_5,$val_6,$val_7,$val_8,$val_9,$val_10,$val_11,$val_12,$val_13,$val_14,$val_15 FROM dt_aio WHERE ($val_1 = 'H' OR $val_2 = 'H' OR $val_3 = 'H' OR $val_4 = 'H' OR $val_5 = 'H' OR $val_6 = 'H' OR $val_7 = 'H' OR $val_8 = 'H' OR $val_9 = 'H' OR $val_10 = 'H' OR $val_11 = 'H' OR $val_12 = 'H' OR $val_13 = 'H' OR $val_14 = 'H' OR $val_15 = 'H') AND timing BETWEEN '$new_date1' AND '$new_date2' ORDER BY dt_id ASC");
            } else if (sizeof($req->all()[0]) == 16) {
                $val_1 = DB::select("SELECT timing, $val_1, $val_2,$val_3,$val_4,$val_5,$val_6,$val_7,$val_8,$val_9,$val_10,$val_11,$val_12,$val_13,$val_14,$val_15,$val_16 FROM dt_aio WHERE ($val_1 = 'H' OR $val_2 = 'H' OR $val_3 = 'H' OR $val_4 = 'H' OR $val_5 = 'H' OR $val_6 = 'H' OR $val_7 = 'H' OR $val_8 = 'H' OR $val_9 = 'H' OR $val_10 = 'H' OR $val_11 = 'H' OR $val_12 = 'H' OR $val_13 = 'H' OR $val_14 = 'H' OR $val_15 = 'H' OR $val_16 = 'H') AND timing BETWEEN '$new_date1' AND '$new_date2' ORDER BY dt_id ASC");
            }
        }

        return response()->json([
            'pump_data1' => $val_1,
           
        ], 200);
    }
    public function OnOffPumpReport(Request $req){
        $db_data1='';$db_data2='';$db_data3='';
        if(sizeof($req->all()[0]) == 1){
            $pump1 = $req->all()[0][0];
        }
        if(sizeof($req->all()[0]) == 2){
            $pump1 = $req->all()[0][0];
            $pump2 = $req->all()[0][1];
        }
        if(sizeof($req->all()[0]) == 3){
            $pump1 = $req->all()[0][0];
            $pump2 = $req->all()[0][1];
            $pump3 = $req->all()[0][2];
        }
        $interval = $req->all()[1];
        $datetime = $req->all()[2];
        $fromdate = $req->all()[3];
        $todate = $req->all()[4];

        $date1 = strtotime($fromdate);
        $date2 = strtotime($todate);
        $new_date1 = date('Y-m-d H:i:s', $date1);
        $new_date2 = date('Y-m-d H:i:s', $date2);
        
        if($datetime == 1){
            $db_data1 = DB::select("SELECT * FROM dt_aio WHERE timing > now() - interval 24 hour AND dt_id MOD '$interval' = 0");
        }
        if($datetime == 2){
            $db_data1 = DB::select("SELECT * FROM dt_aio WHERE timing >= DATE_SUB(CURDATE(), INTERVAL 14 hour) AND timing <= DATE_ADD(CURDATE(),INTERVAL 10 hour) AND dt_id MOD '$interval' = 0");
        }
        if($datetime == 3){
            $db_data1 = DB::select("SELECT * FROM dt_aio WHERE timing > DATE_SUB(CURDATE(), INTERVAL 7 day) AND dt_id MOD '$interval' = 0");        
        }
        if($datetime == 4){
            $db_data1 = DB::select("SELECT * FROM dt_aio WHERE timing BETWEEN CURDATE() - INTERVAL 30 DAY AND CURDATE() AND dt_id MOD '$interval' = 0");
        }
        if($datetime == 5){
            $db_data1 = DB::select("SELECT * FROM dt_aio WHERE timing BETWEEN '$new_date1' AND '$new_date2' AND dt_id MOD '$interval' = 0 ORDER BY dt_id ASC");
        }
        return response()->json([
            'pump_data1' => $db_data1,
           
        ], 200);
    }
    public function showDrainReportForMonth(){
        $val_1 = DB::select("SELECT timing_bvo_1,SUM(rdl_8_total_drain) AS rdl_8 FROM actuator_drain GROUP BY DATE_FORMAT(timing_bvo_1, '%Y-%m')");
        $val_2 = DB::select("SELECT timing_bvo_2,SUM(rdl_9_total_drain) AS rdl_9 FROM actuator_drain GROUP BY MONTH(timing_bvo_2)");
        $val_3 = DB::select("SELECT timing_bvo_3,SUM(rdl_10_total_drain) AS rdl_10 FROM actuator_drain GROUP BY MONTH(timing_bvo_3)");
        $val_4 = DB::select("SELECT timing_bvo_4,SUM(rdl_11_total_drain) AS rdl_11 FROM actuator_drain GROUP BY MONTH(timing_bvo_4)");
        $val_5 = DB::select("SELECT timing_bvo_8,SUM(rdl_3_total_drain) AS rdl_3 FROM actuator_drain GROUP BY MONTH(timing_bvo_8)");
        $val_6 = DB::select("SELECT timing_bvo_9,SUM(rdl_4_total_drain) AS rdl_4 FROM actuator_drain GROUP BY MONTH(timing_bvo_9)");
        $val_7 = DB::select("SELECT timing_bvo_10,SUM(rdl_5_total_drain) AS rdl_5 FROM actuator_drain GROUP BY MONTH(timing_bvo_10)");
        // $array_val_1 = json_decode(json_encode($val_1), true);
        // $array_val_2 = json_decode(json_encode($val_2), true);
        return response()->json([
            'val_1'=>$val_1,
            'val_2'=>$val_2,
            'val_3'=>$val_3,
            'val_4'=>$val_4,
            'val_5'=>$val_5,
            'val_6'=>$val_6,
            'val_7'=>$val_7,
          ]);
    }
    public function showDrainReport(Request $req){
        $time = $req->all()[0];
        $startdata = $req->all()[1];
        $enddata = $req->all()[2];
        $date1 = strtotime($startdata);
        $date2 = strtotime($enddata);
        $new_date1 = date('Y-m-d H:i:s', $date1);
        $new_date2 = date('Y-m-d H:i:s', $date2);
        if($time == 1){
            $val_1 = DB::select("SELECT * FROM actuator_drain WHERE (timing_bvo_1 > now() - interval 24 hour) OR (timing_bvo_2 > now() - interval 24 hour) OR (timing_bvo_3 > now() - interval 24 hour) OR (timing_bvo_4 > now() - interval 24 hour) OR (timing_bvo_8 > now() - interval 24 hour) OR (timing_bvo_9 > now() - interval 24 hour) OR (timing_bvo_10 > now() - interval 24 hour)");
        }else if($time == 2){
            $val_1 = DB::select("SELECT * FROM actuator_drain WHERE (timing_bvo_1 >= DATE_SUB(CURDATE(), INTERVAL 14 hour) AND timing_bvo_1 <= DATE_ADD(CURDATE(),INTERVAL 10 hour)) OR (timing_bvo_2 >= DATE_SUB(CURDATE(), INTERVAL 14 hour) AND timing_bvo_2 <= DATE_ADD(CURDATE(),INTERVAL 10 hour)) OR (timing_bvo_3 >= DATE_SUB(CURDATE(), INTERVAL 14 hour) AND timing_bvo_3 <= DATE_ADD(CURDATE(),INTERVAL 10 hour)) OR (timing_bvo_4 >= DATE_SUB(CURDATE(), INTERVAL 14 hour) AND timing_bvo_4 <= DATE_ADD(CURDATE(),INTERVAL 10 hour)) OR (timing_bvo_8 >= DATE_SUB(CURDATE(), INTERVAL 14 hour) AND timing_bvo_8 <= DATE_ADD(CURDATE(),INTERVAL 10 hour)) OR (timing_bvo_9 >= DATE_SUB(CURDATE(), INTERVAL 14 hour) AND timing_bvo_9 <= DATE_ADD(CURDATE(),INTERVAL 10 hour)) OR (timing_bvo_10 >= DATE_SUB(CURDATE(), INTERVAL 14 hour) AND timing_bvo_10 <= DATE_ADD(CURDATE(),INTERVAL 10 hour))");

        }else if($time == 3){
            $val_1 = DB::select("SELECT * FROM actuator_drain WHERE (timing_bvo_1 > DATE_SUB(CURDATE(), INTERVAL 7 day)) OR (timing_bvo_2 > DATE_SUB(CURDATE(), INTERVAL 7 day)) OR (timing_bvo_3 > DATE_SUB(CURDATE(), INTERVAL 7 day)) OR (timing_bvo_4 > DATE_SUB(CURDATE(), INTERVAL 7 day)) OR (timing_bvo_8 > DATE_SUB(CURDATE(), INTERVAL 7 day)) OR (timing_bvo_9 > DATE_SUB(CURDATE(), INTERVAL 7 day)) OR (timing_bvo_10 > DATE_SUB(CURDATE(), INTERVAL 7 day))");
        }else if($time == 4){
            $val_1 = DB::select("SELECT * FROM actuator_drain WHERE (timing_bvo_1 > DATE_SUB(CURDATE(), INTERVAL 1 MONTH)) OR (timing_bvo_2 > DATE_SUB(CURDATE(), INTERVAL 1 MONTH)) OR (timing_bvo_3 > DATE_SUB(CURDATE(), INTERVAL 1 MONTH)) OR (timing_bvo_4 > DATE_SUB(CURDATE(), INTERVAL 1 MONTH)) OR (timing_bvo_8 > DATE_SUB(CURDATE(), INTERVAL 1 MONTH)) OR (timing_bvo_9 > DATE_SUB(CURDATE(), INTERVAL 1 MONTH)) OR (timing_bvo_10 > DATE_SUB(CURDATE(), INTERVAL 1 MONTH))");
        }else if($time == 5){
            $val_1 = DB::select("SELECT * FROM actuator_drain WHERE (timing_bvo_1 BETWEEN '$new_date1' AND '$new_date2') OR (timing_bvo_2 BETWEEN '$new_date1' AND '$new_date2') OR (timing_bvo_3 BETWEEN '$new_date1' AND '$new_date2') OR (timing_bvo_4 BETWEEN '$new_date1' AND '$new_date2') OR (timing_bvo_8 BETWEEN '$new_date1' AND '$new_date2') OR (timing_bvo_9 BETWEEN '$new_date1' AND '$new_date2') OR (timing_bvo_10 BETWEEN '$new_date1' AND '$new_date2') ORDER BY ac_id ASC");
        }
        $new_array = [];
        $j = 0;
        for($i=0; $i<sizeof($val_1); $i++){
            if($val_1[$i]->timing_bvo_1 != null  ){
                // $new_array[$j] =$val_1[$i]->timing_bvo_1;
                // $new_array[$j] =$val_1[$i]->bvo_1_status;
                // $new_array[$j] =$val_1[$i]->rdl_8_vol;
                array_push($new_array, $val_1[$i]->timing_bvo_1);
                array_push($new_array, $val_1[$i]->rdl_8_total_drain);
                $j++;
            }
           
        }
        
        dd($new_array);
        return response()->json([
          'val_1'=>$val_1,
        ]);

    }
    public function ShowCataltst()
    {
        $cataltst = Cataltst_cal::orderBy("id", "DESC")->first();
        $response = [
            'cataltst' => $cataltst,
            'status_code' => 200
        ];
        return response()->json($response);
    }
    public function CataltstCal(Request $req)
    {
        $cataltst = new Cataltst_cal();
        $cataltst->acid_val1 = $req->acid_val1;
        $cataltst->acid_val2 = $req->acid_val2;
        $cataltst->acid_val3 = $req->acid_val3;
        $cataltst->acid_val4 = $req->acid_val4;
        $cataltst->acid_val5 = $req->acid_val5;
        $cataltst->acid_val6 = $req->acid_val6;
        $cataltst->acid_val7 = $req->acid_val7;
        $cataltst->acid_val8 = $req->acid_val8;
        $cataltst->acid_val9 = $req->acid_val9;
        $cataltst->acid_val10 = $req->acid_val10;
        $cataltst->acid_val11 = $req->acid_val11;
        $cataltst->acid_val12 = $req->acid_val12;
        $cataltst->acid_val13 = $req->acid_val13;
        $cataltst->acid_val14 = $req->acid_val14;
        $cataltst->acid_val15 = $req->acid_val15;
        $cataltst->acid_val16 = $req->acid_val16;
        $cataltst->acid_val17 = $req->acid_val17;
        $cataltst->for_1 = $req->for_1;
        $cataltst->for_2 = $req->for_2;
        $cataltst->for_3 = $req->for_3;
        $cataltst->for_4 = $req->for_4;
        $cataltst->for_5 = $req->for_5;
        $cataltst->for_6 = $req->for_6;
        $cataltst->for_7 = $req->for_7;
        $cataltst->for_8 = $req->for_8;
        $cataltst->for_9 = $req->for_9;
        $cataltst->for_10 = $req->for_10;
        $cataltst->for_11 = $req->for_11;
        $cataltst->for_12 = $req->for_12;
        $cataltst->for_13 = $req->for_13;
        $cataltst->for_14 = $req->for_14;
        $cataltst->for_15 = $req->for_15;
        $cataltst->for_16 = $req->for_16;
        $cataltst->for_17 = $req->for_17;
        $cataltst->r1_val1 = $req->r1_val1;
        $cataltst->r1_val2 = $req->r1_val2;
        $cataltst->r1_val3 = $req->r1_val3;
        $cataltst->r1_val4 = $req->r1_val4;
        $cataltst->r1_val5 = $req->r1_val5;
        $cataltst->r1_val6 = $req->r1_val6;
        $cataltst->r1_val7 = $req->r1_val7;
        $cataltst->r1_val8 = $req->r1_val8;
        $cataltst->r1_val9 = $req->r1_val9;
        $cataltst->r1_val10 = $req->r1_val10;
        $cataltst->r1_val11 = $req->r1_val11;
        $cataltst->r1_val12 = $req->r1_val12;
        $cataltst->r1_val13 = $req->r1_val13;
        $cataltst->r1_val14 = $req->r1_val14;
        $cataltst->r1_val15 = $req->r1_val15;
        $cataltst->r1_val16 = $req->r1_val16;
        $cataltst->r1_val17 = $req->r1_val17;
        $cataltst->formula_1 = $req->formula_1;
        $cataltst->formula_2 = $req->formula_2;
        $cataltst->formula_3 = $req->formula_3;
        $cataltst->formula_4 = $req->formula_4;
        $cataltst->formula_5 = $req->formula_5;
        $cataltst->formula_6 = $req->formula_6;
        $cataltst->formula_7 = $req->formula_7;
        $cataltst->formula_8 = $req->formula_8;
        $cataltst->formula_9 = $req->formula_9;
        $cataltst->formula_10 = $req->formula_10;
        $cataltst->formula_11 = $req->formula_11;
        $cataltst->formula_12 = $req->formula_12;
        $cataltst->formula_13 = $req->formula_13;
        $cataltst->formula_14 = $req->formula_14;
        $cataltst->formula_15 = $req->formula_15;
        $cataltst->formula_16 = $req->formula_16;
        $cataltst->formula_17 = $req->formula_17;
        $cataltst->r2_val1 = $req->r2_val1;
        $cataltst->r2_val2 = $req->r2_val2;
        $cataltst->r2_val3 = $req->r2_val3;
        $cataltst->r2_val4 = $req->r2_val4;
        $cataltst->r2_val5 = $req->r2_val5;
        $cataltst->r2_val6 = $req->r2_val6;
        $cataltst->r2_val7 = $req->r2_val7;
        $cataltst->r2_val8 = $req->r2_val8;
        $cataltst->r2_val9 = $req->r2_val9;
        $cataltst->r2_val10 = $req->r2_val10;
        $cataltst->r2_val11 = $req->r2_val11;
        $cataltst->r2_val12 = $req->r2_val12;
        $cataltst->r2_val13 = $req->r2_val13;
        $cataltst->r2_val14 = $req->r2_val14;
        $cataltst->r2_val15 = $req->r2_val15;
        $cataltst->r2_val16 = $req->r2_val16;
        $cataltst->r2_val17 = $req->r2_val17;
        $cataltst->formula3_1 = $req->formula3_1;
        $cataltst->formula3_2 = $req->formula3_2;
        $cataltst->formula3_3 = $req->formula3_3;
        $cataltst->formula3_4 = $req->formula3_4;
        $cataltst->formula3_5 = $req->formula3_5;
        $cataltst->formula3_6 = $req->formula3_6;
        $cataltst->formula3_7 = $req->formula3_7;
        $cataltst->formula3_8 = $req->formula3_8;
        $cataltst->formula3_9 = $req->formula3_9;
        $cataltst->formula3_10 = $req->formula3_10;
        $cataltst->formula3_11 = $req->formula3_11;
        $cataltst->formula3_12 = $req->formula3_12;
        $cataltst->formula3_13 = $req->formula3_13;
        $cataltst->formula3_14 = $req->formula3_14;
        $cataltst->formula3_15 = $req->formula3_15;
        $cataltst->formula3_16 = $req->formula3_16;
        $cataltst->formula3_17 = $req->formula3_17;
        $cataltst->r3_val1 = $req->r3_val1;
        $cataltst->r3_val2 = $req->r3_val2;
        $cataltst->r3_val3 = $req->r3_val3;
        $cataltst->r3_val4 = $req->r3_val4;
        $cataltst->r3_val5 = $req->r3_val5;
        $cataltst->r3_val6 = $req->r3_val6;
        $cataltst->r3_val7 = $req->r3_val7;
        $cataltst->r3_val8 = $req->r3_val8;
        $cataltst->r3_val9 = $req->r3_val9;
        $cataltst->r3_val10 = $req->r3_val10;
        $cataltst->r3_val11 = $req->r3_val11;
        $cataltst->r3_val12 = $req->r3_val12;
        $cataltst->r3_val13 = $req->r3_val13;
        $cataltst->r3_val14 = $req->r3_val14;
        $cataltst->r3_val15 = $req->r3_val15;
        $cataltst->r3_val16 = $req->r3_val16;
        $cataltst->r3_val17 = $req->r3_val17;
        $cataltst->formula4_1 = $req->formula4_1;
        $cataltst->formula4_2 = $req->formula4_2;
        $cataltst->formula4_3 = $req->formula4_3;
        $cataltst->formula4_4 = $req->formula4_4;
        $cataltst->formula4_5 = $req->formula4_5;
        $cataltst->formula4_6 = $req->formula4_6;
        $cataltst->formula4_7 = $req->formula4_7;
        $cataltst->formula4_8 = $req->formula4_8;
        $cataltst->formula4_9 = $req->formula4_9;
        $cataltst->formula4_10 = $req->formula4_10;
        $cataltst->formula4_11 = $req->formula4_11;
        $cataltst->formula4_12 = $req->formula4_12;
        $cataltst->formula4_13 = $req->formula4_13;
        $cataltst->formula4_14 = $req->formula4_14;
        $cataltst->formula4_15 = $req->formula4_15;
        $cataltst->formula4_16 = $req->formula4_16;
        $cataltst->formula4_17 = $req->formula4_17;
        $cataltst->save();
        return response()->json([
            'status_code' => 200,
            'message' => 'Data Saved Successfully'
        ]);
    }
    public function ActuatorReport(Request $req)
    {
        $val_1 = '';
        $val_2 = '';
        $val_3 = '';
        $val_4 = '';
        $val_5 = '';
        $val_6 = '';
        $val_7  = '';
        $val_8  = '';
        $val_9  = '';
        $val_10 = '';
        $val_11 = '';
        $val_12 = '';
        $val_13 = '';
        $val_14 = '';
        $val_15 = '';
        $val_16 = '';

        $interval = $req->all()[1];
        $timing = $req->all()[2];
        $startdata = $req->all()[3];
        $enddata = $req->all()[4];
       
        $date1 = strtotime($startdata);
        $date2 = strtotime($enddata);
        $new_date1 = date('Y-m-d H:i:s', $date1);
        $new_date2 = date('Y-m-d H:i:s', $date2);
        if (sizeof($req->all()[0]) == 1) {
            $val_1 = $req->all()[0][0];
        }
        if (sizeof($req->all()[0]) == 2) {
            $val_1 = $req->all()[0][0];
            $val_2 = $req->all()[0][1];
        }
        if (sizeof($req->all()[0]) == 3) {
            $val_1 = $req->all()[0][0];
            $val_2 = $req->all()[0][1];
            $val_3 = $req->all()[0][2];
        }
        if (sizeof($req->all()[0]) == 4) {
            $val_1 = $req->all()[0][0];
            $val_2 = $req->all()[0][1];
            $val_3 = $req->all()[0][2];
            $val_4 = $req->all()[0][3];
        }
        if (sizeof($req->all()[0]) == 5) {
            $val_1 = $req->all()[0][0];
            $val_2 = $req->all()[0][1];
            $val_3 = $req->all()[0][2];
            $val_4 = $req->all()[0][3];
            $val_5 = $req->all()[0][4];
        }
        if (sizeof($req->all()[0]) == 6) {
            $val_1 = $req->all()[0][0];
            $val_2 = $req->all()[0][1];
            $val_3 = $req->all()[0][2];
            $val_4 = $req->all()[0][3];
            $val_5 = $req->all()[0][4];
            $val_6 = $req->all()[0][5];
        }
        if (sizeof($req->all()[0]) == 7) {
            $val_1 = $req->all()[0][0];
            $val_2 = $req->all()[0][1];
            $val_3 = $req->all()[0][2];
            $val_4 = $req->all()[0][3];
            $val_5 = $req->all()[0][4];
            $val_6 = $req->all()[0][5];
            $val_7 = $req->all()[0][6];
        }
        if (sizeof($req->all()[0]) == 8) {
            $val_1 = $req->all()[0][0];
            $val_2 = $req->all()[0][1];
            $val_3 = $req->all()[0][2];
            $val_4 = $req->all()[0][3];
            $val_5 = $req->all()[0][4];
            $val_6 = $req->all()[0][5];
            $val_7 = $req->all()[0][6];
            $val_8 = $req->all()[0][7];
        }
        if (sizeof($req->all()[0]) == 9) {
            $val_1 = $req->all()[0][0];
            $val_2 = $req->all()[0][1];
            $val_3 = $req->all()[0][2];
            $val_4 = $req->all()[0][3];
            $val_5 = $req->all()[0][4];
            $val_6 = $req->all()[0][5];
            $val_7 = $req->all()[0][6];
            $val_8 = $req->all()[0][7];
            $val_9 = $req->all()[0][8];
        }
        if (sizeof($req->all()[0]) == 10) {
            $val_1 = $req->all()[0][0];
            $val_2 = $req->all()[0][1];
            $val_3 = $req->all()[0][2];
            $val_4 = $req->all()[0][3];
            $val_5 = $req->all()[0][4];
            $val_6 = $req->all()[0][5];
            $val_7 = $req->all()[0][6];
            $val_8 = $req->all()[0][7];
            $val_9 = $req->all()[0][8];
            $val_10 = $req->all()[0][9];
        }
        if (sizeof($req->all()[0]) == 11) {
            $val_1 = $req->all()[0][0];
            $val_2 = $req->all()[0][1];
            $val_3 = $req->all()[0][2];
            $val_4 = $req->all()[0][3];
            $val_5 = $req->all()[0][4];
            $val_6 = $req->all()[0][5];
            $val_7 = $req->all()[0][6];
            $val_8 = $req->all()[0][7];
            $val_9 = $req->all()[0][8];
            $val_10 = $req->all()[0][9];
            $val_11 = $req->all()[0][10];
        }
        if (sizeof($req->all()[0]) == 12) {
            $val_1 = $req->all()[0][0];
            $val_2 = $req->all()[0][1];
            $val_3 = $req->all()[0][2];
            $val_4 = $req->all()[0][3];
            $val_5 = $req->all()[0][4];
            $val_6 = $req->all()[0][5];
            $val_7 = $req->all()[0][6];
            $val_8 = $req->all()[0][7];
            $val_9 = $req->all()[0][8];
            $val_10 = $req->all()[0][9];
            $val_11 = $req->all()[0][10];
            $val_12 = $req->all()[0][11];
        }
        if (sizeof($req->all()[0]) == 13) {
            $val_1 = $req->all()[0][0];
            $val_2 = $req->all()[0][1];
            $val_3 = $req->all()[0][2];
            $val_4 = $req->all()[0][3];
            $val_5 = $req->all()[0][4];
            $val_6 = $req->all()[0][5];
            $val_7 = $req->all()[0][6];
            $val_8 = $req->all()[0][7];
            $val_9 = $req->all()[0][8];
            $val_10 = $req->all()[0][9];
            $val_11 = $req->all()[0][10];
            $val_12 = $req->all()[0][11];
            $val_13 = $req->all()[0][12];
        }
        if (sizeof($req->all()[0]) == 14) {
            $val_1 = $req->all()[0][0];
            $val_2 = $req->all()[0][1];
            $val_3 = $req->all()[0][2];
            $val_4 = $req->all()[0][3];
            $val_5 = $req->all()[0][4];
            $val_6 = $req->all()[0][5];
            $val_7 = $req->all()[0][6];
            $val_8 = $req->all()[0][7];
            $val_9 = $req->all()[0][8];
            $val_10 = $req->all()[0][9];
            $val_11 = $req->all()[0][10];
            $val_12 = $req->all()[0][11];
            $val_13 = $req->all()[0][12];
            $val_14 = $req->all()[0][13];
        }
        if (sizeof($req->all()[0]) == 15) {
            $val_1 = $req->all()[0][0];
            $val_2 = $req->all()[0][1];
            $val_3 = $req->all()[0][2];
            $val_4 = $req->all()[0][3];
            $val_5 = $req->all()[0][4];
            $val_6 = $req->all()[0][5];
            $val_7 = $req->all()[0][6];
            $val_8 = $req->all()[0][7];
            $val_9 = $req->all()[0][8];
            $val_10 = $req->all()[0][9];
            $val_11 = $req->all()[0][10];
            $val_12 = $req->all()[0][11];
            $val_13 = $req->all()[0][12];
            $val_14 = $req->all()[0][13];
            $val_15 = $req->all()[0][14];
        }
        if (sizeof($req->all()[0]) == 16) {
            $val_1 = $req->all()[0][0];
            $val_2 = $req->all()[0][1];
            $val_3 = $req->all()[0][2];
            $val_4 = $req->all()[0][3];
            $val_5 = $req->all()[0][4];
            $val_6 = $req->all()[0][5];
            $val_7 = $req->all()[0][6];
            $val_8 = $req->all()[0][7];
            $val_9 = $req->all()[0][8];
            $val_10 = $req->all()[0][9];
            $val_11 = $req->all()[0][10];
            $val_12 = $req->all()[0][11];
            $val_13 = $req->all()[0][12];
            $val_14 = $req->all()[0][13];
            $val_15 = $req->all()[0][14];
            $val_16 = $req->all()[0][15];
        }
        $today_date = date("Y-m-d", strtotime("today"));
        $yesterday_date = date("Y-m-d", strtotime("yesterday"));
        $month_date = date("Y-m-d", strtotime("-1 month"));
        $week_date = date("Y-m-d", strtotime("-1 week"));
        $sub_date = "10:00";
        $sub_date2 = "10:00";
        $con_date = $today_date . " " . $sub_date;
        $con_date2 = $week_date . " " . $sub_date;
        $con_date3 = $month_date . " " . $sub_date;
        $con_date4 = $yesterday_date . " " . $sub_date2;

            if ($timing == '1') {
                if (sizeof($req->all()[0]) == 1) {
                    $val_1 = DB::select("SELECT timing,rdl25_volume, rdl25_mass, stfm1_flow_tot, stfm1_temp, stfm1_pressure, stfm2_flow_tot, stfm2_temp, stfm2_pressure, $val_1 FROM dt_aio WHERE timing > now() - interval 24 hour AND dt_id MOD '$interval' = 0");
                } else if (sizeof($req->all()[0]) == 2) {
                    $val_1 = DB::select("SELECT timing,rdl25_volume, rdl25_mass, stfm1_flow_tot, stfm1_temp, stfm1_pressure, stfm2_flow_tot, stfm2_temp, stfm2_pressure, $val_1, $val_2 FROM dt_aio WHERE timing > now() - interval 24 hour AND dt_id MOD '$interval' = 0");
                } else if (sizeof($req->all()[0]) == 3) {
                    $val_1 = DB::select("SELECT timing,rdl25_volume, rdl25_mass, stfm1_flow_tot, stfm1_temp, stfm1_pressure, stfm2_flow_tot, stfm2_temp, stfm2_pressure, $val_1, $val_2,$val_3 FROM dt_aio WHERE timing > now() - interval 24 hour AND dt_id MOD '$interval' = 0");
                } else if (sizeof($req->all()[0]) == 4) {
                    $val_1 = DB::select("SELECT timing,rdl25_volume, rdl25_mass, stfm1_flow_tot, stfm1_temp, stfm1_pressure, stfm2_flow_tot, stfm2_temp, stfm2_pressure, $val_1, $val_2,$val_3,$val_4 FROM dt_aio WHERE timing > now() - interval 24 hour AND dt_id MOD '$interval' = 0");
                } else if (sizeof($req->all()[0]) == 5) {
                    $val_1 = DB::select("SELECT timing,rdl25_volume, rdl25_mass, stfm1_flow_tot, stfm1_temp, stfm1_pressure, stfm2_flow_tot, stfm2_temp, stfm2_pressure, $val_1, $val_2,$val_3,$val_4,$val_5 FROM dt_aio WHERE timing > now() - interval 24 hour AND dt_id MOD '$interval' = 0");
                } else if (sizeof($req->all()[0]) == 6) {
                    $val_1 = DB::select("SELECT timing,rdl25_volume, rdl25_mass, stfm1_flow_tot, stfm1_temp, stfm1_pressure, stfm2_flow_tot, stfm2_temp, stfm2_pressure, $val_1, $val_2,$val_3,$val_4,$val_5,$val_6 FROM dt_aio WHERE timing > now() - interval 24 hour AND dt_id MOD '$interval' = 0");
                } else if (sizeof($req->all()[0]) == 7) {
                    $val_1 = DB::select("SELECT timing,rdl25_volume, rdl25_mass, stfm1_flow_tot, stfm1_temp, stfm1_pressure, stfm2_flow_tot, stfm2_temp, stfm2_pressure, $val_1, $val_2,$val_3,$val_4,$val_5,$val_6,$val_7 FROM dt_aio WHERE timing > now() - interval 24 hour AND dt_id MOD '$interval' = 0");
                } else if (sizeof($req->all()[0]) == 8) {
                    $val_1 = DB::select("SELECT timing,rdl25_volume, rdl25_mass, stfm1_flow_tot, stfm1_temp, stfm1_pressure, stfm2_flow_tot, stfm2_temp, stfm2_pressure, $val_1, $val_2,$val_3,$val_4,$val_5,$val_6,$val_7,$val_8 FROM dt_aio WHERE timing > now() - interval 24 hour AND dt_id MOD '$interval' = 0");
                } else if (sizeof($req->all()[0]) == 9) {
                    $val_1 = DB::select("SELECT timing,rdl25_volume, rdl25_mass, stfm1_flow_tot, stfm1_temp, stfm1_pressure, stfm2_flow_tot, stfm2_temp, stfm2_pressure, $val_1, $val_2,$val_3,$val_4,$val_5,$val_6,$val_7,$val_8,$val_9 FROM dt_aio WHERE timing > now() - interval 24 hour AND dt_id MOD '$interval' = 0");
                } else if (sizeof($req->all()[0]) == 10) {
                    $val_1 = DB::select("SELECT timing,rdl25_volume, rdl25_mass, stfm1_flow_tot, stfm1_temp, stfm1_pressure, stfm2_flow_tot, stfm2_temp, stfm2_pressure, $val_1, $val_2,$val_3,$val_4,$val_5,$val_6,$val_7,$val_8,$val_9,$val_10 FROM dt_aio WHERE timing > now() - interval 24 hour AND dt_id MOD '$interval' = 0");
                } else if (sizeof($req->all()[0]) == 11) {
                    $val_1 = DB::select("SELECT timing,rdl25_volume, rdl25_mass, stfm1_flow_tot, stfm1_temp, stfm1_pressure, stfm2_flow_tot, stfm2_temp, stfm2_pressure, $val_1, $val_2,$val_3,$val_4,$val_5,$val_6,$val_7,$val_8,$val_9,$val_10,$val_11 FROM dt_aio WHERE timing > now() - interval 24 hour AND dt_id MOD '$interval' = 0");
                } else if (sizeof($req->all()[0]) == 12) {
                    $val_1 = DB::select("SELECT timing,rdl25_volume, rdl25_mass, stfm1_flow_tot, stfm1_temp, stfm1_pressure, stfm2_flow_tot, stfm2_temp, stfm2_pressure, $val_1, $val_2,$val_3,$val_4,$val_5,$val_6,$val_7,$val_8,$val_9,$val_10,$val_11,$val_12 FROM dt_aio WHERE timing > now() - interval 24 hour AND dt_id MOD '$interval' = 0");
                } else if (sizeof($req->all()[0]) == 13) {
                    $val_1 = DB::select("SELECT timing,rdl25_volume, rdl25_mass, stfm1_flow_tot, stfm1_temp, stfm1_pressure, stfm2_flow_tot, stfm2_temp, stfm2_pressure, $val_1, $val_2,$val_3,$val_4,$val_5,$val_6,$val_7,$val_8,$val_9,$val_10,$val_11,$val_12,$val_13 FROM dt_aio WHERE timing > now() - interval 24 hour AND dt_id MOD '$interval' = 0");
                } else if (sizeof($req->all()[0]) == 14) {
                    $val_1 = DB::select("SELECT timing,rdl25_volume, rdl25_mass, stfm1_flow_tot, stfm1_temp, stfm1_pressure, stfm2_flow_tot, stfm2_temp, stfm2_pressure, $val_1, $val_2,$val_3,$val_4,$val_5,$val_6,$val_7,$val_8,$val_9,$val_10,$val_11,$val_12,$val_13,$val_14 FROM dt_aio WHERE timing > now() - interval 24 hour AND dt_id MOD '$interval' = 0");
                } else if (sizeof($req->all()[0]) == 15) {
                    $val_1 = DB::select("SELECT timing,rdl25_volume, rdl25_mass, stfm1_flow_tot, stfm1_temp, stfm1_pressure, stfm2_flow_tot, stfm2_temp, stfm2_pressure, $val_1, $val_2,$val_3,$val_4,$val_5,$val_6,$val_7,$val_8,$val_9,$val_10,$val_11,$val_12,$val_13,$val_14,$val_15 FROM dt_aio WHERE timing > now() - interval 24 hour AND dt_id MOD '$interval' = 0");
                } else if (sizeof($req->all()[0]) == 16) {
                    $val_1 = DB::select("SELECT timing,rdl25_volume, rdl25_mass, stfm1_flow_tot, stfm1_temp, stfm1_pressure, stfm2_flow_tot, stfm2_temp, stfm2_pressure, $val_1, $val_2,$val_3,$val_4,$val_5,$val_6,$val_7,$val_8,$val_9,$val_10,$val_11,$val_12,$val_13,$val_14,$val_15,$val_16 FROM dt_aio WHERE timing > now() - interval 24 hour AND dt_id MOD '$interval' = 0");
                }
            } elseif ($timing == '2') {
                if (sizeof($req->all()[0]) == 1) {
                    $val_1 = DB::select("SELECT timing,rdl25_volume, rdl25_mass, stfm1_flow_tot, stfm1_temp, stfm1_pressure, stfm2_flow_tot, stfm2_temp, stfm2_pressure, $val_1 FROM dt_aio WHERE timing >= DATE_SUB(CURDATE(), INTERVAL 14 hour) AND timing <= DATE_ADD(CURDATE(),INTERVAL 10 hour) AND dt_id MOD '$interval' = 0");
                } else if (sizeof($req->all()[0]) == 2) {
                    $val_1 = DB::select("SELECT timing,rdl25_volume, rdl25_mass, stfm1_flow_tot, stfm1_temp, stfm1_pressure, stfm2_flow_tot, stfm2_temp, stfm2_pressure, $val_1, $val_2 FROM dt_aio WHERE timing >= DATE_SUB(CURDATE(), INTERVAL 14 hour) AND timing <= DATE_ADD(CURDATE(),INTERVAL 10 hour) AND dt_id MOD '$interval' = 0");
                } else if (sizeof($req->all()[0]) == 3) {
                    $val_1 = DB::select("SELECT timing,rdl25_volume, rdl25_mass, stfm1_flow_tot, stfm1_temp, stfm1_pressure, stfm2_flow_tot, stfm2_temp, stfm2_pressure, $val_1, $val_2,$val_3 FROM dt_aio WHERE timing >= DATE_SUB(CURDATE(), INTERVAL 14 hour) AND timing <= DATE_ADD(CURDATE(),INTERVAL 10 hour) AND dt_id MOD '$interval' = 0");
                } else if (sizeof($req->all()[0]) == 4) {
                    $val_1 = DB::select("SELECT timing,rdl25_volume, rdl25_mass, stfm1_flow_tot, stfm1_temp, stfm1_pressure, stfm2_flow_tot, stfm2_temp, stfm2_pressure, $val_1, $val_2,$val_3,$val_4 FROM dt_aio WHERE timing >= DATE_SUB(CURDATE(), INTERVAL 14 hour) AND timing <= DATE_ADD(CURDATE(),INTERVAL 10 hour) AND dt_id MOD '$interval' = 0");
                } else if (sizeof($req->all()[0]) == 5) {
                    $val_1 = DB::select("SELECT timing,rdl25_volume, rdl25_mass, stfm1_flow_tot, stfm1_temp, stfm1_pressure, stfm2_flow_tot, stfm2_temp, stfm2_pressure, $val_1, $val_2,$val_3,$val_4,$val_5 FROM dt_aio WHERE timing >= DATE_SUB(CURDATE(), INTERVAL 14 hour) AND timing <= DATE_ADD(CURDATE(),INTERVAL 10 hour) AND dt_id MOD '$interval' = 0");
                } else if (sizeof($req->all()[0]) == 6) {
                    $val_1 = DB::select("SELECT timing,rdl25_volume, rdl25_mass, stfm1_flow_tot, stfm1_temp, stfm1_pressure, stfm2_flow_tot, stfm2_temp, stfm2_pressure, $val_1, $val_2,$val_3,$val_4,$val_5,$val_6 FROM dt_aio WHERE timing >= DATE_SUB(CURDATE(), INTERVAL 14 hour) AND timing <= DATE_ADD(CURDATE(),INTERVAL 10 hour) AND dt_id MOD '$interval' = 0");
                } else if (sizeof($req->all()[0]) == 7) {
                    $val_1 = DB::select("SELECT timing,rdl25_volume, rdl25_mass, stfm1_flow_tot, stfm1_temp, stfm1_pressure, stfm2_flow_tot, stfm2_temp, stfm2_pressure, $val_1, $val_2,$val_3,$val_4,$val_5,$val_6,$val_7 FROM dt_aio WHERE timing >= DATE_SUB(CURDATE(), INTERVAL 14 hour) AND timing <= DATE_ADD(CURDATE(),INTERVAL 10 hour) AND dt_id MOD '$interval' = 0");
                } else if (sizeof($req->all()[0]) == 8) {
                    $val_1 = DB::select("SELECT timing,rdl25_volume, rdl25_mass, stfm1_flow_tot, stfm1_temp, stfm1_pressure, stfm2_flow_tot, stfm2_temp, stfm2_pressure, $val_1, $val_2,$val_3,$val_4,$val_5,$val_6,$val_7,$val_8 FROM dt_aio WHERE timing >= DATE_SUB(CURDATE(), INTERVAL 14 hour) AND timing <= DATE_ADD(CURDATE(),INTERVAL 10 hour) AND dt_id MOD '$interval' = 0");
                } else if (sizeof($req->all()[0]) == 9) {
                    $val_1 = DB::select("SELECT timing,rdl25_volume, rdl25_mass, stfm1_flow_tot, stfm1_temp, stfm1_pressure, stfm2_flow_tot, stfm2_temp, stfm2_pressure, $val_1, $val_2,$val_3,$val_4,$val_5,$val_6,$val_7,$val_8,$val_9 FROM dt_aio WHERE timing >= DATE_SUB(CURDATE(), INTERVAL 14 hour) AND timing <= DATE_ADD(CURDATE(),INTERVAL 10 hour) AND dt_id MOD '$interval' = 0");
                } else if (sizeof($req->all()[0]) == 10) {
                    $val_1 = DB::select("SELECT timing,rdl25_volume, rdl25_mass, stfm1_flow_tot, stfm1_temp, stfm1_pressure, stfm2_flow_tot, stfm2_temp, stfm2_pressure, $val_1, $val_2,$val_3,$val_4,$val_5,$val_6,$val_7,$val_8,$val_9,$val_10 FROM dt_aio WHERE timing >= DATE_SUB(CURDATE(), INTERVAL 14 hour) AND timing <= DATE_ADD(CURDATE(),INTERVAL 10 hour) AND dt_id MOD '$interval' = 0");
                } else if (sizeof($req->all()[0]) == 11) {
                    $val_1 = DB::select("SELECT timing,rdl25_volume, rdl25_mass, stfm1_flow_tot, stfm1_temp, stfm1_pressure, stfm2_flow_tot, stfm2_temp, stfm2_pressure, $val_1, $val_2,$val_3,$val_4,$val_5,$val_6,$val_7,$val_8,$val_9,$val_10,$val_11 FROM dt_aio WHERE timing >= DATE_SUB(CURDATE(), INTERVAL 14 hour) AND timing <= DATE_ADD(CURDATE(),INTERVAL 10 hour) AND dt_id MOD '$interval' = 0");
                } else if (sizeof($req->all()[0]) == 12) {
                    $val_1 = DB::select("SELECT timing,rdl25_volume, rdl25_mass, stfm1_flow_tot, stfm1_temp, stfm1_pressure, stfm2_flow_tot, stfm2_temp, stfm2_pressure, $val_1, $val_2,$val_3,$val_4,$val_5,$val_6,$val_7,$val_8,$val_9,$val_10,$val_11,$val_12 FROM dt_aio WHERE timing >= DATE_SUB(CURDATE(), INTERVAL 14 hour) AND timing <= DATE_ADD(CURDATE(),INTERVAL 10 hour) AND dt_id MOD '$interval' = 0");
                } else if (sizeof($req->all()[0]) == 13) {
                    $val_1 = DB::select("SELECT timing,rdl25_volume, rdl25_mass, stfm1_flow_tot, stfm1_temp, stfm1_pressure, stfm2_flow_tot, stfm2_temp, stfm2_pressure, $val_1, $val_2,$val_3,$val_4,$val_5,$val_6,$val_7,$val_8,$val_9,$val_10,$val_11,$val_12,$val_13 FROM dt_aio WHERE timing >= DATE_SUB(CURDATE(), INTERVAL 14 hour) AND timing <= DATE_ADD(CURDATE(),INTERVAL 10 hour) AND dt_id MOD '$interval' = 0");
                } else if (sizeof($req->all()[0]) == 14) {
                    $val_1 = DB::select("SELECT timing,rdl25_volume, rdl25_mass, stfm1_flow_tot, stfm1_temp, stfm1_pressure, stfm2_flow_tot, stfm2_temp, stfm2_pressure, $val_1, $val_2,$val_3,$val_4,$val_5,$val_6,$val_7,$val_8,$val_9,$val_10,$val_11,$val_12,$val_13,$val_14 FROM dt_aio WHERE timing >= DATE_SUB(CURDATE(), INTERVAL 14 hour) AND timing <= DATE_ADD(CURDATE(),INTERVAL 10 hour) AND dt_id MOD '$interval' = 0");
                } else if (sizeof($req->all()[0]) == 15) {
                    $val_1 = DB::select("SELECT timing,rdl25_volume, rdl25_mass, stfm1_flow_tot, stfm1_temp, stfm1_pressure, stfm2_flow_tot, stfm2_temp, stfm2_pressure, $val_1, $val_2,$val_3,$val_4,$val_5,$val_6,$val_7,$val_8,$val_9,$val_10,$val_11,$val_12,$val_13,$val_14,$val_15 FROM dt_aio WHERE timing >= DATE_SUB(CURDATE(), INTERVAL 14 hour) AND timing <= DATE_ADD(CURDATE(),INTERVAL 10 hour) AND dt_id MOD '$interval' = 0");
                } else if (sizeof($req->all()[0]) == 16) {
                    $val_1 = DB::select("SELECT timing,rdl25_volume, rdl25_mass, stfm1_flow_tot, stfm1_temp, stfm1_pressure, stfm2_flow_tot, stfm2_temp, stfm2_pressure, $val_1, $val_2,$val_3,$val_4,$val_5,$val_6,$val_7,$val_8,$val_9,$val_10,$val_11,$val_12,$val_13,$val_14,$val_15,$val_16 FROM dt_aio WHERE timing >= DATE_SUB(CURDATE(), INTERVAL 14 hour) AND timing <= DATE_ADD(CURDATE(),INTERVAL 10 hour) AND dt_id MOD '$interval' = 0");
                }
            } elseif ($timing == '3') {
                if (sizeof($req->all()[0]) == 1) {
                    $val_1 = DB::select("SELECT timing,rdl25_volume, rdl25_mass, stfm1_flow_tot, stfm1_temp, stfm1_pressure, stfm2_flow_tot, stfm2_temp, stfm2_pressure, $val_1 FROM dt_aio WHERE timing BETWEEN '$con_date2' AND '$con_date' AND dt_id MOD '$interval' = 0 ORDER BY dt_id ASC");
                } else if (sizeof($req->all()[0]) == 2) {
                    $val_1 = DB::select("SELECT timing,rdl25_volume, rdl25_mass, stfm1_flow_tot, stfm1_temp, stfm1_pressure, stfm2_flow_tot, stfm2_temp, stfm2_pressure, $val_1, $val_2 FROM dt_aio WHERE timing BETWEEN '$con_date2' AND '$con_date' AND dt_id MOD '$interval' = 0 ORDER BY dt_id ASC");
                } else if (sizeof($req->all()[0]) == 3) {
                    $val_1 = DB::select("SELECT timing,rdl25_volume, rdl25_mass, stfm1_flow_tot, stfm1_temp, stfm1_pressure, stfm2_flow_tot, stfm2_temp, stfm2_pressure, $val_1, $val_2,$val_3 FROM dt_aio WHERE timing BETWEEN '$con_date2' AND '$con_date' AND dt_id MOD '$interval' = 0 ORDER BY dt_id ASC");
                } else if (sizeof($req->all()[0]) == 4) {
                    $val_1 = DB::select("SELECT timing,rdl25_volume, rdl25_mass, stfm1_flow_tot, stfm1_temp, stfm1_pressure, stfm2_flow_tot, stfm2_temp, stfm2_pressure, $val_1, $val_2,$val_3,$val_4 FROM dt_aio WHERE timing BETWEEN '$con_date2' AND '$con_date' AND dt_id MOD '$interval' = 0 ORDER BY dt_id ASC");
                } else if (sizeof($req->all()[0]) == 5) {
                    $val_1 = DB::select("SELECT timing,rdl25_volume, rdl25_mass, stfm1_flow_tot, stfm1_temp, stfm1_pressure, stfm2_flow_tot, stfm2_temp, stfm2_pressure, $val_1, $val_2,$val_3,$val_4,$val_5 FROM dt_aio WHERE timing BETWEEN '$con_date2' AND '$con_date' AND dt_id MOD '$interval' = 0 ORDER BY dt_id ASC");
                } else if (sizeof($req->all()[0]) == 6) {
                    $val_1 = DB::select("SELECT timing,rdl25_volume, rdl25_mass, stfm1_flow_tot, stfm1_temp, stfm1_pressure, stfm2_flow_tot, stfm2_temp, stfm2_pressure, $val_1, $val_2,$val_3,$val_4,$val_5,$val_6 FROM dt_aio WHERE timing BETWEEN '$con_date2' AND '$con_date' AND dt_id MOD '$interval' = 0 ORDER BY dt_id ASC");
                } else if (sizeof($req->all()[0]) == 7) {
                    $val_1 = DB::select("SELECT timing,rdl25_volume, rdl25_mass, stfm1_flow_tot, stfm1_temp, stfm1_pressure, stfm2_flow_tot, stfm2_temp, stfm2_pressure, $val_1, $val_2,$val_3,$val_4,$val_5,$val_6,$val_7 FROM dt_aio WHERE timing BETWEEN '$con_date2' AND '$con_date' AND dt_id MOD '$interval' = 0 ORDER BY dt_id ASC");
                } else if (sizeof($req->all()[0]) == 8) {
                    $val_1 = DB::select("SELECT timing,rdl25_volume, rdl25_mass, stfm1_flow_tot, stfm1_temp, stfm1_pressure, stfm2_flow_tot, stfm2_temp, stfm2_pressure, $val_1, $val_2,$val_3,$val_4,$val_5,$val_6,$val_7,$val_8 FROM dt_aio WHERE timing BETWEEN '$con_date2' AND '$con_date' AND dt_id MOD '$interval' = 0 ORDER BY dt_id ASC");
                } else if (sizeof($req->all()[0]) == 9) {
                    $val_1 = DB::select("SELECT timing,rdl25_volume, rdl25_mass, stfm1_flow_tot, stfm1_temp, stfm1_pressure, stfm2_flow_tot, stfm2_temp, stfm2_pressure, $val_1, $val_2,$val_3,$val_4,$val_5,$val_6,$val_7,$val_8,$val_9 FROM dt_aio WHERE timing BETWEEN '$con_date2' AND '$con_date' AND dt_id MOD '$interval' = 0 ORDER BY dt_id ASC");
                } else if (sizeof($req->all()[0]) == 10) {
                    $val_1 = DB::select("SELECT timing,rdl25_volume, rdl25_mass, stfm1_flow_tot, stfm1_temp, stfm1_pressure, stfm2_flow_tot, stfm2_temp, stfm2_pressure, $val_1, $val_2,$val_3,$val_4,$val_5,$val_6,$val_7,$val_8,$val_9,$val_10 FROM dt_aio WHERE timing BETWEEN '$con_date2' AND '$con_date' AND dt_id MOD '$interval' = 0 ORDER BY dt_id ASC");
                } else if (sizeof($req->all()[0]) == 11) {
                    $val_1 = DB::select("SELECT timing,rdl25_volume, rdl25_mass, stfm1_flow_tot, stfm1_temp, stfm1_pressure, stfm2_flow_tot, stfm2_temp, stfm2_pressure, $val_1, $val_2,$val_3,$val_4,$val_5,$val_6,$val_7,$val_8,$val_9,$val_10,$val_11 FROM dt_aio WHERE timing BETWEEN '$con_date2' AND '$con_date' AND dt_id MOD '$interval' = 0 ORDER BY dt_id ASC");
                } else if (sizeof($req->all()[0]) == 12) {
                    $val_1 = DB::select("SELECT timing,rdl25_volume, rdl25_mass, stfm1_flow_tot, stfm1_temp, stfm1_pressure, stfm2_flow_tot, stfm2_temp, stfm2_pressure, $val_1, $val_2,$val_3,$val_4,$val_5,$val_6,$val_7,$val_8,$val_9,$val_10,$val_11,$val_12 FROM dt_aio WHERE timing BETWEEN '$con_date2' AND '$con_date' AND dt_id MOD '$interval' = 0 ORDER BY dt_id ASC");
                } else if (sizeof($req->all()[0]) == 13) {
                    $val_1 = DB::select("SELECT timing,rdl25_volume, rdl25_mass, stfm1_flow_tot, stfm1_temp, stfm1_pressure, stfm2_flow_tot, stfm2_temp, stfm2_pressure, $val_1, $val_2,$val_3,$val_4,$val_5,$val_6,$val_7,$val_8,$val_9,$val_10,$val_11,$val_12,$val_13 FROM dt_aio WHERE timing BETWEEN '$con_date2' AND '$con_date' AND dt_id MOD '$interval' = 0 ORDER BY dt_id ASC");
                } else if (sizeof($req->all()[0]) == 14) {
                    $val_1 = DB::select("SELECT timing,rdl25_volume, rdl25_mass, stfm1_flow_tot, stfm1_temp, stfm1_pressure, stfm2_flow_tot, stfm2_temp, stfm2_pressure, $val_1, $val_2,$val_3,$val_4,$val_5,$val_6,$val_7,$val_8,$val_9,$val_10,$val_11,$val_12,$val_13,$val_14 FROM dt_aio WHERE timing BETWEEN '$con_date2' AND '$con_date' AND dt_id MOD '$interval' = 0 ORDER BY dt_id ASC");
                } else if (sizeof($req->all()[0]) == 15) {
                    $val_1 = DB::select("SELECT timing,rdl25_volume, rdl25_mass, stfm1_flow_tot, stfm1_temp, stfm1_pressure, stfm2_flow_tot, stfm2_temp, stfm2_pressure, $val_1, $val_2,$val_3,$val_4,$val_5,$val_6,$val_7,$val_8,$val_9,$val_10,$val_11,$val_12,$val_13,$val_14,$val_15 FROM dt_aio WHERE timing BETWEEN '$con_date2' AND '$con_date' AND dt_id MOD '$interval' = 0 ORDER BY dt_id ASC");
                } else if (sizeof($req->all()[0]) == 16) {
                    $val_1 = DB::select("SELECT timing,rdl25_volume, rdl25_mass, stfm1_flow_tot, stfm1_temp, stfm1_pressure, stfm2_flow_tot, stfm2_temp, stfm2_pressure, $val_1, $val_2,$val_3,$val_4,$val_5,$val_6,$val_7,$val_8,$val_9,$val_10,$val_11,$val_12,$val_13,$val_14,$val_15,$val_16 FROM dt_aio WHERE timing BETWEEN '$con_date2' AND '$con_date' AND dt_id MOD '$interval' = 0 ORDER BY dt_id ASC");
                }
            } elseif ($timing == '4') {
                if (sizeof($req->all()[0]) == 1) {
                    $val_1 = DB::select("SELECT timing,rdl25_volume, rdl25_mass, stfm1_flow_tot, stfm1_temp, stfm1_pressure, stfm2_flow_tot, stfm2_temp, stfm2_pressure, $val_1 FROM dt_aio WHERE timing BETWEEN '$con_date3' AND '$con_date' AND dt_id MOD '$interval' = 0 ORDER BY dt_id ASC");
                } else if (sizeof($req->all()[0]) == 2) {
                    $val_1 = DB::select("SELECT timing,rdl25_volume, rdl25_mass, stfm1_flow_tot, stfm1_temp, stfm1_pressure, stfm2_flow_tot, stfm2_temp, stfm2_pressure, $val_1, $val_2 FROM dt_aio WHERE timing BETWEEN '$con_date3' AND '$con_date' AND dt_id MOD '$interval' = 0 ORDER BY dt_id ASC");
                } else if (sizeof($req->all()[0]) == 3) {
                    $val_1 = DB::select("SELECT timing,rdl25_volume, rdl25_mass, stfm1_flow_tot, stfm1_temp, stfm1_pressure, stfm2_flow_tot, stfm2_temp, stfm2_pressure, $val_1, $val_2,$val_3 FROM dt_aio WHERE timing BETWEEN '$con_date3' AND '$con_date' AND dt_id MOD '$interval' = 0 ORDER BY dt_id ASC");
                } else if (sizeof($req->all()[0]) == 4) {
                    $val_1 = DB::select("SELECT timing,rdl25_volume, rdl25_mass, stfm1_flow_tot, stfm1_temp, stfm1_pressure, stfm2_flow_tot, stfm2_temp, stfm2_pressure, $val_1, $val_2,$val_3,$val_4 FROM dt_aio WHERE timing BETWEEN '$con_date3' AND '$con_date' AND dt_id MOD '$interval' = 0 ORDER BY dt_id ASC");
                } else if (sizeof($req->all()[0]) == 5) {
                    $val_1 = DB::select("SELECT timing,rdl25_volume, rdl25_mass, stfm1_flow_tot, stfm1_temp, stfm1_pressure, stfm2_flow_tot, stfm2_temp, stfm2_pressure, $val_1, $val_2,$val_3,$val_4,$val_5 FROM dt_aio WHERE timing BETWEEN '$con_date3' AND '$con_date' AND dt_id MOD '$interval' = 0 ORDER BY dt_id ASC");
                } else if (sizeof($req->all()[0]) == 6) {
                    $val_1 = DB::select("SELECT timing,rdl25_volume, rdl25_mass, stfm1_flow_tot, stfm1_temp, stfm1_pressure, stfm2_flow_tot, stfm2_temp, stfm2_pressure, $val_1, $val_2,$val_3,$val_4,$val_5,$val_6 FROM dt_aio WHERE timing BETWEEN '$con_date3' AND '$con_date' AND dt_id MOD '$interval' = 0 ORDER BY dt_id ASC");
                } else if (sizeof($req->all()[0]) == 7) {
                    $val_1 = DB::select("SELECT timing,rdl25_volume, rdl25_mass, stfm1_flow_tot, stfm1_temp, stfm1_pressure, stfm2_flow_tot, stfm2_temp, stfm2_pressure, $val_1, $val_2,$val_3,$val_4,$val_5,$val_6,$val_7 FROM dt_aio WHERE timing BETWEEN '$con_date3' AND '$con_date' AND dt_id MOD '$interval' = 0 ORDER BY dt_id ASC");
                } else if (sizeof($req->all()[0]) == 8) {
                    $val_1 = DB::select("SELECT timing,rdl25_volume, rdl25_mass, stfm1_flow_tot, stfm1_temp, stfm1_pressure, stfm2_flow_tot, stfm2_temp, stfm2_pressure, $val_1, $val_2,$val_3,$val_4,$val_5,$val_6,$val_7,$val_8 FROM dt_aio WHERE timing BETWEEN '$con_date3' AND '$con_date' AND dt_id MOD '$interval' = 0 ORDER BY dt_id ASC");
                } else if (sizeof($req->all()[0]) == 9) {
                    $val_1 = DB::select("SELECT timing,rdl25_volume, rdl25_mass, stfm1_flow_tot, stfm1_temp, stfm1_pressure, stfm2_flow_tot, stfm2_temp, stfm2_pressure, $val_1, $val_2,$val_3,$val_4,$val_5,$val_6,$val_7,$val_8,$val_9 FROM dt_aio WHERE timing BETWEEN '$con_date3' AND '$con_date' AND dt_id MOD '$interval' = 0 ORDER BY dt_id ASC");
                } else if (sizeof($req->all()[0]) == 10) {
                    $val_1 = DB::select("SELECT timing,rdl25_volume, rdl25_mass, stfm1_flow_tot, stfm1_temp, stfm1_pressure, stfm2_flow_tot, stfm2_temp, stfm2_pressure, $val_1, $val_2,$val_3,$val_4,$val_5,$val_6,$val_7,$val_8,$val_9,$val_10 FROM dt_aio WHERE timing BETWEEN '$con_date3' AND '$con_date' AND dt_id MOD '$interval' = 0 ORDER BY dt_id ASC");
                } else if (sizeof($req->all()[0]) == 11) {
                    $val_1 = DB::select("SELECT timing,rdl25_volume, rdl25_mass, stfm1_flow_tot, stfm1_temp, stfm1_pressure, stfm2_flow_tot, stfm2_temp, stfm2_pressure, $val_1, $val_2,$val_3,$val_4,$val_5,$val_6,$val_7,$val_8,$val_9,$val_10,$val_11 FROM dt_aio WHERE timing BETWEEN '$con_date3' AND '$con_date' AND dt_id MOD '$interval' = 0 ORDER BY dt_id ASC");
                } else if (sizeof($req->all()[0]) == 12) {
                    $val_1 = DB::select("SELECT timing,rdl25_volume, rdl25_mass, stfm1_flow_tot, stfm1_temp, stfm1_pressure, stfm2_flow_tot, stfm2_temp, stfm2_pressure, $val_1, $val_2,$val_3,$val_4,$val_5,$val_6,$val_7,$val_8,$val_9,$val_10,$val_11,$val_12 FROM dt_aio WHERE timing BETWEEN '$con_date3' AND '$con_date' AND dt_id MOD '$interval' = 0 ORDER BY dt_id ASC");
                } else if (sizeof($req->all()[0]) == 13) {
                    $val_1 = DB::select("SELECT timing,rdl25_volume, rdl25_mass, stfm1_flow_tot, stfm1_temp, stfm1_pressure, stfm2_flow_tot, stfm2_temp, stfm2_pressure, $val_1, $val_2,$val_3,$val_4,$val_5,$val_6,$val_7,$val_8,$val_9,$val_10,$val_11,$val_12,$val_13 FROM dt_aio WHERE timing BETWEEN '$con_date3' AND '$con_date' AND dt_id MOD '$interval' = 0 ORDER BY dt_id ASC");
                } else if (sizeof($req->all()[0]) == 14) {
                    $val_1 = DB::select("SELECT timing,rdl25_volume, rdl25_mass, stfm1_flow_tot, stfm1_temp, stfm1_pressure, stfm2_flow_tot, stfm2_temp, stfm2_pressure, $val_1, $val_2,$val_3,$val_4,$val_5,$val_6,$val_7,$val_8,$val_9,$val_10,$val_11,$val_12,$val_13,$val_14 FROM dt_aio WHERE timing BETWEEN '$con_date3' AND '$con_date' AND dt_id MOD '$interval' = 0 ORDER BY dt_id ASC");
                } else if (sizeof($req->all()[0]) == 15) {
                    $val_1 = DB::select("SELECT timing,rdl25_volume, rdl25_mass, stfm1_flow_tot, stfm1_temp, stfm1_pressure, stfm2_flow_tot, stfm2_temp, stfm2_pressure, $val_1, $val_2,$val_3,$val_4,$val_5,$val_6,$val_7,$val_8,$val_9,$val_10,$val_11,$val_12,$val_13,$val_14,$val_15 FROM dt_aio WHERE timing BETWEEN '$con_date3' AND '$con_date' AND dt_id MOD '$interval' = 0 ORDER BY dt_id ASC");
                } else if (sizeof($req->all()[0]) == 16) {
                    $val_1 = DB::select("SELECT timing,rdl25_volume, rdl25_mass, stfm1_flow_tot, stfm1_temp, stfm1_pressure, stfm2_flow_tot, stfm2_temp, stfm2_pressure, $val_1, $val_2,$val_3,$val_4,$val_5,$val_6,$val_7,$val_8,$val_9,$val_10,$val_11,$val_12,$val_13,$val_14,$val_15,$val_16 FROM dt_aio WHERE timing BETWEEN '$con_date3' AND '$con_date' AND dt_id MOD '$interval' = 0 ORDER BY dt_id ASC");
                }
            } elseif ($timing == '5') {
                if (sizeof($req->all()[0]) == 1) {
                    $val_1 = DB::select("SELECT timing,rdl25_volume, rdl25_mass, stfm1_flow_tot, stfm1_temp, stfm1_pressure, stfm2_flow_tot, stfm2_temp, stfm2_pressure, $val_1 FROM dt_aio WHERE timing BETWEEN '$new_date1' AND '$new_date2' AND dt_id MOD '$interval' = 0 ORDER BY dt_id ASC");
                } else if (sizeof($req->all()[0]) == 2) {
                    $val_1 = DB::select("SELECT timing,rdl25_volume, rdl25_mass, stfm1_flow_tot, stfm1_temp, stfm1_pressure, stfm2_flow_tot, stfm2_temp, stfm2_pressure, $val_1, $val_2 FROM dt_aio WHERE timing BETWEEN '$new_date1' AND '$new_date2' AND dt_id MOD '$interval' = 0 ORDER BY dt_id ASC");
                } else if (sizeof($req->all()[0]) == 3) {
                    $val_1 = DB::select("SELECT timing,rdl25_volume, rdl25_mass, stfm1_flow_tot, stfm1_temp, stfm1_pressure, stfm2_flow_tot, stfm2_temp, stfm2_pressure, $val_1, $val_2,$val_3 FROM dt_aio WHERE timing BETWEEN '$new_date1' AND '$new_date2' AND dt_id MOD '$interval' = 0 ORDER BY dt_id ASC");
                } else if (sizeof($req->all()[0]) == 4) {
                    $val_1 = DB::select("SELECT timing,rdl25_volume, rdl25_mass, stfm1_flow_tot, stfm1_temp, stfm1_pressure, stfm2_flow_tot, stfm2_temp, stfm2_pressure, $val_1, $val_2,$val_3,$val_4 FROM dt_aio WHERE timing BETWEEN '$new_date1' AND '$new_date2' AND dt_id MOD '$interval' = 0 ORDER BY dt_id ASC");
                } else if (sizeof($req->all()[0]) == 5) {
                    $val_1 = DB::select("SELECT timing,rdl25_volume, rdl25_mass, stfm1_flow_tot, stfm1_temp, stfm1_pressure, stfm2_flow_tot, stfm2_temp, stfm2_pressure, $val_1, $val_2,$val_3,$val_4,$val_5 FROM dt_aio WHERE timing BETWEEN '$new_date1' AND '$new_date2' AND dt_id MOD '$interval' = 0 ORDER BY dt_id ASC");
                } else if (sizeof($req->all()[0]) == 6) {
                    $val_1 = DB::select("SELECT timing,rdl25_volume, rdl25_mass, stfm1_flow_tot, stfm1_temp, stfm1_pressure, stfm2_flow_tot, stfm2_temp, stfm2_pressure, $val_1, $val_2,$val_3,$val_4,$val_5,$val_6 FROM dt_aio WHERE timing BETWEEN '$new_date1' AND '$new_date2' AND dt_id MOD '$interval' = 0 ORDER BY dt_id ASC");
                } else if (sizeof($req->all()[0]) == 7) {
                    $val_1 = DB::select("SELECT timing,rdl25_volume, rdl25_mass, stfm1_flow_tot, stfm1_temp, stfm1_pressure, stfm2_flow_tot, stfm2_temp, stfm2_pressure, $val_1, $val_2,$val_3,$val_4,$val_5,$val_6,$val_7 FROM dt_aio WHERE timing BETWEEN '$new_date1' AND '$new_date2' AND dt_id MOD '$interval' = 0 ORDER BY dt_id ASC");
                } else if (sizeof($req->all()[0]) == 8) {
                    $val_1 = DB::select("SELECT timing,rdl25_volume, rdl25_mass, stfm1_flow_tot, stfm1_temp, stfm1_pressure, stfm2_flow_tot, stfm2_temp, stfm2_pressure, $val_1, $val_2,$val_3,$val_4,$val_5,$val_6,$val_7,$val_8 FROM dt_aio WHERE timing BETWEEN '$new_date1' AND '$new_date2' AND dt_id MOD '$interval' = 0 ORDER BY dt_id ASC");
                } else if (sizeof($req->all()[0]) == 9) {
                    $val_1 = DB::select("SELECT timing,rdl25_volume, rdl25_mass, stfm1_flow_tot, stfm1_temp, stfm1_pressure, stfm2_flow_tot, stfm2_temp, stfm2_pressure, $val_1, $val_2,$val_3,$val_4,$val_5,$val_6,$val_7,$val_8,$val_9 FROM dt_aio WHERE timing BETWEEN '$new_date1' AND '$new_date2' AND dt_id MOD '$interval' = 0 ORDER BY dt_id ASC");
                } else if (sizeof($req->all()[0]) == 10) {
                    $val_1 = DB::select("SELECT timing,rdl25_volume, rdl25_mass, stfm1_flow_tot, stfm1_temp, stfm1_pressure, stfm2_flow_tot, stfm2_temp, stfm2_pressure, $val_1, $val_2,$val_3,$val_4,$val_5,$val_6,$val_7,$val_8,$val_9,$val_10 FROM dt_aio WHERE timing BETWEEN '$new_date1' AND '$new_date2' AND dt_id MOD '$interval' = 0 ORDER BY dt_id ASC");
                } else if (sizeof($req->all()[0]) == 11) {
                    $val_1 = DB::select("SELECT timing,rdl25_volume, rdl25_mass, stfm1_flow_tot, stfm1_temp, stfm1_pressure, stfm2_flow_tot, stfm2_temp, stfm2_pressure, $val_1, $val_2,$val_3,$val_4,$val_5,$val_6,$val_7,$val_8,$val_9,$val_10,$val_11 FROM dt_aio WHERE timing BETWEEN '$new_date1' AND '$new_date2' AND dt_id MOD '$interval' = 0 ORDER BY dt_id ASC");
                } else if (sizeof($req->all()[0]) == 12) {
                    $val_1 = DB::select("SELECT timing,rdl25_volume, rdl25_mass, stfm1_flow_tot, stfm1_temp, stfm1_pressure, stfm2_flow_tot, stfm2_temp, stfm2_pressure, $val_1, $val_2,$val_3,$val_4,$val_5,$val_6,$val_7,$val_8,$val_9,$val_10,$val_11,$val_12 FROM dt_aio WHERE timing BETWEEN '$new_date1' AND '$new_date2' AND dt_id MOD '$interval' = 0 ORDER BY dt_id ASC");
                } else if (sizeof($req->all()[0]) == 13) {
                    $val_1 = DB::select("SELECT timing,rdl25_volume, rdl25_mass, stfm1_flow_tot, stfm1_temp, stfm1_pressure, stfm2_flow_tot, stfm2_temp, stfm2_pressure, $val_1, $val_2,$val_3,$val_4,$val_5,$val_6,$val_7,$val_8,$val_9,$val_10,$val_11,$val_12,$val_13 FROM dt_aio WHERE timing BETWEEN '$new_date1' AND '$new_date2' AND dt_id MOD '$interval' = 0 ORDER BY dt_id ASC");
                } else if (sizeof($req->all()[0]) == 14) {
                    $val_1 = DB::select("SELECT timing,rdl25_volume, rdl25_mass, stfm1_flow_tot, stfm1_temp, stfm1_pressure, stfm2_flow_tot, stfm2_temp, stfm2_pressure, $val_1, $val_2,$val_3,$val_4,$val_5,$val_6,$val_7,$val_8,$val_9,$val_10,$val_11,$val_12,$val_13,$val_14 FROM dt_aio WHERE timing BETWEEN '$new_date1' AND '$new_date2' AND dt_id MOD '$interval' = 0 ORDER BY dt_id ASC");
                } else if (sizeof($req->all()[0]) == 15) {
                    $val_1 = DB::select("SELECT timing,rdl25_volume, rdl25_mass, stfm1_flow_tot, stfm1_temp, stfm1_pressure, stfm2_flow_tot, stfm2_temp, stfm2_pressure, $val_1, $val_2,$val_3,$val_4,$val_5,$val_6,$val_7,$val_8,$val_9,$val_10,$val_11,$val_12,$val_13,$val_14,$val_15 FROM dt_aio WHERE timing BETWEEN '$new_date1' AND '$new_date2' AND dt_id MOD '$interval' = 0 ORDER BY dt_id ASC");
                } else if (sizeof($req->all()[0]) == 16) {
                    $val_1 = DB::select("SELECT timing,rdl25_volume, rdl25_mass, stfm1_flow_tot, stfm1_temp, stfm1_pressure, stfm2_flow_tot, stfm2_temp, stfm2_pressure, $val_1, $val_2,$val_3,$val_4,$val_5,$val_6,$val_7,$val_8,$val_9,$val_10,$val_11,$val_12,$val_13,$val_14,$val_15,$val_16 FROM dt_aio WHERE timing BETWEEN '$new_date1' AND '$new_date2' AND dt_id MOD '$interval' = 0 ORDER BY dt_id ASC");
                }
            }
        $response = [
            'val_1' => $val_1,
            'status_code' => 200
        ];
        return response()->json($response);
    }
    public function SaveSelection(Request $req)
    {
        $val_1 = '';
        $val_2 = '';
        $val_3 = '';
        $val_4 = '';
        $val_5 = '';
        $val_6 = '';
        $val_7  = '';
        $val_8  = '';
        $val_9  = '';
        $val_10 = '';
        $val_11 = '';
        $val_12 = '';
        $val_13 = '';
        $val_14 = '';
        $val_15 = '';
        $val_16 = '';

        $interval = $req->all()[1];
        $timing = $req->all()[2];
        $startdata = $req->all()[3];
        $enddata = $req->all()[4];
        $filter_range = $req->all()[5];
        $date1 = strtotime($startdata);
        $date2 = strtotime($enddata);
        $new_date1 = date('Y-m-d H:i:s', $date1);
        $new_date2 = date('Y-m-d H:i:s', $date2);
        if (sizeof($req->all()[0]) == 1) {
            $val_1 = $req->all()[0][0];
        }
        if (sizeof($req->all()[0]) == 2) {
            $val_1 = $req->all()[0][0];
            $val_2 = $req->all()[0][1];
        }
        if (sizeof($req->all()[0]) == 3) {
            $val_1 = $req->all()[0][0];
            $val_2 = $req->all()[0][1];
            $val_3 = $req->all()[0][2];
        }
        if (sizeof($req->all()[0]) == 4) {
            $val_1 = $req->all()[0][0];
            $val_2 = $req->all()[0][1];
            $val_3 = $req->all()[0][2];
            $val_4 = $req->all()[0][3];
        }
        if (sizeof($req->all()[0]) == 5) {
            $val_1 = $req->all()[0][0];
            $val_2 = $req->all()[0][1];
            $val_3 = $req->all()[0][2];
            $val_4 = $req->all()[0][3];
            $val_5 = $req->all()[0][4];
        }
        if (sizeof($req->all()[0]) == 6) {
            $val_1 = $req->all()[0][0];
            $val_2 = $req->all()[0][1];
            $val_3 = $req->all()[0][2];
            $val_4 = $req->all()[0][3];
            $val_5 = $req->all()[0][4];
            $val_6 = $req->all()[0][5];
        }
        if (sizeof($req->all()[0]) == 7) {
            $val_1 = $req->all()[0][0];
            $val_2 = $req->all()[0][1];
            $val_3 = $req->all()[0][2];
            $val_4 = $req->all()[0][3];
            $val_5 = $req->all()[0][4];
            $val_6 = $req->all()[0][5];
            $val_7 = $req->all()[0][6];
        }
        if (sizeof($req->all()[0]) == 8) {
            $val_1 = $req->all()[0][0];
            $val_2 = $req->all()[0][1];
            $val_3 = $req->all()[0][2];
            $val_4 = $req->all()[0][3];
            $val_5 = $req->all()[0][4];
            $val_6 = $req->all()[0][5];
            $val_7 = $req->all()[0][6];
            $val_8 = $req->all()[0][7];
        }
        if (sizeof($req->all()[0]) == 9) {
            $val_1 = $req->all()[0][0];
            $val_2 = $req->all()[0][1];
            $val_3 = $req->all()[0][2];
            $val_4 = $req->all()[0][3];
            $val_5 = $req->all()[0][4];
            $val_6 = $req->all()[0][5];
            $val_7 = $req->all()[0][6];
            $val_8 = $req->all()[0][7];
            $val_9 = $req->all()[0][8];
        }
        if (sizeof($req->all()[0]) == 10) {
            $val_1 = $req->all()[0][0];
            $val_2 = $req->all()[0][1];
            $val_3 = $req->all()[0][2];
            $val_4 = $req->all()[0][3];
            $val_5 = $req->all()[0][4];
            $val_6 = $req->all()[0][5];
            $val_7 = $req->all()[0][6];
            $val_8 = $req->all()[0][7];
            $val_9 = $req->all()[0][8];
            $val_10 = $req->all()[0][9];
        }
        if (sizeof($req->all()[0]) == 11) {
            $val_1 = $req->all()[0][0];
            $val_2 = $req->all()[0][1];
            $val_3 = $req->all()[0][2];
            $val_4 = $req->all()[0][3];
            $val_5 = $req->all()[0][4];
            $val_6 = $req->all()[0][5];
            $val_7 = $req->all()[0][6];
            $val_8 = $req->all()[0][7];
            $val_9 = $req->all()[0][8];
            $val_10 = $req->all()[0][9];
            $val_11 = $req->all()[0][10];
        }
        if (sizeof($req->all()[0]) == 12) {
            $val_1 = $req->all()[0][0];
            $val_2 = $req->all()[0][1];
            $val_3 = $req->all()[0][2];
            $val_4 = $req->all()[0][3];
            $val_5 = $req->all()[0][4];
            $val_6 = $req->all()[0][5];
            $val_7 = $req->all()[0][6];
            $val_8 = $req->all()[0][7];
            $val_9 = $req->all()[0][8];
            $val_10 = $req->all()[0][9];
            $val_11 = $req->all()[0][10];
            $val_12 = $req->all()[0][11];
        }
        if (sizeof($req->all()[0]) == 13) {
            $val_1 = $req->all()[0][0];
            $val_2 = $req->all()[0][1];
            $val_3 = $req->all()[0][2];
            $val_4 = $req->all()[0][3];
            $val_5 = $req->all()[0][4];
            $val_6 = $req->all()[0][5];
            $val_7 = $req->all()[0][6];
            $val_8 = $req->all()[0][7];
            $val_9 = $req->all()[0][8];
            $val_10 = $req->all()[0][9];
            $val_11 = $req->all()[0][10];
            $val_12 = $req->all()[0][11];
            $val_13 = $req->all()[0][12];
        }
        if (sizeof($req->all()[0]) == 14) {
            $val_1 = $req->all()[0][0];
            $val_2 = $req->all()[0][1];
            $val_3 = $req->all()[0][2];
            $val_4 = $req->all()[0][3];
            $val_5 = $req->all()[0][4];
            $val_6 = $req->all()[0][5];
            $val_7 = $req->all()[0][6];
            $val_8 = $req->all()[0][7];
            $val_9 = $req->all()[0][8];
            $val_10 = $req->all()[0][9];
            $val_11 = $req->all()[0][10];
            $val_12 = $req->all()[0][11];
            $val_13 = $req->all()[0][12];
            $val_14 = $req->all()[0][13];
        }
        if (sizeof($req->all()[0]) == 15) {
            $val_1 = $req->all()[0][0];
            $val_2 = $req->all()[0][1];
            $val_3 = $req->all()[0][2];
            $val_4 = $req->all()[0][3];
            $val_5 = $req->all()[0][4];
            $val_6 = $req->all()[0][5];
            $val_7 = $req->all()[0][6];
            $val_8 = $req->all()[0][7];
            $val_9 = $req->all()[0][8];
            $val_10 = $req->all()[0][9];
            $val_11 = $req->all()[0][10];
            $val_12 = $req->all()[0][11];
            $val_13 = $req->all()[0][12];
            $val_14 = $req->all()[0][13];
            $val_15 = $req->all()[0][14];
        }
        if (sizeof($req->all()[0]) == 16) {
            $val_1 = $req->all()[0][0];
            $val_2 = $req->all()[0][1];
            $val_3 = $req->all()[0][2];
            $val_4 = $req->all()[0][3];
            $val_5 = $req->all()[0][4];
            $val_6 = $req->all()[0][5];
            $val_7 = $req->all()[0][6];
            $val_8 = $req->all()[0][7];
            $val_9 = $req->all()[0][8];
            $val_10 = $req->all()[0][9];
            $val_11 = $req->all()[0][10];
            $val_12 = $req->all()[0][11];
            $val_13 = $req->all()[0][12];
            $val_14 = $req->all()[0][13];
            $val_15 = $req->all()[0][14];
            $val_16 = $req->all()[0][15];
        }
        $today_date = date("Y-m-d", strtotime("today"));
        $yesterday_date = date("Y-m-d", strtotime("yesterday"));
        $month_date = date("Y-m-d", strtotime("-1 month"));
        $week_date = date("Y-m-d", strtotime("-1 week"));
        $sub_date = "10:00";
        $sub_date2 = "10:00";
        $con_date = $today_date . " " . $sub_date;
        $con_date2 = $week_date . " " . $sub_date;
        $con_date3 = $month_date . " " . $sub_date;
        $con_date4 = $yesterday_date . " " . $sub_date2;
        

        $get_range = DB::select("SELECT * FROM multi_ranges ORDER BY range_id DESC LIMIT 1");
        $get_range1 = '';
        $get_range2 = '';
        $get_range3 = '';
        $get_range4 = '';
        $get_range5 = '';
        $get_range6 = '';
        $get_range7 = '';
        $get_range8 = '';
        $get_range9 = '';
        $get_range10 = '';
        $get_range11 = '';
        $get_range12 = '';
        $get_range13 = '';
        $get_range14 = '';
        $get_range15 = '';
        $get_range16 = '';
        if ($val_1) {
            $get_range1 = $get_range[0]->$val_1;
        }
        if ($val_2) {
            $get_range2 = $get_range[0]->$val_2;
        }
        if ($val_3) {
            $get_range3 = $get_range[0]->$val_3;
        }
        if ($val_4) {
            $get_range4 = $get_range[0]->$val_4;
        }
        if ($val_5) {
            $get_range5 = $get_range[0]->$val_5;
        }
        if ($val_6) {
            $get_range6 = $get_range[0]->$val_6;
        }
        if ($val_7) {
            $get_range7 = $get_range[0]->$val_7;
        }
        if ($val_8) {
            $get_range8 = $get_range[0]->$val_8;
        }
        if ($val_9) {
            $get_range9 = $get_range[0]->$val_9;
        }
        if ($val_10) {
            $get_range10 = $get_range[0]->$val_10;
        }
        if ($val_11) {
            $get_range11 = $get_range[0]->$val_11;
        }
        if ($val_12) {
            $get_range12 = $get_range[0]->$val_12;
        }
        if ($val_13) {
            $get_range13 = $get_range[0]->$val_13;
        }
        if ($val_14) {
            $get_range14 = $get_range[0]->$val_14;
        }
        if ($val_15) {
            $get_range15 = $get_range[0]->$val_15;
        }
        if ($val_16) {
            $get_range16 = $get_range[0]->$val_16;
        }

        if ($filter_range == 'n') {
            if ($timing == '1') {
                if (sizeof($req->all()[0]) == 1) {
                    $val_1 = DB::select("SELECT timing, $val_1 FROM dt_aio WHERE timing > now() - interval 24 hour ");
                } else if (sizeof($req->all()[0]) == 2) {
                    $val_1 = DB::select("SELECT timing, $val_1, $val_2 FROM dt_aio WHERE timing > now() - interval 24 hour ");
                } else if (sizeof($req->all()[0]) == 3) {
                    $val_1 = DB::select("SELECT timing, $val_1, $val_2,$val_3 FROM dt_aio WHERE timing > now() - interval 24 hour ");
                } else if (sizeof($req->all()[0]) == 4) {
                    $val_1 = DB::select("SELECT timing, $val_1, $val_2,$val_3,$val_4 FROM dt_aio WHERE timing > now() - interval 24 hour ");
                } else if (sizeof($req->all()[0]) == 5) {
                    $val_1 = DB::select("SELECT timing, $val_1, $val_2,$val_3,$val_4,$val_5 FROM dt_aio WHERE timing > now() - interval 24 hour ");
                } else if (sizeof($req->all()[0]) == 6) {
                    $val_1 = DB::select("SELECT timing, $val_1, $val_2,$val_3,$val_4,$val_5,$val_6 FROM dt_aio WHERE timing > now() - interval 24 hour ");
                } else if (sizeof($req->all()[0]) == 7) {
                    $val_1 = DB::select("SELECT timing, $val_1, $val_2,$val_3,$val_4,$val_5,$val_6,$val_7 FROM dt_aio WHERE timing > now() - interval 24 hour ");
                } else if (sizeof($req->all()[0]) == 8) {
                    $val_1 = DB::select("SELECT timing, $val_1, $val_2,$val_3,$val_4,$val_5,$val_6,$val_7,$val_8 FROM dt_aio WHERE timing > now() - interval 24 hour ");
                } else if (sizeof($req->all()[0]) == 9) {
                    $val_1 = DB::select("SELECT timing, $val_1, $val_2,$val_3,$val_4,$val_5,$val_6,$val_7,$val_8,$val_9 FROM dt_aio WHERE timing > now() - interval 24 hour ");
                } else if (sizeof($req->all()[0]) == 10) {
                    $val_1 = DB::select("SELECT timing, $val_1, $val_2,$val_3,$val_4,$val_5,$val_6,$val_7,$val_8,$val_9,$val_10 FROM dt_aio WHERE timing > now() - interval 24 hour ");
                } else if (sizeof($req->all()[0]) == 11) {
                    $val_1 = DB::select("SELECT timing, $val_1, $val_2,$val_3,$val_4,$val_5,$val_6,$val_7,$val_8,$val_9,$val_10,$val_11 FROM dt_aio WHERE timing > now() - interval 24 hour ");
                } else if (sizeof($req->all()[0]) == 12) {
                    $val_1 = DB::select("SELECT timing, $val_1, $val_2,$val_3,$val_4,$val_5,$val_6,$val_7,$val_8,$val_9,$val_10,$val_11,$val_12 FROM dt_aio WHERE timing > now() - interval 24 hour ");
                } else if (sizeof($req->all()[0]) == 13) {
                    $val_1 = DB::select("SELECT timing, $val_1, $val_2,$val_3,$val_4,$val_5,$val_6,$val_7,$val_8,$val_9,$val_10,$val_11,$val_12,$val_13 FROM dt_aio WHERE timing > now() - interval 24 hour ");
                } else if (sizeof($req->all()[0]) == 14) {
                    $val_1 = DB::select("SELECT timing, $val_1, $val_2,$val_3,$val_4,$val_5,$val_6,$val_7,$val_8,$val_9,$val_10,$val_11,$val_12,$val_13,$val_14 FROM dt_aio WHERE timing > now() - interval 24 hour ");
                } else if (sizeof($req->all()[0]) == 15) {
                    $val_1 = DB::select("SELECT timing, $val_1, $val_2,$val_3,$val_4,$val_5,$val_6,$val_7,$val_8,$val_9,$val_10,$val_11,$val_12,$val_13,$val_14,$val_15 FROM dt_aio WHERE timing > now() - interval 24 hour ");
                } else if (sizeof($req->all()[0]) == 16) {
                    $val_1 = DB::select("SELECT timing, $val_1, $val_2,$val_3,$val_4,$val_5,$val_6,$val_7,$val_8,$val_9,$val_10,$val_11,$val_12,$val_13,$val_14,$val_15,$val_16 FROM dt_aio WHERE timing > now() - interval 24 hour ");
                }
            } elseif ($timing == '2') {
                if (sizeof($req->all()[0]) == 1) {
                    $val_1 = DB::select("SELECT timing, $val_1 FROM dt_aio WHERE timing BETWEEN '$con_date4' AND '$con_date'  ORDER BY dt_id ASC");
                } else if (sizeof($req->all()[0]) == 2) {
                    $val_1 = DB::select("SELECT timing, $val_1, $val_2 FROM dt_aio WHERE timing BETWEEN '$con_date4' AND '$con_date'  ORDER BY dt_id ASC");
                } else if (sizeof($req->all()[0]) == 3) {
                    $val_1 = DB::select("SELECT timing, $val_1, $val_2,$val_3 FROM dt_aio WHERE timing BETWEEN '$con_date4' AND '$con_date'  ORDER BY dt_id ASC");
                } else if (sizeof($req->all()[0]) == 4) {
                    $val_1 = DB::select("SELECT timing, $val_1, $val_2,$val_3,$val_4 FROM dt_aio WHERE timing BETWEEN '$con_date4' AND '$con_date'  ORDER BY dt_id ASC");
                } else if (sizeof($req->all()[0]) == 5) {
                    $val_1 = DB::select("SELECT timing, $val_1, $val_2,$val_3,$val_4,$val_5 FROM dt_aio WHERE timing BETWEEN '$con_date4' AND '$con_date'  ORDER BY dt_id ASC");
                } else if (sizeof($req->all()[0]) == 6) {
                    $val_1 = DB::select("SELECT timing, $val_1, $val_2,$val_3,$val_4,$val_5,$val_6 FROM dt_aio WHERE timing BETWEEN '$con_date4' AND '$con_date'  ORDER BY dt_id ASC");
                } else if (sizeof($req->all()[0]) == 7) {
                    $val_1 = DB::select("SELECT timing, $val_1, $val_2,$val_3,$val_4,$val_5,$val_6,$val_7 FROM dt_aio WHERE timing BETWEEN '$con_date4' AND '$con_date'  ORDER BY dt_id ASC");
                } else if (sizeof($req->all()[0]) == 8) {
                    $val_1 = DB::select("SELECT timing, $val_1, $val_2,$val_3,$val_4,$val_5,$val_6,$val_7,$val_8 FROM dt_aio WHERE timing BETWEEN '$con_date4' AND '$con_date'  ORDER BY dt_id ASC");
                } else if (sizeof($req->all()[0]) == 9) {
                    $val_1 = DB::select("SELECT timing, $val_1, $val_2,$val_3,$val_4,$val_5,$val_6,$val_7,$val_8,$val_9 FROM dt_aio WHERE timing BETWEEN '$con_date4' AND '$con_date'  ORDER BY dt_id ASC");
                } else if (sizeof($req->all()[0]) == 10) {
                    $val_1 = DB::select("SELECT timing, $val_1, $val_2,$val_3,$val_4,$val_5,$val_6,$val_7,$val_8,$val_9,$val_10 FROM dt_aio WHERE timing BETWEEN '$con_date4' AND '$con_date'  ORDER BY dt_id ASC");
                } else if (sizeof($req->all()[0]) == 11) {
                    $val_1 = DB::select("SELECT timing, $val_1, $val_2,$val_3,$val_4,$val_5,$val_6,$val_7,$val_8,$val_9,$val_10,$val_11 FROM dt_aio WHERE timing BETWEEN '$con_date4' AND '$con_date'  ORDER BY dt_id ASC");
                } else if (sizeof($req->all()[0]) == 12) {
                    $val_1 = DB::select("SELECT timing, $val_1, $val_2,$val_3,$val_4,$val_5,$val_6,$val_7,$val_8,$val_9,$val_10,$val_11,$val_12 FROM dt_aio WHERE timing BETWEEN '$con_date4' AND '$con_date'  ORDER BY dt_id ASC");
                } else if (sizeof($req->all()[0]) == 13) {
                    $val_1 = DB::select("SELECT timing, $val_1, $val_2,$val_3,$val_4,$val_5,$val_6,$val_7,$val_8,$val_9,$val_10,$val_11,$val_12,$val_13 FROM dt_aio WHERE timing BETWEEN '$con_date4' AND '$con_date'  ORDER BY dt_id ASC");
                } else if (sizeof($req->all()[0]) == 14) {
                    $val_1 = DB::select("SELECT timing, $val_1, $val_2,$val_3,$val_4,$val_5,$val_6,$val_7,$val_8,$val_9,$val_10,$val_11,$val_12,$val_13,$val_14 FROM dt_aio WHERE timing BETWEEN '$con_date4' AND '$con_date'  ORDER BY dt_id ASC");
                } else if (sizeof($req->all()[0]) == 15) {
                    $val_1 = DB::select("SELECT timing, $val_1, $val_2,$val_3,$val_4,$val_5,$val_6,$val_7,$val_8,$val_9,$val_10,$val_11,$val_12,$val_13,$val_14,$val_15 FROM dt_aio WHERE timing BETWEEN '$con_date4' AND '$con_date'  ORDER BY dt_id ASC");
                } else if (sizeof($req->all()[0]) == 16) {
                    $val_1 = DB::select("SELECT timing, $val_1, $val_2,$val_3,$val_4,$val_5,$val_6,$val_7,$val_8,$val_9,$val_10,$val_11,$val_12,$val_13,$val_14,$val_15,$val_16 FROM dt_aio WHERE timing BETWEEN '$con_date4' AND '$con_date'  ORDER BY dt_id ASC");
                }
            } elseif ($timing == '3') {
                if (sizeof($req->all()[0]) == 1) {
                    $val_1 = DB::select("SELECT timing, $val_1 FROM dt_aio WHERE timing BETWEEN '$con_date2' AND '$con_date'  ORDER BY dt_id ASC");
                } else if (sizeof($req->all()[0]) == 2) {
                    $val_1 = DB::select("SELECT timing, $val_1, $val_2 FROM dt_aio WHERE timing BETWEEN '$con_date2' AND '$con_date'  ORDER BY dt_id ASC");
                } else if (sizeof($req->all()[0]) == 3) {
                    $val_1 = DB::select("SELECT timing, $val_1, $val_2,$val_3 FROM dt_aio WHERE timing BETWEEN '$con_date2' AND '$con_date'  ORDER BY dt_id ASC");
                } else if (sizeof($req->all()[0]) == 4) {
                    $val_1 = DB::select("SELECT timing, $val_1, $val_2,$val_3,$val_4 FROM dt_aio WHERE timing BETWEEN '$con_date2' AND '$con_date'  ORDER BY dt_id ASC");
                } else if (sizeof($req->all()[0]) == 5) {
                    $val_1 = DB::select("SELECT timing, $val_1, $val_2,$val_3,$val_4,$val_5 FROM dt_aio WHERE timing BETWEEN '$con_date2' AND '$con_date'  ORDER BY dt_id ASC");
                } else if (sizeof($req->all()[0]) == 6) {
                    $val_1 = DB::select("SELECT timing, $val_1, $val_2,$val_3,$val_4,$val_5,$val_6 FROM dt_aio WHERE timing BETWEEN '$con_date2' AND '$con_date'  ORDER BY dt_id ASC");
                } else if (sizeof($req->all()[0]) == 7) {
                    $val_1 = DB::select("SELECT timing, $val_1, $val_2,$val_3,$val_4,$val_5,$val_6,$val_7 FROM dt_aio WHERE timing BETWEEN '$con_date2' AND '$con_date'  ORDER BY dt_id ASC");
                } else if (sizeof($req->all()[0]) == 8) {
                    $val_1 = DB::select("SELECT timing, $val_1, $val_2,$val_3,$val_4,$val_5,$val_6,$val_7,$val_8 FROM dt_aio WHERE timing BETWEEN '$con_date2' AND '$con_date'  ORDER BY dt_id ASC");
                } else if (sizeof($req->all()[0]) == 9) {
                    $val_1 = DB::select("SELECT timing, $val_1, $val_2,$val_3,$val_4,$val_5,$val_6,$val_7,$val_8,$val_9 FROM dt_aio WHERE timing BETWEEN '$con_date2' AND '$con_date'  ORDER BY dt_id ASC");
                } else if (sizeof($req->all()[0]) == 10) {
                    $val_1 = DB::select("SELECT timing, $val_1, $val_2,$val_3,$val_4,$val_5,$val_6,$val_7,$val_8,$val_9,$val_10 FROM dt_aio WHERE timing BETWEEN '$con_date2' AND '$con_date'  ORDER BY dt_id ASC");
                } else if (sizeof($req->all()[0]) == 11) {
                    $val_1 = DB::select("SELECT timing, $val_1, $val_2,$val_3,$val_4,$val_5,$val_6,$val_7,$val_8,$val_9,$val_10,$val_11 FROM dt_aio WHERE timing BETWEEN '$con_date2' AND '$con_date'  ORDER BY dt_id ASC");
                } else if (sizeof($req->all()[0]) == 12) {
                    $val_1 = DB::select("SELECT timing, $val_1, $val_2,$val_3,$val_4,$val_5,$val_6,$val_7,$val_8,$val_9,$val_10,$val_11,$val_12 FROM dt_aio WHERE timing BETWEEN '$con_date2' AND '$con_date'  ORDER BY dt_id ASC");
                } else if (sizeof($req->all()[0]) == 13) {
                    $val_1 = DB::select("SELECT timing, $val_1, $val_2,$val_3,$val_4,$val_5,$val_6,$val_7,$val_8,$val_9,$val_10,$val_11,$val_12,$val_13 FROM dt_aio WHERE timing BETWEEN '$con_date2' AND '$con_date'  ORDER BY dt_id ASC");
                } else if (sizeof($req->all()[0]) == 14) {
                    $val_1 = DB::select("SELECT timing, $val_1, $val_2,$val_3,$val_4,$val_5,$val_6,$val_7,$val_8,$val_9,$val_10,$val_11,$val_12,$val_13,$val_14 FROM dt_aio WHERE timing BETWEEN '$con_date2' AND '$con_date'  ORDER BY dt_id ASC");
                } else if (sizeof($req->all()[0]) == 15) {
                    $val_1 = DB::select("SELECT timing, $val_1, $val_2,$val_3,$val_4,$val_5,$val_6,$val_7,$val_8,$val_9,$val_10,$val_11,$val_12,$val_13,$val_14,$val_15 FROM dt_aio WHERE timing BETWEEN '$con_date2' AND '$con_date'  ORDER BY dt_id ASC");
                } else if (sizeof($req->all()[0]) == 16) {
                    $val_1 = DB::select("SELECT timing, $val_1, $val_2,$val_3,$val_4,$val_5,$val_6,$val_7,$val_8,$val_9,$val_10,$val_11,$val_12,$val_13,$val_14,$val_15,$val_16 FROM dt_aio WHERE timing BETWEEN '$con_date2' AND '$con_date'  ORDER BY dt_id ASC");
                }
            } elseif ($timing == '4') {
                if (sizeof($req->all()[0]) == 1) {
                    $val_1 = DB::select("SELECT timing, $val_1 FROM dt_aio WHERE timing BETWEEN '$con_date3' AND '$con_date'  ORDER BY dt_id ASC");
                } else if (sizeof($req->all()[0]) == 2) {
                    $val_1 = DB::select("SELECT timing, $val_1, $val_2 FROM dt_aio WHERE timing BETWEEN '$con_date3' AND '$con_date'  ORDER BY dt_id ASC");
                } else if (sizeof($req->all()[0]) == 3) {
                    $val_1 = DB::select("SELECT timing, $val_1, $val_2,$val_3 FROM dt_aio WHERE timing BETWEEN '$con_date3' AND '$con_date'  ORDER BY dt_id ASC");
                } else if (sizeof($req->all()[0]) == 4) {
                    $val_1 = DB::select("SELECT timing, $val_1, $val_2,$val_3,$val_4 FROM dt_aio WHERE timing BETWEEN '$con_date3' AND '$con_date'  ORDER BY dt_id ASC");
                } else if (sizeof($req->all()[0]) == 5) {
                    $val_1 = DB::select("SELECT timing, $val_1, $val_2,$val_3,$val_4,$val_5 FROM dt_aio WHERE timing BETWEEN '$con_date3' AND '$con_date'  ORDER BY dt_id ASC");
                } else if (sizeof($req->all()[0]) == 6) {
                    $val_1 = DB::select("SELECT timing, $val_1, $val_2,$val_3,$val_4,$val_5,$val_6 FROM dt_aio WHERE timing BETWEEN '$con_date3' AND '$con_date'  ORDER BY dt_id ASC");
                } else if (sizeof($req->all()[0]) == 7) {
                    $val_1 = DB::select("SELECT timing, $val_1, $val_2,$val_3,$val_4,$val_5,$val_6,$val_7 FROM dt_aio WHERE timing BETWEEN '$con_date3' AND '$con_date'  ORDER BY dt_id ASC");
                } else if (sizeof($req->all()[0]) == 8) {
                    $val_1 = DB::select("SELECT timing, $val_1, $val_2,$val_3,$val_4,$val_5,$val_6,$val_7,$val_8 FROM dt_aio WHERE timing BETWEEN '$con_date3' AND '$con_date'  ORDER BY dt_id ASC");
                } else if (sizeof($req->all()[0]) == 9) {
                    $val_1 = DB::select("SELECT timing, $val_1, $val_2,$val_3,$val_4,$val_5,$val_6,$val_7,$val_8,$val_9 FROM dt_aio WHERE timing BETWEEN '$con_date3' AND '$con_date'  ORDER BY dt_id ASC");
                } else if (sizeof($req->all()[0]) == 10) {
                    $val_1 = DB::select("SELECT timing, $val_1, $val_2,$val_3,$val_4,$val_5,$val_6,$val_7,$val_8,$val_9,$val_10 FROM dt_aio WHERE timing BETWEEN '$con_date3' AND '$con_date'  ORDER BY dt_id ASC");
                } else if (sizeof($req->all()[0]) == 11) {
                    $val_1 = DB::select("SELECT timing, $val_1, $val_2,$val_3,$val_4,$val_5,$val_6,$val_7,$val_8,$val_9,$val_10,$val_11 FROM dt_aio WHERE timing BETWEEN '$con_date3' AND '$con_date'  ORDER BY dt_id ASC");
                } else if (sizeof($req->all()[0]) == 12) {
                    $val_1 = DB::select("SELECT timing, $val_1, $val_2,$val_3,$val_4,$val_5,$val_6,$val_7,$val_8,$val_9,$val_10,$val_11,$val_12 FROM dt_aio WHERE timing BETWEEN '$con_date3' AND '$con_date'  ORDER BY dt_id ASC");
                } else if (sizeof($req->all()[0]) == 13) {
                    $val_1 = DB::select("SELECT timing, $val_1, $val_2,$val_3,$val_4,$val_5,$val_6,$val_7,$val_8,$val_9,$val_10,$val_11,$val_12,$val_13 FROM dt_aio WHERE timing BETWEEN '$con_date3' AND '$con_date'  ORDER BY dt_id ASC");
                } else if (sizeof($req->all()[0]) == 14) {
                    $val_1 = DB::select("SELECT timing, $val_1, $val_2,$val_3,$val_4,$val_5,$val_6,$val_7,$val_8,$val_9,$val_10,$val_11,$val_12,$val_13,$val_14 FROM dt_aio WHERE timing BETWEEN '$con_date3' AND '$con_date'  ORDER BY dt_id ASC");
                } else if (sizeof($req->all()[0]) == 15) {
                    $val_1 = DB::select("SELECT timing, $val_1, $val_2,$val_3,$val_4,$val_5,$val_6,$val_7,$val_8,$val_9,$val_10,$val_11,$val_12,$val_13,$val_14,$val_15 FROM dt_aio WHERE timing BETWEEN '$con_date3' AND '$con_date'  ORDER BY dt_id ASC");
                } else if (sizeof($req->all()[0]) == 16) {
                    $val_1 = DB::select("SELECT timing, $val_1, $val_2,$val_3,$val_4,$val_5,$val_6,$val_7,$val_8,$val_9,$val_10,$val_11,$val_12,$val_13,$val_14,$val_15,$val_16 FROM dt_aio WHERE timing BETWEEN '$con_date3' AND '$con_date'  ORDER BY dt_id ASC");
                }
            } elseif ($timing == '5') {
                if (sizeof($req->all()[0]) == 1) {
                    $val_1 = DB::select("SELECT timing, $val_1 FROM dt_aio WHERE timing BETWEEN '$new_date1' AND '$new_date2'  ORDER BY dt_id ASC");
                } else if (sizeof($req->all()[0]) == 2) {
                    $val_1 = DB::select("SELECT timing, $val_1, $val_2 FROM dt_aio WHERE timing BETWEEN '$new_date1' AND '$new_date2'  ORDER BY dt_id ASC");
                } else if (sizeof($req->all()[0]) == 3) {
                    $val_1 = DB::select("SELECT timing, $val_1, $val_2,$val_3 FROM dt_aio WHERE timing BETWEEN '$new_date1' AND '$new_date2'  ORDER BY dt_id ASC");
                } else if (sizeof($req->all()[0]) == 4) {
                    $val_1 = DB::select("SELECT timing, $val_1, $val_2,$val_3,$val_4 FROM dt_aio WHERE timing BETWEEN '$new_date1' AND '$new_date2'  ORDER BY dt_id ASC");
                } else if (sizeof($req->all()[0]) == 5) {
                    $val_1 = DB::select("SELECT timing, $val_1, $val_2,$val_3,$val_4,$val_5 FROM dt_aio WHERE timing BETWEEN '$new_date1' AND '$new_date2'  ORDER BY dt_id ASC");
                } else if (sizeof($req->all()[0]) == 6) {
                    $val_1 = DB::select("SELECT timing, $val_1, $val_2,$val_3,$val_4,$val_5,$val_6 FROM dt_aio WHERE timing BETWEEN '$new_date1' AND '$new_date2'  ORDER BY dt_id ASC");
                } else if (sizeof($req->all()[0]) == 7) {
                    $val_1 = DB::select("SELECT timing, $val_1, $val_2,$val_3,$val_4,$val_5,$val_6,$val_7 FROM dt_aio WHERE timing BETWEEN '$new_date1' AND '$new_date2'  ORDER BY dt_id ASC");
                } else if (sizeof($req->all()[0]) == 8) {
                    $val_1 = DB::select("SELECT timing, $val_1, $val_2,$val_3,$val_4,$val_5,$val_6,$val_7,$val_8 FROM dt_aio WHERE timing BETWEEN '$new_date1' AND '$new_date2'  ORDER BY dt_id ASC");
                } else if (sizeof($req->all()[0]) == 9) {
                    $val_1 = DB::select("SELECT timing, $val_1, $val_2,$val_3,$val_4,$val_5,$val_6,$val_7,$val_8,$val_9 FROM dt_aio WHERE timing BETWEEN '$new_date1' AND '$new_date2'  ORDER BY dt_id ASC");
                } else if (sizeof($req->all()[0]) == 10) {
                    $val_1 = DB::select("SELECT timing, $val_1, $val_2,$val_3,$val_4,$val_5,$val_6,$val_7,$val_8,$val_9,$val_10 FROM dt_aio WHERE timing BETWEEN '$new_date1' AND '$new_date2'  ORDER BY dt_id ASC");
                } else if (sizeof($req->all()[0]) == 11) {
                    $val_1 = DB::select("SELECT timing, $val_1, $val_2,$val_3,$val_4,$val_5,$val_6,$val_7,$val_8,$val_9,$val_10,$val_11 FROM dt_aio WHERE timing BETWEEN '$new_date1' AND '$new_date2'  ORDER BY dt_id ASC");
                } else if (sizeof($req->all()[0]) == 12) {
                    $val_1 = DB::select("SELECT timing, $val_1, $val_2,$val_3,$val_4,$val_5,$val_6,$val_7,$val_8,$val_9,$val_10,$val_11,$val_12 FROM dt_aio WHERE timing BETWEEN '$new_date1' AND '$new_date2'  ORDER BY dt_id ASC");
                } else if (sizeof($req->all()[0]) == 13) {
                    $val_1 = DB::select("SELECT timing, $val_1, $val_2,$val_3,$val_4,$val_5,$val_6,$val_7,$val_8,$val_9,$val_10,$val_11,$val_12,$val_13 FROM dt_aio WHERE timing BETWEEN '$new_date1' AND '$new_date2'  ORDER BY dt_id ASC");
                } else if (sizeof($req->all()[0]) == 14) {
                    $val_1 = DB::select("SELECT timing, $val_1, $val_2,$val_3,$val_4,$val_5,$val_6,$val_7,$val_8,$val_9,$val_10,$val_11,$val_12,$val_13,$val_14 FROM dt_aio WHERE timing BETWEEN '$new_date1' AND '$new_date2'  ORDER BY dt_id ASC");
                } else if (sizeof($req->all()[0]) == 15) {
                    $val_1 = DB::select("SELECT timing, $val_1, $val_2,$val_3,$val_4,$val_5,$val_6,$val_7,$val_8,$val_9,$val_10,$val_11,$val_12,$val_13,$val_14,$val_15 FROM dt_aio WHERE timing BETWEEN '$new_date1' AND '$new_date2'  ORDER BY dt_id ASC");
                } else if (sizeof($req->all()[0]) == 16) {
                    $val_1 = DB::select("SELECT timing, $val_1, $val_2,$val_3,$val_4,$val_5,$val_6,$val_7,$val_8,$val_9,$val_10,$val_11,$val_12,$val_13,$val_14,$val_15,$val_16 FROM dt_aio WHERE timing BETWEEN '$new_date1' AND '$new_date2'  ORDER BY dt_id ASC");
                }
            }
        } else {
            if ($timing == '1') {
                if (sizeof($req->all()[0]) == 1) {
                    $val_1 = DB::select("SELECT timing, CASE WHEN $val_1 < $get_range1 THEN '0' WHEN $val_1 > $get_range1 THEN $val_1 END AS $val_1 FROM dt_aio WHERE timing > now() - interval 24 hour ORDER BY dt_id ASC");
                } else if (sizeof($req->all()[0]) == 2) {
                    $val_1 = DB::select("SELECT timing, CASE WHEN $val_1 < $get_range1 THEN '0' WHEN $val_1 > $get_range1 THEN $val_1 END AS $val_1, CASE WHEN $val_2 < $get_range2 THEN '0' WHEN $val_2 > $get_range2 THEN $val_2 END AS $val_2 FROM dt_aio WHERE timing > now() - interval 24 hour ORDER BY dt_id ASC");
                } else if (sizeof($req->all()[0]) == 3) {
                    $val_1 = DB::select("SELECT timing, CASE WHEN $val_1 < $get_range1 THEN '0' WHEN $val_1 > $get_range1 THEN $val_1 END AS $val_1, CASE WHEN $val_2 < $get_range2 THEN '0' WHEN $val_2 > $get_range2 THEN $val_2 END AS $val_2,CASE WHEN $val_3 < $get_range3 THEN '0' WHEN $val_3 > $get_range3 THEN $val_3 END AS $val_3 FROM dt_aio WHERE timing > now() - interval 24 hour ORDER BY dt_id ASC");
                } else if (sizeof($req->all()[0]) == 4) {
                    $val_1 = DB::select("SELECT timing, CASE WHEN $val_1 < $get_range1 THEN '0' WHEN $val_1 > $get_range1 THEN $val_1 END AS $val_1, CASE WHEN $val_2 < $get_range2 THEN '0' WHEN $val_2 > $get_range2 THEN $val_2 END AS $val_2,CASE WHEN $val_3 < $get_range3 THEN '0' WHEN $val_3 > $get_range3 THEN $val_3 END AS $val_3,CASE WHEN $val_4 < $get_range4 THEN '0' WHEN $val_4 > $get_range4 THEN $val_4 END AS $val_4 FROM dt_aio WHERE timing > now() - interval 24 hour ORDER BY dt_id ASC");
                } else if (sizeof($req->all()[0]) == 5) {
                    $val_1 = DB::select("SELECT timing, CASE WHEN $val_1 < $get_range1 THEN '0' WHEN $val_1 > $get_range1 THEN $val_1 END AS $val_1, CASE WHEN $val_2 < $get_range2 THEN '0' WHEN $val_2 > $get_range2 THEN $val_2 END AS $val_2,CASE WHEN $val_3 < $get_range3 THEN '0' WHEN $val_3 > $get_range3 THEN $val_3 END AS $val_3,CASE WHEN $val_4 < $get_range4 THEN '0' WHEN $val_4 > $get_range4 THEN $val_4 END AS $val_4,CASE WHEN $val_5 < $get_range5 THEN '0' WHEN $val_5 > $get_range5 THEN $val_5 END AS $val_5 FROM dt_aio WHERE timing > now() - interval 24 hour ORDER BY dt_id ASC");
                } else if (sizeof($req->all()[0]) == 6) {
                    $val_1 = DB::select("SELECT timing, CASE WHEN $val_1 < $get_range1 THEN '0' WHEN $val_1 > $get_range1 THEN $val_1 END AS $val_1, CASE WHEN $val_2 < $get_range2 THEN '0' WHEN $val_2 > $get_range2 THEN $val_2 END AS $val_2,CASE WHEN $val_3 < $get_range3 THEN '0' WHEN $val_3 > $get_range3 THEN $val_3 END AS $val_3,CASE WHEN $val_4 < $get_range4 THEN '0' WHEN $val_4 > $get_range4 THEN $val_4 END AS $val_4,CASE WHEN $val_5 < $get_range5 THEN '0' WHEN $val_5 > $get_range5 THEN $val_5 END AS $val_5,CASE WHEN $val_6 < $get_range6 THEN '0' WHEN $val_6 > $get_range6 THEN $val_6 END AS $val_6 FROM dt_aio WHERE timing > now() - interval 24 hour ORDER BY dt_id ASC");
                } else if (sizeof($req->all()[0]) == 7) {
                    $val_1 = DB::select("SELECT timing, CASE WHEN $val_1 < $get_range1 THEN '0' WHEN $val_1 > $get_range1 THEN $val_1 END AS $val_1, CASE WHEN $val_2 < $get_range2 THEN '0' WHEN $val_2 > $get_range2 THEN $val_2 END AS $val_2,CASE WHEN $val_3 < $get_range3 THEN '0' WHEN $val_3 > $get_range3 THEN $val_3 END AS $val_3,CASE WHEN $val_4 < $get_range4 THEN '0' WHEN $val_4 > $get_range4 THEN $val_4 END AS $val_4,CASE WHEN $val_5 < $get_range5 THEN '0' WHEN $val_5 > $get_range5 THEN $val_5 END AS $val_5,CASE WHEN $val_6 < $get_range6 THEN '0' WHEN $val_6 > $get_range6 THEN $val_6 END AS $val_6,CASE WHEN $val_7 < $get_range7 THEN '0' WHEN $val_7 > $get_range7 THEN $val_7 END AS $val_7 FROM dt_aio WHERE timing > now() - interval 24 hour ORDER BY dt_id ASC");
                } else if (sizeof($req->all()[0]) == 8) {
                    $val_1 = DB::select("SELECT timing, CASE WHEN $val_1 < $get_range1 THEN '0' WHEN $val_1 > $get_range1 THEN $val_1 END AS $val_1, CASE WHEN $val_2 < $get_range2 THEN '0' WHEN $val_2 > $get_range2 THEN $val_2 END AS $val_2,CASE WHEN $val_3 < $get_range3 THEN '0' WHEN $val_3 > $get_range3 THEN $val_3 END AS $val_3,CASE WHEN $val_4 < $get_range4 THEN '0' WHEN $val_4 > $get_range4 THEN $val_4 END AS $val_4,CASE WHEN $val_5 < $get_range5 THEN '0' WHEN $val_5 > $get_range5 THEN $val_5 END AS $val_5,CASE WHEN $val_6 < $get_range6 THEN '0' WHEN $val_6 > $get_range6 THEN $val_6 END AS $val_6,CASE WHEN $val_7 < $get_range7 THEN '0' WHEN $val_7 > $get_range7 THEN $val_7 END AS $val_7,CASE WHEN $val_8 < $get_range8 THEN '0' WHEN $val_8 > $get_range8 THEN $val_8 END AS $val_8 FROM dt_aio WHERE timing > now() - interval 24 hour ORDER BY dt_id ASC");
                } else if (sizeof($req->all()[0]) == 9) {
                    $val_1 = DB::select("SELECT timing, CASE WHEN $val_1 < $get_range1 THEN '0' WHEN $val_1 > $get_range1 THEN $val_1 END AS $val_1, CASE WHEN $val_2 < $get_range2 THEN '0' WHEN $val_2 > $get_range2 THEN $val_2 END AS $val_2,CASE WHEN $val_3 < $get_range3 THEN '0' WHEN $val_3 > $get_range3 THEN $val_3 END AS $val_3,CASE WHEN $val_4 < $get_range4 THEN '0' WHEN $val_4 > $get_range4 THEN $val_4 END AS $val_4,CASE WHEN $val_5 < $get_range5 THEN '0' WHEN $val_5 > $get_range5 THEN $val_5 END AS $val_5,CASE WHEN $val_6 < $get_range6 THEN '0' WHEN $val_6 > $get_range6 THEN $val_6 END AS $val_6,CASE WHEN $val_7 < $get_range7 THEN '0' WHEN $val_7 > $get_range7 THEN $val_7 END AS $val_7,CASE WHEN $val_8 < $get_range8 THEN '0' WHEN $val_8 > $get_range8 THEN $val_8 END AS $val_8,CASE WHEN $val_9 < $get_range9 THEN '0' WHEN $val_9 > $get_range9 THEN $val_9 END AS $val_9 FROM dt_aio WHERE timing > now() - interval 24 hour ORDER BY dt_id ASC");
                } else if (sizeof($req->all()[0]) == 10) {
                    $val_1 = DB::select("SELECT timing, CASE WHEN $val_1 < $get_range1 THEN '0' WHEN $val_1 > $get_range1 THEN $val_1 END AS $val_1, CASE WHEN $val_2 < $get_range2 THEN '0' WHEN $val_2 > $get_range2 THEN $val_2 END AS $val_2,CASE WHEN $val_3 < $get_range3 THEN '0' WHEN $val_3 > $get_range3 THEN $val_3 END AS $val_3,CASE WHEN $val_4 < $get_range4 THEN '0' WHEN $val_4 > $get_range4 THEN $val_4 END AS $val_4,CASE WHEN $val_5 < $get_range5 THEN '0' WHEN $val_5 > $get_range5 THEN $val_5 END AS $val_5,CASE WHEN $val_6 < $get_range6 THEN '0' WHEN $val_6 > $get_range6 THEN $val_6 END AS $val_6,CASE WHEN $val_7 < $get_range7 THEN '0' WHEN $val_7 > $get_range7 THEN $val_7 END AS $val_7,CASE WHEN $val_8 < $get_range8 THEN '0' WHEN $val_8 > $get_range8 THEN $val_8 END AS $val_8,CASE WHEN $val_9 < $get_range9 THEN '0' WHEN $val_9 > $get_range9 THEN $val_9 END AS $val_9,CASE WHEN $val_10 < $get_range10 THEN '0' WHEN $val_10 > $get_range10 THEN $val_10 END AS $val_10 FROM dt_aio WHERE timing > now() - interval 24 hour ORDER BY dt_id ASC");
                } else if (sizeof($req->all()[0]) == 11) {
                    $val_1 = DB::select("SELECT timing, CASE WHEN $val_1 < $get_range1 THEN '0' WHEN $val_1 > $get_range1 THEN $val_1 END AS $val_1, CASE WHEN $val_2 < $get_range2 THEN '0' WHEN $val_2 > $get_range2 THEN $val_2 END AS $val_2,CASE WHEN $val_3 < $get_range3 THEN '0' WHEN $val_3 > $get_range3 THEN $val_3 END AS $val_3,CASE WHEN $val_4 < $get_range4 THEN '0' WHEN $val_4 > $get_range4 THEN $val_4 END AS $val_4,CASE WHEN $val_5 < $get_range5 THEN '0' WHEN $val_5 > $get_range5 THEN $val_5 END AS $val_5,CASE WHEN $val_6 < $get_range6 THEN '0' WHEN $val_6 > $get_range6 THEN $val_6 END AS $val_6,CASE WHEN $val_7 < $get_range7 THEN '0' WHEN $val_7 > $get_range7 THEN $val_7 END AS $val_7,CASE WHEN $val_8 < $get_range8 THEN '0' WHEN $val_8 > $get_range8 THEN $val_8 END AS $val_8,CASE WHEN $val_9 < $get_range9 THEN '0' WHEN $val_9 > $get_range9 THEN $val_9 END AS $val_9,CASE WHEN $val_10 < $get_range10 THEN '0' WHEN $val_10 > $get_range10 THEN $val_10 END AS $val_10,CASE WHEN $val_11 < $get_range11 THEN '0' WHEN $val_11 > $get_range11 THEN $val_11 END AS $val_11 FROM dt_aio WHERE timing > now() - interval 24 hour ORDER BY dt_id ASC");
                } else if (sizeof($req->all()[0]) == 12) {
                    $val_1 = DB::select("SELECT timing, CASE WHEN $val_1 < $get_range1 THEN '0' WHEN $val_1 > $get_range1 THEN $val_1 END AS $val_1, CASE WHEN $val_2 < $get_range2 THEN '0' WHEN $val_2 > $get_range2 THEN $val_2 END AS $val_2,CASE WHEN $val_3 < $get_range3 THEN '0' WHEN $val_3 > $get_range3 THEN $val_3 END AS $val_3,CASE WHEN $val_4 < $get_range4 THEN '0' WHEN $val_4 > $get_range4 THEN $val_4 END AS $val_4,CASE WHEN $val_5 < $get_range5 THEN '0' WHEN $val_5 > $get_range5 THEN $val_5 END AS $val_5,CASE WHEN $val_6 < $get_range6 THEN '0' WHEN $val_6 > $get_range6 THEN $val_6 END AS $val_6,CASE WHEN $val_7 < $get_range7 THEN '0' WHEN $val_7 > $get_range7 THEN $val_7 END AS $val_7,CASE WHEN $val_8 < $get_range8 THEN '0' WHEN $val_8 > $get_range8 THEN $val_8 END AS $val_8,CASE WHEN $val_9 < $get_range9 THEN '0' WHEN $val_9 > $get_range9 THEN $val_9 END AS $val_9,CASE WHEN $val_10 < $get_range10 THEN '0' WHEN $val_10 > $get_range10 THEN $val_10 END AS $val_10,CASE WHEN $val_11 < $get_range11 THEN '0' WHEN $val_11 > $get_range11 THEN $val_11 END AS $val_11,CASE WHEN $val_12 < $get_range12 THEN '0' WHEN $val_12 > $get_range12 THEN $val_12 END AS $val_12 FROM dt_aio WHERE timing > now() - interval 24 hour ORDER BY dt_id ASC");
                } else if (sizeof($req->all()[0]) == 13) {
                    $val_1 = DB::select("SELECT timing, CASE WHEN $val_1 < $get_range1 THEN '0' WHEN $val_1 > $get_range1 THEN $val_1 END AS $val_1, CASE WHEN $val_2 < $get_range2 THEN '0' WHEN $val_2 > $get_range2 THEN $val_2 END AS $val_2,CASE WHEN $val_3 < $get_range3 THEN '0' WHEN $val_3 > $get_range3 THEN $val_3 END AS $val_3,CASE WHEN $val_4 < $get_range4 THEN '0' WHEN $val_4 > $get_range4 THEN $val_4 END AS $val_4,CASE WHEN $val_5 < $get_range5 THEN '0' WHEN $val_5 > $get_range5 THEN $val_5 END AS $val_5,CASE WHEN $val_6 < $get_range6 THEN '0' WHEN $val_6 > $get_range6 THEN $val_6 END AS $val_6,CASE WHEN $val_7 < $get_range7 THEN '0' WHEN $val_7 > $get_range7 THEN $val_7 END AS $val_7,CASE WHEN $val_8 < $get_range8 THEN '0' WHEN $val_8 > $get_range8 THEN $val_8 END AS $val_8,CASE WHEN $val_9 < $get_range9 THEN '0' WHEN $val_9 > $get_range9 THEN $val_9 END AS $val_9,CASE WHEN $val_10 < $get_range10 THEN '0' WHEN $val_10 > $get_range10 THEN $val_10 END AS $val_10,CASE WHEN $val_11 < $get_range11 THEN '0' WHEN $val_11 > $get_range11 THEN $val_11 END AS $val_11,CASE WHEN $val_12 < $get_range12 THEN '0' WHEN $val_12 > $get_range12 THEN $val_12 END AS $val_12,CASE WHEN $val_13 < $get_range13 THEN '0' WHEN $val_13 > $get_range13 THEN $val_13 END AS $val_13 FROM dt_aio WHERE timing > now() - interval 24 hour ORDER BY dt_id ASC");
                } else if (sizeof($req->all()[0]) == 14) {
                    $val_1 = DB::select("SELECT timing, CASE WHEN $val_1 < $get_range1 THEN '0' WHEN $val_1 > $get_range1 THEN $val_1 END AS $val_1, CASE WHEN $val_2 < $get_range2 THEN '0' WHEN $val_2 > $get_range2 THEN $val_2 END AS $val_2,CASE WHEN $val_3 < $get_range3 THEN '0' WHEN $val_3 > $get_range3 THEN $val_3 END AS $val_3,CASE WHEN $val_4 < $get_range4 THEN '0' WHEN $val_4 > $get_range4 THEN $val_4 END AS $val_4,CASE WHEN $val_5 < $get_range5 THEN '0' WHEN $val_5 > $get_range5 THEN $val_5 END AS $val_5,CASE WHEN $val_6 < $get_range6 THEN '0' WHEN $val_6 > $get_range6 THEN $val_6 END AS $val_6,CASE WHEN $val_7 < $get_range7 THEN '0' WHEN $val_7 > $get_range7 THEN $val_7 END AS $val_7,CASE WHEN $val_8 < $get_range8 THEN '0' WHEN $val_8 > $get_range8 THEN $val_8 END AS $val_8,CASE WHEN $val_9 < $get_range9 THEN '0' WHEN $val_9 > $get_range9 THEN $val_9 END AS $val_9,CASE WHEN $val_10 < $get_range10 THEN '0' WHEN $val_10 > $get_range10 THEN $val_10 END AS $val_10,CASE WHEN $val_11 < $get_range11 THEN '0' WHEN $val_11 > $get_range11 THEN $val_11 END AS $val_11,CASE WHEN $val_12 < $get_range12 THEN '0' WHEN $val_12 > $get_range12 THEN $val_12 END AS $val_12,CASE WHEN $val_13 < $get_range13 THEN '0' WHEN $val_13 > $get_range13 THEN $val_13 END AS $val_13,CASE WHEN $val_14 < $get_range14 THEN '0' WHEN $val_14 > $get_range14 THEN $val_14 END AS $val_14 FROM dt_aio WHERE timing > now() - interval 24 hour ORDER BY dt_id ASC");
                } else if (sizeof($req->all()[0]) == 15) {
                    $val_1 = DB::select("SELECT timing, CASE WHEN $val_1 < $get_range1 THEN '0' WHEN $val_1 > $get_range1 THEN $val_1 END AS $val_1, CASE WHEN $val_2 < $get_range2 THEN '0' WHEN $val_2 > $get_range2 THEN $val_2 END AS $val_2,CASE WHEN $val_3 < $get_range3 THEN '0' WHEN $val_3 > $get_range3 THEN $val_3 END AS $val_3,CASE WHEN $val_4 < $get_range4 THEN '0' WHEN $val_4 > $get_range4 THEN $val_4 END AS $val_4,CASE WHEN $val_5 < $get_range5 THEN '0' WHEN $val_5 > $get_range5 THEN $val_5 END AS $val_5,CASE WHEN $val_6 < $get_range6 THEN '0' WHEN $val_6 > $get_range6 THEN $val_6 END AS $val_6,CASE WHEN $val_7 < $get_range7 THEN '0' WHEN $val_7 > $get_range7 THEN $val_7 END AS $val_7,CASE WHEN $val_8 < $get_range8 THEN '0' WHEN $val_8 > $get_range8 THEN $val_8 END AS $val_8,CASE WHEN $val_9 < $get_range9 THEN '0' WHEN $val_9 > $get_range9 THEN $val_9 END AS $val_9,CASE WHEN $val_10 < $get_range10 THEN '0' WHEN $val_10 > $get_range10 THEN $val_10 END AS $val_10,CASE WHEN $val_11 < $get_range11 THEN '0' WHEN $val_11 > $get_range11 THEN $val_11 END AS $val_11,CASE WHEN $val_12 < $get_range12 THEN '0' WHEN $val_12 > $get_range12 THEN $val_12 END AS $val_12,CASE WHEN $val_13 < $get_range13 THEN '0' WHEN $val_13 > $get_range13 THEN $val_13 END AS $val_13,CASE WHEN $val_14 < $get_range14 THEN '0' WHEN $val_14 > $get_range14 THEN $val_14 END AS $val_14,CASE WHEN $val_15 < $get_range15 THEN '0' WHEN $val_15 > $get_range15 THEN $val_15 END AS $val_15 FROM dt_aio WHERE timing > now() - interval 24 hour ORDER BY dt_id ASC");
                } else if (sizeof($req->all()[0]) == 16) {
                    $val_1 = DB::select("SELECT timing, CASE WHEN $val_1 < $get_range1 THEN '0' WHEN $val_1 > $get_range1 THEN $val_1 END AS $val_1, CASE WHEN $val_2 < $get_range2 THEN '0' WHEN $val_2 > $get_range2 THEN $val_2 END AS $val_2,CASE WHEN $val_3 < $get_range3 THEN '0' WHEN $val_3 > $get_range3 THEN $val_3 END AS $val_3,CASE WHEN $val_4 < $get_range4 THEN '0' WHEN $val_4 > $get_range4 THEN $val_4 END AS $val_4,CASE WHEN $val_5 < $get_range5 THEN '0' WHEN $val_5 > $get_range5 THEN $val_5 END AS $val_5,CASE WHEN $val_6 < $get_range6 THEN '0' WHEN $val_6 > $get_range6 THEN $val_6 END AS $val_6,CASE WHEN $val_7 < $get_range7 THEN '0' WHEN $val_7 > $get_range7 THEN $val_7 END AS $val_7,CASE WHEN $val_8 < $get_range8 THEN '0' WHEN $val_8 > $get_range8 THEN $val_8 END AS $val_8,CASE WHEN $val_9 < $get_range9 THEN '0' WHEN $val_9 > $get_range9 THEN $val_9 END AS $val_9,CASE WHEN $val_10 < $get_range10 THEN '0' WHEN $val_10 > $get_range10 THEN $val_10 END AS $val_10,CASE WHEN $val_11 < $get_range11 THEN '0' WHEN $val_11 > $get_range11 THEN $val_11 END AS $val_11,CASE WHEN $val_12 < $get_range12 THEN '0' WHEN $val_12 > $get_range12 THEN $val_12 END AS $val_12,CASE WHEN $val_13 < $get_range13 THEN '0' WHEN $val_13 > $get_range13 THEN $val_13 END AS $val_13,CASE WHEN $val_14 < $get_range14 THEN '0' WHEN $val_14 > $get_range14 THEN $val_14 END AS $val_14,CASE WHEN $val_15 < $get_range15 THEN '0' WHEN $val_15 > $get_range15 THEN $val_15 END AS $val_15,CASE WHEN $val_16 < $get_range16 THEN '0' WHEN $val_16 > $get_range16 THEN $val_16 END AS $val_16 FROM dt_aio WHERE timing > now() - interval 24 hour ORDER BY dt_id ASC");
                }
            } elseif ($timing == '2') {
                if (sizeof($req->all()[0]) == 1) {
                    $val_1 = DB::select("SELECT timing, CASE WHEN $val_1 < $get_range1 THEN '0' WHEN $val_1 > $get_range1 THEN $val_1 END AS $val_1 FROM dt_aio WHERE timing BETWEEN '$con_date4' AND '$con_date' ORDER BY dt_id ASC");
                } else if (sizeof($req->all()[0]) == 2) {
                    $val_1 = DB::select("SELECT timing, CASE WHEN $val_1 < $get_range1 THEN '0' WHEN $val_1 > $get_range1 THEN $val_1 END AS $val_1, CASE WHEN $val_2 < $get_range2 THEN '0' WHEN $val_2 > $get_range2 THEN $val_2 END AS $val_2 FROM dt_aio WHERE timing BETWEEN '$con_date4' AND '$con_date' ORDER BY dt_id ASC");
                } else if (sizeof($req->all()[0]) == 3) {
                    $val_1 = DB::select("SELECT timing, CASE WHEN $val_1 < $get_range1 THEN '0' WHEN $val_1 > $get_range1 THEN $val_1 END AS $val_1, CASE WHEN $val_2 < $get_range2 THEN '0' WHEN $val_2 > $get_range2 THEN $val_2 END AS $val_2,CASE WHEN $val_3 < $get_range3 THEN '0' WHEN $val_3 > $get_range3 THEN $val_3 END AS $val_3 FROM dt_aio WHERE timing BETWEEN '$con_date4' AND '$con_date' ORDER BY dt_id ASC");
                } else if (sizeof($req->all()[0]) == 4) {
                    $val_1 = DB::select("SELECT timing, CASE WHEN $val_1 < $get_range1 THEN '0' WHEN $val_1 > $get_range1 THEN $val_1 END AS $val_1, CASE WHEN $val_2 < $get_range2 THEN '0' WHEN $val_2 > $get_range2 THEN $val_2 END AS $val_2,CASE WHEN $val_3 < $get_range3 THEN '0' WHEN $val_3 > $get_range3 THEN $val_3 END AS $val_3,CASE WHEN $val_4 < $get_range4 THEN '0' WHEN $val_4 > $get_range4 THEN $val_4 END AS $val_4 FROM dt_aio WHERE timing BETWEEN '$con_date4' AND '$con_date' ORDER BY dt_id ASC");
                } else if (sizeof($req->all()[0]) == 5) {
                    $val_1 = DB::select("SELECT timing, CASE WHEN $val_1 < $get_range1 THEN '0' WHEN $val_1 > $get_range1 THEN $val_1 END AS $val_1, CASE WHEN $val_2 < $get_range2 THEN '0' WHEN $val_2 > $get_range2 THEN $val_2 END AS $val_2,CASE WHEN $val_3 < $get_range3 THEN '0' WHEN $val_3 > $get_range3 THEN $val_3 END AS $val_3,CASE WHEN $val_4 < $get_range4 THEN '0' WHEN $val_4 > $get_range4 THEN $val_4 END AS $val_4,CASE WHEN $val_5 < $get_range5 THEN '0' WHEN $val_5 > $get_range5 THEN $val_5 END AS $val_5 FROM dt_aio WHERE timing BETWEEN '$con_date4' AND '$con_date' ORDER BY dt_id ASC");
                } else if (sizeof($req->all()[0]) == 6) {
                    $val_1 = DB::select("SELECT timing, CASE WHEN $val_1 < $get_range1 THEN '0' WHEN $val_1 > $get_range1 THEN $val_1 END AS $val_1, CASE WHEN $val_2 < $get_range2 THEN '0' WHEN $val_2 > $get_range2 THEN $val_2 END AS $val_2,CASE WHEN $val_3 < $get_range3 THEN '0' WHEN $val_3 > $get_range3 THEN $val_3 END AS $val_3,CASE WHEN $val_4 < $get_range4 THEN '0' WHEN $val_4 > $get_range4 THEN $val_4 END AS $val_4,CASE WHEN $val_5 < $get_range5 THEN '0' WHEN $val_5 > $get_range5 THEN $val_5 END AS $val_5,CASE WHEN $val_6 < $get_range6 THEN '0' WHEN $val_6 > $get_range6 THEN $val_6 END AS $val_6 FROM dt_aio WHERE timing BETWEEN '$con_date4' AND '$con_date' ORDER BY dt_id ASC");
                } else if (sizeof($req->all()[0]) == 7) {
                    $val_1 = DB::select("SELECT timing, CASE WHEN $val_1 < $get_range1 THEN '0' WHEN $val_1 > $get_range1 THEN $val_1 END AS $val_1, CASE WHEN $val_2 < $get_range2 THEN '0' WHEN $val_2 > $get_range2 THEN $val_2 END AS $val_2,CASE WHEN $val_3 < $get_range3 THEN '0' WHEN $val_3 > $get_range3 THEN $val_3 END AS $val_3,CASE WHEN $val_4 < $get_range4 THEN '0' WHEN $val_4 > $get_range4 THEN $val_4 END AS $val_4,CASE WHEN $val_5 < $get_range5 THEN '0' WHEN $val_5 > $get_range5 THEN $val_5 END AS $val_5,CASE WHEN $val_6 < $get_range6 THEN '0' WHEN $val_6 > $get_range6 THEN $val_6 END AS $val_6,CASE WHEN $val_7 < $get_range7 THEN '0' WHEN $val_7 > $get_range7 THEN $val_7 END AS $val_7 FROM dt_aio WHERE timing BETWEEN '$con_date4' AND '$con_date' ORDER BY dt_id ASC");
                } else if (sizeof($req->all()[0]) == 8) {
                    $val_1 = DB::select("SELECT timing, CASE WHEN $val_1 < $get_range1 THEN '0' WHEN $val_1 > $get_range1 THEN $val_1 END AS $val_1, CASE WHEN $val_2 < $get_range2 THEN '0' WHEN $val_2 > $get_range2 THEN $val_2 END AS $val_2,CASE WHEN $val_3 < $get_range3 THEN '0' WHEN $val_3 > $get_range3 THEN $val_3 END AS $val_3,CASE WHEN $val_4 < $get_range4 THEN '0' WHEN $val_4 > $get_range4 THEN $val_4 END AS $val_4,CASE WHEN $val_5 < $get_range5 THEN '0' WHEN $val_5 > $get_range5 THEN $val_5 END AS $val_5,CASE WHEN $val_6 < $get_range6 THEN '0' WHEN $val_6 > $get_range6 THEN $val_6 END AS $val_6,CASE WHEN $val_7 < $get_range7 THEN '0' WHEN $val_7 > $get_range7 THEN $val_7 END AS $val_7,CASE WHEN $val_8 < $get_range8 THEN '0' WHEN $val_8 > $get_range8 THEN $val_8 END AS $val_8 FROM dt_aio WHERE timing BETWEEN '$con_date4' AND '$con_date' ORDER BY dt_id ASC");
                } else if (sizeof($req->all()[0]) == 9) {
                    $val_1 = DB::select("SELECT timing, CASE WHEN $val_1 < $get_range1 THEN '0' WHEN $val_1 > $get_range1 THEN $val_1 END AS $val_1, CASE WHEN $val_2 < $get_range2 THEN '0' WHEN $val_2 > $get_range2 THEN $val_2 END AS $val_2,CASE WHEN $val_3 < $get_range3 THEN '0' WHEN $val_3 > $get_range3 THEN $val_3 END AS $val_3,CASE WHEN $val_4 < $get_range4 THEN '0' WHEN $val_4 > $get_range4 THEN $val_4 END AS $val_4,CASE WHEN $val_5 < $get_range5 THEN '0' WHEN $val_5 > $get_range5 THEN $val_5 END AS $val_5,CASE WHEN $val_6 < $get_range6 THEN '0' WHEN $val_6 > $get_range6 THEN $val_6 END AS $val_6,CASE WHEN $val_7 < $get_range7 THEN '0' WHEN $val_7 > $get_range7 THEN $val_7 END AS $val_7,CASE WHEN $val_8 < $get_range8 THEN '0' WHEN $val_8 > $get_range8 THEN $val_8 END AS $val_8,CASE WHEN $val_9 < $get_range9 THEN '0' WHEN $val_9 > $get_range9 THEN $val_9 END AS $val_9 FROM dt_aio WHERE timing BETWEEN '$con_date4' AND '$con_date' ORDER BY dt_id ASC");
                } else if (sizeof($req->all()[0]) == 10) {
                    $val_1 = DB::select("SELECT timing, CASE WHEN $val_1 < $get_range1 THEN '0' WHEN $val_1 > $get_range1 THEN $val_1 END AS $val_1, CASE WHEN $val_2 < $get_range2 THEN '0' WHEN $val_2 > $get_range2 THEN $val_2 END AS $val_2,CASE WHEN $val_3 < $get_range3 THEN '0' WHEN $val_3 > $get_range3 THEN $val_3 END AS $val_3,CASE WHEN $val_4 < $get_range4 THEN '0' WHEN $val_4 > $get_range4 THEN $val_4 END AS $val_4,CASE WHEN $val_5 < $get_range5 THEN '0' WHEN $val_5 > $get_range5 THEN $val_5 END AS $val_5,CASE WHEN $val_6 < $get_range6 THEN '0' WHEN $val_6 > $get_range6 THEN $val_6 END AS $val_6,CASE WHEN $val_7 < $get_range7 THEN '0' WHEN $val_7 > $get_range7 THEN $val_7 END AS $val_7,CASE WHEN $val_8 < $get_range8 THEN '0' WHEN $val_8 > $get_range8 THEN $val_8 END AS $val_8,CASE WHEN $val_9 < $get_range9 THEN '0' WHEN $val_9 > $get_range9 THEN $val_9 END AS $val_9,CASE WHEN $val_10 < $get_range10 THEN '0' WHEN $val_10 > $get_range10 THEN $val_10 END AS $val_10 FROM dt_aio WHERE timing BETWEEN '$con_date4' AND '$con_date' ORDER BY dt_id ASC");
                } else if (sizeof($req->all()[0]) == 11) {
                    $val_1 = DB::select("SELECT timing, CASE WHEN $val_1 < $get_range1 THEN '0' WHEN $val_1 > $get_range1 THEN $val_1 END AS $val_1, CASE WHEN $val_2 < $get_range2 THEN '0' WHEN $val_2 > $get_range2 THEN $val_2 END AS $val_2,CASE WHEN $val_3 < $get_range3 THEN '0' WHEN $val_3 > $get_range3 THEN $val_3 END AS $val_3,CASE WHEN $val_4 < $get_range4 THEN '0' WHEN $val_4 > $get_range4 THEN $val_4 END AS $val_4,CASE WHEN $val_5 < $get_range5 THEN '0' WHEN $val_5 > $get_range5 THEN $val_5 END AS $val_5,CASE WHEN $val_6 < $get_range6 THEN '0' WHEN $val_6 > $get_range6 THEN $val_6 END AS $val_6,CASE WHEN $val_7 < $get_range7 THEN '0' WHEN $val_7 > $get_range7 THEN $val_7 END AS $val_7,CASE WHEN $val_8 < $get_range8 THEN '0' WHEN $val_8 > $get_range8 THEN $val_8 END AS $val_8,CASE WHEN $val_9 < $get_range9 THEN '0' WHEN $val_9 > $get_range9 THEN $val_9 END AS $val_9,CASE WHEN $val_10 < $get_range10 THEN '0' WHEN $val_10 > $get_range10 THEN $val_10 END AS $val_10,CASE WHEN $val_11 < $get_range11 THEN '0' WHEN $val_11 > $get_range11 THEN $val_11 END AS $val_11 FROM dt_aio WHERE timing BETWEEN '$con_date4' AND '$con_date' ORDER BY dt_id ASC");
                } else if (sizeof($req->all()[0]) == 12) {
                    $val_1 = DB::select("SELECT timing, CASE WHEN $val_1 < $get_range1 THEN '0' WHEN $val_1 > $get_range1 THEN $val_1 END AS $val_1, CASE WHEN $val_2 < $get_range2 THEN '0' WHEN $val_2 > $get_range2 THEN $val_2 END AS $val_2,CASE WHEN $val_3 < $get_range3 THEN '0' WHEN $val_3 > $get_range3 THEN $val_3 END AS $val_3,CASE WHEN $val_4 < $get_range4 THEN '0' WHEN $val_4 > $get_range4 THEN $val_4 END AS $val_4,CASE WHEN $val_5 < $get_range5 THEN '0' WHEN $val_5 > $get_range5 THEN $val_5 END AS $val_5,CASE WHEN $val_6 < $get_range6 THEN '0' WHEN $val_6 > $get_range6 THEN $val_6 END AS $val_6,CASE WHEN $val_7 < $get_range7 THEN '0' WHEN $val_7 > $get_range7 THEN $val_7 END AS $val_7,CASE WHEN $val_8 < $get_range8 THEN '0' WHEN $val_8 > $get_range8 THEN $val_8 END AS $val_8,CASE WHEN $val_9 < $get_range9 THEN '0' WHEN $val_9 > $get_range9 THEN $val_9 END AS $val_9,CASE WHEN $val_10 < $get_range10 THEN '0' WHEN $val_10 > $get_range10 THEN $val_10 END AS $val_10,CASE WHEN $val_11 < $get_range11 THEN '0' WHEN $val_11 > $get_range11 THEN $val_11 END AS $val_11,CASE WHEN $val_12 < $get_range12 THEN '0' WHEN $val_12 > $get_range12 THEN $val_12 END AS $val_12 FROM dt_aio WHERE timing BETWEEN '$con_date4' AND '$con_date' ORDER BY dt_id ASC");
                } else if (sizeof($req->all()[0]) == 13) {
                    $val_1 = DB::select("SELECT timing, CASE WHEN $val_1 < $get_range1 THEN '0' WHEN $val_1 > $get_range1 THEN $val_1 END AS $val_1, CASE WHEN $val_2 < $get_range2 THEN '0' WHEN $val_2 > $get_range2 THEN $val_2 END AS $val_2,CASE WHEN $val_3 < $get_range3 THEN '0' WHEN $val_3 > $get_range3 THEN $val_3 END AS $val_3,CASE WHEN $val_4 < $get_range4 THEN '0' WHEN $val_4 > $get_range4 THEN $val_4 END AS $val_4,CASE WHEN $val_5 < $get_range5 THEN '0' WHEN $val_5 > $get_range5 THEN $val_5 END AS $val_5,CASE WHEN $val_6 < $get_range6 THEN '0' WHEN $val_6 > $get_range6 THEN $val_6 END AS $val_6,CASE WHEN $val_7 < $get_range7 THEN '0' WHEN $val_7 > $get_range7 THEN $val_7 END AS $val_7,CASE WHEN $val_8 < $get_range8 THEN '0' WHEN $val_8 > $get_range8 THEN $val_8 END AS $val_8,CASE WHEN $val_9 < $get_range9 THEN '0' WHEN $val_9 > $get_range9 THEN $val_9 END AS $val_9,CASE WHEN $val_10 < $get_range10 THEN '0' WHEN $val_10 > $get_range10 THEN $val_10 END AS $val_10,CASE WHEN $val_11 < $get_range11 THEN '0' WHEN $val_11 > $get_range11 THEN $val_11 END AS $val_11,CASE WHEN $val_12 < $get_range12 THEN '0' WHEN $val_12 > $get_range12 THEN $val_12 END AS $val_12,CASE WHEN $val_13 < $get_range13 THEN '0' WHEN $val_13 > $get_range13 THEN $val_13 END AS $val_13 FROM dt_aio WHERE timing BETWEEN '$con_date4' AND '$con_date' ORDER BY dt_id ASC");
                } else if (sizeof($req->all()[0]) == 14) {
                    $val_1 = DB::select("SELECT timing, CASE WHEN $val_1 < $get_range1 THEN '0' WHEN $val_1 > $get_range1 THEN $val_1 END AS $val_1, CASE WHEN $val_2 < $get_range2 THEN '0' WHEN $val_2 > $get_range2 THEN $val_2 END AS $val_2,CASE WHEN $val_3 < $get_range3 THEN '0' WHEN $val_3 > $get_range3 THEN $val_3 END AS $val_3,CASE WHEN $val_4 < $get_range4 THEN '0' WHEN $val_4 > $get_range4 THEN $val_4 END AS $val_4,CASE WHEN $val_5 < $get_range5 THEN '0' WHEN $val_5 > $get_range5 THEN $val_5 END AS $val_5,CASE WHEN $val_6 < $get_range6 THEN '0' WHEN $val_6 > $get_range6 THEN $val_6 END AS $val_6,CASE WHEN $val_7 < $get_range7 THEN '0' WHEN $val_7 > $get_range7 THEN $val_7 END AS $val_7,CASE WHEN $val_8 < $get_range8 THEN '0' WHEN $val_8 > $get_range8 THEN $val_8 END AS $val_8,CASE WHEN $val_9 < $get_range9 THEN '0' WHEN $val_9 > $get_range9 THEN $val_9 END AS $val_9,CASE WHEN $val_10 < $get_range10 THEN '0' WHEN $val_10 > $get_range10 THEN $val_10 END AS $val_10,CASE WHEN $val_11 < $get_range11 THEN '0' WHEN $val_11 > $get_range11 THEN $val_11 END AS $val_11,CASE WHEN $val_12 < $get_range12 THEN '0' WHEN $val_12 > $get_range12 THEN $val_12 END AS $val_12,CASE WHEN $val_13 < $get_range13 THEN '0' WHEN $val_13 > $get_range13 THEN $val_13 END AS $val_13,CASE WHEN $val_14 < $get_range14 THEN '0' WHEN $val_14 > $get_range14 THEN $val_14 END AS $val_14 FROM dt_aio WHERE timing BETWEEN '$con_date4' AND '$con_date' ORDER BY dt_id ASC");
                } else if (sizeof($req->all()[0]) == 15) {
                    $val_1 = DB::select("SELECT timing, CASE WHEN $val_1 < $get_range1 THEN '0' WHEN $val_1 > $get_range1 THEN $val_1 END AS $val_1, CASE WHEN $val_2 < $get_range2 THEN '0' WHEN $val_2 > $get_range2 THEN $val_2 END AS $val_2,CASE WHEN $val_3 < $get_range3 THEN '0' WHEN $val_3 > $get_range3 THEN $val_3 END AS $val_3,CASE WHEN $val_4 < $get_range4 THEN '0' WHEN $val_4 > $get_range4 THEN $val_4 END AS $val_4,CASE WHEN $val_5 < $get_range5 THEN '0' WHEN $val_5 > $get_range5 THEN $val_5 END AS $val_5,CASE WHEN $val_6 < $get_range6 THEN '0' WHEN $val_6 > $get_range6 THEN $val_6 END AS $val_6,CASE WHEN $val_7 < $get_range7 THEN '0' WHEN $val_7 > $get_range7 THEN $val_7 END AS $val_7,CASE WHEN $val_8 < $get_range8 THEN '0' WHEN $val_8 > $get_range8 THEN $val_8 END AS $val_8,CASE WHEN $val_9 < $get_range9 THEN '0' WHEN $val_9 > $get_range9 THEN $val_9 END AS $val_9,CASE WHEN $val_10 < $get_range10 THEN '0' WHEN $val_10 > $get_range10 THEN $val_10 END AS $val_10,CASE WHEN $val_11 < $get_range11 THEN '0' WHEN $val_11 > $get_range11 THEN $val_11 END AS $val_11,CASE WHEN $val_12 < $get_range12 THEN '0' WHEN $val_12 > $get_range12 THEN $val_12 END AS $val_12,CASE WHEN $val_13 < $get_range13 THEN '0' WHEN $val_13 > $get_range13 THEN $val_13 END AS $val_13,CASE WHEN $val_14 < $get_range14 THEN '0' WHEN $val_14 > $get_range14 THEN $val_14 END AS $val_14,CASE WHEN $val_15 < $get_range15 THEN '0' WHEN $val_15 > $get_range15 THEN $val_15 END AS $val_15 FROM dt_aio WHERE timing BETWEEN '$con_date4' AND '$con_date' ORDER BY dt_id ASC");
                } else if (sizeof($req->all()[0]) == 16) {
                    $val_1 = DB::select("SELECT timing, CASE WHEN $val_1 < $get_range1 THEN '0' WHEN $val_1 > $get_range1 THEN $val_1 END AS $val_1, CASE WHEN $val_2 < $get_range2 THEN '0' WHEN $val_2 > $get_range2 THEN $val_2 END AS $val_2,CASE WHEN $val_3 < $get_range3 THEN '0' WHEN $val_3 > $get_range3 THEN $val_3 END AS $val_3,CASE WHEN $val_4 < $get_range4 THEN '0' WHEN $val_4 > $get_range4 THEN $val_4 END AS $val_4,CASE WHEN $val_5 < $get_range5 THEN '0' WHEN $val_5 > $get_range5 THEN $val_5 END AS $val_5,CASE WHEN $val_6 < $get_range6 THEN '0' WHEN $val_6 > $get_range6 THEN $val_6 END AS $val_6,CASE WHEN $val_7 < $get_range7 THEN '0' WHEN $val_7 > $get_range7 THEN $val_7 END AS $val_7,CASE WHEN $val_8 < $get_range8 THEN '0' WHEN $val_8 > $get_range8 THEN $val_8 END AS $val_8,CASE WHEN $val_9 < $get_range9 THEN '0' WHEN $val_9 > $get_range9 THEN $val_9 END AS $val_9,CASE WHEN $val_10 < $get_range10 THEN '0' WHEN $val_10 > $get_range10 THEN $val_10 END AS $val_10,CASE WHEN $val_11 < $get_range11 THEN '0' WHEN $val_11 > $get_range11 THEN $val_11 END AS $val_11,CASE WHEN $val_12 < $get_range12 THEN '0' WHEN $val_12 > $get_range12 THEN $val_12 END AS $val_12,CASE WHEN $val_13 < $get_range13 THEN '0' WHEN $val_13 > $get_range13 THEN $val_13 END AS $val_13,CASE WHEN $val_14 < $get_range14 THEN '0' WHEN $val_14 > $get_range14 THEN $val_14 END AS $val_14,CASE WHEN $val_15 < $get_range15 THEN '0' WHEN $val_15 > $get_range15 THEN $val_15 END AS $val_15,CASE WHEN $val_16 < $get_range16 THEN '0' WHEN $val_16 > $get_range16 THEN $val_16 END AS $val_16 FROM dt_aio WHERE timing BETWEEN '$con_date4' AND '$con_date' ORDER BY dt_id ASC");
                }
            } elseif ($timing == '3') {
                if (sizeof($req->all()[0]) == 1) {
                    $val_1 = DB::select("SELECT timing, CASE WHEN $val_1 < $get_range1 THEN '0' WHEN $val_1 > $get_range1 THEN $val_1 END AS $val_1 FROM dt_aio WHERE timing BETWEEN '$con_date2' AND '$con_date' ORDER BY dt_id ASC");
                } else if (sizeof($req->all()[0]) == 2) {
                    $val_1 = DB::select("SELECT timing, CASE WHEN $val_1 < $get_range1 THEN '0' WHEN $val_1 > $get_range1 THEN $val_1 END AS $val_1, CASE WHEN $val_2 < $get_range2 THEN '0' WHEN $val_2 > $get_range2 THEN $val_2 END AS $val_2 FROM dt_aio WHERE timing BETWEEN '$con_date2' AND '$con_date' ORDER BY dt_id ASC");
                } else if (sizeof($req->all()[0]) == 3) {
                    $val_1 = DB::select("SELECT timing, CASE WHEN $val_1 < $get_range1 THEN '0' WHEN $val_1 > $get_range1 THEN $val_1 END AS $val_1, CASE WHEN $val_2 < $get_range2 THEN '0' WHEN $val_2 > $get_range2 THEN $val_2 END AS $val_2,CASE WHEN $val_3 < $get_range3 THEN '0' WHEN $val_3 > $get_range3 THEN $val_3 END AS $val_3 FROM dt_aio WHERE timing BETWEEN '$con_date2' AND '$con_date' ORDER BY dt_id ASC");
                } else if (sizeof($req->all()[0]) == 4) {
                    $val_1 = DB::select("SELECT timing, CASE WHEN $val_1 < $get_range1 THEN '0' WHEN $val_1 > $get_range1 THEN $val_1 END AS $val_1, CASE WHEN $val_2 < $get_range2 THEN '0' WHEN $val_2 > $get_range2 THEN $val_2 END AS $val_2,CASE WHEN $val_3 < $get_range3 THEN '0' WHEN $val_3 > $get_range3 THEN $val_3 END AS $val_3,CASE WHEN $val_4 < $get_range4 THEN '0' WHEN $val_4 > $get_range4 THEN $val_4 END AS $val_4 FROM dt_aio WHERE timing BETWEEN '$con_date2' AND '$con_date' ORDER BY dt_id ASC");
                } else if (sizeof($req->all()[0]) == 5) {
                    $val_1 = DB::select("SELECT timing, CASE WHEN $val_1 < $get_range1 THEN '0' WHEN $val_1 > $get_range1 THEN $val_1 END AS $val_1, CASE WHEN $val_2 < $get_range2 THEN '0' WHEN $val_2 > $get_range2 THEN $val_2 END AS $val_2,CASE WHEN $val_3 < $get_range3 THEN '0' WHEN $val_3 > $get_range3 THEN $val_3 END AS $val_3,CASE WHEN $val_4 < $get_range4 THEN '0' WHEN $val_4 > $get_range4 THEN $val_4 END AS $val_4,CASE WHEN $val_5 < $get_range5 THEN '0' WHEN $val_5 > $get_range5 THEN $val_5 END AS $val_5 FROM dt_aio WHERE timing BETWEEN '$con_date2' AND '$con_date' ORDER BY dt_id ASC");
                } else if (sizeof($req->all()[0]) == 6) {
                    $val_1 = DB::select("SELECT timing, CASE WHEN $val_1 < $get_range1 THEN '0' WHEN $val_1 > $get_range1 THEN $val_1 END AS $val_1, CASE WHEN $val_2 < $get_range2 THEN '0' WHEN $val_2 > $get_range2 THEN $val_2 END AS $val_2,CASE WHEN $val_3 < $get_range3 THEN '0' WHEN $val_3 > $get_range3 THEN $val_3 END AS $val_3,CASE WHEN $val_4 < $get_range4 THEN '0' WHEN $val_4 > $get_range4 THEN $val_4 END AS $val_4,CASE WHEN $val_5 < $get_range5 THEN '0' WHEN $val_5 > $get_range5 THEN $val_5 END AS $val_5,CASE WHEN $val_6 < $get_range6 THEN '0' WHEN $val_6 > $get_range6 THEN $val_6 END AS $val_6 FROM dt_aio WHERE timing BETWEEN '$con_date2' AND '$con_date' ORDER BY dt_id ASC");
                } else if (sizeof($req->all()[0]) == 7) {
                    $val_1 = DB::select("SELECT timing, CASE WHEN $val_1 < $get_range1 THEN '0' WHEN $val_1 > $get_range1 THEN $val_1 END AS $val_1, CASE WHEN $val_2 < $get_range2 THEN '0' WHEN $val_2 > $get_range2 THEN $val_2 END AS $val_2,CASE WHEN $val_3 < $get_range3 THEN '0' WHEN $val_3 > $get_range3 THEN $val_3 END AS $val_3,CASE WHEN $val_4 < $get_range4 THEN '0' WHEN $val_4 > $get_range4 THEN $val_4 END AS $val_4,CASE WHEN $val_5 < $get_range5 THEN '0' WHEN $val_5 > $get_range5 THEN $val_5 END AS $val_5,CASE WHEN $val_6 < $get_range6 THEN '0' WHEN $val_6 > $get_range6 THEN $val_6 END AS $val_6,CASE WHEN $val_7 < $get_range7 THEN '0' WHEN $val_7 > $get_range7 THEN $val_7 END AS $val_7 FROM dt_aio WHERE timing BETWEEN '$con_date2' AND '$con_date' ORDER BY dt_id ASC");
                } else if (sizeof($req->all()[0]) == 8) {
                    $val_1 = DB::select("SELECT timing, CASE WHEN $val_1 < $get_range1 THEN '0' WHEN $val_1 > $get_range1 THEN $val_1 END AS $val_1, CASE WHEN $val_2 < $get_range2 THEN '0' WHEN $val_2 > $get_range2 THEN $val_2 END AS $val_2,CASE WHEN $val_3 < $get_range3 THEN '0' WHEN $val_3 > $get_range3 THEN $val_3 END AS $val_3,CASE WHEN $val_4 < $get_range4 THEN '0' WHEN $val_4 > $get_range4 THEN $val_4 END AS $val_4,CASE WHEN $val_5 < $get_range5 THEN '0' WHEN $val_5 > $get_range5 THEN $val_5 END AS $val_5,CASE WHEN $val_6 < $get_range6 THEN '0' WHEN $val_6 > $get_range6 THEN $val_6 END AS $val_6,CASE WHEN $val_7 < $get_range7 THEN '0' WHEN $val_7 > $get_range7 THEN $val_7 END AS $val_7,CASE WHEN $val_8 < $get_range8 THEN '0' WHEN $val_8 > $get_range8 THEN $val_8 END AS $val_8 FROM dt_aio WHERE timing BETWEEN '$con_date2' AND '$con_date' ORDER BY dt_id ASC");
                } else if (sizeof($req->all()[0]) == 9) {
                    $val_1 = DB::select("SELECT timing, CASE WHEN $val_1 < $get_range1 THEN '0' WHEN $val_1 > $get_range1 THEN $val_1 END AS $val_1, CASE WHEN $val_2 < $get_range2 THEN '0' WHEN $val_2 > $get_range2 THEN $val_2 END AS $val_2,CASE WHEN $val_3 < $get_range3 THEN '0' WHEN $val_3 > $get_range3 THEN $val_3 END AS $val_3,CASE WHEN $val_4 < $get_range4 THEN '0' WHEN $val_4 > $get_range4 THEN $val_4 END AS $val_4,CASE WHEN $val_5 < $get_range5 THEN '0' WHEN $val_5 > $get_range5 THEN $val_5 END AS $val_5,CASE WHEN $val_6 < $get_range6 THEN '0' WHEN $val_6 > $get_range6 THEN $val_6 END AS $val_6,CASE WHEN $val_7 < $get_range7 THEN '0' WHEN $val_7 > $get_range7 THEN $val_7 END AS $val_7,CASE WHEN $val_8 < $get_range8 THEN '0' WHEN $val_8 > $get_range8 THEN $val_8 END AS $val_8,CASE WHEN $val_9 < $get_range9 THEN '0' WHEN $val_9 > $get_range9 THEN $val_9 END AS $val_9 FROM dt_aio WHERE timing BETWEEN '$con_date2' AND '$con_date' ORDER BY dt_id ASC");
                } else if (sizeof($req->all()[0]) == 10) {
                    $val_1 = DB::select("SELECT timing, CASE WHEN $val_1 < $get_range1 THEN '0' WHEN $val_1 > $get_range1 THEN $val_1 END AS $val_1, CASE WHEN $val_2 < $get_range2 THEN '0' WHEN $val_2 > $get_range2 THEN $val_2 END AS $val_2,CASE WHEN $val_3 < $get_range3 THEN '0' WHEN $val_3 > $get_range3 THEN $val_3 END AS $val_3,CASE WHEN $val_4 < $get_range4 THEN '0' WHEN $val_4 > $get_range4 THEN $val_4 END AS $val_4,CASE WHEN $val_5 < $get_range5 THEN '0' WHEN $val_5 > $get_range5 THEN $val_5 END AS $val_5,CASE WHEN $val_6 < $get_range6 THEN '0' WHEN $val_6 > $get_range6 THEN $val_6 END AS $val_6,CASE WHEN $val_7 < $get_range7 THEN '0' WHEN $val_7 > $get_range7 THEN $val_7 END AS $val_7,CASE WHEN $val_8 < $get_range8 THEN '0' WHEN $val_8 > $get_range8 THEN $val_8 END AS $val_8,CASE WHEN $val_9 < $get_range9 THEN '0' WHEN $val_9 > $get_range9 THEN $val_9 END AS $val_9,CASE WHEN $val_10 < $get_range10 THEN '0' WHEN $val_10 > $get_range10 THEN $val_10 END AS $val_10 FROM dt_aio WHERE timing BETWEEN '$con_date2' AND '$con_date' ORDER BY dt_id ASC");
                } else if (sizeof($req->all()[0]) == 11) {
                    $val_1 = DB::select("SELECT timing, CASE WHEN $val_1 < $get_range1 THEN '0' WHEN $val_1 > $get_range1 THEN $val_1 END AS $val_1, CASE WHEN $val_2 < $get_range2 THEN '0' WHEN $val_2 > $get_range2 THEN $val_2 END AS $val_2,CASE WHEN $val_3 < $get_range3 THEN '0' WHEN $val_3 > $get_range3 THEN $val_3 END AS $val_3,CASE WHEN $val_4 < $get_range4 THEN '0' WHEN $val_4 > $get_range4 THEN $val_4 END AS $val_4,CASE WHEN $val_5 < $get_range5 THEN '0' WHEN $val_5 > $get_range5 THEN $val_5 END AS $val_5,CASE WHEN $val_6 < $get_range6 THEN '0' WHEN $val_6 > $get_range6 THEN $val_6 END AS $val_6,CASE WHEN $val_7 < $get_range7 THEN '0' WHEN $val_7 > $get_range7 THEN $val_7 END AS $val_7,CASE WHEN $val_8 < $get_range8 THEN '0' WHEN $val_8 > $get_range8 THEN $val_8 END AS $val_8,CASE WHEN $val_9 < $get_range9 THEN '0' WHEN $val_9 > $get_range9 THEN $val_9 END AS $val_9,CASE WHEN $val_10 < $get_range10 THEN '0' WHEN $val_10 > $get_range10 THEN $val_10 END AS $val_10,CASE WHEN $val_11 < $get_range11 THEN '0' WHEN $val_11 > $get_range11 THEN $val_11 END AS $val_11 FROM dt_aio WHERE timing BETWEEN '$con_date2' AND '$con_date' ORDER BY dt_id ASC");
                } else if (sizeof($req->all()[0]) == 12) {
                    $val_1 = DB::select("SELECT timing, CASE WHEN $val_1 < $get_range1 THEN '0' WHEN $val_1 > $get_range1 THEN $val_1 END AS $val_1, CASE WHEN $val_2 < $get_range2 THEN '0' WHEN $val_2 > $get_range2 THEN $val_2 END AS $val_2,CASE WHEN $val_3 < $get_range3 THEN '0' WHEN $val_3 > $get_range3 THEN $val_3 END AS $val_3,CASE WHEN $val_4 < $get_range4 THEN '0' WHEN $val_4 > $get_range4 THEN $val_4 END AS $val_4,CASE WHEN $val_5 < $get_range5 THEN '0' WHEN $val_5 > $get_range5 THEN $val_5 END AS $val_5,CASE WHEN $val_6 < $get_range6 THEN '0' WHEN $val_6 > $get_range6 THEN $val_6 END AS $val_6,CASE WHEN $val_7 < $get_range7 THEN '0' WHEN $val_7 > $get_range7 THEN $val_7 END AS $val_7,CASE WHEN $val_8 < $get_range8 THEN '0' WHEN $val_8 > $get_range8 THEN $val_8 END AS $val_8,CASE WHEN $val_9 < $get_range9 THEN '0' WHEN $val_9 > $get_range9 THEN $val_9 END AS $val_9,CASE WHEN $val_10 < $get_range10 THEN '0' WHEN $val_10 > $get_range10 THEN $val_10 END AS $val_10,CASE WHEN $val_11 < $get_range11 THEN '0' WHEN $val_11 > $get_range11 THEN $val_11 END AS $val_11,CASE WHEN $val_12 < $get_range12 THEN '0' WHEN $val_12 > $get_range12 THEN $val_12 END AS $val_12 FROM dt_aio WHERE timing BETWEEN '$con_date2' AND '$con_date' ORDER BY dt_id ASC");
                } else if (sizeof($req->all()[0]) == 13) {
                    $val_1 = DB::select("SELECT timing, CASE WHEN $val_1 < $get_range1 THEN '0' WHEN $val_1 > $get_range1 THEN $val_1 END AS $val_1, CASE WHEN $val_2 < $get_range2 THEN '0' WHEN $val_2 > $get_range2 THEN $val_2 END AS $val_2,CASE WHEN $val_3 < $get_range3 THEN '0' WHEN $val_3 > $get_range3 THEN $val_3 END AS $val_3,CASE WHEN $val_4 < $get_range4 THEN '0' WHEN $val_4 > $get_range4 THEN $val_4 END AS $val_4,CASE WHEN $val_5 < $get_range5 THEN '0' WHEN $val_5 > $get_range5 THEN $val_5 END AS $val_5,CASE WHEN $val_6 < $get_range6 THEN '0' WHEN $val_6 > $get_range6 THEN $val_6 END AS $val_6,CASE WHEN $val_7 < $get_range7 THEN '0' WHEN $val_7 > $get_range7 THEN $val_7 END AS $val_7,CASE WHEN $val_8 < $get_range8 THEN '0' WHEN $val_8 > $get_range8 THEN $val_8 END AS $val_8,CASE WHEN $val_9 < $get_range9 THEN '0' WHEN $val_9 > $get_range9 THEN $val_9 END AS $val_9,CASE WHEN $val_10 < $get_range10 THEN '0' WHEN $val_10 > $get_range10 THEN $val_10 END AS $val_10,CASE WHEN $val_11 < $get_range11 THEN '0' WHEN $val_11 > $get_range11 THEN $val_11 END AS $val_11,CASE WHEN $val_12 < $get_range12 THEN '0' WHEN $val_12 > $get_range12 THEN $val_12 END AS $val_12,CASE WHEN $val_13 < $get_range13 THEN '0' WHEN $val_13 > $get_range13 THEN $val_13 END AS $val_13 FROM dt_aio WHERE timing BETWEEN '$con_date2' AND '$con_date' ORDER BY dt_id ASC");
                } else if (sizeof($req->all()[0]) == 14) {
                    $val_1 = DB::select("SELECT timing, CASE WHEN $val_1 < $get_range1 THEN '0' WHEN $val_1 > $get_range1 THEN $val_1 END AS $val_1, CASE WHEN $val_2 < $get_range2 THEN '0' WHEN $val_2 > $get_range2 THEN $val_2 END AS $val_2,CASE WHEN $val_3 < $get_range3 THEN '0' WHEN $val_3 > $get_range3 THEN $val_3 END AS $val_3,CASE WHEN $val_4 < $get_range4 THEN '0' WHEN $val_4 > $get_range4 THEN $val_4 END AS $val_4,CASE WHEN $val_5 < $get_range5 THEN '0' WHEN $val_5 > $get_range5 THEN $val_5 END AS $val_5,CASE WHEN $val_6 < $get_range6 THEN '0' WHEN $val_6 > $get_range6 THEN $val_6 END AS $val_6,CASE WHEN $val_7 < $get_range7 THEN '0' WHEN $val_7 > $get_range7 THEN $val_7 END AS $val_7,CASE WHEN $val_8 < $get_range8 THEN '0' WHEN $val_8 > $get_range8 THEN $val_8 END AS $val_8,CASE WHEN $val_9 < $get_range9 THEN '0' WHEN $val_9 > $get_range9 THEN $val_9 END AS $val_9,CASE WHEN $val_10 < $get_range10 THEN '0' WHEN $val_10 > $get_range10 THEN $val_10 END AS $val_10,CASE WHEN $val_11 < $get_range11 THEN '0' WHEN $val_11 > $get_range11 THEN $val_11 END AS $val_11,CASE WHEN $val_12 < $get_range12 THEN '0' WHEN $val_12 > $get_range12 THEN $val_12 END AS $val_12,CASE WHEN $val_13 < $get_range13 THEN '0' WHEN $val_13 > $get_range13 THEN $val_13 END AS $val_13,CASE WHEN $val_14 < $get_range14 THEN '0' WHEN $val_14 > $get_range14 THEN $val_14 END AS $val_14 FROM dt_aio WHERE timing BETWEEN '$con_date2' AND '$con_date' ORDER BY dt_id ASC");
                } else if (sizeof($req->all()[0]) == 15) {
                    $val_1 = DB::select("SELECT timing, CASE WHEN $val_1 < $get_range1 THEN '0' WHEN $val_1 > $get_range1 THEN $val_1 END AS $val_1, CASE WHEN $val_2 < $get_range2 THEN '0' WHEN $val_2 > $get_range2 THEN $val_2 END AS $val_2,CASE WHEN $val_3 < $get_range3 THEN '0' WHEN $val_3 > $get_range3 THEN $val_3 END AS $val_3,CASE WHEN $val_4 < $get_range4 THEN '0' WHEN $val_4 > $get_range4 THEN $val_4 END AS $val_4,CASE WHEN $val_5 < $get_range5 THEN '0' WHEN $val_5 > $get_range5 THEN $val_5 END AS $val_5,CASE WHEN $val_6 < $get_range6 THEN '0' WHEN $val_6 > $get_range6 THEN $val_6 END AS $val_6,CASE WHEN $val_7 < $get_range7 THEN '0' WHEN $val_7 > $get_range7 THEN $val_7 END AS $val_7,CASE WHEN $val_8 < $get_range8 THEN '0' WHEN $val_8 > $get_range8 THEN $val_8 END AS $val_8,CASE WHEN $val_9 < $get_range9 THEN '0' WHEN $val_9 > $get_range9 THEN $val_9 END AS $val_9,CASE WHEN $val_10 < $get_range10 THEN '0' WHEN $val_10 > $get_range10 THEN $val_10 END AS $val_10,CASE WHEN $val_11 < $get_range11 THEN '0' WHEN $val_11 > $get_range11 THEN $val_11 END AS $val_11,CASE WHEN $val_12 < $get_range12 THEN '0' WHEN $val_12 > $get_range12 THEN $val_12 END AS $val_12,CASE WHEN $val_13 < $get_range13 THEN '0' WHEN $val_13 > $get_range13 THEN $val_13 END AS $val_13,CASE WHEN $val_14 < $get_range14 THEN '0' WHEN $val_14 > $get_range14 THEN $val_14 END AS $val_14,CASE WHEN $val_15 < $get_range15 THEN '0' WHEN $val_15 > $get_range15 THEN $val_15 END AS $val_15 FROM dt_aio WHERE timing BETWEEN '$con_date2' AND '$con_date' ORDER BY dt_id ASC");
                } else if (sizeof($req->all()[0]) == 16) {
                    $val_1 = DB::select("SELECT timing, CASE WHEN $val_1 < $get_range1 THEN '0' WHEN $val_1 > $get_range1 THEN $val_1 END AS $val_1, CASE WHEN $val_2 < $get_range2 THEN '0' WHEN $val_2 > $get_range2 THEN $val_2 END AS $val_2,CASE WHEN $val_3 < $get_range3 THEN '0' WHEN $val_3 > $get_range3 THEN $val_3 END AS $val_3,CASE WHEN $val_4 < $get_range4 THEN '0' WHEN $val_4 > $get_range4 THEN $val_4 END AS $val_4,CASE WHEN $val_5 < $get_range5 THEN '0' WHEN $val_5 > $get_range5 THEN $val_5 END AS $val_5,CASE WHEN $val_6 < $get_range6 THEN '0' WHEN $val_6 > $get_range6 THEN $val_6 END AS $val_6,CASE WHEN $val_7 < $get_range7 THEN '0' WHEN $val_7 > $get_range7 THEN $val_7 END AS $val_7,CASE WHEN $val_8 < $get_range8 THEN '0' WHEN $val_8 > $get_range8 THEN $val_8 END AS $val_8,CASE WHEN $val_9 < $get_range9 THEN '0' WHEN $val_9 > $get_range9 THEN $val_9 END AS $val_9,CASE WHEN $val_10 < $get_range10 THEN '0' WHEN $val_10 > $get_range10 THEN $val_10 END AS $val_10,CASE WHEN $val_11 < $get_range11 THEN '0' WHEN $val_11 > $get_range11 THEN $val_11 END AS $val_11,CASE WHEN $val_12 < $get_range12 THEN '0' WHEN $val_12 > $get_range12 THEN $val_12 END AS $val_12,CASE WHEN $val_13 < $get_range13 THEN '0' WHEN $val_13 > $get_range13 THEN $val_13 END AS $val_13,CASE WHEN $val_14 < $get_range14 THEN '0' WHEN $val_14 > $get_range14 THEN $val_14 END AS $val_14,CASE WHEN $val_15 < $get_range15 THEN '0' WHEN $val_15 > $get_range15 THEN $val_15 END AS $val_15,CASE WHEN $val_16 < $get_range16 THEN '0' WHEN $val_16 > $get_range16 THEN $val_16 END AS $val_16 FROM dt_aio WHERE timing BETWEEN '$con_date2' AND '$con_date' ORDER BY dt_id ASC");
                }
            } elseif ($timing == '4') {
                if (sizeof($req->all()[0]) == 1) {
                    $val_1 = DB::select("SELECT timing, CASE WHEN $val_1 < $get_range1 THEN '0' WHEN $val_1 > $get_range1 THEN $val_1 END AS $val_1 FROM dt_aio WHERE timing BETWEEN '$con_date3' AND '$con_date' ORDER BY dt_id ASC");
                } else if (sizeof($req->all()[0]) == 2) {
                    $val_1 = DB::select("SELECT timing, CASE WHEN $val_1 < $get_range1 THEN '0' WHEN $val_1 > $get_range1 THEN $val_1 END AS $val_1, CASE WHEN $val_2 < $get_range2 THEN '0' WHEN $val_2 > $get_range2 THEN $val_2 END AS $val_2 FROM dt_aio WHERE timing BETWEEN '$con_date3' AND '$con_date' ORDER BY dt_id ASC");
                } else if (sizeof($req->all()[0]) == 3) {
                    $val_1 = DB::select("SELECT timing, CASE WHEN $val_1 < $get_range1 THEN '0' WHEN $val_1 > $get_range1 THEN $val_1 END AS $val_1, CASE WHEN $val_2 < $get_range2 THEN '0' WHEN $val_2 > $get_range2 THEN $val_2 END AS $val_2,CASE WHEN $val_3 < $get_range3 THEN '0' WHEN $val_3 > $get_range3 THEN $val_3 END AS $val_3 FROM dt_aio WHERE timing BETWEEN '$con_date3' AND '$con_date' ORDER BY dt_id ASC");
                } else if (sizeof($req->all()[0]) == 4) {
                    $val_1 = DB::select("SELECT timing, CASE WHEN $val_1 < $get_range1 THEN '0' WHEN $val_1 > $get_range1 THEN $val_1 END AS $val_1, CASE WHEN $val_2 < $get_range2 THEN '0' WHEN $val_2 > $get_range2 THEN $val_2 END AS $val_2,CASE WHEN $val_3 < $get_range3 THEN '0' WHEN $val_3 > $get_range3 THEN $val_3 END AS $val_3,CASE WHEN $val_4 < $get_range4 THEN '0' WHEN $val_4 > $get_range4 THEN $val_4 END AS $val_4 FROM dt_aio WHERE timing BETWEEN '$con_date3' AND '$con_date' ORDER BY dt_id ASC");
                } else if (sizeof($req->all()[0]) == 5) {
                    $val_1 = DB::select("SELECT timing, CASE WHEN $val_1 < $get_range1 THEN '0' WHEN $val_1 > $get_range1 THEN $val_1 END AS $val_1, CASE WHEN $val_2 < $get_range2 THEN '0' WHEN $val_2 > $get_range2 THEN $val_2 END AS $val_2,CASE WHEN $val_3 < $get_range3 THEN '0' WHEN $val_3 > $get_range3 THEN $val_3 END AS $val_3,CASE WHEN $val_4 < $get_range4 THEN '0' WHEN $val_4 > $get_range4 THEN $val_4 END AS $val_4,CASE WHEN $val_5 < $get_range5 THEN '0' WHEN $val_5 > $get_range5 THEN $val_5 END AS $val_5 FROM dt_aio WHERE timing BETWEEN '$con_date3' AND '$con_date' ORDER BY dt_id ASC");
                } else if (sizeof($req->all()[0]) == 6) {
                    $val_1 = DB::select("SELECT timing, CASE WHEN $val_1 < $get_range1 THEN '0' WHEN $val_1 > $get_range1 THEN $val_1 END AS $val_1, CASE WHEN $val_2 < $get_range2 THEN '0' WHEN $val_2 > $get_range2 THEN $val_2 END AS $val_2,CASE WHEN $val_3 < $get_range3 THEN '0' WHEN $val_3 > $get_range3 THEN $val_3 END AS $val_3,CASE WHEN $val_4 < $get_range4 THEN '0' WHEN $val_4 > $get_range4 THEN $val_4 END AS $val_4,CASE WHEN $val_5 < $get_range5 THEN '0' WHEN $val_5 > $get_range5 THEN $val_5 END AS $val_5,CASE WHEN $val_6 < $get_range6 THEN '0' WHEN $val_6 > $get_range6 THEN $val_6 END AS $val_6 FROM dt_aio WHERE timing BETWEEN '$con_date3' AND '$con_date' ORDER BY dt_id ASC");
                } else if (sizeof($req->all()[0]) == 7) {
                    $val_1 = DB::select("SELECT timing, CASE WHEN $val_1 < $get_range1 THEN '0' WHEN $val_1 > $get_range1 THEN $val_1 END AS $val_1, CASE WHEN $val_2 < $get_range2 THEN '0' WHEN $val_2 > $get_range2 THEN $val_2 END AS $val_2,CASE WHEN $val_3 < $get_range3 THEN '0' WHEN $val_3 > $get_range3 THEN $val_3 END AS $val_3,CASE WHEN $val_4 < $get_range4 THEN '0' WHEN $val_4 > $get_range4 THEN $val_4 END AS $val_4,CASE WHEN $val_5 < $get_range5 THEN '0' WHEN $val_5 > $get_range5 THEN $val_5 END AS $val_5,CASE WHEN $val_6 < $get_range6 THEN '0' WHEN $val_6 > $get_range6 THEN $val_6 END AS $val_6,CASE WHEN $val_7 < $get_range7 THEN '0' WHEN $val_7 > $get_range7 THEN $val_7 END AS $val_7 FROM dt_aio WHERE timing BETWEEN '$con_date3' AND '$con_date' ORDER BY dt_id ASC");
                } else if (sizeof($req->all()[0]) == 8) {
                    $val_1 = DB::select("SELECT timing, CASE WHEN $val_1 < $get_range1 THEN '0' WHEN $val_1 > $get_range1 THEN $val_1 END AS $val_1, CASE WHEN $val_2 < $get_range2 THEN '0' WHEN $val_2 > $get_range2 THEN $val_2 END AS $val_2,CASE WHEN $val_3 < $get_range3 THEN '0' WHEN $val_3 > $get_range3 THEN $val_3 END AS $val_3,CASE WHEN $val_4 < $get_range4 THEN '0' WHEN $val_4 > $get_range4 THEN $val_4 END AS $val_4,CASE WHEN $val_5 < $get_range5 THEN '0' WHEN $val_5 > $get_range5 THEN $val_5 END AS $val_5,CASE WHEN $val_6 < $get_range6 THEN '0' WHEN $val_6 > $get_range6 THEN $val_6 END AS $val_6,CASE WHEN $val_7 < $get_range7 THEN '0' WHEN $val_7 > $get_range7 THEN $val_7 END AS $val_7,CASE WHEN $val_8 < $get_range8 THEN '0' WHEN $val_8 > $get_range8 THEN $val_8 END AS $val_8 FROM dt_aio WHERE timing BETWEEN '$con_date3' AND '$con_date' ORDER BY dt_id ASC");
                } else if (sizeof($req->all()[0]) == 9) {
                    $val_1 = DB::select("SELECT timing, CASE WHEN $val_1 < $get_range1 THEN '0' WHEN $val_1 > $get_range1 THEN $val_1 END AS $val_1, CASE WHEN $val_2 < $get_range2 THEN '0' WHEN $val_2 > $get_range2 THEN $val_2 END AS $val_2,CASE WHEN $val_3 < $get_range3 THEN '0' WHEN $val_3 > $get_range3 THEN $val_3 END AS $val_3,CASE WHEN $val_4 < $get_range4 THEN '0' WHEN $val_4 > $get_range4 THEN $val_4 END AS $val_4,CASE WHEN $val_5 < $get_range5 THEN '0' WHEN $val_5 > $get_range5 THEN $val_5 END AS $val_5,CASE WHEN $val_6 < $get_range6 THEN '0' WHEN $val_6 > $get_range6 THEN $val_6 END AS $val_6,CASE WHEN $val_7 < $get_range7 THEN '0' WHEN $val_7 > $get_range7 THEN $val_7 END AS $val_7,CASE WHEN $val_8 < $get_range8 THEN '0' WHEN $val_8 > $get_range8 THEN $val_8 END AS $val_8,CASE WHEN $val_9 < $get_range9 THEN '0' WHEN $val_9 > $get_range9 THEN $val_9 END AS $val_9 FROM dt_aio WHERE timing BETWEEN '$con_date3' AND '$con_date' ORDER BY dt_id ASC");
                } else if (sizeof($req->all()[0]) == 10) {
                    $val_1 = DB::select("SELECT timing, CASE WHEN $val_1 < $get_range1 THEN '0' WHEN $val_1 > $get_range1 THEN $val_1 END AS $val_1, CASE WHEN $val_2 < $get_range2 THEN '0' WHEN $val_2 > $get_range2 THEN $val_2 END AS $val_2,CASE WHEN $val_3 < $get_range3 THEN '0' WHEN $val_3 > $get_range3 THEN $val_3 END AS $val_3,CASE WHEN $val_4 < $get_range4 THEN '0' WHEN $val_4 > $get_range4 THEN $val_4 END AS $val_4,CASE WHEN $val_5 < $get_range5 THEN '0' WHEN $val_5 > $get_range5 THEN $val_5 END AS $val_5,CASE WHEN $val_6 < $get_range6 THEN '0' WHEN $val_6 > $get_range6 THEN $val_6 END AS $val_6,CASE WHEN $val_7 < $get_range7 THEN '0' WHEN $val_7 > $get_range7 THEN $val_7 END AS $val_7,CASE WHEN $val_8 < $get_range8 THEN '0' WHEN $val_8 > $get_range8 THEN $val_8 END AS $val_8,CASE WHEN $val_9 < $get_range9 THEN '0' WHEN $val_9 > $get_range9 THEN $val_9 END AS $val_9,CASE WHEN $val_10 < $get_range10 THEN '0' WHEN $val_10 > $get_range10 THEN $val_10 END AS $val_10 FROM dt_aio WHERE timing BETWEEN '$con_date3' AND '$con_date' ORDER BY dt_id ASC");
                } else if (sizeof($req->all()[0]) == 11) {
                    $val_1 = DB::select("SELECT timing, CASE WHEN $val_1 < $get_range1 THEN '0' WHEN $val_1 > $get_range1 THEN $val_1 END AS $val_1, CASE WHEN $val_2 < $get_range2 THEN '0' WHEN $val_2 > $get_range2 THEN $val_2 END AS $val_2,CASE WHEN $val_3 < $get_range3 THEN '0' WHEN $val_3 > $get_range3 THEN $val_3 END AS $val_3,CASE WHEN $val_4 < $get_range4 THEN '0' WHEN $val_4 > $get_range4 THEN $val_4 END AS $val_4,CASE WHEN $val_5 < $get_range5 THEN '0' WHEN $val_5 > $get_range5 THEN $val_5 END AS $val_5,CASE WHEN $val_6 < $get_range6 THEN '0' WHEN $val_6 > $get_range6 THEN $val_6 END AS $val_6,CASE WHEN $val_7 < $get_range7 THEN '0' WHEN $val_7 > $get_range7 THEN $val_7 END AS $val_7,CASE WHEN $val_8 < $get_range8 THEN '0' WHEN $val_8 > $get_range8 THEN $val_8 END AS $val_8,CASE WHEN $val_9 < $get_range9 THEN '0' WHEN $val_9 > $get_range9 THEN $val_9 END AS $val_9,CASE WHEN $val_10 < $get_range10 THEN '0' WHEN $val_10 > $get_range10 THEN $val_10 END AS $val_10,CASE WHEN $val_11 < $get_range11 THEN '0' WHEN $val_11 > $get_range11 THEN $val_11 END AS $val_11 FROM dt_aio WHERE timing BETWEEN '$con_date3' AND '$con_date' ORDER BY dt_id ASC");
                } else if (sizeof($req->all()[0]) == 12) {
                    $val_1 = DB::select("SELECT timing, CASE WHEN $val_1 < $get_range1 THEN '0' WHEN $val_1 > $get_range1 THEN $val_1 END AS $val_1, CASE WHEN $val_2 < $get_range2 THEN '0' WHEN $val_2 > $get_range2 THEN $val_2 END AS $val_2,CASE WHEN $val_3 < $get_range3 THEN '0' WHEN $val_3 > $get_range3 THEN $val_3 END AS $val_3,CASE WHEN $val_4 < $get_range4 THEN '0' WHEN $val_4 > $get_range4 THEN $val_4 END AS $val_4,CASE WHEN $val_5 < $get_range5 THEN '0' WHEN $val_5 > $get_range5 THEN $val_5 END AS $val_5,CASE WHEN $val_6 < $get_range6 THEN '0' WHEN $val_6 > $get_range6 THEN $val_6 END AS $val_6,CASE WHEN $val_7 < $get_range7 THEN '0' WHEN $val_7 > $get_range7 THEN $val_7 END AS $val_7,CASE WHEN $val_8 < $get_range8 THEN '0' WHEN $val_8 > $get_range8 THEN $val_8 END AS $val_8,CASE WHEN $val_9 < $get_range9 THEN '0' WHEN $val_9 > $get_range9 THEN $val_9 END AS $val_9,CASE WHEN $val_10 < $get_range10 THEN '0' WHEN $val_10 > $get_range10 THEN $val_10 END AS $val_10,CASE WHEN $val_11 < $get_range11 THEN '0' WHEN $val_11 > $get_range11 THEN $val_11 END AS $val_11,CASE WHEN $val_12 < $get_range12 THEN '0' WHEN $val_12 > $get_range12 THEN $val_12 END AS $val_12 FROM dt_aio WHERE timing BETWEEN '$con_date3' AND '$con_date' ORDER BY dt_id ASC");
                } else if (sizeof($req->all()[0]) == 13) {
                    $val_1 = DB::select("SELECT timing, CASE WHEN $val_1 < $get_range1 THEN '0' WHEN $val_1 > $get_range1 THEN $val_1 END AS $val_1, CASE WHEN $val_2 < $get_range2 THEN '0' WHEN $val_2 > $get_range2 THEN $val_2 END AS $val_2,CASE WHEN $val_3 < $get_range3 THEN '0' WHEN $val_3 > $get_range3 THEN $val_3 END AS $val_3,CASE WHEN $val_4 < $get_range4 THEN '0' WHEN $val_4 > $get_range4 THEN $val_4 END AS $val_4,CASE WHEN $val_5 < $get_range5 THEN '0' WHEN $val_5 > $get_range5 THEN $val_5 END AS $val_5,CASE WHEN $val_6 < $get_range6 THEN '0' WHEN $val_6 > $get_range6 THEN $val_6 END AS $val_6,CASE WHEN $val_7 < $get_range7 THEN '0' WHEN $val_7 > $get_range7 THEN $val_7 END AS $val_7,CASE WHEN $val_8 < $get_range8 THEN '0' WHEN $val_8 > $get_range8 THEN $val_8 END AS $val_8,CASE WHEN $val_9 < $get_range9 THEN '0' WHEN $val_9 > $get_range9 THEN $val_9 END AS $val_9,CASE WHEN $val_10 < $get_range10 THEN '0' WHEN $val_10 > $get_range10 THEN $val_10 END AS $val_10,CASE WHEN $val_11 < $get_range11 THEN '0' WHEN $val_11 > $get_range11 THEN $val_11 END AS $val_11,CASE WHEN $val_12 < $get_range12 THEN '0' WHEN $val_12 > $get_range12 THEN $val_12 END AS $val_12,CASE WHEN $val_13 < $get_range13 THEN '0' WHEN $val_13 > $get_range13 THEN $val_13 END AS $val_13 FROM dt_aio WHERE timing BETWEEN '$con_date3' AND '$con_date' ORDER BY dt_id ASC");
                } else if (sizeof($req->all()[0]) == 14) {
                    $val_1 = DB::select("SELECT timing, CASE WHEN $val_1 < $get_range1 THEN '0' WHEN $val_1 > $get_range1 THEN $val_1 END AS $val_1, CASE WHEN $val_2 < $get_range2 THEN '0' WHEN $val_2 > $get_range2 THEN $val_2 END AS $val_2,CASE WHEN $val_3 < $get_range3 THEN '0' WHEN $val_3 > $get_range3 THEN $val_3 END AS $val_3,CASE WHEN $val_4 < $get_range4 THEN '0' WHEN $val_4 > $get_range4 THEN $val_4 END AS $val_4,CASE WHEN $val_5 < $get_range5 THEN '0' WHEN $val_5 > $get_range5 THEN $val_5 END AS $val_5,CASE WHEN $val_6 < $get_range6 THEN '0' WHEN $val_6 > $get_range6 THEN $val_6 END AS $val_6,CASE WHEN $val_7 < $get_range7 THEN '0' WHEN $val_7 > $get_range7 THEN $val_7 END AS $val_7,CASE WHEN $val_8 < $get_range8 THEN '0' WHEN $val_8 > $get_range8 THEN $val_8 END AS $val_8,CASE WHEN $val_9 < $get_range9 THEN '0' WHEN $val_9 > $get_range9 THEN $val_9 END AS $val_9,CASE WHEN $val_10 < $get_range10 THEN '0' WHEN $val_10 > $get_range10 THEN $val_10 END AS $val_10,CASE WHEN $val_11 < $get_range11 THEN '0' WHEN $val_11 > $get_range11 THEN $val_11 END AS $val_11,CASE WHEN $val_12 < $get_range12 THEN '0' WHEN $val_12 > $get_range12 THEN $val_12 END AS $val_12,CASE WHEN $val_13 < $get_range13 THEN '0' WHEN $val_13 > $get_range13 THEN $val_13 END AS $val_13,CASE WHEN $val_14 < $get_range14 THEN '0' WHEN $val_14 > $get_range14 THEN $val_14 END AS $val_14 FROM dt_aio WHERE timing BETWEEN '$con_date3' AND '$con_date' ORDER BY dt_id ASC");
                } else if (sizeof($req->all()[0]) == 15) {
                    $val_1 = DB::select("SELECT timing, CASE WHEN $val_1 < $get_range1 THEN '0' WHEN $val_1 > $get_range1 THEN $val_1 END AS $val_1, CASE WHEN $val_2 < $get_range2 THEN '0' WHEN $val_2 > $get_range2 THEN $val_2 END AS $val_2,CASE WHEN $val_3 < $get_range3 THEN '0' WHEN $val_3 > $get_range3 THEN $val_3 END AS $val_3,CASE WHEN $val_4 < $get_range4 THEN '0' WHEN $val_4 > $get_range4 THEN $val_4 END AS $val_4,CASE WHEN $val_5 < $get_range5 THEN '0' WHEN $val_5 > $get_range5 THEN $val_5 END AS $val_5,CASE WHEN $val_6 < $get_range6 THEN '0' WHEN $val_6 > $get_range6 THEN $val_6 END AS $val_6,CASE WHEN $val_7 < $get_range7 THEN '0' WHEN $val_7 > $get_range7 THEN $val_7 END AS $val_7,CASE WHEN $val_8 < $get_range8 THEN '0' WHEN $val_8 > $get_range8 THEN $val_8 END AS $val_8,CASE WHEN $val_9 < $get_range9 THEN '0' WHEN $val_9 > $get_range9 THEN $val_9 END AS $val_9,CASE WHEN $val_10 < $get_range10 THEN '0' WHEN $val_10 > $get_range10 THEN $val_10 END AS $val_10,CASE WHEN $val_11 < $get_range11 THEN '0' WHEN $val_11 > $get_range11 THEN $val_11 END AS $val_11,CASE WHEN $val_12 < $get_range12 THEN '0' WHEN $val_12 > $get_range12 THEN $val_12 END AS $val_12,CASE WHEN $val_13 < $get_range13 THEN '0' WHEN $val_13 > $get_range13 THEN $val_13 END AS $val_13,CASE WHEN $val_14 < $get_range14 THEN '0' WHEN $val_14 > $get_range14 THEN $val_14 END AS $val_14,CASE WHEN $val_15 < $get_range15 THEN '0' WHEN $val_15 > $get_range15 THEN $val_15 END AS $val_15 FROM dt_aio WHERE timing BETWEEN '$con_date3' AND '$con_date' ORDER BY dt_id ASC");
                } else if (sizeof($req->all()[0]) == 16) {
                    $val_1 = DB::select("SELECT timing, CASE WHEN $val_1 < $get_range1 THEN '0' WHEN $val_1 > $get_range1 THEN $val_1 END AS $val_1, CASE WHEN $val_2 < $get_range2 THEN '0' WHEN $val_2 > $get_range2 THEN $val_2 END AS $val_2,CASE WHEN $val_3 < $get_range3 THEN '0' WHEN $val_3 > $get_range3 THEN $val_3 END AS $val_3,CASE WHEN $val_4 < $get_range4 THEN '0' WHEN $val_4 > $get_range4 THEN $val_4 END AS $val_4,CASE WHEN $val_5 < $get_range5 THEN '0' WHEN $val_5 > $get_range5 THEN $val_5 END AS $val_5,CASE WHEN $val_6 < $get_range6 THEN '0' WHEN $val_6 > $get_range6 THEN $val_6 END AS $val_6,CASE WHEN $val_7 < $get_range7 THEN '0' WHEN $val_7 > $get_range7 THEN $val_7 END AS $val_7,CASE WHEN $val_8 < $get_range8 THEN '0' WHEN $val_8 > $get_range8 THEN $val_8 END AS $val_8,CASE WHEN $val_9 < $get_range9 THEN '0' WHEN $val_9 > $get_range9 THEN $val_9 END AS $val_9,CASE WHEN $val_10 < $get_range10 THEN '0' WHEN $val_10 > $get_range10 THEN $val_10 END AS $val_10,CASE WHEN $val_11 < $get_range11 THEN '0' WHEN $val_11 > $get_range11 THEN $val_11 END AS $val_11,CASE WHEN $val_12 < $get_range12 THEN '0' WHEN $val_12 > $get_range12 THEN $val_12 END AS $val_12,CASE WHEN $val_13 < $get_range13 THEN '0' WHEN $val_13 > $get_range13 THEN $val_13 END AS $val_13,CASE WHEN $val_14 < $get_range14 THEN '0' WHEN $val_14 > $get_range14 THEN $val_14 END AS $val_14,CASE WHEN $val_15 < $get_range15 THEN '0' WHEN $val_15 > $get_range15 THEN $val_15 END AS $val_15,CASE WHEN $val_16 < $get_range16 THEN '0' WHEN $val_16 > $get_range16 THEN $val_16 END AS $val_16 FROM dt_aio WHERE timing BETWEEN '$con_date3' AND '$con_date' ORDER BY dt_id ASC");
                }
            } elseif ($timing == '5') {
                if (sizeof($req->all()[0]) == 1) {
                    $val_1 = DB::select("SELECT timing,rdl25_volume, rdl25_mass, stfm1_flow_tot, stfm1_temp, stfm1_pressure, stfm2_flow_tot, stfm2_temp, stfm2_pressure, CASE WHEN $val_1 < $get_range1 THEN '0' WHEN $val_1 > $get_range1 THEN $val_1 END AS $val_1 FROM dt_aio WHERE timing BETWEEN '$new_date1' AND '$new_date2' ORDER BY dt_id ASC");
                } else if (sizeof($req->all()[0]) == 2) {
                    $val_1 = DB::select("SELECT timing,rdl25_volume, rdl25_mass, stfm1_flow_tot, stfm1_temp, stfm1_pressure, stfm2_flow_tot, stfm2_temp, stfm2_pressure, CASE WHEN $val_1 < $get_range1 THEN '0' WHEN $val_1 > $get_range1 THEN $val_1 END AS $val_1, CASE WHEN $val_2 < $get_range2 THEN '0' WHEN $val_2 > $get_range2 THEN $val_2 END AS $val_2 FROM dt_aio WHERE timing BETWEEN '$new_date1' AND '$new_date2' ORDER BY dt_id ASC");
                } else if (sizeof($req->all()[0]) == 3) {
                    $val_1 = DB::select("SELECT timing,rdl25_volume, rdl25_mass, stfm1_flow_tot, stfm1_temp, stfm1_pressure, stfm2_flow_tot, stfm2_temp, stfm2_pressure, CASE WHEN $val_1 < $get_range1 THEN '0' WHEN $val_1 > $get_range1 THEN $val_1 END AS $val_1, CASE WHEN $val_2 < $get_range2 THEN '0' WHEN $val_2 > $get_range2 THEN $val_2 END AS $val_2,CASE WHEN $val_3 < $get_range3 THEN '0' WHEN $val_3 > $get_range3 THEN $val_3 END AS $val_3 FROM dt_aio WHERE timing BETWEEN '$new_date1' AND '$new_date2' ORDER BY dt_id ASC");
                } else if (sizeof($req->all()[0]) == 4) {
                    $val_1 = DB::select("SELECT timing,rdl25_volume, rdl25_mass, stfm1_flow_tot, stfm1_temp, stfm1_pressure, stfm2_flow_tot, stfm2_temp, stfm2_pressure, CASE WHEN $val_1 < $get_range1 THEN '0' WHEN $val_1 > $get_range1 THEN $val_1 END AS $val_1, CASE WHEN $val_2 < $get_range2 THEN '0' WHEN $val_2 > $get_range2 THEN $val_2 END AS $val_2,CASE WHEN $val_3 < $get_range3 THEN '0' WHEN $val_3 > $get_range3 THEN $val_3 END AS $val_3,CASE WHEN $val_4 < $get_range4 THEN '0' WHEN $val_4 > $get_range4 THEN $val_4 END AS $val_4 FROM dt_aio WHERE timing BETWEEN '$new_date1' AND '$new_date2' ORDER BY dt_id ASC");
                } else if (sizeof($req->all()[0]) == 5) {
                    $val_1 = DB::select("SELECT timing,rdl25_volume, rdl25_mass, stfm1_flow_tot, stfm1_temp, stfm1_pressure, stfm2_flow_tot, stfm2_temp, stfm2_pressure, CASE WHEN $val_1 < $get_range1 THEN '0' WHEN $val_1 > $get_range1 THEN $val_1 END AS $val_1, CASE WHEN $val_2 < $get_range2 THEN '0' WHEN $val_2 > $get_range2 THEN $val_2 END AS $val_2,CASE WHEN $val_3 < $get_range3 THEN '0' WHEN $val_3 > $get_range3 THEN $val_3 END AS $val_3,CASE WHEN $val_4 < $get_range4 THEN '0' WHEN $val_4 > $get_range4 THEN $val_4 END AS $val_4,CASE WHEN $val_5 < $get_range5 THEN '0' WHEN $val_5 > $get_range5 THEN $val_5 END AS $val_5 FROM dt_aio WHERE timing BETWEEN '$new_date1' AND '$new_date2' ORDER BY dt_id ASC");
                } else if (sizeof($req->all()[0]) == 6) {
                    $val_1 = DB::select("SELECT timing,rdl25_volume, rdl25_mass, stfm1_flow_tot, stfm1_temp, stfm1_pressure, stfm2_flow_tot, stfm2_temp, stfm2_pressure, CASE WHEN $val_1 < $get_range1 THEN '0' WHEN $val_1 > $get_range1 THEN $val_1 END AS $val_1, CASE WHEN $val_2 < $get_range2 THEN '0' WHEN $val_2 > $get_range2 THEN $val_2 END AS $val_2,CASE WHEN $val_3 < $get_range3 THEN '0' WHEN $val_3 > $get_range3 THEN $val_3 END AS $val_3,CASE WHEN $val_4 < $get_range4 THEN '0' WHEN $val_4 > $get_range4 THEN $val_4 END AS $val_4,CASE WHEN $val_5 < $get_range5 THEN '0' WHEN $val_5 > $get_range5 THEN $val_5 END AS $val_5,CASE WHEN $val_6 < $get_range6 THEN '0' WHEN $val_6 > $get_range6 THEN $val_6 END AS $val_6 FROM dt_aio WHERE timing BETWEEN '$new_date1' AND '$new_date2' ORDER BY dt_id ASC");
                } else if (sizeof($req->all()[0]) == 7) {
                    $val_1 = DB::select("SELECT timing,rdl25_volume, rdl25_mass, stfm1_flow_tot, stfm1_temp, stfm1_pressure, stfm2_flow_tot, stfm2_temp, stfm2_pressure, CASE WHEN $val_1 < $get_range1 THEN '0' WHEN $val_1 > $get_range1 THEN $val_1 END AS $val_1, CASE WHEN $val_2 < $get_range2 THEN '0' WHEN $val_2 > $get_range2 THEN $val_2 END AS $val_2,CASE WHEN $val_3 < $get_range3 THEN '0' WHEN $val_3 > $get_range3 THEN $val_3 END AS $val_3,CASE WHEN $val_4 < $get_range4 THEN '0' WHEN $val_4 > $get_range4 THEN $val_4 END AS $val_4,CASE WHEN $val_5 < $get_range5 THEN '0' WHEN $val_5 > $get_range5 THEN $val_5 END AS $val_5,CASE WHEN $val_6 < $get_range6 THEN '0' WHEN $val_6 > $get_range6 THEN $val_6 END AS $val_6,CASE WHEN $val_7 < $get_range7 THEN '0' WHEN $val_7 > $get_range7 THEN $val_7 END AS $val_7 FROM dt_aio WHERE timing BETWEEN '$new_date1' AND '$new_date2' ORDER BY dt_id ASC");
                } else if (sizeof($req->all()[0]) == 8) {
                    $val_1 = DB::select("SELECT timing,rdl25_volume, rdl25_mass, stfm1_flow_tot, stfm1_temp, stfm1_pressure, stfm2_flow_tot, stfm2_temp, stfm2_pressure, CASE WHEN $val_1 < $get_range1 THEN '0' WHEN $val_1 > $get_range1 THEN $val_1 END AS $val_1, CASE WHEN $val_2 < $get_range2 THEN '0' WHEN $val_2 > $get_range2 THEN $val_2 END AS $val_2,CASE WHEN $val_3 < $get_range3 THEN '0' WHEN $val_3 > $get_range3 THEN $val_3 END AS $val_3,CASE WHEN $val_4 < $get_range4 THEN '0' WHEN $val_4 > $get_range4 THEN $val_4 END AS $val_4,CASE WHEN $val_5 < $get_range5 THEN '0' WHEN $val_5 > $get_range5 THEN $val_5 END AS $val_5,CASE WHEN $val_6 < $get_range6 THEN '0' WHEN $val_6 > $get_range6 THEN $val_6 END AS $val_6,CASE WHEN $val_7 < $get_range7 THEN '0' WHEN $val_7 > $get_range7 THEN $val_7 END AS $val_7,CASE WHEN $val_8 < $get_range8 THEN '0' WHEN $val_8 > $get_range8 THEN $val_8 END AS $val_8 FROM dt_aio WHERE timing BETWEEN '$new_date1' AND '$new_date2' ORDER BY dt_id ASC");
                } else if (sizeof($req->all()[0]) == 9) {
                    $val_1 = DB::select("SELECT timing,rdl25_volume, rdl25_mass, stfm1_flow_tot, stfm1_temp, stfm1_pressure, stfm2_flow_tot, stfm2_temp, stfm2_pressure, CASE WHEN $val_1 < $get_range1 THEN '0' WHEN $val_1 > $get_range1 THEN $val_1 END AS $val_1, CASE WHEN $val_2 < $get_range2 THEN '0' WHEN $val_2 > $get_range2 THEN $val_2 END AS $val_2,CASE WHEN $val_3 < $get_range3 THEN '0' WHEN $val_3 > $get_range3 THEN $val_3 END AS $val_3,CASE WHEN $val_4 < $get_range4 THEN '0' WHEN $val_4 > $get_range4 THEN $val_4 END AS $val_4,CASE WHEN $val_5 < $get_range5 THEN '0' WHEN $val_5 > $get_range5 THEN $val_5 END AS $val_5,CASE WHEN $val_6 < $get_range6 THEN '0' WHEN $val_6 > $get_range6 THEN $val_6 END AS $val_6,CASE WHEN $val_7 < $get_range7 THEN '0' WHEN $val_7 > $get_range7 THEN $val_7 END AS $val_7,CASE WHEN $val_8 < $get_range8 THEN '0' WHEN $val_8 > $get_range8 THEN $val_8 END AS $val_8,CASE WHEN $val_9 < $get_range9 THEN '0' WHEN $val_9 > $get_range9 THEN $val_9 END AS $val_9 FROM dt_aio WHERE timing BETWEEN '$new_date1' AND '$new_date2' ORDER BY dt_id ASC");
                } else if (sizeof($req->all()[0]) == 10) {
                    $val_1 = DB::select("SELECT timing,rdl25_volume, rdl25_mass, stfm1_flow_tot, stfm1_temp, stfm1_pressure, stfm2_flow_tot, stfm2_temp, stfm2_pressure, CASE WHEN $val_1 < $get_range1 THEN '0' WHEN $val_1 > $get_range1 THEN $val_1 END AS $val_1, CASE WHEN $val_2 < $get_range2 THEN '0' WHEN $val_2 > $get_range2 THEN $val_2 END AS $val_2,CASE WHEN $val_3 < $get_range3 THEN '0' WHEN $val_3 > $get_range3 THEN $val_3 END AS $val_3,CASE WHEN $val_4 < $get_range4 THEN '0' WHEN $val_4 > $get_range4 THEN $val_4 END AS $val_4,CASE WHEN $val_5 < $get_range5 THEN '0' WHEN $val_5 > $get_range5 THEN $val_5 END AS $val_5,CASE WHEN $val_6 < $get_range6 THEN '0' WHEN $val_6 > $get_range6 THEN $val_6 END AS $val_6,CASE WHEN $val_7 < $get_range7 THEN '0' WHEN $val_7 > $get_range7 THEN $val_7 END AS $val_7,CASE WHEN $val_8 < $get_range8 THEN '0' WHEN $val_8 > $get_range8 THEN $val_8 END AS $val_8,CASE WHEN $val_9 < $get_range9 THEN '0' WHEN $val_9 > $get_range9 THEN $val_9 END AS $val_9,CASE WHEN $val_10 < $get_range10 THEN '0' WHEN $val_10 > $get_range10 THEN $val_10 END AS $val_10 FROM dt_aio WHERE timing BETWEEN '$new_date1' AND '$new_date2' ORDER BY dt_id ASC");
                } else if (sizeof($req->all()[0]) == 11) {
                    $val_1 = DB::select("SELECT timing,rdl25_volume, rdl25_mass, stfm1_flow_tot, stfm1_temp, stfm1_pressure, stfm2_flow_tot, stfm2_temp, stfm2_pressure, CASE WHEN $val_1 < $get_range1 THEN '0' WHEN $val_1 > $get_range1 THEN $val_1 END AS $val_1, CASE WHEN $val_2 < $get_range2 THEN '0' WHEN $val_2 > $get_range2 THEN $val_2 END AS $val_2,CASE WHEN $val_3 < $get_range3 THEN '0' WHEN $val_3 > $get_range3 THEN $val_3 END AS $val_3,CASE WHEN $val_4 < $get_range4 THEN '0' WHEN $val_4 > $get_range4 THEN $val_4 END AS $val_4,CASE WHEN $val_5 < $get_range5 THEN '0' WHEN $val_5 > $get_range5 THEN $val_5 END AS $val_5,CASE WHEN $val_6 < $get_range6 THEN '0' WHEN $val_6 > $get_range6 THEN $val_6 END AS $val_6,CASE WHEN $val_7 < $get_range7 THEN '0' WHEN $val_7 > $get_range7 THEN $val_7 END AS $val_7,CASE WHEN $val_8 < $get_range8 THEN '0' WHEN $val_8 > $get_range8 THEN $val_8 END AS $val_8,CASE WHEN $val_9 < $get_range9 THEN '0' WHEN $val_9 > $get_range9 THEN $val_9 END AS $val_9,CASE WHEN $val_10 < $get_range10 THEN '0' WHEN $val_10 > $get_range10 THEN $val_10 END AS $val_10,CASE WHEN $val_11 < $get_range11 THEN '0' WHEN $val_11 > $get_range11 THEN $val_11 END AS $val_11 FROM dt_aio WHERE timing BETWEEN '$new_date1' AND '$new_date2' ORDER BY dt_id ASC");
                } else if (sizeof($req->all()[0]) == 12) {
                    $val_1 = DB::select("SELECT timing,rdl25_volume, rdl25_mass, stfm1_flow_tot, stfm1_temp, stfm1_pressure, stfm2_flow_tot, stfm2_temp, stfm2_pressure, CASE WHEN $val_1 < $get_range1 THEN '0' WHEN $val_1 > $get_range1 THEN $val_1 END AS $val_1, CASE WHEN $val_2 < $get_range2 THEN '0' WHEN $val_2 > $get_range2 THEN $val_2 END AS $val_2,CASE WHEN $val_3 < $get_range3 THEN '0' WHEN $val_3 > $get_range3 THEN $val_3 END AS $val_3,CASE WHEN $val_4 < $get_range4 THEN '0' WHEN $val_4 > $get_range4 THEN $val_4 END AS $val_4,CASE WHEN $val_5 < $get_range5 THEN '0' WHEN $val_5 > $get_range5 THEN $val_5 END AS $val_5,CASE WHEN $val_6 < $get_range6 THEN '0' WHEN $val_6 > $get_range6 THEN $val_6 END AS $val_6,CASE WHEN $val_7 < $get_range7 THEN '0' WHEN $val_7 > $get_range7 THEN $val_7 END AS $val_7,CASE WHEN $val_8 < $get_range8 THEN '0' WHEN $val_8 > $get_range8 THEN $val_8 END AS $val_8,CASE WHEN $val_9 < $get_range9 THEN '0' WHEN $val_9 > $get_range9 THEN $val_9 END AS $val_9,CASE WHEN $val_10 < $get_range10 THEN '0' WHEN $val_10 > $get_range10 THEN $val_10 END AS $val_10,CASE WHEN $val_11 < $get_range11 THEN '0' WHEN $val_11 > $get_range11 THEN $val_11 END AS $val_11,CASE WHEN $val_12 < $get_range12 THEN '0' WHEN $val_12 > $get_range12 THEN $val_12 END AS $val_12 FROM dt_aio WHERE timing BETWEEN '$new_date1' AND '$new_date2' ORDER BY dt_id ASC");
                } else if (sizeof($req->all()[0]) == 13) {
                    $val_1 = DB::select("SELECT timing,rdl25_volume, rdl25_mass, stfm1_flow_tot, stfm1_temp, stfm1_pressure, stfm2_flow_tot, stfm2_temp, stfm2_pressure, CASE WHEN $val_1 < $get_range1 THEN '0' WHEN $val_1 > $get_range1 THEN $val_1 END AS $val_1, CASE WHEN $val_2 < $get_range2 THEN '0' WHEN $val_2 > $get_range2 THEN $val_2 END AS $val_2,CASE WHEN $val_3 < $get_range3 THEN '0' WHEN $val_3 > $get_range3 THEN $val_3 END AS $val_3,CASE WHEN $val_4 < $get_range4 THEN '0' WHEN $val_4 > $get_range4 THEN $val_4 END AS $val_4,CASE WHEN $val_5 < $get_range5 THEN '0' WHEN $val_5 > $get_range5 THEN $val_5 END AS $val_5,CASE WHEN $val_6 < $get_range6 THEN '0' WHEN $val_6 > $get_range6 THEN $val_6 END AS $val_6,CASE WHEN $val_7 < $get_range7 THEN '0' WHEN $val_7 > $get_range7 THEN $val_7 END AS $val_7,CASE WHEN $val_8 < $get_range8 THEN '0' WHEN $val_8 > $get_range8 THEN $val_8 END AS $val_8,CASE WHEN $val_9 < $get_range9 THEN '0' WHEN $val_9 > $get_range9 THEN $val_9 END AS $val_9,CASE WHEN $val_10 < $get_range10 THEN '0' WHEN $val_10 > $get_range10 THEN $val_10 END AS $val_10,CASE WHEN $val_11 < $get_range11 THEN '0' WHEN $val_11 > $get_range11 THEN $val_11 END AS $val_11,CASE WHEN $val_12 < $get_range12 THEN '0' WHEN $val_12 > $get_range12 THEN $val_12 END AS $val_12,CASE WHEN $val_13 < $get_range13 THEN '0' WHEN $val_13 > $get_range13 THEN $val_13 END AS $val_13 FROM dt_aio WHERE timing BETWEEN '$new_date1' AND '$new_date2' ORDER BY dt_id ASC");
                } else if (sizeof($req->all()[0]) == 14) {
                    $val_1 = DB::select("SELECT timing,rdl25_volume, rdl25_mass, stfm1_flow_tot, stfm1_temp, stfm1_pressure, stfm2_flow_tot, stfm2_temp, stfm2_pressure, CASE WHEN $val_1 < $get_range1 THEN '0' WHEN $val_1 > $get_range1 THEN $val_1 END AS $val_1, CASE WHEN $val_2 < $get_range2 THEN '0' WHEN $val_2 > $get_range2 THEN $val_2 END AS $val_2,CASE WHEN $val_3 < $get_range3 THEN '0' WHEN $val_3 > $get_range3 THEN $val_3 END AS $val_3,CASE WHEN $val_4 < $get_range4 THEN '0' WHEN $val_4 > $get_range4 THEN $val_4 END AS $val_4,CASE WHEN $val_5 < $get_range5 THEN '0' WHEN $val_5 > $get_range5 THEN $val_5 END AS $val_5,CASE WHEN $val_6 < $get_range6 THEN '0' WHEN $val_6 > $get_range6 THEN $val_6 END AS $val_6,CASE WHEN $val_7 < $get_range7 THEN '0' WHEN $val_7 > $get_range7 THEN $val_7 END AS $val_7,CASE WHEN $val_8 < $get_range8 THEN '0' WHEN $val_8 > $get_range8 THEN $val_8 END AS $val_8,CASE WHEN $val_9 < $get_range9 THEN '0' WHEN $val_9 > $get_range9 THEN $val_9 END AS $val_9,CASE WHEN $val_10 < $get_range10 THEN '0' WHEN $val_10 > $get_range10 THEN $val_10 END AS $val_10,CASE WHEN $val_11 < $get_range11 THEN '0' WHEN $val_11 > $get_range11 THEN $val_11 END AS $val_11,CASE WHEN $val_12 < $get_range12 THEN '0' WHEN $val_12 > $get_range12 THEN $val_12 END AS $val_12,CASE WHEN $val_13 < $get_range13 THEN '0' WHEN $val_13 > $get_range13 THEN $val_13 END AS $val_13,CASE WHEN $val_14 < $get_range14 THEN '0' WHEN $val_14 > $get_range14 THEN $val_14 END AS $val_14 FROM dt_aio WHERE timing BETWEEN '$new_date1' AND '$new_date2' ORDER BY dt_id ASC");
                } else if (sizeof($req->all()[0]) == 15) {
                    $val_1 = DB::select("SELECT timing,rdl25_volume, rdl25_mass, stfm1_flow_tot, stfm1_temp, stfm1_pressure, stfm2_flow_tot, stfm2_temp, stfm2_pressure, CASE WHEN $val_1 < $get_range1 THEN '0' WHEN $val_1 > $get_range1 THEN $val_1 END AS $val_1, CASE WHEN $val_2 < $get_range2 THEN '0' WHEN $val_2 > $get_range2 THEN $val_2 END AS $val_2,CASE WHEN $val_3 < $get_range3 THEN '0' WHEN $val_3 > $get_range3 THEN $val_3 END AS $val_3,CASE WHEN $val_4 < $get_range4 THEN '0' WHEN $val_4 > $get_range4 THEN $val_4 END AS $val_4,CASE WHEN $val_5 < $get_range5 THEN '0' WHEN $val_5 > $get_range5 THEN $val_5 END AS $val_5,CASE WHEN $val_6 < $get_range6 THEN '0' WHEN $val_6 > $get_range6 THEN $val_6 END AS $val_6,CASE WHEN $val_7 < $get_range7 THEN '0' WHEN $val_7 > $get_range7 THEN $val_7 END AS $val_7,CASE WHEN $val_8 < $get_range8 THEN '0' WHEN $val_8 > $get_range8 THEN $val_8 END AS $val_8,CASE WHEN $val_9 < $get_range9 THEN '0' WHEN $val_9 > $get_range9 THEN $val_9 END AS $val_9,CASE WHEN $val_10 < $get_range10 THEN '0' WHEN $val_10 > $get_range10 THEN $val_10 END AS $val_10,CASE WHEN $val_11 < $get_range11 THEN '0' WHEN $val_11 > $get_range11 THEN $val_11 END AS $val_11,CASE WHEN $val_12 < $get_range12 THEN '0' WHEN $val_12 > $get_range12 THEN $val_12 END AS $val_12,CASE WHEN $val_13 < $get_range13 THEN '0' WHEN $val_13 > $get_range13 THEN $val_13 END AS $val_13,CASE WHEN $val_14 < $get_range14 THEN '0' WHEN $val_14 > $get_range14 THEN $val_14 END AS $val_14,CASE WHEN $val_15 < $get_range15 THEN '0' WHEN $val_15 > $get_range15 THEN $val_15 END AS $val_15 FROM dt_aio WHERE timing BETWEEN '$new_date1' AND '$new_date2' ORDER BY dt_id ASC");
                } else if (sizeof($req->all()[0]) == 16) {
                    $val_1 = DB::select("SELECT timing,rdl25_volume, rdl25_mass, stfm1_flow_tot, stfm1_temp, stfm1_pressure, stfm2_flow_tot, stfm2_temp, stfm2_pressure, CASE WHEN $val_1 < $get_range1 THEN '0' WHEN $val_1 > $get_range1 THEN $val_1 END AS $val_1, CASE WHEN $val_2 < $get_range2 THEN '0' WHEN $val_2 > $get_range2 THEN $val_2 END AS $val_2,CASE WHEN $val_3 < $get_range3 THEN '0' WHEN $val_3 > $get_range3 THEN $val_3 END AS $val_3,CASE WHEN $val_4 < $get_range4 THEN '0' WHEN $val_4 > $get_range4 THEN $val_4 END AS $val_4,CASE WHEN $val_5 < $get_range5 THEN '0' WHEN $val_5 > $get_range5 THEN $val_5 END AS $val_5,CASE WHEN $val_6 < $get_range6 THEN '0' WHEN $val_6 > $get_range6 THEN $val_6 END AS $val_6,CASE WHEN $val_7 < $get_range7 THEN '0' WHEN $val_7 > $get_range7 THEN $val_7 END AS $val_7,CASE WHEN $val_8 < $get_range8 THEN '0' WHEN $val_8 > $get_range8 THEN $val_8 END AS $val_8,CASE WHEN $val_9 < $get_range9 THEN '0' WHEN $val_9 > $get_range9 THEN $val_9 END AS $val_9,CASE WHEN $val_10 < $get_range10 THEN '0' WHEN $val_10 > $get_range10 THEN $val_10 END AS $val_10,CASE WHEN $val_11 < $get_range11 THEN '0' WHEN $val_11 > $get_range11 THEN $val_11 END AS $val_11,CASE WHEN $val_12 < $get_range12 THEN '0' WHEN $val_12 > $get_range12 THEN $val_12 END AS $val_12,CASE WHEN $val_13 < $get_range13 THEN '0' WHEN $val_13 > $get_range13 THEN $val_13 END AS $val_13,CASE WHEN $val_14 < $get_range14 THEN '0' WHEN $val_14 > $get_range14 THEN $val_14 END AS $val_14,CASE WHEN $val_15 < $get_range15 THEN '0' WHEN $val_15 > $get_range15 THEN $val_15 END AS $val_15,CASE WHEN $val_16 < $get_range16 THEN '0' WHEN $val_16 > $get_range16 THEN $val_16 END AS $val_16 FROM dt_aio WHERE timing BETWEEN '$new_date1' AND '$new_date2' ORDER BY dt_id ASC");
                }
            }
        }
        $val_array = [];
        $j = 0;
        if($interval == 1){
            for($i=0; $i<sizeof($val_1); $i+=1){

                $val_array[$j] = $val_1[$i];
                $j++;
            }
        }else if($interval == 2){
            for($i=0; $i<sizeof($val_1); $i+=2){
                $val_array[$j] = $val_1[$i];
                $j++;
            }
        }else if($interval == 5){
            for($i=0; $i<sizeof($val_1); $i+=5){
                $val_array[$j] = $val_1[$i];
                $j++;
            }
        }else if($interval == 10){
            for($i=0; $i<sizeof($val_1); $i+=10){
                $val_array[$j] = $val_1[$i];
                $j++;
            }
        }else if($interval == 30){
            for($i=0; $i<sizeof($val_1); $i+=30){
                $val_array[$j] = $val_1[$i];
                $j++;
            }
        }else if($interval == 60){
            for($i=0; $i<sizeof($val_1); $i+=60){
                $val_array[$j] = $val_1[$i];
                $j++;
            }
        }
        
       

        $response = [
            'val_1' => $val_array,
            'get_range' => $get_range,
            'status_code' => 200
        ];
        return response()->json($response);
    }
    public function ShowAverage(Request $req)
    {
        $val_1 = '';
        $val_2 = '';
        $val_3 = '';
        $val_4 = '';
        $val_5 = '';
        $val_6 = '';
        $val_7  = '';
        $val_8  = '';
        $val_9  = '';
        $val_10 = '';
        $val_11 = '';
        $val_12 = '';
        $val_13 = '';
        $val_14 = '';
        $val_15 = '';
        $val_16 = '';

        $interval = $req->all()[1];
        $timing = $req->all()[2];
        $startdata = $req->all()[3];
        $enddata = $req->all()[4];
        $filter_range = $req->all()[5];
        $date1 = strtotime($startdata);
        $date2 = strtotime($enddata);
        $new_date1 = date('Y-m-d H:i:s', $date1);
        $new_date2 = date('Y-m-d H:i:s', $date2);
        if (sizeof($req->all()[0]) == 1) {
            $val_1 = $req->all()[0][0];
        }
        if (sizeof($req->all()[0]) == 2) {
            $val_1 = $req->all()[0][0];
            $val_2 = $req->all()[0][1];
        }
        if (sizeof($req->all()[0]) == 3) {
            $val_1 = $req->all()[0][0];
            $val_2 = $req->all()[0][1];
            $val_3 = $req->all()[0][2];
        }
        if (sizeof($req->all()[0]) == 4) {
            $val_1 = $req->all()[0][0];
            $val_2 = $req->all()[0][1];
            $val_3 = $req->all()[0][2];
            $val_4 = $req->all()[0][3];
        }
        if (sizeof($req->all()[0]) == 5) {
            $val_1 = $req->all()[0][0];
            $val_2 = $req->all()[0][1];
            $val_3 = $req->all()[0][2];
            $val_4 = $req->all()[0][3];
            $val_5 = $req->all()[0][4];
        }
        if (sizeof($req->all()[0]) == 6) {
            $val_1 = $req->all()[0][0];
            $val_2 = $req->all()[0][1];
            $val_3 = $req->all()[0][2];
            $val_4 = $req->all()[0][3];
            $val_5 = $req->all()[0][4];
            $val_6 = $req->all()[0][5];
        }
        if (sizeof($req->all()[0]) == 7) {
            $val_1 = $req->all()[0][0];
            $val_2 = $req->all()[0][1];
            $val_3 = $req->all()[0][2];
            $val_4 = $req->all()[0][3];
            $val_5 = $req->all()[0][4];
            $val_6 = $req->all()[0][5];
            $val_7 = $req->all()[0][6];
        }
        if (sizeof($req->all()[0]) == 8) {
            $val_1 = $req->all()[0][0];
            $val_2 = $req->all()[0][1];
            $val_3 = $req->all()[0][2];
            $val_4 = $req->all()[0][3];
            $val_5 = $req->all()[0][4];
            $val_6 = $req->all()[0][5];
            $val_7 = $req->all()[0][6];
            $val_8 = $req->all()[0][7];
        }
        if (sizeof($req->all()[0]) == 9) {
            $val_1 = $req->all()[0][0];
            $val_2 = $req->all()[0][1];
            $val_3 = $req->all()[0][2];
            $val_4 = $req->all()[0][3];
            $val_5 = $req->all()[0][4];
            $val_6 = $req->all()[0][5];
            $val_7 = $req->all()[0][6];
            $val_8 = $req->all()[0][7];
            $val_9 = $req->all()[0][8];
        }
        if (sizeof($req->all()[0]) == 10) {
            $val_1 = $req->all()[0][0];
            $val_2 = $req->all()[0][1];
            $val_3 = $req->all()[0][2];
            $val_4 = $req->all()[0][3];
            $val_5 = $req->all()[0][4];
            $val_6 = $req->all()[0][5];
            $val_7 = $req->all()[0][6];
            $val_8 = $req->all()[0][7];
            $val_9 = $req->all()[0][8];
            $val_10 = $req->all()[0][9];
        }
        if (sizeof($req->all()[0]) == 11) {
            $val_1 = $req->all()[0][0];
            $val_2 = $req->all()[0][1];
            $val_3 = $req->all()[0][2];
            $val_4 = $req->all()[0][3];
            $val_5 = $req->all()[0][4];
            $val_6 = $req->all()[0][5];
            $val_7 = $req->all()[0][6];
            $val_8 = $req->all()[0][7];
            $val_9 = $req->all()[0][8];
            $val_10 = $req->all()[0][9];
            $val_11 = $req->all()[0][10];
        }
        if (sizeof($req->all()[0]) == 12) {
            $val_1 = $req->all()[0][0];
            $val_2 = $req->all()[0][1];
            $val_3 = $req->all()[0][2];
            $val_4 = $req->all()[0][3];
            $val_5 = $req->all()[0][4];
            $val_6 = $req->all()[0][5];
            $val_7 = $req->all()[0][6];
            $val_8 = $req->all()[0][7];
            $val_9 = $req->all()[0][8];
            $val_10 = $req->all()[0][9];
            $val_11 = $req->all()[0][10];
            $val_12 = $req->all()[0][11];
        }
        if (sizeof($req->all()[0]) == 13) {
            $val_1 = $req->all()[0][0];
            $val_2 = $req->all()[0][1];
            $val_3 = $req->all()[0][2];
            $val_4 = $req->all()[0][3];
            $val_5 = $req->all()[0][4];
            $val_6 = $req->all()[0][5];
            $val_7 = $req->all()[0][6];
            $val_8 = $req->all()[0][7];
            $val_9 = $req->all()[0][8];
            $val_10 = $req->all()[0][9];
            $val_11 = $req->all()[0][10];
            $val_12 = $req->all()[0][11];
            $val_13 = $req->all()[0][12];
        }
        if (sizeof($req->all()[0]) == 14) {
            $val_1 = $req->all()[0][0];
            $val_2 = $req->all()[0][1];
            $val_3 = $req->all()[0][2];
            $val_4 = $req->all()[0][3];
            $val_5 = $req->all()[0][4];
            $val_6 = $req->all()[0][5];
            $val_7 = $req->all()[0][6];
            $val_8 = $req->all()[0][7];
            $val_9 = $req->all()[0][8];
            $val_10 = $req->all()[0][9];
            $val_11 = $req->all()[0][10];
            $val_12 = $req->all()[0][11];
            $val_13 = $req->all()[0][12];
            $val_14 = $req->all()[0][13];
        }
        if (sizeof($req->all()[0]) == 15) {
            $val_1 = $req->all()[0][0];
            $val_2 = $req->all()[0][1];
            $val_3 = $req->all()[0][2];
            $val_4 = $req->all()[0][3];
            $val_5 = $req->all()[0][4];
            $val_6 = $req->all()[0][5];
            $val_7 = $req->all()[0][6];
            $val_8 = $req->all()[0][7];
            $val_9 = $req->all()[0][8];
            $val_10 = $req->all()[0][9];
            $val_11 = $req->all()[0][10];
            $val_12 = $req->all()[0][11];
            $val_13 = $req->all()[0][12];
            $val_14 = $req->all()[0][13];
            $val_15 = $req->all()[0][14];
        }
        if (sizeof($req->all()[0]) == 16) {
            $val_1 = $req->all()[0][0];
            $val_2 = $req->all()[0][1];
            $val_3 = $req->all()[0][2];
            $val_4 = $req->all()[0][3];
            $val_5 = $req->all()[0][4];
            $val_6 = $req->all()[0][5];
            $val_7 = $req->all()[0][6];
            $val_8 = $req->all()[0][7];
            $val_9 = $req->all()[0][8];
            $val_10 = $req->all()[0][9];
            $val_11 = $req->all()[0][10];
            $val_12 = $req->all()[0][11];
            $val_13 = $req->all()[0][12];
            $val_14 = $req->all()[0][13];
            $val_15 = $req->all()[0][14];
            $val_16 = $req->all()[0][15];
        }
        
        $yesterday_date = date("Y-m-d", strtotime("yesterday"));
        $today_date = date("Y-m-d", strtotime("-1 month"));
        $sub_date = "10:00";
        $con_date = $yesterday_date . " " . $sub_date;
        $con_date2 = $today_date . " " . $sub_date;
        $get_range = DB::select("SELECT * FROM multi_ranges ORDER BY range_id DESC LIMIT 1");
        $get_range1 = '';
        $get_range2 = '';
        $get_range3 = '';
        $get_range4 = '';
        $get_range5 = '';
        $get_range6 = '';
        $get_range7 = '';
        $get_range8 = '';
        $get_range9 = '';
        $get_range10 = '';
        $get_range11 = '';
        $get_range12 = '';
        $get_range13 = '';
        $get_range14 = '';
        $get_range15 = '';
        $get_range16 = '';
        if ($val_1) {
            $get_range1 = $get_range[0]->$val_1;
        }
        if ($val_2) {
            $get_range2 = $get_range[0]->$val_2;
        }
        if ($val_3) {
            $get_range3 = $get_range[0]->$val_3;
        }
        if ($val_4) {
            $get_range4 = $get_range[0]->$val_4;
        }
        if ($val_5) {
            $get_range5 = $get_range[0]->$val_5;
        }
        if ($val_6) {
            $get_range6 = $get_range[0]->$val_6;
        }
        if ($val_7) {
            $get_range7 = $get_range[0]->$val_7;
        }
        if ($val_8) {
            $get_range8 = $get_range[0]->$val_8;
        }
        if ($val_9) {
            $get_range9 = $get_range[0]->$val_9;
        }
        if ($val_10) {
            $get_range10 = $get_range[0]->$val_10;
        }
        if ($val_11) {
            $get_range11 = $get_range[0]->$val_11;
        }
        if ($val_12) {
            $get_range12 = $get_range[0]->$val_12;
        }
        if ($val_13) {
            $get_range13 = $get_range[0]->$val_13;
        }
        if ($val_14) {
            $get_range14 = $get_range[0]->$val_14;
        }
        if ($val_15) {
            $get_range15 = $get_range[0]->$val_15;
        }
        if ($val_16) {
            $get_range16 = $get_range[0]->$val_16;
        }

        if ($filter_range == 'n') {
            if ($timing == '1') {
                if (sizeof($req->all()[0]) == 1) {
                    $val_1 = DB::select("SELECT timing, $val_1 FROM dt_aio WHERE timing > now() - interval 24 hour AND dt_id MOD '$interval' = 0");
                } else if (sizeof($req->all()[0]) == 2) {
                    $val_1 = DB::select("SELECT timing, $val_1, $val_2 FROM dt_aio WHERE timing > now() - interval 24 hour AND dt_id MOD '$interval' = 0");
                } else if (sizeof($req->all()[0]) == 3) {
                    $val_1 = DB::select("SELECT timing, $val_1, $val_2,$val_3 FROM dt_aio WHERE timing > now() - interval 24 hour AND dt_id MOD '$interval' = 0");
                } else if (sizeof($req->all()[0]) == 4) {
                    $val_1 = DB::select("SELECT timing, $val_1, $val_2,$val_3,$val_4 FROM dt_aio WHERE timing > now() - interval 24 hour AND dt_id MOD '$interval' = 0");
                } else if (sizeof($req->all()[0]) == 5) {
                    $val_1 = DB::select("SELECT timing, $val_1, $val_2,$val_3,$val_4,$val_5 FROM dt_aio WHERE timing > now() - interval 24 hour AND dt_id MOD '$interval' = 0");
                } else if (sizeof($req->all()[0]) == 6) {
                    $val_1 = DB::select("SELECT timing, $val_1, $val_2,$val_3,$val_4,$val_5,$val_6 FROM dt_aio WHERE timing > now() - interval 24 hour AND dt_id MOD '$interval' = 0");
                } else if (sizeof($req->all()[0]) == 7) {
                    $val_1 = DB::select("SELECT timing, $val_1, $val_2,$val_3,$val_4,$val_5,$val_6,$val_7 FROM dt_aio WHERE timing > now() - interval 24 hour AND dt_id MOD '$interval' = 0");
                } else if (sizeof($req->all()[0]) == 8) {
                    $val_1 = DB::select("SELECT timing, $val_1, $val_2,$val_3,$val_4,$val_5,$val_6,$val_7,$val_8 FROM dt_aio WHERE timing > now() - interval 24 hour AND dt_id MOD '$interval' = 0");
                } else if (sizeof($req->all()[0]) == 9) {
                    $val_1 = DB::select("SELECT timing, $val_1, $val_2,$val_3,$val_4,$val_5,$val_6,$val_7,$val_8,$val_9 FROM dt_aio WHERE timing > now() - interval 24 hour AND dt_id MOD '$interval' = 0");
                } else if (sizeof($req->all()[0]) == 10) {
                    $val_1 = DB::select("SELECT timing, $val_1, $val_2,$val_3,$val_4,$val_5,$val_6,$val_7,$val_8,$val_9,$val_10 FROM dt_aio WHERE timing > now() - interval 24 hour AND dt_id MOD '$interval' = 0");
                } else if (sizeof($req->all()[0]) == 11) {
                    $val_1 = DB::select("SELECT timing, $val_1, $val_2,$val_3,$val_4,$val_5,$val_6,$val_7,$val_8,$val_9,$val_10,$val_11 FROM dt_aio WHERE timing > now() - interval 24 hour AND dt_id MOD '$interval' = 0");
                } else if (sizeof($req->all()[0]) == 12) {
                    $val_1 = DB::select("SELECT timing, $val_1, $val_2,$val_3,$val_4,$val_5,$val_6,$val_7,$val_8,$val_9,$val_10,$val_11,$val_12 FROM dt_aio WHERE timing > now() - interval 24 hour AND dt_id MOD '$interval' = 0");
                } else if (sizeof($req->all()[0]) == 13) {
                    $val_1 = DB::select("SELECT timing, $val_1, $val_2,$val_3,$val_4,$val_5,$val_6,$val_7,$val_8,$val_9,$val_10,$val_11,$val_12,$val_13 FROM dt_aio WHERE timing > now() - interval 24 hour AND dt_id MOD '$interval' = 0");
                } else if (sizeof($req->all()[0]) == 14) {
                    $val_1 = DB::select("SELECT timing, $val_1, $val_2,$val_3,$val_4,$val_5,$val_6,$val_7,$val_8,$val_9,$val_10,$val_11,$val_12,$val_13,$val_14 FROM dt_aio WHERE timing > now() - interval 24 hour AND dt_id MOD '$interval' = 0");
                } else if (sizeof($req->all()[0]) == 15) {
                    $val_1 = DB::select("SELECT timing, $val_1, $val_2,$val_3,$val_4,$val_5,$val_6,$val_7,$val_8,$val_9,$val_10,$val_11,$val_12,$val_13,$val_14,$val_15 FROM dt_aio WHERE timing > now() - interval 24 hour AND dt_id MOD '$interval' = 0");
                } else if (sizeof($req->all()[0]) == 16) {
                    $val_1 = DB::select("SELECT timing, $val_1, $val_2,$val_3,$val_4,$val_5,$val_6,$val_7,$val_8,$val_9,$val_10,$val_11,$val_12,$val_13,$val_14,$val_15,$val_16 FROM dt_aio WHERE timing > now() - interval 24 hour AND dt_id MOD '$interval' = 0");
                }
            } elseif ($timing == '2') {
                if (sizeof($req->all()[0]) == 1) {
                    $val_1 = DB::select("SELECT timing, $val_1 FROM dt_aio WHERE timing >= DATE_SUB(CURDATE(), INTERVAL 14 hour) AND timing <= DATE_ADD(CURDATE(),INTERVAL 10 hour) AND dt_id MOD '$interval' = 0");
                } else if (sizeof($req->all()[0]) == 2) {
                    $val_1 = DB::select("SELECT timing, $val_1, $val_2 FROM dt_aio WHERE timing >= DATE_SUB(CURDATE(), INTERVAL 14 hour) AND timing <= DATE_ADD(CURDATE(),INTERVAL 10 hour) AND dt_id MOD '$interval' = 0");
                } else if (sizeof($req->all()[0]) == 3) {
                    $val_1 = DB::select("SELECT timing, $val_1, $val_2,$val_3 FROM dt_aio WHERE timing >= DATE_SUB(CURDATE(), INTERVAL 14 hour) AND timing <= DATE_ADD(CURDATE(),INTERVAL 10 hour) AND dt_id MOD '$interval' = 0");
                } else if (sizeof($req->all()[0]) == 4) {
                    $val_1 = DB::select("SELECT timing, $val_1, $val_2,$val_3,$val_4 FROM dt_aio WHERE timing >= DATE_SUB(CURDATE(), INTERVAL 14 hour) AND timing <= DATE_ADD(CURDATE(),INTERVAL 10 hour) AND dt_id MOD '$interval' = 0");
                } else if (sizeof($req->all()[0]) == 5) {
                    $val_1 = DB::select("SELECT timing, $val_1, $val_2,$val_3,$val_4,$val_5 FROM dt_aio WHERE timing >= DATE_SUB(CURDATE(), INTERVAL 14 hour) AND timing <= DATE_ADD(CURDATE(),INTERVAL 10 hour) AND dt_id MOD '$interval' = 0");
                } else if (sizeof($req->all()[0]) == 6) {
                    $val_1 = DB::select("SELECT timing, $val_1, $val_2,$val_3,$val_4,$val_5,$val_6 FROM dt_aio WHERE timing >= DATE_SUB(CURDATE(), INTERVAL 14 hour) AND timing <= DATE_ADD(CURDATE(),INTERVAL 10 hour) AND dt_id MOD '$interval' = 0");
                } else if (sizeof($req->all()[0]) == 7) {
                    $val_1 = DB::select("SELECT timing, $val_1, $val_2,$val_3,$val_4,$val_5,$val_6,$val_7 FROM dt_aio WHERE timing >= DATE_SUB(CURDATE(), INTERVAL 14 hour) AND timing <= DATE_ADD(CURDATE(),INTERVAL 10 hour) AND dt_id MOD '$interval' = 0");
                } else if (sizeof($req->all()[0]) == 8) {
                    $val_1 = DB::select("SELECT timing, $val_1, $val_2,$val_3,$val_4,$val_5,$val_6,$val_7,$val_8 FROM dt_aio WHERE timing >= DATE_SUB(CURDATE(), INTERVAL 14 hour) AND timing <= DATE_ADD(CURDATE(),INTERVAL 10 hour) AND dt_id MOD '$interval' = 0");
                } else if (sizeof($req->all()[0]) == 9) {
                    $val_1 = DB::select("SELECT timing, $val_1, $val_2,$val_3,$val_4,$val_5,$val_6,$val_7,$val_8,$val_9 FROM dt_aio WHERE timing >= DATE_SUB(CURDATE(), INTERVAL 14 hour) AND timing <= DATE_ADD(CURDATE(),INTERVAL 10 hour) AND dt_id MOD '$interval' = 0");
                } else if (sizeof($req->all()[0]) == 10) {
                    $val_1 = DB::select("SELECT timing, $val_1, $val_2,$val_3,$val_4,$val_5,$val_6,$val_7,$val_8,$val_9,$val_10 FROM dt_aio WHERE timing >= DATE_SUB(CURDATE(), INTERVAL 14 hour) AND timing <= DATE_ADD(CURDATE(),INTERVAL 10 hour) AND dt_id MOD '$interval' = 0");
                } else if (sizeof($req->all()[0]) == 11) {
                    $val_1 = DB::select("SELECT timing, $val_1, $val_2,$val_3,$val_4,$val_5,$val_6,$val_7,$val_8,$val_9,$val_10,$val_11 FROM dt_aio WHERE timing >= DATE_SUB(CURDATE(), INTERVAL 14 hour) AND timing <= DATE_ADD(CURDATE(),INTERVAL 10 hour) AND dt_id MOD '$interval' = 0");
                } else if (sizeof($req->all()[0]) == 12) {
                    $val_1 = DB::select("SELECT timing, $val_1, $val_2,$val_3,$val_4,$val_5,$val_6,$val_7,$val_8,$val_9,$val_10,$val_11,$val_12 FROM dt_aio WHERE timing >= DATE_SUB(CURDATE(), INTERVAL 14 hour) AND timing <= DATE_ADD(CURDATE(),INTERVAL 10 hour) AND dt_id MOD '$interval' = 0");
                } else if (sizeof($req->all()[0]) == 13) {
                    $val_1 = DB::select("SELECT timing, $val_1, $val_2,$val_3,$val_4,$val_5,$val_6,$val_7,$val_8,$val_9,$val_10,$val_11,$val_12,$val_13 FROM dt_aio WHERE timing >= DATE_SUB(CURDATE(), INTERVAL 14 hour) AND timing <= DATE_ADD(CURDATE(),INTERVAL 10 hour) AND dt_id MOD '$interval' = 0");
                } else if (sizeof($req->all()[0]) == 14) {
                    $val_1 = DB::select("SELECT timing, $val_1, $val_2,$val_3,$val_4,$val_5,$val_6,$val_7,$val_8,$val_9,$val_10,$val_11,$val_12,$val_13,$val_14 FROM dt_aio WHERE timing >= DATE_SUB(CURDATE(), INTERVAL 14 hour) AND timing <= DATE_ADD(CURDATE(),INTERVAL 10 hour) AND dt_id MOD '$interval' = 0");
                } else if (sizeof($req->all()[0]) == 15) {
                    $val_1 = DB::select("SELECT timing, $val_1, $val_2,$val_3,$val_4,$val_5,$val_6,$val_7,$val_8,$val_9,$val_10,$val_11,$val_12,$val_13,$val_14,$val_15 FROM dt_aio WHERE timing >= DATE_SUB(CURDATE(), INTERVAL 14 hour) AND timing <= DATE_ADD(CURDATE(),INTERVAL 10 hour) AND dt_id MOD '$interval' = 0");
                } else if (sizeof($req->all()[0]) == 16) {
                    $val_1 = DB::select("SELECT timing, $val_1, $val_2,$val_3,$val_4,$val_5,$val_6,$val_7,$val_8,$val_9,$val_10,$val_11,$val_12,$val_13,$val_14,$val_15,$val_16 FROM dt_aio WHERE timing >= DATE_SUB(CURDATE(), INTERVAL 14 hour) AND timing <= DATE_ADD(CURDATE(),INTERVAL 10 hour) AND dt_id MOD '$interval' = 0");
                }
            } elseif ($timing == '3') {
                if (sizeof($req->all()[0]) == 1) {
                    $val_1 = DB::select("SELECT timing, $val_1 FROM dt_aio WHERE timing > DATE_SUB(CURDATE(), INTERVAL 7 day) AND dt_id MOD '$interval' = 0");
                } else if (sizeof($req->all()[0]) == 2) {
                    $val_1 = DB::select("SELECT timing, $val_1, $val_2 FROM dt_aio WHERE timing > DATE_SUB(CURDATE(), INTERVAL 7 day) AND dt_id MOD '$interval' = 0");
                } else if (sizeof($req->all()[0]) == 3) {
                    $val_1 = DB::select("SELECT timing, $val_1, $val_2,$val_3 FROM dt_aio WHERE timing > DATE_SUB(CURDATE(), INTERVAL 7 day) AND dt_id MOD '$interval' = 0");
                } else if (sizeof($req->all()[0]) == 4) {
                    $val_1 = DB::select("SELECT timing, $val_1, $val_2,$val_3,$val_4 FROM dt_aio WHERE timing > DATE_SUB(CURDATE(), INTERVAL 7 day) AND dt_id MOD '$interval' = 0");
                } else if (sizeof($req->all()[0]) == 5) {
                    $val_1 = DB::select("SELECT timing, $val_1, $val_2,$val_3,$val_4,$val_5 FROM dt_aio WHERE timing > DATE_SUB(CURDATE(), INTERVAL 7 day) AND dt_id MOD '$interval' = 0");
                } else if (sizeof($req->all()[0]) == 6) {
                    $val_1 = DB::select("SELECT timing, $val_1, $val_2,$val_3,$val_4,$val_5,$val_6 FROM dt_aio WHERE timing > DATE_SUB(CURDATE(), INTERVAL 7 day) AND dt_id MOD '$interval' = 0");
                } else if (sizeof($req->all()[0]) == 7) {
                    $val_1 = DB::select("SELECT timing, $val_1, $val_2,$val_3,$val_4,$val_5,$val_6,$val_7 FROM dt_aio WHERE timing > DATE_SUB(CURDATE(), INTERVAL 7 day) AND dt_id MOD '$interval' = 0");
                } else if (sizeof($req->all()[0]) == 8) {
                    $val_1 = DB::select("SELECT timing, $val_1, $val_2,$val_3,$val_4,$val_5,$val_6,$val_7,$val_8 FROM dt_aio WHERE timing > DATE_SUB(CURDATE(), INTERVAL 7 day) AND dt_id MOD '$interval' = 0");
                } else if (sizeof($req->all()[0]) == 9) {
                    $val_1 = DB::select("SELECT timing, $val_1, $val_2,$val_3,$val_4,$val_5,$val_6,$val_7,$val_8,$val_9 FROM dt_aio WHERE timing > DATE_SUB(CURDATE(), INTERVAL 7 day) AND dt_id MOD '$interval' = 0");
                } else if (sizeof($req->all()[0]) == 10) {
                    $val_1 = DB::select("SELECT timing, $val_1, $val_2,$val_3,$val_4,$val_5,$val_6,$val_7,$val_8,$val_9,$val_10 FROM dt_aio WHERE timing > DATE_SUB(CURDATE(), INTERVAL 7 day) AND dt_id MOD '$interval' = 0");
                } else if (sizeof($req->all()[0]) == 11) {
                    $val_1 = DB::select("SELECT timing, $val_1, $val_2,$val_3,$val_4,$val_5,$val_6,$val_7,$val_8,$val_9,$val_10,$val_11 FROM dt_aio WHERE timing > DATE_SUB(CURDATE(), INTERVAL 7 day) AND dt_id MOD '$interval' = 0");
                } else if (sizeof($req->all()[0]) == 12) {
                    $val_1 = DB::select("SELECT timing, $val_1, $val_2,$val_3,$val_4,$val_5,$val_6,$val_7,$val_8,$val_9,$val_10,$val_11,$val_12 FROM dt_aio WHERE timing > DATE_SUB(CURDATE(), INTERVAL 7 day) AND dt_id MOD '$interval' = 0");
                } else if (sizeof($req->all()[0]) == 13) {
                    $val_1 = DB::select("SELECT timing, $val_1, $val_2,$val_3,$val_4,$val_5,$val_6,$val_7,$val_8,$val_9,$val_10,$val_11,$val_12,$val_13 FROM dt_aio WHERE timing > DATE_SUB(CURDATE(), INTERVAL 7 day) AND dt_id MOD '$interval' = 0");
                } else if (sizeof($req->all()[0]) == 14) {
                    $val_1 = DB::select("SELECT timing, $val_1, $val_2,$val_3,$val_4,$val_5,$val_6,$val_7,$val_8,$val_9,$val_10,$val_11,$val_12,$val_13,$val_14 FROM dt_aio WHERE timing > DATE_SUB(CURDATE(), INTERVAL 7 day) AND dt_id MOD '$interval' = 0");
                } else if (sizeof($req->all()[0]) == 15) {
                    $val_1 = DB::select("SELECT timing, $val_1, $val_2,$val_3,$val_4,$val_5,$val_6,$val_7,$val_8,$val_9,$val_10,$val_11,$val_12,$val_13,$val_14,$val_15 FROM dt_aio WHERE timing > DATE_SUB(CURDATE(), INTERVAL 7 day) AND dt_id MOD '$interval' = 0");
                } else if (sizeof($req->all()[0]) == 16) {
                    $val_1 = DB::select("SELECT timing, $val_1, $val_2,$val_3,$val_4,$val_5,$val_6,$val_7,$val_8,$val_9,$val_10,$val_11,$val_12,$val_13,$val_14,$val_15,$val_16 FROM dt_aio WHERE timing > DATE_SUB(CURDATE(), INTERVAL 7 day) AND dt_id MOD '$interval' = 0");
                }
            } elseif ($timing == '4') {
                if (sizeof($req->all()[0]) == 1) {
                    $val_1 = DB::select("SELECT timing, $val_1 FROM dt_aio WHERE timing > DATE_SUB(CURDATE(), INTERVAL 1 MONTH) AND dt_id MOD '$interval' = 0");
                } else if (sizeof($req->all()[0]) == 2) {
                    $val_1 = DB::select("SELECT timing, $val_1, $val_2 FROM dt_aio WHERE timing > DATE_SUB(CURDATE(), INTERVAL 1 MONTH) AND dt_id MOD '$interval' = 0");
                } else if (sizeof($req->all()[0]) == 3) {
                    $val_1 = DB::select("SELECT timing, $val_1, $val_2,$val_3 FROM dt_aio WHERE timing > DATE_SUB(CURDATE(), INTERVAL 1 MONTH) AND dt_id MOD '$interval' = 0");
                } else if (sizeof($req->all()[0]) == 4) {
                    $val_1 = DB::select("SELECT timing, $val_1, $val_2,$val_3,$val_4 FROM dt_aio WHERE timing > DATE_SUB(CURDATE(), INTERVAL 1 MONTH) AND dt_id MOD '$interval' = 0");
                } else if (sizeof($req->all()[0]) == 5) {
                    $val_1 = DB::select("SELECT timing, $val_1, $val_2,$val_3,$val_4,$val_5 FROM dt_aio WHERE timing > DATE_SUB(CURDATE(), INTERVAL 1 MONTH) AND dt_id MOD '$interval' = 0");
                } else if (sizeof($req->all()[0]) == 6) {
                    $val_1 = DB::select("SELECT timing, $val_1, $val_2,$val_3,$val_4,$val_5,$val_6 FROM dt_aio WHERE timing > DATE_SUB(CURDATE(), INTERVAL 1 MONTH) AND dt_id MOD '$interval' = 0");
                } else if (sizeof($req->all()[0]) == 7) {
                    $val_1 = DB::select("SELECT timing, $val_1, $val_2,$val_3,$val_4,$val_5,$val_6,$val_7 FROM dt_aio WHERE timing > DATE_SUB(CURDATE(), INTERVAL 1 MONTH) AND dt_id MOD '$interval' = 0");
                } else if (sizeof($req->all()[0]) == 8) {
                    $val_1 = DB::select("SELECT timing, $val_1, $val_2,$val_3,$val_4,$val_5,$val_6,$val_7,$val_8 FROM dt_aio WHERE timing > DATE_SUB(CURDATE(), INTERVAL 1 MONTH) AND dt_id MOD '$interval' = 0");
                } else if (sizeof($req->all()[0]) == 9) {
                    $val_1 = DB::select("SELECT timing, $val_1, $val_2,$val_3,$val_4,$val_5,$val_6,$val_7,$val_8,$val_9 FROM dt_aio WHERE timing > DATE_SUB(CURDATE(), INTERVAL 1 MONTH) AND dt_id MOD '$interval' = 0");
                } else if (sizeof($req->all()[0]) == 10) {
                    $val_1 = DB::select("SELECT timing, $val_1, $val_2,$val_3,$val_4,$val_5,$val_6,$val_7,$val_8,$val_9,$val_10 FROM dt_aio WHERE timing > DATE_SUB(CURDATE(), INTERVAL 1 MONTH) AND dt_id MOD '$interval' = 0");
                } else if (sizeof($req->all()[0]) == 11) {
                    $val_1 = DB::select("SELECT timing, $val_1, $val_2,$val_3,$val_4,$val_5,$val_6,$val_7,$val_8,$val_9,$val_10,$val_11 FROM dt_aio WHERE timing > DATE_SUB(CURDATE(), INTERVAL 1 MONTH) AND dt_id MOD '$interval' = 0");
                } else if (sizeof($req->all()[0]) == 12) {
                    $val_1 = DB::select("SELECT timing, $val_1, $val_2,$val_3,$val_4,$val_5,$val_6,$val_7,$val_8,$val_9,$val_10,$val_11,$val_12 FROM dt_aio WHERE timing > DATE_SUB(CURDATE(), INTERVAL 1 MONTH) AND dt_id MOD '$interval' = 0");
                } else if (sizeof($req->all()[0]) == 13) {
                    $val_1 = DB::select("SELECT timing, $val_1, $val_2,$val_3,$val_4,$val_5,$val_6,$val_7,$val_8,$val_9,$val_10,$val_11,$val_12,$val_13 FROM dt_aio WHERE timing > DATE_SUB(CURDATE(), INTERVAL 1 MONTH) AND dt_id MOD '$interval' = 0");
                } else if (sizeof($req->all()[0]) == 14) {
                    $val_1 = DB::select("SELECT timing, $val_1, $val_2,$val_3,$val_4,$val_5,$val_6,$val_7,$val_8,$val_9,$val_10,$val_11,$val_12,$val_13,$val_14 FROM dt_aio WHERE timing > DATE_SUB(CURDATE(), INTERVAL 1 MONTH) AND dt_id MOD '$interval' = 0");
                } else if (sizeof($req->all()[0]) == 15) {
                    $val_1 = DB::select("SELECT timing, $val_1, $val_2,$val_3,$val_4,$val_5,$val_6,$val_7,$val_8,$val_9,$val_10,$val_11,$val_12,$val_13,$val_14,$val_15 FROM dt_aio WHERE timing > DATE_SUB(CURDATE(), INTERVAL 1 MONTH) AND dt_id MOD '$interval' = 0");
                } else if (sizeof($req->all()[0]) == 16) {
                    $val_1 = DB::select("SELECT timing, $val_1, $val_2,$val_3,$val_4,$val_5,$val_6,$val_7,$val_8,$val_9,$val_10,$val_11,$val_12,$val_13,$val_14,$val_15,$val_16 FROM dt_aio WHERE timing > DATE_SUB(CURDATE(), INTERVAL 1 MONTH) AND dt_id MOD '$interval' = 0");
                }
            } elseif ($timing == '5') {
                if (sizeof($req->all()[0]) == 1) {
                    $val_1 = DB::select("SELECT timing, $val_1 FROM dt_aio WHERE timing BETWEEN '$new_date1' AND '$new_date2' AND dt_id MOD '$interval' = 0 ORDER BY dt_id ASC");
                } else if (sizeof($req->all()[0]) == 2) {
                    $val_1 = DB::select("SELECT timing, $val_1, $val_2 FROM dt_aio WHERE timing BETWEEN '$new_date1' AND '$new_date2' AND dt_id MOD '$interval' = 0 ORDER BY dt_id ASC");
                } else if (sizeof($req->all()[0]) == 3) {
                    $val_1 = DB::select("SELECT timing, $val_1, $val_2,$val_3 FROM dt_aio WHERE timing BETWEEN '$new_date1' AND '$new_date2' AND dt_id MOD '$interval' = 0 ORDER BY dt_id ASC");
                } else if (sizeof($req->all()[0]) == 4) {
                    $val_1 = DB::select("SELECT timing, $val_1, $val_2,$val_3,$val_4 FROM dt_aio WHERE timing BETWEEN '$new_date1' AND '$new_date2' AND dt_id MOD '$interval' = 0 ORDER BY dt_id ASC");
                } else if (sizeof($req->all()[0]) == 5) {
                    $val_1 = DB::select("SELECT timing, $val_1, $val_2,$val_3,$val_4,$val_5 FROM dt_aio WHERE timing BETWEEN '$new_date1' AND '$new_date2' AND dt_id MOD '$interval' = 0 ORDER BY dt_id ASC");
                } else if (sizeof($req->all()[0]) == 6) {
                    $val_1 = DB::select("SELECT timing, $val_1, $val_2,$val_3,$val_4,$val_5,$val_6 FROM dt_aio WHERE timing BETWEEN '$new_date1' AND '$new_date2' AND dt_id MOD '$interval' = 0 ORDER BY dt_id ASC");
                } else if (sizeof($req->all()[0]) == 7) {
                    $val_1 = DB::select("SELECT timing, $val_1, $val_2,$val_3,$val_4,$val_5,$val_6,$val_7 FROM dt_aio WHERE timing BETWEEN '$new_date1' AND '$new_date2' AND dt_id MOD '$interval' = 0 ORDER BY dt_id ASC");
                } else if (sizeof($req->all()[0]) == 8) {
                    $val_1 = DB::select("SELECT timing, $val_1, $val_2,$val_3,$val_4,$val_5,$val_6,$val_7,$val_8 FROM dt_aio WHERE timing BETWEEN '$new_date1' AND '$new_date2' AND dt_id MOD '$interval' = 0 ORDER BY dt_id ASC");
                } else if (sizeof($req->all()[0]) == 9) {
                    $val_1 = DB::select("SELECT timing, $val_1, $val_2,$val_3,$val_4,$val_5,$val_6,$val_7,$val_8,$val_9 FROM dt_aio WHERE timing BETWEEN '$new_date1' AND '$new_date2' AND dt_id MOD '$interval' = 0 ORDER BY dt_id ASC");
                } else if (sizeof($req->all()[0]) == 10) {
                    $val_1 = DB::select("SELECT timing, $val_1, $val_2,$val_3,$val_4,$val_5,$val_6,$val_7,$val_8,$val_9,$val_10 FROM dt_aio WHERE timing BETWEEN '$new_date1' AND '$new_date2' AND dt_id MOD '$interval' = 0 ORDER BY dt_id ASC");
                } else if (sizeof($req->all()[0]) == 11) {
                    $val_1 = DB::select("SELECT timing, $val_1, $val_2,$val_3,$val_4,$val_5,$val_6,$val_7,$val_8,$val_9,$val_10,$val_11 FROM dt_aio WHERE timing BETWEEN '$new_date1' AND '$new_date2' AND dt_id MOD '$interval' = 0 ORDER BY dt_id ASC");
                } else if (sizeof($req->all()[0]) == 12) {
                    $val_1 = DB::select("SELECT timing, $val_1, $val_2,$val_3,$val_4,$val_5,$val_6,$val_7,$val_8,$val_9,$val_10,$val_11,$val_12 FROM dt_aio WHERE timing BETWEEN '$new_date1' AND '$new_date2' AND dt_id MOD '$interval' = 0 ORDER BY dt_id ASC");
                } else if (sizeof($req->all()[0]) == 13) {
                    $val_1 = DB::select("SELECT timing, $val_1, $val_2,$val_3,$val_4,$val_5,$val_6,$val_7,$val_8,$val_9,$val_10,$val_11,$val_12,$val_13 FROM dt_aio WHERE timing BETWEEN '$new_date1' AND '$new_date2' AND dt_id MOD '$interval' = 0 ORDER BY dt_id ASC");
                } else if (sizeof($req->all()[0]) == 14) {
                    $val_1 = DB::select("SELECT timing, $val_1, $val_2,$val_3,$val_4,$val_5,$val_6,$val_7,$val_8,$val_9,$val_10,$val_11,$val_12,$val_13,$val_14 FROM dt_aio WHERE timing BETWEEN '$new_date1' AND '$new_date2' AND dt_id MOD '$interval' = 0 ORDER BY dt_id ASC");
                } else if (sizeof($req->all()[0]) == 15) {
                    $val_1 = DB::select("SELECT timing, $val_1, $val_2,$val_3,$val_4,$val_5,$val_6,$val_7,$val_8,$val_9,$val_10,$val_11,$val_12,$val_13,$val_14,$val_15 FROM dt_aio WHERE timing BETWEEN '$new_date1' AND '$new_date2' AND dt_id MOD '$interval' = 0 ORDER BY dt_id ASC");
                } else if (sizeof($req->all()[0]) == 16) {
                    $val_1 = DB::select("SELECT timing, $val_1, $val_2,$val_3,$val_4,$val_5,$val_6,$val_7,$val_8,$val_9,$val_10,$val_11,$val_12,$val_13,$val_14,$val_15,$val_16 FROM dt_aio WHERE timing BETWEEN '$new_date1' AND '$new_date2' AND dt_id MOD '$interval' = 0 ORDER BY dt_id ASC");
                }
            }
        } else {

            if ($timing == '1') {
                if (sizeof($req->all()[0]) == 1) {
                    $val_1 = DB::select("SELECT timing, CASE WHEN $val_1 < $get_range1 THEN '0' WHEN $val_1 > $get_range1 THEN $val_1 END AS $val_1 FROM dt_aio WHERE timing > now() - interval 24 hour AND dt_id MOD '$interval' = 0");
                } else if (sizeof($req->all()[0]) == 2) {
                    $val_1 = DB::select("SELECT timing, CASE WHEN $val_1 < $get_range1 THEN '0' WHEN $val_1 > $get_range1 THEN $val_1 END AS $val_1, CASE WHEN $val_2 < $get_range2 THEN '0' WHEN $val_2 > $get_range2 THEN $val_2 END AS $val_2 FROM dt_aio WHERE timing > now() - interval 24 hour AND dt_id MOD '$interval' = 0");
                } else if (sizeof($req->all()[0]) == 3) {
                    $val_1 = DB::select("SELECT timing, CASE WHEN $val_1 < $get_range1 THEN '0' WHEN $val_1 > $get_range1 THEN $val_1 END AS $val_1, CASE WHEN $val_2 < $get_range2 THEN '0' WHEN $val_2 > $get_range2 THEN $val_2 END AS $val_2,CASE WHEN $val_3 < $get_range3 THEN '0' WHEN $val_3 > $get_range3 THEN $val_3 END AS $val_3 FROM dt_aio WHERE timing > now() - interval 24 hour AND dt_id MOD '$interval' = 0");
                } else if (sizeof($req->all()[0]) == 4) {
                    $val_1 = DB::select("SELECT timing, CASE WHEN $val_1 < $get_range1 THEN '0' WHEN $val_1 > $get_range1 THEN $val_1 END AS $val_1, CASE WHEN $val_2 < $get_range2 THEN '0' WHEN $val_2 > $get_range2 THEN $val_2 END AS $val_2,CASE WHEN $val_3 < $get_range3 THEN '0' WHEN $val_3 > $get_range3 THEN $val_3 END AS $val_3,CASE WHEN $val_4 < $get_range4 THEN '0' WHEN $val_4 > $get_range4 THEN $val_4 END AS $val_4 FROM dt_aio WHERE timing > now() - interval 24 hour AND dt_id MOD '$interval' = 0");
                } else if (sizeof($req->all()[0]) == 5) {
                    $val_1 = DB::select("SELECT timing, CASE WHEN $val_1 < $get_range1 THEN '0' WHEN $val_1 > $get_range1 THEN $val_1 END AS $val_1, CASE WHEN $val_2 < $get_range2 THEN '0' WHEN $val_2 > $get_range2 THEN $val_2 END AS $val_2,CASE WHEN $val_3 < $get_range3 THEN '0' WHEN $val_3 > $get_range3 THEN $val_3 END AS $val_3,CASE WHEN $val_4 < $get_range4 THEN '0' WHEN $val_4 > $get_range4 THEN $val_4 END AS $val_4,CASE WHEN $val_5 < $get_range5 THEN '0' WHEN $val_5 > $get_range5 THEN $val_5 END AS $val_5 FROM dt_aio WHERE timing > now() - interval 24 hour AND dt_id MOD '$interval' = 0");
                } else if (sizeof($req->all()[0]) == 6) {
                    $val_1 = DB::select("SELECT timing, CASE WHEN $val_1 < $get_range1 THEN '0' WHEN $val_1 > $get_range1 THEN $val_1 END AS $val_1, CASE WHEN $val_2 < $get_range2 THEN '0' WHEN $val_2 > $get_range2 THEN $val_2 END AS $val_2,CASE WHEN $val_3 < $get_range3 THEN '0' WHEN $val_3 > $get_range3 THEN $val_3 END AS $val_3,CASE WHEN $val_4 < $get_range4 THEN '0' WHEN $val_4 > $get_range4 THEN $val_4 END AS $val_4,CASE WHEN $val_5 < $get_range5 THEN '0' WHEN $val_5 > $get_range5 THEN $val_5 END AS $val_5,CASE WHEN $val_6 < $get_range6 THEN '0' WHEN $val_6 > $get_range6 THEN $val_6 END AS $val_6 FROM dt_aio WHERE timing > now() - interval 24 hour AND dt_id MOD '$interval' = 0");
                } else if (sizeof($req->all()[0]) == 7) {
                    $val_1 = DB::select("SELECT timing, CASE WHEN $val_1 < $get_range1 THEN '0' WHEN $val_1 > $get_range1 THEN $val_1 END AS $val_1, CASE WHEN $val_2 < $get_range2 THEN '0' WHEN $val_2 > $get_range2 THEN $val_2 END AS $val_2,CASE WHEN $val_3 < $get_range3 THEN '0' WHEN $val_3 > $get_range3 THEN $val_3 END AS $val_3,CASE WHEN $val_4 < $get_range4 THEN '0' WHEN $val_4 > $get_range4 THEN $val_4 END AS $val_4,CASE WHEN $val_5 < $get_range5 THEN '0' WHEN $val_5 > $get_range5 THEN $val_5 END AS $val_5,CASE WHEN $val_6 < $get_range6 THEN '0' WHEN $val_6 > $get_range6 THEN $val_6 END AS $val_6,CASE WHEN $val_7 < $get_range7 THEN '0' WHEN $val_7 > $get_range7 THEN $val_7 END AS $val_7 FROM dt_aio WHERE timing > now() - interval 24 hour AND dt_id MOD '$interval' = 0");
                } else if (sizeof($req->all()[0]) == 8) {
                    $val_1 = DB::select("SELECT timing, CASE WHEN $val_1 < $get_range1 THEN '0' WHEN $val_1 > $get_range1 THEN $val_1 END AS $val_1, CASE WHEN $val_2 < $get_range2 THEN '0' WHEN $val_2 > $get_range2 THEN $val_2 END AS $val_2,CASE WHEN $val_3 < $get_range3 THEN '0' WHEN $val_3 > $get_range3 THEN $val_3 END AS $val_3,CASE WHEN $val_4 < $get_range4 THEN '0' WHEN $val_4 > $get_range4 THEN $val_4 END AS $val_4,CASE WHEN $val_5 < $get_range5 THEN '0' WHEN $val_5 > $get_range5 THEN $val_5 END AS $val_5,CASE WHEN $val_6 < $get_range6 THEN '0' WHEN $val_6 > $get_range6 THEN $val_6 END AS $val_6,CASE WHEN $val_7 < $get_range7 THEN '0' WHEN $val_7 > $get_range7 THEN $val_7 END AS $val_7,CASE WHEN $val_8 < $get_range8 THEN '0' WHEN $val_8 > $get_range8 THEN $val_8 END AS $val_8 FROM dt_aio WHERE timing > now() - interval 24 hour AND dt_id MOD '$interval' = 0");
                } else if (sizeof($req->all()[0]) == 9) {
                    $val_1 = DB::select("SELECT timing, CASE WHEN $val_1 < $get_range1 THEN '0' WHEN $val_1 > $get_range1 THEN $val_1 END AS $val_1, CASE WHEN $val_2 < $get_range2 THEN '0' WHEN $val_2 > $get_range2 THEN $val_2 END AS $val_2,CASE WHEN $val_3 < $get_range3 THEN '0' WHEN $val_3 > $get_range3 THEN $val_3 END AS $val_3,CASE WHEN $val_4 < $get_range4 THEN '0' WHEN $val_4 > $get_range4 THEN $val_4 END AS $val_4,CASE WHEN $val_5 < $get_range5 THEN '0' WHEN $val_5 > $get_range5 THEN $val_5 END AS $val_5,CASE WHEN $val_6 < $get_range6 THEN '0' WHEN $val_6 > $get_range6 THEN $val_6 END AS $val_6,CASE WHEN $val_7 < $get_range7 THEN '0' WHEN $val_7 > $get_range7 THEN $val_7 END AS $val_7,CASE WHEN $val_8 < $get_range8 THEN '0' WHEN $val_8 > $get_range8 THEN $val_8 END AS $val_8,CASE WHEN $val_9 < $get_range9 THEN '0' WHEN $val_9 > $get_range9 THEN $val_9 END AS $val_9 FROM dt_aio WHERE timing > now() - interval 24 hour AND dt_id MOD '$interval' = 0");
                } else if (sizeof($req->all()[0]) == 10) {
                    $val_1 = DB::select("SELECT timing, CASE WHEN $val_1 < $get_range1 THEN '0' WHEN $val_1 > $get_range1 THEN $val_1 END AS $val_1, CASE WHEN $val_2 < $get_range2 THEN '0' WHEN $val_2 > $get_range2 THEN $val_2 END AS $val_2,CASE WHEN $val_3 < $get_range3 THEN '0' WHEN $val_3 > $get_range3 THEN $val_3 END AS $val_3,CASE WHEN $val_4 < $get_range4 THEN '0' WHEN $val_4 > $get_range4 THEN $val_4 END AS $val_4,CASE WHEN $val_5 < $get_range5 THEN '0' WHEN $val_5 > $get_range5 THEN $val_5 END AS $val_5,CASE WHEN $val_6 < $get_range6 THEN '0' WHEN $val_6 > $get_range6 THEN $val_6 END AS $val_6,CASE WHEN $val_7 < $get_range7 THEN '0' WHEN $val_7 > $get_range7 THEN $val_7 END AS $val_7,CASE WHEN $val_8 < $get_range8 THEN '0' WHEN $val_8 > $get_range8 THEN $val_8 END AS $val_8,CASE WHEN $val_9 < $get_range9 THEN '0' WHEN $val_9 > $get_range9 THEN $val_9 END AS $val_9,CASE WHEN $val_10 < $get_range10 THEN '0' WHEN $val_10 > $get_range10 THEN $val_10 END AS $val_10 FROM dt_aio WHERE timing > now() - interval 24 hour AND dt_id MOD '$interval' = 0");
                } else if (sizeof($req->all()[0]) == 11) {
                    $val_1 = DB::select("SELECT timing, CASE WHEN $val_1 < $get_range1 THEN '0' WHEN $val_1 > $get_range1 THEN $val_1 END AS $val_1, CASE WHEN $val_2 < $get_range2 THEN '0' WHEN $val_2 > $get_range2 THEN $val_2 END AS $val_2,CASE WHEN $val_3 < $get_range3 THEN '0' WHEN $val_3 > $get_range3 THEN $val_3 END AS $val_3,CASE WHEN $val_4 < $get_range4 THEN '0' WHEN $val_4 > $get_range4 THEN $val_4 END AS $val_4,CASE WHEN $val_5 < $get_range5 THEN '0' WHEN $val_5 > $get_range5 THEN $val_5 END AS $val_5,CASE WHEN $val_6 < $get_range6 THEN '0' WHEN $val_6 > $get_range6 THEN $val_6 END AS $val_6,CASE WHEN $val_7 < $get_range7 THEN '0' WHEN $val_7 > $get_range7 THEN $val_7 END AS $val_7,CASE WHEN $val_8 < $get_range8 THEN '0' WHEN $val_8 > $get_range8 THEN $val_8 END AS $val_8,CASE WHEN $val_9 < $get_range9 THEN '0' WHEN $val_9 > $get_range9 THEN $val_9 END AS $val_9,CASE WHEN $val_10 < $get_range10 THEN '0' WHEN $val_10 > $get_range10 THEN $val_10 END AS $val_10,CASE WHEN $val_11 < $get_range11 THEN '0' WHEN $val_11 > $get_range11 THEN $val_11 END AS $val_11 FROM dt_aio WHERE timing > now() - interval 24 hour AND dt_id MOD '$interval' = 0");
                } else if (sizeof($req->all()[0]) == 12) {
                    $val_1 = DB::select("SELECT timing, CASE WHEN $val_1 < $get_range1 THEN '0' WHEN $val_1 > $get_range1 THEN $val_1 END AS $val_1, CASE WHEN $val_2 < $get_range2 THEN '0' WHEN $val_2 > $get_range2 THEN $val_2 END AS $val_2,CASE WHEN $val_3 < $get_range3 THEN '0' WHEN $val_3 > $get_range3 THEN $val_3 END AS $val_3,CASE WHEN $val_4 < $get_range4 THEN '0' WHEN $val_4 > $get_range4 THEN $val_4 END AS $val_4,CASE WHEN $val_5 < $get_range5 THEN '0' WHEN $val_5 > $get_range5 THEN $val_5 END AS $val_5,CASE WHEN $val_6 < $get_range6 THEN '0' WHEN $val_6 > $get_range6 THEN $val_6 END AS $val_6,CASE WHEN $val_7 < $get_range7 THEN '0' WHEN $val_7 > $get_range7 THEN $val_7 END AS $val_7,CASE WHEN $val_8 < $get_range8 THEN '0' WHEN $val_8 > $get_range8 THEN $val_8 END AS $val_8,CASE WHEN $val_9 < $get_range9 THEN '0' WHEN $val_9 > $get_range9 THEN $val_9 END AS $val_9,CASE WHEN $val_10 < $get_range10 THEN '0' WHEN $val_10 > $get_range10 THEN $val_10 END AS $val_10,CASE WHEN $val_11 < $get_range11 THEN '0' WHEN $val_11 > $get_range11 THEN $val_11 END AS $val_11,CASE WHEN $val_12 < $get_range12 THEN '0' WHEN $val_12 > $get_range12 THEN $val_12 END AS $val_12 FROM dt_aio WHERE timing > now() - interval 24 hour AND dt_id MOD '$interval' = 0");
                } else if (sizeof($req->all()[0]) == 13) {
                    $val_1 = DB::select("SELECT timing, CASE WHEN $val_1 < $get_range1 THEN '0' WHEN $val_1 > $get_range1 THEN $val_1 END AS $val_1, CASE WHEN $val_2 < $get_range2 THEN '0' WHEN $val_2 > $get_range2 THEN $val_2 END AS $val_2,CASE WHEN $val_3 < $get_range3 THEN '0' WHEN $val_3 > $get_range3 THEN $val_3 END AS $val_3,CASE WHEN $val_4 < $get_range4 THEN '0' WHEN $val_4 > $get_range4 THEN $val_4 END AS $val_4,CASE WHEN $val_5 < $get_range5 THEN '0' WHEN $val_5 > $get_range5 THEN $val_5 END AS $val_5,CASE WHEN $val_6 < $get_range6 THEN '0' WHEN $val_6 > $get_range6 THEN $val_6 END AS $val_6,CASE WHEN $val_7 < $get_range7 THEN '0' WHEN $val_7 > $get_range7 THEN $val_7 END AS $val_7,CASE WHEN $val_8 < $get_range8 THEN '0' WHEN $val_8 > $get_range8 THEN $val_8 END AS $val_8,CASE WHEN $val_9 < $get_range9 THEN '0' WHEN $val_9 > $get_range9 THEN $val_9 END AS $val_9,CASE WHEN $val_10 < $get_range10 THEN '0' WHEN $val_10 > $get_range10 THEN $val_10 END AS $val_10,CASE WHEN $val_11 < $get_range11 THEN '0' WHEN $val_11 > $get_range11 THEN $val_11 END AS $val_11,CASE WHEN $val_12 < $get_range12 THEN '0' WHEN $val_12 > $get_range12 THEN $val_12 END AS $val_12,CASE WHEN $val_13 < $get_range13 THEN '0' WHEN $val_13 > $get_range13 THEN $val_13 END AS $val_13 FROM dt_aio WHERE timing > now() - interval 24 hour AND dt_id MOD '$interval' = 0");
                } else if (sizeof($req->all()[0]) == 14) {
                    $val_1 = DB::select("SELECT timing, CASE WHEN $val_1 < $get_range1 THEN '0' WHEN $val_1 > $get_range1 THEN $val_1 END AS $val_1, CASE WHEN $val_2 < $get_range2 THEN '0' WHEN $val_2 > $get_range2 THEN $val_2 END AS $val_2,CASE WHEN $val_3 < $get_range3 THEN '0' WHEN $val_3 > $get_range3 THEN $val_3 END AS $val_3,CASE WHEN $val_4 < $get_range4 THEN '0' WHEN $val_4 > $get_range4 THEN $val_4 END AS $val_4,CASE WHEN $val_5 < $get_range5 THEN '0' WHEN $val_5 > $get_range5 THEN $val_5 END AS $val_5,CASE WHEN $val_6 < $get_range6 THEN '0' WHEN $val_6 > $get_range6 THEN $val_6 END AS $val_6,CASE WHEN $val_7 < $get_range7 THEN '0' WHEN $val_7 > $get_range7 THEN $val_7 END AS $val_7,CASE WHEN $val_8 < $get_range8 THEN '0' WHEN $val_8 > $get_range8 THEN $val_8 END AS $val_8,CASE WHEN $val_9 < $get_range9 THEN '0' WHEN $val_9 > $get_range9 THEN $val_9 END AS $val_9,CASE WHEN $val_10 < $get_range10 THEN '0' WHEN $val_10 > $get_range10 THEN $val_10 END AS $val_10,CASE WHEN $val_11 < $get_range11 THEN '0' WHEN $val_11 > $get_range11 THEN $val_11 END AS $val_11,CASE WHEN $val_12 < $get_range12 THEN '0' WHEN $val_12 > $get_range12 THEN $val_12 END AS $val_12,CASE WHEN $val_13 < $get_range13 THEN '0' WHEN $val_13 > $get_range13 THEN $val_13 END AS $val_13,CASE WHEN $val_14 < $get_range14 THEN '0' WHEN $val_14 > $get_range14 THEN $val_14 END AS $val_14 FROM dt_aio WHERE timing > now() - interval 24 hour AND dt_id MOD '$interval' = 0");
                } else if (sizeof($req->all()[0]) == 15) {
                    $val_1 = DB::select("SELECT timing, CASE WHEN $val_1 < $get_range1 THEN '0' WHEN $val_1 > $get_range1 THEN $val_1 END AS $val_1, CASE WHEN $val_2 < $get_range2 THEN '0' WHEN $val_2 > $get_range2 THEN $val_2 END AS $val_2,CASE WHEN $val_3 < $get_range3 THEN '0' WHEN $val_3 > $get_range3 THEN $val_3 END AS $val_3,CASE WHEN $val_4 < $get_range4 THEN '0' WHEN $val_4 > $get_range4 THEN $val_4 END AS $val_4,CASE WHEN $val_5 < $get_range5 THEN '0' WHEN $val_5 > $get_range5 THEN $val_5 END AS $val_5,CASE WHEN $val_6 < $get_range6 THEN '0' WHEN $val_6 > $get_range6 THEN $val_6 END AS $val_6,CASE WHEN $val_7 < $get_range7 THEN '0' WHEN $val_7 > $get_range7 THEN $val_7 END AS $val_7,CASE WHEN $val_8 < $get_range8 THEN '0' WHEN $val_8 > $get_range8 THEN $val_8 END AS $val_8,CASE WHEN $val_9 < $get_range9 THEN '0' WHEN $val_9 > $get_range9 THEN $val_9 END AS $val_9,CASE WHEN $val_10 < $get_range10 THEN '0' WHEN $val_10 > $get_range10 THEN $val_10 END AS $val_10,CASE WHEN $val_11 < $get_range11 THEN '0' WHEN $val_11 > $get_range11 THEN $val_11 END AS $val_11,CASE WHEN $val_12 < $get_range12 THEN '0' WHEN $val_12 > $get_range12 THEN $val_12 END AS $val_12,CASE WHEN $val_13 < $get_range13 THEN '0' WHEN $val_13 > $get_range13 THEN $val_13 END AS $val_13,CASE WHEN $val_14 < $get_range14 THEN '0' WHEN $val_14 > $get_range14 THEN $val_14 END AS $val_14,CASE WHEN $val_15 < $get_range15 THEN '0' WHEN $val_15 > $get_range15 THEN $val_15 END AS $val_15 FROM dt_aio WHERE timing > now() - interval 24 hour AND dt_id MOD '$interval' = 0");
                } else if (sizeof($req->all()[0]) == 16) {
                    $val_1 = DB::select("SELECT timing, CASE WHEN $val_1 < $get_range1 THEN '0' WHEN $val_1 > $get_range1 THEN $val_1 END AS $val_1, CASE WHEN $val_2 < $get_range2 THEN '0' WHEN $val_2 > $get_range2 THEN $val_2 END AS $val_2,CASE WHEN $val_3 < $get_range3 THEN '0' WHEN $val_3 > $get_range3 THEN $val_3 END AS $val_3,CASE WHEN $val_4 < $get_range4 THEN '0' WHEN $val_4 > $get_range4 THEN $val_4 END AS $val_4,CASE WHEN $val_5 < $get_range5 THEN '0' WHEN $val_5 > $get_range5 THEN $val_5 END AS $val_5,CASE WHEN $val_6 < $get_range6 THEN '0' WHEN $val_6 > $get_range6 THEN $val_6 END AS $val_6,CASE WHEN $val_7 < $get_range7 THEN '0' WHEN $val_7 > $get_range7 THEN $val_7 END AS $val_7,CASE WHEN $val_8 < $get_range8 THEN '0' WHEN $val_8 > $get_range8 THEN $val_8 END AS $val_8,CASE WHEN $val_9 < $get_range9 THEN '0' WHEN $val_9 > $get_range9 THEN $val_9 END AS $val_9,CASE WHEN $val_10 < $get_range10 THEN '0' WHEN $val_10 > $get_range10 THEN $val_10 END AS $val_10,CASE WHEN $val_11 < $get_range11 THEN '0' WHEN $val_11 > $get_range11 THEN $val_11 END AS $val_11,CASE WHEN $val_12 < $get_range12 THEN '0' WHEN $val_12 > $get_range12 THEN $val_12 END AS $val_12,CASE WHEN $val_13 < $get_range13 THEN '0' WHEN $val_13 > $get_range13 THEN $val_13 END AS $val_13,CASE WHEN $val_14 < $get_range14 THEN '0' WHEN $val_14 > $get_range14 THEN $val_14 END AS $val_14,CASE WHEN $val_15 < $get_range15 THEN '0' WHEN $val_15 > $get_range15 THEN $val_15 END AS $val_15,CASE WHEN $val_16 < $get_range16 THEN '0' WHEN $val_16 > $get_range16 THEN $val_16 END AS $val_16 FROM dt_aio WHERE timing > now() - interval 24 hour AND dt_id MOD '$interval' = 0");
                }
            } elseif ($timing == '2') {
                if (sizeof($req->all()[0]) == 1) {
                    $val_1 = DB::select("SELECT timing, CASE WHEN $val_1 < $get_range1 THEN '0' WHEN $val_1 > $get_range1 THEN $val_1 END AS $val_1 FROM dt_aio WHERE timing >= DATE_SUB(CURDATE(), INTERVAL 14 hour) AND timing <= DATE_ADD(CURDATE(),INTERVAL 10 hour) AND dt_id MOD '$interval' = 0");
                } else if (sizeof($req->all()[0]) == 2) {
                    $val_1 = DB::select("SELECT timing, CASE WHEN $val_1 < $get_range1 THEN '0' WHEN $val_1 > $get_range1 THEN $val_1 END AS $val_1, CASE WHEN $val_2 < $get_range2 THEN '0' WHEN $val_2 > $get_range2 THEN $val_2 END AS $val_2 FROM dt_aio WHERE timing >= DATE_SUB(CURDATE(), INTERVAL 14 hour) AND timing <= DATE_ADD(CURDATE(),INTERVAL 10 hour) AND dt_id MOD '$interval' = 0");
                } else if (sizeof($req->all()[0]) == 3) {
                    $val_1 = DB::select("SELECT timing, CASE WHEN $val_1 < $get_range1 THEN '0' WHEN $val_1 > $get_range1 THEN $val_1 END AS $val_1, CASE WHEN $val_2 < $get_range2 THEN '0' WHEN $val_2 > $get_range2 THEN $val_2 END AS $val_2,CASE WHEN $val_3 < $get_range3 THEN '0' WHEN $val_3 > $get_range3 THEN $val_3 END AS $val_3 FROM dt_aio WHERE timing >= DATE_SUB(CURDATE(), INTERVAL 14 hour) AND timing <= DATE_ADD(CURDATE(),INTERVAL 10 hour) AND dt_id MOD '$interval' = 0");
                } else if (sizeof($req->all()[0]) == 4) {
                    $val_1 = DB::select("SELECT timing, CASE WHEN $val_1 < $get_range1 THEN '0' WHEN $val_1 > $get_range1 THEN $val_1 END AS $val_1, CASE WHEN $val_2 < $get_range2 THEN '0' WHEN $val_2 > $get_range2 THEN $val_2 END AS $val_2,CASE WHEN $val_3 < $get_range3 THEN '0' WHEN $val_3 > $get_range3 THEN $val_3 END AS $val_3,CASE WHEN $val_4 < $get_range4 THEN '0' WHEN $val_4 > $get_range4 THEN $val_4 END AS $val_4 FROM dt_aio WHERE timing >= DATE_SUB(CURDATE(), INTERVAL 14 hour) AND timing <= DATE_ADD(CURDATE(),INTERVAL 10 hour) AND dt_id MOD '$interval' = 0");
                } else if (sizeof($req->all()[0]) == 5) {
                    $val_1 = DB::select("SELECT timing, CASE WHEN $val_1 < $get_range1 THEN '0' WHEN $val_1 > $get_range1 THEN $val_1 END AS $val_1, CASE WHEN $val_2 < $get_range2 THEN '0' WHEN $val_2 > $get_range2 THEN $val_2 END AS $val_2,CASE WHEN $val_3 < $get_range3 THEN '0' WHEN $val_3 > $get_range3 THEN $val_3 END AS $val_3,CASE WHEN $val_4 < $get_range4 THEN '0' WHEN $val_4 > $get_range4 THEN $val_4 END AS $val_4,CASE WHEN $val_5 < $get_range5 THEN '0' WHEN $val_5 > $get_range5 THEN $val_5 END AS $val_5 FROM dt_aio WHERE timing >= DATE_SUB(CURDATE(), INTERVAL 14 hour) AND timing <= DATE_ADD(CURDATE(),INTERVAL 10 hour) AND dt_id MOD '$interval' = 0");
                } else if (sizeof($req->all()[0]) == 6) {
                    $val_1 = DB::select("SELECT timing, CASE WHEN $val_1 < $get_range1 THEN '0' WHEN $val_1 > $get_range1 THEN $val_1 END AS $val_1, CASE WHEN $val_2 < $get_range2 THEN '0' WHEN $val_2 > $get_range2 THEN $val_2 END AS $val_2,CASE WHEN $val_3 < $get_range3 THEN '0' WHEN $val_3 > $get_range3 THEN $val_3 END AS $val_3,CASE WHEN $val_4 < $get_range4 THEN '0' WHEN $val_4 > $get_range4 THEN $val_4 END AS $val_4,CASE WHEN $val_5 < $get_range5 THEN '0' WHEN $val_5 > $get_range5 THEN $val_5 END AS $val_5,CASE WHEN $val_6 < $get_range6 THEN '0' WHEN $val_6 > $get_range6 THEN $val_6 END AS $val_6 FROM dt_aio WHERE timing >= DATE_SUB(CURDATE(), INTERVAL 14 hour) AND timing <= DATE_ADD(CURDATE(),INTERVAL 10 hour) AND dt_id MOD '$interval' = 0");
                } else if (sizeof($req->all()[0]) == 7) {
                    $val_1 = DB::select("SELECT timing, CASE WHEN $val_1 < $get_range1 THEN '0' WHEN $val_1 > $get_range1 THEN $val_1 END AS $val_1, CASE WHEN $val_2 < $get_range2 THEN '0' WHEN $val_2 > $get_range2 THEN $val_2 END AS $val_2,CASE WHEN $val_3 < $get_range3 THEN '0' WHEN $val_3 > $get_range3 THEN $val_3 END AS $val_3,CASE WHEN $val_4 < $get_range4 THEN '0' WHEN $val_4 > $get_range4 THEN $val_4 END AS $val_4,CASE WHEN $val_5 < $get_range5 THEN '0' WHEN $val_5 > $get_range5 THEN $val_5 END AS $val_5,CASE WHEN $val_6 < $get_range6 THEN '0' WHEN $val_6 > $get_range6 THEN $val_6 END AS $val_6,CASE WHEN $val_7 < $get_range7 THEN '0' WHEN $val_7 > $get_range7 THEN $val_7 END AS $val_7 FROM dt_aio WHERE timing >= DATE_SUB(CURDATE(), INTERVAL 14 hour) AND timing <= DATE_ADD(CURDATE(),INTERVAL 10 hour) AND dt_id MOD '$interval' = 0");
                } else if (sizeof($req->all()[0]) == 8) {
                    $val_1 = DB::select("SELECT timing, CASE WHEN $val_1 < $get_range1 THEN '0' WHEN $val_1 > $get_range1 THEN $val_1 END AS $val_1, CASE WHEN $val_2 < $get_range2 THEN '0' WHEN $val_2 > $get_range2 THEN $val_2 END AS $val_2,CASE WHEN $val_3 < $get_range3 THEN '0' WHEN $val_3 > $get_range3 THEN $val_3 END AS $val_3,CASE WHEN $val_4 < $get_range4 THEN '0' WHEN $val_4 > $get_range4 THEN $val_4 END AS $val_4,CASE WHEN $val_5 < $get_range5 THEN '0' WHEN $val_5 > $get_range5 THEN $val_5 END AS $val_5,CASE WHEN $val_6 < $get_range6 THEN '0' WHEN $val_6 > $get_range6 THEN $val_6 END AS $val_6,CASE WHEN $val_7 < $get_range7 THEN '0' WHEN $val_7 > $get_range7 THEN $val_7 END AS $val_7,CASE WHEN $val_8 < $get_range8 THEN '0' WHEN $val_8 > $get_range8 THEN $val_8 END AS $val_8 FROM dt_aio WHERE timing >= DATE_SUB(CURDATE(), INTERVAL 14 hour) AND timing <= DATE_ADD(CURDATE(),INTERVAL 10 hour) AND dt_id MOD '$interval' = 0");
                } else if (sizeof($req->all()[0]) == 9) {
                    $val_1 = DB::select("SELECT timing, CASE WHEN $val_1 < $get_range1 THEN '0' WHEN $val_1 > $get_range1 THEN $val_1 END AS $val_1, CASE WHEN $val_2 < $get_range2 THEN '0' WHEN $val_2 > $get_range2 THEN $val_2 END AS $val_2,CASE WHEN $val_3 < $get_range3 THEN '0' WHEN $val_3 > $get_range3 THEN $val_3 END AS $val_3,CASE WHEN $val_4 < $get_range4 THEN '0' WHEN $val_4 > $get_range4 THEN $val_4 END AS $val_4,CASE WHEN $val_5 < $get_range5 THEN '0' WHEN $val_5 > $get_range5 THEN $val_5 END AS $val_5,CASE WHEN $val_6 < $get_range6 THEN '0' WHEN $val_6 > $get_range6 THEN $val_6 END AS $val_6,CASE WHEN $val_7 < $get_range7 THEN '0' WHEN $val_7 > $get_range7 THEN $val_7 END AS $val_7,CASE WHEN $val_8 < $get_range8 THEN '0' WHEN $val_8 > $get_range8 THEN $val_8 END AS $val_8,CASE WHEN $val_9 < $get_range9 THEN '0' WHEN $val_9 > $get_range9 THEN $val_9 END AS $val_9 FROM dt_aio WHERE timing >= DATE_SUB(CURDATE(), INTERVAL 14 hour) AND timing <= DATE_ADD(CURDATE(),INTERVAL 10 hour) AND dt_id MOD '$interval' = 0");
                } else if (sizeof($req->all()[0]) == 10) {
                    $val_1 = DB::select("SELECT timing, CASE WHEN $val_1 < $get_range1 THEN '0' WHEN $val_1 > $get_range1 THEN $val_1 END AS $val_1, CASE WHEN $val_2 < $get_range2 THEN '0' WHEN $val_2 > $get_range2 THEN $val_2 END AS $val_2,CASE WHEN $val_3 < $get_range3 THEN '0' WHEN $val_3 > $get_range3 THEN $val_3 END AS $val_3,CASE WHEN $val_4 < $get_range4 THEN '0' WHEN $val_4 > $get_range4 THEN $val_4 END AS $val_4,CASE WHEN $val_5 < $get_range5 THEN '0' WHEN $val_5 > $get_range5 THEN $val_5 END AS $val_5,CASE WHEN $val_6 < $get_range6 THEN '0' WHEN $val_6 > $get_range6 THEN $val_6 END AS $val_6,CASE WHEN $val_7 < $get_range7 THEN '0' WHEN $val_7 > $get_range7 THEN $val_7 END AS $val_7,CASE WHEN $val_8 < $get_range8 THEN '0' WHEN $val_8 > $get_range8 THEN $val_8 END AS $val_8,CASE WHEN $val_9 < $get_range9 THEN '0' WHEN $val_9 > $get_range9 THEN $val_9 END AS $val_9,CASE WHEN $val_10 < $get_range10 THEN '0' WHEN $val_10 > $get_range10 THEN $val_10 END AS $val_10 FROM dt_aio WHERE timing >= DATE_SUB(CURDATE(), INTERVAL 14 hour) AND timing <= DATE_ADD(CURDATE(),INTERVAL 10 hour) AND dt_id MOD '$interval' = 0");
                } else if (sizeof($req->all()[0]) == 11) {
                    $val_1 = DB::select("SELECT timing, CASE WHEN $val_1 < $get_range1 THEN '0' WHEN $val_1 > $get_range1 THEN $val_1 END AS $val_1, CASE WHEN $val_2 < $get_range2 THEN '0' WHEN $val_2 > $get_range2 THEN $val_2 END AS $val_2,CASE WHEN $val_3 < $get_range3 THEN '0' WHEN $val_3 > $get_range3 THEN $val_3 END AS $val_3,CASE WHEN $val_4 < $get_range4 THEN '0' WHEN $val_4 > $get_range4 THEN $val_4 END AS $val_4,CASE WHEN $val_5 < $get_range5 THEN '0' WHEN $val_5 > $get_range5 THEN $val_5 END AS $val_5,CASE WHEN $val_6 < $get_range6 THEN '0' WHEN $val_6 > $get_range6 THEN $val_6 END AS $val_6,CASE WHEN $val_7 < $get_range7 THEN '0' WHEN $val_7 > $get_range7 THEN $val_7 END AS $val_7,CASE WHEN $val_8 < $get_range8 THEN '0' WHEN $val_8 > $get_range8 THEN $val_8 END AS $val_8,CASE WHEN $val_9 < $get_range9 THEN '0' WHEN $val_9 > $get_range9 THEN $val_9 END AS $val_9,CASE WHEN $val_10 < $get_range10 THEN '0' WHEN $val_10 > $get_range10 THEN $val_10 END AS $val_10,CASE WHEN $val_11 < $get_range11 THEN '0' WHEN $val_11 > $get_range11 THEN $val_11 END AS $val_11 FROM dt_aio WHERE timing >= DATE_SUB(CURDATE(), INTERVAL 14 hour) AND timing <= DATE_ADD(CURDATE(),INTERVAL 10 hour) AND dt_id MOD '$interval' = 0");
                } else if (sizeof($req->all()[0]) == 12) {
                    $val_1 = DB::select("SELECT timing, CASE WHEN $val_1 < $get_range1 THEN '0' WHEN $val_1 > $get_range1 THEN $val_1 END AS $val_1, CASE WHEN $val_2 < $get_range2 THEN '0' WHEN $val_2 > $get_range2 THEN $val_2 END AS $val_2,CASE WHEN $val_3 < $get_range3 THEN '0' WHEN $val_3 > $get_range3 THEN $val_3 END AS $val_3,CASE WHEN $val_4 < $get_range4 THEN '0' WHEN $val_4 > $get_range4 THEN $val_4 END AS $val_4,CASE WHEN $val_5 < $get_range5 THEN '0' WHEN $val_5 > $get_range5 THEN $val_5 END AS $val_5,CASE WHEN $val_6 < $get_range6 THEN '0' WHEN $val_6 > $get_range6 THEN $val_6 END AS $val_6,CASE WHEN $val_7 < $get_range7 THEN '0' WHEN $val_7 > $get_range7 THEN $val_7 END AS $val_7,CASE WHEN $val_8 < $get_range8 THEN '0' WHEN $val_8 > $get_range8 THEN $val_8 END AS $val_8,CASE WHEN $val_9 < $get_range9 THEN '0' WHEN $val_9 > $get_range9 THEN $val_9 END AS $val_9,CASE WHEN $val_10 < $get_range10 THEN '0' WHEN $val_10 > $get_range10 THEN $val_10 END AS $val_10,CASE WHEN $val_11 < $get_range11 THEN '0' WHEN $val_11 > $get_range11 THEN $val_11 END AS $val_11,CASE WHEN $val_12 < $get_range12 THEN '0' WHEN $val_12 > $get_range12 THEN $val_12 END AS $val_12 FROM dt_aio WHERE timing >= DATE_SUB(CURDATE(), INTERVAL 14 hour) AND timing <= DATE_ADD(CURDATE(),INTERVAL 10 hour) AND dt_id MOD '$interval' = 0");
                } else if (sizeof($req->all()[0]) == 13) {
                    $val_1 = DB::select("SELECT timing, CASE WHEN $val_1 < $get_range1 THEN '0' WHEN $val_1 > $get_range1 THEN $val_1 END AS $val_1, CASE WHEN $val_2 < $get_range2 THEN '0' WHEN $val_2 > $get_range2 THEN $val_2 END AS $val_2,CASE WHEN $val_3 < $get_range3 THEN '0' WHEN $val_3 > $get_range3 THEN $val_3 END AS $val_3,CASE WHEN $val_4 < $get_range4 THEN '0' WHEN $val_4 > $get_range4 THEN $val_4 END AS $val_4,CASE WHEN $val_5 < $get_range5 THEN '0' WHEN $val_5 > $get_range5 THEN $val_5 END AS $val_5,CASE WHEN $val_6 < $get_range6 THEN '0' WHEN $val_6 > $get_range6 THEN $val_6 END AS $val_6,CASE WHEN $val_7 < $get_range7 THEN '0' WHEN $val_7 > $get_range7 THEN $val_7 END AS $val_7,CASE WHEN $val_8 < $get_range8 THEN '0' WHEN $val_8 > $get_range8 THEN $val_8 END AS $val_8,CASE WHEN $val_9 < $get_range9 THEN '0' WHEN $val_9 > $get_range9 THEN $val_9 END AS $val_9,CASE WHEN $val_10 < $get_range10 THEN '0' WHEN $val_10 > $get_range10 THEN $val_10 END AS $val_10,CASE WHEN $val_11 < $get_range11 THEN '0' WHEN $val_11 > $get_range11 THEN $val_11 END AS $val_11,CASE WHEN $val_12 < $get_range12 THEN '0' WHEN $val_12 > $get_range12 THEN $val_12 END AS $val_12,CASE WHEN $val_13 < $get_range13 THEN '0' WHEN $val_13 > $get_range13 THEN $val_13 END AS $val_13 FROM dt_aio WHERE timing >= DATE_SUB(CURDATE(), INTERVAL 14 hour) AND timing <= DATE_ADD(CURDATE(),INTERVAL 10 hour) AND dt_id MOD '$interval' = 0");
                } else if (sizeof($req->all()[0]) == 14) {
                    $val_1 = DB::select("SELECT timing, CASE WHEN $val_1 < $get_range1 THEN '0' WHEN $val_1 > $get_range1 THEN $val_1 END AS $val_1, CASE WHEN $val_2 < $get_range2 THEN '0' WHEN $val_2 > $get_range2 THEN $val_2 END AS $val_2,CASE WHEN $val_3 < $get_range3 THEN '0' WHEN $val_3 > $get_range3 THEN $val_3 END AS $val_3,CASE WHEN $val_4 < $get_range4 THEN '0' WHEN $val_4 > $get_range4 THEN $val_4 END AS $val_4,CASE WHEN $val_5 < $get_range5 THEN '0' WHEN $val_5 > $get_range5 THEN $val_5 END AS $val_5,CASE WHEN $val_6 < $get_range6 THEN '0' WHEN $val_6 > $get_range6 THEN $val_6 END AS $val_6,CASE WHEN $val_7 < $get_range7 THEN '0' WHEN $val_7 > $get_range7 THEN $val_7 END AS $val_7,CASE WHEN $val_8 < $get_range8 THEN '0' WHEN $val_8 > $get_range8 THEN $val_8 END AS $val_8,CASE WHEN $val_9 < $get_range9 THEN '0' WHEN $val_9 > $get_range9 THEN $val_9 END AS $val_9,CASE WHEN $val_10 < $get_range10 THEN '0' WHEN $val_10 > $get_range10 THEN $val_10 END AS $val_10,CASE WHEN $val_11 < $get_range11 THEN '0' WHEN $val_11 > $get_range11 THEN $val_11 END AS $val_11,CASE WHEN $val_12 < $get_range12 THEN '0' WHEN $val_12 > $get_range12 THEN $val_12 END AS $val_12,CASE WHEN $val_13 < $get_range13 THEN '0' WHEN $val_13 > $get_range13 THEN $val_13 END AS $val_13,CASE WHEN $val_14 < $get_range14 THEN '0' WHEN $val_14 > $get_range14 THEN $val_14 END AS $val_14 FROM dt_aio WHERE timing >= DATE_SUB(CURDATE(), INTERVAL 14 hour) AND timing <= DATE_ADD(CURDATE(),INTERVAL 10 hour) AND dt_id MOD '$interval' = 0");
                } else if (sizeof($req->all()[0]) == 15) {
                    $val_1 = DB::select("SELECT timing, CASE WHEN $val_1 < $get_range1 THEN '0' WHEN $val_1 > $get_range1 THEN $val_1 END AS $val_1, CASE WHEN $val_2 < $get_range2 THEN '0' WHEN $val_2 > $get_range2 THEN $val_2 END AS $val_2,CASE WHEN $val_3 < $get_range3 THEN '0' WHEN $val_3 > $get_range3 THEN $val_3 END AS $val_3,CASE WHEN $val_4 < $get_range4 THEN '0' WHEN $val_4 > $get_range4 THEN $val_4 END AS $val_4,CASE WHEN $val_5 < $get_range5 THEN '0' WHEN $val_5 > $get_range5 THEN $val_5 END AS $val_5,CASE WHEN $val_6 < $get_range6 THEN '0' WHEN $val_6 > $get_range6 THEN $val_6 END AS $val_6,CASE WHEN $val_7 < $get_range7 THEN '0' WHEN $val_7 > $get_range7 THEN $val_7 END AS $val_7,CASE WHEN $val_8 < $get_range8 THEN '0' WHEN $val_8 > $get_range8 THEN $val_8 END AS $val_8,CASE WHEN $val_9 < $get_range9 THEN '0' WHEN $val_9 > $get_range9 THEN $val_9 END AS $val_9,CASE WHEN $val_10 < $get_range10 THEN '0' WHEN $val_10 > $get_range10 THEN $val_10 END AS $val_10,CASE WHEN $val_11 < $get_range11 THEN '0' WHEN $val_11 > $get_range11 THEN $val_11 END AS $val_11,CASE WHEN $val_12 < $get_range12 THEN '0' WHEN $val_12 > $get_range12 THEN $val_12 END AS $val_12,CASE WHEN $val_13 < $get_range13 THEN '0' WHEN $val_13 > $get_range13 THEN $val_13 END AS $val_13,CASE WHEN $val_14 < $get_range14 THEN '0' WHEN $val_14 > $get_range14 THEN $val_14 END AS $val_14,CASE WHEN $val_15 < $get_range15 THEN '0' WHEN $val_15 > $get_range15 THEN $val_15 END AS $val_15 FROM dt_aio WHERE timing >= DATE_SUB(CURDATE(), INTERVAL 14 hour) AND timing <= DATE_ADD(CURDATE(),INTERVAL 10 hour) AND dt_id MOD '$interval' = 0");
                } else if (sizeof($req->all()[0]) == 16) {
                    $val_1 = DB::select("SELECT timing, CASE WHEN $val_1 < $get_range1 THEN '0' WHEN $val_1 > $get_range1 THEN $val_1 END AS $val_1, CASE WHEN $val_2 < $get_range2 THEN '0' WHEN $val_2 > $get_range2 THEN $val_2 END AS $val_2,CASE WHEN $val_3 < $get_range3 THEN '0' WHEN $val_3 > $get_range3 THEN $val_3 END AS $val_3,CASE WHEN $val_4 < $get_range4 THEN '0' WHEN $val_4 > $get_range4 THEN $val_4 END AS $val_4,CASE WHEN $val_5 < $get_range5 THEN '0' WHEN $val_5 > $get_range5 THEN $val_5 END AS $val_5,CASE WHEN $val_6 < $get_range6 THEN '0' WHEN $val_6 > $get_range6 THEN $val_6 END AS $val_6,CASE WHEN $val_7 < $get_range7 THEN '0' WHEN $val_7 > $get_range7 THEN $val_7 END AS $val_7,CASE WHEN $val_8 < $get_range8 THEN '0' WHEN $val_8 > $get_range8 THEN $val_8 END AS $val_8,CASE WHEN $val_9 < $get_range9 THEN '0' WHEN $val_9 > $get_range9 THEN $val_9 END AS $val_9,CASE WHEN $val_10 < $get_range10 THEN '0' WHEN $val_10 > $get_range10 THEN $val_10 END AS $val_10,CASE WHEN $val_11 < $get_range11 THEN '0' WHEN $val_11 > $get_range11 THEN $val_11 END AS $val_11,CASE WHEN $val_12 < $get_range12 THEN '0' WHEN $val_12 > $get_range12 THEN $val_12 END AS $val_12,CASE WHEN $val_13 < $get_range13 THEN '0' WHEN $val_13 > $get_range13 THEN $val_13 END AS $val_13,CASE WHEN $val_14 < $get_range14 THEN '0' WHEN $val_14 > $get_range14 THEN $val_14 END AS $val_14,CASE WHEN $val_15 < $get_range15 THEN '0' WHEN $val_15 > $get_range15 THEN $val_15 END AS $val_15,CASE WHEN $val_16 < $get_range16 THEN '0' WHEN $val_16 > $get_range16 THEN $val_16 END AS $val_16 FROM dt_aio WHERE timing >= DATE_SUB(CURDATE(), INTERVAL 14 hour) AND timing <= DATE_ADD(CURDATE(),INTERVAL 10 hour) AND dt_id MOD '$interval' = 0");
                }
            } elseif ($timing == '3') {
                if (sizeof($req->all()[0]) == 1) {
                    $val_1 = DB::select("SELECT timing, CASE WHEN $val_1 < $get_range1 THEN '-' WHEN $val_1 > $get_range1 THEN $val_1 END AS $val_1 FROM dt_aio WHERE timing > DATE_SUB(CURDATE(), INTERVAL 7 day) AND dt_id MOD '$interval' = 0");
                } else if (sizeof($req->all()[0]) == 2) {
                    $val_1 = DB::select("SELECT timing, CASE WHEN $val_1 < $get_range1 THEN '0' WHEN $val_1 > $get_range1 THEN $val_1 END AS $val_1, CASE WHEN $val_2 < $get_range2 THEN '0' WHEN $val_2 > $get_range2 THEN $val_2 END AS $val_2 FROM dt_aio WHERE timing > DATE_SUB(CURDATE(), INTERVAL 7 day) AND dt_id MOD '$interval' = 0");
                } else if (sizeof($req->all()[0]) == 3) {
                    $val_1 = DB::select("SELECT timing, CASE WHEN $val_1 < $get_range1 THEN '0' WHEN $val_1 > $get_range1 THEN $val_1 END AS $val_1, CASE WHEN $val_2 < $get_range2 THEN '0' WHEN $val_2 > $get_range2 THEN $val_2 END AS $val_2,CASE WHEN $val_3 < $get_range3 THEN '0' WHEN $val_3 > $get_range3 THEN $val_3 END AS $val_3 FROM dt_aio WHERE timing > DATE_SUB(CURDATE(), INTERVAL 7 day) AND dt_id MOD '$interval' = 0");
                } else if (sizeof($req->all()[0]) == 4) {
                    $val_1 = DB::select("SELECT timing, CASE WHEN $val_1 < $get_range1 THEN '0' WHEN $val_1 > $get_range1 THEN $val_1 END AS $val_1, CASE WHEN $val_2 < $get_range2 THEN '0' WHEN $val_2 > $get_range2 THEN $val_2 END AS $val_2,CASE WHEN $val_3 < $get_range3 THEN '0' WHEN $val_3 > $get_range3 THEN $val_3 END AS $val_3,CASE WHEN $val_4 < $get_range4 THEN '0' WHEN $val_4 > $get_range4 THEN $val_4 END AS $val_4 FROM dt_aio WHERE timing > DATE_SUB(CURDATE(), INTERVAL 7 day) AND dt_id MOD '$interval' = 0");
                } else if (sizeof($req->all()[0]) == 5) {
                    $val_1 = DB::select("SELECT timing, CASE WHEN $val_1 < $get_range1 THEN '0' WHEN $val_1 > $get_range1 THEN $val_1 END AS $val_1, CASE WHEN $val_2 < $get_range2 THEN '0' WHEN $val_2 > $get_range2 THEN $val_2 END AS $val_2,CASE WHEN $val_3 < $get_range3 THEN '0' WHEN $val_3 > $get_range3 THEN $val_3 END AS $val_3,CASE WHEN $val_4 < $get_range4 THEN '0' WHEN $val_4 > $get_range4 THEN $val_4 END AS $val_4,CASE WHEN $val_5 < $get_range5 THEN '0' WHEN $val_5 > $get_range5 THEN $val_5 END AS $val_5 FROM dt_aio WHERE timing > DATE_SUB(CURDATE(), INTERVAL 7 day) AND dt_id MOD '$interval' = 0");
                } else if (sizeof($req->all()[0]) == 6) {
                    $val_1 = DB::select("SELECT timing, CASE WHEN $val_1 < $get_range1 THEN '0' WHEN $val_1 > $get_range1 THEN $val_1 END AS $val_1, CASE WHEN $val_2 < $get_range2 THEN '0' WHEN $val_2 > $get_range2 THEN $val_2 END AS $val_2,CASE WHEN $val_3 < $get_range3 THEN '0' WHEN $val_3 > $get_range3 THEN $val_3 END AS $val_3,CASE WHEN $val_4 < $get_range4 THEN '0' WHEN $val_4 > $get_range4 THEN $val_4 END AS $val_4,CASE WHEN $val_5 < $get_range5 THEN '0' WHEN $val_5 > $get_range5 THEN $val_5 END AS $val_5,CASE WHEN $val_6 < $get_range6 THEN '0' WHEN $val_6 > $get_range6 THEN $val_6 END AS $val_6 FROM dt_aio WHERE timing > DATE_SUB(CURDATE(), INTERVAL 7 day) AND dt_id MOD '$interval' = 0");
                } else if (sizeof($req->all()[0]) == 7) {
                    $val_1 = DB::select("SELECT timing, CASE WHEN $val_1 < $get_range1 THEN '0' WHEN $val_1 > $get_range1 THEN $val_1 END AS $val_1, CASE WHEN $val_2 < $get_range2 THEN '0' WHEN $val_2 > $get_range2 THEN $val_2 END AS $val_2,CASE WHEN $val_3 < $get_range3 THEN '0' WHEN $val_3 > $get_range3 THEN $val_3 END AS $val_3,CASE WHEN $val_4 < $get_range4 THEN '0' WHEN $val_4 > $get_range4 THEN $val_4 END AS $val_4,CASE WHEN $val_5 < $get_range5 THEN '0' WHEN $val_5 > $get_range5 THEN $val_5 END AS $val_5,CASE WHEN $val_6 < $get_range6 THEN '0' WHEN $val_6 > $get_range6 THEN $val_6 END AS $val_6,CASE WHEN $val_7 < $get_range7 THEN '0' WHEN $val_7 > $get_range7 THEN $val_7 END AS $val_7 FROM dt_aio WHERE timing > DATE_SUB(CURDATE(), INTERVAL 7 day) AND dt_id MOD '$interval' = 0");
                } else if (sizeof($req->all()[0]) == 8) {
                    $val_1 = DB::select("SELECT timing, CASE WHEN $val_1 < $get_range1 THEN '0' WHEN $val_1 > $get_range1 THEN $val_1 END AS $val_1, CASE WHEN $val_2 < $get_range2 THEN '0' WHEN $val_2 > $get_range2 THEN $val_2 END AS $val_2,CASE WHEN $val_3 < $get_range3 THEN '0' WHEN $val_3 > $get_range3 THEN $val_3 END AS $val_3,CASE WHEN $val_4 < $get_range4 THEN '0' WHEN $val_4 > $get_range4 THEN $val_4 END AS $val_4,CASE WHEN $val_5 < $get_range5 THEN '0' WHEN $val_5 > $get_range5 THEN $val_5 END AS $val_5,CASE WHEN $val_6 < $get_range6 THEN '0' WHEN $val_6 > $get_range6 THEN $val_6 END AS $val_6,CASE WHEN $val_7 < $get_range7 THEN '0' WHEN $val_7 > $get_range7 THEN $val_7 END AS $val_7,CASE WHEN $val_8 < $get_range8 THEN '0' WHEN $val_8 > $get_range8 THEN $val_8 END AS $val_8 FROM dt_aio WHERE timing > DATE_SUB(CURDATE(), INTERVAL 7 day) AND dt_id MOD '$interval' = 0");
                } else if (sizeof($req->all()[0]) == 9) {
                    $val_1 = DB::select("SELECT timing, CASE WHEN $val_1 < $get_range1 THEN '0' WHEN $val_1 > $get_range1 THEN $val_1 END AS $val_1, CASE WHEN $val_2 < $get_range2 THEN '0' WHEN $val_2 > $get_range2 THEN $val_2 END AS $val_2,CASE WHEN $val_3 < $get_range3 THEN '0' WHEN $val_3 > $get_range3 THEN $val_3 END AS $val_3,CASE WHEN $val_4 < $get_range4 THEN '0' WHEN $val_4 > $get_range4 THEN $val_4 END AS $val_4,CASE WHEN $val_5 < $get_range5 THEN '0' WHEN $val_5 > $get_range5 THEN $val_5 END AS $val_5,CASE WHEN $val_6 < $get_range6 THEN '0' WHEN $val_6 > $get_range6 THEN $val_6 END AS $val_6,CASE WHEN $val_7 < $get_range7 THEN '0' WHEN $val_7 > $get_range7 THEN $val_7 END AS $val_7,CASE WHEN $val_8 < $get_range8 THEN '0' WHEN $val_8 > $get_range8 THEN $val_8 END AS $val_8,CASE WHEN $val_9 < $get_range9 THEN '0' WHEN $val_9 > $get_range9 THEN $val_9 END AS $val_9 FROM dt_aio WHERE timing > DATE_SUB(CURDATE(), INTERVAL 7 day) AND dt_id MOD '$interval' = 0");
                } else if (sizeof($req->all()[0]) == 10) {
                    $val_1 = DB::select("SELECT timing, CASE WHEN $val_1 < $get_range1 THEN '0' WHEN $val_1 > $get_range1 THEN $val_1 END AS $val_1, CASE WHEN $val_2 < $get_range2 THEN '0' WHEN $val_2 > $get_range2 THEN $val_2 END AS $val_2,CASE WHEN $val_3 < $get_range3 THEN '0' WHEN $val_3 > $get_range3 THEN $val_3 END AS $val_3,CASE WHEN $val_4 < $get_range4 THEN '0' WHEN $val_4 > $get_range4 THEN $val_4 END AS $val_4,CASE WHEN $val_5 < $get_range5 THEN '0' WHEN $val_5 > $get_range5 THEN $val_5 END AS $val_5,CASE WHEN $val_6 < $get_range6 THEN '0' WHEN $val_6 > $get_range6 THEN $val_6 END AS $val_6,CASE WHEN $val_7 < $get_range7 THEN '0' WHEN $val_7 > $get_range7 THEN $val_7 END AS $val_7,CASE WHEN $val_8 < $get_range8 THEN '0' WHEN $val_8 > $get_range8 THEN $val_8 END AS $val_8,CASE WHEN $val_9 < $get_range9 THEN '0' WHEN $val_9 > $get_range9 THEN $val_9 END AS $val_9,CASE WHEN $val_10 < $get_range10 THEN '0' WHEN $val_10 > $get_range10 THEN $val_10 END AS $val_10 FROM dt_aio WHERE timing > DATE_SUB(CURDATE(), INTERVAL 7 day) AND dt_id MOD '$interval' = 0");
                } else if (sizeof($req->all()[0]) == 11) {
                    $val_1 = DB::select("SELECT timing, CASE WHEN $val_1 < $get_range1 THEN '0' WHEN $val_1 > $get_range1 THEN $val_1 END AS $val_1, CASE WHEN $val_2 < $get_range2 THEN '0' WHEN $val_2 > $get_range2 THEN $val_2 END AS $val_2,CASE WHEN $val_3 < $get_range3 THEN '0' WHEN $val_3 > $get_range3 THEN $val_3 END AS $val_3,CASE WHEN $val_4 < $get_range4 THEN '0' WHEN $val_4 > $get_range4 THEN $val_4 END AS $val_4,CASE WHEN $val_5 < $get_range5 THEN '0' WHEN $val_5 > $get_range5 THEN $val_5 END AS $val_5,CASE WHEN $val_6 < $get_range6 THEN '0' WHEN $val_6 > $get_range6 THEN $val_6 END AS $val_6,CASE WHEN $val_7 < $get_range7 THEN '0' WHEN $val_7 > $get_range7 THEN $val_7 END AS $val_7,CASE WHEN $val_8 < $get_range8 THEN '0' WHEN $val_8 > $get_range8 THEN $val_8 END AS $val_8,CASE WHEN $val_9 < $get_range9 THEN '0' WHEN $val_9 > $get_range9 THEN $val_9 END AS $val_9,CASE WHEN $val_10 < $get_range10 THEN '0' WHEN $val_10 > $get_range10 THEN $val_10 END AS $val_10,CASE WHEN $val_11 < $get_range11 THEN '0' WHEN $val_11 > $get_range11 THEN $val_11 END AS $val_11 FROM dt_aio WHERE timing > DATE_SUB(CURDATE(), INTERVAL 7 day) AND dt_id MOD '$interval' = 0");
                } else if (sizeof($req->all()[0]) == 12) {
                    $val_1 = DB::select("SELECT timing, CASE WHEN $val_1 < $get_range1 THEN '0' WHEN $val_1 > $get_range1 THEN $val_1 END AS $val_1, CASE WHEN $val_2 < $get_range2 THEN '0' WHEN $val_2 > $get_range2 THEN $val_2 END AS $val_2,CASE WHEN $val_3 < $get_range3 THEN '0' WHEN $val_3 > $get_range3 THEN $val_3 END AS $val_3,CASE WHEN $val_4 < $get_range4 THEN '0' WHEN $val_4 > $get_range4 THEN $val_4 END AS $val_4,CASE WHEN $val_5 < $get_range5 THEN '0' WHEN $val_5 > $get_range5 THEN $val_5 END AS $val_5,CASE WHEN $val_6 < $get_range6 THEN '0' WHEN $val_6 > $get_range6 THEN $val_6 END AS $val_6,CASE WHEN $val_7 < $get_range7 THEN '0' WHEN $val_7 > $get_range7 THEN $val_7 END AS $val_7,CASE WHEN $val_8 < $get_range8 THEN '0' WHEN $val_8 > $get_range8 THEN $val_8 END AS $val_8,CASE WHEN $val_9 < $get_range9 THEN '0' WHEN $val_9 > $get_range9 THEN $val_9 END AS $val_9,CASE WHEN $val_10 < $get_range10 THEN '0' WHEN $val_10 > $get_range10 THEN $val_10 END AS $val_10,CASE WHEN $val_11 < $get_range11 THEN '0' WHEN $val_11 > $get_range11 THEN $val_11 END AS $val_11,CASE WHEN $val_12 < $get_range12 THEN '0' WHEN $val_12 > $get_range12 THEN $val_12 END AS $val_12 FROM dt_aio WHERE timing > DATE_SUB(CURDATE(), INTERVAL 7 day) AND dt_id MOD '$interval' = 0");
                } else if (sizeof($req->all()[0]) == 13) {
                    $val_1 = DB::select("SELECT timing, CASE WHEN $val_1 < $get_range1 THEN '0' WHEN $val_1 > $get_range1 THEN $val_1 END AS $val_1, CASE WHEN $val_2 < $get_range2 THEN '0' WHEN $val_2 > $get_range2 THEN $val_2 END AS $val_2,CASE WHEN $val_3 < $get_range3 THEN '0' WHEN $val_3 > $get_range3 THEN $val_3 END AS $val_3,CASE WHEN $val_4 < $get_range4 THEN '0' WHEN $val_4 > $get_range4 THEN $val_4 END AS $val_4,CASE WHEN $val_5 < $get_range5 THEN '0' WHEN $val_5 > $get_range5 THEN $val_5 END AS $val_5,CASE WHEN $val_6 < $get_range6 THEN '0' WHEN $val_6 > $get_range6 THEN $val_6 END AS $val_6,CASE WHEN $val_7 < $get_range7 THEN '0' WHEN $val_7 > $get_range7 THEN $val_7 END AS $val_7,CASE WHEN $val_8 < $get_range8 THEN '0' WHEN $val_8 > $get_range8 THEN $val_8 END AS $val_8,CASE WHEN $val_9 < $get_range9 THEN '0' WHEN $val_9 > $get_range9 THEN $val_9 END AS $val_9,CASE WHEN $val_10 < $get_range10 THEN '0' WHEN $val_10 > $get_range10 THEN $val_10 END AS $val_10,CASE WHEN $val_11 < $get_range11 THEN '0' WHEN $val_11 > $get_range11 THEN $val_11 END AS $val_11,CASE WHEN $val_12 < $get_range12 THEN '0' WHEN $val_12 > $get_range12 THEN $val_12 END AS $val_12,CASE WHEN $val_13 < $get_range13 THEN '0' WHEN $val_13 > $get_range13 THEN $val_13 END AS $val_13 FROM dt_aio WHERE timing > DATE_SUB(CURDATE(), INTERVAL 7 day) AND dt_id MOD '$interval' = 0");
                } else if (sizeof($req->all()[0]) == 14) {
                    $val_1 = DB::select("SELECT timing, CASE WHEN $val_1 < $get_range1 THEN '0' WHEN $val_1 > $get_range1 THEN $val_1 END AS $val_1, CASE WHEN $val_2 < $get_range2 THEN '0' WHEN $val_2 > $get_range2 THEN $val_2 END AS $val_2,CASE WHEN $val_3 < $get_range3 THEN '0' WHEN $val_3 > $get_range3 THEN $val_3 END AS $val_3,CASE WHEN $val_4 < $get_range4 THEN '0' WHEN $val_4 > $get_range4 THEN $val_4 END AS $val_4,CASE WHEN $val_5 < $get_range5 THEN '0' WHEN $val_5 > $get_range5 THEN $val_5 END AS $val_5,CASE WHEN $val_6 < $get_range6 THEN '0' WHEN $val_6 > $get_range6 THEN $val_6 END AS $val_6,CASE WHEN $val_7 < $get_range7 THEN '0' WHEN $val_7 > $get_range7 THEN $val_7 END AS $val_7,CASE WHEN $val_8 < $get_range8 THEN '0' WHEN $val_8 > $get_range8 THEN $val_8 END AS $val_8,CASE WHEN $val_9 < $get_range9 THEN '0' WHEN $val_9 > $get_range9 THEN $val_9 END AS $val_9,CASE WHEN $val_10 < $get_range10 THEN '0' WHEN $val_10 > $get_range10 THEN $val_10 END AS $val_10,CASE WHEN $val_11 < $get_range11 THEN '0' WHEN $val_11 > $get_range11 THEN $val_11 END AS $val_11,CASE WHEN $val_12 < $get_range12 THEN '0' WHEN $val_12 > $get_range12 THEN $val_12 END AS $val_12,CASE WHEN $val_13 < $get_range13 THEN '0' WHEN $val_13 > $get_range13 THEN $val_13 END AS $val_13,CASE WHEN $val_14 < $get_range14 THEN '0' WHEN $val_14 > $get_range14 THEN $val_14 END AS $val_14 FROM dt_aio WHERE timing > DATE_SUB(CURDATE(), INTERVAL 7 day) AND dt_id MOD '$interval' = 0");
                } else if (sizeof($req->all()[0]) == 15) {
                    $val_1 = DB::select("SELECT timing, CASE WHEN $val_1 < $get_range1 THEN '0' WHEN $val_1 > $get_range1 THEN $val_1 END AS $val_1, CASE WHEN $val_2 < $get_range2 THEN '0' WHEN $val_2 > $get_range2 THEN $val_2 END AS $val_2,CASE WHEN $val_3 < $get_range3 THEN '0' WHEN $val_3 > $get_range3 THEN $val_3 END AS $val_3,CASE WHEN $val_4 < $get_range4 THEN '0' WHEN $val_4 > $get_range4 THEN $val_4 END AS $val_4,CASE WHEN $val_5 < $get_range5 THEN '0' WHEN $val_5 > $get_range5 THEN $val_5 END AS $val_5,CASE WHEN $val_6 < $get_range6 THEN '0' WHEN $val_6 > $get_range6 THEN $val_6 END AS $val_6,CASE WHEN $val_7 < $get_range7 THEN '0' WHEN $val_7 > $get_range7 THEN $val_7 END AS $val_7,CASE WHEN $val_8 < $get_range8 THEN '0' WHEN $val_8 > $get_range8 THEN $val_8 END AS $val_8,CASE WHEN $val_9 < $get_range9 THEN '0' WHEN $val_9 > $get_range9 THEN $val_9 END AS $val_9,CASE WHEN $val_10 < $get_range10 THEN '0' WHEN $val_10 > $get_range10 THEN $val_10 END AS $val_10,CASE WHEN $val_11 < $get_range11 THEN '0' WHEN $val_11 > $get_range11 THEN $val_11 END AS $val_11,CASE WHEN $val_12 < $get_range12 THEN '0' WHEN $val_12 > $get_range12 THEN $val_12 END AS $val_12,CASE WHEN $val_13 < $get_range13 THEN '0' WHEN $val_13 > $get_range13 THEN $val_13 END AS $val_13,CASE WHEN $val_14 < $get_range14 THEN '0' WHEN $val_14 > $get_range14 THEN $val_14 END AS $val_14,CASE WHEN $val_15 < $get_range15 THEN '0' WHEN $val_15 > $get_range15 THEN $val_15 END AS $val_15 FROM dt_aio WHERE timing > DATE_SUB(CURDATE(), INTERVAL 7 day) AND dt_id MOD '$interval' = 0");
                } else if (sizeof($req->all()[0]) == 16) {
                    $val_1 = DB::select("SELECT timing, CASE WHEN $val_1 < $get_range1 THEN '0' WHEN $val_1 > $get_range1 THEN $val_1 END AS $val_1, CASE WHEN $val_2 < $get_range2 THEN '0' WHEN $val_2 > $get_range2 THEN $val_2 END AS $val_2,CASE WHEN $val_3 < $get_range3 THEN '0' WHEN $val_3 > $get_range3 THEN $val_3 END AS $val_3,CASE WHEN $val_4 < $get_range4 THEN '0' WHEN $val_4 > $get_range4 THEN $val_4 END AS $val_4,CASE WHEN $val_5 < $get_range5 THEN '0' WHEN $val_5 > $get_range5 THEN $val_5 END AS $val_5,CASE WHEN $val_6 < $get_range6 THEN '0' WHEN $val_6 > $get_range6 THEN $val_6 END AS $val_6,CASE WHEN $val_7 < $get_range7 THEN '0' WHEN $val_7 > $get_range7 THEN $val_7 END AS $val_7,CASE WHEN $val_8 < $get_range8 THEN '0' WHEN $val_8 > $get_range8 THEN $val_8 END AS $val_8,CASE WHEN $val_9 < $get_range9 THEN '0' WHEN $val_9 > $get_range9 THEN $val_9 END AS $val_9,CASE WHEN $val_10 < $get_range10 THEN '0' WHEN $val_10 > $get_range10 THEN $val_10 END AS $val_10,CASE WHEN $val_11 < $get_range11 THEN '0' WHEN $val_11 > $get_range11 THEN $val_11 END AS $val_11,CASE WHEN $val_12 < $get_range12 THEN '0' WHEN $val_12 > $get_range12 THEN $val_12 END AS $val_12,CASE WHEN $val_13 < $get_range13 THEN '0' WHEN $val_13 > $get_range13 THEN $val_13 END AS $val_13,CASE WHEN $val_14 < $get_range14 THEN '0' WHEN $val_14 > $get_range14 THEN $val_14 END AS $val_14,CASE WHEN $val_15 < $get_range15 THEN '0' WHEN $val_15 > $get_range15 THEN $val_15 END AS $val_15,CASE WHEN $val_16 < $get_range16 THEN '0' WHEN $val_16 > $get_range16 THEN $val_16 END AS $val_16 FROM dt_aio WHERE timing > DATE_SUB(CURDATE(), INTERVAL 7 day) AND dt_id MOD '$interval' = 0");
                }
            } elseif ($timing == '4') {
                if (sizeof($req->all()[0]) == 1) {
                    $val_1 = DB::select("SELECT timing, CASE WHEN $val_1 < $get_range1 THEN '0' WHEN $val_1 > $get_range1 THEN $val_1 END AS $val_1 FROM dt_aio WHERE timing > DATE_SUB(CURDATE(), INTERVAL 1 MONTH) AND dt_id MOD '$interval' = 0");
                } else if (sizeof($req->all()[0]) == 2) {
                    $val_1 = DB::select("SELECT timing, CASE WHEN $val_1 < $get_range1 THEN '0' WHEN $val_1 > $get_range1 THEN $val_1 END AS $val_1, CASE WHEN $val_2 < $get_range2 THEN '0' WHEN $val_2 > $get_range2 THEN $val_2 END AS $val_2 FROM dt_aio WHERE timing > DATE_SUB(CURDATE(), INTERVAL 1 MONTH) AND dt_id MOD '$interval' = 0");
                } else if (sizeof($req->all()[0]) == 3) {
                    $val_1 = DB::select("SELECT timing, CASE WHEN $val_1 < $get_range1 THEN '0' WHEN $val_1 > $get_range1 THEN $val_1 END AS $val_1, CASE WHEN $val_2 < $get_range2 THEN '0' WHEN $val_2 > $get_range2 THEN $val_2 END AS $val_2,CASE WHEN $val_3 < $get_range3 THEN '0' WHEN $val_3 > $get_range3 THEN $val_3 END AS $val_3 FROM dt_aio WHERE timing > DATE_SUB(CURDATE(), INTERVAL 1 MONTH) AND dt_id MOD '$interval' = 0");
                } else if (sizeof($req->all()[0]) == 4) {
                    $val_1 = DB::select("SELECT timing, CASE WHEN $val_1 < $get_range1 THEN '0' WHEN $val_1 > $get_range1 THEN $val_1 END AS $val_1, CASE WHEN $val_2 < $get_range2 THEN '0' WHEN $val_2 > $get_range2 THEN $val_2 END AS $val_2,CASE WHEN $val_3 < $get_range3 THEN '0' WHEN $val_3 > $get_range3 THEN $val_3 END AS $val_3,CASE WHEN $val_4 < $get_range4 THEN '0' WHEN $val_4 > $get_range4 THEN $val_4 END AS $val_4 FROM dt_aio WHERE timing > DATE_SUB(CURDATE(), INTERVAL 1 MONTH) AND dt_id MOD '$interval' = 0");
                } else if (sizeof($req->all()[0]) == 5) {
                    $val_1 = DB::select("SELECT timing, CASE WHEN $val_1 < $get_range1 THEN '0' WHEN $val_1 > $get_range1 THEN $val_1 END AS $val_1, CASE WHEN $val_2 < $get_range2 THEN '0' WHEN $val_2 > $get_range2 THEN $val_2 END AS $val_2,CASE WHEN $val_3 < $get_range3 THEN '0' WHEN $val_3 > $get_range3 THEN $val_3 END AS $val_3,CASE WHEN $val_4 < $get_range4 THEN '0' WHEN $val_4 > $get_range4 THEN $val_4 END AS $val_4,CASE WHEN $val_5 < $get_range5 THEN '0' WHEN $val_5 > $get_range5 THEN $val_5 END AS $val_5 FROM dt_aio WHERE timing > DATE_SUB(CURDATE(), INTERVAL 1 MONTH) AND dt_id MOD '$interval' = 0");
                } else if (sizeof($req->all()[0]) == 6) {
                    $val_1 = DB::select("SELECT timing, CASE WHEN $val_1 < $get_range1 THEN '0' WHEN $val_1 > $get_range1 THEN $val_1 END AS $val_1, CASE WHEN $val_2 < $get_range2 THEN '0' WHEN $val_2 > $get_range2 THEN $val_2 END AS $val_2,CASE WHEN $val_3 < $get_range3 THEN '0' WHEN $val_3 > $get_range3 THEN $val_3 END AS $val_3,CASE WHEN $val_4 < $get_range4 THEN '0' WHEN $val_4 > $get_range4 THEN $val_4 END AS $val_4,CASE WHEN $val_5 < $get_range5 THEN '0' WHEN $val_5 > $get_range5 THEN $val_5 END AS $val_5,CASE WHEN $val_6 < $get_range6 THEN '0' WHEN $val_6 > $get_range6 THEN $val_6 END AS $val_6 FROM dt_aio WHERE timing > DATE_SUB(CURDATE(), INTERVAL 1 MONTH) AND dt_id MOD '$interval' = 0");
                } else if (sizeof($req->all()[0]) == 7) {
                    $val_1 = DB::select("SELECT timing, CASE WHEN $val_1 < $get_range1 THEN '0' WHEN $val_1 > $get_range1 THEN $val_1 END AS $val_1, CASE WHEN $val_2 < $get_range2 THEN '0' WHEN $val_2 > $get_range2 THEN $val_2 END AS $val_2,CASE WHEN $val_3 < $get_range3 THEN '0' WHEN $val_3 > $get_range3 THEN $val_3 END AS $val_3,CASE WHEN $val_4 < $get_range4 THEN '0' WHEN $val_4 > $get_range4 THEN $val_4 END AS $val_4,CASE WHEN $val_5 < $get_range5 THEN '0' WHEN $val_5 > $get_range5 THEN $val_5 END AS $val_5,CASE WHEN $val_6 < $get_range6 THEN '0' WHEN $val_6 > $get_range6 THEN $val_6 END AS $val_6,CASE WHEN $val_7 < $get_range7 THEN '0' WHEN $val_7 > $get_range7 THEN $val_7 END AS $val_7 FROM dt_aio WHERE timing > DATE_SUB(CURDATE(), INTERVAL 1 MONTH) AND dt_id MOD '$interval' = 0");
                } else if (sizeof($req->all()[0]) == 8) {
                    $val_1 = DB::select("SELECT timing, CASE WHEN $val_1 < $get_range1 THEN '0' WHEN $val_1 > $get_range1 THEN $val_1 END AS $val_1, CASE WHEN $val_2 < $get_range2 THEN '0' WHEN $val_2 > $get_range2 THEN $val_2 END AS $val_2,CASE WHEN $val_3 < $get_range3 THEN '0' WHEN $val_3 > $get_range3 THEN $val_3 END AS $val_3,CASE WHEN $val_4 < $get_range4 THEN '0' WHEN $val_4 > $get_range4 THEN $val_4 END AS $val_4,CASE WHEN $val_5 < $get_range5 THEN '0' WHEN $val_5 > $get_range5 THEN $val_5 END AS $val_5,CASE WHEN $val_6 < $get_range6 THEN '0' WHEN $val_6 > $get_range6 THEN $val_6 END AS $val_6,CASE WHEN $val_7 < $get_range7 THEN '0' WHEN $val_7 > $get_range7 THEN $val_7 END AS $val_7,CASE WHEN $val_8 < $get_range8 THEN '0' WHEN $val_8 > $get_range8 THEN $val_8 END AS $val_8 FROM dt_aio WHERE timing > DATE_SUB(CURDATE(), INTERVAL 1 MONTH) AND dt_id MOD '$interval' = 0");
                } else if (sizeof($req->all()[0]) == 9) {
                    $val_1 = DB::select("SELECT timing, CASE WHEN $val_1 < $get_range1 THEN '0' WHEN $val_1 > $get_range1 THEN $val_1 END AS $val_1, CASE WHEN $val_2 < $get_range2 THEN '0' WHEN $val_2 > $get_range2 THEN $val_2 END AS $val_2,CASE WHEN $val_3 < $get_range3 THEN '0' WHEN $val_3 > $get_range3 THEN $val_3 END AS $val_3,CASE WHEN $val_4 < $get_range4 THEN '0' WHEN $val_4 > $get_range4 THEN $val_4 END AS $val_4,CASE WHEN $val_5 < $get_range5 THEN '0' WHEN $val_5 > $get_range5 THEN $val_5 END AS $val_5,CASE WHEN $val_6 < $get_range6 THEN '0' WHEN $val_6 > $get_range6 THEN $val_6 END AS $val_6,CASE WHEN $val_7 < $get_range7 THEN '0' WHEN $val_7 > $get_range7 THEN $val_7 END AS $val_7,CASE WHEN $val_8 < $get_range8 THEN '0' WHEN $val_8 > $get_range8 THEN $val_8 END AS $val_8,CASE WHEN $val_9 < $get_range9 THEN '0' WHEN $val_9 > $get_range9 THEN $val_9 END AS $val_9 FROM dt_aio WHERE timing > DATE_SUB(CURDATE(), INTERVAL 1 MONTH) AND dt_id MOD '$interval' = 0");
                } else if (sizeof($req->all()[0]) == 10) {
                    $val_1 = DB::select("SELECT timing, CASE WHEN $val_1 < $get_range1 THEN '0' WHEN $val_1 > $get_range1 THEN $val_1 END AS $val_1, CASE WHEN $val_2 < $get_range2 THEN '0' WHEN $val_2 > $get_range2 THEN $val_2 END AS $val_2,CASE WHEN $val_3 < $get_range3 THEN '0' WHEN $val_3 > $get_range3 THEN $val_3 END AS $val_3,CASE WHEN $val_4 < $get_range4 THEN '0' WHEN $val_4 > $get_range4 THEN $val_4 END AS $val_4,CASE WHEN $val_5 < $get_range5 THEN '0' WHEN $val_5 > $get_range5 THEN $val_5 END AS $val_5,CASE WHEN $val_6 < $get_range6 THEN '0' WHEN $val_6 > $get_range6 THEN $val_6 END AS $val_6,CASE WHEN $val_7 < $get_range7 THEN '0' WHEN $val_7 > $get_range7 THEN $val_7 END AS $val_7,CASE WHEN $val_8 < $get_range8 THEN '0' WHEN $val_8 > $get_range8 THEN $val_8 END AS $val_8,CASE WHEN $val_9 < $get_range9 THEN '0' WHEN $val_9 > $get_range9 THEN $val_9 END AS $val_9,CASE WHEN $val_10 < $get_range10 THEN '0' WHEN $val_10 > $get_range10 THEN $val_10 END AS $val_10 FROM dt_aio WHERE timing > DATE_SUB(CURDATE(), INTERVAL 1 MONTH) AND dt_id MOD '$interval' = 0");
                } else if (sizeof($req->all()[0]) == 11) {
                    $val_1 = DB::select("SELECT timing, CASE WHEN $val_1 < $get_range1 THEN '0' WHEN $val_1 > $get_range1 THEN $val_1 END AS $val_1, CASE WHEN $val_2 < $get_range2 THEN '0' WHEN $val_2 > $get_range2 THEN $val_2 END AS $val_2,CASE WHEN $val_3 < $get_range3 THEN '0' WHEN $val_3 > $get_range3 THEN $val_3 END AS $val_3,CASE WHEN $val_4 < $get_range4 THEN '0' WHEN $val_4 > $get_range4 THEN $val_4 END AS $val_4,CASE WHEN $val_5 < $get_range5 THEN '0' WHEN $val_5 > $get_range5 THEN $val_5 END AS $val_5,CASE WHEN $val_6 < $get_range6 THEN '0' WHEN $val_6 > $get_range6 THEN $val_6 END AS $val_6,CASE WHEN $val_7 < $get_range7 THEN '0' WHEN $val_7 > $get_range7 THEN $val_7 END AS $val_7,CASE WHEN $val_8 < $get_range8 THEN '0' WHEN $val_8 > $get_range8 THEN $val_8 END AS $val_8,CASE WHEN $val_9 < $get_range9 THEN '0' WHEN $val_9 > $get_range9 THEN $val_9 END AS $val_9,CASE WHEN $val_10 < $get_range10 THEN '0' WHEN $val_10 > $get_range10 THEN $val_10 END AS $val_10,CASE WHEN $val_11 < $get_range11 THEN '0' WHEN $val_11 > $get_range11 THEN $val_11 END AS $val_11 FROM dt_aio WHERE timing > DATE_SUB(CURDATE(), INTERVAL 1 MONTH) AND dt_id MOD '$interval' = 0");
                } else if (sizeof($req->all()[0]) == 12) {
                    $val_1 = DB::select("SELECT timing, CASE WHEN $val_1 < $get_range1 THEN '0' WHEN $val_1 > $get_range1 THEN $val_1 END AS $val_1, CASE WHEN $val_2 < $get_range2 THEN '0' WHEN $val_2 > $get_range2 THEN $val_2 END AS $val_2,CASE WHEN $val_3 < $get_range3 THEN '0' WHEN $val_3 > $get_range3 THEN $val_3 END AS $val_3,CASE WHEN $val_4 < $get_range4 THEN '0' WHEN $val_4 > $get_range4 THEN $val_4 END AS $val_4,CASE WHEN $val_5 < $get_range5 THEN '0' WHEN $val_5 > $get_range5 THEN $val_5 END AS $val_5,CASE WHEN $val_6 < $get_range6 THEN '0' WHEN $val_6 > $get_range6 THEN $val_6 END AS $val_6,CASE WHEN $val_7 < $get_range7 THEN '0' WHEN $val_7 > $get_range7 THEN $val_7 END AS $val_7,CASE WHEN $val_8 < $get_range8 THEN '0' WHEN $val_8 > $get_range8 THEN $val_8 END AS $val_8,CASE WHEN $val_9 < $get_range9 THEN '0' WHEN $val_9 > $get_range9 THEN $val_9 END AS $val_9,CASE WHEN $val_10 < $get_range10 THEN '0' WHEN $val_10 > $get_range10 THEN $val_10 END AS $val_10,CASE WHEN $val_11 < $get_range11 THEN '0' WHEN $val_11 > $get_range11 THEN $val_11 END AS $val_11,CASE WHEN $val_12 < $get_range12 THEN '0' WHEN $val_12 > $get_range12 THEN $val_12 END AS $val_12 FROM dt_aio WHERE timing > DATE_SUB(CURDATE(), INTERVAL 1 MONTH) AND dt_id MOD '$interval' = 0");
                } else if (sizeof($req->all()[0]) == 13) {
                    $val_1 = DB::select("SELECT timing, CASE WHEN $val_1 < $get_range1 THEN '0' WHEN $val_1 > $get_range1 THEN $val_1 END AS $val_1, CASE WHEN $val_2 < $get_range2 THEN '0' WHEN $val_2 > $get_range2 THEN $val_2 END AS $val_2,CASE WHEN $val_3 < $get_range3 THEN '0' WHEN $val_3 > $get_range3 THEN $val_3 END AS $val_3,CASE WHEN $val_4 < $get_range4 THEN '0' WHEN $val_4 > $get_range4 THEN $val_4 END AS $val_4,CASE WHEN $val_5 < $get_range5 THEN '0' WHEN $val_5 > $get_range5 THEN $val_5 END AS $val_5,CASE WHEN $val_6 < $get_range6 THEN '0' WHEN $val_6 > $get_range6 THEN $val_6 END AS $val_6,CASE WHEN $val_7 < $get_range7 THEN '0' WHEN $val_7 > $get_range7 THEN $val_7 END AS $val_7,CASE WHEN $val_8 < $get_range8 THEN '0' WHEN $val_8 > $get_range8 THEN $val_8 END AS $val_8,CASE WHEN $val_9 < $get_range9 THEN '0' WHEN $val_9 > $get_range9 THEN $val_9 END AS $val_9,CASE WHEN $val_10 < $get_range10 THEN '0' WHEN $val_10 > $get_range10 THEN $val_10 END AS $val_10,CASE WHEN $val_11 < $get_range11 THEN '0' WHEN $val_11 > $get_range11 THEN $val_11 END AS $val_11,CASE WHEN $val_12 < $get_range12 THEN '0' WHEN $val_12 > $get_range12 THEN $val_12 END AS $val_12,CASE WHEN $val_13 < $get_range13 THEN '0' WHEN $val_13 > $get_range13 THEN $val_13 END AS $val_13 FROM dt_aio WHERE timing > DATE_SUB(CURDATE(), INTERVAL 1 MONTH) AND dt_id MOD '$interval' = 0");
                } else if (sizeof($req->all()[0]) == 14) {
                    $val_1 = DB::select("SELECT timing, CASE WHEN $val_1 < $get_range1 THEN '0' WHEN $val_1 > $get_range1 THEN $val_1 END AS $val_1, CASE WHEN $val_2 < $get_range2 THEN '0' WHEN $val_2 > $get_range2 THEN $val_2 END AS $val_2,CASE WHEN $val_3 < $get_range3 THEN '0' WHEN $val_3 > $get_range3 THEN $val_3 END AS $val_3,CASE WHEN $val_4 < $get_range4 THEN '0' WHEN $val_4 > $get_range4 THEN $val_4 END AS $val_4,CASE WHEN $val_5 < $get_range5 THEN '0' WHEN $val_5 > $get_range5 THEN $val_5 END AS $val_5,CASE WHEN $val_6 < $get_range6 THEN '0' WHEN $val_6 > $get_range6 THEN $val_6 END AS $val_6,CASE WHEN $val_7 < $get_range7 THEN '0' WHEN $val_7 > $get_range7 THEN $val_7 END AS $val_7,CASE WHEN $val_8 < $get_range8 THEN '0' WHEN $val_8 > $get_range8 THEN $val_8 END AS $val_8,CASE WHEN $val_9 < $get_range9 THEN '0' WHEN $val_9 > $get_range9 THEN $val_9 END AS $val_9,CASE WHEN $val_10 < $get_range10 THEN '0' WHEN $val_10 > $get_range10 THEN $val_10 END AS $val_10,CASE WHEN $val_11 < $get_range11 THEN '0' WHEN $val_11 > $get_range11 THEN $val_11 END AS $val_11,CASE WHEN $val_12 < $get_range12 THEN '0' WHEN $val_12 > $get_range12 THEN $val_12 END AS $val_12,CASE WHEN $val_13 < $get_range13 THEN '0' WHEN $val_13 > $get_range13 THEN $val_13 END AS $val_13,CASE WHEN $val_14 < $get_range14 THEN '0' WHEN $val_14 > $get_range14 THEN $val_14 END AS $val_14 FROM dt_aio WHERE timing > DATE_SUB(CURDATE(), INTERVAL 1 MONTH) AND dt_id MOD '$interval' = 0");
                } else if (sizeof($req->all()[0]) == 15) {
                    $val_1 = DB::select("SELECT timing, CASE WHEN $val_1 < $get_range1 THEN '0' WHEN $val_1 > $get_range1 THEN $val_1 END AS $val_1, CASE WHEN $val_2 < $get_range2 THEN '0' WHEN $val_2 > $get_range2 THEN $val_2 END AS $val_2,CASE WHEN $val_3 < $get_range3 THEN '0' WHEN $val_3 > $get_range3 THEN $val_3 END AS $val_3,CASE WHEN $val_4 < $get_range4 THEN '0' WHEN $val_4 > $get_range4 THEN $val_4 END AS $val_4,CASE WHEN $val_5 < $get_range5 THEN '0' WHEN $val_5 > $get_range5 THEN $val_5 END AS $val_5,CASE WHEN $val_6 < $get_range6 THEN '0' WHEN $val_6 > $get_range6 THEN $val_6 END AS $val_6,CASE WHEN $val_7 < $get_range7 THEN '0' WHEN $val_7 > $get_range7 THEN $val_7 END AS $val_7,CASE WHEN $val_8 < $get_range8 THEN '0' WHEN $val_8 > $get_range8 THEN $val_8 END AS $val_8,CASE WHEN $val_9 < $get_range9 THEN '0' WHEN $val_9 > $get_range9 THEN $val_9 END AS $val_9,CASE WHEN $val_10 < $get_range10 THEN '0' WHEN $val_10 > $get_range10 THEN $val_10 END AS $val_10,CASE WHEN $val_11 < $get_range11 THEN '0' WHEN $val_11 > $get_range11 THEN $val_11 END AS $val_11,CASE WHEN $val_12 < $get_range12 THEN '0' WHEN $val_12 > $get_range12 THEN $val_12 END AS $val_12,CASE WHEN $val_13 < $get_range13 THEN '0' WHEN $val_13 > $get_range13 THEN $val_13 END AS $val_13,CASE WHEN $val_14 < $get_range14 THEN '0' WHEN $val_14 > $get_range14 THEN $val_14 END AS $val_14,CASE WHEN $val_15 < $get_range15 THEN '0' WHEN $val_15 > $get_range15 THEN $val_15 END AS $val_15 FROM dt_aio WHERE timing > DATE_SUB(CURDATE(), INTERVAL 1 MONTH) AND dt_id MOD '$interval' = 0");
                } else if (sizeof($req->all()[0]) == 16) {
                    $val_1 = DB::select("SELECT timing, CASE WHEN $val_1 < $get_range1 THEN '0' WHEN $val_1 > $get_range1 THEN $val_1 END AS $val_1, CASE WHEN $val_2 < $get_range2 THEN '0' WHEN $val_2 > $get_range2 THEN $val_2 END AS $val_2,CASE WHEN $val_3 < $get_range3 THEN '0' WHEN $val_3 > $get_range3 THEN $val_3 END AS $val_3,CASE WHEN $val_4 < $get_range4 THEN '0' WHEN $val_4 > $get_range4 THEN $val_4 END AS $val_4,CASE WHEN $val_5 < $get_range5 THEN '0' WHEN $val_5 > $get_range5 THEN $val_5 END AS $val_5,CASE WHEN $val_6 < $get_range6 THEN '0' WHEN $val_6 > $get_range6 THEN $val_6 END AS $val_6,CASE WHEN $val_7 < $get_range7 THEN '0' WHEN $val_7 > $get_range7 THEN $val_7 END AS $val_7,CASE WHEN $val_8 < $get_range8 THEN '0' WHEN $val_8 > $get_range8 THEN $val_8 END AS $val_8,CASE WHEN $val_9 < $get_range9 THEN '0' WHEN $val_9 > $get_range9 THEN $val_9 END AS $val_9,CASE WHEN $val_10 < $get_range10 THEN '0' WHEN $val_10 > $get_range10 THEN $val_10 END AS $val_10,CASE WHEN $val_11 < $get_range11 THEN '0' WHEN $val_11 > $get_range11 THEN $val_11 END AS $val_11,CASE WHEN $val_12 < $get_range12 THEN '0' WHEN $val_12 > $get_range12 THEN $val_12 END AS $val_12,CASE WHEN $val_13 < $get_range13 THEN '0' WHEN $val_13 > $get_range13 THEN $val_13 END AS $val_13,CASE WHEN $val_14 < $get_range14 THEN '0' WHEN $val_14 > $get_range14 THEN $val_14 END AS $val_14,CASE WHEN $val_15 < $get_range15 THEN '0' WHEN $val_15 > $get_range15 THEN $val_15 END AS $val_15,CASE WHEN $val_16 < $get_range16 THEN '0' WHEN $val_16 > $get_range16 THEN $val_16 END AS $val_16 FROM dt_aio WHERE timing > DATE_SUB(CURDATE(), INTERVAL 1 MONTH) AND dt_id MOD '$interval' = 0");
                }
            } elseif ($timing == '5') {
                if (sizeof($req->all()[0]) == 1) {
                    $val_1 = DB::select("SELECT timing, CASE WHEN $val_1 < $get_range1 THEN '0' WHEN $val_1 > $get_range1 THEN $val_1 END AS $val_1 FROM dt_aio WHERE timing BETWEEN '$new_date1' AND '$new_date2' AND dt_id MOD '$interval' = 0 ORDER BY dt_id ASC");
                } else if (sizeof($req->all()[0]) == 2) {
                    $val_1 = DB::select("SELECT timing, CASE WHEN $val_1 < $get_range1 THEN '0' WHEN $val_1 > $get_range1 THEN $val_1 END AS $val_1, CASE WHEN $val_2 < $get_range2 THEN '0' WHEN $val_2 > $get_range2 THEN $val_2 END AS $val_2 FROM dt_aio WHERE timing BETWEEN '$new_date1' AND '$new_date2' AND dt_id MOD '$interval' = 0 ORDER BY dt_id ASC");
                } else if (sizeof($req->all()[0]) == 3) {
                    $val_1 = DB::select("SELECT timing, CASE WHEN $val_1 < $get_range1 THEN '0' WHEN $val_1 > $get_range1 THEN $val_1 END AS $val_1, CASE WHEN $val_2 < $get_range2 THEN '0' WHEN $val_2 > $get_range2 THEN $val_2 END AS $val_2,CASE WHEN $val_3 < $get_range3 THEN '0' WHEN $val_3 > $get_range3 THEN $val_3 END AS $val_3 FROM dt_aio WHERE timing BETWEEN '$new_date1' AND '$new_date2' AND dt_id MOD '$interval' = 0 ORDER BY dt_id ASC");
                } else if (sizeof($req->all()[0]) == 4) {
                    $val_1 = DB::select("SELECT timing, CASE WHEN $val_1 < $get_range1 THEN '0' WHEN $val_1 > $get_range1 THEN $val_1 END AS $val_1, CASE WHEN $val_2 < $get_range2 THEN '0' WHEN $val_2 > $get_range2 THEN $val_2 END AS $val_2,CASE WHEN $val_3 < $get_range3 THEN '0' WHEN $val_3 > $get_range3 THEN $val_3 END AS $val_3,CASE WHEN $val_4 < $get_range4 THEN '0' WHEN $val_4 > $get_range4 THEN $val_4 END AS $val_4 FROM dt_aio WHERE timing BETWEEN '$new_date1' AND '$new_date2' AND dt_id MOD '$interval' = 0 ORDER BY dt_id ASC");
                } else if (sizeof($req->all()[0]) == 5) {
                    $val_1 = DB::select("SELECT timing, CASE WHEN $val_1 < $get_range1 THEN '0' WHEN $val_1 > $get_range1 THEN $val_1 END AS $val_1, CASE WHEN $val_2 < $get_range2 THEN '0' WHEN $val_2 > $get_range2 THEN $val_2 END AS $val_2,CASE WHEN $val_3 < $get_range3 THEN '0' WHEN $val_3 > $get_range3 THEN $val_3 END AS $val_3,CASE WHEN $val_4 < $get_range4 THEN '0' WHEN $val_4 > $get_range4 THEN $val_4 END AS $val_4,CASE WHEN $val_5 < $get_range5 THEN '0' WHEN $val_5 > $get_range5 THEN $val_5 END AS $val_5 FROM dt_aio WHERE timing BETWEEN '$new_date1' AND '$new_date2' AND dt_id MOD '$interval' = 0 ORDER BY dt_id ASC");
                } else if (sizeof($req->all()[0]) == 6) {
                    $val_1 = DB::select("SELECT timing, CASE WHEN $val_1 < $get_range1 THEN '0' WHEN $val_1 > $get_range1 THEN $val_1 END AS $val_1, CASE WHEN $val_2 < $get_range2 THEN '0' WHEN $val_2 > $get_range2 THEN $val_2 END AS $val_2,CASE WHEN $val_3 < $get_range3 THEN '0' WHEN $val_3 > $get_range3 THEN $val_3 END AS $val_3,CASE WHEN $val_4 < $get_range4 THEN '0' WHEN $val_4 > $get_range4 THEN $val_4 END AS $val_4,CASE WHEN $val_5 < $get_range5 THEN '0' WHEN $val_5 > $get_range5 THEN $val_5 END AS $val_5,CASE WHEN $val_6 < $get_range6 THEN '0' WHEN $val_6 > $get_range6 THEN $val_6 END AS $val_6 FROM dt_aio WHERE timing BETWEEN '$new_date1' AND '$new_date2' AND dt_id MOD '$interval' = 0 ORDER BY dt_id ASC");
                } else if (sizeof($req->all()[0]) == 7) {
                    $val_1 = DB::select("SELECT timing, CASE WHEN $val_1 < $get_range1 THEN '0' WHEN $val_1 > $get_range1 THEN $val_1 END AS $val_1, CASE WHEN $val_2 < $get_range2 THEN '0' WHEN $val_2 > $get_range2 THEN $val_2 END AS $val_2,CASE WHEN $val_3 < $get_range3 THEN '0' WHEN $val_3 > $get_range3 THEN $val_3 END AS $val_3,CASE WHEN $val_4 < $get_range4 THEN '0' WHEN $val_4 > $get_range4 THEN $val_4 END AS $val_4,CASE WHEN $val_5 < $get_range5 THEN '0' WHEN $val_5 > $get_range5 THEN $val_5 END AS $val_5,CASE WHEN $val_6 < $get_range6 THEN '0' WHEN $val_6 > $get_range6 THEN $val_6 END AS $val_6,CASE WHEN $val_7 < $get_range7 THEN '0' WHEN $val_7 > $get_range7 THEN $val_7 END AS $val_7 FROM dt_aio WHERE timing BETWEEN '$new_date1' AND '$new_date2' AND dt_id MOD '$interval' = 0 ORDER BY dt_id ASC");
                } else if (sizeof($req->all()[0]) == 8) {
                    $val_1 = DB::select("SELECT timing, CASE WHEN $val_1 < $get_range1 THEN '0' WHEN $val_1 > $get_range1 THEN $val_1 END AS $val_1, CASE WHEN $val_2 < $get_range2 THEN '0' WHEN $val_2 > $get_range2 THEN $val_2 END AS $val_2,CASE WHEN $val_3 < $get_range3 THEN '0' WHEN $val_3 > $get_range3 THEN $val_3 END AS $val_3,CASE WHEN $val_4 < $get_range4 THEN '0' WHEN $val_4 > $get_range4 THEN $val_4 END AS $val_4,CASE WHEN $val_5 < $get_range5 THEN '0' WHEN $val_5 > $get_range5 THEN $val_5 END AS $val_5,CASE WHEN $val_6 < $get_range6 THEN '0' WHEN $val_6 > $get_range6 THEN $val_6 END AS $val_6,CASE WHEN $val_7 < $get_range7 THEN '0' WHEN $val_7 > $get_range7 THEN $val_7 END AS $val_7,CASE WHEN $val_8 < $get_range8 THEN '0' WHEN $val_8 > $get_range8 THEN $val_8 END AS $val_8 FROM dt_aio WHERE timing BETWEEN '$new_date1' AND '$new_date2' AND dt_id MOD '$interval' = 0 ORDER BY dt_id ASC");
                } else if (sizeof($req->all()[0]) == 9) {
                    $val_1 = DB::select("SELECT timing, CASE WHEN $val_1 < $get_range1 THEN '0' WHEN $val_1 > $get_range1 THEN $val_1 END AS $val_1, CASE WHEN $val_2 < $get_range2 THEN '0' WHEN $val_2 > $get_range2 THEN $val_2 END AS $val_2,CASE WHEN $val_3 < $get_range3 THEN '0' WHEN $val_3 > $get_range3 THEN $val_3 END AS $val_3,CASE WHEN $val_4 < $get_range4 THEN '0' WHEN $val_4 > $get_range4 THEN $val_4 END AS $val_4,CASE WHEN $val_5 < $get_range5 THEN '0' WHEN $val_5 > $get_range5 THEN $val_5 END AS $val_5,CASE WHEN $val_6 < $get_range6 THEN '0' WHEN $val_6 > $get_range6 THEN $val_6 END AS $val_6,CASE WHEN $val_7 < $get_range7 THEN '0' WHEN $val_7 > $get_range7 THEN $val_7 END AS $val_7,CASE WHEN $val_8 < $get_range8 THEN '0' WHEN $val_8 > $get_range8 THEN $val_8 END AS $val_8,CASE WHEN $val_9 < $get_range9 THEN '0' WHEN $val_9 > $get_range9 THEN $val_9 END AS $val_9 FROM dt_aio WHERE timing BETWEEN '$new_date1' AND '$new_date2' AND dt_id MOD '$interval' = 0 ORDER BY dt_id ASC");
                } else if (sizeof($req->all()[0]) == 10) {
                    $val_1 = DB::select("SELECT timing, CASE WHEN $val_1 < $get_range1 THEN '0' WHEN $val_1 > $get_range1 THEN $val_1 END AS $val_1, CASE WHEN $val_2 < $get_range2 THEN '0' WHEN $val_2 > $get_range2 THEN $val_2 END AS $val_2,CASE WHEN $val_3 < $get_range3 THEN '0' WHEN $val_3 > $get_range3 THEN $val_3 END AS $val_3,CASE WHEN $val_4 < $get_range4 THEN '0' WHEN $val_4 > $get_range4 THEN $val_4 END AS $val_4,CASE WHEN $val_5 < $get_range5 THEN '0' WHEN $val_5 > $get_range5 THEN $val_5 END AS $val_5,CASE WHEN $val_6 < $get_range6 THEN '0' WHEN $val_6 > $get_range6 THEN $val_6 END AS $val_6,CASE WHEN $val_7 < $get_range7 THEN '0' WHEN $val_7 > $get_range7 THEN $val_7 END AS $val_7,CASE WHEN $val_8 < $get_range8 THEN '0' WHEN $val_8 > $get_range8 THEN $val_8 END AS $val_8,CASE WHEN $val_9 < $get_range9 THEN '0' WHEN $val_9 > $get_range9 THEN $val_9 END AS $val_9,CASE WHEN $val_10 < $get_range10 THEN '0' WHEN $val_10 > $get_range10 THEN $val_10 END AS $val_10 FROM dt_aio WHERE timing BETWEEN '$new_date1' AND '$new_date2' AND dt_id MOD '$interval' = 0 ORDER BY dt_id ASC");
                } else if (sizeof($req->all()[0]) == 11) {
                    $val_1 = DB::select("SELECT timing, CASE WHEN $val_1 < $get_range1 THEN '0' WHEN $val_1 > $get_range1 THEN $val_1 END AS $val_1, CASE WHEN $val_2 < $get_range2 THEN '0' WHEN $val_2 > $get_range2 THEN $val_2 END AS $val_2,CASE WHEN $val_3 < $get_range3 THEN '0' WHEN $val_3 > $get_range3 THEN $val_3 END AS $val_3,CASE WHEN $val_4 < $get_range4 THEN '0' WHEN $val_4 > $get_range4 THEN $val_4 END AS $val_4,CASE WHEN $val_5 < $get_range5 THEN '0' WHEN $val_5 > $get_range5 THEN $val_5 END AS $val_5,CASE WHEN $val_6 < $get_range6 THEN '0' WHEN $val_6 > $get_range6 THEN $val_6 END AS $val_6,CASE WHEN $val_7 < $get_range7 THEN '0' WHEN $val_7 > $get_range7 THEN $val_7 END AS $val_7,CASE WHEN $val_8 < $get_range8 THEN '0' WHEN $val_8 > $get_range8 THEN $val_8 END AS $val_8,CASE WHEN $val_9 < $get_range9 THEN '0' WHEN $val_9 > $get_range9 THEN $val_9 END AS $val_9,CASE WHEN $val_10 < $get_range10 THEN '0' WHEN $val_10 > $get_range10 THEN $val_10 END AS $val_10,CASE WHEN $val_11 < $get_range11 THEN '0' WHEN $val_11 > $get_range11 THEN $val_11 END AS $val_11 FROM dt_aio WHERE timing BETWEEN '$new_date1' AND '$new_date2' AND dt_id MOD '$interval' = 0 ORDER BY dt_id ASC");
                } else if (sizeof($req->all()[0]) == 12) {
                    $val_1 = DB::select("SELECT timing, CASE WHEN $val_1 < $get_range1 THEN '0' WHEN $val_1 > $get_range1 THEN $val_1 END AS $val_1, CASE WHEN $val_2 < $get_range2 THEN '0' WHEN $val_2 > $get_range2 THEN $val_2 END AS $val_2,CASE WHEN $val_3 < $get_range3 THEN '0' WHEN $val_3 > $get_range3 THEN $val_3 END AS $val_3,CASE WHEN $val_4 < $get_range4 THEN '0' WHEN $val_4 > $get_range4 THEN $val_4 END AS $val_4,CASE WHEN $val_5 < $get_range5 THEN '0' WHEN $val_5 > $get_range5 THEN $val_5 END AS $val_5,CASE WHEN $val_6 < $get_range6 THEN '0' WHEN $val_6 > $get_range6 THEN $val_6 END AS $val_6,CASE WHEN $val_7 < $get_range7 THEN '0' WHEN $val_7 > $get_range7 THEN $val_7 END AS $val_7,CASE WHEN $val_8 < $get_range8 THEN '0' WHEN $val_8 > $get_range8 THEN $val_8 END AS $val_8,CASE WHEN $val_9 < $get_range9 THEN '0' WHEN $val_9 > $get_range9 THEN $val_9 END AS $val_9,CASE WHEN $val_10 < $get_range10 THEN '0' WHEN $val_10 > $get_range10 THEN $val_10 END AS $val_10,CASE WHEN $val_11 < $get_range11 THEN '0' WHEN $val_11 > $get_range11 THEN $val_11 END AS $val_11,CASE WHEN $val_12 < $get_range12 THEN '0' WHEN $val_12 > $get_range12 THEN $val_12 END AS $val_12 FROM dt_aio WHERE timing BETWEEN '$new_date1' AND '$new_date2' AND dt_id MOD '$interval' = 0 ORDER BY dt_id ASC");
                } else if (sizeof($req->all()[0]) == 13) {
                    $val_1 = DB::select("SELECT timing, CASE WHEN $val_1 < $get_range1 THEN '0' WHEN $val_1 > $get_range1 THEN $val_1 END AS $val_1, CASE WHEN $val_2 < $get_range2 THEN '0' WHEN $val_2 > $get_range2 THEN $val_2 END AS $val_2,CASE WHEN $val_3 < $get_range3 THEN '0' WHEN $val_3 > $get_range3 THEN $val_3 END AS $val_3,CASE WHEN $val_4 < $get_range4 THEN '0' WHEN $val_4 > $get_range4 THEN $val_4 END AS $val_4,CASE WHEN $val_5 < $get_range5 THEN '0' WHEN $val_5 > $get_range5 THEN $val_5 END AS $val_5,CASE WHEN $val_6 < $get_range6 THEN '0' WHEN $val_6 > $get_range6 THEN $val_6 END AS $val_6,CASE WHEN $val_7 < $get_range7 THEN '0' WHEN $val_7 > $get_range7 THEN $val_7 END AS $val_7,CASE WHEN $val_8 < $get_range8 THEN '0' WHEN $val_8 > $get_range8 THEN $val_8 END AS $val_8,CASE WHEN $val_9 < $get_range9 THEN '0' WHEN $val_9 > $get_range9 THEN $val_9 END AS $val_9,CASE WHEN $val_10 < $get_range10 THEN '0' WHEN $val_10 > $get_range10 THEN $val_10 END AS $val_10,CASE WHEN $val_11 < $get_range11 THEN '0' WHEN $val_11 > $get_range11 THEN $val_11 END AS $val_11,CASE WHEN $val_12 < $get_range12 THEN '0' WHEN $val_12 > $get_range12 THEN $val_12 END AS $val_12,CASE WHEN $val_13 < $get_range13 THEN '0' WHEN $val_13 > $get_range13 THEN $val_13 END AS $val_13 FROM dt_aio WHERE timing BETWEEN '$new_date1' AND '$new_date2' AND dt_id MOD '$interval' = 0 ORDER BY dt_id ASC");
                } else if (sizeof($req->all()[0]) == 14) {
                    $val_1 = DB::select("SELECT timing, CASE WHEN $val_1 < $get_range1 THEN '0' WHEN $val_1 > $get_range1 THEN $val_1 END AS $val_1, CASE WHEN $val_2 < $get_range2 THEN '0' WHEN $val_2 > $get_range2 THEN $val_2 END AS $val_2,CASE WHEN $val_3 < $get_range3 THEN '0' WHEN $val_3 > $get_range3 THEN $val_3 END AS $val_3,CASE WHEN $val_4 < $get_range4 THEN '0' WHEN $val_4 > $get_range4 THEN $val_4 END AS $val_4,CASE WHEN $val_5 < $get_range5 THEN '0' WHEN $val_5 > $get_range5 THEN $val_5 END AS $val_5,CASE WHEN $val_6 < $get_range6 THEN '0' WHEN $val_6 > $get_range6 THEN $val_6 END AS $val_6,CASE WHEN $val_7 < $get_range7 THEN '0' WHEN $val_7 > $get_range7 THEN $val_7 END AS $val_7,CASE WHEN $val_8 < $get_range8 THEN '0' WHEN $val_8 > $get_range8 THEN $val_8 END AS $val_8,CASE WHEN $val_9 < $get_range9 THEN '0' WHEN $val_9 > $get_range9 THEN $val_9 END AS $val_9,CASE WHEN $val_10 < $get_range10 THEN '0' WHEN $val_10 > $get_range10 THEN $val_10 END AS $val_10,CASE WHEN $val_11 < $get_range11 THEN '0' WHEN $val_11 > $get_range11 THEN $val_11 END AS $val_11,CASE WHEN $val_12 < $get_range12 THEN '0' WHEN $val_12 > $get_range12 THEN $val_12 END AS $val_12,CASE WHEN $val_13 < $get_range13 THEN '0' WHEN $val_13 > $get_range13 THEN $val_13 END AS $val_13,CASE WHEN $val_14 < $get_range14 THEN '0' WHEN $val_14 > $get_range14 THEN $val_14 END AS $val_14 FROM dt_aio WHERE timing BETWEEN '$new_date1' AND '$new_date2' AND dt_id MOD '$interval' = 0 ORDER BY dt_id ASC");
                } else if (sizeof($req->all()[0]) == 15) {
                    $val_1 = DB::select("SELECT timing, CASE WHEN $val_1 < $get_range1 THEN '0' WHEN $val_1 > $get_range1 THEN $val_1 END AS $val_1, CASE WHEN $val_2 < $get_range2 THEN '0' WHEN $val_2 > $get_range2 THEN $val_2 END AS $val_2,CASE WHEN $val_3 < $get_range3 THEN '0' WHEN $val_3 > $get_range3 THEN $val_3 END AS $val_3,CASE WHEN $val_4 < $get_range4 THEN '0' WHEN $val_4 > $get_range4 THEN $val_4 END AS $val_4,CASE WHEN $val_5 < $get_range5 THEN '0' WHEN $val_5 > $get_range5 THEN $val_5 END AS $val_5,CASE WHEN $val_6 < $get_range6 THEN '0' WHEN $val_6 > $get_range6 THEN $val_6 END AS $val_6,CASE WHEN $val_7 < $get_range7 THEN '0' WHEN $val_7 > $get_range7 THEN $val_7 END AS $val_7,CASE WHEN $val_8 < $get_range8 THEN '0' WHEN $val_8 > $get_range8 THEN $val_8 END AS $val_8,CASE WHEN $val_9 < $get_range9 THEN '0' WHEN $val_9 > $get_range9 THEN $val_9 END AS $val_9,CASE WHEN $val_10 < $get_range10 THEN '0' WHEN $val_10 > $get_range10 THEN $val_10 END AS $val_10,CASE WHEN $val_11 < $get_range11 THEN '0' WHEN $val_11 > $get_range11 THEN $val_11 END AS $val_11,CASE WHEN $val_12 < $get_range12 THEN '0' WHEN $val_12 > $get_range12 THEN $val_12 END AS $val_12,CASE WHEN $val_13 < $get_range13 THEN '0' WHEN $val_13 > $get_range13 THEN $val_13 END AS $val_13,CASE WHEN $val_14 < $get_range14 THEN '0' WHEN $val_14 > $get_range14 THEN $val_14 END AS $val_14,CASE WHEN $val_15 < $get_range15 THEN '0' WHEN $val_15 > $get_range15 THEN $val_15 END AS $val_15 FROM dt_aio WHERE timing BETWEEN '$new_date1' AND '$new_date2' AND dt_id MOD '$interval' = 0 ORDER BY dt_id ASC");
                } else if (sizeof($req->all()[0]) == 16) {
                    $val_1 = DB::select("SELECT timing, CASE WHEN $val_1 < $get_range1 THEN '0' WHEN $val_1 > $get_range1 THEN $val_1 END AS $val_1, CASE WHEN $val_2 < $get_range2 THEN '0' WHEN $val_2 > $get_range2 THEN $val_2 END AS $val_2,CASE WHEN $val_3 < $get_range3 THEN '0' WHEN $val_3 > $get_range3 THEN $val_3 END AS $val_3,CASE WHEN $val_4 < $get_range4 THEN '0' WHEN $val_4 > $get_range4 THEN $val_4 END AS $val_4,CASE WHEN $val_5 < $get_range5 THEN '0' WHEN $val_5 > $get_range5 THEN $val_5 END AS $val_5,CASE WHEN $val_6 < $get_range6 THEN '0' WHEN $val_6 > $get_range6 THEN $val_6 END AS $val_6,CASE WHEN $val_7 < $get_range7 THEN '0' WHEN $val_7 > $get_range7 THEN $val_7 END AS $val_7,CASE WHEN $val_8 < $get_range8 THEN '0' WHEN $val_8 > $get_range8 THEN $val_8 END AS $val_8,CASE WHEN $val_9 < $get_range9 THEN '0' WHEN $val_9 > $get_range9 THEN $val_9 END AS $val_9,CASE WHEN $val_10 < $get_range10 THEN '0' WHEN $val_10 > $get_range10 THEN $val_10 END AS $val_10,CASE WHEN $val_11 < $get_range11 THEN '0' WHEN $val_11 > $get_range11 THEN $val_11 END AS $val_11,CASE WHEN $val_12 < $get_range12 THEN '0' WHEN $val_12 > $get_range12 THEN $val_12 END AS $val_12,CASE WHEN $val_13 < $get_range13 THEN '0' WHEN $val_13 > $get_range13 THEN $val_13 END AS $val_13,CASE WHEN $val_14 < $get_range14 THEN '0' WHEN $val_14 > $get_range14 THEN $val_14 END AS $val_14,CASE WHEN $val_15 < $get_range15 THEN '0' WHEN $val_15 > $get_range15 THEN $val_15 END AS $val_15,CASE WHEN $val_16 < $get_range16 THEN '0' WHEN $val_16 > $get_range16 THEN $val_16 END AS $val_16 FROM dt_aio WHERE timing BETWEEN '$new_date1' AND '$new_date2' AND dt_id MOD '$interval' = 0 ORDER BY dt_id ASC");
                }
            }
        }
        $response = [
            'val_1' => $val_1,
            'get_range' => $get_range,
            'status_code' => 200
        ];
        return response()->json($response);
    }

    public function index(Request $request)
    {
        $dt_aio = dt_aio::orderBy("dt_id", "DESC")->first();

        $valves_status = Valves_status::orderBy("tag_id", "DESC")->first();

        $set_point = Setpoint::orderBy("sp_id", "DESC")->first();
       

        $pump_interval = DB::SELECT("SELECT
       MAX(IF(pump_name='p501a' , pump_status, 0)) AS p501a_status,
       MAX(IF(pump_name='p501b' , pump_status, 0)) AS p501b_status,
       MAX(IF(pump_name='p502a' , pump_status, 0)) AS p502a_status,
       MAX(IF(pump_name='p502b' , pump_status, 0)) AS p502b_status,
       MAX(IF(pump_name='p503a' , pump_status, 0)) AS p503a_status,
       MAX(IF(pump_name='p503b' , pump_status, 0)) AS p503b_status,
       MAX(IF(pump_name='p505a' , pump_status, 0)) AS p505a_status,
       MAX(IF(pump_name='p505b' , pump_status, 0)) AS p505b_status,
       MAX(IF(pump_name='p401a' , pump_status, 0)) AS p401a_status,
       MAX(IF(pump_name='p401b' , pump_status, 0)) AS p401b_status,
       MAX(IF(pump_name='p402a' , pump_status, 0)) AS p402a_status,
       MAX(IF(pump_name='p402b' , pump_status, 0)) AS p402b_status,
       MAX(IF(pump_name='p402c' , pump_status, 0)) AS p402c_status,
       MAX(IF(pump_name='p403a' , pump_status, 0)) AS p403a_status,
       MAX(IF(pump_name='p403b' , pump_status, 0)) AS p403b_status,
       MAX(IF(pump_name='p404a' , pump_status, 0)) AS p404a_status,
       MAX(IF(pump_name='p404b' , pump_status, 0)) AS p404b_status,
       MAX(IF(pump_name='p405a' , pump_status, 0)) AS p405a_status,
       MAX(IF(pump_name='p405b' , pump_status, 0)) AS p405b_status,
       MAX(IF(pump_name='p702a' , pump_status, 0)) AS p702a_status,
       MAX(IF(pump_name='p702b' , pump_status, 0)) AS p702b_status,
       MAX(IF(pump_name='p705a' , pump_status, 0)) AS p705a_status,
       MAX(IF(pump_name='p705b' , pump_status, 0)) AS p705b_status,
       MAX(IF(pump_name='p102a' , pump_status, 0)) AS p102a_status,
       MAX(IF(pump_name='p102b' , pump_status, 0)) AS p102b_status,
       MAX(IF(pump_name='p103a' , pump_status, 0)) AS p103a_status,
       MAX(IF(pump_name='p103b' , pump_status, 0)) AS p103b_status,
       MAX(IF(pump_name='p202b' , pump_status, 0)) AS p202b_status,
       MAX(IF(pump_name='p203a' , pump_status, 0)) AS p203a_status,
       MAX(IF(pump_name='p203b' , pump_status, 0)) AS p203b_status,
       MAX(IF(pump_name='p601a' , pump_status, 0)) AS p601a_status,
       MAX(IF(pump_name='p601b' , pump_status, 0)) AS p601b_status,
       MAX(IF(pump_name='p602a' , pump_status, 0)) AS p602a_status,
       MAX(IF(pump_name='p602b' , pump_status, 0)) AS p602b_status,
       MAX(IF(pump_name='p603a' , pump_status, 0)) AS p603a_status,
       MAX(IF(pump_name='p603b' , pump_status, 0)) AS p603b_status,
       MAX(IF(pump_name='p204a' , pump_status, 0)) AS p204a_status,
       MAX(IF(pump_name='p204b' , pump_status, 0)) AS p204b_status,
       MAX(IF(pump_name='p204c' , pump_status, 0)) AS p204c_status,
       MAX(IF(pump_name='p407a' , pump_status, 0)) AS p407a_status,
       MAX(IF(pump_name='p407b' , pump_status, 0)) AS p407b_status,
       MAX(IF(pump_name='p406a' , pump_status, 0)) AS p406a_status,
       MAX(IF(pump_name='p406b' , pump_status, 0)) AS p406b_status
       FROM pump_interval");
        //        $res = json_encode($res);
        $response = [
            'dt_aio' => $dt_aio,

            'valves_status' => $valves_status,
            'pump_interval' => $pump_interval,
            'setpoint' => $set_point,
            
            'status_code' => 200
        ];
        return response()->json($response);
    }
    //////////////////////////////////
    public function PTpdfreport(Request $req)
    {
        $fromdate = $req->startdate;
        $todate = $req->enddate;
        $interval = $req->setInterval;
        $s_pt = $req->select_pt;

        $date1 = strtotime($fromdate);
        $date2 = strtotime($todate);
        $new_date1 = date('Y-m-d H:i:s', $date1);
        $new_date2 = date('Y-m-d H:i:s', $date2);

        $db_data = DB::select("SELECT * FROM pt WHERE timing BETWEEN '$new_date1' AND '$new_date2' AND pt_id MOD '$interval' = 0 ORDER BY pt_id ASC");

       
        $response = [
          
            'db_data' => $db_data,
            'status_code' => 200
        ];
        return response()->json($response);
    }

    //////////////////////////////////////

    //////////////////////////////////
    public function flowTotall_pdfreport(Request $req)
    {
        $fromdate = $req->startdate;
        $todate = $req->enddate;
        $setInterval = $req->setInterval;
        $s_vg = $req->select_FM;

        $date1 = strtotime($fromdate);
        $date2 = strtotime($todate);
        $new_date1 = date('Y-m-d H:i:s', $date1);
        $new_date2 = date('Y-m-d H:i:s', $date2);
        if ($s_vg == 'FM-all') {
            $db_data = DB::select("SELECT * FROM ft_log WHERE reset_time BETWEEN '$new_date1' AND '$new_date2' ORDER BY ft_log_id ASC");
        } else {
            $db_data = DB::select("SELECT * FROM ft_log WHERE reset_time BETWEEN '$new_date1' AND '$new_date2' AND fm_name = '$s_vg' ORDER BY ft_log_id ASC");
        }


      

        $response = [
           
            'db_data' => $db_data,
            'status_code' => 200
        ];
        return response()->json($response);
    }

    //////////////////////////////////////

    //////////////////////////////////////
    public function PumpReport(Request $req)
    {
        $fromdate = $req->startdate;
        $todate = $req->enddate;
        $pump_name = $req->pumpname;

        $date1 = strtotime($fromdate);
        $date2 = strtotime($todate);
        $new_date1 = date('Y-m-d H:i:s', $date1);
        $new_date2 = date('Y-m-d H:i:s', $date2);

        $db_data = DB::select("SELECT pump_name,on_timing,off_timing,operator FROM pump_interval WHERE pump_name='$pump_name' And on_timing BETWEEN '$new_date1' AND '$new_date2' AND off_timing IS NOT NULL");

        return response()->json([
            'pump_data' => $db_data,
        ], 200);
    }
    //////////////////////////////////////
    public function PtgraphReporting(Request $req)
    {

        $fromdate = $req->startdate;
        $todate = $req->enddate;
        $interval = $req->setInterval;
        $s_pt = $req->select_pt;

        $date1 = strtotime($fromdate);
        $date2 = strtotime($todate);
        $new_date1 = date('Y-m-d H:i:s', $date1);
        $new_date2 = date('Y-m-d H:i:s', $date2);

        $db_data = DB::select("SELECT timing, $s_pt FROM pt WHERE timing BETWEEN '$new_date1' AND '$new_date2' AND pt_id MOD '$interval' = 0 AND $s_pt > 0 ORDER BY pt_id ASC");
        $pt = array();
        $timing = array();
        if ($s_pt === 'pt_1') {
            foreach ($db_data as $item) {
                array_push($pt, $item->pt_1);
                array_push($timing, $item->timing);
            }
        } elseif ($s_pt === 'pt_2') {
            foreach ($db_data as $item) {
                array_push($pt, $item->pt_2);
                array_push($timing, $item->timing);
            }
        } elseif ($s_pt === 'pt_3') {
            foreach ($db_data as $item) {
                array_push($pt, $item->pt_3);
                array_push($timing, $item->timing);
            }
        } elseif ($s_pt === 'pt_4') {
            foreach ($db_data as $item) {
                array_push($pt, $item->pt_4);
                array_push($timing, $item->timing);
            }
        } elseif ($s_pt === 'pt_5') {
            foreach ($db_data as $item) {
                array_push($pt, $item->pt_5);
                array_push($timing, $item->timing);
            }
        } elseif ($s_pt === 'pt_6') {
            foreach ($db_data as $item) {
                array_push($pt, $item->pt_6);
                array_push($timing, $item->timing);
            }
        } elseif ($s_pt === 'pt_7') {
            foreach ($db_data as $item) {
                array_push($pt, $item->pt_7);
                array_push($timing, $item->timing);
            }
        } elseif ($s_pt === 'pt_8') {
            foreach ($db_data as $item) {
                array_push($pt, $item->pt_8);
                array_push($timing, $item->timing);
            }
        } elseif ($s_pt === 'pt_9') {
            foreach ($db_data as $item) {
                array_push($pt, $item->pt_9);
                array_push($timing, $item->timing);
            }
        } elseif ($s_pt === 'pt_10') {
            foreach ($db_data as $item) {
                array_push($pt, $item->pt_10);
                array_push($timing, $item->timing);
            }
        } elseif ($s_pt === 'pt_11') {
            foreach ($db_data as $item) {
                array_push($pt, $item->pt_11);
                array_push($timing, $item->timing);
            }
        } elseif ($s_pt === 'pt_12') {
            foreach ($db_data as $item) {
                array_push($pt, $item->pt_12);
                array_push($timing, $item->timing);
            }
        } elseif ($s_pt === 'pt_13') {
            foreach ($db_data as $item) {
                array_push($pt, $item->pt_13);
                array_push($timing, $item->timing);
            }
        } elseif ($s_pt === 'pt_14') {
            foreach ($db_data as $item) {
                array_push($pt, $item->pt_14);
                array_push($timing, $item->timing);
            }
        } elseif ($s_pt === 'pt_15') {
            foreach ($db_data as $item) {
                array_push($pt, $item->pt_15);
                array_push($timing, $item->timing);
            }
        } elseif ($s_pt === 'pt_16') {
            foreach ($db_data as $item) {
                array_push($pt, $item->pt_16);
                array_push($timing, $item->timing);
            }
        } elseif ($s_pt === 'pt_17') {
            foreach ($db_data as $item) {
                array_push($pt, $item->pt_17);
                array_push($timing, $item->timing);
            }
        } elseif ($s_pt === 'pt_18') {
            foreach ($db_data as $item) {
                array_push($pt, $item->pt_18);
                array_push($timing, $item->timing);
            }
        } elseif ($s_pt === 'pt_19') {
            foreach ($db_data as $item) {
                array_push($pt, $item->pt_19);
                array_push($timing, $item->timing);
            }
        } elseif ($s_pt === 'pt_20') {
            foreach ($db_data as $item) {
                array_push($pt, $item->pt_20);
                array_push($timing, $item->timing);
            }
        } elseif ($s_pt === 'pt_21') {
            foreach ($db_data as $item) {
                array_push($pt, $item->pt_21);
                array_push($timing, $item->timing);
            }
        } elseif ($s_pt === 'pt_22') {
            foreach ($db_data as $item) {
                array_push($pt, $item->pt_22);
                array_push($timing, $item->timing);
            }
        } elseif ($s_pt === 'pt_23') {
            foreach ($db_data as $item) {
                array_push($pt, $item->pt_23);
                array_push($timing, $item->timing);
            }
        } elseif ($s_pt === 'pt_24') {
            foreach ($db_data as $item) {
                array_push($pt, $item->pt_24);
                array_push($timing, $item->timing);
            }
        } elseif ($s_pt === 'pt_25') {
            foreach ($db_data as $item) {
                array_push($pt, $item->pt_25);
                array_push($timing, $item->timing);
            }
        } elseif ($s_pt === 'pt_26') {
            foreach ($db_data as $item) {
                array_push($pt, $item->pt_26);
                array_push($timing, $item->timing);
            }
        } elseif ($s_pt === 'pt_27') {
            foreach ($db_data as $item) {
                array_push($pt, $item->pt_27);
                array_push($timing, $item->timing);
            }
        }

        $response = [
            'pt' => $pt,
            'timing' => $timing,
            'status_code' => 200
        ];
        return response()->json($response);
    }

    public function MultiGraph(Request $req)
    {
        // For Level
        $val_1 = '';
        $val_2 = '';
        $val_3 = '';
        $val_4 = '';
        $val_5 = '';
        $val_6 = '';
        $val_7  = '';
        $val_8  = '';
        $val_9  = '';
        $val_10 = '';
        $val_11 = '';
        $val_12 = '';
        $val_13 = '';
        $val_14 = '';
        $val_15 = '';
        $val_16 = '';
        $timing = [];

        $value_1 = [];
        $value_2 = [];
        $value_3 = [];
        $value_4 = [];
        $value_5 = [];
        $value_6 = [];
        $value_7  = [];
        $value_8  = [];
        $value_9  = [];
        $value_10 = [];
        $value_11 = [];
        $value_12 = [];
        $value_13 = [];
        $value_14 = [];
        $value_15 = [];
        $value_16 = [];

        $db_data_1 = [];
        $db_data_2 = [];
        $db_data_3 = [];
        $db_data_4 = [];
        $db_data_5 = [];
        $db_data_6 = [];
        $db_data_7  = [];
        $db_data_8  = [];
        $db_data_9  = [];
        $db_data_10 = [];
        $db_data_11 = [];
        $db_data_12 = [];
        $db_data_13 = [];
        $db_data_14 = [];
        $db_data_15 = [];
        $db_data_16 = [];
        $timing = [];

        $flow_db_data_1 = [];
        $flow_db_data_2 = [];
        $flow_db_data_3 = [];
        $flow_db_data_4 = [];
        $flow_db_data_5 = [];
        $flow_db_data_6 = [];
        $flow_db_data_7 = [];
        $flow_db_data_8 = [];
        $flow_db_data_9 = [];
        $flow_db_data_10 = [];
        $flow_db_data_11 = [];
        $flow_db_data_12 = [];
        $flow_db_data_13 = [];
        $flow_db_data_14 = [];
        $flow_db_data_15 = [];
        $flow_db_data_16 = [];

       
        $rdl25_mass = [];
        // For Volume
        $volume_1 = '';
        $volume_2 = '';
        $volume_3 = '';
        $volume_4 = '';
        $volume_5 = '';
        $volume_6 = '';
        $volume_7  = '';
        $volume_8  = '';
        $volume_9  = '';
        $volume_10 = '';
        $volume_11 = '';
        $volume_12 = '';
        $volume_13 = '';
        $volume_14 = '';
        $volume_15 = '';
        $volume_16 = '';
        $Volume_timing = [];

        $vol_data_1 = [];
        $vol_data_2 = [];
        $vol_data_3 = [];
        $vol_data_4 = [];
        $vol_data_5 = [];
        $vol_data_6 = [];
        $vol_data_7  = [];
        $vol_data_8  = [];
        $vol_data_9  = [];
        $vol_data_10 = [];
        $vol_data_11 = [];
        $vol_data_12 = [];
        $vol_data_13 = [];
        $vol_data_14 = [];
        $vol_data_15 = [];
        $vol_data_16 = [];

        $vol_value_1 = [];
        $vol_value_2 = [];
        $vol_value_3 = [];
        $vol_value_4 = [];
        $vol_value_5 = [];
        $vol_value_6 = [];
        $vol_value_7  = [];
        $vol_value_8  = [];
        $vol_value_9  = [];
        $vol_value_10 = [];
        $vol_value_11 = [];
        $vol_value_12 = [];
        $vol_value_13 = [];
        $vol_value_14 = [];
        $vol_value_15 = [];
        $vol_value_16 = [];
        // For Temperature
        $tmp_val_1 = '';
        $tmp_val_2 = '';
        $tmp_val_3 = '';
        $tmp_val_4 = '';
        $tmp_val_5 = '';
        $tmp_val_6 = '';
        $tmp_val_7  = '';
        $tmp_val_8  = '';
        $tmp_val_9  = '';
        $tmp_val_10 = '';
        $tmp_val_11 = '';
        $tmp_val_12 = '';
        $tmp_val_13 = '';
        $tmp_val_14 = '';
        $tmp_val_15 = '';
        $tmp_val_16 = '';
        $tmp_timing = [];

        $tmp_value_1 = [];
        $tmp_value_2 = [];
        $tmp_value_3 = [];
        $tmp_value_4 = [];
        $tmp_value_5 = [];
        $tmp_value_6 = [];
        $tmp_value_7  = [];
        $tmp_value_8  = [];
        $tmp_value_9  = [];
        $tmp_value_10 = [];
        $tmp_value_11 = [];
        $tmp_value_12 = [];
        $tmp_value_13 = [];
        $tmp_value_14 = [];
        $tmp_value_15 = [];
        $tmp_value_16 = [];

        $tmp_db_data_1 = [];
        $tmp_db_data_2 = [];
        $tmp_db_data_3 = [];
        $tmp_db_data_4 = [];
        $tmp_db_data_5 = [];
        $tmp_db_data_6 = [];
        $tmp_db_data_7  = [];
        $tmp_db_data_8  = [];
        $tmp_db_data_9  = [];
        $tmp_db_data_10 = [];
        $tmp_db_data_11 = [];
        $tmp_db_data_12 = [];
        $tmp_db_data_13 = [];
        $tmp_db_data_14 = [];
        $tmp_db_data_15 = [];
        $tmp_db_data_16 = [];
        // For Flow
        $flow_val_1 = '';
        $flow_val_2 = '';
        $flow_val_3 = '';
        $flow_val_4 = '';
        $flow_val_5 = '';
        $flow_val_6 = '';
        $flow_val_7  = '';
        $flow_val_8  = '';
        $flow_val_9  = '';
        $flow_val_10 = '';
        $flow_val_11 = '';
        $flow_val_12 = '';
        $flow_val_13 = '';
        $flow_val_14 = '';
        $flow_val_15 = '';
        $flow_val_16 = '';
        $flow_timing = [];

        $flow_value_1 = [];
        $flow_value_2 = [];
        $flow_value_3 = [];
        $flow_value_4 = [];
        $flow_value_5 = [];
        $flow_value_6 = [];
        $flow_value_7  = [];
        $flow_value_8  = [];
        $flow_value_9  = [];
        $flow_value_10 = [];
        $flow_value_11 = [];
        $flow_value_12 = [];
        $flow_value_13 = [];
        $flow_value_14 = [];
        $flow_value_15 = [];
        $flow_value_16 = [];

        // For Flow Total
        $ft_val_1 = '';
        $ft_val_2 = '';
        $ft_val_3 = '';
        $ft_val_4 = '';
        $ft_val_5 = '';
        $ft_val_6 = '';
        $ft_val_7  = '';
        $ft_val_8  = '';
        $ft_val_9  = '';
        $ft_val_10 = '';
        $ft_val_11 = '';
        $ft_val_12 = '';
        $ft_val_13 = '';
        $ft_val_14 = '';
        $ft_val_15 = '';
        $ft_val_16 = '';
        $ft_timing = [];

        $ft_value_1 = [];
        $ft_value_2 = [];
        $ft_value_3 = [];
        $ft_value_4 = [];
        $ft_value_5 = [];
        $ft_value_6 = [];
        $ft_value_7  = [];
        $ft_value_8  = [];
        $ft_value_9  = [];
        $ft_value_10 = [];
        $ft_value_11 = [];
        $ft_value_12 = [];
        $ft_value_13 = [];
        $ft_value_14 = [];
        $ft_value_15 = [];
        $ft_value_16 = [];

        $ft_db_data_1 = [];
        $ft_db_data_2 = [];
        $ft_db_data_3 = [];
        $ft_db_data_4 = [];
        $ft_db_data_5 = [];
        $ft_db_data_6 = [];
        $ft_db_data_7  = [];
        $ft_db_data_8  = [];
        $ft_db_data_9  = [];
        $ft_db_data_10 = [];
        $ft_db_data_11 = [];
        $ft_db_data_12 = [];
        $ft_db_data_13 = [];
        $ft_db_data_14 = [];
        $ft_db_data_15 = [];
        $ft_db_data_16 = [];
        // For Rdl25 Mass
        $db_rdl25_mass = [];
        $db_time_mass = [];
        $mass_value = [];
        // 
        // For PT
        $pt_val_1 = '';
        $pt_val_2 = '';
        $pt_val_3 = '';
        $pt_val_4 = '';
        $pt_val_5 = '';
        $pt_val_6 = '';
        $pt_val_7 = '';
        $pt_timing = [];

        $pt_value_1 = [];
        $pt_value_2 = [];
        $pt_value_3 = [];
        $pt_value_4 = [];
        $pt_value_5 = [];
        $pt_value_6 = [];
        $pt_value_7 = [];

        $pt_db_data_1 = [];
        $pt_db_data_2 = [];
        $pt_db_data_3 = [];
        $pt_db_data_4 = [];
        $pt_db_data_5 = [];
        $pt_db_data_6 = [];
        $pt_db_data_7 = [];
        // 
        $interval = $req->all()[1];
        $timeCondition = $req->all()[2];
        $startdata = $req->all()[3];
        $enddata = $req->all()[4];
        $date1 = strtotime($startdata);
        $date2 = strtotime($enddata);
        $new_date1 = date('Y-m-d H:i:s', $date1);
        $new_date2 = date('Y-m-d H:i:s', $date2);
        // For Rdl Mass
            if (sizeof($req->all()[8]) == 1) {
                $rdl25_mass = $req->all()[8][0];
            }
        //
        // For PT
        if (sizeof($req->all()[9]) == 1) {
            $pt_val_1 = $req->all()[9][0];
        }
        if (sizeof($req->all()[9]) == 2) {
            $pt_val_1 = $req->all()[9][0];
            $pt_val_2 = $req->all()[9][1];
        }
        if (sizeof($req->all()[9]) == 3) {
            $pt_val_1 = $req->all()[9][0];
            $pt_val_2 = $req->all()[9][1];
            $pt_val_3 = $req->all()[9][2];
        }
        if (sizeof($req->all()[9]) == 4) {
            $pt_val_1 = $req->all()[9][0];
            $pt_val_2 = $req->all()[9][1];
            $pt_val_3 = $req->all()[9][2];
            $pt_val_4 = $req->all()[9][3];
        }
        if (sizeof($req->all()[9]) == 5) {
            $pt_val_1 = $req->all()[9][0];
            $pt_val_2 = $req->all()[9][1];
            $pt_val_3 = $req->all()[9][2];
            $pt_val_4 = $req->all()[9][3];
            $pt_val_5 = $req->all()[9][4];
        }
        if (sizeof($req->all()[9]) == 6) {
            $pt_val_1 = $req->all()[9][0];
            $pt_val_2 = $req->all()[9][1];
            $pt_val_3 = $req->all()[9][2];
            $pt_val_4 = $req->all()[9][3];
            $pt_val_5 = $req->all()[9][4];
            $pt_val_6 = $req->all()[9][5];
        }
        if (sizeof($req->all()[9]) == 7) {
            $pt_val_1 = $req->all()[9][0];
            $pt_val_2 = $req->all()[9][1];
            $pt_val_3 = $req->all()[9][2];
            $pt_val_4 = $req->all()[9][3];
            $pt_val_5 = $req->all()[9][4];
            $pt_val_6 = $req->all()[9][5];
            $pt_val_7 = $req->all()[9][6];
        }
        
        //  
        if (sizeof($req->all()[0]) == 1) {
            $val_1 = $req->all()[0][0];
        }
        if (sizeof($req->all()[0]) == 2) {
            $val_1 = $req->all()[0][0];
            $val_2 = $req->all()[0][1];
        }
        if (sizeof($req->all()[0]) == 3) {
            $val_1 = $req->all()[0][0];
            $val_2 = $req->all()[0][1];
            $val_3 = $req->all()[0][2];
        }
        if (sizeof($req->all()[0]) == 4) {
            $val_1 = $req->all()[0][0];
            $val_2 = $req->all()[0][1];
            $val_3 = $req->all()[0][2];
            $val_4 = $req->all()[0][3];
        }
        if (sizeof($req->all()[0]) == 5) {
            $val_1 = $req->all()[0][0];
            $val_2 = $req->all()[0][1];
            $val_3 = $req->all()[0][2];
            $val_4 = $req->all()[0][3];
            $val_5 = $req->all()[0][4];
        }
        if (sizeof($req->all()[0]) == 6) {
            $val_1 = $req->all()[0][0];
            $val_2 = $req->all()[0][1];
            $val_3 = $req->all()[0][2];
            $val_4 = $req->all()[0][3];
            $val_5 = $req->all()[0][4];
            $val_6 = $req->all()[0][5];
        }
        if (sizeof($req->all()[0]) == 7) {
            $val_1 = $req->all()[0][0];
            $val_2 = $req->all()[0][1];
            $val_3 = $req->all()[0][2];
            $val_4 = $req->all()[0][3];
            $val_5 = $req->all()[0][4];
            $val_6 = $req->all()[0][5];
            $val_7 = $req->all()[0][6];
        }
        if (sizeof($req->all()[0]) == 8) {
            $val_1 = $req->all()[0][0];
            $val_2 = $req->all()[0][1];
            $val_3 = $req->all()[0][2];
            $val_4 = $req->all()[0][3];
            $val_5 = $req->all()[0][4];
            $val_6 = $req->all()[0][5];
            $val_7 = $req->all()[0][6];
            $val_8 = $req->all()[0][7];
        }
        if (sizeof($req->all()[0]) == 9) {
            $val_1 = $req->all()[0][0];
            $val_2 = $req->all()[0][1];
            $val_3 = $req->all()[0][2];
            $val_4 = $req->all()[0][3];
            $val_5 = $req->all()[0][4];
            $val_6 = $req->all()[0][5];
            $val_7 = $req->all()[0][6];
            $val_8 = $req->all()[0][7];
            $val_9 = $req->all()[0][8];
        }
        if (sizeof($req->all()[0]) == 10) {
            $val_1 = $req->all()[0][0];
            $val_2 = $req->all()[0][1];
            $val_3 = $req->all()[0][2];
            $val_4 = $req->all()[0][3];
            $val_5 = $req->all()[0][4];
            $val_6 = $req->all()[0][5];
            $val_7 = $req->all()[0][6];
            $val_8 = $req->all()[0][7];
            $val_9 = $req->all()[0][8];
            $val_10 = $req->all()[0][9];
        }
        if (sizeof($req->all()[0]) == 11) {
            $val_1 = $req->all()[0][0];
            $val_2 = $req->all()[0][1];
            $val_3 = $req->all()[0][2];
            $val_4 = $req->all()[0][3];
            $val_5 = $req->all()[0][4];
            $val_6 = $req->all()[0][5];
            $val_7 = $req->all()[0][6];
            $val_8 = $req->all()[0][7];
            $val_9 = $req->all()[0][8];
            $val_10 = $req->all()[0][9];
            $val_11 = $req->all()[0][10];
        }
        if (sizeof($req->all()[0]) == 12) {
            $val_1 = $req->all()[0][0];
            $val_2 = $req->all()[0][1];
            $val_3 = $req->all()[0][2];
            $val_4 = $req->all()[0][3];
            $val_5 = $req->all()[0][4];
            $val_6 = $req->all()[0][5];
            $val_7 = $req->all()[0][6];
            $val_8 = $req->all()[0][7];
            $val_9 = $req->all()[0][8];
            $val_10 = $req->all()[0][9];
            $val_11 = $req->all()[0][10];
            $val_12 = $req->all()[0][11];
        }
        if (sizeof($req->all()[0]) == 13) {
            $val_1 = $req->all()[0][0];
            $val_2 = $req->all()[0][1];
            $val_3 = $req->all()[0][2];
            $val_4 = $req->all()[0][3];
            $val_5 = $req->all()[0][4];
            $val_6 = $req->all()[0][5];
            $val_7 = $req->all()[0][6];
            $val_8 = $req->all()[0][7];
            $val_9 = $req->all()[0][8];
            $val_10 = $req->all()[0][9];
            $val_11 = $req->all()[0][10];
            $val_12 = $req->all()[0][11];
            $val_13 = $req->all()[0][12];
        }
        if (sizeof($req->all()[0]) == 14) {
            $val_1 = $req->all()[0][0];
            $val_2 = $req->all()[0][1];
            $val_3 = $req->all()[0][2];
            $val_4 = $req->all()[0][3];
            $val_5 = $req->all()[0][4];
            $val_6 = $req->all()[0][5];
            $val_7 = $req->all()[0][6];
            $val_8 = $req->all()[0][7];
            $val_9 = $req->all()[0][8];
            $val_10 = $req->all()[0][9];
            $val_11 = $req->all()[0][10];
            $val_12 = $req->all()[0][11];
            $val_13 = $req->all()[0][12];
            $val_14 = $req->all()[0][13];
        }
        if (sizeof($req->all()[0]) == 15) {
            $val_1 = $req->all()[0][0];
            $val_2 = $req->all()[0][1];
            $val_3 = $req->all()[0][2];
            $val_4 = $req->all()[0][3];
            $val_5 = $req->all()[0][4];
            $val_6 = $req->all()[0][5];
            $val_7 = $req->all()[0][6];
            $val_8 = $req->all()[0][7];
            $val_9 = $req->all()[0][8];
            $val_10 = $req->all()[0][9];
            $val_11 = $req->all()[0][10];
            $val_12 = $req->all()[0][11];
            $val_13 = $req->all()[0][12];
            $val_14 = $req->all()[0][13];
            $val_15 = $req->all()[0][14];
        }
        if (sizeof($req->all()[0]) == 16) {
            $val_1 = $req->all()[0][0];
            $val_2 = $req->all()[0][1];
            $val_3 = $req->all()[0][2];
            $val_4 = $req->all()[0][3];
            $val_5 = $req->all()[0][4];
            $val_6 = $req->all()[0][5];
            $val_7 = $req->all()[0][6];
            $val_8 = $req->all()[0][7];
            $val_9 = $req->all()[0][8];
            $val_10 = $req->all()[0][9];
            $val_11 = $req->all()[0][10];
            $val_12 = $req->all()[0][11];
            $val_13 = $req->all()[0][12];
            $val_14 = $req->all()[0][13];
            $val_15 = $req->all()[0][14];
            $val_16 = $req->all()[0][15];
        }
        // For Tempareture
        if (sizeof($req->all()[5]) == 1) {
            $tmp_val_1 = $req->all()[5][0];
        }
        if (sizeof($req->all()[5]) == 2) {
            $tmp_val_1 = $req->all()[5][0];
            $tmp_val_2 = $req->all()[5][1];
        }
        if (sizeof($req->all()[5]) == 3) {
            $tmp_val_1 = $req->all()[5][0];
            $tmp_val_2 = $req->all()[5][1];
            $tmp_val_3 = $req->all()[5][2];
        }
        if (sizeof($req->all()[5]) == 4) {
            $tmp_val_1 = $req->all()[5][0];
            $tmp_val_2 = $req->all()[5][1];
            $tmp_val_3 = $req->all()[5][2];
            $tmp_val_4 = $req->all()[5][3];
        }
        if (sizeof($req->all()[5]) == 5) {
            $tmp_val_1 = $req->all()[5][0];
            $tmp_val_2 = $req->all()[5][1];
            $tmp_val_3 = $req->all()[5][2];
            $tmp_val_4 = $req->all()[5][3];
            $tmp_val_5 = $req->all()[5][4];
        }
        if (sizeof($req->all()[5]) == 6) {
            $tmp_val_1 = $req->all()[5][0];
            $tmp_val_2 = $req->all()[5][1];
            $tmp_val_3 = $req->all()[5][2];
            $tmp_val_4 = $req->all()[5][3];
            $tmp_val_5 = $req->all()[5][4];
            $tmp_val_6 = $req->all()[5][5];
        }
        if (sizeof($req->all()[5]) == 7) {
            $tmp_val_1 = $req->all()[5][0];
            $tmp_val_2 = $req->all()[5][1];
            $tmp_val_3 = $req->all()[5][2];
            $tmp_val_4 = $req->all()[5][3];
            $tmp_val_5 = $req->all()[5][4];
            $tmp_val_6 = $req->all()[5][5];
            $tmp_val_7 = $req->all()[5][6];
        }
        if (sizeof($req->all()[5]) == 8) {
            $tmp_val_1 = $req->all()[5][0];
            $tmp_val_2 = $req->all()[5][1];
            $tmp_val_3 = $req->all()[5][2];
            $tmp_val_4 = $req->all()[5][3];
            $tmp_val_5 = $req->all()[5][4];
            $tmp_val_6 = $req->all()[5][5];
            $tmp_val_7 = $req->all()[5][6];
            $tmp_val_8 = $req->all()[5][7];
        }
        if (sizeof($req->all()[5]) == 9) {
            $tmp_val_1 = $req->all()[5][0];
            $tmp_val_2 = $req->all()[5][1];
            $tmp_val_3 = $req->all()[5][2];
            $tmp_val_4 = $req->all()[5][3];
            $tmp_val_5 = $req->all()[5][4];
            $tmp_val_6 = $req->all()[5][5];
            $tmp_val_7 = $req->all()[5][6];
            $tmp_val_8 = $req->all()[5][7];
            $tmp_val_9 = $req->all()[5][8];
        }
        if (sizeof($req->all()[5]) == 10) {
            $tmp_val_1 = $req->all()[5][0];
            $tmp_val_2 = $req->all()[5][1];
            $tmp_val_3 = $req->all()[5][2];
            $tmp_val_4 = $req->all()[5][3];
            $tmp_val_5 = $req->all()[5][4];
            $tmp_val_6 = $req->all()[5][5];
            $tmp_val_7 = $req->all()[5][6];
            $tmp_val_8 = $req->all()[5][7];
            $tmp_val_9 = $req->all()[5][8];
            $tmp_val_10 = $req->all()[5][9];
        }
        if (sizeof($req->all()[5]) == 11) {
            $tmp_val_1 = $req->all()[5][0];
            $tmp_val_2 = $req->all()[5][1];
            $tmp_val_3 = $req->all()[5][2];
            $tmp_val_4 = $req->all()[5][3];
            $tmp_val_5 = $req->all()[5][4];
            $tmp_val_6 = $req->all()[5][5];
            $tmp_val_7 = $req->all()[5][6];
            $tmp_val_8 = $req->all()[5][7];
            $tmp_val_9 = $req->all()[5][8];
            $tmp_val_10 = $req->all()[5][9];
            $tmp_val_11 = $req->all()[5][10];
        }
        if (sizeof($req->all()[5]) == 12) {
            $tmp_val_1 = $req->all()[5][0];
            $tmp_val_2 = $req->all()[5][1];
            $tmp_val_3 = $req->all()[5][2];
            $tmp_val_4 = $req->all()[5][3];
            $tmp_val_5 = $req->all()[5][4];
            $tmp_val_6 = $req->all()[5][5];
            $tmp_val_7 = $req->all()[5][6];
            $tmp_val_8 = $req->all()[5][7];
            $tmp_val_9 = $req->all()[5][8];
            $tmp_val_10 = $req->all()[5][9];
            $tmp_val_11 = $req->all()[5][10];
            $tmp_val_12 = $req->all()[5][11];
        }
        if (sizeof($req->all()[5]) == 13) {
            $tmp_val_1 = $req->all()[5][0];
            $tmp_val_2 = $req->all()[5][1];
            $tmp_val_3 = $req->all()[5][2];
            $tmp_val_4 = $req->all()[5][3];
            $tmp_val_5 = $req->all()[5][4];
            $tmp_val_6 = $req->all()[5][5];
            $tmp_val_7 = $req->all()[5][6];
            $tmp_val_8 = $req->all()[5][7];
            $tmp_val_9 = $req->all()[5][8];
            $tmp_val_10 = $req->all()[5][9];
            $tmp_val_11 = $req->all()[5][10];
            $tmp_val_12 = $req->all()[5][11];
            $tmp_val_13 = $req->all()[5][12];
        }
        if (sizeof($req->all()[5]) == 14) {
            $tmp_val_1 = $req->all()[5][0];
            $tmp_val_2 = $req->all()[5][1];
            $tmp_val_3 = $req->all()[5][2];
            $tmp_val_4 = $req->all()[5][3];
            $tmp_val_5 = $req->all()[5][4];
            $tmp_val_6 = $req->all()[5][5];
            $tmp_val_7 = $req->all()[5][6];
            $tmp_val_8 = $req->all()[5][7];
            $tmp_val_9 = $req->all()[5][8];
            $tmp_val_10 = $req->all()[5][9];
            $tmp_val_11 = $req->all()[5][10];
            $tmp_val_12 = $req->all()[5][11];
            $tmp_val_13 = $req->all()[5][12];
            $tmp_val_14 = $req->all()[5][13];
        }
        if (sizeof($req->all()[5]) == 15) {
            $tmp_val_1 = $req->all()[5][0];
            $tmp_val_2 = $req->all()[5][1];
            $tmp_val_3 = $req->all()[5][2];
            $tmp_val_4 = $req->all()[5][3];
            $tmp_val_5 = $req->all()[5][4];
            $tmp_val_6 = $req->all()[5][5];
            $tmp_val_7 = $req->all()[5][6];
            $tmp_val_8 = $req->all()[5][7];
            $tmp_val_9 = $req->all()[5][8];
            $tmp_val_10 = $req->all()[5][9];
            $tmp_val_11 = $req->all()[5][10];
            $tmp_val_12 = $req->all()[5][11];
            $tmp_val_13 = $req->all()[5][12];
            $tmp_val_14 = $req->all()[5][13];
            $tmp_val_15 = $req->all()[5][14];
        }
        if (sizeof($req->all()[5]) == 16) {
            $tmp_val_1 = $req->all()[5][0];
            $tmp_val_2 = $req->all()[5][1];
            $tmp_val_3 = $req->all()[5][2];
            $tmp_val_4 = $req->all()[5][3];
            $tmp_val_5 = $req->all()[5][4];
            $tmp_val_6 = $req->all()[5][5];
            $tmp_val_7 = $req->all()[5][6];
            $tmp_val_8 = $req->all()[5][7];
            $tmp_val_9 = $req->all()[5][8];
            $tmp_val_10 = $req->all()[5][9];
            $tmp_val_11 = $req->all()[5][10];
            $tmp_val_12 = $req->all()[5][11];
            $tmp_val_13 = $req->all()[5][12];
            $tmp_val_14 = $req->all()[5][13];
            $tmp_val_15 = $req->all()[5][14];
            $tmp_val_16 = $req->all()[5][15];
        }
        if (sizeof($req->all()[6]) == 1) {
            $flow_val_1 = $req->all()[6][0];
        }
        if (sizeof($req->all()[6]) == 2) {
            $flow_val_1 = $req->all()[6][0];
            $flow_val_2 = $req->all()[6][1];
        }
        if (sizeof($req->all()[6]) == 3) {
            $flow_val_1 = $req->all()[6][0];
            $flow_val_2 = $req->all()[6][1];
            $flow_val_3 = $req->all()[6][2];
        }
        if (sizeof($req->all()[6]) == 4) {
            $flow_val_1 = $req->all()[6][0];
            $flow_val_2 = $req->all()[6][1];
            $flow_val_3 = $req->all()[6][2];
            $flow_val_4 = $req->all()[6][3];
        }
        if (sizeof($req->all()[6]) == 5) {
            $flow_val_1 = $req->all()[6][0];
            $flow_val_2 = $req->all()[6][1];
            $flow_val_3 = $req->all()[6][2];
            $flow_val_4 = $req->all()[6][3];
            $flow_val_5 = $req->all()[6][4];
        }
        if (sizeof($req->all()[6]) == 6) {
            $flow_val_1 = $req->all()[6][0];
            $flow_val_2 = $req->all()[6][1];
            $flow_val_3 = $req->all()[6][2];
            $flow_val_4 = $req->all()[6][3];
            $flow_val_5 = $req->all()[6][4];
            $flow_val_6 = $req->all()[6][5];
        }
        if (sizeof($req->all()[6]) == 7) {
            $flow_val_1 = $req->all()[6][0];
            $flow_val_2 = $req->all()[6][1];
            $flow_val_3 = $req->all()[6][2];
            $flow_val_4 = $req->all()[6][3];
            $flow_val_5 = $req->all()[6][4];
            $flow_val_6 = $req->all()[6][5];
            $flow_val_7 = $req->all()[6][6];
        }
        if (sizeof($req->all()[6]) == 8) {
            $flow_val_1 = $req->all()[6][0];
            $flow_val_2 = $req->all()[6][1];
            $flow_val_3 = $req->all()[6][2];
            $flow_val_4 = $req->all()[6][3];
            $flow_val_5 = $req->all()[6][4];
            $flow_val_6 = $req->all()[6][5];
            $flow_val_7 = $req->all()[6][6];
            $flow_val_8 = $req->all()[6][7];
        }
        if (sizeof($req->all()[6]) == 9) {
            $flow_val_1 = $req->all()[6][0];
            $flow_val_2 = $req->all()[6][1];
            $flow_val_3 = $req->all()[6][2];
            $flow_val_4 = $req->all()[6][3];
            $flow_val_5 = $req->all()[6][4];
            $flow_val_6 = $req->all()[6][5];
            $flow_val_7 = $req->all()[6][6];
            $flow_val_8 = $req->all()[6][7];
            $flow_val_9 = $req->all()[6][8];
        }
        if (sizeof($req->all()[6]) == 10) {
            $flow_val_1 = $req->all()[6][0];
            $flow_val_2 = $req->all()[6][1];
            $flow_val_3 = $req->all()[6][2];
            $flow_val_4 = $req->all()[6][3];
            $flow_val_5 = $req->all()[6][4];
            $flow_val_6 = $req->all()[6][5];
            $flow_val_7 = $req->all()[6][6];
            $flow_val_8 = $req->all()[6][7];
            $flow_val_9 = $req->all()[6][8];
            $flow_val_10 = $req->all()[6][9];
        }
        if (sizeof($req->all()[6]) == 11) {
            $flow_val_1 = $req->all()[6][0];
            $flow_val_2 = $req->all()[6][1];
            $flow_val_3 = $req->all()[6][2];
            $flow_val_4 = $req->all()[6][3];
            $flow_val_5 = $req->all()[6][4];
            $flow_val_6 = $req->all()[6][5];
            $flow_val_7 = $req->all()[6][6];
            $flow_val_8 = $req->all()[6][7];
            $flow_val_9 = $req->all()[6][8];
            $flow_val_10 = $req->all()[6][9];
            $flow_val_11 = $req->all()[6][10];
        }
        if (sizeof($req->all()[6]) == 12) {
            $flow_val_1 = $req->all()[6][0];
            $flow_val_2 = $req->all()[6][1];
            $flow_val_3 = $req->all()[6][2];
            $flow_val_4 = $req->all()[6][3];
            $flow_val_5 = $req->all()[6][4];
            $flow_val_6 = $req->all()[6][5];
            $flow_val_7 = $req->all()[6][6];
            $flow_val_8 = $req->all()[6][7];
            $flow_val_9 = $req->all()[6][8];
            $flow_val_10 = $req->all()[6][9];
            $flow_val_11 = $req->all()[6][10];
            $flow_val_12 = $req->all()[6][11];
        }
        if (sizeof($req->all()[6]) == 13) {
            $flow_val_1 = $req->all()[6][0];
            $flow_val_2 = $req->all()[6][1];
            $flow_val_3 = $req->all()[6][2];
            $flow_val_4 = $req->all()[6][3];
            $flow_val_5 = $req->all()[6][4];
            $flow_val_6 = $req->all()[6][5];
            $flow_val_7 = $req->all()[6][6];
            $flow_val_8 = $req->all()[6][7];
            $flow_val_9 = $req->all()[6][8];
            $flow_val_10 = $req->all()[6][9];
            $flow_val_11 = $req->all()[6][10];
            $flow_val_12 = $req->all()[6][11];
            $flow_val_13 = $req->all()[6][12];
        }
        if (sizeof($req->all()[6]) == 14) {
            $flow_val_1 = $req->all()[6][0];
            $flow_val_2 = $req->all()[6][1];
            $flow_val_3 = $req->all()[6][2];
            $flow_val_4 = $req->all()[6][3];
            $flow_val_5 = $req->all()[6][4];
            $flow_val_6 = $req->all()[6][5];
            $flow_val_7 = $req->all()[6][6];
            $flow_val_8 = $req->all()[6][7];
            $flow_val_9 = $req->all()[6][8];
            $flow_val_10 = $req->all()[6][9];
            $flow_val_11 = $req->all()[6][10];
            $flow_val_12 = $req->all()[6][11];
            $flow_val_13 = $req->all()[6][12];
            $flow_val_14 = $req->all()[6][13];
        }
        if (sizeof($req->all()[6]) == 15) {
            $flow_val_1 = $req->all()[6][0];
            $flow_val_2 = $req->all()[6][1];
            $flow_val_3 = $req->all()[6][2];
            $flow_val_4 = $req->all()[6][3];
            $flow_val_5 = $req->all()[6][4];
            $flow_val_6 = $req->all()[6][5];
            $flow_val_7 = $req->all()[6][6];
            $flow_val_8 = $req->all()[6][7];
            $flow_val_9 = $req->all()[6][8];
            $flow_val_10 = $req->all()[6][9];
            $flow_val_11 = $req->all()[6][10];
            $flow_val_12 = $req->all()[6][11];
            $flow_val_13 = $req->all()[6][12];
            $flow_val_14 = $req->all()[6][13];
            $flow_val_15 = $req->all()[6][14];
        }
        if (sizeof($req->all()[6]) == 16) {
            $flow_val_1 = $req->all()[6][0];
            $flow_val_2 = $req->all()[6][1];
            $flow_val_3 = $req->all()[6][2];
            $flow_val_4 = $req->all()[6][3];
            $flow_val_5 = $req->all()[6][4];
            $flow_val_6 = $req->all()[6][5];
            $flow_val_7 = $req->all()[6][6];
            $flow_val_8 = $req->all()[6][7];
            $flow_val_9 = $req->all()[6][8];
            $flow_val_10 = $req->all()[6][9];
            $flow_val_11 = $req->all()[6][10];
            $flow_val_12 = $req->all()[6][11];
            $flow_val_13 = $req->all()[6][12];
            $flow_val_14 = $req->all()[6][13];
            $flow_val_15 = $req->all()[6][14];
            $flow_val_16 = $req->all()[6][15];
        }
        // For Flow Total
        if (sizeof($req->all()[7]) == 1) {
            $ft_val_1 = $req->all()[7][0];
        }
        if (sizeof($req->all()[7]) == 2) {
            $ft_val_1 = $req->all()[7][0];
            $ft_val_2 = $req->all()[7][1];
        }
        if (sizeof($req->all()[7]) == 3) {
            $ft_val_1 = $req->all()[7][0];
            $ft_val_2 = $req->all()[7][1];
            $ft_val_3 = $req->all()[7][2];
        }
        if (sizeof($req->all()[7]) == 4) {
            $ft_val_1 = $req->all()[7][0];
            $ft_val_2 = $req->all()[7][1];
            $ft_val_3 = $req->all()[7][2];
            $ft_val_4 = $req->all()[7][3];
        }
        if (sizeof($req->all()[7]) == 5) {
            $ft_val_1 = $req->all()[7][0];
            $ft_val_2 = $req->all()[7][1];
            $ft_val_3 = $req->all()[7][2];
            $ft_val_4 = $req->all()[7][3];
            $ft_val_5 = $req->all()[7][4];
        }
        if (sizeof($req->all()[7]) == 6) {
            $ft_val_1 = $req->all()[7][0];
            $ft_val_2 = $req->all()[7][1];
            $ft_val_3 = $req->all()[7][2];
            $ft_val_4 = $req->all()[7][3];
            $ft_val_5 = $req->all()[7][4];
            $ft_val_6 = $req->all()[7][5];
        }
        if (sizeof($req->all()[7]) == 7) {
            $ft_val_1 = $req->all()[7][0];
            $ft_val_2 = $req->all()[7][1];
            $ft_val_3 = $req->all()[7][2];
            $ft_val_4 = $req->all()[7][3];
            $ft_val_5 = $req->all()[7][4];
            $ft_val_6 = $req->all()[7][5];
            $ft_val_7 = $req->all()[7][6];
        }
        if (sizeof($req->all()[7]) == 8) {
            $ft_val_1 = $req->all()[7][0];
            $ft_val_2 = $req->all()[7][1];
            $ft_val_3 = $req->all()[7][2];
            $ft_val_4 = $req->all()[7][3];
            $ft_val_5 = $req->all()[7][4];
            $ft_val_6 = $req->all()[7][5];
            $ft_val_7 = $req->all()[7][6];
            $ft_val_8 = $req->all()[7][7];
        }
        if (sizeof($req->all()[7]) == 9) {
            $ft_val_1 = $req->all()[7][0];
            $ft_val_2 = $req->all()[7][1];
            $ft_val_3 = $req->all()[7][2];
            $ft_val_4 = $req->all()[7][3];
            $ft_val_5 = $req->all()[7][4];
            $ft_val_6 = $req->all()[7][5];
            $ft_val_7 = $req->all()[7][6];
            $ft_val_8 = $req->all()[7][7];
            $ft_val_9 = $req->all()[7][8];
        }
        if (sizeof($req->all()[7]) == 10) {
            $ft_val_1 = $req->all()[7][0];
            $ft_val_2 = $req->all()[7][1];
            $ft_val_3 = $req->all()[7][2];
            $ft_val_4 = $req->all()[7][3];
            $ft_val_5 = $req->all()[7][4];
            $ft_val_6 = $req->all()[7][5];
            $ft_val_7 = $req->all()[7][6];
            $ft_val_8 = $req->all()[7][7];
            $ft_val_9 = $req->all()[7][8];
            $ft_val_10 = $req->all()[7][9];
        }
        if (sizeof($req->all()[7]) == 11) {
            $ft_val_1 = $req->all()[7][0];
            $ft_val_2 = $req->all()[7][1];
            $ft_val_3 = $req->all()[7][2];
            $ft_val_4 = $req->all()[7][3];
            $ft_val_5 = $req->all()[7][4];
            $ft_val_6 = $req->all()[7][5];
            $ft_val_7 = $req->all()[7][6];
            $ft_val_8 = $req->all()[7][7];
            $ft_val_9 = $req->all()[7][8];
            $ft_val_10 = $req->all()[7][9];
            $ft_val_11 = $req->all()[7][10];
        }
        if (sizeof($req->all()[7]) == 12) {
            $ft_val_1 = $req->all()[7][0];
            $ft_val_2 = $req->all()[7][1];
            $ft_val_3 = $req->all()[7][2];
            $ft_val_4 = $req->all()[7][3];
            $ft_val_5 = $req->all()[7][4];
            $ft_val_6 = $req->all()[7][5];
            $ft_val_7 = $req->all()[7][6];
            $ft_val_8 = $req->all()[7][7];
            $ft_val_9 = $req->all()[7][8];
            $ft_val_10 = $req->all()[7][9];
            $ft_val_11 = $req->all()[7][10];
            $ft_val_12 = $req->all()[7][11];
        }
        if (sizeof($req->all()[7]) == 13) {
            $ft_val_1 = $req->all()[7][0];
            $ft_val_2 = $req->all()[7][1];
            $ft_val_3 = $req->all()[7][2];
            $ft_val_4 = $req->all()[7][3];
            $ft_val_5 = $req->all()[7][4];
            $ft_val_6 = $req->all()[7][5];
            $ft_val_7 = $req->all()[7][6];
            $ft_val_8 = $req->all()[7][7];
            $ft_val_9 = $req->all()[7][8];
            $ft_val_10 = $req->all()[7][9];
            $ft_val_11 = $req->all()[7][10];
            $ft_val_12 = $req->all()[7][11];
            $ft_val_13 = $req->all()[7][12];
        }
        if (sizeof($req->all()[7]) == 14) {
            $ft_val_1 = $req->all()[7][0];
            $ft_val_2 = $req->all()[7][1];
            $ft_val_3 = $req->all()[7][2];
            $ft_val_4 = $req->all()[7][3];
            $ft_val_5 = $req->all()[7][4];
            $ft_val_6 = $req->all()[7][5];
            $ft_val_7 = $req->all()[7][6];
            $ft_val_8 = $req->all()[7][7];
            $ft_val_9 = $req->all()[7][8];
            $ft_val_10 = $req->all()[7][9];
            $ft_val_11 = $req->all()[7][10];
            $ft_val_12 = $req->all()[7][11];
            $ft_val_13 = $req->all()[7][12];
            $ft_val_14 = $req->all()[7][13];
        }
        if (sizeof($req->all()[7]) == 15) {
            $ft_val_1 = $req->all()[7][0];
            $ft_val_2 = $req->all()[7][1];
            $ft_val_3 = $req->all()[7][2];
            $ft_val_4 = $req->all()[7][3];
            $ft_val_5 = $req->all()[7][4];
            $ft_val_6 = $req->all()[7][5];
            $ft_val_7 = $req->all()[7][6];
            $ft_val_8 = $req->all()[7][7];
            $ft_val_9 = $req->all()[7][8];
            $ft_val_10 = $req->all()[7][9];
            $ft_val_11 = $req->all()[7][10];
            $ft_val_12 = $req->all()[7][11];
            $ft_val_13 = $req->all()[7][12];
            $ft_val_14 = $req->all()[7][13];
            $ft_val_15 = $req->all()[7][14];
        }
        if (sizeof($req->all()[7]) == 16) {
            $ft_val_1 = $req->all()[7][0];
            $ft_val_2 = $req->all()[7][1];
            $ft_val_3 = $req->all()[7][2];
            $ft_val_4 = $req->all()[7][3];
            $ft_val_5 = $req->all()[7][4];
            $ft_val_6 = $req->all()[7][5];
            $ft_val_7 = $req->all()[7][6];
            $ft_val_8 = $req->all()[7][7];
            $ft_val_9 = $req->all()[7][8];
            $ft_val_10 = $req->all()[7][9];
            $ft_val_11 = $req->all()[7][10];
            $ft_val_12 = $req->all()[7][11];
            $ft_val_13 = $req->all()[7][12];
            $ft_val_14 = $req->all()[7][13];
            $ft_val_15 = $req->all()[7][14];
            $ft_val_16 = $req->all()[7][15];
        }
        $array = $req->all()[0];
        $for_volume = str_replace('rdl', 'vr', $array);
        $for_volumes = str_replace('pit_level', 'pit_vol', $for_volume);
        // dd($for_volumes);

        // For Rdl 25 Volume
        $search = "vr_25";
        $replace = "rdl25_volume";
        array_walk($for_volumes,
            function (&$v) use ($search, $replace){
                $v = str_replace($search, $replace, $v);    
            }                                                                     
        );
        // dd($for_volumes);
        if (sizeof($for_volumes) >= 1) {
            if (sizeof($for_volumes) == 1) {
                $volume_1 = $for_volumes[0];
            }
            if (sizeof($for_volumes) == 2) {
                $volume_1 = $for_volumes[0];
                $volume_2 = $for_volumes[1];
            }
            if (sizeof($for_volumes) == 3) {
                $volume_1 = $for_volumes[0];
                $volume_2 = $for_volumes[1];
                $volume_3 = $for_volumes[2];
            }
            if (sizeof($for_volumes) == 4) {
                $volume_1 = $for_volumes[0];
                $volume_2 = $for_volumes[1];
                $volume_3 = $for_volumes[2];
                $volume_4 = $for_volumes[3];
            }
            if (sizeof($for_volumes) == 5) {
                $volume_1 = $for_volumes[0];
                $volume_2 = $for_volumes[1];
                $volume_3 = $for_volumes[2];
                $volume_4 = $for_volumes[3];
                $volume_5 = $for_volumes[4];
            }
            if (sizeof($for_volumes) == 6) {
                $volume_1 = $for_volumes[0];
                $volume_2 = $for_volumes[1];
                $volume_3 = $for_volumes[2];
                $volume_4 = $for_volumes[3];
                $volume_5 = $for_volumes[4];
                $volume_6 = $for_volumes[5];
            }
            if (sizeof($for_volumes) == 7) {
                $volume_1 = $for_volumes[0];
                $volume_2 = $for_volumes[1];
                $volume_3 = $for_volumes[2];
                $volume_4 = $for_volumes[3];
                $volume_5 = $for_volumes[4];
                $volume_6 = $for_volumes[5];
                $volume_7 = $for_volumes[6];
            }
            if (sizeof($for_volumes) == 8) {
                $volume_1 = $for_volumes[0];
                $volume_2 = $for_volumes[1];
                $volume_3 = $for_volumes[2];
                $volume_4 = $for_volumes[3];
                $volume_5 = $for_volumes[4];
                $volume_6 = $for_volumes[5];
                $volume_7 = $for_volumes[6];
                $volume_8 = $for_volumes[7];
            }
            if (sizeof($for_volumes) == 9) {
                $volume_1 = $for_volumes[0];
                $volume_2 = $for_volumes[1];
                $volume_3 = $for_volumes[2];
                $volume_4 = $for_volumes[3];
                $volume_5 = $for_volumes[4];
                $volume_6 = $for_volumes[5];
                $volume_7 = $for_volumes[6];
                $volume_8 = $for_volumes[7];
                $volume_9 = $for_volumes[8];
            }
            if (sizeof($for_volumes) == 10) {
                $volume_1 = $for_volumes[0];
                $volume_2 = $for_volumes[1];
                $volume_3 = $for_volumes[2];
                $volume_4 = $for_volumes[3];
                $volume_5 = $for_volumes[4];
                $volume_6 = $for_volumes[5];
                $volume_7 = $for_volumes[6];
                $volume_8 = $for_volumes[7];
                $volume_9 = $for_volumes[8];
                $volume_10 = $for_volumes[9];
            }
            if (sizeof($for_volumes) == 11) {
                $volume_1 = $for_volumes[0];
                $volume_2 = $for_volumes[1];
                $volume_3 = $for_volumes[2];
                $volume_4 = $for_volumes[3];
                $volume_5 = $for_volumes[4];
                $volume_6 = $for_volumes[5];
                $volume_7 = $for_volumes[6];
                $volume_8 = $for_volumes[7];
                $volume_9 = $for_volumes[8];
                $volume_10 = $for_volumes[9];
                $volume_11 = $for_volumes[10];
            }
            if (sizeof($for_volumes) == 12) {
                $volume_1 = $for_volumes[0];
                $volume_2 = $for_volumes[1];
                $volume_3 = $for_volumes[2];
                $volume_4 = $for_volumes[3];
                $volume_5 = $for_volumes[4];
                $volume_6 = $for_volumes[5];
                $volume_7 = $for_volumes[6];
                $volume_8 = $for_volumes[7];
                $volume_9 = $for_volumes[8];
                $volume_10 = $for_volumes[9];
                $volume_11 = $for_volumes[10];
                $volume_12 = $for_volumes[11];
            }
            if (sizeof($for_volumes) == 13) {
                $volume_1 = $for_volumes[0];
                $volume_2 = $for_volumes[1];
                $volume_3 = $for_volumes[2];
                $volume_4 = $for_volumes[3];
                $volume_5 = $for_volumes[4];
                $volume_6 = $for_volumes[5];
                $volume_7 = $for_volumes[6];
                $volume_8 = $for_volumes[7];
                $volume_9 = $for_volumes[8];
                $volume_10 = $for_volumes[9];
                $volume_11 = $for_volumes[10];
                $volume_12 = $for_volumes[11];
                $volume_13 = $for_volumes[12];
            }
            if (sizeof($for_volumes) == 14) {
                $volume_1 = $for_volumes[0];
                $volume_2 = $for_volumes[1];
                $volume_3 = $for_volumes[2];
                $volume_4 = $for_volumes[3];
                $volume_5 = $for_volumes[4];
                $volume_6 = $for_volumes[5];
                $volume_7 = $for_volumes[6];
                $volume_8 = $for_volumes[7];
                $volume_9 = $for_volumes[8];
                $volume_10 = $for_volumes[9];
                $volume_11 = $for_volumes[10];
                $volume_12 = $for_volumes[11];
                $volume_13 = $for_volumes[12];
                $volume_14 = $for_volumes[13];
            }
            if (sizeof($for_volumes) == 15) {
                $volume_1 = $for_volumes[0];
                $volume_2 = $for_volumes[1];
                $volume_3 = $for_volumes[2];
                $volume_4 = $for_volumes[3];
                $volume_5 = $for_volumes[4];
                $volume_6 = $for_volumes[5];
                $volume_7 = $for_volumes[6];
                $volume_8 = $for_volumes[7];
                $volume_9 = $for_volumes[8];
                $volume_10 = $for_volumes[9];
                $volume_11 = $for_volumes[10];
                $volume_12 = $for_volumes[11];
                $volume_13 = $for_volumes[12];
                $volume_14 = $for_volumes[13];
                $volume_15 = $for_volumes[14];
            }
            if (sizeof($for_volumes) == 16) {
                $volume_1 = $for_volumes[0];
                $volume_2 = $for_volumes[1];
                $volume_3 = $for_volumes[2];
                $volume_4 = $for_volumes[3];
                $volume_5 = $for_volumes[4];
                $volume_6 = $for_volumes[5];
                $volume_7 = $for_volumes[6];
                $volume_8 = $for_volumes[7];
                $volume_9 = $for_volumes[8];
                $volume_10 = $for_volumes[9];
                $volume_11 = $for_volumes[10];
                $volume_12 = $for_volumes[11];
                $volume_13 = $for_volumes[12];
                $volume_14 = $for_volumes[13];
                $volume_15 = $for_volumes[14];
                $volume_16 = $for_volumes[15];
            }
        }
        $today_date = date("Y-m-d", strtotime("today"));
        $yesterday_date = date("Y-m-d", strtotime("yesterday"));
        $month_date = date("Y-m-d", strtotime("-1 month"));
        $week_date = date("Y-m-d", strtotime("-1 week"));
        $sub_date = "10:00";
        $sub_date2 = "10:00";
        $con_date = $today_date . " " . $sub_date;
        $con_date2 = $week_date . " " . $sub_date;
        $con_date3 = $month_date . " " . $sub_date;
        $con_date4 = $yesterday_date . " " . $sub_date2;
        // For Level Queries
        if ($timeCondition == '1') {
            if (sizeof($req->all()[0]) == 1) {
                $db_data_1 = DB::select("SELECT timing, $val_1 FROM dt_aio WHERE timing > now() - interval 24 hour AND dt_id MOD '$interval' = 0");
            } else if (sizeof($req->all()[0]) == 2) {
                $db_data_2 = DB::select("SELECT timing, $val_1, $val_2 FROM dt_aio WHERE timing > now() - interval 24 hour AND dt_id MOD '$interval' = 0");
            } else if (sizeof($req->all()[0]) == 3) {
                $db_data_3 = DB::select("SELECT timing, $val_1, $val_2,$val_3 FROM dt_aio WHERE timing > now() - interval 24 hour AND dt_id MOD '$interval' = 0");
            } else if (sizeof($req->all()[0]) == 4) {
                $db_data_4 = DB::select("SELECT timing, $val_1, $val_2,$val_3,$val_4 FROM dt_aio WHERE timing > now() - interval 24 hour AND dt_id MOD '$interval' = 0");
            } else if (sizeof($req->all()[0]) == 5) {
                $db_data_5 = DB::select("SELECT timing, $val_1, $val_2,$val_3,$val_4,$val_5 FROM dt_aio WHERE timing > now() - interval 24 hour AND dt_id MOD '$interval' = 0");
            } else if (sizeof($req->all()[0]) == 6) {
                $db_data_6 = DB::select("SELECT timing, $val_1, $val_2,$val_3,$val_4,$val_5,$val_6 FROM dt_aio WHERE timing > now() - interval 24 hour AND dt_id MOD '$interval' = 0");
            } else if (sizeof($req->all()[0]) == 7) {
                $db_data_7 = DB::select("SELECT timing, $val_1, $val_2,$val_3,$val_4,$val_5,$val_6,$val_7 FROM dt_aio WHERE timing > now() - interval 24 hour AND dt_id MOD '$interval' = 0");
            } else if (sizeof($req->all()[0]) == 8) {
                $db_data_8 = DB::select("SELECT timing, $val_1, $val_2,$val_3,$val_4,$val_5,$val_6,$val_7,$val_8 FROM dt_aio WHERE timing > now() - interval 24 hour AND dt_id MOD '$interval' = 0");
            } else if (sizeof($req->all()[0]) == 9) {
                $db_data_9 = DB::select("SELECT timing, $val_1, $val_2,$val_3,$val_4,$val_5,$val_6,$val_7,$val_8,$val_9 FROM dt_aio WHERE timing > now() - interval 24 hour AND dt_id MOD '$interval' = 0");
            } else if (sizeof($req->all()[0]) == 10) {
                $db_data_10 = DB::select("SELECT timing, $val_1, $val_2,$val_3,$val_4,$val_5,$val_6,$val_7,$val_8,$val_9,$val_10 FROM dt_aio WHERE timing > now() - interval 24 hour AND dt_id MOD '$interval' = 0");
            } else if (sizeof($req->all()[0]) == 11) {
                $db_data_11 = DB::select("SELECT timing, $val_1, $val_2,$val_3,$val_4,$val_5,$val_6,$val_7,$val_8,$val_9,$val_10,$val_11 FROM dt_aio WHERE timing > now() - interval 24 hour AND dt_id MOD '$interval' = 0");
            } else if (sizeof($req->all()[0]) == 12) {
                $db_data_12 = DB::select("SELECT timing, $val_1, $val_2,$val_3,$val_4,$val_5,$val_6,$val_7,$val_8,$val_9,$val_10,$val_11,$val_12 FROM dt_aio WHERE timing > now() - interval 24 hour AND dt_id MOD '$interval' = 0");
            } else if (sizeof($req->all()[0]) == 13) {
                $db_data13 = DB::select("SELECT timing, $val_1, $val_2,$val_3,$val_4,$val_5,$val_6,$val_7,$val_8,$val_9,$val_10,$val_11,$val_12,$val_13 FROM dt_aio WHERE timing > now() - interval 24 hour AND dt_id MOD '$interval' = 0");
            } else if (sizeof($req->all()[0]) == 14) {
                $db_data_14 = DB::select("SELECT timing, $val_1, $val_2,$val_3,$val_4,$val_5,$val_6,$val_7,$val_8,$val_9,$val_10,$val_11,$val_12,$val_13,$val_14 FROM dt_aio WHERE timing > now() - interval 24 hour AND dt_id MOD '$interval' = 0");
            } else if (sizeof($req->all()[0]) == 15) {
                $db_data_15 = DB::select("SELECT timing, $val_1, $val_2,$val_3,$val_4,$val_5,$val_6,$val_7,$val_8,$val_9,$val_10,$val_11,$val_12,$val_13,$val_14,$val_15 FROM dt_aio WHERE timing > now() - interval 24 hour AND dt_id MOD '$interval' = 0");
            } else if (sizeof($req->all()[0]) == 16) {
                $db_data_16 = DB::select("SELECT timing, $val_1, $val_2,$val_3,$val_4,$val_5,$val_6,$val_7,$val_8,$val_9,$val_10,$val_11,$val_12,$val_13,$val_14,$val_15,$val_16 FROM dt_aio WHERE timing > now() - interval 24 hour AND dt_id MOD '$interval' = 0");
            }
        }elseif ($timeCondition == '2') {
            if (sizeof($req->all()[0]) == 1) {
                $db_data_1 = DB::select("SELECT timing, $val_1 FROM dt_aio WHERE timing BETWEEN '$con_date4' AND '$con_date'  ORDER BY dt_id ASC");
            } else if (sizeof($req->all()[0]) == 2) {
                $db_data_2 = DB::select("SELECT timing, $val_1, $val_2 FROM dt_aio WHERE timing BETWEEN '$con_date4' AND '$con_date'  ORDER BY dt_id ASC");
            } else if (sizeof($req->all()[0]) == 3) {
                $db_data_3 = DB::select("SELECT timing, $val_1, $val_2,$val_3 FROM dt_aio WHERE timing BETWEEN '$con_date4' AND '$con_date'  ORDER BY dt_id ASC");
            } else if (sizeof($req->all()[0]) == 4) {
                $db_data_4 = DB::select("SELECT timing, $val_1, $val_2,$val_3,$val_4 FROM dt_aio WHERE timing BETWEEN '$con_date4' AND '$con_date'  ORDER BY dt_id ASC");
            } else if (sizeof($req->all()[0]) == 5) {
                $db_data_5 = DB::select("SELECT timing, $val_1, $val_2,$val_3,$val_4,$val_5 FROM dt_aio WHERE timing BETWEEN '$con_date4' AND '$con_date'  ORDER BY dt_id ASC");
            } else if (sizeof($req->all()[0]) == 6) {
                $db_data_6 = DB::select("SELECT timing, $val_1, $val_2,$val_3,$val_4,$val_5,$val_6 FROM dt_aio WHERE timing BETWEEN '$con_date4' AND '$con_date'  ORDER BY dt_id ASC");
            } else if (sizeof($req->all()[0]) == 7) {
                $db_data_7 = DB::select("SELECT timing, $val_1, $val_2,$val_3,$val_4,$val_5,$val_6,$val_7 FROM dt_aio WHERE timing BETWEEN '$con_date4' AND '$con_date'  ORDER BY dt_id ASC");
            } else if (sizeof($req->all()[0]) == 8) {
                $db_data_8 = DB::select("SELECT timing, $val_1, $val_2,$val_3,$val_4,$val_5,$val_6,$val_7,$val_8 FROM dt_aio WHERE timing BETWEEN '$con_date4' AND '$con_date'  ORDER BY dt_id ASC");
            } else if (sizeof($req->all()[0]) == 9) {
                $db_data_9 = DB::select("SELECT timing, $val_1, $val_2,$val_3,$val_4,$val_5,$val_6,$val_7,$val_8,$val_9 FROM dt_aio WHERE timing BETWEEN '$con_date4' AND '$con_date'  ORDER BY dt_id ASC");
            } else if (sizeof($req->all()[0]) == 10) {
                $db_data_10 = DB::select("SELECT timing, $val_1, $val_2,$val_3,$val_4,$val_5,$val_6,$val_7,$val_8,$val_9,$val_10 FROM dt_aio WHERE timing BETWEEN '$con_date4' AND '$con_date'  ORDER BY dt_id ASC");
            } else if (sizeof($req->all()[0]) == 11) {
                $db_data_11 = DB::select("SELECT timing, $val_1, $val_2,$val_3,$val_4,$val_5,$val_6,$val_7,$val_8,$val_9,$val_10,$val_11 FROM dt_aio WHERE timing BETWEEN '$con_date4' AND '$con_date'  ORDER BY dt_id ASC");
            } else if (sizeof($req->all()[0]) == 12) {
                $db_data_12 = DB::select("SELECT timing, $val_1, $val_2,$val_3,$val_4,$val_5,$val_6,$val_7,$val_8,$val_9,$val_10,$val_11,$val_12 FROM dt_aio WHERE timing BETWEEN '$con_date4' AND '$con_date'  ORDER BY dt_id ASC");
            } else if (sizeof($req->all()[0]) == 13) {
                $db_data13 = DB::select("SELECT timing, $val_1, $val_2,$val_3,$val_4,$val_5,$val_6,$val_7,$val_8,$val_9,$val_10,$val_11,$val_12,$val_13 FROM dt_aio WHERE timing BETWEEN '$con_date4' AND '$con_date'  ORDER BY dt_id ASC");
            } else if (sizeof($req->all()[0]) == 14) {
                $db_data_14 = DB::select("SELECT timing, $val_1, $val_2,$val_3,$val_4,$val_5,$val_6,$val_7,$val_8,$val_9,$val_10,$val_11,$val_12,$val_13,$val_14 FROM dt_aio WHERE timing BETWEEN '$con_date4' AND '$con_date'  ORDER BY dt_id ASC");
            } else if (sizeof($req->all()[0]) == 15) {
                $db_data_15 = DB::select("SELECT timing, $val_1, $val_2,$val_3,$val_4,$val_5,$val_6,$val_7,$val_8,$val_9,$val_10,$val_11,$val_12,$val_13,$val_14,$val_15 FROM dt_aio WHERE timing BETWEEN '$con_date4' AND '$con_date'  ORDER BY dt_id ASC");
            } else if (sizeof($req->all()[0]) == 16) {
                $db_data_16 = DB::select("SELECT timing, $val_1, $val_2,$val_3,$val_4,$val_5,$val_6,$val_7,$val_8,$val_9,$val_10,$val_11,$val_12,$val_13,$val_14,$val_15,$val_16 FROM dt_aio WHERE timing BETWEEN '$con_date4' AND '$con_date'  ORDER BY dt_id ASC");
            }
        }elseif ($timeCondition == '3') {
            if (sizeof($req->all()[0]) == 1) {
                $db_data_1 = DB::select("SELECT timing, $val_1 FROM dt_aio WHERE timing BETWEEN '$con_date2' AND '$con_date' ORDER BY dt_id ASC");
            } else if (sizeof($req->all()[0]) == 2) {
                $db_data_2 = DB::select("SELECT timing, $val_1, $val_2 FROM dt_aio WHERE timing BETWEEN '$con_date2' AND '$con_date' ORDER BY dt_id ASC");
            } else if (sizeof($req->all()[0]) == 3) {
                $db_data_3 = DB::select("SELECT timing, $val_1, $val_2,$val_3 FROM dt_aio WHERE timing BETWEEN '$con_date2' AND '$con_date' ORDER BY dt_id ASC");
            } else if (sizeof($req->all()[0]) == 4) {
                $db_data_4 = DB::select("SELECT timing, $val_1, $val_2,$val_3,$val_4 FROM dt_aio WHERE timing BETWEEN '$con_date2' AND '$con_date' ORDER BY dt_id ASC");
            } else if (sizeof($req->all()[0]) == 5) {
                $db_data_5 = DB::select("SELECT timing, $val_1, $val_2,$val_3,$val_4,$val_5 FROM dt_aio WHERE timing BETWEEN '$con_date2' AND '$con_date' ORDER BY dt_id ASC");
            } else if (sizeof($req->all()[0]) == 6) {
                $db_data_6 = DB::select("SELECT timing, $val_1, $val_2,$val_3,$val_4,$val_5,$val_6 FROM dt_aio WHERE timing BETWEEN '$con_date2' AND '$con_date' ORDER BY dt_id ASC");
            } else if (sizeof($req->all()[0]) == 7) {
                $db_data_7 = DB::select("SELECT timing, $val_1, $val_2,$val_3,$val_4,$val_5,$val_6,$val_7 FROM dt_aio WHERE timing BETWEEN '$con_date2' AND '$con_date' ORDER BY dt_id ASC");
            } else if (sizeof($req->all()[0]) == 8) {
                $db_data_8 = DB::select("SELECT timing, $val_1, $val_2,$val_3,$val_4,$val_5,$val_6,$val_7,$val_8 FROM dt_aio WHERE timing BETWEEN '$con_date2' AND '$con_date' ORDER BY dt_id ASC");
            } else if (sizeof($req->all()[0]) == 9) {
                $db_data_9 = DB::select("SELECT timing, $val_1, $val_2,$val_3,$val_4,$val_5,$val_6,$val_7,$val_8,$val_9 FROM dt_aio WHERE timing BETWEEN '$con_date2' AND '$con_date' ORDER BY dt_id ASC");
            } else if (sizeof($req->all()[0]) == 10) {
                $db_data_10 = DB::select("SELECT timing, $val_1, $val_2,$val_3,$val_4,$val_5,$val_6,$val_7,$val_8,$val_9,$val_10 FROM dt_aio WHERE timing BETWEEN '$con_date2' AND '$con_date' ORDER BY dt_id ASC");
            } else if (sizeof($req->all()[0]) == 11) {
                $db_data_11 = DB::select("SELECT timing, $val_1, $val_2,$val_3,$val_4,$val_5,$val_6,$val_7,$val_8,$val_9,$val_10,$val_11 FROM dt_aio WHERE timing BETWEEN '$con_date2' AND '$con_date' ORDER BY dt_id ASC");
            } else if (sizeof($req->all()[0]) == 12) {
                $db_data_12 = DB::select("SELECT timing, $val_1, $val_2,$val_3,$val_4,$val_5,$val_6,$val_7,$val_8,$val_9,$val_10,$val_11,$val_12 FROM dt_aio WHERE timing BETWEEN '$con_date2' AND '$con_date' ORDER BY dt_id ASC");
            } else if (sizeof($req->all()[0]) == 13) {
                $db_data13 = DB::select("SELECT timing, $val_1, $val_2,$val_3,$val_4,$val_5,$val_6,$val_7,$val_8,$val_9,$val_10,$val_11,$val_12,$val_13 FROM dt_aio WHERE timing BETWEEN '$con_date2' AND '$con_date' ORDER BY dt_id ASC");
            } else if (sizeof($req->all()[0]) == 14) {
                $db_data_14 = DB::select("SELECT timing, $val_1, $val_2,$val_3,$val_4,$val_5,$val_6,$val_7,$val_8,$val_9,$val_10,$val_11,$val_12,$val_13,$val_14 FROM dt_aio WHERE timing BETWEEN '$con_date2' AND '$con_date' ORDER BY dt_id ASC");
            } else if (sizeof($req->all()[0]) == 15) {
                $db_data_15 = DB::select("SELECT timing, $val_1, $val_2,$val_3,$val_4,$val_5,$val_6,$val_7,$val_8,$val_9,$val_10,$val_11,$val_12,$val_13,$val_14,$val_15 FROM dt_aio WHERE timing BETWEEN '$con_date2' AND '$con_date' ORDER BY dt_id ASC");
            } else if (sizeof($req->all()[0]) == 16) {
                $db_data_16 = DB::select("SELECT timing, $val_1, $val_2,$val_3,$val_4,$val_5,$val_6,$val_7,$val_8,$val_9,$val_10,$val_11,$val_12,$val_13,$val_14,$val_15,$val_16 FROM dt_aio WHERE timing BETWEEN '$con_date2' AND '$con_date' ORDER BY dt_id ASC");
            }
        }elseif ($timeCondition == '4') {
            if (sizeof($req->all()[0]) == 1) {
                $db_data_1 = DB::select("SELECT timing, $val_1 FROM dt_aio WHERE timing BETWEEN '$con_date3' AND '$con_date'  ORDER BY dt_id ASC");
            } else if (sizeof($req->all()[0]) == 2) {
                $db_data_2 = DB::select("SELECT timing, $val_1, $val_2 FROM dt_aio WHERE timing BETWEEN '$con_date3' AND '$con_date'  ORDER BY dt_id ASC");
            } else if (sizeof($req->all()[0]) == 3) {
                $db_data_3 = DB::select("SELECT timing, $val_1, $val_2,$val_3 FROM dt_aio WHERE timing BETWEEN '$con_date3' AND '$con_date'  ORDER BY dt_id ASC");
            } else if (sizeof($req->all()[0]) == 4) {
                $db_data_4 = DB::select("SELECT timing, $val_1, $val_2,$val_3,$val_4 FROM dt_aio WHERE timing BETWEEN '$con_date3' AND '$con_date'  ORDER BY dt_id ASC");
            } else if (sizeof($req->all()[0]) == 5) {
                $db_data_5 = DB::select("SELECT timing, $val_1, $val_2,$val_3,$val_4,$val_5 FROM dt_aio WHERE timing BETWEEN '$con_date3' AND '$con_date'  ORDER BY dt_id ASC");
            } else if (sizeof($req->all()[0]) == 6) {
                $db_data_6 = DB::select("SELECT timing, $val_1, $val_2,$val_3,$val_4,$val_5,$val_6 FROM dt_aio WHERE timing BETWEEN '$con_date3' AND '$con_date'  ORDER BY dt_id ASC");
            } else if (sizeof($req->all()[0]) == 7) {
                $db_data_7 = DB::select("SELECT timing, $val_1, $val_2,$val_3,$val_4,$val_5,$val_6,$val_7 FROM dt_aio WHERE timing BETWEEN '$con_date3' AND '$con_date'  ORDER BY dt_id ASC");
            } else if (sizeof($req->all()[0]) == 8) {
                $db_data_8 = DB::select("SELECT timing, $val_1, $val_2,$val_3,$val_4,$val_5,$val_6,$val_7,$val_8 FROM dt_aio WHERE timing BETWEEN '$con_date3' AND '$con_date'  ORDER BY dt_id ASC");
            } else if (sizeof($req->all()[0]) == 9) {
                $db_data_9 = DB::select("SELECT timing, $val_1, $val_2,$val_3,$val_4,$val_5,$val_6,$val_7,$val_8,$val_9 FROM dt_aio WHERE timing BETWEEN '$con_date3' AND '$con_date'  ORDER BY dt_id ASC");
            } else if (sizeof($req->all()[0]) == 10) {
                $db_data_10 = DB::select("SELECT timing, $val_1, $val_2,$val_3,$val_4,$val_5,$val_6,$val_7,$val_8,$val_9,$val_10 FROM dt_aio WHERE timing BETWEEN '$con_date3' AND '$con_date'  ORDER BY dt_id ASC");
            } else if (sizeof($req->all()[0]) == 11) {
                $db_data_11 = DB::select("SELECT timing, $val_1, $val_2,$val_3,$val_4,$val_5,$val_6,$val_7,$val_8,$val_9,$val_10,$val_11 FROM dt_aio WHERE timing BETWEEN '$con_date3' AND '$con_date'  ORDER BY dt_id ASC");
            } else if (sizeof($req->all()[0]) == 12) {
                $db_data_12 = DB::select("SELECT timing, $val_1, $val_2,$val_3,$val_4,$val_5,$val_6,$val_7,$val_8,$val_9,$val_10,$val_11,$val_12 FROM dt_aio WHERE timing BETWEEN '$con_date3' AND '$con_date'  ORDER BY dt_id ASC");
            } else if (sizeof($req->all()[0]) == 13) {
                $db_data13 = DB::select("SELECT timing, $val_1, $val_2,$val_3,$val_4,$val_5,$val_6,$val_7,$val_8,$val_9,$val_10,$val_11,$val_12,$val_13 FROM dt_aio WHERE timing BETWEEN '$con_date3' AND '$con_date'  ORDER BY dt_id ASC");
            } else if (sizeof($req->all()[0]) == 14) {
                $db_data_14 = DB::select("SELECT timing, $val_1, $val_2,$val_3,$val_4,$val_5,$val_6,$val_7,$val_8,$val_9,$val_10,$val_11,$val_12,$val_13,$val_14 FROM dt_aio WHERE timing BETWEEN '$con_date3' AND '$con_date'  ORDER BY dt_id ASC");
            } else if (sizeof($req->all()[0]) == 15) {
                $db_data_15 = DB::select("SELECT timing, $val_1, $val_2,$val_3,$val_4,$val_5,$val_6,$val_7,$val_8,$val_9,$val_10,$val_11,$val_12,$val_13,$val_14,$val_15 FROM dt_aio WHERE timing BETWEEN '$con_date3' AND '$con_date'  ORDER BY dt_id ASC");
            } else if (sizeof($req->all()[0]) == 16) {
                $db_data_16 = DB::select("SELECT timing, $val_1, $val_2,$val_3,$val_4,$val_5,$val_6,$val_7,$val_8,$val_9,$val_10,$val_11,$val_12,$val_13,$val_14,$val_15,$val_16 FROM dt_aio WHERE timing BETWEEN '$con_date3' AND '$con_date'  ORDER BY dt_id ASC");
            }
        }elseif ($timeCondition == '5') {
            if (sizeof($req->all()[0]) == 1) {
                $db_data_1 = DB::select("SELECT timing, $val_1 FROM dt_aio WHERE timing BETWEEN '$new_date1' AND '$new_date2' AND dt_id MOD '$interval' = 0 ORDER BY dt_id ASC");
            } else if (sizeof($req->all()[0]) == 2) {
                $db_data_2 = DB::select("SELECT timing, $val_1, $val_2 FROM dt_aio WHERE timing BETWEEN '$new_date1' AND '$new_date2' AND dt_id MOD '$interval' = 0 ORDER BY dt_id ASC");
            } else if (sizeof($req->all()[0]) == 3) {
                $db_data_3 = DB::select("SELECT timing, $val_1, $val_2,$val_3 FROM dt_aio WHERE timing BETWEEN '$new_date1' AND '$new_date2' AND dt_id MOD '$interval' = 0 ORDER BY dt_id ASC");
            } else if (sizeof($req->all()[0]) == 4) {
                $db_data_4 = DB::select("SELECT timing, $val_1, $val_2,$val_3,$val_4 FROM dt_aio WHERE timing BETWEEN '$new_date1' AND '$new_date2' AND dt_id MOD '$interval' = 0 ORDER BY dt_id ASC");
            } else if (sizeof($req->all()[0]) == 5) {
                $db_data_5 = DB::select("SELECT timing, $val_1, $val_2,$val_3,$val_4,$val_5 FROM dt_aio WHERE timing BETWEEN '$new_date1' AND '$new_date2' AND dt_id MOD '$interval' = 0 ORDER BY dt_id ASC");
            } else if (sizeof($req->all()[0]) == 6) {
                $db_data_6 = DB::select("SELECT timing, $val_1, $val_2,$val_3,$val_4,$val_5,$val_6 FROM dt_aio WHERE timing BETWEEN '$new_date1' AND '$new_date2' AND dt_id MOD '$interval' = 0 ORDER BY dt_id ASC");
            } else if (sizeof($req->all()[0]) == 7) {
                $db_data_7 = DB::select("SELECT timing, $val_1, $val_2,$val_3,$val_4,$val_5,$val_6,$val_7 FROM dt_aio WHERE timing BETWEEN '$new_date1' AND '$new_date2' AND dt_id MOD '$interval' = 0 ORDER BY dt_id ASC");
            } else if (sizeof($req->all()[0]) == 8) {
                $db_data_8 = DB::select("SELECT timing, $val_1, $val_2,$val_3,$val_4,$val_5,$val_6,$val_7,$val_8 FROM dt_aio WHERE timing BETWEEN '$new_date1' AND '$new_date2' AND dt_id MOD '$interval' = 0 ORDER BY dt_id ASC");
            } else if (sizeof($req->all()[0]) == 9) {
                $db_data_9 = DB::select("SELECT timing, $val_1, $val_2,$val_3,$val_4,$val_5,$val_6,$val_7,$val_8,$val_9 FROM dt_aio WHERE timing BETWEEN '$new_date1' AND '$new_date2' AND dt_id MOD '$interval' = 0 ORDER BY dt_id ASC");
            } else if (sizeof($req->all()[0]) == 10) {
                $db_data_10 = DB::select("SELECT timing, $val_1, $val_2,$val_3,$val_4,$val_5,$val_6,$val_7,$val_8,$val_9,$val_10 FROM dt_aio WHERE timing BETWEEN '$new_date1' AND '$new_date2' AND dt_id MOD '$interval' = 0 ORDER BY dt_id ASC");
            } else if (sizeof($req->all()[0]) == 11) {
                $db_data_11 = DB::select("SELECT timing, $val_1, $val_2,$val_3,$val_4,$val_5,$val_6,$val_7,$val_8,$val_9,$val_10,$val_11 FROM dt_aio WHERE timing BETWEEN '$new_date1' AND '$new_date2' AND dt_id MOD '$interval' = 0 ORDER BY dt_id ASC");
            } else if (sizeof($req->all()[0]) == 12) {
                $db_data_12 = DB::select("SELECT timing, $val_1, $val_2,$val_3,$val_4,$val_5,$val_6,$val_7,$val_8,$val_9,$val_10,$val_11,$val_12 FROM dt_aio WHERE timing BETWEEN '$new_date1' AND '$new_date2' AND dt_id MOD '$interval' = 0 ORDER BY dt_id ASC");
            } else if (sizeof($req->all()[0]) == 13) {
                $db_data13 = DB::select("SELECT timing, $val_1, $val_2,$val_3,$val_4,$val_5,$val_6,$val_7,$val_8,$val_9,$val_10,$val_11,$val_12,$val_13 FROM dt_aio WHERE timing BETWEEN '$new_date1' AND '$new_date2' AND dt_id MOD '$interval' = 0 ORDER BY dt_id ASC");
            } else if (sizeof($req->all()[0]) == 14) {
                $db_data_14 = DB::select("SELECT timing, $val_1, $val_2,$val_3,$val_4,$val_5,$val_6,$val_7,$val_8,$val_9,$val_10,$val_11,$val_12,$val_13,$val_14 FROM dt_aio WHERE timing BETWEEN '$new_date1' AND '$new_date2' AND dt_id MOD '$interval' = 0 ORDER BY dt_id ASC");
            } else if (sizeof($req->all()[0]) == 15) {
                $db_data_15 = DB::select("SELECT timing, $val_1, $val_2,$val_3,$val_4,$val_5,$val_6,$val_7,$val_8,$val_9,$val_10,$val_11,$val_12,$val_13,$val_14,$val_15 FROM dt_aio WHERE timing BETWEEN '$new_date1' AND '$new_date2' AND dt_id MOD '$interval' = 0 ORDER BY dt_id ASC");
            } else if (sizeof($req->all()[0]) == 16) {
                $db_data_16 = DB::select("SELECT timing, $val_1, $val_2,$val_3,$val_4,$val_5,$val_6,$val_7,$val_8,$val_9,$val_10,$val_11,$val_12,$val_13,$val_14,$val_15,$val_16 FROM dt_aio WHERE timing BETWEEN '$new_date1' AND '$new_date2' AND dt_id MOD '$interval' = 0 ORDER BY dt_id ASC");
            }
        }
        // For Volume Queries
        if (sizeof($for_volumes) >= 1) {
            if ($timeCondition == '1') {
                if (sizeof($req->all()[0]) == 1) {
                    $vol_data_1 = DB::select("SELECT timing, $volume_1 FROM dt_aio WHERE timing > now() - interval 24 hour AND dt_id MOD '$interval' = 0");
                } else if (sizeof($req->all()[0]) == 2) {
                    $vol_data_2 = DB::select("SELECT timing, $volume_1, $volume_2 FROM dt_aio WHERE timing > now() - interval 24 hour AND dt_id MOD '$interval' = 0");
                } else if (sizeof($req->all()[0]) == 3) {
                    $vol_data_3 = DB::select("SELECT timing, $volume_1, $volume_2,$volume_3 FROM dt_aio WHERE timing > now() - interval 24 hour AND dt_id MOD '$interval' = 0");
                } else if (sizeof($req->all()[0]) == 4) {
                    $vol_data_4 = DB::select("SELECT timing, $volume_1, $volume_2,$volume_3,$volume_4 FROM dt_aio WHERE timing > now() - interval 24 hour AND dt_id MOD '$interval' = 0");
                } else if (sizeof($req->all()[0]) == 5) {
                    $vol_data_5 = DB::select("SELECT timing, $volume_1, $volume_2,$volume_3,$volume_4,$volume_5 FROM dt_aio WHERE timing > now() - interval 24 hour AND dt_id MOD '$interval' = 0");
                } else if (sizeof($req->all()[0]) == 6) {
                    $vol_data_6 = DB::select("SELECT timing, $volume_1, $volume_2,$volume_3,$volume_4,$volume_5,$volume_6 FROM dt_aio WHERE timing > now() - interval 24 hour AND dt_id MOD '$interval' = 0");
                } else if (sizeof($req->all()[0]) == 7) {
                    $vol_data_7 = DB::select("SELECT timing, $volume_1, $volume_2,$volume_3,$volume_4,$volume_5,$volume_6,$volume_7 FROM dt_aio WHERE timing > now() - interval 24 hour AND dt_id MOD '$interval' = 0");
                } else if (sizeof($req->all()[0]) == 8) {
                    $vol_data_8 = DB::select("SELECT timing, $volume_1, $volume_2,$volume_3,$volume_4,$volume_5,$volume_6,$volume_7,$volume_8 FROM dt_aio WHERE timing > now() - interval 24 hour AND dt_id MOD '$interval' = 0");
                } else if (sizeof($req->all()[0]) == 9) {
                    $vol_data_9 = DB::select("SELECT timing, $volume_1, $volume_2,$volume_3,$volume_4,$volume_5,$volume_6,$volume_7,$volume_8,$volume_9 FROM dt_aio WHERE timing > now() - interval 24 hour AND dt_id MOD '$interval' = 0");
                } else if (sizeof($req->all()[0]) == 10) {
                    $vol_data_10 = DB::select("SELECT timing, $volume_1, $volume_2,$volume_3,$volume_4,$volume_5,$volume_6,$volume_7,$volume_8,$volume_9,$volume_10 FROM dt_aio WHERE timing > now() - interval 24 hour AND dt_id MOD '$interval' = 0");
                } else if (sizeof($req->all()[0]) == 11) {
                    $vol_data_11 = DB::select("SELECT timing, $volume_1, $volume_2,$volume_3,$volume_4,$volume_5,$volume_6,$volume_7,$volume_8,$volume_9,$volume_10,$volume_11 FROM dt_aio WHERE timing > now() - interval 24 hour AND dt_id MOD '$interval' = 0");
                } else if (sizeof($req->all()[0]) == 12) {
                    $vol_data_12 = DB::select("SELECT timing, $volume_1, $volume_2,$volume_3,$volume_4,$volume_5,$volume_6,$volume_7,$volume_8,$volume_9,$volume_10,$volume_11,$volume_12 FROM dt_aio WHERE timing > now() - interval 24 hour AND dt_id MOD '$interval' = 0");
                } else if (sizeof($req->all()[0]) == 13) {
                    $db_data13 = DB::select("SELECT timing, $volume_1, $volume_2,$volume_3,$volume_4,$volume_5,$volume_6,$volume_7,$volume_8,$volume_9,$volume_10,$volume_11,$volume_12,$volume_13 FROM dt_aio WHERE timing > now() - interval 24 hour AND dt_id MOD '$interval' = 0");
                } else if (sizeof($req->all()[0]) == 14) {
                    $vol_data_14 = DB::select("SELECT timing, $volume_1, $volume_2,$volume_3,$volume_4,$volume_5,$volume_6,$volume_7,$volume_8,$volume_9,$volume_10,$volume_11,$volume_12,$volume_13,$volume_14 FROM dt_aio WHERE timing > now() - interval 24 hour AND dt_id MOD '$interval' = 0");
                } else if (sizeof($req->all()[0]) == 15) {
                    $vol_data_15 = DB::select("SELECT timing, $volume_1, $volume_2,$volume_3,$volume_4,$volume_5,$volume_6,$volume_7,$volume_8,$volume_9,$volume_10,$volume_11,$volume_12,$volume_13,$volume_14,$volume_15 FROM dt_aio WHERE timing > now() - interval 24 hour AND dt_id MOD '$interval' = 0");
                } else if (sizeof($req->all()[0]) == 16) {
                    $vol_data_16 = DB::select("SELECT timing, $volume_1, $volume_2,$volume_3,$volume_4,$volume_5,$volume_6,$volume_7,$volume_8,$volume_9,$volume_10,$volume_11,$volume_12,$volume_13,$volume_14,$volume_15,$volume_16 FROM dt_aio WHERE timing > now() - interval 24 hour AND dt_id MOD '$interval' = 0");
                }
            } elseif ($timeCondition == '2') {
                if (sizeof($req->all()[0]) == 1) {
                    $vol_data_1 = DB::select("SELECT timing, $volume_1 FROM dt_aio WHERE timing BETWEEN '$con_date4' AND '$con_date'  ORDER BY dt_id ASC");
                } else if (sizeof($req->all()[0]) == 2) {
                    $vol_data_2 = DB::select("SELECT timing, $volume_1, $volume_2 FROM dt_aio WHERE timing BETWEEN '$con_date4' AND '$con_date'  ORDER BY dt_id ASC");
                } else if (sizeof($req->all()[0]) == 3) {
                    $vol_data_3 = DB::select("SELECT timing, $volume_1, $volume_2,$volume_3 FROM dt_aio WHERE timing BETWEEN '$con_date4' AND '$con_date'  ORDER BY dt_id ASC");
                } else if (sizeof($req->all()[0]) == 4) {
                    $vol_data_4 = DB::select("SELECT timing, $volume_1, $volume_2,$volume_3,$volume_4 FROM dt_aio WHERE timing BETWEEN '$con_date4' AND '$con_date'  ORDER BY dt_id ASC");
                } else if (sizeof($req->all()[0]) == 5) {
                    $vol_data_5 = DB::select("SELECT timing, $volume_1, $volume_2,$volume_3,$volume_4,$volume_5 FROM dt_aio WHERE timing BETWEEN '$con_date4' AND '$con_date'  ORDER BY dt_id ASC");
                } else if (sizeof($req->all()[0]) == 6) {
                    $vol_data_6 = DB::select("SELECT timing, $volume_1, $volume_2,$volume_3,$volume_4,$volume_5,$volume_6 FROM dt_aio WHERE timing BETWEEN '$con_date4' AND '$con_date'  ORDER BY dt_id ASC");
                } else if (sizeof($req->all()[0]) == 7) {
                    $vol_data_7 = DB::select("SELECT timing, $volume_1, $volume_2,$volume_3,$volume_4,$volume_5,$volume_6,$volume_7 FROM dt_aio WHERE timing BETWEEN '$con_date4' AND '$con_date'  ORDER BY dt_id ASC");
                } else if (sizeof($req->all()[0]) == 8) {
                    $vol_data_8 = DB::select("SELECT timing, $volume_1, $volume_2,$volume_3,$volume_4,$volume_5,$volume_6,$volume_7,$volume_8 FROM dt_aio WHERE timing BETWEEN '$con_date4' AND '$con_date'  ORDER BY dt_id ASC");
                } else if (sizeof($req->all()[0]) == 9) {
                    $vol_data_9 = DB::select("SELECT timing, $volume_1, $volume_2,$volume_3,$volume_4,$volume_5,$volume_6,$volume_7,$volume_8,$volume_9 FROM dt_aio WHERE timing BETWEEN '$con_date4' AND '$con_date'  ORDER BY dt_id ASC");
                } else if (sizeof($req->all()[0]) == 10) {
                    $vol_data_10 = DB::select("SELECT timing, $volume_1, $volume_2,$volume_3,$volume_4,$volume_5,$volume_6,$volume_7,$volume_8,$volume_9,$volume_10 FROM dt_aio WHERE timing BETWEEN '$con_date4' AND '$con_date'  ORDER BY dt_id ASC");
                } else if (sizeof($req->all()[0]) == 11) {
                    $vol_data_11 = DB::select("SELECT timing, $volume_1, $volume_2,$volume_3,$volume_4,$volume_5,$volume_6,$volume_7,$volume_8,$volume_9,$volume_10,$volume_11 FROM dt_aio WHERE timing BETWEEN '$con_date4' AND '$con_date'  ORDER BY dt_id ASC");
                } else if (sizeof($req->all()[0]) == 12) {
                    $vol_data_12 = DB::select("SELECT timing, $volume_1, $volume_2,$volume_3,$volume_4,$volume_5,$volume_6,$volume_7,$volume_8,$volume_9,$volume_10,$volume_11,$volume_12 FROM dt_aio WHERE timing BETWEEN '$con_date4' AND '$con_date'  ORDER BY dt_id ASC");
                } else if (sizeof($req->all()[0]) == 13) {
                    $db_data13 = DB::select("SELECT timing, $volume_1, $volume_2,$volume_3,$volume_4,$volume_5,$volume_6,$volume_7,$volume_8,$volume_9,$volume_10,$volume_11,$volume_12,$volume_13 FROM dt_aio WHERE timing BETWEEN '$con_date4' AND '$con_date'  ORDER BY dt_id ASC");
                } else if (sizeof($req->all()[0]) == 14) {
                    $vol_data_14 = DB::select("SELECT timing, $volume_1, $volume_2,$volume_3,$volume_4,$volume_5,$volume_6,$volume_7,$volume_8,$volume_9,$volume_10,$volume_11,$volume_12,$volume_13,$volume_14 FROM dt_aio WHERE timing BETWEEN '$con_date4' AND '$con_date'  ORDER BY dt_id ASC");
                } else if (sizeof($req->all()[0]) == 15) {
                    $vol_data_15 = DB::select("SELECT timing, $volume_1, $volume_2,$volume_3,$volume_4,$volume_5,$volume_6,$volume_7,$volume_8,$volume_9,$volume_10,$volume_11,$volume_12,$volume_13,$volume_14,$volume_15 FROM dt_aio WHERE timing BETWEEN '$con_date4' AND '$con_date'  ORDER BY dt_id ASC");
                } else if (sizeof($req->all()[0]) == 16) {
                    $vol_data_16 = DB::select("SELECT timing, $volume_1, $volume_2,$volume_3,$volume_4,$volume_5,$volume_6,$volume_7,$volume_8,$volume_9,$volume_10,$volume_11,$volume_12,$volume_13,$volume_14,$volume_15,$volume_16 FROM dt_aio WHERE timing BETWEEN '$con_date4' AND '$con_date'  ORDER BY dt_id ASC");
                }
            } elseif ($timeCondition == '3') {
                if (sizeof($req->all()[0]) == 1) {
                    $vol_data_1 = DB::select("SELECT timing, $volume_1 FROM dt_aio WHERE timing BETWEEN '$con_date2' AND '$con_date' ORDER BY dt_id ASC");
                } else if (sizeof($req->all()[0]) == 2) {
                    $vol_data_2 = DB::select("SELECT timing, $volume_1, $volume_2 FROM dt_aio WHERE timing BETWEEN '$con_date2' AND '$con_date' ORDER BY dt_id ASC");
                } else if (sizeof($req->all()[0]) == 3) {
                    $vol_data_3 = DB::select("SELECT timing, $volume_1, $volume_2,$volume_3 FROM dt_aio WHERE timing BETWEEN '$con_date2' AND '$con_date' ORDER BY dt_id ASC");
                } else if (sizeof($req->all()[0]) == 4) {
                    $vol_data_4 = DB::select("SELECT timing, $volume_1, $volume_2,$volume_3,$volume_4 FROM dt_aio WHERE timing BETWEEN '$con_date2' AND '$con_date' ORDER BY dt_id ASC");
                } else if (sizeof($req->all()[0]) == 5) {
                    $vol_data_5 = DB::select("SELECT timing, $volume_1, $volume_2,$volume_3,$volume_4,$volume_5 FROM dt_aio WHERE timing BETWEEN '$con_date2' AND '$con_date' ORDER BY dt_id ASC");
                } else if (sizeof($req->all()[0]) == 6) {
                    $vol_data_6 = DB::select("SELECT timing, $volume_1, $volume_2,$volume_3,$volume_4,$volume_5,$volume_6 FROM dt_aio WHERE timing BETWEEN '$con_date2' AND '$con_date' ORDER BY dt_id ASC");
                } else if (sizeof($req->all()[0]) == 7) {
                    $vol_data_7 = DB::select("SELECT timing, $volume_1, $volume_2,$volume_3,$volume_4,$volume_5,$volume_6,$volume_7 FROM dt_aio WHERE timing BETWEEN '$con_date2' AND '$con_date' ORDER BY dt_id ASC");
                } else if (sizeof($req->all()[0]) == 8) {
                    $vol_data_8 = DB::select("SELECT timing, $volume_1, $volume_2,$volume_3,$volume_4,$volume_5,$volume_6,$volume_7,$volume_8 FROM dt_aio WHERE timing BETWEEN '$con_date2' AND '$con_date' ORDER BY dt_id ASC");
                } else if (sizeof($req->all()[0]) == 9) {
                    $vol_data_9 = DB::select("SELECT timing, $volume_1, $volume_2,$volume_3,$volume_4,$volume_5,$volume_6,$volume_7,$volume_8,$volume_9 FROM dt_aio WHERE timing BETWEEN '$con_date2' AND '$con_date' ORDER BY dt_id ASC");
                } else if (sizeof($req->all()[0]) == 10) {
                    $vol_data_10 = DB::select("SELECT timing, $volume_1, $volume_2,$volume_3,$volume_4,$volume_5,$volume_6,$volume_7,$volume_8,$volume_9,$volume_10 FROM dt_aio WHERE timing BETWEEN '$con_date2' AND '$con_date' ORDER BY dt_id ASC");
                } else if (sizeof($req->all()[0]) == 11) {
                    $vol_data_11 = DB::select("SELECT timing, $volume_1, $volume_2,$volume_3,$volume_4,$volume_5,$volume_6,$volume_7,$volume_8,$volume_9,$volume_10,$volume_11 FROM dt_aio WHERE timing BETWEEN '$con_date2' AND '$con_date' ORDER BY dt_id ASC");
                } else if (sizeof($req->all()[0]) == 12) {
                    $vol_data_12 = DB::select("SELECT timing, $volume_1, $volume_2,$volume_3,$volume_4,$volume_5,$volume_6,$volume_7,$volume_8,$volume_9,$volume_10,$volume_11,$volume_12 FROM dt_aio WHERE timing BETWEEN '$con_date2' AND '$con_date' ORDER BY dt_id ASC");
                } else if (sizeof($req->all()[0]) == 13) {
                    $db_data13 = DB::select("SELECT timing, $volume_1, $volume_2,$volume_3,$volume_4,$volume_5,$volume_6,$volume_7,$volume_8,$volume_9,$volume_10,$volume_11,$volume_12,$volume_13 FROM dt_aio WHERE timing BETWEEN '$con_date2' AND '$con_date' ORDER BY dt_id ASC");
                } else if (sizeof($req->all()[0]) == 14) {
                    $vol_data_14 = DB::select("SELECT timing, $volume_1, $volume_2,$volume_3,$volume_4,$volume_5,$volume_6,$volume_7,$volume_8,$volume_9,$volume_10,$volume_11,$volume_12,$volume_13,$volume_14 FROM dt_aio WHERE timing BETWEEN '$con_date2' AND '$con_date' ORDER BY dt_id ASC");
                } else if (sizeof($req->all()[0]) == 15) {
                    $vol_data_15 = DB::select("SELECT timing, $volume_1, $volume_2,$volume_3,$volume_4,$volume_5,$volume_6,$volume_7,$volume_8,$volume_9,$volume_10,$volume_11,$volume_12,$volume_13,$volume_14,$volume_15 FROM dt_aio WHERE timing BETWEEN '$con_date2' AND '$con_date' ORDER BY dt_id ASC");
                } else if (sizeof($req->all()[0]) == 16) {
                    $vol_data_16 = DB::select("SELECT timing, $volume_1, $volume_2,$volume_3,$volume_4,$volume_5,$volume_6,$volume_7,$volume_8,$volume_9,$volume_10,$volume_11,$volume_12,$volume_13,$volume_14,$volume_15,$volume_16 FROM dt_aio WHERE timing BETWEEN '$con_date2' AND '$con_date' ORDER BY dt_id ASC");
                }
            } elseif ($timeCondition == '4') {
                if (sizeof($req->all()[0]) == 1) {
                    $vol_data_1 = DB::select("SELECT timing, $volume_1 FROM dt_aio WHERE timing BETWEEN '$con_date3' AND '$con_date'  ORDER BY dt_id ASC");
                } else if (sizeof($req->all()[0]) == 2) {
                    $vol_data_2 = DB::select("SELECT timing, $volume_1, $volume_2 FROM dt_aio WHERE timing BETWEEN '$con_date3' AND '$con_date'  ORDER BY dt_id ASC");
                } else if (sizeof($req->all()[0]) == 3) {
                    $vol_data_3 = DB::select("SELECT timing, $volume_1, $volume_2,$volume_3 FROM dt_aio WHERE timing BETWEEN '$con_date3' AND '$con_date'  ORDER BY dt_id ASC");
                } else if (sizeof($req->all()[0]) == 4) {
                    $vol_data_4 = DB::select("SELECT timing, $volume_1, $volume_2,$volume_3,$volume_4 FROM dt_aio WHERE timing BETWEEN '$con_date3' AND '$con_date'  ORDER BY dt_id ASC");
                } else if (sizeof($req->all()[0]) == 5) {
                    $vol_data_5 = DB::select("SELECT timing, $volume_1, $volume_2,$volume_3,$volume_4,$volume_5 FROM dt_aio WHERE timing BETWEEN '$con_date3' AND '$con_date'  ORDER BY dt_id ASC");
                } else if (sizeof($req->all()[0]) == 6) {
                    $vol_data_6 = DB::select("SELECT timing, $volume_1, $volume_2,$volume_3,$volume_4,$volume_5,$volume_6 FROM dt_aio WHERE timing BETWEEN '$con_date3' AND '$con_date'  ORDER BY dt_id ASC");
                } else if (sizeof($req->all()[0]) == 7) {
                    $vol_data_7 = DB::select("SELECT timing, $volume_1, $volume_2,$volume_3,$volume_4,$volume_5,$volume_6,$volume_7 FROM dt_aio WHERE timing BETWEEN '$con_date3' AND '$con_date'  ORDER BY dt_id ASC");
                } else if (sizeof($req->all()[0]) == 8) {
                    $vol_data_8 = DB::select("SELECT timing, $volume_1, $volume_2,$volume_3,$volume_4,$volume_5,$volume_6,$volume_7,$volume_8 FROM dt_aio WHERE timing BETWEEN '$con_date3' AND '$con_date'  ORDER BY dt_id ASC");
                } else if (sizeof($req->all()[0]) == 9) {
                    $vol_data_9 = DB::select("SELECT timing, $volume_1, $volume_2,$volume_3,$volume_4,$volume_5,$volume_6,$volume_7,$volume_8,$volume_9 FROM dt_aio WHERE timing BETWEEN '$con_date3' AND '$con_date'  ORDER BY dt_id ASC");
                } else if (sizeof($req->all()[0]) == 10) {
                    $vol_data_10 = DB::select("SELECT timing, $volume_1, $volume_2,$volume_3,$volume_4,$volume_5,$volume_6,$volume_7,$volume_8,$volume_9,$volume_10 FROM dt_aio WHERE timing BETWEEN '$con_date3' AND '$con_date'  ORDER BY dt_id ASC");
                } else if (sizeof($req->all()[0]) == 11) {
                    $vol_data_11 = DB::select("SELECT timing, $volume_1, $volume_2,$volume_3,$volume_4,$volume_5,$volume_6,$volume_7,$volume_8,$volume_9,$volume_10,$volume_11 FROM dt_aio WHERE timing BETWEEN '$con_date3' AND '$con_date'  ORDER BY dt_id ASC");
                } else if (sizeof($req->all()[0]) == 12) {
                    $vol_data_12 = DB::select("SELECT timing, $volume_1, $volume_2,$volume_3,$volume_4,$volume_5,$volume_6,$volume_7,$volume_8,$volume_9,$volume_10,$volume_11,$volume_12 FROM dt_aio WHERE timing BETWEEN '$con_date3' AND '$con_date'  ORDER BY dt_id ASC");
                } else if (sizeof($req->all()[0]) == 13) {
                    $db_data13 = DB::select("SELECT timing, $volume_1, $volume_2,$volume_3,$volume_4,$volume_5,$volume_6,$volume_7,$volume_8,$volume_9,$volume_10,$volume_11,$volume_12,$volume_13 FROM dt_aio WHERE timing BETWEEN '$con_date3' AND '$con_date'  ORDER BY dt_id ASC");
                } else if (sizeof($req->all()[0]) == 14) {
                    $vol_data_14 = DB::select("SELECT timing, $volume_1, $volume_2,$volume_3,$volume_4,$volume_5,$volume_6,$volume_7,$volume_8,$volume_9,$volume_10,$volume_11,$volume_12,$volume_13,$volume_14 FROM dt_aio WHERE timing BETWEEN '$con_date3' AND '$con_date'  ORDER BY dt_id ASC");
                } else if (sizeof($req->all()[0]) == 15) {
                    $vol_data_15 = DB::select("SELECT timing, $volume_1, $volume_2,$volume_3,$volume_4,$volume_5,$volume_6,$volume_7,$volume_8,$volume_9,$volume_10,$volume_11,$volume_12,$volume_13,$volume_14,$volume_15 FROM dt_aio WHERE timing BETWEEN '$con_date3' AND '$con_date'  ORDER BY dt_id ASC");
                } else if (sizeof($req->all()[0]) == 16) {
                    $vol_data_16 = DB::select("SELECT timing, $volume_1, $volume_2,$volume_3,$volume_4,$volume_5,$volume_6,$volume_7,$volume_8,$volume_9,$volume_10,$volume_11,$volume_12,$volume_13,$volume_14,$volume_15,$volume_16 FROM dt_aio WHERE timing BETWEEN '$con_date3' AND '$con_date'  ORDER BY dt_id ASC");
                }
            } elseif ($timeCondition == '5') {
                if (sizeof($req->all()[0]) == 1) {
                    $vol_data_1 = DB::select("SELECT timing, $volume_1 FROM dt_aio WHERE timing BETWEEN '$new_date1' AND '$new_date2' AND dt_id MOD '$interval' = 0 ORDER BY dt_id ASC");
                } else if (sizeof($req->all()[0]) == 2) {
                    $vol_data_2 = DB::select("SELECT timing, $volume_1, $volume_2 FROM dt_aio WHERE timing BETWEEN '$new_date1' AND '$new_date2' AND dt_id MOD '$interval' = 0 ORDER BY dt_id ASC");
                } else if (sizeof($req->all()[0]) == 3) {
                    $vol_data_3 = DB::select("SELECT timing, $volume_1, $volume_2,$volume_3 FROM dt_aio WHERE timing BETWEEN '$new_date1' AND '$new_date2' AND dt_id MOD '$interval' = 0 ORDER BY dt_id ASC");
                } else if (sizeof($req->all()[0]) == 4) {
                    $vol_data_4 = DB::select("SELECT timing, $volume_1, $volume_2,$volume_3,$volume_4 FROM dt_aio WHERE timing BETWEEN '$new_date1' AND '$new_date2' AND dt_id MOD '$interval' = 0 ORDER BY dt_id ASC");
                } else if (sizeof($req->all()[0]) == 5) {
                    $vol_data_5 = DB::select("SELECT timing, $volume_1, $volume_2,$volume_3,$volume_4,$volume_5 FROM dt_aio WHERE timing BETWEEN '$new_date1' AND '$new_date2' AND dt_id MOD '$interval' = 0 ORDER BY dt_id ASC");
                } else if (sizeof($req->all()[0]) == 6) {
                    $vol_data_6 = DB::select("SELECT timing, $volume_1, $volume_2,$volume_3,$volume_4,$volume_5,$volume_6 FROM dt_aio WHERE timing BETWEEN '$new_date1' AND '$new_date2' AND dt_id MOD '$interval' = 0 ORDER BY dt_id ASC");
                } else if (sizeof($req->all()[0]) == 7) {
                    $vol_data_7 = DB::select("SELECT timing, $volume_1, $volume_2,$volume_3,$volume_4,$volume_5,$volume_6,$volume_7 FROM dt_aio WHERE timing BETWEEN '$new_date1' AND '$new_date2' AND dt_id MOD '$interval' = 0 ORDER BY dt_id ASC");
                } else if (sizeof($req->all()[0]) == 8) {
                    $vol_data_8 = DB::select("SELECT timing, $volume_1, $volume_2,$volume_3,$volume_4,$volume_5,$volume_6,$volume_7,$volume_8 FROM dt_aio WHERE timing BETWEEN '$new_date1' AND '$new_date2' AND dt_id MOD '$interval' = 0 ORDER BY dt_id ASC");
                } else if (sizeof($req->all()[0]) == 9) {
                    $vol_data_9 = DB::select("SELECT timing, $volume_1, $volume_2,$volume_3,$volume_4,$volume_5,$volume_6,$volume_7,$volume_8,$volume_9 FROM dt_aio WHERE timing BETWEEN '$new_date1' AND '$new_date2' AND dt_id MOD '$interval' = 0 ORDER BY dt_id ASC");
                } else if (sizeof($req->all()[0]) == 10) {
                    $vol_data_10 = DB::select("SELECT timing, $volume_1, $volume_2,$volume_3,$volume_4,$volume_5,$volume_6,$volume_7,$volume_8,$volume_9,$volume_10 FROM dt_aio WHERE timing BETWEEN '$new_date1' AND '$new_date2' AND dt_id MOD '$interval' = 0 ORDER BY dt_id ASC");
                } else if (sizeof($req->all()[0]) == 11) {
                    $vol_data_11 = DB::select("SELECT timing, $volume_1, $volume_2,$volume_3,$volume_4,$volume_5,$volume_6,$volume_7,$volume_8,$volume_9,$volume_10,$volume_11 FROM dt_aio WHERE timing BETWEEN '$new_date1' AND '$new_date2' AND dt_id MOD '$interval' = 0 ORDER BY dt_id ASC");
                } else if (sizeof($req->all()[0]) == 12) {
                    $vol_data_12 = DB::select("SELECT timing, $volume_1, $volume_2,$volume_3,$volume_4,$volume_5,$volume_6,$volume_7,$volume_8,$volume_9,$volume_10,$volume_11,$volume_12 FROM dt_aio WHERE timing BETWEEN '$new_date1' AND '$new_date2' AND dt_id MOD '$interval' = 0 ORDER BY dt_id ASC");
                } else if (sizeof($req->all()[0]) == 13) {
                    $db_data13 = DB::select("SELECT timing, $volume_1, $volume_2,$volume_3,$volume_4,$volume_5,$volume_6,$volume_7,$volume_8,$volume_9,$volume_10,$volume_11,$volume_12,$volume_13 FROM dt_aio WHERE timing BETWEEN '$new_date1' AND '$new_date2' AND dt_id MOD '$interval' = 0 ORDER BY dt_id ASC");
                } else if (sizeof($req->all()[0]) == 14) {
                    $vol_data_14 = DB::select("SELECT timing, $volume_1, $volume_2,$volume_3,$volume_4,$volume_5,$volume_6,$volume_7,$volume_8,$volume_9,$volume_10,$volume_11,$volume_12,$volume_13,$volume_14 FROM dt_aio WHERE timing BETWEEN '$new_date1' AND '$new_date2' AND dt_id MOD '$interval' = 0 ORDER BY dt_id ASC");
                } else if (sizeof($req->all()[0]) == 15) {
                    $vol_data_15 = DB::select("SELECT timing, $volume_1, $volume_2,$volume_3,$volume_4,$volume_5,$volume_6,$volume_7,$volume_8,$volume_9,$volume_10,$volume_11,$volume_12,$volume_13,$volume_14,$volume_15 FROM dt_aio WHERE timing BETWEEN '$new_date1' AND '$new_date2' AND dt_id MOD '$interval' = 0 ORDER BY dt_id ASC");
                } else if (sizeof($req->all()[0]) == 16) {
                    $vol_data_16 = DB::select("SELECT timing, $volume_1, $volume_2,$volume_3,$volume_4,$volume_5,$volume_6,$volume_7,$volume_8,$volume_9,$volume_10,$volume_11,$volume_12,$volume_13,$volume_14,$volume_15,$volume_16 FROM dt_aio WHERE timing BETWEEN '$new_date1' AND '$new_date2' AND dt_id MOD '$interval' = 0 ORDER BY dt_id ASC");
                }
            }
        }
        // For Temperature
        if ($timeCondition == '1') {
            if (sizeof($req->all()[5]) == 1) {
                $tmp_db_data_1 = DB::select("SELECT timing, $tmp_val_1 FROM dt_aio WHERE timing > now() - interval 24 hour AND dt_id MOD '$interval' = 0");
            } else if (sizeof($req->all()[5]) == 2) {
                $tmp_db_data_2 = DB::select("SELECT timing, $tmp_val_1, $tmp_val_2 FROM dt_aio WHERE timing > now() - interval 24 hour AND dt_id MOD '$interval' = 0");
            } else if (sizeof($req->all()[5]) == 3) {
                $tmp_db_data_3 = DB::select("SELECT timing, $tmp_val_1, $tmp_val_2,$tmp_val_3 FROM dt_aio WHERE timing > now() - interval 24 hour AND dt_id MOD '$interval' = 0");
            } else if (sizeof($req->all()[5]) == 4) {
                $tmp_db_data_4 = DB::select("SELECT timing, $tmp_val_1, $tmp_val_2,$tmp_val_3,$tmp_val_4 FROM dt_aio WHERE timing > now() - interval 24 hour AND dt_id MOD '$interval' = 0");
            } else if (sizeof($req->all()[5]) == 5) {
                $tmp_db_data_5 = DB::select("SELECT timing, $tmp_val_1, $tmp_val_2,$tmp_val_3,$tmp_val_4,$tmp_val_5 FROM dt_aio WHERE timing > now() - interval 24 hour AND dt_id MOD '$interval' = 0");
            } else if (sizeof($req->all()[5]) == 6) {
                $tmp_db_data_6 = DB::select("SELECT timing, $tmp_val_1, $tmp_val_2,$tmp_val_3,$tmp_val_4,$tmp_val_5,$tmp_val_6 FROM dt_aio WHERE timing > now() - interval 24 hour AND dt_id MOD '$interval' = 0");
            } else if (sizeof($req->all()[5]) == 7) {
                $tmp_db_data_7 = DB::select("SELECT timing, $tmp_val_1, $tmp_val_2,$tmp_val_3,$tmp_val_4,$tmp_val_5,$tmp_val_6,$tmp_val_7 FROM dt_aio WHERE timing > now() - interval 24 hour AND dt_id MOD '$interval' = 0");
            } else if (sizeof($req->all()[5]) == 8) {
                $tmp_db_data_8 = DB::select("SELECT timing, $tmp_val_1, $tmp_val_2,$tmp_val_3,$tmp_val_4,$tmp_val_5,$tmp_val_6,$tmp_val_7,$tmp_val_8 FROM dt_aio WHERE timing > now() - interval 24 hour AND dt_id MOD '$interval' = 0");
            } else if (sizeof($req->all()[5]) == 9) {
                $tmp_db_data_9 = DB::select("SELECT timing, $tmp_val_1, $tmp_val_2,$tmp_val_3,$tmp_val_4,$tmp_val_5,$tmp_val_6,$tmp_val_7,$tmp_val_8,$tmp_val_9 FROM dt_aio WHERE timing > now() - interval 24 hour AND dt_id MOD '$interval' = 0");
            } else if (sizeof($req->all()[5]) == 10) {
                $tmp_db_data_10 = DB::select("SELECT timing, $tmp_val_1, $tmp_val_2,$tmp_val_3,$tmp_val_4,$tmp_val_5,$tmp_val_6,$tmp_val_7,$tmp_val_8,$tmp_val_9,$tmp_val_10 FROM dt_aio WHERE timing > now() - interval 24 hour AND dt_id MOD '$interval' = 0");
            } else if (sizeof($req->all()[5]) == 11) {
                $tmp_db_data_11 = DB::select("SELECT timing, $tmp_val_1, $tmp_val_2,$tmp_val_3,$tmp_val_4,$tmp_val_5,$tmp_val_6,$tmp_val_7,$tmp_val_8,$tmp_val_9,$tmp_val_10,$tmp_val_11 FROM dt_aio WHERE timing > now() - interval 24 hour AND dt_id MOD '$interval' = 0");
            } else if (sizeof($req->all()[5]) == 12) {
                $tmp_db_data_12 = DB::select("SELECT timing, $tmp_val_1, $tmp_val_2,$tmp_val_3,$tmp_val_4,$tmp_val_5,$tmp_val_6,$tmp_val_7,$tmp_val_8,$tmp_val_9,$tmp_val_10,$tmp_val_11,$tmp_val_12 FROM dt_aio WHERE timing > now() - interval 24 hour AND dt_id MOD '$interval' = 0");
            } else if (sizeof($req->all()[5]) == 13) {
                $db_data13 = DB::select("SELECT timing, $tmp_val_1, $tmp_val_2,$tmp_val_3,$tmp_val_4,$tmp_val_5,$tmp_val_6,$tmp_val_7,$tmp_val_8,$tmp_val_9,$tmp_val_10,$tmp_val_11,$tmp_val_12,$tmp_val_13 FROM dt_aio WHERE timing > now() - interval 24 hour AND dt_id MOD '$interval' = 0");
            } else if (sizeof($req->all()[5]) == 14) {
                $tmp_db_data_14 = DB::select("SELECT timing, $tmp_val_1, $tmp_val_2,$tmp_val_3,$tmp_val_4,$tmp_val_5,$tmp_val_6,$tmp_val_7,$tmp_val_8,$tmp_val_9,$tmp_val_10,$tmp_val_11,$tmp_val_12,$tmp_val_13,$tmp_val_14 FROM dt_aio WHERE timing > now() - interval 24 hour AND dt_id MOD '$interval' = 0");
            } else if (sizeof($req->all()[5]) == 15) {
                $tmp_db_data_15 = DB::select("SELECT timing, $tmp_val_1, $tmp_val_2,$tmp_val_3,$tmp_val_4,$tmp_val_5,$tmp_val_6,$tmp_val_7,$tmp_val_8,$tmp_val_9,$tmp_val_10,$tmp_val_11,$tmp_val_12,$tmp_val_13,$tmp_val_14,$tmp_val_15 FROM dt_aio WHERE timing > now() - interval 24 hour AND dt_id MOD '$interval' = 0");
            } else if (sizeof($req->all()[5]) == 16) {
                $tmp_db_data_16 = DB::select("SELECT timing, $tmp_val_1, $tmp_val_2,$tmp_val_3,$tmp_val_4,$tmp_val_5,$tmp_val_6,$tmp_val_7,$tmp_val_8,$tmp_val_9,$tmp_val_10,$tmp_val_11,$tmp_val_12,$tmp_val_13,$tmp_val_14,$tmp_val_15,$tmp_val_16 FROM dt_aio WHERE timing > now() - interval 24 hour AND dt_id MOD '$interval' = 0");
            }
        }elseif ($timeCondition == '2') {
            if (sizeof($req->all()[5]) == 1) {
                $tmp_db_data_1 = DB::select("SELECT timing, $tmp_val_1 FROM dt_aio WHERE timing BETWEEN '$con_date4' AND '$con_date'  ORDER BY dt_id ASC");
            } else if (sizeof($req->all()[5]) == 2) {
                $tmp_db_data_2 = DB::select("SELECT timing, $tmp_val_1, $tmp_val_2 FROM dt_aio WHERE timing BETWEEN '$con_date4' AND '$con_date'  ORDER BY dt_id ASC");
            } else if (sizeof($req->all()[5]) == 3) {
                $tmp_db_data_3 = DB::select("SELECT timing, $tmp_val_1, $tmp_val_2,$tmp_val_3 FROM dt_aio WHERE timing BETWEEN '$con_date4' AND '$con_date'  ORDER BY dt_id ASC");
            } else if (sizeof($req->all()[5]) == 4) {
                $tmp_db_data_4 = DB::select("SELECT timing, $tmp_val_1, $tmp_val_2,$tmp_val_3,$tmp_val_4 FROM dt_aio WHERE timing BETWEEN '$con_date4' AND '$con_date'  ORDER BY dt_id ASC");
            } else if (sizeof($req->all()[5]) == 5) {
                $tmp_db_data_5 = DB::select("SELECT timing, $tmp_val_1, $tmp_val_2,$tmp_val_3,$tmp_val_4,$tmp_val_5 FROM dt_aio WHERE timing BETWEEN '$con_date4' AND '$con_date'  ORDER BY dt_id ASC");
            } else if (sizeof($req->all()[5]) == 6) {
                $tmp_db_data_6 = DB::select("SELECT timing, $tmp_val_1, $tmp_val_2,$tmp_val_3,$tmp_val_4,$tmp_val_5,$tmp_val_6 FROM dt_aio WHERE timing BETWEEN '$con_date4' AND '$con_date'  ORDER BY dt_id ASC");
            } else if (sizeof($req->all()[5]) == 7) {
                $tmp_db_data_7 = DB::select("SELECT timing, $tmp_val_1, $tmp_val_2,$tmp_val_3,$tmp_val_4,$tmp_val_5,$tmp_val_6,$tmp_val_7 FROM dt_aio WHERE timing BETWEEN '$con_date4' AND '$con_date'  ORDER BY dt_id ASC");
            } else if (sizeof($req->all()[5]) == 8) {
                $tmp_db_data_8 = DB::select("SELECT timing, $tmp_val_1, $tmp_val_2,$tmp_val_3,$tmp_val_4,$tmp_val_5,$tmp_val_6,$tmp_val_7,$tmp_val_8 FROM dt_aio WHERE timing BETWEEN '$con_date4' AND '$con_date'  ORDER BY dt_id ASC");
            } else if (sizeof($req->all()[5]) == 9) {
                $tmp_db_data_9 = DB::select("SELECT timing, $tmp_val_1, $tmp_val_2,$tmp_val_3,$tmp_val_4,$tmp_val_5,$tmp_val_6,$tmp_val_7,$tmp_val_8,$tmp_val_9 FROM dt_aio WHERE timing BETWEEN '$con_date4' AND '$con_date'  ORDER BY dt_id ASC");
            } else if (sizeof($req->all()[5]) == 10) {
                $tmp_db_data_10 = DB::select("SELECT timing, $tmp_val_1, $tmp_val_2,$tmp_val_3,$tmp_val_4,$tmp_val_5,$tmp_val_6,$tmp_val_7,$tmp_val_8,$tmp_val_9,$tmp_val_10 FROM dt_aio WHERE timing BETWEEN '$con_date4' AND '$con_date'  ORDER BY dt_id ASC");
            } else if (sizeof($req->all()[5]) == 11) {
                $tmp_db_data_11 = DB::select("SELECT timing, $tmp_val_1, $tmp_val_2,$tmp_val_3,$tmp_val_4,$tmp_val_5,$tmp_val_6,$tmp_val_7,$tmp_val_8,$tmp_val_9,$tmp_val_10,$tmp_val_11 FROM dt_aio WHERE timing BETWEEN '$con_date4' AND '$con_date'  ORDER BY dt_id ASC");
            } else if (sizeof($req->all()[5]) == 12) {
                $tmp_db_data_12 = DB::select("SELECT timing, $tmp_val_1, $tmp_val_2,$tmp_val_3,$tmp_val_4,$tmp_val_5,$tmp_val_6,$tmp_val_7,$tmp_val_8,$tmp_val_9,$tmp_val_10,$tmp_val_11,$tmp_val_12 FROM dt_aio WHERE timing BETWEEN '$con_date4' AND '$con_date'  ORDER BY dt_id ASC");
            } else if (sizeof($req->all()[5]) == 13) {
                $db_data13 = DB::select("SELECT timing, $tmp_val_1, $tmp_val_2,$tmp_val_3,$tmp_val_4,$tmp_val_5,$tmp_val_6,$tmp_val_7,$tmp_val_8,$tmp_val_9,$tmp_val_10,$tmp_val_11,$tmp_val_12,$tmp_val_13 FROM dt_aio WHERE timing BETWEEN '$con_date4' AND '$con_date'  ORDER BY dt_id ASC");
            } else if (sizeof($req->all()[5]) == 14) {
                $tmp_db_data_14 = DB::select("SELECT timing, $tmp_val_1, $tmp_val_2,$tmp_val_3,$tmp_val_4,$tmp_val_5,$tmp_val_6,$tmp_val_7,$tmp_val_8,$tmp_val_9,$tmp_val_10,$tmp_val_11,$tmp_val_12,$tmp_val_13,$tmp_val_14 FROM dt_aio WHERE timing BETWEEN '$con_date4' AND '$con_date'  ORDER BY dt_id ASC");
            } else if (sizeof($req->all()[5]) == 15) {
                $tmp_db_data_15 = DB::select("SELECT timing, $tmp_val_1, $tmp_val_2,$tmp_val_3,$tmp_val_4,$tmp_val_5,$tmp_val_6,$tmp_val_7,$tmp_val_8,$tmp_val_9,$tmp_val_10,$tmp_val_11,$tmp_val_12,$tmp_val_13,$tmp_val_14,$tmp_val_15 FROM dt_aio WHERE timing BETWEEN '$con_date4' AND '$con_date'  ORDER BY dt_id ASC");
            } else if (sizeof($req->all()[5]) == 16) {
                $tmp_db_data_16 = DB::select("SELECT timing, $tmp_val_1, $tmp_val_2,$tmp_val_3,$tmp_val_4,$tmp_val_5,$tmp_val_6,$tmp_val_7,$tmp_val_8,$tmp_val_9,$tmp_val_10,$tmp_val_11,$tmp_val_12,$tmp_val_13,$tmp_val_14,$tmp_val_15,$tmp_val_16 FROM dt_aio WHERE timing BETWEEN '$con_date4' AND '$con_date'  ORDER BY dt_id ASC");
            }
        }elseif ($timeCondition == '3') {
            if (sizeof($req->all()[5]) == 1) {
                $tmp_db_data_1 = DB::select("SELECT timing, $tmp_val_1 FROM dt_aio WHERE timing BETWEEN '$con_date2' AND '$con_date' ORDER BY dt_id ASC");
            } else if (sizeof($req->all()[5]) == 2) {
                $tmp_db_data_2 = DB::select("SELECT timing, $tmp_val_1, $tmp_val_2 FROM dt_aio WHERE timing BETWEEN '$con_date2' AND '$con_date' ORDER BY dt_id ASC");
            } else if (sizeof($req->all()[5]) == 3) {
                $tmp_db_data_3 = DB::select("SELECT timing, $tmp_val_1, $tmp_val_2,$tmp_val_3 FROM dt_aio WHERE timing BETWEEN '$con_date2' AND '$con_date' ORDER BY dt_id ASC");
            } else if (sizeof($req->all()[5]) == 4) {
                $tmp_db_data_4 = DB::select("SELECT timing, $tmp_val_1, $tmp_val_2,$tmp_val_3,$tmp_val_4 FROM dt_aio WHERE timing BETWEEN '$con_date2' AND '$con_date' ORDER BY dt_id ASC");
            } else if (sizeof($req->all()[5]) == 5) {
                $tmp_db_data_5 = DB::select("SELECT timing, $tmp_val_1, $tmp_val_2,$tmp_val_3,$tmp_val_4,$tmp_val_5 FROM dt_aio WHERE timing BETWEEN '$con_date2' AND '$con_date' ORDER BY dt_id ASC");
            } else if (sizeof($req->all()[5]) == 6) {
                $tmp_db_data_6 = DB::select("SELECT timing, $tmp_val_1, $tmp_val_2,$tmp_val_3,$tmp_val_4,$tmp_val_5,$tmp_val_6 FROM dt_aio WHERE timing BETWEEN '$con_date2' AND '$con_date' ORDER BY dt_id ASC");
            } else if (sizeof($req->all()[5]) == 7) {
                $tmp_db_data_7 = DB::select("SELECT timing, $tmp_val_1, $tmp_val_2,$tmp_val_3,$tmp_val_4,$tmp_val_5,$tmp_val_6,$tmp_val_7 FROM dt_aio WHERE timing BETWEEN '$con_date2' AND '$con_date' ORDER BY dt_id ASC");
            } else if (sizeof($req->all()[5]) == 8) {
                $tmp_db_data_8 = DB::select("SELECT timing, $tmp_val_1, $tmp_val_2,$tmp_val_3,$tmp_val_4,$tmp_val_5,$tmp_val_6,$tmp_val_7,$tmp_val_8 FROM dt_aio WHERE timing BETWEEN '$con_date2' AND '$con_date' ORDER BY dt_id ASC");
            } else if (sizeof($req->all()[5]) == 9) {
                $tmp_db_data_9 = DB::select("SELECT timing, $tmp_val_1, $tmp_val_2,$tmp_val_3,$tmp_val_4,$tmp_val_5,$tmp_val_6,$tmp_val_7,$tmp_val_8,$tmp_val_9 FROM dt_aio WHERE timing BETWEEN '$con_date2' AND '$con_date' ORDER BY dt_id ASC");
            } else if (sizeof($req->all()[5]) == 10) {
                $tmp_db_data_10 = DB::select("SELECT timing, $tmp_val_1, $tmp_val_2,$tmp_val_3,$tmp_val_4,$tmp_val_5,$tmp_val_6,$tmp_val_7,$tmp_val_8,$tmp_val_9,$tmp_val_10 FROM dt_aio WHERE timing BETWEEN '$con_date2' AND '$con_date' ORDER BY dt_id ASC");
            } else if (sizeof($req->all()[5]) == 11) {
                $tmp_db_data_11 = DB::select("SELECT timing, $tmp_val_1, $tmp_val_2,$tmp_val_3,$tmp_val_4,$tmp_val_5,$tmp_val_6,$tmp_val_7,$tmp_val_8,$tmp_val_9,$tmp_val_10,$tmp_val_11 FROM dt_aio WHERE timing BETWEEN '$con_date2' AND '$con_date' ORDER BY dt_id ASC");
            } else if (sizeof($req->all()[5]) == 12) {
                $tmp_db_data_12 = DB::select("SELECT timing, $tmp_val_1, $tmp_val_2,$tmp_val_3,$tmp_val_4,$tmp_val_5,$tmp_val_6,$tmp_val_7,$tmp_val_8,$tmp_val_9,$tmp_val_10,$tmp_val_11,$tmp_val_12 FROM dt_aio WHERE timing BETWEEN '$con_date2' AND '$con_date' ORDER BY dt_id ASC");
            } else if (sizeof($req->all()[5]) == 13) {
                $db_data13 = DB::select("SELECT timing, $tmp_val_1, $tmp_val_2,$tmp_val_3,$tmp_val_4,$tmp_val_5,$tmp_val_6,$tmp_val_7,$tmp_val_8,$tmp_val_9,$tmp_val_10,$tmp_val_11,$tmp_val_12,$tmp_val_13 FROM dt_aio WHERE timing BETWEEN '$con_date2' AND '$con_date' ORDER BY dt_id ASC");
            } else if (sizeof($req->all()[5]) == 14) {
                $tmp_db_data_14 = DB::select("SELECT timing, $tmp_val_1, $tmp_val_2,$tmp_val_3,$tmp_val_4,$tmp_val_5,$tmp_val_6,$tmp_val_7,$tmp_val_8,$tmp_val_9,$tmp_val_10,$tmp_val_11,$tmp_val_12,$tmp_val_13,$tmp_val_14 FROM dt_aio WHERE timing BETWEEN '$con_date2' AND '$con_date' ORDER BY dt_id ASC");
            } else if (sizeof($req->all()[5]) == 15) {
                $tmp_db_data_15 = DB::select("SELECT timing, $tmp_val_1, $tmp_val_2,$tmp_val_3,$tmp_val_4,$tmp_val_5,$tmp_val_6,$tmp_val_7,$tmp_val_8,$tmp_val_9,$tmp_val_10,$tmp_val_11,$tmp_val_12,$tmp_val_13,$tmp_val_14,$tmp_val_15 FROM dt_aio WHERE timing BETWEEN '$con_date2' AND '$con_date' ORDER BY dt_id ASC");
            } else if (sizeof($req->all()[5]) == 16) {
                $tmp_db_data_16 = DB::select("SELECT timing, $tmp_val_1, $tmp_val_2,$tmp_val_3,$tmp_val_4,$tmp_val_5,$tmp_val_6,$tmp_val_7,$tmp_val_8,$tmp_val_9,$tmp_val_10,$tmp_val_11,$tmp_val_12,$tmp_val_13,$tmp_val_14,$tmp_val_15,$tmp_val_16 FROM dt_aio WHERE timing BETWEEN '$con_date2' AND '$con_date' ORDER BY dt_id ASC");
            }
        }elseif ($timeCondition == '4') {
            if (sizeof($req->all()[5]) == 1) {
                $tmp_db_data_1 = DB::select("SELECT timing, $tmp_val_1 FROM dt_aio WHERE timing BETWEEN '$con_date3' AND '$con_date'  ORDER BY dt_id ASC");
            } else if (sizeof($req->all()[5]) == 2) {
                $tmp_db_data_2 = DB::select("SELECT timing, $tmp_val_1, $tmp_val_2 FROM dt_aio WHERE timing BETWEEN '$con_date3' AND '$con_date'  ORDER BY dt_id ASC");
            } else if (sizeof($req->all()[5]) == 3) {
                $tmp_db_data_3 = DB::select("SELECT timing, $tmp_val_1, $tmp_val_2,$tmp_val_3 FROM dt_aio WHERE timing BETWEEN '$con_date3' AND '$con_date'  ORDER BY dt_id ASC");
            } else if (sizeof($req->all()[5]) == 4) {
                $tmp_db_data_4 = DB::select("SELECT timing, $tmp_val_1, $tmp_val_2,$tmp_val_3,$tmp_val_4 FROM dt_aio WHERE timing BETWEEN '$con_date3' AND '$con_date'  ORDER BY dt_id ASC");
            } else if (sizeof($req->all()[5]) == 5) {
                $tmp_db_data_5 = DB::select("SELECT timing, $tmp_val_1, $tmp_val_2,$tmp_val_3,$tmp_val_4,$tmp_val_5 FROM dt_aio WHERE timing BETWEEN '$con_date3' AND '$con_date'  ORDER BY dt_id ASC");
            } else if (sizeof($req->all()[5]) == 6) {
                $tmp_db_data_6 = DB::select("SELECT timing, $tmp_val_1, $tmp_val_2,$tmp_val_3,$tmp_val_4,$tmp_val_5,$tmp_val_6 FROM dt_aio WHERE timing BETWEEN '$con_date3' AND '$con_date'  ORDER BY dt_id ASC");
            } else if (sizeof($req->all()[5]) == 7) {
                $tmp_db_data_7 = DB::select("SELECT timing, $tmp_val_1, $tmp_val_2,$tmp_val_3,$tmp_val_4,$tmp_val_5,$tmp_val_6,$tmp_val_7 FROM dt_aio WHERE timing BETWEEN '$con_date3' AND '$con_date'  ORDER BY dt_id ASC");
            } else if (sizeof($req->all()[5]) == 8) {
                $tmp_db_data_8 = DB::select("SELECT timing, $tmp_val_1, $tmp_val_2,$tmp_val_3,$tmp_val_4,$tmp_val_5,$tmp_val_6,$tmp_val_7,$tmp_val_8 FROM dt_aio WHERE timing BETWEEN '$con_date3' AND '$con_date'  ORDER BY dt_id ASC");
            } else if (sizeof($req->all()[5]) == 9) {
                $tmp_db_data_9 = DB::select("SELECT timing, $tmp_val_1, $tmp_val_2,$tmp_val_3,$tmp_val_4,$tmp_val_5,$tmp_val_6,$tmp_val_7,$tmp_val_8,$tmp_val_9 FROM dt_aio WHERE timing BETWEEN '$con_date3' AND '$con_date'  ORDER BY dt_id ASC");
            } else if (sizeof($req->all()[5]) == 10) {
                $tmp_db_data_10 = DB::select("SELECT timing, $tmp_val_1, $tmp_val_2,$tmp_val_3,$tmp_val_4,$tmp_val_5,$tmp_val_6,$tmp_val_7,$tmp_val_8,$tmp_val_9,$tmp_val_10 FROM dt_aio WHERE timing BETWEEN '$con_date3' AND '$con_date'  ORDER BY dt_id ASC");
            } else if (sizeof($req->all()[5]) == 11) {
                $tmp_db_data_11 = DB::select("SELECT timing, $tmp_val_1, $tmp_val_2,$tmp_val_3,$tmp_val_4,$tmp_val_5,$tmp_val_6,$tmp_val_7,$tmp_val_8,$tmp_val_9,$tmp_val_10,$tmp_val_11 FROM dt_aio WHERE timing BETWEEN '$con_date3' AND '$con_date'  ORDER BY dt_id ASC");
            } else if (sizeof($req->all()[5]) == 12) {
                $tmp_db_data_12 = DB::select("SELECT timing, $tmp_val_1, $tmp_val_2,$tmp_val_3,$tmp_val_4,$tmp_val_5,$tmp_val_6,$tmp_val_7,$tmp_val_8,$tmp_val_9,$tmp_val_10,$tmp_val_11,$tmp_val_12 FROM dt_aio WHERE timing BETWEEN '$con_date3' AND '$con_date'  ORDER BY dt_id ASC");
            } else if (sizeof($req->all()[5]) == 13) {
                $db_data13 = DB::select("SELECT timing, $tmp_val_1, $tmp_val_2,$tmp_val_3,$tmp_val_4,$tmp_val_5,$tmp_val_6,$tmp_val_7,$tmp_val_8,$tmp_val_9,$tmp_val_10,$tmp_val_11,$tmp_val_12,$tmp_val_13 FROM dt_aio WHERE timing BETWEEN '$con_date3' AND '$con_date'  ORDER BY dt_id ASC");
            } else if (sizeof($req->all()[5]) == 14) {
                $tmp_db_data_14 = DB::select("SELECT timing, $tmp_val_1, $tmp_val_2,$tmp_val_3,$tmp_val_4,$tmp_val_5,$tmp_val_6,$tmp_val_7,$tmp_val_8,$tmp_val_9,$tmp_val_10,$tmp_val_11,$tmp_val_12,$tmp_val_13,$tmp_val_14 FROM dt_aio WHERE timing BETWEEN '$con_date3' AND '$con_date'  ORDER BY dt_id ASC");
            } else if (sizeof($req->all()[5]) == 15) {
                $tmp_db_data_15 = DB::select("SELECT timing, $tmp_val_1, $tmp_val_2,$tmp_val_3,$tmp_val_4,$tmp_val_5,$tmp_val_6,$tmp_val_7,$tmp_val_8,$tmp_val_9,$tmp_val_10,$tmp_val_11,$tmp_val_12,$tmp_val_13,$tmp_val_14,$tmp_val_15 FROM dt_aio WHERE timing BETWEEN '$con_date3' AND '$con_date'  ORDER BY dt_id ASC");
            } else if (sizeof($req->all()[5]) == 16) {
                $tmp_db_data_16 = DB::select("SELECT timing, $tmp_val_1, $tmp_val_2,$tmp_val_3,$tmp_val_4,$tmp_val_5,$tmp_val_6,$tmp_val_7,$tmp_val_8,$tmp_val_9,$tmp_val_10,$tmp_val_11,$tmp_val_12,$tmp_val_13,$tmp_val_14,$tmp_val_15,$tmp_val_16 FROM dt_aio WHERE timing BETWEEN '$con_date3' AND '$con_date'  ORDER BY dt_id ASC");
            }
        }elseif ($timeCondition == '5') {
            if (sizeof($req->all()[5]) == 1) {
                $tmp_db_data_1 = DB::select("SELECT timing, $tmp_val_1 FROM dt_aio WHERE timing BETWEEN '$new_date1' AND '$new_date2' AND dt_id MOD '$interval' = 0 ORDER BY dt_id ASC");
            } else if (sizeof($req->all()[5]) == 2) {
                $tmp_db_data_2 = DB::select("SELECT timing, $tmp_val_1, $tmp_val_2 FROM dt_aio WHERE timing BETWEEN '$new_date1' AND '$new_date2' AND dt_id MOD '$interval' = 0 ORDER BY dt_id ASC");
            } else if (sizeof($req->all()[5]) == 3) {
                $tmp_db_data_3 = DB::select("SELECT timing, $tmp_val_1, $tmp_val_2,$tmp_val_3 FROM dt_aio WHERE timing BETWEEN '$new_date1' AND '$new_date2' AND dt_id MOD '$interval' = 0 ORDER BY dt_id ASC");
            } else if (sizeof($req->all()[5]) == 4) {
                $tmp_db_data_4 = DB::select("SELECT timing, $tmp_val_1, $tmp_val_2,$tmp_val_3,$tmp_val_4 FROM dt_aio WHERE timing BETWEEN '$new_date1' AND '$new_date2' AND dt_id MOD '$interval' = 0 ORDER BY dt_id ASC");
            } else if (sizeof($req->all()[5]) == 5) {
                $tmp_db_data_5 = DB::select("SELECT timing, $tmp_val_1, $tmp_val_2,$tmp_val_3,$tmp_val_4,$tmp_val_5 FROM dt_aio WHERE timing BETWEEN '$new_date1' AND '$new_date2' AND dt_id MOD '$interval' = 0 ORDER BY dt_id ASC");
            } else if (sizeof($req->all()[5]) == 6) {
                $tmp_db_data_6 = DB::select("SELECT timing, $tmp_val_1, $tmp_val_2,$tmp_val_3,$tmp_val_4,$tmp_val_5,$tmp_val_6 FROM dt_aio WHERE timing BETWEEN '$new_date1' AND '$new_date2' AND dt_id MOD '$interval' = 0 ORDER BY dt_id ASC");
            } else if (sizeof($req->all()[5]) == 7) {
                $tmp_db_data_7 = DB::select("SELECT timing, $tmp_val_1, $tmp_val_2,$tmp_val_3,$tmp_val_4,$tmp_val_5,$tmp_val_6,$tmp_val_7 FROM dt_aio WHERE timing BETWEEN '$new_date1' AND '$new_date2' AND dt_id MOD '$interval' = 0 ORDER BY dt_id ASC");
            } else if (sizeof($req->all()[5]) == 8) {
                $tmp_db_data_8 = DB::select("SELECT timing, $tmp_val_1, $tmp_val_2,$tmp_val_3,$tmp_val_4,$tmp_val_5,$tmp_val_6,$tmp_val_7,$tmp_val_8 FROM dt_aio WHERE timing BETWEEN '$new_date1' AND '$new_date2' AND dt_id MOD '$interval' = 0 ORDER BY dt_id ASC");
            } else if (sizeof($req->all()[5]) == 9) {
                $tmp_db_data_9 = DB::select("SELECT timing, $tmp_val_1, $tmp_val_2,$tmp_val_3,$tmp_val_4,$tmp_val_5,$tmp_val_6,$tmp_val_7,$tmp_val_8,$tmp_val_9 FROM dt_aio WHERE timing BETWEEN '$new_date1' AND '$new_date2' AND dt_id MOD '$interval' = 0 ORDER BY dt_id ASC");
            } else if (sizeof($req->all()[5]) == 10) {
                $tmp_db_data_10 = DB::select("SELECT timing, $tmp_val_1, $tmp_val_2,$tmp_val_3,$tmp_val_4,$tmp_val_5,$tmp_val_6,$tmp_val_7,$tmp_val_8,$tmp_val_9,$tmp_val_10 FROM dt_aio WHERE timing BETWEEN '$new_date1' AND '$new_date2' AND dt_id MOD '$interval' = 0 ORDER BY dt_id ASC");
            } else if (sizeof($req->all()[5]) == 11) {
                $tmp_db_data_11 = DB::select("SELECT timing, $tmp_val_1, $tmp_val_2,$tmp_val_3,$tmp_val_4,$tmp_val_5,$tmp_val_6,$tmp_val_7,$tmp_val_8,$tmp_val_9,$tmp_val_10,$tmp_val_11 FROM dt_aio WHERE timing BETWEEN '$new_date1' AND '$new_date2' AND dt_id MOD '$interval' = 0 ORDER BY dt_id ASC");
            } else if (sizeof($req->all()[5]) == 12) {
                $tmp_db_data_12 = DB::select("SELECT timing, $tmp_val_1, $tmp_val_2,$tmp_val_3,$tmp_val_4,$tmp_val_5,$tmp_val_6,$tmp_val_7,$tmp_val_8,$tmp_val_9,$tmp_val_10,$tmp_val_11,$tmp_val_12 FROM dt_aio WHERE timing BETWEEN '$new_date1' AND '$new_date2' AND dt_id MOD '$interval' = 0 ORDER BY dt_id ASC");
            } else if (sizeof($req->all()[5]) == 13) {
                $db_data13 = DB::select("SELECT timing, $tmp_val_1, $tmp_val_2,$tmp_val_3,$tmp_val_4,$tmp_val_5,$tmp_val_6,$tmp_val_7,$tmp_val_8,$tmp_val_9,$tmp_val_10,$tmp_val_11,$tmp_val_12,$tmp_val_13 FROM dt_aio WHERE timing BETWEEN '$new_date1' AND '$new_date2' AND dt_id MOD '$interval' = 0 ORDER BY dt_id ASC");
            } else if (sizeof($req->all()[5]) == 14) {
                $tmp_db_data_14 = DB::select("SELECT timing, $tmp_val_1, $tmp_val_2,$tmp_val_3,$tmp_val_4,$tmp_val_5,$tmp_val_6,$tmp_val_7,$tmp_val_8,$tmp_val_9,$tmp_val_10,$tmp_val_11,$tmp_val_12,$tmp_val_13,$tmp_val_14 FROM dt_aio WHERE timing BETWEEN '$new_date1' AND '$new_date2' AND dt_id MOD '$interval' = 0 ORDER BY dt_id ASC");
            } else if (sizeof($req->all()[5]) == 15) {
                $tmp_db_data_15 = DB::select("SELECT timing, $tmp_val_1, $tmp_val_2,$tmp_val_3,$tmp_val_4,$tmp_val_5,$tmp_val_6,$tmp_val_7,$tmp_val_8,$tmp_val_9,$tmp_val_10,$tmp_val_11,$tmp_val_12,$tmp_val_13,$tmp_val_14,$tmp_val_15 FROM dt_aio WHERE timing BETWEEN '$new_date1' AND '$new_date2' AND dt_id MOD '$interval' = 0 ORDER BY dt_id ASC");
            } else if (sizeof($req->all()[5]) == 16) {
                $tmp_db_data_16 = DB::select("SELECT timing, $tmp_val_1, $tmp_val_2,$tmp_val_3,$tmp_val_4,$tmp_val_5,$tmp_val_6,$tmp_val_7,$tmp_val_8,$tmp_val_9,$tmp_val_10,$tmp_val_11,$tmp_val_12,$tmp_val_13,$tmp_val_14,$tmp_val_15,$tmp_val_16 FROM dt_aio WHERE timing BETWEEN '$new_date1' AND '$new_date2' AND dt_id MOD '$interval' = 0 ORDER BY dt_id ASC");
            }
        }
        // For Flow
        if ($timeCondition == '1') {
            if (sizeof($req->all()[6]) == 1) {
                $flow_db_data_1 = DB::select("SELECT timing, $flow_val_1 FROM dt_aio WHERE timing > now() - interval 24 hour AND dt_id MOD '$interval' = 0");
            } else if (sizeof($req->all()[6]) == 2) {
                $flow_db_data_2 = DB::select("SELECT timing, $flow_val_1, $flow_val_2 FROM dt_aio WHERE timing > now() - interval 24 hour AND dt_id MOD '$interval' = 0");
            } else if (sizeof($req->all()[6]) == 3) {
                $flow_db_data_3 = DB::select("SELECT timing, $flow_val_1, $flow_val_2,$flow_val_3 FROM dt_aio WHERE timing > now() - interval 24 hour AND dt_id MOD '$interval' = 0");
            } else if (sizeof($req->all()[6]) == 4) {
                $flow_db_data_4 = DB::select("SELECT timing, $flow_val_1, $flow_val_2,$flow_val_3,$flow_val_4 FROM dt_aio WHERE timing > now() - interval 24 hour AND dt_id MOD '$interval' = 0");
            } else if (sizeof($req->all()[6]) == 5) {
                $flow_db_data_5 = DB::select("SELECT timing, $flow_val_1, $flow_val_2,$flow_val_3,$flow_val_4,$flow_val_5 FROM dt_aio WHERE timing > now() - interval 24 hour AND dt_id MOD '$interval' = 0");
            } else if (sizeof($req->all()[6]) == 6) {
                $flow_db_data_6 = DB::select("SELECT timing, $flow_val_1, $flow_val_2,$flow_val_3,$flow_val_4,$flow_val_5,$flow_val_6 FROM dt_aio WHERE timing > now() - interval 24 hour AND dt_id MOD '$interval' = 0");
            } else if (sizeof($req->all()[6]) == 7) {
                $flow_db_data_7 = DB::select("SELECT timing, $flow_val_1, $flow_val_2,$flow_val_3,$flow_val_4,$flow_val_5,$flow_val_6,$flow_val_7 FROM dt_aio WHERE timing > now() - interval 24 hour AND dt_id MOD '$interval' = 0");
            } else if (sizeof($req->all()[6]) == 8) {
                $flow_db_data_8 = DB::select("SELECT timing, $flow_val_1, $flow_val_2,$flow_val_3,$flow_val_4,$flow_val_5,$flow_val_6,$flow_val_7,$flow_val_8 FROM dt_aio WHERE timing > now() - interval 24 hour AND dt_id MOD '$interval' = 0");
            } else if (sizeof($req->all()[6]) == 9) {
                $flow_db_data_9 = DB::select("SELECT timing, $flow_val_1, $flow_val_2,$flow_val_3,$flow_val_4,$flow_val_5,$flow_val_6,$flow_val_7,$flow_val_8,$flow_val_9 FROM dt_aio WHERE timing > now() - interval 24 hour AND dt_id MOD '$interval' = 0");
            } else if (sizeof($req->all()[6]) == 10) {
                $flow_db_data_10 = DB::select("SELECT timing, $flow_val_1, $flow_val_2,$flow_val_3,$flow_val_4,$flow_val_5,$flow_val_6,$flow_val_7,$flow_val_8,$flow_val_9,$flow_val_10 FROM dt_aio WHERE timing > now() - interval 24 hour AND dt_id MOD '$interval' = 0");
            } else if (sizeof($req->all()[6]) == 11) {
                $flow_db_data_11 = DB::select("SELECT timing, $flow_val_1, $flow_val_2,$flow_val_3,$flow_val_4,$flow_val_5,$flow_val_6,$flow_val_7,$flow_val_8,$flow_val_9,$flow_val_10,$flow_val_11 FROM dt_aio WHERE timing > now() - interval 24 hour AND dt_id MOD '$interval' = 0");
            } else if (sizeof($req->all()[6]) == 12) {
                $flow_db_data_12 = DB::select("SELECT timing, $flow_val_1, $flow_val_2,$flow_val_3,$flow_val_4,$flow_val_5,$flow_val_6,$flow_val_7,$flow_val_8,$flow_val_9,$flow_val_10,$flow_val_11,$flow_val_12 FROM dt_aio WHERE timing > now() - interval 24 hour AND dt_id MOD '$interval' = 0");
            } else if (sizeof($req->all()[6]) == 13) {
                $db_data13 = DB::select("SELECT timing, $flow_val_1, $flow_val_2,$flow_val_3,$flow_val_4,$flow_val_5,$flow_val_6,$flow_val_7,$flow_val_8,$flow_val_9,$flow_val_10,$flow_val_11,$flow_val_12,$flow_val_13 FROM dt_aio WHERE timing > now() - interval 24 hour AND dt_id MOD '$interval' = 0");
            } else if (sizeof($req->all()[6]) == 14) {
                $flow_db_data_14 = DB::select("SELECT timing, $flow_val_1, $flow_val_2,$flow_val_3,$flow_val_4,$flow_val_5,$flow_val_6,$flow_val_7,$flow_val_8,$flow_val_9,$flow_val_10,$flow_val_11,$flow_val_12,$flow_val_13,$flow_val_14 FROM dt_aio WHERE timing > now() - interval 24 hour AND dt_id MOD '$interval' = 0");
            } else if (sizeof($req->all()[6]) == 15) {
                $flow_db_data_15 = DB::select("SELECT timing, $flow_val_1, $flow_val_2,$flow_val_3,$flow_val_4,$flow_val_5,$flow_val_6,$flow_val_7,$flow_val_8,$flow_val_9,$flow_val_10,$flow_val_11,$flow_val_12,$flow_val_13,$flow_val_14,$flow_val_15 FROM dt_aio WHERE timing > now() - interval 24 hour AND dt_id MOD '$interval' = 0");
            } else if (sizeof($req->all()[6]) == 16) {
                $flow_db_data_16 = DB::select("SELECT timing, $flow_val_1, $flow_val_2,$flow_val_3,$flow_val_4,$flow_val_5,$flow_val_6,$flow_val_7,$flow_val_8,$flow_val_9,$flow_val_10,$flow_val_11,$flow_val_12,$flow_val_13,$flow_val_14,$flow_val_15,$flow_val_16 FROM dt_aio WHERE timing > now() - interval 24 hour AND dt_id MOD '$interval' = 0");
            }
        } elseif ($timeCondition == '2') {
            if (sizeof($req->all()[6]) == 1) {
                $flow_db_data_1 = DB::select("SELECT timing, $flow_val_1 FROM dt_aio WHERE timing BETWEEN '$con_date4' AND '$con_date'  ORDER BY dt_id ASC");
            } else if (sizeof($req->all()[6]) == 2) {
                $flow_db_data_2 = DB::select("SELECT timing, $flow_val_1, $flow_val_2 FROM dt_aio WHERE timing BETWEEN '$con_date4' AND '$con_date'  ORDER BY dt_id ASC");
            } else if (sizeof($req->all()[6]) == 3) {
                $flow_db_data_3 = DB::select("SELECT timing, $flow_val_1, $flow_val_2,$flow_val_3 FROM dt_aio WHERE timing BETWEEN '$con_date4' AND '$con_date'  ORDER BY dt_id ASC");
            } else if (sizeof($req->all()[6]) == 4) {
                $flow_db_data_4 = DB::select("SELECT timing, $flow_val_1, $flow_val_2,$flow_val_3,$flow_val_4 FROM dt_aio WHERE timing BETWEEN '$con_date4' AND '$con_date'  ORDER BY dt_id ASC");
            } else if (sizeof($req->all()[6]) == 5) {
                $flow_db_data_5 = DB::select("SELECT timing, $flow_val_1, $flow_val_2,$flow_val_3,$flow_val_4,$flow_val_5 FROM dt_aio WHERE timing BETWEEN '$con_date4' AND '$con_date'  ORDER BY dt_id ASC");
            } else if (sizeof($req->all()[6]) == 6) {
                $flow_db_data_6 = DB::select("SELECT timing, $flow_val_1, $flow_val_2,$flow_val_3,$flow_val_4,$flow_val_5,$flow_val_6 FROM dt_aio WHERE timing BETWEEN '$con_date4' AND '$con_date'  ORDER BY dt_id ASC");
            } else if (sizeof($req->all()[6]) == 7) {
                $flow_db_data_7 = DB::select("SELECT timing, $flow_val_1, $flow_val_2,$flow_val_3,$flow_val_4,$flow_val_5,$flow_val_6,$flow_val_7 FROM dt_aio WHERE timing BETWEEN '$con_date4' AND '$con_date'  ORDER BY dt_id ASC");
            } else if (sizeof($req->all()[6]) == 8) {
                $flow_db_data_8 = DB::select("SELECT timing, $flow_val_1, $flow_val_2,$flow_val_3,$flow_val_4,$flow_val_5,$flow_val_6,$flow_val_7,$flow_val_8 FROM dt_aio WHERE timing BETWEEN '$con_date4' AND '$con_date'  ORDER BY dt_id ASC");
            } else if (sizeof($req->all()[6]) == 9) {
                $flow_db_data_9 = DB::select("SELECT timing, $flow_val_1, $flow_val_2,$flow_val_3,$flow_val_4,$flow_val_5,$flow_val_6,$flow_val_7,$flow_val_8,$flow_val_9 FROM dt_aio WHERE timing BETWEEN '$con_date4' AND '$con_date'  ORDER BY dt_id ASC");
            } else if (sizeof($req->all()[6]) == 10) {
                $flow_db_data_10 = DB::select("SELECT timing, $flow_val_1, $flow_val_2,$flow_val_3,$flow_val_4,$flow_val_5,$flow_val_6,$flow_val_7,$flow_val_8,$flow_val_9,$flow_val_10 FROM dt_aio WHERE timing BETWEEN '$con_date4' AND '$con_date'  ORDER BY dt_id ASC");
            } else if (sizeof($req->all()[6]) == 11) {
                $flow_db_data_11 = DB::select("SELECT timing, $flow_val_1, $flow_val_2,$flow_val_3,$flow_val_4,$flow_val_5,$flow_val_6,$flow_val_7,$flow_val_8,$flow_val_9,$flow_val_10,$flow_val_11 FROM dt_aio WHERE timing BETWEEN '$con_date4' AND '$con_date'  ORDER BY dt_id ASC");
            } else if (sizeof($req->all()[6]) == 12) {
                $flow_db_data_12 = DB::select("SELECT timing, $flow_val_1, $flow_val_2,$flow_val_3,$flow_val_4,$flow_val_5,$flow_val_6,$flow_val_7,$flow_val_8,$flow_val_9,$flow_val_10,$flow_val_11,$flow_val_12 FROM dt_aio WHERE timing BETWEEN '$con_date4' AND '$con_date'  ORDER BY dt_id ASC");
            } else if (sizeof($req->all()[6]) == 13) {
                $db_data13 = DB::select("SELECT timing, $flow_val_1, $flow_val_2,$flow_val_3,$flow_val_4,$flow_val_5,$flow_val_6,$flow_val_7,$flow_val_8,$flow_val_9,$flow_val_10,$flow_val_11,$flow_val_12,$flow_val_13 FROM dt_aio WHERE timing BETWEEN '$con_date4' AND '$con_date'  ORDER BY dt_id ASC");
            } else if (sizeof($req->all()[6]) == 14) {
                $flow_db_data_14 = DB::select("SELECT timing, $flow_val_1, $flow_val_2,$flow_val_3,$flow_val_4,$flow_val_5,$flow_val_6,$flow_val_7,$flow_val_8,$flow_val_9,$flow_val_10,$flow_val_11,$flow_val_12,$flow_val_13,$flow_val_14 FROM dt_aio WHERE timing BETWEEN '$con_date4' AND '$con_date'  ORDER BY dt_id ASC");
            } else if (sizeof($req->all()[6]) == 15) {
                $flow_db_data_15 = DB::select("SELECT timing, $flow_val_1, $flow_val_2,$flow_val_3,$flow_val_4,$flow_val_5,$flow_val_6,$flow_val_7,$flow_val_8,$flow_val_9,$flow_val_10,$flow_val_11,$flow_val_12,$flow_val_13,$flow_val_14,$flow_val_15 FROM dt_aio WHERE timing BETWEEN '$con_date4' AND '$con_date'  ORDER BY dt_id ASC");
            } else if (sizeof($req->all()[6]) == 16) {
                $flow_db_data_16 = DB::select("SELECT timing, $flow_val_1, $flow_val_2,$flow_val_3,$flow_val_4,$flow_val_5,$flow_val_6,$flow_val_7,$flow_val_8,$flow_val_9,$flow_val_10,$flow_val_11,$flow_val_12,$flow_val_13,$flow_val_14,$flow_val_15,$flow_val_16 FROM dt_aio WHERE timing BETWEEN '$con_date4' AND '$con_date'  ORDER BY dt_id ASC");
            }
        } elseif ($timeCondition == '3') {
            if (sizeof($req->all()[6]) == 1) {
                $flow_db_data_1 = DB::select("SELECT timing, $flow_val_1 FROM dt_aio WHERE timing BETWEEN '$con_date2' AND '$con_date' ORDER BY dt_id ASC");
            } else if (sizeof($req->all()[6]) == 2) {
                $flow_db_data_2 = DB::select("SELECT timing, $flow_val_1, $flow_val_2 FROM dt_aio WHERE timing BETWEEN '$con_date2' AND '$con_date' ORDER BY dt_id ASC");
            } else if (sizeof($req->all()[6]) == 3) {
                $flow_db_data_3 = DB::select("SELECT timing, $flow_val_1, $flow_val_2,$flow_val_3 FROM dt_aio WHERE timing BETWEEN '$con_date2' AND '$con_date' ORDER BY dt_id ASC");
            } else if (sizeof($req->all()[6]) == 4) {
                $flow_db_data_4 = DB::select("SELECT timing, $flow_val_1, $flow_val_2,$flow_val_3,$flow_val_4 FROM dt_aio WHERE timing BETWEEN '$con_date2' AND '$con_date' ORDER BY dt_id ASC");
            } else if (sizeof($req->all()[6]) == 5) {
                $flow_db_data_5 = DB::select("SELECT timing, $flow_val_1, $flow_val_2,$flow_val_3,$flow_val_4,$flow_val_5 FROM dt_aio WHERE timing BETWEEN '$con_date2' AND '$con_date' ORDER BY dt_id ASC");
            } else if (sizeof($req->all()[6]) == 6) {
                $flow_db_data_6 = DB::select("SELECT timing, $flow_val_1, $flow_val_2,$flow_val_3,$flow_val_4,$flow_val_5,$flow_val_6 FROM dt_aio WHERE timing BETWEEN '$con_date2' AND '$con_date' ORDER BY dt_id ASC");
            } else if (sizeof($req->all()[6]) == 7) {
                $flow_db_data_7 = DB::select("SELECT timing, $flow_val_1, $flow_val_2,$flow_val_3,$flow_val_4,$flow_val_5,$flow_val_6,$flow_val_7 FROM dt_aio WHERE timing BETWEEN '$con_date2' AND '$con_date' ORDER BY dt_id ASC");
            } else if (sizeof($req->all()[6]) == 8) {
                $flow_db_data_8 = DB::select("SELECT timing, $flow_val_1, $flow_val_2,$flow_val_3,$flow_val_4,$flow_val_5,$flow_val_6,$flow_val_7,$flow_val_8 FROM dt_aio WHERE timing BETWEEN '$con_date2' AND '$con_date' ORDER BY dt_id ASC");
            } else if (sizeof($req->all()[6]) == 9) {
                $flow_db_data_9 = DB::select("SELECT timing, $flow_val_1, $flow_val_2,$flow_val_3,$flow_val_4,$flow_val_5,$flow_val_6,$flow_val_7,$flow_val_8,$flow_val_9 FROM dt_aio WHERE timing BETWEEN '$con_date2' AND '$con_date' ORDER BY dt_id ASC");
            } else if (sizeof($req->all()[6]) == 10) {
                $flow_db_data_10 = DB::select("SELECT timing, $flow_val_1, $flow_val_2,$flow_val_3,$flow_val_4,$flow_val_5,$flow_val_6,$flow_val_7,$flow_val_8,$flow_val_9,$flow_val_10 FROM dt_aio WHERE timing BETWEEN '$con_date2' AND '$con_date' ORDER BY dt_id ASC");
            } else if (sizeof($req->all()[6]) == 11) {
                $flow_db_data_11 = DB::select("SELECT timing, $flow_val_1, $flow_val_2,$flow_val_3,$flow_val_4,$flow_val_5,$flow_val_6,$flow_val_7,$flow_val_8,$flow_val_9,$flow_val_10,$flow_val_11 FROM dt_aio WHERE timing BETWEEN '$con_date2' AND '$con_date' ORDER BY dt_id ASC");
            } else if (sizeof($req->all()[6]) == 12) {
                $flow_db_data_12 = DB::select("SELECT timing, $flow_val_1, $flow_val_2,$flow_val_3,$flow_val_4,$flow_val_5,$flow_val_6,$flow_val_7,$flow_val_8,$flow_val_9,$flow_val_10,$flow_val_11,$flow_val_12 FROM dt_aio WHERE timing BETWEEN '$con_date2' AND '$con_date' ORDER BY dt_id ASC");
            } else if (sizeof($req->all()[6]) == 13) {
                $db_data13 = DB::select("SELECT timing, $flow_val_1, $flow_val_2,$flow_val_3,$flow_val_4,$flow_val_5,$flow_val_6,$flow_val_7,$flow_val_8,$flow_val_9,$flow_val_10,$flow_val_11,$flow_val_12,$flow_val_13 FROM dt_aio WHERE timing BETWEEN '$con_date2' AND '$con_date' ORDER BY dt_id ASC");
            } else if (sizeof($req->all()[6]) == 14) {
                $flow_db_data_14 = DB::select("SELECT timing, $flow_val_1, $flow_val_2,$flow_val_3,$flow_val_4,$flow_val_5,$flow_val_6,$flow_val_7,$flow_val_8,$flow_val_9,$flow_val_10,$flow_val_11,$flow_val_12,$flow_val_13,$flow_val_14 FROM dt_aio WHERE timing BETWEEN '$con_date2' AND '$con_date' ORDER BY dt_id ASC");
            } else if (sizeof($req->all()[6]) == 15) {
                $flow_db_data_15 = DB::select("SELECT timing, $flow_val_1, $flow_val_2,$flow_val_3,$flow_val_4,$flow_val_5,$flow_val_6,$flow_val_7,$flow_val_8,$flow_val_9,$flow_val_10,$flow_val_11,$flow_val_12,$flow_val_13,$flow_val_14,$flow_val_15 FROM dt_aio WHERE timing BETWEEN '$con_date2' AND '$con_date' ORDER BY dt_id ASC");
            } else if (sizeof($req->all()[6]) == 16) {
                $flow_db_data_16 = DB::select("SELECT timing, $flow_val_1, $flow_val_2,$flow_val_3,$flow_val_4,$flow_val_5,$flow_val_6,$flow_val_7,$flow_val_8,$flow_val_9,$flow_val_10,$flow_val_11,$flow_val_12,$flow_val_13,$flow_val_14,$flow_val_15,$flow_val_16 FROM dt_aio WHERE timing BETWEEN '$con_date2' AND '$con_date' ORDER BY dt_id ASC");
            }
        } elseif ($timeCondition == '4') {
            if (sizeof($req->all()[6]) == 1) {
                $flow_db_data_1 = DB::select("SELECT timing, $flow_val_1 FROM dt_aio WHERE timing BETWEEN '$con_date3' AND '$con_date'  ORDER BY dt_id ASC");
            } else if (sizeof($req->all()[6]) == 2) {
                $flow_db_data_2 = DB::select("SELECT timing, $flow_val_1, $flow_val_2 FROM dt_aio WHERE timing BETWEEN '$con_date3' AND '$con_date'  ORDER BY dt_id ASC");
            } else if (sizeof($req->all()[6]) == 3) {
                $flow_db_data_3 = DB::select("SELECT timing, $flow_val_1, $flow_val_2,$flow_val_3 FROM dt_aio WHERE timing BETWEEN '$con_date3' AND '$con_date'  ORDER BY dt_id ASC");
            } else if (sizeof($req->all()[6]) == 4) {
                $flow_db_data_4 = DB::select("SELECT timing, $flow_val_1, $flow_val_2,$flow_val_3,$flow_val_4 FROM dt_aio WHERE timing BETWEEN '$con_date3' AND '$con_date'  ORDER BY dt_id ASC");
            } else if (sizeof($req->all()[6]) == 5) {
                $flow_db_data_5 = DB::select("SELECT timing, $flow_val_1, $flow_val_2,$flow_val_3,$flow_val_4,$flow_val_5 FROM dt_aio WHERE timing BETWEEN '$con_date3' AND '$con_date'  ORDER BY dt_id ASC");
            } else if (sizeof($req->all()[6]) == 6) {
                $flow_db_data_6 = DB::select("SELECT timing, $flow_val_1, $flow_val_2,$flow_val_3,$flow_val_4,$flow_val_5,$flow_val_6 FROM dt_aio WHERE timing BETWEEN '$con_date3' AND '$con_date'  ORDER BY dt_id ASC");
            } else if (sizeof($req->all()[6]) == 7) {
                $flow_db_data_7 = DB::select("SELECT timing, $flow_val_1, $flow_val_2,$flow_val_3,$flow_val_4,$flow_val_5,$flow_val_6,$flow_val_7 FROM dt_aio WHERE timing BETWEEN '$con_date3' AND '$con_date'  ORDER BY dt_id ASC");
            } else if (sizeof($req->all()[6]) == 8) {
                $flow_db_data_8 = DB::select("SELECT timing, $flow_val_1, $flow_val_2,$flow_val_3,$flow_val_4,$flow_val_5,$flow_val_6,$flow_val_7,$flow_val_8 FROM dt_aio WHERE timing BETWEEN '$con_date3' AND '$con_date'  ORDER BY dt_id ASC");
            } else if (sizeof($req->all()[6]) == 9) {
                $flow_db_data_9 = DB::select("SELECT timing, $flow_val_1, $flow_val_2,$flow_val_3,$flow_val_4,$flow_val_5,$flow_val_6,$flow_val_7,$flow_val_8,$flow_val_9 FROM dt_aio WHERE timing BETWEEN '$con_date3' AND '$con_date'  ORDER BY dt_id ASC");
            } else if (sizeof($req->all()[6]) == 10) {
                $flow_db_data_10 = DB::select("SELECT timing, $flow_val_1, $flow_val_2,$flow_val_3,$flow_val_4,$flow_val_5,$flow_val_6,$flow_val_7,$flow_val_8,$flow_val_9,$flow_val_10 FROM dt_aio WHERE timing BETWEEN '$con_date3' AND '$con_date'  ORDER BY dt_id ASC");
            } else if (sizeof($req->all()[6]) == 11) {
                $flow_db_data_11 = DB::select("SELECT timing, $flow_val_1, $flow_val_2,$flow_val_3,$flow_val_4,$flow_val_5,$flow_val_6,$flow_val_7,$flow_val_8,$flow_val_9,$flow_val_10,$flow_val_11 FROM dt_aio WHERE timing BETWEEN '$con_date3' AND '$con_date'  ORDER BY dt_id ASC");
            } else if (sizeof($req->all()[6]) == 12) {
                $flow_db_data_12 = DB::select("SELECT timing, $flow_val_1, $flow_val_2,$flow_val_3,$flow_val_4,$flow_val_5,$flow_val_6,$flow_val_7,$flow_val_8,$flow_val_9,$flow_val_10,$flow_val_11,$flow_val_12 FROM dt_aio WHERE timing BETWEEN '$con_date3' AND '$con_date'  ORDER BY dt_id ASC");
            } else if (sizeof($req->all()[6]) == 13) {
                $db_data13 = DB::select("SELECT timing, $flow_val_1, $flow_val_2,$flow_val_3,$flow_val_4,$flow_val_5,$flow_val_6,$flow_val_7,$flow_val_8,$flow_val_9,$flow_val_10,$flow_val_11,$flow_val_12,$flow_val_13 FROM dt_aio WHERE timing BETWEEN '$con_date3' AND '$con_date'  ORDER BY dt_id ASC");
            } else if (sizeof($req->all()[6]) == 14) {
                $flow_db_data_14 = DB::select("SELECT timing, $flow_val_1, $flow_val_2,$flow_val_3,$flow_val_4,$flow_val_5,$flow_val_6,$flow_val_7,$flow_val_8,$flow_val_9,$flow_val_10,$flow_val_11,$flow_val_12,$flow_val_13,$flow_val_14 FROM dt_aio WHERE timing BETWEEN '$con_date3' AND '$con_date'  ORDER BY dt_id ASC");
            } else if (sizeof($req->all()[6]) == 15) {
                $flow_db_data_15 = DB::select("SELECT timing, $flow_val_1, $flow_val_2,$flow_val_3,$flow_val_4,$flow_val_5,$flow_val_6,$flow_val_7,$flow_val_8,$flow_val_9,$flow_val_10,$flow_val_11,$flow_val_12,$flow_val_13,$flow_val_14,$flow_val_15 FROM dt_aio WHERE timing BETWEEN '$con_date3' AND '$con_date'  ORDER BY dt_id ASC");
            } else if (sizeof($req->all()[6]) == 16) {
                $flow_db_data_16 = DB::select("SELECT timing, $flow_val_1, $flow_val_2,$flow_val_3,$flow_val_4,$flow_val_5,$flow_val_6,$flow_val_7,$flow_val_8,$flow_val_9,$flow_val_10,$flow_val_11,$flow_val_12,$flow_val_13,$flow_val_14,$flow_val_15,$flow_val_16 FROM dt_aio WHERE timing BETWEEN '$con_date3' AND '$con_date'  ORDER BY dt_id ASC");
            }
        } elseif ($timeCondition == '5') {
            if (sizeof($req->all()[6]) == 1) {
                $flow_db_data_1 = DB::select("SELECT timing, $flow_val_1 FROM dt_aio WHERE timing BETWEEN '$new_date1' AND '$new_date2' AND dt_id MOD '$interval' = 0 ORDER BY dt_id ASC");
            } else if (sizeof($req->all()[6]) == 2) {
                $flow_db_data_2 = DB::select("SELECT timing, $flow_val_1, $flow_val_2 FROM dt_aio WHERE timing BETWEEN '$new_date1' AND '$new_date2' AND dt_id MOD '$interval' = 0 ORDER BY dt_id ASC");
            } else if (sizeof($req->all()[6]) == 3) {
                $flow_db_data_3 = DB::select("SELECT timing, $flow_val_1, $flow_val_2,$flow_val_3 FROM dt_aio WHERE timing BETWEEN '$new_date1' AND '$new_date2' AND dt_id MOD '$interval' = 0 ORDER BY dt_id ASC");
            } else if (sizeof($req->all()[6]) == 4) {
                $flow_db_data_4 = DB::select("SELECT timing, $flow_val_1, $flow_val_2,$flow_val_3,$flow_val_4 FROM dt_aio WHERE timing BETWEEN '$new_date1' AND '$new_date2' AND dt_id MOD '$interval' = 0 ORDER BY dt_id ASC");
            } else if (sizeof($req->all()[6]) == 5) {
                $flow_db_data_5 = DB::select("SELECT timing, $flow_val_1, $flow_val_2,$flow_val_3,$flow_val_4,$flow_val_5 FROM dt_aio WHERE timing BETWEEN '$new_date1' AND '$new_date2' AND dt_id MOD '$interval' = 0 ORDER BY dt_id ASC");
            } else if (sizeof($req->all()[6]) == 6) {
                $flow_db_data_6 = DB::select("SELECT timing, $flow_val_1, $flow_val_2,$flow_val_3,$flow_val_4,$flow_val_5,$flow_val_6 FROM dt_aio WHERE timing BETWEEN '$new_date1' AND '$new_date2' AND dt_id MOD '$interval' = 0 ORDER BY dt_id ASC");
            } else if (sizeof($req->all()[6]) == 7) {
                $flow_db_data_7 = DB::select("SELECT timing, $flow_val_1, $flow_val_2,$flow_val_3,$flow_val_4,$flow_val_5,$flow_val_6,$flow_val_7 FROM dt_aio WHERE timing BETWEEN '$new_date1' AND '$new_date2' AND dt_id MOD '$interval' = 0 ORDER BY dt_id ASC");
            } else if (sizeof($req->all()[6]) == 8) {
                $flow_db_data_8 = DB::select("SELECT timing, $flow_val_1, $flow_val_2,$flow_val_3,$flow_val_4,$flow_val_5,$flow_val_6,$flow_val_7,$flow_val_8 FROM dt_aio WHERE timing BETWEEN '$new_date1' AND '$new_date2' AND dt_id MOD '$interval' = 0 ORDER BY dt_id ASC");
            } else if (sizeof($req->all()[6]) == 9) {
                $flow_db_data_9 = DB::select("SELECT timing, $flow_val_1, $flow_val_2,$flow_val_3,$flow_val_4,$flow_val_5,$flow_val_6,$flow_val_7,$flow_val_8,$flow_val_9 FROM dt_aio WHERE timing BETWEEN '$new_date1' AND '$new_date2' AND dt_id MOD '$interval' = 0 ORDER BY dt_id ASC");
            } else if (sizeof($req->all()[6]) == 10) {
                $flow_db_data_10 = DB::select("SELECT timing, $flow_val_1, $flow_val_2,$flow_val_3,$flow_val_4,$flow_val_5,$flow_val_6,$flow_val_7,$flow_val_8,$flow_val_9,$flow_val_10 FROM dt_aio WHERE timing BETWEEN '$new_date1' AND '$new_date2' AND dt_id MOD '$interval' = 0 ORDER BY dt_id ASC");
            } else if (sizeof($req->all()[6]) == 11) {
                $flow_db_data_11 = DB::select("SELECT timing, $flow_val_1, $flow_val_2,$flow_val_3,$flow_val_4,$flow_val_5,$flow_val_6,$flow_val_7,$flow_val_8,$flow_val_9,$flow_val_10,$flow_val_11 FROM dt_aio WHERE timing BETWEEN '$new_date1' AND '$new_date2' AND dt_id MOD '$interval' = 0 ORDER BY dt_id ASC");
            } else if (sizeof($req->all()[6]) == 12) {
                $flow_db_data_12 = DB::select("SELECT timing, $flow_val_1, $flow_val_2,$flow_val_3,$flow_val_4,$flow_val_5,$flow_val_6,$flow_val_7,$flow_val_8,$flow_val_9,$flow_val_10,$flow_val_11,$flow_val_12 FROM dt_aio WHERE timing BETWEEN '$new_date1' AND '$new_date2' AND dt_id MOD '$interval' = 0 ORDER BY dt_id ASC");
            } else if (sizeof($req->all()[6]) == 13) {
                $db_data13 = DB::select("SELECT timing, $flow_val_1, $flow_val_2,$flow_val_3,$flow_val_4,$flow_val_5,$flow_val_6,$flow_val_7,$flow_val_8,$flow_val_9,$flow_val_10,$flow_val_11,$flow_val_12,$flow_val_13 FROM dt_aio WHERE timing BETWEEN '$new_date1' AND '$new_date2' AND dt_id MOD '$interval' = 0 ORDER BY dt_id ASC");
            } else if (sizeof($req->all()[6]) == 14) {
                $flow_db_data_14 = DB::select("SELECT timing, $flow_val_1, $flow_val_2,$flow_val_3,$flow_val_4,$flow_val_5,$flow_val_6,$flow_val_7,$flow_val_8,$flow_val_9,$flow_val_10,$flow_val_11,$flow_val_12,$flow_val_13,$flow_val_14 FROM dt_aio WHERE timing BETWEEN '$new_date1' AND '$new_date2' AND dt_id MOD '$interval' = 0 ORDER BY dt_id ASC");
            } else if (sizeof($req->all()[6]) == 15) {
                $flow_db_data_15 = DB::select("SELECT timing, $flow_val_1, $flow_val_2,$flow_val_3,$flow_val_4,$flow_val_5,$flow_val_6,$flow_val_7,$flow_val_8,$flow_val_9,$flow_val_10,$flow_val_11,$flow_val_12,$flow_val_13,$flow_val_14,$flow_val_15 FROM dt_aio WHERE timing BETWEEN '$new_date1' AND '$new_date2' AND dt_id MOD '$interval' = 0 ORDER BY dt_id ASC");
            } else if (sizeof($req->all()[6]) == 16) {
                $flow_db_data_16 = DB::select("SELECT timing, $flow_val_1, $flow_val_2,$flow_val_3,$flow_val_4,$flow_val_5,$flow_val_6,$flow_val_7,$flow_val_8,$flow_val_9,$flow_val_10,$flow_val_11,$flow_val_12,$flow_val_13,$flow_val_14,$flow_val_15,$flow_val_16 FROM dt_aio WHERE timing BETWEEN '$new_date1' AND '$new_date2' AND dt_id MOD '$interval' = 0 ORDER BY dt_id ASC");
            }
        }
        // For Flow Total
        if ($timeCondition == '1') {
            if (sizeof($req->all()[7]) == 1) {
                $ft_db_data_1 = DB::select("SELECT timing, $ft_val_1 FROM dt_aio WHERE timing > now() - interval 24 hour AND dt_id MOD '$interval' = 0");
            } else if (sizeof($req->all()[7]) == 2) {
                $ft_db_data_2 = DB::select("SELECT timing, $ft_val_1, $ft_val_2 FROM dt_aio WHERE timing > now() - interval 24 hour AND dt_id MOD '$interval' = 0");
            } else if (sizeof($req->all()[7]) == 3) {
                $ft_db_data_3 = DB::select("SELECT timing, $ft_val_1, $ft_val_2,$ft_val_3 FROM dt_aio WHERE timing > now() - interval 24 hour AND dt_id MOD '$interval' = 0");
            } else if (sizeof($req->all()[7]) == 4) {
                $ft_db_data_4 = DB::select("SELECT timing, $ft_val_1, $ft_val_2,$ft_val_3,$ft_val_4 FROM dt_aio WHERE timing > now() - interval 24 hour AND dt_id MOD '$interval' = 0");
            } else if (sizeof($req->all()[7]) == 5) {
                $ft_db_data_5 = DB::select("SELECT timing, $ft_val_1, $ft_val_2,$ft_val_3,$ft_val_4,$ft_val_5 FROM dt_aio WHERE timing > now() - interval 24 hour AND dt_id MOD '$interval' = 0");
            } else if (sizeof($req->all()[7]) == 6) {
                $ft_db_data_6 = DB::select("SELECT timing, $ft_val_1, $ft_val_2,$ft_val_3,$ft_val_4,$ft_val_5,$ft_val_6 FROM dt_aio WHERE timing > now() - interval 24 hour AND dt_id MOD '$interval' = 0");
            } else if (sizeof($req->all()[7]) == 7) {
                $ft_db_data_7 = DB::select("SELECT timing, $ft_val_1, $ft_val_2,$ft_val_3,$ft_val_4,$ft_val_5,$ft_val_6,$ft_val_7 FROM dt_aio WHERE timing > now() - interval 24 hour AND dt_id MOD '$interval' = 0");
            } else if (sizeof($req->all()[7]) == 8) {
                $ft_db_data_8 = DB::select("SELECT timing, $ft_val_1, $ft_val_2,$ft_val_3,$ft_val_4,$ft_val_5,$ft_val_6,$ft_val_7,$ft_val_8 FROM dt_aio WHERE timing > now() - interval 24 hour AND dt_id MOD '$interval' = 0");
            } else if (sizeof($req->all()[7]) == 9) {
                $ft_db_data_9 = DB::select("SELECT timing, $ft_val_1, $ft_val_2,$ft_val_3,$ft_val_4,$ft_val_5,$ft_val_6,$ft_val_7,$ft_val_8,$ft_val_9 FROM dt_aio WHERE timing > now() - interval 24 hour AND dt_id MOD '$interval' = 0");
            } else if (sizeof($req->all()[7]) == 10) {
                $ft_db_data_10 = DB::select("SELECT timing, $ft_val_1, $ft_val_2,$ft_val_3,$ft_val_4,$ft_val_5,$ft_val_6,$ft_val_7,$ft_val_8,$ft_val_9,$ft_val_10 FROM dt_aio WHERE timing > now() - interval 24 hour AND dt_id MOD '$interval' = 0");
            } else if (sizeof($req->all()[7]) == 11) {
                $ft_db_data_11 = DB::select("SELECT timing, $ft_val_1, $ft_val_2,$ft_val_3,$ft_val_4,$ft_val_5,$ft_val_6,$ft_val_7,$ft_val_8,$ft_val_9,$ft_val_10,$ft_val_11 FROM dt_aio WHERE timing > now() - interval 24 hour AND dt_id MOD '$interval' = 0");
            } else if (sizeof($req->all()[7]) == 12) {
                $ft_db_data_12 = DB::select("SELECT timing, $ft_val_1, $ft_val_2,$ft_val_3,$ft_val_4,$ft_val_5,$ft_val_6,$ft_val_7,$ft_val_8,$ft_val_9,$ft_val_10,$ft_val_11,$ft_val_12 FROM dt_aio WHERE timing > now() - interval 24 hour AND dt_id MOD '$interval' = 0");
            } else if (sizeof($req->all()[7]) == 13) {
                $db_data13 = DB::select("SELECT timing, $ft_val_1, $ft_val_2,$ft_val_3,$ft_val_4,$ft_val_5,$ft_val_6,$ft_val_7,$ft_val_8,$ft_val_9,$ft_val_10,$ft_val_11,$ft_val_12,$ft_val_13 FROM dt_aio WHERE timing > now() - interval 24 hour AND dt_id MOD '$interval' = 0");
            } else if (sizeof($req->all()[7]) == 14) {
                $ft_db_data_14 = DB::select("SELECT timing, $ft_val_1, $ft_val_2,$ft_val_3,$ft_val_4,$ft_val_5,$ft_val_6,$ft_val_7,$ft_val_8,$ft_val_9,$ft_val_10,$ft_val_11,$ft_val_12,$ft_val_13,$ft_val_14 FROM dt_aio WHERE timing > now() - interval 24 hour AND dt_id MOD '$interval' = 0");
            } else if (sizeof($req->all()[7]) == 15) {
                $ft_db_data_15 = DB::select("SELECT timing, $ft_val_1, $ft_val_2,$ft_val_3,$ft_val_4,$ft_val_5,$ft_val_6,$ft_val_7,$ft_val_8,$ft_val_9,$ft_val_10,$ft_val_11,$ft_val_12,$ft_val_13,$ft_val_14,$ft_val_15 FROM dt_aio WHERE timing > now() - interval 24 hour AND dt_id MOD '$interval' = 0");
            } else if (sizeof($req->all()[7]) == 16) {
                $ft_db_data_16 = DB::select("SELECT timing, $ft_val_1, $ft_val_2,$ft_val_3,$ft_val_4,$ft_val_5,$ft_val_6,$ft_val_7,$ft_val_8,$ft_val_9,$ft_val_10,$ft_val_11,$ft_val_12,$ft_val_13,$ft_val_14,$ft_val_15,$ft_val_16 FROM dt_aio WHERE timing > now() - interval 24 hour AND dt_id MOD '$interval' = 0");
            }
        } elseif ($timeCondition == '2') {
            if (sizeof($req->all()[7]) == 1) {
                $ft_db_data_1 = DB::select("SELECT timing, $ft_val_1 FROM dt_aio WHERE timing BETWEEN '$con_date4' AND '$con_date'  ORDER BY dt_id ASC");
            } else if (sizeof($req->all()[7]) == 2) {
                $ft_db_data_2 = DB::select("SELECT timing, $ft_val_1, $ft_val_2 FROM dt_aio WHERE timing BETWEEN '$con_date4' AND '$con_date'  ORDER BY dt_id ASC");
            } else if (sizeof($req->all()[7]) == 3) {
                $ft_db_data_3 = DB::select("SELECT timing, $ft_val_1, $ft_val_2,$ft_val_3 FROM dt_aio WHERE timing BETWEEN '$con_date4' AND '$con_date'  ORDER BY dt_id ASC");
            } else if (sizeof($req->all()[7]) == 4) {
                $ft_db_data_4 = DB::select("SELECT timing, $ft_val_1, $ft_val_2,$ft_val_3,$ft_val_4 FROM dt_aio WHERE timing BETWEEN '$con_date4' AND '$con_date'  ORDER BY dt_id ASC");
            } else if (sizeof($req->all()[7]) == 5) {
                $ft_db_data_5 = DB::select("SELECT timing, $ft_val_1, $ft_val_2,$ft_val_3,$ft_val_4,$ft_val_5 FROM dt_aio WHERE timing BETWEEN '$con_date4' AND '$con_date'  ORDER BY dt_id ASC");
            } else if (sizeof($req->all()[7]) == 6) {
                $ft_db_data_6 = DB::select("SELECT timing, $ft_val_1, $ft_val_2,$ft_val_3,$ft_val_4,$ft_val_5,$ft_val_6 FROM dt_aio WHERE timing BETWEEN '$con_date4' AND '$con_date'  ORDER BY dt_id ASC");
            } else if (sizeof($req->all()[7]) == 7) {
                $ft_db_data_7 = DB::select("SELECT timing, $ft_val_1, $ft_val_2,$ft_val_3,$ft_val_4,$ft_val_5,$ft_val_6,$ft_val_7 FROM dt_aio WHERE timing BETWEEN '$con_date4' AND '$con_date'  ORDER BY dt_id ASC");
            } else if (sizeof($req->all()[7]) == 8) {
                $ft_db_data_8 = DB::select("SELECT timing, $ft_val_1, $ft_val_2,$ft_val_3,$ft_val_4,$ft_val_5,$ft_val_6,$ft_val_7,$ft_val_8 FROM dt_aio WHERE timing BETWEEN '$con_date4' AND '$con_date'  ORDER BY dt_id ASC");
            } else if (sizeof($req->all()[7]) == 9) {
                $ft_db_data_9 = DB::select("SELECT timing, $ft_val_1, $ft_val_2,$ft_val_3,$ft_val_4,$ft_val_5,$ft_val_6,$ft_val_7,$ft_val_8,$ft_val_9 FROM dt_aio WHERE timing BETWEEN '$con_date4' AND '$con_date'  ORDER BY dt_id ASC");
            } else if (sizeof($req->all()[7]) == 10) {
                $ft_db_data_10 = DB::select("SELECT timing, $ft_val_1, $ft_val_2,$ft_val_3,$ft_val_4,$ft_val_5,$ft_val_6,$ft_val_7,$ft_val_8,$ft_val_9,$ft_val_10 FROM dt_aio WHERE timing BETWEEN '$con_date4' AND '$con_date'  ORDER BY dt_id ASC");
            } else if (sizeof($req->all()[7]) == 11) {
                $ft_db_data_11 = DB::select("SELECT timing, $ft_val_1, $ft_val_2,$ft_val_3,$ft_val_4,$ft_val_5,$ft_val_6,$ft_val_7,$ft_val_8,$ft_val_9,$ft_val_10,$ft_val_11 FROM dt_aio WHERE timing BETWEEN '$con_date4' AND '$con_date'  ORDER BY dt_id ASC");
            } else if (sizeof($req->all()[7]) == 12) {
                $ft_db_data_12 = DB::select("SELECT timing, $ft_val_1, $ft_val_2,$ft_val_3,$ft_val_4,$ft_val_5,$ft_val_6,$ft_val_7,$ft_val_8,$ft_val_9,$ft_val_10,$ft_val_11,$ft_val_12 FROM dt_aio WHERE timing BETWEEN '$con_date4' AND '$con_date'  ORDER BY dt_id ASC");
            } else if (sizeof($req->all()[7]) == 13) {
                $db_data13 = DB::select("SELECT timing, $ft_val_1, $ft_val_2,$ft_val_3,$ft_val_4,$ft_val_5,$ft_val_6,$ft_val_7,$ft_val_8,$ft_val_9,$ft_val_10,$ft_val_11,$ft_val_12,$ft_val_13 FROM dt_aio WHERE timing BETWEEN '$con_date4' AND '$con_date'  ORDER BY dt_id ASC");
            } else if (sizeof($req->all()[7]) == 14) {
                $ft_db_data_14 = DB::select("SELECT timing, $ft_val_1, $ft_val_2,$ft_val_3,$ft_val_4,$ft_val_5,$ft_val_6,$ft_val_7,$ft_val_8,$ft_val_9,$ft_val_10,$ft_val_11,$ft_val_12,$ft_val_13,$ft_val_14 FROM dt_aio WHERE timing BETWEEN '$con_date4' AND '$con_date'  ORDER BY dt_id ASC");
            } else if (sizeof($req->all()[7]) == 15) {
                $ft_db_data_15 = DB::select("SELECT timing, $ft_val_1, $ft_val_2,$ft_val_3,$ft_val_4,$ft_val_5,$ft_val_6,$ft_val_7,$ft_val_8,$ft_val_9,$ft_val_10,$ft_val_11,$ft_val_12,$ft_val_13,$ft_val_14,$ft_val_15 FROM dt_aio WHERE timing BETWEEN '$con_date4' AND '$con_date'  ORDER BY dt_id ASC");
            } else if (sizeof($req->all()[7]) == 16) {
                $ft_db_data_16 = DB::select("SELECT timing, $ft_val_1, $ft_val_2,$ft_val_3,$ft_val_4,$ft_val_5,$ft_val_6,$ft_val_7,$ft_val_8,$ft_val_9,$ft_val_10,$ft_val_11,$ft_val_12,$ft_val_13,$ft_val_14,$ft_val_15,$ft_val_16 FROM dt_aio WHERE timing BETWEEN '$con_date4' AND '$con_date'  ORDER BY dt_id ASC");
            }
        } elseif ($timeCondition == '3') {
            if (sizeof($req->all()[7]) == 1) {
                $ft_db_data_1 = DB::select("SELECT timing, $ft_val_1 FROM dt_aio WHERE timing BETWEEN '$con_date2' AND '$con_date' ORDER BY dt_id ASC");
            } else if (sizeof($req->all()[7]) == 2) {
                $ft_db_data_2 = DB::select("SELECT timing, $ft_val_1, $ft_val_2 FROM dt_aio WHERE timing BETWEEN '$con_date2' AND '$con_date' ORDER BY dt_id ASC");
            } else if (sizeof($req->all()[7]) == 3) {
                $ft_db_data_3 = DB::select("SELECT timing, $ft_val_1, $ft_val_2,$ft_val_3 FROM dt_aio WHERE timing BETWEEN '$con_date2' AND '$con_date' ORDER BY dt_id ASC");
            } else if (sizeof($req->all()[7]) == 4) {
                $ft_db_data_4 = DB::select("SELECT timing, $ft_val_1, $ft_val_2,$ft_val_3,$ft_val_4 FROM dt_aio WHERE timing BETWEEN '$con_date2' AND '$con_date' ORDER BY dt_id ASC");
            } else if (sizeof($req->all()[7]) == 5) {
                $ft_db_data_5 = DB::select("SELECT timing, $ft_val_1, $ft_val_2,$ft_val_3,$ft_val_4,$ft_val_5 FROM dt_aio WHERE timing BETWEEN '$con_date2' AND '$con_date' ORDER BY dt_id ASC");
            } else if (sizeof($req->all()[7]) == 6) {
                $ft_db_data_6 = DB::select("SELECT timing, $ft_val_1, $ft_val_2,$ft_val_3,$ft_val_4,$ft_val_5,$ft_val_6 FROM dt_aio WHERE timing BETWEEN '$con_date2' AND '$con_date' ORDER BY dt_id ASC");
            } else if (sizeof($req->all()[7]) == 7) {
                $ft_db_data_7 = DB::select("SELECT timing, $ft_val_1, $ft_val_2,$ft_val_3,$ft_val_4,$ft_val_5,$ft_val_6,$ft_val_7 FROM dt_aio WHERE timing BETWEEN '$con_date2' AND '$con_date' ORDER BY dt_id ASC");
            } else if (sizeof($req->all()[7]) == 8) {
                $ft_db_data_8 = DB::select("SELECT timing, $ft_val_1, $ft_val_2,$ft_val_3,$ft_val_4,$ft_val_5,$ft_val_6,$ft_val_7,$ft_val_8 FROM dt_aio WHERE timing BETWEEN '$con_date2' AND '$con_date' ORDER BY dt_id ASC");
            } else if (sizeof($req->all()[7]) == 9) {
                $ft_db_data_9 = DB::select("SELECT timing, $ft_val_1, $ft_val_2,$ft_val_3,$ft_val_4,$ft_val_5,$ft_val_6,$ft_val_7,$ft_val_8,$ft_val_9 FROM dt_aio WHERE timing BETWEEN '$con_date2' AND '$con_date' ORDER BY dt_id ASC");
            } else if (sizeof($req->all()[7]) == 10) {
                $ft_db_data_10 = DB::select("SELECT timing, $ft_val_1, $ft_val_2,$ft_val_3,$ft_val_4,$ft_val_5,$ft_val_6,$ft_val_7,$ft_val_8,$ft_val_9,$ft_val_10 FROM dt_aio WHERE timing BETWEEN '$con_date2' AND '$con_date' ORDER BY dt_id ASC");
            } else if (sizeof($req->all()[7]) == 11) {
                $ft_db_data_11 = DB::select("SELECT timing, $ft_val_1, $ft_val_2,$ft_val_3,$ft_val_4,$ft_val_5,$ft_val_6,$ft_val_7,$ft_val_8,$ft_val_9,$ft_val_10,$ft_val_11 FROM dt_aio WHERE timing BETWEEN '$con_date2' AND '$con_date' ORDER BY dt_id ASC");
            } else if (sizeof($req->all()[7]) == 12) {
                $ft_db_data_12 = DB::select("SELECT timing, $ft_val_1, $ft_val_2,$ft_val_3,$ft_val_4,$ft_val_5,$ft_val_6,$ft_val_7,$ft_val_8,$ft_val_9,$ft_val_10,$ft_val_11,$ft_val_12 FROM dt_aio WHERE timing BETWEEN '$con_date2' AND '$con_date' ORDER BY dt_id ASC");
            } else if (sizeof($req->all()[7]) == 13) {
                $db_data13 = DB::select("SELECT timing, $ft_val_1, $ft_val_2,$ft_val_3,$ft_val_4,$ft_val_5,$ft_val_6,$ft_val_7,$ft_val_8,$ft_val_9,$ft_val_10,$ft_val_11,$ft_val_12,$ft_val_13 FROM dt_aio WHERE timing BETWEEN '$con_date2' AND '$con_date' ORDER BY dt_id ASC");
            } else if (sizeof($req->all()[7]) == 14) {
                $ft_db_data_14 = DB::select("SELECT timing, $ft_val_1, $ft_val_2,$ft_val_3,$ft_val_4,$ft_val_5,$ft_val_6,$ft_val_7,$ft_val_8,$ft_val_9,$ft_val_10,$ft_val_11,$ft_val_12,$ft_val_13,$ft_val_14 FROM dt_aio WHERE timing BETWEEN '$con_date2' AND '$con_date' ORDER BY dt_id ASC");
            } else if (sizeof($req->all()[7]) == 15) {
                $ft_db_data_15 = DB::select("SELECT timing, $ft_val_1, $ft_val_2,$ft_val_3,$ft_val_4,$ft_val_5,$ft_val_6,$ft_val_7,$ft_val_8,$ft_val_9,$ft_val_10,$ft_val_11,$ft_val_12,$ft_val_13,$ft_val_14,$ft_val_15 FROM dt_aio WHERE timing BETWEEN '$con_date2' AND '$con_date' ORDER BY dt_id ASC");
            } else if (sizeof($req->all()[7]) == 16) {
                $ft_db_data_16 = DB::select("SELECT timing, $ft_val_1, $ft_val_2,$ft_val_3,$ft_val_4,$ft_val_5,$ft_val_6,$ft_val_7,$ft_val_8,$ft_val_9,$ft_val_10,$ft_val_11,$ft_val_12,$ft_val_13,$ft_val_14,$ft_val_15,$ft_val_16 FROM dt_aio WHERE timing BETWEEN '$con_date2' AND '$con_date' ORDER BY dt_id ASC");
            }
        } elseif ($timeCondition == '4') {
            if (sizeof($req->all()[7]) == 1) {
                $ft_db_data_1 = DB::select("SELECT timing, $ft_val_1 FROM dt_aio WHERE timing BETWEEN '$con_date3' AND '$con_date'  ORDER BY dt_id ASC");
            } else if (sizeof($req->all()[7]) == 2) {
                $ft_db_data_2 = DB::select("SELECT timing, $ft_val_1, $ft_val_2 FROM dt_aio WHERE timing BETWEEN '$con_date3' AND '$con_date'  ORDER BY dt_id ASC");
            } else if (sizeof($req->all()[7]) == 3) {
                $ft_db_data_3 = DB::select("SELECT timing, $ft_val_1, $ft_val_2,$ft_val_3 FROM dt_aio WHERE timing BETWEEN '$con_date3' AND '$con_date'  ORDER BY dt_id ASC");
            } else if (sizeof($req->all()[7]) == 4) {
                $ft_db_data_4 = DB::select("SELECT timing, $ft_val_1, $ft_val_2,$ft_val_3,$ft_val_4 FROM dt_aio WHERE timing BETWEEN '$con_date3' AND '$con_date'  ORDER BY dt_id ASC");
            } else if (sizeof($req->all()[7]) == 5) {
                $ft_db_data_5 = DB::select("SELECT timing, $ft_val_1, $ft_val_2,$ft_val_3,$ft_val_4,$ft_val_5 FROM dt_aio WHERE timing BETWEEN '$con_date3' AND '$con_date'  ORDER BY dt_id ASC");
            } else if (sizeof($req->all()[7]) == 6) {
                $ft_db_data_6 = DB::select("SELECT timing, $ft_val_1, $ft_val_2,$ft_val_3,$ft_val_4,$ft_val_5,$ft_val_6 FROM dt_aio WHERE timing BETWEEN '$con_date3' AND '$con_date'  ORDER BY dt_id ASC");
            } else if (sizeof($req->all()[7]) == 7) {
                $ft_db_data_7 = DB::select("SELECT timing, $ft_val_1, $ft_val_2,$ft_val_3,$ft_val_4,$ft_val_5,$ft_val_6,$ft_val_7 FROM dt_aio WHERE timing BETWEEN '$con_date3' AND '$con_date'  ORDER BY dt_id ASC");
            } else if (sizeof($req->all()[7]) == 8) {
                $ft_db_data_8 = DB::select("SELECT timing, $ft_val_1, $ft_val_2,$ft_val_3,$ft_val_4,$ft_val_5,$ft_val_6,$ft_val_7,$ft_val_8 FROM dt_aio WHERE timing BETWEEN '$con_date3' AND '$con_date'  ORDER BY dt_id ASC");
            } else if (sizeof($req->all()[7]) == 9) {
                $ft_db_data_9 = DB::select("SELECT timing, $ft_val_1, $ft_val_2,$ft_val_3,$ft_val_4,$ft_val_5,$ft_val_6,$ft_val_7,$ft_val_8,$ft_val_9 FROM dt_aio WHERE timing BETWEEN '$con_date3' AND '$con_date'  ORDER BY dt_id ASC");
            } else if (sizeof($req->all()[7]) == 10) {
                $ft_db_data_10 = DB::select("SELECT timing, $ft_val_1, $ft_val_2,$ft_val_3,$ft_val_4,$ft_val_5,$ft_val_6,$ft_val_7,$ft_val_8,$ft_val_9,$ft_val_10 FROM dt_aio WHERE timing BETWEEN '$con_date3' AND '$con_date'  ORDER BY dt_id ASC");
            } else if (sizeof($req->all()[7]) == 11) {
                $ft_db_data_11 = DB::select("SELECT timing, $ft_val_1, $ft_val_2,$ft_val_3,$ft_val_4,$ft_val_5,$ft_val_6,$ft_val_7,$ft_val_8,$ft_val_9,$ft_val_10,$ft_val_11 FROM dt_aio WHERE timing BETWEEN '$con_date3' AND '$con_date'  ORDER BY dt_id ASC");
            } else if (sizeof($req->all()[7]) == 12) {
                $ft_db_data_12 = DB::select("SELECT timing, $ft_val_1, $ft_val_2,$ft_val_3,$ft_val_4,$ft_val_5,$ft_val_6,$ft_val_7,$ft_val_8,$ft_val_9,$ft_val_10,$ft_val_11,$ft_val_12 FROM dt_aio WHERE timing BETWEEN '$con_date3' AND '$con_date'  ORDER BY dt_id ASC");
            } else if (sizeof($req->all()[7]) == 13) {
                $db_data13 = DB::select("SELECT timing, $ft_val_1, $ft_val_2,$ft_val_3,$ft_val_4,$ft_val_5,$ft_val_6,$ft_val_7,$ft_val_8,$ft_val_9,$ft_val_10,$ft_val_11,$ft_val_12,$ft_val_13 FROM dt_aio WHERE timing BETWEEN '$con_date3' AND '$con_date'  ORDER BY dt_id ASC");
            } else if (sizeof($req->all()[7]) == 14) {
                $ft_db_data_14 = DB::select("SELECT timing, $ft_val_1, $ft_val_2,$ft_val_3,$ft_val_4,$ft_val_5,$ft_val_6,$ft_val_7,$ft_val_8,$ft_val_9,$ft_val_10,$ft_val_11,$ft_val_12,$ft_val_13,$ft_val_14 FROM dt_aio WHERE timing BETWEEN '$con_date3' AND '$con_date'  ORDER BY dt_id ASC");
            } else if (sizeof($req->all()[7]) == 15) {
                $ft_db_data_15 = DB::select("SELECT timing, $ft_val_1, $ft_val_2,$ft_val_3,$ft_val_4,$ft_val_5,$ft_val_6,$ft_val_7,$ft_val_8,$ft_val_9,$ft_val_10,$ft_val_11,$ft_val_12,$ft_val_13,$ft_val_14,$ft_val_15 FROM dt_aio WHERE timing BETWEEN '$con_date3' AND '$con_date'  ORDER BY dt_id ASC");
            } else if (sizeof($req->all()[7]) == 16) {
                $ft_db_data_16 = DB::select("SELECT timing, $ft_val_1, $ft_val_2,$ft_val_3,$ft_val_4,$ft_val_5,$ft_val_6,$ft_val_7,$ft_val_8,$ft_val_9,$ft_val_10,$ft_val_11,$ft_val_12,$ft_val_13,$ft_val_14,$ft_val_15,$ft_val_16 FROM dt_aio WHERE timing BETWEEN '$con_date3' AND '$con_date'  ORDER BY dt_id ASC");
            }
        } elseif ($timeCondition == '5') {
            if (sizeof($req->all()[7]) == 1) {
                $ft_db_data_1 = DB::select("SELECT timing, $ft_val_1 FROM dt_aio WHERE timing BETWEEN '$new_date1' AND '$new_date2' AND dt_id MOD '$interval' = 0 ORDER BY dt_id ASC");
            } else if (sizeof($req->all()[7]) == 2) {
                $ft_db_data_2 = DB::select("SELECT timing, $ft_val_1, $ft_val_2 FROM dt_aio WHERE timing BETWEEN '$new_date1' AND '$new_date2' AND dt_id MOD '$interval' = 0 ORDER BY dt_id ASC");
            } else if (sizeof($req->all()[7]) == 3) {
                $ft_db_data_3 = DB::select("SELECT timing, $ft_val_1, $ft_val_2,$ft_val_3 FROM dt_aio WHERE timing BETWEEN '$new_date1' AND '$new_date2' AND dt_id MOD '$interval' = 0 ORDER BY dt_id ASC");
            } else if (sizeof($req->all()[7]) == 4) {
                $ft_db_data_4 = DB::select("SELECT timing, $ft_val_1, $ft_val_2,$ft_val_3,$ft_val_4 FROM dt_aio WHERE timing BETWEEN '$new_date1' AND '$new_date2' AND dt_id MOD '$interval' = 0 ORDER BY dt_id ASC");
            } else if (sizeof($req->all()[7]) == 5) {
                $ft_db_data_5 = DB::select("SELECT timing, $ft_val_1, $ft_val_2,$ft_val_3,$ft_val_4,$ft_val_5 FROM dt_aio WHERE timing BETWEEN '$new_date1' AND '$new_date2' AND dt_id MOD '$interval' = 0 ORDER BY dt_id ASC");
            } else if (sizeof($req->all()[7]) == 6) {
                $ft_db_data_6 = DB::select("SELECT timing, $ft_val_1, $ft_val_2,$ft_val_3,$ft_val_4,$ft_val_5,$ft_val_6 FROM dt_aio WHERE timing BETWEEN '$new_date1' AND '$new_date2' AND dt_id MOD '$interval' = 0 ORDER BY dt_id ASC");
            } else if (sizeof($req->all()[7]) == 7) {
                $ft_db_data_7 = DB::select("SELECT timing, $ft_val_1, $ft_val_2,$ft_val_3,$ft_val_4,$ft_val_5,$ft_val_6,$ft_val_7 FROM dt_aio WHERE timing BETWEEN '$new_date1' AND '$new_date2' AND dt_id MOD '$interval' = 0 ORDER BY dt_id ASC");
            } else if (sizeof($req->all()[7]) == 8) {
                $ft_db_data_8 = DB::select("SELECT timing, $ft_val_1, $ft_val_2,$ft_val_3,$ft_val_4,$ft_val_5,$ft_val_6,$ft_val_7,$ft_val_8 FROM dt_aio WHERE timing BETWEEN '$new_date1' AND '$new_date2' AND dt_id MOD '$interval' = 0 ORDER BY dt_id ASC");
            } else if (sizeof($req->all()[7]) == 9) {
                $ft_db_data_9 = DB::select("SELECT timing, $ft_val_1, $ft_val_2,$ft_val_3,$ft_val_4,$ft_val_5,$ft_val_6,$ft_val_7,$ft_val_8,$ft_val_9 FROM dt_aio WHERE timing BETWEEN '$new_date1' AND '$new_date2' AND dt_id MOD '$interval' = 0 ORDER BY dt_id ASC");
            } else if (sizeof($req->all()[7]) == 10) {
                $ft_db_data_10 = DB::select("SELECT timing, $ft_val_1, $ft_val_2,$ft_val_3,$ft_val_4,$ft_val_5,$ft_val_6,$ft_val_7,$ft_val_8,$ft_val_9,$ft_val_10 FROM dt_aio WHERE timing BETWEEN '$new_date1' AND '$new_date2' AND dt_id MOD '$interval' = 0 ORDER BY dt_id ASC");
            } else if (sizeof($req->all()[7]) == 11) {
                $ft_db_data_11 = DB::select("SELECT timing, $ft_val_1, $ft_val_2,$ft_val_3,$ft_val_4,$ft_val_5,$ft_val_6,$ft_val_7,$ft_val_8,$ft_val_9,$ft_val_10,$ft_val_11 FROM dt_aio WHERE timing BETWEEN '$new_date1' AND '$new_date2' AND dt_id MOD '$interval' = 0 ORDER BY dt_id ASC");
            } else if (sizeof($req->all()[7]) == 12) {
                $ft_db_data_12 = DB::select("SELECT timing, $ft_val_1, $ft_val_2,$ft_val_3,$ft_val_4,$ft_val_5,$ft_val_6,$ft_val_7,$ft_val_8,$ft_val_9,$ft_val_10,$ft_val_11,$ft_val_12 FROM dt_aio WHERE timing BETWEEN '$new_date1' AND '$new_date2' AND dt_id MOD '$interval' = 0 ORDER BY dt_id ASC");
            } else if (sizeof($req->all()[7]) == 13) {
                $db_data13 = DB::select("SELECT timing, $ft_val_1, $ft_val_2,$ft_val_3,$ft_val_4,$ft_val_5,$ft_val_6,$ft_val_7,$ft_val_8,$ft_val_9,$ft_val_10,$ft_val_11,$ft_val_12,$ft_val_13 FROM dt_aio WHERE timing BETWEEN '$new_date1' AND '$new_date2' AND dt_id MOD '$interval' = 0 ORDER BY dt_id ASC");
            } else if (sizeof($req->all()[7]) == 14) {
                $ft_db_data_14 = DB::select("SELECT timing, $ft_val_1, $ft_val_2,$ft_val_3,$ft_val_4,$ft_val_5,$ft_val_6,$ft_val_7,$ft_val_8,$ft_val_9,$ft_val_10,$ft_val_11,$ft_val_12,$ft_val_13,$ft_val_14 FROM dt_aio WHERE timing BETWEEN '$new_date1' AND '$new_date2' AND dt_id MOD '$interval' = 0 ORDER BY dt_id ASC");
            } else if (sizeof($req->all()[7]) == 15) {
                $ft_db_data_15 = DB::select("SELECT timing, $ft_val_1, $ft_val_2,$ft_val_3,$ft_val_4,$ft_val_5,$ft_val_6,$ft_val_7,$ft_val_8,$ft_val_9,$ft_val_10,$ft_val_11,$ft_val_12,$ft_val_13,$ft_val_14,$ft_val_15 FROM dt_aio WHERE timing BETWEEN '$new_date1' AND '$new_date2' AND dt_id MOD '$interval' = 0 ORDER BY dt_id ASC");
            } else if (sizeof($req->all()[7]) == 16) {
                $ft_db_data_16 = DB::select("SELECT timing, $ft_val_1, $ft_val_2,$ft_val_3,$ft_val_4,$ft_val_5,$ft_val_6,$ft_val_7,$ft_val_8,$ft_val_9,$ft_val_10,$ft_val_11,$ft_val_12,$ft_val_13,$ft_val_14,$ft_val_15,$ft_val_16 FROM dt_aio WHERE timing BETWEEN '$new_date1' AND '$new_date2' AND dt_id MOD '$interval' = 0 ORDER BY dt_id ASC");
            }
        }
        // For PT
        if ($timeCondition == '1') {
            if (sizeof($req->all()[9]) == 1) {
                $pt_db_data_1 = DB::select("SELECT timing, $pt_val_1 FROM dt_aio WHERE timing > now() - interval 24 hour AND dt_id MOD '$interval' = 0");
            } else if (sizeof($req->all()[9]) == 2) {
                $pt_db_data_2 = DB::select("SELECT timing, $pt_val_1, $pt_val_2 FROM dt_aio WHERE timing > now() - interval 24 hour AND dt_id MOD '$interval' = 0");
            } else if (sizeof($req->all()[9]) == 3) {
                $pt_db_data_3 = DB::select("SELECT timing, $pt_val_1, $pt_val_2,$pt_val_3 FROM dt_aio WHERE timing > now() - interval 24 hour AND dt_id MOD '$interval' = 0");
            } else if (sizeof($req->all()[9]) == 4) {
                $pt_db_data_4 = DB::select("SELECT timing, $pt_val_1, $pt_val_2,$pt_val_3,$pt_val_4 FROM dt_aio WHERE timing > now() - interval 24 hour AND dt_id MOD '$interval' = 0");
            } else if (sizeof($req->all()[9]) == 5) {
                $pt_db_data_5 = DB::select("SELECT timing, $pt_val_1, $pt_val_2,$pt_val_3,$pt_val_4,$pt_val_5 FROM dt_aio WHERE timing > now() - interval 24 hour AND dt_id MOD '$interval' = 0");
            } else if (sizeof($req->all()[9]) == 6) {
                $pt_db_data_6 = DB::select("SELECT timing, $pt_val_1, $pt_val_2,$pt_val_3,$pt_val_4,$pt_val_5,$pt_val_6 FROM dt_aio WHERE timing > now() - interval 24 hour AND dt_id MOD '$interval' = 0");
            } else if (sizeof($req->all()[9]) == 7) {
                $pt_db_data_7 = DB::select("SELECT timing, $pt_val_1, $pt_val_2,$pt_val_3,$pt_val_4,$pt_val_5,$pt_val_6,$pt_val_7 FROM dt_aio WHERE timing > now() - interval 24 hour AND dt_id MOD '$interval' = 0");
            }
        } elseif ($timeCondition == '2') {
            if (sizeof($req->all()[9]) == 1) {
                $pt_db_data_1 = DB::select("SELECT timing, $pt_val_1 FROM dt_aio WHERE timing BETWEEN '$con_date4' AND '$con_date'  ORDER BY dt_id ASC");
            } else if (sizeof($req->all()[9]) == 2) {
                $pt_db_data_2 = DB::select("SELECT timing, $pt_val_1, $pt_val_2 FROM dt_aio WHERE timing BETWEEN '$con_date4' AND '$con_date'  ORDER BY dt_id ASC");
            } else if (sizeof($req->all()[9]) == 3) {
                $pt_db_data_3 = DB::select("SELECT timing, $pt_val_1, $pt_val_2,$pt_val_3 FROM dt_aio WHERE timing BETWEEN '$con_date4' AND '$con_date'  ORDER BY dt_id ASC");
            } else if (sizeof($req->all()[9]) == 4) {
                $pt_db_data_4 = DB::select("SELECT timing, $pt_val_1, $pt_val_2,$pt_val_3,$pt_val_4 FROM dt_aio WHERE timing BETWEEN '$con_date4' AND '$con_date'  ORDER BY dt_id ASC");
            } else if (sizeof($req->all()[9]) == 5) {
                $pt_db_data_5 = DB::select("SELECT timing, $pt_val_1, $pt_val_2,$pt_val_3,$pt_val_4,$pt_val_5 FROM dt_aio WHERE timing BETWEEN '$con_date4' AND '$con_date'  ORDER BY dt_id ASC");
            } else if (sizeof($req->all()[9]) == 6) {
                $pt_db_data_6 = DB::select("SELECT timing, $pt_val_1, $pt_val_2,$pt_val_3,$pt_val_4,$pt_val_5,$pt_val_6 FROM dt_aio WHERE timing BETWEEN '$con_date4' AND '$con_date'  ORDER BY dt_id ASC");
            } else if (sizeof($req->all()[9]) == 7) {
                $pt_db_data_7 = DB::select("SELECT timing, $pt_val_1, $pt_val_2,$pt_val_3,$pt_val_4,$pt_val_5,$pt_val_6,$pt_val_7 FROM dt_aio WHERE timing BETWEEN '$con_date4' AND '$con_date'  ORDER BY dt_id ASC");
            } 
        } elseif ($timeCondition == '3') {
            if (sizeof($req->all()[9]) == 1) {
                $pt_db_data_1 = DB::select("SELECT timing, $pt_val_1 FROM dt_aio WHERE timing BETWEEN '$con_date2' AND '$con_date' ORDER BY dt_id ASC");
            } else if (sizeof($req->all()[9]) == 2) {
                $pt_db_data_2 = DB::select("SELECT timing, $pt_val_1, $pt_val_2 FROM dt_aio WHERE timing BETWEEN '$con_date2' AND '$con_date' ORDER BY dt_id ASC");
            } else if (sizeof($req->all()[9]) == 3) {
                $pt_db_data_3 = DB::select("SELECT timing, $pt_val_1, $pt_val_2,$pt_val_3 FROM dt_aio WHERE timing BETWEEN '$con_date2' AND '$con_date' ORDER BY dt_id ASC");
            } else if (sizeof($req->all()[9]) == 4) {
                $pt_db_data_4 = DB::select("SELECT timing, $pt_val_1, $pt_val_2,$pt_val_3,$pt_val_4 FROM dt_aio WHERE timing BETWEEN '$con_date2' AND '$con_date' ORDER BY dt_id ASC");
            } else if (sizeof($req->all()[9]) == 5) {
                $pt_db_data_5 = DB::select("SELECT timing, $pt_val_1, $pt_val_2,$pt_val_3,$pt_val_4,$pt_val_5 FROM dt_aio WHERE timing BETWEEN '$con_date2' AND '$con_date' ORDER BY dt_id ASC");
            } else if (sizeof($req->all()[9]) == 6) {
                $pt_db_data_6 = DB::select("SELECT timing, $pt_val_1, $pt_val_2,$pt_val_3,$pt_val_4,$pt_val_5,$pt_val_6 FROM dt_aio WHERE timing BETWEEN '$con_date2' AND '$con_date' ORDER BY dt_id ASC");
            } else if (sizeof($req->all()[9]) == 7) {
                $pt_db_data_7 = DB::select("SELECT timing, $pt_val_1, $pt_val_2,$pt_val_3,$pt_val_4,$pt_val_5,$pt_val_6,$pt_val_7 FROM dt_aio WHERE timing BETWEEN '$con_date2' AND '$con_date' ORDER BY dt_id ASC");
            } 
        } elseif ($timeCondition == '4') {
            if (sizeof($req->all()[9]) == 1) {
                $pt_db_data_1 = DB::select("SELECT timing, $pt_val_1 FROM dt_aio WHERE timing BETWEEN '$con_date3' AND '$con_date'  ORDER BY dt_id ASC");
            } else if (sizeof($req->all()[9]) == 2) {
                $pt_db_data_2 = DB::select("SELECT timing, $pt_val_1, $pt_val_2 FROM dt_aio WHERE timing BETWEEN '$con_date3' AND '$con_date'  ORDER BY dt_id ASC");
            } else if (sizeof($req->all()[9]) == 3) {
                $pt_db_data_3 = DB::select("SELECT timing, $pt_val_1, $pt_val_2,$pt_val_3 FROM dt_aio WHERE timing BETWEEN '$con_date3' AND '$con_date'  ORDER BY dt_id ASC");
            } else if (sizeof($req->all()[9]) == 4) {
                $pt_db_data_4 = DB::select("SELECT timing, $pt_val_1, $pt_val_2,$pt_val_3,$pt_val_4 FROM dt_aio WHERE timing BETWEEN '$con_date3' AND '$con_date'  ORDER BY dt_id ASC");
            } else if (sizeof($req->all()[9]) == 5) {
                $pt_db_data_5 = DB::select("SELECT timing, $pt_val_1, $pt_val_2,$pt_val_3,$pt_val_4,$pt_val_5 FROM dt_aio WHERE timing BETWEEN '$con_date3' AND '$con_date'  ORDER BY dt_id ASC");
            } else if (sizeof($req->all()[9]) == 6) {
                $pt_db_data_6 = DB::select("SELECT timing, $pt_val_1, $pt_val_2,$pt_val_3,$pt_val_4,$pt_val_5,$pt_val_6 FROM dt_aio WHERE timing BETWEEN '$con_date3' AND '$con_date'  ORDER BY dt_id ASC");
            } else if (sizeof($req->all()[9]) == 7) {
                $pt_db_data_7 = DB::select("SELECT timing, $pt_val_1, $pt_val_2,$pt_val_3,$pt_val_4,$pt_val_5,$pt_val_6,$pt_val_7 FROM dt_aio WHERE timing BETWEEN '$con_date3' AND '$con_date'  ORDER BY dt_id ASC");
            } 
        } elseif ($timeCondition == '5') {
            if (sizeof($req->all()[9]) == 1) {
                $pt_db_data_1 = DB::select("SELECT timing, $pt_val_1 FROM dt_aio WHERE timing BETWEEN '$new_date1' AND '$new_date2' AND dt_id MOD '$interval' = 0 ORDER BY dt_id ASC");
            } else if (sizeof($req->all()[9]) == 2) {
                $pt_db_data_2 = DB::select("SELECT timing, $pt_val_1, $pt_val_2 FROM dt_aio WHERE timing BETWEEN '$new_date1' AND '$new_date2' AND dt_id MOD '$interval' = 0 ORDER BY dt_id ASC");
            } else if (sizeof($req->all()[9]) == 3) {
                $pt_db_data_3 = DB::select("SELECT timing, $pt_val_1, $pt_val_2,$pt_val_3 FROM dt_aio WHERE timing BETWEEN '$new_date1' AND '$new_date2' AND dt_id MOD '$interval' = 0 ORDER BY dt_id ASC");
            } else if (sizeof($req->all()[9]) == 4) {
                $pt_db_data_4 = DB::select("SELECT timing, $pt_val_1, $pt_val_2,$pt_val_3,$pt_val_4 FROM dt_aio WHERE timing BETWEEN '$new_date1' AND '$new_date2' AND dt_id MOD '$interval' = 0 ORDER BY dt_id ASC");
            } else if (sizeof($req->all()[9]) == 5) {
                $pt_db_data_5 = DB::select("SELECT timing, $pt_val_1, $pt_val_2,$pt_val_3,$pt_val_4,$pt_val_5 FROM dt_aio WHERE timing BETWEEN '$new_date1' AND '$new_date2' AND dt_id MOD '$interval' = 0 ORDER BY dt_id ASC");
            } else if (sizeof($req->all()[9]) == 5) {
                $pt_db_data_6 = DB::select("SELECT timing, $pt_val_1, $pt_val_2,$pt_val_3,$pt_val_4,$pt_val_5,$pt_val_6 FROM dt_aio WHERE timing BETWEEN '$new_date1' AND '$new_date2' AND dt_id MOD '$interval' = 0 ORDER BY dt_id ASC");
            } else if (sizeof($req->all()[9]) == 5) {
                $pt_db_data_7 = DB::select("SELECT timing, $pt_val_1, $pt_val_2,$pt_val_3,$pt_val_4,$pt_val_5,$pt_val_6,$pt_val_7 FROM dt_aio WHERE timing BETWEEN '$new_date1' AND '$new_date2' AND dt_id MOD '$interval' = 0 ORDER BY dt_id ASC");
            } 
        }
        // 
        // For Rdl25 Mass
        if ($timeCondition == '1') {
            if (sizeof($req->all()[8]) == 1) {
                $db_rdl25_mass = DB::select("SELECT timing, $rdl25_mass FROM dt_aio WHERE timing > now() - interval 24 hour AND dt_id MOD '$interval' = 0");
            } 
        } elseif ($timeCondition == '2') {
            if (sizeof($req->all()[8]) == 1) {
                $db_rdl25_mass = DB::select("SELECT timing, $rdl25_mass FROM dt_aio WHERE timing BETWEEN '$con_date4' AND '$con_date'  ORDER BY dt_id ASC");
            }
        } elseif ($timeCondition == '3') {
            if (sizeof($req->all()[8]) == 1) {
                $db_rdl25_mass = DB::select("SELECT timing, $rdl25_mass FROM dt_aio WHERE timing BETWEEN '$con_date2' AND '$con_date' ORDER BY dt_id ASC");
            } 
        } elseif ($timeCondition == '4') {
            if (sizeof($req->all()[8]) == 1) {
                $db_rdl25_mass = DB::select("SELECT timing, $rdl25_mass FROM dt_aio WHERE timing BETWEEN '$con_date3' AND '$con_date'  ORDER BY dt_id ASC");
            } 
        } elseif ($timeCondition == '5') {
            if (sizeof($req->all()[8]) == 1) {
                $db_rdl25_mass = DB::select("SELECT timing, $rdl25_mass FROM dt_aio WHERE timing BETWEEN '$new_date1' AND '$new_date2' AND dt_id MOD '$interval' = 0 ORDER BY dt_id ASC");
            } 
        }
////////////////////// For Interval Filter ///////////////////////
        $array_level = [];
        $array_volume = [];
        $array_temperture = [];
        $array_flow = [];
        $array_ft = [];
        $array_pt = [];
        $array_rdl25 = [];
        
        $j = 0;
        if($interval == 1){
            if(count($db_data_1)!=0){
                for($i=0; $i<sizeof($db_data_1); $i+=1){
                    $array_level[$j] = $db_data_1[$i];
                    $j++;
                }
            }else if(count($db_data_2)!=0){
                for($i=0; $i<sizeof($db_data_2); $i+=1){
                    $array_level[$j] = $db_data_2[$i];
                    $j++;
                }
            }else if(count($db_data_3)!=0){
                for($i=0; $i<sizeof($db_data_3); $i+=1){
                    $array_level[$j] = $db_data_3[$i];
                    $j++;
                }
            }else if(count($db_data_4)!=0){
                for($i=0; $i<sizeof($db_data_4); $i+=1){
                    $array_level[$j] = $db_data_4[$i];
                    $j++;
                }
            }else if(count($db_data_5)!=0){
                for($i=0; $i<sizeof($db_data_5); $i+=1){
                    $array_level[$j] = $db_data_5[$i];
                    $j++;
                }
            }else if(count($db_data_6)!=0){
                for($i=0; $i<sizeof($db_data_6); $i+=1){
                    $array_level[$j] = $db_data_6[$i];
                    $j++;
                }
            }else if(count($db_data_7)!=0){
                for($i=0; $i<sizeof($db_data_7); $i+=1){
                    $array_level[$j] = $db_data_7[$i];
                    $j++;
                }
            }else if(count($db_data_8)!=0){
                for($i=0; $i<sizeof($db_data_8); $i+=1){
                    $array_level[$j] = $db_data_8[$i];
                    $j++;
                }
            }else if(count($db_data_9)!=0){
                for($i=0; $i<sizeof($db_data_9); $i+=1){
                    $array_level[$j] = $db_data_9[$i];
                    $j++;
                }
            }else if(count($db_data_10)!=0){
                for($i=0; $i<sizeof($db_data_10); $i+=1){
                    $array_level[$j] = $db_data_10[$i];
                    $j++;
                }
            }else if(count($db_data_11)!=0){
                for($i=0; $i<sizeof($db_data_11); $i+=1){
                    $array_level[$j] = $db_data_11[$i];
                    $j++;
                }
            }else if(count($db_data_12)!=0){
                for($i=0; $i<sizeof($db_data_12); $i+=1){
                    $array_level[$j] = $db_data_12[$i];
                    $j++;
                }
            }else if(count($db_data_13)!=0){
                for($i=0; $i<sizeof($db_data_13); $i+=1){
                    $array_level[$j] = $db_data_13[$i];
                    $j++;
                }
            }else if(count($db_data_14)!=0){
                for($i=0; $i<sizeof($db_data_14); $i+=1){
                    $array_level[$j] = $db_data_14[$i];
                    $j++;
                }
            }else if(count($db_data_15)!=0){
                for($i=0; $i<sizeof($db_data_15); $i+=1){
                    $array_level[$j] = $db_data_15[$i];
                    $j++;
                }
            }else if(count($db_data_16)!=0){
                for($i=0; $i<sizeof($db_data_16); $i+=1){
                    $array_level[$j] = $db_data_16[$i];
                    $j++;
                }
            }
        }else if($interval == 2){
            if(count($db_data_1)!=0){
                for($i=0; $i<sizeof($db_data_1); $i+=2){
                    $array_level[$j] = $db_data_1[$i];
                    $j++;
                }
            }else if(count($db_data_2)!=0){
                for($i=0; $i<sizeof($db_data_2); $i+=2){
                    $array_level[$j] = $db_data_2[$i];
                    $j++;
                }
            }else if(count($db_data_3)!=0){
                for($i=0; $i<sizeof($db_data_3); $i+=2){
                    $array_level[$j] = $db_data_3[$i];
                    $j++;
                }
            }else if(count($db_data_4)!=0){
                for($i=0; $i<sizeof($db_data_4); $i+=2){
                    $array_level[$j] = $db_data_4[$i];
                    $j++;
                }
            }else if(count($db_data_5)!=0){
                for($i=0; $i<sizeof($db_data_5); $i+=2){
                    $array_level[$j] = $db_data_5[$i];
                    $j++;
                }
            }else if(count($db_data_6)!=0){
                for($i=0; $i<sizeof($db_data_6); $i+=2){
                    $array_level[$j] = $db_data_6[$i];
                    $j++;
                }
            }else if(count($db_data_7)!=0){
                for($i=0; $i<sizeof($db_data_7); $i+=2){
                    $array_level[$j] = $db_data_7[$i];
                    $j++;
                }
            }else if(count($db_data_8)!=0){
                for($i=0; $i<sizeof($db_data_8); $i+=2){
                    $array_level[$j] = $db_data_8[$i];
                    $j++;
                }
            }else if(count($db_data_9)!=0){
                for($i=0; $i<sizeof($db_data_9); $i+=2){
                    $array_level[$j] = $db_data_9[$i];
                    $j++;
                }
            }else if(count($db_data_10)!=0){
                for($i=0; $i<sizeof($db_data_10); $i+=2){
                    $array_level[$j] = $db_data_10[$i];
                    $j++;
                }
            }else if(count($db_data_11)!=0){
                for($i=0; $i<sizeof($db_data_11); $i+=2){
                    $array_level[$j] = $db_data_11[$i];
                    $j++;
                }
            }else if(count($db_data_12)!=0){
                for($i=0; $i<sizeof($db_data_12); $i+=2){
                    $array_level[$j] = $db_data_12[$i];
                    $j++;
                }
            }else if(count($db_data_13)!=0){
                for($i=0; $i<sizeof($db_data_13); $i+=2){
                    $array_level[$j] = $db_data_13[$i];
                    $j++;
                }
            }else if(count($db_data_14)!=0){
                for($i=0; $i<sizeof($db_data_14); $i+=2){
                    $array_level[$j] = $db_data_14[$i];
                    $j++;
                }
            }else if(count($db_data_15)!=0){
                for($i=0; $i<sizeof($db_data_15); $i+=2){
                    $array_level[$j] = $db_data_15[$i];
                    $j++;
                }
            }else if(count($db_data_16)!=0){
                for($i=0; $i<sizeof($db_data_16); $i+=2){
                    $array_level[$j] = $db_data_16[$i];
                    $j++;
                }
            }
        }else if($interval == 5){
            if(count($db_data_1)!=0){
                for($i=0; $i<sizeof($db_data_1); $i+=5){
                    $array_level[$j] = $db_data_1[$i];
                    $j++;
                }
            }else if(count($db_data_2)!=0){
                for($i=0; $i<sizeof($db_data_2); $i+=5){
                    $array_level[$j] = $db_data_2[$i];
                    $j++;
                }
            }else if(count($db_data_3)!=0){
                for($i=0; $i<sizeof($db_data_3); $i+=5){
                    $array_level[$j] = $db_data_3[$i];
                    $j++;
                }
            }else if(count($db_data_4)!=0){
                for($i=0; $i<sizeof($db_data_4); $i+=5){
                    $array_level[$j] = $db_data_4[$i];
                    $j++;
                }
            }else if(count($db_data_5)!=0){
                for($i=0; $i<sizeof($db_data_5); $i+=5){
                    $array_level[$j] = $db_data_5[$i];
                    $j++;
                }
            }else if(count($db_data_6)!=0){
                for($i=0; $i<sizeof($db_data_6); $i+=5){
                    $array_level[$j] = $db_data_6[$i];
                    $j++;
                }
            }else if(count($db_data_7)!=0){
                for($i=0; $i<sizeof($db_data_7); $i+=5){
                    $array_level[$j] = $db_data_7[$i];
                    $j++;
                }
            }else if(count($db_data_8)!=0){
                for($i=0; $i<sizeof($db_data_8); $i+=5){
                    $array_level[$j] = $db_data_8[$i];
                    $j++;
                }
            }else if(count($db_data_9)!=0){
                for($i=0; $i<sizeof($db_data_9); $i+=5){
                    $array_level[$j] = $db_data_9[$i];
                    $j++;
                }
            }else if(count($db_data_10)!=0){
                for($i=0; $i<sizeof($db_data_10); $i+=5){
                    $array_level[$j] = $db_data_10[$i];
                    $j++;
                }
            }else if(count($db_data_11)!=0){
                for($i=0; $i<sizeof($db_data_11); $i+=5){
                    $array_level[$j] = $db_data_11[$i];
                    $j++;
                }
            }else if(count($db_data_12)!=0){
                for($i=0; $i<sizeof($db_data_12); $i+=5){
                    $array_level[$j] = $db_data_12[$i];
                    $j++;
                }
            }else if(count($db_data_13)!=0){
                for($i=0; $i<sizeof($db_data_13); $i+=5){
                    $array_level[$j] = $db_data_13[$i];
                    $j++;
                }
            }else if(count($db_data_14)!=0){
                for($i=0; $i<sizeof($db_data_14); $i+=5){
                    $array_level[$j] = $db_data_14[$i];
                    $j++;
                }
            }else if(count($db_data_15)!=0){
                for($i=0; $i<sizeof($db_data_15); $i+=5){
                    $array_level[$j] = $db_data_15[$i];
                    $j++;
                }
            }else if(count($db_data_16)!=0){
                for($i=0; $i<sizeof($db_data_16); $i+=5){
                    $array_level[$j] = $db_data_16[$i];
                    $j++;
                }
            }
        }else if($interval == 10){
            if(count($db_data_1)!=0){
                for($i=0; $i<sizeof($db_data_1); $i+=10){
                    $array_level[$j] = $db_data_1[$i];
                    $j++;
                }
            }else if(count($db_data_2)!=0){
                for($i=0; $i<sizeof($db_data_2); $i+=10){
                    $array_level[$j] = $db_data_2[$i];
                    $j++;
                }
            }else if(count($db_data_3)!=0){
                for($i=0; $i<sizeof($db_data_3); $i+=10){
                    $array_level[$j] = $db_data_3[$i];
                    $j++;
                }
            }else if(count($db_data_4)!=0){
                for($i=0; $i<sizeof($db_data_4); $i+=10){
                    $array_level[$j] = $db_data_4[$i];
                    $j++;
                }
            }else if(count($db_data_5)!=0){
                for($i=0; $i<sizeof($db_data_5); $i+=10){
                    $array_level[$j] = $db_data_5[$i];
                    $j++;
                }
            }else if(count($db_data_6)!=0){
                for($i=0; $i<sizeof($db_data_6); $i+=10){
                    $array_level[$j] = $db_data_6[$i];
                    $j++;
                }
            }else if(count($db_data_7)!=0){
                for($i=0; $i<sizeof($db_data_7); $i+=10){
                    $array_level[$j] = $db_data_7[$i];
                    $j++;
                }
            }else if(count($db_data_8)!=0){
                for($i=0; $i<sizeof($db_data_8); $i+=10){
                    $array_level[$j] = $db_data_8[$i];
                    $j++;
                }
            }else if(count($db_data_9)!=0){
                for($i=0; $i<sizeof($db_data_9); $i+=10){
                    $array_level[$j] = $db_data_9[$i];
                    $j++;
                }
            }else if(count($db_data_10)!=0){
                for($i=0; $i<sizeof($db_data_10); $i+=10){
                    $array_level[$j] = $db_data_10[$i];
                    $j++;
                }
            }else if(count($db_data_11)!=0){
                for($i=0; $i<sizeof($db_data_11); $i+=10){
                    $array_level[$j] = $db_data_11[$i];
                    $j++;
                }
            }else if(count($db_data_12)!=0){
                for($i=0; $i<sizeof($db_data_12); $i+=10){
                    $array_level[$j] = $db_data_12[$i];
                    $j++;
                }
            }else if(count($db_data_13)!=0){
                for($i=0; $i<sizeof($db_data_13); $i+=10){
                    $array_level[$j] = $db_data_13[$i];
                    $j++;
                }
            }else if(count($db_data_14)!=0){
                for($i=0; $i<sizeof($db_data_14); $i+=10){
                    $array_level[$j] = $db_data_14[$i];
                    $j++;
                }
            }else if(count($db_data_15)!=0){
                for($i=0; $i<sizeof($db_data_15); $i+=10){
                    $array_level[$j] = $db_data_15[$i];
                    $j++;
                }
            }else if(count($db_data_16)!=0){
                for($i=0; $i<sizeof($db_data_16); $i+=10){
                    $array_level[$j] = $db_data_16[$i];
                    $j++;
                }
            }
        }else if($interval == 30){
            if(count($db_data_1)!=0){
                for($i=0; $i<sizeof($db_data_1); $i+=30){
                    $array_level[$j] = $db_data_1[$i];
                    $j++;
                }
            }else if(count($db_data_2)!=0){
                for($i=0; $i<sizeof($db_data_2); $i+=30){
                    $array_level[$j] = $db_data_2[$i];
                    $j++;
                }
            }else if(count($db_data_3)!=0){
                for($i=0; $i<sizeof($db_data_3); $i+=30){
                    $array_level[$j] = $db_data_3[$i];
                    $j++;
                }
            }else if(count($db_data_4)!=0){
                for($i=0; $i<sizeof($db_data_4); $i+=30){
                    $array_level[$j] = $db_data_4[$i];
                    $j++;
                }
            }else if(count($db_data_5)!=0){
                for($i=0; $i<sizeof($db_data_5); $i+=30){
                    $array_level[$j] = $db_data_5[$i];
                    $j++;
                }
            }else if(count($db_data_6)!=0){
                for($i=0; $i<sizeof($db_data_6); $i+=30){
                    $array_level[$j] = $db_data_6[$i];
                    $j++;
                }
            }else if(count($db_data_7)!=0){
                for($i=0; $i<sizeof($db_data_7); $i+=30){
                    $array_level[$j] = $db_data_7[$i];
                    $j++;
                }
            }else if(count($db_data_8)!=0){
                for($i=0; $i<sizeof($db_data_8); $i+=30){
                    $array_level[$j] = $db_data_8[$i];
                    $j++;
                }
            }else if(count($db_data_9)!=0){
                for($i=0; $i<sizeof($db_data_9); $i+=30){
                    $array_level[$j] = $db_data_9[$i];
                    $j++;
                }
            }else if(count($db_data_10)!=0){
                for($i=0; $i<sizeof($db_data_10); $i+=30){
                    $array_level[$j] = $db_data_10[$i];
                    $j++;
                }
            }else if(count($db_data_11)!=0){
                for($i=0; $i<sizeof($db_data_11); $i+=30){
                    $array_level[$j] = $db_data_11[$i];
                    $j++;
                }
            }else if(count($db_data_12)!=0){
                for($i=0; $i<sizeof($db_data_12); $i+=30){
                    $array_level[$j] = $db_data_12[$i];
                    $j++;
                }
            }else if(count($db_data_13)!=0){
                for($i=0; $i<sizeof($db_data_13); $i+=30){
                    $array_level[$j] = $db_data_13[$i];
                    $j++;
                }
            }else if(count($db_data_14)!=0){
                for($i=0; $i<sizeof($db_data_14); $i+=30){
                    $array_level[$j] = $db_data_14[$i];
                    $j++;
                }
            }else if(count($db_data_15)!=0){
                for($i=0; $i<sizeof($db_data_15); $i+=30){
                    $array_level[$j] = $db_data_15[$i];
                    $j++;
                }
            }else if(count($db_data_16)!=0){
                for($i=0; $i<sizeof($db_data_16); $i+=30){
                    $array_level[$j] = $db_data_16[$i];
                    $j++;
                }
            }
        }else if($interval == 60){
            if(count($db_data_1)!=0){
                for($i=0; $i<sizeof($db_data_1); $i+=60){
                    $array_level[$j] = $db_data_1[$i];
                    $j++;
                }
            }else if(count($db_data_2)!=0){
                for($i=0; $i<sizeof($db_data_2); $i+=60){
                    $array_level[$j] = $db_data_2[$i];
                    $j++;
                }
            }else if(count($db_data_3)!=0){
                for($i=0; $i<sizeof($db_data_3); $i+=60){
                    $array_level[$j] = $db_data_3[$i];
                    $j++;
                }
            }else if(count($db_data_4)!=0){
                for($i=0; $i<sizeof($db_data_4); $i+=60){
                    $array_level[$j] = $db_data_4[$i];
                    $j++;
                }
            }else if(count($db_data_5)!=0){
                for($i=0; $i<sizeof($db_data_5); $i+=60){
                    $array_level[$j] = $db_data_5[$i];
                    $j++;
                }
            }else if(count($db_data_6)!=0){
                for($i=0; $i<sizeof($db_data_6); $i+=60){
                    $array_level[$j] = $db_data_6[$i];
                    $j++;
                }
            }else if(count($db_data_7)!=0){
                for($i=0; $i<sizeof($db_data_7); $i+=60){
                    $array_level[$j] = $db_data_7[$i];
                    $j++;
                }
            }else if(count($db_data_8)!=0){
                for($i=0; $i<sizeof($db_data_8); $i+=60){
                    $array_level[$j] = $db_data_8[$i];
                    $j++;
                }
            }else if(count($db_data_9)!=0){
                for($i=0; $i<sizeof($db_data_9); $i+=60){
                    $array_level[$j] = $db_data_9[$i];
                    $j++;
                }
            }else if(count($db_data_10)!=0){
                for($i=0; $i<sizeof($db_data_10); $i+=60){
                    $array_level[$j] = $db_data_10[$i];
                    $j++;
                }
            }else if(count($db_data_11)!=0){
                for($i=0; $i<sizeof($db_data_11); $i+=60){
                    $array_level[$j] = $db_data_11[$i];
                    $j++;
                }
            }else if(count($db_data_12)!=0){
                for($i=0; $i<sizeof($db_data_12); $i+=60){
                    $array_level[$j] = $db_data_12[$i];
                    $j++;
                }
            }else if(count($db_data_13)!=0){
                for($i=0; $i<sizeof($db_data_13); $i+=60){
                    $array_level[$j] = $db_data_13[$i];
                    $j++;
                }
            }else if(count($db_data_14)!=0){
                for($i=0; $i<sizeof($db_data_14); $i+=60){
                    $array_level[$j] = $db_data_14[$i];
                    $j++;
                }
            }else if(count($db_data_15)!=0){
                for($i=0; $i<sizeof($db_data_15); $i+=60){
                    $array_level[$j] = $db_data_15[$i];
                    $j++;
                }
            }else if(count($db_data_16)!=0){
                for($i=0; $i<sizeof($db_data_16); $i+=60){
                    $array_level[$j] = $db_data_16[$i];
                    $j++;
                }
            }
        }
        // For volume
        if($interval == 1){
            if(count($vol_data_1)!=0){
                for($i=0; $i<sizeof($vol_data_1); $i+=1){
                    $array_volume[$j] = $vol_data_1[$i];
                    $j++;
                }
            }else if(count($vol_data_2)!=0){
                for($i=0; $i<sizeof($vol_data_2); $i+=1){
                    $array_volume[$j] = $vol_data_2[$i];
                    $j++;
                }
            }else if(count($vol_data_3)!=0){
                for($i=0; $i<sizeof($vol_data_3); $i+=1){
                    $array_volume[$j] = $vol_data_3[$i];
                    $j++;
                }
            }else if(count($vol_data_4)!=0){
                for($i=0; $i<sizeof($vol_data_4); $i+=1){
                    $array_volume[$j] = $vol_data_4[$i];
                    $j++;
                }
            }else if(count($vol_data_5)!=0){
                for($i=0; $i<sizeof($vol_data_5); $i+=1){
                    $array_volume[$j] = $vol_data_5[$i];
                    $j++;
                }
            }else if(count($vol_data_6)!=0){
                for($i=0; $i<sizeof($vol_data_6); $i+=1){
                    $array_volume[$j] = $vol_data_6[$i];
                    $j++;
                }
            }else if(count($vol_data_7)!=0){
                for($i=0; $i<sizeof($vol_data_7); $i+=1){
                    $array_volume[$j] = $vol_data_7[$i];
                    $j++;
                }
            }else if(count($vol_data_8)!=0){
                for($i=0; $i<sizeof($vol_data_8); $i+=1){
                    $array_volume[$j] = $vol_data_8[$i];
                    $j++;
                }
            }else if(count($vol_data_9)!=0){
                for($i=0; $i<sizeof($vol_data_9); $i+=1){
                    $array_volume[$j] = $vol_data_9[$i];
                    $j++;
                }
            }else if(count($vol_data_10)!=0){
                for($i=0; $i<sizeof($vol_data_10); $i+=1){
                    $array_volume[$j] = $vol_data_10[$i];
                    $j++;
                }
            }else if(count($vol_data_11)!=0){
                for($i=0; $i<sizeof($vol_data_11); $i+=1){
                    $array_volume[$j] = $vol_data_11[$i];
                    $j++;
                }
            }else if(count($vol_data_12)!=0){
                for($i=0; $i<sizeof($vol_data_12); $i+=1){
                    $array_volume[$j] = $vol_data_12[$i];
                    $j++;
                }
            }else if(count($vol_data_13)!=0){
                for($i=0; $i<sizeof($vol_data_13); $i+=1){
                    $array_volume[$j] = $vol_data_13[$i];
                    $j++;
                }
            }else if(count($vol_data_14)!=0){
                for($i=0; $i<sizeof($vol_data_14); $i+=1){
                    $array_volume[$j] = $vol_data_14[$i];
                    $j++;
                }
            }else if(count($vol_data_15)!=0){
                for($i=0; $i<sizeof($vol_data_15); $i+=1){
                    $array_volume[$j] = $vol_data_15[$i];
                    $j++;
                }
            }else if(count($vol_data_16)!=0){
                for($i=0; $i<sizeof($vol_data_16); $i+=1){
                    $array_volume[$j] = $vol_data_16[$i];
                    $j++;
                }
            }
        }else if($interval == 2){
            if(count($vol_data_1)!=0){
                for($i=0; $i<sizeof($vol_data_1); $i+=2){
                    $array_volume[$j] = $vol_data_1[$i];
                    $j++;
                }
            }else if(count($vol_data_2)!=0){
                for($i=0; $i<sizeof($vol_data_2); $i+=2){
                    $array_volume[$j] = $vol_data_2[$i];
                    $j++;
                }
            }else if(count($vol_data_3)!=0){
                for($i=0; $i<sizeof($vol_data_3); $i+=2){
                    $array_volume[$j] = $vol_data_3[$i];
                    $j++;
                }
            }else if(count($vol_data_4)!=0){
                for($i=0; $i<sizeof($vol_data_4); $i+=2){
                    $array_volume[$j] = $vol_data_4[$i];
                    $j++;
                }
            }else if(count($vol_data_5)!=0){
                for($i=0; $i<sizeof($vol_data_5); $i+=2){
                    $array_volume[$j] = $vol_data_5[$i];
                    $j++;
                }
            }else if(count($vol_data_6)!=0){
                for($i=0; $i<sizeof($vol_data_6); $i+=2){
                    $array_volume[$j] = $vol_data_6[$i];
                    $j++;
                }
            }else if(count($vol_data_7)!=0){
                for($i=0; $i<sizeof($vol_data_7); $i+=2){
                    $array_volume[$j] = $vol_data_7[$i];
                    $j++;
                }
            }else if(count($vol_data_8)!=0){
                for($i=0; $i<sizeof($vol_data_8); $i+=2){
                    $array_volume[$j] = $vol_data_8[$i];
                    $j++;
                }
            }else if(count($vol_data_9)!=0){
                for($i=0; $i<sizeof($vol_data_9); $i+=2){
                    $array_volume[$j] = $vol_data_9[$i];
                    $j++;
                }
            }else if(count($vol_data_10)!=0){
                for($i=0; $i<sizeof($vol_data_10); $i+=2){
                    $array_volume[$j] = $vol_data_10[$i];
                    $j++;
                }
            }else if(count($vol_data_11)!=0){
                for($i=0; $i<sizeof($vol_data_11); $i+=2){
                    $array_volume[$j] = $vol_data_11[$i];
                    $j++;
                }
            }else if(count($vol_data_12)!=0){
                for($i=0; $i<sizeof($vol_data_12); $i+=2){
                    $array_volume[$j] = $vol_data_12[$i];
                    $j++;
                }
            }else if(count($vol_data_13)!=0){
                for($i=0; $i<sizeof($vol_data_13); $i+=2){
                    $array_volume[$j] = $vol_data_13[$i];
                    $j++;
                }
            }else if(count($vol_data_14)!=0){
                for($i=0; $i<sizeof($vol_data_14); $i+=2){
                    $array_volume[$j] = $vol_data_14[$i];
                    $j++;
                }
            }else if(count($vol_data_15)!=0){
                for($i=0; $i<sizeof($vol_data_15); $i+=2){
                    $array_volume[$j] = $vol_data_15[$i];
                    $j++;
                }
            }else if(count($vol_data_16)!=0){
                for($i=0; $i<sizeof($vol_data_16); $i+=2){
                    $array_volume[$j] = $vol_data_16[$i];
                    $j++;
                }
            }
        }else if($interval == 5){
            if(count($vol_data_1)!=0){
                for($i=0; $i<sizeof($vol_data_1); $i+=5){
                    $array_volume[$j] = $vol_data_1[$i];
                    $j++;
                }
            }else if(count($vol_data_2)!=0){
                for($i=0; $i<sizeof($vol_data_2); $i+=5){
                    $array_volume[$j] = $vol_data_2[$i];
                    $j++;
                }
            }else if(count($vol_data_3)!=0){
                for($i=0; $i<sizeof($vol_data_3); $i+=5){
                    $array_volume[$j] = $vol_data_3[$i];
                    $j++;
                }
            }else if(count($vol_data_4)!=0){
                for($i=0; $i<sizeof($vol_data_4); $i+=5){
                    $array_volume[$j] = $vol_data_4[$i];
                    $j++;
                }
            }else if(count($vol_data_5)!=0){
                for($i=0; $i<sizeof($vol_data_5); $i+=5){
                    $array_volume[$j] = $vol_data_5[$i];
                    $j++;
                }
            }else if(count($vol_data_6)!=0){
                for($i=0; $i<sizeof($vol_data_6); $i+=5){
                    $array_volume[$j] = $vol_data_6[$i];
                    $j++;
                }
            }else if(count($vol_data_7)!=0){
                for($i=0; $i<sizeof($vol_data_7); $i+=5){
                    $array_volume[$j] = $vol_data_7[$i];
                    $j++;
                }
            }else if(count($vol_data_8)!=0){
                for($i=0; $i<sizeof($vol_data_8); $i+=5){
                    $array_volume[$j] = $vol_data_8[$i];
                    $j++;
                }
            }else if(count($vol_data_9)!=0){
                for($i=0; $i<sizeof($vol_data_9); $i+=5){
                    $array_volume[$j] = $vol_data_9[$i];
                    $j++;
                }
            }else if(count($vol_data_10)!=0){
                for($i=0; $i<sizeof($vol_data_10); $i+=5){
                    $array_volume[$j] = $vol_data_10[$i];
                    $j++;
                }
            }else if(count($vol_data_11)!=0){
                for($i=0; $i<sizeof($vol_data_11); $i+=5){
                    $array_volume[$j] = $vol_data_11[$i];
                    $j++;
                }
            }else if(count($vol_data_12)!=0){
                for($i=0; $i<sizeof($vol_data_12); $i+=5){
                    $array_volume[$j] = $vol_data_12[$i];
                    $j++;
                }
            }else if(count($vol_data_13)!=0){
                for($i=0; $i<sizeof($vol_data_13); $i+=5){
                    $array_volume[$j] = $vol_data_13[$i];
                    $j++;
                }
            }else if(count($vol_data_14)!=0){
                for($i=0; $i<sizeof($vol_data_14); $i+=5){
                    $array_volume[$j] = $vol_data_14[$i];
                    $j++;
                }
            }else if(count($vol_data_15)!=0){
                for($i=0; $i<sizeof($vol_data_15); $i+=5){
                    $array_volume[$j] = $vol_data_15[$i];
                    $j++;
                }
            }else if(count($vol_data_16)!=0){
                for($i=0; $i<sizeof($vol_data_16); $i+=5){
                    $array_volume[$j] = $vol_data_16[$i];
                    $j++;
                }
            }
        }else if($interval == 10){
            if(count($vol_data_1)!=0){
                for($i=0; $i<sizeof($vol_data_1); $i+=10){
                    $array_volume[$j] = $vol_data_1[$i];
                    $j++;
                }
            }else if(count($vol_data_2)!=0){
                for($i=0; $i<sizeof($vol_data_2); $i+=10){
                    $array_volume[$j] = $vol_data_2[$i];
                    $j++;
                }
            }else if(count($vol_data_3)!=0){
                for($i=0; $i<sizeof($vol_data_3); $i+=10){
                    $array_volume[$j] = $vol_data_3[$i];
                    $j++;
                }
            }else if(count($vol_data_4)!=0){
                for($i=0; $i<sizeof($vol_data_4); $i+=10){
                    $array_volume[$j] = $vol_data_4[$i];
                    $j++;
                }
            }else if(count($vol_data_5)!=0){
                for($i=0; $i<sizeof($vol_data_5); $i+=10){
                    $array_volume[$j] = $vol_data_5[$i];
                    $j++;
                }
            }else if(count($vol_data_6)!=0){
                for($i=0; $i<sizeof($vol_data_6); $i+=10){
                    $array_volume[$j] = $vol_data_6[$i];
                    $j++;
                }
            }else if(count($vol_data_7)!=0){
                for($i=0; $i<sizeof($vol_data_7); $i+=10){
                    $array_volume[$j] = $vol_data_7[$i];
                    $j++;
                }
            }else if(count($vol_data_8)!=0){
                for($i=0; $i<sizeof($vol_data_8); $i+=10){
                    $array_volume[$j] = $vol_data_8[$i];
                    $j++;
                }
            }else if(count($vol_data_9)!=0){
                for($i=0; $i<sizeof($vol_data_9); $i+=10){
                    $array_volume[$j] = $vol_data_9[$i];
                    $j++;
                }
            }else if(count($vol_data_10)!=0){
                for($i=0; $i<sizeof($vol_data_10); $i+=10){
                    $array_volume[$j] = $vol_data_10[$i];
                    $j++;
                }
            }else if(count($vol_data_11)!=0){
                for($i=0; $i<sizeof($vol_data_11); $i+=10){
                    $array_volume[$j] = $vol_data_11[$i];
                    $j++;
                }
            }else if(count($vol_data_12)!=0){
                for($i=0; $i<sizeof($vol_data_12); $i+=10){
                    $array_volume[$j] = $vol_data_12[$i];
                    $j++;
                }
            }else if(count($vol_data_13)!=0){
                for($i=0; $i<sizeof($vol_data_13); $i+=10){
                    $array_volume[$j] = $vol_data_13[$i];
                    $j++;
                }
            }else if(count($vol_data_14)!=0){
                for($i=0; $i<sizeof($vol_data_14); $i+=10){
                    $array_volume[$j] = $vol_data_14[$i];
                    $j++;
                }
            }else if(count($vol_data_15)!=0){
                for($i=0; $i<sizeof($vol_data_15); $i+=10){
                    $array_volume[$j] = $vol_data_15[$i];
                    $j++;
                }
            }else if(count($vol_data_16)!=0){
                for($i=0; $i<sizeof($vol_data_16); $i+=10){
                    $array_volume[$j] = $vol_data_16[$i];
                    $j++;
                }
            }
        }else if($interval == 30){
            if(count($vol_data_1)!=0){
                for($i=0; $i<sizeof($vol_data_1); $i+=30){
                    $array_volume[$j] = $vol_data_1[$i];
                    $j++;
                }
            }else if(count($vol_data_2)!=0){
                for($i=0; $i<sizeof($vol_data_2); $i+=30){
                    $array_volume[$j] = $vol_data_2[$i];
                    $j++;
                }
            }else if(count($vol_data_3)!=0){
                for($i=0; $i<sizeof($vol_data_3); $i+=30){
                    $array_volume[$j] = $vol_data_3[$i];
                    $j++;
                }
            }else if(count($vol_data_4)!=0){
                for($i=0; $i<sizeof($vol_data_4); $i+=30){
                    $array_volume[$j] = $vol_data_4[$i];
                    $j++;
                }
            }else if(count($vol_data_5)!=0){
                for($i=0; $i<sizeof($vol_data_5); $i+=30){
                    $array_volume[$j] = $vol_data_5[$i];
                    $j++;
                }
            }else if(count($vol_data_6)!=0){
                for($i=0; $i<sizeof($vol_data_6); $i+=30){
                    $array_volume[$j] = $vol_data_6[$i];
                    $j++;
                }
            }else if(count($vol_data_7)!=0){
                for($i=0; $i<sizeof($vol_data_7); $i+=30){
                    $array_volume[$j] = $vol_data_7[$i];
                    $j++;
                }
            }else if(count($vol_data_8)!=0){
                for($i=0; $i<sizeof($vol_data_8); $i+=30){
                    $array_volume[$j] = $vol_data_8[$i];
                    $j++;
                }
            }else if(count($vol_data_9)!=0){
                for($i=0; $i<sizeof($vol_data_9); $i+=30){
                    $array_volume[$j] = $vol_data_9[$i];
                    $j++;
                }
            }else if(count($vol_data_10)!=0){
                for($i=0; $i<sizeof($vol_data_10); $i+=30){
                    $array_volume[$j] = $vol_data_10[$i];
                    $j++;
                }
            }else if(count($vol_data_11)!=0){
                for($i=0; $i<sizeof($vol_data_11); $i+=30){
                    $array_volume[$j] = $vol_data_11[$i];
                    $j++;
                }
            }else if(count($vol_data_12)!=0){
                for($i=0; $i<sizeof($vol_data_12); $i+=30){
                    $array_volume[$j] = $vol_data_12[$i];
                    $j++;
                }
            }else if(count($vol_data_13)!=0){
                for($i=0; $i<sizeof($vol_data_13); $i+=30){
                    $array_volume[$j] = $vol_data_13[$i];
                    $j++;
                }
            }else if(count($vol_data_14)!=0){
                for($i=0; $i<sizeof($vol_data_14); $i+=30){
                    $array_volume[$j] = $vol_data_14[$i];
                    $j++;
                }
            }else if(count($vol_data_15)!=0){
                for($i=0; $i<sizeof($vol_data_15); $i+=30){
                    $array_volume[$j] = $vol_data_15[$i];
                    $j++;
                }
            }else if(count($vol_data_16)!=0){
                for($i=0; $i<sizeof($vol_data_16); $i+=30){
                    $array_volume[$j] = $vol_data_16[$i];
                    $j++;
                }
            }
        }else if($interval == 60){
            if(count($vol_data_1)!=0){
                for($i=0; $i<sizeof($vol_data_1); $i+=60){
                    $array_volume[$j] = $vol_data_1[$i];
                    $j++;
                }
            }else if(count($vol_data_2)!=0){
                for($i=0; $i<sizeof($vol_data_2); $i+=60){
                    $array_volume[$j] = $vol_data_2[$i];
                    $j++;
                }
            }else if(count($vol_data_3)!=0){
                for($i=0; $i<sizeof($vol_data_3); $i+=60){
                    $array_volume[$j] = $vol_data_3[$i];
                    $j++;
                }
            }else if(count($vol_data_4)!=0){
                for($i=0; $i<sizeof($vol_data_4); $i+=60){
                    $array_volume[$j] = $vol_data_4[$i];
                    $j++;
                }
            }else if(count($vol_data_5)!=0){
                for($i=0; $i<sizeof($vol_data_5); $i+=60){
                    $array_volume[$j] = $vol_data_5[$i];
                    $j++;
                }
            }else if(count($vol_data_6)!=0){
                for($i=0; $i<sizeof($vol_data_6); $i+=60){
                    $array_volume[$j] = $vol_data_6[$i];
                    $j++;
                }
            }else if(count($vol_data_7)!=0){
                for($i=0; $i<sizeof($vol_data_7); $i+=60){
                    $array_volume[$j] = $vol_data_7[$i];
                    $j++;
                }
            }else if(count($vol_data_8)!=0){
                for($i=0; $i<sizeof($vol_data_8); $i+=60){
                    $array_volume[$j] = $vol_data_8[$i];
                    $j++;
                }
            }else if(count($vol_data_9)!=0){
                for($i=0; $i<sizeof($vol_data_9); $i+=60){
                    $array_volume[$j] = $vol_data_9[$i];
                    $j++;
                }
            }else if(count($vol_data_10)!=0){
                for($i=0; $i<sizeof($vol_data_10); $i+=60){
                    $array_volume[$j] = $vol_data_10[$i];
                    $j++;
                }
            }else if(count($vol_data_11)!=0){
                for($i=0; $i<sizeof($vol_data_11); $i+=60){
                    $array_volume[$j] = $vol_data_11[$i];
                    $j++;
                }
            }else if(count($vol_data_12)!=0){
                for($i=0; $i<sizeof($vol_data_12); $i+=60){
                    $array_volume[$j] = $vol_data_12[$i];
                    $j++;
                }
            }else if(count($vol_data_13)!=0){
                for($i=0; $i<sizeof($vol_data_13); $i+=60){
                    $array_volume[$j] = $vol_data_13[$i];
                    $j++;
                }
            }else if(count($vol_data_14)!=0){
                for($i=0; $i<sizeof($vol_data_14); $i+=60){
                    $array_volume[$j] = $vol_data_14[$i];
                    $j++;
                }
            }else if(count($vol_data_15)!=0){
                for($i=0; $i<sizeof($vol_data_15); $i+=60){
                    $array_volume[$j] = $vol_data_15[$i];
                    $j++;
                }
            }else if(count($vol_data_16)!=0){
                for($i=0; $i<sizeof($vol_data_16); $i+=60){
                    $array_volume[$j] = $vol_data_16[$i];
                    $j++;
                }
            }
        }
        // For Temperature//////////////////
        if($interval == 1){
            if(count($tmp_db_data_1)!=0){
                for($i=0; $i<sizeof($tmp_db_data_1); $i+=1){
                    $array_temperture[$j] = $tmp_db_data_1[$i];
                    $j++;
                }
            }else if(count($tmp_db_data_2)!=0){
                for($i=0; $i<sizeof($tmp_db_data_2); $i+=1){
                    $array_temperture[$j] = $tmp_db_data_2[$i];
                    $j++;
                }
            }else if(count($tmp_db_data_3)!=0){
                for($i=0; $i<sizeof($tmp_db_data_3); $i+=1){
                    $array_temperture[$j] = $tmp_db_data_3[$i];
                    $j++;
                }
            }else if(count($tmp_db_data_4)!=0){
                for($i=0; $i<sizeof($tmp_db_data_4); $i+=1){
                    $array_temperture[$j] = $tmp_db_data_4[$i];
                    $j++;
                }
            }else if(count($tmp_db_data_5)!=0){
                for($i=0; $i<sizeof($tmp_db_data_5); $i+=1){
                    $array_temperture[$j] = $tmp_db_data_5[$i];
                    $j++;
                }
            }else if(count($tmp_db_data_6)!=0){
                for($i=0; $i<sizeof($tmp_db_data_6); $i+=1){
                    $array_temperture[$j] = $tmp_db_data_6[$i];
                    $j++;
                }
            }else if(count($tmp_db_data_7)!=0){
                for($i=0; $i<sizeof($tmp_db_data_7); $i+=1){
                    $array_temperture[$j] = $tmp_db_data_7[$i];
                    $j++;
                }
            }else if(count($tmp_db_data_8)!=0){
                for($i=0; $i<sizeof($tmp_db_data_8); $i+=1){
                    $array_temperture[$j] = $tmp_db_data_8[$i];
                    $j++;
                }
            }else if(count($tmp_db_data_9)!=0){
                for($i=0; $i<sizeof($tmp_db_data_9); $i+=1){
                    $array_temperture[$j] = $tmp_db_data_9[$i];
                    $j++;
                }
            }else if(count($tmp_db_data_10)!=0){
                for($i=0; $i<sizeof($tmp_db_data_10); $i+=1){
                    $array_temperture[$j] = $tmp_db_data_10[$i];
                    $j++;
                }
            }else if(count($tmp_db_data_11)!=0){
                for($i=0; $i<sizeof($tmp_db_data_11); $i+=1){
                    $array_temperture[$j] = $tmp_db_data_11[$i];
                    $j++;
                }
            }else if(count($tmp_db_data_12)!=0){
                for($i=0; $i<sizeof($tmp_db_data_12); $i+=1){
                    $array_temperture[$j] = $tmp_db_data_12[$i];
                    $j++;
                }
            }else if(count($tmp_db_data_13)!=0){
                for($i=0; $i<sizeof($tmp_db_data_13); $i+=1){
                    $array_temperture[$j] = $tmp_db_data_13[$i];
                    $j++;
                }
            }else if(count($tmp_db_data_14)!=0){
                for($i=0; $i<sizeof($tmp_db_data_14); $i+=1){
                    $array_temperture[$j] = $tmp_db_data_14[$i];
                    $j++;
                }
            }else if(count($tmp_db_data_15)!=0){
                for($i=0; $i<sizeof($tmp_db_data_15); $i+=1){
                    $array_temperture[$j] = $tmp_db_data_15[$i];
                    $j++;
                }
            }else if(count($tmp_db_data_16)!=0){
                for($i=0; $i<sizeof($tmp_db_data_16); $i+=1){
                    $array_temperture[$j] = $tmp_db_data_16[$i];
                    $j++;
                }
            }
        }else if($interval == 2){
            if(count($tmp_db_data_1)!=0){
                for($i=0; $i<sizeof($tmp_db_data_1); $i+=2){
                    $array_temperture[$j] = $tmp_db_data_1[$i];
                    $j++;
                }
            }else if(count($tmp_db_data_2)!=0){
                for($i=0; $i<sizeof($tmp_db_data_2); $i+=2){
                    $array_temperture[$j] = $tmp_db_data_2[$i];
                    $j++;
                }
            }else if(count($tmp_db_data_3)!=0){
                for($i=0; $i<sizeof($tmp_db_data_3); $i+=2){
                    $array_temperture[$j] = $tmp_db_data_3[$i];
                    $j++;
                }
            }else if(count($tmp_db_data_4)!=0){
                for($i=0; $i<sizeof($tmp_db_data_4); $i+=2){
                    $array_temperture[$j] = $tmp_db_data_4[$i];
                    $j++;
                }
            }else if(count($tmp_db_data_5)!=0){
                for($i=0; $i<sizeof($tmp_db_data_5); $i+=2){
                    $array_temperture[$j] = $tmp_db_data_5[$i];
                    $j++;
                }
            }else if(count($tmp_db_data_6)!=0){
                for($i=0; $i<sizeof($tmp_db_data_6); $i+=2){
                    $array_temperture[$j] = $tmp_db_data_6[$i];
                    $j++;
                }
            }else if(count($tmp_db_data_7)!=0){
                for($i=0; $i<sizeof($tmp_db_data_7); $i+=2){
                    $array_temperture[$j] = $tmp_db_data_7[$i];
                    $j++;
                }
            }else if(count($tmp_db_data_8)!=0){
                for($i=0; $i<sizeof($tmp_db_data_8); $i+=2){
                    $array_temperture[$j] = $tmp_db_data_8[$i];
                    $j++;
                }
            }else if(count($tmp_db_data_9)!=0){
                for($i=0; $i<sizeof($tmp_db_data_9); $i+=2){
                    $array_temperture[$j] = $tmp_db_data_9[$i];
                    $j++;
                }
            }else if(count($tmp_db_data_10)!=0){
                for($i=0; $i<sizeof($tmp_db_data_10); $i+=2){
                    $array_temperture[$j] = $tmp_db_data_10[$i];
                    $j++;
                }
            }else if(count($tmp_db_data_11)!=0){
                for($i=0; $i<sizeof($tmp_db_data_11); $i+=2){
                    $array_temperture[$j] = $tmp_db_data_11[$i];
                    $j++;
                }
            }else if(count($tmp_db_data_12)!=0){
                for($i=0; $i<sizeof($tmp_db_data_12); $i+=2){
                    $array_temperture[$j] = $tmp_db_data_12[$i];
                    $j++;
                }
            }else if(count($tmp_db_data_13)!=0){
                for($i=0; $i<sizeof($tmp_db_data_13); $i+=2){
                    $array_temperture[$j] = $tmp_db_data_13[$i];
                    $j++;
                }
            }else if(count($tmp_db_data_14)!=0){
                for($i=0; $i<sizeof($tmp_db_data_14); $i+=2){
                    $array_temperture[$j] = $tmp_db_data_14[$i];
                    $j++;
                }
            }else if(count($tmp_db_data_15)!=0){
                for($i=0; $i<sizeof($tmp_db_data_15); $i+=2){
                    $array_temperture[$j] = $tmp_db_data_15[$i];
                    $j++;
                }
            }else if(count($tmp_db_data_16)!=0){
                for($i=0; $i<sizeof($tmp_db_data_16); $i+=2){
                    $array_temperture[$j] = $tmp_db_data_16[$i];
                    $j++;
                }
            }
        }else if($interval == 5){
            if(count($tmp_db_data_1)!=0){
                for($i=0; $i<sizeof($tmp_db_data_1); $i+=5){
                    $array_temperture[$j] = $tmp_db_data_1[$i];
                    $j++;
                }
            }else if(count($tmp_db_data_2)!=0){
                for($i=0; $i<sizeof($tmp_db_data_2); $i+=5){
                    $array_temperture[$j] = $tmp_db_data_2[$i];
                    $j++;
                }
            }else if(count($tmp_db_data_3)!=0){
                for($i=0; $i<sizeof($tmp_db_data_3); $i+=5){
                    $array_temperture[$j] = $tmp_db_data_3[$i];
                    $j++;
                }
            }else if(count($tmp_db_data_4)!=0){
                for($i=0; $i<sizeof($tmp_db_data_4); $i+=5){
                    $array_temperture[$j] = $tmp_db_data_4[$i];
                    $j++;
                }
            }else if(count($tmp_db_data_5)!=0){
                for($i=0; $i<sizeof($tmp_db_data_5); $i+=5){
                    $array_temperture[$j] = $tmp_db_data_5[$i];
                    $j++;
                }
            }else if(count($tmp_db_data_6)!=0){
                for($i=0; $i<sizeof($tmp_db_data_6); $i+=5){
                    $array_temperture[$j] = $tmp_db_data_6[$i];
                    $j++;
                }
            }else if(count($tmp_db_data_7)!=0){
                for($i=0; $i<sizeof($tmp_db_data_7); $i+=5){
                    $array_temperture[$j] = $tmp_db_data_7[$i];
                    $j++;
                }
            }else if(count($tmp_db_data_8)!=0){
                for($i=0; $i<sizeof($tmp_db_data_8); $i+=5){
                    $array_temperture[$j] = $tmp_db_data_8[$i];
                    $j++;
                }
            }else if(count($tmp_db_data_9)!=0){
                for($i=0; $i<sizeof($tmp_db_data_9); $i+=5){
                    $array_temperture[$j] = $tmp_db_data_9[$i];
                    $j++;
                }
            }else if(count($tmp_db_data_10)!=0){
                for($i=0; $i<sizeof($tmp_db_data_10); $i+=5){
                    $array_temperture[$j] = $tmp_db_data_10[$i];
                    $j++;
                }
            }else if(count($tmp_db_data_11)!=0){
                for($i=0; $i<sizeof($tmp_db_data_11); $i+=5){
                    $array_temperture[$j] = $tmp_db_data_11[$i];
                    $j++;
                }
            }else if(count($tmp_db_data_12)!=0){
                for($i=0; $i<sizeof($tmp_db_data_12); $i+=5){
                    $array_temperture[$j] = $tmp_db_data_12[$i];
                    $j++;
                }
            }else if(count($tmp_db_data_13)!=0){
                for($i=0; $i<sizeof($tmp_db_data_13); $i+=5){
                    $array_temperture[$j] = $tmp_db_data_13[$i];
                    $j++;
                }
            }else if(count($tmp_db_data_14)!=0){
                for($i=0; $i<sizeof($tmp_db_data_14); $i+=5){
                    $array_temperture[$j] = $tmp_db_data_14[$i];
                    $j++;
                }
            }else if(count($tmp_db_data_15)!=0){
                for($i=0; $i<sizeof($tmp_db_data_15); $i+=5){
                    $array_temperture[$j] = $tmp_db_data_15[$i];
                    $j++;
                }
            }else if(count($tmp_db_data_16)!=0){
                for($i=0; $i<sizeof($tmp_db_data_16); $i+=5){
                    $array_temperture[$j] = $tmp_db_data_16[$i];
                    $j++;
                }
            }
        }else if($interval == 10){
            if(count($tmp_db_data_1)!=0){
                for($i=0; $i<sizeof($tmp_db_data_1); $i+=10){
                    $array_temperture[$j] = $tmp_db_data_1[$i];
                    $j++;
                }
            }else if(count($tmp_db_data_2)!=0){
                for($i=0; $i<sizeof($tmp_db_data_2); $i+=10){
                    $array_temperture[$j] = $tmp_db_data_2[$i];
                    $j++;
                }
            }else if(count($tmp_db_data_3)!=0){
                for($i=0; $i<sizeof($tmp_db_data_3); $i+=10){
                    $array_temperture[$j] = $tmp_db_data_3[$i];
                    $j++;
                }
            }else if(count($tmp_db_data_4)!=0){
                for($i=0; $i<sizeof($tmp_db_data_4); $i+=10){
                    $array_temperture[$j] = $tmp_db_data_4[$i];
                    $j++;
                }
            }else if(count($tmp_db_data_5)!=0){
                for($i=0; $i<sizeof($tmp_db_data_5); $i+=10){
                    $array_temperture[$j] = $tmp_db_data_5[$i];
                    $j++;
                }
            }else if(count($tmp_db_data_6)!=0){
                for($i=0; $i<sizeof($tmp_db_data_6); $i+=10){
                    $array_temperture[$j] = $tmp_db_data_6[$i];
                    $j++;
                }
            }else if(count($tmp_db_data_7)!=0){
                for($i=0; $i<sizeof($tmp_db_data_7); $i+=10){
                    $array_temperture[$j] = $tmp_db_data_7[$i];
                    $j++;
                }
            }else if(count($tmp_db_data_8)!=0){
                for($i=0; $i<sizeof($tmp_db_data_8); $i+=10){
                    $array_temperture[$j] = $tmp_db_data_8[$i];
                    $j++;
                }
            }else if(count($tmp_db_data_9)!=0){
                for($i=0; $i<sizeof($tmp_db_data_9); $i+=10){
                    $array_temperture[$j] = $tmp_db_data_9[$i];
                    $j++;
                }
            }else if(count($tmp_db_data_10)!=0){
                for($i=0; $i<sizeof($tmp_db_data_10); $i+=10){
                    $array_temperture[$j] = $tmp_db_data_10[$i];
                    $j++;
                }
            }else if(count($tmp_db_data_11)!=0){
                for($i=0; $i<sizeof($tmp_db_data_11); $i+=10){
                    $array_temperture[$j] = $tmp_db_data_11[$i];
                    $j++;
                }
            }else if(count($tmp_db_data_12)!=0){
                for($i=0; $i<sizeof($tmp_db_data_12); $i+=10){
                    $array_temperture[$j] = $tmp_db_data_12[$i];
                    $j++;
                }
            }else if(count($tmp_db_data_13)!=0){
                for($i=0; $i<sizeof($tmp_db_data_13); $i+=10){
                    $array_temperture[$j] = $tmp_db_data_13[$i];
                    $j++;
                }
            }else if(count($tmp_db_data_14)!=0){
                for($i=0; $i<sizeof($tmp_db_data_14); $i+=10){
                    $array_temperture[$j] = $tmp_db_data_14[$i];
                    $j++;
                }
            }else if(count($tmp_db_data_15)!=0){
                for($i=0; $i<sizeof($tmp_db_data_15); $i+=10){
                    $array_temperture[$j] = $tmp_db_data_15[$i];
                    $j++;
                }
            }else if(count($tmp_db_data_16)!=0){
                for($i=0; $i<sizeof($tmp_db_data_16); $i+=10){
                    $array_temperture[$j] = $tmp_db_data_16[$i];
                    $j++;
                }
            }
        }else if($interval == 30){
            if(count($tmp_db_data_1)!=0){
                for($i=0; $i<sizeof($tmp_db_data_1); $i+=30){
                    $array_temperture[$j] = $tmp_db_data_1[$i];
                    $j++;
                }
            }else if(count($tmp_db_data_2)!=0){
                for($i=0; $i<sizeof($tmp_db_data_2); $i+=30){
                    $array_temperture[$j] = $tmp_db_data_2[$i];
                    $j++;
                }
            }else if(count($tmp_db_data_3)!=0){
                for($i=0; $i<sizeof($tmp_db_data_3); $i+=30){
                    $array_temperture[$j] = $tmp_db_data_3[$i];
                    $j++;
                }
            }else if(count($tmp_db_data_4)!=0){
                for($i=0; $i<sizeof($tmp_db_data_4); $i+=30){
                    $array_temperture[$j] = $tmp_db_data_4[$i];
                    $j++;
                }
            }else if(count($tmp_db_data_5)!=0){
                for($i=0; $i<sizeof($tmp_db_data_5); $i+=30){
                    $array_temperture[$j] = $tmp_db_data_5[$i];
                    $j++;
                }
            }else if(count($tmp_db_data_6)!=0){
                for($i=0; $i<sizeof($tmp_db_data_6); $i+=30){
                    $array_temperture[$j] = $tmp_db_data_6[$i];
                    $j++;
                }
            }else if(count($tmp_db_data_7)!=0){
                for($i=0; $i<sizeof($tmp_db_data_7); $i+=30){
                    $array_temperture[$j] = $tmp_db_data_7[$i];
                    $j++;
                }
            }else if(count($tmp_db_data_8)!=0){
                for($i=0; $i<sizeof($tmp_db_data_8); $i+=30){
                    $array_temperture[$j] = $tmp_db_data_8[$i];
                    $j++;
                }
            }else if(count($tmp_db_data_9)!=0){
                for($i=0; $i<sizeof($tmp_db_data_9); $i+=30){
                    $array_temperture[$j] = $tmp_db_data_9[$i];
                    $j++;
                }
            }else if(count($tmp_db_data_10)!=0){
                for($i=0; $i<sizeof($tmp_db_data_10); $i+=30){
                    $array_temperture[$j] = $tmp_db_data_10[$i];
                    $j++;
                }
            }else if(count($tmp_db_data_11)!=0){
                for($i=0; $i<sizeof($tmp_db_data_11); $i+=30){
                    $array_temperture[$j] = $tmp_db_data_11[$i];
                    $j++;
                }
            }else if(count($tmp_db_data_12)!=0){
                for($i=0; $i<sizeof($tmp_db_data_12); $i+=30){
                    $array_temperture[$j] = $tmp_db_data_12[$i];
                    $j++;
                }
            }else if(count($tmp_db_data_13)!=0){
                for($i=0; $i<sizeof($tmp_db_data_13); $i+=30){
                    $array_temperture[$j] = $tmp_db_data_13[$i];
                    $j++;
                }
            }else if(count($tmp_db_data_14)!=0){
                for($i=0; $i<sizeof($tmp_db_data_14); $i+=30){
                    $array_temperture[$j] = $tmp_db_data_14[$i];
                    $j++;
                }
            }else if(count($tmp_db_data_15)!=0){
                for($i=0; $i<sizeof($tmp_db_data_15); $i+=30){
                    $array_temperture[$j] = $tmp_db_data_15[$i];
                    $j++;
                }
            }else if(count($tmp_db_data_16)!=0){
                for($i=0; $i<sizeof($tmp_db_data_16); $i+=30){
                    $array_temperture[$j] = $tmp_db_data_16[$i];
                    $j++;
                }
            }
        }else if($interval == 60){
            if(count($tmp_db_data_1)!=0){
                for($i=0; $i<sizeof($tmp_db_data_1); $i+=60){
                    $array_temperture[$j] = $tmp_db_data_1[$i];
                    $j++;
                }
            }else if(count($tmp_db_data_2)!=0){
                for($i=0; $i<sizeof($tmp_db_data_2); $i+=60){
                    $array_temperture[$j] = $tmp_db_data_2[$i];
                    $j++;
                }
            }else if(count($tmp_db_data_3)!=0){
                for($i=0; $i<sizeof($tmp_db_data_3); $i+=60){
                    $array_temperture[$j] = $tmp_db_data_3[$i];
                    $j++;
                }
            }else if(count($tmp_db_data_4)!=0){
                for($i=0; $i<sizeof($tmp_db_data_4); $i+=60){
                    $array_temperture[$j] = $tmp_db_data_4[$i];
                    $j++;
                }
            }else if(count($tmp_db_data_5)!=0){
                for($i=0; $i<sizeof($tmp_db_data_5); $i+=60){
                    $array_temperture[$j] = $tmp_db_data_5[$i];
                    $j++;
                }
            }else if(count($tmp_db_data_6)!=0){
                for($i=0; $i<sizeof($tmp_db_data_6); $i+=60){
                    $array_temperture[$j] = $tmp_db_data_6[$i];
                    $j++;
                }
            }else if(count($tmp_db_data_7)!=0){
                for($i=0; $i<sizeof($tmp_db_data_7); $i+=60){
                    $array_temperture[$j] = $tmp_db_data_7[$i];
                    $j++;
                }
            }else if(count($tmp_db_data_8)!=0){
                for($i=0; $i<sizeof($tmp_db_data_8); $i+=60){
                    $array_temperture[$j] = $tmp_db_data_8[$i];
                    $j++;
                }
            }else if(count($tmp_db_data_9)!=0){
                for($i=0; $i<sizeof($tmp_db_data_9); $i+=60){
                    $array_temperture[$j] = $tmp_db_data_9[$i];
                    $j++;
                }
            }else if(count($tmp_db_data_10)!=0){
                for($i=0; $i<sizeof($tmp_db_data_10); $i+=60){
                    $array_temperture[$j] = $tmp_db_data_10[$i];
                    $j++;
                }
            }else if(count($tmp_db_data_11)!=0){
                for($i=0; $i<sizeof($tmp_db_data_11); $i+=60){
                    $array_temperture[$j] = $tmp_db_data_11[$i];
                    $j++;
                }
            }else if(count($tmp_db_data_12)!=0){
                for($i=0; $i<sizeof($tmp_db_data_12); $i+=60){
                    $array_temperture[$j] = $tmp_db_data_12[$i];
                    $j++;
                }
            }else if(count($tmp_db_data_13)!=0){
                for($i=0; $i<sizeof($tmp_db_data_13); $i+=60){
                    $array_temperture[$j] = $tmp_db_data_13[$i];
                    $j++;
                }
            }else if(count($tmp_db_data_14)!=0){
                for($i=0; $i<sizeof($tmp_db_data_14); $i+=60){
                    $array_temperture[$j] = $tmp_db_data_14[$i];
                    $j++;
                }
            }else if(count($tmp_db_data_15)!=0){
                for($i=0; $i<sizeof($tmp_db_data_15); $i+=60){
                    $array_temperture[$j] = $tmp_db_data_15[$i];
                    $j++;
                }
            }else if(count($tmp_db_data_16)!=0){
                for($i=0; $i<sizeof($tmp_db_data_16); $i+=60){
                    $array_temperture[$j] = $tmp_db_data_16[$i];
                    $j++;
                }
            }
        }
        // Flow Meter///////////////////////////////
        if($interval == 1){
            if(count($flow_db_data_1)!=0){
                for($i=0; $i<sizeof($flow_db_data_1); $i+=1){
                    $array_flow[$j] = $flow_db_data_1[$i];
                    $j++;
                }
            }else if(count($flow_db_data_2)!=0){
                for($i=0; $i<sizeof($flow_db_data_2); $i+=1){
                    $array_flow[$j] = $flow_db_data_2[$i];
                    $j++;
                }
            }else if(count($flow_db_data_3)!=0){
                for($i=0; $i<sizeof($flow_db_data_3); $i+=1){
                    $array_flow[$j] = $flow_db_data_3[$i];
                    $j++;
                }
            }else if(count($flow_db_data_4)!=0){
                for($i=0; $i<sizeof($flow_db_data_4); $i+=1){
                    $array_flow[$j] = $flow_db_data_4[$i];
                    $j++;
                }
            }else if(count($flow_db_data_5)!=0){
                for($i=0; $i<sizeof($flow_db_data_5); $i+=1){
                    $array_flow[$j] = $flow_db_data_5[$i];
                    $j++;
                }
            }else if(count($flow_db_data_6)!=0){
                for($i=0; $i<sizeof($flow_db_data_6); $i+=1){
                    $array_flow[$j] = $flow_db_data_6[$i];
                    $j++;
                }
            }else if(count($flow_db_data_7)!=0){
                for($i=0; $i<sizeof($flow_db_data_7); $i+=1){
                    $array_flow[$j] = $flow_db_data_7[$i];
                    $j++;
                }
            }else if(count($flow_db_data_8)!=0){
                for($i=0; $i<sizeof($flow_db_data_8); $i+=1){
                    $array_flow[$j] = $flow_db_data_8[$i];
                    $j++;
                }
            }else if(count($flow_db_data_9)!=0){
                for($i=0; $i<sizeof($flow_db_data_9); $i+=1){
                    $array_flow[$j] = $flow_db_data_9[$i];
                    $j++;
                }
            }else if(count($flow_db_data_10)!=0){
                for($i=0; $i<sizeof($flow_db_data_10); $i+=1){
                    $array_flow[$j] = $flow_db_data_10[$i];
                    $j++;
                }
            }else if(count($flow_db_data_11)!=0){
                for($i=0; $i<sizeof($flow_db_data_11); $i+=1){
                    $array_flow[$j] = $flow_db_data_11[$i];
                    $j++;
                }
            }else if(count($flow_db_data_12)!=0){
                for($i=0; $i<sizeof($flow_db_data_12); $i+=1){
                    $array_flow[$j] = $flow_db_data_12[$i];
                    $j++;
                }
            }else if(count($flow_db_data_13)!=0){
                for($i=0; $i<sizeof($flow_db_data_13); $i+=1){
                    $array_flow[$j] = $flow_db_data_13[$i];
                    $j++;
                }
            }else if(count($flow_db_data_14)!=0){
                for($i=0; $i<sizeof($flow_db_data_14); $i+=1){
                    $array_flow[$j] = $flow_db_data_14[$i];
                    $j++;
                }
            }else if(count($flow_db_data_15)!=0){
                for($i=0; $i<sizeof($flow_db_data_15); $i+=1){
                    $array_flow[$j] = $flow_db_data_15[$i];
                    $j++;
                }
            }else if(count($flow_db_data_16)!=0){
                for($i=0; $i<sizeof($flow_db_data_16); $i+=1){
                    $array_flow[$j] = $flow_db_data_16[$i];
                    $j++;
                }
            }
        }else if($interval == 2){
            if(count($flow_db_data_1)!=0){
                for($i=0; $i<sizeof($flow_db_data_1); $i+=2){
                    $array_flow[$j] = $flow_db_data_1[$i];
                    $j++;
                }
            }else if(count($flow_db_data_2)!=0){
                for($i=0; $i<sizeof($flow_db_data_2); $i+=2){
                    $array_flow[$j] = $flow_db_data_2[$i];
                    $j++;
                }
            }else if(count($flow_db_data_3)!=0){
                for($i=0; $i<sizeof($flow_db_data_3); $i+=2){
                    $array_flow[$j] = $flow_db_data_3[$i];
                    $j++;
                }
            }else if(count($flow_db_data_4)!=0){
                for($i=0; $i<sizeof($flow_db_data_4); $i+=2){
                    $array_flow[$j] = $flow_db_data_4[$i];
                    $j++;
                }
            }else if(count($flow_db_data_5)!=0){
                for($i=0; $i<sizeof($flow_db_data_5); $i+=2){
                    $array_flow[$j] = $flow_db_data_5[$i];
                    $j++;
                }
            }else if(count($flow_db_data_6)!=0){
                for($i=0; $i<sizeof($flow_db_data_6); $i+=2){
                    $array_flow[$j] = $flow_db_data_6[$i];
                    $j++;
                }
            }else if(count($flow_db_data_7)!=0){
                for($i=0; $i<sizeof($flow_db_data_7); $i+=2){
                    $array_flow[$j] = $flow_db_data_7[$i];
                    $j++;
                }
            }else if(count($flow_db_data_8)!=0){
                for($i=0; $i<sizeof($flow_db_data_8); $i+=2){
                    $array_flow[$j] = $flow_db_data_8[$i];
                    $j++;
                }
            }else if(count($flow_db_data_9)!=0){
                for($i=0; $i<sizeof($flow_db_data_9); $i+=2){
                    $array_flow[$j] = $flow_db_data_9[$i];
                    $j++;
                }
            }else if(count($flow_db_data_10)!=0){
                for($i=0; $i<sizeof($flow_db_data_10); $i+=2){
                    $array_flow[$j] = $flow_db_data_10[$i];
                    $j++;
                }
            }else if(count($flow_db_data_11)!=0){
                for($i=0; $i<sizeof($flow_db_data_11); $i+=2){
                    $array_flow[$j] = $flow_db_data_11[$i];
                    $j++;
                }
            }else if(count($flow_db_data_12)!=0){
                for($i=0; $i<sizeof($flow_db_data_12); $i+=2){
                    $array_flow[$j] = $flow_db_data_12[$i];
                    $j++;
                }
            }else if(count($flow_db_data_13)!=0){
                for($i=0; $i<sizeof($flow_db_data_13); $i+=2){
                    $array_flow[$j] = $flow_db_data_13[$i];
                    $j++;
                }
            }else if(count($flow_db_data_14)!=0){
                for($i=0; $i<sizeof($flow_db_data_14); $i+=2){
                    $array_flow[$j] = $flow_db_data_14[$i];
                    $j++;
                }
            }else if(count($flow_db_data_15)!=0){
                for($i=0; $i<sizeof($flow_db_data_15); $i+=2){
                    $array_flow[$j] = $flow_db_data_15[$i];
                    $j++;
                }
            }else if(count($flow_db_data_16)!=0){
                for($i=0; $i<sizeof($flow_db_data_16); $i+=2){
                    $array_flow[$j] = $flow_db_data_16[$i];
                    $j++;
                }
            }
        }else if($interval == 5){
            if(count($flow_db_data_1)!=0){
                for($i=0; $i<sizeof($flow_db_data_1); $i+=5){
                    $array_flow[$j] = $flow_db_data_1[$i];
                    $j++;
                }
            }else if(count($flow_db_data_2)!=0){
                for($i=0; $i<sizeof($flow_db_data_2); $i+=5){
                    $array_flow[$j] = $flow_db_data_2[$i];
                    $j++;
                }
            }else if(count($flow_db_data_3)!=0){
                for($i=0; $i<sizeof($flow_db_data_3); $i+=5){
                    $array_flow[$j] = $flow_db_data_3[$i];
                    $j++;
                }
            }else if(count($flow_db_data_4)!=0){
                for($i=0; $i<sizeof($flow_db_data_4); $i+=5){
                    $array_flow[$j] = $flow_db_data_4[$i];
                    $j++;
                }
            }else if(count($flow_db_data_5)!=0){
                for($i=0; $i<sizeof($flow_db_data_5); $i+=5){
                    $array_flow[$j] = $flow_db_data_5[$i];
                    $j++;
                }
            }else if(count($flow_db_data_6)!=0){
                for($i=0; $i<sizeof($flow_db_data_6); $i+=5){
                    $array_flow[$j] = $flow_db_data_6[$i];
                    $j++;
                }
            }else if(count($flow_db_data_7)!=0){
                for($i=0; $i<sizeof($flow_db_data_7); $i+=5){
                    $array_flow[$j] = $flow_db_data_7[$i];
                    $j++;
                }
            }else if(count($flow_db_data_8)!=0){
                for($i=0; $i<sizeof($flow_db_data_8); $i+=5){
                    $array_flow[$j] = $flow_db_data_8[$i];
                    $j++;
                }
            }else if(count($flow_db_data_9)!=0){
                for($i=0; $i<sizeof($flow_db_data_9); $i+=5){
                    $array_flow[$j] = $flow_db_data_9[$i];
                    $j++;
                }
            }else if(count($flow_db_data_10)!=0){
                for($i=0; $i<sizeof($flow_db_data_10); $i+=5){
                    $array_flow[$j] = $flow_db_data_10[$i];
                    $j++;
                }
            }else if(count($flow_db_data_11)!=0){
                for($i=0; $i<sizeof($flow_db_data_11); $i+=5){
                    $array_flow[$j] = $flow_db_data_11[$i];
                    $j++;
                }
            }else if(count($flow_db_data_12)!=0){
                for($i=0; $i<sizeof($flow_db_data_12); $i+=5){
                    $array_flow[$j] = $flow_db_data_12[$i];
                    $j++;
                }
            }else if(count($flow_db_data_13)!=0){
                for($i=0; $i<sizeof($flow_db_data_13); $i+=5){
                    $array_flow[$j] = $flow_db_data_13[$i];
                    $j++;
                }
            }else if(count($flow_db_data_14)!=0){
                for($i=0; $i<sizeof($flow_db_data_14); $i+=5){
                    $array_flow[$j] = $flow_db_data_14[$i];
                    $j++;
                }
            }else if(count($flow_db_data_15)!=0){
                for($i=0; $i<sizeof($flow_db_data_15); $i+=5){
                    $array_flow[$j] = $flow_db_data_15[$i];
                    $j++;
                }
            }else if(count($flow_db_data_16)!=0){
                for($i=0; $i<sizeof($flow_db_data_16); $i+=5){
                    $array_flow[$j] = $flow_db_data_16[$i];
                    $j++;
                }
            }
        }else if($interval == 10){
            if(count($flow_db_data_1)!=0){
                for($i=0; $i<sizeof($flow_db_data_1); $i+=10){
                    $array_flow[$j] = $flow_db_data_1[$i];
                    $j++;
                }
            }else if(count($flow_db_data_2)!=0){
                for($i=0; $i<sizeof($flow_db_data_2); $i+=10){
                    $array_flow[$j] = $flow_db_data_2[$i];
                    $j++;
                }
            }else if(count($flow_db_data_3)!=0){
                for($i=0; $i<sizeof($flow_db_data_3); $i+=10){
                    $array_flow[$j] = $flow_db_data_3[$i];
                    $j++;
                }
            }else if(count($flow_db_data_4)!=0){
                for($i=0; $i<sizeof($flow_db_data_4); $i+=10){
                    $array_flow[$j] = $flow_db_data_4[$i];
                    $j++;
                }
            }else if(count($flow_db_data_5)!=0){
                for($i=0; $i<sizeof($flow_db_data_5); $i+=10){
                    $array_flow[$j] = $flow_db_data_5[$i];
                    $j++;
                }
            }else if(count($flow_db_data_6)!=0){
                for($i=0; $i<sizeof($flow_db_data_6); $i+=10){
                    $array_flow[$j] = $flow_db_data_6[$i];
                    $j++;
                }
            }else if(count($flow_db_data_7)!=0){
                for($i=0; $i<sizeof($flow_db_data_7); $i+=10){
                    $array_flow[$j] = $flow_db_data_7[$i];
                    $j++;
                }
            }else if(count($flow_db_data_8)!=0){
                for($i=0; $i<sizeof($flow_db_data_8); $i+=10){
                    $array_flow[$j] = $flow_db_data_8[$i];
                    $j++;
                }
            }else if(count($flow_db_data_9)!=0){
                for($i=0; $i<sizeof($flow_db_data_9); $i+=10){
                    $array_flow[$j] = $flow_db_data_9[$i];
                    $j++;
                }
            }else if(count($flow_db_data_10)!=0){
                for($i=0; $i<sizeof($flow_db_data_10); $i+=10){
                    $array_flow[$j] = $flow_db_data_10[$i];
                    $j++;
                }
            }else if(count($flow_db_data_11)!=0){
                for($i=0; $i<sizeof($flow_db_data_11); $i+=10){
                    $array_flow[$j] = $flow_db_data_11[$i];
                    $j++;
                }
            }else if(count($flow_db_data_12)!=0){
                for($i=0; $i<sizeof($flow_db_data_12); $i+=10){
                    $array_flow[$j] = $flow_db_data_12[$i];
                    $j++;
                }
            }else if(count($flow_db_data_13)!=0){
                for($i=0; $i<sizeof($flow_db_data_13); $i+=10){
                    $array_flow[$j] = $flow_db_data_13[$i];
                    $j++;
                }
            }else if(count($flow_db_data_14)!=0){
                for($i=0; $i<sizeof($flow_db_data_14); $i+=10){
                    $array_flow[$j] = $flow_db_data_14[$i];
                    $j++;
                }
            }else if(count($flow_db_data_15)!=0){
                for($i=0; $i<sizeof($flow_db_data_15); $i+=10){
                    $array_flow[$j] = $flow_db_data_15[$i];
                    $j++;
                }
            }else if(count($flow_db_data_16)!=0){
                for($i=0; $i<sizeof($flow_db_data_16); $i+=10){
                    $array_flow[$j] = $flow_db_data_16[$i];
                    $j++;
                }
            }
        }else if($interval == 30){
            if(count($flow_db_data_1)!=0){
                for($i=0; $i<sizeof($flow_db_data_1); $i+=30){
                    $array_flow[$j] = $flow_db_data_1[$i];
                    $j++;
                }
            }else if(count($flow_db_data_2)!=0){
                for($i=0; $i<sizeof($flow_db_data_2); $i+=30){
                    $array_flow[$j] = $flow_db_data_2[$i];
                    $j++;
                }
            }else if(count($flow_db_data_3)!=0){
                for($i=0; $i<sizeof($flow_db_data_3); $i+=30){
                    $array_flow[$j] = $flow_db_data_3[$i];
                    $j++;
                }
            }else if(count($flow_db_data_4)!=0){
                for($i=0; $i<sizeof($flow_db_data_4); $i+=30){
                    $array_flow[$j] = $flow_db_data_4[$i];
                    $j++;
                }
            }else if(count($flow_db_data_5)!=0){
                for($i=0; $i<sizeof($flow_db_data_5); $i+=30){
                    $array_flow[$j] = $flow_db_data_5[$i];
                    $j++;
                }
            }else if(count($flow_db_data_6)!=0){
                for($i=0; $i<sizeof($flow_db_data_6); $i+=30){
                    $array_flow[$j] = $flow_db_data_6[$i];
                    $j++;
                }
            }else if(count($flow_db_data_7)!=0){
                for($i=0; $i<sizeof($flow_db_data_7); $i+=30){
                    $array_flow[$j] = $flow_db_data_7[$i];
                    $j++;
                }
            }else if(count($flow_db_data_8)!=0){
                for($i=0; $i<sizeof($flow_db_data_8); $i+=30){
                    $array_flow[$j] = $flow_db_data_8[$i];
                    $j++;
                }
            }else if(count($flow_db_data_9)!=0){
                for($i=0; $i<sizeof($flow_db_data_9); $i+=30){
                    $array_flow[$j] = $flow_db_data_9[$i];
                    $j++;
                }
            }else if(count($flow_db_data_10)!=0){
                for($i=0; $i<sizeof($flow_db_data_10); $i+=30){
                    $array_flow[$j] = $flow_db_data_10[$i];
                    $j++;
                }
            }else if(count($flow_db_data_11)!=0){
                for($i=0; $i<sizeof($flow_db_data_11); $i+=30){
                    $array_flow[$j] = $flow_db_data_11[$i];
                    $j++;
                }
            }else if(count($flow_db_data_12)!=0){
                for($i=0; $i<sizeof($flow_db_data_12); $i+=30){
                    $array_flow[$j] = $flow_db_data_12[$i];
                    $j++;
                }
            }else if(count($flow_db_data_13)!=0){
                for($i=0; $i<sizeof($flow_db_data_13); $i+=30){
                    $array_flow[$j] = $flow_db_data_13[$i];
                    $j++;
                }
            }else if(count($flow_db_data_14)!=0){
                for($i=0; $i<sizeof($flow_db_data_14); $i+=30){
                    $array_flow[$j] = $flow_db_data_14[$i];
                    $j++;
                }
            }else if(count($flow_db_data_15)!=0){
                for($i=0; $i<sizeof($flow_db_data_15); $i+=30){
                    $array_flow[$j] = $flow_db_data_15[$i];
                    $j++;
                }
            }else if(count($flow_db_data_16)!=0){
                for($i=0; $i<sizeof($flow_db_data_16); $i+=30){
                    $array_flow[$j] = $flow_db_data_16[$i];
                    $j++;
                }
            }
        }else if($interval == 60){
            if(count($flow_db_data_1)!=0){
                for($i=0; $i<sizeof($flow_db_data_1); $i+=60){
                    $array_flow[$j] = $flow_db_data_1[$i];
                    $j++;
                }
            }else if(count($flow_db_data_2)!=0){
                for($i=0; $i<sizeof($flow_db_data_2); $i+=60){
                    $array_flow[$j] = $flow_db_data_2[$i];
                    $j++;
                }
            }else if(count($flow_db_data_3)!=0){
                for($i=0; $i<sizeof($flow_db_data_3); $i+=60){
                    $array_flow[$j] = $flow_db_data_3[$i];
                    $j++;
                }
            }else if(count($flow_db_data_4)!=0){
                for($i=0; $i<sizeof($flow_db_data_4); $i+=60){
                    $array_flow[$j] = $flow_db_data_4[$i];
                    $j++;
                }
            }else if(count($flow_db_data_5)!=0){
                for($i=0; $i<sizeof($flow_db_data_5); $i+=60){
                    $array_flow[$j] = $flow_db_data_5[$i];
                    $j++;
                }
            }else if(count($flow_db_data_6)!=0){
                for($i=0; $i<sizeof($flow_db_data_6); $i+=60){
                    $array_flow[$j] = $flow_db_data_6[$i];
                    $j++;
                }
            }else if(count($flow_db_data_7)!=0){
                for($i=0; $i<sizeof($flow_db_data_7); $i+=60){
                    $array_flow[$j] = $flow_db_data_7[$i];
                    $j++;
                }
            }else if(count($flow_db_data_8)!=0){
                for($i=0; $i<sizeof($flow_db_data_8); $i+=60){
                    $array_flow[$j] = $flow_db_data_8[$i];
                    $j++;
                }
            }else if(count($flow_db_data_9)!=0){
                for($i=0; $i<sizeof($flow_db_data_9); $i+=60){
                    $array_flow[$j] = $flow_db_data_9[$i];
                    $j++;
                }
            }else if(count($flow_db_data_10)!=0){
                for($i=0; $i<sizeof($flow_db_data_10); $i+=60){
                    $array_flow[$j] = $flow_db_data_10[$i];
                    $j++;
                }
            }else if(count($flow_db_data_11)!=0){
                for($i=0; $i<sizeof($flow_db_data_11); $i+=60){
                    $array_flow[$j] = $flow_db_data_11[$i];
                    $j++;
                }
            }else if(count($flow_db_data_12)!=0){
                for($i=0; $i<sizeof($flow_db_data_12); $i+=60){
                    $array_flow[$j] = $flow_db_data_12[$i];
                    $j++;
                }
            }else if(count($flow_db_data_13)!=0){
                for($i=0; $i<sizeof($flow_db_data_13); $i+=60){
                    $array_flow[$j] = $flow_db_data_13[$i];
                    $j++;
                }
            }else if(count($flow_db_data_14)!=0){
                for($i=0; $i<sizeof($flow_db_data_14); $i+=60){
                    $array_flow[$j] = $flow_db_data_14[$i];
                    $j++;
                }
            }else if(count($flow_db_data_15)!=0){
                for($i=0; $i<sizeof($flow_db_data_15); $i+=60){
                    $array_flow[$j] = $flow_db_data_15[$i];
                    $j++;
                }
            }else if(count($flow_db_data_16)!=0){
                for($i=0; $i<sizeof($flow_db_data_16); $i+=60){
                    $array_flow[$j] = $flow_db_data_16[$i];
                    $j++;
                }
            }
        }
        // For FT
        if($interval == 1){
            if(count($ft_db_data_1)!=0){
                for($i=0; $i<sizeof($ft_db_data_1); $i+=1){
                    $array_ft[$j] = $ft_db_data_1[$i];
                    $j++;
                }
            }else if(count($ft_db_data_2)!=0){
                for($i=0; $i<sizeof($ft_db_data_2); $i+=1){
                    $array_ft[$j] = $ft_db_data_2[$i];
                    $j++;
                }
            }else if(count($ft_db_data_3)!=0){
                for($i=0; $i<sizeof($ft_db_data_3); $i+=1){
                    $array_ft[$j] = $ft_db_data_3[$i];
                    $j++;
                }
            }else if(count($ft_db_data_4)!=0){
                for($i=0; $i<sizeof($ft_db_data_4); $i+=1){
                    $array_ft[$j] = $ft_db_data_4[$i];
                    $j++;
                }
            }else if(count($ft_db_data_5)!=0){
                for($i=0; $i<sizeof($ft_db_data_5); $i+=1){
                    $array_ft[$j] = $ft_db_data_5[$i];
                    $j++;
                }
            }else if(count($ft_db_data_6)!=0){
                for($i=0; $i<sizeof($ft_db_data_6); $i+=1){
                    $array_ft[$j] = $ft_db_data_6[$i];
                    $j++;
                }
            }else if(count($ft_db_data_7)!=0){
                for($i=0; $i<sizeof($ft_db_data_7); $i+=1){
                    $array_ft[$j] = $ft_db_data_7[$i];
                    $j++;
                }
            }else if(count($ft_db_data_8)!=0){
                for($i=0; $i<sizeof($ft_db_data_8); $i+=1){
                    $array_ft[$j] = $ft_db_data_8[$i];
                    $j++;
                }
            }else if(count($ft_db_data_9)!=0){
                for($i=0; $i<sizeof($ft_db_data_9); $i+=1){
                    $array_ft[$j] = $ft_db_data_9[$i];
                    $j++;
                }
            }else if(count($ft_db_data_10)!=0){
                for($i=0; $i<sizeof($ft_db_data_10); $i+=1){
                    $array_ft[$j] = $ft_db_data_10[$i];
                    $j++;
                }
            }else if(count($ft_db_data_11)!=0){
                for($i=0; $i<sizeof($ft_db_data_11); $i+=1){
                    $array_ft[$j] = $ft_db_data_11[$i];
                    $j++;
                }
            }else if(count($ft_db_data_12)!=0){
                for($i=0; $i<sizeof($ft_db_data_12); $i+=1){
                    $array_ft[$j] = $ft_db_data_12[$i];
                    $j++;
                }
            }else if(count($ft_db_data_13)!=0){
                for($i=0; $i<sizeof($ft_db_data_13); $i+=1){
                    $array_ft[$j] = $ft_db_data_13[$i];
                    $j++;
                }
            }else if(count($ft_db_data_14)!=0){
                for($i=0; $i<sizeof($ft_db_data_14); $i+=1){
                    $array_ft[$j] = $ft_db_data_14[$i];
                    $j++;
                }
            }else if(count($ft_db_data_15)!=0){
                for($i=0; $i<sizeof($ft_db_data_15); $i+=1){
                    $array_ft[$j] = $ft_db_data_15[$i];
                    $j++;
                }
            }else if(count($ft_db_data_16)!=0){
                for($i=0; $i<sizeof($ft_db_data_16); $i+=1){
                    $array_ft[$j] = $ft_db_data_16[$i];
                    $j++;
                }
            }
        }else if($interval == 2){
            if(count($ft_db_data_1)!=0){
                for($i=0; $i<sizeof($ft_db_data_1); $i+=2){
                    $array_ft[$j] = $ft_db_data_1[$i];
                    $j++;
                }
            }else if(count($ft_db_data_2)!=0){
                for($i=0; $i<sizeof($ft_db_data_2); $i+=2){
                    $array_ft[$j] = $ft_db_data_2[$i];
                    $j++;
                }
            }else if(count($ft_db_data_3)!=0){
                for($i=0; $i<sizeof($ft_db_data_3); $i+=2){
                    $array_ft[$j] = $ft_db_data_3[$i];
                    $j++;
                }
            }else if(count($ft_db_data_4)!=0){
                for($i=0; $i<sizeof($ft_db_data_4); $i+=2){
                    $array_ft[$j] = $ft_db_data_4[$i];
                    $j++;
                }
            }else if(count($ft_db_data_5)!=0){
                for($i=0; $i<sizeof($ft_db_data_5); $i+=2){
                    $array_ft[$j] = $ft_db_data_5[$i];
                    $j++;
                }
            }else if(count($ft_db_data_6)!=0){
                for($i=0; $i<sizeof($ft_db_data_6); $i+=2){
                    $array_ft[$j] = $ft_db_data_6[$i];
                    $j++;
                }
            }else if(count($ft_db_data_7)!=0){
                for($i=0; $i<sizeof($ft_db_data_7); $i+=2){
                    $array_ft[$j] = $ft_db_data_7[$i];
                    $j++;
                }
            }else if(count($ft_db_data_8)!=0){
                for($i=0; $i<sizeof($ft_db_data_8); $i+=2){
                    $array_ft[$j] = $ft_db_data_8[$i];
                    $j++;
                }
            }else if(count($ft_db_data_9)!=0){
                for($i=0; $i<sizeof($ft_db_data_9); $i+=2){
                    $array_ft[$j] = $ft_db_data_9[$i];
                    $j++;
                }
            }else if(count($ft_db_data_10)!=0){
                for($i=0; $i<sizeof($ft_db_data_10); $i+=2){
                    $array_ft[$j] = $ft_db_data_10[$i];
                    $j++;
                }
            }else if(count($ft_db_data_11)!=0){
                for($i=0; $i<sizeof($ft_db_data_11); $i+=2){
                    $array_ft[$j] = $ft_db_data_11[$i];
                    $j++;
                }
            }else if(count($ft_db_data_12)!=0){
                for($i=0; $i<sizeof($ft_db_data_12); $i+=2){
                    $array_ft[$j] = $ft_db_data_12[$i];
                    $j++;
                }
            }else if(count($ft_db_data_13)!=0){
                for($i=0; $i<sizeof($ft_db_data_13); $i+=2){
                    $array_ft[$j] = $ft_db_data_13[$i];
                    $j++;
                }
            }else if(count($ft_db_data_14)!=0){
                for($i=0; $i<sizeof($ft_db_data_14); $i+=2){
                    $array_ft[$j] = $ft_db_data_14[$i];
                    $j++;
                }
            }else if(count($ft_db_data_15)!=0){
                for($i=0; $i<sizeof($ft_db_data_15); $i+=2){
                    $array_ft[$j] = $ft_db_data_15[$i];
                    $j++;
                }
            }else if(count($ft_db_data_16)!=0){
                for($i=0; $i<sizeof($ft_db_data_16); $i+=2){
                    $array_ft[$j] = $ft_db_data_16[$i];
                    $j++;
                }
            }
        }else if($interval == 5){
            if(count($ft_db_data_1)!=0){
                for($i=0; $i<sizeof($ft_db_data_1); $i+=5){
                    $array_ft[$j] = $ft_db_data_1[$i];
                    $j++;
                }
            }else if(count($ft_db_data_2)!=0){
                for($i=0; $i<sizeof($ft_db_data_2); $i+=5){
                    $array_ft[$j] = $ft_db_data_2[$i];
                    $j++;
                }
            }else if(count($ft_db_data_3)!=0){
                for($i=0; $i<sizeof($ft_db_data_3); $i+=5){
                    $array_ft[$j] = $ft_db_data_3[$i];
                    $j++;
                }
            }else if(count($ft_db_data_4)!=0){
                for($i=0; $i<sizeof($ft_db_data_4); $i+=5){
                    $array_ft[$j] = $ft_db_data_4[$i];
                    $j++;
                }
            }else if(count($ft_db_data_5)!=0){
                for($i=0; $i<sizeof($ft_db_data_5); $i+=5){
                    $array_ft[$j] = $ft_db_data_5[$i];
                    $j++;
                }
            }else if(count($ft_db_data_6)!=0){
                for($i=0; $i<sizeof($ft_db_data_6); $i+=5){
                    $array_ft[$j] = $ft_db_data_6[$i];
                    $j++;
                }
            }else if(count($ft_db_data_7)!=0){
                for($i=0; $i<sizeof($ft_db_data_7); $i+=5){
                    $array_ft[$j] = $ft_db_data_7[$i];
                    $j++;
                }
            }else if(count($ft_db_data_8)!=0){
                for($i=0; $i<sizeof($ft_db_data_8); $i+=5){
                    $array_ft[$j] = $ft_db_data_8[$i];
                    $j++;
                }
            }else if(count($ft_db_data_9)!=0){
                for($i=0; $i<sizeof($ft_db_data_9); $i+=5){
                    $array_ft[$j] = $ft_db_data_9[$i];
                    $j++;
                }
            }else if(count($ft_db_data_10)!=0){
                for($i=0; $i<sizeof($ft_db_data_10); $i+=5){
                    $array_ft[$j] = $ft_db_data_10[$i];
                    $j++;
                }
            }else if(count($ft_db_data_11)!=0){
                for($i=0; $i<sizeof($ft_db_data_11); $i+=5){
                    $array_ft[$j] = $ft_db_data_11[$i];
                    $j++;
                }
            }else if(count($ft_db_data_12)!=0){
                for($i=0; $i<sizeof($ft_db_data_12); $i+=5){
                    $array_ft[$j] = $ft_db_data_12[$i];
                    $j++;
                }
            }else if(count($ft_db_data_13)!=0){
                for($i=0; $i<sizeof($ft_db_data_13); $i+=5){
                    $array_ft[$j] = $ft_db_data_13[$i];
                    $j++;
                }
            }else if(count($ft_db_data_14)!=0){
                for($i=0; $i<sizeof($ft_db_data_14); $i+=5){
                    $array_ft[$j] = $ft_db_data_14[$i];
                    $j++;
                }
            }else if(count($ft_db_data_15)!=0){
                for($i=0; $i<sizeof($ft_db_data_15); $i+=5){
                    $array_ft[$j] = $ft_db_data_15[$i];
                    $j++;
                }
            }else if(count($ft_db_data_16)!=0){
                for($i=0; $i<sizeof($ft_db_data_16); $i+=5){
                    $array_ft[$j] = $ft_db_data_16[$i];
                    $j++;
                }
            }
        }else if($interval == 10){
            if(count($ft_db_data_1)!=0){
                for($i=0; $i<sizeof($ft_db_data_1); $i+=10){
                    $array_ft[$j] = $ft_db_data_1[$i];
                    $j++;
                }
            }else if(count($ft_db_data_2)!=0){
                for($i=0; $i<sizeof($ft_db_data_2); $i+=10){
                    $array_ft[$j] = $ft_db_data_2[$i];
                    $j++;
                }
            }else if(count($ft_db_data_3)!=0){
                for($i=0; $i<sizeof($ft_db_data_3); $i+=10){
                    $array_ft[$j] = $ft_db_data_3[$i];
                    $j++;
                }
            }else if(count($ft_db_data_4)!=0){
                for($i=0; $i<sizeof($ft_db_data_4); $i+=10){
                    $array_ft[$j] = $ft_db_data_4[$i];
                    $j++;
                }
            }else if(count($ft_db_data_5)!=0){
                for($i=0; $i<sizeof($ft_db_data_5); $i+=10){
                    $array_ft[$j] = $ft_db_data_5[$i];
                    $j++;
                }
            }else if(count($ft_db_data_6)!=0){
                for($i=0; $i<sizeof($ft_db_data_6); $i+=10){
                    $array_ft[$j] = $ft_db_data_6[$i];
                    $j++;
                }
            }else if(count($ft_db_data_7)!=0){
                for($i=0; $i<sizeof($ft_db_data_7); $i+=10){
                    $array_ft[$j] = $ft_db_data_7[$i];
                    $j++;
                }
            }else if(count($ft_db_data_8)!=0){
                for($i=0; $i<sizeof($ft_db_data_8); $i+=10){
                    $array_ft[$j] = $ft_db_data_8[$i];
                    $j++;
                }
            }else if(count($ft_db_data_9)!=0){
                for($i=0; $i<sizeof($ft_db_data_9); $i+=10){
                    $array_ft[$j] = $ft_db_data_9[$i];
                    $j++;
                }
            }else if(count($ft_db_data_10)!=0){
                for($i=0; $i<sizeof($ft_db_data_10); $i+=10){
                    $array_ft[$j] = $ft_db_data_10[$i];
                    $j++;
                }
            }else if(count($ft_db_data_11)!=0){
                for($i=0; $i<sizeof($ft_db_data_11); $i+=10){
                    $array_ft[$j] = $ft_db_data_11[$i];
                    $j++;
                }
            }else if(count($ft_db_data_12)!=0){
                for($i=0; $i<sizeof($ft_db_data_12); $i+=10){
                    $array_ft[$j] = $ft_db_data_12[$i];
                    $j++;
                }
            }else if(count($ft_db_data_13)!=0){
                for($i=0; $i<sizeof($ft_db_data_13); $i+=10){
                    $array_ft[$j] = $ft_db_data_13[$i];
                    $j++;
                }
            }else if(count($ft_db_data_14)!=0){
                for($i=0; $i<sizeof($ft_db_data_14); $i+=10){
                    $array_ft[$j] = $ft_db_data_14[$i];
                    $j++;
                }
            }else if(count($ft_db_data_15)!=0){
                for($i=0; $i<sizeof($ft_db_data_15); $i+=10){
                    $array_ft[$j] = $ft_db_data_15[$i];
                    $j++;
                }
            }else if(count($ft_db_data_16)!=0){
                for($i=0; $i<sizeof($ft_db_data_16); $i+=10){
                    $array_ft[$j] = $ft_db_data_16[$i];
                    $j++;
                }
            }
        }else if($interval == 30){
            if(count($ft_db_data_1)!=0){
                for($i=0; $i<sizeof($ft_db_data_1); $i+=30){
                    $array_ft[$j] = $ft_db_data_1[$i];
                    $j++;
                }
            }else if(count($ft_db_data_2)!=0){
                for($i=0; $i<sizeof($ft_db_data_2); $i+=30){
                    $array_ft[$j] = $ft_db_data_2[$i];
                    $j++;
                }
            }else if(count($ft_db_data_3)!=0){
                for($i=0; $i<sizeof($ft_db_data_3); $i+=30){
                    $array_ft[$j] = $ft_db_data_3[$i];
                    $j++;
                }
            }else if(count($ft_db_data_4)!=0){
                for($i=0; $i<sizeof($ft_db_data_4); $i+=30){
                    $array_ft[$j] = $ft_db_data_4[$i];
                    $j++;
                }
            }else if(count($ft_db_data_5)!=0){
                for($i=0; $i<sizeof($ft_db_data_5); $i+=30){
                    $array_ft[$j] = $ft_db_data_5[$i];
                    $j++;
                }
            }else if(count($ft_db_data_6)!=0){
                for($i=0; $i<sizeof($ft_db_data_6); $i+=30){
                    $array_ft[$j] = $ft_db_data_6[$i];
                    $j++;
                }
            }else if(count($ft_db_data_7)!=0){
                for($i=0; $i<sizeof($ft_db_data_7); $i+=30){
                    $array_ft[$j] = $ft_db_data_7[$i];
                    $j++;
                }
            }else if(count($ft_db_data_8)!=0){
                for($i=0; $i<sizeof($ft_db_data_8); $i+=30){
                    $array_ft[$j] = $ft_db_data_8[$i];
                    $j++;
                }
            }else if(count($ft_db_data_9)!=0){
                for($i=0; $i<sizeof($ft_db_data_9); $i+=30){
                    $array_ft[$j] = $ft_db_data_9[$i];
                    $j++;
                }
            }else if(count($ft_db_data_10)!=0){
                for($i=0; $i<sizeof($ft_db_data_10); $i+=30){
                    $array_ft[$j] = $ft_db_data_10[$i];
                    $j++;
                }
            }else if(count($ft_db_data_11)!=0){
                for($i=0; $i<sizeof($ft_db_data_11); $i+=30){
                    $array_ft[$j] = $ft_db_data_11[$i];
                    $j++;
                }
            }else if(count($ft_db_data_12)!=0){
                for($i=0; $i<sizeof($ft_db_data_12); $i+=30){
                    $array_ft[$j] = $ft_db_data_12[$i];
                    $j++;
                }
            }else if(count($ft_db_data_13)!=0){
                for($i=0; $i<sizeof($ft_db_data_13); $i+=30){
                    $array_ft[$j] = $ft_db_data_13[$i];
                    $j++;
                }
            }else if(count($ft_db_data_14)!=0){
                for($i=0; $i<sizeof($ft_db_data_14); $i+=30){
                    $array_ft[$j] = $ft_db_data_14[$i];
                    $j++;
                }
            }else if(count($ft_db_data_15)!=0){
                for($i=0; $i<sizeof($ft_db_data_15); $i+=30){
                    $array_ft[$j] = $ft_db_data_15[$i];
                    $j++;
                }
            }else if(count($ft_db_data_16)!=0){
                for($i=0; $i<sizeof($ft_db_data_16); $i+=30){
                    $array_ft[$j] = $ft_db_data_16[$i];
                    $j++;
                }
            }
        }else if($interval == 60){
            if(count($ft_db_data_1)!=0){
                for($i=0; $i<sizeof($ft_db_data_1); $i+=60){
                    $array_ft[$j] = $ft_db_data_1[$i];
                    $j++;
                }
            }else if(count($ft_db_data_2)!=0){
                for($i=0; $i<sizeof($ft_db_data_2); $i+=60){
                    $array_ft[$j] = $ft_db_data_2[$i];
                    $j++;
                }
            }else if(count($ft_db_data_3)!=0){
                for($i=0; $i<sizeof($ft_db_data_3); $i+=60){
                    $array_ft[$j] = $ft_db_data_3[$i];
                    $j++;
                }
            }else if(count($ft_db_data_4)!=0){
                for($i=0; $i<sizeof($ft_db_data_4); $i+=60){
                    $array_ft[$j] = $ft_db_data_4[$i];
                    $j++;
                }
            }else if(count($ft_db_data_5)!=0){
                for($i=0; $i<sizeof($ft_db_data_5); $i+=60){
                    $array_ft[$j] = $ft_db_data_5[$i];
                    $j++;
                }
            }else if(count($ft_db_data_6)!=0){
                for($i=0; $i<sizeof($ft_db_data_6); $i+=60){
                    $array_ft[$j] = $ft_db_data_6[$i];
                    $j++;
                }
            }else if(count($ft_db_data_7)!=0){
                for($i=0; $i<sizeof($ft_db_data_7); $i+=60){
                    $array_ft[$j] = $ft_db_data_7[$i];
                    $j++;
                }
            }else if(count($ft_db_data_8)!=0){
                for($i=0; $i<sizeof($ft_db_data_8); $i+=60){
                    $array_ft[$j] = $ft_db_data_8[$i];
                    $j++;
                }
            }else if(count($ft_db_data_9)!=0){
                for($i=0; $i<sizeof($ft_db_data_9); $i+=60){
                    $array_ft[$j] = $ft_db_data_9[$i];
                    $j++;
                }
            }else if(count($ft_db_data_10)!=0){
                for($i=0; $i<sizeof($ft_db_data_10); $i+=60){
                    $array_ft[$j] = $ft_db_data_10[$i];
                    $j++;
                }
            }else if(count($ft_db_data_11)!=0){
                for($i=0; $i<sizeof($ft_db_data_11); $i+=60){
                    $array_ft[$j] = $ft_db_data_11[$i];
                    $j++;
                }
            }else if(count($ft_db_data_12)!=0){
                for($i=0; $i<sizeof($ft_db_data_12); $i+=60){
                    $array_ft[$j] = $ft_db_data_12[$i];
                    $j++;
                }
            }else if(count($ft_db_data_13)!=0){
                for($i=0; $i<sizeof($ft_db_data_13); $i+=60){
                    $array_ft[$j] = $ft_db_data_13[$i];
                    $j++;
                }
            }else if(count($ft_db_data_14)!=0){
                for($i=0; $i<sizeof($ft_db_data_14); $i+=60){
                    $array_ft[$j] = $ft_db_data_14[$i];
                    $j++;
                }
            }else if(count($ft_db_data_15)!=0){
                for($i=0; $i<sizeof($ft_db_data_15); $i+=60){
                    $array_ft[$j] = $ft_db_data_15[$i];
                    $j++;
                }
            }else if(count($ft_db_data_16)!=0){
                for($i=0; $i<sizeof($ft_db_data_16); $i+=60){
                    $array_ft[$j] = $ft_db_data_16[$i];
                    $j++;
                }
            }
        }
        // For Pressure Transmiter
        if($interval == 1){
            if(count($pt_db_data_1)!=0){
                for($i=0; $i<sizeof($pt_db_data_1); $i+=1){
                    $array_pt[$j] = $pt_db_data_1[$i];
                    $j++;
                }
            }else if(count($pt_db_data_2)!=0){
                for($i=0; $i<sizeof($pt_db_data_2); $i+=1){
                    $array_pt[$j] = $pt_db_data_2[$i];
                    $j++;
                }
            }else if(count($pt_db_data_3)!=0){
                for($i=0; $i<sizeof($pt_db_data_3); $i+=1){
                    $array_pt[$j] = $pt_db_data_3[$i];
                    $j++;
                }
            }else if(count($pt_db_data_4)!=0){
                for($i=0; $i<sizeof($pt_db_data_4); $i+=1){
                    $array_pt[$j] = $pt_db_data_4[$i];
                    $j++;
                }
            }else if(count($pt_db_data_5)!=0){
                for($i=0; $i<sizeof($pt_db_data_5); $i+=1){
                    $array_pt[$j] = $pt_db_data_5[$i];
                    $j++;
                }
            }else if(count($pt_db_data_6)!=0){
                for($i=0; $i<sizeof($pt_db_data_6); $i+=1){
                    $array_pt[$j] = $pt_db_data_6[$i];
                    $j++;
                }
            }else if(count($pt_db_data_7)!=0){
                for($i=0; $i<sizeof($pt_db_data_7); $i+=1){
                    $array_pt[$j] = $pt_db_data_7[$i];
                    $j++;
                }
            }
        }else if($interval == 2){
            if(count($pt_db_data_1)!=0){
                for($i=0; $i<sizeof($pt_db_data_1); $i+=2){
                    $array_pt[$j] = $pt_db_data_1[$i];
                    $j++;
                }
            }else if(count($pt_db_data_2)!=0){
                for($i=0; $i<sizeof($pt_db_data_2); $i+=2){
                    $array_pt[$j] = $pt_db_data_2[$i];
                    $j++;
                }
            }else if(count($pt_db_data_3)!=0){
                for($i=0; $i<sizeof($pt_db_data_3); $i+=2){
                    $array_pt[$j] = $pt_db_data_3[$i];
                    $j++;
                }
            }else if(count($pt_db_data_4)!=0){
                for($i=0; $i<sizeof($pt_db_data_4); $i+=2){
                    $array_pt[$j] = $pt_db_data_4[$i];
                    $j++;
                }
            }else if(count($pt_db_data_5)!=0){
                for($i=0; $i<sizeof($pt_db_data_5); $i+=2){
                    $array_pt[$j] = $pt_db_data_5[$i];
                    $j++;
                }
            }else if(count($pt_db_data_6)!=0){
                for($i=0; $i<sizeof($pt_db_data_6); $i+=2){
                    $array_pt[$j] = $pt_db_data_6[$i];
                    $j++;
                }
            }else if(count($pt_db_data_7)!=0){
                for($i=0; $i<sizeof($pt_db_data_7); $i+=2){
                    $array_pt[$j] = $pt_db_data_7[$i];
                    $j++;
                }
            }
        }else if($interval == 5){
            if(count($pt_db_data_1)!=0){
                for($i=0; $i<sizeof($pt_db_data_1); $i+=5){
                    $array_pt[$j] = $pt_db_data_1[$i];
                    $j++;
                }
            }else if(count($pt_db_data_2)!=0){
                for($i=0; $i<sizeof($pt_db_data_2); $i+=5){
                    $array_pt[$j] = $pt_db_data_2[$i];
                    $j++;
                }
            }else if(count($pt_db_data_3)!=0){
                for($i=0; $i<sizeof($pt_db_data_3); $i+=5){
                    $array_pt[$j] = $pt_db_data_3[$i];
                    $j++;
                }
            }else if(count($pt_db_data_4)!=0){
                for($i=0; $i<sizeof($pt_db_data_4); $i+=5){
                    $array_pt[$j] = $pt_db_data_4[$i];
                    $j++;
                }
            }else if(count($pt_db_data_5)!=0){
                for($i=0; $i<sizeof($pt_db_data_5); $i+=5){
                    $array_pt[$j] = $pt_db_data_5[$i];
                    $j++;
                }
            }else if(count($pt_db_data_6)!=0){
                for($i=0; $i<sizeof($pt_db_data_6); $i+=5){
                    $array_pt[$j] = $pt_db_data_6[$i];
                    $j++;
                }
            }else if(count($pt_db_data_7)!=0){
                for($i=0; $i<sizeof($pt_db_data_7); $i+=5){
                    $array_pt[$j] = $pt_db_data_7[$i];
                    $j++;
                }
            }
        }else if($interval == 10){
            if(count($pt_db_data_1)!=0){
                for($i=0; $i<sizeof($pt_db_data_1); $i+=10){
                    $array_pt[$j] = $pt_db_data_1[$i];
                    $j++;
                }
            }else if(count($pt_db_data_2)!=0){
                for($i=0; $i<sizeof($pt_db_data_2); $i+=10){
                    $array_pt[$j] = $pt_db_data_2[$i];
                    $j++;
                }
            }else if(count($pt_db_data_3)!=0){
                for($i=0; $i<sizeof($pt_db_data_3); $i+=10){
                    $array_pt[$j] = $pt_db_data_3[$i];
                    $j++;
                }
            }else if(count($pt_db_data_4)!=0){
                for($i=0; $i<sizeof($pt_db_data_4); $i+=10){
                    $array_pt[$j] = $pt_db_data_4[$i];
                    $j++;
                }
            }else if(count($pt_db_data_5)!=0){
                for($i=0; $i<sizeof($pt_db_data_5); $i+=10){
                    $array_pt[$j] = $pt_db_data_5[$i];
                    $j++;
                }
            }else if(count($pt_db_data_6)!=0){
                for($i=0; $i<sizeof($pt_db_data_6); $i+=10){
                    $array_pt[$j] = $pt_db_data_6[$i];
                    $j++;
                }
            }else if(count($pt_db_data_7)!=0){
                for($i=0; $i<sizeof($pt_db_data_7); $i+=10){
                    $array_pt[$j] = $pt_db_data_7[$i];
                    $j++;
                }
            }
        }else if($interval == 30){
            if(count($pt_db_data_1)!=0){
                for($i=0; $i<sizeof($pt_db_data_1); $i+=30){
                    $array_pt[$j] = $pt_db_data_1[$i];
                    $j++;
                }
            }else if(count($pt_db_data_2)!=0){
                for($i=0; $i<sizeof($pt_db_data_2); $i+=30){
                    $array_pt[$j] = $pt_db_data_2[$i];
                    $j++;
                }
            }else if(count($pt_db_data_3)!=0){
                for($i=0; $i<sizeof($pt_db_data_3); $i+=30){
                    $array_pt[$j] = $pt_db_data_3[$i];
                    $j++;
                }
            }else if(count($pt_db_data_4)!=0){
                for($i=0; $i<sizeof($pt_db_data_4); $i+=30){
                    $array_pt[$j] = $pt_db_data_4[$i];
                    $j++;
                }
            }else if(count($pt_db_data_5)!=0){
                for($i=0; $i<sizeof($pt_db_data_5); $i+=30){
                    $array_pt[$j] = $pt_db_data_5[$i];
                    $j++;
                }
            }else if(count($pt_db_data_6)!=0){
                for($i=0; $i<sizeof($pt_db_data_6); $i+=30){
                    $array_pt[$j] = $pt_db_data_6[$i];
                    $j++;
                }
            }else if(count($pt_db_data_7)!=0){
                for($i=0; $i<sizeof($pt_db_data_7); $i+=30){
                    $array_pt[$j] = $pt_db_data_7[$i];
                    $j++;
                }
            }
        }else if($interval == 60){
            if(count($pt_db_data_1)!=0){
                for($i=0; $i<sizeof($pt_db_data_1); $i+=60){
                    $array_pt[$j] = $pt_db_data_1[$i];
                    $j++;
                }
            }else if(count($pt_db_data_2)!=0){
                for($i=0; $i<sizeof($pt_db_data_2); $i+=60){
                    $array_pt[$j] = $pt_db_data_2[$i];
                    $j++;
                }
            }else if(count($pt_db_data_3)!=0){
                for($i=0; $i<sizeof($pt_db_data_3); $i+=60){
                    $array_pt[$j] = $pt_db_data_3[$i];
                    $j++;
                }
            }else if(count($pt_db_data_4)!=0){
                for($i=0; $i<sizeof($pt_db_data_4); $i+=60){
                    $array_pt[$j] = $pt_db_data_4[$i];
                    $j++;
                }
            }else if(count($pt_db_data_5)!=0){
                for($i=0; $i<sizeof($pt_db_data_5); $i+=60){
                    $array_pt[$j] = $pt_db_data_5[$i];
                    $j++;
                }
            }else if(count($pt_db_data_6)!=0){
                for($i=0; $i<sizeof($pt_db_data_6); $i+=60){
                    $array_pt[$j] = $pt_db_data_6[$i];
                    $j++;
                }
            }else if(count($pt_db_data_7)!=0){
                for($i=0; $i<sizeof($pt_db_data_7); $i+=60){
                    $array_pt[$j] = $pt_db_data_7[$i];
                    $j++;
                }
            }
        }
        // For RDL 25
        if($interval == 1){
            if(count($db_rdl25_mass)!=0){
                for($i=0; $i<sizeof($db_rdl25_mass); $i+=1){
                    $array_rdl25[$j] = $db_rdl25_mass[$i];
                    $j++;
                }
            }
        }else if($interval == 2){
            if(count($db_rdl25_mass)!=0){
                for($i=0; $i<sizeof($db_rdl25_mass); $i+=2){
                    $array_rdl25[$j] = $db_rdl25_mass[$i];
                    $j++;
                }
            }
        }else if($interval == 5){
            if(count($db_rdl25_mass)!=0){
                for($i=0; $i<sizeof($db_rdl25_mass); $i+=5){
                    $array_rdl25[$j] = $db_rdl25_mass[$i];
                    $j++;
                }
            }
        }else if($interval == 10){
            if(count($db_rdl25_mass)!=0){
                for($i=0; $i<sizeof($db_rdl25_mass); $i+=10){
                    $array_rdl25[$j] = $db_rdl25_mass[$i];
                    $j++;
                }
            }
        }else if($interval == 30){
            if(count($db_rdl25_mass)!=0){
                for($i=0; $i<sizeof($db_rdl25_mass); $i+=30){
                    $array_rdl25[$j] = $db_rdl25_mass[$i];
                    $j++;
                }
            }
        }else if($interval == 60){
            if(count($db_rdl25_mass)!=0){
                for($i=0; $i<sizeof($db_rdl25_mass); $i+=60){
                    $array_rdl25[$j] = $db_rdl25_mass[$i];
                    $j++;
                }
            }
        }
///////////////////////////////////////////////////////////////// 
    

        // For Rdl 25 Mass
        if (sizeof($req->all()[8]) == 1) {
            foreach ($array_rdl25 as $item) {
                array_push($db_time_mass, $item->timing);
                array_push($mass_value, $item->$rdl25_mass);
            }
        }
         // For Level
         if (sizeof($req->all()[0]) == 1) {
            foreach ($array_level as $item) {
                array_push($timing, $item->timing);
                array_push($value_1, $item->$val_1);
            }
        }
        if (sizeof($req->all()[0]) == 2) {
            foreach ($array_level as $item) {
                array_push($timing, $item->timing);
                array_push($value_1, $item->$val_1);
                array_push($value_2, $item->$val_2);
            }
        }
        if (sizeof($req->all()[0]) == 3) {
            foreach ($array_level as $item) {
                array_push($timing, $item->timing);
                array_push($value_1, $item->$val_1);
                array_push($value_2, $item->$val_2);
                array_push($value_3, $item->$val_3);
            }
        }
        if (sizeof($req->all()[0]) == 4) {
            foreach ($array_level as $item) {
                array_push($timing, $item->timing);
                array_push($value_1, $item->$val_1);
                array_push($value_2, $item->$val_2);
                array_push($value_3, $item->$val_3);
                array_push($value_4, $item->$val_4);
            }
        }
        if (sizeof($req->all()[0]) == 5) {
            foreach ($array_level as $item) {
                array_push($timing, $item->timing);
                array_push($value_1, $item->$val_1);
                array_push($value_2, $item->$val_2);
                array_push($value_3, $item->$val_3);
                array_push($value_4, $item->$val_4);
                array_push($value_5, $item->$val_5);
            }
        }
        if (sizeof($req->all()[0]) == 6) {
            foreach ($array_level as $item) {
                array_push($timing, $item->timing);
                array_push($value_1, $item->$val_1);
                array_push($value_2, $item->$val_2);
                array_push($value_3, $item->$val_3);
                array_push($value_4, $item->$val_4);
                array_push($value_5, $item->$val_5);
                array_push($value_6, $item->$val_6);
            }
        }
        if (sizeof($req->all()[0]) == 7) {
            foreach ($array_level as $item) {
                array_push($timing, $item->timing);
                array_push($value_1, $item->$val_1);
                array_push($value_2, $item->$val_2);
                array_push($value_3, $item->$val_3);
                array_push($value_4, $item->$val_4);
                array_push($value_5, $item->$val_5);
                array_push($value_6, $item->$val_6);
                array_push($value_7, $item->$val_7);
            }
        }
        if (sizeof($req->all()[0]) == 8) {
            foreach ($array_level as $item) {
                array_push($timing, $item->timing);
                array_push($value_1, $item->$val_1);
                array_push($value_2, $item->$val_2);
                array_push($value_3, $item->$val_3);
                array_push($value_4, $item->$val_4);
                array_push($value_5, $item->$val_5);
                array_push($value_6, $item->$val_6);
                array_push($value_7, $item->$val_7);
                array_push($value_8, $item->$val_8);
            }
        }
        if (sizeof($req->all()[0]) == 9) {
            foreach ($array_level as $item) {
                array_push($timing, $item->timing);
                array_push($value_1, $item->$val_1);
                array_push($value_2, $item->$val_2);
                array_push($value_3, $item->$val_3);
                array_push($value_4, $item->$val_4);
                array_push($value_5, $item->$val_5);
                array_push($value_6, $item->$val_6);
                array_push($value_7, $item->$val_7);
                array_push($value_8, $item->$val_8);
                array_push($value_9, $item->$val_9);
            }
        }
        if (sizeof($req->all()[0]) == 10) {
            foreach ($array_level as $item) {
                array_push($timing, $item->timing);
                array_push($value_1, $item->$val_1);
                array_push($value_2, $item->$val_2);
                array_push($value_3, $item->$val_3);
                array_push($value_4, $item->$val_4);
                array_push($value_5, $item->$val_5);
                array_push($value_6, $item->$val_6);
                array_push($value_7, $item->$val_7);
                array_push($value_8, $item->$val_8);
                array_push($value_9, $item->$val_9);
                array_push($value_10, $item->$val_10);
            }
        }
        if (sizeof($req->all()[0]) == 11) {
            foreach ($array_level as $item) {
                array_push($timing, $item->timing);
                array_push($value_1, $item->$val_1);
                array_push($value_2, $item->$val_2);
                array_push($value_3, $item->$val_3);
                array_push($value_4, $item->$val_4);
                array_push($value_5, $item->$val_5);
                array_push($value_6, $item->$val_6);
                array_push($value_7, $item->$val_7);
                array_push($value_8, $item->$val_8);
                array_push($value_9, $item->$val_9);
                array_push($value_10, $item->$val_10);
                array_push($value_11, $item->$val_11);
            }
        }
        if (sizeof($req->all()[0]) == 12) {
            foreach ($array_level as $item) {
                array_push($timing, $item->timing);
                array_push($value_1, $item->$val_1);
                array_push($value_2, $item->$val_2);
                array_push($value_3, $item->$val_3);
                array_push($value_4, $item->$val_4);
                array_push($value_5, $item->$val_5);
                array_push($value_6, $item->$val_6);
                array_push($value_7, $item->$val_7);
                array_push($value_8, $item->$val_8);
                array_push($value_9, $item->$val_9);
                array_push($value_10, $item->$val_10);
                array_push($value_11, $item->$val_11);
                array_push($value_12, $item->$val_12);
            }
        }
        if (sizeof($req->all()[0]) == 13) {
            foreach ($array_level as $item) {
                array_push($timing, $item->timing);
                array_push($value_1, $item->$val_1);
                array_push($value_2, $item->$val_2);
                array_push($value_3, $item->$val_3);
                array_push($value_4, $item->$val_4);
                array_push($value_5, $item->$val_5);
                array_push($value_6, $item->$val_6);
                array_push($value_7, $item->$val_7);
                array_push($value_8, $item->$val_8);
                array_push($value_9, $item->$val_9);
                array_push($value_10, $item->$val_10);
                array_push($value_11, $item->$val_11);
                array_push($value_12, $item->$val_12);
                array_push($value_13, $item->$val_13);
            }
        }
        if (sizeof($req->all()[0]) == 14) {
            foreach ($array_level as $item) {
                array_push($timing, $item->timing);
                array_push($value_1, $item->$val_1);
                array_push($value_2, $item->$val_2);
                array_push($value_3, $item->$val_3);
                array_push($value_4, $item->$val_4);
                array_push($value_5, $item->$val_5);
                array_push($value_6, $item->$val_6);
                array_push($value_7, $item->$val_7);
                array_push($value_8, $item->$val_8);
                array_push($value_9, $item->$val_9);
                array_push($value_10, $item->$val_10);
                array_push($value_11, $item->$val_11);
                array_push($value_12, $item->$val_12);
                array_push($value_13, $item->$val_13);
                array_push($value_14, $item->$val_14);
            }
        }
        if (sizeof($req->all()[0]) == 15) {
            foreach ($array_level as $item) {
                array_push($timing, $item->timing);
                array_push($value_1, $item->$val_1);
                array_push($value_2, $item->$val_2);
                array_push($value_3, $item->$val_3);
                array_push($value_4, $item->$val_4);
                array_push($value_5, $item->$val_5);
                array_push($value_6, $item->$val_6);
                array_push($value_7, $item->$val_7);
                array_push($value_8, $item->$val_8);
                array_push($value_9, $item->$val_9);
                array_push($value_10, $item->$val_10);
                array_push($value_11, $item->$val_11);
                array_push($value_12, $item->$val_12);
                array_push($value_13, $item->$val_13);
                array_push($value_14, $item->$val_14);
                array_push($value_15, $item->$val_15);
            }
        }
        if (sizeof($req->all()[0]) == 16) {
            foreach ($array_level as $item) {
                array_push($timing, $item->timing);
                array_push($value_1, $item->$val_1);
                array_push($value_2, $item->$val_2);
                array_push($value_3, $item->$val_3);
                array_push($value_4, $item->$val_4);
                array_push($value_5, $item->$val_5);
                array_push($value_6, $item->$val_6);
                array_push($value_7, $item->$val_7);
                array_push($value_8, $item->$val_8);
                array_push($value_9, $item->$val_9);
                array_push($value_10, $item->$val_10);
                array_push($value_11, $item->$val_11);
                array_push($value_12, $item->$val_12);
                array_push($value_13, $item->$val_13);
                array_push($value_14, $item->$val_14);
                array_push($value_15, $item->$val_15);
                array_push($value_16, $item->$val_16);
            }
        }
       
         // For Volume
         if (sizeof($for_volumes) == 1) {
            foreach ($array_volume as $item) {
                array_push($Volume_timing, $item->timing);
                array_push($vol_value_1, $item->$volume_1);
            }
        }
        if (sizeof($for_volumes) == 2) {
            foreach ($array_volume as $item) {
                array_push($Volume_timing, $item->timing);
                array_push($vol_value_1, $item->$volume_1);
                array_push($vol_value_2, $item->$volume_2);
            }
        }
        if (sizeof($for_volumes) == 3) {
            foreach ($array_volume as $item) {
                array_push($Volume_timing, $item->timing);
                array_push($vol_value_1, $item->$volume_1);
                array_push($vol_value_2, $item->$volume_2);
                array_push($vol_value_3, $item->$volume_3);
            }
        }
        if (sizeof($for_volumes) == 4) {
            foreach ($array_volume as $item) {
                array_push($Volume_timing, $item->timing);
                array_push($vol_value_1, $item->$volume_1);
                array_push($vol_value_2, $item->$volume_2);
                array_push($vol_value_3, $item->$volume_3);
                array_push($vol_value_4, $item->$volume_4);
            }
        }
        if (sizeof($for_volumes) == 5) {
            foreach ($array_volume as $item) {
                array_push($Volume_timing, $item->timing);
                array_push($vol_value_1, $item->$volume_1);
                array_push($vol_value_2, $item->$volume_2);
                array_push($vol_value_3, $item->$volume_3);
                array_push($vol_value_4, $item->$volume_4);
                array_push($vol_value_5, $item->$volume_5);
            }
        }
        if (sizeof($for_volumes) == 6) {
            foreach ($array_volume as $item) {
                array_push($Volume_timing, $item->timing);
                array_push($vol_value_1, $item->$volume_1);
                array_push($vol_value_2, $item->$volume_2);
                array_push($vol_value_3, $item->$volume_3);
                array_push($vol_value_4, $item->$volume_4);
                array_push($vol_value_5, $item->$volume_5);
                array_push($vol_value_6, $item->$volume_6);
            }
        }
        if (sizeof($for_volumes) == 7) {
            foreach ($array_volume as $item) {
                array_push($Volume_timing, $item->timing);
                array_push($vol_value_1, $item->$volume_1);
                array_push($vol_value_2, $item->$volume_2);
                array_push($vol_value_3, $item->$volume_3);
                array_push($vol_value_4, $item->$volume_4);
                array_push($vol_value_5, $item->$volume_5);
                array_push($vol_value_6, $item->$volume_6);
                array_push($vol_value_7, $item->$volume_7);
            }
        }
        if (sizeof($for_volumes) == 8) {
            foreach ($array_volume as $item) {
                array_push($Volume_timing, $item->timing);
                array_push($vol_value_1, $item->$volume_1);
                array_push($vol_value_2, $item->$volume_2);
                array_push($vol_value_3, $item->$volume_3);
                array_push($vol_value_4, $item->$volume_4);
                array_push($vol_value_5, $item->$volume_5);
                array_push($vol_value_6, $item->$volume_6);
                array_push($vol_value_7, $item->$volume_7);
                array_push($vol_value_8, $item->$volume_8);
            }
        }
        if (sizeof($for_volumes) == 9) {
            foreach ($array_volume as $item) {
                array_push($Volume_timing, $item->timing);
                array_push($vol_value_1, $item->$volume_1);
                array_push($vol_value_2, $item->$volume_2);
                array_push($vol_value_3, $item->$volume_3);
                array_push($vol_value_4, $item->$volume_4);
                array_push($vol_value_5, $item->$volume_5);
                array_push($vol_value_6, $item->$volume_6);
                array_push($vol_value_7, $item->$volume_7);
                array_push($vol_value_8, $item->$volume_8);
                array_push($vol_value_9, $item->$volume_9);
            }
        }
        if (sizeof($for_volumes) == 10) {
            foreach ($array_volume as $item) {
                array_push($Volume_timing, $item->timing);
                array_push($vol_value_1, $item->$volume_1);
                array_push($vol_value_2, $item->$volume_2);
                array_push($vol_value_3, $item->$volume_3);
                array_push($vol_value_4, $item->$volume_4);
                array_push($vol_value_5, $item->$volume_5);
                array_push($vol_value_6, $item->$volume_6);
                array_push($vol_value_7, $item->$volume_7);
                array_push($vol_value_8, $item->$volume_8);
                array_push($vol_value_9, $item->$volume_9);
                array_push($vol_value_10, $item->$volume_10);
            }
        }
        if (sizeof($for_volumes) == 11) {
            foreach ($array_volume as $item) {
                array_push($Volume_timing, $item->timing);
                array_push($vol_value_1, $item->$volume_1);
                array_push($vol_value_2, $item->$volume_2);
                array_push($vol_value_3, $item->$volume_3);
                array_push($vol_value_4, $item->$volume_4);
                array_push($vol_value_5, $item->$volume_5);
                array_push($vol_value_6, $item->$volume_6);
                array_push($vol_value_7, $item->$volume_7);
                array_push($vol_value_8, $item->$volume_8);
                array_push($vol_value_9, $item->$volume_9);
                array_push($vol_value_10, $item->$volume_10);
                array_push($vol_value_11, $item->$volume_11);
            }
        }
        if (sizeof($for_volumes) == 12) {
            foreach ($array_volume as $item) {
                array_push($Volume_timing, $item->timing);
                array_push($vol_value_1, $item->$volume_1);
                array_push($vol_value_2, $item->$volume_2);
                array_push($vol_value_3, $item->$volume_3);
                array_push($vol_value_4, $item->$volume_4);
                array_push($vol_value_5, $item->$volume_5);
                array_push($vol_value_6, $item->$volume_6);
                array_push($vol_value_7, $item->$volume_7);
                array_push($vol_value_8, $item->$volume_8);
                array_push($vol_value_9, $item->$volume_9);
                array_push($vol_value_10, $item->$volume_10);
                array_push($vol_value_11, $item->$volume_11);
                array_push($vol_value_12, $item->$volume_12);
            }
        }
        if (sizeof($for_volumes) == 13) {
            foreach ($array_volume as $item) {
                array_push($Volume_timing, $item->timing);
                array_push($vol_value_1, $item->$volume_1);
                array_push($vol_value_2, $item->$volume_2);
                array_push($vol_value_3, $item->$volume_3);
                array_push($vol_value_4, $item->$volume_4);
                array_push($vol_value_5, $item->$volume_5);
                array_push($vol_value_6, $item->$volume_6);
                array_push($vol_value_7, $item->$volume_7);
                array_push($vol_value_8, $item->$volume_8);
                array_push($vol_value_9, $item->$volume_9);
                array_push($vol_value_10, $item->$volume_10);
                array_push($vol_value_11, $item->$volume_11);
                array_push($vol_value_12, $item->$volume_12);
                array_push($vol_value_13, $item->$volume_13);
            }
        }
        if (sizeof($for_volumes) == 14) {
            foreach ($array_volume as $item) {
                array_push($Volume_timing, $item->timing);
                array_push($vol_value_1, $item->$volume_1);
                array_push($vol_value_2, $item->$volume_2);
                array_push($vol_value_3, $item->$volume_3);
                array_push($vol_value_4, $item->$volume_4);
                array_push($vol_value_5, $item->$volume_5);
                array_push($vol_value_6, $item->$volume_6);
                array_push($vol_value_7, $item->$volume_7);
                array_push($vol_value_8, $item->$volume_8);
                array_push($vol_value_9, $item->$volume_9);
                array_push($vol_value_10, $item->$volume_10);
                array_push($vol_value_11, $item->$volume_11);
                array_push($vol_value_12, $item->$volume_12);
                array_push($vol_value_13, $item->$volume_13);
                array_push($vol_value_14, $item->$volume_14);
            }
        }
        if (sizeof($for_volumes) == 15) {
            foreach ($array_volume as $item) {
                array_push($Volume_timing, $item->timing);
                array_push($vol_value_1, $item->$volume_1);
                array_push($vol_value_2, $item->$volume_2);
                array_push($vol_value_3, $item->$volume_3);
                array_push($vol_value_4, $item->$volume_4);
                array_push($vol_value_5, $item->$volume_5);
                array_push($vol_value_6, $item->$volume_6);
                array_push($vol_value_7, $item->$volume_7);
                array_push($vol_value_8, $item->$volume_8);
                array_push($vol_value_9, $item->$volume_9);
                array_push($vol_value_10, $item->$volume_10);
                array_push($vol_value_11, $item->$volume_11);
                array_push($vol_value_12, $item->$volume_12);
                array_push($vol_value_13, $item->$volume_13);
                array_push($vol_value_14, $item->$volume_14);
                array_push($vol_value_15, $item->$volume_15);
            }
        }
        if (sizeof($for_volumes) == 16) {
            foreach ($array_volume as $item) {
                array_push($Volume_timing, $item->timing);
                array_push($vol_value_1, $item->$volume_1);
                array_push($vol_value_2, $item->$volume_2);
                array_push($vol_value_3, $item->$volume_3);
                array_push($vol_value_4, $item->$volume_4);
                array_push($vol_value_5, $item->$volume_5);
                array_push($vol_value_6, $item->$volume_6);
                array_push($vol_value_7, $item->$volume_7);
                array_push($vol_value_8, $item->$volume_8);
                array_push($vol_value_9, $item->$volume_9);
                array_push($vol_value_10, $item->$volume_10);
                array_push($vol_value_11, $item->$volume_11);
                array_push($vol_value_12, $item->$volume_12);
                array_push($vol_value_13, $item->$volume_13);
                array_push($vol_value_14, $item->$volume_14);
                array_push($vol_value_15, $item->$volume_15);
                array_push($vol_value_16, $item->$volume_16);
            }
        }
       
        // For Temperature
        if (sizeof($req->all()[5]) == 1) {
            foreach ($array_temperture as $item) {
                array_push($tmp_timing, $item->timing);
                array_push($tmp_value_1, $item->$tmp_val_1);
            }
        }
        if (sizeof($req->all()[5]) == 2) {
            foreach ($array_temperture as $item) {
                array_push($tmp_timing, $item->timing);
                array_push($tmp_value_1, $item->$tmp_val_1);
                array_push($tmp_value_2, $item->$tmp_val_2);
            }
        }
        if (sizeof($req->all()[5]) == 3) {
            foreach ($array_temperture as $item) {
                array_push($tmp_timing, $item->timing);
                array_push($tmp_value_1, $item->$tmp_val_1);
                array_push($tmp_value_2, $item->$tmp_val_2);
                array_push($tmp_value_3, $item->$tmp_val_3);
            }
        }
        if (sizeof($req->all()[5]) == 4) {
            foreach ($array_temperture as $item) {
                array_push($tmp_timing, $item->timing);
                array_push($tmp_value_1, $item->$tmp_val_1);
                array_push($tmp_value_2, $item->$tmp_val_2);
                array_push($tmp_value_3, $item->$tmp_val_3);
                array_push($tmp_value_4, $item->$tmp_val_4);
            }
        }
        if (sizeof($req->all()[5]) == 5) {
            foreach ($array_temperture as $item) {
                array_push($tmp_timing, $item->timing);
                array_push($tmp_value_1, $item->$tmp_val_1);
                array_push($tmp_value_2, $item->$tmp_val_2);
                array_push($tmp_value_3, $item->$tmp_val_3);
                array_push($tmp_value_4, $item->$tmp_val_4);
                array_push($tmp_value_5, $item->$tmp_val_5);
            }
        }
        if (sizeof($req->all()[5]) == 6) {
            foreach ($array_temperture as $item) {
                array_push($tmp_timing, $item->timing);
                array_push($tmp_value_1, $item->$tmp_val_1);
                array_push($tmp_value_2, $item->$tmp_val_2);
                array_push($tmp_value_3, $item->$tmp_val_3);
                array_push($tmp_value_4, $item->$tmp_val_4);
                array_push($tmp_value_5, $item->$tmp_val_5);
                array_push($tmp_value_6, $item->$tmp_val_6);
            }
        }
        if (sizeof($req->all()[5]) == 7) {
            foreach ($array_temperture as $item) {
                array_push($tmp_timing, $item->timing);
                array_push($tmp_value_1, $item->$tmp_val_1);
                array_push($tmp_value_2, $item->$tmp_val_2);
                array_push($tmp_value_3, $item->$tmp_val_3);
                array_push($tmp_value_4, $item->$tmp_val_4);
                array_push($tmp_value_5, $item->$tmp_val_5);
                array_push($tmp_value_6, $item->$tmp_val_6);
                array_push($tmp_value_7, $item->$tmp_val_7);
            }
        }
        if (sizeof($req->all()[5]) == 8) {
            foreach ($array_temperture as $item) {
                array_push($tmp_timing, $item->timing);
                array_push($tmp_value_1, $item->$tmp_val_1);
                array_push($tmp_value_2, $item->$tmp_val_2);
                array_push($tmp_value_3, $item->$tmp_val_3);
                array_push($tmp_value_4, $item->$tmp_val_4);
                array_push($tmp_value_5, $item->$tmp_val_5);
                array_push($tmp_value_6, $item->$tmp_val_6);
                array_push($tmp_value_7, $item->$tmp_val_7);
                array_push($tmp_value_8, $item->$tmp_val_8);
            }
        }
        if (sizeof($req->all()[5]) == 9) {
            foreach ($array_temperture as $item) {
                array_push($tmp_timing, $item->timing);
                array_push($tmp_value_1, $item->$tmp_val_1);
                array_push($tmp_value_2, $item->$tmp_val_2);
                array_push($tmp_value_3, $item->$tmp_val_3);
                array_push($tmp_value_4, $item->$tmp_val_4);
                array_push($tmp_value_5, $item->$tmp_val_5);
                array_push($tmp_value_6, $item->$tmp_val_6);
                array_push($tmp_value_7, $item->$tmp_val_7);
                array_push($tmp_value_8, $item->$tmp_val_8);
                array_push($tmp_value_9, $item->$tmp_val_9);
            }
        }
        if (sizeof($req->all()[5]) == 10) {
            foreach ($array_temperture as $item) {
                array_push($tmp_timing, $item->timing);
                array_push($tmp_value_1, $item->$tmp_val_1);
                array_push($tmp_value_2, $item->$tmp_val_2);
                array_push($tmp_value_3, $item->$tmp_val_3);
                array_push($tmp_value_4, $item->$tmp_val_4);
                array_push($tmp_value_5, $item->$tmp_val_5);
                array_push($tmp_value_6, $item->$tmp_val_6);
                array_push($tmp_value_7, $item->$tmp_val_7);
                array_push($tmp_value_8, $item->$tmp_val_8);
                array_push($tmp_value_9, $item->$tmp_val_9);
                array_push($tmp_value_10, $item->$tmp_val_10);
            }
        }
        if (sizeof($req->all()[5]) == 11) {
            foreach ($array_temperture as $item) {
                array_push($tmp_timing, $item->timing);
                array_push($tmp_value_1, $item->$tmp_val_1);
                array_push($tmp_value_2, $item->$tmp_val_2);
                array_push($tmp_value_3, $item->$tmp_val_3);
                array_push($tmp_value_4, $item->$tmp_val_4);
                array_push($tmp_value_5, $item->$tmp_val_5);
                array_push($tmp_value_6, $item->$tmp_val_6);
                array_push($tmp_value_7, $item->$tmp_val_7);
                array_push($tmp_value_8, $item->$tmp_val_8);
                array_push($tmp_value_9, $item->$tmp_val_9);
                array_push($tmp_value_10, $item->$tmp_val_10);
                array_push($tmp_value_11, $item->$tmp_val_11);
            }
        }
        if (sizeof($req->all()[5]) == 12) {
            foreach ($array_temperture as $item) {
                array_push($tmp_timing, $item->timing);
                array_push($tmp_value_1, $item->$tmp_val_1);
                array_push($tmp_value_2, $item->$tmp_val_2);
                array_push($tmp_value_3, $item->$tmp_val_3);
                array_push($tmp_value_4, $item->$tmp_val_4);
                array_push($tmp_value_5, $item->$tmp_val_5);
                array_push($tmp_value_6, $item->$tmp_val_6);
                array_push($tmp_value_7, $item->$tmp_val_7);
                array_push($tmp_value_8, $item->$tmp_val_8);
                array_push($tmp_value_9, $item->$tmp_val_9);
                array_push($tmp_value_10, $item->$tmp_val_10);
                array_push($tmp_value_11, $item->$tmp_val_11);
                array_push($tmp_value_12, $item->$tmp_val_12);
            }
        }
        if (sizeof($req->all()[5]) == 13) {
            foreach ($array_temperture as $item) {
                array_push($tmp_timing, $item->timing);
                array_push($tmp_value_1, $item->$tmp_val_1);
                array_push($tmp_value_2, $item->$tmp_val_2);
                array_push($tmp_value_3, $item->$tmp_val_3);
                array_push($tmp_value_4, $item->$tmp_val_4);
                array_push($tmp_value_5, $item->$tmp_val_5);
                array_push($tmp_value_6, $item->$tmp_val_6);
                array_push($tmp_value_7, $item->$tmp_val_7);
                array_push($tmp_value_8, $item->$tmp_val_8);
                array_push($tmp_value_9, $item->$tmp_val_9);
                array_push($tmp_value_10, $item->$tmp_val_10);
                array_push($tmp_value_11, $item->$tmp_val_11);
                array_push($tmp_value_12, $item->$tmp_val_12);
                array_push($tmp_value_13, $item->$tmp_val_13);
            }
        }
        if (sizeof($req->all()[5]) == 14) {
            foreach ($array_temperture as $item) {
                array_push($tmp_timing, $item->timing);
                array_push($tmp_value_1, $item->$tmp_val_1);
                array_push($tmp_value_2, $item->$tmp_val_2);
                array_push($tmp_value_3, $item->$tmp_val_3);
                array_push($tmp_value_4, $item->$tmp_val_4);
                array_push($tmp_value_5, $item->$tmp_val_5);
                array_push($tmp_value_6, $item->$tmp_val_6);
                array_push($tmp_value_7, $item->$tmp_val_7);
                array_push($tmp_value_8, $item->$tmp_val_8);
                array_push($tmp_value_9, $item->$tmp_val_9);
                array_push($tmp_value_10, $item->$tmp_val_10);
                array_push($tmp_value_11, $item->$tmp_val_11);
                array_push($tmp_value_12, $item->$tmp_val_12);
                array_push($tmp_value_13, $item->$tmp_val_13);
                array_push($tmp_value_14, $item->$tmp_val_14);
            }
        }
        if (sizeof($req->all()[5]) == 15) {
            foreach ($array_temperture as $item) {
                array_push($tmp_timing, $item->timing);
                array_push($tmp_value_1, $item->$tmp_val_1);
                array_push($tmp_value_2, $item->$tmp_val_2);
                array_push($tmp_value_3, $item->$tmp_val_3);
                array_push($tmp_value_4, $item->$tmp_val_4);
                array_push($tmp_value_5, $item->$tmp_val_5);
                array_push($tmp_value_6, $item->$tmp_val_6);
                array_push($tmp_value_7, $item->$tmp_val_7);
                array_push($tmp_value_8, $item->$tmp_val_8);
                array_push($tmp_value_9, $item->$tmp_val_9);
                array_push($tmp_value_10, $item->$tmp_val_10);
                array_push($tmp_value_11, $item->$tmp_val_11);
                array_push($tmp_value_12, $item->$tmp_val_12);
                array_push($tmp_value_13, $item->$tmp_val_13);
                array_push($tmp_value_14, $item->$tmp_val_14);
                array_push($tmp_value_15, $item->$tmp_val_15);
            }
        }
        if (sizeof($req->all()[5]) == 16) {
            foreach ($array_temperture as $item) {
                array_push($tmp_timing, $item->timing);
                array_push($tmp_value_1, $item->$tmp_val_1);
                array_push($tmp_value_2, $item->$tmp_val_2);
                array_push($tmp_value_3, $item->$tmp_val_3);
                array_push($tmp_value_4, $item->$tmp_val_4);
                array_push($tmp_value_5, $item->$tmp_val_5);
                array_push($tmp_value_6, $item->$tmp_val_6);
                array_push($tmp_value_7, $item->$tmp_val_7);
                array_push($tmp_value_8, $item->$tmp_val_8);
                array_push($tmp_value_9, $item->$tmp_val_9);
                array_push($tmp_value_10, $item->$tmp_val_10);
                array_push($tmp_value_11, $item->$tmp_val_11);
                array_push($tmp_value_12, $item->$tmp_val_12);
                array_push($tmp_value_13, $item->$tmp_val_13);
                array_push($tmp_value_14, $item->$tmp_val_14);
                array_push($tmp_value_15, $item->$tmp_val_15);
                array_push($tmp_value_16, $item->$tmp_val_16);
            }
        }
        // For Flow
        if (sizeof($req->all()[6]) == 1) {
            foreach ($array_flow as $item) {
                array_push($flow_timing, $item->timing);
                array_push($flow_value_1, $item->$flow_val_1);
            }
        }
        if (sizeof($req->all()[6]) == 2) {
            foreach ($array_flow as $item) {
                array_push($flow_timing, $item->timing);
                array_push($flow_value_1, $item->$flow_val_1);
                array_push($flow_value_2, $item->$flow_val_2);
            }
        }
        if (sizeof($req->all()[6]) == 3) {
            foreach ($array_flow as $item) {
                array_push($flow_timing, $item->timing);
                array_push($flow_value_1, $item->$flow_val_1);
                array_push($flow_value_2, $item->$flow_val_2);
                array_push($flow_value_3, $item->$flow_val_3);
            }
        }
        if (sizeof($req->all()[6]) == 4) {
            foreach ($array_flow as $item) {
                array_push($flow_timing, $item->timing);
                array_push($flow_value_1, $item->$flow_val_1);
                array_push($flow_value_2, $item->$flow_val_2);
                array_push($flow_value_3, $item->$flow_val_3);
                array_push($flow_value_4, $item->$flow_val_4);
            }
        }
        if (sizeof($req->all()[6]) == 5) {
            foreach ($array_flow as $item) {
                array_push($flow_timing, $item->timing);
                array_push($flow_value_1, $item->$flow_val_1);
                array_push($flow_value_2, $item->$flow_val_2);
                array_push($flow_value_3, $item->$flow_val_3);
                array_push($flow_value_4, $item->$flow_val_4);
                array_push($flow_value_5, $item->$flow_val_5);
            }
        }
        if (sizeof($req->all()[6]) == 6) {
            foreach ($array_flow as $item) {
                array_push($flow_timing, $item->timing);
                array_push($flow_value_1, $item->$flow_val_1);
                array_push($flow_value_2, $item->$flow_val_2);
                array_push($flow_value_3, $item->$flow_val_3);
                array_push($flow_value_4, $item->$flow_val_4);
                array_push($flow_value_5, $item->$flow_val_5);
                array_push($flow_value_6, $item->$flow_val_6);
            }
        }
        if (sizeof($req->all()[6]) == 7) {
            foreach ($array_flow as $item) {
                array_push($flow_timing, $item->timing);
                array_push($flow_value_1, $item->$flow_val_1);
                array_push($flow_value_2, $item->$flow_val_2);
                array_push($flow_value_3, $item->$flow_val_3);
                array_push($flow_value_4, $item->$flow_val_4);
                array_push($flow_value_5, $item->$flow_val_5);
                array_push($flow_value_6, $item->$flow_val_6);
                array_push($flow_value_7, $item->$flow_val_7);
            }
        }
        if (sizeof($req->all()[6]) == 8) {
            foreach ($array_flow as $item) {
                array_push($flow_timing, $item->timing);
                array_push($flow_value_1, $item->$flow_val_1);
                array_push($flow_value_2, $item->$flow_val_2);
                array_push($flow_value_3, $item->$flow_val_3);
                array_push($flow_value_4, $item->$flow_val_4);
                array_push($flow_value_5, $item->$flow_val_5);
                array_push($flow_value_6, $item->$flow_val_6);
                array_push($flow_value_7, $item->$flow_val_7);
                array_push($flow_value_8, $item->$flow_val_8);
            }
        }
        if (sizeof($req->all()[6]) == 9) {
            foreach ($array_flow as $item) {
                array_push($flow_timing, $item->timing);
                array_push($flow_value_1, $item->$flow_val_1);
                array_push($flow_value_2, $item->$flow_val_2);
                array_push($flow_value_3, $item->$flow_val_3);
                array_push($flow_value_4, $item->$flow_val_4);
                array_push($flow_value_5, $item->$flow_val_5);
                array_push($flow_value_6, $item->$flow_val_6);
                array_push($flow_value_7, $item->$flow_val_7);
                array_push($flow_value_8, $item->$flow_val_8);
                array_push($flow_value_9, $item->$flow_val_9);
            }
        }
        if (sizeof($req->all()[6]) == 10) {
            foreach ($array_flow as $item) {
                array_push($flow_timing, $item->timing);
                array_push($flow_value_1, $item->$flow_val_1);
                array_push($flow_value_2, $item->$flow_val_2);
                array_push($flow_value_3, $item->$flow_val_3);
                array_push($flow_value_4, $item->$flow_val_4);
                array_push($flow_value_5, $item->$flow_val_5);
                array_push($flow_value_6, $item->$flow_val_6);
                array_push($flow_value_7, $item->$flow_val_7);
                array_push($flow_value_8, $item->$flow_val_8);
                array_push($flow_value_9, $item->$flow_val_9);
                array_push($flow_value_10, $item->$flow_val_10);
            }
        }
        if (sizeof($req->all()[6]) == 11) {
            foreach ($array_flow as $item) {
                array_push($flow_timing, $item->timing);
                array_push($flow_value_1, $item->$flow_val_1);
                array_push($flow_value_2, $item->$flow_val_2);
                array_push($flow_value_3, $item->$flow_val_3);
                array_push($flow_value_4, $item->$flow_val_4);
                array_push($flow_value_5, $item->$flow_val_5);
                array_push($flow_value_6, $item->$flow_val_6);
                array_push($flow_value_7, $item->$flow_val_7);
                array_push($flow_value_8, $item->$flow_val_8);
                array_push($flow_value_9, $item->$flow_val_9);
                array_push($flow_value_10, $item->$flow_val_10);
                array_push($flow_value_11, $item->$flow_val_11);
            }
        }
        if (sizeof($req->all()[6]) == 12) {
            foreach ($array_flow as $item) {
                array_push($flow_timing, $item->timing);
                array_push($flow_value_1, $item->$flow_val_1);
                array_push($flow_value_2, $item->$flow_val_2);
                array_push($flow_value_3, $item->$flow_val_3);
                array_push($flow_value_4, $item->$flow_val_4);
                array_push($flow_value_5, $item->$flow_val_5);
                array_push($flow_value_6, $item->$flow_val_6);
                array_push($flow_value_7, $item->$flow_val_7);
                array_push($flow_value_8, $item->$flow_val_8);
                array_push($flow_value_9, $item->$flow_val_9);
                array_push($flow_value_10, $item->$flow_val_10);
                array_push($flow_value_11, $item->$flow_val_11);
                array_push($flow_value_12, $item->$flow_val_12);
            }
        }
        if (sizeof($req->all()[6]) == 13) {
            foreach ($array_flow as $item) {
                array_push($flow_timing, $item->timing);
                array_push($flow_value_1, $item->$flow_val_1);
                array_push($flow_value_2, $item->$flow_val_2);
                array_push($flow_value_3, $item->$flow_val_3);
                array_push($flow_value_4, $item->$flow_val_4);
                array_push($flow_value_5, $item->$flow_val_5);
                array_push($flow_value_6, $item->$flow_val_6);
                array_push($flow_value_7, $item->$flow_val_7);
                array_push($flow_value_8, $item->$flow_val_8);
                array_push($flow_value_9, $item->$flow_val_9);
                array_push($flow_value_10, $item->$flow_val_10);
                array_push($flow_value_11, $item->$flow_val_11);
                array_push($flow_value_12, $item->$flow_val_12);
                array_push($flow_value_13, $item->$flow_val_13);
            }
        }
        if (sizeof($req->all()[6]) == 14) {
            foreach ($array_flow as $item) {
                array_push($flow_timing, $item->timing);
                array_push($flow_value_1, $item->$flow_val_1);
                array_push($flow_value_2, $item->$flow_val_2);
                array_push($flow_value_3, $item->$flow_val_3);
                array_push($flow_value_4, $item->$flow_val_4);
                array_push($flow_value_5, $item->$flow_val_5);
                array_push($flow_value_6, $item->$flow_val_6);
                array_push($flow_value_7, $item->$flow_val_7);
                array_push($flow_value_8, $item->$flow_val_8);
                array_push($flow_value_9, $item->$flow_val_9);
                array_push($flow_value_10, $item->$flow_val_10);
                array_push($flow_value_11, $item->$flow_val_11);
                array_push($flow_value_12, $item->$flow_val_12);
                array_push($flow_value_13, $item->$flow_val_13);
                array_push($flow_value_14, $item->$flow_val_14);
            }
        }
        if (sizeof($req->all()[6]) == 15) {
            foreach ($array_flow as $item) {
                array_push($flow_timing, $item->timing);
                array_push($flow_value_1, $item->$flow_val_1);
                array_push($flow_value_2, $item->$flow_val_2);
                array_push($flow_value_3, $item->$flow_val_3);
                array_push($flow_value_4, $item->$flow_val_4);
                array_push($flow_value_5, $item->$flow_val_5);
                array_push($flow_value_6, $item->$flow_val_6);
                array_push($flow_value_7, $item->$flow_val_7);
                array_push($flow_value_8, $item->$flow_val_8);
                array_push($flow_value_9, $item->$flow_val_9);
                array_push($flow_value_10, $item->$flow_val_10);
                array_push($flow_value_11, $item->$flow_val_11);
                array_push($flow_value_12, $item->$flow_val_12);
                array_push($flow_value_13, $item->$flow_val_13);
                array_push($flow_value_14, $item->$flow_val_14);
                array_push($flow_value_15, $item->$flow_val_15);
            }
        }
        if (sizeof($req->all()[6]) == 16) {
            foreach ($array_flow as $item) {
                array_push($flow_timing, $item->timing);
                array_push($flow_value_1, $item->$flow_val_1);
                array_push($flow_value_2, $item->$flow_val_2);
                array_push($flow_value_3, $item->$flow_val_3);
                array_push($flow_value_4, $item->$flow_val_4);
                array_push($flow_value_5, $item->$flow_val_5);
                array_push($flow_value_6, $item->$flow_val_6);
                array_push($flow_value_7, $item->$flow_val_7);
                array_push($flow_value_8, $item->$flow_val_8);
                array_push($flow_value_9, $item->$flow_val_9);
                array_push($flow_value_10, $item->$flow_val_10);
                array_push($flow_value_11, $item->$flow_val_11);
                array_push($flow_value_12, $item->$flow_val_12);
                array_push($flow_value_13, $item->$flow_val_13);
                array_push($flow_value_14, $item->$flow_val_14);
                array_push($flow_value_15, $item->$flow_val_15);
                array_push($flow_value_16, $item->$flow_val_16);
            }
        }
        // For Flow Total
        if (sizeof($req->all()[7]) == 1) {
            foreach ($array_ft as $item) {
                array_push($ft_timing, $item->timing);
                array_push($ft_value_1, $item->$ft_val_1);
            }
        }
        if (sizeof($req->all()[7]) == 2) {
            foreach ($array_ft as $item) {
                array_push($ft_timing, $item->timing);
                array_push($ft_value_1, $item->$ft_val_1);
                array_push($ft_value_2, $item->$ft_val_2);
            }
        }
        if (sizeof($req->all()[7]) == 3) {
            foreach ($array_ft as $item) {
                array_push($ft_timing, $item->timing);
                array_push($ft_value_1, $item->$ft_val_1);
                array_push($ft_value_2, $item->$ft_val_2);
                array_push($ft_value_3, $item->$ft_val_3);
            }
        }
        if (sizeof($req->all()[7]) == 4) {
            foreach ($array_ft as $item) {
                array_push($ft_timing, $item->timing);
                array_push($ft_value_1, $item->$ft_val_1);
                array_push($ft_value_2, $item->$ft_val_2);
                array_push($ft_value_3, $item->$ft_val_3);
                array_push($ft_value_4, $item->$ft_val_4);
            }
        }
        if (sizeof($req->all()[7]) == 5) {
            foreach ($array_ft as $item) {
                array_push($ft_timing, $item->timing);
                array_push($ft_value_1, $item->$ft_val_1);
                array_push($ft_value_2, $item->$ft_val_2);
                array_push($ft_value_3, $item->$ft_val_3);
                array_push($ft_value_4, $item->$ft_val_4);
                array_push($ft_value_5, $item->$ft_val_5);
            }
        }
        if (sizeof($req->all()[7]) == 6) {
            foreach ($array_ft as $item) {
                array_push($ft_timing, $item->timing);
                array_push($ft_value_1, $item->$ft_val_1);
                array_push($ft_value_2, $item->$ft_val_2);
                array_push($ft_value_3, $item->$ft_val_3);
                array_push($ft_value_4, $item->$ft_val_4);
                array_push($ft_value_5, $item->$ft_val_5);
                array_push($ft_value_6, $item->$ft_val_6);
            }
        }
        if (sizeof($req->all()[7]) == 7) {
            foreach ($array_ft as $item) {
                array_push($ft_timing, $item->timing);
                array_push($ft_value_1, $item->$ft_val_1);
                array_push($ft_value_2, $item->$ft_val_2);
                array_push($ft_value_3, $item->$ft_val_3);
                array_push($ft_value_4, $item->$ft_val_4);
                array_push($ft_value_5, $item->$ft_val_5);
                array_push($ft_value_6, $item->$ft_val_6);
                array_push($ft_value_7, $item->$ft_val_7);
            }
        }
        if (sizeof($req->all()[7]) == 8) {
            foreach ($array_ft as $item) {
                array_push($ft_timing, $item->timing);
                array_push($ft_value_1, $item->$ft_val_1);
                array_push($ft_value_2, $item->$ft_val_2);
                array_push($ft_value_3, $item->$ft_val_3);
                array_push($ft_value_4, $item->$ft_val_4);
                array_push($ft_value_5, $item->$ft_val_5);
                array_push($ft_value_6, $item->$ft_val_6);
                array_push($ft_value_7, $item->$ft_val_7);
                array_push($ft_value_8, $item->$ft_val_8);
            }
        }
        if (sizeof($req->all()[7]) == 9) {
            foreach ($array_ft as $item) {
                array_push($ft_timing, $item->timing);
                array_push($ft_value_1, $item->$ft_val_1);
                array_push($ft_value_2, $item->$ft_val_2);
                array_push($ft_value_3, $item->$ft_val_3);
                array_push($ft_value_4, $item->$ft_val_4);
                array_push($ft_value_5, $item->$ft_val_5);
                array_push($ft_value_6, $item->$ft_val_6);
                array_push($ft_value_7, $item->$ft_val_7);
                array_push($ft_value_8, $item->$ft_val_8);
                array_push($ft_value_9, $item->$ft_val_9);
            }
        }
        if (sizeof($req->all()[7]) == 10) {
            foreach ($array_ft as $item) {
                array_push($ft_timing, $item->timing);
                array_push($ft_value_1, $item->$ft_val_1);
                array_push($ft_value_2, $item->$ft_val_2);
                array_push($ft_value_3, $item->$ft_val_3);
                array_push($ft_value_4, $item->$ft_val_4);
                array_push($ft_value_5, $item->$ft_val_5);
                array_push($ft_value_6, $item->$ft_val_6);
                array_push($ft_value_7, $item->$ft_val_7);
                array_push($ft_value_8, $item->$ft_val_8);
                array_push($ft_value_9, $item->$ft_val_9);
                array_push($ft_value_10, $item->$ft_val_10);
            }
        }
        if (sizeof($req->all()[7]) == 11) {
            foreach ($array_ft as $item) {
                array_push($ft_timing, $item->timing);
                array_push($ft_value_1, $item->$ft_val_1);
                array_push($ft_value_2, $item->$ft_val_2);
                array_push($ft_value_3, $item->$ft_val_3);
                array_push($ft_value_4, $item->$ft_val_4);
                array_push($ft_value_5, $item->$ft_val_5);
                array_push($ft_value_6, $item->$ft_val_6);
                array_push($ft_value_7, $item->$ft_val_7);
                array_push($ft_value_8, $item->$ft_val_8);
                array_push($ft_value_9, $item->$ft_val_9);
                array_push($ft_value_10, $item->$ft_val_10);
                array_push($ft_value_11, $item->$ft_val_11);
            }
        }
        if (sizeof($req->all()[7]) == 12) {
            foreach ($array_ft as $item) {
                array_push($ft_timing, $item->timing);
                array_push($ft_value_1, $item->$ft_val_1);
                array_push($ft_value_2, $item->$ft_val_2);
                array_push($ft_value_3, $item->$ft_val_3);
                array_push($ft_value_4, $item->$ft_val_4);
                array_push($ft_value_5, $item->$ft_val_5);
                array_push($ft_value_6, $item->$ft_val_6);
                array_push($ft_value_7, $item->$ft_val_7);
                array_push($ft_value_8, $item->$ft_val_8);
                array_push($ft_value_9, $item->$ft_val_9);
                array_push($ft_value_10, $item->$ft_val_10);
                array_push($ft_value_11, $item->$ft_val_11);
                array_push($ft_value_12, $item->$ft_val_12);
            }
        }
        if (sizeof($req->all()[7]) == 13) {
            foreach ($array_ft as $item) {
                array_push($ft_timing, $item->timing);
                array_push($ft_value_1, $item->$ft_val_1);
                array_push($ft_value_2, $item->$ft_val_2);
                array_push($ft_value_3, $item->$ft_val_3);
                array_push($ft_value_4, $item->$ft_val_4);
                array_push($ft_value_5, $item->$ft_val_5);
                array_push($ft_value_6, $item->$ft_val_6);
                array_push($ft_value_7, $item->$ft_val_7);
                array_push($ft_value_8, $item->$ft_val_8);
                array_push($ft_value_9, $item->$ft_val_9);
                array_push($ft_value_10, $item->$ft_val_10);
                array_push($ft_value_11, $item->$ft_val_11);
                array_push($ft_value_12, $item->$ft_val_12);
                array_push($ft_value_13, $item->$ft_val_13);
            }
        }
        if (sizeof($req->all()[7]) == 14) {
            foreach ($array_ft as $item) {
                array_push($ft_timing, $item->timing);
                array_push($ft_value_1, $item->$ft_val_1);
                array_push($ft_value_2, $item->$ft_val_2);
                array_push($ft_value_3, $item->$ft_val_3);
                array_push($ft_value_4, $item->$ft_val_4);
                array_push($ft_value_5, $item->$ft_val_5);
                array_push($ft_value_6, $item->$ft_val_6);
                array_push($ft_value_7, $item->$ft_val_7);
                array_push($ft_value_8, $item->$ft_val_8);
                array_push($ft_value_9, $item->$ft_val_9);
                array_push($ft_value_10, $item->$ft_val_10);
                array_push($ft_value_11, $item->$ft_val_11);
                array_push($ft_value_12, $item->$ft_val_12);
                array_push($ft_value_13, $item->$ft_val_13);
                array_push($ft_value_14, $item->$ft_val_14);
            }
        }
        if (sizeof($req->all()[7]) == 15) {
            foreach ($array_ft as $item) {
                array_push($ft_timing, $item->timing);
                array_push($ft_value_1, $item->$ft_val_1);
                array_push($ft_value_2, $item->$ft_val_2);
                array_push($ft_value_3, $item->$ft_val_3);
                array_push($ft_value_4, $item->$ft_val_4);
                array_push($ft_value_5, $item->$ft_val_5);
                array_push($ft_value_6, $item->$ft_val_6);
                array_push($ft_value_7, $item->$ft_val_7);
                array_push($ft_value_8, $item->$ft_val_8);
                array_push($ft_value_9, $item->$ft_val_9);
                array_push($ft_value_10, $item->$ft_val_10);
                array_push($ft_value_11, $item->$ft_val_11);
                array_push($ft_value_12, $item->$ft_val_12);
                array_push($ft_value_13, $item->$ft_val_13);
                array_push($ft_value_14, $item->$ft_val_14);
                array_push($ft_value_15, $item->$ft_val_15);
            }
        }
        if (sizeof($req->all()[7]) == 16) {
            foreach ($array_ft as $item) {
                array_push($ft_timing, $item->timing);
                array_push($ft_value_1, $item->$ft_val_1);
                array_push($ft_value_2, $item->$ft_val_2);
                array_push($ft_value_3, $item->$ft_val_3);
                array_push($ft_value_4, $item->$ft_val_4);
                array_push($ft_value_5, $item->$ft_val_5);
                array_push($ft_value_6, $item->$ft_val_6);
                array_push($ft_value_7, $item->$ft_val_7);
                array_push($ft_value_8, $item->$ft_val_8);
                array_push($ft_value_9, $item->$ft_val_9);
                array_push($ft_value_10, $item->$ft_val_10);
                array_push($ft_value_11, $item->$ft_val_11);
                array_push($ft_value_12, $item->$ft_val_12);
                array_push($ft_value_13, $item->$ft_val_13);
                array_push($ft_value_14, $item->$ft_val_14);
                array_push($ft_value_15, $item->$ft_val_15);
                array_push($ft_value_16, $item->$ft_val_16);
            }
        }
        // For PT
        if (sizeof($req->all()[9]) == 1) {
            foreach ($array_pt as $item) {
                array_push($pt_timing, $item->timing);
                array_push($pt_value_1, $item->$pt_val_1);
            }
        }
        if (sizeof($req->all()[9]) == 2) {
            foreach ($array_pt as $item) {
                array_push($pt_timing, $item->timing);
                array_push($pt_value_1, $item->$pt_val_1);
                array_push($pt_value_2, $item->$pt_val_2);
            }
        }
        if (sizeof($req->all()[9]) == 3) {
            foreach ($array_pt as $item) {
                array_push($pt_timing, $item->timing);
                array_push($pt_value_1, $item->$pt_val_1);
                array_push($pt_value_2, $item->$pt_val_2);
                array_push($pt_value_3, $item->$pt_val_3);
            }
        }
        if (sizeof($req->all()[9]) == 4) {
            foreach ($array_pt as $item) {
                array_push($pt_timing, $item->timing);
                array_push($pt_value_1, $item->$pt_val_1);
                array_push($pt_value_2, $item->$pt_val_2);
                array_push($pt_value_3, $item->$pt_val_3);
                array_push($pt_value_4, $item->$pt_val_4);
            }
        }
        if (sizeof($req->all()[9]) == 5) {
            foreach ($array_pt as $item) {
                array_push($pt_timing, $item->timing);
                array_push($pt_value_1, $item->$pt_val_1);
                array_push($pt_value_2, $item->$pt_val_2);
                array_push($pt_value_3, $item->$pt_val_3);
                array_push($pt_value_4, $item->$pt_val_4);
                array_push($pt_value_5, $item->$pt_val_5);
            }
        }
        if (sizeof($req->all()[9]) == 6) {
            foreach ($array_pt as $item) {
                array_push($pt_timing, $item->timing);
                array_push($pt_value_1, $item->$pt_val_1);
                array_push($pt_value_2, $item->$pt_val_2);
                array_push($pt_value_3, $item->$pt_val_3);
                array_push($pt_value_4, $item->$pt_val_4);
                array_push($pt_value_5, $item->$pt_val_5);
                array_push($pt_value_6, $item->$pt_val_6);
            }
        }
        if (sizeof($req->all()[9]) == 7) {
            foreach ($array_pt as $item) {
                array_push($pt_timing, $item->timing);
                array_push($pt_value_1, $item->$pt_val_1);
                array_push($pt_value_2, $item->$pt_val_2);
                array_push($pt_value_3, $item->$pt_val_3);
                array_push($pt_value_4, $item->$pt_val_4);
                array_push($pt_value_5, $item->$pt_val_5);
                array_push($pt_value_6, $item->$pt_val_6);
                array_push($pt_value_7, $item->$pt_val_7);
            }
        }
       

        $response = [
            'pt_timing' => $pt_timing,
            'pt_value_1' => $pt_value_1,
            'pt_value_2' => $pt_value_2,
            'pt_value_3' => $pt_value_3,
            'pt_value_4' => $pt_value_4,
            'pt_value_5' => $pt_value_5,
            'pt_value_6' => $pt_value_6,
            'pt_value_7' => $pt_value_7,
            'value_1' => $value_1,
            'value_2' => $value_2,
            'value_3' => $value_3,
            'value_4' => $value_4,
            'value_5' => $value_5,
            'value_6' => $value_6,
            'value_7' => $value_7,
            'value_8' => $value_8,
            'value_9' => $value_9,
            'value_10' => $value_10,
            'value_11' => $value_11,
            'value_12' => $value_12,
            'value_13' => $value_13,
            'value_14' => $value_14,
            'value_15' => $value_15,
            'value_16' => $value_16,
            'vol_value_1' => $vol_value_1,
            'vol_value_2' => $vol_value_2,
            'vol_value_3' => $vol_value_3,
            'vol_value_4' => $vol_value_4,
            'vol_value_5' => $vol_value_5,
            'vol_value_6' => $vol_value_6,
            'vol_value_7' => $vol_value_7,
            'vol_value_8' => $vol_value_8,
            'vol_value_9' => $vol_value_9,
            'vol_value_10' => $vol_value_10,
            'vol_value_11' => $vol_value_11,
            'vol_value_12' => $vol_value_12,
            'vol_value_13' => $vol_value_13,
            'vol_value_14' => $vol_value_14,
            'vol_value_15' => $vol_value_15,
            'vol_value_16' => $vol_value_16,
            'tmp_value_1' => $tmp_value_1,
            'tmp_value_2' => $tmp_value_2,
            'tmp_value_3' => $tmp_value_3,
            'tmp_value_4' => $tmp_value_4,
            'tmp_value_5' => $tmp_value_5,
            'tmp_value_6' => $tmp_value_6,
            'tmp_value_7' => $tmp_value_7,
            'tmp_value_8' => $tmp_value_8,
            'tmp_value_9' => $tmp_value_9,
            'tmp_value_10' => $tmp_value_10,
            'tmp_value_11' => $tmp_value_11,
            'tmp_value_12' => $tmp_value_12,
            'tmp_value_13' => $tmp_value_13,
            'tmp_value_14' => $tmp_value_14,
            'tmp_value_15' => $tmp_value_15,
            'tmp_value_16' => $tmp_value_16,
            'flow_value_1' => $flow_value_1,
            'flow_value_2' => $flow_value_2,
            'flow_value_3' => $flow_value_3,
            'flow_value_4' => $flow_value_4,
            'flow_value_5' => $flow_value_5,
            'flow_value_6' => $flow_value_6,
            'flow_value_7' => $flow_value_7,
            'flow_value_8' => $flow_value_8,
            'flow_value_9' => $flow_value_9,
            'flow_value_10' => $flow_value_10,
            'flow_value_11' => $flow_value_11,
            'flow_value_12' => $flow_value_12,
            'flow_value_13' => $flow_value_13,
            'flow_value_14' => $flow_value_14,
            'flow_value_15' => $flow_value_15,
            'flow_value_16' => $flow_value_16,
            'ft_value_1' => $ft_value_1,
            'ft_value_2' => $ft_value_2,
            'ft_value_3' => $ft_value_3,
            'ft_value_4' => $ft_value_4,
            'ft_value_5' => $ft_value_5,
            'ft_value_6' => $ft_value_6,
            'ft_value_7' => $ft_value_7,
            'ft_value_8' => $ft_value_8,
            'ft_value_9' => $ft_value_9,
            'ft_value_10' => $ft_value_10,
            'ft_value_11' => $ft_value_11,
            'ft_value_12' => $ft_value_12,
            'ft_value_13' => $ft_value_13,
            'ft_value_14' => $ft_value_14,
            'ft_value_15' => $ft_value_15,
            'ft_value_16' => $ft_value_16,
            'db_time_mass' => $db_time_mass,
            'rdl25_mass' => $mass_value,
            'timing' => $timing,
            'tmp_timing' => $tmp_timing,
            'flow_timing' => $flow_timing,
            'ft_timing' => $ft_timing,
            'Volume_timing' => $Volume_timing,
            'status_code' => 200
        ];
        return response()->json($response);
    }

   
    ////////save selection/////////
    public function SaveSelectionReport(Request $req)
    {

        $val_1 = '';
        $val_2 = '';
        $val_3 = '';
        $val_4 = '';
        $val_5 = '';
        $val_6 = '';
        $val_7  = '';
        $val_8  = '';
        $val_9  = '';
        $val_10 = '';
        $val_11 = '';
        $val_12 = '';
        $val_13 = '';
        $val_14 = '';
        $val_15 = '';
        $val_16 = '';
        $interval = $req->all()[1];
        $timing = $req->all()[2];
        $name = $req->all()[3];
        $user_role = $req->all()[4];

        if (sizeof($req->all()[0]) == 2) {
            $val_1 = $req->all()[0][0];
            $val_2 = $req->all()[0][1];
        }
        if (sizeof($req->all()[0]) == 3) {
            $val_1 = $req->all()[0][0];
            $val_2 = $req->all()[0][1];
            $val_3 = $req->all()[0][2];
        }
        if (sizeof($req->all()[0]) == 4) {
            $val_1 = $req->all()[0][0];
            $val_2 = $req->all()[0][1];
            $val_3 = $req->all()[0][2];
            $val_4 = $req->all()[0][3];
        }
        if (sizeof($req->all()[0]) == 5) {
            $val_1 = $req->all()[0][0];
            $val_2 = $req->all()[0][1];
            $val_3 = $req->all()[0][2];
            $val_4 = $req->all()[0][3];
            $val_5 = $req->all()[0][4];
        }
        if (sizeof($req->all()[0]) == 6) {
            $val_1 = $req->all()[0][0];
            $val_2 = $req->all()[0][1];
            $val_3 = $req->all()[0][2];
            $val_4 = $req->all()[0][3];
            $val_5 = $req->all()[0][4];
            $val_6 = $req->all()[0][5];
        }
        if (sizeof($req->all()[0]) == 7) {
            $val_1 = $req->all()[0][0];
            $val_2 = $req->all()[0][1];
            $val_3 = $req->all()[0][2];
            $val_4 = $req->all()[0][3];
            $val_5 = $req->all()[0][4];
            $val_6 = $req->all()[0][5];
            $val_7 = $req->all()[0][6];
        }
        if (sizeof($req->all()[0]) == 8) {
            $val_1 = $req->all()[0][0];
            $val_2 = $req->all()[0][1];
            $val_3 = $req->all()[0][2];
            $val_4 = $req->all()[0][3];
            $val_5 = $req->all()[0][4];
            $val_6 = $req->all()[0][5];
            $val_7 = $req->all()[0][6];
            $val_8 = $req->all()[0][7];
        }
        if (sizeof($req->all()[0]) == 9) {
            $val_1 = $req->all()[0][0];
            $val_2 = $req->all()[0][1];
            $val_3 = $req->all()[0][2];
            $val_4 = $req->all()[0][3];
            $val_5 = $req->all()[0][4];
            $val_6 = $req->all()[0][5];
            $val_7 = $req->all()[0][6];
            $val_8 = $req->all()[0][7];
            $val_9 = $req->all()[0][8];
        }
        if (sizeof($req->all()[0]) == 10) {
            $val_1 = $req->all()[0][0];
            $val_2 = $req->all()[0][1];
            $val_3 = $req->all()[0][2];
            $val_4 = $req->all()[0][3];
            $val_5 = $req->all()[0][4];
            $val_6 = $req->all()[0][5];
            $val_7 = $req->all()[0][6];
            $val_8 = $req->all()[0][7];
            $val_9 = $req->all()[0][8];
            $val_10 = $req->all()[0][9];
        }
        if (sizeof($req->all()[0]) == 11) {
            $val_1 = $req->all()[0][0];
            $val_2 = $req->all()[0][1];
            $val_3 = $req->all()[0][2];
            $val_4 = $req->all()[0][3];
            $val_5 = $req->all()[0][4];
            $val_6 = $req->all()[0][5];
            $val_7 = $req->all()[0][6];
            $val_8 = $req->all()[0][7];
            $val_9 = $req->all()[0][8];
            $val_10 = $req->all()[0][9];
            $val_11 = $req->all()[0][10];
        }
        if (sizeof($req->all()[0]) == 12) {
            $val_1 = $req->all()[0][0];
            $val_2 = $req->all()[0][1];
            $val_3 = $req->all()[0][2];
            $val_4 = $req->all()[0][3];
            $val_5 = $req->all()[0][4];
            $val_6 = $req->all()[0][5];
            $val_7 = $req->all()[0][6];
            $val_8 = $req->all()[0][7];
            $val_9 = $req->all()[0][8];
            $val_10 = $req->all()[0][9];
            $val_11 = $req->all()[0][10];
            $val_12 = $req->all()[0][11];
        }
        if (sizeof($req->all()[0]) == 13) {
            $val_1 = $req->all()[0][0];
            $val_2 = $req->all()[0][1];
            $val_3 = $req->all()[0][2];
            $val_4 = $req->all()[0][3];
            $val_5 = $req->all()[0][4];
            $val_6 = $req->all()[0][5];
            $val_7 = $req->all()[0][6];
            $val_8 = $req->all()[0][7];
            $val_9 = $req->all()[0][8];
            $val_10 = $req->all()[0][9];
            $val_11 = $req->all()[0][10];
            $val_12 = $req->all()[0][11];
            $val_13 = $req->all()[0][12];
        }
        if (sizeof($req->all()[0]) == 14) {
            $val_1 = $req->all()[0][0];
            $val_2 = $req->all()[0][1];
            $val_3 = $req->all()[0][2];
            $val_4 = $req->all()[0][3];
            $val_5 = $req->all()[0][4];
            $val_6 = $req->all()[0][5];
            $val_7 = $req->all()[0][6];
            $val_8 = $req->all()[0][7];
            $val_9 = $req->all()[0][8];
            $val_10 = $req->all()[0][9];
            $val_11 = $req->all()[0][10];
            $val_12 = $req->all()[0][11];
            $val_13 = $req->all()[0][12];
            $val_14 = $req->all()[0][13];
        }
        if (sizeof($req->all()[0]) == 15) {
            $val_1 = $req->all()[0][0];
            $val_2 = $req->all()[0][1];
            $val_3 = $req->all()[0][2];
            $val_4 = $req->all()[0][3];
            $val_5 = $req->all()[0][4];
            $val_6 = $req->all()[0][5];
            $val_7 = $req->all()[0][6];
            $val_8 = $req->all()[0][7];
            $val_9 = $req->all()[0][8];
            $val_10 = $req->all()[0][9];
            $val_11 = $req->all()[0][10];
            $val_12 = $req->all()[0][11];
            $val_13 = $req->all()[0][12];
            $val_14 = $req->all()[0][13];
            $val_15 = $req->all()[0][14];
        }
        if (sizeof($req->all()[0]) == 16) {
            $val_1 = $req->all()[0][0];
            $val_2 = $req->all()[0][1];
            $val_3 = $req->all()[0][2];
            $val_4 = $req->all()[0][3];
            $val_5 = $req->all()[0][4];
            $val_6 = $req->all()[0][5];
            $val_7 = $req->all()[0][6];
            $val_8 = $req->all()[0][7];
            $val_9 = $req->all()[0][8];
            $val_10 = $req->all()[0][9];
            $val_11 = $req->all()[0][10];
            $val_12 = $req->all()[0][11];
            $val_13 = $req->all()[0][12];
            $val_14 = $req->all()[0][13];
            $val_15 = $req->all()[0][14];
            $val_16 = $req->all()[0][15];
        }
        $select = new selection_record();
        $select->name = $name;
        $select->timing = $timing;
        $select->selection_interval = $interval;
        $select->user_role = $user_role;
        $select->val_1 = $val_1;
        $select->val_2 = $val_2;
        $select->val_3 = $val_3;
        $select->val_4 = $val_4;
        $select->val_5 = $val_5;
        $select->val_6 = $val_6;
        $select->val_7 = $val_7;
        $select->val_8 = $val_8;
        $select->val_9 = $val_9;
        $select->val_10 = $val_10;
        $select->val_11 = $val_11;
        $select->val_12 = $val_12;
        $select->val_13 = $val_13;
        $select->val_14 = $val_14;
        $select->val_15 = $val_15;
        $select->val_16 = $val_16;
        $select->save();
        return response()->json([
            'status_code' => 200,
            'message' => 'Selection Saved Successfully'
        ]);
    }

    public function ShowSelection($id)
    {
        $select_record = selection_record::where('user_role', $id)->get();
        $response = [
            'select_record' => $select_record,
            'status_code' => 200
        ];
        return response()->json($response);
    }
    public function ShowSelectionA($id)
    {
        $select_record = selection_record::where('sr_id', $id)->first();
        $response = [
            'select_record' => $select_record,
            'status_code' => 200
        ];
        return response()->json($response);
    }

    public function FormSubmit(Request $req)
    {
        $fileName = $req->file->getClientOriginalName();

        //        $fileName = date('d-m-Y').'.'.$req->file->getClientOriginalExtension();

        $req->file->move(public_path('upload'), $fileName);
        $upload_report = new Upload_report();
        $upload_report->name = $req->name;
        $upload_report->address = $fileName;

        $upload_report->category = $req->select_category;
        $upload_report->save();

        return response()->json(['success' => 'You have successfully upload file.']);
    }
    public function GetUploadedReports()
    {
        $getreports = Upload_report::get();
        $response = [
            'getreports' => $getreports,
            'status_code' => 200
        ];
        return response()->json($response);
    }
    public function DeleteUpload($id)
    {
        //        $user = DB::table('users')->delete($id);
        //        return response()->json(['success'=>'User deleted']);
        $upload = Upload_report::where('id', $id)->first();
        $upload->delete();
        return response()->json('File deleted Successfully!');
    }
}
