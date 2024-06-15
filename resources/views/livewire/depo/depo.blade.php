<div class="container-fluid">

    <!-- Page Heading -->
    <h1 class="h3 mb-2 text-gray-800">Depo</h1>

    <!-- DataTales Example -->
    <div class="card shadow mb-4">
        <div class="card-header py-3">
            <a href="{{ '/depo/create' }}" class="btn btn-sm btn-primary"><i class="fas fa-add-plus"> Add Depo</i></a>
        </div>
        <div class="card-body">
            <div class="table-responsive">
                <table class="table table-bordered" width="100%" cellspacing="0">
                    @if (session('status'))
                        <div class="alert alert-success">
                            {{ session('status') }}
                        </div>
                    @endif
                    <thead>
                        <tr>
                            <th>No</th>
                            <th>Name</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        @forelse ($depo as $dp)
                        @php
                            $no = 1;
                        @endphp
                        <tr>
                            <td>{{ $no }}</td>
                            <td>{{ $dp->name }}</td>
                            <td>
                                <a href="/edit/{{ $dp->id }}" wire:navigate class="btn btn-sm btn-circle btn-success"><i class="fas fa-edit"></i></a>
                                <button class="btn btn-sm btn-circle btn-danger"><i class="fas fa-trash"></i></button>
                            </td>
                        </tr>
                        @php
                            $no++;
                        @endphp
                        @empty
                            <div class="alert alert-danger">Depo tidak ada</div>
                        @endforelse
                    </tbody>
                </table>
                {{ $depo->links('vendor.pagination.bootstrap-5') }}
            </div>
        </div>
    </div>

</div>
<!-- /.container-fluid -->
