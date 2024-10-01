@extends('layout')
@section('content')
<div class=" flex flex-1 px-[2%] mt-10 gap-5">
    <div class=" w-3/12">
        <div class="container mx-auto flex mt-8">
            <livewire:public.sidebar />
        </div>
    </div>
    <div class=" w-9/12">
        <livewire:public.post-section />

    </div>

</div>
@endsection