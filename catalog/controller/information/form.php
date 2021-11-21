<?php
class ControllerInformationForm extends Controller{
	private $error = array();
	
    public function index() {
		// Create variable language
		$language = new Language();
		$language->load('information/form');

		// Set title page load on language
		$this->document->setTitle($language->get('heading_title'));

		$data['email_greeting'] = $language->get('email_greeting');

		if($this->request->server["REQUEST_METHOD"] == "POST" &&$this->validate() ) {
			// Getting the value of input type
			$data['macy_pan'] = $this->request->post['macy_pan'];
			$data['name'] = $this->request->post['name'];
			$data['contact_num'] = $this->request->post['contact_num'];
			$data['email'] = $this->request->post['email'];
			$data['confirm_email'] = $this->request->post['confirm_email'];
			$data['company'] = $this->request->post['company'];
			$data['designation'] = $this->request->post['designation'];
			$data['designation'] = $this->request->post['designation'];
			$data['company_add'] = $this->request->post['company_add'];
			$data['enquiry'] = $this->request->post['enquiry'];

			// Check what is the value of select tag
			if ($data['macy_pan'] == 1){
				$data['macy_pan'] = "Lying Type Portable Hyperbaric Oxygen Chamber";
			} else {
				$data['macy_pan'] = "Sitting Type Portable Hyperbaric Oxygen Chamber";
			}

			$mail = new Mail($this->config->get('config_mail_engine'));
			$mail->parameter = $this->config->get('config_mail_parameter');
			$mail->smtp_hostname = $this->config->get('config_mail_smtp_hostname');
			$mail->smtp_username = $this->config->get('config_mail_smtp_username');
			$mail->smtp_password = html_entity_decode($this->config->get('config_mail_smtp_password'), ENT_QUOTES, 'UTF-8');
			$mail->smtp_port = $this->config->get('config_mail_smtp_port');
			$mail->smtp_timeout = $this->config->get('config_mail_smtp_timeout');

			$mail->setTo($this->config->get('config_email'));
			$mail->setFrom($this->request->post['email']);
			$mail->setReplyTo($this->request->post['email']);
			$mail->setSender(html_entity_decode($this->request->post['name'], ENT_QUOTES, 'UTF-8'));
			$mail->setSubject(html_entity_decode(sprintf($language->get('email_subject')), ENT_QUOTES, 'UTF-8'));
			$mail->setHtml($this->load->view('mail/form_email', $data));
			$mail->send();

			$this->response->redirect($this->url->link('information/contact/success'));
		}

		// Validating each field
		if (isset($this->error['name'])) {
			$data['error_name'] = $this->error['name'];
		} else {
			$data['error_name'] = '';
		}

		if (isset($this->error['contact_num'])) {
			$data['error_contact_num'] = $this->error['contact_num'];
		} else {
			$data['error_contact'] = '';
		}

		if(isset($this->error['email'])) {
			$data['error_email'] = $this->error['email'];
		} else {
			$data['error_email'] = '';
		}

		if(isset($this->error['confirm_email'])) {
			$data['error_confirmEmail'] = $this->error['confirm_email'];
		} else {
			$data['error_confirmEmail'] = '';
		}

		if(isset($this->error['company'])) {
			$data['error_company'] = $this->error['company'];
		} else {
			$data['error_company'] = '';
		}

		if(isset($this->error['designation'])) {
			$data['error_designation'] = $this->error['designation'];
		} else {
			$data['error_designation'] = '';
		}

		if(isset($this->error['enquiry'])) {
			$data['error_enquiry'] = $this->error['enquiry'];
		} else {
			$data['error_enquiry'] = '';
		}


		$data['action'] = $this->url->link('information/form', '', true);

		$data['column_left'] = $this->load->controller('common/column_left');
		$data['content_top'] = $this->load->controller('common/content_top');
		$data['content_bottom'] = $this->load->controller('common/content_bottom');
		$data['footer'] = $this->load->controller('common/footer');
		$data['header'] = $this->load->controller('common/header');

		$this->response->setOutput($this->load->view('information/form', $data));
    }

	public function validate() {
		// Load the language in form
		$this->load->language('information/form');

		// Validating field
		if ((utf8_strlen($this->request->post['name']) < 3) || (utf8_strlen($this->request->post['name']) > 20)) {
			$this->error['name'] = $this->language->get('error_name');
		}

		if ((utf8_strlen($this->request->post['contact_num']) < 3) || (utf8_strlen($this->request->post['contact_num']) > 11 )){
			$this->error['contact_num'] = $this->language->get('error_contact');
		}

		if (!filter_var($this->request->post['email'], FILTER_VALIDATE_EMAIL)) {
			$this->error['email'] = $this->language->get('error_email');
		}

		if ($this->request->post['email'] != $this->request->post['confirm_email']) {
			$this->error['confirm_email'] = $this->language->get('error_confirmEmail');
		}

		if ((utf8_strlen($this->request->post['company']) < 3) || (utf8_strlen($this->request->post['company']) > 20)) {
			$this->error['company'] = $this->language->get('error_company');
		}

		if ((utf8_strlen($this->request->post['designation']) < 2) || (utf8_strlen($this->request->post['designation']) > 20)) {
			$this->error['designation'] = $this->language->get('error_designation');
		}

		// if ((utf8_strlen($this->request->post['designation']) < 2) || (utf8_strlen($this->request->post['designation']) > 20)) {
		// 	$this->error['designation'] = $this->language->get('error_designation');
		// }

		if ((utf8_strlen($this->request->post['enquiry']) < 3) || (utf8_strlen($this->request->post['enquiry']) > 3000)) {
			$this->error['enquiry'] = $this->language->get('error_enquiry');
		}

		return !$this->error;
	}

	public function success() {
		$this->load->language('information/form');

		$this->document->setTitle($this->language->get('heading_title'));

 		$data['text_message'] = $this->language->get('text_message'); 

		$data['continue'] = $this->url->link('common/home');

		$data['column_left'] = $this->load->controller('common/column_left');
		$data['column_right'] = $this->load->controller('common/column_right');
		$data['content_top'] = $this->load->controller('common/content_top');
		$data['content_bottom'] = $this->load->controller('common/content_bottom');
		$data['footer'] = $this->load->controller('common/footer');
		$data['header'] = $this->load->controller('common/header');

		$this->response->setOutput($this->load->view('common/success', $data));
	}
}  
?>