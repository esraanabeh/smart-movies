@extends('admin.layouts.table')

@section('content')
<?php
$lang = App::getLocale();
$text = "text-left";
$pull = "float-left";
$pulll = "float-right";
$datatable = "example";

if ($lang == "ar") {
    $text = "text-right";
    $pull = "float-right";
    $pulll = "float-left";
    $datatable = "example_ar";

}
?>
<!-- Content Header (Page header) -->
<section class="content-header">
    <h1>
        {{trans('admin.address_user')}}
    </h1>
    <ol class="breadcrumb">
        <li class="breadcrumb-item {{$pull}}"><a href="{{URL::to('admin')}}"> {{trans('admin.home')}}</a></li>
        <li class="breadcrumb-item active {{$pull}}">{{trans('admin.address_user')}}</li>
    </ol>
</section>

<!-- Main content -->
<section class="content">
    <div class="row">
        <div class="col-12">
            <div class="row">
                <div class="col-lg-12" id="active_response">

                </div>
            </div>

            @if (Session::has('message'))
            <div class="row">
                <div class="col-lg-12">
                    <div class="alert alert-success alert-dismissible">
                        {{ Session::get('message')}}
                        <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
                    </div>
                </div>
            </div>
            @endif

            @if (Session::has('error'))
            <div class="row">
                <div class="col-lg-12">
                    <div class="alert alert-danger alert-dismissible">
                        {{ Session::get('error')}}
                        <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
                    </div>
                </div>
            </div>
            @endif

            <div class="box">

                <div class="box-body" style="overflow-x:auto;">
                    <table id="{{$datatable}}" class="table table-bordered table-hover display nowrap margin-top-10 table-responsive">
                        <thead>
                            <tr>
                                <th class="{{$text}}">#</th>
                                <th class="{{$text}}">@lang('status')</th>
                                <th class="{{$text}}">{{trans('admin.address_name')}}</th>
                                <th class="{{$text}}">{{trans('admin.area_name')}}</th>
                                <th class="{{$text}}">{{trans('admin.Block')}}</th>
                                <th class="{{$text}}">{{trans('admin.street_no')}}</th>
                                <th class="{{$text}}">{{trans('admin.building_no')}}</th>
                                <th class="{{$text}}">{{trans('admin.floor_no')}}</th>
                                <th class="{{$text}}">{{trans('admin.avenue')}}</th>
                                <th class="{{$text}}">{{trans('admin.text_instructions')}}</th>
                                <th class="{{$text}}">{{trans('admin.date_enter_address')}}</th>

                            </tr>
                        </thead>
                        <tbody>
                          @if(count($addresses) > 0)
                            @foreach($addresses as $address)
                            <tr>
                                <td style="vertical-align: middle;"><span style="color:{{ $address['status'] ? 'green' : 'red' }}">{{ $address['status'] ? __('Active') : __('Deleted') }}<span></td>
                                <td style="vertical-align: middle;">{{$address['id']}}</td>
                                <td style="vertical-align: middle;">{{$address['name']}}</td>
                                <td style="vertical-align: middle;">{{$address['area']}}</td>
                                <td style="vertical-align: middle;">{{$address['block']}}</td>
                                <td style="vertical-align: middle;">{{$address['street_no']}}</td>
                                <td style="vertical-align: middle;">{{$address['building_no']}}</td>
                                <td style="vertical-align: middle;">{{$address['floor_no']}}</td>
                                <td style="vertical-align: middle;">{{$address['avenue']}}</td>
                                <td style="vertical-align: middle;width:50px;"><p style="padding-right:30px;">{{$address['text_instructions']}}</p></td>
                                <td style="vertical-align: middle;">{{$address['created_at']}}</td>
                            </tr>
                            @endforeach
                            @endif
                        </tbody>
                    </table>


                </div>
                <!-- /.box-body -->
            </div>
            <!-- /.box -->
        </div>
        <!-- /.col -->
    </div>
    <!-- /.row -->
</section>
@endsection
