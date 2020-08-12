<?php

namespace App\Models;

use CodeIgniter\CLI\Console;
use CodeIgniter\Model;

class ContactModel extends Model
{
    protected $table = 'contact';
    protected $primaryKey = 'id_contact';

    public function insertMessage()
    {
        $db      = \Config\Database::connect();
        $builder = $db->table('contact');

        $name = $_POST['name'];
        $email = $_POST['email'];
        $subject = $_POST['subject'];
        $message = $_POST['message'];

        $data = [
            'id_contact' => 'CO0001',
            'nama_contact'  => $name,
            'email_contact'  => $email,
            'subject_contact' => $subject,
            'message_contact' => $message
        ];
        $builder->insert($data);
    }
}
