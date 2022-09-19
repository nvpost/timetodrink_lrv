
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet"  crossorigin="anonymous">
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.bundle.min.js" crossorigin="anonymous"></script>



<nav aria-label="Page navigation example">
    {{ $coctails->links() }}
</nav>

<div class="container">
    <div class="row">
    @foreach ($coctails as $coctail)
        @include('parts.catalog_bar',[
            'item'=>  $coctail
        ])

    @endforeach
    </div>
</div>

<style>
    ul.pagination{
        display: flex;
        list-style: none;
    }
    ul.pagination>li{
        margin: 0px 5px;
    }
</style>
