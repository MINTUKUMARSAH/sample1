<i onclick="topFunction()" id="top-btn" title="Go to top" class="fa fa-angle-up btn black-hover"></i>


<script>
  let mybutton = document.getElementById("top-btn");

  window.onscroll = function () { scrollFunction() };

  function scrollFunction() {
    if (document.body.scrollTop > 20 || document.documentElement.scrollTop > 500) {
      mybutton.style.display = "block";
    } else {
      mybutton.style.display = "none";
    }
  }

  function topFunction() {
    document.body.scrollTop = 0;
    document.documentElement.scrollTop = 0;
  }
</script>