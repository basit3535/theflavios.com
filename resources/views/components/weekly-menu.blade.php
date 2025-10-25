<section id="weeklymenu" class="py-5" style="background-color: #1F3634">
    <div class="container mb-5">
        <h2 class="mb-5 text-center">Weekly Menu</h2>
        {{-- Filter buttons --}}
        <div class="flex-wrap gap-3 mb-4 d-flex justify-content-center">

            @foreach ($days as $day)
                <button class="btn book-btn px-4 weekly-filter-btn {{ $loop->first ? 'active' : '' }}"
                    data-filter="{{ strtolower($day) }}">
                    {{ $day }}
                </button>
            @endforeach
        </div>
        {{-- Menu Items --}}
        <div class="row g-4 position-relative" id="menu-items">

            @foreach ($weeklyMenu as $index => $item)
                <div class="col-lg-6 weekly-menu-item isotope-item filter-starters weekly-menu-card-wrapper"
                    data-day="{{ $item['day'] }}">
                    <img src="{{ asset(''.$item['menu_img']) }}" class="menu-img" alt="menu iamge">
                    <div class="menu-content">
                        <p href="#">{{ $item['name'] }}</p><span>
                            <table  class="text-center fw-light">
                                <tr>
                                    <th class="px-2">half</th>
                                    <th class="px-2" style="border-left:1px solid #BF953F">full</th>
                                </tr>
                                <tr>
                                    <td class="px-2">Rs.{{ $item['half_price'] }}</td>
                                    <td class="px-2" style="border-left:1px solid #BF953F">Rs.{{ $item['full_price'] }}</td>
                                </tr>
                            </table>
                        </span>
                    </div>
                    <div class="menu-ingredients">
                        {{ $item['description'] }}
                    </div>
                </div>
            @endforeach

        </div>
    </div>
</section>
<script>
    document.addEventListener('DOMContentLoaded', () => {
        const filterButtons = document.querySelectorAll('.weekly-filter-btn');
        const cards = document.querySelectorAll('.weekly-menu-card-wrapper');

        filterButtons.forEach(button => {
            button.addEventListener('click', () => {
                filterButtons.forEach(b => b.classList.remove('active'));
                button.classList.add('active');

                const filter = button.getAttribute('data-filter');
                let delay = 0;

                cards.forEach(card => {
                    const day = card.getAttribute('data-day').toLowerCase();
                    if (filter === 'all' || day === filter) {
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

        // ✅ Trigger the first filter button after DOM is ready
        if (filterButtons.length > 0) {
            filterButtons[0].click();
        }
    });
</script>
