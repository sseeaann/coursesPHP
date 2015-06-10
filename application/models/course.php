<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Course extends CI_Model {


	public function courseCreate($courseContent)
	{
		$query = "INSERT INTO courses (name, description, created_at, updated_at) VALUES (?, ?, NOW(), NOW())";
		$result = $this->db->query($query, array($courseContent['name'],$courseContent['description']));
		return $result;
	}

	public function retrieveAllCourses()
	{
		$query = "SELECT * FROM courses";
		$courses = $this->db->query($query)->result_array();
		return $courses;
	}

	public function retrieveOneCourse($id)
	{
		$query = "SELECT * FROM courses WHERE id = ?";
		$course = $this->db->query($query, array($id))->row_array();
		return $course;
	}

	public function courseDestroy($id)
	{
		$query = "DELETE FROM courses WHERE id = ?";
		$result = $this->db->query($query, array($id));
		return $result;
	}
}
