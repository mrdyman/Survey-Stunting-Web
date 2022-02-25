    <table align="center" style="vertical-align: center;border: 1px solid black;font-weight : bold">
        <thead align="center" style="vertical-align: center;border: 1px solid black;font-weight : bold">
            <tr>
                <th></th>
            </tr>
            <tr align="center" style="vertical-align: center;border: 1px solid black;font-weight : bold">
                <th></th>
                <th rowspan="2" align="center"
                    style="vertical-align: center;border: 1px solid black;font-weight : bold">No. Responden</th>
                <th rowspan="2" align="center"
                    style="vertical-align: center;border: 1px solid black;font-weight : bold">Tanggal</th>
                <th rowspan="2" align="center"
                    style="vertical-align: center;border: 1px solid black;font-weight : bold">Desa</th>
                <th rowspan="2" align="center"
                    style="vertical-align: center;border: 1px solid black;font-weight : bold">Kecamatan</th>
                <th rowspan="2" align="center"
                    style="vertical-align: center;border: 1px solid black;font-weight : bold">Kabupaten</th>
                <th rowspan="2" align="center"
                    style="vertical-align: center;border: 1px solid black;font-weight : bold">No. Kartu Keluarga</th>
                @foreach ($daftarKategori as $kategori)
                    <th colspan="{{ count($kategori->soal) }}" align="center"
                        style="vertical-align: center;border: 1px solid black;font-weight : bold">
                        {{ $kategori->nama }}
                    </th>
                @endforeach

            </tr>
            <tr>
                <th></th>
                @foreach ($daftarKategori as $kategori)
                    @foreach ($kategori->soal as $soal)
                        <th align="center" style="vertical-align: center;border: 1px solid black;font-weight : bold">
                            {{ $soal->soal }}</th>
                    @endforeach
                @endforeach
            </tr>
        </thead>
        <tbody>
            @foreach ($daftarSurvey as $survey)
                <tr>
                    <td></td>
                    <td align="center" style="vertical-align: center;border: 1px solid black;">
                        {{ $loop->iteration }}</td>
                    <td align="center" style="vertical-align: center;border: 1px solid black;">
                        {{ \Carbon\Carbon::parse($survey->created_at)->translatedFormat('d F Y') }}</td>
                    <td align="center" style="vertical-align: center;border: 1px solid black;">
                        {{ $survey->responden->desa_kelurahan }}</td>
                    <td align="center" style="vertical-align: center;border: 1px solid black;">
                        {{ $survey->responden->kecamatan }}</td>
                    <td align="center" style="vertical-align: center;border: 1px solid black;">
                        {{ $survey->responden->kabupaten_kota }}</td>
                    <td align="center" style="vertical-align: center;border: 1px solid black;">
                        {{ $survey->responden->kartu_keluarga }} &nbsp;</td>
                    @foreach ($daftarKategori as $kategori)
                        @foreach ($kategori->soal as $soal)
                            @php
                                $jawaban = \App\Models\JawabanSurvey::with(['jawabanSoal'])
                                    ->where('survey_id', $survey->id)
                                    ->where('kategori_soal_id', $kategori->id)
                                    ->where('soal_id', $soal->id)
                                    ->get();
                            @endphp
                            <th align="center"
                                style="vertical-align: center;border: 1px solid black;font-weight : bold">
                                @foreach ($jawaban as $jwb)
                                    <p>
                                        {{ $jwb->jawaban_soal_id == null ? $jwb->jawaban_lainnya : $jwb->jawabanSoal->jawaban }}
                                    </p>
                                @endforeach
                            </th>
                        @endforeach
                    @endforeach
                </tr>
            @endforeach
        </tbody>
    </table>
