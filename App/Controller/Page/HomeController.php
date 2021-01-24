<?php

	namespace My_portfolio\Controller\Page;

	class HomeController extends \My_portfolio\Controller\AppController{

		public function index() {

			$this->render($_SESSION['bpd_237_portfolio.lang'].'.home.index');
		}
		public function about_me() {

			$this->render($_SESSION['bpd_237_portfolio.lang'].'.home.about_me');
		}
		public function skills() {

			$this->render($_SESSION['bpd_237_portfolio.lang'].'.home.skills');
		}
		public function worked() {

			$this->render($_SESSION['bpd_237_portfolio.lang'].'.home.worked');
		}
		public function contact() {

			$this->render($_SESSION['bpd_237_portfolio.lang'].'.home.contact');
		}
	}
 ?>