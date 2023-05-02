import Alpine from 'alpinejs';
window.Alpine = Alpine
window.appState = {
	aiposts: null,
};


Alpine.data('ap_post_generate', (refs) => (
	{
		posts: [

		],
		get filteredItems() {
			return this.posts
		},
		addItemToPostList() {
			// console.log(refs.apInputKey.value);
			this.posts.push({
				title: refs.apInputKey.value,
				type: refs.apInputType.value
			})
			refs.apInputKey.value = '';
			refs.apInputType.value = 'post';
		}
	}
))


Alpine.start();


// console.log('log is working', ajaxurl);
const apRequestForm = document.getElementById("ap_request_form");
const apGenerateBtn = document.getElementById("ap_generate_btn");





apGenerateBtn && apGenerateBtn.addEventListener('click', (e) => {
	e.preventDefault();

	const formData = new FormData(apRequestForm);
	// formData.append('name', 'John');
	// formData.append('password', 'John123');

	formData.append('action', 'get_openai_data');
	let viewElement = document.querySelector('.view_response');
	viewElement.innerHTML = '';

	fetch(ajaxurl, {
		method: "POST",
		body: formData,
	})
		.then((response) => response.json())
		.then((data) => {
			let aiPostData = [];
			data.forEach(item => {
				let answer = item.a.split('\n').map(e => {
					return e && '<p>' + e + '</p>';
				});

				aiPostData.push({ title: item.q, content: answer.join('') })

			})

			// aiPostsDataObj = aiPostData;

			console.log(aiPostData);


			data.forEach(item => {
				window.appState.aiposts = { title: 'AiPost title one AiPost title one AiPost title one AiPost title one AiPost title one title one title one  title one AiPost title one AiPost title one ', content: '<p>Dear CoderGens,</p><p>I am Hasan Tareq and I am writing to apply for the position of Frontend Developer. With my 3+ years of experience in the field, I believe I am the perfect candidate for this job.</p><p>I am confident that my knowledge and skills in HTML, CSS, JavaScript, React, and Angular will be an asset to your team.</p><p>I look forward to hearing from you.</p><p>Sincerely,</p><p>Hasan Tareq</p>' };

				/* console.log(item);

				let answer = item.a.split('\n').map(e => {
					return e && '<p>' + e + '</p>';
				});
				viewElement.innerHTML += `<div class="ap-p-3 ap-bg-gray-50 ap-mb-5 ap-shadow-md ap-rounded-sm [&_p]:ap-mb-3"><h3 class="ap-text-lg ap-mb-3">${item.q}</h3>${answer.join('')}</div>`; */
			});

			/* }else{
			  viewElement.innerHTML += `<div class="ap-p-3 ap-bg-gray-50 ap-mb-5 ap-shadow-md ap-rounded-sm">Please add some keyword to generate AI post.</div>`;

			} */
		})
		.catch((error) => {
			console.error("Error:", error);
		});
})
