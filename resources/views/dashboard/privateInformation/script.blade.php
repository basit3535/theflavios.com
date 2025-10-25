<script>
    document.addEventListener("DOMContentLoaded", function () {
        const modal = new bootstrap.Modal(document.getElementById('addRowModal'));
        const form = document.getElementById("privateInfoForm");
        const phoneInput1 = document.getElementById("phone_one");
        const phoneInput2 = document.getElementById("phone_two");
        const emailInput = document.getElementById("email");
        const addressInput = document.getElementById("address");
        const openingFromInput = document.getElementById("opening_from");
        const openingToInput = document.getElementById("opening_to");
        const methodInput = document.getElementById("formMethod");
        const submitBtn = document.getElementById("submitBtn");
        const modalTitle = document.getElementById("modalTitle");

        // Reset modal for Add
        document.querySelector("[data-bs-target='#addRowModal']").addEventListener("click", function () {
            form.action = "{{ route('private-information.store') }}";
            methodInput.value = "POST";
            modalTitle.innerHTML = `<span class="fw-mediumbold">New</span> <span class="fw-light">Info</span>`;
            submitBtn.textContent = "Add";

            phoneInput1.value = "";
            phoneInput2.value = "";
            emailInput.value = "";
            addressInput.value = "";
            openingFromInput.value = "";
            openingToInput.value = "";
        });

        // Handle Edit
        document.querySelectorAll(".edit-btn").forEach(button => {
            button.addEventListener("click", function () {
                const id = this.getAttribute("data-id");
                const phone1 = this.getAttribute("data-phone-one");
                const phone2 = this.getAttribute("data-phone-two");
                const email = this.getAttribute("data-email");
                const address = this.getAttribute("data-address");
                const openingFrom = this.getAttribute("data-opening-from");
                const openingTo = this.getAttribute("data-opening-to");

                form.action = `{{ route('private-information.index') }}/${id}`;
                methodInput.value = "PUT";
                modalTitle.innerHTML = `<span class="fw-mediumbold">Edit</span> <span class="fw-light">Info</span>`;
                submitBtn.textContent = "Update";

                phoneInput1.value = phone1;
                phoneInput2.value = phone2;
                emailInput.value = email;
                addressInput.value = address;
                openingFromInput.value = openingFrom;
                openingToInput.value = openingTo;

                modal.show();
            });
        });
    });
</script>
