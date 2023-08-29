<?php

namespace App\Controllers;
use App\Models\CommentModel;

class Home extends BaseController
{
	public function index()
	{
		return view('welcome_message');
	}
	
	public function indexId($i)
	{
		if(!$i==null){
			if($i==1){
				return view('welcome_message',['i'=> 1]);
			}elseif($i==2){
				return view('welcome_message',['i'=> 2]);
			}elseif($i==3){
				$CommentModel = new CommentModel;
				$dataComments['comments'] = $CommentModel->findAll();
				return view('welcome_message',['i'=> 3,'comments'=> $dataComments]);
			}elseif($i==4){
				return view('welcome_message',['i'=> 4]);
			}
		}else{
			return view('welcome_message');
			
		}
	}

	public function add()
	{
		$this->form_validation = \Config\Services::validation();
		
		$name = $this->request->getPost('name');
		$text = $this->request->getPost('text');
		$date = $this->request->getPost('date');
		$data = [
			'name'=>$name,
			'text'=>$text,
			'date'=>$date
		]; 
		$this->form_validation->setRules([
			'name' => 'required',
			'text' => 'required',
			'date' => 'required',
		]);

		if ($this->form_validation->run($data)!==false){
			$model = new CommentModel();
            // Добавление нового комментария
            $model->save([
                'name' => $name,
				'text' => $text,
				'date' => $date,
            ]);
			return $this->response->setJSON(['success' => true]);
		}else{
			return $this->response->setJSON(['success' => false, "vals" => $data]);
		};
	}
	public function delete($id)
	{
		$id = $this->request->getPost('id');

		// Проверка наличия параметра ID
		if ($id === null) {
			throw new \CodeIgniter\Exceptions\PageNotFoundException('Не указан ID комментария для удаления.');
		}

		// Загрузка модели комментария
		$model = new CommentModel();

		// Получение комментария по ID
		$comment = $model->find($id);

		// Проверка существования комментария
		if ($comment === null) {
			throw new \CodeIgniter\Exceptions\PageNotFoundException('Комментарий с ID ' . $id . ' не найден.');
		}

		// Удаление комментария по ID
		$model->delete($id);
		return $this->response->setJSON(['success' => true, 'value' => $id]);
	}
}
