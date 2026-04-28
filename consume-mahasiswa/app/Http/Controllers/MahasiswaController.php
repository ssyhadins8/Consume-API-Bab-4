<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use GuzzleHttp\Client;

class MahasiswaController extends Controller
{
    protected $client;
    protected $baseUrl = 'http://127.0.0.1:8000/api/mahasiswa';

    public function __construct()
    {
        $this->client = new Client([
            'timeout' => 5
        ]);
    }

    // 1. LIST + SEARCH (POIN 1)
    public function index(Request $request)
    {
        try {
            $search = $request->query('search');

            $url = $this->baseUrl;

            if ($search) {
                $url .= '?search=' . $search;
            }

            $response = $this->client->get($url);
            $data = json_decode($response->getBody(), true);

            return view('mahasiswa.index', compact('data', 'search'));

        } catch (\Exception $e) {
            return dd("ERROR INDEX: " . $e->getMessage());
        }
    }

    // FORM CREATE
    public function create()
    {
        return view('mahasiswa.create');
    }

    // 2. STORE (POIN 2)
    public function store(Request $request)
    {
        try {
            $response = $this->client->post($this->baseUrl, [
                'form_params' => $request->all()
            ]);

            return redirect('/mahasiswa')
                ->with('success', 'Data berhasil ditambahkan');

        } catch (\Exception $e) {
            return dd("ERROR STORE: " . $e->getMessage());
        }
    }

    // 4. DETAIL (POIN 4)
    public function show($nim)
    {
        try {
            $response = $this->client->get($this->baseUrl . '/' . $nim);
            $data = json_decode($response->getBody(), true);

            return view('mahasiswa.show', compact('data'));

        } catch (\Exception $e) {
            return dd("ERROR SHOW: " . $e->getMessage());
        }
    }

    // FORM EDIT
    public function edit($nim)
    {
        try {
            $response = $this->client->get($this->baseUrl . '/' . $nim);
            $data = json_decode($response->getBody(), true);

            return view('mahasiswa.edit', compact('data'));

        } catch (\Exception $e) {
            return dd("ERROR EDIT: " . $e->getMessage());
        }
    }

    // 3. UPDATE (POIN 3)
    public function update(Request $request, $nim)
    {
        try {
            $this->client->put($this->baseUrl . '/' . $nim, [
                'form_params' => $request->all()
            ]);

            return redirect('/mahasiswa')
                ->with('success', 'Data berhasil diupdate');

        } catch (\Exception $e) {
            return dd("ERROR UPDATE: " . $e->getMessage());
        }
    }

    // 5. DELETE (POIN 5)
    public function destroy($nim)
    {
        try {
            $this->client->delete($this->baseUrl . '/' . $nim);

            return redirect('/mahasiswa')
                ->with('success', 'Data berhasil dihapus');

        } catch (\Exception $e) {
            return dd("ERROR DELETE: " . $e->getMessage());
        }
    }
}