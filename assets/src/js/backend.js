import Alpine from 'alpinejs';
window.Alpine = Alpine
Alpine.start();


console.log('log is working',ajaxurl);
const apRequestForm = document.getElementById("ap_request_form");
const apGenerateBtn = document.getElementById("ap_generate_btn");

apGenerateBtn && apGenerateBtn.addEventListener('click',(e)=>{
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

		data.forEach(item => {
			console.log(item);

            let answer = item.a.split('\n').map(e => {
                return e && '<p>' + e + '</p>';
            });
            viewElement.innerHTML += `<div class="ap-p-3 ap-bg-gray-50 ap-mb-5 ap-shadow-md ap-rounded-sm"><h3 class="ap-text-lg ap-mb-3">${item.q}</h3>${answer.join('')}</div>`;
        });
      /* }else{
        viewElement.innerHTML += `<div class="ap-p-3 ap-bg-gray-50 ap-mb-5 ap-shadow-md ap-rounded-sm">Please add some keyword to generate AI post.</div>`;

      } */
    })
    .catch((error) => {
      console.error("Error:", error);
    });
})
