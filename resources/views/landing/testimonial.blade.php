<div class="review-card rounded h-full p-6 border bg-lite-blue border-lite-blue-4">
    <div class="d-flex items-center gap-4 mb-6">
        <div class="w-12 h-12 rounded-circle overflow-hidden">
            <img src="{{ $avatar }}" alt="{{ $name }}" class="w-full h-full object-cover" />
        </div>
        <div class="">
            <h6 class="mb-1">{{ $name }}</h6>
            <p class="mb-0 fs-sm">{{ $role }}</p>
        </div>
    </div>
    <p>{{ $testimonial }}</p>
</div>
