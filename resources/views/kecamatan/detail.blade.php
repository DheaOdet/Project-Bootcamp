@extends('template.layout')
@section('content')
<div class="container">
    <div class="row text-center">
        <h1>
            Kecamatan Kubu
        </h1>
    </div>
    <div class="row">
        <div class="d-flex justify-content-center">
            <div class="col">
            <img src="../img/kubu1.jpg" class="card-img-top" alt="...">
            </div>
            <div class="col">
            <img src="../img/kubu1.jpeg" class="card-img-top" alt="...">
            </div>
            <div class="col">
            <img src="../img/kubu2.jpg" class="card-img-top" alt="...">
            </div>
        </div>
    </div>

    <div class="row">
        <h1>About</h1>
        <hr>
        <p> Kubu District is a sub-district in Karangasem Regency, Bali, Indonesia. Kubu District is located in the northern part of the island of Bali and is in direct contact with the Bali Sea and is located at the foot of Mount Agung. This sub-district is one of the areas that became the path of lava flows when Mount Agung erupted in 1963. That is also why, at this time, Kubu Sub-district is a sand mining area and is the main supplier to meet the needs of sand and stone materials for the western part of Bali including Buleleng Regency and State Regency. Sand entrepreneurs in the Kubu sub-district have taken a step forward compared to other regions by forming an association to accommodate sand mining activities with the aim of maintaining order and mining patterns in accordance with the rules applied by the local government of Karangasem Regency.  </p>
        <a href="/detail" class="btn btn-primary">Natural Tourism</a>
        <a href="/detail" class="btn btn-primary">Lodging</a>
        <a href="/detail" class="btn btn-primary">Restaurant</a>
    </div>
</div>

@endsection
