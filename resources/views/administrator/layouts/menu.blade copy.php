<div id="mainMenu">
    <ul class="sidebar-menu" data-widget="tree">
        <li><a href="{{ url('/dashboard')}}"><i class="fa fa-dashboard"></i> <span>{{ __('Dashboard') }}</span></a></li>

        <li class="treeview">
            <a href="#">
                <i class="fa fa-users"></i> <span>{{ __('Employee Management') }}</span>
                <span class="pull-right-container"><i class="fa fa-angle-left pull-right"></i></span>
            </a>
            <ul class="treeview-menu">
                <li><a href="{{ url('/people/employees/create') }}"><i class="fa fa-circle-o"></i>{{ __(' New Employee') }}</a></li>
                <li><a href="{{ url('/people/employees') }}"><i class="fa fa-circle-o"></i> {{ __('Manage Employee') }}</a></li>
                <li><a href="{{ url('people/clients/create') }}"><i class="fa fa-circle-o"></i>{{ __(' New Customer') }}</a></li>
                <li><a href="{{ url('/people/clients') }}"><i class="fa fa-circle-o"></i> {{ __('Manage Clients') }}</a></li>
                <li><a href="{{ url('people/references/create') }}"><i class="fa fa-circle-o"></i>{{ __(' New Reference') }}</a></li>
                <li><a href="{{ url('/people/references') }}"><i class="fa fa-circle-o"></i> {{ __(' Manage References') }}</a></li>
            </ul>
        </li>

        <li class="treeview">
            <a href="#">
                <i class="fa fa-dollar"></i> <span>{{ __('Payroll Management') }}</span>
                <span class="pull-right-container"><i class="fa fa-angle-left pull-right"></i></span>
            </a>
            <ul class="treeview-menu">
                <li><a href="{{ url('/hrm/payroll') }}"><i class="fa fa-circle-o"></i> {{ __('Manage Salary') }}</a></li>
                <li><a href="{{ url('/hrm/payroll/salary-list') }}"><i class="fa fa-circle-o"></i> {{ __('Salary List') }}</a></li>
                <li><a href="{{ url('/hrm/payroll/increment/search') }}"><i class="fa fa-circle-o"></i>{{ __(' New Increment') }}</a></li>
                <li><a href="{{ url('/hrm/payroll/increment/list') }}"><i class="fa fa-circle-o"></i> {{ __('Increment List') }}</a></li>
                <li><a href="{{ url('/hrm/salary-payments') }}"><i class="fa fa-circle-o"></i>{{ __(' Make Payment') }}</a></li>
                <li><a href="{{ url('/hrm/generate-payslips/') }}"><i class="fa fa-circle-o"></i> {{ __(' Generate Payslip') }}</a></li>
                <li><a href="{{ url('/hrm/salary/sheet/search') }}"><i class="fa fa-circle-o"></i> {{ __('Salary Sheet') }}</a></li>
                <li><a href="{{ url('/hrm/bonuses') }}"><i class="fa fa-circle-o"></i> {{ __('Manage Bonus') }}</a></li>
                <li><a href="{{ url('/hrm/deductions') }}"><i class="fa fa-circle-o"></i> {{ __('Manage Deduction') }}</a></li>
                <li><a href="{{ url('/hrm/loans') }}"><i class="fa fa-circle-o"></i>{{ __(' Loan Management') }}</a></li>
                <li><a href="{{ url('/hrm/provident-funds') }}"><i class="fa fa-circle-o"></i>{{ __(' Provident Fund') }}</a></li>
            </ul>
        </li>

        <?php $machines = \App\Machine::all(); ?>

        @if(auth()->user()->access_label == 1)
            @foreach($machines as $act)
                @if($act->activation == 1)
                    <li class="treeview">
                        <a href="#">
                            <i class="fa fa-calendar"></i> <span>{{ __('Machine Attendance') }}</span>
                            <span class="pull-right-container"><i class="fa fa-angle-left pull-right"></i></span>
                        </a>
                        <ul class="treeview-menu">
                            <li><a href="{{ url('/machine/manual/setting') }}"><i class="fa fa-circle-o"></i>{{ __('Manual Setting') }}</a></li>
                            <li><a href="{{ url('/my/attendance') }}"><i class="fa fa-circle-o"></i>{{ __('Import Attendance') }}</a></li>
                            <li><a href="{{ url('/machine/attendance/manage') }}"><i class="fa fa-circle-o"></i>{{ __('Attendance Manage') }}</a></li>
                            <li><a href="{{ url('/machine/attendance/report') }}"><i class="fa fa-circle-o"></i>{{ __('Attendance Report') }}</a></li>
                        </ul>
                    </li>
                @else
                    <li class="treeview">
                        <a href="#">
                            <i class="fa fa-calendar"></i> <span>{{ __('Attendance Management') }}</span>
                            <span class="pull-right-container"><i class="fa fa-angle-left pull-right"></i></span>
                        </a>
                        <ul class="treeview-menu">
                            <li><a href="{{ url('/hrm/attendance/manage') }}"><i class="fa fa-circle-o"></i>{{ __('Manage Attendance') }}</a></li>
                            <li><a href="{{ url('/hrm/attendance/details/report/go') }}"><i class="fa fa-circle-o"></i>{{ __(' Attendance Statement') }}</a></li>
                            <li><a href="{{ url('/hrm/attendance/report') }}"><i class="fa fa-circle-o"></i>{{ __(' Attendance Report') }}</a></li>
                        </ul>
                    </li>
                @endif
            @endforeach
        @endif

        <li class="treeview">
            <a href="#">
                <i class="fa fa-minus"></i> <span>{{ __('Expense Management') }}</span>
                <span class="pull-right-container"><i class="fa fa-angle-left pull-right"></i></span>
            </a>
            <ul class="treeview-menu">
                <li><a href="{{ url('/hrm/expence/category/add') }}"><i class="fa fa-circle-o"></i> {{ __('New Expense Category') }}</a></li>
                <li><a href="{{ url('/hrm/expence/category/list') }}"><i class="fa fa-circle-o"></i> {{ __('Expense Category List') }}</a></li>
                <li><a href="{{ url('/hrm/expence/add-expence') }}"><i class="fa fa-circle-o"></i> {{ __('Create Expense') }}</a></li>
                <li><a href="{{ url('/hrm/expence/manage-expence') }}"><i class="fa fa-circle-o"></i> {{ __('Expense List') }}</a></li>
            </ul>
        </li>

        <li class="treeview">
            <a href="#">
                <i class="glyphicon glyphicon-send"></i> <span>{{ __('Leave Management') }}</span>
                <span class="pull-right-container"><i class="fa fa-angle-left pull-right"></i></span>
            </a>
            <ul class="treeview-menu">
                <li><a href="{{ url('/setting/leave_categories/create') }}"><i class="fa fa-circle-o"></i>{{ __('New Leave Category') }}</a></li>
                <li><a href="{{ url('/setting/leave_categories') }}"><i class="fa fa-circle-o"></i>{{ __('Leave Category List') }}</a></li>
                <li><a href="{{ url('/hrm/application_lists') }}"><i class="fa fa-circle-o"></i>{{ __('Leave Application List') }}</a></li>
                <li><a href="{{ url('/hrm/leave_application/create') }}"><i class="fa fa-circle-o"></i>{{ __('New Leave Application') }}</a></li>
                <li><a href="{{ url('/hrm/leave_application') }}"><i class="fa fa-circle-o"></i>{{ __('Leave Application Manage') }}</a></li>
                <li><a href="{{ url('/hrm/leave-reports') }}"><i class="fa fa-circle-o"></i>{{ __('Leave Reports') }}</a></li>
            </ul>
        </li>

        <li class="treeview">
            <a href="#">
                <i class="fa fa-file-text"></i> <span>{{ __('NOC/Ex. Certificate') }}</span>
                <span class="pull-right-container"><i class="fa fa-angle-left pull-right"></i></span>
            </a>
            <ul class="treeview-menu">
                <li><a href="{{ url('/hrm/noc/add') }}"><i class="fa fa-circle-o"></i>{{ __('NOC/Certificate Add') }}</a></li>
                <li><a href="{{ url('/hrm/noc/list') }}"><i class="fa fa-circle-o"></i>{{ __('NOC List') }}</a></li>
                <li><a href="{{ url('/hrm/certificate/list') }}"><i class="fa fa-circle-o"></i>{{ __('Experience Certificate') }}</a></li>
            </ul>
        </li>

        <li class="treeview">
            <a href="#">
                <i class="fa fa-trophy"></i> <span>{{ __('Award Management') }}</span>
                <span class="pull-right-container"><i class="fa fa-angle-left pull-right"></i></span>
            </a>
            <ul class="treeview-menu">
                <li><a href="{{ url('/hrm/employee-awards/create') }}"><i class="fa fa-circle-o"></i>{{ __('New Award') }}</a></li>
                <li><a href="{{ url('/hrm/employee-awards') }}"><i class="fa fa-circle-o"></i>{{ __('Manage Award') }}</a></li>
            </ul>
        </li>

        <li class="treeview">
            <a href="#">
                <i class="glyphicon glyphicon-bell"></i> <span>{{ __('Notice Board') }}</span>
                <span class="pull-right-container"><i class="fa fa-angle-left pull-right"></i></span>
            </a>
            <ul class="treeview-menu">
                <li><a href="{{ url('hrm/notice/create') }}"><i class="fa fa-circle-o"></i>{{ __('New Notice') }}</a></li>
                <li><a href="{{ url('/hrm/notice') }}"><i class="fa fa-circle-o"></i>{{ __('Manage Notice') }}</a></li>
                <li><a href="{{ url('/hrm/notice/show') }}"><i class="fa fa-circle-o"></i>{{ __('Notice list') }}</a></li>
            </ul>
        </li>

        <li class="treeview">
            <a href="#">
                <i class="fa fa-cloud-upload"></i> <span>{{ __('File Management') }}</span>
                <span class="pull-right-container"><i class="fa fa-angle-left pull-right"></i></span>
            </a>
            <ul class="treeview-menu">
                <li><a href="{{ url('/folders/create')}}"><i class="fa fa-circle-o"></i>{{ __('New Upload') }}</a></li>
                <li><a href="{{ url('/folders')}}"><i class="fa fa-circle-o"></i>{{ __('File List') }}</a></li>
            </ul>
        </li>

        <li><a href="{{ url('/hrm/salary/statement/search') }}"><i class="fa fa-certificate"></i> <span>{{ __('Salary Statement') }}</span></a></li>

        <li class="treeview">
            <a href="#">
                <i class="fa fa-cog"></i> <span>{{ __('Configuration') }}</span>
                <span class="pull-right-container"><i class="fa fa-angle-left pull-right"></i></span>
            </a>
            <ul class="treeview-menu">
                <li><a href="{{ url('machine/activation') }}"><i class="fa fa-circle-o"></i>{{ __('Attendance Setting') }}</a></li>
                <li><a href="{{ url('/setting/client-types') }}"><i class="fa fa-circle-o"></i>{{ __('Manage Client Types') }}</a></li>
                <li><a href="{{ url('/setting/departments') }}"><i class="fa fa-circle-o"></i>{{ __('Manage Departments') }}</a></li>
                <li><a href="{{ url('/setting/designations') }}"><i class="fa fa-circle-o"></i>{{ __('Manage Designations') }}</a></li>
                <li><a href="{{ url('/setting/leave_categories') }}"><i class="fa fa-circle-o"></i>{{ __('Manage Leave Categories') }}</a></li>
                <li><a href="{{ url('/setting/working-days') }}"><i class="fa fa-circle-o"></i>{{ __('Set Working Day') }}</a></li>
                <li><a href="{{ url('/setting/holidays') }}"><i class="fa fa-circle-o"></i>{{ __('Holiday List') }}</a></li>
                <li><a href="{{ url('/setting/personal-events') }}"><i class="fa fa-circle-o"></i>{{ __('Personal Event') }}</a></li>
                <li><a href="{{ url('/setting/award_categories') }}"><i class="fa fa-circle-o"></i>{{ __('Manage Award Categories') }}</a></li>
                <li><a href="{{ route('setting.role.index') }}"><i class="fa fa-circle-o"></i>{{ __('Role') }}</a></li>
            </ul>
        </li>

        <li><a href="{{ url('/profile/user-profile') }}"><i class="fa fa-user"></i> <span>{{ __('Profile') }}</span></a></li>
        <li><a href="{{ url('/profile/change-password') }}"><i class="fa fa-key"></i> <span>{{ __('Change Password') }}</span></a></li>
        <li>
            <a href="{{ route('logout') }}" onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
                <i class="fa fa-lock"></i> <span>{{ __('Logout') }}</span>
            </a>
            <form id="logout-form" action="{{ route('logout') }}" method="POST">{{ csrf_field() }}</form>
        </li>
    </ul>
</div>
