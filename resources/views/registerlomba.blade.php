@extends('layout.mainweb')

@section('title')
    PIMUS 11 - Register
@endsection

@section('content')
    <section id="form" style="margin-top: 150px; margin-bottom: 50px;">
        <div class="container">
            @foreach ($cabang as $item)
            <form action="/registration/cabang/upload" method="POST" enctype="multipart/form-data">
                @csrf
                <div id="awal" style="visibility: visible; display: block;">
                    <h1>Form Registrasi {{$item->nama}}</h1>  
                    <input type="text" id="cabang" value="{{$item->idlomba}}" name="idLomba" readonly hidden>
                    <?php
                    $id = $item->idlomba;
                    if($id!=1 || $id!=5)
                    {
                        echo '
                        <label>Nama Ketua Kelompok</label><br>
                        <input type="text" id="namaKetua" name="namaAnggota1" onchange="nama();" required><br>
                        <label>NRP Ketua Kelompok</label><br>
                        <input type="text" id="nrpKetua" pattern="[0-9]{9}" onchange="nrp();" title="NRP UBAYA" required><br>
                        <label>ID Line Ketua Kelompok</label><br>
                        <input type="text" name="line" required><br>
                        <label>Email Ketua Kelompok</label><br>
                        <input type="email" name="email" required><br>
                        <label>Junlah Anggota Kelompok (termasuk ketua kelompok)</label><br>
                        <input type="number" id="jumlahAnggota" name="jumlahAnggota" onchange="displayForm(this.value);" min=1 max=6 required><br>
                        <label>Jenis Kelompok (jika individu pilih homogen)</label><br>
                        <input type="radio" id="homogen" name="jenisKelompok" value="homogen" required>
                        <label for="homogen">Homogen</label><br>
                        <input type="radio" id="heterogen" name="jenisKelompok" value="heterogen" required>
                        <label for="heterogen">Heterogen</label><br>
                        ';
                    }
                    else
                    {
                        echo '
                        <input type="number" name="jumlahAnggota" value=1 hidden readonly>
                        <label>Nama Peserta</label><br>
                        <input type="text" name="namaAnggota1" required><br>
                        <label>NRP Peserta</label><br>
                        <input type="text" pattern="[0-9]{9}" name="nrpAnggota[]" title="NRP UBAYA" required><br>
                        <label>ID Line Peserta</label><br>
                        <input type="text" name="lineKetua" required><br>
                        <label>Email Peserta</label><br>
                        <input type="email" name="emailKetua" required><br>
                        ';   
                    }
                    $template1 = '
                    <label>Form Pendaftaran (.pdf)<br>format nama file: Nama_NRP</label><br>
                    <input type="file" name="formDaftar" class="inputLomba" accept=".pdf" required><br>
                    <label>Surat Pernyataan (.pdf)<br>wajib diprint, diberi materai Rp 10.000,00, dan ditandatangani (mengenai materai)<br>format nama file: KesediaanMP_Nama Depan_NRP</label><br>
                    <input type="file" name="suratPernyataan" class="inputLomba" accept=".pdf" required><br>
                    ';
                    $pakta = '
                    <label>Pakta Integritas (.pdf)</label><br>
                    <input type="file" name="pakta" class="inputLomba" accept=".pdf" required><br>
                    ';
                    $tambahanPilmapres = '
                    <label>Borang<br>format nama file: BPMP_Nama Depan_NRP</label><br>
                    <input type="file" name="borang" class="inputLomba" required><br>
                    <label>KHS (.pdf)<br>format nama file: KHS_PILMAPRES</label><br>
                    <input type="file" name="khs" class="inputLomba" accept=".pdf" required><br>
                    <label>Daftar 10 Prestasi + Bukti (.pdf)<br>format nama file: PrestasiMP_Nama Depan_NRP</label><br>
                    <input type="file" name="daftarPrestasi" class="inputLomba" accept=".pdf" required><br>
                    ';
                    $tambahan = '
                    <label>Pas Foto 4x6<br>format nama file: PasFotoMP_Nama Depan_NRP</label><br>
                    <input type="file" name="pasFoto1" class="inputLomba" accept="image/*" required><br>
                    <label>Scan KTM / Screenshot My Ubaya dan KTP / KITAS<br>Screenshot My Ubaya wajib terdapat Nama dan NRP (dibagian kartu studi)<br>format nama file: KTMKTP-MP_Nama Depan_NRP / KTMKITAS-MP_Nama Depan_NRP</label><br>
                    <input type="file" name="ktm1" class="inputLomba" required><br>
                    <label>Jadwal Kuliah<br>format nama file: JadwalPerkuliahanMP_Nama Depan_NRP</label><br>
                    <input type="file" name="jadwalKuliah1" class="inputLomba" required><br>
                    ';
                    echo $template1;
                    
                    switch ($id) {
                        case 1:
                            echo $tambahanPilmapres . $tambahan;
                            break;
                        
                        case 5:
                            echo $pakta . $tambahan;
                            break;
                    }
                    ?>
                </div>
                <div id="lanjutan">
                    <?php
                        
                    ?>
                </div>
                <input type="submit" value="Submit">
            </form>
            @endforeach
        </div>
    </section>
@endsection

<script>
    const template1 = `
    <div>
    <label>Form Pendaftaran (.pdf)<br>format nama file: Nama_NRP</label><br>
    <input type="file" name="formDaftar" class="inputLomba" accept=".pdf" required><br>
    <label>Surat Pernyataan (.pdf)<br>wajib diprint, diberi materai Rp 10.000,00, dan ditandatangani (mengenai materai)<br>format nama file: KesediaanMP_Nama Depan_NRP</label><br>
    <input type="file" name="suratPernyataan" class="inputLomba" accept=".pdf" required><br>
    </div>
    `;

    const template2 = `
    <label>Nama Anggota</label><br>
    <input type="text" name="namaAnggota" required><br>
    <label>NRP Anggota</label><br>
    <input type="text" pattern="[0-9]{9}" name="nrpAnggota" title="NRP UBAYA" required><br>
    <label>Pas Foto 4x6<br>format nama file: PasFotoMP_Nama Depan_NRP</label><br>
    <input type="file" name="pasFoto" class="inputLomba" accept="image/*" required><br>
    <label>Scan KTM / Screenshot My Ubaya dan KTP / KITAS<br>Screenshot My Ubaya wajib terdapat Nama dan NRP (dibagian kartu studi)<br>format nama file: KTMKTP-MP_Nama Depan_NRP / KTMKITAS-MP_Nama Depan_NRP</label><br>
    <input type="file" name="ktm" class="inputLomba" required><br>
    `

    const jadwal = `
    <label>Jadwal Kuliah<br>format nama file: JadwalPerkuliahanMP_Nama Depan_NRP</label><br>
    <input type="file" name="jadwalKuliah[]" class="inputLomba" required><br>
    `;

    function nama() 
    {
        const nama = document.getElementById('namaKetua').value;
        document.getElementById('namaAnggota1').value = nama;
    }

    function nrp() 
    {
        const nama = document.getElementById('nrpKetua').value;
        document.getElementById('nrpAnggota1').value = nama;
    }

    function displayForm(val)
    {
        const form = document.getElementById('lanjutan');
        const cabang = document.getElementById('cabang').value;
        form.innerHTML='';
        if(cabang!=1 || cabang!=5)
        {
            for(let i=1; i<=val; i++)
            {
                form.innerHTML += `<label>Anggota ${i}</label><br>`;
                form.innerHTML += `
                <label>Nama Anggota</label><br>
                <input type="text" id="namaAnggota${i}" name="namaAnggota${i}" required><br>
                <label>NRP Anggota</label><br>
                <input type="text" pattern="[0-9]{9}" id="nrpAnggota${i}" name="nrpAnggota[]" title="NRP UBAYA" required><br>
                <label>Pas Foto 4x6<br>format nama file: PasFotoMP_Nama Depan_NRP</label><br>
                <input type="file" name="pasFoto${i}" class="inputLomba" accept="image/*" required><br>
                <label>Scan KTM / Screenshot My Ubaya dan KTP / KITAS<br>Screenshot My Ubaya wajib terdapat Nama dan NRP (dibagian kartu studi)<br>format nama file: KTMKTP-MP_Nama Depan_NRP / KTMKITAS-MP_Nama Depan_NRP</label><br>
                <input type="file" name="ktm${i}" class="inputLomba" required><br>
                `
                if(cabang>=2 && cabang<=4 || cabang>=6 && cabang<=7)
                {
                    form.innerHTML += `
                    <label>Jadwal Kuliah<br>format nama file: JadwalPerkuliahanMP_Nama Depan_NRP</label><br>
                    <input type="file" name="jadwalKuliah${i}" class="inputLomba" required><br>
                    `;
                }
            }
            nama();
            nrp();
            document.getElementById('namaAnggota1').readOnly = true;

            document.getElementById('nrpAnggota1').readOnly = true;
        }
    }
</script>