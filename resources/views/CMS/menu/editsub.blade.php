@extends('CMS.main')
@section('content')
    <div class="">
        <div class="page-title">
            <div class="title_left">
                <h3>Submenu <small>Edit</small></h3>
            </div>
        </div>
        <div class="clearfix"></div>
        <div class="row">
            <div class="col-md-12 col-sm-12 col-xs-12">
                <div class="x_panel">
                    <form class="form-horizontal form-label-left" action="{{route('CMS.menu.editSubs_post', $subs->id)}}" method="post" enctype="multipart/form-data">
                        {{csrf_field()}}
                        <div class="form-group">
                            <h2>Menu Name</h2>
                            <div class="col-md-12 col-sm-12 col-xs-12">
                                <select name="menu_id" class="form-control">
                                    <option></option>
                                    @foreach($menus as $menu)

                                    <option value="{{$menu->id}}">{{$menu->title}}</option>
                                    @endforeach
                                </select>
                            </div>
                        </div>

                        <div class="form-group">
                            <div class="col-md-55">
                                <div class="thumbnail">
                                    <div class="image view view-first">
                                        <img style="width: 100%;" src="{{asset('images/subs/' . \App\Models\News::find($subs->id)->img_url)}}" alt="image">
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="form-group">
                            <h2>Menu Title</h2>
                            <div class="col-sm-12">
                                <input id="title" name="title" type="text" class="form-control" value="{{$subs->title}}">
                            </div>
                        </div>
                        <div class="form-group">
                            <h2>Menu Content</h2>
                            <div class="col-sm-12">
                                <textarea name="content" id="summernote" class="summernote">
                                    {!! $subs->content !!}
                                </textarea>
                            </div>
                        </div>
                        <div class="form-group">
                            <h2>Fiyat</h2>
                            <div class="col-sm-12">
                                <input name="price" id="price"  type="number" class="form-control"  value="{{$subs->price}}>
                            </div>
                        </div>
                        <div class="form-group">
                            <h2>Menu Order</h2>
                            <div class="col-sm-12">
                                <input id="order" name="order" type="number" class="form-control" value="{{$subs->order}}">
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="col-sm-12">
                                <button type="submit" class="btn btn-success">Save</button>
                            </div>
                        </div>

                    </form>
                </div>
            </div>
        </div>
    </div>



@endsection


@section('scripts')
    <script src="{{asset('CMS/vendors/summernote/summernote.js')}}" ></script>
    <script>
        $(document).ready(function(){
            $('#summernote').summernote();
        });
    </script>
@endsection

@section('styles')
    <link href="{{asset('CMS/vendor/summernote/summernote.css')}}" rel="stylesheet" type="text/css">
@endsection

