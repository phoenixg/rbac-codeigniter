<?php defined('BASEPATH') OR exit('No direct script access allowed');

/**
 * PostManage Class
 *
 * Manage Posts.
 *
 * @package        	CodeIgniter
 * @subpackage    	Controller
 * @category    	Controller
 * @author        	Charles(xiezhenjiang@foxmail.com)
 * @license         http://www.gnu.org/licenses/gpl.html
 * @link			http://www.oserror.com
 */

class PostManage extends CI_Controller
{
	
	/**
	 * constructor for PostManage
	 * @access public
	 */
	function __construct()
	{
		parent::__construct();
		$this->config->load('grab');
	}
	
	/**
	 * post search page
	 * @access public
	 */
	function search()
	{
		if($this->user->checkPrivilege('post_search') == false)
		{
			show_error("you have no privilege to access this page");
			return ;
		}


		$grabUrlLogin = $this->config->item('grab_url_login');
		$grabUrlPage = $this->config->item('grab_url_page');
		$grabUser = $this->config->item('grab_user');
		$grabPass = $this->config->item('grab_pass');

		$this->load->library('Curlnew');

		$this->curlnew->setBasicAuthentication($grabUser, $grabPass);
		$this->curlnew->setUserAgent('Mozilla/5.0 (Windows NT 6.3; WOW64; rv:32.0) Gecko/20100101 Firefox/32.0');
		$this->curlnew->setReferrer('http://fuwu.qunar.com/index.do?domain=slg.trade.qunar.com');
		$this->curlnew->setHeader('X-Requested-With', 'XMLHttpRequest');
		$this->curlnew->setCookie('QN99', '2790');
		$this->curlnew->setCookie('QunarGlobal','192.168.24.207_7a21bfbe_14800961907_-2c11|1408759971495');
		$this->curlnew->setCookie('QN1', 'wKgZEFP3+KR7DCjLr0rwAg==');
		$this->curlnew->setCookie('QN25', '"c0d1fe3d-1f90-4f1d-b49c-bceb8122a56fe765635f3c3ec6847ac6d0b7ca528b12{en7mni(z"');
		$this->curlnew->setCookie('RcGlobal', 'd8616b29f4386f27358795b0ee394ca183');
		$this->curlnew->setCookie('csrfToken', 'tUMbsamVqDAGndxm0jtIolirwEvIwf03');
		$this->curlnew->setCookie('_mdp', '5+%2B0%7F%04%01r');
		$this->curlnew->setCookie('QN29', '206d249bd6ab4bfd9c8e243c21cd3e51');
		$this->curlnew->setCookie('QN43', '3');
		$this->curlnew->setCookie('QN42', 'foia8465');
		$this->curlnew->setCookie('_q', 'U.pble6267');
		$this->curlnew->setCookie('_t', '23577381');
		$this->curlnew->setCookie('_v', 'QOfVSOJZMik-WSmps-M9Jak9P1jBetISWaJUteA12M4sW1deNDYXhO8B19YP85_vz_QV-x0BT1GUcRChc7NxKhkjdfIhsgEgErbkgFll4c1mH51evZybl_Mes9fPZagpRw707_QbxxfQtYtiyUwTonAc5B-8RCA2oMJ0uQTCdYJr');
		$this->curlnew->setCookie('QN44', 'pble6267');

		$this->curlnew->get($grabUrlPage);

		if ($this->curlnew->error) {
		    echo 'Error: ' . $this->curlnew->error_code . ': ' . $this->curlnew->error_message;
		}
		else {
		    $html = $this->curlnew->response;
		    echo ($html);die;
		}


		// var_dump($this->curlnew->request_headers);
		// var_dump($this->curlnew->response_headers);




		
		$this->load->view('include/header');
		$this->load->view('include/nav');
		$this->load->view('post_search');
		$this->load->view('include/footer');
	}
	
	/**
	 * post edit page
	 * @access public
	 */
	function edit()
	{
		if($this->user->checkPrivilege('post_edit') == false)
		{
			show_error("you have no privilege to access this page");
			return ;
		}
	
		$this->load->view('include/header');
		$this->load->view('include/nav');
		$this->load->view('post_edit');
		$this->load->view('include/footer');
	}
	
	/**
	 * post add page
	 * @access public
	 */
	function add()
	{
		if($this->user->checkPrivilege('post_add') == false)
		{
			show_error("you have no privilege to access this page");
			return ;
		}
	
		$this->load->view('include/header');
		$this->load->view('include/nav');
		$this->load->view('post_add');
		$this->load->view('include/footer');
	}
	
	/**
	 * post delete page
	 * @access public
	 */
	function delete()
	{
		if($this->user->checkPrivilege('post_delete') == false)
		{
			show_error("you have no privilege to access this page");
			return ;
		}
	
		$this->load->view('include/header');
		$this->load->view('include/nav');
		$this->load->view('post_delete');
		$this->load->view('include/footer');
	}
}