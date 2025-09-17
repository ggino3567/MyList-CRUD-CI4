<?php
namespace App\Controllers;

use App\Models\TodoModel;

class Todo extends BaseController
{
    protected $model;

    public function __construct()
    {
        $this->model = new TodoModel();
    }

    public function index()
    {
        // $data['todos'] = $this->model->findAll();
        // return view('todo/index', $data);

        // 這個就是CI的方便之處ㄇ
        return view('todo/index', [
            'todos' => $this->model->findAll()
        ]);
    }

    public function new()
    {
        return view('todo/create');
    }

    public function create()
    {
        // $this->model->insert([
        //     'task' => $this->request->getPost('task'),
        //     'description' => $this->request->getPost('description'),
        // ]);
        $this->model->insert($this->request->getPost());
        return redirect()->to('/');
    }

    public function edit($id)
    {
        // $data['todo'] = $this->model->find($id);
        return view('todo/edit', [
            'todo' => $this->model->find($id)
        ]);
    }

    public function update($id)
    {
        // $this->model->update($id, [
        //     'task' => $this->request->getPost('task'),
        //     'description' => $this->request->getPost('description'),
        // ]);

        $this->model->update($id);
        return redirect()->to('/');
    }

    public function delete($id = null)
    {
        $this->model->delete($id);
        return redirect()->to('/');
    }

    // public function tryJson()
    // {
    //     $this->response->setStatusCode(200);
    //     return $this->response->setJSON(["msg" => "try json api"]);
    // }
}
