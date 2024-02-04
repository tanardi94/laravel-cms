@extends('layouts.main')

@section('navbar')
    @include('partials.navbar', ['pages' => 'Edit User'])
@endsection

@section('content')

<div class="row">
    <div class="col-sm-12">
        <form action="{{ route('pages.user.update', $user->uuid) }}" method="POST">
            @csrf
            @method('PUT')
            @include('pages.user._form', ['submitButtonText' => 'Simpan'])
        </form>
    </div>
</div>
@endsection
