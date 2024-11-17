<?php

namespace App\Models;

use CodeIgniter\Model;

class ReactionModel extends Model
{
    protected $table = 'reactions'; // Nama tabel di database
    protected $primaryKey = 'id';
    protected $allowedFields = ['reaction_type', 'count'];

    // Tambah fungsi incrementReaction dan getReactionStats di sini
    public function incrementReaction($reactionType)
    {
        $reaction = $this->where('reaction_type', $reactionType)->first();

        if ($reaction) {
            $this->update($reaction['id'], ['count' => $reaction['count'] + 1]);
        } else {
            $this->insert(['reaction_type' => $reactionType, 'count' => 1]);
        }
    }

    public function getReactionStats()
    {
        return $this->findAll();
    }
}
