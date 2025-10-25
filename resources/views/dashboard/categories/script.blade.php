<script>
    document.addEventListener("DOMContentLoaded", function () {
        const modal = new bootstrap.Modal(document.getElementById('addRowModal'));
        const form = document.getElementById("categoryForm");
        const nameInput = document.getElementById("categoryName");
        const methodInput = document.getElementById("formMethod");
        const modalTitle = document.getElementById("modalTitle");
        const submitBtn = document.getElementById("submitBtn");

        // Reset modal for Add
        document.querySelector("[data-bs-target='#addRowModal']").addEventListener("click", function () {
            form.action = "{{ route('categories.store') }}";
            methodInput.value = "POST";
            modalTitle.innerHTML = `<span class="fw-mediumbold">New</span> <span class="fw-light">Category</span>`;
            submitBtn.textContent = "Add";
            nameInput.value = "";
        });

        // Handle edit button
        document.querySelectorAll(".edit-btn").forEach(button => {
            button.addEventListener("click", function () {
                const id = this.getAttribute("data-id");
                const name = this.getAttribute("data-name");

                form.action = `{{ route('categories.index') }}/${id}`;
                methodInput.value = "PUT";
                nameInput.value = name;
                modalTitle.innerHTML = `<span class="fw-mediumbold">Edit</span> <span class="fw-light">Category</span>`;
                submitBtn.textContent = "Update";

                modal.show();
            });
        });
    });
</script>
