<?php

class JogadorsController extends AppController {
    public $paginate = array(
        'fields' => array(
            'Jogador.id',
            'Jogador.nome',
            'Jogador.clube',
            'Jogador.posicao',
            'Jogador.pais'
        ),
        'conditions' => array(),
        'limit' => 10,        
        'order' => array('Jogador.nome' => 'asc')    
    );

    public function setPaginateConditions() {
        $nome = '';
        if ($this->request->is('post')) {
            $nome = $this->request->data['Jogador']['nome_clube'];
            $this->Session->write('Jogador.nome_clube', $nome);
        } else {
            $nome = $this->Session->read('Jogador.nome_clube');
            $this->request->data('Jogador.nome_clube', $nome);
        }
        if (!empty($nome)) {
            $this->paginate['conditions']['or'] = array(
                'Jogador.clube LIKE' => '%' . trim($nome) . '%',
                'Jogador.nome LIKE' => '%' . trim($nome) . '%' 
            );
        }
    }

    public function getEditData($id) {
        $fields = array(
            'Jogador.id',
            'Jogador.nome',
            'Jogador.clube',
            'Jogador.posicao',
            'Jogador.pais'
        );
        $conditions = array('Jogador.id' => $id);
        $jogador = $this->Jogador->find('first', compact('fields', 'conditions'));

        return $jogador;
    }
    
    public function buscarJogador($id) {
        $this->autoRender = $this->layout = false;
        $credencial = $this->getEditData($id);
        $this->response->type('json');
        $this->response->statusCode(200);

        return json_encode($credencial);
    }
}
