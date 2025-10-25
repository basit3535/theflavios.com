<script>
    document.addEventListener("DOMContentLoaded", function () {
        const modal = new bootstrap.Modal(document.getElementById('addRowModal'));
        const form = document.getElementById("menuForm");
        const nameInput = document.getElementById("menuName");
        const halfPriceInput = document.getElementById("menuHalfPrice");
        const fullPriceInput = document.getElementById("menuFullPrice");
        const categoryInput = document.getElementById("menuCategory");
        const methodInput = document.getElementById("formMethod");
        const modalTitle = document.getElementById("modalTitle");
        const submitBtn = document.getElementById("submitBtn");

        // Reset modal for Add
        document.querySelector("[data-bs-target='#addRowModal']").addEventListener("click", function () {
            form.action = "{{ route('menus.store') }}";
            methodInput.value = "POST";
            modalTitle.innerHTML = `<span class="fw-mediumbold">New</span> <span class="fw-light">Menu</span>`;
            submitBtn.textContent = "Add";
            nameInput.value = "";
            halfPriceInput.value = "";
            fullPriceInput.value = "";
            categoryInput.value = "";
        });

        // Handle edit button
        document.querySelectorAll(".edit-btn").forEach(button => {
            button.addEventListener("click", function () {
                const id = this.getAttribute("data-id");
                const name = this.getAttribute("data-name");
                const halfPrice = this.getAttribute("data-half-price");
                const fullPrice = this.getAttribute("data-full-price");
                const categoryId = this.getAttribute("data-category");

                form.action = `{{ route('menus.index') }}/${id}`;
                methodInput.value = "PUT";
                nameInput.value = name;
                halfPriceInput.value = halfPrice;
                fullPriceInput.value = fullPrice;
                categoryInput.value = categoryId;
                modalTitle.innerHTML = `<span class="fw-mediumbold">Edit</span> <span class="fw-light">Menu</span>`;
                submitBtn.textContent = "Update";

                modal.show();
            });
        });
    });
</script>
