import Alpine from 'alpinejs';
window.Alpine = Alpine
Alpine.start();


console.log('log is working',ajaxurl);
const apRequestForm = document.getElementById("ap_request_form");
const apGenerateBtn = document.getElementById("ap_generate_btn");

apGenerateBtn.addEventListener('click',(e)=>{
  e.preventDefault();

  const formData = new FormData(apRequestForm);
  // formData.append('name', 'John');
  // formData.append('password', 'John123');

  formData.append('action', 'get_openai_data');
  let viewElement = document.querySelector('.view_response');
  viewElement.innerHTML='';

  fetch(ajaxurl,  {
      method: "POST",
      body: formData,
    })
    .then((response) => response.json())
    .then((data) => {

      console.log(data);
      let arrayData = data.choices && data.choices.length > 0 || data && data.length > 0

      if(data.choices && data.choices.length > 0 || data && data.length > 0){

        data.choices.forEach(element => {
            let result = element.text.split('\n').map(e => {
                return e && '<p>' + e + '</p>';
            });
            viewElement.innerHTML += `<div class="ap-p-3 ap-bg-gray-50 ap-mb-5 ap-shadow-md ap-rounded-sm">${result.join('')}</div>`;
            console.log(result);
        });
      }else{
        viewElement.innerHTML += `<div class="ap-p-3 ap-bg-gray-50 ap-mb-5 ap-shadow-md ap-rounded-sm">Please add some keyword to generate AI post.</div>`;

      }
    })
    .catch((error) => {
      console.error("Error:", error);
    });
})
