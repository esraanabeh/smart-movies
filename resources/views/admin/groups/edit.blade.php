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
                                = $site_edit = $social_media_all = $social_media_edit = $social_media_add = $guest_all = $banks_all = $banks_add
                                = $banks_edit = $banks_delete = $log_all = $notifications_all = $notifications_add = $groups_all
                                = $groups_add = $groups_edit = $groups_delete = $admins_all = $admins_add = $admins_edit =
                            $admins_delete = $users_all = $users_add = $users_edit = $users_delete = $reports_all = $ads_all =
                            $ads_add = $ads_edit = $ads_delete = $mall_all = $mall_add = $mall_edit = $mall_delete =
                            $tutorials_all = $tutorials_add = $tutorials_edit = $tutorials_delete = $wishlist_all = $wishlist_delete = $slider_all = $slider_add
                                = $slider_edit = $slider_delete = $pages_all = $pages_add = $pages_edit = $pages_delete= $locations_all = $locations_add = $locations_edit = $locations_delete =
                            $contact_all = $contact_edit = $contact_delete = $category_all = $category_add = $category_edit
                                = $category_delete = $product_brand_all = $product_brand_add = $product_brand_edit =
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
                                elseif ($pre['permission'] == 'guest_all') {
                                    $guest_all = true;
                                } elseif ($pre['permission'] == 'teams_all') {
                                    $teams_all = true;
                                } elseif ($pre['permission'] == 'teams_add') {
                                    $teams_add = true;
                                } elseif ($pre['permission'] == 'teams_edit') {
                                    $teams_edit = true;
                                } elseif ($pre['permission'] == 'teams_delete') {
                                    $teams_delete = true;
                                } elseif ($pre['permission'] == 'product_type_all') {
                                    $product_type_all = true;
                                } elseif ($pre['permission'] == 'product_brand_add') {
                                    $product_brand_add = true;
                                } elseif ($pre['permission'] == 'product_brand_all') {
                                    $product_brand_all = true;
                                    
                                }elseif ($pre['permission'] == 'product_brand_edit') {
                                    $product_brand_edit = true;
                                    
                                }elseif ($pre['permission'] == 'product_brand_delete') {
                                    $product_brand_delete = true;
                                    
                                }  elseif ($pre['permission'] == 'wishlist_all') {
                                    $wishlist_all = true;
                                } elseif ($pre['permission'] == 'wishlist_delete') {
                                    $wishlist_delete = true;
                                } elseif ($pre['permission'] == 'product_type_add') {
                                    $product_type_add = true;
                                } elseif ($pre['permission'] == 'product_type_edit') {
                                    $product_type_edit = true;
                                } elseif ($pre['permission'] == 'product_type_delete') {
                                    $product_type_delete = true;
                                } elseif ($pre['permission'] == 'log_all') {
                                    $log_all = true;
                                } elseif ($pre['permission'] == 'notifications_all') {
                                    $notifications_all = true;
                                } elseif ($pre['permission'] == 'notifications_add') {
                                    $notifications_add = true;
                                } elseif ($pre['permission'] == 'groups_all') {
                                    $groups_all = true;
                                } elseif ($pre['permission'] == 'groups_add') {
                                    $groups_add = true;
                                } elseif ($pre['permission'] == 'groups_edit') {
                                    $groups_edit = true;
                                } elseif ($pre['permission'] == 'groups_delete') {
                                    $groups_delete = true;
                                } elseif ($pre['permission'] == 'photo_all') {
                                    $photo_all = true;
                                } elseif ($pre['permission'] == 'photo_add') {
                                    $photo_add = true;
                                } elseif ($pre['permission'] == 'photo_edit') {
                                    $photo_edit = true;
                                } elseif ($pre['permission'] == 'photo_delete') {
                                    $photo_delete = true;
                                } elseif ($pre['permission'] == 'admins_all') {
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
                                } elseif ($pre['permission'] == 'reports_all') {
                                    $reports_all = true;
                                } elseif ($pre['permission'] == 'ads_all') {
                                    $ads_all = true;
                                } elseif ($pre['permission'] == 'ads_add') {
                                    $ads_add = true;
                                } elseif ($pre['permission'] == 'ads_edit') {
                                    $ads_edit = true;
                                } elseif ($pre['permission'] == 'ads_delete') {
                                    $ads_delete = true;
                                } elseif ($pre['permission'] == 'mall_all') {
                                    $mall_all = true;
                                } elseif ($pre['permission'] == 'mall_add') {
                                    $mall_add = true;
                                } elseif ($pre['permission'] == 'mall_edit') {
                                    $mall_edit = true;
                                } elseif ($pre['permission'] == 'mall_delete') {
                                    $mall_delete = true;
                                } elseif ($pre['permission'] == 'tutorials_all') {
                                    $tutorials_all = true;
                                } elseif ($pre['permission'] == 'tutorials_add') {
                                    $tutorials_add = true;
                                } elseif ($pre['permission'] == 'tutorials_edit') {
                                    $tutorials_edit = true;
                                } elseif ($pre['permission'] == 'tutorials_delete') {
                                    $tutorials_delete = true;
                                } elseif ($pre['permission'] == 'slider_all') {
                                    $slider_all = true;
                                } elseif ($pre['permission'] == 'slider_add') {
                                    $slider_add = true;
                                } elseif ($pre['permission'] == 'slider_edit') {
                                    $slider_edit = true;
                                } elseif ($pre['permission'] == 'slider_delete') {
                                    $slider_delete = true;
                                }elseif ($pre['permission'] == 'gallery_all') {
                                    $gallery_all = true;
                                } elseif ($pre['permission'] == 'gallery_add') {
                                    $gallery_add = true;
                                } elseif ($pre['permission'] == 'gallery_edit') {
                                    $gallery_edit = true;
                                } elseif ($pre['permission'] == 'gallery_delete') {
                                    $gallery_delete = true;
                                } elseif ($pre['permission'] == 'pages_all') {
                                    $pages_all = true;
                                } elseif ($pre['permission'] == 'pages_add') {
                                    $pages_add = true;
                                } elseif ($pre['permission'] == 'pages_edit') {
                                    $pages_edit = true;
                                } elseif ($pre['permission'] == 'pages_delete') {
                                    $pages_delete = true;
                                } elseif ($pre['permission'] == 'locations_all') {
                                    $locations_all = true;
                                } elseif ($pre['permission'] == 'locations_add') {
                                    $locations_add = true;
                                } elseif ($pre['permission'] == 'locations_edit') {
                                    $locations_edit = true;
                                } elseif ($pre['permission'] == 'locations_delete') {
                                    $locations_delete = true;
                                }   elseif ($pre['permission'] == 'services_all') {
                                    $services_all = true;
                                } elseif ($pre['permission'] == 'services_add') {
                                    $services_add = true;
                                } elseif ($pre['permission'] == 'services_edit') {
                                    $services_edit = true;
                                } elseif ($pre['permission'] == 'services_delete') {
                                    $services_delete = true;
                                
                                } elseif ($pre['permission'] == 'newsletter') {
                                    $newsletter = true;
                                } elseif ($pre['permission'] == 'contact_all') {
                                    $contact_all = true;
                                } elseif ($pre['permission'] == 'contact_edit') {
                                    $contact_edit = true;
                                } elseif ($pre['permission'] == 'contact_delete') {
                                    $contact_delete = true;
                                } 
                                elseif ($pre['permission'] == 'consultant_all') {
                                    $consultant_all = true;
                                } elseif ($pre['permission'] == 'consultant_edit') {
                                    $consultant_edit = true;
                                } elseif ($pre['permission'] == 'consultant_delete') {
                                    $consultant_delete = true;
                                } elseif ($pre['permission'] == 'clients_all') {
                                    $clients_all = true;
                                } elseif ($pre['permission'] == 'clients_add') {
                                    $clients_add = true;
                                } elseif ($pre['permission'] == 'clients_edit') {
                                    $clients_edit = true;
                                } elseif ($pre['permission'] == 'clients_delete') {
                                    $clients_delete = true;
                                } elseif ($pre['permission'] == 'colors_all') {
                                    $colors_all = true;
                                } elseif ($pre['permission'] == 'colors_add') {
                                    $colors_add = true;
                                } elseif ($pre['permission'] == 'colors_edit') {
                                    $colors_edit = true;
                                } elseif ($pre['permission'] == 'colors_delete') {
                                    $colors_delete = true;
                                } elseif ($pre['permission'] == 'stores_all') {
                                    $stores_all = true;
                                } elseif ($pre['permission'] == 'stores_add') {
                                    $stores_add = true;
                                } elseif ($pre['permission'] == 'stores_edit') {
                                    $stores_edit = true;
                                } elseif ($pre['permission'] == 'stores_delete') {
                                    $stores_delete = true;
                                } elseif ($pre['permission'] == 'offers_all') {
                                    $offers_all = true;
                                } elseif ($pre['permission'] == 'offers_add') {
                                    $offers_add = true;
                                } elseif ($pre['permission'] == 'offers_edit') {
                                    $offers_edit = true;
                                } elseif ($pre['permission'] == 'offers_delete') {
                                    $offers_delete = true;
                                } elseif ($pre['permission'] == 'orders_all') {
                                    $orders_all = true;
                                } elseif ($pre['permission'] == 'orders_add') {
                                    $orders_add = true;
                                } elseif ($pre['permission'] == 'orders_edit') {
                                    $orders_edit = true;
                                } elseif ($pre['permission'] == 'orders_delete') {
                                    $orders_delete = true;
                                } elseif ($pre['permission'] == 'areas_all') {
                                    $areas_all = true;
                                } elseif ($pre['permission'] == 'areas_add') {
                                    $areas_add = true;
                                } elseif ($pre['permission'] == 'areas_edit') {
                                    $areas_edit = true;
                                } elseif ($pre['permission'] == 'areas_delete') {
                                    $areas_delete = true;
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
                                        <td class="gray_check" rel="check_log" style="cursor: pointer;">
                                            <input type="checkbox" class="hidden" id="check_log_value">
                                            {{ trans('admin.log') }}
                                        </td>
                                        <td>
                                            <label class="m-checkbox m-checkbox--check-bold m-checkbox--state-primary">
                                                {{ Form::checkbox('permissions[]', 'log_all', $log_all, ['id' => 'log_all', 'class' => 'check_log']) }}
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
                                        <td class="gray_check" rel="check_slider" style="cursor: pointer;">
                                            <input type="checkbox" class="hidden" id="check_slider_value">
                                            {{ trans('admin.slider') }}
                                        </td>
                                        <td>
                                            <label class="m-checkbox m-checkbox--check-bold m-checkbox--state-primary">
                                                {{ Form::checkbox('permissions[]', 'slider_all', $slider_all, ['id' => 'slider_all', 'class' => 'check_slider']) }}
                                                <label for="slider_all" style="height: 10px;"></label>
                                            </label>
                                        </td>
                                        <td>
                                            <label class="m-checkbox m-checkbox--check-bold m-checkbox--state-primary">
                                                {{ Form::checkbox('permissions[]', 'slider_add', $slider_add, ['id' => 'slider_add', 'class' => 'check_slider']) }}
                                                <label for="slider_add" style="height: 10px;"></label>
                                            </label>
                                        </td>
                                        <td>
                                            <label class="m-checkbox m-checkbox--check-bold m-checkbox--state-primary">
                                                {{ Form::checkbox('permissions[]', 'slider_edit', $slider_edit, ['id' => 'slider_edit', 'class' => 'check_slider']) }}
                                                <label for="slider_edit" style="height: 10px;"></label>
                                            </label>
                                        </td>
                                        <td></td>
                                        <td>
                                            <label class="m-checkbox m-checkbox--check-bold m-checkbox--state-primary">
                                                {{ Form::checkbox('permissions[]', 'slider_delete', $slider_delete, ['id' => 'slider_delete', 'class' => 'check_slider']) }}
                                                <label for="slider_delete" style="height: 10px;"></label>
                                            </label>
                                        </td>
                                    </tr>
                                    <tr class="pagetr">
                                        <td class="gray_check" rel="check_gallery" style="cursor: pointer;">
                                            <input type="checkbox" class="hidden" id="check_gallery_value">
                                            {{ trans('admin.gallery') }}
                                        </td>
                                        <td>
                                            <label class="m-checkbox m-checkbox--check-bold m-checkbox--state-primary">
                                                {{ Form::checkbox('permissions[]', 'gallery_all', $gallery_all, ['id' => 'gallery_all', 'class' => 'check_gallery']) }}
                                                <label for="gallery_all" style="height: 10px;"></label>
                                            </label>
                                        </td>
                                        <td>
                                            <label class="m-checkbox m-checkbox--check-bold m-checkbox--state-primary">
                                                {{ Form::checkbox('permissions[]', 'gallery_add', $gallery_add, ['id' => 'gallery_add', 'class' => 'check_gallery']) }}
                                                <label for="gallery_add" style="height: 10px;"></label>
                                            </label>
                                        </td>
                                        <td>
                                            <label class="m-checkbox m-checkbox--check-bold m-checkbox--state-primary">
                                                {{ Form::checkbox('permissions[]', 'gallery_edit', $gallery_edit, ['id' => 'gallery_edit', 'class' => 'check_gallery']) }}
                                                <label for="gallery_edit" style="height: 10px;"></label>
                                            </label>
                                        </td>
                                        <td></td>
                                        <td>
                                            <label class="m-checkbox m-checkbox--check-bold m-checkbox--state-primary">
                                                {{ Form::checkbox('permissions[]', 'gallery_delete', $gallery_delete, ['id' => 'gallery_delete', 'class' => 'check_gallery']) }}
                                                <label for="gallery_delete" style="height: 10px;"></label>
                                            </label>
                                        </td>
                                    </tr>

                                    <tr class="pagetr">
                                        <td class="gray_check" rel="check_photo" style="cursor: pointer;">
                                            <input type="checkbox" class="hidden" id="check_photo_value">
                                            {{ trans('admin.photo') }}
                                        </td>
                                        <td>
                                            <label class="m-checkbox m-checkbox--check-bold m-checkbox--state-primary">
                                                {{ Form::checkbox('permissions[]', 'photo_all', $photo_all, ['id' => 'photo_all', 'class' => 'check_photo']) }}
                                                <label for="photo_all" style="height: 10px;"></label>
                                            </label>
                                        </td>
                                        <td>
                                            <label class="m-checkbox m-checkbox--check-bold m-checkbox--state-primary">
                                                {{ Form::checkbox('permissions[]', 'photo_add', $photo_add, ['id' => 'photo_add', 'class' => 'check_photo']) }}
                                                <label for="photo_add" style="height: 10px;"></label>
                                            </label>
                                        </td>
                                        <td>
                                            <label class="m-checkbox m-checkbox--check-bold m-checkbox--state-primary">
                                                {{ Form::checkbox('permissions[]', 'photo_edit', $photo_edit, ['id' => 'photo_edit', 'class' => 'check_photo']) }}
                                                <label for="photo_edit" style="height: 10px;"></label>
                                            </label>
                                        </td>
                                        <td></td>
                                        <td>
                                            <label class="m-checkbox m-checkbox--check-bold m-checkbox--state-primary">
                                                {{ Form::checkbox('permissions[]', 'photo_delete', $photo_delete, ['id' => 'photo_delete', 'class' => 'check_photo']) }}
                                                <label for="photo_delete" style="height: 10px;"></label>
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
                                        <td class="gray_check" rel="check_services" style="cursor: pointer;">
                                            <input type="checkbox" class="hidden" id="check_services_value">
                                            {{ trans('admin.services') }}
                                        </td>
                                        <td>
                                            <label class="m-checkbox m-checkbox--check-bold m-checkbox--state-primary">
                                                {{ Form::checkbox('permissions[]', 'services_all', $services_all, ['id' => 'services_all', 'class' => 'check_services']) }}
                                                <label for="services_all" style="height: 10px;"></label>
                                            </label>
                                        </td>
                                        <td>
                                            <label class="m-checkbox m-checkbox--check-bold m-checkbox--state-primary">
                                                {{ Form::checkbox('permissions[]', 'services_add', $services_add, ['id' => 'services_add', 'class' => 'check_services']) }}
                                                <label for="services_add" style="height: 10px;"></label>
                                            </label>
                                        </td>
                                        <td>
                                            <label class="m-checkbox m-checkbox--check-bold m-checkbox--state-primary">
                                                {{ Form::checkbox('permissions[]', 'services_edit', $services_edit, ['id' => 'services_edit', 'class' => 'check_services']) }}
                                                <label for="services_edit" style="height: 10px;"></label>
                                            </label>
                                        </td>
                                        <td></td>
                                        <td>
                                            <label class="m-checkbox m-checkbox--check-bold m-checkbox--state-primary">
                                                {{ Form::checkbox('permissions[]', 'services_delete', $services_delete, ['id' => 'services_delete', 'class' => 'check_services']) }}
                                                <label for="services_delete" style="height: 10px;"></label>
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
                                        <td class="gray_check" rel="check_clients" style="cursor: pointer;">
                                            <input type="checkbox" class="hidden" id="check_clients_value">
                                            {{ trans('admin.clients') }}
                                        </td>
                                        <td>
                                            <label class="m-checkbox m-checkbox--check-bold m-checkbox--state-primary">
                                                {{ Form::checkbox('permissions[]', 'clients_all', $clients_all, ['id' => 'clients_all', 'class' => 'check_clients']) }}
                                                <label for="clients_all" style="height: 10px;"></label>
                                            </label>
                                        </td>
                                        <td>
                                            <label class="m-checkbox m-checkbox--check-bold m-checkbox--state-primary">
                                                {{ Form::checkbox('permissions[]', 'clients_add', $clients_add, ['id' => 'clients_add', 'class' => 'check_clients']) }}
                                                <label for="clients_add" style="height: 10px;"></label>
                                            </label>
                                        </td>
                                        <td>
                                            <label class="m-checkbox m-checkbox--check-bold m-checkbox--state-primary">
                                                {{ Form::checkbox('permissions[]', 'clients_edit', $clients_edit, ['id' => 'clients_edit', 'class' => 'check_clients']) }}
                                                <label for="clients_edit" style="height: 10px;"></label>
                                            </label>
                                        </td>
                                        <td></td>
                                        <td>
                                            <label class="m-checkbox m-checkbox--check-bold m-checkbox--state-primary">
                                                {{ Form::checkbox('permissions[]', 'clients_delete', $clients_delete, ['id' => 'clients_delete', 'class' => 'check_clients']) }}
                                                <label for="clients_delete" style="height: 10px;"></label>
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
                                    <tr class="pagetr">
                                        <td class="gray_check" rel="check_consultant" style="cursor: pointer;">
                                            <input type="checkbox" class="hidden" id="check_consultant_value">
                                            {{ trans('admin.consultant') }}
                                        </td>
                                        <td>
                                            <label class="m-checkbox m-checkbox--check-bold m-checkbox--state-primary">
                                                {{ Form::checkbox('permissions[]', 'consultant_all', $consultant_all, ['id' => 'consultant_all', 'class' => 'check_consultant']) }}
                                                <label for="consultant_all" style="height: 10px;"></label>
                                            </label>
                                        </td>
                                        <td></td>
                                        <td>
                                            <label class="m-checkbox m-checkbox--check-bold m-checkbox--state-primary">
                                                {{ Form::checkbox('permissions[]', 'consultant_edit', $consultant_edit, ['id' => 'consultant_edit', 'class' => 'check_consultant']) }}
                                                <label for="consultant_edit" style="height: 10px;"></label>
                                            </label>
                                        </td>
                                        <td></td>
                                        <td>
                                            <label class="m-checkbox m-checkbox--check-bold m-checkbox--state-primary">
                                                {{ Form::checkbox('permissions[]', 'consultant_delete', $consultant_delete, ['id' => 'consultant_delete', 'class' => 'check_consultant']) }}
                                                <label for="consultant_delete" style="height: 10px;"></label>
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
