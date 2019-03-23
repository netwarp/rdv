@extends('admin._layout')

@section('content')
    <div class="row">
        <div class="col-md-12">
            <ol class="breadcrumb">
                <li><a href="{{ action('Admin\AdminController@getIndex') }}">Home</a></li>
                <li><a href="{{ action('Admin\AdsController@index') }}">Ads</a></li>
                <li class="active">Edit</li>
            </ol>
        </div>
    </div>

    <div class="row">
        <div class="col-md-12">
            <div class="panel panel-default">
                <div class="panel-heading">Edit ad</div>

                <div class="panel-body">
                    <form action="{{ action('Admin\AdsController@update', $ad->id) }}" method="post">
                        {{ csrf_field() }}
                        {{ method_field('put') }}

                        <div class="form-group">
                            <label for="title">Title</label>
                            <input type="text" class="form-control" name="title" value="{{ $ad->data['title'] ?? '' }}">
                        </div>

                        <div class="form-group">
                            <label for="currency">Currency</label>
                            <input type="text" class="form-control" name="currency" value="{{ $ad->data['currency'] ?? '' }}">
                        </div>

                        <div class="form-group">
                            <label for="price">Price</label>
                            <input type="text" class="form-control" name="price" value="{{ $ad->data['price'] ?? '' }}">
                        </div>

                        <div class="form-group">
                            <label for="price">Name</label>
                            <input type="text" class="form-control" name="name" value="{{ $ad->data['name'] ?? '' }}">
                        </div>

                        <div class="form-group">
                            <label for="price">Email</label>
                            <input type="text" class="form-control" name="email" value="{{ $ad->data['email'] ?? '' }}">
                        </div>

                        <div class="form-group">
                            <label for="price">Type</label>
                            <input type="text" class="form-control" name="type" value="{{ $ad->data['type'] ?? '' }}">
                        </div>

                        <div class="form-group">
                            <label for="price">Location</label>
                            <input type="text" class="form-control" name="location" value="{{ $ad->data['location'] ?? '' }}">
                        </div>

                        <div class="form-group">
                            <label for="price">public_id</label>
                            <input type="text" class="form-control" name="public_id" value="{{ $ad->data['public_id'] ?? '' }}">
                        </div>

                        <div class="form-group">
                            <label for="message">Message</label>
                            <textarea name="message" rows="4" class="form-control">{{ $ad->data['message'] ?? '' }}</textarea>
                        </div>

                        <div class="form-group">
                            <button class="btn btn-primary">Send</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection