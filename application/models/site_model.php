<?php

class Site_model extends Model {   
    function Site_model() {
        parent::Model();
        $this->data['css'] = '';
        $this->data['js'] = '';
        $this->data['content'] = ''; 
        $this->data['meta_desc'] = '';
        $this->data['title'] = DEFAULT_TITLE;
        $this->data['navs'] = array();
        $this->data['errors'] = '';
        $this->data['success'] = '';
        $this->data['data'] = '';
        $this->data['page_id'] = null;
        $this->data['breadcrumbs'] = false;
        $this->data['levels'] = array();
        $this->data['template'] = 'main';
    }
	
    function set_content($view = null,$data = null,$page_id = '') {
        if( $view != null && $view != '' ) {
            $this->data['content'] = $this->load->view($view,$data,TRUE);
            $this->data['content_id'] = substr($view, strrpos($view, '/')+1);
            if($page_id != '') { $this->data['content_id'] .= '_' . $page_id; }


        } else {
            $this->data['data'] = $data;
        }
    }

    function set_title($title) {
        if($title) $this->data['title'] = $title;
    }

    function add_title($title) {
        $this->data['title'] = $title . ' - ' . $this->data['title'];
    }

    function add_css($css) {
        $this->data['css'] .= '<link type="text/css" href="'.$css.'" rel="stylesheet" media="screen" />' . "\n";
    }

    function add_js($js) {
        $this->data['js'] .= '<script type="text/javascript" src="'.$js.'"></script>' . "\n";
    }

    function add_nav($nav_name,$nav_data = null) {
        $this->navs_raw[$nav_name]['nav_name'] = $nav_name;
        $this->navs_raw[$nav_name]['nav_data'] = $nav_data;
    }

    function set_level($level,$content) {
        $this->data['levels'][$level] = $content;
    }

    function set_meta_desc ($meta_desc) {
        $this->data['meta_desc'] = $meta_desc;
    }

    function set_template ($template,$data = array()) {
        foreach((array)$data as $key=>$content) {
            $this->data[$key] = $content;
        }
        $this->data['template'] = $template;
    }

    function set_breadCrumb ($breadcrumbs) {
        $this->data['breadcrumbs'] = $breadcrumbs;
    }

    function add_breadCrumb ($breadcrumb) {
        $this->data['breadcrumbs'] .= ' <span>&raquo;</span> ' . $breadcrumb;
    }

    function add_error ($error = 'General Error - If this problem persists please contact roeland@bythepixel.com.') {
        $this->data['errors'] .= '<div class="error"><p>' . $error . '</p></div>';
        $this->session->set_flashdata('errors', $this->data['errors']);
    }

    function add_success ($success) {
        $this->data['success'] .= '<div class="success"><p>' . $success . '</p></div>';
        $this->session->set_flashdata('success', $this->data['success']);
    }

    function render() {

        $this->data['page_id'] = $this->uri->segment(1) . $this->uri->segment(2);
        $this->data['page_controller'] = $this->uri->segment(1);

        // Render the raw nav data into html navs.
        if(isset($this->navs_raw)) {
            foreach ((array)$this->navs_raw as $nav_raw) {
                $nav_raw['levels'] = $this->data['levels'];
                $this->data['navs'][$nav_raw['nav_name']] = $this->load->view('navs/'.$nav_raw['nav_name'],$nav_raw,TRUE);
            }
        }

        $this->load->view('templates/'.$this->data['template'], $this->data);
        $this->session->set_flashdata('errors','');
        $this->session->set_flashdata('success','');
    }
}