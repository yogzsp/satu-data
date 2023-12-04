<a href="{{$url}}">
    <div class="card" style="width: {{$wx}};">
        <div class="image-card border-bottom" style="height:300px;overflow:hidden;">
            <img src="{{ asset($source) }}" class="card-img-top" alt="...">
        </div>
        <div class="card-body">
            <h5 class="card-title">{{$title}}</h5>
            <p class="card-text">
                {{$slot}}
            </p>
        </div>
    </div>
</a>