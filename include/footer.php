<a href="#"></a>
<footer class="footer">
    <div class="container" id="footer-inner">
        <div class="content has-text-centered">
            <p><a href="#"><i class="fa fa-angle-up"></i></a></p>

            <p>
                &copy; 2017 Byte.gg<br><a href="https://www.youtube.com/user/Themasterdefence">Site by Thunder Tech</a>
            </p>
        </div>
    </div>
</footer>


<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
<script>
    $(".nav-toggle").click(function() {
        $(".nav-menu").toggleClass('is-active');
        $(".nav-toggle").toggleClass('is-active');
    });

    if (window.top !== window.self) {
        window.top.location.replace(window.self.location.href);
    }
</script>
</body>

</html>
