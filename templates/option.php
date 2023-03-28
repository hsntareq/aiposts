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
					<p class="ap-mt-5">To generate the expected posts, click the Generate button and ensure that the
						keywords for your post/page are correct. For additional assistance, visit the provided link. The
						contents will be generated using the GPT-4 API.</p>
					<div class="ap-mt-3">
						<button
							class="ap-py-3 ap-text-lg ap-w-full ap-transition-all ap-text-white ap-bg-[#2271b1]  hover:ap-bg-[#135e96] focus:ap-bg-[#134066] ap-px-3 ap-rounded"
							id="ap_generate_btn">Generate Posts</button>
					</div>
				</div>
			</form>

			<div class="view_response ap-mt-10"></div>

		</main>
	</div>
</div>
