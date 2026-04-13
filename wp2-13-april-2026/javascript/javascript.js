const title = document.querySelectorAll(".title");
title[0].textContent = 'Hello, World!';

const description = document.querySelectorAll(".description");
description[0].textContent = 'This is a simple JavaScript code that changes the content of HTML elements.';

const button = document.querySelectorAll(".button");
button[0].textContent = 'Click Me!';
button[0].addEventListener('click', function(event) {
    console.log("event: ", event);
    alert('Button clicked!');
});

const el = document.getElementById('draggable');

el.addEventListener('pointerdown', (e) => {
  el.setPointerCapture(e.pointerId);   // ← ini yang bikin drag smooth
  
  function onMove(moveE) {
    // update posisi elemen
    el.style.left = moveE.clientX + 'px';
    el.style.top = moveE.clientY + 'px';
  }

  function onUp(upE) {
    el.releasePointerCapture(upE.pointerId);
    document.removeEventListener('pointermove', onMove);
    document.removeEventListener('pointerup', onUp);
  }

  document.addEventListener('pointermove', onMove);
  document.addEventListener('pointerup', onUp);
});