<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Pending Bookings') }}
        </h2>
    </x-slot>
    <div class="py-12">

        <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
            <div class="p-6 bg-white border-b border-gray-200">
                <div style="overflow-y:auto;">
                    @isset($new_request[0])
                    <table id="myTable">
                        <thead>
                            <tr>
                                <th class="px-4 py-2">Hotel Name</th>
                                <th class="px-4 py-2">Hotel Email</th>
                                <th class="px-4 py-2">Hotel Phone Number</th>
                                <th class="px-4 py-2">Checkin</th>
                                <th class="px-4 py-2">Checkout</th>
                                <th class="px-4 py-2">Adults</th>
                                <th class="px-4 py-2">childs</th>
                                <th class="px-4 py-2">Price</th>
                                <th class="px-4 py-2">Room Type</th>
                                <th class="px-4 py-2"></th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($new_request as $booking)
                                <tr>
                                    <td class="border px-4 py-2">{{ $booking->hotel->title }}</td>
                                    <td class="border px-4 py-2">{{ $booking->hotel->email }}</td>
                                    <td class="border px-4 py-2">{{ $booking->hotel->telephone}}</td>
                                    <td class="border px-4 py-2">{{ $booking->start_date }}</td>
                                    <td class="border px-4 py-2">{{ $booking->end_date }}</td>
                                    <td class="border px-4 py-2">{{ $booking->adult_count }}</td>
                                    <td class="border px-4 py-2">{{ $booking->child_count }}</td>
                                    <td class="border px-4 py-2">{{ $booking->amount }}</td>

                                    <?php
                                    $room = '';
                                    switch ($booking->room_type) {
                                        case 1:
                                            $room = 'Comfort Room';
                                            break;
                                        case 2:
                                            $room = 'Luxury Room';
                                            break;
                                        case 3:
                                            $room = 'Deluxe Room';
                                            break;
                                    }
                                    echo '<td class="border px-4 py-2">' . $room . '</td>';
                                    ?>
                                    <td class="border px-4 py-2">
                                        <a href="{{ route('cus.cancel', $booking->id) }}" class="section3_btn btn2"
                                            id="decline">Cancel</a>
                                    </td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                    @else
                        <p class="text-center">No new booking requests Yet.</p>
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
                                window.location.href = event.target.href; // Navigate to link href
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
                            confirmButtonText: 'Yes, Cancel!'
                        }).then((result) => {
                            if (result.isConfirmed) {
                                window.location.href = event.target.href; // Navigate to link href
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
                        title: "Successfull",
                        text: "{{session('success')}}",
                        icon: "success",
                        confirmButtonColor: '#9FCED3',
                    });
                });
            </script>
        @endif
    </div>



</x-app-layout>
