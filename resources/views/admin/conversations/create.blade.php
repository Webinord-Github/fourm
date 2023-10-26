@extends('layouts.admin')

@section('content')

<div class="container mt-20">
    <div class="formContainer flex flex-col items-center">
        <h1 class="px-12 py-4 w-10/12 text-2xl pb-12 font-bold">Create a new page</h1>
        <form class="w-full flex justify-center" action="{{ route('conversations.store') }}" method="post">
            @include('admin.conversations.partials.fields')
        </form>
    </div>
</div>

@endsection

