<?php

class UserModel extends CI_Model
{
    public function __construct()
    {
        parent::__construct();
        $this->db = $this->load->database('default', true);
    }
    //upload image and update user data
    public function update_user($data)
    {
        $pre_reg = true;
        if (empty($data['uniqueid'])) {
            $data['uniqueid'] = $data['firstname'] . uniqid();
            $pre_reg = false;
        }
        if (!empty($data['image'])) {
            $image_path = FCPATH . "assets/images/user_images/";
            $image_name = $data['uniqueid'] . '.png';
            $img = str_replace('data:image/jpeg;base64,', '', $data['image']);
            $img = str_replace(' ', '+', $img);
            file_put_contents($image_path . $image_name, base64_decode($img));
            $data['image'] = $image_name;
        }
        if ($pre_reg) {
            if (!empty($data['image'])) {
                $this->db->set('image', $data['image'], TRUE);
                $this->db->where('uniqueid', $data['uniqueid']);
                $this->db->update('user');
            }
        } else {
            $data['type'] = 1;
            $this->db->insert('user', $data);
        }
        $data['msg'] = "Details successfully registered.";
        $data['status'] = true;
        return $data;
    }
    //check whether a pre registered user exists with given id
    public function check_user($data)
    {
        $this->db->where('uniqueid', $data['uniqueid']);
        $result = $this->db->get('user');
        if ($result->num_rows() > 0) {
            $response = $result->row_array();
            $_SESSION['user_data'] = $response;
            $response['status'] = true;
        } else {
            $response['msg'] = "No matching accounts have been found";
            $response['status'] = false;
        }
        return $response;
    }
    //fetch user details corresponding to given unique user id
    public function get_user_details($data)
    {
        $this->db->where('uniqueid', $data['uniqueid']);
        $result = $this->db->get('user');
        if ($result->num_rows() > 0) {
            $response = $result->row_array();
            $response['status'] = true;
        } else {
            $response['msg'] = "No matching accounts have been found";
            $response['status'] = false;
        }
        return $response;
    }
}