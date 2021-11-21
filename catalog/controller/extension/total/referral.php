<?php 
class ControllerExtensionTotalReferral extends Controller {
    public function index() {
        if (1) {
			$this->load->language('extension/total/referral');
			
            if (isset($this->session->data['referral'])) {
				$data['referral'] = $this->session->data['referral'];
			} else {
				$data['referral'] = '';
			}

            return $this->load->view('extension/total/referral', $data);
        }
    }

    public function referral() {
		$this->load->language('extension/total/referral');

		$json = array();

		$this->load->model('extension/total/referral');

		if (isset($this->request->post['referral'])) {
			$referral = $this->request->post['referral'];
		} else {
			$referral = '';
		}

        $referral_info = $this->model_extension_total_referral->getReferral($referral);

        if (empty($this->request->post['referral'])) {
			$json['error'] = $this->language->get('error_empty');

			unset($this->session->data['referral']);
		} elseif ($referral_info) {
			$this->session->data['referral'] = $this->request->post['referral'];

			$this->session->data['success'] = $this->language->get('text_success');

			$json['redirect'] = $this->url->link('checkout/cart');
		} else {
			$json['error'] = $this->language->get('error_referral');
		}

		$this->response->addHeader('Content-Type: application/json');
		$this->response->setOutput(json_encode($json));
    }
}
?>