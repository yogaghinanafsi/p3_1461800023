<form action="{{ url('perpustakaan/' . $perpustakaan->id) }}" method="post">
    @csrf
    <input type="hidden" name="_method" value="patch">
    NBI: <input type="text" name="nbi" value="{{ $perpustakaan->nbi }}">
    NAMA: <input type="text" name="nama_mhs" value="{{ $perpustakaan->nama_mhs }}">
    <button type="submit">S impan</button>
</form> 