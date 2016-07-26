<?php $__env->startSection('content'); ?>
    <h1>Asset </h1>
    <div class="container">
        <table class="table table-striped table-bordered table-hover">
            <tbody>
            <tr class="bg-info">
            <tr>
                <td>Asset Symbol</td>
                <td><?php echo ($asset['symbol']); ?></td>
            </tr>
            <tr>
                <td>Asset Name</td>
                <td><?php echo ($asset['assetname']); ?></td>
            </tr>
            <tr>
                <td>Number of Assets</td>
                <td><?php echo ($asset['assets']); ?></td>
            </tr>
            <tr>
                <td>Acquired Price </td>
                <td><?php echo ($asset['acquired_price']); ?></td>
            </tr>
            <tr>
                <td>Date Purchased</td>
                <td><?php echo ($asset['purchase_date']); ?></td>
            </tr>
            </tbody>
        </table>
    </div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('app', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>