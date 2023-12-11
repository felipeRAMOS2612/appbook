class Formulario {
    constructor() {
      this.errores = [];
      this.rut = document.querySelector("#rut");
      this.name = document.querySelector("#name");
      this.last_name = document.querySelector("#last_name");
      this.email = document.querySelector("#email");
      this.phone = document.querySelector("#phone");
      this.phone = document.querySelector("#phone");
      this.address = document.querySelector("#address");
      this.canal = document.getElementById("canal");
      this.password = document.querySelector("#password");
      this.password_confirmation = document.querySelector("#password_confirmation");
      this.submit_button = document.querySelector("#submit_button");
    }

  
    verificarCampos = () => {
      this?.verifyBlankFields();
    //   if (!this.validarRut()) {
    //     this.errores.push("El rut ingresado no es válido");
    //   }

      if(this.password.value.length < 8){
        this.errores.push('La contraseña debe tener minimo 8 caracteres');
      }
    };


  
    validarEmail = email => {
      const regex = /^[^\s@]+@[^\s@]+\.[^\s@]+$/;
      return regex.test(email);
    }
  
    verifyBlankFields = () => {
      if (this.rut?.value === "") {
        this.errores.push("El campo rut debe completarse");
      }
      if (this.name.value === "") {
        this.errores.push("El campo nombre debe completarse");
      }
      if (this.last_name.value === "") {
        this.errores.push("El campo apellido debe completarse");
      }
      if (this.email.value === "") {
        this.errores.push("El campo email debe completarse");
      }
      if (this.phone.value === "") {
        this.errores.push("El campo telefono debe completarse");
      }
      if (this.address.value === "") {
        this.errores.push("El campo dirección debe completarse");
      }
      if (this.password.value === "") {
        this.errores.push("El campo contraseña debe completarse");
      }
      if (this.password_confirmation.value === "") {
        this.errores.push("El campo de confirmación debe completarse");
      }

      this.verifyPassword();
    }

    verifyPassword = () => {
        if (this.password.value !== this.password_confirmation.value) {
          this.errores.push("Las contraseñas no coinciden");
        }
    };
  
    validarRut = () => {
      let rut = this.rut?.value.replaceAll(".", "");
      if (!/^[0-9]+[-|‐]{1}[0-9kK]{1}$/.test(rut)) return false; 
      let aux = rut.split("-");
      let cuerpo = aux[0];
      let dv = aux[1];
      cuerpo = cuerpo.split("").reverse().join("");
      let suma = 0;
      let multiplo = 2;
  
      for (let i = 0; i < cuerpo.length; i++) {
        suma += parseInt(cuerpo.charAt(i)) * multiplo;
        if (multiplo < 7) {
          multiplo += 1;
        } else {
          multiplo = 2;
        }
      }
  
      let dvCalculado = 11 - (suma % 11);
  
      if (dvCalculado == 11) dvCalculado = 0;
      else if (dvCalculado == 10) dvCalculado = "K";
  
      return dvCalculado == dv.toUpperCase();
    };
  
    cleanRut = e => {
      if (e.keyCode === 8) {
        let value = e.target.value;
        if (value.match(/(.\.)|(\-)/)) {
          value = value.replaceAll(".", "");
          value = value.replaceAll("-", "");
          e.target.value = value;
        }
      }
    };
  
    formatRut = () => {
      let value = this.rut.value.replace(/\./g, "").replace("-", "");
      if (value.match(/^(\d{2})(\d{3}){2}(\w{1})$/)) {
        value = value.replace(/^(\d{2})(\d{3})(\d{3})(\w{1})$/, "$1.$2.$3-$4");
      } else if (value.match(/^(\d)(\d{3}){2}(\w{0,1})$/)) {
        value = value.replace(/^(\d)(\d{3})(\d{3})(\w{0,1})$/, "$1.$2.$3-$4");
      } else if (value.match(/^(\d)(\d{3})(\d{0,2})$/)) {
        value = value.replace(/^(\d)(\d{3})(\d{0,2})$/, "$1.$2.$3");
      } else if (value.match(/^(\d)(\d{0,2})$/)) {
        value = value.replace(/^(\d)(\d{0,2})$/, "$1.$2");
      }
      this.rut.value = value;
    };
  
    validatePhone() {
      telefonoRegex = /^(\+?56)?(\s?)(0?9)(\s?)[987654321]\d{7}$/;
      !telefonoRegex.test(this.phone.value) && this.errores.push("¡El N° de Whatsapp no es válido!");
    }
  
    eventTargetPhone = () => {
        this.phone.addEventListener('keyup', function(e) {
          if (e.target.value.length < 4) {    
              e.target.value = "+569";
          }
        })
        this.phone.addEventListener('focus', function(e) {
          if (e.target.value.length  <4) {    
            e.target.value = "+569";
          }
        })
    }
  
    formatPhone = () => {
      let value = this.telefono.value.replace(/\s/g, "");
      if (value.match(/^(\d{2})(\d{3}){2}$/)) {
        value = value.replace(/^(\d{2})(\d{3})(\d{3})$/, "$1 $2 $3");
      } else if (value.match(/^(\d{2})(\d{3})(\d{0,2})$/)) {
        value = value.replace(/^(\d{2})(\d{3})(\d{0,2})$/, "$1 $2 $3");
      } else if (value.match(/^(\d{2})(\d{0,2})$/)) {
        value = value.replace(/^(\d{2})(\d{0,2})$/, "$1 $2");
      }
    }
  
    eventRutChange = () => {
      this.rut?.addEventListener("input", this.formatRut);
      this.rut?.addEventListener("keyup", this.cleanRut);
    };

    eventSubmit = () => {
        this.submit_button.addEventListener('click', () => {
            this.verifyBlankFields();
            this.verificarCampos();
            if(this.errores.length > 0){
                this.dispatchMessageErrorInputs(this.errores[0]);
                return;
            }
            this.submit_button.innerHTML = '<span><img class="fa-spin" src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAABkAAAAZCAYAAADE6YVjAAAACXBIWXMAAAsTAAALEwEAmpwYAAABcUlEQVR4nOXVP0hVYRjH8U9UGBI5SA6FCEGKk3aVKARxaGxoTV0bcxAcHVyj+baUWGONt6CQXBqaBMtAEB1Eu4ODm4SKfzjwCA7n3H/nNEQ/uBy4v+c83/d9nvd9Dv+TujGFCn6iinV8wnN05knehTIOcYptLOEDvgUs+f8Ar3DjwrtjuFYPMIwdHOMtShlxI3iHE2zhPu4EfKIeYD9W+qDBXT+KRe1hPCDPapVoJwA9mlMfdvGnHqQcJXrYJGAKi9gIQCakO5qc9KBZvcTmhd8vDGat5rRGkwtRJY7pJX9RP/C1oFwd6E0zfuN9QZAXWEkz1vC5wJ3cTTM+xh0pQkO4mmbMxOkayAloxxGeppm3w3wjv/qzdpLoddz4Uo7ks/WCbuI7RluEPMYqLjcSnATNNTHDevGkleZVo3QLuJcRdz2eSYmWtaDO6NH5l7GKL5gPbzAOyvnNzmx0I7qF6ZhtyXRNpmySuA2TuJIn+b+lMwL1UYqIp5EDAAAAAElFTkSuQmCC"></span>';
            this.sendData();
            return;
        })
    }

    sendData = () => {
        const formulario  = document.querySelector("#form");
        formulario.submit();
    }
  
    dispatchMessageErrorInputs = (errores) => {
      const error =
          `<div style="color: #DA6363 ; padding: 0; margin:0; line-height: 15px;">${errores}</div>`
      Swal.fire({
        icon: "error",
        title: "Error",
        html: `${error}`,
        confirmButtonText: "Aceptar",
        confirmButtonColor: "#d4aa3a",
      });
      this.errores = [];
      console.log(this.errores)
    };
  
    initMethods = () => {
      this.eventRutChange();
      this.eventTargetPhone();
      this.eventSubmit();
    };
  };
  
document.addEventListener("DOMContentLoaded", () => {

    const formulario = new Formulario();
    formulario.initMethods();
  
});

  