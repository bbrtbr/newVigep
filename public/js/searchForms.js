document.addEventListener("DOMContentLoaded", function() {
    document.getElementById("searchInput").addEventListener("input", function() {
        var input, filter, btnContainer, btns, i, txtValue;
        input = document.getElementById("searchInput");
        filter = input.value.toUpperCase();
        btnContainer = document.getElementById("btnContainer");
        btns = btnContainer.getElementsByTagName("a");
        for (i = 0; i < btns.length; i++) {
            txtValue = btns[i].textContent || btns[i].innerText;
            if (txtValue.toUpperCase().indexOf(filter) > -1) {
                btns[i].style.display = "";
            } else {
                btns[i].style.display = "none";
            }
        }
    });
});
