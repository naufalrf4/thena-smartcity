<div class="col" data-aos="fade-up-sm" data-aos-delay="{{ $index * 50 }}">
    <div class="blog-card card border-0">
        <div class="card-header border-0 bg-transparent ratio ratio-6x4 rounded overflow-hidden">
            <a href="{{ $article['link'] }}" class="d-block">
                <img src="{{ $article['thumbnail'] }}" alt="" class="img-fluid post-thumbnail w-full h-full object-cover" />
            </a>
        </div>
        <div class="card-body p-0 mt-6">
            <ul class="list-unstyled d-flex flex-wrap align-center fs-sm meta-list">
                <li>{{ \Carbon\Carbon::parse($article['pubDate'])->format('d M Y') }}</li>
            </ul>

            <h4 class="post-title fw-medium mb-0">
                <a href="{{ $article['link'] }}">{{ $article['title'] }}</a>
            </h4>
            <p>{{ $article['description'] }}</p>
        </div>
    </div>
</div>
