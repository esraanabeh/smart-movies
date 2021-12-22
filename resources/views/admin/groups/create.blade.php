@extends('admin.layouts.form')

@section('content')
<?php
$lang = App::getLocale();
$text = "text-left";
$pull = "pull-left";
if ($lang == "ar") {
    $text = "text-right";
    $pull = "pull-right";
}
?>
<!-- Content Header (Page header) -->
<section class="content-header">
    <h1>
        {{trans('admin.groups')}}
    </h1>
    <ol class="breadcrumb">
        <li class="breadcrumb-item {{$pull}}"><a href="{{URL::to('admin')}}"> {{trans('admin.home')}}</a></li>
        <li class="breadcrumb-item {{$pull}}"><a href="{{URL::to('admin/groups')}}"> {{trans('admin.groups')}}</a></li>
        <li class="breadcrumb-item active {{$pull}}">{{trans('admin.group_add')}}</li>
    </ol>
</section>

<section class="content">

    <div class="box box-default">
        <div class="box-header with-border">
            <h3 class="box-title">{{trans('admin.group_add')}}</h3>

            <div class="box-tools pull-right">
                <button type="button" class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i></button>
            </div>
        </div>

        <form action="{{URL::to('admin/groups')}}" method="post" >
            {{ csrf_field() }}

            <div class="box-body">
                <div class="row">
                    <div class="col-12">
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

                        <div class="form-group row">
                            <label for="ar_name" class="col-sm-3 col-form-label">{{trans('admin.group_name_ar')}}</label>
                            <div class="col-sm-9">
                                {{ Form::text('ar_name', null, ['class'=>'form-control','id'=>'ar_name']) }}
                                @if($errors->has('ar_name'))
                                <div class="alert alert-danger">{{$errors->first('ar_name')}}</div>
                                @endif
                            </div>
                        </div>
                        <input type="text" name="type" value="admin" class="form-control" hidden>
                        <div class="form-group row">
                            <label for="en_name" class="col-sm-3 col-form-label">{{trans('admin.group_name_en')}}</label>
                            <div class="col-sm-9">
                                {{ Form::text('en_name', null, ['class'=>'form-control','id'=>'en_name']) }}
                                @if($errors->has('en_name'))
                                <div class="alert alert-danger">{{$errors->first('en_name')}}</div>
                                @endif
                            </div>
                        </div>

                        <div class="form-group row">
                            <table class="table table-bordered table-hover text-center">
                                <thead>
                                    <tr class="gray_check">
                                        <th class="text-center">{{trans('admin.permissions')}} </th>
                                        <th class="text-center">{{trans('admin.show_all')}}</th>
                                        <th class="text-center">{{trans('admin.add')}} </th>
                                        <th class="text-center">{{trans('admin.edit')}} </th>
                                        <th class="text-center">{{trans('admin.show')}} </th>
                                        <th class="text-center">{{trans('admin.delete')}} </th>
                                    </tr>
                                </thead>

                                <tr class="pagetr">
                                    <td class="gray_check" rel="check_site" style="cursor: pointer;">
                                        <input type="checkbox" class="hidden" id="check_site_value">
                                        {{trans('admin.site')}}
                                    </td>
                                    <td></td>
                                    <td></td>
                                    <td>
                                        <label class="m-checkbox m-checkbox--check-bold m-checkbox--state-primary">
                                            {{ Form::checkbox('permissions[]', 'site_edit',false,['id'=>'site_edit','class'=>'check_site']) }}
                                            <label for="site_edit" style="height: 10px;"></label>
                                        </label>
                                    </td>
                                    <td></td>
                                    <td></td>
                                </tr>

                                <tr class="pagetr">
                                    <td class="gray_check" rel="check_social_media" style="cursor: pointer;">
                                        <input type="checkbox" class="hidden" id="check_social_media_value">
                                        {{trans('admin.social_media')}}
                                    </td>
                                    <td>
                                        <label class="m-checkbox m-checkbox--check-bold m-checkbox--state-primary">
                                            {{ Form::checkbox('permissions[]', 'social_media_all',false,['id'=>'social_media_all','class'=>'check_social_media']) }}
                                            <label for="social_media_all" style="height: 10px;"></label>
                                        </label>
                                    </td>
                                    <td><label class="m-checkbox m-checkbox--check-bold m-checkbox--state-primary">
                                        {{ Form::checkbox('permissions[]', 'social_media_add', false, ['id' => 'social_media_add', 'class' => 'check_social_media']) }}
                                        <label for="social_media_add" style="height: 10px;"></label>
                                    </label>
                                </td>
                                    <td>
                                        <label class="m-checkbox m-checkbox--check-bold m-checkbox--state-primary">
                                            {{ Form::checkbox('permissions[]', 'social_media_edit',false,['id'=>'social_media_edit','class'=>'check_social_media']) }}
                                            <label for="social_media_edit" style="height: 10px;"></label>
                                        </label>
                                    </td>
                                    <td></td>
                                    <td><label class="m-checkbox m-checkbox--check-bold m-checkbox--state-primary">
                                        {{ Form::checkbox('permissions[]', 'social_media_delete', false, ['id' => 'social_media_delete', 'class' => 'check_social_media']) }}
                                        <label for="social_media_delete" style="height: 10px;"></label>
                                    </label></td>
                                </tr>
                               

                                
                                <tr class="pagetr">
                                    <td class="gray_check" rel="check_gallery" style="cursor: pointer;">
                                        <input type="checkbox" class="hidden" id="check_gallery_value">
                                        {{trans('admin.gallery')}}
                                    </td>
                                    <td>
                                        <label class="m-checkbox m-checkbox--check-bold m-checkbox--state-primary">
                                            {{ Form::checkbox('permissions[]', 'gallery_all',false,['id'=>'gallery_all','class'=>'check_gallery']) }}
                                            <label for="gallery_all" style="height: 10px;"></label>
                                        </label> 
                                    </td>
                                    <td>
                                        <label class="m-checkbox m-checkbox--check-bold m-checkbox--state-primary">
                                            {{ Form::checkbox('permissions[]', 'gallery_add',false,['id'=>'gallery_add','class'=>'check_gallery']) }}
                                            <label for="gallery_add" style="height: 10px;"></label>
                                        </label> 
                                    </td>
                                    <td>
                                        <label class="m-checkbox m-checkbox--check-bold m-checkbox--state-primary">
                                            {{ Form::checkbox('permissions[]', 'gallery_edit',false,['id'=>'gallery_edit','class'=>'check_gallery']) }}
                                            <label for="gallery_edit" style="height: 10px;"></label>
                                        </label> 
                                    </td>
                                    <td></td>
                                    <td>
                                        <label class="m-checkbox m-checkbox--check-bold m-checkbox--state-primary">
                                            {{ Form::checkbox('permissions[]', 'gallery_delete',false,['id'=>'gallery_delete','class'=>'check_gallery']) }}
                                            <label for="gallery_delete" style="height: 10px;"></label>
                                        </label> 
                                    </tr>

                                    <tr class="pagetr">
                                        <td class="gray_check" rel="check_photo" style="cursor: pointer;">
                                            <input type="checkbox" class="hidden" id="check_photo_value">
                                            {{trans('admin.photo')}}
                                        </td>
                                        <td>
                                            <label class="m-checkbox m-checkbox--check-bold m-checkbox--state-primary">
                                                {{ Form::checkbox('permissions[]', 'photo_all',false,['id'=>'photo_all','class'=>'check_photo']) }}
                                                <label for="photo_all" style="height: 10px;"></label>
                                            </label> 
                                        </td>
                                        <td>
                                            <label class="m-checkbox m-checkbox--check-bold m-checkbox--state-primary">
                                                {{ Form::checkbox('permissions[]', 'photo_add',false,['id'=>'photo_add','class'=>'check_photo']) }}
                                                <label for="photo_add" style="height: 10px;"></label>
                                            </label> 
                                        </td>
                                        <td>
                                            <label class="m-checkbox m-checkbox--check-bold m-checkbox--state-primary">
                                                {{ Form::checkbox('permissions[]', 'photo_edit',false,['id'=>'photo_edit','class'=>'check_photo']) }}
                                                <label for="photo_edit" style="height: 10px;"></label>
                                            </label> 
                                        </td>
                                        <td></td>
                                        <td>
                                            <label class="m-checkbox m-checkbox--check-bold m-checkbox--state-primary">
                                                {{ Form::checkbox('permissions[]', 'photo_delete',false,['id'=>'photo_delete','class'=>'check_photo']) }}
                                                <label for="photo_delete" style="height: 10px;"></label>
                                            </label> 
                                        </tr>

                                       
                                <tr class="pagetr">
                                    <td class="gray_check" rel="check_teams" style="cursor: pointer;">
                                        <input type="checkbox" class="hidden" id="check_teams_value">
                                        {{trans('admin.teams')}}
                                    </td>
                                    <td>
                                        <label class="m-checkbox m-checkbox--check-bold m-checkbox--state-primary">
                                            {{ Form::checkbox('permissions[]', 'teams_all',false,['id'=>'teams_all','class'=>'check_teams']) }}
                                            <label for="teams_all" style="height: 10px;"></label>
                                        </label> 
                                    </td>
                                    <td>
                                        <label class="m-checkbox m-checkbox--check-bold m-checkbox--state-primary">
                                            {{ Form::checkbox('permissions[]', 'teams_add',false,['id'=>'teams_add','class'=>'check_teams']) }}
                                            <label for="teams_add" style="height: 10px;"></label>
                                        </label> 
                                    </td>
                                    <td>
                                        <label class="m-checkbox m-checkbox--check-bold m-checkbox--state-primary">
                                            {{ Form::checkbox('permissions[]', 'teams_edit',false,['id'=>'teams_edit','class'=>'check_teams']) }}
                                            <label for="teams_edit" style="height: 10px;"></label>
                                        </label> 
                                    </td>
                                    <td></td>
                                    <td>
                                        <label class="m-checkbox m-checkbox--check-bold m-checkbox--state-primary">
                                            {{ Form::checkbox('permissions[]', 'teams_delete',false,['id'=>'teams_delete','class'=>'check_teams']) }}
                                            <label for="teams_delete" style="height: 10px;"></label>
                                        </label> 

                                        <tr class="pagetr">
                                            <td class="gray_check" rel="check_services" style="cursor: pointer;">
                                                <input type="checkbox" class="hidden" id="check_services_value">
                                                {{trans('admin.services')}}
                                            </td>
                                            <td>
                                                <label class="m-checkbox m-checkbox--check-bold m-checkbox--state-primary">
                                                    {{ Form::checkbox('permissions[]', 'services_all',false,['id'=>'services_all','class'=>'check_services']) }}
                                                    <label for="services_all" style="height: 10px;"></label>
                                                </label> 
                                            </td>
                                            <td>
                                                <label class="m-checkbox m-checkbox--check-bold m-checkbox--state-primary">
                                                    {{ Form::checkbox('permissions[]', 'services_add',false,['id'=>'services_add','class'=>'check_services']) }}
                                                    <label for="services_add" style="height: 10px;"></label>
                                                </label> 
                                            </td>
                                            <td>
                                                <label class="m-checkbox m-checkbox--check-bold m-checkbox--state-primary">
                                                    {{ Form::checkbox('permissions[]', 'services_edit',false,['id'=>'services_edit','class'=>'check_services']) }}
                                                    <label for="services_edit" style="height: 10px;"></label>
                                                </label> 
                                            </td>
                                            <td></td>
                                            <td>
                                                <label class="m-checkbox m-checkbox--check-bold m-checkbox--state-primary">
                                                    {{ Form::checkbox('permissions[]', 'services_delete',false,['id'=>'services_delete','class'=>'check_services']) }}
                                                    <label for="services_delete" style="height: 10px;"></label>
                                                </label> 
                                            </td>
                                        </tr>
                                    </td>
                                </tr>

                                <tr class="pagetr">
                                    <td class="gray_check" rel="check_log" style="cursor: pointer;">
                                        <input type="checkbox" class="hidden" id="check_log_value">
                                        {{trans('admin.log')}}
                                    </td>
                                    <td>
                                        <label class="m-checkbox m-checkbox--check-bold m-checkbox--state-primary">
                                            {{ Form::checkbox('permissions[]', 'log_all',false,['id'=>'log_all','class'=>'check_log']) }}
                                            <label for="log_all" style="height: 10px;"></label>
                                        </label>
                                    </td>
                                    <td></td>
                                    <td></td>
                                    <td></td>
                                    <td></td>
                                </tr>
                                
                              

                                <tr class="pagetr">
                                    <td class="gray_check" rel="check_groups" style="cursor: pointer;">
                                        <input type="checkbox" class="hidden" id="check_groups_value">
                                        {{trans('admin.groups')}}
                                    </td>
                                    <td>
                                        <label class="m-checkbox m-checkbox--check-bold m-checkbox--state-primary">
                                            {{ Form::checkbox('permissions[]', 'groups_all',false,['id'=>'groups_all','class'=>'check_groups']) }}
                                            <label for="groups_all" style="height: 10px;"></label>
                                        </label>
                                    </td>
                                    <td>
                                        <label class="m-checkbox m-checkbox--check-bold m-checkbox--state-primary">
                                            {{ Form::checkbox('permissions[]', 'groups_add',false,['id'=>'groups_add','class'=>'check_groups']) }}
                                            <label for="groups_add" style="height: 10px;"></label>
                                        </label>
                                    </td>
                                    <td>
                                        <label class="m-checkbox m-checkbox--check-bold m-checkbox--state-primary">
                                            {{ Form::checkbox('permissions[]', 'groups_edit',false,['id'=>'groups_edit','class'=>'check_groups']) }}
                                            <label for="groups_edit" style="height: 10px;"></label>
                                        </label>
                                    </td>
                                    <td></td>
                                    <td>
                                        <label class="m-checkbox m-checkbox--check-bold m-checkbox--state-primary">
                                            {{ Form::checkbox('permissions[]', 'groups_delete',false,['id'=>'groups_delete','class'=>'check_groups']) }}
                                            <label for="groups_delete" style="height: 10px;"></label>
                                        </label>
                                    </td>
                                </tr>
                                
                                <tr class="pagetr">
                                    <td class="gray_check" rel="check_admins" style="cursor: pointer;">
                                        <input type="checkbox" class="hidden" id="check_admins_value">
                                        {{trans('admin.admins')}}
                                    </td>
                                    <td>
                                        <label class="m-checkbox m-checkbox--check-bold m-checkbox--state-primary">
                                            {{ Form::checkbox('permissions[]', 'admins_all',false,['id'=>'admins_all','class'=>'check_admins']) }}
                                            <label for="admins_all" style="height: 10px;"></label>
                                        </label>
                                    </td>
                                    <td>
                                        <label class="m-checkbox m-checkbox--check-bold m-checkbox--state-primary">
                                            {{ Form::checkbox('permissions[]', 'admins_add',false,['id'=>'admins_add','class'=>'check_admins']) }}
                                            <label for="admins_add" style="height: 10px;"></label>
                                        </label>
                                    </td>
                                    <td>
                                        <label class="m-checkbox m-checkbox--check-bold m-checkbox--state-primary">
                                            {{ Form::checkbox('permissions[]', 'admins_edit',false,['id'=>'admins_edit','class'=>'check_admins']) }}
                                            <label for="admins_edit" style="height: 10px;"></label>
                                        </label>
                                    </td>
                                    <td></td>
                                    <td>
                                        <label class="m-checkbox m-checkbox--check-bold m-checkbox--state-primary">
                                            {{ Form::checkbox('permissions[]', 'admins_delete',false,['id'=>'admins_delete','class'=>'check_admins']) }}
                                            <label for="admins_delete" style="height: 10px;"></label>
                                        </label>
                                    </td>
                                </tr>

                                <tr class="pagetr">
                                    <td class="gray_check" rel="check_clients" style="cursor: pointer;">
                                        <input type="checkbox" class="hidden" id="check_clients_value">
                                        {{trans('admin.clients')}}
                                    </td>
                                    <td>
                                        <label class="m-checkbox m-checkbox--check-bold m-checkbox--state-primary">
                                            {{ Form::checkbox('permissions[]', 'clients_all',false,['id'=>'clients_all','class'=>'check_clients']) }}
                                            <label for="clients_all" style="height: 10px;"></label>
                                        </label>
                                    </td>
                                    <td>
                                        <label class="m-checkbox m-checkbox--check-bold m-checkbox--state-primary">
                                            {{ Form::checkbox('permissions[]', 'clients_add',false,['id'=>'clients_add','class'=>'check_clients']) }}
                                            <label for="clients_add" style="height: 10px;"></label>
                                        </label>
                                    </td>
                                    <td>
                                        <label class="m-checkbox m-checkbox--check-bold m-checkbox--state-primary">
                                            {{ Form::checkbox('permissions[]', 'clients_edit',false,['id'=>'clients_edit','class'=>'check_clients']) }}
                                            <label for="clients_edit" style="height: 10px;"></label>
                                        </label>
                                    </td>
                                    <td></td>
                                    <td>
                                        <label class="m-checkbox m-checkbox--check-bold m-checkbox--state-primary">
                                            {{ Form::checkbox('permissions[]', 'clients_delete',false,['id'=>'clients_delete','class'=>'check_clients']) }}
                                            <label for="clients_delete" style="height: 10px;"></label>
                                        </label>
                                    </td>
                                </tr>
                                <tr class="pagetr">
                                    <td class="gray_check" rel="check_consultant" style="cursor: pointer;">
                                        <input type="checkbox" class="hidden" id="check_consultant_value">
                                        {{trans('admin.consultant')}}
                                    </td>
                                    <td>
                                        <label class="m-checkbox m-checkbox--check-bold m-checkbox--state-primary">
                                            {{ Form::checkbox('permissions[]', 'consultant_all',false,['id'=>'consultant_all','class'=>'check_consultant']) }}
                                            <label for="consultant_all" style="height: 10px;"></label>
                                        </label>
                                    </td>
                                    <td>
                                        <label class="m-checkbox m-checkbox--check-bold m-checkbox--state-primary">
                                            {{ Form::checkbox('permissions[]', 'consultant_add',false,['id'=>'consultant_add','class'=>'check_consultant']) }}
                                            <label for="consultant_add" style="height: 10px;"></label>
                                        </label>
                                    </td>
                                    <td>
                                        <label class="m-checkbox m-checkbox--check-bold m-checkbox--state-primary">
                                            {{ Form::checkbox('permissions[]', 'consultant_edit',false,['id'=>'consultant_edit','class'=>'check_consultant']) }}
                                            <label for="consultant_edit" style="height: 10px;"></label>
                                        </label>
                                    </td>
                                    <td></td>
                                    <td>
                                        <label class="m-checkbox m-checkbox--check-bold m-checkbox--state-primary">
                                            {{ Form::checkbox('permissions[]', 'consultant_delete',false,['id'=>'consultant_delete','class'=>'check_consultant']) }}
                                            <label for="consultant_delete" style="height: 10px;"></label>
                                        </label>
                                    </td>
                                </tr>
                               

                               

                                <tr class="pagetr">
                                    <td class="gray_check" rel="check_slider" style="cursor: pointer;">
                                        <input type="checkbox" class="hidden" id="check_slider_value">
                                        {{trans('admin.slider')}}
                                    </td>
                                    <td>
                                        <label class="m-checkbox m-checkbox--check-bold m-checkbox--state-primary">
                                            {{ Form::checkbox('permissions[]', 'slider_all',false,['id'=>'slider_all','class'=>'check_slider']) }}
                                            <label for="slider_all" style="height: 10px;"></label>
                                        </label>
                                    </td>
                                    <td>
                                        <label class="m-checkbox m-checkbox--check-bold m-checkbox--state-primary">
                                            {{ Form::checkbox('permissions[]', 'slider_add',false,['id'=>'slider_add','class'=>'check_slider']) }}
                                            <label for="slider_add" style="height: 10px;"></label>
                                        </label>
                                    </td>
                                    <td>
                                        <label class="m-checkbox m-checkbox--check-bold m-checkbox--state-primary">
                                            {{ Form::checkbox('permissions[]', 'slider_edit',false,['id'=>'slider_edit','class'=>'check_slider']) }}
                                            <label for="slider_edit" style="height: 10px;"></label>
                                        </label>
                                    </td>
                                    <td></td>
                                    <td>
                                        <label class="m-checkbox m-checkbox--check-bold m-checkbox--state-primary">
                                            {{ Form::checkbox('permissions[]', 'slider_delete',false,['id'=>'slider_delete','class'=>'check_slider']) }}
                                            <label for="slider_delete" style="height: 10px;"></label>
                                        </label>
                                    </td>
                                </tr>

                                <tr class="pagetr">
                                    <td class="gray_check" rel="check_pages" style="cursor: pointer;">
                                        <input type="checkbox" class="hidden" id="check_pages_value">
                                        {{trans('admin.pages')}}
                                    </td>
                                    <td>
                                        <label class="m-checkbox m-checkbox--check-bold m-checkbox--state-primary">
                                            {{ Form::checkbox('permissions[]', 'pages_all',false,['id'=>'pages_all','class'=>'check_pages']) }}
                                            <label for="pages_all" style="height: 10px;"></label>
                                        </label>
                                    </td>
                                    <td>
                                        <label class="m-checkbox m-checkbox--check-bold m-checkbox--state-primary">
                                            {{ Form::checkbox('permissions[]', 'pages_add',false,['id'=>'pages_add','class'=>'check_pages']) }}
                                            <label for="pages_add" style="height: 10px;"></label>
                                        </label>
                                    </td>
                                    <td>
                                        <label class="m-checkbox m-checkbox--check-bold m-checkbox--state-primary">
                                            {{ Form::checkbox('permissions[]', 'pages_edit',false,['id'=>'pages_edit','class'=>'check_pages']) }}
                                            <label for="pages_edit" style="height: 10px;"></label>
                                        </label>
                                    </td>
                                    <td></td>
                                    <td>
                                        <label class="m-checkbox m-checkbox--check-bold m-checkbox--state-primary">
                                            {{ Form::checkbox('permissions[]', 'pages_delete',false,['id'=>'pages_delete','class'=>'check_pages']) }}
                                            <label for="pages_delete" style="height: 10px;"></label>
                                        </label>
                                    </td>
                                </tr>

                                <tr class="pagetr">
                                    <td class="gray_check" rel="check_contact" style="cursor: pointer;">
                                        <input type="checkbox" class="hidden" id="check_contact_value">
                                        {{trans('admin.contact')}}
                                    </td>
                                    <td>
                                        <label class="m-checkbox m-checkbox--check-bold m-checkbox--state-primary">
                                            {{ Form::checkbox('permissions[]', 'contact_all',false,['id'=>'contact_all','class'=>'check_contact']) }}
                                            <label for="contact_all" style="height: 10px;"></label>
                                        </label>
                                    </td>
                                    <td></td>
                                    <td>
                                        <label class="m-checkbox m-checkbox--check-bold m-checkbox--state-primary">
                                            {{ Form::checkbox('permissions[]', 'contact_edit',false,['id'=>'contact_edit','class'=>'check_contact']) }}
                                            <label for="contact_edit" style="height: 10px;"></label>
                                        </label>
                                    </td>
                                    <td></td>
                                    <td>
                                        <label class="m-checkbox m-checkbox--check-bold m-checkbox--state-primary">
                                            {{ Form::checkbox('permissions[]', 'contact_delete',false,['id'=>'contact_delete','class'=>'check_contact']) }}
                                            <label for="contact_delete" style="height: 10px;"></label>
                                        </label>
                                    </td>
                                </tr>

                               
                                
                               
                            </table>
                        </div>

                    </div>
                </div>
            </div>

            <div class="box-footer">
                <button type="submit" class="btn btn-primary btn-lg" style="font-size: 16px;">{{trans('admin.add')}}</button>
                <a href="{{URL::to('admin/groups')}}" class="btn btn-default btn-lg" style="font-size: 16px;">{{trans('admin.back')}}</a>
            </div>

        </form>

    </div>

</section>

@endsection

@section('scripts')
<script>
    $('.gray_check').click(function () {
        var rel = $(this).attr('rel');
        if ($('#' + rel + "_value").is(':checked')) {
            $('#' + rel + "_value").prop("checked", false);
            $('.' + rel).prop("checked", false);
        } else {
            $('#' + rel + "_value").prop("checked", true);
            $('.' + rel).prop("checked", true);
        }
    });
</script>
@stop
