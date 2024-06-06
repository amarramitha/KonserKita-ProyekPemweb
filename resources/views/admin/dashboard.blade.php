@extends('admin.layouts.main')

@section('content')
<div class="p-4 border-2 border-gray-200 border-dashed rounded-lg dark:border-gray-700 mt-14">
    <h1>Welcome, {{ Auth::user()->name }}</h1>
 </div>
 @endsection
