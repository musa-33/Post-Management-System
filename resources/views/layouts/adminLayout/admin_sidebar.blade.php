<div id="sidebar"><a href="#" class="visible-phone"><i class="icon icon-home"></i> Dashboard</a>
    <ul>
        {{--<li class="active"><a href="index.html"><i class="icon icon-home"></i> <span>Dashboard</span></a> </li>
        <li class="submenu"> <a href="#"><i class="icon icon-th-list"></i> <span>Forms</span> <span class="label label-important">3</span></a>
            <ul>
                <li><a href="form-common.html">Basic Form</a></li>
                <li><a href="form-validation.html">Form with Validation</a></li>
                <li><a href="form-wizard.html">Form with Wizard</a></li>
            </ul>
        </li>--}}
        @can('isAdmin')
        <li class="active"><a href="#"><i class="icon icon-file"></i> <span>Posts</span></a></li>
        <li class="submenu"> <a href="#"><i class="icon icon-th-list"></i> <span>Manage Editor</span></a>
            <ul>
                <li><a href="{{url('/admin/add-editor')}}">Add Editor</a></li>
                <li><a href="#">View Editor</a></li>
            </ul>
        </li>
        @endcan

        @can('isEditor')
        <li><a href="#"><i class="icon icon-file"></i> <span>Manage Posts</span></a></li>
        @endcan
        <li><a href="{{url('/logout')}}"><i class="icon glyphicon-log-out"></i> <span>Logout</span></a></li>
    </ul>
</div>
