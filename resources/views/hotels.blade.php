@extends('header')
@section('content')

<div class="sb-grid-main-wrapper">
    <div class="container">
        <div class="row">
            <div class="col-lg-3 col-md-12 col-sm-12 col-12">
                '
                <div class="find-us-wrapper">
                    <form action="{{ route('search') }}" method="POST">
                        @csrf
                        <ul>
                            <li>
                                <select id="district" name="district" class="form-select">
                                    <option value="">Select District</option>
                                </select>
                            </li>
                            <li>
                                <select id="city" name="city" class="form-select " >
                                    <option value="">Select City</option>
                                </select>
                            {{-- <li>
                                <input type="text" class="datepicker" placeholder="09-04-2020">
                                <svg version="1.2" baseProfile="tiny-ps" xmlns="http://www.w3.org/2000/svg"
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
                                        d="M17.94 5.32C17.83 4.78 17.57 4.3 17.2 3.93C17.08 3.82 16.95 3.7 16.8 3.61L16.78 3.59C16.77 3.57 16.75 3.57 16.73 3.56C16.67 3.52 16.62 3.48 16.56 3.46L16.54 3.46C16.15 3.26 15.72 3.15 15.23 3.15L14.07 3.15L14.07 2.35C14.07 2.17 13.93 2 13.72 2C13.53 2 13.36 2.15 13.36 2.35L13.36 3.11L6.65 3.11L6.65 2.35C6.65 2.17 6.49 2 6.3 2C6.11 2 5.94 2.15 5.94 2.35L5.94 3.11L4.78 3.11C4.43 3.11 4.07 3.18 3.76 3.31C3.4 3.46 3.08 3.67 2.82 3.93C2.67 4.08 2.54 4.24 2.43 4.41C2.32 4.59 2.22 4.78 2.15 4.98C2.11 5.09 2.07 5.21 2.06 5.32C2.02 5.5 2 5.69 2 5.87L2 7.73L2 16.27C2 17.03 2.32 17.72 2.8 18.2C3.31 18.7 4 19 4.75 19L15.25 19C16.02 19 16.71 18.68 17.2 18.2C17.7 17.7 18 17.01 18 16.27L18 7.73L18 5.87C18 5.69 17.98 5.5 17.94 5.32ZM2.73 5.85C2.73 5.71 2.75 5.58 2.77 5.45C2.78 5.32 2.84 5.19 2.88 5.06C2.95 4.89 3.05 4.74 3.14 4.61C3.2 4.54 3.25 4.48 3.31 4.41C3.42 4.3 3.55 4.2 3.68 4.11C4 3.93 4.35 3.82 4.75 3.82L5.91 3.82L5.91 4.57C5.91 4.76 6.06 4.93 6.26 4.93C6.45 4.93 6.62 4.78 6.62 4.57L6.62 3.82L13.42 3.82L13.42 4.57C13.42 4.76 13.57 4.93 13.78 4.93C13.96 4.93 14.13 4.78 14.13 4.57L14.13 3.82L15.29 3.82C15.68 3.82 16.06 3.93 16.36 4.11C16.49 4.2 16.62 4.3 16.73 4.41C17.01 4.69 17.21 5.04 17.29 5.45C17.31 5.58 17.33 5.72 17.33 5.85L17.33 7.37L2.73 7.37L2.73 5.85ZM17.35 16.25C17.35 16.83 17.12 17.35 16.75 17.72C16.37 18.09 15.85 18.31 15.29 18.31L4.78 18.31C4.22 18.31 3.7 18.09 3.33 17.72C2.95 17.35 2.73 16.83 2.73 16.27L2.73 8.06L17.35 8.06L17.35 16.25L17.35 16.25Z" />
                                </svg>
                            </li> --}}
                            {{-- <li>
                                <input type="date" class="datepicker" >

                            </li> --}}
                            <li>
                                <input type="text" class="text" name="min" placeholder="Min price">
                            </li>
                            <li>
                                <input type="text" class="text" name="max" placeholder="Max price">
                            </li>
                            <li>

                                <button type="submit" class="btn btn-primary">search</button>
                            </li>
                        </ul>
                    </form>
                </div>
                <!-- find us section over -->

                <!-- r5ating section -->


                <!-- instagram feed -->

                <!-- holiday section -->

            </div>
            <!-- room types -->
            <div class="col-lg-9 col-md-12 col-sm-12 col-12">
                <div class="grid-view-wrapper">
                    {{-- <div class="row">
                        <div class="col-lg-7 col-md-12 col-sm-12 col-12">
                            <div class="fliter-sec">
                                <div>
                                    <select>
                                        <option value="">Sort by</option>
                                        <option value="">Sort by</option>
                                        <option value="">Sort by</option>
                                        <option value="">Sort by</option>
                                        <option value="">Sort by</option>
                                    </select>
                                </div>

                            </div>
                        </div>

                    </div> --}}
                    <div class="tab-content" id="pills-tabContent">
                        <div class="tab-pane fade show active" id="pills-profile" role="tabpanel"
                            aria-labelledby="pills-profile-tab">
                            <div class="row">

                                @foreach ($hotels as $hotel)
                                <div class="col-xl-4 col-lg-6 col-md-6 col-sm-12 col-12">
                                    <div class="sub-main">
                                        <div class="img-sec p-rel">
                                            <div class="hover-img p-rel">
                                                <a href="javascript:;">
                                                    <img style="width: 254px; height: 199px" src="{{ asset($hotel->thumbnail) }}" alt="">
                                                </a>
                                            </div>
                                            <span>Rs {{ $hotel->price_from }} / Night</span>
                                        </div>
                                        <div class="slider-content">
                                            <h5><a href="{{ route('hotel.show', $hotel->id) }}">{{ $hotel->title }}</a></h5>
                                            <a href="javascript:;">
                                                <span class="clr-text">
                                                    <i class="fas fa-map-marker-alt"></i>
                                                    {{ $hotel->address }},
                                                    {{ $hotel->cities->name_en }},
                                                    {{ $hotel->cities->district->name_en }}
                                                </span>
                                            </a>
                                        </div>
                                    </div>
                                </div>

                            @endforeach
                            </div>
                        </div>
                        <!-- second tab sections -->

                    </div>
                </div>
            </div>

        </div>
    </div>
    <!-- pagination start -->
    <nav>
        {{-- <ul class="pagination pagination-lg justify-content-center">
            <li class="page-item">
                <a class="page-link" href="#" tabindex="-1" aria-disabled="true"><i
                        class="fas fa-arrow-left"></i></a>
            </li>
            <li class="page-item res-d-none"><a class="page-link" href="#">1</a></li>
            <li class="page-item active res-d-none" aria-current="page">
                <a class="page-link" href="#">2</a>
            </li>
            <li class="page-item res-d-none"><a class="page-link" href="#">3</a></li>
            <li class="page-item res-d-none"><a class="page-link" href="#">...</a></li>
            <li class="page-item res-d-none"><a class="page-link" href="#">5</a></li>
            <li class="page-item  active ">
                <a class="page-link" href="#"><i class="fas fa-arrow-right"></i></a>
            </li>
        </ul> --}}
        <div class="d-flex justify-content-center mt-4">
            {{ $hotels->links() }}
        </div>
    </nav>
    <!-- pagination end -->
    {{-- <script src="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/js/select2.min.js"></script> --}}
</div>
<script>
    // Prepare city and district data in JavaScript from Blade data
    var cities = [
        @foreach ($cities as $city)
            {
                "cityId": "{{ $city->id }}",
                "cityName": "{{ $city->name_en }}",
                "districtId": "{{ $city->district->id }}",
                "districtName": "{{ $city->district->name_en }}"
            }
            @if (!$loop->last), @endif
        @endforeach
    ];

    $(document).ready(function() {

        // Populate district dropdown
        let districtOptions = '<option value="">Select District</option>';
        let districtMap = {};
        cities.forEach((elem) => {
            if (!districtMap[elem.districtId]) {
                districtOptions += `<option value="${elem.districtId}">${elem.districtName}</option>`;
                districtMap[elem.districtId] = true;
            }
        });

        $('#district').html(districtOptions); // Populate the district dropdown
        $('#district').select2(); // Initialize Select2 on the district dropdown

        // Initialize Select2 on the city dropdown
        $('#city').select2();

        // Handle district selection change
        $('#district').change(function() {
            const selectedDistrictId = $(this).val();

            if (selectedDistrictId) {
                let cityOptions = '<option value="">Select City</option>';
                cities.forEach((city) => {
                    if (city.districtId === selectedDistrictId) {
                        cityOptions += `<option value="${city.cityId}">${city.cityName}</option>`;
                    }
                });

                // Populate and enable the city dropdown
                $('#city').html(cityOptions).prop("disabled", false).removeClass('disabled').select2();
            } else {
                let cityOptions = '<option value="">Select City</option>';
                cities.forEach((city) => {
                    cityOptions += `<option value="${city.cityId}">${city.cityName}</option>`;
                });

                // Populate and enable the city dropdown
                $('#city').html(cityOptions).prop("disabled", false).removeClass('disabled').select2();
            }
        });

        // Trigger the district change event to populate the city dropdown
        $('#district').trigger('change');
    });
</script>



@endsection

