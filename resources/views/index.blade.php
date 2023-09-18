<table class="table table-striped">
    <thead>
        <tr>
            <th>id</th>
            <th>Judul Buku</th>
            <th>Penulis</th>
            <th>Harga</th>
            <th>Tgl. Terbit</th>
            <th>Aksi</th></tr>
    </thead>
    <tbody>
        @foreach($data_buku as $buku)
            <tr>
                <td>{{ ++$no}}</td>
                <td>{{ $buku->judul }}</td>
                <td>{{ $buku->penulis }}</td>
                <td>{{ "Rp ".number_format($buku->harga, 0, ',', '.') }}</td>
                <td>{{ $buku->tgl_terbit }}</td>
            </tr>
        @endforeach
    </tbody>
</table>
<p>Jumlah Buku: {{ $jumlah_buku }}</p>
<p>Total Harga: {{ "Rp ".number_format($total_harga, 2, ',', '.' ) }}</p>
