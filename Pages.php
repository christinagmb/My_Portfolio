<?php

class Pages extends CI_Controller {

    public function view($page = 'home') {
        if (!file_exists(APPPATH . 'views/pages/' . $page . '.php')) {
            show_404();
        }

        $this->load->model('Portfolio_model');
        $data['title'] = ucfirst($page);
        $data['comments'] = $this->Portfolio_model->get_posts();

        $this->load->view('templates/header', $data);
        $this->load->view('pages/' . $page, $data);
        $this->load->view('templates/footer');
    }

    public function submit_comment() {
        $this->load->model('Portfolio_model');

        $data = array(
            'name' => $this->input->post('name', TRUE),
            'comment' => $this->input->post('comment', TRUE)
        );

        $this->Portfolio_model->insert_comment($data);

        redirect('pages/view/home');
    }
}
