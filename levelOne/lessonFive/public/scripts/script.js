'use strict'

function httpGet(url) {

    return new Promise(function(resolve, reject) {
  
      var xhr = new XMLHttpRequest();
      xhr.open('GET', url, true);
  
      xhr.onload = function() {
        if (this.status == 200) {
          resolve(this.response);
        } else {
          var error = new Error(this.statusText);
          error.code = this.status;
          reject(error);
        }
      };
  
      xhr.onerror = function() {
        reject(new Error("Network Error"));
      };
  
      xhr.send();
    }); 

  }

function render(link){
  document.querySelector(`.downloadPhotoForm`).insertAdjacentHTML('beforebegin', link)
}

httpGet("../engine/server.php?request=atr7829s7")
  .then(
    response => render(response),
    error => alert(`Rejected: ${error}`)
  );