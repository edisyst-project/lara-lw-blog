<div class="container">
    <!--Section: Content-->
    <section class="text-center">
        <h4 class="mb-5"><strong>Latest posts</strong></h4>

        <div class="input-group mb-3">
            <input
                wire:model="search"
                type="text"
                class="form-control"
                placeholder="Filtra per titolo blog..."
                aria-label="Recipient's username"
                aria-describedby="button-addon2"
            />
            @if($search != '')
                <button wire:click="reset" class="btn btn-outline-primary" type="button" id="button-addon2" data-mdb-ripple-color="dark">
                    Reset filtro
                </button>
            @endif
        </div>

        <div class="row">
            @foreach($blogs as $blog)
                <div class="col-lg-4 col-md-12 mb-4">
                    <div class="card">
                        <div class="bg-image hover-overlay ripple" data-mdb-ripple-color="light">
{{--                            <img src="{{ $blog->photo }}" class="img-fluid" />--}}
                            <img src="{{ Storage::url($blog->photo) }}" class="img-fluid" />
                            <a href="{{ route('blogs.show', $blog->id) }}">
                                <div class="mask" style="background-color: rgba(251, 251, 251, 0.15);"></div>
                            </a>
                        </div>
                        <div class="card-body">
                            <h5 class="card-title">{{ $blog->title }}</h5>
                            <p class="card-text">
                                {{ \Illuminate\Support\Str::limit($blog->text, 10, '...') }}
                            </p>
                            <a href="{{ route('blogs.show', $blog->id) }}" class="btn btn-primary">Details</a>
                        </div>
                    </div>
                </div>
            @endforeach

            <div class="flex align-content-between">
                {{ $blogs->links() }}
            </div>
        </div>

    </section>
    <!--Section: Content-->

</div>
