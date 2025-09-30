<x-app-layout>
    <div class="container">
        <div class="card">
            <h4 class="Card-header"> Tabel Mahasiswa</h4>
            <div class="card-body">

                <a href="/mahasiswa/create" class="mb-4 btn btn-primary">Tambah Data</a>

                <div class="table-responsive">

                    @if (session('succes'))
                    <div class="alert alert-success">
                        {{ $request('succes') }}
                    </div>

                    @endif

                    <table class="table table-hover w-100">
                        <thead>
                            <tr>
                                <th>No.</th>
                                <th>NIP</th>
                                <th>Nama</th>
                                <th>Kelamin</th>
                                <th>Alamat</th>
                                <th>Aksi</th>
                            </tr>
                        </thead>
                        <tbody>
                            @forelse ($mahasiswa as $item )
                            <tr>
                                <td>{{ $mahasiswa->firstItem() + $loop->index }}</td>
                                <td>{{ $item->nip }}</td>
                                <td>{{ $item->nama }}</td>
                                <td>{{ $item->kelamin }}</td>
                                <td>{{ $item->alamat }}</td>
                                <td>

                                    <div class="d-flex gap-2">
                                        <a href="/mahasiswa/{{ $item->id }}/edit" class="btn btn-warning">Edit</a>
                                        <form action="/mahasiswa/{{ $item->id }}" method="POST">

                                            @csrf
                                            @method('DELETE')
                                            <button type="submit" class="btn btn-danger"
                                                onclick="confirm('Apakah anda yakin?')">Hapus</button>
                                        </form>
                                    </div>
                                </td>
                            </tr>
                            @empty
                            <tr>
                                <td colspan="6" class="text-center"> Tidak ada data ditemukan</td>
                            </tr>
                            @endforelse
                        </tbody>
                    </table>
                    {{ $mahasiswa->links() }}
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
