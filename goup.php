<button id = "click-up"
 style="
    display: none;
    position: fixed;
    bottom: 10px;
    left: 20px;
    background:none;
    border:none;
    outline: none;
    cursor: pointer;">
    <img src="Photos/chevron-upwards-arrow.png" alt="العودة لأعلى" width ="50" height="50"></button>

    <script>
            var btn = document.getElementById("click-up");

            window.onscroll = function()
            {
                if(window.pageYOffset >= 30)
                {
                    btn.style.display = "block";
                }
                else{
                    btn.style.display = "none";

                }

                btn.onclick = function()
                {
                    window.scrollTo(0,0);
                }
            }
        </script>

       