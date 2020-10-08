<?php
class ControllerCommonHeader extends Controller {
	public function index() {
		// Analytics
		$this->load->model('setting/extension');

		$data['analytics'] = array();

		$analytics = $this->model_setting_extension->getExtensions('analytics');

		foreach ($analytics as $analytic) {
			if ($this->config->get('analytics_' . $analytic['code'] . '_status')) {
				$data['analytics'][] = $this->load->controller('extension/analytics/' . $analytic['code'], $this->config->get('analytics_' . $analytic['code'] . '_status'));
			}
		}

		if ($this->request->server['HTTPS']) {
			$server = $this->config->get('config_ssl');
		} else {
			$server = $this->config->get('config_url');
		}

		if (is_file(DIR_IMAGE . $this->config->get('config_icon'))) {
			$this->document->addLink($server . 'image/' . $this->config->get('config_icon'), 'icon');
		}

		$data['title'] = $this->document->getTitle();

		$data['base'] = $server;
		$data['description'] = $this->document->getDescription();
		$data['keywords'] = $this->document->getKeywords();
		$data['links'] = $this->document->getLinks();
		$data['styles'] = $this->document->getStyles();
		$data['scripts'] = $this->document->getScripts('header');
		$data['lang'] = $this->language->get('code');
		$data['direction'] = $this->language->get('direction');

		$data['name'] = $this->config->get('config_name');

		if (is_file(DIR_IMAGE . $this->config->get('config_logo'))) {
			$data['logo'] = $server . 'image/' . $this->config->get('config_logo');
		} else {
			$data['logo'] = '';
		}

if (is_file(DIR_IMAGE . $this->config->get('config_background_image'))) {
            $data['background_image'] = $server . 'image/' . $this->config->get('config_background_image');
            } else {
                $data['background_image'] = '';
            }
            if ($this->config->get('config_background_image_position')) {
                $data['config_background_image_position'] = $this->config->get('config_background_image_position');
            } else {
                $data['config_background_image_position'] = '';
            }

            if(isset($this->request->get['path']) AND !isset($this->request->get['product_id'])) {
                
                $parts = explode('_', (string)$this->request->get['path']);

                $category_id = (int)array_pop($parts);

                $query = $this->db->query("SELECT DISTINCT * FROM " . DB_PREFIX . "category c LEFT JOIN " . DB_PREFIX . "category_to_store c2s ON (c.category_id = c2s.category_id) WHERE c.category_id = '" . (int)$category_id . "' AND c2s.store_id =0 AND c.status = '1'");
                
                if(isset($query->row['config_background_image']) AND !empty($query->row['config_background_image']) ){
                    $data['background_image'] = $server . 'image/' . $query->row['config_background_image'];
                }
                
                if( isset($query->row['config_background_image_position']) AND !empty($query->row['config_background_image_position']) ){
                    $data['config_background_image_position'] = $query->row['config_background_image_position'];
                }       

            }

            if(isset($this->request->get['manufacturer_id'])) {

                $manufacturer_id = $this->request->get['manufacturer_id'];

                $query = $this->db->query("SELECT DISTINCT * FROM " . DB_PREFIX . "manufacturer m LEFT JOIN " . DB_PREFIX . "manufacturer_to_store m2s ON (m.manufacturer_id = m2s.manufacturer_id) WHERE m.manufacturer_id = '" . (int)$manufacturer_id . "' AND m2s.store_id =0 ");
                
                if(isset($query->row['config_background_image']) AND !empty($query->row['config_background_image']) ){
                    $data['background_image'] = $server . 'image/' . $query->row['config_background_image'];
                }

                
                if( isset($query->row['config_background_image_position']) AND !empty($query->row['config_background_image_position']) ){
                    $data['config_background_image_position'] = $query->row['config_background_image_position'];
                }
                    

            }

            if(isset($this->request->get['product_id'])) {

                $product_id = $this->request->get['product_id'];

                $query = $this->db->query("SELECT DISTINCT * FROM " . DB_PREFIX . "product p LEFT JOIN " .DB_PREFIX. "product_to_store p2s ON (p.product_id = p2s.product_id) WHERE p.product_id = '" .(int) $product_id. "' AND p2s.store_id = 0 AND p.status='1'");
                

                if(isset($query->row['config_background_image']) AND !empty($query->row['config_background_image']) ){
                    $data['background_image'] = $server . 'image/' . $query->row['config_background_image'];
                }

                
                if( isset($query->row['config_background_image_position']) AND !empty($query->row['config_background_image_position']) ){
                    $data['config_background_image_position'] = $query->row['config_background_image_position'];
                }

            }

           if(isset($this->request->get['information_id'])) {

                $information_id = $this->request->get['information_id'];

                $query = $this->db->query("SELECT DISTINCT * FROM " . DB_PREFIX . "information_description m LEFT JOIN " . DB_PREFIX . "information_to_store m2s ON (m.information_id = m2s.information_id) WHERE m.information_id = '" . (int)$information_id . "' AND m2s.store_id =0 ");

                if(isset($query->row['config_background_image']) AND !empty($query->row['config_background_image']) ){
                    $data['background_image'] = $server . 'image/' . $query->row['config_background_image'];
                }

                
                if( isset($query->row['config_background_image_position']) AND !empty($query->row['config_background_image_position']) ){
                    $data['config_background_image_position'] = $query->row['config_background_image_position'];
                }
                    

            }

            
		$this->load->language('common/header');

		// Wishlist
		if ($this->customer->isLogged()) {
			$this->load->model('account/wishlist');

			$data['text_wishlist'] = sprintf($this->language->get('text_wishlist'), $this->model_account_wishlist->getTotalWishlist());
		} else {
			$data['text_wishlist'] = sprintf($this->language->get('text_wishlist'), (isset($this->session->data['wishlist']) ? count($this->session->data['wishlist']) : 0));
		}

		$data['text_logged'] = sprintf($this->language->get('text_logged'), $this->url->link('account/account', '', true), $this->customer->getFirstName(), $this->url->link('account/logout', '', true));
		
		$data['home'] = $this->url->link('common/home');
		$data['wishlist'] = $this->url->link('account/wishlist', '', true);
		$data['logged'] = $this->customer->isLogged();
		$data['account'] = $this->url->link('account/account', '', true);
		$data['register'] = $this->url->link('account/register', '', true);
		$data['login'] = $this->url->link('account/login', '', true);
		$data['order'] = $this->url->link('account/order', '', true);
		$data['transaction'] = $this->url->link('account/transaction', '', true);
		$data['download'] = $this->url->link('account/download', '', true);
		$data['logout'] = $this->url->link('account/logout', '', true);
		$data['shopping_cart'] = $this->url->link('checkout/cart');
		$data['checkout'] = $this->url->link('checkout/checkout', '', true);
		$data['contact'] = $this->url->link('information/contact');
		$data['telephone'] = $this->config->get('config_telephone');
		
		$data['language'] = $this->load->controller('common/language');
		$data['currency'] = $this->load->controller('common/currency');
		$data['search'] = $this->load->controller('common/search');
		$data['cart'] = $this->load->controller('common/cart');
		$data['menu'] = $this->load->controller('common/menu');

		return $this->load->view('common/header', $data);
	}
}
