@extends('admin.layouts.app')


@section('main_content')
<div class="section-body">
    <div class="row">
        <div class="col-6">
            <div class="card">
                <div class="card-body">
                    <form action="{{route('admin.home_advertisement')}}" method="post" enctype="multipart/form-data">
                        <input type="hidden" class="form-control" name="ad_id" value="{{$ad->id}}">

                        @csrf
                        <div class="form-group ">
                            <label>Current Photo</label>
                            <div>
                                <img src="{{asset('uploads/'.$ad->above_search_at)}}" name="above_search_ad_old_url"
                                    style="width:100%">
                            </div> @error('above_search_ad_url')
                            <div class="alert alert-danger">{{$message}}</div>
                            @enderror
                            <div class=" form-group">
                                <label>Url</label>
                                <input type="text" class="form-control" name="above_search_ad_url" value="">
                            </div>
                            <div class="form-group ">
                                <label>Change Photo</label>
                                <div>
                                    <input type="file" name="above_search_ad">

                                </div>
                            </div>
                            <select name="status" class="form-control">
                                <option value="show">show</option>
                                <option value="Hide">hide</option>
                            </select>
                            <div class="form-group">
                                <button type="submit" class="btn btn-primary">update</button>
                            </div>
                    </form>
                </div>

            </div>


        </div>

    </div>

    @endsection