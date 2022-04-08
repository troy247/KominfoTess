<x-templates.default>
    <x-slot name="title">Edit Katgeori</x-slot>
    <div class="col-12">
        <div class="card">
            <div class="card-header">
                <h1 class="card-title">Tambah Data kategori</h1>
            </div>
            <div class="card-body">
                <form action="{{route('category.update', $category)}}" method="POST">
                    @method('PUT')
                    @csrf
                    <div class="form-group">
                    <label>Nama Kategori</label>
                    <input class="form-control mt-2 @error('name') is-invalid @enderror" type="text" name="name" value="{{$category->name}}" placeholder="Masukan Kategori">
                    @error('name')
                        <span class="invalid-feedback">
                            <strong>{{$message}}</strong>
                        </span>
                    @enderror    
                    </div>
                    <div class="form-group mt-2">
                        <input type="submit" class="btn btn-success" value="Simpan">
                    </div>
                </form>
            </div>
        </div>
    </div>
</x-templates.default>