<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Chart extends CI_Controller {

    public function __construct()
    {
        parent::__construct();
        $this->load->model('m_chart');
        $this->load->helper('url');
    }

	public function index()
	{
		$Data['data'] = $this->m_chart->findSensors();

		$this->load->view('Ajax', $Data);
    // $this->load->view('index');
	}

	public function showchart()
	{
		$year1 = $this->input->post('yearOne');
		$year2 = $this->input->post('yearTwo');
    // $selectOne = $this->input->post('sensorId');


		$results = $this->m_chart->findSensorsByDate($year1, $year2);
    $Data['data'] = $results;
    $this->load->view('datatable', $Data);
	}

  public function sensorOne(){
    $Data['data'] = $this->m_chart->findSensors();
    $this->load->view('One', $Data);
  }

  public function sensorTwo(){
    $Data['data'] = $this->m_chart->findSensors();
    $this->load->view('Two', $Data);
  }
  public function sensorThree(){
    $Data['data'] = $this->m_chart->findSensors();
    $this->load->view('Three', $Data);
  }
  public function sensorFour(){
    $Data['data'] = $this->m_chart->findSensors();
    $this->load->view('Four', $Data);
  }
  public function sensorFive(){
    $Data['data'] = $this->m_chart->findSensors();
    $this->load->view('Five', $Data);
  }
  public function sensorSix(){
    $Data['data'] = $this->m_chart->findSensors();
    $this->load->view('Six', $Data);
  }
  public function getCharts(){
    $chartData = $this->input->post('sensorId');
    $Data['data'] = $this->m_chart->findSensors();
    echo $chartData;
  //   switch ($chartData) {
  //   case 1:
  //       $this->load->view('One', $Data);
  //   break;
  //   case 2:
  //       $this->load->view('Two', $Data);
  //   break;
  //   case 3:
  //        $this->load->view('Three', $Data);
  //   break;
  //   case 4:
  //       $this->load->view('Four', $Data);
  //   break;
  //   case 5:
  //       $this->load->view('Five', $Data);
  //   break;
  //   case 6:
  //       $this->load->view('Six', $Data);
  //   break;
  //   default:
  //   	echo "Please choose one sensor";
  //   break;
  //
  // }
    }
}
