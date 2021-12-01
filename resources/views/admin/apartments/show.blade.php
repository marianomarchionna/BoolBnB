@extends('layouts.dashboard')

@section('content')
<div id="admin_show_container" class="marble-background">
    <div class="container my-4">
        <div class="row">
            <div class="col-12">
                <a class="btn btn-secondary shadow" href="{{ route('admin.apartments.index') }}"><span>&#8592;</span> Torna ai tuoi immobili</a>
            </div>
        </div>
    </div>

    <div class="container">
        <div class="row">
            <div class="col-12">
                <div class="p-4 white-background shadow">
                    <div class="d-flex item-align-end overflow-auto">
                        <i class="fas fa-home font-m"></i>
                        <h1 class="font-ml mb-0 ml-3">{{$apartment->name}}</h1>
                    </div>
                    <hr class="d-none d-md-block">
                    <div class="d-none d-md-inline-block">
                        <ul class="font-xxs d-flex p-0">
                            <li>
                                <i class="fas fa-map-marker-alt font-xxs"></i>
                                <span>{{$apartment->address}}</span>
                            </li>
                            <li class="mx-3">|</li>
                            <li>
                                <i class="fas fa-door-open font-xxs"></i>
                                <span>{{$apartment->num_rooms}} camere</span>
                            </li>
                            <li class="mx-3">|</li>
                            <li>
                                <i class="fas fa-bed font-xxs"></i>
                                <span>{{$apartment->num_beds}} letti</span>
                            </li>
                            <li class="mx-3">|</li>
                            <li>
                                <i class="fas fa-ruler-combined font-xxs"></i>
                                <span>{{$apartment->square_meters}}mq</span>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="container">
        <div class="row">
            <div class="col-12 col-lg-8">
                <div class="my-5">
                    <img class="w-100 shadow" src="https://www.lignius.it/fileadmin/_processed_/b/8/csm_suedtirolhaus_MirrorHouses_5cbac.0_a556da6959.jpg" alt="">
                </div> 

                <div class="d-flex justify-content-between align-items-start container-fluid">
                    <div class="row row-cols-1 row-cols-lg-2 justify-content-between">
                        <div class="col pr-lg-3 p-0">
                            <div class="white-background p-4 shadow">
                                <h2 class="mb-4 font-sm">Caratteristiche immobile:</h2>
                                <ul class="list-group">
                                    <li class="list-group-item">
                                        <span class="darkgray-text">Numero stanze: </span>
                                        <span>{{ $apartment->num_rooms }}</span>
                                    </li>
                                    <li class="list-group-item">
                                        <span class="darkgray-text">Numero letti: </span>
                                        <span>{{ $apartment->num_beds }}</span>
                                    </li>
                                    <li class="list-group-item">
                                        <span class="darkgray-text">Numero bagni: </span>
                                        <span>{{ $apartment->num_bathrooms }}</span>
                                    </li>
                                    <li class="list-group-item">
                                        <span class="darkgray-text">Metri quadrati: </span>
                                        <span>{{ $apartment->square_meters }}mq</span>
                                    </li>
                                    <li class="list-group-item">
                                        <span class="darkgray-text">Indirizzo: </span>
                                        <span>{{$apartment->address}}</span>
                                    </li>
                                </ul>
                            </div>
                        </div>

                        <div class="col pl-lg-3 pt-5 pt-lg-0 p-0">
                            <div class="col white-background p-4 shadow">
                                <h2 class="font-sm mb-4">Servizi dell'immobile:</h2>
            
                                <ul class="d-flex p-0 info-container services-list flex-wrap">
                                    @foreach ($apartment->services as $service)
                                        <li>
                                            <span class="shadow">{{ $service->name}}</span>
                                        </li>
                                    @endforeach
                                </ul>
                            </div> 
                        </div> 
                    </div>
                </div>
            </div> 

            <div class="col-12 col-lg-4 px-4 pt-4">
                <div class="sticky-top pt-3">
                    <h3 class="font-ss my-2 p-3 white-background shadow">Opzioni scheda appartamento</h3>

                    <ul class="list-group mt-3 shadow">
                        <li class="list-group-item list-group-item-action">
                            <a href="{{ route('admin.apartments.edit', $apartment->slug) }}" class="btn btn-dark w-100">
                                Modifica scheda immobile
                            </a>
                        </li>
                        <li class="list-group-item list-group-item-action">
                            <a href="" class="btn btn-dark w-100">
                                Sponsorizzazione immobile
                            </a>
                        </li>
                        <li class="list-group-item list-group-item-action">
                            <form action="{{ route('admin.apartments.destroy', $apartment->id) }}" class="deleteForm" method="POST">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="btn btn-danger w-100">Elimina scheda immobile</button>
                            </form>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
        
        <div class="row">
            <div class="col-12">
                <div class="white-background p-4 my-5 shadow">
                    <h2 class="font-m">Descrizione:</h2>
                    <hr>
                    <p>{{ $apartment->description }}</p>
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Nam, tenetur? Quo, nemo. Dolor quisquam fugiat numquam est nesciunt nam a, ducimus ex doloremque. Nisi deserunt earum veritatis, ad totam laudantium? Lorem ipsum dolor sit, amet consectetur adipisicing elit. Necessitatibus consectetur qui debitis, perspiciatis consequatur repellendus quae accusamus alias autem placeat deleniti? Laborum necessitatibus soluta amet eveniet ab non ea molestiae. Lorem ipsum dolor sit amet consectetur adipisicing elit. Expedita, eos dicta. Quidem reprehenderit consectetur natus numquam quae laudantium, sed assumenda dolor quaerat placeat nam nisi odio consequuntur itaque animi blanditiis! Lorem ipsum dolor sit amet consectetur adipisicing elit. Facere porro illum id vel velit dolore minima quisquam! Aliquam amet ea rem natus tempore nesciunt excepturi, suscipit officia vel, ipsum laboriosam. Lorem ipsum dolor sit amet consectetur, adipisicing elit. Nemo adipisci beatae illum laudantium culpa! Quibusdam aliquam alias harum repellendus. Assumenda maxime sint autem enim asperiores expedita iste odio dolores quae!</p>
                </div>  
            </div> 
        </div>

        <div class="row">
            <div class="col-12">
                <div class="white-background p-4 shadow">
                    <div class="d-flex">
                        <i class="fas fa-map-marker-alt"></i>
                        <h2 class="font-m mx-3">Indirizzo immobile:</h2>
                    </div>
                    <hr>
                    <p><span><i class="fas fa-map-pin font-xxs mr-4"></i></span>{{ $apartment->address }}</p>
                    <hr>
                    <div class="w-100">
                        <img class="w-100" src="https://miro.medium.com/max/1400/1*qYUvh-EtES8dtgKiBRiLsA.png" alt="">
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection