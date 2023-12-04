<div class="card p-2 rounded-4" style="background:#625E5B;width:33rem;height:30rem;">
    <div class="card-body p-0">
        <div class="logo-card my-3 bg-white rounded-2 d-flex align-items-center justify-content-center" style="height:80px;width:80px;">
            <img src="{{ $images }}" width="70px">
        </div>
        <div class="text-card">
            <h1 class="title-logo text-white" style="font-size:40px;">{{$title}}</h1>
            <p class="text-justify text-white">
                {{$slot}}
            </p>
        </div>
    </div>
    <div class="w-100">
        <div class="rounded-3 float-end d-flex align-items-center justify-content-center" style="width:80px;height:60px;font-size:40px;background:#62BDFF;">
            <i class="fa-solid fa-arrow-right-to-bracket"></i>
        </div>
    </div>
</div>