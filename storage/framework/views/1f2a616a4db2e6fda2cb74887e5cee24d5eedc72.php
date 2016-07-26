<?php $__env->startSection('content'); ?>
    <h1>Create New Asset</h1>
    <?php echo Form::open(['url' => 'assets']); ?>


       <div class="form-group">
        <?php echo Form::select('customer_id', $customers); ?>

    </div>

    <div class="form-group">
        <?php echo Form::label('symbol', 'Symbol:'); ?>

        <?php echo Form::text('symbol',null,['class'=>'form-control']); ?>

    </div>
    <div class="form-group">
        <?php echo Form::label('assetname', 'Asset Name:'); ?>

        <?php echo Form::text('assetname',null,['class'=>'form-control']); ?>

    </div>
    <div class="form-group">
        <?php echo Form::label('assets', 'Assets:'); ?>

        <?php echo Form::text('assets',null,['class'=>'form-control']); ?>

    </div>
    <div class="form-group">
        <?php echo Form::label('acquired_price', 'Acquired Price:'); ?>

        <?php echo Form::text('acquired_price',null,['class'=>'form-control']); ?>

    </div>
    <div class="form-group">
        <?php echo Form::label('purchase_date', 'Purchase Date:'); ?>

        <?php echo Form::text('purchase_date',null,['class'=>'form-control']); ?>

    </div>


    <div class="form-group">
        <?php echo Form::submit('Save', ['class' => 'btn btn-primary form-control']); ?>

    </div>
    <?php echo Form::close(); ?>

<?php $__env->stopSection(); ?>

<?php echo $__env->make('app', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>