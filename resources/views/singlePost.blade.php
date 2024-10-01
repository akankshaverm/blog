@extends('layout')

@section('content')


<!-- Main Container -->
<div class="container mx-auto py-12 px-4 lg:px-0">
    <!-- Main Post Section -->
    <livewire:public.single-view :post_id="$post_id"/>
</div>



@endsection