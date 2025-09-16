<?php
namespace App\Controllers;

use App\Models\TodoModel;
use CodeIgniter\RESTful\ResourceController;

class Todo extends ResourceController
{
    protected $modelName = 'App\Models\TodoModel';
    protected $format = 'html'; // 沒差，因為是return view()
    // protected $format = 'json';

    // 顯示全部
    public function index()
    {
        $data['todos'] = $this->model->findAll();
        return view('todo/index', $data);
    }

    // 顯示新增表單
    public function new()
    {
        return view('todo/create');
    }

    // 處理新增
    public function create()
    {
        $this->model->insert([
            'task' => $this->request->getPost('task'),
            'description' => $this->request->getPost('description'),
        ]);
        return redirect()->to('/todo');
    }

    // 顯示編輯表單
    public function edit($id = null)
    {
        $data['todo'] = $this->model->find($id);
        return view('todo/edit', $data);
    }

    // 處理更新
    public function update($id = null)
    {
        $this->model->update($id, [
            'task' => $this->request->getPost('task'),
            'description' => $this->request->getPost('description'),
        ]);
        return redirect()->to('/todo');
    }

    // 處理刪除
    public function delete($id = null)
    {
        $this->model->delete($id);
        return redirect()->to('/todo');
    }

    public function tryJson()
    {
        $this->response->setStatusCode(200);
        return $this->response->setJSON(["msg" => "try json api"]);
    }
}
