<!-- Content Header (Page header) -->
<section class="content-header">
  <h1>
    Available Services Replacements
    <div class="pull-right"><?= $this->Html->link(__('Agregar'), ['action' => 'add'], ['class'=>'btn btn-success btn-sm']) ?></div>
  </h1>
</section>

<!-- Main content -->
<section class="content">
  <div class="row">
    <div class="col-xs-12">
      <div class="box">
        <div class="box-header">
          <h3 class="box-title"><?= __('List of') ?> Available Services Replacements</h3>
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
              <th><?= $this->Paginator->sort('available_service_id') ?></th>
              <th><?= $this->Paginator->sort('replacement_id') ?></th>
              <th><?= $this->Paginator->sort('active') ?></th>
              <th><?= __('Actions') ?></th>
            </tr>
            <?php foreach ($availableServicesReplacements as $availableServicesReplacement): ?>
              <tr>
                <td><?= $this->Number->format($availableServicesReplacement->id) ?></td>
                <td><?= $availableServicesReplacement->has('available_service') ? $this->Html->link($availableServicesReplacement->available_service->name, ['controller' => 'AvailableServices', 'action' => 'view', $availableServicesReplacement->available_service->id]) : '' ?></td>
                <td><?= $availableServicesReplacement->has('replacement') ? $this->Html->link($availableServicesReplacement->replacement->name, ['controller' => 'Replacements', 'action' => 'view', $availableServicesReplacement->replacement->id]) : '' ?></td>
                <td><?= h($availableServicesReplacement->active) ?></td>
                <td class="actions" style="white-space:nowrap">
                  <?= $this->Html->link(__('View'), ['action' => 'view', $availableServicesReplacement->id], ['class'=>'btn btn-info btn-xs']) ?>
                  <?= $this->Html->link(__('Edit'), ['action' => 'edit', $availableServicesReplacement->id], ['class'=>'btn btn-warning btn-xs']) ?>
                  <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $availableServicesReplacement->id], ['confirm' => __('Confirm to delete this entry?'), 'class'=>'btn btn-danger btn-xs']) ?>
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
