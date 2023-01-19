@extends('admin.layouts.app')

@section('content')
<div>
    @if (session('success'))
        <div class="alert alert-success" role="alert">
            {{ session('success') }}
        </div>
    @endif
    welcome to dashboard
</div>
@endsection
