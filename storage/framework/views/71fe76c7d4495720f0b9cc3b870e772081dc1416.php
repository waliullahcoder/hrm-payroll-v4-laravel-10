<?php $__env->startSection('title', __('Add Employee Awards')); ?>

<?php $__env->startSection('main_content'); ?>
<div class="content-wrapper wow fadeInDown" data-wow-duration=".5s" data-wow-delay=".2s">
  <!-- Content Header (Page header) -->
  <section class="content-header">
    <h1>
     <?php echo __('EMPLOYEE AWARD LISTS'); ?>  
    </h1>
    <ol class="breadcrumb">
      <li><a href="<?php echo url('/dashboard'); ?>"><i class="fa fa-dashboard"></i> <?php echo __('Dashboard'); ?> </a></li>
      <li><a><?php echo __('Setting'); ?> </a></li>
      <li><a href="<?php echo url('/hrm/employee-awards'); ?>"><?php echo __(' Employee award lists'); ?></a></li>
      <li class="active"><?php echo __('Add employee awards'); ?> </li>
    </ol>
  </section>

  <!-- Main content -->
  <section class="content">

    <!-- SELECT2 EXAMPLE -->
    <div class="box box-default">
      <div class="box-header with-border">
        <h3 class="box-title"><?php echo __('Add employee awards'); ?> </h3>

        <div class="box-tools pull-right">
          <button type="button" class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i></button>
          <button type="button" class="btn btn-box-tool" data-widget="remove"><i class="fa fa-remove"></i></button>
        </div>
      </div>
      <!-- /.box-header -->
      <form action="<?php echo url('/hrm/employee-awards/store'); ?>" method="post" name="employee_award_add_form">
        <?php echo csrf_field(); ?>

        <div class="box-body">
          <div class="row">
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
              <?php else: ?>
              <p class="text-yellow"><?php echo __('Enter Employee Awards List. All field are required.'); ?> </p>
              <?php endif; ?>
            </div>
            <!-- /.Notification Box -->

            <div class="col-md-6">

              <label for="employee_id"><?php echo __('Employee Name'); ?> <span class="text-danger">*</span></label>
              <div class="form-group<?php echo $errors->has('employee_id') ? ' has-error' : ''; ?> has-feedback">
                <select name="employee_id" id="employee_id" class="form-control">
                  <option value="" selected disabled><?php echo __('Select one'); ?></option>
                  <?php $__currentLoopData = $employees; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $employee): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                  <option value="<?php echo $employee['id']; ?>"><?php echo $employee['name']; ?></option>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                </select>
                <?php if($errors->has('employee_id')): ?>
                <span class="help-block">
                  <strong><?php echo $errors->first('employee_id'); ?></strong>
                </span>
                <?php endif; ?>
              </div>
              <!-- /.form-group -->

              <label for="award_category_id"><?php echo __('Award Category'); ?> <span class="text-danger">*</span></label>
              <div class="form-group<?php echo $errors->has('award_category_id') ? ' has-error' : ''; ?> has-feedback">
                <select name="award_category_id" id="award_category_id" class="form-control">
                  <option value="" selected disabled><?php echo __('Select one'); ?></option>
                  <?php $__currentLoopData = $award_categorys; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $award_category): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                  <option value="<?php echo $award_category['id']; ?>"><?php echo $award_category['award_title']; ?></option>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                </select>
                <?php if($errors->has('award_category_id')): ?>
                <span class="help-block">
                  <strong><?php echo $errors->first('award_category_id'); ?></strong>
                </span>
                <?php endif; ?>
              </div>
              <!-- /.form-group -->

              <label for="gift_item"><?php echo __('Gift Item'); ?> <span class="text-danger"></span></label>
              <div class="form-group<?php echo $errors->has('gift_item') ? ' has-error' : ''; ?> has-feedback">
                <input type="text" name="gift_item" id="gift_item" class="form-control" value="<?php echo old('gift_item'); ?>" placeholder="<?php echo __('Enter Gift Item..'); ?>">
                <?php if($errors->has('gift_item')): ?>
                <span class="help-block">
                  <strong><?php echo $errors->first('gift_item'); ?></strong>
                </span>
                <?php endif; ?>
              </div>
              <!-- /.form-group -->



              <div class="form-group">
                <label><?php echo __('Select Month:'); ?> <span class="text-danger">*</span></label>

                <div class="input-group date">
                  <div class="input-group-addon">
                    <i class="fa fa-calendar"></i>
                  </div>
                  <input type="text" name="select_month" class="form-control pull-right" id="datepicker">
                </div>
                <!-- /.input group -->
              </div>

              <label for="publication_status"><?php echo __('Publication Status'); ?> <span class="text-danger">*</span></label>
              <div class="form-group<?php echo $errors->has('publication_status') ? ' has-error' : ''; ?> has-feedback">
                <select name="publication_status" id="publication_status" class="form-control">
                  <option value="" selected disabled><?php echo __('Select one'); ?></option>
                  <option value="1"><?php echo __('Published'); ?></option>
                  <option value="0"><?php echo __('Unpublished'); ?></option>
                </select>
                <?php if($errors->has('publication_status')): ?>
                <span class="help-block">
                  <strong><?php echo $errors->first('publication_status'); ?></strong>
                </span>
                <?php endif; ?>
              </div>
              <!-- /.form-group -->

                <label for="description"><?php echo __('Award Description'); ?> <span class="text-danger">*</span></label>
                <div class="form-group<?php echo $errors->has('description') ? ' has-error' : ''; ?> has-feedback">
                  <textarea class="textarea text-description" name="description" id="description" placeholder="<?php echo __('Enter employee award description..'); ?>"><?php echo old('description'); ?></textarea>
                  <?php if($errors->has('description')): ?>
                  <span class="help-block">
                    <strong><?php echo $errors->first('description'); ?></strong>
                  </span>
                  <?php endif; ?>
                </div>
                <!-- /.form-group -->




            <!-- /.col -->
          </div>
          <!-- /.row -->
        </div>
        <!-- /.box-body -->
        <div class="box-footer">
          <a href="<?php echo url('/hrm/employee-awards'); ?>" class="btn btn-danger btn-flat"><i class="icon fa fa-close"></i><?php echo __('Cancel'); ?> </a>
          <button type="submit" class="btn btn-primary btn-flat"><i class="icon fa fa-plus"></i> <?php echo __('Add employee award'); ?></button>
        </div>
      </form>
    </div>
    <!-- /.box -->


  </section>
  <!-- /.content -->
</div>
<script type="text/javascript">
document.forms['employee_award_add_form'].elements['publication_status'].value = "<?php echo old('publication_status'); ?>";
</script>

<script type="text/javascript">
//Month picker
      $('#monthpicker').datepicker({
          autoclose: true,
          format: "yyyy-mm",
          viewMode: "months",
          minViewMode: "months"
      });
      $('#monthpicker').datepicker('setDate', 'now');

      //Month picker
      $('#monthpicker2').datepicker({
          autoclose: true,
          format: "yyyy-mm",
          viewMode: "months",
          minViewMode: "months"
      });
</script>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('administrator.master', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>