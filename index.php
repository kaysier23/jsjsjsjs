<html>
<body>
<canvas data-js="canvas" width="500" height="500"></canvas>
<script>
var canvas = document.querySelector('[data-js="canvas"]'),
			    c = canvas.getContext("2d"),
			    WIDTH = canvas.width,
			    HEIGHT = canvas.height,
			    x = 0.1,
			    r = 2;

			for (r; r < 7; r += 0.01) {
			  for (var i = 0; i < 100; i++) {
    					x = r * x * (1 - x);
			    if (i >= 30) {
			      c.fillRect(r * 250 - 500, x * 250 + 150, 1, 1);
			    }
			  }
			}
      </script>
      </body>
      </html>
      
