<section id="feedback" class="py-5 text-white">
    <div class="container">
        <div class="row">
            <!-- Left Column: Form -->
            <div class="mb-4 col-md-6">
                <h2 class="mb-3 text-uppercase">We Appriciat Your feedback</h2>
                {{-- <p>For general enquiries please email: <a href="mailto:fidalgo@example.com" class="text-white">contact@theflavios.com</a></p> --}}

                <form action="{{ route('feedback.store') }}" method="POST">
                    @csrf
                    <div class="mb-3">
                        <label class="form-label">Name</label>
                        <input type="text" name="name" class="text-white bg-transparent border-0 form-control border-bottom" required>
                    </div>
                    <div class="mb-3">
                        <label class="form-label">E mail</label>
                        <input type="email" name="email" class="text-white bg-transparent border-0 form-control border-bottom" required>
                    </div>
                    <div class="mb-3">
                        <label class="form-label">Feedback</label>
                        <textarea name="feedback" rows="3" class="text-white bg-transparent border-0 form-control border-bottom" required></textarea>
                    </div>
                    <button type="submit" class="px-4 py-2 mt-3 btn book-btn">Submit</button>
                </form>
            </div>

            <!-- Middle Column -->
            <div class="px-4 mb-4 col-md-3">
                {{-- <div class="mb-4">
                    <h6 class="text-uppercase">Lunch Time</h6>
                    <p class="text-muted">// Monday to Sunday<br>10.30am — 3:00pm</p>
                </div>
                <div class="mb-4">
                    <h6 class="text-uppercase">Book a Table</h6>
                    <p class="mb-1">T. +12 344 0567899</p>
                    <p>M. contact@theflavios.com</p>
                </div>
                <div>
                    <h6 class="text-uppercase">Restaurant Address</h6>
                    <p>Long Hills Dr 351,<br>New York 07078, United States</p>
                </div>
            </div> --}}

            <!-- Right Column -->
            <div class="px-4 mb-4 border-0 col-md-3 border-start">
                {{-- <div class="mb-4">
                    <h6 class="text-uppercase">Dinner Time</h6>
                    <p class="text-muted">// Monday to Sunday<br>6.30pm — 10:00pm</p>
                </div>
                <div class="mb-4">
                    <h6 class="text-uppercase">Restaurant Contact</h6>
                    <p>T. +33 (0) 123 45 67 89 / 123 45 67 88</p>
                    <p>Viber, WhatsApp</p>
                </div> --}}
            </div>
        </div>
    </div>
</section>
