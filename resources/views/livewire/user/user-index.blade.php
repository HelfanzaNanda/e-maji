<div>
    <div class="row">
        <div class="col-md-4">
            <livewire:user.user-create/>
        </div>
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">
                    <h4 class="text-bold">list user</h4>
                </div>
                <div class="card-body">
                    <table class="table table-bordered rounded table-striped">
                        <thead>
                            <tr>
                                <th>#</th>
                                <th>Nama</th>
                                <th>Email</th>
                                <th>Telephone</th>
                                <th>Role</th>
                                <th>Aksi</th>
                            </tr>
                        </thead>
                        <tbody>
                            @forelse ($users as $user)
                                <tr>
                                    <td>{{ $loop->iteration }}</td>
                                    <td>{{ $user->name }}</td>
                                    <td>{{ $user->email }}</td>
                                    <td>{{ $user->telp }}</td>
                                    <td>{{ $user->role }}</td>
                                    <td>
                                        
                                    </td>
                                </tr>
                            @empty
                            <tr>
                                <td colspan="6" class="text-center text-bold">tidak ada data</td>
                            </tr>
                                
                            @endforelse
                        </tbody>
                    </table>
                </div>
            </div>

        </div>
    </div>
</div>
