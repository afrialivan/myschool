@extends('layouts.main')

@section('container')
    <div class="row container m-auto d-block mb-5">
        <h1 class="text-center my-5">Ambil gambar untuk melakukan absensi</h1>
        <div class="d-block m-auto">
            <div class="d-block m-auto" id="my_camera"></div>
            <div style="width: 50%" class="d-grid m-auto mt-4">
                <button class="btn btn-success text-center" type="button" onClick="take_snapshot()" required>Ambil
                    Foto</button>
            </div>
            {{-- <div id="results"></div> --}}
        </div>
        <form action="/absen" method="post" style="width: 50%" class="d-block m-auto">
            @csrf
            <img id="gambar" src="" alt="">
            <div>
                <input type="hidden" id="inp" name="foto">
                @error('foto')
                    {{ $message }}
                @enderror
            </div>
            <div class="mb-4 ">
                <h3 class="text-center">Keterangan</h3>
                <select class="form-select text-center" aria-label="Default select example" name="status">
                    <option selected>---</option>
                    <option value="hadir">Hadir</option>
                    <option value="izin">Izin</option>
                    <option value="sakit">Sakit</option>
                </select>
                @error('status')
                    {{ $message }}
                @enderror
            </div>
            <div class="d-grid">
                <button class="btn btn-success text-center" type="submit">Absen</button>
            </div>
        </form>
    </div>

    <!-- webcamjs lewat CDN -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/webcamjs/1.0.25/webcam.js"></script>


    <!-- Configure a few settings and attach camera -->
    <script language="JavaScript">
        Webcam.set({
            width: 320,
            height: 240,

            image_format: 'jpeg',
            jpeg_quality: 90
        });
        Webcam.attach('#my_camera');


        function take_snapshot() {

            // take snapshot and get image data
            Webcam.snap(function(data_uri) {
                // display results in page
                // document.getElementById('results').innerHTML =
                //     '<img src="' + data_uri + '"/><input type="text" name="foto" value="' + data_uri +
                //     '" required/>';
                document.getElementById('inp').value = data_uri
                document.getElementById('gambar').src = data_uri
            });
        }
    </script>
    <!-- End Document
                                                                                  –––––––––––––––––––––––––––––––––––––––––––––––––– -->
@endsection
