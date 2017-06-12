<?php
/**
  * @var \App\View\AppView $this
  */
?>
<?= $this->Form->create($course) ?>
<fieldset>
    <legend><?= __('Editar') ?></legend>
    <div class="form-group">
    <?php
        echo $this->Form->input('name', ['label' => 'Nome', 'class' => 'form-control']);
        echo $this->Form->input('code', ['label' => 'Código', 'class' => 'form-control']);
        echo $this->Form->input('users_id', ['options' => $users, 'label' => 'Coordenador', 'class' => 'form-control']);
    ?>
</fieldset>
<div class="row">
    <?= $this->Form->button('Salvar', ['class' => 'btn btn-primary']) ?>
    <?= $this->Form->end() ?>
    <?= $this->Html->link('Cancelar',['action' => 'index'], ['class' => 'btn btn-primary', 'type' => 'button', 'action' => 'index']) ?>
</div>