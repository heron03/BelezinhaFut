<?php
$controllerName = $this->request->params['controller'];
$actionName = $this->request->params['action'];
$form = $this->fetch('formFields');
if ($actionName != 'view') {
    $form .= $this->Form->button(
        $this->Html->tag('i', '', array(
            'class' => 'fas fa-check'
        )) . 
        ' Gravar', array(
        'type' => 'submit',
        'class' => 'btn btn-success  mr-3',
        'escape' => false,
        'update' => '#content',
        'id' => 'botaoGravar',
    ));
}
$form .= $this->Js->link('Voltar', '/' . $controllerName, array('class' => 'btn btn-secondary', 'update' => '#content'));
$form .= $this->Form->end();

echo $this->Html->tag('h1', $this->fetch('title'));
echo $form;

$this->Js->buffer('$(".form-error").addClass("is-invalid");');

if ($this->request->is('ajax')) {
    echo $this->Js->writeBuffer();
}
