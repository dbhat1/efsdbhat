<?php $__env->startSection('content'); ?>
    <h1>Mutualfund</h1>
    <a href="<?php echo e(url('/mutualfunds/create')); ?>" class="btn btn-success">Create Mutualfunds</a>
    <hr>
    <table class="table table-striped table-bordered table-hover">
        <thead>
        <tr class="bg-info">
            <th>Cust No</th>
            <th>Cust Name</th>
            <th>Symbol</th>
            <th>Company Name</th>
            <th>Mutualfunds</th>
            <th>Bought price</th>
            <th>Purchased</th>
            <th colspan="3">Actions</th>
        </tr>
        </thead>
        <tbody>
        <?php foreach($mutualfunds as $mutualfund): ?>
            <tr>
                <td><?php echo e($mutualfund->customer->cust_number); ?></td>
                <td><?php echo e($mutualfund->customer->name); ?></td>
                <td><?php echo e($mutualfund->symbol); ?></td>
                <td><?php echo e($mutualfund->company name); ?></td>
                <td><?php echo e($mutualfund->mutualfunds); ?></td>
                <td><?php echo e($mutualfund->bought_price); ?></td>
                <td><?php echo e($mutualfund->purchased); ?></td>
                <td><a href="<?php echo e(url('mutualfunds',$mutualfund->id)); ?>" class="btn btn-primary">Read</a></td>
                <td><a href="<?php echo e(route('mutualfunds.edit',$mutualfund->id)); ?>" class="btn btn-warning">Update</a></td>
                <td>
                    <?php echo Form::open(['method' => 'DELETE', 'route'=>['mutualfunds.destroy', $mutualfund->id]]); ?>

                    <?php echo Form::submit('Delete', ['class' => 'btn btn-danger']); ?>

                    <?php echo Form::close(); ?>

                </td>
            </tr>
        <?php endforeach; ?>

        </tbody>

    </table>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('app', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>