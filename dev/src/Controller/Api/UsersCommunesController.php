<?php
namespace App\Controller\Api;

use App\Controller\Api\AppController;
use Cake\ORM\TableRegistry;
use Cake\Event\Event;
use Cake\Network\Exception\UnauthorizedException;
use Cake\Network\Exception\ForbiddenException;
use Cake\Network\Exception\BadRequestException;


class UsersCommunesController extends AppController
{
    public $id_local = null;

    public function initialize()
    {
        parent::initialize();
        $this->Auth->allow(['index']);
    }//end initialize


    public function index(){
        $user = $this->Auth->identify();
        $this->Crud->on('beforePaginate', function(Event $event) {
            $user = $this->Auth->identify();
            $this->paginate = [
                'fields' => [
                    'UsersCommunes.id',
                    'UsersCommunes.commune_id'
                    ],
            ];
        });
        return $this->Crud->execute();
    }//end index


    public function add(){
        $user = $this->Auth->identify();
        if (!$user) {
            throw new UnauthorizedException('Invalid username or password');
        }

        if ($this->request->is('post')) {

          $query= $this->UsersCommunes->query();
          $query->delete()
                ->where([ 'user_id'=>$user['id']])
                ->execute();


          $communes = TableRegistry::get('UsersCommunes');
          $entities = $communes->newEntities($this->request->data);
          $communes->connection()->transactional(function () use ($communes, $entities) {
              $user = $this->Auth->identify();
              foreach($entities as $data){
                  $data['user_id'] = $user['id'];
                  $communes->save($data, ['atomic' => false]);
              }

              echo json_encode(['success'=>true,'data'=>['message'=>'Actualizado']]);
          });
        }
        $this->autoRender= false;
    }//end add

}//end Cities
