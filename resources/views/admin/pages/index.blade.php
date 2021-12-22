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
        {{trans('admin.pages')}}
    </h1>
    <ol class="breadcrumb">
        <li class="breadcrumb-item {{$pull}}"><a href="{{URL::to('admin')}}"> {{trans('admin.home')}}</a></li>
        <li class="breadcrumb-item active {{$pull}}">{{trans('admin.pages')}}</li>
    </ol>
</section>

<!-- Main content -->
<section class="content">
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
                <div class="box-header">
                    <a href="{{URL::to('admin/pages/create')}}" class="btn btn-lg bg-black">{{trans('admin.page_add')}}</a>
                   
                 </div>
                <div class="box-body">
                    <table id="{{$datatable}}" class="table table-bordered table-hover display nowrap margin-top-10 table-responsive">
                        <thead>
                            <tr>
                                <th class="{{$text}}">#</th>
                                <th class="{{$text}}">{{trans('admin.page_title_ar')}}</th>
                                <th class="{{$text}}">{{trans('admin.page_title_en')}}</th>
                                <th class="{{$text}}">{{trans('admin.image')}}</th>
                                <th class="{{$text}}">{{trans('admin.edit')}}</th>
                                <th class="{{$text}}">{{trans('admin.delete')}}</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php $i = 1; ?>
                            @foreach($pages as $page)
                            <tr>
                                <td>{{$i}}</td>
                                <td>{{$page['ar_title']}}</td>
                                <td>{{$page['en_title']}}</td>
                                <td> <img src="{{URL::to('image/'.$page['image'])}}" style="height: 80px; width: 100px;"/></td>
                                
                                <td>
                                    {{ Form::open(array('url' =>'admin/pages/'.$page->id.'/edit', 'method' => 'GET')) }}
                                    <button  type="submit" class="btn default btn-sm btn-info"><i class="fa fa-edit"></i> {{trans('admin.edit')}} </button>
                                    {{ Form::close() }}
                                </td>
                             
                                <td>
                                    <form action="{{route('pages.destroy',$page->id)}}" method="POST">
                                        @method('DELETE')
                                        @csrf

                                        <button class="btn default btn-sm bg-red" onclick="return confirm('Are you sure you want to delete this item?');">{{trans('admin.delete')}}</button>

                                    </form>
                                </td>
                            </tr>
                            <?php $i++; ?>
                            @endforeach
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


<div class="modal fade" id="Modal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        {{ Form::open(array('url' =>'admin/delete_all/pages', 'method' => 'POST')) }}
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title">{{trans('admin.delete_all')}}</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <select id="ids" name="ids[]" class="form-control select2" multiple="multiple" data-placeholder="{{trans('admin.delete_all')}}" style="width: 100%;" required="">
                    @foreach($pages as $one)
                    @if($one['id'] > 6)
                    <option value="{{$one['id']}}">{{$one[$lang.'_title']}}</option>
                    @endif
                    @endforeach
                </select>
            </div>
            <div class="modal-footer">
                <button  type="submit" class="btn btn-primary {{$pull}}">{{trans('admin.confrim')}} </button>
                <button type="button" class="btn btn-danger {{$pulll}}" data-dismiss="modal">{{trans('admin.cancel')}}</button>
            </div>
        </div>
        {{ Form::close() }}
    </div>
</div>
@endsection