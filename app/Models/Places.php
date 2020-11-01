<?php
namespace App\Models;

/*
 * Mock travel destination data.
 * Note that we don't have to extend CodeIgniter's model for now
 */

class Places {

    //mock data : an array of records
    protected $data = [
        '1' => [
            'id' => 1,
            'name' => 'Qie zi',
            'country'=>'Chnina',
            'description' => 'A professional CSGO player from China.',
            'link' => 'https://www.douyu.com/',
            'image' => '1.jpg',
        ],
        '2' => [
            'id' => 2,
            'name' => 'DGQ',
            'country'=>'Chnina',
            'description' => 'A professional CSGO player from China.',
            'link' => 'https://www.douyu.com/',
            'image' => '2.jpg',
        ],
        '3' => [
            'id' => 3,
            'name' => 'LXF',
            'country'=>'Chnina',
            'description' => 'A professional CSGO player from China.',
            'link' => 'https://www.douyu.com/',
            'image' => '3.jpg',
        ],
        '4' => [
            'id' => 4,
            'name' => 'QKA',
            'country'=>'Chnina',
            'description' => 'A professional CSGO player from China.',
            'link' => 'https://www.douyu.com/',
            'image' => '4.jpg',
        ],
        '5' => [
            'id' => 5,
            'name' => 'Sakula'
            . '.',
            'country'=>'Chnina',
            'description' => 'A professional CSGO player from China.',
            'link' => 'https://www.douyu.com/',
            'image' => '5.jpg',
        ],
        '6' => [
            'id' => 6,
            'name' => 'Maozi'
            . '.',
            'country'=>'Russia',
            'description' => 'A professional CSGO player from Russia.',
            'link' => 'https://www.douyu.com/',
            'image' => '6.jpg',
        ],
    ];

    public function findAll() {
        return $this->data;
    }

    public function find($id = null) {
        if (!empty($id) && isset($this->data[$id])) {
            return $this->data[$id];
        }
        return null;
    }

}
