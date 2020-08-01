let time = 0;
let timeBetweenLetters = 200;

let timer = setInterval(() => {
  time = time + 1;
}, timeBetweenLetters);

let paintSymbal = setInterval(() => {
  switch (time) {
    case 1:
      primer11.setAttribute("fill", "#BA2425");
      primer12.setAttribute("fill", "#BA2425");
      primer13.setAttribute("fill", "#BA2425");
      break;

    case 2:
      primer21.setAttribute("fill", "#BA2425");
      primer22.setAttribute("fill", "#BA2425");
      primer23.setAttribute("fill", "#BA2425");
      break;

    case 3:
      primer31.setAttribute("fill", "#BA2425");
      primer32.setAttribute("fill", "#BA2425");
      primer33.setAttribute("fill", "#BA2425");
      primer34.setAttribute("fill", "#BA2425");
      break;

    case 4:
      primer41.setAttribute("fill", "#BA2425");
      primer42.setAttribute("fill", "#BA2425");
      primer43.setAttribute("fill", "#BA2425");
      primer44.setAttribute("fill", "#BA2425");
      primer45.setAttribute("fill", "#BA2425");
      primer46.setAttribute("fill", "#BA2425");
      primer47.setAttribute("fill", "#BA2425");
      primer48.setAttribute("fill", "#BA2425");
      primer49.setAttribute("fill", "#BA2425");
      primer410.setAttribute("fill", "#BA2425");
      primer411.setAttribute("fill", "#BA2425");
      break;

    case 5:
      primer51.setAttribute("fill", "#BA2425");
      primer52.setAttribute("fill", "#BA2425");
      primer53.setAttribute("fill", "#BA2425");
      primer54.setAttribute("fill", "#BA2425");
      primer55.setAttribute("fill", "#BA2425");
      break;

    case 6:
      primer61.setAttribute("fill", "#BA2425");
      primer62.setAttribute("fill", "#BA2425");
      primer63.setAttribute("fill", "#BA2425");
      break;

    case 7:
      primer71.setAttribute("fill", "#BA2425");
      primer72.setAttribute("fill", "#BA2425");
      primer73.setAttribute("fill", "#BA2425");
      primer74.setAttribute("fill", "#BA2425");
      break;

    case 8:
      document.getElementById("preloader").style.display = "none";
      time = 0;
      break;
  }
}, 100);
