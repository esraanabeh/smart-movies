@extends('admin.layouts.form')

@section('content')
    <?php
    $lang = App::getLocale();
    $text = 'text-left';
    $pull = 'pull-left';
    if ($lang == 'ar') {
        $text = 'text-right';
        $pull = 'pull-right';
    }
    ?>
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <h1>
            {{ trans('admin.groups') }}
        </h1>
        <ol class="breadcrumb">
            <li class="breadcrumb-item {{ $pull }}"><a href="{{ URL::to('admin') }}">
                    {{ trans('admin.home') }}</a>
            </li>
            <li class="breadcrumb-item {{ $pull }}"><a href="{{ URL::to('admin/groups') }}">
                    {{ trans('admin.groups') }}</a>
            </li>
            <li class="breadcrumb-item active {{ $pull }}">{{ trans('admin.group_edit') }}</li>
        </ol>
    </section>

    <section class="content">

        <div class="box box-default">
            <div class="box-header with-border">
                <h3 class="box-title">{{ trans('admin.group_edit') }} : {{ $group[$lang . '_name'] }}</h3>

                <div class="box-tools pull-right">
                    <button type="button" class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i>
                    </button>
                </div>
            </div>

            <form action="{{ URL::to('admin/groups/' . $group['id']) }}" method="post">
                {{ Form::hidden('_method', 'PATCH') }}
                {{ csrf_field() }}

                <div class="box-body">
                    <div class="row">
                        <div class="col-12">
                            @if (Session::has('message'))
                                <div class="row">
                                    <div class="col-lg-12">
                                        <div class="alert alert-success alert-dismissible">
                                            {{ Session::get('message') }}
                                            <button type="button" class="close" data-dismiss="alert"
                                                    aria-hidden="true">
                                                ×
                                            </button>
                                        </div>
                                    </div>
                                </div>
                            @endif

                            <div class="form-group row">
                                <label for="ar_name"
                                       class="col-sm-3 col-form-label">{{ trans('admin.group_name_ar') }}</label>
                                <div class="col-sm-9">
                                    {{ Form::text('ar_name', $group['ar_name'], ['class' => 'form-control', 'id' => 'ar_name']) }}
                                    @if ($errors->has('ar_name'))
                                        <div class="alert alert-danger">{{ $errors->first('ar_name') }}</div>
                                    @endif
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="en_name"
                                       class="col-sm-3 col-form-label">{{ trans('admin.group_name_en') }}</label>
                                <div class="col-sm-9">
                                    {{ Form::text('en_name', $group['en_name'], ['class' => 'form-control', 'id' => 'en_name']) }}
                                    @if ($errors->has('en_name'))
                                        <div class="alert alert-danger">{{ $errors->first('en_name') }}</div>
                                    @endif
                                </div>
                            </div>
                            <?php

                             $site_edit = $social_media_all = $social_media_edit= $social_media_delete = $social_media_add = $banks_all = $banks_add = $banks_edit = $banks_delete = $log_all = $notifications_all = $notifications_add = $groups_all = $groups_add = $groups_edit = $groups_delete = $admins_all = $admins_add = $admins_edit = $admins_delete = $users_all = $users_add = $users_edit = $users_delete = $reports_all = $ads_all = $ads_add = $ads_edit = $ads_delete = $mall_all = $mall_add = $mall_edit = $mall_delete = $tutorials_all = $tutorials_add = $tutorials_edit = $tutorials_delete = $slider_all = $slider_add = $slider_edit = $slider_delete = $pages_all = $pages_add = $pages_edit = $pages_delete = $contact_all = $contact_edit = $contact_delete = $category_all = $category_add = $category_edit = $category_delete = $product_brand_all = $product_brand_add = $product_brand_edit = $product_brand_delete = $product_type_all = $product_type_add = $product_type_edit = $product_type_delete = $sizes_all = $sizes_add = $sizes_edit = $sizes_delete = $colors_all = $colors_add = $colors_edit = $colors_delete = $stors_all = $stors_add = $stors_edit = $stors_delete = $offers_all = $offers_add = $offers_edit = $offers_delete = $product_all = $product_add = $product_edit = $product_delete = $guest_all = $site_edit = $social_media_all = $social_media_edit = $guest_all = $banks_all = $banks_add = $banks_edit = $banks_delete = $log_all = $notifications_all = $notifications_add = $groups_all = $groups_add = $groups_edit = $groups_delete = $admins_all = $admins_add = $admins_edit = $admins_delete = $users_all = $users_add = $users_edit = $users_delete = $reports_all = $ads_all = $ads_add = $ads_edit = $ads_delete = $mall_all = $mall_add = $mall_edit = $mall_delete = $tutorials_all = $tutorials_add = $tutorials_edit = $tutorials_delete = $slider_all = $slider_add = $slider_edit = $slider_delete = $pages_all = $pages_add = $pages_edit = $pages_delete = $contact_all = $contact_edit = $contact_delete = $category_all = $category_add = $category_edit = $category_delete = $product_brand_all = $product_brand_add = $product_brand_edit = $product_brand_delete = $product_type_all = $product_type_add = $product_type_edit = $product_type_delete = $sizes_all = $sizes_add = $sizes_edit = $sizes_delete = $colors_all = $colors_add = $colors_edit = $colors_delete = $sizes_all = $sizes_add = $sizes_edit = $sizes_delete = $colors_all = $colors_add = $colors_edit = $colors_delete = $stors_all = $stors_add = $stors_edit = $stors_delete = $offers_all = $offers_add = $offers_edit = $offers_delete  = $orders_all = $orders_add = $orders_edit = $orders_delete = $areas_all = $areas_add = $areas_edit = $areas_delete = false;

                            $site_edit  = $banks_all = $banks_add = $banks_edit = $banks_delete = $log_all = $notifications_all = $notifications_add = $groups_all = $groups_add = $groups_edit = $groups_delete = $admins_all = $admins_add = $admins_edit = $admins_delete = $users_all = $users_add = $users_edit = $users_delete = $reports_all = $ads_all = $ads_add = $ads_edit = $ads_delete = $mall_all = $mall_add = $mall_edit = $mall_delete = $tutorials_all = $tutorials_add = $tutorials_edit = $tutorials_delete = $slider_all = $slider_add = $slider_edit = $slider_delete = $pages_all = $pages_add = $pages_edit = $pages_delete = $contact_all = $contact_edit = $contact_delete = $category_all = $category_add = $category_edit = $category_delete = $product_brand_all = $product_brand_add = $product_brand_edit = $product_brand_delete = $product_type_all = $product_type_add = $product_type_edit = $product_type_delete = $sizes_all = $sizes_add = $sizes_edit = $sizes_delete = $colors_all = $colors_add = $colors_edit = $colors_delete = $stors_all = $stors_add = $stors_edit = $stors_delete = $offers_all = $offers_add = $offers_edit = $offers_delete = $product_all = $product_add = $product_edit = $product_delete = $guest_all = $site_edit = $social_media_all = $social_media_edit = $guest_all = $banks_all = $banks_add = $banks_edit = $banks_delete = $log_all = $notifications_all = $notifications_add = $groups_all = $groups_add = $groups_edit = $groups_delete = $admins_all = $admins_add = $admins_edit = $admins_delete = $users_all = $users_add = $users_edit = $users_delete = $reports_all = $ads_all = $ads_add = $ads_edit = $ads_delete = $mall_all = $mall_add = $mall_edit = $mall_delete = $tutorials_all = $tutorials_add = $tutorials_edit = $tutorials_delete = $slider_all = $slider_add = $slider_edit = $slider_delete = $pages_all = $pages_add = $pages_edit = $pages_delete = $contact_all = $contact_edit = $contact_delete = $category_all = $category_add = $category_edit = $category_delete = $product_brand_all = $product_brand_add = $product_brand_edit = $product_brand_delete = $product_type_all = $product_type_add = $product_type_edit = $product_type_delete = $sizes_all = $sizes_add = $sizes_edit = $sizes_delete = $colors_all = $colors_add = $colors_edit = $colors_delete = $sizes_all = $sizes_add = $sizes_edit = $sizes_delete = $colors_all = $colors_add = $colors_edit = $colors_delete = $stors_all = $stors_add = $stors_edit = $stors_delete = $offers_all = $offers_add = $offers_edit = $offers_delete = $orders_all = $orders_add = $orders_edit = $orders_delete = $areas_all = $areas_add = $areas_edit = $areas_delete = false;

                            $site_edit = $banks_all = $banks_add = $banks_edit = $banks_delete = $log_all = $notifications_all = $notifications_add = $groups_all = $groups_add = $groups_edit = $groups_delete = $admins_all = $admins_add = $admins_edit = $admins_delete = $users_all = $users_add = $users_edit = $users_delete = $reports_all = $ads_all = $ads_add = $ads_edit = $ads_delete = $mall_all = $mall_add = $mall_edit = $mall_delete = $tutorials_all = $tutorials_add = $tutorials_edit = $tutorials_delete = $gallery_all = $gallery_add = $gallery_edit = $gallery_delete = $pages_all = $pages_add = $pages_edit = $pages_delete = $contact_all = $contact_edit = $contact_delete = $category_all = $category_add = $category_edit = $category_delete = $product_brand_all = $product_brand_add = $product_brand_edit = $product_brand_delete = $product_type_all = $product_type_add = $product_type_edit = $product_type_delete = $sizes_all = $sizes_add = $sizes_edit = $sizes_delete = $colors_all = $colors_add = $colors_edit = $colors_delete = $stores_all = $stores_add = $stores_edit = $stores_delete = $offers_all = $offers_add = $offers_edit = $offers_delete = $product_all = $product_add = $product_edit = $product_delete = $guest_all = $site_edit = $social_media_all = $social_media_edit = $guest_all = $banks_all = $banks_add = $banks_edit = $banks_delete = $log_all = $notifications_all = $notifications_add = $groups_all = $groups_add = $groups_edit = $groups_delete = $admins_all = $admins_add = $admins_edit = $admins_delete = $users_all = $users_add = $users_edit = $users_delete = $reports_all = $ads_all = $ads_add = $ads_edit = $ads_delete = $mall_all = $mall_add = $mall_edit = $mall_delete = $tutorials_all = $tutorials_add = $tutorials_edit = $tutorials_delete = $slider_all = $slider_add = $slider_edit = $slider_delete = $pages_all = $pages_add = $pages_edit = $pages_delete = $consultant_all = $consultant_edit = $consultant_delete = $category_all = $category_add = $category_edit = $category_delete = $product_brand_all = $product_brand_add = $product_brand_edit = $product_brand_delete = $product_type_all = $product_type_add = $product_type_edit = $product_type_delete = $sizes_all = $sizes_add = $sizes_edit = $sizes_delete = $colors_all = $colors_add = $colors_edit = $colors_delete = $sizes_all = $sizes_add = $sizes_edit = $sizes_delete = $colors_all = $colors_add = $colors_edit = $colors_delete = $stores_all = $stores_add = $stores_edit = $stores_delete = $orders_all = $orders_add = $orders_edit = $orders_delete = false;

                            $site_edit  = $banks_all = $banks_add = $banks_edit =
                            $banks_delete = $log_all = $notifications_all = $notifications_add = $groups_all = $groups_add =
                            $groups_edit = $groups_delete = $admins_all = $admins_add = $admins_edit = $admins_delete = $users_all
                                = $users_add = $users_edit = $users_delete = $reports_all = $ads_all = $ads_add = $ads_edit =
                            $ads_delete = $mall_all = $mall_add = $mall_edit = $mall_delete = $tutorials_all = $tutorials_add =
                            $tutorials_edit = $tutorials_delete = $slider_all = $slider_add = $slider_edit = $slider_delete =
                            $pages_all = $pages_add = $pages_edit = $pages_delete = $services_all = $services_add = $services_edit = $services_delete = $contact_all = $contact_edit = $contact_delete
                                = $clients_all = $clients_add = $clients_edit = $clients_delete = $product_brand_all =
                            $product_brand_add = $product_brand_edit = $product_brand_delete = 
                            $product_type_add = $product_type_edit = $product_type_delete = $sizes_all = $sizes_add =
                            $sizes_edit = $sizes_delete = $colors_all = $colors_add = $colors_edit = $colors_delete =
                            $photo_all = $photo_add = $photo_edit = $photo_delete = $offers_all = $offers_add = $offers_edit
                                = $offers_delete = $product_all = $product_add = $product_edit = $product_delete = $guest_all
                                = $site_edit = $social_media_all = $social_media_edit = $social_media_add = $guest_all = $movies_all = $movies_add
                                = $movies_edit = $movies_delete = $log_all = $notifications_all = $notifications_add = $groups_all
                                = $groups_add = $groups_edit = $groups_delete = $admins_all = $admins_add = $admins_edit =
                            $admins_delete = $users_all = $users_add = $users_edit = $users_delete = $reports_all = $ads_all =
                            $ads_add = $ads_edit = $ads_delete = $mall_all = $mall_add = $mall_edit = $mall_delete =
                            $tutorials_all = $tutorials_add = $tutorials_edit = $tutorials_delete = $wishlist_all = $wishlist_delete = $slider_all = $slider_add
                                = $slider_edit = $slider_delete = $pages_all = $pages_add = $pages_edit = $pages_delete= $locations_all = $locations_add = $locations_edit = $locations_delete =
                            $contact_all = $contact_edit = $contact_delete = $packages_all = $packages_add = $packages_edit
                                = $packages_delete = $product_brand_all = $product_brand_add = $product_brand_edit =
                            $product_brand_delete = $product_type_all = $product_type_add = $product_type_edit =
                            $product_type_delete = $sizes_all = $sizes_add = $sizes_edit = $sizes_delete = $colors_all
                                = $colors_add = $colors_edit = $colors_delete = $sizes_all = $sizes_add = $sizes_edit =
                            $sizes_delete = $teams_all = $teams_add = $teams_edit = $teams_delete = $stors_all =
                            $stors_add = $stors_edit = $stors_delete = $offers_all= $site_all = $offers_add = $offers_edit =
                            $offers_delete =
                            $orders_all = $orders_add = $orders_edit = $orders_delete = false;

                            foreach ($group['Permissions'] as $pre) {
                                if ($pre['permission'] == 'site_edit') {
                                    $site_edit = true;
                                } elseif ($pre['permission'] == 'site_all') {
                                    $site_all = true;
                                }elseif ($pre['permission'] == 'social_media_all') {
                                    $social_media_all = true;
                                } elseif ($pre['permission'] == 'social_media_edit') {
                                    $social_media_edit = true;
                                }elseif ($pre['permission'] == 'social_media_add') {
                                    $social_media_add = true;
                                } 
                                elseif ($pre['permission'] == 'social_media_delete') {
                                    $social_media_delete = true;
                                } 
                                elseif ($pre['permission'] == 'teams_all') {
                                    $teams_all = true;
                                } elseif ($pre['permission'] == 'teams_add') {
                                    $teams_add = true;
                                } elseif ($pre['permission'] == 'teams_edit') {
                                    $teams_edit = true;
                                } elseif ($pre['permission'] == 'teams_delete') {
                                    $teams_delete = true;
                                } elseif ($pre['permission'] == 'packages_all') {
                                    $packages_all = true;
                                }  elseif ($pre['permission'] == 'packages_add') {
                                    $packages_add = true;
                                } elseif ($pre['permission'] == 'packages_edit') {
                                    $packages_edit = true;
                                } elseif ($pre['permission'] == 'packages_delete') {
                                    $packages_delete = true;
                                }  elseif ($pre['permission'] == 'groups_all') {
                                    $groups_all = true;
                                } elseif ($pre['permission'] == 'groups_add') {
                                    $groups_add = true;
                                } elseif ($pre['permission'] == 'groups_edit') {
                                    $groups_edit = true;
                                } elseif ($pre['permission'] == 'groups_delete') {
                                    $groups_delete = true;
                                }  elseif ($pre['permission'] == 'admins_all') {
                                    $admins_all = true;
                                } elseif ($pre['permission'] == 'admins_add') {
                                    $admins_add = true;
                                } elseif ($pre['permission'] == 'admins_edit') {
                                    $admins_edit = true;
                                } elseif ($pre['permission'] == 'admins_delete') {
                                    $admins_delete = true;
                                } elseif ($pre['permission'] == 'users_all') {
                                    $users_all = true;
                                } elseif ($pre['permission'] == 'users_add') {
                                    $users_add = true;
                                } elseif ($pre['permission'] == 'users_edit') {
                                    $users_edit = true;
                                } elseif ($pre['permission'] == 'users_delete') {
                                    $users_delete = true;
                                } elseif ($pre['permission'] == 'pages_all') {
                                    $pages_all = true;
                                } elseif ($pre['permission'] == 'pages_add') {
                                    $pages_add = true;
                                } elseif ($pre['permission'] == 'pages_edit') {
                                    $pages_edit = true;
                                } elseif ($pre['permission'] == 'pages_delete') {
                                    $pages_delete = true;
                                }  elseif ($pre['permission'] == 'newsletter') {
                                    $newsletter = true;
                                } elseif ($pre['permission'] == 'contact_all') {
                                    $contact_all = true;
                                } elseif ($pre['permission'] == 'contact_edit') {
                                    $contact_edit = true;
                                } elseif ($pre['permission'] == 'contact_delete') {
                                    $contact_delete = true;
                                } 
                                elseif ($pre['permission'] == 'movies_all') {
                                    $movies_all = true;
                                } elseif ($pre['permission'] == 'movies_add') {
                                    $movies_add = true;
                                } elseif ($pre['permission'] == 'movies_edit') {
                                    $movies_edit = true;
                                } elseif ($pre['permission'] == 'movies_delete') {
                                    $movies_delete = true;
                                } 
                               
                            }
                            ?>

                            <div class="form-group row">
                                <table class="table table-bordered table-hover text-center">
                                    <thead>
                                    <tr class="gray_check">
                                        <th class="text-center">{{ trans('admin.permissions') }} </th>
                                        <th class="text-center">{{ trans('admin.show_all') }}</th>
                                        <th class="text-center">{{ trans('admin.add') }} </th>
                                        <th class="text-center">{{ trans('admin.edit') }} </th>
                                        <th class="text-center">{{ trans('admin.show') }} </th>
                                        <th class="text-center">{{ trans('admin.delete') }} </th>
                                    </tr>
                                    </thead>

                                    <tr class="pagetr">
                                        <td class="gray_check" rel="check_site" style="cursor: pointer;">
                                            <input type="checkbox" class="hidden" id="check_site_value">
                                            {{ trans('admin.site') }}
                                        </td>
                                        <td> <label class="m-checkbox m-checkbox--check-bold m-checkbox--state-primary">
                                            {{ Form::checkbox('permissions[]', 'site_all', $site_all, ['id' => 'site_all', 'class' => 'check_site']) }}
                                            <label for="site_all" style="height: 10px;"></label>
                                        </label></td>
                                        <td></td>
                                        <td>
                                            <label class="m-checkbox m-checkbox--check-bold m-checkbox--state-primary">
                                                {{ Form::checkbox('permissions[]', 'site_edit', $site_edit, ['id' => 'site_edit', 'class' => 'check_site']) }}
                                                <label for="site_edit" style="height: 10px;"></label>
                                            </label>
                                        </td>
                                        <td></td>
                                        <td></td>
                                    </tr>

                                    <tr class="pagetr">
                                        <td class="gray_check" rel="check_social_media" style="cursor: pointer;">
                                            <input type="checkbox" class="hidden" id="check_social_media_value">
                                            {{ trans('admin.social_media') }}
                                        </td>
                                        <td>
                                            <label class="m-checkbox m-checkbox--check-bold m-checkbox--state-primary">
                                                {{ Form::checkbox('permissions[]', 'social_media_all', $social_media_all, ['id' => 'social_media_all', 'class' => 'check_social_media']) }}
                                                <label for="social_media_all" style="height: 10px;"></label>
                                            </label>
                                        </td>
                                        <td><label class="m-checkbox m-checkbox--check-bold m-checkbox--state-primary">
                                            {{ Form::checkbox('permissions[]', 'social_media_add', $social_media_add, ['id' => 'social_media_add', 'class' => 'check_social_media']) }}
                                            <label for="social_media_add" style="height: 10px;"></label>
                                        </label></td>
                                        <td>
                                            <label class="m-checkbox m-checkbox--check-bold m-checkbox--state-primary">
                                                {{ Form::checkbox('permissions[]', 'social_media_edit', $social_media_edit, ['id' => 'social_media_edit', 'class' => 'check_social_media']) }}
                                                <label for="social_media_edit" style="height: 10px;"></label>
                                            </label>
                                        </td>
                                        <td></td>
                                        <td><label class="m-checkbox m-checkbox--check-bold m-checkbox--state-primary">
                                            {{ Form::checkbox('permissions[]', 'social_media_delete', $social_media_delete, ['id' => 'social_media_delete', 'class' => 'check_social_media']) }}
                                            <label for="social_media_delete" style="height: 10px;"></label>
                                        </label></td>
                                        
                                    </tr>


                                    <tr class="pagetr">
                                        <td class="gray_check" rel="check_groups" style="cursor: pointer;">
                                            <input type="checkbox" class="hidden" id="check_groups_value">
                                            {{ trans('admin.groups') }}
                                        </td>
                                        <td>
                                            <label class="m-checkbox m-checkbox--check-bold m-checkbox--state-primary">
                                                {{ Form::checkbox('permissions[]', 'groups_all', $groups_all, ['id' => 'groups_all', 'class' => 'check_groups']) }}
                                                <label for="groups_all" style="height: 10px;"></label>
                                            </label>
                                        </td>
                                        <td>
                                            <label class="m-checkbox m-checkbox--check-bold m-checkbox--state-primary">
                                                {{ Form::checkbox('permissions[]', 'groups_add', $groups_add, ['id' => 'groups_add', 'class' => 'check_groups']) }}
                                                <label for="groups_add" style="height: 10px;"></label>
                                            </label>
                                        </td>
                                        <td>
                                            <label class="m-checkbox m-checkbox--check-bold m-checkbox--state-primary">
                                                {{ Form::checkbox('permissions[]', 'groups_edit', $groups_edit, ['id' => 'groups_edit', 'class' => 'check_groups']) }}
                                                <label for="groups_edit" style="height: 10px;"></label>
                                            </label>
                                        </td>
                                        <td></td>
                                        <td>
                                            <label class="m-checkbox m-checkbox--check-bold m-checkbox--state-primary">
                                                {{ Form::checkbox('permissions[]', 'groups_delete', $groups_delete, ['id' => 'groups_delete', 'class' => 'check_groups']) }}
                                                <label for="groups_delete" style="height: 10px;"></label>
                                            </label>
                                        </td>
                                    </tr>


                                    <tr class="pagetr">
                                        <td class="gray_check" rel="check_admins" style="cursor: pointer;">
                                            <input type="checkbox" class="hidden" id="check_admins_value">
                                            {{ trans('admin.admins') }}
                                        </td>
                                        <td>
                                            <label class="m-checkbox m-checkbox--check-bold m-checkbox--state-primary">
                                                {{ Form::checkbox('permissions[]', 'admins_all', $admins_all, ['id' => 'admins_all', 'class' => 'check_admins']) }}
                                                <label for="admins_all" style="height: 10px;"></label>
                                            </label>
                                        </td>
                                        <td>
                                            <label class="m-checkbox m-checkbox--check-bold m-checkbox--state-primary">
                                                {{ Form::checkbox('permissions[]', 'admins_add', $admins_add, ['id' => 'admins_add', 'class' => 'check_admins']) }}
                                                <label for="admins_add" style="height: 10px;"></label>
                                            </label>
                                        </td>
                                        <td>
                                            <label class="m-checkbox m-checkbox--check-bold m-checkbox--state-primary">
                                                {{ Form::checkbox('permissions[]', 'admins_edit', $admins_edit, ['id' => 'admins_edit', 'class' => 'check_admins']) }}
                                                <label for="admins_edit" style="height: 10px;"></label>
                                            </label>
                                        </td>
                                        <td></td>
                                        <td>
                                            <label class="m-checkbox m-checkbox--check-bold m-checkbox--state-primary">
                                                {{ Form::checkbox('permissions[]', 'admins_delete', $admins_delete, ['id' => 'admins_delete', 'class' => 'check_admins']) }}
                                                <label for="admins_delete" style="height: 10px;"></label>
                                            </label>
                                        </td>
                                    </tr>

                                  

                                    <tr class="pagetr">
                                        <td class="gray_check" rel="check_users" style="cursor: pointer;">
                                            <input type="checkbox" class="hidden" id="check_users_value">
                                            {{ trans('admin.users') }}
                                        </td>
                                        <td>
                                            <label class="m-checkbox m-checkbox--check-bold m-checkbox--state-primary">
                                                {{ Form::checkbox('permissions[]', 'users_all', $users_all, ['id' => 'users_all', 'class' => 'check_users']) }}
                                                <label for="users_all" style="height: 10px;"></label>
                                            </label>
                                        </td>
                                        <td>
                                            <label class="m-checkbox m-checkbox--check-bold m-checkbox--state-primary">
                                                {{ Form::checkbox('permissions[]', 'users_add', $users_add, ['id' => 'users_add', 'class' => 'check_users']) }}
                                                <label for="users_add" style="height: 10px;"></label>
                                            </label>
                                        </td>
                                        <td>
                                            <label class="m-checkbox m-checkbox--check-bold m-checkbox--state-primary">
                                                {{ Form::checkbox('permissions[]', 'users_edit', $users_edit, ['id' => 'users_edit', 'class' => 'check_users']) }}
                                                <label for="users_edit" style="height: 10px;"></label>
                                            </label>
                                        </td>
                                        <td></td>
                                        <td>
                                            <label class="m-checkbox m-checkbox--check-bold m-checkbox--state-primary">
                                                {{ Form::checkbox('permissions[]', 'users_delete', $users_delete, ['id' => 'users_delete', 'class' => 'check_users']) }}
                                                <label for="users_delete" style="height: 10px;"></label>
                                            </label>
                                        </td>
                                    </tr>

                                   
                                    <tr class="pagetr">
                                        <td class="gray_check" rel="check_pages" style="cursor: pointer;">
                                            <input type="checkbox" class="hidden" id="check_pages_value">
                                            {{ trans('admin.pages') }}
                                        </td>
                                        <td>
                                            <label class="m-checkbox m-checkbox--check-bold m-checkbox--state-primary">
                                                {{ Form::checkbox('permissions[]', 'pages_all', $pages_all, ['id' => 'pages_all', 'class' => 'check_pages']) }}
                                                <label for="pages_all" style="height: 10px;"></label>
                                            </label>
                                        </td>
                                        <td>
                                            <label class="m-checkbox m-checkbox--check-bold m-checkbox--state-primary">
                                                {{ Form::checkbox('permissions[]', 'pages_add', $pages_add, ['id' => 'pages_add', 'class' => 'check_pages']) }}
                                                <label for="pages_add" style="height: 10px;"></label>
                                            </label>
                                        </td>
                                        <td>
                                            <label class="m-checkbox m-checkbox--check-bold m-checkbox--state-primary">
                                                {{ Form::checkbox('permissions[]', 'pages_edit', $pages_edit, ['id' => 'pages_edit', 'class' => 'check_pages']) }}
                                                <label for="pages_edit" style="height: 10px;"></label>
                                            </label>
                                        </td>
                                        <td></td>
                                        <td>
                                            <label class="m-checkbox m-checkbox--check-bold m-checkbox--state-primary">
                                                {{ Form::checkbox('permissions[]', 'pages_delete', $pages_delete, ['id' => 'pages_delete', 'class' => 'check_pages']) }}
                                                <label for="pages_delete" style="height: 10px;"></label>
                                            </label>
                                        </td>
                                    </tr>

                                     
                                    <tr class="pagetr">
                                        <td class="gray_check" rel="check_teams" style="cursor: pointer;">
                                            <input type="checkbox" class="hidden" id="check_teams_value">
                                            {{ trans('admin.teams') }}
                                        </td>
                                        <td>
                                            <label class="m-checkbox m-checkbox--check-bold m-checkbox--state-primary">
                                                {{ Form::checkbox('permissions[]', 'teams_all', $teams_all, ['id' => 'teams_all', 'class' => 'check_teams']) }}
                                                <label for="teams_all" style="height: 10px;"></label>
                                            </label>
                                        </td>
                                        <td>
                                            <label class="m-checkbox m-checkbox--check-bold m-checkbox--state-primary">
                                                {{ Form::checkbox('permissions[]', 'teams_add', $teams_add, ['id' => 'teams_add', 'class' => 'check_teams']) }}
                                                <label for="teams_add" style="height: 10px;"></label>
                                            </label>
                                        </td>
                                        <td>
                                            <label class="m-checkbox m-checkbox--check-bold m-checkbox--state-primary">
                                                {{ Form::checkbox('permissions[]', 'teams_edit', $teams_edit, ['id' => 'teams_edit', 'class' => 'check_teams']) }}
                                                <label for="teams_edit" style="height: 10px;"></label>
                                            </label>
                                        </td>
                                        <td></td>
                                        <td>
                                            <label class="m-checkbox m-checkbox--check-bold m-checkbox--state-primary">
                                                {{ Form::checkbox('permissions[]', 'teams_delete', $teams_delete, ['id' => 'teams_delete', 'class' => 'check_teams']) }}
                                                <label for="teams_delete" style="height: 10px;"></label>
                                            </label>
                                        </td>
                                    </tr>

                                    

                                   
                                    <tr class="pagetr">
                                        <td class="gray_check" rel="check_packages" style="cursor: pointer;">
                                            <input type="checkbox" class="hidden" id="check_packages_value">
                                            {{ trans('admin.packages') }}
                                        </td>
                                        <td>
                                            <label class="m-checkbox m-checkbox--check-bold m-checkbox--state-primary">
                                                {{ Form::checkbox('permissions[]', 'packages_all', $packages_all, ['id' => 'packages_all', 'class' => 'check_packages']) }}
                                                <label for="packages_all" style="height: 10px;"></label>
                                            </label>
                                        </td>
                                        <td>
                                            <label class="m-checkbox m-checkbox--check-bold m-checkbox--state-primary">
                                                {{ Form::checkbox('permissions[]', 'packages_add', $packages_add, ['id' => 'packages_add', 'class' => 'check_packages']) }}
                                                <label for="packages_add" style="height: 10px;"></label>
                                            </label>
                                        </td>
                                        <td>
                                            <label class="m-checkbox m-checkbox--check-bold m-checkbox--state-primary">
                                                {{ Form::checkbox('permissions[]', 'packages_edit', $packages_edit, ['id' => 'packages_edit', 'class' => 'check_packages']) }}
                                                <label for="packages_edit" style="height: 10px;"></label>
                                            </label>
                                        </td>
                                        <td></td>
                                        <td>
                                            <label class="m-checkbox m-checkbox--check-bold m-checkbox--state-primary">
                                                {{ Form::checkbox('permissions[]', 'packages_delete', $packages_delete, ['id' => 'packages_delete', 'class' => 'check_packages']) }}
                                                <label for="packages_delete" style="height: 10px;"></label>
                                            </label>
                                        </td>
                                    </tr>

                                    <tr class="pagetr">
                                        <td class="gray_check" rel="check_movies" style="cursor: pointer;">
                                            <input type="checkbox" class="hidden" id="check_movies_value">
                                            {{ trans('admin.movies') }}
                                        </td>
                                        <td>
                                            <label class="m-checkbox m-checkbox--check-bold m-checkbox--state-primary">
                                                {{ Form::checkbox('permissions[]', 'movies_all', $movies_all, ['id' => 'movies_all', 'class' => 'check_movies']) }}
                                                <label for="movies_all" style="height: 10px;"></label>
                                            </label>
                                        </td>
                                        <td>
                                            <label class="m-checkbox m-checkbox--check-bold m-checkbox--state-primary">
                                                {{ Form::checkbox('permissions[]', 'movies_add', $movies_add, ['id' => 'movies_add', 'class' => 'check_movies']) }}
                                                <label for="movies_add" style="height: 10px;"></label>
                                            </label>
                                        </td>
                                        <td>
                                            <label class="m-checkbox m-checkbox--check-bold m-checkbox--state-primary">
                                                {{ Form::checkbox('permissions[]', 'movies_edit', $movies_edit, ['id' => 'movies_edit', 'class' => 'check_movies']) }}
                                                <label for="movies_edit" style="height: 10px;"></label>
                                            </label>
                                        </td>
                                        <td></td>
                                        <td>
                                            <label class="m-checkbox m-checkbox--check-bold m-checkbox--state-primary">
                                                {{ Form::checkbox('permissions[]', 'movies_delete', $movies_delete, ['id' => 'movies_delete', 'class' => 'check_movies']) }}
                                                <label for="movies_delete" style="height: 10px;"></label>
                                            </label>
                                        </td>
                                    </tr>

                                    

                                    <tr class="pagetr">
                                        <td class="gray_check" rel="check_contact" style="cursor: pointer;">
                                            <input type="checkbox" class="hidden" id="check_contact_value">
                                            {{ trans('admin.contact') }}
                                        </td>
                                        <td>
                                            <label class="m-checkbox m-checkbox--check-bold m-checkbox--state-primary">
                                                {{ Form::checkbox('permissions[]', 'contact_all', $contact_all, ['id' => 'contact_all', 'class' => 'check_contact']) }}
                                                <label for="contact_all" style="height: 10px;"></label>
                                            </label>
                                        </td>
                                        <td></td>
                                        <td>
                                            <label class="m-checkbox m-checkbox--check-bold m-checkbox--state-primary">
                                                {{ Form::checkbox('permissions[]', 'contact_edit', $contact_edit, ['id' => 'contact_edit', 'class' => 'check_contact']) }}
                                                <label for="contact_edit" style="height: 10px;"></label>
                                            </label>
                                        </td>
                                        <td></td>
                                        <td>
                                            <label class="m-checkbox m-checkbox--check-bold m-checkbox--state-primary">
                                                {{ Form::checkbox('permissions[]', 'contact_delete', $contact_delete, ['id' => 'contact_delete', 'class' => 'check_contact']) }}
                                                <label for="contact_delete" style="height: 10px;"></label>
                                            </label>
                                        </td>
                                    </tr>

                                  
                                  
                                </table>
                            </div>
                        </div>
                    </div>

                    <div class="box-footer">
                        <button type="submit" class="btn btn-primary btn-lg"
                                style="font-size: 16px;">{{ trans('admin.save') }}</button>
                        <a href="{{ URL::to('admin/groups') }}" class="btn btn-default btn-lg"
                           style="font-size: 16px;">{{ trans('admin.back') }}</a>
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
