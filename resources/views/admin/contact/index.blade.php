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
            {{trans('admin.contact')}}
        </h1>
        <ol class="breadcrumb">
            <li class="breadcrumb-item {{$pull}}"><a href="{{URL::to('admin')}}"> {{trans('admin.home')}}</a></li>
            <li class="breadcrumb-item active {{$pull}}">{{trans('admin.contact')}}</li>
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
                        {!! Form::open([
                            'method' => 'GET'
                        ]) !!}
                        <div class="row">
                            <div class="col-lg-4">
                                <label for=""></label>
                                {!! Form::select('status',['new'=> trans('admin.New'),'viewed'=>trans('admin.viewed')],request()->input('status'),[
                                    'class' => 'form-control select2',
                                    'placeholder' => trans('admin.message_status')
                                ]) !!}
                            </div>
                            <div class="col-lg-2">
                                <label for=""></label>
                                <button class="btn btn-flat btn-block btn-primary">{{trans('admin.search')}}</button>
                            </div>
                        </div>
                        {!! Form::close() !!}
                        <br/>
                    </div>
                    <div class="box-body">
                        <table id="{{$datatable}}"
                               class="table table-bordered table-hover display nowrap margin-top-10 table-responsive">
                            <thead>
                            <tr>
                                <th class="{{$text}}">#</th>
                                <th class="{{$text}}">{{trans('admin.name')}}</th>
                                <th class="{{$text}}">{{trans('admin.message')}}</th>
                                <th class="{{$text}}">{{trans('admin.date')}}</th>
                                <th class="{{$text}}">{{trans('admin.contact_active')}}</th>
                                <th class="{{$text}}">{{trans('admin.reply')}}</th>
                                <th class="{{$text}}">{{trans('admin.delete')}}</th>
                            </tr>
                            </thead>
                            <tbody>
                            <?php $i = 1; ?>
                            @foreach($contacts as $contact)
                                <tr>
                                    <td>{{$i}}</td>
                                    <td>{{$contact['name']}}</td>
                                    <td>{{$contact['message']}}</td>
                                    <td>{{$contact['created_at']}}</td>
                                    <td>
                                        @if($contact['seen'] == "yes" && $contact['reply'] != "")
                                            {{trans('admin.seen_reply')}}
                                        @elseif($contact['seen'] == "yes" && $contact['reply'] == "")
                                            {{trans('admin.seen_reply_not')}}
                                        @elseif($contact['seen'] == "no" )
                                            {{trans('admin.seen_not')}}
                                        @endif
                                    </td>
                                    <td>
                                        {{ Form::open(array('url' =>'admin/contact/'.$contact->id.'/edit', 'method' => 'GET')) }}
                                        <button type="submit" class="btn default btn-sm btn-info"><i
                                                class="fa fa-edit"></i> {{trans('admin.reply')}} </button>
                                        {{ Form::close() }}
                                    </td>
                                  

                                    <td>
                                        <form action="{{route('contact.destroy',$contact->id)}}" method="POST">
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


    <div class="modal fade" id="Modal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
         aria-hidden="true">
        <div class="modal-dialog" role="document">
            {{ Form::open(array('url' =>'admin/delete_all/contact', 'method' => 'POST')) }}
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title">{{trans('admin.delete_all')}}</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <select id="ids" name="ids[]" class="form-control select2" multiple="multiple"
                            data-placeholder="{{trans('admin.delete_all')}}" style="width: 100%;" required="">
                        @foreach($contacts as $one)
                            <option value="{{$one['id']}}">{{$one['name'].' '.$one['phone']}}</option>
                        @endforeach
                    </select>
                </div>
                <div class="modal-footer">
                    <button type="submit" class="btn btn-primary {{$pull}}">{{trans('admin.confrim')}} </button>
                    <button type="button" class="btn btn-danger {{$pulll}}"
                            data-dismiss="modal">{{trans('admin.cancel')}}</button>
                </div>
            </div>
            {{ Form::close() }}
        </div>
    </div>
@endsection
