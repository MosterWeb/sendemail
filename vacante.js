function showSendingMessage(resultElement, show) {
  if (show) {
    resultElement.innerHTML = "";
    resultElement.insertAdjacentHTML(
      "beforeend",
      "<span id='sendingMessage' style='color: blue; text-align: center; margin: 10px 0;font-weight: 600; padding: 10px 12px; background: #0000ff21; border: solid 0.5px blue;'>Validando postulación... Espere. No toque nada.</span>"
    );
  } else {
    const sendingMessageElement = document.getElementById('sendingMessage');
    if (sendingMessageElement) {
      sendingMessageElement.remove();
    }
  }
}

document.addEventListener("DOMContentLoaded", function () {
  //la url del php
  const url_fecth = "http://email.test/mail.php";


  function sendmail(url, form, result) {
    if (!(form instanceof HTMLFormElement)) {
      console.error("El elemento del formulario no es válido");
      return;
    }

    const dato = new FormData(form);
    showSendingMessage(result, true);
console.log("Antes de hacer fetch", dato);

    fetch(url, {
      method: "POST",
      headers: {
        Accept: "application/json",
      },
      body: dato,
    })
      .then((res) => {
console.log("Respuesta recibida:", res);
        if (!res.ok) {
          throw new Error("Network response was not ok");
        }
        const contentType = res.headers.get("content-type");
        if (contentType && contentType.indexOf("application/json") !== -1) {
          return res.json();
        } else {
          throw new Error("Unexpected content type: " + contentType);
        }
      })
      .then((data) => {
        // dentro de tu bloque .then((data) => { ... })
        console.log("Datos devueltos del servidor: ", data);
         showSendingMessage(result, false);

        switch (data) {
          case "error_empty_fields":
            result.innerHTML = "";
            result.insertAdjacentHTML(
              "beforeend",
              "<span style='color: red; text-align: center; margin: 10px 0;font-weight: 600; padding: 10px 12px; background: #ff000021;border: solid 0.5px red;'>Todos los campos son obligatorios</span><br>"
            );
            break;
          case "error_validate":
            result.innerHTML = "";
            result.insertAdjacentHTML(
                "beforeend",
                "<span style='color: red; text-align: center; margin: 10px 0;font-weight: 600; padding: 10px 12px; background: #ff000021;border: solid 0.5px red;'>Email es requerido y válido</span><br>"
              );
           
            break;
          case "error_invalid_file_type":
            result.innerHTML = "";
            result.insertAdjacentHTML(
              "beforeend",
              "<span style='color: red; text-align: center; margin: 10px 0;font-weight: 600; padding: 10px 12px; background: #ff000021;border: solid 0.5px red;'>Tipo de archivo inválido</span><br>"
            );
            break;
            case "error_not_pdf":
            result.innerHTML = "";
            result.insertAdjacentHTML(
              "beforeend",
              "<span style='color: red; text-align: center; margin: 10px 0;font-weight: 600; padding: 10px 12px; background: #ff000021;border: solid 0.5px red;'>Solo se permite archivo pdf</span><br>"
            );
            break;
          case "failed_file_send":
            result.innerHTML = "";
            result.insertAdjacentHTML(
              "beforeend",
              "<span style='color: red; text-align: center; margin: 10px 0;font-weight: 600; padding: 10px 12px; background: #ff000021;border: solid 0.5px red;'>El archivo pdf de tu CV es requerido</span><br>"
            );
            break;
          case "success":
            result.innerHTML = "";
            result.insertAdjacentHTML(
              "beforeend",
              "<span style='color: #67aa46; text-align: center; margin: 10px 0;font-weight: 600; padding: 10px 12px; background: #18bb7c2e; border: solid 0.5px #308109;'>¡Postaluación enviada con éxito!</span>"
            );
            form.reset();
            form.style.display = "none";
            setTimeout(() => {
              form.style.display = "block";
              result.innerHTML = "";
            }, 10000);
            break;
          default:
            result.innerHTML = "Ocurrió un error desconocido";
        }
      })
      .catch((error) => {
      console.log("Error capturado:", error);
        result.innerHTML = "Error: " + error;
        console.log("Detalles adicionales:", error.message);
        console.log("Error capturado: ", error.message);
  console.log("Error capturado: ", error.name);
  
  result.innerHTML = "Error: " + error.message;
      });
  }

  document.addEventListener("submit", function (e) {
    const form = e.target.closest("form");
    if (form) {
      e.preventDefault();
      const resultId = form.getAttribute("data-result-id");
      const result = document.getElementById(resultId);
      if (result) {
        sendmail(url_fecth, form, result);
      } else {
        console.error("Elemento de resultado no encontrado");
      }
    }
  });
});

