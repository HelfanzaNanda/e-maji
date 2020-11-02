<div>
    <div class="card">
        <div class="card-header">
            <h4 class="text-bold">tambah user</h4>
        </div>

        <div class="card-body">
            <div class="form-group">
                <label>Nama</label>
                <input type="text" class="form-control" wire:model="name"
                placeholder="Masukkan Nama">
                @error('name') <span class="text-danger">{{ $message }}</span>@enderror
            </div>
            <div class="form-group">
                <label>Email</label>
                <input type="email" class="form-control" wire:model="email"
                placeholder="Masukkan Email">
                @error('email') <span class="text-danger">{{ $message }}</span>@enderror
            </div>
            <div class="form-group">
                <label>Telp</label>
                <input type="telp" class="form-control" wire:model="telp"
                placeholder="Masukkan Telephone">
                @error('telp') <span class="text-danger">{{ $message }}</span>@enderror
            </div>

            <div class="form-group">
                <label>Role</label>
                <select class="form-control" wire:model="role" id="role">
                    <option value="0">-- pilih --</option>
                    <option value="penguji">Penguji</option>
                    <option value="pengawas">Pengawas</option>
                </select>
                @error('role') <span class="text-danger">{{ $message }}</span>@enderror
            </div>
        </div>
        <div class="card-footer">
            <button wire:click="store" class="btn btn-info btn-sm text-white float-right">tambah</button>
        </div>
    </div>
</div>

@section('script')
    <script>
        const role = document.querySelector('#role');
        if (role == '0') {
            alert('pilih role');
        }
    </script>
@endsection