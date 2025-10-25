<div class="py-5 container-fluid" id ="gallery">
    {{-- <h2 class="mb-4 text-center">Image Gallery</h2> --}}
    <div class="p-3 row g-3">
        <div class="p-4 col-lg-4 col-12" style="background-color: #1F3634" data-aos="fade-right" data-aos-duration="1000">
            <div class="text-center h-100 d-flex align-items-center justify-content-center flex-column"
                style="border: 1px solid #BF953F">
                <div class="my-5 w-75">
                    <span class="text-small">Gallery</span>
                    <h2 class="mb-4 text-center">Explore Our Flavors in Pictures</h2>
                    <p>Take a visual tour through Flavois – from our mouthwatering dishes to the care we put into every home delivery. Discover the passion behind every plate and the moments our flavors create in your home.</p>
                    <button class="book-btn">Gallery</button>
                </div>
            </div>
        </div>
        <div class="col-lg-8 col-12">
            <div class="row">
                <div class="my-2 col-sm-6 col-md-4 col-lg-3" data-aos="zoom-in" data-aos-delay="100" data-aos-duration="200">
                    <img src="{{ asset('images/raman-jjoyL1hk1Vo-unsplash.webp') }}" class="cursor-pointer img-fluid gallery-img"
                        data-bs-toggle="modal" data-bs-target="#imageModal"
                        data-bs-img="{{ asset('images/raman-jjoyL1hk1Vo-unsplash.webp') }}" alt="Gallery Image">
                </div>
                <div class="my-2 col-sm-6 col-md-4 col-lg-3" data-aos="zoom-in" data-aos-delay="100" data-aos-duration="200">
                    <img src="{{ asset('images/saranjeet-singh-YAHJhhjD3lo-unsplash.webp') }}" class="cursor-pointer img-fluid gallery-img"
                        data-bs-toggle="modal" data-bs-target="#imageModal"
                        data-bs-img="{{ asset('images/saranjeet-singh-YAHJhhjD3lo-unsplash.webp') }}" alt="Gallery Image">
                </div>
                <div class="my-2 col-sm-6 col-md-4 col-lg-3" data-aos="zoom-in" data-aos-delay="100" data-aos-duration="200">
                    <img src="{{ asset('images/shreyak-singh-0j4bisyPo3M-unsplash.webp') }}" class="cursor-pointer img-fluid gallery-img"
                        data-bs-toggle="modal" data-bs-target="#imageModal"
                        data-bs-img="{{ asset('images/shreyak-singh-0j4bisyPo3M-unsplash.webp') }}" alt="Gallery Image">
                </div>
                <div class="my-2 col-sm-6 col-md-4 col-lg-3" data-aos="zoom-in" data-aos-delay="100" data-aos-duration="200">
                    <img src="{{ asset('images/fernando-andrade-s6SOj6uYjXI-unsplash.webp') }}" class="cursor-pointer img-fluid gallery-img"
                        data-bs-toggle="modal" data-bs-target="#imageModal"
                        data-bs-img="{{ asset('images/fernando-andrade-s6SOj6uYjXI-unsplash.webp') }}" alt="Gallery Image">
                </div>
                <div class="my-2 col-sm-6 col-md-4 col-lg-3" data-aos="zoom-in" data-aos-delay="100" data-aos-duration="200">
                    <img src="{{ asset('images/suchandra-varma-TNNZ8KNPfbY-unsplash.webp') }}" class="cursor-pointer img-fluid gallery-img"
                        data-bs-toggle="modal" data-bs-target="#imageModal"
                        data-bs-img="{{ asset('images/suchandra-varma-TNNZ8KNPfbY-unsplash.webp') }}" alt="Gallery Image">
                </div>
                <div class="my-2 col-sm-6 col-md-4 col-lg-3" data-aos="zoom-in" data-aos-delay="100" data-aos-duration="200">
                    <img src="{{ asset('images/vk-bro-al9eh9QkdPA-unsplash.webp') }}" class="cursor-pointer img-fluid gallery-img"
                        data-bs-toggle="modal" data-bs-target="#imageModal"
                        data-bs-img="{{ asset('images/vk-bro-al9eh9QkdPA-unsplash.webp') }}" alt="Gallery Image">
                </div>
                <div class="my-2 col-sm-6 col-md-4 col-lg-3" data-aos="zoom-in" data-aos-delay="100" data-aos-duration="200">
                    <img src="{{ asset('images/alex-bayev-BUPlkEeDmMk-unsplash.webp') }}" class="cursor-pointer img-fluid gallery-img"
                        data-bs-toggle="modal" data-bs-target="#imageModal"
                        data-bs-img="{{ asset('images/alex-bayev-BUPlkEeDmMk-unsplash.webp') }}" alt="Gallery Image">
                </div>
                <div class="my-2 col-sm-6 col-md-4 col-lg-3" data-aos="zoom-in" data-aos-delay="100" data-aos-duration="200">
                    <img src="{{ asset('images/leo-roza-CLMpC9UhyTo-unsplash.webp') }}" class="cursor-pointer img-fluid gallery-img"
                        data-bs-toggle="modal" data-bs-target="#imageModal"
                        data-bs-img="{{ asset('images/leo-roza-CLMpC9UhyTo-unsplash.webp') }}" alt="Gallery Image">
                </div>
            </div>
        </div>
    </div>
</div>

<div class="modal fade" id="imageModal" tabindex="-1" aria-labelledby="imageModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered modal-lg">
        <div class="text-white modal-content position-relative" >

            <button type="button" class="top-0 m-3 white-close position-absolute end-0"  data-bs-dismiss="modal"
                aria-label="Close"><i class="bi bi-x-lg"></i></button>

            <div class="p-0 modal-body d-flex justify-content-center align-items-center" style="height: 80vh;">
                <button class="m-3 btn book-btn position-absolute start-0" style="font-size: 16px" id="prevBtn"><i class="bi bi-arrow-left"></i></button>
                <img src="" id="modalImage" class="modal-img max-h-100 max-w-100" alt="Large Preview"
                    style="max-height: 100%; max-width: 100%;">
                <button class="m-3 btn book-btn position-absolute end-0" style="font-size: 16px" id="nextBtn"><i class="bi bi-arrow-right"></i></button>
            </div>
        </div>
    </div>
</div>

<script>
    const images = Array.from(document.querySelectorAll('.gallery-img'));
    const modalImage = document.getElementById('modalImage');
    const prevBtn = document.getElementById('prevBtn');
    const nextBtn = document.getElementById('nextBtn');

    let currentIndex = 0;

    function updateModalImage(index) {
        modalImage.src = images[index].dataset.bsImg;
    }

    images.forEach((img, index) => {
        img.addEventListener('click', () => {
            currentIndex = index;
            updateModalImage(currentIndex);
        });
    });

    prevBtn.addEventListener('click', () => {
        currentIndex = (currentIndex - 1 + images.length) % images.length;
        updateModalImage(currentIndex);
    });

    nextBtn.addEventListener('click', () => {
        currentIndex = (currentIndex + 1) % images.length;
        updateModalImage(currentIndex);
    });
</script>

