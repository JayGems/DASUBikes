function call() {
    var xmlhttp = new XMLHttpRequest();
    xmlhttp.onreadystatechange = function () {
        if (this.readyState == 4 && this.status == 200) {
            var myObj = JSON.parse(this.responseText);
            var table = document.getElementById("demo");
            for(var i = 0; i < myObj.length; i++) {
                var row     = document.createElement("TR");
                var num     = document.createElement("TD");
                var photo   = document.createElement("IMG");
                var bID     = document.createElement("TD");
                var bphoto  = document.createElement("IMG");
                var name    = document.createElement("TD");
                var role    = document.createElement("TD");
                var email   = document.createElement("TD");
                var status  = document.createElement("TD");
                var statusL = document.createElement("SPAN");
                var actions = document.createElement("TD");
                var sets    = document.createElement("A");
                var setsI   = document.createElement("I");
                var del     = document.createElement("A");
                var delI    = document.createElement("I");
                var item    = myObj[i];
                
                //ID del usuario
                row.setAttribute("id", item.uid);
                num.innerHTML = item.uid;
                row.appendChild(num);
                //Nombre y foto del usuario
                var iconURL = "";
                if(item.role == "Estudiante"){
                    iconURL = "assets/img/student";
                }else if(item.role == "Academico"){
                    iconURL = "assets/img/teacher";
                }
                photo.setAttribute("src", iconURL);
                name.appendChild(photo);
                name.innerHTML += item.name;
                row.appendChild(name);
                //ID de bicicleta
                bphoto.setAttribute("src", "assets/img/bike");
                bID.appendChild(bphoto);
                bID.innerHTML += item.bid;
                row.appendChild(bID);
                //Rol universitario
                role.innerHTML = item.role;
                row.appendChild(role);
                //E-mail
                email.innerHTML = item.email;
                row.appendChild(email);
                //Status del cliente
                statusL.setAttribute("class", "status text-success");
                statusL.innerHTML = "&bull;";
                status.appendChild(statusL);
                status.innerHTML += "Activo";
                row.appendChild(status);
                //Acciones
                //Settings
                sets.setAttribute("href", "#");
                sets.setAttribute("class", "settings");
                sets.setAttribute("title", "Settings");
                sets.setAttribute("data-toggle", "tooltip");
                //Settings Icon
                setsI.setAttribute("class", "material-icons");
                setsI.innerHTML = "&#xE8B8;";
                sets.appendChild(setsI);
                //Delete
                del.setAttribute("id", item.id);
                del.setAttribute("href", "#");
                del.setAttribute("class", "delete");
                del.setAttribute("title", "Delete");
                del.setAttribute("data-toggle", "tooltip");
                del.setAttribute("onclick", "deleteC(this.id)");
                //Delete Icon
                delI.setAttribute("class", "material-icons");
                delI.innerHTML = "&#xE5C9;";
                del.appendChild(delI);
                actions.appendChild(sets);
                actions.appendChild(del);
                row.appendChild(actions);
                
                table.appendChild(row);
            }
        }
    };
    xmlhttp.open("GET", "assets/php/listusers.php", true);
    xmlhttp.send();
}