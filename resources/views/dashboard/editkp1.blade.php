@extends('dashboard.layout.main')

@section('container')

    <body>
        <main class="form-signin text-center">
            <form action="/edit-data-kp1" method="post" enctype="multipart/form-data">
                @csrf
                <h1 class="h3 mt-3 mb-3 fw-normal">Edit Data KP1</h1>

                <div class="row">

                    {{-- Mahasiswa 1 --}}
                    <div class="col">
                        <div class="form-floating">
                            <input type="text" class="form-control rounded-top @error('nim1') is-invalid rounded @enderror"
                                name="nim1" id="nim1" placeholder="NIM Mahasiswa 1" required
                                @if (isset($mhs1->nim)) value="{{ $mhs1->nim }}"
                                @else
                                    value="{{ old('nim1') }}" @endif>
                            <label for="nim1">NIM Mahasiswa 1</label>
                            @error('nim1')
                                <div class="invalid-feedback">
                                    {{ $message }}
                                </div>
                            @enderror
                        </div>
                        <div class=" form-floating">
                            <input type="text" class="form-control @error('nama1') is-invalid rounded @enderror"
                                name="nama1" id="nama1" placeholder="Nama Mahasiswa 1" required
                                @if (isset($mhs1->nama)) value="{{ $mhs1->nama }}"
                                @else
                                    value="{{ old('nama1') }}" @endif>
                            <label for="nama1">Nama Mahasiswa 1</label>
                            @error('nama1')
                                <div class="invalid-feedback">
                                    {{ $message }}
                                </div>
                            @enderror
                        </div>
                        <div class=" form-floating">
                            <input type="text" class="form-control @error('doswal1') is-invalid rounded @enderror"
                                name="doswal1" id="doswal1" placeholder="Nama Mahasiswa 1" required
                                @if (isset($mhs1->doswal)) value="{{ $mhs1->doswal }}"
                                @else
                                    value="{{ old('doswal1') }}" @endif>
                            <label for="doswal1">Nama Dosen Wali</label>
                            @error('doswal1')
                                <div class="invalid-feedback">
                                    {{ $message }}
                                </div>
                            @enderror
                        </div>
                        <div class=" form-floating">
                            <input type="text" class="form-control @error('peminatan1') is-invalid rounded @enderror"
                                name="peminatan1" id="peminatan1" placeholder="Peminatan" required
                                @if (isset($mhs1->peminatan)) value="{{ $mhs1->peminatan }}"
                                @else
                                    value="{{ old('peminatan1') }}" @endif>
                            <label for="peminatan1">Peminatan</label>
                            @error('peminatan1')
                                <div class="invalid-feedback">
                                    {{ $message }}
                                </div>
                            @enderror
                        </div>
                        <div class=" form-floating">
                            <input type="text" class="form-control @error('ipk1') is-invalid rounded @enderror"
                                name="ipk1" id="ipk1" placeholder="IPK" required
                                @if (isset($mhs1->ipk)) value="{{ $mhs1->ipk }}"
                                @else
                                    value="{{ old('ipk1') }}" @endif>
                            <label for="ipk1">IPK</label>
                            @error('ipk1')
                                <div class="invalid-feedback">
                                    {{ $message }}
                                </div>
                            @enderror
                        </div>
                        <div class=" form-floating">
                            <input type="text" class="form-control @error('t_sks1') is-invalid rounded @enderror"
                                name="t_sks1" id="t_sks1" placeholder="Total SKS" required
                                @if (isset($mhs1->t_sks)) value="{{ $mhs1->t_sks }}"
                                @else
                                    value="{{ old('t_sks1') }}" @endif>
                            <label for="t_sks1">Total SKS</label>
                            @error('t_sks1')
                                <div class="invalid-feedback">
                                    {{ $message }}
                                </div>
                            @enderror
                        </div>
                        <div class=" form-floating">
                            <input type="text"
                                class="form-control rounded-bottom @error('semester1') is-invalid rounded @enderror"
                                name="semester1" id="semester1" placeholder="Semester" required
                                @if (isset($mhs1->semester)) value="{{ $mhs1->semester }}"
                                @else
                                    value="{{ old('semester1') }}" @endif>
                            <label for="semester1">Semester</label>
                            @error('semester1')
                                <div class="invalid-feedback">
                                    {{ $message }}
                                </div>
                            @enderror
                        </div>
                        <div class=" form-floating">
                            <input type="text" class="form-control @error('jum_d1') is-invalid rounded @enderror"
                                name="jum_d1" id="jum_d1" placeholder="Jumlah Nilai D" required
                                @if (isset($datakp1->jum_d1)) value="{{ $datakp1->jum_d1 }}"
                                @else
                                    value="{{ old('jum_d1') }}" @endif>
                            <label for="jum_d1">Jumlah Nilai D</label>
                            @error('jum_d1')
                                <div class="invalid-feedback">
                                    {{ $message }}
                                </div>
                            @enderror
                        </div>
                        <div class=" form-floating">
                            <input type="text"
                                class="form-control rounded-top @error('mk_d1') is-invalid rounded @enderror" name="mk_d1"
                                id="mk_d1" placeholder="MK Nilai D"
                                @if (isset($datakp1->mk_d1)) value="{{ $datakp1->mk_d1 }}"
                                @else
                                    value="{{ old('mk_d1') }}" @endif>
                            <label for="mk_d1">MK Nilai D</label>
                            @error('mk_d1')
                                <div class="invalid-feedback">
                                    {{ $message }}
                                </div>
                            @enderror
                        </div>
                        <div class=" form-floating">
                            <input type="text" class="form-control @error('jum_e1') is-invalid rounded @enderror"
                                name="jum_e1" id="jum_e1" placeholder="Jumlah Nilai E" required
                                @if (isset($datakp1->jum_e1)) value="{{ $datakp1->jum_e1 }}"
                                @else
                                    value="{{ old('jum_e1') }}" @endif>
                            <label for="jum_e1">Jumlah Nilai E</label>
                            @error('jum_e1')
                                <div class="invalid-feedback">
                                    {{ $message }}
                                </div>
                            @enderror
                        </div>
                        <div class=" form-floating">
                            <input type="text"
                                class="form-control rounded-top @error('mk_e1') is-invalid rounded @enderror"
                                name="mk_e1" id="mk_e1" placeholder="MK Nilai E"
                                @if (isset($datakp1->mk_e1)) value="{{ $datakp1->mk_e1 }}"
                                @else
                                    value="{{ old('mk_e1') }}" @endif>
                            <label for="mk_e1">MK Nilai E</label>
                            @error('mk_e1')
                                <div class="invalid-feedback">
                                    {{ $message }}
                                </div>
                            @enderror
                        </div>
                        <div class="form-floating  mt-2">
                            <select class="form-select" name="algo1" id="algo1">
                                @if (isset($datakp1))
                                    <option @if ($datakp1->algoritma1 == null) selected @endif>Nilai</option>
                                    <option @if ($datakp1->algoritma1 == 'A') selected @endif value="A">A</option>
                                    <option @if ($datakp1->algoritma1 == 'AB') selected @endif value="AB">AB</option>
                                    <option @if ($datakp1->algoritma1 == 'B') selected @endif value="B">B</option>
                                    <option @if ($datakp1->algoritma1 == 'BC') selected @endif value="BC">BC</option>
                                    <option @if ($datakp1->algoritma1 == 'C') selected @endif value="C">C</option>
                                    <option @if ($datakp1->algoritma1 == 'D') selected @endif value="D">D</option>
                                    <option @if ($datakp1->algoritma1 == 'E') selected @endif value="E">E</option>
                                    <option @if ($datakp1->algoritma1 == 'Sedang Diambil') selected @endif value="Sedang Diambil">
                                        Sedang Diambil</option>
                                    <option @if ($datakp1->algoritma1 == 'Belum Diambil') selected @endif value="Belum Diambil">Belum
                                        Diambil</option>
                                @else
                                    <option selected>Nilai</option>
                                    <option value="A">A</option>
                                    <option value="AB">AB</option>
                                    <option value="B">B</option>
                                    <option value="BC">BC</option>
                                    <option value="C">C</option>
                                    <option value="D">D</option>
                                    <option value="E">E</option>
                                    <option value="Sedang Diambil">Sedang Diambil</option>
                                    <option value="Belum Diambil">Belum Diambil</option>
                                @endif
                            </select>
                            <label for="algo1">Nilai Algoritma dan Pemrograman</label>
                        </div>
                        <div class="form-floating">
                            <select class="form-select" name="p_algo1" id="p_algo1">
                                @if (isset($datakp1))
                                    <option @if ($datakp1->p_algoritma1 == null) selected @endif>Nilai</option>
                                    <option @if ($datakp1->p_algoritma1 == 'A') selected @endif value="A">A</option>
                                    <option @if ($datakp1->p_algoritma1 == 'AB') selected @endif value="AB">AB</option>
                                    <option @if ($datakp1->p_algoritma1 == 'B') selected @endif value="B">B</option>
                                    <option @if ($datakp1->p_algoritma1 == 'BC') selected @endif value="BC">BC</option>
                                    <option @if ($datakp1->p_algoritma1 == 'C') selected @endif value="C">C</option>
                                    <option @if ($datakp1->p_algoritma1 == 'D') selected @endif value="D">D</option>
                                    <option @if ($datakp1->p_algoritma1 == 'E') selected @endif value="E">E</option>
                                    <option @if ($datakp1->p_algoritma1 == 'Sedang Diambil') selected @endif value="Sedang Diambil">
                                        Sedang Diambil</option>
                                    <option @if ($datakp1->p_algoritma1 == 'Belum Diambil') selected @endif value="Belum Diambil">Belum
                                        Diambil</option>
                                @else
                                    <option selected>Nilai</option>
                                    <option value="A">A</option>
                                    <option value="AB">AB</option>
                                    <option value="B">B</option>
                                    <option value="BC">BC</option>
                                    <option value="C">C</option>
                                    <option value="D">D</option>
                                    <option value="E">E</option>
                                    <option value="Sedang Diambil">Sedang Diambil</option>
                                    <option value="Belum Diambil">Belum Diambil</option>
                                @endif
                            </select>
                            <label for="p_algo1">Nilai Praktikum Algoritma dan Pemrograman</label>
                        </div>
                        <div class="form-floating">
                            <select class="form-select" name="strukdat1" id="strukdat1">
                                @if (isset($datakp1))
                                    <option @if ($datakp1->strukdat1 == null) selected @endif>Nilai</option>
                                    <option @if ($datakp1->strukdat1 == 'A') selected @endif value="A">A</option>
                                    <option @if ($datakp1->strukdat1 == 'AB') selected @endif value="AB">AB</option>
                                    <option @if ($datakp1->strukdat1 == 'B') selected @endif value="B">B</option>
                                    <option @if ($datakp1->strukdat1 == 'BC') selected @endif value="BC">BC</option>
                                    <option @if ($datakp1->strukdat1 == 'C') selected @endif value="C">C</option>
                                    <option @if ($datakp1->strukdat1 == 'D') selected @endif value="D">D</option>
                                    <option @if ($datakp1->strukdat1 == 'E') selected @endif value="E">E</option>
                                    <option @if ($datakp1->strukdat1 == 'Sedang Diambil') selected @endif value="Sedang Diambil">
                                        Sedang Diambil</option>
                                    <option @if ($datakp1->strukdat1 == 'Belum Diambil') selected @endif value="Belum Diambil">Belum
                                        Diambil</option>
                                @else
                                    <option selected>Nilai</option>
                                    <option value="A">A</option>
                                    <option value="AB">AB</option>
                                    <option value="B">B</option>
                                    <option value="BC">BC</option>
                                    <option value="C">C</option>
                                    <option value="D">D</option>
                                    <option value="E">E</option>
                                    <option value="Sedang Diambil">Sedang Diambil</option>
                                    <option value="Belum Diambil">Belum Diambil</option>
                                @endif
                            </select>
                            <label for="strukdat1">Nilai Struktur Data</label>
                        </div>
                        <div class="form-floating">
                            <select class="form-select" name="p_strukdat1" id="p_strukdat1">
                                @if (isset($datakp1))
                                    <option @if ($datakp1->p_strukdat1 == null) selected @endif>Nilai</option>
                                    <option @if ($datakp1->p_strukdat1 == 'A') selected @endif value="A">A</option>
                                    <option @if ($datakp1->p_strukdat1 == 'AB') selected @endif value="AB">AB</option>
                                    <option @if ($datakp1->p_strukdat1 == 'B') selected @endif value="B">B</option>
                                    <option @if ($datakp1->p_strukdat1 == 'BC') selected @endif value="BC">BC</option>
                                    <option @if ($datakp1->p_strukdat1 == 'C') selected @endif value="C">C</option>
                                    <option @if ($datakp1->p_strukdat1 == 'D') selected @endif value="D">D</option>
                                    <option @if ($datakp1->p_strukdat1 == 'E') selected @endif value="E">E</option>
                                    <option @if ($datakp1->p_strukdat1 == 'Sedang Diambil') selected @endif value="Sedang Diambil">
                                        Sedang Diambil</option>
                                    <option @if ($datakp1->p_strukdat1 == 'Belum Diambil') selected @endif value="Belum Diambil">Belum
                                        Diambil</option>
                                @else
                                    <option selected>Nilai</option>
                                    <option value="A">A</option>
                                    <option value="AB">AB</option>
                                    <option value="B">B</option>
                                    <option value="BC">BC</option>
                                    <option value="C">C</option>
                                    <option value="D">D</option>
                                    <option value="E">E</option>
                                    <option value="Sedang Diambil">Sedang Diambil</option>
                                    <option value="Belum Diambil">Belum Diambil</option>
                                @endif
                            </select>
                            <label for="p_strukdat1">Nilai Praktikum Struktur Data</label>
                        </div>
                        <div class="form-floating">
                            <select class="form-select" name="basdat1" id="basdat1">
                                @if (isset($datakp1))
                                    <option @if ($datakp1->basdat1 == null) selected @endif>Nilai</option>
                                    <option @if ($datakp1->basdat1 == 'A') selected @endif value="A">A</option>
                                    <option @if ($datakp1->basdat1 == 'AB') selected @endif value="AB">AB</option>
                                    <option @if ($datakp1->basdat1 == 'B') selected @endif value="B">B</option>
                                    <option @if ($datakp1->basdat1 == 'BC') selected @endif value="BC">BC</option>
                                    <option @if ($datakp1->basdat1 == 'C') selected @endif value="C">C</option>
                                    <option @if ($datakp1->basdat1 == 'D') selected @endif value="D">D</option>
                                    <option @if ($datakp1->basdat1 == 'E') selected @endif value="E">E</option>
                                    <option @if ($datakp1->basdat1 == 'Sedang Diambil') selected @endif value="Sedang Diambil">
                                        Sedang Diambil</option>
                                    <option @if ($datakp1->basdat1 == 'Belum Diambil') selected @endif value="Belum Diambil">Belum
                                        Diambil</option>
                                @else
                                    <option selected>Nilai</option>
                                    <option value="A">A</option>
                                    <option value="AB">AB</option>
                                    <option value="B">B</option>
                                    <option value="BC">BC</option>
                                    <option value="C">C</option>
                                    <option value="D">D</option>
                                    <option value="E">E</option>
                                    <option value="Sedang Diambil">Sedang Diambil</option>
                                    <option value="Belum Diambil">Belum Diambil</option>
                                @endif
                            </select>
                            <label for="basdat1">Nilai Basis Data</label>
                        </div>
                        <div class="form-floating">
                            <select class="form-select" name="p_basdat1" id="p_basdat1">
                                @if (isset($datakp1))
                                    <option @if ($datakp1->p_basdat1 == null) selected @endif>Nilai</option>
                                    <option @if ($datakp1->p_basdat1 == 'A') selected @endif value="A">A</option>
                                    <option @if ($datakp1->p_basdat1 == 'AB') selected @endif value="AB">AB</option>
                                    <option @if ($datakp1->p_basdat1 == 'B') selected @endif value="B">B</option>
                                    <option @if ($datakp1->p_basdat1 == 'BC') selected @endif value="BC">BC</option>
                                    <option @if ($datakp1->p_basdat1 == 'C') selected @endif value="C">C</option>
                                    <option @if ($datakp1->p_basdat1 == 'D') selected @endif value="D">D</option>
                                    <option @if ($datakp1->p_basdat1 == 'E') selected @endif value="E">E</option>
                                    <option @if ($datakp1->p_basdat1 == 'Sedang Diambil') selected @endif value="Sedang Diambil">
                                        Sedang Diambil</option>
                                    <option @if ($datakp1->p_basdat1 == 'Belum Diambil') selected @endif value="Belum Diambil">Belum
                                        Diambil</option>
                                @else
                                    <option selected>Nilai</option>
                                    <option value="A">A</option>
                                    <option value="AB">AB</option>
                                    <option value="B">B</option>
                                    <option value="BC">BC</option>
                                    <option value="C">C</option>
                                    <option value="D">D</option>
                                    <option value="E">E</option>
                                    <option value="Sedang Diambil">Sedang Diambil</option>
                                    <option value="Belum Diambil">Belum Diambil</option>
                                @endif
                            </select>
                            <label for="p_basdat1">Nilai Praktikum Basis Data</label>
                        </div>
                        <div class="form-floating">
                            <select class="form-select" name="rpl1" id="rpl1">
                                @if (isset($datakp1))
                                    <option @if ($datakp1->rpl1 == null) selected @endif>Nilai</option>
                                    <option @if ($datakp1->rpl1 == 'A') selected @endif value="A">A</option>
                                    <option @if ($datakp1->rpl1 == 'AB') selected @endif value="AB">AB</option>
                                    <option @if ($datakp1->rpl1 == 'B') selected @endif value="B">B</option>
                                    <option @if ($datakp1->rpl1 == 'BC') selected @endif value="BC">BC</option>
                                    <option @if ($datakp1->rpl1 == 'C') selected @endif value="C">C</option>
                                    <option @if ($datakp1->rpl1 == 'D') selected @endif value="D">D</option>
                                    <option @if ($datakp1->rpl1 == 'E') selected @endif value="E">E</option>
                                    <option @if ($datakp1->rpl1 == 'Sedang Diambil') selected @endif value="Sedang Diambil">
                                        Sedang Diambil</option>
                                    <option @if ($datakp1->rpl1 == 'Belum Diambil') selected @endif value="Belum Diambil">Belum
                                        Diambil</option>
                                @else
                                    <option selected>Nilai</option>
                                    <option value="A">A</option>
                                    <option value="AB">AB</option>
                                    <option value="B">B</option>
                                    <option value="BC">BC</option>
                                    <option value="C">C</option>
                                    <option value="D">D</option>
                                    <option value="E">E</option>
                                    <option value="Sedang Diambil">Sedang Diambil</option>
                                    <option value="Belum Diambil">Belum Diambil</option>
                                @endif
                            </select>
                            <label for="rpl1">Nilai Rekayasa Perangkat Lunak</label>
                        </div>
                        <div class="form-floating">
                            <select class="form-select" name="appl1" id="appl1">
                                @if (isset($datakp1))
                                    <option @if ($datakp1->appl1 == null) selected @endif>Nilai</option>
                                    <option @if ($datakp1->appl1 == 'A') selected @endif value="A">A</option>
                                    <option @if ($datakp1->appl1 == 'AB') selected @endif value="AB">AB</option>
                                    <option @if ($datakp1->appl1 == 'B') selected @endif value="B">B</option>
                                    <option @if ($datakp1->appl1 == 'BC') selected @endif value="BC">BC</option>
                                    <option @if ($datakp1->appl1 == 'C') selected @endif value="C">C</option>
                                    <option @if ($datakp1->appl1 == 'D') selected @endif value="D">D</option>
                                    <option @if ($datakp1->appl1 == 'E') selected @endif value="E">E</option>
                                    <option @if ($datakp1->appl1 == 'Sedang Diambil') selected @endif value="Sedang Diambil">
                                        Sedang Diambil</option>
                                    <option @if ($datakp1->appl1 == 'Belum Diambil') selected @endif value="Belum Diambil">Belum
                                        Diambil</option>
                                @else
                                    <option selected>Nilai</option>
                                    <option value="A">A</option>
                                    <option value="AB">AB</option>
                                    <option value="B">B</option>
                                    <option value="BC">BC</option>
                                    <option value="C">C</option>
                                    <option value="D">D</option>
                                    <option value="E">E</option>
                                    <option value="Sedang Diambil">Sedang Diambil</option>
                                    <option value="Belum Diambil">Belum Diambil</option>
                                @endif
                            </select>
                            <label for="appl1">Nilai Analisis dan Perancangan Perangkat Lunak</label>
                        </div>
                        <div class="form-floating">
                            <select class="form-select" name="progweb1" id="progweb1">
                                @if (isset($datakp1))
                                    <option @if ($datakp1->progweb1 == null) selected @endif>Nilai</option>
                                    <option @if ($datakp1->progweb1 == 'A') selected @endif value="A">A</option>
                                    <option @if ($datakp1->progweb1 == 'AB') selected @endif value="AB">AB</option>
                                    <option @if ($datakp1->progweb1 == 'B') selected @endif value="B">B</option>
                                    <option @if ($datakp1->progweb1 == 'BC') selected @endif value="BC">BC</option>
                                    <option @if ($datakp1->progweb1 == 'C') selected @endif value="C">C</option>
                                    <option @if ($datakp1->progweb1 == 'D') selected @endif value="D">D</option>
                                    <option @if ($datakp1->progweb1 == 'E') selected @endif value="E">E</option>
                                    <option @if ($datakp1->progweb1 == 'Sedang Diambil') selected @endif value="Sedang Diambil">
                                        Sedang Diambil</option>
                                    <option @if ($datakp1->progweb1 == 'Belum Diambil') selected @endif value="Belum Diambil">
                                        Belum
                                        Diambil</option>
                                @else
                                    <option selected>Nilai</option>
                                    <option value="A">A</option>
                                    <option value="AB">AB</option>
                                    <option value="B">B</option>
                                    <option value="BC">BC</option>
                                    <option value="C">C</option>
                                    <option value="D">D</option>
                                    <option value="E">E</option>
                                    <option value="Sedang Diambil">Sedang Diambil</option>
                                    <option value="Belum Diambil">Belum Diambil</option>
                                @endif
                            </select>
                            <label for="progweb1">Nilai Pemrograman Web</label>
                        </div>
                        <div class="form-floating">
                            <select class="form-select" name="p_progweb1" id="p_progweb1">
                                @if (isset($datakp1))
                                    <option @if ($datakp1->p_progweb1 == null) selected @endif>Nilai</option>
                                    <option @if ($datakp1->p_progweb1 == 'A') selected @endif value="A">A</option>
                                    <option @if ($datakp1->p_progweb1 == 'AB') selected @endif value="AB">AB
                                    </option>
                                    <option @if ($datakp1->p_progweb1 == 'B') selected @endif value="B">B</option>
                                    <option @if ($datakp1->p_progweb1 == 'BC') selected @endif value="BC">BC
                                    </option>
                                    <option @if ($datakp1->p_progweb1 == 'C') selected @endif value="C">C</option>
                                    <option @if ($datakp1->p_progweb1 == 'D') selected @endif value="D">D</option>
                                    <option @if ($datakp1->p_progweb1 == 'E') selected @endif value="E">E</option>
                                    <option @if ($datakp1->p_progweb1 == 'Sedang Diambil') selected @endif value="Sedang Diambil">
                                        Sedang Diambil</option>
                                    <option @if ($datakp1->p_progweb1 == 'Belum Diambil') selected @endif value="Belum Diambil">
                                        Belum
                                        Diambil</option>
                                @else
                                    <option selected>Nilai</option>
                                    <option value="A">A</option>
                                    <option value="AB">AB</option>
                                    <option value="B">B</option>
                                    <option value="BC">BC</option>
                                    <option value="C">C</option>
                                    <option value="D">D</option>
                                    <option value="E">E</option>
                                    <option value="Sedang Diambil">Sedang Diambil</option>
                                    <option value="Belum Diambil">Belum Diambil</option>
                                @endif
                            </select>
                            <label for="p_progweb1">Nilai Praktikum Pemrograman Web</label>
                        </div>
                        <div class="form-floating">
                            <select class="form-select" name="po1" id="po1">
                                @if (isset($datakp1))
                                    <option @if ($datakp1->po1 == null) selected @endif>Nilai</option>
                                    <option @if ($datakp1->po1 == 'A') selected @endif value="A">A</option>
                                    <option @if ($datakp1->po1 == 'AB') selected @endif value="AB">AB
                                    </option>
                                    <option @if ($datakp1->po1 == 'B') selected @endif value="B">B</option>
                                    <option @if ($datakp1->po1 == 'BC') selected @endif value="BC">BC
                                    </option>
                                    <option @if ($datakp1->po1 == 'C') selected @endif value="C">C</option>
                                    <option @if ($datakp1->po1 == 'D') selected @endif value="D">D</option>
                                    <option @if ($datakp1->po1 == 'E') selected @endif value="E">E</option>
                                    <option @if ($datakp1->po1 == 'Sedang Diambil') selected @endif value="Sedang Diambil">
                                        Sedang Diambil</option>
                                    <option @if ($datakp1->po1 == 'Belum Diambil') selected @endif value="Belum Diambil">
                                        Belum
                                        Diambil</option>
                                @else
                                    <option selected>Nilai</option>
                                    <option value="A">A</option>
                                    <option value="AB">AB</option>
                                    <option value="B">B</option>
                                    <option value="BC">BC</option>
                                    <option value="C">C</option>
                                    <option value="D">D</option>
                                    <option value="E">E</option>
                                    <option value="Sedang Diambil">Sedang Diambil</option>
                                    <option value="Belum Diambil">Belum Diambil</option>
                                @endif
                            </select>
                            <label for="po1">Nilai Pemrograman Object</label>
                        </div>
                        <div class="form-floating">
                            <select class="form-select" name="p_po1" id="p_po1">
                                @if (isset($datakp1))
                                    <option @if ($datakp1->p_po1 == null) selected @endif>Nilai</option>
                                    <option @if ($datakp1->p_po1 == 'A') selected @endif value="A">A</option>
                                    <option @if ($datakp1->p_po1 == 'AB') selected @endif value="AB">AB
                                    </option>
                                    <option @if ($datakp1->p_po1 == 'B') selected @endif value="B">B</option>
                                    <option @if ($datakp1->p_po1 == 'BC') selected @endif value="BC">BC
                                    </option>
                                    <option @if ($datakp1->p_po1 == 'C') selected @endif value="C">C</option>
                                    <option @if ($datakp1->p_po1 == 'D') selected @endif value="D">D</option>
                                    <option @if ($datakp1->p_po1 == 'E') selected @endif value="E">E</option>
                                    <option @if ($datakp1->p_po1 == 'Sedang Diambil') selected @endif value="Sedang Diambil">
                                        Sedang Diambil</option>
                                    <option @if ($datakp1->p_po1 == 'Belum Diambil') selected @endif value="Belum Diambil">
                                        Belum
                                        Diambil</option>
                                @else
                                    <option selected>Nilai</option>
                                    <option value="A">A</option>
                                    <option value="AB">AB</option>
                                    <option value="B">B</option>
                                    <option value="BC">BC</option>
                                    <option value="C">C</option>
                                    <option value="D">D</option>
                                    <option value="E">E</option>
                                    <option value="Sedang Diambil">Sedang Diambil</option>
                                    <option value="Belum Diambil">Belum Diambil</option>
                                @endif
                            </select>
                            <label for="p_po1">Nilai Praktikum Pemrograman Object</label>
                        </div>
                        <div class="form-floating">
                            <div class="mb-2">
                                <label for="khs1" class="form-label mt-2">Upload KHS</label>
                                <input class="form-control" type="file" id="khs1" name="khs1">
                            </div>
                        </div>
                        <div class="form-floating">
                            <div class="mb-2">
                                <label for="krs1" class="form-label">Upload KRS</label>
                                <input class="form-control" type="file" id="krs1" name="krs1">
                            </div>
                        </div>
                        <div class="form-floating">
                            <div class="mb-2">
                                <label for="ktm1" class="form-label">Upload KTM</label>
                                <input class="form-control" type="file" id="ktm1" name="ktm1">
                            </div>
                        </div>
                        <div class="form-floating">
                            <div class="mb-2">
                                <label for="p_foto1" class="form-label">Upload Pas Foto</label>
                                <input class="form-control" type="file" id="p_foto1" name="p_foto1">
                            </div>
                        </div>
                    </div>

                    {{-- Mahasiswa 2 --}}
                    <div class="col">
                        <div class="form-floating">
                            <input type="text"
                                class="form-control rounded-top @error('nim2') is-invalid rounded @enderror"
                                name="nim2" id="nim2" placeholder="NIM Mahasiswa 2" required
                                @if (isset($mhs2->nim)) value="{{ $mhs2->nim }}"
                                @else
                                    value="{{ old('nim2') }}" @endif>
                            <label for="nim2">NIM Mahasiswa 2</label>
                            @error('nim2')
                                <div class="invalid-feedback">
                                    {{ $message }}
                                </div>
                            @enderror
                        </div>
                        <div class=" form-floating">
                            <input type="text" class="form-control @error('nama2') is-invalid rounded @enderror"
                                name="nama2" id="nama2" placeholder="Nama Mahasiswa 2" required
                                @if (isset($mhs2->nama)) value="{{ $mhs2->nama }}"
                                @else
                                    value="{{ old('nama2') }}" @endif>
                            <label for="nama2">Nama Mahasiswa 2</label>
                            @error('nama2')
                                <div class="invalid-feedback">
                                    {{ $message }}
                                </div>
                            @enderror
                        </div>
                        <div class=" form-floating">
                            <input type="text" class="form-control @error('doswal2') is-invalid rounded @enderror"
                                name="doswal2" id="doswal2" placeholder="Nama Dosen Wali" required
                                @if (isset($mhs2->doswal)) value="{{ $mhs2->doswal }}"
                                @else
                                    value="{{ old('doswal2') }}" @endif>
                            <label for="doswal2">Nama Dosen Wali</label>
                            @error('doswal2')
                                <div class="invalid-feedback">
                                    {{ $message }}
                                </div>
                            @enderror
                        </div>
                        <div class=" form-floating">
                            <input type="text" class="form-control @error('peminatan2') is-invalid rounded @enderror"
                                name="peminatan2" id="peminatan2" placeholder="Peminatan" required
                                @if (isset($mhs2->peminatan)) value="{{ $mhs2->peminatan }}"
                                @else
                                    value="{{ old('peminatan2') }}" @endif>
                            <label for="peminatan2">Peminatan</label>
                            @error('peminatan2')
                                <div class="invalid-feedback">
                                    {{ $message }}
                                </div>
                            @enderror
                        </div>
                        <div class=" form-floating">
                            <input type="text" class="form-control @error('ipk2') is-invalid rounded @enderror"
                                name="ipk2" id="ipk2" placeholder="IPK" required
                                @if (isset($mhs2->ipk)) value="{{ $mhs2->ipk }}"
                                @else
                                    value="{{ old('ipk2') }}" @endif>
                            <label for="ipk2">IPK</label>
                            @error('ipk2')
                                <div class="invalid-feedback">
                                    {{ $message }}
                                </div>
                            @enderror
                        </div>
                        <div class=" form-floating">
                            <input type="text" class="form-control @error('t_sks2') is-invalid rounded @enderror"
                                name="t_sks2" id="t_sks2" placeholder="Total SKS" required
                                @if (isset($mhs2->t_sks)) value="{{ $mhs2->t_sks }}"
                                @else
                                    value="{{ old('t_sks2') }}" @endif>
                            <label for="t_sks2">Total SKS</label>
                            @error('t_sks2')
                                <div class="invalid-feedback">
                                    {{ $message }}
                                </div>
                            @enderror
                        </div>
                        <div class=" form-floating">
                            <input type="text"
                                class="form-control rounded-bottom @error('semester2') is-invalid rounded @enderror"
                                name="semester2" id="semester2" placeholder="Semester" required
                                @if (isset($mhs2->semester)) value="{{ $mhs2->semester }}"
                                @else
                                    value="{{ old('semester2') }}" @endif>
                            <label for="semester2">Semester</label>
                            @error('semester2')
                                <div class="invalid-feedback">
                                    {{ $message }}
                                </div>
                            @enderror
                        </div>
                        <div class=" form-floating">
                            <input type="text" class="form-control @error('jum_d2') is-invalid rounded @enderror"
                                name="jum_d2" id="jum_d2" placeholder="Jumlah Nilai D" required
                                @if (isset($datakp1->jum_d2)) value="{{ $datakp1->jum_d2 }}"
                                @else
                                    value="{{ old('jum_d2') }}" @endif>
                            <label for="jum_d2">Jumlah Nilai D</label>
                            @error('jum_d2')
                                <div class="invalid-feedback">
                                    {{ $message }}
                                </div>
                            @enderror
                        </div>
                        <div class=" form-floating">
                            <input type="text"
                                class="form-control rounded-top @error('mk_d2') is-invalid rounded @enderror"
                                name="mk_d2" id="mk_d2" placeholder="MK Nilai D"
                                @if (isset($datakp1->mk_d2)) value="{{ $datakp1->mk_d2 }}"
                                @else
                                    value="{{ old('mk_d2') }}" @endif>
                            <label for="mk_d2">MK Nilai D</label>
                            @error('mk_d2')
                                <div class="invalid-feedback">
                                    {{ $message }}
                                </div>
                            @enderror
                        </div>
                        <div class=" form-floating">
                            <input type="text" class="form-control @error('jum_e2') is-invalid rounded @enderror"
                                name="jum_e2" id="jum_e2" placeholder="Jumlah Nilai E" required
                                @if (isset($datakp1->jum_e2)) value="{{ $datakp1->jum_e2 }}"
                                @else
                                    value="{{ old('jum_e2') }}" @endif>
                            <label for="jum_e2">Jumlah Nilai E</label>
                            @error('jum_e2')
                                <div class="invalid-feedback">
                                    {{ $message }}
                                </div>
                            @enderror
                        </div>
                        <div class=" form-floating">
                            <input type="text"
                                class="form-control rounded-top @error('mk_e2') is-invalid rounded @enderror"
                                name="mk_e2" id="mk_e2" placeholder="MK Nilai E"
                                @if (isset($datakp1->mk_e2)) value="{{ $datakp1->mk_e2 }}"
                                @else
                                    value="{{ old('mk_e2') }}" @endif>
                            <label for="mk_e2">MK Nilai E</label>
                            @error('mk_e2')
                                <div class="invalid-feedback">
                                    {{ $message }}
                                </div>
                            @enderror
                        </div>
                        <div class="form-floating  mt-2">
                            <select class="form-select" name="algo2" id="algo2">
                                @if (isset($datakp1))
                                    <option @if ($datakp1->algoritma2 == null) selected @endif>Nilai</option>
                                    <option @if ($datakp1->algoritma2 == 'A') selected @endif value="A">A</option>
                                    <option @if ($datakp1->algoritma2 == 'AB') selected @endif value="AB">AB
                                    </option>
                                    <option @if ($datakp1->algoritma2 == 'B') selected @endif value="B">B</option>
                                    <option @if ($datakp1->algoritma2 == 'BC') selected @endif value="BC">BC
                                    </option>
                                    <option @if ($datakp1->algoritma2 == 'C') selected @endif value="C">C</option>
                                    <option @if ($datakp1->algoritma2 == 'D') selected @endif value="D">D</option>
                                    <option @if ($datakp1->algoritma2 == 'E') selected @endif value="E">E</option>
                                    <option @if ($datakp1->algoritma2 == 'Sedang Diambil') selected @endif value="Sedang Diambil">
                                        Sedang Diambil</option>
                                    <option @if ($datakp1->algoritma2 == 'Belum Diambil') selected @endif value="Belum Diambil">
                                        Belum
                                        Diambil</option>
                                @else
                                    <option selected>Nilai</option>
                                    <option value="A">A</option>
                                    <option value="AB">AB</option>
                                    <option value="B">B</option>
                                    <option value="BC">BC</option>
                                    <option value="C">C</option>
                                    <option value="D">D</option>
                                    <option value="E">E</option>
                                    <option value="Sedang Diambil">Sedang Diambil</option>
                                    <option value="Belum Diambil">Belum Diambil</option>
                                @endif
                            </select>
                            <label for="algo1">Nilai Algoritma dan Pemrograman</label>
                        </div>
                        <div class="form-floating">
                            <select class="form-select" name="p_algo2" id="p_algo2">
                                @if (isset($datakp1))
                                    <option @if ($datakp1->p_algoritma2 == null) selected @endif>Nilai</option>
                                    <option @if ($datakp1->p_algoritma2 == 'A') selected @endif value="A">A</option>
                                    <option @if ($datakp1->p_algoritma2 == 'AB') selected @endif value="AB">AB
                                    </option>
                                    <option @if ($datakp1->p_algoritma2 == 'B') selected @endif value="B">B</option>
                                    <option @if ($datakp1->p_algoritma2 == 'BC') selected @endif value="BC">BC
                                    </option>
                                    <option @if ($datakp1->p_algoritma2 == 'C') selected @endif value="C">C</option>
                                    <option @if ($datakp1->p_algoritma2 == 'D') selected @endif value="D">D</option>
                                    <option @if ($datakp1->p_algoritma2 == 'E') selected @endif value="E">E</option>
                                    <option @if ($datakp1->p_algoritma2 == 'Sedang Diambil') selected @endif value="Sedang Diambil">
                                        Sedang Diambil</option>
                                    <option @if ($datakp1->p_algoritma2 == 'Belum Diambil') selected @endif value="Belum Diambil">
                                        Belum
                                        Diambil</option>
                                @else
                                    <option selected>Nilai</option>
                                    <option value="A">A</option>
                                    <option value="AB">AB</option>
                                    <option value="B">B</option>
                                    <option value="BC">BC</option>
                                    <option value="C">C</option>
                                    <option value="D">D</option>
                                    <option value="E">E</option>
                                    <option value="Sedang Diambil">Sedang Diambil</option>
                                    <option value="Belum Diambil">Belum Diambil</option>
                                @endif
                            </select>
                            <label for="p_algo1">Nilai Praktikum Algoritma dan Pemrograman</label>
                        </div>
                        <div class="form-floating">
                            <select class="form-select" name="strukdat2" id="strukdat2">
                                @if (isset($datakp1))
                                    <option @if ($datakp1->strukdat2 == null) selected @endif>Nilai</option>
                                    <option @if ($datakp1->strukdat2 == 'A') selected @endif value="A">A</option>
                                    <option @if ($datakp1->strukdat2 == 'AB') selected @endif value="AB">AB
                                    </option>
                                    <option @if ($datakp1->strukdat2 == 'B') selected @endif value="B">B</option>
                                    <option @if ($datakp1->strukdat2 == 'BC') selected @endif value="BC">BC
                                    </option>
                                    <option @if ($datakp1->strukdat2 == 'C') selected @endif value="C">C</option>
                                    <option @if ($datakp1->strukdat2 == 'D') selected @endif value="D">D</option>
                                    <option @if ($datakp1->strukdat2 == 'E') selected @endif value="E">E</option>
                                    <option @if ($datakp1->strukdat2 == 'Sedang Diambil') selected @endif value="Sedang Diambil">
                                        Sedang Diambil</option>
                                    <option @if ($datakp1->strukdat2 == 'Belum Diambil') selected @endif value="Belum Diambil">
                                        Belum
                                        Diambil</option>
                                @else
                                    <option selected>Nilai</option>
                                    <option value="A">A</option>
                                    <option value="AB">AB</option>
                                    <option value="B">B</option>
                                    <option value="BC">BC</option>
                                    <option value="C">C</option>
                                    <option value="D">D</option>
                                    <option value="E">E</option>
                                    <option value="Sedang Diambil">Sedang Diambil</option>
                                    <option value="Belum Diambil">Belum Diambil</option>
                                @endif
                            </select>
                            <label for="strukdat1">Nilai Struktur Data</label>
                        </div>
                        <div class="form-floating">
                            <select class="form-select" name="p_strukdat2" id="p_strukdat2">
                                @if (isset($datakp1))
                                    <option @if ($datakp1->p_strukdat2 == null) selected @endif>Nilai</option>
                                    <option @if ($datakp1->p_strukdat2 == 'A') selected @endif value="A">A</option>
                                    <option @if ($datakp1->p_strukdat2 == 'AB') selected @endif value="AB">AB
                                    </option>
                                    <option @if ($datakp1->p_strukdat2 == 'B') selected @endif value="B">B</option>
                                    <option @if ($datakp1->p_strukdat2 == 'BC') selected @endif value="BC">BC
                                    </option>
                                    <option @if ($datakp1->p_strukdat2 == 'C') selected @endif value="C">C</option>
                                    <option @if ($datakp1->p_strukdat2 == 'D') selected @endif value="D">D</option>
                                    <option @if ($datakp1->p_strukdat2 == 'E') selected @endif value="E">E</option>
                                    <option @if ($datakp1->p_strukdat2 == 'Sedang Diambil') selected @endif value="Sedang Diambil">
                                        Sedang Diambil</option>
                                    <option @if ($datakp1->p_strukdat2 == 'Belum Diambil') selected @endif value="Belum Diambil">
                                        Belum
                                        Diambil</option>
                                @else
                                    <option selected>Nilai</option>
                                    <option value="A">A</option>
                                    <option value="AB">AB</option>
                                    <option value="B">B</option>
                                    <option value="BC">BC</option>
                                    <option value="C">C</option>
                                    <option value="D">D</option>
                                    <option value="E">E</option>
                                    <option value="Sedang Diambil">Sedang Diambil</option>
                                    <option value="Belum Diambil">Belum Diambil</option>
                                @endif
                            </select>
                            <label for="p_strukdat1">Nilai Praktikum Struktur Data</label>
                        </div>
                        <div class="form-floating">
                            <select class="form-select" name="basdat2" id="basdat2">
                                @if (isset($datakp1))
                                    <option @if ($datakp1->basdat2 == null) selected @endif>Nilai</option>
                                    <option @if ($datakp1->basdat2 == 'A') selected @endif value="A">A</option>
                                    <option @if ($datakp1->basdat2 == 'AB') selected @endif value="AB">AB
                                    </option>
                                    <option @if ($datakp1->basdat2 == 'B') selected @endif value="B">B</option>
                                    <option @if ($datakp1->basdat2 == 'BC') selected @endif value="BC">BC
                                    </option>
                                    <option @if ($datakp1->basdat2 == 'C') selected @endif value="C">C</option>
                                    <option @if ($datakp1->basdat2 == 'D') selected @endif value="D">D</option>
                                    <option @if ($datakp1->basdat2 == 'E') selected @endif value="E">E</option>
                                    <option @if ($datakp1->basdat2 == 'Sedang Diambil') selected @endif value="Sedang Diambil">
                                        Sedang Diambil</option>
                                    <option @if ($datakp1->basdat2 == 'Belum Diambil') selected @endif value="Belum Diambil">
                                        Belum
                                        Diambil</option>
                                @else
                                    <option selected>Nilai</option>
                                    <option value="A">A</option>
                                    <option value="AB">AB</option>
                                    <option value="B">B</option>
                                    <option value="BC">BC</option>
                                    <option value="C">C</option>
                                    <option value="D">D</option>
                                    <option value="E">E</option>
                                    <option value="Sedang Diambil">Sedang Diambil</option>
                                    <option value="Belum Diambil">Belum Diambil</option>
                                @endif
                            </select>
                            <label for="basdat1">Nilai Basis Data</label>
                        </div>
                        <div class="form-floating">
                            <select class="form-select" name="p_basdat2" id="p_basdat2">
                                @if (isset($datakp1))
                                    <option @if ($datakp1->p_basdat2 == null) selected @endif>Nilai</option>
                                    <option @if ($datakp1->p_basdat2 == 'A') selected @endif value="A">A</option>
                                    <option @if ($datakp1->p_basdat2 == 'AB') selected @endif value="AB">AB
                                    </option>
                                    <option @if ($datakp1->p_basdat2 == 'B') selected @endif value="B">B</option>
                                    <option @if ($datakp1->p_basdat2 == 'BC') selected @endif value="BC">BC
                                    </option>
                                    <option @if ($datakp1->p_basdat2 == 'C') selected @endif value="C">C</option>
                                    <option @if ($datakp1->p_basdat2 == 'D') selected @endif value="D">D</option>
                                    <option @if ($datakp1->p_basdat2 == 'E') selected @endif value="E">E</option>
                                    <option @if ($datakp1->p_basdat2 == 'Sedang Diambil') selected @endif value="Sedang Diambil">
                                        Sedang Diambil</option>
                                    <option @if ($datakp1->p_basdat2 == 'Belum Diambil') selected @endif value="Belum Diambil">
                                        Belum
                                        Diambil</option>
                                @else
                                    <option selected>Nilai</option>
                                    <option value="A">A</option>
                                    <option value="AB">AB</option>
                                    <option value="B">B</option>
                                    <option value="BC">BC</option>
                                    <option value="C">C</option>
                                    <option value="D">D</option>
                                    <option value="E">E</option>
                                    <option value="Sedang Diambil">Sedang Diambil</option>
                                    <option value="Belum Diambil">Belum Diambil</option>
                                @endif
                            </select>
                            <label for="p_basdat1">Nilai Praktikum Basis Data</label>
                        </div>
                        <div class="form-floating">
                            <select class="form-select" name="rpl2" id="rpl2">
                                @if (isset($datakp1))
                                    <option @if ($datakp1->rpl2 == null) selected @endif>Nilai</option>
                                    <option @if ($datakp1->rpl2 == 'A') selected @endif value="A">A</option>
                                    <option @if ($datakp1->rpl2 == 'AB') selected @endif value="AB">AB
                                    </option>
                                    <option @if ($datakp1->rpl2 == 'B') selected @endif value="B">B</option>
                                    <option @if ($datakp1->rpl2 == 'BC') selected @endif value="BC">BC
                                    </option>
                                    <option @if ($datakp1->rpl2 == 'C') selected @endif value="C">C</option>
                                    <option @if ($datakp1->rpl2 == 'D') selected @endif value="D">D</option>
                                    <option @if ($datakp1->rpl2 == 'E') selected @endif value="E">E</option>
                                    <option @if ($datakp1->rpl2 == 'Sedang Diambil') selected @endif value="Sedang Diambil">
                                        Sedang Diambil</option>
                                    <option @if ($datakp1->rpl2 == 'Belum Diambil') selected @endif value="Belum Diambil">
                                        Belum
                                        Diambil</option>
                                @else
                                    <option selected>Nilai</option>
                                    <option value="A">A</option>
                                    <option value="AB">AB</option>
                                    <option value="B">B</option>
                                    <option value="BC">BC</option>
                                    <option value="C">C</option>
                                    <option value="D">D</option>
                                    <option value="E">E</option>
                                    <option value="Sedang Diambil">Sedang Diambil</option>
                                    <option value="Belum Diambil">Belum Diambil</option>
                                @endif
                            </select>
                            <label for="rpl1">Nilai Rekayasa Perangkat Lunak</label>
                        </div>
                        <div class="form-floating">
                            <select class="form-select" name="appl2" id="appl2">
                                @if (isset($datakp1))
                                    <option @if ($datakp1->appl2 == null) selected @endif>Nilai</option>
                                    <option @if ($datakp1->appl2 == 'A') selected @endif value="A">A</option>
                                    <option @if ($datakp1->appl2 == 'AB') selected @endif value="AB">AB
                                    </option>
                                    <option @if ($datakp1->appl2 == 'B') selected @endif value="B">B</option>
                                    <option @if ($datakp1->appl2 == 'BC') selected @endif value="BC">BC
                                    </option>
                                    <option @if ($datakp1->appl2 == 'C') selected @endif value="C">C</option>
                                    <option @if ($datakp1->appl2 == 'D') selected @endif value="D">D</option>
                                    <option @if ($datakp1->appl2 == 'E') selected @endif value="E">E</option>
                                    <option @if ($datakp1->appl2 == 'Sedang Diambil') selected @endif value="Sedang Diambil">
                                        Sedang Diambil</option>
                                    <option @if ($datakp1->appl2 == 'Belum Diambil') selected @endif value="Belum Diambil">
                                        Belum
                                        Diambil</option>
                                @else
                                    <option selected>Nilai</option>
                                    <option value="A">A</option>
                                    <option value="AB">AB</option>
                                    <option value="B">B</option>
                                    <option value="BC">BC</option>
                                    <option value="C">C</option>
                                    <option value="D">D</option>
                                    <option value="E">E</option>
                                    <option value="Sedang Diambil">Sedang Diambil</option>
                                    <option value="Belum Diambil">Belum Diambil</option>
                                @endif
                            </select>
                            <label for="appl1">Nilai Analisis dan Perancangan Perangkat Lunak</label>
                        </div>
                        <div class="form-floating">
                            <select class="form-select" name="progweb2" id="progweb2">
                                @if (isset($datakp1))
                                    <option @if ($datakp1->progweb2 == null) selected @endif>Nilai</option>
                                    <option @if ($datakp1->progweb2 == 'A') selected @endif value="A">A</option>
                                    <option @if ($datakp1->progweb2 == 'AB') selected @endif value="AB">AB
                                    </option>
                                    <option @if ($datakp1->progweb2 == 'B') selected @endif value="B">B</option>
                                    <option @if ($datakp1->progweb2 == 'BC') selected @endif value="BC">BC
                                    </option>
                                    <option @if ($datakp1->progweb2 == 'C') selected @endif value="C">C</option>
                                    <option @if ($datakp1->progweb2 == 'D') selected @endif value="D">D</option>
                                    <option @if ($datakp1->progweb2 == 'E') selected @endif value="E">E</option>
                                    <option @if ($datakp1->progweb2 == 'Sedang Diambil') selected @endif value="Sedang Diambil">
                                        Sedang Diambil</option>
                                    <option @if ($datakp1->progweb2 == 'Belum Diambil') selected @endif value="Belum Diambil">
                                        Belum
                                        Diambil</option>
                                @else
                                    <option selected>Nilai</option>
                                    <option value="A">A</option>
                                    <option value="AB">AB</option>
                                    <option value="B">B</option>
                                    <option value="BC">BC</option>
                                    <option value="C">C</option>
                                    <option value="D">D</option>
                                    <option value="E">E</option>
                                    <option value="Sedang Diambil">Sedang Diambil</option>
                                    <option value="Belum Diambil">Belum Diambil</option>
                                @endif
                            </select>
                            <label for="progweb1">Nilai Pemrograman Web</label>
                        </div>
                        <div class="form-floating">
                            <select class="form-select" name="p_progweb2" id="p_progweb2">
                                @if (isset($datakp1))
                                    <option @if ($datakp1->p_progweb2 == null) selected @endif>Nilai</option>
                                    <option @if ($datakp1->p_progweb2 == 'A') selected @endif value="A">A</option>
                                    <option @if ($datakp1->p_progweb2 == 'AB') selected @endif value="AB">AB
                                    </option>
                                    <option @if ($datakp1->p_progweb2 == 'B') selected @endif value="B">B</option>
                                    <option @if ($datakp1->p_progweb2 == 'BC') selected @endif value="BC">BC
                                    </option>
                                    <option @if ($datakp1->p_progweb2 == 'C') selected @endif value="C">C</option>
                                    <option @if ($datakp1->p_progweb2 == 'D') selected @endif value="D">D</option>
                                    <option @if ($datakp1->p_progweb2 == 'E') selected @endif value="E">E</option>
                                    <option @if ($datakp1->p_progweb2 == 'Sedang Diambil') selected @endif value="Sedang Diambil">
                                        Sedang Diambil</option>
                                    <option @if ($datakp1->p_progweb2 == 'Belum Diambil') selected @endif value="Belum Diambil">
                                        Belum
                                        Diambil</option>
                                @else
                                    <option selected>Nilai</option>
                                    <option value="A">A</option>
                                    <option value="AB">AB</option>
                                    <option value="B">B</option>
                                    <option value="BC">BC</option>
                                    <option value="C">C</option>
                                    <option value="D">D</option>
                                    <option value="E">E</option>
                                    <option value="Sedang Diambil">Sedang Diambil</option>
                                    <option value="Belum Diambil">Belum Diambil</option>
                                @endif
                            </select>
                            <label for="p_progweb1">Nilai Praktikum Pemrograman Web</label>
                        </div>
                        <div class="form-floating">
                            <select class="form-select" name="po2" id="po2">
                                @if (isset($datakp1))
                                    <option @if ($datakp1->po2 == null) selected @endif>Nilai</option>
                                    <option @if ($datakp1->po2 == 'A') selected @endif value="A">A</option>
                                    <option @if ($datakp1->po2 == 'AB') selected @endif value="AB">AB
                                    </option>
                                    <option @if ($datakp1->po2 == 'B') selected @endif value="B">B</option>
                                    <option @if ($datakp1->po2 == 'BC') selected @endif value="BC">BC
                                    </option>
                                    <option @if ($datakp1->po2 == 'C') selected @endif value="C">C</option>
                                    <option @if ($datakp1->po2 == 'D') selected @endif value="D">D</option>
                                    <option @if ($datakp1->po2 == 'E') selected @endif value="E">E</option>
                                    <option @if ($datakp1->po2 == 'Sedang Diambil') selected @endif value="Sedang Diambil">
                                        Sedang Diambil</option>
                                    <option @if ($datakp1->po2 == 'Belum Diambil') selected @endif value="Belum Diambil">
                                        Belum
                                        Diambil</option>
                                @else
                                    <option selected>Nilai</option>
                                    <option value="A">A</option>
                                    <option value="AB">AB</option>
                                    <option value="B">B</option>
                                    <option value="BC">BC</option>
                                    <option value="C">C</option>
                                    <option value="D">D</option>
                                    <option value="E">E</option>
                                    <option value="Sedang Diambil">Sedang Diambil</option>
                                    <option value="Belum Diambil">Belum Diambil</option>
                                @endif
                            </select>
                            <label for="po2">Nilai Pemrograman Object</label>
                        </div>
                        <div class="form-floating">
                            <select class="form-select" name="p_po2" id="p_po2">
                                @if (isset($datakp1))
                                    <option @if ($datakp1->p_po2 == null) selected @endif>Nilai</option>
                                    <option @if ($datakp1->p_po2 == 'A') selected @endif value="A">A</option>
                                    <option @if ($datakp1->p_po2 == 'AB') selected @endif value="AB">AB
                                    </option>
                                    <option @if ($datakp1->p_po2 == 'B') selected @endif value="B">B</option>
                                    <option @if ($datakp1->p_po2 == 'BC') selected @endif value="BC">BC
                                    </option>
                                    <option @if ($datakp1->p_po2 == 'C') selected @endif value="C">C</option>
                                    <option @if ($datakp1->p_po2 == 'D') selected @endif value="D">D</option>
                                    <option @if ($datakp1->p_po2 == 'E') selected @endif value="E">E</option>
                                    <option @if ($datakp1->p_po2 == 'Sedang Diambil') selected @endif value="Sedang Diambil">
                                        Sedang Diambil</option>
                                    <option @if ($datakp1->p_po2 == 'Belum Diambil') selected @endif value="Belum Diambil">
                                        Belum
                                        Diambil</option>
                                @else
                                    <option selected>Nilai</option>
                                    <option value="A">A</option>
                                    <option value="AB">AB</option>
                                    <option value="B">B</option>
                                    <option value="BC">BC</option>
                                    <option value="C">C</option>
                                    <option value="D">D</option>
                                    <option value="E">E</option>
                                    <option value="Sedang Diambil">Sedang Diambil</option>
                                    <option value="Belum Diambil">Belum Diambil</option>
                                @endif
                            </select>
                            <label for="p_po2">Nilai Praktikum Pemrograman Object</label>
                        </div>
                        <div class="form-floating">
                            <div class="mb-2">
                                <label for="khs2" class="form-label mt-2">Upload KHS</label>
                                <input class="form-control" type="file" id="khs2" name="khs2">
                            </div>
                        </div>
                        <div class="form-floating">
                            <div class="mb-2">
                                <label for="krs2" class="form-label">Upload KRS</label>
                                <input class="form-control" type="file" id="krs2" name="krs2">
                            </div>
                        </div>
                        <div class="form-floating">
                            <div class="mb-2">
                                <label for="ktm2" class="form-label">Upload KTM</label>
                                <input class="form-control" type="file" id="ktm2" name="ktm2">
                            </div>
                        </div>
                        <div class="form-floating">
                            <div class="mb-2">
                                <label for="p_foto2" class="form-label">Upload Pas Foto</label>
                                <input class="form-control" type="file" id="p_foto2" name="p_foto2">
                            </div>
                        </div>
                    </div>
                    <div class="form-floating">
                        <div class="mb-3">
                            <label for="proposal" class="form-label">Upload Proposal</label>
                            <input class="form-control" type="file" id="proposal" name="proposal">
                        </div>
                    </div>
                    <div class="form-floating">
                        <div class="mb-3">
                            <label for="izin_kp" class="form-label">Upload Pernyataan Izin KP</label>
                            <input class="form-control" type="file" id="izin_kp" name="izin_kp">
                        </div>
                    </div>
                </div>
                <button class="mt-3 w-100 btn btn-lg btn-primary" type="submit">Ubah Data</button>
                <p class="mt-5 mb-3 text-muted">&copy; 2017–2022</p>
            </form>
        </main>
    </body>
@endsection
