@include('user.layouts.header')
@include('user.layouts.navbar')      

<main id="main">
    <div class="site-section pb-0">  
      
        <div class="container">
          <div class="row align-items-stretch">
            <div class="col-md-8" data-aos="fade-up">
              <img src="{{ asset('img/' . $kegiatan->nama_foto) }}" alt="Image" class="img-fluid">
            </div>
            <div class="col-md-3 ml-auto" data-aos="fade-up" data-aos-delay="100">
              <div class="sticky-content">
                <h3 class="h3 font-weight-bold">{{$kegiatan->judul}}</h3>
                <p class="mb-4"><span class="text-muted">{{$kegiatan->deskripsi}}</span></p>

                <div class="m-1 font-weight-bold">Pemateri : </div>
                  <p>{{$kegiatan->nama_pemateri}}
                </div>
                <div class="m-1 font-weight-bold">Tanggal Registrasi : </div>
                  <p>{{$kegiatan->tgl_buka}} sampai {{$kegiatan->tgl_tutup}}
                <div class="m-1 font-weight-bold">Tanggal Pelaksanaan : </div>
                  <p>{{$kegiatan->tgl_pelaksanaan}}
                <div class="m-1 font-weight-bold">Jam : </div>
                  <p>{{$kegiatan->jam_mulai}} WIB - {{$kegiatan->jam_selesai}} WIB
                <div class="m-1 font-weight-bold">Contack Person : </div>
                  <p>{{$kegiatan->contact_person}}
              
                <p><a href="{{ $kegiatan->link_meet }}" target="__blank" class="readmore">Link Meet</a></p>
              </div>
            </div>
          </div>
        </div>
    </div>

  </main>
@include('user.layouts.footer')