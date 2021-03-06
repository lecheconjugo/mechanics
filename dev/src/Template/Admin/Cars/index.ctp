<!-- Content Header (Page header) -->
<section class="content-header">
  <h1>
    Cars
    <div class="pull-right"><?= $this->Html->link(__('Agregar'), ['action' => 'add'], ['class'=>'btn btn-success btn-sm']) ?></div>
  </h1>
</section>

<!-- Main content -->
<section class="content">
  <div class="row">
    <div class="col-xs-12">
      <div class="box">
        <div class="box-header">
          <h3 class="box-title"><?= __('List of') ?> Cars</h3>
          <?php /*
          <div class="box-tools">
            <form action="<?php echo $this->Url->build(); ?>" method="POST">
              <div class="input-group input-group-sm"  style="width: 180px;">
                <input type="text" name="search" class="form-control" placeholder="<?= __('Fill in to start search') ?>">
                <span class="input-group-btn">
                <button class="btn btn-info btn-flat" type="submit"><?= __('Filter') ?></button>
                </span>
              </div>
            </form>
          </div>
        </div>
        */ ?>
        <!-- /.box-header -->
        <div class="box-body table-responsive no-padding">
          <table class="table table-hover">
            <tr>
              <th><?= $this->Paginator->sort('id') ?></th>
              <th><?= $this->Paginator->sort('user_id') ?></th>
              <th><?= $this->Paginator->sort('car_brand_id') ?></th>
              <th><?= $this->Paginator->sort('car_model_id') ?></th>
              <th><?= $this->Paginator->sort('patent') ?></th>
              <th><?= $this->Paginator->sort('year') ?></th>
              <th><?= $this->Paginator->sort('mileage') ?></th>
              <th><?= __('Actions') ?></th>
            </tr>
            <?php foreach ($cars as $car): ?>
              <tr>
                <td><?= $this->Number->format($car->id) ?></td>
                <td><?= $car->has('user') ? $this->Html->link($car->user->name, ['controller' => 'Users', 'action' => 'view', $car->user->id]) : '' ?></td>
                <td><?= $car->has('car_brand') ? $this->Html->link($car->car_brand->brand_name, ['controller' => 'CarBrands', 'action' => 'view', $car->car_brand->id]) : '' ?></td>
                <td><?= $car->has('car_model') ? $this->Html->link($car->car_model->model_name, ['controller' => 'CarModels', 'action' => 'view', $car->car_model->id]) : '' ?></td>
                <td><?= h($car->patent) ?></td>
                <td><?= $this->Number->format($car->year) ?></td>
                <td><?= $this->Number->format($car->mileage) ?></td>
                <td class="actions" style="white-space:nowrap">
                  <?= $this->Html->link(__('View'), ['action' => 'view', $car->id], ['class'=>'btn btn-info btn-xs']) ?>
                  <?= $this->Html->link(__('Edit'), ['action' => 'edit', $car->id], ['class'=>'btn btn-warning btn-xs']) ?>
                  <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $car->id], ['confirm' => __('Confirm to delete this entry?'), 'class'=>'btn btn-danger btn-xs']) ?>
                </td>
              </tr>
            <?php endforeach; ?>
          </table>
        </div>
        <!-- /.box-body -->
        <div class="box-footer clearfix">
          <ul class="pagination pagination-sm no-margin pull-right">
            <?php echo $this->Paginator->numbers(); ?>
          </ul>
        </div>
      </div>
      <!-- /.box -->
    </div>
  </div>
</section>
<!-- /.content -->
