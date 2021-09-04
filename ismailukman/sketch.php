<?php require_once '_lib/less.php'; $less=new lessc; $less->compileFile('_assets/css/main.less','_assets/css/main.css'); ?>
<!doctype html>
<html>
<head>
<meta charset="UTF-8">
<title>sketch</title>
<link rel="shortcut icon" href="favicon.png">
<link rel="stylesheet" href="_assets/css/main.css" rel="">
<script src="_assets/js/jquery.min.js"></script>
<script src="_assets/js/sketch.min.js"></script>
<script src="_assets/js/main.js"></script>
</head>

<body>
   
   
   <div id="intro">
      <div class="tw"><div class="ti">
         <h1>Lukman Board</h1>
         <div id="scribble">
            <svg xmlns:xlink="http://www.w3.org/1999/xlink" xmlns="http://www.w3.org/2000/svg" version="1.1" viewBox="0 0 336 83" width="40vw" height="8vh"><path id="scr" fill="none" stroke="#000000" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" d="M 6 48 c -0.07 0.05 -3.36 1.84 -4 3 c -0.78 1.41 -0.85 3.99 -1 6 c -0.18 2.31 -0.39 5.05 0 7 c 0.2 1.01 1.21 2.12 2 3 c 1.85 2.08 3.91 4.48 6 6 c 1.33 0.97 3.3 1.7 5 2 c 5.71 0.99 12.18 1.77 18 2 c 2.27 0.09 4.72 -0.43 7 -1 c 4.39 -1.1 8.97 -2.25 13 -4 c 3.45 -1.5 7.18 -3.6 10 -6 c 3.6 -3.06 7.74 -7.09 10 -11 c 2.4 -4.16 4.87 -13.24 5 -15 c 0.03 -0.46 -3.3 0.22 -4 1 c -1.51 1.7 -3.33 5.33 -4 8 c -0.9 3.59 -1.2 8.28 -1 12 c 0.12 2.25 0.69 5.58 2 7 c 2.11 2.28 6.71 5.21 10 6 c 4.23 1.01 10.09 0.25 15 0 c 1.67 -0.08 3.52 -0.41 5 -1 c 1.69 -0.68 3.38 -1.88 5 -3 c 2.78 -1.93 5.48 -3.8 8 -6 c 2.85 -2.49 5.68 -5.15 8 -8 c 1.93 -2.38 3.91 -5.18 5 -8 c 2.78 -7.19 6.92 -21.69 7 -23 c 0.03 -0.46 -4.77 3.79 -6 6 c -1.83 3.3 -3.02 7.93 -4 12 c -1.02 4.24 -1.54 8.64 -2 13 c -0.21 1.99 -0.33 4.18 0 6 c 0.3 1.63 1.16 3.49 2 5 c 0.78 1.4 1.87 2.87 3 4 c 1.13 1.13 2.6 2.3 4 3 c 1.78 0.89 3.91 1.36 6 2 c 2.4 0.74 4.69 1.78 7 2 c 4.45 0.42 9.5 0.41 14 0 c 2.65 -0.24 5.55 -1.02 8 -2 c 2.39 -0.96 4.75 -2.47 7 -4 c 6.21 -4.22 13.52 -8.04 18 -13 c 4.16 -4.6 7.28 -11.93 10 -18 c 1.51 -3.36 2.55 -7.38 3 -11 c 0.52 -4.13 0.61 -9.93 0 -13 c -0.17 -0.85 -2.04 -1.9 -3 -2 c -1.89 -0.19 -5.33 -0.04 -7 1 c -3 1.88 -6.33 5.88 -9 9 c -1.22 1.43 -2.46 3.24 -3 5 c -2.01 6.52 -3.77 14.12 -5 21 c -0.4 2.23 -0.33 4.83 0 7 c 0.3 1.96 0.91 4.41 2 6 c 2.32 3.37 5.83 7.04 9 10 c 1.7 1.59 3.89 3.16 6 4 c 4.27 1.71 9.39 3.41 14 4 c 5.38 0.69 11.48 0.42 17 0 c 2.99 -0.23 6.06 -1.06 9 -2 c 5.44 -1.74 11.16 -3.42 16 -6 c 4.87 -2.6 10.07 -6.24 14 -10 c 3.42 -3.27 6.41 -7.9 9 -12 c 1.32 -2.08 2.33 -4.65 3 -7 c 0.62 -2.18 0.85 -4.61 1 -7 c 0.52 -8.12 1 -16.15 1 -24 c 0 -1.99 -0.32 -4.24 -1 -6 c -0.9 -2.34 -2.76 -6.23 -4 -7 c -0.69 -0.43 -3.15 1.05 -4 2 c -1.52 1.71 -2.92 4.56 -4 7 c -1.57 3.54 -2.9 7.22 -4 11 c -1.26 4.31 -2.63 8.68 -3 13 c -0.61 7.12 -0.87 15.49 0 22 c 0.35 2.65 2.4 5.69 4 8 c 1.26 1.83 3.21 3.95 5 5 c 1.85 1.08 4.62 1.52 7 2 c 2.63 0.53 5.39 1 8 1 c 2.93 0 6.2 -0.26 9 -1 c 3.33 -0.88 6.98 -2.23 10 -4 c 6.47 -3.79 13.01 -8.34 19 -13 c 2.94 -2.29 5.68 -5.15 8 -8 c 1.93 -2.38 3.7 -5.24 5 -8 c 1.31 -2.78 2.48 -6.07 3 -9 c 0.44 -2.47 0.3 -5.41 0 -8 l -2 -9"/>
            </svg>
         </div>
         <small>click to start drawing</small>
      </div></div>
   </div>
   
   
   <ul id="palette">
   </ul>
   
   <ul id="tools">
      <li>
         <div class="prompt"><span class="p-q">Are you sure?</span> <i class="p-y">YES</i>| <i class="p-n">NO</i></div>
         <a href="#artboard" class="clear-canvas">
            <div class="icon"><?php echo file_get_contents('_assets/img/iconsketch-clear.svg'); ?></div>
            <!-- <span>clear<br>&nbsp;</span> -->
         </a>
      </li>
      
      <li>
         <a href="#artboard" data-tool="marker" data-size="3" data-cursor-style="cursor-brush02">
            <div class="icon"><?php echo file_get_contents('_assets/img/iconsketch-brush02.svg'); ?></div>
            <!-- <span>brush<br>0.2</span> -->
         </a>
      </li>
      
      <li>
         <a href="#artboard" data-tool="marker" data-size="8" data-cursor-style="cursor-brush03" class="active">
            <div class="icon"><?php echo file_get_contents('_assets/img/iconsketch-brush03.svg'); ?></div>
            <!-- <span>brush<br>0.3</span> -->
         </a>
      </li>
      
      <li>
         <a href="#artboard" data-tool="marker" data-size="12" data-cursor-style="cursor-brush04">
            <div class="icon"><?php echo file_get_contents('_assets/img/iconsketch-brush04.svg'); ?></div>
            <!-- <span>brush<br>0.4</span> -->
         </a>
      </li>
      
      <li>
         <a href="#artboard" data-tool="marker" data-size="18" data-cursor-style="cursor-brush05">
            <div class="icon"><?php echo file_get_contents('_assets/img/iconsketch-brush05.svg'); ?></div>
            <!-- <span>brush<br>0.5</span> -->
         </a>
      </li>
      
      <li>
         <a href="#artboard" data-tool="eraser" data-size="30" data-cursor-style="cursor-eraser">
            <div class="icon"><?php echo file_get_contents('_assets/img/iconsketch-eraser.svg'); ?></div>
            <!-- <span>eraser<br>&nbsp;</span> -->
         </a>
      </li>
      
      <li>
         <a href="#artboard" data-download="png">
            <div class="icon"><?php echo file_get_contents('_assets/img/iconsketch-save.svg'); ?></div>
            <!-- <span>finish!<br>&nbsp;</span> -->
         </a>
      </li>

      <li>
         <a href="index.html" data-download="png">
            <div class="icon"><?php echo file_get_contents('_assets/img/iconsketch-home.svg'); ?></div>
            <!-- <span>finish!<br>&nbsp;</span> -->
         </a>
      </li>
   </ul>
   
   <canvas id="artboard"></canvas>

</body>
</html>
