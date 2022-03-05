<html>
<head>
<title>dental care</title>
<style type="text/css">
body {
    margin: 0;
    height: 100vh;
    display: flex;
    align-items: center;
    justify-content: center;
    background-color: white;
}

nav ul {
    list-style-type: none;
    margin: 0;
    padding: 0;
}

nav ul li {
    --c: #179db4;
    color: var(--c);
    font-size: 16px;
    border: 0.3em solid var(--c);
    border-radius: 0.5em;
    width: 12em;
    height: 3em;
    text-transform: uppercase;
    font-weight: bold;
    font-family: sans-serif;
    letter-spacing: 0.1em;
    text-align: center;
    line-height: 3em;
    position: relative;
    overflow: hidden;
    z-index: 1;
    transition: 0.5s;
    margin: 1em;
}

nav ul li span {
    position: absolute;
    width: 25%;
    height: 100%;
    background-color: var(--c);
    transform: translateY(150%);
    border-radius: 50%;
    left: calc((var(--n) - 1) * 25%);
    transition: 0.5s;
    transition-delay: calc((var(--n) - 1) * 0.1s);
    z-index: -1;
}

nav ul li:hover {
    color: black;
}

nav ul li:hover span {
    transform: translateY(0) scale(2);
}

nav ul li span:nth-child(1) {
    --n: 1;
}

nav ul li span:nth-child(2) {
    --n: 2;
}

nav ul li span:nth-child(3) {
    --n: 3;
}

nav ul li span:nth-child(4) {
    --n: 4;
}

</style>
</head>
<body>
<nav>
  <ul>
    
  <a href="drview.php"><li >
      Dr. Seif Hashem
      <span></span><span></span><span></span><span></span>
    </li> </a>
    <a href="drview2.php"><li>
      Dr. Hussin Fekry
      <span></span><span></span><span></span><span></span>
    </li></a>
    <a href="drview3.php"><li>
    Dr. deo brand
      <span></span><span></span><span></span><span></span>
    </li></a>
    <a href="drview4.php"><li>
    Dr. caesar anthonio
      <span></span><span></span><span></span><span></span>
    </li></a>
    <a href="drview5.php"><li>
    Dr. Mohamed Abdul
      <span></span><span></span><span></span><span></span>
    </li></a>
    <a href="drview6.php"><li>
    Dr. kujo jotaro
      <span></span><span></span><span></span><span></span>
    </li></a>
  </ul>
</nav></body>
</html>