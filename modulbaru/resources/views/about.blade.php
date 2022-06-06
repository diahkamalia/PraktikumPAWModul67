@extends('layouts.main')

@section('about')                
 <div class="container mt-4">
    <div class="profile card">
        <div class="profile-body">
            <div class="profile-bio">
                <div class="row">
                    <div class="col-md-5 text-center">
                        <img class="img-thumbnail md-margin-bottom-10" src="gambar/{{ $gambar }}" alt="{{ $nama }}">
                    </div>
                    <div class="col-md-7">
                        <h1><strong>About Me</strong></h1>
                        <h2>{{ $nama }}</h2>
                        <span><strong>Email : </strong>{{ $email }}</span>
                        <span><strong>&nbsp; &nbsp; Alamat : </strong>{{ $alamat }}</span>
                        <hr>
                        <h6><strong>Background</strong></h6>
                        <p>Nama saya Diah Kamalia, saya dari Bangkalan, kelahiran 2001. Alasan dibalik saya mendaftar kuliah di Universitas Trunojoyo karena tidak ingin jauh dari kucing - kucing saya. Alasan saya memilih Teknik Informatika karena saya lebih mahir dalam berpikir kreatif daripada berpikir kritis. Adios.</p>
                        <h6><strong>Suka Duka Praktikum PAW</strong></h6>
                        <p>Saya sangat menikmati sesi praktikum PAW kali ini, karena para asisten praktikum sama sekali tidak mengintimidasi yang dapat mengucilkan mental praktikan, mereka berinteraksi dengan praktikan sama seperti mereka berinteraksi dengan teman sebayanya. Namun, seringkali saya merasa tidak nyaman ketika ada praktikan lain yang seringkali tidak menjawab atau merespon pertanyaan dari asisten praktikum. Semangat ya kak :*</p>
                    </div>
                </div>    
            </div>
    	</div>
    </div>
</div>                       
@endsection
  