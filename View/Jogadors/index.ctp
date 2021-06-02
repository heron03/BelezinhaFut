<?php
$this->extend('/Common/index');

$this->assign('title', 'Jogadores');

$searchFields = $this->Form->input('Jogador.nome_clube', array(
    'required' => false,
    'label' => array('text' => 'Nome', 'class' => 'sr-only'),
    'class' => 'form-control mb-2 mr-sm-2',
    'div' => false,
    'placeholder' => 'Nome ou Clube'
));
$this->assign('searchFields', $searchFields);

$titulos = array($this->Paginator->sort('Nome'), 'Clube', 'País',  'Posição', '');
$tableHeaders = $this->Html->tableHeaders($titulos);
$this->assign('tableHeaders', $tableHeaders);

$detalhe = array();
foreach ($jogadors as $jogador) {
    $editLink = $this->Js->link('Alterar', '/jogadors/edit/' . $jogador['Jogador']['id'], array('update' => '#content'));
    $deleteLink = $this->Js->link('Excluir', '/jogadors/delete/' . $jogador['Jogador']['id'], array('update' => '#content', 'confirm' => 'Tem certeza?'));
    $viewLink = $this->Js->link($jogador['Jogador']['nome'], '/jogadors/view/' . $jogador['Jogador']['id'], array('update' => '#content'));
    $detalhe[] = array(
        $viewLink, 
        $jogador['Jogador']['clube'],
        $jogador['Jogador']['pais'],
        $jogador['Jogador']['posicao'],
        $editLink . ' ' . $deleteLink
    );
}
$tableCells = $this->Html->tableCells($detalhe);
$this->assign('tableCells', $tableCells);

