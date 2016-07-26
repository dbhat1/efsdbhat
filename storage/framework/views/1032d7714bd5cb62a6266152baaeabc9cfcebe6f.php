<?php $__env->startSection('content'); ?>
    <h1>Asset</h1>
    <a href="<?php echo e(url('/assets/create')); ?>" class="btn btn-success">Create Asset</a>
    <hr>
    <table class="table table-striped table-bordered table-hover">
        <thead>
        <tr class="bg-info">
            <th>Cust No</th>
            <th>Cust Name</th>
            <th>Symbol</th>
            <th>Asset Name</th>
            <th>Assets</th>
            <th>Acquired price</th>
            <th>Purchased Date</th>
            <th colspan="3">Actions</th>
        </tr>
        </thead>
        <tbody>
        <?php foreach($assets as $asset): ?>
            <tr>
                <td><?php echo e($asset->customer->cust_number); ?></td>
                <td><?php echo e($asset->customer->name); ?></td>
                <td><?php echo e($asset->symbol); ?></td>
                <td><?php echo e($asset->assetname); ?></td>
                <td><?php echo e($asset->assets); ?></td>
                <td><?php echo e($asset->acquired_price); ?></td>
                <td><?php echo e($asset->purchase_date); ?></td>
                <td><a href="<?php echo e(url('assets',$asset->id)); ?>" class="btn btn-primary">Read</a></td>
                <td><a href="<?php echo e(route('assets.edit',$asset->id)); ?>" class="btn btn-warning">Update</a></td>
                <td>
                    <?php echo Form::open(['method' => 'DELETE', 'route'=>['assets.destroy', $asset->id]]); ?>

                    <?php echo Form::submit('Delete', ['class' => 'btn btn-danger']); ?>

                    <?php echo Form::close(); ?>

                </td>
            </tr>
        <?php endforeach; ?>

        </tbody>

    </table>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('app', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>