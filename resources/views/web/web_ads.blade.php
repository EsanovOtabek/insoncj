<section class="bg-light py-5 border-bottom">
    <div class="container py-4">
        <div class="pb-3">
            <h4 class="mb-2 fw-bold text-black">E'lonlar</h4>
        </div>
        <!-- 1st video -->
        <div class="row row-cols-1 row-cols-md-2 row-cols-lg-3 g-4">
            @foreach($news as $n)
                <div class="col">
                    <div class="card h-100 border-0 shadow-sm rounded-3 overflow-hidden video-card-item">
                        <img src="{{ asset('images/' . $n->image) }}">
                        <div class="card-body">
                            <h6 class="card-title pb-3 fw-bold text-black mb-0">
                                <span class="bg-primary badge text-white me-2">NEW</span>
                                {{ $n->title_uz }}
                            </h6>
                            <div class="card-text text-muted small">
                                {{ Str::of($n->text_uz)->words(20, ' ...') }}
                            </div>
                            <div class="text-muted gap-2 pt-2 small d-flex">
                                <span><i class="bi bi-calendar"></i> {{ $n->date }}</span>
                            </div>
                        </div>
                        <div class="card-footer border-0 bg-white border-top p-3">
                            <div class="d-grid">
                                <a href="{{ route('newsShow', $n->id) }}" class="btn btn-primary btn-lg">
                                    <i class="bi bi-eye"></i> Batafsil
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
    <div class="text-center mt-3 pb-4">
        <a href="{{route('news')}}" class="btn btn-outline-primary btn-lg">Barcha e'lonlar &nbsp;<i class="bi bi-arrow-right"></i></a>
    </div>
</section>
