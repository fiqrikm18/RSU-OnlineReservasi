@extends("layouts.admin_app")

@section("title")
Hello, {{ Auth::user()->username }}
@endsection

@section("content")
index admin
@endsection
