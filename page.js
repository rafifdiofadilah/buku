window.onscroll = function () {
    scrollFunction();
  };
  
  function scrollFunction() {
    if (document.body.scrollTop > 80 || document.documentElement.scrollTop > 80) {
      document.getElementById("navbar").style.backgroundColor = "#002347";
      document.getElementById("myBtn").style.display = "block";
    } else {
      document.getElementById("navbar").style.backgroundColor = "unset";
      document.getElementById("myBtn").style.display = "none";
    }
  }
  
  function topFunction() {
    document.body.scrollTop = 0;
    document.documentElement.scrollTop = 0;
  }