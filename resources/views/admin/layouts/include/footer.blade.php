<footer class="main-footer" dir="{{$dir}}">
    <div class="pull-left d-none d-sm-inline-block">
        Smart Movies,&nbsp;
    </div>
     {{trans('admin.rights')}} &copy; {{date('Y')}}. Powered By Line.
</footer>

<aside class="control-sidebar control-sidebar-dark">
    <!-- Create the tabs -->
    <ul class="nav nav-tabs nav-justified control-sidebar-tabs">
    </ul>
    <!-- Tab panes -->
    <div class="tab-content" dir="{{$dir}}">
        <div class="tab-pane" id="control-sidebar-home-tab">
        </div>        
    </div>
</aside>
<!-- /.control-sidebar -->

<!-- Add the sidebar's background. This div must be placed immediately after the control sidebar -->
<div class="control-sidebar-bg"></div>

<input type="hidden" id="text_dir" value="{{$text}}">