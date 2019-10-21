@extends('layouts.adminLayout.admin_design')
@section('contents')

<div id="content">

    <div class="container-fluid">
        <hr>
        <div class="row-fluid">
            <div class="span8">
                <div class="widget-box">
                    <div class="widget-title"> <span class="icon"> <i class="icon-align-justify"></i> </span>
                        <h5>Create Editor</h5>
                    </div>
                    <div class="widget-content nopadding">
                        <form method="post" action="{{url('/save-editor')}}" class="form-horizontal">
                            @csrf
                            <div class="control-group">
                                <label class="control-label">Name :</label>
                                <div class="controls">
                                    <input type="text" name="name" id="name" class="span11" />
                                </div>
                            </div>
                            <div class="control-group">
                                <label class="control-label">Email :</label>
                                <div class="controls">
                                    <input type="email" name="email" id="email" class="span11"/>
                                </div>
                            </div>
                            <div class="control-group">
                                <label class="control-label">Password :</label>
                                <div class="controls">
                                    <input type="password" name="password" id="password" class="span11"/>
                                </div>
                            </div>
                            <div class="control-group">
                                <div class="controls">
                                    <input type="hidden" name="user_type" id="user_type" value="editor" class="span11"/>
                                </div>
                            </div>

                            <div class="form-actions">
                                <button type="submit" class="btn btn-success">Save</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>

</div>

@endsection
