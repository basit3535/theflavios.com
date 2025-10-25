<script>
    document.addEventListener("DOMContentLoaded", function () {
        const modal = new bootstrap.Modal(document.getElementById('addRowModal'));
        const form = document.getElementById("linkForm");
        const nameInput = document.getElementById("linkName");
        const linkInput = document.getElementById("socialLink");
        const methodInput = document.getElementById("formMethod");
        const modalTitle = document.getElementById("modalTitle");
        const submitBtn = document.getElementById("submitBtn");

        // Reset modal for Add
        document.querySelector("[data-bs-target='#addRowModal']").addEventListener("click", function () {
            form.action = "{{ route('social-links.store') }}";
            methodInput.value = "POST";
            modalTitle.innerHTML = `<span class="fw-mediumbold">New</span> <span class="fw-light">Link</span>`;
            submitBtn.textContent = "Add";
            nameInput.value = "";
            linkInput.value = "";
        });

        // Handle edit button
        document.querySelectorAll(".edit-btn").forEach(button => {
            button.addEventListener("click", function () {
                const id = this.getAttribute("data-id");
                const name = this.getAttribute("data-name");
                const link = this.getAttribute("data-link");

                form.action = `{{ route('social-links.index') }}/${id}`;
                methodInput.value = "PUT";
                nameInput.value = name;
                linkInput.value = link;
                modalTitle.innerHTML = `<span class="fw-mediumbold">Edit</span> <span class="fw-light">Link</span>`;
                submitBtn.textContent = "Update";

                modal.show();
            });
        });
    });
</script>
