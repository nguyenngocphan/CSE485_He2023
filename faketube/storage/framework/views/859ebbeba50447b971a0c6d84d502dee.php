<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>List Of Channels</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" >
</head>
<body>
    <div class="container mt-2">
        <div class="row">
            <div class="margin-tb">
                <div class="pull-left">
                    <h2>List Of Channels</h2>
                </div>
                <div class="pull-right mb-2">
                    <a class="btn btn-success" href="<?php echo e(route('channels.create')); ?>"> Create Channel</a>
                </div>
            </div>
        </div>
        <?php if($message = Session::get('success')): ?>
            <div class="alert alert-success">
                <p><?php echo e($message); ?></p>
            </div>
        <?php endif; ?>
        <table class="table table-bordered">
            <thead>
            <tr>
                <th>#</th>
                <th>ChannelName</th>
                <th>Description</th>
                <th>SubcribersCount</th>
                <th>URL</th>
                <th width="280px">Action</th>
            </tr>
            </thead>
            <tbody>
            <?php $__currentLoopData = $channels; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $channel): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            <tr>
                <td><?php echo e($channel->id); ?></td>
                <td><?php echo e($channel->ChannelName); ?></td>
                <td><?php echo e($channel->Description); ?></td>
                <td><?php echo e($channel->SubcribersCount); ?></td>
                <td><?php echo e($channel->URL); ?></td>
                <td>
                    <a class="btn btn-primary" href="<?php echo e(route('channels.show',$channel->id)); ?>">Detail</a>
                    <a class="btn btn-primary" href="<?php echo e(route('channels.edit',$channel->id)); ?>">Edit</a>
                    <a class="btn btn-primary" href="#" data-id=<?php echo e($channel->id); ?> data-toggle="modal" data-target="#<?php echo e($channel->id); ?>">Delete</a>
                    <!-- Modal -->
                    <form action="<?php echo e(route('channels.destroy',$channel->id)); ?>" method="post">
                        <?php echo csrf_field(); ?>
                        <?php echo method_field('DELETE'); ?>
                        <div class="modal fade" id="<?php echo e($channel->id); ?>" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                            <div class="modal-dialog" role="document">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <h5 class="modal-title" id="exampleModalLabel">Delete Channel</h5>
                                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                            <span aria-hidden="true">&times;</span>
                                        </button>
                                    </div>
                                    <div class="modal-body">
                                        Are you sure delete the channel with id: <?php echo e($channel->id); ?>?
                                    </div>
                                    <div class="modal-footer">
                                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                                        <button type="submit" class="btn btn-danger">Delete</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </form>
                </td>
            </tr>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
            </tbody>
        </table>
    </div>

<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>

</body>
</html>
<?php /**PATH D:\WebEnv\laravel projects\faketube\resources\views/index.blade.php ENDPATH**/ ?>