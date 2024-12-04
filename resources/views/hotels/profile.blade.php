<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Profile') }}
        </h2>
    </x-slot>
    <div class="py-12">

        <!-- return-to-top start-->
        <a href="javascript:" id="return-to-top"><i class="fas fa-sort-up"></i></a>
        <!-- return-to-top-end -->
        <!-- HEADER START-->


        <!--HEADER END-->
        <!-- sign up banner start-->

        <!-- add hotel section start-->
        <div class="hotel-main-wrapper">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12 col-12">

                        <form class="new_property_box" method="POST" action="{{ route('hotel.create') }}"
                            enctype="multipart/form-data">
                            @csrf
                            <div class="form_property">
                                <h3>Description &amp; Price</h3>
                                <div class="fields">
                                    <div class="row">
                                        <div class="col-12">
                                            <label class="no_margine">title</label>
                                            <input type="text" name="title" placeholder="Enter your hotel name">
                                        </div>
                                        <div class="col-12">
                                            <label>Description</label>
                                            <textarea placeholder="" name="description"></textarea>
                                        </div>
                                        <div class="col-lg-6 col-md-6 col-sm-6 col-12">
                                            <label>type</label>
                                            <div class="search_filte select-fields">
                                                <select class="select-box" name="type">
                                                    <option value="" selected="selected">Select a Type</option>
                                                    <option value="1">1 star</option>
                                                    <option value="2">2 star</option>
                                                    <option value="3">3 star</option>
                                                    <option value="4">4 star</option>
                                                    <option value="5">5 star</option>
                                                    <option value="7">7 star</option>

                                                </select>

                                            </div>
                                        </div>
                                        <div class="col-lg-6 col-md-6 col-sm-6 col-12">
                                            <label>Status</label>
                                            <div class="search_filte select-fields">
                                                <select class="select-box" name="status">
                                                    <option value="" selected="selected">Select a Status</option>
                                                    <option value="1">available</option>
                                                    <option value="0">unavailable</option>
                                                </select>

                                            </div>
                                        </div>


                                        <div class="col-lg-6 col-md-6 col-sm-6 col-12">
                                            <label>Price From</label>
                                            <div class="input-group mb-3">
                                                <span class="input-group-text search_filte select-fields"
                                                    id="basic-addon2">Rs</span>
                                                <input type="text" name="price_from" class="form-control"
                                                    placeholder="Per/ Night">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="form_property">
                                <h3>Add Room</h3>
                                <div class="fields">
                                    <div class="row">
                                        <h4 class="mt-3">Comfort Room</h4>
                                        <div class="col-lg-4 col-md-6 col-sm-6 col-12">
                                            <label>Room Name</label>
                                            <div class="search_filte select-fields">
                                                <input type="text" name="crn">
                                            </div>
                                        </div>
                                        <div class="col-lg-4 col-md-6 col-sm-6 col-12">
                                            <label>Image</label>
                                            <div class="pd_order_filed_input_box float_left img-select">
                                                <div class="file-chooser">
                                                    <input type="file" name="crn_photo">
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-lg-4 col-md-6 col-sm-6 col-12">
                                            <label>Price</label>
                                            <div class="search_filte select-fields">
                                                <input type="text" name="crn_price">
                                            </div>
                                        </div>
                                        <h6 class="mt-3">Room Service Added</h6>
                                        <div class="col-xl-4 col-lg-6 col-md-6 col-sm-12 col-12">
                                            <input id="checkbox51" type="checkbox" value="1"
                                                name="comfort_outside_windows">
                                            <label for="checkbox51">Outside Windows</label>
                                        </div>
                                        <div class="col-xl-4 col-lg-6 col-md-6 col-sm-12 col-12">
                                            <input id="checkbox52" type="checkbox" value="1"
                                                name="comfort_tv_cable">
                                            <label for="checkbox52">TV-Cable or Satellite</label>
                                        </div>
                                        <div class="col-xl-4 col-lg-6 col-md-6 col-sm-12 col-12">
                                            <input id="checkbox53" type="checkbox" value="1"
                                                name="comfort_ac_room">
                                            <label for="checkbox53">AC Room</label>
                                        </div>
                                        <div class="col-xl-4 col-lg-6 col-md-6 col-sm-12 col-12">
                                            <input id="checkbox54" type="checkbox" value="1"
                                                name="comfort_non_ac_room">
                                            <label for="checkbox54">Non-AC Room</label>
                                        </div>
                                        <div class="col-xl-4 col-lg-6 col-md-6 col-sm-12 col-12">
                                            <input id="checkbox55" type="checkbox" value="1"
                                                name="comfort_reception_facility">
                                            <label for="checkbox55">24x7 Reception Facility</label>
                                        </div>
                                        <div class="col-xl-4 col-lg-6 col-md-6 col-sm-12 col-12">
                                            <input id="checkbox56" type="checkbox" value="1"
                                                name="comfort_telephone">
                                            <label for="checkbox56">Telephone</label>
                                        </div>
                                    </div>

                                    <div class="row mt-4">
                                        <h4 class="mt-3">Luxury Room</h4>
                                        <div class="col-lg-4 col-md-6 col-sm-6 col-12">
                                            <label>Room Name</label>
                                            <div class="search_filte select-fields">
                                                <input type="text" name="luxury_room_name">
                                            </div>
                                        </div>
                                        <div class="col-lg-4 col-md-6 col-sm-6 col-12">
                                            <label>Image</label>
                                            <div class="pd_order_filed_input_box float_left img-select">
                                                <div class="file-chooser">
                                                    <input type="file" name="luxury_room_image">
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-lg-4 col-md-6 col-sm-6 col-12">
                                            <label>Price</label>
                                            <div class="search_filte select-fields">
                                                <input type="text" name="luxury_room_price">
                                            </div>
                                        </div>
                                        <h6 class="mt-3">Room Service Added</h6>
                                        <div class="col-xl-4 col-lg-6 col-md-6 col-sm-12 col-12">
                                            <input id="checkbox57" type="checkbox" name="luxury_outside_windows"
                                                value="1">
                                            <label for="checkbox57">Outside Windows</label>
                                        </div>
                                        <div class="col-xl-4 col-lg-6 col-md-6 col-sm-12 col-12">
                                            <input id="checkbox58" type="checkbox" name="luxury_tv_cable"
                                                value="1">
                                            <label for="checkbox58">TV-Cable or Satellite</label>
                                        </div>
                                        <div class="col-xl-4 col-lg-6 col-md-6 col-sm-12 col-12">
                                            <input id="checkbox59" type="checkbox" name="luxury_ac_room"
                                                value="1">
                                            <label for="checkbox59">AC Room</label>
                                        </div>
                                        <div class="col-xl-4 col-lg-6 col-md-6 col-sm-12 col-12">
                                            <input id="checkbox50" type="checkbox" name="luxury_non_ac_room"
                                                value="1">
                                            <label for="checkbox50">Non-AC Room</label>
                                        </div>
                                        <div class="col-xl-4 col-lg-6 col-md-6 col-sm-12 col-12">
                                            <input id="checkbox61" type="checkbox" name="luxury_reception_facility"
                                                value="1">
                                            <label for="checkbox61">24X7 Reception Facility</label>
                                        </div>
                                        <div class="col-xl-4 col-lg-6 col-md-6 col-sm-12 col-12">
                                            <input id="checkbox62" type="checkbox" name="luxury_telephone"
                                                value="1">
                                            <label for="checkbox62">Telephone</label>
                                        </div>
                                    </div>

                                    <div class="row mt-4">
                                        <h4 class="mt-3">Deluxe Room</h4>
                                        <div class="col-lg-4 col-md-6 col-sm-6 col-12">
                                            <label>Room Name</label>
                                            <div class="search_filte select-fields">
                                                <input type="text" name="deluxe_room_name">
                                            </div>
                                        </div>
                                        <div class="col-lg-4 col-md-6 col-sm-6 col-12">
                                            <label>Image</label>
                                            <div class="pd_order_filed_input_box float_left img-select">
                                                <div class="file-chooser">
                                                    <input type="file" name="deluxe_room_image">
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-lg-4 col-md-6 col-sm-6 col-12">
                                            <label>Price</label>
                                            <div class="search_filte select-fields">
                                                <input type="text" name="deluxe_room_price">
                                            </div>
                                        </div>
                                        <h6 class="mt-3">Room Service Added</h6>
                                        <div class="col-xl-4 col-lg-6 col-md-6 col-sm-12 col-12">
                                            <input id="checkbox71" type="checkbox" name="deluxe_outside_windows"
                                                value="1">
                                            <label for="checkbox71">Outside Windows</label>
                                        </div>
                                        <div class="col-xl-4 col-lg-6 col-md-6 col-sm-12 col-12">
                                            <input id="checkbox72" type="checkbox" name="deluxe_tv_cable"
                                                value="1">
                                            <label for="checkbox72">TV-Cable or Satellite</label>
                                        </div>
                                        <div class="col-xl-4 col-lg-6 col-md-6 col-sm-12 col-12">
                                            <input id="checkbox73" type="checkbox" name="deluxe_ac_room"
                                                value="1">
                                            <label for="checkbox73">AC Room</label>
                                        </div>
                                        <div class="col-xl-4 col-lg-6 col-md-6 col-sm-12 col-12">
                                            <input id="checkbox74" type="checkbox" name="deluxe_non_ac_room"
                                                value="1">
                                            <label for="checkbox74">Non-AC Room</label>
                                        </div>
                                        <div class="col-xl-4 col-lg-6 col-md-6 col-sm-12 col-12">
                                            <input id="checkbox75" type="checkbox" name="deluxe_reception_facility"
                                                value="1">
                                            <label for="checkbox75">24X7 Reception Facility</label>
                                        </div>
                                        <div class="col-xl-4 col-lg-6 col-md-6 col-sm-12 col-12">
                                            <input id="checkbox76" type="checkbox" name="deluxe_telephone"
                                                value="1">
                                            <label for="checkbox76">Telephone</label>
                                        </div>
                                    </div>


                                </div>
                            </div>
                            <div class="form_property">
                                <h3>Social Media</h3>
                                <div class="fields">
                                    <div class="row">
                                        <div class="col-lg-6 col-md-6 col-sm-6 col-12">
                                            <label class="no_margine">Facebook</label>
                                            <input type="text" name="facebook"
                                                placeholder="Enter your Facebook URL">
                                        </div>
                                        <div class="col-lg-6 col-md-6 col-sm-6 col-12">
                                            <label>Instagram</label>
                                            <div class="search_filte select-fields">
                                                <input type="text" name="instagram"
                                                    placeholder="Enter your Instagram URL">
                                            </div>
                                        </div>
                                        <div class="col-lg-6 col-md-6 col-sm-6 col-12">
                                            <label>X</label>
                                            <div class="search_filte select-fields">
                                                <input type="text" name="twitter"
                                                    placeholder="Enter your Twitter URL">
                                            </div>
                                        </div>
                                        <div class="col-lg-6 col-md-6 col-sm-6 col-12">
                                            <label>LinkedIn</label>
                                            <div class="search_filte select-fields">
                                                <input type="text" name="linkedin"
                                                    placeholder="Enter your LinkedIn URL">
                                            </div>
                                        </div>
                                        <div class="col-lg-6 col-md-6 col-sm-6 col-12">
                                            <label>Pinterest</label>
                                            <div class="search_filte select-fields">
                                                <input type="text" name="pinterest"
                                                    placeholder="Enter your Pinterest URL">
                                            </div>
                                        </div>
                                    </div>
                                </div>

                            </div>
                            <div class="form_property">
                                <h3>Features</h3>
                                <div class="fields">
                                    <div class="row">
                                        <div class="col-xl-3 col-lg-4 col-md-6 col-sm-12 col-12">
                                            <input id="checkbox1" type="checkbox" name="breakfast" value="1">
                                            <label for="checkbox1">Breakfast</label>
                                        </div>
                                        <div class="col-xl-3 col-lg-4 col-md-6 col-sm-12 col-12">
                                            <input id="checkbox2" type="checkbox" name="room_service"
                                                value="1">
                                            <label for="checkbox2">Room Service</label>
                                        </div>
                                        <div class="col-xl-3 col-lg-4 col-md-6 col-sm-12 col-12">
                                            <input id="checkbox3" type="checkbox" name="good_interior"
                                                value="1">
                                            <label for="checkbox3">Good Interior</label>
                                        </div>
                                        <div class="col-xl-3 col-lg-4 col-md-6 col-sm-12 col-12">
                                            <input id="checkbox4" type="checkbox" name="transport" value="1">
                                            <label for="checkbox4">Transport</label>
                                        </div>
                                        <div class="col-xl-3 col-lg-4 col-md-6 col-sm-12 col-12">
                                            <input id="checkbox5" type="checkbox" name="good_drinks" value="1">
                                            <label for="checkbox5">Good Drinks</label>
                                        </div>
                                        <div class="col-xl-3 col-lg-4 col-md-6 col-sm-12 col-12">
                                            <input id="checkbox6" type="checkbox" name="internet_access"
                                                value="1">
                                            <label for="checkbox6">Internet Access</label>
                                        </div>
                                        <div class="col-xl-3 col-lg-4 col-md-6 col-sm-12 col-12">
                                            <input id="checkbox7" type="checkbox" name="swimming_pool"
                                                value="1">
                                            <label for="checkbox7">Swimming pool</label>
                                        </div>
                                        <div class="col-xl-3 col-lg-4 col-md-6 col-sm-12 col-12">
                                            <input id="checkbox8" type="checkbox" name="gift_shop" value="1">
                                            <label for="checkbox8">Gift shop</label>
                                        </div>
                                        <div class="col-xl-3 col-lg-4 col-md-6 col-sm-12 col-12">
                                            <input id="checkbox9" type="checkbox" name="meeting_facilities"
                                                value="1">
                                            <label for="checkbox9">Meeting facilities</label>
                                        </div>
                                        <div class="col-xl-3 col-lg-4 col-md-6 col-sm-12 col-12">
                                            <input id="checkbox10" type="checkbox" name="sunset_boat_trip"
                                                value="1">
                                            <label for="checkbox10">Sunset boat trip</label>
                                        </div>
                                        <div class="col-xl-3 col-lg-4 col-md-6 col-sm-12 col-12">
                                            <input id="checkbox11" type="checkbox" name="security" value="1">
                                            <label for="checkbox11">Security</label>
                                        </div>
                                        <div class="col-xl-3 col-lg-4 col-md-6 col-sm-12 col-12">
                                            <input id="checkbox12" type="checkbox" name="public_computer"
                                                value="1">
                                            <label for="checkbox12">Public computer</label>
                                        </div>
                                    </div>
                                </div>

                            </div>
                            <div class="form_property">
                                <h3>Pricing Plan</h3>
                                <div class="fields">
                                    <div class="row">
                                        <div class="col-xl-3 col-lg-4 col-md-6 col-sm-12 col-12">
                                            <input id="radio1" type="radio" class="radio-btn" name="room_type"
                                                value="comfort_room">
                                            <label for="radio1">Comfort Room</label>
                                        </div>
                                        <div class="col-xl-3 col-lg-4 col-md-6 col-sm-12 col-12">
                                            <input id="radio2" type="radio" class="radio-btn" name="room_type"
                                                value="luxury_service">
                                            <label for="radio2">Luxury Service</label>
                                        </div>
                                        <div class="col-xl-3 col-lg-4 col-md-6 col-sm-12 col-12">
                                            <input id="radio3" type="radio" class="radio-btn" name="room_type"
                                                value="deluxe_room">
                                            <label for="radio3">Deluxe Room</label>
                                        </div>
                                    </div>

                                </div>
                            </div>
                            <div class="form_property">
                                <h3>Contact Information</h3>
                                <div class="fields">
                                    <div class="row">
                                        <div class="col-xl-6 col-lg-6 col-md-6 col-sm-12 col-12">
                                            <label class="no_margine" for="name">Name</label>
                                            <input type="text" id="name" name="name"
                                                placeholder="Enter your name" required>
                                        </div>
                                        <div class="col-xl-6 col-lg-6 col-md-6 col-sm-12 col-12">
                                            <label class="no_margine" for="name">Telephone</label>
                                            <input type="text" id="telephone" name="telephone"
                                                placeholder="Enter your Telephone number" required>
                                        </div>

                                        <div class="col-xl-6 col-lg-6 col-md-6 col-sm-12 col-12">
                                            <label for="email">Email Id</label>
                                            <input type="email" id="email" name="email"
                                                placeholder="example@gmail.com">
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="form_property">
                                <h3>Location &amp; map</h3>
                                <div class="fields">
                                    <div class="row">

                                        <div class="col-md-6 col-12">
                                            <div class="row">
                                                <div class="col-12">
                                                    <label class="no_margine">ADDRESS *</label>
                                                    <input type="text" name="address"
                                                        placeholder="Enter hotel address">
                                                </div>
                                                <div class="col-lg-6 col-md-12 col-12">
                                                    <label>zip *</label>
                                                    <input type="text" name="zip_code"
                                                        placeholder="Enter hotel zip">
                                                </div>
                                                <div class="col-lg-6 col-md-12 col-12">
                                                    <label>LONGITUDE</label>
                                                    <input type="text" name="longitude" placeholder=""
                                                        id="longitude">
                                                </div>
                                                <div class="col-lg-6 col-md-12 col-12">
                                                    <label>LATITUDE</label>
                                                    <input type="text" name="latitude" id="latitude"
                                                        placeholder="">

                                                </div>

                                                <div class="col-12">
                                                    <div class="search_filter select-fields">
                                                        <label for="district">District</label>

                                                    <select id="district" name="district" class="form-select">
                                                        <option value="">Select District</option>
                                                    </select>

                                                    </div>
                                                </div>
                                                <div class="col-12">

                                                    <div class="search_filter select-fields">

                                                    <label for="city">City</label>
                                                    <select id="city" name="city" class="form-select disabled" disabled>
                                                        <option value="">Select City</option>
                                                    </select>

                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="form_property">
                                <div class="ex_top_mar">
                                    <h3>Thumbnail images</h3>
                                    <div class="fields">
                                        <div class="row">
                                            <div class="col-12">
                                                <div class="pd_order_filed_input_box float_left">
                                                    <!--
                                          <div class="hidden-inputs hidden"></div> -->
                                                    <div class="file-chooser">
                                                        <input type="file" name="thumbnail">
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <h3>Video</h3>
                                <div class="fields">
                                    <div class="row">
                                        <div class="col-12">
                                            <input type="text" name="youtube_link"
                                                placeholder="https://www.youtube.com/watch?v=dVkK36KOcqs">
                                            <label class="no_margine">Allow Youtube OR Vimeo Video URL</label>
                                        </div>
                                    </div>
                                </div>

                            </div>
                            <button class="btn btn-default mb-5">Save &amp; Preview</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- add hotel section End-->
    <script>
        // Prepare district and city data in JavaScript from Blade data
        var cities = [
            @foreach ($districts as $district)
                {
                    "districtId": "{{ $district->id }}",
                    "districtName": "{{ $district->name_en }}",
                    "cities": [
                        @foreach ($district->city as $city)
                            {
                                "cityName": "{{ $city->name_en }}",
                                "cityId": "{{ $city->id }}"
                            }
                            @if (!$loop->last), @endif
                        @endforeach
                    ]
                },
            @endforeach
        ];

        $(document).ready(function() {

            // Populate district dropdown
            let districtOptions = '<option value="">Select District</option>';
            cities.forEach((elem) => {
                districtOptions += `<option value="${elem.districtId}">${elem.districtName}</option>`;
            });

            $('#district').html(districtOptions); // Populate the district dropdown
            $('#district').select2(); // Initialize Select2 on the district dropdown

            // Initialize Select2 on the city dropdown (disabled by default)
            $('#city').select2().prop("disabled", true);

            // Handle district selection change
            $('#district').change(function() {
                const selectedDistrict = cities.find((elem) => elem.districtId == $(this).val());

                if (selectedDistrict) {
                    let cityOptions = '<option value="">Select City</option>';
                    selectedDistrict.cities.forEach((city) => {
                        cityOptions += `<option value="${city.cityId}">${city.cityName}</option>`;
                    });

                    // Populate and enable the city dropdown
                    $('#city').html(cityOptions).prop("disabled", false).removeClass('disabled').select2();
                } else {
                    // Reset city dropdown if no district is selected
                    $('#city').html('<option value="">Select City</option>').prop("disabled", true).addClass('disabled');
                }
            });
        });
    </script>



    @if ($errors->any())
        <script>
            let erroList = '';
            @foreach ($errors->all() as $error)
                erroList += '{{ $error }}<br>';
            @endforeach
            document.addEventListener('DOMContentLoaded', function() {
                Swal.fire({
                    icon: "error",
                    title: "Error",
                    html: erroList,
                    showConfirmButton: true,
                    confirmButtonColor: '#9FCED3',
                });
            });
        </script>
    @endif

    @if (session('error'))
        <script>
            document.addEventListener('DOMContentLoaded', function() {
                Swal.fire({
                    title: "Error",
                    text: '{{ session('error') }}',
                    icon: "error",
                    confirmButtonColor: '#9FCED3',
                });
            });
        </script>
    @endif

    @if (session('success'))
        <script>
            document.addEventListener('DOMContentLoaded', function() {
                Swal.fire({
                    title: "Successfully Added!",
                    // text: "Item Added Succesfully!",
                    icon: "success",
                    confirmButtonColor: '#9FCED3',
                });
            });
        </script>
    @endif
    </div>
</x-app-layout>
