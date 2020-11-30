@extends('layouts.auth')

@section('title', __('login.title'))

@section('css', null)

@section('content')
    <div class="p-5">
        <div class="text-center">
            <h1 class="h4 text-gray-900 mb-4">@lang('login.heading')</h1>
        </div>
        @error('auth')
        <div class="alert alert-danger">{{ $message }}</div>
        @enderror
        <form class="user" method="post" action="{{ route('login') }}">
            @csrf
            <div class="form-group">
                <input type="text" name="username"
                       class="form-control form-control-user @error('username') is-invalid @enderror"
                       placeholder="@lang('login.form.username_place_holder')">
                @error('username')
                <div class="text-danger">{{ $message }}</div>
                @enderror
            </div>
            <div class="form-group">
                <input type="password" name="password"
                       class="form-control form-control-user @error('password') is-invalid @enderror"
                       placeholder="@lang('login.form.password_place_holder')">
                @error('password')
                <div class="text-danger">{{ $message }}</div>
                @enderror
            </div>
            <button type="submit" class="btn btn-primary btn-user btn-block">
                @lang('login.form.submit')
            </button>
        </form>
    </div>
@endsection

@section('js', null)
