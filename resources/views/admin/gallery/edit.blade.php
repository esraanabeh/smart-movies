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
            {{trans('admin.gallery')}}
        </h1>
        <ol class="breadcrumb">
            <li class="breadcrumb-item {{$pull}}"><a href="{{URL::to('admin')}}"> {{trans('admin.home')}}</a></li>
            <li class="breadcrumb-item {{$pull}}"><a href="{{URL::to('admin/gallery')}}"> {{trans('admin.gallery')}}</a>
            </li>
            <li class="breadcrumb-item active {{$pull}}">{{trans('admin.gallery_edit')}}</li>
        </ol>
    </section>

    <section class="content">

        <div class="box box-default">
            <div class="box-header with-border">
                <h3 class="box-title">{{trans('admin.gallery_edit')}} : {{$gallery[$lang.'_name']}}</h3>

                <div class="box-tools pull-right">
                    <button type="button" class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i>
                    </button>
                </div>
            </div>

            <form action="{{URL::to('admin/gallery/'.$gallery->id)}}" method="post" enctype="multipart/form-data">
                {{ method_field('PATCH') }}
                {{ csrf_field() }}

                <div class="box-body">
                    <div class="row">
                        <div class="col-12">
                            @if (Session::has('message'))
                                <div class="row">
                                    <div class="col-lg-12">
                                        <div class="alert alert-success alert-dismissible">
                                            {{ Session::get('message')}}
                                            <button type="button" class="close" data-dismiss="alert" aria-hidden="true">
                                                ×
                                            </button>
                                        </div>
                                    </div>
                                </div>
                            @endif
{{-- 
                            <div class="form-group row">
                                <label for="type" class="col-sm-4 col-form-label">{{trans('admin.type')}}</label>
                                <div class="col-sm-8">
                                    {{ Form::select('type',['image'=>trans('admin.image') , 'video'=>trans('admin.video')], $gallery['type'], ['class'=>'form-control select2','id'=>'type']) }}
                                    @if($errors->has('type'))
                                        <div class="alert alert-danger">{{$errors->first('type')}}</div>
                                    @endif
                                </div>
                            </div> --}}

                            <div class="form-group row">
                                <label for="ar_title" class="col-sm-3 col-form-label">{{trans('admin.page_title_ar')}}</label>
                                <div class="col-sm-9">
                                    {{ Form::text('ar_title', $gallery['ar_title'], ['class'=>'form-control','id'=>'ar_title']) }}
                                    @if($errors->has('ar_title'))
                                    <div class="alert alert-danger">{{$errors->first('ar_title')}}</div>
                                    @endif
                                </div>
                            </div>
    
                            <div class="form-group row">
                                <label for="en_title" class="col-sm-3 col-form-label">{{trans('admin.page_title_en')}}</label>
                                <div class="col-sm-9">
                                    {{ Form::text('en_title', $gallery['en_title'], ['class'=>'form-control','id'=>'en_title']) }}
                                    @if($errors->has('en_title'))
                                    <div class="alert alert-danger">{{$errors->first('en_title')}}</div>
                                    @endif
                                </div>
                            </div>
                            <div id ="video" class="form-group row">
                                <label for="file"
                                       class="col-sm-3 col-form-label file">{{trans('admin.video')}}
                                    <span dir="ltr"></span></label>
                            <div class="col-sm-9">
                                {{ Form::text('file',  $gallery['file'], ['class'=>'form-control','id'=>'file']) }}
                                @if($errors->has('file'))
                                <div class="alert alert-danger">{{$errors->first('file')}}</div>
                                @endif
                            </div>
                        </div>

                            <div class="form-group row">
                                <label for="input_4"
                                       class="col-sm-4 col-form-label image_current_ar">{{trans('admin.file_current')}}</label>
                                <div class="col-sm-8">
                                    {{-- @if($gallery->type == "image") --}}
                                    {{-- <img src="{{URL::to('upload/gallery/'.$gallery['file'])}}"
                                      width="150px" height="150px"   class="img-thumbnail image_current">

                                      @else --}}
                                      {{-- <video width="150" height="120" controls  >
                                      <source src="{{URL::to('upload/gallery/'.$gallery['file'])}}" >
                                      </video> --}}
                                      <iframe width="150" height="120" src="{{ $gallery->file }}" frameborder="0" allowfullscreen>
                                    </iframe>
                                     
                                      {{-- @endif --}}
                                </div>
                            </div>

                            
                        </div>
                    </div>
                </div>

                <div class="box-footer">
                    <button type="submit" class="btn btn-primary btn-lg"
                            style="font-size: 16px;">{{trans('admin.save')}}</button>
                    <a href="{{URL::to('admin/gallery')}}" class="btn btn-default btn-lg"
                       style="font-size: 16px;">{{trans('admin.back')}}</a>
                </div>

            </form>

        </div>

    </section>
@endsection

{{-- @section('scripts')
<script>
    $("#image").hide();
  $("#video").hide();
  $('#type').on('change', function() {
      if (this.value == 'image') {
          $("#image").show();
          $("#video").hide();
         
      }
      
       else {
          $("#image").hide();
          $("#video").show();


          
      }
  });

</script>
@endsection --}}