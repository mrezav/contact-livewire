<div class="mt-4">
    <form wire:submit.prevent="storeContact">
        <div class="form-group">
            <div class="form-row">
                <div class="col">
                    <input wire:model="name" type="text" name="name" class="form-control" placeholder="Name">
                    @error('name')
                        <span class="error text-danger">{{ $message }}</span>
                    @enderror
                </div>
                <div class="col">
                    <input wire:model="phone" type="text" name="phone" class="form-control" placeholder="Phone">
                    @error('phone')
                        <span class="error text-danger">{{ $message }}</span>
                    @enderror
                </div>
            </div>
        </div>
            <button class="btn btn-sm btn-primary">Submit</button>
    </form>
</div>
