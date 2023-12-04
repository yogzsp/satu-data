<a href="#" class="border border-dark list-group-item list-group-item-action list-group-item-light">
    <div class="row row-cols-2">
        <div class="col-9">
            <div class="row row-cols-2 p-2">
                <div class="col-1 fs-1 text-end">
                    <i class="fa-brands fa-squarespace"></i>
                </div>
                <div class="col-11">
                    <h1 class="fs-3 fw-bold">{{$title}}</h1>
                    <p class="fs-5">{{$slot}}</p>
                </div>
            </div>
        </div>
        <div class="col-3">
            <div class="row row-cols-2">
                <div class="col-3 d-flex align-items-center">{{count($dataJenis)}} files</div>
                <div class="col-9">
                    <ul class="list-inline kategori-file">
                        @foreach($dataJenis as $listData)
                            <li class="list-inline-item btn border border-secondary rounded-pill" style="background-color:rgb(128,128,128,0.2)">
                                    {{$listData}}
                            </li>
                        @endforeach
                    </ul>
                </div>
            </div>
            <div class="row row-cols-2 mt-2">
                <div class="col resource-data text-primary">
                    {{$pusatData}}
                </div>
                <div class="col date-data">
                    {{$date}}
                </div>
            </div>
        </div>
    </div>
</a>