<?php

class AjaxModel extends CI_Model
{
    /**
     * @param $data
     */
    public function WriteData($data)
    {
        $insert_data = [
            'name' => $data['name'],
            'email' => $data['email'],
            'bith_day' => $data['year'].'-'.$data['month'].'-'.$data['day'],
            'favcolor' => $data['favcolor']
        ];

       $this->db->insert('test_table', $insert_data);
    }
}