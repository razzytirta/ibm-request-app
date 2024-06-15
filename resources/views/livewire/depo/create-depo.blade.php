

<div class="container-fluid">

    <!-- Page Heading -->
    <div class="d-sm-flex align-items-center justify-content-between mb-4">
        <h1 class="h3 mb-0 text-gray-800">{{ $title }}</h1>
    </div>


    <div class="row justify-content-center">

        <div class="col-lg-6">

            <!-- Default Card Example -->
            <div class="card mb-4">
                <div class="card-header">
                    Create Depo
                </div>
                <div class="card-body">
                    <form wire:submit="save">
                        <div class="form-group">
                            <input type="text" wire:model="name" class="form-control" placeholder="Masukkan Nama">

                        </div>
                        <div>
                            @error('name') <p class="text-danger">{{ $message }}</p> @enderror
                        </div>
                        <button class="btn btn-primary" type="submit">Simpan</button>
                    </form>
                </div>
            </div>

        </div>

    </div>

</div>
