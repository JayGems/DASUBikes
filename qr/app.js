function addPost(date, qr, type) {
  var xhr = new XMLHttpRequest();
  xhr.open("POST", "../DasuBici/assets/php/addPost", true);
  xhr.setRequestHeader("Content-Type", "application/x-www-form-urlencoded");
  //Send the proper header information along with the request
  xhr.onreadystatechange = function () { // Call a function when the state changes.
      if (this.readyState === XMLHttpRequest.DONE && this.status === 200) {
          // Request finished. Do processing here.
          //alert(xhr.responseText);
          console.log("200 OK")
          console.log(this.responseText);
      }
  }
  xhr.send('date=' + date + '&qr=' + qr + '&type=' + type);
}

function getOccurrence(array, value) {
  var count = 0;
  array.forEach((v) => (v.content === value && count++));
  //console.log(count);
  return count;
}

function isOdd(num) { return num % 2; }

function callFunctions(array, value) {
  var nR = getOccurrence(array, value);//Number of times a same value appears in self.scans array

  nR += 1;
  var registro = "";

  if (isOdd(nR) === 0) {
    registro = "Salida " + nR;
  } else {
    registro = "Entrada " + nR;
  }

  return registro;
}

var app = new Vue({
  el: '#app',
  data: {
    scanner: null,
    activeCameraId: null,
    cameras: [],
    scans: []
  },
  mounted: function () {
    var self = this;
    self.scanner = new Instascan.Scanner({ video: document.getElementById('preview'), scanPeriod: 5 });
    self.scanner.addListener('scan', function (content, image) {
      var typeR = callFunctions(self.scans, content);
      self.scans.unshift({ date: +(Date.now()), content: content, entradaSalida: typeR, repeticiones: getOccurrence(self.scans, content) });
      var d = new Date,
        dformat = [
          d.getFullYear(),
          d.getMonth() + 1,
          d.getDate(),].join('-') + ' ' +
          [d.getHours(),
          d.getMinutes(),
          d.getSeconds()].join(':');
      console.log(dformat);
      console.log(typeR);
      addPost(dformat, content, typeR);
    });

    Instascan.Camera.getCameras().then(function (cameras) {
      self.cameras = cameras;
      if (cameras.length > 0) {
        self.activeCameraId = cameras[0].id;
        self.scanner.start(cameras[0]);
      } else {
        console.error('No se encontraron cámaras.');
      }
    }).catch(function (e) {
      console.error(e);
    });
  },
  methods: {
    formatName: function (name) {
      return name || '(Desconocido)';
    },
    selectCamera: function (camera) {
      this.activeCameraId = camera.id;
      this.scanner.start(camera);
    }
  }
});
