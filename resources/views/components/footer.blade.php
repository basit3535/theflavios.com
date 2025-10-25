<footer class="pt-5 pb-3 text-white">
    <div class="container text-center text-md-start">
      @if ($privateInformation)
                <div class="mb-4 text-center row text-md-start">
                    <!-- Contact -->
                    <div class="mb-4 text-center col-md-4">
                        <h6 class="mb-3 text-uppercase">Contact Us</h6>
                        <p class="mb-1">{{$privateInformation->phone_one}}</p>
                        <p class="mb-1">{{$privateInformation->phone_two}}</p>
                        <p>{{$privateInformation->email}}</p>
                    </div>

                    <!-- Address -->
                    <div class="mb-4 text-center col-md-4 border-md-start border-md-end">
                        <h6 class="mb-3 text-uppercase">Address</h6>
                        <p class="mb-1">{{$privateInformation->address}}</p>
                    </div>

                    <!-- Opening Hours -->
                    <div class="mb-4 text-center col-md-4">
                        <h6 class="mb-3 text-uppercase">Opening Hours</h6>
                        <p class="mb-1">Everyday: From <span class="mx-2">{{ \Carbon\Carbon::parse($privateInformation->opening_from)->format('h:i A') ?? 'N/A' }}</span> To <span class="mx-2">{{ \Carbon\Carbon::parse($privateInformation->opening_to)->format('h:i A') ?? 'N/A' }}</span> </p>
                        {{-- <p>Kitchen Closes At 22.00</p> --}}
                    </div>
                </div>
            @endif
        <!-- Divider -->
        <hr style="border-top: 1px solid #BF953F;">

        <!-- Logo and Social -->
        <div class="row d-flex flex-column flex-md-row justify-content-between align-items-center">
            <div class="mb-3 col-md-4 mb-md-0 text-uppercase small">
                @foreach ($socialLinks as $index => $sl)
                    <a href="{{ $sl->link }}" class="text-white text-decoration-none me-3">{{ $sl->name }}</a>
                    @if (!$loop->last)
                        ◆
                    @endif
                @endforeach


            </div>

            <div class="mb-3 text-center col-md-4 logo mb-md-0 mt-2">
                <a href="{{route('home')}}">
                <img src="{{ asset('images/logo.png') }}" alt="Flavios Logo" height="70" class="mx-auto">
                </a>
                {{-- <span class="ms-2">Fidalgo</span> --}}
            </div>

            <div class="text-uppercase small col-md-4 text-center text-lg-end">
                © {{ now()->year }} Flavios, All Rights Reserved
            </div>
        </div>

        <!-- Back to Top -->
        <button onclick="window.scrollTo({top: 0, behavior: 'smooth'});"
            class="bottom-0 m-4 btn book-btn btn-sm position-fixed end-0" style="z-index: 999;">
            TOP
        </button>
    </div>
</footer>
