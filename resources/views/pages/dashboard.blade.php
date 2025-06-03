@extends('layouts.app')

@section('title', 'Dashboard')

@section('content')
    @include('components.dashboard.profile')
    @include('components.dashboard.clock')
    @include('components.dashboard.main')
    @include('components.dashboard.footer')
@endsection


