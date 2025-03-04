<!-- resources/views/components/scroll-to-top.blade.php -->
<button id="scrollToTopBtn">
    <i class="fas fa-chevron-up"></i>
</button>

<style>
    #scrollToTopBtn {
        position: fixed;
        bottom: 20px;
        right: 20px;
        display: none;
        background-color: #89CFF0;
        color: white;
        border: none;
        padding: 10px 15px;
        border-radius: 5px;
        cursor: pointer;
        z-index: 1000;
    }

    #scrollToTopBtn:hover {
        background-color: #0056b3;
    }
</style>

<script>
    document.addEventListener("DOMContentLoaded", function() {
        var scrollToTopBtn = document.getElementById("scrollToTopBtn");

        function scrollToTop() {
            window.scrollTo({ top: 0, behavior: 'smooth' });
        }

        window.onscroll = function() {
            if (document.body.scrollTop > 20 || document.documentElement.scrollTop > 20) {
                scrollToTopBtn.style.display = "block";
            } else {
                scrollToTopBtn.style.display = "none";
            }
        };

        scrollToTopBtn.addEventListener("click", scrollToTop);
    });
</script>
