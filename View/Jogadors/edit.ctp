<?php
$this->extend('/Common/form');

$this->assign('title', 'Novo Jogador');

$formFields = $this->element('formCreate');
$formFields .= $this->Form->hidden('Jogador.id');
$formFields .= $this->Html->div('form-row',
    $this->Form->input('Jogador.nome', array(
        'div' => array('class' => 'form-group col-md-6'),
    )) .
    $this->Form->input('Jogador.posicao', array(
        'type' => 'select',
        'div' => array('class' => 'form-group col-md-6'),
        'options' => array('Goleiro' => 'Goleiro', 'Lateral' => 'Lateral', 'Zagueiro' => 'Zagueiro', 'Meio Campo' => 'Meio Campo', 'Atacante' => 'Atacante'),
    ))
);

$formFields .= $this->Html->div('form-row',
    $this->Form->input('Jogador.clube', array(
        'div' => array('class' => 'form-group col-md-6'),
    )) .
    $this->Form->input('Jogador.pais', array(
        'div' => array('class' => 'form-group col-md-6'),
    ))
);

$this->assign('formFields', $formFields);
