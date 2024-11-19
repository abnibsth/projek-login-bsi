<h3>{{ $judul }}</h3>
<form action="{{ route('anggota.update', $edit->id) }}" method="post">
@method('put')
@csrf
<label>Nama</label><br>
<input type="text" name="nama" id="" value="{{ old('nama',$edit->nama)}}"
placeholder="Masukan Nama Lengkap">
<p></p>
<label>Hp</label><br>
<input type="text" name="hp" id="" value="{{ old('hp',$edit->hp) }}"
placeholder="Masukan Nomer HP">
<p></p>
<button type="submit">Perbaharui</button>
<a href="{{ route('anggota.index') }}">
    <button type="button">Batal</button>
</a>
</form>