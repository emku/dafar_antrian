<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
	 <table class="table table-hover">
                        <thead>
                            <tr>
                                <th>id</th>
                                <th>loket</th>
                                <th>nomer antrian</th>
                            </tr>
                        </thead>
                        <tbody>
                            @forelse ($listAntrian as $antrian)
                            <tr>
                                <td>{{ $antrian->id }}</td>
                                <td>{{ $antrian->kode_loket }}</td>
                                <td>{{ $antrian->nomor_antrian }}</td>
                            </tr>
                            @empty
                            <tr>
                                <td colspan="5">Tidak ada Antrian</td>
                            </tr>
                            @endforelse
                        </tbody>
                    </table>

</body>
</html>