let finishPaint = 0;
let startPaint = -198;
let speedPaint = 0.61;
let xPosition = "x";
const intervalBetweenFrames = 10;
let speedUp = 5;
let timeToFinishPaint = 500;

// Fill logo
let paintPreloader = setInterval(function () {
  maskRect.setAttribute(xPosition, startPaint);
  startPaint = startPaint + speedPaint;

  if (startPaint > finishPaint) {
    clearInterval(paintPreloader);
  }
}, intervalBetweenFrames);

// Tracking loading and finishing filling
let finishPaintPreloader = setInterval(function () {
  if (document.readyState === "complete") {
    speedPaint = speedPaint + speedUp;
    clearInterval(finishPaintPreloader);
  }
}, intervalBetweenFrames);

window.onload = function () {
  setTimeout(function () {
    document.getElementById("preloader").style.display = "none";
  }, timeToFinishPaint);
};
