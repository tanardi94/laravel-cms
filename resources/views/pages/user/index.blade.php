@extends('layouts.main')


@section('navbar')
    @include('partials.navbar', ['pages' => 'Manage Users']);
@endsection


@section('content')
    <div class="col-md-12 mb-lg-0 mb-4">
        <div class="card mt-4">
            <div class="card-header pb-0 p-3">
                <div class="row">
                    <div class="col-6 d-flex align-items-center">
                        <h6 class="mb-0">Manage Users</h6>
                    </div>
                    <div class="col-6 text-end">
                        <a class="btn bg-gradient-dark mb-0" href="javascript:;"><i
                                class="material-icons text-sm">add</i>&nbsp;&nbsp;Add New Card</a>
                    </div>
                </div>
            </div>
            <div class="card-body p-3">
                <table class="table table-bordered data-table">
                    <thead>
                        <tr>
                            <th>Name</th>
                            <th>Email</th>
                            <th>Created At</th>
                            <th width="105px">Actions</th>
                        </tr>
                    </thead>
                    <tbody>

                    </tbody>
                </table>
            </div>
        </div>
    </div>
@endsection


@section()('scripts')
    <script>
        var table = $('.data-table').DataTable({
            processing: true,
            serverSide: true,
            ajax: "{{ route('pages.user.index') }}",
            columns: [
                {data: 'name', name: 'name'}
                {data: 'email', name: 'email'}
                {data: 'created_at', name: 'created_at'}
                {data: 'action', name: 'action', orderable: false, searchable: false}
            ]
        })
    </script>
@endsection
