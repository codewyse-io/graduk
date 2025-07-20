@extends('layout.app')

@section('content')
<main>

    <div class="breadcrumb__area dark-green breadcrumb-space overflow-hidden custom-width position-relative z-1" data-background="assets/imgs/breadcrumb/breadcrumb.png">
        <div class="container">
            <div class="row align-items-center justify-content-between">
                <div class="col-12">
                    <div class="breadcrumb__content">
                        <div class="breadcrumb__title-wrapper mb-15 mb-sm-10 mb-xs-5">
                            <h1 class="breadcrumb__title color-white wow fadeInLeft animated" data-wow-delay=".2s">Countries</h1>
                        </div>
                        <div class="breadcrumb__menu wow fadeInLeft animated" data-wow-delay=".3s">
                            <nav>
                                <ul>
                                    <li><span><a href="/">Home</a></span></li>
                                    <li class="active"><span>Countries</span></li>
                                </ul>
                            </nav>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!--countries start-->
    <section class="countries section-space tab overflow-hidden">
        <div class="container">
            <div class="row">
                <div class="col-lg-4">
                    <ul class="nav nav-tabs countries__tab tab__wrap"  id="myTab" role="tablist">
                        <li class="nav-item" role="presentation">
                            <button class="active tab__btn pb-20" id="asia-tab" data-bs-toggle="tab" data-bs-target="#asia" type="button" role="tab" aria-controls="asia" aria-selected="true">
                                Asia
                                <i class="fa-solid fa-angle-right"></i>
                            </button>
                        </li>
                        <li class="nav-item" role="presentation">
                            <button class="pb-20"  id="europe-tab" data-bs-toggle="tab" data-bs-target="#europe" type="button" role="tab" aria-controls="europe" aria-selected="true">
                                Europe
                                <i class="fa-solid fa-angle-right"></i>
                            </button>
                        </li>
                        <li class="nav-item" role="presentation">
                            <button class="pb-20"  id="north-america-tab" data-bs-toggle="tab" data-bs-target="#north-america" type="button" role="tab" aria-controls="north-america" aria-selected="true">
                                North America
                                <i class="fa-solid fa-angle-right"></i>
                            </button>
                        </li>
                        <li class="nav-item" role="presentation">
                            <button class="pb-20"  id="australia-tab" data-bs-toggle="tab" data-bs-target="#australia" type="button" role="tab" aria-controls="australia" aria-selected="true">
                                Australia
                                <i class="fa-solid fa-angle-right"></i>
                            </button>
                        </li>
                        <li class="nav-item" role="presentation">
                            <button class="pb-20"  id="latine-america-tab" data-bs-toggle="tab" data-bs-target="#latine-america" type="button" role="tab" aria-controls="latine-america" aria-selected="true">
                                Latine America
                                <i class="fa-solid fa-angle-right"></i>
                            </button>
                        </li>
                        <li class="nav-item" role="presentation">
                            <button id="africa-tab" data-bs-toggle="tab" data-bs-target="#africa" type="button" role="tab" aria-controls="africa" aria-selected="true">
                                Africa
                                <i class="fa-solid fa-angle-right"></i>
                            </button>
                        </li>
                    </ul>
                </div>
                <div class="col-lg-8">
                    <div class="tab-content" >
                        <div class="tab-pane fade show active" id="asia" role="tabpanel" aria-labelledby="asia-tab">
                            <div class="countries__tab-content">
                                <div class="countries__tab-content__countries-name  mb-30 d-flex">
                                    <img src="{{ asset('./assets/imgs/countrie/russia.png') }}">                                    <h5>Russia</h5>
                                </div>
                                <div class="countries__tab-content__countries-name mb-30 d-flex">
                                    <img src="{{ asset('./assets/imgs/countrie/japan.png') }}">                                    <h5>Japan</h5>
                                </div>
                                <div class="countries__tab-content__countries-name mb-30 d-flex">
                                    <img src="{{ asset('./assets/imgs/countrie/egypt.png') }}">                                    <h5>Egypt</h5>
                                </div>
                                <div class="countries__tab-content__countries-name mb-30 d-flex">
                                    <img src="{{ asset('./assets/imgs/countrie/south-korea.png') }}">                                    <h5>South Korea</h5>
                                </div>
                                <div class="countries__tab-content__countries-name mb-30 d-flex">
                                    <img src="{{ asset('./assets/imgs/countrie/indonesia.png') }}">                                    <h5>Indonesia</h5>
                                </div>
                                <div class="countries__tab-content__countries-name d-flex">
                                    <img src="{{ asset('./assets/imgs/countrie/turkey.png') }}">                                    <h5>Turkey</h5>
                                </div>
                                <div class="countries__tab-content__countries-name mb-30 d-flex">
                                    <img src="{{ asset('./assets/imgs/countrie/thailand.png') }}">                                    <h5>Thailand</h5>
                                </div>
                                <div class="countries__tab-content__countries-name mb-30 d-flex">
                                    <img src="{{ asset('./assets/imgs/countrie/china.png') }}">                                    <h5>China</h5>
                                </div>
                                <div class="countries__tab-content__countries-name mb-30 d-flex">
                                    <img src="{{ asset('./assets/imgs/countrie/india.png') }}">                                    <h5>India</h5>
                                </div>
                                <div class="countries__tab-content__countries-name mb-30 d-flex">
                                    <img src="{{ asset('./assets/imgs/countrie/malaysia.png') }}">                                    <h5>Malaysia</h5>
                                </div>
                                <div class="countries__tab-content__countries-name mb-30 d-flex">
                                    <img src="{{ asset('./assets/imgs/countrie/cambodia.png') }}">                                    <h5>Cambodia</h5>
                                </div>
                                <div class="countries__tab-content__countries-name d-flex">
                                    <img src="{{ asset('./assets/imgs/countrie/myanmar.png') }}">                                    <h5>Myanmar</h5>
                                </div>
                            </div>
                        </div>
                        <div class="tab-pane fade" id="europe" role="tabpanel" aria-labelledby="europe-tab">
                            <div class="countries__tab-content">
                                <div class="countries__tab-content__countries-name  mb-30 d-flex wow fadeInLeft animated">
                                    <img src="{{ asset('./assets/imgs/countrie/germany.png') }}">                                    <h5>Germany</h5>
                                </div>
                                <div class="countries__tab-content__countries-name mb-30 d-flex wow fadeInLeft animated">
                                    <img src="{{ asset('./assets/imgs/countrie/russia.png') }}">                                    <h5>Russia</h5>
                                </div>
                                <div class="countries__tab-content__countries-name mb-30 d-flex wow fadeInLeft animated">
                                    <img src="{{ asset('./assets/imgs/countrie/italy.png') }}">                                    <h5>Italy</h5>
                                </div>
                                <div class="countries__tab-content__countries-name mb-30 d-flex wow fadeInLeft animated">
                                    <img src="{{ asset('./assets/imgs/countrie/switzerland.png') }}">                                    <h5>Switzerland</h5>
                                </div>
                                <div class="countries__tab-content__countries-name mb-30 d-flex wow fadeInLeft animated">
                                    <img src="{{ asset('./assets/imgs/countrie/sweden.png') }}">                                    <h5>Sweden</h5>
                                </div>
                                <div class="countries__tab-content__countries-name  d-flex wow fadeInLeft animated">
                                    <img src="{{ asset('./assets/imgs/countrie/greece.png') }}">                                    <h5>Greece</h5>
                                </div>
                                <div class="countries__tab-content__countries-name mb-30  d-flex wow fadeInLeft animated">
                                    <img src="{{ asset('./assets/imgs/countrie/belgium.png') }}">                                    <h5>Belgium</h5>
                                </div>
                                <div class="countries__tab-content__countries-name mb-30  d-flex wow fadeInLeft animated">
                                    <img src="{{ asset('./assets/imgs/countrie/croatia.png') }}">                                    <h5>Croatia</h5>
                                </div>
                                <div class="countries__tab-content__countries-name mb-30  d-flex wow fadeInLeft animated">
                                    <img src="{{ asset('./assets/imgs/countrie/norway.png') }}">                                    <h5>Norway</h5>
                                </div>
                                <div class="countries__tab-content__countries-name mb-30  d-flex wow fadeInLeft animated">
                                    <img src="{{ asset('./assets/imgs/countrie/denmark.png') }}">                                    <h5>Denmark</h5>
                                </div>
                                <div class="countries__tab-content__countries-name mb-30  d-flex wow fadeInLeft animated">
                                    <img src="{{ asset('./assets/imgs/countrie/iceland.png') }}">                                    <h5>Iceland</h5>
                                </div>
                                <div class="countries__tab-content__countries-name  d-flex wow fadeInLeft animated">
                                    <img src="{{ asset('./assets/imgs/countrie/hungary.png') }}">                                    <h5>Hungary</h5>
                                </div>
                            </div>
                        </div>
                        <div class="tab-pane fade" id="north-america" role="tabpanel" aria-labelledby="north-america-tab">
                           <div class="countries__tab-content">
                                <div class="countries__tab-content__countries-name  mb-30 d-flex wow fadeInLeft animated">
                                    <img src="{{ asset('./assets/imgs/countrie/united-states.png') }}">                                    <h5>United States</h5>
                                </div>
                                <div class="countries__tab-content__countries-name mb-30 d-flex wow fadeInLeft animated">
                                    <img src="{{ asset('./assets/imgs/countrie/bahamas.png') }}">                                    <h5>Bahamas</h5>
                                </div>
                                <div class="countries__tab-content__countries-name mb-30 d-flex wow fadeInLeft animated">
                                    <img src="{{ asset('./assets/imgs/countrie/dominican-republic.png') }}">                                    <h5>Dominican Republic</h5>
                                </div>
                                <div class="countries__tab-content__countries-name mb-30 d-flex wow fadeInLeft animated">
                                    <img src="{{ asset('./assets/imgs/countrie//jamaica.png') }}">                                    <h5>Jamaica</h5>
                                </div>
                                <div class="countries__tab-content__countries-name mb-30 d-flex wow fadeInLeft animated">
                                    <img src="{{ asset('./assets/imgs/countrie/belize.png') }}">                                    <h5>Belize</h5>
                                </div>
                                <div class="countries__tab-content__countries-name d-flex wow fadeInLeft animated">
                                    <img src="{{ asset('./assets/imgs/countrie/honduras.png') }}">                                    <h5>Honduras</h5>
                                </div>
                                <div class="countries__tab-content__countries-name mb-30 d-flex wow fadeInLeft animated">
                                    <img src="{{ asset('./assets/imgs/countrie/panama.png') }}">                                    <h5>Panama</h5>
                                </div>
                                <div class="countries__tab-content__countries-name mb-30 d-flex wow fadeInLeft animated">
                                    <img src="{{ asset('./assets/imgs/countrie/barbados.png') }}">                                    <h5>Barbados</h5>
                                </div>
                                <div class="countries__tab-content__countries-name mb-30 d-flex wow fadeInLeft animated">
                                    <img src="{{ asset('./assets/imgs/countrie/guadeloupe.png') }}">                                    <h5>Guadeloupe</h5>
                                </div>
                                <div class="countries__tab-content__countries-name mb-30 d-flex wow fadeInLeft animated">
                                    <img src="{{ asset('./assets/imgs/countrie/grenada.png') }}">                                    <h5>Grenada</h5>
                                </div>
                                <div class="countries__tab-content__countries-name mb-30 d-flex wow fadeInLeft animated">
                                    <img src="{{ asset('./assets/imgs/countrie/montserrat.png') }}">                                    <h5>Montserrat</h5>
                                </div>
                                <div class="countries__tab-content__countries-name d-flex wow fadeInLeft animated">
                                    <img src="{{ asset('./assets/imgs/countrie/sint-maarten.png') }}">                                    <h5>Sint Maarten</h5>
                                </div>
                            </div>
                        </div>
                        <div class="tab-pane fade" id="australia" role="tabpanel" aria-labelledby="australia-tab">
                           <div class="countries__tab-content">
                                <div class="countries__tab-content__countries-name  mb-30 d-flex wow fadeInLeft animated">
                                    <img src="{{ asset('./assets/imgs/countrie/australia.png') }}">                                    <h5>Australia</h5>
                                </div>
                                <div class="countries__tab-content__countries-name mb-30 d-flex wow fadeInLeft animated">
                                    <img src="{{ asset('./assets/imgs/countrie/nauru.png') }}">                                    <h5>Nauru</h5>
                                </div>
                                <div class="countries__tab-content__countries-name mb-30 d-flex wow fadeInLeft animated">
                                    <img src="{{ asset('./assets/imgs/countrie/papua.png') }}">                                    <h5>Papua New Guinea</h5>
                                </div>
                                <div class="countries__tab-content__countries-name mb-30 d-flex wow fadeInLeft animated">
                                    <img src="{{ asset('./assets/imgs/countrie/micronesia.png') }}">                                    <h5>Micronesia</h5>
                                </div>
                                <div class="countries__tab-content__countries-name mb-30 d-flex wow fadeInLeft animated">
                                    <img src="{{ asset('./assets/imgs/countrie/tuvalu.png') }}">                                    <h5>Tuvalu</h5>
                                </div>
                                <div class="countries__tab-content__countries-name mb-30 d-flex wow fadeInLeft animated">
                                    <img src="{{ asset('./assets/imgs/countrie/kiribati.png') }}">                                    <h5>Kiribati</h5>
                                </div>
                                <div class="countries__tab-content__countries-name d-flex wow fadeInLeft animated">
                                    <img src="{{ asset('./assets/imgs/countrie/new-zealand.png') }}">                                    <h5>New Zealand</h5>
                                </div>
                                <div class="countries__tab-content__countries-name mb-30 d-flex wow fadeInLeft animated">
                                    <img src="{{ asset('./assets/imgs/countrie/solomon-islands.png') }}">                                    <h5>Solomon-Islands</h5>
                                </div>
                                <div class="countries__tab-content__countries-name mb-30 d-flex wow fadeInLeft animated">
                                    <img src="{{ asset('./assets/imgs/countrie/fiji.png') }}">                                    <h5>Fiji</h5>
                                </div>
                                <div class="countries__tab-content__countries-name mb-30 d-flex wow fadeInLeft animated">
                                    <img src="{{ asset('./assets/imgs/countrie/new-south-wales.png') }}">                                    <h5>New South Wales</h5>
                                </div>
                                <div class="countries__tab-content__countries-name mb-30 d-flex wow fadeInLeft animated">
                                    <img src="{{ asset('./assets/imgs/countrie/ashmore-and-cartier-islands.png') }}">                                    <h5>Cartier Islands</h5>
                                </div>
                                <div class="countries__tab-content__countries-name d-flex wow fadeInLeft animated">
                                    <img src="{{ asset('./assets/imgs/countrie/united-states.png') }}">                                    <h5>United states</h5>
                                </div>
                            </div>
                        </div>
                        <div class="tab-pane fade" id="latine-america" role="tabpanel" aria-labelledby="latine-america-tab">
                           <div class="countries__tab-content">
                                <div class="countries__tab-content__countries-name  mb-30 d-flex wow fadeInLeft animated">
                                    <img src="{{ asset('./assets/imgs/countrie/argentina.png') }}">                                    <h5>Argentina</h5>
                                </div>
                                <div class="countries__tab-content__countries-name mb-30 d-flex wow fadeInLeft animated">
                                    <img src="{{ asset('./assets/imgs/countrie/brazil.png') }}">                                    <h5>Brazil</h5>
                                </div>
                                <div class="countries__tab-content__countries-name mb-30 d-flex wow fadeInLeft animated">
                                    <img src="{{ asset('./assets/imgs/countrie/venezuela.png') }}">                                    <h5>Venezuela</h5>
                                </div>
                                <div class="countries__tab-content__countries-name mb-30 d-flex wow fadeInLeft animated">
                                    <img src="{{ asset('./assets/imgs/countrie/uruguay.png') }}">                                    <h5>Uruguay</h5>
                                </div>
                                <div class="countries__tab-content__countries-name mb-30 d-flex wow fadeInLeft animated">
                                    <img src="{{ asset('./assets/imgs/countrie/colombia.png') }}">                                    <h5>Colombia</h5>
                                </div>
                                <div class="countries__tab-content__countries-name d-flex wow fadeInLeft animated">
                                    <img src="{{ asset('./assets/imgs/countrie/martinique.png') }}">                                    <h5>Martinique</h5>
                                </div>
                                <div class="countries__tab-content__countries-name mb-30 d-flex wow fadeInLeft animated">
                                    <img src="{{ asset('./assets/imgs/countrie/peru.png') }}">                                    <h5>Peru</h5>
                                </div>
                                <div class="countries__tab-content__countries-name mb-30 d-flex wow fadeInLeft animated">
                                    <img src="{{ asset('./assets/imgs/countrie/barbuda.png') }}">                                    <h5>Barbuda</h5>
                                </div>
                                <div class="countries__tab-content__countries-name mb-30 d-flex wow fadeInLeft animated">
                                    <img src="{{ asset('./assets/imgs/countrie/el-salvador.png') }}">                                    <h5>El Salvador</h5>
                                </div>
                                <div class="countries__tab-content__countries-name mb-30 d-flex wow fadeInLeft animated">
                                    <img src="{{ asset('./assets/imgs/countrie/puerto-rico.png') }}">                                    <h5>Puerto Rico</h5>
                                </div>
                                <div class="countries__tab-content__countries-name mb-30 d-flex wow fadeInLeft animated">
                                    <img src="{{ asset('./assets/imgs/countrie/saint-barthelemy.png') }}">                                    <h5>Saint Barthélemy</h5>
                                </div>
                                <div class="countries__tab-content__countries-name d-flex wow fadeInLeft animated">
                                    <img src="{{ asset('./assets/imgs/countrie/ecuador.png') }}">                                    <h5>Ecuador</h5>
                                </div>
                            </div>
                        </div>
                        <div class="tab-pane fade" id="africa" role="tabpanel" aria-labelledby="africa-tab">
                           <div class="countries__tab-content">
                                <div class="countries__tab-content__countries-name  mb-30 d-flex wow fadeInLeft animated">
                                    <img src="{{ asset('./assets/imgs/countrie/south-africa.png') }}">                                    <h5>South Africa</h5>
                                </div>
                                <div class="countries__tab-content__countries-name mb-30 d-flex wow fadeInLeft animated">
                                    <img src="{{ asset('./assets/imgs/countrie/uganda.png') }}">                                    <h5>Uganda</h5>
                                </div>
                                <div class="countries__tab-content__countries-name mb-30 d-flex wow fadeInLeft animated">
                                    <img src="{{ asset('./assets/imgs/countrie/ethiopia.png') }}">                                    <h5>Ethiopia</h5>
                                </div>
                                <div class="countries__tab-content__countries-name mb-30 d-flex wow fadeInLeft animated">
                                    <img src="{{ asset('./assets/imgs/countrie/ghana.png') }}">                                    <h5>Ghana</h5>
                                </div>
                                <div class="countries__tab-content__countries-name mb-30 d-flex wow fadeInLeft animated">
                                    <img src="{{ asset('./assets/imgs/countrie/morocco.png') }}">                                    <h5>Morocco</h5>
                                </div>
                                <div class="countries__tab-content__countries-name d-flex wow fadeInLeft animated">
                                    <img src="{{ asset('./assets/imgs/countrie/tanzania.png') }}">                                    <h5>Tanzania</h5>
                                </div>
                                <div class="countries__tab-content__countries-name mb-30 d-flex wow fadeInLeft animated">
                                    <img src="{{ asset('./assets/imgs/countrie/senegal.png') }}">                                    <h5>Senegal</h5>
                                </div>
                                <div class="countries__tab-content__countries-name mb-30 d-flex wow fadeInLeft animated">
                                    <img src="{{ asset('./assets/imgs/countrie/niger.png') }}">                                    <h5>Niger</h5>
                                </div>
                                <div class="countries__tab-content__countries-name mb-30 d-flex wow fadeInLeft animated">
                                    <img src="{{ asset('./assets/imgs/countrie/rwanda.png') }}">                                    <h5>Rwanda</h5>
                                </div>
                                <div class="countries__tab-content__countries-name mb-30 d-flex wow fadeInLeft animated">
                                    <img src="{{ asset('./assets/imgs/countrie/somalia.png') }}">                                    <h5>Somalia</h5>
                                </div>
                                <div class="countries__tab-content__countries-name mb-30 d-flex wow fadeInLeft animated">
                                    <img src="{{ asset('./assets/imgs/countrie/guinea.png') }}">                                    <h5>guinea</h5>
                                </div>
                                <div class="countries__tab-content__countries-name d-flex wow fadeInLeft animated">
                                    <img src="{{ asset('./assets/imgs/countrie/gabon.png') }}">                                    <h5>gabon</h5>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

</main>
@endsection