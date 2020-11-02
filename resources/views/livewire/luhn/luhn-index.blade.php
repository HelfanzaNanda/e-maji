<div>
    <div class="card">
        <div class="card-header">
            <h4 class="text-bold">Form</h4>
        </div>
        <div class="card-body">
            <div class="form-group">
                <label>number card</label>
                <input wire:model="number_card" type="text" class="form-control">
                @error('number_card') <small class="text-danger">{{ $message }}</small> @enderror
            </div>
            <div class="form-group">
                <label>expiry month</label>
                <input wire:model="expiry_number" type="number" class="form-control">
                @error('expiry_month') <small class="text-danger">{{ $message }}</small> @enderror
            </div>

            <div class="form-group">
                <label>date </label>
                <input wire:model="date" type="date" class="form-control">
                @error('date') <small class="text-danger">{{ $message }}</small> @enderror
            </div>

            <div class="form-group">
                <label>CVV </label>
                <input wire:model="cvv" type="text" class="form-control">
                @error('cvv') <small class="text-danger">{{ $message }}</small> @enderror
            </div>
        </div>
        <div class="card-footer">
            <button wire:click="store" class="btn btn-info btn-md text-white float-right">simpan</button>
        </div>
    </div>
</div>
