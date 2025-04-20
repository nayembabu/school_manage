document.addEventListener("DOMContentLoaded", () => {
    const form = document.getElementById("studentForm");
    const infoCard = document.getElementById("infoCard");
    const infoDisplay = document.getElementById("infoDisplay");
    const checkBtn = document.getElementById("checkInfo");
    const editBtn = document.getElementById("editInfo");

    checkBtn.addEventListener("click", () => {
        const formData = new FormData(form);
        let html = "<ul class='list-group'>";

        formData.forEach((value, key) => {
            const inputElement = document.querySelector(`[name="${key}"]`);
            let label = key;

            if (inputElement) {
                const labelElement = inputElement.closest(".mb-3")?.querySelector("label");
                label = labelElement ? labelElement.innerText : key;

                // If the element is a select dropdown, get selected option's text
                if (inputElement.tagName === "SELECT") {
                    const selectedOption = inputElement.options[inputElement.selectedIndex];
                    value = selectedOption.text;
                }
            }

            html += `<li class='list-group-item'><strong>${label}:</strong> ${value}</li>`;
        });

        html += "</ul>";
        infoDisplay.innerHTML = html;

        // Show info card and hide form
        infoCard.classList.remove("d-none");
        form.classList.add("d-none");
    });

    editBtn.addEventListener("click", () => {
        // Hide info card and show form
        infoCard.classList.add("d-none");
        form.classList.remove("d-none");
    });
});
