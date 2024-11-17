<?php

namespace App\Controllers;

use App\Models\FeedbackModel;
use App\Models\ReactionModel;

class FeedbackController extends BaseController
{
    public function send()
    {
        $feedbackModel = new FeedbackModel();

        $data = [
            'komentar' => $this->request->getPost('komentar'),
            'nama' => $this->request->getPost('nama') ?: 'Anonim',
            'email' => $this->request->getPost('email'),
            'situs' => $this->request->getPost('situs'),
        ];

        if ($feedbackModel->insert($data)) {
            return $this->response->setJSON(['status' => 'success', 'message' => 'Komentar berhasil disimpan']);
        }

        return $this->response->setJSON(['status' => 'error', 'message' => 'Gagal menyimpan komentar']);
    }

    public function list()
    {
        $feedbackModel = new FeedbackModel();

        // Ambil semua komentar dari database
        $data['feedbacks'] = $feedbackModel->orderBy('created_at', 'DESC')->findAll();

        // Hitung jumlah komentar per hari
        $data['chartData'] = $feedbackModel
            ->select("DATE(created_at) as date, COUNT(*) as count")
            ->groupBy("DATE(created_at)")
            ->orderBy("date", "ASC")
            ->findAll();

        // Tampilkan ke view
        return view('feedback_list', $data);
    }

    public function react()
    {
        if ($this->request->getMethod() !== 'post') {
            return $this->response->setJSON(['status' => 'error', 'message' => 'Invalid request method'], 405);
        }

        $reactionType = $this->request->getJSON()->reaction_type ?? null;

        if (!$reactionType) {
            return $this->response->setJSON(['status' => 'error', 'message' => 'Reaction type is missing'], 400);
        }

        $reactionModel = new ReactionModel();
        $reactionModel->incrementReaction($reactionType);

        return $this->response->setJSON(['status' => 'success']);
    }

    // Fungsi untuk menampilkan statistik reaksi
    public function reactionStats()
    {
        // Pastikan untuk menggunakan query atau mekanisme yang benar untuk mendapatkan data reaksi
        $reactionModel = new ReactionModel();

        // Ambil data statistik reaksi (misalnya jumlah reaksi untuk setiap jenis)
        $reactions = $reactionModel->getReactionStats();

        if (empty($reactions)) {
            return $this->response->setJSON(['status' => 'error', 'message' => 'No reactions found'], 404);
        }

        // Kembalikan data reaksi sebagai JSON
        return $this->response->setJSON($reactions);
    }
}
