



<div class="card" style="width: 18rem;">
    @php
    $a = explode('/', $item->src);
    $src = $a[count($a)-1];
    @endphp
    <img src="{{ URL('https://timetodrink.ru/imgs/'.$src) }}" class="card-img-top" alt="...">
    <div class="card-body">
        <h5 class="card-title">
            {{$item->name}}
        </h5>
        <p class="card-text">
            {{ Str::limit($item->process, 100, '...') }}
        </p>
    </div>
</div>
