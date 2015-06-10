<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Mains extends CI_Controller {


	public function index()
	{
		$courses = $this->course->retrieveAllCourses();
		$this->load->view('landing_page', array('courses' => $courses));
	}

	public function courseCreate()
	{
		$result = $this->course->courseCreate( $this->input->post() );
		if($result)
		{
			//$courses = $this->course->retrieveAllCourses();
			//$this->load->view('landing_page', array('courses' => $courses));
			redirect('/'); // $this->load->view('landing_page');
		}
		else
		{
			echo "Network is down!";
		}
	}

	public function courseDeleteReviewGET($id)
	{
		$course = $this->course->retrieveOneCourse($id);
		$this->load->view('delete_review', array('course' => $course));
	}

	public function courseDestroy()
	{
		$result = $this->course->courseDestroy($this->input->post('id'));
		redirect('/');
	}
}
