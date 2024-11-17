<?php

namespace Config;

use CodeIgniter\Config\BaseConfig;

class Email extends BaseConfig
{
    public $fromEmail  = 'mnursyahputra@gmail.com'; // Ganti dengan email kamu
    public $fromName   = 'Your Name or Website'; // Nama pengirim (opsional)
    public $recipients = '';

    public $protocol   = 'smtp';
    public $SMTPHost   = 'smtp.gmail.com';
    public $SMTPUser   = 'your-email@gmail.com'; // Ganti dengan email kamu
    public $SMTPPass   = 'your-email-password'; // Ganti dengan password email kamu
    public $SMTPPort   = 587;
    public $SMTPCrypto = 'tls'; // atau bisa juga 'ssl' (coba mana yang bekerja)

    public $mailType   = 'html'; // atau 'text', sesuai dengan kebutuhan kamu
    public $charset    = 'utf-8';
    public $newline    = "\r\n";
    public $wordWrap   = true;
}
