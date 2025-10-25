<section id="menu" class="py-5">
    <div class="container">
        <h2 class="mb-5 text-center">Our Menu</h2>

        {{-- Filter buttons --}}
        <div class="flex-wrap gap-3 mb-4 d-flex justify-content-center">

            @foreach ($categories as $category)
                <button class="btn book-btn px-4 filter-btn {{ $loop->first ? 'active' : '' }}"
                    data-filter="{{ strtolower($category->name) }}">
                    {{ $category->name }}
                </button>
            @endforeach
        </div>
        {{-- Menu Items --}}
        <div class="row g-4" id="menu-items">

            @foreach ($menuItems as $index => $item)
                <div class="col-sm-6 col-md-4 qodef-e menu-card-wrapper" data-aos="fade-up"
                    data-aos-delay="{{ $index * 100 }}" data-aos-duration="800"
                    data-type="{{ strtolower($item->category->name) }}">
                    <div class="overflow-hidden shadow-sm menu-card position-relative">
                        <img src="{{ asset(''.$item->menu_img) }}" class="w-100 h-100 object-fit-cover" alt="Dish">
                        <div class="qodef-e-content">
                            <div class="qodef-e-title">
                                <span class="qodef-e-caption">
                                    {{ $item->name }}
                                </span>
                            </div>
                            <div class="qodef-e-description">
                                <div class="mt-1 book-btn" style="width: fit-content">
                                    {{ $item->category->name }}
                                </div>
                            </div>
                            <div class="qodef-e-prices">
                                <div>
                                    <span  style="display: inline-block; width: 40px; border-right: 1px solid #BF953F; text-align: left; margin-right: 0.5rem ">Half</span> Rs.{{ $item->half_price }}
                                </div>
                                <div>
                                    <span style="display: inline-block; width: 40px; border-right: 1px solid #BF953F; text-align: left; margin-right: 0.5rem ">Full</span> Rs.{{ $item->full_price }}
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            @endforeach

        </div>
    </div>
</section>
<script>
    const filterButtons = document.querySelectorAll('.filter-btn');
    const cards = document.querySelectorAll('.menu-card-wrapper');

    filterButtons.forEach(btn => {
        btn.addEventListener('click', () => {
            filterButtons.forEach(b => b.classList.remove('active'));
            btn.classList.add('active');

            const filter = btn.getAttribute('data-filter');
            let delay = 0;

            cards.forEach(card => {
                const type = card.getAttribute('data-type');
                if (filter === 'all' || type === filter) {
                    card.style.display = 'block';
                    card.setAttribute('data-aos', 'fade-up');
                    card.setAttribute('data-aos-delay', delay);
                    card.setAttribute('data-aos-duration', '200');
                    delay += 100;
                } else {
                    card.style.display = 'none';
                    card.removeAttribute('data-aos');
                    card.removeAttribute('data-aos-delay');
                    card.removeAttribute('data-aos-duration');
                }
            });

            AOS.refreshHard();
        });
    });

    // 👉 Trigger click on first filter button after page loads
    if (filterButtons.length > 0) {
        filterButtons[0].click();
    }
</script>
