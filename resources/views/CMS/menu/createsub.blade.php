@extends('CMS.main')
@section('content')
    <div class="">
        <div class="page-title">
            <div class="title_left">
                <h3>Submenu <small>Add</small></h3>
            </div>
        </div>
        <div class="clearfix"></div>
        <div class="row">
            <div class="col-md-12 col-sm-12 col-xs-12">
                <div class="x_panel">

                    <form class="form-horizontal form-label-left" action="{{route('CMS.menu.createSub_post')}}"  method="post" enctype="multipart/form-data" >
                       {{csrf_field()}}

                        <div class="form-group">
                            <h2>Menu Name</h2>
                            <div class="col-md-12 col-sm-12 col-xs-12">
                                <select name="menu_id" id="menu_id" class="form-control">
                                    <option></option>
                                </select>
                            </div>
                        </div>

                        <div class="form-group">
                            <h2>Menu SubName</h2>
                            <div class="col-md-12 col-sm-12 col-xs-12">
                                <select name="sub_cat" id="sub_cat" class="form-control">
                                    <option></option>
                                </select>
                            </div>
                        </div>

                        <div class="form-group">
                            <h2>New Image</h2>
                            <div class="col-sm-12">
                                <input type="file"  id="img_url"  name="img_url" class="btn btn-default btn-sm" title="Upload New Image">
                            </div>
                        </div>
                        <div class="form-group">
                            <h2>Menu Title</h2>
                            <div class="col-sm-12">
                                <input id="title" name="title" type="text" class="form-control" placeholder="Menu Title">
                            </div>
                        </div>
                        <div class="form-group">
                            <h2>Menu Content</h2>
                            <div class="col-sm-12">
                                <textarea name="content" id="summernote" class="summernote"></textarea>
                            </div>
                        </div>
                        <div class="form-group">
                            <h2>Fiyat</h2>
                            <div class="col-sm-12">
                                <input name="price" id="price"  type="number" class="form-control"  placeholder="price">
                            </div>
                        </div>
                        <div class="form-group">
                            <h2>Menu Order</h2>
                            <div class="col-sm-12">
                                <input name="order" id="order" type="number" class="form-control" placeholder="New Order">
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="col-sm-12">
                                <button type="submit" value="register" class="btn btn-success">Save</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>

@endsection

@section('scripts')
    <script>
    $(document).ready(function(){
        $.ajax({
            type:"get",
            url:"{{route('CMS.menu.ajax_menus_get')}}",
            success:function (result) {
                $(result).each(function (index) {
                    $('#menu_id').append('<option value="' + result[index]['id'] + '">' + result[index]['title'] + '</option>');

                });
            }
        });
    });
        $('#menu_id').on('change', function () {
            $('#sub_cat').empty();
            $.ajax({
                type:"get",
                url:"/panel/menu/ajaxRequestSubMenus/" + $(this).val(),
                data: $(this).val(),
                success:function (subs) {
                    $(subs).each(function (index) {
                        $('#sub_cat').append('<option value="' + subs[index]['id'] + '">' + subs[index]['title'] + '</option>');
                    });
                }
            });

        });
    </script>
@endsection

@section('styles')
    <link href="{{asset('CMS/vendor/summernote/summernote.css')}}" rel="stylesheet" type="text/css">
@endsection
