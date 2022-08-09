    <table style="vertical-align: center;border: 1px solid black;font-weight : bold">
        <tr>
            <th width="5"></th>
        </tr>
        <tr>
            <th></th>
            <th colspan="2">Nama Survey : </th>
            <th colspan="8">{{ $daftarSurvey[0]->namaSurvey->nama }}</th>
        </tr>
        @if ($surveyor)
            <tr>
                <th></th>
                <th colspan="2">Surveyor : </th>
                <th colspan="8">{{ $surveyor->nama_lengkap }}</th>
            </tr>
        @endif
        @if ($institusi)
            <tr>
                <th></th>
                <th colspan="2">Institusi : </th>
                <th colspan="8">{{ $institusi->nama }}</th>
            </tr>
        @endif
        @if ($supervisor)
            <tr>
                <th></th>
                <th colspan="2">Supervisor / DPL : </th>
                <th colspan="8">{{ $supervisor->nama_lengkap }}</th>
            </tr>
        @endif
        <tr>
            <th></th>
            <th colspan="2">Halaman : </th>
            <th colspan="8" align="left">{{ $halaman }}</th>
        </tr>

    </table>

    <table align="center" style="vertical-align: center;border: 1px solid black;font-weight : bold">
        <thead align="center" style="vertical-align: center;border: 1px solid black;font-weight : bold">
            <tr align="center" style="vertical-align: center;border: 1px solid black;font-weight : bold">
                <th></th>
                <th rowspan="2" align="center"
                    style="vertical-align: center;border: 1px solid black;font-weight : bold">No.</th>
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
            @php
                $i = 1;
            @endphp
            @foreach ($daftarSurvey->chunk(5) as $rowSurvey)
                @foreach ($rowSurvey as $survey)
                    <tr>
                        <td></td>
                        <td align="center" style="vertical-align: center;border: 1px solid black;">
                            {{ $i++ }}</td>
                        <td align="center" style="vertical-align: center;border: 1px solid black;">
                            {{ \Carbon\Carbon::parse($survey->created_at)->translatedFormat('d F Y') }}</td>
                        <td align="center" style="vertical-align: center;border: 1px solid black;">
                            {{ $survey->responden->desa_kelurahan->nama }}</td>
                        <td align="center" style="vertical-align: center;border: 1px solid black;">
                            {{ $survey->responden->kecamatan->nama }}</td>
                        <td align="center" style="vertical-align: center;border: 1px solid black;">
                            {{ $survey->responden->kabupaten_kota->nama }}</td>
                        <td align="center" style="vertical-align: center;border: 1px solid black;">
                            {{ $survey->responden->kartu_keluarga }} &nbsp;</td>
                        @foreach ($daftarKategori as $kategori)
                            @foreach ($kategori->soal->chunk(5) as $rowSoal)
                                @foreach ($rowSoal as $soal)
                                    @php
                                        $daftarJawaban = \App\Models\JawabanSurvey::with(['jawabanSoal'])
                                            ->where('kode_unik_survey', "$survey->kode_unik")
                                            ->where('kategori_soal_id', "$kategori->id")
                                            ->where('soal_id', "$soal->id")
                                            ->get();
                                    @endphp
                                    <th align="center" style="vertical-align: center;border: 1px solid black;">
                                        @foreach ($daftarJawaban as $jawaban)
                                            <p>
                                                {{ $jawaban->jawaban_soal_id == null || $jawaban->jawaban_soal_id == 0 ? $jawaban->jawaban_lainnya : $jawaban->jawabanSoal->jawaban }}
                                            </p>
                                        @endforeach
                                    </th>
                                @endforeach
                            @endforeach
                        @endforeach
                    </tr>
                @endforeach
            @endforeach
        </tbody>
    </table>
