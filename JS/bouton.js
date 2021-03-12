if (window.matchMedia("(min-width: 1200px)").matches) {
  const btns = document.querySelectorAll(".btn");
        
            btns.forEach((btn) => {
              btn.addEventListener("mousemove", function(e){
                const position = btn.getBoundingClientRect();
                const x = e.pageX - position.left - position.width / 2;
                const y = e.pageY - position.top - position.height / 2;
        
                btn.children[0].style.transform = "translate(" + x * 0.3 + "px, " + y * 0.4 + "px)";
              });
            });
        
            btns.forEach((btn) => {
              btn.addEventListener("mouseout", function(e){
                btn.children[0].style.transform = "translate(0px, 0px)";
              });
            });
} else {
  /* the view port is less than 1200 pixels wide */
}
