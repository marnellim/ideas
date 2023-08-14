import './bootstrap';
import Alpine from 'alpinejs';

window.Alpine = Alpine;

Alpine.start();

  var currentDateTime = new Date();
        
  var dateOptions = { year: 'numeric', month: 'long', day: 'numeric' };
  var formattedDate = currentDateTime.toLocaleDateString('en-US', dateOptions);
  
  var timeOptions = { hour: 'numeric', minute: 'numeric', second: 'numeric', hour12: true };
  var formattedTime = currentDateTime.toLocaleTimeString('en-US', timeOptions);
  
  document.getElementById("date").textContent = formattedDate;
  
  document.getElementById("time").textContent = "Current Time: " + formattedTime;

