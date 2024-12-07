<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>
    <div class="py-12">

        <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
            <div class="p-6 bg-white border-b border-gray-200">


                <div class="counterFour ptb-100">
                    <div class="container text-center">
                        <div class="row">

                            <div class="col-lg-3 col-md-3 col-sm-12">
                                <span class="icon-one"><i class="fa fa-user"></i></span>
                                <h4><a href="#">Customers</a></h4>
                                <div class="count-description">
                                    <span class="timer">{{$customers}}</span>
                                </div>
                            </div>


                            <div class="col-lg-3 col-md-3 col-sm-12">
                                <span class="icon-two"><i class="fa fa-hotel"></i></span>
                                <h4><a href="#">Hotels</a></h4>
                                <div class="count-description">
                                    <span class="timer">{{$hotels_count}}</span>
                                </div>
                            </div>


                            <div class="col-lg-3 col-md-3 col-sm-12">
                                <span class="icon-three"><i class="fa fa-check"></i></span>
                                <h4><a href="#">Reservations</a></h4>
                                <div class="count-description">
                                    <span class="timer">{{$reservation}}</span>
                                </div>
                            </div>
                            <div class="col-lg-3 col-md-3 col-sm-12">
                                <span class="icon-three"><i class="fa fa-money"></i></i></span>
                                <h4><a href="#">Transactions</a></h4>
                                <div class="count-description">
                                    <span class="timer">Rs {{$revenue}}</span>
                                </div>
                            </div>


                        </div>
                        <!-- /.row -->
                    </div>
                    <!-- /.container -->
                </div>
                <div style="overflow-y:auto;">

                    @isset($hotels[0])
                        <table id="myTable">
                            <thead>
                                <tr>
                                    <th class="px-4 py-2">Name</th>
                                    <th class="px-4 py-2">Email</th>
                                    <th class="px-4 py-2">Phone</th>

                                    <th class="px-4 py-2">Adress</th>
                                    <th class="px-4 py-2">City</th>
                                    <th class="px-4 py-2">District</th>
                                    <th class="px-4 py-2">Preview</th>
                                    <th class="px-4 py-2">Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($hotels as $hotel)
                                    <tr>
                                        <td class="border px-4 py-2">{{ $hotel->title }}</td>
                                        <td class="border px-4 py-2">{{ $hotel->email }}</td>
                                        <td class="border px-4 py-2">{{ $hotel->telephone }}</td>
                                        <td class="border px-4 py-2">{{ $hotel->address }}</td>
                                        <td class="border px-4 py-2">{{ $hotel->cities->name_en }}</td>
                                        <td class="border px-4 py-2">{{ $hotel->cities->district->name_en }}</td>
                                        <td class="border px-4 py-2">
                                            <a href="{{ route('hotel.show', $hotel->id) }}" class="section3_btn btn2"
                                                target="_blank">Preview</a>
                                        </td>


                                        <td class="border px-4 py-2 align-middle text-center">
                                            <a href="{{ route('admin.approve', $hotel->id) }}" class="btn btn-success "
                                                id="approve">Approve</a>
                                            <div class="pb-3"></div>
                                            <a href="{{ route('admin.decline', $hotel->id) }}" class="btn btn-danger "
                                                id="decline">Decline</a>
                                        </td>
                                    </tr>
                                @endforeach
                            </tbody>
                        </table>
                    @else
                        <p class="text-center">No new Hotel requests Yet.</p>
                    @endisset
                </div>

            </div>
        </div>
        <script>
            document.addEventListener("DOMContentLoaded", function() {
                const approveLinks = document.querySelectorAll('a#approve');
                approveLinks.forEach(link => {
                    link.addEventListener('click', function(event) {
                        event.preventDefault(); // Prevent default link action
                        Swal.fire({
                            title: 'Are you sure?',
                            icon: 'warning',
                            showCancelButton: true,
                            confirmButtonColor: '#3085d6',
                            cancelButtonColor: '#d33',
                            confirmButtonText: 'Yes, Approve!'
                        }).then((result) => {
                            if (result.isConfirmed) {
                                window.location.href = event.target
                                    .href; // Navigate to link href
                            }
                        });
                    });
                });
            });
        </script>
        <script>
            document.addEventListener("DOMContentLoaded", function() {
                const declineLinks = document.querySelectorAll('a#decline');
                declineLinks.forEach(link => {
                    link.addEventListener('click', function(event) {
                        event.preventDefault(); // Prevent default link action
                        Swal.fire({
                            title: 'Are you sure?',
                            icon: 'warning',
                            showCancelButton: true,
                            confirmButtonColor: '#d33',
                            cancelButtonColor: '#3085d6',
                            confirmButtonText: 'Yes, Decline!'
                        }).then((result) => {
                            if (result.isConfirmed) {
                                window.location.href = event.target
                                    .href; // Navigate to link href
                            }
                        });
                    });
                });
            });
        </script>
        <script>
            $(document).ready(function() {
                $('#myTable').DataTable();
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

        @if (session('success'))
            <script>
                document.addEventListener('DOMContentLoaded', function() {
                    Swal.fire({
                        title: "Successfull!",
                        text: "{{ session('success') }}",
                        icon: "success",
                        confirmButtonColor: '#9FCED3',
                    });
                });
            </script>
        @endif
    </div>

</x-app-layout>
