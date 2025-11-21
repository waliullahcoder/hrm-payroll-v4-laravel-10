<?php $__env->startSection('title', __('Manage Files')); ?>

<?php $__env->startSection('main_content'); ?>
<div class="content-wrapper wow fadeInDown" data-wow-duration=".5s" data-wow-delay=".2s">
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <h1>
            <?php echo __('FILES'); ?>

        </h1>
        <ol class="breadcrumb">
            <li><a href="<?php echo url('/dashboard'); ?>"><i class="fa fa-dashboard"></i><?php echo __('Dashboard'); ?> </a></li>
            <li><a><?php echo __('Files'); ?></a></li>
            <li class="active"><?php echo __('Manage Files'); ?></li>
        </ol>
    </section>

    <!-- Main content -->
    <section class="content">
        <!-- Default box -->
        <div class="box">
            <div class="box-header with-border">
                <h3 class="box-title"><?php echo __('Manage files'); ?></h3>

                <div class="box-tools pull-right">
                    <button type="button" class="btn btn-box-tool" data-widget="collapse" data-toggle="tooltip" title="Collapse"><i class="fa fa-minus"></i></button>
                    <button type="button" class="btn btn-box-tool" data-toggle="tooltip" title="Remove"><i class="fa fa-times"></i></button>
                </div>
            </div>
            <div class="box-body">
                <div  class="col-md-6"> 
                    <a href="<?php echo url('files/create/'. $folder_id); ?>" class="btn btn-primary btn-flat"><i class="fa fa-plus"></i> <?php echo __('Add file'); ?></a>
                </div>

                <div  class="col-md-6">  <input type="text" id="myInput" class="form-control" placeholder="<?php echo __('Search..'); ?>"></div>
                <hr>
                <!-- Notification Box -->
                <div class="col-md-12">
                    <?php if(!empty(Session::get('message'))): ?>
                    <div class="alert alert-success alert-dismissible" id="notification_box">
                        <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
                        <i class="icon fa fa-check"></i> <?php echo Session::get('message'); ?>

                    </div>
                    <?php elseif(!empty(Session::get('exception'))): ?>
                    <div class="alert alert-warning alert-dismissible" id="notification_box">
                        <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
                        <i class="icon fa fa-warning"></i> <?php echo Session::get('exception'); ?>

                    </div>
                    <?php endif; ?>
                </div>
                <!-- /.Notification Box -->
                <div class="col-md-12 table-responsive">
                    <table class="table table-bordered table-striped">
                        <thead>
                            <tr>
                                <th><?php echo __('SL#'); ?></th>
                                <th><?php echo __('Caption'); ?></th>
                                <th><?php echo __('Uploded File'); ?></th>
                                <th class="text-center"><?php echo __('Added by'); ?></th>
                                <th class="text-center"><?php echo __('Created at'); ?></th>
                                <th class="text-center"><?php echo __('Download'); ?></th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php ($sl = 1); ?>
                            <?php $__currentLoopData = $files; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $file): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                            <tr>
                                <td><?php echo $sl++; ?></td>
                                <td><?php echo $file->caption; ?></td>
                                <td><a href="<?php echo url('/files/download/'.$file->file_name); ?>"><?php echo $file->file_name; ?></a></td>
                                <td class="text-center" ><?php echo $file->name; ?></td>
                                <td class="text-center"><?php echo date("d F Y", strtotime($file->created_at)); ?></td>
                                <td class="text-center">
                                    <a href="<?php echo url('/files/download/'.$file->file_name); ?>" class="btn btn-success btn-xs btn-flat btn-block" data-toggle="tooltip" data-original-title="Click to download"><i class="icon fa fa-cloud-download"> <?php echo __('Downlod'); ?></i></a>
                                </td>
                            </tr>
                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                        </tbody>
                    </table>
                </div>
              <!-- =================Data Search================== -->
                <script>
                $(document).ready(function(){
                 $("#myInput").on("keyup", function() {
                   var value = $(this).val().toLowerCase();
                   $("#myTable tr").filter(function() {
                     $(this).toggle($(this).text().toLowerCase().indexOf(value) > -1)
                   });
                 });
                });
                </script>
                <!-- =================Data Search================== -->
            </div>
            <!-- /.box-body -->
        </div>
        <!-- /.box -->
    </section>
    <!-- /.content -->
</div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('administrator.master', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>