
<!doctype html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Bootstrap demo</title>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
        <link href="https://fonts.googleapis.com/css2?family=Poppins&display=swap" rel="stylesheet">
        <link rel="stylesheet" href="{{ asset('css/sipupuk.css') }}" />
    </head>

    <body>
        

        @include('component.navbaru')

        <div class="container-custom">
            <img src="{{ asset('storage/image/bg-sipupuk.jpg') }}"  class="header-image" alt="Deskripsi Gambar">
            <header class="py-5 border-bottom mb-4" style="z-index: 1; margin-top:-350px;">
                <div class="container">
                    <div class="text-center my-5">
                        <h1 class="fw-bold pt-5 fs-1 text-glow text-white">WELCOME TO SI PUPUK</h1>
                        <p class="lead mb-0 fs-6 text-white ">Sistem Informasi Pupuk 
                            adalah sistem informasi <br> yang membantu dalam memberikan informasi tentang pupuk
                        </p>
                    </div>
                </div>
            </header>

        <div class="container">
            
            <div class="d-flex justify-content-between border-bottom mb-3 ">

                <h3 class="fw-bold mb-4 warna-hijau">Artikel On Going</h3>

                <form class="input-group " style="width: 25%; height:30px;" action="{{ route('search') }}" method="GET">
                    <input class="form-control" type="search" placeholder="Masukkan kata kunci..." aria-label="Masukkan kata kunci..." 
                        aria-describedby="button-search" name="search" value="{{ old('search') }}" />
                    <button class="btn btn-primary" id="button-search" type="submit" style="background-color: #224038;">Cari!</button>
                </form>
                
            </div>

                <div style="width: 100%;">
                    <div class="row">
                        @forelse ($sipupuks as $sipupuk)
                            <div class="col-lg-4">
                                <div class="card mb-4 shadow" style="height: 350px;">
                                    <a href="#!"> <img class="card-img-top" src="{{ asset('storage/sipupuks/'.$sipupuk->image) }}" alt="..." style="width: 100%; height: 100%;"/> </a>
                                    <div class="card-body" style="width: 90%; margin:auto;"  >
                                        <div class=" fs-kecil text-muted m-0">Di Upload {{ $sipupuk->created_at->format('d F Y') }}</div>
                                        <h2 class=" warna-hijau fw-bold fs-besar my-1">{!! Str::limit($sipupuk->title, 15) !!}</h2>
                                        <p class=" fs-small mb-0 pb-0"> {!! Str::limit($sipupuk->content, 40) !!}</p>
                                        {{-- <p class="card-text">{{ Str::limit($sipupuk->content, 50) }}</p> --}}
                                        <a class="btn btn-primary py-2" href="{{ route('sipupuk.show', $sipupuk->id) }}"  style="background-color: #224038; border :none; font-size:13px; margin-top:-10px;">Baca selengkapnya →</a>
                                    </div>
                                </div>
                            </div>
                        @empty
                            <div class="alert alert-danger col-lg-12">
                                Artikel belum Tersedia.
                            </div>
                        @endforelse
                    </div>
                </div>

        </div>


                <div class="container d-flex justify-content-center border-top" style="width: 100%;">
                    <!--Pagination-->
                    <nav aria-label="Pagination">
                        <ul class="pagination my-4">
                            @if ($sipupuks->onFirstPage())
                                <li class="page-item disabled" aria-disabled="true" aria-label="@lang('pagination.previous')">
                                    <span class="page-link" aria-hidden="true">Previous</span>
                                </li>
                            @else
                                <li class="page-item">
                                    <a class="page-link" href="{{ $sipupuks->previousPageUrl() }}" rel="prev" aria-label="@lang('pagination.previous')">Previous</a>
                                </li>
                            @endif
                
                
                            @if ($sipupuks->hasMorePages())
                                <li class="page-item">
                                    <a class="page-link" href="{{ $sipupuks->nextPageUrl() }}" rel="next" aria-label="@lang('pagination.next')">Next</a>
                                </li>
                            @else
                                <li class="page-item disabled" aria-disabled="true" aria-label="@lang('pagination.next')">
                                    <span class="page-link" aria-hidden="true">Next</span>
                                </li>
                            @endif
                        </ul>
                    </nav>
                    <!--End Pagination-->
                </div>

            </div>
            <div>
                @include('component.footer')
            </div>
    </body>
</html>

