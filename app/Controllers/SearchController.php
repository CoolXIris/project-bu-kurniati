<?php

namespace App\Controllers;

class SearchController extends BaseController
{
    public function index()
    {
        return view('search'); // Tampilkan halaman pencarian
    }

    public function results()
    {
        try {
            $query = $this->request->getVar('query');
            $folder = APPPATH . 'Views/page';
            $results = [];

            if ($query) {
                $files = scandir($folder);
                foreach ($files as $file) {
                    if (strpos(strtolower($file), strtolower($query)) !== false) {
                        $filename = pathinfo($file, PATHINFO_FILENAME);
                        $results[] = [
                            'title' => ucfirst(str_replace('_', ' ', $filename)),
                            'url' => base_url("page/{$filename}"),
                        ];
                    }
                }
            }

            return view('search_results', ['query' => $query, 'results' => $results]);
        } catch (\Exception $e) {
            log_message('error', $e->getMessage());
            return "An error occurred. Check logs for details.";
        }
    }
}
