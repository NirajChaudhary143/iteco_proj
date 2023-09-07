window.onload = function() {
    const categorySelect = document.getElementById("category");
    const tbodyList = document.querySelectorAll("tbody");

    categorySelect.addEventListener("change", function() {
        const selectedCategory = this.value;
        let projectNumber = 1; // Initialize the project number to 1

        tbodyList.forEach(tbody => {
            const categoryName = tbody.dataset.category;

            if (selectedCategory === "all" || categoryName === selectedCategory) {
                tbody.style.display = "table-row-group";

                tbody.querySelectorAll("tr").forEach(row => {
                    // Update the project number in the row
                    row.querySelector("td").textContent = projectNumber;

                    // Increment the project number
                    projectNumber++;
                });
            } else {
                tbody.style.display = "none";
            }
        });
    });
};
