<section class="content-header">
  <h1>
    Purchase Orders Supply
    <small><?= __('Add') ?></small>
    <div class="pull-right">
      <?= $this->Html->link('<i class="fa fa-angle-left"></i> '.__('Volver'), ['action' => 'index'], ['class'=>'btn btn-success btn-sm','escape' => false]) ?>
    </div>
  </h1>
</section>

<!-- Main content -->
<section class="content">
  <div class="row">
    <!-- left column -->
    <div class="col-md-12">
      <!-- general form elements -->
      <div class="box box-primary">
        <div class="box-header with-border">
          <h3 class="box-title"><?= __('Form') ?></h3>
        </div>
        <!-- /.box-header -->
        <!-- form start -->
        <?= $this->Form->create($purchaseOrdersSupply, array('role' => 'form')) ?>
          <div class="box-body">
          <?php
            echo $this->Form->input('purchase_order_id', ['options' => $purchaseOrders]);
            echo $this->Form->input('supply_id', ['options' => $supplies]);
            echo $this->Form->input('provider_id', ['options' => $providers]);
          ?>
          </div>
          <!-- /.box-body -->
          <div class="box-footer">
            <?= $this->Form->button(__('Save')) ?>
          </div>
        <?= $this->Form->end() ?>
      </div>
    </div>
  </div>
</section>
