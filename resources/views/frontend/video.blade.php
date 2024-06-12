@extends('frontend.layouts.main')

@section('content')


<main id="main" class="internal-slide">
    <section class="internal-banner">
        <h1>Video Gallery</h1>

    </section>

    <section class="about-us">
        <!-- <div class="container" data-aos="fade-up">
            <div class="row" id="videos-container">
                @foreach($videos['items'] as $video)
                <div class="col-md-4">
                    <iframe width="350" height="200" src="https://www.youtube.com/embed/{{ $video['id']['videoId'] }}" frameborder="0" allow="autoplay; encrypted-media" allowfullscreen></iframe>
                    <h5 class="mt-2">{{ $video['snippet']['title'] }}</h5>
                </div>
                @endforeach
            </div>

            @if(isset($videos['nextPageToken']))
            <div class="text-center text-lg-center">
                <button id="load-more" class="btn-read-more d-inline-flex align-items-center justify-content-center align-self-center mt-3" data-next-page="{{ $videos['nextPageToken'] }}"><span>Load More</span><i class="bi bi-arrow-right"></i></button>
            </div>
            @endif
        </div> -->

        <div class="container" data-aos="fade-up">
            <div class="row" id="videos-container">
                @if(isset($videos['items']) && is_array($videos['items']) && count($videos['items']) > 0)
                @foreach($videos['items'] as $video)
                <div class="col-md-4">
                    <iframe width="350" height="200" src="https://www.youtube.com/embed/{{ $video['id']['videoId'] }}" frameborder="0" allow="autoplay; encrypted-media" allowfullscreen></iframe>
                    <h5 class="mt-2">{{ $video['snippet']['title'] }}</h5>
                </div>
                @endforeach
                @else
                <div class="col-md-12">
                    <p>No videos found.</p>
                </div>
                @endif
            </div>

            @if(isset($videos['nextPageToken']))
            <div class="text-center text-lg-center">
                <button id="load-more" class="btn-read-more d-inline-flex align-items-center justify-content-center align-self-center mt-3" data-next-page="{{ $videos['nextPageToken'] }}"><span>Load More</span><i class="bi bi-arrow-right"></i></button>
            </div>
            @endif
        </div>
    </section>
</main>
<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<script>
    $(document).ready(function() {
        $('#load-more').click(function() {
            var nextPageToken = $(this).data('next-page');
            $.ajax({
                url: '{{ route("fetchMoreVideos") }}', // Update the route to point to your server-side method
                method: 'GET',
                data: {
                    nextPageToken: nextPageToken
                },
                success: function(response) {
                    $('#videos-container').append(response.html);
                    if (response.nextPageToken) {
                        $('#load-more').data('next-page', response.nextPageToken);
                    } else {
                        $('#load-more').hide();
                    }
                },
                error: function(xhr, status, error) {
                    console.error(error);
                }
            });
        });
    });
</script>
@endsection