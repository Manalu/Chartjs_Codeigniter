<?php if(!defined('BASEPATH')) exit('No direct script access allowed!!');

class M_chart extends CI_Model
{

    public function __construct(){
          $this->load->database();
    }

    public function findSensors(){
      $query = $this->db->query("SELECT DISTINCT Sensores_id FROM gabinete ORDER BY Sensores_id ASC");
      //  return $query->result_array();
      return $this->getDetailsOfSensorByDate();


    }

    public function findSensorsByDate($year1, $year2){
//  $today = date('Y-m-d  h:i a');
      $todayS = '2018-03-21 09:01:40';
      // $totall= array();
      // $totallTwo= array();
      //
      // if($selectOne != "all"){
      //
      //   $query = $this->db->query("SELECT * FROM gabinete WHERE Fecha BETWEEN '$year1' AND '$year2' ORDER BY Fecha ASC");
      //
      //
      //   foreach ($query->result() as $th) {
      //     $totall[] = '"'.$th->id.'",';
      //   }
      //
      //   $tr = substr(implode(" ",$totall), 0, -1);
      //   $changed = str_replace('"',"'",$tr);
      //
      //   $retriever = $this->db->query("SELECT * FROM gabinete WHERE id IN ($changed)");
      //
      //   foreach ($retriever->result() as $th) {
      //     if($th->Sensores_id === $selectOne){
      //       $totallTwo[] = '"'.$th->id.'",';
      //     }
      //
      //   }
      //
      //   return $totallTwo;
      //
      // }else{

        $query = $this->db->query("SELECT * FROM gabinete WHERE Fecha BETWEEN '$year1' AND '$year2' ORDER BY Fecha ASC");
        return $query->result();
      // }

    }

    public function getDetailsOfSensors(){
      $retriever = $this->db->query("SELECT * FROM gabinete WHERE Sensores_id IN ('1','2','3','4','5','6')");
      // $Data['data'] = json_encode($retriever->result_array())
      return $retriever->result_array();
    }

    public function getDetailsOfSensorByDate(){
      $todayEarly = date("Y-m-d")." 00:00:00";
      $todayLater = date("Y-m-d")." 23:59:50";
      $byDtate = $this->db->query("SELECT * FROM gabinete WHERE Fecha  BETWEEN '$todayEarly' AND '$todayLater' ORDER BY Fecha ASC");
      $totall= array();

      foreach ($byDtate->result() as $th) {
        $totall[] = '"'.$th->id.'",';
      }
      $tr = substr(implode(" ",$totall), 0, -1);
      $changed = str_replace('"',"'",$tr);
      $retriever = $this->db->query("SELECT * FROM gabinete WHERE id IN ($changed)");
      // $retriever = $this->db->query("SELECT * FROM gabinete WHERE Sensores_id IN ('1','2','3','4','5','6')");

      // $Data['data'] = json_encode($retriever->result_array())

      return $retriever->result();
    }




}
