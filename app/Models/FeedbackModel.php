<?php

namespace App\Models;

use CodeIgniter\Model;

class FeedbackModel extends Model
{
    protected $table = 'feedback'; // Nama tabel
    protected $primaryKey = 'id'; // Primary key tabel
    protected $allowedFields = ['nama', 'email', 'situs', 'komentar', 'created_at']; // Kolom yang diizinkan untuk input
}
