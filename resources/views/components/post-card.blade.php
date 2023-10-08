<div class="col">
    <div class="blog-card card border-0">
        <div class="card-header border-0 bg-transparent ratio ratio-6x4 rounded overflow-hidden">
            <a href="{{ route('post',$id) }}" class="d-block">
                <img src="{{ $image }}" alt="" class="img-fluid post-thumbnail w-full h-full object-cover" />
            </a>
        </div>
        <div class="card-body p-0 mt-6">
            <ul class="list-unstyled d-flex flex-wrap align-center fs-sm meta-list">
                <li>{{ $name }}</li>
                <li>{{ $date }}</li>
                <li>{{ $author }}</li>
            </ul>

            <h4 class="post-title fw-medium mb-0">
                <a href="{{ route('post',$id)}}">{{ $title }}</a>
            </h4>
        </div>
    </div>
</div>
