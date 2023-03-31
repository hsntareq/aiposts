<?php
/**
 * Generate posts template for aiposts.
 *
 * @var $input_classes
 * @package wp-plugin
 */

?>
<div class="ap-h-full xl:ap-m-12 ap-m-6 xl:ap-ml-5 ap-ml-3">
	<div class="ap-flex ap-items-end ap-justify-between ap-w-full ap-pb-3">
		<div class="">
			<h1 class="ap-font-normal ap-text-2xl">AiPosts Generator </h1>
			<small>To generate posts, pages, and post types utilizing the GPT-4 technology of <code
					class="ap-rounded-md">AiPosts</code>, simply access the application's functionality.</small>

		</div>
	</div>

	<div class="ap-mt-5 ap-w-full ap-flex ap-gap-10 ap-items-start">

		<main class="ap-flex-1">
			<form action="" class="xl:ap-w-2/3 ap-w-full">

				<div
					class="ap-flex lg:ap-w-2/3 ap-w-full ap-bg-gray-50 ap-justify-start ap-p-5 ap-rounded-bl-2xl ap-rounded-tr-2xl ap-shadow-md ap-gap-5 ap-border ap-border-gray-300 ap-mb-5">
					<div class="ap-flex-1 ap-relative" for="keywords">
						<input class="sr_number <?php esc_attr_e( $input_classes, 'aiposts' ); ?>" type="number"
							name="token" id="token" placeholder="Maximum token" autocomplete="off" min="1" max="1000"
							step="1" />
						<span sr-tooltip="This is the maximum token number you want to use for a request."
							class="ap-absolute ap-right-2 ap-top-[.7rem]"><span
								class="ap-text-gray-300 hover:ap-text-gray-400 ap-transition-all"><?php _get_svg( 'sr_help' ); ?></span></span>
					</div>
					<div class="ap-flex-1" for="keywords">
						<input class="<?= $input_classes ?> sr_number" type="number" min=".1" max="1.0" step=".1"
							name="keywords" placeholder="Temparature" autocomplete="on" />
					</div>
					<button
						class="ap-transition-all ap-text-white ap-bg-[#2271b1]  hover:ap-bg-[#135e96] focus:ap-bg-[#134066] ap-px-3 ap-rounded ap-flex ap-items-center ap-gap-2">
						<?php _get_svg( 'sr_save', 'ap-flex-1' ) ?>
						<span>Save</span>
					</button>
				</div>
			</form>
			<!-- { title: 'Write me a resume', type:'posts' },
							{ title: 'Orange, Banana, apple write an article', type:'pages' },
							{ title: 'Write me a sample feedback.', type:'books' }, -->
			<form action="" class="xl:ap-w-2/3 ap-w-full" id="ap_request_form">
				<div class="ap-bg-gray-50 ap-p-5 ap-rounded-bl-2xl ap-rounded-tr-2xl ap-shadow-md ap-gap-5 ap-border ap-border-gray-300"
					x-data="{
						posts: [

						],
						get filteredItems() {
							return this.posts
						},
						addItemToPostList(){
							console.log($refs.apInputType.value);
							this.posts.push({
								title: $refs.apInputKey.value,
								type: $refs.apInputType.value
							})
							$refs.apInputKey.value = '';
							$refs.apInputType.value = 'post';
						}
					}" x-cloak>
					<div class="ap-mb-3 ap-clone-post">

						<div class="ap-added-questions">
							<template x-for="(post, index) in filteredItems" :key="index">
								<div class="ap-flex ap-justify-between ap-gap-5 ap-mb-3">
									<div class="ap-flex-[2] ap-relative" for="keywords">
										<input class="<?= $input_classes ?>" type="text" name="keywords[]"
											placeholder="Keywords / Phrase for your post" autocomplete="off"
											:value="post.title" />
									</div>

									<div class="ap-w-36 ap-shrink-0">
										<select :value="post.type" class="<?= $input_classes ?>" name="post_types[]">
											<?php foreach ( $post_types as $key => $item ) : ?>
												<option value="<?php esc_attr_e( $key ) ?>"><?php esc_attr_e( $item ); ?>
												</option>
											<?php endforeach; ?>
										</select>
									</div>
									<button
										class="ap-w-12 ap-transition-all ap-ring-inset ap-text-red focus:ap-ring ap-ring-1 ap-text-red-600 hover:ap-ring-2 ap-ring-red-500 ap-px-3 ap-rounded">
										<?php _get_svg( 'x-mark', 'ap-flex-1' ) ?>
									</button>
								</div>
							</template>
						</div>

						<div class="ap-flex ap-justify-between ap-gap-5 ap-mb-3 ap-group">
							<div class="ap-flex-1 ap-relative" for="keywords">
								<input class="<?= $input_classes ?>" type="text" name="keywords[]"
									placeholder="Keywords / Phrase for your post" autocomplete="off"
									x-ref="apInputKey" />

								<span sr-tooltip="This is the maximum token number you want to use for a request."
									class="ap-invisible group-hover:ap-visible ap-absolute ap-right-2 ap-top-[.7rem]"><span
										class="ap-text-gray-300 hover:ap-text-gray-400 ap-transition-all"><?php _get_svg( 'sr_help' ); ?></span></span>
							</div>
							<div class="ap-w-36 ap-shrink-0">
								<select class="<?= $input_classes ?>" name="post_types[]" x-ref="apInputType">
									<?php foreach ( $post_types as $key => $item ) : ?>
										<option value="<?php esc_attr_e( $key ) ?>"><?php esc_attr_e( $item ); ?></option>
									<?php endforeach; ?>
								</select>
							</div>
							<button @click.prevent="addItemToPostList()"
								class="ap-w-12 ap-transition-all ap-text-white ap-bg-[#2271b1]  hover:ap-bg-[#135e96] focus:ap-bg-[#134066] ap-px-3 ap-rounded">
								<?php _get_svg( 'sr_plus_btn', 'ap-flex-1' ) ?>
							</button>
						</div>
					</div>
					<p class="ap-mt-5">
						To generate the expected posts, click the Generate button and ensure that the
						keywords for your post/page are correct. For additional assistance, visit the provided link.
						The contents will be generated using the GPT-4 API.
					</p>
					<div class="ap-mt-3">
						<button
							class="ap-py-3 ap-text-lg ap-w-full ap-transition-all ap-text-white ap-bg-[#2271b1]  hover:ap-bg-[#135e96] focus:ap-bg-[#134066] ap-px-3 ap-rounded"
							id="ap_generate_btn">Generate Posts</button>
					</div>
				</div>
			</form>
			<!--
aiposts:[
					{title:'AiPost title one AiPost title one AiPost title one AiPost title one AiPost title one title one title one  title one AiPost title one AiPost title one ', content:'<p>Dear CoderGens,</p><p>I am Hasan Tareq and I am writing to apply for the position of Frontend Developer. With my 3+ years of experience in the field, I believe I am the perfect candidate for this job.</p><p>I am confident that my knowledge and skills in HTML, CSS, JavaScript, React, and Angular will be an asset to your team.</p><p>I look forward to hearing from you.</p><p>Sincerely,</p><p>Hasan Tareq</p>'},
					{title:'AiPost title one', content:'<p>Dear Manager,</p><p>I am writing to express my interest in the Frontend Developer position at CogerGens. With a degree in Computer Science and five years of experience developing front-end applications, I believe I am the perfect candidate for the role.</p><p>During my time at JoomShaper, I worked on a variety of projects, from creating webpages to developing mobile applications. My experience with HTML, CSS, and JavaScript enabled me to build aesthetically pleasing, user-friendly interfaces that met the business’s requirements. I also have experience using React and Angular frameworks to create interactive, dynamic webpages.</p><p>In addition to my technical skills, I am a highly organized and detail-oriented worker. I am able to work independently as well as in a team setting, and I am comfortable taking initiative when necessary. I am also adept at troubleshooting and debugging code, and I am always eager to learn new technologies and techniques.</p><p>I am confident that my qualifications and experience make me an ideal candidate for this position. I would welcome the opportunity to discuss my candidacy further and look forward to hearing from you.</p><p>Sincerely,</p><p>Hasan Tareq</p>'},
					{title:'AiPost title two', content:'<p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Cupiditate neque quasi sequi similique earum odio molestiae maxime, adipisci voluptates facere expedita non magnam incidunt hic cumque nostrum numquam nesciunt mollitia! Lorem, ipsum dolor sit amet consectetur adipisicing elit. Cupiditate neque quasi sequi similique earum odio molestiae maxime, adipisci voluptates facere expedita non magnam incidunt hic cumque nostrum numquam nesciunt mollitia!</p>'},
					{title:'AiPost title three', content:'<p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Cupiditate neque quasi sequi similique earum odio </p><p> molestiae maxime, adipisci voluptates facere expedita non magnam incidunt hic cumque nostrum numquam nesciunt mollitia!</p>'},
					{title:'AiPost title four', content:'<p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Cupiditate neque quasi sequi similique earum odio </p><p> molestiae maxime, adipisci voluptates facere expedita non magnam incidunt hic cumque nostrum numquam nesciunt mollitia!</p><p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Cupiditate neque quasi sequi similique earum odio </p><p> molestiae maxime, adipisci voluptates facere expedita non magnam incidunt hic cumque nostrum numquam nesciunt mollitia!</p>'},
					]
 -->
			<div class="view_response ap-mt-10" x-data="{aiposts:[]}">

				<template x-for="post in aiposts">
					<div class="ap-bg-gray-50 ap-mb-5 ap-shadow-md ap-rounded-sm">
						<div class="ap-py-3 ap-px-5 ap-border-b">
							<h3 class="ap-text-xl" x-text="post.title"></h3>
						</div>
						<div class="[&_p]:ap-mb-4 [&_p]:ap-text-base ap-px-5 ap-pt-4 ap-pb-2" x-html="post.content">
						</div>
						<div class="ap-flex ap-justify-between ap-py-4 ap-px-5 ap-border-t">
							<button
								class="ap-py-1 ap-px-3 ap-bg-red-50 hover:ap-bg-red-100 active:ap-bg-red-200 ap-transition-all ap-border-0 ap-ring-1 focus:ap-ring-1 ap-ring-red-300">Remove</button>
							<div class="ap-flex ap-gap-2">
								<select class="ap-border-0 focus:ap-border-0 !ap-bg-transparent">
									<option value="post">Posts</option>
									<option value="page">Pages</option>
								</select>
								<button
									class="ap-py-1 ap-px-3 ap-bg-blue-50 hover:ap-bg-blue-100 active:ap-bg-blue-200 ap-transition-all ap-border-0 ap-ring-1 focus:ap-ring-1 ap-ring-blue-300">Create</button>
								<button
									class="ap-py-1 ap-px-3 ap-bg-orange-50 hover:ap-bg-orange-100 active:ap-bg-orange-200 ap-transition-all ap-border-0 ap-ring-1 focus:ap-ring-1 ap-ring-orange-300">Draft</button>
								<button
									class="ap-py-1 ap-px-3 ap-bg-green-50 hover:ap-bg-green-100 active:ap-bg-green-200 ap-transition-all ap-border-0 ap-ring-1 focus:ap-ring-1 ap-ring-green-300">Regenerate</button>
							</div>

						</div>
					</div>
				</template>

			</div>

		</main>
	</div>
</div>
