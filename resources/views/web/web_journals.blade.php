<section class="bg-light py-5 feature-list border-bottom">
    <div class="container py-4">
        <div  class="pb-2">
            <h4 class="fw-bold text-black">{{ __('home.journals') }} </h4>
            <p class="mb-4 text-muted">{{ __('home.journals_last4') }} </p>
        </div>
        <div class="row row-cols-2 row-cols-md-4 row-cols-lg-4 row-cols-xl-4 g-4">
            @foreach($journals as $journal)
                <!-- {{ $loop->index }} mage -->
                <div class="col">
                    <div class="card h-100 border-0 shadow-sm rounded-3 overflow-hidden video-card-item">
                        <img src="{{ asset('images/journals/' . $journal->image) }}" class="card-img-top" alt="...">
                        <div class="card-body">
                            <h5 class="card-title mb-1 h6 text-dark">{{$journal['year']}}-yil. {{ $journal['number'] }}-son</h5>
                            <p class="card-text text-muted">{{$journal['year']}}-yil.</p>
                        </div>
                        <div class="card-footer bg-white border-0 d-flex align-items-center justify-content-between p-3 border-top">
{{--                            <p class="text-muted small mb-0">{{ date('Y.m.d', strtotime($journal['created_at'])) }}</p>--}}
                            <a href="{{ route('files.journal', $journal->file) }}" type="button" class="btn btn-primary btn-sm px-2 py-0">
                                <i class="bi bi-download"></i> {{ __('home.download') }}
                            </a>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
    </div>
</section>
