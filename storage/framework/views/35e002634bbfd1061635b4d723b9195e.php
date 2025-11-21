<div id="mainMenu">
    <ul class="sidebar-menu" data-widget="tree">
        <li><a href="<?php echo e(url('/dashboard')); ?>"><i class="fa fa-dashboard"></i> <span><?php echo e(__('Dashboard')); ?></span></a></li>
        
        @permission('people')
        <li class="treeview">
            <a href="#">
                <i class="fa fa-users"></i> <span><?php echo e(__('Employee Management')); ?></span>
                <span class="pull-right-container">
                    <i class="fa fa-angle-left pull-right"></i>
                </span>
            </a>
            <ul class="treeview-menu">
                
               

                @permission('manage-employee')
                <li><a href="<?php echo e(url('/people/employees/create')); ?>"><i class="fa fa-circle-o"></i><?php echo e(__(' New Employee')); ?></a></li>
                <li><a href="<?php echo e(url('/people/employees')); ?>"><i class="fa fa-circle-o"></i> <?php echo e(__('Manage Employee')); ?></a></li>
                @endpermission
                @permission('manage-clients')
                 <li><a href="<?php echo e(url('people/clients/create')); ?>"><i class="fa fa-circle-o"></i><?php echo e(__(' New Customer')); ?></a></li>
                <li><a href="<?php echo e(url('/people/clients')); ?>"><i class="fa fa-circle-o"></i> <?php echo e(__('Manage Clients')); ?></a></li>
                @endpermission
                @permission('manage-references')
                
                <li><a href="<?php echo e(url('people/references/create')); ?>"><i class="fa fa-circle-o"></i><?php echo e(__(' New Reference')); ?></a></li>
                <li><a href="<?php echo e(url('/people/references')); ?>"><i class="fa fa-circle-o"></i><?php echo e(__(' Manage References')); ?></a></li>
                @endpermission
            </ul>
        </li>
        @endpermission
      
        @permission('payroll-management')
        <li class="treeview">
            <a href="#">
                <i class="fa fa-dollar"></i> <span><?php echo e(__('Payroll Management')); ?></span>
                <span class="pull-right-container">
                    <i class="fa fa-angle-left pull-right"></i>
                </span>
            </a>
            <ul class="treeview-menu">
                @permission('manage-salary')
                <li><a href="<?php echo e(url('/hrm/payroll')); ?>"><i class="fa fa-circle-o"></i> <?php echo e(__('Manage Salary')); ?></a></li>
                @endpermission
                @permission('salary-list')
                <li><a href="<?php echo e(url('/hrm/payroll/salary-list')); ?>"><i class="fa fa-circle-o"></i> <?php echo e(__('Salary List')); ?></a></li>
                @endpermission

                <li><a href="<?php echo e(url('/hrm/payroll/increment/search')); ?>"><i class="fa fa-circle-o"></i><?php echo e(__(' New Increment')); ?></a></li>
                <li><a href="<?php echo e(url('/hrm/payroll/increment/list')); ?>"><i class="fa fa-circle-o"></i> <?php echo e(__('Increment List')); ?></a></li>

                @permission('make-payment')
                <li><a href="<?php echo e(url('/hrm/salary-payments')); ?>"><i class="fa fa-circle-o"></i><?php echo e(__(' Make Payment')); ?></a></li>
                @endpermission
                @permission('generate-payslip')
                <li><a href="<?php echo e(url('/hrm/generate-payslips/')); ?>"><i class="fa fa-circle-o"></i> <?php echo e(__(' Generate Payslip')); ?></a></li>
                @endpermission

                <li><a href="<?php echo e(url('/hrm/salary/sheet/search')); ?>"><i class="fa fa-circle-o"></i> <?php echo e(__('Salary Sheet')); ?></a></li>

                @permission('manage-bonus')
                <li><a href="<?php echo e(url('/hrm/bonuses')); ?>"><i class="fa fa-circle-o"></i> <?php echo e(__('Manage Bonus')); ?></a></li>
                @endpermission
                @permission('manage-deduction')
                <li><a href="<?php echo e(url('/hrm/deductions')); ?>"><i class="fa fa-circle-o"></i> <?php echo e(__('Manage Deduction')); ?></a></li>
                @endpermission
                @permission('loan-management')
                <li><a href="<?php echo e(url('/hrm/loans')); ?>"><i class="fa fa-circle-o"></i><?php echo e(__(' Loan Management')); ?></a></li>
                @endpermission
                @permission('provident-fund')
                <li><a href="<?php echo e(url('/hrm/provident-funds')); ?>"><i class="fa fa-circle-o"></i><?php echo e(__(' Provident Fund')); ?></a></li>
                @endpermission
            </ul>
        </li>
        @endpermission




      
       <?php 
       $machines=\App\Machine::all();
       ?>

       <?php if(auth()->user()->access_label==1): ?>
        <?php $__currentLoopData = $machines; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $act): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
        <?php if($act->activation==1): ?>
        <li class="treeview">
            <a href="#">
                <i class="fa fa-calendar"></i> <span><?php echo e(__('Machine Attendance')); ?></span>
                <span class="pull-right-container">
                    <i class="fa fa-angle-left pull-right"></i>
                </span>
            </a>
            <ul class="treeview-menu">

        <li><a href="<?php echo e(url('/machine/manual/setting')); ?>"><i class="fa fa-circle-o"></i> <span><?php echo e(__('Manual Setting')); ?></span></a></li>

        <li><a href="<?php echo e(url('/my/attendance')); ?>"><i class="fa fa-circle-o"></i> <span><?php echo e(__('Import Attendance')); ?></span></a></li>

        <li><a href="<?php echo e(url('/machine/attendance/manage')); ?>"><i class="fa fa-circle-o"></i> <span><?php echo e(__('Attendance Manage')); ?></span></a></li>

        <li><a href="<?php echo e(url('/machine/attendance/report')); ?>"><i class="fa fa-circle-o"></i> <span><?php echo e(__('Attendance Report')); ?></span></a></li>
            </ul>
        </li>
        <?php else: ?>


        @permission('attendance-management')
        <li class="treeview">
            <a href="#">
                <i class="fa fa-calendar"></i> <span><?php echo e(__('Attendance Management')); ?></span>
                <span class="pull-right-container">
                    <i class="fa fa-angle-left pull-right"></i>
                </span>
            </a>
            <ul class="treeview-menu">
                @permission('manage-attendance')
                <li><a href="<?php echo e(url('/hrm/attendance/manage')); ?>"><i class="fa fa-circle-o"></i><?php echo e(__('Manage Attendance')); ?> </a></li>


                @endpermission
                @permission('attendance-report')
                <li><a href="<?php echo e(url('/hrm/attendance/details/report/go')); ?>"><i class="fa fa-circle-o"></i><?php echo e(__(' Attendance Statement')); ?></a></li>
                <li><a href="<?php echo e(url('/hrm/attendance/report')); ?>"><i class="fa fa-circle-o"></i><?php echo e(__(' Attendance Report')); ?></a></li>
                @endpermission
            </ul>
        </li>
        @endpermission

        <?php endif; ?>
        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

        <?php else: ?>

        <?php endif; ?>


   

       
       @permission('manage-expense')
        <li class="treeview">
            <a href="#">
                <i class="fa fa-minus"></i> <span><?php echo e(__('Expense Management')); ?></span>
                <span class="pull-right-container">
                    <i class="fa fa-angle-left pull-right"></i>
                </span>
            </a>
            <ul class="treeview-menu">
                @permission('manage-expense')
                <li><a href="<?php echo e(url('/hrm/expence/category/add')); ?>"><i class="fa fa-circle-o"></i> <span><?php echo e(__('New Expense Category')); ?></span></a></li>
                <li><a href="<?php echo e(url('/hrm/expence/category/list')); ?>"><i class="fa fa-circle-o"></i> <span><?php echo e(__('Expense Category List')); ?></span></a></li>
                <li><a href="<?php echo e(url('/hrm/expence/add-expence')); ?>"><i class="fa fa-circle-o"></i> <span><?php echo e(__('Create Expense')); ?></span></a></li>
                <li><a href="<?php echo e(url('/hrm/expence/manage-expence')); ?>"><i class="fa fa-circle-o"></i> <span><?php echo e(__('Expense List')); ?></span></a></li>
                @endpermission
            </ul>
        </li>
         @endpermission
        @permission('leave-application')
        <li class="treeview">
            <a href="#">
                <i class="glyphicon glyphicon-send"></i> <span><?php echo e(__('Leave Management')); ?></span>
                <span class="pull-right-container">
                    <i class="fa fa-angle-left pull-right"></i>
                </span>
            </a>
            <ul class="treeview-menu">
             
                @permission('manage-leave-application')
                <li><a href="<?php echo e(url('/setting/leave_categories/create')); ?>"><i class="fa fa-circle-o"></i><?php echo e(__('New Leave Category')); ?></a></li>
                <li><a href="<?php echo e(url('/setting/leave_categories')); ?>"><i class="fa fa-circle-o"></i><?php echo e(__('Leave Category List')); ?></a></li>
                <li><a href="<?php echo e(url('/hrm/application_lists')); ?>"><i class="fa fa-circle-o"></i> <span><?php echo e(__('Leave Application List')); ?></span></a></li>
                @endpermission
                @permission('my-leave-application')
                <li><a href="<?php echo e(url('/hrm/leave_application/create')); ?>"><i class="fa fa-circle-o"></i> <span><?php echo e(__('New Leave Application')); ?></span></a></li>
                <li><a href="<?php echo e(url('/hrm/leave_application')); ?>"><i class="fa fa-circle-o"></i> <span><?php echo e(__('Leave Application Manage')); ?></span></a></li>
                @endpermission
                @permission('leave-reports')
                <li><a href="<?php echo e(url('/hrm/leave-reports')); ?>"><i class="fa fa-circle-o"></i> <span><?php echo e(__('Leave Reports')); ?></span></a></li>
                @endpermission
            </ul>
        </li>
        @endpermission



         @permission('manage-award')
        <li class="treeview">
            <a href="#">
                <i class="fa fa-file-text"></i> <span><?php echo e(__('NOC/Ex. Certificate')); ?></span>
                <span class="pull-right-container">
                    <i class="fa fa-angle-left pull-right"></i>
                </span>
            </a>
            <ul class="treeview-menu">
                @permission('manage-award')
                <li><a href="<?php echo e(url('/hrm/noc/add')); ?>"><i class="fa fa-circle-o"></i> <span><?php echo e(__('NOC/Certificate Add')); ?></span></a></li>
                <li><a href="<?php echo e(url('/hrm/noc/list')); ?>"><i class="fa fa-circle-o"></i> <span><?php echo e(__('NOC List')); ?></span></a></li>
                <li><a href="<?php echo e(url('/hrm/certificate/list')); ?>"><i class="fa fa-circle-o"></i> <span><?php echo e(__('Experience Certificate')); ?></span></a></li>
                @endpermission
            </ul>
        </li>
         @endpermission






         @permission('manage-award')
         <li class="treeview">
            <a href="#">
                <i class="fa fa-trophy"></i> <span><?php echo e(__('Award Management')); ?></span>
                <span class="pull-right-container">
                    <i class="fa fa-angle-left pull-right"></i>
                </span>
            </a>
            <ul class="treeview-menu">
                @permission('manage-award')
                <li><a href="<?php echo e(url('/hrm/employee-awards/create')); ?>"><i class="fa fa-circle-o"></i> <span><?php echo e(__('New Award')); ?></span></a></li>
                <li><a href="<?php echo e(url('/hrm/employee-awards')); ?>"><i class="fa fa-circle-o"></i> <span><?php echo e(__('Manage Award')); ?></span></a></li>
                @endpermission
            </ul>
        </li>
        @endpermission
        @permission('notice')
        <li class="treeview">
            <a href="#">
                <i class="glyphicon glyphicon-bell"></i> <span><?php echo e(__('Notice Board')); ?></span>
                <span class="pull-right-container">
                    <i class="fa fa-angle-left pull-right"></i>
                </span>
            </a>
            <ul class="treeview-menu">
               
                @permission('manage-notice')
                 <li><a href="<?php echo e(url('hrm/notice/create')); ?>"><i class="fa fa-circle-o"></i><?php echo e(__('New Notice')); ?></a></li>
                <li><a href="<?php echo e(url('/hrm/notice')); ?>"><i class="fa fa-circle-o"></i><?php echo e(__('Manage Notice')); ?></a></li>
                @endpermission
                @permission('notice-board')
                <li><a href="<?php echo e(url('/hrm/notice/show')); ?>"><i class="fa fa-circle-o"></i> <span><?php echo e(__('Notice list')); ?></span></a></li>
                @endpermission
            </ul>
        </li>
        @endpermission
       @permission('file-upload')
        <li class="treeview">
            <a href="#">
                <i class="fa fa-cloud-upload"></i> <span><?php echo e(__('File Management')); ?></span>
                <span class="pull-right-container">
                    <i class="fa fa-angle-left pull-right"></i>
                </span>
            </a>
            <ul class="treeview-menu">
                @permission('file-upload')
                <li><a href="<?php echo e(url('/folders/create')); ?>"><i class="fa fa-circle-o"></i> <span><?php echo e(__('New Upload')); ?></span></a></li>
                <li><a href="<?php echo e(url('/folders')); ?>"><i class="fa fa-circle-o"></i> <span><?php echo e(__('File List')); ?></span></a></li>
                @endpermission
           
            </ul>
         </li>
         @endpermission
       @permission('file-upload')
        <li><a href="<?php echo e(url('/hrm/salary/statement/search')); ?>"><i class="fa fa-certificate"></i> <span><?php echo e(__('Salary Statement')); ?></span></a></li>
        @endpermission

        @permission('hrm-setting')
        <li class="treeview">
            <a href="#">
                <i class="fa fa-cog"></i> <span><?php echo e(__('Configuration')); ?></span>
                <span class="pull-right-container">
                    <i class="fa fa-angle-left pull-right"></i>
                </span>
            </a>
            <ul class="treeview-menu">
                <li><a href="<?php echo e(url('machine/activation')); ?>"><i class="fa fa-circle-o"></i><?php echo e(__('Attendance Setting')); ?> </a></li>

                <li><a href="<?php echo e(url('/setting/client-types')); ?>"><i class="fa fa-circle-o"></i><?php echo e(__('Manage Client Types')); ?> </a></li>
                <li><a href="<?php echo e(url('/setting/departments')); ?>"><i class="fa fa-circle-o"></i><?php echo e(__('Manage Departments')); ?> </a></li>
                <li><a href="<?php echo e(url('/setting/designations')); ?>"><i class="fa fa-circle-o"></i><?php echo e(__('Manage Designations')); ?> </a></li>
                <li><a href="<?php echo e(url('/setting/leave_categories')); ?>"><i class="fa fa-circle-o"></i><?php echo e(__('Manage Leave Categories')); ?> </a></li>
                <li><a href="<?php echo e(url('/setting/working-days')); ?>"><i class="fa fa-circle-o"></i> <?php echo e(__('Set Working Day')); ?></a></li>
                <li><a href="<?php echo e(url('/setting/holidays')); ?>"><i class="fa fa-circle-o"></i><?php echo e(__('Holiday List')); ?> </a></li>
                <li><a href="<?php echo e(url('/setting/personal-events')); ?>"><i class="fa fa-circle-o"></i><?php echo e(__('Personal Event')); ?> </a></li>
                <li><a href="<?php echo e(url('/setting/award_categories')); ?>"><i class="fa fa-circle-o"></i> <?php echo e(__('Manage Award Categories')); ?></a></li>
                @permission('role')
                <li><a href="<?php echo e(route('setting.role.index')); ?>"><i class="fa fa-circle-o"></i><?php echo e(__('Role')); ?></a></li>
                @endpermission
            </ul>
        </li>
        @endpermission

       
        
        <li><a href="<?php echo e(url('/profile/user-profile')); ?>"><i class="fa fa-user"></i> <span><?php echo e(__('Profile')); ?></span></a></li>
        <li><a href="<?php echo e(url('/profile/change-password')); ?>"><i class="fa fa-key"></i> <span><?php echo e(__('Change Password')); ?></span></a></li>
        <li>
            <a href="<?php echo e(route('logout')); ?>" onclick="event.preventDefault(); document.getElementById('logout-form').submit();"><i class="fa fa-lock"></i> <span><?php echo e(__('Logout')); ?></span></a>
            <form id="logout-form" action="<?php echo e(route('logout')); ?>" method="POST">
                <?php echo e(csrf_field()); ?>

            </form>
        </li>
    </ul>
</div><?php /**PATH D:\laragon\www\upgradelaravel\hrm-payroll-v3-master\resources\views/administrator/layouts/menu.blade.php ENDPATH**/ ?>