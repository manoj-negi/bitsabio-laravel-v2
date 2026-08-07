document.addEventListener("DOMContentLoaded", function () {

    const items = document.querySelectorAll(".acc-item");

    items.forEach(item => {

        const head = item.querySelector(".acc-head");
        const panel = item.querySelector(".acc-panel");

        // Open the first item if it already has the "open" class
        if (item.classList.contains("open")) {
            panel.style.maxHeight = panel.scrollHeight + "px";
        }

        head.addEventListener("click", function () {

            const isOpen = item.classList.contains("open");

            // Close all items
            items.forEach(i => {
                i.classList.remove("open");
                i.querySelector(".acc-panel").style.maxHeight = null;
            });

            // Open the clicked item
            if (!isOpen) {
                item.classList.add("open");
                panel.style.maxHeight = panel.scrollHeight + "px";
            }

        });

    });

});