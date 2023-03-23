import Alpine from 'alpinejs';
window.Alpine = Alpine
Alpine.start();


console.log('log is working',ajaxurl);
const formData = new FormData();
formData.append('action', 'get_openai_data');
let viewElement = document.querySelector('.view_response');

/*
fetch(ajaxurl,  {
    method: "POST",
    body: formData,
  })
  .then((response) => response.json())
  .then((data) => {
    data.choices.forEach(element => {
        let result = element.text.split('\n').map(e => {
            return e && e + '<br>';
        });

        viewElement.insertAdjacentHTML("beforeend", `<div class="ap-p-3 ap-bg-gray-50 ap-mb-5 ap-shadow-md ap-rounded-sm">${result.join('')}</div>`);
        // viewElement.innerHTML += result.join('');
        console.log(result);
    });
  })
  .catch((error) => {
    console.error("Error:", error);
  }); */
