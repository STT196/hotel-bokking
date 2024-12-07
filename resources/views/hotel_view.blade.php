@extends('header')

@section('content')
    <div class="hs-banner-wrapper ">
        <div class="owl-carousel owl-theme p-rel">
            <div class="item">
                <div>
                    <img style="width: 415px; height: 736px;" src="{{ asset($details->crn_photo) }}" alt="CRN Room Photo">
                </div>
            </div>
            <div class="item">
                <div>
                    <img style="width: 505px; height: 738px;" src="{{ asset($details->luxury_room_image) }}" alt="Luxury Room">
                </div>
            </div>
            <div class="item">
                <div>
                    <img style="width: 452px; height: 725px;" src="{{ asset($details->deluxe_room_image) }}" alt="Deluxe Room">
                </div>
            </div>
        </div>

    <div class="hs-blog-wrapper">
        <div class="container">
            <div class="row">
                <div class="col-xl-9 col-lg-8 col-md-12 col-sm-12 col-12">
                    <div class="hs-blog-content">
                        <h3><a href="">{{ $details->title }}</a></h3>
                        <div class="pt-20">
                            <a href="" class="text-color"><span><i
                                        class="fas fa-map-marker-alt text-color"></i></span>
                                {{ $details->address }}, {{$details->cities->name_en}},{{ $details->districts->name_en }}, {{ $details->zip_code }}  </a>

                        </div>
                        <div class="pt-20">
                            Start From- <span class="text-design">Rs{{ $details->price_from }} / Night</span>
                        </div>
                        <p class="pt-20">{{ $details->description }} </p>


                    </div>

                    <div class="hs-map-sec">
                        <div class="row">
                            <div class="col-lg-12 col-md-12 col-sm-12 col-12">
                                <h4><a href="">Hotel Location</a></h4>
                                <div style="width: 100%; height: 500px;">
                                    <div class="with-amp">
                                        <div class="map-view">
                                            <x-maps-leaflet style="width: 831px; height: 500px;" :center-point="[$details->latitude, $details->longitude]"
                                                :markers="[[$details->latitude, $details->longitude]]"></x-maps-leaflet>
                                        </div>
                                    </div>
                                </div>
                                <div class="hs-box">
                                    <div class="row">

                                        <div class="col-xl-6 col-lg-12 col-md-12 col-sm-12 col-12">


                                            <span><i class="fas fa-phone-alt"></i></span>
                                            <div class="f-right">
                                                <a href="">Call Us</a>
                                                <h6><a
                                                        href="">{{ $details->telephone ? $details->telephone : '' }}</a>
                                                </h6>
                                            </div>


                                        </div>

                                        <div class="col-xl-6 col-lg-12 col-md-12 col-sm-12 col-12">


                                            <span><i class="far fa-envelope"></i></span>
                                            <div class="f-right n-border">
                                                <a href="">Email Us</a>
                                                <h6><a href="">{{ $details->email }}</a>
                                                </h6>
                                            </div>


                                        </div>

                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>


                    <div class="bs-social-content mt-30">

                        <ul class="social-icon ">
                            <li><a href="{{ $details->facebook }}"><i class="fab fa-facebook-f"></i></a></li>
                            <li><a href="{{ $details->twitter }}"><i class="bi bi-twitter-x"></i></a></li>
                            <li><a href="{{ $details->linkedin }}"><i class="fab fa-linkedin-in"></i></a></li>
                            <li><a href="{{ $details->instagram }}"><i class="fab fa-instagram"></i></a></li>
                        </ul>
                    </div>
                    <div class="hs-servicer-sec d-flex flex-column align-items-start">
                        <h4 class="me-auto"><a href="">The Best Service</a></h4>
                        <ul class="d-flex flex-wrap justify-content-center gap-5">
                            @if ($details->breakfast)
                                <li class="t-center text-color">
                                    <span><i class="fas fa-utensils"></i></span>
                                    <h5><a href="">Breakfast</a></h5>
                                </li>
                            @endif
                            @if ($details->room_service)
                                <li class="t-center text-color">
                                    <span><i class="bi bi-building-fill-check"></i></span>
                                    <h5><a href="">Room Service</a></h5>
                                </li>
                            @endif
                            @if ($details->good_interior)
                                <li class="t-center text-color">
                                    <span><i class="fas fa-star text-color"></i></span>
                                    <h5><a href="">Good Interior</a></h5>
                                </li>
                            @endif
                            @if ($details->transport)
                                <li class="t-center text-color">
                                    <span><i class="fas fa-car"></i></span>
                                    <h5><a href="">Convenient Transport</a></h5>
                                </li>
                            @endif
                            @if ($details->good_drinks)
                                <li class="t-center text-color">
                                    <span><i class="fas fa-coffee"></i></span>
                                    <h5><a href="">Good Drinks</a></h5>
                                </li>
                            @endif
                            @if ($details->internet_access)
                                <li class="t-center text-color">
                                    <span><i class="fas fa-wifi"></i></span>
                                    <h5><a href="">Internet Access</a></h5>
                                </li>
                            @endif
                            @if ($details->swimming_pool)
                                <li class="t-center text-color">
                                    <span><i class="fas fa-swimming-pool"></i></span>
                                    <h5><a href="">Swimming pool</a></h5>
                                </li>
                            @endif
                            @if ($details->gift_shop)
                                <li class="t-center text-color">
                                    <span><i class="fas fa-gift"></i></span>
                                    <h5><a href="">Gift shop</a></h5>
                                </li>
                            @endif
                            @if ($details->meeting_facilities)
                                <li class="t-center text-color">
                                    <span><i class="fa fa-users"></i></span>
                                    <h5><a href="">Meeting facilities</a></h5>
                                </li>
                            @endif
                            @if ($details->sunset_boat_trip)
                                <li class="t-center text-color">
                                    <span><i class="fas fa-ship"></i></span>
                                    <h5><a href="">Sunset boat trip</a></h5>
                                </li>
                            @endif
                            @if ($details->security)
                                <li class="t-center text-color">
                                    <span><svg xmlns="http://www.w3.org/2000/svg" width="32" height="36"
                                            fill="currentColor" class="bi bi-shield-shaded" viewBox="0 0 16 16">
                                            <path fill-rule="evenodd"
                                                d="M8 14.933a1 1 0 0 0 .1-.025q.114-.034.294-.118c.24-.113.547-.29.893-.533a10.7 10.7 0 0 0 2.287-2.233c1.527-1.997 2.807-5.031 2.253-9.188a.48.48 0 0 0-.328-.39c-.651-.213-1.75-.56-2.837-.855C9.552 1.29 8.531 1.067 8 1.067zM5.072.56C6.157.265 7.31 0 8 0s1.843.265 2.928.56c1.11.3 2.229.655 2.887.87a1.54 1.54 0 0 1 1.044 1.262c.596 4.477-.787 7.795-2.465 9.99a11.8 11.8 0 0 1-2.517 2.453 7 7 0 0 1-1.048.625c-.28.132-.581.24-.829.24s-.548-.108-.829-.24a7 7 0 0 1-1.048-.625 11.8 11.8 0 0 1-2.517-2.453C1.928 10.487.545 7.169 1.141 2.692A1.54 1.54 0 0 1 2.185 1.43 63 63 0 0 1 5.072.56" />
                                        </svg></span>
                                    <h5><a href="">Security</a></h5>
                                </li>
                            @endif
                            @if ($details->public_computer)
                                <li class="t-center text-color">
                                    <span><i class="fas fa-desktop"></i></span>
                                    <h5><a href="">Public computer</a></h5>
                                </li>
                            @endif
                        </ul>
                    </div>

                    <div class="hs-pricing-table page-content p-30">
                        <h4><a href="">Pricing-plan</a></h4>
                        <div class="row">
                            @isset($details->crn_price)
                            <div class="col-lg-4 col-md-4 col-sm-6 col-12">

                                <div class="card">
                                    <h5><a href="">comfort room</a></h5>
                                    <img width="246px" height="174x" src="{{ asset($details->crn_photo) }}"
                                        class="card-img-top" alt="...">
                                    <div class="card-body">
                                        <ul>
                                            @if ($details->comfort_outside_windows)
                                                <li><a href="">Outside Windows</a></li>
                                            @endif
                                            @if ($details->comfort_tv_cable_satellite)
                                                <li><a href="">TV-Cable or Satellite</a></li>
                                            @endif
                                            @if ($details->comfort_ac_room)
                                                <li><a href="">AC Room</a></li>
                                            @endif
                                            @if ($details->comfort_non_ac_room)
                                                <li><a href="">Non-AC Room</a></li>
                                            @endif
                                            @if ($details->comfort_reception_facility)
                                                <li><a href="">24x7 Reception Facility</a></li>
                                            @endif
                                            @if ($details->comfort_telephone)
                                                <li><a href="">Telephone</a></li>
                                            @endif
                                        </ul>
                                    </div>
                                </div>
                            </div>
                            @endisset
                            @isset($details->luxury_room_price)
                            <div class="col-lg-4 col-md-4 col-sm-6 col-12">
                                <div class="card">
                                    <h5><a href="">Luxury Room</a></h5>
                                    <img width="246px" height="174x" src="{{ asset($details->luxury_room_image) }}"
                                        class="card-img-top" alt="...">
                                    <div class="card-body">
                                        <ul>
                                            @if ($details->luxury_outside_windows)
                                                <li><a href="">Outside Windows</a></li>
                                            @endif
                                            @if ($details->luxury_tv_cable_satellite)
                                                <li><a href="">TV-Cable or Satellite</a></li>
                                            @endif
                                            @if ($details->luxury_ac_room)
                                                <li><a href="">AC Room</a></li>
                                            @endif
                                            @if ($details->luxury_non_ac_room)
                                                <li><a href="">Non-AC Room</a></li>
                                            @endif
                                            @if ($details->luxury_reception_facility)
                                                <li><a href="">24x7 Reception Facility</a></li>
                                            @endif
                                            @if ($details->luxury_telephone)
                                                <li><a href="">Telephone</a></li>
                                            @endif
                                        </ul>
                                    </div>
                                </div>
                            </div>
                            @endisset
                            @isset($details->deluxe_room_price)

                            <div class="col-lg-4 col-md-4 col-sm-6 col-12">
                                <div class="card">
                                    <h5><a href="">deluxe Room</a></h5>
                                    <img width="246px" height="174x" src="{{ asset($details->deluxe_room_image) }}"
                                        class="card-img-top" alt="...">
                                    <div class="card-body">
                                        <ul>
                                            @if ($details->deluxe_outside_windows)
                                                <li><a href="">Outside Windows</a></li>
                                            @endif
                                            @if ($details->deluxe_tv_cable_satellite)
                                                <li><a href="">TV-Cable or Satellite</a></li>
                                            @endif
                                            @if ($details->deluxe_ac_room)
                                                <li><a href="">AC Room</a></li>
                                            @endif
                                            @if ($details->deluxe_non_ac_room)
                                                <li><a href="">Non-AC Room</a></li>
                                            @endif
                                            @if ($details->deluxe_reception_facility)
                                                <li><a href="">24x7 Reception Facility</a></li>
                                            @endif
                                            @if ($details->deluxe_telephone)
                                                <li><a href="">Telephone</a></li>
                                            @endif
                                        </ul>
                                    </div>
                                </div>
                            </div>
                            @endisset
                        </div>
                    </div>


                </div>
                <div class="col-xl-3 col-lg-4 col-md-12 col-sm-12 col-12">
                    <div class="hs-slidebar sb-grid-main-wrapper p-0">
                        <div class="find-us-wrapper pb-0">
                            <h4 class="pb-20"><a href="javascript:;">Check Availability</a></h4>
                            <form id="form" action="{{route('hotel.reserve')}}" method="Post">
                                @csrf
                                <ul>
                                    <li>
                                        <input type="text" placeholder="Name" value="{{Auth::user() ? Auth::user()->name : ''}}" name="name" required>

                                    </li>
                                    <li>
                                        <input type="text" placeholder="Email" value="{{Auth::user() ? Auth::user()->email : ''}}" name="email" name="email" required>

                                    </li>
                                    <li>
                                        <input type="text" placeholder="TPNumber" name="tpnumber" required>

                                    </li>
                                    <li>
                                        <input id="bookingFrom" name="start_date" type="date"  class="" placeholder="{{ date('Y-m-d') }}" value="{{ date('Y-m-d') }}">
                                        {{-- <svg version="1.2" baseProfile="tiny-ps" xmlns="http://www.w3.org/2000/svg"
                                            viewBox="0 0 19 20" width="19" height="20">
                                            <title>Icon </title>
                                            <style>
                                                tspan {
                                                    white-space: pre
                                                }

                                                .shp0 {
                                                    fill: #1b72ea
                                                }
                                            </style>
                                            <path id="Icon" class="shp0"
                                                d="M17.94 5.32C17.83 4.78 17.57 4.3 17.2 3.93C17.08 3.82 16.95 3.7 16.8 3.61L16.78 3.59C16.77 3.57 16.75 3.57 16.73 3.56C16.67 3.52 16.62 3.48 16.56 3.46L16.54 3.46C16.15 3.26 15.72 3.15 15.23 3.15L14.07 3.15L14.07 2.35C14.07 2.17 13.93 2 13.72 2C13.53 2 13.36 2.15 13.36 2.35L13.36 3.11L6.65 3.11L6.65 2.35C6.65 2.17 6.49 2 6.3 2C6.11 2 5.94 2.15 5.94 2.35L5.94 3.11L4.78 3.11C4.43 3.11 4.07 3.18 3.76 3.31C3.4 3.46 3.08 3.67 2.82 3.93C2.67 4.08 2.54 4.24 2.43 4.41C2.32 4.59 2.22 4.78 2.15 4.98C2.11 5.09 2.07 5.21 2.06 5.32C2.02 5.5 2 5.69 2 5.87L2 7.73L2 16.27C2 17.03 2.32 17.72 2.8 18.2C3.31 18.7 4 19 4.75 19L15.25 19C16.02 19 16.71 18.68 17.2 18.2C17.7 17.7 18 17.01 18 16.27L18 7.73L18 5.87C18 5.69 17.98 5.5 17.94 5.32ZM2.73 5.85C2.73 5.71 2.75 5.58 2.77 5.45C2.78 5.32 2.84 5.19 2.88 5.06C2.95 4.89 3.05 4.74 3.14 4.61C3.2 4.54 3.25 4.48 3.31 4.41C3.42 4.3 3.55 4.2 3.68 4.11C4 3.93 4.35 3.82 4.75 3.82L5.91 3.82L5.91 4.57C5.91 4.76 6.06 4.93 6.26 4.93C6.45 4.93 6.62 4.78 6.62 4.57L6.62 3.82L13.42 3.82L13.42 4.57C13.42 4.76 13.57 4.93 13.78 4.93C13.96 4.93 14.13 4.78 14.13 4.57L14.13 3.82L15.29 3.82C15.68 3.82 16.06 3.93 16.36 4.11C16.49 4.2 16.62 4.3 16.73 4.41C17.01 4.69 17.21 5.04 17.29 5.45C17.31 5.58 17.33 5.72 17.33 5.85L17.33 7.37L2.73 7.37L2.73 5.85ZM17.35 16.25C17.35 16.83 17.12 17.35 16.75 17.72C16.37 18.09 15.85 18.31 15.29 18.31L4.78 18.31C4.22 18.31 3.7 18.09 3.33 17.72C2.95 17.35 2.73 16.83 2.73 16.27L2.73 8.06L17.35 8.06L17.35 16.25L17.35 16.25Z">
                                            </path>
                                        </svg> --}}
                                    </li>
                                    <input type="hidden" name="hotel_id" value="{{ $details->id }}">
                                    <li>
                                        <input id="bookingTo" name="end_date" type="date"  class="" placeholder="{{ date('Y-m-d') }}" value="{{ date('Y-m-d')}}">
                                        {{-- <svg version="1.2" baseProfile="tiny-ps" xmlns="http://www.w3.org/2000/svg"
                                            viewBox="0 0 19 20" width="19" height="20">
                                            <title>Icon </title>
                                            <style>
                                                tspan {
                                                    white-space: pre
                                                }

                                                .shp0 {
                                                    fill: #1b72ea
                                                }
                                            </style>
                                            <path id="Icon1" class="shp0"
                                                d="M17.94 5.32C17.83 4.78 17.57 4.3 17.2 3.93C17.08 3.82 16.95 3.7 16.8 3.61L16.78 3.59C16.77 3.57 16.75 3.57 16.73 3.56C16.67 3.52 16.62 3.48 16.56 3.46L16.54 3.46C16.15 3.26 15.72 3.15 15.23 3.15L14.07 3.15L14.07 2.35C14.07 2.17 13.93 2 13.72 2C13.53 2 13.36 2.15 13.36 2.35L13.36 3.11L6.65 3.11L6.65 2.35C6.65 2.17 6.49 2 6.3 2C6.11 2 5.94 2.15 5.94 2.35L5.94 3.11L4.78 3.11C4.43 3.11 4.07 3.18 3.76 3.31C3.4 3.46 3.08 3.67 2.82 3.93C2.67 4.08 2.54 4.24 2.43 4.41C2.32 4.59 2.22 4.78 2.15 4.98C2.11 5.09 2.07 5.21 2.06 5.32C2.02 5.5 2 5.69 2 5.87L2 7.73L2 16.27C2 17.03 2.32 17.72 2.8 18.2C3.31 18.7 4 19 4.75 19L15.25 19C16.02 19 16.71 18.68 17.2 18.2C17.7 17.7 18 17.01 18 16.27L18 7.73L18 5.87C18 5.69 17.98 5.5 17.94 5.32ZM2.73 5.85C2.73 5.71 2.75 5.58 2.77 5.45C2.78 5.32 2.84 5.19 2.88 5.06C2.95 4.89 3.05 4.74 3.14 4.61C3.2 4.54 3.25 4.48 3.31 4.41C3.42 4.3 3.55 4.2 3.68 4.11C4 3.93 4.35 3.82 4.75 3.82L5.91 3.82L5.91 4.57C5.91 4.76 6.06 4.93 6.26 4.93C6.45 4.93 6.62 4.78 6.62 4.57L6.62 3.82L13.42 3.82L13.42 4.57C13.42 4.76 13.57 4.93 13.78 4.93C13.96 4.93 14.13 4.78 14.13 4.57L14.13 3.82L15.29 3.82C15.68 3.82 16.06 3.93 16.36 4.11C16.49 4.2 16.62 4.3 16.73 4.41C17.01 4.69 17.21 5.04 17.29 5.45C17.31 5.58 17.33 5.72 17.33 5.85L17.33 7.37L2.73 7.37L2.73 5.85ZM17.35 16.25C17.35 16.83 17.12 17.35 16.75 17.72C16.37 18.09 15.85 18.31 15.29 18.31L4.78 18.31C4.22 18.31 3.7 18.09 3.33 17.72C2.95 17.35 2.73 16.83 2.73 16.27L2.73 8.06L17.35 8.06L17.35 16.25L17.35 16.25Z">
                                            </path>
                                        </svg> --}}
                                    </li>
                                    <li>
                                        <select  id="SelectChild" name="adult_count">
                                            <option value="1">1 Adult</option>
                                            <option value="2">2 Adult</option>
                                            <option value="3">3 Adult</option>
                                        </select>
                                    </li>
                                    <li>
                                        <select  id="SelectChild1" name="child_count">
                                            <option value="0"> 0 Child</option>
                                            <option value="1"> 1 Child</option>
                                            <option value="2"> 2 Child</option>
                                            <option value="3"> 3 Child</option>
                                        </select>
                                    </li>
                                    <li>
                                        <select  id="SelectChild2" name="room_type" required>
                                            <option value="" disabled selected>Room Type</option>
                                            <option value="1">Comfort Room</option>
                                            <option value="2">Luxury Room</option>
                                            <option value="3">Deluxe Room</option>

                                        </select>
                                    </li>

                                    <li class="rating-wrapper p-30">
                                        <ul>
                                            <li class="p-rel">

                                                <label>Amount</label>
                                                <span id="amount"></span>
                                            </li>
                                            {{-- <li class="p-rel">

                                                <label>service charges</label>
                                                <span>$15</span>
                                            </li> --}}
                                            {{-- <li class="p-rel">

                                                <label>Tex-paid</label>
                                                <span>$3</span>
                                            </li> --}}
                                            <li>
                                                <hr>
                                            </li>
                                            <li class="p-rel">

                                                <label>Total Amount</label>
                                                <span class="color" id="tamount"></span>
                                            </li>
                                        </ul>
                                    </li>
                                    <li>
                                        <button id="book-now-btn" type="submit" class="btn btn-primary w-100">Book Now</button>
                                    </li>
                                </ul>
                            </form>

                        </div>


                    </div>

                </div>
            </div>
        </div>
    </div>
        <script>
        document.addEventListener("DOMContentLoaded", function () {
            const startDateInput = document.getElementById('bookingFrom');
            const endDateInput = document.getElementById('bookingTo');
            const roomTypeInput = document.getElementById('SelectChild2');
            const totalPriceInput = document.getElementById('tamount');
            totalPriceInput.textContent = ` `;
            const roomPrices = {
                1: {{ (double) $details->crn_price }},
                2: {{ (double) $details->luxury_room_price }},
                3: {{ (double) $details->deluxe_room_price }}
            };
            // console.log(roomPrices);
            function calculateTotalPrice() {
                const startDate = new Date(startDateInput.value);
                const endDate = new Date(endDateInput.value);
                const roomType = roomTypeInput.value;

                if (startDate && endDate && roomType) {
                    const timeDiff = endDate - startDate;
                    const days = Math.ceil(timeDiff / (1000 * 60 * 60 * 24)) + 1;
                    const roomPrice = roomPrices[roomType];
                    const totalPrice = days * roomPrice;

                    totalPriceInput.value = totalPrice.toFixed(2);
                }
                // console.log(totalPriceInput.value);
                totalPriceInput.textContent = `Rs ${totalPriceInput.value}`;
            }

            startDateInput.addEventListener('change', calculateTotalPrice);
            endDateInput.addEventListener('change', calculateTotalPrice);
            roomTypeInput.addEventListener('change', calculateTotalPrice);
        });
    </script>
<script>
$(document).ready(function() {
    $('.datepicker').datepicker({
        format: 'yyyy-mm-dd', // Ensure the date picker format is 'YYYY-MM-DD'
        autoclose: true
    });

    // If you need to manually convert before form submission
    $('#bookingForm').submit(function(e) {
        var startDate = $('#bookingFrom').val();
        var dateParts = startDate.split('-'); // Split into [YYYY, MM, DD]

        // If the format is MM/DD/YYYY, you can convert it to YYYY-MM-DD
        // You can add more logic here if necessary

        // Ensure the input value is in the correct format (YYYY-MM-DD)
        $('#bookingFrom').val(dateParts.join('-'));  // Reformat if needed

        // The form will be submitted with the correctly formatted value
    });
});

    </script>
    <script>
        $(document).ready(function() {
    $('.datepicker').datepicker({
        format: 'yyyy-mm-dd', // Ensure the date picker format is 'YYYY-MM-DD'
        autoclose: true
    });

    // If you need to manually convert before form submission
    $('#bookingTo').submit(function(e) {
        var startDate = $('#bookingTo').val();
        var dateParts = startDate.split('-'); // Split into [YYYY, MM, DD]

        // If the format is MM/DD/YYYY, you can convert it to YYYY-MM-DD
        // You can add more logic here if necessary

        // Ensure the input value is in the correct format (YYYY-MM-DD)
        $('#bookingTo').val(dateParts.join('-'));  // Reformat if needed

        // The form will be submitted with the correctly formatted value
    });
});
        </script>
<script>
    document.addEventListener("DOMContentLoaded", function () {
        const roomTypeSelect = document.getElementById("SelectChild2");
        const amountLabel = document.getElementById("amount");


        roomTypeSelect.addEventListener("change", function () {
            const roomType = this.value;
            let price = 0;
            // amountLabel.textContent = 0;
            switch(roomType) {
                case "1":
                    price = {{ $details->crn_price }};
                    break;
                case "2":
                    price = {{ $details->luxury_room_price }};
                    break;
                case "3":
                    price = {{ $details->deluxe_room_price }};
                    break;
                default:
                    price = 0;
            }

            amountLabel.textContent = `Rs ${price}`;

        });
    });
</script>
<script>
    document.addEventListener("DOMContentLoaded", function () {
        const bookNowBtn = document.getElementById('book-now-btn');
        bookNowBtn.addEventListener('click', function (event) {
            @if(auth()->check())
                // User is logged in, allow form submission
                document.getElementById('form').submit();
            @else
                // User is not logged in, prevent form submission and show SweetAlert
                event.preventDefault();
                Swal.fire({
                    icon: 'warning',
                    title: 'You need to login',
                    text: 'Please login to book a hotel.',
                    confirmButtonColor: '#3085d6',
                    confirmButtonText: 'Login'
                }).then((result) => {
                    if (result.isConfirmed) {
                        window.location.href = '{{ route('login') }}';
                    }
                });
            @endif
        });
    });
</script>
@endsection
